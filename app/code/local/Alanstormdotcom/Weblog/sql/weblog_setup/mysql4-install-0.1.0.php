<?php
/**
 * @author <de.nguyen@bluecomgroup.com>
 * @date 08/07/2015
 */
$installer = $this;
$installer->startSetup();
$installer->run("
    CREATE TABLE `{$installer->getTable('weblog/blogpost')}` (
        `blogpost_id` int(11) NOT NULL auto_increment,
        `title` text,
        `post` text,
        `post_date` DATETIME DEFAULT NULL,
        `time_stamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (`blogpost_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    INSERT INTO `{$installer->getTable('weblog/blogpost')}` VALUES (1, 'My new title', 'This is a blog post', '2009-07-01 00:00:00', '2009-07-01 00:00:00')
");
$installer->endSetup();
