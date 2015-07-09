<?php
/**
 * @author <de.nguyen@bluecomgroup.com>
 * @date 09/07/2015
 */
$installer = $this;

$installer->addEntityType(
    'complexworld_eavblogpost',
    array(
        'entity_model' => 'complexworld/eavblogpost',
        'attribute_model' => '',
        'table' => 'complexworld/eavblogpost',
        'increment_model' => '',
        'increment_per_store' => '0'
    )
);
$installer->createEntityTables($this->getTable('complexworld/eavblogpost'));
$installer->installEntities();
