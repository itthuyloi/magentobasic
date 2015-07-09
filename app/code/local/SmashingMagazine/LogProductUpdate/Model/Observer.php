<?php
/**
 * @author <de.nguyen@bluecomgroup.com>
 * @date 06/07/2015
 */
class SmashingMagazine_LogProductUpdate_Model_Observer
{
    /**
     * Magento passes a Varien_Event_Observer object as the first parameters
     * of dispatch events.
     * @param Varien_Event_Observer $observer
     */
    public function logUpdate(Varien_Event_Observer $observer)
    {
        //Retrieve the product being updated from the event observer
        $product = $observer->getEvent()->getProduct();
        $name = $product->getName();
        $sku = $product->getSku();
        Mage::log(
            "{$name} ({$sku}) updated",
            null,
            'product-updates.log'
        );
    }
}