-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2017 at 07:08 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mgm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindb`
--

CREATE TABLE `admindb` (
  `email` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admindb`
--

INSERT INTO `admindb` (`email`, `pass`) VALUES
('qwerty@g.c', '123');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `build` int(5) NOT NULL,
  `status` varchar(30) NOT NULL,
  `floor` int(3) NOT NULL,
  `room` int(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `bed` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`build`, `status`, `floor`, `room`, `email`, `bed`) VALUES
(101, 'APPROVED', 1, 1, 'sh@g.c', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hosteldb`
--

CREATE TABLE `hosteldb` (
  `name` varchar(30) NOT NULL,
  `pass` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `mob` bigint(13) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dob` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hosteldb`
--

INSERT INTO `hosteldb` (`name`, `pass`, `email`, `gender`, `mob`, `address`, `dob`) VALUES
('shradhu', 'sh', 'sh@g.c', 'Female', 9420763416, 'ghj', '1/11/1997'),
('12', '12', '12@d.c', 'Male', 9420763416, '155', '55'),
('12', '123', '12@d.c3', 'Male', 9420763416, '43423', '122'),
('12', '123', '12@d.c4', 'Male', 9420763416, '43423', '122'),
('12', '123', '12@d.c5', 'Male', 9420763416, '43423', '122');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `build` int(5) NOT NULL,
  `floor` int(5) NOT NULL,
  `room` int(5) NOT NULL,
  `bed` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`build`, `floor`, `room`, `bed`, `name`, `gender`, `email`) VALUES
(101, 1, 1, 2, '', '', ''),
(101, 1, 2, 1, '', '', ''),
(101, 1, 2, 2, '', '', ''),
(101, 2, 1, 1, '', '', ''),
(101, 2, 1, 2, '', '', ''),
(101, 2, 2, 1, '', '', ''),
(101, 2, 2, 2, '', '', ''),
(101, 3, 1, 1, '', '', ''),
(101, 3, 1, 2, '', '', ''),
(101, 3, 2, 1, '', '', ''),
(101, 3, 2, 2, '', '', ''),
(102, 1, 1, 1, '', '', ''),
(102, 1, 1, 2, '', '', ''),
(102, 1, 2, 1, '', '', ''),
(102, 1, 2, 2, '', '', ''),
(102, 2, 1, 1, '', '', ''),
(102, 2, 1, 2, '', '', ''),
(102, 2, 2, 1, '', '', ''),
(102, 2, 2, 2, '', '', ''),
(102, 3, 1, 1, '', '', ''),
(102, 3, 1, 2, '', '', ''),
(102, 3, 2, 1, '', '', ''),
(102, 3, 2, 2, '', '', ''),
(101, 1, 1, 1, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hosteldb`
--
ALTER TABLE `hosteldb`
  ADD UNIQUE KEY `email` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
