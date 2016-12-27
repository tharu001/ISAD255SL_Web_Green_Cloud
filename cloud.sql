-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2016 at 08:06 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cloud`
--

-- --------------------------------------------------------

--
-- Table structure for table `attachment`
--

CREATE TABLE IF NOT EXISTS `attachment` (
  `attid` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(1000) NOT NULL,
  `type` varchar(50) NOT NULL,
  `size` double NOT NULL,
  `date` datetime NOT NULL,
  `UID` varchar(50) NOT NULL,
  PRIMARY KEY (`attid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `identity`
--

CREATE TABLE IF NOT EXISTS `identity` (
  `identityNo` int(11) NOT NULL,
  PRIMARY KEY (`identityNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identity`
--

INSERT INTO `identity` (`identityNo`) VALUES
(105670),
(105671),
(105672),
(105673),
(105674),
(105675),
(105676),
(105677),
(105678),
(105679),
(105680);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `studentID` int(11) NOT NULL,
  `first_name` varchar(80) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `password` varchar(13) NOT NULL,
  `repassword` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `terms` varchar(3) NOT NULL,
  `plan` varchar(12) NOT NULL,
  `mLast` varchar(50) DEFAULT NULL,
  `hobby` varchar(50) DEFAULT NULL,
  `born` varchar(50) DEFAULT NULL,
  `tv` varchar(50) DEFAULT NULL,
  `celeb` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`studentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`studentID`, `first_name`, `last_name`, `password`, `repassword`, `email`, `birth_date`, `terms`, `plan`, `mLast`, `hobby`, `born`, `tv`, `celeb`) VALUES
(105670, 'awe', 'asd', 'qwe', 'qwe', 'asd@gmail.com', '2012-12-12', 'on', 'limited', 'qwe', 'qwe', 'qwe', '', ''),
(105671, 'Kavinda', 'De Alwis', 'abc@123', 'abc@123', 'kavindadealwis@gmail.com', '1997-10-02', 'on', 'limited', '', 'Nothing', 'In Hospital', '', 'Kristen Stewart');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `UID` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UID`, `fname`, `lname`, `password`, `email`) VALUES
(105670, 'awe', 'asd', 'qwe', 'asd@gmail.com'),
(105671, 'Kavinda', 'De Alwis', 'abc@123', 'kavindadealwis@gmail.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `signup`
--
ALTER TABLE `signup`
  ADD CONSTRAINT `signup_ibfk_1` FOREIGN KEY (`studentID`) REFERENCES `identity` (`identityNo`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `signup` (`studentID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
