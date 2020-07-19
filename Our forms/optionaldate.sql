-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2020 at 03:14 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moh`
--

-- --------------------------------------------------------

--
-- Table structure for table `optionaldate`
--

CREATE TABLE `optionaldate` (
  `id` varchar(10) NOT NULL,
  `date1` date NOT NULL,
  `date2` date NOT NULL,
  `confirmedDate` text NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `optionaldate`
--

INSERT INTO `optionaldate` (`id`, `date1`, `date2`, `confirmedDate`, `time`) VALUES
('914022004V', '2020-08-01', '2020-08-08', '2020-08-08', '8.30 a.m.'),
('987211324v', '2020-07-07', '2020-07-17', '2020-07-07', ''),
('987211326v', '2020-07-08', '2020-07-17', '2020-07-17', ''),
('987211329v', '2020-07-23', '2020-07-18', '2020-07-18', ''),
('987211345v', '2020-08-08', '2020-08-07', '2020-08-08', ''),
('987211362v', '2020-08-07', '2020-08-08', '2020-08-08', '10.30 a.m.'),
('987211367v', '2020-07-25', '2020-07-25', '2020-07-25', ''),
('987211700v', '2020-07-25', '2020-08-08', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `optionaldate`
--
ALTER TABLE `optionaldate`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
