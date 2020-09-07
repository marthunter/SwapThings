-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2020 at 03:30 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swapthings`
--

-- --------------------------------------------------------

--
-- Table structure for table `thing_group`
--

CREATE TABLE `thing_group` (
  `gr_id` int(2) NOT NULL,
  `gr_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thing_group`
--

INSERT INTO `thing_group` (`gr_id`, `gr_name`) VALUES
(1, 'แลกเปลี่ยน'),
(2, 'บริจาค'),
(3, 'ซื้อ-ขาย');

-- --------------------------------------------------------

--
-- Table structure for table `thing_list`
--

CREATE TABLE `thing_list` (
  `thi_li_id` int(7) NOT NULL,
  `user_id` int(7) NOT NULL DEFAULT '0',
  `thingname` varchar(70) NOT NULL,
  `thingtype` varchar(50) NOT NULL,
  `thingdetail` varchar(300) NOT NULL,
  `thingimage` varchar(100) NOT NULL,
  `thingdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thing_list`
--

INSERT INTO `thing_list` (`thi_li_id`, `user_id`, `thingname`, `thingtype`, `thingdetail`, `thingimage`, `thingdate`) VALUES
(4, 0, 'หมวกโจทาโร่', 'บริจาค', 'หมวกสำหรับสาวก Jojo ใครสนใจ request มาได้เลยนะครับ', '114246964220200313_220236.jpg', '2020-03-13 15:02:36'),
(6, 0, 'เอฟเฟค Distortion', 'แลกเปลี่ยน', 'Bass มีปัญหานิดหน่อย ใครมี Delay เอามาแลกได้', '85042869320200313_232159.jpg', '2020-03-13 16:21:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `u_address` varchar(300) NOT NULL,
  `postcode` varchar(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usermane` varchar(50) NOT NULL,
  `u_password` varchar(50) NOT NULL,
  `imageprofile` varchar(100) NOT NULL,
  `date_register` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `thing_group`
--
ALTER TABLE `thing_group`
  ADD PRIMARY KEY (`gr_id`);

--
-- Indexes for table `thing_list`
--
ALTER TABLE `thing_list`
  ADD PRIMARY KEY (`thi_li_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `thing_group`
--
ALTER TABLE `thing_group`
  MODIFY `gr_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `thing_list`
--
ALTER TABLE `thing_list`
  MODIFY `thi_li_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
