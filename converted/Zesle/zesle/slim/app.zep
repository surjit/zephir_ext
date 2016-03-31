/**
 * Slim Framework (http://slimframework.com)
 *
 * @link      https://github.com/slimphp/Slim
 * @copyright Copyright (c) 2011-2016 Josh Lockhart
 * @license   https://github.com/slimphp/Slim/blob/3.x/LICENSE.md (MIT License)
 */
namespace Zesle\Slim;

use Exception;
use Throwable;
use Closure;
use InvalidArgumentException;
use Zesle\Psr\Http\Message\RequestInterface;
use Zesle\Psr\Http\Message\ServerRequestInterface;
use Zesle\Psr\Http\Message\ResponseInterface;
use Zesle\Interop\Container\ContainerInterface;
use Zesle\FastRoute\Dispatcher;
use Zesle\Slim\Exception\SlimException;
use Zesle\Slim\Exception\MethodNotAllowedException;
use Zesle\Slim\Exception\NotFoundException;
use Zesle\Slim\Http\Uri;
use Zesle\Slim\Http\Headers;
use Zesle\Slim\Http\Body;
use Zesle\Slim\Http\Request;
use Zesle\Slim\Interfaces\Http\EnvironmentInterface;
use Zesle\Slim\Interfaces\RouteGroupInterface;
use Zesle\Slim\Interfaces\RouteInterface;
use Zesle\Slim\Interfaces\RouterInterface;
/**
 * App
 *
 * This is the primary class with which you instantiate,
 * configure, and run a Slim Framework application.
 * The \Slim\App class also accepts Slim Framework middleware.
 *
 * @property-read array $settings App settings
 * @property-read EnvironmentInterface $environment
 * @property-read RequestInterface $request
 * @property-read ResponseInterface $response
 * @property-read RouterInterface $router
 * @property-read callable $errorHandler
 * @property-read callable $phpErrorHandler
 * @property-read callable $notFoundHandler function($request, $response)
 * @property-read callable $notAllowedHandler function($request, $response, $allowedHttpMethods)
 */
class App
{
    //use MiddlewareAwareTrait;
    /**
     * Current version
     *
     * @var string
     */
    const VERSION = "3.0.0";
    /**
     * Container
     *
     * @var ContainerInterface
     */
    protected container;
    /*	 * ******************************************************************************
     * Constructor
     * ***************************************************************************** */
    /**
     * Create new application
     *
     * @param ContainerInterface|array $container Either a ContainerInterface or an associative array of app settings
     * @throws InvalidArgumentException when no container is provided that implements ContainerInterface
     */
    public function __construct(container = []) -> void
    {
        if is_array(container) {
            let container =  new Container(container);
        }
        if !(container instanceof ContainerInterface) {
            throw new InvalidArgumentException("Expected a ContainerInterface");
        }
        let this->container = container;
    }
    
    /**
     * Enable access to the DI container by consumers of $app
     *
     * @return ContainerInterface
     */
    public function getContainer() -> <ContainerInterface>
    {
        return this->container;
    }
    
    /**
     * Add middleware
     *
     * This method prepends new middleware to the app's middleware stack.
     *
     * @param  callable|string    $callable The callback routine
     *
     * @return static
     */
    public function add(callablee) -> <static>
    {
        return this->addMiddleware(new DeferredCallable(callablee, this->container));
    }
    
    /**
     * Calling a non-existant method on App checks to see if there's an item
     * in the container than is callable and if so, calls it.
     *
     * @param  string $method
     * @param  array $args
     * @return mixed
     */
    public function __call(string method, array args)
    {
        var obj;
    
        if this->container->has(method) {
            let obj =  this->container->get(method);
            if is_callable(obj) {
                return call_user_func_array(obj, args);
            }
        }
        throw new \BadMethodCallException("Method {method} is not a valid method");
    }
    
