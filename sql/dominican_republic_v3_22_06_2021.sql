-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 22 juin 2021 à 12:57
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dominican_republic`
--

-- --------------------------------------------------------

--
-- Structure de la table `civilite`
--

DROP TABLE IF EXISTS `civilite`;
CREATE TABLE IF NOT EXISTS `civilite` (
  `id` int NOT NULL AUTO_INCREMENT,
  `etat_civil` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `civilite`
--

INSERT INTO `civilite` (`id`, `etat_civil`) VALUES
(1, 'Free union'),
(2, 'Concubinage'),
(3, 'Married'),
(4, 'Single'),
(5, 'Other'),
(6, '2'),
(7, '2'),
(8, '2'),
(9, '4'),
(10, '4'),
(11, '4'),
(12, '1'),
(13, '1'),
(14, '1'),
(15, '1'),
(16, '1'),
(17, '1'),
(18, '1'),
(19, '1'),
(20, '1'),
(21, '1'),
(22, '1'),
(23, '1'),
(24, '1'),
(25, '1'),
(26, '1'),
(27, '3'),
(28, '3'),
(29, '3'),
(30, '4');

-- --------------------------------------------------------

--
-- Structure de la table `demande_billet`
--

DROP TABLE IF EXISTS `demande_billet`;
CREATE TABLE IF NOT EXISTS `demande_billet` (
  `id` int NOT NULL AUTO_INCREMENT,
  `accept_condition_generale` varchar(255) DEFAULT NULL,
  `demande_immediat` varchar(255) DEFAULT NULL,
  `apport_bagage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `apport_nourriture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `apport_marchandise_taxable` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `ammount` varchar(255) DEFAULT NULL,
  `currency` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `declare_origin_security` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `passager_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_demande_billet_passager_idx` (`passager_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `demande_billet`
--

INSERT INTO `demande_billet` (`id`, `accept_condition_generale`, `demande_immediat`, `apport_bagage`, `apport_nourriture`, `apport_marchandise_taxable`, `ammount`, `currency`, `declare_origin_security`, `passager_id`) VALUES
(1, 'false', 'false', NULL, 'Select an option', 'Select an option', '', '', '', NULL),
(5, 'true', 'false', NULL, 'Yes', 'No', 'test', 'test', 'test', 13);

-- --------------------------------------------------------

--
-- Structure de la table `information_adresse`
--

