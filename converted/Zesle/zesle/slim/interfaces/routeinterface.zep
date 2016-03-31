/**
 * Slim Framework (http://slimframework.com)
 *
 * @link      https://github.com/slimphp/Slim
 * @copyright Copyright (c) 2011-2016 Josh Lockhart
 * @license   https://github.com/slimphp/Slim/blob/3.x/LICENSE.md (MIT License)
 */
namespace Zesle\Slim\Interfaces;

use InvalidArgumentException;
use Zesle\Psr\Http\Message\ServerRequestInterface;
use Zesle\Psr\Http\Message\ResponseInterface;
/**
 * Route Interface
 *
 * @package Slim
 * @since   3.0.0
 */
interface RouteInterface
{
    /**
     * Retrieve a specific route argument
     *
     * @param string $name
     * @param mixed $default
     *
     * @return mixed
     */
    public function getArgument(string name, default = null);
    
    /**
     * Get route arguments
     *
     * @return array
     */
    public function getArguments() -> array;
    
    /**
     * Get route name
     *
     * @return null|string
     */
    public function getName();
    
    /**
     * Get route pattern
     *
     * @return string
     */
    public function getPattern() -> string;
    
    /**
     * Set a route argument
     *
     * @param string $name
     * @param string $value
     *
     * @return static
     */
    public function setArgument(string name, string value) -> <static>;
    
    /**
     * Replace route arguments
     *
     * @param array $arguments
     *
     * @return static
     */
    public function setArguments(array arguments) -> <static>;
    
    /**
     * Set route name
     *
     * @param string $name
     *
     * @return static
     * @throws InvalidArgumentException if the route name is not a string
     */
    public function setName(string name) -> <static>;
    
    /**
     * Add middleware
     *
     * This method prepends new middleware to the route's middleware stack.
     *
     * @param callable|string $callable The callback routine
     *
     * @return RouteInterface
     */
    public function add(callablee) -> <RouteInterface>;
    
    /**
     * Prepare the route for use
     *
     * @param ServerRequestInterface $request
     * @param array $arguments
     */
    public function prepare(<ServerRequestInterface> request, array arguments) -> void;
    
    /**
     * Run route
     *
     * This method traverses the middleware stack, including the route's callable
     * and captures the resultant HTTP response object. It then sends the response
     * back to the Application.
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @return ResponseInterface
     */
    public function run(<ServerRequestInterface> request, <ResponseInterface> response) -> <ResponseInterface>;
    
    /**
     * Dispatch route callable against current Request and Response objects
     *
     * This method invokes the route object's callable. If middleware is
     * registered for the route, each callable middleware is invoked in
     * the order specified.
     *
     * @param ServerRequestInterface $request  The current Request object
     * @param ResponseInterface      $response The current Response object
     *
     * @return ResponseInterface
     */
    public function __invoke(<ServerRequestInterface> request, <ResponseInterface> response) -> <ResponseInterface>;

}