-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13.01.2020 klo 10:46
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
-- Database: `phpschema`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `players`
--

CREATE TABLE `players` (
  `id` int(10) NOT NULL,
  `account_name` varchar(30) COLLATE utf8_swedish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `last_login` date NOT NULL,
  `online` tinyint(1) NOT NULL,
  `money` decimal(10,0) NOT NULL,
  `current_character` varchar(15) COLLATE utf8_swedish_ci NOT NULL,
  `banned` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Vedos taulusta `players`
--

INSERT INTO `players` (`id`, `account_name`, `password`, `email`, `last_login`, `online`, `money`, `current_character`, `banned`) VALUES
(123, 'biglad', '23ffdsf', 'nibba@gmail.com', '2019-11-11', 0, '1222', 'orc', 0),
(3, 'lad', 'sdffsdf', 'oof@hotmail.ru', '2019-08-21', 0, '12', 'Fairy', 1),
(20, 'Lauri', 'hsdgbvverws', 'bruhmomento@yandex.ru', '2020-01-12', 1, '3545', 'Berserk', 0),
(12, 'yikes', '342rgfv', 'oof@hotmail.br', '2020-01-02', 0, '1223', 'Warrior', 1),
(1, 'yoink', 'sdfdfsfsd', 'bigoof@fbi.com', '2020-01-14', 1, '5334', 'Stealth', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
