<?php
/**
 * @author <de.nguyen@bluecomgroup.com>
 * @date 10/07/2015
 */
class ECommerce_Blog_Model_Blogpost extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        $this->_init('blog/blogpost');
    }
}