/**
 * Slim Framework (http://slimframework.com)
 *
 * @link      https://github.com/slimphp/Slim
 * @copyright Copyright (c) 2011-2016 Josh Lockhart
 * @license   https://github.com/slimphp/Slim/blob/3.x/LICENSE.md (MIT License)
 */
namespace Zesle\Slim;

use Zesle\Interop\Container\ContainerInterface;
/**
 * A routable, middleware-aware object
 *
 * @package Slim
 * @since   3.0.0
 */
abstract class Routable
{
    /**
     * Route callable
     *
     * @var callable
     */
    protected callablee;
    /**
     * Container
     *
     * @var ContainerInterface
     */
    protected container;
    /**
     * Route middleware
     *
     * @var callable[]
     */
    protected middleware = [];
    /**
     * Route pattern
     *
     * @var string
     */
    protected pattern;
    /**
     * Get the middleware registered for the group
     *
     * @return callable[]
     */
    public function getMiddleware()
    {
        return this->middleware;
    }
    
    /**
     * Get the route pattern
     *
     * @return string
     */
    public function getPattern() -> string
    {
        return this->pattern;
    }
    
    /**
     * Set container for use with resolveCallable
     *
     * @param ContainerInterface $container
     *
     * @return self
     */
    public function setContainer(<ContainerInterface> container)
    {
        let this->container = container;
        return this;
    }
    
    /**
     * Prepend middleware to the middleware collection
     *
     * @param callable|string $callable The callback routine
     *
     * @return static
     */
    public function add(callablee) -> <static>
    {
        let this->middleware[] = new DeferredCallable(callablee, this->container);
        return this;
    }
    
    protected function resolveCallable(callablee)
    {
        var resolver;
    
        if !(this->container instanceof ContainerInterface) {
            return callablee;
        }
        /** @var CallableResolverInterface $resolver */
        let resolver =  this->container->get("callableResolver");
        return resolver->resolve(callablee);
    }

}