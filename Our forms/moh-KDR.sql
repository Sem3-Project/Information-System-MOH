-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 04:00 PM
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
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` varchar(20) NOT NULL,
  `BloodGroup` varchar(3) NOT NULL,
  `BMI` varchar(10) NOT NULL,
  `height` varchar(10) NOT NULL,
  `allergies` varchar(250) NOT NULL,
  `Name_of_the_mother` varchar(250) NOT NULL,
  `Name_of_the_Hospital_Clinic` text NOT NULL,
  `age` varchar(100) NOT NULL,
  `Name_of_the_Consultant_Obstetrician` text NOT NULL,
  `Name_of_the_field_Clinic` text NOT NULL,
  `GramaNiladariDivision` text NOT NULL,
  `RegistrationNoEligibleFamilyRegister` text NOT NULL,
  `RegistrationDateEligibleFamilyRegister` date NOT NULL,
  `RegistrationNoPregnantmothersRegister` text NOT NULL,
  `RegistrationDatePregnantmothersRegister` date NOT NULL,
  `IdentifiedAntenatalRiskConditionsModifiers` text NOT NULL,
  `consanguinity` text NOT NULL,
  `RubellaImmunization` text NOT NULL,
  `PrePregnancyScreeningDone` text NOT NULL,
  `PreconceptionalFolicAcid` text NOT NULL,
  `Planed_pregnancy_or_not` text NOT NULL,
  `Historyofsubfertility` text NOT NULL,
  `Family_planing_method_last_used` text NOT NULL,
  `G` text NOT NULL,
  `P` text NOT NULL,
  `C` text NOT NULL,
  `AgeOfYoungestChild` varchar(100) NOT NULL,
  `LRMP` date NOT NULL,
  `EDD` date NOT NULL,
  `US_corrected_EDD` date NOT NULL,
  `POA_at_dating_Scan` varchar(100) NOT NULL,
  `Date_of_Quickening` text NOT NULL,
  `POA_at_Registration` text NOT NULL,
  `tele` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `BloodGroup`, `BMI`, `height`, `allergies`, `Name_of_the_mother`, `Name_of_the_Hospital_Clinic`, `age`, `Name_of_the_Consultant_Obstetrician`, `Name_of_the_field_Clinic`, `GramaNiladariDivision`, `RegistrationNoEligibleFamilyRegister`, `RegistrationDateEligibleFamilyRegister`, `RegistrationNoPregnantmothersRegister`, `RegistrationDatePregnantmothersRegister`, `IdentifiedAntenatalRiskConditionsModifiers`, `consanguinity`, `RubellaImmunization`, `PrePregnancyScreeningDone`, `PreconceptionalFolicAcid`, `Planed_pregnancy_or_not`, `Historyofsubfertility`, `Family_planing_method_last_used`, `G`, `P`, `C`, `AgeOfYoungestChild`, `LRMP`, `EDD`, `US_corrected_EDD`, `POA_at_dating_Scan`, `Date_of_Quickening`, `POA_at_Registration`, `tele`) VALUES
('987211362v', 'O+', '12.33', '102', 'No allergies.', 'Kumari Ramanayake', 'MOH devision', '24', 'Dr. fernando', '', 'Gampaha', '2', '2020-05-11', '4', '2020-07-15', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 't', '3', '6', '5', '1', '2020-07-16', '2020-07-09', '2020-07-19', 'no', 'yes', 'no', 332222333);

-- --------------------------------------------------------

--
-- Table structure for table `data2`
--

CREATE TABLE `data2` (
  `id` varchar(20) NOT NULL,
  `Companion` date NOT NULL,
  `Intended_Hospital_Delivery` varchar(150) NOT NULL,
  `Intended_Hospital_Emergency` varchar(150) NOT NULL,
  `Mode_of_Transport_Delivery` varchar(150) NOT NULL,
  `Mode_of_Transport_Emergency` varchar(150) NOT NULL,
  `Average_cost_Delivery` varchar(150) NOT NULL,
  `Average_cost_Emergency` varchar(150) NOT NULL,
  `Distance_from_Home_Delivery` varchar(150) NOT NULL,
  `Distance_from_Home_Emergency` varchar(150) NOT NULL,
  `Time_taken_to_reach_Delivery` varchar(150) NOT NULL,
  `Time_taken_to_reach_Emergency` varchar(150) NOT NULL,
  `first_date` date NOT NULL,
  `first_Husband` varchar(150) NOT NULL,
  `first_wife` varchar(150) NOT NULL,
  `first_Other` varchar(150) NOT NULL,
  `sec_date` date NOT NULL,
  `sec_Husband` varchar(150) NOT NULL,
  `sec_wife` varchar(150) NOT NULL,
  `sec_Other` varchar(150) NOT NULL,
  `third_date` date NOT NULL,
  `third_Husband` varchar(150) NOT NULL,
  `third_wife` varchar(150) NOT NULL,
  `third_Other` varchar(150) NOT NULL,
  `pre_pregnancy_book` date NOT NULL,
  `Feeding_breastmilk_book` date NOT NULL,
  `pre_childhood_book` date NOT NULL,
  `family_planing_book` date NOT NULL,
  `d1` date NOT NULL,
  `d2` date NOT NULL,
  `d3` date NOT NULL,
  `d4` date NOT NULL,
  `d5` date NOT NULL,
  `d6` date NOT NULL,
  `d7` date NOT NULL,
  `d8` date NOT NULL,
  `d9` date NOT NULL,
  `d10` date NOT NULL,
  `d11` date NOT NULL,
  `d12` date NOT NULL,
  `cd1` date NOT NULL,
  `cd2` date NOT NULL,
  `cd3` date NOT NULL,
  `cd4` date NOT NULL,
  `cd5` date NOT NULL,
  `cd6` date NOT NULL,
  `cd7` date NOT NULL,
  `cd8` date NOT NULL,
  `cd9` date NOT NULL,
  `cd10` date NOT NULL,
  `cd11` date NOT NULL,
  `cd12` date NOT NULL,
  `Conselling_date` date NOT NULL,
  `chosen_method` varchar(20) NOT NULL,
  `reson_not_method` text NOT NULL,
  `Consent_form_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data2`
--

INSERT INTO `data2` (`id`, `Companion`, `Intended_Hospital_Delivery`, `Intended_Hospital_Emergency`, `Mode_of_Transport_Delivery`, `Mode_of_Transport_Emergency`, `Average_cost_Delivery`, `Average_cost_Emergency`, `Distance_from_Home_Delivery`, `Distance_from_Home_Emergency`, `Time_taken_to_reach_Delivery`, `Time_taken_to_reach_Emergency`, `first_date`, `first_Husband`, `first_wife`, `first_Other`, `sec_date`, `sec_Husband`, `sec_wife`, `sec_Other`, `third_date`, `third_Husband`, `third_wife`, `third_Other`, `pre_pregnancy_book`, `Feeding_breastmilk_book`, `pre_childhood_book`, `family_planing_book`, `d1`, `d2`, `d3`, `d4`, `d5`, `d6`, `d7`, `d8`, `d9`, `d10`, `d11`, `d12`, `cd1`, `cd2`, `cd3`, `cd4`, `cd5`, `cd6`, `cd7`, `cd8`, `cd9`, `cd10`, `cd11`, `cd12`, `Conselling_date`, `chosen_method`, `reson_not_method`, `Consent_form_date`) VALUES
('987211362v', '2020-05-19', 'Gampaha general hospital', 'Wathupitival ', 'car', 'car', '500', '200', '18', '8', '1', '0.5', '2020-07-08', 'Kamal', 'kamala', '', '2020-07-17', 'nimal', 'nimala', '', '2020-07-09', '', '', '', '2020-07-09', '2020-07-23', '2020-07-01', '2020-07-10', '2020-07-11', '2020-07-23', '2020-07-11', '2020-07-02', '2020-07-07', '2020-07-08', '2020-07-15', '2020-07-31', '2020-07-28', '2020-07-05', '2020-07-24', '2020-07-31', '2020-07-22', '2020-07-30', '2020-07-26', '2020-07-25', '2020-07-05', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', 'No', '2020-07-02');

-- --------------------------------------------------------

--
-- Table structure for table `day1`
--

CREATE TABLE `day1` (
  `id` varchar(10) NOT NULL,
  `dov` date NOT NULL,
  `poa` int(50) NOT NULL,
  `sugar` varchar(10) NOT NULL,
  `alb` varchar(5) NOT NULL,
  `pallor` varchar(5) NOT NULL,
  `ankle` varchar(5) NOT NULL,
  `facial` varchar(5) NOT NULL,
  `sys` int(200) NOT NULL,
  `dia` int(200) NOT NULL,
  `fundalh` int(200) NOT NULL,
  `weight` int(11) NOT NULL,
  `lie` varchar(10) NOT NULL,
  `presen` varchar(10) NOT NULL,
  `engage` varchar(10) NOT NULL,
  `fm` varchar(5) NOT NULL,
  `fhs` varchar(5) NOT NULL,
  `iron` int(100) NOT NULL,
  `fol` int(100) NOT NULL,
  `cal` int(100) NOT NULL,
  `vitc` int(100) NOT NULL,
  `food` int(100) NOT NULL,
  `officer` varchar(50) NOT NULL,
  `post` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `day1`
--

INSERT INTO `day1` (`id`, `dov`, `poa`, `sugar`, `alb`, `pallor`, `ankle`, `facial`, `sys`, `dia`, `fundalh`, `weight`, `lie`, `presen`, `engage`, `fm`, `fhs`, `iron`, `fol`, `cal`, `vitc`, `food`, `officer`, `post`) VALUES
('937011002V', '0000-00-00', 0, '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', 0, 0, 0, 0, 0, '', ''),
('937012345V', '0000-00-00', 0, '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', 0, 0, 0, 0, 0, '', ''),
('948012344V', '2020-05-08', 12, 'NIL', '++', '+', '+', '+', 12, 124, 11, 56, 'TL', 'Breech', 'HNE', '+', '+', 10, 20, 10, 20, 10, 'Dr. Jayasuriya', 'Doctor(MOH)');

-- --------------------------------------------------------

--
-- Table structure for table `day2`
--

CREATE TABLE `day2` (
  `id` varchar(10) NOT NULL,
  `dov` date NOT NULL,
  `poa` int(50) NOT NULL,
  `sugar` varchar(10) NOT NULL,
  `alb` varchar(5) NOT NULL,
  `pallor` varchar(5) NOT NULL,
  `ankle` varchar(5) NOT NULL,
  `facial` varchar(5) NOT NULL,
  `sys` int(200) NOT NULL,
  `dia` int(200) NOT NULL,
  `fundalh` int(200) NOT NULL,
  `weight` double NOT NULL,
  `lie` varchar(10) NOT NULL,
  `presen` varchar(10) NOT NULL,
  `engage` varchar(10) NOT NULL,
  `fm` varchar(5) NOT NULL,
  `fhs` varchar(5) NOT NULL,
  `iron` int(100) NOT NULL,
  `fol` int(100) NOT NULL,
  `cal` int(100) NOT NULL,
  `vitc` int(100) NOT NULL,
  `food` int(100) NOT NULL,
  `officer` varchar(50) NOT NULL,
  `post` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `day2`
--

INSERT INTO `day2` (`id`, `dov`, `poa`, `sugar`, `alb`, `pallor`, `ankle`, `facial`, `sys`, `dia`, `fundalh`, `weight`, `lie`, `presen`, `engage`, `fm`, `fhs`, `iron`, `fol`, `cal`, `vitc`, `food`, `officer`, `post`) VALUES
('948012344V', '2020-05-14', 14, 'NIL', '+', '0', '+', '0', 67, 120, 12, 62, 'LL', 'Cephalic', 'HE', '0', '+', 20, 20, 0, 20, 10, 'Dr. Rathnayake', 'Doctor(MOH  Office,Gampaha)');

-- --------------------------------------------------------

--
-- Table structure for table `day3`
--

CREATE TABLE `day3` (
  `id` varchar(10) NOT NULL,
  `dov` date NOT NULL,
  `poa` int(10) DEFAULT NULL,
  `sugar` varchar(10) DEFAULT NULL,
  `alb` varchar(5) DEFAULT NULL,
  `pallor` varchar(5) DEFAULT NULL,
  `ankle` varchar(5) DEFAULT NULL,
  `facial` varchar(5) DEFAULT NULL,
  `sys` int(200) DEFAULT NULL,
  `dia` int(200) DEFAULT NULL,
  `fundalh` int(200) DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `lie` varchar(10) DEFAULT NULL,
  `presen` varchar(10) DEFAULT NULL,
  `engage` varchar(10) DEFAULT NULL,
  `fm` varchar(5) DEFAULT NULL,
  `fhs` varchar(5) DEFAULT NULL,
  `iron` int(100) DEFAULT NULL,
  `fol` int(100) DEFAULT NULL,
  `cal` int(100) DEFAULT NULL,
  `vitc` int(100) DEFAULT NULL,
  `food` int(100) DEFAULT NULL,
  `officer` varchar(50) DEFAULT NULL,
  `post` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `day3`
--

INSERT INTO `day3` (`id`, `dov`, `poa`, `sugar`, `alb`, `pallor`, `ankle`, `facial`, `sys`, `dia`, `fundalh`, `weight`, `lie`, `presen`, `engage`, `fm`, `fhs`, `iron`, `fol`, `cal`, `vitc`, `food`, `officer`, `post`) VALUES
('948012344V', '0000-00-00', 0, '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', 0, 0, 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `day4`
--

CREATE TABLE `day4` (
  `id` varchar(10) NOT NULL,
  `dov` date NOT NULL,
  `poa` int(10) DEFAULT NULL,
  `sugar` varchar(10) DEFAULT NULL,
  `alb` varchar(5) DEFAULT NULL,
  `pallor` varchar(5) DEFAULT NULL,
  `ankle` varchar(5) DEFAULT NULL,
  `facial` varchar(5) DEFAULT NULL,
  `sys` int(200) DEFAULT NULL,
  `dia` int(200) DEFAULT NULL,
  `fundalh` int(200) DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `lie` varchar(10) DEFAULT NULL,
  `presen` varchar(10) DEFAULT NULL,
  `engage` varchar(10) DEFAULT NULL,
  `fm` varchar(5) DEFAULT NULL,
  `fhs` varchar(5) DEFAULT NULL,
  `iron` int(100) DEFAULT NULL,
  `fol` int(100) DEFAULT NULL,
  `cal` int(100) DEFAULT NULL,
  `vitc` int(100) DEFAULT NULL,
  `food` int(100) DEFAULT NULL,
  `officer` varchar(50) DEFAULT NULL,
  `post` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `day4`
--

INSERT INTO `day4` (`id`, `dov`, `poa`, `sugar`, `alb`, `pallor`, `ankle`, `facial`, `sys`, `dia`, `fundalh`, `weight`, `lie`, `presen`, `engage`, `fm`, `fhs`, `iron`, `fol`, `cal`, `vitc`, `food`, `officer`, `post`) VALUES
('948012344V', '0000-00-00', 0, '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', 0, 0, 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `day5`
--

CREATE TABLE `day5` (
  `id` varchar(10) NOT NULL,
  `dov` date NOT NULL,
  `poa` int(10) DEFAULT NULL,
  `sugar` varchar(10) DEFAULT NULL,
  `alb` varchar(5) DEFAULT NULL,
  `pallor` varchar(5) DEFAULT NULL,
  `ankle` varchar(5) DEFAULT NULL,
  `facial` varchar(5) DEFAULT NULL,
  `sys` int(200) DEFAULT NULL,
  `dia` int(200) DEFAULT NULL,
  `fundalh` int(200) DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `lie` varchar(10) DEFAULT NULL,
  `presen` varchar(10) DEFAULT NULL,
  `engage` varchar(10) DEFAULT NULL,
  `fm` varchar(5) DEFAULT NULL,
  `fhs` varchar(5) DEFAULT NULL,
  `iron` int(100) DEFAULT NULL,
  `fol` int(100) DEFAULT NULL,
  `cal` int(100) DEFAULT NULL,
  `vitc` int(100) DEFAULT NULL,
  `food` int(100) DEFAULT NULL,
  `officer` varchar(50) DEFAULT NULL,
  `post` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `day5`
--

INSERT INTO `day5` (`id`, `dov`, `poa`, `sugar`, `alb`, `pallor`, `ankle`, `facial`, `sys`, `dia`, `fundalh`, `weight`, `lie`, `presen`, `engage`, `fm`, `fhs`, `iron`, `fol`, `cal`, `vitc`, `food`, `officer`, `post`) VALUES
('948012344V', '0000-00-00', 0, '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', 0, 0, 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `day6`
--

CREATE TABLE `day6` (
  `id` varchar(10) NOT NULL,
  `dov` date NOT NULL,
  `poa` int(10) DEFAULT NULL,
  `sugar` varchar(10) DEFAULT NULL,
  `alb` varchar(5) DEFAULT NULL,
  `pallor` varchar(5) DEFAULT NULL,
  `ankle` varchar(5) DEFAULT NULL,
  `facial` varchar(5) DEFAULT NULL,
  `sys` int(200) DEFAULT NULL,
  `dia` int(200) DEFAULT NULL,
  `fundalh` int(200) DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `lie` varchar(10) DEFAULT NULL,
  `presen` varchar(10) DEFAULT NULL,
  `engage` varchar(10) DEFAULT NULL,
  `fm` varchar(5) DEFAULT NULL,
  `fhs` varchar(5) DEFAULT NULL,
  `iron` int(100) DEFAULT NULL,
  `fol` int(100) DEFAULT NULL,
  `cal` int(100) DEFAULT NULL,
  `vitc` int(100) DEFAULT NULL,
  `food` int(100) DEFAULT NULL,
  `officer` varchar(50) DEFAULT NULL,
  `post` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `day6`
--

INSERT INTO `day6` (`id`, `dov`, `poa`, `sugar`, `alb`, `pallor`, `ankle`, `facial`, `sys`, `dia`, `fundalh`, `weight`, `lie`, `presen`, `engage`, `fm`, `fhs`, `iron`, `fol`, `cal`, `vitc`, `food`, `officer`, `post`) VALUES
('948012344V', '0000-00-00', 0, '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', 0, 0, 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `day7`
--

CREATE TABLE `day7` (
  `id` varchar(10) NOT NULL,
  `dov` date NOT NULL,
  `poa` int(10) DEFAULT NULL,
  `sugar` varchar(10) DEFAULT NULL,
  `alb` varchar(5) DEFAULT NULL,
  `pallor` varchar(5) DEFAULT NULL,
  `ankle` varchar(5) DEFAULT NULL,
  `facial` varchar(5) DEFAULT NULL,
  `sys` int(200) DEFAULT NULL,
  `dia` int(200) DEFAULT NULL,
  `fundalh` int(200) DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `lie` varchar(10) DEFAULT NULL,
  `presen` varchar(10) DEFAULT NULL,
  `engage` varchar(10) DEFAULT NULL,
  `fm` varchar(5) DEFAULT NULL,
  `fhs` varchar(5) DEFAULT NULL,
  `iron` int(100) DEFAULT NULL,
  `fol` int(100) DEFAULT NULL,
  `cal` int(100) DEFAULT NULL,
  `vitc` int(100) DEFAULT NULL,
  `food` int(100) DEFAULT NULL,
  `officer` varchar(50) DEFAULT NULL,
  `post` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `day7`
--

INSERT INTO `day7` (`id`, `dov`, `poa`, `sugar`, `alb`, `pallor`, `ankle`, `facial`, `sys`, `dia`, `fundalh`, `weight`, `lie`, `presen`, `engage`, `fm`, `fhs`, `iron`, `fol`, `cal`, `vitc`, `food`, `officer`, `post`) VALUES
('948012344V', '0000-00-00', 0, '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', 0, 0, 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `day8`
--

CREATE TABLE `day8` (
  `id` varchar(10) NOT NULL,
  `dov` date NOT NULL,
  `poa` int(10) DEFAULT NULL,
  `sugar` varchar(10) DEFAULT NULL,
  `alb` varchar(5) DEFAULT NULL,
  `pallor` varchar(5) DEFAULT NULL,
  `ankle` varchar(5) DEFAULT NULL,
  `facial` varchar(5) DEFAULT NULL,
  `sys` int(200) DEFAULT NULL,
  `dia` int(200) DEFAULT NULL,
  `fundalh` int(200) DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `lie` varchar(10) DEFAULT NULL,
  `presen` varchar(10) DEFAULT NULL,
  `engage` varchar(10) DEFAULT NULL,
  `fm` varchar(5) DEFAULT NULL,
  `fhs` varchar(5) DEFAULT NULL,
  `iron` int(100) DEFAULT NULL,
  `fol` int(100) DEFAULT NULL,
  `cal` int(100) DEFAULT NULL,
  `vitc` int(100) DEFAULT NULL,
  `food` int(100) DEFAULT NULL,
  `officer` varchar(50) DEFAULT NULL,
  `post` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `day8`
--

INSERT INTO `day8` (`id`, `dov`, `poa`, `sugar`, `alb`, `pallor`, `ankle`, `facial`, `sys`, `dia`, `fundalh`, `weight`, `lie`, `presen`, `engage`, `fm`, `fhs`, `iron`, `fol`, `cal`, `vitc`, `food`, `officer`, `post`) VALUES
('948012344V', '0000-00-00', 0, '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', 0, 0, 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `day9`
--

CREATE TABLE `day9` (
  `id` varchar(10) NOT NULL,
  `dov` date NOT NULL,
  `poa` int(10) DEFAULT NULL,
  `sugar` varchar(10) DEFAULT NULL,
  `alb` varchar(5) DEFAULT NULL,
  `pallor` varchar(5) DEFAULT NULL,
  `ankle` varchar(5) DEFAULT NULL,
  `facial` varchar(5) DEFAULT NULL,
  `sys` int(200) DEFAULT NULL,
  `dia` int(200) DEFAULT NULL,
  `fundalh` int(200) DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `lie` varchar(10) DEFAULT NULL,
  `presen` varchar(10) DEFAULT NULL,
  `engage` varchar(10) DEFAULT NULL,
  `fm` varchar(5) DEFAULT NULL,
  `fhs` varchar(5) DEFAULT NULL,
  `iron` int(100) DEFAULT NULL,
  `fol` int(100) DEFAULT NULL,
  `cal` int(100) DEFAULT NULL,
  `vitc` int(100) DEFAULT NULL,
  `food` int(100) DEFAULT NULL,
  `officer` varchar(50) DEFAULT NULL,
  `post` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `day9`
--

INSERT INTO `day9` (`id`, `dov`, `poa`, `sugar`, `alb`, `pallor`, `ankle`, `facial`, `sys`, `dia`, `fundalh`, `weight`, `lie`, `presen`, `engage`, `fm`, `fhs`, `iron`, `fol`, `cal`, `vitc`, `food`, `officer`, `post`) VALUES
('948012344V', '0000-00-00', 0, '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', 0, 0, 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `day10`
--

CREATE TABLE `day10` (
  `id` varchar(10) NOT NULL,
  `dov` date NOT NULL,
  `poa` int(10) DEFAULT NULL,
  `sugar` varchar(10) DEFAULT NULL,
  `alb` varchar(5) DEFAULT NULL,
  `pallor` varchar(5) DEFAULT NULL,
  `ankle` varchar(5) DEFAULT NULL,
  `facial` varchar(5) DEFAULT NULL,
  `sys` int(200) DEFAULT NULL,
  `dia` int(200) DEFAULT NULL,
  `fundalh` int(200) DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `lie` varchar(10) DEFAULT NULL,
  `presen` varchar(10) DEFAULT NULL,
  `engage` varchar(10) DEFAULT NULL,
  `fm` varchar(5) DEFAULT NULL,
  `fhs` varchar(5) DEFAULT NULL,
  `iron` int(100) DEFAULT NULL,
  `fol` int(100) DEFAULT NULL,
  `cal` int(100) DEFAULT NULL,
  `vitc` int(100) DEFAULT NULL,
  `food` int(100) DEFAULT NULL,
  `officer` varchar(50) DEFAULT NULL,
  `post` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `day10`
--

INSERT INTO `day10` (`id`, `dov`, `poa`, `sugar`, `alb`, `pallor`, `ankle`, `facial`, `sys`, `dia`, `fundalh`, `weight`, `lie`, `presen`, `engage`, `fm`, `fhs`, `iron`, `fol`, `cal`, `vitc`, `food`, `officer`, `post`) VALUES
('948012344V', '0000-00-00', 0, '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', 0, 0, 0, 0, 0, '', '');

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
-- Table structure for table `investigations`
--

CREATE TABLE `investigations` (
  `id` varchar(10) NOT NULL,
  `ausT1` varchar(1000) NOT NULL,
  `ausT2` varchar(1000) NOT NULL,
  `ausT3` varchar(1000) NOT NULL,
  `menT1` varchar(1000) NOT NULL,
  `menT2` varchar(1000) NOT NULL,
  `menT3` varchar(1000) NOT NULL,
  `respirEx` varchar(1000) NOT NULL,
  `breastEx` varchar(1000) NOT NULL,
  `bs1` int(50) NOT NULL,
  `bs1res` varchar(1000) NOT NULL,
  `bs2` int(50) NOT NULL,
  `bs2res` varchar(1000) NOT NULL,
  `heam1` int(50) NOT NULL,
  `heam1res` varchar(1000) NOT NULL,
  `heam2` int(50) NOT NULL,
  `heam2res` varchar(1000) NOT NULL,
  `other` varchar(1000) NOT NULL,
  `anti` varchar(1000) NOT NULL,
  `kick` date NOT NULL,
  `dentref` date NOT NULL,
  `dentex` date NOT NULL,
  `denttreat` varchar(1000) NOT NULL,
  `syppoa` int(50) NOT NULL,
  `syptake` date NOT NULL,
  `sypreci` date NOT NULL,
  `sypres` varchar(1000) NOT NULL,
  `sypref` date NOT NULL,
  `hivtake` date NOT NULL,
  `hivinform` date NOT NULL,
  `tdate1` date NOT NULL,
  `tbatch1` varchar(30) NOT NULL,
  `tdate2` date NOT NULL,
  `tbatch2` varchar(30) NOT NULL,
  `tdate3` date NOT NULL,
  `tbatch3` varchar(30) NOT NULL,
  `tdate4` date NOT NULL,
  `tbatch4` varchar(30) NOT NULL,
  `tdate5` date NOT NULL,
  `tbatch5` varchar(30) NOT NULL,
  `tne` date NOT NULL,
  `tnebatch` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investigations`
