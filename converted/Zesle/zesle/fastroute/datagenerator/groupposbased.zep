namespace Zesle\FastRoute\DataGenerator;

class GroupPosBased extends RegexBasedAbstract
{
    protected function getApproxChunkSize()
    {
        return 10;
    }
    
    protected function processChunk(regexToRoutesMap)
    {
        var routeMap, regexes, offset, regex, route, tmpArray2c2f43069618b16172ab1e5762683585;
    
        let routeMap =  [];
        let regexes =  [];
        let offset = 1;
        for regex, route in regexToRoutesMap {
            let regexes[] = regex;
            let routeMap[offset] =  [route->handler, route->variables];
            let offset += count(route->variables);
        }
        let regex =  "~^(?:" . implode("|", regexes) . ")$~";
        let tmpArray2c2f43069618b16172ab1e5762683585 = ["regex" : regex, "routeMap" : routeMap];
        return tmpArray2c2f43069618b16172ab1e5762683585;
    }

}