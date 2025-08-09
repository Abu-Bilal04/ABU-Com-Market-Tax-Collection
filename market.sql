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
-- Database: `tship`
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
-- Table structure for table `fee`
--

DROP TABLE IF EXISTS `fee`;
CREATE TABLE IF NOT EXISTS `fee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dept` varchar(200) COLLATE utf8_bin NOT NULL,
  `level` varchar(200) COLLATE utf8_bin NOT NULL,
  `fee` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`id`, `dept`, `level`, `fee`) VALUES
(1, 'Computer Science', 'ND 1', '19000'),
(3, 'Computer Science', 'ND 2', '15000'),
(4, 'Computer Science', 'HND 1', '16000'),
(5, 'Computer Science', 'HND 2', '17000'),
(6, 'Science Laboratory Technology', 'ND 1', '12000'),
(7, 'Science Laboratory Technology', 'HND 2', '17000'),
(8, 'Science Laboratory Technology', 'HND 1', '12000'),
(9, 'Science Laboratory Technology', 'ND 2', '12000'),
(10, 'Leather Technology', 'HND 2', '17000'),
(11, 'Science Laboratory Technology', 'HND 1', '12000'),
(12, 'Leather Technology', 'ND 1', '12000'),
(13, 'Leather Technology', 'ND 2', '12000'),
(14, 'Polymer Technology', 'HND 2', '17000'),
(15, 'Science Polymer Technology', 'HND 1', '12000'),
(16, 'Polymer Technology', 'ND 1', '12000'),
(17, 'Polymer Technology', 'ND 2', '12000'),
(18, 'Polymer Technology', 'HND 2', '17000'),
(19, 'Science Polymer Technology', 'HND 1', '12000'),
(20, 'Polymer Technology', 'ND 1', '12000'),
(21, 'Polymer Technology', 'ND 2', '12000'),
(22, 'Footwear Manufacturing', 'HND 2', '17000'),
(23, 'Footwear Manufacturing', 'HND 1', '12000'),
(24, 'Footwear Manufacturing', 'ND 1', '12000'),
(25, 'Footwear Manufacturing', 'ND 2', '12000'),
(26, 'Footwear Technology', 'HND 2', '17000'),
(27, 'Footwear Technology', 'HND 1', '12000'),
(28, 'Footwear Technology', 'ND 1', '12000'),
(29, 'Footwear Technology', 'ND 2', '12000'),
(30, 'Industrial Chemical Processing Technology', 'HND 2', '17000'),
(31, 'Industrial Chemical Processing Technology', 'HND 1', '12000'),
(32, 'Industrial Chemical Processing Technology', 'ND 1', '12000'),
(33, 'Industrial Chemical Processing Technology', 'ND 2', '12000'),
(34, 'Production Management', 'HND 2', '17000'),
(35, 'Production Management', 'HND 1', '12000'),
(36, 'Production Management', 'ND 1', '12000'),
(37, 'Production Management', 'ND 2', '12000');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `refid` varchar(200) COLLATE utf8_bin NOT NULL,
  `regno` varchar(200) COLLATE utf8_bin NOT NULL,
  `name` varchar(200) COLLATE utf8_bin NOT NULL,
  `level` varchar(200) COLLATE utf8_bin NOT NULL,
  `dept` varchar(200) COLLATE utf8_bin NOT NULL,
  `gsm` varchar(200) COLLATE utf8_bin NOT NULL,
  `amount` varchar(200) COLLATE utf8_bin NOT NULL,
  `date_paid` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `refid`, `regno`, `name`, `level`, `dept`, `gsm`, `amount`, `date_paid`) VALUES
(1, '97A72F', 'HNDSWD2023/015', 'Abu Bilal', 'HND 1', 'Computer Science', '0903839325', '17000', '2022-10-01 13:44:38.141228');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_bin NOT NULL,
  `regno` varchar(200) COLLATE utf8_bin NOT NULL,
  `dept` varchar(200) COLLATE utf8_bin NOT NULL,
  `level` varchar(200) COLLATE utf8_bin NOT NULL,
  `status` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pword` varchar(50) COLLATE utf8_bin NOT NULL,
  `gsm` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `regno`, `dept`, `level`, `status`, `pword`, `gsm`, `email`) VALUES
(1, 'Sani Adamu', 'HNDSWD2019/003', 'Computer Science', 'HND 2', 'PAID', '989810', '0903839325', 'md@gmail.com'),
(2, 'Nuhu Ibrahim', 'NDCS 2019/234', 'Computer Science', 'ND 1', 'PAID', '123456', '0903839325', 'isa@gmail.com'),
(3, 'Shaku Saminu', 'NDSLT 2019/345', 'Science Laboratory Technology', 'ND 1', 'PAID', '123456', '09047283749', 'mm@gmail.com'),
(4, 'Halima Attahiru', 'NDCS 2019/298', 'Computer Science', 'ND 1', 'PAID', '123456', '0903839325', 'hwfa@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

