-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 29, 2021 at 04:22 AM
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
-- Table structure for table `civilite`
--

DROP TABLE IF EXISTS `civilite`;
CREATE TABLE IF NOT EXISTS `civilite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `etat_civil` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `civilite`
--

INSERT INTO `civilite` (`id`, `etat_civil`) VALUES
(44, '3'),
(45, '3'),
(46, '3'),
(47, '5'),
(48, '4'),
(49, '1'),
(50, '1'),
(51, '1'),
(52, '1'),
(53, '1'),
(54, '3'),
(55, '3'),
(56, 'Concubinage'),
(57, ''),
(58, ''),
(59, ''),
(60, ''),
(61, ''),
(62, ''),
(63, ''),
(64, ''),
(65, ''),
(66, ''),
(67, 'Concubinage'),
(68, 'Single'),
(69, 'Single'),
(70, 'Married'),
(71, 'Concubinage'),
(72, 'Concubinage'),
(73, 'Concubinage'),
(74, 'Concubinage'),
(75, 'Free Union'),
(76, 'Concubinage'),
(77, 'Single'),
(78, ''),
(79, 'Select an option'),
(80, 'Select an option'),
(81, 'Select an option'),
(82, 'Select an option'),
(83, 'Select an option'),
(84, 'Select an option'),
(85, 'Select an option'),
(86, 'Select an option'),
(87, 'Select an option'),
(88, 'Select an option'),
(89, 'Select an option'),
(90, 'Select an option'),
(91, 'Select an option'),
(92, 'Select an option'),
(93, 'Select an option'),
(94, 'Select an option'),
(95, 'Free Union'),
(96, 'Concubinage'),
(97, 'Concubinage'),
(98, 'Choisir votre rÃ©ponse');

-- --------------------------------------------------------

--
-- Table structure for table `demande_billet`
--

DROP TABLE IF EXISTS `demande_billet`;
CREATE TABLE IF NOT EXISTS `demande_billet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `apport_bagage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `apport_nourriture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `apport_marchandise_taxable` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `apportMontant` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `ammount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `currency` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `declare_origin_security` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `passager_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_demande_billet_passager_idx` (`passager_id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demande_billet`
--

INSERT INTO `demande_billet` (`id`, `apport_bagage`, `apport_nourriture`, `apport_marchandise_taxable`, `apportMontant`, `ammount`, `currency`, `declare_origin_security`, `passager_id`) VALUES
(52, NULL, 'No', 'Yes', 'Yes', 'ARRIVAL/NO', 'ARRIVAL/NO', 'ARRIVAL/NO', 58),
(53, NULL, 'No', 'Yes', 'No', '', '', '', 59),
(54, NULL, 'Yes', 'Yes', 'Yes', 'DEPARTURE', 'DEPARTURE', 'DEPARTURE', 60),
(55, NULL, 'Choisir votre rÃ©ponse', 'Choisir votre rÃ©ponse', 'Choisir votre rÃ©ponse', '', '', '', 61);

-- --------------------------------------------------------

--
-- Table structure for table `information_adresse`
--

DROP TABLE IF EXISTS `information_adresse`;
CREATE TABLE IF NOT EXISTS `information_adresse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adresse_permanent` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `ville` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `etat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `code_postal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `type_voyage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `is_arret_frequent` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=180 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `information_adresse`
--

