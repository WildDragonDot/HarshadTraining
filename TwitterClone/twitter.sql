-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2021 at 07:49 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twitter`
--

-- --------------------------------------------------------

--
-- Table structure for table `isfollowing`
--

CREATE TABLE `isfollowing` (
  `id` int(11) NOT NULL,
  `follower` int(11) NOT NULL,
  `isFollowing` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `isfollowing`
--

INSERT INTO `isfollowing` (`id`, `follower`, `isFollowing`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tweets`
--

CREATE TABLE `tweets` (
  `id` int(11) NOT NULL,
  `tweet` text NOT NULL,
  `userid` int(11) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tweets`
--

INSERT INTO `tweets` (`id`, `tweet`, `userid`, `datetime`) VALUES
(1, 'hiee first tweet', 1, '2021-10-28 10:18:17'),
(2, 'Hi My name is sagar', 2, '2021-10-28 10:38:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'vivek@gmail.com', '6011527690eddca23580955c216b1fd2'),
(2, 'sagar@gmail.com', '430da3c041d48ed640348e4f5408fe7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `isfollowing`
--
ALTER TABLE `isfollowing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tweets`
--
ALTER TABLE `tweets`
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
-- AUTO_INCREMENT for table `isfollowing`
--
ALTER TABLE `isfollowing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tweets`
--
ALTER TABLE `tweets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
