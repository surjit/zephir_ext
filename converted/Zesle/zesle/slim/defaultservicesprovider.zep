/**
 * Slim Framework (http://slimframework.com)
 *
 * @link      https://github.com/slimphp/Slim
 * @copyright Copyright (c) 2011-2016 Josh Lockhart
 * @license   https://github.com/slimphp/Slim/blob/3.x/LICENSE.md (MIT License)
 */
namespace Zesle\Slim;

use Zesle\Psr\Http\Message\ResponseInterface;
use Zesle\Psr\Http\Message\ServerRequestInterface;
use Zesle\Slim\Exception\ContainerValueNotFoundException;
use Zesle\Slim\Handlers\PhpError;
use Zesle\Slim\Handlers\Error;
use Zesle\Slim\Handlers\NotFound;
use Zesle\Slim\Handlers\NotAllowed;
use Zesle\Slim\Handlers\Strategies\RequestResponse;
use Zesle\Slim\Http\Environment;
use Zesle\Slim\Http\Headers;
use Zesle\Slim\Http\Request;
use Zesle\Slim\Http\Response;
use Zesle\Slim\Interfaces\CallableResolverInterface;
use Zesle\Slim\Interfaces\Http\EnvironmentInterface;
use Zesle\Slim\Interfaces\InvocationStrategyInterface;
use Zesle\Slim\Interfaces\RouterInterface;
/**
 * Slim's default Service Provider.
 */
class DefaultServicesProvider
{
    /**
     * Register Slim's default services.
     *
     * @param Container $container A DI container implementing ArrayAccess and container-interop.
     */
    public function register(<Container> container)
    {
        var headers, tmpArray27bab933369c66d0ea403e2b205e3565, response;
    
        if !(isset container["environment"]) {
            /**
             * This service MUST return a shared instance
             * of \Slim\Interfaces\Http\EnvironmentInterface.
             *
             * @return EnvironmentInterface
             */
            let container["environment"] = new DefaultServicesProviderregisterClosureOne();
        }
        if !(isset container["request"]) {
            /**
             * PSR-7 Request object
             *
             * @param Container $container
             *
             * @return ServerRequestInterface
             */
            let container["request"] = new DefaultServicesProviderregisterClosureOne();
        }
        if !(isset container["response"]) {
            /**
             * PSR-7 Response object
             *
             * @param Container $container
             *
             * @return ResponseInterface
             */
            let container["response"] = new DefaultServicesProviderregisterClosureOne();
        }
        if !(isset container["router"]) {
            /**
             * This service MUST return a SHARED instance
             * of \Slim\Interfaces\RouterInterface.
             *
             * @return RouterInterface
             */
            let container["router"] = new DefaultServicesProviderregisterClosureOne();
        }
        if !(isset container["foundHandler"]) {
            /**
             * This service MUST return a SHARED instance
             * of \Slim\Interfaces\InvocationStrategyInterface.
             *
             * @return InvocationStrategyInterface
             */
            let container["foundHandler"] = new DefaultServicesProviderregisterClosureOne();
        }
        if !(isset container["phpErrorHandler"]) {
            /**
             * This service MUST return a callable
             * that accepts three arguments:
             *
             * 1. Instance of \Psr\Http\Message\ServerRequestInterface
             * 2. Instance of \Psr\Http\Message\ResponseInterface
             * 3. Instance of \Error
             *
             * The callable MUST return an instance of
             * \Psr\Http\Message\ResponseInterface.
             *
             * @param Container $container
             *
             * @return callable
             */
            let container["phpErrorHandler"] = new DefaultServicesProviderregisterClosureOne();
        }
        if !(isset container["errorHandler"]) {
            /**
             * This service MUST return a callable
             * that accepts three arguments:
             *
             * 1. Instance of \Psr\Http\Message\ServerRequestInterface
             * 2. Instance of \Psr\Http\Message\ResponseInterface
             * 3. Instance of \Exception
             *
             * The callable MUST return an instance of
             * \Psr\Http\Message\ResponseInterface.
             *
             * @param Container $container
             *
             * @return callable
             */
            let container["errorHandler"] = new DefaultServicesProviderregisterClosureOne();
        }
        if !(isset container["notFoundHandler"]) {
            /**
             * This service MUST return a callable
             * that accepts two arguments:
             *
             * 1. Instance of \Psr\Http\Message\ServerRequestInterface
             * 2. Instance of \Psr\Http\Message\ResponseInterface
             *
             * The callable MUST return an instance of
             * \Psr\Http\Message\ResponseInterface.
             *
             * @return callable
             */
            let container["notFoundHandler"] = new DefaultServicesProviderregisterClosureOne();
        }
        if !(isset container["notAllowedHandler"]) {
            /**
             * This service MUST return a callable
             * that accepts three arguments:
             *
             * 1. Instance of \Psr\Http\Message\ServerRequestInterface
             * 2. Instance of \Psr\Http\Message\ResponseInterface
             * 3. Array of allowed HTTP methods
             *
             * The callable MUST return an instance of
             * \Psr\Http\Message\ResponseInterface.
             *
             * @return callable
             */
            let container["notAllowedHandler"] = new DefaultServicesProviderregisterClosureOne();
        }
        if !(isset container["callableResolver"]) {
            /**
             * Instance of \Slim\Interfaces\CallableResolverInterface
             *
             * @param Container $container
             *
             * @return CallableResolverInterface
             */
            let container["callableResolver"] = new DefaultServicesProviderregisterClosureOne();
        }
    }

}