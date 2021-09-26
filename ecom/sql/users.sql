-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2021 at 07:03 AM
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
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `reg_id` varchar(250) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `show_password` varchar(250) NOT NULL,
  `mobile_no` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `house_no` varchar(250) NOT NULL,
  `address` text NOT NULL,
  `country_isd_code` int(11) NOT NULL DEFAULT 91,
  `zipcode` int(11) NOT NULL,
  `latitude` varchar(250) NOT NULL,
  `longitude` varchar(250) NOT NULL,
  `device_id` varchar(250) NOT NULL COMMENT '1="android" 2="ios"',
  `device_type` varchar(250) NOT NULL,
  `fcm_token` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0="Deactive" 1="Active" 3="Delete"',
  `create_date` datetime NOT NULL,
  `modify_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `area_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `reg_id`, `first_name`, `last_name`, `email`, `password`, `show_password`, `mobile_no`, `image`, `house_no`, `address`, `country_isd_code`, `zipcode`, `latitude`, `longitude`, `device_id`, `device_type`, `fcm_token`, `status`, `create_date`, `modify_date`, `area_id`) VALUES
(4, 'M6GM9LLI', 'Rahul', 'Solanki', 'rahul@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', '9827641480', 'imgpsh_fullsize_anim_(1).png', '', 'vijay nagar indore', 91, 452001, '22.71720790', '75.86841130', '', '', '', 1, '2019-10-29 14:06:33', '2019-10-29 13:06:33', 0),
(16, '66828168', '9827641480', '', '23423asd3#rwer', 'e10adc3949ba59abbe56e057f20f883e', '', 'asdas', '', '', '', 91, 0, '', '', '', '', '', 1, '0000-00-00 00:00:00', '2021-08-23 16:07:52', 0),
(17, '39852775', 'rahulraj solanki', '', 'rahulraj@gmail.com', '839d74fabe26787580102075d1d5fa08', '', '7974419521', '', '', '', 91, 0, '', '', '', '', '', 1, '0000-00-00 00:00:00', '2021-08-23 17:51:31', 0),
(18, '04532810', 'vivek chouhan', '', 'vivek@gmail.com', '839d74fabe26787580102075d1d5fa08', '', '9924448090', '', '', '', 91, 0, '', '', '', '', '', 1, '0000-00-00 00:00:00', '2021-08-23 17:54:54', 0),
(19, '00491856', 'ravi', '', 'ravi@gmail.com', '839d74fabe26787580102075d1d5fa08', '', '9924448091', '', '', '', 91, 0, '', '', '', '', '', 1, '0000-00-00 00:00:00', '2021-08-23 18:02:36', 0),
(20, '20308565', 'ravi', '', 'ravi@gmail.com', '839d74fabe26787580102075d1d5fa08', '', '9924448092', '', '', '', 91, 0, '', '', '', '', '', 1, '0000-00-00 00:00:00', '2021-08-23 18:04:28', 0),
(21, '36785273', 'rajatraj', '', 'rajat@gmail.com', '839d74fabe26787580102075d1d5fa08', '', '9924448094', '', '', '', 91, 0, '', '', '', '', '', 1, '0000-00-00 00:00:00', '2021-08-23 18:07:35', 0),
(22, '23671419', 'boron', '', 'boron@gmail.com', '839d74fabe26787580102075d1d5fa08', '', '9924448095', '', '', '', 91, 0, '', '', '', '', '', 1, '0000-00-00 00:00:00', '2021-08-23 18:09:49', 0),
(23, '18417456', 'fooler', '', 'fooler@gmail.com', '839d74fabe26787580102075d1d5fa08', '', '9924480904', '', '', '', 91, 0, '', '', '', '', '', 1, '0000-00-00 00:00:00', '2021-08-23 18:14:39', 0),
(24, '52041027', 'vikram', '', 'vikram@gmail.com', '839d74fabe26787580102075d1d5fa08', '', '9924480907', '', '', '', 91, 0, '', '', '', '', '', 1, '0000-00-00 00:00:00', '2021-08-23 18:24:36', 0),
(25, '31907237', 'gorav', '', 'gorav@gmail.com', '839d74fabe26787580102075d1d5fa08', '', '9924448099', '', '', '', 91, 0, '', '', '', '', '', 1, '0000-00-00 00:00:00', '2021-08-23 18:31:39', 0),
(26, '61210039', 'tarun', '', 'tarun@gmail.com', '839d74fabe26787580102075d1d5fa08', '', '9924448097', '', '', '', 91, 0, '', '', '', '', '', 1, '0000-00-00 00:00:00', '2021-08-23 18:39:51', 0),
(27, '91753757', 'rahuil', '', 'rasd@gmail.com', '839d74fabe26787580102075d1d5fa08', '', '9924448190', '', '', '', 91, 0, '', '', '', '', '', 1, '0000-00-00 00:00:00', '2021-08-23 18:45:52', 0),
(28, '44784968', 'jagan', '', 'sdf@gmail.com', '839d74fabe26787580102075d1d5fa08', '', '7568445612', '', '', '', 91, 0, '', '', '', '', '', 1, '0000-00-00 00:00:00', '2021-08-23 18:50:43', 0),
(29, '53000979', 'huad', '', 'hasdfz@gmail.com', '839d74fabe26787580102075d1d5fa08', '', '9923338090', '', '', '', 91, 0, '', '', '', '', '', 1, '0000-00-00 00:00:00', '2021-08-23 18:54:39', 0),
(30, '74732512', 'asdf', '', 'rajat@gmail.com', '839d74fabe26787580102075d1d5fa08', '', '9827641481', '', '', '', 91, 0, '', '', '', '', '', 1, '0000-00-00 00:00:00', '2021-08-27 10:14:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reg_id` (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
