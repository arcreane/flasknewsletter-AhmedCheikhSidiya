-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 19 juin 2021 à 21:25
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dv20cheikh`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `category_id` int(11) NOT NULL,
  `img` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `date`, `category_id`, `img`) VALUES
(1, 'Charles X', 'Charles-Philippe de France, comte d\'Artois, plus connu sous le nom de Charles X, né le 9 octobre 1757 au château de Versailles à Versailles en France et mort le 6 novembre 1836 à Goritz, alors en Autriche, est roi de France et de Navarre de 1824 à 1830. Il gouverne durant la période dite de la Restauration.', '2021-05-10 18:46:17', 1, 'chrlesx.png'),
(2, 'Louis Philippe', 'Louis-Philippe Ier, ou tout simplement Louis-Philippe, né le 6 octobre 1773 à Paris en France et mort le 26 août 1850 à Claremont au Royaume-Uni, est le dernier roi à avoir régné en France, entre 1830 à 1848, avec le titre de « roi des Français ». \r\n\r\nPremier prince du sang sous la Restauration, le prince Louis-Philippe a, au cours de sa vie, porté successivement les titres de duc de Valois (1773-1785), duc de Chartres (1785-1790) et enfin celui de duc d’Orléans (1793-1830) avant d’accéder à la couronne en 1830, son cousin Charles X ayant été renversé par les « Trois Glorieuses », des 27, 28 et 29 juillet 1830.\r\n\r\nDix-huit ans à la tête d’un royaume en profondes mutations sociales, économiques et politiques, Louis-Philippe a tenté de pacifier une Nation profondément divisée avec les armes de son époque : mise en place d’un régime parlementaire, accession de la bourgeoisie aux affaires manufacturières et financières, permettant un essor économique de première importance en France (révolution industrielle).', '2021-05-14 18:46:17', 3, 'louiphillipp2.png'),
(3, 'Louis - XVI', 'Roi de France en 1774, il s\'entoure de ministres talentueux (Malesherbes, Turgot, Necker). La guerre entreprise aux cotés des colonies américaines redonnera du prestige à la France. Mais à l\'intérieur, l\'opposition des privilèges s\'accroît, et Calonne et Loménie de Brienne ne peuvent enrayer la crise financière. Louis XVI décide alors de convoquer les états généraux en 1789. Mais les députés du Tiers forment l\'Assemblée nationale puis constituante ôtant toute influence au roi. Réduit au titre de roi des Français en 1791, le roi se déconsidère par sa fuite et son arrestation à Varennes ainsi que par des négociations avec l\'étranger. Prisonnier de la Commune insurrectionnelle (10 août 1792), il est jugé, condamné à mort puis guillotiné pour trahison.', '2021-05-16 18:46:17', 2, 'louisxvi16--.png'),
(4, 'Charles X ', 'Charles-Philippe de France, comte d\'Artois, plus connu sous le nom de Charles X, né le 9 octobre 1757 au château de Versailles à Versailles en France et mort le 6 novembre 1836 à Goritz, alors en Autriche, est roi de France et de Navarre de 1824 à 1830. Il gouverne durant la période dite de la Restauration. Septième enfant et cinquième fils du dauphin Louis et de la dauphine née Marie-Josèphe de Saxe, il est le dernier petit-fils de Louis XV et de Marie Leszczynska, succédant à ses deux frères, Louis XVI et Louis XVIII. Il est le roi de France le plus âgé, à son avènement (66 ans) comme à son décès (79 ans). Très attaché aux conceptions et aux valeurs de l\'Ancien Régime, chef de file des ultraroyalistes sous le règne de Louis XVIII, il tenta d\'incarner la continuité de l\'État et de la monarchie après la période révolutionnaire, sans pour autant céder à la réaction. À son avènement, sa priorité est de conserver la Charte constitutionnelle de 1814 octroyée par son frère dix ans plus tôt. Très pieux et adhérant aux concepts sociaux du christianisme, Charles X et son gouvernement se heurtent du reste à plusieurs blocages parlementaires après la démission du président du Conseil Villèle, en 1827. ', '2021-06-07 00:00:00', 3, 'charlesx.png'),
(5, 'Louis Philippe', 'Il est le fils de Philippe Égalité. Il prend part à la bataille de Valmy, et devient l\'aide de camp de Dumouriez. Puis il quitta la France et mena une vie précaire. Il épouse Marie-Amélie de Bourbon. Rentré sous Louis XVIII, il est nommé lieutenant du royaume puis roi des Français lors de la révolution de 1830. Après avoir choisi des ministres libéraux, il se tourne vers un régime très conservateur établi selon Casimir Perier, son chef. A la mort de ce dernier des troubles importants surgissent : insurrection républicaine, tentative légitime de la duchesse de Berry, insurrections de Barbès, Blanqui ou Louis-Napoléon Bonaparte. Il échappe à plusieurs attentats dont celui de Fieschi qui tue le maréchal Mortier. Son ministre Guizot devient pendant huit ans le vrai maître du pays. Son règne favorise la haute bourgeoisie, et il doit faire face à une crise économique et morale. Il est renversé par la révolution de février 1848 et abdique en faveur de son fils.', '2021-06-01 00:00:00', 5, 'louiphillipp.png'),
(6, 'Louis - XVI', 'Louis XVI, né le 23 août 1754 à Versailles sous le nom de Louis-Auguste de France et mort guillotiné le 21 janvier 1793 à Paris, est roi de France et de Navarre du 10 mai 1774 au 6 novembre 1789, puis roi des Français jusqu’au 21 septembre 1792. Il est le dernier roi de France de la période dite de l\'Ancien Régime.\r\n\r\nFils du dauphin Louis de France et de Marie-Josèphe de Saxe, il devient dauphin à la mort de son père. Marié en 1770 à Marie-Antoinette d\'Autriche, il monte sur le trône en 1774, à dix-neuf ans, à la mort de son grand-père Louis XV.\r\n\r\nHéritant d\'un royaume au bord de la banqueroute, il lance plusieurs réformes financières, notamment portés par les ministres Turgot, Calonne et Necker, comme le projet d\'un impôt direct égalitaire, mais qui échouent toutes face au blocage des parlements, du clergé, de la noblesse et de la cour. Il fait évoluer le droit des personnes (abolition de la torture, du servage, etc.) et remporte une grande victoire militaire face à l\'Angleterre, à travers son soutien actif aux indépendantistes américains. ', '2021-05-25 00:00:00', 6, 'louisxvi2.png');

-- --------------------------------------------------------

--
-- Structure de la table `blog_users`
--

DROP TABLE IF EXISTS `blog_users`;
CREATE TABLE IF NOT EXISTS `blog_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `bio` text,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_admin` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email uniq` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `blog_users`
--

