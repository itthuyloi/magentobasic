<?php
/**
 * @author <de.nguyen@bluecomgroup.com>
 * @date 10/07/2015
 */
class ECommerce_Bog_Model_Resource_Eav_Mysql4_Blogpost_Collection extends Mage_Eav_Model_Entity_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('blog/blogpost');
    }
}