    /*	 * ******************************************************************************
     * Router proxy methods
     * ***************************************************************************** */
    /**
     * Add GET route
     *
     * @param  string $pattern  The route URI pattern
     * @param  callable|string  $callable The route callback routine
     *
     * @return \Slim\Interfaces\RouteInterface
     */
    public function get(pattern, callablee)
    {
        var tmpArray502781e5a2b2af0b882f6a932251f544;
    
        let tmpArray502781e5a2b2af0b882f6a932251f544 = ["GET"];
        return this->map(tmpArray502781e5a2b2af0b882f6a932251f544, pattern, callablee);
    }
    
    /**
     * Add POST route
     *
     * @param  string $pattern  The route URI pattern
     * @param  callable|string  $callable The route callback routine
     *
     * @return \Slim\Interfaces\RouteInterface
     */
    public function post(string pattern, callablee) -> <Slim\Interfaces\RouteInterface>
    {
        var tmpArray733df52fb27d01ae49571d0143750237;
    
        let tmpArray733df52fb27d01ae49571d0143750237 = ["POST"];
        return this->map(tmpArray733df52fb27d01ae49571d0143750237, pattern, callablee);
    }
    
    /**
     * Add PUT route
     *
     * @param  string $pattern  The route URI pattern
     * @param  callable|string  $callable The route callback routine
     *
     * @return \Slim\Interfaces\RouteInterface
     */
    public function put(string pattern, callablee) -> <Slim\Interfaces\RouteInterface>
    {
        var tmpArray0e29a45376e0a7b6d6b1a707850c06e2;
    
        let tmpArray0e29a45376e0a7b6d6b1a707850c06e2 = ["PUT"];
        return this->map(tmpArray0e29a45376e0a7b6d6b1a707850c06e2, pattern, callablee);
    }
    
    /**
     * Add PATCH route
     *
     * @param  string $pattern  The route URI pattern
     * @param  callable|string  $callable The route callback routine
     *
     * @return \Slim\Interfaces\RouteInterface
     */
    public function patch(string pattern, callablee) -> <Slim\Interfaces\RouteInterface>
    {
        var tmpArray1dab56f3411be92b4445e139b231c374;
    
        let tmpArray1dab56f3411be92b4445e139b231c374 = ["PATCH"];
        return this->map(tmpArray1dab56f3411be92b4445e139b231c374, pattern, callablee);
    }
    
    /**
     * Add DELETE route
     *
     * @param  string $pattern  The route URI pattern
     * @param  callable|string  $callable The route callback routine
     *
     * @return \Slim\Interfaces\RouteInterface
     */
    public function delete(string pattern, callablee) -> <Slim\Interfaces\RouteInterface>
    {
        var tmpArrayce1b365712086c3667612b1242855df2;
    
        let tmpArrayce1b365712086c3667612b1242855df2 = ["DELETE"];
        return this->map(tmpArrayce1b365712086c3667612b1242855df2, pattern, callablee);
    }
    
    /**
     * Add OPTIONS route
     *
     * @param  string $pattern  The route URI pattern
     * @param  callable|string  $callable The route callback routine
     *
     * @return \Slim\Interfaces\RouteInterface
     */
    public function options(string pattern, callablee) -> <Slim\Interfaces\RouteInterface>
    {
        var tmpArray2f2c2c7129d9d06ba531b551f1d38b61;
    
        let tmpArray2f2c2c7129d9d06ba531b551f1d38b61 = ["OPTIONS"];
        return this->map(tmpArray2f2c2c7129d9d06ba531b551f1d38b61, pattern, callablee);
    }
    
    /**
     * Add route for any HTTP method
     *
     * @param  string $pattern  The route URI pattern
     * @param  callable|string  $callable The route callback routine
     *
     * @return \Slim\Interfaces\RouteInterface
     */
    public function any(string pattern, callablee) -> <Slim\Interfaces\RouteInterface>
    {
        var tmpArray849ef34b74816681d691170907ea9bc3;
    
        let tmpArray849ef34b74816681d691170907ea9bc3 = ["GET", "POST", "PUT", "PATCH", "DELETE", "OPTIONS"];
        return this->map(tmpArray849ef34b74816681d691170907ea9bc3, pattern, callablee);
    }
    
