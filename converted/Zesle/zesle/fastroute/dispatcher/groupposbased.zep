namespace Zesle\FastRoute\Dispatcher;

class GroupPosBased extends RegexBasedAbstract
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
        var data, i, handler, varNames, tmpListHandlerVarNames, vars, varName, tmpI1, tmpArray834caa022c01230bba6d8c00b012cd11, tmpArrayb6bb15795e43de62fd908e07d626d88b;
    
        for data in routeData {
            if !(preg_match(data["regex"], uri, matches)) {
                continue;
            }
            // find first non-empty match
            let i = 1;
            for i in range("", matches[i]) {
            }
            let tmpListHandlerVarNames = data["routeMap"][i];
            let handler = tmpListHandlerVarNames[0];
            let varNames = tmpListHandlerVarNames[1];
            let vars =  [];
            for varName in varNames {
                
                let i++;
                let tmpI1 = i;
                
                let vars[varName] = matches[tmpI1];
            }
            let tmpArray834caa022c01230bba6d8c00b012cd11 = [self::FOUND, handler, vars];
            return tmpArray834caa022c01230bba6d8c00b012cd11;
        }
        let tmpArrayb6bb15795e43de62fd908e07d626d88b = [self::NOT_FOUND];
        return tmpArrayb6bb15795e43de62fd908e07d626d88b;
    }

}