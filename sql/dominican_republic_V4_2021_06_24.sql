-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 24, 2021 at 01:19 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dominican_republic`
--

-- --------------------------------------------------------

--
-- Table structure for table `symptome`
--

DROP TABLE IF EXISTS `symptome`;
CREATE TABLE IF NOT EXISTS `symptome` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `none` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `sorethoat` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `muscle_paain` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `headache` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `runny_nose` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `cough` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `shaking_chills` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `breathing_difficulty` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `fatigue` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `fever` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `symptome`
--

INSERT INTO `symptome` (`id`, `none`, `sorethoat`, `muscle_paain`, `headache`, `runny_nose`, `cough`, `shaking_chills`, `breathing_difficulty`, `fatigue`, `fever`) VALUES
(1, 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false'),
(2, 'true', 'true', 'true', 'true', 'true', 'false', 'false', 'false', 'false', 'true'),
(3, 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false'),
(4, 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false'),
(5, 'false', 'true', 'false', 'false', 'true', 'true', 'false', 'false', 'false', 'false'),
(6, 'false', 'true', 'false', 'false', 'true', 'true', 'false', 'true', 'false', 'false'),
(7, 'false', 'true', 'false', 'false', 'true', 'true', 'false', 'true', 'false', 'false'),
(8, 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false'),
(9, 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'true'),
(10, 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'true');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
