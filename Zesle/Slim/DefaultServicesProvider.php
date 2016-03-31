<?php
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
    public function register($container)
    {
        if (!isset($container['environment'])) {
            /**
             * This service MUST return a shared instance
             * of \Slim\Interfaces\Http\EnvironmentInterface.
             *
             * @return EnvironmentInterface
             */
            $container['environment'] = function () {
                return new Environment($_SERVER);
            };
        }

        if (!isset($container['request'])) {
            /**
             * PSR-7 Request object
             *
             * @param Container $container
             *
             * @return ServerRequestInterface
             */
            $container['request'] = function ($container) {
                return Request::createFromEnvironment($container->get('environment'));
            };
        }

        if (!isset($container['response'])) {
            /**
             * PSR-7 Response object
             *
             * @param Container $container
             *
             * @return ResponseInterface
             */
            $container['response'] = function ($container) {
                $headers = new Headers(['Content-Type' => 'text/html; charset=UTF-8']);
                $response = new Response(200, $headers);

                return $response->withProtocolVersion($container->get('settings')['httpVersion']);
            };
        }

        if (!isset($container['router'])) {
            /**
             * This service MUST return a SHARED instance
             * of \Slim\Interfaces\RouterInterface.
             *
             * @return RouterInterface
             */
            $container['router'] = function () {
                return new Router;
            };
        }

        if (!isset($container['foundHandler'])) {
            /**
             * This service MUST return a SHARED instance
             * of \Slim\Interfaces\InvocationStrategyInterface.
             *
             * @return InvocationStrategyInterface
             */
            $container['foundHandler'] = function () {
                return new RequestResponse;
            };
        }

        if (!isset($container['phpErrorHandler'])) {
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
            $container['phpErrorHandler'] = function ($container) {
                return new PhpError($container->get('settings')['displayErrorDetails']);
            };
        }

        if (!isset($container['errorHandler'])) {
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
            $container['errorHandler'] = function ($container) {
                return new Error($container->get('settings')['displayErrorDetails']);
            };
        }

        if (!isset($container['notFoundHandler'])) {
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
            $container['notFoundHandler'] = function () {
                return new NotFound;
            };
        }

        if (!isset($container['notAllowedHandler'])) {
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
            $container['notAllowedHandler'] = function () {
                return new NotAllowed;
            };
        }

        if (!isset($container['callableResolver'])) {
            /**
             * Instance of \Slim\Interfaces\CallableResolverInterface
             *
             * @param Container $container
             *
             * @return CallableResolverInterface
             */
            $container['callableResolver'] = function ($container) {
                return new CallableResolver($container);
            };
        }
    }
}
