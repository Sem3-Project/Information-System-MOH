-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2020 at 05:09 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

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
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `id` int(20) NOT NULL,
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

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`id`, `wAge`, `hAge`, `wEducation`, `hEducation`, `wOccupation`, `hOccupation`, `fhDiabetes`, `fhHypertension`, `fhHaematologic`, `fhTwin`, `fhOthers`, `shDiabetes`, `shHypertension`, `shCardiac`, `shRenal`, `shHepatic`, `shPsychiatric`, `shEpilepsy`, `shMalignancies`, `shHaematological`, `shTuberculosis`, `shThyroid`, `shBronchial`, `shDVT`, `shSurgeries`, `shOther`, `shScore`, `poGoneAc`, `poGonePm`, `poGoneOut`, `poGoneW`, `poGonePc`, `poGoneSa`, `poGtwoAc`, `poGtwoPm`, `poGtwoOut`, `poGtwoW`, `poGtwoPc`, `poGtwoSa`, `poGthAc`, `poGthPm`, `poGthOut`, `poGthW`, `poGthPc`, `poGthSa`, `poGfoAc`, `poGfoPm`, `poGfoOut`, `poGfoW`, `poGfoPc`, `poGfoSa`, `poGfiAc`, `poGfiPm`, `poGfiOut`, `poGfiW`, `poGfiPc`, `poGfiSa`, `poGsAc`, `poGsPm`, `poGsOut`, `poGsW`, `poGsPc`, `poGsSa`, `poText`) VALUES
(1, 26, 29, 'degree', 'degree', 'teacher', 'teacher', 'No', 'Yes', 'No', 'No', 'no', 'No', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'no', 'no', 'no', 'no', 'ss', 'ss', 'ss', 200, 'no', 'no', 'no', 'no', 'no', 0, 'no', 'no', 'no', 'no', 'no', 0, 'no', 'no', 'no', 'no', 'no', 0, 'no', 'no', 'no', 'no', 'no', 0, 'no', '', 'no', 'on', 'no', 0, 'no', 'no', 'nothing'),
(1, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', ''),
(1, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', ''),
(2, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '');

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

--
-- Dumping data for table `table2`
--

INSERT INTO `table2` (`idNew`, `ipp`, `zscore`, `day1`, `day2`, `day3`, `day4`, `day5`, `day6`, `day7`, `day8`, `imday1`, `imday2`, `imday3`, `imday4`, `imday5`, `imday6`, `imday7`, `imday8`, `cday`, `cplace`, `date`, `bpro`, `avd`, `evb`, `pallor`, `icterus`, `oedema`, `bp`, `cs`, `rs`, `ae`, `ve`, `epds`, `other`, `problem`, `method`, `Chosen`, `reason`, `fpPlace`, `fpDate`, `fpTime`, `sNote`, `oName`, `designation`, `cName`, `cTel`, `phmTel`, `mohTel`) VALUES
(1, 'nothing ', '65', '2020-06-29', '2020-07-08', '2020-07-02', '2020-07-03', '2020-07-02', '2020-07-27', '2020-08-07', '2020-07-30', '2020-07-02', '2020-07-06', '2020-06-28', '2020-06-30', '2020-07-06', '2020-04-15', '2020-07-29', '2020-08-02', '2020-07-30', 'hospital', '2020-07-17', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'PL', 'IP', 'no', 'hospital', '2020-06-30', '00:00:00.000000', 'no', 'kamal', 'doctor', 'gampaha', '075-825-2533', '012-565-5555', '012-520-5222');

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

--
-- Dumping data for table `table3`
--

INSERT INTO `table3` (`idn`, `sMonth`, `cMonth`, `cStatus`, `shead`, `chead`, `cshead`, `slook`, `clook`, `cslook`, `ssound`, `csound`, `cssound`, `sreaction`, `creaction`, `csreaction`, `ssmile`, `csmile`, `cssmile`, `smonth1`, `cmonth1`, `cstatus1`, `sheart`, `cheart`, `csheart`, `sfinger`, `cfinger`, `csfinger`, `shand`, `chand`, `cshand`, `shsound`, `chsound`, `cshsound`, `ssingle`, `csingle`, `cssingle`, `sssmile`, `cssmile1`, `csssmile`, `smonths`, `cmonths`, `cstatuses`, `shrise`, `chrise`, `cshrise`, `ssame`, `csame`, `cssame`, `schange`, `cchange`, `cschange`, `sagain`, `cagain`, `csagain`, `snine`, `cnine`, `csnine`, `ssit`, `csit`, `cssit`, `sstand`, `cstand`, `csstand`, `sitem`, `citem`, `csitem`, `smimicry`, `cmimicry`, `csmimicry`, `sword`, `cword`, `csword`, `sadvice`, `cadvice`, `csadvice`, `stwelve`, `ctwelve`, `cstwelve`, `swalk`, `cwalk`, `cswalk`, `sgive`, `cgive`, `csgive`, `sfamiliar`, `cfamiliar`, `csfamiliar`, `sball`, `cball`, `csball`, `spart`, `cpart`, `cspart`) VALUES
(1, 2, 2, 'doctor', 2, 2, 'doctor', 2, 2, 'doctor', 2, 2, 'doctor', 2, 2, 'doctor', 2, 2, 'doctor', 3, 3, 'doctor', 3, 3, 'doctor', 3, 3, 'doctor', 3, 3, 'doctor', 3, 3, 'doctor', 3, 3, 'doctor', 3, 3, 'doctor', 7, 7, 'doctor', 7, 7, 'doctor', 7, 7, 'doctor', 7, 7, 'doctor', 7, 7, 'doctor', 9, 9, 'doctor', 9, 9, 'doctor', 9, 9, 'doctor', 9, 9, 'doctor', 9, 9, 'doctor', 9, 9, 'doctor', 9, 9, 'doctor', 12, 12, 'doctor', 12, 12, 'doctor', 12, 12, 'doctor', 12, 12, 'doctor', 12, 12, 'doctor', 12, 12, 'doctor');

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

--
-- Dumping data for table `table4`
--

INSERT INTO `table4` (`id`, `seighteen`, `ceighteen`, `cseighteen`, `sawalk`, `cawalk`, `csawalk`, `sstair`, `cstair`, `csstair`, `sblock`, `cblock`, `csblock`, `seat`, `ceat`, `cseat`, `stenWord`, `ctenWord`, `cstenWord`, `slip`, `clip`, `cslip`, `syear`, `cyear`, `csyear`, `srun`, `crun`, `csrun`, `sup`, `cup`, `csup`, `scircle`, `ccircle`, `cscircle`, `ssentence`, `csentence`, `cssentence`, `sthree`, `cthree`, `csthree`, `sleg`, `cleg`, `csleg`, `sjump`, `cjump`, `csjump`, `sshoe`, `cshoe`, `csshoe`, `scopy`, `ccopy`, `cscopy`, `scount`, `ccount`, `cscount`, `snear`, `cnear`, `csnear`, `scomplex`, `ccomplex`, `cscomplex`, `sfour`, `cfour`, `csfour`, `slegJump`, `clegJump`, `cslegJump`, `sdressing`, `cdressing`, `csdressing`, `sfood`, `cfood`, `csfood`, `sskeleton`, `cskeleton`, `csskeleton`, `splay`, `cplay`, `csplay`, `stime`, `ctime`, `cstime`, `sname`, `cname`, `csname`) VALUES
(1, 22, 20, 'doctor', 20, 20, 'doctor', 20, 20, 'doctor', 20, 20, 'doctor', 20, 20, 'doctor', 20, 20, 'doctor', 20, 0, 'doctor', 2, 2, 'doctor', 22, 2, 'doctor', 2, 2, 'doctor', 2, 2, 'doctor', 2, 2, 'doctor', 3, 3, 'doctor', 3, 3, 'doctor', 3, 3, 'doctor', 3, 3, 'doctor', 3, 3, 'doctor', 3, 3, 'doctor', 3, 3, 'doctor', 3, 3, 'doctor', 4, 4, 'doctor', 4, 4, 'doctor', 4, 4, 'doctor', 4, 4, 'doctor', 4, 4, 'doctor', 4, 4, 'doctor', 4, 4, 'doctor', 4, 4, 'doctor');

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

--
-- Dumping data for table `table5`
--

INSERT INTO `table5` (`id`, `day1`, `day2`, `day3`, `day4`, `day5`, `attack1`, `attack2`, `attack3`, `attack4`, `attack5`, `eye1`, `eye2`, `eye3`, `eye4`, `eye5`, `left1`, `left2`, `left3`, `left4`, `left5`, `right1`, `right2`, `right3`, `right4`, `right5`, `hleft1`, `hleft2`, `hleft3`, `hleft4`, `hleft5`, `hright1`, `hright2`, `hright3`, `hright4`, `hright5`, `tooth1`, `tooth2`, `fault1`, `fault2`, `weight1`, `weight2`, `weight3`, `weight4`, `weight5`, `height1`, `height2`, `height3`, `height4`, `height5`, `develop1`, `develop2`, `develop3`, `develop4`, `develop5`, `heart1`, `heart2`, `heart3`, `heart4`, `heart5`, `joint1`, `joint2`, `joint3`, `joint4`, `joint5`, `disease1`, `disease2`, `disease3`, `disease4`, `disease5`, `adisease0`, `adisease1`, `adisease2`, `adisease3`, `adisease4`, `adisease5`, `bdisease0`, `bdisease1`, `bdisease2`, `bdisease3`, `bdisease4`, `bdisease5`, `cdisease0`, `cdisease1`, `cdisease2`, `cdisease3`, `cdisease4`, `cdisease5`, `ddisease0`, `ddisease1`, `ddisease2`, `ddisease3`, `ddisease4`, `ddisease5`, `edisease0`, `edisease1`, `edisease2`, `edisease3`, `edisease4`, `edisease5`, `fdisease0`, `fdisease1`, `fdisease2`, `fdisease3`, `fdisease4`, `fdisease5`, `name1`, `name2`, `name3`, `name4`, `name5`, `position1`, `position2`, `position3`, `position4`, `position5`) VALUES
(1, '2020-07-10', '2020-07-01', '2020-07-02', '2020-07-13', '2020-07-13', 'no', 'no', '', '', '', 'no', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

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

--
-- Dumping data for table `table6`
--

INSERT INTO `table6` (`id`, `day6`, `day7`, `day8`, `day9`, `attack6`, `attack7`, `attack8`, `attack9`, `eye6`, `eye7`, `eye8`, `eye9`, `left6`, `left7`, `left8`, `left9`, `right6`, `right7`, `right8`, `right9`, `blind1`, `blind2`, `blind3`, `bito1`, `bito2`, `bito3`, `hleft6`, `hleft7`, `hleft8`, `hleft9`, `hright6`, `hright7`, `hright8`, `hright9`, `tooth3`, `tooth4`, `tooth5`, `tooth6`, `fault3`, `fault4`, `fault5`, `fault6`, `weight6`, `weight7`, `weight8`, `weight9`, `height6`, `height7`, `height8`, `height9`, `develop6`, `develop7`, `develop8`, `develop9`, `heart6`, `heart7`, `heart8`, `heart9`, `joint6`, `joint7`, `joint8`, `joint9`, `disease6`, `disease7`, `disease8`, `disease9`, `adisease6`, `adisease7`, `adisease8`, `adisease9`, `bdisease6`, `bdisease7`, `bdisease8`, `bdisease9`, `cdisease6`, `cdisease7`, `cdisease8`, `cdisease9`, `ddisease6`, `ddisease7`, `ddisease8`, `ddisease9`, `edisease6`, `edisease7`, `edisease8`, `edisease9`, `fdisease6`, `fdisease7`, `fdisease8`, `fdisease9`, `name6`, `name7`, `name8`, `name9`, `position6`, `position7`, `position8`, `position9`) VALUES
(1, '2020-07-10', '2020-07-06', '2020-07-22', '2020-07-06', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'no', 'no', 'no', 'no', 'no', 'no', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'non', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'nonn', 'no', 'no', 'no', 'john', 'john', 'john', 'john', 'nurse', 'nurse', 'nurse', 'nurse');

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

--
-- Dumping data for table `table7`
--

INSERT INTO `table7` (`id`, `date1`, `date2`, `date3`, `age1`, `age2`, `age3`, `teacher1`, `teacher2`, `teacher3`, `attendance1`, `attendance2`, `attendance3`, `house1`, `house2`, `house3`, `clean1`, `clean2`, `clean3`, `activity1`, `activity2`, `activity3`, `behaviour1`, `behaviour2`, `behaviour3`, `speak1`, `speak2`, `speak3`, `hearing1`, `hearing2`, `hearing3`, `vees1`, `vees2`, `vees3`, `fit1`, `fit2`, `fit3`, `mental1`, `mental2`, `mental3`, `weight1`, `weight2`, `weight3`, `type1`, `type2`, `type3`, `interrupt1`, `interrupt2`, `interrupt3`, `height1`, `height2`, `height3`, `sheight1`, `sheight2`, `sheight3`, `night1`, `night2`, `night3`, `bito1`, `bito2`, `bito3`, `ni1`, `ni2`, `ni3`, `louse1`, `louse2`, `louse3`) VALUES
(1, '2020-07-01', '2020-06-28', '2020-07-09', '5', '6', '7', 'good', 'good', 'good', '4', '4', '3', '4', '4', '4', '4', '4', '4', '3', '4', '4', 'X', 'X', 'X', 'O', 'X', 'X', 'X', 'X', 'X', 'X', 'X', 'X', 'O', 'O', 'O', 'O', 'O', 'O', '20', '20', '20', 'perfect', 'perfect', 'perfect', 'no', 'no', 'no', '120', '120', '120', 'perfect', 'perfect', 'perfect', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'X', 'O');

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

--
-- Dumping data for table `table8`
--

INSERT INTO `table8` (`id`, `lsquint1`, `lsquint2`, `lsquint3`, `rsquint1`, `rsquint2`, `rsquint3`, `lvision1`, `lvision2`, `lvision3`, `rvision1`, `rvision2`, `rvision3`, `lhearing1`, `lhearing2`, `lhearing3`, `rhearing1`, `rhearing2`, `rhearing3`, `speech1`, `speech2`, `speech3`, `tooth1`, `tooth2`, `tooth3`, `teeth1`, `teeth2`, `teeth3`, `ynt1`, `ynt2`, `ynt3`, `mark1`, `mark2`, `mark3`, `bone1`, `bone2`, `bone3`, `heart1`, `heart2`, `heart3`, `lungs1`, `lungs2`, `lungs3`, `ovarious1`, `ovarious2`, `ovarious3`, `ovarious4`, `tvarious1`, `tvarious2`, `tvarious3`, `tvarious4`, `thvarious1`, `thvarious2`, `thvarious3`, `thvarious4`, `fvarious1`, `fvarious2`, `fvarious3`, `fvarious4`, `tname1`, `tname2`, `tname3`, `tposition1`, `tposition2`, `tposition3`) VALUES
(1, 'X', 'O', 'O', 'O', 'O', 'O', 'X', 'X', 'O', 'X', 'O', 'O', 'X', 'X', 'O', 'O', 'O', 'O', 'X', 'O', 'O', 'X', 'X', 'X', 'X', 'X', 'O', 'X', 'O', 'X', 'O', 'O', 'O', 'O', 'X', 'X', 'O', 'X', 'X', 'X', 'O', 'X', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'raawen', 'raawen', 'raawen', 'Doctor', 'Midwife', 'Doctor');

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

--
-- Dumping data for table `table9`
--

INSERT INTO `table9` (`id`, `date1`, `reason1`, `place1`, `result1`, `date2`, `reason2`, `place2`, `result2`, `date3`, `reason3`, `place3`, `result3`, `date4`, `reason4`, `place4`, `result4`, `date5`, `reason5`, `place5`, `result5`, `date6`, `reason6`, `place6`, `result6`, `date7`, `reason7`, `place7`, `result7`, `date8`, `reason8`, `place8`, `result8`, `date9`, `reason9`, `place9`, `result9`, `date10`, `reason10`, `place10`, `result10`, `date11`, `reason11`, `place11`, `result11`, `date12`, `reason12`, `place12`, `result12`, `date13`, `reason13`, `place13`, `result13`, `date14`, `reason14`, `place14`, `result14`, `date15`, `reason15`, `place15`, `result15`, `date16`, `reason16`, `place16`, `result16`, `date17`, `reason17`, `place17`, `result17`, `date18`, `reason18`, `place18`, `result18`, `date19`, `reason19`, `place19`, `result19`, `date20`, `reason20`, `place20`, `result20`) VALUES
(1, '2020-07-01', 'reason', 'clinic', 'result', '2020-07-01', 'reason', 'clinic', 'result', '2020-07-08', 'reason', 'clinic', 'result', '2020-07-12', 'reason', 'clinic', 'result', '2020-06-30', 'reason', 'clinic', 'result', '2020-06-29', 'reason', 'clinic', 'result', '2020-07-16', 'reason', 'clinic', 'result', '2020-08-06', 'reason', 'clinic', 'result', '2020-07-17', 'reason', 'clinic', 'result', '2020-07-13', 'reason', 'clinic', 'result', '2020-06-08', 'reason', 'clinic', 'result', '2020-07-31', 'reason', 'clinic', 'result', '2020-06-29', 'reason', 'clinic', 'result', '2020-07-03', 'reason', 'clinic', 'result', '2020-06-29', 'reason', 'clinic', 'result', '2020-06-29', 'reason', 'clinic', 'result', '2020-06-28', 'reason', 'clinic', 'result', '2020-07-22', 'reason', 'clinic', 'result', '2020-07-20', 'reason', 'clinic', 'result', '2020-08-02', 'reason', 'clinic', 'result');

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

--
-- Dumping data for table `table10`
--

INSERT INTO `table10` (`id`, `ndate1`, `nreason1`, `nplace1`, `nresult1`, `ndate2`, `nreason2`, `nplace2`, `nresult2`, `ndate3`, `nreason3`, `nplace3`, `nresult3`, `ndate4`, `nreason4`, `nplace4`, `nresult4`, `ndate5`, `nreason5`, `nplace5`, `nresult5`, `ndate6`, `nreason6`, `nplace6`, `nresult6`, `ndate7`, `nreason7`, `nplace7`, `nresult7`, `ndate8`, `nreason8`, `nplace8`, `nresult8`, `ndate9`, `nreason9`, `nplace9`, `nresult9`, `ndate10`, `nreason10`, `nplace10`, `nresult10`, `ndate11`, `nreason11`, `nplace11`, `nresult11`, `ndate12`, `nreason12`, `nplace12`, `nresult12`, `ndate13`, `nreason13`, `nplace13`, `nresult13`, `ndate14`, `nreason14`, `nplace14`, `nresult14`, `ndate15`, `nreason15`, `nplace15`, `nresult15`, `ndate16`, `nreason16`, `nplace16`, `nresult16`, `ndate17`, `nreason17`, `nplace17`, `nresult17`, `ndate18`, `nreason18`, `nplace18`, `nresult18`, `ndate19`, `nreason19`, `nplace19`, `nresult19`) VALUES
(1, '2020-06-29', 'reason', 'judge', 'result', '2020-06-29', 'reason', 'judge', 'result', '2020-07-14', 'reason', 'judge', 'result', '2020-07-05', 'reason', 'judge', 'result', '2020-07-21', 'reason', 'judge', 'result', '2020-07-06', 'reason', 'judge', 'result', '2020-06-28', 'reason', 'judge', 'result', '2020-07-08', 'reason', 'judge', 'result', '2020-06-28', 'reason', 'judge', 'result', '2020-07-01', 'reason', 'judge', 'result', '2020-07-04', 'reason', 'judge', 'result', '2020-07-20', 'reason', 'judge', 'result', '2020-07-27', 'reason', 'judge', 'result', '2020-07-23', 'reason', 'judge', 'result', '2020-06-15', 'reason', 'judge', 'result', '2020-08-01', 'reason', 'judge', 'result', '2020-06-29', 'reason', 'judge', 'result', '2020-08-06', 'reason', 'judge', 'result', '2020-08-03', 'reason', 'judge', 'result');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table3`
--
ALTER TABLE `table3`
  ADD PRIMARY KEY (`idn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
