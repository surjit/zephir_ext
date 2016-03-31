namespace Zesle\Slim;

class DefaultServicesProviderregisterClosureZero
{

    public function __construct()
    {
        
    }

    public function __invoke()
    {
    return new Environment(_SERVER);
    }
}
    