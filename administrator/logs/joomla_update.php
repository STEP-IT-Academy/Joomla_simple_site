#
#<?php die('Forbidden.'); ?>
#Date: 2020-10-23 16:20:08 UTC
#Software: Joomla Platform 13.1.0 Stable [ Curiosity ] 24-Apr-2013 00:00 GMT

#Fields: datetime	priority clientip	category	message
2020-10-23T16:20:08+00:00	INFO 127.0.0.1	update	Update started by user Super User (727). Old version is 3.9.0.
2020-10-23T16:20:12+00:00	INFO 127.0.0.1	update	Downloading update file from https://s3-us-west-2.amazonaws.com/joomla-official-downloads/joomladownloads/joomla3/Joomla_3.9.22-Stable-Update_Package.zip?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAIZ6S3Q3YQHG57ZRA%2F20201023%2Fus-west-2%2Fs3%2Faws4_request&X-Amz-Date=20201023T161959Z&X-Amz-Expires=60&X-Amz-SignedHeaders=host&X-Amz-Signature=cea0c5a4196a1138a7167e48db99c6148125f606eb7bd5a6874ee5431cc72cc3.
2020-10-23T16:20:41+00:00	INFO 127.0.0.1	update	File Joomla_3.9.22-Stable-Update_Package.zip downloaded.
2020-10-23T16:20:41+00:00	INFO 127.0.0.1	update	Starting installation of new version.
2020-10-23T16:23:31+00:00	INFO 127.0.0.1	update	Finalising installation.
2020-10-23T16:23:31+00:00	INFO 127.0.0.1	update	Ran query from file 3.9.3-2019-01-12. Query text: UPDATE `#__extensions`  SET `params` = REPLACE(`params`, '"com_categories",', '".
2020-10-23T16:23:31+00:00	INFO 127.0.0.1	update	Ran query from file 3.9.3-2019-01-12. Query text: INSERT INTO `#__action_logs_extensions` (`extension`) VALUES ('com_checkin');.
2020-10-23T16:23:31+00:00	INFO 127.0.0.1	update	Ran query from file 3.9.3-2019-02-07. Query text: INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description.
2020-10-23T16:23:31+00:00	INFO 127.0.0.1	update	Ran query from file 3.9.7-2019-04-23. Query text: ALTER TABLE `#__session` ADD INDEX `client_id_guest` (`client_id`, `guest`);.
2020-10-23T16:23:31+00:00	INFO 127.0.0.1	update	Ran query from file 3.9.7-2019-04-26. Query text: UPDATE `#__content_types` SET `content_history_options` = REPLACE(`content_histo.
2020-10-23T16:23:31+00:00	INFO 127.0.0.1	update	Ran query from file 3.9.8-2019-06-11. Query text: UPDATE #__users SET params = REPLACE(params, '",,"', '","');.
2020-10-23T16:23:31+00:00	INFO 127.0.0.1	update	Ran query from file 3.9.8-2019-06-15. Query text: ALTER TABLE `#__template_styles` DROP INDEX `idx_home`;.
2020-10-23T16:23:31+00:00	INFO 127.0.0.1	update	Ran query from file 3.9.8-2019-06-15. Query text: ALTER TABLE `#__template_styles` ADD INDEX `idx_client_id` (`client_id`);.
2020-10-23T16:23:32+00:00	INFO 127.0.0.1	update	Ran query from file 3.9.8-2019-06-15. Query text: ALTER TABLE `#__template_styles` ADD INDEX `idx_client_id_home` (`client_id`, `h.
2020-10-23T16:23:32+00:00	INFO 127.0.0.1	update	Ran query from file 3.9.10-2019-07-09. Query text: ALTER TABLE `#__template_styles` MODIFY `home` char(7) NOT NULL DEFAULT '0';.
2020-10-23T16:23:32+00:00	INFO 127.0.0.1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__categories` MODIFY `description` mediumtext;.
2020-10-23T16:23:32+00:00	INFO 127.0.0.1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__categories` MODIFY `params` text;.
2020-10-23T16:23:32+00:00	INFO 127.0.0.1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__fields` MODIFY `default_value` text;.
2020-10-23T16:23:32+00:00	INFO 127.0.0.1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__fields_values` MODIFY `value` text;.
2020-10-23T16:23:32+00:00	INFO 127.0.0.1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__finder_links` MODIFY `description` text;.
2020-10-23T16:23:32+00:00	INFO 127.0.0.1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__modules` MODIFY `content` text;.
2020-10-23T16:23:32+00:00	INFO 127.0.0.1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_body` mediumtext;.
2020-10-23T16:23:33+00:00	INFO 127.0.0.1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_params` text;.
2020-10-23T16:23:33+00:00	INFO 127.0.0.1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_images` text;.
2020-10-23T16:23:33+00:00	INFO 127.0.0.1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_urls` text;.
2020-10-23T16:23:33+00:00	INFO 127.0.0.1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_metakey` text;.
2020-10-23T16:23:33+00:00	INFO 127.0.0.1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_metadesc` text;.
2020-10-23T16:23:33+00:00	INFO 127.0.0.1	update	Ran query from file 3.9.16-2020-03-04. Query text: ALTER TABLE `#__users` DROP INDEX `username`;.
2020-10-23T16:23:33+00:00	INFO 127.0.0.1	update	Ran query from file 3.9.16-2020-03-04. Query text: ALTER TABLE `#__users` ADD UNIQUE INDEX `idx_username` (`username`);.
2020-10-23T16:23:33+00:00	INFO 127.0.0.1	update	Ran query from file 3.9.19-2020-05-16. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_title` varchar(400) NOT NULL DEFAULT '.
2020-10-23T16:23:33+00:00	INFO 127.0.0.1	update	Ran query from file 3.9.19-2020-06-01. Query text: INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description.
2020-10-23T16:23:33+00:00	INFO 127.0.0.1	update	Ran query from file 3.9.21-2020-08-02. Query text: INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description.
2020-10-23T16:23:33+00:00	INFO 127.0.0.1	update	Ran query from file 3.9.22-2020-09-16. Query text: INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description.
2020-10-23T16:23:33+00:00	INFO 127.0.0.1	update	Deleting removed files and folders.
2020-10-23T16:23:35+00:00	INFO 127.0.0.1	update	Cleaning up after installation.
2020-10-23T16:23:36+00:00	INFO 127.0.0.1	update	Update to version 3.9.22 is complete.
