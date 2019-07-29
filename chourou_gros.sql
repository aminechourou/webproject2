-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 27 juil. 2019 à 17:37
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `chourou_gros`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `user` varchar(55) NOT NULL,
  `pwd` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`user`, `pwd`) VALUES
('admin', 'chourou');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `idcat` int(11) NOT NULL AUTO_INCREMENT,
  `nomcat` varchar(30) NOT NULL,
  PRIMARY KEY (`idcat`),
  UNIQUE KEY `nomcat` (`nomcat`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idcat`, `nomcat`) VALUES
(5, 'botte'),
(4, 'chaussure'),
(8, 'claquette'),
(7, 'espadrille');

-- --------------------------------------------------------

--
-- Structure de la table `categorie1`
--

DROP TABLE IF EXISTS `categorie1`;
CREATE TABLE IF NOT EXISTS `categorie1` (
  `idcat1` int(255) NOT NULL AUTO_INCREMENT,
  `nomcat1` varchar(255) NOT NULL,
  PRIMARY KEY (`idcat1`),
  UNIQUE KEY `nomcat1` (`nomcat1`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie1`
--

INSERT INTO `categorie1` (`idcat1`, `nomcat1`) VALUES
(4, 'autres'),
(2, 'orthopÃ©dique'),
(3, 'sÃ©curitÃ©');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `idprod` int(11) NOT NULL AUTO_INCREMENT,
  `ref` varchar(255) DEFAULT NULL,
  `nomp` varchar(30) NOT NULL,
  `prix` int(11) DEFAULT NULL,
  `couleur` varchar(30) NOT NULL,
  `nomcat` varchar(30) NOT NULL,
  `image` varchar(255) NOT NULL,
  `etat` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(255) NOT NULL,
  `nomcat1` varchar(255) NOT NULL,
  PRIMARY KEY (`idprod`),
  UNIQUE KEY `image` (`image`),
  UNIQUE KEY `ref` (`ref`),
  KEY `produit_ibfk_1` (`nomcat`),
  KEY `nomcat1` (`nomcat1`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`idprod`, `ref`, `nomp`, `prix`, `couleur`, `nomcat`, `image`, `etat`, `date`, `type`, `nomcat1`) VALUES
(27, '15mpo', 'sandale', 25, 'gris', 'claquette', '\\IMG_mules-1285.jpg', 'disponible', '2019-07-26', 'Homme 40/44', 'autres'),
(28, 'mdm55', 'talon', 25, 'rouge', 'chaussure', '\\children.jpg', 'disponible', '2019-07-26', 'Fafi 23/28', 'orthopÃ©dique'),
(29, 'jqfqi', 'mapda', 58, 'blanc', 'espadrille', '\\men.jpg', 'disponible', '2019-07-26', 'Cadet 35/38', 'sÃ©curitÃ©'),
(31, '45489', 'daidha', 484, 'blanc', 'chaussure', '4549.jpg', 'disponible', '2019-07-26', 'BÃ©bÃ© 18/22', 'orthopÃ©dique');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`nomcat`) REFERENCES `categorie` (`nomcat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produit_ibfk_2` FOREIGN KEY (`nomcat1`) REFERENCES `categorie1` (`nomcat1`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
