-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 29, 2019 at 01:47 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trf`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `Sr no.` int(11) NOT NULL AUTO_INCREMENT,
  `Name of Blog` varchar(50) NOT NULL,
  `Link` varchar(700) NOT NULL,
  `Author` varchar(50) NOT NULL,
  PRIMARY KEY (`Sr no.`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`Sr no.`, `Name of Blog`, `Link`, `Author`) VALUES
(1, 'Dont cut trees', 'https://blog.treepeople.org/sustainablesolutions/2016/06/dont-tree-pruning-mistake', 'ramchandra@gmail.com'),
(29, 'One direction', 'http://one-direction-de.blogspot.com/', 'ramchandra@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Age` int(11) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone Number` int(11) NOT NULL,
  `Points` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Age`, `Password`, `Email`, `Phone Number`, `Points`) VALUES
(1, 'Ram Cahndra', 18, '5d41402abc4b2a76b9719d911017c592', 'ramchandra@gmail.com', 74839458, 20),
(2, 'Hardik Nigandhi', 19, '03cf3b091c7b1c4cb8c517e6ba781dda', 'hardik@yahoo.com', 9048374, 0),
(5, 'kumar', 12, 'e14d832f844ebf077fcccd668947dde3', 'lol@lol', 8181, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
