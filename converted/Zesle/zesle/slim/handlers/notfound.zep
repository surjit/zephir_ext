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
 * Default Slim application not found handler.
 *
 * It outputs a simple message in either JSON, XML or HTML based on the
 * Accept header.
 */
class NotFound
{
    /**
     * Known handled content types
     *
     * @var array
     */
    protected knownContentTypes = ["application/json", "application/xml", "text/xml", "text/html"];
    /**
     * Invoke not found handler
     *
     * @param  ServerRequestInterface $request  The most recent Request object
     * @param  ResponseInterface      $response The most recent Response object
     *
     * @return ResponseInterface
     */
    public function __invoke(<ServerRequestInterface> request, <ResponseInterface> response) -> <ResponseInterface>
    {
        var contentType, output, body;
    
        let contentType =  this->determineContentType(request);
        switch (contentType) {
            case "application/json":
                let output =  this->renderJsonNotFoundOutput(request, response);
                break;
            case "text/xml":
            case "application/xml":
                let output =  this->renderXmlNotFoundOutput(request, response);
                break;
            case "text/html":
                let output =  this->renderHtmlNotFoundOutput(request, response);
        }
        let body =  new Body(fopen("php://temp", "r+"));
        body->write(output);
        return response->withStatus(404)->withHeader("Content-Type", contentType)->withBody(body);
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
     * Return a response for application/json content not found
     *
     * @param  ServerRequestInterface $request  The most recent Request object
     * @param  ResponseInterface      $response The most recent Response object
     *
     * @return ResponseInterface
     */
    protected function renderJsonNotFoundOutput(<ServerRequestInterface> request, <ResponseInterface> response) -> <ResponseInterface>
    {
        return "{\"message\":\"Not found\"}";
    }
    
    /**
     * Return a response for xml content not found
     *
     * @param  ServerRequestInterface $request  The most recent Request object
     * @param  ResponseInterface      $response The most recent Response object
     *
     * @return ResponseInterface
     */
    protected function renderXmlNotFoundOutput(<ServerRequestInterface> request, <ResponseInterface> response) -> <ResponseInterface>
    {
        return "<root><message>Not found</message></root>";
    }
    
    /**
     * Return a response for text/html content not found
     *
     * @param  ServerRequestInterface $request  The most recent Request object
     * @param  ResponseInterface      $response The most recent Response object
     *
     * @return ResponseInterface
     */
    protected function renderHtmlNotFoundOutput(<ServerRequestInterface> request, <ResponseInterface> response) -> <ResponseInterface>
    {
        var homeUrl;
    
        let homeUrl =  (string) request->getUri()->withPath("")->withQuery("")->withFragment("");
        return "<html>\n    <head>\n        <title>Page Not Found</title>\n        <style>\n            body{\n                margin:0;\n                padding:30px;\n                font:12px/1.5 Helvetica,Arial,Verdana,sans-serif;\n            }\n            h1{\n                margin:0;\n                font-size:48px;\n                font-weight:normal;\n                line-height:48px;\n            }\n            strong{\n                display:inline-block;\n                width:65px;\n            }\n        </style>\n    </head>\n    <body>\n        <h1>Page Not Found</h1>\n        <p>\n            The page you are looking for could not be found. Check the address bar\n            to ensure your URL is spelled correctly. If all else fails, you can\n            visit our home page at the link below.\n        </p>\n        <a href='{homeUrl}'>Visit the Home Page</a>\n    </body>\n</html>";
    }

}