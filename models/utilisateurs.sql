-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 26 fév. 2021 à 06:54
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `membre`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `loginUser` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `birth` date NOT NULL,
  `mailUser` varchar(20) NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`loginUser`, `firstname`, `lastname`, `birth`, `mailUser`, `password`) VALUES
('bilel', 'Fadéla', 'BENICHOU', '2021-02-10', 'bilardose@gmail.com', '$2y$10$YW2krvWy9mGzRXmH1CKA/uZUSusY0iMVnL/WjNXTApQdAjxh.pSZy'),
('bilel', 'Fadéla', 'BENICHOU', '2021-02-10', 'bilardose@gmail.com', '$2y$10$fPDwbM38CaDK7HQRWQrTQOTkMZO7mNXclRxYIOqRjioSMUpcw0SiW'),
('xenos', 'Daniel', 'Prana', '1981-06-26', 'hades@gmail.com', '$2y$10$f9tcscIP41NLo3mQIw7WlOGeyV3.L3ugmzwa052Re7s380SXAFONy');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
