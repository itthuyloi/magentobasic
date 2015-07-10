<?php
/**
 * @author <de.nguyen@bluecomgroup.com>
 * @date 10/07/2015
 */
class Alanstormdotcom_Helloworld_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
//        $this->getResponse()->setHeader('Content-Type','text/xml',true);
//        $configs = Mage::getConfig()->loadModulesConfiguration('system.xml');
//        #var_dump($configs->getNode()->asCanonicalArray());
//        #var_dump($configs->getNode()->asNiceXml());
//        echo $configs->getNode()->asXML();
//        exit;
        header('Content-Type: text/xml');
        echo $config = Mage::getConfig()
            ->loadModulesConfiguration('system.xml')
            ->getNode()
            ->asXML();
        exit;

    }
    public function showStoreConfigAction()
    {
        $configs = Mage::getStoreConfig('helloworld_options/messages/hello_flag');
        var_dump($configs);die;
    }
    public function collectionAction()
    {
        $thing_1 = new Varien_Object();
        $thing_1->setName('Richard');
        $thing_1->setAge(24);

        $thing_2 = new Varien_Object();
        $thing_2->setName('Jane');
        $thing_2->setAge(7);

        $thing_3 = new Varien_Object();
        $thing_3->setName('Spot');
        $thing_3->setLastName('The dog');
        $thing_3->setAge(7);

        $collection = new Varien_Data_Collection();
        $collection->addItem($thing_1);//->addItem($thing_2)->addItem($thing_3);

        //collection of product
        $contentsearchtext = $titlesearchtext = 'ram';
        var_dump(
            (string)
            Mage::getModel('catalog/product')
                ->getCollection()
                ->addAttributeToSelect('*')
                ->addFieldToFilter('price',array('from'=>'10','to'=>'20'))
                ->getSelect()
        );
        die;
    }
}