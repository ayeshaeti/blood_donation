-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2016 at 08:56 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blooddonation`
--

-- --------------------------------------------------------

--
-- Table structure for table `demand`
--

CREATE TABLE `demand` (
  `dpid` int(5) NOT NULL,
  `bagid` int(15) NOT NULL,
  `date` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `did` int(5) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `bgroup` varchar(35) NOT NULL,
  `contactno` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mreport`
--

CREATE TABLE `mreport` (
  `mdid` int(25) NOT NULL,
  `mdname` varchar(50) NOT NULL,
  `address` varchar(35) NOT NULL,
  `mdiseases` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pid` int(5) NOT NULL,
  `pname` varchar(25) NOT NULL,
  `bgroup` varchar(35) NOT NULL,
  `diseases` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

CREATE TABLE `storage` (
  `sid` int(5) NOT NULL,
  `donor` varchar(50) NOT NULL,
  `group` varchar(35) NOT NULL,
  `expdate` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(5) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `user_email` varchar(35) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demand`
--
ALTER TABLE `demand`
  ADD PRIMARY KEY (`dpid`),
  ADD UNIQUE KEY `bagid` (`bagid`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`did`),
  ADD UNIQUE KEY `dname` (`dname`);

--
-- Indexes for table `mreport`
--
ALTER TABLE `mreport`
  ADD PRIMARY KEY (`mdid`),
  ADD UNIQUE KEY `mdname` (`mdname`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `pname` (`pname`);

--
-- Indexes for table `storage`
--
ALTER TABLE `storage`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `donor` (`donor`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `demand`
--
ALTER TABLE `demand`
  MODIFY `dpid` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `did` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mreport`
--
ALTER TABLE `mreport`
  MODIFY `mdid` int(25) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pid` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `storage`
--
ALTER TABLE `storage`
  MODIFY `sid` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
