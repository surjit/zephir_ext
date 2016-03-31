namespace Zesle\FastRoute\DataGenerator;

use Zesle\FastRoute\DataGenerator;
use Zesle\FastRoute\BadRouteException;
use Zesle\FastRoute\Route;
abstract class RegexBasedAbstract implements DataGenerator
{
    protected staticRoutes = [];
    protected methodToRegexToRoutesMap = [];
    protected abstract function getApproxChunkSize() -> void;
    
    protected abstract function processChunk(regexToRoutesMap) -> void;
    
    public function addRoute(httpMethod, routeData, handler) -> void
    {
        if this->isStaticRoute(routeData) {
            this->addStaticRoute(httpMethod, routeData, handler);
        } else {
            this->addVariableRoute(httpMethod, routeData, handler);
        }
    }
    
    public function getData()
    {
        var tmpArrayc2c6fa324eb40f17ce6bdf94e319d8f8, tmpArray2d71b5e677c5099aa8c338214455c341;
    
        if empty(this->methodToRegexToRoutesMap) {
            let tmpArrayc2c6fa324eb40f17ce6bdf94e319d8f8 = [this->staticRoutes, []];
            return tmpArrayc2c6fa324eb40f17ce6bdf94e319d8f8;
        }
        let tmpArray2d71b5e677c5099aa8c338214455c341 = [this->staticRoutes, this->generateVariableRouteData()];
        return tmpArray2d71b5e677c5099aa8c338214455c341;
    }
    
    protected function generateVariableRouteData()
    {
        var data, method, regexToRoutesMap, chunkSize, chunks, tmpArray48d9a6cfef2bbc72d13746a6767d8972;
    
        let data =  [];
        for method, regexToRoutesMap in this->methodToRegexToRoutesMap {
            let chunkSize =  this->computeChunkSize(count(regexToRoutesMap));
            let chunks =  array_chunk(regexToRoutesMap, chunkSize, true);
            let tmpArray48d9a6cfef2bbc72d13746a6767d8972 = [this, "processChunk"];
            let data[method] =  array_map(tmpArray48d9a6cfef2bbc72d13746a6767d8972, chunks);
        }
        return data;
    }
    
    protected function computeChunkSize(count)
    {
        var numParts;
    
        let numParts =  max(1, round(count / this->getApproxChunkSize()));
        return ceil(count / numParts);
    }
    
    protected function isStaticRoute(routeData)
    {
        return count(routeData) == 1 && is_string(routeData[0]);
    }
    
    protected function addStaticRoute(httpMethod, routeData, handler) -> void
    {
        var routeStr, route;
    
        let routeStr = routeData[0];
        if isset this->staticRoutes[httpMethod][routeStr] {
            throw new BadRouteException(sprintf("Cannot register two routes matching \"%s\" for method \"%s\"", routeStr, httpMethod));
        }
        if isset this->methodToRegexToRoutesMap[httpMethod] {
            for route in this->methodToRegexToRoutesMap[httpMethod] {
                if route->matches(routeStr) {
                    throw new BadRouteException(sprintf("Static route \"%s\" is shadowed by previously defined variable route \"%s\" for method \"%s\"", routeStr, route->regex, httpMethod));
                }
            }
        }
        let this->staticRoutes[httpMethod][routeStr] = handler;
    }
    
    protected function addVariableRoute(httpMethod, routeData, handler) -> void
    {
        var regex, variables, tmpListRegexVariables;
    
        let tmpListRegexVariables = this->buildRegexForRoute(routeData);
        let regex = tmpListRegexVariables[0];
        let variables = tmpListRegexVariables[1];
        if isset this->methodToRegexToRoutesMap[httpMethod][regex] {
            throw new BadRouteException(sprintf("Cannot register two routes matching \"%s\" for method \"%s\"", regex, httpMethod));
        }
        let this->methodToRegexToRoutesMap[httpMethod][regex] = new Route(httpMethod, handler, regex, variables);
    }
    
    protected function buildRegexForRoute(routeData)
    {
        var regex, variables, part, varName, regexPart, tmpListVarNameRegexPart, tmpArray9b357d66d0464c555bcfed4ee1975ea5;
    
        let regex = "";
        let variables =  [];
        for part in routeData {
            if is_string(part) {
                let regex .= preg_quote(part, "~");
                continue;
            }
            let tmpListVarNameRegexPart = part;
            let varName = tmpListVarNameRegexPart[0];
            let regexPart = tmpListVarNameRegexPart[1];
            if isset variables[varName] {
                throw new BadRouteException(sprintf("Cannot use the same placeholder \"%s\" twice", varName));
            }
            if this->regexHasCapturingGroups(regexPart) {
                throw new BadRouteException(sprintf("Regex \"%s\" for parameter \"%s\" contains a capturing group", regexPart, varName));
            }
            let variables[varName] = varName;
            let regex .= "(" . regexPart . ")";
        }
        let tmpArray9b357d66d0464c555bcfed4ee1975ea5 = [regex, variables];
        return tmpArray9b357d66d0464c555bcfed4ee1975ea5;
    }
    
    protected function regexHasCapturingGroups(regex)
    {
        if strpos(regex, "(") === false {
            // Needs to have at least a ( to contain a capturing group
            return false;
        }
        // Semi-accurate detection for capturing groups
        return preg_match("~
                (?:
                    \\(\\?\\(
                  | \\[ [^\\]\\\\]* (?: \\\\ . [^\\]\\\\]* )* \\]
                  | \\\\ .
                ) (*SKIP)(*FAIL) |
                \\(
                (?!
                    \\? (?! <(?![!=]) | P< | ' )
                  | \\*
                )
            ~x", regex);
    }

}