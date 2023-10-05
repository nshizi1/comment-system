-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2023 at 01:53 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `systemsos`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentId` int(11) NOT NULL,
  `comment` text DEFAULT NULL,
  `dateCommented` date DEFAULT current_timestamp(),
  `nameId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentId`, `comment`, `dateCommented`, `nameId`) VALUES
(1, 'Nice Picture', '2023-10-03', NULL),
(2, 'Nice Picture', '2023-10-03', NULL),
(3, 'Nice Picture', '2023-10-03', NULL),
(4, 'Looking Good', '2023-10-03', NULL),
(5, 'Looking Good', '2023-10-03', 2),
(6, 'Wow', '2023-10-03', 2),
(7, 'Call her Hugette!!', '2023-10-03', 2),
(8, 'Call her Elsie', '2023-10-03', 1),
(9, 'Wow Tona!', '2023-10-03', 1),
(10, 'Wow Tona!', '2023-10-03', 1),
(11, 'Wow Tona!', '2023-10-03', 1),
(12, 'Nice Looking Hair', '2023-10-03', 1),
(13, 'Nice Looking Hair', '2023-10-03', 1),
(14, 'Well looking Tona', '2023-10-03', 1),
(15, 'Well looking Tona', '2023-10-03', 1),
(16, 'NIce Eyes', '2023-10-03', 2),
(17, 'NIce Eyes', '2023-10-03', 2),
(18, 'Nice Picture', '2023-10-03', 2),
(19, 'Nice Picture', '2023-10-03', 2),
(20, 'This na be Tona', '2023-10-03', 1),
(21, 'This na be Tona', '2023-10-03', 1),
(22, 'This na be Tona', '2023-10-03', 1),
(23, 'This na be Tona', '2023-10-03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `names`
--

CREATE TABLE `names` (
  `nameId` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `names`
--

INSERT INTO `names` (`nameId`, `name`) VALUES
(1, 'Tona Elsie'),
(2, 'lorem ipsum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentId`),
  ADD KEY `nameId` (`nameId`);

--
-- Indexes for table `names`
--
ALTER TABLE `names`
  ADD PRIMARY KEY (`nameId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `names`
--
ALTER TABLE `names`
  MODIFY `nameId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`nameId`) REFERENCES `names` (`nameId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
