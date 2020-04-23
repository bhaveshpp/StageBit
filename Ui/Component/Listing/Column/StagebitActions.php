<?php

namespace Bhaveshpp\Stagebit\Ui\Component\Listing\Column;

class StagebitActions extends \Magento\Ui\Component\Listing\Columns\Column
{
    const URL_PATH_DELETE = 'bhaveshpp_stagebit/items/delete';

    /**
     * URL builder
     *
     * @var \Magento\Framework\UrlInterface
     */
    protected $_urlBuilder;

    /**
     * constructor
     *
     * @param \Magento\Framework\UrlInterface $urlBuilder
     * @param \Magento\Framework\View\Element\UiComponent\ContextInterface $context
     * @param \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory
     * @param array $components
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\UrlInterface $urlBuilder,
        \Magento\Framework\View\Element\UiComponent\ContextInterface $context,
        \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory,
        array $components = [],
        array $data = []
    ) {
        $this->_urlBuilder = $urlBuilder;
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }

    /**
     * Prepare Data Source
     *
     * @param array $dataSource
     * @return array
     */
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as & $item) {
                $item[$this->getData('name')] = [
                    'delete' => [
                        'href' => $this->_urlBuilder->getUrl(
                            static::URL_PATH_DELETE,
                            [
                                'id' => $item['stagebit_id']
                            ]
                        ),
                        'label' => __('Delete')
                    ],
                ];
            }
        }
        return $dataSource;
    }
}
