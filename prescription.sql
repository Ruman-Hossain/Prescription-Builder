-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2019 at 10:31 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prescription`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'ruman', '¹ÒE¿43‹«ÑMõXÑö?..H@Si./n/?');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_profile`
--

CREATE TABLE `doctor_profile` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `degree` varchar(50) NOT NULL,
  `institution` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_profile`
--

INSERT INTO `doctor_profile` (`id`, `name`, `designation`, `phone`, `mail`, `address`, `degree`, `institution`) VALUES
(1, 'DR Hasin Mahmud', 'MBBS', '01751465611', 'dfsdfsdfsfds', 'Parkmore,Rangpur', 'lecturar', 'dept of eye,RPMC');

-- --------------------------------------------------------

--
-- Table structure for table `temp_medicine`
--

CREATE TABLE `temp_medicine` (
  `id` int(11) UNSIGNED NOT NULL,
  `medtype` varchar(50) NOT NULL,
  `medname` varchar(100) NOT NULL,
  `daytimes` varchar(50) NOT NULL,
  `instruction` varchar(100) NOT NULL,
  `period` int(11) NOT NULL,
  `periodtype` varchar(20) NOT NULL,
  `remark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_medicine`
--

INSERT INTO `temp_medicine` (`id`, `medtype`, `medname`, `daytimes`, `instruction`, `period`, `periodtype`, `remark`) VALUES
(1, '4', '5', '55', '5', 5, '5', '5'),
(2, '4', '5', '5', '5', 55, '5', '5'),
(3, '5', '5', '5', '5', 5, '5', '5'),
(4, '5', '5', '5', '5', 5, '5', 'ruman'),
(5, 'wergh1', '1', '1', '1', 11, '11', '1'),
(6, 'ddddddddd', 'ddddddddddd', '1', '1', 11, '11', '1'),
(7, '1234', '2345', '134567', '1234567', 1123456, '1123456', '123456'),
(8, '12', '2222222222222222222222222222222', '134567', '1234567', 1123456, '1123456', '123456'),
(9, '8522', '585', '85', '8', 5, '5', '5');

-- --------------------------------------------------------

--
-- Table structure for table `temp_patient`
--

CREATE TABLE `temp_patient` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `agetype` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `nextappointment` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_patient`
--

INSERT INTO `temp_patient` (`id`, `name`, `phone`, `age`, `agetype`, `sex`, `nextappointment`) VALUES
(1, 'ruman', '01723974489', 24, 'years', 'male', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `temp_test`
--

CREATE TABLE `temp_test` (
  `id` int(11) UNSIGNED NOT NULL,
  `c_c` varchar(100) NOT NULL,
  `o_e` varchar(100) NOT NULL,
  `adv` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_test`
--

INSERT INTO `temp_test` (`id`, `c_c`, `o_e`, `adv`) VALUES
(1, 'Postural Neck pain', 'Postural Neck pain/xray', 'xray ecg blood test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_profile`
--
ALTER TABLE `doctor_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_medicine`
--
ALTER TABLE `temp_medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_patient`
--
ALTER TABLE `temp_patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_test`
--
ALTER TABLE `temp_test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctor_profile`
--
ALTER TABLE `doctor_profile`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `temp_medicine`
--
ALTER TABLE `temp_medicine`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `temp_patient`
--
ALTER TABLE `temp_patient`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `temp_test`
--
ALTER TABLE `temp_test`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
