namespace Zesle\Slim\Http;

class Request__constructClosureZero
{

    public function __construct()
    {
        
    }

    public function __invoke(input)
    {
    return json_decode(input, true);
    }
}
    