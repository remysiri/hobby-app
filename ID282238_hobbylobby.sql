-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : mysql124.hosting.combell.com:3306
-- Généré le :  sam. 15 juin 2019 à 21:38
-- Version du serveur :  5.7.20-18
-- Version de PHP :  7.1.25-1+0~20181207224605.11+jessie~1.gbpf65b84

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ID282238_hobbylobby`
--

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `body` text,
  `location` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `type` tinyint(1) DEFAULT '0',
  `category` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `name`, `resume`, `body`, `location`, `start_date`, `end_date`, `type`, `category`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Stare-off Duel', 'Ever dreamed of fast-draw shooting like a real cowboy in a stare off duel?\r\nMake it possible, in this tournament like format you\'ll be facing each other with Airsoft guns, which will obviously hurt. May the best take the top!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ante libero. Vivamus faucibus vel quam ut cursus. Donec convallis a ligula id feugiat. Praesent gravida vehicula pretium. Sed a euismod sem. Quisque velit ante, iaculis iaculis fringilla ac, euismod eu felis. Nam faucibus sem ac augue laoreet imperdiet. Proin lobortis odio non aliquet tincidunt. Praesent eu mollis est. ', 'Budafabriek AA', '2019-11-12', NULL, 0, 'duel', NULL, NULL, NULL),
(2, 'Saloonshooting', 'Face the unexepected enemy at an unexpected moment while you are enjoying your drink, who dares to interupt you? Will you go down or shall you prove your worth to the town as a local?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ante libero. Vivamus faucibus vel quam ut cursus. Donec convallis a ligula id feugiat. Praesent gravida vehicula pretium. Sed a euismod sem. Quisque velit ante, iaculis iaculis fringilla ac, euismod eu felis. Nam faucibus sem ac augue laoreet imperdiet. Proin lobortis odio non aliquet tincidunt. Praesent eu mollis est. ', 'Budafabriek AA', '2020-08-26', NULL, 0, 'shooting', NULL, NULL, NULL),
(3, 'What\'s a cowboy without a horse?', 'Become the real one and learn how to ride a horse, for more experienced riders prepare your lasso\'s to catch some villains that would unexpectedly show up!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ante libero. Vivamus faucibus vel quam ut cursus. Donec convallis a ligula id feugiat. Praesent gravida vehicula pretium. Sed a euismod sem. Quisque velit ante, iaculis iaculis fringilla ac, euismod eu felis. Nam faucibus sem ac augue laoreet imperdiet. Proin lobortis odio non aliquet tincidunt. Praesent eu mollis est. ', 'Budafabriek AA', '2019-09-10', NULL, 0, 'learning', NULL, NULL, NULL),
(4, 'Make your own horse', 'Horses are history, join us today and create your own motorised horse, be it fancy, fast or deadly equipped? Of course, we provide everything you will ever need.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ante libero. Vivamus faucibus vel quam ut cursus. Donec convallis a ligula id feugiat. Praesent gravida vehicula pretium. Sed a euismod sem. Quisque velit ante, iaculis iaculis fringilla ac, euismod eu felis. Nam faucibus sem ac augue laoreet imperdiet. Proin lobortis odio non aliquet tincidunt. Praesent eu mollis est. ', 'Budafabriek AA', '2019-10-15', NULL, 0, 'learning', NULL, NULL, NULL),
(5, 'Ride your own horse', 'Expose your beautifull creations, race it, ride it and take enemies down or just display it, your choice, you choose!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ante libero. Vivamus faucibus vel quam ut cursus. Donec convallis a ligula id feugiat. Praesent gravida vehicula pretium. Sed a euismod sem. Quisque velit ante, iaculis iaculis fringilla ac, euismod eu felis. Nam faucibus sem ac augue laoreet imperdiet. Proin lobortis odio non aliquet tincidunt. Praesent eu mollis est. ', 'Budafabriek AA', '2020-02-12', NULL, 0, 'show-off', NULL, NULL, NULL),
(6, 'Visiting a real old towns renmants', 'Ever dreamed of how it really should look like or how it looked like back in the days?\r\nWe\'ll take you on a tour to the USA!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ante libero. Vivamus faucibus vel quam ut cursus. Donec convallis a ligula id feugiat. Praesent gravida vehicula pretium. Sed a euismod sem. Quisque velit ante, iaculis iaculis fringilla ac, euismod eu felis. Nam faucibus sem ac augue laoreet imperdiet. Proin lobortis odio non aliquet tincidunt. Praesent eu mollis est. ', 'Budafabriek AA', '2020-06-26', NULL, 0, 'trip', NULL, NULL, NULL),
(7, 'Horseshoes', 'Learn how to make and smith a horseshoe, because you will need it for your horse!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ante libero. Vivamus faucibus vel quam ut cursus. Donec convallis a ligula id feugiat. Praesent gravida vehicula pretium. Sed a euismod sem. Quisque velit ante, iaculis iaculis fringilla ac, euismod eu felis. Nam faucibus sem ac augue laoreet imperdiet. Proin lobortis odio non aliquet tincidunt. Praesent eu mollis est. ', 'Budafabriek AA', '2020-08-14', NULL, 0, 'learning', NULL, NULL, NULL),
(8, 'Roleplay Session', 'Take some time back and enjoy the time as you portray somebody else, dress up as one and act as one!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ante libero. Vivamus faucibus vel quam ut cursus. Donec convallis a ligula id feugiat. Praesent gravida vehicula pretium. Sed a euismod sem. Quisque velit ante, iaculis iaculis fringilla ac, euismod eu felis. Nam faucibus sem ac augue laoreet imperdiet. Proin lobortis odio non aliquet tincidunt. Praesent eu mollis est. ', 'Budafabriek AA', '2019-06-30', NULL, 0, 'roleplay', NULL, NULL, NULL),
(9, 'Cattledriving', 'Cattledriving with the horse you made on your own?\r\nWill they obey, listen or will they all run away? Find out!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ante libero. Vivamus faucibus vel quam ut cursus. Donec convallis a ligula id feugiat. Praesent gravida vehicula pretium. Sed a euismod sem. Quisque velit ante, iaculis iaculis fringilla ac, euismod eu felis. Nam faucibus sem ac augue laoreet imperdiet. Proin lobortis odio non aliquet tincidunt. Praesent eu mollis est. ', 'Budafabriek AA', '2019-06-23', NULL, 0, 'show-off', NULL, NULL, NULL),
(10, 'Bull Riding', 'Feeling confident are we? Take the challenge and come ride a REAL bull, who will last longer? A prizepool will be available for the survivor!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ante libero. Vivamus faucibus vel quam ut cursus. Donec convallis a ligula id feugiat. Praesent gravida vehicula pretium. Sed a euismod sem. Quisque velit ante, iaculis iaculis fringilla ac, euismod eu felis. Nam faucibus sem ac augue laoreet imperdiet. Proin lobortis odio non aliquet tincidunt. Praesent eu mollis est. ', 'Budafabriek AA', '2019-07-17', NULL, 0, 'show-off', NULL, NULL, NULL),
(16, 'First Edition Yearly', 'Local residents living their everyday life, until invaders come and break the peace, creating a blood bath, who shall survive?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae ante libero. Vivamus faucibus vel quam ut cursus. Donec convallis a ligula id feugiat. Praesent gravida vehicula pretium. Sed a euismod sem. Quisque velit ante, iaculis iaculis fringilla ac, euismod eu felis. Nam faucibus sem ac augue laoreet imperdiet. Proin lobortis odio non aliquet tincidunt. Praesent eu mollis est. ', 'Budafabriek AA', '2020-04-30', NULL, 1, 'tournament', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `body` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `firstname`, `lastname`, `email`, `phone`, `subject`, `body`) VALUES
(1, 'Azgfd', 'Testuserma', 'test@mail.com', 2147483647, 'join', 'fhdhdfgsdfsfsf'),
(2, 'Azgfd', 'Testuserma', 'test@mail.com', 2147483647, 'join', 'fdfsdfsdfsfsdfsf'),
(3, 'Test', 'efffff', 'test@mail.com', 2147483647, 'join', 'gdfgdfgdfgdfgdfg'),
(4, 'Azgfd', 'efffff', 'test@mail.com', 2147483647, 'other', 'sdfsfsfsfsfdfsdfsf'),
(5, 'Rémy', 'efffff', 'test@mail.com', 2147483647, 'complaint', 'fdgdfgdfgdfgdfgdfg'),
(6, 'Test', 'Sirichantho', 'test@mail.com', 2147483647, 'complaint', 'fghfghfghfghfghfhfhfh'),
(7, 'Testing', 'sendingmessage', 'testing@message.com', 2147483647, 'information', 'fdsfsfsfsf'),
(8, 'tetetet', 'tetet', 'tetete@tete.com', 2147483647, 'information', 'erererere'),
(9, 'tetetet', 'tetet', 'tetete@tete.com', 2147483647, 'information', 'erererere'),
(10, 'John', 'Doe', 'Johndoe@gmail.com', 0, 'information', 'testrinreer'),
(11, 'testrandie', 'randiellol', 'lolrandie@mdrr.com', 2147483647, 'other', 'dfgdgdgdg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `member` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `member`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'rin', '$2y$10$fxGIKt3CpQIrwxgCQJ6I/eZmjbTT0Z1Yq2FCVjnNLb43o7m6TEJxq', 'Johndoe@gmail.com', 'John', 'Doe', 1, NULL, NULL, NULL),
(21, 'nigmode', '$2y$10$VtGH4DvNamBo2FTyN6Y1DulWHmAtofM0f4NbQmEeTbt8Dv/8/GubC', 'nig@black.com', 'jack', 'nigmode jackson', 0, NULL, NULL, NULL),
(22, 'john', '$2y$10$8U72D/AeLo2xPaPef1TQruqV55b0jMaQUsYYCegGzozwUSA0X5HnG', 'johndoe@hotmail.com', 'john', 'doe', 0, NULL, NULL, NULL),
(23, 'TESTINGCASESENSITIVE', '$2y$10$4uuckCAMYgXBm1hUy52cgu4j3f9nZu.XPcjcOWGSppJRNcptGPEHa', 'test@test.com', 'test', 'test', 0, NULL, NULL, NULL),
(24, 'testingupper', '$2y$10$/n4QxqaLKP7zEiZLQykypOQ79wd45Og9XvbpKmBrgse4ntYkuUfW6', 'testing@upper.com', 'testing', 'uppercase', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user_purchases`
--

