namespace Zesle\Slim;

class DefaultServicesProviderregisterClosureNine
{

    public function __construct()
    {
        
    }

    public function __invoke(container)
    {
    return new CallableResolver(container);
    }
}
    