-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 08 juil. 2020 à 19:32
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Article n°1', 'Contenu de l\'article n°1. \r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum facilisis gravida suscipit. Cras mi felis, vulputate sed nibh sed, volutpat mollis dolor. Nunc facilisis in dolor non faucibus. Sed id fringilla nisi. Sed aliquet in augue a ultrices. Proin faucibus sagittis nibh, id tempor lacus molestie vel. Nulla facilisi. In tempus pretium libero, et sollicitudin lectus. Sed efficitur eleifend vulputate. Etiam accumsan rhoncus ipsum id laoreet. Ut metus ipsum, dapibus sit amet aliquet in, vehicula ut massa. Ut fermentum, erat vel pharetra eleifend, mauris nisl blandit ante, eu accumsan sapien nisl sit amet est. Pellentesque tempus erat finibus tempus volutpat. Nullam viverra enim quis purus tincidunt, eget ullamcorper mauris convallis. Sed accumsan scelerisque ex a auctor.', 1, '2020-07-07', '2020-07-08'),
(2, 'Article n°2', 'Contenu de l\'article n°2\r\nProin ac turpis tincidunt, aliquet nulla vitae, tincidunt purus. Phasellus nec consectetur ligula, sit amet pretium nulla. Ut cursus risus sapien. Nam luctus at massa in interdum. Morbi porta purus id diam lobortis, a ultricies sem accumsan. Mauris egestas magna felis, eget tempus sapien vehicula in. Suspendisse tempor ante libero, vel convallis tellus sollicitudin at.\r\n\r\nPraesent eu magna ligula. Aliquam in vestibulum dui. Nam suscipit pharetra finibus. Donec venenatis vehicula purus eget volutpat. Duis vel nibh sodales, condimentum justo non, cursus turpis. Ut nec fermentum ex, nec congue lectus. Duis eget erat hendrerit, viverra nunc sit amet, mattis dui.', 1, '2020-07-08', NULL),
(3, 'Article n°3', 'Contenu de l\'article n°3\r\n\r\nAliquam vulputate leo id enim congue convallis. Fusce posuere metus neque, in fermentum diam pretium sit amet. Curabitur tristique est quis ligula volutpat rutrum. Duis fringilla ultricies metus ultricies mollis. Cras eget purus mauris. Sed varius varius sollicitudin. Aenean tristique maximus gravida. Cras luctus lorem vitae velit volutpat dictum. Donec vestibulum volutpat sapien ut suscipit. Sed hendrerit, velit vel tempus hendrerit, lectus est accumsan sapien, a vulputate quam tortor in velit. Pellentesque malesuada vel augue ut luctus. Donec nulla orci, semper eget accumsan eu, luctus et enim. Curabitur pretium rhoncus tincidunt. Quisque luctus lorem et lectus venenatis faucibus.', 1, '2020-07-08', NULL),
(4, 'Article n°4', 'Contenu de l\'article n°4\r\nNunc mattis, lacus id sollicitudin porta, leo enim tempus nisl, rhoncus tempor neque sem vitae ex. Sed ornare ultricies urna eget tempor. Pellentesque pulvinar massa in iaculis euismod. Nulla condimentum magna fringilla tempus ultrices. Integer varius justo tellus, id luctus sem rutrum nec. Donec rutrum, urna in malesuada pellentesque, augue turpis pharetra lectus, quis ultricies massa quam id nisl. Sed euismod posuere magna lobortis imperdiet. Nulla pellentesque at nisi sed rutrum. Integer sagittis nec felis et vulputate. Mauris est velit, malesuada eu rutrum at, dictum fringilla lorem.', 1, '2020-07-08', NULL),
(5, 'Article n°5', 'Contenu de l\'article n°5\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ligula maximus est elementum cursus. Nulla cursus tincidunt ullamcorper. Pellentesque ante mi, porttitor vitae metus eget, faucibus lobortis ligula. Quisque dignissim massa sed felis lacinia, non pretium massa tempor. In rhoncus lorem et erat finibus, sit amet sodales purus mollis. Nulla aliquet porttitor ante, a interdum est congue ut. Curabitur bibendum elit vitae ante porta tristique. Nam id consequat turpis. Nullam aliquam fringilla odio, ac ultricies lacus blandit a. Aenean vitae tellus non lectus commodo convallis quis accumsan massa. Sed tortor purus, tincidunt non est vitae, pellentesque maximus sem. Aliquam dignissim turpis vel accumsan congue. Donec mattis massa vulputate, commodo ex in, congue arcu. Pellentesque volutpat ex quis malesuada vulputate. Pellentesque cursus pharetra mi, eu bibendum odio commodo et.', 1, '2020-07-08', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
