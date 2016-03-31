namespace Zesle\FastRoute\DataGenerator;

class MarkBased extends RegexBasedAbstract
{
    protected function getApproxChunkSize()
    {
        return 30;
    }
    
    protected function processChunk(regexToRoutesMap)
    {
        var routeMap, regexes, markName, regex, route, tmpArray2c2f43069618b16172ab1e5762683585;
    
        let routeMap =  [];
        let regexes =  [];
        let markName = "a";
        for regex, route in regexToRoutesMap {
            let regexes[] =  regex . "(*MARK:" . markName . ")";
            let routeMap[markName] =  [route->handler, route->variables];
            let markName++;
        }
        let regex =  "~^(?|" . implode("|", regexes) . ")$~";
        let tmpArray2c2f43069618b16172ab1e5762683585 = ["regex" : regex, "routeMap" : routeMap];
        return tmpArray2c2f43069618b16172ab1e5762683585;
    }

}