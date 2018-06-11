-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 05 Juin 2018 à 13:42
-- Version du serveur :  5.7.22-0ubuntu0.17.10.1
-- Version de PHP :  7.1.17-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `calculBddMichel2`
--

-- --------------------------------------------------------

--
-- Structure de la table `Difficulte`
--

CREATE TABLE `Difficulte` (
  `id` int(11) NOT NULL,
  `classe` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL,
  `niveau` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL,
  `id_exo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Difficulte`
--

INSERT INTO `Difficulte` (`id`, `classe`, `niveau`, `id_exo`) VALUES
(1, 'CP', '1', 0),
(2, 'CE1', '2', 0),
(3, 'CE2', '3', 0),
(4, 'CM1', '4', 0),
(5, 'CM2', '5', 0),
(6, '6 ème', '6', 0),
(7, '5 ème', '7', 0),
(8, '4 ème', '8', 0),
(9, '3 ème', '9', 0),
(10, 'AUTRE', '10', 0);

-- --------------------------------------------------------

--
-- Structure de la table `Exo`
--

CREATE TABLE `Exo` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `enonce` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `id_difficulte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Info`
--

CREATE TABLE `Info` (
  `id` int(11) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `codecapacite` varchar(255) NOT NULL,
  `fichetechnique` varchar(255) NOT NULL,
  `etape` varchar(255) NOT NULL,
  `secteur` varchar(255) NOT NULL,
  `codenaf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL,
  `prenom` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL,
  `classe` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL,
  `mail` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL,
  `id_difficulte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Difficulte`
--
ALTER TABLE `Difficulte`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Exo`
--
ALTER TABLE `Exo`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Info`
--
ALTER TABLE `Info`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_difficulte` (`id_difficulte`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Difficulte`
--
ALTER TABLE `Difficulte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `Exo`
--
ALTER TABLE `Exo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Info`
--
ALTER TABLE `Info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Exo`
--
ALTER TABLE `Exo`
  ADD CONSTRAINT `Exo_ibfk_1` FOREIGN KEY (`id`) REFERENCES `Info` (`id`);

--
-- Contraintes pour la table `User`
--
ALTER TABLE `User`
  ADD CONSTRAINT `User_ibfk_1` FOREIGN KEY (`id_difficulte`) REFERENCES `Difficulte` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
