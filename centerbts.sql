-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 24 juin 2021 à 19:15
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `centerbts`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

DROP TABLE IF EXISTS `annonce`;
CREATE TABLE IF NOT EXISTS `annonce` (
  `idAn` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `date` varchar(255) NOT NULL,
  `audicion` varchar(20) NOT NULL,
  `imgAnnonce` varchar(100) NOT NULL,
  `editeur` varchar(100) NOT NULL,
  `documents` varchar(100) NOT NULL,
  PRIMARY KEY (`idAn`)
) ENGINE=MyISAM AUTO_INCREMENT=351 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`idAn`, `titre`, `description`, `date`, `audicion`, `imgAnnonce`, `editeur`, `documents`) VALUES
(349, 'Remise des rapports', '                ', '24/06/2021', 'etudiant', '1624558236-annonce.png', 'Said;Haigon', ''),
(350, 'Soutenance de PFE et de Stage  ', '           ', '29/06/2021', 'etudiant', '1624558291-annonce.png', 'Said;Haigon', ''),
(347, 'liste principal PME', '              ', '04/09/2021', 'public', '1624558085-annonce.png', 'Said;Haigon', ''),
(348, 'Résultat examen de passage', '               ', '30/06/2021', 'etudiant', '1624558167-annonce.png', 'Youssef;Elsadiki', ''),
(344, 'Inscription BTS libre ', '              ', '06/05/2021', 'public', '1624557908-annonce.png', 'Said;Haigon', ''),
(345, 'Inscription BTS ', '             ', '28/07/2021', 'public', '1624557971-annonce.png', 'Said;Haigon', ''),
(346, 'Liste d\'attente N 1 MCW', '            ', '03/09/2021', 'public', '1624558020-annonce.png', 'Said;Haigon', ''),
(342, 'Examen', '           ', '22/04/2021', 'etudiant', '1624557554-annonce.png', 'Said;Haigon', ''),
(343, 'fête de remise des diplômes  ', '                ', '04/10/2022', 'etudiant', '1624557809-annonce.png', 'Youssef;Elsadiki', ''),
(341, '#BTS2021', '               ', '23/05/2021', 'etudiant', '1624557396-annonce.png', 'Rachida;elfahli', ''),
(338, 'Réunion', '     ', '02/10/2021', 'professeurs', '1624556748-annonce.png', 'Ibrahim;Mouslih', ''),
(339, 'Liste d\'attente N 1 PME ', '              ', '04/09/2021', 'public', '1624557231-annonce.png', 'Said;Haigon', ''),
(340, 'Liste d\'attente N 2 MCW', '              ', '05/09/2021', 'public', '1624557314-annonce.png', 'Said;Haigon', '');

-- --------------------------------------------------------

