<?php
/**
 * @author <de.nguyen@bluecomgroup.com>
 * @date 21/07/2015
 */

require_once 'Mage/Checkout/controllers/OnepageController.php';

class BC_Checkout_OnepageController extends Mage_Checkout_OnepageController
{
    public function indexAction()
    {
        $this->_redirect('bc-checkout/onestep', array(
           '_secure' => true
        ));
    }
}