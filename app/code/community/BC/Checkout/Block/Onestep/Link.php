<?php
/**
 * @author <de.nguyen@bluecomgroup.com>
 * @date 22/07/2015
 */
class BC_Checkout_Block_Onestep_Link extends Mage_Core_Block_Template
{
    public function getCheckoutUrl()
    {
        return $this->getUrl('bc-checkout/onestep', array('_secure'=>true));
    }

    public function isDisabled()
    {
        return !Mage::getSingleton('checkout/session')->getQuote()->validateMinimumAmount();
    }

    public function isPossibleOnepageCheckout()
    {
        return $this->helper('checkout')->canOnepageCheckout();
    }
}
