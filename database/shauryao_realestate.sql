-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 02:00 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shauryao_realestate`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_ammenities` (IN `namex` VARCHAR(255), IN `statusx` TINYINT)  NO SQL BEGIN
INSERT INTO `ammenities` (`name`,`status`) VALUES (`namex`,`statusx`);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `add_blog` (IN `titlex` VARCHAR(255), IN `slugx` VARCHAR(255), IN `descriptionx` BLOB, IN `imagex` VARCHAR(255), IN `statusx` TINYINT)   BEGIN
INSERT INTO `blog` (`title`,`slug`,`description`,`image`,`status`) VALUES (`titlex`,`slugx`,`descriptionx`,`imagex`,`statusx`);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `add_city` (IN `namex` VARCHAR(255), IN `imagex` VARCHAR(255), IN `statusx` TINYINT)  NO SQL BEGIN
INSERT INTO `city` (`name`,`image`,`status`) VALUES (`namex`,`imagex`,`statusx`);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `add_gallery` (IN `imagex` VARCHAR(255), IN `statusx` INT)   BEGIN
INSERT INTO `gallery` (`image`,`status`) VALUES (`imagex`,`statusx`);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `add_group` (IN `grp_namex` VARCHAR(255), IN `membersx` VARCHAR(255))   BEGIN
INSERT INTO `groups` (`grp_name`,`member_ids`) VALUES (`grp_namex`,`membersx`);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `add_msg` (IN `namex` VARCHAR(255), IN `contactx` VARCHAR(255), IN `emailx` VARCHAR(255), IN `messagex` TEXT, IN `property_idx` VARCHAR(255))   BEGIN
INSERT INTO `inquiry` (`name`,`contact`,`email`,`message`,`property_id`) VALUES (`namex`,`contactx`,`emailx`,`messagex`,`property_idx`);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `add_property` (IN `property_idx` VARCHAR(255), IN `namex` VARCHAR(255), IN `slugx` VARCHAR(255), IN `addressx` VARCHAR(255), IN `cityx` VARCHAR(255), IN `ammenitiesx` VARCHAR(255), IN `imagex` VARCHAR(255), IN `left_imagex` VARCHAR(255), IN `right_imagex` VARCHAR(255), IN `front_imagex` VARCHAR(255), IN `back_imagex` VARCHAR(255), IN `descriptionx` BLOB)  NO SQL BEGIN
INSERT INTO `property` (`property_id`,`name`,`slug`,`address`,`city`,`ammenities`,`image`,`left_image`,`right_image`,`front_image`,`back_image`,`description`) VALUES (`property_idx`,`namex`,`slugx`,`addressx`,`cityx`,`ammenitiesx`,`imagex`,`left_imagex`,`right_imagex`,`front_imagex`,`back_imagex`,`descriptionx`);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `add_slider` (IN `imagex` VARCHAR(255), IN `statusx` TINYINT)   BEGIN
INSERT INTO `slider` (`image`,`status`) VALUES (`imagex`,`statusx`);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `add_testimonial` (IN `fnamex` VARCHAR(255), IN `lnamex` VARCHAR(255), IN `designationx` VARCHAR(255), IN `descriptionx` TEXT, IN `imagex` VARCHAR(255), IN `statusx` TINYINT)  NO SQL BEGIN
INSERT INTO `testimonial` (`fname`,`lname`,`designation`,`description`,`image`,`status`) VALUES (`fnamex`,`lnamex`,`designationx`,`descriptionx`,`imagex`,`statusx`);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `add_user` (IN `fnamex` VARCHAR(255), IN `lnamex` VARCHAR(255), IN `emailx` VARCHAR(255), IN `contactx` VARCHAR(255), IN `addressx` VARCHAR(255), IN `imagex` VARCHAR(255), IN `passwordx` VARCHAR(255), IN `rolex` INT, IN `statusx` TINYINT)   BEGIN
INSERT INTO `users` (`fname`,`lname`,`email`,`contact`,`address`,`image`,`password`,`role`,`status`) VALUES (`fnamex`,`lnamex`,`emailx`,`contactx`,`addressx`,`imagex`,`passwordx`,`rolex`,`statusx`);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `add_user_comment` (IN `typex` VARCHAR(255), IN `sent_to_id` INT(11), IN `sender_id` INT(11), IN `body` VARCHAR(255))   BEGIN
INSERT INTO `messages`(`type`,`sent_to_id`,`sender_id`,`body`) VALUES (`typex`,`sent_to_id`,`sender_id`,`body`);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_ammenities` (IN `idd` INT, IN `is_deletedx` INT)  NO SQL BEGIN
UPDATE `ammenities` SET `is_deleted`  = 1 WHERE `id` = `idd`;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_blog` (IN `idd` INT, IN `is_deleted` INT)   BEGIN
UPDATE `blog` SET `is_deleted`  = 1 WHERE `id` = `idd`;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_city` (IN `idd` INT, IN `is_deleted` INT)  NO SQL BEGIN
UPDATE `city` SET `is_deleted`  = 1 WHERE `id` = `idd`;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_gallery` (IN `idd` INT, IN `is_deleted` INT)   BEGIN
UPDATE `gallery` SET `is_deleted`  = 1 WHERE `id` = `idd`;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_property` (IN `idd` INT, IN `is_deleted` INT)  NO SQL BEGIN
UPDATE `property` SET `is_deleted`  = 1 WHERE `id` = `idd`;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_slider` (IN `idd` INT, IN `is_deleted` INT)   BEGIN
UPDATE `slider` SET `is_deleted`  = 1 WHERE `id` = `idd`;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_testimonial` (IN `idd` INT, IN `is_deleted` TINYINT(1))  NO SQL BEGIN
UPDATE `testimonial` SET `is_deleted`  = 1 WHERE `id` = `idd`;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_user` (IN `idd` INT, IN `is_deleted` INT)   BEGIN
UPDATE `customer` SET `is_deleted`  = 1 WHERE `id` = `idd`;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `get_admin_messages` (IN `typex` VARCHAR(255), IN `sender_idx` INT(11), IN `sent_to_idx` INT(11))   BEGIN
SELECT * FROM `messages` WHERE `type`=`typex` AND `sender_id`=`sender_idx` AND `sent_to_id`=`sent_to_idx`;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `get_city_property` (IN `city_namex` VARCHAR(255))   BEGIN
SELECT `c`.`name` as `city_name`,`p`.`slug`,`p`.`property_id`,`p`.`status`,`p`.`name`,`p`.`address`,`p`.`city`,`p`.`created_at`,`p`.`image` from `property` as `p`
JOIN `city` as `c` on `c`.`id`=`p`.`city`
WHERE `c`.`name` = `city_namex` AND `p`.`status` = 1;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `get_group_messages` (IN `group_idx` INT)   BEGIN
SELECT * FROM `messages` WHERE `type`='group' AND `sent_to_id`=`group_idx`;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `get_property_details` (IN `slugx` VARCHAR(255))   BEGIN
SELECT `c`.`name` as `city_name`,`a`.`name` as `a_name`,`p`.`slug`,`p`.`property_id`,`p`.`id`,`p`.`name`,`p`.`address`,`p`.`city`,`p`.`created_at`,`p`.`image`,`p`.`ammenities`,`p`.`left_image`,`p`.`right_image`,`p`.`front_image`,`p`.`back_image`,`p`.`description` from `property` as `p`
JOIN `city` as `c` on `c`.`id`=`p`.`city`
JOIN `ammenities` as `a` on `a`.`id` = `p`.`ammenities` 
WHERE `p`.`slug` = `slugx`;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `get_user_info_by_id` (IN `idx` INT(11))   BEGIN
SELECT * FROM `users` WHERE `id`=`idx`;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `list_ammenities` ()  NO SQL BEGIN
SELECT id,name,status
FROM `ammenities` WHERE `is_deleted` = 0 ORDER BY `ammenities`.`id` DESC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `list_blog` ()   BEGIN
SELECT *
FROM `blog` WHERE `is_deleted` = 0 ORDER BY `blog`.`id` DESC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `list_city` ()  NO SQL BEGIN
SELECT id,name,COALESCE(image,'') as image,status
FROM `city` WHERE `is_deleted` = 0 ORDER BY `city`.`id` DESC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `list_city_home` ()   BEGIN
SELECT id,name,COALESCE(image,'') as image,status
FROM `city` WHERE `is_deleted` = 0 AND `status` = 1 ORDER BY `city`.`id` DESC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `list_gallery` ()   BEGIN
SELECT id,COALESCE(image,'') as image,status
FROM `gallery` WHERE `is_deleted` = 0 ORDER BY `gallery`.`id` DESC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `list_group` ()   BEGIN
SELECT id,grp_name,status
FROM `groups` WHERE `is_deleted` = 0 ORDER BY `groups`.`id` DESC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `list_groups` ()   BEGIN
SELECT * FROM `groups` WHERE `is_deleted`=0 AND `status`=1;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `list_prop` ()   BEGIN
SELECT `c`.`name` as `city_name`,`p`.`slug`,`p`.`property_id`,`p`.`status`,`p`.`name`,`p`.`address`,`p`.`city`,`p`.`created_at`,`p`.`image` from `property` as `p`
JOIN `city` as `c` on `c`.`id`=`p`.`city`
WHERE `c`.`is_deleted` = 0 AND `c`.`status` = 1;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `list_properties` ()  NO SQL BEGIN
SELECT id,property_id,name,slug,address,COALESCE(image,'') as image,status,created_at
FROM `property` WHERE `is_deleted` = 0 ORDER BY `property`.`id` DESC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `list_properties_home` ()   BEGIN
SELECT id,property_id,name,slug,address,COALESCE(image,'') as image,status,created_at
FROM `property` WHERE `is_deleted` = 0 AND `status` = 1 ORDER BY `property`.`id` DESC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `list_slider` ()   BEGIN
SELECT id,COALESCE(image,'') as image,status
FROM `slider` WHERE `is_deleted` = 0 ORDER BY `slider`.`id` DESC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `list_slider_home` ()   BEGIN
SELECT id,COALESCE(image,'') as image,status
FROM `slider` WHERE `is_deleted` = 0 AND `status` = 1 ORDER BY `slider`.`id` DESC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `list_testimonial` ()  NO SQL BEGIN
SELECT id,fname,lname,COALESCE(designation,'') as designation,description,COALESCE(image,'') as image,status
FROM `testimonial` WHERE `is_deleted` = 0 ORDER BY `testimonial`.`id` DESC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `list_testimonial_home` ()   BEGIN
SELECT id,fname,lname,COALESCE(designation,'') as designation,description,COALESCE(image,'') as image,status
FROM `testimonial` WHERE `is_deleted` = 0 AND `status` = 1 ORDER BY `testimonial`.`id` DESC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `list_user` ()   BEGIN
SELECT id,fname,lname,status,COALESCE(image,'') as image
FROM `users` WHERE `is_deleted` = 0 AND `status` = 1 ORDER BY `users`.`id` DESC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `list_users` ()   BEGIN
SELECT id,fname,lname,status,COALESCE(image,'') as image
FROM `users` WHERE `role` = 1 AND `is_deleted` = 0 ORDER BY `users`.`id` DESC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_ammenities` (IN `idd` INT, IN `namex` VARCHAR(255), IN `statusx` INT)  NO SQL BEGIN
UPDATE `ammenities` SET `name` = `namex`, `status`=`statusx`,`updated_at`=NOW()  WHERE `id` = `idd`;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_blog` (IN `idd` INT, IN `titlex` VARCHAR(255), IN `slugx` VARCHAR(255), IN `descriptionx` BLOB, IN `imagex` VARCHAR(255), IN `statusx` INT)   BEGIN
UPDATE `blog` SET `title` = `titlex`, `slug` = `slugx`,`description`=`descriptionx`,`image`=`imagex`,`status`=`statusx`,`updated_at`=NOW()  WHERE `id` = `idd`;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_city` (IN `idd` INT, IN `namex` VARCHAR(255), IN `imagex` VARCHAR(255), IN `statusx` TINYINT)  NO SQL BEGIN
UPDATE `city` SET `name` = `namex`, `image`=`imagex`,`status`=`statusx`,`updated_at`=NOW()  WHERE `id` = `idd`;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_gallery` (IN `idd` INT, IN `imagex` VARCHAR(255), IN `statusx` INT)   BEGIN
UPDATE `gallery` SET `image`=`imagex`,`status`=`statusx`,`updated_at`=NOW()  WHERE `id` = `idd`;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_property` (IN `idd` INT, IN `property_idx` VARCHAR(255), IN `namex` VARCHAR(255), IN `slugx` VARCHAR(255), IN `addressx` VARCHAR(255), IN `cityx` VARCHAR(255), IN `ammenitiesx` VARCHAR(255), IN `imagex` VARCHAR(255), IN `left_imagex` VARCHAR(255), IN `right_imagex` VARCHAR(255), IN `front_imagex` VARCHAR(255), IN `back_imagex` VARCHAR(255), IN `descriptionx` VARCHAR(255), IN `statusx` INT)  NO SQL BEGIN
UPDATE `property` SET `property_id`=`property_idx`,`name` = `namex`, `slug` = `slugx`,`address`=`addressx`,`city`=`cityx`,`ammenities`=`ammenitiesx`,`image`=`imagex`,`left_image`=`left_imagex`,`right_image`=`right_imagex`,`front_image`=`front_imagex`,`back_image`=`back_imagex`,`description`=`descriptionx`,`status`=`statusx`,`updated_at`=NOW()  WHERE `id` = `idd`;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_slider` (IN `idd` INT, IN `imagex` VARCHAR(255), IN `statusx` TINYINT)   BEGIN
UPDATE `slider` SET `image`=`imagex`,`status`=`statusx`,`updated_at`=NOW()  WHERE `id` = `idd`;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_testimonial` (IN `idd` INT, IN `fnamex` VARCHAR(255), IN `lnamex` VARCHAR(255), IN `designationx` VARCHAR(255), IN `descriptionx` TEXT, IN `imagex` VARCHAR(255), IN `statusx` TINYINT)  NO SQL BEGIN
UPDATE `testimonial` SET `fname` = `fnamex`, `lname` = `lnamex`,`designation`=`designationx`,`description`=`descriptionx`,`image`=`imagex`,`status`=`statusx`,`updated_at`=NOW()  WHERE `id` = `idd`;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_user` (IN `idd` INT, IN `fnamex` VARCHAR(255), IN `lnamex` VARCHAR(255), IN `emailx` VARCHAR(255), IN `contactx` VARCHAR(255), IN `addressx` TEXT, IN `imagex` VARCHAR(255), IN `statusx` TINYINT)   BEGIN
UPDATE `customer` SET `fname`=`fnamex`,`lname` = `lnamex`, `email` = `emailx`,`contact`=`contactx`,`address`=`addressx`,`image`=`imagex`,`status`=`statusx`,`updated_at`=NOW()  WHERE `id` = `idd`;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `view_ammenities` (IN `idd` INT)  NO SQL BEGIN
SELECT * FROM `ammenities` WHERE `id` = `idd`;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `view_blog` (IN `idd` INT)   BEGIN
SELECT * FROM `blog` WHERE `id` = `idd`;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `view_city` (IN `idd` INT)  NO SQL BEGIN
SELECT * FROM `city` WHERE `id` = `idd`;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `view_gallery` (IN `idd` INT)   BEGIN
SELECT * FROM `gallery` WHERE `id` = `idd`;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `view_property` (IN `idd` INT)  NO SQL BEGIN
SELECT * FROM `property` WHERE `id` = `idd`;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `view_slider` (IN `idd` INT)   BEGIN
SELECT * FROM `slider` WHERE `id` = `idd`;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `view_testimonial` (IN `idd` INT(11))  NO SQL BEGIN
SELECT * FROM `testimonial` WHERE `id` = `idd`;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `view_user` (IN `idd` INT)   BEGIN
SELECT * FROM `customer` WHERE `id` = `idd`;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ammenities`
--

CREATE TABLE `ammenities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ammenities`
--

INSERT INTO `ammenities` (`id`, `name`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'testz', 1, 1, '2023-07-10 22:16:05', '2023-07-10 22:46:05'),
(2, 'Thiong', 1, 1, '2023-07-10 22:46:23', '2023-07-10 22:46:27'),
(3, 'testing', 1, 1, '2023-07-11 19:50:55', '2023-07-11 19:50:55'),
(4, 'cccc', 1, 1, '2023-07-11 19:51:01', '2023-07-11 19:51:01'),
(5, 'Lawn', 1, 0, '2023-07-12 10:07:22', '2023-07-12 10:07:22'),
(6, 'Wifi', 1, 0, '2023-07-12 10:08:06', '2023-07-12 10:08:06'),
(7, 'Gym', 1, 0, '2023-07-12 10:08:19', '2023-07-12 10:08:19'),
(8, 'Parking Space', 1, 0, '2023-07-12 10:09:38', '2023-07-12 10:09:38'),
(9, 'Swimming Pool', 1, 0, '2023-07-12 10:09:51', '2023-07-12 10:09:51'),
(10, 'Children play area', 1, 0, '2023-07-12 10:10:11', '2023-07-12 10:10:11'),
(11, 'Open space', 1, 0, '2023-07-12 10:10:19', '2023-07-12 10:10:19'),
(12, 'Security', 1, 0, '2023-07-12 10:10:26', '2023-07-12 10:10:26');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` blob NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `slug`, `description`, `image`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'fdsdgddgg\'gdgdg dsgsd.ddgdg', 'fdsdgddgg-gdgdg-dsgsd-ddgdg', 0x3c703e64646764666720666468666462622062666766673c2f703e, '20230715112431.jpg', 1, 1, '2023-07-15 16:03:10', '2023-07-15 17:05:59'),
(2, 'Regain Your Garage: Simple Tricks for Getting Organized', 'Regain-Your-Garage--Simple-Tricks-for-Getting-Organized', 0x3c703e43757261626974757220616c6971756973206e6962687175616d616d657420696e746579207264756d2e207768656e20616e20756e6b6e6f776e207072696e74657220746f6f6b20612067616c6c6579206f66207479706520616e6420736372616d626c656420697420746f206d616b65206120747970652073706563696d656e2061726520626f6f6b20686173207375727669766564206e6f74206f6e6c792e3c6272202f3e0d0a3c6272202f3e0d0a54686520747269636b20697320746f206d616b6520697420616e206f70706f7274756e69747920666f72207468656d20746f20646566696e65207468656d73656c76657320616e6420746865697220696e746572657374732e20456e636f7572616765206b69647320746f206d616b6520612070696c65206f662026726471756f3b6261627920746f797326726471756f3b20746f20646f6e6174652c20616e642068617665207468656d2073657420617369646520616e7920746f79732074686174206e6f206c6f6e67657220696e746572657374207468656d2c207375636820617320616374696f6e20666967757265732066726f6d206120666f72676f7474656e2054562073686f772e2053657061726174696e6720746865736520746f79732077696c6c2068656c70207468656d206170707265636961746520686f77206d756368207468657926727371756f3b76652067726f776e20616e64207265646973636f7665722074686520746f79732074686579206c6f76652e3c2f703e, '20230715113749.jpg', 1, 0, '2023-07-15 17:07:49', '2023-07-15 17:07:49'),
(3, 'Private Contemporary Home Balancing Openness', 'Private-Contemporary-Home-Balancing-Openness', 0x3c703e446f6e262333393b74206d6973732074686973206368616e636520746f2073656375726520796f7572206675747572652120436f6e74616374207573206e6f7720616e64206578706c6f72652074686520706f73736962696c6974696573207468617420617761697420796f7520696e204e61677075722e20496e7665737420696e206120706c6f7420616e64206d616b6520796f757220647265616d7320636f6d652074727565213c2f703e, '20230715113825.jpg', 1, 0, '2023-07-15 17:08:25', '2023-07-15 17:08:25'),
(4, 'Learn to design mobile apps & websites.', 'Learn-to-design-mobile-apps---websites-', 0x3c703e546865206c6976696e6720726f6f6d20616e642064696e696e6720726f6f6d2068617665207661756c746564206365696c696e677320616e6420612062656175746966756c2066697265706c6163652e20596f752077696c6c206c6f7665207370656e64696e672074696d65206f6e20746865206465636b2074616b696e6720696e207468652062656175746966756c2076696577732e20496e20746865206b69746368656e2c20796f75262333393b6c6c2066696e6420737461696e6c65737320737465656c206170706c69616e63657320616e6420612074696c65206261636b73706c6173682c2061732077656c6c206173206120627265616b66617374206261722e3c2f703e, '20230715113926.jpg', 1, 0, '2023-07-15 17:09:26', '2023-07-15 17:09:26'),
(5, 'Build a UI project from beginning to end.', 'Build-a-UI-project-from-beginning-to-end-', 0x3c703e46726f6d20746865206f70656e20666c6f6f7220706c616e20746f20746865206162756e64616e6365206f66206c696768742066726f6d207468652077696e646f77732c207468697320686f6d65206973207065726665637420666f7220656e7465727461696e696e672e20546865206c6976696e6720726f6f6d20616e642064696e696e6720726f6f6d2068617665207661756c746564206365696c696e677320616e6420612062656175746966756c2066697265706c6163652e20596f752077696c6c206c6f7665207370656e64696e672074696d65206f6e20746865206465636b2074616b696e6720696e207468652062656175746966756c2076696577732e20496e20746865206b69746368656e2c20796f75262333393b6c6c2066696e6420737461696e6c65737320737465656c206170706c69616e63657320616e6420612074696c65206261636b73706c6173682c2061732077656c6c206173206120627265616b66617374206261722e3c2f703e, '20230715114046.jpg', 1, 0, '2023-07-15 17:10:46', '2023-07-15 17:10:46');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `image`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'test', '20230710125343.jpg', 1, 1, '2023-07-10 18:23:43', '2023-07-10 18:23:43'),
(2, 'testing', '20230710153502.jpg', 1, 1, '2023-07-10 19:00:47', '2023-07-10 21:05:02'),
(3, 'Wardha', '20230712043504.jpg', 1, 0, '2023-07-12 10:05:04', '2023-07-12 10:05:04'),
(4, 'Nagpur', '20230712043516.jpg', 1, 0, '2023-07-12 10:05:16', '2023-07-12 10:05:16'),
(5, 'Amravati', '20230712043529.jpg', 1, 0, '2023-07-12 10:05:29', '2023-07-12 10:05:29'),
(6, 'Yavatmal', '20230712043541.jpg', 1, 0, '2023-07-12 10:05:41', '2023-07-12 10:05:41'),
(7, 'test', '20230715114732.jpg', 0, 0, '2023-07-15 17:17:32', '2023-07-15 21:33:55');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, '20230715135405.jpg', 1, 0, '2023-07-15 19:07:32', '2023-07-15 19:24:05');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `grp_name` varchar(255) NOT NULL,
  `member_ids` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `grp_name`, `member_ids`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'property group', '3, 2, 5', 1, 0, '2023-07-15 15:19:11', '2023-07-15 15:19:11'),
