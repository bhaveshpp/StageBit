<?php

namespace Bhaveshpp\Stagebit\Controller\Adminhtml\Items;

class Index extends \Bhaveshpp\Stagebit\Controller\Adminhtml\Items
{
    /**
     * Items list.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Magento_Customer::customer');
        $resultPage->getConfig()->getTitle()->prepend(__('Signed up Users'));
        $resultPage->addBreadcrumb(__('Signed up'), __('User'));
        $resultPage->addBreadcrumb(__('Signed up'), __('List'));
        return $resultPage;
    }
}
