--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artId` int(11) DEFAULT NULL,
  `artTitle` varchar(80) CHARACTER SET utf8 NOT NULL,
  `artContent` text CHARACTER SET utf8 NOT NULL,
  `artPngId` int(11) DEFAULT NULL,
  `artDate` date DEFAULT NULL,
  `artPageId` int(11) DEFAULT NULL,
  `artImgUrl` varchar(70) CHARACTER SET utf8 DEFAULT NULL,
  `artSource` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `artLien` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `tagName` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `artId` (`artId`),
  KEY `art-png-id` (`artPngId`),
  KEY `art-page-id` (`artPageId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=134 ;

--
-- Structure de la table `compteur`
--

CREATE TABLE IF NOT EXISTS `compteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nbVisites` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Structure de la table `groupes`
--

CREATE TABLE IF NOT EXISTS `groupes` (
  `idGroup` int(11) NOT NULL AUTO_INCREMENT,
  `nomGroupe` varchar(30) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`idGroup`),
  KEY `idGroup` (`idGroup`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;



--
-- Structure de la table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `idMenu` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `position` bit(1) NOT NULL,
  PRIMARY KEY (`idMenu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=9 ;

--
-- Structure de la table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `pageId` int(11) NOT NULL,
  `pageUrl` varchar(50) NOT NULL,
  PRIMARY KEY (`pageId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=113 ;

--
-- Structure de la table `png`
--

CREATE TABLE IF NOT EXISTS `png` (
  `pngId` int(11) NOT NULL,
  `pngUrl` varchar(200) COLLATE utf8_bin NOT NULL,
  `pngCategory` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`pngId`),
  KEY `png-url` (`pngUrl`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



--
-- Structure de la table `sousMenu`
--

CREATE TABLE IF NOT EXISTS `sousMenu` (
  `idSousMenu` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `idMenu` int(11) NOT NULL,
  PRIMARY KEY (`idSousMenu`),
  KEY `idMenu` (`idMenu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Structure de la table `user_page`
--

CREATE TABLE IF NOT EXISTS `user_page` (
  `idPage` int(11) NOT NULL,
  `nbClic` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `idVisite` int(11) NOT NULL,
  PRIMARY KEY (`idPage`,`idVisite`),
  KEY `idVisite` (`idVisite`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `idGroup` int(11) NOT NULL,
  PRIMARY KEY (`idUser`),
  UNIQUE KEY `login` (`login`),
  KEY `idGroup` (`idGroup`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Structure de la table `visites`
--

CREATE TABLE IF NOT EXISTS `visites` (
  `idVisite` int(11) NOT NULL AUTO_INCREMENT,
  `adresseIp` varchar(25) CHARACTER SET utf8 NOT NULL,
  `dateConnexion` datetime NOT NULL,
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`idVisite`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=35 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`artPageId`) REFERENCES `page` (`pageId`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `article_png` FOREIGN KEY (`artPngId`) REFERENCES `png` (`pngId`) ON DELETE SET NULL ON UPDATE CASCADE;


--
-- Contraintes pour la table `sousMenu`
--
ALTER TABLE `sousMenu`
  ADD CONSTRAINT `sousMenu_ibfk_1` FOREIGN KEY (`idMenu`) REFERENCES `menu` (`idMenu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `user_page`
--
ALTER TABLE `user_page`
  ADD CONSTRAINT `user_page_ibfk_1` FOREIGN KEY (`idVisite`) REFERENCES `visites` (`idVisite`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `user_page_ibfk_2` FOREIGN KEY (`idPage`) REFERENCES `page` (`pageId`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`idGroup`) REFERENCES `groupes` (`idGroup`) ON DELETE NO ACTION ON UPDATE CASCADE;

INSERT INTO `groupes` (`idGroup`, `nomGroupe`) VALUES
(1, 'administrateur'),
(2, 'visiteur'),
(3, 'client');

INSERT INTO `utilisateur` (`idUser`, `login`, `password`, `idGroup`) VALUES
(1, 'yoshi', '/9TFMXP/znbk1FbvArLhLnmTtesU77x9/IZz/8mf/C8=', 1);


