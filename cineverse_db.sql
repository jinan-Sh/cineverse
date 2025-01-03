-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2024 at 09:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cineverse_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingtable`
--

CREATE TABLE `bookingtable` (
  `bookingID` int(11) NOT NULL,
  `movieID` int(11) DEFAULT NULL,
  `bookingTheatre` varchar(100) NOT NULL,
  `bookingType` varchar(100) DEFAULT NULL,
  `bookingDate` varchar(50) NOT NULL,
  `bookingTime` varchar(50) NOT NULL,
  `bookingFName` varchar(100) NOT NULL,
  `bookingLName` varchar(100) DEFAULT NULL,
  `bookingPNumber` varchar(12) NOT NULL,
  `bookingEmail` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `ORDERID` varchar(255) NOT NULL,
  `DATE-TIME` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacktable`
--

CREATE TABLE `feedbacktable` (
  `msgID` int(12) NOT NULL,
  `senderfName` varchar(50) NOT NULL,
  `senderlName` varchar(50) DEFAULT NULL,
  `sendereMail` varchar(100) NOT NULL,
  `senderfeedback` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `feedbacktable`
--

INSERT INTO `feedbacktable` (`msgID`, `senderfName`, `senderlName`, `sendereMail`, `senderfeedback`) VALUES
(5, 'Jinan', 'Shhadeh', 'k', 'll'),
(6, 'Jinan', 'Shhadeh', 'jhh', 'hhhh'),
(7, 'Jinan', 'Shhadeh', 'jhh', 'hhhh'),
(8, 'Jinan', 'Shhadeh', 'jhh', 'hhhh'),
(9, 'Jinan', 'Shhadeh', 'jhh', 'hhhh'),
(10, 'Jinan', 'Shhadeh', 'jhh', 'hhhh'),
(11, 'Jinan', 'Shhadeh', 'KKL', 'FS'),
(12, 'Jinan', 'Shhadeh', 'KKL', 'FS'),
(13, '1234566', '23456', '3456gfvhb', 'nnbhb'),
(14, '1234566', '23456', '3456gfvhb', 'nnbhb'),
(15, '1234566', '23456', '3456gfvhb', 'nnbhb'),
(16, 'Jinan', 'Shhadeh', 'jinnn', 'male chef in cinemas photo'),
(17, 'Jinan', 'Shhadeh', 'jinnn', 'male chef in cinemas photo'),
(18, '///////', 'gg', 'ggggg', 'ff'),
(19, 'Jinan', 'Shhadeh', 'shhadehjinan@gmail.com', 'it was very nice thank you'),
(20, 'Jinan', 'Shhadeh', 'jhh', 'jinan'),
(21, 'Jinan', 'Shhadeh', 'jhh', 'jinan'),
(22, 'Jinan', 'Shhadeh', 'shhadehjinan@gmail.com', 'i loved it'),
(23, '/////', '09887', '778', 'ghbnjn'),
(24, 'Jinan', 'Shhadeh', 'shhadehjinan@gmail.com', 'it was amazing'),
(25, '857575y', 'ddddd', 'gg///', 'dddd'),
(26, '857575y', 'ddddd', 'gg///', 'dddd');

-- --------------------------------------------------------

--
-- Table structure for table `movietable`
--

CREATE TABLE `movietable` (
  `movieID` int(11) NOT NULL,
  `movieImg` varchar(150) NOT NULL,
  `movieTitle` varchar(100) NOT NULL,
  `movieGenre` varchar(50) NOT NULL,
  `movieDuration` int(11) NOT NULL,
  `movieRelDate` date NOT NULL,
  `movieDirector` varchar(50) NOT NULL,
  `movieActors` varchar(150) NOT NULL,
  `mainhall` int(11) NOT NULL,
  `viphall` int(11) NOT NULL,
  `privatehall` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `movietable`
--

INSERT INTO `movietable` (`movieID`, `movieImg`, `movieTitle`, `movieGenre`, `movieDuration`, `movieRelDate`, `movieDirector`, `movieActors`, `mainhall`, `viphall`, `privatehall`) VALUES
(1, 'movie-poster-1.jpg', 'Moana 2', 'Family,Adventure', 210, '0000-00-00', ' David G. Derrick Jr., Jason Hand, Dana Ledoux Mil', 'Auli\'i Cravalho, Dwayne Johnson, Hualalai Chung, Rose Matafeo.', 0, 0, 0),
(2, 'movie-poster-2.jpg', 'Smile 2', 'Horror,Mystery', 120, '0000-00-00', ' Parker Finn', 'Naomi Scott · Rosemarie DeWitt · Lukas Gage · Miles Gutierrez-Riley · Peter Jacobson · Ray Nicholson · Dylan Gelula · Raúl Castillo.\r\n', 0, 0, 0),
(3, 'movie-poster-3.jpg', 'El Hawa Sultan', 'Horror, Thriller , Mystery', 101, '2024-11-07', ' Heba Yousry', ' Menna Shalabi ,Ahmed Dawood,Ahmad Khaled Saleh', 0, 0, 0),
(4, 'movie-poster-4.jpg', 'Armor', 'action,drama', 105, '2024-11-18', 'Justin Routt', 'Sylvester Stallone and Jason Patric', 0, 0, 0),
(5, 'movie-poster-5.jpg', 'The Wild Robot', 'Family, adventure', 127, '2024-09-26', 'Chris Sanders', 'Jeff Hermann,Lupita Nyong\'o,Pedro Pascal ,Kit Connor ,Bill Nighy ,Stephanie Hsu ,Mark Hamill ,Catherine O\'Hara  ', 0, 0, 0),
(6, 'movie-poster-6.jpg', 'Red One', 'Action,Comedy', 120, '2024-10-23', ' Kelsey Mann', 'Dwayne Johnson,Callum Drift , Chris Evans, Jack O\'Malley,Lucy Liu ,Zoe ,J.K', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingtable`
--
ALTER TABLE `bookingtable`
  ADD PRIMARY KEY (`bookingID`),
  ADD UNIQUE KEY `bookingID` (`bookingID`),
  ADD KEY `foreign_key_movieID` (`movieID`),
  ADD KEY `foreign_key_ORDERID` (`ORDERID`);

--
-- Indexes for table `feedbacktable`
--
ALTER TABLE `feedbacktable`
  ADD PRIMARY KEY (`msgID`),
  ADD UNIQUE KEY `msgID` (`msgID`);

--
-- Indexes for table `movietable`
--
ALTER TABLE `movietable`
  ADD PRIMARY KEY (`movieID`),
  ADD UNIQUE KEY `movieID` (`movieID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingtable`
--
ALTER TABLE `bookingtable`
  MODIFY `bookingID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedbacktable`
--
ALTER TABLE `feedbacktable`
  MODIFY `msgID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `movietable`
--
ALTER TABLE `movietable`
  MODIFY `movieID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookingtable`
--
ALTER TABLE `bookingtable`
  ADD CONSTRAINT `foreign_key_movieID` FOREIGN KEY (`movieID`) REFERENCES `movietable` (`movieID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
