-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: magnesium:3306
-- Generation Time: 09.10.2020 klo 10:45
-- Palvelimen versio: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laurikoro`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `esitys`
--

CREATE TABLE IF NOT EXISTS `esitys` (
  `esitysID` int(11) NOT NULL AUTO_INCREMENT,
  `nimi` varchar(255) NOT NULL,
  `esityspaikka` varchar(50) NOT NULL,
  `kaupunki` varchar(50) NOT NULL,
  `pvm` date NOT NULL,
  `paikat` int(11) NOT NULL,
  `vapaitapaikkoja` int(11) NOT NULL,
  PRIMARY KEY (`esitysID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Vedos taulusta `esitys`
--

INSERT INTO `esitys` (`esitysID`, `nimi`, `esityspaikka`, `kaupunki`, `pvm`, `paikat`, `vapaitapaikkoja`) VALUES
(1, 'Sorin-sirkus', 'Sorin aukio', 'Tampere', '2021-11-19', 100, 100),
(2, 'Zombie-juhla', 'Särkänniemi', 'Tampere', '2021-10-20', 100, 90);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
