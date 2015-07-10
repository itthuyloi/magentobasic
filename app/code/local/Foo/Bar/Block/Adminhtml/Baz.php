<?php
/**
 * @author <de.nguyen@bluecomgroup.com>
 * @date 10/07/2015
 */
class Foo_Bar_Block_Adminhtml_Baz extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_blockGroup = 'foo_bar';
        $this->_controller = 'adminhtml_baz';
        $this->_headerText = $this->__('Baz');
        parent::__construct();
    }
}