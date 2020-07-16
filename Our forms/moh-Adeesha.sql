-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jul 16, 2020 at 04:10 AM
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
  `patient_id` int(11) NOT NULL,
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
  `patient_id` int(11) NOT NULL,
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
  `patient_id` int(11) NOT NULL,
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

--
-- Dumping data for table `childdata2`
--

INSERT INTO `childdata2` (`patient_id`, `dat1`, `dat2`, `dat3`, `dat4`, `scolor1`, `scolor2`, `scolor3`, `scolor4`, `eye1`, `eye2`, `eye3`, `eye4`, `sc1`, `sc2`, `sc3`, `sc4`, `m1`, `m2`, `m3`, `m4`, `rel1`, `rel2`, `rel3`, `rel4`, `other1`, `other2`, `other3`, `other4`, `date1`, `date2`, `date3`, `date4`, `date5`, `date6`, `date7`, `date8`, `date9`, `date10`, `date11`, `date12`, `date13`, `date14`, `date15`, `date16`, `date17`, `date18`, `date19`, `date20`) VALUES
(985791910, '2020-07-15', '2020-07-15', '2020-07-07', '0000-00-00', '', '', '', '', '', '<br /><b>Notice</b>:  Undefined variable: seye2 in <b>C:xampphtdocsHOSchild2.php</b> on line <b>260</b><br />', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `childdata3`
--

CREATE TABLE `childdata3` (
  `patient_id` int(11) NOT NULL,
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
  `patient_id` int(11) NOT NULL,
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

--
-- Dumping data for table `childdata4`
--

INSERT INTO `childdata4` (`patient_id`, `light`, `watch`, `smile`, `eye`, `look`, `touch`, `eyeerror`, `pick`, `touch2`, `recognize`) VALUES
(985791910, 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `childdata5`
--

CREATE TABLE `childdata5` (
  `patient_id` int(11) NOT NULL,
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

--
-- Dumping data for table `childdata5`
--

INSERT INTO `childdata5` (`patient_id`, `sound`, `highsound`, `smile`, `eye`, `hear`, `search`, `song`, `name`, `respond`, `look`) VALUES
(985791910, 'No', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes');

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
-- Indexes for table `childdata`
--
ALTER TABLE `childdata`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `childdata1`
--
ALTER TABLE `childdata1`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `childdata4`
--
ALTER TABLE `childdata4`
  ADD PRIMARY KEY (`patient_id`);

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