INSERT INTO `blog_users` (`id`, `firstname`, `lastname`, `email`, `password`, `bio`, `created_at`, `is_admin`) VALUES
(4, 'Max', 'Franco', 'admin834@thebrickbox.net', '$2y$10$Yb69RNXtlIlU3E0uOrKypOvLm9uo6d1XZgK/62mMlFHaTkCchUcb.', NULL, '2021-05-18 15:43:33', 1),
(5, 'Pierre', 'Richard ', 'admin263@thebrickbox.net', '$2y$10$UIHKFW1aZBt0Nu31fvy1SuyCX5SCPCn0kl5GRKJiF6TEoCcVqMZyO', NULL, '2021-05-18 15:43:44', 0),
(6, 'Robert', 'Martin ', 'admin128@thebrickbox.net', '$2y$10$HNgzereACLO.Jyy3fQ5Bb.t8kO.xcuE5HFj5.PvpUgxUUtAXVWC0', NULL, '2021-05-18 16:09:37', 0),
(7, 'test', 'teest', 'aaa@aaa.fr', 'aaa', 'tttt', '2021-06-11 16:33:35', 0);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(256) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `img`) VALUES
(1, 'Biographies', '\r\nLes positions des derniers rois de France', ''),
(3, 'Chronologies', 'Chronologie des Rois de France', '');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_connect` (`category_id`),
  KEY `user_connect` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `category_connect` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `user_connect` FOREIGN KEY (`user_id`) REFERENCES `blog_users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
