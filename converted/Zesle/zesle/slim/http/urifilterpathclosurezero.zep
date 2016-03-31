namespace Zesle\Slim\Http;

class UrifilterPathClosureZero
{

    public function __construct()
    {
        
    }

    public function __invoke(match)
    {
    return rawurlencode(match[0]);
    }
}
    