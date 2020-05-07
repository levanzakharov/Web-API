-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2020 at 11:58 PM
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
-- Database: `homework2`
--

-- --------------------------------------------------------

--
-- Table structure for table `kitxvebi`
--

CREATE TABLE `kitxvebi` (
  `Id` int(100) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `CorrectAns` varchar(100) NOT NULL,
  `WrongAns` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kitxvebi`
--

INSERT INTO `kitxvebi` (`Id`, `Question`, `CorrectAns`, `WrongAns`) VALUES
(1, '2+2', '4', '5'),
(2, '5-4', '1', '0'),
(4, '6/2', '3', '2'),
(5, '10+21', '31', '32'),
(6, '4*4', '16', '8'),
(7, '3*2-1', '5', '4'),
(8, '4*3-2', '10', '11'),
(9, '3+3+4', '10', '12'),
(10, '3-1-3+2', '1', '2'),
(11, '32/2', '16', '14'),
(12, '32-20', '12', '22'),
(13, '3+3+2+1', '9', '8'),
(14, '9-3+12', '18', '19'),
(15, '21/3', '7', '6'),
(16, '34/2+1', '18', '17');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `Id` int(11) NOT NULL,
  `TestStart` datetime NOT NULL,
  `TestEnd` datetime NOT NULL,
  `TestDuration` varchar(100) NOT NULL,
  `Score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`Id`, `TestStart`, `TestEnd`, `TestDuration`, `Score`) VALUES
(1, '2020-05-06 23:53:28', '2020-05-07 01:53:34', '0:6 Minute', 3),
(2, '2020-05-06 23:55:48', '2020-05-07 01:55:50', '0:2 Minute', 2),
(3, '2020-05-06 23:55:53', '2020-05-07 01:55:54', '0:1 Minute', 5),
(4, '2020-05-06 23:55:59', '2020-05-07 01:56:00', '0:1 Minute', 5),
(5, '2020-05-06 23:56:04', '2020-05-07 01:56:05', '0:1 Minute', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kitxvebi`
--
ALTER TABLE `kitxvebi`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kitxvebi`
--
ALTER TABLE `kitxvebi`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
