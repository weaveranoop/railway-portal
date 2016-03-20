-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2012 at 10:27 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dp`
--
CREATE DATABASE `dp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dp`;

-- --------------------------------------------------------

--
-- Table structure for table `book_detail`
--

CREATE TABLE IF NOT EXISTS `book_detail` (
  `sl` int(5) NOT NULL AUTO_INCREMENT,
  `train_num` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `doj` date NOT NULL,
  `doe` date NOT NULL,
  `pnr` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `passenger` varchar(20) NOT NULL,
  `age` varchar(2) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `code` varchar(3) NOT NULL,
  `seat` varchar(3) NOT NULL,
  `price` varchar(6) NOT NULL,
  `to` varchar(20) NOT NULL,
  `from` varchar(20) NOT NULL,
  `status` varchar(1) NOT NULL,
  `class` varchar(10) NOT NULL,
  PRIMARY KEY (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `book_detail`
--

INSERT INTO `book_detail` (`sl`, `train_num`, `dob`, `doj`, `doe`, `pnr`, `username`, `passenger`, `age`, `gender`, `code`, `seat`, `price`, `to`, `from`, `status`, `class`) VALUES
(2, '2002', '2011-11-19', '2012-04-22', '2011-11-19', '1', 'pranjal', '1', '1', '1', '1', '', '151.74', 'D', 'B', '1', '2'),
(3, '2002', '2011-11-19', '0000-00-00', '2011-11-19', '1', '', 'c', 'c', 'c', '1', '', '126.45', 'D', 'B', '1', '1'),
(4, '2002', '2011-11-19', '0000-00-00', '2011-11-19', '1', '', 'd', 'd', 'd', '1', '', '126.45', 'D', 'B', '1', '1'),
(5, '2001', '2011-11-19', '0000-00-00', '2011-11-19', '1', '', 'm', 'm', 'm', '1', '', '59.01', 'B', 'A', '1', '4'),
(6, '2001', '2011-11-19', '0000-00-00', '2011-11-19', '1', '', 'h', 'h', 'h', '1', '', '59.01', 'B', 'A', '1', '4'),
(7, '2001', '2011-11-19', '0000-00-00', '2011-11-19', '1', '', 'm', 'm', 'm', '1', '', '59.01', 'B', 'A', '1', '4'),
(8, '2001', '2011-11-19', '0000-00-00', '2011-11-19', '1', '', 'h', 'h', 'h', '1', '', '59.01', 'B', 'A', '1', '4'),
(9, '2001', '2011-11-19', '0000-00-00', '2011-11-19', '1', '', 'm', 'm', 'm', '1', '', '59.01', 'B', 'A', '1', '4'),
(10, '2001', '2011-11-19', '0000-00-00', '2011-11-19', '1', '', 'h', 'h', 'h', '1', '', '59.01', 'B', 'A', '1', '4'),
(11, '2001', '2011-11-19', '0000-00-00', '2011-11-19', '1', '', 'm', 'm', 'm', '1', '', '59.01', 'B', 'A', '1', '4'),
(12, '2001', '2011-11-19', '0000-00-00', '2011-11-19', '1', '', 'h', 'h', 'h', '1', '', '59.01', 'B', 'A', '1', '4'),
(13, '2001', '2011-11-19', '0000-00-00', '2011-11-19', '1', '', 'm', 'm', 'm', '1', '', '59.01', 'B', 'A', '1', '4'),
(14, '2001', '2011-11-19', '0000-00-00', '2011-11-19', '1', '', 'h', 'h', 'h', '1', '', '59.01', 'B', 'A', '1', '4'),
(15, '2001', '2011-11-19', '0000-00-00', '2011-11-19', '1', '', 'm', 'm', 'm', '1', '', '59.01', 'B', 'A', '1', '4'),
(16, '2001', '2011-11-19', '0000-00-00', '2011-11-19', '1', '', 'h', 'h', 'h', '1', '', '59.01', 'B', 'A', '1', '4'),
(17, '2001', '2011-11-19', '0000-00-00', '2011-11-19', '17', '', 'm', 'm', 'm', '1', '', '59.01', 'B', 'A', '1', '4'),
(18, '2001', '2011-11-19', '0000-00-00', '2011-11-19', '17', '', 'h', 'h', 'h', '1', '', '59.01', 'B', 'A', '1', '4'),
(19, '2002', '2011-11-19', '0000-00-00', '2011-11-19', '19', '', 'ASD', '22', 'M', '2', '', '70.25', 'D', 'C', '1', '1'),
(20, '2002', '2011-11-19', '0000-00-00', '2011-11-19', '20', '', 'ASD', '22', 'M', '3', '', '70.25', 'D', 'C', '1', '1'),
(21, '2002', '2011-11-19', '0000-00-00', '2011-11-19', '21', '', 'ASD', '22', 'g', '4', '', '70.25', 'D', 'C', '1', '1'),
(22, '2002', '2011-11-19', '0000-00-00', '2011-11-19', '22', '', 'ASD', '22', 'g', '5', '', '70.25', 'D', 'C', '1', '1'),
(23, '2002', '2011-11-19', '0000-00-00', '2011-11-19', '23', '', 'ASD', '22', 'g', '6', '', '70.25', 'D', 'C', '1', '1'),
(24, '2002', '2011-11-19', '0000-00-00', '2011-11-19', '24', '', 'ASD', '22', 'g', '7', '', '70.25', 'D', 'C', '1', '1'),
(25, '2002', '2011-11-19', '0000-00-00', '2011-11-19', '25', '', 'ASD', '22', 'g', '8', '', '70.25', 'D', 'C', '1', '1'),
(26, '2002', '2011-11-19', '0000-00-00', '2011-11-19', '26', '', 'ASD', '22', 'g', '9', '', '70.25', 'D', 'C', '1', '1'),
(27, '2001', '2011-11-19', '0000-00-00', '2011-11-19', '27', 'a', '1', '1', '1', '2', '', '42.15', 'B', 'A', '2', '2'),
(28, '2002', '2011-11-19', '2011-12-10', '2011-11-19', '28', 'a', 'l', 'l', 'l', '10', '', '151.74', 'D', 'B', '2', '2'),
(29, '2002', '2011-11-19', '0000-00-00', '2011-11-19', '29', 'a', 'Ravi', '20', 'M', '10', '', '126.45', 'D', 'B', '2', '1'),
(30, '2002', '2011-11-19', '2011-11-20', '2011-11-19', '30', 'a', 'Anupam', '20', 'M', '10', '', '126.45', 'D', 'B', '2', '1'),
(31, '2002', '2011-11-19', '2011-12-10', '2011-11-19', '31', 'ab', 'abc', '22', 'm', '10', '', '177.03', 'D', 'B', '1', '3'),
(32, '2002', '2011-11-19', '2011-12-10', '2011-11-19', '32', 'a', 'name', '22', 'm', '10', '', '177.03', 'D', 'B', '2', '3'),
(33, '2002', '2011-11-19', '2011-12-10', '2011-11-19', '33', 'o', 'w', 'w', 'w', '10', '', '151.74', 'D', 'B', '2', '2'),
(34, '2002', '2011-12-17', '0000-00-00', '2011-12-17', '34', 'a', 'jhvg', '21', 'm', '10', '', '151.74', 'D', 'B', '1', '2'),
(35, '2002', '2012-04-20', '2010-12-10', '2012-04-20', '35', 'pranjal', 'ASDqwertyui', '22', 'm', '10', '', '67.44', 'C', 'B', '2', '4');

-- --------------------------------------------------------

--
-- Table structure for table `days_run`
--

CREATE TABLE IF NOT EXISTS `days_run` (
  `train_num` int(10) NOT NULL,
  `sun` int(1) NOT NULL,
  `mon` int(1) NOT NULL,
  `tues` int(1) NOT NULL,
  `wed` int(1) NOT NULL,
  `thurs` int(1) NOT NULL,
  `fri` int(1) NOT NULL,
  `sat` int(1) NOT NULL,
  PRIMARY KEY (`train_num`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `days_run`
--

INSERT INTO `days_run` (`train_num`, `sun`, `mon`, `tues`, `wed`, `thurs`, `fri`, `sat`) VALUES
(2004, 0, 0, 1, 0, 1, 0, 1),
(2003, 0, 1, 1, 1, 1, 1, 1),
(2002, 0, 1, 0, 1, 0, 1, 0),
(2001, 1, 1, 1, 1, 1, 1, 1),
(0, 0, 1, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE IF NOT EXISTS `price` (
  `distance` int(10) NOT NULL,
  `base_fare` int(10) NOT NULL,
  `tax` float NOT NULL DEFAULT '12.4',
  `cess` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`distance`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`distance`, `base_fare`, `tax`, `cess`) VALUES
(2, 2, 12.4, 1),
(175, 130, 12.4, 1),
(150, 110, 12.4, 1),
(125, 90, 12.4, 1),
(100, 70, 12.4, 1),
(75, 50, 12.4, 1),
(50, 30, 12.4, 1),
(25, 10, 12.4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `price_factor`
--

CREATE TABLE IF NOT EXISTS `price_factor` (
  `multiply_factor` float NOT NULL,
  `class` int(1) NOT NULL,
  `type` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price_factor`
