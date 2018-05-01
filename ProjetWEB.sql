-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mar. 01 mai 2018 à 15:02
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ProjetWEB`
--
CREATE DATABASE IF NOT EXISTS `ProjetWEB` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ProjetWEB`;

-- --------------------------------------------------------

--
-- Structure de la table `Album`
--

DROP TABLE IF EXISTS `Album`;
CREATE TABLE IF NOT EXISTS `Album` (
  `NJaime` int(11) NOT NULL,
  `LPhoto` longblob NOT NULL,
  `NomAlbum` varchar(255) NOT NULL,
  `IDUSER` varchar(255) NOT NULL,
  PRIMARY KEY (`NomAlbum`,`IDUSER`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Conversation`
--

DROP TABLE IF EXISTS `Conversation`;
CREATE TABLE IF NOT EXISTS `Conversation` (
  `Lmessage` varchar(255) NOT NULL,
  `LDate` varchar(255) NOT NULL,
  `LIDuser` varchar(255) NOT NULL,
  `LFichier` varchar(255) NOT NULL,
  `Texte` varchar(255) NOT NULL,
  PRIMARY KEY (`LIDuser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Emploi`
--

DROP TABLE IF EXISTS `Emploi`;
CREATE TABLE IF NOT EXISTS `Emploi` (
  `Profil` varchar(255) NOT NULL,
  `Intitule` varchar(255) NOT NULL,
  `Remuneration` int(11) NOT NULL,
  `Contrat` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `IDEmployeur` int(11) NOT NULL,
  `LIDEtudiant` varchar(255) NOT NULL,
  PRIMARY KEY (`Profil`),
  KEY `IDEmployeur` (`IDEmployeur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `EMPLOYEUR`
--

DROP TABLE IF EXISTS `EMPLOYEUR`;
CREATE TABLE IF NOT EXISTS `EMPLOYEUR` (
  `IDEmployeur` int(11) NOT NULL AUTO_INCREMENT,
  `IDUser` varchar(255) NOT NULL,
  `Poste` varchar(255) NOT NULL,
  PRIMARY KEY (`IDEmployeur`),
  KEY `IDUser` (`IDUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ETUDIANT`
--

DROP TABLE IF EXISTS `ETUDIANT`;
CREATE TABLE IF NOT EXISTS `ETUDIANT` (
  `IDEtudiant` int(11) NOT NULL AUTO_INCREMENT,
  `IDUser` varchar(255) NOT NULL,
  `ING` int(11) NOT NULL,
  `Majeur` varchar(255) NOT NULL,
  `Stage` varchar(255) NOT NULL,
  `Associatif` varchar(255) NOT NULL,
  PRIMARY KEY (`IDEtudiant`),
  KEY `IDUser` (`IDUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Publication`
--

DROP TABLE IF EXISTS `Publication`;
CREATE TABLE IF NOT EXISTS `Publication` (
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `NJaime` int(11) NOT NULL,
  `NCommentaire` int(11) NOT NULL,
  `NPartage` int(11) NOT NULL,
  `Rang` int(11) NOT NULL,
  `Fichier` blob NOT NULL,
  `Texte` text NOT NULL,
  `NomAuteur` varchar(255) NOT NULL,
  `PreAuteur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Reseaux`
--

DROP TABLE IF EXISTS `Reseaux`;
CREATE TABLE IF NOT EXISTS `Reseaux` (
  `LAmis` varchar(255) NOT NULL,
  `IDUser` varchar(255) NOT NULL,
  PRIMARY KEY (`LAmis`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

DROP TABLE IF EXISTS `User`;
CREATE TABLE IF NOT EXISTS `User` (
  `IDuser` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prénom` varchar(255) NOT NULL,
  `Mdp` varchar(255) NOT NULL,
  `Sexe` tinyint(1) NOT NULL DEFAULT '1',
  `Statut` tinyint(1) NOT NULL DEFAULT '1',
  `Photo` blob NOT NULL,
  `Langue` varchar(255) NOT NULL,
  `Diplome` varchar(255) NOT NULL,
  `Telephone` varchar(255) NOT NULL,
  `Age` int(11) NOT NULL,
  PRIMARY KEY (`IDuser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Emploi`
--
ALTER TABLE `Emploi`
  ADD CONSTRAINT `emploi_ibfk_1` FOREIGN KEY (`IDEmployeur`) REFERENCES `EMPLOYEUR` (`IDEmployeur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `EMPLOYEUR`
--
ALTER TABLE `EMPLOYEUR`
  ADD CONSTRAINT `employeur_ibfk_1` FOREIGN KEY (`IDUser`) REFERENCES `User` (`IDuser`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
