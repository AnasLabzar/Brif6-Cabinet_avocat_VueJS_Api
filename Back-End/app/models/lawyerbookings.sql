-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 29 juil. 2021 à 17:41
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lawyerbookings`
--

-- --------------------------------------------------------

--
-- Structure de la table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `time` time NOT NULL,
  `reference_id` varchar(11) NOT NULL,
  `bookingSubject` text NOT NULL,
  `timeSlot_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `bookings`
--

INSERT INTO `bookings` (`id`, `Date`, `time`, `reference_id`, `bookingSubject`, `timeSlot_id`) VALUES
(142, '2021-07-29', '10:00:00', 'CF628ED', 'sfs', 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `Reference` varchar(11) NOT NULL,
  `fullName` text NOT NULL,
  `Email` text NOT NULL,
  `tel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`Reference`, `fullName`, `Email`, `tel`) VALUES
('006B42D', 'yassine', 'fefefe@sfes', '453454'),
('031C107', 'ddd', 'ddd@gmail.com', '01231414'),
('04DE3A7', 'ali', 'ali@gmail.com', '0677889900'),
('182DFB4', 'Nadia ait belkouhia', 'nadia.ait.belkouhia@gmail.com', '04242745'),
('1A5BC41', 'Nadia ait belkouhia', 'Nadia@ait.com', '2342342343'),
('2048F58', 'Yassine ait belkouhia', 'yassine.ait.belkouhia@gmail.com', '061481834'),
('2421CC4', 'ddd', 'ddd@gmail.com', '01231414'),
('27C89D0', 'Yasser El Mouzaki', 'yasser.elmouzaki@gmail.com', '061314324'),
('2A6D326', 'ioyroy', 'fezfrere@regzre', '423432'),
('4BD7DAE', 'edz', '234@xn--dz-7fu', '234'),
('4C94C38', 'ddd', 'ddd@gmail.com', '01231414'),
('4EE6FA4', 'dddffff', 'ddd@gmail.com', '01231414'),
('511986F', 'Yassine ait belkouhia', 'yassine.ait.belkouhia@gmail.com', '0614881513'),
('5580A15', 'Yassine', 'Yassine.ait.belkouhia@gmail.com', '0624234'),
('5B3877F', 'Yassine ait belkouhia', 'yassine.ait.belkouhia@gmail.com', '0624254234'),
('655F11E', 'Yassine ait belkouhia', 'Yassine.ait.belkouhia@gmail.com', '0614884335'),
('67AF872', 'Yassine Ait Belkouhia', 'Yassine.ait.belkouhia@gmail.com', '04234234'),
('70C343C', 'Yassine ait belkouhia', 'Yassine@dazda', '0614881513'),
('8749790', 'ddd', 'ddd@gmail.com', '01231414'),
('8D482FB', 'ali', 'alibela3@gmail.com', '0690655592'),
('9896A69', 'yassine ait belkouhia', 'yassine.ait.belkouhia@gmail.com', '0614881513'),
('9941484', 'yassine ait belkouhia', 'yassine.ait.belkouhia@gmail.com', '987679'),
('A6D2501', 'yassine belkahkah', 'fzefezfez@feez', '424234324'),
('AB9771F', 'yassine ait belkouhia', 'yassine.aiT.belkouhia@gmail.com', '0614881513'),
('AD9011D', 'yassin', 'yassin@gmail.com', '124124124'),
('C332D6B', 'rachid ', 'rachid@dad', '23423423'),
('C40E6D1', 'yassin', 'yassin@gmail.com', '124124124'),
('C427903EFC', 'nada', 'nada@nada', '24234'),
('CF628ED', 'ya', 'ya@zz', '9595'),
('D267BC6', 'Yassine ait belkouhia ', 'yassin.ait.belkouhia@gmail.com', '061881513'),
('D961809', 'Nadia ait belkouhia', 'nadia.ait.belkouhia@gmail.com', '0652425542'),
('DDD5AD3', 'Yassine ait belkouh', 'yassine.ait.belkouhia@gmail.com', '014143333'),
('E672703', 'Moustapha', 'emai@fafeafea', '6546345645'),
('E906F5F', 'Yassine ait belkouhia', 'Yassine.ait.belkouhia@gmail.com', '0614881513'),
('FF70899', 'Yassine Ait Blkouhia', 'Yassine.ait.belkouhia@gmail.com', '0614881513');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ref_id` (`reference_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Reference`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `ref_id` FOREIGN KEY (`reference_id`) REFERENCES `users` (`Reference`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
