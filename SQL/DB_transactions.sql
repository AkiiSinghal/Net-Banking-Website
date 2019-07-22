-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 22, 2019 at 02:09 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `transactions`
--

-- --------------------------------------------------------

--
-- Table structure for table `1101390073`
--

CREATE TABLE `1101390073` (
  `date` varchar(10) NOT NULL,
  `remark` varchar(200) NOT NULL,
  `debit` int(6) NOT NULL,
  `credit` int(6) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1101390073`
--

INSERT INTO `1101390073` (`date`, `remark`, `debit`, `credit`, `balance`) VALUES
('2019-07-22', 'New Account', 0, 1000, 1000);
