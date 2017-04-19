-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 19. 04 2017 kl. 05:08:26
-- Serverversion: 5.7.14
-- PHP-version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gravenhorst`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `photos`
--

CREATE TABLE `photos` (
  `photo_id` int(11) NOT NULL,
  `photo_link` varchar(250) NOT NULL,
  `photo_name` varchar(250) NOT NULL,
  `photo_alt` varchar(250) DEFAULT NULL,
  `photo_format` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `photos`
--

INSERT INTO `photos` (`photo_id`, `photo_link`, `photo_name`, `photo_alt`, `photo_format`) VALUES
(1, 'dsc_0048.jpg', 'DSC_0048', NULL, 1),
(2, 'dsc_0050.jpg', 'DSC_0048', NULL, 1),
(3, 'dsc_0051.jpg', 'DSC_0051', NULL, 1),
(4, 'dsc_0053.jpg', 'dsc_0053', NULL, 1),
(5, 'dsc_0054.jpg', 'dsc_0053', NULL, 1),
(6, 'dsc_0055.jpg', 'dsc_0055', NULL, 2),
(7, 'dsc_0056.jpg', 'dsc_0056', NULL, 1),
(8, 'dsc_0057.jpg', 'dsc_0057', NULL, 1),
(9, 'maskine.jpg', 'dsc_0058', NULL, 1),
(10, 'dsc_0059.jpg', 'dsc_0059', NULL, 1),
(11, 'dsc_0060.jpg', 'dsc_0060', NULL, 1);

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photo_id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `photos`
--
ALTER TABLE `photos`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
