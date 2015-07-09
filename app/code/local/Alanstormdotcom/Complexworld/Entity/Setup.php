<?php
/**
 * @author <de.nguyen@bluecomgroup.com>
 * @date 09/07/2015
 */
class Alanstormdotcom_Complexworld_Entity_Setup extends Mage_Eav_Model_Entity_Setup
{
    public function getDefaultEntities()
    {
        return array(
            'complexworld_eavblogpost' => array(
                'entity_model'    => 'complexworld/eavblogpost',
                'attribute_model' => '',
                'table'           => 'complexworld/eavblogpost',
                'attributes'      => array(
                    'title' => array(
                        //the EAV attribute type, NOT a mysql varchar
                        'type'      => 'varchar',
                        'backend'   => '',
                        'frontend'  => '',
                        'label'     => 'Title',
                        'input'     => 'text',
                        'class'     => '',
                        'source'    => '',
                        'global'    => 0,
                        'visible'   => true,
                        'required'  => true,
                        'user_defined' => true,
                        'default'   => '',
                        'searchable'=> false,
                        'filterable'=> false,
                        'comparable'=> false,
                        'visible_on_front' => false,
                        'unique' => false
                    )
                )
            )
        );
    }
}