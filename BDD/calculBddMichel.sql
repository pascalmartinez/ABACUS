-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 05 Juin 2018 à 10:34
-- Version du serveur :  5.7.22-0ubuntu0.16.04.1
-- Version de PHP :  7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `calculBddMichel`
--

-- --------------------------------------------------------

--
-- Structure de la table `Categorie`
--

CREATE TABLE `Categorie` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_exo` int(11) NOT NULL,
  `niveau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `Difficulté`
--

CREATE TABLE `Difficulté` (
  `id` int(11) NOT NULL,
  `classe` varchar(255) COLLATE utf8_bin NOT NULL,
  `niveau` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `Difficulté`
--

INSERT INTO `Difficulté` (`id`, `classe`, `niveau`) VALUES
(1, 'CP', 1),
(2, 'CE1', 2),
(3, 'CE2', 3),
(4, 'CM1', 4),
(5, 'CM2', 5),
(6, '6éme', 6),
(7, '5éme', 7),
(8, '4éme', 8),
(9, '3éme', 9),
(10, 'Autre', 10);

-- --------------------------------------------------------

--
-- Structure de la table `Exo`
--

CREATE TABLE `Exo` (
  `id` int(11) NOT NULL,
  `id_classe` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `enonce` text COLLATE utf8_bin,
  `img` blob,
  `niveau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `Exo`
--

INSERT INTO `Exo` (`id`, `id_classe`, `titre`, `enonce`, `img`, `niveau`) VALUES
(1, 0, 'billes', 'Marc a 25 billes.   	\r\nTom a 53 billes. \r\nCombien de billes Tom a-t-il de plus que Marc ?', NULL, 4),
(2, 0, 'Vélo', 'Un vélo coûte 255 euros. \r\nUn casque coûte 49 euros.\r\nCombien d’euros coûtent-ils', NULL, 4),
(3, 0, NULL, 'Il y a 6 personnes. \r\nOn donne 9 billes à chaque personne.\r\nCombien de billes faut-il pour tous ?', NULL, 4),
(4, 0, NULL, 'Paul a 4 enfants, chacun d’entre eux recevra le même nombre de stylos. Sachant qu’il y a 12 stylos en tout.\r\nCombien auront-ils de stylos chacun ?', NULL, 4),
(5, 0, NULL, 'On veut faire 10 kg de glace. Avec 3 L de lait on fait 2,5 kg de glace. Quelle quantité de lait faut-il ?', NULL, 4),
(6, 0, NULL, 'Avec 1 L de lait, combien de verres de 20cL, je peux remplir ?', NULL, 4),
(7, 0, NULL, 'Une pomme pèse 100g.\r\nCombien pèse une pomme en Kg ?', NULL, 4),
(8, 0, NULL, 'Une pomme pèse 100g.\r\nCombien pèse une pomme en Kg ?', NULL, 4),
(9, 0, NULL, 'Le boulanger fabrique 1 galette pour 12 personnes.\r\nCombien de personnes seront servies avec 5 galettes ?', NULL, 4),
(10, 0, NULL, 'On coupe un gâteau en 12 parts égales.	8/12 du gâteau est mangé. \r\nCombien reste-t-il de part ?', NULL, 4),
(11, 0, NULL, 'Un roman coûte 24,52 euros. \r\nUne BD coûte 15,66 euros. \r\nQuel est le prix pour ces deux livres ?', NULL, 4),
(12, 0, NULL, 'Pour faire 1/2 litre de soupe, il faut 200 grammes de carottes.\r\nQuelle quantité de carottes faut-il pour 9 litres de soupe ?', NULL, 4),
(13, 0, NULL, 'Simon a 1,45 € et Marc a 1,5  €.\r\nQui a le plus d’argent ?', NULL, 4),
(14, 0, NULL, ' Avec 3 kg de carottes on fait 4,5 L de soupe. Quelle quantité de soupe fait-on avec 1500 g de carottes ? ', NULL, 4),
(15, 0, NULL, 'Ecris le prix 1222,85 € (écriture chiffrée) en lettres (écriture littérale).', NULL, 4),
(16, 0, NULL, 'Léa a 20 ans et mesure 1,80m. A 8 ans elle mesurait 50% de sa taille actuelle. \r\nQuelle était sa taille à 8 ans ?', NULL, 4),
(17, 0, NULL, 'Classe du plus petit au plus grand les nombres  \r\n       8,10         8,01           8,121          8,13         8,6', NULL, 4),
(18, 0, NULL, 'Trois mêmes classeurs coûtent ensemble 12,75 euros.\r\nCombien coûte un classeur ?', NULL, 4),
(19, 0, NULL, 'Relie les réponses avec les bons calculs (plusieurs calculs peuvent avoir la même réponse) :\r\n\r\n6000+500+40+2	\r\n	\r\n4x1000+8x100+5x10+2x1	4852\r\n\r\n20+2+20+2	60 542\r\n\r\n60 000+ 500+40+2	22,22\r\n\r\n10x2+1x2+0,1x2+0,01x2\r\n\r\n4000+800+50+2\r\n', NULL, 4);

-- --------------------------------------------------------

--
-- Structure de la table `Info`
--

CREATE TABLE `Info` (
  `id` int(11) NOT NULL,
  `auteur` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `codeCapacite` int(11) NOT NULL,
  `ficheTechnique` int(11) NOT NULL,
  `etape` int(11) NOT NULL,
  `secteur` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `codeNAF` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `nom` varchar(25) COLLATE utf8_bin NOT NULL,
  `pseudo` varchar(25) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `password` varchar(15) COLLATE utf8_bin NOT NULL,
  `classe` int(11) NOT NULL,
  `mail` varchar(25) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Categorie`
--
ALTER TABLE `Categorie`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `niveau` (`niveau`),
  ADD UNIQUE KEY `id_exo` (`id_exo`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD KEY `niveau_2` (`niveau`);

--
-- Index pour la table `Difficulté`
--
ALTER TABLE `Difficulté`
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
  ADD UNIQUE KEY `pseudo` (`pseudo`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `id_categorie` (`id_categorie`),
  ADD KEY `classe` (`classe`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Categorie`
--
ALTER TABLE `Categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Difficulté`
--
ALTER TABLE `Difficulté`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `Exo`
--
ALTER TABLE `Exo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
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
-- Contraintes pour la table `Categorie`
--
ALTER TABLE `Categorie`
  ADD CONSTRAINT `Categorie_ibfk_7` FOREIGN KEY (`id`) REFERENCES `User` (`id_categorie`),
  ADD CONSTRAINT `Categorie_ibfk_8` FOREIGN KEY (`niveau`) REFERENCES `User` (`classe`),
  ADD CONSTRAINT `Categorie_ibfk_9` FOREIGN KEY (`id_exo`) REFERENCES `Exo` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
