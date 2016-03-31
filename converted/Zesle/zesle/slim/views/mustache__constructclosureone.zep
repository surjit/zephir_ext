namespace Zesle\Slim\Views;

class Mustache__constructClosureOne
{

    public function __construct()
    {
        
    }

    public function __invoke(value)
    {
    return htmlspecialchars(value, ENT_COMPAT, "UTF-8");
    }
}
    