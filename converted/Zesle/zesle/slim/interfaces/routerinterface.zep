/**
 * Slim Framework (http://slimframework.com)
 *
 * @link      https://github.com/slimphp/Slim
 * @copyright Copyright (c) 2011-2016 Josh Lockhart
 * @license   https://github.com/slimphp/Slim/blob/3.x/LICENSE.md (MIT License)
 */
namespace Zesle\Slim\Interfaces;

use RuntimeException;
use Zesle\InvalidArgumentException;
use Zesle\Psr\Http\Message\ServerRequestInterface;
/**
 * Router Interface
 *
 * @package Slim
 * @since   3.0.0
 */
interface RouterInterface
{
    /**
     * Add route
     *
     * @param string[] $methods Array of HTTP methods
     * @param string   $pattern The route pattern
     * @param callable $handler The route callable
     *
     * @return RouteInterface
     */
    public function map(array methods, string pattern, handler) -> <RouteInterface>;
    
    /**
     * Dispatch router for HTTP request
     *
     * @param  ServerRequestInterface $request The current HTTP request object
     *
     * @return array
     *
     * @link   https://github.com/nikic/FastRoute/blob/master/src/Dispatcher.php
     */
    public function dispatch(<ServerRequestInterface> request) -> array;
    
    /**
     * Add a route group to the array
     *
     * @param string   $pattern The group pattern
     * @param callable $callable A group callable
     *
     * @return RouteGroupInterface
     */
    public function pushGroup(string pattern, callablee) -> <RouteGroupInterface>;
    
    /**
     * Removes the last route group from the array
     *
     * @return bool True if successful, else False
     */
    public function popGroup() -> bool;
    
    /**
     * Get named route object
     *
     * @param string $name        Route name
     *
     * @return \Slim\Interfaces\RouteInterface
     *
     * @throws RuntimeException   If named route does not exist
     */
    public function getNamedRoute(string name) -> <Slim\Interfaces\RouteInterface>;
    
    /**
     * @param $identifier
     *
     * @return \Slim\Interfaces\RouteInterface
     */
    public function lookupRoute(identifier) -> <Slim\Interfaces\RouteInterface>;
    
    /**
     * Build the path for a named route excluding the base path
     *
     * @param string $name        Route name
     * @param array  $data        Named argument replacement data
     * @param array  $queryParams Optional query string parameters
     *
     * @return string
     *
     * @throws RuntimeException         If named route does not exist
     * @throws InvalidArgumentException If required data not provided
     */
    public function relativePathFor(string name, array data = [], array queryParams = []) -> string;
    
    /**
     * Build the path for a named route including the base path
     *
     * @param string $name        Route name
     * @param array  $data        Named argument replacement data
     * @param array  $queryParams Optional query string parameters
     *
     * @return string
     *
     * @throws RuntimeException         If named route does not exist
     * @throws InvalidArgumentException If required data not provided
     */
    public function pathFor(string name, array data = [], array queryParams = []) -> string;

}