--

INSERT INTO `investigations` (`id`, `ausT1`, `ausT2`, `ausT3`, `menT1`, `menT2`, `menT3`, `respirEx`, `breastEx`, `bs1`, `bs1res`, `bs2`, `bs2res`, `heam1`, `heam1res`, `heam2`, `heam2res`, `other`, `anti`, `kick`, `dentref`, `dentex`, `denttreat`, `syppoa`, `syptake`, `sypreci`, `sypres`, `sypref`, `hivtake`, `hivinform`, `tdate1`, `tbatch1`, `tdate2`, `tbatch2`, `tdate3`, `tbatch3`, `tdate4`, `tbatch4`, `tdate5`, `tbatch5`, `tne`, `tnebatch`) VALUES
('937012345V', 'done', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', 0, '', '', 'Not Done', '0000-00-00', '0000-00-00', '0000-00-00', '', 0, '0000-00-00', '0000-00-00', 'not done', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', ''),
('948012344V', 'In good condition', 'better', 'not done', 'done', 'good', '', 'better', 'done', 10, 'good', 0, '', 0, '', 0, '', '', 'Not Done', '2020-05-09', '2020-05-17', '0000-00-00', '', 0, '0000-00-00', '0000-00-00', 'NR', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', ''),
('948012345V', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', 0, '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', 0, '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', ''),
('988011002V', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', 0, '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', 0, '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `optionaldate`
--

CREATE TABLE `optionaldate` (
  `id` varchar(10) NOT NULL,
  `date1` date NOT NULL,
  `date2` date NOT NULL,
  `confirmedDate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `optionaldate`
--

INSERT INTO `optionaldate` (`id`, `date1`, `date2`, `confirmedDate`) VALUES
('987211324v', '2020-07-07', '2020-07-17', '2020-07-07'),
('987211326v', '2020-07-08', '2020-07-17', '2020-07-17'),
('987211329v', '2020-07-23', '2020-07-18', '2020-07-18'),
('987211345v', '2020-08-08', '2020-08-07', '2020-08-08'),
('987211367v', '2020-07-25', '2020-07-25', '2020-07-25');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` text NOT NULL,
  `password` text NOT NULL,
  `catagory` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `catagory`) VALUES
('914022004V', '81dc9bdb52d04dc20036dbd8313ed055', 'Patient-Mother'),
('915044990V', '81dc9bdb52d04dc20036dbd8313ed055', 'Medical officer'),
('918012004V', '81dc9bdb52d04dc20036dbd8313ed055', 'Patient-Mother'),
('928012004V', '81dc9bdb52d04dc20036dbd8313ed055', 'Patient-Mother'),
('964034003V', '81dc9bdb52d04dc20036dbd8313ed055', 'Midwife'),
('967034994V', '81dc9bdb52d04dc20036dbd8313ed055', 'Medical officer'),
('976088002V', '81dc9bdb52d04dc20036dbd8313ed055', 'Patient-Child'),
('976088003V', '81dc9bdb52d04dc20036dbd8313ed055', 'Patient-Child'),
('988011002V', '81dc9bdb52d04dc20036dbd8313ed055', 'Receptionist');

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

-- --------------------------------------------------------

--
-- Table structure for table `weight_gain`
--

CREATE TABLE `weight_gain` (
  `week` int(50) NOT NULL,
  `gain` int(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weight_gain`
--

INSERT INTO `weight_gain` (`week`, `gain`) VALUES
(0, 0),
(2, 1),
(4, 1),
(6, 2),
(8, 3),
(10, 2),
(12, 5),
(14, 8),
(16, 4),
(18, 6),
(20, 6),
(22, 5),
(24, 5),
(26, 6),
(28, 6),
(30, 7),
(32, 8),
(34, 8),
(36, 8),
(38, 6),
(40, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data2`
--
ALTER TABLE `data2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `day1`
--
ALTER TABLE `day1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `day3`
--
ALTER TABLE `day3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `day4`
--
ALTER TABLE `day4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `day5`
--
ALTER TABLE `day5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `day6`
--
ALTER TABLE `day6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `day7`
--
ALTER TABLE `day7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `day8`
--
ALTER TABLE `day8`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `day9`
--
ALTER TABLE `day9`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `day10`
--
ALTER TABLE `day10`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoscliniccare`
--
ALTER TABLE `hoscliniccare`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `investigations`
--
ALTER TABLE `investigations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `optionaldate`
--
ALTER TABLE `optionaldate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`(10));

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
