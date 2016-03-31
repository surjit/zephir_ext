/**
 * Slim Framework (http://slimframework.com)
 *
 * @link      https://github.com/slimphp/Slim
 * @copyright Copyright (c) 2011-2016 Josh Lockhart
 * @license   https://github.com/slimphp/Slim/blob/3.x/LICENSE.md (MIT License)
 */
namespace Zesle\Slim\Http;

use InvalidArgumentException;
use Zesle\Slim\Interfaces\Http\CookiesInterface;
/**
 * Cookie helper
 */
class Cookies implements CookiesInterface
{
    /**
     * Cookies from HTTP request
     *
     * @var array
     */
    protected requestCookies = [];
    /**
     * Cookies for HTTP response
     *
     * @var array
     */
    protected responseCookies = [];
    /**
     * Default cookie properties
     *
     * @var array
     */
    protected defaults = ["value" : "", "domain" : null, "hostonly" : null, "path" : null, "expires" : null, "secure" : false, "httponly" : false];
    /**
     * Create new cookies helper
     *
     * @param array $cookies
     */
    public function __construct(array cookies = []) -> void
    {
        let this->requestCookies = cookies;
    }
    
    /**
     * Set default cookie properties
     *
     * @param array $settings
     */
    public function setDefaults(array settings) -> void
    {
        let this->defaults =  array_replace(this->defaults, settings);
    }
    
    /**
     * Get request cookie
     *
     * @param  string $name    Cookie name
     * @param  mixed  $default Cookie default value
     *
     * @return mixed Cookie value if present, else default
     */
    public function get(string name, default = null)
    {
        return  isset this->requestCookies[name] ? this->requestCookies[name]  : default;
    }
    
    /**
     * Set response cookie
     *
     * @param string       $name  Cookie name
     * @param string|array $value Cookie value, or cookie properties
     */
    public function set(string name, value) -> void
    {
        if !(is_array(value)) {
            let value =  ["value" : (string) value];
        }
        let this->responseCookies[name] =  array_replace(this->defaults, value);
    }
    
    /**
     * Convert to `Set-Cookie` headers
     *
     * @return string[]
     */
    public function toHeaders() -> array
    {
        var headers, name, properties;
    
        let headers =  [];
        for name, properties in this->responseCookies {
            let headers[] =  this->toHeader(name, properties);
        }
        return headers;
    }
    
    /**
     * Convert to `Set-Cookie` header
     *
     * @param  string $name       Cookie name
     * @param  array  $properties Cookie properties
     *
     * @return string
     */
    protected function toHeader(string name, array properties) -> string
    {
        var result, timestamp;
    
        let result =  urlencode(name) . "=" . urlencode(properties["value"]);
        if isset properties["domain"] {
            let result .= "; domain=" . properties["domain"];
        }
        if isset properties["path"] {
            let result .= "; path=" . properties["path"];
        }
        if isset properties["expires"] {
            if is_string(properties["expires"]) {
                let timestamp =  strtotime(properties["expires"]);
            } else {
                let timestamp =  (int) properties["expires"];
            }
            if timestamp !== 0 {
                let result .= "; expires=" . gmdate("D, d-M-Y H:i:s e", timestamp);
            }
        }
        if isset properties["secure"] && properties["secure"] {
            let result .= "; secure";
        }
        if isset properties["hostonly"] && properties["hostonly"] {
            let result .= "; HostOnly";
        }
        if isset properties["httponly"] && properties["httponly"] {
            let result .= "; HttpOnly";
        }
        return result;
    }
    
    /**
     * Parse HTTP request `Cookie:` header and extract
     * into a PHP associative array.
     *
     * @param  string $header The raw HTTP request `Cookie:` header
     *
     * @return array Associative array of cookie names and values
     *
     * @throws InvalidArgumentException if the cookie data cannot be parsed
     */
    public static function parseHeader(string header) -> array
    {
        var pieces, cookies, cookie, key, value;
    
        if is_array(header) === true {
            let header =  isset header[0] ? header[0]  : "";
        }
        if is_string(header) === false {
            throw new InvalidArgumentException("Cannot parse Cookie data. Header value must be a string.");
        }
        let header =  rtrim(header, "
");
        let pieces =  preg_split("@\\s*[;,]\\s*@", header);
        let cookies =  [];
        for cookie in pieces {
            let cookie =  explode("=", cookie, 2);
            if count(cookie) === 2 {
                let key =  urldecode(cookie[0]);
                let value =  urldecode(cookie[1]);
                if !(isset cookies[key]) {
                    let cookies[key] = value;
                }
            }
        }
        return cookies;
    }

}