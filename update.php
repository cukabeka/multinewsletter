<?php
$sql = rex_sql::factory();

// Datenbankengine auf Redaxo Standard umstellen
$sql->setQuery('ALTER TABLE  ' . rex::getTablePrefix() . '375_archive ENGINE = INNODB;');
$sql->setQuery('ALTER TABLE  ' . rex::getTablePrefix() . '375_group ENGINE = INNODB;');
$sql->setQuery('ALTER TABLE  ' . rex::getTablePrefix() . '375_user ENGINE = INNODB;');


rex_sql_table::get(rex::getTable('375_group'))->ensureColumn(new \rex_sql_column('mailchimp_list_id', 'varchar(100)', true, null))->alter();
rex_sql_table::get(rex::getTable('375_user'))->ensureColumn(new \rex_sql_column('mailchimp_id', 'varchar(100)', true, null))->alter();
rex_sql_table::get(rex::getTable('375_archive'))->ensureColumn(new \rex_sql_column('attachments', 'text', true, null))->alter();
rex_sql_table::get(rex::getTable('375_archive'))->ensureColumn(new \rex_sql_column('article_id', 'int'))->alter();

// CHANGE primary keys to `id`
if (rex_sql_table::get(rex::getTable('375_user'))->hasColumn('user_id')) {
    $sql->setQuery('ALTER TABLE  ' . rex::getTablePrefix() . '375_user CHANGE `user_id` `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT;');
}
if (rex_sql_table::get(rex::getTable('375_group'))->hasColumn('group_id')) {
    $sql->setQuery('ALTER TABLE  ' . rex::getTablePrefix() . '375_group CHANGE `group_id` `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT;');
}
if (rex_sql_table::get(rex::getTable('375_archive'))->hasColumn('archive_id')) {
    $sql->setQuery('ALTER TABLE  ' . rex::getTablePrefix() . '375_archive CHANGE `archive_id` `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT;');
}

