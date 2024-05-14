-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2024 at 03:07 PM
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
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

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
  `birthnumber` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `extension` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `birthday` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `placeofbirth` varchar(100) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `indigenous` varchar(100) NOT NULL,
  `pantawid` varchar(100) NOT NULL,
  `pantawidProgram` varchar(100) NOT NULL,
  `disability` varchar(100) NOT NULL,
  `learnerdisability` varchar(100) NOT NULL,
  `region_text` varchar(100) NOT NULL,
  `province_text` varchar(100) NOT NULL,
  `city_text` varchar(100) NOT NULL,
  `barangay_text` varchar(100) NOT NULL,
  `zipcode` varchar(100) NOT NULL,
  `permanent_region_text` varchar(100) NOT NULL,
  `permanent_province_text` varchar(100) NOT NULL,
  `permanent_city_text` varchar(100) NOT NULL,
  `permanent_barangay_text` varchar(100) NOT NULL,
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
  `guardians_phonenumber` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`id`, `schoolyear`, `gradelevel`, `lrn`, `reference`, `balikaral`, `birthnumber`, `lastname`, `firstname`, `middlename`, `extension`, `sex`, `birthday`, `age`, `placeofbirth`, `ip`, `indigenous`, `pantawid`, `pantawidProgram`, `disability`, `learnerdisability`, `region_text`, `province_text`, `city_text`, `barangay_text`, `zipcode`, `permanent_region_text`, `permanent_province_text`, `permanent_city_text`, `permanent_barangay_text`, `permanent_zipcode`, `fathers_lastname`, `fathers_firstname`, `fathers_middlename`, `fathers_phonenumber`, `mothers_lastname`, `mothers_firstname`, `mothers_middlename`, `mothers_phonenumber`, `guardians_lastname`, `guardians_firstname`, `guardians_middlename`, `guardians_phonenumber`) VALUES
(11, '2024 - 2025', 'Grade 12', 'Yes', '108297060075', 'No', '', 'Brosas', 'Kendrix', 'Britiller', 'Jr.', 'Male', '2000-06-14', '23', 'Liliw', 'No', '', 'No', '', '', '', 'Region IV-A CALABARZON', 'LAGUNA', 'LILIW', 'KANLURANG BUKAL', '4004', 'Region IV-A CALABARZON', 'LAGUNA', 'LILIW', 'KANLURANG BUKAL', '4002', 'asdasd', 'asdasd', 'asdasda', '+639562511012', 'asdasda', 'adasd', 'adas', '+639562511012', 'asdasd', 'adsasd', 'asdasdas', '+639562511012');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
