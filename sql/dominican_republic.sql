-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 15 juin 2021 à 12:18
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
  `etat_civil` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `civilite`
--

INSERT INTO `civilite` (`id`, `etat_civil`) VALUES
(1, 'Free union'),
(2, 'Concubinage'),
(3, 'Married'),
(4, 'Single'),
(5, 'Other');

-- --------------------------------------------------------

--
-- Structure de la table `demande_billet`
--

DROP TABLE IF EXISTS `demande_billet`;
CREATE TABLE IF NOT EXISTS `demande_billet` (
  `id` int NOT NULL AUTO_INCREMENT,
  `accept_condition_generale` tinyint(1) DEFAULT NULL,
  `demande_immediat` tinyint(1) DEFAULT NULL,
  `apport_bagage` enum('Oui','Non') NOT NULL,
  `apport_nourriture` enum('Oui','Non') NOT NULL,
  `apport_marchandise_taxable` enum('Oui','Non') NOT NULL,
  `ammount` float NOT NULL,
  `currency` varchar(255) NOT NULL,
  `declare_origin_security` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `passager_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_demande_billet_passager_idx` (`passager_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `information_adresse`
--

DROP TABLE IF EXISTS `information_adresse`;
CREATE TABLE IF NOT EXISTS `information_adresse` (
  `id` int NOT NULL AUTO_INCREMENT,
  `adresse_permanent` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `etat` varchar(255) NOT NULL,
  `code_postal` int NOT NULL,
  `type_voyage` enum('arrivée','depart') DEFAULT NULL,
  `is_arret_frequent` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `passager`
--

DROP TABLE IF EXISTS `passager`;
CREATE TABLE IF NOT EXISTS `passager` (
  `id` int NOT NULL AUTO_INCREMENT,
  `noms` varchar(255) NOT NULL,
  `nom_famille` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `genre` enum('masculin','feminin','autre') NOT NULL,
  `pays_naissance` varchar(255) NOT NULL,
  `pays_nationnalite` varchar(255) NOT NULL,
  `numero_passport` varchar(255) NOT NULL,
  `accept_sejour_hotel` tinyint(1) NOT NULL,
  `email` varchar(255) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `profession_id` int UNSIGNED NOT NULL,
  `civilite_id` int NOT NULL,
  `information_adresse_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_passager_profession1_idx` (`profession_id`),
  KEY `fk_passager_civilite1_idx` (`civilite_id`),
  KEY `fk_passager_information_adresse1_idx` (`information_adresse_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `profession`
--

DROP TABLE IF EXISTS `profession`;
CREATE TABLE IF NOT EXISTS `profession` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
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
(10, 'Craftman'),
(11, 'Doctor'),
(12, 'Electrician'),
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
  `symptome` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
