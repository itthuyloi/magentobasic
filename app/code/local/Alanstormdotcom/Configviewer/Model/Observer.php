<?php
/**
 * @author <de.nguyen@bluecomgroup.com>
 * @date 07/07/2015
 */
class Alanstormdotcom_Configviewer_Model_Observer
{
    const FLAG_SHOW_CONFIG = 'showConfig';
    const FlAG_SHOW_CONFIG_FORMAT = 'showConfigFormat';
    private $request;
    public function checkForConfigRequest(Varien_Event_Observer $observer)
    {
        $this->request = $observer->getEvent()->getData('front')->getRequest();
        if ($this->request->{self::FLAG_SHOW_CONFIG} === 'true') {
            $this->setHeader();
            $this->outputConfig();
        }
    }
    private function setHeader()
    {
        $format = isset($this->request->{self::FlAG_SHOW_CONFIG_FORMAT}) ?
            $this->request->{self::FlAG_SHOW_CONFIG_FORMAT} : 'xml';
        switch ($format) {
            case 'text':
                header("Content-Type: text/plain");
                break;
            default:
                header("Content-Type: text/xml");
                break;
        }
    }
    public function outputConfig()
    {
        die(Mage::app()->getConfig()->getNode()->asXML());
    }
}