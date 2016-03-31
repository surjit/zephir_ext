namespace Zesle\FastRoute\Dispatcher;

class MarkBased extends RegexBasedAbstract
{
    public function __construct(data) -> void
    {
        var this->staticRouteMap, this->variableRouteData, tmpListThis->staticRouteMapThis->variableRouteData;
    
        let tmpListThis->staticRouteMapThis->variableRouteData = data;
        let this->staticRouteMap = tmpListThis->staticRouteMapThis->variableRouteData[0];
        let this->variableRouteData = tmpListThis->staticRouteMapThis->variableRouteData[1];
    }
    
    protected function dispatchVariableRoute(routeData, uri)
    {
        var data, handler, varNames, tmpListHandlerVarNames, vars, i, varName, tmpI1, tmpArray6d5ed1c8abeb53887d93cd3662294b39, tmpArraya71477a4160ae47001d7142ab0438057;
    
        for data in routeData {
            if !(preg_match(data["regex"], uri, matches)) {
                continue;
            }
            let tmpListHandlerVarNames = data["routeMap"][matches["MARK"]];
            let handler = tmpListHandlerVarNames[0];
            let varNames = tmpListHandlerVarNames[1];
            let vars =  [];
            let i = 0;
            for varName in varNames {
                
                let i++;
                let tmpI1 = i;
                
                let vars[varName] = matches[tmpI1];
            }
            let tmpArray6d5ed1c8abeb53887d93cd3662294b39 = [self::FOUND, handler, vars];
            return tmpArray6d5ed1c8abeb53887d93cd3662294b39;
        }
        let tmpArraya71477a4160ae47001d7142ab0438057 = [self::NOT_FOUND];
        return tmpArraya71477a4160ae47001d7142ab0438057;
    }

}