-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2020 at 03:42 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `therapistName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`username`, `password`, `therapistName`) VALUES
('izzati', 'izzati2020', 'Izzati Azman'),
('janedoe', '1234', 'Jane Doe');

-- --------------------------------------------------------

--
-- Table structure for table `parent_info`
--

CREATE TABLE `parent_info` (
  `parentID` varchar(100) NOT NULL,
  `parentName` varchar(200) NOT NULL,
  `homeAddress` text NOT NULL,
  `phoneNumber` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `workingAddress` text NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent_info`
--

INSERT INTO `parent_info` (`parentID`, `parentName`, `homeAddress`, `phoneNumber`, `occupation`, `workingAddress`, `email`) VALUES
('801207084791', 'Mohamed Bin Zahari', 'A-321, Kondominium Seri, Taman Mawar, 68100 Batu Caves, Selangor', '013-2347890', 'Lecturer', 'UNIKL BMI, Gombak', 'mohamed07@gmail.com '),
('820830086133', 'Ahmad bin Karim', 'No.7, Taman Melawati, 53000 Jalan Gombak, Kuala Lumpur', '014-2445116', 'Teacher', 'Sekolah Kebangsaan Jalan Gombak', 'ahmadkarim82@gmail.com'),
('830722082535', 'Ismail Bin Ibrahim', 'D-101, Apartment Bunga Raya, Taman Sentosa, 43000 Bangi, Selangor', '017-9876543', 'Dentist', 'Hospital Serdang', 'ismail535@gmail.com'),
('851002082637', 'Rashid Bin Abd Razak', 'No 10, Jalan Gamuda, Taman Sri Muda, 68000 Ampang, Selangor', '015-1357924', 'Engineer ', 'Sama Maju Sdn Bhd', 'rashid85@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `patient_info`
--

CREATE TABLE `patient_info` (
  `mykid` varchar(100) NOT NULL,
  `parentID` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `patientName` text NOT NULL,
  `dob` date NOT NULL,
  `gender` text NOT NULL,
  `oku` varchar(20) NOT NULL,
  `school` text NOT NULL,
  `level1` varchar(100) DEFAULT NULL,
  `level2` varchar(100) DEFAULT NULL,
  `level3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_info`
--

INSERT INTO `patient_info` (`mykid`, `parentID`, `age`, `patientName`, `dob`, `gender`, `oku`, `school`, `level1`, `level2`, `level3`) VALUES
('090313085221', '820830086133', 11, 'Irfan Bin Ahmad', '2009-10-23', 'Male', 'DE203060405798', 'Sekolah Kebangsaan Taman Melawati', '1', '1', NULL),
('100101082553', '801207084791', 10, 'Muhammad Adam Bin Mohamed', '2010-01-01', 'Male', 'DE101010100001', 'Sekolah Kebangsaan Bandar Baru Bangi', '1', '1', NULL),
('100913084388', '851002082637', 10, 'Amina Sofea Binti Rashid', '2010-09-13', 'Female', 'DE205010108701', 'Sekolah Kebangsaan Sajana Indah', '1', NULL, NULL),
('120908085769', '830722082535', 8, 'Muhammad Hanif Bin Ismail', '2012-09-08', 'Male', 'DE102030980001', 'Sekolah Kebangsaan Taman Melawati', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `question_info`
--

CREATE TABLE `question_info` (
  `num` double NOT NULL,
  `mykid` varchar(100) NOT NULL,
  `q1` int(11) NOT NULL,
  `q2` int(11) NOT NULL,
  `q3` int(11) NOT NULL,
  `q4` int(11) NOT NULL,
  `q5` int(11) NOT NULL,
  `q6` int(11) NOT NULL,
  `q7` int(11) NOT NULL,
  `q8` int(11) NOT NULL,
  `q9` int(11) NOT NULL,
  `q10` int(11) NOT NULL,
  `q11` int(11) NOT NULL,
  `q12` int(11) NOT NULL,
  `q13` int(11) NOT NULL,
  `q14` int(11) NOT NULL,
  `q15` int(11) NOT NULL,
  `q16` int(11) NOT NULL,
  `q17` int(11) NOT NULL,
  `q18` int(11) NOT NULL,
  `q19` int(11) NOT NULL,
  `q20` int(11) NOT NULL,
  `q21` int(11) NOT NULL,
  `q22` int(11) NOT NULL,
  `q23` int(11) NOT NULL,
  `q24` int(11) NOT NULL,
  `q25` int(11) NOT NULL,
  `result1` int(11) GENERATED ALWAYS AS (concat(`q1` + `q2`)) STORED,
  `result2` int(11) GENERATED ALWAYS AS (concat(`q3`)) STORED,
  `result3` int(11) GENERATED ALWAYS AS (concat(`q4`)) STORED,
  `result4` int(11) GENERATED ALWAYS AS (concat(`q5` + `q6`)) STORED,
  `result5` int(11) GENERATED ALWAYS AS (concat(`q7` + `q8`)) STORED,
  `result6` int(11) GENERATED ALWAYS AS (concat(`q7` + `q8`)) STORED,
  `result7` int(11) GENERATED ALWAYS AS (concat(`q9` + `q10`)) STORED,
  `result8` int(11) GENERATED ALWAYS AS (concat(`q11` + `q12` + `q13`)) STORED,
  `result9` int(11) GENERATED ALWAYS AS (concat(`q14` + `q15`)) STORED,
  `result10` int(11) GENERATED ALWAYS AS (concat(`q16` + `q17` + `q18` + `q19`)) STORED,
  `result11` int(11) GENERATED ALWAYS AS (concat(`q20` + `q21` + `q22` + `q23`)) STORED,
  `result12` int(11) GENERATED ALWAYS AS (concat(`q24` + `q25`)) STORED
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question_info`
--

INSERT INTO `question_info` (`num`, `mykid`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`, `q21`, `q22`, `q23`, `q24`, `q25`) VALUES
(1, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(116, '090313085221', 0, 0, 0, 1, 0, 1, 1, 1, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1),
(119, '100101082553', 1, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 1, 1);

--
-- Triggers `question_info`
--
DELIMITER $$
CREATE TRIGGER `after_insert_answer` AFTER UPDATE ON `question_info` FOR EACH ROW UPDATE patient_info
SET dsm5="Done"
WHERE question_info.mykid=patient_info.mykid
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `parent_info`
--
ALTER TABLE `parent_info`
  ADD PRIMARY KEY (`parentID`);

--
-- Indexes for table `patient_info`
--
ALTER TABLE `patient_info`
  ADD PRIMARY KEY (`mykid`);

--
-- Indexes for table `question_info`
--
ALTER TABLE `question_info`
  ADD PRIMARY KEY (`mykid`),
  ADD UNIQUE KEY `uniquenumber` (`num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question_info`
--
ALTER TABLE `question_info`
  MODIFY `num` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