// change date format
if (rex_sql_table::get(rex::getTable('375_user'))->getColumn('createdate')->getType() != 'datetime') {
    $sql->setQuery('ALTER TABLE `' . rex::getTablePrefix() . '375_user` ADD `_createdate` DATETIME NULL DEFAULT NULL AFTER `createdate`;');
    $sql->setQuery('UPDATE `' . rex::getTablePrefix() . '375_user` SET _createdate = DATE_FORMAT(FROM_UNIXTIME(`createdate`), "%Y-%m-%d %H:%i:%s");');
    $sql->setQuery('ALTER TABLE `' . rex::getTablePrefix() . '375_user` DROP `createdate`;');
    $sql->setQuery('ALTER TABLE `' . rex::getTablePrefix() . '375_user` CHANGE `_createdate` `createdate` DATETIME NULL DEFAULT NULL');

    $sql->setQuery('ALTER TABLE `' . rex::getTablePrefix() . '375_user` ADD `_updatedate` DATETIME NULL DEFAULT NULL AFTER `updatedate`;');
    $sql->setQuery('UPDATE `' . rex::getTablePrefix() . '375_user` SET _updatedate = DATE_FORMAT(FROM_UNIXTIME(`updatedate`), "%Y-%m-%d %H:%i:%s");');
    $sql->setQuery('ALTER TABLE `' . rex::getTablePrefix() . '375_user` DROP `updatedate`;');
    $sql->setQuery('ALTER TABLE `' . rex::getTablePrefix() . '375_user` CHANGE `_updatedate` `updatedate` DATETIME NULL DEFAULT NULL');

    $sql->setQuery('ALTER TABLE `' . rex::getTablePrefix() . '375_user` ADD `_activationdate` DATETIME NULL DEFAULT NULL AFTER `activationdate`;');
    $sql->setQuery('UPDATE `' . rex::getTablePrefix() . '375_user` SET _activationdate = DATE_FORMAT(FROM_UNIXTIME(`activationdate`), "%Y-%m-%d %H:%i:%s");');
    $sql->setQuery('ALTER TABLE `' . rex::getTablePrefix() . '375_user` DROP `activationdate`;');
    $sql->setQuery('ALTER TABLE `' . rex::getTablePrefix() . '375_user` CHANGE `_activationdate` `activationdate` DATETIME NULL DEFAULT NULL');

    $sql->setQuery('ALTER TABLE `' . rex::getTablePrefix() . '375_group` ADD `_createdate` DATETIME NULL DEFAULT NULL AFTER `createdate`;');
    $sql->setQuery('UPDATE `' . rex::getTablePrefix() . '375_group` SET _createdate = DATE_FORMAT(FROM_UNIXTIME(`createdate`), "%Y-%m-%d %H:%i:%s");');
    $sql->setQuery('ALTER TABLE `' . rex::getTablePrefix() . '375_group` DROP `createdate`;');
    $sql->setQuery('ALTER TABLE `' . rex::getTablePrefix() . '375_group` CHANGE `_createdate` `createdate` DATETIME NULL DEFAULT NULL');

    $sql->setQuery('ALTER TABLE `' . rex::getTablePrefix() . '375_group` ADD `_updatedate` DATETIME NULL DEFAULT NULL AFTER `updatedate`;');
    $sql->setQuery('UPDATE `' . rex::getTablePrefix() . '375_group` SET _updatedate = DATE_FORMAT(FROM_UNIXTIME(`updatedate`), "%Y-%m-%d %H:%i:%s");');
    $sql->setQuery('ALTER TABLE `' . rex::getTablePrefix() . '375_group` DROP `updatedate`;');
    $sql->setQuery('ALTER TABLE `' . rex::getTablePrefix() . '375_group` CHANGE `_updatedate` `updatedate` DATETIME NULL DEFAULT NULL');

    $sql->setQuery('ALTER TABLE `' . rex::getTablePrefix() . '375_archive` DROP INDEX `setupdate`;');

    $sql->setQuery('ALTER TABLE `' . rex::getTablePrefix() . '375_archive` ADD `_setupdate` DATETIME NULL DEFAULT NULL AFTER `setupdate`;');
    $sql->setQuery('UPDATE `' . rex::getTablePrefix() . '375_archive` SET _setupdate = DATE_FORMAT(FROM_UNIXTIME(`setupdate`), "%Y-%m-%d %H:%i:%s");');
    $sql->setQuery('ALTER TABLE `' . rex::getTablePrefix() . '375_archive` DROP `setupdate`;');
    $sql->setQuery('ALTER TABLE `' . rex::getTablePrefix() . '375_archive` CHANGE `_setupdate` `setupdate` DATETIME NULL DEFAULT NULL');

    $sql->setQuery('ALTER TABLE `' . rex::getTablePrefix() . '375_archive` ADD `_sentdate` DATETIME NULL DEFAULT NULL AFTER `sentdate`;');
    $sql->setQuery('UPDATE `' . rex::getTablePrefix() . '375_archive` SET _sentdate = DATE_FORMAT(FROM_UNIXTIME(`sentdate`), "%Y-%m-%d %H:%i:%s");');
    $sql->setQuery('ALTER TABLE `' . rex::getTablePrefix() . '375_archive` DROP `sentdate`;');
    $sql->setQuery('ALTER TABLE `' . rex::getTablePrefix() . '375_archive` CHANGE `_sentdate` `sentdate` DATETIME NULL DEFAULT NULL');

    $sql->setQuery('ALTER TABLE `' . rex::getTablePrefix() . '375_archive` ADD UNIQUE(`setupdate`, `clang_id`);');
}

// Update modules
if(class_exists(D2UModuleManager) && class_exists(D2UMultiNewsletterModules)) {
	$d2u_module_manager = new D2UModuleManager(D2UMultiNewsletterModules::getD2UMultiNewsletterModules(), "modules/", "multinewsletter");
	$d2u_module_manager->autoupdate();
}

// remove default lang setting
if (!$this->hasConfig()) {
	$this->removeConfig('default_lang');
}