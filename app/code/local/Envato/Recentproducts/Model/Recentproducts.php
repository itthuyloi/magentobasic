<?php
/**
 * @author <de.nguyen@bluecomgroup.com>
 * @date 06/07/2015
 */
class Envato_Recentproducts_Model_Recentproducts extends Mage_Core_Model_Abstract
{
    public function getRecentproducts()
    {
        $products = Mage::getModel('catalog/product')
            ->getCollection()
            ->addAttributeToSelect('*')
            ->setOrder('entity_id', 'DESC')
            ->setPageSize(5);
        return $products;
    }
}