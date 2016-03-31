namespace Zesle\FastRoute;

class RouteCollector
{
    protected routeParser;
    protected dataGenerator;
    /**
     * Constructs a route collector.
     *
     * @param RouteParser   $routeParser
     * @param DataGenerator $dataGenerator
     */
    public function __construct(<RouteParser> routeParser, <DataGenerator> dataGenerator) -> void
    {
        let this->routeParser = routeParser;
        let this->dataGenerator = dataGenerator;
    }
    
    /**
     * Adds a route to the collection.
     *
     * The syntax used in the $route string depends on the used route parser.
     *
     * @param string|string[] $httpMethod
     * @param string $route
     * @param mixed  $handler
     */
    public function addRoute(httpMethod, string route, handler) -> void
    {
        var routeDatas, method, routeData;
    
        let routeDatas =  this->routeParser->parse(route);
        for method in (array) httpMethod {
            for routeData in routeDatas {
                this->dataGenerator->addRoute(method, routeData, handler);
            }
        }
    }
    
    /**
     * Returns the collected route data, as provided by the data generator.
     *
     * @return array
     */
    public function getData() -> array
    {
        return this->dataGenerator->getData();
    }

}