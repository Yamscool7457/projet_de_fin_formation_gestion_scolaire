-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Serveur: 127.0.0.1
-- Généré le : Ven 01 Décembre 2023 à 11:55
-- Version du serveur: 5.5.10
-- Version de PHP: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `gestion_scolaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `absenceeleve`
--

CREATE TABLE IF NOT EXISTS `absenceeleve` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricule` varchar(250) NOT NULL,
  `matiere` varchar(250) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `classe` varchar(250) NOT NULL,
  `datedebut` date NOT NULL,
  `heureabsence` varchar(250) NOT NULL,
  `motifeabsence` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `absenceeleve`
--

INSERT INTO `absenceeleve` (`id`, `matricule`, `matiere`, `nom`, `prenom`, `classe`, `datedebut`, `heureabsence`, `motifeabsence`) VALUES
(4, '21lk', 'Anglais', 'Kabore', 'Fatime', '5eme', '2023-11-21', '14h00', 'retard'),
(5, '7785523', 'Histoire-Geographie', 'Sawadogo', 'Hassan', '4eme', '2023-10-12', '8h30', 'Malade'),
(7, '781512', 'Anglais', 'OUEDRAOGO', 'Hamsa', 'tleA', '2023-12-30', '15h00 a 17h00', 'non justifie'),
(8, '7896354', 'Mathematique', 'Kafando', 'Ethan', '5eme', '2023-11-24', '11h02', 'retard'),
(10, '7458', 'PC', 'OUEDRAOGO', 'Balkissa', 'tle', '0000-00-00', '8h30', 'non justifie'),
(11, '123', 'MAths', 'OUATTARA', 'KONE Aichata', '4eme', '2023-11-27', '11h00', 'Retard'),
(13, '1234', 'Francais', 'SANON', 'Aly', '5eme', '2023-11-27', '15:38', 'Malade'),
(14, '1234', 'EPS', 'SANON', 'Aly', '5eme', '2023-11-28', '09:00', 'Retard'),
(16, '123', 'Francais', 'KONE', 'Issa', '6eme', '2023-12-01', '09:41', 'Retard');

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE IF NOT EXISTS `classe` (
  `id` int(50) NOT NULL,
  `classe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `classe`
--

INSERT INTO `classe` (`id`, `classe`) VALUES
(1, '6eme'),
(2, '5eme'),
(3, '4eme'),
(4, '3eme'),
(5, '2ndeA'),
(6, '2ndeC'),
(7, '1ereA'),
(8, '1ereD'),
(9, 'TleA'),
(10, 'TleD');

-- --------------------------------------------------------

--
-- Structure de la table `inscription_eleves`
--

CREATE TABLE IF NOT EXISTS `inscription_eleves` (
  `code` int(11) NOT NULL AUTO_INCREMENT,
  `matricule` varchar(50) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `lieu` varchar(25) NOT NULL,
  `age` varchar(20) NOT NULL,
  `tel` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sexe` varchar(20) NOT NULL,
  `classe` varchar(25) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `photoUrl` varchar(50) NOT NULL,
  `nomTuteur` varchar(25) NOT NULL,
  `professionTuteur` varchar(25) NOT NULL,
  `telTuteur` varchar(25) NOT NULL,
  `adresseTuteur` varchar(25) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=64 ;

--
-- Contenu de la table `inscription_eleves`
--

INSERT INTO `inscription_eleves` (`code`, `matricule`, `nom`, `prenom`, `lieu`, `age`, `tel`, `email`, `sexe`, `classe`, `photo`, `photoUrl`, `nomTuteur`, `professionTuteur`, `telTuteur`, `adresseTuteur`) VALUES
(1, '123', 'KONE', 'Issa', 'Banfora', '20', 72906430, 'issahema7777@gmail.com', '', '6eme', 'icon3.jpg', '', 'Issa HEMA', 'Informaticien', '66273528', 'Secteur 8'),
(2, '123', 'HEMA', 'Issa', 'Banfora', '20', 72906430, 'issahema7777@gmail.com', 'Homme', '3eme', 'icon5.jpg', '', 'Issa HEMA', 'Informaticien', '66273528', 'Secteur 8'),
(3, '123', 'HEMA', 'Issa', 'Banfora', '20', 72906430, 'issahema7777@gmail.com', 'Homme', '6eme', 'icon9.jpg', '', 'Issa HEMA', 'Informaticien', '66273528', 'Secteur 8'),
(5, '123', 'HEMA', 'Issa', 'Banfora', '20', 72906430, 'issahema7777@gmail.com', 'Homme', '6eme', 'icon9.jpg', '', 'Issa HEMA', 'Informaticien', '66273528', 'Secteur 8'),
(7, '123', 'HEMA', 'Issa', 'Banfora', '20', 72906430, 'issahema7777@gmail.com', 'Homme', '6eme', 'icon9.jpg', '', 'Issa HEMA', 'Informaticien', '66273528', 'Secteur 8'),
(8, '123', 'HEMA', 'Issa', 'Banfora', '20', 72906430, 'issahema7777@gmail.com', 'Homme', '6eme', 'icon9.jpg', '', 'Issa HEMA', 'Informaticien', '66273528', 'Secteur 8'),
(9, '123', 'HEMA', 'Issa', 'Banfora', '20', 72906430, 'issahema7777@gmail.com', 'Homme', '6eme', 'icon9.jpg', '', 'Issa HEMA', 'Informaticien', '66273528', 'Secteur 8'),
(10, '123', 'HEMA', 'Issa', 'Banfora', '20', 72906430, 'issahema7777@gmail.com', 'Homme', '6eme', 'icon9.jpg', '', 'Issa HEMA', 'Informaticien', '66273528', 'Secteur 8'),
(11, '123', 'HEMA', 'Issa', 'Banfora', '20', 72906430, 'issahema7777@gmail.com', 'Homme', '6eme', 'icon9.jpg', '', 'Issa HEMA', 'Informaticien', '66273528', 'Secteur 8'),
(12, '123', 'HEMA', 'Issa', 'Banfora', '20', 72906430, 'issahema7777@gmail.com', 'Homme', '6eme', 'icon9.jpg', '', 'Issa HEMA', 'Informaticien', '66273528', 'Secteur 8'),
(13, '123', 'HEMA', 'Issa', 'Banfora', '20', 72906430, 'issahema7777@gmail.com', 'Homme', '6eme', 'icon9.jpg', '', 'Issa HEMA', 'Informaticien', '66273528', 'Secteur 8'),
(14, '123', 'HEMA', 'Issa', 'Banfora', '20', 72906430, 'issahema7777@gmail.com', 'Homme', '6eme', 'icon9.jpg', '', 'Issa HEMA', 'Informaticien', '66273528', 'Secteur 8'),
(15, '123', 'HEMA', 'Issa', 'Banfora', '20', 72906430, 'issahema7777@gmail.com', 'Homme', '6eme', 'icon9.jpg', '', 'Issa HEMA', 'Informaticien', '66273528', 'Secteur 8'),
(16, '123', 'HEMA', 'Issa', 'Banfora', '20', 72906430, 'issahema7777@gmail.com', 'Homme', '6eme', 'icon9.jpg', '', 'Issa HEMA', 'Informaticien', '66273528', 'Secteur 8'),
(17, '123', 'HEMA', 'Issa', 'Banfora', '20', 72906430, 'issahema7777@gmail.com', 'Homme', '6eme', 'icon9.jpg', '', 'Issa HEMA', 'Informaticien', '66273528', 'Secteur 8'),
(18, '123', 'HEMA', 'Issa', 'Banfora', '20', 72906430, 'issahema7777@gmail.com', 'Homme', '6eme', 'icon9.jpg', '', 'Issa HEMA', 'Informaticien', '66273528', 'Secteur 8'),
(19, '123', 'HEMA', 'Issa', 'Banfora', '20', 72906430, 'issahema7777@gmail.com', 'Homme', '6eme', 'icon9.jpg', '', 'Issa HEMA', 'Informaticien', '66273528', 'Secteur 8'),
(20, '123', 'HEMA', 'Issa', 'Banfora', '20', 72906430, 'issahema7777@gmail.com', 'Homme', '6eme', 'icon9.jpg', '', 'Issa HEMA', 'Informaticien', '66273528', 'Secteur 8'),
(21, '123', 'HEMA', 'Issa', 'Banfora', '20', 72906430, 'issahema7777@gmail.com', 'Homme', '6eme', 'icon9.jpg', '', 'Issa HEMA', 'Informaticien', '66273528', 'Secteur 8'),
(22, '123', 'HEMA', 'Issa', 'Banfora', '20', 72906430, 'issahema7777@gmail.com', 'Homme', '6eme', 'icon9.jpg', '', 'Issa HEMA', 'Informaticien', '66273528', 'Secteur 8'),
(23, '123', 'HEMA', 'Issa', 'Banfora', '20', 72906430, 'issahema7777@gmail.com', 'Homme', '6eme', 'icon9.jpg', '', 'Issa HEMA', 'Informaticien', '66273528', 'Secteur 8'),
(24, '123', 'HEMA', 'Issa', 'Banfora', '20', 72906430, 'issahema7777@gmail.com', 'Homme', '6eme', 'icon9.jpg', '', 'Issa HEMA', 'Informaticien', '66273528', 'Secteur 8'),
(25, '123', 'HEMA', 'Issa', 'Banfora', '20', 72906430, 'issahema7777@gmail.com', 'Homme', '6eme', 'icon9.jpg', '', 'Issa HEMA', 'Informaticien', '66273528', 'Secteur 8'),
(26, '123', 'HEMA', 'Issa', 'Banfora', '20', 72906430, 'issahema7777@gmail.com', 'Homme', '6eme', 'icon9.jpg', '', 'Issa HEMA', 'Informaticien', '66273528', 'Secteur 8'),
(27, '123', 'HEMA', 'Issa', 'Banfora', '20', 72906430, 'issahema7777@gmail.com', 'Homme', '6eme', 'icon9.jpg', '', 'Issa HEMA', 'Informaticien', '66273528', 'Secteur 8'),
(28, '123', 'HEMA', 'Issa', 'Banfora', '20', 72906430, 'issahema7777@gmail.com', 'Homme', '6eme', 'icon9.jpg', '', 'Issa HEMA', 'Informaticien', '66273528', 'Secteur 8'),
(29, '123', 'HEMA', 'Issa', 'Banfora', '20', 72906430, 'issahema7777@gmail.com', 'Homme', '6eme', 'icon9.jpg', '', 'Issa HEMA', 'Informaticien', '66273528', 'Secteur 8'),
(30, '1234', 'SANON', 'Aly', 'Banfora', '23', 86559865, 'issmo7@gmail.com', 'Homme', '5eme', 'icon3.jpg', '', 'SANON', 'Daouda', '57710930', 'secteur 22'),
(31, '1254', 'KARAMA', 'Namara', 'Bobo-Dioulasso ', '18', 78596415, 'karamanamara@gmail', 'Femme', '2ndeA', 'icon4.jpg', 'new_photo/icon6.jpg', 'Issa HEMA', 'Informaticien', '57710930', 'Secteur 8'),
(33, '1001', 'KONATE', 'Sali', 'bobo', '15', 58697412, 'sali@gmail.com', 'H', '3eme', 'icon6.jpg', 'new_photo/icon4.jpg', 'KONATE', 'Aly', '78963214', 'Bobo, sect 22'),
(34, '1001', 'KONATE', 'Sali', 'bobo', '15', 58697412, 'sali@gmail.com', 'H', '3eme', 'icon6.jpg', 'icon6.jpg', 'KONATE', 'Aly', '78963214', 'Bobo, sect 22'),
(35, '1001', 'KONATE', 'Sali', 'bobo', '15', 58697412, 'sali@gmail.com', 'H', '3eme', 'icon6.jpg', 'new_photo/icon6.jpg', 'KONATE', 'Aly', '78963214', 'Bobo, sect 22'),
(36, '1001', 'KONATE', 'Sali', 'bobo', '15', 58697412, 'sali@gmail.com', 'H', '3eme', 'icon6.jpg', 'new_photo/icon6.jpg', 'KONATE', 'Aly', '78963214', 'Bobo, sect 22'),
(37, '1001', 'KONATE', 'Sali', 'bobo', '15', 58697412, 'sali@gmail.com', 'H', '3eme', 'icon6.jpg', 'new_photo/icon6.jpg', 'KONATE', 'Aly', '78963214', 'Bobo, sect 22'),
(38, '1001', 'KONATE', 'Sali', 'bobo', '15', 58697412, 'sali@gmail.com', 'H', '3eme', 'icon6.jpg', 'new_photo/icon6.jpg', 'KONATE', 'Aly', '78963214', 'Bobo, sect 22'),
(39, '1001', 'KONATE', 'Sali', 'bobo', '15', 58697412, 'sali@gmail.com', 'H', '3eme', 'icon10.jpg', 'new_photo/icon10.jpg', 'KONATE', 'Aly', '78963214', 'Bobo, sect 22'),
(40, '1001', 'KONATE', 'Sali', 'bobo', '15', 58697412, 'sali@gmail.com', 'H', '3eme', 'icon10.jpg', 'new_photo/icon10.jpg', 'KONATE Aly', 'Enseignant', '78963214', 'Bobo, sect 22'),
(41, '1254', 'HEMA', 'Issa', 'Bobo-Dioulasso ', '18', 5468454, 'issahema7777@gmail.com', 'H', '2ndeC', 'icon2.jpg', 'new_photo/icon2.jpg', 'Issa HEMA', 'Enseignant', '66273528', 'Secteur 8'),
(42, '1254', 'HEMA', 'Issa', 'Bobo-Dioulasso ', '18', 5468454, 'issahema7777@gmail.com', 'H', '2ndeC', 'icon2.jpg', 'new_photo/icon2.jpg', 'Issa HEMA', 'Enseignant', '66273528', 'Secteur 8'),
(43, '1254', 'HEMA', 'Issa', 'Bobo-Dioulasso ', '18', 5468454, 'issahema7777@gmail.com', 'H', '2ndeC', 'icon2.jpg', 'new_photo/icon2.jpg', 'Issa HEMA', 'Enseignant', '66273528', 'Secteur 8'),
(44, '1254', 'HEMA', 'Issa', 'Bobo-Dioulasso ', '18', 5468454, 'issahema7777@gmail.com', 'H', '2ndeC', 'icon2.jpg', 'new_photo/icon2.jpg', 'Issa HEMA', 'Enseignant', '66273528', 'Secteur 8'),
(45, '1254', 'HEMA', 'Issa', 'Bobo-Dioulasso ', '18', 5468454, 'issahema7777@gmail.com', 'H', '2ndeC', 'icon2.jpg', 'new_photo/icon2.jpg', 'Issa HEMA', 'Enseignant', '66273528', 'Secteur 8'),
(46, '1254', 'HEMA', 'Issa', 'Bobo-Dioulasso ', '18', 5468454, 'issahema7777@gmail.com', 'H', '2ndeC', 'icon2.jpg', 'new_photo/icon2.jpg', 'Issa HEMA', 'Enseignant', '66273528', 'Secteur 8'),
(47, '1254', 'HEMA', 'Issa', 'Bobo-Dioulasso ', '18', 5468454, 'issahema7777@gmail.com', 'H', '2ndeC', 'icon2.jpg', 'new_photo/icon2.jpg', 'Issa HEMA', 'Enseignant', '66273528', 'Secteur 8'),
(48, '1254', 'HEMA', 'Issa', 'Bobo-Dioulasso ', '18', 5468454, 'issahema7777@gmail.com', 'H', '2ndeC', 'icon2.jpg', 'new_photo/icon2.jpg', 'Issa HEMA', 'Enseignant', '66273528', 'Secteur 8'),
(49, '1254', 'HEMA', 'Issa', 'Bobo-Dioulasso ', '18', 5468454, 'issahema7777@gmail.com', 'H', '2ndeC', 'icon2.jpg', 'new_photo/icon2.jpg', 'Issa HEMA', 'Enseignant', '66273528', 'Secteur 8'),
(50, '1254', 'HEMA', 'Issa', 'Bobo-Dioulasso ', '18', 5468454, 'issahema7777@gmail.com', 'H', '2ndeC', 'icon2.jpg', 'new_photo/icon2.jpg', 'Issa HEMA', 'Enseignant', '66273528', 'Secteur 8'),
(51, '1254', 'HEMA', 'Issa', 'Bobo-Dioulasso ', '18', 5468454, 'issahema7777@gmail.com', 'H', '2ndeC', 'icon2.jpg', 'new_photo/icon2.jpg', 'Issa HEMA', 'Enseignant', '66273528', 'Secteur 8'),
(52, '1254', 'HEMA', 'Issa', 'Bobo-Dioulasso ', '18', 5468454, 'issahema7777@gmail.com', 'H', '2ndeC', 'icon2.jpg', 'new_photo/icon2.jpg', 'Issa HEMA', 'Enseignant', '66273528', 'Secteur 8'),
(53, '1254', 'HEMA', 'Issa', 'Bobo-Dioulasso ', '18', 5468454, 'issahema7777@gmail.com', 'H', '2ndeC', 'icon2.jpg', 'new_photo/icon2.jpg', 'Issa HEMA', 'Enseignant', '66273528', 'Secteur 8'),
(54, '1254', 'HEMA', 'Issa', 'Bobo-Dioulasso ', '18', 5468454, 'issahema7777@gmail.com', 'H', '2ndeC', 'icon2.jpg', 'new_photo/icon2.jpg', 'Issa HEMA', 'Enseignant', '66273528', 'Secteur 8'),
(55, '1254', 'HEMA', 'Issa', 'Bobo-Dioulasso ', '18', 5468454, 'issahema7777@gmail.com', 'H', '2ndeC', 'icon2.jpg', 'new_photo/icon2.jpg', 'Issa HEMA', 'Enseignant', '66273528', 'Secteur 8'),
(56, '1254', 'HEMA', 'Issa', 'Bobo-Dioulasso ', '18', 5468454, 'issahema7777@gmail.com', 'H', '2ndeC', 'icon2.jpg', 'new_photo/icon2.jpg', 'Issa HEMA', 'Enseignant', '66273528', 'Secteur 8'),
(57, '1254', 'HEMA', 'Issa', 'Bobo-Dioulasso ', '18', 5468454, 'issahema7777@gmail.com', 'H', '2ndeC', 'icon2.jpg', 'new_photo/icon2.jpg', 'Issa HEMA', 'Enseignant', '66273528', 'Secteur 8'),
(58, '1254', 'HEMA', 'Issa', 'Bobo-Dioulasso ', '18', 5468454, 'issahema7777@gmail.com', 'H', '2ndeC', 'icon2.jpg', 'new_photo/icon2.jpg', 'Issa HEMA', 'Enseignant', '66273528', 'Secteur 8'),
(59, '1254', 'HEMA', 'Issa', 'Bobo-Dioulasso ', '18', 5468454, 'issahema7777@gmail.com', 'H', '2ndeC', 'icon2.jpg', 'new_photo/icon2.jpg', 'Issa HEMA', 'Enseignant', '66273528', 'Secteur 8'),
(60, '1254', 'HEMA', 'Issa', 'Bobo-Dioulasso ', '18', 5468454, 'issahema7777@gmail.com', 'H', '2ndeC', 'icon2.jpg', 'new_photo/icon2.jpg', 'Issa HEMA', 'Enseignant', '66273528', 'Secteur 8'),
(61, '1254', 'HEMA', 'Issa', 'Bobo-Dioulasso ', '18', 5468454, 'issahema7777@gmail.com', 'H', '2ndeC', 'icon2.jpg', 'new_photo/icon2.jpg', 'Issa HEMA', 'Enseignant', '66273528', 'Secteur 8'),
(62, '1004', 'HEMA', 'Issa', 'Banfora', '23', 74570118, 'issahema7777@gmail.com', 'H', '2ndeA', '', 'new_photo/', 'Issa HEMA', 'Informaticien', '78963214', 'Secteur 8'),
(63, '1004', 'HEMA', 'Issa', 'Banfora', '23', 74570118, 'issahema7777@gmail.com', 'H', '2ndeA', 'icon2.jpg', 'new_photo/icon2.jpg', 'Issa HEMA', 'Informaticien', '78963214', 'Secteur 8');

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE IF NOT EXISTS `matiere` (
  `id` int(50) NOT NULL,
  `matiere` varchar(50) NOT NULL,
  `coefficient` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `matiere`
--

INSERT INTO `matiere` (`id`, `matiere`, `coefficient`) VALUES
(1, 'Francais', 3),
(2, 'Mathematiques', 5),
(3, 'Anglais', 2),
(4, 'SVT', 3),
(5, 'HG', 2),
(6, 'Physique-Chimie', 5),
(7, 'EPS', 2);

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE IF NOT EXISTS `note` (
  `id` int(50) NOT NULL,
  `matricule` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `classe` varchar(50) NOT NULL,
  `matiere` varchar(50) NOT NULL,
  `coefficient` int(10) NOT NULL,
  `note1` int(10) NOT NULL,
  `note2` int(10) NOT NULL,
  `moyenne` int(10) NOT NULL,
  `ponderee` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `note`
--

INSERT INTO `note` (`id`, `matricule`, `nom`, `classe`, `matiere`, `coefficient`, `note1`, `note2`, `moyenne`, `ponderee`) VALUES
(1, '100', 'HEMA Issa', '6eme', 'Francais', 3, 15, 15, 0, 45),
(2, '1001', 'KONE Fanta', '5eme', 'HG', 2, 15, 15, 0, 30),
(3, '100', 'HEMA Issa', '4eme', 'SVT', 3, 15, 15, 0, 45),
(4, '1001', 'KONE Fanta', '3eme', 'ANG', 2, 15, 15, 0, 30),
(5, '100', 'HEMA Issa', '2ndeA', 'ALL', 3, 15, 15, 0, 45),
(6, '1001', 'KONE Fanta', '2ndeC', 'PC', 2, 15, 15, 0, 30),
(7, '100', 'HEMA Issa', '1ereA', 'FR', 3, 15, 15, 0, 45),
(8, '1001', 'KONE Fanta', '1ereD', 'Maths', 2, 15, 15, 0, 30),
(9, '100', 'HEMA', '6eme', 'Francais', 3, 0, 0, 0, 0),
(10, '1001', 'KONE', '5eme', 'HG', 2, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `note_classe`
--

CREATE TABLE IF NOT EXISTS `note_classe` (
  `id` int(50) NOT NULL,
  `matricule` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `classe` varchar(50) NOT NULL,
  `matiere` varchar(50) NOT NULL,
  `coefficient` int(10) NOT NULL,
  `note1` int(10) NOT NULL,
  `note2` int(10) NOT NULL,
  `moyenne` int(10) NOT NULL,
  `ponderee` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `note_classe`
--


-- --------------------------------------------------------

--
-- Structure de la table `trimestre`
--

CREATE TABLE IF NOT EXISTS `trimestre` (
  `id` int(50) NOT NULL,
  `matricule` varchar(250) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `classe` varchar(250) NOT NULL,
  `trimestre` varchar(250) NOT NULL,
  `coefficient` varchar(250) NOT NULL,
  `trimestre1` varchar(250) NOT NULL,
  `trimestre2` varchar(250) NOT NULL,
  `trimestre3` varchar(250) NOT NULL,
  `ponderee` varchar(250) NOT NULL,
  `moyenne` varchar(250) NOT NULL,
  `rang` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `trimestre`
--

INSERT INTO `trimestre` (`id`, `matricule`, `nom`, `classe`, `trimestre`, `coefficient`, `trimestre1`, `trimestre2`, `trimestre3`, `ponderee`, `moyenne`, `rang`) VALUES
(1, '100', 'HEMA Issa', '6eme', '1er', '22', '0', '0', '0', '0', '0', '2'),
(2, '1001', 'KONE Fanta', '6eme', '1er', '22', '0', '0', '0', '0', '0', '1');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pasword` varchar(250) NOT NULL,
  `role` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `pasword`, `role`) VALUES
(1, 'OUEDRAOGO', 'Yacouba', 'yamscoolodg@gmail.com', '1234', 'admin'),
(2, 'Issa', 'HEMA', 'issahema7777@gmail.com', '1234', ''),
(3, 'SOMA', 'Ane', 'ane@gmail.com', '0000', ''),
(6, 'HEMA', 'Joe', 'joe@gmail.com', '1111', '');
