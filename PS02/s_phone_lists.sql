-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2021 at 01:32 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_phonebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `s_phone_lists`
--

CREATE TABLE `s_phone_lists` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Mobile` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s_phone_lists`
--

INSERT INTO `s_phone_lists` (`ID`, `Name`, `Phone`, `Mobile`) VALUES
(1, 'hello', '123', '1234567890'),
(2, 'Nasser', '0567942211', 'iphone');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `s_phone_lists`
--
ALTER TABLE `s_phone_lists`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `s_phone_lists`
--
ALTER TABLE `s_phone_lists`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
