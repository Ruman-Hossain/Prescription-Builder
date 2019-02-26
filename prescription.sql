-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2019 at 12:49 PM
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
  `sl` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `instruction_time` varchar(50) NOT NULL,
  `instruction` varchar(100) NOT NULL,
  `period` int(11) NOT NULL,
  `period_type` varchar(20) NOT NULL,
  `remark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_medicine`
--

INSERT INTO `temp_medicine` (`id`, `sl`, `type`, `name`, `instruction_time`, `instruction`, `period`, `period_type`, `remark`) VALUES
(1, 1, 'capsule', 'Omeraprazole', '111', 'Before Eating', 30, 'days', 'If Gastric problem Occurs'),
(2, 2, 'Tablet', 'Paracitamol', '101', 'After Eating', 15, 'Days', 'If Headache occurs');

-- --------------------------------------------------------

--
-- Table structure for table `temp_patient`
--

CREATE TABLE `temp_patient` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `age_type` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `next_appointment` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_patient`
--

INSERT INTO `temp_patient` (`id`, `name`, `phone`, `age`, `age_type`, `sex`, `next_appointment`) VALUES
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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `temp_patient`
--
ALTER TABLE `temp_patient`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `temp_test`
--
ALTER TABLE `temp_test`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
