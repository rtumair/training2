-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 20, 2016 at 11:46 AM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `School`
--

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE IF NOT EXISTS `Student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(100) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `class` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `Student`
--

INSERT INTO `Student` (`id`, `student_name`, `dob`, `father_name`, `class`, `address`, `phone_no`, `created_on`, `updated_on`, `status`) VALUES
(35, 'Muzammil', '1993-12-08', 'Ijaz', 'BSSE', 'Gulshan', '3244444444', '2016-07-19 13:21:30', '0000-00-00 00:00:00', 0),
(36, 'Hassan Anwar ', '1993-10-03', 'Anwar', 'BSSE', 'Nishat', '3244563233', '2016-07-19 13:21:30', '0000-00-00 00:00:00', 0),
(40, 'Muzammil', '1993-12-08', 'Ijaz', 'BSSE', 'Gulshan', '3244444444', '2016-07-20 09:47:55', '0000-00-00 00:00:00', 0),
(41, 'Hassan', '1993-10-03', 'Anwar', 'BSSE', 'Nishat', '3244563233', '2016-07-20 09:47:55', '0000-00-00 00:00:00', 0),
(42, 'Hisham Zahid', '2016-07-17', 'Zahid Parvez', 'BSSE Morning', 'Shalamar Park', '03314356289', '2016-07-20 09:50:40', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Home`
--

CREATE TABLE IF NOT EXISTS `User` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `Home`
--

INSERT INTO `User` (`id`, `username`, `password`) VALUES
(1, 'hassan', '111'),
(2, 'hassan', '111'),
(7, 'hassan', '111'),
(8, 'hassan', '111'),
(9, 'maznoor', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
