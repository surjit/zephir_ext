/**
 * Slim Framework (http://slimframework.com)
 *
 * @link      https://github.com/slimphp/Slim
 * @copyright Copyright (c) 2011-2016 Josh Lockhart
 * @license   https://github.com/slimphp/Slim/blob/3.x/LICENSE.md (MIT License)
 */
namespace Zesle\Slim\Handlers;

use Zesle\Psr\Http\Message\ServerRequestInterface;
use Zesle\Psr\Http\Message\ResponseInterface;
use Zesle\Slim\Http\Body;
/**
 * Default Slim application not allowed handler
 *
 * It outputs a simple message in either JSON, XML or HTML based on the
 * Accept header.
 */
class NotAllowed
{
    /**
     * Known handled content types
     *
     * @var array
     */
    protected knownContentTypes = ["application/json", "application/xml", "text/xml", "text/html"];
    /**
     * Invoke error handler
     *
     * @param  ServerRequestInterface $request  The most recent Request object
     * @param  ResponseInterface      $response The most recent Response object
     * @param  string[]               $methods  Allowed HTTP methods
     *
     * @return ResponseInterface
     */
    public function __invoke(<ServerRequestInterface> request, <ResponseInterface> response, array methods) -> <ResponseInterface>
    {
        var status, contentType, output, body, allow;
    
        if request->getMethod() === "OPTIONS" {
            let status = 200;
            let contentType = "text/plain";
            let output =  this->renderPlainNotAllowedMessage(methods);
        } else {
            let status = 405;
            let contentType =  this->determineContentType(request);
            switch (contentType) {
                case "application/json":
                    let output =  this->renderJsonNotAllowedMessage(methods);
                    break;
                case "text/xml":
                case "application/xml":
                    let output =  this->renderXmlNotAllowedMessage(methods);
                    break;
                case "text/html":
                    let output =  this->renderHtmlNotAllowedMessage(methods);
                    break;
            }
        }
        let body =  new Body(fopen("php://temp", "r+"));
        body->write(output);
        let allow =  implode(", ", methods);
        return response->withStatus(status)->withHeader("Content-type", contentType)->withHeader("Allow", allow)->withBody(body);
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
    
    /**
     * Render PLAIN not allowed message
     *
     * @param  array                  $methods
     * @return string
     */
    protected function renderPlainNotAllowedMessage(array methods) -> string
    {
        var allow;
    
        let allow =  implode(", ", methods);
        return "Allowed methods: " . allow;
    }
    
    /**
     * Render JSON not allowed message
     *
     * @param  array                  $methods
     * @return string
     */
    protected function renderJsonNotAllowedMessage(array methods) -> string
    {
        var allow;
    
        let allow =  implode(", ", methods);
        return "{\"message\":\"Method not allowed. Must be one of: " . allow . "\"}";
    }
    
    /**
     * Render XML not allowed message
     *
     * @param  array                  $methods
     * @return string
     */
    protected function renderXmlNotAllowedMessage(array methods) -> string
    {
        var allow;
    
        let allow =  implode(", ", methods);
        return "<root><message>Method not allowed. Must be one of: {allow}</message></root>";
    }
    
    /**
     * Render HTML not allowed message
     *
     * @param  array                  $methods
     * @return string
     */
    protected function renderHtmlNotAllowedMessage(array methods) -> string
    {
        var allow, output;
    
        let allow =  implode(", ", methods);
        let output = "<html>\n    <head>\n        <title>Method not allowed</title>\n        <style>\n            body{\n                margin:0;\n                padding:30px;\n                font:12px/1.5 Helvetica,Arial,Verdana,sans-serif;\n            }\n            h1{\n                margin:0;\n                font-size:48px;\n                font-weight:normal;\n                line-height:48px;\n            }\n        </style>\n    </head>\n    <body>\n        <h1>Method not allowed</h1>\n        <p>Method not allowed. Must be one of: <strong>{allow}</strong></p>\n    </body>\n</html>";
        return output;
    }

}