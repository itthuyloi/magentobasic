<?php
/**
 * @author <de.nguyen@bluecomgroup.com>
 * @date 10/07/2015
 */
class ECommerce_Blog_Entity_Setup extends Mage_Eav_Model_Entity_Setup
{
    public function getDefaultEntities()
    {
        return array(
            'blog_blogpost' => array(
                'entity_model' => 'blog/blogpost',
                'attribute_model' => '',
                'table' => 'blog/blogpost',
                'attributes' => array(
                    'title' => array(
                        'type' => 'varchar',
                        'backend' => '',
                        'frontend' => '',
                        'label' => 'Title',
                        'input' => 'text',
                        'class' => '',
                        'source' => '',
                        'global' => 0,
                        'visible' => true,
                        'required' => true,
                        'user_defined' => true,
                        'default' => '',
                        'searchable' => true,
                        'filterable' => false,
                        'comparable' => false,
                        'visible_on_front' => true,
                        'unique' => false
                    ),
                    'description' => array(
                        'type' => 'text',
                        'backend' => '',
                        'frontend' => '',
                        'label' => 'Description',
                        'input' => 'textarea',
                        'class' => '',
                        'source' => '',
                        'global' => 0,
                        'visible' => true,
                        'required' => true,
                        'user_defined' => true,
                        'default' => '',
                        'searchable' => true,
                        'filterable' => false,
                        'comparable' => false,
                        'visible_on_front' => true,
                        'unique' => false
                    )
                )
            )
        );
    }
}
