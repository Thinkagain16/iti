-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2016 at 02:43 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iti`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_log`
--

CREATE TABLE `admin_log` (
  `admin_id` int(4) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_log`
--

INSERT INTO `admin_log` (`admin_id`, `admin_name`, `admin_email`, `admin_username`, `admin_password`) VALUES
(1, 'Arijit hajra', 'arijithajra62@gmail.com', 'auid01', 'ee7e5fe76897c5dadfba1b6ee18b39e4');

-- --------------------------------------------------------

--
-- Table structure for table `instructor_log`
--

CREATE TABLE `instructor_log` (
  `ins_id` int(11) NOT NULL,
  `ins_name` varchar(50) NOT NULL,
  `ins_clg` varchar(50) NOT NULL,
  `ins_trade` varchar(50) NOT NULL,
  `ins_username` varchar(50) NOT NULL,
  `ins_password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor_log`
--

INSERT INTO `instructor_log` (`ins_id`, `ins_name`, `ins_clg`, `ins_trade`, `ins_username`, `ins_password`) VALUES
(1, 'Arijit Hajra', 'Basanti', 'Fitter', 'iid01', 'ee7e5fe76897c5dadfba1b6ee18b39e4');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `college_name` varchar(50) NOT NULL,
  `trade_name` varchar(50) NOT NULL,
  `instructor` varchar(50) NOT NULL,
  `item` varchar(50) NOT NULL,
  `prev_qty` int(10) NOT NULL,
  `curr_qty` int(10) NOT NULL,
  `remarks` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `college_name`, `trade_name`, `instructor`, `item`, `prev_qty`, `curr_qty`, `remarks`) VALUES
(1, 'Basanti', 'Fitter', 'A.Roy', 'Screw driver set', 10, 8, 'Tip blurred');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_log`
--
ALTER TABLE `admin_log`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `instructor_log`
--
ALTER TABLE `instructor_log`
  ADD PRIMARY KEY (`ins_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_log`
--
ALTER TABLE `admin_log`
  MODIFY `admin_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `instructor_log`
--
ALTER TABLE `instructor_log`
  MODIFY `ins_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