--

INSERT INTO `price_factor` (`multiply_factor`, `class`, `type`) VALUES
(1, 1, 1),
(1.25, 2, 1),
(1.5, 3, 1),
(1.75, 4, 1),
(1.25, 1, 2),
(1.5, 2, 2),
(1.75, 3, 2),
(2, 4, 2),
(1.5, 1, 3),
(1.75, 2, 3),
(2, 3, 3),
(2.25, 4, 3),
(1.75, 1, 4),
(2, 2, 4),
(2.25, 3, 4),
(2.5, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `username` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `p_type` varchar(1) NOT NULL DEFAULT 'U',
  `address` text NOT NULL,
  `age` int(2) NOT NULL,
  `email_id` varchar(25) NOT NULL,
  `designation` text NOT NULL,
  `admin_type` text NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `email_id` (`email_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`username`, `name`, `password`, `p_type`, `address`, `age`, `email_id`, `designation`, `admin_type`) VALUES
('a', 'aa', 'aa', 'U', 'aa', 20, 'a', '', ''),
('t', 't', 't', 'A', 't', 30, 't', 'limited', 'T'),
('r', 'r', 'r', 'A', 'r', 30, 'r', 'limited', 'R'),
('p', 'p', 'p', 'A', 'p', 30, 'p', 'limited', 'P'),
('o', 'o', 'o', 'A', 'o', 30, 'o', 'ADMIN', 'O'),
('cd', 'c', 'abc', 'U', 'c', 12, 'cd', '0', '0'),
('pranjal', 'Pranjal Prabhash', 'prabhash', 'U', 'KR-194', 21, 'pranjal.prabhash@gmail.co', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE IF NOT EXISTS `route` (
  `sl` int(11) NOT NULL AUTO_INCREMENT,
  `route_num` int(3) NOT NULL,
  `station` varchar(30) NOT NULL,
  `station_number` varchar(5) NOT NULL,
  `distance` varchar(6) NOT NULL,
  PRIMARY KEY (`sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`sl`, `route_num`, `station`, `station_number`, `distance`) VALUES
(21, 1, 'A', '1', '0'),
(22, 1, 'B', '2', '35'),
(23, 1, 'C', '3', '80'),
(24, 1, 'D', '4', '150'),
(25, 1, 'E', '5', '220'),
(26, 1, 'F', '6', '300'),
(27, 1, 'G', '7', '360'),
(28, 1, 'H', '8', '400'),
(29, 2, 'A1', '1', '0'),
(30, 2, 'A2', '2', '60'),
(31, 2, 'A3', '3', '75'),
(32, 2, 'A4', '4', '100'),
(33, 2, 'A5', '5', '110'),
(34, 2, 'A6', '6', '130'),
(35, 22, '2', '1', '2'),
(36, 22, '2', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `train_detail`
--

CREATE TABLE IF NOT EXISTS `train_detail` (
  `train_num` int(4) NOT NULL,
  `seat` int(4) NOT NULL DEFAULT '72',
  `start` varchar(30) NOT NULL,
  `train_name` varchar(10) NOT NULL,
  `class1` varchar(1) NOT NULL DEFAULT '0',
  `class2` varchar(1) NOT NULL DEFAULT '0',
  `class3` varchar(1) NOT NULL DEFAULT '0',
  `class4` varchar(1) NOT NULL DEFAULT '0',
  `route_num` int(4) NOT NULL,
  `type` int(1) NOT NULL,
  PRIMARY KEY (`train_num`),
  UNIQUE KEY `train_name` (`train_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train_detail`
--

INSERT INTO `train_detail` (`train_num`, `seat`, `start`, `train_name`, `class1`, `class2`, `class3`, `class4`, `route_num`, `type`) VALUES
(2003, 72, 'D', 'BITS C', '1', '1', '1', '1', 1, 3),
(2002, 72, 'B', 'BITS B', '1', '1', '1', '1', 1, 2),
(2001, 72, 'A', 'BITS A', '1', '1', '1', '1', 1, 1),
(2004, 72, 'A1', 'BITS D', '1', '1', '1', '1', 2, 4),
(0, 72, 'A', 'a', '1', '', '', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `train_station`
--

CREATE TABLE IF NOT EXISTS `train_station` (
  `train_num` int(5) NOT NULL,
  `train_name` varchar(20) NOT NULL,
  `station` varchar(20) NOT NULL,
  `stop_number` varchar(3) NOT NULL,
  `time_arr` time NOT NULL,
  `time_dep` time NOT NULL,
  `day` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train_station`
--

INSERT INTO `train_station` (`train_num`, `train_name`, `station`, `stop_number`, `time_arr`, `time_dep`, `day`) VALUES
(2003, 'BITS C', 'E', '2', '01:00:00', '01:15:00', '2'),
(2003, 'BITS C', 'D', '1', '19:22:00', '19:27:00', '1'),
(2002, 'BITS B', 'E', '4', '14:02:00', '14:07:00', '1'),
(2002, 'BITS B', 'D', '3', '12:05:00', '12:10:00', '1'),
(2002, 'BITS B', 'C', '2', '08:15:00', '08:30:00', '1'),
(2002, 'BITS B', 'B', '1', '06:10:00', '06:15:00', '1'),
(2001, 'BITS A', 'D', '4', '06:00:00', '06:15:00', '2'),
(2001, 'BITS A', 'C', '3', '20:10:00', '04:15:00', '1'),
(2001, 'BITS A', 'B', '2', '15:45:00', '16:00:00', '1'),
(2001, 'BITS A', 'A', '1', '12:30:00', '12:35:00', '1'),
(2003, 'BITS C', 'F', '3', '03:05:00', '03:20:00', '2'),
(2003, 'BITS C', 'G', '4', '06:15:00', '06:20:00', '2'),
(2003, 'BITS C', 'H', '5', '09:10:00', '09:15:00', '2'),
(2004, 'BITS D', 'A1', '1', '06:00:00', '06:15:00', '1'),
(2004, 'BITS D', 'A2', '2', '09:00:00', '09:15:00', '1'),
(2004, 'BITS D', 'A3', '3', '12:00:00', '12:15:00', '1'),
(2004, 'BITS D', 'A4', '4', '18:00:00', '18:30:00', '1'),
(2004, 'BITS D', 'A5', '5', '21:00:00', '04:00:00', '1'),
(2004, 'BITS D', 'A6', '6', '12:00:00', '12:30:00', '2'),
(0, 'a', 'A', '1', '00:00:00', '00:00:00', 'a'),
(0, 'a', 'A', '2', '00:00:00', '00:00:00', 'a'),
(0, 'a', 'A', '3', '00:00:00', '00:00:00', 'a');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
