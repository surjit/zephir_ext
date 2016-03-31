/**
 * Slim Framework (http://slimframework.com)
 *
 * @link      https://github.com/slimphp/Slim
 * @copyright Copyright (c) 2011-2016 Josh Lockhart
 * @license   https://github.com/slimphp/Slim/blob/3.x/LICENSE.md (MIT License)
 */
namespace Zesle\Slim\Handlers\Strategies;

use Zesle\Psr\Http\Message\ResponseInterface;
use Zesle\Psr\Http\Message\ServerRequestInterface;
use Zesle\Slim\Interfaces\InvocationStrategyInterface;
/**
 * Default route callback strategy with route parameters as an array of arguments.
 */
class RequestResponse implements InvocationStrategyInterface
{
    /**
     * Invoke a route callable with request, response, and all route parameters
     * as an array of arguments.
     *
     * @param array|callable         $callable
     * @param ServerRequestInterface $request
     * @param ResponseInterface      $response
     * @param array                  $routeArguments
     *
     * @return mixed
     */
    public function __invoke(callablee, <ServerRequestInterface> request, <ResponseInterface> response, array routeArguments)
    {
        var k, v;
    
        for k, v in routeArguments {
            let request =  request->withAttribute(k, v);
        }
        return call_user_func(callablee, request, response, routeArguments);
    }

}