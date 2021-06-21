-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 16 juin 2021 à 13:29
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hotel`
--

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(16),
  `cin` varchar(10),
  `name` text,
  `email` varchar(100),
  `phone` int(100),
  `country` text,
  `gender` text,
   
  
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

DROP TABLE IF EXISTS `RDV`;
CREATE TABLE IF NOT EXISTS `RDV` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) F,
  `s_RDV` text(1000),
  `date_RDV` varchar(255),
  `time_rdv` varchar(255),
  PRIMARY KEY (`id`)
  FOREIGN KEY (`id_user`) REFERENCES client(`id_user`)
  FOREIGN KEY (`time_rdv`) REFERENCES time(`time_rdv`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

/* table time*/
DROP TABLE IF EXISTS `time`;
CREATE TABLE IF NOT EXISTS `time` (
  `id_time` int(11) NOT NULL AUTO_INCREMENT,
  `time_rdv` varchar(255),
  PRIMARY KEY (`id_time`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
