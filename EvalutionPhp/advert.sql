-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 23 nov. 2021 à 15:40
-- Version du serveur :  5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `wf3_php_intermediaire_theo`
--

-- --------------------------------------------------------

--
-- Structure de la table `advert`
--

DROP TABLE IF EXISTS `advert`;
CREATE TABLE `advert` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `code_postal` float NOT NULL,
  `city` varchar(25) NOT NULL,
  `type` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `reservation_message` varchar(512) DEFAULT NULL,
  `reserved` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `advert`
--

INSERT INTO `advert` (`id`, `title`, `description`, `code_postal`, `city`, `type`, `price`, `reservation_message`, `reserved`) VALUES
(3, 'Maison Normande', 'C\'est le description de la maison normande', 46578, 'Grandville', 'Vendre', 450000, NULL, NULL),
(4, 'Petit appartement parisien', 'C\'est le description d\'un petite appartement parisien', 75000, 'Paris', 'Louer', 1300, NULL, NULL),
(5, 'Grand duplex', 'Cest la description du grand duplex', 33000, 'Bordeaux', 'Acheter', 450000, NULL, NULL),
(6, 'Appartement 1', 'Cest la description du grand duplex', 33000, 'Bordeaux', 'Acheter', 450000, NULL, NULL),
(7, 'Appartement 2', 'Cest la description du grand duplex', 33000, 'Bordeaux', 'Acheter', 450000, NULL, NULL),
(8, 'Appartement 3', 'Cest la description du grand duplex', 33000, 'Bordeaux', 'Acheter', 450000, NULL, NULL),
(9, 'Appartement 4', 'Cest la description du grand duplex', 33000, 'Bordeaux', 'Acheter', 450000, NULL, NULL),
(10, 'Appartement 5', 'Cest la description du grand duplex', 33000, 'Bordeaux', 'Acheter', 450000, NULL, NULL),
(11, 'Appartement 6', 'Cest la description du grand duplex', 33000, 'Bordeaux', 'Acheter', 450000, NULL, NULL),
(12, 'Appartement 7', 'Cest la description du grand duplex', 33000, 'Bordeaux', 'Acheter', 450000, NULL, NULL),
(13, 'Appartement 8', 'Cest la description du grand duplex', 33000, 'Bordeaux', 'Acheter', 450000, NULL, NULL),
(14, 'Appartement 9', 'Cest la description du grand duplex', 33000, 'Bordeaux', 'Acheter', 450000, NULL, NULL),
(15, 'Appartement 10', 'Cest la description du grand duplex', 33000, 'Bordeaux', 'Acheter', 450000, NULL, 1),
(16, 'Appartement 11', 'Cest la description du grand duplex', 33000, 'Bordeaux', 'Acheter', 450000, NULL, NULL),
(17, 'Appartement 12', 'Cest la description du grand duplex', 33000, 'Bordeaux', 'Acheter', 450000, NULL, NULL),
(18, 'Appartement 13', 'Cest la description du grand duplex', 33000, 'Bordeaux', 'Acheter', 450000, NULL, NULL),
(19, 'Appartement 14', 'Cest la description du grand duplex', 33000, 'Bordeaux', 'Acheter', 450000, 'Coucou je reserve', 1),
(20, 'Appartement 15', 'Cest la description du grand duplex', 33000, 'Bordeaux', 'Acheter', 450000, NULL, NULL),
(21, 'Appartement 16', 'Cest la description du grand duplex', 33000, 'Bordeaux', 'Acheter', 450000, NULL, NULL),
(22, 'Appartement 17', 'Cest la description du grand duplex', 33000, 'Bordeaux', 'Acheter', 450000, NULL, 1),
(23, 'Appartement 18', 'Cest la description du grand duplex', 33000, 'Bordeaux', 'Acheter', 450000, NULL, 1),
(24, 'Dofus', 'Road to level 200', 456, 'Bonta', 'Louer', 1, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `advert`
--
ALTER TABLE `advert`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `advert`
--
ALTER TABLE `advert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
