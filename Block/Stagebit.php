<?php

namespace Bhaveshpp\Stagebit\Block;

/**
 * Stagebit content block
 */
class Stagebit extends \Magento\Framework\View\Element\Template
{
    // phpcs:disable Generic.CodeAnalysis.UselessOverridingMethod
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context
    ) {
        parent::__construct($context);
    }

    public function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(__('Bhaveshpp Stagebit Module'));
        
        return parent::_prepareLayout();
    }
}
