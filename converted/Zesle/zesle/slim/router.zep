/**
 * Slim Framework (http://slimframework.com)
 *
 * @link      https://github.com/slimphp/Slim
 * @copyright Copyright (c) 2011-2016 Josh Lockhart
 * @license   https://github.com/slimphp/Slim/blob/3.x/LICENSE.md (MIT License)
 */
namespace Zesle\Slim;

use Zesle\FastRoute\Dispatcher;
use Zesle\InvalidArgumentException;
use RuntimeException;
use Zesle\Psr\Http\Message\ServerRequestInterface;
use Zesle\FastRoute\RouteCollector;
use Zesle\FastRoute\RouteParser;
use Zesle\FastRoute\RouteParser\Std as StdParser;
use Zesle\FastRoute\DataGenerator;
use Zesle\Slim\Interfaces\RouteGroupInterface;
use Zesle\Slim\Interfaces\RouterInterface;
use Zesle\Slim\Interfaces\RouteInterface;
/**
 * Router
 *
 * This class organizes Slim application route objects. It is responsible
 * for registering route objects, assigning names to route objects,
 * finding routes that match the current HTTP request, and creating
 * URLs for a named route.
 */
class Router implements RouterInterface
{
    /**
     * Parser
     *
     * @var \FastRoute\RouteParser
     */
    protected routeParser;
    /**
     * Base path used in pathFor()
     *
     * @var string
     */
    protected basePath = "";
    /**
     * Routes
     *
     * @var Route[]
     */
    protected routes = [];
    /**
     * Route counter incrementer
     * @var int
     */
    protected routeCounter = 0;
    /**
     * Route groups
     *
     * @var RouteGroup[]
     */
    protected routeGroups = [];
    /**
     * @var \FastRoute\Dispatcher
     */
    protected dispatcher;
    /**
     * Create new router
     *
     * @param RouteParser   $parser
     */
    public function __construct(<RouteParser> parser = null) -> void
    {
        let this->routeParser =  parser ? parser : new StdParser();
    }
    
    /**
     * Set the base path used in pathFor()
     *
     * @param string $basePath
     *
     * @return self
     */
    public function setBasePath(string basePath)
    {
        if !(is_string(basePath)) {
            throw new InvalidArgumentException("Router basePath must be a string");
        }
        let this->basePath = basePath;
        return this;
    }
    
    /**
     * Add route
     *
     * @param  string[] $methods Array of HTTP methods
     * @param  string   $pattern The route pattern
     * @param  callable $handler The route callable
     *
     * @return RouteInterface
     *
     * @throws InvalidArgumentException if the route pattern isn't a string
     */
    public function map(array methods, string pattern, handler) -> <RouteInterface>
    {
        var route, tmpRoute1;
    
        if !(is_string(pattern)) {
            throw new InvalidArgumentException("Route pattern must be a string");
        }
        // Prepend parent group pattern(s)
        if this->routeGroups {
            let pattern =  this->processGroups() . pattern;
        }
        // According to RFC methods are defined in uppercase (See RFC 7231)
        let methods =  array_map("strtoupper", methods);
        // Add route
        let route =  new Route(methods, pattern, handler, this->routeGroups, this->routeCounter);
        
        route->getIdentifier();
        let tmpRoute1 = route;
        
        let this->routes[tmpRoute1] = route;
        let this->routeCounter++;
        return route;
    }
    
    /**
     * Dispatch router for HTTP request
     *
     * @param  ServerRequestInterface $request The current HTTP request object
     *
     * @return array
     *
     * @link   https://github.com/nikic/FastRoute/blob/master/src/Dispatcher.php
     */
    public function dispatch(<ServerRequestInterface> request) -> array
    {
        var uri;
    
        let uri =  "/" . ltrim(request->getUri()->getPath(), "/");
        return this->createDispatcher()->dispatch(request->getMethod(), uri);
    }
    
    /**
     * @return \FastRoute\Dispatcher
     */
    protected function createDispatcher() -> <FastRoute\Dispatcher>
    {
        var route, tmpArrayf0b29d9f33a27a411d0a2e729872b52f;
    
        let tmpArrayf0b29d9f33a27a411d0a2e729872b52f = ["routeParser" : this->routeParser];
        return  this->dispatcher ? this->dispatcher : \Zesle\FastRoute\simpleDispatcher(new RoutercreateDispatcherClosureOne(), tmpArrayf0b29d9f33a27a411d0a2e729872b52f);
    }
    
