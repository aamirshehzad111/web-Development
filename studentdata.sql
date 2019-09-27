-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2019 at 10:43 PM
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
-- Database: `studentdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentdataapp`
--

CREATE TABLE `studentdataapp` (
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `uni` varchar(200) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `degree` varchar(20) NOT NULL,
  `cgpa` varchar(10) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdataapp`
--

INSERT INTO `studentdataapp` (`name`, `fname`, `uni`, `dept`, `degree`, `cgpa`, `id`) VALUES
('Aamir Shehzad', 'M Shehzad', 'UET Taxila', 'Software Engineering', '', '2.57', 1),
('Bilal Shahid1', 'M Shahid', 'UET Taxila', 'Civil Engineering', 'Master', '3.12', 2),
('Ali', 'Zeeshan', 'Nust', 'CS', 'Master', '2.87', 3),
('Ahsan', 'Abdulslam', 'UET', 'SE', 'Master', '3.12', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentdataapp`
--
ALTER TABLE `studentdataapp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentdataapp`
--
ALTER TABLE `studentdataapp`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
