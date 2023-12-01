-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 22 nov. 2023 à 16:48
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_scolaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `absenceeleve`
--

CREATE TABLE `absenceeleve` (
  `id` int(11) NOT NULL,
  `matricule` varchar(250) NOT NULL,
  `matiere` varchar(250) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `classe` varchar(250) NOT NULL,
  `datedebut` date NOT NULL,
  `heureabsence` varchar(250) NOT NULL,
  `motifeabsence` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `absenceeleve`
--

INSERT INTO `absenceeleve` (`id`, `matricule`, `matiere`, `nom`, `prenom`, `classe`, `datedebut`, `heureabsence`, `motifeabsence`) VALUES
(4, '87788445521lk', 'Anglais', 'Kaboré', 'Fatime', '5eme', '2023-11-21', '14h00', 'retard'),
(5, '7785523', 'Histoire-Geographie', 'Sawadogo', 'Hassan', '4eme', '2023-10-12', '8h30', 'retard'),
(7, '781512', 'Anglais', 'OUEDRAOGO', 'Hamsa', 'tleA', '2023-12-30', '15h00 a 17h00', 'non justifie'),
(8, '7896354', 'Mathematique', 'Kafando', 'Ethan', '5eme', '2023-11-24', '11h02', 'retard'),
(10, '7458', 'PC', 'OUEDRAOGO', 'Balkissa', 'tle', '0000-00-00', '8h30', 'non justifie');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `absenceeleve`
--
ALTER TABLE `absenceeleve`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `absenceeleve`
--
ALTER TABLE `absenceeleve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
