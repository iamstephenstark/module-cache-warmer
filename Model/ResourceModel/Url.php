<?php

namespace IAmStephenStark\CacheWarmer\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Url extends AbstractDb
{
    /**
     * Define main table
     * @return void
     */
    protected function _construct()
    {
        $this->_init('cache_warmer_urls', 'entity_id');
    }
}
