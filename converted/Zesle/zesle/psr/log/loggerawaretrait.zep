namespace Zesle\Psr\Log;

/**
 * Basic Implementation of LoggerAwareInterface.
 */
class LoggerAwareTrait
{
    /** @var LoggerInterface */
    protected logger;
    /**
     * Sets a logger.
     * 
     * @param LoggerInterface $logger
     */
    public function setLogger(<LoggerInterface> logger) -> void
    {
        let this->logger = logger;
    }

}