-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2020 at 06:19 AM
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
-- Table structure for table `childdata`
--

CREATE TABLE `childdata` (
  `id` text NOT NULL,
  `bcg` varchar(30) NOT NULL,
  `date1` date NOT NULL,
  `date2` date NOT NULL,
  `date3` date NOT NULL,
  `date4` date NOT NULL,
  `date5` date NOT NULL,
  `date6` date NOT NULL,
  `date7` date NOT NULL,
  `date8` date NOT NULL,
  `date9` date NOT NULL,
  `date10` date NOT NULL,
  `date11` date NOT NULL,
  `date12` date NOT NULL,
  `date13` date NOT NULL,
  `date14` date NOT NULL,
  `date15` date NOT NULL,
  `date16` date NOT NULL,
  `date17` date NOT NULL,
  `date18` date NOT NULL,
  `date19` date NOT NULL,
  `date20` date NOT NULL,
  `date21` date NOT NULL,
  `date22` date NOT NULL,
  `date23` date NOT NULL,
  `date24` date NOT NULL,
  `date25` date NOT NULL,
  `num1` int(11) NOT NULL,
  `num2` int(11) NOT NULL,
  `num3` int(11) NOT NULL,
  `num4` int(11) NOT NULL,
  `num5` int(11) NOT NULL,
  `num6` int(11) NOT NULL,
  `num7` int(11) NOT NULL,
  `num8` int(11) NOT NULL,
  `num9` int(11) NOT NULL,
  `num10` int(11) NOT NULL,
  `num11` int(11) NOT NULL,
  `num12` int(11) NOT NULL,
  `num13` int(11) NOT NULL,
  `num14` int(11) NOT NULL,
  `num15` int(11) NOT NULL,
  `num16` int(11) NOT NULL,
  `num17` int(11) NOT NULL,
  `num18` int(11) NOT NULL,
  `num19` int(11) NOT NULL,
  `num20` int(11) NOT NULL,
  `num21` int(11) NOT NULL,
  `num22` int(11) NOT NULL,
  `num23` int(11) NOT NULL,
  `num24` int(11) NOT NULL,
  `num25` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `childdata1`
--

CREATE TABLE `childdata1` (
  `id` text NOT NULL,
  `doctor` text NOT NULL,
  `moh` text NOT NULL,
  `idnum` int(11) NOT NULL,
  `childname` text NOT NULL,
  `regno` int(11) NOT NULL,
  `childbday` date NOT NULL,
  `regdate` date NOT NULL,
  `momname` text NOT NULL,
  `momage` int(11) NOT NULL,
  `num1` int(11) NOT NULL,
  `weight1` int(11) NOT NULL,
  `headperi` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  `health` text NOT NULL,
  `vitk` text NOT NULL,
  `posture` text NOT NULL,
  `rel` text NOT NULL,
  `date1` date NOT NULL,
  `date2` date NOT NULL,
  `date3` date NOT NULL,
  `date4` date NOT NULL,
  `date5` date NOT NULL,
  `date6` date NOT NULL,
  `date7` date NOT NULL,
  `date8` date NOT NULL,
  `date9` date NOT NULL,
  `date0` date NOT NULL,
  `date10` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `childdata2`
--

CREATE TABLE `childdata2` (
  `id` text NOT NULL,
  `dat1` date NOT NULL,
  `dat2` date NOT NULL,
  `dat3` date NOT NULL,
  `dat4` date NOT NULL,
  `scolor1` text NOT NULL,
  `scolor2` text NOT NULL,
  `scolor3` text NOT NULL,
  `scolor4` text NOT NULL,
  `eye1` text NOT NULL,
  `eye2` text NOT NULL,
  `eye3` text NOT NULL,
  `eye4` text NOT NULL,
  `sc1` text NOT NULL,
  `sc2` text NOT NULL,
  `sc3` text NOT NULL,
  `sc4` text NOT NULL,
  `m1` text NOT NULL,
  `m2` text NOT NULL,
  `m3` text NOT NULL,
  `m4` text NOT NULL,
  `pos1` varchar(255) NOT NULL,
  `pos2` varchar(255) NOT NULL,
  `pos3` varchar(255) NOT NULL,
  `pos4` varchar(255) NOT NULL,
  `rel1` text NOT NULL,
  `rel2` text NOT NULL,
  `rel3` text NOT NULL,
  `rel4` text NOT NULL,
  `other1` text NOT NULL,
  `other2` text NOT NULL,
  `other3` text NOT NULL,
  `other4` text NOT NULL,
  `date1` date NOT NULL,
  `date2` date NOT NULL,
  `date3` date NOT NULL,
  `date4` date NOT NULL,
  `date5` date NOT NULL,
  `date6` date NOT NULL,
  `date7` date NOT NULL,
  `date8` date NOT NULL,
  `date9` date NOT NULL,
  `date10` date NOT NULL,
  `date11` date NOT NULL,
  `date12` date NOT NULL,
  `date13` date NOT NULL,
  `date14` date NOT NULL,
  `date15` date NOT NULL,
  `date16` date NOT NULL,
  `date17` date NOT NULL,
  `date18` date NOT NULL,
  `date19` date NOT NULL,
  `date20` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `childdata3`
--

CREATE TABLE `childdata3` (
  `id` text NOT NULL,
  `text1` text NOT NULL,
  `text2` text NOT NULL,
  `text3` text NOT NULL,
  `text4` text NOT NULL,
  `text5` text NOT NULL,
  `text6` text NOT NULL,
  `text7` text NOT NULL,
  `text8` text NOT NULL,
  `text9` text NOT NULL,
  `text10` text NOT NULL,
  `text11` text NOT NULL,
  `text12` text NOT NULL,
  `text13` text NOT NULL,
  `text14` text NOT NULL,
  `text15` text NOT NULL,
  `text16` text NOT NULL,
  `text17` text NOT NULL,
  `text18` text NOT NULL,
  `text19` text NOT NULL,
  `text20` text NOT NULL,
  `text21` text NOT NULL,
  `text22` text NOT NULL,
  `text23` text NOT NULL,
  `text24` text NOT NULL,
  `text25` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `childdata4`
--

CREATE TABLE `childdata4` (
  `id` text NOT NULL,
  `light` varchar(30) NOT NULL,
  `watch` varchar(30) NOT NULL,
  `smile` varchar(30) NOT NULL,
  `eye` varchar(30) NOT NULL,
  `look` varchar(30) NOT NULL,
  `touch` varchar(30) NOT NULL,
  `eyeerror` varchar(30) NOT NULL,
  `pick` varchar(30) NOT NULL,
  `touch2` varchar(30) NOT NULL,
  `recognize` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `childdata5`
--

CREATE TABLE `childdata5` (
  `id` text NOT NULL,
  `sound` varchar(30) NOT NULL,
  `highsound` varchar(30) NOT NULL,
  `smile` varchar(30) NOT NULL,
  `eye` varchar(30) NOT NULL,
  `hear` varchar(30) NOT NULL,
  `search` varchar(30) NOT NULL,
  `song` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `respond` varchar(30) NOT NULL,
  `look` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `hoscliniccare`
--

CREATE TABLE `hoscliniccare` (
  `id` varchar(20) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `pg7`
--

CREATE TABLE `pg7` (
  `id` text DEFAULT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `id` text NOT NULL,
  `wAge` int(10) NOT NULL,
  `hAge` int(10) NOT NULL,
  `wEducation` text NOT NULL,
  `hEducation` text NOT NULL,
  `wOccupation` text NOT NULL,
  `hOccupation` text NOT NULL,
  `fhDiabetes` text NOT NULL,
  `fhHypertension` text NOT NULL,
  `fhHaematologic` text NOT NULL,
  `fhTwin` text NOT NULL,
  `fhOthers` text NOT NULL,
  `shDiabetes` text NOT NULL,
  `shHypertension` text NOT NULL,
  `shCardiac` text NOT NULL,
  `shRenal` text NOT NULL,
  `shHepatic` text NOT NULL,
  `shPsychiatric` text NOT NULL,
  `shEpilepsy` text NOT NULL,
  `shMalignancies` text NOT NULL,
  `shHaematological` text NOT NULL,
  `shTuberculosis` text NOT NULL,
  `shThyroid` text NOT NULL,
  `shBronchial` text NOT NULL,
  `shDVT` text NOT NULL,
  `shSurgeries` text NOT NULL,
  `shOther` text NOT NULL,
  `shScore` text NOT NULL,
  `poGoneAc` text NOT NULL,
  `poGonePm` text NOT NULL,
  `poGoneOut` text NOT NULL,
  `poGoneW` int(50) NOT NULL,
  `poGonePc` text NOT NULL,
  `poGoneSa` text NOT NULL,
  `poGtwoAc` text NOT NULL,
  `poGtwoPm` text NOT NULL,
  `poGtwoOut` text NOT NULL,
  `poGtwoW` int(50) NOT NULL,
  `poGtwoPc` text NOT NULL,
  `poGtwoSa` text NOT NULL,
  `poGthAc` text NOT NULL,
  `poGthPm` text NOT NULL,
  `poGthOut` text NOT NULL,
  `poGthW` int(50) NOT NULL,
  `poGthPc` text NOT NULL,
  `poGthSa` text NOT NULL,
  `poGfoAc` text NOT NULL,
  `poGfoPm` text NOT NULL,
  `poGfoOut` text NOT NULL,
  `poGfoW` int(50) NOT NULL,
  `poGfoPc` text NOT NULL,
  `poGfoSa` text NOT NULL,
  `poGfiAc` text NOT NULL,
  `poGfiPm` text NOT NULL,
  `poGfiOut` text NOT NULL,
  `poGfiW` int(50) NOT NULL,
  `poGfiPc` text NOT NULL,
  `poGfiSa` text NOT NULL,
  `poGsAc` text NOT NULL,
  `poGsPm` text NOT NULL,
  `poGsOut` text NOT NULL,
  `poGsW` int(50) NOT NULL,
  `poGsPc` text NOT NULL,
  `poGsSa` text NOT NULL,
  `poText` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table2`
--

CREATE TABLE `table2` (
  `idNew` int(50) NOT NULL,
  `ipp` text NOT NULL,
  `zscore` varchar(50) NOT NULL,
  `day1` date NOT NULL,
  `day2` date NOT NULL,
  `day3` date NOT NULL,
  `day4` date NOT NULL,
  `day5` date NOT NULL,
  `day6` date NOT NULL,
  `day7` date NOT NULL,
  `day8` date NOT NULL,
  `imday1` date NOT NULL,
  `imday2` date NOT NULL,
  `imday3` date NOT NULL,
  `imday4` date NOT NULL,
  `imday5` date NOT NULL,
  `imday6` date NOT NULL,
  `imday7` date NOT NULL,
  `imday8` date NOT NULL,
  `cday` date NOT NULL,
  `cplace` text NOT NULL,
  `date` date NOT NULL,
  `bpro` text NOT NULL,
  `avd` text NOT NULL,
  `evb` text NOT NULL,
  `pallor` text NOT NULL,
  `icterus` text NOT NULL,
  `oedema` text NOT NULL,
  `bp` text NOT NULL,
  `cs` text NOT NULL,
  `rs` text NOT NULL,
  `ae` text NOT NULL,
  `ve` text NOT NULL,
  `epds` text NOT NULL,
  `other` text NOT NULL,
  `problem` text NOT NULL,
  `method` text NOT NULL,
  `Chosen` text NOT NULL,
  `reason` text NOT NULL,
  `fpPlace` text NOT NULL,
  `fpDate` date NOT NULL,
  `fpTime` time(6) NOT NULL,
  `sNote` text NOT NULL,
  `oName` text NOT NULL,
  `designation` text NOT NULL,
  `cName` text NOT NULL,
  `cTel` text NOT NULL,
  `phmTel` text NOT NULL,
  `mohTel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table3`
--

CREATE TABLE `table3` (
  `idn` int(20) NOT NULL,
  `sMonth` int(10) NOT NULL,
  `cMonth` int(10) NOT NULL,
  `cStatus` varchar(50) NOT NULL,
  `shead` int(10) NOT NULL,
  `chead` int(10) NOT NULL,
  `cshead` text NOT NULL,
  `slook` int(10) NOT NULL,
  `clook` int(10) NOT NULL,
  `cslook` text NOT NULL,
  `ssound` int(10) NOT NULL,
  `csound` int(10) NOT NULL,
  `cssound` text NOT NULL,
  `sreaction` int(10) NOT NULL,
  `creaction` int(10) NOT NULL,
  `csreaction` text NOT NULL,
  `ssmile` int(10) NOT NULL,
  `csmile` int(10) NOT NULL,
  `cssmile` text NOT NULL,
  `smonth1` int(10) NOT NULL,
  `cmonth1` int(10) NOT NULL,
  `cstatus1` text NOT NULL,
  `sheart` int(10) NOT NULL,
  `cheart` int(10) NOT NULL,
  `csheart` text NOT NULL,
  `sfinger` int(10) NOT NULL,
  `cfinger` int(10) NOT NULL,
  `csfinger` text NOT NULL,
  `shand` int(10) NOT NULL,
  `chand` int(10) NOT NULL,
  `cshand` text NOT NULL,
  `shsound` int(10) NOT NULL,
  `chsound` int(10) NOT NULL,
  `cshsound` text NOT NULL,
  `ssingle` int(10) NOT NULL,
  `csingle` int(10) NOT NULL,
  `cssingle` text NOT NULL,
  `sssmile` int(10) NOT NULL,
  `cssmile1` int(10) NOT NULL,
  `csssmile` text NOT NULL,
  `smonths` int(10) NOT NULL,
  `cmonths` int(10) NOT NULL,
  `cstatuses` text NOT NULL,
  `shrise` int(10) NOT NULL,
  `chrise` int(10) NOT NULL,
  `cshrise` text NOT NULL,
  `ssame` int(10) NOT NULL,
  `csame` int(10) NOT NULL,
  `cssame` text NOT NULL,
  `schange` int(10) NOT NULL,
  `cchange` int(10) NOT NULL,
  `cschange` text NOT NULL,
  `sagain` int(10) NOT NULL,
  `cagain` int(10) NOT NULL,
  `csagain` text NOT NULL,
  `snine` int(10) NOT NULL,
  `cnine` int(10) NOT NULL,
  `csnine` text NOT NULL,
  `ssit` int(10) NOT NULL,
  `csit` int(10) NOT NULL,
  `cssit` text NOT NULL,
  `sstand` int(10) NOT NULL,
  `cstand` int(10) NOT NULL,
  `csstand` text NOT NULL,
  `sitem` int(10) NOT NULL,
  `citem` int(10) NOT NULL,
  `csitem` text NOT NULL,
  `smimicry` int(10) NOT NULL,
  `cmimicry` int(10) NOT NULL,
  `csmimicry` text NOT NULL,
  `sword` int(10) NOT NULL,
  `cword` int(10) NOT NULL,
  `csword` text NOT NULL,
  `sadvice` int(10) NOT NULL,
  `cadvice` int(10) NOT NULL,
  `csadvice` text NOT NULL,
  `stwelve` int(10) NOT NULL,
  `ctwelve` int(10) NOT NULL,
  `cstwelve` text NOT NULL,
  `swalk` int(10) NOT NULL,
  `cwalk` int(10) NOT NULL,
  `cswalk` text NOT NULL,
  `sgive` int(10) NOT NULL,
  `cgive` int(10) NOT NULL,
  `csgive` text NOT NULL,
  `sfamiliar` int(10) NOT NULL,
  `cfamiliar` int(10) NOT NULL,
  `csfamiliar` text NOT NULL,
  `sball` int(10) NOT NULL,
  `cball` int(10) NOT NULL,
  `csball` text NOT NULL,
  `spart` int(10) NOT NULL,
  `cpart` int(10) NOT NULL,
  `cspart` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table4`
--

CREATE TABLE `table4` (
  `id` int(10) NOT NULL,
  `seighteen` int(10) NOT NULL,
  `ceighteen` int(10) NOT NULL,
  `cseighteen` text NOT NULL,
  `sawalk` int(10) NOT NULL,
  `cawalk` int(10) NOT NULL,
  `csawalk` text NOT NULL,
  `sstair` int(10) NOT NULL,
  `cstair` int(10) NOT NULL,
  `csstair` text NOT NULL,
  `sblock` int(10) NOT NULL,
  `cblock` int(10) NOT NULL,
  `csblock` text NOT NULL,
  `seat` int(10) NOT NULL,
  `ceat` int(10) NOT NULL,
  `cseat` text NOT NULL,
  `stenWord` int(10) NOT NULL,
  `ctenWord` int(10) NOT NULL,
  `cstenWord` text NOT NULL,
  `slip` int(10) NOT NULL,
  `clip` int(10) NOT NULL,
  `cslip` text NOT NULL,
  `syear` int(10) NOT NULL,
  `cyear` int(10) NOT NULL,
  `csyear` text NOT NULL,
  `srun` int(10) NOT NULL,
  `crun` int(10) NOT NULL,
  `csrun` text NOT NULL,
  `sup` int(10) NOT NULL,
  `cup` int(10) NOT NULL,
  `csup` text NOT NULL,
  `scircle` int(10) NOT NULL,
  `ccircle` int(10) NOT NULL,
  `cscircle` text NOT NULL,
  `ssentence` int(10) NOT NULL,
  `csentence` int(10) NOT NULL,
  `cssentence` text NOT NULL,
  `sthree` int(10) NOT NULL,
  `cthree` int(10) NOT NULL,
  `csthree` text NOT NULL,
  `sleg` int(10) NOT NULL,
  `cleg` int(10) NOT NULL,
  `csleg` text NOT NULL,
  `sjump` int(10) NOT NULL,
  `cjump` int(10) NOT NULL,
  `csjump` text NOT NULL,
  `sshoe` int(10) NOT NULL,
  `cshoe` int(10) NOT NULL,
  `csshoe` text NOT NULL,
  `scopy` int(10) NOT NULL,
  `ccopy` int(10) NOT NULL,
  `cscopy` text NOT NULL,
  `scount` int(10) NOT NULL,
  `ccount` int(10) NOT NULL,
  `cscount` text NOT NULL,
  `snear` int(10) NOT NULL,
  `cnear` int(10) NOT NULL,
  `csnear` text NOT NULL,
  `scomplex` int(10) NOT NULL,
  `ccomplex` int(10) NOT NULL,
  `cscomplex` text NOT NULL,
  `sfour` int(10) NOT NULL,
  `cfour` int(10) NOT NULL,
  `csfour` text NOT NULL,
  `slegJump` int(10) NOT NULL,
  `clegJump` int(10) NOT NULL,
  `cslegJump` text NOT NULL,
  `sdressing` int(10) NOT NULL,
  `cdressing` int(10) NOT NULL,
  `csdressing` text NOT NULL,
  `sfood` int(10) NOT NULL,
  `cfood` int(10) NOT NULL,
  `csfood` text NOT NULL,
  `sskeleton` int(10) NOT NULL,
  `cskeleton` int(10) NOT NULL,
  `csskeleton` text NOT NULL,
  `splay` int(10) NOT NULL,
  `cplay` int(10) NOT NULL,
  `csplay` text NOT NULL,
  `stime` int(10) NOT NULL,
  `ctime` int(10) NOT NULL,
  `cstime` text NOT NULL,
  `sname` int(10) NOT NULL,
  `cname` int(10) NOT NULL,
  `csname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table5`
--

CREATE TABLE `table5` (
  `id` int(10) NOT NULL,
  `day1` date NOT NULL,
  `day2` date NOT NULL,
  `day3` date NOT NULL,
  `day4` date NOT NULL,
  `day5` date NOT NULL,
  `attack1` text NOT NULL,
  `attack2` text NOT NULL,
  `attack3` text NOT NULL,
  `attack4` text NOT NULL,
  `attack5` text NOT NULL,
  `eye1` text NOT NULL,
  `eye2` text NOT NULL,
  `eye3` text NOT NULL,
  `eye4` text NOT NULL,
  `eye5` text NOT NULL,
  `left1` text NOT NULL,
  `left2` text NOT NULL,
  `left3` text NOT NULL,
  `left4` text NOT NULL,
  `left5` text NOT NULL,
  `right1` text NOT NULL,
  `right2` text NOT NULL,
  `right3` text NOT NULL,
  `right4` text NOT NULL,
  `right5` text NOT NULL,
  `hleft1` text NOT NULL,
  `hleft2` text NOT NULL,
  `hleft3` text NOT NULL,
  `hleft4` text NOT NULL,
  `hleft5` text NOT NULL,
  `hright1` text NOT NULL,
  `hright2` text NOT NULL,
  `hright3` text NOT NULL,
  `hright4` text NOT NULL,
  `hright5` text NOT NULL,
  `tooth1` text NOT NULL,
  `tooth2` text NOT NULL,
  `fault1` text NOT NULL,
  `fault2` text NOT NULL,
  `weight1` text NOT NULL,
  `weight2` text NOT NULL,
  `weight3` text NOT NULL,
  `weight4` text NOT NULL,
  `weight5` text NOT NULL,
  `height1` text NOT NULL,
  `height2` text NOT NULL,
  `height3` text NOT NULL,
  `height4` text NOT NULL,
  `height5` text NOT NULL,
  `develop1` text NOT NULL,
  `develop2` text NOT NULL,
  `develop3` text NOT NULL,
  `develop4` text NOT NULL,
  `develop5` text NOT NULL,
  `heart1` text NOT NULL,
  `heart2` text NOT NULL,
  `heart3` text NOT NULL,
  `heart4` text NOT NULL,
  `heart5` text NOT NULL,
  `joint1` text NOT NULL,
  `joint2` text NOT NULL,
  `joint3` text NOT NULL,
  `joint4` text NOT NULL,
  `joint5` text NOT NULL,
  `disease1` text NOT NULL,
  `disease2` text NOT NULL,
  `disease3` text NOT NULL,
  `disease4` text NOT NULL,
  `disease5` text NOT NULL,
  `adisease0` text NOT NULL,
  `adisease1` text NOT NULL,
  `adisease2` text NOT NULL,
  `adisease3` text NOT NULL,
  `adisease4` text NOT NULL,
  `adisease5` text NOT NULL,
  `bdisease0` text NOT NULL,
  `bdisease1` text NOT NULL,
  `bdisease2` text NOT NULL,
  `bdisease3` text NOT NULL,
  `bdisease4` text NOT NULL,
  `bdisease5` text NOT NULL,
  `cdisease0` text NOT NULL,
  `cdisease1` text NOT NULL,
  `cdisease2` text NOT NULL,
  `cdisease3` text NOT NULL,
  `cdisease4` text NOT NULL,
  `cdisease5` text NOT NULL,
  `ddisease0` text NOT NULL,
  `ddisease1` text NOT NULL,
  `ddisease2` text NOT NULL,
  `ddisease3` text NOT NULL,
  `ddisease4` text NOT NULL,
  `ddisease5` text NOT NULL,
  `edisease0` text NOT NULL,
  `edisease1` text NOT NULL,
  `edisease2` text NOT NULL,
  `edisease3` text NOT NULL,
  `edisease4` text NOT NULL,
  `edisease5` text NOT NULL,
  `fdisease0` text NOT NULL,
  `fdisease1` text NOT NULL,
  `fdisease2` text NOT NULL,
  `fdisease3` text NOT NULL,
  `fdisease4` text NOT NULL,
  `fdisease5` text NOT NULL,
  `name1` text NOT NULL,
  `name2` text NOT NULL,
  `name3` text NOT NULL,
  `name4` text NOT NULL,
  `name5` text NOT NULL,
  `position1` text NOT NULL,
  `position2` text NOT NULL,
  `position3` text NOT NULL,
  `position4` text NOT NULL,
  `position5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table6`
--

CREATE TABLE `table6` (
  `id` int(10) NOT NULL,
  `day6` date NOT NULL,
  `day7` date NOT NULL,
  `day8` date NOT NULL,
  `day9` date NOT NULL,
  `attack6` text NOT NULL,
  `attack7` text NOT NULL,
  `attack8` text NOT NULL,
  `attack9` text NOT NULL,
  `eye6` text NOT NULL,
  `eye7` text NOT NULL,
  `eye8` text NOT NULL,
  `eye9` text NOT NULL,
  `left6` text NOT NULL,
  `left7` text NOT NULL,
  `left8` text NOT NULL,
  `left9` text NOT NULL,
  `right6` text NOT NULL,
  `right7` text NOT NULL,
  `right8` text NOT NULL,
  `right9` text NOT NULL,
  `blind1` text NOT NULL,
  `blind2` text NOT NULL,
  `blind3` text NOT NULL,
  `bito1` text NOT NULL,
  `bito2` text NOT NULL,
  `bito3` text NOT NULL,
  `hleft6` text NOT NULL,
  `hleft7` text NOT NULL,
  `hleft8` text NOT NULL,
  `hleft9` text NOT NULL,
  `hright6` text NOT NULL,
  `hright7` text NOT NULL,
  `hright8` text NOT NULL,
  `hright9` text NOT NULL,
  `tooth3` text NOT NULL,
  `tooth4` text NOT NULL,
  `tooth5` text NOT NULL,
  `tooth6` text NOT NULL,
  `fault3` text NOT NULL,
  `fault4` text NOT NULL,
  `fault5` text NOT NULL,
  `fault6` text NOT NULL,
  `weight6` text NOT NULL,
  `weight7` text NOT NULL,
  `weight8` text NOT NULL,
  `weight9` text NOT NULL,
  `height6` text NOT NULL,
  `height7` text NOT NULL,
  `height8` text NOT NULL,
  `height9` text NOT NULL,
  `develop6` text NOT NULL,
  `develop7` text NOT NULL,
  `develop8` text NOT NULL,
  `develop9` text NOT NULL,
  `heart6` text NOT NULL,
  `heart7` text NOT NULL,
  `heart8` text NOT NULL,
  `heart9` text NOT NULL,
  `joint6` text NOT NULL,
  `joint7` text NOT NULL,
  `joint8` text NOT NULL,
  `joint9` text NOT NULL,
  `disease6` text NOT NULL,
  `disease7` text NOT NULL,
  `disease8` text NOT NULL,
  `disease9` text NOT NULL,
  `adisease6` text NOT NULL,
  `adisease7` text NOT NULL,
  `adisease8` text NOT NULL,
  `adisease9` text NOT NULL,
  `bdisease6` text NOT NULL,
  `bdisease7` text NOT NULL,
  `bdisease8` text NOT NULL,
  `bdisease9` text NOT NULL,
  `cdisease6` text NOT NULL,
  `cdisease7` text NOT NULL,
  `cdisease8` text NOT NULL,
  `cdisease9` text NOT NULL,
  `ddisease6` text NOT NULL,
  `ddisease7` text NOT NULL,
  `ddisease8` text NOT NULL,
  `ddisease9` text NOT NULL,
  `edisease6` text NOT NULL,
  `edisease7` text NOT NULL,
  `edisease8` text NOT NULL,
  `edisease9` text NOT NULL,
  `fdisease6` text NOT NULL,
  `fdisease7` text NOT NULL,
  `fdisease8` text NOT NULL,
  `fdisease9` text NOT NULL,
  `name6` text NOT NULL,
  `name7` text NOT NULL,
  `name8` text NOT NULL,
  `name9` text NOT NULL,
  `position6` text NOT NULL,
  `position7` text NOT NULL,
  `position8` text NOT NULL,
  `position9` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table7`
--

CREATE TABLE `table7` (
  `id` int(10) NOT NULL,
  `date1` date NOT NULL,
  `date2` date NOT NULL,
  `date3` date NOT NULL,
  `age1` text NOT NULL,
  `age2` text NOT NULL,
  `age3` text NOT NULL,
  `teacher1` text NOT NULL,
  `teacher2` text NOT NULL,
  `teacher3` text NOT NULL,
  `attendance1` text NOT NULL,
  `attendance2` text NOT NULL,
  `attendance3` text NOT NULL,
  `house1` text NOT NULL,
  `house2` text NOT NULL,
  `house3` text NOT NULL,
  `clean1` text NOT NULL,
  `clean2` text NOT NULL,
  `clean3` text NOT NULL,
  `activity1` text NOT NULL,
  `activity2` text NOT NULL,
  `activity3` text NOT NULL,
  `behaviour1` text NOT NULL,
  `behaviour2` text NOT NULL,
  `behaviour3` text NOT NULL,
  `speak1` text NOT NULL,
  `speak2` text NOT NULL,
  `speak3` text NOT NULL,
  `hearing1` text NOT NULL,
  `hearing2` text NOT NULL,
  `hearing3` text NOT NULL,
  `vees1` text NOT NULL,
  `vees2` text NOT NULL,
  `vees3` text NOT NULL,
  `fit1` text NOT NULL,
  `fit2` text NOT NULL,
  `fit3` text NOT NULL,
  `mental1` text NOT NULL,
  `mental2` text NOT NULL,
  `mental3` text NOT NULL,
  `weight1` text NOT NULL,
  `weight2` text NOT NULL,
  `weight3` text NOT NULL,
  `type1` text NOT NULL,
  `type2` text NOT NULL,
  `type3` text NOT NULL,
  `interrupt1` text NOT NULL,
  `interrupt2` text NOT NULL,
  `interrupt3` text NOT NULL,
  `height1` text NOT NULL,
  `height2` text NOT NULL,
  `height3` text NOT NULL,
  `sheight1` text NOT NULL,
  `sheight2` text NOT NULL,
  `sheight3` text NOT NULL,
  `night1` text NOT NULL,
  `night2` text NOT NULL,
  `night3` text NOT NULL,
  `bito1` text NOT NULL,
  `bito2` text NOT NULL,
  `bito3` text NOT NULL,
  `ni1` text NOT NULL,
  `ni2` text NOT NULL,
  `ni3` text NOT NULL,
  `louse1` text NOT NULL,
  `louse2` text NOT NULL,
  `louse3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table8`
--

CREATE TABLE `table8` (
  `id` int(10) NOT NULL,
  `lsquint1` text NOT NULL,
  `lsquint2` text NOT NULL,
  `lsquint3` text NOT NULL,
  `rsquint1` text NOT NULL,
  `rsquint2` text NOT NULL,
  `rsquint3` text NOT NULL,
  `lvision1` text NOT NULL,
  `lvision2` text NOT NULL,
  `lvision3` text NOT NULL,
  `rvision1` text NOT NULL,
  `rvision2` text NOT NULL,
  `rvision3` text NOT NULL,
  `lhearing1` text NOT NULL,
  `lhearing2` text NOT NULL,
  `lhearing3` text NOT NULL,
  `rhearing1` text NOT NULL,
  `rhearing2` text NOT NULL,
  `rhearing3` text NOT NULL,
  `speech1` text NOT NULL,
  `speech2` text NOT NULL,
  `speech3` text NOT NULL,
  `tooth1` text NOT NULL,
  `tooth2` text NOT NULL,
  `tooth3` text NOT NULL,
  `teeth1` text NOT NULL,
  `teeth2` text NOT NULL,
  `teeth3` text NOT NULL,
  `ynt1` text NOT NULL,
  `ynt2` text NOT NULL,
  `ynt3` text NOT NULL,
  `mark1` text NOT NULL,
  `mark2` text NOT NULL,
  `mark3` text NOT NULL,
  `bone1` text NOT NULL,
  `bone2` text NOT NULL,
  `bone3` text NOT NULL,
  `heart1` text NOT NULL,
  `heart2` text NOT NULL,
  `heart3` text NOT NULL,
  `lungs1` text NOT NULL,
  `lungs2` text NOT NULL,
  `lungs3` text NOT NULL,
  `ovarious1` text NOT NULL,
  `ovarious2` text NOT NULL,
  `ovarious3` text NOT NULL,
  `ovarious4` text NOT NULL,
  `tvarious1` text NOT NULL,
  `tvarious2` text NOT NULL,
  `tvarious3` text NOT NULL,
  `tvarious4` text NOT NULL,
  `thvarious1` text NOT NULL,
  `thvarious2` text NOT NULL,
  `thvarious3` text NOT NULL,
  `thvarious4` text NOT NULL,
  `fvarious1` text NOT NULL,
  `fvarious2` text NOT NULL,
  `fvarious3` text NOT NULL,
  `fvarious4` text NOT NULL,
  `tname1` text NOT NULL,
  `tname2` text NOT NULL,
  `tname3` text NOT NULL,
  `tposition1` text NOT NULL,
  `tposition2` text NOT NULL,
  `tposition3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table9`
--

CREATE TABLE `table9` (
  `id` int(10) NOT NULL,
  `date1` date NOT NULL,
  `reason1` text NOT NULL,
  `place1` text NOT NULL,
  `result1` text NOT NULL,
  `date2` date NOT NULL,
  `reason2` text NOT NULL,
  `place2` text NOT NULL,
  `result2` text NOT NULL,
  `date3` date NOT NULL,
  `reason3` text NOT NULL,
  `place3` text NOT NULL,
  `result3` text NOT NULL,
  `date4` date NOT NULL,
  `reason4` text NOT NULL,
  `place4` text NOT NULL,
  `result4` text NOT NULL,
  `date5` date NOT NULL,
  `reason5` text NOT NULL,
  `place5` text NOT NULL,
  `result5` text NOT NULL,
  `date6` date NOT NULL,
  `reason6` text NOT NULL,
  `place6` text NOT NULL,
  `result6` text NOT NULL,
  `date7` date NOT NULL,
  `reason7` text NOT NULL,
  `place7` text NOT NULL,
  `result7` text NOT NULL,
  `date8` date NOT NULL,
  `reason8` text NOT NULL,
  `place8` text NOT NULL,
  `result8` text NOT NULL,
  `date9` date NOT NULL,
  `reason9` text NOT NULL,
  `place9` text NOT NULL,
  `result9` text NOT NULL,
  `date10` date NOT NULL,
  `reason10` text NOT NULL,
  `place10` text NOT NULL,
  `result10` text NOT NULL,
  `date11` date NOT NULL,
  `reason11` text NOT NULL,
  `place11` text NOT NULL,
  `result11` text NOT NULL,
  `date12` date NOT NULL,
  `reason12` text NOT NULL,
  `place12` text NOT NULL,
  `result12` text NOT NULL,
  `date13` date NOT NULL,
  `reason13` text NOT NULL,
  `place13` text NOT NULL,
  `result13` text NOT NULL,
  `date14` date NOT NULL,
  `reason14` text NOT NULL,
  `place14` text NOT NULL,
  `result14` text NOT NULL,
  `date15` date NOT NULL,
  `reason15` text NOT NULL,
  `place15` text NOT NULL,
  `result15` text NOT NULL,
  `date16` date NOT NULL,
  `reason16` text NOT NULL,
  `place16` text NOT NULL,
  `result16` text NOT NULL,
  `date17` date NOT NULL,
  `reason17` text NOT NULL,
  `place17` text NOT NULL,
  `result17` text NOT NULL,
  `date18` date NOT NULL,
  `reason18` text NOT NULL,
  `place18` text NOT NULL,
  `result18` text NOT NULL,
  `date19` date NOT NULL,
  `reason19` text NOT NULL,
  `place19` text NOT NULL,
  `result19` text NOT NULL,
  `date20` date NOT NULL,
  `reason20` text NOT NULL,
  `place20` text NOT NULL,
  `result20` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table10`
--

CREATE TABLE `table10` (
  `id` int(10) NOT NULL,
  `ndate1` date NOT NULL,
  `nreason1` text NOT NULL,
  `nplace1` text NOT NULL,
  `nresult1` text NOT NULL,
  `ndate2` date NOT NULL,
  `nreason2` text NOT NULL,
  `nplace2` text NOT NULL,
  `nresult2` text NOT NULL,
  `ndate3` date NOT NULL,
  `nreason3` text NOT NULL,
  `nplace3` text NOT NULL,
  `nresult3` text NOT NULL,
  `ndate4` date NOT NULL,
  `nreason4` text NOT NULL,
  `nplace4` text NOT NULL,
  `nresult4` text NOT NULL,
  `ndate5` date NOT NULL,
  `nreason5` text NOT NULL,
  `nplace5` text NOT NULL,
  `nresult5` text NOT NULL,
  `ndate6` date NOT NULL,
  `nreason6` text NOT NULL,
  `nplace6` text NOT NULL,
  `nresult6` text NOT NULL,
  `ndate7` date NOT NULL,
  `nreason7` text NOT NULL,
  `nplace7` text NOT NULL,
  `nresult7` text NOT NULL,
  `ndate8` date NOT NULL,
  `nreason8` text NOT NULL,
  `nplace8` text NOT NULL,
  `nresult8` text NOT NULL,
  `ndate9` date NOT NULL,
  `nreason9` text NOT NULL,
  `nplace9` text NOT NULL,
  `nresult9` text NOT NULL,
  `ndate10` date NOT NULL,
  `nreason10` text NOT NULL,
  `nplace10` text NOT NULL,
  `nresult10` text NOT NULL,
  `ndate11` date NOT NULL,
  `nreason11` text NOT NULL,
  `nplace11` text NOT NULL,
  `nresult11` text NOT NULL,
  `ndate12` date NOT NULL,
  `nreason12` text NOT NULL,
  `nplace12` text NOT NULL,
  `nresult12` text NOT NULL,
  `ndate13` date NOT NULL,
  `nreason13` text NOT NULL,
  `nplace13` text NOT NULL,
  `nresult13` text NOT NULL,
  `ndate14` date NOT NULL,
  `nreason14` text NOT NULL,
  `nplace14` text NOT NULL,
  `nresult14` text NOT NULL,
  `ndate15` date NOT NULL,
  `nreason15` text NOT NULL,
  `nplace15` text NOT NULL,
  `nresult15` text NOT NULL,
  `ndate16` date NOT NULL,
  `nreason16` text NOT NULL,
  `nplace16` text NOT NULL,
  `nresult16` text NOT NULL,
  `ndate17` date NOT NULL,
  `nreason17` text NOT NULL,
  `nplace17` text NOT NULL,
  `nresult17` text NOT NULL,
  `ndate18` date NOT NULL,
  `nreason18` text NOT NULL,
  `nplace18` text NOT NULL,
  `nresult18` text NOT NULL,
  `ndate19` date NOT NULL,
  `nreason19` text NOT NULL,
  `nplace19` text NOT NULL,
  `nresult19` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('988011002V', '81dc9bdb52d04dc20036dbd8313ed055', 'Receptionist');

-- --------------------------------------------------------

--
-- Table structure for table `usscan`
--

CREATE TABLE `usscan` (
  `id` varchar(20) NOT NULL,
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
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `table3`
--
ALTER TABLE `table3`
  ADD PRIMARY KEY (`idn`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
