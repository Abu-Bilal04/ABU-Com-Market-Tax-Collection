-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 01, 2022 at 02:07 PM
-- Server version: 8.0.18
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `market`
--

-- --------------------------------------------------------

--
-- Table structure for table `backend`
--

DROP TABLE IF EXISTS `backend`;
CREATE TABLE IF NOT EXISTS `backend` (
  `uname` varchar(50) COLLATE utf8_bin NOT NULL,
  `pword` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `backend`
--

INSERT INTO `backend` (`uname`, `pword`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

DROP TABLE IF EXISTS `tax`;
CREATE TABLE IF NOT EXISTS `tax` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tax` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`id`, `tax`) VALUES
(1, '19000');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `refid` varchar(200) COLLATE utf8_bin NOT NULL,
  `email` varchar(200) COLLATE utf8_bin NOT NULL,
  `name` varchar(200) COLLATE utf8_bin NOT NULL,
  `gsm` varchar(200) COLLATE utf8_bin NOT NULL,
  `amount` varchar(200) COLLATE utf8_bin NOT NULL,
  `date_paid` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `refid`, `email`, `name`, `gsm`, `amount`, `date_paid`) VALUES
(1, '97A72F', 'HNDSWD2023/015', 'Abu Bilal', '0903839325', '17000', '2022-10-01 13:44:38.141228');

-- --------------------------------------------------------

--
-- Table structure for table `shopOwners`
--

DROP TABLE IF EXISTS `shopOwners`;
CREATE TABLE IF NOT EXISTS `shopOwners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_bin NOT NULL,
  `email` varchar(200) COLLATE utf8_bin NOT NULL,
  `status` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pword` varchar(50) COLLATE utf8_bin NOT NULL,
  `gsm` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `shopOwners`
--

INSERT INTO `shopOwners` (`id`, `name`, `email`, `status`, `pword`, `gsm`) VALUES
(1, 'Sani Adamu', 'HNDSWD2019/003', 'PAID', '989810', '0903839325'),
(2, 'Ibrahim', 'NDCS 2019/234', 'PAID', '123456', '0903839325'),
(3, 'Saminu', 'NDSLT 2019/345', 'PAID', '123456', '09047283749'),
(4, 'Halima Attahiru', 'NDCS 2019/298', 'PAID', '123456', '0903839325');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

