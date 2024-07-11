-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 20, 2024 at 01:24 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `casualleave`
--

DROP TABLE IF EXISTS `casualleave`;
CREATE TABLE IF NOT EXISTS `casualleave` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `rollno` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `typeofissues` varchar(255) NOT NULL,
  `startingdate` datetime(6) NOT NULL,
  `endingdate` datetime(6) NOT NULL,
  `noofdays` varchar(255) NOT NULL,
  `tutor` varchar(255) NOT NULL,
  `hod` varchar(255) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `externalod`
--

DROP TABLE IF EXISTS `externalod`;
CREATE TABLE IF NOT EXISTS `externalod` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `roll no` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `typeofworks` varchar(255) NOT NULL,
  `qa` varchar(255) NOT NULL,
  `certificate` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `startingdate` datetime(6) NOT NULL,
  `endingdate` datetime(6) NOT NULL,
  `noofdays` varchar(255) NOT NULL,
  `tutor` varchar(255) NOT NULL,
  `hod` varchar(255) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faculitydetails`
--

DROP TABLE IF EXISTS `faculitydetails`;
CREATE TABLE IF NOT EXISTS `faculitydetails` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `faculity id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date of birth` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `blood group` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile no` varchar(255) NOT NULL,
  `login password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `appointed as` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `faculitydetails`
--

INSERT INTO `faculitydetails` (`sno`, `faculity id`, `name`, `date of birth`, `gender`, `blood group`, `education`, `branch`, `address`, `mobile no`, `login password`, `appointed as`, `year`) VALUES
(1, 'it001', 'seetha', '1994-07-30', 'Female', 'AB+', 'Mtech ', 'IT', 'mgr street,\r\ncoimbatore\r\ntamil nadu', '8754219865', '12345', 'yes', '2nd year');

-- --------------------------------------------------------

--
-- Table structure for table `hodlogin`
--

DROP TABLE IF EXISTS `hodlogin`;
CREATE TABLE IF NOT EXISTS `hodlogin` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `hod id` varchar(255) NOT NULL,
  `login password` varchar(255) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hodlogin`
--

INSERT INTO `hodlogin` (`sno`, `hod id`, `login password`) VALUES
(1, 'hodit', 'hod');

-- --------------------------------------------------------

--
-- Table structure for table `internalod`
--

DROP TABLE IF EXISTS `internalod`;
CREATE TABLE IF NOT EXISTS `internalod` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `rollno` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `years` varchar(255) NOT NULL,
  `type of works` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `startingdate` datetime(6) NOT NULL,
  `endingdate` datetime(6) NOT NULL,
  `no of days` int NOT NULL,
  `tutor` varchar(255) NOT NULL,
  `hod` varchar(255) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medicalleave`
--

DROP TABLE IF EXISTS `medicalleave`;
CREATE TABLE IF NOT EXISTS `medicalleave` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `rollno` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `typeofissues` varchar(255) NOT NULL,
  `certificate` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `startingdate` datetime(6) NOT NULL,
  `endingdate` datetime(6) NOT NULL,
  `noofdays` varchar(255) NOT NULL,
  `tutor` varchar(255) NOT NULL,
  `hod` varchar(255) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `medicalleave`
--

INSERT INTO `medicalleave` (`sno`, `name`, `rollno`, `department`, `year`, `typeofissues`, `certificate`, `startingdate`, `endingdate`, `noofdays`, `tutor`, `hod`) VALUES
(1, 'naveen', '20bit001', 'it', '2nd year', 'fever', 'medical.pdf', '2024-01-24 08:15:00.000000', '2024-01-26 08:15:00.000000', '4', 'approved', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

DROP TABLE IF EXISTS `studentdetails`;
CREATE TABLE IF NOT EXISTS `studentdetails` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rollno` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `bloodgroup` varchar(255) NOT NULL,
  `branchanddegree` varchar(255) NOT NULL,
  `fathername` varchar(255) NOT NULL,
  `mothername` varchar(255) NOT NULL,
  `annualincome` varchar(255) NOT NULL,
  `mothertongue` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `community` varchar(255) NOT NULL,
  `parentnumber` varchar(255) NOT NULL,
  `studentnumber` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dateofbirth` varchar(255) NOT NULL,
  `aadhar` varchar(255) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`sno`, `rollno`, `name`, `gender`, `bloodgroup`, `branchanddegree`, `fathername`, `mothername`, `annualincome`, `mothertongue`, `religion`, `community`, `parentnumber`, `studentnumber`, `address`, `dateofbirth`, `aadhar`) VALUES
(1, '20bit001', 'Naveen', 'Male', 'AB+', 'BTECH IT', 'chinasamy.s', 'seetha.c', '40000', 'Tamil', 'Hindhu', 'BC', '6390526030', '9360549253', '505/2 t nagar,karur,tamilnadu', '2004-06-24', '123456789');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