INSERT INTO `information_adresse` (`id`, `adresse_permanent`, `ville`, `etat`, `code_postal`, `type_voyage`, `is_arret_frequent`) VALUES
(125, 'tt', 'tt', 'tt', 'tt', 'Departure', 'Yes'),
(126, 'tt', 'tt', 'tt', 'tt', 'Departure', 'Yes'),
(127, 'tt', 'tt', 'tt', 'tt', 'Departure', 'Yes'),
(128, 'aa', 'aa', 'aa', 'aa', 'Departure', 'Yes'),
(129, 'ss', 'ss', 'ss', 'ss', 'Arrival', 'Yes'),
(130, '', '', '', '', 'Select an option', 'Select an option'),
(131, '', '', '', '', 'Select an option', 'Select an option'),
(132, '', '', '', '', 'Select an option', 'Select an option'),
(133, '', '', '', '', 'Select an option', 'Select an option'),
(134, '', '', '', '', 'Select an option', 'Select an option'),
(135, 'qq', 'qq', 'qq', 'qq', 'Departure', 'No'),
(136, 'qq', 'qq', 'qq', 'qq', 'Departure', 'No'),
(137, 'DEPARTURE/NO', 'DEPARTURE/NO', 'DEPARTURE/NO', 'DEPARTURE/NO', 'Departure', 'No'),
(138, '', '', '', '', 'Select an option', 'Select an option'),
(139, '', '', '', '', 'Select an option', 'Select an option'),
(140, '', '', '', '', 'Select an option', 'Select an option'),
(141, '', '', '', '', 'Select an option', 'Select an option'),
(142, '', '', '', '', 'Select an option', 'Select an option'),
(143, '', '', '', '', 'Select an option', 'Yes'),
(144, 'Lot 37 Bis Soamiampita Itaosy', 'Andranonahoatra', '', '102', 'Select an option', 'Select an option'),
(145, 'Lot 37 Bis Soamiampita Itaosy', 'Andranonahoatra', '', '102', 'Select an option', 'Select an option'),
(146, 'qsdfqsdf', 'qsdf', 'qsdf', '', 'Select an option', 'Select an option'),
(147, '', '', '', '', 'Select an option', 'Select an option'),
(148, 'ARRIVAL/NO', 'ARRIVAL/NO', 'ARRIVAL/NO', 'ARRIVAL/NO', 'Arrival', 'No'),
(149, 'ARRIVAL/YES', 'ARRIVAL/YES', 'ARRIVAL/YES', 'ARRIVAL/YES', 'Arrival', 'Yes'),
(150, 'DEPARTURE', 'DEPARTURE', 'DEPARTURE', 'DEPARTURE', 'Departure', 'No'),
(151, 'ARRIAL/NO', 'ARRIAL/NO', 'ARRIAL/NO', 'ARRIAL/NO', 'Arrival', 'No'),
(152, 'ARRIVAL/YES', 'ARRIVAL/YES', 'ARRIVAL/YES', 'ARRIVAL/YES', 'Arrival', 'Yes'),
(153, 'DEPARTURE', 'ARRIVAL/YES', 'ARRIVAL/YES', 'ARRIVAL/YES', 'Departure', 'No'),
(154, 'TESTDELETE', 'TESTDELETE', 'TESTDELETE', 'TESTDELETE', 'Arrival', 'No'),
(155, 'TESTSUBMIT', 'TESTSUBMIT', 'TESTSUBMIT', 'TESTSUBMIT', 'Arrival', 'Yes'),
(156, 'TESTALERT', 'TESTALERT', 'TESTALERT', 'TESTALERT', 'Arrival', 'No'),
(157, 'TESTALERT', 'TESTALERT', 'TESTALERT', 'TESTALERT', 'Departure', 'No'),
(158, 'TESTDELETE', 'TESTDELETE', 'TESTDELETE', 'TESTDELETE', 'Arrival', 'No'),
(159, '', '', '', '', 'Select an option', 'Select an option'),
(160, 'dfdfsg', 'sdfgsdfg', 'sdfg', 'sdfg', 'Select an option', 'Select an option'),
(161, 'wfdgsfg', 'sdfgsdfg', 'dsfg', 'sdfgsdgf', 'Select an option', 'Select an option'),
(162, 'dqfdsf', 'qsdfqfd', 'qsdf', '', 'Select an option', 'Select an option'),
(163, '', '', '', '', 'Select an option', 'Select an option'),
(164, '', '', '', '', 'Select an option', 'Select an option'),
(165, '', '', '', '', 'Select an option', 'Select an option'),
(166, '', '', '', '', 'Select an option', 'Select an option'),
(167, '', '', '', '', 'Select an option', 'Select an option'),
(168, '', '', '', '', 'Select an option', 'Select an option'),
(169, '', '', '', '', 'Select an option', 'Select an option'),
(170, '', '', '', '', 'Select an option', 'Select an option'),
(171, '', '', '', '', 'Select an option', 'Select an option'),
(172, '', '', '', '', 'Select an option', 'Select an option'),
(173, '', '', '', '', 'Select an option', 'Select an option'),
(174, '', '', '', '', 'Select an option', 'Select an option'),
(175, '', '', '', '', 'Select an option', 'Select an option'),
(176, 'ARRIVAL/NO', 'ARRIVAL/NO', 'ARRIVAL/NO', 'ARRIVAL/NO', 'Arrival', 'No'),
(177, 'ARRIVAL/YES', 'ARRIVAL/YES', 'ARRIVAL/YES', 'ARRIVAL/YES', 'Arrival', 'Yes'),
(178, 'DEPARTURE', 'DEPARTURE', 'DEPARTURE', 'DEPARTURE', 'Departure', 'No'),
(179, 'QDFSQ', 'SQDF', 'QSDF', 'QSDFSQDF', 'Choisir votre rÃ©ponse', 'Choisir votre rÃ©ponse');

