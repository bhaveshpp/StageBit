<?php

namespace Bhaveshpp\Stagebit\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();

        /**
         * Creating table bhaveshpp_stagebit
         */
        $table = $installer->getConnection()->newTable(
            $installer->getTable('bhaveshpp_stagebit')
        )->addColumn(
            'stagebit_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
            'Entity Id'
        )->addColumn(
            'name',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            ['nullable' => true],
            'Name'
        )->addColumn(
            'date',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            ['nullable' => true,'default' => null],
            'Date'
        )->setComment(
            'Bhaveshpp Stagebit Table'
        );
        $installer->getConnection()->createTable($table);
        $installer->endSetup();
    }
}
