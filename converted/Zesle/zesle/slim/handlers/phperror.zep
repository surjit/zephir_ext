/**
 * Slim Framework (http://slimframework.com)
 *
 * @link      https://github.com/slimphp/Slim
 * @copyright Copyright (c) 2011-2016 Josh Lockhart
 * @license   https://github.com/slimphp/Slim/blob/3.x/LICENSE.md (MIT License)
 */
namespace Zesle\Slim\Handlers;

use Throwable;
use Zesle\Psr\Http\Message\ResponseInterface;
use Zesle\Psr\Http\Message\ServerRequestInterface;
use Zesle\Slim\Http\Body;
/**
 * Default Slim application error handler for PHP 7+ Throwables
 *
 * It outputs the error message and diagnostic information in either JSON, XML,
 * or HTML based on the Accept header.
 */
class PhpError
{
    protected displayErrorDetails;
    /**
     * Known handled content types
     *
     * @var array
     */
    protected knownContentTypes = ["application/json", "application/xml", "text/xml", "text/html"];
    /**
     * Constructor
     *
     * @param boolean $displayErrorDetails Set to true to display full details
     */
    public function __construct(boolean displayErrorDetails = false) -> void
    {
        let this->displayErrorDetails =  (bool) displayErrorDetails;
    }
    
    /**
     * Invoke error handler
     *
     * @param ServerRequestInterface $request   The most recent Request object
     * @param ResponseInterface      $response  The most recent Response object
     * @param Throwable              $error     The caught Throwable object
     *
     * @return ResponseInterface
     */
    public function __invoke(<ServerRequestInterface> request, <ResponseInterface> response, <Throwable> error) -> <ResponseInterface>
    {
        var contentType, output, body;
    
        let contentType =  this->determineContentType(request);
        switch (contentType) {
            case "application/json":
                let output =  this->renderJsonErrorMessage(error);
                break;
            case "text/xml":
            case "application/xml":
                let output =  this->renderXmlErrorMessage(error);
                break;
            case "text/html":
                let output =  this->renderHtmlErrorMessage(error);
                break;
        }
        this->writeToErrorLog(error);
        let body =  new Body(fopen("php://temp", "r+"));
        body->write(output);
        return response->withStatus(500)->withHeader("Content-type", contentType)->withBody(body);
    }
    
    /**
     * Write to the error log if displayErrorDetails is false
     *
     * @param Throwable $error
     *
     * @return void
     */
    protected function writeToErrorLog(error)
    {
        var message;
    
        if this->displayErrorDetails {
            return;
        }
        let message =  "Slim Application Error:" . PHP_EOL;
        let message .= this->renderTextError(error);
        let error =  error->getPrevious();
        while (error) {
            let message .= PHP_EOL . "Previous error:" . PHP_EOL;
            let message .= this->renderTextError(error);
        let error =  error->getPrevious();
        }
        let message .= PHP_EOL . "View in rendered output by enabling the \"displayErrorDetails\" setting." . PHP_EOL;
        error_log(message);
    }
    
    /**
     * Render error as Text.
     *
     * @param Throwable $error
     *
     * @return string
     */
    protected function renderTextError(<Throwable> error) -> string
    {
        var text, code, message, file, line, trace;
    
        let text =  sprintf("Type: %s" . PHP_EOL, get_class(error));
        let code =  error->getCode();
        if code {
            let text .= sprintf("Code: %s" . PHP_EOL, code);
        }
        let message =  error->getMessage();
        if message {
            let text .= sprintf("Message: %s" . PHP_EOL, htmlentities(message));
        }
        let file =  error->getFile();
        if file {
            let text .= sprintf("File: %s" . PHP_EOL, file);
        }
        let line =  error->getLine();
        if line {
            let text .= sprintf("Line: %s" . PHP_EOL, line);
        }
        let trace =  error->getTraceAsString();
        if trace {
            let text .= sprintf("Trace: %s", trace);
        }
        return text;
    }
    
