namespace Zesle\Slim;

class DefaultServicesProviderregisterClosureTwo
{

    public function __construct()
    {
        
    }

    public function __invoke(container)
    {
    let headers =  new Headers(["Content-Type" : "text/html; charset=UTF-8"]);
    let response =  new Response(200, headers);
    return response->withProtocolVersion(container->get("settings")["httpVersion"]);
    }
}
    