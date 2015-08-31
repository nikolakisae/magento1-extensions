<?php
/**
 * @title      Admin Order Comment
 * @package    Nikolakisae_AdminOrderComment
 * @author     Niko K
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Nikolakisae\AdminOrderComment\Setup;

use Magento\Framework\DB\Ddl\Table;
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

        $table = $installer->getTable('sales_order_status_history');
        if ($installer->tableExists('sales_order_status_history')) {
            $installer->getConnection()
                    ->addColumn(
                         $table,
                         'admin_username',
                         [
                            'type' => Table::TYPE_TEXT,
                            'length' => 128,
                            'default' => null,
                            'after' => 'entity_name',
                            'comment' => 'Admin username'
                         ]
            );
        }
        $installer->endSetup();

    }
}
