/**
 * Slim Framework (http://slimframework.com)
 *
 * @link      https://github.com/slimphp/Slim
 * @copyright Copyright (c) 2011-2016 Josh Lockhart
 * @license   https://github.com/slimphp/Slim/blob/3.x/LICENSE.md (MIT License)
 */
namespace Zesle\Slim;

use Closure;
use Zesle\Zesle\Slim\Interfaces\RouteGroupInterface;
/**
 * A collector for Routable objects with a common middleware stack
 *
 * @package Slim
 */
class RouteGroup extends Routable implements RouteGroupInterface
{
    /**
     * Create a new RouteGroup
     *
     * @param string   $pattern  The pattern prefix for the group
     * @param callable $callable The group callable
     */
    public function __construct(string pattern, callablee) -> void
    {
        let this->pattern = pattern;
        let this->callablee = callablee;
    }
    
    /**
     * Invoke the group to register any Routable objects within it.
     *
     * @param App $app The App to bind the callable to.
     */
    public function __invoke(<App> app = null) -> void
    {
        var callablee;
    
        let callablee =  this->resolveCallable(this->callablee);
        if callablee instanceof Closure && app !== null {
            let callablee =  callablee->bindTo(app);
        }
        {callablee}();
    }

}