/**
 * Slim Framework (http://slimframework.com)
 *
 * @link      https://github.com/slimphp/Twig-View
 * @copyright Copyright (c) 2011-2015 Josh Lockhart
 * @license   https://github.com/slimphp/Twig-View/blob/master/LICENSE.md (MIT License)
 */
namespace Zesle\Slim\Views;

use Zesle\Psr\Http\Message\ResponseInterface;
/**
 * Twig View
 *
 * This class is a Slim Framework view helper built
 * on top of the Twig templating component. Twig is
 * a PHP component created by Fabien Potencier.
 *
 * @link http://twig.sensiolabs.org/
 */
class Mustache implements \ArrayAccess
{
    /**
     * Twig loader
     *
     * @var \Twig_LoaderInterface
     */
    protected loader;
    /**
     * Twig environment
     *
     * @var \Twig_Environment
     */
    protected environment;
    /**
     * Default view variables
     *
     * @var array
     */
    protected defaultVariables = [];
    /*	 * ******************************************************************************
     * Constructors and service provider registration
     * ***************************************************************************** */
    /**
     * Create new Twig view
     *
     * @param string|array $path     Path(s) to templates directory
     * @param array        $settings Twig environment settings
     */
    public function __construct(path, settings = [])
    {
        var tmpArray2e78f74c05e918b5ad953045e7e22bd7;
    
        let this->loader =  is_string(path) ? new \Mustache_Loader_FilesystemLoader(path)  : this->addPaths(path);
        let this->environment =  new \Mustache_Engine(["template_class_prefix" : "__MyTemplates_", "cache" : ROOT_PATH . "/tmp/cache/mustache", "cache_file_mode" : 438, "cache_lambda_templates" : true, "loader" : this->loader, "helpers" : ["i18n" : new Mustache__constructClosureOne()], "escape" : new Mustache__constructClosureOne(), "charset" : "ISO-8859-1", "logger" : new \Mustache_Logger_StreamLogger("php://stderr"), "strict_callables" : true, "pragmas" : [\Mustache_Engine::PRAGMA_FILTERS]]);
    }
    
    /*	 * ******************************************************************************
     * Methods
     * ***************************************************************************** */
    /**
     * Proxy method to add an extension to the Twig environment
     *
     * @param \Twig_ExtensionInterface $extension A single extension instance or an array of instances
     */
    public function addExtension(<Twig_ExtensionInterface> extension) -> void
    {
        this->environment->addExtension(extension);
    }
    
    /**
     * Fetch rendered template
     *
     * @param  string $template Template pathname relative to templates directory
     * @param  array  $data     Associative array of template variables
     *
     * @return string
     */
    public function fetch(string template, array data = []) -> string
    {
        let data =  array_merge(this->defaultVariables, data);
        return this->environment->loadTemplate(template)->render(data);
    }
    
    /**
     * Output rendered template
     *
     * @param ResponseInterface $response
     * @param  string $template Template pathname relative to templates directory
     * @param  array $data Associative array of template variables
     * @return ResponseInterface
     */
    public function render(<ResponseInterface> response, string template, array data = []) -> <ResponseInterface>
    {
        response->getBody()->write(this->fetch(template, data));
        return response;
    }
    
    /**
     * Add a selection of paths with the desired namespace Zesle\
     *
     * @param array $paths
     * @return \Twig_Loader_Filesystem
     */
    protected function addPaths(array paths)
    {
        var loader, namespacee, path;
    
        let loader =  new \Twig_Loader_Filesystem();
        for namespacee, path in paths {
            if is_string(namespacee) {
                loader->setPaths(path, namespacee);
            } else {
                loader->addPath(path);
            }
        }
        return loader;
    }
    
    /*	 * ******************************************************************************
     * Accessors
     * ***************************************************************************** */
    /**
     * Return Twig loader
     *
     * @return \Twig_LoaderInterface
     */
    public function getLoader()
    {
        return this->loader;
    }
    
    /**
     * Return Twig environment
     *
     * @return \Twig_Environment
     */
    public function getEnvironment()
    {
        return this->environment;
    }
    
    /*	 * ******************************************************************************
     * ArrayAccess interface
     * ***************************************************************************** */
    /**
     * Does this collection have a given key?
     *
     * @param  string $key The data key
     *
     * @return bool
     */
    public function offsetExists(key)
    {
        return array_key_exists(key, this->defaultVariables);
    }
    
    /**
     * Get collection item for key
     *
     * @param string $key The data key
     *
     * @return mixed The key's value, or the default value
     */
    public function offsetGet(string key)
    {
        return this->defaultVariables[key];
    }
    
    /**
     * Set collection item
     *
     * @param string $key   The data key
     * @param mixed  $value The data value
     */
    public function offsetSet(string key, value) -> void
    {
        let this->defaultVariables[key] = value;
    }
    
    /**
     * Remove item from collection
     *
     * @param string $key The data key
     */
    public function offsetUnset(string key) -> void
    {
        unset this->defaultVariables[key];
    
    }
    
    /*	 * ******************************************************************************
     * Countable interface
     * ***************************************************************************** */
    /**
     * Get number of items in collection
     *
     * @return int
     */
    public function count()
    {
        return count(this->defaultVariables);
    }
    
    /*	 * ******************************************************************************
     * IteratorAggregate interface
     * ***************************************************************************** */
    /**
     * Get collection iterator
     *
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(this->defaultVariables);
    }

}