<?php
/**
 * @author <de.nguyen@bluecomgroup.com>
 * @date 10/07/2015
 */
class ECommerce_Blog_Model_Resource_Eav_Mysql4_Blogpost extends Mage_Eav_Model_Entity_Abstract
{
    public function _construct()
    {
        $coreResource = Mage::getSingleton('core/resource');
        $this->setType('blog_blogpost')->setConnection(
            $coreResource->getConnection('blog_read'),
            $coreResource->getConnection('blog_write')
        );

    }
}