-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2017 at 06:24 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nit website navigation bar`
--

-- --------------------------------------------------------

--
-- Table structure for table `nav_boxes`
--

CREATE TABLE `nav_boxes` (
  `box_index` int(3) NOT NULL,
  `box_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nav_boxes`
--

INSERT INTO `nav_boxes` (`box_index`, `box_name`) VALUES
(1, 'Home'),
(2, 'Institute'),
(3, 'Academics'),
(4, 'Administration'),
(5, 'Departments'),
(6, 'Sections'),
(7, 'Students Activities'),
(8, 'Contacts');

-- --------------------------------------------------------

--
-- Table structure for table `nav_list`
--

CREATE TABLE `nav_list` (
  `box_index` int(11) NOT NULL,
  `item_number` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_link` varchar(1000) NOT NULL,
  `item_info` varchar(10000) DEFAULT NULL,
  `item_image` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nav_list`
--

INSERT INTO `nav_list` (`box_index`, `item_number`, `item_name`, `item_link`, `item_info`, `item_image`) VALUES
(2, 1, 'Institute Profile', 'institute_profile.html', 'Here should be description', 'link to the image');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nav_boxes`
--
ALTER TABLE `nav_boxes`
  ADD PRIMARY KEY (`box_index`);

--
-- Indexes for table `nav_list`
--
ALTER TABLE `nav_list`
  ADD KEY `box_index` (`box_index`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nav_boxes`
--
ALTER TABLE `nav_boxes`
  MODIFY `box_index` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nav_list`
--
ALTER TABLE `nav_list`
  ADD CONSTRAINT `nav_list_ibfk_1` FOREIGN KEY (`box_index`) REFERENCES `nav_boxes` (`box_index`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
