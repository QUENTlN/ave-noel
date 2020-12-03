-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 03 déc. 2020 à 21:46
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `avenoel`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `password` varchar(70) NOT NULL,
  `isadmin` tinyint(1) DEFAULT NULL,
  `iswriter` tinyint(1) NOT NULL,
  `avatar_path` varchar(30) DEFAULT NULL,
  `last_connection_at` datetime DEFAULT NULL,
  `is_following_newsletter` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `username`, `mail`, `lastname`, `firstname`, `password`, `isadmin`, `iswriter`, `avatar_path`, `last_connection_at`, `is_following_newsletter`) VALUES
(1, 'Quentin', 'quentin095.vaillant@gmail.com', 'Vaillant', 'Quentin', '$2y$10$eVDGTXG.SOTHqP/ujZPDa../sUuwGWDT5uSgpSaedDV/O2GSzBKuu', 1, 0, 'default-avatar.png', '2020-12-03 21:44:49', 1),
(2, 'Thibaut', 'thibaut.coquelet@gmail.com', 'Coquelet', 'Thibaut', '$2y$10$eVDGTXG.SOTHqP/ujZPDa../sUuwGWDT5uSgpSaedDV/O2GSzBKuu', 0, 0, 'default-avatar.png', '2020-10-08 15:27:56', 0),
(3, 'Test', 'Test@test.fr', 'Test', 'Test', '$2y$10$eVDGTXG.SOTHqP/ujZPDa../sUuwGWDT5uSgpSaedDV/O2GSzBKuu', 0, 0, 'default-avatar.png', '2020-10-29 11:12:09', 1);

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_client` (`id_client`),
  KEY `id_post` (`id_post`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `id_client`, `id_post`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Je test l\'envoie d\'un commentaire dans la base de donnÃ©es.', '2020-10-19 13:20:21', '2020-10-25 20:10:12', NULL),
(2, 1, 1, 'Un deuxieme commentaire.', '2020-10-25 20:09:26', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `content` text NOT NULL,
  `title` varchar(150) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_client` (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id`, `id_client`, `content`, `title`, `subject`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Vivamus cursus egestas purus in molestie. Morbi at tellus orci. Pellentesque et nunc non leo posuere suscipit quis id lorem. Donec at magna est. Etiam sed scelerisque risus. Donec aliquam gravida urna, ac rutrum est pulvinar sed. Nam id faucibus nisl, ac condimentum erat. Morbi eget bibendum orci. Donec ac tellus tristique, faucibus elit eu, suscipit mauris. Curabitur vel interdum elit. Fusce interdum, justo non venenatis bibendum, purus erat porta metus, eget dictum purus odio a nisi. In egestas vulputate tincidunt. Aliquam erat volutpat. Ut vitae sapien pretium, fringilla risus nec, porta tellus. Praesent malesuada lacinia magna, vel commodo ex.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem', '2020-10-16 12:32:34', '2020-10-18 23:04:37', NULL),
(2, 2, 'Vivamus cursus egestas purus in molestie. Morbi at tellus orci. Pellentesque et nunc non leo posuere suscipit quis id lorem. Donec at magna est. Etiam sed scelerisque risus. Donec aliquam gravida urna, ac rutrum est pulvinar sed. Nam id faucibus nisl, ac condimentum erat. Morbi eget bibendum orci. Donec ac tellus tristique, faucibus elit eu, suscipit mauris. Curabitur vel interdum elit. Fusce interdum, justo non venenatis bibendum, purus erat porta metus, eget dictum purus odio a nisi. In egestas vulputate tincidunt. Aliquam erat volutpat. Ut vitae sapien pretium, fringilla risus nec, porta tellus. Praesent malesuada lacinia magna, vel commodo ex.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Ipsum', '2020-10-16 12:32:34', NULL, NULL),
(3, 1, 'Curabitur imperdiet rutrum mi, sit amet facilisis risus iaculis sodales. Proin sed feugiat dolor. Ut enim orci, fermentum nec purus rutrum, lobortis faucibus augue. Duis scelerisque metus in bibendum viverra. Maecenas hendrerit tristique dolor id blandit. Vestibulum sit amet dolor dictum, malesuada ligula eget, convallis elit. Nunc eu aliquet enim. Curabitur suscipit felis magna, a auctor lacus dictum eu.', 'Curabitur et auctor ex, in hendrerit leo. Vestibulum non sollicitudin sapien.', 'Amet', '2020-10-16 17:42:35', '2020-10-25 20:22:39', NULL),
(4, 1, 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque felis ex, dignissim ut dolor ut, condimentum tempus est. Aenean vel porta lorem, at volutpat risus. Duis venenatis auctor ligula, eu eleifend purus lacinia sed. Proin tempor mollis vestibulum. Quisque tincidunt fringilla mollis. Etiam sodales justo ante, sed ornare sapien consectetur ut. Sed nec ante id odio auctor porta. Mauris interdum rhoncus mattis. Suspendisse at pulvinar sapien, sed ornare neque. Quisque non quam gravida massa facilisis hendrerit.', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.', 'Ipsum', '2020-10-16 17:45:28', '2020-10-25 20:24:07', NULL),
(5, 1, 'Ut congue blandit urna quis lobortis. Cras justo tortor, facilisis ut sem hendrerit, ultrices elementum dui. Sed ullamcorper lectus risus, at pharetra mi molestie et. Quisque eget consectetur diam, eget aliquet nulla. Sed non ligula a quam tincidunt tincidunt a eu diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer erat mauris, sodales at ligula eu, facilisis mattis leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 'Phasellus semper lacinia tellus eu tempus. Fusce maximus velit eget lectus tempor.', 'Lorem', '2020-10-16 15:46:24', '2020-10-25 20:24:57', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
