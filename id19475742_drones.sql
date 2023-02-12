-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 06:22 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id19475742_drones`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Name` text DEFAULT NULL,
  `DateOfBirth` varchar(100) DEFAULT NULL,
  `Gender` text DEFAULT NULL,
  `Age` int(100) DEFAULT NULL,
  `Phone` varchar(100) DEFAULT NULL,
  `userno` int(50) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Name`, `DateOfBirth`, `Gender`, `Age`, `Phone`, `userno`) VALUES
(1, 'prat', '08242022', 'male', 18, '9999999999', 24),
(3, 'Prathamesh', '2222222222', 'math', 65, '0008292022', 27),
(4, 'me', '12121212', 'kijuhyg', 653, '1212121212', 28),
(6, 'fg', 'fghn', 'hg', 18, '4582887587', 0),
(7, 'ik', 'il', 'yik', 0, 'uk', 0),
(8, 'prat', '06082002', 'oiuyhgf', 65, '3625143625', 0);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `ID` int(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Age` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`ID`, `FirstName`, `LastName`, `Gender`, `Age`, `Password`, `Phone`) VALUES
(4, 'More', 'yj', 'male', 'ji;', '', 'ih'),
(5, 'Agrawal', 'o', 'o', 'o', 'o', 'o'),
(6, 'Vipul', 'ghkh', 'khgk', 'hgk', 'kghk', 'ghk'),
(7, 'Chole', 'ghkjg', 'gjuk', 'gkl', 'jl', '14');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `ID` int(100) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Age` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Doctor` varchar(100) NOT NULL DEFAULT 'Agrawal',
  `Slot` date DEFAULT NULL,
  `Time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`ID`, `FirstName`, `LastName`, `Gender`, `Phone`, `Age`, `Password`, `Doctor`, `Slot`, `Time`) VALUES
(1, 'Prathamesh ', 'Vitthalrao Bhagat', 'Male', '987654321', '20', '2', 'Agrawal', '2023-02-17', '10:00:00'),
(2, 'yhjglcu', 'yjcilctul', 'jjflry', '987654321kyd', 'yjd', '2', 'Agrawal', '2023-02-17', '11:15:00'),
(3, 'yhjytjet', 'yj', 'jj', '987654321', 'yjd', '2', 'Agrawal', '2023-02-17', '01:15:00'),
(4, 'yhj', 'yj', 'jj', '987654321', 'yjd', '2', 'Agrawal', '2023-02-17', '01:30:00'),
(5, 'yhj', 'yj', 'jj', '987654321', 'yjd', '2', 'Agrawal', '2023-02-17', '02:00:00'),
(6, 'yhj', 'yj', 'jj', '987654321', 'yjd', '2', 'Agrawal', '2023-02-19', '01:30:00'),
(7, 'hi;hy', ';', ';', '8533', '238', '2', 'Agrawal', '2023-02-19', '11:00:00'),
(8, 'hi;hy', ';', ';', '8533', '238', '2', 'Agrawal', '2023-02-19', '02:30:00'),
(9, 'hfjdjf', 'jtyidtjset', 'Male', '5', '2', '32', 'Agrawal', '2023-02-19', '01:15:00'),
(10, 'gguyi', 'utgio', 'ou', '5255253', '2', '452', 'More', '2023-02-17', NULL),
(13, '2', '2', '2', '2', '2', '2', 'Agrawal', '2023-02-19', '04:30:00'),
(20, '2', '2', '2', '2', '2', '2', 'Agrawal', '2023-02-17', '03:30:00'),
(23, 'yhj', 'yj', 'jj', '987654321b', 'yjd', '2', 'More', '2023-02-19', '02:30:00'),
(24, 'yhj', 'yj', 'jj', '987654321c', 'yjd', '2', 'More', '2023-02-17', '09:00:00'),
(25, 'yhj', 'yj', 'jj', '987654321', 'yjd', '2', 'More', '2023-02-21', '01:00:00'),
(27, 'hp', 'yjcilctultey', 'jjflry', '987654321a', 'yjd', '2', '', NULL, NULL),
(28, 'yhj', 'yj', 'jj', '987654321b', 'yjd', '2', '', NULL, NULL),
(32, 'ybhgh', 'yj', 'jj', '987654321b', 'yjd', '2', '', NULL, NULL),
(42, 'hp13', 'yjcilctultey', 'jjflry', '987654321az', 'yjd', '2', '', '2023-02-17', '12:00:00'),
(46, 'l', 'l', 'l', 'l', 'l', '1', 'Vipul', '2023-02-17', '03:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `DateOfBirth` varchar(100) NOT NULL,
  `Gender` text NOT NULL,
  `Age` int(100) NOT NULL,
  `Phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Name`, `DateOfBirth`, `Gender`, `Age`, `Phone`) VALUES
(1, 'poiuyg', '95296', 'oiuytrrtyui', 212, 'gyhgyjm'),
(2, 'sdsfg', 'eSFdgd', 'adfsgrthd', 9623, 'asdf'),
(3, 'ytfjgvb ', 'rt6gfbv c', 'etgfvx', 2321, 'rt54y65utyjhnvb'),
(4, 'esfrdgfth', 'ertyg', 'wadesfrdgty', 456, 'dsfgrthyju'),
(5, 'qadwsfgty', 'sdfg', 'sxdcfvg', 21, 'zsxdfrgt'),
(6, '652defrdgt', 'edfdrgtfh', 'desfrgdtfhy', 2132, 'sqwert5'),
(7, 'poiuyg', '95296', 'oiuytrrtyui', 212, 'gyhgyjm'),
(8, 'sdsfg', 'eSFdgd', 'adfsgrthd', 9623, 'asdf'),
(9, 'ytfjgvb ', 'rt6gfbv c', 'etgfvx', 2321, 'rt54y65utyjhnvb'),
(10, 'esfrdgfth', 'ertyg', 'wadesfrdgty', 456, 'dsfgrthyju'),
(11, 'qadwsfgty', 'sdfg', 'sxdcfvg', 21, 'zsxdfrgt'),
(12, '652defrdgt', 'edfdrgtfh', 'desfrgdtfhy', 2132, 'sqwert5'),
(13, 'poiuyg', '95296', 'oiuytrrtyui', 212, 'gyhgyjm'),
(14, 'sdsfg', 'eSFdgd', 'adfsgrthd', 9623, 'asdf'),
(15, 'ytfjgvb ', 'rt6gfbv c', 'etgfvx', 2321, 'rt54y65utyjhnvb'),
(16, 'esfrdgfth', 'ertyg', 'wadesfrdgty', 456, 'dsfgrthyju'),
(17, 'qadwsfgty', 'sdfg', 'sxdcfvg', 21, 'zsxdfrgt'),
(18, '652defrdgt', 'edfdrgtfh', 'desfrgdtfhy', 2132, 'sqwert5'),
(19, 'poiuyg', '95296', 'oiuytrrtyui', 212, 'gyhgyjm'),
(20, 'sdsfg', 'eSFdgd', 'adfsgrthd', 9623, 'asdf'),
(21, 'ytfjgvb ', 'rt6gfbv c', 'etgfvx', 2321, 'rt54y65utyjhnvb'),
(22, 'esfrdgfth', 'ertyg', 'wadesfrdgty', 456, 'dsfgrthyju'),
(23, 'qadwsfgty', 'sdfg', 'sxdcfvg', 21, 'zsxdfrgt'),
(24, '652defrdgt', 'edfdrgtfh', 'desfrgdtfhy', 2132, 'sqwert5'),
(25, 'bhagat', '33333333', 'female', 54, '3333333333'),
(26, 'knlknl', '46465', 'hvjhv', 54, 'kjhkfhxh\r\n'),
(27, 'knlknl', '46465', 'hvjhv', 54, 'kjhkfhxh\r\n'),
(28, 'Hello', '21212121', 'uyh', 56, '2121212121'),
(29, '0', '0', '0', 0, '0\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
