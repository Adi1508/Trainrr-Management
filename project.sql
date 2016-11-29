-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2016 at 08:00 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `center`
--

CREATE TABLE IF NOT EXISTS `center` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `centre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `center`
--

INSERT INTO `center` (`id`, `centre`) VALUES
(1, 'Gurgaon'),
(2, 'New Delhi'),
(3, 'Faridabad'),
(4, 'Ghaziabad'),
(5, 'Noida');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course`) VALUES
(1, 'PHP'),
(2, 'Web Designing'),
(3, 'Java Core'),
(4, 'Java Advance'),
(5, 'Android'),
(6, 'C/C++');

-- --------------------------------------------------------

--
-- Table structure for table `duration`
--

CREATE TABLE IF NOT EXISTS `duration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `duration` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `duration`
--

INSERT INTO `duration` (`id`, `duration`) VALUES
(1, '6 Weeks'),
(2, '3 Months'),
(3, '6 Months');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE IF NOT EXISTS `enquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `courseduration` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `course` varchar(255) NOT NULL,
  `centre` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `fname`, `mobile`, `email`, `courseduration`, `address`, `dob`, `course`, `centre`, `gender`) VALUES
(1, 'Pooja', 'Raj Kumar', '9468469953', 'pooja.345@gmail.com', '3', '<p>new colony</p>\r\n', '1997-10-27', 'Web', '', 'Female'),
(2, 'Karan', 'Kashish', '6654120018', 'karan211@outlook.com', '3', '<p>sec-14</p>\r\n', '1994-05-05', 'PHP', '', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `repassword` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `mobile`, `dob`, `password`, `repassword`) VALUES
(2, 'Aditya Kumar', 'adityak007mr@gmail.com', '9999873501', '1996-09-08', '123654', '123654');

-- --------------------------------------------------------

--
-- Table structure for table `traineerecords`
--

CREATE TABLE IF NOT EXISTS `traineerecords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `courseduration` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `doj` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `centre` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `fee` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `traineerecords`
--

INSERT INTO `traineerecords` (`id`, `name`, `uid`, `fname`, `mobile`, `email`, `courseduration`, `address`, `doj`, `dob`, `course`, `centre`, `image`, `gender`, `fee`) VALUES
(1, 'Rahul', 'Rahu7992', 'Ravinder', '9468267992', 'rahul.rav345@gmail.com', '6', '<p>old dlf</p>\r\n', '2015-11-11', '1996-02-21', '', 'Faridabad', '', 'Male', '13000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