    /**
     * Add route with multiple methods
     *
     * @param  string[] $methods  Numeric array of HTTP method names
     * @param  string   $pattern  The route URI pattern
     * @param  callable|string    $callable The route callback routine
     *
     * @return RouteInterface
     */
    public function map(array methods, string pattern, callablee) -> <RouteInterface>
    {
        var route, tmpArray276c8e5a821e9166f5e9e59bc0c42173, tmpArraya7eff710d87f2c4cf5e45a0af7b04096;
    
        if callablee instanceof Closure {
            let callablee =  callablee->bindTo(this->container);
        }
        let route =  this->container->get("router")->map(methods, pattern, callablee);
        let tmpArray276c8e5a821e9166f5e9e59bc0c42173 = [route, "setContainer"];
        if is_callable(tmpArray276c8e5a821e9166f5e9e59bc0c42173) {
            route->setContainer(this->container);
        }
        let tmpArraya7eff710d87f2c4cf5e45a0af7b04096 = [route, "setOutputBuffering"];
        if is_callable(tmpArraya7eff710d87f2c4cf5e45a0af7b04096) {
            route->setOutputBuffering(this->container->get("settings")["outputBuffering"]);
        }
        return route;
    }
    
    /**
     * Route Groups
     *
     * This method accepts a route pattern and a callback. All route
     * declarations in the callback will be prepended by the group(s)
     * that it is in.
     *
     * @param string   $pattern
     * @param callable $callable
     *
     * @return RouteGroupInterface
     */
    public function group(string pattern, callablee) -> <RouteGroupInterface>
    {
        var group;
    
        /** @var RouteGroup $group */
        let group =  this->container->get("router")->pushGroup(pattern, callablee);
        group->setContainer(this->container);
        {group}(this);
        this->container->get("router")->popGroup();
        return group;
    }
    
    /*	 * ******************************************************************************
     * Runner
     * ***************************************************************************** */
    /**
     * Run application
     *
     * This method traverses the application middleware stack and then sends the
     * resultant Response object to the HTTP client.
     *
     * @param bool|false $silent
     * @return ResponseInterface
     *
     * @throws Exception
     * @throws MethodNotAllowedException
     * @throws NotFoundException
     */
    public function run(silent = false)
    {
        var request, response;
    
        let request =  this->container->get("request");
        let response =  this->container->get("response");
        let response =  this->process(request, response);
        if !(silent) {
            this->respond(response);
        }
        return response;
    }
    
    /**
     * Process a request
     *
     * This method traverses the application middleware stack and then returns the
     * resultant Response object.
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @return ResponseInterface
     *
     * @throws Exception
     * @throws MethodNotAllowedException
     * @throws NotFoundException
     */
    public function process(<ServerRequestInterface> request, <ResponseInterface> response) -> <ResponseInterface>
    {
        var router, tmpArray6052b8f68451155ddc30dde57a39b594, tmpArray6789c1a253be33c47a998a3a623c3813, e;
    
        // Ensure basePath is set
        let router =  this->container->get("router");
        let tmpArray6052b8f68451155ddc30dde57a39b594 = [request->getUri(), "getBasePath"];
        let tmpArray6789c1a253be33c47a998a3a623c3813 = [router, "setBasePath"];
        if is_callable(tmpArray6052b8f68451155ddc30dde57a39b594) && is_callable(tmpArray6789c1a253be33c47a998a3a623c3813) {
            router->setBasePath(request->getUri()->getBasePath());
        }
        // Dispatch the Router first if the setting for this is on
        if this->container->get("settings")["determineRouteBeforeAppMiddleware"] === true {
            // Dispatch router (note: you won't be able to alter routes after this)
            let request =  this->dispatchRouterAndPrepareRoute(request, router);
        }
        // Traverse middleware stack
        try {
            let response =  this->callMiddlewareStack(request, response);
        } catch Exception, e {
            let response =  this->handleException(e, request, response);
        } catch Throwable, e {
            let response =  this->handlePhpError(e, request, response);
        }
        let response =  this->finalize(response);
        return response;
    }
    
