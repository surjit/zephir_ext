/**
 * Slim Framework (http://slimframework.com)
 *
 * @link      https://github.com/slimphp/Slim
 * @copyright Copyright (c) 2011-2016 Josh Lockhart
 * @license   https://github.com/slimphp/Slim/blob/3.x/LICENSE.md (MIT License)
 */
namespace Zesle\Slim\Handlers;

use Exception;
use Zesle\Psr\Http\Message\ResponseInterface;
use Zesle\Psr\Http\Message\ServerRequestInterface;
use Zesle\Slim\Http\Body;
/**
 * Default Slim application error handler
 *
 * It outputs the error message and diagnostic information in either JSON, XML,
 * or HTML based on the Accept header.
 */
class Error
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
     * @param Exception              $exception The caught Exception object
     *
     * @return ResponseInterface
     */
    public function __invoke(<ServerRequestInterface> request, <ResponseInterface> response, <Exception> exception) -> <ResponseInterface>
    {
        var contentType, output, body;
    
        let contentType =  this->determineContentType(request);
        switch (contentType) {
            case "application/json":
                let output =  this->renderJsonErrorMessage(exception);
                break;
            case "text/xml":
            case "application/xml":
                let output =  this->renderXmlErrorMessage(exception);
                break;
            case "text/html":
                let output =  this->renderHtmlErrorMessage(exception);
                break;
        }
        this->writeToErrorLog(exception);
        let body =  new Body(fopen("php://temp", "r+"));
        body->write(output);
        return response->withStatus(500)->withHeader("Content-type", contentType)->withBody(body);
    }
    
    /**
     * Write to the error log if displayErrorDetails is false
     *
     * @param Exception $exception
     * @return void
     */
    protected function writeToErrorLog(<\Exception> exception)
    {
        var message;
    
        if this->displayErrorDetails {
            return;
        }
        let message =  "Slim Application Error:" . PHP_EOL;
        let message .= this->renderTextException(exception);
        let exception =  exception->getPrevious();
        while (exception) {
            let message .= PHP_EOL . "Previous exception:" . PHP_EOL;
            let message .= this->renderTextException(exception);
        let exception =  exception->getPrevious();
        }
        let message .= PHP_EOL . "View in rendered output by enabling the \"displayErrorDetails\" setting." . PHP_EOL;
        error_log(message);
    }
    
    /**
     * Render exception as Text.
     *
     * @param Exception $exception
     *
     * @return string
     */
    protected function renderTextException(<Exception> exception) -> string
    {
        var text, code, message, file, line, trace;
    
        let text =  sprintf("Type: %s" . PHP_EOL, get_class(exception));
        let code =  exception->getCode();
        if code {
            let text .= sprintf("Code: %s" . PHP_EOL, code);
        }
        let message =  exception->getMessage();
        if message {
            let text .= sprintf("Message: %s" . PHP_EOL, htmlentities(message));
        }
        let file =  exception->getFile();
        if file {
            let text .= sprintf("File: %s" . PHP_EOL, file);
        }
        let line =  exception->getLine();
        if line {
            let text .= sprintf("Line: %s" . PHP_EOL, line);
        }
        let trace =  exception->getTraceAsString();
        if trace {
            let text .= sprintf("Trace: %s", trace);
        }
        return text;
    }
    
    /**
     * Render HTML error page
     *
     * @param  Exception $exception
     * @return string
     */
    protected function renderHtmlErrorMessage(<Exception> exception) -> string
    {
        var title, html, output;
    
        let title = "Slim Application Error";
        if this->displayErrorDetails {
            let html = "<p>The application could not run because of the following error:</p>";
            let html .= "<h2>Details</h2>";
            let html .= this->renderHtmlException(exception);
            let exception =  exception->getPrevious();
            while (exception) {
                let html .= "<h2>Previous exception</h2>";
                let html .= this->renderHtmlException(exception);
            let exception =  exception->getPrevious();
            }
        } else {
            let html = "<p>A website error has occurred. Sorry for the temporary inconvenience.</p>";
        }
        let output =  sprintf("<html><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8'>" . "<title>%s</title><style>body{margin:0;padding:30px;font:12px/1.5 Helvetica,Arial,Verdana," . "sans-serif;}h1{margin:0;font-size:48px;font-weight:normal;line-height:48px;}strong{" . "display:inline-block;width:65px;}</style></head><body><h1>%s</h1>%s</body></html>", title, title, html);
        return output;
    }
    
    /**
     * Render exception as HTML.
     *
     * @param Exception $exception
     *
     * @return string
     */
    protected function renderHtmlException(<Exception> exception) -> string
    {
        var html, code, message, file, line, trace;
    
        let html =  sprintf("<div><strong>Type:</strong> %s</div>", get_class(exception));
        let code =  exception->getCode();
        if code {
            let html .= sprintf("<div><strong>Code:</strong> %s</div>", code);
        }
        let message =  exception->getMessage();
        if message {
            let html .= sprintf("<div><strong>Message:</strong> %s</div>", htmlentities(message));
        }
        let file =  exception->getFile();
        if file {
            let html .= sprintf("<div><strong>File:</strong> %s</div>", file);
        }
        let line =  exception->getLine();
        if line {
            let html .= sprintf("<div><strong>Line:</strong> %s</div>", line);
        }
        let trace =  exception->getTraceAsString();
        if trace {
            let html .= "<h2>Trace</h2>";
            let html .= sprintf("<pre>%s</pre>", htmlentities(trace));
        }
        return html;
    }
    
    /**
     * Render JSON error
     *
     * @param  Exception $exception
     * @return string
     */
    protected function renderJsonErrorMessage(<Exception> exception) -> string
    {
        var error;
    
        let error =  ["message" : "Slim Application Error"];
        if this->displayErrorDetails {
            let error["exception"] =  [];
            do {
                let error["exception"][] =  ["type" : get_class(exception), "code" : exception->getCode(), "message" : exception->getMessage(), "file" : exception->getFile(), "line" : exception->getLine(), "trace" : explode("
", exception->getTraceAsString())];let exception =  exception->getPrevious();
            
            } while (exception);
        }
        return json_encode(error, JSON_PRETTY_PRINT);
    }
    
    /**
     * Render XML error
     *
     * @param  Exception $exception
     * @return string
     */
    protected function renderXmlErrorMessage(<Exception> exception) -> string
    {
        var xml;
    
        let xml = "<error>
  <message>Slim Application Error</message>
";
        if this->displayErrorDetails {
            do {
                let xml .= "  <exception>
";
                let xml .= "    <type>" . get_class(exception) . "</type>
";
                let xml .= "    <code>" . exception->getCode() . "</code>
";
                let xml .= "    <message>" . this->createCdataSection(exception->getMessage()) . "</message>
";
                let xml .= "    <file>" . exception->getFile() . "</file>
";
                let xml .= "    <line>" . exception->getLine() . "</line>
";
                let xml .= "    <trace>" . this->createCdataSection(exception->getTraceAsString()) . "</trace>
";
                let xml .= "  </exception>
";let exception =  exception->getPrevious();
            
            } while (exception);
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