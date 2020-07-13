-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2020 at 07:10 AM
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
('987211362v', 'O+', '12.33', '103', 'No allergies.', 'Kumari Ramanayake', 'MOH devision', '24', 'Dr. fernando', '', 'Gampaha', '2', '2020-05-11', '4', '2020-07-15', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 't', '3', '6', '5', '1', '2020-07-16', '2020-07-09', '2020-07-19', 'no', 'yes', 'no', 332222333);

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
-- Indexes for table `optionaldate`
--
ALTER TABLE `optionaldate`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
