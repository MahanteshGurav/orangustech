-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 20, 2017 at 11:38 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Orangus`
--

-- --------------------------------------------------------

--
-- Table structure for table `Login`
--

CREATE TABLE `Login` (
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Login`
--

INSERT INTO `Login` (`username`, `password`) VALUES
('admin', 'admin'),
('Sushil', 'Sushil'),
('Mahantesh', 'Mahantesh');

-- --------------------------------------------------------

--
-- Table structure for table `Request`
--

CREATE TABLE `Request` (
  `ID` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` decimal(10,0) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Request`
--

INSERT INTO `Request` (`ID`, `date`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(8, '0000-00-00 00:00:00', 'abc', 'monty@gmail.com', '1234567890', 'test', 'tesstt'),
(9, '0000-00-00 00:00:00', 'abc', 'monty@gmail.com', '1234567890', 'test', '9'),
(10, '0000-00-00 00:00:00', 'w', 'monty@gmail.com', '1234567890', 'test', '10'),
(11, '0000-00-00 00:00:00', 's', 'monty@gmail.com', '1234567890', 'g', 'm'),
(12, '0000-00-00 00:00:00', 'Mahantesh Gurav', 'monty@gmail.com', '1234567890', 'testttttt', '12'),
(13, '0000-00-00 00:00:00', 'abc', 'abc@1.com', '1234567890', 'testttttt', '13'),
(14, '0000-00-00 00:00:00', 'nalin', 'montygurav@gmail.com', '1234567890', 'ddksjssdpj', 'lsalhodajlkbpovdk'),
(15, '0000-00-00 00:00:00', 'Mahantesh Gurav', 'monty@gmail.com', '1234567890', 'mail test', 'testingg    nmaillllll'),
(16, '0000-00-00 00:00:00', 'Mahantesh Gurav', 'monty@gmail.com', '1234567890', 'mail test', 'basic mail testingggggggg'),
(17, '0000-00-00 00:00:00', 'ABC', 'monty@gmail.com', '1234567890', 'mail test', 'basic mail testingggggggg'),
(18, '0000-00-00 00:00:00', 'xyzaas', 'monty@gmail.com', '1234567890', 'mail test', 'basic mail testingggggggg'),
(19, '0000-00-00 00:00:00', 'mng', 'monty@gmail.com', '1234567890', 'mail test', 'basic mail testingggggggg'),
(20, '0000-00-00 00:00:00', 'dgsdggwes', 'monty@gmail.com', '1234567890', 'mail test', 'basic mail testingggggggg'),
(21, '0000-00-00 00:00:00', 'gkvcs;xsc', 'monty@gmail.com', '1234567890', 'mail test', 'basic mail testingggggggg'),
(22, '0000-00-00 00:00:00', 'sdiunfsc', 'monty@gmail.com', '1234567890', 'mail test', 'basic mail testingggggggg'),
(23, '0000-00-00 00:00:00', 'csbsb', 'dbf@gf.scok', '0', 'dgvf', 'gdfv'),
(24, '0000-00-00 00:00:00', 'csbsb', 'dbf@gf.scok', '0', 'dgvf', 'gdfv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Request`
--
ALTER TABLE `Request`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Request`
--
ALTER TABLE `Request`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
