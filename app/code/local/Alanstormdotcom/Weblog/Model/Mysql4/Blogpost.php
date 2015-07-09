<?php
/**
 * @author <de.nguyen@bluecomgroup.com>
 * @date 08/07/2015
 */
class Alanstormdotcom_Weblog_Model_Mysql4_Blogpost extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init('weblog/blogpost', 'blogpost_id');
    }
}