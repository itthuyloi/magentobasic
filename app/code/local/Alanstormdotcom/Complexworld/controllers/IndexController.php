<?php
/**
 * @author <de.nguyen@bluecomgroup.com>
 * @date 09/07/2015
 */
class Alanstormdotcom_Complexworld_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $eavblogpost = Mage::getModel('complexworld/eavblogpost');
        $eavblogpost->load(1);
        var_dump($eavblogpost);
        die(__METHOD__);
    }
    public function populateEntriesAction()
    {
        for ($i = 11; $i <= 20; $i++) {
            $eavblogpost = Mage::getModel('complexworld/eavblogpost');
            $eavblogpost->setTitle('This is a test ' . $i);
            $eavblogpost->save();
        }
        echo 'DONE';
    }
    public function showcollectionAction()
    {
        $blogpost = Mage::getModel('complexworld/eavblogpost');
        $entries = $blogpost->getCollection()->addAttributeToSelect('title');
        $entries->load();
        foreach ($entries as $entry) {
            var_dump($entry->getData());
        }
        die(__METHOD__);
    }


}