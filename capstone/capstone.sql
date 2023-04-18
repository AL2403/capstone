-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2023 at 03:21 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

CREATE TABLE `residents` (
  `FirstName` varchar(50) NOT NULL,
  `MiddleName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `Birthday` date NOT NULL,
  `Phone` int(11) NOT NULL,
  `Purok` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`FirstName`, `MiddleName`, `LastName`, `Gender`, `Birthday`, `Phone`, `Purok`) VALUES
('aldrin', 'ileto', 'dela', 'Male', '2222-12-22', 12, 3),
('asd', 'sdf', 'dfg', 'Male', '1221-12-12', 13, 2),
('aldrin', 'ileto', 'dela', 'Male', '2004-04-24', 34234, 1);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `FirstNameSign` varchar(100) NOT NULL,
  `MiddleNameSign` varchar(100) NOT NULL,
  `LastNameSign` varchar(100) NOT NULL,
  `GenderSign` varchar(10) NOT NULL,
  `BirthdaySign` date NOT NULL,
  `PhoneSign` int(11) NOT NULL,
  `PositionSign` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`FirstNameSign`, `MiddleNameSign`, `LastNameSign`, `GenderSign`, `BirthdaySign`, `PhoneSign`, `PositionSign`) VALUES
('bobik', 'asd', 'dsf', 'Male', '1111-11-11', 111, 'captain'),
('asd', 'dfs', 'fgd', 'Male', '2212-12-12', 123, 'captain'),
('asd', 'dfs', 'cr', 'Male', '1111-12-12', 12311, 'secretary');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `residents`
--
ALTER TABLE `residents`
  ADD PRIMARY KEY (`Phone`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`PhoneSign`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