(2, 'Group 1', '3, 2, 4', 1, 0, '2023-07-15 16:23:23', '2023-07-15 16:23:23'),
(3, 'new grp property', '6, 4, 3', 1, 0, '2023-07-17 18:10:09', '2023-07-17 18:10:09');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `property_id` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `name`, `contact`, `email`, `message`, `property_id`, `created_at`) VALUES
(1, 'Raginee shinde', '08806966500', 'ragini@123', 'test', '5', '2023-07-15 09:39:44');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'single' COMMENT 'single, group\r\n',
  `sender_id` bigint(20) NOT NULL,
  `sent_to_id` bigint(20) NOT NULL,
  `body` text NOT NULL,
  `grp_member_id` int(11) DEFAULT 0,
  `is_read` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `type`, `sender_id`, `sent_to_id`, `body`, `grp_member_id`, `is_read`, `created_at`, `updated_at`) VALUES
(1, 'single', 2, 5, 'hi robart', 0, 1, '2023-07-19 09:28:09', '2023-07-19 09:28:09'),
(2, 'single', 5, 2, 'hi joe', 0, 1, '2023-07-19 09:29:32', '2023-07-19 09:29:32'),
(3, 'group', 5, 1, 'hi', 0, 1, '2023-07-19 09:33:46', '2023-07-19 09:33:46'),
(4, 'group', 2, 1, 'hi group m,embers im joe', 0, 1, '2023-07-19 09:45:57', '2023-07-19 09:45:57'),
(5, 'group', 5, 1, 'hi im robart', 0, 1, '2023-07-19 09:46:22', '2023-07-19 09:46:22'),
(6, 'group', 6, 1, 'hi im james', 0, 1, '2023-07-19 09:48:45', '2023-07-19 09:48:45'),
(7, 'group', 5, 2, 'hi', 0, 1, '2023-07-19 09:50:33', '2023-07-19 09:50:33'),
(8, 'group', 5, 1, 'hi', 0, 1, '2023-07-19 10:06:50', '2023-07-19 10:06:50'),
(9, 'group', 5, 1, 'hi', 0, 1, '2023-07-19 10:07:15', '2023-07-19 10:07:15'),
(10, 'group', 2, 1, 'hi im joe', 0, 1, '2023-07-19 10:24:03', '2023-07-19 10:24:03'),
(11, 'single', 5, 1, 'hi asmin im robart', 0, 1, '2023-07-19 10:36:06', '2023-07-19 10:36:06'),
(12, 'group', 6, 1, 'hi im james', 0, 1, '2023-07-19 10:37:48', '2023-07-19 10:37:48'),
(13, 'group', 1, 1, 'hi im admin', 0, 1, '2023-07-19 10:39:35', '2023-07-19 10:39:35'),
(14, 'group', 5, 1, 'hi admin im robart', 0, 1, '2023-07-19 10:40:11', '2023-07-19 10:40:11'),
(15, 'group', 1, 1, 'yes robart', 0, 1, '2023-07-19 11:00:54', '2023-07-19 11:00:54'),
(16, 'group', 1, 1, 'All are you ready', 0, 1, '2023-07-19 11:12:14', '2023-07-19 11:12:14'),
(17, 'group', 5, 1, 'Yes', 0, 0, '2023-07-19 11:12:30', '2023-07-19 11:12:30'),
(18, 'group', 2, 1, 'Yes', 0, 0, '2023-07-19 11:12:51', '2023-07-19 11:12:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `property_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `ammenities` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `left_image` varchar(255) NOT NULL,
  `right_image` varchar(255) NOT NULL,
  `front_image` varchar(255) NOT NULL,
  `back_image` varchar(255) NOT NULL,
  `description` blob NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `property_id`, `name`, `slug`, `address`, `city`, `ammenities`, `image`, `left_image`, `right_image`, `front_image`, `back_image`, `description`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, '675615', 'Raginee shinde', 'Raginee-shinde', 'Raginee shinde', '1', '3, 1', '20230711182713.png', 'left20230711.jpg', 'right160053.jpg', 'front20230711160053.jpg', 'back20230711160053.jpg', 0x3c703e78787878787878787878783c2f703e, 1, 1, '2023-07-11 21:30:53', '2023-07-11 23:58:36'),
