<?php
/**
 * @author <de.nguyen@bluecomgroup.com>
 * @date 10/07/2015
 */
class Foo_Bar_Model_Mysql4_Baz extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init('foo_bar/baz', 'id');
    }
}