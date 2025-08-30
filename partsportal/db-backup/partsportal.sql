-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2014 at 09:57 AM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `partsportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `parts_admin`
--

CREATE TABLE IF NOT EXISTS `parts_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='DO NOT EMPTY' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `parts_admin`
--

INSERT INTO `parts_admin` (`admin_id`, `email`, `password`, `status`) VALUES
(1, 'zaman@localhost.com', 'e10adc3949ba59abbe56e057f20f883e', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parts_ads`
--

CREATE TABLE IF NOT EXISTS `parts_ads` (
  `ads_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `order_id` int(11) DEFAULT '0',
  PRIMARY KEY (`ads_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `parts_ads`
--

INSERT INTO `parts_ads` (`ads_id`, `image`, `status`, `created_on`, `title`, `url`, `order_id`) VALUES
(1, 'zdXlihxEpQAPoEGkdIvJeLpmaads_img5.png', 1, '2014-02-25 07:44:43', 'sample 1', 'https://www.google.com', NULL),
(2, 'CffqzAOjoXaoUxirjhTqRpOMQads_img4.png', 1, '2014-02-25 07:46:28', 'sample 2', 'https://www.google.com', NULL),
(3, 'IToJYbHBpjlFacvcKCzSBVZjOads_img6.png', 1, '2014-02-25 07:46:56', 'sample 3', 'https://www.google.com', NULL),
(4, 'BrOuleWHQHmfkoedsBYvfhOaoads_img7.png', 1, '2014-02-25 07:47:14', 'sample 4', 'https://www.google.com', NULL),
(5, 'alYfGneWEzKBlTgvOMNkZzAmHads02.png', 1, '2014-02-25 07:47:34', 'sample 5', 'https://www.google.com', NULL),
(6, 'PcVEUZXsXPuFYDwNTcFJQMUzdgoogle_ads.png', 1, '2014-02-25 07:48:17', 'sample 5', 'https://www.google.com', NULL),
(7, 'PcVEUZXsXPuFYDwNTcFJQMUzdgoogle_ads.png', 1, '2014-02-25 07:51:25', 'sample 5', 'https://www.google.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parts_alert_equipment_dismantling`
--

CREATE TABLE IF NOT EXISTS `parts_alert_equipment_dismantling` (
  `parts_alert_equipment_dismantling_id` int(11) NOT NULL AUTO_INCREMENT,
  `equipment_type` varchar(128) NOT NULL,
  `make` int(11) NOT NULL,
  `model` int(11) NOT NULL,
  `serial` varchar(255) NOT NULL,
  `location` tinytext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`parts_alert_equipment_dismantling_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `parts_alert_equipment_parts`
--

CREATE TABLE IF NOT EXISTS `parts_alert_equipment_parts` (
  `parts_alert_equipment_parts_id` int(11) NOT NULL AUTO_INCREMENT,
  `equipment_type` varchar(128) NOT NULL,
  `sub_category` varchar(55) NOT NULL,
  `make` int(11) NOT NULL,
  `model` int(11) NOT NULL,
  `componant_category` varchar(50) NOT NULL,
  `key_word` varchar(128) NOT NULL,
  `part_number` varchar(128) NOT NULL,
  `new_used` varchar(20) NOT NULL,
  `part_condition` varchar(20) NOT NULL,
  `location` int(11) NOT NULL,
  `price` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`parts_alert_equipment_parts_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `parts_alert_listing`
--

CREATE TABLE IF NOT EXISTS `parts_alert_listing` (
  `parts_alert_listing_id` int(11) NOT NULL AUTO_INCREMENT,
  `parts_list_id` int(11) NOT NULL COMMENT 'Parts category Table id',
  `type_listing_id` int(11) NOT NULL COMMENT 'individual Parts category Table id',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL,
  `is_sold` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1 = sold ; 0 = not sold',
  `fname` varchar(50) NOT NULL COMMENT 'request person first name',
  `lname` varchar(50) NOT NULL COMMENT 'request person lirst name',
  `email` varchar(100) NOT NULL COMMENT 'request person Email',
  PRIMARY KEY (`parts_alert_listing_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `parts_alert_lubes`
--

CREATE TABLE IF NOT EXISTS `parts_alert_lubes` (
  `parts_alert_lubes_id` int(11) NOT NULL AUTO_INCREMENT,
  `lube_type` varchar(128) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `make` int(11) NOT NULL,
  `quantity` varchar(5) NOT NULL,
  `condition` varchar(50) NOT NULL,
  `location` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`parts_alert_lubes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `parts_alert_machine_attachments`
--

CREATE TABLE IF NOT EXISTS `parts_alert_machine_attachments` (
  `parts_alert_machine_attachments_id` int(11) NOT NULL AUTO_INCREMENT,
  `equipment_type` varchar(128) NOT NULL,
  `sub_category` varchar(128) NOT NULL,
  `attachment_type` varchar(55) NOT NULL,
  `make` varchar(22) NOT NULL,
  `suit_machine_size` varchar(55) NOT NULL,
  `condition` varchar(55) NOT NULL,
  `location` int(11) NOT NULL,
  `price` varchar(44) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`parts_alert_machine_attachments_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `parts_alert_tyre`
--

CREATE TABLE IF NOT EXISTS `parts_alert_tyre` (
  `parts_alert_tyre_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(128) NOT NULL,
  `rim_size` varchar(55) NOT NULL,
  `tyre_size` varchar(55) NOT NULL,
  `brand` varchar(55) NOT NULL,
  `model` varchar(55) NOT NULL,
  `condition` varchar(55) NOT NULL,
  `tread` varchar(55) NOT NULL,
  `location` int(11) NOT NULL,
  `price` varchar(55) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`parts_alert_tyre_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `parts_alert_workshop_parts_manuals`
--

CREATE TABLE IF NOT EXISTS `parts_alert_workshop_parts_manuals` (
  `parts_alert_workshop_parts_manuals_id` int(11) NOT NULL AUTO_INCREMENT,
  `equipment_type` varchar(128) NOT NULL,
  `make` int(11) NOT NULL,
  `model` int(11) NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `manual_type` varchar(33) NOT NULL,
  `manual_formate` varchar(33) NOT NULL,
  `condition` varchar(22) NOT NULL,
  `location` int(11) NOT NULL,
  `price` varchar(55) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`parts_alert_workshop_parts_manuals_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `parts_alert_workshop_tools`
--

CREATE TABLE IF NOT EXISTS `parts_alert_workshop_tools` (
  `parts_alert_workshop_tools_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(128) NOT NULL,
  `sub_category` varchar(128) NOT NULL,
  `key_word` varchar(255) NOT NULL,
  `condition` varchar(44) NOT NULL,
  `location` int(11) NOT NULL,
  `price` varchar(44) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`parts_alert_workshop_tools_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `parts_category`
--

CREATE TABLE IF NOT EXISTS `parts_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `parts_list_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_category_id` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL,
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `category_id_2` (`category_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `parts_category`
--

INSERT INTO `parts_category` (`category_id`, `parts_list_id`, `name`, `parent_category_id`, `status`, `created_on`) VALUES
(1, 1, 'Earthmoving', 0, 1, '2014-03-03 12:08:04'),
(2, 1, 'Trucks & Trailers', 0, 1, '2014-03-03 12:08:21'),
(3, 1, 'Agricultural', 0, 1, '2014-03-03 12:08:31'),
(4, 1, 'Dozer', 3, 1, '2014-03-03 12:08:58'),
(5, 1, 'Grader', 3, 1, '2014-03-03 12:09:10'),
(6, 1, 'Scraper', 3, 1, '2014-03-03 12:09:21'),
(7, 1, 'Dozer', 2, 1, '2014-03-03 12:08:58'),
(8, 1, 'Grader', 2, 1, '2014-03-03 12:09:10'),
(9, 1, 'Scraper', 2, 1, '2014-03-03 12:09:21'),
(10, 1, 'Dozer', 1, 1, '2014-03-03 12:08:58'),
(11, 1, 'Grader', 1, 1, '2014-03-03 12:09:10'),
(12, 1, 'Scraper', 1, 1, '2014-03-03 12:09:21'),
(13, 2, 'Earthmoving', 0, 1, '2014-03-03 12:12:30'),
(14, 2, 'Trucks & Trailers', 0, 1, '2014-03-03 12:12:48'),
(15, 2, 'Agricultural', 0, 1, '2014-03-03 12:12:57'),
(16, 3, 'Grease', 0, 1, '2014-03-03 12:13:26'),
(17, 3, 'Transmission oil', 0, 1, '2014-03-03 12:13:46'),
(18, 3, 'Diesel oil', 0, 1, '2014-03-03 12:13:58'),
(19, 4, 'Big', 0, 1, '2014-03-03 12:14:23'),
(20, 4, 'Medium', 0, 1, '2014-03-03 12:15:21'),
(21, 4, 'Simple', 0, 1, '2014-03-03 12:15:30'),
(22, 5, 'Earthmoving', 0, 1, '2014-03-03 12:15:58'),
(23, 5, 'Trucks & Trailers', 0, 1, '2014-03-03 12:16:09'),
(24, 5, 'Agricultural', 0, 1, '2014-03-03 12:16:19'),
(25, 6, 'Earthmoving', 0, 1, '2014-03-03 12:27:09'),
(26, 6, 'Trucks & Trailers', 0, 1, '2014-03-03 12:27:22'),
(27, 6, 'Agricultural', 0, 1, '2014-03-03 12:27:34'),
(28, 7, 'Big', 0, 1, '2014-03-03 12:28:03'),
(29, 7, 'Medium', 0, 1, '2014-03-03 12:28:23'),
(30, 7, 'Simple', 0, 1, '2014-03-03 12:28:33'),
(31, 7, 'Dozer', 28, 1, '2014-03-03 12:37:35'),
(32, 7, 'Grader', 28, 1, '2014-03-03 12:37:50'),
(33, 7, 'Scraper', 28, 1, '2014-03-03 12:38:02'),
(34, 7, 'Dozer', 29, 1, '2014-03-03 12:40:13'),
(35, 7, 'Grader', 29, 1, '2014-03-03 12:40:25'),
(36, 7, 'Scraper', 29, 1, '2014-03-03 12:40:35'),
(37, 7, 'Dozer', 30, 1, '2014-03-03 12:40:50'),
(38, 7, 'Grader', 30, 1, '2014-03-03 12:40:59'),
(39, 7, 'Scraper', 30, 1, '2014-03-03 12:41:07'),
(40, 6, 'Dozer', 25, 1, '2014-03-04 10:38:44'),
(41, 6, 'Grader', 25, 1, '2014-03-04 10:39:03'),
(42, 6, 'Scraper', 25, 1, '2014-03-04 10:39:18'),
(43, 6, 'Dozer', 26, 1, '2014-03-04 10:39:30'),
(44, 6, 'Grader', 26, 1, '2014-03-04 10:39:42'),
(45, 6, 'Scraper', 26, 1, '2014-03-04 10:39:53'),
(46, 6, 'Dozer', 27, 1, '2014-03-04 10:40:06'),
(47, 6, 'Grader', 27, 1, '2014-03-04 10:40:17'),
(48, 6, 'Scraper', 27, 1, '2014-03-04 10:40:30');

-- --------------------------------------------------------

--
-- Table structure for table `parts_equipment_dismantling`
--

CREATE TABLE IF NOT EXISTS `parts_equipment_dismantling` (
  `parts_equipment_dismantling_id` int(11) NOT NULL AUTO_INCREMENT,
  `equipment_type` varchar(128) NOT NULL,
  `make` int(11) NOT NULL,
  `model` int(11) NOT NULL,
  `serial` varchar(255) NOT NULL,
  `location` tinytext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`parts_equipment_dismantling_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `parts_equipment_dismantling`
--

INSERT INTO `parts_equipment_dismantling` (`parts_equipment_dismantling_id`, `equipment_type`, `make`, `model`, `serial`, `location`, `status`) VALUES
(1, '13', 5, 7, '1001', '1', 1),
(2, '13', 5, 7, '666677', '4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parts_equipment_parts`
--

CREATE TABLE IF NOT EXISTS `parts_equipment_parts` (
  `parts_equipment_parts_id` int(11) NOT NULL AUTO_INCREMENT,
  `equipment_type` varchar(128) NOT NULL COMMENT 'it is parent "category_id"',
  `sub_category` varchar(55) NOT NULL COMMENT 'it is sub "category_id"',
  `make` int(11) NOT NULL,
  `model` int(11) NOT NULL,
  `componant_category` varchar(50) NOT NULL,
  `key_word` varchar(128) NOT NULL,
  `part_number` varchar(128) NOT NULL,
  `new_used` varchar(20) NOT NULL,
  `part_condition` varchar(20) NOT NULL,
  `location` int(11) NOT NULL,
  `price` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`parts_equipment_parts_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `parts_equipment_parts`
--

INSERT INTO `parts_equipment_parts` (`parts_equipment_parts_id`, `equipment_type`, `sub_category`, `make`, `model`, `componant_category`, `key_word`, `part_number`, `new_used`, `part_condition`, `location`, `price`, `description`, `status`) VALUES
(1, '1', '10', 1, 3, 'transmission', 'ZZZZ', '1001', 'new', 'Excellent', 1, '1234', 'Part Description Part Description Part Description Part Description Part Description', 1),
(2, '1', '11', 1, 4, 'transmission', 'ddrrtt', '123654', 'new', 'Good', 2, '234', 'Hello buddy how are you ?', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parts_faq_manager`
--

CREATE TABLE IF NOT EXISTS `parts_faq_manager` (
  `faq_manager_id` int(11) NOT NULL AUTO_INCREMENT,
  `faq_ques` tinytext NOT NULL,
  `faq_answer` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL,
  PRIMARY KEY (`faq_manager_id`),
  UNIQUE KEY `faq_manager_id` (`faq_manager_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `parts_faq_manager`
--

INSERT INTO `parts_faq_manager` (`faq_manager_id`, `faq_ques`, `faq_answer`, `status`, `created_on`) VALUES
(1, 'What is the PhoneGap Build service and how is it different from PhoneGap?', '<p>\r\n	PhoneGap is a mobile application development framework, based upon the open source Apache Cordova project. It allows you to write an app once with HTML, CSS and JavaScript, and then deploy it to a wide range of mobile devices without losing the features of a native app. PhoneGap Build is a cloud-based service built on top of the PhoneGap framework. It allows you to easily build those same mobile apps in the cloud.</p>\r\n', 1, '2014-02-10 07:28:22'),
(2, 'How do I get started with PhoneGap Build?', 'Simply upload your web assets - a ZIP file of HTML, CSS and JavaScript, or a single index.html file - to PhoneGap Build, point us to your Git or SVN repository. Then we’ll undertake the compilation and packaging for you. In minutes, you’ll receive the download URLs for all mobile platforms.', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `parts_listing`
--

CREATE TABLE IF NOT EXISTS `parts_listing` (
  `listing_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `parts_list_id` int(11) NOT NULL COMMENT 'Parts category Table id',
  `type_listing_id` int(11) NOT NULL COMMENT 'individual Parts category Table id',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `created_on` datetime NOT NULL,
  `is_sold` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1 = sold ; 0 = not sold',
  `stock_no` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`listing_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `parts_listing`
--

INSERT INTO `parts_listing` (`listing_id`, `member_id`, `parts_list_id`, `type_listing_id`, `status`, `is_delete`, `created_on`, `is_sold`, `stock_no`) VALUES
(1, 1, 1, 1, 1, 0, '2014-03-08 11:27:19', 1, '20025005'),
(2, 1, 2, 1, 1, 0, '2014-03-08 11:47:39', 0, '2002'),
(3, 1, 3, 1, 1, 0, '2014-03-08 11:54:55', 0, '3003'),
(4, 1, 4, 1, 1, 0, '2014-03-08 12:04:49', 0, '66666'),
(5, 1, 5, 1, 1, 0, '2014-03-08 12:16:15', 0, '555'),
(6, 1, 6, 1, 1, 0, '2014-03-08 12:26:32', 0, 'ttyy'),
(7, 3, 1, 2, 1, 0, '2014-03-11 05:15:26', 1, '123098'),
(8, 3, 2, 2, 1, 0, '2014-03-11 05:43:07', 0, '6789'),
(9, 1, 3, 2, 1, 0, '2014-03-11 06:05:06', 0, '345tyu78'),
(10, 1, 3, 3, 1, 0, '2014-03-11 06:14:44', 0, 'tty778'),
(11, 1, 4, 2, 1, 0, '2014-03-11 06:20:41', 0, 'sdfsdfsd'),
(12, 1, 5, 1, 1, 0, '2014-03-11 06:25:06', 0, 'srfse4534'),
(13, 1, 6, 2, 1, 0, '2014-03-11 06:30:20', 0, 'dsfgsd'),
(14, 1, 7, 1, 1, 0, '2014-03-11 06:36:33', 0, 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `parts_listing_image`
--

CREATE TABLE IF NOT EXISTS `parts_listing_image` (
  `parts_listing_image_id` int(11) NOT NULL AUTO_INCREMENT,
  `listing_id` int(11) NOT NULL,
  `image` tinytext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`parts_listing_image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `parts_listing_image`
--

INSERT INTO `parts_listing_image` (`parts_listing_image_id`, `listing_id`, `image`, `status`, `created_on`) VALUES
(2, 2, 'BYEKsSZPTVzMebrVORyzbxSyu10316_161951621888_535076888_2712965_5826597_n.jpg', 1, '2014-03-08 10:47:39'),
(3, 3, 'kmofLDPMFLCfubtkbhtuqCCWl2.jpg', 1, '2014-03-08 10:54:55'),
(4, 3, 'RPlGxquyPCIkpAnUZofNwkbfW10316_162634116888_535076888_2720689_314021_n.jpg', 1, '2014-03-08 10:54:55'),
(6, 4, 'eNZqhYzZELAtiZFhAmyDJoMdu247617_2402752645346_14943670_n.jpg', 1, '2014-03-08 11:07:52'),
(7, 5, 'jDxdPGmlvoRdSgunvYqQTchxY10316_161951621888_535076888_2712965_5826597_n.jpg', 1, '2014-03-08 11:16:15'),
(8, 6, 'HAQKWCJsCissAHwsUKFGqaICU300383_10150426840024880_584389879_10318232_1272593503_n.jpg', 1, '2014-03-08 11:26:32'),
(18, 1, 'tIWXfWLSohTWQHGocqDlQMkzT2.jpg', 1, '2014-03-10 09:21:46'),
(19, 7, 'obdRnWbkNxvofuHHTllIAYRPX72064_387628331305915_326152542_n.jpg', 1, '2014-03-11 04:15:26'),
(20, 8, 'wkuQZwgcdUuwfANGCFAITcjUw10316_162634116888_535076888_2720689_314021_n.jpg', 1, '2014-03-11 04:43:07'),
(21, 9, 'NSDjpickvAFUoFvvQafQqYwCl10316_160630956888_535076888_2703834_7092939_n.jpg', 1, '2014-03-11 05:05:07'),
(22, 9, 'JeIIrpuGKagHjNcCfpxwzaPiX10316_162634116888_535076888_2720689_314021_n.jpg', 1, '2014-03-11 05:05:07'),
(23, 10, 'khHtxNvuaNzETUZpwUinlURDa10316_160630956888_535076888_2703834_7092939_n.jpg', 1, '2014-03-11 05:14:44'),
(24, 10, 'eqGQpNvkuUjDyuzDdUaNHgKEI10316_162634116888_535076888_2720689_314021_n.jpg', 1, '2014-03-11 05:14:44'),
(25, 11, 'DKcSVJHWvuBtDUOeSBNZAefGw10316_160630956888_535076888_2703834_7092939_n.jpg', 1, '2014-03-11 05:20:41'),
(26, 11, 'NQrbzWsVwaRHGUyNDJuVUcEsc10316_162634116888_535076888_2720689_314021_n.jpg', 1, '2014-03-11 05:20:42'),
(27, 12, 'gLOYVfrxPXQKKQAWmcNPUpfes2.jpg', 1, '2014-03-11 05:25:06'),
(28, 12, 'UrnybNZFgYTDndUQchiYOQXPX10316_162634116888_535076888_2720689_314021_n.jpg', 1, '2014-03-11 05:25:07'),
(29, 13, 'JoUPNjCZRtazxbMYNXqMMCIih2.jpg', 1, '2014-03-11 05:30:20'),
(30, 13, 'evBCAKKUuCFwIdCEaSqZrnDfp10316_162634116888_535076888_2720689_314021_n.jpg', 1, '2014-03-11 05:30:20'),
(31, 14, 'aqFzOefCgtcZpngARpWHcajAE10316_160630956888_535076888_2703834_7092939_n.jpg', 1, '2014-03-11 05:36:33'),
(32, 14, 'RUVePBqgocCPSwznQniLAdCvz10316_162634116888_535076888_2720689_314021_n.jpg', 1, '2014-03-11 05:36:33'),
(33, 14, 'WvIrxccHFOmnWTGzrokXtgcJG17148_297969248987_281321723987_3327459_6707339_n.jpg', 1, '2014-03-11 05:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `parts_location`
--

CREATE TABLE IF NOT EXISTS `parts_location` (
  `location_id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(128) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `crated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`location_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='DO NOT EMPTY' AUTO_INCREMENT=9 ;

--
-- Dumping data for table `parts_location`
--

INSERT INTO `parts_location` (`location_id`, `location`, `status`, `crated_on`) VALUES
(1, 'New South Wales', 1, '2014-02-11 06:14:59'),
(2, 'Victoria (Australia)', 1, '2014-02-11 06:14:59'),
(3, 'Queensland', 1, '2014-02-11 06:15:14'),
(4, 'Western Australia', 1, '2014-02-11 06:15:14'),
(5, 'South Australia', 1, '2014-02-11 06:15:32'),
(6, 'Australian Capital Territory', 1, '2014-02-11 06:15:32'),
(7, 'Tasmania', 1, '2014-02-11 06:15:52'),
(8, 'Northern Territory', 1, '2014-02-11 06:15:52');

-- --------------------------------------------------------

--
-- Table structure for table `parts_lubes`
--

CREATE TABLE IF NOT EXISTS `parts_lubes` (
  `parts_lubes_id` int(11) NOT NULL AUTO_INCREMENT,
  `lube_type` varchar(128) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `make` int(11) NOT NULL,
  `quantity` varchar(5) NOT NULL,
  `condition` varchar(50) NOT NULL,
  `location` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`parts_lubes_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `parts_lubes`
--

INSERT INTO `parts_lubes` (`parts_lubes_id`, `lube_type`, `grade`, `make`, `quantity`, `condition`, `location`, `price`, `description`, `status`) VALUES
(1, '16', 'A+', 9, '1', 'Excellent', 1, 123, 'Part Description Part Description Part Description Part Description Part Description Part Description Part Description Part Description Part Description ', 1),
(2, '17', 'A+', 9, '2', 'Good', 2, 456, 'sdfas awerfwe weaho we fhwui ha werwe u weruwewe f', 1),
(3, '17', 'A+', 9, '2', 'Excellent', 2, 7788, 'dfgsdg gak arit artf aosrfuio oaurfw  asofosi asod aosf oa  oasifjos safjoi ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parts_machine_attachments`
--

CREATE TABLE IF NOT EXISTS `parts_machine_attachments` (
  `parts_machine_attachments_id` int(11) NOT NULL AUTO_INCREMENT,
  `equipment_type` varchar(128) NOT NULL,
  `sub_category` varchar(128) NOT NULL,
  `attachment_type` varchar(55) NOT NULL,
  `make` varchar(22) NOT NULL,
  `suit_machine_size` varchar(55) NOT NULL,
  `condition` varchar(55) NOT NULL,
  `location` int(11) NOT NULL,
  `price` varchar(44) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`parts_machine_attachments_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `parts_machine_attachments`
--

INSERT INTO `parts_machine_attachments` (`parts_machine_attachments_id`, `equipment_type`, `sub_category`, `attachment_type`, `make`, `suit_machine_size`, `condition`, `location`, `price`, `description`, `status`) VALUES
(1, '25', '40', 'Hard Cover', '21', '15', 'Good', 2, '333', 'sdasf qerfq', 1),
(2, '26', '44', 'CD', '21', '15', 'Good', 3, '444', 'sdfg etfer erter wertwert wetwetet wertwertewe ewtwertewr', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parts_make_model`
--

CREATE TABLE IF NOT EXISTS `parts_make_model` (
  `make_model_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `type` tinyint(3) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` int(11) NOT NULL,
  `parts_list_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`make_model_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='DO NOT EMPTY' AUTO_INCREMENT=30 ;

--
-- Dumping data for table `parts_make_model`
--

INSERT INTO `parts_make_model` (`make_model_id`, `name`, `parent_id`, `type`, `status`, `created_on`, `parts_list_id`) VALUES
(1, 'cat', 0, 1, 1, 0, 1),
(2, 'komatso', 0, 1, 1, 0, 1),
(3, '966b', 1, 1, 1, 0, 1),
(4, '977b', 1, 1, 1, 0, 1),
(5, 'cat', 0, 1, 1, 0, 2),
(6, 'komatso', 0, 1, 1, 0, 2),
(7, '966b', 5, 1, 1, 0, 2),
(8, '977b', 6, 1, 1, 0, 2),
(9, 'cat', 0, 1, 1, 0, 3),
(10, 'komatso', 0, 1, 1, 0, 3),
(11, '966b', 9, 1, 1, 0, 3),
(12, '977b', 10, 1, 1, 0, 3),
(13, 'cat', 0, 1, 1, 0, 4),
(14, 'komatso', 0, 1, 1, 0, 4),
(15, '966b', 13, 1, 1, 0, 4),
(16, '977b', 14, 1, 1, 0, 4),
(17, 'cat 1001', 0, 1, 1, 0, 5),
(18, 'komatso', 0, 1, 1, 0, 5),
(19, '966b', 13, 1, 1, 0, 5),
(20, '977b', 14, 1, 1, 0, 5),
(21, 'cat', 0, 1, 1, 0, 6),
(22, 'komatso', 0, 1, 1, 0, 6),
(23, '966b', 21, 1, 1, 0, 6),
(24, '977b', 22, 1, 1, 0, 6),
(25, 'cat', 0, 1, 1, 0, 7),
(26, 'komatso', 0, 1, 1, 0, 7),
(27, '966b', 21, 1, 1, 0, 7),
(28, '977b', 22, 1, 1, 0, 7),
(29, 'cat 2002', 17, 1, 1, 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `parts_member`
--

CREATE TABLE IF NOT EXISTS `parts_member` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(128) NOT NULL,
  `surname` varchar(128) NOT NULL,
  `username` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `user_type` tinyint(1) DEFAULT '2' COMMENT '2=private,3=australian,4=international',
  `dob` date NOT NULL,
  `street_address` tinytext NOT NULL,
  `city` varchar(255) NOT NULL,
  `postcode` varchar(20) NOT NULL,
  `state` varchar(128) DEFAULT NULL,
  `phone` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `reg_business_name` varchar(255) NOT NULL,
  `website` text NOT NULL,
  `business_abn` varchar(255) NOT NULL,
  `dealer_licence` varchar(255) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `position_contact_person` varchar(255) NOT NULL,
  `contact_person_phone` varchar(25) NOT NULL,
  `contact_person_email` varchar(55) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_on` datetime NOT NULL,
  `country` varchar(100) NOT NULL,
  `business_company_id_number` varchar(100) NOT NULL COMMENT 'BUSINESS',
  `address1` varchar(255) NOT NULL COMMENT 'BUSINESS',
  `address2` varchar(255) NOT NULL COMMENT 'BUSINESS',
  `alibaba_membership` tinyint(1) DEFAULT '0' COMMENT 'BUSINESS',
  `made_in_china` tinyint(1) DEFAULT '0' COMMENT 'BUSINESS',
  `other_membership` varchar(255) DEFAULT NULL COMMENT 'BUSINESS',
  `business_phone` varchar(20) NOT NULL COMMENT 'BUSINESS',
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `parts_member`
--

INSERT INTO `parts_member` (`member_id`, `fname`, `surname`, `username`, `title`, `email`, `password`, `user_type`, `dob`, `street_address`, `city`, `postcode`, `state`, `phone`, `mobile`, `reg_business_name`, `website`, `business_abn`, `dealer_licence`, `contact_person`, `position_contact_person`, `contact_person_phone`, `contact_person_email`, `status`, `created_on`, `country`, `business_company_id_number`, `address1`, `address2`, `alibaba_membership`, `made_in_china`, `other_membership`, `business_phone`) VALUES
(1, '', '', 'profile_name', '', 'kamrulzuiu@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 3, '0000-00-00', 'Nikunja-2', 'Dhaka', '12345', 'Victoria', '8826250', '01712018755', 'reg_business_name', 'http://www.webzonetechno.com', 'business_ABN', '1001', 'zaman', 'PM', '8826250', 'kamrulzuiu@gmail.com', 1, '2014-03-07 13:05:05', 'AU', '', '', '', 0, 0, NULL, ''),
(3, 'ztest1', 'ztest2', '', 'private seller', 'a@mail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, '2014-03-03', 'Road#20,House#1,Nikunja 2 ,Dhaka', 'Dhaka', '', 'Western-Australia', '8826250', '0191377103', '', '', '', '', '', '', '', '', 1, '2014-03-10 16:14:41', 'AU', '', '', '', 0, 0, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `parts_member_info`
--

CREATE TABLE IF NOT EXISTS `parts_member_info` (
  `parts_member_info_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `info` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`parts_member_info_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `parts_member_info`
--

INSERT INTO `parts_member_info` (`parts_member_info_id`, `member_id`, `info`, `status`) VALUES
(1, 1, '<p>About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...About me ...</p>\r\n<p>&nbsp;</p>\r\n<p>About me ...About me ...About me ...About me ...</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parts_member_packege`
--

CREATE TABLE IF NOT EXISTS `parts_member_packege` (
  `parts_member_packege_id` int(11) NOT NULL AUTO_INCREMENT,
  `package_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`parts_member_packege_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `parts_member_packege`
--

INSERT INTO `parts_member_packege` (`parts_member_packege_id`, `package_id`, `member_id`, `created_on`, `status`) VALUES
(1, 2, 1, '2014-02-01 07:18:58', 0),
(2, 1, 3, '2014-03-10 16:14:41', 1),
(3, 1, 1, '2014-03-10 16:48:02', 0),
(4, 2, 1, '2014-03-10 16:48:15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parts_package`
--

CREATE TABLE IF NOT EXISTS `parts_package` (
  `package_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `picture_limit` int(11) NOT NULL DEFAULT '0',
  `cerdit` float(9,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_on` datetime NOT NULL,
  `description` text NOT NULL,
  `exp_volume` int(11) NOT NULL COMMENT 'if a user purchase this package how many days it will continue for seller',
  `hilighted_ads_limit` int(11) NOT NULL,
  `listing_limit` int(11) NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`package_id`),
  UNIQUE KEY `package_id_2` (`package_id`),
  KEY `package_id` (`package_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `parts_package`
--

INSERT INTO `parts_package` (`package_id`, `title`, `picture_limit`, `cerdit`, `status`, `created_on`, `description`, `exp_volume`, `hilighted_ads_limit`, `listing_limit`, `is_default`) VALUES
(1, 'Package 1', 10, 45.00, 1, '2014-01-19 00:00:00', 'eeeeeeeeeeeeeee', 50, 3, 12, 1),
(2, 'Package 2', 7, 55.00, 1, '2014-01-19 17:34:46', '', 50, 5, 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `parts_parts_list`
--

CREATE TABLE IF NOT EXISTS `parts_parts_list` (
  `parts_list_id` int(11) NOT NULL AUTO_INCREMENT,
  `parts_name` varchar(150) NOT NULL,
  `table_name` varchar(255) NOT NULL COMMENT 'Parts category Table',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`parts_list_id`),
  UNIQUE KEY `parts_list_id` (`parts_list_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='DO NOT EMPTY' AUTO_INCREMENT=8 ;

--
-- Dumping data for table `parts_parts_list`
--

INSERT INTO `parts_parts_list` (`parts_list_id`, `parts_name`, `table_name`, `status`) VALUES
(1, 'Equipment Parts', 'parts_equipment_parts', 1),
(2, 'Equipment Dismantling', 'parts_equipment_dismantling', 1),
(3, 'Lubes', 'parts_lubes', 1),
(4, 'Tyre', 'parts_tyre', 1),
(5, 'Workshop & Parts Manuals', 'parts_workshop_parts_manuals', 1),
(6, 'Machine Attachments', 'parts_machine_attachments', 1),
(7, 'Workshop Tools', 'parts_workshop_tools', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parts_static_page`
--

CREATE TABLE IF NOT EXISTS `parts_static_page` (
  `parts_static_page_id` int(11) NOT NULL AUTO_INCREMENT,
  `parts_name` varchar(100) DEFAULT NULL,
  `description` text,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = menu ; 2 = about us ; 3 = advertise_with_us',
  PRIMARY KEY (`parts_static_page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='DO NOT EMPTY' AUTO_INCREMENT=16 ;

--
-- Dumping data for table `parts_static_page`
--

INSERT INTO `parts_static_page` (`parts_static_page_id`, `parts_name`, `description`, `status`) VALUES
(1, 'Transport', '<p>\r\n	TRANSPORT</p>\r\n', 1),
(2, 'Earthmoving', '<p>\r\n	EARTHMOVING</p>\r\n', 1),
(3, 'Mining', NULL, 1),
(4, 'Agriculture', '<p>\r\n	Agriculture</p>\r\n', 1),
(5, 'Marine', NULL, 1),
(6, 'Tyres', NULL, 1),
(7, 'Lubes', NULL, 1),
(8, 'Manuals', NULL, 1),
(9, 'Tools', NULL, 1),
(10, 'about_us', '<p>\r\n	ABOUT US</p>\r\n', 2),
(11, 'advertise_with_us', '<p>\r\n	ADVERTISE WITH US</p>\r\n', 3),
(12, 'business_options', NULL, 4),
(13, 'safety_tips', NULL, 5),
(14, 'overseas_dealer', NULL, 6),
(15, 'scam_safety_tips', 'scam_safety_tips', 7);

-- --------------------------------------------------------

--
-- Table structure for table `parts_suggestion`
--

CREATE TABLE IF NOT EXISTS `parts_suggestion` (
  `suggestion_id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `phone` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `subject` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `suggestion` text CHARACTER SET utf8,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`suggestion_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `parts_template_customized`
--

CREATE TABLE IF NOT EXISTS `parts_template_customized` (
  `template_customized_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `templateTopHTML` text NOT NULL,
  `templateBottomHTML` text NOT NULL,
  `bgColor` text NOT NULL,
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `member_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`template_customized_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `parts_tyre`
--

CREATE TABLE IF NOT EXISTS `parts_tyre` (
  `parts_tyre_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(128) NOT NULL,
  `rim_size` varchar(55) NOT NULL,
  `tyre_size` varchar(55) NOT NULL,
  `brand` varchar(55) NOT NULL,
  `model` varchar(55) NOT NULL,
  `condition` varchar(55) NOT NULL,
  `tread` varchar(55) NOT NULL,
  `location` int(11) NOT NULL,
  `price` varchar(55) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`parts_tyre_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `parts_tyre`
--

INSERT INTO `parts_tyre` (`parts_tyre_id`, `category`, `rim_size`, `tyre_size`, `brand`, `model`, `condition`, `tread`, `location`, `price`, `description`, `status`) VALUES
(1, '20', 'Medium', 'Simple', 'eeeee', '13', 'Excellent', '1', 3, '444', '45345', 1),
(2, '20', 'Simple', 'Big', 'eeeee', '14', 'Excellent', '2', 2, '444', 'sdfasdf arfa awer werqwer arf awer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parts_workshop_parts_manuals`
--

CREATE TABLE IF NOT EXISTS `parts_workshop_parts_manuals` (
  `parts_workshop_parts_manuals_id` int(11) NOT NULL AUTO_INCREMENT,
  `equipment_type` varchar(128) NOT NULL,
  `make` int(11) NOT NULL,
  `model` int(11) NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `manual_type` varchar(33) NOT NULL,
  `manual_formate` varchar(33) NOT NULL,
  `condition` varchar(22) NOT NULL,
  `location` int(11) NOT NULL,
  `price` varchar(55) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`parts_workshop_parts_manuals_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `parts_workshop_parts_manuals`
--

INSERT INTO `parts_workshop_parts_manuals` (`parts_workshop_parts_manuals_id`, `equipment_type`, `make`, `model`, `serial_number`, `manual_type`, `manual_formate`, `condition`, `location`, `price`, `description`, `status`) VALUES
(1, '23', 17, 29, 'werwe45345', 'Parts', 'CD', 'Good', 2, '', 'sdfcasdf drwed', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parts_workshop_tools`
--

CREATE TABLE IF NOT EXISTS `parts_workshop_tools` (
  `parts_workshop_tools_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(128) NOT NULL,
  `sub_category` varchar(128) NOT NULL,
  `key_word` varchar(255) NOT NULL,
  `condition` varchar(44) NOT NULL,
  `location` int(11) NOT NULL,
  `price` varchar(44) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`parts_workshop_tools_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `parts_workshop_tools`
--

INSERT INTO `parts_workshop_tools` (`parts_workshop_tools_id`, `category`, `sub_category`, `key_word`, `condition`, `location`, `price`, `description`, `status`) VALUES
(1, '29', '34', 'ddddeee', 'Excellent', 2, '334', 'sdfd aed DA ADAD ADAD', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
