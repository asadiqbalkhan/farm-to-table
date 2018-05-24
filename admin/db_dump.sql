-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2018 at 09:18 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmable`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cutomerID` int(11) NOT NULL,
  `customerEmail` varchar(256) NOT NULL,
  `customerName` varchar(256) NOT NULL,
  `customerOrder` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cutomerID`, `customerEmail`, `customerName`, `customerOrder`) VALUES
(1, 'aa@yo.com', 'ibra', '23'),
(2, 'asad@asad.com', 'Asad', '123'),
(3, 'miz@yo.com', 'awesome', '2');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `itemID` int(11) NOT NULL,
  `itemCategory` varchar(64) NOT NULL,
  `itemPrice` double NOT NULL,
  `itemName` varchar(64) NOT NULL,
  `itemQuantity` varchar(64) NOT NULL,
  `Image` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`itemID`, `itemCategory`, `itemPrice`, `itemName`, `itemQuantity`, `Image`) VALUES
(32, 'Meats', 12, 'sdf', '234', 'https://ucarecdn.com/8b7d8d64-1b52-44a0-b181-931fdeac1c5f/'),
(33, 'Fruits', 6, 'Apple', '124', 'https://ucarecdn.com/38c7f695-218b-47dc-bce4-4dc60d8f77dd/');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `salesID` int(11) NOT NULL,
  `itemCategory` varchar(64) NOT NULL,
  `itemName` varchar(64) NOT NULL,
  `itemQuantity` varchar(64) NOT NULL,
  `itemID` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`salesID`, `itemCategory`, `itemName`, `itemQuantity`, `itemID`, `date`, `time`) VALUES
(1, 'Vegetables', 'brocalli', '100', 0, '2018-05-09', '15:00:00'),
(2, 'Vegetable', 'Alu', '5', 12, '2018-05-16', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_ID` int(11) NOT NULL,
  `email` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `userType` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_ID`, `email`, `username`, `password`, `userType`) VALUES
(1337, 'admin@farmable.com', 'admin', 'farmable', 'super admin'),
(1338, 'lee@swin.com', '1234', '1234', 'user'),
(1339, 'asad@datax.com', 'asad', '1234', 'user'),
(1340, 'test@gmail.com', 'test', '1234', 'user'),
(1341, 'test@test.com', 'test', '1234', 'User'),
(1342, 'test2@dp1.com', '1234', '1234', 'Admin'),
(1343, 'test3@test.com', 'test3', '123lhkfhaiufgldisygfbi c', 'Customer'),
(1344, 'lola@gmail.com', 'lola1111111', '1234', 'user'),
(1345, 'sharonne@gmail.com', 'sharonne', '1234', 'Admin'),
(1346, 'ThisIsWorking@Working.com', 'ThisIsWorkingTest', '1234', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cutomerID`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`salesID`),
  ADD UNIQUE KEY `foreign key` (`itemID`),
  ADD KEY `itemID` (`itemID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cutomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `itemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `salesID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1347;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
