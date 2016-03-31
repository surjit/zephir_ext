namespace Zesle\Slim\HttpCache;

use Zesle\Pimple\Container;
use Zesle\Pimple\ServiceProviderInterface;
use Zesle\Psr\Http\Message\RequestInterface;
use Zesle\Psr\Http\Message\ResponseInterface;
class Cache
{
    /**
     * Cache-Control type (public or private)
     *
     * @var string
     */
    protected type;
    /**
     * Cache-Control max age in seconds
     *
     * @var int
     */
    protected maxAge;
    /**
     * Cache-Control includes must-revalidate flag
     *
     * @var bool
     */
    protected mustRevalidate;
    /**
     * Create new HTTP cache
     *
     * @param string $type           The cache type: "public" or "private"
     * @param int    $maxAge         The maximum age of client-side cache
     * @param bool   $mustRevalidate must-revalidate
     */
    public function __construct(string type = "private", int maxAge = 86400, bool mustRevalidate = false) -> void
    {
        let this->type = type;
        let this->maxAge = maxAge;
        let this->mustRevalidate = mustRevalidate;
    }
    
    /**
     * Invoke cache middleware
     *
     * @param  RequestInterface  $request  A PSR7 request object
     * @param  ResponseInterface $response A PSR7 response object
     * @param  callable          $next     The next middleware callable
     *
     * @return ResponseInterface           A PSR7 response object
     */
    public function __invoke(<RequestInterface> request, <ResponseInterface> response, next) -> <ResponseInterface>
    {
        var lastModified, ifModifiedSince, etag, ifNoneMatch, etagList;
    
        let response =  {next}(request, response);
        // Cache-Control header
        if !(response->hasHeader("Cache-Control")) {
            let response =  response->withHeader("Cache-Control", sprintf("%s, max-age=%s%s", this->type, this->maxAge,  this->mustRevalidate ? ", must-revalidate"  : ""));
        }
        // Last-Modified header and conditional GET check
        let lastModified =  response->getHeaderLine("Last-Modified");
        if lastModified {
            if !(is_integer(lastModified)) {
                let lastModified =  strtotime(lastModified);
            }
            let ifModifiedSince =  request->getHeaderLine("If-Modified-Since");
            if ifModifiedSince && lastModified <= strtotime(ifModifiedSince) {
                return response->withStatus(304);
            }
        }
        // ETag header and conditional GET check
        let etag =  response->getHeader("ETag");
        let etag =  reset(etag);
        if etag {
            let ifNoneMatch =  request->getHeaderLine("If-None-Match");
            if ifNoneMatch {
                let etagList =  preg_split("@\\s*,\\s*@", ifNoneMatch);
                if in_array(etag, etagList) || in_array("*", etagList) {
                    return response->withStatus(304);
                }
            }
        }
        return response;
    }

}