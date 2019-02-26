-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2019 at 04:16 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alphatodelta`
--

-- --------------------------------------------------------

--
-- Table structure for table `school_details`
--

CREATE TABLE `school_details` (
  `sname` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `gtype` varchar(255) DEFAULT NULL,
  `medium` varchar(255) DEFAULT NULL,
  `board` varchar(255) DEFAULT NULL,
  `hostel` varchar(255) DEFAULT NULL,
  `mob` int(11) DEFAULT NULL,
  `sid` int(11) NOT NULL,
  `psw` varchar(11) DEFAULT NULL,
  `cpsw` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_details`
--

INSERT INTO `school_details` (`sname`, `type`, `gtype`, `medium`, `board`, `hostel`, `mob`, `sid`, `psw`, `cpsw`) VALUES
('APJ public school', 'Government', 'Co-ed', 'English', 'CBSE', 'No', 2147483647, 1, '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `mob` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `psw` varchar(255) DEFAULT NULL,
  `cpsw` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `gender`, `mob`, `email`, `psw`, `cpsw`) VALUES
('Akshay Singh', 'Male', 2147483647, 'abc@gmail.com', 'abcdefg', 'abcdefg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `school_details`
--
ALTER TABLE `school_details`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
