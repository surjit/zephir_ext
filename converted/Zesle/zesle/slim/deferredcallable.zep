namespace Zesle\Slim;

use Closure;
use Zesle\Interop\Container\ContainerInterface;
class DeferredCallable
{
    protected callablee;
    /** @var  ContainerInterface */
    protected container;
    /**
     * DeferredMiddleware constructor.
     * @param callable|string $callable
     * @param ContainerInterface $container
     */
    public function __construct(callablee, <ContainerInterface> container = null) -> void
    {
        let this->callablee = callablee;
        let this->container = container;
    }
    
    public function __invoke()
    {
        var callablee, args;
    
        let callablee =  this->resolveCallable(this->callablee);
        if callablee instanceof Closure {
            let callablee =  callablee->bindTo(this->container);
        }
        let args =  func_get_args();
        return call_user_func_array(callablee, args);
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