-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 11 Mars 2017 à 21:40
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `upsell_blog_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `titre` varchar(75) NOT NULL,
  `texte` text NOT NULL,
  `auteur` varchar(50) NOT NULL,
  `date_parution` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `texte`, `auteur`, `date_parution`) VALUES
(1, 'lorem upsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'adel  more', '2017-03-11'),
(2, 'upsom lores', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type ', 'silvain gutier', '2017-03-11'),
(3, 'torem tor demis cas', 'Lorem text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type ', 'silvain gutier', '2017-03-11'),
(4, 'torem tor demis cas', 'Lorem text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type ', 'silvain gutier', '2017-03-11'),
(5, 'torem tor demis cas', 'Lorem text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type ', 'silvain gutier', '2017-03-11'),
(6, 'torem tor demis cas', 'Lorem text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type ', 'silvain gutier', '2017-03-11'),
(7, 'torem tor demis cas', 'Lorem text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type ', 'silvain gutier', '2017-03-11'),
(8, 'torem tor demis cas', 'Lorem text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type ', 'silvain gutier', '2017-03-11'),
(9, 'torem tor demis cas', 'Lorem text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type ', 'silvain gutier', '2017-03-11');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `texte` text NOT NULL,
  `commentaire_auteur` varchar(50) NOT NULL,
  `id_article` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `texte`, `commentaire_auteur`, `id_article`) VALUES
(1, 'lorem ipsum dollar', 'lorent salisse', 1),
(2, 'lorem ipsum vernis calite', 'lisa cudy', 1),
(3, 'lorem ipsum vernis calite', 'caterine dumas', 2),
(37, 'lorem ipsum vernis calite lorem ipsum vernis calite lorem ipsum vernis calite', 'alexandre delaous', 4),
(38, 'lorem ipsum dollar lorem ipsum dollar vlorem ipsum dollar', 'david pierrette', 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