(2, '921271', 'testing property', 'testing-property', 'testing property', '1', '4, 3, 1', '20230711162523.jpg', 'left20230711.jpg', 'right162523.png', 'front20230711162523.jpg', 'back20230711162523.jpg', 0x3c703e6f6f6f6f6f6f6f6f6f6f6f6f6f3c2f703e, 1, 1, '2023-07-11 21:55:23', '2023-07-11 21:55:23'),
(3, '193129', 'property hydrebad', 'property-hydrebad', 'hydrebad', '1', '3', '20230711182851.jpg', '', '', '', '', 0x3c703e646664643c2f703e, 1, 1, '2023-07-11 23:58:51', '2023-07-12 00:01:53'),
(4, '285329', 'Besa road Property', 'Besa-road-Property', 'Lane no. 10. Near supermarket', '4', '11, 9, 7', '20230712044510.jpg', '', '', '', '', 0x3c703e5468697320332d62656420776974682061206c6f66742c20322d6261746820686f6d6520696e2074686520676174656420636f6d6d756e697479206f662054686520486964656f75742068617320697420616c6c2e2046726f6d20746865206f70656e20666c6f6f7220706c616e20746f20746865206162756e64616e6365206f66206c696768742066726f6d207468652077696e646f77732c207468697320686f6d65206973207065726665637420666f7220656e7465727461696e696e672e20546865206c6976696e6720726f6f6d20616e642064696e696e6720726f6f6d2068617665207661756c746564206365696c696e677320616e6420612062656175746966756c2066697265706c6163652e20596f752077696c6c206c6f7665207370656e64696e672074696d65206f6e20746865206465636b2074616b696e6720696e207468652062656175746966756c2076696577732e20496e20746865206b69746368656e2c20796f75262333393b6c6c2066696e6420737461696e6c65737320737465656c206170706c69616e63657320616e6420612074696c65206261636b73706c6173682c2061732077656c6c206173206120627265616b66617374206261722e3c2f703e, 1, 1, '2023-07-12 10:15:10', '2023-07-12 10:15:10'),
(5, '850846', 'Sawangi Appartment', 'Sawangi-Appartment', '4834 N 10th St, Sawangi, PA 19141', '3', '8, 7, 6', '20230712044828.jpg', 'left20230712.jpg', 'right044828.jpg', 'front20230712044828.jpg', '', 0x3c703e5468697320332d62656420776974682061206c6f66742c20322d6261746820686f6d6520696e2074686520676174656420636f6d6d756e697479206f662054686520486964656f75742068617320697420616c6c2e2046726f6d20746865206f70656e20666c6f6f7220706c616e20746f20746865206162756e64616e6365206f66206c696768742066726f6d207468652077696e646f77732c207468697320686f6d65206973207065726665637420666f7220656e7465727461696e696e672e20546865206c6976696e6720726f6f6d20616e642064696e696e6720726f6f6d2068617665207661756c746564206365696c696e677320616e6420612062656175746966756c2066697265706c6163652e20596f752077696c6c206c6f7665207370656e64696e672074696d65206f6e20746865206465636b2074616b696e6720696e207468652062656175746966756c2076696577732e20496e20746865206b69746368656e2c20796f75262333393b6c6c2066696e6420737461696e6c65737320737465656c206170706c69616e63657320616e6420612074696c65206261636b73706c6173682c2061732077656c6c206173206120627265616b66617374206261722e3c2f703e, 1, 0, '2023-07-12 10:18:28', '2023-07-12 10:18:28'),
(6, '717576', 'Somalwada Road Appartment', 'Somalwada-Road-Appartment', 'Building No. A2 flat no. 4 Main road somalwada', '4', '11, 10, 8', '20230712045550.jpg', 'left20230712.png', 'right045550.png', '', '', 0x3c703e5468697320332d62656420776974682061206c6f66742c20322d6261746820686f6d6520696e2074686520676174656420636f6d6d756e697479206f662054686520486964656f75742068617320697420616c6c2e2046726f6d20746865206f70656e20666c6f6f7220706c616e20746f20746865206162756e64616e6365206f66206c696768742066726f6d207468652077696e646f77732c207468697320686f6d65206973207065726665637420666f7220656e7465727461696e696e672e20546865206c6976696e6720726f6f6d20616e642064696e696e6720726f6f6d2068617665207661756c746564206365696c696e677320616e6420612062656175746966756c2066697265706c6163652e20596f752077696c6c206c6f7665207370656e64696e672074696d65206f6e20746865206465636b2074616b696e6720696e207468652062656175746966756c2076696577732e20496e20746865206b69746368656e2c20796f75262333393b6c6c2066696e6420737461696e6c65737320737465656c206170706c69616e63657320616e6420612074696c65206261636b73706c6173682c2061732077656c6c206173206120627265616b66617374206261722e3c2f703e, 1, 0, '2023-07-12 10:25:50', '2023-07-12 10:25:50'),
(7, '959818', 'test prop', 'test-prop', 'sdfghj fvgbhj xcvgbhnjk', '6', '12, 8', '20230717172544.jpg', '', '', '', '', 0x656668657773206677656e6473662077666e77656a73, 1, 0, '2023-07-17 22:55:44', '2023-07-17 22:55:44');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, '20230717181816.jpg', 1, 0, '2023-07-15 18:35:55', '2023-07-17 23:48:16'),
(2, '20230717181802.jpg', 1, 0, '2023-07-17 23:48:02', '2023-07-17 23:48:02');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `fname`, `lname`, `designation`, `description`, `image`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'testx', 'testing', 'developer', 'test developer', '20230709015854.jpg', 1, 0, '2023-07-08 21:47:48', '2023-07-10 19:40:45'),
(2, 'yyy', 'oooo', 'test', 'test', '20230716114203.jpg', 1, 0, '2023-07-11 12:23:05', '2023-07-16 17:12:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `fname`, `lname`, `email`, `contact`, `address`, `image`, `email_verified_at`, `password`, `role`, `remember_token`, `is_deleted`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', '', 'admin@gmail.com', '', '', '', NULL, '$2y$10$yFVl2ovaaBrur9/ngeyXleBd7SxGCcIUmb.6TgMQ8PM.AgQOyHenC', 0, NULL, 0, 1, NULL, NULL),
(2, '', 'Joe', 'doe', 'joe@gmail.com', '', '', '', NULL, '$2y$10$yFVl2ovaaBrur9/ngeyXleBd7SxGCcIUmb.6TgMQ8PM.AgQOyHenC', 1, NULL, 0, 1, NULL, NULL),
(3, '', 'test', 'testing', 'test@gmail.com', '', '', '', NULL, '$2y$10$yFVl2ovaaBrur9/ngeyXleBd7SxGCcIUmb.6TgMQ8PM.AgQOyHenC', 1, NULL, 0, 1, NULL, NULL),
(4, '', 'William', 'trump', 'william@gmail.com', '', '', '', NULL, '$2y$10$yFVl2ovaaBrur9/ngeyXleBd7SxGCcIUmb.6TgMQ8PM.AgQOyHenC', 1, NULL, 0, 1, NULL, NULL),
(5, '', 'robert', 'davise', 'robert@gmail.com', '', '', '', NULL, '$2y$10$yFVl2ovaaBrur9/ngeyXleBd7SxGCcIUmb.6TgMQ8PM.AgQOyHenC', 1, NULL, 0, 1, NULL, NULL),
(6, '', 'james', 'thomas', 'james@gmail.com', '346778213', 'udh ewf ewhdj ewjwe cnd sjc d', '20230717175627.png', NULL, '$2y$10$5qC5X35JOXRHFlyfrh.GR.FVl4Vscn1t87BGfpIOCbjTIsS4ZE4ZG', 1, NULL, 0, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ammenities`
--
ALTER TABLE `ammenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ammenities`
--
ALTER TABLE `ammenities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
