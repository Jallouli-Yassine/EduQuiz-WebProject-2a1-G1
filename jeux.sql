-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 11 déc. 2021 à 12:56
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jeux`
--

-- --------------------------------------------------------

--
-- Structure de la table `jeux`
--

CREATE TABLE `jeux` (
  `nom_jeu` varchar(255) NOT NULL,
  `lien_jeu` varchar(255) NOT NULL,
  `prop_jeu` varchar(255) NOT NULL,
  `age_jeu` varchar(255) NOT NULL,
  `date_jeu` varchar(255) NOT NULL,
  `mode_jeu` varchar(255) NOT NULL,
  `img_jeu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `jeux`
--

INSERT INTO `jeux` (`nom_jeu`, `lien_jeu`, `prop_jeu`, `age_jeu`, `date_jeu`, `mode_jeu`, `img_jeu`) VALUES
('a', 'start.php', 'Aziz Bouharb', '6', '2021-02-01', 'Solo', 'hangman.jpg'),
('Hangman', 'start.php', 'Aziz Bouharb', '6', '2021-06-01', 'Solo', 'hangman.jpg'),
('Roll The Dice', 'index.html', 'Aziz Bouharb', '4', '2021-06-01', 'Multiplayer', 'dice.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `jeux`
--
ALTER TABLE `jeux`
  ADD PRIMARY KEY (`nom_jeu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
