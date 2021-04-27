-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 27, 2021 at 06:10 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `listecourses`
--

-- --------------------------------------------------------

--
-- Table structure for table `liste`
--

DROP TABLE IF EXISTS `liste`;
CREATE TABLE IF NOT EXISTS `liste` (
  `id_magasin` int NOT NULL,
  `id_produit` int NOT NULL,
  `quantite` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id_magasin`,`id_produit`),
  KEY `id_produit` (`id_produit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `liste`
--

INSERT INTO `liste` (`id_magasin`, `id_produit`, `quantite`) VALUES
(1, 2, '1.00'),
(1, 3, '1.00'),
(2, 6, '3.00'),
(4, 6, '4.00'),
(5, 7, '3.00'),
(6, 8, '26.50'),
(7, 9, '2.00'),
(7, 10, '3.00'),
(8, 11, '1.00'),
(8, 12, '1.00'),
(9, 13, '4.00');

-- --------------------------------------------------------

--
-- Table structure for table `magasin`
--

DROP TABLE IF EXISTS `magasin`;
CREATE TABLE IF NOT EXISTS `magasin` (
  `id_magasin` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_magasin`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `magasin`
--

INSERT INTO `magasin` (`id_magasin`, `nom`, `contact`) VALUES
(1, 'Auchan', NULL),
(2, 'Carrefour', '04855095095'),
(3, 'Gelatissimo', NULL),
(4, 'leclerc', NULL),
(5, 'superU', NULL),
(6, 'Intermarché', NULL),
(7, 'Picard', NULL),
(8, 'Fnac', NULL),
(9, 'Lidl', NULL),
(10, 'Carrefour', '0448595598');

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_produit` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'mon premier sql',
  `prix_unit` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id_produit`),
  UNIQUE KEY `nom` (`nom`),
  UNIQUE KEY `nom_2` (`nom`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id_produit`, `nom`, `prix_unit`) VALUES
(2, 'tomates', '2.00'),
(3, 'salade', '2.00'),
(4, 'gaufre', '3.00'),
(5, 'crepe', '3.00'),
(6, 'lardons', '2.00'),
(7, 'bonbon', '12.00'),
(8, 'pamplemousses', '10.00'),
(9, 'Frittes', '5.00'),
(10, 'Steak', '8.00'),
(11, 'PS5', '600.00'),
(12, 'Nintendo Switch', '390.00'),
(13, 'saumon', '38.00'),
(14, 'couteau', '50.00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `liste`
--
ALTER TABLE `liste`
  ADD CONSTRAINT `liste_ibfk_1` FOREIGN KEY (`id_magasin`) REFERENCES `magasin` (`id_magasin`) ON UPDATE CASCADE,
  ADD CONSTRAINT `liste_ibfk_2` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
