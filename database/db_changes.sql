ALTER TABLE `messages` ADD `grp_member_id` INT(11) NULL DEFAULT '0' AFTER `body`;
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_group_messages`(IN `group_idx` INT)
BEGIN
SELECT * FROM `messages` WHERE `type`='group' AND `sent_to_id`=`group_idx`;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_user_info_by_id`(IN `idx` INT(11))
BEGIN
SELECT * FROM `users` WHERE `id`=`idx`;
END$$
DELIMITER ;
