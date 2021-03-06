-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 04:27 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `king`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_orders`
--

CREATE TABLE `admin_orders` (
  `id` int(255) NOT NULL,
  `amount` double(10,2) NOT NULL,
  `stock_point` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `status` enum('accepted','declined') NOT NULL DEFAULT 'accepted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_orders`
--

INSERT INTO `admin_orders` (`id`, `amount`, `stock_point`, `time`, `date`, `status`) VALUES
(1, 200030.00, '8573243428', '01:23:54', '2021-02-22', 'declined'),
(2, 50000.00, '5474823455', '01:24:40', '2021-02-22', 'accepted'),
(3, 5000.00, '8573243428', '01:25:39', '2021-02-22', 'declined');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `months` varchar(255) NOT NULL,
  `turnover` varchar(255) NOT NULL,
  `gift_amount` varchar(255) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `name`, `months`, `turnover`, `gift_amount`, `status`) VALUES
(1, 'Silver ', '6 Month', '6 Lakh ', '10,000/- Cash Extra + 1 Family 4 Member Health Insurance for 1 Year\r\n', 'off'),
(2, 'Gold ', '6 Month', '12 Lakh ', '20,000/- Cash Extra + 1 Family 4 Member Health Insurance for 1 Year', 'off'),
(3, 'Diamond', '6 Month', '24 Lakh ', '50,000/- Cash Extra + 1 Family 4 Member Health Insurance for 1 Year', 'off'),
(4, 'Diplomat ', '6 Month ', '48 Lakh', '100,000/- Cash Extra + 1 Family 4 Member Health Insurance for 1 Year', 'off'),
(5, 'Ambassador', '6 Month', '1 Core', '200,000/- Cash Extra + 1 Lakh (Bike/Gold) + 1 Family 4 Member Health Insurance for 1 Year', 'off');

-- --------------------------------------------------------

--
-- Table structure for table `payout`
--

CREATE TABLE `payout` (
  `pid` int(200) NOT NULL,
  `amount` int(20) NOT NULL,
  `balance` int(200) DEFAULT NULL,
  `purchase` int(200) DEFAULT NULL,
  `uid` int(11) NOT NULL,
  `stat` varchar(20) NOT NULL DEFAULT 'RED',
  `count` int(20) NOT NULL,
  `timetaken` int(20) NOT NULL,
  `desig` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payout`
--

INSERT INTO `payout` (`pid`, `amount`, `balance`, `purchase`, `uid`, `stat`, `count`, `timetaken`, `desig`) VALUES
(1, 1000, 300, 0, 1, 'GREEN', 0, 0, NULL),
(2, 1000, 31500, 11600, 9, 'GREEN', 0, 0, NULL),
(3, 1000, 300, 13100, 3, 'GREEN', 0, 0, NULL),
(5, 1000, 8900, 3100, 5, 'GREEN', 0, 0, NULL),
(6, 1000, 300, 6000, 6, 'RED', 0, 0, NULL),
(7, 1000, 1000, NULL, 7, 'RED', 0, 0, NULL),
(8, 1000, 1000, NULL, 8, 'RED', 0, 0, NULL),
(10, 1000, 3500, 500, 2, 'GREEN', 0, 0, NULL),
(11, 1000, 3500, 500, 2, 'GREEN', 0, 0, NULL),
(12, 1000, 3500, 500, 2, 'GREEN', 0, 0, NULL),
(13, 5000, 1060, 70800, 10, 'GREEN', 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE `purchase_details` (
  `time` time NOT NULL DEFAULT current_timestamp(),
  `date` date NOT NULL DEFAULT current_timestamp(),
  `pamount` int(100) NOT NULL,
  `uid` int(11) NOT NULL,
  `purid` int(11) NOT NULL,
  `shop_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_details`
--

INSERT INTO `purchase_details` (`time`, `date`, `pamount`, `uid`, `purid`, `shop_id`) VALUES
('20:02:59', '2021-02-09', 500, 9, 1, ''),
('20:02:59', '2021-02-09', 100, 9, 2, ''),
('20:02:59', '2021-02-09', 1000, 8, 3, ''),
('20:04:03', '2021-02-09', 500, 9, 4, ''),
('20:13:20', '2021-02-09', 500, 9, 5, ''),
('00:26:17', '2021-02-10', 500, 9, 6, ''),
('00:28:38', '2021-02-10', 500, 9, 7, ''),
('00:31:20', '2021-02-10', 500, 9, 8, ''),
('00:32:36', '2021-02-10', 500, 9, 9, ''),
('00:35:11', '2021-02-10', 500, 9, 10, ''),
('00:36:03', '2021-02-10', 500, 9, 11, ''),
('00:47:16', '2021-02-10', 500, 9, 12, ''),
('01:04:46', '2021-02-10', 500, 9, 13, ''),
('01:05:47', '2021-02-10', 500, 9, 14, ''),
('01:11:51', '2021-02-10', 500, 9, 15, ''),
('01:12:21', '2021-02-10', 500, 9, 16, ''),
('01:14:21', '2021-02-10', 500, 9, 17, ''),
('01:14:59', '2021-02-10', 500, 9, 18, ''),
('01:22:20', '2021-02-10', 500, 9, 19, ''),
('01:35:24', '2021-02-10', 500, 9, 20, ''),
('01:36:50', '2021-02-10', 500, 9, 21, ''),
('01:39:59', '2021-02-10', 500, 9, 22, '');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` int(255) NOT NULL,
  `shop_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `adhara` varchar(255) NOT NULL,
  `pan` varchar(255) NOT NULL,
  `uam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `balance` double(10,2) NOT NULL,
  `signnature` varchar(255) NOT NULL,
  `sales` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `shop_id`, `name`, `mobile`, `adhara`, `pan`, `uam`, `email`, `pass`, `balance`, `signnature`, `sales`) VALUES
