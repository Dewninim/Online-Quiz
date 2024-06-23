-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2019 at 05:15 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `digitalexam`
--

-- --------------------------------------------------------

--
-- Table structure for table `ques_info`
--

CREATE TABLE IF NOT EXISTS `ques_info` (
  `quesid` int(11) NOT NULL AUTO_INCREMENT,
  `quizid` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  `opt1` varchar(11) NOT NULL,
  `opt2` varchar(11) NOT NULL,
  `opt3` varchar(11) NOT NULL,
  `opt4` varchar(11) NOT NULL,
  `ans` varchar(11) NOT NULL,
  PRIMARY KEY (`quesid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=104 ;

--
-- Dumping data for table `ques_info`
--

INSERT INTO `ques_info` (`quesid`, `quizid`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `ans`) VALUES
(33, 91, 'Inverse of sinX', 'cosX', 'cosecX', 'cotX', 'tanX', '2'),
(34, 91, 'What is the value of cos0', '1', '2', '0', 'infinite', '1'),
(35, 91, 'sinX / cosX', 'cotX', 'cosecX', 'tanX', 'none', '3'),
(52, 98, 'Who has bee', 'Johnjoseph', 'VanajaN.Sar', 'MahendraSin', 'S. Ramesh', '4'),
(53, 98, 'The central', 'CBI', 'RBI', 'SBI', 'PNB', '2'),
(54, 98, 'ICICI is th', 'Chemical in', 'Bureau', 'Corporation', 'Financial I', '4'),
(55, 98, 'Gilt-edged ', 'bullion mar', 'market of g', 'market of g', 'market of p', '2'),
(56, 98, 'india chang', 'april 1995', 'april 1957', 'april 1958', 'april 1959', '2'),
(57, 98, 'on july 12,asjsD>gjbdsmngbms,dgbm,\n,mnbsdf,mnbsdg,mnbsd,mbgvkndfg,ndf,mgndfmngb,mdfnbg\n\n,mdfnbg,mdfnbgmndfbgmnbdgmndfg\nzdfzd.djbzd\ndzfsdg', 'RBI', 'NABARD', 'EXIM Bank', 'None of the', '2'),
(58, 98, 'the central', 'farmers', 'state co-op', 'land develo', 'central  go', '2'),
(59, 98, 'resever  ba', '1935', '1942', '1949', '1969', '3'),
(67, 99, 'erjjskfjsdk.jf', '', '', '', '', ''),
(68, 99, '', '', '', '', '', ''),
(69, 100, 'adj,asfj,', '', '', '', '', ''),
(70, 101, 'h                                                                                                                                                                 gtfghf nghjtgjhg hghgf', '', '', '', '', ''),
(71, 102, 'jyyfyjhjh', '', '', '', '', ''),
(72, 102, '', '', '', '', '', ''),
(73, 103, 'asdklnasddjasdjbasdjbasmdbasmdnbasdbasdvasbndv', 'jh', 'j,h', ',jhv', ',jhv', '2'),
(74, 103, '', '', '', '', '', ''),
(75, 103, '', '', '', '', '', ''),
(76, 103, '', '', '', '', '', ''),
(77, 103, '', '', '', '', '', ''),
(78, 103, '', '', '', '', '', ''),
(79, 103, '', '', '', '', '', ''),
(80, 103, '', '', '', '', '', ''),
(81, 103, '', '', '', '', '', ''),
(82, 103, '', '', '', '', '', ''),
(83, 103, '', '', '', '', '', ''),
(84, 103, '', '', '', '', '', ''),
(85, 103, '', '', '', '', '', ''),
(86, 103, '', '', '', '', '', ''),
(87, 103, '', '', '', '', '', ''),
(88, 103, '', '', '', '', '', ''),
(89, 103, '', '', '', '', '', ''),
(90, 103, '', '', '', '', '', ''),
(91, 103, '', '', '', '', '', ''),
(92, 103, '', '', '', '', '', ''),
(93, 103, '', '', '', '', '', ''),
(94, 103, '', '', '', '', '', ''),
(95, 103, '', '', '', '', '', ''),
(96, 103, '', '', '', '', '', ''),
(97, 103, '', '', '', '', '', ''),
(98, 0, '34', 'b', '', '', '', ''),
(99, 0, '35', 'c', '', '', '', ''),
(100, 0, '34', 'b', '', '', '', ''),
(101, 0, '35', 'c', '', '', '', ''),
(102, 0, '34', 'b', '', '', '', ''),
(103, 0, '35', 'c', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_info`
--

CREATE TABLE IF NOT EXISTS `quiz_info` (
  `quizid` int(11) NOT NULL AUTO_INCREMENT,
  `quizname` varchar(20) NOT NULL,
  `quiztotalq` int(11) NOT NULL,
  `quizdetails` text NOT NULL,
  `quizdate` date NOT NULL,
  PRIMARY KEY (`quizid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=105 ;

--
-- Dumping data for table `quiz_info`
--

INSERT INTO `quiz_info` (`quizid`, `quizname`, `quiztotalq`, `quizdetails`, `quizdate`) VALUES
(91, 'Maths', 3, 'Trigonometry', '2019-07-24'),
(98, 'GK', 15, 'India, Current affairs', '2019-07-26'),
(99, 'Maths', 2, '', '2019-07-26'),
(100, 'asdkjbaskjf', 1, 'jhvhm', '2019-07-26'),
(101, 'GK', 1, '', '2019-07-26'),
(102, 'asdkas', 2, 'kjb', '2019-07-26'),
(103, 'fkjbsfjgy,jh', 25, 'jkjb', '2019-07-26'),
(104, 'Hi', 2, 'asfkjsdf', '2019-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `result_info`
--

CREATE TABLE IF NOT EXISTS `result_info` (
  `resultid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(25) NOT NULL,
  `quizid` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`resultid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=120 ;

--
-- Dumping data for table `result_info`
--

INSERT INTO `result_info` (`resultid`, `uid`, `quizid`, `marks`, `date`) VALUES
(66, 0, 91, 0, '2019-07-26'),
(91, 0, 91, 1, '2019-07-26'),
(93, 0, 91, 1, '2019-07-26'),
(94, 0, 91, 1, '2019-07-26'),
(95, 0, 91, 1, '2019-07-26'),
(96, 0, 91, 1, '2019-07-26'),
(97, 0, 91, 1, '2019-07-26'),
(98, 0, 91, 1, '2019-07-26'),
(99, 0, 91, 1, '2019-07-26'),
(100, 0, 91, 1, '2019-07-26'),
(101, 0, 91, 1, '2019-07-26'),
(102, 0, 91, 1, '2019-07-26'),
(103, 0, 91, 1, '2019-07-26'),
(104, 0, 91, 1, '2019-07-26'),
(105, 0, 91, 0, '2019-07-26'),
(106, 0, 91, 0, '2019-07-26'),
(107, 0, 91, 0, '2019-07-26'),
(108, 0, 91, 0, '2019-07-26'),
(109, 0, 91, 0, '2019-07-26'),
(110, 0, 91, 0, '2019-07-26'),
(111, 0, 91, 0, '2019-07-26'),
(112, 0, 91, 0, '2019-07-26'),
(113, 0, 91, 0, '2019-07-26'),
(114, 0, 91, 1, '2019-07-26'),
(115, 0, 91, 1, '2019-07-26'),
(116, 0, 91, 0, '2019-07-26'),
(117, 0, 91, 0, '2019-07-26'),
(118, 0, 91, 0, '2019-07-26'),
(119, 0, 91, 1, '2019-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `uname` varchar(25) NOT NULL,
  `uemail` varchar(30) NOT NULL,
  `umobile` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `userpass` varchar(20) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `regdate` date NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`uid`, `uname`, `uemail`, `umobile`, `username`, `userpass`, `usertype`, `regdate`) VALUES
(3, 'sid', 'sid@gmail.com', '9753187740', 'sid', 'sid', 'admin', '2019-06-17'),
(12, 'Nitin', 'assbd@gmail.com', 'rryrrty', 'nitin', 'nitin', 'user', '2019-07-20');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
