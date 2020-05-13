-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 13 mai 2020 à 17:33
-- Version du serveur :  10.2.6-MariaDB-log
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gpav2`
--

-- --------------------------------------------------------

--
-- Structure de la table `accessoire`
--

CREATE TABLE `accessoire` (
  `id` int(11) NOT NULL,
  `typeaccessoire_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `marque` varchar(50) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `comment` text NOT NULL,
  `image` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `accessoire_vehicule`
--

CREATE TABLE `accessoire_vehicule` (
  `id` int(11) NOT NULL,
  `accessoire_id` int(11) NOT NULL,
  `vehicule_id` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `employe_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(150) DEFAULT NULL,
  `adresse` varchar(150) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(200) DEFAULT NULL,
  `matricule` varchar(50) DEFAULT NULL,
  `login` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `is_new` int(11) NOT NULL DEFAULT 0,
  `image` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `is_allowed` int(11) NOT NULL DEFAULT 1,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1,
  `visibility` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `name`, `lastname`, `adresse`, `email`, `contact`, `matricule`, `login`, `password`, `is_new`, `image`, `created`, `modified`, `is_allowed`, `protected`, `valide`, `visibility`) VALUES
(1, 'Super Administrateur', NULL, '...', 'info@devaris21.com', '...', NULL, 'root', '5e9795e3f3ab55e7790a6283507c085db0d764fc', 1, 'default.png', '2020-05-12 12:58:20', '2020-05-12 12:58:20', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `affectation`
--

CREATE TABLE `affectation` (
  `id` int(11) NOT NULL,
  `typeaffectation_id` int(11) NOT NULL,
  `vehicule_id` int(11) NOT NULL,
  `carplan_id` int(11) NOT NULL,
  `comment` text DEFAULT NULL,
  `etat_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `affectation`
--

INSERT INTO `affectation` (`id`, `typeaffectation_id`, `vehicule_id`, `carplan_id`, `comment`, `etat_id`, `created`, `modified`, `protected`, `valide`) VALUES
(1, 1, 2, 1, 'ceci est lq', 4, '2020-05-12 16:34:55', '2020-05-12 16:34:55', 0, 1),
(2, 1, 2, 1, 'ljkjk!k', 2, '2020-05-13 11:14:29', '2020-05-13 11:14:29', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `approvisionnement`
--

CREATE TABLE `approvisionnement` (
  `id` int(11) NOT NULL,
  `equipement_id` int(11) DEFAULT NULL,
  `accessoire_id` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `employe_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `assurance`
--

CREATE TABLE `assurance` (
  `id` int(11) NOT NULL,
  `assurance` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `numero_piece` varchar(200) DEFAULT NULL,
  `vehicule_id` int(11) NOT NULL,
  `date_etablissement` date NOT NULL,
  `started` date NOT NULL,
  `finished` date NOT NULL,
  `price` int(11) NOT NULL,
  `etatpiece_id` int(11) NOT NULL,
  `image1` varchar(200) DEFAULT NULL,
  `image2` varchar(200) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `assurance`
--

INSERT INTO `assurance` (`id`, `assurance`, `name`, `numero_piece`, `vehicule_id`, `date_etablissement`, `started`, `finished`, `price`, `etatpiece_id`, `image1`, `image2`, `created`, `modified`, `protected`, `valide`) VALUES
(1, 'NSIA Assurance', 'ASSURANCE 05-2020', 'DR5545EGTJJT', 2, '2020-05-06', '2020-05-22', '2020-07-26', 100000, 1, NULL, '10eba78d.jpg', '2020-05-13 11:59:10', '2020-05-13 11:59:10', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `carplan`
--

CREATE TABLE `carplan` (
  `id` int(11) NOT NULL,
  `matricule` varchar(20) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(150) DEFAULT NULL,
  `sexe_id` int(2) DEFAULT NULL,
  `adresse` varchar(150) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(200) DEFAULT NULL,
  `fonction` varchar(100) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `is_new` int(11) NOT NULL DEFAULT 0,
  `image` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `allowed` int(11) NOT NULL DEFAULT 1,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1,
  `visibility` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `carplan`
--

INSERT INTO `carplan` (`id`, `matricule`, `name`, `lastname`, `sexe_id`, `adresse`, `email`, `contact`, `fonction`, `login`, `password`, `is_new`, `image`, `created`, `modified`, `allowed`, `protected`, `valide`, `visibility`) VALUES
(1, 'ZE4589445', 'Manyessé 45', 'Manyessé', 1, NULL, 'ari45@ari.com', '47 58 93 21', 'PDT du Conseil', '7538105', 'c653358c9901102ed09cbab661dffbbcdd438289', 0, 'default.png', '2020-05-12 16:34:55', '2020-05-12 16:34:55', 1, 0, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `carte`
--

CREATE TABLE `carte` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cartegrise`
--

CREATE TABLE `cartegrise` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `numero_piece` varchar(200) DEFAULT NULL,
  `energie_id` int(11) NOT NULL,
  `vehicule_id` int(11) NOT NULL,
  `date_etablissement` date NOT NULL,
  `price` int(11) NOT NULL,
  `couleur` varchar(200) NOT NULL,
  `image1` varchar(200) DEFAULT NULL,
  `image2` varchar(200) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cartegrise`
--

INSERT INTO `cartegrise` (`id`, `name`, `numero_piece`, `energie_id`, `vehicule_id`, `date_etablissement`, `price`, `couleur`, `image1`, `image2`, `created`, `modified`, `protected`, `valide`) VALUES
(1, 'CARTE GRISE 2020', 'DR5545EGTJJT', 4, 2, '2020-05-15', 450001, 'Belge Or', '00947213.jpg', 'edbbadd9.jpeg', '2020-05-13 11:49:46', '2020-05-13 11:49:46', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `cession`
--

CREATE TABLE `cession` (
  `id` int(11) NOT NULL,
  `utilisateur_id` int(20) DEFAULT NULL,
  `vehicule_id` int(11) NOT NULL,
  `carplane_id` int(11) NOT NULL,
  `objet` text NOT NULL,
  `comment` text NOT NULL,
  `started` date NOT NULL,
  `finished` date NOT NULL,
  `employe_id` int(11) NOT NULL,
  `etat_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `chauffeur`
--

CREATE TABLE `chauffeur` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(150) DEFAULT NULL,
  `matricule` varchar(50) DEFAULT NULL,
  `sexe_id` int(2) NOT NULL,
  `nationalite` varchar(200) DEFAULT NULL,
  `adresse` varchar(150) DEFAULT NULL,
  `typepermis` varchar(50) DEFAULT NULL,
  `numero_permis` varchar(200) DEFAULT NULL,
  `date_fin_permis` date DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(200) DEFAULT NULL,
  `etatchauffeur_id` int(11) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `chauffeur_vehicule`
--

CREATE TABLE `chauffeur_vehicule` (
  `id` int(11) NOT NULL,
  `chauffeur_id` int(11) NOT NULL,
  `vehicule_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

CREATE TABLE `connexion` (
  `id` int(11) NOT NULL,
  `date_connexion` datetime DEFAULT NULL,
  `date_deconnexion` timestamp NULL DEFAULT NULL,
  `gestionnaire_id` int(11) DEFAULT NULL,
  `utilisateur_id` int(11) DEFAULT NULL,
  `carplan_id` int(11) DEFAULT NULL,
  `prestataire_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 1,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `connexion`
--

INSERT INTO `connexion` (`id`, `date_connexion`, `date_deconnexion`, `gestionnaire_id`, `utilisateur_id`, `carplan_id`, `prestataire_id`, `created`, `modified`, `protected`, `valide`) VALUES
(1, '2020-05-12 12:58:56', '2020-05-12 13:26:14', 1, NULL, NULL, NULL, '2020-05-12 12:58:56', '2020-05-12 12:58:56', 0, 1),
(2, '2020-05-12 13:26:14', '2020-05-12 14:51:51', 1, NULL, NULL, NULL, '2020-05-12 13:26:14', '2020-05-12 13:26:14', 0, 1),
(3, '2020-05-12 14:51:51', '2020-05-12 15:11:13', 1, NULL, NULL, NULL, '2020-05-12 14:51:51', '2020-05-12 14:51:51', 0, 1),
(4, '2020-05-12 15:11:13', '2020-05-12 15:40:28', 1, NULL, NULL, NULL, '2020-05-12 15:11:13', '2020-05-12 15:11:13', 0, 1),
(5, '2020-05-12 15:40:28', '2020-05-12 15:55:22', 1, NULL, NULL, NULL, '2020-05-12 15:40:28', '2020-05-12 15:40:28', 0, 1),
(6, '2020-05-12 15:55:22', '2020-05-12 16:22:02', 1, NULL, NULL, NULL, '2020-05-12 15:55:22', '2020-05-12 15:55:22', 0, 1),
(7, '2020-05-12 16:22:02', '2020-05-12 17:08:04', 1, NULL, NULL, NULL, '2020-05-12 16:22:02', '2020-05-12 16:22:02', 0, 1),
(8, '2020-05-12 17:08:04', '2020-05-12 18:17:07', 1, NULL, NULL, NULL, '2020-05-12 17:08:04', '2020-05-12 17:08:04', 0, 1),
(9, '2020-05-12 18:17:07', '2020-05-13 10:06:57', 1, NULL, NULL, NULL, '2020-05-12 18:17:07', '2020-05-12 18:17:07', 0, 1),
(10, '2020-05-13 10:06:57', '2020-05-13 10:25:23', 1, NULL, NULL, NULL, '2020-05-13 10:06:58', '2020-05-13 10:06:58', 0, 1),
(11, '2020-05-13 10:25:23', '2020-05-13 10:27:48', 1, NULL, NULL, NULL, '2020-05-13 10:25:23', '2020-05-13 10:25:23', 0, 1),
(12, '2020-05-13 10:27:48', '2020-05-13 10:31:01', 1, NULL, NULL, NULL, '2020-05-13 10:27:49', '2020-05-13 10:27:49', 0, 1),
(13, '2020-05-13 10:31:01', '2020-05-13 10:32:19', 1, NULL, NULL, NULL, '2020-05-13 10:31:01', '2020-05-13 10:31:01', 0, 1),
(14, '2020-05-13 10:32:19', '2020-05-13 11:13:40', 1, NULL, NULL, NULL, '2020-05-13 10:32:19', '2020-05-13 10:32:19', 0, 1),
(15, '2020-05-13 11:13:40', '2020-05-13 11:30:33', 1, NULL, NULL, NULL, '2020-05-13 11:13:40', '2020-05-13 11:13:40', 0, 1),
(16, '2020-05-13 11:30:33', '2020-05-13 11:47:17', 1, NULL, NULL, NULL, '2020-05-13 11:30:34', '2020-05-13 11:30:34', 0, 1),
(17, '2020-05-13 11:47:17', '2020-05-13 12:33:35', 1, NULL, NULL, NULL, '2020-05-13 11:47:17', '2020-05-13 11:47:17', 0, 1),
(18, '2020-05-13 12:33:35', '2020-05-13 13:57:27', 1, NULL, NULL, NULL, '2020-05-13 12:33:35', '2020-05-13 12:33:35', 0, 1),
(19, '2020-05-13 13:57:27', '2020-05-13 14:16:45', 1, NULL, NULL, NULL, '2020-05-13 13:57:27', '2020-05-13 13:57:27', 0, 1),
(20, '2020-05-13 14:16:45', '2020-05-13 14:52:51', 1, NULL, NULL, NULL, '2020-05-13 14:16:45', '2020-05-13 14:16:45', 0, 1),
(21, '2020-05-13 14:52:51', '2020-05-13 15:18:30', 1, NULL, NULL, NULL, '2020-05-13 14:52:51', '2020-05-13 14:52:51', 0, 1),
(22, '2020-05-13 15:18:30', '2020-05-13 15:57:23', 1, NULL, NULL, NULL, '2020-05-13 15:18:30', '2020-05-13 15:18:30', 0, 1),
(23, '2020-05-13 15:57:24', NULL, 1, NULL, NULL, NULL, '2020-05-13 15:57:24', '2020-05-13 15:57:24', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `cotation`
--

CREATE TABLE `cotation` (
  `id` int(11) NOT NULL,
  `prestataire_id` int(11) NOT NULL,
  `objet` text NOT NULL,
  `started` date DEFAULT NULL,
  `finished` date DEFAULT NULL,
  `comment` text NOT NULL,
  `etat_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cotationbesoin`
--

CREATE TABLE `cotationbesoin` (
  `id` int(11) NOT NULL,
  `cotation_id` int(11) NOT NULL,
  `vehicule_id` int(11) DEFAULT NULL,
  `equipement_id` int(11) DEFAULT NULL,
  `accessoire_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cotation_produit`
--

CREATE TABLE `cotation_produit` (
  `id` int(11) NOT NULL,
  `cotation_id` int(11) NOT NULL,
  `produit_id` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `etat_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `demandeentretien`
--

CREATE TABLE `demandeentretien` (
  `id` int(11) NOT NULL,
  `typeentretienvehicule_id` int(11) NOT NULL,
  `ticket` varchar(10) DEFAULT NULL,
  `vehicule_id` int(11) NOT NULL,
  `carplan_id` int(11) DEFAULT NULL,
  `comment` text NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `etat_id` int(11) NOT NULL,
  `date_approuve` datetime DEFAULT NULL,
  `gestionnaire_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `demandevehicule`
--

CREATE TABLE `demandevehicule` (
  `id` int(11) NOT NULL,
  `ticket` varchar(10) NOT NULL,
  `typedemandevehicule_id` int(11) NOT NULL,
  `departement_id` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `objet` varchar(200) NOT NULL,
  `lieu` varchar(200) DEFAULT NULL,
  `caracteristique` varchar(200) DEFAULT NULL,
  `comment` text NOT NULL,
  `vehicule_id` int(11) DEFAULT NULL,
  `chauffeur_id` int(11) DEFAULT NULL,
  `date_approuve` datetime DEFAULT NULL,
  `typedotation_id` int(11) DEFAULT NULL,
  `date_validation_dg` datetime DEFAULT NULL,
  `with_chauffeur` int(11) NOT NULL,
  `etats` int(11) NOT NULL,
  `etat_id` int(1) DEFAULT NULL,
  `carburant` int(11) DEFAULT NULL,
  `dotation` int(11) DEFAULT NULL,
  `date_validation_rh` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1,
  `started` datetime DEFAULT NULL,
  `finished` datetime DEFAULT NULL,
  `gestionnaire_id` int(11) DEFAULT NULL,
  `refus_comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `sigle` varchar(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `dotation`
--

CREATE TABLE `dotation` (
  `id_dotation` int(11) NOT NULL,
  `date_dotation` date NOT NULL,
  `mission_id` int(11) NOT NULL,
  `montant` varchar(15) NOT NULL,
  `moyen_id` int(11) NOT NULL,
  `etat_dotation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `energie`
--

CREATE TABLE `energie` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `energie`
--

INSERT INTO `energie` (`id`, `name`, `created`, `modified`, `protected`, `valide`) VALUES
(1, 'Diesel', '2020-05-12 12:58:22', '2020-05-12 12:58:22', 1, 1),
(2, 'Essence/Super', '2020-05-12 12:58:22', '2020-05-12 12:58:22', 1, 1),
(3, 'Gasoil', '2020-05-12 12:58:22', '2020-05-12 12:58:22', 1, 1),
(4, 'Electrique', '2020-05-12 12:58:23', '2020-05-12 12:58:23', 1, 1),
(5, 'Gaz', '2020-05-12 12:58:24', '2020-05-12 12:58:24', 1, 1),
(6, 'GPL/GNV', '2020-05-12 12:58:24', '2020-05-12 12:58:24', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `entretienvehicule`
--

CREATE TABLE `entretienvehicule` (
  `id` int(11) NOT NULL,
  `ticket` varchar(10) DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `typeentretienvehicule_id` int(11) NOT NULL,
  `vehicule_id` int(11) NOT NULL,
  `started` datetime DEFAULT NULL,
  `finished` datetime DEFAULT NULL,
  `prestataire_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `etat_id` int(11) NOT NULL,
  `date_approuve` datetime DEFAULT NULL,
  `image1` varchar(50) DEFAULT NULL,
  `image2` varchar(50) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `entretienvehicule`
--

INSERT INTO `entretienvehicule` (`id`, `ticket`, `name`, `typeentretienvehicule_id`, `vehicule_id`, `started`, `finished`, `prestataire_id`, `price`, `etat_id`, `date_approuve`, `image1`, `image2`, `comment`, `created`, `modified`, `protected`, `valide`) VALUES
(1, 'F29E04', 'Léger accrochage', 1, 1, '2020-05-12 00:00:00', '2020-05-17 00:00:00', 1, 145000, 4, '2020-05-13 12:53:20', NULL, NULL, 'ceci est un test d\'entretien', '2020-05-12 14:14:01', '2020-05-12 14:14:01', 0, 1),
(2, 'FF3A13', 'Léger accrochage', 1, 1, '2020-05-15 00:00:00', '2020-05-31 00:00:00', 1, 150000, 1, '2020-05-13 12:53:43', NULL, NULL, 'ceci est un test de\'entretien', '2020-05-12 14:17:23', '2020-05-12 14:17:23', 0, 1),
(3, '8A409C', 'Léger accrochage', 1, 2, '2020-05-01 00:00:00', '2020-05-28 00:00:00', 1, 20000, 2, NULL, NULL, NULL, 'un autre test', '2020-05-12 14:54:28', '2020-05-12 14:54:28', 0, 1),
(4, 'BE6D05', 'Léger accrochage', 1, 1, '2020-05-12 00:00:00', '2020-05-16 00:00:00', 1, 145000, 2, NULL, 'be72cf7f.jpeg', NULL, '', '2020-05-12 15:08:22', '2020-05-12 15:08:22', 0, 1),
(5, '0C033D', 'Autre', 6, 1, '2020-05-20 00:00:00', '2020-05-24 00:00:00', 1, 45000, 2, NULL, NULL, NULL, 'ceci est cela et cela est ceci', '2020-05-13 13:06:08', '2020-05-13 13:06:08', 0, 1),
(6, '0E1239', 'Autre', 6, 1, '2020-05-20 00:00:00', '2020-05-24 00:00:00', 1, 45000, 2, NULL, '0e180a93.jpg', NULL, 'ceci est cela et cela est ceci', '2020-05-13 13:06:41', '2020-05-13 13:06:41', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `equipement`
--

CREATE TABLE `equipement` (
  `id` int(11) NOT NULL,
  `typeequipement_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `marque` text DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `comment` text NOT NULL,
  `image` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `equipement_vehicule`
--

CREATE TABLE `equipement_vehicule` (
  `id` int(11) NOT NULL,
  `equipement_id` int(11) NOT NULL,
  `vehicule_id` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `gestionnaire_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `etat`
--

CREATE TABLE `etat` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `class` varchar(50) NOT NULL,
  `protected` int(11) NOT NULL DEFAULT 1,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etat`
--

INSERT INTO `etat` (`id`, `name`, `class`, `protected`, `valide`) VALUES
(1, 'Annulé', 'danger', 1, 1),
(2, 'En cours', 'warning', 1, 1),
(3, 'Partiellement', 'info', 1, 1),
(4, 'Validé', 'success', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `etatchauffeur`
--

CREATE TABLE `etatchauffeur` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `class` varchar(50) NOT NULL,
  `protected` int(11) NOT NULL DEFAULT 1,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etatchauffeur`
--

INSERT INTO `etatchauffeur` (`id`, `name`, `class`, `protected`, `valide`) VALUES
(1, 'Libre', 'primary', 1, 1),
(2, 'En mission', 'warning', 1, 1),
(3, 'Indisponible', 'danger', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `etatpiece`
--

CREATE TABLE `etatpiece` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `class` varchar(50) NOT NULL,
  `protected` int(11) NOT NULL DEFAULT 1,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `etatvehicule`
--

CREATE TABLE `etatvehicule` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `class` varchar(50) NOT NULL,
  `protected` int(11) NOT NULL DEFAULT 1,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etatvehicule`
--

INSERT INTO `etatvehicule` (`id`, `name`, `class`, `protected`, `valide`) VALUES
(1, 'Déclassé', 'danger', 1, 1),
(2, 'Indisponible', 'danger', 1, 1),
(3, 'Dans le parc', 'primary', 1, 1),
(4, 'En mission', 'succes', 1, 1),
(5, 'En entretien', 'warning', 1, 1),
(6, 'Sinistré', 'danger', 1, 1),
(7, 'Affecté temporairement', 'info', 1, 1),
(8, 'Véhicule prété', 'info', 1, 1),
(9, 'Véhicule loué', 'info', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `gestionnaire`
--

CREATE TABLE `gestionnaire` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(150) DEFAULT NULL,
  `adresse` varchar(150) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(200) DEFAULT NULL,
  `matricule` varchar(50) DEFAULT NULL,
  `login` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `is_new` int(11) NOT NULL DEFAULT 0,
  `image` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `is_allowed` int(11) NOT NULL DEFAULT 1,
  `typegestionnaire_id` int(11) NOT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1,
  `visibility` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gestionnaire`
--

INSERT INTO `gestionnaire` (`id`, `name`, `lastname`, `adresse`, `email`, `contact`, `matricule`, `login`, `password`, `is_new`, `image`, `created`, `modified`, `is_allowed`, `typegestionnaire_id`, `protected`, `valide`, `visibility`) VALUES
(1, 'Super Gestionnaire', NULL, '...', 'info@devaris21.com', '...', NULL, 'root', '5e9795e3f3ab55e7790a6283507c085db0d764fc', 0, 'default.png', '2020-05-12 12:58:21', '2020-05-12 12:58:21', 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `groupevehicule`
--

CREATE TABLE `groupevehicule` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `groupevehicule`
--

INSERT INTO `groupevehicule` (`id`, `name`, `created`, `modified`, `protected`, `valide`) VALUES
(1, 'Véhicule de mission', '2020-05-12 12:58:14', '2020-05-12 12:58:14', 1, 1),
(2, 'Véhicule de Pool', '2020-05-12 12:58:14', '2020-05-12 12:58:14', 1, 1),
(3, 'Car de ramassage', '2020-05-12 12:58:14', '2020-05-12 12:58:14', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `groupevehiculeopen`
--

CREATE TABLE `groupevehiculeopen` (
  `id` int(11) NOT NULL,
  `groupevehicule_id` int(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `groupevehiculeopen`
--

INSERT INTO `groupevehiculeopen` (`id`, `groupevehicule_id`, `created`, `modified`, `protected`, `valide`) VALUES
(1, 1, NULL, NULL, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `sentense` text NOT NULL,
  `type_save` varchar(50) NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `record` varchar(200) NOT NULL,
  `gestionnaire_id` int(11) DEFAULT NULL,
  `utilisateur_id` int(11) DEFAULT NULL,
  `carplan_id` int(11) DEFAULT NULL,
  `prestataire_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 1,
  `valide` int(11) NOT NULL DEFAULT 1,
  `record_key` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `history`
--

INSERT INTO `history` (`id`, `sentense`, `type_save`, `admin_id`, `record`, `gestionnaire_id`, `utilisateur_id`, `carplan_id`, `prestataire_id`, `created`, `modified`, `protected`, `valide`, `record_key`) VALUES
(1, 'Ajout d\'une nouvelle pièce administrative de vehicule : Patente dans les paramétrages dans les paramétrages', 'insert', NULL, 'typepiecevehicule', NULL, NULL, NULL, NULL, '2020-05-12 12:57:59', '2020-05-12 12:57:59', 0, 1, 1),
(2, 'Ajout d\'une nouvelle pièce administrative de vehicule : Carte de stationnement dans les paramétrages dans les paramétrages', 'insert', NULL, 'typepiecevehicule', NULL, NULL, NULL, NULL, '2020-05-12 12:58:00', '2020-05-12 12:58:00', 0, 1, 2),
(3, 'Ajout d\'une nouvelle pièce administrative de vehicule : Autre dans les paramétrages dans les paramétrages', 'insert', NULL, 'typepiecevehicule', NULL, NULL, NULL, NULL, '2020-05-12 12:58:00', '2020-05-12 12:58:00', 0, 1, 3),
(4, 'Ajout d\'un nouveau type de demande de vehicule : Mission programmée dans les paramétrages', 'insert', NULL, 'typemission', NULL, NULL, NULL, NULL, '2020-05-12 12:58:01', '2020-05-12 12:58:01', 0, 1, 1),
(5, 'Ajout d\'un nouveau type de demande de vehicule : Mission inopinée dans les paramétrages', 'insert', NULL, 'typemission', NULL, NULL, NULL, NULL, '2020-05-12 12:58:02', '2020-05-12 12:58:02', 0, 1, 2),
(6, 'Ajout d\'un nouveau type de produit : Produit dans les paramétrages', 'insert', NULL, 'typeproduit', NULL, NULL, NULL, NULL, '2020-05-12 12:58:03', '2020-05-12 12:58:03', 0, 1, 1),
(7, 'Ajout d\'un nouveau type de produit : Service dans les paramétrages', 'insert', NULL, 'typeproduit', NULL, NULL, NULL, NULL, '2020-05-12 12:58:03', '2020-05-12 12:58:03', 0, 1, 2),
(8, 'Ajout d\'un nouveau type de produit : voiture dans les paramétrages', 'insert', NULL, 'typeproduit', NULL, NULL, NULL, NULL, '2020-05-12 12:58:04', '2020-05-12 12:58:04', 0, 1, 3),
(9, 'Ajout d\'un nouveau type d\'affectation : Affectation permanente dans les paramétrages', 'insert', NULL, 'typeaffectation', NULL, NULL, NULL, NULL, '2020-05-12 12:58:04', '2020-05-12 12:58:04', 0, 1, 1),
(10, 'Ajout d\'un nouveau type d\'affectation : Affectation temporaire dans les paramétrages', 'insert', NULL, 'typeaffectation', NULL, NULL, NULL, NULL, '2020-05-12 12:58:05', '2020-05-12 12:58:05', 0, 1, 2),
(11, 'Ajout d\'un nouveau type de sinistre : Espèces dans les paramétrages', 'insert', NULL, 'typedotation', NULL, NULL, NULL, NULL, '2020-05-12 12:58:05', '2020-05-12 12:58:05', 0, 1, 1),
(12, 'Ajout d\'un nouveau type de sinistre : Carte dans les paramétrages', 'insert', NULL, 'typedotation', NULL, NULL, NULL, NULL, '2020-05-12 12:58:06', '2020-05-12 12:58:06', 0, 1, 2),
(13, 'Ajout d\'un nouveau type de sinistre : Soute dans les paramétrages', 'insert', NULL, 'typedotation', NULL, NULL, NULL, NULL, '2020-05-12 12:58:06', '2020-05-12 12:58:06', 0, 1, 3),
(14, 'Ajout d\'un nouveau type de sinistre : Bon valeur dans les paramétrages', 'insert', NULL, 'typedotation', NULL, NULL, NULL, NULL, '2020-05-12 12:58:07', '2020-05-12 12:58:07', 0, 1, 4),
(15, 'Ajout d\'un nouveau type de location de vehicule : Location de véhicule dans les paramétrages', 'insert', NULL, 'typelocation', NULL, NULL, NULL, NULL, '2020-05-12 12:58:07', '2020-05-12 12:58:07', 0, 1, 1),
(16, 'Ajout d\'un nouveau type de location de vehicule : Prêt de véhicule dans les paramétrages', 'insert', NULL, 'typelocation', NULL, NULL, NULL, NULL, '2020-05-12 12:58:07', '2020-05-12 12:58:07', 0, 1, 2),
(17, 'Ajout d\'un nouveau type d\'equipement de vehicule : Pieces Mécaniques dans les paramétrages', 'insert', NULL, 'typeequipement', NULL, NULL, NULL, NULL, '2020-05-12 12:58:08', '2020-05-12 12:58:08', 0, 1, 1),
(18, 'Ajout d\'un nouveau type d\'equipement de vehicule : Utilitaire de véhicule dans les paramétrages', 'insert', NULL, 'typeequipement', NULL, NULL, NULL, NULL, '2020-05-12 12:58:08', '2020-05-12 12:58:08', 0, 1, 2),
(19, 'Ajout d\'un nouveau type d\'equipement de vehicule : Outils de néttoyage dans les paramétrages', 'insert', NULL, 'typeequipement', NULL, NULL, NULL, NULL, '2020-05-12 12:58:09', '2020-05-12 12:58:09', 0, 1, 3),
(20, 'Ajout d\'un nouveau type de vehicule : Voiture dans les paramétrages', 'insert', NULL, 'typevehicule', NULL, NULL, NULL, NULL, '2020-05-12 12:58:09', '2020-05-12 12:58:09', 0, 1, 1),
(21, 'Ajout d\'un nouveau type de vehicule : Car dans les paramétrages', 'insert', NULL, 'typevehicule', NULL, NULL, NULL, NULL, '2020-05-12 12:58:10', '2020-05-12 12:58:10', 0, 1, 2),
(22, 'Ajout d\'un nouveau type de vehicule : Pick-up dans les paramétrages', 'insert', NULL, 'typevehicule', NULL, NULL, NULL, NULL, '2020-05-12 12:58:10', '2020-05-12 12:58:10', 0, 1, 3),
(23, 'Ajout d\'un nouveau type de vehicule : Moto dans les paramétrages', 'insert', NULL, 'typevehicule', NULL, NULL, NULL, NULL, '2020-05-12 12:58:11', '2020-05-12 12:58:11', 0, 1, 4),
(24, 'Ajout d\'un nouveau type d\'entretien de vehicule : Léger accrochage dans les paramétrages', 'insert', NULL, 'typeentretienvehicule', NULL, NULL, NULL, NULL, '2020-05-12 12:58:11', '2020-05-12 12:58:11', 0, 1, 1),
(25, 'Ajout d\'un nouveau type d\'entretien de vehicule : Crevaison dans les paramétrages', 'insert', NULL, 'typeentretienvehicule', NULL, NULL, NULL, NULL, '2020-05-12 12:58:12', '2020-05-12 12:58:12', 0, 1, 2),
(26, 'Ajout d\'un nouveau type d\'entretien de vehicule : Défaillance moteur dans les paramétrages', 'insert', NULL, 'typeentretienvehicule', NULL, NULL, NULL, NULL, '2020-05-12 12:58:13', '2020-05-12 12:58:13', 0, 1, 3),
(27, 'Ajout d\'un nouveau type d\'entretien de vehicule : Accident grave dans les paramétrages', 'insert', NULL, 'typeentretienvehicule', NULL, NULL, NULL, NULL, '2020-05-12 12:58:13', '2020-05-12 12:58:13', 0, 1, 4),
(28, 'Ajout d\'un nouveau type d\'entretien de vehicule : Vol dans les paramétrages', 'insert', NULL, 'typeentretienvehicule', NULL, NULL, NULL, NULL, '2020-05-12 12:58:13', '2020-05-12 12:58:13', 0, 1, 5),
(29, 'Ajout d\'un nouveau type d\'entretien de vehicule : Autre dans les paramétrages', 'insert', NULL, 'typeentretienvehicule', NULL, NULL, NULL, NULL, '2020-05-12 12:58:14', '2020-05-12 12:58:14', 0, 1, 6),
(30, 'Ajout d\'un nouveau groupe de vehicule : Véhicule de mission dans les paramétrages', 'insert', NULL, 'groupevehicule', NULL, NULL, NULL, NULL, '2020-05-12 12:58:14', '2020-05-12 12:58:14', 0, 1, 1),
(31, 'Ajout d\'un nouveau groupe de vehicule : Véhicule de Pool dans les paramétrages', 'insert', NULL, 'groupevehicule', NULL, NULL, NULL, NULL, '2020-05-12 12:58:14', '2020-05-12 12:58:14', 0, 1, 2),
(32, 'Ajout d\'un nouveau groupe de vehicule : Car de ramassage dans les paramétrages', 'insert', NULL, 'groupevehicule', NULL, NULL, NULL, NULL, '2020-05-12 12:58:15', '2020-05-12 12:58:15', 0, 1, 3),
(33, 'Ajout d\'un nouveau genre : Homme dans les paramétrages', 'insert', NULL, 'sexe', NULL, NULL, NULL, NULL, '2020-05-12 12:58:15', '2020-05-12 12:58:15', 0, 1, 1),
(34, 'Ajout d\'un nouveau genre : Femme dans les paramétrages', 'insert', NULL, 'sexe', NULL, NULL, NULL, NULL, '2020-05-12 12:58:15', '2020-05-12 12:58:15', 0, 1, 2),
(35, 'Nouvelle Installation, premier démarrage', 'insert', NULL, 'mycompte', NULL, NULL, NULL, NULL, '2020-05-12 12:58:15', '2020-05-12 12:58:15', 0, 1, 1),
(36, 'Ajout d\'un nouveau type de prestataire : Consessionnaire dans les paramétrages', 'insert', NULL, 'typeprestataire', NULL, NULL, NULL, NULL, '2020-05-12 12:58:16', '2020-05-12 12:58:16', 0, 1, 1),
(37, 'Ajout d\'un nouveau type de prestataire : Garage dans les paramétrages', 'insert', NULL, 'typeprestataire', NULL, NULL, NULL, NULL, '2020-05-12 12:58:16', '2020-05-12 12:58:16', 0, 1, 2),
(38, 'Ajout d\'un nouveau type de prestataire : Lavage Auto dans les paramétrages', 'insert', NULL, 'typeprestataire', NULL, NULL, NULL, NULL, '2020-05-12 12:58:16', '2020-05-12 12:58:16', 0, 1, 3),
(39, 'Ajout d\'un nouveau type de prestataire : Autre dans les paramétrages', 'insert', NULL, 'typeprestataire', NULL, NULL, NULL, NULL, '2020-05-12 12:58:16', '2020-05-12 12:58:16', 0, 1, 4),
(40, 'Ajout d\'un nouveau prestataire : Devaris PRESTATAIRE', 'insert', NULL, 'prestataire', NULL, NULL, NULL, NULL, '2020-05-12 12:58:17', '2020-05-12 12:58:17', 0, 1, 1),
(41, 'Ajout d\'un nouveau gestionnaire dans le parc auto : Super Administrateur ', 'insert', NULL, 'admin', NULL, NULL, NULL, NULL, '2020-05-12 12:58:20', '2020-05-12 12:58:20', 0, 1, 1),
(42, 'Ajout d\'un nouveau type de sinistre : Gestionnaire en chef dans les paramétrages', 'insert', NULL, 'typegestionnaire', NULL, NULL, NULL, NULL, '2020-05-12 12:58:20', '2020-05-12 12:58:20', 0, 1, 1),
(43, 'Ajout d\'un nouveau type de sinistre : Gestionnaire dans les paramétrages', 'insert', NULL, 'typegestionnaire', NULL, NULL, NULL, NULL, '2020-05-12 12:58:20', '2020-05-12 12:58:20', 0, 1, 2),
(44, 'Ajout d\'un nouveau gestionnaire dans le parc auto : Super Gestionnaire ', 'insert', NULL, 'gestionnaire', NULL, NULL, NULL, NULL, '2020-05-12 12:58:21', '2020-05-12 12:58:21', 0, 1, 1),
(45, 'Ajout d\'un nouveau type de transmission de vehicule : Manuelle dans les paramétrages', 'insert', NULL, 'typetransmission', NULL, NULL, NULL, NULL, '2020-05-12 12:58:21', '2020-05-12 12:58:21', 0, 1, 1),
(46, 'Ajout d\'un nouveau type de transmission de vehicule : Seme-automatique dans les paramétrages', 'insert', NULL, 'typetransmission', NULL, NULL, NULL, NULL, '2020-05-12 12:58:21', '2020-05-12 12:58:21', 0, 1, 2),
(47, 'Ajout d\'un nouveau type de transmission de vehicule : Automatique dans les paramétrages', 'insert', NULL, 'typetransmission', NULL, NULL, NULL, NULL, '2020-05-12 12:58:21', '2020-05-12 12:58:21', 0, 1, 3),
(48, 'Ajout d\'un nouveau type de vehicule : standart dans les paramétrages', 'insert', NULL, 'typesuggestion', NULL, NULL, NULL, NULL, '2020-05-12 12:58:25', '2020-05-12 12:58:25', 0, 1, 1),
(49, 'Modification des informations du gestionnaire 1 Super Gestionnaire .', 'update', NULL, 'gestionnaire', NULL, NULL, NULL, NULL, '2020-05-12 12:58:56', '2020-05-12 12:58:56', 0, 1, 1),
(50, 'Nouvelle connexion', 'insert', NULL, 'connexion', 1, NULL, NULL, NULL, '2020-05-12 12:58:57', '2020-05-12 12:58:57', 0, 1, 1),
(51, 'Modification des informations de la connexion de Super Gestionnaire  du  12 May 2020 à 12:58', 'update', NULL, 'connexion', NULL, NULL, NULL, NULL, '2020-05-12 13:26:14', '2020-05-12 13:26:14', 0, 1, 1),
(52, 'Nouvelle connexion', 'insert', NULL, 'connexion', 1, NULL, NULL, NULL, '2020-05-12 13:26:14', '2020-05-12 13:26:14', 0, 1, 2),
(53, 'Enregistrement d\'un nouveau véhicule N°1 immatriculé 8993 GT 01.', 'insert', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:28:15', '2020-05-12 13:28:15', 0, 1, 1),
(54, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:28:25', '2020-05-12 13:28:25', 0, 1, 1),
(55, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:28:27', '2020-05-12 13:28:27', 0, 1, 1),
(56, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:28:27', '2020-05-12 13:28:27', 0, 1, 1),
(57, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:28:28', '2020-05-12 13:28:28', 0, 1, 1),
(58, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:28:28', '2020-05-12 13:28:28', 0, 1, 1),
(59, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:30:05', '2020-05-12 13:30:05', 0, 1, 1),
(60, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:30:07', '2020-05-12 13:30:07', 0, 1, 1),
(61, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:30:08', '2020-05-12 13:30:08', 0, 1, 1),
(62, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:30:08', '2020-05-12 13:30:08', 0, 1, 1),
(63, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:30:09', '2020-05-12 13:30:09', 0, 1, 1),
(64, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:31:43', '2020-05-12 13:31:43', 0, 1, 1),
(65, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:31:45', '2020-05-12 13:31:45', 0, 1, 1),
(66, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:31:45', '2020-05-12 13:31:45', 0, 1, 1),
(67, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:31:46', '2020-05-12 13:31:46', 0, 1, 1),
(68, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:31:47', '2020-05-12 13:31:47', 0, 1, 1),
(69, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:33:44', '2020-05-12 13:33:44', 0, 1, 1),
(70, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:33:45', '2020-05-12 13:33:45', 0, 1, 1),
(71, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:33:46', '2020-05-12 13:33:46', 0, 1, 1),
(72, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:33:47', '2020-05-12 13:33:47', 0, 1, 1),
(73, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:33:48', '2020-05-12 13:33:48', 0, 1, 1),
(74, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:35:10', '2020-05-12 13:35:10', 0, 1, 1),
(75, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:35:12', '2020-05-12 13:35:12', 0, 1, 1),
(76, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:35:13', '2020-05-12 13:35:13', 0, 1, 1),
(77, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:35:14', '2020-05-12 13:35:14', 0, 1, 1),
(78, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:35:14', '2020-05-12 13:35:14', 0, 1, 1),
(79, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:36:46', '2020-05-12 13:36:46', 0, 1, 1),
(80, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:36:48', '2020-05-12 13:36:48', 0, 1, 1),
(81, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:36:49', '2020-05-12 13:36:49', 0, 1, 1),
(82, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:36:49', '2020-05-12 13:36:49', 0, 1, 1),
(83, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:36:50', '2020-05-12 13:36:50', 0, 1, 1),
(84, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:40:19', '2020-05-12 13:40:19', 0, 1, 1),
(85, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:40:21', '2020-05-12 13:40:21', 0, 1, 1),
(86, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:40:22', '2020-05-12 13:40:22', 0, 1, 1),
(87, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:40:23', '2020-05-12 13:40:23', 0, 1, 1),
(88, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:40:24', '2020-05-12 13:40:24', 0, 1, 1),
(89, 'Enregistrement d\'un nouveau véhicule N°2 immatriculé 662 FP 01.', 'insert', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:41:00', '2020-05-12 13:41:00', 0, 1, 2),
(90, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:41:01', '2020-05-12 13:41:01', 0, 1, 2),
(91, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:41:02', '2020-05-12 13:41:02', 0, 1, 1),
(92, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:41:02', '2020-05-12 13:41:02', 0, 1, 2),
(93, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:41:04', '2020-05-12 13:41:04', 0, 1, 1),
(94, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:41:05', '2020-05-12 13:41:05', 0, 1, 2),
(95, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:41:05', '2020-05-12 13:41:05', 0, 1, 1),
(96, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:41:05', '2020-05-12 13:41:05', 0, 1, 2),
(97, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:41:06', '2020-05-12 13:41:06', 0, 1, 1),
(98, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:41:06', '2020-05-12 13:41:06', 0, 1, 2),
(99, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:41:07', '2020-05-12 13:41:07', 0, 1, 1),
(100, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:41:07', '2020-05-12 13:41:07', 0, 1, 2),
(101, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:48:39', '2020-05-12 13:48:39', 0, 1, 1),
(102, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:48:39', '2020-05-12 13:48:39', 0, 1, 2),
(103, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:48:41', '2020-05-12 13:48:41', 0, 1, 1),
(104, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:48:42', '2020-05-12 13:48:42', 0, 1, 2),
(105, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:48:42', '2020-05-12 13:48:42', 0, 1, 1),
(106, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:48:43', '2020-05-12 13:48:43', 0, 1, 2),
(107, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:48:44', '2020-05-12 13:48:44', 0, 1, 1),
(108, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:48:44', '2020-05-12 13:48:44', 0, 1, 2),
(109, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:48:45', '2020-05-12 13:48:45', 0, 1, 1),
(110, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:48:45', '2020-05-12 13:48:45', 0, 1, 2),
(111, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:49:46', '2020-05-12 13:49:46', 0, 1, 1),
(112, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:49:46', '2020-05-12 13:49:46', 0, 1, 2),
(113, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:49:48', '2020-05-12 13:49:48', 0, 1, 1),
(114, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:49:49', '2020-05-12 13:49:49', 0, 1, 2),
(115, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:49:49', '2020-05-12 13:49:49', 0, 1, 1),
(116, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:49:50', '2020-05-12 13:49:50', 0, 1, 2),
(117, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:49:51', '2020-05-12 13:49:51', 0, 1, 1),
(118, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:49:51', '2020-05-12 13:49:51', 0, 1, 2),
(119, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:49:51', '2020-05-12 13:49:51', 0, 1, 1),
(120, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:49:52', '2020-05-12 13:49:52', 0, 1, 2),
(121, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:50:28', '2020-05-12 13:50:28', 0, 1, 1),
(122, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:50:28', '2020-05-12 13:50:28', 0, 1, 2),
(123, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:50:30', '2020-05-12 13:50:30', 0, 1, 1),
(124, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:50:31', '2020-05-12 13:50:31', 0, 1, 2),
(125, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:50:32', '2020-05-12 13:50:32', 0, 1, 1),
(126, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:50:32', '2020-05-12 13:50:32', 0, 1, 2),
(127, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:50:33', '2020-05-12 13:50:33', 0, 1, 1),
(128, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:50:33', '2020-05-12 13:50:33', 0, 1, 2),
(129, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:50:33', '2020-05-12 13:50:33', 0, 1, 1),
(130, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:50:34', '2020-05-12 13:50:34', 0, 1, 2),
(131, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:51:23', '2020-05-12 13:51:23', 0, 1, 1),
(132, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:51:23', '2020-05-12 13:51:23', 0, 1, 2),
(133, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:51:24', '2020-05-12 13:51:24', 0, 1, 1),
(134, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:51:25', '2020-05-12 13:51:25', 0, 1, 2),
(135, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:51:26', '2020-05-12 13:51:26', 0, 1, 1),
(136, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:51:26', '2020-05-12 13:51:26', 0, 1, 2),
(137, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:51:27', '2020-05-12 13:51:27', 0, 1, 1),
(138, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:51:27', '2020-05-12 13:51:27', 0, 1, 2),
(139, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:51:27', '2020-05-12 13:51:27', 0, 1, 1),
(140, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:51:27', '2020-05-12 13:51:27', 0, 1, 2),
(141, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:57:18', '2020-05-12 13:57:18', 0, 1, 1),
(142, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:57:18', '2020-05-12 13:57:18', 0, 1, 2),
(143, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:57:19', '2020-05-12 13:57:19', 0, 1, 1),
(144, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:57:20', '2020-05-12 13:57:20', 0, 1, 2),
(145, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:57:21', '2020-05-12 13:57:21', 0, 1, 1),
(146, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:57:21', '2020-05-12 13:57:21', 0, 1, 2),
(147, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:57:21', '2020-05-12 13:57:21', 0, 1, 1),
(148, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:57:22', '2020-05-12 13:57:22', 0, 1, 2),
(149, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:57:22', '2020-05-12 13:57:22', 0, 1, 1),
(150, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:57:22', '2020-05-12 13:57:22', 0, 1, 2),
(151, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:58:18', '2020-05-12 13:58:18', 0, 1, 1),
(152, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:58:18', '2020-05-12 13:58:18', 0, 1, 2),
(153, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:58:20', '2020-05-12 13:58:20', 0, 1, 1),
(154, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:58:21', '2020-05-12 13:58:21', 0, 1, 2),
(155, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:58:21', '2020-05-12 13:58:21', 0, 1, 1),
(156, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:58:21', '2020-05-12 13:58:21', 0, 1, 2),
(157, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:58:22', '2020-05-12 13:58:22', 0, 1, 1),
(158, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:58:22', '2020-05-12 13:58:22', 0, 1, 2),
(159, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:58:23', '2020-05-12 13:58:23', 0, 1, 1),
(160, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:58:23', '2020-05-12 13:58:23', 0, 1, 2),
(161, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:59:11', '2020-05-12 13:59:11', 0, 1, 1),
(162, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:59:11', '2020-05-12 13:59:11', 0, 1, 2),
(163, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:59:12', '2020-05-12 13:59:12', 0, 1, 1),
(164, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:59:13', '2020-05-12 13:59:13', 0, 1, 2),
(165, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:59:13', '2020-05-12 13:59:13', 0, 1, 1),
(166, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:59:14', '2020-05-12 13:59:14', 0, 1, 2),
(167, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:59:14', '2020-05-12 13:59:14', 0, 1, 1),
(168, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:59:15', '2020-05-12 13:59:15', 0, 1, 2),
(169, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:59:15', '2020-05-12 13:59:15', 0, 1, 1),
(170, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:59:15', '2020-05-12 13:59:15', 0, 1, 2),
(171, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:59:25', '2020-05-12 13:59:25', 0, 1, 1),
(172, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:59:26', '2020-05-12 13:59:26', 0, 1, 2),
(173, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:59:28', '2020-05-12 13:59:28', 0, 1, 1),
(174, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:59:29', '2020-05-12 13:59:29', 0, 1, 2),
(175, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:59:30', '2020-05-12 13:59:30', 0, 1, 1),
(176, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 13:59:30', '2020-05-12 13:59:30', 0, 1, 2),
(177, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:01:03', '2020-05-12 14:01:03', 0, 1, 1),
(178, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:01:04', '2020-05-12 14:01:04', 0, 1, 2),
(179, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:01:07', '2020-05-12 14:01:07', 0, 1, 1),
(180, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:01:07', '2020-05-12 14:01:07', 0, 1, 2),
(181, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:01:08', '2020-05-12 14:01:08', 0, 1, 1),
(182, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:01:08', '2020-05-12 14:01:08', 0, 1, 2),
(183, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:02:20', '2020-05-12 14:02:20', 0, 1, 1),
(184, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:02:21', '2020-05-12 14:02:21', 0, 1, 2),
(185, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:02:24', '2020-05-12 14:02:24', 0, 1, 1),
(186, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:02:25', '2020-05-12 14:02:25', 0, 1, 2),
(187, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:02:25', '2020-05-12 14:02:25', 0, 1, 1),
(188, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:02:26', '2020-05-12 14:02:26', 0, 1, 2),
(189, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:03:50', '2020-05-12 14:03:50', 0, 1, 1),
(190, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:03:50', '2020-05-12 14:03:50', 0, 1, 2),
(191, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:03:54', '2020-05-12 14:03:54', 0, 1, 1),
(192, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:03:55', '2020-05-12 14:03:55', 0, 1, 2),
(193, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:03:55', '2020-05-12 14:03:55', 0, 1, 1),
(194, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:03:56', '2020-05-12 14:03:56', 0, 1, 2),
(195, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:04:28', '2020-05-12 14:04:28', 0, 1, 1),
(196, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:04:29', '2020-05-12 14:04:29', 0, 1, 2),
(197, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:04:32', '2020-05-12 14:04:32', 0, 1, 1),
(198, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:04:33', '2020-05-12 14:04:33', 0, 1, 2),
(199, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:04:33', '2020-05-12 14:04:33', 0, 1, 1),
(200, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:04:33', '2020-05-12 14:04:33', 0, 1, 2),
(201, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:06:01', '2020-05-12 14:06:01', 0, 1, 1),
(202, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:06:02', '2020-05-12 14:06:02', 0, 1, 2),
(203, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:06:05', '2020-05-12 14:06:05', 0, 1, 1),
(204, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:06:06', '2020-05-12 14:06:06', 0, 1, 2),
(205, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:06:07', '2020-05-12 14:06:07', 0, 1, 1),
(206, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:06:07', '2020-05-12 14:06:07', 0, 1, 2),
(207, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:07:32', '2020-05-12 14:07:32', 0, 1, 1),
(208, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:07:33', '2020-05-12 14:07:33', 0, 1, 2),
(209, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:07:34', '2020-05-12 14:07:34', 0, 1, 1),
(210, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:07:35', '2020-05-12 14:07:35', 0, 1, 2),
(211, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:07:35', '2020-05-12 14:07:35', 0, 1, 1),
(212, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:07:35', '2020-05-12 14:07:35', 0, 1, 2),
(213, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:07:36', '2020-05-12 14:07:36', 0, 1, 1),
(214, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:07:36', '2020-05-12 14:07:36', 0, 1, 2),
(215, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:07:37', '2020-05-12 14:07:37', 0, 1, 1),
(216, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:07:37', '2020-05-12 14:07:37', 0, 1, 2),
(217, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:07:40', '2020-05-12 14:07:40', 0, 1, 1),
(218, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:07:41', '2020-05-12 14:07:41', 0, 1, 2),
(219, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:07:43', '2020-05-12 14:07:43', 0, 1, 1),
(220, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:07:43', '2020-05-12 14:07:43', 0, 1, 2),
(221, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:07:44', '2020-05-12 14:07:44', 0, 1, 1),
(222, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:07:44', '2020-05-12 14:07:44', 0, 1, 2),
(223, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:08:37', '2020-05-12 14:08:37', 0, 1, 1),
(224, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:08:37', '2020-05-12 14:08:37', 0, 1, 1),
(225, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:08:38', '2020-05-12 14:08:38', 0, 1, 2),
(226, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:08:39', '2020-05-12 14:08:39', 0, 1, 1),
(227, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:08:40', '2020-05-12 14:08:40', 0, 1, 2),
(228, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:08:40', '2020-05-12 14:08:40', 0, 1, 1),
(229, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:08:41', '2020-05-12 14:08:41', 0, 1, 2),
(230, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:14:56', '2020-05-12 14:14:56', 0, 1, 1),
(231, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:14:56', '2020-05-12 14:14:56', 0, 1, 2),
(232, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:15:00', '2020-05-12 14:15:00', 0, 1, 1),
(233, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:15:01', '2020-05-12 14:15:01', 0, 1, 2),
(234, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:15:02', '2020-05-12 14:15:02', 0, 1, 1),
(235, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:15:04', '2020-05-12 14:15:04', 0, 1, 2),
(236, 'Modification des informations de la connexion de Super Gestionnaire  du  12 May 2020 à 13:26', 'update', NULL, 'connexion', NULL, NULL, NULL, NULL, '2020-05-12 14:51:51', '2020-05-12 14:51:51', 0, 1, 2),
(237, 'Nouvelle connexion', 'insert', NULL, 'connexion', 1, NULL, NULL, NULL, '2020-05-12 14:51:51', '2020-05-12 14:51:51', 0, 1, 3),
(238, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:51:52', '2020-05-12 14:51:52', 0, 1, 1),
(239, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:51:53', '2020-05-12 14:51:53', 0, 1, 2),
(240, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:51:53', '2020-05-12 14:51:53', 0, 1, 1),
(241, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:51:53', '2020-05-12 14:51:53', 0, 1, 2),
(242, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:51:54', '2020-05-12 14:51:54', 0, 1, 1),
(243, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:51:55', '2020-05-12 14:51:55', 0, 1, 2),
(244, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:51:55', '2020-05-12 14:51:55', 0, 1, 1),
(245, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:51:55', '2020-05-12 14:51:55', 0, 1, 2),
(246, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:52:33', '2020-05-12 14:52:33', 0, 1, 1),
(247, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:52:33', '2020-05-12 14:52:33', 0, 1, 2),
(248, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:52:34', '2020-05-12 14:52:34', 0, 1, 1),
(249, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:52:35', '2020-05-12 14:52:35', 0, 1, 2),
(250, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:52:35', '2020-05-12 14:52:35', 0, 1, 1),
(251, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:52:35', '2020-05-12 14:52:35', 0, 1, 2),
(252, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:52:36', '2020-05-12 14:52:36', 0, 1, 1),
(253, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:52:36', '2020-05-12 14:52:36', 0, 1, 2),
(254, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:52:37', '2020-05-12 14:52:37', 0, 1, 1),
(255, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:52:37', '2020-05-12 14:52:37', 0, 1, 2),
(256, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:52:46', '2020-05-12 14:52:46', 0, 1, 1),
(257, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:52:47', '2020-05-12 14:52:47', 0, 1, 2),
(258, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:52:49', '2020-05-12 14:52:49', 0, 1, 1),
(259, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:52:49', '2020-05-12 14:52:49', 0, 1, 2),
(260, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:52:50', '2020-05-12 14:52:50', 0, 1, 1),
(261, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:52:50', '2020-05-12 14:52:50', 0, 1, 2),
(262, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:53:18', '2020-05-12 14:53:18', 0, 1, 1),
(263, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:53:19', '2020-05-12 14:53:19', 0, 1, 2),
(264, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:53:20', '2020-05-12 14:53:20', 0, 1, 1),
(265, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:53:20', '2020-05-12 14:53:20', 0, 1, 2),
(266, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:53:21', '2020-05-12 14:53:21', 0, 1, 1),
(267, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:53:21', '2020-05-12 14:53:21', 0, 1, 2),
(268, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:54:30', '2020-05-12 14:54:30', 0, 1, 1),
(269, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:54:30', '2020-05-12 14:54:30', 0, 1, 2),
(270, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:54:37', '2020-05-12 14:54:37', 0, 1, 1),
(271, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:54:37', '2020-05-12 14:54:37', 0, 1, 2),
(272, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:54:38', '2020-05-12 14:54:38', 0, 1, 1),
(273, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:54:38', '2020-05-12 14:54:38', 0, 1, 2),
(274, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:54:50', '2020-05-12 14:54:50', 0, 1, 1),
(275, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:54:50', '2020-05-12 14:54:50', 0, 1, 2),
(276, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:54:51', '2020-05-12 14:54:51', 0, 1, 1),
(277, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:54:51', '2020-05-12 14:54:51', 0, 1, 2),
(278, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:54:51', '2020-05-12 14:54:51', 0, 1, 1);
INSERT INTO `history` (`id`, `sentense`, `type_save`, `admin_id`, `record`, `gestionnaire_id`, `utilisateur_id`, `carplan_id`, `prestataire_id`, `created`, `modified`, `protected`, `valide`, `record_key`) VALUES
(279, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:54:52', '2020-05-12 14:54:52', 0, 1, 2),
(280, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:57:28', '2020-05-12 14:57:28', 0, 1, 1),
(281, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:57:28', '2020-05-12 14:57:28', 0, 1, 2),
(282, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:57:28', '2020-05-12 14:57:28', 0, 1, 1),
(283, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:57:29', '2020-05-12 14:57:29', 0, 1, 2),
(284, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:57:29', '2020-05-12 14:57:29', 0, 1, 1),
(285, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:57:29', '2020-05-12 14:57:29', 0, 1, 2),
(286, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:58:26', '2020-05-12 14:58:26', 0, 1, 1),
(287, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:58:27', '2020-05-12 14:58:27', 0, 1, 2),
(288, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:58:30', '2020-05-12 14:58:30', 0, 1, 1),
(289, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:58:30', '2020-05-12 14:58:30', 0, 1, 2),
(290, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:58:31', '2020-05-12 14:58:31', 0, 1, 1),
(291, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:58:31', '2020-05-12 14:58:31', 0, 1, 2),
(292, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:59:15', '2020-05-12 14:59:15', 0, 1, 1),
(293, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:59:15', '2020-05-12 14:59:15', 0, 1, 2),
(294, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:59:16', '2020-05-12 14:59:16', 0, 1, 1),
(295, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:59:16', '2020-05-12 14:59:16', 0, 1, 2),
(296, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:59:17', '2020-05-12 14:59:17', 0, 1, 1),
(297, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:59:17', '2020-05-12 14:59:17', 0, 1, 2),
(298, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:59:20', '2020-05-12 14:59:20', 0, 1, 1),
(299, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:59:20', '2020-05-12 14:59:20', 0, 1, 2),
(300, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:59:21', '2020-05-12 14:59:21', 0, 1, 1),
(301, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:59:21', '2020-05-12 14:59:21', 0, 1, 2),
(302, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:59:22', '2020-05-12 14:59:22', 0, 1, 1),
(303, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 14:59:22', '2020-05-12 14:59:22', 0, 1, 2),
(304, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:01:11', '2020-05-12 15:01:11', 0, 1, 1),
(305, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:01:12', '2020-05-12 15:01:12', 0, 1, 2),
(306, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:01:12', '2020-05-12 15:01:12', 0, 1, 1),
(307, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:01:12', '2020-05-12 15:01:12', 0, 1, 2),
(308, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:01:13', '2020-05-12 15:01:13', 0, 1, 1),
(309, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:01:13', '2020-05-12 15:01:13', 0, 1, 2),
(310, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:02:18', '2020-05-12 15:02:18', 0, 1, 1),
(311, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:02:19', '2020-05-12 15:02:19', 0, 1, 2),
(312, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:02:19', '2020-05-12 15:02:19', 0, 1, 1),
(313, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:02:19', '2020-05-12 15:02:19', 0, 1, 2),
(314, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:02:20', '2020-05-12 15:02:20', 0, 1, 1),
(315, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:02:20', '2020-05-12 15:02:20', 0, 1, 2),
(316, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:04:00', '2020-05-12 15:04:00', 0, 1, 1),
(317, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:04:01', '2020-05-12 15:04:01', 0, 1, 2),
(318, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:04:01', '2020-05-12 15:04:01', 0, 1, 1),
(319, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:04:01', '2020-05-12 15:04:01', 0, 1, 2),
(320, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:04:02', '2020-05-12 15:04:02', 0, 1, 1),
(321, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:04:02', '2020-05-12 15:04:02', 0, 1, 2),
(322, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:05:41', '2020-05-12 15:05:41', 0, 1, 1),
(323, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:05:41', '2020-05-12 15:05:41', 0, 1, 2),
(324, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:05:42', '2020-05-12 15:05:42', 0, 1, 1),
(325, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:05:42', '2020-05-12 15:05:42', 0, 1, 2),
(326, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:05:43', '2020-05-12 15:05:43', 0, 1, 1),
(327, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:05:43', '2020-05-12 15:05:43', 0, 1, 2),
(328, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:08:26', '2020-05-12 15:08:26', 0, 1, 1),
(329, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:08:26', '2020-05-12 15:08:26', 0, 1, 2),
(330, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:08:27', '2020-05-12 15:08:27', 0, 1, 1),
(331, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:08:27', '2020-05-12 15:08:27', 0, 1, 2),
(332, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:08:28', '2020-05-12 15:08:28', 0, 1, 1),
(333, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:08:28', '2020-05-12 15:08:28', 0, 1, 2),
(334, 'Modification des informations de la connexion de Super Gestionnaire  du  12 May 2020 à 14:51', 'update', NULL, 'connexion', NULL, NULL, NULL, NULL, '2020-05-12 15:11:13', '2020-05-12 15:11:13', 0, 1, 3),
(335, 'Nouvelle connexion', 'insert', NULL, 'connexion', 1, NULL, NULL, NULL, '2020-05-12 15:11:13', '2020-05-12 15:11:13', 0, 1, 4),
(336, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:11:14', '2020-05-12 15:11:14', 0, 1, 1),
(337, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:11:14', '2020-05-12 15:11:14', 0, 1, 2),
(338, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:11:15', '2020-05-12 15:11:15', 0, 1, 1),
(339, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:11:15', '2020-05-12 15:11:15', 0, 1, 2),
(340, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:11:45', '2020-05-12 15:11:45', 0, 1, 1),
(341, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:11:46', '2020-05-12 15:11:46', 0, 1, 2),
(342, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:11:46', '2020-05-12 15:11:46', 0, 1, 1),
(343, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:11:46', '2020-05-12 15:11:46', 0, 1, 2),
(344, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:12:11', '2020-05-12 15:12:11', 0, 1, 1),
(345, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:12:11', '2020-05-12 15:12:11', 0, 1, 2),
(346, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:12:12', '2020-05-12 15:12:12', 0, 1, 1),
(347, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:12:12', '2020-05-12 15:12:12', 0, 1, 2),
(348, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:13:04', '2020-05-12 15:13:04', 0, 1, 1),
(349, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:13:04', '2020-05-12 15:13:04', 0, 1, 2),
(350, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:13:05', '2020-05-12 15:13:05', 0, 1, 1),
(351, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:13:05', '2020-05-12 15:13:05', 0, 1, 2),
(352, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:13:12', '2020-05-12 15:13:12', 0, 1, 1),
(353, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:13:12', '2020-05-12 15:13:12', 0, 1, 2),
(354, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:13:13', '2020-05-12 15:13:13', 0, 1, 1),
(355, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:13:13', '2020-05-12 15:13:13', 0, 1, 2),
(356, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:08', '2020-05-12 15:14:08', 0, 1, 1),
(357, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:09', '2020-05-12 15:14:09', 0, 1, 2),
(358, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:09', '2020-05-12 15:14:09', 0, 1, 1),
(359, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:10', '2020-05-12 15:14:10', 0, 1, 2),
(360, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:10', '2020-05-12 15:14:10', 0, 1, 1),
(361, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:10', '2020-05-12 15:14:10', 0, 1, 2),
(362, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:11', '2020-05-12 15:14:11', 0, 1, 1),
(363, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:11', '2020-05-12 15:14:11', 0, 1, 2),
(364, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:17', '2020-05-12 15:14:17', 0, 1, 1),
(365, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:18', '2020-05-12 15:14:18', 0, 1, 2),
(366, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:18', '2020-05-12 15:14:18', 0, 1, 1),
(367, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:18', '2020-05-12 15:14:18', 0, 1, 2),
(368, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:19', '2020-05-12 15:14:19', 0, 1, 1),
(369, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:19', '2020-05-12 15:14:19', 0, 1, 2),
(370, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:20', '2020-05-12 15:14:20', 0, 1, 1),
(371, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:20', '2020-05-12 15:14:20', 0, 1, 2),
(372, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:37', '2020-05-12 15:14:37', 0, 1, 1),
(373, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:37', '2020-05-12 15:14:37', 0, 1, 2),
(374, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:37', '2020-05-12 15:14:37', 0, 1, 1),
(375, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:37', '2020-05-12 15:14:37', 0, 1, 2),
(376, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:38', '2020-05-12 15:14:38', 0, 1, 1),
(377, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:38', '2020-05-12 15:14:38', 0, 1, 2),
(378, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:39', '2020-05-12 15:14:39', 0, 1, 1),
(379, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:39', '2020-05-12 15:14:39', 0, 1, 2),
(380, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:47', '2020-05-12 15:14:47', 0, 1, 1),
(381, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:48', '2020-05-12 15:14:48', 0, 1, 2),
(382, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:48', '2020-05-12 15:14:48', 0, 1, 1),
(383, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:49', '2020-05-12 15:14:49', 0, 1, 2),
(384, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:49', '2020-05-12 15:14:49', 0, 1, 1),
(385, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:49', '2020-05-12 15:14:49', 0, 1, 2),
(386, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:50', '2020-05-12 15:14:50', 0, 1, 1),
(387, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:50', '2020-05-12 15:14:50', 0, 1, 2),
(388, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:51', '2020-05-12 15:14:51', 0, 1, 1),
(389, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:52', '2020-05-12 15:14:52', 0, 1, 2),
(390, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:55', '2020-05-12 15:14:55', 0, 1, 1),
(391, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:56', '2020-05-12 15:14:56', 0, 1, 2),
(392, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:56', '2020-05-12 15:14:56', 0, 1, 1),
(393, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:57', '2020-05-12 15:14:57', 0, 1, 2),
(394, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:58', '2020-05-12 15:14:58', 0, 1, 1),
(395, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:14:58', '2020-05-12 15:14:58', 0, 1, 2),
(396, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:15:01', '2020-05-12 15:15:01', 0, 1, 1),
(397, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:15:01', '2020-05-12 15:15:01', 0, 1, 2),
(398, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:15:35', '2020-05-12 15:15:35', 0, 1, 1),
(399, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:15:35', '2020-05-12 15:15:35', 0, 1, 2),
(400, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:15:49', '2020-05-12 15:15:49', 0, 1, 1),
(401, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:15:50', '2020-05-12 15:15:50', 0, 1, 2),
(402, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:16:00', '2020-05-12 15:16:00', 0, 1, 1),
(403, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:16:01', '2020-05-12 15:16:01', 0, 1, 2),
(404, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:16:41', '2020-05-12 15:16:41', 0, 1, 1),
(405, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:16:41', '2020-05-12 15:16:41', 0, 1, 2),
(406, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:18:22', '2020-05-12 15:18:22', 0, 1, 1),
(407, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:18:22', '2020-05-12 15:18:22', 0, 1, 2),
(408, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:18:22', '2020-05-12 15:18:22', 0, 1, 1),
(409, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:18:23', '2020-05-12 15:18:23', 0, 1, 2),
(410, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:18:23', '2020-05-12 15:18:23', 0, 1, 1),
(411, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:18:23', '2020-05-12 15:18:23', 0, 1, 2),
(412, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:18:46', '2020-05-12 15:18:46', 0, 1, 1),
(413, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:18:47', '2020-05-12 15:18:47', 0, 1, 2),
(414, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:20:45', '2020-05-12 15:20:45', 0, 1, 1),
(415, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:20:45', '2020-05-12 15:20:45', 0, 1, 2),
(416, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:20:47', '2020-05-12 15:20:47', 0, 1, 1),
(417, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:20:47', '2020-05-12 15:20:47', 0, 1, 2),
(418, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:20:48', '2020-05-12 15:20:48', 0, 1, 1),
(419, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:20:48', '2020-05-12 15:20:48', 0, 1, 2),
(420, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:21:07', '2020-05-12 15:21:07', 0, 1, 1),
(421, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:21:07', '2020-05-12 15:21:07', 0, 1, 2),
(422, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:21:09', '2020-05-12 15:21:09', 0, 1, 1),
(423, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:21:09', '2020-05-12 15:21:09', 0, 1, 2),
(424, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:21:10', '2020-05-12 15:21:10', 0, 1, 1),
(425, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:21:10', '2020-05-12 15:21:10', 0, 1, 2),
(426, 'Modification des informations de la connexion de Super Gestionnaire  du  12 May 2020 à 15:11', 'update', NULL, 'connexion', NULL, NULL, NULL, NULL, '2020-05-12 15:40:28', '2020-05-12 15:40:28', 0, 1, 4),
(427, 'Nouvelle connexion', 'insert', NULL, 'connexion', 1, NULL, NULL, NULL, '2020-05-12 15:40:28', '2020-05-12 15:40:28', 0, 1, 5),
(428, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:40:29', '2020-05-12 15:40:29', 0, 1, 1),
(429, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:40:29', '2020-05-12 15:40:29', 0, 1, 2),
(430, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:40:29', '2020-05-12 15:40:29', 0, 1, 1),
(431, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:40:30', '2020-05-12 15:40:30', 0, 1, 2),
(432, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:43:36', '2020-05-12 15:43:36', 0, 1, 1),
(433, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:43:36', '2020-05-12 15:43:36', 0, 1, 2),
(434, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:43:37', '2020-05-12 15:43:37', 0, 1, 1),
(435, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:43:37', '2020-05-12 15:43:37', 0, 1, 2),
(436, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:44:17', '2020-05-12 15:44:17', 0, 1, 1),
(437, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:44:17', '2020-05-12 15:44:17', 0, 1, 2),
(438, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:44:17', '2020-05-12 15:44:17', 0, 1, 1),
(439, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:44:17', '2020-05-12 15:44:17', 0, 1, 2),
(440, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:44:39', '2020-05-12 15:44:39', 0, 1, 1),
(441, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:44:39', '2020-05-12 15:44:39', 0, 1, 2),
(442, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:44:40', '2020-05-12 15:44:40', 0, 1, 1),
(443, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:44:40', '2020-05-12 15:44:40', 0, 1, 2),
(444, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:44:46', '2020-05-12 15:44:46', 0, 1, 1),
(445, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:44:47', '2020-05-12 15:44:47', 0, 1, 2),
(446, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:44:48', '2020-05-12 15:44:48', 0, 1, 1),
(447, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:44:48', '2020-05-12 15:44:48', 0, 1, 2),
(448, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:44:48', '2020-05-12 15:44:48', 0, 1, 1),
(449, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:44:49', '2020-05-12 15:44:49', 0, 1, 2),
(450, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:46:53', '2020-05-12 15:46:53', 0, 1, 1),
(451, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:46:53', '2020-05-12 15:46:53', 0, 1, 2),
(452, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:46:54', '2020-05-12 15:46:54', 0, 1, 1),
(453, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:46:54', '2020-05-12 15:46:54', 0, 1, 2),
(454, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:46:54', '2020-05-12 15:46:54', 0, 1, 1),
(455, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:46:55', '2020-05-12 15:46:55', 0, 1, 2),
(456, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:47:01', '2020-05-12 15:47:01', 0, 1, 1),
(457, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:47:01', '2020-05-12 15:47:01', 0, 1, 2),
(458, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:47:33', '2020-05-12 15:47:33', 0, 1, 1),
(459, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:47:33', '2020-05-12 15:47:33', 0, 1, 2),
(460, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:48:58', '2020-05-12 15:48:58', 0, 1, 1),
(461, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:48:58', '2020-05-12 15:48:58', 0, 1, 2),
(462, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:52:26', '2020-05-12 15:52:26', 0, 1, 1),
(463, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:52:27', '2020-05-12 15:52:27', 0, 1, 2),
(464, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:53:11', '2020-05-12 15:53:11', 0, 1, 1),
(465, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:53:12', '2020-05-12 15:53:12', 0, 1, 2),
(466, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:54:17', '2020-05-12 15:54:17', 0, 1, 1),
(467, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:54:17', '2020-05-12 15:54:17', 0, 1, 2),
(468, 'Modification des informations de la connexion de Super Gestionnaire  du  12 May 2020 à 15:40', 'update', NULL, 'connexion', NULL, NULL, NULL, NULL, '2020-05-12 15:55:22', '2020-05-12 15:55:22', 0, 1, 5),
(469, 'Nouvelle connexion', 'insert', NULL, 'connexion', 1, NULL, NULL, NULL, '2020-05-12 15:55:22', '2020-05-12 15:55:22', 0, 1, 6),
(470, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:55:23', '2020-05-12 15:55:23', 0, 1, 1),
(471, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:55:23', '2020-05-12 15:55:23', 0, 1, 2),
(472, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:55:24', '2020-05-12 15:55:24', 0, 1, 1),
(473, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:55:24', '2020-05-12 15:55:24', 0, 1, 2),
(474, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:56:21', '2020-05-12 15:56:21', 0, 1, 1),
(475, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:56:22', '2020-05-12 15:56:22', 0, 1, 2),
(476, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:56:31', '2020-05-12 15:56:31', 0, 1, 1),
(477, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:56:31', '2020-05-12 15:56:31', 0, 1, 2),
(478, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:56:32', '2020-05-12 15:56:32', 0, 1, 1),
(479, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:56:32', '2020-05-12 15:56:32', 0, 1, 2),
(480, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:56:32', '2020-05-12 15:56:32', 0, 1, 1),
(481, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:56:33', '2020-05-12 15:56:33', 0, 1, 2),
(482, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:56:39', '2020-05-12 15:56:39', 0, 1, 1),
(483, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 15:56:39', '2020-05-12 15:56:39', 0, 1, 2),
(484, 'Ajout d\'un nouvel employé dans votre gestion : Manyessé Manyessé', 'insert', NULL, 'carplan', 1, NULL, NULL, NULL, '2020-05-12 16:00:39', '2020-05-12 16:00:39', 0, 1, 1),
(485, 'Nouvelle affectation de  Manyessé Manyessé au véhicule ABARTH immatriculé 662 FP 01', 'insert', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 16:00:39', '2020-05-12 16:00:39', 0, 1, 1),
(486, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 16:00:46', '2020-05-12 16:00:46', 0, 1, 1),
(487, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 16:00:46', '2020-05-12 16:00:46', 0, 1, 2),
(488, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 16:01:28', '2020-05-12 16:01:28', 0, 1, 1),
(489, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 16:01:28', '2020-05-12 16:01:28', 0, 1, 2),
(490, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 16:01:29', '2020-05-12 16:01:29', 0, 1, 1),
(491, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 16:03:32', '2020-05-12 16:03:32', 0, 1, 1),
(492, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 16:03:39', '2020-05-12 16:03:39', 0, 1, 1),
(493, 'Ajout d\'un nouvel employé dans votre gestion : Manyessé Manyessé', 'insert', NULL, 'carplan', 1, NULL, NULL, NULL, '2020-05-12 16:03:39', '2020-05-12 16:03:39', 0, 1, 2),
(494, 'Nouvelle affectation de  Manyessé Manyessé au véhicule ABARTH immatriculé 662 FP 01', 'insert', NULL, 'affectation', 1, NULL, 2, NULL, '2020-05-12 16:03:39', '2020-05-12 16:03:39', 0, 1, 2),
(495, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, 2, NULL, '2020-05-12 16:03:39', '2020-05-12 16:03:39', 0, 1, 2),
(496, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 16:03:40', '2020-05-12 16:03:40', 0, 1, 1),
(497, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 16:03:40', '2020-05-12 16:03:40', 0, 1, 2),
(498, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 16:03:42', '2020-05-12 16:03:42', 0, 1, 1),
(499, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 2, NULL, '2020-05-12 16:03:42', '2020-05-12 16:03:42', 0, 1, 2),
(500, 'Modification des informations de la connexion de Super Gestionnaire  du  12 May 2020 à 15:55', 'update', NULL, 'connexion', NULL, NULL, NULL, NULL, '2020-05-12 16:22:02', '2020-05-12 16:22:02', 0, 1, 6),
(501, 'Nouvelle connexion', 'insert', NULL, 'connexion', 1, NULL, NULL, NULL, '2020-05-12 16:22:02', '2020-05-12 16:22:02', 0, 1, 7),
(502, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 16:22:04', '2020-05-12 16:22:04', 0, 1, 1),
(503, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 16:22:05', '2020-05-12 16:22:05', 0, 1, 2),
(504, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 16:22:05', '2020-05-12 16:22:05', 0, 1, 1),
(505, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 16:22:05', '2020-05-12 16:22:05', 0, 1, 2),
(506, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 16:22:30', '2020-05-12 16:22:30', 0, 1, 1),
(507, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 16:22:30', '2020-05-12 16:22:30', 0, 1, 2),
(508, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 16:22:32', '2020-05-12 16:22:32', 0, 1, 1),
(509, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 16:22:32', '2020-05-12 16:22:32', 0, 1, 2),
(510, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 16:22:33', '2020-05-12 16:22:33', 0, 1, 1),
(511, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 16:22:33', '2020-05-12 16:22:33', 0, 1, 2),
(512, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 16:23:02', '2020-05-12 16:23:02', 0, 1, 1),
(513, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 16:23:02', '2020-05-12 16:23:02', 0, 1, 2),
(514, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 16:23:03', '2020-05-12 16:23:03', 0, 1, 1),
(515, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 2, NULL, '2020-05-12 16:23:04', '2020-05-12 16:23:04', 0, 1, 2),
(516, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 16:23:50', '2020-05-12 16:23:50', 0, 1, 1),
(517, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 2, NULL, '2020-05-12 16:23:50', '2020-05-12 16:23:50', 0, 1, 2),
(518, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 16:23:57', '2020-05-12 16:23:57', 0, 1, 1),
(519, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 2, NULL, '2020-05-12 16:23:57', '2020-05-12 16:23:57', 0, 1, 2),
(520, 'Ajout d\'un nouvel employé dans votre gestion : Manyessé Manyessé', 'insert', NULL, 'carplan', 1, NULL, NULL, NULL, '2020-05-12 16:23:58', '2020-05-12 16:23:58', 0, 1, 3),
(521, 'Nouvelle affectation de  Manyessé Manyessé au véhicule ABARTH immatriculé 662 FP 01', 'insert', NULL, 'affectation', 1, NULL, 3, NULL, '2020-05-12 16:23:58', '2020-05-12 16:23:58', 0, 1, 3),
(522, 'Modification des informations de l\'affectation N° 3 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, 3, NULL, '2020-05-12 16:23:58', '2020-05-12 16:23:58', 0, 1, 3),
(523, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 16:23:59', '2020-05-12 16:23:59', 0, 1, 1),
(524, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 16:23:59', '2020-05-12 16:23:59', 0, 1, 2),
(525, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 16:24:01', '2020-05-12 16:24:01', 0, 1, 1),
(526, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 2, NULL, '2020-05-12 16:24:01', '2020-05-12 16:24:01', 0, 1, 2),
(527, 'Modification des informations de l\'affectation N° 3 ', 'update', NULL, 'affectation', 1, NULL, 3, NULL, '2020-05-12 16:24:02', '2020-05-12 16:24:02', 0, 1, 3),
(528, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 16:29:42', '2020-05-12 16:29:42', 0, 1, 1),
(529, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 16:29:42', '2020-05-12 16:29:42', 0, 1, 2),
(530, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 16:29:44', '2020-05-12 16:29:44', 0, 1, 1),
(531, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 2, NULL, '2020-05-12 16:29:44', '2020-05-12 16:29:44', 0, 1, 2),
(532, 'Modification des informations de l\'affectation N° 3 ', 'update', NULL, 'affectation', 1, NULL, 3, NULL, '2020-05-12 16:29:44', '2020-05-12 16:29:44', 0, 1, 3),
(533, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 16:30:24', '2020-05-12 16:30:24', 0, 1, 1),
(534, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 2, NULL, '2020-05-12 16:30:25', '2020-05-12 16:30:25', 0, 1, 2),
(535, 'Modification des informations de l\'affectation N° 3 ', 'update', NULL, 'affectation', 1, NULL, 3, NULL, '2020-05-12 16:30:25', '2020-05-12 16:30:25', 0, 1, 3),
(536, 'Ajout d\'un nouvel employé dans votre gestion : Manyessé Manyessé', 'insert', NULL, 'carplan', 1, NULL, NULL, NULL, '2020-05-12 16:30:25', '2020-05-12 16:30:25', 0, 1, 4),
(537, 'Nouvelle affectation de  Manyessé Manyessé au véhicule ABARTH immatriculé 662 FP 01', 'insert', NULL, 'affectation', 1, NULL, 4, NULL, '2020-05-12 16:30:26', '2020-05-12 16:30:26', 0, 1, 4),
(538, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 16:31:10', '2020-05-12 16:31:10', 0, 1, 1),
(539, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 2, NULL, '2020-05-12 16:31:10', '2020-05-12 16:31:10', 0, 1, 2),
(540, 'Modification des informations de l\'affectation N° 3 ', 'update', NULL, 'affectation', 1, NULL, 3, NULL, '2020-05-12 16:31:11', '2020-05-12 16:31:11', 0, 1, 3),
(541, 'Modification des informations de l\'affectation N° 4 ', 'update', NULL, 'affectation', 1, NULL, 4, NULL, '2020-05-12 16:31:11', '2020-05-12 16:31:11', 0, 1, 4),
(542, 'Ajout d\'un nouvel employé dans votre gestion : Manyessé Manyessé', 'insert', NULL, 'carplan', 1, NULL, NULL, NULL, '2020-05-12 16:31:11', '2020-05-12 16:31:11', 0, 1, 5),
(543, 'Nouvelle affectation de  Manyessé Manyessé au véhicule ABARTH immatriculé 662 FP 01', 'insert', NULL, 'affectation', 1, NULL, 5, NULL, '2020-05-12 16:31:12', '2020-05-12 16:31:12', 0, 1, 5),
(544, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 16:31:32', '2020-05-12 16:31:32', 0, 1, 1),
(545, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 2, NULL, '2020-05-12 16:31:32', '2020-05-12 16:31:32', 0, 1, 2),
(546, 'Modification des informations de l\'affectation N° 3 ', 'update', NULL, 'affectation', 1, NULL, 3, NULL, '2020-05-12 16:31:33', '2020-05-12 16:31:33', 0, 1, 3),
(547, 'Modification des informations de l\'affectation N° 4 ', 'update', NULL, 'affectation', 1, NULL, 4, NULL, '2020-05-12 16:31:33', '2020-05-12 16:31:33', 0, 1, 4),
(548, 'Modification des informations de l\'affectation N° 5 ', 'update', NULL, 'affectation', 1, NULL, 5, NULL, '2020-05-12 16:31:33', '2020-05-12 16:31:33', 0, 1, 5),
(549, 'Ajout d\'un nouvel employé dans votre gestion : Manyessé Manyessé', 'insert', NULL, 'carplan', 1, NULL, NULL, NULL, '2020-05-12 16:31:34', '2020-05-12 16:31:34', 0, 1, 6),
(550, 'Nouvelle affectation de  Manyessé Manyessé au véhicule ABARTH immatriculé 662 FP 01', 'insert', NULL, 'affectation', 1, NULL, 6, NULL, '2020-05-12 16:31:34', '2020-05-12 16:31:34', 0, 1, 6),
(551, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 16:32:16', '2020-05-12 16:32:16', 0, 1, 1),
(552, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 2, NULL, '2020-05-12 16:32:16', '2020-05-12 16:32:16', 0, 1, 2),
(553, 'Modification des informations de l\'affectation N° 3 ', 'update', NULL, 'affectation', 1, NULL, 3, NULL, '2020-05-12 16:32:16', '2020-05-12 16:32:16', 0, 1, 3),
(554, 'Modification des informations de l\'affectation N° 4 ', 'update', NULL, 'affectation', 1, NULL, 4, NULL, '2020-05-12 16:32:17', '2020-05-12 16:32:17', 0, 1, 4),
(555, 'Modification des informations de l\'affectation N° 5 ', 'update', NULL, 'affectation', 1, NULL, 5, NULL, '2020-05-12 16:32:17', '2020-05-12 16:32:17', 0, 1, 5),
(556, 'Modification des informations de l\'affectation N° 6 ', 'update', NULL, 'affectation', 1, NULL, 6, NULL, '2020-05-12 16:32:17', '2020-05-12 16:32:17', 0, 1, 6),
(557, 'Ajout d\'un nouvel employé dans votre gestion : Manyessé Manyessé', 'insert', NULL, 'carplan', 1, NULL, NULL, NULL, '2020-05-12 16:32:17', '2020-05-12 16:32:17', 0, 1, 7),
(558, 'Nouvelle affectation de  Manyessé Manyessé au véhicule ABARTH immatriculé 662 FP 01', 'insert', NULL, 'affectation', 1, NULL, 7, NULL, '2020-05-12 16:32:18', '2020-05-12 16:32:18', 0, 1, 7),
(559, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 16:32:48', '2020-05-12 16:32:48', 0, 1, 1),
(560, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 2, NULL, '2020-05-12 16:32:48', '2020-05-12 16:32:48', 0, 1, 2),
(561, 'Modification des informations de l\'affectation N° 3 ', 'update', NULL, 'affectation', 1, NULL, 3, NULL, '2020-05-12 16:32:49', '2020-05-12 16:32:49', 0, 1, 3),
(562, 'Modification des informations de l\'affectation N° 4 ', 'update', NULL, 'affectation', 1, NULL, 4, NULL, '2020-05-12 16:32:49', '2020-05-12 16:32:49', 0, 1, 4),
(563, 'Modification des informations de l\'affectation N° 5 ', 'update', NULL, 'affectation', 1, NULL, 5, NULL, '2020-05-12 16:32:49', '2020-05-12 16:32:49', 0, 1, 5),
(564, 'Modification des informations de l\'affectation N° 6 ', 'update', NULL, 'affectation', 1, NULL, 6, NULL, '2020-05-12 16:32:49', '2020-05-12 16:32:49', 0, 1, 6);
INSERT INTO `history` (`id`, `sentense`, `type_save`, `admin_id`, `record`, `gestionnaire_id`, `utilisateur_id`, `carplan_id`, `prestataire_id`, `created`, `modified`, `protected`, `valide`, `record_key`) VALUES
(565, 'Modification des informations de l\'affectation N° 7 ', 'update', NULL, 'affectation', 1, NULL, 7, NULL, '2020-05-12 16:32:50', '2020-05-12 16:32:50', 0, 1, 7),
(566, 'Ajout d\'un nouvel employé dans votre gestion : Manyessé Manyessé', 'insert', NULL, 'carplan', 1, NULL, NULL, NULL, '2020-05-12 16:32:50', '2020-05-12 16:32:50', 0, 1, 8),
(567, 'Nouvelle affectation de  Manyessé Manyessé au véhicule ABARTH immatriculé 662 FP 01', 'insert', NULL, 'affectation', 1, NULL, 8, NULL, '2020-05-12 16:32:50', '2020-05-12 16:32:50', 0, 1, 8),
(568, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 16:34:07', '2020-05-12 16:34:07', 0, 1, 1),
(569, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 16:34:08', '2020-05-12 16:34:08', 0, 1, 2),
(570, 'Ajout d\'un nouvel employé dans votre gestion : Manyessé Manyessé', 'insert', NULL, 'carplan', 1, NULL, NULL, NULL, '2020-05-12 16:34:55', '2020-05-12 16:34:55', 0, 1, 1),
(571, 'Nouvelle affectation de  Manyessé Manyessé au véhicule ABARTH immatriculé 662 FP 01', 'insert', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 16:34:55', '2020-05-12 16:34:55', 0, 1, 1),
(572, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 16:34:56', '2020-05-12 16:34:56', 0, 1, 1),
(573, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 16:34:57', '2020-05-12 16:34:57', 0, 1, 2),
(574, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-12 16:34:58', '2020-05-12 16:34:58', 0, 1, 1),
(575, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 16:34:58', '2020-05-12 16:34:58', 0, 1, 1),
(576, 'Modification des informations de la connexion de Super Gestionnaire  du  12 May 2020 à 16:22', 'update', NULL, 'connexion', NULL, NULL, NULL, NULL, '2020-05-12 17:08:04', '2020-05-12 17:08:04', 0, 1, 7),
(577, 'Nouvelle connexion', 'insert', NULL, 'connexion', 1, NULL, NULL, NULL, '2020-05-12 17:08:04', '2020-05-12 17:08:04', 0, 1, 8),
(578, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:08:06', '2020-05-12 17:08:06', 0, 1, 1),
(579, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:08:06', '2020-05-12 17:08:06', 0, 1, 2),
(580, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:08:06', '2020-05-12 17:08:06', 0, 1, 1),
(581, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:08:07', '2020-05-12 17:08:07', 0, 1, 2),
(582, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:08:45', '2020-05-12 17:08:45', 0, 1, 1),
(583, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:08:46', '2020-05-12 17:08:46', 0, 1, 2),
(584, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:08:48', '2020-05-12 17:08:48', 0, 1, 1),
(585, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:08:48', '2020-05-12 17:08:48', 0, 1, 2),
(586, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:08:48', '2020-05-12 17:08:48', 0, 1, 1),
(587, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:08:49', '2020-05-12 17:08:49', 0, 1, 2),
(588, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:09:17', '2020-05-12 17:09:17', 0, 1, 1),
(589, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:09:17', '2020-05-12 17:09:17', 0, 1, 2),
(590, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 17:09:18', '2020-05-12 17:09:18', 0, 1, 1),
(591, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:18:47', '2020-05-12 17:18:47', 0, 1, 1),
(592, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:18:48', '2020-05-12 17:18:48', 0, 1, 2),
(593, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 17:18:49', '2020-05-12 17:18:49', 0, 1, 1),
(594, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:19:08', '2020-05-12 17:19:08', 0, 1, 1),
(595, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:19:08', '2020-05-12 17:19:08', 0, 1, 2),
(596, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 17:19:09', '2020-05-12 17:19:09', 0, 1, 1),
(597, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:22:13', '2020-05-12 17:22:13', 0, 1, 1),
(598, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:22:13', '2020-05-12 17:22:13', 0, 1, 2),
(599, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-12 17:22:14', '2020-05-12 17:22:14', 0, 1, 1),
(600, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 17:22:14', '2020-05-12 17:22:14', 0, 1, 1),
(601, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:22:55', '2020-05-12 17:22:55', 0, 1, 1),
(602, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:22:56', '2020-05-12 17:22:56', 0, 1, 2),
(603, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-12 17:22:58', '2020-05-12 17:22:58', 0, 1, 1),
(604, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 17:22:58', '2020-05-12 17:22:58', 0, 1, 1),
(605, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:23:14', '2020-05-12 17:23:14', 0, 1, 1),
(606, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:23:14', '2020-05-12 17:23:14', 0, 1, 2),
(607, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-12 17:23:16', '2020-05-12 17:23:16', 0, 1, 1),
(608, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 17:23:16', '2020-05-12 17:23:16', 0, 1, 1),
(609, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:23:43', '2020-05-12 17:23:43', 0, 1, 1),
(610, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:23:43', '2020-05-12 17:23:43', 0, 1, 2),
(611, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-12 17:23:44', '2020-05-12 17:23:44', 0, 1, 1),
(612, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 17:23:45', '2020-05-12 17:23:45', 0, 1, 1),
(613, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:25:13', '2020-05-12 17:25:13', 0, 1, 1),
(614, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:25:13', '2020-05-12 17:25:13', 0, 1, 2),
(615, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-12 17:25:15', '2020-05-12 17:25:15', 0, 1, 1),
(616, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 17:25:15', '2020-05-12 17:25:15', 0, 1, 1),
(617, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:27:00', '2020-05-12 17:27:00', 0, 1, 1),
(618, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:27:00', '2020-05-12 17:27:00', 0, 1, 2),
(619, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-12 17:27:02', '2020-05-12 17:27:02', 0, 1, 1),
(620, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 17:27:02', '2020-05-12 17:27:02', 0, 1, 1),
(621, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:27:21', '2020-05-12 17:27:21', 0, 1, 1),
(622, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:27:22', '2020-05-12 17:27:22', 0, 1, 2),
(623, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-12 17:27:23', '2020-05-12 17:27:23', 0, 1, 1),
(624, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 17:27:23', '2020-05-12 17:27:23', 0, 1, 1),
(625, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:28:51', '2020-05-12 17:28:51', 0, 1, 1),
(626, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:28:52', '2020-05-12 17:28:52', 0, 1, 2),
(627, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-12 17:28:53', '2020-05-12 17:28:53', 0, 1, 1),
(628, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 17:28:54', '2020-05-12 17:28:54', 0, 1, 1),
(629, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:29:30', '2020-05-12 17:29:30', 0, 1, 1),
(630, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:29:31', '2020-05-12 17:29:31', 0, 1, 2),
(631, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-12 17:29:32', '2020-05-12 17:29:32', 0, 1, 1),
(632, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 17:29:32', '2020-05-12 17:29:32', 0, 1, 1),
(633, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:29:57', '2020-05-12 17:29:57', 0, 1, 1),
(634, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:29:57', '2020-05-12 17:29:57', 0, 1, 2),
(635, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-12 17:29:58', '2020-05-12 17:29:58', 0, 1, 1),
(636, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 17:29:59', '2020-05-12 17:29:59', 0, 1, 1),
(637, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:30:48', '2020-05-12 17:30:48', 0, 1, 1),
(638, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:30:48', '2020-05-12 17:30:48', 0, 1, 2),
(639, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-12 17:30:49', '2020-05-12 17:30:49', 0, 1, 1),
(640, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 17:30:50', '2020-05-12 17:30:50', 0, 1, 1),
(641, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:31:13', '2020-05-12 17:31:13', 0, 1, 1),
(642, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:31:13', '2020-05-12 17:31:13', 0, 1, 2),
(643, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-12 17:31:14', '2020-05-12 17:31:14', 0, 1, 1),
(644, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 17:31:15', '2020-05-12 17:31:15', 0, 1, 1),
(645, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:33:30', '2020-05-12 17:33:30', 0, 1, 1),
(646, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:33:30', '2020-05-12 17:33:30', 0, 1, 2),
(647, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-12 17:33:31', '2020-05-12 17:33:31', 0, 1, 1),
(648, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 17:33:31', '2020-05-12 17:33:31', 0, 1, 1),
(649, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:33:47', '2020-05-12 17:33:47', 0, 1, 1),
(650, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:33:48', '2020-05-12 17:33:48', 0, 1, 2),
(651, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-12 17:33:49', '2020-05-12 17:33:49', 0, 1, 1),
(652, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 17:33:50', '2020-05-12 17:33:50', 0, 1, 1),
(653, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:36:00', '2020-05-12 17:36:00', 0, 1, 1),
(654, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:36:00', '2020-05-12 17:36:00', 0, 1, 2),
(655, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-12 17:36:02', '2020-05-12 17:36:02', 0, 1, 1),
(656, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 17:36:02', '2020-05-12 17:36:02', 0, 1, 1),
(657, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:36:22', '2020-05-12 17:36:22', 0, 1, 1),
(658, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 17:36:22', '2020-05-12 17:36:22', 0, 1, 2),
(659, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-12 17:36:23', '2020-05-12 17:36:23', 0, 1, 1),
(660, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 17:36:24', '2020-05-12 17:36:24', 0, 1, 1),
(661, 'Modification des informations de la connexion de Super Gestionnaire  du  12 May 2020 à 17:08', 'update', NULL, 'connexion', NULL, NULL, NULL, NULL, '2020-05-12 18:17:07', '2020-05-12 18:17:07', 0, 1, 8),
(662, 'Nouvelle connexion', 'insert', NULL, 'connexion', 1, NULL, NULL, NULL, '2020-05-12 18:17:07', '2020-05-12 18:17:07', 0, 1, 9),
(663, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 18:17:11', '2020-05-12 18:17:11', 0, 1, 1),
(664, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 18:17:11', '2020-05-12 18:17:11', 0, 1, 2),
(665, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 18:17:11', '2020-05-12 18:17:11', 0, 1, 1),
(666, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 18:17:12', '2020-05-12 18:17:12', 0, 1, 2),
(667, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 18:17:24', '2020-05-12 18:17:24', 0, 1, 1),
(668, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 18:17:25', '2020-05-12 18:17:25', 0, 1, 2),
(669, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 18:17:26', '2020-05-12 18:17:26', 0, 1, 1),
(670, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 18:17:28', '2020-05-12 18:17:28', 0, 1, 2),
(671, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 18:17:28', '2020-05-12 18:17:28', 0, 1, 1),
(672, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 18:17:28', '2020-05-12 18:17:28', 0, 1, 2),
(673, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 18:20:17', '2020-05-12 18:20:17', 0, 1, 1),
(674, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-12 18:20:18', '2020-05-12 18:20:18', 0, 1, 2),
(675, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-12 18:20:19', '2020-05-12 18:20:19', 0, 1, 1),
(676, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-12 18:20:20', '2020-05-12 18:20:20', 0, 1, 1),
(677, 'Modification des informations de la connexion de Super Gestionnaire  du  12 May 2020 à 18:17', 'update', NULL, 'connexion', NULL, NULL, NULL, NULL, '2020-05-13 10:06:57', '2020-05-13 10:06:57', 0, 1, 9),
(678, 'Nouvelle connexion', 'insert', NULL, 'connexion', 1, NULL, NULL, NULL, '2020-05-13 10:06:58', '2020-05-13 10:06:58', 0, 1, 10),
(679, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:07:02', '2020-05-13 10:07:02', 0, 1, 1),
(680, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:07:03', '2020-05-13 10:07:03', 0, 1, 2),
(681, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:07:03', '2020-05-13 10:07:03', 0, 1, 1),
(682, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:07:03', '2020-05-13 10:07:03', 0, 1, 2),
(683, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:08:04', '2020-05-13 10:08:04', 0, 1, 1),
(684, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:08:04', '2020-05-13 10:08:04', 0, 1, 2),
(685, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:08:05', '2020-05-13 10:08:05', 0, 1, 1),
(686, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:08:05', '2020-05-13 10:08:05', 0, 1, 2),
(687, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:08:06', '2020-05-13 10:08:06', 0, 1, 1),
(688, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:08:08', '2020-05-13 10:08:08', 0, 1, 2),
(689, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:08:26', '2020-05-13 10:08:26', 0, 1, 1),
(690, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:08:26', '2020-05-13 10:08:26', 0, 1, 2),
(691, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 10:08:28', '2020-05-13 10:08:28', 0, 1, 1),
(692, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 10:08:29', '2020-05-13 10:08:29', 0, 1, 1),
(693, 'Modification des informations de la connexion de Super Gestionnaire  du  13 May 2020 à 10:06', 'update', NULL, 'connexion', NULL, NULL, NULL, NULL, '2020-05-13 10:25:23', '2020-05-13 10:25:23', 0, 1, 10),
(694, 'Nouvelle connexion', 'insert', NULL, 'connexion', 1, NULL, NULL, NULL, '2020-05-13 10:25:23', '2020-05-13 10:25:23', 0, 1, 11),
(695, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:25:24', '2020-05-13 10:25:24', 0, 1, 1),
(696, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:25:25', '2020-05-13 10:25:25', 0, 1, 2),
(697, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:25:25', '2020-05-13 10:25:25', 0, 1, 1),
(698, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:25:25', '2020-05-13 10:25:25', 0, 1, 2),
(699, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:25:40', '2020-05-13 10:25:40', 0, 1, 1),
(700, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:25:40', '2020-05-13 10:25:40', 0, 1, 2),
(701, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:25:41', '2020-05-13 10:25:41', 0, 1, 1),
(702, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:25:42', '2020-05-13 10:25:42', 0, 1, 2),
(703, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:25:42', '2020-05-13 10:25:42', 0, 1, 1),
(704, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:25:42', '2020-05-13 10:25:42', 0, 1, 2),
(705, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:25:48', '2020-05-13 10:25:48', 0, 1, 1),
(706, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:25:48', '2020-05-13 10:25:48', 0, 1, 2),
(707, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 10:25:49', '2020-05-13 10:25:49', 0, 1, 1),
(708, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 10:25:50', '2020-05-13 10:25:50', 0, 1, 1),
(709, 'Modification des informations de la connexion de Super Gestionnaire  du  13 May 2020 à 10:25', 'update', NULL, 'connexion', NULL, NULL, NULL, NULL, '2020-05-13 10:27:48', '2020-05-13 10:27:48', 0, 1, 11),
(710, 'Nouvelle connexion', 'insert', NULL, 'connexion', 1, NULL, NULL, NULL, '2020-05-13 10:27:49', '2020-05-13 10:27:49', 0, 1, 12),
(711, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:27:52', '2020-05-13 10:27:52', 0, 1, 1),
(712, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:27:52', '2020-05-13 10:27:52', 0, 1, 2),
(713, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:27:53', '2020-05-13 10:27:53', 0, 1, 1),
(714, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:27:53', '2020-05-13 10:27:53', 0, 1, 2),
(715, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:29:15', '2020-05-13 10:29:15', 0, 1, 1),
(716, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:29:15', '2020-05-13 10:29:15', 0, 1, 2),
(717, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:29:18', '2020-05-13 10:29:18', 0, 1, 1),
(718, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:29:18', '2020-05-13 10:29:18', 0, 1, 2),
(719, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:29:18', '2020-05-13 10:29:18', 0, 1, 1),
(720, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:29:19', '2020-05-13 10:29:19', 0, 1, 2),
(721, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:29:24', '2020-05-13 10:29:24', 0, 1, 1),
(722, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:29:24', '2020-05-13 10:29:24', 0, 1, 2),
(723, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 10:29:26', '2020-05-13 10:29:26', 0, 1, 1),
(724, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 10:29:26', '2020-05-13 10:29:26', 0, 1, 1),
(725, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:30:23', '2020-05-13 10:30:23', 0, 1, 1),
(726, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:30:23', '2020-05-13 10:30:23', 0, 1, 2),
(727, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 10:30:25', '2020-05-13 10:30:25', 0, 1, 1),
(728, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 10:30:25', '2020-05-13 10:30:25', 0, 1, 1),
(729, 'Modification des informations de la connexion de Super Gestionnaire  du  13 May 2020 à 10:27', 'update', NULL, 'connexion', NULL, NULL, NULL, NULL, '2020-05-13 10:31:01', '2020-05-13 10:31:01', 0, 1, 12),
(730, 'Nouvelle connexion', 'insert', NULL, 'connexion', 1, NULL, NULL, NULL, '2020-05-13 10:31:02', '2020-05-13 10:31:02', 0, 1, 13),
(731, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:31:04', '2020-05-13 10:31:04', 0, 1, 1),
(732, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:31:04', '2020-05-13 10:31:04', 0, 1, 2),
(733, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:31:04', '2020-05-13 10:31:04', 0, 1, 1),
(734, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:31:05', '2020-05-13 10:31:05', 0, 1, 2),
(735, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:31:18', '2020-05-13 10:31:18', 0, 1, 1),
(736, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:31:19', '2020-05-13 10:31:19', 0, 1, 2),
(737, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:31:20', '2020-05-13 10:31:20', 0, 1, 1),
(738, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:31:21', '2020-05-13 10:31:21', 0, 1, 2),
(739, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:31:21', '2020-05-13 10:31:21', 0, 1, 1),
(740, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:31:21', '2020-05-13 10:31:21', 0, 1, 2),
(741, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:31:26', '2020-05-13 10:31:26', 0, 1, 1),
(742, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:31:26', '2020-05-13 10:31:26', 0, 1, 2),
(743, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 10:31:27', '2020-05-13 10:31:27', 0, 1, 1),
(744, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 10:31:27', '2020-05-13 10:31:27', 0, 1, 1),
(745, 'Modification des informations de la connexion de Super Gestionnaire  du  13 May 2020 à 10:31', 'update', NULL, 'connexion', NULL, NULL, NULL, NULL, '2020-05-13 10:32:19', '2020-05-13 10:32:19', 0, 1, 13),
(746, 'Nouvelle connexion', 'insert', NULL, 'connexion', 1, NULL, NULL, NULL, '2020-05-13 10:32:19', '2020-05-13 10:32:19', 0, 1, 14),
(747, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:32:21', '2020-05-13 10:32:21', 0, 1, 1),
(748, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:32:21', '2020-05-13 10:32:21', 0, 1, 2),
(749, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:32:21', '2020-05-13 10:32:21', 0, 1, 1),
(750, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:32:22', '2020-05-13 10:32:22', 0, 1, 2),
(751, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:32:28', '2020-05-13 10:32:28', 0, 1, 1),
(752, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:32:29', '2020-05-13 10:32:29', 0, 1, 2),
(753, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:32:31', '2020-05-13 10:32:31', 0, 1, 1),
(754, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:32:31', '2020-05-13 10:32:31', 0, 1, 2),
(755, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:32:32', '2020-05-13 10:32:32', 0, 1, 1),
(756, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:32:32', '2020-05-13 10:32:32', 0, 1, 2),
(757, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:32:36', '2020-05-13 10:32:36', 0, 1, 1),
(758, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:32:36', '2020-05-13 10:32:36', 0, 1, 2),
(759, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 10:32:37', '2020-05-13 10:32:37', 0, 1, 1),
(760, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 10:32:37', '2020-05-13 10:32:37', 0, 1, 1),
(761, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:33:50', '2020-05-13 10:33:50', 0, 1, 1),
(762, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:33:51', '2020-05-13 10:33:51', 0, 1, 2),
(763, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 10:33:55', '2020-05-13 10:33:55', 0, 1, 1),
(764, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 10:33:57', '2020-05-13 10:33:57', 0, 1, 1),
(765, 'Modification des informations de l\'employé Manyessé Manyessé.', 'update', NULL, 'carplan', 1, NULL, NULL, NULL, '2020-05-13 10:35:33', '2020-05-13 10:35:33', 0, 1, 1),
(766, 'Modification des informations de l\'employé Manyessé 45 Manyessé.', 'update', NULL, 'carplan', 1, NULL, NULL, NULL, '2020-05-13 10:36:31', '2020-05-13 10:36:31', 0, 1, 1),
(767, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:36:31', '2020-05-13 10:36:31', 0, 1, 1),
(768, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:36:32', '2020-05-13 10:36:32', 0, 1, 2),
(769, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 10:36:33', '2020-05-13 10:36:33', 0, 1, 1),
(770, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 10:36:33', '2020-05-13 10:36:33', 0, 1, 1),
(771, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:44:21', '2020-05-13 10:44:21', 0, 1, 1),
(772, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:44:22', '2020-05-13 10:44:22', 0, 1, 2),
(773, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 10:44:23', '2020-05-13 10:44:23', 0, 1, 1),
(774, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 10:44:24', '2020-05-13 10:44:24', 0, 1, 1),
(775, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 10:44:42', '2020-05-13 10:44:42', 0, 1, 1),
(776, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 10:44:42', '2020-05-13 10:44:42', 0, 1, 1),
(777, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:44:43', '2020-05-13 10:44:43', 0, 1, 1),
(778, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:44:43', '2020-05-13 10:44:43', 0, 1, 2),
(779, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 10:44:44', '2020-05-13 10:44:44', 0, 1, 1),
(780, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:46:22', '2020-05-13 10:46:22', 0, 1, 1),
(781, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:46:23', '2020-05-13 10:46:23', 0, 1, 2),
(782, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 10:46:24', '2020-05-13 10:46:24', 0, 1, 1),
(783, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:52:12', '2020-05-13 10:52:12', 0, 1, 1),
(784, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:52:12', '2020-05-13 10:52:12', 0, 1, 2),
(785, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 10:52:14', '2020-05-13 10:52:14', 0, 1, 1),
(786, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:55:34', '2020-05-13 10:55:34', 0, 1, 1),
(787, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:55:34', '2020-05-13 10:55:34', 0, 1, 2),
(788, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:55:53', '2020-05-13 10:55:53', 0, 1, 1),
(789, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:55:53', '2020-05-13 10:55:53', 0, 1, 2),
(790, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 10:55:54', '2020-05-13 10:55:54', 0, 1, 1),
(791, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:56:42', '2020-05-13 10:56:42', 0, 1, 1),
(792, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 10:56:43', '2020-05-13 10:56:43', 0, 1, 2),
(793, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 10:56:44', '2020-05-13 10:56:44', 0, 1, 1),
(794, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 10:57:15', '2020-05-13 10:57:15', 0, 1, 1),
(795, 'Modification des informations de la connexion de Super Gestionnaire  du  13 May 2020 à 10:32', 'update', NULL, 'connexion', NULL, NULL, NULL, NULL, '2020-05-13 11:13:40', '2020-05-13 11:13:40', 0, 1, 14),
(796, 'Nouvelle connexion', 'insert', NULL, 'connexion', 1, NULL, NULL, NULL, '2020-05-13 11:13:40', '2020-05-13 11:13:40', 0, 1, 15),
(797, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:13:42', '2020-05-13 11:13:42', 0, 1, 1),
(798, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:13:42', '2020-05-13 11:13:42', 0, 1, 2),
(799, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:13:43', '2020-05-13 11:13:43', 0, 1, 1),
(800, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:13:43', '2020-05-13 11:13:43', 0, 1, 2),
(801, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:13:55', '2020-05-13 11:13:55', 0, 1, 1),
(802, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:13:56', '2020-05-13 11:13:56', 0, 1, 2),
(803, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:13:57', '2020-05-13 11:13:57', 0, 1, 1),
(804, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:13:58', '2020-05-13 11:13:58', 0, 1, 2),
(805, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:13:58', '2020-05-13 11:13:58', 0, 1, 1),
(806, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:13:59', '2020-05-13 11:13:59', 0, 1, 2),
(807, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:14:04', '2020-05-13 11:14:04', 0, 1, 1),
(808, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:14:05', '2020-05-13 11:14:05', 0, 1, 2),
(809, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:14:06', '2020-05-13 11:14:06', 0, 1, 1),
(810, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:14:29', '2020-05-13 11:14:29', 0, 1, 1),
(811, 'Nouvelle affectation de  Manyessé 45 Manyessé au véhicule ABARTH immatriculé 662 FP 01', 'insert', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:14:29', '2020-05-13 11:14:29', 0, 1, 2),
(812, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:14:30', '2020-05-13 11:14:30', 0, 1, 1),
(813, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:14:30', '2020-05-13 11:14:30', 0, 1, 2),
(814, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:14:32', '2020-05-13 11:14:32', 0, 1, 1),
(815, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 11:14:32', '2020-05-13 11:14:32', 0, 1, 2),
(816, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:14:32', '2020-05-13 11:14:32', 0, 1, 2),
(817, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:16:35', '2020-05-13 11:16:35', 0, 1, 1),
(818, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:16:35', '2020-05-13 11:16:35', 0, 1, 2),
(819, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:16:36', '2020-05-13 11:16:36', 0, 1, 1),
(820, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 11:16:37', '2020-05-13 11:16:37', 0, 1, 2),
(821, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:16:37', '2020-05-13 11:16:37', 0, 1, 2),
(822, 'Modification des informations de la connexion de Super Gestionnaire  du  13 May 2020 à 11:13', 'update', NULL, 'connexion', NULL, NULL, NULL, NULL, '2020-05-13 11:30:33', '2020-05-13 11:30:33', 0, 1, 15),
(823, 'Nouvelle connexion', 'insert', NULL, 'connexion', 1, NULL, NULL, NULL, '2020-05-13 11:30:34', '2020-05-13 11:30:34', 0, 1, 16),
(824, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:30:36', '2020-05-13 11:30:36', 0, 1, 1),
(825, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:30:37', '2020-05-13 11:30:37', 0, 1, 2),
(826, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:30:37', '2020-05-13 11:30:37', 0, 1, 1),
(827, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:30:37', '2020-05-13 11:30:37', 0, 1, 2),
(828, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:30:44', '2020-05-13 11:30:44', 0, 1, 1),
(829, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:30:45', '2020-05-13 11:30:45', 0, 1, 2),
(830, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:30:47', '2020-05-13 11:30:47', 0, 1, 1),
(831, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:30:47', '2020-05-13 11:30:47', 0, 1, 2),
(832, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:30:48', '2020-05-13 11:30:48', 0, 1, 1),
(833, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:30:48', '2020-05-13 11:30:48', 0, 1, 2),
(834, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:30:52', '2020-05-13 11:30:52', 0, 1, 1),
(835, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:30:52', '2020-05-13 11:30:52', 0, 1, 2),
(836, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:30:54', '2020-05-13 11:30:54', 0, 1, 1),
(837, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 11:30:54', '2020-05-13 11:30:54', 0, 1, 2),
(838, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:30:54', '2020-05-13 11:30:54', 0, 1, 2),
(839, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:32:08', '2020-05-13 11:32:08', 0, 1, 1),
(840, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:32:08', '2020-05-13 11:32:08', 0, 1, 2),
(841, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:32:09', '2020-05-13 11:32:09', 0, 1, 1),
(842, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:32:09', '2020-05-13 11:32:09', 0, 1, 2),
(843, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:32:10', '2020-05-13 11:32:10', 0, 1, 1),
(844, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 11:32:11', '2020-05-13 11:32:11', 0, 1, 2),
(845, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:32:11', '2020-05-13 11:32:11', 0, 1, 2),
(846, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:34:39', '2020-05-13 11:34:39', 0, 1, 1),
(847, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:34:39', '2020-05-13 11:34:39', 0, 1, 2),
(848, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:34:40', '2020-05-13 11:34:40', 0, 1, 1),
(849, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:34:40', '2020-05-13 11:34:40', 0, 1, 2),
(850, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:34:41', '2020-05-13 11:34:41', 0, 1, 1);
INSERT INTO `history` (`id`, `sentense`, `type_save`, `admin_id`, `record`, `gestionnaire_id`, `utilisateur_id`, `carplan_id`, `prestataire_id`, `created`, `modified`, `protected`, `valide`, `record_key`) VALUES
(851, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 11:34:42', '2020-05-13 11:34:42', 0, 1, 2),
(852, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:34:42', '2020-05-13 11:34:42', 0, 1, 2),
(853, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:35:48', '2020-05-13 11:35:48', 0, 1, 1),
(854, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:35:48', '2020-05-13 11:35:48', 0, 1, 2),
(855, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:35:49', '2020-05-13 11:35:49', 0, 1, 1),
(856, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:35:49', '2020-05-13 11:35:49', 0, 1, 2),
(857, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:35:50', '2020-05-13 11:35:50', 0, 1, 1),
(858, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 11:35:51', '2020-05-13 11:35:51', 0, 1, 2),
(859, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:35:51', '2020-05-13 11:35:51', 0, 1, 2),
(860, 'Modification des informations de la connexion de Super Gestionnaire  du  13 May 2020 à 11:30', 'update', NULL, 'connexion', NULL, NULL, NULL, NULL, '2020-05-13 11:47:17', '2020-05-13 11:47:17', 0, 1, 16),
(861, 'Nouvelle connexion', 'insert', NULL, 'connexion', 1, NULL, NULL, NULL, '2020-05-13 11:47:17', '2020-05-13 11:47:17', 0, 1, 17),
(862, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:47:19', '2020-05-13 11:47:19', 0, 1, 1),
(863, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:47:20', '2020-05-13 11:47:20', 0, 1, 2),
(864, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:47:20', '2020-05-13 11:47:20', 0, 1, 1),
(865, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:47:20', '2020-05-13 11:47:20', 0, 1, 2),
(866, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:47:32', '2020-05-13 11:47:32', 0, 1, 1),
(867, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:47:32', '2020-05-13 11:47:32', 0, 1, 2),
(868, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:47:34', '2020-05-13 11:47:34', 0, 1, 1),
(869, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:47:34', '2020-05-13 11:47:34', 0, 1, 2),
(870, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:47:35', '2020-05-13 11:47:35', 0, 1, 1),
(871, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:47:35', '2020-05-13 11:47:35', 0, 1, 2),
(872, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:47:39', '2020-05-13 11:47:39', 0, 1, 1),
(873, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:47:39', '2020-05-13 11:47:39', 0, 1, 2),
(874, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:47:40', '2020-05-13 11:47:40', 0, 1, 1),
(875, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:47:40', '2020-05-13 11:47:40', 0, 1, 2),
(876, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:47:41', '2020-05-13 11:47:41', 0, 1, 1),
(877, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 11:47:42', '2020-05-13 11:47:42', 0, 1, 2),
(878, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:47:42', '2020-05-13 11:47:42', 0, 1, 2),
(879, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:48:18', '2020-05-13 11:48:18', 0, 1, 1),
(880, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:48:18', '2020-05-13 11:48:18', 0, 1, 2),
(881, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:48:19', '2020-05-13 11:48:19', 0, 1, 1),
(882, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:48:19', '2020-05-13 11:48:19', 0, 1, 2),
(883, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:48:20', '2020-05-13 11:48:20', 0, 1, 1),
(884, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 11:48:21', '2020-05-13 11:48:21', 0, 1, 2),
(885, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:48:21', '2020-05-13 11:48:21', 0, 1, 2),
(886, 'Nouvelle carte grise pour la ABARTH LAND CRUSER immatriculé 662 FP 01', 'insert', NULL, 'cartegrise', 1, NULL, NULL, NULL, '2020-05-13 11:49:47', '2020-05-13 11:49:47', 0, 1, 1),
(887, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:49:48', '2020-05-13 11:49:48', 0, 1, 1),
(888, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:49:48', '2020-05-13 11:49:48', 0, 1, 2),
(889, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:49:49', '2020-05-13 11:49:49', 0, 1, 1),
(890, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:49:49', '2020-05-13 11:49:49', 0, 1, 2),
(891, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:49:50', '2020-05-13 11:49:50', 0, 1, 1),
(892, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 11:49:51', '2020-05-13 11:49:51', 0, 1, 2),
(893, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:49:51', '2020-05-13 11:49:51', 0, 1, 2),
(894, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:51:57', '2020-05-13 11:51:57', 0, 1, 1),
(895, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:51:58', '2020-05-13 11:51:58', 0, 1, 2),
(896, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:51:58', '2020-05-13 11:51:58', 0, 1, 1),
(897, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:51:58', '2020-05-13 11:51:58', 0, 1, 2),
(898, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:52:00', '2020-05-13 11:52:00', 0, 1, 1),
(899, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 11:52:00', '2020-05-13 11:52:00', 0, 1, 2),
(900, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:52:00', '2020-05-13 11:52:00', 0, 1, 2),
(901, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:53:50', '2020-05-13 11:53:50', 0, 1, 1),
(902, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:53:50', '2020-05-13 11:53:50', 0, 1, 2),
(903, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:53:51', '2020-05-13 11:53:51', 0, 1, 1),
(904, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:53:51', '2020-05-13 11:53:51', 0, 1, 2),
(905, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:53:52', '2020-05-13 11:53:52', 0, 1, 1),
(906, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 11:53:53', '2020-05-13 11:53:53', 0, 1, 2),
(907, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:53:53', '2020-05-13 11:53:53', 0, 1, 2),
(908, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:54:26', '2020-05-13 11:54:26', 0, 1, 1),
(909, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:54:26', '2020-05-13 11:54:26', 0, 1, 2),
(910, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:54:27', '2020-05-13 11:54:27', 0, 1, 1),
(911, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:54:27', '2020-05-13 11:54:27', 0, 1, 2),
(912, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:54:29', '2020-05-13 11:54:29', 0, 1, 1),
(913, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 11:54:29', '2020-05-13 11:54:29', 0, 1, 2),
(914, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:54:29', '2020-05-13 11:54:29', 0, 1, 2),
(915, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:54:50', '2020-05-13 11:54:50', 0, 1, 1),
(916, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:54:50', '2020-05-13 11:54:50', 0, 1, 2),
(917, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:54:50', '2020-05-13 11:54:50', 0, 1, 1),
(918, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:54:51', '2020-05-13 11:54:51', 0, 1, 2),
(919, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:54:52', '2020-05-13 11:54:52', 0, 1, 1),
(920, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 11:54:53', '2020-05-13 11:54:53', 0, 1, 2),
(921, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:54:53', '2020-05-13 11:54:53', 0, 1, 2),
(922, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:56:17', '2020-05-13 11:56:17', 0, 1, 1),
(923, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:56:18', '2020-05-13 11:56:18', 0, 1, 2),
(924, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:56:18', '2020-05-13 11:56:18', 0, 1, 1),
(925, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:56:18', '2020-05-13 11:56:18', 0, 1, 2),
(926, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:56:20', '2020-05-13 11:56:20', 0, 1, 1),
(927, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 11:56:20', '2020-05-13 11:56:20', 0, 1, 2),
(928, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:56:21', '2020-05-13 11:56:21', 0, 1, 2),
(929, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:59:54', '2020-05-13 11:59:54', 0, 1, 1),
(930, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:59:54', '2020-05-13 11:59:54', 0, 1, 2),
(931, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:59:54', '2020-05-13 11:59:54', 0, 1, 1),
(932, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 11:59:55', '2020-05-13 11:59:55', 0, 1, 2),
(933, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:59:56', '2020-05-13 11:59:56', 0, 1, 1),
(934, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 11:59:57', '2020-05-13 11:59:57', 0, 1, 2),
(935, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 11:59:57', '2020-05-13 11:59:57', 0, 1, 2),
(936, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:03:35', '2020-05-13 12:03:35', 0, 1, 1),
(937, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:03:35', '2020-05-13 12:03:35', 0, 1, 2),
(938, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:03:36', '2020-05-13 12:03:36', 0, 1, 1),
(939, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:03:36', '2020-05-13 12:03:36', 0, 1, 2),
(940, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 12:03:38', '2020-05-13 12:03:38', 0, 1, 1),
(941, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 12:03:38', '2020-05-13 12:03:38', 0, 1, 2),
(942, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 12:03:39', '2020-05-13 12:03:39', 0, 1, 2),
(943, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:06:50', '2020-05-13 12:06:50', 0, 1, 1),
(944, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:06:50', '2020-05-13 12:06:50', 0, 1, 2),
(945, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:06:51', '2020-05-13 12:06:51', 0, 1, 1),
(946, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:06:51', '2020-05-13 12:06:51', 0, 1, 2),
(947, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 12:06:52', '2020-05-13 12:06:52', 0, 1, 1),
(948, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 12:06:53', '2020-05-13 12:06:53', 0, 1, 2),
(949, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 12:06:53', '2020-05-13 12:06:53', 0, 1, 2),
(950, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:08:04', '2020-05-13 12:08:04', 0, 1, 1),
(951, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:08:05', '2020-05-13 12:08:05', 0, 1, 2),
(952, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:08:05', '2020-05-13 12:08:05', 0, 1, 1),
(953, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:08:05', '2020-05-13 12:08:05', 0, 1, 2),
(954, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 12:08:07', '2020-05-13 12:08:07', 0, 1, 1),
(955, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 12:08:07', '2020-05-13 12:08:07', 0, 1, 2),
(956, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 12:08:07', '2020-05-13 12:08:07', 0, 1, 2),
(957, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:09:21', '2020-05-13 12:09:21', 0, 1, 1),
(958, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:09:22', '2020-05-13 12:09:22', 0, 1, 2),
(959, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:09:23', '2020-05-13 12:09:23', 0, 1, 1),
(960, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:09:23', '2020-05-13 12:09:23', 0, 1, 2),
(961, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 12:09:25', '2020-05-13 12:09:25', 0, 1, 1),
(962, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 12:09:25', '2020-05-13 12:09:25', 0, 1, 2),
(963, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 12:09:26', '2020-05-13 12:09:26', 0, 1, 2),
(964, 'Nouvelle piece administrative pour la ABARTH LAND CRUSER immatriculé 662 FP 01', 'insert', NULL, 'piecevehicule', 1, NULL, NULL, NULL, '2020-05-13 12:11:49', '2020-05-13 12:11:49', 0, 1, 2),
(965, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:14:50', '2020-05-13 12:14:50', 0, 1, 1),
(966, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:14:50', '2020-05-13 12:14:50', 0, 1, 2),
(967, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:14:51', '2020-05-13 12:14:51', 0, 1, 1),
(968, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:14:51', '2020-05-13 12:14:51', 0, 1, 2),
(969, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 12:14:52', '2020-05-13 12:14:52', 0, 1, 1),
(970, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 12:14:53', '2020-05-13 12:14:53', 0, 1, 2),
(971, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 12:14:53', '2020-05-13 12:14:53', 0, 1, 2),
(972, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:15:30', '2020-05-13 12:15:30', 0, 1, 1),
(973, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:15:30', '2020-05-13 12:15:30', 0, 1, 2),
(974, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:15:31', '2020-05-13 12:15:31', 0, 1, 1),
(975, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:15:31', '2020-05-13 12:15:31', 0, 1, 2),
(976, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 12:15:32', '2020-05-13 12:15:32', 0, 1, 1),
(977, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 12:15:33', '2020-05-13 12:15:33', 0, 1, 2),
(978, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 12:15:33', '2020-05-13 12:15:33', 0, 1, 2),
(979, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:16:35', '2020-05-13 12:16:35', 0, 1, 1),
(980, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:16:36', '2020-05-13 12:16:36', 0, 1, 2),
(981, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:16:36', '2020-05-13 12:16:36', 0, 1, 1),
(982, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:16:36', '2020-05-13 12:16:36', 0, 1, 2),
(983, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 12:16:38', '2020-05-13 12:16:38', 0, 1, 1),
(984, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 12:16:38', '2020-05-13 12:16:38', 0, 1, 2),
(985, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 12:16:39', '2020-05-13 12:16:39', 0, 1, 2),
(986, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:17:14', '2020-05-13 12:17:14', 0, 1, 1),
(987, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:17:14', '2020-05-13 12:17:14', 0, 1, 2),
(988, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:17:15', '2020-05-13 12:17:15', 0, 1, 1),
(989, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:17:15', '2020-05-13 12:17:15', 0, 1, 2),
(990, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 12:17:16', '2020-05-13 12:17:16', 0, 1, 1),
(991, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 12:17:17', '2020-05-13 12:17:17', 0, 1, 2),
(992, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 12:17:17', '2020-05-13 12:17:17', 0, 1, 2),
(993, 'Modification des informations de la connexion de Super Gestionnaire  du  13 May 2020 à 11:47', 'update', NULL, 'connexion', NULL, NULL, NULL, NULL, '2020-05-13 12:33:35', '2020-05-13 12:33:35', 0, 1, 17),
(994, 'Nouvelle connexion', 'insert', NULL, 'connexion', 1, NULL, NULL, NULL, '2020-05-13 12:33:35', '2020-05-13 12:33:35', 0, 1, 18),
(995, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:33:38', '2020-05-13 12:33:38', 0, 1, 1),
(996, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:33:38', '2020-05-13 12:33:38', 0, 1, 2),
(997, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:33:38', '2020-05-13 12:33:38', 0, 1, 1),
(998, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:33:39', '2020-05-13 12:33:39', 0, 1, 2),
(999, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:33:54', '2020-05-13 12:33:54', 0, 1, 1),
(1000, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:33:54', '2020-05-13 12:33:54', 0, 1, 2),
(1001, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:33:57', '2020-05-13 12:33:57', 0, 1, 1),
(1002, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:33:57', '2020-05-13 12:33:57', 0, 1, 2),
(1003, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:33:58', '2020-05-13 12:33:58', 0, 1, 1),
(1004, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:33:58', '2020-05-13 12:33:58', 0, 1, 2),
(1005, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:34:34', '2020-05-13 12:34:34', 0, 1, 1),
(1006, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:34:34', '2020-05-13 12:34:34', 0, 1, 2),
(1007, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:34:34', '2020-05-13 12:34:34', 0, 1, 1),
(1008, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:34:35', '2020-05-13 12:34:35', 0, 1, 2),
(1009, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 12:34:36', '2020-05-13 12:34:36', 0, 1, 1),
(1010, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 12:34:36', '2020-05-13 12:34:36', 0, 1, 2),
(1011, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 12:34:37', '2020-05-13 12:34:37', 0, 1, 2),
(1012, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:50:01', '2020-05-13 12:50:01', 0, 1, 1),
(1013, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:50:02', '2020-05-13 12:50:02', 0, 1, 2),
(1014, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:51:21', '2020-05-13 12:51:21', 0, 1, 1),
(1015, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:51:21', '2020-05-13 12:51:21', 0, 1, 2),
(1016, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:51:57', '2020-05-13 12:51:57', 0, 1, 1),
(1017, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:51:57', '2020-05-13 12:51:57', 0, 1, 2),
(1018, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:53:25', '2020-05-13 12:53:25', 0, 1, 1),
(1019, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 12:53:25', '2020-05-13 12:53:25', 0, 1, 2),
(1020, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:04:29', '2020-05-13 13:04:29', 0, 1, 1),
(1021, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:04:30', '2020-05-13 13:04:30', 0, 1, 2),
(1022, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:04:44', '2020-05-13 13:04:44', 0, 1, 1),
(1023, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:04:44', '2020-05-13 13:04:44', 0, 1, 2),
(1024, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:06:50', '2020-05-13 13:06:50', 0, 1, 1),
(1025, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:06:50', '2020-05-13 13:06:50', 0, 1, 2),
(1026, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:11:17', '2020-05-13 13:11:17', 0, 1, 1),
(1027, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:11:17', '2020-05-13 13:11:17', 0, 1, 2),
(1028, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:11:19', '2020-05-13 13:11:19', 0, 1, 1),
(1029, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:11:19', '2020-05-13 13:11:19', 0, 1, 2),
(1030, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:11:20', '2020-05-13 13:11:20', 0, 1, 1),
(1031, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:11:20', '2020-05-13 13:11:20', 0, 1, 2),
(1032, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:13:04', '2020-05-13 13:13:04', 0, 1, 1),
(1033, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:13:05', '2020-05-13 13:13:05', 0, 1, 2),
(1034, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:13:07', '2020-05-13 13:13:07', 0, 1, 1),
(1035, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:13:08', '2020-05-13 13:13:08', 0, 1, 2),
(1036, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:13:08', '2020-05-13 13:13:08', 0, 1, 1),
(1037, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:13:08', '2020-05-13 13:13:08', 0, 1, 2),
(1038, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:13:15', '2020-05-13 13:13:15', 0, 1, 1),
(1039, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:13:16', '2020-05-13 13:13:16', 0, 1, 2),
(1040, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:13:16', '2020-05-13 13:13:16', 0, 1, 1),
(1041, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:13:16', '2020-05-13 13:13:16', 0, 1, 2),
(1042, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 13:13:18', '2020-05-13 13:13:18', 0, 1, 1),
(1043, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 13:13:18', '2020-05-13 13:13:18', 0, 1, 2),
(1044, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 13:13:18', '2020-05-13 13:13:18', 0, 1, 2),
(1045, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:16:20', '2020-05-13 13:16:20', 0, 1, 1),
(1046, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:16:20', '2020-05-13 13:16:20', 0, 1, 2),
(1047, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:24:16', '2020-05-13 13:24:16', 0, 1, 1),
(1048, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:24:17', '2020-05-13 13:24:17', 0, 1, 2),
(1049, 'Modification des informations de la connexion de Super Gestionnaire  du  13 May 2020 à 12:33', 'update', NULL, 'connexion', NULL, NULL, NULL, NULL, '2020-05-13 13:57:27', '2020-05-13 13:57:27', 0, 1, 18),
(1050, 'Nouvelle connexion', 'insert', NULL, 'connexion', 1, NULL, NULL, NULL, '2020-05-13 13:57:27', '2020-05-13 13:57:27', 0, 1, 19),
(1051, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:57:29', '2020-05-13 13:57:29', 0, 1, 1),
(1052, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:57:30', '2020-05-13 13:57:30', 0, 1, 2),
(1053, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:57:30', '2020-05-13 13:57:30', 0, 1, 1),
(1054, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:57:31', '2020-05-13 13:57:31', 0, 1, 2),
(1055, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:57:45', '2020-05-13 13:57:45', 0, 1, 1),
(1056, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:57:45', '2020-05-13 13:57:45', 0, 1, 2),
(1057, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:59:03', '2020-05-13 13:59:03', 0, 1, 1),
(1058, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 13:59:04', '2020-05-13 13:59:04', 0, 1, 2),
(1059, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:01:08', '2020-05-13 14:01:08', 0, 1, 1),
(1060, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:01:08', '2020-05-13 14:01:08', 0, 1, 2),
(1061, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:05:05', '2020-05-13 14:05:05', 0, 1, 1),
(1062, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:05:06', '2020-05-13 14:05:06', 0, 1, 2),
(1063, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:06:27', '2020-05-13 14:06:27', 0, 1, 1),
(1064, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:06:28', '2020-05-13 14:06:28', 0, 1, 2),
(1065, 'Modification des informations de la connexion de Super Gestionnaire  du  13 May 2020 à 13:57', 'update', NULL, 'connexion', NULL, NULL, NULL, NULL, '2020-05-13 14:16:45', '2020-05-13 14:16:45', 0, 1, 19),
(1066, 'Nouvelle connexion', 'insert', NULL, 'connexion', 1, NULL, NULL, NULL, '2020-05-13 14:16:45', '2020-05-13 14:16:45', 0, 1, 20),
(1067, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:16:47', '2020-05-13 14:16:47', 0, 1, 1),
(1068, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:16:48', '2020-05-13 14:16:48', 0, 1, 2),
(1069, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:16:48', '2020-05-13 14:16:48', 0, 1, 1),
(1070, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:16:48', '2020-05-13 14:16:48', 0, 1, 2),
(1071, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:18:37', '2020-05-13 14:18:37', 0, 1, 1),
(1072, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:18:38', '2020-05-13 14:18:38', 0, 1, 2),
(1073, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:27:42', '2020-05-13 14:27:42', 0, 1, 1),
(1074, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:27:43', '2020-05-13 14:27:43', 0, 1, 2),
(1075, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:27:54', '2020-05-13 14:27:54', 0, 1, 1),
(1076, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:27:55', '2020-05-13 14:27:55', 0, 1, 2),
(1077, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:29:08', '2020-05-13 14:29:08', 0, 1, 1),
(1078, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:29:09', '2020-05-13 14:29:09', 0, 1, 2),
(1079, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:31:38', '2020-05-13 14:31:38', 0, 1, 1),
(1080, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:31:39', '2020-05-13 14:31:39', 0, 1, 2),
(1081, 'Nouvelle location de vehicule chez Devaris PRESTATAIRE', 'insert', NULL, 'location', 1, NULL, NULL, NULL, '2020-05-13 14:34:24', '2020-05-13 14:34:24', 0, 1, 1),
(1082, 'Enregistrement d\'un nouveau véhicule N°3 immatriculé 4785 GT 01.', 'insert', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:34:24', '2020-05-13 14:34:24', 0, 1, 3),
(1083, 'Nouvelle location de vehicule chez Devaris PRESTATAIRE', 'insert', NULL, 'location', 1, NULL, NULL, NULL, '2020-05-13 14:38:21', '2020-05-13 14:38:21', 0, 1, 2),
(1084, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:38:21', '2020-05-13 14:38:21', 0, 1, 3),
(1085, 'Enregistrement d\'un nouveau véhicule N°4 immatriculé 4024 HK 01.', 'insert', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:38:21', '2020-05-13 14:38:21', 0, 1, 4),
(1086, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:38:27', '2020-05-13 14:38:27', 0, 1, 1),
(1087, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:38:28', '2020-05-13 14:38:28', 0, 1, 2),
(1088, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:38:28', '2020-05-13 14:38:28', 0, 1, 3),
(1089, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:38:29', '2020-05-13 14:38:29', 0, 1, 4),
(1090, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:41:35', '2020-05-13 14:41:35', 0, 1, 1),
(1091, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:41:36', '2020-05-13 14:41:36', 0, 1, 2),
(1092, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:41:36', '2020-05-13 14:41:36', 0, 1, 3),
(1093, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:41:37', '2020-05-13 14:41:37', 0, 1, 4),
(1094, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:41:37', '2020-05-13 14:41:37', 0, 1, 1),
(1095, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:41:37', '2020-05-13 14:41:37', 0, 1, 2),
(1096, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:41:38', '2020-05-13 14:41:38', 0, 1, 3),
(1097, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:41:39', '2020-05-13 14:41:39', 0, 1, 4),
(1098, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 14:41:40', '2020-05-13 14:41:40', 0, 1, 1),
(1099, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 14:41:41', '2020-05-13 14:41:41', 0, 1, 2),
(1100, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 14:41:41', '2020-05-13 14:41:41', 0, 1, 2),
(1101, 'Modification des informations de la connexion de Super Gestionnaire  du  13 May 2020 à 14:16', 'update', NULL, 'connexion', NULL, NULL, NULL, NULL, '2020-05-13 14:52:51', '2020-05-13 14:52:51', 0, 1, 20),
(1102, 'Nouvelle connexion', 'insert', NULL, 'connexion', 1, NULL, NULL, NULL, '2020-05-13 14:52:51', '2020-05-13 14:52:51', 0, 1, 21),
(1103, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:52:53', '2020-05-13 14:52:53', 0, 1, 1),
(1104, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:52:54', '2020-05-13 14:52:54', 0, 1, 2),
(1105, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:52:54', '2020-05-13 14:52:54', 0, 1, 3),
(1106, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:52:55', '2020-05-13 14:52:55', 0, 1, 4),
(1107, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:52:55', '2020-05-13 14:52:55', 0, 1, 1),
(1108, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:52:56', '2020-05-13 14:52:56', 0, 1, 2),
(1109, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:52:57', '2020-05-13 14:52:57', 0, 1, 3),
(1110, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:52:57', '2020-05-13 14:52:57', 0, 1, 4),
(1111, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:57:26', '2020-05-13 14:57:26', 0, 1, 1),
(1112, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:57:26', '2020-05-13 14:57:26', 0, 1, 2),
(1113, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:57:27', '2020-05-13 14:57:27', 0, 1, 3),
(1114, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:57:27', '2020-05-13 14:57:27', 0, 1, 4),
(1115, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:57:29', '2020-05-13 14:57:29', 0, 1, 1),
(1116, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:57:30', '2020-05-13 14:57:30', 0, 1, 2),
(1117, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:57:30', '2020-05-13 14:57:30', 0, 1, 3),
(1118, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:57:31', '2020-05-13 14:57:31', 0, 1, 4),
(1119, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:57:31', '2020-05-13 14:57:31', 0, 1, 1),
(1120, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:57:32', '2020-05-13 14:57:32', 0, 1, 2),
(1121, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:57:32', '2020-05-13 14:57:32', 0, 1, 3),
(1122, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:57:33', '2020-05-13 14:57:33', 0, 1, 4),
(1123, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:59:16', '2020-05-13 14:59:16', 0, 1, 1),
(1124, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:59:16', '2020-05-13 14:59:16', 0, 1, 2),
(1125, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:59:17', '2020-05-13 14:59:17', 0, 1, 3),
(1126, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:59:17', '2020-05-13 14:59:17', 0, 1, 4),
(1127, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:59:19', '2020-05-13 14:59:19', 0, 1, 1),
(1128, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:59:20', '2020-05-13 14:59:20', 0, 1, 2),
(1129, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:59:21', '2020-05-13 14:59:21', 0, 1, 3),
(1130, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:59:22', '2020-05-13 14:59:22', 0, 1, 4),
(1131, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:59:22', '2020-05-13 14:59:22', 0, 1, 1),
(1132, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:59:22', '2020-05-13 14:59:22', 0, 1, 2),
(1133, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:59:23', '2020-05-13 14:59:23', 0, 1, 3),
(1134, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 14:59:24', '2020-05-13 14:59:24', 0, 1, 4),
(1135, 'Modification des informations de la connexion de Super Gestionnaire  du  13 May 2020 à 14:52', 'update', NULL, 'connexion', NULL, NULL, NULL, NULL, '2020-05-13 15:18:30', '2020-05-13 15:18:30', 0, 1, 21);
INSERT INTO `history` (`id`, `sentense`, `type_save`, `admin_id`, `record`, `gestionnaire_id`, `utilisateur_id`, `carplan_id`, `prestataire_id`, `created`, `modified`, `protected`, `valide`, `record_key`) VALUES
(1136, 'Nouvelle connexion', 'insert', NULL, 'connexion', 1, NULL, NULL, NULL, '2020-05-13 15:18:30', '2020-05-13 15:18:30', 0, 1, 22),
(1137, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:18:32', '2020-05-13 15:18:32', 0, 1, 1),
(1138, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:18:33', '2020-05-13 15:18:33', 0, 1, 2),
(1139, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:18:34', '2020-05-13 15:18:34', 0, 1, 3),
(1140, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:18:34', '2020-05-13 15:18:34', 0, 1, 4),
(1141, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:18:35', '2020-05-13 15:18:35', 0, 1, 1),
(1142, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:18:35', '2020-05-13 15:18:35', 0, 1, 2),
(1143, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:18:36', '2020-05-13 15:18:36', 0, 1, 3),
(1144, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:18:36', '2020-05-13 15:18:36', 0, 1, 4),
(1145, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:19:44', '2020-05-13 15:19:44', 0, 1, 1),
(1146, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:19:45', '2020-05-13 15:19:45', 0, 1, 2),
(1147, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:19:45', '2020-05-13 15:19:45', 0, 1, 3),
(1148, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:19:46', '2020-05-13 15:19:46', 0, 1, 4),
(1149, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:19:51', '2020-05-13 15:19:51', 0, 1, 1),
(1150, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:19:52', '2020-05-13 15:19:52', 0, 1, 2),
(1151, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:19:52', '2020-05-13 15:19:52', 0, 1, 3),
(1152, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:19:53', '2020-05-13 15:19:53', 0, 1, 4),
(1153, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:19:55', '2020-05-13 15:19:55', 0, 1, 1),
(1154, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:19:55', '2020-05-13 15:19:55', 0, 1, 2),
(1155, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:19:56', '2020-05-13 15:19:56', 0, 1, 3),
(1156, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:19:56', '2020-05-13 15:19:56', 0, 1, 4),
(1157, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:19:57', '2020-05-13 15:19:57', 0, 1, 1),
(1158, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:19:57', '2020-05-13 15:19:57', 0, 1, 2),
(1159, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:19:57', '2020-05-13 15:19:57', 0, 1, 3),
(1160, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:19:58', '2020-05-13 15:19:58', 0, 1, 4),
(1161, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:27:47', '2020-05-13 15:27:47', 0, 1, 1),
(1162, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:27:48', '2020-05-13 15:27:48', 0, 1, 2),
(1163, 'Modification des informations de la connexion de Super Gestionnaire  du  13 May 2020 à 15:18', 'update', NULL, 'connexion', NULL, NULL, NULL, NULL, '2020-05-13 15:57:24', '2020-05-13 15:57:24', 0, 1, 22),
(1164, 'Nouvelle connexion', 'insert', NULL, 'connexion', 1, NULL, NULL, NULL, '2020-05-13 15:57:24', '2020-05-13 15:57:24', 0, 1, 23),
(1165, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:57:27', '2020-05-13 15:57:27', 0, 1, 1),
(1166, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:57:27', '2020-05-13 15:57:27', 0, 1, 2),
(1167, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:57:28', '2020-05-13 15:57:28', 0, 1, 3),
(1168, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:57:28', '2020-05-13 15:57:28', 0, 1, 4),
(1169, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:57:29', '2020-05-13 15:57:29', 0, 1, 1),
(1170, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:57:29', '2020-05-13 15:57:29', 0, 1, 2),
(1171, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:57:29', '2020-05-13 15:57:29', 0, 1, 3),
(1172, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:57:30', '2020-05-13 15:57:30', 0, 1, 4),
(1173, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:58:02', '2020-05-13 15:58:02', 0, 1, 1),
(1174, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:58:02', '2020-05-13 15:58:02', 0, 1, 2),
(1175, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:58:03', '2020-05-13 15:58:03', 0, 1, 3),
(1176, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:58:03', '2020-05-13 15:58:03', 0, 1, 4),
(1177, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:58:06', '2020-05-13 15:58:06', 0, 1, 1),
(1178, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:58:06', '2020-05-13 15:58:06', 0, 1, 2),
(1179, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:58:07', '2020-05-13 15:58:07', 0, 1, 3),
(1180, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:58:07', '2020-05-13 15:58:07', 0, 1, 4),
(1181, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:58:08', '2020-05-13 15:58:08', 0, 1, 1),
(1182, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:58:08', '2020-05-13 15:58:08', 0, 1, 2),
(1183, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:58:08', '2020-05-13 15:58:08', 0, 1, 3),
(1184, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:58:09', '2020-05-13 15:58:09', 0, 1, 4),
(1185, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:58:28', '2020-05-13 15:58:28', 0, 1, 1),
(1186, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:58:28', '2020-05-13 15:58:28', 0, 1, 2),
(1187, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:58:29', '2020-05-13 15:58:29', 0, 1, 3),
(1188, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:58:29', '2020-05-13 15:58:29', 0, 1, 4),
(1189, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:58:30', '2020-05-13 15:58:30', 0, 1, 1),
(1190, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:58:30', '2020-05-13 15:58:30', 0, 1, 2),
(1191, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:58:30', '2020-05-13 15:58:30', 0, 1, 3),
(1192, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 15:58:31', '2020-05-13 15:58:31', 0, 1, 4),
(1193, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 15:58:32', '2020-05-13 15:58:32', 0, 1, 1),
(1194, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 15:58:33', '2020-05-13 15:58:33', 0, 1, 2),
(1195, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 15:58:33', '2020-05-13 15:58:33', 0, 1, 2),
(1196, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:01:23', '2020-05-13 16:01:23', 0, 1, 1),
(1197, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:01:23', '2020-05-13 16:01:23', 0, 1, 2),
(1198, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:01:24', '2020-05-13 16:01:24', 0, 1, 3),
(1199, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:01:25', '2020-05-13 16:01:25', 0, 1, 4),
(1200, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:07:53', '2020-05-13 16:07:53', 0, 1, 1),
(1201, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:07:53', '2020-05-13 16:07:53', 0, 1, 2),
(1202, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:07:54', '2020-05-13 16:07:54', 0, 1, 3),
(1203, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:07:54', '2020-05-13 16:07:54', 0, 1, 4),
(1204, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:07:56', '2020-05-13 16:07:56', 0, 1, 1),
(1205, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:07:57', '2020-05-13 16:07:57', 0, 1, 2),
(1206, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:07:58', '2020-05-13 16:07:58', 0, 1, 3),
(1207, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:07:58', '2020-05-13 16:07:58', 0, 1, 4),
(1208, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:07:58', '2020-05-13 16:07:58', 0, 1, 1),
(1209, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:07:59', '2020-05-13 16:07:59', 0, 1, 2),
(1210, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:07:59', '2020-05-13 16:07:59', 0, 1, 3),
(1211, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:08:00', '2020-05-13 16:08:00', 0, 1, 4),
(1212, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:08:06', '2020-05-13 16:08:06', 0, 1, 1),
(1213, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:08:06', '2020-05-13 16:08:06', 0, 1, 2),
(1214, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:08:06', '2020-05-13 16:08:06', 0, 1, 3),
(1215, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:08:07', '2020-05-13 16:08:07', 0, 1, 4),
(1216, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:08:07', '2020-05-13 16:08:07', 0, 1, 1),
(1217, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:08:08', '2020-05-13 16:08:08', 0, 1, 2),
(1218, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:08:08', '2020-05-13 16:08:08', 0, 1, 3),
(1219, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:08:09', '2020-05-13 16:08:09', 0, 1, 4),
(1220, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 16:08:10', '2020-05-13 16:08:10', 0, 1, 1),
(1221, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 16:08:10', '2020-05-13 16:08:10', 0, 1, 2),
(1222, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 16:08:10', '2020-05-13 16:08:10', 0, 1, 2),
(1223, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:08:47', '2020-05-13 16:08:47', 0, 1, 1),
(1224, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:08:48', '2020-05-13 16:08:48', 0, 1, 2),
(1225, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:08:48', '2020-05-13 16:08:48', 0, 1, 3),
(1226, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:08:48', '2020-05-13 16:08:48', 0, 1, 4),
(1227, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:08:49', '2020-05-13 16:08:49', 0, 1, 1),
(1228, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:08:49', '2020-05-13 16:08:49', 0, 1, 2),
(1229, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:08:50', '2020-05-13 16:08:50', 0, 1, 3),
(1230, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:08:50', '2020-05-13 16:08:50', 0, 1, 4),
(1231, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 16:08:51', '2020-05-13 16:08:51', 0, 1, 1),
(1232, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 16:08:52', '2020-05-13 16:08:52', 0, 1, 2),
(1233, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 16:08:52', '2020-05-13 16:08:52', 0, 1, 2),
(1234, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 16:12:57', '2020-05-13 16:12:57', 0, 1, 1),
(1235, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 16:12:57', '2020-05-13 16:12:57', 0, 1, 2),
(1236, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 16:12:57', '2020-05-13 16:12:57', 0, 1, 2),
(1237, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:13:09', '2020-05-13 16:13:09', 0, 1, 1),
(1238, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:13:10', '2020-05-13 16:13:10', 0, 1, 2),
(1239, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:13:10', '2020-05-13 16:13:10', 0, 1, 3),
(1240, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:13:11', '2020-05-13 16:13:11', 0, 1, 4),
(1241, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:13:54', '2020-05-13 16:13:54', 0, 1, 1),
(1242, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:13:55', '2020-05-13 16:13:55', 0, 1, 2),
(1243, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:13:56', '2020-05-13 16:13:56', 0, 1, 3),
(1244, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:13:56', '2020-05-13 16:13:56', 0, 1, 4),
(1245, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:19:13', '2020-05-13 16:19:13', 0, 1, 1),
(1246, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:19:14', '2020-05-13 16:19:14', 0, 1, 2),
(1247, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:19:14', '2020-05-13 16:19:14', 0, 1, 3),
(1248, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:19:15', '2020-05-13 16:19:15', 0, 1, 4),
(1249, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:20:23', '2020-05-13 16:20:23', 0, 1, 1),
(1250, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:20:24', '2020-05-13 16:20:24', 0, 1, 2),
(1251, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:20:25', '2020-05-13 16:20:25', 0, 1, 3),
(1252, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:20:25', '2020-05-13 16:20:25', 0, 1, 4),
(1253, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 16:20:47', '2020-05-13 16:20:47', 0, 1, 1),
(1254, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 16:20:47', '2020-05-13 16:20:47', 0, 1, 2),
(1255, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 16:20:48', '2020-05-13 16:20:48', 0, 1, 2),
(1256, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 16:21:12', '2020-05-13 16:21:12', 0, 1, 1),
(1257, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 16:21:13', '2020-05-13 16:21:13', 0, 1, 2),
(1258, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 16:21:13', '2020-05-13 16:21:13', 0, 1, 2),
(1259, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 16:21:30', '2020-05-13 16:21:30', 0, 1, 1),
(1260, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 16:21:31', '2020-05-13 16:21:31', 0, 1, 2),
(1261, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 16:21:31', '2020-05-13 16:21:31', 0, 1, 2),
(1262, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 16:21:56', '2020-05-13 16:21:56', 0, 1, 1),
(1263, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 16:21:57', '2020-05-13 16:21:57', 0, 1, 2),
(1264, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 16:21:57', '2020-05-13 16:21:57', 0, 1, 2),
(1265, 'Ajout d\'un nouveau type de sinistre : Léger accrochage dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:01', '2020-05-13 16:25:01', 0, 1, 1),
(1266, 'Ajout d\'un nouveau type de sinistre : Crevaison dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:01', '2020-05-13 16:25:01', 0, 1, 2),
(1267, 'Ajout d\'un nouveau type de sinistre : Défaillance moteur dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:01', '2020-05-13 16:25:01', 0, 1, 3),
(1268, 'Ajout d\'un nouveau type de sinistre : Accident grave dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:02', '2020-05-13 16:25:02', 0, 1, 4),
(1269, 'Ajout d\'un nouveau type de sinistre : Vol dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:02', '2020-05-13 16:25:02', 0, 1, 5),
(1270, 'Ajout d\'un nouveau type de sinistre : Autre dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:02', '2020-05-13 16:25:02', 0, 1, 6),
(1271, 'Ajout d\'un nouveau type de sinistre : Léger accrochage dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:06', '2020-05-13 16:25:06', 0, 1, 7),
(1272, 'Ajout d\'un nouveau type de sinistre : Crevaison dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:07', '2020-05-13 16:25:07', 0, 1, 8),
(1273, 'Ajout d\'un nouveau type de sinistre : Défaillance moteur dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:08', '2020-05-13 16:25:08', 0, 1, 9),
(1274, 'Ajout d\'un nouveau type de sinistre : Accident grave dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:09', '2020-05-13 16:25:09', 0, 1, 10),
(1275, 'Ajout d\'un nouveau type de sinistre : Vol dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:09', '2020-05-13 16:25:09', 0, 1, 11),
(1276, 'Ajout d\'un nouveau type de sinistre : Autre dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:09', '2020-05-13 16:25:09', 0, 1, 12),
(1277, 'Ajout d\'un nouveau type de sinistre : Léger accrochage dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:11', '2020-05-13 16:25:11', 0, 1, 13),
(1278, 'Ajout d\'un nouveau type de sinistre : Crevaison dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:11', '2020-05-13 16:25:11', 0, 1, 14),
(1279, 'Ajout d\'un nouveau type de sinistre : Défaillance moteur dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:12', '2020-05-13 16:25:12', 0, 1, 15),
(1280, 'Ajout d\'un nouveau type de sinistre : Accident grave dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:12', '2020-05-13 16:25:12', 0, 1, 16),
(1281, 'Ajout d\'un nouveau type de sinistre : Vol dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:12', '2020-05-13 16:25:12', 0, 1, 17),
(1282, 'Ajout d\'un nouveau type de sinistre : Autre dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:13', '2020-05-13 16:25:13', 0, 1, 18),
(1283, 'Ajout d\'un nouveau type de sinistre : Léger accrochage dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:13', '2020-05-13 16:25:13', 0, 1, 19),
(1284, 'Ajout d\'un nouveau type de sinistre : Crevaison dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:13', '2020-05-13 16:25:13', 0, 1, 20),
(1285, 'Ajout d\'un nouveau type de sinistre : Défaillance moteur dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:13', '2020-05-13 16:25:13', 0, 1, 21),
(1286, 'Ajout d\'un nouveau type de sinistre : Accident grave dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:14', '2020-05-13 16:25:14', 0, 1, 22),
(1287, 'Ajout d\'un nouveau type de sinistre : Vol dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:14', '2020-05-13 16:25:14', 0, 1, 23),
(1288, 'Ajout d\'un nouveau type de sinistre : Autre dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:15', '2020-05-13 16:25:15', 0, 1, 24),
(1289, 'Ajout d\'un nouveau type de sinistre : Léger accrochage dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:15', '2020-05-13 16:25:15', 0, 1, 25),
(1290, 'Ajout d\'un nouveau type de sinistre : Crevaison dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:16', '2020-05-13 16:25:16', 0, 1, 26),
(1291, 'Ajout d\'un nouveau type de sinistre : Défaillance moteur dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:16', '2020-05-13 16:25:16', 0, 1, 27),
(1292, 'Ajout d\'un nouveau type de sinistre : Accident grave dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:16', '2020-05-13 16:25:16', 0, 1, 28),
(1293, 'Ajout d\'un nouveau type de sinistre : Vol dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:17', '2020-05-13 16:25:17', 0, 1, 29),
(1294, 'Ajout d\'un nouveau type de sinistre : Autre dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:17', '2020-05-13 16:25:17', 0, 1, 30),
(1295, 'Ajout d\'un nouveau type de sinistre : Léger accrochage dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:18', '2020-05-13 16:25:18', 0, 1, 31),
(1296, 'Ajout d\'un nouveau type de sinistre : Crevaison dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:18', '2020-05-13 16:25:18', 0, 1, 32),
(1297, 'Ajout d\'un nouveau type de sinistre : Défaillance moteur dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:18', '2020-05-13 16:25:18', 0, 1, 33),
(1298, 'Ajout d\'un nouveau type de sinistre : Accident grave dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:18', '2020-05-13 16:25:18', 0, 1, 34),
(1299, 'Ajout d\'un nouveau type de sinistre : Vol dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:18', '2020-05-13 16:25:18', 0, 1, 35),
(1300, 'Ajout d\'un nouveau type de sinistre : Autre dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:18', '2020-05-13 16:25:18', 0, 1, 36),
(1301, 'Ajout d\'un nouveau type de sinistre : Léger accrochage dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:19', '2020-05-13 16:25:19', 0, 1, 37),
(1302, 'Ajout d\'un nouveau type de sinistre : Crevaison dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:19', '2020-05-13 16:25:19', 0, 1, 38),
(1303, 'Ajout d\'un nouveau type de sinistre : Défaillance moteur dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:19', '2020-05-13 16:25:19', 0, 1, 39),
(1304, 'Ajout d\'un nouveau type de sinistre : Accident grave dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:19', '2020-05-13 16:25:19', 0, 1, 40),
(1305, 'Ajout d\'un nouveau type de sinistre : Vol dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:20', '2020-05-13 16:25:20', 0, 1, 41),
(1306, 'Ajout d\'un nouveau type de sinistre : Autre dans les paramétrages', 'insert', NULL, 'typesinistre', 1, NULL, NULL, NULL, '2020-05-13 16:25:20', '2020-05-13 16:25:20', 0, 1, 42),
(1307, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:25:29', '2020-05-13 16:25:29', 0, 1, 1),
(1308, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:25:30', '2020-05-13 16:25:30', 0, 1, 2),
(1309, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:25:30', '2020-05-13 16:25:30', 0, 1, 3),
(1310, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:25:31', '2020-05-13 16:25:31', 0, 1, 4),
(1311, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:25:33', '2020-05-13 16:25:33', 0, 1, 1),
(1312, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:25:33', '2020-05-13 16:25:33', 0, 1, 2),
(1313, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:25:34', '2020-05-13 16:25:34', 0, 1, 3),
(1314, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:25:34', '2020-05-13 16:25:34', 0, 1, 4),
(1315, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:25:35', '2020-05-13 16:25:35', 0, 1, 1),
(1316, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:25:35', '2020-05-13 16:25:35', 0, 1, 2),
(1317, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:25:35', '2020-05-13 16:25:35', 0, 1, 3),
(1318, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:25:36', '2020-05-13 16:25:36', 0, 1, 4),
(1319, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:25:51', '2020-05-13 16:25:51', 0, 1, 1),
(1320, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:25:52', '2020-05-13 16:25:52', 0, 1, 2),
(1321, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:25:52', '2020-05-13 16:25:52', 0, 1, 3),
(1322, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:25:53', '2020-05-13 16:25:53', 0, 1, 4),
(1323, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:25:53', '2020-05-13 16:25:53', 0, 1, 1),
(1324, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:25:53', '2020-05-13 16:25:53', 0, 1, 2),
(1325, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:25:54', '2020-05-13 16:25:54', 0, 1, 3),
(1326, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:25:54', '2020-05-13 16:25:54', 0, 1, 4),
(1327, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 16:25:55', '2020-05-13 16:25:55', 0, 1, 1),
(1328, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 16:25:56', '2020-05-13 16:25:56', 0, 1, 2),
(1329, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 16:25:56', '2020-05-13 16:25:56', 0, 1, 2),
(1330, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:33:51', '2020-05-13 16:33:51', 0, 1, 1),
(1331, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:33:51', '2020-05-13 16:33:51', 0, 1, 2),
(1332, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:33:52', '2020-05-13 16:33:52', 0, 1, 3),
(1333, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:33:52', '2020-05-13 16:33:52', 0, 1, 4),
(1334, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:33:53', '2020-05-13 16:33:53', 0, 1, 1),
(1335, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:33:53', '2020-05-13 16:33:53', 0, 1, 2),
(1336, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:33:53', '2020-05-13 16:33:53', 0, 1, 3),
(1337, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:33:54', '2020-05-13 16:33:54', 0, 1, 4),
(1338, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 16:33:55', '2020-05-13 16:33:55', 0, 1, 1),
(1339, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 16:33:56', '2020-05-13 16:33:56', 0, 1, 2),
(1340, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 16:33:56', '2020-05-13 16:33:56', 0, 1, 2),
(1341, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:37:25', '2020-05-13 16:37:25', 0, 1, 1),
(1342, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:37:25', '2020-05-13 16:37:25', 0, 1, 2),
(1343, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:37:26', '2020-05-13 16:37:26', 0, 1, 3),
(1344, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:37:26', '2020-05-13 16:37:26', 0, 1, 4),
(1345, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:37:27', '2020-05-13 16:37:27', 0, 1, 1),
(1346, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:37:27', '2020-05-13 16:37:27', 0, 1, 2),
(1347, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:37:28', '2020-05-13 16:37:28', 0, 1, 3),
(1348, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:37:28', '2020-05-13 16:37:28', 0, 1, 4),
(1349, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 16:37:29', '2020-05-13 16:37:29', 0, 1, 1),
(1350, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 16:37:30', '2020-05-13 16:37:30', 0, 1, 2),
(1351, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 16:37:30', '2020-05-13 16:37:30', 0, 1, 2),
(1352, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:38:21', '2020-05-13 16:38:21', 0, 1, 1),
(1353, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:38:21', '2020-05-13 16:38:21', 0, 1, 2),
(1354, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:38:21', '2020-05-13 16:38:21', 0, 1, 3),
(1355, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:38:22', '2020-05-13 16:38:22', 0, 1, 4),
(1356, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:38:22', '2020-05-13 16:38:22', 0, 1, 1),
(1357, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:38:23', '2020-05-13 16:38:23', 0, 1, 2),
(1358, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:38:23', '2020-05-13 16:38:23', 0, 1, 3),
(1359, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:38:24', '2020-05-13 16:38:24', 0, 1, 4),
(1360, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 16:38:25', '2020-05-13 16:38:25', 0, 1, 1),
(1361, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 16:38:26', '2020-05-13 16:38:26', 0, 1, 2),
(1362, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 16:38:26', '2020-05-13 16:38:26', 0, 1, 2),
(1363, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:39:54', '2020-05-13 16:39:54', 0, 1, 1),
(1364, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:39:55', '2020-05-13 16:39:55', 0, 1, 2),
(1365, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:39:55', '2020-05-13 16:39:55', 0, 1, 3),
(1366, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:39:56', '2020-05-13 16:39:56', 0, 1, 4),
(1367, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:39:57', '2020-05-13 16:39:57', 0, 1, 1),
(1368, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:39:57', '2020-05-13 16:39:57', 0, 1, 2),
(1369, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:39:58', '2020-05-13 16:39:58', 0, 1, 3),
(1370, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:39:58', '2020-05-13 16:39:58', 0, 1, 4),
(1371, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:40:18', '2020-05-13 16:40:18', 0, 1, 1),
(1372, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:40:19', '2020-05-13 16:40:19', 0, 1, 2),
(1373, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:40:19', '2020-05-13 16:40:19', 0, 1, 3),
(1374, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:40:20', '2020-05-13 16:40:20', 0, 1, 4),
(1375, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:40:20', '2020-05-13 16:40:20', 0, 1, 1),
(1376, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:40:20', '2020-05-13 16:40:20', 0, 1, 2),
(1377, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:40:21', '2020-05-13 16:40:21', 0, 1, 3),
(1378, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:40:21', '2020-05-13 16:40:21', 0, 1, 4),
(1379, 'Modification des informations de l\'affectation N° 1 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 16:40:22', '2020-05-13 16:40:22', 0, 1, 1),
(1380, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'renouvelementaffectation', 1, NULL, NULL, NULL, '2020-05-13 16:40:23', '2020-05-13 16:40:23', 0, 1, 2),
(1381, 'Modification des informations de l\'affectation N° 2 ', 'update', NULL, 'affectation', 1, NULL, 1, NULL, '2020-05-13 16:40:23', '2020-05-13 16:40:23', 0, 1, 2),
(1382, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:40:27', '2020-05-13 16:40:27', 0, 1, 1),
(1383, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:40:28', '2020-05-13 16:40:28', 0, 1, 2),
(1384, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:40:28', '2020-05-13 16:40:28', 0, 1, 3),
(1385, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:40:28', '2020-05-13 16:40:28', 0, 1, 4),
(1386, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:40:29', '2020-05-13 16:40:29', 0, 1, 1),
(1387, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:40:30', '2020-05-13 16:40:30', 0, 1, 2),
(1388, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:40:30', '2020-05-13 16:40:30', 0, 1, 3),
(1389, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:40:30', '2020-05-13 16:40:30', 0, 1, 4),
(1390, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:42:24', '2020-05-13 16:42:24', 0, 1, 1),
(1391, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:42:24', '2020-05-13 16:42:24', 0, 1, 2),
(1392, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:42:25', '2020-05-13 16:42:25', 0, 1, 3),
(1393, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:42:25', '2020-05-13 16:42:25', 0, 1, 4),
(1394, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:42:26', '2020-05-13 16:42:26', 0, 1, 1),
(1395, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:42:26', '2020-05-13 16:42:26', 0, 1, 2),
(1396, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:42:27', '2020-05-13 16:42:27', 0, 1, 3),
(1397, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:42:27', '2020-05-13 16:42:27', 0, 1, 4),
(1398, 'Modification des infos du véhicule N°1 immatriculé 8993 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:42:28', '2020-05-13 16:42:28', 0, 1, 1),
(1399, 'Modification des infos du véhicule N°2 immatriculé 662 FP 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:42:28', '2020-05-13 16:42:28', 0, 1, 2),
(1400, 'Modification des infos du véhicule N°3 immatriculé 4785 GT 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:42:29', '2020-05-13 16:42:29', 0, 1, 3),
(1401, 'Modification des infos du véhicule N°4 immatriculé 4024 HK 01.', 'update', NULL, 'vehicule', 1, NULL, NULL, NULL, '2020-05-13 16:42:30', '2020-05-13 16:42:30', 0, 1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `informationcotation`
--

CREATE TABLE `informationcotation` (
  `id` int(11) NOT NULL,
  `infoscotation_id` int(11) NOT NULL,
  `cotation_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `information_cotation`
--

CREATE TABLE `information_cotation` (
  `id` int(11) NOT NULL,
  `cotation_id` int(11) NOT NULL,
  `produit_id` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `etat_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `infoscotation`
--

CREATE TABLE `infoscotation` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `ticket` varchar(20) NOT NULL,
  `typelocation_id` int(11) NOT NULL,
  `started` date NOT NULL,
  `finished` date NOT NULL,
  `prestataire_id` int(11) DEFAULT NULL,
  `etat_id` int(11) NOT NULL,
  `comment` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `location`
--

INSERT INTO `location` (`id`, `ticket`, `typelocation_id`, `started`, `finished`, `prestataire_id`, `etat_id`, `comment`, `created`, `modified`, `protected`, `valide`) VALUES
(1, '56FE87', 1, '2020-05-13', '2020-05-29', 1, 1, 'ceci est cela', '2020-05-13 14:34:24', '2020-05-13 14:34:24', 0, 1),
(2, '65CADC', 1, '2020-05-13', '2020-05-29', 1, 2, 'ceci est cela', '2020-05-13 14:38:20', '2020-05-13 14:38:20', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `location_vehicule`
--

CREATE TABLE `location_vehicule` (
  `id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `vehicule_id` int(11) NOT NULL,
  `etat_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `location_vehicule`
--

INSERT INTO `location_vehicule` (`id`, `location_id`, `vehicule_id`, `etat_id`, `created`, `modified`, `protected`, `valide`) VALUES
(1, 2, 3, 2, '2020-05-13 14:38:21', '2020-05-13 14:38:21', 0, 1),
(2, 2, 4, 2, '2020-05-13 14:38:21', '2020-05-13 14:38:21', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE `marque` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`id`, `name`, `logo`, `created`, `modified`, `protected`, `valide`) VALUES
(1, 'ABARTH', '', NULL, '2019-10-28 14:12:43', 0, 1),
(2, 'ACURA', '', NULL, '2019-10-28 14:12:43', 0, 1),
(3, 'ALFA ROMEO', '', NULL, '2019-10-28 14:12:43', 0, 1),
(4, 'ALPINA', '', NULL, '2019-10-28 14:12:43', 0, 1),
(5, 'AMC', '', NULL, '2019-10-28 14:12:43', 0, 1),
(6, 'ASR', '', NULL, '2019-10-28 14:12:43', 0, 1),
(7, 'ASTON MARTIN', '', NULL, '2019-10-28 14:12:43', 0, 1),
(8, 'AUDI', '', NULL, '2019-10-28 14:12:43', 0, 1),
(9, 'BENTLEY', '', NULL, '2019-10-28 14:12:43', 0, 1),
(10, 'BMW', '', NULL, '2019-10-28 14:12:43', 0, 1),
(11, 'BRILLIANCE', '', NULL, '2019-10-28 14:12:43', 0, 1),
(12, 'BUGATTI', '', NULL, '2019-10-28 14:12:43', 0, 1),
(13, 'BUICK', '', NULL, '2019-10-28 14:12:43', 0, 1),
(14, 'CADILLAC', '', NULL, '2019-10-28 14:12:43', 0, 1),
(15, 'CHERY', '', NULL, '2019-10-28 14:12:43', 0, 1),
(16, 'CHEVROLET', '', NULL, '2019-10-28 14:12:43', 0, 1),
(17, 'CHRYSLER', '', NULL, '2019-10-28 14:12:43', 0, 1),
(18, 'CIZETA', '', NULL, '2019-10-28 14:12:43', 0, 1),
(19, 'CORVETTE', '', NULL, '2019-10-28 14:12:43', 0, 1),
(20, 'COVINI', '', NULL, '2019-10-28 14:12:43', 0, 1),
(21, 'DACIA', '', NULL, '2019-10-28 14:12:43', 0, 1),
(22, 'DAEWOO', '', NULL, '2019-10-28 14:12:43', 0, 1),
(23, 'DAIHATSU', '', NULL, '2019-10-28 14:12:43', 0, 1),
(24, 'DATSUN', '', NULL, '2019-10-28 14:12:43', 0, 1),
(25, 'DKW', '', NULL, '2019-10-28 14:12:43', 0, 1),
(26, 'DODGE', '', NULL, '2019-10-28 14:12:43', 0, 1),
(27, 'EAGLE', '', NULL, '2019-10-28 14:12:43', 0, 1),
(28, 'FARBIO', '', NULL, '2019-10-28 14:12:43', 0, 1),
(29, 'FERRARI', '', NULL, '2019-10-28 14:12:43', 0, 1),
(30, 'FIAT', '', NULL, '2019-10-28 14:12:43', 0, 1),
(31, 'FISKER', '', NULL, '2019-10-28 14:12:43', 0, 1),
(32, 'FORD', '', NULL, '2019-10-28 14:12:43', 0, 1),
(33, 'GEELY', '', NULL, '2019-10-28 14:12:43', 0, 1),
(34, 'GEO', '', NULL, '2019-10-28 14:12:43', 0, 1),
(35, 'GMC', '', NULL, '2019-10-28 14:12:43', 0, 1),
(36, 'GREAT WALL', '', NULL, '2019-10-28 14:12:43', 0, 1),
(37, 'HOLDEN', '', NULL, '2019-10-28 14:12:43', 0, 1),
(38, 'HONDA', '', NULL, '2019-10-28 14:12:43', 0, 1),
(39, 'HORCH', '', NULL, '2019-10-28 14:12:43', 0, 1),
(40, 'HUMMER', '', NULL, '2019-10-28 14:12:43', 0, 1),
(41, 'HYUNDAI', '', NULL, '2019-10-28 14:12:43', 0, 1),
(42, 'INFINITI', '', NULL, '2019-10-28 14:12:43', 0, 1),
(43, 'ISUZU', '', NULL, '2019-10-28 14:12:43', 0, 1),
(44, 'JAGUAR', '', NULL, '2019-10-28 14:12:43', 0, 1),
(45, 'JEEP', '', NULL, '2019-10-28 14:12:43', 0, 1),
(46, 'KIA', '', NULL, '2019-10-28 14:12:43', 0, 1),
(47, 'KOENIGSEGG', '', NULL, '2019-10-28 14:12:43', 0, 1),
(48, 'LADA', '', NULL, '2019-10-28 14:12:43', 0, 1),
(49, 'LAMBORGHINI', '', NULL, '2019-10-28 14:12:43', 0, 1),
(50, 'LANCIA', '', NULL, '2019-10-28 14:12:43', 0, 1),
(51, 'LAND ROVER', '', NULL, '2019-10-28 14:12:43', 0, 1),
(52, 'LEBLANC', '', NULL, '2019-10-28 14:12:43', 0, 1),
(53, 'LEXUS', '', NULL, '2019-10-28 14:12:43', 0, 1),
(54, 'LINCOLN', '', NULL, '2019-10-28 14:12:43', 0, 1),
(55, 'LOTUS', '', NULL, '2019-10-28 14:12:43', 0, 1),
(56, 'MAHINDRA', '', NULL, '2019-10-28 14:12:43', 0, 1),
(57, 'MARUTI', '', NULL, '2019-10-28 14:12:43', 0, 1),
(58, 'MASERATI', '', NULL, '2019-10-28 14:12:43', 0, 1),
(59, 'MAYBACH', '', NULL, '2019-10-28 14:12:43', 0, 1),
(60, 'MAZDA', '', NULL, '2019-10-28 14:12:43', 0, 1),
(61, 'MERCEDES-BENZ', '', NULL, '2019-10-28 14:12:43', 0, 1),
(62, 'MG', '', NULL, '2019-10-28 14:12:43', 0, 1),
(63, 'MINI', '', NULL, '2019-10-28 14:12:43', 0, 1),
(64, 'MITSUBISHI', '', NULL, '2019-10-28 14:12:44', 0, 1),
(65, 'MORGAN', '', NULL, '2019-10-28 14:12:44', 0, 1),
(66, 'MOSKVICH', '', NULL, '2019-10-28 14:12:44', 0, 1),
(67, 'NANJING', '', NULL, '2019-10-28 14:12:44', 0, 1),
(68, 'NAZA', '', NULL, '2019-10-28 14:12:44', 0, 1),
(69, 'NISSAN', '', NULL, '2019-10-28 14:12:44', 0, 1),
(70, 'NOBLE', '', NULL, '2019-10-28 14:12:44', 0, 1),
(71, 'OLDSMOBILE', '', NULL, '2019-10-28 14:12:44', 0, 1),
(72, 'OPEL', '', NULL, '2019-10-28 14:12:44', 0, 1),
(73, 'PAGANI', '', NULL, '2019-10-28 14:12:44', 0, 1),
(74, 'PANOZ', '', NULL, '2019-10-28 14:12:44', 0, 1),
(75, 'PEUGEOT', '', NULL, '2019-10-28 14:12:44', 0, 1),
(76, 'PIAGGIO', '', NULL, '2019-10-28 14:12:44', 0, 1),
(77, 'PLYMOUTH', '', NULL, '2019-10-28 14:12:44', 0, 1),
(78, 'PONTIAC', '', NULL, '2019-10-28 14:12:44', 0, 1),
(79, 'PORSCHE', '', NULL, '2019-10-28 14:12:44', 0, 1),
(80, 'PERODUA', '', NULL, '2019-10-28 14:12:44', 0, 1),
(81, 'PROTON', '', NULL, '2019-10-28 14:12:44', 0, 1),
(82, 'RAPP MOTERNWERKE', '', NULL, '2019-10-28 14:12:44', 0, 1),
(83, 'RENAULT', '', NULL, '2019-10-28 14:12:44', 0, 1),
(84, 'ROEWE', '', NULL, '2019-10-28 14:12:44', 0, 1),
(85, 'ROLLS-ROYCE', '', NULL, '2019-10-28 14:12:44', 0, 1),
(86, 'ROVER', '', NULL, '2019-10-28 14:12:44', 0, 1),
(87, 'ROSSION', '', NULL, '2019-10-28 14:12:44', 0, 1),
(88, 'SAAB', '', NULL, '2019-10-28 14:12:44', 0, 1),
(89, 'SATURN', '', NULL, '2019-10-28 14:12:44', 0, 1),
(90, 'SCION', '', NULL, '2019-10-28 14:12:44', 0, 1),
(91, 'SEAT', '', NULL, '2019-10-28 14:12:44', 0, 1),
(92, 'SKODA', '', NULL, '2019-10-28 14:12:44', 0, 1),
(93, 'SMART', '', NULL, '2019-10-28 14:12:44', 0, 1),
(94, 'SPYKER', '', NULL, '2019-10-28 14:12:44', 0, 1),
(95, 'SSANGYONG', '', NULL, '2019-10-28 14:12:44', 0, 1),
(96, 'STEALTH', '', NULL, '2019-10-28 14:12:44', 0, 1),
(97, 'SUZUKI', '', NULL, '2019-10-28 14:12:44', 0, 1),
(98, 'TATA', '', NULL, '2019-10-28 14:12:44', 0, 1),
(99, 'TESLA', '', NULL, '2019-10-28 14:12:44', 0, 1),
(100, 'TOYOTA', '', NULL, '2019-10-28 14:12:44', 0, 1),
(101, 'TONIQ', '', NULL, '2019-10-28 14:12:44', 0, 1),
(102, 'TRABANT', '', NULL, '2019-10-28 14:12:44', 0, 1),
(103, 'VAUXHALL', '', NULL, '2019-10-28 14:12:44', 0, 1),
(104, 'VECTOR', '', NULL, '2019-10-28 14:12:44', 0, 1),
(105, 'VENTURI', '', NULL, '2019-10-28 14:12:44', 0, 1),
(106, 'VOLKSWAGEN', '', NULL, '2019-10-28 14:12:44', 0, 1),
(107, 'VOLVO', '', NULL, '2019-10-28 14:12:44', 0, 1),
(108, 'WANDERER', '', NULL, '2019-10-28 14:12:44', 0, 1),
(109, 'WARTBURG', '', NULL, '2019-10-28 14:12:44', 0, 1),
(110, 'WESTFIELD', '', NULL, '2019-10-28 14:12:44', 0, 1),
(111, 'ZASTAVA ', '', NULL, '2019-10-28 14:12:44', 0, 1),
(112, 'DISCOVERY', NULL, '2019-10-18 12:21:02', '2019-10-28 14:12:44', 0, 1),
(113, 'CHANGAN', NULL, '2019-10-18 12:22:32', '2019-10-28 14:12:44', 0, 1),
(114, 'OUTLANDER', NULL, '2019-10-28 11:09:31', '2019-10-28 14:12:44', 0, 1),
(115, 'DAF', NULL, NULL, NULL, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `mission`
--

CREATE TABLE `mission` (
  `id` int(11) NOT NULL,
  `reference` varchar(50) DEFAULT NULL,
  `demandevehicule_id` int(11) NOT NULL,
  `departement_id` int(11) NOT NULL,
  `vehicule_id` int(11) DEFAULT NULL,
  `chauffeur_id` int(11) DEFAULT NULL,
  `lieu` varchar(200) NOT NULL,
  `objet` varchar(200) NOT NULL,
  `comment` text NOT NULL,
  `started` datetime DEFAULT NULL,
  `finished` datetime DEFAULT NULL,
  `carburant` int(11) DEFAULT NULL,
  `dotation` int(11) DEFAULT NULL,
  `etat_id` int(1) DEFAULT NULL,
  `gestionnaire_id` int(11) DEFAULT NULL,
  `date_approuve` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `mycompte`
--

CREATE TABLE `mycompte` (
  `id` int(11) NOT NULL,
  `identifiant` varchar(9) NOT NULL,
  `expired` datetime NOT NULL,
  `protected` int(11) NOT NULL DEFAULT 1,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mycompte`
--

INSERT INTO `mycompte` (`id`, `identifiant`, `expired`, `protected`, `valide`) VALUES
(1, 'D67B42B', '2020-05-19 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `params`
--

CREATE TABLE `params` (
  `id` int(11) NOT NULL,
  `timeout` int(11) NOT NULL DEFAULT 5,
  `devise` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `email_rh` varchar(50) NOT NULL,
  `email_dg` varchar(50) NOT NULL,
  `delai_alert` int(11) NOT NULL,
  `protected` int(11) NOT NULL DEFAULT 1,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `params`
--

INSERT INTO `params` (`id`, `timeout`, `devise`, `email`, `email_rh`, `email_dg`, `delai_alert`, `protected`, `valide`) VALUES
(1, 10, 'Fcfa', 'info@devaris21.com', 'info@devaris21.com', 'info@devaris21.com', 10, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `piecevehicule`
--

CREATE TABLE `piecevehicule` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `numero_piece` varchar(200) DEFAULT NULL,
  `typepiecevehicule_id` int(11) NOT NULL,
  `vehicule_id` int(11) NOT NULL,
  `date_etablissement` date NOT NULL,
  `started` date NOT NULL,
  `finished` date NOT NULL,
  `etatpiece_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image1` varchar(200) DEFAULT NULL,
  `image2` varchar(200) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `piecevehicule`
--

INSERT INTO `piecevehicule` (`id`, `name`, `numero_piece`, `typepiecevehicule_id`, `vehicule_id`, `date_etablissement`, `started`, `finished`, `etatpiece_id`, `price`, `image1`, `image2`, `created`, `modified`, `protected`, `valide`) VALUES
(1, 'Carte de stationnement 2020', 'DR5545EGTJJT', 2, 2, '2020-05-07', '2020-05-22', '2020-05-31', 3, 45000, NULL, NULL, '2020-05-13 12:11:15', '2020-05-13 12:11:15', 0, 1),
(2, 'Carte de stationnement 2020', 'DR5545EGTJJT', 2, 2, '2020-05-07', '2020-05-22', '2020-05-31', 3, 45000, '405d4522.jpeg', NULL, '2020-05-13 12:11:49', '2020-05-13 12:11:49', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `prestataire`
--

CREATE TABLE `prestataire` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `typeprestataire_id` int(11) NOT NULL,
  `contact` varchar(150) DEFAULT NULL,
  `fax` varchar(200) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `adresse` text DEFAULT NULL,
  `registre` varchar(50) DEFAULT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL,
  `is_new` int(11) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `is_allowed` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `prestataire`
--

INSERT INTO `prestataire` (`id`, `name`, `typeprestataire_id`, `contact`, `fax`, `email`, `adresse`, `registre`, `login`, `password`, `is_new`, `image`, `is_allowed`, `created`, `modified`, `protected`, `valide`) VALUES
(1, 'Devaris PRESTATAIRE', 4, '...', NULL, 'info@devaris21.com', '...', NULL, '...', '...', 1, 'default.png', 1, '2020-05-12 12:58:16', '2020-05-12 12:58:16', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `preteur`
--

CREATE TABLE `preteur` (
  `id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `adresse` varchar(150) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(200) DEFAULT NULL,
  `matricule` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `typeproduit_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) DEFAULT NULL,
  `comment` text NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `prestataire_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `renouvelementaffectation`
--

CREATE TABLE `renouvelementaffectation` (
  `id` int(11) NOT NULL,
  `affectation_id` int(20) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `started` varchar(20) DEFAULT NULL,
  `finished` varchar(20) DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `gestionnaire_id` int(11) NOT NULL,
  `etat_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `renouvelementaffectation`
--

INSERT INTO `renouvelementaffectation` (`id`, `affectation_id`, `comment`, `started`, `finished`, `date_fin`, `gestionnaire_id`, `etat_id`, `created`, `modified`, `protected`, `valide`) VALUES
(1, 1, 'ceci est lq', '2020-05-13', '2020-05-17', '2020-05-13', 1, 4, '2020-05-12 16:34:55', '2020-05-12 16:34:55', 0, 1),
(2, 2, 'ljkjk!k', '2020-05-22', '2020-05-30', NULL, 1, 2, '2020-05-13 11:14:29', '2020-05-13 11:14:29', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `sexe`
--

CREATE TABLE `sexe` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `abreviation` varchar(11) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `protected` int(11) NOT NULL DEFAULT 1,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sexe`
--

INSERT INTO `sexe` (`id`, `name`, `abreviation`, `icon`, `protected`, `valide`) VALUES
(1, 'Homme', 'H', 'fa fa-venus-mars', 1, 1),
(2, 'Femme', 'F', 'fa fa-venus-mars', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `sinistre`
--

CREATE TABLE `sinistre` (
  `id` int(11) NOT NULL,
  `ticket` varchar(10) NOT NULL,
  `typesinistre_id` int(11) NOT NULL,
  `vehicule_id` int(11) NOT NULL,
  `date_etablissement` date NOT NULL,
  `comment` text DEFAULT NULL,
  `chauffeur_id` int(11) DEFAULT NULL,
  `matricule` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `carplan_id` int(11) DEFAULT NULL,
  `constat` int(11) NOT NULL,
  `pompiers` int(11) NOT NULL,
  `nomautre` text DEFAULT NULL,
  `vehiculeautre` text DEFAULT NULL,
  `immatriculationautre` varchar(50) NOT NULL,
  `assuranceautre` text DEFAULT NULL,
  `lieudrame` varchar(200) DEFAULT NULL,
  `contactautre` varchar(200) DEFAULT NULL,
  `image1` varchar(200) DEFAULT NULL,
  `image2` varchar(200) DEFAULT NULL,
  `image3` varchar(200) DEFAULT NULL,
  `date_approbation` datetime DEFAULT NULL,
  `etat_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sinistre`
--

INSERT INTO `sinistre` (`id`, `ticket`, `typesinistre_id`, `vehicule_id`, `date_etablissement`, `comment`, `chauffeur_id`, `matricule`, `fullname`, `carplan_id`, `constat`, `pompiers`, `nomautre`, `vehiculeautre`, `immatriculationautre`, `assuranceautre`, `lieudrame`, `contactautre`, `image1`, `image2`, `image3`, `date_approbation`, `etat_id`, `created`, `modified`, `protected`, `valide`) VALUES
(1, '16DA41', 4, 1, '2020-05-21', '', NULL, 'ZE4589445', 'Aristide Manyessé', NULL, 0, 1, 'Aristide Manyessé', 'Toyota berling sud', '4024 HK 01', 'NSIA Assurance', 'Port bouet', 'aristidemanyesse@gmail.com', '16de965d.jpeg', NULL, '16e2e5cf.jpg', NULL, 2, '2020-05-13 16:33:49', '2020-05-13 16:33:49', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `suggestion`
--

CREATE TABLE `suggestion` (
  `id` int(11) NOT NULL,
  `ticket` varchar(10) NOT NULL,
  `typesuggestion_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `etat_id` int(11) NOT NULL,
  `date_approuve` datetime DEFAULT NULL,
  `gestionnaire_id` int(11) DEFAULT NULL,
  `carplan_id` int(11) DEFAULT NULL,
  `prestataire_id` int(11) DEFAULT NULL,
  `utilisateur_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `typeaffectation`
--

CREATE TABLE `typeaffectation` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typeaffectation`
--

INSERT INTO `typeaffectation` (`id`, `name`, `created`, `modified`, `protected`, `valide`) VALUES
(1, 'Affectation permanente', '2020-05-12 12:58:04', '2020-05-12 12:58:04', 1, 1),
(2, 'Affectation temporaire', '2020-05-12 12:58:04', '2020-05-12 12:58:04', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `typedotation`
--

CREATE TABLE `typedotation` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typedotation`
--

INSERT INTO `typedotation` (`id`, `name`, `created`, `modified`, `protected`, `valide`) VALUES
(1, 'Espèces', '2020-05-12 12:58:05', '2020-05-12 12:58:05', 1, 1),
(2, 'Carte', '2020-05-12 12:58:05', '2020-05-12 12:58:05', 1, 1),
(3, 'Soute', '2020-05-12 12:58:06', '2020-05-12 12:58:06', 1, 1),
(4, 'Bon valeur', '2020-05-12 12:58:06', '2020-05-12 12:58:06', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `typeentretienvehicule`
--

CREATE TABLE `typeentretienvehicule` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typeentretienvehicule`
--

INSERT INTO `typeentretienvehicule` (`id`, `name`, `created`, `modified`, `protected`, `valide`) VALUES
(1, 'Léger accrochage', '2020-05-12 12:58:11', '2020-05-12 12:58:11', 1, 1),
(2, 'Crevaison', '2020-05-12 12:58:11', '2020-05-12 12:58:11', 1, 1),
(3, 'Défaillance moteur', '2020-05-12 12:58:13', '2020-05-12 12:58:13', 1, 1),
(4, 'Accident grave', '2020-05-12 12:58:13', '2020-05-12 12:58:13', 1, 1),
(5, 'Vol', '2020-05-12 12:58:13', '2020-05-12 12:58:13', 1, 1),
(6, 'Autre', '2020-05-12 12:58:13', '2020-05-12 12:58:13', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `typeequipement`
--

CREATE TABLE `typeequipement` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typeequipement`
--

INSERT INTO `typeequipement` (`id`, `name`, `created`, `modified`, `protected`, `valide`) VALUES
(1, 'Pieces Mécaniques', '2020-05-12 12:58:08', '2020-05-12 12:58:08', 1, 1),
(2, 'Utilitaire de véhicule', '2020-05-12 12:58:08', '2020-05-12 12:58:08', 1, 1),
(3, 'Outils de néttoyage', '2020-05-12 12:58:09', '2020-05-12 12:58:09', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `typegestionnaire`
--

CREATE TABLE `typegestionnaire` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typegestionnaire`
--

INSERT INTO `typegestionnaire` (`id`, `name`, `created`, `modified`, `protected`, `valide`) VALUES
(1, 'Gestionnaire en chef', '2020-05-12 12:58:20', '2020-05-12 12:58:20', 1, 1),
(2, 'Gestionnaire', '2020-05-12 12:58:20', '2020-05-12 12:58:20', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `typelocation`
--

CREATE TABLE `typelocation` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typelocation`
--

INSERT INTO `typelocation` (`id`, `name`, `created`, `modified`, `protected`, `valide`) VALUES
(1, 'Location de véhicule', '2020-05-12 12:58:07', '2020-05-12 12:58:07', 1, 1),
(2, 'Prêt de véhicule', '2020-05-12 12:58:07', '2020-05-12 12:58:07', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `typemission`
--

CREATE TABLE `typemission` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typemission`
--

INSERT INTO `typemission` (`id`, `name`, `created`, `modified`, `protected`, `valide`) VALUES
(1, 'Mission programmée', '2020-05-12 12:58:00', '2020-05-12 12:58:00', 1, 1),
(2, 'Mission inopinée', '2020-05-12 12:58:01', '2020-05-12 12:58:01', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `typepiecevehicule`
--

CREATE TABLE `typepiecevehicule` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typepiecevehicule`
--

INSERT INTO `typepiecevehicule` (`id`, `name`, `created`, `modified`, `protected`, `valide`) VALUES
(1, 'Patente', '2020-05-12 12:57:59', '2020-05-12 12:57:59', 1, 1),
(2, 'Carte de stationnement', '2020-05-12 12:58:00', '2020-05-12 12:58:00', 1, 1),
(3, 'Autre', '2020-05-12 12:58:00', '2020-05-12 12:58:00', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `typeprestataire`
--

CREATE TABLE `typeprestataire` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typeprestataire`
--

INSERT INTO `typeprestataire` (`id`, `name`, `created`, `modified`, `protected`, `valide`) VALUES
(1, 'Consessionnaire', '2020-05-12 12:58:16', '2020-05-12 12:58:16', 1, 1),
(2, 'Garage', '2020-05-12 12:58:16', '2020-05-12 12:58:16', 1, 1),
(3, 'Lavage Auto', '2020-05-12 12:58:16', '2020-05-12 12:58:16', 1, 1),
(4, 'Autre', '2020-05-12 12:58:16', '2020-05-12 12:58:16', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `typeproduit`
--

CREATE TABLE `typeproduit` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typeproduit`
--

INSERT INTO `typeproduit` (`id`, `name`, `created`, `modified`, `protected`, `valide`) VALUES
(1, 'Produit', '2020-05-12 12:58:02', '2020-05-12 12:58:02', 1, 1),
(2, 'Service', '2020-05-12 12:58:03', '2020-05-12 12:58:03', 1, 1),
(3, 'voiture', '2020-05-12 12:58:03', '2020-05-12 12:58:03', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `typesinistre`
--

CREATE TABLE `typesinistre` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typesinistre`
--

INSERT INTO `typesinistre` (`id`, `name`, `created`, `modified`, `protected`, `valide`) VALUES
(1, 'Léger accrochage', '2020-05-13 16:25:01', '2020-05-13 16:25:01', 1, 1),
(2, 'Crevaison', '2020-05-13 16:25:01', '2020-05-13 16:25:01', 1, 1),
(3, 'Défaillance moteur', '2020-05-13 16:25:01', '2020-05-13 16:25:01', 1, 1),
(4, 'Accident grave', '2020-05-13 16:25:02', '2020-05-13 16:25:02', 1, 1),
(5, 'Vol', '2020-05-13 16:25:02', '2020-05-13 16:25:02', 1, 1),
(6, 'Autre', '2020-05-13 16:25:02', '2020-05-13 16:25:02', 1, 1),
(7, 'Léger accrochage', '2020-05-13 16:25:04', '2020-05-13 16:25:04', 1, 1),
(8, 'Crevaison', '2020-05-13 16:25:06', '2020-05-13 16:25:06', 1, 1),
(9, 'Défaillance moteur', '2020-05-13 16:25:07', '2020-05-13 16:25:07', 1, 1),
(10, 'Accident grave', '2020-05-13 16:25:08', '2020-05-13 16:25:08', 1, 1),
(11, 'Vol', '2020-05-13 16:25:09', '2020-05-13 16:25:09', 1, 1),
(12, 'Autre', '2020-05-13 16:25:09', '2020-05-13 16:25:09', 1, 1),
(13, 'Léger accrochage', '2020-05-13 16:25:10', '2020-05-13 16:25:10', 1, 1),
(14, 'Crevaison', '2020-05-13 16:25:11', '2020-05-13 16:25:11', 1, 1),
(15, 'Défaillance moteur', '2020-05-13 16:25:12', '2020-05-13 16:25:12', 1, 1),
(16, 'Accident grave', '2020-05-13 16:25:12', '2020-05-13 16:25:12', 1, 1),
(17, 'Vol', '2020-05-13 16:25:12', '2020-05-13 16:25:12', 1, 1),
(18, 'Autre', '2020-05-13 16:25:12', '2020-05-13 16:25:12', 1, 1),
(19, 'Léger accrochage', '2020-05-13 16:25:13', '2020-05-13 16:25:13', 1, 1),
(20, 'Crevaison', '2020-05-13 16:25:13', '2020-05-13 16:25:13', 1, 1),
(21, 'Défaillance moteur', '2020-05-13 16:25:13', '2020-05-13 16:25:13', 1, 1),
(22, 'Accident grave', '2020-05-13 16:25:14', '2020-05-13 16:25:14', 1, 1),
(23, 'Vol', '2020-05-13 16:25:14', '2020-05-13 16:25:14', 1, 1),
(24, 'Autre', '2020-05-13 16:25:14', '2020-05-13 16:25:14', 1, 1),
(25, 'Léger accrochage', '2020-05-13 16:25:15', '2020-05-13 16:25:15', 1, 1),
(26, 'Crevaison', '2020-05-13 16:25:15', '2020-05-13 16:25:15', 1, 1),
(27, 'Défaillance moteur', '2020-05-13 16:25:16', '2020-05-13 16:25:16', 1, 1),
(28, 'Accident grave', '2020-05-13 16:25:16', '2020-05-13 16:25:16', 1, 1),
(29, 'Vol', '2020-05-13 16:25:17', '2020-05-13 16:25:17', 1, 1),
(30, 'Autre', '2020-05-13 16:25:17', '2020-05-13 16:25:17', 1, 1),
(31, 'Léger accrochage', '2020-05-13 16:25:17', '2020-05-13 16:25:17', 1, 1),
(32, 'Crevaison', '2020-05-13 16:25:18', '2020-05-13 16:25:18', 1, 1),
(33, 'Défaillance moteur', '2020-05-13 16:25:18', '2020-05-13 16:25:18', 1, 1),
(34, 'Accident grave', '2020-05-13 16:25:18', '2020-05-13 16:25:18', 1, 1),
(35, 'Vol', '2020-05-13 16:25:18', '2020-05-13 16:25:18', 1, 1),
(36, 'Autre', '2020-05-13 16:25:18', '2020-05-13 16:25:18', 1, 1),
(37, 'Léger accrochage', '2020-05-13 16:25:19', '2020-05-13 16:25:19', 1, 1),
(38, 'Crevaison', '2020-05-13 16:25:19', '2020-05-13 16:25:19', 1, 1),
(39, 'Défaillance moteur', '2020-05-13 16:25:19', '2020-05-13 16:25:19', 1, 1),
(40, 'Accident grave', '2020-05-13 16:25:19', '2020-05-13 16:25:19', 1, 1),
(41, 'Vol', '2020-05-13 16:25:19', '2020-05-13 16:25:19', 1, 1),
(42, 'Autre', '2020-05-13 16:25:20', '2020-05-13 16:25:20', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `typesuggestion`
--

CREATE TABLE `typesuggestion` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typesuggestion`
--

INSERT INTO `typesuggestion` (`id`, `name`, `created`, `modified`, `protected`, `valide`) VALUES
(1, 'standart', '2020-05-12 12:58:25', '2020-05-12 12:58:25', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `typetransmission`
--

CREATE TABLE `typetransmission` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typetransmission`
--

INSERT INTO `typetransmission` (`id`, `name`, `created`, `modified`, `protected`, `valide`) VALUES
(1, 'Manuelle', '2020-05-12 12:58:21', '2020-05-12 12:58:21', 1, 1),
(2, 'Seme-automatique', '2020-05-12 12:58:21', '2020-05-12 12:58:21', 1, 1),
(3, 'Automatique', '2020-05-12 12:58:21', '2020-05-12 12:58:21', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `typevehicule`
--

CREATE TABLE `typevehicule` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typevehicule`
--

INSERT INTO `typevehicule` (`id`, `name`, `created`, `modified`, `protected`, `valide`) VALUES
(1, 'Voiture', '2020-05-12 12:58:09', '2020-05-12 12:58:09', 1, 1),
(2, 'Car', '2020-05-12 12:58:09', '2020-05-12 12:58:09', 1, 1),
(3, 'Pick-up', '2020-05-12 12:58:10', '2020-05-12 12:58:10', 1, 1),
(4, 'Moto', '2020-05-12 12:58:10', '2020-05-12 12:58:10', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `matricule` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(150) DEFAULT NULL,
  `departement_id` int(2) DEFAULT NULL,
  `adresse` varchar(150) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(200) DEFAULT NULL,
  `fonction` varchar(100) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `is_new` int(11) NOT NULL DEFAULT 0,
  `image` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `allowed` int(11) NOT NULL DEFAULT 1,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1,
  `visibility` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `id` int(11) NOT NULL,
  `immatriculation` varchar(20) NOT NULL,
  `typevehicule_id` int(11) NOT NULL,
  `prestataire_id` int(11) NOT NULL,
  `nb_place` int(11) DEFAULT NULL,
  `nb_porte` int(11) DEFAULT NULL,
  `marque_id` int(11) NOT NULL,
  `modele` varchar(200) NOT NULL,
  `typetransmission_id` int(11) NOT NULL,
  `affectation` int(11) DEFAULT NULL,
  `puissance` int(10) NOT NULL,
  `date_mise_circulation` varchar(20) DEFAULT NULL,
  `date_sortie` date DEFAULT NULL,
  `date_visitetechnique` date DEFAULT NULL,
  `date_assurance` date DEFAULT NULL,
  `date_vidange` datetime DEFAULT NULL,
  `image` text DEFAULT NULL,
  `groupevehicule_id` int(11) DEFAULT NULL,
  `chasis` text DEFAULT NULL,
  `date_acquisition` varchar(20) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `etatvehicule_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1,
  `kilometrage` int(11) NOT NULL,
  `location` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vehicule`
--

INSERT INTO `vehicule` (`id`, `immatriculation`, `typevehicule_id`, `prestataire_id`, `nb_place`, `nb_porte`, `marque_id`, `modele`, `typetransmission_id`, `affectation`, `puissance`, `date_mise_circulation`, `date_sortie`, `date_visitetechnique`, `date_assurance`, `date_vidange`, `image`, `groupevehicule_id`, `chasis`, `date_acquisition`, `price`, `etatvehicule_id`, `created`, `modified`, `protected`, `valide`, `kilometrage`, `location`) VALUES
(1, '8993 GT 01', 1, 1, 5, 5, 4, 'LAND CRUSER', 1, NULL, 1, '', NULL, NULL, NULL, NULL, 'default.jpg', 3, '5484E4F8S4F87SD5C', '', 15000000, 4, '2020-05-12 13:28:15', '2020-05-12 13:28:15', 0, 1, 0, 0),
(2, '662 FP 01', 2, 1, 5, 5, 1, 'LAND CRUSER', 1, NULL, 15, '', NULL, NULL, NULL, NULL, '76d075cf.png', 1, '5484E4F8S4F87SD5C', '', 0, 7, '2020-05-12 13:41:00', '2020-05-12 13:41:00', 0, 1, 75, 0),
(3, '4785 GT 01', 1, 1, 5, 5, 1, 'LAND CRUSER', 1, NULL, 1, '2020-05-13', NULL, NULL, NULL, NULL, 'default.jpg', 3, '5484E4F8S4F87SD5C', NULL, 0, 9, '2020-05-13 14:34:24', '2020-05-13 14:34:24', 0, 1, 78, 1),
(4, '4024 HK 01', 1, 1, 5, 5, 1, 'yaris 205', 1, NULL, 45, '2020-05-13', NULL, NULL, NULL, NULL, 'default.jpg', 3, '5484E4F8S4F87SD5C', NULL, 0, 9, '2020-05-13 14:38:21', '2020-05-13 14:38:21', 0, 1, 58, 1);

-- --------------------------------------------------------

--
-- Structure de la table `vehicule_carplane`
--

CREATE TABLE `vehicule_carplane` (
  `id` int(11) NOT NULL,
  `vehicule_id` int(11) NOT NULL,
  `carplane_id` int(11) NOT NULL,
  `started` datetime NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `vidange`
--

CREATE TABLE `vidange` (
  `id_vidange` int(11) NOT NULL,
  `vehicule_id` int(11) NOT NULL,
  `modele_id` int(11) NOT NULL,
  `personnel_id` int(11) NOT NULL,
  `garage` varchar(20) NOT NULL,
  `nbr_km` int(10) NOT NULL,
  `cout_vidange` varchar(12) NOT NULL,
  `etat_vidange` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `visitetechnique`
--

CREATE TABLE `visitetechnique` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `numero_piece` varchar(200) DEFAULT NULL,
  `vehicule_id` int(11) NOT NULL,
  `date_etablissement` date NOT NULL,
  `started` date NOT NULL,
  `finished` date NOT NULL,
  `price` int(11) NOT NULL,
  `image1` varchar(200) DEFAULT NULL,
  `image2` varchar(200) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `visitetechnique`
--

INSERT INTO `visitetechnique` (`id`, `name`, `numero_piece`, `vehicule_id`, `date_etablissement`, `started`, `finished`, `price`, `image1`, `image2`, `created`, `modified`, `protected`, `valide`) VALUES
(1, 'VISITE TECHNIQUE 2020', 'DR5545EGTJJT', 2, '2020-05-14', '2020-05-14', '2020-05-24', 45800, NULL, '319420e9.jpg', '2020-05-13 12:07:53', '2020-05-13 12:07:53', 0, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `accessoire`
--
ALTER TABLE `accessoire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `accessoire_vehicule`
--
ALTER TABLE `accessoire_vehicule`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `affectation`
--
ALTER TABLE `affectation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `approvisionnement`
--
ALTER TABLE `approvisionnement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `assurance`
--
ALTER TABLE `assurance`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `carplan`
--
ALTER TABLE `carplan`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `carte`
--
ALTER TABLE `carte`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cartegrise`
--
ALTER TABLE `cartegrise`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cession`
--
ALTER TABLE `cession`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chauffeur`
--
ALTER TABLE `chauffeur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chauffeur_vehicule`
--
ALTER TABLE `chauffeur_vehicule`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `connexion`
--
ALTER TABLE `connexion`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cotation`
--
ALTER TABLE `cotation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cotationbesoin`
--
ALTER TABLE `cotationbesoin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cotation_produit`
--
ALTER TABLE `cotation_produit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `demandeentretien`
--
ALTER TABLE `demandeentretien`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `demandevehicule`
--
ALTER TABLE `demandevehicule`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `dotation`
--
ALTER TABLE `dotation`
  ADD PRIMARY KEY (`id_dotation`);

--
-- Index pour la table `energie`
--
ALTER TABLE `energie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `entretienvehicule`
--
ALTER TABLE `entretienvehicule`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `equipement`
--
ALTER TABLE `equipement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `equipement_vehicule`
--
ALTER TABLE `equipement_vehicule`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etat`
--
ALTER TABLE `etat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etatchauffeur`
--
ALTER TABLE `etatchauffeur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etatpiece`
--
ALTER TABLE `etatpiece`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etatvehicule`
--
ALTER TABLE `etatvehicule`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gestionnaire`
--
ALTER TABLE `gestionnaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `groupevehicule`
--
ALTER TABLE `groupevehicule`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `groupevehiculeopen`
--
ALTER TABLE `groupevehiculeopen`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `informationcotation`
--
ALTER TABLE `informationcotation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `information_cotation`
--
ALTER TABLE `information_cotation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `infoscotation`
--
ALTER TABLE `infoscotation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `location_vehicule`
--
ALTER TABLE `location_vehicule`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mycompte`
--
ALTER TABLE `mycompte`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `params`
--
ALTER TABLE `params`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `piecevehicule`
--
ALTER TABLE `piecevehicule`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `prestataire`
--
ALTER TABLE `prestataire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `preteur`
--
ALTER TABLE `preteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `renouvelementaffectation`
--
ALTER TABLE `renouvelementaffectation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sexe`
--
ALTER TABLE `sexe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sinistre`
--
ALTER TABLE `sinistre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `typeaffectation`
--
ALTER TABLE `typeaffectation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `typedotation`
--
ALTER TABLE `typedotation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `typeentretienvehicule`
--
ALTER TABLE `typeentretienvehicule`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `typeequipement`
--
ALTER TABLE `typeequipement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `typegestionnaire`
--
ALTER TABLE `typegestionnaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `typelocation`
--
ALTER TABLE `typelocation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `typemission`
--
ALTER TABLE `typemission`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `typepiecevehicule`
--
ALTER TABLE `typepiecevehicule`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `typeprestataire`
--
ALTER TABLE `typeprestataire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `typeproduit`
--
ALTER TABLE `typeproduit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `typesinistre`
--
ALTER TABLE `typesinistre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `typesuggestion`
--
ALTER TABLE `typesuggestion`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `typetransmission`
--
ALTER TABLE `typetransmission`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `typevehicule`
--
ALTER TABLE `typevehicule`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vehicule_carplane`
--
ALTER TABLE `vehicule_carplane`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vidange`
--
ALTER TABLE `vidange`
  ADD PRIMARY KEY (`id_vidange`);

--
-- Index pour la table `visitetechnique`
--
ALTER TABLE `visitetechnique`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `accessoire`
--
ALTER TABLE `accessoire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `accessoire_vehicule`
--
ALTER TABLE `accessoire_vehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `affectation`
--
ALTER TABLE `affectation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `approvisionnement`
--
ALTER TABLE `approvisionnement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `assurance`
--
ALTER TABLE `assurance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `carplan`
--
ALTER TABLE `carplan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `carte`
--
ALTER TABLE `carte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cartegrise`
--
ALTER TABLE `cartegrise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `cession`
--
ALTER TABLE `cession`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `chauffeur`
--
ALTER TABLE `chauffeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `chauffeur_vehicule`
--
ALTER TABLE `chauffeur_vehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `connexion`
--
ALTER TABLE `connexion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `cotation`
--
ALTER TABLE `cotation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cotationbesoin`
--
ALTER TABLE `cotationbesoin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cotation_produit`
--
ALTER TABLE `cotation_produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `demandeentretien`
--
ALTER TABLE `demandeentretien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `demandevehicule`
--
ALTER TABLE `demandevehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `dotation`
--
ALTER TABLE `dotation`
  MODIFY `id_dotation` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `energie`
--
ALTER TABLE `energie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `entretienvehicule`
--
ALTER TABLE `entretienvehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `equipement`
--
ALTER TABLE `equipement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `equipement_vehicule`
--
ALTER TABLE `equipement_vehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `etat`
--
ALTER TABLE `etat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `etatchauffeur`
--
ALTER TABLE `etatchauffeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `etatpiece`
--
ALTER TABLE `etatpiece`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `etatvehicule`
--
ALTER TABLE `etatvehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `gestionnaire`
--
ALTER TABLE `gestionnaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `groupevehicule`
--
ALTER TABLE `groupevehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `groupevehiculeopen`
--
ALTER TABLE `groupevehiculeopen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1402;

--
-- AUTO_INCREMENT pour la table `informationcotation`
--
ALTER TABLE `informationcotation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `information_cotation`
--
ALTER TABLE `information_cotation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `infoscotation`
--
ALTER TABLE `infoscotation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `location_vehicule`
--
ALTER TABLE `location_vehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `marque`
--
ALTER TABLE `marque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT pour la table `mission`
--
ALTER TABLE `mission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `mycompte`
--
ALTER TABLE `mycompte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `params`
--
ALTER TABLE `params`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `piecevehicule`
--
ALTER TABLE `piecevehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `prestataire`
--
ALTER TABLE `prestataire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `preteur`
--
ALTER TABLE `preteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `renouvelementaffectation`
--
ALTER TABLE `renouvelementaffectation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `sexe`
--
ALTER TABLE `sexe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `sinistre`
--
ALTER TABLE `sinistre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `suggestion`
--
ALTER TABLE `suggestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `typeaffectation`
--
ALTER TABLE `typeaffectation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `typedotation`
--
ALTER TABLE `typedotation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `typeentretienvehicule`
--
ALTER TABLE `typeentretienvehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `typeequipement`
--
ALTER TABLE `typeequipement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `typegestionnaire`
--
ALTER TABLE `typegestionnaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `typelocation`
--
ALTER TABLE `typelocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `typemission`
--
ALTER TABLE `typemission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `typepiecevehicule`
--
ALTER TABLE `typepiecevehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `typeprestataire`
--
ALTER TABLE `typeprestataire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `typeproduit`
--
ALTER TABLE `typeproduit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `typesinistre`
--
ALTER TABLE `typesinistre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `typesuggestion`
--
ALTER TABLE `typesuggestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `typetransmission`
--
ALTER TABLE `typetransmission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `typevehicule`
--
ALTER TABLE `typevehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `vehicule_carplane`
--
ALTER TABLE `vehicule_carplane`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vidange`
--
ALTER TABLE `vidange`
  MODIFY `id_vidange` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `visitetechnique`
--
ALTER TABLE `visitetechnique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