(1, '8573243428', 'Naseem Khan', '7888687509', '1223', '123', '1233', 'naseem98550@gmail.com', '123', 50.00, '9f04d7fd4c259a42e2452a9dc75cd243.jpg', 0.00),
(2, '5474823455', 'Testing20_Jan', '7888687509', '819921', '9280980912', '9u01e209u0', '', '123', 0.00, '9f04d7fd4c259a42e2452a9dc75cd243.jpg', 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `signup_details`
--

CREATE TABLE `signup_details` (
  `designation` varchar(100) DEFAULT NULL,
  `count` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp(),
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phoneno` int(20) NOT NULL,
  `adhaarno` int(50) NOT NULL,
  `adhaarname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `adhaarpic` longtext NOT NULL,
  `bankname` varchar(100) NOT NULL,
  `accno` int(20) NOT NULL,
  `ifsccode` varchar(100) NOT NULL,
  `passbookpic` longtext NOT NULL,
  `asid` int(20) NOT NULL,
  `amount` int(20) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `profilepic` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup_details`
--

INSERT INTO `signup_details` (`designation`, `count`, `uid`, `date`, `time`, `email`, `password`, `phoneno`, `adhaarno`, `adhaarname`, `address`, `adhaarpic`, `bankname`, `accno`, `ifsccode`, `passbookpic`, `asid`, `amount`, `dob`, `profilepic`) VALUES
('DIRECTOR', 1000, 1, '2021-02-06', '11:57:35', 'bhavikkadam@gmail.com', '1234', 123456789, 147258369, 'wadw', 'Ghatkopar East', '4.jpg', 'ooooooo', 111111, '222222', '3.jpg', 0, 1000, '0000-00-00', NULL),
('', 2, 2, '2021-02-06', '14:14:57', 'tanvi@ABC.CD', '1234', 12345344, 123455, 'saxas', 'asxsax', '3.jpg', 'xxwdw', 1223, '12313', '4.jpg', 1, 1000, '0000-00-00', NULL),
('cc', 5000, 3, '2021-02-06', '16:38:52', 'abc@ab.cd', '1223', 1233432, 123131, 'qeqwewqw', 'awasdqw', '7.jpg', 'qdwqdas', 12123, '12313qweq', '7.jpg', 1, 100, '0000-00-00', NULL),
('', 1, 5, '2021-02-06', '16:56:20', 'ishan@abc.ab', '1234', 213131, 13123, 'qwdqd', 'Ghatkopar East', '4.jpg', 'wfwfw', 12313, '12321313', '3.jpg', 2, 1000, '0000-00-00', NULL),
('MD', 2000, 6, '2021-02-08', '18:06:57', 'ayush@gmail.com', '1234', 2147483647, 4455, 'Ayush Gangar', 'TN', 'kanchihindocha.jpg', 'Kotak', 3344, 'as23', 'kanchihindocha.jpg', 3, 1000, '0000-00-00', NULL),
('', 0, 7, '2021-02-08', '19:05:50', 'hello@gmail.com', '4321', 2147483647, 998877, 'Hello Public', 'Mumbai', '', 'Sbi', 9988, '7766', '', 3, 1000, '0000-00-00', NULL),
('', 0, 8, '2021-02-08', '19:19:31', 'riya@gmail.com', '123', 445566, 667788, 'Riya ', 'Kalyan', '', 'Kotak', 998877, '888', '', 5, 1000, '0000-00-00', NULL),
(NULL, 0, 9, '2021-02-08', '19:41:36', 'om@gmail.com', '123', 98765, 98765, 'Om Sai', 'Tn', '', 'Sbi', 887766, 'ty567', '', 6, 1000, '08/11/2000', 'kanchihindocha.jpg'),
('ED', 593, 10, '2021-02-19', '18:35:50', 'naseem98550@gmail.com', '123', 2147483647, 123, 'naseem', '', '9f04d7fd4c259a42e2452a9dc75cd243.jpg', 'hello', 123, '123', '9f04d7fd4c259a42e2452a9dc75cd243.jpg', 10, 5000, '24/08/2000', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_orders`
--
ALTER TABLE `admin_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payout`
--
ALTER TABLE `payout`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD PRIMARY KEY (`purid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup_details`
--
ALTER TABLE `signup_details`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_orders`
--
ALTER TABLE `admin_orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payout`
--
ALTER TABLE `payout`
  MODIFY `pid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `purchase_details`
--
ALTER TABLE `purchase_details`
  MODIFY `purid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `signup_details`
--
ALTER TABLE `signup_details`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payout`
--
ALTER TABLE `payout`
  ADD CONSTRAINT `payout_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `signup_details` (`uid`);

--
-- Constraints for table `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD CONSTRAINT `purchase_details_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `signup_details` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
