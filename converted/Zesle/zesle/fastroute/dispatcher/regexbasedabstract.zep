namespace Zesle\FastRoute\Dispatcher;

use Zesle\FastRoute\Dispatcher;
abstract class RegexBasedAbstract implements Dispatcher
{
    protected staticRouteMap;
    protected variableRouteData;
    protected abstract function dispatchVariableRoute(routeData, uri) -> void;
    
    public function dispatch(httpMethod, uri)
    {
        var handler, tmpArray640b91c78936843b19774956e6348ce1, tmpArrayf49e4eaafbd1940fbc9cd83cb799a745, varRouteData, result, allowedMethods, method, uriMap, routeData, tmpArray4a4ca28ac829b424cae75b9a825e7a5b, tmpArray561895901cb2a01eea1e521dc6348b7f;
    
        if isset this->staticRouteMap[httpMethod][uri] {
            let handler = this->staticRouteMap[httpMethod][uri];
            let tmpArray640b91c78936843b19774956e6348ce1 = [self::FOUND, handler, []];
            return tmpArray640b91c78936843b19774956e6348ce1;
        } else {
            if httpMethod === "HEAD" && isset this->staticRouteMap["GET"][uri] {
                let handler = this->staticRouteMap["GET"][uri];
                let tmpArrayf49e4eaafbd1940fbc9cd83cb799a745 = [self::FOUND, handler, []];
                return tmpArrayf49e4eaafbd1940fbc9cd83cb799a745;
            }
        }
        let varRouteData =  this->variableRouteData;
        if isset varRouteData[httpMethod] {
            let result =  this->dispatchVariableRoute(varRouteData[httpMethod], uri);
            if result[0] === self::FOUND {
                return result;
            }
        } else {
            if httpMethod === "HEAD" && isset varRouteData["GET"] {
                let result =  this->dispatchVariableRoute(varRouteData["GET"], uri);
                if result[0] === self::FOUND {
                    return result;
                }
            }
        }
        // Find allowed methods for this URI by matching against all other HTTP methods as well
        let allowedMethods =  [];
        for method, uriMap in this->staticRouteMap {
            if method !== httpMethod && isset uriMap[uri] {
                let allowedMethods[] = method;
            }
        }
        for method, routeData in varRouteData {
            if method === httpMethod {
                continue;
            }
            let result =  this->dispatchVariableRoute(routeData, uri);
            if result[0] === self::FOUND {
                let allowedMethods[] = method;
            }
        }
        // If there are no allowed methods the route simply does not exist
        if allowedMethods {
            let tmpArray4a4ca28ac829b424cae75b9a825e7a5b = [self::METHOD_NOT_ALLOWED, allowedMethods];
            return tmpArray4a4ca28ac829b424cae75b9a825e7a5b;
        } else {
            let tmpArray561895901cb2a01eea1e521dc6348b7f = [self::NOT_FOUND];
            return tmpArray561895901cb2a01eea1e521dc6348b7f;
        }
    }

}