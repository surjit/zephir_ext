namespace Zesle\Slim;

class RouteaddMiddlewareClosureZero
{
    private callable;
    private next;

    public function __construct(callablee, next)
    {
                let this->callable = callable;
        let this->next = next;

    }

    public function __invoke(ServerRequestInterface req, ResponseInterface res)
    {
    let result =  call_user_func(this->callable, req, res, this->next);
    if result instanceof ResponseInterface === false {
        throw new UnexpectedValueException("Middleware must return instance of \\Psr\\Http\\Message\\ResponseInterface");
    }
    return result;
    }
}
    