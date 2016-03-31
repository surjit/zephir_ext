namespace Zesle\Slim\HttpCache;

use InvalidArgumentException;
use Zesle\Pimple\Container;
use Zesle\Pimple\ServiceProviderInterface;
use Zesle\Psr\Http\Message\ResponseInterface;
class CacheProvider implements ServiceProviderInterface
{
    /**
     * Register this cache provider with a Pimple container
     *
     * @param  Container $container
     */
    public function register(<Container> container) -> void
    {
        let container["cache"] = this;
    }
    
    /**
     * Enable client-side HTTP caching
     *
     * @param  ResponseInterface $response       PSR7 response object
     * @param  string            $type           Cache-Control type: "private" or "public"
     * @param  null|int|string   $maxAge         Maximum cache age (integer timestamp or datetime string)
     * @param  bool              $mustRevalidate add option "must-revalidate" to Cache-Control
     *
     * @return ResponseInterface           A new PSR7 response object with `Cache-Control` header
     * @throws InvalidArgumentException if the cache-control type is invalid
     */
    public function allowCache(<ResponseInterface> response, string type = "private", maxAge = null, bool mustRevalidate = false) -> <ResponseInterface>
    {
        var tmpArrayd82503876b89da7e6131b385a9b99f38, headerValue;
    
        let tmpArrayd82503876b89da7e6131b385a9b99f38 = ["private", "public"];
        if !(in_array(type, tmpArrayd82503876b89da7e6131b385a9b99f38)) {
            throw new InvalidArgumentException("Invalid Cache-Control type. Must be \"public\" or \"private\".");
        }
        let headerValue = type;
        if maxAge || is_integer(maxAge) {
            if !(is_integer(maxAge)) {
                let maxAge =  strtotime(maxAge);
            }
            let headerValue =  headerValue . ", max-age=" . maxAge;
        }
        if mustRevalidate {
            let headerValue =  headerValue . ", must-revalidate";
        }
        return response->withHeader("Cache-Control", headerValue);
    }
    
    /**
     * Disable client-side HTTP caching
     *
     * @param  ResponseInterface $response PSR7 response object
     *
     * @return ResponseInterface           A new PSR7 response object with `Cache-Control` header
     */
    public function denyCache(<ResponseInterface> response) -> <ResponseInterface>
    {
        return response->withHeader("Cache-Control", "no-store,no-cache");
    }
    
    /**
     * Add `Expires` header to PSR7 response object
     *
     * @param  ResponseInterface $response A PSR7 response object
     * @param  int|string        $time     A UNIX timestamp or a valid `strtotime()` string
     *
     * @return ResponseInterface           A new PSR7 response object with `Expires` header
     * @throws InvalidArgumentException if the expiration date cannot be parsed
     */
    public function withExpires(<ResponseInterface> response, time) -> <ResponseInterface>
    {
        if !(is_integer(time)) {
            let time =  strtotime(time);
            if time === false {
                throw new InvalidArgumentException("Expiration value could not be parsed with `strtotime()`.");
            }
        }
        return response->withHeader("Expires", gmdate("D, d M Y H:i:s T", time));
    }
    
    /**
     * Add `ETag` header to PSR7 response object
     *
     * @param  ResponseInterface $response A PSR7 response object
     * @param  string            $value    The ETag value
     * @param  string            $type     ETag type: "strong" or "weak"
     *
     * @return ResponseInterface           A new PSR7 response object with `ETag` header
     * @throws InvalidArgumentException if the etag type is invalid
     */
    public function withEtag(<ResponseInterface> response, string value, string type = "strong") -> <ResponseInterface>
    {
        var tmpArraycbd4766bc603f8e0895f2addd01a6645;
    
        let tmpArraycbd4766bc603f8e0895f2addd01a6645 = ["strong", "weak"];
        if !(in_array(type, tmpArraycbd4766bc603f8e0895f2addd01a6645)) {
            throw new InvalidArgumentException("Invalid etag type. Must be \"strong\" or \"weak\".");
        }
        let value =  "\"" . value . "\"";
        if type === "weak" {
            let value =  "W/" . value;
        }
        return response->withHeader("ETag", value);
    }
    
    /**
     * Add `Last-Modified` header to PSR7 response object
     *
     * @param  ResponseInterface $response A PSR7 response object
     * @param  int|string        $time     A UNIX timestamp or a valid `strtotime()` string
     *
     * @return ResponseInterface           A new PSR7 response object with `Last-Modified` header
     * @throws InvalidArgumentException if the last modified date cannot be parsed
     */
    public function withLastModified(<ResponseInterface> response, time) -> <ResponseInterface>
    {
        if !(is_integer(time)) {
            let time =  strtotime(time);
            if time === false {
                throw new InvalidArgumentException("Last Modified value could not be parsed with `strtotime()`.");
            }
        }
        return response->withHeader("Last-Modified", gmdate("D, d M Y H:i:s T", time));
    }

}