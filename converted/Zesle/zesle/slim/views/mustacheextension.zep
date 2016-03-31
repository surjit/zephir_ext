/**
 * Slim Framework (http://slimframework.com)
 *
 * @link      https://github.com/slimphp/Twig-View
 * @copyright Copyright (c) 2011-2015 Josh Lockhart
 * @license   https://github.com/slimphp/Twig-View/blob/master/LICENSE.md (MIT License)
 */
namespace Zesle\Slim\Views;

class MustacheExtension extends \Twig_Extension
{
    /**
     * @var \Slim\Interfaces\RouterInterface
     */
    protected router;
    /**
     * @var string|\Slim\Http\Uri
     */
    protected uri;
    public function __construct(router, uri) -> void
    {
        let this->router = router;
        let this->uri = uri;
    }
    
    public function getName()
    {
        return "slim";
    }
    
    public function getFunctions()
    {
        var tmpArraye68075d0c704c759f3a00206839ebfa0, tmpArray31155e8f1e72f3840c1706f6d8406a6a, tmpArrayd6e45ce7e9db6fe70122547555361a50;
    
        let tmpArraye68075d0c704c759f3a00206839ebfa0 = [new \Twig_SimpleFunction("path_for", tmpArray31155e8f1e72f3840c1706f6d8406a6a), new \Twig_SimpleFunction("base_url", tmpArrayd6e45ce7e9db6fe70122547555361a50)];
        return tmpArrayf57c1f31515558faf671f8dc3591f393;
    }
    
    public function pathFor(name, data = [], queryParams = [], appName = "default")
    {
        return this->router->pathFor(name, data, queryParams);
    }
    
    public function baseUrl()
    {
        if is_string(this->uri) {
            return this->uri;
        }
        if method_exists(this->uri, "getBaseUrl") {
            return this->uri->getBaseUrl();
        }
    }
    
    /**
     * Set the base url
     *
     * @param string|Slim\Http\Uri $baseUrl
     * @return void
     */
    public function setBaseUrl(baseUrl)
    {
        let this->uri = baseUrl;
    }

}