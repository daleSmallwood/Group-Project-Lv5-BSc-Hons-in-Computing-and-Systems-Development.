-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 06:06 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ucrkebabsaccounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `messageID` int(11) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kebabproducts`
--

CREATE TABLE `kebabproducts` (
  `productID` int(11) NOT NULL,
  `productName` varchar(100) CHARACTER SET utf8 NOT NULL,
  `productDescription` varchar(500) NOT NULL DEFAULT 'Product has no description ',
  `productPath` varchar(5000) CHARACTER SET utf8 NOT NULL,
  `productImage` varchar(5000) CHARACTER SET utf8 NOT NULL DEFAULT '../Images/Placeholder.png',
  `productCost` varchar(500) CHARACTER SET utf8 NOT NULL,
  `IDkey` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kebabproducts`
--

INSERT INTO `kebabproducts` (`productID`, `productName`, `productDescription`, `productPath`, `productImage`, `productCost`, `IDkey`) VALUES
(1, 'Can of Pop', 'A 500ml can of your preferred drink ', '../ImagesDrink.png', '../Images/Placeholder.png', '£0.80', 0),
(2, 'Chips', 'Lightly salted chips', '../ImagesChips.png', '../Images/Placeholder.png', '£1.25', 0),
(3, 'Donna burger', 'Donna meat on a bread bun', '../ImagesDonnaBurger.png', '../Images/Placeholder.png', '£3.00', 0),
(4, 'Donna Pizza', 'Donna meat on a pizza', '../ImagesDonnaPizza.png', '../Images/Placeholder.png', '£4.00', 0),
(5, 'Donna Wrap', 'Donna meat in a tortilla with salad.', '../ImagesDonnaWrap.png', '../Images/Placeholder.png', '£2.50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kebabusers`
--

CREATE TABLE `kebabusers` (
  `IDkey` int(11) NOT NULL,
  `accessLevel` int(1) NOT NULL DEFAULT 0,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kebabusers`
--

INSERT INTO `kebabusers` (`IDkey`, `accessLevel`, `Username`, `Password`) VALUES
(1, 0, 'test1', '12345'),
(2, 1, 'Dale', 'Dale12'),
(3, 1, 'Mo', 'Mo123'),
(4, 1, 'Cam', 'Cam123'),
(5, 0, 'Bob', 'Bob123'),
(6, 0, 'Test2', 'Ucr123'),
(7, 0, 'Test1', 'Test1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`messageID`);

--
-- Indexes for table `kebabproducts`
--
ALTER TABLE `kebabproducts`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `kebabusers`
--
ALTER TABLE `kebabusers`
  ADD PRIMARY KEY (`IDkey`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `messageID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kebabproducts`
--
ALTER TABLE `kebabproducts`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kebabusers`
--
ALTER TABLE `kebabusers`
  MODIFY `IDkey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
