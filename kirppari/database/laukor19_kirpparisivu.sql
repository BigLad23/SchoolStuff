-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 16.09.2022 klo 12:36
-- Palvelimen versio: 8.0.30
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laukor19_kirpparisivu`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `fleemarket`
--

CREATE TABLE `fleemarket` (
  `marketid` int NOT NULL,
  `duration` decimal(10,0) NOT NULL,
  `startingtime` date NOT NULL,
  `enddate` date NOT NULL,
  `tables` int NOT NULL,
  `carslots` int NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `fleemarket`
--

INSERT INTO `fleemarket` (`marketid`, `duration`, `startingtime`, `enddate`, `tables`, `carslots`, `location`) VALUES
(1, '12', '2021-11-30', '2021-12-02', 3, 5, 'hepolamminkatu 10, tampere'),
(2, '2', '2022-03-01', '2022-03-02', 5, 5, 'hämeenkatu 21, tampere');

-- --------------------------------------------------------

--
-- Rakenne taululle `product`
--

CREATE TABLE `product` (
  `productid` int NOT NULL,
  `userid` int NOT NULL,
  `categoryid` int NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `imageurl` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `product`
--

INSERT INTO `product` (`productid`, `userid`, `categoryid`, `description`, `price`, `imageurl`) VALUES
(2, 11, 2, 'GTA: San andreas PS2', 8, 'https://www.konsolinet.fi/tuotekuvat/900x600/gtasanandreas.jpg'),
(9, 12, 2, 'STAR WARS: The Force Unleashed (Xbox 360)', 13, 'https://m.media-amazon.com/images/I/81JSKJc-vQL._SL1500_.jpg'),
(15, 12, 5, 'aku ankka taskukirja', 2, 'https://kauppa.kierratyskeskus.fi/storage/product_images/1/Vaivanpalkka-AkuAnkantaskukirja416_9789510358061_408f426aefcdede65b6026efe099e422_1.jpg'),
(22, 32, 1, 'Musta T-Paita', 12, 'https://img01.ztat.net/article/spp-media-p1/1022f8d53ed23afca3ccaca86d7df963/ffdffc2e7d20427fbe771ffebe2dea17.jpg?imwidth=762&filter=packshot');

-- --------------------------------------------------------

--
-- Rakenne taululle `productcategory`
--

CREATE TABLE `productcategory` (
  `categoryid` int NOT NULL,
  `categoryname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `productcategory`
--

INSERT INTO `productcategory` (`categoryid`, `categoryname`) VALUES
(1, 'clothes'),
(2, 'games'),
(5, 'books');

-- --------------------------------------------------------

--
-- Rakenne taululle `reservations`
--

CREATE TABLE `reservations` (
  `reservationid` int NOT NULL,
  `marketid` int NOT NULL,
  `userid` int NOT NULL,
  `type` varchar(11) NOT NULL,
  `slotnumber` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `reservations`
--

INSERT INTO `reservations` (`reservationid`, `marketid`, `userid`, `type`, `slotnumber`) VALUES
(44, 1, 28, 'blanket', 2),
(45, 1, 28, 'blanket', 12),
(46, 2, 28, 'blanket', 2),
(47, 2, 33, 'carslot', 4);

-- --------------------------------------------------------

--
-- Rakenne taululle `user`
--

CREATE TABLE `user` (
  `userid` int NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `username` varchar(50) NOT NULL,
  `salasana` varchar(255) NOT NULL,
  `isadmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `user`
--

INSERT INTO `user` (`userid`, `firstname`, `lastname`, `email`, `username`, `salasana`, `isadmin`) VALUES
(11, 'open', 'test', 'testi2@gmail.com', 'opetest', '$2y$10$vdztOcM1G2J6B75rdtomM.Dh.yaFBjxwfEdjCuW84fLmiflGmOa4u', 1),
(12, 'test', 'testt', 'tester1@gmail.com', 'hienokayttaja', '$2y$10$Y4WmFhwuc5lyBZTU3cCSMuv1AoV8Mg6VpyvrywK7xaOHwkVahH//i', 0),
(22, 'tester', 'tester22', 'tester222@gmail.com', 'hahatest22', '$2y$10$kGlN3mNhxIfOvZXT.nj8V.N6I1Kz6xs4w7dSIlIaVk.7rn22lIjIS', 1),
(28, '1111', '1111', '1111', '1111', '$2y$10$KS/dCmuJmhIFyg9.UrM8veO4ExmhnRGQ3gJY1Y9SIat/EY7cg4tV6', 0),
(31, 'default', 'user', 'defaultuser@gmail.com', 'testikäyttäjä', '$2y$10$aifEPjDVd.BY0l7xyGKFSujcsEVrvypRTjN4ipBv2qjnrrwjnHvNe', 0),
(32, 'test', 'user', 'tester2222@gmail.com', 'testiadmin', '$2y$10$eLzQWm0NNgSn46YEjaBe..SMrmUZES0AOJg.3QixkdH9LrGPo3MxS', 1),
(33, 'ope', 'testaa', 'testi@gmail.com', 'opetestaa', '$2y$10$BRXqHBmxZpirmNl0KzGe7ecyBdNKM71bC5GvsAM0FxH0M07hk56QS', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fleemarket`
--
ALTER TABLE `fleemarket`
  ADD PRIMARY KEY (`marketid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `categoryid` (`categoryid`);

--
-- Indexes for table `productcategory`
--
ALTER TABLE `productcategory`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservationid`),
  ADD KEY `marketid` (`marketid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fleemarket`
--
ALTER TABLE `fleemarket`
  MODIFY `marketid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `productcategory`
--
ALTER TABLE `productcategory`
  MODIFY `categoryid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservationid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Rajoitteet vedostauluille
--

--
-- Rajoitteet taululle `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`categoryid`) REFERENCES `productcategory` (`categoryid`);

--
-- Rajoitteet taululle `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`marketid`) REFERENCES `fleemarket` (`marketid`),
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
