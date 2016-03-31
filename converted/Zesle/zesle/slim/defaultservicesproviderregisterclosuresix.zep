namespace Zesle\Slim;

class DefaultServicesProviderregisterClosureSix
{

    public function __construct()
    {
        
    }

    public function __invoke(container)
    {
    return new Error(container->get("settings")["displayErrorDetails"]);
    }
}
    