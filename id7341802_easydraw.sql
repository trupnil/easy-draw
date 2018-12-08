-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 08, 2018 at 11:05 AM
-- Server version: 10.2.12-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id7341802_easydraw`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `add_id` int(11) NOT NULL,
  `add_image` text COLLATE utf8_unicode_ci NOT NULL,
  `add_title` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`add_id`, `add_image`, `add_title`) VALUES
(1, 'giphy.gif', 'web marketing'),
(3, 'download.png', 'add sample'),
(4, 'e_d_alphabet_design copy.png', 'anything'),
(5, 'Screenshot_20181018-191108.png', 'Test'),
(6, 'lock.jpeg', 'add sample'),
(7, 'kikid..gif', 'kid'),
(8, 'images.png', 'web marketing');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(5) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `state_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `state_fk`) VALUES
(1, 'vadodara', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `feedback_message` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `feedback_message`, `user_id`, `created_at`) VALUES
(0, 'feedback test', 61, '2018-Oct-Fri 13:36:38'),
(0, 'Xgndksmsm', 61, '2018-Oct-Sat 18:54:57'),
(0, 'Hello.', 60, '2018-Oct-Sun 02:03:24');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `sender_id` varchar(255) NOT NULL,
  `receiver_id` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `date_time` varchar(255) NOT NULL,
  `Subject` varchar(25) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `sender_id`, `receiver_id`, `message`, `status`, `date_time`, `Subject`, `image`) VALUES
(14, 'trupnil92@gmail.com', 'mviral89@yahoo.com', 'sdgdsgsg', '0', '2018-Oct-Wed 17:07:42', 'sujbject', ''),
(35, 'himadripandya273@gmail.com', 'mailikpandy61@gmail.com', 'hello ', '0', '2018-Dec-Sat 03:13:17', 'abc', ''),
(36, 'himadripandya273@gmail.com', 'trupnil92@gmail.com', 'message', '0', '2018-Dec-Sat 15:41:45', 'test', ''),
(37, 'himadripandya273@gmail.com', 'trupnil92@gmail.com', 'sgfefg', '0', '2018-Dec-Sat 16:02:59', 'test', 'Screenshot 2018-12-04 at 9.04.45 AM.png'),
(38, 'kpriti.1999@gmail.com', 'himadripandya273@gmail.com', 'message', '0', '2018-Dec-Sat 16:08:25', 'test', 'Screenshot 2018-12-04 at 9.04.00 AM.png'),
(39, 'kpriti.1999@gmail.com', 'himadripandya273@gmail.com', 'hello', '0', '2018-Dec-Sat 16:24:57', 'oke', 'jquery.rar');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_id` int(11) NOT NULL,
  `reg_name` varchar(255) NOT NULL,
  `reg_mobile` varchar(255) NOT NULL,
  `reg_email` varchar(255) NOT NULL,
  `reg_password` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `state_fk` int(11) NOT NULL,
  `city_fk` int(11) NOT NULL,
  `varified_at` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `reg_name`, `reg_mobile`, `reg_email`, `reg_password`, `image`, `state_fk`, `city_fk`, `varified_at`) VALUES
(60, 'Maulik', '7405063717', 'maulikpandya003@gmail.com', 'da5bd48555e6eaf68f7b6cbfb4fd8dff', 'rsz_maulik_pandya_-_photo.jpg', 1, 1, '1'),
(61, 'himadri1233', '7623012024', 'himadripandya273@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'ed_logo-01.png', 1, 1, '1'),
(62, 'nikhil', '9409279241', 'nikhildavetq@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'background.jpg', 4, 1, '1'),
(74, 'priti', '8866174302', 'kpriti.1999@gmail.com', 'e6e061838856bf47e1de730719fb2609', 'Screenshot 2018-12-04 at 9.04.13 AM.png', 1, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`) VALUES
(1, 'gujarat'),
(2, 'Maharastra'),
(3, 'Rajasthan'),
(4, 'Bihar'),
(5, 'Jammu kashmir'),
(8, 'Andhra Pradesh'),
(9, 'Andhra Pradesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`add_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `state_fk` (`state_fk`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD KEY `feedback_ibfk_1` (`user_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`),
  ADD KEY `sender_id` (`sender_id`),
  ADD KEY `receiver_id` (`receiver_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_id`),
  ADD KEY `city_fk` (`city_fk`),
  ADD KEY `state_fk` (`state_fk`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `add_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`state_fk`) REFERENCES `state` (`state_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `registration` (`reg_id`) ON DELETE CASCADE;

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `registration_ibfk_1` FOREIGN KEY (`city_fk`) REFERENCES `city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registration_ibfk_2` FOREIGN KEY (`state_fk`) REFERENCES `state` (`state_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
