<?php

namespace Bhaveshpp\Stagebit\Model\ResourceModel;

class Stagebit extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('bhaveshpp_stagebit', 'stagebit_id');
    }
}
