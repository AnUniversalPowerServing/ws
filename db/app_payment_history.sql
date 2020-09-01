-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2020 at 09:38 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_payment_history`
--

CREATE TABLE IF NOT EXISTS `app_payment_history` (
  `payment_Id` int(11) NOT NULL,
  `user_Id` int(11) NOT NULL,
  `userReference` varchar(15) NOT NULL,
  `purchase_Id` int(11) NOT NULL,
  `purchaseDesc` varchar(250) NOT NULL,
  `currency` varchar(25) NOT NULL,
  `amount` float NOT NULL,
  `order_Id` int(11) NOT NULL,
  `orderReference` varchar(15) NOT NULL,
  PRIMARY KEY (`payment_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
