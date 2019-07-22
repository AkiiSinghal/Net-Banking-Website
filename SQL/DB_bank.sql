-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 22, 2019 at 02:07 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `balance`
--

CREATE TABLE `balance` (
  `account_no` bigint(20) NOT NULL,
  `balance` int(11) default NULL,
  `online_limit` int(11) default NULL,
  `card_limit` int(11) default NULL,
  `upi_limit` int(11) default NULL,
  `online_no` int(11) default NULL,
  `card_no` int(11) default NULL,
  `upi_no` int(11) default NULL,
  PRIMARY KEY  (`account_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `balance`
--

INSERT INTO `balance` (`account_no`, `balance`, `online_limit`, `card_limit`, `upi_limit`, `online_no`, `card_no`, `upi_no`) VALUES
(1101390073, 1000, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(30) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `account_no` bigint(20) NOT NULL,
  PRIMARY KEY  (`account_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `pwd`, `account_no`) VALUES
('demo123@gmail.com', '123', 1101390073);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `account_no` bigint(20) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `acc_type` varchar(20) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `father` varchar(50) NOT NULL,
  `mother` varchar(50) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  PRIMARY KEY  (`account_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`account_no`, `firstname`, `lastname`, `email`, `phone`, `acc_type`, `address1`, `address2`, `city`, `state`, `country`, `father`, `mother`, `nationality`) VALUES
(1101390073, 'Demo', 'Demo', 'demo123@gmail.com', 1234567890, 'saving', '123, xyz colony', 'near abc', 'pqr', 'def', 'India', 'qwe', 'rty', 'Indian');
