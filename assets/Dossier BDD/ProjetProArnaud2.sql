-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 16 fév. 2022 à 14:16
-- Version du serveur :  5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ProjetProArnaud2`
--

-- --------------------------------------------------------

--
-- Structure de la table `besoin`
--

CREATE TABLE `besoin` (
  `ser_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `mp_benefits`
--

CREATE TABLE `mp_benefits` (
  `ben_id` int(11) NOT NULL,
  `ben_names` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mp_benefits`
--

INSERT INTO `mp_benefits` (`ben_id`, `ben_names`) VALUES
(1, 'Être à l’écoute de son corps'),
(2, 'Retrouver la confiance en soi'),
(3, 'Apaise les tensions nerveuses'),
(4, 'Meilleure équilibre psychique'),
(5, 'Active les sens'),
(6, 'Éveille le sens du toucher et aiguise les perceptions'),
(7, 'Favorise la circulation de l’énergie'),
(8, 'Permet une meilleure gestion du stress'),
(9, 'Contribue à l’ouverture d’esprit'),
(10, 'Aide à la prise de conscience'),
(11, 'Active et stimule la circulation sanguine et lymphatique'),
(12, 'Étire le muscle pour une meilleure irrigation'),
(13, 'Équilibre nerveux et psychique'),
(14, 'Meilleure qualité de sommeil'),
(15, 'Diminue les œdèmes et les tensions musculaires'),
(16, 'Libère les freins, les blocages, permettant ainsi un meilleur équilibre énergétique'),
(17, 'Améliore le système immunitaire'),
(18, 'Soulage les douleurs physiques'),
(19, 'Contribue à diminuer les toxines'),
(20, 'Renforce le travail digestif et urinaire'),
(21, 'Permet une détente profonde libérant les états de stress'),
(22, 'Équilibre les fonctions physiologiques'),
(23, 'Équilibre les fonctions physiologiques'),
(24, 'Diminue les douleurs proximales et distales'),
(25, 'Aide à réduire l’inflammation ostéo-articulaire'),
(26, 'Détente des muscles du visage'),
(27, 'Active la microcirculation'),
(28, 'Favorise l’hydratation et améliore le teint'),
(29, 'Libère les sinus'),
(30, 'Diminue les acouphènes'),
(31, 'Permet une relaxation profonde'),
(32, 'Allié contre les rides'),
(33, 'Diminution des douleurs en général'),
(34, 'Réduction du stress et de l’anxiété'),
(35, 'Stimulation de la libido'),
(36, 'Améliore la sphère ORL'),
(37, 'Libère la pression sinusale et du tympan'),
(38, 'Détend les maxillaires supérieurs et inferieurs'),
(39, 'Draine le canal lacrymal'),
(40, 'Soulage. Les tensions, les maux de tête, les migraines'),
(41, 'Stimule la digestion'),
(42, 'Favorise l’élimination des Toxines'),
(43, 'Régénère les muscles abdominaux'),
(44, 'Amélioration l’élimination des selles'),
(45, 'Apaise les tensions Massage ventre'),
(46, 'Rentrer en communication avec soi-même par soi-même'),
(47, 'Très efficace dans le contrôle de la douleur'),
(48, 'Fonctionne très bien pour la gestion de l’angoisse, du stress, de l’anxiété et de lapeur'),
(49, 'Très efficace dans la gestion des dépendances (addiction aux drogues)'),
(50, 'Conduit à une guérison efficace et durable');

-- --------------------------------------------------------

--
-- Structure de la table `mp_category`
--

CREATE TABLE `mp_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mp_category`
--

INSERT INTO `mp_category` (`cat_id`, `cat_name`) VALUES
(1, 'Réflexologies'),
(2, 'Massages'),
(3, 'Hypnose Ericksonienne'),
(4, 'Auriculothérapie'),
(5, 'Bougie Hopi');

-- --------------------------------------------------------

--
-- Structure de la table `mp_contraindication`
--

CREATE TABLE `mp_contraindication` (
  `cont_id` int(11) NOT NULL,
  `cont_name` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mp_contraindication`
--

INSERT INTO `mp_contraindication` (`cont_id`, `cont_name`) VALUES
(1, 'Problèmes cardiaques'),
(2, 'Asthme'),
(3, 'Femme enceinte'),
(4, 'Personnes atteintes de cancers'),
(5, 'Inflammation, traumatisme récent du/des membre(s) inferieur(s)'),
(6, 'Phlébites, thromboses ou autres risques circulatoires majeurs'),
(7, 'Problème cardiaque récent'),
(8, 'Premier trimestre de grossesse '),
(9, 'Chirurgie récente de l\'oreille'),
(10, 'Perforation du tympan'),
(11, 'Allergie à la cire d’abeille ou aux produits de la ruche en général'),
(12, 'Inflammations de la vessie, de l’utéruce, de la vésicule biliaire'),
(13, 'Ulcère de l’estomac ou des intestins'),
(14, 'Troubles psychotique grave : Schizophrénie, paranoïa, maniaco-depression'),
(15, 'Aucune');

-- --------------------------------------------------------

--
-- Structure de la table `mp_services`
--

CREATE TABLE `mp_services` (
  `ser_id` int(11) NOT NULL,
  `ser_name` varchar(100) NOT NULL,
  `ser_intro` longtext NOT NULL,
  `ser_description` longtext NOT NULL,
  `ser_price` decimal(15,3) NOT NULL,
  `ser_time` varchar(100) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mp_services`
--

INSERT INTO `mp_services` (`ser_id`, `ser_name`, `ser_intro`, `ser_description`, `ser_price`, `ser_time`, `cat_id`) VALUES
(1, 'Massage bien être 1', 'Le Massage Bien-Être a pour vocation de détendre et de relaxer, pas de soigner. Il implique différentes techniques corporelles prodiguées sur tous les tissus du corps, afin d’apporter une détente totale.', 'Les massages correspondent à un large éventail de techniques de manipulation des muscles, ligaments, tendons et tissus mous. Leur but est de libérer les tensions et les spasmes musculaires et d’activer la circulation sanguine, lymphatique, ainsi que d’autres sécrétions. L’objectif est aussi de stimuler ou de détendre le système nerveux et de l’aider à détoxiquer le corps pour diminuer le stress. Les gestes de base sont l’effleurage, le pétrissage, la pression glissée, la torsion, l’étirement et la friction. Aujourd’hui, la Massothérapie est l’une des formes les plus pratiquées de thérapie complémentaire et alternative. Certains massages sont voués à améliorer la posture, le mouvement et la conscience corporelle. D’autres contribuent simplement à augmenter la détente, améliorer l’humeur et favoriser un état de méditation. D’autres encore sont conçus pour soulager des pathologies musculaires (élongations, etc.) et réduire l’œdème.', '25.000', '20', 2),
(2, 'Massage bien être 2', 'Le Massage Bien-Être a pour vocation de détendre et de relaxer, pas de soigner. Il implique différentes techniques corporelles prodiguées sur tous les tissus du corps, afin d’apporter une détente totale.', 'Les massages correspondent à un large éventail de techniques de manipulation des muscles, ligaments, tendons et tissus mous. Leur but est de libérer les tensions et les spasmes musculaires et d’activer la circulation sanguine, lymphatique, ainsi que d’autres sécrétions. L’objectif est aussi de stimuler ou de détendre le système nerveux et de l’aider à détoxiquer le corps pour diminuer le stress. Les gestes de base sont l’effleurage, le pétrissage, la pression glissée, la torsion, l’étirement et la friction. Aujourd’hui, la Massothérapie est l’une des formes les plus pratiquées de thérapie complémentaire et alternative. Certains massages sont voués à améliorer la posture, le mouvement et la conscience corporelle. D’autres contribuent simplement à augmenter la détente, améliorer l’humeur et favoriser un état de méditation. D’autres encore sont conçus pour soulager des pathologies musculaires (élongations, etc.) et réduire l’œdème.', '35.000', '30', 2),
(3, 'Massage bien être 3', 'Le Massage Bien-Être a pour vocation de détendre et de relaxer, pas de soigner. Il implique différentes techniques corporelles prodiguées sur tous les tissus du corps, afin d’apporter une détente totale.', 'Les massages correspondent à un large éventail de techniques de manipulation des muscles, ligaments, tendons et tissus mous. Leur but est de libérer les tensions et les spasmes musculaires et d’activer la circulation sanguine, lymphatique, ainsi que d’autres sécrétions. L’objectif est aussi de stimuler ou de détendre le système nerveux et de l’aider à détoxiquer le corps pour diminuer le stress. Les gestes de base sont l’effleurage, le pétrissage, la pression glissée, la torsion, l’étirement et la friction. Aujourd’hui, la Massothérapie est l’une des formes les plus pratiquées de thérapie complémentaire et alternative. Certains massages sont voués à améliorer la posture, le mouvement et la conscience corporelle. D’autres contribuent simplement à augmenter la détente, améliorer l’humeur et favoriser un état de méditation. D’autres encore sont conçus pour soulager des pathologies musculaires (élongations, etc.) et réduire l’œdème.', '45.000', '45', 2),
(4, 'Massage bien être 3', 'Le Massage Bien-Être a pour vocation de détendre et de relaxer, pas de soigner. Il implique différentes techniques corporelles prodiguées sur tous les tissus du corps, afin d’apporter une détente totale.', 'Les massages correspondent à un large éventail de techniques de manipulation des muscles, ligaments, tendons et tissus mous. Leur but est de libérer les tensions et les spasmes musculaires et d’activer la circulation sanguine, lymphatique, ainsi que d’autres sécrétions. L’objectif est aussi de stimuler ou de détendre le système nerveux et de l’aider à détoxiquer le corps pour diminuer le stress. Les gestes de base sont l’effleurage, le pétrissage, la pression glissée, la torsion, l’étirement et la friction. Aujourd’hui, la Massothérapie est l’une des formes les plus pratiquées de thérapie complémentaire et alternative. Certains massages sont voués à améliorer la posture, le mouvement et la conscience corporelle. D’autres contribuent simplement à augmenter la détente, améliorer l’humeur et favoriser un état de méditation. D’autres encore sont conçus pour soulager des pathologies musculaires (élongations, etc.) et réduire l’œdème.', '55.000', '60', 2),
(5, 'Réflexologie Plantaire', 'La réflexologie plantaire est une technique de massage, née il y a cinq mille ans en Chine, qui s’est répandue en France à la fin des années 70. Relaxante, la réflexologie plantaire peut aussi soigner le corps.', 'La Réflexologie est une discipline de médecine douce d’origine Asiatique, holistique et énergétique. Elle repose sur le principe selon lequel chaque organe, glande, fonction physiologique correspondent à une zone ou point précis du corps. Un travail sur ces points permet de localiser les tensions et les déséquilibres visant à rétablir la bonne circulation de l’énergie vitale, facteur de l’auto-guérison. La Réflexologie, comme son nom l’indique, est une technique utilisant la voie REFLEXE au même titre que le Shiatsu ou l’Acupuncture. Plusieurs parties du corps sont utilisées en Réflexologie. La plus connue, en dehors de l’Acupuncture, est la Réflexologie Plantaire (pieds).', '40.000', '45', 1),
(6, ' Réflexologie Palmaire', 'La réflexologie palmaire est une technique de massage, née il y a cinq mille ans en Chine, qui s’est répandue en France à la fin des années 70. Relaxante, la réflexologie palmaire peut aussi soigner le corps.', 'Tout comme les pieds, les mains sont en correspondance énergétique avec le reste du corps par le biais de 3000 terminaisons nerveuses en relation reflexe avec tout l’organisme. La Réflexologie Palmaire est plus facile à pratiquer car les mains sont plus accessibles que les pieds. De plus, on peut masser les mains en toutes circonstances. Bien que les mains offrent moins d’organes par la voie reflexe que les pieds, elles permettent un résultat quasi immédiat. Cela s’explique par le fait que la Réflexologie Plantaire, quant à elle, est plus axée sur le système neurovégétatif et donc l’inconscient.', '30.000', '30', 1),
(7, 'Réflexologie crânienne et faciale', 'La réflexologie crânienne et faciale est une technique de massage, née il y a cinq mille ans en Chine, qui s’est répandue en France à la fin des années 70. Relaxante, la réflexologie crânienne et faciale peut aussi soigner le corps.', 'Comme la Réflexologie Plantaire et Palmaire, la tête et le visage contiennent des zones réflexes en correspondances avec les organes et autres parties du corps qui peuvent être stimulées par leur biais. Il n’existerait pas moins de 300 points réflexes où se concentrent les terminaisons nerveuses. Cependant, cette Réflexologie est la plus utilisée pour son action relaxante par la libération émotionnelle et la sensation de bien-être général.', '30.000', '30', 1),
(8, 'Auriculothérapie', 'En stimulant des points au niveau des pavillons de l’oreille, l’auriculothérapie permet de soulager migraines, addictions, états anxieux et douleur', 'L’Auriculothérapie fait partie des techniques de Réflexologie, issue de l’Acupuncture et de l’Acupressure. Comment ça marche ? Le pavillon auriculaire est richement innervé par le système cérébro-spinal et le système nerveux végétatif (SNV), lesquels sont reliés au cerveau qui lui, gère les organes du corps. Cette organisation physiologique explique la réaction, même à distance, d’un point auriculaire sur une fonction physiologique ou organique. C’est ainsi que la notion de zone réflexe de l’oreille s’exprime, par une correspondance entre les oreilles et le reste du corps, ou encore, entre les différents appareils organiques et des points précis des oreilles. En pratique L’Auriculothérapie, comme les autres zones réflexes, les pieds, les mains, a sa propre cartographie.', '40.000', '40', 4),
(9, 'Bougie de Hopi', 'Bougies auriculaires : Pour une hygiène de l’oreille 100% naturelle. Découvrez la relaxation profonde et fascinante proposé par les bougies Hopi ! Ce procédé d’hygiène naturel et artisanal est à la fois un allié idéal pour l’hygiène de vos oreilles, et une source de bien être et de relaxation.', 'Ce procédé est largement utilisé en Naturopathie et dans la pratique des disciplines de médecines douces en général. Il nous vient de la tribu d’Indiens, « les Hopi », vivant en Amérique du Nord, en Arizona précisément. D’origine ancestrale, cette méthode stimule la régénération. Concrètement, la bougie Hopi est une fine bande de gaze en coton (tissu très fin), recouverte de cire d’abeille et formant un tube. Une fois en place à l’embouchure du conduit auditif, allumée, la cire va se consumer tout doucement. Dès lors, une chaleur douce et agréable ainsi qu’un léger crépitement, procurent une sensation de calme, une invitation à la détente. Lors de cette combustion, il va y avoir une phase de dépression due à l’effet de cheminée. Cette phase va permettre « d’aspirer » ainsi les impuretés dans la bougie, que l’on observera dans les 2,5 cm à 3 cm de celle-ci qui ne seront pas consumés en fin de séance.', '20.000', '20', 5),
(10, 'Massage bien-être drainant du ventre', 'le massage bien-être drainant du ventre est connu pour ses vertus apaisantes et stimulantes de l’état général.', 'le massage bien-être drainant du ventre est connu pour ses vertus apaisantes et stimulantes de l’état général. Le ventre est considéré comme « le second cerveau ». Son massage va favoriser la digestion en améliorant le système digestif général permettant ainsi de stimuler l’élimination des toxines. Il est important de protéger cet appareil et d’évacuer les tensions et le stress accumulés au niveau du plexus solaire.', '30.000', '30', 2),
(11, 'Hypnose Ericksoniene', 'L’hypnose thérapeutique est l’utilisation des techniques hypnotiques dans un cadre thérapeutique étant essentiellement appliquée dans la notion d’aide.', 'L’Hypnose est un E.M.C. (État Modifié de Conscience), différent de notre E.O.C. (État Ordinaire de Conscience, dans lequel nous sommes le plus souvent au quotidien). L’état hypnotique n’a aucune similitude avec le sommeil, malgré toutes les recherches effectuées… Il se rapprocherait plutôt des rêves. C’est un état naturel que chacun de nous expérimente plusieurs fois par jour, et par exemple lorsque nous sommes « dans la lune », ou absorbé dans un roman ou dans un film, ou même lorsque nous conduisons (longue conduite sur l’autoroute…) ; dans ces instants-là, nous vivons une transe légère. C’est un état d’être normal et propre à l’être Humain, que l’Hypnose reconnaît, provoque, amplifie, et utilise pour la personne. Chacun de nous a cette faculté naturelle en lui, tout le monde peut donc être hypnotisé, s’auto-hypnotiser, et profiter de tous les bienfaits de l’Hypnose !', '40.000', '45', 3);

-- --------------------------------------------------------

--
-- Structure de la table `mp_servicesBEN`
--

CREATE TABLE `mp_servicesBEN` (
  `ben_id` int(11) NOT NULL,
  `ser_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mp_servicesBEN`
--

INSERT INTO `mp_servicesBEN` (`ben_id`, `ser_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(1, 3),
(2, 3),
(3, 3),
(4, 3),
(5, 3),
(6, 3),
(7, 3),
(8, 3),
(9, 3),
(10, 3),
(11, 3),
(12, 3),
(13, 3),
(14, 3),
(1, 4),
(2, 4),
(3, 4),
(4, 4),
(5, 4),
(6, 4),
(7, 4),
(8, 4),
(9, 4),
(10, 4),
(11, 4),
(12, 4),
(13, 4),
(14, 4),
(11, 5),
(14, 5),
(15, 5),
(16, 5),
(17, 5),
(18, 5),
(19, 5),
(20, 5),
(21, 5),
(11, 6),
(17, 6),
(22, 6),
(23, 6),
(24, 6),
(25, 6),
(14, 7),
(26, 7),
(27, 7),
(28, 7),
(29, 7),
(30, 7),
(31, 7),
(32, 7),
(14, 8),
(33, 8),
(34, 8),
(35, 8),
(11, 9),
(21, 9),
(30, 9),
(36, 9),
(37, 9),
(38, 9),
(39, 9),
(40, 9),
(41, 10),
(42, 10),
(43, 10),
(44, 10),
(45, 10),
(46, 11),
(47, 11),
(48, 11),
(49, 11),
(50, 11);

-- --------------------------------------------------------

--
-- Structure de la table `mp_servicesCi`
--

CREATE TABLE `mp_servicesCi` (
  `ser_id` int(11) NOT NULL,
  `cont_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mp_servicesCi`
--

INSERT INTO `mp_servicesCi` (`ser_id`, `cont_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(1, 3),
(2, 3),
(3, 3),
(4, 3),
(8, 3),
(10, 3),
(1, 4),
(2, 4),
(3, 4),
(4, 4),
(5, 5),
(6, 5),
(5, 6),
(6, 6),
(5, 7),
(6, 7),
(5, 8),
(6, 8),
(9, 9),
(9, 10),
(9, 11),
(10, 12),
(10, 13),
(11, 14),
(7, 15);

-- --------------------------------------------------------

--
-- Structure de la table `mp_users`
--

CREATE TABLE `mp_users` (
  `user_id` int(11) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mp_users`
--

INSERT INTO `mp_users` (`user_id`, `lastName`, `firstName`, `phone`, `mail`) VALUES
(1, 'PESQUET', 'Arnaud', '0618821818', 'pesquet.arnaud@free.fr');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `besoin`
--
ALTER TABLE `besoin`
  ADD PRIMARY KEY (`ser_id`,`user_id`),
  ADD KEY `besoin_mp_users0_FK` (`user_id`);

--
-- Index pour la table `mp_benefits`
--
ALTER TABLE `mp_benefits`
  ADD PRIMARY KEY (`ben_id`);

--
-- Index pour la table `mp_category`
--
ALTER TABLE `mp_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Index pour la table `mp_contraindication`
--
ALTER TABLE `mp_contraindication`
  ADD PRIMARY KEY (`cont_id`);

--
-- Index pour la table `mp_services`
--
ALTER TABLE `mp_services`
  ADD PRIMARY KEY (`ser_id`),
  ADD KEY `mp_services_mp_category_FK` (`cat_id`);

--
-- Index pour la table `mp_servicesBEN`
--
ALTER TABLE `mp_servicesBEN`
  ADD PRIMARY KEY (`ben_id`,`ser_id`),
  ADD KEY `mp_servicesBEN_mp_services0_FK` (`ser_id`);

--
-- Index pour la table `mp_servicesCi`
--
ALTER TABLE `mp_servicesCi`
  ADD PRIMARY KEY (`ser_id`,`cont_id`),
  ADD KEY `mp_servicesCi_mp_contraindication0_FK` (`cont_id`);

--
-- Index pour la table `mp_users`
--
ALTER TABLE `mp_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `mp_benefits`
--
ALTER TABLE `mp_benefits`
  MODIFY `ben_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `mp_category`
--
ALTER TABLE `mp_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `mp_contraindication`
--
ALTER TABLE `mp_contraindication`
  MODIFY `cont_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `mp_services`
--
ALTER TABLE `mp_services`
  MODIFY `ser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `mp_users`
--
ALTER TABLE `mp_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `besoin`
--
ALTER TABLE `besoin`
  ADD CONSTRAINT `besoin_mp_services_FK` FOREIGN KEY (`ser_id`) REFERENCES `mp_services` (`ser_id`),
  ADD CONSTRAINT `besoin_mp_users0_FK` FOREIGN KEY (`user_id`) REFERENCES `mp_users` (`user_id`);

--
-- Contraintes pour la table `mp_services`
--
ALTER TABLE `mp_services`
  ADD CONSTRAINT `mp_services_mp_category_FK` FOREIGN KEY (`cat_id`) REFERENCES `mp_category` (`cat_id`);

--
-- Contraintes pour la table `mp_servicesBEN`
--
ALTER TABLE `mp_servicesBEN`
  ADD CONSTRAINT `mp_servicesBEN_mp_benefits_FK` FOREIGN KEY (`ben_id`) REFERENCES `mp_benefits` (`ben_id`),
  ADD CONSTRAINT `mp_servicesBEN_mp_services0_FK` FOREIGN KEY (`ser_id`) REFERENCES `mp_services` (`ser_id`);

--
-- Contraintes pour la table `mp_servicesCi`
--
ALTER TABLE `mp_servicesCi`
  ADD CONSTRAINT `mp_servicesCi_mp_contraindication0_FK` FOREIGN KEY (`cont_id`) REFERENCES `mp_contraindication` (`cont_id`),
  ADD CONSTRAINT `mp_servicesCi_mp_services_FK` FOREIGN KEY (`ser_id`) REFERENCES `mp_services` (`ser_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
