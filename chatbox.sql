-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 08:11 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `messageId` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `chatMessage` text NOT NULL,
  `timestampp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`messageId`, `user`, `chatMessage`, `timestampp`) VALUES
(1, ' Asif ', ' hey ', ' 14/12/2018 12:12:36 '),
(2, ' Mujeeb ', ' hey mujeeb here ', ' 14/12/2018 12:12:49 '),
(3, ' Asif ', ' whats hapening bro ', ' 14/12/2018 12:12:06 '),
(4, ' Asif ', ' whats hapening bro ', ' 14/12/2018 12:12:07 '),
(5, ' Mujeeb ', ' i want mysql tutorials ', ' 14/12/2018 12:12:33 '),
(6, ' Mujeeb ', ' 3rd seesmter finish khadim ', ' 14/12/2018 12:12:22 '),
(7, ' Ali ', ' axha ', ' 14/12/2018 12:12:57 '),
(8, ' Mujeeb ', '  hyj ', ' 14/12/2018 02:12:17 '),
(9, ' khalid ', ' hyj23bgnfb ', ' 14/12/2018 02:12:49 ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`messageId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `messageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
