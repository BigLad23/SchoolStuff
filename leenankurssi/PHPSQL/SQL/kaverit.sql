-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07.01.2020 klo 13:03
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
-- Database: `bruh`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `kaverit`
--

CREATE TABLE `kaverit` (
  `ID` varchar(10) NOT NULL,
  `Lempinimi` varchar(15) NOT NULL,
  `Etunimi` varchar(15) NOT NULL,
  `Sukunimi` varchar(25) NOT NULL,
  `Syntymäpäivä` date DEFAULT NULL,
  `Puhelinnumero` varchar(17) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Lähiosote` varchar(45) NOT NULL,
  `Postinumero` varchar(5) NOT NULL,
  `Postitoimipaikka` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `kaverit`
--

INSERT INTO `kaverit` (`ID`, `Lempinimi`, `Etunimi`, `Sukunimi`, `Syntymäpäivä`, `Puhelinnumero`, `Email`, `Lähiosote`, `Postinumero`, `Postitoimipaikka`) VALUES
('2', 'Thanos', 'purple', 'lad', '3000-01-30', '0405854834', 'bigladthanos@gmail.rom', 'hämeenkatu 74', '11111', 'berlin'),
('3', 'Yobama', 'Barack', 'yoda', '9999-04-12', '0405821323', 'yobama@hotmail.as', 'wall street', '34323', 'mars');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kaverit`
--
ALTER TABLE `kaverit`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
