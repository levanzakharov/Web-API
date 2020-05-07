-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2020 at 08:43 AM
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
-- Database: `homework1`
--

-- --------------------------------------------------------

--
-- Table structure for table `dictionary`
--

CREATE TABLE `dictionary` (
  `Id` int(11) NOT NULL,
  `English` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Georgian` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dictionary`
--

INSERT INTO `dictionary` (`Id`, `English`, `Georgian`) VALUES
(1, 'Cat', 'კატა'),
(2, 'Computer', 'კომპიუტერი'),
(3, 'Pirate', 'მეკობრე'),
(4, 'Book', 'წიგნი'),
(5, 'Cow', 'ძროხა'),
(6, 'Life', 'სიცოცხლე'),
(7, 'Evening', 'საღამო'),
(8, 'Morning', 'დილა'),
(9, 'Dog', 'ძაღლი'),
(11, 'lantern', 'ფარანი '),
(12, 'lark', 'ტოროლა'),
(13, 'obtain', 'მიღება '),
(14, 'variety', 'მრავალფეროვნება '),
(15, 'warn', 'გაფრთხილება'),
(16, 'dance', 'ცეკვა'),
(17, 'dark', 'სიბნელე'),
(18, 'daze', 'გაოცება '),
(19, 'dean', 'დეკანი '),
(20, 'defeat', 'დამარცხება');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`Id`, `TestStart`, `TestEnd`, `TestDuration`, `Score`) VALUES
(1, '2020-04-02 08:39:00', '2020-04-02 10:39:29', '0:29 Minute', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dictionary`
--
ALTER TABLE `dictionary`
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
-- AUTO_INCREMENT for table `dictionary`
--
ALTER TABLE `dictionary`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
