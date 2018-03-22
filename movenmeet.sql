-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 22 mars 2018 à 14:15
-- Version du serveur :  5.6.38
-- Version de PHP :  7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `movenmeet`
--

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `Id_eve` int(10) NOT NULL,
  `Nom` varchar(60) NOT NULL,
  `Lieu` varchar(60) NOT NULL,
  `Date` date NOT NULL,
  `Horaire` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`Id_eve`, `Nom`, `Lieu`, `Date`, `Horaire`) VALUES
(1, 'e', 'e', '2018-03-08', '2018-03-06 07:00:00'),
(2, 'a', 'a', '2018-03-05', '2018-03-01 00:00:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`Id_eve`);
