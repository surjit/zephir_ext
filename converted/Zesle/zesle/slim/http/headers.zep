/**
 * Slim Framework (http://slimframework.com)
 *
 * @link      https://github.com/slimphp/Slim
 * @copyright Copyright (c) 2011-2016 Josh Lockhart
 * @license   https://github.com/slimphp/Slim/blob/3.x/LICENSE.md (MIT License)
 */
namespace Zesle\Slim\Http;

use Zesle\Slim\Collection;
use Zesle\Slim\Interfaces\Http\HeadersInterface;
/**
 * Headers
 *
 * This class represents a collection of HTTP headers
 * that is used in both the HTTP request and response objects.
 * It also enables header name case-insensitivity when
 * getting or setting a header value.
 *
 * Each HTTP header can have multiple values. This class
 * stores values into an array for each header name. When
 * you request a header value, you receive an array of values
 * for that header.
 */
class Headers extends Collection implements HeadersInterface
{
    /**
     * Special HTTP headers that do not have the "HTTP_" prefix
     *
     * @var array
     */
    protected static special = ["CONTENT_TYPE" : 1, "CONTENT_LENGTH" : 1, "PHP_AUTH_USER" : 1, "PHP_AUTH_PW" : 1, "PHP_AUTH_DIGEST" : 1, "AUTH_TYPE" : 1];
    /**
     * Create new headers collection with data extracted from
     * the application Environment object
     *
     * @param Environment $environment The Slim application Environment
     *
     * @return self
     */
    public static function createFromEnvironment(<Environment> environment)
    {
        var data, key, value;
    
        let data =  [];
        for key, value in environment {
            let key =  strtoupper(key);
            if isset static::special[key] || strpos(key, "HTTP_") === 0 {
                if key !== "HTTP_CONTENT_LENGTH" {
                    let data[key] = value;
                }
            }
        }
        return new static(data);
    }
    
    /**
     * Return array of HTTP header names and values.
     * This method returns the _original_ header name
     * as specified by the end user.
     *
     * @return array
     */
    public function all() -> array
    {
        var all, out, key, props;
    
        let all =  parent::all();
        let out =  [];
        for key, props in all {
            let out[props["originalKey"]] = props["value"];
        }
        return out;
    }
    
    /**
     * Set HTTP header value
     *
     * This method sets a header value. It replaces
     * any values that may already exist for the header name.
     *
     * @param string $key   The case-insensitive header name
     * @param string $value The header value
     */
    public function set(string key, string value) -> void
    {
        var tmpArrayee91cfd73baa126804cadca1be624e66;
    
        if !(is_array(value)) {
            let value =  [value];
        }
        parent::set(this->normalizeKey(key), ["value" : value, "originalKey" : key]);
    }
    
    /**
     * Get HTTP header value
     *
     * @param  string  $key     The case-insensitive header name
     * @param  mixed   $default The default value if key does not exist
     *
     * @return string[]
     */
    public function get(string key, default = null) -> array
    {
        if this->has(key) {
            return parent::get(this->normalizeKey(key))["value"];
        }
        return default;
    }
    
    /**
     * Get HTTP header key as originally specified
     *
     * @param  string   $key     The case-insensitive header name
     * @param  mixed    $default The default value if key does not exist
     *
     * @return string
     */
    public function getOriginalKey(string key, default = null) -> string
    {
        if this->has(key) {
            return parent::get(this->normalizeKey(key))["originalKey"];
        }
        return default;
    }
    
    /**
     * Add HTTP header value
     *
     * This method appends a header value. Unlike the set() method,
     * this method _appends_ this new value to any values
     * that already exist for this header name.
     *
     * @param string       $key   The case-insensitive header name
     * @param array|string $value The new header value(s)
     */
    public function add(string key, value) -> void
    {
        var oldValues, tmpArray40cd750bba9870f18aada2478b24840a, newValues;
    
        let tmpArray40cd750bba9870f18aada2478b24840a = [];
        let oldValues =  this->get(key, tmpArray40cd750bba9870f18aada2478b24840a);
        let newValues =  is_array(value) ? value  : [value];
        this->set(key, array_merge(oldValues, array_values(newValues)));
    }
    
    /**
     * Does this collection have a given header?
     *
     * @param  string $key The case-insensitive header name
     *
     * @return bool
     */
    public function has(string key) -> bool
    {
        return parent::has(this->normalizeKey(key));
    }
    
    /**
     * Remove header from collection
     *
     * @param  string $key The case-insensitive header name
     */
    public function remove(string key) -> void
    {
        parent::remove(this->normalizeKey(key));
    }
    
    /**
     * Normalize header name
     *
     * This method transforms header names into a
     * normalized form. This is how we enable case-insensitive
     * header names in the other methods in this class.
     *
     * @param  string $key The case-insensitive header name
     *
     * @return string Normalized header name
     */
    public function normalizeKey(string key) -> string
    {
        let key =  strtr(strtolower(key), "_", "-");
        if strpos(key, "http-") === 0 {
            let key =  substr(key, 5);
        }
        return key;
    }

}