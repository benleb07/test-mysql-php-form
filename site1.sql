-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 07 fév. 2021 à 14:15
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
-- Base de données : `site1`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `ip` varchar(20) NOT NULL,
  `date_inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pseudo`, `email`, `password`, `ip`, `date_inscription`) VALUES
(1, 'lou', 'lou@lou.lou', 'lou', '127.0.0.4', '2021-02-07 13:52:39'),
(2, 'test', 'test@test.test', '$2y$12$Nqfku7V2p36E0cGAZB.fqeXlqg..aUeLB4e9SAnpinjRZncgkJOmq', '127.0.0.1', '2021-02-07 14:24:29'),
(3, 'benjamin', 'benjamin.lebon07@gmail.com', '$2y$12$goM4KR9rbMQeD4ttieWuferqKMuXi0vkDB7uB8ipZIbidD.GefhYK', '127.0.0.1', '2021-02-07 14:25:51'),
(4, 'ma', 'ma@ma.ma', '$2y$12$2Ck7ZV.7NAwKAHszDWcP1OGB1RbLA3D9GpAVzd2GJ7WxZqV9xRx5m', '127.0.0.1', '2021-02-07 14:50:19'),
(5, 'ijdidiodiddccc', 'ijdidididididididididididiididididi@dqa.d', '$2y$12$mJStF4Bq810MHhfPtr3.0.LT1r3zgwNp6l93viiskLQYAYHRLp8Ce', '127.0.0.1', '2021-02-07 15:06:21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
