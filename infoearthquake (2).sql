-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2016 at 07:21 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `infoearthquake`
--

-- --------------------------------------------------------

--
-- Table structure for table `infogovt`
--

CREATE TABLE IF NOT EXISTS `infogovt` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `security` varchar(50) NOT NULL,
  `number` bigint(10) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `lat` float NOT NULL,
  `lon` float NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infogovt`
--

INSERT INTO `infogovt` (`id`, `name`, `email`, `security`, `number`, `street`, `city`, `lat`, `lon`, `password`) VALUES
(1, 'asdgfjf', 'ad@ad', 'key', 2147483647, 'gdf', 'ADs', 45, 67, 'kqwerty'),
(3, 'aditi', 'aditisakhare21@gmail.com', 'key', 9819397043, 'sgsd', 'sdd', 34, 45, 'qwerty'),
(4, 'ad', 'a@a', 'key', 9819397043, 'xc', 'qw', 34, 45, 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `infongo`
--

CREATE TABLE IF NOT EXISTS `infongo` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `security` varchar(50) NOT NULL,
  `number` bigint(10) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `lat` float NOT NULL,
  `lon` float NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infongo`
--

INSERT INTO `infongo` (`id`, `name`, `email`, `security`, `number`, `street`, `city`, `lat`, `lon`, `password`) VALUES
(1, 'fesdf', 'ad@ad', 'dger43654', 2147483647, 'dvgdfg', 'sfewsd', 67, 766, 'qweeryh'),
(2, 'fesdf', 'ad@ad', 'dger43654', 9819397043, 'dvgdfg', 'sfewsd', 67, 766, 'qweeryh'),
(3, 'aditi', 'aditisakhare21@gmail.com', 'key', 9819397043, 'df', 'df', 45, 45, 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `infouser`
--

CREATE TABLE IF NOT EXISTS `infouser` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` int(11) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `lat` float DEFAULT NULL,
  `lon` float NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infouser`
--

INSERT INTO `infouser` (`id`, `username`, `email`, `number`, `street`, `city`, `lat`, `lon`, `password`) VALUES
(1, 'Aditi', 'aditisakhare21@gmail.com', 2147483647, 'Chowk', 'bazar Peth', 0, 0, 'qwerty'),
(2, 'asfd', 'ad@ad', 0, '', '', 0, 0, 'qwertyui'),
(3, 'nilesh', 'ad@ad', 2147483647, '', '', 0, 0, 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `infovolunteer`
--

CREATE TABLE IF NOT EXISTS `infovolunteer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `security` varchar(50) NOT NULL,
  `number` bigint(10) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `lat` float NOT NULL,
  `lon` float NOT NULL,
  `password` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infovolunteer`
--

INSERT INTO `infovolunteer` (`id`, `name`, `email`, `security`, `number`, `street`, `city`, `lat`, `lon`, `password`, `area`) VALUES
(1, 'ajshfds', 'ad@ad', 'sdg565', 2147483647, 'egrgt', 'fgtfdtg', 87, 778, 'qwetrtjyjyu', 'jdkasj'),
(2, 'aditi', 'aditisakhare21@gmail.com', '1234', 9819397043, 'sdc', 'dvs', 56, 45, 'qwerty', 'Donation');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `infogovt`
--
ALTER TABLE `infogovt`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `infongo`
--
ALTER TABLE `infongo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infouser`
--
ALTER TABLE `infouser`
  ADD PRIMARY KEY (`id`,`email`);

--
-- Indexes for table `infovolunteer`
--
ALTER TABLE `infovolunteer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `infogovt`
--
ALTER TABLE `infogovt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `infongo`
--
ALTER TABLE `infongo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `infouser`
--
ALTER TABLE `infouser`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `infovolunteer`
--
ALTER TABLE `infovolunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
