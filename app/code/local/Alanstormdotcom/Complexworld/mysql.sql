Connect	root@localhost on magento_1_9
50 Query	SET SQL_MODE=''
50 Query	SET NAMES utf8
50 Query	SHOW TABLE STATUS LIKE 'core_resource'
50 Query	SELECT `core_resource`.* FROM `core_resource`
50 Query	SELECT `index_process`.`indexer_code` FROM `index_process`
50 Query	SELECT `core_website`.`website_id`, `core_website`.`code`, `core_website`.`name` FROM `core_website`
50 Query	SELECT `core_store`.`store_id`, `core_store`.`code`, `core_store`.`name`, `core_store`.`website_id` FROM `core_store` ORDER BY `sort_order` ASC
50 Query	SELECT `core_config_data`.`scope`, `core_config_data`.`scope_id`, `core_config_data`.`path`, `core_config_data`.`value` FROM `core_config_data`
50 Query	SELECT `main_table`.* FROM `core_store` AS `main_table` ORDER BY CASE WHEN main_table.store_id = 0 THEN 0 ELSE 1 END ASC, main_table.sort_order ASC, main_table.name ASC
50 Query	SELECT `main_table`.* FROM `core_website` AS `main_table` ORDER BY main_table.sort_order ASC, main_table.name ASC
50 Query	SELECT `main_table`.* FROM `core_store_group` AS `main_table` ORDER BY main_table.name ASC
50 Query	SELECT `core_url_rewrite`.* FROM `core_url_rewrite` WHERE (request_path IN ('complexworld/index/populateEntries', 'complexworld/index/populateEntries/')) AND (store_id IN(0, 1))
50 Query	SHOW TABLE STATUS LIKE 'core_session'
50 Query	SELECT `core_session`.`session_data` FROM `core_session` WHERE (session_id = 'mvct0a80l2jou9emovce5ojmr0') AND (session_expires > '1436440996')
50 Query	SELECT `main_table`.* FROM `design_vi mchange` AS `main_table` WHERE (store_id = '1') AND (date_from <= '2015-07-09 11:23:16' or date_from IS NULL) AND (date_to >= '2015-07-09 11:23:16' or date_to IS NULL)
50 Query	SELECT `core_translate`.`string`, `core_translate`.`translate` FROM `core_translate` WHERE (store_id IN (0 , '1')) AND (locale = 'en_US') ORDER BY `store_id` ASC
50 Query	SELECT `eav_entity_type`.* FROM `eav_entity_type` WHERE (`eav_entity_type`.`entity_type_code`='complexworld_eavblogpost')
50 Query	START TRANSACTION
50 Query	SELECT `main_table`.* FROM `eav_attribute` AS `main_table` WHERE (main_table.entity_type_id = '16')
50 Query	INSERT INTO `eavblog_posts` (`entity_type_id`, `created_at`, `updated_at`) VALUES ('16', '2015-07-09 11:23:16', '2015-07-09 11:23:16')
50 Query	INSERT INTO `eavblog_posts_varchar` (`entity_type_id`,`entity_id`,`attribute_id`,`value`) VALUES ('16', '12', '149', 'This is a test 11') ON DUPLICATE KEY UPDATE `value` = VALUES(`value`)
50 Query	commit
50 Query	START TRANSACTION
50 Query	INSERT INTO `eavblog_posts` (`entity_type_id`, `created_at`, `updated_at`) VALUES ('16', '2015-07-09 11:23:16', '2015-07-09 11:23:16')
50 Query	INSERT INTO `eavblog_posts_varchar` (`entity_type_id`,`entity_id`,`attribute_id`,`value`) VALUES ('16', '13', '149', 'This is a test 12') ON DUPLICATE KEY UPDATE `value` = VALUES(`value`)
50 Query	commit
50 Query	START TRANSACTION
50 Query	INSERT INTO `eavblog_posts` (`entity_type_id`, `created_at`, `updated_at`) VALUES ('16', '2015-07-09 11:23:16', '2015-07-09 11:23:16')
50 Query	INSERT INTO `eavblog_posts_varchar` (`entity_type_id`,`entity_id`,`attribute_id`,`value`) VALUES ('16', '14', '149', 'This is a test 13') ON DUPLICATE KEY UPDATE `value` = VALUES(`value`)
50 Query	commit
50 Query	START TRANSACTION
50 Query	INSERT INTO `eavblog_posts` (`entity_type_id`, `created_at`, `updated_at`) VALUES ('16', '2015-07-09 11:23:16', '2015-07-09 11:23:16')
50 Query	INSERT INTO `eavblog_posts_varchar` (`entity_type_id`,`entity_id`,`attribute_id`,`value`) VALUES ('16', '15', '149', 'This is a test 14') ON DUPLICATE KEY UPDATE `value` = VALUES(`value`)
50 Query	commit
50 Query	START TRANSACTION
50 Query	INSERT INTO `eavblog_posts` (`entity_type_id`, `created_at`, `updated_at`) VALUES ('16', '2015-07-09 11:23:16', '2015-07-09 11:23:16')
50 Query	INSERT INTO `eavblog_posts_varchar` (`entity_type_id`,`entity_id`,`attribute_id`,`value`) VALUES ('16', '16', '149', 'This is a test 15') ON DUPLICATE KEY UPDATE `value` = VALUES(`value`)
50 Query	commit
50 Query	START TRANSACTION
50 Query	INSERT INTO `eavblog_posts` (`entity_type_id`, `created_at`, `updated_at`) VALUES ('16', '2015-07-09 11:23:16', '2015-07-09 11:23:16')
50 Query	INSERT INTO `eavblog_posts_varchar` (`entity_type_id`,`entity_id`,`attribute_id`,`value`) VALUES ('16', '17', '149', 'This is a test 16') ON DUPLICATE KEY UPDATE `value` = VALUES(`value`)
50 Query	commit
50 Query	START TRANSACTION
50 Query	INSERT INTO `eavblog_posts` (`entity_type_id`, `created_at`, `updated_at`) VALUES ('16', '2015-07-09 11:23:16', '2015-07-09 11:23:16')
50 Query	INSERT INTO `eavblog_posts_varchar` (`entity_type_id`,`entity_id`,`attribute_id`,`value`) VALUES ('16', '18', '149', 'This is a test 17') ON DUPLICATE KEY UPDATE `value` = VALUES(`value`)
50 Query	commit
50 Query	START TRANSACTION
50 Query	INSERT INTO `eavblog_posts` (`entity_type_id`, `created_at`, `updated_at`) VALUES ('16', '2015-07-09 11:23:16', '2015-07-09 11:23:16')
50 Query	INSERT INTO `eavblog_posts_varchar` (`entity_type_id`,`entity_id`,`attribute_id`,`value`) VALUES ('16', '19', '149', 'This is a test 18') ON DUPLICATE KEY UPDATE `value` = VALUES(`value`)
50 Query	commit
50 Query	START TRANSACTION
50 Query	INSERT INTO `eavblog_posts` (`entity_type_id`, `created_at`, `updated_at`) VALUES ('16', '2015-07-09 11:23:16', '2015-07-09 11:23:16')
50 Query	INSERT INTO `eavblog_posts_varchar` (`entity_type_id`,`entity_id`,`attribute_id`,`value`) VALUES ('16', '20', '149', 'This is a test 19') ON DUPLICATE KEY UPDATE `value` = VALUES(`value`)
50 Query	commit
50 Query	START TRANSACTION
50 Query	INSERT INTO `eavblog_posts` (`entity_type_id`, `created_at`, `updated_at`) VALUES ('16', '2015-07-09 11:23:16', '2015-07-09 11:23:16')
50 Query	INSERT INTO `eavblog_posts_varchar` (`entity_type_id`,`entity_id`,`attribute_id`,`value`) VALUES ('16', '21', '149', 'This is a test 20') ON DUPLICATE KEY UPDATE `value` = VALUES(`value`)
50 Query	commit
50 Query	START TRANSACTION
50 Query	INSERT INTO `log_url_info` (`url`, `referer`) VALUES ('http://192.168.0.196/magento/complexworld/index/populateEntries', NULL)
50 Query	UPDATE `log_visitor` SET `session_id` = 'mvct0a80l2jou9emovce5ojmr0', `first_visit_at` = '2015-07-09 09:27:38', `last_visit_at` = '2015-07-09 11:23:16', `last_url_id` = '187', `store_id` = '1' WHERE (visitor_id='28')
50 Query	INSERT INTO `log_url` (`url_id`, `visitor_id`, `visit_time`) VALUES ('187', '28', '2015-07-09 11:23:16')
50 Query	commit
50 Query	SELECT `core_session`.* FROM `core_session` WHERE (session_id = 'mvct0a80l2jou9emovce5ojmr0')
50 Query	UPDATE `core_session` SET `session_expires` = '1436444596', `session_data` = 'core|a:5:{s:23:\"_session_validator_data\";a:4:{s:11:\"remote_addr\";s:13:\"192.168.0.196\";s:8:\"http_via\";s:0:\"\";s:20:\"http_x_forwarded_for\";s:0:\"\";s:15:\"http_user_agent\";s:105:\"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.132 Safari/537.36\";}s:8:\"messages\";O:34:\"Mage_Core_Model_Message_Collection\":2:{s:12:\"\0*\0_messages\";a:0:{}s:20:\"\0*\0_lastAddedMessage\";N;}s:15:\"just_voted_poll\";b:0;s:12:\"visitor_data\";a:16:{s:0:\"\";N;s:11:\"server_addr\";i:3232235716;s:11:\"remote_addr\";i:3232235716;s:11:\"http_secure\";b:0;s:9:\"http_host\";s:13:\"192.168.0.196\";s:15:\"http_user_agent\";s:105:\"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.132 Safari/537.36\";s:20:\"http_accept_language\";s:14:\"en-US,en;q=0.8\";s:19:\"http_accept_charset\";s:0:\"\";s:11:\"request_uri\";s:43:\"/magento/complexworld/index/populateEntries\";s:10:\"session_id\";s:26:\"mvct0a80l2jou9emovce5ojmr0\";s:12:\"http_referer\";s:0:\"\";s:14:\"first_visit_at\";s:19:\"2015-07-09 09:27:38\";s:14:\"is_new_visitor\";b:0;s:13:\"last_visit_at\";s:19:\"2015-07-09 11:23:16\";s:10:\"visitor_id\";s:2:\"28\";s:11:\"last_url_id\";s:3:\"187\";}s:8:\"last_url\";s:74:\"http://192.168.0.196/magento/index.php/complexworld/index/populateEntries/\";}customer_base|a:3:{s:23:\"_session_validator_data\";a:4:{s:11:\"remote_addr\";s:13:\"192.168.0.196\";s:8:\"http_via\";s:0:\"\";s:20:\"http_x_forwarded_for\";s:0:\"\";s:15:\"http_user_agent\";s:105:\"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.132 Safari/537.36\";}s:8:\"messages\";O:34:\"Mage_Core_Model_Message_Collection\":2:{s:12:\"\0*\0_messages\";a:0:{}s:20:\"\0*\0_lastAddedMessage\";N;}s:19:\"wishlist_item_count\";i:0;}checkout|a:2:{s:23:\"_session_validator_data\";a:4:{s:11:\"remote_addr\";s:13:\"192.168.0.196\";s:8:\"http_via\";s:0:\"\";s:20:\"http_x_forwarded_for\";s:0:\"\";s:15:\"http_user_agent\";s:105:\"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.132 Safari/537.36\";}s:8:\"messages\";O:34:\"Mage_Core_Model_Message_Collection\":2:{s:12:\"\0*\0_messages\";a:0:{}s:20:\"\0*\0_lastAddedMessage\";N;}}catalog|a:3:{s:23:\"_session_validator_data\";a:4:{s:11:\"remote_addr\";s:13:\"192.168.0.196\";s:8:\"http_via\";s:0:\"\";s:20:\"http_x_forwarded_for\";s:0:\"\";s:15:\"http_user_agent\";s:105:\"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.132 Safari/537.36\";}s:8:\"messages\";O:34:\"Mage_Core_Model_Message_Collection\":2:{s:12:\"\0*\0_messages\";a:0:{}s:20:\"\0*\0_lastAddedMessage\";N;}s:27:\"catalog_compare_items_count\";i:0;}reports|a:3:{s:23:\"_session_validator_data\";a:4:{s:11:\"remote_addr\";s:13:\"192.168.0.196\";s:8:\"http_via\";s:0:\"\";s:20:\"http_x_forwarded_for\";s:0:\"\";s:15:\"http_user_agent\";s:105:\"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.132 Safari/537.36\";}s:28:\"product_index_compared_count\";i:0;s:26:\"product_index_viewed_count\";i:0;}' WHERE (session_id='mvct0a80l2jou9emovce5ojmr0')
50 Quit