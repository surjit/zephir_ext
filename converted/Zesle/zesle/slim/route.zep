/**
 * Slim Framework (http://slimframework.com)
 *
 * @link      https://github.com/slimphp/Slim
 * @copyright Copyright (c) 2011-2016 Josh Lockhart
 * @license   https://github.com/slimphp/Slim/blob/3.x/LICENSE.md (MIT License)
 */
namespace Zesle\Slim;

use Exception;
use InvalidArgumentException;
use Zesle\Psr\Http\Message\ServerRequestInterface;
use Zesle\Psr\Http\Message\ResponseInterface;
use Zesle\Slim\Handlers\Strategies\RequestResponse;
use Zesle\Slim\Interfaces\InvocationStrategyInterface;
use Zesle\Slim\Interfaces\RouteInterface;
/**
 * Route
 */
class Route extends Routable implements RouteInterface
{
    //use MiddlewareAwareTrait;
    /**
     * HTTP methods supported by this route
     *
     * @var string[]
     */
    protected methods = [];
    /**
     * Route identifier
     *
     * @var string
     */
    protected identifier;
    /**
     * Route name
     *
     * @var null|string
     */
    protected name;
    /**
     * Parent route groups
     *
     * @var RouteGroup[]
     */
    protected groups;
    protected finalized = false;
    /**
     * Output buffering mode
     *
     * One of: false, 'prepend' or 'append'
     *
     * @var boolean|string
     */
    protected outputBuffering = "append";
    /**
     * Route parameters
     *
     * @var array
     */
    protected arguments = [];
    /**
     * Create new route
     *
     * @param string[]     $methods The route HTTP methods
     * @param string       $pattern The route pattern
     * @param callable     $callable The route callable
     * @param int          $identifier The route identifier
     * @param RouteGroup[] $groups The parent route groups
     */
    public function __construct(array methods, string pattern, callablee, array groups = [], int identifier = 0) -> void
    {
        let this->methods = methods;
        let this->pattern = pattern;
        let this->callablee = callablee;
        let this->groups = groups;
        let this->identifier =  "route" . identifier;
    }
    
    /**
     * Finalize the route in preparation for dispatching
     */
    public function finalize()
    {
        var groupMiddleware, group, middleware;
    
        if this->finalized {
            return;
        }
        let groupMiddleware =  [];
        for group in this->getGroups() {
            let groupMiddleware =  array_merge(group->getMiddleware(), groupMiddleware);
        }
        let this->middleware =  array_merge(this->middleware, groupMiddleware);
        for middleware in this->getMiddleware() {
            this->addMiddleware(middleware);
        }
        let this->finalized =  true;
    }
    
    /**
     * Get route callable
     *
     * @return callable
     */
    public function getCallable()
    {
        return this->callablee;
    }
    
    /**
     * Get route methods
     *
     * @return string[]
     */
    public function getMethods() -> array
    {
        return this->methods;
    }
    
    /**
     * Get parent route groups
     *
     * @return RouteGroup[]
     */
    public function getGroups() -> array
    {
        return this->groups;
    }
    
    /**
     * Get route name
     *
     * @return null|string
     */
    public function getName()
    {
        return this->name;
    }
    
    /**
     * Get route identifier
     *
     * @return string
     */
    public function getIdentifier() -> string
    {
        return this->identifier;
    }
    
    /**
     * Get output buffering mode
     *
     * @return boolean|string
     */
    public function getOutputBuffering()
    {
        return this->outputBuffering;
    }
    
    /**
     * Set output buffering mode
     *
     * One of: false, 'prepend' or 'append'
     *
     * @param boolean|string $mode
     *
     * @throws InvalidArgumentException If an unknown buffering mode is specified
     */
    public function setOutputBuffering(mode) -> void
    {
        var tmpArray759769a3229777949ffdfb19be67e860;
    
        let tmpArray759769a3229777949ffdfb19be67e860 = [false, "prepend", "append"];
        if !(in_array(mode, tmpArray759769a3229777949ffdfb19be67e860, true)) {
            throw new InvalidArgumentException("Unknown output buffering mode");
        }
        let this->outputBuffering = mode;
    }
    