    /**
     * Send the response the client
     *
     * @param ResponseInterface $response
     */
    public function respond(<ResponseInterface> response) -> void
    {
        var name, values, value, body, settings, chunkSize, contentLength, totalChunks, lastChunkSize, currentChunk;
    
        // Send response
        if !(headers_sent()) {
            // Status
            header(sprintf("HTTP/%s %s %s", response->getProtocolVersion(), response->getStatusCode(), response->getReasonPhrase()));
            // Headers
            for name, values in response->getHeaders() {
                for value in values {
                    header(sprintf("%s: %s", name, value), false);
                }
            }
        }
        // Body
        if !(this->isEmptyResponse(response)) {
            let body =  response->getBody();
            if body->isSeekable() {
                body->rewind();
            }
            let settings =  this->container->get("settings");
            let chunkSize = settings["responseChunkSize"];
            let contentLength =  response->getHeaderLine("Content-Length");
            if !(contentLength) {
                let contentLength =  body->getSize();
            }
            if isset contentLength {
                let totalChunks =  ceil(contentLength / chunkSize);
                let lastChunkSize =  contentLength % chunkSize;
                let currentChunk = 0;
                while (!(body->eof()) && currentChunk < totalChunks) {
                    let currentChunk++;
                    if currentChunk == totalChunks && lastChunkSize > 0 {
                        let chunkSize = lastChunkSize;
                    }
                    echo body->read(chunkSize);
                    if connection_status() != CONNECTION_NORMAL {
                        break;
                    }
                }
            } else {
                while (!(body->eof())) {
                    echo body->read(chunkSize);
                    if connection_status() != CONNECTION_NORMAL {
                        break;
                    }
                }
            }
        }
    }
    
    /**
     * Invoke application
     *
     * This method implements the middleware interface. It receives
     * Request and Response objects, and it returns a Response object
     * after compiling the routes registered in the Router and dispatching
     * the Request object to the appropriate Route callback routine.
     *
     * @param  ServerRequestInterface $request  The most recent Request object
     * @param  ResponseInterface      $response The most recent Response object
     *
     * @return ResponseInterface
     * @throws MethodNotAllowedException
     * @throws NotFoundException
     */
    public function __invoke(<ServerRequestInterface> request, <ResponseInterface> response) -> <ResponseInterface>
    {
        var routeInfo, router, tmpArray6ec873ed57f1daf4870938af0e1b623a, route, notAllowedHandler, notFoundHandler;
    
        // Get the route info
        let routeInfo =  request->getAttribute("routeInfo");
        /** @var \Slim\Interfaces\RouterInterface $router */
        let router =  this->container->get("router");
        // If router hasn't been dispatched or the URI changed then dispatch
        let tmpArray6ec873ed57f1daf4870938af0e1b623a = [request->getMethod(), (string) request->getUri()];
        if routeInfo === null || routeInfo["request"] !== tmpArray6ec873ed57f1daf4870938af0e1b623a {
            let request =  this->dispatchRouterAndPrepareRoute(request, router);
            let routeInfo =  request->getAttribute("routeInfo");
        }
        if routeInfo[0] === Dispatcher::FOUND {
            let route =  router->lookupRoute(routeInfo[1]);
            return route->run(request, response);
        } elseif routeInfo[0] === Dispatcher::METHOD_NOT_ALLOWED {
            if !(this->container->has("notAllowedHandler")) {
                throw new MethodNotAllowedException(request, response, routeInfo[1]);
            }
            /** @var callable $notAllowedHandler */
            let notAllowedHandler =  this->container->get("notAllowedHandler");
            return {notAllowedHandler}(request, response, routeInfo[1]);
        }
        if !(this->container->has("notFoundHandler")) {
            throw new NotFoundException(request, response);
        }
        /** @var callable $notFoundHandler */
        let notFoundHandler =  this->container->get("notFoundHandler");
        return {notFoundHandler}(request, response);
    }
    
