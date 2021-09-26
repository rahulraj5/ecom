-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2021 at 10:14 AM
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
-- Database: `indocliq`
--

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `shop_id` int(11) NOT NULL,
  `shop_reg_id` varchar(50) NOT NULL,
  `shop_registration_no` varchar(100) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `mobile_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `shop_logo` text NOT NULL,
  `shop_image_desktop` text NOT NULL,
  `shop_image_mobile` text NOT NULL,
  `gst_number` varchar(20) NOT NULL,
  `pan_no` varchar(15) NOT NULL,
  `adhar_no` varchar(15) NOT NULL,
  `pan_image` varchar(255) NOT NULL,
  `adhar_image` varchar(255) NOT NULL,
  `owner_image` text NOT NULL,
  `gumasta_image` varchar(255) NOT NULL,
  `shop_address` text NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `shop_pincode` int(11) NOT NULL,
  `shop_latitude` varchar(50) NOT NULL,
  `shop_longitude` varchar(100) NOT NULL,
  `shopping_categories` varchar(255) NOT NULL,
  `shopping_specialized` varchar(255) NOT NULL,
  `shop_type_id` int(11) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `bank_acc_no` varchar(100) NOT NULL,
  `bank_ifsc_code` varchar(100) NOT NULL,
  `bank_branch` varchar(255) NOT NULL,
  `gst_image` varchar(255) NOT NULL,
  `account_holder_name` varchar(255) NOT NULL,
  `cancel_check_image` varchar(255) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `total_sales` int(11) NOT NULL,
  `meta_tags` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modify_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `featured_status` tinyint(1) NOT NULL,
  `order_counts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`shop_id`, `shop_reg_id`, `shop_registration_no`, `owner_name`, `mobile_no`, `email`, `password`, `shop_name`, `shop_logo`, `shop_image_desktop`, `shop_image_mobile`, `gst_number`, `pan_no`, `adhar_no`, `pan_image`, `adhar_image`, `owner_image`, `gumasta_image`, `shop_address`, `city_name`, `state_name`, `company`, `country`, `shop_pincode`, `shop_latitude`, `shop_longitude`, `shopping_categories`, `shopping_specialized`, `shop_type_id`, `bank_name`, `bank_acc_no`, `bank_ifsc_code`, `bank_branch`, `gst_image`, `account_holder_name`, `cancel_check_image`, `last_login`, `total_sales`, `meta_tags`, `create_date`, `modify_date`, `status`, `featured_status`, `order_counts`) VALUES
