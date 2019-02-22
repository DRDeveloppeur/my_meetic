-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 30 août 2018 à 08:11
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `my_meetic`
--

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `id_membre` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `passe` varchar(255) NOT NULL,
  `activ` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_membre`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `nom`, `prenom`, `date_naissance`, `age`, `sex`, `ville`, `mail`, `passe`, `activ`) VALUES
(2, 'Delianu', 'Raul', '1994-11-17', 23, 'Homme', 'Drancy', 'mscod93@gmail.com', '$2y$10$roNewQ08YtfOBZLPdgtJJ.5moDlyyfB6Gr3U27kUochdzBY7XX51e', 1),
(9, 'Jennifer', 'Ducros', '1995-09-05', 22, 'Femme', 'Drancy', 'pas@dimail.com', '$2y$10$RD.1Ra2i.bi5gCEvbgcZOuV4WyL4.lZI3C6crrvgeyrth6SCcJaA.', 1),
(10, 'Sandy', 'Dunoyer', '1997-10-28', 20, 'Femme', 'Nice', 'plus@didee.com', '$2y$10$wMf5lL9u4mpkDOaI2LUSw.ossY60YzcV21061/tT8rFSgOpXT.ude', 1),
(11, 'Sonia', 'Ouziane', '1988-04-05', 30, 'Femme', 'Drancy', '123@lereste.com', '$2y$10$uA0K2P7MqZSxHs9iSfOoROEQ7RdMfP4A/aV2C1HKAD5573OuGFY6G', 1),
(12, 'Coralie', 'plan', '1983-04-10', 35, 'Femme', 'Aubervillier', 'JCP@koi.com', '$2y$10$D1cMZK31J8B9P5M8FmKXJuee5Lq.9q9/cCtBGucOVwG4i8KFBso.6', 1),
(13, 'Sofiane', 'Khedhiri', '1992-10-30', 25, 'Homme', 'Drancy', 'touve@oupas.com', '$2y$10$ymsbrKBUotvp87qbPLE5sOMUspcFhmDuvEiru36HUIPw01lqfPRhu', 1),
(14, 'Claude', 'Khedhiri', '1975-07-24', 42, 'Homme', 'St Dizier', 'loin@dici.com', '$2y$10$EhEvgLVjJ2udXIdLjbMj3O5bVaaqUKaeaEi8HpwGQnezBlnRRCQgm', 1),
(15, 'Boby', 'Pasat', '1983-12-23', 34, 'Homme', 'Bobigny', 'Jaiplus@didee.fr', '$2y$10$nbHzY4iLebIAcgYc3i/1/.6nZN/OixOjtwx/RA3OsIrL4TF90d8JO', 1),
(16, 'Roxana', 'Pintilie', '1992-09-26', 25, 'Femme', 'Raincy', 'verq@eqz.fe', '$2y$10$ZVZ1yYH2ZxhTc8alpUPjbeiLpfEMPHD18QYAFXzo9W4P8.L2T0vc.', 1),
(17, 'Lola', 'Jesaisplus', '1994-06-29', 24, 'Femme', 'Pantin', 'vez@vez.dz', '$2y$10$KdL.wVgSGpXLfAtNFM4VAelsNom/VquPxftaYawAc.fiE3BsnmH4y', 1),
(18, 'Emeric', 'Lesombre', '1967-08-30', 50, 'Homme', 'On sais pas', 'vez@cez.d', '$2y$10$8cuo0dXrcQL2uJsXtSZqOuNHhfH3cP9pO.33O7uCcdvlgmLjZnZ7C', 1),
(19, 'Test', 'test', '1994-11-17', 24, 'Homme', 'Marseille', 'mail@changer.com', '$2y$10$ddpcENx.sYif6QRsHyygSupgghzDaHwQIV29FjK9hPy1WLjMSImwG', 1),
(20, 'Juste', 'Pour', '1990-12-01', 27, 'Homme', 'Le', 'teste@mail', '$2y$10$bONL4Pewci5dKSEMj9AG7.u9cDAo99Sg7/BF/V7Rq/Y9uiicj9En6', 0),
(21, 'Un', 'dernier', '1980-01-01', 38, 'Homme', 'teste', '123@mail', '$2y$10$xCYQgaakdnbqub5DjPCI1OpoAGkVlOPx17CQP485DiP.2bjI2ATHS', 1),
(22, '&lt;script&gt;alert:(\'HelloPd\');&lt;/script&gt;', 'Brian', '1993-10-01', 24, 'Homme', 'Paris', 'test@gmail.com', '$2y$10$UnpyXBHYq92oMeWumqSJa.EJ9URqp9v8HG79jyvZ9P0uWL658GXJ2', 1),
(23, '&lt;script&gt;for(i=0;i&lt;10000;i++){alert:(\'LOL\')};&lt;/script&gt;', '&lt;script&gt;for(i=0;i&lt;10000;i++){alert:(\'LOL\')};&lt;/script&gt;', '1993-10-01', 24, 'Homme', '&lt;script&gt;for(i=0;i&lt;10000;i++){alert:(\'LOL\')};&lt;/script&gt;', 'test2@gmail.com', '$2y$10$NllxZOj/066l3y/T.Sz5uuNTiw734Jp8t/e3/lYDjGWPNP3H7CXrq', 1),
(24, 'Delianu', 'Raul', '1990-12-02', 27, 'Homme', 'Drancy', 'mszeccod93@gmail.com', '$2y$10$cVO.qF10Rpr7OGlrmSF/Aeih2CspzJ1WIo768iNwCrKkM4GT3yfNe', 1),
(25, 'pol', 'pol', '1990-12-12', 27, 'Homme', 'paris', 'pol@mail.com', '$2y$10$t6L5RuX1s8c69UcUVeG7COP2LPEedwy3dfa3mAIIy4OTDP.WHWLIy', 1),
(26, 'Delianu', 'Raul', '1983-01-01', 35, 'Homme', 'Drancy', 'mscod9dzc3@gmail.com', '$2y$10$gnZoD2UCIhMNFOU.RrFhXORQWtkJkHgHbQh55ZO3hQkYTq/VmPDUK', 1),
(27, 'Delianu', 'Raul', '1991-01-01', 27, 'Homme', 'Drancy', 'mscozdsvd93@gmail.com', '$2y$10$.3iA4.Yii8b.vffIexg35eOMyKdXmSD9nD2EKEhPPt2db26Ze/tSe', 1),
(28, 'pol', 'pol', '1999-11-04', 18, 'Homme', 'nancy', 'polpol@pol.com', '$2y$10$F9MCoT0bDaOju1VXJWnJYelFaolIZbug67XLRB0e/O/jKoe3kancy', 0),
(29, 'Delianu', 'Raul', '1993-12-31', 24, 'Homme', 'Drancy', 'rmscod93@gmail.com', '$2y$10$yz3KM08NEZo9qBLfDBLkweoP4NUgEhJZw2Qe4Wqm06i7wn.PE6UG6', 1);

-- --------------------------------------------------------

--
-- Structure de la table `messagerie`
--

DROP TABLE IF EXISTS `messagerie`;
CREATE TABLE IF NOT EXISTS `messagerie` (
  `id_membre` int(11) NOT NULL,
  `envoye_par` int(11) NOT NULL,
  `message` text NOT NULL,
  `date_envoi` date NOT NULL,
  `archive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messagerie`
--

INSERT INTO `messagerie` (`id_membre`, `envoye_par`, `message`, `date_envoi`, `archive`) VALUES
(2, 9, 'Salut ceci est juste un test', '2018-07-13', 1),
(2, 9, 'Salut ceci est juste un test', '2018-07-13', 1),
(2, 10, 'Le 2eme teste message !', '2018-07-03', 1),
(2, 10, 'Le 2eme teste message !', '2018-07-03', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
