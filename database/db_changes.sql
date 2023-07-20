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


DROP PROCEDURE `list_user`; 
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `list_user`() NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER BEGIN SELECT id,fname,lname,status,COALESCE(image,'') as image FROM `users` WHERE `is_deleted` = 0 AND `status` = 1 ORDER BY `users`.`id` DESC;
END$$
DELIMITER ;
