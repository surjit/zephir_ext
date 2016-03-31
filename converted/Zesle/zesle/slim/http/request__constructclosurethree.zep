namespace Zesle\Slim\Http;

class Request__constructClosureThree
{

    public function __construct()
    {
        
    }

    public function __invoke(input)
    {
    parse_str(input, data);
    return data;
    }
}
    