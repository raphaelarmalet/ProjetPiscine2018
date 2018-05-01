-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 01 mai 2018 à 15:47
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetweb`
--
CREATE DATABASE IF NOT EXISTS `projetweb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `projetweb`;

-- --------------------------------------------------------

--
-- Structure de la table `album`
--

DROP TABLE IF EXISTS `album`;
CREATE TABLE IF NOT EXISTS `album` (
  `NJaime` int(11) NOT NULL,
  `LPhoto` longblob NOT NULL,
  `NomAlbum` varchar(255) NOT NULL,
  `IDUSER` varchar(255) NOT NULL,
  PRIMARY KEY (`NomAlbum`,`IDUSER`),
  KEY `IDUSER` (`IDUSER`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `conversation`
--

DROP TABLE IF EXISTS `conversation`;
CREATE TABLE IF NOT EXISTS `conversation` (
  `Lmessage` varchar(255) NOT NULL,
  `LDate` varchar(255) NOT NULL,
  `LIDuser` varchar(255) NOT NULL,
  `LFichier` varchar(255) NOT NULL,
  `Texte` varchar(255) NOT NULL,
  PRIMARY KEY (`LIDuser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `emploi`
--

DROP TABLE IF EXISTS `emploi`;
CREATE TABLE IF NOT EXISTS `emploi` (
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
-- Structure de la table `employeur`
--

DROP TABLE IF EXISTS `employeur`;
CREATE TABLE IF NOT EXISTS `employeur` (
  `IDEmployeur` int(11) NOT NULL AUTO_INCREMENT,
  `IDUser` varchar(255) NOT NULL,
  `Poste` varchar(255) NOT NULL,
  PRIMARY KEY (`IDEmployeur`),
  KEY `IDUser` (`IDUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
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
-- Structure de la table `publication`
--

DROP TABLE IF EXISTS `publication`;
CREATE TABLE IF NOT EXISTS `publication` (
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `NJaime` int(11) NOT NULL,
  `NCommentaire` int(11) NOT NULL,
  `NPartage` int(11) NOT NULL,
  `Rang` int(11) NOT NULL,
  `Fichier` blob NOT NULL,
  `Texte` text NOT NULL,
  `IDUser` varchar(255) NOT NULL,
  PRIMARY KEY (`Date`,`IDUser`),
  KEY `IDUser` (`IDUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `reseaux`
--

DROP TABLE IF EXISTS `reseaux`;
CREATE TABLE IF NOT EXISTS `reseaux` (
  `IDUser` varchar(255) NOT NULL,
  `LAmis` varchar(255) NOT NULL,
  PRIMARY KEY (`IDUser`),
  KEY `IDUser` (`IDUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
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
-- Contraintes pour la table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`IDUSER`) REFERENCES `user` (`IDuser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `emploi`
--
ALTER TABLE `emploi`
  ADD CONSTRAINT `emploi_ibfk_1` FOREIGN KEY (`IDEmployeur`) REFERENCES `employeur` (`IDEmployeur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `employeur`
--
ALTER TABLE `employeur`
  ADD CONSTRAINT `employeur_ibfk_1` FOREIGN KEY (`IDUser`) REFERENCES `user` (`IDuser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `publication`
--
ALTER TABLE `publication`
  ADD CONSTRAINT `publication_ibfk_1` FOREIGN KEY (`IDUser`) REFERENCES `user` (`IDuser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reseaux`
--
ALTER TABLE `reseaux`
  ADD CONSTRAINT `reseaux_ibfk_1` FOREIGN KEY (`IDUser`) REFERENCES `user` (`IDuser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
