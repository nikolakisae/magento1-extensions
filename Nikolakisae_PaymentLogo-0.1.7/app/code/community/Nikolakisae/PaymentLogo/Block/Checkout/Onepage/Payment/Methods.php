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
 * @package    Nikolakisae_PaymentLogo
 * @author     Niko K
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Nikolakisae_PaymentLogo_Block_Checkout_Onepage_Payment_Methods extends Mage_Checkout_Block_Onepage_Payment_Methods {

    public function getMethodTitle(Mage_Payment_Model_Method_Abstract $method) {

Mage::log($method->debug());
        $imageLogo = '';
        $form = $this->getChild('payment.method.' . $method->getCode());

        if (file_exists(Mage::getBaseDir('media') . DS . 'payment' . DS . $method->getCode() . DS . Mage::getStoreConfig('payment/' . $method->getCode() . '/image')) && Mage::getStoreConfig('payment/' . $method->getCode() . '/image')) {
            $imageLogo = '<img src="' . Mage::getBaseUrl('media') . 'payment/' . $method->getCode() . '/' . Mage::getStoreConfig('payment/' . $method->getCode() . '/image') . '">';
        }

        if ($imageLogo != '' && Mage::getStoreConfig('payment/' . $method->getCode() . '/display_options') == 2) {
            return $imageLogo;
        } elseif ($imageLogo != '' && Mage::getStoreConfig('payment/' . $method->getCode() . '/display_options') == 3) {
                return $this->escapeHtml($method->getTitle()).' '.$imageLogo;
        } elseif ($imageLogo != '' && Mage::getStoreConfig('payment/' . $method->getCode() . '/display_options') == 4) {
                return $imageLogo.' '.$this->escapeHtml($method->getTitle());
        } else {
            $form = $this->getChild('payment.method.' . $method->getCode());
            if ($form && $form->hasMethodTitle()) {
                return $this->escapeHtml($form->getMethodTitle());
            }
        }

        return $this->escapeHtml($method->getTitle());
    }

}
