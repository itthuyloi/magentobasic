<?php
/**
 * @author <de.nguyen@bluecomgroup.com>
 * @date 22/07/2015
 */
class BC_Checkout_OnestepController extends Mage_Checkout_Controller_Action
{
    /**
     * Main checkout one step page
     */
    public function indexAction()
    {
        //return cart page if the checkout is disabled
        if (!Mage::helper('checkout')->canOnepageCheckout()) {
            $msg = $this->__('The onepage checkout is disabled');
            Mage::getSingleton('checkout/session')->addError($msg);
            $this->_redirect('checkout/cart');
            return;
        }
        //check cart empty
        $quote = Mage::getSingleton('checkout/type_onepage')->getQuote();
        if (!$quote->hasItems() || $quote->getHasError()) {
            $this->_redirect('checkout/cart');
            return;
        }

        $this->loadLayout();
        $this->getLayout()->getBlock('head')->setTitle($this->__('One step checkout'));
        $this->renderLayout();
    }
}