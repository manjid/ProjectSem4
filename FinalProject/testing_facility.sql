-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 30, 2023 at 06:40 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testing_facility`
--
CREATE DATABASE `testing_facility` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `testing_facility`;

-- --------------------------------------------------------

--
-- Table structure for table `facility_list`
--

CREATE TABLE IF NOT EXISTS `facility_list` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `fName` varchar(255) NOT NULL,
  `fType` varchar(255) NOT NULL,
  `fRate` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `facility_list`
--

INSERT INTO `facility_list` (`ID`, `fName`, `fType`, `fRate`) VALUES
(1, 'Computer Science', 'Computer Lab', '200'),
(2, 'Physic Lab 1', 'Science Lab', '150'),
(3, 'CS 2', 'Computer Lab', '200');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`UserID`, `username`, `password`) VALUES
(1, 'akmaleihad', '031029110505'),
(2, 'admin', 'admin');
