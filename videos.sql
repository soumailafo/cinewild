-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 15 Juin 2018 à 00:09
-- Version du serveur :  5.7.9
-- Version de PHP :  5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `videos`
--

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

DROP TABLE IF EXISTS `video`;
CREATE TABLE IF NOT EXISTS `video` (
  `id_video` int(11) NOT NULL AUTO_INCREMENT,
  `lien_video` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `titre` varchar(200) NOT NULL,
  `duree` time NOT NULL,
  `annee` year(4) NOT NULL,
  `auteur` varchar(150) NOT NULL,
  `categorie` varchar(140) NOT NULL,
  PRIMARY KEY (`id_video`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `video`
--

INSERT INTO `video` (`id_video`, `lien_video`, `description`, `titre`, `duree`, `annee`, `auteur`, `categorie`) VALUES
(1, 'ssopzyoCZbY', 'Cité de Dieu est un film qui laisse voir beaucoup de chose.', 'La cité de Dieu', '01:30:00', 1985, 'Inconnu', 'Action'),
(2, '-1My9mGh7kk', 'Le film rambo est un scenario qui a émerveillé  les hommes de son époque', 'Rambo', '01:31:13', 2008, 'Arnold', 'Action'),
(4, 'HdpMtU7J-zg', 'Un film français très comique. ', 'La ch''tite famille', '01:45:27', 2016, 'Billy Baker', 'Comedie');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
