-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2019 at 07:42 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prescription`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'hasin manjare', 'Ü›ÛRÐMÂ\06ÛØ1>ÐU?..H@Si./n/?');

-- --------------------------------------------------------

--
-- Table structure for table `c_c`
--

CREATE TABLE IF NOT EXISTS `c_c` (
`c_id` int(50) NOT NULL,
  `c_c` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_profile`
--

CREATE TABLE IF NOT EXISTS `doctor_profile` (
`id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `degree` varchar(50) NOT NULL,
  `institution` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `doctor_profile`
--

INSERT INTO `doctor_profile` (`id`, `name`, `designation`, `phone`, `mail`, `address`, `degree`, `institution`) VALUES
(1, 'DR Hasin Mahmud', 'MBBS', '01751465611', 'dfsdfsdfsfds', 'Parkmore,Rangpur', 'lecturar', 'dept of eye,RPMC');

-- --------------------------------------------------------

--
-- Table structure for table `having_time`
--

CREATE TABLE IF NOT EXISTS `having_time` (
`id` int(50) NOT NULL,
  `having_time` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `having_time`
--

INSERT INTO `having_time` (`id`, `having_time`) VALUES
(1, 'before_eating'),
(2, 'after_eating');

-- --------------------------------------------------------

--
-- Table structure for table `instruction`
--

CREATE TABLE IF NOT EXISTS `instruction` (
`ins_id` int(50) NOT NULL,
  `instruction` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `instruction_time`
--

CREATE TABLE IF NOT EXISTS `instruction_time` (
`ins_time_id` int(50) NOT NULL,
  `ins_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE IF NOT EXISTS `medicine` (
`mid` int(50) NOT NULL,
  `medicin_name` varchar(50) NOT NULL,
  `med_preparation` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`mid`, `medicin_name`, `med_preparation`, `company`) VALUES
(1, 'tuffnil', 'painkiller', 'skf'),
(2, '&amp;*^&amp;%$%$%$&amp;^*^&amp;*', '(*&amp;*(&amp;*%^%^&amp;&amp;^&amp;', '*&amp;&amp;*^&amp;^&amp;%^%'),
(3, '&amp;*^&amp;%$%$%$&amp;^*^&amp;*', '(*&amp;*(&amp;*%^%^&amp;&amp;^&amp;', '*&amp;&amp;*^&amp;^&amp;%^%'),
(4, '&amp;*^&amp;%$%$%$&amp;^*^&amp;*', '(*&amp;*(&amp;*%^%^&amp;&amp;^&amp;', '*&amp;&amp;*^&amp;^&amp;%^%');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
`pid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mid` varchar(50) NOT NULL,
  `ins_time_id` varchar(50) NOT NULL,
  `period_id` varchar(50) NOT NULL,
  `quantity_id` varchar(50) NOT NULL,
  `c_id` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`pid`, `name`, `age`, `sex`, `phone`, `date`, `mid`, `ins_time_id`, `period_id`, `quantity_id`, `c_id`, `type`) VALUES
(1, 'hasin', '24 Years', 'Male', '01751465611', '2019-02-22 15:01:00', 'napa extra', 'after_eating', '1+1+1', '50mg', 'nothing', 'tab');

-- --------------------------------------------------------

--
-- Table structure for table `period`
--

CREATE TABLE IF NOT EXISTS `period` (
`pid` int(50) NOT NULL,
  `period` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `period`
--

INSERT INTO `period` (`pid`, `period`) VALUES
(1, '1+0+0'),
(2, '0+1+0'),
(3, '0+0+1'),
(4, '1+0+1'),
(5, '1+1+1');

-- --------------------------------------------------------

--
-- Table structure for table `quantity`
--

CREATE TABLE IF NOT EXISTS `quantity` (
`q_id` int(50) NOT NULL,
  `quantity` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `quantity`
--

INSERT INTO `quantity` (`q_id`, `quantity`) VALUES
(1, '0.25mg'),
(2, '.25ml'),
(3, '50mg');

-- --------------------------------------------------------

--
-- Table structure for table `remarks`
--

CREATE TABLE IF NOT EXISTS `remarks` (
`re_id` int(50) NOT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `temp_info`
--

CREATE TABLE IF NOT EXISTS `temp_info` (
`id` int(50) NOT NULL,
  `test_mdeicin` varchar(50) NOT NULL,
  `period_id` varchar(50) NOT NULL,
  `quantity_id` varchar(50) NOT NULL,
  `having_time_id` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `temp_info`
--

INSERT INTO `temp_info` (`id`, `test_mdeicin`, `period_id`, `quantity_id`, `having_time_id`, `type`) VALUES
(1, 'napa extra', '1+1+1', '50mg', 'after_eating', 'tab');

-- --------------------------------------------------------

--
-- Table structure for table `temp_patient`
--

CREATE TABLE IF NOT EXISTS `temp_patient` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `agetype` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `cc` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `temp_patient`
--

INSERT INTO `temp_patient` (`id`, `name`, `age`, `agetype`, `sex`, `phone`, `date`, `cc`) VALUES
(1, 'hasin', 24, 'Years', 'Male', '01751465611', '2019-02-22 15:01:00', 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
`tid` int(50) NOT NULL,
  `test_name` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`tid`, `test_name`) VALUES
(1, 'ecg'),
(2, 'fdsf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_c`
--
ALTER TABLE `c_c`
 ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `doctor_profile`
--
ALTER TABLE `doctor_profile`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `having_time`
--
ALTER TABLE `having_time`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instruction`
--
ALTER TABLE `instruction`
 ADD PRIMARY KEY (`ins_id`);

--
-- Indexes for table `instruction_time`
--
ALTER TABLE `instruction_time`
 ADD PRIMARY KEY (`ins_time_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
 ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
 ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `period`
--
ALTER TABLE `period`
 ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `quantity`
--
ALTER TABLE `quantity`
 ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `remarks`
--
ALTER TABLE `remarks`
 ADD PRIMARY KEY (`re_id`);

--
-- Indexes for table `temp_info`
--
ALTER TABLE `temp_info`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_patient`
--
ALTER TABLE `temp_patient`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
 ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `c_c`
--
ALTER TABLE `c_c`
MODIFY `c_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `doctor_profile`
--
ALTER TABLE `doctor_profile`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `having_time`
--
ALTER TABLE `having_time`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `instruction`
--
ALTER TABLE `instruction`
MODIFY `ins_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `instruction_time`
--
ALTER TABLE `instruction_time`
MODIFY `ins_time_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
MODIFY `mid` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `period`
--
ALTER TABLE `period`
MODIFY `pid` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `quantity`
--
ALTER TABLE `quantity`
MODIFY `q_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `remarks`
--
ALTER TABLE `remarks`
MODIFY `re_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `temp_info`
--
ALTER TABLE `temp_info`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `temp_patient`
--
ALTER TABLE `temp_patient`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
MODIFY `tid` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
