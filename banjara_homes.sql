-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 28, 2023 at 08:54 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banjara_homes`
--

-- --------------------------------------------------------

--
-- Table structure for table `oc_address`
--

CREATE TABLE `oc_address` (
  `address_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `company` varchar(40) NOT NULL,
  `address_1` varchar(128) NOT NULL,
  `address_2` varchar(128) NOT NULL,
  `city` varchar(128) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `country_id` int(11) NOT NULL DEFAULT 0,
  `zone_id` int(11) NOT NULL DEFAULT 0,
  `custom_field` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_api`
--

CREATE TABLE `oc_api` (
  `api_id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `key` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_api`
--

INSERT INTO `oc_api` (`api_id`, `username`, `key`, `status`, `date_added`, `date_modified`) VALUES
(1, 'Default', 'KbFRPdE1pkjlfZKVz7AlWhN6BAPSHWTaWDJqma38EODQGftb3xdYmQQB3fOiaqEuOxHUnzL6NRGULVycqeL2QaDM2xP9hqNXhiRYqpmvQZP4fIVIuAnoMb1A9ReBT7kz8H8kWPFzgP60G4dA1eH4DTYHptI6acQqEvpIQ40kOJasvKnaVcGhUxhsG0HS4XgA6LoWaNjjrTzmYbdJnxu2S0We35gy7ykON25i7bNx7YfEI6Q12oYN7psVX4ZhiY5l', 1, '2022-11-22 10:34:07', '2022-11-22 10:34:07');

-- --------------------------------------------------------

--
-- Table structure for table `oc_api_ip`
--

CREATE TABLE `oc_api_ip` (
  `api_ip_id` int(11) NOT NULL,
  `api_id` int(11) NOT NULL,
  `ip` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_api_ip`
--

INSERT INTO `oc_api_ip` (`api_ip_id`, `api_id`, `ip`) VALUES
(1, 1, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `oc_api_session`
--

CREATE TABLE `oc_api_session` (
  `api_session_id` int(11) NOT NULL,
  `api_id` int(11) NOT NULL,
  `session_id` varchar(32) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_api_session`
--

INSERT INTO `oc_api_session` (`api_session_id`, `api_id`, `session_id`, `ip`, `date_added`, `date_modified`) VALUES
(1, 1, 'a0df73f8f8f00281fcacaf686f', '::1', '2022-11-22 05:33:26', '2022-11-22 05:33:26');

-- --------------------------------------------------------

--
-- Table structure for table `oc_attribute`
--

CREATE TABLE `oc_attribute` (
  `attribute_id` int(11) NOT NULL,
  `attribute_group_id` int(11) NOT NULL,
  `sort_order` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_attribute`
--

INSERT INTO `oc_attribute` (`attribute_id`, `attribute_group_id`, `sort_order`) VALUES
(1, 6, 1),
(2, 6, 5),
(3, 6, 3),
(4, 3, 1),
(5, 3, 2),
(6, 3, 3),
(7, 3, 4),
(8, 3, 5),
(9, 3, 6),
(10, 3, 7),
(11, 3, 8);

-- --------------------------------------------------------

--
-- Table structure for table `oc_attribute_description`
--

CREATE TABLE `oc_attribute_description` (
  `attribute_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_attribute_description`
--

INSERT INTO `oc_attribute_description` (`attribute_id`, `language_id`, `name`) VALUES
(1, 1, 'Description'),
(2, 1, 'No. of Cores'),
(4, 1, 'test 1'),
(5, 1, 'test 2'),
(6, 1, 'test 3'),
(7, 1, 'test 4'),
(8, 1, 'test 5'),
(9, 1, 'test 6'),
(10, 1, 'test 7'),
(11, 1, 'test 8'),
(3, 1, 'Clockspeed');

-- --------------------------------------------------------

--
-- Table structure for table `oc_attribute_group`
--

CREATE TABLE `oc_attribute_group` (
  `attribute_group_id` int(11) NOT NULL,
  `sort_order` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_attribute_group`
--

INSERT INTO `oc_attribute_group` (`attribute_group_id`, `sort_order`) VALUES
(3, 2),
(4, 1),
(5, 3),
(6, 4);

-- --------------------------------------------------------

--
-- Table structure for table `oc_attribute_group_description`
--

CREATE TABLE `oc_attribute_group_description` (
  `attribute_group_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_attribute_group_description`
--

INSERT INTO `oc_attribute_group_description` (`attribute_group_id`, `language_id`, `name`) VALUES
(3, 1, 'Memory'),
(4, 1, 'Technical'),
(5, 1, 'Motherboard'),
(6, 1, 'Processor');

-- --------------------------------------------------------

--
-- Table structure for table `oc_banner`
--

CREATE TABLE `oc_banner` (
  `banner_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_banner`
--

INSERT INTO `oc_banner` (`banner_id`, `name`, `status`) VALUES
(9, 'desktop_banners_home', 1),
(10, 'desktop_side_banner', 1),
(11, 'mid_banner', 1),
(12, 'mid_side', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oc_banner_image`
--

CREATE TABLE `oc_banner_image` (
  `banner_image_id` int(11) NOT NULL,
  `banner_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `sort_order` int(3) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_banner_image`
--

INSERT INTO `oc_banner_image` (`banner_image_id`, `banner_id`, `language_id`, `title`, `link`, `image`, `sort_order`) VALUES
(111, 10, 1, 'banner 2', 'index.php?route=product/category&amp;path=59_62', 'catalog/banners/RHS-WEB_2x_2612.jpeg', 0),
(122, 9, 1, 'banner1', 'index.php?route=product/category&amp;path=59_62', 'catalog/banner/b1.jpg', 1),
(121, 9, 1, 'banner 2', 'index.php?route=product/category&amp;path=59_62', 'catalog/banner/b2.jpg', 2),
(112, 11, 1, 'mid1', 'index.php?route=product/category&amp;path=59_62', 'catalog/banners/HeroBanner_1.jpeg', 0),
(113, 11, 1, 'mid2', 'index.php?route=product/category&amp;path=59_62', 'catalog/banners/HeroBanner_3.jpeg', 0),
(114, 12, 1, 'mid1', 'index.php?route=product/category&amp;path=59_62', 'catalog/banners/RHS-WEB_2x_2612.jpeg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `oc_cart`
--

CREATE TABLE `oc_cart` (
  `cart_id` int(11) UNSIGNED NOT NULL,
  `api_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `session_id` varchar(32) NOT NULL,
  `product_id` int(11) NOT NULL,
  `recurring_id` int(11) NOT NULL,
  `option` text NOT NULL,
  `quantity` int(5) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_category`
--

CREATE TABLE `oc_category` (
  `category_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `top` tinyint(1) NOT NULL,
  `column` int(3) NOT NULL,
  `sort_order` int(3) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_category`
--

INSERT INTO `oc_category` (`category_id`, `image`, `parent_id`, `top`, `column`, `sort_order`, `status`, `date_added`, `date_modified`) VALUES
(61, '', 60, 1, 1, 0, 1, '2022-12-31 13:52:00', '2022-12-31 13:54:58'),
(62, '', 60, 1, 1, 0, 1, '2022-12-31 13:52:18', '2022-12-31 13:54:30'),
(60, '', 59, 1, 1, 0, 1, '2022-12-31 13:51:47', '2022-12-31 13:51:47'),
(63, '', 60, 1, 1, 0, 1, '2022-12-31 13:52:31', '2022-12-31 13:54:52'),
(64, '', 60, 1, 1, 0, 1, '2022-12-31 13:52:44', '2022-12-31 13:54:47'),
(72, '', 59, 1, 1, 0, 1, '2022-12-31 14:16:28', '2022-12-31 14:16:28'),
(71, '', 59, 1, 1, 0, 1, '2022-12-31 14:15:59', '2022-12-31 14:15:59'),
(69, 'catalog/shop_by_room/bedroom.jpg', 67, 1, 1, 0, 1, '2022-12-31 14:14:42', '2023-01-02 08:35:03'),
(68, 'catalog/shop_by_room/living_room.jpg', 67, 1, 1, 0, 1, '2022-12-31 14:14:24', '2023-01-02 08:48:07'),
(67, 'catalog/shop_by_room/bedroom.jpg', 59, 1, 1, 0, 1, '2022-12-31 14:14:02', '2023-01-02 08:24:43'),
(66, '', 60, 1, 1, 0, 1, '2022-12-31 13:53:10', '2022-12-31 13:54:36'),
(65, '', 60, 1, 1, 0, 1, '2022-12-31 13:52:57', '2022-12-31 13:54:42'),
(59, '', 0, 1, 1, 0, 1, '2022-12-31 13:51:23', '2022-12-31 13:51:23'),
(74, 'catalog/shop_by_room/study.jpg', 67, 1, 1, 0, 1, '2023-01-02 08:52:41', '2023-01-02 08:58:06'),
(75, 'catalog/shop_by_room/dining.jpg', 67, 1, 1, 0, 1, '2023-01-02 08:57:14', '2023-01-02 08:57:14');

-- --------------------------------------------------------

--
-- Table structure for table `oc_category_description`
--

CREATE TABLE `oc_category_description` (
  `category_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_category_description`
--

INSERT INTO `oc_category_description` (`category_id`, `language_id`, `name`, `description`, `meta_title`, `meta_description`, `meta_keyword`) VALUES
(60, 1, 'Shop by styles', '', 'Shop by styles', '', ''),
(61, 1, 'Art deco', '', 'Art deco', '', ''),
(62, 1, 'Mid-century', '', 'Mid-century', '', ''),
(63, 1, 'Colonial', '', 'Colonial', '', ''),
(64, 1, 'Contemporary', '', 'Contemporary', '', ''),
(65, 1, 'Eclectic', '', 'Eclectic', '', ''),
(66, 1, 'Industrial', '', 'Industrial', '', ''),
(67, 1, 'Shop by room', '', 'Shop by room', '', ''),
(68, 1, 'Living Room', '', 'Living Room', '', ''),
(69, 1, 'Bedroom', '', 'Bedroom', '', ''),
(71, 1, 'Decor', '', 'Decor', '', ''),
(72, 1, 'Furnishings', '', 'Furnishings', '', ''),
(59, 1, 'Header', '', 'Header', '', ''),
(74, 1, 'Study &amp; Office', '&lt;div&gt;&lt;font color=&quot;#555555&quot; face=&quot;Poppins, sans-serif&quot;&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/font&gt;&lt;/div&gt;', 'Study &amp; Office', 'Study &amp; Office', ''),
(75, 1, 'Dining', '', 'Dining', 'Dining', '');

-- --------------------------------------------------------

--
-- Table structure for table `oc_category_filter`
--

CREATE TABLE `oc_category_filter` (
  `category_id` int(11) NOT NULL,
  `filter_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_category_path`
--

CREATE TABLE `oc_category_path` (
  `category_id` int(11) NOT NULL,
  `path_id` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_category_path`
--

INSERT INTO `oc_category_path` (`category_id`, `path_id`, `level`) VALUES
(60, 60, 1),
(60, 59, 0),
(72, 72, 1),
(72, 59, 0),
(71, 71, 1),
(71, 59, 0),
(69, 69, 2),
(69, 67, 1),
(69, 59, 0),
(68, 68, 2),
(68, 59, 0),
(68, 67, 1),
(67, 67, 1),
(67, 59, 0),
(61, 60, 1),
(63, 60, 1),
(64, 60, 1),
(65, 60, 1),
(66, 60, 1),
(62, 60, 1),
(66, 66, 2),
(66, 59, 0),
(65, 65, 2),
(65, 59, 0),
(64, 64, 2),
(64, 59, 0),
(63, 63, 2),
(63, 59, 0),
(62, 62, 2),
(62, 59, 0),
(61, 61, 2),
(61, 59, 0),
(59, 59, 0),
(74, 67, 1),
(74, 59, 0),
(74, 74, 2),
(75, 59, 0),
(75, 67, 1),
(75, 75, 2);

-- --------------------------------------------------------

--
-- Table structure for table `oc_category_to_layout`
--

CREATE TABLE `oc_category_to_layout` (
  `category_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `layout_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_category_to_layout`
--

INSERT INTO `oc_category_to_layout` (`category_id`, `store_id`, `layout_id`) VALUES
(59, 0, 0),
(60, 0, 0),
(61, 0, 0),
(62, 0, 0),
(63, 0, 0),
(64, 0, 0),
(65, 0, 0),
(66, 0, 0),
(67, 0, 0),
(68, 0, 0),
(69, 0, 0),
(71, 0, 0),
(72, 0, 0),
(74, 0, 0),
(75, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `oc_category_to_store`
--

CREATE TABLE `oc_category_to_store` (
  `category_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_category_to_store`
--

INSERT INTO `oc_category_to_store` (`category_id`, `store_id`) VALUES
(59, 0),
(60, 0),
(61, 0),
(62, 0),
(63, 0),
(64, 0),
(65, 0),
(66, 0),
(67, 0),
(68, 0),
(69, 0),
(71, 0),
(72, 0),
(74, 0),
(75, 0);

-- --------------------------------------------------------

--
-- Table structure for table `oc_country`
--

CREATE TABLE `oc_country` (
  `country_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `iso_code_2` varchar(2) NOT NULL,
  `iso_code_3` varchar(3) NOT NULL,
  `address_format` text NOT NULL,
  `postcode_required` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_country`
--

INSERT INTO `oc_country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES
(1, 'Afghanistan', 'AF', 'AFG', '', 0, 1),
(2, 'Albania', 'AL', 'ALB', '', 0, 1),
(3, 'Algeria', 'DZ', 'DZA', '', 0, 1),
(4, 'American Samoa', 'AS', 'ASM', '', 0, 1),
(5, 'Andorra', 'AD', 'AND', '', 0, 1),
(6, 'Angola', 'AO', 'AGO', '', 0, 1),
(7, 'Anguilla', 'AI', 'AIA', '', 0, 1),
(8, 'Antarctica', 'AQ', 'ATA', '', 0, 1),
(9, 'Antigua and Barbuda', 'AG', 'ATG', '', 0, 1),
(10, 'Argentina', 'AR', 'ARG', '', 0, 1),
(11, 'Armenia', 'AM', 'ARM', '', 0, 1),
(12, 'Aruba', 'AW', 'ABW', '', 0, 1),
(13, 'Australia', 'AU', 'AUS', '', 0, 1),
(14, 'Austria', 'AT', 'AUT', '', 0, 1),
(15, 'Azerbaijan', 'AZ', 'AZE', '', 0, 1),
(16, 'Bahamas', 'BS', 'BHS', '', 0, 1),
(17, 'Bahrain', 'BH', 'BHR', '', 0, 1),
(18, 'Bangladesh', 'BD', 'BGD', '', 0, 1),
(19, 'Barbados', 'BB', 'BRB', '', 0, 1),
(20, 'Belarus', 'BY', 'BLR', '', 0, 1),
(21, 'Belgium', 'BE', 'BEL', '{firstname} {lastname}\r\n{company}\r\n{address_1}\r\n{address_2}\r\n{postcode} {city}\r\n{country}', 0, 1),
(22, 'Belize', 'BZ', 'BLZ', '', 0, 1),
(23, 'Benin', 'BJ', 'BEN', '', 0, 1),
(24, 'Bermuda', 'BM', 'BMU', '', 0, 1),
(25, 'Bhutan', 'BT', 'BTN', '', 0, 1),
(26, 'Bolivia', 'BO', 'BOL', '', 0, 1),
(27, 'Bosnia and Herzegovina', 'BA', 'BIH', '', 0, 1),
(28, 'Botswana', 'BW', 'BWA', '', 0, 1),
(29, 'Bouvet Island', 'BV', 'BVT', '', 0, 1),
(30, 'Brazil', 'BR', 'BRA', '', 0, 1),
(31, 'British Indian Ocean Territory', 'IO', 'IOT', '', 0, 1),
(32, 'Brunei Darussalam', 'BN', 'BRN', '', 0, 1),
(33, 'Bulgaria', 'BG', 'BGR', '', 0, 1),
(34, 'Burkina Faso', 'BF', 'BFA', '', 0, 1),
(35, 'Burundi', 'BI', 'BDI', '', 0, 1),
(36, 'Cambodia', 'KH', 'KHM', '', 0, 1),
(37, 'Cameroon', 'CM', 'CMR', '', 0, 1),
(38, 'Canada', 'CA', 'CAN', '', 0, 1),
(39, 'Cape Verde', 'CV', 'CPV', '', 0, 1),
(40, 'Cayman Islands', 'KY', 'CYM', '', 0, 1),
(41, 'Central African Republic', 'CF', 'CAF', '', 0, 1),
(42, 'Chad', 'TD', 'TCD', '', 0, 1),
(43, 'Chile', 'CL', 'CHL', '', 0, 1),
(44, 'China', 'CN', 'CHN', '', 0, 1),
(45, 'Christmas Island', 'CX', 'CXR', '', 0, 1),
(46, 'Cocos (Keeling) Islands', 'CC', 'CCK', '', 0, 1),
(47, 'Colombia', 'CO', 'COL', '', 0, 1),
(48, 'Comoros', 'KM', 'COM', '', 0, 1),
(49, 'Congo', 'CG', 'COG', '', 0, 1),
(50, 'Cook Islands', 'CK', 'COK', '', 0, 1),
(51, 'Costa Rica', 'CR', 'CRI', '', 0, 1),
(52, 'Cote D\'Ivoire', 'CI', 'CIV', '', 0, 1),
(53, 'Croatia', 'HR', 'HRV', '', 0, 1),
(54, 'Cuba', 'CU', 'CUB', '', 0, 1),
(55, 'Cyprus', 'CY', 'CYP', '', 0, 1),
(56, 'Czech Republic', 'CZ', 'CZE', '', 0, 1),
(57, 'Denmark', 'DK', 'DNK', '', 0, 1),
(58, 'Djibouti', 'DJ', 'DJI', '', 0, 1),
(59, 'Dominica', 'DM', 'DMA', '', 0, 1),
(60, 'Dominican Republic', 'DO', 'DOM', '', 0, 1),
(61, 'East Timor', 'TL', 'TLS', '', 0, 1),
(62, 'Ecuador', 'EC', 'ECU', '', 0, 1),
(63, 'Egypt', 'EG', 'EGY', '', 0, 1),
(64, 'El Salvador', 'SV', 'SLV', '', 0, 1),
(65, 'Equatorial Guinea', 'GQ', 'GNQ', '', 0, 1),
(66, 'Eritrea', 'ER', 'ERI', '', 0, 1),
(67, 'Estonia', 'EE', 'EST', '', 0, 1),
(68, 'Ethiopia', 'ET', 'ETH', '', 0, 1),
(69, 'Falkland Islands (Malvinas)', 'FK', 'FLK', '', 0, 1),
(70, 'Faroe Islands', 'FO', 'FRO', '', 0, 1),
(71, 'Fiji', 'FJ', 'FJI', '', 0, 1),
(72, 'Finland', 'FI', 'FIN', '', 0, 1),
(74, 'France, Metropolitan', 'FR', 'FRA', '{firstname} {lastname}\r\n{company}\r\n{address_1}\r\n{address_2}\r\n{postcode} {city}\r\n{country}', 1, 1),
(75, 'French Guiana', 'GF', 'GUF', '', 0, 1),
(76, 'French Polynesia', 'PF', 'PYF', '', 0, 1),
(77, 'French Southern Territories', 'TF', 'ATF', '', 0, 1),
(78, 'Gabon', 'GA', 'GAB', '', 0, 1),
(79, 'Gambia', 'GM', 'GMB', '', 0, 1),
(80, 'Georgia', 'GE', 'GEO', '', 0, 1),
(81, 'Germany', 'DE', 'DEU', '{company}\r\n{firstname} {lastname}\r\n{address_1}\r\n{address_2}\r\n{postcode} {city}\r\n{country}', 1, 1),
(82, 'Ghana', 'GH', 'GHA', '', 0, 1),
(83, 'Gibraltar', 'GI', 'GIB', '', 0, 1),
(84, 'Greece', 'GR', 'GRC', '', 0, 1),
(85, 'Greenland', 'GL', 'GRL', '', 0, 1),
(86, 'Grenada', 'GD', 'GRD', '', 0, 1),
(87, 'Guadeloupe', 'GP', 'GLP', '', 0, 1),
(88, 'Guam', 'GU', 'GUM', '', 0, 1),
(89, 'Guatemala', 'GT', 'GTM', '', 0, 1),
(90, 'Guinea', 'GN', 'GIN', '', 0, 1),
(91, 'Guinea-Bissau', 'GW', 'GNB', '', 0, 1),
(92, 'Guyana', 'GY', 'GUY', '', 0, 1),
(93, 'Haiti', 'HT', 'HTI', '', 0, 1),
(94, 'Heard and Mc Donald Islands', 'HM', 'HMD', '', 0, 1),
(95, 'Honduras', 'HN', 'HND', '', 0, 1),
(96, 'Hong Kong', 'HK', 'HKG', '', 0, 1),
(97, 'Hungary', 'HU', 'HUN', '', 0, 1),
(98, 'Iceland', 'IS', 'ISL', '', 0, 1),
(99, 'India', 'IN', 'IND', '', 0, 1),
(100, 'Indonesia', 'ID', 'IDN', '', 0, 1),
(101, 'Iran (Islamic Republic of)', 'IR', 'IRN', '', 0, 1),
(102, 'Iraq', 'IQ', 'IRQ', '', 0, 1),
(103, 'Ireland', 'IE', 'IRL', '', 0, 1),
(104, 'Israel', 'IL', 'ISR', '', 0, 1),
(105, 'Italy', 'IT', 'ITA', '', 0, 1),
(106, 'Jamaica', 'JM', 'JAM', '', 0, 1),
(107, 'Japan', 'JP', 'JPN', '', 0, 1),
(108, 'Jordan', 'JO', 'JOR', '', 0, 1),
(109, 'Kazakhstan', 'KZ', 'KAZ', '', 0, 1),
(110, 'Kenya', 'KE', 'KEN', '', 0, 1),
(111, 'Kiribati', 'KI', 'KIR', '', 0, 1),
(112, 'North Korea', 'KP', 'PRK', '', 0, 1),
(113, 'South Korea', 'KR', 'KOR', '', 0, 1),
(114, 'Kuwait', 'KW', 'KWT', '', 0, 1),
(115, 'Kyrgyzstan', 'KG', 'KGZ', '', 0, 1),
(116, 'Lao People\'s Democratic Republic', 'LA', 'LAO', '', 0, 1),
(117, 'Latvia', 'LV', 'LVA', '', 0, 1),
(118, 'Lebanon', 'LB', 'LBN', '', 0, 1),
(119, 'Lesotho', 'LS', 'LSO', '', 0, 1),
(120, 'Liberia', 'LR', 'LBR', '', 0, 1),
(121, 'Libyan Arab Jamahiriya', 'LY', 'LBY', '', 0, 1),
(122, 'Liechtenstein', 'LI', 'LIE', '', 0, 1),
(123, 'Lithuania', 'LT', 'LTU', '', 0, 1),
(124, 'Luxembourg', 'LU', 'LUX', '', 0, 1),
(125, 'Macau', 'MO', 'MAC', '', 0, 1),
(126, 'FYROM', 'MK', 'MKD', '', 0, 1),
(127, 'Madagascar', 'MG', 'MDG', '', 0, 1),
(128, 'Malawi', 'MW', 'MWI', '', 0, 1),
(129, 'Malaysia', 'MY', 'MYS', '', 0, 1),
(130, 'Maldives', 'MV', 'MDV', '', 0, 1),
(131, 'Mali', 'ML', 'MLI', '', 0, 1),
(132, 'Malta', 'MT', 'MLT', '', 0, 1),
(133, 'Marshall Islands', 'MH', 'MHL', '', 0, 1),
(134, 'Martinique', 'MQ', 'MTQ', '', 0, 1),
(135, 'Mauritania', 'MR', 'MRT', '', 0, 1),
(136, 'Mauritius', 'MU', 'MUS', '', 0, 1),
(137, 'Mayotte', 'YT', 'MYT', '', 0, 1),
(138, 'Mexico', 'MX', 'MEX', '', 0, 1),
(139, 'Micronesia, Federated States of', 'FM', 'FSM', '', 0, 1),
(140, 'Moldova, Republic of', 'MD', 'MDA', '', 0, 1),
(141, 'Monaco', 'MC', 'MCO', '', 0, 1),
(142, 'Mongolia', 'MN', 'MNG', '', 0, 1),
(143, 'Montserrat', 'MS', 'MSR', '', 0, 1),
(144, 'Morocco', 'MA', 'MAR', '', 0, 1),
(145, 'Mozambique', 'MZ', 'MOZ', '', 0, 1),
(146, 'Myanmar', 'MM', 'MMR', '', 0, 1),
(147, 'Namibia', 'NA', 'NAM', '', 0, 1),
(148, 'Nauru', 'NR', 'NRU', '', 0, 1),
(149, 'Nepal', 'NP', 'NPL', '', 0, 1),
(150, 'Netherlands', 'NL', 'NLD', '', 0, 1),
(151, 'Netherlands Antilles', 'AN', 'ANT', '', 0, 1),
(152, 'New Caledonia', 'NC', 'NCL', '', 0, 1),
(153, 'New Zealand', 'NZ', 'NZL', '', 0, 1),
(154, 'Nicaragua', 'NI', 'NIC', '', 0, 1),
(155, 'Niger', 'NE', 'NER', '', 0, 1),
(156, 'Nigeria', 'NG', 'NGA', '', 0, 1),
(157, 'Niue', 'NU', 'NIU', '', 0, 1),
(158, 'Norfolk Island', 'NF', 'NFK', '', 0, 1),
(159, 'Northern Mariana Islands', 'MP', 'MNP', '', 0, 1),
(160, 'Norway', 'NO', 'NOR', '', 0, 1),
(161, 'Oman', 'OM', 'OMN', '', 0, 1),
(162, 'Pakistan', 'PK', 'PAK', '', 0, 1),
(163, 'Palau', 'PW', 'PLW', '', 0, 1),
(164, 'Panama', 'PA', 'PAN', '', 0, 1),
(165, 'Papua New Guinea', 'PG', 'PNG', '', 0, 1),
(166, 'Paraguay', 'PY', 'PRY', '', 0, 1),
(167, 'Peru', 'PE', 'PER', '', 0, 1),
(168, 'Philippines', 'PH', 'PHL', '', 0, 1),
(169, 'Pitcairn', 'PN', 'PCN', '', 0, 1),
(170, 'Poland', 'PL', 'POL', '', 0, 1),
(171, 'Portugal', 'PT', 'PRT', '', 0, 1),
(172, 'Puerto Rico', 'PR', 'PRI', '', 0, 1),
(173, 'Qatar', 'QA', 'QAT', '', 0, 1),
(174, 'Reunion', 'RE', 'REU', '', 0, 1),
(175, 'Romania', 'RO', 'ROM', '', 0, 1),
(176, 'Russian Federation', 'RU', 'RUS', '', 0, 1),
(177, 'Rwanda', 'RW', 'RWA', '', 0, 1),
(178, 'Saint Kitts and Nevis', 'KN', 'KNA', '', 0, 1),
(179, 'Saint Lucia', 'LC', 'LCA', '', 0, 1),
(180, 'Saint Vincent and the Grenadines', 'VC', 'VCT', '', 0, 1),
(181, 'Samoa', 'WS', 'WSM', '', 0, 1),
(182, 'San Marino', 'SM', 'SMR', '', 0, 1),
(183, 'Sao Tome and Principe', 'ST', 'STP', '', 0, 1),
(184, 'Saudi Arabia', 'SA', 'SAU', '', 0, 1),
(185, 'Senegal', 'SN', 'SEN', '', 0, 1),
(186, 'Seychelles', 'SC', 'SYC', '', 0, 1),
(187, 'Sierra Leone', 'SL', 'SLE', '', 0, 1),
(188, 'Singapore', 'SG', 'SGP', '', 0, 1),
(189, 'Slovak Republic', 'SK', 'SVK', '{firstname} {lastname}\r\n{company}\r\n{address_1}\r\n{address_2}\r\n{city} {postcode}\r\n{zone}\r\n{country}', 0, 1),
(190, 'Slovenia', 'SI', 'SVN', '', 0, 1),
(191, 'Solomon Islands', 'SB', 'SLB', '', 0, 1),
(192, 'Somalia', 'SO', 'SOM', '', 0, 1),
(193, 'South Africa', 'ZA', 'ZAF', '', 0, 1),
(194, 'South Georgia &amp; South Sandwich Islands', 'GS', 'SGS', '', 0, 1),
(195, 'Spain', 'ES', 'ESP', '', 0, 1),
(196, 'Sri Lanka', 'LK', 'LKA', '', 0, 1),
(197, 'St. Helena', 'SH', 'SHN', '', 0, 1),
(198, 'St. Pierre and Miquelon', 'PM', 'SPM', '', 0, 1),
(199, 'Sudan', 'SD', 'SDN', '', 0, 1),
(200, 'Suriname', 'SR', 'SUR', '', 0, 1),
(201, 'Svalbard and Jan Mayen Islands', 'SJ', 'SJM', '', 0, 1),
(202, 'Swaziland', 'SZ', 'SWZ', '', 0, 1),
(203, 'Sweden', 'SE', 'SWE', '{company}\r\n{firstname} {lastname}\r\n{address_1}\r\n{address_2}\r\n{postcode} {city}\r\n{country}', 1, 1),
(204, 'Switzerland', 'CH', 'CHE', '', 0, 1),
(205, 'Syrian Arab Republic', 'SY', 'SYR', '', 0, 1),
(206, 'Taiwan', 'TW', 'TWN', '', 0, 1),
(207, 'Tajikistan', 'TJ', 'TJK', '', 0, 1),
(208, 'Tanzania, United Republic of', 'TZ', 'TZA', '', 0, 1),
(209, 'Thailand', 'TH', 'THA', '', 0, 1),
(210, 'Togo', 'TG', 'TGO', '', 0, 1),
(211, 'Tokelau', 'TK', 'TKL', '', 0, 1),
(212, 'Tonga', 'TO', 'TON', '', 0, 1),
(213, 'Trinidad and Tobago', 'TT', 'TTO', '', 0, 1),
(214, 'Tunisia', 'TN', 'TUN', '', 0, 1),
(215, 'Turkey', 'TR', 'TUR', '', 0, 1),
(216, 'Turkmenistan', 'TM', 'TKM', '', 0, 1),
(217, 'Turks and Caicos Islands', 'TC', 'TCA', '', 0, 1),
(218, 'Tuvalu', 'TV', 'TUV', '', 0, 1),
(219, 'Uganda', 'UG', 'UGA', '', 0, 1),
(220, 'Ukraine', 'UA', 'UKR', '', 0, 1),
(221, 'United Arab Emirates', 'AE', 'ARE', '', 0, 1),
(222, 'United Kingdom', 'GB', 'GBR', '', 1, 1),
(223, 'United States', 'US', 'USA', '{firstname} {lastname}\r\n{company}\r\n{address_1}\r\n{address_2}\r\n{city}, {zone} {postcode}\r\n{country}', 0, 1),
(224, 'United States Minor Outlying Islands', 'UM', 'UMI', '', 0, 1),
(225, 'Uruguay', 'UY', 'URY', '', 0, 1),
(226, 'Uzbekistan', 'UZ', 'UZB', '', 0, 1),
(227, 'Vanuatu', 'VU', 'VUT', '', 0, 1),
(228, 'Vatican City State (Holy See)', 'VA', 'VAT', '', 0, 1),
(229, 'Venezuela', 'VE', 'VEN', '', 0, 1),
(230, 'Viet Nam', 'VN', 'VNM', '', 0, 1),
(231, 'Virgin Islands (British)', 'VG', 'VGB', '', 0, 1),
(232, 'Virgin Islands (U.S.)', 'VI', 'VIR', '', 0, 1),
(233, 'Wallis and Futuna Islands', 'WF', 'WLF', '', 0, 1),
(234, 'Western Sahara', 'EH', 'ESH', '', 0, 1),
(235, 'Yemen', 'YE', 'YEM', '', 0, 1),
(237, 'Democratic Republic of Congo', 'CD', 'COD', '', 0, 1),
(238, 'Zambia', 'ZM', 'ZMB', '', 0, 1),
(239, 'Zimbabwe', 'ZW', 'ZWE', '', 0, 1),
(242, 'Montenegro', 'ME', 'MNE', '', 0, 1),
(243, 'Serbia', 'RS', 'SRB', '', 0, 1),
(244, 'Aaland Islands', 'AX', 'ALA', '', 0, 1),
(245, 'Bonaire, Sint Eustatius and Saba', 'BQ', 'BES', '', 0, 1),
(246, 'Curacao', 'CW', 'CUW', '', 0, 1),
(247, 'Palestinian Territory, Occupied', 'PS', 'PSE', '', 0, 1),
(248, 'South Sudan', 'SS', 'SSD', '', 0, 1),
(249, 'St. Barthelemy', 'BL', 'BLM', '', 0, 1),
(250, 'St. Martin (French part)', 'MF', 'MAF', '', 0, 1),
(251, 'Canary Islands', 'IC', 'ICA', '', 0, 1),
(252, 'Ascension Island (British)', 'AC', 'ASC', '', 0, 1),
(253, 'Kosovo, Republic of', 'XK', 'UNK', '', 0, 1),
(254, 'Isle of Man', 'IM', 'IMN', '', 0, 1),
(255, 'Tristan da Cunha', 'TA', 'SHN', '', 0, 1),
(256, 'Guernsey', 'GG', 'GGY', '', 0, 1),
(257, 'Jersey', 'JE', 'JEY', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `oc_coupon`
--

CREATE TABLE `oc_coupon` (
  `coupon_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `code` varchar(20) NOT NULL,
  `type` char(1) NOT NULL,
  `discount` decimal(15,4) NOT NULL,
  `logged` tinyint(1) NOT NULL,
  `shipping` tinyint(1) NOT NULL,
  `total` decimal(15,4) NOT NULL,
  `date_start` date NOT NULL DEFAULT '0000-00-00',
  `date_end` date NOT NULL DEFAULT '0000-00-00',
  `uses_total` int(11) NOT NULL,
  `uses_customer` varchar(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_coupon`
--

INSERT INTO `oc_coupon` (`coupon_id`, `name`, `code`, `type`, `discount`, `logged`, `shipping`, `total`, `date_start`, `date_end`, `uses_total`, `uses_customer`, `status`, `date_added`) VALUES
(4, '-10% Discount', '2222', 'P', '10.0000', 0, 0, '0.0000', '2014-01-01', '2020-01-01', 10, '10', 0, '2009-01-27 13:55:03'),
(5, 'Free Shipping', '3333', 'P', '0.0000', 0, 1, '100.0000', '2014-01-01', '2014-02-01', 10, '10', 0, '2009-03-14 21:13:53'),
(6, '-10.00 Discount', '1111', 'F', '10.0000', 0, 0, '10.0000', '2014-01-01', '2020-01-01', 100000, '10000', 0, '2009-03-14 21:15:18');

-- --------------------------------------------------------

--
-- Table structure for table `oc_coupon_category`
--

CREATE TABLE `oc_coupon_category` (
  `coupon_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_coupon_history`
--

CREATE TABLE `oc_coupon_history` (
  `coupon_history_id` int(11) NOT NULL,
  `coupon_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount` decimal(15,4) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_coupon_product`
--

CREATE TABLE `oc_coupon_product` (
  `coupon_product_id` int(11) NOT NULL,
  `coupon_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_currency`
--

CREATE TABLE `oc_currency` (
  `currency_id` int(11) NOT NULL,
  `title` varchar(32) NOT NULL,
  `code` varchar(3) NOT NULL,
  `symbol_left` varchar(12) NOT NULL,
  `symbol_right` varchar(12) NOT NULL,
  `decimal_place` char(1) NOT NULL,
  `value` double(15,8) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_currency`
--

INSERT INTO `oc_currency` (`currency_id`, `title`, `code`, `symbol_left`, `symbol_right`, `decimal_place`, `value`, `status`, `date_modified`) VALUES
(4, 'Rupees', 'INR', '₹', '', '2', 1.00000000, 1, '2023-03-03 16:22:35');

-- --------------------------------------------------------

--
-- Table structure for table `oc_customer`
--

CREATE TABLE `oc_customer` (
  `customer_id` int(11) NOT NULL,
  `customer_group_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL DEFAULT 0,
  `language_id` int(11) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `email` varchar(96) NOT NULL,
  `telephone` varchar(32) NOT NULL,
  `fax` varchar(32) NOT NULL,
  `password` varchar(40) NOT NULL,
  `salt` varchar(9) NOT NULL,
  `cart` text DEFAULT NULL,
  `wishlist` text DEFAULT NULL,
  `newsletter` tinyint(1) NOT NULL DEFAULT 0,
  `address_id` int(11) NOT NULL DEFAULT 0,
  `custom_field` text NOT NULL,
  `ip` varchar(40) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `safe` tinyint(1) NOT NULL,
  `token` text NOT NULL,
  `code` varchar(40) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_customer_activity`
--

CREATE TABLE `oc_customer_activity` (
  `customer_activity_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `key` varchar(64) NOT NULL,
  `data` text NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_customer_affiliate`
--

CREATE TABLE `oc_customer_affiliate` (
  `customer_id` int(11) NOT NULL,
  `company` varchar(40) NOT NULL,
  `website` varchar(255) NOT NULL,
  `tracking` varchar(64) NOT NULL,
  `commission` decimal(4,2) NOT NULL DEFAULT 0.00,
  `tax` varchar(64) NOT NULL,
  `payment` varchar(6) NOT NULL,
  `cheque` varchar(100) NOT NULL,
  `paypal` varchar(64) NOT NULL,
  `bank_name` varchar(64) NOT NULL,
  `bank_branch_number` varchar(64) NOT NULL,
  `bank_swift_code` varchar(64) NOT NULL,
  `bank_account_name` varchar(64) NOT NULL,
  `bank_account_number` varchar(64) NOT NULL,
  `custom_field` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_customer_approval`
--

CREATE TABLE `oc_customer_approval` (
  `customer_approval_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `type` varchar(9) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_customer_group`
--

CREATE TABLE `oc_customer_group` (
  `customer_group_id` int(11) NOT NULL,
  `approval` int(1) NOT NULL,
  `sort_order` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_customer_group`
--

INSERT INTO `oc_customer_group` (`customer_group_id`, `approval`, `sort_order`) VALUES
(1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `oc_customer_group_description`
--

CREATE TABLE `oc_customer_group_description` (
  `customer_group_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_customer_group_description`
--

INSERT INTO `oc_customer_group_description` (`customer_group_id`, `language_id`, `name`, `description`) VALUES
(1, 1, 'Default', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `oc_customer_history`
--

CREATE TABLE `oc_customer_history` (
  `customer_history_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_customer_ip`
--

CREATE TABLE `oc_customer_ip` (
  `customer_ip_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_customer_login`
--

CREATE TABLE `oc_customer_login` (
  `customer_login_id` int(11) NOT NULL,
  `email` varchar(96) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `total` int(4) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_customer_online`
--

CREATE TABLE `oc_customer_online` (
  `ip` varchar(40) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `url` text NOT NULL,
  `referer` text NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_customer_online`
--

INSERT INTO `oc_customer_online` (`ip`, `customer_id`, `url`, `referer`, `date_added`) VALUES
('::1', 0, 'http://localhost/banjara_homes/', '', '2023-04-28 11:38:24');

-- --------------------------------------------------------

--
-- Table structure for table `oc_customer_reward`
--

CREATE TABLE `oc_customer_reward` (
  `customer_reward_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL DEFAULT 0,
  `order_id` int(11) NOT NULL DEFAULT 0,
  `description` text NOT NULL,
  `points` int(8) NOT NULL DEFAULT 0,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_customer_search`
--

CREATE TABLE `oc_customer_search` (
  `customer_search_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category` tinyint(1) NOT NULL,
  `description` tinyint(1) NOT NULL,
  `products` int(11) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_customer_search`
--

INSERT INTO `oc_customer_search` (`customer_search_id`, `store_id`, `language_id`, `customer_id`, `keyword`, `category_id`, `sub_category`, `description`, `products`, `ip`, `date_added`) VALUES
(1, 0, 1, 0, 'king size', 0, 0, 0, 0, '::1', '2022-12-31 11:49:07'),
(2, 0, 1, 0, 'king size', 57, 0, 0, 0, '::1', '2022-12-31 11:49:45'),
(3, 0, 1, 0, 'fabric sofas', 57, 0, 0, 0, '::1', '2022-12-31 11:51:28'),
(4, 0, 1, 0, 'coffee tables', 57, 0, 0, 0, '::1', '2022-12-31 11:51:53');

-- --------------------------------------------------------

--
-- Table structure for table `oc_customer_transaction`
--

CREATE TABLE `oc_customer_transaction` (
  `customer_transaction_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `amount` decimal(15,4) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_customer_wishlist`
--

CREATE TABLE `oc_customer_wishlist` (
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_custom_field`
--

CREATE TABLE `oc_custom_field` (
  `custom_field_id` int(11) NOT NULL,
  `type` varchar(32) NOT NULL,
  `value` text NOT NULL,
  `validation` varchar(255) NOT NULL,
  `location` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `sort_order` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_custom_field_customer_group`
--

CREATE TABLE `oc_custom_field_customer_group` (
  `custom_field_id` int(11) NOT NULL,
  `customer_group_id` int(11) NOT NULL,
  `required` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_custom_field_description`
--

CREATE TABLE `oc_custom_field_description` (
  `custom_field_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_custom_field_value`
--

CREATE TABLE `oc_custom_field_value` (
  `custom_field_value_id` int(11) NOT NULL,
  `custom_field_id` int(11) NOT NULL,
  `sort_order` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_custom_field_value_description`
--

CREATE TABLE `oc_custom_field_value_description` (
  `custom_field_value_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `custom_field_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_download`
--

CREATE TABLE `oc_download` (
  `download_id` int(11) NOT NULL,
  `filename` varchar(160) NOT NULL,
  `mask` varchar(128) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_download_description`
--

CREATE TABLE `oc_download_description` (
  `download_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_event`
--

CREATE TABLE `oc_event` (
  `event_id` int(11) NOT NULL,
  `code` varchar(64) NOT NULL,
  `trigger` text NOT NULL,
  `action` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `sort_order` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_event`
--

INSERT INTO `oc_event` (`event_id`, `code`, `trigger`, `action`, `status`, `sort_order`) VALUES
(1, 'activity_customer_add', 'catalog/model/account/customer/addCustomer/after', 'event/activity/addCustomer', 1, 0),
(2, 'activity_customer_edit', 'catalog/model/account/customer/editCustomer/after', 'event/activity/editCustomer', 1, 0),
(3, 'activity_customer_password', 'catalog/model/account/customer/editPassword/after', 'event/activity/editPassword', 1, 0),
(4, 'activity_customer_forgotten', 'catalog/model/account/customer/editCode/after', 'event/activity/forgotten', 1, 0),
(5, 'activity_transaction', 'catalog/model/account/customer/addTransaction/after', 'event/activity/addTransaction', 1, 0),
(6, 'activity_customer_login', 'catalog/model/account/customer/deleteLoginAttempts/after', 'event/activity/login', 1, 0),
(7, 'activity_address_add', 'catalog/model/account/address/addAddress/after', 'event/activity/addAddress', 1, 0),
(8, 'activity_address_edit', 'catalog/model/account/address/editAddress/after', 'event/activity/editAddress', 1, 0),
(9, 'activity_address_delete', 'catalog/model/account/address/deleteAddress/after', 'event/activity/deleteAddress', 1, 0),
(10, 'activity_affiliate_add', 'catalog/model/account/customer/addAffiliate/after', 'event/activity/addAffiliate', 1, 0),
(11, 'activity_affiliate_edit', 'catalog/model/account/customer/editAffiliate/after', 'event/activity/editAffiliate', 1, 0),
(12, 'activity_order_add', 'catalog/model/checkout/order/addOrderHistory/before', 'event/activity/addOrderHistory', 1, 0),
(13, 'activity_return_add', 'catalog/model/account/return/addReturn/after', 'event/activity/addReturn', 1, 0),
(14, 'mail_transaction', 'catalog/model/account/customer/addTransaction/after', 'mail/transaction', 1, 0),
(15, 'mail_forgotten', 'catalog/model/account/customer/editCode/after', 'mail/forgotten', 1, 0),
(16, 'mail_customer_add', 'catalog/model/account/customer/addCustomer/after', 'mail/register', 1, 0),
(17, 'mail_customer_alert', 'catalog/model/account/customer/addCustomer/after', 'mail/register/alert', 1, 0),
(18, 'mail_affiliate_add', 'catalog/model/account/customer/addAffiliate/after', 'mail/affiliate', 1, 0),
(19, 'mail_affiliate_alert', 'catalog/model/account/customer/addAffiliate/after', 'mail/affiliate/alert', 1, 0),
(20, 'mail_voucher', 'catalog/model/checkout/order/addOrderHistory/after', 'extension/total/voucher/send', 1, 0),
(21, 'mail_order_add', 'catalog/model/checkout/order/addOrderHistory/before', 'mail/order', 1, 0),
(22, 'mail_order_alert', 'catalog/model/checkout/order/addOrderHistory/before', 'mail/order/alert', 1, 0),
(23, 'statistics_review_add', 'catalog/model/catalog/review/addReview/after', 'event/statistics/addReview', 1, 0),
(24, 'statistics_return_add', 'catalog/model/account/return/addReturn/after', 'event/statistics/addReturn', 1, 0),
(25, 'statistics_order_history', 'catalog/model/checkout/order/addOrderHistory/after', 'event/statistics/addOrderHistory', 1, 0),
(26, 'admin_mail_affiliate_approve', 'admin/model/customer/customer_approval/approveAffiliate/after', 'mail/affiliate/approve', 1, 0),
(27, 'admin_mail_affiliate_deny', 'admin/model/customer/customer_approval/denyAffiliate/after', 'mail/affiliate/deny', 1, 0),
(28, 'admin_mail_customer_approve', 'admin/model/customer/customer_approval/approveCustomer/after', 'mail/customer/approve', 1, 0),
(29, 'admin_mail_customer_deny', 'admin/model/customer/customer_approval/denyCustomer/after', 'mail/customer/deny', 1, 0),
(30, 'admin_mail_reward', 'admin/model/customer/customer/addReward/after', 'mail/reward', 1, 0),
(31, 'admin_mail_transaction', 'admin/model/customer/customer/addTransaction/after', 'mail/transaction', 1, 0),
(32, 'admin_mail_return', 'admin/model/sale/return/addReturnHistory/after', 'mail/return', 1, 0),
(33, 'admin_mail_forgotten', 'admin/model/user/user/editCode/after', 'mail/forgotten', 1, 0),
(34, 'advertise_google', 'admin/model/catalog/product/deleteProduct/after', 'extension/advertise/google/deleteProduct', 1, 0),
(35, 'advertise_google', 'admin/model/catalog/product/copyProduct/after', 'extension/advertise/google/copyProduct', 1, 0),
(36, 'advertise_google', 'admin/view/common/column_left/before', 'extension/advertise/google/admin_link', 1, 0),
(37, 'advertise_google', 'admin/model/catalog/product/addProduct/after', 'extension/advertise/google/addProduct', 1, 0),
(38, 'advertise_google', 'catalog/controller/checkout/success/before', 'extension/advertise/google/before_checkout_success', 1, 0),
(39, 'advertise_google', 'catalog/view/common/header/after', 'extension/advertise/google/google_global_site_tag', 1, 0),
(40, 'advertise_google', 'catalog/view/common/success/after', 'extension/advertise/google/google_dynamic_remarketing_purchase', 1, 0),
(41, 'advertise_google', 'catalog/view/product/product/after', 'extension/advertise/google/google_dynamic_remarketing_product', 1, 0),
(42, 'advertise_google', 'catalog/view/product/search/after', 'extension/advertise/google/google_dynamic_remarketing_searchresults', 1, 0),
(43, 'advertise_google', 'catalog/view/product/category/after', 'extension/advertise/google/google_dynamic_remarketing_category', 1, 0),
(44, 'advertise_google', 'catalog/view/common/home/after', 'extension/advertise/google/google_dynamic_remarketing_home', 1, 0),
(45, 'advertise_google', 'catalog/view/checkout/cart/after', 'extension/advertise/google/google_dynamic_remarketing_cart', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `oc_extension`
--

CREATE TABLE `oc_extension` (
  `extension_id` int(11) NOT NULL,
  `type` varchar(32) NOT NULL,
  `code` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_extension`
--

INSERT INTO `oc_extension` (`extension_id`, `type`, `code`) VALUES
(45, 'payment', 'pumcp'),
(2, 'total', 'shipping'),
(3, 'total', 'sub_total'),
(4, 'total', 'tax'),
(5, 'total', 'total'),
(6, 'module', 'banner'),
(7, 'module', 'carousel'),
(8, 'total', 'credit'),
(9, 'shipping', 'flat'),
(10, 'total', 'handling'),
(11, 'total', 'low_order_fee'),
(12, 'total', 'coupon'),
(13, 'module', 'category'),
(14, 'module', 'account'),
(15, 'total', 'reward'),
(16, 'total', 'voucher'),
(17, 'payment', 'free_checkout'),
(18, 'module', 'featured'),
(19, 'module', 'slideshow'),
(20, 'theme', 'default'),
(21, 'dashboard', 'activity'),
(22, 'dashboard', 'sale'),
(23, 'dashboard', 'recent'),
(24, 'dashboard', 'order'),
(25, 'dashboard', 'online'),
(26, 'dashboard', 'map'),
(27, 'dashboard', 'customer'),
(28, 'dashboard', 'chart'),
(29, 'report', 'sale_coupon'),
(31, 'report', 'customer_search'),
(32, 'report', 'customer_transaction'),
(33, 'report', 'product_purchased'),
(34, 'report', 'product_viewed'),
(35, 'report', 'sale_return'),
(36, 'report', 'sale_order'),
(37, 'report', 'sale_shipping'),
(38, 'report', 'sale_tax'),
(39, 'report', 'customer_activity'),
(40, 'report', 'customer_order'),
(41, 'report', 'customer_reward'),
(42, 'advertise', 'google'),
(43, 'module', 'elfinder'),
(44, 'payment', 'codfee');

-- --------------------------------------------------------

--
-- Table structure for table `oc_extension_install`
--

CREATE TABLE `oc_extension_install` (
  `extension_install_id` int(11) NOT NULL,
  `extension_download_id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_extension_install`
--

INSERT INTO `oc_extension_install` (`extension_install_id`, `extension_download_id`, `filename`, `date_added`) VALUES
(8, 0, 'FacebookConversionAPIFacebookPixelDynamicAds30X.ocmod.zip', '2022-11-22 05:40:43'),
(9, 0, '3xpayumoney.ocmod.zip', '2022-11-22 05:53:31'),
(10, 0, 'opencart-3-x-export-import-multilingual-4-13-cloud.ocmod.zip', '2022-11-22 05:56:21'),
(7, 0, 'excodfee.ocmod.zip', '2022-11-22 05:37:51');

-- --------------------------------------------------------

--
-- Table structure for table `oc_extension_path`
--

CREATE TABLE `oc_extension_path` (
  `extension_path_id` int(11) NOT NULL,
  `extension_install_id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_extension_path`
--

INSERT INTO `oc_extension_path` (`extension_path_id`, `extension_install_id`, `path`, `date_added`) VALUES
(2751, 8, 'admin/language/english', '2022-11-22 05:40:43'),
(2752, 8, 'admin/language/english/extension', '2022-11-22 05:40:43'),
(2753, 8, 'admin/model/extension/fbcapidyad.php', '2022-11-22 05:40:43'),
(2754, 8, 'catalog/model/extension/fbcapidyad.php', '2022-11-22 05:40:43'),
(2755, 8, 'admin/language/en-gb/extension/fbcapidyad.php', '2022-11-22 05:40:43'),
(2756, 8, 'admin/language/english/extension/fbcapidyad.php', '2022-11-22 05:40:43'),
(2757, 9, 'admin/controller/extension/payment/pumcp.php', '2022-11-22 05:53:31'),
(2758, 9, 'admin/view/image/payment/Thumbs.db', '2022-11-22 05:53:31'),
(2759, 9, 'admin/view/image/payment/citrus.png', '2022-11-22 05:53:31'),
(2760, 9, 'admin/view/image/payment/payulogo.png', '2022-11-22 05:53:31'),
(2761, 9, 'catalog/controller/extension/payment/pumcp.php', '2022-11-22 05:53:31'),
(2762, 9, 'catalog/controller/extension/payment/pumcp.php__', '2022-11-22 05:53:31'),
(2763, 9, 'catalog/model/extension/payment/pumcp.php', '2022-11-22 05:53:31'),
(2764, 9, 'admin/language/en-gb/extension/payment/pumcp.php', '2022-11-22 05:53:31'),
(2765, 9, 'admin/view/template/extension/payment/pumcp.twig', '2022-11-22 05:53:31'),
(2766, 9, 'catalog/language/en-gb/extension/payment/pumcp.php', '2022-11-22 05:53:31'),
(2767, 9, 'catalog/view/theme/default/template/extension/payment/pumcp_cancelled.twig', '2022-11-22 05:53:31'),
(2768, 9, 'catalog/view/theme/default/template/extension/payment/pumcp_citrus.twig', '2022-11-22 05:53:31'),
(2769, 9, 'catalog/view/theme/default/template/extension/payment/pumcp_failure.twig', '2022-11-22 05:53:31'),
(2770, 9, 'catalog/view/theme/default/template/extension/payment/pumcp_payu.twig', '2022-11-22 05:53:31'),
(2771, 9, 'catalog/view/theme/default/template/extension/payment/pumcp_success.twig', '2022-11-22 05:53:31'),
(2772, 10, 'system/library/export_import', '2022-11-22 05:56:22'),
(2773, 10, 'admin/controller/extension/export_import.php', '2022-11-22 05:56:22'),
(2774, 10, 'admin/model/extension/export_import.php', '2022-11-22 05:56:22'),
(2775, 10, 'admin/view/image/export-import', '2022-11-22 05:56:22'),
(2776, 10, 'admin/view/stylesheet/export_import.css', '2022-11-22 05:56:22'),
(2777, 10, 'system/library/export_import/composer.json', '2022-11-22 05:56:22'),
(2778, 10, 'system/library/export_import/composer.lock', '2022-11-22 05:56:22'),
(2779, 10, 'system/library/export_import/vendor', '2022-11-22 05:56:22'),
(2780, 10, 'admin/language/en-gb/extension/export_import.php', '2022-11-22 05:56:22'),
(2781, 10, 'admin/view/image/export-import/loading.gif', '2022-11-22 05:56:22'),
(2782, 10, 'admin/view/template/extension/export_import.twig', '2022-11-22 05:56:22'),
(2783, 10, 'system/library/export_import/vendor/autoload.php', '2022-11-22 05:56:22'),
(2784, 10, 'system/library/export_import/vendor/composer', '2022-11-22 05:56:22'),
(2785, 10, 'system/library/export_import/vendor/ezyang', '2022-11-22 05:56:22'),
(2786, 10, 'system/library/export_import/vendor/maennchen', '2022-11-22 05:56:22'),
(2787, 10, 'system/library/export_import/vendor/markbaker', '2022-11-22 05:56:22'),
(2788, 10, 'system/library/export_import/vendor/myclabs', '2022-11-22 05:56:22'),
(2789, 10, 'system/library/export_import/vendor/phpoffice', '2022-11-22 05:56:22'),
(2790, 10, 'system/library/export_import/vendor/psr', '2022-11-22 05:56:22'),
(2791, 10, 'system/library/export_import/vendor/symfony', '2022-11-22 05:56:22'),
(2792, 10, 'system/library/export_import/vendor/composer/ClassLoader.php', '2022-11-22 05:56:22'),
(2793, 10, 'system/library/export_import/vendor/composer/InstalledVersions.php', '2022-11-22 05:56:22'),
(2794, 10, 'system/library/export_import/vendor/composer/LICENSE', '2022-11-22 05:56:22'),
(2795, 10, 'system/library/export_import/vendor/composer/autoload_classmap.php', '2022-11-22 05:56:22'),
(2796, 10, 'system/library/export_import/vendor/composer/autoload_files.php', '2022-11-22 05:56:22'),
(2797, 10, 'system/library/export_import/vendor/composer/autoload_namespaces.php', '2022-11-22 05:56:22'),
(2798, 10, 'system/library/export_import/vendor/composer/autoload_psr4.php', '2022-11-22 05:56:22'),
(2799, 10, 'system/library/export_import/vendor/composer/autoload_real.php', '2022-11-22 05:56:22'),
(2800, 10, 'system/library/export_import/vendor/composer/autoload_static.php', '2022-11-22 05:56:22'),
(2801, 10, 'system/library/export_import/vendor/composer/installed.json', '2022-11-22 05:56:22'),
(2802, 10, 'system/library/export_import/vendor/composer/installed.php', '2022-11-22 05:56:22'),
(2803, 10, 'system/library/export_import/vendor/composer/platform_check.php', '2022-11-22 05:56:22'),
(2804, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier', '2022-11-22 05:56:22'),
(2805, 10, 'system/library/export_import/vendor/maennchen/zipstream-php', '2022-11-22 05:56:22'),
(2806, 10, 'system/library/export_import/vendor/markbaker/complex', '2022-11-22 05:56:22'),
(2807, 10, 'system/library/export_import/vendor/markbaker/matrix', '2022-11-22 05:56:22'),
(2808, 10, 'system/library/export_import/vendor/myclabs/php-enum', '2022-11-22 05:56:22'),
(2809, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet', '2022-11-22 05:56:22'),
(2810, 10, 'system/library/export_import/vendor/psr/http-client', '2022-11-22 05:56:22'),
(2811, 10, 'system/library/export_import/vendor/psr/http-factory', '2022-11-22 05:56:22'),
(2812, 10, 'system/library/export_import/vendor/psr/http-message', '2022-11-22 05:56:22'),
(2813, 10, 'system/library/export_import/vendor/psr/simple-cache', '2022-11-22 05:56:22'),
(2814, 10, 'system/library/export_import/vendor/symfony/polyfill-mbstring', '2022-11-22 05:56:22'),
(2815, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/CREDITS', '2022-11-22 05:56:22'),
(2816, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/LICENSE', '2022-11-22 05:56:22'),
(2817, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/README.md', '2022-11-22 05:56:22'),
(2818, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/VERSION', '2022-11-22 05:56:22'),
(2819, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/composer.json', '2022-11-22 05:56:22'),
(2820, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library', '2022-11-22 05:56:22'),
(2821, 10, 'system/library/export_import/vendor/maennchen/zipstream-php/CHANGELOG.md', '2022-11-22 05:56:22'),
(2822, 10, 'system/library/export_import/vendor/maennchen/zipstream-php/CONTRIBUTING.md', '2022-11-22 05:56:22'),
(2823, 10, 'system/library/export_import/vendor/maennchen/zipstream-php/LICENSE', '2022-11-22 05:56:22'),
(2824, 10, 'system/library/export_import/vendor/maennchen/zipstream-php/README.md', '2022-11-22 05:56:22'),
(2825, 10, 'system/library/export_import/vendor/maennchen/zipstream-php/composer.json', '2022-11-22 05:56:22'),
(2826, 10, 'system/library/export_import/vendor/maennchen/zipstream-php/phpunit.xml.dist', '2022-11-22 05:56:22'),
(2827, 10, 'system/library/export_import/vendor/maennchen/zipstream-php/psalm.xml', '2022-11-22 05:56:22'),
(2828, 10, 'system/library/export_import/vendor/maennchen/zipstream-php/src', '2022-11-22 05:56:22'),
(2829, 10, 'system/library/export_import/vendor/maennchen/zipstream-php/test', '2022-11-22 05:56:22'),
(2830, 10, 'system/library/export_import/vendor/markbaker/complex/README.md', '2022-11-22 05:56:22'),
(2831, 10, 'system/library/export_import/vendor/markbaker/complex/classes', '2022-11-22 05:56:22'),
(2832, 10, 'system/library/export_import/vendor/markbaker/complex/composer.json', '2022-11-22 05:56:22'),
(2833, 10, 'system/library/export_import/vendor/markbaker/complex/examples', '2022-11-22 05:56:22'),
(2834, 10, 'system/library/export_import/vendor/markbaker/complex/license.md', '2022-11-22 05:56:22'),
(2835, 10, 'system/library/export_import/vendor/markbaker/matrix/README.md', '2022-11-22 05:56:22'),
(2836, 10, 'system/library/export_import/vendor/markbaker/matrix/buildPhar.php', '2022-11-22 05:56:22'),
(2837, 10, 'system/library/export_import/vendor/markbaker/matrix/classes', '2022-11-22 05:56:22'),
(2838, 10, 'system/library/export_import/vendor/markbaker/matrix/composer.json', '2022-11-22 05:56:22'),
(2839, 10, 'system/library/export_import/vendor/markbaker/matrix/examples', '2022-11-22 05:56:22'),
(2840, 10, 'system/library/export_import/vendor/markbaker/matrix/infection.json.dist', '2022-11-22 05:56:22'),
(2841, 10, 'system/library/export_import/vendor/markbaker/matrix/license.md', '2022-11-22 05:56:22'),
(2842, 10, 'system/library/export_import/vendor/markbaker/matrix/phpstan.neon', '2022-11-22 05:56:22'),
(2843, 10, 'system/library/export_import/vendor/myclabs/php-enum/LICENSE', '2022-11-22 05:56:22'),
(2844, 10, 'system/library/export_import/vendor/myclabs/php-enum/README.md', '2022-11-22 05:56:22'),
(2845, 10, 'system/library/export_import/vendor/myclabs/php-enum/SECURITY.md', '2022-11-22 05:56:22'),
(2846, 10, 'system/library/export_import/vendor/myclabs/php-enum/composer.json', '2022-11-22 05:56:22'),
(2847, 10, 'system/library/export_import/vendor/myclabs/php-enum/psalm.xml', '2022-11-22 05:56:22'),
(2848, 10, 'system/library/export_import/vendor/myclabs/php-enum/src', '2022-11-22 05:56:22'),
(2849, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/CHANGELOG.md', '2022-11-22 05:56:22'),
(2850, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/CONTRIBUTING.md', '2022-11-22 05:56:22'),
(2851, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/LICENSE', '2022-11-22 05:56:22'),
(2852, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/README.md', '2022-11-22 05:56:22'),
(2853, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/composer.json', '2022-11-22 05:56:22'),
(2854, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/phpstan-baseline.neon', '2022-11-22 05:56:22'),
(2855, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/phpstan.neon.dist', '2022-11-22 05:56:22'),
(2856, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src', '2022-11-22 05:56:22'),
(2857, 10, 'system/library/export_import/vendor/psr/http-client/CHANGELOG.md', '2022-11-22 05:56:22'),
(2858, 10, 'system/library/export_import/vendor/psr/http-client/LICENSE', '2022-11-22 05:56:22'),
(2859, 10, 'system/library/export_import/vendor/psr/http-client/README.md', '2022-11-22 05:56:22'),
(2860, 10, 'system/library/export_import/vendor/psr/http-client/composer.json', '2022-11-22 05:56:22'),
(2861, 10, 'system/library/export_import/vendor/psr/http-client/src', '2022-11-22 05:56:22'),
(2862, 10, 'system/library/export_import/vendor/psr/http-factory/LICENSE', '2022-11-22 05:56:22'),
(2863, 10, 'system/library/export_import/vendor/psr/http-factory/README.md', '2022-11-22 05:56:22'),
(2864, 10, 'system/library/export_import/vendor/psr/http-factory/composer.json', '2022-11-22 05:56:22'),
(2865, 10, 'system/library/export_import/vendor/psr/http-factory/src', '2022-11-22 05:56:22'),
(2866, 10, 'system/library/export_import/vendor/psr/http-message/CHANGELOG.md', '2022-11-22 05:56:22'),
(2867, 10, 'system/library/export_import/vendor/psr/http-message/LICENSE', '2022-11-22 05:56:22'),
(2868, 10, 'system/library/export_import/vendor/psr/http-message/README.md', '2022-11-22 05:56:22'),
(2869, 10, 'system/library/export_import/vendor/psr/http-message/composer.json', '2022-11-22 05:56:22'),
(2870, 10, 'system/library/export_import/vendor/psr/http-message/src', '2022-11-22 05:56:22'),
(2871, 10, 'system/library/export_import/vendor/psr/simple-cache/LICENSE.md', '2022-11-22 05:56:22'),
(2872, 10, 'system/library/export_import/vendor/psr/simple-cache/README.md', '2022-11-22 05:56:22'),
(2873, 10, 'system/library/export_import/vendor/psr/simple-cache/composer.json', '2022-11-22 05:56:22'),
(2874, 10, 'system/library/export_import/vendor/psr/simple-cache/src', '2022-11-22 05:56:22'),
(2875, 10, 'system/library/export_import/vendor/symfony/polyfill-mbstring/LICENSE', '2022-11-22 05:56:22'),
(2876, 10, 'system/library/export_import/vendor/symfony/polyfill-mbstring/Mbstring.php', '2022-11-22 05:56:22'),
(2877, 10, 'system/library/export_import/vendor/symfony/polyfill-mbstring/README.md', '2022-11-22 05:56:22'),
(2878, 10, 'system/library/export_import/vendor/symfony/polyfill-mbstring/Resources', '2022-11-22 05:56:22'),
(2879, 10, 'system/library/export_import/vendor/symfony/polyfill-mbstring/bootstrap.php', '2022-11-22 05:56:22'),
(2880, 10, 'system/library/export_import/vendor/symfony/polyfill-mbstring/bootstrap80.php', '2022-11-22 05:56:22'),
(2881, 10, 'system/library/export_import/vendor/symfony/polyfill-mbstring/composer.json', '2022-11-22 05:56:22'),
(2882, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier', '2022-11-22 05:56:22'),
(2883, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier.auto.php', '2022-11-22 05:56:22'),
(2884, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier.autoload-legacy.php', '2022-11-22 05:56:22'),
(2885, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier.autoload.php', '2022-11-22 05:56:22'),
(2886, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier.composer.php', '2022-11-22 05:56:22'),
(2887, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier.func.php', '2022-11-22 05:56:22'),
(2888, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier.includes.php', '2022-11-22 05:56:22'),
(2889, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier.kses.php', '2022-11-22 05:56:22'),
(2890, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier.path.php', '2022-11-22 05:56:22'),
(2891, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier.php', '2022-11-22 05:56:22'),
(2892, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier.safe-includes.php', '2022-11-22 05:56:22'),
(2893, 10, 'system/library/export_import/vendor/maennchen/zipstream-php/src/Bigint.php', '2022-11-22 05:56:22'),
(2894, 10, 'system/library/export_import/vendor/maennchen/zipstream-php/src/DeflateStream.php', '2022-11-22 05:56:22'),
(2895, 10, 'system/library/export_import/vendor/maennchen/zipstream-php/src/Exception', '2022-11-22 05:56:22'),
(2896, 10, 'system/library/export_import/vendor/maennchen/zipstream-php/src/Exception.php', '2022-11-22 05:56:22'),
(2897, 10, 'system/library/export_import/vendor/maennchen/zipstream-php/src/File.php', '2022-11-22 05:56:22'),
(2898, 10, 'system/library/export_import/vendor/maennchen/zipstream-php/src/Option', '2022-11-22 05:56:22'),
(2899, 10, 'system/library/export_import/vendor/maennchen/zipstream-php/src/Stream.php', '2022-11-22 05:56:22'),
(2900, 10, 'system/library/export_import/vendor/maennchen/zipstream-php/src/ZipStream.php', '2022-11-22 05:56:22'),
(2901, 10, 'system/library/export_import/vendor/maennchen/zipstream-php/test/BigintTest.php', '2022-11-22 05:56:22'),
(2902, 10, 'system/library/export_import/vendor/maennchen/zipstream-php/test/ZipStreamTest.php', '2022-11-22 05:56:22'),
(2903, 10, 'system/library/export_import/vendor/maennchen/zipstream-php/test/bootstrap.php', '2022-11-22 05:56:22'),
(2904, 10, 'system/library/export_import/vendor/maennchen/zipstream-php/test/bug', '2022-11-22 05:56:22'),
(2905, 10, 'system/library/export_import/vendor/markbaker/complex/classes/src', '2022-11-22 05:56:22'),
(2906, 10, 'system/library/export_import/vendor/markbaker/complex/examples/complexTest.php', '2022-11-22 05:56:22'),
(2907, 10, 'system/library/export_import/vendor/markbaker/complex/examples/testFunctions.php', '2022-11-22 05:56:22'),
(2908, 10, 'system/library/export_import/vendor/markbaker/complex/examples/testOperations.php', '2022-11-22 05:56:22'),
(2909, 10, 'system/library/export_import/vendor/markbaker/matrix/classes/src', '2022-11-22 05:56:22'),
(2910, 10, 'system/library/export_import/vendor/markbaker/matrix/examples/test.php', '2022-11-22 05:56:22'),
(2911, 10, 'system/library/export_import/vendor/myclabs/php-enum/src/Enum.php', '2022-11-22 05:56:22'),
(2912, 10, 'system/library/export_import/vendor/myclabs/php-enum/src/PHPUnit', '2022-11-22 05:56:22'),
(2913, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet', '2022-11-22 05:56:22'),
(2914, 10, 'system/library/export_import/vendor/psr/http-client/src/ClientExceptionInterface.php', '2022-11-22 05:56:22'),
(2915, 10, 'system/library/export_import/vendor/psr/http-client/src/ClientInterface.php', '2022-11-22 05:56:22'),
(2916, 10, 'system/library/export_import/vendor/psr/http-client/src/NetworkExceptionInterface.php', '2022-11-22 05:56:22'),
(2917, 10, 'system/library/export_import/vendor/psr/http-client/src/RequestExceptionInterface.php', '2022-11-22 05:56:22'),
(2918, 10, 'system/library/export_import/vendor/psr/http-factory/src/RequestFactoryInterface.php', '2022-11-22 05:56:22'),
(2919, 10, 'system/library/export_import/vendor/psr/http-factory/src/ResponseFactoryInterface.php', '2022-11-22 05:56:22'),
(2920, 10, 'system/library/export_import/vendor/psr/http-factory/src/ServerRequestFactoryInterface.php', '2022-11-22 05:56:22'),
(2921, 10, 'system/library/export_import/vendor/psr/http-factory/src/StreamFactoryInterface.php', '2022-11-22 05:56:22'),
(2922, 10, 'system/library/export_import/vendor/psr/http-factory/src/UploadedFileFactoryInterface.php', '2022-11-22 05:56:22'),
(2923, 10, 'system/library/export_import/vendor/psr/http-factory/src/UriFactoryInterface.php', '2022-11-22 05:56:22'),
(2924, 10, 'system/library/export_import/vendor/psr/http-message/src/MessageInterface.php', '2022-11-22 05:56:22'),
(2925, 10, 'system/library/export_import/vendor/psr/http-message/src/RequestInterface.php', '2022-11-22 05:56:22'),
(2926, 10, 'system/library/export_import/vendor/psr/http-message/src/ResponseInterface.php', '2022-11-22 05:56:22'),
(2927, 10, 'system/library/export_import/vendor/psr/http-message/src/ServerRequestInterface.php', '2022-11-22 05:56:22'),
(2928, 10, 'system/library/export_import/vendor/psr/http-message/src/StreamInterface.php', '2022-11-22 05:56:22'),
(2929, 10, 'system/library/export_import/vendor/psr/http-message/src/UploadedFileInterface.php', '2022-11-22 05:56:22'),
(2930, 10, 'system/library/export_import/vendor/psr/http-message/src/UriInterface.php', '2022-11-22 05:56:22'),
(2931, 10, 'system/library/export_import/vendor/psr/simple-cache/src/CacheException.php', '2022-11-22 05:56:22'),
(2932, 10, 'system/library/export_import/vendor/psr/simple-cache/src/CacheInterface.php', '2022-11-22 05:56:22'),
(2933, 10, 'system/library/export_import/vendor/psr/simple-cache/src/InvalidArgumentException.php', '2022-11-22 05:56:22'),
(2934, 10, 'system/library/export_import/vendor/symfony/polyfill-mbstring/Resources/unidata', '2022-11-22 05:56:22'),
(2935, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Arborize.php', '2022-11-22 05:56:22'),
(2936, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrCollections.php', '2022-11-22 05:56:22'),
(2937, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef', '2022-11-22 05:56:22'),
(2938, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef.php', '2022-11-22 05:56:22'),
(2939, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrTransform', '2022-11-22 05:56:22'),
(2940, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrTransform.php', '2022-11-22 05:56:22'),
(2941, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrTypes.php', '2022-11-22 05:56:22'),
(2942, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrValidator.php', '2022-11-22 05:56:22'),
(2943, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Bootstrap.php', '2022-11-22 05:56:22'),
(2944, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/CSSDefinition.php', '2022-11-22 05:56:22'),
(2945, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ChildDef', '2022-11-22 05:56:22'),
(2946, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ChildDef.php', '2022-11-22 05:56:22'),
(2947, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Config.php', '2022-11-22 05:56:22'),
(2948, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema', '2022-11-22 05:56:22'),
(2949, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema.php', '2022-11-22 05:56:22'),
(2950, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ContentSets.php', '2022-11-22 05:56:22'),
(2951, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Context.php', '2022-11-22 05:56:22'),
(2952, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Definition.php', '2022-11-22 05:56:22'),
(2953, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/DefinitionCache', '2022-11-22 05:56:22'),
(2954, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/DefinitionCache.php', '2022-11-22 05:56:22'),
(2955, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/DefinitionCacheFactory.php', '2022-11-22 05:56:22'),
(2956, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Doctype.php', '2022-11-22 05:56:22'),
(2957, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/DoctypeRegistry.php', '2022-11-22 05:56:22'),
(2958, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ElementDef.php', '2022-11-22 05:56:22'),
(2959, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Encoder.php', '2022-11-22 05:56:22'),
(2960, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/EntityLookup', '2022-11-22 05:56:22'),
(2961, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/EntityLookup.php', '2022-11-22 05:56:22'),
(2962, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/EntityParser.php', '2022-11-22 05:56:22'),
(2963, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ErrorCollector.php', '2022-11-22 05:56:22'),
(2964, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ErrorStruct.php', '2022-11-22 05:56:22'),
(2965, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Exception.php', '2022-11-22 05:56:22'),
(2966, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Filter', '2022-11-22 05:56:22'),
(2967, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Filter.php', '2022-11-22 05:56:22'),
(2968, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Generator.php', '2022-11-22 05:56:22'),
(2969, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLDefinition.php', '2022-11-22 05:56:22'),
(2970, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule', '2022-11-22 05:56:22'),
(2971, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule.php', '2022-11-22 05:56:22'),
(2972, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModuleManager.php', '2022-11-22 05:56:22'),
(2973, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/IDAccumulator.php', '2022-11-22 05:56:22'),
(2974, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Injector', '2022-11-22 05:56:22'),
(2975, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Injector.php', '2022-11-22 05:56:22'),
(2976, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Language', '2022-11-22 05:56:22'),
(2977, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Language.php', '2022-11-22 05:56:22'),
(2978, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/LanguageFactory.php', '2022-11-22 05:56:22'),
(2979, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Length.php', '2022-11-22 05:56:22'),
(2980, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Lexer', '2022-11-22 05:56:22'),
(2981, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Lexer.php', '2022-11-22 05:56:22'),
(2982, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Node', '2022-11-22 05:56:22'),
(2983, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Node.php', '2022-11-22 05:56:22'),
(2984, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/PercentEncoder.php', '2022-11-22 05:56:22'),
(2985, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Printer', '2022-11-22 05:56:22'),
(2986, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Printer.php', '2022-11-22 05:56:22'),
(2987, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/PropertyList.php', '2022-11-22 05:56:22'),
(2988, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/PropertyListIterator.php', '2022-11-22 05:56:22'),
(2989, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Queue.php', '2022-11-22 05:56:22'),
(2990, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Strategy', '2022-11-22 05:56:22'),
(2991, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Strategy.php', '2022-11-22 05:56:22'),
(2992, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/StringHash.php', '2022-11-22 05:56:22'),
(2993, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/StringHashParser.php', '2022-11-22 05:56:22'),
(2994, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/TagTransform', '2022-11-22 05:56:22'),
(2995, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/TagTransform.php', '2022-11-22 05:56:22'),
(2996, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Token', '2022-11-22 05:56:22'),
(2997, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Token.php', '2022-11-22 05:56:22'),
(2998, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/TokenFactory.php', '2022-11-22 05:56:22'),
(2999, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/URI.php', '2022-11-22 05:56:22'),
(3000, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/URIDefinition.php', '2022-11-22 05:56:22'),
(3001, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/URIFilter', '2022-11-22 05:56:22'),
(3002, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/URIFilter.php', '2022-11-22 05:56:22'),
(3003, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/URIParser.php', '2022-11-22 05:56:22'),
(3004, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/URIScheme', '2022-11-22 05:56:22'),
(3005, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/URIScheme.php', '2022-11-22 05:56:22'),
(3006, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/URISchemeRegistry.php', '2022-11-22 05:56:22'),
(3007, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/UnitConverter.php', '2022-11-22 05:56:22'),
(3008, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/VarParser', '2022-11-22 05:56:22'),
(3009, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/VarParser.php', '2022-11-22 05:56:22'),
(3010, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/VarParserException.php', '2022-11-22 05:56:22'),
(3011, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Zipper.php', '2022-11-22 05:56:22'),
(3012, 10, 'system/library/export_import/vendor/maennchen/zipstream-php/src/Exception/EncodingException.php', '2022-11-22 05:56:22'),
(3013, 10, 'system/library/export_import/vendor/maennchen/zipstream-php/src/Exception/FileNotFoundException.php', '2022-11-22 05:56:22'),
(3014, 10, 'system/library/export_import/vendor/maennchen/zipstream-php/src/Exception/FileNotReadableException.php', '2022-11-22 05:56:22'),
(3015, 10, 'system/library/export_import/vendor/maennchen/zipstream-php/src/Exception/IncompatibleOptionsException.php', '2022-11-22 05:56:22'),
(3016, 10, 'system/library/export_import/vendor/maennchen/zipstream-php/src/Exception/OverflowException.php', '2022-11-22 05:56:22'),
(3017, 10, 'system/library/export_import/vendor/maennchen/zipstream-php/src/Exception/StreamNotReadableException.php', '2022-11-22 05:56:22'),
(3018, 10, 'system/library/export_import/vendor/maennchen/zipstream-php/src/Option/Archive.php', '2022-11-22 05:56:22'),
(3019, 10, 'system/library/export_import/vendor/maennchen/zipstream-php/src/Option/File.php', '2022-11-22 05:56:22'),
(3020, 10, 'system/library/export_import/vendor/maennchen/zipstream-php/src/Option/Method.php', '2022-11-22 05:56:22'),
(3021, 10, 'system/library/export_import/vendor/maennchen/zipstream-php/src/Option/Version.php', '2022-11-22 05:56:22'),
(3022, 10, 'system/library/export_import/vendor/maennchen/zipstream-php/test/bug/BugHonorFileTimeTest.php', '2022-11-22 05:56:22'),
(3023, 10, 'system/library/export_import/vendor/markbaker/complex/classes/src/Complex.php', '2022-11-22 05:56:22'),
(3024, 10, 'system/library/export_import/vendor/markbaker/complex/classes/src/Exception.php', '2022-11-22 05:56:22'),
(3025, 10, 'system/library/export_import/vendor/markbaker/complex/classes/src/Functions.php', '2022-11-22 05:56:22'),
(3026, 10, 'system/library/export_import/vendor/markbaker/complex/classes/src/Operations.php', '2022-11-22 05:56:22'),
(3027, 10, 'system/library/export_import/vendor/markbaker/matrix/classes/src/Builder.php', '2022-11-22 05:56:22'),
(3028, 10, 'system/library/export_import/vendor/markbaker/matrix/classes/src/Decomposition', '2022-11-22 05:56:22'),
(3029, 10, 'system/library/export_import/vendor/markbaker/matrix/classes/src/Div0Exception.php', '2022-11-22 05:56:22'),
(3030, 10, 'system/library/export_import/vendor/markbaker/matrix/classes/src/Exception.php', '2022-11-22 05:56:22'),
(3031, 10, 'system/library/export_import/vendor/markbaker/matrix/classes/src/Functions.php', '2022-11-22 05:56:22'),
(3032, 10, 'system/library/export_import/vendor/markbaker/matrix/classes/src/Matrix.php', '2022-11-22 05:56:22'),
(3033, 10, 'system/library/export_import/vendor/markbaker/matrix/classes/src/Operations.php', '2022-11-22 05:56:22'),
(3034, 10, 'system/library/export_import/vendor/markbaker/matrix/classes/src/Operators', '2022-11-22 05:56:22'),
(3035, 10, 'system/library/export_import/vendor/myclabs/php-enum/src/PHPUnit/Comparator.php', '2022-11-22 05:56:22'),
(3036, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation', '2022-11-22 05:56:22'),
(3037, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Cell', '2022-11-22 05:56:22'),
(3038, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Chart', '2022-11-22 05:56:22'),
(3039, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Collection', '2022-11-22 05:56:22'),
(3040, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Comment.php', '2022-11-22 05:56:22'),
(3041, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/DefinedName.php', '2022-11-22 05:56:22'),
(3042, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Document', '2022-11-22 05:56:22'),
(3043, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Exception.php', '2022-11-22 05:56:22'),
(3044, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/HashTable.php', '2022-11-22 05:56:22'),
(3045, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Helper', '2022-11-22 05:56:22'),
(3046, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/IComparable.php', '2022-11-22 05:56:22'),
(3047, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/IOFactory.php', '2022-11-22 05:56:22'),
(3048, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/NamedFormula.php', '2022-11-22 05:56:22'),
(3049, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/NamedRange.php', '2022-11-22 05:56:22'),
(3050, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader', '2022-11-22 05:56:22'),
(3051, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/ReferenceHelper.php', '2022-11-22 05:56:22'),
(3052, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/RichText', '2022-11-22 05:56:22'),
(3053, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Settings.php', '2022-11-22 05:56:22'),
(3054, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared', '2022-11-22 05:56:22'),
(3055, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Spreadsheet.php', '2022-11-22 05:56:22'),
(3056, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Style', '2022-11-22 05:56:22'),
(3057, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Worksheet', '2022-11-22 05:56:22'),
(3058, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer', '2022-11-22 05:56:22'),
(3059, 10, 'system/library/export_import/vendor/symfony/polyfill-mbstring/Resources/unidata/lowerCase.php', '2022-11-22 05:56:22'),
(3060, 10, 'system/library/export_import/vendor/symfony/polyfill-mbstring/Resources/unidata/titleCaseRegexp.php', '2022-11-22 05:56:22'),
(3061, 10, 'system/library/export_import/vendor/symfony/polyfill-mbstring/Resources/unidata/upperCase.php', '2022-11-22 05:56:22'),
(3062, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/CSS', '2022-11-22 05:56:22'),
(3063, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/CSS.php', '2022-11-22 05:56:22'),
(3064, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/Clone.php', '2022-11-22 05:56:22'),
(3065, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/Enum.php', '2022-11-22 05:56:22'),
(3066, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/HTML', '2022-11-22 05:56:22'),
(3067, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/Integer.php', '2022-11-22 05:56:22'),
(3068, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/Lang.php', '2022-11-22 05:56:22'),
(3069, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/Switch.php', '2022-11-22 05:56:22'),
(3070, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/Text.php', '2022-11-22 05:56:22'),
(3071, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/URI', '2022-11-22 05:56:22'),
(3072, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/URI.php', '2022-11-22 05:56:22'),
(3073, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrTransform/Background.php', '2022-11-22 05:56:22'),
(3074, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrTransform/BdoDir.php', '2022-11-22 05:56:22'),
(3075, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrTransform/BgColor.php', '2022-11-22 05:56:22'),
(3076, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrTransform/BoolToCSS.php', '2022-11-22 05:56:22'),
(3077, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrTransform/Border.php', '2022-11-22 05:56:22'),
(3078, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrTransform/EnumToCSS.php', '2022-11-22 05:56:22'),
(3079, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrTransform/ImgRequired.php', '2022-11-22 05:56:22'),
(3080, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrTransform/ImgSpace.php', '2022-11-22 05:56:22'),
(3081, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrTransform/Input.php', '2022-11-22 05:56:22'),
(3082, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrTransform/Lang.php', '2022-11-22 05:56:22'),
(3083, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrTransform/Length.php', '2022-11-22 05:56:22'),
(3084, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrTransform/Name.php', '2022-11-22 05:56:22'),
(3085, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrTransform/NameSync.php', '2022-11-22 05:56:22'),
(3086, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrTransform/Nofollow.php', '2022-11-22 05:56:22'),
(3087, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrTransform/SafeEmbed.php', '2022-11-22 05:56:22'),
(3088, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrTransform/SafeObject.php', '2022-11-22 05:56:22'),
(3089, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrTransform/SafeParam.php', '2022-11-22 05:56:22'),
(3090, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrTransform/ScriptRequired.php', '2022-11-22 05:56:22'),
(3091, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrTransform/TargetBlank.php', '2022-11-22 05:56:22'),
(3092, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrTransform/TargetNoopener.php', '2022-11-22 05:56:22'),
(3093, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrTransform/TargetNoreferrer.php', '2022-11-22 05:56:22'),
(3094, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrTransform/Textarea.php', '2022-11-22 05:56:22'),
(3095, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ChildDef/Chameleon.php', '2022-11-22 05:56:22'),
(3096, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ChildDef/Custom.php', '2022-11-22 05:56:22'),
(3097, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ChildDef/Empty.php', '2022-11-22 05:56:22'),
(3098, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ChildDef/List.php', '2022-11-22 05:56:22'),
(3099, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ChildDef/Optional.php', '2022-11-22 05:56:22'),
(3100, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ChildDef/Required.php', '2022-11-22 05:56:22'),
(3101, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ChildDef/StrictBlockquote.php', '2022-11-22 05:56:22'),
(3102, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ChildDef/Table.php', '2022-11-22 05:56:22'),
(3103, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/Builder', '2022-11-22 05:56:22'),
(3104, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/Exception.php', '2022-11-22 05:56:22'),
(3105, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/Interchange', '2022-11-22 05:56:22'),
(3106, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/Interchange.php', '2022-11-22 05:56:22'),
(3107, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/InterchangeBuilder.php', '2022-11-22 05:56:22'),
(3108, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/Validator.php', '2022-11-22 05:56:22'),
(3109, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/ValidatorAtom.php', '2022-11-22 05:56:22'),
(3110, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema', '2022-11-22 05:56:22'),
(3111, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema.ser', '2022-11-22 05:56:22'),
(3112, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/DefinitionCache/Decorator', '2022-11-22 05:56:22'),
(3113, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/DefinitionCache/Decorator.php', '2022-11-22 05:56:22'),
(3114, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/DefinitionCache/Null.php', '2022-11-22 05:56:22'),
(3115, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/DefinitionCache/Serializer', '2022-11-22 05:56:22'),
(3116, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/DefinitionCache/Serializer.php', '2022-11-22 05:56:22'),
(3117, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/EntityLookup/entities.ser', '2022-11-22 05:56:22'),
(3118, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Filter/ExtractStyleBlocks.php', '2022-11-22 05:56:22'),
(3119, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Filter/YouTube.php', '2022-11-22 05:56:22'),
(3120, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/Bdo.php', '2022-11-22 05:56:22'),
(3121, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/CommonAttributes.php', '2022-11-22 05:56:22'),
(3122, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/Edit.php', '2022-11-22 05:56:22'),
(3123, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/Forms.php', '2022-11-22 05:56:22'),
(3124, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/Hypertext.php', '2022-11-22 05:56:22'),
(3125, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/Iframe.php', '2022-11-22 05:56:22'),
(3126, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/Image.php', '2022-11-22 05:56:22'),
(3127, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/Legacy.php', '2022-11-22 05:56:22'),
(3128, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/List.php', '2022-11-22 05:56:22'),
(3129, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/Name.php', '2022-11-22 05:56:22'),
(3130, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/Nofollow.php', '2022-11-22 05:56:22'),
(3131, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/NonXMLCommonAttributes.php', '2022-11-22 05:56:22'),
(3132, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/Object.php', '2022-11-22 05:56:22'),
(3133, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/Presentation.php', '2022-11-22 05:56:22'),
(3134, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/Proprietary.php', '2022-11-22 05:56:22'),
(3135, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/Ruby.php', '2022-11-22 05:56:22'),
(3136, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/SafeEmbed.php', '2022-11-22 05:56:22'),
(3137, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/SafeObject.php', '2022-11-22 05:56:22'),
(3138, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/SafeScripting.php', '2022-11-22 05:56:22'),
(3139, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/Scripting.php', '2022-11-22 05:56:22'),
(3140, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/StyleAttribute.php', '2022-11-22 05:56:22'),
(3141, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/Tables.php', '2022-11-22 05:56:22'),
(3142, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/Target.php', '2022-11-22 05:56:22'),
(3143, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/TargetBlank.php', '2022-11-22 05:56:22'),
(3144, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/TargetNoopener.php', '2022-11-22 05:56:22'),
(3145, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/TargetNoreferrer.php', '2022-11-22 05:56:22'),
(3146, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/Text.php', '2022-11-22 05:56:22'),
(3147, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/Tidy', '2022-11-22 05:56:22'),
(3148, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/Tidy.php', '2022-11-22 05:56:22'),
(3149, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/XMLCommonAttributes.php', '2022-11-22 05:56:22'),
(3150, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Injector/AutoParagraph.php', '2022-11-22 05:56:22'),
(3151, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Injector/DisplayLinkURI.php', '2022-11-22 05:56:22'),
(3152, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Injector/Linkify.php', '2022-11-22 05:56:22'),
(3153, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Injector/PurifierLinkify.php', '2022-11-22 05:56:22'),
(3154, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Injector/RemoveEmpty.php', '2022-11-22 05:56:22'),
(3155, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Injector/RemoveSpansWithoutAttributes.php', '2022-11-22 05:56:22'),
(3156, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Injector/SafeObject.php', '2022-11-22 05:56:22'),
(3157, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Language/messages', '2022-11-22 05:56:22'),
(3158, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Lexer/DOMLex.php', '2022-11-22 05:56:22'),
(3159, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Lexer/DirectLex.php', '2022-11-22 05:56:22'),
(3160, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Lexer/PH5P.php', '2022-11-22 05:56:22'),
(3161, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Node/Comment.php', '2022-11-22 05:56:22'),
(3162, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Node/Element.php', '2022-11-22 05:56:22'),
(3163, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Node/Text.php', '2022-11-22 05:56:22'),
(3164, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Printer/CSSDefinition.php', '2022-11-22 05:56:22'),
(3165, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Printer/ConfigForm.css', '2022-11-22 05:56:22'),
(3166, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Printer/ConfigForm.js', '2022-11-22 05:56:22'),
(3167, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Printer/ConfigForm.php', '2022-11-22 05:56:22'),
(3168, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Printer/HTMLDefinition.php', '2022-11-22 05:56:22'),
(3169, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Strategy/Composite.php', '2022-11-22 05:56:22'),
(3170, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Strategy/Core.php', '2022-11-22 05:56:22'),
(3171, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Strategy/FixNesting.php', '2022-11-22 05:56:22'),
(3172, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Strategy/MakeWellFormed.php', '2022-11-22 05:56:22');
INSERT INTO `oc_extension_path` (`extension_path_id`, `extension_install_id`, `path`, `date_added`) VALUES
(3173, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Strategy/RemoveForeignElements.php', '2022-11-22 05:56:22'),
(3174, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Strategy/ValidateAttributes.php', '2022-11-22 05:56:22'),
(3175, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/TagTransform/Font.php', '2022-11-22 05:56:22'),
(3176, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/TagTransform/Simple.php', '2022-11-22 05:56:22'),
(3177, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Token/Comment.php', '2022-11-22 05:56:22'),
(3178, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Token/Empty.php', '2022-11-22 05:56:22'),
(3179, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Token/End.php', '2022-11-22 05:56:22'),
(3180, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Token/Start.php', '2022-11-22 05:56:22'),
(3181, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Token/Tag.php', '2022-11-22 05:56:22'),
(3182, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Token/Text.php', '2022-11-22 05:56:22'),
(3183, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/URIFilter/DisableExternal.php', '2022-11-22 05:56:22'),
(3184, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/URIFilter/DisableExternalResources.php', '2022-11-22 05:56:22'),
(3185, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/URIFilter/DisableResources.php', '2022-11-22 05:56:22'),
(3186, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/URIFilter/HostBlacklist.php', '2022-11-22 05:56:22'),
(3187, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/URIFilter/MakeAbsolute.php', '2022-11-22 05:56:22'),
(3188, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/URIFilter/Munge.php', '2022-11-22 05:56:22'),
(3189, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/URIFilter/SafeIframe.php', '2022-11-22 05:56:22'),
(3190, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/URIScheme/data.php', '2022-11-22 05:56:22'),
(3191, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/URIScheme/file.php', '2022-11-22 05:56:22'),
(3192, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/URIScheme/ftp.php', '2022-11-22 05:56:22'),
(3193, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/URIScheme/http.php', '2022-11-22 05:56:22'),
(3194, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/URIScheme/https.php', '2022-11-22 05:56:22'),
(3195, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/URIScheme/mailto.php', '2022-11-22 05:56:22'),
(3196, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/URIScheme/news.php', '2022-11-22 05:56:22'),
(3197, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/URIScheme/nntp.php', '2022-11-22 05:56:22'),
(3198, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/URIScheme/tel.php', '2022-11-22 05:56:22'),
(3199, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/VarParser/Flexible.php', '2022-11-22 05:56:22'),
(3200, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/VarParser/Native.php', '2022-11-22 05:56:22'),
(3201, 10, 'system/library/export_import/vendor/markbaker/matrix/classes/src/Decomposition/Decomposition.php', '2022-11-22 05:56:22'),
(3202, 10, 'system/library/export_import/vendor/markbaker/matrix/classes/src/Decomposition/LU.php', '2022-11-22 05:56:22'),
(3203, 10, 'system/library/export_import/vendor/markbaker/matrix/classes/src/Decomposition/QR.php', '2022-11-22 05:56:22'),
(3204, 10, 'system/library/export_import/vendor/markbaker/matrix/classes/src/Operators/Addition.php', '2022-11-22 05:56:22'),
(3205, 10, 'system/library/export_import/vendor/markbaker/matrix/classes/src/Operators/DirectSum.php', '2022-11-22 05:56:22'),
(3206, 10, 'system/library/export_import/vendor/markbaker/matrix/classes/src/Operators/Division.php', '2022-11-22 05:56:22'),
(3207, 10, 'system/library/export_import/vendor/markbaker/matrix/classes/src/Operators/Multiplication.php', '2022-11-22 05:56:22'),
(3208, 10, 'system/library/export_import/vendor/markbaker/matrix/classes/src/Operators/Operator.php', '2022-11-22 05:56:22'),
(3209, 10, 'system/library/export_import/vendor/markbaker/matrix/classes/src/Operators/Subtraction.php', '2022-11-22 05:56:22'),
(3210, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Calculation.php', '2022-11-22 05:56:22'),
(3211, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Category.php', '2022-11-22 05:56:22'),
(3212, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Database', '2022-11-22 05:56:22'),
(3213, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Database.php', '2022-11-22 05:56:22'),
(3214, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/DateTime.php', '2022-11-22 05:56:22'),
(3215, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/DateTimeExcel', '2022-11-22 05:56:22'),
(3216, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Engine', '2022-11-22 05:56:22'),
(3217, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Engineering', '2022-11-22 05:56:22'),
(3218, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Engineering.php', '2022-11-22 05:56:22'),
(3219, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Exception.php', '2022-11-22 05:56:22'),
(3220, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/ExceptionHandler.php', '2022-11-22 05:56:22'),
(3221, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Financial', '2022-11-22 05:56:22'),
(3222, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Financial.php', '2022-11-22 05:56:22'),
(3223, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/FormulaParser.php', '2022-11-22 05:56:22'),
(3224, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/FormulaToken.php', '2022-11-22 05:56:22'),
(3225, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Functions.php', '2022-11-22 05:56:22'),
(3226, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Internal', '2022-11-22 05:56:22'),
(3227, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Logical', '2022-11-22 05:56:22'),
(3228, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Logical.php', '2022-11-22 05:56:22'),
(3229, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/LookupRef', '2022-11-22 05:56:22'),
(3230, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/LookupRef.php', '2022-11-22 05:56:22'),
(3231, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig', '2022-11-22 05:56:22'),
(3232, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig.php', '2022-11-22 05:56:22'),
(3233, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical', '2022-11-22 05:56:22'),
(3234, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical.php', '2022-11-22 05:56:22'),
(3235, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/TextData', '2022-11-22 05:56:22'),
(3236, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/TextData.php', '2022-11-22 05:56:22'),
(3237, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Token', '2022-11-22 05:56:22'),
(3238, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Web', '2022-11-22 05:56:22'),
(3239, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Web.php', '2022-11-22 05:56:22'),
(3240, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/functionlist.txt', '2022-11-22 05:56:22'),
(3241, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale', '2022-11-22 05:56:22'),
(3242, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Cell/AddressHelper.php', '2022-11-22 05:56:22'),
(3243, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Cell/AdvancedValueBinder.php', '2022-11-22 05:56:22'),
(3244, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Cell/Cell.php', '2022-11-22 05:56:22'),
(3245, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Cell/Coordinate.php', '2022-11-22 05:56:22'),
(3246, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Cell/DataType.php', '2022-11-22 05:56:22'),
(3247, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Cell/DataValidation.php', '2022-11-22 05:56:22'),
(3248, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Cell/DataValidator.php', '2022-11-22 05:56:22'),
(3249, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Cell/DefaultValueBinder.php', '2022-11-22 05:56:22'),
(3250, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Cell/Hyperlink.php', '2022-11-22 05:56:22'),
(3251, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Cell/IValueBinder.php', '2022-11-22 05:56:22'),
(3252, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Cell/StringValueBinder.php', '2022-11-22 05:56:22'),
(3253, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Chart/Axis.php', '2022-11-22 05:56:22'),
(3254, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Chart/Chart.php', '2022-11-22 05:56:22'),
(3255, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Chart/DataSeries.php', '2022-11-22 05:56:22'),
(3256, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Chart/DataSeriesValues.php', '2022-11-22 05:56:22'),
(3257, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Chart/Exception.php', '2022-11-22 05:56:22'),
(3258, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Chart/GridLines.php', '2022-11-22 05:56:22'),
(3259, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Chart/Layout.php', '2022-11-22 05:56:22'),
(3260, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Chart/Legend.php', '2022-11-22 05:56:22'),
(3261, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Chart/PlotArea.php', '2022-11-22 05:56:22'),
(3262, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Chart/Properties.php', '2022-11-22 05:56:22'),
(3263, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Chart/Renderer', '2022-11-22 05:56:22'),
(3264, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Chart/Title.php', '2022-11-22 05:56:22'),
(3265, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Collection/Cells.php', '2022-11-22 05:56:22'),
(3266, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Collection/CellsFactory.php', '2022-11-22 05:56:22'),
(3267, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Collection/Memory.php', '2022-11-22 05:56:22'),
(3268, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Document/Properties.php', '2022-11-22 05:56:22'),
(3269, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Document/Security.php', '2022-11-22 05:56:22'),
(3270, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Helper/Dimension.php', '2022-11-22 05:56:22'),
(3271, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Helper/Html.php', '2022-11-22 05:56:22'),
(3272, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Helper/Sample.php', '2022-11-22 05:56:22'),
(3273, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Helper/Size.php', '2022-11-22 05:56:22'),
(3274, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/BaseReader.php', '2022-11-22 05:56:22'),
(3275, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Csv', '2022-11-22 05:56:22'),
(3276, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Csv.php', '2022-11-22 05:56:22'),
(3277, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/DefaultReadFilter.php', '2022-11-22 05:56:22'),
(3278, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Exception.php', '2022-11-22 05:56:22'),
(3279, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Gnumeric', '2022-11-22 05:56:22'),
(3280, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Gnumeric.php', '2022-11-22 05:56:22'),
(3281, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Html.php', '2022-11-22 05:56:22'),
(3282, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/IReadFilter.php', '2022-11-22 05:56:22'),
(3283, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/IReader.php', '2022-11-22 05:56:22'),
(3284, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Ods', '2022-11-22 05:56:22'),
(3285, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Ods.php', '2022-11-22 05:56:22'),
(3286, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Security', '2022-11-22 05:56:22'),
(3287, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Slk.php', '2022-11-22 05:56:22'),
(3288, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xls', '2022-11-22 05:56:22'),
(3289, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xls.php', '2022-11-22 05:56:22'),
(3290, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xlsx', '2022-11-22 05:56:22'),
(3291, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xlsx.php', '2022-11-22 05:56:22'),
(3292, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xml', '2022-11-22 05:56:22'),
(3293, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xml.php', '2022-11-22 05:56:22'),
(3294, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/RichText/ITextElement.php', '2022-11-22 05:56:22'),
(3295, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/RichText/RichText.php', '2022-11-22 05:56:22'),
(3296, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/RichText/Run.php', '2022-11-22 05:56:22'),
(3297, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/RichText/TextElement.php', '2022-11-22 05:56:22'),
(3298, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/CodePage.php', '2022-11-22 05:56:22'),
(3299, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/Date.php', '2022-11-22 05:56:22'),
(3300, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/Drawing.php', '2022-11-22 05:56:22'),
(3301, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/Escher', '2022-11-22 05:56:22'),
(3302, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/Escher.php', '2022-11-22 05:56:22'),
(3303, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/File.php', '2022-11-22 05:56:22'),
(3304, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/Font.php', '2022-11-22 05:56:22'),
(3305, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/IntOrFloat.php', '2022-11-22 05:56:22'),
(3306, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/JAMA', '2022-11-22 05:56:22'),
(3307, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/OLE', '2022-11-22 05:56:22'),
(3308, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/OLE.php', '2022-11-22 05:56:22'),
(3309, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/OLERead.php', '2022-11-22 05:56:22'),
(3310, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/PasswordHasher.php', '2022-11-22 05:56:22'),
(3311, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/StringHelper.php', '2022-11-22 05:56:22'),
(3312, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/TimeZone.php', '2022-11-22 05:56:22'),
(3313, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/Trend', '2022-11-22 05:56:22'),
(3314, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/XMLWriter.php', '2022-11-22 05:56:22'),
(3315, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/Xls.php', '2022-11-22 05:56:22'),
(3316, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Style/Alignment.php', '2022-11-22 05:56:22'),
(3317, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Style/Border.php', '2022-11-22 05:56:22'),
(3318, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Style/Borders.php', '2022-11-22 05:56:22'),
(3319, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Style/Color.php', '2022-11-22 05:56:22'),
(3320, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Style/Conditional.php', '2022-11-22 05:56:22'),
(3321, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Style/ConditionalFormatting', '2022-11-22 05:56:22'),
(3322, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Style/Fill.php', '2022-11-22 05:56:22'),
(3323, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Style/Font.php', '2022-11-22 05:56:22'),
(3324, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Style/NumberFormat', '2022-11-22 05:56:22'),
(3325, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Style/NumberFormat.php', '2022-11-22 05:56:22'),
(3326, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Style/Protection.php', '2022-11-22 05:56:22'),
(3327, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Style/Style.php', '2022-11-22 05:56:22'),
(3328, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Style/Supervisor.php', '2022-11-22 05:56:22'),
(3329, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Worksheet/AutoFilter', '2022-11-22 05:56:22'),
(3330, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Worksheet/AutoFilter.php', '2022-11-22 05:56:22'),
(3331, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Worksheet/BaseDrawing.php', '2022-11-22 05:56:22'),
(3332, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Worksheet/CellIterator.php', '2022-11-22 05:56:22'),
(3333, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Worksheet/Column.php', '2022-11-22 05:56:22'),
(3334, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Worksheet/ColumnCellIterator.php', '2022-11-22 05:56:22'),
(3335, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Worksheet/ColumnDimension.php', '2022-11-22 05:56:22'),
(3336, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Worksheet/ColumnIterator.php', '2022-11-22 05:56:22'),
(3337, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Worksheet/Dimension.php', '2022-11-22 05:56:22'),
(3338, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Worksheet/Drawing', '2022-11-22 05:56:22'),
(3339, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Worksheet/Drawing.php', '2022-11-22 05:56:22'),
(3340, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Worksheet/HeaderFooter.php', '2022-11-22 05:56:22'),
(3341, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Worksheet/HeaderFooterDrawing.php', '2022-11-22 05:56:22'),
(3342, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Worksheet/Iterator.php', '2022-11-22 05:56:22'),
(3343, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Worksheet/MemoryDrawing.php', '2022-11-22 05:56:22'),
(3344, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Worksheet/PageMargins.php', '2022-11-22 05:56:22'),
(3345, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Worksheet/PageSetup.php', '2022-11-22 05:56:22'),
(3346, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Worksheet/Protection.php', '2022-11-22 05:56:22'),
(3347, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Worksheet/Row.php', '2022-11-22 05:56:22'),
(3348, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Worksheet/RowCellIterator.php', '2022-11-22 05:56:22'),
(3349, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Worksheet/RowDimension.php', '2022-11-22 05:56:22'),
(3350, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Worksheet/RowIterator.php', '2022-11-22 05:56:22'),
(3351, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Worksheet/SheetView.php', '2022-11-22 05:56:22'),
(3352, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Worksheet/Worksheet.php', '2022-11-22 05:56:22'),
(3353, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/BaseWriter.php', '2022-11-22 05:56:22'),
(3354, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Csv.php', '2022-11-22 05:56:22'),
(3355, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Exception.php', '2022-11-22 05:56:22'),
(3356, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Html.php', '2022-11-22 05:56:22'),
(3357, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/IWriter.php', '2022-11-22 05:56:22'),
(3358, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Ods', '2022-11-22 05:56:22'),
(3359, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Ods.php', '2022-11-22 05:56:22'),
(3360, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Pdf', '2022-11-22 05:56:22'),
(3361, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Pdf.php', '2022-11-22 05:56:22'),
(3362, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xls', '2022-11-22 05:56:22'),
(3363, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xls.php', '2022-11-22 05:56:22'),
(3364, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xlsx', '2022-11-22 05:56:22'),
(3365, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xlsx.php', '2022-11-22 05:56:22'),
(3366, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/CSS/AlphaValue.php', '2022-11-22 05:56:22'),
(3367, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/CSS/Background.php', '2022-11-22 05:56:22'),
(3368, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/CSS/BackgroundPosition.php', '2022-11-22 05:56:22'),
(3369, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/CSS/Border.php', '2022-11-22 05:56:22'),
(3370, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/CSS/Color.php', '2022-11-22 05:56:22'),
(3371, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/CSS/Composite.php', '2022-11-22 05:56:22'),
(3372, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/CSS/DenyElementDecorator.php', '2022-11-22 05:56:22'),
(3373, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/CSS/Filter.php', '2022-11-22 05:56:22'),
(3374, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/CSS/Font.php', '2022-11-22 05:56:22'),
(3375, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/CSS/FontFamily.php', '2022-11-22 05:56:22'),
(3376, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/CSS/Ident.php', '2022-11-22 05:56:22'),
(3377, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/CSS/ImportantDecorator.php', '2022-11-22 05:56:22'),
(3378, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/CSS/Length.php', '2022-11-22 05:56:22'),
(3379, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/CSS/ListStyle.php', '2022-11-22 05:56:22'),
(3380, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/CSS/Multiple.php', '2022-11-22 05:56:22'),
(3381, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/CSS/Number.php', '2022-11-22 05:56:22'),
(3382, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/CSS/Percentage.php', '2022-11-22 05:56:22'),
(3383, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/CSS/TextDecoration.php', '2022-11-22 05:56:22'),
(3384, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/CSS/URI.php', '2022-11-22 05:56:22'),
(3385, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/HTML/Bool.php', '2022-11-22 05:56:22'),
(3386, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/HTML/Class.php', '2022-11-22 05:56:22'),
(3387, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/HTML/Color.php', '2022-11-22 05:56:22'),
(3388, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/HTML/FrameTarget.php', '2022-11-22 05:56:22'),
(3389, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/HTML/ID.php', '2022-11-22 05:56:22'),
(3390, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/HTML/Length.php', '2022-11-22 05:56:22'),
(3391, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/HTML/LinkTypes.php', '2022-11-22 05:56:22'),
(3392, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/HTML/MultiLength.php', '2022-11-22 05:56:22'),
(3393, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/HTML/Nmtokens.php', '2022-11-22 05:56:22'),
(3394, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/HTML/Pixels.php', '2022-11-22 05:56:22'),
(3395, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/URI/Email', '2022-11-22 05:56:22'),
(3396, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/URI/Email.php', '2022-11-22 05:56:22'),
(3397, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/URI/Host.php', '2022-11-22 05:56:22'),
(3398, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/URI/IPv4.php', '2022-11-22 05:56:22'),
(3399, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/URI/IPv6.php', '2022-11-22 05:56:22'),
(3400, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/Builder/ConfigSchema.php', '2022-11-22 05:56:22'),
(3401, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/Builder/Xml.php', '2022-11-22 05:56:22'),
(3402, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/Interchange/Directive.php', '2022-11-22 05:56:22'),
(3403, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/Interchange/Id.php', '2022-11-22 05:56:22'),
(3404, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Attr.AllowedClasses.txt', '2022-11-22 05:56:22'),
(3405, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Attr.AllowedFrameTargets.txt', '2022-11-22 05:56:22'),
(3406, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Attr.AllowedRel.txt', '2022-11-22 05:56:22'),
(3407, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Attr.AllowedRev.txt', '2022-11-22 05:56:22'),
(3408, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Attr.ClassUseCDATA.txt', '2022-11-22 05:56:22'),
(3409, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Attr.DefaultImageAlt.txt', '2022-11-22 05:56:22'),
(3410, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Attr.DefaultInvalidImage.txt', '2022-11-22 05:56:22'),
(3411, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Attr.DefaultInvalidImageAlt.txt', '2022-11-22 05:56:22'),
(3412, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Attr.DefaultTextDir.txt', '2022-11-22 05:56:22'),
(3413, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Attr.EnableID.txt', '2022-11-22 05:56:22'),
(3414, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Attr.ForbiddenClasses.txt', '2022-11-22 05:56:22'),
(3415, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Attr.ID.HTML5.txt', '2022-11-22 05:56:22'),
(3416, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Attr.IDBlacklist.txt', '2022-11-22 05:56:22'),
(3417, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Attr.IDBlacklistRegexp.txt', '2022-11-22 05:56:22'),
(3418, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Attr.IDPrefix.txt', '2022-11-22 05:56:22'),
(3419, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Attr.IDPrefixLocal.txt', '2022-11-22 05:56:22'),
(3420, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/AutoFormat.AutoParagraph.txt', '2022-11-22 05:56:22'),
(3421, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/AutoFormat.Custom.txt', '2022-11-22 05:56:22'),
(3422, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/AutoFormat.DisplayLinkURI.txt', '2022-11-22 05:56:22'),
(3423, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/AutoFormat.Linkify.txt', '2022-11-22 05:56:22'),
(3424, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/AutoFormat.PurifierLinkify.DocURL.txt', '2022-11-22 05:56:22'),
(3425, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/AutoFormat.PurifierLinkify.txt', '2022-11-22 05:56:22'),
(3426, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/AutoFormat.RemoveEmpty.Predicate.txt', '2022-11-22 05:56:22'),
(3427, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/AutoFormat.RemoveEmpty.RemoveNbsp.Exceptions.txt', '2022-11-22 05:56:22'),
(3428, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/AutoFormat.RemoveEmpty.RemoveNbsp.txt', '2022-11-22 05:56:22'),
(3429, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/AutoFormat.RemoveEmpty.txt', '2022-11-22 05:56:22'),
(3430, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/AutoFormat.RemoveSpansWithoutAttributes.txt', '2022-11-22 05:56:22'),
(3431, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/CSS.AllowDuplicates.txt', '2022-11-22 05:56:22'),
(3432, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/CSS.AllowImportant.txt', '2022-11-22 05:56:22'),
(3433, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/CSS.AllowTricky.txt', '2022-11-22 05:56:22'),
(3434, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/CSS.AllowedFonts.txt', '2022-11-22 05:56:22'),
(3435, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/CSS.AllowedProperties.txt', '2022-11-22 05:56:22'),
(3436, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/CSS.DefinitionRev.txt', '2022-11-22 05:56:22'),
(3437, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/CSS.ForbiddenProperties.txt', '2022-11-22 05:56:22'),
(3438, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/CSS.MaxImgLength.txt', '2022-11-22 05:56:22'),
(3439, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/CSS.Proprietary.txt', '2022-11-22 05:56:22'),
(3440, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/CSS.Trusted.txt', '2022-11-22 05:56:22'),
(3441, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Cache.DefinitionImpl.txt', '2022-11-22 05:56:22'),
(3442, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Cache.SerializerPath.txt', '2022-11-22 05:56:22'),
(3443, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Cache.SerializerPermissions.txt', '2022-11-22 05:56:22'),
(3444, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Core.AggressivelyFixLt.txt', '2022-11-22 05:56:22'),
(3445, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Core.AggressivelyRemoveScript.txt', '2022-11-22 05:56:22'),
(3446, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Core.AllowHostnameUnderscore.txt', '2022-11-22 05:56:22'),
(3447, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Core.AllowParseManyTags.txt', '2022-11-22 05:56:22'),
(3448, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Core.CollectErrors.txt', '2022-11-22 05:56:22'),
(3449, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Core.ColorKeywords.txt', '2022-11-22 05:56:22'),
(3450, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Core.ConvertDocumentToFragment.txt', '2022-11-22 05:56:22'),
(3451, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Core.DirectLexLineNumberSyncInterval.txt', '2022-11-22 05:56:22'),
(3452, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Core.DisableExcludes.txt', '2022-11-22 05:56:22'),
(3453, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Core.EnableIDNA.txt', '2022-11-22 05:56:22'),
(3454, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Core.Encoding.txt', '2022-11-22 05:56:22'),
(3455, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Core.EscapeInvalidChildren.txt', '2022-11-22 05:56:22'),
(3456, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Core.EscapeInvalidTags.txt', '2022-11-22 05:56:22'),
(3457, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Core.EscapeNonASCIICharacters.txt', '2022-11-22 05:56:22'),
(3458, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Core.HiddenElements.txt', '2022-11-22 05:56:22'),
(3459, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Core.Language.txt', '2022-11-22 05:56:22'),
(3460, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Core.LegacyEntityDecoder.txt', '2022-11-22 05:56:22'),
(3461, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Core.LexerImpl.txt', '2022-11-22 05:56:22'),
(3462, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Core.MaintainLineNumbers.txt', '2022-11-22 05:56:22'),
(3463, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Core.NormalizeNewlines.txt', '2022-11-22 05:56:22'),
(3464, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Core.RemoveInvalidImg.txt', '2022-11-22 05:56:22'),
(3465, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Core.RemoveProcessingInstructions.txt', '2022-11-22 05:56:22'),
(3466, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Core.RemoveScriptContents.txt', '2022-11-22 05:56:22'),
(3467, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Filter.Custom.txt', '2022-11-22 05:56:22'),
(3468, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Filter.ExtractStyleBlocks.Escaping.txt', '2022-11-22 05:56:22'),
(3469, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Filter.ExtractStyleBlocks.Scope.txt', '2022-11-22 05:56:22'),
(3470, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Filter.ExtractStyleBlocks.TidyImpl.txt', '2022-11-22 05:56:22'),
(3471, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Filter.ExtractStyleBlocks.txt', '2022-11-22 05:56:22'),
(3472, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Filter.YouTube.txt', '2022-11-22 05:56:22'),
(3473, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.Allowed.txt', '2022-11-22 05:56:22'),
(3474, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.AllowedAttributes.txt', '2022-11-22 05:56:22'),
(3475, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.AllowedComments.txt', '2022-11-22 05:56:22'),
(3476, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.AllowedCommentsRegexp.txt', '2022-11-22 05:56:22'),
(3477, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.AllowedElements.txt', '2022-11-22 05:56:22'),
(3478, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.AllowedModules.txt', '2022-11-22 05:56:22'),
(3479, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.Attr.Name.UseCDATA.txt', '2022-11-22 05:56:22'),
(3480, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.BlockWrapper.txt', '2022-11-22 05:56:22'),
(3481, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.CoreModules.txt', '2022-11-22 05:56:22'),
(3482, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.CustomDoctype.txt', '2022-11-22 05:56:22'),
(3483, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.DefinitionID.txt', '2022-11-22 05:56:22'),
(3484, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.DefinitionRev.txt', '2022-11-22 05:56:22'),
(3485, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.Doctype.txt', '2022-11-22 05:56:22'),
(3486, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.FlashAllowFullScreen.txt', '2022-11-22 05:56:22'),
(3487, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.ForbiddenAttributes.txt', '2022-11-22 05:56:22'),
(3488, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.ForbiddenElements.txt', '2022-11-22 05:56:22'),
(3489, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.Forms.txt', '2022-11-22 05:56:22'),
(3490, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.MaxImgLength.txt', '2022-11-22 05:56:22'),
(3491, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.Nofollow.txt', '2022-11-22 05:56:22'),
(3492, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.Parent.txt', '2022-11-22 05:56:22'),
(3493, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.Proprietary.txt', '2022-11-22 05:56:22'),
(3494, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.SafeEmbed.txt', '2022-11-22 05:56:22'),
(3495, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.SafeIframe.txt', '2022-11-22 05:56:22'),
(3496, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.SafeObject.txt', '2022-11-22 05:56:22'),
(3497, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.SafeScripting.txt', '2022-11-22 05:56:22'),
(3498, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.Strict.txt', '2022-11-22 05:56:22'),
(3499, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.TargetBlank.txt', '2022-11-22 05:56:22'),
(3500, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.TargetNoopener.txt', '2022-11-22 05:56:22'),
(3501, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.TargetNoreferrer.txt', '2022-11-22 05:56:22'),
(3502, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.TidyAdd.txt', '2022-11-22 05:56:22'),
(3503, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.TidyLevel.txt', '2022-11-22 05:56:22'),
(3504, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.TidyRemove.txt', '2022-11-22 05:56:22'),
(3505, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.Trusted.txt', '2022-11-22 05:56:22'),
(3506, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/HTML.XHTML.txt', '2022-11-22 05:56:22'),
(3507, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Output.CommentScriptContents.txt', '2022-11-22 05:56:22'),
(3508, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Output.FixInnerHTML.txt', '2022-11-22 05:56:22'),
(3509, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Output.FlashCompat.txt', '2022-11-22 05:56:22'),
(3510, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Output.Newline.txt', '2022-11-22 05:56:22'),
(3511, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Output.SortAttr.txt', '2022-11-22 05:56:22'),
(3512, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Output.TidyFormat.txt', '2022-11-22 05:56:22'),
(3513, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/Test.ForceNoIconv.txt', '2022-11-22 05:56:22'),
(3514, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/URI.AllowedSchemes.txt', '2022-11-22 05:56:22'),
(3515, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/URI.Base.txt', '2022-11-22 05:56:22'),
(3516, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/URI.DefaultScheme.txt', '2022-11-22 05:56:22'),
(3517, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/URI.DefinitionID.txt', '2022-11-22 05:56:22'),
(3518, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/URI.DefinitionRev.txt', '2022-11-22 05:56:22'),
(3519, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/URI.Disable.txt', '2022-11-22 05:56:22');
INSERT INTO `oc_extension_path` (`extension_path_id`, `extension_install_id`, `path`, `date_added`) VALUES
(3520, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/URI.DisableExternal.txt', '2022-11-22 05:56:22'),
(3521, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/URI.DisableExternalResources.txt', '2022-11-22 05:56:22'),
(3522, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/URI.DisableResources.txt', '2022-11-22 05:56:22'),
(3523, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/URI.Host.txt', '2022-11-22 05:56:22'),
(3524, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/URI.HostBlacklist.txt', '2022-11-22 05:56:22'),
(3525, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/URI.MakeAbsolute.txt', '2022-11-22 05:56:22'),
(3526, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/URI.Munge.txt', '2022-11-22 05:56:22'),
(3527, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/URI.MungeResources.txt', '2022-11-22 05:56:22'),
(3528, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/URI.MungeSecretKey.txt', '2022-11-22 05:56:22'),
(3529, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/URI.OverrideAllowedSchemes.txt', '2022-11-22 05:56:22'),
(3530, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/URI.SafeIframeRegexp.txt', '2022-11-22 05:56:22'),
(3531, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/ConfigSchema/schema/info.ini', '2022-11-22 05:56:22'),
(3532, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/DefinitionCache/Decorator/Cleanup.php', '2022-11-22 05:56:22'),
(3533, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/DefinitionCache/Decorator/Memory.php', '2022-11-22 05:56:22'),
(3534, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/DefinitionCache/Decorator/Template.php.in', '2022-11-22 05:56:22'),
(3535, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/DefinitionCache/Serializer/README', '2022-11-22 05:56:22'),
(3536, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/Tidy/Name.php', '2022-11-22 05:56:22'),
(3537, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/Tidy/Proprietary.php', '2022-11-22 05:56:22'),
(3538, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/Tidy/Strict.php', '2022-11-22 05:56:22'),
(3539, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/Tidy/Transitional.php', '2022-11-22 05:56:22'),
(3540, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/Tidy/XHTML.php', '2022-11-22 05:56:22'),
(3541, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/HTMLModule/Tidy/XHTMLAndHTML4.php', '2022-11-22 05:56:22'),
(3542, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/Language/messages/en.php', '2022-11-22 05:56:22'),
(3543, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Database/DAverage.php', '2022-11-22 05:56:22'),
(3544, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Database/DCount.php', '2022-11-22 05:56:22'),
(3545, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Database/DCountA.php', '2022-11-22 05:56:22'),
(3546, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Database/DGet.php', '2022-11-22 05:56:22'),
(3547, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Database/DMax.php', '2022-11-22 05:56:22'),
(3548, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Database/DMin.php', '2022-11-22 05:56:22'),
(3549, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Database/DProduct.php', '2022-11-22 05:56:22'),
(3550, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Database/DStDev.php', '2022-11-22 05:56:22'),
(3551, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Database/DStDevP.php', '2022-11-22 05:56:22'),
(3552, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Database/DSum.php', '2022-11-22 05:56:22'),
(3553, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Database/DVar.php', '2022-11-22 05:56:22'),
(3554, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Database/DVarP.php', '2022-11-22 05:56:22'),
(3555, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Database/DatabaseAbstract.php', '2022-11-22 05:56:22'),
(3556, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/DateTimeExcel/Constants.php', '2022-11-22 05:56:22'),
(3557, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/DateTimeExcel/Current.php', '2022-11-22 05:56:22'),
(3558, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/DateTimeExcel/Date.php', '2022-11-22 05:56:22'),
(3559, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/DateTimeExcel/DateParts.php', '2022-11-22 05:56:22'),
(3560, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/DateTimeExcel/DateValue.php', '2022-11-22 05:56:22'),
(3561, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/DateTimeExcel/Days.php', '2022-11-22 05:56:22'),
(3562, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/DateTimeExcel/Days360.php', '2022-11-22 05:56:22'),
(3563, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/DateTimeExcel/Difference.php', '2022-11-22 05:56:22'),
(3564, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/DateTimeExcel/Helpers.php', '2022-11-22 05:56:22'),
(3565, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/DateTimeExcel/Month.php', '2022-11-22 05:56:22'),
(3566, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/DateTimeExcel/NetworkDays.php', '2022-11-22 05:56:22'),
(3567, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/DateTimeExcel/Time.php', '2022-11-22 05:56:22'),
(3568, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/DateTimeExcel/TimeParts.php', '2022-11-22 05:56:22'),
(3569, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/DateTimeExcel/TimeValue.php', '2022-11-22 05:56:22'),
(3570, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/DateTimeExcel/Week.php', '2022-11-22 05:56:22'),
(3571, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/DateTimeExcel/WorkDay.php', '2022-11-22 05:56:22'),
(3572, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/DateTimeExcel/YearFrac.php', '2022-11-22 05:56:22'),
(3573, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Engine/CyclicReferenceStack.php', '2022-11-22 05:56:22'),
(3574, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Engine/Logger.php', '2022-11-22 05:56:22'),
(3575, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Engineering/BesselI.php', '2022-11-22 05:56:22'),
(3576, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Engineering/BesselJ.php', '2022-11-22 05:56:22'),
(3577, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Engineering/BesselK.php', '2022-11-22 05:56:22'),
(3578, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Engineering/BesselY.php', '2022-11-22 05:56:22'),
(3579, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Engineering/BitWise.php', '2022-11-22 05:56:22'),
(3580, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Engineering/Compare.php', '2022-11-22 05:56:22'),
(3581, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Engineering/Complex.php', '2022-11-22 05:56:22'),
(3582, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Engineering/ComplexFunctions.php', '2022-11-22 05:56:22'),
(3583, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Engineering/ComplexOperations.php', '2022-11-22 05:56:22'),
(3584, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Engineering/Constants.php', '2022-11-22 05:56:22'),
(3585, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Engineering/ConvertBase.php', '2022-11-22 05:56:22'),
(3586, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Engineering/ConvertBinary.php', '2022-11-22 05:56:22'),
(3587, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Engineering/ConvertDecimal.php', '2022-11-22 05:56:22'),
(3588, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Engineering/ConvertHex.php', '2022-11-22 05:56:22'),
(3589, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Engineering/ConvertOctal.php', '2022-11-22 05:56:22'),
(3590, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Engineering/ConvertUOM.php', '2022-11-22 05:56:22'),
(3591, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Engineering/EngineeringValidations.php', '2022-11-22 05:56:22'),
(3592, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Engineering/Erf.php', '2022-11-22 05:56:22'),
(3593, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Engineering/ErfC.php', '2022-11-22 05:56:22'),
(3594, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Financial/Amortization.php', '2022-11-22 05:56:22'),
(3595, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Financial/CashFlow', '2022-11-22 05:56:22'),
(3596, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Financial/Constants.php', '2022-11-22 05:56:22'),
(3597, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Financial/Coupons.php', '2022-11-22 05:56:22'),
(3598, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Financial/Depreciation.php', '2022-11-22 05:56:22'),
(3599, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Financial/Dollar.php', '2022-11-22 05:56:22'),
(3600, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Financial/FinancialValidations.php', '2022-11-22 05:56:22'),
(3601, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Financial/Helpers.php', '2022-11-22 05:56:22'),
(3602, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Financial/InterestRate.php', '2022-11-22 05:56:22'),
(3603, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Financial/Securities', '2022-11-22 05:56:22'),
(3604, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Financial/TreasuryBill.php', '2022-11-22 05:56:22'),
(3605, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Internal/MakeMatrix.php', '2022-11-22 05:56:22'),
(3606, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Internal/WildcardMatch.php', '2022-11-22 05:56:22'),
(3607, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Logical/Boolean.php', '2022-11-22 05:56:22'),
(3608, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Logical/Conditional.php', '2022-11-22 05:56:22'),
(3609, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Logical/Operations.php', '2022-11-22 05:56:22'),
(3610, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/LookupRef/Address.php', '2022-11-22 05:56:22'),
(3611, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/LookupRef/ExcelMatch.php', '2022-11-22 05:56:22'),
(3612, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/LookupRef/Formula.php', '2022-11-22 05:56:22'),
(3613, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/LookupRef/HLookup.php', '2022-11-22 05:56:22'),
(3614, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/LookupRef/Helpers.php', '2022-11-22 05:56:22'),
(3615, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/LookupRef/Hyperlink.php', '2022-11-22 05:56:22'),
(3616, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/LookupRef/Indirect.php', '2022-11-22 05:56:22'),
(3617, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/LookupRef/Lookup.php', '2022-11-22 05:56:22'),
(3618, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/LookupRef/LookupBase.php', '2022-11-22 05:56:22'),
(3619, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/LookupRef/LookupRefValidations.php', '2022-11-22 05:56:22'),
(3620, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/LookupRef/Matrix.php', '2022-11-22 05:56:22'),
(3621, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/LookupRef/Offset.php', '2022-11-22 05:56:22'),
(3622, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/LookupRef/RowColumnInformation.php', '2022-11-22 05:56:22'),
(3623, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/LookupRef/Selection.php', '2022-11-22 05:56:22'),
(3624, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/LookupRef/VLookup.php', '2022-11-22 05:56:22'),
(3625, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/Absolute.php', '2022-11-22 05:56:22'),
(3626, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/Angle.php', '2022-11-22 05:56:22'),
(3627, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/Arabic.php', '2022-11-22 05:56:22'),
(3628, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/Base.php', '2022-11-22 05:56:22'),
(3629, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/Ceiling.php', '2022-11-22 05:56:22'),
(3630, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/Combinations.php', '2022-11-22 05:56:22'),
(3631, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/Exp.php', '2022-11-22 05:56:22'),
(3632, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/Factorial.php', '2022-11-22 05:56:22'),
(3633, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/Floor.php', '2022-11-22 05:56:22'),
(3634, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/Gcd.php', '2022-11-22 05:56:22'),
(3635, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/Helpers.php', '2022-11-22 05:56:22'),
(3636, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/IntClass.php', '2022-11-22 05:56:22'),
(3637, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/Lcm.php', '2022-11-22 05:56:22'),
(3638, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/Logarithms.php', '2022-11-22 05:56:22'),
(3639, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/MatrixFunctions.php', '2022-11-22 05:56:22'),
(3640, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/Operations.php', '2022-11-22 05:56:22'),
(3641, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/Random.php', '2022-11-22 05:56:22'),
(3642, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/Roman.php', '2022-11-22 05:56:22'),
(3643, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/Round.php', '2022-11-22 05:56:22'),
(3644, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/SeriesSum.php', '2022-11-22 05:56:22'),
(3645, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/Sign.php', '2022-11-22 05:56:22'),
(3646, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/Sqrt.php', '2022-11-22 05:56:22'),
(3647, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/Subtotal.php', '2022-11-22 05:56:22'),
(3648, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/Sum.php', '2022-11-22 05:56:22'),
(3649, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/SumSquares.php', '2022-11-22 05:56:22'),
(3650, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/Trig', '2022-11-22 05:56:22'),
(3651, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/Trunc.php', '2022-11-22 05:56:22'),
(3652, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/AggregateBase.php', '2022-11-22 05:56:22'),
(3653, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Averages', '2022-11-22 05:56:22'),
(3654, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Averages.php', '2022-11-22 05:56:22'),
(3655, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Conditional.php', '2022-11-22 05:56:22'),
(3656, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Confidence.php', '2022-11-22 05:56:22'),
(3657, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Counts.php', '2022-11-22 05:56:22'),
(3658, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Deviations.php', '2022-11-22 05:56:22'),
(3659, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Distributions', '2022-11-22 05:56:22'),
(3660, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/MaxMinBase.php', '2022-11-22 05:56:22'),
(3661, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Maximum.php', '2022-11-22 05:56:22'),
(3662, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Minimum.php', '2022-11-22 05:56:22'),
(3663, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Percentiles.php', '2022-11-22 05:56:22'),
(3664, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Permutations.php', '2022-11-22 05:56:22'),
(3665, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Size.php', '2022-11-22 05:56:22'),
(3666, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/StandardDeviations.php', '2022-11-22 05:56:22'),
(3667, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Standardize.php', '2022-11-22 05:56:22'),
(3668, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/StatisticalValidations.php', '2022-11-22 05:56:22'),
(3669, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Trends.php', '2022-11-22 05:56:22'),
(3670, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/VarianceBase.php', '2022-11-22 05:56:22'),
(3671, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Variances.php', '2022-11-22 05:56:22'),
(3672, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/TextData/CaseConvert.php', '2022-11-22 05:56:22'),
(3673, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/TextData/CharacterConvert.php', '2022-11-22 05:56:22'),
(3674, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/TextData/Concatenate.php', '2022-11-22 05:56:22'),
(3675, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/TextData/Extract.php', '2022-11-22 05:56:22'),
(3676, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/TextData/Format.php', '2022-11-22 05:56:22'),
(3677, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/TextData/Helpers.php', '2022-11-22 05:56:22'),
(3678, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/TextData/Replace.php', '2022-11-22 05:56:22'),
(3679, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/TextData/Search.php', '2022-11-22 05:56:22'),
(3680, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/TextData/Text.php', '2022-11-22 05:56:22'),
(3681, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/TextData/Trim.php', '2022-11-22 05:56:22'),
(3682, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Token/Stack.php', '2022-11-22 05:56:22'),
(3683, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Web/Service.php', '2022-11-22 05:56:22'),
(3684, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/Translations.xlsx', '2022-11-22 05:56:22'),
(3685, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/bg', '2022-11-22 05:56:22'),
(3686, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/cs', '2022-11-22 05:56:22'),
(3687, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/da', '2022-11-22 05:56:22'),
(3688, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/de', '2022-11-22 05:56:22'),
(3689, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/en', '2022-11-22 05:56:22'),
(3690, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/es', '2022-11-22 05:56:22'),
(3691, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/fi', '2022-11-22 05:56:22'),
(3692, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/fr', '2022-11-22 05:56:22'),
(3693, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/hu', '2022-11-22 05:56:22'),
(3694, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/it', '2022-11-22 05:56:22'),
(3695, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/nb', '2022-11-22 05:56:22'),
(3696, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/nl', '2022-11-22 05:56:22'),
(3697, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/pl', '2022-11-22 05:56:22'),
(3698, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/pt', '2022-11-22 05:56:22'),
(3699, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/ru', '2022-11-22 05:56:22'),
(3700, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/sv', '2022-11-22 05:56:22'),
(3701, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/tr', '2022-11-22 05:56:22'),
(3702, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Chart/Renderer/IRenderer.php', '2022-11-22 05:56:22'),
(3703, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Chart/Renderer/JpGraph.php', '2022-11-22 05:56:22'),
(3704, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Chart/Renderer/PHP Charting Libraries.txt', '2022-11-22 05:56:22'),
(3705, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Csv/Delimiter.php', '2022-11-22 05:56:22'),
(3706, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Gnumeric/PageSetup.php', '2022-11-22 05:56:22'),
(3707, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Gnumeric/Properties.php', '2022-11-22 05:56:22'),
(3708, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Gnumeric/Styles.php', '2022-11-22 05:56:22'),
(3709, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Ods/AutoFilter.php', '2022-11-22 05:56:22'),
(3710, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Ods/BaseReader.php', '2022-11-22 05:56:22'),
(3711, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Ods/DefinedNames.php', '2022-11-22 05:56:22'),
(3712, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Ods/PageSettings.php', '2022-11-22 05:56:22'),
(3713, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Ods/Properties.php', '2022-11-22 05:56:22'),
(3714, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Security/XmlScanner.php', '2022-11-22 05:56:22'),
(3715, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xls/Color', '2022-11-22 05:56:22'),
(3716, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xls/Color.php', '2022-11-22 05:56:22'),
(3717, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xls/ErrorCode.php', '2022-11-22 05:56:22'),
(3718, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xls/Escher.php', '2022-11-22 05:56:22'),
(3719, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xls/MD5.php', '2022-11-22 05:56:22'),
(3720, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xls/RC4.php', '2022-11-22 05:56:22'),
(3721, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xls/Style', '2022-11-22 05:56:22'),
(3722, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xlsx/AutoFilter.php', '2022-11-22 05:56:22'),
(3723, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xlsx/BaseParserClass.php', '2022-11-22 05:56:22'),
(3724, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xlsx/Chart.php', '2022-11-22 05:56:22'),
(3725, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xlsx/ColumnAndRowAttributes.php', '2022-11-22 05:56:22'),
(3726, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xlsx/ConditionalStyles.php', '2022-11-22 05:56:22'),
(3727, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xlsx/DataValidations.php', '2022-11-22 05:56:22'),
(3728, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xlsx/Hyperlinks.php', '2022-11-22 05:56:22'),
(3729, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xlsx/Namespaces.php', '2022-11-22 05:56:22'),
(3730, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xlsx/PageSetup.php', '2022-11-22 05:56:22'),
(3731, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xlsx/Properties.php', '2022-11-22 05:56:22'),
(3732, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xlsx/SheetViewOptions.php', '2022-11-22 05:56:22'),
(3733, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xlsx/SheetViews.php', '2022-11-22 05:56:22'),
(3734, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xlsx/Styles.php', '2022-11-22 05:56:22'),
(3735, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xlsx/Theme.php', '2022-11-22 05:56:22'),
(3736, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xml/PageSettings.php', '2022-11-22 05:56:22'),
(3737, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xml/Properties.php', '2022-11-22 05:56:22'),
(3738, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xml/Style', '2022-11-22 05:56:22'),
(3739, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xml/Style.php', '2022-11-22 05:56:22'),
(3740, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/Escher/DgContainer', '2022-11-22 05:56:22'),
(3741, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/Escher/DgContainer.php', '2022-11-22 05:56:22'),
(3742, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/Escher/DggContainer', '2022-11-22 05:56:22'),
(3743, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/Escher/DggContainer.php', '2022-11-22 05:56:22'),
(3744, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/JAMA/CHANGELOG.TXT', '2022-11-22 05:56:22'),
(3745, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/JAMA/CholeskyDecomposition.php', '2022-11-22 05:56:22'),
(3746, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/JAMA/EigenvalueDecomposition.php', '2022-11-22 05:56:22'),
(3747, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/JAMA/LUDecomposition.php', '2022-11-22 05:56:22'),
(3748, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/JAMA/Matrix.php', '2022-11-22 05:56:22'),
(3749, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/JAMA/QRDecomposition.php', '2022-11-22 05:56:22'),
(3750, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/JAMA/SingularValueDecomposition.php', '2022-11-22 05:56:22'),
(3751, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/JAMA/utils', '2022-11-22 05:56:22'),
(3752, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/OLE/ChainedBlockStream.php', '2022-11-22 05:56:22'),
(3753, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/OLE/PPS', '2022-11-22 05:56:22'),
(3754, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/OLE/PPS.php', '2022-11-22 05:56:22'),
(3755, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/Trend/BestFit.php', '2022-11-22 05:56:22'),
(3756, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/Trend/ExponentialBestFit.php', '2022-11-22 05:56:22'),
(3757, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/Trend/LinearBestFit.php', '2022-11-22 05:56:22'),
(3758, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/Trend/LogarithmicBestFit.php', '2022-11-22 05:56:22'),
(3759, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/Trend/PolynomialBestFit.php', '2022-11-22 05:56:22'),
(3760, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/Trend/PowerBestFit.php', '2022-11-22 05:56:22'),
(3761, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/Trend/Trend.php', '2022-11-22 05:56:22'),
(3762, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Style/ConditionalFormatting/ConditionalDataBar.php', '2022-11-22 05:56:22'),
(3763, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Style/ConditionalFormatting/ConditionalDataBarExtension.php', '2022-11-22 05:56:22'),
(3764, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Style/ConditionalFormatting/ConditionalFormatValueObject.php', '2022-11-22 05:56:22'),
(3765, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Style/ConditionalFormatting/ConditionalFormattingRuleExtension.php', '2022-11-22 05:56:22'),
(3766, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Style/NumberFormat/BaseFormatter.php', '2022-11-22 05:56:22'),
(3767, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Style/NumberFormat/DateFormatter.php', '2022-11-22 05:56:22'),
(3768, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Style/NumberFormat/Formatter.php', '2022-11-22 05:56:22'),
(3769, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Style/NumberFormat/FractionFormatter.php', '2022-11-22 05:56:22'),
(3770, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Style/NumberFormat/NumberFormatter.php', '2022-11-22 05:56:22'),
(3771, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Style/NumberFormat/PercentageFormatter.php', '2022-11-22 05:56:22'),
(3772, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Worksheet/AutoFilter/Column', '2022-11-22 05:56:22'),
(3773, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Worksheet/AutoFilter/Column.php', '2022-11-22 05:56:22'),
(3774, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Worksheet/Drawing/Shadow.php', '2022-11-22 05:56:22'),
(3775, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Ods/AutoFilters.php', '2022-11-22 05:56:22'),
(3776, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Ods/Cell', '2022-11-22 05:56:22'),
(3777, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Ods/Content.php', '2022-11-22 05:56:22'),
(3778, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Ods/Formula.php', '2022-11-22 05:56:22'),
(3779, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Ods/Meta.php', '2022-11-22 05:56:22'),
(3780, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Ods/MetaInf.php', '2022-11-22 05:56:22'),
(3781, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Ods/Mimetype.php', '2022-11-22 05:56:22'),
(3782, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Ods/NamedExpressions.php', '2022-11-22 05:56:22'),
(3783, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Ods/Settings.php', '2022-11-22 05:56:22'),
(3784, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Ods/Styles.php', '2022-11-22 05:56:22'),
(3785, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Ods/Thumbnails.php', '2022-11-22 05:56:22'),
(3786, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Ods/WriterPart.php', '2022-11-22 05:56:22'),
(3787, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Pdf/Dompdf.php', '2022-11-22 05:56:22'),
(3788, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Pdf/Mpdf.php', '2022-11-22 05:56:22'),
(3789, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Pdf/Tcpdf.php', '2022-11-22 05:56:22'),
(3790, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xls/BIFFwriter.php', '2022-11-22 05:56:22'),
(3791, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xls/CellDataValidation.php', '2022-11-22 05:56:22'),
(3792, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xls/ErrorCode.php', '2022-11-22 05:56:22'),
(3793, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xls/Escher.php', '2022-11-22 05:56:22'),
(3794, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xls/Font.php', '2022-11-22 05:56:22'),
(3795, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xls/Parser.php', '2022-11-22 05:56:22'),
(3796, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xls/Style', '2022-11-22 05:56:22'),
(3797, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xls/Workbook.php', '2022-11-22 05:56:22'),
(3798, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xls/Worksheet.php', '2022-11-22 05:56:22'),
(3799, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xls/Xf.php', '2022-11-22 05:56:22'),
(3800, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xlsx/Chart.php', '2022-11-22 05:56:22'),
(3801, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xlsx/Comments.php', '2022-11-22 05:56:22'),
(3802, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xlsx/ContentTypes.php', '2022-11-22 05:56:22'),
(3803, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xlsx/DefinedNames.php', '2022-11-22 05:56:22'),
(3804, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xlsx/DocProps.php', '2022-11-22 05:56:22'),
(3805, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xlsx/Drawing.php', '2022-11-22 05:56:22'),
(3806, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xlsx/Rels.php', '2022-11-22 05:56:22'),
(3807, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xlsx/RelsRibbon.php', '2022-11-22 05:56:22'),
(3808, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xlsx/RelsVBA.php', '2022-11-22 05:56:22'),
(3809, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xlsx/StringTable.php', '2022-11-22 05:56:22'),
(3810, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xlsx/Style.php', '2022-11-22 05:56:22'),
(3811, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xlsx/Theme.php', '2022-11-22 05:56:22'),
(3812, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xlsx/Workbook.php', '2022-11-22 05:56:22'),
(3813, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xlsx/Worksheet.php', '2022-11-22 05:56:22'),
(3814, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xlsx/WriterPart.php', '2022-11-22 05:56:22'),
(3815, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xlsx/Xlfn.php', '2022-11-22 05:56:22'),
(3816, 10, 'system/library/export_import/vendor/ezyang/htmlpurifier/library/HTMLPurifier/AttrDef/URI/Email/SimpleCheck.php', '2022-11-22 05:56:22'),
(3817, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Financial/CashFlow/CashFlowValidations.php', '2022-11-22 05:56:22'),
(3818, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Financial/CashFlow/Constant', '2022-11-22 05:56:22'),
(3819, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Financial/CashFlow/Single.php', '2022-11-22 05:56:22'),
(3820, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Financial/CashFlow/Variable', '2022-11-22 05:56:22'),
(3821, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Financial/Securities/AccruedInterest.php', '2022-11-22 05:56:22'),
(3822, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Financial/Securities/Price.php', '2022-11-22 05:56:22'),
(3823, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Financial/Securities/Rates.php', '2022-11-22 05:56:22'),
(3824, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Financial/Securities/SecurityValidations.php', '2022-11-22 05:56:22'),
(3825, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Financial/Securities/Yields.php', '2022-11-22 05:56:22'),
(3826, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/Trig/Cosecant.php', '2022-11-22 05:56:22'),
(3827, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/Trig/Cosine.php', '2022-11-22 05:56:22'),
(3828, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/Trig/Cotangent.php', '2022-11-22 05:56:22'),
(3829, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/Trig/Secant.php', '2022-11-22 05:56:22'),
(3830, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/Trig/Sine.php', '2022-11-22 05:56:22'),
(3831, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/MathTrig/Trig/Tangent.php', '2022-11-22 05:56:22'),
(3832, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Averages/Mean.php', '2022-11-22 05:56:22'),
(3833, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Distributions/Beta.php', '2022-11-22 05:56:22'),
(3834, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Distributions/Binomial.php', '2022-11-22 05:56:22'),
(3835, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Distributions/ChiSquared.php', '2022-11-22 05:56:22'),
(3836, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Distributions/DistributionValidations.php', '2022-11-22 05:56:22'),
(3837, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Distributions/Exponential.php', '2022-11-22 05:56:22'),
(3838, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Distributions/F.php', '2022-11-22 05:56:22'),
(3839, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Distributions/Fisher.php', '2022-11-22 05:56:22'),
(3840, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Distributions/Gamma.php', '2022-11-22 05:56:22'),
(3841, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Distributions/GammaBase.php', '2022-11-22 05:56:22'),
(3842, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Distributions/HyperGeometric.php', '2022-11-22 05:56:22'),
(3843, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Distributions/LogNormal.php', '2022-11-22 05:56:22'),
(3844, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Distributions/NewtonRaphson.php', '2022-11-22 05:56:22'),
(3845, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Distributions/Normal.php', '2022-11-22 05:56:22'),
(3846, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Distributions/Poisson.php', '2022-11-22 05:56:22'),
(3847, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Distributions/StandardNormal.php', '2022-11-22 05:56:22'),
(3848, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Distributions/StudentT.php', '2022-11-22 05:56:22'),
(3849, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Statistical/Distributions/Weibull.php', '2022-11-22 05:56:22'),
(3850, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/bg/config', '2022-11-22 05:56:22'),
(3851, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/bg/functions', '2022-11-22 05:56:22'),
(3852, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/cs/config', '2022-11-22 05:56:22');
INSERT INTO `oc_extension_path` (`extension_path_id`, `extension_install_id`, `path`, `date_added`) VALUES
(3853, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/cs/functions', '2022-11-22 05:56:22'),
(3854, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/da/config', '2022-11-22 05:56:22'),
(3855, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/da/functions', '2022-11-22 05:56:22'),
(3856, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/de/config', '2022-11-22 05:56:22'),
(3857, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/de/functions', '2022-11-22 05:56:22'),
(3858, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/en/uk', '2022-11-22 05:56:22'),
(3859, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/es/config', '2022-11-22 05:56:22'),
(3860, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/es/functions', '2022-11-22 05:56:22'),
(3861, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/fi/config', '2022-11-22 05:56:22'),
(3862, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/fi/functions', '2022-11-22 05:56:22'),
(3863, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/fr/config', '2022-11-22 05:56:22'),
(3864, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/fr/functions', '2022-11-22 05:56:22'),
(3865, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/hu/config', '2022-11-22 05:56:22'),
(3866, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/hu/functions', '2022-11-22 05:56:22'),
(3867, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/it/config', '2022-11-22 05:56:22'),
(3868, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/it/functions', '2022-11-22 05:56:22'),
(3869, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/nb/config', '2022-11-22 05:56:22'),
(3870, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/nb/functions', '2022-11-22 05:56:22'),
(3871, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/nl/config', '2022-11-22 05:56:22'),
(3872, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/nl/functions', '2022-11-22 05:56:22'),
(3873, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/pl/config', '2022-11-22 05:56:22'),
(3874, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/pl/functions', '2022-11-22 05:56:22'),
(3875, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/pt/br', '2022-11-22 05:56:22'),
(3876, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/pt/config', '2022-11-22 05:56:22'),
(3877, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/pt/functions', '2022-11-22 05:56:22'),
(3878, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/ru/config', '2022-11-22 05:56:22'),
(3879, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/ru/functions', '2022-11-22 05:56:22'),
(3880, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/sv/config', '2022-11-22 05:56:22'),
(3881, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/sv/functions', '2022-11-22 05:56:22'),
(3882, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/tr/config', '2022-11-22 05:56:22'),
(3883, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/tr/functions', '2022-11-22 05:56:22'),
(3884, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xls/Color/BIFF5.php', '2022-11-22 05:56:22'),
(3885, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xls/Color/BIFF8.php', '2022-11-22 05:56:22'),
(3886, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xls/Color/BuiltIn.php', '2022-11-22 05:56:22'),
(3887, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xls/Style/Border.php', '2022-11-22 05:56:22'),
(3888, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xls/Style/CellAlignment.php', '2022-11-22 05:56:22'),
(3889, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xls/Style/CellFont.php', '2022-11-22 05:56:22'),
(3890, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xls/Style/FillPattern.php', '2022-11-22 05:56:22'),
(3891, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xml/Style/Alignment.php', '2022-11-22 05:56:22'),
(3892, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xml/Style/Border.php', '2022-11-22 05:56:22'),
(3893, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xml/Style/Fill.php', '2022-11-22 05:56:22'),
(3894, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xml/Style/Font.php', '2022-11-22 05:56:22'),
(3895, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xml/Style/NumberFormat.php', '2022-11-22 05:56:22'),
(3896, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Reader/Xml/Style/StyleBase.php', '2022-11-22 05:56:22'),
(3897, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/Escher/DgContainer/SpgrContainer', '2022-11-22 05:56:22'),
(3898, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/Escher/DgContainer/SpgrContainer.php', '2022-11-22 05:56:22'),
(3899, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/Escher/DggContainer/BstoreContainer', '2022-11-22 05:56:22'),
(3900, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/Escher/DggContainer/BstoreContainer.php', '2022-11-22 05:56:22'),
(3901, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/JAMA/utils/Maths.php', '2022-11-22 05:56:22'),
(3902, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/OLE/PPS/File.php', '2022-11-22 05:56:22'),
(3903, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/OLE/PPS/Root.php', '2022-11-22 05:56:22'),
(3904, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Worksheet/AutoFilter/Column/Rule.php', '2022-11-22 05:56:22'),
(3905, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Ods/Cell/Comment.php', '2022-11-22 05:56:22'),
(3906, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Ods/Cell/Style.php', '2022-11-22 05:56:22'),
(3907, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xls/Style/CellAlignment.php', '2022-11-22 05:56:22'),
(3908, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xls/Style/CellBorder.php', '2022-11-22 05:56:22'),
(3909, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xls/Style/CellFill.php', '2022-11-22 05:56:22'),
(3910, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Xls/Style/ColorMap.php', '2022-11-22 05:56:22'),
(3911, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Financial/CashFlow/Constant/Periodic', '2022-11-22 05:56:22'),
(3912, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Financial/CashFlow/Constant/Periodic.php', '2022-11-22 05:56:22'),
(3913, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Financial/CashFlow/Variable/NonPeriodic.php', '2022-11-22 05:56:22'),
(3914, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Financial/CashFlow/Variable/Periodic.php', '2022-11-22 05:56:22'),
(3915, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/en/uk/config', '2022-11-22 05:56:22'),
(3916, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/pt/br/config', '2022-11-22 05:56:22'),
(3917, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/locale/pt/br/functions', '2022-11-22 05:56:22'),
(3918, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/Escher/DgContainer/SpgrContainer/SpContainer.php', '2022-11-22 05:56:22'),
(3919, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/Escher/DggContainer/BstoreContainer/BSE', '2022-11-22 05:56:22'),
(3920, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/Escher/DggContainer/BstoreContainer/BSE.php', '2022-11-22 05:56:22'),
(3921, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Financial/CashFlow/Constant/Periodic/Cumulative.php', '2022-11-22 05:56:22'),
(3922, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Financial/CashFlow/Constant/Periodic/Interest.php', '2022-11-22 05:56:22'),
(3923, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Financial/CashFlow/Constant/Periodic/InterestAndPrincipal.php', '2022-11-22 05:56:22'),
(3924, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Calculation/Financial/CashFlow/Constant/Periodic/Payments.php', '2022-11-22 05:56:22'),
(3925, 10, 'system/library/export_import/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Shared/Escher/DggContainer/BstoreContainer/BSE/Blip.php', '2022-11-22 05:56:22'),
(2740, 7, 'admin/controller/extension/payment/codfee.php', '2022-11-22 05:37:51'),
(2741, 7, 'admin/controller/extension/total/codfee_payment.php', '2022-11-22 05:37:51'),
(2742, 7, 'catalog/controller/extension/payment/codfee.php', '2022-11-22 05:37:51'),
(2743, 7, 'catalog/model/extension/payment/codfee.php', '2022-11-22 05:37:51'),
(2744, 7, 'catalog/model/extension/total/codfee_payment.php', '2022-11-22 05:37:51'),
(2745, 7, 'admin/language/en-gb/extension/payment/codfee.php', '2022-11-22 05:37:51'),
(2746, 7, 'admin/language/en-gb/extension/total/codfee_payment.php', '2022-11-22 05:37:51'),
(2747, 7, 'admin/view/template/extension/payment/codfee.tpl', '2022-11-22 05:37:51'),
(2748, 7, 'admin/view/template/extension/total/codfee_payment.tpl', '2022-11-22 05:37:51'),
(2749, 7, 'catalog/language/en-gb/extension/payment/codfee.php', '2022-11-22 05:37:51'),
(2750, 7, 'catalog/view/theme/default/template/extension/payment/codfee.twig', '2022-11-22 05:37:51');

-- --------------------------------------------------------

--
-- Table structure for table `oc_filter`
--

CREATE TABLE `oc_filter` (
  `filter_id` int(11) NOT NULL,
  `filter_group_id` int(11) NOT NULL,
  `sort_order` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_filter_description`
--

CREATE TABLE `oc_filter_description` (
  `filter_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `filter_group_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_filter_group`
--

CREATE TABLE `oc_filter_group` (
  `filter_group_id` int(11) NOT NULL,
  `sort_order` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_filter_group_description`
--

CREATE TABLE `oc_filter_group_description` (
  `filter_group_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_geo_zone`
--

CREATE TABLE `oc_geo_zone` (
  `geo_zone_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_geo_zone`
--

INSERT INTO `oc_geo_zone` (`geo_zone_id`, `name`, `description`, `date_added`, `date_modified`) VALUES
(3, 'UK VAT Zone', 'UK VAT', '2009-01-06 23:26:25', '2010-02-26 22:33:24'),
(4, 'UK Shipping', 'UK Shipping Zones', '2009-06-23 01:14:53', '2010-12-15 15:18:13');

-- --------------------------------------------------------

--
-- Table structure for table `oc_googleshopping_category`
--

CREATE TABLE `oc_googleshopping_category` (
  `google_product_category` varchar(10) NOT NULL,
  `store_id` int(11) NOT NULL DEFAULT 0,
  `category_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_googleshopping_product`
--

CREATE TABLE `oc_googleshopping_product` (
  `product_advertise_google_id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `store_id` int(11) NOT NULL DEFAULT 0,
  `has_issues` tinyint(1) DEFAULT NULL,
  `destination_status` enum('pending','approved','disapproved') NOT NULL DEFAULT 'pending',
  `impressions` int(11) NOT NULL DEFAULT 0,
  `clicks` int(11) NOT NULL DEFAULT 0,
  `conversions` int(11) NOT NULL DEFAULT 0,
  `cost` decimal(15,4) NOT NULL DEFAULT 0.0000,
  `conversion_value` decimal(15,4) NOT NULL DEFAULT 0.0000,
  `google_product_category` varchar(10) DEFAULT NULL,
  `condition` enum('new','refurbished','used') DEFAULT NULL,
  `adult` tinyint(1) DEFAULT NULL,
  `multipack` int(11) DEFAULT NULL,
  `is_bundle` tinyint(1) DEFAULT NULL,
  `age_group` enum('newborn','infant','toddler','kids','adult') DEFAULT NULL,
  `color` int(11) DEFAULT NULL,
  `gender` enum('male','female','unisex') DEFAULT NULL,
  `size_type` enum('regular','petite','plus','big and tall','maternity') DEFAULT NULL,
  `size_system` enum('AU','BR','CN','DE','EU','FR','IT','JP','MEX','UK','US') DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `is_modified` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_googleshopping_product`
--

INSERT INTO `oc_googleshopping_product` (`product_advertise_google_id`, `product_id`, `store_id`, `has_issues`, `destination_status`, `impressions`, `clicks`, `conversions`, `cost`, `conversion_value`, `google_product_category`, `condition`, `adult`, `multipack`, `is_bundle`, `age_group`, `color`, `gender`, `size_type`, `size_system`, `size`, `is_modified`) VALUES
(1, 50, 0, NULL, 'pending', 0, 0, 0, '0.0000', '0.0000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(2, 51, 0, NULL, 'pending', 0, 0, 0, '0.0000', '0.0000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(3, 52, 0, NULL, 'pending', 0, 0, 0, '0.0000', '0.0000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, 53, 0, NULL, 'pending', 0, 0, 0, '0.0000', '0.0000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `oc_googleshopping_product_status`
--

CREATE TABLE `oc_googleshopping_product_status` (
  `product_id` int(11) NOT NULL DEFAULT 0,
  `store_id` int(11) NOT NULL DEFAULT 0,
  `product_variation_id` varchar(64) NOT NULL DEFAULT '',
  `destination_statuses` text NOT NULL,
  `data_quality_issues` text NOT NULL,
  `item_level_issues` text NOT NULL,
  `google_expiration_date` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_googleshopping_product_target`
--

CREATE TABLE `oc_googleshopping_product_target` (
  `product_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL DEFAULT 0,
  `advertise_google_target_id` int(11) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_googleshopping_target`
--

CREATE TABLE `oc_googleshopping_target` (
  `advertise_google_target_id` int(11) UNSIGNED NOT NULL,
  `store_id` int(11) NOT NULL DEFAULT 0,
  `campaign_name` varchar(255) NOT NULL DEFAULT '',
  `country` varchar(2) NOT NULL DEFAULT '',
  `budget` decimal(15,4) NOT NULL DEFAULT 0.0000,
  `feeds` text NOT NULL,
  `status` enum('paused','active') NOT NULL DEFAULT 'paused',
  `date_added` date DEFAULT NULL,
  `roas` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_information`
--

CREATE TABLE `oc_information` (
  `information_id` int(11) NOT NULL,
  `bottom` int(1) NOT NULL DEFAULT 0,
  `sort_order` int(3) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_information`
--

INSERT INTO `oc_information` (`information_id`, `bottom`, `sort_order`, `status`) VALUES
(3, 1, 3, 1),
(4, 1, 1, 1),
(5, 1, 4, 1),
(6, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `oc_information_description`
--

CREATE TABLE `oc_information_description` (
  `information_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `description` mediumtext NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_information_description`
--

INSERT INTO `oc_information_description` (`information_id`, `language_id`, `title`, `description`, `meta_title`, `meta_description`, `meta_keyword`) VALUES
(4, 1, 'About Us', '&lt;p&gt;\r\n	About Us&lt;/p&gt;\r\n', 'About Us', '', ''),
(5, 1, 'Terms &amp; Conditions', '&lt;p&gt;\r\n	Terms &amp;amp; Conditions&lt;/p&gt;\r\n', 'Terms &amp; Conditions', '', ''),
(3, 1, 'Privacy Policy', '&lt;p&gt;\r\n	Privacy Policy&lt;/p&gt;\r\n', 'Privacy Policy', '', ''),
(6, 1, 'Delivery Information', '&lt;p&gt;\r\n	Delivery Information&lt;/p&gt;\r\n', 'Delivery Information', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `oc_information_to_layout`
--

CREATE TABLE `oc_information_to_layout` (
  `information_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `layout_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_information_to_store`
--

CREATE TABLE `oc_information_to_store` (
  `information_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_information_to_store`
--

INSERT INTO `oc_information_to_store` (`information_id`, `store_id`) VALUES
(3, 0),
(4, 0),
(5, 0),
(6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `oc_language`
--

CREATE TABLE `oc_language` (
  `language_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `code` varchar(5) NOT NULL,
  `locale` varchar(255) NOT NULL,
  `image` varchar(64) NOT NULL,
  `directory` varchar(32) NOT NULL,
  `sort_order` int(3) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_language`
--

INSERT INTO `oc_language` (`language_id`, `name`, `code`, `locale`, `image`, `directory`, `sort_order`, `status`) VALUES
(1, 'English', 'en-gb', 'en-US,en_US.UTF-8,en_US,en-gb,english', 'gb.png', 'english', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `oc_layout`
--

CREATE TABLE `oc_layout` (
  `layout_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_layout`
--

INSERT INTO `oc_layout` (`layout_id`, `name`) VALUES
(1, 'Home'),
(2, 'Product'),
(3, 'Category'),
(4, 'Default'),
(5, 'Manufacturer'),
(6, 'Account'),
(7, 'Checkout'),
(8, 'Contact'),
(9, 'Sitemap'),
(10, 'Affiliate'),
(11, 'Information'),
(12, 'Compare'),
(13, 'Search');

-- --------------------------------------------------------

--
-- Table structure for table `oc_layout_module`
--

CREATE TABLE `oc_layout_module` (
  `layout_module_id` int(11) NOT NULL,
  `layout_id` int(11) NOT NULL,
  `code` varchar(64) NOT NULL,
  `position` varchar(14) NOT NULL,
  `sort_order` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_layout_module`
--

INSERT INTO `oc_layout_module` (`layout_module_id`, `layout_id`, `code`, `position`, `sort_order`) VALUES
(2, 4, '0', 'content_top', 0),
(3, 4, '0', 'content_top', 1),
(20, 5, '0', 'column_left', 2),
(69, 10, 'account', 'column_right', 1),
(68, 6, 'account', 'column_right', 1),
(67, 1, 'carousel.29', 'content_top', 3),
(66, 1, 'slideshow.27', 'content_top', 1),
(65, 1, 'featured.28', 'content_top', 2),
(72, 3, 'category', 'column_left', 1),
(73, 3, 'banner.30', 'column_left', 2);

-- --------------------------------------------------------

--
-- Table structure for table `oc_layout_route`
--

CREATE TABLE `oc_layout_route` (
  `layout_route_id` int(11) NOT NULL,
  `layout_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `route` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_layout_route`
--

INSERT INTO `oc_layout_route` (`layout_route_id`, `layout_id`, `store_id`, `route`) VALUES
(38, 6, 0, 'account/%'),
(17, 10, 0, 'affiliate/%'),
(44, 3, 0, 'product/category'),
(42, 1, 0, 'common/home'),
(20, 2, 0, 'product/product'),
(24, 11, 0, 'information/information'),
(23, 7, 0, 'checkout/%'),
(31, 8, 0, 'information/contact'),
(32, 9, 0, 'information/sitemap'),
(34, 4, 0, ''),
(45, 5, 0, 'product/manufacturer'),
(52, 12, 0, 'product/compare'),
(53, 13, 0, 'product/search');

-- --------------------------------------------------------

--
-- Table structure for table `oc_length_class`
--

CREATE TABLE `oc_length_class` (
  `length_class_id` int(11) NOT NULL,
  `value` decimal(15,8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_length_class`
--

INSERT INTO `oc_length_class` (`length_class_id`, `value`) VALUES
(1, '1.00000000'),
(2, '10.00000000'),
(3, '0.39370000');

-- --------------------------------------------------------

--
-- Table structure for table `oc_length_class_description`
--

CREATE TABLE `oc_length_class_description` (
  `length_class_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `title` varchar(32) NOT NULL,
  `unit` varchar(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_length_class_description`
--

INSERT INTO `oc_length_class_description` (`length_class_id`, `language_id`, `title`, `unit`) VALUES
(1, 1, 'Centimeter', 'cm'),
(2, 1, 'Millimeter', 'mm'),
(3, 1, 'Inch', 'in');

-- --------------------------------------------------------

--
-- Table structure for table `oc_location`
--

CREATE TABLE `oc_location` (
  `location_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `address` text NOT NULL,
  `telephone` varchar(32) NOT NULL,
  `fax` varchar(32) NOT NULL,
  `geocode` varchar(32) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `open` text NOT NULL,
  `comment` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_manufacturer`
--

CREATE TABLE `oc_manufacturer` (
  `manufacturer_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `sort_order` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_manufacturer`
--

INSERT INTO `oc_manufacturer` (`manufacturer_id`, `name`, `image`, `sort_order`) VALUES
(5, 'HTC', 'catalog/demo/htc_logo.jpg', 0),
(6, 'Palm', 'catalog/demo/palm_logo.jpg', 0),
(7, 'Hewlett-Packard', 'catalog/demo/hp_logo.jpg', 0),
(8, 'Apple', 'catalog/demo/apple_logo.jpg', 0),
(9, 'Canon', 'catalog/demo/canon_logo.jpg', 0),
(10, 'Sony', 'catalog/demo/sony_logo.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `oc_manufacturer_to_store`
--

CREATE TABLE `oc_manufacturer_to_store` (
  `manufacturer_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_manufacturer_to_store`
--

INSERT INTO `oc_manufacturer_to_store` (`manufacturer_id`, `store_id`) VALUES
(5, 0),
(6, 0),
(7, 0),
(8, 0),
(9, 0),
(10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `oc_marketing`
--

CREATE TABLE `oc_marketing` (
  `marketing_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `code` varchar(64) NOT NULL,
  `clicks` int(5) NOT NULL DEFAULT 0,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_modification`
--

CREATE TABLE `oc_modification` (
  `modification_id` int(11) NOT NULL,
  `extension_install_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `code` varchar(64) NOT NULL,
  `author` varchar(64) NOT NULL,
  `version` varchar(32) NOT NULL,
  `link` varchar(255) NOT NULL,
  `xml` mediumtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_modification`
--

INSERT INTO `oc_modification` (`modification_id`, `extension_install_id`, `name`, `code`, `author`, `version`, `link`, `xml`, `status`, `date_added`) VALUES
(5, 8, '|OCT| Facebook Conversion API + Facebook Pixel + Dynamic Ads', '42626', 'opencarttools@gmail.com', '2.X - 3.X', 'http://opencarttools.net/document.php?extid=42626', '<modification>\r\n<name>|<b>OCT</b>| Facebook Conversion API + Facebook Pixel + Dynamic Ads</name>\r\n<author>opencarttools@gmail.com</author>\r\n<version>2.X - 3.X</version>\r\n<link>http://opencarttools.net/document.php?extid=42626</link>\r\n<code>42626</code>\r\n<file path=\"admin/controller/setting/*.php\">\r\n	<operation error=\"skip\">\r\n		<search position=\"before\"><![CDATA[$data[\'countries\'] =]]></search>\r\n		<add position=\"before\"><![CDATA[$data[\'fbcapidyad_html\'] = \'\';\r\n		if(file_exists(\'model/extension/fbcapidyad.php\')) { \r\n			$this->load->model(\'extension/fbcapidyad\');\r\n			$data[\'fbcapidyad_html\'] = $this->model_extension_fbcapidyad->gethtml(isset($store_info) ? $store_info : array());\r\n		}]]></add>\r\n	</operation>\r\n</file>\r\n<file path=\"admin/view/template/setting/*.*\">\r\n	<operation error=\"skip\">\r\n		<search position=\"after\"><![CDATA[id=\"tab-option\"]]></search>\r\n		<add position=\"after\"><![CDATA[{{ fbcapidyad_html }}]]></add>\r\n	</operation>\r\n</file>\r\n\r\n<file path=\"catalog/controller/common/header.php\">\r\n	<operation error=\"skip\">\r\n		<search position=\"after\"><![CDATA[$data[\'google_analytics\'] =]]></search>\r\n		<add position=\"after\"><![CDATA[if(file_exists(\'catalog/model/extension/fbcapidyad.php\')) { \r\n			$this->load->model(\'extension/fbcapidyad\');\r\n			$data[\'google_analytics\'] .= $this->model_extension_fbcapidyad->pageview();\r\n		}]]></add> \r\n	</operation>\r\n	<operation error=\"skip\">\r\n		<search position=\"after\"><![CDATA[$data[\'analytics\'] = array();]]></search>\r\n		<add position=\"after\"><![CDATA[if(file_exists(\'catalog/model/extension/fbcapidyad.php\')) { \r\n			$this->load->model(\'extension/fbcapidyad\');\r\n			$data[\'analytics\'][] = $this->model_extension_fbcapidyad->pageview();\r\n		}]]></add> \r\n	</operation>				 \r\n</file>\r\n\r\n<file path=\"catalog/controller/checkout/cart.php\">\r\n	<operation error=\"skip\">\r\n		<search position=\"after\" index=\"0\"><![CDATA[$json[\'total\'] =]]></search>\r\n		<add position=\"after\" index=\"0\"><![CDATA[if(file_exists(\'catalog/model/extension/fbcapidyad.php\')) { \r\n			$this->load->model(\'extension/fbcapidyad\');\r\n			$json[\'total\'] .= $this->model_extension_fbcapidyad->atcw($this->request->post[\'product_id\'], $quantity, 1);\r\n		}]]></add>\r\n	</operation>\r\n	<operation error=\"skip\">\r\n		<search position=\"after\" index=\"1\"><![CDATA[$json[\'total\'] =]]></search>\r\n		<add position=\"after\" index=\"1\"><![CDATA[if(file_exists(\'catalog/model/extension/fbcapidyad.php\')) { \r\n			$this->load->model(\'extension/fbcapidyad\');\r\n			$json[\'total\'] .= $this->model_extension_fbcapidyad->rmc($this->request->post[\'key\']);\r\n		}]]></add>\r\n	</operation>\r\n</file>\r\n<file path=\"catalog/controller/account/wishlist.php\">\r\n	<operation error=\"skip\">\r\n		<search position=\"after\"><![CDATA[$json[\'success\'] = sprintf($this->language->get(\'text_success\')]]></search>\r\n		<add position=\"after\"><![CDATA[if(file_exists(\'catalog/model/extension/fbcapidyad.php\')) { \r\n			$this->load->model(\'extension/fbcapidyad\');\r\n			$json[\'success\'] .= $this->model_extension_fbcapidyad->atcw($this->request->post[\'product_id\'], 1, 2);\r\n		}]]></add>\r\n	</operation> \r\n</file>\r\n<file path=\"catalog/controller/product/product.php\">\r\n	<operation error=\"skip\">\r\n		<search position=\"after\"><![CDATA[$data[\'footer\'] =]]></search>\r\n		<add position=\"after\"><![CDATA[if(file_exists(\'catalog/model/extension/fbcapidyad.php\') && isset($this->request->get[\'product_id\'])) { \r\n			$this->load->model(\'extension/fbcapidyad\');\r\n			$data[\'footer\'] .= $this->model_extension_fbcapidyad->viewcont($this->request->get[\'product_id\']);\r\n		}]]></add>\r\n	</operation> \r\n</file>\r\n<file path=\"catalog/controller/product/category.php\">\r\n	<operation error=\"skip\">\r\n		<search position=\"after\"><![CDATA[$data[\'footer\'] =]]></search>\r\n		<add position=\"after\"><![CDATA[if(file_exists(\'catalog/model/extension/fbcapidyad.php\') && isset($this->request->get[\'path\'])) { \r\n			$this->load->model(\'extension/fbcapidyad\');\r\n			$data[\'footer\'] .= $this->model_extension_fbcapidyad->viewcategory($this->request->get[\'path\']);\r\n		}]]></add>\r\n	</operation> \r\n</file>\r\n<file path=\"catalog/controller/product/search.php\">\r\n	<operation error=\"skip\">\r\n		<search position=\"after\"><![CDATA[$data[\'footer\'] =]]></search>\r\n		<add position=\"after\"><![CDATA[if(file_exists(\'catalog/model/extension/fbcapidyad.php\') && isset($this->request->get[\'search\'])) { \r\n			$this->load->model(\'extension/fbcapidyad\');\r\n			$data[\'footer\'] .= $this->model_extension_fbcapidyad->search($this->request->get[\'search\']);\r\n		}]]></add>\r\n	</operation> \r\n</file>\r\n<file path=\"catalog/controller/checkout/cart.php\">\r\n	<operation error=\"skip\">\r\n		<search position=\"after\"><![CDATA[$data[\'footer\'] =]]></search>\r\n		<add position=\"after\"><![CDATA[if(file_exists(\'catalog/model/extension/fbcapidyad.php\')) { \r\n			$this->load->model(\'extension/fbcapidyad\');\r\n			$data[\'footer\'] .= $this->model_extension_fbcapidyad->viewcart();\r\n		}]]></add>\r\n	</operation> \r\n</file>\r\n<file path=\"catalog/controller/checkout/checkout.php\">\r\n	<operation error=\"skip\">\r\n		<search position=\"after\"><![CDATA[$data[\'footer\'] =]]></search>\r\n		<add position=\"after\"><![CDATA[if(file_exists(\'catalog/model/extension/fbcapidyad.php\')) { \r\n			$this->load->model(\'extension/fbcapidyad\');\r\n			$data[\'footer\'] .= $this->model_extension_fbcapidyad->beginchk();\r\n		}]]></add>\r\n	</operation> \r\n</file>\r\n<file path=\"catalog/controller/checkout/confirm.php\">\r\n	<operation error=\"skip\">\r\n		<search position=\"before\"><![CDATA[$this->load->view]]></search>\r\n		<add position=\"before\"><![CDATA[if(file_exists(\'catalog/model/extension/fbcapidyad.php\')) { \r\n			$this->load->model(\'extension/fbcapidyad\');\r\n			$data[\'column_name\'] = $this->language->get(\'column_name\');\r\n			$data[\'column_name\'] .= $this->model_extension_fbcapidyad->addshpinfo();\r\n			$data[\'column_name\'] .= $this->model_extension_fbcapidyad->addpayinfo();				\r\n		}]]></add>\r\n	</operation> \r\n</file>\r\n<!-- J3 -->\r\n<file path=\"catalog/controller/journal3/checkout.php\">\r\n	<operation error=\"skip\">\r\n		<search position=\"after\"><![CDATA[$data[\'footer\'] =]]></search>\r\n		<add position=\"after\"><![CDATA[if(file_exists(\'catalog/model/extension/fbcapidyad.php\')) { \r\n			$this->load->model(\'extension/fbcapidyad\');\r\n			$data[\'footer\'] .= $this->model_extension_fbcapidyad->beginchk();\r\n			$data[\'footer\'] .= $this->model_extension_fbcapidyad->addshpinfo();\r\n			$data[\'footer\'] .= $this->model_extension_fbcapidyad->addpayinfo();\r\n		}]]></add>\r\n	</operation> \r\n</file>\r\n<file path=\"catalog/controller/checkout/success.php\">\r\n	<operation error=\"skip\">\r\n		<search position=\"after\"><![CDATA[function index]]></search>\r\n		<add position=\"after\"><![CDATA[$data[\'fbcapidyad_code\'] = \'\';\r\n		if(file_exists(\'catalog/model/extension/fbcapidyad.php\')) { \r\n			$this->load->model(\'extension/fbcapidyad\');\r\n			$data[\'fbcapidyad_code\'] = $this->model_extension_fbcapidyad->purchase();\r\n		}]]></add>\r\n	</operation> \r\n	<operation error=\"skip\">\r\n		<search position=\"after\"><![CDATA[$data[\'footer\'] =]]></search>\r\n		<add position=\"after\"><![CDATA[$data[\'footer\'] .= $data[\'fbcapidyad_code\'];]]></add>\r\n	</operation>\r\n</file>\r\n\r\n<file path=\"catalog/controller/account/login.php\">\r\n	<operation error=\"skip\">\r\n		<search position=\"after\"><![CDATA[$data[\'footer\'] =]]></search>\r\n		<add position=\"after\"><![CDATA[if(file_exists(\'catalog/model/extension/fbcapidyad.php\')) { \r\n			$this->load->model(\'extension/fbcapidyad\');\r\n			$data[\'footer\'] .= $this->model_extension_fbcapidyad->login();\r\n		}]]></add>\r\n	</operation> \r\n</file>\r\n<file path=\"catalog/controller/account/success.php\">\r\n	<operation error=\"skip\">\r\n		<search position=\"after\"><![CDATA[$data[\'text_message\'] =]]></search>\r\n		<add position=\"after\"><![CDATA[if(file_exists(\'catalog/model/extension/fbcapidyad.php\')) { \r\n			$this->load->model(\'extension/fbcapidyad\');\r\n			$data[\'text_message\'] .= $this->model_extension_fbcapidyad->sign_up();\r\n		}]]></add>\r\n	</operation> \r\n</file>\r\n<file path=\"catalog/controller/information/contact.php\">\r\n	<operation error=\"skip\">\r\n		<search position=\"after\"><![CDATA[$data[\'footer\'] =]]></search>\r\n		<add position=\"after\"><![CDATA[if(file_exists(\'catalog/model/extension/fbcapidyad.php\')) { \r\n			$this->load->model(\'extension/fbcapidyad\');\r\n			$data[\'footer\'] .= $this->model_extension_fbcapidyad->contact();\r\n		}]]></add>\r\n	</operation> \r\n</file>	\r\n\r\n\r\n\r\n<!-- xtensions -->	\r\n<file path=\"catalog/controller/extension/module/xtensions/checkout/xheader.php|catalog/controller/extension/module/xtensions/checkout/xsuccess_header.php\">\r\n	<operation error=\"skip\">\r\n		<search position=\"after\"><![CDATA[$this->data[\'analytics\'] = array();]]></search>\r\n		<add position=\"after\"><![CDATA[if(file_exists(\'catalog/model/extension/fbcapidyad.php\')) { \r\n			$this->load->model(\'extension/fbcapidyad\');\r\n			$this->data[\'analytics\'][] = $this->model_extension_fbcapidyad->pageview();\r\n		}]]></add>\r\n	</operation>				  \r\n</file>\r\n<file path=\"catalog/controller/extension/module/xtensions/checkout/xfooter.php\">\r\n	<operation error=\"skip\">\r\n		<search position=\"after\"><![CDATA[function index]]></search>\r\n		<add position=\"after\"><![CDATA[$this->data[\'fbcapidyad_beginchk\'] = \'\';\r\n		if(file_exists(\'catalog/model/extension/fbcapidyad.php\')) { \r\n			$this->load->model(\'extension/fbcapidyad\');\r\n			$this->data[\'fbcapidyad_beginchk\'] = $this->model_extension_fbcapidyad->beginchk();\r\n		}]]></add>\r\n	</operation> \r\n</file>\r\n<file path=\"catalog/view/theme/default/template/extension/module/xtensions/checkout/xfooter.*\">\r\n	<operation error=\"skip\">\r\n		<search position=\"before\"><![CDATA[<footer]]></search>\r\n		<add position=\"before\"><![CDATA[{{ fbcapidyad_beginchk }}]]></add>\r\n	</operation> \r\n</file>\r\n				\r\n<file path=\"catalog/controller/extension/module/xtensions_success.php\">\r\n	<operation error=\"skip\">\r\n		<search position=\"after\"><![CDATA[$order_id = $this->session->data[\'xsuccess_order_id\'];]]></search>\r\n		<add position=\"after\"><![CDATA[$data[\'fbcapidyad_code\'] = \'\';\r\n		if(file_exists(\'catalog/model/extension/fbcapidyad.php\')) { \r\n			$this->load->model(\'extension/fbcapidyad\');\r\n			$data[\'fbcapidyad_code\'] = $this->model_extension_fbcapidyad->purchase($order_id);\r\n		}]]></add>\r\n	</operation>\r\n	<operation error=\"skip\">\r\n		<search position=\"after\"><![CDATA[$this->data[\'xfooter\'] =]]></search>\r\n		<add position=\"after\"><![CDATA[$this->data[\'xfooter\'] .= $this->data[\'fbcapidyad_code\'];]]></add>\r\n	</operation> \r\n</file>\r\n</modification>', 1, '2022-11-22 05:40:43'),
(6, 9, 'Cashback By Webtuning Technology', 'payumoney', 'Webtuning Technology', '1.0.2.1', 'http://webtuningtechnology.com', '<?xml version=\"1.0\" encoding=\"utf-8\"?>\n<modification>\n    <name>Cashback By Webtuning Technology</name>\n    <code>payumoney</code>\n    <description>Payumoney payment gateway</description>\n    <version>1.0.2.1</version>\n    <author>Webtuning Technology</author>\n    <link>http://webtuningtechnology.com</link>\n</modification>', 1, '2022-11-22 05:53:31'),
(7, 10, 'Export/Import Tool (V4.13) for OpenCart 3.x', 'Export/Import Tool (V4.13) for OpenCart 3.x', 'mhccorp.com', '3.x-4.13', 'https://www.mhccorp.com', '<modification>\n	<name>Export/Import Tool (V4.13) for OpenCart 3.x</name>\n	<code>Export/Import Tool (V4.13) for OpenCart 3.x</code>\n	<version>3.x-4.13</version>\n	<author>mhccorp.com</author>\n	<link>https://www.mhccorp.com</link>\n	<file path=\"admin/controller/common/column_left.php\">\n		<operation>\n			<search><![CDATA[if ($this->user->hasPermission(\'access\', \'tool/upload\')) {]]></search>\n			<add position=\"before\"><![CDATA[\n			if ($this->user->hasPermission(\'access\', \'extension/export_import\')) {\n				$maintenance[] = array(\n					\'name\'     => $this->language->get(\'text_export_import\'),\n					\'href\'     => $this->url->link(\'extension/export_import\', \'user_token=\' . $this->session->data[\'user_token\'], true),\n					\'children\' => array()\n				);\n			}\n			]]></add>\n		</operation>\n	</file>\n	<file path=\"admin/language/*/common/column_left.php\">\n		<operation>\n			<search><![CDATA[$_[\'text_backup\']]]></search>\n			<add position=\"after\"><![CDATA[\n$_[\'text_export_import\']             = \'Export / Import\';\n			]]></add>\n		</operation>\n	</file>\n</modification>\n', 1, '2022-11-22 05:56:22');

-- --------------------------------------------------------

--
-- Table structure for table `oc_module`
--

CREATE TABLE `oc_module` (
  `module_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `code` varchar(32) NOT NULL,
  `setting` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_module`
--

INSERT INTO `oc_module` (`module_id`, `name`, `code`, `setting`) VALUES
(30, 'Category', 'banner', '{\"name\":\"Category\",\"banner_id\":\"6\",\"width\":\"182\",\"height\":\"182\",\"status\":\"1\"}'),
(29, 'Home Page', 'carousel', '{\"name\":\"Home Page\",\"banner_id\":\"8\",\"width\":\"130\",\"height\":\"100\",\"status\":\"1\"}'),
(28, 'Home Page', 'featured', '{\"name\":\"Home Page\",\"product\":[\"43\",\"40\",\"42\",\"30\"],\"limit\":\"4\",\"width\":\"200\",\"height\":\"200\",\"status\":\"1\"}'),
(27, 'Home Page', 'slideshow', '{\"name\":\"Home Page\",\"banner_id\":\"7\",\"width\":\"1140\",\"height\":\"380\",\"status\":\"1\"}'),
(31, 'Banner 1', 'banner', '{\"name\":\"Banner 1\",\"banner_id\":\"6\",\"width\":\"182\",\"height\":\"182\",\"status\":\"1\"}');

-- --------------------------------------------------------

--
-- Table structure for table `oc_option`
--

CREATE TABLE `oc_option` (
  `option_id` int(11) NOT NULL,
  `type` varchar(32) NOT NULL,
  `sort_order` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_option`
--

INSERT INTO `oc_option` (`option_id`, `type`, `sort_order`) VALUES
(1, 'radio', 1),
(2, 'checkbox', 2),
(4, 'text', 3),
(5, 'select', 4),
(6, 'textarea', 5),
(7, 'file', 6),
(8, 'date', 7),
(9, 'time', 8),
(10, 'datetime', 9),
(11, 'select', 10),
(12, 'date', 11);

-- --------------------------------------------------------

--
-- Table structure for table `oc_option_description`
--

CREATE TABLE `oc_option_description` (
  `option_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_option_description`
--

INSERT INTO `oc_option_description` (`option_id`, `language_id`, `name`) VALUES
(1, 1, 'Radio'),
(2, 1, 'Checkbox'),
(4, 1, 'Text'),
(6, 1, 'Textarea'),
(8, 1, 'Date'),
(7, 1, 'File'),
(5, 1, 'Select'),
(9, 1, 'Time'),
(10, 1, 'Date &amp; Time'),
(12, 1, 'Delivery Date'),
(11, 1, 'Size');

-- --------------------------------------------------------

--
-- Table structure for table `oc_option_value`
--

CREATE TABLE `oc_option_value` (
  `option_value_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `sort_order` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_option_value`
--

INSERT INTO `oc_option_value` (`option_value_id`, `option_id`, `image`, `sort_order`) VALUES
(43, 1, '', 3),
(32, 1, '', 1),
(45, 2, '', 4),
(44, 2, '', 3),
(42, 5, '', 4),
(41, 5, '', 3),
(39, 5, '', 1),
(40, 5, '', 2),
(31, 1, '', 2),
(23, 2, '', 1),
(24, 2, '', 2),
(46, 11, '', 1),
(47, 11, '', 2),
(48, 11, '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `oc_option_value_description`
--

CREATE TABLE `oc_option_value_description` (
  `option_value_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_option_value_description`
--

INSERT INTO `oc_option_value_description` (`option_value_id`, `language_id`, `option_id`, `name`) VALUES
(43, 1, 1, 'Large'),
(32, 1, 1, 'Small'),
(45, 1, 2, 'Checkbox 4'),
(44, 1, 2, 'Checkbox 3'),
(31, 1, 1, 'Medium'),
(42, 1, 5, 'Yellow'),
(41, 1, 5, 'Green'),
(39, 1, 5, 'Red'),
(40, 1, 5, 'Blue'),
(23, 1, 2, 'Checkbox 1'),
(24, 1, 2, 'Checkbox 2'),
(48, 1, 11, 'Large'),
(47, 1, 11, 'Medium'),
(46, 1, 11, 'Small');

-- --------------------------------------------------------

--
-- Table structure for table `oc_order`
--

CREATE TABLE `oc_order` (
  `order_id` int(11) NOT NULL,
  `invoice_no` int(11) NOT NULL DEFAULT 0,
  `invoice_prefix` varchar(26) NOT NULL,
  `store_id` int(11) NOT NULL DEFAULT 0,
  `store_name` varchar(64) NOT NULL,
  `store_url` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL DEFAULT 0,
  `customer_group_id` int(11) NOT NULL DEFAULT 0,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `email` varchar(96) NOT NULL,
  `telephone` varchar(32) NOT NULL,
  `fax` varchar(32) NOT NULL,
  `custom_field` text NOT NULL,
  `payment_firstname` varchar(32) NOT NULL,
  `payment_lastname` varchar(32) NOT NULL,
  `payment_company` varchar(60) NOT NULL,
  `payment_address_1` varchar(128) NOT NULL,
  `payment_address_2` varchar(128) NOT NULL,
  `payment_city` varchar(128) NOT NULL,
  `payment_postcode` varchar(10) NOT NULL,
  `payment_country` varchar(128) NOT NULL,
  `payment_country_id` int(11) NOT NULL,
  `payment_zone` varchar(128) NOT NULL,
  `payment_zone_id` int(11) NOT NULL,
  `payment_address_format` text NOT NULL,
  `payment_custom_field` text NOT NULL,
  `payment_method` varchar(128) NOT NULL,
  `payment_code` varchar(128) NOT NULL,
  `shipping_firstname` varchar(32) NOT NULL,
  `shipping_lastname` varchar(32) NOT NULL,
  `shipping_company` varchar(40) NOT NULL,
  `shipping_address_1` varchar(128) NOT NULL,
  `shipping_address_2` varchar(128) NOT NULL,
  `shipping_city` varchar(128) NOT NULL,
  `shipping_postcode` varchar(10) NOT NULL,
  `shipping_country` varchar(128) NOT NULL,
  `shipping_country_id` int(11) NOT NULL,
  `shipping_zone` varchar(128) NOT NULL,
  `shipping_zone_id` int(11) NOT NULL,
  `shipping_address_format` text NOT NULL,
  `shipping_custom_field` text NOT NULL,
  `shipping_method` varchar(128) NOT NULL,
  `shipping_code` varchar(128) NOT NULL,
  `comment` text NOT NULL,
  `total` decimal(15,4) NOT NULL DEFAULT 0.0000,
  `order_status_id` int(11) NOT NULL DEFAULT 0,
  `affiliate_id` int(11) NOT NULL,
  `commission` decimal(15,4) NOT NULL,
  `marketing_id` int(11) NOT NULL,
  `tracking` varchar(64) NOT NULL,
  `language_id` int(11) NOT NULL,
  `currency_id` int(11) NOT NULL,
  `currency_code` varchar(3) NOT NULL,
  `currency_value` decimal(15,8) NOT NULL DEFAULT 1.00000000,
  `ip` varchar(40) NOT NULL,
  `forwarded_ip` varchar(40) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `accept_language` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_order`
--

INSERT INTO `oc_order` (`order_id`, `invoice_no`, `invoice_prefix`, `store_id`, `store_name`, `store_url`, `customer_id`, `customer_group_id`, `firstname`, `lastname`, `email`, `telephone`, `fax`, `custom_field`, `payment_firstname`, `payment_lastname`, `payment_company`, `payment_address_1`, `payment_address_2`, `payment_city`, `payment_postcode`, `payment_country`, `payment_country_id`, `payment_zone`, `payment_zone_id`, `payment_address_format`, `payment_custom_field`, `payment_method`, `payment_code`, `shipping_firstname`, `shipping_lastname`, `shipping_company`, `shipping_address_1`, `shipping_address_2`, `shipping_city`, `shipping_postcode`, `shipping_country`, `shipping_country_id`, `shipping_zone`, `shipping_zone_id`, `shipping_address_format`, `shipping_custom_field`, `shipping_method`, `shipping_code`, `comment`, `total`, `order_status_id`, `affiliate_id`, `commission`, `marketing_id`, `tracking`, `language_id`, `currency_id`, `currency_code`, `currency_value`, `ip`, `forwarded_ip`, `user_agent`, `accept_language`, `date_added`, `date_modified`) VALUES
(1, 0, 'INV-2022-00', 0, 'Your Store', 'http://localhost/oc_test/', 0, 1, 'ronak', 'Vaya', 'ronakvaya@gmail.com', '09694998693', '', '[]', 'ronak', 'Vaya', 'countrystore', 'bapu nagar, S-61, S-61', 'S-61', 'Jaipur', '302001', 'India', 99, 'Rajasthan', 1501, '', '[]', 'Cash On Delivery With Fee ($50.00)', 'codfee', 'ronak', 'Vaya', 'countrystore', 'bapu nagar, S-61, S-61', 'S-61', 'Jaipur', '302001', 'India', 99, 'Rajasthan', 1501, '', '[]', 'Flat Shipping Rate', 'flat.flat', '', '231.0000', 0, 0, '0.0000', 0, '', 1, 2, 'USD', '1.00000000', '::1', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'en-US,en;q=0.9,hi;q=0.8,mt;q=0.7', '2022-11-22 06:01:32', '2022-11-22 06:01:32'),
(2, 0, 'INV-2022-00', 0, 'Your Store', 'http://localhost/oc_test/', 0, 1, 'ronak', 'Vaya', 'ronakvaya@gmail.com', '09694998693', '', '[]', 'ronak', 'Vaya', 'countrystore', 'bapu nagar, S-61, S-61', 'S-61', 'Jaipur', '302001', 'India', 99, 'Rajasthan', 1501, '', '[]', 'Cash On Delivery With Fee ($50.00)', 'codfee', 'ronak', 'Vaya', 'countrystore', 'bapu nagar, S-61, S-61', 'S-61', 'Jaipur', '302001', 'India', 99, 'Rajasthan', 1501, '', '[]', 'Flat Shipping Rate', 'flat.flat', '', '231.0000', 0, 0, '0.0000', 0, '', 1, 2, 'USD', '1.00000000', '::1', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'en-US,en;q=0.9,hi;q=0.8,mt;q=0.7', '2022-11-22 06:03:56', '2022-11-22 06:03:56'),
(3, 0, 'INV-2022-00', 0, 'Your Store', 'http://localhost/oc_test/', 0, 1, 'ronak', 'Vaya', 'ronakvaya@gmail.com', '09694998693', '', '[]', 'ronak', 'Vaya', 'countrystore', 'bapu nagar, S-61, S-61', 'S-61', 'Jaipur', '302001', 'India', 99, 'Rajasthan', 1501, '', '[]', 'Cash On Delivery With Fee ($50.00)', 'codfee', 'ronak', 'Vaya', 'countrystore', 'bapu nagar, S-61, S-61', 'S-61', 'Jaipur', '302001', 'India', 99, 'Rajasthan', 1501, '', '[]', 'Flat Shipping Rate', 'flat.flat', '', '249.0000', 0, 0, '0.0000', 0, '', 1, 2, 'USD', '1.00000000', '::1', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'en-US,en;q=0.9,hi;q=0.8,mt;q=0.7', '2022-11-24 05:30:13', '2022-11-24 05:30:13');

-- --------------------------------------------------------

--
-- Table structure for table `oc_order_history`
--

CREATE TABLE `oc_order_history` (
  `order_history_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_status_id` int(11) NOT NULL,
  `notify` tinyint(1) NOT NULL DEFAULT 0,
  `comment` text NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_order_option`
--

CREATE TABLE `oc_order_option` (
  `order_option_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_product_id` int(11) NOT NULL,
  `product_option_id` int(11) NOT NULL,
  `product_option_value_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `type` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_order_option`
--

INSERT INTO `oc_order_option` (`order_option_id`, `order_id`, `order_product_id`, `product_option_id`, `product_option_value_id`, `name`, `value`, `type`) VALUES
(1, 1, 1, 218, 5, 'Radio', 'Small', 'radio'),
(2, 1, 1, 223, 8, 'Checkbox', 'Checkbox 1', 'checkbox'),
(3, 1, 1, 208, 0, 'Text', 'test', 'text'),
(4, 1, 1, 217, 3, 'Select', 'Blue', 'select'),
(5, 1, 1, 209, 0, 'Textarea', 'check', 'textarea'),
(6, 1, 1, 222, 0, 'File', 'ca800994c2676db605fe04c98dee941f027529b3', 'file'),
(7, 1, 1, 219, 0, 'Date', '2011-02-20', 'date'),
(8, 1, 1, 221, 0, 'Time', '22:25', 'time'),
(9, 1, 1, 220, 0, 'Date &amp; Time', '2011-02-20 22:25', 'datetime'),
(10, 2, 2, 218, 5, 'Radio', 'Small', 'radio'),
(11, 2, 2, 223, 8, 'Checkbox', 'Checkbox 1', 'checkbox'),
(12, 2, 2, 208, 0, 'Text', 'test', 'text'),
(13, 2, 2, 217, 3, 'Select', 'Blue', 'select'),
(14, 2, 2, 209, 0, 'Textarea', 'check', 'textarea'),
(15, 2, 2, 222, 0, 'File', 'ca800994c2676db605fe04c98dee941f027529b3', 'file'),
(16, 2, 2, 219, 0, 'Date', '2011-02-20', 'date'),
(17, 2, 2, 221, 0, 'Time', '22:25', 'time'),
(18, 2, 2, 220, 0, 'Date &amp; Time', '2011-02-20 22:25', 'datetime'),
(19, 3, 3, 218, 6, 'Radio', 'Medium', 'radio'),
(20, 3, 3, 223, 8, 'Checkbox', 'Checkbox 1', 'checkbox'),
(21, 3, 3, 208, 0, 'Text', 'test', 'text'),
(22, 3, 3, 217, 2, 'Select', 'Yellow', 'select'),
(23, 3, 3, 209, 0, 'Textarea', 'check', 'textarea'),
(24, 3, 3, 222, 0, 'File', 'f4e87b70a33b1d75aff49e2c0aa53fd1de925344', 'file'),
(25, 3, 3, 219, 0, 'Date', '2011-02-20', 'date'),
(26, 3, 3, 221, 0, 'Time', '22:25', 'time'),
(27, 3, 3, 220, 0, 'Date &amp; Time', '2011-02-20 22:25', 'datetime');

-- --------------------------------------------------------

--
-- Table structure for table `oc_order_product`
--

CREATE TABLE `oc_order_product` (
  `order_product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `model` varchar(64) NOT NULL,
  `quantity` int(4) NOT NULL,
  `price` decimal(15,4) NOT NULL DEFAULT 0.0000,
  `total` decimal(15,4) NOT NULL DEFAULT 0.0000,
  `tax` decimal(15,4) NOT NULL DEFAULT 0.0000,
  `reward` int(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_order_product`
--

INSERT INTO `oc_order_product` (`order_product_id`, `order_id`, `product_id`, `name`, `model`, `quantity`, `price`, `total`, `tax`, `reward`) VALUES
(1, 1, 42, 'Apple Cinema 30&quot;', 'Product 15', 2, '113.0000', '226.0000', '0.0000', 200),
(2, 2, 42, 'Apple Cinema 30&quot;', 'Product 15', 2, '113.0000', '226.0000', '0.0000', 200),
(3, 3, 42, 'Apple Cinema 30&quot;', 'Product 15', 2, '122.0000', '244.0000', '0.0000', 200);

-- --------------------------------------------------------

--
-- Table structure for table `oc_order_recurring`
--

CREATE TABLE `oc_order_recurring` (
  `order_recurring_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `recurring_id` int(11) NOT NULL,
  `recurring_name` varchar(255) NOT NULL,
  `recurring_description` varchar(255) NOT NULL,
  `recurring_frequency` varchar(25) NOT NULL,
  `recurring_cycle` smallint(6) NOT NULL,
  `recurring_duration` smallint(6) NOT NULL,
  `recurring_price` decimal(10,4) NOT NULL,
  `trial` tinyint(1) NOT NULL,
  `trial_frequency` varchar(25) NOT NULL,
  `trial_cycle` smallint(6) NOT NULL,
  `trial_duration` smallint(6) NOT NULL,
  `trial_price` decimal(10,4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_order_recurring_transaction`
--

CREATE TABLE `oc_order_recurring_transaction` (
  `order_recurring_transaction_id` int(11) NOT NULL,
  `order_recurring_id` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `amount` decimal(10,4) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_order_shipment`
--

CREATE TABLE `oc_order_shipment` (
  `order_shipment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `shipping_courier_id` varchar(255) NOT NULL DEFAULT '',
  `tracking_number` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_order_status`
--

CREATE TABLE `oc_order_status` (
  `order_status_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_order_status`
--

INSERT INTO `oc_order_status` (`order_status_id`, `language_id`, `name`) VALUES
(2, 1, 'Processing'),
(3, 1, 'Shipped'),
(7, 1, 'Canceled'),
(5, 1, 'Complete'),
(8, 1, 'Denied'),
(9, 1, 'Canceled Reversal'),
(10, 1, 'Failed'),
(11, 1, 'Refunded'),
(12, 1, 'Reversed'),
(13, 1, 'Chargeback'),
(1, 1, 'Pending'),
(16, 1, 'Voided'),
(15, 1, 'Processed'),
(14, 1, 'Expired');

-- --------------------------------------------------------

--
-- Table structure for table `oc_order_total`
--

CREATE TABLE `oc_order_total` (
  `order_total_id` int(10) NOT NULL,
  `order_id` int(11) NOT NULL,
  `code` varchar(32) NOT NULL,
  `title` varchar(255) NOT NULL,
  `value` decimal(15,4) NOT NULL DEFAULT 0.0000,
  `sort_order` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_order_total`
--

INSERT INTO `oc_order_total` (`order_total_id`, `order_id`, `code`, `title`, `value`, `sort_order`) VALUES
(1, 1, 'sub_total', 'Sub-Total', '226.0000', 1),
(2, 1, 'shipping', 'Flat Shipping Rate', '5.0000', 3),
(3, 1, 'total', 'Total', '231.0000', 9),
(4, 2, 'sub_total', 'Sub-Total', '226.0000', 1),
(5, 2, 'shipping', 'Flat Shipping Rate', '5.0000', 3),
(6, 2, 'total', 'Total', '231.0000', 9),
(7, 3, 'sub_total', 'Sub-Total', '244.0000', 1),
(8, 3, 'shipping', 'Flat Shipping Rate', '5.0000', 3),
(9, 3, 'total', 'Total', '249.0000', 9);

-- --------------------------------------------------------

--
-- Table structure for table `oc_order_voucher`
--

CREATE TABLE `oc_order_voucher` (
  `order_voucher_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `voucher_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `code` varchar(10) NOT NULL,
  `from_name` varchar(64) NOT NULL,
  `from_email` varchar(96) NOT NULL,
  `to_name` varchar(64) NOT NULL,
  `to_email` varchar(96) NOT NULL,
  `voucher_theme_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `amount` decimal(15,4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_product`
--

CREATE TABLE `oc_product` (
  `product_id` int(11) NOT NULL,
  `model` varchar(64) NOT NULL,
  `sku` varchar(64) NOT NULL,
  `upc` varchar(12) NOT NULL,
  `ean` varchar(14) NOT NULL,
  `jan` varchar(13) NOT NULL,
  `isbn` varchar(17) NOT NULL,
  `mpn` varchar(64) NOT NULL,
  `location` varchar(128) NOT NULL,
  `quantity` int(4) NOT NULL DEFAULT 0,
  `stock_status_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `shipping` tinyint(1) NOT NULL DEFAULT 1,
  `price` decimal(15,4) NOT NULL DEFAULT 0.0000,
  `points` int(8) NOT NULL DEFAULT 0,
  `tax_class_id` int(11) NOT NULL,
  `date_available` date NOT NULL DEFAULT '0000-00-00',
  `weight` decimal(15,8) NOT NULL DEFAULT 0.00000000,
  `weight_class_id` int(11) NOT NULL DEFAULT 0,
  `length` decimal(15,8) NOT NULL DEFAULT 0.00000000,
  `width` decimal(15,8) NOT NULL DEFAULT 0.00000000,
  `height` decimal(15,8) NOT NULL DEFAULT 0.00000000,
  `length_class_id` int(11) NOT NULL DEFAULT 0,
  `subtract` tinyint(1) NOT NULL DEFAULT 1,
  `minimum` int(11) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `viewed` int(5) NOT NULL DEFAULT 0,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_product`
--

INSERT INTO `oc_product` (`product_id`, `model`, `sku`, `upc`, `ean`, `jan`, `isbn`, `mpn`, `location`, `quantity`, `stock_status_id`, `image`, `manufacturer_id`, `shipping`, `price`, `points`, `tax_class_id`, `date_available`, `weight`, `weight_class_id`, `length`, `width`, `height`, `length_class_id`, `subtract`, `minimum`, `sort_order`, `status`, `viewed`, `date_added`, `date_modified`) VALUES
(50, 'ban123', '1234', '', '', '', '', '', '', 100, 6, 'catalog/products/untitled-26.jpg', 0, 1, '5000.0000', 0, 10, '2023-01-28', '0.00000000', 1, '0.00000000', '0.00000000', '0.00000000', 1, 1, 1, 1, 1, 0, '2023-02-25 12:25:19', '2023-02-25 12:25:19'),
(51, 'ban123', '', '', '', '', '', '', '', 100, 6, 'catalog/products/untitled-71.jpg', 0, 1, '5000.0000', 0, 10, '2023-01-28', '0.00000000', 1, '0.00000000', '0.00000000', '0.00000000', 1, 1, 1, 1, 1, 0, '2023-02-25 12:25:23', '2023-02-25 12:30:52'),
(52, 'ban123', '', '', '', '', '', '', '', 100, 6, 'catalog/products/untitled-126.jpg', 0, 1, '5000.0000', 0, 10, '2023-01-28', '0.00000000', 1, '0.00000000', '0.00000000', '0.00000000', 1, 1, 1, 1, 1, 0, '2023-02-25 12:25:26', '2023-02-25 12:31:02'),
(53, 'ban123', '', '', '', '', '', '', '', 100, 6, 'catalog/products/untitled-73.jpg', 0, 1, '5000.0000', 0, 10, '2023-01-28', '0.00000000', 1, '0.00000000', '0.00000000', '0.00000000', 1, 1, 1, 1, 1, 0, '2023-02-25 12:25:26', '2023-02-25 12:31:16');

-- --------------------------------------------------------

--
-- Table structure for table `oc_product_attribute`
--

CREATE TABLE `oc_product_attribute` (
  `product_id` int(11) NOT NULL,
  `attribute_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_product_description`
--

CREATE TABLE `oc_product_description` (
  `product_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `tag` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_product_description`
--

INSERT INTO `oc_product_description` (`product_id`, `language_id`, `name`, `description`, `tag`, `meta_title`, `meta_description`, `meta_keyword`) VALUES
(50, 1, 'Designer Cushion', '&lt;p&gt;Lorem ipushm Lorem ipushm Lorem ipushm Lorem ipushm Lorem ipushm Lorem ipushm Lorem ipushm&lt;/p&gt;', '', 'Designer Cushion', '', ''),
(51, 1, 'Designer Cushion', '&lt;p&gt;Lorem ipushm Lorem ipushm Lorem ipushm Lorem ipushm Lorem ipushm Lorem ipushm Lorem ipushm&lt;/p&gt;', '', 'Designer Cushion', '', ''),
(52, 1, 'Designer Cushion', '&lt;p&gt;Lorem ipushm Lorem ipushm Lorem ipushm Lorem ipushm Lorem ipushm Lorem ipushm Lorem ipushm&lt;/p&gt;', '', 'Designer Cushion', '', ''),
(53, 1, 'Designer Cushion', '&lt;p&gt;Lorem ipushm Lorem ipushm Lorem ipushm Lorem ipushm Lorem ipushm Lorem ipushm Lorem ipushm&lt;/p&gt;', '', 'Designer Cushion', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `oc_product_discount`
--

CREATE TABLE `oc_product_discount` (
  `product_discount_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_group_id` int(11) NOT NULL,
  `quantity` int(4) NOT NULL DEFAULT 0,
  `priority` int(5) NOT NULL DEFAULT 1,
  `price` decimal(15,4) NOT NULL DEFAULT 0.0000,
  `date_start` date NOT NULL DEFAULT '0000-00-00',
  `date_end` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_product_filter`
--

CREATE TABLE `oc_product_filter` (
  `product_id` int(11) NOT NULL,
  `filter_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_product_image`
--

CREATE TABLE `oc_product_image` (
  `product_image_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `sort_order` int(3) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_product_option`
--

CREATE TABLE `oc_product_option` (
  `product_option_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `value` text NOT NULL,
  `required` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_product_option_value`
--

CREATE TABLE `oc_product_option_value` (
  `product_option_value_id` int(11) NOT NULL,
  `product_option_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `option_value_id` int(11) NOT NULL,
  `quantity` int(3) NOT NULL,
  `subtract` tinyint(1) NOT NULL,
  `price` decimal(15,4) NOT NULL,
  `price_prefix` varchar(1) NOT NULL,
  `points` int(8) NOT NULL,
  `points_prefix` varchar(1) NOT NULL,
  `weight` decimal(15,8) NOT NULL,
  `weight_prefix` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_product_recurring`
--

CREATE TABLE `oc_product_recurring` (
  `product_id` int(11) NOT NULL,
  `recurring_id` int(11) NOT NULL,
  `customer_group_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_product_related`
--

CREATE TABLE `oc_product_related` (
  `product_id` int(11) NOT NULL,
  `related_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_product_reward`
--

CREATE TABLE `oc_product_reward` (
  `product_reward_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL DEFAULT 0,
  `customer_group_id` int(11) NOT NULL DEFAULT 0,
  `points` int(8) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_product_special`
--

CREATE TABLE `oc_product_special` (
  `product_special_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_group_id` int(11) NOT NULL,
  `priority` int(5) NOT NULL DEFAULT 1,
  `price` decimal(15,4) NOT NULL DEFAULT 0.0000,
  `date_start` date NOT NULL DEFAULT '0000-00-00',
  `date_end` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_product_to_category`
--

CREATE TABLE `oc_product_to_category` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_product_to_category`
--

INSERT INTO `oc_product_to_category` (`product_id`, `category_id`) VALUES
(50, 71),
(51, 71),
(52, 71),
(53, 71);

-- --------------------------------------------------------

--
-- Table structure for table `oc_product_to_download`
--

CREATE TABLE `oc_product_to_download` (
  `product_id` int(11) NOT NULL,
  `download_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_product_to_layout`
--

CREATE TABLE `oc_product_to_layout` (
  `product_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `layout_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_product_to_layout`
--

INSERT INTO `oc_product_to_layout` (`product_id`, `store_id`, `layout_id`) VALUES
(50, 0, 0),
(51, 0, 0),
(52, 0, 0),
(53, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `oc_product_to_store`
--

CREATE TABLE `oc_product_to_store` (
  `product_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_product_to_store`
--

INSERT INTO `oc_product_to_store` (`product_id`, `store_id`) VALUES
(50, 0),
(51, 0),
(52, 0),
(53, 0);

-- --------------------------------------------------------

--
-- Table structure for table `oc_recurring`
--

CREATE TABLE `oc_recurring` (
  `recurring_id` int(11) NOT NULL,
  `price` decimal(10,4) NOT NULL,
  `frequency` enum('day','week','semi_month','month','year') NOT NULL,
  `duration` int(10) UNSIGNED NOT NULL,
  `cycle` int(10) UNSIGNED NOT NULL,
  `trial_status` tinyint(4) NOT NULL,
  `trial_price` decimal(10,4) NOT NULL,
  `trial_frequency` enum('day','week','semi_month','month','year') NOT NULL,
  `trial_duration` int(10) UNSIGNED NOT NULL,
  `trial_cycle` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL,
  `sort_order` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_recurring_description`
--

CREATE TABLE `oc_recurring_description` (
  `recurring_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_return`
--

CREATE TABLE `oc_return` (
  `return_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `email` varchar(96) NOT NULL,
  `telephone` varchar(32) NOT NULL,
  `product` varchar(255) NOT NULL,
  `model` varchar(64) NOT NULL,
  `quantity` int(4) NOT NULL,
  `opened` tinyint(1) NOT NULL,
  `return_reason_id` int(11) NOT NULL,
  `return_action_id` int(11) NOT NULL,
  `return_status_id` int(11) NOT NULL,
  `comment` text DEFAULT NULL,
  `date_ordered` date NOT NULL DEFAULT '0000-00-00',
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_return_action`
--

CREATE TABLE `oc_return_action` (
  `return_action_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_return_action`
--

INSERT INTO `oc_return_action` (`return_action_id`, `language_id`, `name`) VALUES
(1, 1, 'Refunded'),
(2, 1, 'Credit Issued'),
(3, 1, 'Replacement Sent');

-- --------------------------------------------------------

--
-- Table structure for table `oc_return_history`
--

CREATE TABLE `oc_return_history` (
  `return_history_id` int(11) NOT NULL,
  `return_id` int(11) NOT NULL,
  `return_status_id` int(11) NOT NULL,
  `notify` tinyint(1) NOT NULL,
  `comment` text NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_return_reason`
--

CREATE TABLE `oc_return_reason` (
  `return_reason_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_return_reason`
--

INSERT INTO `oc_return_reason` (`return_reason_id`, `language_id`, `name`) VALUES
(1, 1, 'Dead On Arrival'),
(2, 1, 'Received Wrong Item'),
(3, 1, 'Order Error'),
(4, 1, 'Faulty, please supply details'),
(5, 1, 'Other, please supply details');

-- --------------------------------------------------------

--
-- Table structure for table `oc_return_status`
--

CREATE TABLE `oc_return_status` (
  `return_status_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_return_status`
--

INSERT INTO `oc_return_status` (`return_status_id`, `language_id`, `name`) VALUES
(1, 1, 'Pending'),
(3, 1, 'Complete'),
(2, 1, 'Awaiting Products');

-- --------------------------------------------------------

--
-- Table structure for table `oc_review`
--

CREATE TABLE `oc_review` (
  `review_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `author` varchar(64) NOT NULL,
  `text` text NOT NULL,
  `rating` int(1) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_seo_url`
--

CREATE TABLE `oc_seo_url` (
  `seo_url_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `query` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_seo_url`
--

INSERT INTO `oc_seo_url` (`seo_url_id`, `store_id`, `language_id`, `query`, `keyword`) VALUES
(730, 0, 1, 'manufacturer_id=8', 'apple'),
(772, 0, 1, 'information_id=4', 'about_us'),
(828, 0, 1, 'manufacturer_id=9', 'canon'),
(829, 0, 1, 'manufacturer_id=5', 'htc'),
(830, 0, 1, 'manufacturer_id=7', 'hewlett-packard'),
(831, 0, 1, 'manufacturer_id=6', 'palm'),
(832, 0, 1, 'manufacturer_id=10', 'sony'),
(841, 0, 1, 'information_id=6', 'delivery'),
(842, 0, 1, 'information_id=3', 'privacy'),
(843, 0, 1, 'information_id=5', 'terms');

-- --------------------------------------------------------

--
-- Table structure for table `oc_session`
--

CREATE TABLE `oc_session` (
  `session_id` varchar(32) NOT NULL,
  `data` text NOT NULL,
  `expire` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_session`
--

INSERT INTO `oc_session` (`session_id`, `data`, `expire`) VALUES
('1b28774b094874e3b856f17a02', '{\"language\":\"en-gb\",\"currency\":\"USD\",\"user_id\":\"1\",\"user_token\":\"w1shtrpkchGuUg9b3VDCH0AX63F6nUNT\"}', '2023-01-02 06:50:48'),
('446731d95a518484d761fc7a6b', '{\"language\":\"en-gb\",\"currency\":\"USD\",\"user_id\":\"1\",\"user_token\":\"gAlQcTPP1rFwTzs3U0BJc041mVfAkvJD\"}', '2023-01-02 12:44:00'),
('b514dbe217ac44e416a7d0edc2', '{\"language\":\"en-gb\",\"currency\":\"INR\",\"user_id\":\"1\",\"user_token\":\"VrnDKMZb0NyLojfjPrt3CaYIykyAewU9\"}', '2023-02-25 13:24:51'),
('de6c491008ecfce4040e5ae6a6', '{\"language\":\"en-gb\",\"currency\":\"INR\",\"user_id\":\"1\",\"user_token\":\"hzhcWo2pAoh1VvbqgQAmXoYQrQXEc7Rs\"}', '2023-03-03 16:46:40'),
('e2e98d279c6d53852d2642b8c7', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-04-28 12:02:24'),
('eec6ebe3aa4568a96068b5b1f8', '{\"language\":\"en-gb\",\"currency\":\"INR\"}', '2023-03-04 12:11:47');

-- --------------------------------------------------------

--
-- Table structure for table `oc_setting`
--

CREATE TABLE `oc_setting` (
  `setting_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL DEFAULT 0,
  `code` varchar(128) NOT NULL,
  `key` varchar(128) NOT NULL,
  `value` text NOT NULL,
  `serialized` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_setting`
--

INSERT INTO `oc_setting` (`setting_id`, `store_id`, `code`, `key`, `value`, `serialized`) VALUES
(711, 0, 'config', 'config_file_max_size', '300000', 0),
(712, 0, 'config', 'config_file_ext_allowed', 'zip\r\ntxt\r\npng\r\njpe\r\njpeg\r\njpg\r\ngif\r\nbmp\r\nico\r\ntiff\r\ntif\r\nsvg\r\nsvgz\r\nzip\r\nrar\r\nmsi\r\ncab\r\nmp3\r\nqt\r\nmov\r\npdf\r\npsd\r\nai\r\neps\r\nps\r\ndoc', 0),
(703, 0, 'config', 'config_maintenance', '0', 0),
(704, 0, 'config', 'config_seo_url', '0', 0),
(705, 0, 'config', 'config_robots', 'abot\r\ndbot\r\nebot\r\nhbot\r\nkbot\r\nlbot\r\nmbot\r\nnbot\r\nobot\r\npbot\r\nrbot\r\nsbot\r\ntbot\r\nvbot\r\nybot\r\nzbot\r\nbot.\r\nbot/\r\n_bot\r\n.bot\r\n/bot\r\n-bot\r\n:bot\r\n(bot\r\ncrawl\r\nslurp\r\nspider\r\nseek\r\naccoona\r\nacoon\r\nadressendeutschland\r\nah-ha.com\r\nahoy\r\naltavista\r\nananzi\r\nanthill\r\nappie\r\narachnophilia\r\narale\r\naraneo\r\naranha\r\narchitext\r\naretha\r\narks\r\nasterias\r\natlocal\r\natn\r\natomz\r\naugurfind\r\nbackrub\r\nbannana_bot\r\nbaypup\r\nbdfetch\r\nbig brother\r\nbiglotron\r\nbjaaland\r\nblackwidow\r\nblaiz\r\nblog\r\nblo.\r\nbloodhound\r\nboitho\r\nbooch\r\nbradley\r\nbutterfly\r\ncalif\r\ncassandra\r\nccubee\r\ncfetch\r\ncharlotte\r\nchurl\r\ncienciaficcion\r\ncmc\r\ncollective\r\ncomagent\r\ncombine\r\ncomputingsite\r\ncsci\r\ncurl\r\ncusco\r\ndaumoa\r\ndeepindex\r\ndelorie\r\ndepspid\r\ndeweb\r\ndie blinde kuh\r\ndigger\r\nditto\r\ndmoz\r\ndocomo\r\ndownload express\r\ndtaagent\r\ndwcp\r\nebiness\r\nebingbong\r\ne-collector\r\nejupiter\r\nemacs-w3 search engine\r\nesther\r\nevliya celebi\r\nezresult\r\nfalcon\r\nfelix ide\r\nferret\r\nfetchrover\r\nfido\r\nfindlinks\r\nfireball\r\nfish search\r\nfouineur\r\nfunnelweb\r\ngazz\r\ngcreep\r\ngenieknows\r\ngetterroboplus\r\ngeturl\r\nglx\r\ngoforit\r\ngolem\r\ngrabber\r\ngrapnel\r\ngralon\r\ngriffon\r\ngromit\r\ngrub\r\ngulliver\r\nhamahakki\r\nharvest\r\nhavindex\r\nhelix\r\nheritrix\r\nhku www octopus\r\nhomerweb\r\nhtdig\r\nhtml index\r\nhtml_analyzer\r\nhtmlgobble\r\nhubater\r\nhyper-decontextualizer\r\nia_archiver\r\nibm_planetwide\r\nichiro\r\niconsurf\r\niltrovatore\r\nimage.kapsi.net\r\nimagelock\r\nincywincy\r\nindexer\r\ninfobee\r\ninformant\r\ningrid\r\ninktomisearch.com\r\ninspector web\r\nintelliagent\r\ninternet shinchakubin\r\nip3000\r\niron33\r\nisraeli-search\r\nivia\r\njack\r\njakarta\r\njavabee\r\njetbot\r\njumpstation\r\nkatipo\r\nkdd-explorer\r\nkilroy\r\nknowledge\r\nkototoi\r\nkretrieve\r\nlabelgrabber\r\nlachesis\r\nlarbin\r\nlegs\r\nlibwww\r\nlinkalarm\r\nlink validator\r\nlinkscan\r\nlockon\r\nlwp\r\nlycos\r\nmagpie\r\nmantraagent\r\nmapoftheinternet\r\nmarvin/\r\nmattie\r\nmediafox\r\nmediapartners\r\nmercator\r\nmerzscope\r\nmicrosoft url control\r\nminirank\r\nmiva\r\nmj12\r\nmnogosearch\r\nmoget\r\nmonster\r\nmoose\r\nmotor\r\nmultitext\r\nmuncher\r\nmuscatferret\r\nmwd.search\r\nmyweb\r\nnajdi\r\nnameprotect\r\nnationaldirectory\r\nnazilla\r\nncsa beta\r\nnec-meshexplorer\r\nnederland.zoek\r\nnetcarta webmap engine\r\nnetmechanic\r\nnetresearchserver\r\nnetscoop\r\nnewscan-online\r\nnhse\r\nnokia6682/\r\nnomad\r\nnoyona\r\nnutch\r\nnzexplorer\r\nobjectssearch\r\noccam\r\nomni\r\nopen text\r\nopenfind\r\nopenintelligencedata\r\norb search\r\nosis-project\r\npack rat\r\npageboy\r\npagebull\r\npage_verifier\r\npanscient\r\nparasite\r\npartnersite\r\npatric\r\npear.\r\npegasus\r\nperegrinator\r\npgp key agent\r\nphantom\r\nphpdig\r\npicosearch\r\npiltdownman\r\npimptrain\r\npinpoint\r\npioneer\r\npiranha\r\nplumtreewebaccessor\r\npogodak\r\npoirot\r\npompos\r\npoppelsdorf\r\npoppi\r\npopular iconoclast\r\npsycheclone\r\npublisher\r\npython\r\nrambler\r\nraven search\r\nroach\r\nroad runner\r\nroadhouse\r\nrobbie\r\nrobofox\r\nrobozilla\r\nrules\r\nsalty\r\nsbider\r\nscooter\r\nscoutjet\r\nscrubby\r\nsearch.\r\nsearchprocess\r\nsemanticdiscovery\r\nsenrigan\r\nsg-scout\r\nshai\'hulud\r\nshark\r\nshopwiki\r\nsidewinder\r\nsift\r\nsilk\r\nsimmany\r\nsite searcher\r\nsite valet\r\nsitetech-rover\r\nskymob.com\r\nsleek\r\nsmartwit\r\nsna-\r\nsnappy\r\nsnooper\r\nsohu\r\nspeedfind\r\nsphere\r\nsphider\r\nspinner\r\nspyder\r\nsteeler/\r\nsuke\r\nsuntek\r\nsupersnooper\r\nsurfnomore\r\nsven\r\nsygol\r\nszukacz\r\ntach black widow\r\ntarantula\r\ntempleton\r\n/teoma\r\nt-h-u-n-d-e-r-s-t-o-n-e\r\ntheophrastus\r\ntitan\r\ntitin\r\ntkwww\r\ntoutatis\r\nt-rex\r\ntutorgig\r\ntwiceler\r\ntwisted\r\nucsd\r\nudmsearch\r\nurl check\r\nupdated\r\nvagabondo\r\nvalkyrie\r\nverticrawl\r\nvictoria\r\nvision-search\r\nvolcano\r\nvoyager/\r\nvoyager-hc\r\nw3c_validator\r\nw3m2\r\nw3mir\r\nwalker\r\nwallpaper\r\nwanderer\r\nwauuu\r\nwavefire\r\nweb core\r\nweb hopper\r\nweb wombat\r\nwebbandit\r\nwebcatcher\r\nwebcopy\r\nwebfoot\r\nweblayers\r\nweblinker\r\nweblog monitor\r\nwebmirror\r\nwebmonkey\r\nwebquest\r\nwebreaper\r\nwebsitepulse\r\nwebsnarf\r\nwebstolperer\r\nwebvac\r\nwebwalk\r\nwebwatch\r\nwebwombat\r\nwebzinger\r\nwhizbang\r\nwhowhere\r\nwild ferret\r\nworldlight\r\nwwwc\r\nwwwster\r\nxenu\r\nxget\r\nxift\r\nxirq\r\nyandex\r\nyanga\r\nyeti\r\nyodao\r\nzao\r\nzippp\r\nzyborg', 0),
(713, 0, 'config', 'config_file_mime_allowed', 'text/plain\r\nimage/png\r\nimage/jpeg\r\nimage/gif\r\nimage/bmp\r\nimage/tiff\r\nimage/svg+xml\r\napplication/zip\r\n&quot;application/zip&quot;\r\napplication/x-zip\r\n&quot;application/x-zip&quot;\r\napplication/x-zip-compressed\r\n&quot;application/x-zip-compressed&quot;\r\napplication/rar\r\n&quot;application/rar&quot;\r\napplication/x-rar\r\n&quot;application/x-rar&quot;\r\napplication/x-rar-compressed\r\n&quot;application/x-rar-compressed&quot;\r\napplication/octet-stream\r\n&quot;application/octet-stream&quot;\r\naudio/mpeg\r\nvideo/quicktime\r\napplication/pdf', 0),
(710, 0, 'config', 'config_encryption', 'B7d4JHPwkU7b0DiS0Mcy2p92WY38zbN2kmOfUV2EvX3LoGc2OHsbzhvBu9i4EtygzD2BbCo19clF4nNzuXrja7LaRuvLaXA0qoSCcHGKFkhYImjbaEpUpBYExJ25raOk1VYYVhVL05YXnzzy0B3QIXauHHqcWncCUuLOsxzvl4pIMD9WL2IuqTEwdjggjB8LxBrlpXpHH98Y2Cp5a8DsA22NioW1ju3jP6PGUQebfXBIjgn6bacKEIOPEx3JAXB4u1ecdmqTveMVq3yw8v5lm8EiKccEn8oC5K1KwwjoAtJiaxN6zjEVDUH3lr5AkcsGFmya77y8gDt6qYmcXU86eu5Ip4H7NdQ2kOpHtUbHirMLgcBEp57BFRLLuOwuDcM08VOkyuYsxVhYpJKHIZi5bobmZpOOFFJG7LI7mybOaZTdviBBTOe40N4am4cirgXl2RiCjMX7NmrydxaBNWQkgZdjJMuKI4JVGk4YQQDEdjqQqKWX2GU4OmCi8kMxhUuBv135HmgnVDVXbxBotpLZx72WPu7LUcJak8WKKHanACbThZSPK6fVNMgUSOQNXLy16JxyfJOKbvMwIC7gxjYvlGu8XYACxrGD77sX4THNU0C8gXXxQbQfYPp1CzsEqvhgQm01LSnMtQu9u0PDii70dLW0h7oOau3LPfg5Z4ruBJifpB82usC0fWYMZg0bzDrCeOmD6oD9v8VGUwo75s4oE4eeQcNPyRmHoAyJSkHimZV2mQNPBExqITEgLNnfewoCGCvcacPGS5DjSCSVM76ENJZrLU4Id9ZxQIuCKSoNMMP1cPphUrOOXI2NNbOdF5yUMQiNuSBBdr3WkC1RE9GEIIVpxODztkgQH2UzH1VIVcyzxXUxL1naNjBXETcGkieVfcQjkvz6uqn4SyvTNq22Ef3AmUX2yar77bcWBgrpmt1FZ5VOofCk9GRGdl3WEYO42a8N9WT83IrMT0cjws5TGADN6mmbmLbtljjJ5awJQHiioo4OsykiH66oaQRjLCss', 0),
(709, 0, 'config', 'config_shared', '0', 0),
(706, 0, 'config', 'config_compression', '0', 0),
(707, 0, 'config', 'config_secure', '0', 0),
(708, 0, 'config', 'config_password', '1', 0),
(702, 0, 'config', 'config_mail_alert_email', '', 0),
(701, 0, 'config', 'config_mail_alert', '[\"order\"]', 1),
(700, 0, 'config', 'config_mail_smtp_timeout', '5', 0),
(699, 0, 'config', 'config_mail_smtp_port', '25', 0),
(698, 0, 'config', 'config_mail_smtp_password', '', 0),
(697, 0, 'config', 'config_mail_smtp_username', '', 0),
(696, 0, 'config', 'config_mail_smtp_hostname', '', 0),
(695, 0, 'config', 'config_mail_parameter', '', 0),
(694, 0, 'config', 'config_mail_engine', 'mail', 0),
(693, 0, 'config', 'config_icon', 'catalog/logo.png', 0),
(692, 0, 'config', 'config_logo', 'catalog/logo.png', 0),
(691, 0, 'config', 'config_captcha_page', '[\"review\",\"return\",\"contact\"]', 1),
(690, 0, 'config', 'config_captcha', '', 0),
(689, 0, 'config', 'config_return_status_id', '2', 0),
(688, 0, 'config', 'config_return_id', '0', 0),
(687, 0, 'config', 'config_affiliate_id', '0', 0),
(686, 0, 'config', 'config_affiliate_commission', '5', 0),
(685, 0, 'config', 'config_affiliate_auto', '0', 0),
(684, 0, 'config', 'config_affiliate_approval', '0', 0),
(683, 0, 'config', 'config_affiliate_group_id', '1', 0),
(682, 0, 'config', 'config_stock_checkout', '0', 0),
(681, 0, 'config', 'config_stock_warning', '1', 0),
(680, 0, 'config', 'config_stock_display', '0', 0),
(679, 0, 'config', 'config_api_id', '1', 0),
(678, 0, 'config', 'config_fraud_status_id', '7', 0),
(94, 0, 'payment_free_checkout', 'payment_free_checkout_status', '1', 0),
(95, 0, 'payment_free_checkout', 'payment_free_checkout_order_status_id', '1', 0),
(96, 0, 'payment_free_checkout', 'payment_free_checkout_sort_order', '1', 0),
(237, 0, 'payment_codfee', 'payment_codfee_total', '[{\"from_total\":\"0\",\"to_total\":\"9999999\",\"customergroup\":[\"1\"],\"fee\":\"50\"}]', 1),
(677, 0, 'config', 'config_complete_status', '[\"5\",\"3\"]', 1),
(102, 0, 'shipping_flat', 'shipping_flat_sort_order', '1', 0),
(103, 0, 'shipping_flat', 'shipping_flat_status', '1', 0),
(104, 0, 'shipping_flat', 'shipping_flat_geo_zone_id', '0', 0),
(105, 0, 'shipping_flat', 'shipping_flat_tax_class_id', '9', 0),
(106, 0, 'shipping_flat', 'shipping_flat_cost', '5.00', 0),
(107, 0, 'total_shipping', 'total_shipping_sort_order', '3', 0),
(108, 0, 'total_sub_total', 'total_sub_total_sort_order', '1', 0),
(109, 0, 'total_sub_total', 'total_sub_total_status', '1', 0),
(110, 0, 'total_tax', 'total_tax_status', '1', 0),
(111, 0, 'total_total', 'total_total_sort_order', '9', 0),
(112, 0, 'total_total', 'total_total_status', '1', 0),
(113, 0, 'total_tax', 'total_tax_sort_order', '5', 0),
(114, 0, 'total_credit', 'total_credit_sort_order', '7', 0),
(115, 0, 'total_credit', 'total_credit_status', '1', 0),
(116, 0, 'total_reward', 'total_reward_sort_order', '2', 0),
(117, 0, 'total_reward', 'total_reward_status', '1', 0),
(118, 0, 'total_shipping', 'total_shipping_status', '1', 0),
(119, 0, 'total_shipping', 'total_shipping_estimator', '1', 0),
(120, 0, 'total_coupon', 'total_coupon_sort_order', '4', 0),
(121, 0, 'total_coupon', 'total_coupon_status', '1', 0),
(122, 0, 'total_voucher', 'total_voucher_sort_order', '8', 0),
(123, 0, 'total_voucher', 'total_voucher_status', '1', 0),
(124, 0, 'module_category', 'module_category_status', '1', 0),
(125, 0, 'module_account', 'module_account_status', '1', 0),
(620, 0, 'theme_default', 'theme_default_image_wishlist_width', '47', 0),
(619, 0, 'theme_default', 'theme_default_image_compare_height', '90', 0),
(618, 0, 'theme_default', 'theme_default_image_compare_width', '90', 0),
(617, 0, 'theme_default', 'theme_default_image_related_height', '200', 0),
(616, 0, 'theme_default', 'theme_default_image_related_width', '200', 0),
(615, 0, 'theme_default', 'theme_default_image_additional_height', '1012', 0),
(614, 0, 'theme_default', 'theme_default_image_additional_width', '800', 0),
(613, 0, 'theme_default', 'theme_default_image_product_height', '1012', 0),
(612, 0, 'theme_default', 'theme_default_image_product_width', '800', 0),
(611, 0, 'theme_default', 'theme_default_image_popup_height', '1012', 0),
(610, 0, 'theme_default', 'theme_default_image_popup_width', '800', 0),
(609, 0, 'theme_default', 'theme_default_image_thumb_height', '1012', 0),
(608, 0, 'theme_default', 'theme_default_image_thumb_width', '800', 0),
(607, 0, 'theme_default', 'theme_default_image_category_height', '80', 0),
(606, 0, 'theme_default', 'theme_default_image_category_width', '80', 0),
(605, 0, 'theme_default', 'theme_default_product_description_length', '100', 0),
(604, 0, 'theme_default', 'theme_default_product_limit', '15', 0),
(603, 0, 'theme_default', 'theme_default_status', '1', 0),
(602, 0, 'theme_default', 'theme_default_directory', 'default', 0),
(150, 0, 'dashboard_activity', 'dashboard_activity_status', '1', 0),
(151, 0, 'dashboard_activity', 'dashboard_activity_sort_order', '7', 0),
(152, 0, 'dashboard_sale', 'dashboard_sale_status', '1', 0),
(153, 0, 'dashboard_sale', 'dashboard_sale_width', '3', 0),
(154, 0, 'dashboard_chart', 'dashboard_chart_status', '1', 0),
(155, 0, 'dashboard_chart', 'dashboard_chart_width', '6', 0),
(156, 0, 'dashboard_customer', 'dashboard_customer_status', '1', 0),
(157, 0, 'dashboard_customer', 'dashboard_customer_width', '3', 0),
(158, 0, 'dashboard_map', 'dashboard_map_status', '1', 0),
(159, 0, 'dashboard_map', 'dashboard_map_width', '6', 0),
(160, 0, 'dashboard_online', 'dashboard_online_status', '1', 0),
(161, 0, 'dashboard_online', 'dashboard_online_width', '3', 0),
(162, 0, 'dashboard_order', 'dashboard_order_sort_order', '1', 0),
(163, 0, 'dashboard_order', 'dashboard_order_status', '1', 0),
(164, 0, 'dashboard_order', 'dashboard_order_width', '3', 0),
(165, 0, 'dashboard_sale', 'dashboard_sale_sort_order', '2', 0),
(166, 0, 'dashboard_customer', 'dashboard_customer_sort_order', '3', 0),
(167, 0, 'dashboard_online', 'dashboard_online_sort_order', '4', 0),
(168, 0, 'dashboard_map', 'dashboard_map_sort_order', '5', 0),
(169, 0, 'dashboard_chart', 'dashboard_chart_sort_order', '6', 0),
(170, 0, 'dashboard_recent', 'dashboard_recent_status', '1', 0),
(171, 0, 'dashboard_recent', 'dashboard_recent_sort_order', '8', 0),
(172, 0, 'dashboard_activity', 'dashboard_activity_width', '4', 0),
(173, 0, 'dashboard_recent', 'dashboard_recent_width', '8', 0),
(174, 0, 'report_customer_activity', 'report_customer_activity_status', '1', 0),
(175, 0, 'report_customer_activity', 'report_customer_activity_sort_order', '1', 0),
(176, 0, 'report_customer_order', 'report_customer_order_status', '1', 0),
(177, 0, 'report_customer_order', 'report_customer_order_sort_order', '2', 0),
(178, 0, 'report_customer_reward', 'report_customer_reward_status', '1', 0),
(179, 0, 'report_customer_reward', 'report_customer_reward_sort_order', '3', 0),
(180, 0, 'report_customer_search', 'report_customer_search_sort_order', '3', 0),
(181, 0, 'report_customer_search', 'report_customer_search_status', '1', 0),
(182, 0, 'report_customer_transaction', 'report_customer_transaction_status', '1', 0),
(183, 0, 'report_customer_transaction', 'report_customer_transaction_status_sort_order', '4', 0),
(184, 0, 'report_sale_tax', 'report_sale_tax_status', '1', 0),
(185, 0, 'report_sale_tax', 'report_sale_tax_sort_order', '5', 0),
(186, 0, 'report_sale_shipping', 'report_sale_shipping_status', '1', 0),
(187, 0, 'report_sale_shipping', 'report_sale_shipping_sort_order', '6', 0),
(188, 0, 'report_sale_return', 'report_sale_return_status', '1', 0),
(189, 0, 'report_sale_return', 'report_sale_return_sort_order', '7', 0),
(190, 0, 'report_sale_order', 'report_sale_order_status', '1', 0),
(191, 0, 'report_sale_order', 'report_sale_order_sort_order', '8', 0),
(192, 0, 'report_sale_coupon', 'report_sale_coupon_status', '1', 0),
(193, 0, 'report_sale_coupon', 'report_sale_coupon_sort_order', '9', 0),
(194, 0, 'report_product_viewed', 'report_product_viewed_status', '1', 0),
(195, 0, 'report_product_viewed', 'report_product_viewed_sort_order', '10', 0),
(196, 0, 'report_product_purchased', 'report_product_purchased_status', '1', 0),
(197, 0, 'report_product_purchased', 'report_product_purchased_sort_order', '11', 0),
(198, 0, 'report_marketing', 'report_marketing_status', '1', 0),
(199, 0, 'report_marketing', 'report_marketing_sort_order', '12', 0),
(200, 0, 'developer', 'developer_theme', '1', 0),
(201, 0, 'developer', 'developer_sass', '1', 0),
(676, 0, 'config', 'config_processing_status', '[\"5\",\"1\",\"2\",\"12\",\"3\"]', 1),
(675, 0, 'config', 'config_order_status_id', '1', 0),
(674, 0, 'config', 'config_checkout_id', '0', 0),
(673, 0, 'config', 'config_checkout_guest', '1', 0),
(672, 0, 'config', 'config_cart_weight', '1', 0),
(671, 0, 'config', 'config_invoice_prefix', 'INV-2022-00', 0),
(670, 0, 'config', 'config_account_id', '0', 0),
(669, 0, 'config', 'config_login_attempts', '5', 0),
(668, 0, 'config', 'config_customer_price', '0', 0),
(667, 0, 'config', 'config_customer_group_display', '[\"1\"]', 1),
(666, 0, 'config', 'config_customer_group_id', '1', 0),
(665, 0, 'config', 'config_customer_search', '1', 0),
(205, 0, 'module_elfinder', 'module_elfinder_status', '1', 0),
(206, 0, 'fbcapidyad', 'fbcapidyad', '1', 0),
(664, 0, 'config', 'config_customer_activity', '1', 0),
(235, 0, 'payment_codfee', 'payment_codfee_tax_class_id', '0', 0),
(236, 0, 'payment_codfee', 'payment_codfee_type', 'F', 0),
(231, 0, 'payment_codfee', 'payment_codfee_order_status_id', '2', 0),
(232, 0, 'payment_codfee', 'payment_codfee_geo_zone_id', '0', 0),
(234, 0, 'payment_codfee', 'payment_codfee_sort_order', '', 0),
(233, 0, 'payment_codfee', 'payment_codfee_status', '1', 0),
(663, 0, 'config', 'config_customer_online', '1', 0),
(662, 0, 'config', 'config_tax_customer', '', 0),
(661, 0, 'config', 'config_tax_default', '', 0),
(660, 0, 'config', 'config_tax', '1', 0),
(659, 0, 'config', 'config_voucher_max', '1000', 0),
(658, 0, 'config', 'config_voucher_min', '1', 0),
(657, 0, 'config', 'config_review_guest', '1', 0),
(656, 0, 'config', 'config_review_status', '1', 0),
(655, 0, 'config', 'config_limit_admin', '20', 0),
(653, 0, 'config', 'config_fbcapidyad_evcd', '', 0),
(654, 0, 'config', 'config_product_count', '1', 0),
(643, 0, 'config', 'config_timezone', 'Asia/Kolkata', 0),
(644, 0, 'config', 'config_language', 'en-gb', 0),
(645, 0, 'config', 'config_admin_language', 'en-gb', 0),
(646, 0, 'config', 'config_currency', 'INR', 0),
(647, 0, 'config', 'config_currency_auto', '1', 0),
(648, 0, 'config', 'config_length_class_id', '1', 0),
(649, 0, 'config', 'config_weight_class_id', '1', 0),
(650, 0, 'config', 'config_fbcapidyad', '0', 0),
(651, 0, 'config', 'config_fbcapidyad_pxid', '', 0),
(652, 0, 'config', 'config_fbcapidyad_apitok', '', 0),
(639, 0, 'config', 'config_open', '', 0),
(640, 0, 'config', 'config_comment', '', 0),
(641, 0, 'config', 'config_country_id', '99', 0),
(642, 0, 'config', 'config_zone_id', '1501', 0),
(628, 0, 'config', 'config_meta_keyword', '', 0),
(629, 0, 'config', 'config_theme', 'default', 0),
(630, 0, 'config', 'config_layout_id', '4', 0),
(631, 0, 'config', 'config_name', 'Banjara Homes', 0),
(632, 0, 'config', 'config_owner', 'Banjara Homes', 0),
(633, 0, 'config', 'config_address', 'Banjara Homes', 0),
(634, 0, 'config', 'config_geocode', '', 0),
(635, 0, 'config', 'config_email', 'ronakvaya@gmail.com', 0),
(636, 0, 'config', 'config_telephone', '123456789', 0),
(637, 0, 'config', 'config_fax', '', 0),
(638, 0, 'config', 'config_image', '', 0),
(627, 0, 'config', 'config_meta_description', 'Banjara Homes', 0),
(626, 0, 'config', 'config_meta_title', 'Banjara Homes', 0),
(621, 0, 'theme_default', 'theme_default_image_wishlist_height', '47', 0),
(622, 0, 'theme_default', 'theme_default_image_cart_width', '47', 0),
(623, 0, 'theme_default', 'theme_default_image_cart_height', '47', 0),
(624, 0, 'theme_default', 'theme_default_image_location_width', '268', 0),
(625, 0, 'theme_default', 'theme_default_image_location_height', '50', 0),
(714, 0, 'config', 'config_error_display', '1', 0),
(715, 0, 'config', 'config_error_log', '1', 0),
(716, 0, 'config', 'config_error_filename', 'error.log', 0);

-- --------------------------------------------------------

--
-- Table structure for table `oc_shipping_courier`
--

CREATE TABLE `oc_shipping_courier` (
  `shipping_courier_id` int(11) NOT NULL,
  `shipping_courier_code` varchar(255) NOT NULL DEFAULT '',
  `shipping_courier_name` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_shipping_courier`
--

INSERT INTO `oc_shipping_courier` (`shipping_courier_id`, `shipping_courier_code`, `shipping_courier_name`) VALUES
(1, 'dhl', 'DHL'),
(2, 'fedex', 'Fedex'),
(3, 'ups', 'UPS'),
(4, 'royal-mail', 'Royal Mail'),
(5, 'usps', 'United States Postal Service'),
(6, 'auspost', 'Australia Post');

-- --------------------------------------------------------

--
-- Table structure for table `oc_statistics`
--

CREATE TABLE `oc_statistics` (
  `statistics_id` int(11) NOT NULL,
  `code` varchar(64) NOT NULL,
  `value` decimal(15,4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_statistics`
--

INSERT INTO `oc_statistics` (`statistics_id`, `code`, `value`) VALUES
(1, 'order_sale', '0.0000'),
(2, 'order_processing', '0.0000'),
(3, 'order_complete', '0.0000'),
(4, 'order_other', '0.0000'),
(5, 'returns', '0.0000'),
(6, 'product', '0.0000'),
(7, 'review', '0.0000');

-- --------------------------------------------------------

--
-- Table structure for table `oc_stock_status`
--

CREATE TABLE `oc_stock_status` (
  `stock_status_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_stock_status`
--

INSERT INTO `oc_stock_status` (`stock_status_id`, `language_id`, `name`) VALUES
(7, 1, 'In Stock'),
(8, 1, 'Pre-Order'),
(5, 1, 'Out Of Stock'),
(6, 1, '2-3 Days');

-- --------------------------------------------------------

--
-- Table structure for table `oc_store`
--

CREATE TABLE `oc_store` (
  `store_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `url` varchar(255) NOT NULL,
  `ssl` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_tax_class`
--

CREATE TABLE `oc_tax_class` (
  `tax_class_id` int(11) NOT NULL,
  `title` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_tax_class`
--

INSERT INTO `oc_tax_class` (`tax_class_id`, `title`, `description`, `date_added`, `date_modified`) VALUES
(9, 'Taxable Goods', 'Taxed goods', '2009-01-06 23:21:53', '2011-09-23 14:07:50'),
(10, 'Downloadable Products', 'Downloadable', '2011-09-21 22:19:39', '2011-09-22 10:27:36');

-- --------------------------------------------------------

--
-- Table structure for table `oc_tax_rate`
--

CREATE TABLE `oc_tax_rate` (
  `tax_rate_id` int(11) NOT NULL,
  `geo_zone_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(32) NOT NULL,
  `rate` decimal(15,4) NOT NULL DEFAULT 0.0000,
  `type` char(1) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_tax_rate`
--

INSERT INTO `oc_tax_rate` (`tax_rate_id`, `geo_zone_id`, `name`, `rate`, `type`, `date_added`, `date_modified`) VALUES
(86, 3, 'VAT (20%)', '20.0000', 'P', '2011-03-09 21:17:10', '2011-09-22 22:24:29'),
(87, 3, 'Eco Tax (-2.00)', '2.0000', 'F', '2011-09-21 21:49:23', '2011-09-23 00:40:19');

-- --------------------------------------------------------

--
-- Table structure for table `oc_tax_rate_to_customer_group`
--

CREATE TABLE `oc_tax_rate_to_customer_group` (
  `tax_rate_id` int(11) NOT NULL,
  `customer_group_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_tax_rate_to_customer_group`
--

INSERT INTO `oc_tax_rate_to_customer_group` (`tax_rate_id`, `customer_group_id`) VALUES
(86, 1),
(87, 1);

-- --------------------------------------------------------

--
-- Table structure for table `oc_tax_rule`
--

CREATE TABLE `oc_tax_rule` (
  `tax_rule_id` int(11) NOT NULL,
  `tax_class_id` int(11) NOT NULL,
  `tax_rate_id` int(11) NOT NULL,
  `based` varchar(10) NOT NULL,
  `priority` int(5) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_tax_rule`
--

INSERT INTO `oc_tax_rule` (`tax_rule_id`, `tax_class_id`, `tax_rate_id`, `based`, `priority`) VALUES
(121, 10, 86, 'payment', 1),
(120, 10, 87, 'store', 0),
(128, 9, 86, 'shipping', 1),
(127, 9, 87, 'shipping', 2);

-- --------------------------------------------------------

--
-- Table structure for table `oc_theme`
--

CREATE TABLE `oc_theme` (
  `theme_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `theme` varchar(64) NOT NULL,
  `route` varchar(64) NOT NULL,
  `code` mediumtext NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_translation`
--

CREATE TABLE `oc_translation` (
  `translation_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `route` varchar(64) NOT NULL,
  `key` varchar(64) NOT NULL,
  `value` text NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_upload`
--

CREATE TABLE `oc_upload` (
  `upload_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_upload`
--

INSERT INTO `oc_upload` (`upload_id`, `name`, `filename`, `code`, `date_added`) VALUES
(1, '042Invoice2022-23ElaineBeverages.pdf', '042Invoice2022-23ElaineBeverages.pdf.PorFUcAVHgkP8rn83lJ20y2VH9LYtoVA', 'ca800994c2676db605fe04c98dee941f027529b3', '2022-11-22 05:59:05'),
(2, 'Aadharback.jpeg', 'Aadharback.jpeg.Behm1vtxaoNBzs0Ufu2AI8tIhAMB6mAY', 'f4e87b70a33b1d75aff49e2c0aa53fd1de925344', '2022-11-24 05:22:38');

-- --------------------------------------------------------

--
-- Table structure for table `oc_user`
--

CREATE TABLE `oc_user` (
  `user_id` int(11) NOT NULL,
  `user_group_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `salt` varchar(9) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `email` varchar(96) NOT NULL,
  `image` varchar(255) NOT NULL,
  `code` varchar(40) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_user`
--

INSERT INTO `oc_user` (`user_id`, `user_group_id`, `username`, `password`, `salt`, `firstname`, `lastname`, `email`, `image`, `code`, `ip`, `status`, `date_added`) VALUES
(1, 1, 'admin', 'e85ba429a814c44c908014dac873e18127d82a8d', 'TkW7TsmkB', 'John', 'Doe', 'ronakvaya@gmail.com', '', '', '::1', 1, '2022-11-22 10:34:07');

-- --------------------------------------------------------

--
-- Table structure for table `oc_user_group`
--

CREATE TABLE `oc_user_group` (
  `user_group_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `permission` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_user_group`
--

INSERT INTO `oc_user_group` (`user_group_id`, `name`, `permission`) VALUES
(1, 'Administrator', '{\"access\":[\"catalog\\/attribute\",\"catalog\\/attribute_group\",\"catalog\\/category\",\"catalog\\/download\",\"catalog\\/filter\",\"catalog\\/information\",\"catalog\\/manufacturer\",\"catalog\\/option\",\"catalog\\/product\",\"catalog\\/recurring\",\"catalog\\/review\",\"common\\/column_left\",\"common\\/developer\",\"common\\/filemanager\",\"common\\/profile\",\"common\\/security\",\"customer\\/custom_field\",\"customer\\/customer\",\"customer\\/customer_approval\",\"customer\\/customer_group\",\"design\\/banner\",\"design\\/layout\",\"design\\/seo_url\",\"design\\/theme\",\"design\\/translation\",\"event\\/language\",\"event\\/statistics\",\"event\\/theme\",\"extension\\/advertise\\/google\",\"extension\\/analytics\\/google\",\"extension\\/captcha\\/basic\",\"extension\\/captcha\\/google\",\"extension\\/dashboard\\/activity\",\"extension\\/dashboard\\/chart\",\"extension\\/dashboard\\/customer\",\"extension\\/dashboard\\/map\",\"extension\\/dashboard\\/online\",\"extension\\/dashboard\\/order\",\"extension\\/dashboard\\/recent\",\"extension\\/dashboard\\/sale\",\"extension\\/export_import\",\"extension\\/extension\\/advertise\",\"extension\\/extension\\/analytics\",\"extension\\/extension\\/captcha\",\"extension\\/extension\\/dashboard\",\"extension\\/extension\\/feed\",\"extension\\/extension\\/fraud\",\"extension\\/extension\\/menu\",\"extension\\/extension\\/module\",\"extension\\/extension\\/payment\",\"extension\\/extension\\/promotion\",\"extension\\/extension\\/report\",\"extension\\/extension\\/shipping\",\"extension\\/extension\\/theme\",\"extension\\/extension\\/total\",\"extension\\/feed\\/google_base\",\"extension\\/feed\\/google_sitemap\",\"extension\\/fraud\\/fraudlabspro\",\"extension\\/fraud\\/ip\",\"extension\\/fraud\\/maxmind\",\"extension\\/module\\/account\",\"extension\\/module\\/amazon_login\",\"extension\\/module\\/amazon_pay\",\"extension\\/module\\/banner\",\"extension\\/module\\/bestseller\",\"extension\\/module\\/carousel\",\"extension\\/module\\/category\",\"extension\\/module\\/divido_calculator\",\"extension\\/module\\/elfinder\",\"extension\\/module\\/featured\",\"extension\\/module\\/filter\",\"extension\\/module\\/google_hangouts\",\"extension\\/module\\/html\",\"extension\\/module\\/information\",\"extension\\/module\\/klarna_checkout_module\",\"extension\\/module\\/latest\",\"extension\\/module\\/laybuy_layout\",\"extension\\/module\\/paypal_smart_button\",\"extension\\/module\\/pilibaba_button\",\"extension\\/module\\/pp_braintree_button\",\"extension\\/module\\/sagepay_direct_cards\",\"extension\\/module\\/sagepay_server_cards\",\"extension\\/module\\/slideshow\",\"extension\\/module\\/special\",\"extension\\/module\\/store\",\"extension\\/payment\\/alipay\",\"extension\\/payment\\/alipay_cross\",\"extension\\/payment\\/amazon_login_pay\",\"extension\\/payment\\/authorizenet_aim\",\"extension\\/payment\\/authorizenet_sim\",\"extension\\/payment\\/bank_transfer\",\"extension\\/payment\\/bluepay_hosted\",\"extension\\/payment\\/bluepay_redirect\",\"extension\\/payment\\/cardconnect\",\"extension\\/payment\\/cardinity\",\"extension\\/payment\\/cheque\",\"extension\\/payment\\/cod\",\"extension\\/payment\\/codfee\",\"extension\\/payment\\/divido\",\"extension\\/payment\\/eway\",\"extension\\/payment\\/firstdata\",\"extension\\/payment\\/firstdata_remote\",\"extension\\/payment\\/free_checkout\",\"extension\\/payment\\/g2apay\",\"extension\\/payment\\/globalpay\",\"extension\\/payment\\/globalpay_remote\",\"extension\\/payment\\/klarna_account\",\"extension\\/payment\\/klarna_checkout\",\"extension\\/payment\\/klarna_invoice\",\"extension\\/payment\\/laybuy\",\"extension\\/payment\\/liqpay\",\"extension\\/payment\\/nochex\",\"extension\\/payment\\/paymate\",\"extension\\/payment\\/paypal\",\"extension\\/payment\\/paypoint\",\"extension\\/payment\\/payza\",\"extension\\/payment\\/perpetual_payments\",\"extension\\/payment\\/pilibaba\",\"extension\\/payment\\/pp_braintree\",\"extension\\/payment\\/pp_express\",\"extension\\/payment\\/pp_payflow\",\"extension\\/payment\\/pp_payflow_iframe\",\"extension\\/payment\\/pp_pro\",\"extension\\/payment\\/pp_pro_iframe\",\"extension\\/payment\\/pp_standard\",\"extension\\/payment\\/pumcp\",\"extension\\/payment\\/realex\",\"extension\\/payment\\/realex_remote\",\"extension\\/payment\\/sagepay_direct\",\"extension\\/payment\\/sagepay_server\",\"extension\\/payment\\/sagepay_us\",\"extension\\/payment\\/securetrading_pp\",\"extension\\/payment\\/securetrading_ws\",\"extension\\/payment\\/skrill\",\"extension\\/payment\\/squareup\",\"extension\\/payment\\/twocheckout\",\"extension\\/payment\\/web_payment_software\",\"extension\\/payment\\/wechat_pay\",\"extension\\/payment\\/worldpay\",\"extension\\/report\\/customer_activity\",\"extension\\/report\\/customer_order\",\"extension\\/report\\/customer_reward\",\"extension\\/report\\/customer_search\",\"extension\\/report\\/customer_transaction\",\"extension\\/report\\/marketing\",\"extension\\/report\\/product_purchased\",\"extension\\/report\\/product_viewed\",\"extension\\/report\\/sale_coupon\",\"extension\\/report\\/sale_order\",\"extension\\/report\\/sale_return\",\"extension\\/report\\/sale_shipping\",\"extension\\/report\\/sale_tax\",\"extension\\/shipping\\/auspost\",\"extension\\/shipping\\/ec_ship\",\"extension\\/shipping\\/fedex\",\"extension\\/shipping\\/flat\",\"extension\\/shipping\\/free\",\"extension\\/shipping\\/item\",\"extension\\/shipping\\/parcelforce_48\",\"extension\\/shipping\\/pickup\",\"extension\\/shipping\\/royal_mail\",\"extension\\/shipping\\/ups\",\"extension\\/shipping\\/usps\",\"extension\\/shipping\\/weight\",\"extension\\/theme\\/default\",\"extension\\/total\\/codfee_payment\",\"extension\\/total\\/coupon\",\"extension\\/total\\/credit\",\"extension\\/total\\/handling\",\"extension\\/total\\/klarna_fee\",\"extension\\/total\\/low_order_fee\",\"extension\\/total\\/reward\",\"extension\\/total\\/shipping\",\"extension\\/total\\/sub_total\",\"extension\\/total\\/tax\",\"extension\\/total\\/total\",\"extension\\/total\\/voucher\",\"localisation\\/country\",\"localisation\\/currency\",\"localisation\\/geo_zone\",\"localisation\\/language\",\"localisation\\/length_class\",\"localisation\\/location\",\"localisation\\/order_status\",\"localisation\\/return_action\",\"localisation\\/return_reason\",\"localisation\\/return_status\",\"localisation\\/stock_status\",\"localisation\\/tax_class\",\"localisation\\/tax_rate\",\"localisation\\/weight_class\",\"localisation\\/zone\",\"mail\\/affiliate\",\"mail\\/customer\",\"mail\\/forgotten\",\"mail\\/return\",\"mail\\/reward\",\"mail\\/transaction\",\"marketing\\/contact\",\"marketing\\/coupon\",\"marketing\\/marketing\",\"marketplace\\/api\",\"marketplace\\/event\",\"marketplace\\/extension\",\"marketplace\\/install\",\"marketplace\\/installer\",\"marketplace\\/marketplace\",\"marketplace\\/modification\",\"report\\/online\",\"report\\/report\",\"report\\/statistics\",\"sale\\/order\",\"sale\\/recurring\",\"sale\\/return\",\"sale\\/voucher\",\"sale\\/voucher_theme\",\"setting\\/setting\",\"setting\\/store\",\"startup\\/error\",\"startup\\/event\",\"startup\\/login\",\"startup\\/permission\",\"startup\\/router\",\"startup\\/sass\",\"startup\\/startup\",\"tool\\/backup\",\"tool\\/log\",\"tool\\/upload\",\"user\\/api\",\"user\\/user\",\"user\\/user_permission\"],\"modify\":[\"catalog\\/attribute\",\"catalog\\/attribute_group\",\"catalog\\/category\",\"catalog\\/download\",\"catalog\\/filter\",\"catalog\\/information\",\"catalog\\/manufacturer\",\"catalog\\/option\",\"catalog\\/product\",\"catalog\\/recurring\",\"catalog\\/review\",\"common\\/column_left\",\"common\\/developer\",\"common\\/filemanager\",\"common\\/profile\",\"common\\/security\",\"customer\\/custom_field\",\"customer\\/customer\",\"customer\\/customer_approval\",\"customer\\/customer_group\",\"design\\/banner\",\"design\\/layout\",\"design\\/seo_url\",\"design\\/theme\",\"design\\/translation\",\"event\\/language\",\"event\\/statistics\",\"event\\/theme\",\"extension\\/advertise\\/google\",\"extension\\/analytics\\/google\",\"extension\\/captcha\\/basic\",\"extension\\/captcha\\/google\",\"extension\\/dashboard\\/activity\",\"extension\\/dashboard\\/chart\",\"extension\\/dashboard\\/customer\",\"extension\\/dashboard\\/map\",\"extension\\/dashboard\\/online\",\"extension\\/dashboard\\/order\",\"extension\\/dashboard\\/recent\",\"extension\\/dashboard\\/sale\",\"extension\\/export_import\",\"extension\\/extension\\/advertise\",\"extension\\/extension\\/analytics\",\"extension\\/extension\\/captcha\",\"extension\\/extension\\/dashboard\",\"extension\\/extension\\/feed\",\"extension\\/extension\\/fraud\",\"extension\\/extension\\/menu\",\"extension\\/extension\\/module\",\"extension\\/extension\\/payment\",\"extension\\/extension\\/promotion\",\"extension\\/extension\\/report\",\"extension\\/extension\\/shipping\",\"extension\\/extension\\/theme\",\"extension\\/extension\\/total\",\"extension\\/feed\\/google_base\",\"extension\\/feed\\/google_sitemap\",\"extension\\/fraud\\/fraudlabspro\",\"extension\\/fraud\\/ip\",\"extension\\/fraud\\/maxmind\",\"extension\\/module\\/account\",\"extension\\/module\\/amazon_login\",\"extension\\/module\\/amazon_pay\",\"extension\\/module\\/banner\",\"extension\\/module\\/bestseller\",\"extension\\/module\\/carousel\",\"extension\\/module\\/category\",\"extension\\/module\\/divido_calculator\",\"extension\\/module\\/elfinder\",\"extension\\/module\\/featured\",\"extension\\/module\\/filter\",\"extension\\/module\\/google_hangouts\",\"extension\\/module\\/html\",\"extension\\/module\\/information\",\"extension\\/module\\/klarna_checkout_module\",\"extension\\/module\\/latest\",\"extension\\/module\\/laybuy_layout\",\"extension\\/module\\/paypal_smart_button\",\"extension\\/module\\/pilibaba_button\",\"extension\\/module\\/pp_braintree_button\",\"extension\\/module\\/sagepay_direct_cards\",\"extension\\/module\\/sagepay_server_cards\",\"extension\\/module\\/slideshow\",\"extension\\/module\\/special\",\"extension\\/module\\/store\",\"extension\\/payment\\/alipay\",\"extension\\/payment\\/alipay_cross\",\"extension\\/payment\\/amazon_login_pay\",\"extension\\/payment\\/authorizenet_aim\",\"extension\\/payment\\/authorizenet_sim\",\"extension\\/payment\\/bank_transfer\",\"extension\\/payment\\/bluepay_hosted\",\"extension\\/payment\\/bluepay_redirect\",\"extension\\/payment\\/cardconnect\",\"extension\\/payment\\/cardinity\",\"extension\\/payment\\/cheque\",\"extension\\/payment\\/cod\",\"extension\\/payment\\/codfee\",\"extension\\/payment\\/divido\",\"extension\\/payment\\/eway\",\"extension\\/payment\\/firstdata\",\"extension\\/payment\\/firstdata_remote\",\"extension\\/payment\\/free_checkout\",\"extension\\/payment\\/g2apay\",\"extension\\/payment\\/globalpay\",\"extension\\/payment\\/globalpay_remote\",\"extension\\/payment\\/klarna_account\",\"extension\\/payment\\/klarna_checkout\",\"extension\\/payment\\/klarna_invoice\",\"extension\\/payment\\/laybuy\",\"extension\\/payment\\/liqpay\",\"extension\\/payment\\/nochex\",\"extension\\/payment\\/paymate\",\"extension\\/payment\\/paypal\",\"extension\\/payment\\/paypoint\",\"extension\\/payment\\/payza\",\"extension\\/payment\\/perpetual_payments\",\"extension\\/payment\\/pilibaba\",\"extension\\/payment\\/pp_braintree\",\"extension\\/payment\\/pp_express\",\"extension\\/payment\\/pp_payflow\",\"extension\\/payment\\/pp_payflow_iframe\",\"extension\\/payment\\/pp_pro\",\"extension\\/payment\\/pp_pro_iframe\",\"extension\\/payment\\/pp_standard\",\"extension\\/payment\\/pumcp\",\"extension\\/payment\\/realex\",\"extension\\/payment\\/realex_remote\",\"extension\\/payment\\/sagepay_direct\",\"extension\\/payment\\/sagepay_server\",\"extension\\/payment\\/sagepay_us\",\"extension\\/payment\\/securetrading_pp\",\"extension\\/payment\\/securetrading_ws\",\"extension\\/payment\\/skrill\",\"extension\\/payment\\/squareup\",\"extension\\/payment\\/twocheckout\",\"extension\\/payment\\/web_payment_software\",\"extension\\/payment\\/wechat_pay\",\"extension\\/payment\\/worldpay\",\"extension\\/report\\/customer_activity\",\"extension\\/report\\/customer_order\",\"extension\\/report\\/customer_reward\",\"extension\\/report\\/customer_search\",\"extension\\/report\\/customer_transaction\",\"extension\\/report\\/marketing\",\"extension\\/report\\/product_purchased\",\"extension\\/report\\/product_viewed\",\"extension\\/report\\/sale_coupon\",\"extension\\/report\\/sale_order\",\"extension\\/report\\/sale_return\",\"extension\\/report\\/sale_shipping\",\"extension\\/report\\/sale_tax\",\"extension\\/shipping\\/auspost\",\"extension\\/shipping\\/ec_ship\",\"extension\\/shipping\\/fedex\",\"extension\\/shipping\\/flat\",\"extension\\/shipping\\/free\",\"extension\\/shipping\\/item\",\"extension\\/shipping\\/parcelforce_48\",\"extension\\/shipping\\/pickup\",\"extension\\/shipping\\/royal_mail\",\"extension\\/shipping\\/ups\",\"extension\\/shipping\\/usps\",\"extension\\/shipping\\/weight\",\"extension\\/theme\\/default\",\"extension\\/total\\/codfee_payment\",\"extension\\/total\\/coupon\",\"extension\\/total\\/credit\",\"extension\\/total\\/handling\",\"extension\\/total\\/klarna_fee\",\"extension\\/total\\/low_order_fee\",\"extension\\/total\\/reward\",\"extension\\/total\\/shipping\",\"extension\\/total\\/sub_total\",\"extension\\/total\\/tax\",\"extension\\/total\\/total\",\"extension\\/total\\/voucher\",\"localisation\\/country\",\"localisation\\/currency\",\"localisation\\/geo_zone\",\"localisation\\/language\",\"localisation\\/length_class\",\"localisation\\/location\",\"localisation\\/order_status\",\"localisation\\/return_action\",\"localisation\\/return_reason\",\"localisation\\/return_status\",\"localisation\\/stock_status\",\"localisation\\/tax_class\",\"localisation\\/tax_rate\",\"localisation\\/weight_class\",\"localisation\\/zone\",\"mail\\/affiliate\",\"mail\\/customer\",\"mail\\/forgotten\",\"mail\\/return\",\"mail\\/reward\",\"mail\\/transaction\",\"marketing\\/contact\",\"marketing\\/coupon\",\"marketing\\/marketing\",\"marketplace\\/api\",\"marketplace\\/event\",\"marketplace\\/extension\",\"marketplace\\/install\",\"marketplace\\/installer\",\"marketplace\\/marketplace\",\"marketplace\\/modification\",\"report\\/online\",\"report\\/report\",\"report\\/statistics\",\"sale\\/order\",\"sale\\/recurring\",\"sale\\/return\",\"sale\\/voucher\",\"sale\\/voucher_theme\",\"setting\\/setting\",\"setting\\/store\",\"startup\\/error\",\"startup\\/event\",\"startup\\/login\",\"startup\\/permission\",\"startup\\/router\",\"startup\\/sass\",\"startup\\/startup\",\"tool\\/backup\",\"tool\\/log\",\"tool\\/upload\",\"user\\/api\",\"user\\/user\",\"user\\/user_permission\"]}'),
(10, 'Demonstration', '');

-- --------------------------------------------------------

--
-- Table structure for table `oc_voucher`
--

CREATE TABLE `oc_voucher` (
  `voucher_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `from_name` varchar(64) NOT NULL,
  `from_email` varchar(96) NOT NULL,
  `to_name` varchar(64) NOT NULL,
  `to_email` varchar(96) NOT NULL,
  `voucher_theme_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `amount` decimal(15,4) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_voucher_history`
--

CREATE TABLE `oc_voucher_history` (
  `voucher_history_id` int(11) NOT NULL,
  `voucher_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `amount` decimal(15,4) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oc_voucher_theme`
--

CREATE TABLE `oc_voucher_theme` (
  `voucher_theme_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_voucher_theme`
--

INSERT INTO `oc_voucher_theme` (`voucher_theme_id`, `image`) VALUES
(8, 'catalog/demo/canon_eos_5d_2.jpg'),
(7, 'catalog/demo/gift-voucher-birthday.jpg'),
(6, 'catalog/demo/apple_logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `oc_voucher_theme_description`
--

CREATE TABLE `oc_voucher_theme_description` (
  `voucher_theme_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_voucher_theme_description`
--

INSERT INTO `oc_voucher_theme_description` (`voucher_theme_id`, `language_id`, `name`) VALUES
(6, 1, 'Christmas'),
(7, 1, 'Birthday'),
(8, 1, 'General');

-- --------------------------------------------------------

--
-- Table structure for table `oc_weight_class`
--

CREATE TABLE `oc_weight_class` (
  `weight_class_id` int(11) NOT NULL,
  `value` decimal(15,8) NOT NULL DEFAULT 0.00000000
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_weight_class`
--

INSERT INTO `oc_weight_class` (`weight_class_id`, `value`) VALUES
(1, '1.00000000'),
(2, '1000.00000000'),
(5, '2.20460000'),
(6, '35.27400000');

-- --------------------------------------------------------

--
-- Table structure for table `oc_weight_class_description`
--

CREATE TABLE `oc_weight_class_description` (
  `weight_class_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `title` varchar(32) NOT NULL,
  `unit` varchar(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_weight_class_description`
--

INSERT INTO `oc_weight_class_description` (`weight_class_id`, `language_id`, `title`, `unit`) VALUES
(1, 1, 'Kilogram', 'kg'),
(2, 1, 'Gram', 'g'),
(5, 1, 'Pound ', 'lb'),
(6, 1, 'Ounce', 'oz');

-- --------------------------------------------------------

--
-- Table structure for table `oc_zone`
--

CREATE TABLE `oc_zone` (
  `zone_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `code` varchar(32) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_zone`
--

INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES
(1, 1, 'Badakhshan', 'BDS', 1),
(2, 1, 'Badghis', 'BDG', 1),
(3, 1, 'Baghlan', 'BGL', 1),
(4, 1, 'Balkh', 'BAL', 1),
(5, 1, 'Bamian', 'BAM', 1),
(6, 1, 'Farah', 'FRA', 1),
(7, 1, 'Faryab', 'FYB', 1),
(8, 1, 'Ghazni', 'GHA', 1),
(9, 1, 'Ghowr', 'GHO', 1),
(10, 1, 'Helmand', 'HEL', 1),
(11, 1, 'Herat', 'HER', 1),
(12, 1, 'Jowzjan', 'JOW', 1),
(13, 1, 'Kabul', 'KAB', 1),
(14, 1, 'Kandahar', 'KAN', 1),
(15, 1, 'Kapisa', 'KAP', 1),
(16, 1, 'Khost', 'KHO', 1),
(17, 1, 'Konar', 'KNR', 1),
(18, 1, 'Kondoz', 'KDZ', 1),
(19, 1, 'Laghman', 'LAG', 1),
(20, 1, 'Lowgar', 'LOW', 1),
(21, 1, 'Nangrahar', 'NAN', 1),
(22, 1, 'Nimruz', 'NIM', 1),
(23, 1, 'Nurestan', 'NUR', 1),
(24, 1, 'Oruzgan', 'ORU', 1),
(25, 1, 'Paktia', 'PIA', 1),
(26, 1, 'Paktika', 'PKA', 1),
(27, 1, 'Parwan', 'PAR', 1),
(28, 1, 'Samangan', 'SAM', 1),
(29, 1, 'Sar-e Pol', 'SAR', 1),
(30, 1, 'Takhar', 'TAK', 1),
(31, 1, 'Wardak', 'WAR', 1),
(32, 1, 'Zabol', 'ZAB', 1),
(33, 2, 'Berat', 'BR', 1),
(34, 2, 'Bulqize', 'BU', 1),
(35, 2, 'Delvine', 'DL', 1),
(36, 2, 'Devoll', 'DV', 1),
(37, 2, 'Diber', 'DI', 1),
(38, 2, 'Durres', 'DR', 1),
(39, 2, 'Elbasan', 'EL', 1),
(40, 2, 'Kolonje', 'ER', 1),
(41, 2, 'Fier', 'FR', 1),
(42, 2, 'Gjirokaster', 'GJ', 1),
(43, 2, 'Gramsh', 'GR', 1),
(44, 2, 'Has', 'HA', 1),
(45, 2, 'Kavaje', 'KA', 1),
(46, 2, 'Kurbin', 'KB', 1),
(47, 2, 'Kucove', 'KC', 1),
(48, 2, 'Korce', 'KO', 1),
(49, 2, 'Kruje', 'KR', 1),
(50, 2, 'Kukes', 'KU', 1),
(51, 2, 'Librazhd', 'LB', 1),
(52, 2, 'Lezhe', 'LE', 1),
(53, 2, 'Lushnje', 'LU', 1),
(54, 2, 'Malesi e Madhe', 'MM', 1),
(55, 2, 'Mallakaster', 'MK', 1),
(56, 2, 'Mat', 'MT', 1),
(57, 2, 'Mirdite', 'MR', 1),
(58, 2, 'Peqin', 'PQ', 1),
(59, 2, 'Permet', 'PR', 1),
(60, 2, 'Pogradec', 'PG', 1),
(61, 2, 'Puke', 'PU', 1),
(62, 2, 'Shkoder', 'SH', 1),
(63, 2, 'Skrapar', 'SK', 1),
(64, 2, 'Sarande', 'SR', 1),
(65, 2, 'Tepelene', 'TE', 1),
(66, 2, 'Tropoje', 'TP', 1),
(67, 2, 'Tirane', 'TR', 1),
(68, 2, 'Vlore', 'VL', 1),
(69, 3, 'Adrar', 'ADR', 1),
(70, 3, 'Ain Defla', 'ADE', 1),
(71, 3, 'Ain Temouchent', 'ATE', 1),
(72, 3, 'Alger', 'ALG', 1),
(73, 3, 'Annaba', 'ANN', 1),
(74, 3, 'Batna', 'BAT', 1),
(75, 3, 'Bechar', 'BEC', 1),
(76, 3, 'Bejaia', 'BEJ', 1),
(77, 3, 'Biskra', 'BIS', 1),
(78, 3, 'Blida', 'BLI', 1),
(79, 3, 'Bordj Bou Arreridj', 'BBA', 1),
(80, 3, 'Bouira', 'BOA', 1),
(81, 3, 'Boumerdes', 'BMD', 1),
(82, 3, 'Chlef', 'CHL', 1),
(83, 3, 'Constantine', 'CON', 1),
(84, 3, 'Djelfa', 'DJE', 1),
(85, 3, 'El Bayadh', 'EBA', 1),
(86, 3, 'El Oued', 'EOU', 1),
(87, 3, 'El Tarf', 'ETA', 1),
(88, 3, 'Ghardaia', 'GHA', 1),
(89, 3, 'Guelma', 'GUE', 1),
(90, 3, 'Illizi', 'ILL', 1),
(91, 3, 'Jijel', 'JIJ', 1),
(92, 3, 'Khenchela', 'KHE', 1),
(93, 3, 'Laghouat', 'LAG', 1),
(94, 3, 'Muaskar', 'MUA', 1),
(95, 3, 'Medea', 'MED', 1),
(96, 3, 'Mila', 'MIL', 1),
(97, 3, 'Mostaganem', 'MOS', 1),
(98, 3, 'M\'Sila', 'MSI', 1),
(99, 3, 'Naama', 'NAA', 1),
(100, 3, 'Oran', 'ORA', 1),
(101, 3, 'Ouargla', 'OUA', 1),
(102, 3, 'Oum el-Bouaghi', 'OEB', 1),
(103, 3, 'Relizane', 'REL', 1),
(104, 3, 'Saida', 'SAI', 1),
(105, 3, 'Setif', 'SET', 1),
(106, 3, 'Sidi Bel Abbes', 'SBA', 1),
(107, 3, 'Skikda', 'SKI', 1),
(108, 3, 'Souk Ahras', 'SAH', 1),
(109, 3, 'Tamanghasset', 'TAM', 1),
(110, 3, 'Tebessa', 'TEB', 1),
(111, 3, 'Tiaret', 'TIA', 1),
(112, 3, 'Tindouf', 'TIN', 1),
(113, 3, 'Tipaza', 'TIP', 1),
(114, 3, 'Tissemsilt', 'TIS', 1),
(115, 3, 'Tizi Ouzou', 'TOU', 1),
(116, 3, 'Tlemcen', 'TLE', 1),
(117, 4, 'Eastern', 'E', 1),
(118, 4, 'Manu\'a', 'M', 1),
(119, 4, 'Rose Island', 'R', 1),
(120, 4, 'Swains Island', 'S', 1),
(121, 4, 'Western', 'W', 1),
(122, 5, 'Andorra la Vella', 'ALV', 1),
(123, 5, 'Canillo', 'CAN', 1),
(124, 5, 'Encamp', 'ENC', 1),
(125, 5, 'Escaldes-Engordany', 'ESE', 1),
(126, 5, 'La Massana', 'LMA', 1),
(127, 5, 'Ordino', 'ORD', 1),
(128, 5, 'Sant Julia de Loria', 'SJL', 1),
(129, 6, 'Bengo', 'BGO', 1),
(130, 6, 'Benguela', 'BGU', 1),
(131, 6, 'Bie', 'BIE', 1),
(132, 6, 'Cabinda', 'CAB', 1),
(133, 6, 'Cuando-Cubango', 'CCU', 1),
(134, 6, 'Cuanza Norte', 'CNO', 1),
(135, 6, 'Cuanza Sul', 'CUS', 1),
(136, 6, 'Cunene', 'CNN', 1),
(137, 6, 'Huambo', 'HUA', 1),
(138, 6, 'Huila', 'HUI', 1),
(139, 6, 'Luanda', 'LUA', 1),
(140, 6, 'Lunda Norte', 'LNO', 1),
(141, 6, 'Lunda Sul', 'LSU', 1),
(142, 6, 'Malange', 'MAL', 1),
(143, 6, 'Moxico', 'MOX', 1),
(144, 6, 'Namibe', 'NAM', 1),
(145, 6, 'Uige', 'UIG', 1),
(146, 6, 'Zaire', 'ZAI', 1),
(147, 9, 'Saint George', 'ASG', 1),
(148, 9, 'Saint John', 'ASJ', 1),
(149, 9, 'Saint Mary', 'ASM', 1),
(150, 9, 'Saint Paul', 'ASL', 1),
(151, 9, 'Saint Peter', 'ASR', 1),
(152, 9, 'Saint Philip', 'ASH', 1),
(153, 9, 'Barbuda', 'BAR', 1),
(154, 9, 'Redonda', 'RED', 1),
(155, 10, 'Antartida e Islas del Atlantico', 'AN', 1),
(156, 10, 'Buenos Aires', 'BA', 1),
(157, 10, 'Catamarca', 'CA', 1),
(158, 10, 'Chaco', 'CH', 1),
(159, 10, 'Chubut', 'CU', 1),
(160, 10, 'Cordoba', 'CO', 1),
(161, 10, 'Corrientes', 'CR', 1),
(162, 10, 'Distrito Federal', 'DF', 1),
(163, 10, 'Entre Rios', 'ER', 1),
(164, 10, 'Formosa', 'FO', 1),
(165, 10, 'Jujuy', 'JU', 1),
(166, 10, 'La Pampa', 'LP', 1),
(167, 10, 'La Rioja', 'LR', 1),
(168, 10, 'Mendoza', 'ME', 1),
(169, 10, 'Misiones', 'MI', 1),
(170, 10, 'Neuquen', 'NE', 1),
(171, 10, 'Rio Negro', 'RN', 1),
(172, 10, 'Salta', 'SA', 1),
(173, 10, 'San Juan', 'SJ', 1),
(174, 10, 'San Luis', 'SL', 1),
(175, 10, 'Santa Cruz', 'SC', 1),
(176, 10, 'Santa Fe', 'SF', 1),
(177, 10, 'Santiago del Estero', 'SD', 1),
(178, 10, 'Tierra del Fuego', 'TF', 1),
(179, 10, 'Tucuman', 'TU', 1),
(180, 11, 'Aragatsotn', 'AGT', 1),
(181, 11, 'Ararat', 'ARR', 1),
(182, 11, 'Armavir', 'ARM', 1),
(183, 11, 'Geghark\'unik\'', 'GEG', 1),
(184, 11, 'Kotayk\'', 'KOT', 1),
(185, 11, 'Lorri', 'LOR', 1),
(186, 11, 'Shirak', 'SHI', 1),
(187, 11, 'Syunik\'', 'SYU', 1),
(188, 11, 'Tavush', 'TAV', 1),
(189, 11, 'Vayots\' Dzor', 'VAY', 1),
(190, 11, 'Yerevan', 'YER', 1),
(191, 13, 'Australian Capital Territory', 'ACT', 1),
(192, 13, 'New South Wales', 'NSW', 1),
(193, 13, 'Northern Territory', 'NT', 1),
(194, 13, 'Queensland', 'QLD', 1),
(195, 13, 'South Australia', 'SA', 1),
(196, 13, 'Tasmania', 'TAS', 1),
(197, 13, 'Victoria', 'VIC', 1),
(198, 13, 'Western Australia', 'WA', 1),
(199, 14, 'Burgenland', 'BUR', 1),
(200, 14, 'Kärnten', 'KAR', 1),
(201, 14, 'Niederösterreich', 'NOS', 1),
(202, 14, 'Oberösterreich', 'OOS', 1),
(203, 14, 'Salzburg', 'SAL', 1),
(204, 14, 'Steiermark', 'STE', 1),
(205, 14, 'Tirol', 'TIR', 1),
(206, 14, 'Vorarlberg', 'VOR', 1),
(207, 14, 'Wien', 'WIE', 1),
(208, 15, 'Ali Bayramli', 'AB', 1),
(209, 15, 'Abseron', 'ABS', 1),
(210, 15, 'AgcabAdi', 'AGC', 1),
(211, 15, 'Agdam', 'AGM', 1),
(212, 15, 'Agdas', 'AGS', 1),
(213, 15, 'Agstafa', 'AGA', 1),
(214, 15, 'Agsu', 'AGU', 1),
(215, 15, 'Astara', 'AST', 1),
(216, 15, 'Baki', 'BA', 1),
(217, 15, 'BabAk', 'BAB', 1),
(218, 15, 'BalakAn', 'BAL', 1),
(219, 15, 'BArdA', 'BAR', 1),
(220, 15, 'Beylaqan', 'BEY', 1),
(221, 15, 'Bilasuvar', 'BIL', 1),
(222, 15, 'Cabrayil', 'CAB', 1),
(223, 15, 'Calilabab', 'CAL', 1),
(224, 15, 'Culfa', 'CUL', 1),
(225, 15, 'Daskasan', 'DAS', 1),
(226, 15, 'Davaci', 'DAV', 1),
(227, 15, 'Fuzuli', 'FUZ', 1),
(228, 15, 'Ganca', 'GA', 1),
(229, 15, 'Gadabay', 'GAD', 1),
(230, 15, 'Goranboy', 'GOR', 1),
(231, 15, 'Goycay', 'GOY', 1),
(232, 15, 'Haciqabul', 'HAC', 1),
(233, 15, 'Imisli', 'IMI', 1),
(234, 15, 'Ismayilli', 'ISM', 1),
(235, 15, 'Kalbacar', 'KAL', 1),
(236, 15, 'Kurdamir', 'KUR', 1),
(237, 15, 'Lankaran', 'LA', 1),
(238, 15, 'Lacin', 'LAC', 1),
(239, 15, 'Lankaran', 'LAN', 1),
(240, 15, 'Lerik', 'LER', 1),
(241, 15, 'Masalli', 'MAS', 1),
(242, 15, 'Mingacevir', 'MI', 1),
(243, 15, 'Naftalan', 'NA', 1),
(244, 15, 'Neftcala', 'NEF', 1),
(245, 15, 'Oguz', 'OGU', 1),
(246, 15, 'Ordubad', 'ORD', 1),
(247, 15, 'Qabala', 'QAB', 1),
(248, 15, 'Qax', 'QAX', 1),
(249, 15, 'Qazax', 'QAZ', 1),
(250, 15, 'Qobustan', 'QOB', 1),
(251, 15, 'Quba', 'QBA', 1),
(252, 15, 'Qubadli', 'QBI', 1),
(253, 15, 'Qusar', 'QUS', 1),
(254, 15, 'Saki', 'SA', 1),
(255, 15, 'Saatli', 'SAT', 1),
(256, 15, 'Sabirabad', 'SAB', 1),
(257, 15, 'Sadarak', 'SAD', 1),
(258, 15, 'Sahbuz', 'SAH', 1),
(259, 15, 'Saki', 'SAK', 1),
(260, 15, 'Salyan', 'SAL', 1),
(261, 15, 'Sumqayit', 'SM', 1),
(262, 15, 'Samaxi', 'SMI', 1),
(263, 15, 'Samkir', 'SKR', 1),
(264, 15, 'Samux', 'SMX', 1),
(265, 15, 'Sarur', 'SAR', 1),
(266, 15, 'Siyazan', 'SIY', 1),
(267, 15, 'Susa', 'SS', 1),
(268, 15, 'Susa', 'SUS', 1),
(269, 15, 'Tartar', 'TAR', 1),
(270, 15, 'Tovuz', 'TOV', 1),
(271, 15, 'Ucar', 'UCA', 1),
(272, 15, 'Xankandi', 'XA', 1),
(273, 15, 'Xacmaz', 'XAC', 1),
(274, 15, 'Xanlar', 'XAN', 1),
(275, 15, 'Xizi', 'XIZ', 1),
(276, 15, 'Xocali', 'XCI', 1),
(277, 15, 'Xocavand', 'XVD', 1),
(278, 15, 'Yardimli', 'YAR', 1),
(279, 15, 'Yevlax', 'YEV', 1),
(280, 15, 'Zangilan', 'ZAN', 1),
(281, 15, 'Zaqatala', 'ZAQ', 1),
(282, 15, 'Zardab', 'ZAR', 1),
(283, 15, 'Naxcivan', 'NX', 1),
(284, 16, 'Acklins', 'ACK', 1),
(285, 16, 'Berry Islands', 'BER', 1),
(286, 16, 'Bimini', 'BIM', 1),
(287, 16, 'Black Point', 'BLK', 1),
(288, 16, 'Cat Island', 'CAT', 1),
(289, 16, 'Central Abaco', 'CAB', 1),
(290, 16, 'Central Andros', 'CAN', 1),
(291, 16, 'Central Eleuthera', 'CEL', 1),
(292, 16, 'City of Freeport', 'FRE', 1),
(293, 16, 'Crooked Island', 'CRO', 1),
(294, 16, 'East Grand Bahama', 'EGB', 1),
(295, 16, 'Exuma', 'EXU', 1),
(296, 16, 'Grand Cay', 'GRD', 1),
(297, 16, 'Harbour Island', 'HAR', 1),
(298, 16, 'Hope Town', 'HOP', 1),
(299, 16, 'Inagua', 'INA', 1),
(300, 16, 'Long Island', 'LNG', 1),
(301, 16, 'Mangrove Cay', 'MAN', 1),
(302, 16, 'Mayaguana', 'MAY', 1),
(303, 16, 'Moore\'s Island', 'MOO', 1),
(304, 16, 'North Abaco', 'NAB', 1),
(305, 16, 'North Andros', 'NAN', 1),
(306, 16, 'North Eleuthera', 'NEL', 1),
(307, 16, 'Ragged Island', 'RAG', 1),
(308, 16, 'Rum Cay', 'RUM', 1),
(309, 16, 'San Salvador', 'SAL', 1),
(310, 16, 'South Abaco', 'SAB', 1),
(311, 16, 'South Andros', 'SAN', 1),
(312, 16, 'South Eleuthera', 'SEL', 1),
(313, 16, 'Spanish Wells', 'SWE', 1),
(314, 16, 'West Grand Bahama', 'WGB', 1),
(315, 17, 'Capital', 'CAP', 1),
(316, 17, 'Central', 'CEN', 1),
(317, 17, 'Muharraq', 'MUH', 1),
(318, 17, 'Northern', 'NOR', 1),
(319, 17, 'Southern', 'SOU', 1),
(320, 18, 'Barisal', 'BAR', 1),
(321, 18, 'Chittagong', 'CHI', 1),
(322, 18, 'Dhaka', 'DHA', 1),
(323, 18, 'Khulna', 'KHU', 1),
(324, 18, 'Rajshahi', 'RAJ', 1),
(325, 18, 'Sylhet', 'SYL', 1),
(326, 19, 'Christ Church', 'CC', 1),
(327, 19, 'Saint Andrew', 'AND', 1),
(328, 19, 'Saint George', 'GEO', 1),
(329, 19, 'Saint James', 'JAM', 1),
(330, 19, 'Saint John', 'JOH', 1),
(331, 19, 'Saint Joseph', 'JOS', 1),
(332, 19, 'Saint Lucy', 'LUC', 1),
(333, 19, 'Saint Michael', 'MIC', 1),
(334, 19, 'Saint Peter', 'PET', 1),
(335, 19, 'Saint Philip', 'PHI', 1),
(336, 19, 'Saint Thomas', 'THO', 1),
(337, 20, 'Brestskaya (Brest)', 'BR', 1),
(338, 20, 'Homyel\'skaya (Homyel\')', 'HO', 1),
(339, 20, 'Horad Minsk', 'HM', 1),
(340, 20, 'Hrodzyenskaya (Hrodna)', 'HR', 1),
(341, 20, 'Mahilyowskaya (Mahilyow)', 'MA', 1),
(342, 20, 'Minskaya', 'MI', 1),
(343, 20, 'Vitsyebskaya (Vitsyebsk)', 'VI', 1),
(344, 21, 'Antwerpen', 'VAN', 1),
(345, 21, 'Brabant Wallon', 'WBR', 1),
(346, 21, 'Hainaut', 'WHT', 1),
(347, 21, 'Liège', 'WLG', 1),
(348, 21, 'Limburg', 'VLI', 1),
(349, 21, 'Luxembourg', 'WLX', 1),
(350, 21, 'Namur', 'WNA', 1),
(351, 21, 'Oost-Vlaanderen', 'VOV', 1),
(352, 21, 'Vlaams Brabant', 'VBR', 1),
(353, 21, 'West-Vlaanderen', 'VWV', 1),
(354, 22, 'Belize', 'BZ', 1),
(355, 22, 'Cayo', 'CY', 1),
(356, 22, 'Corozal', 'CR', 1),
(357, 22, 'Orange Walk', 'OW', 1),
(358, 22, 'Stann Creek', 'SC', 1),
(359, 22, 'Toledo', 'TO', 1),
(360, 23, 'Alibori', 'AL', 1),
(361, 23, 'Atakora', 'AK', 1),
(362, 23, 'Atlantique', 'AQ', 1),
(363, 23, 'Borgou', 'BO', 1),
(364, 23, 'Collines', 'CO', 1),
(365, 23, 'Donga', 'DO', 1),
(366, 23, 'Kouffo', 'KO', 1),
(367, 23, 'Littoral', 'LI', 1),
(368, 23, 'Mono', 'MO', 1),
(369, 23, 'Oueme', 'OU', 1),
(370, 23, 'Plateau', 'PL', 1),
(371, 23, 'Zou', 'ZO', 1),
(372, 24, 'Devonshire', 'DS', 1),
(373, 24, 'Hamilton City', 'HC', 1),
(374, 24, 'Hamilton', 'HA', 1),
(375, 24, 'Paget', 'PG', 1),
(376, 24, 'Pembroke', 'PB', 1),
(377, 24, 'Saint George City', 'GC', 1),
(378, 24, 'Saint George\'s', 'SG', 1),
(379, 24, 'Sandys', 'SA', 1),
(380, 24, 'Smith\'s', 'SM', 1),
(381, 24, 'Southampton', 'SH', 1),
(382, 24, 'Warwick', 'WA', 1),
(383, 25, 'Bumthang', 'BUM', 1),
(384, 25, 'Chukha', 'CHU', 1),
(385, 25, 'Dagana', 'DAG', 1),
(386, 25, 'Gasa', 'GAS', 1),
(387, 25, 'Haa', 'HAA', 1),
(388, 25, 'Lhuntse', 'LHU', 1),
(389, 25, 'Mongar', 'MON', 1),
(390, 25, 'Paro', 'PAR', 1),
(391, 25, 'Pemagatshel', 'PEM', 1),
(392, 25, 'Punakha', 'PUN', 1),
(393, 25, 'Samdrup Jongkhar', 'SJO', 1),
(394, 25, 'Samtse', 'SAT', 1),
(395, 25, 'Sarpang', 'SAR', 1),
(396, 25, 'Thimphu', 'THI', 1),
(397, 25, 'Trashigang', 'TRG', 1),
(398, 25, 'Trashiyangste', 'TRY', 1),
(399, 25, 'Trongsa', 'TRO', 1),
(400, 25, 'Tsirang', 'TSI', 1),
(401, 25, 'Wangdue Phodrang', 'WPH', 1),
(402, 25, 'Zhemgang', 'ZHE', 1),
(403, 26, 'Beni', 'BEN', 1),
(404, 26, 'Chuquisaca', 'CHU', 1),
(405, 26, 'Cochabamba', 'COC', 1),
(406, 26, 'La Paz', 'LPZ', 1),
(407, 26, 'Oruro', 'ORU', 1),
(408, 26, 'Pando', 'PAN', 1),
(409, 26, 'Potosi', 'POT', 1),
(410, 26, 'Santa Cruz', 'SCZ', 1),
(411, 26, 'Tarija', 'TAR', 1),
(412, 27, 'Brcko district', 'BRO', 1),
(413, 27, 'Unsko-Sanski Kanton', 'FUS', 1),
(414, 27, 'Posavski Kanton', 'FPO', 1),
(415, 27, 'Tuzlanski Kanton', 'FTU', 1),
(416, 27, 'Zenicko-Dobojski Kanton', 'FZE', 1),
(417, 27, 'Bosanskopodrinjski Kanton', 'FBP', 1),
(418, 27, 'Srednjebosanski Kanton', 'FSB', 1),
(419, 27, 'Hercegovacko-neretvanski Kanton', 'FHN', 1),
(420, 27, 'Zapadnohercegovacka Zupanija', 'FZH', 1),
(421, 27, 'Kanton Sarajevo', 'FSA', 1),
(422, 27, 'Zapadnobosanska', 'FZA', 1),
(423, 27, 'Banja Luka', 'SBL', 1),
(424, 27, 'Doboj', 'SDO', 1),
(425, 27, 'Bijeljina', 'SBI', 1),
(426, 27, 'Vlasenica', 'SVL', 1),
(427, 27, 'Sarajevo-Romanija or Sokolac', 'SSR', 1),
(428, 27, 'Foca', 'SFO', 1),
(429, 27, 'Trebinje', 'STR', 1),
(430, 28, 'Central', 'CE', 1),
(431, 28, 'Ghanzi', 'GH', 1),
(432, 28, 'Kgalagadi', 'KD', 1),
(433, 28, 'Kgatleng', 'KT', 1),
(434, 28, 'Kweneng', 'KW', 1),
(435, 28, 'Ngamiland', 'NG', 1),
(436, 28, 'North East', 'NE', 1),
(437, 28, 'North West', 'NW', 1),
(438, 28, 'South East', 'SE', 1),
(439, 28, 'Southern', 'SO', 1),
(440, 30, 'Acre', 'AC', 1),
(441, 30, 'Alagoas', 'AL', 1),
(442, 30, 'Amapá', 'AP', 1),
(443, 30, 'Amazonas', 'AM', 1),
(444, 30, 'Bahia', 'BA', 1),
(445, 30, 'Ceará', 'CE', 1),
(446, 30, 'Distrito Federal', 'DF', 1),
(447, 30, 'Espírito Santo', 'ES', 1),
(448, 30, 'Goiás', 'GO', 1),
(449, 30, 'Maranhão', 'MA', 1),
(450, 30, 'Mato Grosso', 'MT', 1),
(451, 30, 'Mato Grosso do Sul', 'MS', 1),
(452, 30, 'Minas Gerais', 'MG', 1),
(453, 30, 'Pará', 'PA', 1),
(454, 30, 'Paraíba', 'PB', 1),
(455, 30, 'Paraná', 'PR', 1),
(456, 30, 'Pernambuco', 'PE', 1),
(457, 30, 'Piauí', 'PI', 1),
(458, 30, 'Rio de Janeiro', 'RJ', 1),
(459, 30, 'Rio Grande do Norte', 'RN', 1),
(460, 30, 'Rio Grande do Sul', 'RS', 1),
(461, 30, 'Rondônia', 'RO', 1),
(462, 30, 'Roraima', 'RR', 1),
(463, 30, 'Santa Catarina', 'SC', 1),
(464, 30, 'São Paulo', 'SP', 1),
(465, 30, 'Sergipe', 'SE', 1),
(466, 30, 'Tocantins', 'TO', 1),
(467, 31, 'Peros Banhos', 'PB', 1),
(468, 31, 'Salomon Islands', 'SI', 1),
(469, 31, 'Nelsons Island', 'NI', 1),
(470, 31, 'Three Brothers', 'TB', 1),
(471, 31, 'Eagle Islands', 'EA', 1),
(472, 31, 'Danger Island', 'DI', 1),
(473, 31, 'Egmont Islands', 'EG', 1),
(474, 31, 'Diego Garcia', 'DG', 1),
(475, 32, 'Belait', 'BEL', 1),
(476, 32, 'Brunei and Muara', 'BRM', 1),
(477, 32, 'Temburong', 'TEM', 1),
(478, 32, 'Tutong', 'TUT', 1),
(479, 33, 'Blagoevgrad', '', 1),
(480, 33, 'Burgas', '', 1),
(481, 33, 'Dobrich', '', 1),
(482, 33, 'Gabrovo', '', 1),
(483, 33, 'Haskovo', '', 1),
(484, 33, 'Kardjali', '', 1),
(485, 33, 'Kyustendil', '', 1),
(486, 33, 'Lovech', '', 1),
(487, 33, 'Montana', '', 1),
(488, 33, 'Pazardjik', '', 1),
(489, 33, 'Pernik', '', 1),
(490, 33, 'Pleven', '', 1),
(491, 33, 'Plovdiv', '', 1),
(492, 33, 'Razgrad', '', 1),
(493, 33, 'Shumen', '', 1),
(494, 33, 'Silistra', '', 1),
(495, 33, 'Sliven', '', 1),
(496, 33, 'Smolyan', '', 1),
(497, 33, 'Sofia', '', 1),
(498, 33, 'Sofia - town', '', 1),
(499, 33, 'Stara Zagora', '', 1),
(500, 33, 'Targovishte', '', 1),
(501, 33, 'Varna', '', 1),
(502, 33, 'Veliko Tarnovo', '', 1),
(503, 33, 'Vidin', '', 1),
(504, 33, 'Vratza', '', 1),
(505, 33, 'Yambol', '', 1),
(506, 34, 'Bale', 'BAL', 1),
(507, 34, 'Bam', 'BAM', 1),
(508, 34, 'Banwa', 'BAN', 1),
(509, 34, 'Bazega', 'BAZ', 1),
(510, 34, 'Bougouriba', 'BOR', 1),
(511, 34, 'Boulgou', 'BLG', 1),
(512, 34, 'Boulkiemde', 'BOK', 1),
(513, 34, 'Comoe', 'COM', 1),
(514, 34, 'Ganzourgou', 'GAN', 1),
(515, 34, 'Gnagna', 'GNA', 1),
(516, 34, 'Gourma', 'GOU', 1),
(517, 34, 'Houet', 'HOU', 1),
(518, 34, 'Ioba', 'IOA', 1),
(519, 34, 'Kadiogo', 'KAD', 1),
(520, 34, 'Kenedougou', 'KEN', 1),
(521, 34, 'Komondjari', 'KOD', 1),
(522, 34, 'Kompienga', 'KOP', 1),
(523, 34, 'Kossi', 'KOS', 1),
(524, 34, 'Koulpelogo', 'KOL', 1),
(525, 34, 'Kouritenga', 'KOT', 1),
(526, 34, 'Kourweogo', 'KOW', 1),
(527, 34, 'Leraba', 'LER', 1),
(528, 34, 'Loroum', 'LOR', 1),
(529, 34, 'Mouhoun', 'MOU', 1),
(530, 34, 'Nahouri', 'NAH', 1),
(531, 34, 'Namentenga', 'NAM', 1),
(532, 34, 'Nayala', 'NAY', 1),
(533, 34, 'Noumbiel', 'NOU', 1),
(534, 34, 'Oubritenga', 'OUB', 1),
(535, 34, 'Oudalan', 'OUD', 1),
(536, 34, 'Passore', 'PAS', 1),
(537, 34, 'Poni', 'PON', 1),
(538, 34, 'Sanguie', 'SAG', 1),
(539, 34, 'Sanmatenga', 'SAM', 1),
(540, 34, 'Seno', 'SEN', 1),
(541, 34, 'Sissili', 'SIS', 1),
(542, 34, 'Soum', 'SOM', 1),
(543, 34, 'Sourou', 'SOR', 1),
(544, 34, 'Tapoa', 'TAP', 1),
(545, 34, 'Tuy', 'TUY', 1),
(546, 34, 'Yagha', 'YAG', 1),
(547, 34, 'Yatenga', 'YAT', 1),
(548, 34, 'Ziro', 'ZIR', 1),
(549, 34, 'Zondoma', 'ZOD', 1),
(550, 34, 'Zoundweogo', 'ZOW', 1),
(551, 35, 'Bubanza', 'BB', 1),
(552, 35, 'Bujumbura', 'BJ', 1),
(553, 35, 'Bururi', 'BR', 1),
(554, 35, 'Cankuzo', 'CA', 1),
(555, 35, 'Cibitoke', 'CI', 1),
(556, 35, 'Gitega', 'GI', 1),
(557, 35, 'Karuzi', 'KR', 1),
(558, 35, 'Kayanza', 'KY', 1),
(559, 35, 'Kirundo', 'KI', 1),
(560, 35, 'Makamba', 'MA', 1),
(561, 35, 'Muramvya', 'MU', 1),
(562, 35, 'Muyinga', 'MY', 1),
(563, 35, 'Mwaro', 'MW', 1),
(564, 35, 'Ngozi', 'NG', 1),
(565, 35, 'Rutana', 'RT', 1),
(566, 35, 'Ruyigi', 'RY', 1),
(567, 36, 'Phnom Penh', 'PP', 1),
(568, 36, 'Preah Seihanu (Kompong Som or Sihanoukville)', 'PS', 1),
(569, 36, 'Pailin', 'PA', 1),
(570, 36, 'Keb', 'KB', 1),
(571, 36, 'Banteay Meanchey', 'BM', 1),
(572, 36, 'Battambang', 'BA', 1),
(573, 36, 'Kampong Cham', 'KM', 1),
(574, 36, 'Kampong Chhnang', 'KN', 1),
(575, 36, 'Kampong Speu', 'KU', 1),
(576, 36, 'Kampong Som', 'KO', 1),
(577, 36, 'Kampong Thom', 'KT', 1),
(578, 36, 'Kampot', 'KP', 1),
(579, 36, 'Kandal', 'KL', 1),
(580, 36, 'Kaoh Kong', 'KK', 1),
(581, 36, 'Kratie', 'KR', 1),
(582, 36, 'Mondul Kiri', 'MK', 1),
(583, 36, 'Oddar Meancheay', 'OM', 1),
(584, 36, 'Pursat', 'PU', 1),
(585, 36, 'Preah Vihear', 'PR', 1),
(586, 36, 'Prey Veng', 'PG', 1),
(587, 36, 'Ratanak Kiri', 'RK', 1),
(588, 36, 'Siemreap', 'SI', 1),
(589, 36, 'Stung Treng', 'ST', 1),
(590, 36, 'Svay Rieng', 'SR', 1),
(591, 36, 'Takeo', 'TK', 1),
(592, 37, 'Adamawa (Adamaoua)', 'ADA', 1),
(593, 37, 'Centre', 'CEN', 1),
(594, 37, 'East (Est)', 'EST', 1),
(595, 37, 'Extreme North (Extreme-Nord)', 'EXN', 1),
(596, 37, 'Littoral', 'LIT', 1),
(597, 37, 'North (Nord)', 'NOR', 1),
(598, 37, 'Northwest (Nord-Ouest)', 'NOT', 1),
(599, 37, 'West (Ouest)', 'OUE', 1),
(600, 37, 'South (Sud)', 'SUD', 1),
(601, 37, 'Southwest (Sud-Ouest).', 'SOU', 1),
(602, 38, 'Alberta', 'AB', 1),
(603, 38, 'British Columbia', 'BC', 1),
(604, 38, 'Manitoba', 'MB', 1),
(605, 38, 'New Brunswick', 'NB', 1),
(606, 38, 'Newfoundland and Labrador', 'NL', 1),
(607, 38, 'Northwest Territories', 'NT', 1),
(608, 38, 'Nova Scotia', 'NS', 1),
(609, 38, 'Nunavut', 'NU', 1),
(610, 38, 'Ontario', 'ON', 1),
(611, 38, 'Prince Edward Island', 'PE', 1),
(612, 38, 'Qu&eacute;bec', 'QC', 1),
(613, 38, 'Saskatchewan', 'SK', 1),
(614, 38, 'Yukon Territory', 'YT', 1),
(615, 39, 'Boa Vista', 'BV', 1),
(616, 39, 'Brava', 'BR', 1),
(617, 39, 'Calheta de Sao Miguel', 'CS', 1),
(618, 39, 'Maio', 'MA', 1),
(619, 39, 'Mosteiros', 'MO', 1),
(620, 39, 'Paul', 'PA', 1),
(621, 39, 'Porto Novo', 'PN', 1),
(622, 39, 'Praia', 'PR', 1),
(623, 39, 'Ribeira Grande', 'RG', 1),
(624, 39, 'Sal', 'SL', 1),
(625, 39, 'Santa Catarina', 'CA', 1),
(626, 39, 'Santa Cruz', 'CR', 1),
(627, 39, 'Sao Domingos', 'SD', 1),
(628, 39, 'Sao Filipe', 'SF', 1),
(629, 39, 'Sao Nicolau', 'SN', 1),
(630, 39, 'Sao Vicente', 'SV', 1),
(631, 39, 'Tarrafal', 'TA', 1),
(632, 40, 'Creek', 'CR', 1),
(633, 40, 'Eastern', 'EA', 1),
(634, 40, 'Midland', 'ML', 1),
(635, 40, 'South Town', 'ST', 1),
(636, 40, 'Spot Bay', 'SP', 1),
(637, 40, 'Stake Bay', 'SK', 1),
(638, 40, 'West End', 'WD', 1),
(639, 40, 'Western', 'WN', 1),
(640, 41, 'Bamingui-Bangoran', 'BBA', 1),
(641, 41, 'Basse-Kotto', 'BKO', 1),
(642, 41, 'Haute-Kotto', 'HKO', 1),
(643, 41, 'Haut-Mbomou', 'HMB', 1),
(644, 41, 'Kemo', 'KEM', 1),
(645, 41, 'Lobaye', 'LOB', 1),
(646, 41, 'Mambere-KadeÔ', 'MKD', 1),
(647, 41, 'Mbomou', 'MBO', 1),
(648, 41, 'Nana-Mambere', 'NMM', 1),
(649, 41, 'Ombella-M\'Poko', 'OMP', 1),
(650, 41, 'Ouaka', 'OUK', 1),
(651, 41, 'Ouham', 'OUH', 1),
(652, 41, 'Ouham-Pende', 'OPE', 1),
(653, 41, 'Vakaga', 'VAK', 1),
(654, 41, 'Nana-Grebizi', 'NGR', 1),
(655, 41, 'Sangha-Mbaere', 'SMB', 1),
(656, 41, 'Bangui', 'BAN', 1),
(657, 42, 'Batha', 'BA', 1),
(658, 42, 'Biltine', 'BI', 1),
(659, 42, 'Borkou-Ennedi-Tibesti', 'BE', 1),
(660, 42, 'Chari-Baguirmi', 'CB', 1),
(661, 42, 'Guera', 'GU', 1),
(662, 42, 'Kanem', 'KA', 1),
(663, 42, 'Lac', 'LA', 1),
(664, 42, 'Logone Occidental', 'LC', 1),
(665, 42, 'Logone Oriental', 'LR', 1),
(666, 42, 'Mayo-Kebbi', 'MK', 1),
(667, 42, 'Moyen-Chari', 'MC', 1),
(668, 42, 'Ouaddai', 'OU', 1),
(669, 42, 'Salamat', 'SA', 1),
(670, 42, 'Tandjile', 'TA', 1),
(671, 43, 'Aisen del General Carlos Ibanez', 'AI', 1),
(672, 43, 'Antofagasta', 'AN', 1),
(673, 43, 'Araucania', 'AR', 1),
(674, 43, 'Atacama', 'AT', 1),
(675, 43, 'Bio-Bio', 'BI', 1),
(676, 43, 'Coquimbo', 'CO', 1),
(677, 43, 'Libertador General Bernardo O\'Higgins', 'LI', 1),
(678, 43, 'Los Lagos', 'LL', 1),
(679, 43, 'Magallanes y de la Antartica Chilena', 'MA', 1),
(680, 43, 'Maule', 'ML', 1),
(681, 43, 'Region Metropolitana', 'RM', 1),
(682, 43, 'Tarapaca', 'TA', 1),
(683, 43, 'Valparaiso', 'VS', 1),
(684, 44, 'Anhui', 'AN', 1),
(685, 44, 'Beijing', 'BE', 1),
(686, 44, 'Chongqing', 'CH', 1),
(687, 44, 'Fujian', 'FU', 1),
(688, 44, 'Gansu', 'GA', 1),
(689, 44, 'Guangdong', 'GU', 1),
(690, 44, 'Guangxi', 'GX', 1),
(691, 44, 'Guizhou', 'GZ', 1),
(692, 44, 'Hainan', 'HA', 1),
(693, 44, 'Hebei', 'HB', 1),
(694, 44, 'Heilongjiang', 'HL', 1),
(695, 44, 'Henan', 'HE', 1),
(696, 44, 'Hong Kong', 'HK', 1),
(697, 44, 'Hubei', 'HU', 1),
(698, 44, 'Hunan', 'HN', 1),
(699, 44, 'Inner Mongolia', 'IM', 1),
(700, 44, 'Jiangsu', 'JI', 1),
(701, 44, 'Jiangxi', 'JX', 1),
(702, 44, 'Jilin', 'JL', 1),
(703, 44, 'Liaoning', 'LI', 1),
(704, 44, 'Macau', 'MA', 1),
(705, 44, 'Ningxia', 'NI', 1),
(706, 44, 'Shaanxi', 'SH', 1),
(707, 44, 'Shandong', 'SA', 1),
(708, 44, 'Shanghai', 'SG', 1),
(709, 44, 'Shanxi', 'SX', 1),
(710, 44, 'Sichuan', 'SI', 1),
(711, 44, 'Tianjin', 'TI', 1),
(712, 44, 'Xinjiang', 'XI', 1),
(713, 44, 'Yunnan', 'YU', 1),
(714, 44, 'Zhejiang', 'ZH', 1),
(715, 46, 'Direction Island', 'D', 1),
(716, 46, 'Home Island', 'H', 1),
(717, 46, 'Horsburgh Island', 'O', 1),
(718, 46, 'South Island', 'S', 1),
(719, 46, 'West Island', 'W', 1),
(720, 47, 'Amazonas', 'AMZ', 1),
(721, 47, 'Antioquia', 'ANT', 1),
(722, 47, 'Arauca', 'ARA', 1),
(723, 47, 'Atlantico', 'ATL', 1),
(724, 47, 'Bogota D.C.', 'BDC', 1),
(725, 47, 'Bolivar', 'BOL', 1),
(726, 47, 'Boyaca', 'BOY', 1),
(727, 47, 'Caldas', 'CAL', 1),
(728, 47, 'Caqueta', 'CAQ', 1),
(729, 47, 'Casanare', 'CAS', 1),
(730, 47, 'Cauca', 'CAU', 1),
(731, 47, 'Cesar', 'CES', 1),
(732, 47, 'Choco', 'CHO', 1),
(733, 47, 'Cordoba', 'COR', 1),
(734, 47, 'Cundinamarca', 'CAM', 1),
(735, 47, 'Guainia', 'GNA', 1),
(736, 47, 'Guajira', 'GJR', 1),
(737, 47, 'Guaviare', 'GVR', 1),
(738, 47, 'Huila', 'HUI', 1),
(739, 47, 'Magdalena', 'MAG', 1),
(740, 47, 'Meta', 'MET', 1),
(741, 47, 'Narino', 'NAR', 1),
(742, 47, 'Norte de Santander', 'NDS', 1),
(743, 47, 'Putumayo', 'PUT', 1),
(744, 47, 'Quindio', 'QUI', 1),
(745, 47, 'Risaralda', 'RIS', 1),
(746, 47, 'San Andres y Providencia', 'SAP', 1),
(747, 47, 'Santander', 'SAN', 1),
(748, 47, 'Sucre', 'SUC', 1),
(749, 47, 'Tolima', 'TOL', 1),
(750, 47, 'Valle del Cauca', 'VDC', 1),
(751, 47, 'Vaupes', 'VAU', 1),
(752, 47, 'Vichada', 'VIC', 1),
(753, 48, 'Grande Comore', 'G', 1),
(754, 48, 'Anjouan', 'A', 1),
(755, 48, 'Moheli', 'M', 1),
(756, 49, 'Bouenza', 'BO', 1),
(757, 49, 'Brazzaville', 'BR', 1),
(758, 49, 'Cuvette', 'CU', 1),
(759, 49, 'Cuvette-Ouest', 'CO', 1),
(760, 49, 'Kouilou', 'KO', 1),
(761, 49, 'Lekoumou', 'LE', 1),
(762, 49, 'Likouala', 'LI', 1),
(763, 49, 'Niari', 'NI', 1),
(764, 49, 'Plateaux', 'PL', 1),
(765, 49, 'Pool', 'PO', 1),
(766, 49, 'Sangha', 'SA', 1),
(767, 50, 'Pukapuka', 'PU', 1),
(768, 50, 'Rakahanga', 'RK', 1),
(769, 50, 'Manihiki', 'MK', 1),
(770, 50, 'Penrhyn', 'PE', 1),
(771, 50, 'Nassau Island', 'NI', 1),
(772, 50, 'Surwarrow', 'SU', 1),
(773, 50, 'Palmerston', 'PA', 1),
(774, 50, 'Aitutaki', 'AI', 1),
(775, 50, 'Manuae', 'MA', 1),
(776, 50, 'Takutea', 'TA', 1),
(777, 50, 'Mitiaro', 'MT', 1),
(778, 50, 'Atiu', 'AT', 1),
(779, 50, 'Mauke', 'MU', 1),
(780, 50, 'Rarotonga', 'RR', 1),
(781, 50, 'Mangaia', 'MG', 1),
(782, 51, 'Alajuela', 'AL', 1),
(783, 51, 'Cartago', 'CA', 1),
(784, 51, 'Guanacaste', 'GU', 1),
(785, 51, 'Heredia', 'HE', 1),
(786, 51, 'Limon', 'LI', 1),
(787, 51, 'Puntarenas', 'PU', 1),
(788, 51, 'San Jose', 'SJ', 1),
(789, 52, 'Abengourou', 'ABE', 1),
(790, 52, 'Abidjan', 'ABI', 1),
(791, 52, 'Aboisso', 'ABO', 1),
(792, 52, 'Adiake', 'ADI', 1),
(793, 52, 'Adzope', 'ADZ', 1),
(794, 52, 'Agboville', 'AGB', 1),
(795, 52, 'Agnibilekrou', 'AGN', 1),
(796, 52, 'Alepe', 'ALE', 1),
(797, 52, 'Bocanda', 'BOC', 1),
(798, 52, 'Bangolo', 'BAN', 1),
(799, 52, 'Beoumi', 'BEO', 1),
(800, 52, 'Biankouma', 'BIA', 1),
(801, 52, 'Bondoukou', 'BDK', 1),
(802, 52, 'Bongouanou', 'BGN', 1),
(803, 52, 'Bouafle', 'BFL', 1),
(804, 52, 'Bouake', 'BKE', 1),
(805, 52, 'Bouna', 'BNA', 1),
(806, 52, 'Boundiali', 'BDL', 1),
(807, 52, 'Dabakala', 'DKL', 1),
(808, 52, 'Dabou', 'DBU', 1),
(809, 52, 'Daloa', 'DAL', 1),
(810, 52, 'Danane', 'DAN', 1),
(811, 52, 'Daoukro', 'DAO', 1),
(812, 52, 'Dimbokro', 'DIM', 1),
(813, 52, 'Divo', 'DIV', 1),
(814, 52, 'Duekoue', 'DUE', 1),
(815, 52, 'Ferkessedougou', 'FER', 1),
(816, 52, 'Gagnoa', 'GAG', 1),
(817, 52, 'Grand-Bassam', 'GBA', 1),
(818, 52, 'Grand-Lahou', 'GLA', 1),
(819, 52, 'Guiglo', 'GUI', 1),
(820, 52, 'Issia', 'ISS', 1),
(821, 52, 'Jacqueville', 'JAC', 1),
(822, 52, 'Katiola', 'KAT', 1),
(823, 52, 'Korhogo', 'KOR', 1),
(824, 52, 'Lakota', 'LAK', 1),
(825, 52, 'Man', 'MAN', 1),
(826, 52, 'Mankono', 'MKN', 1),
(827, 52, 'Mbahiakro', 'MBA', 1),
(828, 52, 'Odienne', 'ODI', 1),
(829, 52, 'Oume', 'OUM', 1),
(830, 52, 'Sakassou', 'SAK', 1),
(831, 52, 'San-Pedro', 'SPE', 1),
(832, 52, 'Sassandra', 'SAS', 1),
(833, 52, 'Seguela', 'SEG', 1),
(834, 52, 'Sinfra', 'SIN', 1),
(835, 52, 'Soubre', 'SOU', 1),
(836, 52, 'Tabou', 'TAB', 1),
(837, 52, 'Tanda', 'TAN', 1),
(838, 52, 'Tiebissou', 'TIE', 1),
(839, 52, 'Tingrela', 'TIN', 1),
(840, 52, 'Tiassale', 'TIA', 1),
(841, 52, 'Touba', 'TBA', 1),
(842, 52, 'Toulepleu', 'TLP', 1),
(843, 52, 'Toumodi', 'TMD', 1),
(844, 52, 'Vavoua', 'VAV', 1),
(845, 52, 'Yamoussoukro', 'YAM', 1),
(846, 52, 'Zuenoula', 'ZUE', 1),
(847, 53, 'Bjelovarsko-bilogorska', 'BB', 1),
(848, 53, 'Grad Zagreb', 'GZ', 1),
(849, 53, 'Dubrovačko-neretvanska', 'DN', 1),
(850, 53, 'Istarska', 'IS', 1),
(851, 53, 'Karlovačka', 'KA', 1),
(852, 53, 'Koprivničko-križevačka', 'KK', 1),
(853, 53, 'Krapinsko-zagorska', 'KZ', 1),
(854, 53, 'Ličko-senjska', 'LS', 1),
(855, 53, 'Međimurska', 'ME', 1),
(856, 53, 'Osječko-baranjska', 'OB', 1),
(857, 53, 'Požeško-slavonska', 'PS', 1),
(858, 53, 'Primorsko-goranska', 'PG', 1),
(859, 53, 'Šibensko-kninska', 'SK', 1),
(860, 53, 'Sisačko-moslavačka', 'SM', 1),
(861, 53, 'Brodsko-posavska', 'BP', 1),
(862, 53, 'Splitsko-dalmatinska', 'SD', 1),
(863, 53, 'Varaždinska', 'VA', 1),
(864, 53, 'Virovitičko-podravska', 'VP', 1),
(865, 53, 'Vukovarsko-srijemska', 'VS', 1),
(866, 53, 'Zadarska', 'ZA', 1),
(867, 53, 'Zagrebačka', 'ZG', 1),
(868, 54, 'Camaguey', 'CA', 1),
(869, 54, 'Ciego de Avila', 'CD', 1),
(870, 54, 'Cienfuegos', 'CI', 1),
(871, 54, 'Ciudad de La Habana', 'CH', 1),
(872, 54, 'Granma', 'GR', 1),
(873, 54, 'Guantanamo', 'GU', 1),
(874, 54, 'Holguin', 'HO', 1),
(875, 54, 'Isla de la Juventud', 'IJ', 1),
(876, 54, 'La Habana', 'LH', 1),
(877, 54, 'Las Tunas', 'LT', 1),
(878, 54, 'Matanzas', 'MA', 1),
(879, 54, 'Pinar del Rio', 'PR', 1),
(880, 54, 'Sancti Spiritus', 'SS', 1),
(881, 54, 'Santiago de Cuba', 'SC', 1),
(882, 54, 'Villa Clara', 'VC', 1),
(883, 55, 'Famagusta', 'F', 1),
(884, 55, 'Kyrenia', 'K', 1),
(885, 55, 'Larnaca', 'A', 1),
(886, 55, 'Limassol', 'I', 1),
(887, 55, 'Nicosia', 'N', 1),
(888, 55, 'Paphos', 'P', 1),
(889, 56, 'Ústecký', 'U', 1),
(890, 56, 'Jihočeský', 'C', 1),
(891, 56, 'Jihomoravský', 'B', 1),
(892, 56, 'Karlovarský', 'K', 1),
(893, 56, 'Královehradecký', 'H', 1),
(894, 56, 'Liberecký', 'L', 1),
(895, 56, 'Moravskoslezský', 'T', 1),
(896, 56, 'Olomoucký', 'M', 1),
(897, 56, 'Pardubický', 'E', 1),
(898, 56, 'Plzeňský', 'P', 1),
(899, 56, 'Praha', 'A', 1),
(900, 56, 'Středočeský', 'S', 1),
(901, 56, 'Vysočina', 'J', 1),
(902, 56, 'Zlínský', 'Z', 1),
(903, 57, 'Arhus', 'AR', 1),
(904, 57, 'Bornholm', 'BH', 1),
(905, 57, 'Copenhagen', 'CO', 1),
(906, 57, 'Faroe Islands', 'FO', 1),
(907, 57, 'Frederiksborg', 'FR', 1),
(908, 57, 'Fyn', 'FY', 1),
(909, 57, 'Kobenhavn', 'KO', 1),
(910, 57, 'Nordjylland', 'NO', 1),
(911, 57, 'Ribe', 'RI', 1),
(912, 57, 'Ringkobing', 'RK', 1),
(913, 57, 'Roskilde', 'RO', 1),
(914, 57, 'Sonderjylland', 'SO', 1),
(915, 57, 'Storstrom', 'ST', 1),
(916, 57, 'Vejle', 'VK', 1),
(917, 57, 'Vestj&aelig;lland', 'VJ', 1),
(918, 57, 'Viborg', 'VB', 1),
(919, 58, '\'Ali Sabih', 'S', 1),
(920, 58, 'Dikhil', 'K', 1),
(921, 58, 'Djibouti', 'J', 1),
(922, 58, 'Obock', 'O', 1),
(923, 58, 'Tadjoura', 'T', 1),
(924, 59, 'Saint Andrew Parish', 'AND', 1),
(925, 59, 'Saint David Parish', 'DAV', 1),
(926, 59, 'Saint George Parish', 'GEO', 1),
(927, 59, 'Saint John Parish', 'JOH', 1),
(928, 59, 'Saint Joseph Parish', 'JOS', 1),
(929, 59, 'Saint Luke Parish', 'LUK', 1),
(930, 59, 'Saint Mark Parish', 'MAR', 1),
(931, 59, 'Saint Patrick Parish', 'PAT', 1),
(932, 59, 'Saint Paul Parish', 'PAU', 1),
(933, 59, 'Saint Peter Parish', 'PET', 1),
(934, 60, 'Distrito Nacional', 'DN', 1),
(935, 60, 'Azua', 'AZ', 1),
(936, 60, 'Baoruco', 'BC', 1),
(937, 60, 'Barahona', 'BH', 1),
(938, 60, 'Dajabon', 'DJ', 1),
(939, 60, 'Duarte', 'DU', 1),
(940, 60, 'Elias Pina', 'EL', 1),
(941, 60, 'El Seybo', 'SY', 1),
(942, 60, 'Espaillat', 'ET', 1),
(943, 60, 'Hato Mayor', 'HM', 1),
(944, 60, 'Independencia', 'IN', 1),
(945, 60, 'La Altagracia', 'AL', 1),
(946, 60, 'La Romana', 'RO', 1),
(947, 60, 'La Vega', 'VE', 1),
(948, 60, 'Maria Trinidad Sanchez', 'MT', 1),
(949, 60, 'Monsenor Nouel', 'MN', 1),
(950, 60, 'Monte Cristi', 'MC', 1),
(951, 60, 'Monte Plata', 'MP', 1),
(952, 60, 'Pedernales', 'PD', 1),
(953, 60, 'Peravia (Bani)', 'PR', 1),
(954, 60, 'Puerto Plata', 'PP', 1),
(955, 60, 'Salcedo', 'SL', 1),
(956, 60, 'Samana', 'SM', 1),
(957, 60, 'Sanchez Ramirez', 'SH', 1),
(958, 60, 'San Cristobal', 'SC', 1),
(959, 60, 'San Jose de Ocoa', 'JO', 1),
(960, 60, 'San Juan', 'SJ', 1),
(961, 60, 'San Pedro de Macoris', 'PM', 1),
(962, 60, 'Santiago', 'SA', 1),
(963, 60, 'Santiago Rodriguez', 'ST', 1),
(964, 60, 'Santo Domingo', 'SD', 1),
(965, 60, 'Valverde', 'VA', 1),
(966, 61, 'Aileu', 'AL', 1),
(967, 61, 'Ainaro', 'AN', 1),
(968, 61, 'Baucau', 'BA', 1),
(969, 61, 'Bobonaro', 'BO', 1),
(970, 61, 'Cova Lima', 'CO', 1),
(971, 61, 'Dili', 'DI', 1),
(972, 61, 'Ermera', 'ER', 1),
(973, 61, 'Lautem', 'LA', 1),
(974, 61, 'Liquica', 'LI', 1),
(975, 61, 'Manatuto', 'MT', 1),
(976, 61, 'Manufahi', 'MF', 1),
(977, 61, 'Oecussi', 'OE', 1),
(978, 61, 'Viqueque', 'VI', 1),
(979, 62, 'Azuay', 'AZU', 1),
(980, 62, 'Bolivar', 'BOL', 1),
(981, 62, 'Ca&ntilde;ar', 'CAN', 1),
(982, 62, 'Carchi', 'CAR', 1),
(983, 62, 'Chimborazo', 'CHI', 1),
(984, 62, 'Cotopaxi', 'COT', 1),
(985, 62, 'El Oro', 'EOR', 1),
(986, 62, 'Esmeraldas', 'ESM', 1),
(987, 62, 'Gal&aacute;pagos', 'GPS', 1),
(988, 62, 'Guayas', 'GUA', 1),
(989, 62, 'Imbabura', 'IMB', 1),
(990, 62, 'Loja', 'LOJ', 1),
(991, 62, 'Los Rios', 'LRO', 1),
(992, 62, 'Manab&iacute;', 'MAN', 1),
(993, 62, 'Morona Santiago', 'MSA', 1),
(994, 62, 'Napo', 'NAP', 1),
(995, 62, 'Orellana', 'ORE', 1),
(996, 62, 'Pastaza', 'PAS', 1),
(997, 62, 'Pichincha', 'PIC', 1),
(998, 62, 'Sucumb&iacute;os', 'SUC', 1),
(999, 62, 'Tungurahua', 'TUN', 1),
(1000, 62, 'Zamora Chinchipe', 'ZCH', 1),
(1001, 63, 'Ad Daqahliyah', 'DHY', 1),
(1002, 63, 'Al Bahr al Ahmar', 'BAM', 1),
(1003, 63, 'Al Buhayrah', 'BHY', 1),
(1004, 63, 'Al Fayyum', 'FYM', 1),
(1005, 63, 'Al Gharbiyah', 'GBY', 1),
(1006, 63, 'Al Iskandariyah', 'IDR', 1),
(1007, 63, 'Al Isma\'iliyah', 'IML', 1),
(1008, 63, 'Al Jizah', 'JZH', 1),
(1009, 63, 'Al Minufiyah', 'MFY', 1),
(1010, 63, 'Al Minya', 'MNY', 1),
(1011, 63, 'Al Qahirah', 'QHR', 1),
(1012, 63, 'Al Qalyubiyah', 'QLY', 1),
(1013, 63, 'Al Wadi al Jadid', 'WJD', 1),
(1014, 63, 'Ash Sharqiyah', 'SHQ', 1),
(1015, 63, 'As Suways', 'SWY', 1),
(1016, 63, 'Aswan', 'ASW', 1),
(1017, 63, 'Asyut', 'ASY', 1),
(1018, 63, 'Bani Suwayf', 'BSW', 1),
(1019, 63, 'Bur Sa\'id', 'BSD', 1),
(1020, 63, 'Dumyat', 'DMY', 1),
(1021, 63, 'Janub Sina\'', 'JNS', 1),
(1022, 63, 'Kafr ash Shaykh', 'KSH', 1),
(1023, 63, 'Matruh', 'MAT', 1),
(1024, 63, 'Qina', 'QIN', 1),
(1025, 63, 'Shamal Sina\'', 'SHS', 1),
(1026, 63, 'Suhaj', 'SUH', 1),
(1027, 64, 'Ahuachapan', 'AH', 1),
(1028, 64, 'Cabanas', 'CA', 1),
(1029, 64, 'Chalatenango', 'CH', 1),
(1030, 64, 'Cuscatlan', 'CU', 1),
(1031, 64, 'La Libertad', 'LB', 1),
(1032, 64, 'La Paz', 'PZ', 1),
(1033, 64, 'La Union', 'UN', 1),
(1034, 64, 'Morazan', 'MO', 1),
(1035, 64, 'San Miguel', 'SM', 1),
(1036, 64, 'San Salvador', 'SS', 1),
(1037, 64, 'San Vicente', 'SV', 1),
(1038, 64, 'Santa Ana', 'SA', 1),
(1039, 64, 'Sonsonate', 'SO', 1),
(1040, 64, 'Usulutan', 'US', 1),
(1041, 65, 'Provincia Annobon', 'AN', 1),
(1042, 65, 'Provincia Bioko Norte', 'BN', 1),
(1043, 65, 'Provincia Bioko Sur', 'BS', 1),
(1044, 65, 'Provincia Centro Sur', 'CS', 1),
(1045, 65, 'Provincia Kie-Ntem', 'KN', 1),
(1046, 65, 'Provincia Litoral', 'LI', 1),
(1047, 65, 'Provincia Wele-Nzas', 'WN', 1),
(1048, 66, 'Central (Maekel)', 'MA', 1),
(1049, 66, 'Anseba (Keren)', 'KE', 1),
(1050, 66, 'Southern Red Sea (Debub-Keih-Bahri)', 'DK', 1),
(1051, 66, 'Northern Red Sea (Semien-Keih-Bahri)', 'SK', 1),
(1052, 66, 'Southern (Debub)', 'DE', 1),
(1053, 66, 'Gash-Barka (Barentu)', 'BR', 1),
(1054, 67, 'Harjumaa (Tallinn)', 'HA', 1),
(1055, 67, 'Hiiumaa (Kardla)', 'HI', 1),
(1056, 67, 'Ida-Virumaa (Johvi)', 'IV', 1),
(1057, 67, 'Jarvamaa (Paide)', 'JA', 1),
(1058, 67, 'Jogevamaa (Jogeva)', 'JO', 1),
(1059, 67, 'Laane-Virumaa (Rakvere)', 'LV', 1),
(1060, 67, 'Laanemaa (Haapsalu)', 'LA', 1),
(1061, 67, 'Parnumaa (Parnu)', 'PA', 1),
(1062, 67, 'Polvamaa (Polva)', 'PO', 1),
(1063, 67, 'Raplamaa (Rapla)', 'RA', 1),
(1064, 67, 'Saaremaa (Kuessaare)', 'SA', 1),
(1065, 67, 'Tartumaa (Tartu)', 'TA', 1),
(1066, 67, 'Valgamaa (Valga)', 'VA', 1),
(1067, 67, 'Viljandimaa (Viljandi)', 'VI', 1),
(1068, 67, 'Vorumaa (Voru)', 'VO', 1),
(1069, 68, 'Afar', 'AF', 1),
(1070, 68, 'Amhara', 'AH', 1),
(1071, 68, 'Benishangul-Gumaz', 'BG', 1),
(1072, 68, 'Gambela', 'GB', 1),
(1073, 68, 'Hariai', 'HR', 1),
(1074, 68, 'Oromia', 'OR', 1),
(1075, 68, 'Somali', 'SM', 1),
(1076, 68, 'Southern Nations - Nationalities and Peoples Region', 'SN', 1),
(1077, 68, 'Tigray', 'TG', 1),
(1078, 68, 'Addis Ababa', 'AA', 1),
(1079, 68, 'Dire Dawa', 'DD', 1),
(1080, 71, 'Central Division', 'C', 1),
(1081, 71, 'Northern Division', 'N', 1),
(1082, 71, 'Eastern Division', 'E', 1),
(1083, 71, 'Western Division', 'W', 1),
(1084, 71, 'Rotuma', 'R', 1),
(1085, 72, 'Ahvenanmaan lääni', 'AL', 1),
(1086, 72, 'Etelä-Suomen lääni', 'ES', 1),
(1087, 72, 'Itä-Suomen lääni', 'IS', 1),
(1088, 72, 'Länsi-Suomen lääni', 'LS', 1),
(1089, 72, 'Lapin lääni', 'LA', 1),
(1090, 72, 'Oulun lääni', 'OU', 1),
(1114, 74, 'Ain', '01', 1),
(1115, 74, 'Aisne', '02', 1),
(1116, 74, 'Allier', '03', 1),
(1117, 74, 'Alpes de Haute Provence', '04', 1),
(1118, 74, 'Hautes-Alpes', '05', 1),
(1119, 74, 'Alpes Maritimes', '06', 1),
(1120, 74, 'Ard&egrave;che', '07', 1),
(1121, 74, 'Ardennes', '08', 1),
(1122, 74, 'Ari&egrave;ge', '09', 1),
(1123, 74, 'Aube', '10', 1),
(1124, 74, 'Aude', '11', 1),
(1125, 74, 'Aveyron', '12', 1),
(1126, 74, 'Bouches du Rh&ocirc;ne', '13', 1),
(1127, 74, 'Calvados', '14', 1),
(1128, 74, 'Cantal', '15', 1),
(1129, 74, 'Charente', '16', 1),
(1130, 74, 'Charente Maritime', '17', 1),
(1131, 74, 'Cher', '18', 1),
(1132, 74, 'Corr&egrave;ze', '19', 1),
(1133, 74, 'Corse du Sud', '2A', 1),
(1134, 74, 'Haute Corse', '2B', 1),
(1135, 74, 'C&ocirc;te d&#039;or', '21', 1),
(1136, 74, 'C&ocirc;tes d&#039;Armor', '22', 1),
(1137, 74, 'Creuse', '23', 1),
(1138, 74, 'Dordogne', '24', 1),
(1139, 74, 'Doubs', '25', 1),
(1140, 74, 'Dr&ocirc;me', '26', 1),
(1141, 74, 'Eure', '27', 1),
(1142, 74, 'Eure et Loir', '28', 1),
(1143, 74, 'Finist&egrave;re', '29', 1),
(1144, 74, 'Gard', '30', 1),
(1145, 74, 'Haute Garonne', '31', 1),
(1146, 74, 'Gers', '32', 1),
(1147, 74, 'Gironde', '33', 1),
(1148, 74, 'H&eacute;rault', '34', 1),
(1149, 74, 'Ille et Vilaine', '35', 1),
(1150, 74, 'Indre', '36', 1),
(1151, 74, 'Indre et Loire', '37', 1),
(1152, 74, 'Is&eacute;re', '38', 1),
(1153, 74, 'Jura', '39', 1),
(1154, 74, 'Landes', '40', 1),
(1155, 74, 'Loir et Cher', '41', 1),
(1156, 74, 'Loire', '42', 1),
(1157, 74, 'Haute Loire', '43', 1),
(1158, 74, 'Loire Atlantique', '44', 1),
(1159, 74, 'Loiret', '45', 1),
(1160, 74, 'Lot', '46', 1),
(1161, 74, 'Lot et Garonne', '47', 1),
(1162, 74, 'Loz&egrave;re', '48', 1),
(1163, 74, 'Maine et Loire', '49', 1),
(1164, 74, 'Manche', '50', 1),
(1165, 74, 'Marne', '51', 1),
(1166, 74, 'Haute Marne', '52', 1),
(1167, 74, 'Mayenne', '53', 1),
(1168, 74, 'Meurthe et Moselle', '54', 1),
(1169, 74, 'Meuse', '55', 1),
(1170, 74, 'Morbihan', '56', 1),
(1171, 74, 'Moselle', '57', 1),
(1172, 74, 'Ni&egrave;vre', '58', 1),
(1173, 74, 'Nord', '59', 1),
(1174, 74, 'Oise', '60', 1),
(1175, 74, 'Orne', '61', 1),
(1176, 74, 'Pas de Calais', '62', 1),
(1177, 74, 'Puy de D&ocirc;me', '63', 1),
(1178, 74, 'Pyr&eacute;n&eacute;es Atlantiques', '64', 1),
(1179, 74, 'Hautes Pyr&eacute;n&eacute;es', '65', 1),
(1180, 74, 'Pyr&eacute;n&eacute;es Orientales', '66', 1),
(1181, 74, 'Bas Rhin', '67', 1),
(1182, 74, 'Haut Rhin', '68', 1),
(1183, 74, 'Rh&ocirc;ne', '69', 1),
(1184, 74, 'Haute Sa&ocirc;ne', '70', 1),
(1185, 74, 'Sa&ocirc;ne et Loire', '71', 1),
(1186, 74, 'Sarthe', '72', 1),
(1187, 74, 'Savoie', '73', 1),
(1188, 74, 'Haute Savoie', '74', 1),
(1189, 74, 'Paris', '75', 1),
(1190, 74, 'Seine Maritime', '76', 1),
(1191, 74, 'Seine et Marne', '77', 1),
(1192, 74, 'Yvelines', '78', 1),
(1193, 74, 'Deux S&egrave;vres', '79', 1),
(1194, 74, 'Somme', '80', 1),
(1195, 74, 'Tarn', '81', 1),
(1196, 74, 'Tarn et Garonne', '82', 1),
(1197, 74, 'Var', '83', 1),
(1198, 74, 'Vaucluse', '84', 1),
(1199, 74, 'Vend&eacute;e', '85', 1),
(1200, 74, 'Vienne', '86', 1),
(1201, 74, 'Haute Vienne', '87', 1),
(1202, 74, 'Vosges', '88', 1),
(1203, 74, 'Yonne', '89', 1),
(1204, 74, 'Territoire de Belfort', '90', 1),
(1205, 74, 'Essonne', '91', 1),
(1206, 74, 'Hauts de Seine', '92', 1),
(1207, 74, 'Seine St-Denis', '93', 1),
(1208, 74, 'Val de Marne', '94', 1),
(1209, 74, 'Val d\'Oise', '95', 1),
(1210, 76, 'Archipel des Marquises', 'M', 1),
(1211, 76, 'Archipel des Tuamotu', 'T', 1),
(1212, 76, 'Archipel des Tubuai', 'I', 1),
(1213, 76, 'Iles du Vent', 'V', 1),
(1214, 76, 'Iles Sous-le-Vent', 'S', 1),
(1215, 77, 'Iles Crozet', 'C', 1),
(1216, 77, 'Iles Kerguelen', 'K', 1),
(1217, 77, 'Ile Amsterdam', 'A', 1),
(1218, 77, 'Ile Saint-Paul', 'P', 1),
(1219, 77, 'Adelie Land', 'D', 1),
(1220, 78, 'Estuaire', 'ES', 1),
(1221, 78, 'Haut-Ogooue', 'HO', 1),
(1222, 78, 'Moyen-Ogooue', 'MO', 1),
(1223, 78, 'Ngounie', 'NG', 1),
(1224, 78, 'Nyanga', 'NY', 1),
(1225, 78, 'Ogooue-Ivindo', 'OI', 1),
(1226, 78, 'Ogooue-Lolo', 'OL', 1),
(1227, 78, 'Ogooue-Maritime', 'OM', 1),
(1228, 78, 'Woleu-Ntem', 'WN', 1),
(1229, 79, 'Banjul', 'BJ', 1),
(1230, 79, 'Basse', 'BS', 1),
(1231, 79, 'Brikama', 'BR', 1),
(1232, 79, 'Janjangbure', 'JA', 1),
(1233, 79, 'Kanifeng', 'KA', 1),
(1234, 79, 'Kerewan', 'KE', 1),
(1235, 79, 'Kuntaur', 'KU', 1),
(1236, 79, 'Mansakonko', 'MA', 1),
(1237, 79, 'Lower River', 'LR', 1),
(1238, 79, 'Central River', 'CR', 1),
(1239, 79, 'North Bank', 'NB', 1),
(1240, 79, 'Upper River', 'UR', 1),
(1241, 79, 'Western', 'WE', 1),
(1242, 80, 'Abkhazia', 'AB', 1),
(1243, 80, 'Ajaria', 'AJ', 1),
(1244, 80, 'Tbilisi', 'TB', 1),
(1245, 80, 'Guria', 'GU', 1),
(1246, 80, 'Imereti', 'IM', 1),
(1247, 80, 'Kakheti', 'KA', 1),
(1248, 80, 'Kvemo Kartli', 'KK', 1),
(1249, 80, 'Mtskheta-Mtianeti', 'MM', 1),
(1250, 80, 'Racha Lechkhumi and Kvemo Svanet', 'RL', 1),
(1251, 80, 'Samegrelo-Zemo Svaneti', 'SZ', 1),
(1252, 80, 'Samtskhe-Javakheti', 'SJ', 1),
(1253, 80, 'Shida Kartli', 'SK', 1),
(1254, 81, 'Baden-Württemberg', 'BAW', 1),
(1255, 81, 'Bayern', 'BAY', 1),
(1256, 81, 'Berlin', 'BER', 1),
(1257, 81, 'Brandenburg', 'BRG', 1),
(1258, 81, 'Bremen', 'BRE', 1),
(1259, 81, 'Hamburg', 'HAM', 1),
(1260, 81, 'Hessen', 'HES', 1),
(1261, 81, 'Mecklenburg-Vorpommern', 'MEC', 1),
(1262, 81, 'Niedersachsen', 'NDS', 1),
(1263, 81, 'Nordrhein-Westfalen', 'NRW', 1),
(1264, 81, 'Rheinland-Pfalz', 'RHE', 1),
(1265, 81, 'Saarland', 'SAR', 1),
(1266, 81, 'Sachsen', 'SAS', 1),
(1267, 81, 'Sachsen-Anhalt', 'SAC', 1),
(1268, 81, 'Schleswig-Holstein', 'SCN', 1),
(1269, 81, 'Thüringen', 'THE', 1),
(1270, 82, 'Ashanti Region', 'AS', 1),
(1271, 82, 'Brong-Ahafo Region', 'BA', 1),
(1272, 82, 'Central Region', 'CE', 1),
(1273, 82, 'Eastern Region', 'EA', 1),
(1274, 82, 'Greater Accra Region', 'GA', 1),
(1275, 82, 'Northern Region', 'NO', 1),
(1276, 82, 'Upper East Region', 'UE', 1),
(1277, 82, 'Upper West Region', 'UW', 1),
(1278, 82, 'Volta Region', 'VO', 1),
(1279, 82, 'Western Region', 'WE', 1),
(1280, 84, 'Attica', 'AT', 1),
(1281, 84, 'Central Greece', 'CN', 1),
(1282, 84, 'Central Macedonia', 'CM', 1),
(1283, 84, 'Crete', 'CR', 1),
(1284, 84, 'East Macedonia and Thrace', 'EM', 1),
(1285, 84, 'Epirus', 'EP', 1),
(1286, 84, 'Ionian Islands', 'II', 1),
(1287, 84, 'North Aegean', 'NA', 1),
(1288, 84, 'Peloponnesos', 'PP', 1),
(1289, 84, 'South Aegean', 'SA', 1),
(1290, 84, 'Thessaly', 'TH', 1),
(1291, 84, 'West Greece', 'WG', 1),
(1292, 84, 'West Macedonia', 'WM', 1),
(1293, 85, 'Avannaa', 'A', 1),
(1294, 85, 'Tunu', 'T', 1),
(1295, 85, 'Kitaa', 'K', 1),
(1296, 86, 'Saint Andrew', 'A', 1),
(1297, 86, 'Saint David', 'D', 1),
(1298, 86, 'Saint George', 'G', 1),
(1299, 86, 'Saint John', 'J', 1),
(1300, 86, 'Saint Mark', 'M', 1),
(1301, 86, 'Saint Patrick', 'P', 1),
(1302, 86, 'Carriacou', 'C', 1),
(1303, 86, 'Petit Martinique', 'Q', 1),
(1304, 89, 'Alta Verapaz', 'AV', 1),
(1305, 89, 'Baja Verapaz', 'BV', 1),
(1306, 89, 'Chimaltenango', 'CM', 1),
(1307, 89, 'Chiquimula', 'CQ', 1),
(1308, 89, 'El Peten', 'PE', 1),
(1309, 89, 'El Progreso', 'PR', 1),
(1310, 89, 'El Quiche', 'QC', 1),
(1311, 89, 'Escuintla', 'ES', 1),
(1312, 89, 'Guatemala', 'GU', 1),
(1313, 89, 'Huehuetenango', 'HU', 1),
(1314, 89, 'Izabal', 'IZ', 1),
(1315, 89, 'Jalapa', 'JA', 1),
(1316, 89, 'Jutiapa', 'JU', 1),
(1317, 89, 'Quetzaltenango', 'QZ', 1),
(1318, 89, 'Retalhuleu', 'RE', 1),
(1319, 89, 'Sacatepequez', 'ST', 1),
(1320, 89, 'San Marcos', 'SM', 1),
(1321, 89, 'Santa Rosa', 'SR', 1),
(1322, 89, 'Solola', 'SO', 1),
(1323, 89, 'Suchitepequez', 'SU', 1),
(1324, 89, 'Totonicapan', 'TO', 1),
(1325, 89, 'Zacapa', 'ZA', 1),
(1326, 90, 'Conakry', 'CNK', 1),
(1327, 90, 'Beyla', 'BYL', 1),
(1328, 90, 'Boffa', 'BFA', 1),
(1329, 90, 'Boke', 'BOK', 1),
(1330, 90, 'Coyah', 'COY', 1),
(1331, 90, 'Dabola', 'DBL', 1),
(1332, 90, 'Dalaba', 'DLB', 1),
(1333, 90, 'Dinguiraye', 'DGR', 1),
(1334, 90, 'Dubreka', 'DBR', 1),
(1335, 90, 'Faranah', 'FRN', 1),
(1336, 90, 'Forecariah', 'FRC', 1),
(1337, 90, 'Fria', 'FRI', 1),
(1338, 90, 'Gaoual', 'GAO', 1),
(1339, 90, 'Gueckedou', 'GCD', 1),
(1340, 90, 'Kankan', 'KNK', 1),
(1341, 90, 'Kerouane', 'KRN', 1),
(1342, 90, 'Kindia', 'KND', 1),
(1343, 90, 'Kissidougou', 'KSD', 1),
(1344, 90, 'Koubia', 'KBA', 1),
(1345, 90, 'Koundara', 'KDA', 1),
(1346, 90, 'Kouroussa', 'KRA', 1),
(1347, 90, 'Labe', 'LAB', 1),
(1348, 90, 'Lelouma', 'LLM', 1),
(1349, 90, 'Lola', 'LOL', 1),
(1350, 90, 'Macenta', 'MCT', 1),
(1351, 90, 'Mali', 'MAL', 1),
(1352, 90, 'Mamou', 'MAM', 1),
(1353, 90, 'Mandiana', 'MAN', 1),
(1354, 90, 'Nzerekore', 'NZR', 1),
(1355, 90, 'Pita', 'PIT', 1),
(1356, 90, 'Siguiri', 'SIG', 1),
(1357, 90, 'Telimele', 'TLM', 1),
(1358, 90, 'Tougue', 'TOG', 1),
(1359, 90, 'Yomou', 'YOM', 1),
(1360, 91, 'Bafata Region', 'BF', 1),
(1361, 91, 'Biombo Region', 'BB', 1),
(1362, 91, 'Bissau Region', 'BS', 1),
(1363, 91, 'Bolama Region', 'BL', 1),
(1364, 91, 'Cacheu Region', 'CA', 1),
(1365, 91, 'Gabu Region', 'GA', 1),
(1366, 91, 'Oio Region', 'OI', 1),
(1367, 91, 'Quinara Region', 'QU', 1),
(1368, 91, 'Tombali Region', 'TO', 1),
(1369, 92, 'Barima-Waini', 'BW', 1),
(1370, 92, 'Cuyuni-Mazaruni', 'CM', 1),
(1371, 92, 'Demerara-Mahaica', 'DM', 1),
(1372, 92, 'East Berbice-Corentyne', 'EC', 1),
(1373, 92, 'Essequibo Islands-West Demerara', 'EW', 1),
(1374, 92, 'Mahaica-Berbice', 'MB', 1),
(1375, 92, 'Pomeroon-Supenaam', 'PM', 1),
(1376, 92, 'Potaro-Siparuni', 'PI', 1),
(1377, 92, 'Upper Demerara-Berbice', 'UD', 1),
(1378, 92, 'Upper Takutu-Upper Essequibo', 'UT', 1),
(1379, 93, 'Artibonite', 'AR', 1),
(1380, 93, 'Centre', 'CE', 1),
(1381, 93, 'Grand\'Anse', 'GA', 1),
(1382, 93, 'Nord', 'ND', 1),
(1383, 93, 'Nord-Est', 'NE', 1),
(1384, 93, 'Nord-Ouest', 'NO', 1),
(1385, 93, 'Ouest', 'OU', 1),
(1386, 93, 'Sud', 'SD', 1),
(1387, 93, 'Sud-Est', 'SE', 1),
(1388, 94, 'Flat Island', 'F', 1),
(1389, 94, 'McDonald Island', 'M', 1),
(1390, 94, 'Shag Island', 'S', 1),
(1391, 94, 'Heard Island', 'H', 1),
(1392, 95, 'Atlantida', 'AT', 1),
(1393, 95, 'Choluteca', 'CH', 1),
(1394, 95, 'Colon', 'CL', 1),
(1395, 95, 'Comayagua', 'CM', 1),
(1396, 95, 'Copan', 'CP', 1),
(1397, 95, 'Cortes', 'CR', 1),
(1398, 95, 'El Paraiso', 'PA', 1),
(1399, 95, 'Francisco Morazan', 'FM', 1),
(1400, 95, 'Gracias a Dios', 'GD', 1),
(1401, 95, 'Intibuca', 'IN', 1),
(1402, 95, 'Islas de la Bahia (Bay Islands)', 'IB', 1),
(1403, 95, 'La Paz', 'PZ', 1),
(1404, 95, 'Lempira', 'LE', 1),
(1405, 95, 'Ocotepeque', 'OC', 1),
(1406, 95, 'Olancho', 'OL', 1),
(1407, 95, 'Santa Barbara', 'SB', 1),
(1408, 95, 'Valle', 'VA', 1),
(1409, 95, 'Yoro', 'YO', 1),
(1410, 96, 'Central and Western Hong Kong Island', 'HCW', 1),
(1411, 96, 'Eastern Hong Kong Island', 'HEA', 1),
(1412, 96, 'Southern Hong Kong Island', 'HSO', 1),
(1413, 96, 'Wan Chai Hong Kong Island', 'HWC', 1),
(1414, 96, 'Kowloon City Kowloon', 'KKC', 1),
(1415, 96, 'Kwun Tong Kowloon', 'KKT', 1),
(1416, 96, 'Sham Shui Po Kowloon', 'KSS', 1),
(1417, 96, 'Wong Tai Sin Kowloon', 'KWT', 1),
(1418, 96, 'Yau Tsim Mong Kowloon', 'KYT', 1),
(1419, 96, 'Islands New Territories', 'NIS', 1),
(1420, 96, 'Kwai Tsing New Territories', 'NKT', 1),
(1421, 96, 'North New Territories', 'NNO', 1),
(1422, 96, 'Sai Kung New Territories', 'NSK', 1),
(1423, 96, 'Sha Tin New Territories', 'NST', 1),
(1424, 96, 'Tai Po New Territories', 'NTP', 1),
(1425, 96, 'Tsuen Wan New Territories', 'NTW', 1),
(1426, 96, 'Tuen Mun New Territories', 'NTM', 1),
(1427, 96, 'Yuen Long New Territories', 'NYL', 1),
(1467, 98, 'Austurland', 'AL', 1),
(1468, 98, 'Hofuoborgarsvaeoi', 'HF', 1),
(1469, 98, 'Norourland eystra', 'NE', 1),
(1470, 98, 'Norourland vestra', 'NV', 1),
(1471, 98, 'Suourland', 'SL', 1),
(1472, 98, 'Suournes', 'SN', 1),
(1473, 98, 'Vestfiroir', 'VF', 1),
(1474, 98, 'Vesturland', 'VL', 1),
(1475, 99, 'Andaman and Nicobar Islands', 'AN', 1),
(1476, 99, 'Andhra Pradesh', 'AP', 1),
(1477, 99, 'Arunachal Pradesh', 'AR', 1),
(1478, 99, 'Assam', 'AS', 1),
(1479, 99, 'Bihar', 'BI', 1),
(1480, 99, 'Chandigarh', 'CH', 1),
(1481, 99, 'Dadra and Nagar Haveli', 'DA', 1),
(1482, 99, 'Daman and Diu', 'DM', 1),
(1483, 99, 'Delhi', 'DE', 1),
(1484, 99, 'Goa', 'GO', 1),
(1485, 99, 'Gujarat', 'GU', 1),
(1486, 99, 'Haryana', 'HA', 1),
(1487, 99, 'Himachal Pradesh', 'HP', 1),
(1488, 99, 'Jammu and Kashmir', 'JA', 1),
(1489, 99, 'Karnataka', 'KA', 1),
(1490, 99, 'Kerala', 'KE', 1),
(1491, 99, 'Lakshadweep Islands', 'LI', 1),
(1492, 99, 'Madhya Pradesh', 'MP', 1),
(1493, 99, 'Maharashtra', 'MA', 1),
(1494, 99, 'Manipur', 'MN', 1),
(1495, 99, 'Meghalaya', 'ME', 1),
(1496, 99, 'Mizoram', 'MI', 1),
(1497, 99, 'Nagaland', 'NA', 1),
(1498, 99, 'Orissa', 'OR', 1),
(1499, 99, 'Puducherry', 'PO', 1),
(1500, 99, 'Punjab', 'PU', 1),
(1501, 99, 'Rajasthan', 'RA', 1),
(1502, 99, 'Sikkim', 'SI', 1),
(1503, 99, 'Tamil Nadu', 'TN', 1),
(1504, 99, 'Tripura', 'TR', 1),
(1505, 99, 'Uttar Pradesh', 'UP', 1),
(1506, 99, 'West Bengal', 'WB', 1),
(1507, 100, 'Aceh', 'AC', 1),
(1508, 100, 'Bali', 'BA', 1),
(1509, 100, 'Banten', 'BT', 1),
(1510, 100, 'Bengkulu', 'BE', 1),
(1511, 100, 'Kalimantan Utara', 'BD', 1),
(1512, 100, 'Gorontalo', 'GO', 1),
(1513, 100, 'Jakarta', 'JK', 1),
(1514, 100, 'Jambi', 'JA', 1),
(1515, 100, 'Jawa Barat', 'JB', 1),
(1516, 100, 'Jawa Tengah', 'JT', 1),
(1517, 100, 'Jawa Timur', 'JI', 1),
(1518, 100, 'Kalimantan Barat', 'KB', 1),
(1519, 100, 'Kalimantan Selatan', 'KS', 1),
(1520, 100, 'Kalimantan Tengah', 'KT', 1),
(1521, 100, 'Kalimantan Timur', 'KI', 1),
(1522, 100, 'Kepulauan Bangka Belitung', 'BB', 1),
(1523, 100, 'Lampung', 'LA', 1),
(1524, 100, 'Maluku', 'MA', 1),
(1525, 100, 'Maluku Utara', 'MU', 1),
(1526, 100, 'Nusa Tenggara Barat', 'NB', 1),
(1527, 100, 'Nusa Tenggara Timur', 'NT', 1),
(1528, 100, 'Papua', 'PA', 1),
(1529, 100, 'Riau', 'RI', 1),
(1530, 100, 'Sulawesi Selatan', 'SN', 1),
(1531, 100, 'Sulawesi Tengah', 'ST', 1),
(1532, 100, 'Sulawesi Tenggara', 'SG', 1),
(1533, 100, 'Sulawesi Utara', 'SA', 1),
(1534, 100, 'Sumatera Barat', 'SB', 1),
(1535, 100, 'Sumatera Selatan', 'SS', 1),
(1536, 100, 'Sumatera Utara', 'SU', 1),
(1537, 100, 'Yogyakarta', 'YO', 1),
(1538, 101, 'Tehran', 'TEH', 1),
(1539, 101, 'Qom', 'QOM', 1),
(1540, 101, 'Markazi', 'MKZ', 1),
(1541, 101, 'Qazvin', 'QAZ', 1),
(1542, 101, 'Gilan', 'GIL', 1),
(1543, 101, 'Ardabil', 'ARD', 1),
(1544, 101, 'Zanjan', 'ZAN', 1),
(1545, 101, 'East Azarbaijan', 'EAZ', 1),
(1546, 101, 'West Azarbaijan', 'WEZ', 1),
(1547, 101, 'Kurdistan', 'KRD', 1),
(1548, 101, 'Hamadan', 'HMD', 1),
(1549, 101, 'Kermanshah', 'KRM', 1),
(1550, 101, 'Ilam', 'ILM', 1),
(1551, 101, 'Lorestan', 'LRS', 1),
(1552, 101, 'Khuzestan', 'KZT', 1),
(1553, 101, 'Chahar Mahaal and Bakhtiari', 'CMB', 1),
(1554, 101, 'Kohkiluyeh and Buyer Ahmad', 'KBA', 1),
(1555, 101, 'Bushehr', 'BSH', 1),
(1556, 101, 'Fars', 'FAR', 1),
(1557, 101, 'Hormozgan', 'HRM', 1),
(1558, 101, 'Sistan and Baluchistan', 'SBL', 1),
(1559, 101, 'Kerman', 'KRB', 1),
(1560, 101, 'Yazd', 'YZD', 1),
(1561, 101, 'Esfahan', 'EFH', 1),
(1562, 101, 'Semnan', 'SMN', 1),
(1563, 101, 'Mazandaran', 'MZD', 1),
(1564, 101, 'Golestan', 'GLS', 1),
(1565, 101, 'North Khorasan', 'NKH', 1),
(1566, 101, 'Razavi Khorasan', 'RKH', 1),
(1567, 101, 'South Khorasan', 'SKH', 1),
(1568, 102, 'Baghdad', 'BD', 1),
(1569, 102, 'Salah ad Din', 'SD', 1),
(1570, 102, 'Diyala', 'DY', 1),
(1571, 102, 'Wasit', 'WS', 1),
(1572, 102, 'Maysan', 'MY', 1),
(1573, 102, 'Al Basrah', 'BA', 1),
(1574, 102, 'Dhi Qar', 'DQ', 1),
(1575, 102, 'Al Muthanna', 'MU', 1),
(1576, 102, 'Al Qadisyah', 'QA', 1),
(1577, 102, 'Babil', 'BB', 1),
(1578, 102, 'Al Karbala', 'KB', 1),
(1579, 102, 'An Najaf', 'NJ', 1),
(1580, 102, 'Al Anbar', 'AB', 1),
(1581, 102, 'Ninawa', 'NN', 1),
(1582, 102, 'Dahuk', 'DH', 1),
(1583, 102, 'Arbil', 'AL', 1),
(1584, 102, 'At Ta\'mim', 'TM', 1),
(1585, 102, 'As Sulaymaniyah', 'SL', 1),
(1586, 103, 'Carlow', 'CA', 1),
(1587, 103, 'Cavan', 'CV', 1),
(1588, 103, 'Clare', 'CL', 1),
(1589, 103, 'Cork', 'CO', 1),
(1590, 103, 'Donegal', 'DO', 1),
(1591, 103, 'Dublin', 'DU', 1),
(1592, 103, 'Galway', 'GA', 1),
(1593, 103, 'Kerry', 'KE', 1),
(1594, 103, 'Kildare', 'KI', 1),
(1595, 103, 'Kilkenny', 'KL', 1),
(1596, 103, 'Laois', 'LA', 1),
(1597, 103, 'Leitrim', 'LE', 1);
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES
(1598, 103, 'Limerick', 'LI', 1),
(1599, 103, 'Longford', 'LO', 1),
(1600, 103, 'Louth', 'LU', 1),
(1601, 103, 'Mayo', 'MA', 1),
(1602, 103, 'Meath', 'ME', 1),
(1603, 103, 'Monaghan', 'MO', 1),
(1604, 103, 'Offaly', 'OF', 1),
(1605, 103, 'Roscommon', 'RO', 1),
(1606, 103, 'Sligo', 'SL', 1),
(1607, 103, 'Tipperary', 'TI', 1),
(1608, 103, 'Waterford', 'WA', 1),
(1609, 103, 'Westmeath', 'WE', 1),
(1610, 103, 'Wexford', 'WX', 1),
(1611, 103, 'Wicklow', 'WI', 1),
(1612, 104, 'Be\'er Sheva', 'BS', 1),
(1613, 104, 'Bika\'at Hayarden', 'BH', 1),
(1614, 104, 'Eilat and Arava', 'EA', 1),
(1615, 104, 'Galil', 'GA', 1),
(1616, 104, 'Haifa', 'HA', 1),
(1617, 104, 'Jehuda Mountains', 'JM', 1),
(1618, 104, 'Jerusalem', 'JE', 1),
(1619, 104, 'Negev', 'NE', 1),
(1620, 104, 'Semaria', 'SE', 1),
(1621, 104, 'Sharon', 'SH', 1),
(1622, 104, 'Tel Aviv (Gosh Dan)', 'TA', 1),
(3860, 105, 'Caltanissetta', 'CL', 1),
(3842, 105, 'Agrigento', 'AG', 1),
(3843, 105, 'Alessandria', 'AL', 1),
(3844, 105, 'Ancona', 'AN', 1),
(3845, 105, 'Aosta', 'AO', 1),
(3846, 105, 'Arezzo', 'AR', 1),
(3847, 105, 'Ascoli Piceno', 'AP', 1),
(3848, 105, 'Asti', 'AT', 1),
(3849, 105, 'Avellino', 'AV', 1),
(3850, 105, 'Bari', 'BA', 1),
(3851, 105, 'Belluno', 'BL', 1),
(3852, 105, 'Benevento', 'BN', 1),
(3853, 105, 'Bergamo', 'BG', 1),
(3854, 105, 'Biella', 'BI', 1),
(3855, 105, 'Bologna', 'BO', 1),
(3856, 105, 'Bolzano', 'BZ', 1),
(3857, 105, 'Brescia', 'BS', 1),
(3858, 105, 'Brindisi', 'BR', 1),
(3859, 105, 'Cagliari', 'CA', 1),
(1643, 106, 'Clarendon Parish', 'CLA', 1),
(1644, 106, 'Hanover Parish', 'HAN', 1),
(1645, 106, 'Kingston Parish', 'KIN', 1),
(1646, 106, 'Manchester Parish', 'MAN', 1),
(1647, 106, 'Portland Parish', 'POR', 1),
(1648, 106, 'Saint Andrew Parish', 'AND', 1),
(1649, 106, 'Saint Ann Parish', 'ANN', 1),
(1650, 106, 'Saint Catherine Parish', 'CAT', 1),
(1651, 106, 'Saint Elizabeth Parish', 'ELI', 1),
(1652, 106, 'Saint James Parish', 'JAM', 1),
(1653, 106, 'Saint Mary Parish', 'MAR', 1),
(1654, 106, 'Saint Thomas Parish', 'THO', 1),
(1655, 106, 'Trelawny Parish', 'TRL', 1),
(1656, 106, 'Westmoreland Parish', 'WML', 1),
(1657, 107, 'Aichi', 'AI', 1),
(1658, 107, 'Akita', 'AK', 1),
(1659, 107, 'Aomori', 'AO', 1),
(1660, 107, 'Chiba', 'CH', 1),
(1661, 107, 'Ehime', 'EH', 1),
(1662, 107, 'Fukui', 'FK', 1),
(1663, 107, 'Fukuoka', 'FU', 1),
(1664, 107, 'Fukushima', 'FS', 1),
(1665, 107, 'Gifu', 'GI', 1),
(1666, 107, 'Gumma', 'GU', 1),
(1667, 107, 'Hiroshima', 'HI', 1),
(1668, 107, 'Hokkaido', 'HO', 1),
(1669, 107, 'Hyogo', 'HY', 1),
(1670, 107, 'Ibaraki', 'IB', 1),
(1671, 107, 'Ishikawa', 'IS', 1),
(1672, 107, 'Iwate', 'IW', 1),
(1673, 107, 'Kagawa', 'KA', 1),
(1674, 107, 'Kagoshima', 'KG', 1),
(1675, 107, 'Kanagawa', 'KN', 1),
(1676, 107, 'Kochi', 'KO', 1),
(1677, 107, 'Kumamoto', 'KU', 1),
(1678, 107, 'Kyoto', 'KY', 1),
(1679, 107, 'Mie', 'MI', 1),
(1680, 107, 'Miyagi', 'MY', 1),
(1681, 107, 'Miyazaki', 'MZ', 1),
(1682, 107, 'Nagano', 'NA', 1),
(1683, 107, 'Nagasaki', 'NG', 1),
(1684, 107, 'Nara', 'NR', 1),
(1685, 107, 'Niigata', 'NI', 1),
(1686, 107, 'Oita', 'OI', 1),
(1687, 107, 'Okayama', 'OK', 1),
(1688, 107, 'Okinawa', 'ON', 1),
(1689, 107, 'Osaka', 'OS', 1),
(1690, 107, 'Saga', 'SA', 1),
(1691, 107, 'Saitama', 'SI', 1),
(1692, 107, 'Shiga', 'SH', 1),
(1693, 107, 'Shimane', 'SM', 1),
(1694, 107, 'Shizuoka', 'SZ', 1),
(1695, 107, 'Tochigi', 'TO', 1),
(1696, 107, 'Tokushima', 'TS', 1),
(1697, 107, 'Tokyo', 'TK', 1),
(1698, 107, 'Tottori', 'TT', 1),
(1699, 107, 'Toyama', 'TY', 1),
(1700, 107, 'Wakayama', 'WA', 1),
(1701, 107, 'Yamagata', 'YA', 1),
(1702, 107, 'Yamaguchi', 'YM', 1),
(1703, 107, 'Yamanashi', 'YN', 1),
(1704, 108, '\'Amman', 'AM', 1),
(1705, 108, 'Ajlun', 'AJ', 1),
(1706, 108, 'Al \'Aqabah', 'AA', 1),
(1707, 108, 'Al Balqa\'', 'AB', 1),
(1708, 108, 'Al Karak', 'AK', 1),
(1709, 108, 'Al Mafraq', 'AL', 1),
(1710, 108, 'At Tafilah', 'AT', 1),
(1711, 108, 'Az Zarqa\'', 'AZ', 1),
(1712, 108, 'Irbid', 'IR', 1),
(1713, 108, 'Jarash', 'JA', 1),
(1714, 108, 'Ma\'an', 'MA', 1),
(1715, 108, 'Madaba', 'MD', 1),
(1716, 109, 'Almaty', 'AL', 1),
(1717, 109, 'Almaty City', 'AC', 1),
(1718, 109, 'Aqmola', 'AM', 1),
(1719, 109, 'Aqtobe', 'AQ', 1),
(1720, 109, 'Astana City', 'AS', 1),
(1721, 109, 'Atyrau', 'AT', 1),
(1722, 109, 'Batys Qazaqstan', 'BA', 1),
(1723, 109, 'Bayqongyr City', 'BY', 1),
(1724, 109, 'Mangghystau', 'MA', 1),
(1725, 109, 'Ongtustik Qazaqstan', 'ON', 1),
(1726, 109, 'Pavlodar', 'PA', 1),
(1727, 109, 'Qaraghandy', 'QA', 1),
(1728, 109, 'Qostanay', 'QO', 1),
(1729, 109, 'Qyzylorda', 'QY', 1),
(1730, 109, 'Shyghys Qazaqstan', 'SH', 1),
(1731, 109, 'Soltustik Qazaqstan', 'SO', 1),
(1732, 109, 'Zhambyl', 'ZH', 1),
(1733, 110, 'Central', 'CE', 1),
(1734, 110, 'Coast', 'CO', 1),
(1735, 110, 'Eastern', 'EA', 1),
(1736, 110, 'Nairobi Area', 'NA', 1),
(1737, 110, 'North Eastern', 'NE', 1),
(1738, 110, 'Nyanza', 'NY', 1),
(1739, 110, 'Rift Valley', 'RV', 1),
(1740, 110, 'Western', 'WE', 1),
(1741, 111, 'Abaiang', 'AG', 1),
(1742, 111, 'Abemama', 'AM', 1),
(1743, 111, 'Aranuka', 'AK', 1),
(1744, 111, 'Arorae', 'AO', 1),
(1745, 111, 'Banaba', 'BA', 1),
(1746, 111, 'Beru', 'BE', 1),
(1747, 111, 'Butaritari', 'bT', 1),
(1748, 111, 'Kanton', 'KA', 1),
(1749, 111, 'Kiritimati', 'KR', 1),
(1750, 111, 'Kuria', 'KU', 1),
(1751, 111, 'Maiana', 'MI', 1),
(1752, 111, 'Makin', 'MN', 1),
(1753, 111, 'Marakei', 'ME', 1),
(1754, 111, 'Nikunau', 'NI', 1),
(1755, 111, 'Nonouti', 'NO', 1),
(1756, 111, 'Onotoa', 'ON', 1),
(1757, 111, 'Tabiteuea', 'TT', 1),
(1758, 111, 'Tabuaeran', 'TR', 1),
(1759, 111, 'Tamana', 'TM', 1),
(1760, 111, 'Tarawa', 'TW', 1),
(1761, 111, 'Teraina', 'TE', 1),
(1762, 112, 'Chagang-do', 'CHA', 1),
(1763, 112, 'Hamgyong-bukto', 'HAB', 1),
(1764, 112, 'Hamgyong-namdo', 'HAN', 1),
(1765, 112, 'Hwanghae-bukto', 'HWB', 1),
(1766, 112, 'Hwanghae-namdo', 'HWN', 1),
(1767, 112, 'Kangwon-do', 'KAN', 1),
(1768, 112, 'P\'yongan-bukto', 'PYB', 1),
(1769, 112, 'P\'yongan-namdo', 'PYN', 1),
(1770, 112, 'Ryanggang-do (Yanggang-do)', 'YAN', 1),
(1771, 112, 'Rason Directly Governed City', 'NAJ', 1),
(1772, 112, 'P\'yongyang Special City', 'PYO', 1),
(1773, 113, 'Ch\'ungch\'ong-bukto', 'CO', 1),
(1774, 113, 'Ch\'ungch\'ong-namdo', 'CH', 1),
(1775, 113, 'Cheju-do', 'CD', 1),
(1776, 113, 'Cholla-bukto', 'CB', 1),
(1777, 113, 'Cholla-namdo', 'CN', 1),
(1778, 113, 'Inch\'on-gwangyoksi', 'IG', 1),
(1779, 113, 'Kangwon-do', 'KA', 1),
(1780, 113, 'Kwangju-gwangyoksi', 'KG', 1),
(1781, 113, 'Kyonggi-do', 'KD', 1),
(1782, 113, 'Kyongsang-bukto', 'KB', 1),
(1783, 113, 'Kyongsang-namdo', 'KN', 1),
(1784, 113, 'Pusan-gwangyoksi', 'PG', 1),
(1785, 113, 'Soul-t\'ukpyolsi', 'SO', 1),
(1786, 113, 'Taegu-gwangyoksi', 'TA', 1),
(1787, 113, 'Taejon-gwangyoksi', 'TG', 1),
(1788, 114, 'Al \'Asimah', 'AL', 1),
(1789, 114, 'Al Ahmadi', 'AA', 1),
(1790, 114, 'Al Farwaniyah', 'AF', 1),
(1791, 114, 'Al Jahra\'', 'AJ', 1),
(1792, 114, 'Hawalli', 'HA', 1),
(1793, 115, 'Bishkek', 'GB', 1),
(1794, 115, 'Batken', 'B', 1),
(1795, 115, 'Chu', 'C', 1),
(1796, 115, 'Jalal-Abad', 'J', 1),
(1797, 115, 'Naryn', 'N', 1),
(1798, 115, 'Osh', 'O', 1),
(1799, 115, 'Talas', 'T', 1),
(1800, 115, 'Ysyk-Kol', 'Y', 1),
(1801, 116, 'Vientiane', 'VT', 1),
(1802, 116, 'Attapu', 'AT', 1),
(1803, 116, 'Bokeo', 'BK', 1),
(1804, 116, 'Bolikhamxai', 'BL', 1),
(1805, 116, 'Champasak', 'CH', 1),
(1806, 116, 'Houaphan', 'HO', 1),
(1807, 116, 'Khammouan', 'KH', 1),
(1808, 116, 'Louang Namtha', 'LM', 1),
(1809, 116, 'Louangphabang', 'LP', 1),
(1810, 116, 'Oudomxai', 'OU', 1),
(1811, 116, 'Phongsali', 'PH', 1),
(1812, 116, 'Salavan', 'SL', 1),
(1813, 116, 'Savannakhet', 'SV', 1),
(1814, 116, 'Vientiane', 'VI', 1),
(1815, 116, 'Xaignabouli', 'XA', 1),
(1816, 116, 'Xekong', 'XE', 1),
(1817, 116, 'Xiangkhoang', 'XI', 1),
(1818, 116, 'Xaisomboun', 'XN', 1),
(1852, 119, 'Berea', 'BE', 1),
(1853, 119, 'Butha-Buthe', 'BB', 1),
(1854, 119, 'Leribe', 'LE', 1),
(1855, 119, 'Mafeteng', 'MF', 1),
(1856, 119, 'Maseru', 'MS', 1),
(1857, 119, 'Mohale\'s Hoek', 'MH', 1),
(1858, 119, 'Mokhotlong', 'MK', 1),
(1859, 119, 'Qacha\'s Nek', 'QN', 1),
(1860, 119, 'Quthing', 'QT', 1),
(1861, 119, 'Thaba-Tseka', 'TT', 1),
(1862, 120, 'Bomi', 'BI', 1),
(1863, 120, 'Bong', 'BG', 1),
(1864, 120, 'Grand Bassa', 'GB', 1),
(1865, 120, 'Grand Cape Mount', 'CM', 1),
(1866, 120, 'Grand Gedeh', 'GG', 1),
(1867, 120, 'Grand Kru', 'GK', 1),
(1868, 120, 'Lofa', 'LO', 1),
(1869, 120, 'Margibi', 'MG', 1),
(1870, 120, 'Maryland', 'ML', 1),
(1871, 120, 'Montserrado', 'MS', 1),
(1872, 120, 'Nimba', 'NB', 1),
(1873, 120, 'River Cess', 'RC', 1),
(1874, 120, 'Sinoe', 'SN', 1),
(1875, 121, 'Ajdabiya', 'AJ', 1),
(1876, 121, 'Al \'Aziziyah', 'AZ', 1),
(1877, 121, 'Al Fatih', 'FA', 1),
(1878, 121, 'Al Jabal al Akhdar', 'JA', 1),
(1879, 121, 'Al Jufrah', 'JU', 1),
(1880, 121, 'Al Khums', 'KH', 1),
(1881, 121, 'Al Kufrah', 'KU', 1),
(1882, 121, 'An Nuqat al Khams', 'NK', 1),
(1883, 121, 'Ash Shati\'', 'AS', 1),
(1884, 121, 'Awbari', 'AW', 1),
(1885, 121, 'Az Zawiyah', 'ZA', 1),
(1886, 121, 'Banghazi', 'BA', 1),
(1887, 121, 'Darnah', 'DA', 1),
(1888, 121, 'Ghadamis', 'GD', 1),
(1889, 121, 'Gharyan', 'GY', 1),
(1890, 121, 'Misratah', 'MI', 1),
(1891, 121, 'Murzuq', 'MZ', 1),
(1892, 121, 'Sabha', 'SB', 1),
(1893, 121, 'Sawfajjin', 'SW', 1),
(1894, 121, 'Surt', 'SU', 1),
(1895, 121, 'Tarabulus (Tripoli)', 'TL', 1),
(1896, 121, 'Tarhunah', 'TH', 1),
(1897, 121, 'Tubruq', 'TU', 1),
(1898, 121, 'Yafran', 'YA', 1),
(1899, 121, 'Zlitan', 'ZL', 1),
(1900, 122, 'Vaduz', 'V', 1),
(1901, 122, 'Schaan', 'A', 1),
(1902, 122, 'Balzers', 'B', 1),
(1903, 122, 'Triesen', 'N', 1),
(1904, 122, 'Eschen', 'E', 1),
(1905, 122, 'Mauren', 'M', 1),
(1906, 122, 'Triesenberg', 'T', 1),
(1907, 122, 'Ruggell', 'R', 1),
(1908, 122, 'Gamprin', 'G', 1),
(1909, 122, 'Schellenberg', 'L', 1),
(1910, 122, 'Planken', 'P', 1),
(1911, 123, 'Alytus', 'AL', 1),
(1912, 123, 'Kaunas', 'KA', 1),
(1913, 123, 'Klaipeda', 'KL', 1),
(1914, 123, 'Marijampole', 'MA', 1),
(1915, 123, 'Panevezys', 'PA', 1),
(1916, 123, 'Siauliai', 'SI', 1),
(1917, 123, 'Taurage', 'TA', 1),
(1918, 123, 'Telsiai', 'TE', 1),
(1919, 123, 'Utena', 'UT', 1),
(1920, 123, 'Vilnius', 'VI', 1),
(1921, 124, 'Diekirch', 'DD', 1),
(1922, 124, 'Clervaux', 'DC', 1),
(1923, 124, 'Redange', 'DR', 1),
(1924, 124, 'Vianden', 'DV', 1),
(1925, 124, 'Wiltz', 'DW', 1),
(1926, 124, 'Grevenmacher', 'GG', 1),
(1927, 124, 'Echternach', 'GE', 1),
(1928, 124, 'Remich', 'GR', 1),
(1929, 124, 'Luxembourg', 'LL', 1),
(1930, 124, 'Capellen', 'LC', 1),
(1931, 124, 'Esch-sur-Alzette', 'LE', 1),
(1932, 124, 'Mersch', 'LM', 1),
(1933, 125, 'Our Lady Fatima Parish', 'OLF', 1),
(1934, 125, 'St. Anthony Parish', 'ANT', 1),
(1935, 125, 'St. Lazarus Parish', 'LAZ', 1),
(1936, 125, 'Cathedral Parish', 'CAT', 1),
(1937, 125, 'St. Lawrence Parish', 'LAW', 1),
(1938, 127, 'Antananarivo', 'AN', 1),
(1939, 127, 'Antsiranana', 'AS', 1),
(1940, 127, 'Fianarantsoa', 'FN', 1),
(1941, 127, 'Mahajanga', 'MJ', 1),
(1942, 127, 'Toamasina', 'TM', 1),
(1943, 127, 'Toliara', 'TL', 1),
(1944, 128, 'Balaka', 'BLK', 1),
(1945, 128, 'Blantyre', 'BLT', 1),
(1946, 128, 'Chikwawa', 'CKW', 1),
(1947, 128, 'Chiradzulu', 'CRD', 1),
(1948, 128, 'Chitipa', 'CTP', 1),
(1949, 128, 'Dedza', 'DDZ', 1),
(1950, 128, 'Dowa', 'DWA', 1),
(1951, 128, 'Karonga', 'KRG', 1),
(1952, 128, 'Kasungu', 'KSG', 1),
(1953, 128, 'Likoma', 'LKM', 1),
(1954, 128, 'Lilongwe', 'LLG', 1),
(1955, 128, 'Machinga', 'MCG', 1),
(1956, 128, 'Mangochi', 'MGC', 1),
(1957, 128, 'Mchinji', 'MCH', 1),
(1958, 128, 'Mulanje', 'MLJ', 1),
(1959, 128, 'Mwanza', 'MWZ', 1),
(1960, 128, 'Mzimba', 'MZM', 1),
(1961, 128, 'Ntcheu', 'NTU', 1),
(1962, 128, 'Nkhata Bay', 'NKB', 1),
(1963, 128, 'Nkhotakota', 'NKH', 1),
(1964, 128, 'Nsanje', 'NSJ', 1),
(1965, 128, 'Ntchisi', 'NTI', 1),
(1966, 128, 'Phalombe', 'PHL', 1),
(1967, 128, 'Rumphi', 'RMP', 1),
(1968, 128, 'Salima', 'SLM', 1),
(1969, 128, 'Thyolo', 'THY', 1),
(1970, 128, 'Zomba', 'ZBA', 1),
(1971, 129, 'Johor', 'MY-01', 1),
(1972, 129, 'Kedah', 'MY-02', 1),
(1973, 129, 'Kelantan', 'MY-03', 1),
(1974, 129, 'Labuan', 'MY-15', 1),
(1975, 129, 'Melaka', 'MY-04', 1),
(1976, 129, 'Negeri Sembilan', 'MY-05', 1),
(1977, 129, 'Pahang', 'MY-06', 1),
(1978, 129, 'Perak', 'MY-08', 1),
(1979, 129, 'Perlis', 'MY-09', 1),
(1980, 129, 'Pulau Pinang', 'MY-07', 1),
(1981, 129, 'Sabah', 'MY-12', 1),
(1982, 129, 'Sarawak', 'MY-13', 1),
(1983, 129, 'Selangor', 'MY-10', 1),
(1984, 129, 'Terengganu', 'MY-11', 1),
(1985, 129, 'Kuala Lumpur', 'MY-14', 1),
(4035, 129, 'Putrajaya', 'MY-16', 1),
(1986, 130, 'Thiladhunmathi Uthuru', 'THU', 1),
(1987, 130, 'Thiladhunmathi Dhekunu', 'THD', 1),
(1988, 130, 'Miladhunmadulu Uthuru', 'MLU', 1),
(1989, 130, 'Miladhunmadulu Dhekunu', 'MLD', 1),
(1990, 130, 'Maalhosmadulu Uthuru', 'MAU', 1),
(1991, 130, 'Maalhosmadulu Dhekunu', 'MAD', 1),
(1992, 130, 'Faadhippolhu', 'FAA', 1),
(1993, 130, 'Male Atoll', 'MAA', 1),
(1994, 130, 'Ari Atoll Uthuru', 'AAU', 1),
(1995, 130, 'Ari Atoll Dheknu', 'AAD', 1),
(1996, 130, 'Felidhe Atoll', 'FEA', 1),
(1997, 130, 'Mulaku Atoll', 'MUA', 1),
(1998, 130, 'Nilandhe Atoll Uthuru', 'NAU', 1),
(1999, 130, 'Nilandhe Atoll Dhekunu', 'NAD', 1),
(2000, 130, 'Kolhumadulu', 'KLH', 1),
(2001, 130, 'Hadhdhunmathi', 'HDH', 1),
(2002, 130, 'Huvadhu Atoll Uthuru', 'HAU', 1),
(2003, 130, 'Huvadhu Atoll Dhekunu', 'HAD', 1),
(2004, 130, 'Fua Mulaku', 'FMU', 1),
(2005, 130, 'Addu', 'ADD', 1),
(2006, 131, 'Gao', 'GA', 1),
(2007, 131, 'Kayes', 'KY', 1),
(2008, 131, 'Kidal', 'KD', 1),
(2009, 131, 'Koulikoro', 'KL', 1),
(2010, 131, 'Mopti', 'MP', 1),
(2011, 131, 'Segou', 'SG', 1),
(2012, 131, 'Sikasso', 'SK', 1),
(2013, 131, 'Tombouctou', 'TB', 1),
(2014, 131, 'Bamako Capital District', 'CD', 1),
(2015, 132, 'Attard', 'ATT', 1),
(2016, 132, 'Balzan', 'BAL', 1),
(2017, 132, 'Birgu', 'BGU', 1),
(2018, 132, 'Birkirkara', 'BKK', 1),
(2019, 132, 'Birzebbuga', 'BRZ', 1),
(2020, 132, 'Bormla', 'BOR', 1),
(2021, 132, 'Dingli', 'DIN', 1),
(2022, 132, 'Fgura', 'FGU', 1),
(2023, 132, 'Floriana', 'FLO', 1),
(2024, 132, 'Gudja', 'GDJ', 1),
(2025, 132, 'Gzira', 'GZR', 1),
(2026, 132, 'Gargur', 'GRG', 1),
(2027, 132, 'Gaxaq', 'GXQ', 1),
(2028, 132, 'Hamrun', 'HMR', 1),
(2029, 132, 'Iklin', 'IKL', 1),
(2030, 132, 'Isla', 'ISL', 1),
(2031, 132, 'Kalkara', 'KLK', 1),
(2032, 132, 'Kirkop', 'KRK', 1),
(2033, 132, 'Lija', 'LIJ', 1),
(2034, 132, 'Luqa', 'LUQ', 1),
(2035, 132, 'Marsa', 'MRS', 1),
(2036, 132, 'Marsaskala', 'MKL', 1),
(2037, 132, 'Marsaxlokk', 'MXL', 1),
(2038, 132, 'Mdina', 'MDN', 1),
(2039, 132, 'Melliea', 'MEL', 1),
(2040, 132, 'Mgarr', 'MGR', 1),
(2041, 132, 'Mosta', 'MST', 1),
(2042, 132, 'Mqabba', 'MQA', 1),
(2043, 132, 'Msida', 'MSI', 1),
(2044, 132, 'Mtarfa', 'MTF', 1),
(2045, 132, 'Naxxar', 'NAX', 1),
(2046, 132, 'Paola', 'PAO', 1),
(2047, 132, 'Pembroke', 'PEM', 1),
(2048, 132, 'Pieta', 'PIE', 1),
(2049, 132, 'Qormi', 'QOR', 1),
(2050, 132, 'Qrendi', 'QRE', 1),
(2051, 132, 'Rabat', 'RAB', 1),
(2052, 132, 'Safi', 'SAF', 1),
(2053, 132, 'San Giljan', 'SGI', 1),
(2054, 132, 'Santa Lucija', 'SLU', 1),
(2055, 132, 'San Pawl il-Bahar', 'SPB', 1),
(2056, 132, 'San Gwann', 'SGW', 1),
(2057, 132, 'Santa Venera', 'SVE', 1),
(2058, 132, 'Siggiewi', 'SIG', 1),
(2059, 132, 'Sliema', 'SLM', 1),
(2060, 132, 'Swieqi', 'SWQ', 1),
(2061, 132, 'Ta Xbiex', 'TXB', 1),
(2062, 132, 'Tarxien', 'TRX', 1),
(2063, 132, 'Valletta', 'VLT', 1),
(2064, 132, 'Xgajra', 'XGJ', 1),
(2065, 132, 'Zabbar', 'ZBR', 1),
(2066, 132, 'Zebbug', 'ZBG', 1),
(2067, 132, 'Zejtun', 'ZJT', 1),
(2068, 132, 'Zurrieq', 'ZRQ', 1),
(2069, 132, 'Fontana', 'FNT', 1),
(2070, 132, 'Ghajnsielem', 'GHJ', 1),
(2071, 132, 'Gharb', 'GHR', 1),
(2072, 132, 'Ghasri', 'GHS', 1),
(2073, 132, 'Kercem', 'KRC', 1),
(2074, 132, 'Munxar', 'MUN', 1),
(2075, 132, 'Nadur', 'NAD', 1),
(2076, 132, 'Qala', 'QAL', 1),
(2077, 132, 'Victoria', 'VIC', 1),
(2078, 132, 'San Lawrenz', 'SLA', 1),
(2079, 132, 'Sannat', 'SNT', 1),
(2080, 132, 'Xagra', 'ZAG', 1),
(2081, 132, 'Xewkija', 'XEW', 1),
(2082, 132, 'Zebbug', 'ZEB', 1),
(2083, 133, 'Ailinginae', 'ALG', 1),
(2084, 133, 'Ailinglaplap', 'ALL', 1),
(2085, 133, 'Ailuk', 'ALK', 1),
(2086, 133, 'Arno', 'ARN', 1),
(2087, 133, 'Aur', 'AUR', 1),
(2088, 133, 'Bikar', 'BKR', 1),
(2089, 133, 'Bikini', 'BKN', 1),
(2090, 133, 'Bokak', 'BKK', 1),
(2091, 133, 'Ebon', 'EBN', 1),
(2092, 133, 'Enewetak', 'ENT', 1),
(2093, 133, 'Erikub', 'EKB', 1),
(2094, 133, 'Jabat', 'JBT', 1),
(2095, 133, 'Jaluit', 'JLT', 1),
(2096, 133, 'Jemo', 'JEM', 1),
(2097, 133, 'Kili', 'KIL', 1),
(2098, 133, 'Kwajalein', 'KWJ', 1),
(2099, 133, 'Lae', 'LAE', 1),
(2100, 133, 'Lib', 'LIB', 1),
(2101, 133, 'Likiep', 'LKP', 1),
(2102, 133, 'Majuro', 'MJR', 1),
(2103, 133, 'Maloelap', 'MLP', 1),
(2104, 133, 'Mejit', 'MJT', 1),
(2105, 133, 'Mili', 'MIL', 1),
(2106, 133, 'Namorik', 'NMK', 1),
(2107, 133, 'Namu', 'NAM', 1),
(2108, 133, 'Rongelap', 'RGL', 1),
(2109, 133, 'Rongrik', 'RGK', 1),
(2110, 133, 'Toke', 'TOK', 1),
(2111, 133, 'Ujae', 'UJA', 1),
(2112, 133, 'Ujelang', 'UJL', 1),
(2113, 133, 'Utirik', 'UTK', 1),
(2114, 133, 'Wotho', 'WTH', 1),
(2115, 133, 'Wotje', 'WTJ', 1),
(2116, 135, 'Adrar', 'AD', 1),
(2117, 135, 'Assaba', 'AS', 1),
(2118, 135, 'Brakna', 'BR', 1),
(2119, 135, 'Dakhlet Nouadhibou', 'DN', 1),
(2120, 135, 'Gorgol', 'GO', 1),
(2121, 135, 'Guidimaka', 'GM', 1),
(2122, 135, 'Hodh Ech Chargui', 'HC', 1),
(2123, 135, 'Hodh El Gharbi', 'HG', 1),
(2124, 135, 'Inchiri', 'IN', 1),
(2125, 135, 'Tagant', 'TA', 1),
(2126, 135, 'Tiris Zemmour', 'TZ', 1),
(2127, 135, 'Trarza', 'TR', 1),
(2128, 135, 'Nouakchott', 'NO', 1),
(2129, 136, 'Beau Bassin-Rose Hill', 'BR', 1),
(2130, 136, 'Curepipe', 'CU', 1),
(2131, 136, 'Port Louis', 'PU', 1),
(2132, 136, 'Quatre Bornes', 'QB', 1),
(2133, 136, 'Vacoas-Phoenix', 'VP', 1),
(2134, 136, 'Agalega Islands', 'AG', 1),
(2135, 136, 'Cargados Carajos Shoals (Saint Brandon Islands)', 'CC', 1),
(2136, 136, 'Rodrigues', 'RO', 1),
(2137, 136, 'Black River', 'BL', 1),
(2138, 136, 'Flacq', 'FL', 1),
(2139, 136, 'Grand Port', 'GP', 1),
(2140, 136, 'Moka', 'MO', 1),
(2141, 136, 'Pamplemousses', 'PA', 1),
(2142, 136, 'Plaines Wilhems', 'PW', 1),
(2143, 136, 'Port Louis', 'PL', 1),
(2144, 136, 'Riviere du Rempart', 'RR', 1),
(2145, 136, 'Savanne', 'SA', 1),
(2146, 138, 'Baja California Norte', 'BN', 1),
(2147, 138, 'Baja California Sur', 'BS', 1),
(2148, 138, 'Campeche', 'CA', 1),
(2149, 138, 'Chiapas', 'CI', 1),
(2150, 138, 'Chihuahua', 'CH', 1),
(2151, 138, 'Coahuila de Zaragoza', 'CZ', 1),
(2152, 138, 'Colima', 'CL', 1),
(2153, 138, 'Distrito Federal', 'DF', 1),
(2154, 138, 'Durango', 'DU', 1),
(2155, 138, 'Guanajuato', 'GA', 1),
(2156, 138, 'Guerrero', 'GE', 1),
(2157, 138, 'Hidalgo', 'HI', 1),
(2158, 138, 'Jalisco', 'JA', 1),
(2159, 138, 'Mexico', 'ME', 1),
(2160, 138, 'Michoacan de Ocampo', 'MI', 1),
(2161, 138, 'Morelos', 'MO', 1),
(2162, 138, 'Nayarit', 'NA', 1),
(2163, 138, 'Nuevo Leon', 'NL', 1),
(2164, 138, 'Oaxaca', 'OA', 1),
(2165, 138, 'Puebla', 'PU', 1),
(2166, 138, 'Queretaro de Arteaga', 'QA', 1),
(2167, 138, 'Quintana Roo', 'QR', 1),
(2168, 138, 'San Luis Potosi', 'SA', 1),
(2169, 138, 'Sinaloa', 'SI', 1),
(2170, 138, 'Sonora', 'SO', 1),
(2171, 138, 'Tabasco', 'TB', 1),
(2172, 138, 'Tamaulipas', 'TM', 1),
(2173, 138, 'Tlaxcala', 'TL', 1),
(2174, 138, 'Veracruz-Llave', 'VE', 1),
(2175, 138, 'Yucatan', 'YU', 1),
(2176, 138, 'Zacatecas', 'ZA', 1),
(2177, 139, 'Chuuk', 'C', 1),
(2178, 139, 'Kosrae', 'K', 1),
(2179, 139, 'Pohnpei', 'P', 1),
(2180, 139, 'Yap', 'Y', 1),
(2181, 140, 'Gagauzia', 'GA', 1),
(2182, 140, 'Chisinau', 'CU', 1),
(2183, 140, 'Balti', 'BA', 1),
(2184, 140, 'Cahul', 'CA', 1),
(2185, 140, 'Edinet', 'ED', 1),
(2186, 140, 'Lapusna', 'LA', 1),
(2187, 140, 'Orhei', 'OR', 1),
(2188, 140, 'Soroca', 'SO', 1),
(2189, 140, 'Tighina', 'TI', 1),
(2190, 140, 'Ungheni', 'UN', 1),
(2191, 140, 'St‚nga Nistrului', 'SN', 1),
(2192, 141, 'Fontvieille', 'FV', 1),
(2193, 141, 'La Condamine', 'LC', 1),
(2194, 141, 'Monaco-Ville', 'MV', 1),
(2195, 141, 'Monte-Carlo', 'MC', 1),
(2196, 142, 'Ulanbaatar', '1', 1),
(2197, 142, 'Orhon', '035', 1),
(2198, 142, 'Darhan uul', '037', 1),
(2199, 142, 'Hentiy', '039', 1),
(2200, 142, 'Hovsgol', '041', 1),
(2201, 142, 'Hovd', '043', 1),
(2202, 142, 'Uvs', '046', 1),
(2203, 142, 'Tov', '047', 1),
(2204, 142, 'Selenge', '049', 1),
(2205, 142, 'Suhbaatar', '051', 1),
(2206, 142, 'Omnogovi', '053', 1),
(2207, 142, 'Ovorhangay', '055', 1),
(2208, 142, 'Dzavhan', '057', 1),
(2209, 142, 'DundgovL', '059', 1),
(2210, 142, 'Dornod', '061', 1),
(2211, 142, 'Dornogov', '063', 1),
(2212, 142, 'Govi-Sumber', '064', 1),
(2213, 142, 'Govi-Altay', '065', 1),
(2214, 142, 'Bulgan', '067', 1),
(2215, 142, 'Bayanhongor', '069', 1),
(2216, 142, 'Bayan-Olgiy', '071', 1),
(2217, 142, 'Arhangay', '073', 1),
(2218, 143, 'Saint Anthony', 'A', 1),
(2219, 143, 'Saint Georges', 'G', 1),
(2220, 143, 'Saint Peter', 'P', 1),
(2221, 144, 'Agadir', 'AGD', 1),
(2222, 144, 'Al Hoceima', 'HOC', 1),
(2223, 144, 'Azilal', 'AZI', 1),
(2224, 144, 'Beni Mellal', 'BME', 1),
(2225, 144, 'Ben Slimane', 'BSL', 1),
(2226, 144, 'Boulemane', 'BLM', 1),
(2227, 144, 'Casablanca', 'CBL', 1),
(2228, 144, 'Chaouen', 'CHA', 1),
(2229, 144, 'El Jadida', 'EJA', 1),
(2230, 144, 'El Kelaa des Sraghna', 'EKS', 1),
(2231, 144, 'Er Rachidia', 'ERA', 1),
(2232, 144, 'Essaouira', 'ESS', 1),
(2233, 144, 'Fes', 'FES', 1),
(2234, 144, 'Figuig', 'FIG', 1),
(2235, 144, 'Guelmim', 'GLM', 1),
(2236, 144, 'Ifrane', 'IFR', 1),
(2237, 144, 'Kenitra', 'KEN', 1),
(2238, 144, 'Khemisset', 'KHM', 1),
(2239, 144, 'Khenifra', 'KHN', 1),
(2240, 144, 'Khouribga', 'KHO', 1),
(2241, 144, 'Laayoune', 'LYN', 1),
(2242, 144, 'Larache', 'LAR', 1),
(2243, 144, 'Marrakech', 'MRK', 1),
(2244, 144, 'Meknes', 'MKN', 1),
(2245, 144, 'Nador', 'NAD', 1),
(2246, 144, 'Ouarzazate', 'ORZ', 1),
(2247, 144, 'Oujda', 'OUJ', 1),
(2248, 144, 'Rabat-Sale', 'RSA', 1),
(2249, 144, 'Safi', 'SAF', 1),
(2250, 144, 'Settat', 'SET', 1),
(2251, 144, 'Sidi Kacem', 'SKA', 1),
(2252, 144, 'Tangier', 'TGR', 1),
(2253, 144, 'Tan-Tan', 'TAN', 1),
(2254, 144, 'Taounate', 'TAO', 1),
(2255, 144, 'Taroudannt', 'TRD', 1),
(2256, 144, 'Tata', 'TAT', 1),
(2257, 144, 'Taza', 'TAZ', 1),
(2258, 144, 'Tetouan', 'TET', 1),
(2259, 144, 'Tiznit', 'TIZ', 1),
(2260, 144, 'Ad Dakhla', 'ADK', 1),
(2261, 144, 'Boujdour', 'BJD', 1),
(2262, 144, 'Es Smara', 'ESM', 1),
(2263, 145, 'Cabo Delgado', 'CD', 1),
(2264, 145, 'Gaza', 'GZ', 1),
(2265, 145, 'Inhambane', 'IN', 1),
(2266, 145, 'Manica', 'MN', 1),
(2267, 145, 'Maputo (city)', 'MC', 1),
(2268, 145, 'Maputo', 'MP', 1),
(2269, 145, 'Nampula', 'NA', 1),
(2270, 145, 'Niassa', 'NI', 1),
(2271, 145, 'Sofala', 'SO', 1),
(2272, 145, 'Tete', 'TE', 1),
(2273, 145, 'Zambezia', 'ZA', 1),
(2274, 146, 'Ayeyarwady', 'AY', 1),
(2275, 146, 'Bago', 'BG', 1),
(2276, 146, 'Magway', 'MG', 1),
(2277, 146, 'Mandalay', 'MD', 1),
(2278, 146, 'Sagaing', 'SG', 1),
(2279, 146, 'Tanintharyi', 'TN', 1),
(2280, 146, 'Yangon', 'YG', 1),
(2281, 146, 'Chin State', 'CH', 1),
(2282, 146, 'Kachin State', 'KC', 1),
(2283, 146, 'Kayah State', 'KH', 1),
(2284, 146, 'Kayin State', 'KN', 1),
(2285, 146, 'Mon State', 'MN', 1),
(2286, 146, 'Rakhine State', 'RK', 1),
(2287, 146, 'Shan State', 'SH', 1),
(2288, 147, 'Caprivi', 'CA', 1),
(2289, 147, 'Erongo', 'ER', 1),
(2290, 147, 'Hardap', 'HA', 1),
(2291, 147, 'Karas', 'KR', 1),
(2292, 147, 'Kavango', 'KV', 1),
(2293, 147, 'Khomas', 'KH', 1),
(2294, 147, 'Kunene', 'KU', 1),
(2295, 147, 'Ohangwena', 'OW', 1),
(2296, 147, 'Omaheke', 'OK', 1),
(2297, 147, 'Omusati', 'OT', 1),
(2298, 147, 'Oshana', 'ON', 1),
(2299, 147, 'Oshikoto', 'OO', 1),
(2300, 147, 'Otjozondjupa', 'OJ', 1),
(2301, 148, 'Aiwo', 'AO', 1),
(2302, 148, 'Anabar', 'AA', 1),
(2303, 148, 'Anetan', 'AT', 1),
(2304, 148, 'Anibare', 'AI', 1),
(2305, 148, 'Baiti', 'BA', 1),
(2306, 148, 'Boe', 'BO', 1),
(2307, 148, 'Buada', 'BU', 1),
(2308, 148, 'Denigomodu', 'DE', 1),
(2309, 148, 'Ewa', 'EW', 1),
(2310, 148, 'Ijuw', 'IJ', 1),
(2311, 148, 'Meneng', 'ME', 1),
(2312, 148, 'Nibok', 'NI', 1),
(2313, 148, 'Uaboe', 'UA', 1),
(2314, 148, 'Yaren', 'YA', 1),
(2315, 149, 'Bagmati', 'BA', 1),
(2316, 149, 'Bheri', 'BH', 1),
(2317, 149, 'Dhawalagiri', 'DH', 1),
(2318, 149, 'Gandaki', 'GA', 1),
(2319, 149, 'Janakpur', 'JA', 1),
(2320, 149, 'Karnali', 'KA', 1),
(2321, 149, 'Kosi', 'KO', 1),
(2322, 149, 'Lumbini', 'LU', 1),
(2323, 149, 'Mahakali', 'MA', 1),
(2324, 149, 'Mechi', 'ME', 1),
(2325, 149, 'Narayani', 'NA', 1),
(2326, 149, 'Rapti', 'RA', 1),
(2327, 149, 'Sagarmatha', 'SA', 1),
(2328, 149, 'Seti', 'SE', 1),
(2329, 150, 'Drenthe', 'DR', 1),
(2330, 150, 'Flevoland', 'FL', 1),
(2331, 150, 'Friesland', 'FR', 1),
(2332, 150, 'Gelderland', 'GE', 1),
(2333, 150, 'Groningen', 'GR', 1),
(2334, 150, 'Limburg', 'LI', 1),
(2335, 150, 'Noord-Brabant', 'NB', 1),
(2336, 150, 'Noord-Holland', 'NH', 1),
(2337, 150, 'Overijssel', 'OV', 1),
(2338, 150, 'Utrecht', 'UT', 1),
(2339, 150, 'Zeeland', 'ZE', 1),
(2340, 150, 'Zuid-Holland', 'ZH', 1),
(2341, 152, 'Iles Loyaute', 'L', 1),
(2342, 152, 'Nord', 'N', 1),
(2343, 152, 'Sud', 'S', 1),
(2344, 153, 'Auckland', 'AUK', 1),
(2345, 153, 'Bay of Plenty', 'BOP', 1),
(2346, 153, 'Canterbury', 'CAN', 1),
(2347, 153, 'Coromandel', 'COR', 1),
(2348, 153, 'Gisborne', 'GIS', 1),
(2349, 153, 'Fiordland', 'FIO', 1),
(2350, 153, 'Hawke\'s Bay', 'HKB', 1),
(2351, 153, 'Marlborough', 'MBH', 1),
(2352, 153, 'Manawatu-Wanganui', 'MWT', 1),
(2353, 153, 'Mt Cook-Mackenzie', 'MCM', 1),
(2354, 153, 'Nelson', 'NSN', 1),
(2355, 153, 'Northland', 'NTL', 1),
(2356, 153, 'Otago', 'OTA', 1),
(2357, 153, 'Southland', 'STL', 1),
(2358, 153, 'Taranaki', 'TKI', 1),
(2359, 153, 'Wellington', 'WGN', 1),
(2360, 153, 'Waikato', 'WKO', 1),
(2361, 153, 'Wairarapa', 'WAI', 1),
(2362, 153, 'West Coast', 'WTC', 1),
(2363, 154, 'Atlantico Norte', 'AN', 1),
(2364, 154, 'Atlantico Sur', 'AS', 1),
(2365, 154, 'Boaco', 'BO', 1),
(2366, 154, 'Carazo', 'CA', 1),
(2367, 154, 'Chinandega', 'CI', 1),
(2368, 154, 'Chontales', 'CO', 1),
(2369, 154, 'Esteli', 'ES', 1),
(2370, 154, 'Granada', 'GR', 1),
(2371, 154, 'Jinotega', 'JI', 1),
(2372, 154, 'Leon', 'LE', 1),
(2373, 154, 'Madriz', 'MD', 1),
(2374, 154, 'Managua', 'MN', 1),
(2375, 154, 'Masaya', 'MS', 1),
(2376, 154, 'Matagalpa', 'MT', 1),
(2377, 154, 'Nuevo Segovia', 'NS', 1),
(2378, 154, 'Rio San Juan', 'RS', 1),
(2379, 154, 'Rivas', 'RI', 1),
(2380, 155, 'Agadez', 'AG', 1),
(2381, 155, 'Diffa', 'DF', 1),
(2382, 155, 'Dosso', 'DS', 1),
(2383, 155, 'Maradi', 'MA', 1),
(2384, 155, 'Niamey', 'NM', 1),
(2385, 155, 'Tahoua', 'TH', 1),
(2386, 155, 'Tillaberi', 'TL', 1),
(2387, 155, 'Zinder', 'ZD', 1),
(2388, 156, 'Abia', 'AB', 1),
(2389, 156, 'Abuja Federal Capital Territory', 'CT', 1),
(2390, 156, 'Adamawa', 'AD', 1),
(2391, 156, 'Akwa Ibom', 'AK', 1),
(2392, 156, 'Anambra', 'AN', 1),
(2393, 156, 'Bauchi', 'BC', 1),
(2394, 156, 'Bayelsa', 'BY', 1),
(2395, 156, 'Benue', 'BN', 1),
(2396, 156, 'Borno', 'BO', 1),
(2397, 156, 'Cross River', 'CR', 1),
(2398, 156, 'Delta', 'DE', 1),
(2399, 156, 'Ebonyi', 'EB', 1),
(2400, 156, 'Edo', 'ED', 1),
(2401, 156, 'Ekiti', 'EK', 1),
(2402, 156, 'Enugu', 'EN', 1),
(2403, 156, 'Gombe', 'GO', 1),
(2404, 156, 'Imo', 'IM', 1),
(2405, 156, 'Jigawa', 'JI', 1),
(2406, 156, 'Kaduna', 'KD', 1),
(2407, 156, 'Kano', 'KN', 1),
(2408, 156, 'Katsina', 'KT', 1),
(2409, 156, 'Kebbi', 'KE', 1),
(2410, 156, 'Kogi', 'KO', 1),
(2411, 156, 'Kwara', 'KW', 1),
(2412, 156, 'Lagos', 'LA', 1),
(2413, 156, 'Nassarawa', 'NA', 1),
(2414, 156, 'Niger', 'NI', 1),
(2415, 156, 'Ogun', 'OG', 1),
(2416, 156, 'Ondo', 'ONG', 1),
(2417, 156, 'Osun', 'OS', 1),
(2418, 156, 'Oyo', 'OY', 1),
(2419, 156, 'Plateau', 'PL', 1),
(2420, 156, 'Rivers', 'RI', 1),
(2421, 156, 'Sokoto', 'SO', 1),
(2422, 156, 'Taraba', 'TA', 1),
(2423, 156, 'Yobe', 'YO', 1),
(2424, 156, 'Zamfara', 'ZA', 1),
(2425, 159, 'Northern Islands', 'N', 1),
(2426, 159, 'Rota', 'R', 1),
(2427, 159, 'Saipan', 'S', 1),
(2428, 159, 'Tinian', 'T', 1),
(2429, 160, 'Akershus', 'AK', 1),
(2430, 160, 'Aust-Agder', 'AA', 1),
(2431, 160, 'Buskerud', 'BU', 1),
(2432, 160, 'Finnmark', 'FM', 1),
(2433, 160, 'Hedmark', 'HM', 1),
(2434, 160, 'Hordaland', 'HL', 1),
(2435, 160, 'More og Romdal', 'MR', 1),
(2436, 160, 'Nord-Trondelag', 'NT', 1),
(2437, 160, 'Nordland', 'NL', 1),
(2438, 160, 'Ostfold', 'OF', 1),
(2439, 160, 'Oppland', 'OP', 1),
(2440, 160, 'Oslo', 'OL', 1),
(2441, 160, 'Rogaland', 'RL', 1),
(2442, 160, 'Sor-Trondelag', 'ST', 1),
(2443, 160, 'Sogn og Fjordane', 'SJ', 1),
(2444, 160, 'Svalbard', 'SV', 1),
(2445, 160, 'Telemark', 'TM', 1),
(2446, 160, 'Troms', 'TR', 1),
(2447, 160, 'Vest-Agder', 'VA', 1),
(2448, 160, 'Vestfold', 'VF', 1),
(2449, 161, 'Ad Dakhiliyah', 'DA', 1),
(2450, 161, 'Al Batinah', 'BA', 1),
(2451, 161, 'Al Wusta', 'WU', 1),
(2452, 161, 'Ash Sharqiyah', 'SH', 1),
(2453, 161, 'Az Zahirah', 'ZA', 1),
(2454, 161, 'Masqat', 'MA', 1),
(2455, 161, 'Musandam', 'MU', 1),
(2456, 161, 'Zufar', 'ZU', 1),
(2457, 162, 'Balochistan', 'B', 1),
(2458, 162, 'Federally Administered Tribal Areas', 'T', 1),
(2459, 162, 'Islamabad Capital Territory', 'I', 1),
(2460, 162, 'North-West Frontier', 'N', 1),
(2461, 162, 'Punjab', 'P', 1),
(2462, 162, 'Sindh', 'S', 1),
(2463, 163, 'Aimeliik', 'AM', 1),
(2464, 163, 'Airai', 'AR', 1),
(2465, 163, 'Angaur', 'AN', 1),
(2466, 163, 'Hatohobei', 'HA', 1),
(2467, 163, 'Kayangel', 'KA', 1),
(2468, 163, 'Koror', 'KO', 1),
(2469, 163, 'Melekeok', 'ME', 1),
(2470, 163, 'Ngaraard', 'NA', 1),
(2471, 163, 'Ngarchelong', 'NG', 1),
(2472, 163, 'Ngardmau', 'ND', 1),
(2473, 163, 'Ngatpang', 'NT', 1),
(2474, 163, 'Ngchesar', 'NC', 1),
(2475, 163, 'Ngeremlengui', 'NR', 1),
(2476, 163, 'Ngiwal', 'NW', 1),
(2477, 163, 'Peleliu', 'PE', 1),
(2478, 163, 'Sonsorol', 'SO', 1),
(2479, 164, 'Bocas del Toro', 'BT', 1),
(2480, 164, 'Chiriqui', 'CH', 1),
(2481, 164, 'Cocle', 'CC', 1),
(2482, 164, 'Colon', 'CL', 1),
(2483, 164, 'Darien', 'DA', 1),
(2484, 164, 'Herrera', 'HE', 1),
(2485, 164, 'Los Santos', 'LS', 1),
(2486, 164, 'Panama', 'PA', 1),
(2487, 164, 'San Blas', 'SB', 1),
(2488, 164, 'Veraguas', 'VG', 1),
(2489, 165, 'Bougainville', 'BV', 1),
(2490, 165, 'Central', 'CE', 1),
(2491, 165, 'Chimbu', 'CH', 1),
(2492, 165, 'Eastern Highlands', 'EH', 1),
(2493, 165, 'East New Britain', 'EB', 1),
(2494, 165, 'East Sepik', 'ES', 1),
(2495, 165, 'Enga', 'EN', 1),
(2496, 165, 'Gulf', 'GU', 1),
(2497, 165, 'Madang', 'MD', 1),
(2498, 165, 'Manus', 'MN', 1),
(2499, 165, 'Milne Bay', 'MB', 1),
(2500, 165, 'Morobe', 'MR', 1),
(2501, 165, 'National Capital', 'NC', 1),
(2502, 165, 'New Ireland', 'NI', 1),
(2503, 165, 'Northern', 'NO', 1),
(2504, 165, 'Sandaun', 'SA', 1),
(2505, 165, 'Southern Highlands', 'SH', 1),
(2506, 165, 'Western', 'WE', 1),
(2507, 165, 'Western Highlands', 'WH', 1),
(2508, 165, 'West New Britain', 'WB', 1),
(2509, 166, 'Alto Paraguay', 'AG', 1),
(2510, 166, 'Alto Parana', 'AN', 1),
(2511, 166, 'Amambay', 'AM', 1),
(2512, 166, 'Asuncion', 'AS', 1),
(2513, 166, 'Boqueron', 'BO', 1),
(2514, 166, 'Caaguazu', 'CG', 1),
(2515, 166, 'Caazapa', 'CZ', 1),
(2516, 166, 'Canindeyu', 'CN', 1),
(2517, 166, 'Central', 'CE', 1),
(2518, 166, 'Concepcion', 'CC', 1),
(2519, 166, 'Cordillera', 'CD', 1),
(2520, 166, 'Guaira', 'GU', 1),
(2521, 166, 'Itapua', 'IT', 1),
(2522, 166, 'Misiones', 'MI', 1),
(2523, 166, 'Neembucu', 'NE', 1),
(2524, 166, 'Paraguari', 'PA', 1),
(2525, 166, 'Presidente Hayes', 'PH', 1),
(2526, 166, 'San Pedro', 'SP', 1),
(2527, 167, 'Amazonas', 'AM', 1),
(2528, 167, 'Ancash', 'AN', 1),
(2529, 167, 'Apurimac', 'AP', 1),
(2530, 167, 'Arequipa', 'AR', 1),
(2531, 167, 'Ayacucho', 'AY', 1),
(2532, 167, 'Cajamarca', 'CJ', 1),
(2533, 167, 'Callao', 'CL', 1),
(2534, 167, 'Cusco', 'CU', 1),
(2535, 167, 'Huancavelica', 'HV', 1),
(2536, 167, 'Huanuco', 'HO', 1),
(2537, 167, 'Ica', 'IC', 1),
(2538, 167, 'Junin', 'JU', 1),
(2539, 167, 'La Libertad', 'LD', 1),
(2540, 167, 'Lambayeque', 'LY', 1),
(2541, 167, 'Lima', 'LI', 1),
(2542, 167, 'Loreto', 'LO', 1),
(2543, 167, 'Madre de Dios', 'MD', 1),
(2544, 167, 'Moquegua', 'MO', 1),
(2545, 167, 'Pasco', 'PA', 1),
(2546, 167, 'Piura', 'PI', 1),
(2547, 167, 'Puno', 'PU', 1),
(2548, 167, 'San Martin', 'SM', 1),
(2549, 167, 'Tacna', 'TA', 1),
(2550, 167, 'Tumbes', 'TU', 1),
(2551, 167, 'Ucayali', 'UC', 1),
(2552, 168, 'Abra', 'ABR', 1),
(2553, 168, 'Agusan del Norte', 'ANO', 1),
(2554, 168, 'Agusan del Sur', 'ASU', 1),
(2555, 168, 'Aklan', 'AKL', 1),
(2556, 168, 'Albay', 'ALB', 1),
(2557, 168, 'Antique', 'ANT', 1),
(2558, 168, 'Apayao', 'APY', 1),
(2559, 168, 'Aurora', 'AUR', 1),
(2560, 168, 'Basilan', 'BAS', 1),
(2561, 168, 'Bataan', 'BTA', 1),
(2562, 168, 'Batanes', 'BTE', 1),
(2563, 168, 'Batangas', 'BTG', 1),
(2564, 168, 'Biliran', 'BLR', 1),
(2565, 168, 'Benguet', 'BEN', 1),
(2566, 168, 'Bohol', 'BOL', 1),
(2567, 168, 'Bukidnon', 'BUK', 1),
(2568, 168, 'Bulacan', 'BUL', 1),
(2569, 168, 'Cagayan', 'CAG', 1),
(2570, 168, 'Camarines Norte', 'CNO', 1),
(2571, 168, 'Camarines Sur', 'CSU', 1),
(2572, 168, 'Camiguin', 'CAM', 1),
(2573, 168, 'Capiz', 'CAP', 1),
(2574, 168, 'Catanduanes', 'CAT', 1),
(2575, 168, 'Cavite', 'CAV', 1),
(2576, 168, 'Cebu', 'CEB', 1),
(2577, 168, 'Compostela', 'CMP', 1),
(2578, 168, 'Davao del Norte', 'DNO', 1),
(2579, 168, 'Davao del Sur', 'DSU', 1),
(2580, 168, 'Davao Oriental', 'DOR', 1),
(2581, 168, 'Eastern Samar', 'ESA', 1),
(2582, 168, 'Guimaras', 'GUI', 1),
(2583, 168, 'Ifugao', 'IFU', 1),
(2584, 168, 'Ilocos Norte', 'INO', 1),
(2585, 168, 'Ilocos Sur', 'ISU', 1),
(2586, 168, 'Iloilo', 'ILO', 1),
(2587, 168, 'Isabela', 'ISA', 1),
(2588, 168, 'Kalinga', 'KAL', 1),
(2589, 168, 'Laguna', 'LAG', 1),
(2590, 168, 'Lanao del Norte', 'LNO', 1),
(2591, 168, 'Lanao del Sur', 'LSU', 1),
(2592, 168, 'La Union', 'UNI', 1),
(2593, 168, 'Leyte', 'LEY', 1),
(2594, 168, 'Maguindanao', 'MAG', 1),
(2595, 168, 'Marinduque', 'MRN', 1),
(2596, 168, 'Masbate', 'MSB', 1),
(2597, 168, 'Mindoro Occidental', 'MIC', 1),
(2598, 168, 'Mindoro Oriental', 'MIR', 1),
(2599, 168, 'Misamis Occidental', 'MSC', 1),
(2600, 168, 'Misamis Oriental', 'MOR', 1),
(2601, 168, 'Mountain', 'MOP', 1),
(2602, 168, 'Negros Occidental', 'NOC', 1),
(2603, 168, 'Negros Oriental', 'NOR', 1),
(2604, 168, 'North Cotabato', 'NCT', 1),
(2605, 168, 'Northern Samar', 'NSM', 1),
(2606, 168, 'Nueva Ecija', 'NEC', 1),
(2607, 168, 'Nueva Vizcaya', 'NVZ', 1),
(2608, 168, 'Palawan', 'PLW', 1),
(2609, 168, 'Pampanga', 'PMP', 1),
(2610, 168, 'Pangasinan', 'PNG', 1),
(2611, 168, 'Quezon', 'QZN', 1),
(2612, 168, 'Quirino', 'QRN', 1),
(2613, 168, 'Rizal', 'RIZ', 1),
(2614, 168, 'Romblon', 'ROM', 1),
(2615, 168, 'Samar', 'SMR', 1),
(2616, 168, 'Sarangani', 'SRG', 1),
(2617, 168, 'Siquijor', 'SQJ', 1),
(2618, 168, 'Sorsogon', 'SRS', 1),
(2619, 168, 'South Cotabato', 'SCO', 1),
(2620, 168, 'Southern Leyte', 'SLE', 1),
(2621, 168, 'Sultan Kudarat', 'SKU', 1),
(2622, 168, 'Sulu', 'SLU', 1),
(2623, 168, 'Surigao del Norte', 'SNO', 1),
(2624, 168, 'Surigao del Sur', 'SSU', 1),
(2625, 168, 'Tarlac', 'TAR', 1),
(2626, 168, 'Tawi-Tawi', 'TAW', 1),
(2627, 168, 'Zambales', 'ZBL', 1),
(2628, 168, 'Zamboanga del Norte', 'ZNO', 1),
(2629, 168, 'Zamboanga del Sur', 'ZSU', 1),
(2630, 168, 'Zamboanga Sibugay', 'ZSI', 1),
(2631, 170, 'Dolnoslaskie', 'DO', 1),
(2632, 170, 'Kujawsko-Pomorskie', 'KP', 1),
(2633, 170, 'Lodzkie', 'LO', 1),
(2634, 170, 'Lubelskie', 'LL', 1),
(2635, 170, 'Lubuskie', 'LU', 1),
(2636, 170, 'Malopolskie', 'ML', 1),
(2637, 170, 'Mazowieckie', 'MZ', 1),
(2638, 170, 'Opolskie', 'OP', 1),
(2639, 170, 'Podkarpackie', 'PP', 1),
(2640, 170, 'Podlaskie', 'PL', 1),
(2641, 170, 'Pomorskie', 'PM', 1),
(2642, 170, 'Slaskie', 'SL', 1),
(2643, 170, 'Swietokrzyskie', 'SW', 1),
(2644, 170, 'Warminsko-Mazurskie', 'WM', 1),
(2645, 170, 'Wielkopolskie', 'WP', 1),
(2646, 170, 'Zachodniopomorskie', 'ZA', 1),
(2647, 198, 'Saint Pierre', 'P', 1),
(2648, 198, 'Miquelon', 'M', 1),
(2649, 171, 'A&ccedil;ores', 'AC', 1),
(2650, 171, 'Aveiro', 'AV', 1),
(2651, 171, 'Beja', 'BE', 1),
(2652, 171, 'Braga', 'BR', 1),
(2653, 171, 'Bragan&ccedil;a', 'BA', 1),
(2654, 171, 'Castelo Branco', 'CB', 1),
(2655, 171, 'Coimbra', 'CO', 1),
(2656, 171, '&Eacute;vora', 'EV', 1),
(2657, 171, 'Faro', 'FA', 1),
(2658, 171, 'Guarda', 'GU', 1),
(2659, 171, 'Leiria', 'LE', 1),
(2660, 171, 'Lisboa', 'LI', 1),
(2661, 171, 'Madeira', 'ME', 1),
(2662, 171, 'Portalegre', 'PO', 1),
(2663, 171, 'Porto', 'PR', 1),
(2664, 171, 'Santar&eacute;m', 'SA', 1),
(2665, 171, 'Set&uacute;bal', 'SE', 1),
(2666, 171, 'Viana do Castelo', 'VC', 1),
(2667, 171, 'Vila Real', 'VR', 1),
(2668, 171, 'Viseu', 'VI', 1),
(2669, 173, 'Ad Dawhah', 'DW', 1),
(2670, 173, 'Al Ghuwayriyah', 'GW', 1),
(2671, 173, 'Al Jumayliyah', 'JM', 1),
(2672, 173, 'Al Khawr', 'KR', 1),
(2673, 173, 'Al Wakrah', 'WK', 1),
(2674, 173, 'Ar Rayyan', 'RN', 1),
(2675, 173, 'Jarayan al Batinah', 'JB', 1),
(2676, 173, 'Madinat ash Shamal', 'MS', 1),
(2677, 173, 'Umm Sa\'id', 'UD', 1),
(2678, 173, 'Umm Salal', 'UL', 1),
(2679, 175, 'Alba', 'AB', 1),
(2680, 175, 'Arad', 'AR', 1),
(2681, 175, 'Arges', 'AG', 1),
(2682, 175, 'Bacau', 'BC', 1),
(2683, 175, 'Bihor', 'BH', 1),
(2684, 175, 'Bistrita-Nasaud', 'BN', 1),
(2685, 175, 'Botosani', 'BT', 1),
(2686, 175, 'Brasov', 'BV', 1),
(2687, 175, 'Braila', 'BR', 1),
(2688, 175, 'Bucuresti', 'B', 1),
(2689, 175, 'Buzau', 'BZ', 1),
(2690, 175, 'Caras-Severin', 'CS', 1),
(2691, 175, 'Calarasi', 'CL', 1),
(2692, 175, 'Cluj', 'CJ', 1),
(2693, 175, 'Constanta', 'CT', 1),
(2694, 175, 'Covasna', 'CV', 1),
(2695, 175, 'Dimbovita', 'DB', 1),
(2696, 175, 'Dolj', 'DJ', 1),
(2697, 175, 'Galati', 'GL', 1),
(2698, 175, 'Giurgiu', 'GR', 1),
(2699, 175, 'Gorj', 'GJ', 1),
(2700, 175, 'Harghita', 'HR', 1),
(2701, 175, 'Hunedoara', 'HD', 1),
(2702, 175, 'Ialomita', 'IL', 1),
(2703, 175, 'Iasi', 'IS', 1),
(2704, 175, 'Ilfov', 'IF', 1),
(2705, 175, 'Maramures', 'MM', 1),
(2706, 175, 'Mehedinti', 'MH', 1),
(2707, 175, 'Mures', 'MS', 1),
(2708, 175, 'Neamt', 'NT', 1),
(2709, 175, 'Olt', 'OT', 1),
(2710, 175, 'Prahova', 'PH', 1),
(2711, 175, 'Satu-Mare', 'SM', 1),
(2712, 175, 'Salaj', 'SJ', 1),
(2713, 175, 'Sibiu', 'SB', 1),
(2714, 175, 'Suceava', 'SV', 1),
(2715, 175, 'Teleorman', 'TR', 1),
(2716, 175, 'Timis', 'TM', 1),
(2717, 175, 'Tulcea', 'TL', 1),
(2718, 175, 'Vaslui', 'VS', 1),
(2719, 175, 'Valcea', 'VL', 1),
(2720, 175, 'Vrancea', 'VN', 1),
(2721, 176, 'Abakan', 'AB', 1),
(2722, 176, 'Aginskoye', 'AG', 1),
(2723, 176, 'Anadyr', 'AN', 1),
(2724, 176, 'Arkahangelsk', 'AR', 1),
(2725, 176, 'Astrakhan', 'AS', 1),
(2726, 176, 'Barnaul', 'BA', 1),
(2727, 176, 'Belgorod', 'BE', 1),
(2728, 176, 'Birobidzhan', 'BI', 1),
(2729, 176, 'Blagoveshchensk', 'BL', 1),
(2730, 176, 'Bryansk', 'BR', 1),
(2731, 176, 'Cheboksary', 'CH', 1),
(2732, 176, 'Chelyabinsk', 'CL', 1),
(2733, 176, 'Cherkessk', 'CR', 1),
(2734, 176, 'Chita', 'CI', 1),
(2735, 176, 'Dudinka', 'DU', 1),
(2736, 176, 'Elista', 'EL', 1),
(2738, 176, 'Gorno-Altaysk', 'GA', 1),
(2739, 176, 'Groznyy', 'GR', 1),
(2740, 176, 'Irkutsk', 'IR', 1),
(2741, 176, 'Ivanovo', 'IV', 1),
(2742, 176, 'Izhevsk', 'IZ', 1),
(2743, 176, 'Kalinigrad', 'KA', 1),
(2744, 176, 'Kaluga', 'KL', 1),
(2745, 176, 'Kasnodar', 'KS', 1),
(2746, 176, 'Kazan', 'KZ', 1),
(2747, 176, 'Kemerovo', 'KE', 1),
(2748, 176, 'Khabarovsk', 'KH', 1),
(2749, 176, 'Khanty-Mansiysk', 'KM', 1),
(2750, 176, 'Kostroma', 'KO', 1),
(2751, 176, 'Krasnodar', 'KR', 1),
(2752, 176, 'Krasnoyarsk', 'KN', 1),
(2753, 176, 'Kudymkar', 'KU', 1),
(2754, 176, 'Kurgan', 'KG', 1),
(2755, 176, 'Kursk', 'KK', 1),
(2756, 176, 'Kyzyl', 'KY', 1),
(2757, 176, 'Lipetsk', 'LI', 1),
(2758, 176, 'Magadan', 'MA', 1),
(2759, 176, 'Makhachkala', 'MK', 1),
(2760, 176, 'Maykop', 'MY', 1),
(2761, 176, 'Moscow', 'MO', 1),
(2762, 176, 'Murmansk', 'MU', 1),
(2763, 176, 'Nalchik', 'NA', 1),
(2764, 176, 'Naryan Mar', 'NR', 1),
(2765, 176, 'Nazran', 'NZ', 1),
(2766, 176, 'Nizhniy Novgorod', 'NI', 1),
(2767, 176, 'Novgorod', 'NO', 1),
(2768, 176, 'Novosibirsk', 'NV', 1),
(2769, 176, 'Omsk', 'OM', 1),
(2770, 176, 'Orel', 'OR', 1),
(2771, 176, 'Orenburg', 'OE', 1),
(2772, 176, 'Palana', 'PA', 1),
(2773, 176, 'Penza', 'PE', 1),
(2774, 176, 'Perm', 'PR', 1),
(2775, 176, 'Petropavlovsk-Kamchatskiy', 'PK', 1),
(2776, 176, 'Petrozavodsk', 'PT', 1),
(2777, 176, 'Pskov', 'PS', 1),
(2778, 176, 'Rostov-na-Donu', 'RO', 1),
(2779, 176, 'Ryazan', 'RY', 1),
(2780, 176, 'Salekhard', 'SL', 1),
(2781, 176, 'Samara', 'SA', 1),
(2782, 176, 'Saransk', 'SR', 1),
(2783, 176, 'Saratov', 'SV', 1),
(2784, 176, 'Smolensk', 'SM', 1),
(2785, 176, 'St. Petersburg', 'SP', 1),
(2786, 176, 'Stavropol', 'ST', 1),
(2787, 176, 'Syktyvkar', 'SY', 1),
(2788, 176, 'Tambov', 'TA', 1),
(2789, 176, 'Tomsk', 'TO', 1),
(2790, 176, 'Tula', 'TU', 1),
(2791, 176, 'Tura', 'TR', 1),
(2792, 176, 'Tver', 'TV', 1),
(2793, 176, 'Tyumen', 'TY', 1),
(2794, 176, 'Ufa', 'UF', 1),
(2795, 176, 'Ul\'yanovsk', 'UL', 1),
(2796, 176, 'Ulan-Ude', 'UU', 1),
(2797, 176, 'Ust\'-Ordynskiy', 'US', 1),
(2798, 176, 'Vladikavkaz', 'VL', 1),
(2799, 176, 'Vladimir', 'VA', 1),
(2800, 176, 'Vladivostok', 'VV', 1),
(2801, 176, 'Volgograd', 'VG', 1),
(2802, 176, 'Vologda', 'VD', 1),
(2803, 176, 'Voronezh', 'VO', 1),
(2804, 176, 'Vyatka', 'VY', 1),
(2805, 176, 'Yakutsk', 'YA', 1),
(2806, 176, 'Yaroslavl', 'YR', 1),
(2807, 176, 'Yekaterinburg', 'YE', 1),
(2808, 176, 'Yoshkar-Ola', 'YO', 1),
(2809, 177, 'Butare', 'BU', 1),
(2810, 177, 'Byumba', 'BY', 1),
(2811, 177, 'Cyangugu', 'CY', 1),
(2812, 177, 'Gikongoro', 'GK', 1),
(2813, 177, 'Gisenyi', 'GS', 1),
(2814, 177, 'Gitarama', 'GT', 1),
(2815, 177, 'Kibungo', 'KG', 1),
(2816, 177, 'Kibuye', 'KY', 1),
(2817, 177, 'Kigali Rurale', 'KR', 1),
(2818, 177, 'Kigali-ville', 'KV', 1),
(2819, 177, 'Ruhengeri', 'RU', 1),
(2820, 177, 'Umutara', 'UM', 1),
(2821, 178, 'Christ Church Nichola Town', 'CCN', 1),
(2822, 178, 'Saint Anne Sandy Point', 'SAS', 1),
(2823, 178, 'Saint George Basseterre', 'SGB', 1),
(2824, 178, 'Saint George Gingerland', 'SGG', 1),
(2825, 178, 'Saint James Windward', 'SJW', 1),
(2826, 178, 'Saint John Capesterre', 'SJC', 1),
(2827, 178, 'Saint John Figtree', 'SJF', 1),
(2828, 178, 'Saint Mary Cayon', 'SMC', 1),
(2829, 178, 'Saint Paul Capesterre', 'CAP', 1),
(2830, 178, 'Saint Paul Charlestown', 'CHA', 1),
(2831, 178, 'Saint Peter Basseterre', 'SPB', 1),
(2832, 178, 'Saint Thomas Lowland', 'STL', 1),
(2833, 178, 'Saint Thomas Middle Island', 'STM', 1),
(2834, 178, 'Trinity Palmetto Point', 'TPP', 1),
(2835, 179, 'Anse-la-Raye', 'AR', 1),
(2836, 179, 'Castries', 'CA', 1),
(2837, 179, 'Choiseul', 'CH', 1),
(2838, 179, 'Dauphin', 'DA', 1),
(2839, 179, 'Dennery', 'DE', 1),
(2840, 179, 'Gros-Islet', 'GI', 1),
(2841, 179, 'Laborie', 'LA', 1),
(2842, 179, 'Micoud', 'MI', 1),
(2843, 179, 'Praslin', 'PR', 1),
(2844, 179, 'Soufriere', 'SO', 1),
(2845, 179, 'Vieux-Fort', 'VF', 1),
(2846, 180, 'Charlotte', 'C', 1),
(2847, 180, 'Grenadines', 'R', 1),
(2848, 180, 'Saint Andrew', 'A', 1),
(2849, 180, 'Saint David', 'D', 1),
(2850, 180, 'Saint George', 'G', 1),
(2851, 180, 'Saint Patrick', 'P', 1),
(2852, 181, 'A\'ana', 'AN', 1),
(2853, 181, 'Aiga-i-le-Tai', 'AI', 1),
(2854, 181, 'Atua', 'AT', 1),
(2855, 181, 'Fa\'asaleleaga', 'FA', 1),
(2856, 181, 'Gaga\'emauga', 'GE', 1),
(2857, 181, 'Gagaifomauga', 'GF', 1),
(2858, 181, 'Palauli', 'PA', 1),
(2859, 181, 'Satupa\'itea', 'SA', 1),
(2860, 181, 'Tuamasaga', 'TU', 1),
(2861, 181, 'Va\'a-o-Fonoti', 'VF', 1),
(2862, 181, 'Vaisigano', 'VS', 1),
(2863, 182, 'Acquaviva', 'AC', 1),
(2864, 182, 'Borgo Maggiore', 'BM', 1),
(2865, 182, 'Chiesanuova', 'CH', 1),
(2866, 182, 'Domagnano', 'DO', 1),
(2867, 182, 'Faetano', 'FA', 1),
(2868, 182, 'Fiorentino', 'FI', 1),
(2869, 182, 'Montegiardino', 'MO', 1),
(2870, 182, 'Citta di San Marino', 'SM', 1),
(2871, 182, 'Serravalle', 'SE', 1),
(2872, 183, 'Sao Tome', 'S', 1),
(2873, 183, 'Principe', 'P', 1),
(2874, 184, 'Al Bahah', 'BH', 1),
(2875, 184, 'Al Hudud ash Shamaliyah', 'HS', 1),
(2876, 184, 'Al Jawf', 'JF', 1),
(2877, 184, 'Al Madinah', 'MD', 1),
(2878, 184, 'Al Qasim', 'QS', 1),
(2879, 184, 'Ar Riyad', 'RD', 1),
(2880, 184, 'Ash Sharqiyah (Eastern)', 'AQ', 1),
(2881, 184, '\'Asir', 'AS', 1),
(2882, 184, 'Ha\'il', 'HL', 1),
(2883, 184, 'Jizan', 'JZ', 1),
(2884, 184, 'Makkah', 'ML', 1),
(2885, 184, 'Najran', 'NR', 1),
(2886, 184, 'Tabuk', 'TB', 1),
(2887, 185, 'Dakar', 'DA', 1),
(2888, 185, 'Diourbel', 'DI', 1),
(2889, 185, 'Fatick', 'FA', 1),
(2890, 185, 'Kaolack', 'KA', 1),
(2891, 185, 'Kolda', 'KO', 1),
(2892, 185, 'Louga', 'LO', 1),
(2893, 185, 'Matam', 'MA', 1),
(2894, 185, 'Saint-Louis', 'SL', 1),
(2895, 185, 'Tambacounda', 'TA', 1),
(2896, 185, 'Thies', 'TH', 1),
(2897, 185, 'Ziguinchor', 'ZI', 1),
(2898, 186, 'Anse aux Pins', 'AP', 1),
(2899, 186, 'Anse Boileau', 'AB', 1),
(2900, 186, 'Anse Etoile', 'AE', 1),
(2901, 186, 'Anse Louis', 'AL', 1),
(2902, 186, 'Anse Royale', 'AR', 1),
(2903, 186, 'Baie Lazare', 'BL', 1),
(2904, 186, 'Baie Sainte Anne', 'BS', 1),
(2905, 186, 'Beau Vallon', 'BV', 1),
(2906, 186, 'Bel Air', 'BA', 1),
(2907, 186, 'Bel Ombre', 'BO', 1),
(2908, 186, 'Cascade', 'CA', 1),
(2909, 186, 'Glacis', 'GL', 1),
(2910, 186, 'Grand\' Anse (on Mahe)', 'GM', 1),
(2911, 186, 'Grand\' Anse (on Praslin)', 'GP', 1),
(2912, 186, 'La Digue', 'DG', 1),
(2913, 186, 'La Riviere Anglaise', 'RA', 1),
(2914, 186, 'Mont Buxton', 'MB', 1),
(2915, 186, 'Mont Fleuri', 'MF', 1),
(2916, 186, 'Plaisance', 'PL', 1),
(2917, 186, 'Pointe La Rue', 'PR', 1),
(2918, 186, 'Port Glaud', 'PG', 1),
(2919, 186, 'Saint Louis', 'SL', 1),
(2920, 186, 'Takamaka', 'TA', 1),
(2921, 187, 'Eastern', 'E', 1),
(2922, 187, 'Northern', 'N', 1),
(2923, 187, 'Southern', 'S', 1),
(2924, 187, 'Western', 'W', 1),
(2925, 189, 'Banskobystrický', 'BA', 1),
(2926, 189, 'Bratislavský', 'BR', 1),
(2927, 189, 'Košický', 'KO', 1),
(2928, 189, 'Nitriansky', 'NI', 1),
(2929, 189, 'Prešovský', 'PR', 1),
(2930, 189, 'Trenčiansky', 'TC', 1),
(2931, 189, 'Trnavský', 'TV', 1),
(2932, 189, 'Žilinský', 'ZI', 1),
(2933, 191, 'Central', 'CE', 1),
(2934, 191, 'Choiseul', 'CH', 1),
(2935, 191, 'Guadalcanal', 'GC', 1),
(2936, 191, 'Honiara', 'HO', 1),
(2937, 191, 'Isabel', 'IS', 1),
(2938, 191, 'Makira', 'MK', 1),
(2939, 191, 'Malaita', 'ML', 1),
(2940, 191, 'Rennell and Bellona', 'RB', 1),
(2941, 191, 'Temotu', 'TM', 1),
(2942, 191, 'Western', 'WE', 1),
(2943, 192, 'Awdal', 'AW', 1),
(2944, 192, 'Bakool', 'BK', 1),
(2945, 192, 'Banaadir', 'BN', 1),
(2946, 192, 'Bari', 'BR', 1),
(2947, 192, 'Bay', 'BY', 1),
(2948, 192, 'Galguduud', 'GA', 1),
(2949, 192, 'Gedo', 'GE', 1),
(2950, 192, 'Hiiraan', 'HI', 1),
(2951, 192, 'Jubbada Dhexe', 'JD', 1),
(2952, 192, 'Jubbada Hoose', 'JH', 1),
(2953, 192, 'Mudug', 'MU', 1),
(2954, 192, 'Nugaal', 'NU', 1),
(2955, 192, 'Sanaag', 'SA', 1),
(2956, 192, 'Shabeellaha Dhexe', 'SD', 1),
(2957, 192, 'Shabeellaha Hoose', 'SH', 1),
(2958, 192, 'Sool', 'SL', 1),
(2959, 192, 'Togdheer', 'TO', 1),
(2960, 192, 'Woqooyi Galbeed', 'WG', 1),
(2961, 193, 'Eastern Cape', 'EC', 1),
(2962, 193, 'Free State', 'FS', 1),
(2963, 193, 'Gauteng', 'GT', 1),
(2964, 193, 'KwaZulu-Natal', 'KN', 1),
(2965, 193, 'Limpopo', 'LP', 1),
(2966, 193, 'Mpumalanga', 'MP', 1),
(2967, 193, 'North West', 'NW', 1),
(2968, 193, 'Northern Cape', 'NC', 1),
(2969, 193, 'Western Cape', 'WC', 1),
(2970, 195, 'La Coru&ntilde;a', 'CA', 1),
(2971, 195, '&Aacute;lava', 'AL', 1),
(2972, 195, 'Albacete', 'AB', 1),
(2973, 195, 'Alicante', 'AC', 1),
(2974, 195, 'Almeria', 'AM', 1),
(2975, 195, 'Asturias', 'AS', 1),
(2976, 195, '&Aacute;vila', 'AV', 1),
(2977, 195, 'Badajoz', 'BJ', 1),
(2978, 195, 'Baleares', 'IB', 1),
(2979, 195, 'Barcelona', 'BA', 1),
(2980, 195, 'Burgos', 'BU', 1),
(2981, 195, 'C&aacute;ceres', 'CC', 1),
(2982, 195, 'C&aacute;diz', 'CZ', 1),
(2983, 195, 'Cantabria', 'CT', 1),
(2984, 195, 'Castell&oacute;n', 'CL', 1),
(2985, 195, 'Ceuta', 'CE', 1),
(2986, 195, 'Ciudad Real', 'CR', 1),
(2987, 195, 'C&oacute;rdoba', 'CD', 1),
(2988, 195, 'Cuenca', 'CU', 1),
(2989, 195, 'Girona', 'GI', 1),
(2990, 195, 'Granada', 'GD', 1),
(2991, 195, 'Guadalajara', 'GJ', 1),
(2992, 195, 'Guip&uacute;zcoa', 'GP', 1),
(2993, 195, 'Huelva', 'HL', 1),
(2994, 195, 'Huesca', 'HS', 1),
(2995, 195, 'Ja&eacute;n', 'JN', 1),
(2996, 195, 'La Rioja', 'RJ', 1),
(2997, 195, 'Las Palmas', 'PM', 1),
(2998, 195, 'Leon', 'LE', 1),
(2999, 195, 'Lleida', 'LL', 1),
(3000, 195, 'Lugo', 'LG', 1),
(3001, 195, 'Madrid', 'MD', 1),
(3002, 195, 'Malaga', 'MA', 1),
(3003, 195, 'Melilla', 'ML', 1),
(3004, 195, 'Murcia', 'MU', 1),
(3005, 195, 'Navarra', 'NV', 1),
(3006, 195, 'Ourense', 'OU', 1),
(3007, 195, 'Palencia', 'PL', 1),
(3008, 195, 'Pontevedra', 'PO', 1),
(3009, 195, 'Salamanca', 'SL', 1),
(3010, 195, 'Santa Cruz de Tenerife', 'SC', 1),
(3011, 195, 'Segovia', 'SG', 1),
(3012, 195, 'Sevilla', 'SV', 1),
(3013, 195, 'Soria', 'SO', 1),
(3014, 195, 'Tarragona', 'TA', 1),
(3015, 195, 'Teruel', 'TE', 1),
(3016, 195, 'Toledo', 'TO', 1),
(3017, 195, 'Valencia', 'VC', 1),
(3018, 195, 'Valladolid', 'VD', 1),
(3019, 195, 'Vizcaya', 'VZ', 1),
(3020, 195, 'Zamora', 'ZM', 1),
(3021, 195, 'Zaragoza', 'ZR', 1),
(3022, 196, 'Central', 'CE', 1),
(3023, 196, 'Eastern', 'EA', 1),
(3024, 196, 'North Central', 'NC', 1),
(3025, 196, 'Northern', 'NO', 1),
(3026, 196, 'North Western', 'NW', 1),
(3027, 196, 'Sabaragamuwa', 'SA', 1),
(3028, 196, 'Southern', 'SO', 1),
(3029, 196, 'Uva', 'UV', 1),
(3030, 196, 'Western', 'WE', 1),
(3032, 197, 'Saint Helena', 'S', 1),
(3034, 199, 'A\'ali an Nil', 'ANL', 1),
(3035, 199, 'Al Bahr al Ahmar', 'BAM', 1),
(3036, 199, 'Al Buhayrat', 'BRT', 1),
(3037, 199, 'Al Jazirah', 'JZR', 1),
(3038, 199, 'Al Khartum', 'KRT', 1),
(3039, 199, 'Al Qadarif', 'QDR', 1),
(3040, 199, 'Al Wahdah', 'WDH', 1),
(3041, 199, 'An Nil al Abyad', 'ANB', 1),
(3042, 199, 'An Nil al Azraq', 'ANZ', 1),
(3043, 199, 'Ash Shamaliyah', 'ASH', 1),
(3044, 199, 'Bahr al Jabal', 'BJA', 1),
(3045, 199, 'Gharb al Istiwa\'iyah', 'GIS', 1),
(3046, 199, 'Gharb Bahr al Ghazal', 'GBG', 1),
(3047, 199, 'Gharb Darfur', 'GDA', 1),
(3048, 199, 'Gharb Kurdufan', 'GKU', 1),
(3049, 199, 'Janub Darfur', 'JDA', 1),
(3050, 199, 'Janub Kurdufan', 'JKU', 1),
(3051, 199, 'Junqali', 'JQL', 1),
(3052, 199, 'Kassala', 'KSL', 1),
(3053, 199, 'Nahr an Nil', 'NNL', 1),
(3054, 199, 'Shamal Bahr al Ghazal', 'SBG', 1),
(3055, 199, 'Shamal Darfur', 'SDA', 1),
(3056, 199, 'Shamal Kurdufan', 'SKU', 1),
(3057, 199, 'Sharq al Istiwa\'iyah', 'SIS', 1),
(3058, 199, 'Sinnar', 'SNR', 1),
(3059, 199, 'Warab', 'WRB', 1),
(3060, 200, 'Brokopondo', 'BR', 1),
(3061, 200, 'Commewijne', 'CM', 1),
(3062, 200, 'Coronie', 'CR', 1),
(3063, 200, 'Marowijne', 'MA', 1),
(3064, 200, 'Nickerie', 'NI', 1),
(3065, 200, 'Para', 'PA', 1),
(3066, 200, 'Paramaribo', 'PM', 1),
(3067, 200, 'Saramacca', 'SA', 1),
(3068, 200, 'Sipaliwini', 'SI', 1),
(3069, 200, 'Wanica', 'WA', 1),
(3070, 202, 'Hhohho', 'H', 1),
(3071, 202, 'Lubombo', 'L', 1),
(3072, 202, 'Manzini', 'M', 1),
(3073, 202, 'Shishelweni', 'S', 1),
(3074, 203, 'Blekinge', 'K', 1),
(3075, 203, 'Dalarna', 'W', 1),
(3076, 203, 'Gävleborg', 'X', 1),
(3077, 203, 'Gotland', 'I', 1),
(3078, 203, 'Halland', 'N', 1),
(3079, 203, 'Jämtland', 'Z', 1),
(3080, 203, 'Jönköping', 'F', 1),
(3081, 203, 'Kalmar', 'H', 1),
(3082, 203, 'Kronoberg', 'G', 1),
(3083, 203, 'Norrbotten', 'BD', 1),
(3084, 203, 'Örebro', 'T', 1),
(3085, 203, 'Östergötland', 'E', 1),
(3086, 203, 'Sk&aring;ne', 'M', 1),
(3087, 203, 'Södermanland', 'D', 1),
(3088, 203, 'Stockholm', 'AB', 1),
(3089, 203, 'Uppsala', 'C', 1),
(3090, 203, 'Värmland', 'S', 1),
(3091, 203, 'Västerbotten', 'AC', 1),
(3092, 203, 'Västernorrland', 'Y', 1),
(3093, 203, 'Västmanland', 'U', 1),
(3094, 203, 'Västra Götaland', 'O', 1),
(3095, 204, 'Aargau', 'AG', 1),
(3096, 204, 'Appenzell Ausserrhoden', 'AR', 1),
(3097, 204, 'Appenzell Innerrhoden', 'AI', 1),
(3098, 204, 'Basel-Stadt', 'BS', 1),
(3099, 204, 'Basel-Landschaft', 'BL', 1),
(3100, 204, 'Bern', 'BE', 1),
(3101, 204, 'Fribourg', 'FR', 1),
(3102, 204, 'Gen&egrave;ve', 'GE', 1),
(3103, 204, 'Glarus', 'GL', 1),
(3104, 204, 'Graubünden', 'GR', 1),
(3105, 204, 'Jura', 'JU', 1),
(3106, 204, 'Luzern', 'LU', 1),
(3107, 204, 'Neuch&acirc;tel', 'NE', 1),
(3108, 204, 'Nidwald', 'NW', 1),
(3109, 204, 'Obwald', 'OW', 1),
(3110, 204, 'St. Gallen', 'SG', 1),
(3111, 204, 'Schaffhausen', 'SH', 1),
(3112, 204, 'Schwyz', 'SZ', 1),
(3113, 204, 'Solothurn', 'SO', 1),
(3114, 204, 'Thurgau', 'TG', 1),
(3115, 204, 'Ticino', 'TI', 1),
(3116, 204, 'Uri', 'UR', 1),
(3117, 204, 'Valais', 'VS', 1),
(3118, 204, 'Vaud', 'VD', 1),
(3119, 204, 'Zug', 'ZG', 1),
(3120, 204, 'Zürich', 'ZH', 1),
(3121, 205, 'Al Hasakah', 'HA', 1),
(3122, 205, 'Al Ladhiqiyah', 'LA', 1),
(3123, 205, 'Al Qunaytirah', 'QU', 1),
(3124, 205, 'Ar Raqqah', 'RQ', 1),
(3125, 205, 'As Suwayda', 'SU', 1),
(3126, 205, 'Dara', 'DA', 1),
(3127, 205, 'Dayr az Zawr', 'DZ', 1),
(3128, 205, 'Dimashq', 'DI', 1),
(3129, 205, 'Halab', 'HL', 1),
(3130, 205, 'Hamah', 'HM', 1),
(3131, 205, 'Hims', 'HI', 1),
(3132, 205, 'Idlib', 'ID', 1),
(3133, 205, 'Rif Dimashq', 'RD', 1),
(3134, 205, 'Tartus', 'TA', 1),
(3135, 206, 'Chang-hua', 'CH', 1),
(3136, 206, 'Chia-i', 'CI', 1);
INSERT INTO `oc_zone` (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES
(3137, 206, 'Hsin-chu', 'HS', 1),
(3138, 206, 'Hua-lien', 'HL', 1),
(3139, 206, 'I-lan', 'IL', 1),
(3140, 206, 'Kao-hsiung county', 'KH', 1),
(3141, 206, 'Kin-men', 'KM', 1),
(3142, 206, 'Lien-chiang', 'LC', 1),
(3143, 206, 'Miao-li', 'ML', 1),
(3144, 206, 'Nan-t\'ou', 'NT', 1),
(3145, 206, 'P\'eng-hu', 'PH', 1),
(3146, 206, 'P\'ing-tung', 'PT', 1),
(3147, 206, 'T\'ai-chung', 'TG', 1),
(3148, 206, 'T\'ai-nan', 'TA', 1),
(3149, 206, 'T\'ai-pei county', 'TP', 1),
(3150, 206, 'T\'ai-tung', 'TT', 1),
(3151, 206, 'T\'ao-yuan', 'TY', 1),
(3152, 206, 'Yun-lin', 'YL', 1),
(3153, 206, 'Chia-i city', 'CC', 1),
(3154, 206, 'Chi-lung', 'CL', 1),
(3155, 206, 'Hsin-chu', 'HC', 1),
(3156, 206, 'T\'ai-chung', 'TH', 1),
(3157, 206, 'T\'ai-nan', 'TN', 1),
(3158, 206, 'Kao-hsiung city', 'KC', 1),
(3159, 206, 'T\'ai-pei city', 'TC', 1),
(3160, 207, 'Gorno-Badakhstan', 'GB', 1),
(3161, 207, 'Khatlon', 'KT', 1),
(3162, 207, 'Sughd', 'SU', 1),
(3163, 208, 'Arusha', 'AR', 1),
(3164, 208, 'Dar es Salaam', 'DS', 1),
(3165, 208, 'Dodoma', 'DO', 1),
(3166, 208, 'Iringa', 'IR', 1),
(3167, 208, 'Kagera', 'KA', 1),
(3168, 208, 'Kigoma', 'KI', 1),
(3169, 208, 'Kilimanjaro', 'KJ', 1),
(3170, 208, 'Lindi', 'LN', 1),
(3171, 208, 'Manyara', 'MY', 1),
(3172, 208, 'Mara', 'MR', 1),
(3173, 208, 'Mbeya', 'MB', 1),
(3174, 208, 'Morogoro', 'MO', 1),
(3175, 208, 'Mtwara', 'MT', 1),
(3176, 208, 'Mwanza', 'MW', 1),
(3177, 208, 'Pemba North', 'PN', 1),
(3178, 208, 'Pemba South', 'PS', 1),
(3179, 208, 'Pwani', 'PW', 1),
(3180, 208, 'Rukwa', 'RK', 1),
(3181, 208, 'Ruvuma', 'RV', 1),
(3182, 208, 'Shinyanga', 'SH', 1),
(3183, 208, 'Singida', 'SI', 1),
(3184, 208, 'Tabora', 'TB', 1),
(3185, 208, 'Tanga', 'TN', 1),
(3186, 208, 'Zanzibar Central/South', 'ZC', 1),
(3187, 208, 'Zanzibar North', 'ZN', 1),
(3188, 208, 'Zanzibar Urban/West', 'ZU', 1),
(3189, 209, 'Amnat Charoen', 'Amnat Charoen', 1),
(3190, 209, 'Ang Thong', 'Ang Thong', 1),
(3191, 209, 'Ayutthaya', 'Ayutthaya', 1),
(3192, 209, 'Bangkok', 'Bangkok', 1),
(3193, 209, 'Buriram', 'Buriram', 1),
(3194, 209, 'Chachoengsao', 'Chachoengsao', 1),
(3195, 209, 'Chai Nat', 'Chai Nat', 1),
(3196, 209, 'Chaiyaphum', 'Chaiyaphum', 1),
(3197, 209, 'Chanthaburi', 'Chanthaburi', 1),
(3198, 209, 'Chiang Mai', 'Chiang Mai', 1),
(3199, 209, 'Chiang Rai', 'Chiang Rai', 1),
(3200, 209, 'Chon Buri', 'Chon Buri', 1),
(3201, 209, 'Chumphon', 'Chumphon', 1),
(3202, 209, 'Kalasin', 'Kalasin', 1),
(3203, 209, 'Kamphaeng Phet', 'Kamphaeng Phet', 1),
(3204, 209, 'Kanchanaburi', 'Kanchanaburi', 1),
(3205, 209, 'Khon Kaen', 'Khon Kaen', 1),
(3206, 209, 'Krabi', 'Krabi', 1),
(3207, 209, 'Lampang', 'Lampang', 1),
(3208, 209, 'Lamphun', 'Lamphun', 1),
(3209, 209, 'Loei', 'Loei', 1),
(3210, 209, 'Lop Buri', 'Lop Buri', 1),
(3211, 209, 'Mae Hong Son', 'Mae Hong Son', 1),
(3212, 209, 'Maha Sarakham', 'Maha Sarakham', 1),
(3213, 209, 'Mukdahan', 'Mukdahan', 1),
(3214, 209, 'Nakhon Nayok', 'Nakhon Nayok', 1),
(3215, 209, 'Nakhon Pathom', 'Nakhon Pathom', 1),
(3216, 209, 'Nakhon Phanom', 'Nakhon Phanom', 1),
(3217, 209, 'Nakhon Ratchasima', 'Nakhon Ratchasima', 1),
(3218, 209, 'Nakhon Sawan', 'Nakhon Sawan', 1),
(3219, 209, 'Nakhon Si Thammarat', 'Nakhon Si Thammarat', 1),
(3220, 209, 'Nan', 'Nan', 1),
(3221, 209, 'Narathiwat', 'Narathiwat', 1),
(3222, 209, 'Nong Bua Lamphu', 'Nong Bua Lamphu', 1),
(3223, 209, 'Nong Khai', 'Nong Khai', 1),
(3224, 209, 'Nonthaburi', 'Nonthaburi', 1),
(3225, 209, 'Pathum Thani', 'Pathum Thani', 1),
(3226, 209, 'Pattani', 'Pattani', 1),
(3227, 209, 'Phangnga', 'Phangnga', 1),
(3228, 209, 'Phatthalung', 'Phatthalung', 1),
(3229, 209, 'Phayao', 'Phayao', 1),
(3230, 209, 'Phetchabun', 'Phetchabun', 1),
(3231, 209, 'Phetchaburi', 'Phetchaburi', 1),
(3232, 209, 'Phichit', 'Phichit', 1),
(3233, 209, 'Phitsanulok', 'Phitsanulok', 1),
(3234, 209, 'Phrae', 'Phrae', 1),
(3235, 209, 'Phuket', 'Phuket', 1),
(3236, 209, 'Prachin Buri', 'Prachin Buri', 1),
(3237, 209, 'Prachuap Khiri Khan', 'Prachuap Khiri Khan', 1),
(3238, 209, 'Ranong', 'Ranong', 1),
(3239, 209, 'Ratchaburi', 'Ratchaburi', 1),
(3240, 209, 'Rayong', 'Rayong', 1),
(3241, 209, 'Roi Et', 'Roi Et', 1),
(3242, 209, 'Sa Kaeo', 'Sa Kaeo', 1),
(3243, 209, 'Sakon Nakhon', 'Sakon Nakhon', 1),
(3244, 209, 'Samut Prakan', 'Samut Prakan', 1),
(3245, 209, 'Samut Sakhon', 'Samut Sakhon', 1),
(3246, 209, 'Samut Songkhram', 'Samut Songkhram', 1),
(3247, 209, 'Sara Buri', 'Sara Buri', 1),
(3248, 209, 'Satun', 'Satun', 1),
(3249, 209, 'Sing Buri', 'Sing Buri', 1),
(3250, 209, 'Sisaket', 'Sisaket', 1),
(3251, 209, 'Songkhla', 'Songkhla', 1),
(3252, 209, 'Sukhothai', 'Sukhothai', 1),
(3253, 209, 'Suphan Buri', 'Suphan Buri', 1),
(3254, 209, 'Surat Thani', 'Surat Thani', 1),
(3255, 209, 'Surin', 'Surin', 1),
(3256, 209, 'Tak', 'Tak', 1),
(3257, 209, 'Trang', 'Trang', 1),
(3258, 209, 'Trat', 'Trat', 1),
(3259, 209, 'Ubon Ratchathani', 'Ubon Ratchathani', 1),
(3260, 209, 'Udon Thani', 'Udon Thani', 1),
(3261, 209, 'Uthai Thani', 'Uthai Thani', 1),
(3262, 209, 'Uttaradit', 'Uttaradit', 1),
(3263, 209, 'Yala', 'Yala', 1),
(3264, 209, 'Yasothon', 'Yasothon', 1),
(3265, 210, 'Kara', 'K', 1),
(3266, 210, 'Plateaux', 'P', 1),
(3267, 210, 'Savanes', 'S', 1),
(3268, 210, 'Centrale', 'C', 1),
(3269, 210, 'Maritime', 'M', 1),
(3270, 211, 'Atafu', 'A', 1),
(3271, 211, 'Fakaofo', 'F', 1),
(3272, 211, 'Nukunonu', 'N', 1),
(3273, 212, 'Ha\'apai', 'H', 1),
(3274, 212, 'Tongatapu', 'T', 1),
(3275, 212, 'Vava\'u', 'V', 1),
(3276, 213, 'Couva/Tabaquite/Talparo', 'CT', 1),
(3277, 213, 'Diego Martin', 'DM', 1),
(3278, 213, 'Mayaro/Rio Claro', 'MR', 1),
(3279, 213, 'Penal/Debe', 'PD', 1),
(3280, 213, 'Princes Town', 'PT', 1),
(3281, 213, 'Sangre Grande', 'SG', 1),
(3282, 213, 'San Juan/Laventille', 'SL', 1),
(3283, 213, 'Siparia', 'SI', 1),
(3284, 213, 'Tunapuna/Piarco', 'TP', 1),
(3285, 213, 'Port of Spain', 'PS', 1),
(3286, 213, 'San Fernando', 'SF', 1),
(3287, 213, 'Arima', 'AR', 1),
(3288, 213, 'Point Fortin', 'PF', 1),
(3289, 213, 'Chaguanas', 'CH', 1),
(3290, 213, 'Tobago', 'TO', 1),
(3291, 214, 'Ariana', 'AR', 1),
(3292, 214, 'Beja', 'BJ', 1),
(3293, 214, 'Ben Arous', 'BA', 1),
(3294, 214, 'Bizerte', 'BI', 1),
(3295, 214, 'Gabes', 'GB', 1),
(3296, 214, 'Gafsa', 'GF', 1),
(3297, 214, 'Jendouba', 'JE', 1),
(3298, 214, 'Kairouan', 'KR', 1),
(3299, 214, 'Kasserine', 'KS', 1),
(3300, 214, 'Kebili', 'KB', 1),
(3301, 214, 'Kef', 'KF', 1),
(3302, 214, 'Mahdia', 'MH', 1),
(3303, 214, 'Manouba', 'MN', 1),
(3304, 214, 'Medenine', 'ME', 1),
(3305, 214, 'Monastir', 'MO', 1),
(3306, 214, 'Nabeul', 'NA', 1),
(3307, 214, 'Sfax', 'SF', 1),
(3308, 214, 'Sidi', 'SD', 1),
(3309, 214, 'Siliana', 'SL', 1),
(3310, 214, 'Sousse', 'SO', 1),
(3311, 214, 'Tataouine', 'TA', 1),
(3312, 214, 'Tozeur', 'TO', 1),
(3313, 214, 'Tunis', 'TU', 1),
(3314, 214, 'Zaghouan', 'ZA', 1),
(3315, 215, 'Adana', 'ADA', 1),
(3316, 215, 'Adıyaman', 'ADI', 1),
(3317, 215, 'Afyonkarahisar', 'AFY', 1),
(3318, 215, 'Ağrı', 'AGR', 1),
(3319, 215, 'Aksaray', 'AKS', 1),
(3320, 215, 'Amasya', 'AMA', 1),
(3321, 215, 'Ankara', 'ANK', 1),
(3322, 215, 'Antalya', 'ANT', 1),
(3323, 215, 'Ardahan', 'ARD', 1),
(3324, 215, 'Artvin', 'ART', 1),
(3325, 215, 'Aydın', 'AYI', 1),
(3326, 215, 'Balıkesir', 'BAL', 1),
(3327, 215, 'Bartın', 'BAR', 1),
(3328, 215, 'Batman', 'BAT', 1),
(3329, 215, 'Bayburt', 'BAY', 1),
(3330, 215, 'Bilecik', 'BIL', 1),
(3331, 215, 'Bingöl', 'BIN', 1),
(3332, 215, 'Bitlis', 'BIT', 1),
(3333, 215, 'Bolu', 'BOL', 1),
(3334, 215, 'Burdur', 'BRD', 1),
(3335, 215, 'Bursa', 'BRS', 1),
(3336, 215, 'Çanakkale', 'CKL', 1),
(3337, 215, 'Çankırı', 'CKR', 1),
(3338, 215, 'Çorum', 'COR', 1),
(3339, 215, 'Denizli', 'DEN', 1),
(3340, 215, 'Diyarbakır', 'DIY', 1),
(3341, 215, 'Düzce', 'DUZ', 1),
(3342, 215, 'Edirne', 'EDI', 1),
(3343, 215, 'Elazığ', 'ELA', 1),
(3344, 215, 'Erzincan', 'EZC', 1),
(3345, 215, 'Erzurum', 'EZR', 1),
(3346, 215, 'Eskişehir', 'ESK', 1),
(3347, 215, 'Gaziantep', 'GAZ', 1),
(3348, 215, 'Giresun', 'GIR', 1),
(3349, 215, 'Gümüşhane', 'GMS', 1),
(3350, 215, 'Hakkari', 'HKR', 1),
(3351, 215, 'Hatay', 'HTY', 1),
(3352, 215, 'Iğdır', 'IGD', 1),
(3353, 215, 'Isparta', 'ISP', 1),
(3354, 215, 'İstanbul', 'IST', 1),
(3355, 215, 'İzmir', 'IZM', 1),
(3356, 215, 'Kahramanmaraş', 'KAH', 1),
(3357, 215, 'Karabük', 'KRB', 1),
(3358, 215, 'Karaman', 'KRM', 1),
(3359, 215, 'Kars', 'KRS', 1),
(3360, 215, 'Kastamonu', 'KAS', 1),
(3361, 215, 'Kayseri', 'KAY', 1),
(3362, 215, 'Kilis', 'KLS', 1),
(3363, 215, 'Kırıkkale', 'KRK', 1),
(3364, 215, 'Kırklareli', 'KLR', 1),
(3365, 215, 'Kırşehir', 'KRH', 1),
(3366, 215, 'Kocaeli', 'KOC', 1),
(3367, 215, 'Konya', 'KON', 1),
(3368, 215, 'Kütahya', 'KUT', 1),
(3369, 215, 'Malatya', 'MAL', 1),
(3370, 215, 'Manisa', 'MAN', 1),
(3371, 215, 'Mardin', 'MAR', 1),
(3372, 215, 'Mersin', 'MER', 1),
(3373, 215, 'Muğla', 'MUG', 1),
(3374, 215, 'Muş', 'MUS', 1),
(3375, 215, 'Nevşehir', 'NEV', 1),
(3376, 215, 'Niğde', 'NIG', 1),
(3377, 215, 'Ordu', 'ORD', 1),
(3378, 215, 'Osmaniye', 'OSM', 1),
(3379, 215, 'Rize', 'RIZ', 1),
(3380, 215, 'Sakarya', 'SAK', 1),
(3381, 215, 'Samsun', 'SAM', 1),
(3382, 215, 'Şanlıurfa', 'SAN', 1),
(3383, 215, 'Siirt', 'SII', 1),
(3384, 215, 'Sinop', 'SIN', 1),
(3385, 215, 'Şırnak', 'SIR', 1),
(3386, 215, 'Sivas', 'SIV', 1),
(3387, 215, 'Tekirdağ', 'TEL', 1),
(3388, 215, 'Tokat', 'TOK', 1),
(3389, 215, 'Trabzon', 'TRA', 1),
(3390, 215, 'Tunceli', 'TUN', 1),
(3391, 215, 'Uşak', 'USK', 1),
(3392, 215, 'Van', 'VAN', 1),
(3393, 215, 'Yalova', 'YAL', 1),
(3394, 215, 'Yozgat', 'YOZ', 1),
(3395, 215, 'Zonguldak', 'ZON', 1),
(3396, 216, 'Ahal Welayaty', 'A', 1),
(3397, 216, 'Balkan Welayaty', 'B', 1),
(3398, 216, 'Dashhowuz Welayaty', 'D', 1),
(3399, 216, 'Lebap Welayaty', 'L', 1),
(3400, 216, 'Mary Welayaty', 'M', 1),
(3401, 217, 'Ambergris Cays', 'AC', 1),
(3402, 217, 'Dellis Cay', 'DC', 1),
(3403, 217, 'French Cay', 'FC', 1),
(3404, 217, 'Little Water Cay', 'LW', 1),
(3405, 217, 'Parrot Cay', 'RC', 1),
(3406, 217, 'Pine Cay', 'PN', 1),
(3407, 217, 'Salt Cay', 'SL', 1),
(3408, 217, 'Grand Turk', 'GT', 1),
(3409, 217, 'South Caicos', 'SC', 1),
(3410, 217, 'East Caicos', 'EC', 1),
(3411, 217, 'Middle Caicos', 'MC', 1),
(3412, 217, 'North Caicos', 'NC', 1),
(3413, 217, 'Providenciales', 'PR', 1),
(3414, 217, 'West Caicos', 'WC', 1),
(3415, 218, 'Nanumanga', 'NMG', 1),
(3416, 218, 'Niulakita', 'NLK', 1),
(3417, 218, 'Niutao', 'NTO', 1),
(3418, 218, 'Funafuti', 'FUN', 1),
(3419, 218, 'Nanumea', 'NME', 1),
(3420, 218, 'Nui', 'NUI', 1),
(3421, 218, 'Nukufetau', 'NFT', 1),
(3422, 218, 'Nukulaelae', 'NLL', 1),
(3423, 218, 'Vaitupu', 'VAI', 1),
(3424, 219, 'Kalangala', 'KAL', 1),
(3425, 219, 'Kampala', 'KMP', 1),
(3426, 219, 'Kayunga', 'KAY', 1),
(3427, 219, 'Kiboga', 'KIB', 1),
(3428, 219, 'Luwero', 'LUW', 1),
(3429, 219, 'Masaka', 'MAS', 1),
(3430, 219, 'Mpigi', 'MPI', 1),
(3431, 219, 'Mubende', 'MUB', 1),
(3432, 219, 'Mukono', 'MUK', 1),
(3433, 219, 'Nakasongola', 'NKS', 1),
(3434, 219, 'Rakai', 'RAK', 1),
(3435, 219, 'Sembabule', 'SEM', 1),
(3436, 219, 'Wakiso', 'WAK', 1),
(3437, 219, 'Bugiri', 'BUG', 1),
(3438, 219, 'Busia', 'BUS', 1),
(3439, 219, 'Iganga', 'IGA', 1),
(3440, 219, 'Jinja', 'JIN', 1),
(3441, 219, 'Kaberamaido', 'KAB', 1),
(3442, 219, 'Kamuli', 'KML', 1),
(3443, 219, 'Kapchorwa', 'KPC', 1),
(3444, 219, 'Katakwi', 'KTK', 1),
(3445, 219, 'Kumi', 'KUM', 1),
(3446, 219, 'Mayuge', 'MAY', 1),
(3447, 219, 'Mbale', 'MBA', 1),
(3448, 219, 'Pallisa', 'PAL', 1),
(3449, 219, 'Sironko', 'SIR', 1),
(3450, 219, 'Soroti', 'SOR', 1),
(3451, 219, 'Tororo', 'TOR', 1),
(3452, 219, 'Adjumani', 'ADJ', 1),
(3453, 219, 'Apac', 'APC', 1),
(3454, 219, 'Arua', 'ARU', 1),
(3455, 219, 'Gulu', 'GUL', 1),
(3456, 219, 'Kitgum', 'KIT', 1),
(3457, 219, 'Kotido', 'KOT', 1),
(3458, 219, 'Lira', 'LIR', 1),
(3459, 219, 'Moroto', 'MRT', 1),
(3460, 219, 'Moyo', 'MOY', 1),
(3461, 219, 'Nakapiripirit', 'NAK', 1),
(3462, 219, 'Nebbi', 'NEB', 1),
(3463, 219, 'Pader', 'PAD', 1),
(3464, 219, 'Yumbe', 'YUM', 1),
(3465, 219, 'Bundibugyo', 'BUN', 1),
(3466, 219, 'Bushenyi', 'BSH', 1),
(3467, 219, 'Hoima', 'HOI', 1),
(3468, 219, 'Kabale', 'KBL', 1),
(3469, 219, 'Kabarole', 'KAR', 1),
(3470, 219, 'Kamwenge', 'KAM', 1),
(3471, 219, 'Kanungu', 'KAN', 1),
(3472, 219, 'Kasese', 'KAS', 1),
(3473, 219, 'Kibaale', 'KBA', 1),
(3474, 219, 'Kisoro', 'KIS', 1),
(3475, 219, 'Kyenjojo', 'KYE', 1),
(3476, 219, 'Masindi', 'MSN', 1),
(3477, 219, 'Mbarara', 'MBR', 1),
(3478, 219, 'Ntungamo', 'NTU', 1),
(3479, 219, 'Rukungiri', 'RUK', 1),
(3480, 220, 'Cherkas\'ka Oblast\'', '71', 1),
(3481, 220, 'Chernihivs\'ka Oblast\'', '74', 1),
(3482, 220, 'Chernivets\'ka Oblast\'', '77', 1),
(3483, 220, 'Crimea', '43', 1),
(3484, 220, 'Dnipropetrovs\'ka Oblast\'', '12', 1),
(3485, 220, 'Donets\'ka Oblast\'', '14', 1),
(3486, 220, 'Ivano-Frankivs\'ka Oblast\'', '26', 1),
(3487, 220, 'Khersons\'ka Oblast\'', '65', 1),
(3488, 220, 'Khmel\'nyts\'ka Oblast\'', '68', 1),
(3489, 220, 'Kirovohrads\'ka Oblast\'', '35', 1),
(3490, 220, 'Kyiv', '30', 1),
(3491, 220, 'Kyivs\'ka Oblast\'', '32', 1),
(3492, 220, 'Luhans\'ka Oblast\'', '09', 1),
(3493, 220, 'L\'vivs\'ka Oblast\'', '46', 1),
(3494, 220, 'Mykolayivs\'ka Oblast\'', '48', 1),
(3495, 220, 'Odes\'ka Oblast\'', '51', 1),
(3496, 220, 'Poltavs\'ka Oblast\'', '53', 1),
(3497, 220, 'Rivnens\'ka Oblast\'', '56', 1),
(3498, 220, 'Sevastopol\'', '40', 1),
(3499, 220, 'Sums\'ka Oblast\'', '59', 1),
(3500, 220, 'Ternopil\'s\'ka Oblast\'', '61', 1),
(3501, 220, 'Vinnyts\'ka Oblast\'', '05', 1),
(3502, 220, 'Volyns\'ka Oblast\'', '07', 1),
(3503, 220, 'Zakarpats\'ka Oblast\'', '21', 1),
(3504, 220, 'Zaporiz\'ka Oblast\'', '23', 1),
(3505, 220, 'Zhytomyrs\'ka oblast\'', '18', 1),
(3506, 221, 'Abū Z̧aby', 'AZ', 1),
(3507, 221, '‘Ajmān', 'AJ', 1),
(3508, 221, 'Al Fujayrah', 'FU', 1),
(3509, 221, 'Ash Shāriqah', 'SH', 1),
(3510, 221, 'Dubai', 'DU', 1),
(3511, 221, 'Ra’s al Khaymah', 'RK', 1),
(3512, 221, 'Umm al Qaywayn', 'UQ', 1),
(3513, 222, 'Aberdeen', 'ABN', 1),
(3514, 222, 'Aberdeenshire', 'ABNS', 1),
(3515, 222, 'Anglesey', 'ANG', 1),
(3516, 222, 'Angus', 'AGS', 1),
(3517, 222, 'Argyll and Bute', 'ARY', 1),
(3518, 222, 'Bedfordshire', 'BEDS', 1),
(3519, 222, 'Berkshire', 'BERKS', 1),
(3520, 222, 'Blaenau Gwent', 'BLA', 1),
(3521, 222, 'Bridgend', 'BRI', 1),
(3522, 222, 'Bristol', 'BSTL', 1),
(3523, 222, 'Buckinghamshire', 'BUCKS', 1),
(3524, 222, 'Caerphilly', 'CAE', 1),
(3525, 222, 'Cambridgeshire', 'CAMBS', 1),
(3526, 222, 'Cardiff', 'CDF', 1),
(3527, 222, 'Carmarthenshire', 'CARM', 1),
(3528, 222, 'Ceredigion', 'CDGN', 1),
(3529, 222, 'Cheshire', 'CHES', 1),
(3530, 222, 'Clackmannanshire', 'CLACK', 1),
(3531, 222, 'Conwy', 'CON', 1),
(3532, 222, 'Cornwall', 'CORN', 1),
(3533, 222, 'Denbighshire', 'DNBG', 1),
(3534, 222, 'Derbyshire', 'DERBY', 1),
(3535, 222, 'Devon', 'DVN', 1),
(3536, 222, 'Dorset', 'DOR', 1),
(3537, 222, 'Dumfries and Galloway', 'DGL', 1),
(3538, 222, 'Dundee', 'DUND', 1),
(3539, 222, 'Durham', 'DHM', 1),
(3540, 222, 'East Ayrshire', 'ARYE', 1),
(3541, 222, 'East Dunbartonshire', 'DUNBE', 1),
(3542, 222, 'East Lothian', 'LOTE', 1),
(3543, 222, 'East Renfrewshire', 'RENE', 1),
(3544, 222, 'East Riding of Yorkshire', 'ERYS', 1),
(3545, 222, 'East Sussex', 'SXE', 1),
(3546, 222, 'Edinburgh', 'EDIN', 1),
(3547, 222, 'Essex', 'ESX', 1),
(3548, 222, 'Falkirk', 'FALK', 1),
(3549, 222, 'Fife', 'FFE', 1),
(3550, 222, 'Flintshire', 'FLINT', 1),
(3551, 222, 'Glasgow', 'GLAS', 1),
(3552, 222, 'Gloucestershire', 'GLOS', 1),
(3553, 222, 'Greater London', 'LDN', 1),
(3554, 222, 'Greater Manchester', 'MCH', 1),
(3555, 222, 'Gwynedd', 'GDD', 1),
(3556, 222, 'Hampshire', 'HANTS', 1),
(3557, 222, 'Herefordshire', 'HWR', 1),
(3558, 222, 'Hertfordshire', 'HERTS', 1),
(3559, 222, 'Highlands', 'HLD', 1),
(3560, 222, 'Inverclyde', 'IVER', 1),
(3561, 222, 'Isle of Wight', 'IOW', 1),
(3562, 222, 'Kent', 'KNT', 1),
(3563, 222, 'Lancashire', 'LANCS', 1),
(3564, 222, 'Leicestershire', 'LEICS', 1),
(3565, 222, 'Lincolnshire', 'LINCS', 1),
(3566, 222, 'Merseyside', 'MSY', 1),
(3567, 222, 'Merthyr Tydfil', 'MERT', 1),
(3568, 222, 'Midlothian', 'MLOT', 1),
(3569, 222, 'Monmouthshire', 'MMOUTH', 1),
(3570, 222, 'Moray', 'MORAY', 1),
(3571, 222, 'Neath Port Talbot', 'NPRTAL', 1),
(3572, 222, 'Newport', 'NEWPT', 1),
(3573, 222, 'Norfolk', 'NOR', 1),
(3574, 222, 'North Ayrshire', 'ARYN', 1),
(3575, 222, 'North Lanarkshire', 'LANN', 1),
(3576, 222, 'North Yorkshire', 'YSN', 1),
(3577, 222, 'Northamptonshire', 'NHM', 1),
(3578, 222, 'Northumberland', 'NLD', 1),
(3579, 222, 'Nottinghamshire', 'NOT', 1),
(3580, 222, 'Orkney Islands', 'ORK', 1),
(3581, 222, 'Oxfordshire', 'OFE', 1),
(3582, 222, 'Pembrokeshire', 'PEM', 1),
(3583, 222, 'Perth and Kinross', 'PERTH', 1),
(3584, 222, 'Powys', 'PWS', 1),
(3585, 222, 'Renfrewshire', 'REN', 1),
(3586, 222, 'Rhondda Cynon Taff', 'RHON', 1),
(3587, 222, 'Rutland', 'RUT', 1),
(3588, 222, 'Scottish Borders', 'BOR', 1),
(3589, 222, 'Shetland Islands', 'SHET', 1),
(3590, 222, 'Shropshire', 'SPE', 1),
(3591, 222, 'Somerset', 'SOM', 1),
(3592, 222, 'South Ayrshire', 'ARYS', 1),
(3593, 222, 'South Lanarkshire', 'LANS', 1),
(3594, 222, 'South Yorkshire', 'YSS', 1),
(3595, 222, 'Staffordshire', 'SFD', 1),
(3596, 222, 'Stirling', 'STIR', 1),
(3597, 222, 'Suffolk', 'SFK', 1),
(3598, 222, 'Surrey', 'SRY', 1),
(3599, 222, 'Swansea', 'SWAN', 1),
(3600, 222, 'Torfaen', 'TORF', 1),
(3601, 222, 'Tyne and Wear', 'TWR', 1),
(3602, 222, 'Vale of Glamorgan', 'VGLAM', 1),
(3603, 222, 'Warwickshire', 'WARKS', 1),
(3604, 222, 'West Dunbartonshire', 'WDUN', 1),
(3605, 222, 'West Lothian', 'WLOT', 1),
(3606, 222, 'West Midlands', 'WMD', 1),
(3607, 222, 'West Sussex', 'SXW', 1),
(3608, 222, 'West Yorkshire', 'YSW', 1),
(3609, 222, 'Western Isles', 'WIL', 1),
(3610, 222, 'Wiltshire', 'WLT', 1),
(3611, 222, 'Worcestershire', 'WORCS', 1),
(3612, 222, 'Wrexham', 'WRX', 1),
(3613, 223, 'Alabama', 'AL', 1),
(3614, 223, 'Alaska', 'AK', 1),
(3615, 223, 'American Samoa', 'AS', 1),
(3616, 223, 'Arizona', 'AZ', 1),
(3617, 223, 'Arkansas', 'AR', 1),
(3618, 223, 'Armed Forces Africa', 'AF', 1),
(3619, 223, 'Armed Forces Americas', 'AA', 1),
(3620, 223, 'Armed Forces Canada', 'AC', 1),
(3621, 223, 'Armed Forces Europe', 'AE', 1),
(3622, 223, 'Armed Forces Middle East', 'AM', 1),
(3623, 223, 'Armed Forces Pacific', 'AP', 1),
(3624, 223, 'California', 'CA', 1),
(3625, 223, 'Colorado', 'CO', 1),
(3626, 223, 'Connecticut', 'CT', 1),
(3627, 223, 'Delaware', 'DE', 1),
(3628, 223, 'District of Columbia', 'DC', 1),
(3629, 223, 'Federated States Of Micronesia', 'FM', 1),
(3630, 223, 'Florida', 'FL', 1),
(3631, 223, 'Georgia', 'GA', 1),
(3632, 223, 'Guam', 'GU', 1),
(3633, 223, 'Hawaii', 'HI', 1),
(3634, 223, 'Idaho', 'ID', 1),
(3635, 223, 'Illinois', 'IL', 1),
(3636, 223, 'Indiana', 'IN', 1),
(3637, 223, 'Iowa', 'IA', 1),
(3638, 223, 'Kansas', 'KS', 1),
(3639, 223, 'Kentucky', 'KY', 1),
(3640, 223, 'Louisiana', 'LA', 1),
(3641, 223, 'Maine', 'ME', 1),
(3642, 223, 'Marshall Islands', 'MH', 1),
(3643, 223, 'Maryland', 'MD', 1),
(3644, 223, 'Massachusetts', 'MA', 1),
(3645, 223, 'Michigan', 'MI', 1),
(3646, 223, 'Minnesota', 'MN', 1),
(3647, 223, 'Mississippi', 'MS', 1),
(3648, 223, 'Missouri', 'MO', 1),
(3649, 223, 'Montana', 'MT', 1),
(3650, 223, 'Nebraska', 'NE', 1),
(3651, 223, 'Nevada', 'NV', 1),
(3652, 223, 'New Hampshire', 'NH', 1),
(3653, 223, 'New Jersey', 'NJ', 1),
(3654, 223, 'New Mexico', 'NM', 1),
(3655, 223, 'New York', 'NY', 1),
(3656, 223, 'North Carolina', 'NC', 1),
(3657, 223, 'North Dakota', 'ND', 1),
(3658, 223, 'Northern Mariana Islands', 'MP', 1),
(3659, 223, 'Ohio', 'OH', 1),
(3660, 223, 'Oklahoma', 'OK', 1),
(3661, 223, 'Oregon', 'OR', 1),
(3662, 223, 'Palau', 'PW', 1),
(3663, 223, 'Pennsylvania', 'PA', 1),
(3664, 223, 'Puerto Rico', 'PR', 1),
(3665, 223, 'Rhode Island', 'RI', 1),
(3666, 223, 'South Carolina', 'SC', 1),
(3667, 223, 'South Dakota', 'SD', 1),
(3668, 223, 'Tennessee', 'TN', 1),
(3669, 223, 'Texas', 'TX', 1),
(3670, 223, 'Utah', 'UT', 1),
(3671, 223, 'Vermont', 'VT', 1),
(3672, 223, 'Virgin Islands', 'VI', 1),
(3673, 223, 'Virginia', 'VA', 1),
(3674, 223, 'Washington', 'WA', 1),
(3675, 223, 'West Virginia', 'WV', 1),
(3676, 223, 'Wisconsin', 'WI', 1),
(3677, 223, 'Wyoming', 'WY', 1),
(3678, 224, 'Baker Island', 'BI', 1),
(3679, 224, 'Howland Island', 'HI', 1),
(3680, 224, 'Jarvis Island', 'JI', 1),
(3681, 224, 'Johnston Atoll', 'JA', 1),
(3682, 224, 'Kingman Reef', 'KR', 1),
(3683, 224, 'Midway Atoll', 'MA', 1),
(3684, 224, 'Navassa Island', 'NI', 1),
(3685, 224, 'Palmyra Atoll', 'PA', 1),
(3686, 224, 'Wake Island', 'WI', 1),
(3687, 225, 'Artigas', 'AR', 1),
(3688, 225, 'Canelones', 'CA', 1),
(3689, 225, 'Cerro Largo', 'CL', 1),
(3690, 225, 'Colonia', 'CO', 1),
(3691, 225, 'Durazno', 'DU', 1),
(3692, 225, 'Flores', 'FS', 1),
(3693, 225, 'Florida', 'FA', 1),
(3694, 225, 'Lavalleja', 'LA', 1),
(3695, 225, 'Maldonado', 'MA', 1),
(3696, 225, 'Montevideo', 'MO', 1),
(3697, 225, 'Paysandu', 'PA', 1),
(3698, 225, 'Rio Negro', 'RN', 1),
(3699, 225, 'Rivera', 'RV', 1),
(3700, 225, 'Rocha', 'RO', 1),
(3701, 225, 'Salto', 'SL', 1),
(3702, 225, 'San Jose', 'SJ', 1),
(3703, 225, 'Soriano', 'SO', 1),
(3704, 225, 'Tacuarembo', 'TA', 1),
(3705, 225, 'Treinta y Tres', 'TT', 1),
(3706, 226, 'Andijon', 'AN', 1),
(3707, 226, 'Buxoro', 'BU', 1),
(3708, 226, 'Farg\'ona', 'FA', 1),
(3709, 226, 'Jizzax', 'JI', 1),
(3710, 226, 'Namangan', 'NG', 1),
(3711, 226, 'Navoiy', 'NW', 1),
(3712, 226, 'Qashqadaryo', 'QA', 1),
(3713, 226, 'Qoraqalpog\'iston Republikasi', 'QR', 1),
(3714, 226, 'Samarqand', 'SA', 1),
(3715, 226, 'Sirdaryo', 'SI', 1),
(3716, 226, 'Surxondaryo', 'SU', 1),
(3717, 226, 'Toshkent City', 'TK', 1),
(3718, 226, 'Toshkent Region', 'TO', 1),
(3719, 226, 'Xorazm', 'XO', 1),
(3720, 227, 'Malampa', 'MA', 1),
(3721, 227, 'Penama', 'PE', 1),
(3722, 227, 'Sanma', 'SA', 1),
(3723, 227, 'Shefa', 'SH', 1),
(3724, 227, 'Tafea', 'TA', 1),
(3725, 227, 'Torba', 'TO', 1),
(3726, 229, 'Amazonas', 'AM', 1),
(3727, 229, 'Anzoategui', 'AN', 1),
(3728, 229, 'Apure', 'AP', 1),
(3729, 229, 'Aragua', 'AR', 1),
(3730, 229, 'Barinas', 'BA', 1),
(3731, 229, 'Bolivar', 'BO', 1),
(3732, 229, 'Carabobo', 'CA', 1),
(3733, 229, 'Cojedes', 'CO', 1),
(3734, 229, 'Delta Amacuro', 'DA', 1),
(3735, 229, 'Dependencias Federales', 'DF', 1),
(3736, 229, 'Distrito Federal', 'DI', 1),
(3737, 229, 'Falcon', 'FA', 1),
(3738, 229, 'Guarico', 'GU', 1),
(3739, 229, 'Lara', 'LA', 1),
(3740, 229, 'Merida', 'ME', 1),
(3741, 229, 'Miranda', 'MI', 1),
(3742, 229, 'Monagas', 'MO', 1),
(3743, 229, 'Nueva Esparta', 'NE', 1),
(3744, 229, 'Portuguesa', 'PO', 1),
(3745, 229, 'Sucre', 'SU', 1),
(3746, 229, 'Tachira', 'TA', 1),
(3747, 229, 'Trujillo', 'TR', 1),
(3748, 229, 'Vargas', 'VA', 1),
(3749, 229, 'Yaracuy', 'YA', 1),
(3750, 229, 'Zulia', 'ZU', 1),
(3751, 230, 'An Giang', 'AG', 1),
(3752, 230, 'Bac Giang', 'BG', 1),
(3753, 230, 'Bac Kan', 'BK', 1),
(3754, 230, 'Bac Lieu', 'BL', 1),
(3755, 230, 'Bac Ninh', 'BC', 1),
(3756, 230, 'Ba Ria-Vung Tau', 'BR', 1),
(3757, 230, 'Ben Tre', 'BN', 1),
(3758, 230, 'Binh Dinh', 'BH', 1),
(3759, 230, 'Binh Duong', 'BU', 1),
(3760, 230, 'Binh Phuoc', 'BP', 1),
(3761, 230, 'Binh Thuan', 'BT', 1),
(3762, 230, 'Ca Mau', 'CM', 1),
(3763, 230, 'Can Tho', 'CT', 1),
(3764, 230, 'Cao Bang', 'CB', 1),
(3765, 230, 'Dak Lak', 'DL', 1),
(3766, 230, 'Dak Nong', 'DG', 1),
(3767, 230, 'Da Nang', 'DN', 1),
(3768, 230, 'Dien Bien', 'DB', 1),
(3769, 230, 'Dong Nai', 'DI', 1),
(3770, 230, 'Dong Thap', 'DT', 1),
(3771, 230, 'Gia Lai', 'GL', 1),
(3772, 230, 'Ha Giang', 'HG', 1),
(3773, 230, 'Hai Duong', 'HD', 1),
(3774, 230, 'Hai Phong', 'HP', 1),
(3775, 230, 'Ha Nam', 'HM', 1),
(3776, 230, 'Ha Noi', 'HI', 1),
(3777, 230, 'Ha Tay', 'HT', 1),
(3778, 230, 'Ha Tinh', 'HH', 1),
(3779, 230, 'Hoa Binh', 'HB', 1),
(3780, 230, 'Ho Chi Minh City', 'HC', 1),
(3781, 230, 'Hau Giang', 'HU', 1),
(3782, 230, 'Hung Yen', 'HY', 1),
(3783, 232, 'Saint Croix', 'C', 1),
(3784, 232, 'Saint John', 'J', 1),
(3785, 232, 'Saint Thomas', 'T', 1),
(3786, 233, 'Alo', 'A', 1),
(3787, 233, 'Sigave', 'S', 1),
(3788, 233, 'Wallis', 'W', 1),
(3789, 235, 'Abyan', 'AB', 1),
(3790, 235, 'Adan', 'AD', 1),
(3791, 235, 'Amran', 'AM', 1),
(3792, 235, 'Al Bayda', 'BA', 1),
(3793, 235, 'Ad Dali', 'DA', 1),
(3794, 235, 'Dhamar', 'DH', 1),
(3795, 235, 'Hadramawt', 'HD', 1),
(3796, 235, 'Hajjah', 'HJ', 1),
(3797, 235, 'Al Hudaydah', 'HU', 1),
(3798, 235, 'Ibb', 'IB', 1),
(3799, 235, 'Al Jawf', 'JA', 1),
(3800, 235, 'Lahij', 'LA', 1),
(3801, 235, 'Ma\'rib', 'MA', 1),
(3802, 235, 'Al Mahrah', 'MR', 1),
(3803, 235, 'Al Mahwit', 'MW', 1),
(3804, 235, 'Sa\'dah', 'SD', 1),
(3805, 235, 'San\'a', 'SN', 1),
(3806, 235, 'Shabwah', 'SH', 1),
(3807, 235, 'Ta\'izz', 'TA', 1),
(3812, 237, 'Bas-Congo', 'BC', 1),
(3813, 237, 'Bandundu', 'BN', 1),
(3814, 237, 'Equateur', 'EQ', 1),
(3815, 237, 'Katanga', 'KA', 1),
(3816, 237, 'Kasai-Oriental', 'KE', 1),
(3817, 237, 'Kinshasa', 'KN', 1),
(3818, 237, 'Kasai-Occidental', 'KW', 1),
(3819, 237, 'Maniema', 'MA', 1),
(3820, 237, 'Nord-Kivu', 'NK', 1),
(3821, 237, 'Orientale', 'OR', 1),
(3822, 237, 'Sud-Kivu', 'SK', 1),
(3823, 238, 'Central', 'CE', 1),
(3824, 238, 'Copperbelt', 'CB', 1),
(3825, 238, 'Eastern', 'EA', 1),
(3826, 238, 'Luapula', 'LP', 1),
(3827, 238, 'Lusaka', 'LK', 1),
(3828, 238, 'Northern', 'NO', 1),
(3829, 238, 'North-Western', 'NW', 1),
(3830, 238, 'Southern', 'SO', 1),
(3831, 238, 'Western', 'WE', 1),
(3832, 239, 'Bulawayo', 'BU', 1),
(3833, 239, 'Harare', 'HA', 1),
(3834, 239, 'Manicaland', 'ML', 1),
(3835, 239, 'Mashonaland Central', 'MC', 1),
(3836, 239, 'Mashonaland East', 'ME', 1),
(3837, 239, 'Mashonaland West', 'MW', 1),
(3838, 239, 'Masvingo', 'MV', 1),
(3839, 239, 'Matabeleland North', 'MN', 1),
(3840, 239, 'Matabeleland South', 'MS', 1),
(3841, 239, 'Midlands', 'MD', 1),
(3861, 105, 'Campobasso', 'CB', 1),
(3863, 105, 'Caserta', 'CE', 1),
(3864, 105, 'Catania', 'CT', 1),
(3865, 105, 'Catanzaro', 'CZ', 1),
(3866, 105, 'Chieti', 'CH', 1),
(3867, 105, 'Como', 'CO', 1),
(3868, 105, 'Cosenza', 'CS', 1),
(3869, 105, 'Cremona', 'CR', 1),
(3870, 105, 'Crotone', 'KR', 1),
(3871, 105, 'Cuneo', 'CN', 1),
(3872, 105, 'Enna', 'EN', 1),
(3873, 105, 'Ferrara', 'FE', 1),
(3874, 105, 'Firenze', 'FI', 1),
(3875, 105, 'Foggia', 'FG', 1),
(3876, 105, 'Forli-Cesena', 'FC', 1),
(3877, 105, 'Frosinone', 'FR', 1),
(3878, 105, 'Genova', 'GE', 1),
(3879, 105, 'Gorizia', 'GO', 1),
(3880, 105, 'Grosseto', 'GR', 1),
(3881, 105, 'Imperia', 'IM', 1),
(3882, 105, 'Isernia', 'IS', 1),
(3883, 105, 'L&#39;Aquila', 'AQ', 1),
(3884, 105, 'La Spezia', 'SP', 1),
(3885, 105, 'Latina', 'LT', 1),
(3886, 105, 'Lecce', 'LE', 1),
(3887, 105, 'Lecco', 'LC', 1),
(3888, 105, 'Livorno', 'LI', 1),
(3889, 105, 'Lodi', 'LO', 1),
(3890, 105, 'Lucca', 'LU', 1),
(3891, 105, 'Macerata', 'MC', 1),
(3892, 105, 'Mantova', 'MN', 1),
(3893, 105, 'Massa-Carrara', 'MS', 1),
(3894, 105, 'Matera', 'MT', 1),
(3896, 105, 'Messina', 'ME', 1),
(3897, 105, 'Milano', 'MI', 1),
(3898, 105, 'Modena', 'MO', 1),
(3899, 105, 'Napoli', 'NA', 1),
(3900, 105, 'Novara', 'NO', 1),
(3901, 105, 'Nuoro', 'NU', 1),
(3904, 105, 'Oristano', 'OR', 1),
(3905, 105, 'Padova', 'PD', 1),
(3906, 105, 'Palermo', 'PA', 1),
(3907, 105, 'Parma', 'PR', 1),
(3908, 105, 'Pavia', 'PV', 1),
(3909, 105, 'Perugia', 'PG', 1),
(3910, 105, 'Pesaro e Urbino', 'PU', 1),
(3911, 105, 'Pescara', 'PE', 1),
(3912, 105, 'Piacenza', 'PC', 1),
(3913, 105, 'Pisa', 'PI', 1),
(3914, 105, 'Pistoia', 'PT', 1),
(3915, 105, 'Pordenone', 'PN', 1),
(3916, 105, 'Potenza', 'PZ', 1),
(3917, 105, 'Prato', 'PO', 1),
(3918, 105, 'Ragusa', 'RG', 1),
(3919, 105, 'Ravenna', 'RA', 1),
(3920, 105, 'Reggio Calabria', 'RC', 1),
(3921, 105, 'Reggio Emilia', 'RE', 1),
(3922, 105, 'Rieti', 'RI', 1),
(3923, 105, 'Rimini', 'RN', 1),
(3924, 105, 'Roma', 'RM', 1),
(3925, 105, 'Rovigo', 'RO', 1),
(3926, 105, 'Salerno', 'SA', 1),
(3927, 105, 'Sassari', 'SS', 1),
(3928, 105, 'Savona', 'SV', 1),
(3929, 105, 'Siena', 'SI', 1),
(3930, 105, 'Siracusa', 'SR', 1),
(3931, 105, 'Sondrio', 'SO', 1),
(3932, 105, 'Taranto', 'TA', 1),
(3933, 105, 'Teramo', 'TE', 1),
(3934, 105, 'Terni', 'TR', 1),
(3935, 105, 'Torino', 'TO', 1),
(3936, 105, 'Trapani', 'TP', 1),
(3937, 105, 'Trento', 'TN', 1),
(3938, 105, 'Treviso', 'TV', 1),
(3939, 105, 'Trieste', 'TS', 1),
(3940, 105, 'Udine', 'UD', 1),
(3941, 105, 'Varese', 'VA', 1),
(3942, 105, 'Venezia', 'VE', 1),
(3943, 105, 'Verbano-Cusio-Ossola', 'VB', 1),
(3944, 105, 'Vercelli', 'VC', 1),
(3945, 105, 'Verona', 'VR', 1),
(3946, 105, 'Vibo Valentia', 'VV', 1),
(3947, 105, 'Vicenza', 'VI', 1),
(3948, 105, 'Viterbo', 'VT', 1),
(3949, 222, 'County Antrim', 'ANT', 1),
(3950, 222, 'County Armagh', 'ARM', 1),
(3951, 222, 'County Down', 'DOW', 1),
(3952, 222, 'County Fermanagh', 'FER', 1),
(3953, 222, 'County Londonderry', 'LDY', 1),
(3954, 222, 'County Tyrone', 'TYR', 1),
(3955, 222, 'Cumbria', 'CMA', 1),
(3956, 190, 'Pomurska', '1', 1),
(3957, 190, 'Podravska', '2', 1),
(3958, 190, 'Koroška', '3', 1),
(3959, 190, 'Savinjska', '4', 1),
(3960, 190, 'Zasavska', '5', 1),
(3961, 190, 'Spodnjeposavska', '6', 1),
(3962, 190, 'Jugovzhodna Slovenija', '7', 1),
(3963, 190, 'Osrednjeslovenska', '8', 1),
(3964, 190, 'Gorenjska', '9', 1),
(3965, 190, 'Notranjsko-kraška', '10', 1),
(3966, 190, 'Goriška', '11', 1),
(3967, 190, 'Obalno-kraška', '12', 1),
(3968, 33, 'Ruse', '', 1),
(3969, 101, 'Alborz', 'ALB', 1),
(3970, 21, 'Brussels-Capital Region', 'BRU', 1),
(3971, 138, 'Aguascalientes', 'AG', 1),
(3973, 242, 'Andrijevica', '01', 1),
(3974, 242, 'Bar', '02', 1),
(3975, 242, 'Berane', '03', 1),
(3976, 242, 'Bijelo Polje', '04', 1),
(3977, 242, 'Budva', '05', 1),
(3978, 242, 'Cetinje', '06', 1),
(3979, 242, 'Danilovgrad', '07', 1),
(3980, 242, 'Herceg-Novi', '08', 1),
(3981, 242, 'Kolašin', '09', 1),
(3982, 242, 'Kotor', '10', 1),
(3983, 242, 'Mojkovac', '11', 1),
(3984, 242, 'Nikšić', '12', 1),
(3985, 242, 'Plav', '13', 1),
(3986, 242, 'Pljevlja', '14', 1),
(3987, 242, 'Plužine', '15', 1),
(3988, 242, 'Podgorica', '16', 1),
(3989, 242, 'Rožaje', '17', 1),
(3990, 242, 'Šavnik', '18', 1),
(3991, 242, 'Tivat', '19', 1),
(3992, 242, 'Ulcinj', '20', 1),
(3993, 242, 'Žabljak', '21', 1),
(3994, 243, 'Belgrade', '00', 1),
(3995, 243, 'North Bačka', '01', 1),
(3996, 243, 'Central Banat', '02', 1),
(3997, 243, 'North Banat', '03', 1),
(3998, 243, 'South Banat', '04', 1),
(3999, 243, 'West Bačka', '05', 1),
(4000, 243, 'South Bačka', '06', 1),
(4001, 243, 'Srem', '07', 1),
(4002, 243, 'Mačva', '08', 1),
(4003, 243, 'Kolubara', '09', 1),
(4004, 243, 'Podunavlje', '10', 1),
(4005, 243, 'Braničevo', '11', 1),
(4006, 243, 'Šumadija', '12', 1),
(4007, 243, 'Pomoravlje', '13', 1),
(4008, 243, 'Bor', '14', 1),
(4009, 243, 'Zaječar', '15', 1),
(4010, 243, 'Zlatibor', '16', 1),
(4011, 243, 'Moravica', '17', 1),
(4012, 243, 'Raška', '18', 1),
(4013, 243, 'Rasina', '19', 1),
(4014, 243, 'Nišava', '20', 1),
(4015, 243, 'Toplica', '21', 1),
(4016, 243, 'Pirot', '22', 1),
(4017, 243, 'Jablanica', '23', 1),
(4018, 243, 'Pčinja', '24', 1),
(4020, 245, 'Bonaire', 'BO', 1),
(4021, 245, 'Saba', 'SA', 1),
(4022, 245, 'Sint Eustatius', 'SE', 1),
(4023, 248, 'Central Equatoria', 'EC', 1),
(4024, 248, 'Eastern Equatoria', 'EE', 1),
(4025, 248, 'Jonglei', 'JG', 1),
(4026, 248, 'Lakes', 'LK', 1),
(4027, 248, 'Northern Bahr el-Ghazal', 'BN', 1),
(4028, 248, 'Unity', 'UY', 1),
(4029, 248, 'Upper Nile', 'NU', 1),
(4030, 248, 'Warrap', 'WR', 1),
(4031, 248, 'Western Bahr el-Ghazal', 'BW', 1),
(4032, 248, 'Western Equatoria', 'EW', 1),
(4036, 117, 'Ainaži, Salacgrīvas novads', '0661405', 1),
(4037, 117, 'Aizkraukle, Aizkraukles novads', '0320201', 1),
(4038, 117, 'Aizkraukles novads', '0320200', 1),
(4039, 117, 'Aizpute, Aizputes novads', '0640605', 1),
(4040, 117, 'Aizputes novads', '0640600', 1),
(4041, 117, 'Aknīste, Aknīstes novads', '0560805', 1),
(4042, 117, 'Aknīstes novads', '0560800', 1),
(4043, 117, 'Aloja, Alojas novads', '0661007', 1),
(4044, 117, 'Alojas novads', '0661000', 1),
(4045, 117, 'Alsungas novads', '0624200', 1),
(4046, 117, 'Alūksne, Alūksnes novads', '0360201', 1),
(4047, 117, 'Alūksnes novads', '0360200', 1),
(4048, 117, 'Amatas novads', '0424701', 1),
(4049, 117, 'Ape, Apes novads', '0360805', 1),
(4050, 117, 'Apes novads', '0360800', 1),
(4051, 117, 'Auce, Auces novads', '0460805', 1),
(4052, 117, 'Auces novads', '0460800', 1),
(4053, 117, 'Ādažu novads', '0804400', 1),
(4054, 117, 'Babītes novads', '0804900', 1),
(4055, 117, 'Baldone, Baldones novads', '0800605', 1),
(4056, 117, 'Baldones novads', '0800600', 1),
(4057, 117, 'Baloži, Ķekavas novads', '0800807', 1),
(4058, 117, 'Baltinavas novads', '0384400', 1),
(4059, 117, 'Balvi, Balvu novads', '0380201', 1),
(4060, 117, 'Balvu novads', '0380200', 1),
(4061, 117, 'Bauska, Bauskas novads', '0400201', 1),
(4062, 117, 'Bauskas novads', '0400200', 1),
(4063, 117, 'Beverīnas novads', '0964700', 1),
(4064, 117, 'Brocēni, Brocēnu novads', '0840605', 1),
(4065, 117, 'Brocēnu novads', '0840601', 1),
(4066, 117, 'Burtnieku novads', '0967101', 1),
(4067, 117, 'Carnikavas novads', '0805200', 1),
(4068, 117, 'Cesvaine, Cesvaines novads', '0700807', 1),
(4069, 117, 'Cesvaines novads', '0700800', 1),
(4070, 117, 'Cēsis, Cēsu novads', '0420201', 1),
(4071, 117, 'Cēsu novads', '0420200', 1),
(4072, 117, 'Ciblas novads', '0684901', 1),
(4073, 117, 'Dagda, Dagdas novads', '0601009', 1),
(4074, 117, 'Dagdas novads', '0601000', 1),
(4075, 117, 'Daugavpils', '0050000', 1),
(4076, 117, 'Daugavpils novads', '0440200', 1),
(4077, 117, 'Dobele, Dobeles novads', '0460201', 1),
(4078, 117, 'Dobeles novads', '0460200', 1),
(4079, 117, 'Dundagas novads', '0885100', 1),
(4080, 117, 'Durbe, Durbes novads', '0640807', 1),
(4081, 117, 'Durbes novads', '0640801', 1),
(4082, 117, 'Engures novads', '0905100', 1),
(4083, 117, 'Ērgļu novads', '0705500', 1),
(4084, 117, 'Garkalnes novads', '0806000', 1),
(4085, 117, 'Grobiņa, Grobiņas novads', '0641009', 1),
(4086, 117, 'Grobiņas novads', '0641000', 1),
(4087, 117, 'Gulbene, Gulbenes novads', '0500201', 1),
(4088, 117, 'Gulbenes novads', '0500200', 1),
(4089, 117, 'Iecavas novads', '0406400', 1),
(4090, 117, 'Ikšķile, Ikšķiles novads', '0740605', 1),
(4091, 117, 'Ikšķiles novads', '0740600', 1),
(4092, 117, 'Ilūkste, Ilūkstes novads', '0440807', 1),
(4093, 117, 'Ilūkstes novads', '0440801', 1),
(4094, 117, 'Inčukalna novads', '0801800', 1),
(4095, 117, 'Jaunjelgava, Jaunjelgavas novads', '0321007', 1),
(4096, 117, 'Jaunjelgavas novads', '0321000', 1),
(4097, 117, 'Jaunpiebalgas novads', '0425700', 1),
(4098, 117, 'Jaunpils novads', '0905700', 1),
(4099, 117, 'Jelgava', '0090000', 1),
(4100, 117, 'Jelgavas novads', '0540200', 1),
(4101, 117, 'Jēkabpils', '0110000', 1),
(4102, 117, 'Jēkabpils novads', '0560200', 1),
(4103, 117, 'Jūrmala', '0130000', 1),
(4104, 117, 'Kalnciems, Jelgavas novads', '0540211', 1),
(4105, 117, 'Kandava, Kandavas novads', '0901211', 1),
(4106, 117, 'Kandavas novads', '0901201', 1),
(4107, 117, 'Kārsava, Kārsavas novads', '0681009', 1),
(4108, 117, 'Kārsavas novads', '0681000', 1),
(4109, 117, 'Kocēnu novads ,bij. Valmieras)', '0960200', 1),
(4110, 117, 'Kokneses novads', '0326100', 1),
(4111, 117, 'Krāslava, Krāslavas novads', '0600201', 1),
(4112, 117, 'Krāslavas novads', '0600202', 1),
(4113, 117, 'Krimuldas novads', '0806900', 1),
(4114, 117, 'Krustpils novads', '0566900', 1),
(4115, 117, 'Kuldīga, Kuldīgas novads', '0620201', 1),
(4116, 117, 'Kuldīgas novads', '0620200', 1),
(4117, 117, 'Ķeguma novads', '0741001', 1),
(4118, 117, 'Ķegums, Ķeguma novads', '0741009', 1),
(4119, 117, 'Ķekavas novads', '0800800', 1),
(4120, 117, 'Lielvārde, Lielvārdes novads', '0741413', 1),
(4121, 117, 'Lielvārdes novads', '0741401', 1),
(4122, 117, 'Liepāja', '0170000', 1),
(4123, 117, 'Limbaži, Limbažu novads', '0660201', 1),
(4124, 117, 'Limbažu novads', '0660200', 1),
(4125, 117, 'Līgatne, Līgatnes novads', '0421211', 1),
(4126, 117, 'Līgatnes novads', '0421200', 1),
(4127, 117, 'Līvāni, Līvānu novads', '0761211', 1),
(4128, 117, 'Līvānu novads', '0761201', 1),
(4129, 117, 'Lubāna, Lubānas novads', '0701413', 1),
(4130, 117, 'Lubānas novads', '0701400', 1),
(4131, 117, 'Ludza, Ludzas novads', '0680201', 1),
(4132, 117, 'Ludzas novads', '0680200', 1),
(4133, 117, 'Madona, Madonas novads', '0700201', 1),
(4134, 117, 'Madonas novads', '0700200', 1),
(4135, 117, 'Mazsalaca, Mazsalacas novads', '0961011', 1),
(4136, 117, 'Mazsalacas novads', '0961000', 1),
(4137, 117, 'Mālpils novads', '0807400', 1),
(4138, 117, 'Mārupes novads', '0807600', 1),
(4139, 117, 'Mērsraga novads', '0887600', 1),
(4140, 117, 'Naukšēnu novads', '0967300', 1),
(4141, 117, 'Neretas novads', '0327100', 1),
(4142, 117, 'Nīcas novads', '0647900', 1),
(4143, 117, 'Ogre, Ogres novads', '0740201', 1),
(4144, 117, 'Ogres novads', '0740202', 1),
(4145, 117, 'Olaine, Olaines novads', '0801009', 1),
(4146, 117, 'Olaines novads', '0801000', 1),
(4147, 117, 'Ozolnieku novads', '0546701', 1),
(4148, 117, 'Pārgaujas novads', '0427500', 1),
(4149, 117, 'Pāvilosta, Pāvilostas novads', '0641413', 1),
(4150, 117, 'Pāvilostas novads', '0641401', 1),
(4151, 117, 'Piltene, Ventspils novads', '0980213', 1),
(4152, 117, 'Pļaviņas, Pļaviņu novads', '0321413', 1),
(4153, 117, 'Pļaviņu novads', '0321400', 1),
(4154, 117, 'Preiļi, Preiļu novads', '0760201', 1),
(4155, 117, 'Preiļu novads', '0760202', 1),
(4156, 117, 'Priekule, Priekules novads', '0641615', 1),
(4157, 117, 'Priekules novads', '0641600', 1),
(4158, 117, 'Priekuļu novads', '0427300', 1),
(4159, 117, 'Raunas novads', '0427700', 1),
(4160, 117, 'Rēzekne', '0210000', 1),
(4161, 117, 'Rēzeknes novads', '0780200', 1),
(4162, 117, 'Riebiņu novads', '0766300', 1),
(4163, 117, 'Rīga', '0010000', 1),
(4164, 117, 'Rojas novads', '0888300', 1),
(4165, 117, 'Ropažu novads', '0808400', 1),
(4166, 117, 'Rucavas novads', '0648500', 1),
(4167, 117, 'Rugāju novads', '0387500', 1),
(4168, 117, 'Rundāles novads', '0407700', 1),
(4169, 117, 'Rūjiena, Rūjienas novads', '0961615', 1),
(4170, 117, 'Rūjienas novads', '0961600', 1),
(4171, 117, 'Sabile, Talsu novads', '0880213', 1),
(4172, 117, 'Salacgrīva, Salacgrīvas novads', '0661415', 1),
(4173, 117, 'Salacgrīvas novads', '0661400', 1),
(4174, 117, 'Salas novads', '0568700', 1),
(4175, 117, 'Salaspils novads', '0801200', 1),
(4176, 117, 'Salaspils, Salaspils novads', '0801211', 1),
(4177, 117, 'Saldus novads', '0840200', 1),
(4178, 117, 'Saldus, Saldus novads', '0840201', 1),
(4179, 117, 'Saulkrasti, Saulkrastu novads', '0801413', 1),
(4180, 117, 'Saulkrastu novads', '0801400', 1),
(4181, 117, 'Seda, Strenču novads', '0941813', 1),
(4182, 117, 'Sējas novads', '0809200', 1),
(4183, 117, 'Sigulda, Siguldas novads', '0801615', 1),
(4184, 117, 'Siguldas novads', '0801601', 1),
(4185, 117, 'Skrīveru novads', '0328200', 1),
(4186, 117, 'Skrunda, Skrundas novads', '0621209', 1),
(4187, 117, 'Skrundas novads', '0621200', 1),
(4188, 117, 'Smiltene, Smiltenes novads', '0941615', 1),
(4189, 117, 'Smiltenes novads', '0941600', 1),
(4190, 117, 'Staicele, Alojas novads', '0661017', 1),
(4191, 117, 'Stende, Talsu novads', '0880215', 1),
(4192, 117, 'Stopiņu novads', '0809600', 1),
(4193, 117, 'Strenči, Strenču novads', '0941817', 1),
(4194, 117, 'Strenču novads', '0941800', 1),
(4195, 117, 'Subate, Ilūkstes novads', '0440815', 1),
(4196, 117, 'Talsi, Talsu novads', '0880201', 1),
(4197, 117, 'Talsu novads', '0880200', 1),
(4198, 117, 'Tērvetes novads', '0468900', 1),
(4199, 117, 'Tukuma novads', '0900200', 1),
(4200, 117, 'Tukums, Tukuma novads', '0900201', 1),
(4201, 117, 'Vaiņodes novads', '0649300', 1),
(4202, 117, 'Valdemārpils, Talsu novads', '0880217', 1),
(4203, 117, 'Valka, Valkas novads', '0940201', 1),
(4204, 117, 'Valkas novads', '0940200', 1),
(4205, 117, 'Valmiera', '0250000', 1),
(4206, 117, 'Vangaži, Inčukalna novads', '0801817', 1),
(4207, 117, 'Varakļāni, Varakļānu novads', '0701817', 1),
(4208, 117, 'Varakļānu novads', '0701800', 1),
(4209, 117, 'Vārkavas novads', '0769101', 1),
(4210, 117, 'Vecpiebalgas novads', '0429300', 1),
(4211, 117, 'Vecumnieku novads', '0409500', 1),
(4212, 117, 'Ventspils', '0270000', 1),
(4213, 117, 'Ventspils novads', '0980200', 1),
(4214, 117, 'Viesīte, Viesītes novads', '0561815', 1),
(4215, 117, 'Viesītes novads', '0561800', 1),
(4216, 117, 'Viļaka, Viļakas novads', '0381615', 1),
(4217, 117, 'Viļakas novads', '0381600', 1),
(4218, 117, 'Viļāni, Viļānu novads', '0781817', 1),
(4219, 117, 'Viļānu novads', '0781800', 1),
(4220, 117, 'Zilupe, Zilupes novads', '0681817', 1),
(4221, 117, 'Zilupes novads', '0681801', 1),
(4222, 43, 'Arica y Parinacota', 'AP', 1),
(4223, 43, 'Los Rios', 'LR', 1),
(4224, 220, 'Kharkivs\'ka Oblast\'', '63', 1),
(4225, 118, 'Beirut', 'LB-BR', 1),
(4226, 118, 'Bekaa', 'LB-BE', 1),
(4227, 118, 'Mount Lebanon', 'LB-ML', 1),
(4228, 118, 'Nabatieh', 'LB-NB', 1),
(4229, 118, 'North', 'LB-NR', 1),
(4230, 118, 'South', 'LB-ST', 1),
(4231, 99, 'Telangana', 'TS', 1),
(4232, 44, 'Qinghai', 'QH', 1),
(4233, 100, 'Papua Barat', 'PB', 1),
(4234, 100, 'Sulawesi Barat', 'SR', 1),
(4235, 100, 'Kepulauan Riau', 'KR', 1),
(4236, 105, 'Barletta-Andria-Trani', 'BT', 1),
(4237, 105, 'Fermo', 'FM', 1),
(4238, 105, 'Monza Brianza', 'MB', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oc_zone_to_geo_zone`
--

CREATE TABLE `oc_zone_to_geo_zone` (
  `zone_to_geo_zone_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `zone_id` int(11) NOT NULL DEFAULT 0,
  `geo_zone_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_zone_to_geo_zone`
--

INSERT INTO `oc_zone_to_geo_zone` (`zone_to_geo_zone_id`, `country_id`, `zone_id`, `geo_zone_id`, `date_added`, `date_modified`) VALUES
(1, 222, 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 222, 3513, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 222, 3514, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 222, 3515, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 222, 3516, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 222, 3517, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 222, 3518, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 222, 3519, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 222, 3520, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 222, 3521, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 222, 3522, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 222, 3523, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 222, 3524, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 222, 3525, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 222, 3526, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 222, 3527, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 222, 3528, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 222, 3529, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 222, 3530, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 222, 3531, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 222, 3532, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 222, 3533, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 222, 3534, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 222, 3535, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 222, 3536, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 222, 3537, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 222, 3538, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 222, 3539, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 222, 3540, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 222, 3541, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 222, 3542, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 222, 3543, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 222, 3544, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 222, 3545, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 222, 3546, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 222, 3547, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 222, 3548, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 222, 3549, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 222, 3550, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 222, 3551, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 222, 3552, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 222, 3553, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 222, 3554, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 222, 3555, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 222, 3556, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 222, 3557, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 222, 3558, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 222, 3559, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 222, 3560, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 222, 3561, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 222, 3562, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 222, 3563, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 222, 3564, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 222, 3565, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 222, 3566, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 222, 3567, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 222, 3568, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 222, 3569, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 222, 3570, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 222, 3571, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 222, 3572, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 222, 3573, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 222, 3574, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 222, 3575, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 222, 3576, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 222, 3577, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 222, 3578, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 222, 3579, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 222, 3580, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 222, 3581, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 222, 3582, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 222, 3583, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 222, 3584, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 222, 3585, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 222, 3586, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 222, 3587, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 222, 3588, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 222, 3589, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 222, 3590, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 222, 3591, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 222, 3592, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 222, 3593, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 222, 3594, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 222, 3595, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 222, 3596, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 222, 3597, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 222, 3598, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 222, 3599, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 222, 3600, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 222, 3601, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 222, 3602, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 222, 3603, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 222, 3604, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 222, 3605, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 222, 3606, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 222, 3607, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 222, 3608, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 222, 3609, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 222, 3610, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 222, 3611, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 222, 3612, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 222, 3949, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 222, 3950, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 222, 3951, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 222, 3952, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 222, 3953, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 222, 3954, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 222, 3955, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 222, 3972, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `oc_address`
--
ALTER TABLE `oc_address`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `oc_api`
--
ALTER TABLE `oc_api`
  ADD PRIMARY KEY (`api_id`);

--
-- Indexes for table `oc_api_ip`
--
ALTER TABLE `oc_api_ip`
  ADD PRIMARY KEY (`api_ip_id`);

--
-- Indexes for table `oc_api_session`
--
ALTER TABLE `oc_api_session`
  ADD PRIMARY KEY (`api_session_id`);

--
-- Indexes for table `oc_attribute`
--
ALTER TABLE `oc_attribute`
  ADD PRIMARY KEY (`attribute_id`);

--
-- Indexes for table `oc_attribute_description`
--
ALTER TABLE `oc_attribute_description`
  ADD PRIMARY KEY (`attribute_id`,`language_id`);

--
-- Indexes for table `oc_attribute_group`
--
ALTER TABLE `oc_attribute_group`
  ADD PRIMARY KEY (`attribute_group_id`);

--
-- Indexes for table `oc_attribute_group_description`
--
ALTER TABLE `oc_attribute_group_description`
  ADD PRIMARY KEY (`attribute_group_id`,`language_id`);

--
-- Indexes for table `oc_banner`
--
ALTER TABLE `oc_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `oc_banner_image`
--
ALTER TABLE `oc_banner_image`
  ADD PRIMARY KEY (`banner_image_id`);

--
-- Indexes for table `oc_cart`
--
ALTER TABLE `oc_cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `cart_id` (`api_id`,`customer_id`,`session_id`,`product_id`,`recurring_id`);

--
-- Indexes for table `oc_category`
--
ALTER TABLE `oc_category`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `oc_category_description`
--
ALTER TABLE `oc_category_description`
  ADD PRIMARY KEY (`category_id`,`language_id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `oc_category_filter`
--
ALTER TABLE `oc_category_filter`
  ADD PRIMARY KEY (`category_id`,`filter_id`);

--
-- Indexes for table `oc_category_path`
--
ALTER TABLE `oc_category_path`
  ADD PRIMARY KEY (`category_id`,`path_id`);

--
-- Indexes for table `oc_category_to_layout`
--
ALTER TABLE `oc_category_to_layout`
  ADD PRIMARY KEY (`category_id`,`store_id`);

--
-- Indexes for table `oc_category_to_store`
--
ALTER TABLE `oc_category_to_store`
  ADD PRIMARY KEY (`category_id`,`store_id`);

--
-- Indexes for table `oc_country`
--
ALTER TABLE `oc_country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `oc_coupon`
--
ALTER TABLE `oc_coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `oc_coupon_category`
--
ALTER TABLE `oc_coupon_category`
  ADD PRIMARY KEY (`coupon_id`,`category_id`);

--
-- Indexes for table `oc_coupon_history`
--
ALTER TABLE `oc_coupon_history`
  ADD PRIMARY KEY (`coupon_history_id`);

--
-- Indexes for table `oc_coupon_product`
--
ALTER TABLE `oc_coupon_product`
  ADD PRIMARY KEY (`coupon_product_id`);

--
-- Indexes for table `oc_currency`
--
ALTER TABLE `oc_currency`
  ADD PRIMARY KEY (`currency_id`);

--
-- Indexes for table `oc_customer`
--
ALTER TABLE `oc_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `oc_customer_activity`
--
ALTER TABLE `oc_customer_activity`
  ADD PRIMARY KEY (`customer_activity_id`);

--
-- Indexes for table `oc_customer_affiliate`
--
ALTER TABLE `oc_customer_affiliate`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `oc_customer_approval`
--
ALTER TABLE `oc_customer_approval`
  ADD PRIMARY KEY (`customer_approval_id`);

--
-- Indexes for table `oc_customer_group`
--
ALTER TABLE `oc_customer_group`
  ADD PRIMARY KEY (`customer_group_id`);

--
-- Indexes for table `oc_customer_group_description`
--
ALTER TABLE `oc_customer_group_description`
  ADD PRIMARY KEY (`customer_group_id`,`language_id`);

--
-- Indexes for table `oc_customer_history`
--
ALTER TABLE `oc_customer_history`
  ADD PRIMARY KEY (`customer_history_id`);

--
-- Indexes for table `oc_customer_ip`
--
ALTER TABLE `oc_customer_ip`
  ADD PRIMARY KEY (`customer_ip_id`),
  ADD KEY `ip` (`ip`);

--
-- Indexes for table `oc_customer_login`
--
ALTER TABLE `oc_customer_login`
  ADD PRIMARY KEY (`customer_login_id`),
  ADD KEY `email` (`email`),
  ADD KEY `ip` (`ip`);

--
-- Indexes for table `oc_customer_online`
--
ALTER TABLE `oc_customer_online`
  ADD PRIMARY KEY (`ip`);

--
-- Indexes for table `oc_customer_reward`
--
ALTER TABLE `oc_customer_reward`
  ADD PRIMARY KEY (`customer_reward_id`);

--
-- Indexes for table `oc_customer_search`
--
ALTER TABLE `oc_customer_search`
  ADD PRIMARY KEY (`customer_search_id`);

--
-- Indexes for table `oc_customer_transaction`
--
ALTER TABLE `oc_customer_transaction`
  ADD PRIMARY KEY (`customer_transaction_id`);

--
-- Indexes for table `oc_customer_wishlist`
--
ALTER TABLE `oc_customer_wishlist`
  ADD PRIMARY KEY (`customer_id`,`product_id`);

--
-- Indexes for table `oc_custom_field`
--
ALTER TABLE `oc_custom_field`
  ADD PRIMARY KEY (`custom_field_id`);

--
-- Indexes for table `oc_custom_field_customer_group`
--
ALTER TABLE `oc_custom_field_customer_group`
  ADD PRIMARY KEY (`custom_field_id`,`customer_group_id`);

--
-- Indexes for table `oc_custom_field_description`
--
ALTER TABLE `oc_custom_field_description`
  ADD PRIMARY KEY (`custom_field_id`,`language_id`);

--
-- Indexes for table `oc_custom_field_value`
--
ALTER TABLE `oc_custom_field_value`
  ADD PRIMARY KEY (`custom_field_value_id`);

--
-- Indexes for table `oc_custom_field_value_description`
--
ALTER TABLE `oc_custom_field_value_description`
  ADD PRIMARY KEY (`custom_field_value_id`,`language_id`);

--
-- Indexes for table `oc_download`
--
ALTER TABLE `oc_download`
  ADD PRIMARY KEY (`download_id`);

--
-- Indexes for table `oc_download_description`
--
ALTER TABLE `oc_download_description`
  ADD PRIMARY KEY (`download_id`,`language_id`);

--
-- Indexes for table `oc_event`
--
ALTER TABLE `oc_event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `oc_extension`
--
ALTER TABLE `oc_extension`
  ADD PRIMARY KEY (`extension_id`);

--
-- Indexes for table `oc_extension_install`
--
ALTER TABLE `oc_extension_install`
  ADD PRIMARY KEY (`extension_install_id`);

--
-- Indexes for table `oc_extension_path`
--
ALTER TABLE `oc_extension_path`
  ADD PRIMARY KEY (`extension_path_id`);

--
-- Indexes for table `oc_filter`
--
ALTER TABLE `oc_filter`
  ADD PRIMARY KEY (`filter_id`);

--
-- Indexes for table `oc_filter_description`
--
ALTER TABLE `oc_filter_description`
  ADD PRIMARY KEY (`filter_id`,`language_id`);

--
-- Indexes for table `oc_filter_group`
--
ALTER TABLE `oc_filter_group`
  ADD PRIMARY KEY (`filter_group_id`);

--
-- Indexes for table `oc_filter_group_description`
--
ALTER TABLE `oc_filter_group_description`
  ADD PRIMARY KEY (`filter_group_id`,`language_id`);

--
-- Indexes for table `oc_geo_zone`
--
ALTER TABLE `oc_geo_zone`
  ADD PRIMARY KEY (`geo_zone_id`);

--
-- Indexes for table `oc_googleshopping_category`
--
ALTER TABLE `oc_googleshopping_category`
  ADD PRIMARY KEY (`google_product_category`,`store_id`),
  ADD KEY `category_id_store_id` (`category_id`,`store_id`);

--
-- Indexes for table `oc_googleshopping_product`
--
ALTER TABLE `oc_googleshopping_product`
  ADD PRIMARY KEY (`product_advertise_google_id`),
  ADD UNIQUE KEY `product_id_store_id` (`product_id`,`store_id`);

--
-- Indexes for table `oc_googleshopping_product_status`
--
ALTER TABLE `oc_googleshopping_product_status`
  ADD PRIMARY KEY (`product_id`,`store_id`,`product_variation_id`);

--
-- Indexes for table `oc_googleshopping_product_target`
--
ALTER TABLE `oc_googleshopping_product_target`
  ADD PRIMARY KEY (`product_id`,`advertise_google_target_id`);

--
-- Indexes for table `oc_googleshopping_target`
--
ALTER TABLE `oc_googleshopping_target`
  ADD PRIMARY KEY (`advertise_google_target_id`),
  ADD KEY `store_id` (`store_id`);

--
-- Indexes for table `oc_information`
--
ALTER TABLE `oc_information`
  ADD PRIMARY KEY (`information_id`);

--
-- Indexes for table `oc_information_description`
--
ALTER TABLE `oc_information_description`
  ADD PRIMARY KEY (`information_id`,`language_id`);

--
-- Indexes for table `oc_information_to_layout`
--
ALTER TABLE `oc_information_to_layout`
  ADD PRIMARY KEY (`information_id`,`store_id`);

--
-- Indexes for table `oc_information_to_store`
--
ALTER TABLE `oc_information_to_store`
  ADD PRIMARY KEY (`information_id`,`store_id`);

--
-- Indexes for table `oc_language`
--
ALTER TABLE `oc_language`
  ADD PRIMARY KEY (`language_id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `oc_layout`
--
ALTER TABLE `oc_layout`
  ADD PRIMARY KEY (`layout_id`);

--
-- Indexes for table `oc_layout_module`
--
ALTER TABLE `oc_layout_module`
  ADD PRIMARY KEY (`layout_module_id`);

--
-- Indexes for table `oc_layout_route`
--
ALTER TABLE `oc_layout_route`
  ADD PRIMARY KEY (`layout_route_id`);

--
-- Indexes for table `oc_length_class`
--
ALTER TABLE `oc_length_class`
  ADD PRIMARY KEY (`length_class_id`);

--
-- Indexes for table `oc_length_class_description`
--
ALTER TABLE `oc_length_class_description`
  ADD PRIMARY KEY (`length_class_id`,`language_id`);

--
-- Indexes for table `oc_location`
--
ALTER TABLE `oc_location`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `oc_manufacturer`
--
ALTER TABLE `oc_manufacturer`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `oc_manufacturer_to_store`
--
ALTER TABLE `oc_manufacturer_to_store`
  ADD PRIMARY KEY (`manufacturer_id`,`store_id`);

--
-- Indexes for table `oc_marketing`
--
ALTER TABLE `oc_marketing`
  ADD PRIMARY KEY (`marketing_id`);

--
-- Indexes for table `oc_modification`
--
ALTER TABLE `oc_modification`
  ADD PRIMARY KEY (`modification_id`);

--
-- Indexes for table `oc_module`
--
ALTER TABLE `oc_module`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `oc_option`
--
ALTER TABLE `oc_option`
  ADD PRIMARY KEY (`option_id`);

--
-- Indexes for table `oc_option_description`
--
ALTER TABLE `oc_option_description`
  ADD PRIMARY KEY (`option_id`,`language_id`);

--
-- Indexes for table `oc_option_value`
--
ALTER TABLE `oc_option_value`
  ADD PRIMARY KEY (`option_value_id`);

--
-- Indexes for table `oc_option_value_description`
--
ALTER TABLE `oc_option_value_description`
  ADD PRIMARY KEY (`option_value_id`,`language_id`);

--
-- Indexes for table `oc_order`
--
ALTER TABLE `oc_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `oc_order_history`
--
ALTER TABLE `oc_order_history`
  ADD PRIMARY KEY (`order_history_id`);

--
-- Indexes for table `oc_order_option`
--
ALTER TABLE `oc_order_option`
  ADD PRIMARY KEY (`order_option_id`);

--
-- Indexes for table `oc_order_product`
--
ALTER TABLE `oc_order_product`
  ADD PRIMARY KEY (`order_product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `oc_order_recurring`
--
ALTER TABLE `oc_order_recurring`
  ADD PRIMARY KEY (`order_recurring_id`);

--
-- Indexes for table `oc_order_recurring_transaction`
--
ALTER TABLE `oc_order_recurring_transaction`
  ADD PRIMARY KEY (`order_recurring_transaction_id`);

--
-- Indexes for table `oc_order_shipment`
--
ALTER TABLE `oc_order_shipment`
  ADD PRIMARY KEY (`order_shipment_id`);

--
-- Indexes for table `oc_order_status`
--
ALTER TABLE `oc_order_status`
  ADD PRIMARY KEY (`order_status_id`,`language_id`);

--
-- Indexes for table `oc_order_total`
--
ALTER TABLE `oc_order_total`
  ADD PRIMARY KEY (`order_total_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `oc_order_voucher`
--
ALTER TABLE `oc_order_voucher`
  ADD PRIMARY KEY (`order_voucher_id`);

--
-- Indexes for table `oc_product`
--
ALTER TABLE `oc_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `oc_product_attribute`
--
ALTER TABLE `oc_product_attribute`
  ADD PRIMARY KEY (`product_id`,`attribute_id`,`language_id`);

--
-- Indexes for table `oc_product_description`
--
ALTER TABLE `oc_product_description`
  ADD PRIMARY KEY (`product_id`,`language_id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `oc_product_discount`
--
ALTER TABLE `oc_product_discount`
  ADD PRIMARY KEY (`product_discount_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `oc_product_filter`
--
ALTER TABLE `oc_product_filter`
  ADD PRIMARY KEY (`product_id`,`filter_id`);

--
-- Indexes for table `oc_product_image`
--
ALTER TABLE `oc_product_image`
  ADD PRIMARY KEY (`product_image_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `oc_product_option`
--
ALTER TABLE `oc_product_option`
  ADD PRIMARY KEY (`product_option_id`);

--
-- Indexes for table `oc_product_option_value`
--
ALTER TABLE `oc_product_option_value`
  ADD PRIMARY KEY (`product_option_value_id`);

--
-- Indexes for table `oc_product_recurring`
--
ALTER TABLE `oc_product_recurring`
  ADD PRIMARY KEY (`product_id`,`recurring_id`,`customer_group_id`);

--
-- Indexes for table `oc_product_related`
--
ALTER TABLE `oc_product_related`
  ADD PRIMARY KEY (`product_id`,`related_id`);

--
-- Indexes for table `oc_product_reward`
--
ALTER TABLE `oc_product_reward`
  ADD PRIMARY KEY (`product_reward_id`);

--
-- Indexes for table `oc_product_special`
--
ALTER TABLE `oc_product_special`
  ADD PRIMARY KEY (`product_special_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `oc_product_to_category`
--
ALTER TABLE `oc_product_to_category`
  ADD PRIMARY KEY (`product_id`,`category_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `oc_product_to_download`
--
ALTER TABLE `oc_product_to_download`
  ADD PRIMARY KEY (`product_id`,`download_id`);

--
-- Indexes for table `oc_product_to_layout`
--
ALTER TABLE `oc_product_to_layout`
  ADD PRIMARY KEY (`product_id`,`store_id`);

--
-- Indexes for table `oc_product_to_store`
--
ALTER TABLE `oc_product_to_store`
  ADD PRIMARY KEY (`product_id`,`store_id`);

--
-- Indexes for table `oc_recurring`
--
ALTER TABLE `oc_recurring`
  ADD PRIMARY KEY (`recurring_id`);

--
-- Indexes for table `oc_recurring_description`
--
ALTER TABLE `oc_recurring_description`
  ADD PRIMARY KEY (`recurring_id`,`language_id`);

--
-- Indexes for table `oc_return`
--
ALTER TABLE `oc_return`
  ADD PRIMARY KEY (`return_id`);

--
-- Indexes for table `oc_return_action`
--
ALTER TABLE `oc_return_action`
  ADD PRIMARY KEY (`return_action_id`,`language_id`);

--
-- Indexes for table `oc_return_history`
--
ALTER TABLE `oc_return_history`
  ADD PRIMARY KEY (`return_history_id`);

--
-- Indexes for table `oc_return_reason`
--
ALTER TABLE `oc_return_reason`
  ADD PRIMARY KEY (`return_reason_id`,`language_id`);

--
-- Indexes for table `oc_return_status`
--
ALTER TABLE `oc_return_status`
  ADD PRIMARY KEY (`return_status_id`,`language_id`);

--
-- Indexes for table `oc_review`
--
ALTER TABLE `oc_review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `oc_seo_url`
--
ALTER TABLE `oc_seo_url`
  ADD PRIMARY KEY (`seo_url_id`),
  ADD KEY `query` (`query`),
  ADD KEY `keyword` (`keyword`);

--
-- Indexes for table `oc_session`
--
ALTER TABLE `oc_session`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `oc_setting`
--
ALTER TABLE `oc_setting`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `oc_shipping_courier`
--
ALTER TABLE `oc_shipping_courier`
  ADD PRIMARY KEY (`shipping_courier_id`);

--
-- Indexes for table `oc_statistics`
--
ALTER TABLE `oc_statistics`
  ADD PRIMARY KEY (`statistics_id`);

--
-- Indexes for table `oc_stock_status`
--
ALTER TABLE `oc_stock_status`
  ADD PRIMARY KEY (`stock_status_id`,`language_id`);

--
-- Indexes for table `oc_store`
--
ALTER TABLE `oc_store`
  ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `oc_tax_class`
--
ALTER TABLE `oc_tax_class`
  ADD PRIMARY KEY (`tax_class_id`);

--
-- Indexes for table `oc_tax_rate`
--
ALTER TABLE `oc_tax_rate`
  ADD PRIMARY KEY (`tax_rate_id`);

--
-- Indexes for table `oc_tax_rate_to_customer_group`
--
ALTER TABLE `oc_tax_rate_to_customer_group`
  ADD PRIMARY KEY (`tax_rate_id`,`customer_group_id`);

--
-- Indexes for table `oc_tax_rule`
--
ALTER TABLE `oc_tax_rule`
  ADD PRIMARY KEY (`tax_rule_id`);

--
-- Indexes for table `oc_theme`
--
ALTER TABLE `oc_theme`
  ADD PRIMARY KEY (`theme_id`);

--
-- Indexes for table `oc_translation`
--
ALTER TABLE `oc_translation`
  ADD PRIMARY KEY (`translation_id`);

--
-- Indexes for table `oc_upload`
--
ALTER TABLE `oc_upload`
  ADD PRIMARY KEY (`upload_id`);

--
-- Indexes for table `oc_user`
--
ALTER TABLE `oc_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `oc_user_group`
--
ALTER TABLE `oc_user_group`
  ADD PRIMARY KEY (`user_group_id`);

--
-- Indexes for table `oc_voucher`
--
ALTER TABLE `oc_voucher`
  ADD PRIMARY KEY (`voucher_id`);

--
-- Indexes for table `oc_voucher_history`
--
ALTER TABLE `oc_voucher_history`
  ADD PRIMARY KEY (`voucher_history_id`);

--
-- Indexes for table `oc_voucher_theme`
--
ALTER TABLE `oc_voucher_theme`
  ADD PRIMARY KEY (`voucher_theme_id`);

--
-- Indexes for table `oc_voucher_theme_description`
--
ALTER TABLE `oc_voucher_theme_description`
  ADD PRIMARY KEY (`voucher_theme_id`,`language_id`);

--
-- Indexes for table `oc_weight_class`
--
ALTER TABLE `oc_weight_class`
  ADD PRIMARY KEY (`weight_class_id`);

--
-- Indexes for table `oc_weight_class_description`
--
ALTER TABLE `oc_weight_class_description`
  ADD PRIMARY KEY (`weight_class_id`,`language_id`);

--
-- Indexes for table `oc_zone`
--
ALTER TABLE `oc_zone`
  ADD PRIMARY KEY (`zone_id`);

--
-- Indexes for table `oc_zone_to_geo_zone`
--
ALTER TABLE `oc_zone_to_geo_zone`
  ADD PRIMARY KEY (`zone_to_geo_zone_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `oc_address`
--
ALTER TABLE `oc_address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_api`
--
ALTER TABLE `oc_api`
  MODIFY `api_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oc_api_ip`
--
ALTER TABLE `oc_api_ip`
  MODIFY `api_ip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oc_api_session`
--
ALTER TABLE `oc_api_session`
  MODIFY `api_session_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oc_attribute`
--
ALTER TABLE `oc_attribute`
  MODIFY `attribute_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `oc_attribute_group`
--
ALTER TABLE `oc_attribute_group`
  MODIFY `attribute_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `oc_banner`
--
ALTER TABLE `oc_banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `oc_banner_image`
--
ALTER TABLE `oc_banner_image`
  MODIFY `banner_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `oc_cart`
--
ALTER TABLE `oc_cart`
  MODIFY `cart_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oc_category`
--
ALTER TABLE `oc_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `oc_country`
--
ALTER TABLE `oc_country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;

--
-- AUTO_INCREMENT for table `oc_coupon`
--
ALTER TABLE `oc_coupon`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `oc_coupon_history`
--
ALTER TABLE `oc_coupon_history`
  MODIFY `coupon_history_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_coupon_product`
--
ALTER TABLE `oc_coupon_product`
  MODIFY `coupon_product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_currency`
--
ALTER TABLE `oc_currency`
  MODIFY `currency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oc_customer`
--
ALTER TABLE `oc_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_customer_activity`
--
ALTER TABLE `oc_customer_activity`
  MODIFY `customer_activity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_customer_approval`
--
ALTER TABLE `oc_customer_approval`
  MODIFY `customer_approval_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_customer_group`
--
ALTER TABLE `oc_customer_group`
  MODIFY `customer_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oc_customer_history`
--
ALTER TABLE `oc_customer_history`
  MODIFY `customer_history_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_customer_ip`
--
ALTER TABLE `oc_customer_ip`
  MODIFY `customer_ip_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_customer_login`
--
ALTER TABLE `oc_customer_login`
  MODIFY `customer_login_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_customer_reward`
--
ALTER TABLE `oc_customer_reward`
  MODIFY `customer_reward_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_customer_search`
--
ALTER TABLE `oc_customer_search`
  MODIFY `customer_search_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oc_customer_transaction`
--
ALTER TABLE `oc_customer_transaction`
  MODIFY `customer_transaction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_custom_field`
--
ALTER TABLE `oc_custom_field`
  MODIFY `custom_field_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_custom_field_value`
--
ALTER TABLE `oc_custom_field_value`
  MODIFY `custom_field_value_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_download`
--
ALTER TABLE `oc_download`
  MODIFY `download_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_event`
--
ALTER TABLE `oc_event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `oc_extension`
--
ALTER TABLE `oc_extension`
  MODIFY `extension_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `oc_extension_install`
--
ALTER TABLE `oc_extension_install`
  MODIFY `extension_install_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `oc_extension_path`
--
ALTER TABLE `oc_extension_path`
  MODIFY `extension_path_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3926;

--
-- AUTO_INCREMENT for table `oc_filter`
--
ALTER TABLE `oc_filter`
  MODIFY `filter_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_filter_group`
--
ALTER TABLE `oc_filter_group`
  MODIFY `filter_group_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_geo_zone`
--
ALTER TABLE `oc_geo_zone`
  MODIFY `geo_zone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oc_googleshopping_product`
--
ALTER TABLE `oc_googleshopping_product`
  MODIFY `product_advertise_google_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oc_information`
--
ALTER TABLE `oc_information`
  MODIFY `information_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `oc_language`
--
ALTER TABLE `oc_language`
  MODIFY `language_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oc_layout`
--
ALTER TABLE `oc_layout`
  MODIFY `layout_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `oc_layout_module`
--
ALTER TABLE `oc_layout_module`
  MODIFY `layout_module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `oc_layout_route`
--
ALTER TABLE `oc_layout_route`
  MODIFY `layout_route_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `oc_length_class`
--
ALTER TABLE `oc_length_class`
  MODIFY `length_class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `oc_location`
--
ALTER TABLE `oc_location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_manufacturer`
--
ALTER TABLE `oc_manufacturer`
  MODIFY `manufacturer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `oc_marketing`
--
ALTER TABLE `oc_marketing`
  MODIFY `marketing_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_modification`
--
ALTER TABLE `oc_modification`
  MODIFY `modification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `oc_module`
--
ALTER TABLE `oc_module`
  MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `oc_option`
--
ALTER TABLE `oc_option`
  MODIFY `option_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `oc_option_value`
--
ALTER TABLE `oc_option_value`
  MODIFY `option_value_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `oc_order`
--
ALTER TABLE `oc_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `oc_order_history`
--
ALTER TABLE `oc_order_history`
  MODIFY `order_history_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_order_option`
--
ALTER TABLE `oc_order_option`
  MODIFY `order_option_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `oc_order_product`
--
ALTER TABLE `oc_order_product`
  MODIFY `order_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `oc_order_recurring`
--
ALTER TABLE `oc_order_recurring`
  MODIFY `order_recurring_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_order_recurring_transaction`
--
ALTER TABLE `oc_order_recurring_transaction`
  MODIFY `order_recurring_transaction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_order_shipment`
--
ALTER TABLE `oc_order_shipment`
  MODIFY `order_shipment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_order_status`
--
ALTER TABLE `oc_order_status`
  MODIFY `order_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `oc_order_total`
--
ALTER TABLE `oc_order_total`
  MODIFY `order_total_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `oc_order_voucher`
--
ALTER TABLE `oc_order_voucher`
  MODIFY `order_voucher_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_product`
--
ALTER TABLE `oc_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `oc_product_discount`
--
ALTER TABLE `oc_product_discount`
  MODIFY `product_discount_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=441;

--
-- AUTO_INCREMENT for table `oc_product_image`
--
ALTER TABLE `oc_product_image`
  MODIFY `product_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2352;

--
-- AUTO_INCREMENT for table `oc_product_option`
--
ALTER TABLE `oc_product_option`
  MODIFY `product_option_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;

--
-- AUTO_INCREMENT for table `oc_product_option_value`
--
ALTER TABLE `oc_product_option_value`
  MODIFY `product_option_value_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `oc_product_reward`
--
ALTER TABLE `oc_product_reward`
  MODIFY `product_reward_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=546;

--
-- AUTO_INCREMENT for table `oc_product_special`
--
ALTER TABLE `oc_product_special`
  MODIFY `product_special_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=440;

--
-- AUTO_INCREMENT for table `oc_recurring`
--
ALTER TABLE `oc_recurring`
  MODIFY `recurring_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_return`
--
ALTER TABLE `oc_return`
  MODIFY `return_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_return_action`
--
ALTER TABLE `oc_return_action`
  MODIFY `return_action_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `oc_return_history`
--
ALTER TABLE `oc_return_history`
  MODIFY `return_history_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_return_reason`
--
ALTER TABLE `oc_return_reason`
  MODIFY `return_reason_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `oc_return_status`
--
ALTER TABLE `oc_return_status`
  MODIFY `return_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `oc_review`
--
ALTER TABLE `oc_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_seo_url`
--
ALTER TABLE `oc_seo_url`
  MODIFY `seo_url_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=844;

--
-- AUTO_INCREMENT for table `oc_setting`
--
ALTER TABLE `oc_setting`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=717;

--
-- AUTO_INCREMENT for table `oc_statistics`
--
ALTER TABLE `oc_statistics`
  MODIFY `statistics_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `oc_stock_status`
--
ALTER TABLE `oc_stock_status`
  MODIFY `stock_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `oc_store`
--
ALTER TABLE `oc_store`
  MODIFY `store_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_tax_class`
--
ALTER TABLE `oc_tax_class`
  MODIFY `tax_class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `oc_tax_rate`
--
ALTER TABLE `oc_tax_rate`
  MODIFY `tax_rate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `oc_tax_rule`
--
ALTER TABLE `oc_tax_rule`
  MODIFY `tax_rule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `oc_theme`
--
ALTER TABLE `oc_theme`
  MODIFY `theme_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_translation`
--
ALTER TABLE `oc_translation`
  MODIFY `translation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_upload`
--
ALTER TABLE `oc_upload`
  MODIFY `upload_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oc_user`
--
ALTER TABLE `oc_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oc_user_group`
--
ALTER TABLE `oc_user_group`
  MODIFY `user_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `oc_voucher`
--
ALTER TABLE `oc_voucher`
  MODIFY `voucher_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_voucher_history`
--
ALTER TABLE `oc_voucher_history`
  MODIFY `voucher_history_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oc_voucher_theme`
--
ALTER TABLE `oc_voucher_theme`
  MODIFY `voucher_theme_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `oc_weight_class`
--
ALTER TABLE `oc_weight_class`
  MODIFY `weight_class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `oc_zone`
--
ALTER TABLE `oc_zone`
  MODIFY `zone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4239;

--
-- AUTO_INCREMENT for table `oc_zone_to_geo_zone`
--
ALTER TABLE `oc_zone_to_geo_zone`
  MODIFY `zone_to_geo_zone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
