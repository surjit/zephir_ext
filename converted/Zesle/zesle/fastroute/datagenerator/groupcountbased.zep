namespace Zesle\FastRoute\DataGenerator;

class GroupCountBased extends RegexBasedAbstract
{
    protected function getApproxChunkSize()
    {
        return 10;
    }
    
    protected function processChunk(regexToRoutesMap)
    {
        var routeMap, regexes, numGroups, regex, route, numVariables, tmpArrayfd7d2a31a57244cb262a40809e06b542;
    
        let routeMap =  [];
        let regexes =  [];
        let numGroups = 0;
        for regex, route in regexToRoutesMap {
            let numVariables =  count(route->variables);
            let numGroups =  max(numGroups, numVariables);
            let regexes[] =  regex . str_repeat("()", numGroups - numVariables);
            let routeMap[numGroups + 1] =  [route->handler, route->variables];
            let numGroups++;
        }
        let regex =  "~^(?|" . implode("|", regexes) . ")$~";
        let tmpArrayfd7d2a31a57244cb262a40809e06b542 = ["regex" : regex, "routeMap" : routeMap];
        return tmpArrayfd7d2a31a57244cb262a40809e06b542;
    }

}