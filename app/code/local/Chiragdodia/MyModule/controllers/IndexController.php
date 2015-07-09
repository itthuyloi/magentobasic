<?php
/**
 * @author <de.nguyen@bluecomgroup.com>
 * @date 07/07/2015
 */
class Chiragdodia_MyModule_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
    public function goodbyeAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
    public function testAction()
    {
        echo "test action";
    }

}