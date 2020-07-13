-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jul 13, 2020 at 02:44 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `hoscliniccare`
--

CREATE TABLE `hoscliniccare` (
  `patient_id` int(11) NOT NULL,
  `date1` date NOT NULL,
  `poa` text NOT NULL,
  `weight1` text NOT NULL,
  `sugar` text NOT NULL,
  `albumin` text NOT NULL,
  `oedema` text NOT NULL,
  `systolic` text NOT NULL,
  `diastolic` text NOT NULL,
  `fundalheight` text NOT NULL,
  `fundalheight1` text NOT NULL,
  `lie` text NOT NULL,
  `presentation` text NOT NULL,
  `fm` text NOT NULL,
  `fhs` text NOT NULL,
  `designation` text NOT NULL,
  `donext` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `hoscliniccare`
--

INSERT INTO `hoscliniccare` (`patient_id`, `date1`, `poa`, `weight1`, `sugar`, `albumin`, `oedema`, `systolic`, `diastolic`, `fundalheight`, `fundalheight1`, `lie`, `presentation`, `fm`, `fhs`, `designation`, `donext`) VALUES
(2, '0000-00-00', '35', '', 'Green', 'NIL', '+', '', '', '', '', 'LL', 'Cephalic', '+', '+', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `pg7`
--

CREATE TABLE `pg7` (
  `patient_id` int(11) DEFAULT NULL,
  `hosptal` varchar(255) DEFAULT NULL,
  `birth_weight` double DEFAULT NULL,
  `poa` varchar(255) DEFAULT NULL,
  `live_birth` varchar(255) DEFAULT NULL,
  `still_birth` varchar(255) DEFAULT NULL,
  `abs` varchar(255) DEFAULT NULL,
  `del_dt` date DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `del_mod` varchar(255) DEFAULT NULL,
  `ep` varchar(255) DEFAULT NULL,
  `bt` varchar(255) DEFAULT NULL,
  `ve` varchar(255) DEFAULT NULL,
  `mc` varchar(255) DEFAULT NULL,
  `infect` varchar(255) DEFAULT NULL,
  `fpm` varchar(255) DEFAULT NULL,
  `cm` varchar(255) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `danger` varchar(255) DEFAULT NULL,
  `bf` varchar(255) DEFAULT NULL,
  `bp` varchar(255) DEFAULT NULL,
  `vita` varchar(255) DEFAULT NULL,
  `rubella` varchar(255) DEFAULT NULL,
  `antid` varchar(255) DEFAULT NULL,
  `diags` varchar(255) DEFAULT NULL,
  `chdr` varchar(255) DEFAULT NULL,
  `presc` varchar(255) DEFAULT NULL,
  `reff` varchar(255) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  `dis_dt` date DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `pg7`
--

INSERT INTO `pg7` (`patient_id`, `hosptal`, `birth_weight`, `poa`, `live_birth`, `still_birth`, `abs`, `del_dt`, `sex`, `del_mod`, `ep`, `bt`, `ve`, `mc`, `infect`, `fpm`, `cm`, `reason`, `danger`, `bf`, `bp`, `vita`, `rubella`, `antid`, `diags`, `chdr`, `presc`, `reff`, `other`, `dis_dt`, `notes`) VALUES
(2, '', 3, '3', 'dsdsf', 'fefefe', '', '2020-04-23', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'T', 'T', 'sadsd', 'Yes', 'Yes', '', 'Yes', 'Yes', 'Yes', 'Yes', '', 'Yes', 'Yes', 'Yes', 'dfasdasda', '', NULL, 'qweqweqweqwe');

-- --------------------------------------------------------

--
-- Table structure for table `usscan`
--

CREATE TABLE `usscan` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `date1` date NOT NULL,
  `poa` text NOT NULL,
  `ebw` text NOT NULL,
  `crl` text NOT NULL,
  `gest_sac` text NOT NULL,
  `bpd` text NOT NULL,
  `hc` text NOT NULL,
  `ac` text NOT NULL,
  `fl` text NOT NULL,
  `liquor` text NOT NULL,
  `placenta` text NOT NULL,
  `average_poa` text NOT NULL,
  `any_other` text NOT NULL,
  `designation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `usscan`
--

INSERT INTO `usscan` (`id`, `patient_id`, `date1`, `poa`, `ebw`, `crl`, `gest_sac`, `bpd`, `hc`, `ac`, `fl`, `liquor`, `placenta`, `average_poa`, `any_other`, `designation`) VALUES
(1, 2, '2020-04-23', 'eewrwer', 'ewrwer', 'werwer', 'werwer', 'werwer', 'werwer', 'ewrewr', 'ewrwer', 'werwer', 'werwer', 'werwer', 'rtert', 'ertert'),
(2, 2, '2020-04-23', 'eewrwer', 'ewrwer', 'werwer', 'werwer', 'werwer', 'werwer', 'ewrewr', 'ewrwer', 'werwer', 'werwer', 'werwer', 'rtert', 'ertert');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hoscliniccare`
--
ALTER TABLE `hoscliniccare`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `usscan`
--
ALTER TABLE `usscan`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usscan`
--
ALTER TABLE `usscan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
