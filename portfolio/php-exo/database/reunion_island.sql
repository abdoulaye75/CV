-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2017 at 07:16 PM
-- Server version: 5.7.18-0ubuntu0.17.04.1
-- PHP Version: 7.0.18-0ubuntu0.17.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reunion_island`
--

-- --------------------------------------------------------

--
-- Table structure for table `hiking`
--

CREATE TABLE `hiking` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `difficulty` enum('très facile','facile','moyen','difficile','très difficile') NOT NULL,
  `distance` int(11) NOT NULL COMMENT 'in km',
  `duration` time NOT NULL,
  `height_difference` int(6) NOT NULL COMMENT 'in m',
  `available` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hiking`
--

INSERT INTO `hiking` (`id`, `name`, `difficulty`, `distance`, `duration`, `height_difference`, `available`) VALUES
(14, 'Piton Béthoune', 'très difficile', 6, '04:00:00', 650, 'pluie'),
(15, 'Kerveguen', 'difficile', 19, '08:00:00', 1450, 'orage'),
(16, 'Sentier des Sources', 'facile', 6, '01:15:00', 300, 'éboulements'),
(17, 'Dimitile', 'difficile', 25, '10:00:00', 1550, 'forte chaleur'),
(18, 'Palmiste Rouge', 'moyen', 17, '05:50:00', 1000, 'neige');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `mdp`) VALUES
(1, 'jean', 'paris18'),
(2, 'rudy', 'paris75'),
(3, 'marc', 'marco'),
(4, 'pauline', 'polo'),
(7, 'abdoulaye', 'paris75018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hiking`
--
ALTER TABLE `hiking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hiking`
--
ALTER TABLE `hiking`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
