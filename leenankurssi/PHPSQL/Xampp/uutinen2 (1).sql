-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24.01.2020 klo 08:20
-- Palvelimen versio: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uutinen`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `uutinen2`
--

CREATE TABLE `uutinen2` (
  `Otsikko` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `Sisalto` text COLLATE utf8_swedish_ci NOT NULL,
  `Kirjoituspvm` date DEFAULT NULL,
  `Poistamispvm` date DEFAULT NULL,
  `Kirjoittaja` varchar(50) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Vedos taulusta `uutinen2`
--

INSERT INTO `uutinen2` (`Otsikko`, `Sisalto`, `Kirjoituspvm`, `Poistamispvm`, `Kirjoittaja`) VALUES
('bruh dsfsd', 'ujhmujhj', '2020-01-02', '2020-01-22', 'trump\'s dad'),
('bruh momento numero dos trump', 'trump said we gonna nuke these lads in iran', '2019-12-18', '2020-01-31', 'trump\'s dad'),
('trump 1v1 with obama', 'bruh', '2020-01-01', '2020-01-30', 'trump\'s dad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uutinen2`
--
ALTER TABLE `uutinen2`
  ADD PRIMARY KEY (`Otsikko`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
