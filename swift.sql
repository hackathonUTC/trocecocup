-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Dim 29 Novembre 2015 à 09:32
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `swift`
--

-- --------------------------------------------------------

--
-- Structure de la table `cup`
--

CREATE TABLE `cup` (
  `cup` int(11) NOT NULL,
  `asso` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `semestre` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `nbtirage` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `cup`
--

INSERT INTO `cup` (`cup`, `asso`, `nom`, `semestre`, `photo`, `info`, `nbtirage`) VALUES
(1, 'IF', 'Tremplin Rock', 'P14', 'tremplin_rock.png', 'Ecocup du premier tremplin de l''Imaginarium Festival', 400),
(2, 'TUC', 'TUC 2013', 'A13', 'tuc_2013.png', 'L''EcoCup du TUC 2013', 600),
(3, 'Integ 2013', 'Integ 2013', 'A13', 'integ_2013.png', 'L''EcoCup de l''Integ 2013', 30),
(4, 'skiutc', 'SKIUTC_2012', 'A12', 'skiutc_2012.png', 'L''EcoCup du skiutc 2012', 100),
(5, 'WEI 2010', 'wei_2010', 'A10', 'wei_2010.png', 'L''EcoCup du WEI 2010', 400),
(6, 'PMDE 2013', 'pmde_2013', 'P13', 'pmde_2013.png', 'L''EcoCup de la PMDE 2013', 500),
(7, 'Festupic 2012', 'festupic_2012', 'A12', 'festupic_2012.png', 'L''EcoCup du Festupic 2012', 250);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `cup`
--
ALTER TABLE `cup`
  ADD PRIMARY KEY (`cup`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `cup`
--
ALTER TABLE `cup`
  MODIFY `cup` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;