namespace Zesle\Slim\Http;

class UrifilterQueryClosureOne
{

    public function __construct()
    {
        
    }

    public function __invoke(match)
    {
    return rawurlencode(match[0]);
    }
}
    