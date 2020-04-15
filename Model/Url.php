<?php

namespace IAmStephenStark\CacheWarmer\Model;

use Magento\Framework\Model\AbstractModel;

class Url extends AbstractModel
{
    /**
     * Object initialization
     * @return void
     */
    protected function _construct()
    {
        $this->_init('IAmStephenStark\CacheWarmer\Model\ResourceModel\Url');
    }
}
