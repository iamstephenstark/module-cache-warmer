<?php

namespace IAmStephenStark\CacheWarmer\Model\ResourceModel\Log;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Initialize resource
     * @return void
     */
    protected function _construct()
    {
        $this->_init('IAmStephenStark\CacheWarmer\Model\Url', 'IAmStephenStark\CacheWarmer\Model\ResourceModel\Url');
    }
}