    /**
     * Render HTML error page
     *
     * @param Throwable $error
     *
     * @return string
     */
    protected function renderHtmlErrorMessage(<Throwable> error) -> string
    {
        var title, html, output;
    
        let title = "Slim Application Error";
        if this->displayErrorDetails {
            let html = "<p>The application could not run because of the following error:</p>";
            let html .= "<h2>Details</h2>";
            let html .= this->renderHtmlError(error);
            let error =  error->getPrevious();
            while (error) {
                let html .= "<h2>Previous error</h2>";
                let html .= this->renderHtmlError(error);
            let error =  error->getPrevious();
            }
        } else {
            let html = "<p>A website error has occurred. Sorry for the temporary inconvenience.</p>";
        }
        let output =  sprintf("<html><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8'>" . "<title>%s</title><style>body{margin:0;padding:30px;font:12px/1.5 Helvetica,Arial,Verdana," . "sans-serif;}h1{margin:0;font-size:48px;font-weight:normal;line-height:48px;}strong{" . "display:inline-block;width:65px;}</style></head><body><h1>%s</h1>%s</body></html>", title, title, html);
        return output;
    }
    
    /**
     * Render error as HTML.
     *
     * @param Throwable $error
     *
     * @return string
     */
    protected function renderHtmlError(<Throwable> error) -> string
    {
        var html, code, message, file, line, trace;
    
        let html =  sprintf("<div><strong>Type:</strong> %s</div>", get_class(error));
        let code =  error->getCode();
        if code {
            let html .= sprintf("<div><strong>Code:</strong> %s</div>", code);
        }
        let message =  error->getMessage();
        if message {
            let html .= sprintf("<div><strong>Message:</strong> %s</div>", htmlentities(message));
        }
        let file =  error->getFile();
        if file {
            let html .= sprintf("<div><strong>File:</strong> %s</div>", file);
        }
        let line =  error->getLine();
        if line {
            let html .= sprintf("<div><strong>Line:</strong> %s</div>", line);
        }
        let trace =  error->getTraceAsString();
        if trace {
            let html .= "<h2>Trace</h2>";
            let html .= sprintf("<pre>%s</pre>", htmlentities(trace));
        }
        return html;
    }
    
    /**
     * Render JSON error
     *
     * @param Throwable $error
     *
     * @return string
     */
    protected function renderJsonErrorMessage(<Throwable> error) -> string
    {
        var json;
    
        let json =  ["message" : "Slim Application Error"];
        if this->displayErrorDetails {
            let json["error"] =  [];
            do {
                let json["error"][] =  ["type" : get_class(error), "code" : error->getCode(), "message" : error->getMessage(), "file" : error->getFile(), "line" : error->getLine(), "trace" : explode("
", error->getTraceAsString())];let error =  error->getPrevious();
            
            } while (error);
        }
        return json_encode(json, JSON_PRETTY_PRINT);
    }
    
    /**
     * Render XML error
     *
     * @param  Throwable $error
     * @return string
     */
    protected function renderXmlErrorMessage(<Throwable> error) -> string
    {
        var xml;
    
        let xml = "<error>
  <message>Slim Application Error</message>
";
        if this->displayErrorDetails {
            do {
                let xml .= "  <error>
";
                let xml .= "    <type>" . get_class(error) . "</type>
";
                let xml .= "    <code>" . error->getCode() . "</code>
";
                let xml .= "    <message>" . this->createCdataSection(error->getMessage()) . "</message>
";
                let xml .= "    <file>" . error->getFile() . "</file>
";
                let xml .= "    <line>" . error->getLine() . "</line>
";
                let xml .= "    <trace>" . this->createCdataSection(error->getTraceAsString()) . "</trace>
";
                let xml .= "  </error>
";let error =  error->getPrevious();
            
            } while (error);
        }
        let xml .= "</error>";
        return xml;
    }
    
    /**
     * Returns a CDATA section with the given content.
     *
     * @param  string $content
     * @return string
     */
    protected function createCdataSection(string content) -> string
    {
        return sprintf("<![CDATA[%s]]>", str_replace("]]>", "]]]]><![CDATA[>", content));
    }
    
    /**
     * Determine which content type we know about is wanted using Accept header
     *
     * @param ServerRequestInterface $request
     * @return string
     */
    protected function determineContentType(<ServerRequestInterface> request) -> string
    {
        var acceptHeader, selectedContentTypes;
    
        let acceptHeader =  request->getHeaderLine("Accept");
        let selectedContentTypes =  array_intersect(explode(",", acceptHeader), this->knownContentTypes);
        if count(selectedContentTypes) {
            return selectedContentTypes[0];
        }
        return "text/html";
    }

}