    /**
     * Set route name
     *
     * @param string $name
     *
     * @return self
     *
     * @throws InvalidArgumentException if the route name is not a string
     */
    public function setName(string name)
    {
        if !(is_string(name)) {
            throw new InvalidArgumentException("Route name must be a string");
        }
        let this->name = name;
        return this;
    }
    
    /**
     * Set a route argument
     *
     * @param string $name
     * @param string $value
     *
     * @return self
     */
    public function setArgument(string name, string value)
    {
        let this->arguments[name] = value;
        return this;
    }
    
    /**
     * Replace route arguments
     *
     * @param array $arguments
     *
     * @return self
     */
    public function setArguments(array arguments)
    {
        let this->arguments = arguments;
        return this;
    }
    
    /**
     * Retrieve route arguments
     *
     * @return array
     */
    public function getArguments() -> array
    {
        return this->arguments;
    }
    
    /**
     * Retrieve a specific route argument
     *
     * @param string $name
     * @param mixed $default
     *
     * @return mixed
     */
    public function getArgument(string name, default = null)
    {
        if array_key_exists(name, this->arguments) {
            return this->arguments[name];
        }
        return default;
    }
    
    /*	 * ******************************************************************************
     * Route Runner
     * ***************************************************************************** */
    /**
     * Prepare the route for use
     *
     * @param ServerRequestInterface $request
     * @param array $arguments
     */
    public function prepare(<ServerRequestInterface> request, array arguments) -> void
    {
        var k, v;
    
        // Add the arguments
        for k, v in arguments {
            this->setArgument(k, v);
        }
    }
    
    /**
     * Run route
     *
     * This method traverses the middleware stack, including the route's callable
     * and captures the resultant HTTP response object. It then sends the response
     * back to the Application.
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface      $response
     *
     * @return ResponseInterface
     */
    public function run(<ServerRequestInterface> request, <ResponseInterface> response) -> <ResponseInterface>
    {
        // Finalise route now that we are about to run it
        this->finalize();
        // Traverse middleware stack and fetch updated response
        return this->callMiddlewareStack(request, response);
    }
    
    /**
     * Dispatch route callable against current Request and Response objects
     *
     * This method invokes the route object's callable. If middleware is
     * registered for the route, each callable middleware is invoked in
     * the order specified.
     *
     * @param ServerRequestInterface $request  The current Request object
     * @param ResponseInterface      $response The current Response object
     * @return \Psr\Http\Message\ResponseInterface
     * @throws \Exception  if the route callable throws an exception
     */
    public function __invoke(<ServerRequestInterface> request, <ResponseInterface> response) -> <Psr\Http\Message\ResponseInterface>
    {
        var handler, newResponse, output, e, body;
    
        let this->callablee =  this->resolveCallable(this->callablee);
        /** @var InvocationStrategyInterface $handler */
        let handler =  isset this->container ? this->container->get("foundHandler")  : new RequestResponse();
        // invoke route callable
        if this->outputBuffering === false {
            let newResponse =  {handler}(this->callablee, request, response, this->arguments);
        } else {
            try {
                ob_start();
                let newResponse =  {handler}(this->callablee, request, response, this->arguments);
                let output =  ob_get_clean();
            } catch Exception, e {
                ob_end_clean();
                throw e;
            }
        }
        if newResponse instanceof ResponseInterface {
            // if route callback returns a ResponseInterface, then use it
            let response = newResponse;
        } elseif is_string(newResponse) {
            // if route callback returns a string, then append it to the response
            if response->getBody()->isWritable() {
                response->getBody()->write(newResponse);
            }
        }
        if !(empty(output)) && response->getBody()->isWritable() {
            if this->outputBuffering === "prepend" {
                // prepend output buffer content
                let body =  new Http\Body(fopen("php://temp", "r+"));
                body->write(output . response->getBody());
                let response =  response->withBody(body);
            } elseif this->outputBuffering === "append" {
                // append output buffer content
                response->getBody()->write(output);
            }
        }
        return response;
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
        let this->stack[] = new RouteaddMiddlewareClosureOne(callablee, next);
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