(4, 'MHJ0OMHLP', 'dsfdf', 'Nirbhay Ganderff', 'OTgyNzY0MTQ4MA==', 'nirbhay.espsofttech@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'ITSPARK ', 'l3.png', 'l31.png', 'l31.png', 'MTIzNDU2Nzg5NQ==', 'TkRnME5UUTFORFU', 'NTQ0NTY0NjQ2NDY', '', 'l3.png', 'l3.png', '', 'Indore Railway Station, Chhoti Gwaltoli, Indore, Madhya Pradesh, India', '', '', '', '', 0, '23.334169', '75.037636', 'Mens Tshirt,Jwellery', 'Mens Tshirt,Jwellery', 1, '', '', '', '', '', '', '', '2020-07-18 07:03:10', 0, '', '2019-11-06 07:16:44', '2019-11-06 11:46:44', 1, 1, 0),
(5, '88GSJ7', '45454545', '4545454', 'Nzk3NDQxOTUyMQ==', 'admin@admin.com', 'e10adc3949ba59abbe56e057f20f883e', 's1', 'l4.png', 'l41.png', 'l4.png', 'ODc4Nzg3ODc4Nzg3ODc=', 'Vm0wd2QyUXlWa1p', 'TnpnM09EYzROemc', 'demopancard.jpg', 'aadhar-card-sample-picture.jpg', 'l4.png', '', 'Indore Railway Station, Chhoti Gwaltoli, Indore, Madhya Pradesh, India', '', '', '', '', 0, '22.718670', '75.855710', 'furniture,Jwellery,Gift', '', 1, 'sbi', '123456789', '3216549687', 'sbi', '', 'Rajat verma', '', '2020-07-22 06:19:19', 0, '', '2019-11-14 02:10:34', '2019-11-14 06:40:34', 1, 1, 0),
(6, 'IAH49G0G', 'show123456', 'itspark', 'NzUyMTQ4NTIyMg==', 'admin@admin.com', 'e10adc3949ba59abbe56e057f20f883e', 'itspark', 'l5.png', 'l5.png', 'l5.png', 'ODc4Nzg3ODc4Nzg3ODc=', 'VmtjMWQySnJNSGR', 'Nzg3ODc4Nzg3ODc', 'demopancard1.jpg', 'aadhar-card-sample-picture1.jpg', 'itspark1.jpg', '', 'Indore Railway Station, Chhoti Gwaltoli, Indore, Madhya Pradesh, India', '', '', '', '', 0, '22.738650', '75.886150', 'Gift,Electronics', '', 1, 'sf', 'asdasdds', 'dfdsads', 'sad', '', '', '', '2020-06-29 10:32:03', 0, '', '2019-12-10 03:23:30', '2019-12-10 07:53:30', 1, 1, 0),
(8, '52A8DTJ', '457897', 'nirbhay gander', 'NzQxMjU4OTYzNQ==', 'nirbhay.espsofttech@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'ITSPARK', 'Your uploaded image file is blank.', 'm2.png', 'm2.png', 'ODc4Nzg3ODc4Nzg3ODc=', 'Vm0weE1HRnJNVmh', 'NTQ1NDU0NTQ1NA=', 'demopancard211.jpg', 'aadhar-card-sample-picture3.jpg', 'demo11.jpg', '', '155,vijay nagar indore, 155,vijay nagar indore', '', '', '', '', 0, '22.71720790', '75.86841130', 'Electronics', 'Jwellery', 1, '', '', '', '', '', '', '', '2020-06-29 10:30:04', 0, '', '2019-12-16 03:17:27', '2019-12-16 07:47:27', 1, 1, 0),
(9, 'L5KQLG', 'YTR123456', 'nirbhay gander', 'MDg5NjIzMjc0ODg=', 'nirbhay.itspark@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'itspark', '172.png', '172.png', '172.png', 'Nzg3ODc4Nzg3OA==', 'Vm0wd2QyUXlWa1p', 'Nzg3ODc4Nzg3ODc', 'demopancard2.jpg', 'aadhar-card-sample-picture2.jpg', 'itspark.jpg', 'blb3.png', '155,vijay nagar indore, 155,vijay nagar indore', '', '', '', '', 0, '22.71720790', '75.86841130', 'Mens Tshirt,Jwellery', 'furniture,Jwellery', 1, 'SBI', 'asdasdds', 'df', 'dsaf', '', '', 'bag5.png', '2020-08-17 07:20:37', 0, 'furniture,jwellery', '2019-12-17 05:10:17', '2019-12-17 09:40:17', 1, 1, 0),
(10, 'J2N5RST8', '123456', 'rahul', 'Nzk3NDQxOTUyMQ==', 'rahul.itspark@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'rahul', 'Your uploaded image file is blank.', '17375_1592900607.jpg', '17375_1592900607.jpg', 'MTIzNDU2Nzg5', 'VmpGamVFMUZOVmh', '', '', '', '17375_1592900607.jpg', '', 'Indore Railway Station, Chhoti Gwaltoli, Indore, Madhya Pradesh, India', '', '', '', '', 0, '22.71720790', '75.86841130', 'Jwellery,Gift,Kids', '', 1, 'sbi', '123456798', '123465', 'abcd', '', 'rahul', '', '2020-06-30 12:43:57', 0, '', '2020-06-19 17:53:57', '2020-06-19 10:53:57', 1, 0, 0),
(11, 'O4M8EP2', '123qweasd', 'Sachin Karma', 'OTY4NTgxNDc0Mw==', 'sachinkkarma@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Riya Boutique', 'RiyaBoutique.png', '265100_-_Copy1.jpg', 'm21.png', 'R1NUSU4xMjNxd2U=', 'Vm0wd2VFNUdiRmR', 'VmtaYVUxTnRWbkp', 'RiyaBoutique.png', 'RiyaBoutique.png', 'RiyaBoutique.png', '', 'Indore Railway Station, Chhoti Gwaltoli, Indore, Madhya Pradesh, India', '', '', '', '', 0, '22.71720790', '75.86841130', 'Gift,Kids,Womens', '', 1, 'AXIS', '7412589632', '415288', 'indore', 'RiyaBoutique.png', 'Sachin Karma', 'download.jpg', '2020-08-17 07:21:00', 0, '', '2020-06-22 14:45:55', '2020-06-22 07:45:55', 3, 1, 0),
(12, '3Q5R3J4D', '123321', 'ram', 'OTgyNzY0MTQ4MA==', 'ram@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'ram store', '5.jpg', '5.jpg', '5.jpg', 'YXNkZmcyNTYzaA==', 'YXNkZmcyNTYzaGE', 'ODk3OTg3OTg3OTc', '', '', 'rj.jpg', '', 'Indore Railway Station, Chhoti Gwaltoli, Indore, Madhya Pradesh, India', '', '', '', '', 0, '22.71720790', '75.86841130', 'Mens Tshirt,Gift,Electronics,Grocery', 'Mens Tshirt', 1, 'sbi', '123456798546', 'sbin1212000', 'sni', '', 'ram verma', '', '2020-06-29 12:33:58', 0, 'as', '2020-06-29 19:33:58', '2020-06-29 12:33:58', 1, 0, 0),
(13, 'NEDTMAJBS', '987789', 'warma', 'MTIzNDU2Nzg5MA==', 'egal@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'egale', '', '', '', 'MTIzMTIzMTIzMTIz', 'MTIzMTIzMTIz', 'MTIzMTIzMTIzMTI', '', '', '', '', 'Indore Railway Station, Chhoti Gwaltoli, Indore, Madhya Pradesh, India', '', '', '', '', 0, '22.71720790', '75.86841130', 'Mens Tshirt,Jwellery,Electronics,Grocery', '', 1, 'asdasd', '12312312312312', 'sdsdasd', 'sdasd', '', 'asdasd', '', '2020-07-04 05:38:19', 0, '', '2020-07-04 12:36:22', '2020-07-04 05:36:22', 3, 0, 0),
(14, 'CKN8KHPQ4', 'qwqwe', 'qweqw', 'YXNm', 'admain@admin.coa', 'e10adc3949ba59abbe56e057f20f883e', 'aasa', '2309_1575457647.jpg', '2309_1575452698.jpg', '2309_1575452698.jpg', 'YXNkYXM=', 'WVhOaw==', '', '', '', '2309_1575367614.jpg', '', 'Indore Railway Station, Chhoti Gwaltoli, Indore, Madhya Pradesh, India', '', '', '', '', 0, '22.71720790', '75.86841130', '', '', 2, 'asdas', 'asd', 'asd', 'asd', '', 'asdas', '', '2020-07-04 09:22:10', 0, '', '2020-07-04 16:17:47', '2020-07-04 09:17:47', 3, 0, 0),
(15, 'QOQDNQE3I', '234234', 'ssdfsdjk', 'Nzg5NDU2MTIzMA==', 'sdfsd@sdf', 'e10adc3949ba59abbe56e057f20f883e', 'dmart', 'Untitled-2.png', 'Untitled-2.png', 'logo52.png', 'MjMyMzQyMw==', 'Vmtaa2QxUnJNVVp', 'VFdwTk1FMXFUWGx', 'paytm.png', 'paytm.png', 'demo12.jpg', '', 'Indore Railway Station, Chhoti Gwaltoli, Indore, Madhya Pradesh, India', '', '', '', '', 0, '22.71720790', '75.86841130', 'furniture,Mens Tshirt,Jwellery,Gift', 'sofa,Diwali gift', 1, 'asdasd', '12123123123', '123123', 'aweqw', 'logo5.png', 'asdasd', '', '2020-07-20 13:25:49', 0, '', '2020-07-20 13:44:55', '2020-07-20 06:44:55', 3, 0, 0),
(16, 'OMB7RSNIT', 'sdfsd', 'sdfs', 'c2RzZmRm', 'sdfsdfsdfsdsdfsd@sd', 'd41d8cd98f00b204e9800998ecf8427e', 'sdfsd', '', '', '', 'c2Rmc2Q=', 'c2Rmc2Rm', 'c2Rmcw==', '', '', '', '', 'Indore Railway Station, Chhoti Gwaltoli, Indore, Madhya Pradesh, India', '', '', '', '', 0, '22.71720790', '75.86841130', '', '', 1, 'sdfsd', 'sdfsdf', 'sdfsd', '', '', 'sdfsdf', '', '2020-07-20 13:25:44', 0, '', '2020-07-20 20:25:31', '2020-07-20 13:25:31', 3, 0, 0),
(18, 'H9K6H4CJ', '12345678', 'vijay', 'OTQyNDg5MTMyMA==', 'vijaykarma@gmail.com', 'c33367701511b4f6020ec61ded352059', 'aarna fashion store', 'IMG_20180529_2150121.jpg', '265100.jpg', 'l311.png', 'MTJhYmNwazEyMzlhem0x', 'Vm1wR1lXRXhUWGx', 'Vm10YVlWVXhUblJ', 'IMG_20180529_2150121.jpg', 'IMG_20180529_2150121.jpg', 'IMG_20180529_2150121.jpg', 'IMG_20180529_2150121.jpg', 'sindhi colony indore', '', '', '', '', 0, '22.71720790', '75.86841130', 'Electronics', '', 1, 'sbi', '123456789012', 'sbi0n1234', 'iit', 'IMG_20180529_2150121.jpg', 'vijay k', 'IMG_20180529_2150121.jpg', '2020-07-21 09:48:45', 0, '', '2020-07-21 00:35:44', '2020-07-20 17:35:44', 1, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`shop_id`),
  ADD UNIQUE KEY `shop_registration_no` (`shop_registration_no`),
  ADD KEY `shop_idx` (`shop_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
