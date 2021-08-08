-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 08, 2021 at 08:34 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mail`
--

-- --------------------------------------------------------

--
-- Table structure for table `displayer`
--

CREATE TABLE `displayer` (
  `displayer_id` int(11) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `dor` varchar(200) NOT NULL,
  `technology_name` varchar(200) NOT NULL,
  `coo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `token` varchar(200) NOT NULL,
  `status` enum('inactive','active') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `displayer`
--

INSERT INTO `displayer` (`displayer_id`, `company_name`, `dor`, `technology_name`, `coo`, `email`, `password`, `token`, `status`) VALUES
(12, '', '', '', '', 'new@gmail.com', 'danish', '80843cf4ad1a159c13a1cdd272f914', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `scouter`
--

CREATE TABLE `scouter` (
  `scouter_id` int(11) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `Technology_name` varchar(200) NOT NULL,
  `coo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `dor` varchar(200) NOT NULL,
  `token` varchar(200) NOT NULL,
  `status` enum('inactive','active') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scouter`
--

INSERT INTO `scouter` (`scouter_id`, `company_name`, `Technology_name`, `coo`, `email`, `password`, `dor`, `token`, `status`) VALUES
(4, '', '', '', 'rock@gmail.com', '123', '', '26648b7d4d34cd37726102ddd7dc1d', 'inactive'),
(5, 'hcl', 'web development', 'India', 'india@gmail.com', '123', '2013-02-12', 'be4c9ef10d248d143af260065f79ae', 'inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `displayer`
--
ALTER TABLE `displayer`
  ADD PRIMARY KEY (`displayer_id`);

--
-- Indexes for table `scouter`
--
ALTER TABLE `scouter`
  ADD PRIMARY KEY (`scouter_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `displayer`
--
ALTER TABLE `displayer`
  MODIFY `displayer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `scouter`
--
ALTER TABLE `scouter`
  MODIFY `scouter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
