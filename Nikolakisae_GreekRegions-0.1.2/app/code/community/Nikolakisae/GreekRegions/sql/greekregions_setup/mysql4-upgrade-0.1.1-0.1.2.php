<?php
/**
 * Greek Regions - Greek Regions Module
 *
 * @title      Magento -> Greek Regions (Greek)
 * @category   Languages / Locales
 * @package    Nikolakisae_GreekRegions
 * @author     Niko K
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

$installer = $this;
/* @var $installer Mage_Core_Model_Resource_Setup */

$installer->startSetup();

$installer->run("
UPDATE {$this->getTable('directory_country_region')} SET `code` = 'EU' WHERE default_name = 'Εύβοιας';
");
$installer->endSetup();
