-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2018 at 08:49 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `fr_user` varchar(30) NOT NULL,
  `to_user` varchar(30) NOT NULL,
  `msg` text NOT NULL,
  `date` date NOT NULL,
  `readn` tinyint(1) NOT NULL DEFAULT '0',
  `sub` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `fr_user`, `to_user`, `msg`, `date`, `readn`, `sub`) VALUES
(7, 'bob', '_aia', 'aGVsbG8gdGhlcmU=', '2018-10-08', 0, 'imp'),
(8, 'bob', '_aia', 'eWVzcyBpIGRvIGl0', '2018-10-08', 0, 'job'),
(9, 'bob', '_aia', 'eW91IGhhdmVub3Qgc3VibWl0IHlldA==', '2018-10-08', 0, 'edu'),
(10, 'bob', '_aia', 'c3Nzc3Nzc3Nzc3M=', '2018-10-08', 0, 'job'),
(11, 'bob', '_aia12', 'aGVsb28gdGhlcmU=', '2018-10-09', 0, 'edu'),
(12, '_aia', 'bob', 'V2UgY2FuIGRvIGl0', '2018-10-09', 0, 'imp');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(13, '_aia', 'aiaemad1000@hotmail.com', '$2y$10$YMAeIe79u1QXhPsrZ2htwOnmL0zJX7C4RfdQlKHkZhhYlBfhLp4mG'),
(14, '_ahmed', 'ahmed1000@gmail.com', '$2y$10$nrVSZ.xw7KJRVr.X/bQf/uItxQ4s/xH6PCVBML09UpN.2.gJnA6Dm'),
(15, '_aia12', 'aSDFGH@gmail.com', '$2y$10$p9B4MbjNKNblxL3uYS9fBe1isDktx//oRlxkRurDu8NoxdD.x6hA6'),
(16, 'bob', 'aSDFGH@gmail.com', '$2y$10$mNQkDWyJMBc9gJkU7n1hHum6nu2CIi6tu7MOvgIh9mAvbTjRSG/fq'),
(17, 'salma_s', 'salma1000@gmail.com', '$2y$10$F6z8srO1sMLEXYDK8454/.rrg2Y6bnZIadA5J8bU2pQuxutetPraq'),
(18, 'Ashraf', 'ashraf12@hotmail.com', '$2y$10$kWRZREPRfdhuf4qdz2rAFOooOVpWsWby7rvwrVWcWfNVPEhVGXDGu'),
(19, 'bassamm', 'aSDFGH@gmail.com', '$2y$10$4M6DzerC5cZeqyd.UG7i3e8howXLHShrphx7D8TEo0P3sRH61onK6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
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
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
