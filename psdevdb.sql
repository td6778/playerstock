-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 03, 2017 at 04:18 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psdevdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contests`
--

DROP TABLE IF EXISTS `contests`;
CREATE TABLE IF NOT EXISTS `contests` (
  `contestID` int(11) NOT NULL AUTO_INCREMENT,
  `iconID` varchar(50) NOT NULL,
  `styleID` varchar(4) NOT NULL,
  `contest_name` varchar(140) NOT NULL,
  `entry_fee` int(6) NOT NULL,
  `entries` int(11) NOT NULL,
  `entry_limit` varchar(11) NOT NULL,
  `prize_total` int(11) NOT NULL,
  `contest_date_start` date NOT NULL,
  `contest_date_end` date NOT NULL,
  `contest_status` int(1) NOT NULL,
  PRIMARY KEY (`contestID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contests`
--

INSERT INTO `contests` (`contestID`, `iconID`, `styleID`, `contest_name`, `entry_fee`, `entries`, `entry_limit`, `prize_total`, `contest_date_start`, `contest_date_end`, `contest_status`) VALUES
(1, 'ion-ios-americanfootball', 'DK', 'NFL Legends Alpha Testing Tournament #1', 0, 0, 'Unlimited', 0, '2017-10-11', '2017-10-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `conteststatus`
--

DROP TABLE IF EXISTS `conteststatus`;
CREATE TABLE IF NOT EXISTS `conteststatus` (
  `statusID` int(1) NOT NULL AUTO_INCREMENT,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`statusID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conteststatus`
--

INSERT INTO `conteststatus` (`statusID`, `status`) VALUES
(1, 'Open'),
(2, 'Full'),
(3, 'In Progress'),
(4, 'Closed');

-- --------------------------------------------------------

--
-- Table structure for table `icons`
--

DROP TABLE IF EXISTS `icons`;
CREATE TABLE IF NOT EXISTS `icons` (
  `iconID` int(3) NOT NULL AUTO_INCREMENT,
  `sport` varchar(50) NOT NULL,
  `league` varchar(15) NOT NULL,
  `icon_html` varchar(255) NOT NULL,
  PRIMARY KEY (`iconID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `icons`
--

INSERT INTO `icons` (`iconID`, `sport`, `league`, `icon_html`) VALUES
(1, 'football', 'NFL', 'ios-american-football'),
(2, 'basketball', 'NBA', 'ios-basketball');

-- --------------------------------------------------------

--
-- Table structure for table `styles`
--

DROP TABLE IF EXISTS `styles`;
CREATE TABLE IF NOT EXISTS `styles` (
  `styleID` int(1) NOT NULL AUTO_INCREMENT,
  `style_name` varchar(4) NOT NULL,
  PRIMARY KEY (`styleID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `styles`
--

INSERT INTO `styles` (`styleID`, `style_name`) VALUES
(1, 'DK'),
(2, 'FD'),
(3, 'FDr');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