--
-- Structure de la table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `idClass` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `idDir` varchar(50) NOT NULL,
  PRIMARY KEY (`idClass`),
  KEY `idDir` (`idDir`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `class`
--

INSERT INTO `class` (`idClass`, `name`, `idDir`) VALUES
(1, 'MCW 1', 'MD1273'),
(2, 'MCW 2', 'MD1273'),
(3, 'PME 1', 'MD1273'),
(4, 'PME 2', 'MD1273');

-- --------------------------------------------------------

--
-- Structure de la table `condidat`
--

DROP TABLE IF EXISTS `condidat`;
CREATE TABLE IF NOT EXISTS `condidat` (
  `codeMassar` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bac` varchar(200) NOT NULL,
  `releveNote` varchar(200) NOT NULL,
  `fichCond` varchar(200) NOT NULL,
  `idFiliere` varchar(50) NOT NULL,
  PRIMARY KEY (`codeMassar`),
  KEY `idFiliere` (`idFiliere`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `condidat`
--

INSERT INTO `condidat` (`codeMassar`, `name`, `prenom`, `tel`, `email`, `bac`, `releveNote`, `fichCond`, `idFiliere`) VALUES
('R348293', 'Elenaia', 'Haitam', '070873782', 'haitam@gmail.com', 'Bac1100-fiche d evaluation stage.pdf', 'Note7947-demande de stage.pdf', 'Condidature5200-Coupon réponse 2 MCW.pdf', '1'),
('K137097', 'Agnaoi', 'Ahmed', '0689971837', 'ahmed@gmail.com', 'Bac3304-fiche d evaluation stage.pdf', 'Note6317-lettre de recomm 2 gpme.pdf', 'Condidature9880-demande de stage.pdf', '1'),
('F3848299', 'Bennari', 'Rajae', '063784928', 'raje@gmail.com', 'Bac4570-fiche d evaluation stage.pdf', 'Note2483-lettre de recomm 2 gpme.pdf', 'Condidature3671-Coupon réponse 2 MCW.pdf', '2'),
('H293849', 'Elsakak', 'Hajar', '084784439', 'hajar@gmail.com', 'Bac5382-fiche d evaluation stage.pdf', 'Note2996-Coupon réponse 2 MCW.pdf', 'Condidature7706-lettre de recomm 2 gpme.pdf', '2'),
('Z838499', 'elgaty', 'Zakarea', '073646738', 'zakari@gmail.com', 'Bac9857-lettre de recomm 2 gpme.pdf', 'Note1810-lettre de recomm 2 gpme.pdf', 'Condidature7046-lettre de recomm 2 gpme.pdf', '2');

-- --------------------------------------------------------

--
-- Structure de la table `directeurdetudes`
--

DROP TABLE IF EXISTS `directeurdetudes`;
CREATE TABLE IF NOT EXISTS `directeurdetudes` (
  `idDirE` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sexe` char(2) NOT NULL,
  `image` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `age` int NOT NULL,
  `idDir` varchar(50) NOT NULL,
  PRIMARY KEY (`idDirE`),
  KEY `idDir` (`idDir`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `directeurdetudes`
--

INSERT INTO `directeurdetudes` (`idDirE`, `name`, `prenom`, `tel`, `email`, `sexe`, `image`, `login`, `password`, `adresse`, `age`, `idDir`) VALUES
('S198283', 'Haigon', 'Said', '0663638652', 'said@gmail.com', 'M', 'et.png', 'said', '6666', 'Chichaoua', 38, 'MD1273');

-- --------------------------------------------------------

--
-- Structure de la table `directeurgeneral`
--

DROP TABLE IF EXISTS `directeurgeneral`;
CREATE TABLE IF NOT EXISTS `directeurgeneral` (
  `idDir` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sexe` char(2) NOT NULL,
  `image` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `age` int NOT NULL,
  PRIMARY KEY (`idDir`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='La table directeur general';

--
-- Déchargement des données de la table `directeurgeneral`
--

INSERT INTO `directeurgeneral` (`idDir`, `name`, `prenom`, `tel`, `email`, `sexe`, `image`, `login`, `password`, `adresse`, `age`) VALUES
('MD1273', 'Mouslih', 'Ibrahim', '0654827094', 'ibrahim@gmail.com', 'M', '26416407MD1273-dir.png', 'ibrahim', '1111', 'chichaoua ', 40);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `idEt` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sexe` char(2) NOT NULL,
  `image` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `age` int NOT NULL,
  `idFiliere` int NOT NULL AUTO_INCREMENT,
  `idDir` varchar(50) NOT NULL,
  `idClass` varchar(100) NOT NULL,
  PRIMARY KEY (`idEt`),
  KEY `idDir` (`idDir`),
  KEY `idFiliere` (`idFiliere`),
  KEY `idClass` (`idClass`)
) ENGINE=MyISAM AUTO_INCREMENT=131 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`idEt`, `name`, `prenom`, `tel`, `email`, `sexe`, `image`, `login`, `password`, `adresse`, `age`, `idFiliere`, `idDir`, `idClass`) VALUES
('N9876', 'Elwadi', 'Noussaiba', '076273828', 'noussaiba@gmail.com', 'F', '3.jpg', 'noussaiba', '57865', 'Mouhamadea', 19, 1, 'MD1273', '2'),
('D38728', 'Elraki', 'Idriss', '078273829', 'idris@gmail.com', 'M', '2.png', 'idris', '3423', 'Fes', 21, 1, 'MD1273', '2'),
('M63748', 'Elcharkaoui', 'Mouad', '0735263772', 'mouad@gmail.com', 'M', '4.png', 'mouad', '42321', 'Casa', 22, 1, 'MD1273', '2'),
('H37362', 'Tidkar', 'Hajar', '063425378', 'hajar@gmail.com', 'F', '6.jpg', 'hajar', '2543', 'Casa', 21, 1, 'MD1273', '2'),
('A11282', 'Elharkani', 'Abderrahmane', '067453263', 'abdo@gmail.com', 'M', '5.png', 'abderrahmane', '3232', 'Berrachid', 19, 1, 'MD1273', '1'),
('SA9887', 'Noussfi', 'Salma', '074656374', 'salma@gmail.com', 'F', '10.jpg', 'salma', '1987', 'Beni melal', 18, 1, 'MD1273', '1'),
('OS9882', 'ait ougrad', 'Oussama', '064352649', 'oussama@gmail.com', 'M', '7.png', 'oussama', '4444', 'Marrakech', 20, 1, 'MD1273', '1'),
('A9289', 'Elfarsi', 'Alae', '074637289', 'alae@gmail.com', 'M', '8.png', 'alae', '57384', 'Safi', 19, 1, 'MD1273', '1'),
('B9287', 'Al aroui', 'Ibrahim', '064738493', 'ibrahim@gmail.com', 'M', '9.png', 'ibrahim', '6464', 'Casa', 19, 1, 'MD1273', '1'),
('S72683', 'Elsadik', 'Asma', '073653425', 'asma@gmail.com', 'F', '10.jpg', 'asma', '3674', 'Chichaoua', 18, 1, 'MD1273', '1'),
('Z37263', 'ait aisa', 'Zouhair', '067362783', 'zouhair@gmail.com', 'M', '12.png', 'zouhair', '4343', 'Marrakech', 20, 1, 'MD1273', '1'),
('F2398', 'jalili', 'Fatiha', '076242567', 'fatiha@fmail.com', 'F', '11.png', 'fatiha', '76765', 'Taza', 19, 2, 'MD1273', '3'),
('D43I93', 'kadiri', 'Jamal', '077477383', 'jamal@gmail.com', 'M', '13.png', 'jamal', '47409', 'Rabat', 21, 2, 'MD1273', '3'),
('W65777', 'Elwasli', 'Akram', '063766472', 'akram@gmail.com', 'M', '2.png', 'akram', '789E', 'Tetoin', 22, 2, 'MD1273', '3'),
('M55556', 'Ait hafid', 'Malika', '068747484', 'malika@gmail.com', 'F', '6.png', 'malika', '545454', 'Azilal', 20, 2, 'MD1273', '4'),
('H99484', 'Elbaoui', 'Hamza', '048494839', 'hamza@gmail.com', 'M', '8.png', 'hamza', '6664', 'Sid Mokhtar', 23, 2, 'MD1273', '4'),
('SE9494', 'Elargoubi', 'Salma', '06473828', 'salmaar@gmail.com', 'F', '8.jpg', 'salma', '33262', 'Khouribga', 20, 2, 'MD1273', '4'),
('DB8684', 'Aberrgaz', 'Abdelhadi', '07563728', 'abdelhai@gmail.com', 'M', '7.png', 'abdelhadi', '9090', 'Chichaoua', 21, 2, 'MD1273', '4');

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

DROP TABLE IF EXISTS `filiere`;
CREATE TABLE IF NOT EXISTS `filiere` (
  `idFiliere` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `idDir` varchar(50) NOT NULL,
  PRIMARY KEY (`idFiliere`),
  KEY `idDir` (`idDir`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`idFiliere`, `name`, `description`, `idDir`) VALUES
(1, 'MCW', 'Multimedia et conception web', 'MD1273'),
(2, 'PME', 'Petite et Moyen entreprise', 'MD1273');

-- --------------------------------------------------------

--
-- Structure de la table `periode_dinscription`
--

DROP TABLE IF EXISTS `periode_dinscription`;
CREATE TABLE IF NOT EXISTS `periode_dinscription` (
  `etat` varchar(50) NOT NULL,
  `date_debut` varchar(255) NOT NULL,
  `date_fin` varchar(255) NOT NULL,
  `idDir` varchar(50) NOT NULL,
  `idDirE` varchar(50) NOT NULL,
  PRIMARY KEY (`etat`),
  KEY `idDir` (`idDir`),
  KEY `idDirE` (`idDirE`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `periode_dinscription`
--

INSERT INTO `periode_dinscription` (`etat`, `date_debut`, `date_fin`, `idDir`, `idDirE`) VALUES
('ouverte', '2021-06-16', '2021-06-23', 'S198283', '');

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

DROP TABLE IF EXISTS `professeur`;
CREATE TABLE IF NOT EXISTS `professeur` (
  `idProf` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sexe` char(2) NOT NULL,
  `image` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `age` int NOT NULL,
  PRIMARY KEY (`idProf`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`idProf`, `name`, `prenom`, `tel`, `email`, `sexe`, `image`, `login`, `password`, `adresse`, `age`) VALUES
('Y34662', 'Elsadiki', 'Youssef', '0623236452', 'youssef@gmail.com', 'M', '', 'youssef', '2315', 'Tanger', 63),
('M29387', 'Elrachidi', 'Meryem', '0785736254', 'meryem@gmail.com', 'F', '', 'meryem', '9988', 'Khouribga', 28),
('R34724', 'Elalaoui', 'Rida', '078473742', 'rida@gmail.com', 'M', '', 'rida', '5341', 'Fes', 47),
('K54198', 'elfahli', 'Rachida', '078463727', 'rachida@gmail.com', 'F', '', 'rachida', '7777', 'Chefchaoin', 33),
('K19283', 'Eljalili', 'Kamal', '0689999345', 'kamal@gmail.com', 'M', '', 'kamal', '3333', 'Marrakech', 40);

-- --------------------------------------------------------

--
-- Structure de la table `seance`
--

DROP TABLE IF EXISTS `seance`;
CREATE TABLE IF NOT EXISTS `seance` (
  `idClass` int NOT NULL AUTO_INCREMENT,
  `idProf` varchar(50) NOT NULL,
  `nameMatiere` varchar(50) NOT NULL,
  KEY `idProf` (`idProf`),
  KEY `idClass` (`idClass`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
