-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 23, 2022 at 09:21 AM
-- Server version: 8.0.30
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `StupidRequests`
--

-- --------------------------------------------------------

--
-- Table structure for table `StupidData`
--

CREATE TABLE `StupidData` (
  `ID` int NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Subject` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Message` text COLLATE utf8mb4_general_ci NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `StupidData`
--

INSERT INTO `StupidData` (`ID`, `Name`, `Email`, `Subject`, `Message`, `Date`) VALUES
(2, 'swwsq', 'sw@gdss.com', 'asdw', 'asd', '2022-11-19'),
(10, 'thhdhb', 'efwq@anmeful.ty', 'sghdt', '34y5hftr5y6h', '2022-11-19'),
(12, 'fbdxgnfgn', 'efwq@anmeful.ty', 'bdfherywef', 'segwerhgerruhdetrhgdfhg', '2022-11-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `StupidData`
--
ALTER TABLE `StupidData`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `StupidData`
--
ALTER TABLE `StupidData`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