    /**
     * @param \FastRoute\Dispatcher $dispatcher
     */
    public function setDispatcher(<Dispatcher> dispatcher) -> void
    {
        let this->dispatcher = dispatcher;
    }
    
    /**
     * Get route objects
     *
     * @return Route[]
     */
    public function getRoutes() -> array
    {
        return this->routes;
    }
    
    /**
     * Get named route object
     *
     * @param string $name        Route name
     *
     * @return Route
     *
     * @throws RuntimeException   If named route does not exist
     */
    public function getNamedRoute(string name) -> <Route>
    {
        var route;
    
        for route in this->routes {
            if name == route->getName() {
                return route;
            }
        }
        throw new RuntimeException("Named route does not exist for name: " . name);
    }
    
    /**
     * Process route groups
     *
     * @return string A group pattern to prefix routes with
     */
    protected function processGroups() -> string
    {
        var pattern, group;
    
        let pattern = "";
        for group in this->routeGroups {
            let pattern .= group->getPattern();
        }
        return pattern;
    }
    
    /**
     * Add a route group to the array
     *
     * @param string   $pattern
     * @param callable $callable
     *
     * @return RouteGroupInterface
     */
    public function pushGroup(string pattern, callablee) -> <RouteGroupInterface>
    {
        var group;
    
        let group =  new RouteGroup(pattern, callablee);
        array_push(this->routeGroups, group);
        return group;
    }
    
    /**
     * Removes the last route group from the array
     *
     * @return RouteGroup|bool The RouteGroup if successful, else False
     */
    public function popGroup()
    {
        var group;
    
        let group =  array_pop(this->routeGroups);
        return  group instanceof RouteGroup ? group  : false;
    }
    
    /**
     * @param $identifier
     * @return \Slim\Interfaces\RouteInterface
     */
    public function lookupRoute(identifier) -> <Slim\Interfaces\RouteInterface>
    {
        if !(isset this->routes[identifier]) {
            throw new RuntimeException("Route not found, looks like your route cache is stale.");
        }
        return this->routes[identifier];
    }
    
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
    public function relativePathFor(string name, array data = [], array queryParams = []) -> string
    {
        var route, pattern, routeDatas, segments, routeData, item, segmentName, url;
    
        let route =  this->getNamedRoute(name);
        let pattern =  route->getPattern();
        let routeDatas =  this->routeParser->parse(pattern);
        // $routeDatas is an array of all possible routes that can be made. There is
        // one routedata for each optional parameter plus one for no optional parameters.
        //
        // The most specific is last, so we look for that first.
        let routeDatas =  array_reverse(routeDatas);
        let segments =  [];
        for routeData in routeDatas {
            for item in routeData {
                if is_string(item) {
                    // this segment is a static string
                    let segments[] = item;
                    continue;
                }
                // This segment has a parameter: first element is the name
                if !(array_key_exists(item[0], data)) {
                    // we don't have a data element for this segment: cancel
                    // testing this routeData item, so that we can try a less
                    // specific routeData item.
                    let segments =  [];
                    let segmentName = item[0];
                    break;
                }
                let segments[] = data[item[0]];
            }
            if !(empty(segments)) {
                // we found all the parameters for this route data, no need to check
                // less specific ones
                break;
            }
        }
        if empty(segments) {
            throw new InvalidArgumentException("Missing data for URL segment: " . segmentName);
        }
        let url =  implode("", segments);
        if queryParams {
            let url .= "?" . http_build_query(queryParams);
        }
        return url;
    }
    
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
    public function pathFor(string name, array data = [], array queryParams = []) -> string
    {
        var url;
    
        let url =  this->relativePathFor(name, data, queryParams);
        if this->basePath {
            let url =  this->basePath . url;
        }
        return url;
    }
    
    /**
     * Build the path for a named route.
     *
     * This method is deprecated. Use pathFor() from now on.
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
    public function urlFor(string name, array data = [], array queryParams = []) -> string
    {
        trigger_error("urlFor() is deprecated. Use pathFor() instead.", E_USER_DEPRECATED);
        return this->pathFor(name, data, queryParams);
    }

}