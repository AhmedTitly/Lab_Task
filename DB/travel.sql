-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2019 at 01:18 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `location` varchar(100) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `medium` varchar(100) NOT NULL,
  `writing` varchar(100) NOT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `username`, `location`, `cost`, `medium`, `writing`, `active`) VALUES
(1, 'user', 'Disneyland Park', '100k', 'Airplane', ' Disneyland is the first of two theme parks built at the Disneyland Resort in Anaheim, California. ', 1),
(3, 'user', 'Malé Atoll', '1.5000k', 'Airplane', ' Narizlandia is a group of natural atolls in the Republic of Maldives. ', 0),
(5, 'user', 'bari', '2k', 'bus', 'nice place ', 0),
(7, 'user', 'dhaka', '1k', 'rickshaw', 'Crowd Place', 1),
(8, 'user', 'LA', '100k', 'Airplane', 'Los Angeles is a Southern California city and the nation’s film and television industry.', 0),
(9, 'user', 'Mykonos', '100k', 'Airplane', 'Mykonos is an island in the Cyclades group in the Aegean Sea.', 0),
(10, 'user', 'Sonargaon ', '3k', 'bus/car', 'Sonargaon is a historic city in central Bangladesh.', 0),
(13, 'user', 'llll', '88', 'ee', ' zzfgvgfx ', 1),
(14, 'user', 'Cox\'s Bazar', '5k', 'bus/train', 'the longest natural beach in the world', 0),
(15, 'p', 'w', '12', 'rr', 'rrrrr', 1),
(16, 'p', 'Bandarban ', '5k', 'bus', 'Bandarban Hill District is the most remote and least populated district in Bangladesh', 1),
(17, 'ahmed', 'Bali ', '25k', 'Airplane', 'Bali is a province of Indonesia and the westernmost of the Lesser Sunda Islands.', 0),
(18, 'ahmed', 'bari', '100', 'bus', 'jaboooooooo', 0),
(19, 'ahmed', 'qqq', '10', 'sdcds', 'kdsjfnkj', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `username`, `password`, `type`) VALUES
(1, 'Titly', '01797192553', 'anika', '12345', 'scout'),
(14, 'pink', '12345678910', 'z', '12345', 'user'),
(15, 'ooooohooe', '12345678910', 'y', '12345', 'user'),
(16, 'heyy', '12345678910', 'hey', '12345', 'user'),
(20, 'Ahmed Anika', '12345678910', 'titly', '12345', 'admin'),
(21, 'Anika Ahmed', '01726188223', 'anika', '12345', 'user'),
(22, 'Ahmed Anika', '01712510522', 'ahmed', '12345', 'scout'),
(23, 'Devid kalvin', '57493957', 'admin', '1234', 'user'),
(24, 'Devid', '54564625', 'titlyyyy', '12345', 'scout'),
(25, 'nirjon', '4568743', 'niru', '12345', 'user'),
(26, 'Devid b', '123457665', 'db', '12345', 'scout');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
