-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2020 at 02:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tietokannat`
--

-- --------------------------------------------------------

--
-- Table structure for table `h6_osallistujat`
--

CREATE TABLE `h6_osallistujat` (
  `osallistujaID` int(11) NOT NULL,
  `etunimi` varchar(50) NOT NULL,
  `sukunimi` varchar(50) NOT NULL,
  `paikkakunta` varchar(50) NOT NULL,
  `tapahtumaID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `h6_osallistujat`
--

INSERT INTO `h6_osallistujat` (`osallistujaID`, `etunimi`, `sukunimi`, `paikkakunta`, `tapahtumaID`) VALUES
(1, 'Aku', 'Ankka', 'Tampere', 2),
(8, 'Samu', 'Sirkka', 'Helsinki', 2),
(9, 'Jaska', 'Jokunen', 'Janakkala', 2),
(10, 'Roope', 'Ankka', 'Akaa', 2),
(11, 'Garri', 'Gasparov', 'Moskova', 3),
(12, 'Magnus', 'Carlsen', 'Oslo', 3),
(13, 'Nybäck', 'Tomi', 'Helsinki', 3);

-- --------------------------------------------------------

--
-- Table structure for table `h6_tapahtumat`
--

CREATE TABLE `h6_tapahtumat` (
  `tapahtumaID` int(11) NOT NULL,
  `nimi` varchar(50) NOT NULL,
  `paivays` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `h6_tapahtumat`
--

INSERT INTO `h6_tapahtumat` (`tapahtumaID`, `nimi`, `paivays`) VALUES
(1, 'Kevätjuhla', '2020-05-30'),
(2, 'Lan-tapahtuma 2020', '2020-03-21'),
(3, 'Vappu', '2020-05-01'),
(7, 'Testi 2', '2020-02-29'),
(8, 'Mennyt jo', '2020-01-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `h6_osallistujat`
--
ALTER TABLE `h6_osallistujat`
  ADD PRIMARY KEY (`osallistujaID`),
  ADD KEY `tapahtumaID` (`tapahtumaID`);

--
-- Indexes for table `h6_tapahtumat`
--
ALTER TABLE `h6_tapahtumat`
  ADD PRIMARY KEY (`tapahtumaID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `h6_osallistujat`
--
ALTER TABLE `h6_osallistujat`
  MODIFY `osallistujaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `h6_tapahtumat`
--
ALTER TABLE `h6_tapahtumat`
  MODIFY `tapahtumaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `h6_osallistujat`
--
ALTER TABLE `h6_osallistujat`
  ADD CONSTRAINT `h6_osallistujat_ibfk_1` FOREIGN KEY (`tapahtumaID`) REFERENCES `h6_tapahtumat` (`tapahtumaID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;