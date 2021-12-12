-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 11 déc. 2021 à 13:09
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
-- Base de données : `eduquiz`
--

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

CREATE TABLE `eleve` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `event` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `elevee`
--

CREATE TABLE `elevee` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `event` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `elevee`
--

INSERT INTO `elevee` (`id`, `name`, `email`, `event`) VALUES
(53, 'dssuiukh', 'zeinebbayoudh13@gmail.com', 'Sqsqdsdq'),
(54, 'dasd', 'zeinebbayoudh13@gmail.com', 'Sqsqdsdq'),
(55, 'dasd', 'zeinebbayoudh13@gmail.com', 'Sqsqdsdq'),
(56, 'cyberbullying', 'zeinebbayoudh13@gmail.com', 'Sqsqdsdq');

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE `event` (
  `idevent` int(100) NOT NULL,
  `nameevent` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL,
  `numberparticipate` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `event`
--

INSERT INTO `event` (`idevent`, `nameevent`, `email`, `subject`, `date`, `time`, `numberparticipate`, `image`) VALUES
(48, 'as', 'adsbayoudh@gmail.com', 'Sqsqdsdq', '2021-12-11', '10:47', 5, '1534591.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `event2`
--

CREATE TABLE `event2` (
  `idevent` int(11) NOT NULL,
  `nameevent` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL,
  `numberparticipate` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `event2`
--

INSERT INTO `event2` (`idevent`, `nameevent`, `email`, `subject`, `date`, `time`, `numberparticipate`, `image`) VALUES
(24, 'Sqsqdsdq', 'zeinebbayoudh13@gmail.com', 'Sqsqdsdq', '2021-12-10', '10:47', 4, '273240.jpg'),
(25, 'Sqsqdsdq', 'zeinebbayoudh13@gmail.com', 'Sqsqdsdq', '2021-12-09', '09:56', 5, '1534591.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `eleve`
--
ALTER TABLE `eleve`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `elevee`
--
ALTER TABLE `elevee`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`idevent`);

--
-- Index pour la table `event2`
--
ALTER TABLE `event2`
  ADD PRIMARY KEY (`idevent`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `elevee`
--
ALTER TABLE `elevee`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `idevent` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `event2`
--
ALTER TABLE `event2`
  MODIFY `idevent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `eleve`
--
ALTER TABLE `eleve`
  ADD CONSTRAINT `fk_eleve_event` FOREIGN KEY (`event`) REFERENCES `event` (`idevent`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
