namespace Zesle\FastRoute\RouteParser;

use Zesle\FastRoute\BadRouteException;
use Zesle\FastRoute\RouteParser;
/**
 * Parses route strings of the following form:
 *
 * "/user/{name}[/{id:[0-9]+}]"
 */
class Std implements RouteParser
{
    const VARIABLE_REGEX = "\\{
    \\s* ([a-zA-Z][a-zA-Z0-9_]*) \\s*
    (?:
        : \\s* ([^{}]*(?:\\{(?-1)\\}[^{}]*)*)
    )?
\\}";
    const DEFAULT_DISPATCH_REGEX = "[^/]+";
    public function parse(route)
    {
        var routeWithoutClosingOptionals, numOptionals, segments, currentRoute, routeDatas, segment;
    
        let routeWithoutClosingOptionals =  rtrim(route, "]");
        let numOptionals =  strlen(route) - strlen(routeWithoutClosingOptionals);
        // Split on [ while skipping placeholders
        let segments =  preg_split("~" . self::VARIABLE_REGEX . "(*SKIP)(*F) | \\[~x", routeWithoutClosingOptionals);
        if numOptionals !== count(segments) - 1 {
            throw new BadRouteException("Number of opening '[' and closing ']' does not match");
        }
        let currentRoute = "";
        let routeDatas =  [];
        for segment in segments {
            if segment === "" {
                throw new BadRouteException("Empty optional part");
            }
            let currentRoute .= segment;
            let routeDatas[] =  this->parsePlaceholders(currentRoute);
        }
        return routeDatas;
    }
    
    /**
     * Parses a route string that does not contain optional segments.
     */
    protected function parsePlaceholders(route)
    {
        var tmpArray83c2a5b4b2c09eb8e3c7a05537ccab62, offset, routeData, set;
    
        if !(preg_match_all("~" . self::VARIABLE_REGEX . "~x", route, matches, PREG_OFFSET_CAPTURE | PREG_SET_ORDER)) {
            let tmpArray83c2a5b4b2c09eb8e3c7a05537ccab62 = [route];
            return tmpArray83c2a5b4b2c09eb8e3c7a05537ccab62;
        }
        let offset = 0;
        let routeData =  [];
        for set in matches {
            if set[0][1] > offset {
                let routeData[] =  substr(route, offset, set[0][1] - offset);
            }
            let routeData[] =  [set[1][0],  isset set[2] ? trim(set[2][0])  : self::DEFAULT_DISPATCH_REGEX];
            let offset =  set[0][1] + strlen(set[0][0]);
        }
        if offset != strlen(route) {
            let routeData[] =  substr(route, offset);
        }
        return routeData;
    }

}