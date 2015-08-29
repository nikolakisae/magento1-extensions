<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 *
 * Nikolakisae FreeShippingAdmin Shipping Config model
 *
 * @category   Nikolakisae
 * @package    Nikolakisae_FreeShippingAdmin
 * @author     Niko K
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Nikolakisae_FreeShippingAdmin_Model_Shipping_Config extends Mage_Shipping_Model_Config
{
    /**
     * Free Shipping Method settings
     */
    const XML_PATH_CARRIERS_FREESHIPPING_SHOWONLYADMIN = 'carriers/freeshipping/show_only_admin';

    /**
     * Retrieve active system carriers
     *
     * @param   mixed $store
     * @return  array
     */
    public function getActiveCarriers($store = null)
    {
        $carriers = parent::getActiveCarriers($store);
        if (!Mage::app()->getStore()->isAdmin()) {
            $carriersCodes = array_keys($carriers);
            $freeShippingOnlyAdmin = Mage::getStoreConfig(self::XML_PATH_CARRIERS_FREESHIPPING_SHOWONLYADMIN);
            foreach ($carriersCodes as $carriersCode) {
                if ($carriersCode == 'freeshipping' && $freeShippingOnlyAdmin) {
                    unset($carriers[$carriersCode]);
                }
            }
        }
        return $carriers;
    }
}
