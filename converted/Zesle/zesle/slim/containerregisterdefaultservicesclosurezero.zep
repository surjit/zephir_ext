namespace Zesle\Slim;

class ContainerregisterDefaultServicesClosureZero
{
    private userSettings;
    private defaultSettings;

    public function __construct(userSettings, defaultSettings)
    {
                let this->userSettings = userSettings;
        let this->defaultSettings = defaultSettings;

    }

    public function __invoke()
    {
    return new Collection(array_merge(this->defaultSettings, this->userSettings));
    }
}
    