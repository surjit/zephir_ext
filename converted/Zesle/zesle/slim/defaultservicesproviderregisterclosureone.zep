namespace Zesle\Slim;

class DefaultServicesProviderregisterClosureOne
{

    public function __construct()
    {
        
    }

    public function __invoke(container)
    {
    return Request::createFromEnvironment(container->get("environment"));
    }
}
    