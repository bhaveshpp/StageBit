<?php

namespace Bhaveshpp\Stagebit\Controller\Index;

use Magento\Framework\App\Action\Context;
use Bhaveshpp\Stagebit\Model\StagebitFactory;

class Save extends \Magento\Framework\App\Action\Action
{
    /**
     * @var Stagebit
     */
    protected $_stagebit;

    public function __construct(
        Context $context,
        StagebitFactory $stagebit
    ) {
        $this->_stagebit = $stagebit;
        parent::__construct($context);
    }
    public function execute()
    {
        $data = $this->getRequest()->getParams();
        $stagebit = $this->_stagebit->create();
        $stagebit->setData($data);
        if ($stagebit->save()) {
            $this->messageManager->addSuccessMessage(__('You saved the data.'));
        } else {
            $this->messageManager->addErrorMessage(__('Data was not saved.'));
        }
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('signup/index/index');
        return $resultRedirect;
    }
}
