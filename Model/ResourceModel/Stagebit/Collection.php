<?php

namespace Bhaveshpp\Stagebit\Model\ResourceModel\Stagebit;
 
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'stagebit_id';
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            \Bhaveshpp\Stagebit\Model\Stagebit::class,
            \Bhaveshpp\Stagebit\Model\ResourceModel\Stagebit::class
        );
    }
}
