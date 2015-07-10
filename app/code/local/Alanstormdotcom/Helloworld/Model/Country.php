<?php
/**
 * @author <de.nguyen@bluecomgroup.com>
 * @date 10/07/2015
 */
class Alanstormdotcom_Helloworld_Model_Country
{
    public function toOptionArray()
    {
        return array(
            array(
                'value' => 'vi',
                'label' => Mage::helper('helloworld')->__('Vietnam')
            ),
            array(
                'value' => 'en',
                'label' => Mage::helper('helloworld')->__('United State')
            )
        );
    }
}