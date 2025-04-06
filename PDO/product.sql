/**
 * @Author: Engeryu
 * @Date:   2021-07-01 14:19:00
 * @Last Modified by:   Engeryu
 * @Last Modified time: 2025-04-06 23:14:02
 */
-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 05 juil. 2021 à 16:47
-- Version du serveur : 10.4.19-MariaDB
-- Version de PHP : 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `catalogue`
--

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `idProduct` varchar(100) NOT NULL,
  `descProduct` text NOT NULL,
  `refProduct` varchar(32) NOT NULL,
  `imageProduct` varchar(32) NOT NULL,
  `qttProduct` int(11) NOT NULL,
  `stateProduct` tinyint(1) NOT NULL,
  `showProduct` tinyint(1) NOT NULL,
  `priceProduct` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`idProduct`, `descProduct`, `refProduct`, `imageProduct`, `qttProduct`, `stateProduct`, `showProduct`, `priceProduct`) VALUES
('Destin', 'Un jeu de société de plateau intergénérationnel ou petits et grands peuvent jouer ensemble.', 'Boite de jeu contenant plateau, ', 'destin.jpg', 23, 1, 1, 19.99),
('Wazabi', 'Un seul but : se débarrasser de ses dés. Le piège : moins vous en avez, plus ce sera difficile !', 'Une boite de jeu contenant carte', 'jeu-wazabi.jpg', 70, 1, 1, 13),
('Munchkin', 'Munchkin est un jeu de cartes et d\'affrontement. Partez à l\'aventure dans l\'univers Munchkin. Ambiance garantie !', 'Boîte de jeu contenant des carte', 'Munchkin.jpg', 31, 1, 1, 19.95),
('Tarot', 'Jeu de carte stratégique par contrat', 'Le principe du jeu du tarot est ', 'tarot.jpg', 98, 1, 0, 11),
('risk', 'Le monde appartient aux audacieux, l\'êtes-vous assez pour gagner ? Risk est le jeu qui illustre le mieux les jeux de conquête stratégique ! Déplacez vos régiments, choisissez votre stratégie et que la conquête du monde commence !', 'Jeu de plateau avec des pions, d', 'risk.jpg', 31, 1, 1, 25);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
