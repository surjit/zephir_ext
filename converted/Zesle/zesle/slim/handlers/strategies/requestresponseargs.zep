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
 * Route callback strategy with route parameters as individual arguments.
 */
class RequestResponseArgs implements InvocationStrategyInterface
{
    /**
     * Invoke a route callable with request, response and all route parameters
     * as individual arguments.
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
        array_unshift(routeArguments, request, response);
        return call_user_func_array(callablee, routeArguments);
    }

}