CREATE TABLE `user_purchases` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `package_type` int(10) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `purchase_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `purchase_end` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user_purchases`
--

INSERT INTO `user_purchases` (`id`, `user_id`, `product_id`, `package_type`, `quantity`, `active`, `purchase_date`, `purchase_end`, `created_at`, `updated_at`, `deleted_at`) VALUES
(22, 21, 9, 3, 1, 1, '2019-06-14 22:25:13', '0000-00-00', '2019-06-14 22:25:13', NULL, NULL),
(23, 22, 9, 2, 7, 1, '2019-06-15 11:21:59', '0000-00-00', '2019-06-15 11:21:59', NULL, NULL),
(24, 1, 9, 3, 1, 1, '2019-06-15 11:25:17', '0000-00-00', '2019-06-15 11:25:17', NULL, NULL),
(25, 1, 9, 2, 1, 1, '2019-06-15 11:39:13', '0000-00-00', '2019-06-15 11:39:13', NULL, NULL),
(26, 1, 9, 3, 1, 1, '2019-06-15 11:40:16', '0000-00-00', '2019-06-15 11:40:16', NULL, NULL),
(27, 1, 9, 1, 3, 1, '2019-06-15 11:40:26', '0000-00-00', '2019-06-15 11:40:26', NULL, NULL),
(28, 1, 16, 2, 1, 1, '2019-06-15 19:28:04', '0000-00-00', '2019-06-15 19:28:04', NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user_purchases`
--
ALTER TABLE `user_purchases`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `user_purchases`
--
ALTER TABLE `user_purchases`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
