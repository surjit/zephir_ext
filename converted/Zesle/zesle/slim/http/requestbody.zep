/**
 * Slim Framework (http://slimframework.com)
 *
 * @link      https://github.com/slimphp/Slim
 * @copyright Copyright (c) 2011-2016 Josh Lockhart
 * @license   https://github.com/slimphp/Slim/blob/3.x/LICENSE.md (MIT License)
 */
namespace Zesle\Slim\Http;

/**
 * Provides a PSR-7 implementation of a reusable raw request body
 */
class RequestBody extends Body
{
    /**
     * Create a new RequestBody.
     */
    public function __construct() -> void
    {
        var stream;
    
        let stream =  fopen("php://temp", "w+");
        stream_copy_to_stream(fopen("php://input", "r"), stream);
        rewind(stream);
        parent::__construct(stream);
    }

}