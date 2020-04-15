<?php

namespace IAmStephenStark\CacheWarmer\Cron;

use Psr\Log\LoggerInterface;

class CacheWarmer
{
    protected $logger;

    public function __construct(
        LoggerInterface $logger
    ) {
        $this->logger = $logger;
    }

   /**
    * CacheWarmer execute
    * @return void
    */
    public function execute() {
        $this->logger->debug('[IAmStephenStark_CacheWarmer] - Cron Started');
    }
}
