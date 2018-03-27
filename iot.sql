-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 27, 2018 at 09:23 AM
-- Server version: 5.5.59-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iot`
--

-- --------------------------------------------------------

--
-- Table structure for table `corr`
--

CREATE TABLE IF NOT EXISTS `corr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lat` double NOT NULL,
  `longi` double NOT NULL,
  `curr_time` varchar(10) NOT NULL,
  `Gkey` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `corr`
--

INSERT INTO `corr` (`id`, `lat`, `longi`, `curr_time`, `Gkey`) VALUES
(5, 12.845516, 80.152735, '3:44', 'Bbyc689ZxC'),
(16, 12.845093333333, 80.152635, '', 'Bbyc689ZxC'),
(18, 12.84483, 80.152691666667, '19:24', 'Bbyc689ZxC'),
(20, 12.844463333333, 80.15274, '19:26', 'Bbyc689ZxC'),
(21, 12.844335, 80.152758333333, '19:27', 'Bbyc689ZxC'),
(22, 12.845043333333, 80.15279, '19:31', 'Bbyc689ZxC'),
(23, 12.845016666667, 80.152728333333, '01:04', 'Bbyc689ZxC'),
(24, 12.844741666667, 80.152573333333, '21:40', 'Bbyc689ZxC'),
(25, 12.9718, 79.1589, '12:48', 'Bbyc689ZxC'),
(27, 12.844745, 80.152411666667, '02:04', 'Bbyc689ZxC');

-- --------------------------------------------------------

--
-- Table structure for table `usr_tbl`
--

CREATE TABLE IF NOT EXISTS `usr_tbl` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gps_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usr_tbl`
--

INSERT INTO `usr_tbl` (`username`, `password`, `gps_id`, `email`) VALUES
('father1', 'f1', 'Bbyc689ZxC', 'utsav1352@gmail.com'),
('mother1', 'm1', 'Bbyc689ZxC', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
