-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Ven 19 Avril 2019 à 01:38
-- Version du serveur: 5.5.20
-- Version de PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `lab`
--

-- --------------------------------------------------------

--
-- Structure de la table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jobcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fileurl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ticketNum` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=182 ;

--
-- Contenu de la table `upload`
--

INSERT INTO `upload` (`id`, `prenom`, `nom`, `email`, `jobcode`, `fileurl`, `ticketNum`) VALUES
(78, 'eefef', 'efefef', 'oussama.eddai@gmail.com', 'Webdesigner', 'cobol.pdf', 3),
(91, 'eefef', 'efefef', 'oussama.eddai@gmail.com', 'Webdesigner', 'EDDAI_OUSSAMA_CV.pdf', 3),
(104, 'oussama', 'eddai', 'oussama.eddai@gmail.com', 'Data Analyst', 'EDDAI_OUSSAMA_CV.pdf', 4),
(105, 'oussama', 'eddai', 'oussama.eddai@gmail.com', 'Data Analyst', 'EDDAI_OUSSAMA_CV.pdf', 4),
(109, 'hakim', 'arkib', 'hakim.arkib@gmail.com', 'cybersecurite', 'cobol.pdf', 2),
(110, 'soufiane', 'elkhokh', 'soufiane.elkhokh@gmail.com', 'developpeur web', 'EDDAI_OUSSAMA_CV.pdf', 4),
(111, 'yasine ', 'bouziare', 'yasine.bouziare@gmail.com', 'Webdesigner', 'cobol.pdf', 2),
(112, 'yasine ', 'bouziare', 'yasine.bouziare@gmail.com', 'Webdesigner', 'cobol.pdf', 2),
(113, 'Yassine', 'Boumajane', 'yassine.boumajane@aiesec.net', 'Architecte Cloud', 'Yassine_Boumajane_Ingenieur_Cloud_Azure.pdf', 2),
(114, 'Othmane', 'Rhallak', 'oth@gmail.com', 'Architecte Cloud', 'Cv-RHALLAK-Otmane.doc', 4),
(115, 'Othmane', 'Rhallak', 'oth@gmail.com', 'Architecte Cloud', 'Cv-RHALLAK-Otmane.doc', 4),
(116, 'Othmane', 'Rhallak', 'oth@gmail.com', 'Architecte Cloud', 'Cv-RHALLAK-Otmane.doc', 4),
(117, 'Othmane', 'Rhallak', 'oth@gmail.com', 'Architecte Cloud', 'Cv-RHALLAK-Otmane.doc', 4),
(118, 'Othmane', 'Rhallak', 'oth@gmail.com', 'Architecte Cloud', 'Cv-RHALLAK-Otmane.doc', 4),
(119, 'Othmane', 'Rhallak', 'oth@gmail.com', 'Architecte Cloud', 'Cv-RHALLAK-Otmane.doc', 4),
(120, 'Othmane', 'Rhallak', 'oth@gmail.com', 'Architecte Cloud', 'Cv-RHALLAK-Otmane.doc', 4),
(121, 'Othmane', 'Rhallak', 'oth@gmail.com', 'Architecte Cloud', 'Cv-RHALLAK-Otmane.doc', 4),
(122, 'Othmane', 'Rhallak', 'oth@gmail.com', 'Architecte Cloud', 'Cv-RHALLAK-Otmane.doc', 4),
(123, 'Othmane', 'Rhallak', 'oth@gmail.com', 'Architecte Cloud', 'Cv-RHALLAK-Otmane.doc', 4),
(124, 'Othmane', 'Rhallak', 'oth@gmail.com', 'Architecte Cloud', 'Cv-RHALLAK-Otmane.doc', 4),
(125, 'Othmane', 'Rhallak', 'oth@gmail.com', 'Architecte Cloud', 'Cv-RHALLAK-Otmane.doc', 4),
(126, 'Othmane', 'Rhallak', 'oth@gmail.com', 'Architecte Cloud', 'Cv-RHALLAK-Otmane.doc', 4),
(127, 'Othmane', 'Rhallak', 'oth@gmail.com', 'Architecte Cloud', 'Cv-RHALLAK-Otmane.doc', 4),
(128, 'Othmane', 'Rhallak', 'oth@gmail.com', 'Architecte Cloud', 'Cv-RHALLAK-Otmane.doc', 4),
(129, 'Othmane', 'Rhallak', 'oth@gmail.com', 'Architecte Cloud', 'Cv-RHALLAK-Otmane.doc', 4),
(130, 'Othmane', 'Rhallak', 'oth@gmail.com', 'Architecte Cloud', 'Cv-RHALLAK-Otmane.doc', 4),
(131, 'Othmane', 'Rhallak', 'oth@gmail.com', 'Architecte Cloud', 'Cv-RHALLAK-Otmane.doc', 4),
(132, 'Othmane', 'Rhallak', 'oth@gmail.com', 'Architecte Cloud', 'Cv-RHALLAK-Otmane.doc', 4),
(133, 'Othmane', 'Rhallak', 'oth@gmail.com', 'Architecte Cloud', 'Cv-RHALLAK-Otmane.doc', 4),
(134, 'Othmane', 'Rhallak', 'oth@gmail.com', 'Architecte Cloud', 'Cv-RHALLAK-Otmane.doc', 4),
(135, 'Othmane', 'Rhallak', 'oth@gmail.com', 'Architecte Cloud', 'Cv-RHALLAK-Otmane.doc', 4),
(136, 'Othmane', 'Rhallak', 'oth@gmail.com', 'Architecte Cloud', 'Cv-RHALLAK-Otmane.doc', 4),
(137, 'Othmane', 'Rhallak', 'oth@gmail.com', 'Architecte Cloud', 'Cv-RHALLAK-Otmane.doc', 4),
(138, 'Othmane', 'Rhallak', 'oth@gmail.com', 'Architecte Cloud', 'Cv-RHALLAK-Otmane.doc', 4),
(139, 'Othmane', 'Rhallak', 'oth@gmail.com', 'Architecte Cloud', 'Cv-RHALLAK-Otmane.doc', 4),
(140, 'Othmane', 'Rhallak', 'oth@gmail.com', 'Architecte Cloud', 'Cv-RHALLAK-Otmane.doc', 4),
(141, 'Othmane', 'Rhallak', 'oth@gmail.com', 'Architecte Cloud', 'Cv-RHALLAK-Otmane.doc', 4),
(142, 'Othmane', 'Rhallak', 'oth@gmail.com', 'Architecte Cloud', 'Cv-RHALLAK-Otmane.doc', 4),
(143, 'Yassine', 'Rhallak', 'yassine.boumajane@aiesec.net', 'Architecte Cloud', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 4),
(144, 'Yassine', 'Rhallak', 'yassine.boumajane@aiesec.net', 'Architecte Cloud', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 4),
(145, 'Yassine', 'Rhallak', 'yassine.boumajane@aiesec.net', 'Architecte Cloud', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 4),
(146, 'Yassine', 'Rhallak', 'yassine.boumajane@aiesec.net', 'Architecte Cloud', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 4),
(147, 'Yassine', 'Rhallak', 'yassine.boumajane@aiesec.net', 'Architecte Cloud', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 4),
(148, 'Yassine', 'Rhallak', 'yassine.boumajane@aiesec.net', 'Architecte Cloud', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 4),
(149, 'Yassine', 'Rhallak', 'yassine.boumajane@aiesec.net', 'Architecte Cloud', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 4),
(150, 'Yassine', 'Rhallak', 'yassine.boumajane@aiesec.net', 'Architecte Cloud', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 4),
(151, 'Yassine', 'Rhallak', 'yassine.boumajane@aiesec.net', 'Architecte Cloud', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 4),
(152, 'Yassine', 'Rhallak', 'yassine.boumajane@aiesec.net', 'Architecte Cloud', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 4),
(153, 'Yassine', 'Rhallak', 'yassine.boumajane@aiesec.net', 'Architecte Cloud', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 4),
(154, 'Yassine', 'Rhallak', 'yassine.boumajane@aiesec.net', 'Architecte Cloud', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 4),
(155, 'Yassine', 'Rhallak', 'yassine.boumajane@aiesec.net', 'Architecte Cloud', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 4),
(156, 'Yassine', 'Rhallak', 'yassine.boumajane@aiesec.net', 'Architecte Cloud', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 4),
(157, 'Yassine', 'Rhallak', 'yassine.boumajane@aiesec.net', 'Architecte Cloud', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 4),
(158, 'Yassine', 'Rhallak', 'yassine.boumajane@aiesec.net', 'Architecte Cloud', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 4),
(159, 'Yassine', 'Rhallak', 'yassine.boumajane@aiesec.net', 'Architecte Cloud', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 4),
(160, 'Yassine', 'Rhallak', 'yassine.boumajane@aiesec.net', 'Architecte Cloud', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 4),
(161, 'Yassine', 'Rhallak', 'yassine.boumajane@aiesec.net', 'Architecte Cloud', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 4),
(162, 'Yassine', 'Rhallak', 'yassine.boumajane@aiesec.net', 'Architecte Cloud', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 4),
(163, 'Yassine', 'Rhallak', 'yassine.boumajane@aiesec.net', 'Architecte Cloud', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 4),
(164, 'Yassine', 'Rhallak', 'yassine.boumajane@aiesec.net', 'Architecte Cloud', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 4),
(165, 'Yassine', 'Rhallak', 'yassine.boumajane@aiesec.net', 'Architecte Cloud', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 4),
(166, 'Yassine', 'Rhallak', 'yassine.boumajane@aiesec.net', 'Architecte Cloud', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 4),
(167, 'Yassine', 'Rhallak', 'yassine.boumajane@aiesec.net', 'Architecte Cloud', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 4),
(168, 'Yassine', 'Rhallak', 'yassine.boumajane@aiesec.net', 'Architecte Cloud', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 4),
(169, 'Yassine', 'Rhallak', 'yassine.boumajane@aiesec.net', 'Architecte Cloud', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 4),
(170, 'Yassine', 'Rhallak', 'yassine.boumajane@aiesec.net', 'Architecte Cloud', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 4),
(171, 'Nimrod', 'Ryuu', 'noemail@test.com', 'cybersecurite', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 5),
(172, 'Nimrod', 'Ryuu', 'noemail@test.com', 'cybersecurite', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 5),
(173, 'Nimrod', 'Ryuu', 'noemail@test.com', 'cybersecurite', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 5),
(174, 'Nimrod', 'Ryuu', 'noemail@test.com', 'cybersecurite', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 5),
(175, 'Nimrod', 'Ryuu', 'noemail@test.com', 'cybersecurite', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 5),
(176, 'Nimrod', 'Ryuu', 'noemail@test.com', 'cybersecurite', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 5),
(177, 'Nimrod', 'Ryuu', 'noemail@test.com', 'cybersecurite', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 5),
(178, 'Nimrod', 'Ryuu', 'noemail@test.com', 'cybersecurite', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 5),
(179, 'Nimrod', 'Ryuu', 'noemail@test.com', 'cybersecurite', 'Yassine_Boumajane_Ingenieur_Cloud_Azure (1).pdf', 5),
(181, 'Nimrod', 'Ryuu', 'yassine.boumajane@aiesec.net', 'Webmaster', 'Yassine_Boumajane_Ingenieur_Cloud_Azure.pdf', 9);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
