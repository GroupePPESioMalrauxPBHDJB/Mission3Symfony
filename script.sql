-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 14 Mars 2013 à 13:41
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `mdl`
--

-- --------------------------------------------------------

--
-- Structure de la table `contenu`
--

CREATE TABLE IF NOT EXISTS `contenu` (
  `id` int(11) NOT NULL,
  `Ordre` int(11) NOT NULL,
  `laFormationInformatique_id` int(11) NOT NULL,
  `leTheme_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`laFormationInformatique_id`,`leTheme_id`),
  KEY `IDX_467F39A320EF0096` (`laFormationInformatique_id`),
  KEY `IDX_467F39A3FBF381DB` (`leTheme_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `contenu`
--

INSERT INTO `contenu` (`id`, `Ordre`, `laFormationInformatique_id`, `leTheme_id`) VALUES
(1, 1, 1, 1),
(2, 2, 1, 2),
(3, 3, 1, 3),
(4, 4, 1, 4),
(5, 5, 1, 5),
(6, 6, 1, 6),
(7, 7, 1, 7),
(8, 8, 1, 8),
(9, 1, 2, 9),
(10, 2, 2, 10),
(11, 3, 2, 11),
(12, 4, 2, 7),
(13, 5, 2, 6),
(14, 6, 2, 12),
(15, 7, 2, 13),
(16, 8, 2, 14),
(17, 1, 3, 15),
(18, 2, 3, 16),
(19, 3, 3, 17),
(20, 4, 3, 18),
(21, 5, 3, 19),
(22, 6, 3, 20),
(23, 7, 3, 21),
(24, 8, 3, 22),
(25, 1, 4, 23),
(26, 2, 4, 24),
(27, 3, 4, 25),
(28, 4, 4, 26),
(29, 5, 4, 27),
(30, 6, 4, 28),
(31, 7, 4, 29),
(32, 1, 5, 30),
(33, 2, 5, 31),
(34, 3, 5, 32),
(35, 4, 5, 33),
(36, 5, 5, 34),
(37, 6, 5, 35),
(38, 7, 5, 36);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `contenu`
--
ALTER TABLE `contenu`
  ADD CONSTRAINT `FK_467F39A320EF0096` FOREIGN KEY (`laFormationInformatique_id`) REFERENCES `formationinformatique` (`id`),
  ADD CONSTRAINT `FK_467F39A3FBF381DB` FOREIGN KEY (`leTheme_id`) REFERENCES `theme` (`id`);

DELIMITER $$
--
-- Événements
--
CREATE DEFINER=`root`@`192.168.10.205` EVENT `SuppressionDigicode` ON SCHEDULE EVERY 1 SECOND STARTS '2012-12-13 17:09:43' ENDS '2022-12-13 17:09:42' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM  `digicode` WHERE (NOW( ) - dateHeureCreation) >=  '00000000010100'$$

DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
