namespace Zesle\FastRoute\DataGenerator;

class CharCountBased extends RegexBasedAbstract
{
    protected function getApproxChunkSize()
    {
        return 30;
    }
    
    protected function processChunk(regexToRoutesMap)
    {
        var routeMap, regexes, suffixLen, suffix, count, regex, route, tmpArray23c19983325889a32e4a177f9df76c02;
    
        let routeMap =  [];
        let regexes =  [];
        let suffixLen = 0;
        let suffix = "";
        let count =  count(regexToRoutesMap);
        for regex, route in regexToRoutesMap {
            let suffixLen++;
            let suffix .= "	";
            let regexes[] =  "(?:" . regex . "/(\\t{" . suffixLen . "})\\t{" . (count - suffixLen) . "})";
            let routeMap[suffix] =  [route->handler, route->variables];
        }
        let regex =  "~^(?|" . implode("|", regexes) . ")$~";
        let tmpArray23c19983325889a32e4a177f9df76c02 = ["regex" : regex, "suffix" : "/" . suffix, "routeMap" : routeMap];
        return tmpArray23c19983325889a32e4a177f9df76c02;
    }

}