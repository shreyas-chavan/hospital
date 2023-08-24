-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2023 at 07:33 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `allowance`
--

CREATE TABLE `allowance` (
  `Idno` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Pf` bigint(20) NOT NULL,
  `Da` bigint(20) NOT NULL,
  `Hra` bigint(20) NOT NULL,
  `Ta` bigint(20) NOT NULL,
  `Ga` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ambulance`
--

CREATE TABLE `ambulance` (
  `Amno` int(11) NOT NULL,
  `Typ` varchar(100) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `Stime` datetime NOT NULL,
  `Rtime` datetime NOT NULL,
  `Pdexp` int(11) NOT NULL,
  `Stentry` bigint(20) NOT NULL,
  `Rtentry` bigint(20) NOT NULL,
  `Drivername` varchar(50) NOT NULL,
  `driverno` bigint(20) NOT NULL,
  `Num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inpatient`
--

CREATE TABLE `inpatient` (
  `Mrdno` bigint(20) NOT NULL,
  `Hno` bigint(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Age` int(11) NOT NULL,
  `Addr` varchar(120) NOT NULL,
  `Dob` date NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `State` varchar(54) NOT NULL,
  `District` varchar(100) NOT NULL,
  `Concession` varchar(100) NOT NULL,
  `Referal` varchar(100) NOT NULL,
  `Dateofadmit` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inpatient`
--

INSERT INTO `inpatient` (`Mrdno`, `Hno`, `Name`, `Age`, `Addr`, `Dob`, `Gender`, `State`, `District`, `Concession`, `Referal`, `Dateofadmit`) VALUES
(1, 1, 'shreyas', 20, 'mumbai', '2022-02-01', 'Male', 'Maharashtra', 'asdsad', 'asd', 'asd', '2022-05-17 18:30:00'),
(2, 2, 'Yash', 20, 'mumbai', '2022-06-03', 'Male', 'Maharashtra', 'mumbai', 'no', 'yes', '2022-10-11 18:30:00'),
(3, 3, 'Rahul', 20, 'mumbai', '2022-04-05', 'Male', 'Maharashtra', 'mumbai', 'no', 'yes', '2022-09-12 18:30:00'),
(4, 4, 'saif', 20, 'mumbai', '2022-01-04', 'Male', 'Maharashtra', 'mumbai', 'no', 'yes', '2022-07-18 18:30:00'),
(5, 5, 'parth', 20, 'mumbai', '2021-10-04', 'Male', 'Maharashtra', 'mumbai', 'no', 'yes', '2022-07-05 18:30:00'),
(6, 6, 'adwait', 20, 'mumbai', '2021-09-09', 'Male', 'Maharashtra', 'mumbai', 'no', 'yes', '2022-07-28 18:30:00'),
(7, 7, 'Harshal Jain', 21, 'Akola', '2002-10-30', 'Male', 'Maharashtra', 'Akola', 'nil', 'nil', '2023-07-28 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `inpatientbill`
--

CREATE TABLE `inpatientbill` (
  `Bno` int(11) NOT NULL,
  `Hno` int(11) NOT NULL,
  `Mrdno` int(11) NOT NULL,
  `PName` varchar(100) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Rrent` bigint(20) NOT NULL,
  `Lab` bigint(20) NOT NULL,
  `Ad` date NOT NULL,
  `Dd` date NOT NULL,
  `Amount` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inpatientbill`
--

INSERT INTO `inpatientbill` (`Bno`, `Hno`, `Mrdno`, `PName`, `Department`, `Date`, `Rrent`, `Lab`, `Ad`, `Dd`, `Amount`) VALUES
(1, 1, 1, 'ad', 'asd', '2022-12-08', 1, 1, '2022-11-23', '2022-12-10', 1222),
(2, 1, 1, 'shreyas', 'asd', '2022-10-19', 1000, 1000, '2022-11-23', '2022-11-25', 3000),
(3, 1, 1, 'shreyas', 'asd', '2022-10-19', 1000, 1000, '2022-11-23', '2022-11-25', 3000),
(4, 1, 1, 'shreyas', 'asd', '2022-10-19', 1000, 1000, '2022-11-23', '2022-11-25', 3000),
(5, 1, 1, 'shreyas', 'asd', '2022-10-19', 1000, 1000, '2022-11-23', '2022-11-25', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `outpatient`
--

CREATE TABLE `outpatient` (
  `Hno` bigint(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Age` int(11) NOT NULL,
  `Addr` varchar(120) NOT NULL,
  `Dob` date NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `State` varchar(54) NOT NULL,
  `District` varchar(100) NOT NULL,
  `Concession` varchar(100) NOT NULL,
  `Referal` varchar(100) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `outpatient`
--

INSERT INTO `outpatient` (`Hno`, `Name`, `Age`, `Addr`, `Dob`, `Gender`, `State`, `District`, `Concession`, `Referal`, `Date`) VALUES
(1, 'shreyas', 20, 'mumbai', '2022-08-09', 'Male', 'Maharashtra', 'asdsad', 'asd', 'asd', '2022-10-09 18:30:00'),
(2, 'shreyas', 20, 'mumbai', '2022-08-09', 'Male', 'Maharashtra', 'asdsad', 'asd', 'asd', '2022-10-09 18:30:00'),
(3, 'shreyas', 20, 'mumbai', '2022-08-09', 'Male', 'Maharashtra', 'asdsad', 'asd', 'asd', '2022-10-09 18:30:00'),
(4, 'Rahul', 20, 'mumbai', '2022-08-09', 'Male', 'Maharashtra', 'mumbai', 'no', 'yes', '2023-01-10 18:30:00'),
(5, 'Yash', 20, 'mumbai', '2022-07-05', 'Male', 'Maharashtra', 'mumbai', 'no', 'yes', '2022-12-18 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `outpatientbill`
--

CREATE TABLE `outpatientbill` (
  `Bno` int(11) NOT NULL,
  `Hno` int(11) NOT NULL,
  `PName` varchar(100) NOT NULL,
  `Docname` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `outpatientbill`
--

INSERT INTO `outpatientbill` (`Bno`, `Hno`, `PName`, `Docname`, `Date`, `Amount`) VALUES
(1, 1, 'as', 'adasd', '2022-12-14', 123131),
(2, 1, 'shreyas', 'adasd', '2022-12-08', 1000),
(3, 1, 'shreyas', 'adasd', '2022-12-08', 1000),
(4, 1, 'shreyas', 'adasd', '2022-12-08', 1000),
(5, 1, 'shreyas', 'adasd', '2022-12-08', 1000),
(6, 1, 'shreyas', 'adasd', '2022-12-08', 1000),
(7, 1, 'shreyas', 'adasd', '2022-12-08', 1000),
(8, 1, 'shreyas', 'adasd', '2022-12-08', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `Idno` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `DOJ` date NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Dt` date NOT NULL,
  `Sperday` bigint(20) NOT NULL,
  `Odpay` bigint(20) NOT NULL,
  `Salary` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Idno` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `DOJ` date NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Addr` varchar(120) NOT NULL,
  `Salary` int(11) NOT NULL,
  `Dtc` date NOT NULL,
  `Reason` varchar(300) NOT NULL,
  `Age` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(90) NOT NULL,
  `cell` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Idno`, `Name`, `Department`, `DOJ`, `Gender`, `Addr`, `Salary`, `Dtc`, `Reason`, `Age`, `Email`, `Phone`, `cell`) VALUES
(1, 'shreyas', 'asd', '2022-08-30', 'Male', 'mumbai', 10000, '2022-10-17', 'adda', 20, 'asdadasd', '', '12311'),
(2, 'shreyas', 'asd', '2022-09-02', 'Male', 'mumbai', 3, '2022-12-14', 'adda', 20, 'asdadasd', '', '12311'),
(3, 'shreyas', 'asd', '2022-08-30', 'Male', 'mumbai', 10000, '2022-10-17', 'adda', 20, 'asdadasd', '', '12311'),
(4, 'shreyas', 'asd', '2022-08-30', 'Male', 'mumbai', 10000, '2022-10-17', 'adda', 20, 'asdadasd', '', '12311'),
(5, 'shreyas', 'asd', '2022-08-30', 'Male', 'mumbai', 10000, '2022-10-17', 'adda', 20, 'asdadasd', '', '12311'),
(6, 'shreyas', 'asd', '2022-08-30', 'Male', 'mumbai', 10000, '2022-10-17', 'adda', 20, 'asdadasd', '', '12311');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('shreyas', 'shreyas');

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE `ward` (
  `Mrdno` int(11) NOT NULL,
  `Hno` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Wardno` int(11) NOT NULL,
  `Rtype` varchar(100) NOT NULL,
  `Bno` int(11) NOT NULL,
  `Ad` date NOT NULL,
  `Dd` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allowance`
--
ALTER TABLE `allowance`
  ADD PRIMARY KEY (`Idno`);

--
-- Indexes for table `ambulance`
--
ALTER TABLE `ambulance`
  ADD PRIMARY KEY (`Amno`);

--
-- Indexes for table `inpatient`
--
ALTER TABLE `inpatient`
  ADD PRIMARY KEY (`Mrdno`);

--
-- Indexes for table `inpatientbill`
--
ALTER TABLE `inpatientbill`
  ADD PRIMARY KEY (`Bno`);

--
-- Indexes for table `outpatient`
--
ALTER TABLE `outpatient`
  ADD PRIMARY KEY (`Hno`);

--
-- Indexes for table `outpatientbill`
--
ALTER TABLE `outpatientbill`
  ADD PRIMARY KEY (`Bno`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`Idno`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Idno`);

--
-- Indexes for table `ward`
--
ALTER TABLE `ward`
  ADD PRIMARY KEY (`Mrdno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
