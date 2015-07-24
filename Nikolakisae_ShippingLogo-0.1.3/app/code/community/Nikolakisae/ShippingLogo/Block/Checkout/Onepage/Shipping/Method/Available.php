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
 * @category   Nikolakisae
 * @package    Nikolakisae_ShippingLogo
 * @author     Niko K
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Nikolakisae_ShippingLogo_Block_Checkout_Onepage_Shipping_Method_Available extends Mage_Checkout_Block_Onepage_Shipping_Method_Available {

    public function getTitleImage($code) {

        $imageLogo = '';
        if (file_exists(Mage::getBaseDir('media') . DS . 'shipping' . DS . $code . DS . Mage::getStoreConfig('carriers/' . $code . '/image')) && Mage::getStoreConfig('carriers/' . $code . '/image')) {
            $imageLogo = '<img src="' . Mage::getBaseUrl('media') . 'shipping/' . $code . '/' . Mage::getStoreConfig('carriers/' . $code . '/image') . '">';
        }

        if ($imageLogo != '' && Mage::getStoreConfig('carriers/' . $code . '/display_options') == 2) {
            return $imageLogo;
        } elseif ($imageLogo != '' && Mage::getStoreConfig('carriers/' . $code . '/display_options') == 3) {
            return $this->escapeHtml($this->getCarrierName($code)) . ' ' . $imageLogo;
        } elseif ($imageLogo != '' && Mage::getStoreConfig('carriers/' . $code . '/display_options') == 4) {
            return $imageLogo . ' ' . $this->escapeHtml($this->getCarrierName($code));
        }

        return $this->escapeHtml($this->getCarrierName($code));
    }

}
