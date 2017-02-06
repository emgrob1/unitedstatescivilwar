-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2017 at 12:50 AM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `unitedstatescivilwar`
--

-- --------------------------------------------------------

--
-- Table structure for table `armies`
--

CREATE TABLE IF NOT EXISTS `armies` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `battle_id` int(5) NOT NULL,
  `theater_id` int(5) NOT NULL,
  `armies_name` varchar(50) NOT NULL,
  `general_id` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `armies`
--

INSERT INTO `armies` (`id`, `battle_id`, `theater_id`, `armies_name`, `general_id`) VALUES
(1, 1, 1, 'Army of Northern Virginia', 1);

-- --------------------------------------------------------

--
-- Table structure for table `battles`
--

CREATE TABLE IF NOT EXISTS `battles` (
  `battle_id` int(5) NOT NULL AUTO_INCREMENT,
  `theater_id` int(5) NOT NULL,
  `battle_name` varchar(50) NOT NULL,
  `battle_location` varchar(50) NOT NULL,
  `general_id` int(5) NOT NULL,
  `general_name` varchar(50) NOT NULL,
  `army_id` int(5) NOT NULL,
  `army_name` varchar(50) NOT NULL,
  `armourments` varchar(150) NOT NULL,
  `casaulties` int(10) NOT NULL,
  PRIMARY KEY (`battle_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `generals`
--

CREATE TABLE IF NOT EXISTS `generals` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `armies_id` int(5) NOT NULL,
  `battle_id` int(5) NOT NULL,
  `theater_id` int(5) NOT NULL,
  `general_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `name` varchar(50) NOT NULL,
  `path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `theater`
--

CREATE TABLE IF NOT EXISTS `theater` (
  `theater_id` int(5) NOT NULL AUTO_INCREMENT,
  `theater_name` varchar(50) NOT NULL,
  `theater_region` varchar(50) NOT NULL,
  PRIMARY KEY (`theater_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `theater`
--

INSERT INTO `theater` (`theater_id`, `theater_name`, `theater_region`) VALUES
(12, ' Lower Seaboard Theater and 1861-63 Gulf Approach', 'Southern '),
(13, 'Main Eastern', 'Northeastern United States'),
(14, 'Main Western Minus Gulf Approach', 'West of the Mississippi'),
(15, 'Pacific', 'Most Western United States'),
(16, 'Trans Missippi', 'Missippi River'),
(17, 'test', 'Test');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
