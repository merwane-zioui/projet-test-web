-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 06 nov. 2021 à 00:29
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dbsite`
--
CREATE DATABASE IF NOT EXISTS `dbsite` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbsite`;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `productid` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`productid`, `brand`, `name`, `description`, `price`) VALUES
(1, 'Nike', 'Air Max 90', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut facilisis nisi. Vestibulum eget sem mollis, consectetur leo pulvinar, vehicula diam. Nam a nisl blandit, sagittis massa in, ultricies ante. Aliquam in nulla lacinia, rutrum ligula nec, ornare sem. Vestibulum gravida viverra ipsum, quis rutrum arcu malesuada quis. Vestibulum sed nunc pulvinar, iaculis diam sit amet, porttitor mauris. Nam ut lectus porttitor dolor eleifend facilisis id elementum velit. Proin at ultricies lorem.', 105.5),
(2, 'adidas', 'Superstar', 'Morbi nec velit euismod urna ultrices luctus sit amet sed lacus. Vivamus pretium, massa a malesuada ullamcorper, enim tellus ornare leo, sit amet egestas lacus dui ut ante. Integer vulputate, lorem eu scelerisque aliquet, massa justo imperdiet neque, id convallis est justo mollis sapien. Proin purus ligula, vehicula id lobortis eu, commodo quis erat. Curabitur vel lorem auctor, viverra dolor eu, euismod ante. Sed iaculis tempus sodales. Suspendisse faucibus metus ut nunc accumsan dapibus.', 100),
(3, 'New Balance', 'NB 550 Green', 'Donec tempor non neque et dapibus. Nunc interdum ornare nunc at gravida. Nam velit nibh, venenatis ut turpis eu, fermentum venenatis mi. Quisque egestas at diam sed maximus. Duis felis nibh, rutrum vitae libero nec, pulvinar mollis augue. Sed luctus enim nec malesuada pretium. Integer fringilla tempus tellus sit amet bibendum.', 120),
(4, 'Jordan Brand', 'Jordan 1 High', 'Nunc ut metus eros. Morbi vel placerat leo. Duis a odio non orci gravida eleifend. Proin vitae mauris scelerisque, malesuada leo sit amet, sollicitudin lectus. Morbi vel magna bibendum, iaculis massa sit amet, sodales metus. Aliquam in dolor vel eros ullamcorper vestibulum nec semper est. Duis a hendrerit risus, et efficitur nisi. Donec eu justo odio. Aliquam ornare a justo at facilisis. Nullam vitae ligula et dolor ullamcorper placerat vitae eu orci. Phasellus ut elit eu erat malesuada pharetra id in risus. Aenean dictum nisl at metus laoreet, ac laoreet dui rutrum. Sed non eleifend elit, quis viverra velit. Donec ligula eros, dictum ut posuere et, iaculis sed dui.', 170),
(5, 'Nike', 'Dunk Low UNC', 'Pellentesque et purus massa. Pellentesque posuere orci sed sapien condimentum aliquet. Fusce nec dui a enim dictum pulvinar nec nec velit. Ut fringilla dui quis nisi tincidunt, eu vehicula ante tempus. Donec posuere tellus mi, et pellentesque nisi convallis vel. Integer a felis et leo sagittis elementum ac non mauris. Cras lacinia blandit posuere. Nam gravida felis ac leo fringilla, quis lobortis mauris consectetur. Maecenas mollis nulla a metus luctus lacinia. Proin sem ligula, porta quis enim fringilla, tempor scelerisque arcu. Proin felis orci, mattis quis massa in, hendrerit aliquet nibh.', 110),
(6, 'Nike', 'Dunk High Panda', 'Nulla accumsan tempus dui porttitor eleifend. Mauris a iaculis mauris. Duis placerat nisl tortor, porttitor fermentum nisl commodo vitae. Praesent nec convallis orci, tincidunt lacinia mauris. Pellentesque in libero massa. Phasellus tincidunt luctus velit. Phasellus eu venenatis leo. Quisque et nibh quis lacus congue laoreet nec ac purus. Mauris sollicitudin purus eu nibh sodales, a posuere nisl sollicitudin. Suspendisse vel tristique felis. Donec vel metus elementum dui lobortis condimentum. Praesent sagittis aliquet feugiat. In euismod sit amet turpis ac finibus.', 120);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varbinary(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `mdp`, `nom`, `prenom`) VALUES
(1, 'toto@gmail.com', 0x12fa60aca2cffdcc711370420c27f386, 'Toto', 'Titi');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productid`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