DROP TABLE IF EXISTS `information_adresse`;
CREATE TABLE IF NOT EXISTS `information_adresse` (
  `id` int NOT NULL AUTO_INCREMENT,
  `adresse_permanent` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `ville` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `etat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `code_postal` varchar(255) DEFAULT NULL,
  `type_voyage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `is_arret_frequent` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `information_adresse`
--

INSERT INTO `information_adresse` (`id`, `adresse_permanent`, `ville`, `etat`, `code_postal`, `type_voyage`, `is_arret_frequent`) VALUES
(1, 'fdgds', 'gfdsg', 'test', '0', '', '0'),
(2, '', '', 'test', '0', '', '0'),
(3, '', '', 'test', '0', '', '0'),
(4, '', '', 'test', '0', '', '0'),
(5, '', '', 'test', '0', '', '0'),
(6, '', '', 'test', '0', '', '0'),
(7, '', '', '', '0', '', '0'),
(8, '', '', '', '0', '', '0'),
(9, '', '', '', '0', '', '0'),
(10, '', '', '', '0', '', '0'),
(11, '', '', '', '0', '', '0'),
(12, '', '', '', '0', '', '0'),
(13, '', '', '', '0', '', '0'),
(14, '', '', '', '0', '', '0'),
(15, '', '', '', '0', '', '0'),
(16, '', '', '', '0', '', '0'),
(17, '', '', '', '', 'Select an option', 'Select an option'),
(18, '', '', '', '', 'Select an option', 'Select an option'),
(19, '', '', '', '', 'Select an option', 'Select an option'),
(20, '', '', '', '', 'Select an option', 'Select an option'),
(21, '', '', '', '', 'Select an option', 'Select an option'),
(22, '', '', '', '', 'Select an option', 'Select an option'),
(23, '', '', '', '', 'Select an option', 'Select an option'),
(24, 'test', 'test', 'test', 'test', 'Arrival', 'Yes'),
(25, 'aa', 'aa', 'aa', 'aa', 'Arrival', 'No'),
(26, 'aa', 'aa', 'aa', 'aa', 'Arrival', 'No'),
(27, 'test', 'test', 'test', 'tet', 'Arrival', 'Yes');

-- --------------------------------------------------------

--
-- Structure de la table `passager`
--

DROP TABLE IF EXISTS `passager`;
CREATE TABLE IF NOT EXISTS `passager` (
  `id` int NOT NULL AUTO_INCREMENT,
  `noms` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nom_famille` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `date_naissance` varchar(255) DEFAULT NULL,
  `genre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pays_naissance` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pays_nationnalite` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `numero_passport` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `accept_sejour_hotel` varchar(255) DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `numero` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `stay_hotel` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `municipality` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `hotel_name` varchar(255) DEFAULT NULL,
  `travel_purpose` varchar(255) DEFAULT NULL,
  `days_staying` varchar(255) DEFAULT NULL,
  `origin_port` varchar(255) DEFAULT NULL,
  `disembarkation_port` varchar(255) DEFAULT NULL,
  `transportation_company` varchar(255) DEFAULT NULL,
  `flight_number` varchar(255) DEFAULT NULL,
  `name_bard_port` varchar(255) DEFAULT NULL,
  `flight_date` varchar(255) DEFAULT NULL,
  `profession_id` int UNSIGNED DEFAULT NULL,
  `civilite_id` int DEFAULT NULL,
  `information_adresse_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_passager_profession1_idx` (`profession_id`),
  KEY `fk_passager_civilite1_idx` (`civilite_id`),
  KEY `fk_passager_information_adresse1_idx` (`information_adresse_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `passager`
--

INSERT INTO `passager` (`id`, `noms`, `nom_famille`, `date_naissance`, `genre`, `pays_naissance`, `pays_nationnalite`, `numero_passport`, `accept_sejour_hotel`, `email`, `numero`, `stay_hotel`, `province`, `municipality`, `section`, `hotel_name`, `travel_purpose`, `days_staying`, `origin_port`, `disembarkation_port`, `transportation_company`, `flight_number`, `name_bard_port`, `flight_date`, `profession_id`, `civilite_id`, `information_adresse_id`) VALUES
(13, 'test', 'test', '2021-06-22', 'Feminine', 'test', 'test', 'test', 'true', 'test', 'test', NULL, 'Select an option', '', '', NULL, 'Select an option', '', 'test', 'STI - AEROPUERTO INTERNACIONAL DEL CIBAO', '', '', 'Select an option', '', 30, 27, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `profession`
--

DROP TABLE IF EXISTS `profession`;
CREATE TABLE IF NOT EXISTS `profession` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `profession`
--

INSERT INTO `profession` (`id`, `libelle`) VALUES
(1, 'Actor'),
(2, 'Analyst'),
(3, 'Artist'),
(4, 'Baker'),
(5, 'Blacksmith'),
(6, 'Carpenter'),
(7, 'Cashier'),
(8, 'CEO'),
(9, 'onsultant'),
(13, 'Engineer'),
(14, 'Entrepreneur'),
(15, 'Firefighter'),
(16, 'Freelancer'),
(17, 'Graphic'),
(18, 'Journalist'),
(19, 'Lawyer'),
(20, 'Merchant'),
(21, 'Painter'),
(22, 'Private'),
(23, 'Public'),
(24, 'Salesman'),
(25, 'Shoemaker'),
(26, 'Student'),
(27, 'Teacher'),
(28, 'Truck'),
(29, 'Worker'),
(30, 'Other');

-- --------------------------------------------------------

--
-- Structure de la table `symptome`
--

DROP TABLE IF EXISTS `symptome`;
CREATE TABLE IF NOT EXISTS `symptome` (
  `id` int NOT NULL AUTO_INCREMENT,
  `none` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `sorethoat` varchar(255) DEFAULT NULL,
  `muscle_paain` varchar(255) DEFAULT NULL,
  `headache` varchar(255) DEFAULT NULL,
  `runny_nose` varchar(255) DEFAULT NULL,
  `cough` varchar(255) DEFAULT NULL,
  `shaking_chills` varchar(255) DEFAULT NULL,
  `breathing_difficulty` varchar(255) DEFAULT NULL,
  `fatigue` varchar(255) DEFAULT NULL,
  `fever` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `symptome`
--

INSERT INTO `symptome` (`id`, `none`, `sorethoat`, `muscle_paain`, `headache`, `runny_nose`, `cough`, `shaking_chills`, `breathing_difficulty`, `fatigue`, `fever`) VALUES
(1, 'true', 'true', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false'),
(2, 'true', 'true', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false'),
(3, 'true', 'true', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false'),
(4, 'true', 'true', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false');

-- --------------------------------------------------------

--
-- Structure de la table `symptome_has_passager`
--

DROP TABLE IF EXISTS `symptome_has_passager`;
CREATE TABLE IF NOT EXISTS `symptome_has_passager` (
  `symptome_id` int NOT NULL,
  `passager_id` int NOT NULL,
  PRIMARY KEY (`symptome_id`,`passager_id`),
  KEY `fk_symptome_has_passager_passager1_idx` (`passager_id`),
  KEY `fk_symptome_has_passager_symptome1_idx` (`symptome_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `mdp`) VALUES
(1, 'admin', 'admin');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `demande_billet`
--
ALTER TABLE `demande_billet`
  ADD CONSTRAINT `fk_demande_billet_passager` FOREIGN KEY (`passager_id`) REFERENCES `passager` (`id`);

--
-- Contraintes pour la table `passager`
--
ALTER TABLE `passager`
  ADD CONSTRAINT `fk_passager_civilite1` FOREIGN KEY (`civilite_id`) REFERENCES `civilite` (`id`),
  ADD CONSTRAINT `fk_passager_information_adresse1` FOREIGN KEY (`information_adresse_id`) REFERENCES `information_adresse` (`id`),
  ADD CONSTRAINT `fk_passager_profession1` FOREIGN KEY (`profession_id`) REFERENCES `profession` (`id`);

--
-- Contraintes pour la table `symptome_has_passager`
--
ALTER TABLE `symptome_has_passager`
  ADD CONSTRAINT `fk_symptome_has_passager_passager1` FOREIGN KEY (`passager_id`) REFERENCES `passager` (`id`),
  ADD CONSTRAINT `fk_symptome_has_passager_symptome1` FOREIGN KEY (`symptome_id`) REFERENCES `symptome` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
