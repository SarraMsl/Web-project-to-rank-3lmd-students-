-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 09 déc. 2022 à 19:24
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `codershiyar`
--

-- --------------------------------------------------------

--
-- Structure de la table `tablename`
--

CREATE TABLE `tablename` (
  `id` int(255) NOT NULL,
  `Nometprenoms` varchar(100) DEFAULT NULL,
  `Matricule` int(100) DEFAULT NULL,
  `MS1` float DEFAULT NULL,
  `MS2` double DEFAULT NULL,
  `MS3` double DEFAULT NULL,
  `MS4` double DEFAULT NULL,
  `MS5` double DEFAULT NULL,
  `MS6` double DEFAULT NULL,
  `MGF` double DEFAULT NULL,
  `MGC` double DEFAULT NULL,
  `sep_01` varchar(2) NOT NULL,
  `sep_02` varchar(2) NOT NULL,
  `sep_03` varchar(2) NOT NULL,
  `sep` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tablename`
--

INSERT INTO `tablename` (`id`, `Nometprenoms`, `Matricule`, `MS1`, `MS2`, `MS3`, `MS4`, `MS5`, `MS6`, `MGF`, `MGC`, `sep_01`, `sep_02`, `sep_03`, `sep`) VALUES
(1, 'ZIDANE Abderrazak', 2147483647, 18.04, 17.55, 15.28, 17.16, 17.53, 16.24, 16.97, 17, 'gi', 'rt', 'gl', 'gi'),
(2, 'KHENFER Bilal', 2147483647, 15.95, 16.67, 16.54, 15.34, 15.92, 17.54, 16.33, 16, 'gl', 'rt', 'gi', 'gl'),
(3, 'MBONEKO Rich-aymar', 2147483647, 15.51, 15.34, 15.93, 15.33, 16.23, 16.17, 15.75, 16, 'gi', 'rt', 'gl', 'gi'),
(4, 'NIYUNGEKO Prosper', 2147483647, 16.18, 15.49, 14.61, 14.81, 15.17, 16.13, 15.4, 15, 'rt', 'gl', 'gi', 'rt'),
(5, 'MWIZERO Chris Alain', 2147483647, 15.76, 14.97, 15.37, 15.22, 15.17, 15.58, 15.35, 15, 'rt', 'gl', 'gi', 'rt'),
(6, 'HABA Maxime', 2147483647, 14.68, 15.74, 15.8, 14.17, 15.4, 15.6, 15.23, 15, 'gl', 'gi', 'rt', 'gl'),
(7, 'GATONI Rosine Guilene', 2147483647, 14.93, 15.08, 15.46, 14.51, 13.87, 15.83, 14.95, 15, 'gi', 'rt', 'gl', 'gi'),
(8, 'SAFFAR Akila', 2147483647, 14.35, 14.16, 13.21, 12.43, 14.69, 15.58, 14.07, 14, 'gi', 'gl', 'rt', 'gi'),
(9, 'BENYAHIA Samia', 2147483647, 14.07, 12.51, 13.16, 12.38, 15.35, 15.04, 13.75, 14, 'gi', 'gl', 'rt', 'gi'),
(10, 'AISSAT Mohammed Abbas', 2147483647, 13.1, 13.52, 12.45, 11.55, 13.61, 15.04, 13.21, 13, 'rt', 'gi', 'gl', 'rt'),
(11, 'OUILEM ABDELHAFIDH', 2147483647, 12.86, 12.53, 12, 11.51, 13.59, 16, 13.08, 13, 'rt', 'gi', 'gl', 'rt'),
(12, 'NEDJARI BENHADJ ALI Hemza', 2147483647, 12.05, 10.74, 12.59, 13.68, 11.47, 17.42, 12.99, 13, 'gi', 'gl', 'rt', 'gi'),
(13, 'HAOUZI Ameur Younès', 2147483647, 11.26, 11.25, 13.85, 13.4, 9.93, 17, 12.78, 13, 'gi', 'gl', 'rt', 'gl'),
(14, 'SLIMANE Hicham', 2147483647, 13.4, 9.56, 14.69, 11.01, 11.56, 15.67, 12.65, 13, 'gl', 'rt', 'gi', 'gl'),
(15, 'BEKKAR Ilyes Abdelhamid', 2147483647, 11.68, 12.21, 13.69, 10.89, 12.54, 13.7, 12.45, 12, 'gi', 'gl', 'rt', 'gl'),
(16, 'AISSAOUI Fatma', 2147483647, 10.91, 11.41, 12.67, 11.8, 11.24, 15.75, 12.3, 12, 'rt', 'gl', 'gi', 'rt'),
(17, 'NEKKI Ramzi', 2147483647, 11.54, 12.44, 12.31, 11.58, 0, 14, 12.26, 12, 'rt', 'gl', 'gi', 'rt'),
(18, 'MAATOUG Saad', 2147483647, 11.5, 13.77, 12.8, 11.05, 10.76, 13.01, 12.15, 12, 'gl', 'rt', 'gi', 'gl');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tablename`
--
ALTER TABLE `tablename`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tablename`
--
ALTER TABLE `tablename`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
