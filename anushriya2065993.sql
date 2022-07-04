-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 10:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anushriya2065993`
--

-- --------------------------------------------------------

--
-- Table structure for table `productdetail`
--

CREATE TABLE `productdetail` (
  `id` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `productdiscription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productdetail`
--

INSERT INTO `productdetail` (`id`, `productname`, `productdiscription`) VALUES
(1, 'Banana', 'Banana is a sweet and delicious fruit that is very healthy. It is also a good disease-fighter and we can eat it every day.'),
(4, 'Apple', 'Apple is a sweet and delicious fruit that is very healthy for body.');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `Name`, `Email`, `Password`) VALUES
(1, 'Anushriya', 'anu@gmail.com', 'b59c67bf196a4758191e42f76670ceba');

-- --------------------------------------------------------

--
-- Table structure for table `registerkyc`
--

CREATE TABLE `registerkyc` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `dateofbirth` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `martialstatus` varchar(255) NOT NULL,
  `totalfamilymember` varchar(255) NOT NULL,
  `currentprovience` varchar(255) NOT NULL,
  `currentdistrict` varchar(255) NOT NULL,
  `currentmunicipality` varchar(255) NOT NULL,
  `currentwardno` varchar(255) NOT NULL,
  `pemanentprovience` varchar(255) NOT NULL,
  `permanentdistrict` varchar(255) NOT NULL,
  `permanentmunicipality` varchar(255) NOT NULL,
  `permanentwardno` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registerkyc`
--

INSERT INTO `registerkyc` (`id`, `firstname`, `middlename`, `lastname`, `nationality`, `dateofbirth`, `gender`, `martialstatus`, `totalfamilymember`, `currentprovience`, `currentdistrict`, `currentmunicipality`, `currentwardno`, `pemanentprovience`, `permanentdistrict`, `permanentmunicipality`, `permanentwardno`, `phonenumber`, `email`) VALUES
(9, 'Anushirya', ' ', 'Aryal', 'Nepalese', '2069/02/20', 'Female', 'Unmarried', '4', '3', 'Kathmandu', 'Sathtaley', '04', '3', 'Dhadhing', 'solu9', '04 ', '9846738642', 'anu@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productdetail`
--
ALTER TABLE `productdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registerkyc`
--
ALTER TABLE `registerkyc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productdetail`
--
ALTER TABLE `productdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registerkyc`
--
ALTER TABLE `registerkyc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
