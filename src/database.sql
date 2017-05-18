-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Jeu 18 Mai 2017 à 10:15
-- Version du serveur :  5.5.42
-- Version de PHP :  7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `larchitecture`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `raison_sociale` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activites` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fonction` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_postal` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `clients`
--

INSERT INTO `clients` (`id`, `raison_sociale`, `activites`, `nom`, `prenom`, `fonction`, `adresse`, `code_postal`, `ville`, `pays`, `telephone`, `fax`, `email`, `destination`, `statut`) VALUES
  (2, 'Adel', 'Ouvrage', 'Lecopte', 'Henry', 'Gérant', '22 rue Brossolette', '8058 ', 'Zurich', 'Suisse', '0385987840', '0385987842', 'contact@adel.com', 'Suisse', 'ponctuel'),
  (3, 'Archi Guyanne', 'Architecte', 'Popoli', 'José', 'Autoentrepreneur', '79 rue de l''indépendance', '97300', 'Cayenne', 'France', '0625809467', '', 'archguy@orange.fr', 'DOM-TOM', 'ponctuel');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `date` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_architectes` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `realisations` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rubriques` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lieu` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departement` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `newsletter`
--

INSERT INTO `newsletter` (`id`, `date`, `nom_architectes`, `realisations`, `rubriques`, `lieu`, `departement`) VALUES
  (61, 'ze', 'ezfzef', 'zefzef', 'zef', 'zef', 'zef'),
  (62, '01/05/1200', 'nleafeafeaz', 'kj:azbdkjbaz', 'lhazlidnlazn', 'laizhdaz', '13009'),
  (64, '01/05/1200', 'Souli', 'Les hlm de nanterre', 'Tetris', 'zef', '0000');

-- --------------------------------------------------------

--
-- Structure de la table `revues`
--

CREATE TABLE `revues` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `annee` int(11) NOT NULL,
  `regions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lien_calameo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `revues`
--

INSERT INTO `revues` (`id`, `numero`, `annee`, `regions`, `img`, `lien_calameo`) VALUES
  (11, 278, 2016, 'Belgique', 'img-content/', 'http://fr.calameo.com/read/00112129970991e922bc3'),
  (15, 275, 2016, 'Poitou-Charentes ', 'img-content/', 'http://fr.calameo.com/read/001121299cec3d11c563d'),
  (17, 274, 2015, 'Guyane', 'img-content/', 'http://fr.calameo.com/read/001121299fb1800308fe1'),
  (19, 272, 2015, 'Champagne Ardennes', 'img-content/', 'http://fr.calameo.com/read/001121299f6e3734c8772'),
  (21, 271, 2015, 'Réunion', 'img-content/', 'http://fr.calameo.com/read/00112129911ea51b43e15'),
  (23, 270, 2015, 'Saint-Martin', 'img-content/', 'http://fr.calameo.com/read/0011212990739cc3f4df6'),
  (25, 282, 2016, 'Rhônes-Alpes', 'img-content/', 'http://fr.calameo.com/read/001121299b858cd00ecf1'),
  (26, 277, 2016, 'Suisse', 'img-content/', 'http://fr.calameo.com/read/001121299a5d16b1a52eb'),
  (28, 273, 2015, 'Franche-Comté - Lorraine', 'img-content/', 'http://fr.calameo.com/read/001121299119599fc91a9'),
  (30, 269, 2015, 'Ile de France', 'img-content/', 'http://fr.calameo.com/read/001121299eae418c77d3a');

-- --------------------------------------------------------

--
-- Structure de la table `tarifs_fr`
--

CREATE TABLE `tarifs_fr` (
  `id` int(11) NOT NULL,
  `Prix` int(3) NOT NULL,
  `quantites` int(11) NOT NULL,
  `destination` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frais_de_port_France` int(11) NOT NULL,
  `frais_de_port_DOM` int(3) NOT NULL,
  `frais_de_port_TOM` int(3) NOT NULL,
  `frais_de_port_Europe` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `tarifs_fr`
--

INSERT INTO `tarifs_fr` (`id`, `Prix`, `quantites`, `destination`, `frais_de_port_France`, `frais_de_port_DOM`, `frais_de_port_TOM`, `frais_de_port_Europe`) VALUES
  (1, 19, 1, 'France', 3, 8, 10, 8),
  (3, 75, 5, '', 75, 75, 75, 75),
  (4, 155, 10, '', 30, 60, 85, 60),
  (7, 240, 20, '', 60, 80, 130, 80);

-- --------------------------------------------------------

--
-- Structure de la table `tarifs_suisse`
--

CREATE TABLE `tarifs_suisse` (
  `id` int(11) NOT NULL,
  `Prix` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantites` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frais_de_port_France` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frais_de_port_DOM` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frais_de_port_TOM` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frais_de_port_Europe` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `tarifs_suisse`
--

INSERT INTO `tarifs_suisse` (`id`, `Prix`, `quantites`, `destination`, `frais_de_port_France`, `frais_de_port_DOM`, `frais_de_port_TOM`, `frais_de_port_Europe`) VALUES
  (1, '22,99', '1', 'France', '3,63', '9,68', '12,10', '9,68'),
  (3, '90,75', '5', '', '15', '36,30', '54,45', '36,30'),
  (4, '187,55', '10', '', '36,30', '72,60', '102,85', '72,60'),
  (7, '290,40', '20', '', '72,60', '96,80', '157,30', '96,8');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `pass`) VALUES
  (1, 'benben', '73675debcd8a436be48e');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `revues`
--
ALTER TABLE `revues`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tarifs_fr`
--
ALTER TABLE `tarifs_fr`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tarifs_suisse`
--
ALTER TABLE `tarifs_suisse`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT pour la table `revues`
--
ALTER TABLE `revues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT pour la table `tarifs_fr`
--
ALTER TABLE `tarifs_fr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `tarifs_suisse`
--
ALTER TABLE `tarifs_suisse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;