<?php
/**
 * @author <de.nguyen@bluecomgroup.com>
 * @date 22/07/2015
 */
class BC_Checkout_Block_Onestep extends Mage_Core_Block_Template
{
    protected $_customer;

    /**
     * Get logged in customer
     * @return Mage_Customer_Model_Customer
     */
    public function getCustomer()
    {
        if (empty($this->_customer)) {
            $this->_customer = Mage::getSingleton('customer/session')->getCustomer();
        }
        return $this->_customer;
    }


}