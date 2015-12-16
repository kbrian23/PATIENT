-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 11, 2015 at 06:09 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbtest`
--
CREATE DATABASE `dbtest` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbtest`;

-- --------------------------------------------------------

--
-- Table structure for table `patient_tb`
--

CREATE TABLE IF NOT EXISTS `patient_tb` (
  `patient_id` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(100) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `patient_tb`
--

INSERT INTO `patient_tb` (`patient_id`, `pname`, `regno`, `email`, `mname`, `address`, `date`, `name`, `city`, `dob`) VALUES
(1, 'Brian', '12345', 'kenny2brian@gmail.com', 'Nanangwe', 'KIBULI', '2015-12-10', 'magemule Brian', 'Kampala', '2015-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `checkin` date NOT NULL,
  `room` text NOT NULL,
  `adult` int(11) NOT NULL,
  `checkout` date NOT NULL,
  `child0_5` int(11) NOT NULL,
  `child6_12` int(11) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `reservation`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(4, 'max', 'kenny24brian@gmail.com', '5b3b190c2cb0b4652d555a75d6b7af02'),
(5, 'simon magool', 'simonmagoola@yahoo.com', 'd15474caedfc3a4c1ed7ec9d63997c15'),
(6, 'Magemule Brian', 'kennybrian648@yahoo.com', '202cb962ac59075b964b07152d234b70'),
(7, 'max kenny', 'kenny2brian@gmail.com', '5b3b190c2cb0b4652d555a75d6b7af02'),
(8, 'emmanuel', 'emanuelbaliwa@gmail.com', '4a55c487c03c483e09ea3310ffc98bfd');
