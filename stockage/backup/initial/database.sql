-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 28 mai 2020 à 11:08
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
-- Base de données : `amb`
--

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
(1, 'Super', 'Administrateur', 'Abifkl jouia', 'info@devaris21.com', '01230201', '546dqsfq', 'root', '5e9795e3f3ab55e7790a6283507c085db0d764fc', 0, 'default.png', '2020-05-15 11:42:16', '2020-05-15 11:42:16', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `affectation`
--

CREATE TABLE `affectation` (
  `id` int(11) NOT NULL,
  `typeaffectation_id` int(11) NOT NULL,
  `vehicule_id` int(11) NOT NULL,
  `carplan_id` int(11) DEFAULT NULL,
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
(2, 1, 2, 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,', 2, '2020-05-15 16:23:13', '2020-05-15 16:23:13', 0, 1);

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
(1, 'NSIA ASSURANCE', 'ASSURANCE 05-2020', '478DSFJG', 1, '2020-05-18', '2020-05-19', '2020-10-25', 45000, 3, '1ed046fb.png', NULL, '2020-05-18 16:03:56', '2020-05-18 16:03:56', 0, 1);

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
(2, '55555555', 'Manyessé', 'Aristide', 1, NULL, 'test@yopmail.com', '01020304', 'PDG', 'root', '5e9795e3f3ab55e7790a6283507c085db0d764fc', 0, 'default.png', '2020-05-15 16:23:03', '2020-05-15 16:23:03', 1, 0, 1, 1);

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
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(200) DEFAULT NULL,
  `etatchauffeur_id` int(11) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chauffeur`
--

INSERT INTO `chauffeur` (`id`, `name`, `lastname`, `matricule`, `sexe_id`, `nationalite`, `adresse`, `typepermis`, `email`, `contact`, `etatchauffeur_id`, `image`, `created`, `modified`, `protected`, `valide`) VALUES
(1, 'Chauffeur', 'Koana', '544d3qsd', 1, 'Ivoirienne', 'kl', 'ABDE', 'amb@yopmail.com', '02255985', 1, 'default.png', '2020-05-18 11:55:45', '2020-05-18 11:55:45', 0, 1);

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

--
-- Déchargement des données de la table `chauffeur_vehicule`
--

INSERT INTO `chauffeur_vehicule` (`id`, `chauffeur_id`, `vehicule_id`, `created`, `modified`, `protected`, `valide`) VALUES
(1, 1, 2, '2020-05-18 11:57:35', '2020-05-18 11:57:35', 0, 1);

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `connexion`
--

INSERT INTO `connexion` (`id`, `date_connexion`, `date_deconnexion`, `gestionnaire_id`, `utilisateur_id`, `carplan_id`, `prestataire_id`, `created`, `modified`, `protected`, `valide`) VALUES
(1, '2020-05-15 11:52:54', '2020-05-15 12:11:18', 1, NULL, NULL, NULL, '2020-05-15 11:52:54', '2020-05-15 11:52:54', 0, 1),
(2, '2020-05-15 11:55:34', NULL, NULL, NULL, NULL, NULL, '2020-05-15 11:55:34', '2020-05-15 11:55:34', 0, 1),
(3, '2020-05-15 12:09:00', '2020-05-15 13:53:02', NULL, 1, NULL, NULL, '2020-05-15 12:09:00', '2020-05-15 12:09:00', 0, 1),
(4, '2020-05-15 12:11:18', '2020-05-15 13:19:44', 1, NULL, NULL, NULL, '2020-05-15 12:11:18', '2020-05-15 12:11:18', 0, 1),
(5, '2020-05-15 13:19:45', '2020-05-15 16:04:10', 1, NULL, NULL, NULL, '2020-05-15 13:19:45', '2020-05-15 13:19:45', 0, 1),
(6, '2020-05-15 13:53:02', NULL, NULL, 1, NULL, NULL, '2020-05-15 13:53:02', '2020-05-15 13:53:02', 0, 1),
(7, '2020-05-15 14:06:21', NULL, NULL, NULL, 1, NULL, '2020-05-15 14:06:21', '2020-05-15 14:06:21', 0, 1),
(8, '2020-05-15 15:24:02', NULL, NULL, NULL, NULL, NULL, '2020-05-15 15:24:02', '2020-05-15 15:24:02', 0, 1),
(9, '2020-05-15 16:04:10', '2020-05-15 16:15:22', 1, NULL, NULL, NULL, '2020-05-15 16:04:10', '2020-05-15 16:04:10', 0, 1),
(10, '2020-05-15 16:15:22', '2020-05-15 16:27:03', 1, NULL, NULL, NULL, '2020-05-15 16:15:22', '2020-05-15 16:15:22', 0, 1),
(11, '2020-05-15 16:27:53', '2020-05-15 16:53:50', NULL, NULL, 2, NULL, '2020-05-15 16:27:53', '2020-05-15 16:27:53', 0, 1),
(12, '2020-05-15 16:53:12', '2020-05-16 11:58:06', 1, NULL, NULL, NULL, '2020-05-15 16:53:12', '2020-05-15 16:53:12', 0, 1),
(13, '2020-05-15 16:53:51', '2020-05-18 16:07:10', NULL, NULL, 2, NULL, '2020-05-15 16:53:51', '2020-05-15 16:53:51', 0, 1),
(14, '2020-05-16 11:58:07', '2020-05-18 10:07:49', 1, NULL, NULL, NULL, '2020-05-16 11:58:07', '2020-05-16 11:58:07', 0, 1),
(15, '2020-05-18 10:07:50', '2020-05-18 10:29:20', 1, NULL, NULL, NULL, '2020-05-18 10:07:50', '2020-05-18 10:07:50', 0, 1),
(16, '2020-05-18 10:28:12', NULL, NULL, NULL, NULL, NULL, '2020-05-18 10:28:12', '2020-05-18 10:28:12', 0, 1),
(17, '2020-05-18 10:29:02', NULL, NULL, NULL, NULL, NULL, '2020-05-18 10:29:02', '2020-05-18 10:29:02', 0, 1),
(18, '2020-05-18 10:29:21', '2020-05-18 10:58:29', 1, NULL, NULL, NULL, '2020-05-18 10:29:21', '2020-05-18 10:29:21', 0, 1),
(19, '2020-05-18 10:58:29', '2020-05-18 11:52:58', 1, NULL, NULL, NULL, '2020-05-18 10:58:29', '2020-05-18 10:58:29', 0, 1),
(20, '2020-05-18 11:04:35', NULL, NULL, NULL, NULL, NULL, '2020-05-18 11:04:35', '2020-05-18 11:04:35', 0, 1),
(21, '2020-05-18 11:20:46', NULL, NULL, NULL, NULL, NULL, '2020-05-18 11:20:47', '2020-05-18 11:20:47', 0, 1),
(22, '2020-05-18 11:52:58', '2020-05-18 13:38:45', 1, NULL, NULL, NULL, '2020-05-18 11:52:58', '2020-05-18 11:52:58', 0, 1),
(23, '2020-05-18 13:38:45', '2020-05-18 13:51:59', 1, NULL, NULL, NULL, '2020-05-18 13:38:46', '2020-05-18 13:38:46', 0, 1),
(24, '2020-05-18 13:52:00', '2020-05-18 16:01:52', 1, NULL, NULL, NULL, '2020-05-18 13:52:00', '2020-05-18 13:52:00', 0, 1),
(25, '2020-05-18 16:01:52', '2020-05-18 16:47:17', 1, NULL, NULL, NULL, '2020-05-18 16:01:52', '2020-05-18 16:01:52', 0, 1),
(26, '2020-05-18 16:07:10', NULL, NULL, NULL, 2, NULL, '2020-05-18 16:07:10', '2020-05-18 16:07:10', 0, 1),
(27, '2020-05-18 16:47:17', NULL, 1, NULL, NULL, NULL, '2020-05-18 16:47:17', '2020-05-18 16:47:17', 0, 1);

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

--
-- Déchargement des données de la table `demandeentretien`
--

INSERT INTO `demandeentretien` (`id`, `typeentretienvehicule_id`, `ticket`, `vehicule_id`, `carplan_id`, `comment`, `image`, `etat_id`, `date_approuve`, `gestionnaire_id`, `created`, `modified`, `protected`, `valide`) VALUES
(1, 3, '36D92B', 2, 2, 'je veux faire un entretien de mon vehicule', '36e0fd66.png', 2, NULL, NULL, '2020-05-15 16:29:33', '2020-05-15 16:29:33', 0, 1),
(2, 4, '93C626', 2, 2, 'Je veux encore laver ma voiture', '93ce3b8a.png', 2, NULL, NULL, '2020-05-15 16:54:20', '2020-05-15 16:54:20', 0, 1),
(3, 4, '9E8A56', 2, 2, 'Je veux encore laver ma voiture', '9e98849f.png', 2, NULL, NULL, '2020-05-15 16:57:12', '2020-05-15 16:57:12', 0, 1),
(4, 4, 'A09C01', 2, 2, 'Je veux encore laver ma voiture', 'a0a25c6a.png', 2, NULL, NULL, '2020-05-15 16:57:45', '2020-05-15 16:57:45', 0, 1),
(5, 4, 'A815EC', 2, 2, 'Je veux encore laver ma voiture', 'a821e419.png', 2, NULL, NULL, '2020-05-15 16:59:45', '2020-05-15 16:59:45', 0, 1),
(6, 4, 'B74AEF', 2, 2, 'Je veux encore laver ma voiture', 'b75261fc.png', 2, NULL, NULL, '2020-05-15 17:03:48', '2020-05-15 17:03:48', 0, 1),
(7, 4, 'BB3AA7', 2, 2, 'Je veux encore laver ma voiture', 'bb4116d2.png', 2, NULL, NULL, '2020-05-15 17:04:51', '2020-05-15 17:04:51', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `demandevehicule`
--

CREATE TABLE `demandevehicule` (
  `id` int(11) NOT NULL,
  `ticket` varchar(10) NOT NULL,
  `typemission_id` int(11) NOT NULL,
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
  `etape` int(11) NOT NULL,
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

--
-- Déchargement des données de la table `demandevehicule`
--

INSERT INTO `demandevehicule` (`id`, `ticket`, `typemission_id`, `departement_id`, `utilisateur_id`, `objet`, `lieu`, `caracteristique`, `comment`, `vehicule_id`, `chauffeur_id`, `date_approuve`, `typedotation_id`, `date_validation_dg`, `with_chauffeur`, `etape`, `etat_id`, `carburant`, `dotation`, `date_validation_rh`, `created`, `modified`, `protected`, `valide`, `started`, `finished`, `gestionnaire_id`, `refus_comment`) VALUES
(1, '68F191', 1, 2, 1, 'Tournée de controle', 'Marcory poto', 'Duster', 'je veux aller faire de priorite ', 1, NULL, '2020-05-15 12:25:40', NULL, NULL, 0, 2, 4, NULL, NULL, NULL, '2020-05-15 12:09:51', '2020-05-15 12:09:51', 0, 1, '2020-05-15 00:00:00', '2020-05-23 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `sigle` varchar(10) DEFAULT NULL,
  `circuit_programmee` int(11) DEFAULT NULL,
  `circuit_inopinee` int(11) DEFAULT NULL,
  `visibility` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`id`, `name`, `sigle`, `circuit_programmee`, `circuit_inopinee`, `visibility`, `created`, `modified`, `protected`, `valide`) VALUES
(1, 'DEPARTEMENT PARC AUTO', 'DPA', 2, 2, 0, '2020-05-15 11:42:17', '2020-05-15 11:42:17', 1, 1),
(2, 'Departement test', 'DPT', 1, 1, 1, '2020-05-15 11:59:31', '2020-05-15 11:59:31', 0, 1);

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
(1, 'Diesel', '2020-05-15 11:42:18', '2020-05-15 11:42:18', 1, 1),
(2, 'Essence/Super', '2020-05-15 11:42:18', '2020-05-15 11:42:18', 1, 1),
(3, 'Gasoil', '2020-05-15 11:42:18', '2020-05-15 11:42:18', 1, 1),
(4, 'Electrique', '2020-05-15 11:42:19', '2020-05-15 11:42:19', 1, 1),
(5, 'Gaz', '2020-05-15 11:42:19', '2020-05-15 11:42:19', 1, 1),
(6, 'GPL/GNV', '2020-05-15 11:42:19', '2020-05-15 11:42:19', 1, 1);

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
  `kilometrage` int(11) DEFAULT NULL,
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
  `comment` text DEFAULT NULL,
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

--
-- Déchargement des données de la table `etatpiece`
--

INSERT INTO `etatpiece` (`id`, `name`, `class`, `protected`, `valide`) VALUES
(1, 'Annulé', 'info', 1, 1),
(2, 'Périmé', 'danger', 1, 1),
(3, 'Valide', 'warning', 1, 1);

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
(9, 'Véhicule loué', 'navy', 1, 1);

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
(1, 'Super Gestionnaire', NULL, '...', 'test@yopmail.com', '...', NULL, 'root', '5e9795e3f3ab55e7790a6283507c085db0d764fc', 0, 'default.png', '2020-05-15 11:42:17', '2020-05-15 11:42:17', 1, 1, 1, 1, 1);

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
(1, 'Véhicules de mission', '2020-05-15 11:42:09', '2020-05-15 11:42:09', 1, 1),
(2, 'Véhicules de Car Plan', '2020-05-15 11:42:10', '2020-05-15 11:42:10', 1, 1),
(3, 'Véhicules de Pool', '2020-05-15 11:42:10', '2020-05-15 11:42:10', 1, 1),
(4, 'Véhicules de livraison', '2020-05-15 11:42:10', '2020-05-15 11:42:10', 1, 1),
(5, 'Cars de ramassage', '2020-05-15 11:42:10', '2020-05-15 11:42:10', 1, 1),
(6, 'Véhicules loués', '2020-05-15 11:42:10', '2020-05-15 11:42:10', 1, 1);

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
(1, 1, '2020-05-15 11:42:10', '2020-05-15 11:42:10', 1, 1),
(2, 6, '2020-05-15 11:42:11', '2020-05-15 11:42:11', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `sentense` text NOT NULL,
  `typeSave` varchar(50) NOT NULL,
  `record` varchar(200) NOT NULL,
  `recordId` int(11) DEFAULT NULL,
  `employe_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 1,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE `marque` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `logo` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

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
  `kilometrage_aller` int(11) DEFAULT NULL,
  `kilometrage_retour` int(11) DEFAULT NULL,
  `chauffeur_id` int(11) DEFAULT NULL,
  `lieu` varchar(200) NOT NULL,
  `objet` varchar(200) NOT NULL,
  `comment` text NOT NULL,
  `started` datetime DEFAULT NULL,
  `finished` datetime DEFAULT NULL,
  `carburant_aller` int(11) DEFAULT NULL,
  `carburant_retour` int(11) DEFAULT NULL,
  `etat_id` int(1) DEFAULT NULL,
  `gestionnaire_id` int(11) DEFAULT NULL,
  `date_approuve` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mission`
--

INSERT INTO `mission` (`id`, `reference`, `demandevehicule_id`, `departement_id`, `vehicule_id`, `kilometrage_aller`, `kilometrage_retour`, `chauffeur_id`, `lieu`, `objet`, `comment`, `started`, `finished`, `carburant_aller`, `carburant_retour`, `etat_id`, `gestionnaire_id`, `date_approuve`, `created`, `modified`, `protected`, `valide`) VALUES
(1, '1/2020/DPT', 1, 2, 1, 150, NULL, NULL, 'Marcory poto', 'Tournée de controle', 'je veux aller faire de priorite ', '2020-05-15 00:00:00', '2020-05-23 00:00:00', 25, NULL, 2, NULL, NULL, '2020-05-15 12:09:51', '2020-05-15 12:09:51', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `mycompte`
--

CREATE TABLE `mycompte` (
  `id` int(11) NOT NULL,
  `identifiant` varchar(9) NOT NULL,
  `typecompte_id` int(11) NOT NULL,
  `expired` datetime NOT NULL,
  `protected` int(11) NOT NULL DEFAULT 1,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mycompte`
--

INSERT INTO `mycompte` (`id`, `identifiant`, `typecompte_id`, `expired`, `protected`, `valide`) VALUES
(1, '0149F6E', 1, '2020-05-22 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `params`
--

CREATE TABLE `params` (
  `id` int(11) NOT NULL,
  `societe` varchar(50) NOT NULL,
  `timeout` int(11) NOT NULL DEFAULT 5,
  `contact` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `postale` varchar(50) DEFAULT NULL,
  `devise` varchar(50) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `delai_alert` int(11) NOT NULL,
  `protected` int(11) NOT NULL DEFAULT 1,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `params`
--

INSERT INTO `params` (`id`, `societe`, `timeout`, `contact`, `fax`, `adresse`, `postale`, `devise`, `email`, `image`, `delai_alert`, `protected`, `valide`) VALUES
(1, 'Societe de parc automobile', 10, '45856625 / 250215 ', '02010202', '123 adresse 45', '', 'Fcfa', 'info@devaris21.com', '7bf935fa.png', 10, 1, 1);

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
(1, 'Devaris PRESTATAIRE', 4, '...', NULL, 'info@devaris21.com', '...', NULL, '...', '...', 1, 'default.png', 1, '2020-05-15 11:42:13', '2020-05-15 11:42:13', 1, 1);

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
(1, 1, 'bonjour ceci cela', '2020-05-15', '2020-05-22', NULL, 1, 2, '2020-05-15 14:04:58', '2020-05-15 14:04:58', 0, 1),
(2, 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,', '2020-05-15', '2020-05-29', NULL, 1, 2, '2020-05-15 16:23:13', '2020-05-15 16:23:13', 0, 1);

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
(1, 'Affectation permanente', '2020-05-15 11:42:06', '2020-05-15 11:42:06', 1, 1),
(2, 'Affectation temporaire', '2020-05-15 11:42:06', '2020-05-15 11:42:06', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `typecompte`
--

CREATE TABLE `typecompte` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `valide` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'Espèces', '2020-05-15 11:42:06', '2020-05-15 11:42:06', 1, 1),
(2, 'Carte', '2020-05-15 11:42:06', '2020-05-15 11:42:06', 1, 1),
(3, 'Soute', '2020-05-15 11:42:07', '2020-05-15 11:42:07', 1, 1),
(4, 'Bon valeur', '2020-05-15 11:42:07', '2020-05-15 11:42:07', 1, 1);

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
(1, 'Entretien dû au sinistre', '2020-05-15 11:42:08', '2020-05-15 11:42:08', 1, 1),
(2, 'vidange simple', '2020-05-15 11:42:09', '2020-05-15 11:42:09', 1, 1),
(3, 'Vidange complète', '2020-05-15 11:42:09', '2020-05-15 11:42:09', 1, 1),
(4, 'Lavage Auto', '2020-05-15 11:42:09', '2020-05-15 11:42:09', 1, 1),
(5, 'Autre', '2020-05-15 11:42:09', '2020-05-15 11:42:09', 1, 1);

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
(1, 'Pieces Mécaniques', '2020-05-15 11:42:07', '2020-05-15 11:42:07', 1, 1),
(2, 'Utilitaire de véhicule', '2020-05-15 11:42:07', '2020-05-15 11:42:07', 1, 1),
(3, 'Outils de néttoyage', '2020-05-15 11:42:08', '2020-05-15 11:42:08', 1, 1);

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
(1, 'Gestionnaire en chef', '2020-05-15 11:42:16', '2020-05-15 11:42:16', 1, 1),
(2, 'Gestionnaire', '2020-05-15 11:42:17', '2020-05-15 11:42:17', 1, 1);

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
(1, 'Location de véhicule', '2020-05-15 11:42:07', '2020-05-15 11:42:07', 1, 1),
(2, 'Prêt de véhicule', '2020-05-15 11:42:07', '2020-05-15 11:42:07', 1, 1);

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
(1, 'Mission programmée', '2020-05-15 11:42:05', '2020-05-15 11:42:05', 1, 1),
(2, 'Mission inopinée', '2020-05-15 11:42:05', '2020-05-15 11:42:05', 1, 1),
(3, 'Autre demande', '2020-05-15 11:42:05', '2020-05-15 11:42:05', 1, 1);

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
(1, 'Patente', '2020-05-15 11:42:04', '2020-05-15 11:42:04', 1, 1),
(2, 'Carte de stationnement', '2020-05-15 11:42:04', '2020-05-15 11:42:04', 1, 1),
(3, 'Autre', '2020-05-15 11:42:05', '2020-05-15 11:42:05', 1, 1);

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
(1, 'Consessionnaire', '2020-05-15 11:42:12', '2020-05-15 11:42:12', 1, 1),
(2, 'Garage', '2020-05-15 11:42:12', '2020-05-15 11:42:12', 1, 1),
(3, 'Lavage Auto', '2020-05-15 11:42:13', '2020-05-15 11:42:13', 1, 1),
(4, 'Autre', '2020-05-15 11:42:13', '2020-05-15 11:42:13', 1, 1);

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
(1, 'Produit', '2020-05-15 11:42:05', '2020-05-15 11:42:05', 1, 1),
(2, 'Service', '2020-05-15 11:42:05', '2020-05-15 11:42:05', 1, 1),
(3, 'voiture', '2020-05-15 11:42:06', '2020-05-15 11:42:06', 1, 1);

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
(1, 'Léger accrochage', '2020-05-15 11:42:11', '2020-05-15 11:42:11', 1, 1),
(2, 'Crevaison', '2020-05-15 11:42:11', '2020-05-15 11:42:11', 1, 1),
(3, 'Défaillance moteur', '2020-05-15 11:42:11', '2020-05-15 11:42:11', 1, 1),
(4, 'Accident grave', '2020-05-15 11:42:11', '2020-05-15 11:42:11', 1, 1),
(5, 'Vol', '2020-05-15 11:42:12', '2020-05-15 11:42:12', 1, 1),
(6, 'Autre', '2020-05-15 11:42:12', '2020-05-15 11:42:12', 1, 1);

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
(1, 'standart', '2020-05-15 11:42:19', '2020-05-15 11:42:19', 1, 1);

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
(1, 'Manuelle', '2020-05-15 11:42:17', '2020-05-15 11:42:17', 1, 1),
(2, 'Semie-automatique', '2020-05-15 11:42:17', '2020-05-15 11:42:17', 1, 1),
(3, 'Automatique', '2020-05-15 11:42:18', '2020-05-15 11:42:18', 1, 1);

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
(1, 'Voiture', '2020-05-15 11:42:08', '2020-05-15 11:42:08', 1, 1),
(2, 'Car', '2020-05-15 11:42:08', '2020-05-15 11:42:08', 1, 1),
(3, 'Pick-up', '2020-05-15 11:42:08', '2020-05-15 11:42:08', 1, 1),
(4, 'Moto', '2020-05-15 11:42:08', '2020-05-15 11:42:08', 1, 1);

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

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `matricule`, `name`, `lastname`, `departement_id`, `adresse`, `email`, `contact`, `fonction`, `login`, `password`, `is_new`, `image`, `created`, `modified`, `allowed`, `protected`, `valide`, `visibility`) VALUES
(1, 'aa21.3z', 'Mdkzj', 'zaea', 2, 'qkdq', 'test1@yopmail.com', '02255985', NULL, '338ab80', '316670d0cce18a6ea0e8b307879eb0447137b902', 1, 'default.png', '2020-05-15 12:07:18', '2020-05-15 12:07:18', 1, 0, 1, 1),
(5, ';ejf;e,', 'Mlkza', 'zq:kbdlkqe', 2, 'hjzg;d', 'test@yopmail.com', '2354120', NULL, 'bf0b64a', '3719b301a27a90ae08251d857f7d6f3d33fed47e', 1, 'default.png', '2020-05-15 15:35:27', '2020-05-15 15:35:27', 1, 0, 1, 1);

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
(1, '4024 HK 01', 1, 1, 5, 5, 1, 'yaris 205', 1, NULL, 1, '', NULL, NULL, NULL, NULL, '9ce8e6e9.png', 1, 'QZSLMBV58421V421N', '', 1450000, 4, '2020-05-15 12:23:42', '2020-05-15 12:23:42', 0, 1, 150, 0),
(2, '7854ZE65', 1, 1, 5, 5, 1, 'Alpha 162 AK', 1, NULL, 145, '', NULL, NULL, NULL, NULL, '0003be8a.png', 2, 'QZSLMBV58421V421N', '', 0, 7, '2020-05-15 13:58:22', '2020-05-15 13:58:22', 0, 1, 780, 0);

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
-- Index pour les tables déchargées
--

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
-- Index pour la table `typecompte`
--
ALTER TABLE `typecompte`
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
-- AUTO_INCREMENT pour la table `assurance`
--
ALTER TABLE `assurance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `carplan`
--
ALTER TABLE `carplan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `carte`
--
ALTER TABLE `carte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cartegrise`
--
ALTER TABLE `cartegrise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cession`
--
ALTER TABLE `cession`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `chauffeur`
--
ALTER TABLE `chauffeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `chauffeur_vehicule`
--
ALTER TABLE `chauffeur_vehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `connexion`
--
ALTER TABLE `connexion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `demandevehicule`
--
ALTER TABLE `demandevehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `groupevehiculeopen`
--
ALTER TABLE `groupevehiculeopen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `location_vehicule`
--
ALTER TABLE `location_vehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `marque`
--
ALTER TABLE `marque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT pour la table `mission`
--
ALTER TABLE `mission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT pour la table `typecompte`
--
ALTER TABLE `typecompte`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `typedotation`
--
ALTER TABLE `typedotation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `typeentretienvehicule`
--
ALTER TABLE `typeentretienvehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