-- --------------------------------------------------------

--
-- Table structure for table `passager`
--

DROP TABLE IF EXISTS `passager`;
CREATE TABLE IF NOT EXISTS `passager` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `noms` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `nom_famille` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `date_naissance` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `genre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `pays_naissance` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `pays_nationnalite` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `numero_passport` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `accept_sejour_hotel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `numero` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `stay_hotel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `province` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `municipality` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `section` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `hotel_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `travel_purpose` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `days_staying` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `origin_port` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `disembarkation_port` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `transportation_company` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `flight_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `name_board_port` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `flight_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `accept_condition_generale` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `demande_immediat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `profession_id` int(10) UNSIGNED DEFAULT NULL,
  `civilite_id` int(11) DEFAULT NULL,
  `information_adresse_id` int(11) DEFAULT NULL,
  `flight_number_yes` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `flight_date_yes` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `boarding_port_yes` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `flight_number_yes_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `flight_date_yes_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `disembarkation_port_yes` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `transportation_company_yes` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `travel_purpose_yes` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `days_staying_yes` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `boarding_port_departure` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `flight_number_departure` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `flight_date_departure` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `disemarkation_port_departure` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `transportation_company_departure` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `travel_purpose_departure` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `days_staying_departure` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_passager_profession1_idx` (`profession_id`),
  KEY `fk_passager_civilite1_idx` (`civilite_id`),
  KEY `fk_passager_information_adresse1_idx` (`information_adresse_id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passager`
--

INSERT INTO `passager` (`id`, `noms`, `nom_famille`, `date_naissance`, `genre`, `pays_naissance`, `pays_nationnalite`, `numero_passport`, `accept_sejour_hotel`, `email`, `numero`, `stay_hotel`, `province`, `municipality`, `section`, `hotel_name`, `travel_purpose`, `days_staying`, `origin_port`, `disembarkation_port`, `transportation_company`, `flight_number`, `name_board_port`, `flight_date`, `accept_condition_generale`, `demande_immediat`, `profession_id`, `civilite_id`, `information_adresse_id`, `flight_number_yes`, `flight_date_yes`, `boarding_port_yes`, `flight_number_yes_2`, `flight_date_yes_2`, `disembarkation_port_yes`, `transportation_company_yes`, `travel_purpose_yes`, `days_staying_yes`, `boarding_port_departure`, `flight_number_departure`, `flight_date_departure`, `disemarkation_port_departure`, `transportation_company_departure`, `travel_purpose_departure`, `days_staying_departure`) VALUES
(58, 'ARRIVAL/NO', 'ARRIVAL/NO', '2021-06-21', 'Feminine', 'ARRIVAL/NO', 'ARRIVAL/NO', 'ARRIVAL/NO', 'No', 'ARRIVAL/NO', 'ARRIVAL/NO', NULL, 'MonseÃ±or Nouel', 'ARRIVAL/NO', 'ARRIVAL/NO', '', 'Convention â€“ Conference', 'ARRIVAL/NO', '', 'STI - AEROPUERTO INTERNACIONAL DEL CIBAO', 'ARRIVAL/NO', 'ARRIVAL/NO', 'ARRIVAL/NO', '2021-06-14', 'true', 'true', 81, 95, 176, '', '', '', '', '', 'Select an option', '', 'Select an option', '', 'Select an option', '', '', '', '', 'Select an option', ''),
(59, 'ARRIVAL/YES', 'ARRIVAL/YES', '2021-06-29', 'Other', 'ARRIVAL/YES', 'ARRIVAL/YES', 'ARRIVAL/YES', 'Yes', 'ARRIVAL/YES', 'ARRIVAL/YES', NULL, 'Select an option', '', '', 'ARRIVAL/YES', 'Select an option', '', 'ARRIVAL/YES', 'Select an option', '', '', '', '', 'true', 'true', 82, 96, 177, 'ARRIVAL/YES', '2021-06-17', 'ARRIVAL/YES', 'ARRIVAL/YES', '2021-06-10', 'PUJ - AEROPUERTO INTERNACIONAL DE PUNTA CANA', 'ARRIVAL/YES', 'Visit friends and/or family', 'ARRIVAL/YES', 'Select an option', '', '', '', '', 'Select an option', ''),
(60, 'DEPARTURE', 'DEPARTURE', '2021-06-03', 'Feminine', 'DEPARTURE', 'DEPARTURE/NO', 'DEPARTURE', 'No', 'DEPARTURE', 'DEPARTURE', NULL, 'Barahona', 'DEPARTURE/NO', 'DEPARTURE', '', 'Select an option', '', '', 'Select an option', '', '', '', '', 'true', 'true', 83, 97, 178, '', '', '', '', '', 'Select an option', '', 'Select an option', '', 'STI - AEROPUERTO INTERNACIONAL DEL CIBAO', 'DEPARTURE', '2021-06-22', 'DEPARTURE', 'DEPARTURE', 'Professionnal', 'DEPARTURE'),
(61, 'QSDF', 'QSDF', '2021-06-10', 'Choisir votre rÃ©ponse', 'QSDF', 'SQDF', 'SQDF', 'Choisir votre rÃ©ponse', '', '', NULL, 'Choisir votre rÃ©ponse', '', '', '', 'Choisir votre rÃ©ponse', '', '', 'Choisir votre rÃ©ponse', '', '', '', '', 'false', 'false', 84, 98, 179, '', '', '', '', '', 'Choisir votre rÃ©ponse', '', 'Choisir votre rÃ©ponse', '', 'Choisir votre rÃ©ponse', '', '', '', '', 'Choisir votre rÃ©ponse', '');

-- --------------------------------------------------------

--
-- Table structure for table `profession`
--

DROP TABLE IF EXISTS `profession`;
CREATE TABLE IF NOT EXISTS `profession` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profession`
--

INSERT INTO `profession` (`id`, `libelle`) VALUES
(58, 'Entrepreneur'),
(59, 'Entrepreneur'),
(60, 'Firefighter'),
(61, 'Lawyer'),
(62, 'Freelancer'),
(63, 'Firefighter'),
(64, 'Select an option'),
(65, 'Select an option'),
(66, 'Select an option'),
(67, 'Select an option'),
(68, 'Select an option'),
(69, 'Select an option'),
(70, 'Select an option'),
(71, 'Select an option'),
(72, 'Select an option'),
(73, 'Select an option'),
(74, 'Select an option'),
(75, 'Select an option'),
(76, 'Select an option'),
(77, 'Select an option'),
(78, 'Select an option'),
(79, 'Select an option'),
(80, 'Select an option'),
(81, 'Firefighter'),
(82, 'Freelancer'),
(83, 'Graphic Designer'),
(84, 'Choisir votre rÃ©ponse');

-- --------------------------------------------------------

--
-- Table structure for table `symptome`
--

DROP TABLE IF EXISTS `symptome`;
CREATE TABLE IF NOT EXISTS `symptome` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `none` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `sorethoat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `muscle_paain` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `headache` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `runny_nose` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `cough` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `shaking_chills` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `breathing_difficulty` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `fatigue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `fever` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

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
(10, 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'true'),
(11, 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true'),
(12, 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false'),
(13, 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false'),
(14, 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false'),
(15, 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false'),
(16, 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false'),
(17, 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false'),
(18, 'false', 'false', 'false', 'true', 'false', 'true', 'false', 'false', 'false', 'false'),
(19, 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false'),
(20, 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false'),
(21, 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false'),
(22, 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true'),
(23, 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true'),
(24, 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true'),
(25, 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true'),
(26, 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true'),
(27, 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true'),
(28, 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true'),
(29, 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true'),
(30, 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true'),
(31, 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true'),
(32, 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true'),
(33, 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false'),
(34, 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false'),
(35, 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false'),
(36, 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false'),
(37, 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false'),
(38, 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false'),
(39, 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false'),
(40, 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false'),
(41, 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false'),
(42, 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false'),
(43, 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false'),
(44, 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false'),
(45, 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false'),
(46, 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false'),
(47, 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false'),
(48, 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false'),
(49, 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false'),
(50, 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true'),
(51, 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true'),
(52, 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true'),
(53, 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `symptome_has_passager`
--

DROP TABLE IF EXISTS `symptome_has_passager`;
CREATE TABLE IF NOT EXISTS `symptome_has_passager` (
  `symptome_id` int(11) NOT NULL,
  `passager_id` int(11) NOT NULL,
  PRIMARY KEY (`symptome_id`,`passager_id`),
  KEY `fk_symptome_has_passager_passager1_idx` (`passager_id`),
  KEY `fk_symptome_has_passager_symptome1_idx` (`symptome_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `symptome_has_passager`
--

INSERT INTO `symptome_has_passager` (`symptome_id`, `passager_id`) VALUES
(50, 58),
(51, 59),
(52, 60),
(53, 61);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `mdp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `mdp`) VALUES
(1, 'admin', 'admin');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `demande_billet`
--
ALTER TABLE `demande_billet`
  ADD CONSTRAINT `fk_demande_billet_passager` FOREIGN KEY (`passager_id`) REFERENCES `passager` (`id`);

--
-- Constraints for table `passager`
--
ALTER TABLE `passager`
  ADD CONSTRAINT `fk_passager_civilite1` FOREIGN KEY (`civilite_id`) REFERENCES `civilite` (`id`),
  ADD CONSTRAINT `fk_passager_information_adresse1` FOREIGN KEY (`information_adresse_id`) REFERENCES `information_adresse` (`id`),
  ADD CONSTRAINT `fk_passager_profession1` FOREIGN KEY (`profession_id`) REFERENCES `profession` (`id`);

--
-- Constraints for table `symptome_has_passager`
--
ALTER TABLE `symptome_has_passager`
  ADD CONSTRAINT `fk_symptome_has_passager_passager1` FOREIGN KEY (`passager_id`) REFERENCES `passager` (`id`),
  ADD CONSTRAINT `fk_symptome_has_passager_symptome1` FOREIGN KEY (`symptome_id`) REFERENCES `symptome` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
