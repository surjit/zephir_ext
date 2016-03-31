namespace Zesle\Slim;

class DefaultServicesProviderregisterClosureFive
{

    public function __construct()
    {
        
    }

    public function __invoke(container)
    {
    return new PhpError(container->get("settings")["displayErrorDetails"]);
    }
}
    