-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 10:27 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctors_appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `aid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `dspecs` varchar(50) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `adate` date NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`aid`, `pid`, `pname`, `dspecs`, `dname`, `adate`, `status`) VALUES
(4, 11, 'ashiq', 'cardiac', 'sudhin', '2020-01-21', 'approved'),
(6, 12, 'nikhil', 'cardiac', 'sudhin', '2020-01-22', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `did` int(11) NOT NULL,
  `d_regid` varchar(50) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `daddress` varchar(500) NOT NULL,
  `dgender` varchar(10) NOT NULL,
  `dspecs` varchar(50) NOT NULL,
  `ddob` date NOT NULL,
  `demail` varchar(50) NOT NULL,
  `dmobile` bigint(20) NOT NULL,
  `dpassword` varchar(50) NOT NULL,
  `dstatus` varchar(10) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`did`, `d_regid`, `dname`, `daddress`, `dgender`, `dspecs`, `ddob`, `demail`, `dmobile`, `dpassword`, `dstatus`) VALUES
(6, '1002', 'sudhin', 'idukki', 'Male', 'cardiac', '1995-12-11', 'sudhin@gmail.com', 9605399543, 'sudhin', 'approved'),
(7, '1002', 'Dr.Mujeeb Rahman', 'Aroor', 'Male', ' Allergist', '1995-12-11', 'mujeeb@gmail.com', 9966558874, 'mujeeb', 'approved'),
(8, '1002', 'Dr.Albin Joseph', 'Nedumkandam', 'Male', ' Psychiatrist', '1995-02-11', 'albin@gmail.com', 987456859, 'albin', 'approved'),
(9, '1003', 'Dr.Ashiq H', 'kakkazham', 'Male', ' Surgeon', '1995-12-11', 'ashiqh@gmail.com', 7777777777, 'ashiqh', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `pid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `paddress` varchar(100) NOT NULL,
  `pdob` date NOT NULL,
  `pmobile` bigint(20) NOT NULL,
  `pemail` varchar(100) NOT NULL,
  `pgender` varchar(10) NOT NULL,
  `ppassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`pid`, `pname`, `paddress`, `pdob`, `pmobile`, `pemail`, `pgender`, `ppassword`) VALUES
(11, 'ashiq', 'kakkazham', '1235-04-10', 789632541, 'ashiq@gmail.com', 'Female', 'ashiq'),
(12, 'nikhil', 'alappy', '2525-04-11', 789456230, 'nikhil@gmail.com', 'Other', 'nikhil'),
(30, 'kfhlehl', 'wedrftgyhj', '1595-02-11', 458, 'lrkgjl@gmail.com', 'Female', ''),
(31, 'appu', 'wertfghnm ', '1956-02-11', 54646465, 'fgh@gmail.com', 'Male', ''),
(32, 'ajumal', 'tvm', '1992-03-23', 5555555555, 'ajumal@gmail.com', 'Male', 'ajumaqw'),
(33, 'ajumal', 'tvm', '1992-03-23', 5555555555, 'ajumal@gmail.com', 'Male', 'ajumaqw'),
(34, 'ajumal', 'tvm', '1992-03-23', 5555555555, 'ajumal@gmail.com', 'Male', 'ajudfghjk'),
(35, 'wertg', 'werfg', '0369-05-12', 9999999999, 'erfg@gmail.com', 'Female', 'erfgqwedrfghjk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`did`),
  ADD UNIQUE KEY `demail` (`demail`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
