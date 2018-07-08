CREATE DATABASE webdb;
USE webdb;

-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2018 at 01:04 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `telephone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_addvertisment_user`
--

CREATE TABLE `admin_addvertisment_user` (
  `adminid` varchar(10) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `addvertisementid` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `addvertismentid` varchar(10) NOT NULL,
  `description` int(11) NOT NULL,
  `mediafile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `numofcategoryitems` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentid` varchar(10) NOT NULL,
  `amount` double NOT NULL,
  `type` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `shoppingcartid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` varchar(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `views` int(11) NOT NULL,
  `validity` tinyint(1) NOT NULL,
  `price` double NOT NULL,
  `numofitems` int(11) NOT NULL,
  `discountprice` double NOT NULL,
  `categoryid` varchar(10) NOT NULL,
  `adminid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_shoppingcart`
--

CREATE TABLE `product_shoppingcart` (
  `productid` varchar(10) NOT NULL,
  `shoppingcartid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_user`
--

CREATE TABLE `product_user` (
  `userid` varchar(10) NOT NULL,
  `productid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `shoppingcartid` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `validDates` int(11) NOT NULL DEFAULT '14',
  `userid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(70) NOT NULL,
  `loyalitypoints` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `adminid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `admin_addvertisment_user`
--
ALTER TABLE `admin_addvertisment_user`
  ADD PRIMARY KEY (`adminid`,`userid`,`addvertisementid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `addvertisementid` (`addvertisementid`);

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`addvertismentid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentid`),
  ADD KEY `shoppingcartid` (`shoppingcartid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`),
  ADD KEY `adminid` (`adminid`),
  ADD KEY `categoryid` (`categoryid`);

--
-- Indexes for table `product_shoppingcart`
--
ALTER TABLE `product_shoppingcart`
  ADD PRIMARY KEY (`productid`,`shoppingcartid`),
  ADD KEY `shoppingcartid` (`shoppingcartid`);

--
-- Indexes for table `product_user`
--
ALTER TABLE `product_user`
  ADD PRIMARY KEY (`userid`,`productid`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`shoppingcartid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `adminid` (`adminid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_addvertisment_user`
--
ALTER TABLE `admin_addvertisment_user`
  ADD CONSTRAINT `admin_addvertisment_user_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`),
  ADD CONSTRAINT `admin_addvertisment_user_ibfk_2` FOREIGN KEY (`addvertisementid`) REFERENCES `advertisement` (`addvertismentid`),
  ADD CONSTRAINT `admin_addvertisment_user_ibfk_3` FOREIGN KEY (`adminid`) REFERENCES `admin` (`adminid`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`shoppingcartid`) REFERENCES `shoppingcart` (`shoppingcartid`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`adminid`) REFERENCES `admin` (`adminid`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`categoryid`) REFERENCES `category` (`categoryid`);

--
-- Constraints for table `product_shoppingcart`
--
ALTER TABLE `product_shoppingcart`
  ADD CONSTRAINT `product_shoppingcart_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`),
  ADD CONSTRAINT `product_shoppingcart_ibfk_2` FOREIGN KEY (`shoppingcartid`) REFERENCES `shoppingcart` (`shoppingcartid`);

--
-- Constraints for table `product_user`
--
ALTER TABLE `product_user`
  ADD CONSTRAINT `product_user_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`),
  ADD CONSTRAINT `product_user_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);

--
-- Constraints for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD CONSTRAINT `shoppingcart_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`adminid`) REFERENCES `admin` (`adminid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
