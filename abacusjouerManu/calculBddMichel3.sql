-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 11 Juin 2018 à 11:16
-- Version du serveur :  5.7.22-0ubuntu0.16.04.1
-- Version de PHP :  7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `calculBddMichel3`
--

-- --------------------------------------------------------

--
-- Structure de la table `Difficulte`
--

CREATE TABLE `Difficulte` (
  `id` int(11) NOT NULL,
  `classe` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `niveau` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Contenu de la table `Difficulte`
--

INSERT INTO `Difficulte` (`id`, `classe`, `niveau`) VALUES
(1, 'CP', 1),
(2, 'CE1', 2),
(3, 'CE2', 3),
(4, 'CM1', 4),
(5, 'CM2', 5),
(6, '6 ième', 6),
(7, '5 ième', 7),
(8, '4 ième', 8),
(9, '3 ième', 9),
(10, 'Certificateur', 10);

-- --------------------------------------------------------

--
-- Structure de la table `Exo`
--

CREATE TABLE `Exo` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enonce` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `url_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_Info` int(11) NOT NULL,
  `id_Difficulte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `Exo`
--

INSERT INTO `Exo` (`id`, `titre`, `enonce`, `url_img`, `id_Info`, `id_Difficulte`) VALUES
(1, 'Test 1', 'je suis l\'énoncé!!!!!!!!!!!!!!!', NULL, 2, 3),
(2, 'Titre exo', 'hello jeune padawan', NULL, 1, 4),
(3, 'Billes', 'on va voir maintenant si ca marche', NULL, 2, 5),
(4, 'Velo', 'Calculer la distance que Pierre a effectué', NULL, 2, 6),
(5, 'Testttttttt', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.', NULL, 2, 8);

-- --------------------------------------------------------

--
-- Structure de la table `Info`
--

CREATE TABLE `Info` (
  `id` int(11) NOT NULL,
  `auteur` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `codecapacite` varchar(255) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `fichetechnique` varchar(255) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `etape` varchar(255) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `secteur` varchar(255) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `codenaf` varchar(255) COLLATE utf8_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Contenu de la table `Info`
--

INSERT INTO `Info` (`id`, `auteur`, `codecapacite`, `fichetechnique`, `etape`, `secteur`, `codenaf`) VALUES
(1, 'Manu', 'yghjkl', 'ftrgyhujik', 'tfgyhjk', 'tfgyhujik', 'gyhjik'),
(2, 'Pascal', 'tfyguijo', 'tyguhjik', 'gyhjk', 'rtyioj', 'ytuijo');

-- --------------------------------------------------------

--
-- Structure de la table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `classe` int(255) NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Contenu de la table `Users`
--

INSERT INTO `Users` (`id`, `pseudo`, `nom`, `prenom`, `password`, `classe`, `mail`) VALUES
(1, 'Pakito', 'Martinez', 'Pascal', '1234', 3, 'rghlerhger@ghjkdsz');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Difficulte`
--
ALTER TABLE `Difficulte`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `niveau` (`niveau`);

--
-- Index pour la table `Exo`
--
ALTER TABLE `Exo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_Difficulte` (`id_Difficulte`),
  ADD KEY `id_Info` (`id_Info`);

--
-- Index pour la table `Info`
--
ALTER TABLE `Info`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `classe` (`classe`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `Info`
--
ALTER TABLE `Info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Exo`
--
ALTER TABLE `Exo`
  ADD CONSTRAINT `Exo_ibfk_1` FOREIGN KEY (`id_Info`) REFERENCES `Info` (`id`),
  ADD CONSTRAINT `Exo_ibfk_2` FOREIGN KEY (`id_Difficulte`) REFERENCES `Difficulte` (`niveau`);

--
-- Contraintes pour la table `Users`
--
ALTER TABLE `Users`
  ADD CONSTRAINT `Users_ibfk_1` FOREIGN KEY (`classe`) REFERENCES `Difficulte` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
