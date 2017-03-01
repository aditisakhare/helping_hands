-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 04, 2016 at 10:13 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payment_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `flat_no` int(10) NOT NULL,
  `building_name` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `home_no` int(10) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `sr_no` int(50) NOT NULL,
  `state_s` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`first_name`, `last_name`, `flat_no`, `building_name`, `area`, `city`, `state`, `home_no`, `mobile_no`, `email_id`, `sr_no`, `state_s`) VALUES
('adfdfb', 'abadfb', 234234, 'dfabb', 'bsgssbg', 'bgfsfsbs', 'gbfsbsfgb', 45353, 234234, 'fgbsfbbs', 1, ''),
('Ajit', 'Mutalik', 1, 'bhakti heights', 'tilak nagar', 'mumbai', 'maharashtra', 25228450, 2147483647, 'mutalik.ajit@gmail.c', 2, ''),
('Ajit', 'Mutalik', 402, 'bhakti heights', 'tilak nagar', 'mumbai', 'maharashtra', 25228450, 2147483647, 'mutalik.ajit@gmail.c', 3, ''),
('', '', 0, '', '', '', '', 0, 2147483647, '', 4, ''),
('', '', 0, '', '', '', '', 0, 2147483647, '', 5, ''),
('', '', 0, '', '', '', '', 0, 2147483647, '', 6, ''),
('', '', 402, '', '', '', '', 0, 0, '', 7, ''),
('', '', 2333, '', '', '', '', 0, 0, '', 8, ''),
('casacac', 'acddc', 2321, ' bvhadfbv', 'vhdsacv', 'IBEBVLI', 'BBIU', 21831, 98121, 'jhdb jbc', 9, ''),
('sjvsajbh', 'kladbf', 928, '787887', 'HWKEFHIU', 'IIWUGFIU', 'kjbkjb', 123712, 230923, 'ibviwbv', 10, ''),
('', '', 0, '', '', '', '', 0, 0, '', 11, '');

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `flat_no` int(10) NOT NULL,
  `building_name` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `home_no` int(10) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `sr_no` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `sr_no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `sr_no` int(50) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
