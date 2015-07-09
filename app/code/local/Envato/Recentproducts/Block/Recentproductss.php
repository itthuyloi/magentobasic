<?php
/**
 * @author <de.nguyen@bluecomgroup.com>
 * @date 06/07/2015
 */
class Envato_Recentproducts_Block_Recentproductss extends Mage_Core_Block_Template
{
    public function getRecentProducts()
    {
        $arrProducts = array();
        $products = Mage::getModel('recentproducts/recentproducts')->getRecentproducts();
        foreach ($products as $product) {
            $arrProducts[] = array(
                'id' => $product->getId(),
                'name' => $product->getName(),
                'url' => $product->getProductUrl(),
            );
        }
        return $arrProducts;
    }

}