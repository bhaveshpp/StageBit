<?php

namespace Bhaveshpp\Stagebit\Model;

use Magento\Framework\Model\AbstractModel;

class Stagebit extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init(\Bhaveshpp\Stagebit\Model\ResourceModel\Stagebit::class);
    }
}
