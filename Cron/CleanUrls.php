<?php

namespace IAmStephenStark\CacheWarmer\Cron;

use Psr\Log\LoggerInterface;

/**
 * Class CleanUrls
 * @package IAmStephenStark\CacheWarmer\Cron
 */
class CleanUrls
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * CleanUrls constructor.
     * @param LoggerInterface $logger
     */
    public function __construct(
        LoggerInterface $logger
    ) {
        $this->logger = $logger;
    }

    /**
     * CacheWarmer execute
     * @return void
     */
    public function execute()
    {
        $this->logger->debug('[IAmStephenStark_CacheWarmer] - Clean Urls Cron Started');
    }
}
