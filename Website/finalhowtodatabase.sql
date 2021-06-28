-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2021 at 05:14 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `howto`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `decor` varchar(30) NOT NULL,
  `entertainment` varchar(30) NOT NULL,
  `invitations` varchar(30) NOT NULL,
  `food` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `username`, `password`, `decor`, `entertainment`, `invitations`, `food`) VALUES
(1, 'Red', '123', 'Amazing Savings', 'Uncle Moishy', 'Shutterfly', 'Mocha Bleu'),
(2, 'Red', '123', 'Amazing Savings', 'Uncle Moishy', 'Shutterfly', 'Mocha Bleu'),
(3, 'Blue', '345', 'Amazing Savings', 'Twins from France', 'Snapfish', 'Main Events'),
(4, 'Red', '2', 'Amazing Savings', 'Uncle Moishy', 'Shutterfly', 'Mocha Bleu'),
(10, 'rina', 'rina456', 'Party City', 'Twins from France', 'Snapfish', 'Main Ingredient'),
(11, 'chavie', 'chavie123', 'Dollar Tree', 'Uncle Moishy', 'Shutterfly', 'Eighth Day Caterers'),
(12, 'chavie', 'chavie123', 'Amazing Savings', 'Comedian', 'Shutterfly', 'Main Events'),
(13, 'rina', 'rina', 'amazing savings', 'Uncle Moishy', 'evite', 'main ingredient'),
(14, 'chavie', 'chavie123', 'Amazing Savings', 'Uncle Moishy', 'Shutterfly', 'Mocha Bleu'),
(15, 'chavie', 'chavie123', 'Amazing Savings', 'Twins from France', 'Evite', 'Mocha Bleu'),
(16, 'chavie', 'chavie123', 'amazing savings', 'Uncle Moishy', 'evite', 'main ingredient');

-- --------------------------------------------------------

--
-- Table structure for table `entertainment`
--

CREATE TABLE `entertainment` (
  `entertainmentID` int(11) NOT NULL,
  `entertainmentDesc` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entertainment`
--

INSERT INTO `entertainment` (`entertainmentID`, `entertainmentDesc`) VALUES
(1, 'Uncle Moishy'),
(2, 'Twins from France'),
(3, 'David Blatt'),
(4, 'Comedian');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `foodID` int(11) NOT NULL,
  `foodDesc` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`foodID`, `foodDesc`) VALUES
(1, 'Mocha Bleu'),
(2, 'Eighth Day Caterers'),
(3, 'Main Ingredient'),
(4, 'Main Events');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginID` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `roles` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginID`, `username`, `password`, `roles`) VALUES
(3, 'chavie', 'chavie123', 'A'),
(4, 'rina', 'rina456', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `subscriberID` int(11) NOT NULL,
  `fName` varchar(25) NOT NULL,
  `lName` varchar(35) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `entertainment`
--
ALTER TABLE `entertainment`
  ADD PRIMARY KEY (`entertainmentID`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`foodID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginID`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`subscriberID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `entertainment`
--
ALTER TABLE `entertainment`
  MODIFY `entertainmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `foodID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `subscriberID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
