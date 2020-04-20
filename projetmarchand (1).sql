-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 20 avr. 2020 à 12:47
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetmarchand`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `type` varchar(1) NOT NULL,
  `quantity` int(11) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `provenance` varchar(255) NOT NULL,
  `venteBool` varchar(1) NOT NULL DEFAULT 'y',
  `picture` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `name`, `type`, `quantity`, `prix`, `provenance`, `venteBool`, `picture`) VALUES
(6, 'tomate', 'l', 13, '13', 'angers', 'y', '250px-Méga-Nanméouïe-ROSA.png'),
(5, 'tomate', 'l', 13, '13', 'angers', 'y', '50129.png'),
(7, 'tomate', 'l', 13, '13', '13', 'y', '250px-Méga-Nanméouïe-ROSA.png'),
(8, 'tomate', 'l', 13, '13', 'angers', 'y', '50129.png'),
(9, 'tomate', 'l', 13, '13', 'angers', 'y', '250px-Méga-Nanméouïe-ROSA.png'),
(10, 'tomate', 'l', 13, '13', 'angers', 'y', '50129.png');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `identifiant`, `password`) VALUES
(1, 'admin', '$2y$10$774QaVW21NPzWiWcPpARPetWSD8jpP8S8WtWlIFvtPmne8qMZ4NCy');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
