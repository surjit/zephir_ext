namespace Zesle\Slim;

class RoutercreateDispatcherClosureZero
{

    public function __construct()
    {
        
    }

    public function __invoke(RouteCollector r)
    {
    for route in this->getRoutes() {
        r->addRoute(route->getMethods(), route->getPattern(), route->getIdentifier());
    }
    }
}
    