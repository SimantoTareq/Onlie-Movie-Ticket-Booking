-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2021 at 04:43 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticketbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'emam', 'admin'),
(2, 'ruhul', 'admin'),
(3, 'tarek', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `orderarchive`
--

CREATE TABLE `orderarchive` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `movie` varchar(255) NOT NULL,
  `row` varchar(255) NOT NULL,
  `seat` varchar(255) NOT NULL,
  `dateorder` date NOT NULL,
  `timeShow` varchar(255) NOT NULL,
  `ticPrice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderarchive`
--

INSERT INTO `orderarchive` (`id`, `name`, `phone`, `email`, `movie`, `row`, `seat`, `dateorder`, `timeShow`, `ticPrice`) VALUES
(16, 'Ema', '01629801245', 'emamul@gmail.com', '', '1', 'C', '0000-00-00', '', '0'),
(15, 'Emnamul ', '01629831245', 'emamulha0@gmail.com', '', '5', 'C', '0000-00-00', '', '0'),
(14, 'Emamul ', '01629830159', 'emamulhassan0@gmail.com', '', '3', 'C', '0000-00-00', '', '0'),
(17, 'Abir', '01629830159', 'anir3@gmail.com', '', '4', 'B', '0000-00-00', '', '0'),
(8, 'Abir Hossain', '01452485125', 'abirhossain@gmail.com', '', '5', 'A', '0000-00-00', '', '0'),
(18, 'Emamul Has', '01629831219', 'emamulhassa@gmail.com', '', '1', 'C', '0000-00-00', '', '0'),
(24, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', '', 'sRow', '3', '2021-05-05', '', '0'),
(26, 'Emamul Hassa', '01629830159', 'emamulhassan420@gmail.com', '', 'C', '5', '2021-05-06', '', '0'),
(27, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', '', 'B', '4', '2021-05-03', '', '0'),
(29, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', '', 'A', '1', '2021-05-14', '', '0'),
(28, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', '', 'B', '4', '2021-05-10', '', '0'),
(30, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', '', 'A', '5', '2021-05-14', '', '0'),
(31, '', '', '', '', 'selectrow', 'selectseat', '1970-01-01', '', '0'),
(32, '', '', '', '', 'selectrow', 'selectseat', '1970-01-01', '', '0'),
(33, '', '', '', '', 'selectrow', 'selectseat', '1970-01-01', '', '0'),
(34, '', '', '', '', 'selectrow', 'selectseat', '1970-01-01', '', '0'),
(35, '', '', '', '', 'selectrow', 'selectseat', '1970-01-01', '', '0'),
(36, '', '', '', '', 'selectrow', 'selectseat', '1970-01-01', '', '0'),
(37, '', '', '', '', 'selectrow', 'selectseat', '1970-01-01', '', '0'),
(38, '', '', '', '', 'selectrow', 'selectseat', '1970-01-01', '', '0'),
(39, '', '', '', '', 'selectrow', 'selectseat', '1970-01-01', '', '0'),
(40, '', '', '', '', 'selectrow', 'selectseat', '1970-01-01', '', '0'),
(41, '', '', '', '', 'selectrow', 'selectseat', '1970-01-01', '', '0'),
(42, '', '', '', '', 'selectrow', 'selectseat', '1970-01-01', '', '0'),
(59, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', '', 'B', '3', '2021-05-15', '', '0'),
(58, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', '', 'B', '3', '2021-05-28', '', '0'),
(61, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', 'Mortal Combat', 'B', '3', '2021-05-16', '2.00pm', '0'),
(65, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', 'Mortal Combat', 'B', '2', '2021-05-16', '2.00pm', '0'),
(64, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', 'The Father', 'A', '2', '2021-05-16', '2.00pm', '0'),
(67, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', 'The Father', 'A', '2', '2021-05-25', '2.00pm', '300'),
(57, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', '', 'B', '1', '2021-05-28', '', ''),
(72, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', 'Mortal Combat', 'A', '4', '2021-05-16', '5.00pm', '500'),
(73, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', 'Minari', 'B', '4', '2021-05-20', '2.00pm', '300');

-- --------------------------------------------------------

--
-- Table structure for table `ticketpage`
--

CREATE TABLE `ticketpage` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `movie` varchar(255) NOT NULL,
  `row` varchar(255) NOT NULL,
  `seat` varchar(255) NOT NULL,
  `dateorder` date NOT NULL,
  `timeShow` varchar(255) NOT NULL,
  `ticPrice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticketpage`
--

INSERT INTO `ticketpage` (`id`, `name`, `phone`, `email`, `movie`, `row`, `seat`, `dateorder`, `timeShow`, `ticPrice`) VALUES
(1, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', '', 'D', '2', '0000-00-00', '', ''),
(7, 'Emamul Hassan', '01245862545', 'emamulhassan420@gmail.com', '', 'C', '3', '0000-00-00', '', ''),
(19, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', '', 'C', '1', '0000-00-00', '', ''),
(20, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', '', 'C', '1', '0000-00-00', '', ''),
(21, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', '', 'C', '1', '0000-00-00', '', ''),
(22, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', '', 'B', '4', '0000-00-00', '', ''),
(23, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', '', 'C', '1', '0000-00-00', '', ''),
(25, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', '', 'B', '4', '2021-04-27', '', ''),
(43, 'Emamul Hassan', '0162983', 'emamulhassan420@gmail.com', '', 'selectrow', 'selectseat', '1970-01-01', '', ''),
(44, '', '', '', '', 'selectrow', 'selectseat', '1970-01-01', '', ''),
(45, '', '', '', '', 'selectrow', 'selectseat', '1970-01-01', '', ''),
(46, 'Emamul Hassan', '0162983015', 'emamulhassan420@gmail.com', '', 'selectrow', 'selectseat', '1970-01-01', '', ''),
(47, 'Emamul Hassan', '01629830', 'emamulhassan420@gmail.com', '', 'selectrow', 'selectseat', '1970-01-01', '', ''),
(48, 'Emamul Hassan', '016298301', 'emamulhassan420@gmail.com', '', 'selectrow', 'selectseat', '1970-01-01', '', ''),
(49, '', '', '', '', 'selectrow', 'selectseat', '1970-01-01', '', ''),
(50, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', '', 'C', '5', '1970-01-01', '', ''),
(51, 'Emamul Hassan', '01629830152', 'emamulhassan420@gmail.com', '', 'B', '1', '1970-01-01', '', ''),
(52, 'Emamul Hassan', '01629830151', 'emamulhassan420@gmail.com', '', 'C', '4', '1970-01-01', '', ''),
(53, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', '', 'B', '3', '2021-05-15', '', ''),
(54, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', '', 'C', '4', '2021-05-14', '', ''),
(55, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', '', 'A', '3', '2021-05-08', '', ''),
(56, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', '', 'C', '5', '2021-05-15', '', ''),
(62, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', 'Mortal Combat', 'A', '1', '2021-05-18', '5.00pm', ''),
(63, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', 'The Father', 'A', '2', '2021-05-16', '2.00pm', '500'),
(66, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', 'The Father', 'A', '2', '2021-05-25', '2.00pm', '500'),
(68, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', 'The Father', 'B', '1', '2021-05-16', '2.00pm', '500'),
(69, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', 'The Father', 'B', '1', '2021-05-16', '2.00pm', '500'),
(70, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', 'The Father', 'B', '1', '2021-05-16', '2.00pm', '500'),
(71, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', 'The Father', 'B', '3', '2021-05-20', '5.00pm', '500'),
(74, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', 'Mortal Combat', 'E', '5', '2021-05-22', '10.00am', '300');

-- --------------------------------------------------------

--
-- Table structure for table `usersignup`
--

CREATE TABLE `usersignup` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usersignup`
--

INSERT INTO `usersignup` (`id`, `username`, `email`, `password`) VALUES
(1, '', 'emamulhassan420@gmail.com', 'abc123'),
(2, '', 'emamulhassan422@gmail.com', 'abc'),
(3, 'Emam_420', 'emamulhassan422@gmail.com', 'abc'),
(4, 'abir', 'abirhossain@gmail.com', 'abcd'),
(5, 'ruhul', 'ruhul@mail.com', 'abcde'),
(6, 'emam_422', 'emamulhassan422@gmail.com', 'abc'),
(7, 'emam_4', 'emamulhassan4@gmail.com', 'abcd'),
(8, 'emam_420', 'emamulhassan420@gmail.com', 'abcd'),
(9, 'Emam_421', 'emamulhassan421@gmail.com', 'abc123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticketpage`
--
ALTER TABLE `ticketpage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usersignup`
--
ALTER TABLE `usersignup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ticketpage`
--
ALTER TABLE `ticketpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `usersignup`
--
ALTER TABLE `usersignup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
