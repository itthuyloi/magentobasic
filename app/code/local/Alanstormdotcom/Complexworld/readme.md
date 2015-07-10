//reset module

DROP TABLE  `eavblog_posts` ,
`eavblog_posts_char` ,
`eavblog_posts_datetime` ,
`eavblog_posts_decimal` ,
`eavblog_posts_int` ,
`eavblog_posts_text` ,
`eavblog_posts_varchar` ;

DROP TABLE `eavblog_posts`;


DELETE FROM  `magento_1_9`.`core_resource` WHERE (
CONVERT(  `code` USING utf8 ) LIKE  '%complexworld%' OR CONVERT(  `version` USING utf8 ) LIKE  '%complexworld%' OR CONVERT(  `data_version` USING utf8 ) LIKE  '%complexworld%'
)

DELETE FROM `magento_1_9`.`eav_entity_type` WHERE (CONVERT(`entity_type_id` USING utf8) LIKE '%complexworld%' OR CONVERT(`entity_type_code` USING utf8) LIKE '%complexworld%' OR CONVERT(`entity_model` USING utf8) LIKE '%complexworld%' OR CONVERT(`attribute_model` USING utf8) LIKE '%complexworld%' OR CONVERT(`entity_table` USING utf8) LIKE '%complexworld%' OR CONVERT(`value_table_prefix` USING utf8) LIKE '%complexworld%' OR CONVERT(`entity_id_field` USING utf8) LIKE '%complexworld%' OR CONVERT(`is_data_sharing` USING utf8) LIKE '%complexworld%' OR CONVERT(`data_sharing_key` USING utf8) LIKE '%complexworld%' OR CONVERT(`default_attribute_set_id` USING utf8) LIKE '%complexworld%' OR CONVERT(`increment_model` USING utf8) LIKE '%complexworld%' OR CONVERT(`increment_per_store` USING utf8) LIKE '%complexworld%' OR CONVERT(`increment_pad_length` USING utf8) LIKE '%complexworld%' OR CONVERT(`increment_pad_char` USING utf8) LIKE '%complexworld%' OR CONVERT(`additional_attribute_table` USING utf8) LIKE '%complexworld%' OR CONVERT(`entity_attribute_collection` USING utf8) LIKE '%complexworld%')