    /**
     * Perform a sub-request from within an application route
     *
     * This method allows you to prepare and initiate a sub-request, run within
     * the context of the current request. This WILL NOT issue a remote HTTP
     * request. Instead, it will route the provided URL, method, headers,
     * cookies, body, and server variables against the set of registered
     * application routes. The result response object is returned.
     *
     * @param  string            $method      The request method (e.g., GET, POST, PUT, etc.)
     * @param  string            $path        The request URI path
     * @param  string            $query       The request URI query string
     * @param  array             $headers     The request headers (key-value array)
     * @param  array             $cookies     The request cookies (key-value array)
     * @param  string            $bodyContent The request body
     * @param  ResponseInterface $response     The response object (optional)
     * @return ResponseInterface
     */
    public function subRequest(string method, string path, string query = "", array headers = [], array cookies = [], string bodyContent = "", <ResponseInterface> response = null) -> <ResponseInterface>
    {
        var env, uri, serverParams, body, request;
    
        let env =  this->container->get("environment");
        let uri =  Uri::createFromEnvironment(env)->withPath(path)->withQuery(query);
        let headers =  new Headers(headers);
        let serverParams =  env->all();
        let body =  new Body(fopen("php://temp", "r+"));
        body->write(bodyContent);
        body->rewind();
        let request =  new Request(method, uri, headers, cookies, serverParams, body);
        if !(response) {
            let response =  this->container->get("response");
        }
        return {this}(request, response);
    }
    
    /**
     * Dispatch the router to find the route. Prepare the route for use.
     *
     * @param ServerRequestInterface $request
     * @param RouterInterface        $router
     * @return ServerRequestInterface
     */
    protected function dispatchRouterAndPrepareRoute(<ServerRequestInterface> request, <RouterInterface> router) -> <ServerRequestInterface>
    {
        var routeInfo, routeArguments, k, v, route;
    
        let routeInfo =  router->dispatch(request);
        if routeInfo[0] === Dispatcher::FOUND {
            let routeArguments =  [];
            for k, v in routeInfo[2] {
                let routeArguments[k] =  urldecode(v);
            }
            let route =  router->lookupRoute(routeInfo[1]);
            route->prepare(request, routeArguments);
            // add route to the request's attributes in case a middleware or handler needs access to the route
            let request =  request->withAttribute("route", route);
        }
        let routeInfo["request"] =  [request->getMethod(), (string) request->getUri()];
        return request->withAttribute("routeInfo", routeInfo);
    }
    
    /**
     * Finalize response
     *
     * @param ResponseInterface $response
     * @return ResponseInterface
     */
    protected function finalize(<ResponseInterface> response) -> <ResponseInterface>
    {
        var size;
    
        // stop PHP sending a Content-Type automatically
        ini_set("default_mimetype", "");
        if this->isEmptyResponse(response) {
            return response->withoutHeader("Content-Type")->withoutHeader("Content-Length");
        }
        let size =  response->getBody()->getSize();
        if size !== null && !(response->hasHeader("Content-Length")) {
            let response =  response->withHeader("Content-Length", (string) size);
        }
        return response;
    }
    
    /**
     * Helper method, which returns true if the provided response must not output a body and false
     * if the response could have a body.
     *
     * @see https://tools.ietf.org/html/rfc7231
     *
     * @param ResponseInterface $response
     * @return bool
     */
    protected function isEmptyResponse(<ResponseInterface> response) -> bool
    {
        var tmpArray17419b5f5e8f1ac90ebd3585fb3fd15a;
    
        if method_exists(response, "isEmpty") {
            return response->isEmpty();
        }
        let tmpArray17419b5f5e8f1ac90ebd3585fb3fd15a = [204, 205, 304];
        return in_array(response->getStatusCode(), tmpArray17419b5f5e8f1ac90ebd3585fb3fd15a);
    }
    
