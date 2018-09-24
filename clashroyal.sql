-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 01 Juin 2018 à 22:39
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `clashroyal`
--
CREATE DATABASE IF NOT EXISTS `clashroyal` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `clashroyal`;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `type`) VALUES
(1, 'Rush'),
(2, 'Tank'),
(3, 'Spawner/Setup'),
(4, 'Siège/Bâtiments'),
(5, 'Grattage'),
(6, 'Autre/Insolite');

-- --------------------------------------------------------

--
-- Structure de la table `listedeck`
--

CREATE TABLE IF NOT EXISTS `listedeck` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) NOT NULL,
  `pseudo` varchar(22) NOT NULL,
  `type` int(5) NOT NULL,
  `cout` float NOT NULL,
  `carte1` varchar(30) NOT NULL,
  `carte2` varchar(30) NOT NULL,
  `carte3` varchar(30) NOT NULL,
  `carte4` varchar(30) NOT NULL,
  `carte5` varchar(30) NOT NULL,
  `carte6` varchar(30) NOT NULL,
  `carte7` varchar(30) NOT NULL,
  `carte8` varchar(30) NOT NULL,
  `description` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pseudo` (`pseudo`),
  KEY `type` (`type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `listedeck`
--

INSERT INTO `listedeck` (`id`, `nom`, `pseudo`, `type`, `cout`, `carte1`, `carte2`, `carte3`, `carte4`, `carte5`, `carte6`, `carte7`, `carte8`, `description`) VALUES
(1, 'test de deck', 'test', 1, 3.5, 'Gobelins', 'Archers', 'Barbares', 'Barbares d''élite', 'Bombardier', 'Canon', 'Chauve-souris', 'Chevalier', 'Ajout d''un deck de test'),
(2, '', 'test2', 1, 5.2, 'Tour de l''enfer', 'Cimetière', 'Barbares', 'Bûcheron', 'Dragon de l''enfer', 'Gargouilles', 'Gobelins à lance', 'Horde de gargouilles', 'Autre ajout de test'),
(3, 'Deck de l''admin', 'fabio', 4, 5.3, 'Flèches', 'Arc-X', 'Mortier', 'Horde de gargouilles', 'Poison', 'Gobelins', 'Gang de gobelins', 'Electrocution', '');

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE IF NOT EXISTS `profil` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(22) NOT NULL,
  `mdp` varchar(150) NOT NULL,
  `email` varchar(60) NOT NULL,
  `trophee` int(6) DEFAULT NULL,
  `age` tinyint(6) DEFAULT NULL,
  `carte` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `id_2` (`id`),
  KEY `pseudo` (`pseudo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `profil`
--

INSERT INTO `profil` (`id`, `pseudo`, `mdp`, `email`, `trophee`, `age`, `carte`) VALUES
(1, 'fabio', '74dad9e7c8500a7fd750ba478263f5956dc3dee9', 'fabio@hotmail.com', 4023, NULL, NULL),
(2, 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'test@test.com', 1234, 18, 'Golem'),
(3, 'test2', '109f4b3c50d7b0df729d299bc6f8e9ef9066971f', 'test2@test2.com', 1234, NULL, NULL);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `listedeck`
--
ALTER TABLE `listedeck`
  ADD CONSTRAINT `fk_listeDeck_categorie` FOREIGN KEY (`type`) REFERENCES `categorie` (`id`),
  ADD CONSTRAINT `fk_listeDeck_profil` FOREIGN KEY (`pseudo`) REFERENCES `profil` (`pseudo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
