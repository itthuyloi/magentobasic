<?php
/**
 * @author <de.nguyen@bluecomgroup.com>
 * @date 22/07/2015
 */
class BC_Checkout_Helper_Url extends Mage_Checkout_Helper_Url
{
    /**
     * Retrieve checkout url
     * @return string
     */
    public function getCheckoutUrl()
    {
        $schema = Mage::app()->getRequest()->getScheme();
        return $this->_getUrl('bc-checkout/onestep', array('_secure' => $schema !== 'http'));
    }

    /**
     * Retrieve login url with checkout referrer
     * @return string
     */
    public function getLoginUrl()
    {
        $checkoutUrl = Mage::helper('bc_checkout/url')->getCheckoutUrl();
        $referer = Mage::helper('core')->urlEncode($checkoutUrl);
        return Mage::getUrl('customer/account/login', array('referer' => $referer));
    }
}