-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 15 déc. 2019 à 18:06
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
-- Base de données :  `reservation`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

DROP TABLE IF EXISTS `annonces`;
CREATE TABLE IF NOT EXISTS `annonces` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(200) DEFAULT NULL,
  `titre` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `date_anonnces` datetime NOT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` datetime DEFAULT NULL,
  `prix1` int(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `annonces`
--

INSERT INTO `annonces` (`id`, `id_user`, `titre`, `image`, `description`, `date_anonnces`, `date_debut`, `date_fin`, `prix1`) VALUES
(1, NULL, 'chambre  ', 'e615e20a916448965531fcdfe2fc7b7a.jpg', 'chambre avec un superficer de 1000 m2', '2019-12-08 19:12:18', NULL, NULL, 3000),
(2, NULL, 'Grand Salle', 'img2.jpg', 'une salle de reunion', '2019-11-05 00:00:00', NULL, NULL, 6000),
(3, NULL, 'salle conference', 'img1.jpg', 'une grand salle pour les reunions et les conference', '2019-11-20 09:42:06', NULL, NULL, 4000),
(21, NULL, 'rez de chaussez', '48314b28ddfd2fb3a683e5a6425755e3.png', 'sGsgw', '2019-12-08 10:12:00', NULL, NULL, 250);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `id_anonnce` int(255) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `date_reservation` date NOT NULL,
  `date_fin_reservation` date NOT NULL,
  `message_a` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `id_anonnce`, `id_user`, `date_reservation`, `date_fin_reservation`, `message_a`) VALUES
(16, 21, '  1', '2019-12-09', '2019-12-10', ''),
(17, 21, '  1', '2019-12-12', '2019-12-10', '');

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `user` varchar(200) NOT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `test`
--

INSERT INTO `test` (`id`, `user`, `date`) VALUES
(1, 'tyry', NULL),
(2, 'ER', NULL),
(3, 'ER11111', NULL),
(4, 'ER11111', NULL),
(6, 'ER11111', '2019-12-09 00:00:00'),
(7, 'ER11111', '2019-12-07 00:00:00'),
(8, 'ER11111', '2019-12-07 00:00:00'),
(9, 'ER11111', '2019-12-07 14:12:57');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `email` varchar(1000) NOT NULL,
  `pass` varchar(1000) NOT NULL,
  `role` varchar(500) NOT NULL,
  `nom` varchar(500) NOT NULL,
  `prenom` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `pass`, `role`, `nom`, `prenom`) VALUES
(1, 'test@gmail.com', '$2y$10$yRa9j9TiLeSty3hPR9ydzevwUPnMDQ4vPgatxdfTfzWlZ363IKZtC', 'admin', 'el mahdi', 'ait ben hamou');

-- --------------------------------------------------------

--
-- Structure de la table `validation`
--

DROP TABLE IF EXISTS `validation`;
CREATE TABLE IF NOT EXISTS `validation` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `id_anonnce` int(200) NOT NULL,
  `id_user` int(200) NOT NULL,
  `date_reservation` date NOT NULL,
  `date_fin_reservation` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
