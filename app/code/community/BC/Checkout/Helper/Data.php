<?php
class BC_Checkout_Helper_Data extends Mage_Core_Helper_Abstract
{
	/**
	* Retrieve grand total
	* @return string
	**/
	public function getGrandTotal()
	{
		$quote = Mage::getModel('checkout/session')->getQuote();
		$grandTotal = $quote->getGrandTotal();
		return Mage::helper('checkout')->formatPrice($grandTotal);
	}

	/**
	 * Detect user from persistent cookie
	 * @return bool
	 */
	public function isPersistentMember()
	{
		$customerSession = Mage::getSingleton('customer/session');
		if (!$customerSession->isLoggedIn()) {
			$persistentSession = Mage::helper('persistent/session');
			if ($persistentSession && $persistentSession->isPersistent()) {
				return true;
			}
		}
		return false;
	}

}