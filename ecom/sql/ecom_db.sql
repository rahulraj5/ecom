-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2021 at 04:05 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `txn_password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `create_date` datetime NOT NULL,
  `modify_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `txn_password`, `first_name`, `last_name`, `status`, `create_date`, `modify_date`) VALUES
(1, 'admin@admin.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 'admin', 1, '2021-09-18 00:00:00', '2021-09-18 04:08:06');

-- --------------------------------------------------------

--
-- Table structure for table `attribute`
--

CREATE TABLE `attribute` (
  `id` int(11) NOT NULL,
  `attribute_name` varchar(255) NOT NULL,
  `attributes` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attribute`
--

INSERT INTO `attribute` (`id`, `attribute_name`, `attributes`, `status`, `date`) VALUES
(1, 'storage', '16GB,32GB,64GB', 0, '2021-09-13 08:44:56'),
(2, 'ram', '2gb,8gb,16gb', 0, '2021-09-17 14:52:45'),
(3, 'storage', '10kg,50kg,100kg', 0, '2021-09-17 14:53:47');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_id` tinyint(5) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `parent_category_id` int(11) NOT NULL,
  `parent_sub_category_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `category_name`, `parent_category_id`, `parent_sub_category_id`, `status`, `create_date`) VALUES
(106, 'ELECTRONICS', 0, 0, 1, '2021-09-13 19:26:06'),
(108, 'Radio', 106, 1, 1, '2021-09-10 09:41:28'),
(111, 'Phillips', 108, 0, 1, '2021-09-10 09:54:31'),
(112, 'Dell', 109, 0, 1, '2021-09-10 09:55:25'),
(115, 'Mens', 113, 1, 1, '2021-09-10 11:00:33'),
(117, 'Music', 106, 1, 1, '2021-09-14 10:43:21'),
(118, 'Cloths', 115, 0, 1, '2021-09-14 10:59:19'),
(119, 'Mens fashion', 0, 0, 1, '2021-09-18 15:01:16');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `status`) VALUES
(1, 'Mens Fashion', 0),
(2, 'Kids Fashion', 0),
(3, 'Womens Fashion', 0);

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'IndianRed', '#CD5C5C', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(2, 'LightCoral', '#F08080', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(3, 'Salmon', '#FA8072', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(4, 'DarkSalmon', '#E9967A', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(5, 'LightSalmon', '#FFA07A', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(6, 'Crimson', '#DC143C', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(7, 'Red', '#FF0000', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(8, 'FireBrick', '#B22222', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(9, 'DarkRed', '#8B0000', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(10, 'Pink', '#FFC0CB', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(11, 'LightPink', '#FFB6C1', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(12, 'HotPink', '#FF69B4', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(13, 'DeepPink', '#FF1493', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(14, 'MediumVioletRed', '#C71585', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(15, 'PaleVioletRed', '#DB7093', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(16, 'LightSalmon', '#FFA07A', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(17, 'Coral', '#FF7F50', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(18, 'Tomato', '#FF6347', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(19, 'OrangeRed', '#FF4500', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(20, 'DarkOrange', '#FF8C00', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(21, 'Orange', '#FFA500', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(22, 'Gold', '#FFD700', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(23, 'Yellow', '#FFFF00', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(24, 'LightYellow', '#FFFFE0', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(25, 'LemonChiffon', '#FFFACD', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(26, 'LightGoldenrodYellow', '#FAFAD2', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(27, 'PapayaWhip', '#FFEFD5', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(28, 'Moccasin', '#FFE4B5', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(29, 'PeachPuff', '#FFDAB9', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(30, 'PaleGoldenrod', '#EEE8AA', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(31, 'Khaki', '#F0E68C', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(32, 'DarkKhaki', '#BDB76B', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(33, 'Lavender', '#E6E6FA', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(34, 'Thistle', '#D8BFD8', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(35, 'Plum', '#DDA0DD', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(36, 'Violet', '#EE82EE', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(37, 'Orchid', '#DA70D6', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(38, 'Fuchsia', '#FF00FF', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(39, 'Magenta', '#FF00FF', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(40, 'MediumOrchid', '#BA55D3', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(41, 'MediumPurple', '#9370DB', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(42, 'Amethyst', '#9966CC', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(43, 'BlueViolet', '#8A2BE2', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(44, 'DarkViolet', '#9400D3', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(45, 'DarkOrchid', '#9932CC', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(46, 'DarkMagenta', '#8B008B', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(47, 'Purple', '#800080', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(48, 'Indigo', '#4B0082', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(49, 'SlateBlue', '#6A5ACD', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(50, 'DarkSlateBlue', '#483D8B', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(51, 'MediumSlateBlue', '#7B68EE', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(52, 'GreenYellow', '#ADFF2F', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(53, 'Chartreuse', '#7FFF00', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(54, 'LawnGreen', '#7CFC00', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(55, 'Lime', '#00FF00', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(56, 'LimeGreen', '#32CD32', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(57, 'PaleGreen', '#98FB98', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(58, 'LightGreen', '#90EE90', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(59, 'MediumSpringGreen', '#00FA9A', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(60, 'SpringGreen', '#00FF7F', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(61, 'MediumSeaGreen', '#3CB371', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(62, 'SeaGreen', '#2E8B57', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(63, 'ForestGreen', '#228B22', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(64, 'Green', '#008000', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(65, 'DarkGreen', '#006400', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(66, 'YellowGreen', '#9ACD32', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(67, 'OliveDrab', '#6B8E23', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(68, 'Olive', '#808000', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(69, 'DarkOliveGreen', '#556B2F', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(70, 'MediumAquamarine', '#66CDAA', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(71, 'DarkSeaGreen', '#8FBC8F', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(72, 'LightSeaGreen', '#20B2AA', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(73, 'DarkCyan', '#008B8B', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(74, 'Teal', '#008080', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(75, 'Aqua', '#00FFFF', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(76, 'Cyan', '#00FFFF', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(77, 'LightCyan', '#E0FFFF', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(78, 'PaleTurquoise', '#AFEEEE', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(79, 'Aquamarine', '#7FFFD4', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(80, 'Turquoise', '#40E0D0', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(81, 'MediumTurquoise', '#48D1CC', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(82, 'DarkTurquoise', '#00CED1', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(83, 'CadetBlue', '#5F9EA0', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(84, 'SteelBlue', '#4682B4', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(85, 'LightSteelBlue', '#B0C4DE', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(86, 'PowderBlue', '#B0E0E6', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(87, 'LightBlue', '#ADD8E6', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(88, 'SkyBlue', '#87CEEB', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(89, 'LightSkyBlue', '#87CEFA', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(90, 'DeepSkyBlue', '#00BFFF', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(91, 'DodgerBlue', '#1E90FF', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(92, 'CornflowerBlue', '#6495ED', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(93, 'MediumSlateBlue', '#7B68EE', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(94, 'RoyalBlue', '#4169E1', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(95, 'Blue', '#0000FF', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(96, 'MediumBlue', '#0000CD', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(97, 'DarkBlue', '#00008B', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(98, 'Navy', '#000080', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(99, 'MidnightBlue', '#191970', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(100, 'Cornsilk', '#FFF8DC', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(101, 'BlanchedAlmond', '#FFEBCD', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(102, 'Bisque', '#FFE4C4', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(103, 'NavajoWhite', '#FFDEAD', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(104, 'Wheat', '#F5DEB3', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(105, 'BurlyWood', '#DEB887', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(106, 'Tan', '#D2B48C', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(107, 'RosyBrown', '#BC8F8F', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(108, 'SandyBrown', '#F4A460', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(109, 'Goldenrod', '#DAA520', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(110, 'DarkGoldenrod', '#B8860B', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(111, 'Peru', '#CD853F', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(112, 'Chocolate', '#D2691E', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(113, 'SaddleBrown', '#8B4513', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(114, 'Sienna', '#A0522D', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(115, 'Brown', '#A52A2A', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(116, 'Maroon', '#800000', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(117, 'White', '#FFFFFF', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(118, 'Snow', '#FFFAFA', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(119, 'Honeydew', '#F0FFF0', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(120, 'MintCream', '#F5FFFA', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(121, 'Azure', '#F0FFFF', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(122, 'AliceBlue', '#F0F8FF', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(123, 'GhostWhite', '#F8F8FF', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(124, 'WhiteSmoke', '#F5F5F5', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(125, 'Seashell', '#FFF5EE', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(126, 'Beige', '#F5F5DC', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(127, 'OldLace', '#FDF5E6', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(128, 'FloralWhite', '#FFFAF0', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(129, 'Ivory', '#FFFFF0', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(130, 'AntiqueWhite', '#FAEBD7', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(131, 'Linen', '#FAF0E6', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(132, 'LavenderBlush', '#FFF0F5', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(133, 'MistyRose', '#FFE4E1', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(134, 'Gainsboro', '#DCDCDC', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(135, 'LightGrey', '#D3D3D3', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(136, 'Silver', '#C0C0C0', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(137, 'DarkGray', '#A9A9A9', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(138, 'Gray', '#808080', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(139, 'DimGray', '#696969', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(140, 'LightSlateGray', '#778899', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(141, 'SlateGray', '#708090', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(142, 'DarkSlateGray', '#2F4F4F', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(143, 'Black', '#000000', '2018-11-05 02:12:30', '2018-11-05 02:12:30');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `id` int(11) NOT NULL,
  `currency_name` varchar(150) NOT NULL,
  `currency_sym` varchar(150) NOT NULL,
  `currency_code` varchar(150) NOT NULL,
  `exchange_rate` varchar(150) NOT NULL,
  `publish` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`id`, `currency_name`, `currency_sym`, `currency_code`, `exchange_rate`, `publish`, `status`, `date`) VALUES
(5, 'rupee', '₹', '₹', '70', 1, 0, '2021-09-17 10:58:49');

-- --------------------------------------------------------

--
-- Table structure for table `facebook_chat`
--

CREATE TABLE `facebook_chat` (
  `id` int(11) NOT NULL,
  `page_id` varchar(255) NOT NULL,
  `fb_chat_status` enum('0','1') NOT NULL COMMENT '0="Disable" 1="Enable"',
  `status` tinyint(4) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `facebook_chat`
--

INSERT INTO `facebook_chat` (`id`, `page_id`, `fb_chat_status`, `status`, `date`) VALUES
(1, 'facebook.com', '0', 0, '2021-09-17 13:08:24');

-- --------------------------------------------------------

--
-- Table structure for table `facebook_pixel`
--

CREATE TABLE `facebook_pixel` (
  `id` int(11) NOT NULL,
  `pixel_id` varchar(255) NOT NULL,
  `fb_pix_status` enum('0','1') NOT NULL COMMENT '0="Disable" 1="Enable"',
  `status` tinyint(4) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `facebook_pixel`
--

INSERT INTO `facebook_pixel` (`id`, `pixel_id`, `fb_pix_status`, `status`, `date`) VALUES
(1, 'Facebook pixel', '0', 0, '2021-09-17 13:12:51');

-- --------------------------------------------------------

--
-- Table structure for table `flashdeal`
--

CREATE TABLE `flashdeal` (
  `id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `bg_color` varchar(255) NOT NULL,
  `txt_color` varchar(255) NOT NULL,
  `banner_img` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `flash_discount_type` int(11) NOT NULL COMMENT '1="Percentage" 2="Flat"',
  `flash_discount_amt` varchar(255) NOT NULL,
  `flash_featured_status` tinyint(4) NOT NULL,
  `flash_publish_status` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `flashdeal`
--

INSERT INTO `flashdeal` (`id`, `product_id`, `title`, `bg_color`, `txt_color`, `banner_img`, `start_date`, `end_date`, `flash_discount_type`, `flash_discount_amt`, `flash_featured_status`, `flash_publish_status`, `status`, `date`) VALUES
(1, '3', 'flasdfeal', 'blaci', 'black', '81SdJG3OUjL__SL1500_22.jpg', '2021-09-17', '2021-09-23', 1, '100', 0, 0, 0, '2021-09-17 09:26:51'),
(2, '4', 'flashdeal 2 ', 'Megenta', 'white', 'product_9_11.jpg', '2021-09-16', '2021-09-20', 0, '100', 0, 0, 0, '2021-09-17 09:27:18'),
(3, '4', 'flashdeal 33', 'orange', 'Black', 'product_9_12.jpg', '2021-09-22', '2021-09-30', 1, '10', 1, 0, 0, '2021-09-17 09:27:30'),
(6, '[\"3\",\"4\"]', 'Holiday Sale', 'bclae', 'lklklkh', 'product_9_14.jpg', '2021-09-16', '2021-09-20', 2, '100', 0, 0, 0, '2021-09-18 08:41:57');

-- --------------------------------------------------------

--
-- Table structure for table `general_setting`
--

CREATE TABLE `general_setting` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `company_add` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `number` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `site_logo` varchar(255) NOT NULL,
  `facebook_login` varchar(150) NOT NULL,
  `instagram_login` varchar(150) NOT NULL,
  `twitter_login` varchar(150) NOT NULL,
  `youtube_login` varchar(150) NOT NULL,
  `google_plus_login` varchar(150) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `general_setting`
--

INSERT INTO `general_setting` (`id`, `name`, `company_add`, `description`, `number`, `email`, `site_logo`, `facebook_login`, `instagram_login`, `twitter_login`, `youtube_login`, `google_plus_login`, `status`, `date`) VALUES
(1, 'ecommerce', 'Ratlam', 'general setting description', 1234567890, 'company@gmail.com', 'logo-img1.png', 'facebook.com', 'instagram.com', 'twitter.com', 'youtube.com', 'googleplus.com', 0, '2021-09-14 12:29:48');

-- --------------------------------------------------------

--
-- Table structure for table `google_analytics`
--

CREATE TABLE `google_analytics` (
  `id` int(11) NOT NULL,
  `tracking_id` varchar(255) NOT NULL,
  `featured` enum('0','1') NOT NULL COMMENT '0="NotFeatured" 1="Featured"',
  `status` tinyint(4) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `google_analytics`
--

INSERT INTO `google_analytics` (`id`, `tracking_id`, `featured`, `status`, `date`) VALUES
(1, 'google tracking id', '1', 0, '2021-09-14 08:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `home_banner`
--

CREATE TABLE `home_banner` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `banner` varchar(250) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home_banner`
--

INSERT INTO `home_banner` (`id`, `title`, `banner`, `status`, `date`) VALUES
(1, 'Banner', '06.png', 1, '2021-09-11 11:46:48');

-- --------------------------------------------------------

--
-- Table structure for table `home_top_slider`
--

CREATE TABLE `home_top_slider` (
  `id` int(11) NOT NULL,
  `slider` varchar(250) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home_top_slider`
--

INSERT INTO `home_top_slider` (`id`, `slider`, `title`, `status`, `date`) VALUES
(1, '8.png', 'Top Slider', 0, '2021-09-11 10:53:08');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `lang_name` varchar(255) NOT NULL,
  `lang_code` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `lang_name`, `lang_code`, `status`, `date`) VALUES
(2, 'English', 'EN', 1, '2021-09-13 09:11:02'),
(3, 'ARABIC', 'AB', 1, '2021-09-13 19:01:42'),
(17, 'Mandrin', 'MD', 1, '2021-09-13 19:01:27');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `sender_email` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `name`, `user_email`, `sender_email`, `status`, `date`) VALUES
(1, 'rahul', 'rahul@gmail.com', '', 0, '2021-09-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pickup_point`
--

CREATE TABLE `pickup_point` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `number` varchar(150) NOT NULL,
  `manager` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pickup_point`
--

INSERT INTO `pickup_point` (`id`, `name`, `location`, `number`, `manager`, `status`, `date`) VALUES
(5, 'Head Department', 'Surat', '9827641480', 'Admin', 0, '2021-09-14 12:48:40');

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policy`
--

CREATE TABLE `privacy_policy` (
  `id` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `privacy_policy`
--

INSERT INTO `privacy_policy` (`id`, `description`, `status`, `date`) VALUES
(1, 'Company\'s privacy policy', 0, '2021-09-11 09:00:46');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `prod_reg_id` varchar(150) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `category_id` varchar(250) NOT NULL,
  `subcategory_id` varchar(250) NOT NULL,
  `sub_subcategory_id` varchar(250) NOT NULL,
  `brand` varchar(250) NOT NULL,
  `unit` varchar(150) NOT NULL,
  `main_image` varchar(255) NOT NULL,
  `thumbnail_image` varchar(255) NOT NULL,
  `publish` tinyint(4) NOT NULL,
  `featured` tinyint(4) NOT NULL,
  `best_seller_status` tinyint(4) NOT NULL,
  `flashdeal` tinyint(4) NOT NULL,
  `video_type` varchar(255) NOT NULL,
  `video_link` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `meta_image` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `base_price` int(11) NOT NULL,
  `purchase_price` int(11) NOT NULL,
  `prod_tax` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `discount_type` int(11) NOT NULL COMMENT '1="Percentage" 2="Flat"',
  `flashdeal_title` varchar(255) NOT NULL,
  `bg_color` varchar(255) NOT NULL,
  `txt_color` varchar(255) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `prod_description` text NOT NULL,
  `descrip_image` varchar(255) NOT NULL,
  `descrip_video` varchar(255) NOT NULL,
  `shipping_cost` int(11) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `prod_reg_id`, `product_name`, `category_id`, `subcategory_id`, `sub_subcategory_id`, `brand`, `unit`, `main_image`, `thumbnail_image`, `publish`, `featured`, `best_seller_status`, `flashdeal`, `video_type`, `video_link`, `meta_title`, `meta_description`, `meta_image`, `color`, `base_price`, `purchase_price`, `prod_tax`, `discount`, `discount_type`, `flashdeal_title`, `bg_color`, `txt_color`, `banner_image`, `start_date`, `end_date`, `prod_description`, `descrip_image`, `descrip_video`, `shipping_cost`, `pdf`, `status`, `date`) VALUES
(3, 'P000003', 'Dell Laptop', '106', '109', '112', '1', 'pc', '81SdJG3OUjL__SL1500_3.jpg', '81SdJG3OUjL__SL1500_3.jpg', 1, 1, 1, 1, '1', 'www.youtube.com', 'dell laptop', 'dell laptop', '81SdJG3OUjL__SL1500_3.jpg', '[]', 50000, 55000, 18, 500, 2, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'dell laptop', '', '', 40, '', 0, '2021-09-15 14:20:17'),
(4, 'P000004', 'Shoes', '106', '115', '118', 'Nike', 'pc', 'product_9_2.jpg', 'product_9_1_thumb.jpg', 0, 0, 0, 0, '2', 'www.vimeo.com', 'kid shoes', 'shoes for the kid', '', '[]', 2000, 2500, 18, 10, 1, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'good product', '', '', 100, '', 0, '2021-09-15 14:36:09'),
(5, 'P000005', 'LED TV', '106', '117', '112', 'LG', 'pc', '81SdJG3OUjL__SL1500_11.jpg', '81SdJG3OUjL__SL1500_11.jpg', 0, 0, 0, 0, '2', 'www.vimeo.com', 'best led tv', 'tv description', '81SdJG3OUjL__SL1500_11.jpg', '[]', 10000, 12000, 11000, 10, 1, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'sdfsad', '', '', 100, '', 0, '2021-09-15 14:46:27'),
(6, 'P000006', 'Music System', '106', '117', '111', 'Boult', 'pc', '81SdJG3OUjL__SL1500_12.jpg', '81SdJG3OUjL__SL1500_12.jpg', 0, 0, 1, 0, '1', 'www.youtube.com', 'home theater', 'music system', '81SdJG3OUjL__SL1500_21.jpg', '[\"#F08080\",\"#FA8072\",\"#E9967A\",\"#FFA07A\"]', 20000, 22000, 18, 500, 2, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'music system description', '', '', 100, '', 0, '2021-09-15 14:54:21');

-- --------------------------------------------------------

--
-- Table structure for table `return_policy`
--

CREATE TABLE `return_policy` (
  `id` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `return_policy`
--

INSERT INTO `return_policy` (`id`, `description`, `status`, `date`) VALUES
(1, 'Return vegan artisan Helvetica. Tattooed Codeply Echo Park Godard kogi, next level irony ennui twee squid fap selvage. Meggings flannel Brooklyn literally small batch, mumblecore PBR try-hard kale chips. Brooklyn vinyl lumbersexual bicycle rights, viral fap cronut leggings squid chillwave pickled gentrify mustache. 3 wolf moon hashtag church-key Odd Future. Austin messenger bag normcore, Helvetica Williamsburg sartorial tote bag distillery Portland before they sold out gastropub taxidermy Vice.', 0, '2021-09-11 09:15:20');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `show_password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `name`, `email`, `password`, `show_password`, `status`, `date`) VALUES
(5, 'seller', 'seller@gmail.com', '25f9e794323b453885f5181f1b624d0b', '123456789', 0, '2021-09-14 13:26:05');

-- --------------------------------------------------------

--
-- Table structure for table `seller_commission`
--

CREATE TABLE `seller_commission` (
  `id` int(11) NOT NULL,
  `commission` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seller_commission`
--

INSERT INTO `seller_commission` (`id`, `commission`, `date`) VALUES
(1, '5', '2021-09-16 13:49:00');

-- --------------------------------------------------------

--
-- Table structure for table `seller_policy`
--

CREATE TABLE `seller_policy` (
  `id` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seller_policy`
--

INSERT INTO `seller_policy` (`id`, `description`, `status`, `date`) VALUES
(1, 'Shoreditch vegan artisan Helvetica. Tattooed Codeply Echo Park Godard kogi, next level irony ennui twee squid fap selvage. Meggings flannel Brooklyn literally small batch, mumblecore PBR try-hard kale chips. Brooklyn vinyl lumbersexual bicycle rights, viral fap cronut leggings squid chillwave pickled gentrify mustache. 3 wolf moon hashtag church-key Odd Future. Austin messenger bag normcore, Helvetica Williamsburg sartorial tote bag distillery Portland before they sold out gastropub taxidermy Vice.', 0, '2021-09-11 09:01:17');

-- --------------------------------------------------------

--
-- Table structure for table `seo_setting`
--

CREATE TABLE `seo_setting` (
  `id` int(11) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `auth_name` varchar(150) NOT NULL,
  `revisite_name` varchar(150) NOT NULL,
  `sitemap_link` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seo_setting`
--

INSERT INTO `seo_setting` (`id`, `keywords`, `auth_name`, `revisite_name`, `sitemap_link`, `description`) VALUES
(1, 'iit-jee', 'admin', 'user', 'google.co', 'best school');

-- --------------------------------------------------------

--
-- Table structure for table `smtp`
--

CREATE TABLE `smtp` (
  `id` int(11) NOT NULL,
  `option_name` varchar(255) NOT NULL,
  `option_value` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smtp`
--

INSERT INTO `smtp` (`id`, `option_name`, `option_value`, `status`) VALUES
(1, 'driver', 'smtp', 1),
(2, 'host', 'smtp.gmail.com', 1),
(3, 'port', '588', 1),
(4, 'username', 'user@gmail.com', 1),
(5, 'password', '123456789', 1),
(6, 'encryption', 'tls', 1),
(7, 'from_address', 'admin@gmail.com', 1),
(8, 'name_address', 'com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `socia_media_login`
--

CREATE TABLE `socia_media_login` (
  `id` int(11) NOT NULL,
  `google_login_conf` varchar(255) NOT NULL,
  `facebook_login_conf` varchar(255) NOT NULL,
  `twitter_login_conf` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `socia_media_login`
--

INSERT INTO `socia_media_login` (`id`, `google_login_conf`, `facebook_login_conf`, `twitter_login_conf`, `status`, `date`) VALUES
(1, 'google login details ', 'facebook login details', 'twitter login details', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `permission` varchar(150) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `email`, `permission`, `role`, `status`, `date`) VALUES
(4, 'staff', 'staff@gmail.com', 'Full', 'Sales Staff', 0, '2021-09-14 13:25:14');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `subcategory_id` int(11) NOT NULL,
  `subcategory_name` varchar(100) NOT NULL,
  `subcategory_category_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`subcategory_id`, `subcategory_name`, `subcategory_category_id`, `status`) VALUES
(1, 'Kid Care', 2, 0),
(2, 'Kid toy', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sub_subcategory`
--

CREATE TABLE `sub_subcategory` (
  `sub_subcategory_id` int(11) NOT NULL,
  `sub_subcategory_name` varchar(100) NOT NULL,
  `subsubcategory_subcategory_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `support_policy`
--

CREATE TABLE `support_policy` (
  `id` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `support_policy`
--

INSERT INTO `support_policy` (`id`, `description`, `status`, `date`) VALUES
(1, 'Support Policy Description', 0, '2021-09-11 08:56:45');

-- --------------------------------------------------------

--
-- Table structure for table `terms_conditions`
--

CREATE TABLE `terms_conditions` (
  `id` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `terms_conditions`
--

INSERT INTO `terms_conditions` (`id`, `description`, `status`, `date`) VALUES
(1, 'terms and condition may apply', 0, '2021-09-11 09:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `id` int(11) NOT NULL,
  `wallet` varchar(255) NOT NULL,
  `client_id` varchar(255) NOT NULL,
  `client_secret` varchar(255) NOT NULL,
  `client_email` varchar(255) NOT NULL,
  `sandbox_mode` tinyint(4) NOT NULL,
  `activate` tinyint(4) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`id`, `wallet`, `client_id`, `client_secret`, `client_email`, `sandbox_mode`, `activate`, `date`) VALUES
(1, 'PAYPAL', 'rahul', 'rahul12346', '', 1, 1, '2021-09-14 14:41:18'),
(2, 'STRIPE', 'ravi', 'ravi123', '', 1, 1, '2021-09-14 14:54:08'),
(3, 'INSTAMOJO', 'rajat', 'rajat132', '', 0, 1, '2021-09-14 15:01:42'),
(4, 'RAJORPAY', 'rajor', 'razor132', '', 1, 1, '2021-09-14 15:13:41'),
(5, 'PAYSTACK', 'paystack', 'paysack123', 'paystack@gmail.com', 1, 1, '2021-09-14 15:32:05'),
(6, 'VOGUEPAY', 'voguepay id', 'secret id', '', 1, 1, '2021-09-15 07:52:44'),
(7, 'SSLCOMMERZ', 'sslcommerz', 'sslcommerz123', '', 1, 1, '2021-09-15 08:03:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attribute`
--
ALTER TABLE `attribute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`),
  ADD UNIQUE KEY `categories_id` (`categories_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facebook_chat`
--
ALTER TABLE `facebook_chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facebook_pixel`
--
ALTER TABLE `facebook_pixel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flashdeal`
--
ALTER TABLE `flashdeal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_setting`
--
ALTER TABLE `general_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `google_analytics`
--
ALTER TABLE `google_analytics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_banner`
--
ALTER TABLE `home_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_top_slider`
--
ALTER TABLE `home_top_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pickup_point`
--
ALTER TABLE `pickup_point`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacy_policy`
--
ALTER TABLE `privacy_policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `return_policy`
--
ALTER TABLE `return_policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_commission`
--
ALTER TABLE `seller_commission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_policy`
--
ALTER TABLE `seller_policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_setting`
--
ALTER TABLE `seo_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smtp`
--
ALTER TABLE `smtp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `option_name_2` (`option_name`),
  ADD KEY `option_name` (`option_name`);

--
-- Indexes for table `socia_media_login`
--
ALTER TABLE `socia_media_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`subcategory_id`);

--
-- Indexes for table `sub_subcategory`
--
ALTER TABLE `sub_subcategory`
  ADD PRIMARY KEY (`sub_subcategory_id`);

--
-- Indexes for table `support_policy`
--
ALTER TABLE `support_policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms_conditions`
--
ALTER TABLE `terms_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attribute`
--
ALTER TABLE `attribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `facebook_chat`
--
ALTER TABLE `facebook_chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facebook_pixel`
--
ALTER TABLE `facebook_pixel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `flashdeal`
--
ALTER TABLE `flashdeal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `general_setting`
--
ALTER TABLE `general_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `google_analytics`
--
ALTER TABLE `google_analytics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_banner`
--
ALTER TABLE `home_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_top_slider`
--
ALTER TABLE `home_top_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pickup_point`
--
ALTER TABLE `pickup_point`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `privacy_policy`
--
ALTER TABLE `privacy_policy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `return_policy`
--
ALTER TABLE `return_policy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seller_commission`
--
ALTER TABLE `seller_commission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seller_policy`
--
ALTER TABLE `seller_policy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seo_setting`
--
ALTER TABLE `seo_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `socia_media_login`
--
ALTER TABLE `socia_media_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_subcategory`
--
ALTER TABLE `sub_subcategory`
  MODIFY `sub_subcategory_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_policy`
--
ALTER TABLE `support_policy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `terms_conditions`
--
ALTER TABLE `terms_conditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
