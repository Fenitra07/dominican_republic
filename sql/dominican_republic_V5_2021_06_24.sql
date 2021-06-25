-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
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
  `etat_civil` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 ;

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
(55, '3');

-- --------------------------------------------------------

--
-- Table structure for table `demande_billet`
--

DROP TABLE IF EXISTS `demande_billet`;
CREATE TABLE IF NOT EXISTS `demande_billet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `apport_bagage` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `apport_nourriture` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `apport_marchandise_taxable` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `apportMontant` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `ammount` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `declare_origin_security` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `passager_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_demande_billet_passager_idx` (`passager_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 ;

--
-- Dumping data for table `demande_billet`
--

INSERT INTO `demande_billet` (`id`, `apport_bagage`, `apport_nourriture`, `apport_marchandise_taxable`, `apportMontant`, `ammount`, `currency`, `declare_origin_security`, `passager_id`) VALUES
(4, NULL, 'Yes', 'Yes', 'Yes', 'aa', 'aa', 'aa', 10),
(5, NULL, 'Yes', 'No', 'No', 'ss', 'ss', 'ss', 11),
(12, NULL, 'Yes', 'No', 'No', 'qq', 'qq', 'qq', 18);

-- --------------------------------------------------------

--
-- Table structure for table `information_adresse`
--

DROP TABLE IF EXISTS `information_adresse`;
CREATE TABLE IF NOT EXISTS `information_adresse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adresse_permanent` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `etat` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `code_postal` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `type_voyage` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `is_arret_frequent` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=137 ;

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
(136, 'qq', 'qq', 'qq', 'qq', 'Departure', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `passager`
--

DROP TABLE IF EXISTS `passager`;
CREATE TABLE IF NOT EXISTS `passager` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `noms` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `nom_famille` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `date_naissance` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `genre` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `pays_naissance` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `pays_nationnalite` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `numero_passport` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `accept_sejour_hotel` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `numero` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `stay_hotel` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `province` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `municipality` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `section` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `hotel_name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `travel_purpose` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `days_staying` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `origin_port` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `disembarkation_port` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `transportation_company` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `flight_number` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `name_board_port` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `flight_date` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `accept_condition_generale` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `demande_immediat` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `profession_id` int(10) UNSIGNED DEFAULT NULL,
  `civilite_id` int(11) DEFAULT NULL,
  `information_adresse_id` int(11) DEFAULT NULL,
  `flight_number_yes` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `flight_date_yes` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `boarding_port_yes` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `flight_number_yes_2` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `flight_date_yes_2` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `disembarkation_port_yes` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `transportation_company_yes` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `travel_purpose_yes` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `days_staying_yes` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_passager_profession1_idx` (`profession_id`),
  KEY `fk_passager_civilite1_idx` (`civilite_id`),
  KEY `fk_passager_information_adresse1_idx` (`information_adresse_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 ;

--
-- Dumping data for table `passager`
--

INSERT INTO `passager` (`id`, `noms`, `nom_famille`, `date_naissance`, `genre`, `pays_naissance`, `pays_nationnalite`, `numero_passport`, `accept_sejour_hotel`, `email`, `numero`, `stay_hotel`, `province`, `municipality`, `section`, `hotel_name`, `travel_purpose`, `days_staying`, `origin_port`, `disembarkation_port`, `transportation_company`, `flight_number`, `name_board_port`, `flight_date`, `accept_condition_generale`, `demande_immediat`, `profession_id`, `civilite_id`, `information_adresse_id`, `flight_number_yes`, `flight_date_yes`, `boarding_port_yes`, `flight_number_yes_2`, `flight_date_yes_2`, `disembarkation_port_yes`, `transportation_company_yes`, `travel_purpose_yes`, `days_staying_yes`) VALUES
(9, 'ttt', 'tt', '2021-06-17', 'Feminine', 'test', 'test', 'test', 'true', 'ttt', 'tt', NULL, 'Select an option', '', '', NULL, 'Convention â€“ Conference', 'tttt', '', 'Select an option', 'tttt', 'ttt', 'POP - AEROPUERTO INTERNACIONAL GREGORIO LUPERON, PUERTO PLATA', '2021-06-24', 'true', 'true', 32, 46, 127, 'aa', '2021-06-17', 'aa', 'aa', '2021-06-17', 'SDQ - AEROPUERTO INTERNACIONAL DE LAS AMERICAS', 'test', 'Visit friends and/or family', '11'),
(10, 'aa', 'aa', '2021-06-24', 'Feminine', 'aa', 'aa', 'aa', 'true', 'aa', 'aa', NULL, 'Select an option', '', '', NULL, 'Convention â€“ Conference', 'aa', '', 'Select an option', 'aa', 'aa', 'STI - AEROPUERTO INTERNACIONAL DEL CIBAO', '2021-06-24', 'true', 'true', 33, 47, 128, 'aa', '2021-06-17', 'aa', 'aa', '2021-06-17', 'SDQ - AEROPUERTO INTERNACIONAL DE LAS AMERICAS', 'test', 'Visit friends and/or family', '11'),
(11, 'ss', 'ss', '2021-06-24', 'Feminine', 'ss', 'ss', 'ss', 'No', 'ss', 'ss', NULL, 'La Altagracia', 'ss', 'ss', NULL, 'Select an option', '', 'ss', 'POP - AEROPUERTO INTERNACIONAL GREGORIO LUPERON, PUERTO PLATA', '', '', 'Select an option', '', 'false', 'true', 34, 48, 129, 'aa', '2021-06-17', 'aa', 'aa', '2021-06-17', 'SDQ - AEROPUERTO INTERNACIONAL DE LAS AMERICAS', 'test', 'Visit friends and/or family', '11'),
(18, 'qq', 'qq', '2021-06-24', 'Feminine', 'qq', 'qq', 'qq', 'Yes', 'qq', 'qq', NULL, 'Select an option', '', '', NULL, 'Medical reasons', 'qq', '', 'Select an option', 'qq', 'qq', 'POP - AEROPUERTO INTERNACIONAL GREGORIO LUPERON, PUERTO PLATA', '2021-06-24', 'true', 'true', 41, 55, 136, 'aa', '2021-06-17', 'aa', 'aa', '2021-06-17', 'SDQ - AEROPUERTO INTERNACIONAL DE LAS AMERICAS', 'test', 'Visit friends and/or family', '11');

-- --------------------------------------------------------

--
-- Table structure for table `profession`
--

DROP TABLE IF EXISTS `profession`;
CREATE TABLE IF NOT EXISTS `profession` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 ;

--
-- Dumping data for table `profession`
--

INSERT INTO `profession` (`id`, `libelle`) VALUES
(31, '16'),
(32, '16'),
(33, '3'),
(34, '16'),
(35, 'Select an option'),
(36, 'Select an option'),
(37, 'Select an option'),
(38, 'Select an option'),
(39, 'Select an option'),
(40, '15'),
(41, '15');

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
) ENGINE=InnoDB AUTO_INCREMENT=11 ;

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
) ENGINE=InnoDB ;

--
-- Dumping data for table `symptome_has_passager`
--

INSERT INTO `symptome_has_passager` (`symptome_id`, `passager_id`) VALUES
(1, 9),
(2, 10),
(3, 11),
(10, 18);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `mdp` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 ;

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
