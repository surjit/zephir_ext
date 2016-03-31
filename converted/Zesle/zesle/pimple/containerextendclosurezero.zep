namespace Zesle\Pimple;

class ContainerextendClosureZero
{
    private callable;
    private factory;

    public function __construct(callablee, factory)
    {
                let this->callable = callable;
        let this->factory = factory;

    }

    public function __invoke(c)
    {
    return {this->callable}({this->factory}(c), c);
    }
}
    