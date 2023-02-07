
--
-- Base de données : `societe`
--

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

CREATE TABLE `employes` (
  `EMPNO` int(11) NOT NULL,
  `EMPNOM` varchar(30) NOT NULL,
  `EMPPREN` varchar(30) NOT NULL,
  `EMPSEXE` varchar(1) NOT NULL,
  `EMPSALAIRE` int(11) NOT NULL,
  `EMPPRIME` int(11) NOT NULL,
  `SRVNO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`EMPNO`, `EMPNOM`, `EMPPREN`, `EMPSEXE`, `EMPSALAIRE`, `EMPPRIME`, `SRVNO`) VALUES
(1, 'LEBOSS', 'GILLES', 'M', 6860, 762, 1),
(2, 'ORGAN', 'INGRID', 'F', 5336, 847, 1),
(3, 'DUPLAFOND', 'GREGOIRE', 'M', 5336, 847, 1),
(4, 'VENDUE', 'ROSALIE', 'F', 3049, 152, 2),
(5, 'DUDESERT', 'RAISSA', 'F', 3049, 152, 2),
(6, 'LEBLOND', 'BERTRAND', 'M', 915, 76, 2),
(7, 'LABELLE', 'REINE', 'F', 2744, 152, 3),
(8, 'LEDUR', 'ALAIN', 'M', 1524, 686, 3),
(9, 'DUPONT', 'INES', 'F', 915, 152, 3),
(10, 'DUMONT', 'ADELPHE', 'M', 2287, 229, 4),
(11, 'LEROUX', 'APPOLIN', 'M', 1524, 229, 4),
(12, 'LEDUR', 'AIME', 'M', 991, 15, 4),
(13, 'LEBON', 'ROLAND', 'M', 915, 31, 4),
(14, 'LABRUTE', 'EDITH', 'M', 839, 15, 4),
(15, 'DESTIN', 'RENAUD', 'M', 2439, 152, 5),
(16, 'DUJARDIN', 'NADEGE', 'F', 610, 152, 5),
(17, 'BRILLES', 'EMILIE', 'F', 762, 30, 5),
(18, 'LEBRUN', 'DAVY', 'M', 732, 152, 5),
(19, 'LGRAND', 'MATHIEU', 'M', 762, 200, 5);

-- --------------------------------------------------------

--
-- Structure de la table `intervenir`
--

CREATE TABLE `intervenir` (
  `PROJNO` int(11) NOT NULL,
  `EMPNO` int(11) NOT NULL,
  `NBHEURES` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `intervenir`
--

INSERT INTO `intervenir` (`PROJNO`, `EMPNO`, `NBHEURES`) VALUES
(1, 9, 15),
(1, 13, 8),
(1, 14, 8),
(1, 15, 24),
(1, 17, 50);

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `PROJNO` int(11) NOT NULL,
  `PROJNOM` varchar(30) NOT NULL,
  `SRVNO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`PROJNO`, `PROJNOM`, `SRVNO`) VALUES
(1, 'CENTRE VILLE', 5),
(2, 'NOUVPISCINE', 4),
(3, 'EAUPURIFIEE', 6);

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `SRVNO` int(11) NOT NULL,
  `SRVNOM` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`SRVNO`, `SRVNOM`) VALUES
(1, 'DIRECTION'),
(2, 'COMMERCIAL'),
(3, 'COMPTABILITE'),
(4, 'TERRASSEMENT'),
(5, 'MACONNERIE'),
(6, 'ESPACES VERTS');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`EMPNO`),
  ADD KEY `SRVNO` (`SRVNO`);

--
-- Index pour la table `intervenir`
--
ALTER TABLE `intervenir`
  ADD PRIMARY KEY (`PROJNO`,`EMPNO`),
  ADD KEY `EMPNO` (`EMPNO`);

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`PROJNO`),
  ADD KEY `SRVNO` (`SRVNO`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`SRVNO`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `employes`
--
ALTER TABLE `employes`
  ADD CONSTRAINT `employes_ibfk_1` FOREIGN KEY (`SRVNO`) REFERENCES `services` (`SRVNO`);

--
-- Contraintes pour la table `intervenir`
--
ALTER TABLE `intervenir`
  ADD CONSTRAINT `intervenir_ibfk_1` FOREIGN KEY (`PROJNO`) REFERENCES `projets` (`PROJNO`),
  ADD CONSTRAINT `intervenir_ibfk_2` FOREIGN KEY (`EMPNO`) REFERENCES `employes` (`EMPNO`);

--
-- Contraintes pour la table `projets`
--
ALTER TABLE `projets`
  ADD CONSTRAINT `projets_ibfk_1` FOREIGN KEY (`SRVNO`) REFERENCES `services` (`SRVNO`);
COMMIT;