    /**
     * Call relevant handler from the Container if needed. If it doesn't exist,
     * then just re-throw.
     *
     * @param  Exception $e
     * @param  ServerRequestInterface $request
     * @param  ResponseInterface $response
     *
     * @return ResponseInterface
     * @throws Exception if a handler is needed and not found
     */
    protected function handleException(<Exception> e, <ServerRequestInterface> request, <ResponseInterface> response) -> <ResponseInterface>
    {
        var handler, params, callablee;
    
        if e instanceof MethodNotAllowedException {
            let handler = "notAllowedHandler";
            let params =  [e->getRequest(), e->getResponse(), e->getAllowedMethods()];
        } elseif e instanceof NotFoundException {
            let handler = "notFoundHandler";
            let params =  [e->getRequest(), e->getResponse()];
        } elseif e instanceof SlimException {
            // This is a Stop exception and contains the response
            return e->getResponse();
        } else {
            // Other exception, use $request and $response params
            let handler = "errorHandler";
            let params =  [request, response, e];
        }
        if this->container->has(handler) {
            let callablee =  this->container->get(handler);
            // Call the registered handler
            return call_user_func_array(callablee, params);
        }
        // No handlers found, so just throw the exception
        throw e;
    }
    
    /**
     * Call relevant handler from the Container if needed. If it doesn't exist,
     * then just re-throw.
     *
     * @param  Throwable $e
     * @param  ServerRequestInterface $request
     * @param  ResponseInterface $response
     *
     * @return ResponseInterface
     * @throws Exception if a handler is needed and not found
     */
    protected function handlePhpError(<Throwable> e, <ServerRequestInterface> request, <ResponseInterface> response) -> <ResponseInterface>
    {
        var handler, params, callablee;
    
        let handler = "phpErrorHandler";
        let params =  [request, response, e];
        if this->container->has(handler) {
            let callablee =  this->container->get(handler);
            // Call the registered handler
            return call_user_func_array(callablee, params);
        }
        // No handlers found, so just throw the exception
        throw e;
    }
    
    /**
     * Middleware call stack
     *
     * @var  \SplStack
     * @link http://php.net/manual/class.splstack.php
     */
    protected stack;
    /**
     * Middleware stack lock
     *
     * @var bool
     */
    protected middlewareLock = false;
    /**
     * Add middleware
     *
     * This method prepends new middleware to the application middleware stack.
     *
     * @param callable $callable Any callable that accepts three arguments:
     *                           1. A Request object
     *                           2. A Response object
     *                           3. A "next" middleware callable
     * @return static
     *
     * @throws RuntimeException         If middleware is added while the stack is dequeuing
     * @throws UnexpectedValueException If the middleware doesn't return a Psr\Http\Message\ResponseInterface
     */
    protected function addMiddleware(callablee) -> <static>
    {
        var next, result;
    
        if this->middlewareLock {
            throw new RuntimeException("Middleware can’t be added once the stack is dequeuing");
        }
        if is_null(this->stack) {
            this->seedMiddlewareStack();
        }
        let next =  this->stack->top();
        let this->stack[] = new AppaddMiddlewareClosureOne(callablee, next);
        return this;
    }
    
    /**
     * Seed middleware stack with first callable
     *
     * @param callable $kernel The last item to run as middleware
     *
     * @throws RuntimeException if the stack is seeded more than once
     */
    protected function seedMiddlewareStack(kernel = null) -> void
    {
        if !(is_null(this->stack)) {
            throw new RuntimeException("MiddlewareStack can only be seeded once.");
        }
        if kernel === null {
            let kernel = this;
        }
        let this->stack =  new \SplStack();
        this->stack->setIteratorMode(\SplDoublyLinkedList::IT_MODE_LIFO | \SplDoublyLinkedList::IT_MODE_KEEP);
        let this->stack[] = kernel;
    }
    
    /**
     * Call middleware stack
     *
     * @param  ServerRequestInterface $req A request object
     * @param  ResponseInterface      $res A response object
     *
     * @return ResponseInterface
     */
    public function callMiddlewareStack(<ServerRequestInterface> req, <ResponseInterface> res) -> <ResponseInterface>
    {
        var start, resp;
    
        if is_null(this->stack) {
            this->seedMiddlewareStack();
        }
        /** @var callable $start */
        let start =  this->stack->top();
        let this->middlewareLock =  true;
        let resp =  {start}(req, res);
        let this->middlewareLock =  false;
        return resp;
    }

}