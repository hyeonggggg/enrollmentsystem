-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2024 at 04:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enrollmentsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`) VALUES
(1, 'admin', 'admin12345', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `id` int(11) NOT NULL,
  `schoolyear` varchar(100) NOT NULL,
  `gradelevel` varchar(100) NOT NULL,
  `lrn` varchar(100) NOT NULL,
  `reference` varchar(100) NOT NULL,
  `balikaral` varchar(100) NOT NULL,
  `transfer` varchar(100) NOT NULL,
  `birthnumber` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `extension` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `birthday` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `mother_tongue` varchar(100) NOT NULL,
  `placeofbirth` varchar(100) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `indigenous` varchar(100) NOT NULL,
  `pantawid` varchar(100) NOT NULL,
  `pantawidProgram` varchar(100) NOT NULL,
  `disability` varchar(100) NOT NULL,
  `learnerdisability` varchar(100) NOT NULL,
  `housenumber_text` varchar(100) NOT NULL,
  `streetname_text` varchar(100) NOT NULL,
  `barangay_text` varchar(100) NOT NULL,
  `city_text` varchar(100) NOT NULL,
  `province_text` varchar(100) NOT NULL,
  `country_text` varchar(100) NOT NULL,
  `zipcode` varchar(100) NOT NULL,
  `permanent_housenumber_text` varchar(100) NOT NULL,
  `permanent_streetname_text` tinytext NOT NULL,
  `permanent_barangay_text` varchar(100) NOT NULL,
  `permanent_city_text` varchar(100) NOT NULL,
  `permanent_province_text` varchar(100) NOT NULL,
  `permanent_country_text` varchar(100) NOT NULL,
  `permanent_zipcode` varchar(100) NOT NULL,
  `fathers_lastname` varchar(100) NOT NULL,
  `fathers_firstname` varchar(100) NOT NULL,
  `fathers_middlename` varchar(100) NOT NULL,
  `fathers_phonenumber` varchar(100) NOT NULL,
  `mothers_lastname` varchar(100) NOT NULL,
  `mothers_firstname` varchar(100) NOT NULL,
  `mothers_middlename` varchar(100) NOT NULL,
  `mothers_phonenumber` varchar(100) NOT NULL,
  `guardians_lastname` varchar(100) NOT NULL,
  `guardians_firstname` varchar(100) NOT NULL,
  `guardians_middlename` varchar(100) NOT NULL,
  `guardians_phonenumber` varchar(100) NOT NULL,
  `lastgradelevel` varchar(100) NOT NULL,
  `lastschoolyear` varchar(100) NOT NULL,
  `lastschoolattended` varchar(100) NOT NULL,
  `schoolid` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `track` varchar(100) NOT NULL,
  `strand` varchar(100) NOT NULL,
  `modality` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `rank` varchar(100) NOT NULL,
  `track` varchar(100) NOT NULL,
  `type` enum('Principal','Teacher','Subject Group Head','Senior High School Coordinator') NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `firstName`, `middleName`, `lastName`, `position`, `rank`, `track`, `type`, `picture`) VALUES
(1, 'ROMEO', 'M', 'SULIGUIN', 'Principal II', '', 'Not Applicable', 'Principal', ''),
(2, 'ELIAZAR', 'O', 'ESTEBESA', 'Master Teacher I', '', 'Not Applicable', 'Senior High School Coordinator', ''),
(4, 'ELIAZAR', 'O', 'ESTEBESA', 'Master Teacher I', '', 'STEM', 'Subject Group Head', ''),
(5, 'NIEVA', 'O', 'BUENSOCESO', 'Teacher III', '', 'STEM', 'Teacher', ''),
(6, 'SHIELA', 'C', 'NARTE', 'Teacher II', '', 'STEM', 'Teacher', ''),
(7, 'JOSEPH', 'C', 'PANGAYAO', 'Special Science Teacher I', '', 'STEM', 'Teacher', ''),
(8, 'MIKO REY', 'P', 'PEREZ', 'Special Science Teacher I', '', 'STEM', 'Teacher', ''),
(9, 'THOMAS JOSEPH', 'DA', 'VIRTUCIO', 'Special Science Teacher I', '', 'STEM', 'Teacher', ''),
(10, 'ARIENE MAY', 'R', 'URRETE', 'Special Science Teacher I', '', 'STEM', 'Teacher', ''),
(11, 'REGINA', 'B', 'ARANZA', 'Teacher I', '', 'STEM', 'Teacher', '');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`id`, `name`, `username`, `password`) VALUES
(1, 'super', 'super', 'super123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
