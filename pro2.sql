-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 12, 2013 at 03:40 PM
-- Server version: 5.5.34
-- PHP Version: 5.3.10-1ubuntu3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pro2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `sno` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `subject` text,
  `email` varchar(50) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sno`, `name`, `subject`, `email`, `message`) VALUES
(1, 'Nikhil garg', 'website bug', 'nikhilgarg2@gmail.com', ''),
(2, 'Nikhil Garg', 'not working', 'nikhilgarg2@gmail.com', ''),
(3, 'Nikhil Garg', 'hope', 'nikhilgarg2@gmail.com', ''),
(4, 'Nikhil Garg', 'hope till d end :p', 'nikhilgarg2@gmail.com', ''),
(5, 'Nikhil Garg', 'one more try', 'nikhilgarg2@gmail.com', ''),
(6, 'Nikhil Garg', 'Garg', 'nikhilgarg2@gmail.com', ''),
(7, 'Nikhil Garg', 'garg', 'lkjlkjlk', ''),
(8, 'km.,ml;k', 'lk;lknkj', 'k;lk;lk;kljh', ''),
(9, 'km.,ml;k', 'lk;lknkj', 'k;lk;lk;kljh', 'k;lkkjkljdlksadf'),
(10, 'Aman Grover', 'site working :P', 'amangro', 'hello world'),
(11, 'aman', 'rnfjeq', 'jqeje@ljeflj.com', 'jffljfOJBFW'),
(12, 'munender varshney', 'ldkfj', 'aldkjsdlk', 'sd;lfklkjsfdlkmvd.,mlsdfks;lgfmbklmls;lasdkfsda;lkjfdslkvm,.ml;afk;lakfdscmsda/ljvfsdlv');

-- --------------------------------------------------------

--
-- Table structure for table `aman`
--

CREATE TABLE IF NOT EXISTS `aman` (
  `cid` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aman`
--

INSERT INTO `aman` (`cid`) VALUES
('IC130'),
('IC1000'),
('IC200');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `cid` varchar(10) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `prof` varchar(50) NOT NULL,
  `year` int(3) NOT NULL,
  `credit` int(2) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`cid`, `cname`, `prof`, `year`, `credit`) VALUES
('IC1000', 'thermo', 'Varun', 16, 4),
('IC130', 'lkjf', 'Varun', 16, 3),
('IC200', 'Electro', 'Varun', 16, 3);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `kid` int(5) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`kid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`kid`, `uname`, `firstname`, `lastname`, `pass`) VALUES
(1, 'admin', NULL, NULL, '21232f297a57a5a743894a0e4a801fc3'),
(2, 'vd', 'Varun', 'Dutt', '5d41402abc4b2a76b9719d911017c592');

-- --------------------------------------------------------

--
-- Table structure for table `IC130`
--

CREATE TABLE IF NOT EXISTS `IC130` (
  `rollno` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IC130`
--

INSERT INTO `IC130` (`rollno`) VALUES
('B12013'),
('B12036');

-- --------------------------------------------------------

--
-- Table structure for table `IC200`
--

CREATE TABLE IF NOT EXISTS `IC200` (
  `rollno` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IC200`
--

INSERT INTO `IC200` (`rollno`) VALUES
('B12013');

-- --------------------------------------------------------

--
-- Table structure for table `IC1000`
--

CREATE TABLE IF NOT EXISTS `IC1000` (
  `rollno` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IC1000`
--

INSERT INTO `IC1000` (`rollno`) VALUES
('B12013');

-- --------------------------------------------------------

--
-- Table structure for table `munender`
--

CREATE TABLE IF NOT EXISTS `munender` (
  `cid` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `munender`
--

INSERT INTO `munender` (`cid`) VALUES
('IC130');

-- --------------------------------------------------------

--
-- Table structure for table `sarvesh`
--

CREATE TABLE IF NOT EXISTS `sarvesh` (
  `cid` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(5) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `roll` varchar(7) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `add` varchar(200) DEFAULT NULL,
  `guard` varchar(50) DEFAULT NULL,
  `gphone` int(11) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `Year` int(4) DEFAULT NULL,
  `Branch` varchar(35) DEFAULT NULL,
  `course` text,
  `credit` int(3) DEFAULT NULL,
  `plock` varchar(50) DEFAULT 'im.jpg',
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `user`, `pass`, `roll`, `name`, `phone`, `add`, `guard`, `gphone`, `email`, `Year`, `Branch`, `course`, `credit`, `plock`) VALUES
(1, 'nikhilgarg', '5d41402abc4b2a76b9719d911017c592', 'B12014', 'Nikhil Garg', 2147483647, 'IIT MANDI', 'P.K. Garg', 2147483647, 'nikhilgarg2@gmail.com', 16, 'CSE', '', 0, 'im.jpg'),
(2, 'aman', 'ccda1683d8c97f8f2dff2ea7d649b42c', 'B12013', 'aman', 98898, 'sadkjalskd', 'sdlkfjdslk', 987897, 'slakdj', 16, 'CSE', '', 0, '20131109151651.jpg'),
(3, 'sarvesh', 'ea99a69060675b32075406b9f310cbf9', 'b12056', 'Sarvesh', 989893889, 'kljgsadljbg;lo uogfk;lua goheg;ou haoeugh uoaehg uoeh ', 'kjabv hleua', 738678467, 'msjhdh@kjbadv.com', 16, 'cse', '', 0, '20131109114057.jpg'),
(4, 'munender', '202cb962ac59075b964b07152d234b70', 'B12036', 'munender varshney', 2147483647, 'fiijo;[', 'fuyhl', 434554, 'grdh', 16, 'CSE', '', 0, '20131109154204.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
