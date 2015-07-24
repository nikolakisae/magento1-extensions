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
 * Nikolakisae FreeShippingAdmin Sales Quote address model
 *
 * @category   Nikolakisae
 * @package    Nikolakisae_FreeShippingAdmin
 * @author     Niko K
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Nikolakisae_FreeShippingAdmin_Model_Sales_Quote_Address extends Mage_Sales_Model_Quote_Address
{
   /**
     * Free Shipping Method settings
     */
    const XML_PATH_CARRIERS_FREESHIPPING_SHOWONLYADMIN = 'carriers/freeshipping/show_only_admin';

    /**
     * Retrieve collection of quote shipping rates
     *
     * @return Mage_Eav_Model_Entity_Collection_Abstract
     */
    public function getShippingRatesCollection()
    {
        parent::getShippingRatesCollection();
        $freeShippingKey = false;
        $freeShippingOnlyAdmin = Mage::getStoreConfig(self::XML_PATH_CARRIERS_FREESHIPPING_SHOWONLYADMIN);

        foreach ($this->_rates as $key => $rate) {
            if ($rate->getCarrier() == 'freeshipping' && $freeShippingOnlyAdmin && !Mage::app()->getStore()->isAdmin()) {
                $freeShippingKey = $key;
            }
        }
        if($freeShippingKey) {
            $this->_rates->removeItemByKey($freeShippingKey);
        }
        return $this->_rates;
    }
}
