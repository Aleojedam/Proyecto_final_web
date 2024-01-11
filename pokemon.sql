-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2024 at 04:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pokemon`
--

-- --------------------------------------------------------

--
-- Table structure for table `formulario`
--

CREATE TABLE `formulario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `rut` int(8) NOT NULL,
  `n_identificador` int(1) NOT NULL,
  `telefono` int(8) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `rol` varchar(7) NOT NULL DEFAULT 'usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `formulario`
--

INSERT INTO `formulario` (`id`, `nombre`, `apellido`, `rut`, `n_identificador`, `telefono`, `email`, `password`, `foto`, `rol`) VALUES
(1, 'asd', 'asdas', 213, 23, 0, '', '', '', 'usuario'),
(2, 'Benjamin Tomas', 'Castillo', 21546683, 0, 0, 'benja.c4tnt@gmail.com', 'asdfasfas', '', 'usuario'),
(3, 'Benjamin Tomas', 'Castillo', 21546683, 0, 0, 'benja.c4tnt@gmail.com', 'asdfasfas', 'img/Ew2wk8biFhwfKG2RsvpDS7b0zyw84O.jpg', 'usuario'),
(4, '', '', 0, 0, 0, '', '', '', 'usuario'),
(5, 'juan', 'D', 20082051, 7, 56824584, 'digimon.benja@gmail.com', 'eres2pasteles', 'img/Ew2wk8biFhwfKG2RsvpDS7b0zyw84O.jpg', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `enlace` varchar(150) NOT NULL,
  `foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `enlace`, `foto`) VALUES
(10, 'El cuarto episodio de Pokémon: Vientos de Paldea ya está disponible', 'https://www.pokemon.com/el/noticias-pokemon/el-cuarto-episodio-de-pokemon-vientos-de-paldea-ya-esta-disponible', 'img/paldean-winds-4-169-es.png'),
(13, 'Un primer vistazo a las cartas de la expansión Escarlata y Púrpura-Destinos de Paldea de JCC Pokémon', 'https://www.pokemon.com/el/noticias-pokemon/un-primer-vistazo-a-las-cartas-de-la-expansion-escarlata-y-purpura-destinos-de-paldea-de-jcc-pokemon', 'img/sv045-preview-cards-1-169-es.png'),
(15, 'Un primer vistazo a las cartas de la expansión Escarlata y Púrpura-Destinos de Paldea de JCC Pokémon', 'https://www.pokemon.com/el/noticias-pokemon/un-primer-vistazo-a-las-cartas-de-la-expansion-escarlata-y-purpura-destinos-de-paldea-de-jcc-pokemon', 'img/sv045-preview-cards-1-169-es.png'),
(16, 'Un primer vistazo a las cartas de la expansión Escarlata y Púrpura-Destinos de Paldea de JCC Pokémon', 'https://www.pokemon.com/el/noticias-pokemon/un-primer-vistazo-a-las-cartas-de-la-expansion-escarlata-y-purpura-destinos-de-paldea-de-jcc-pokemon', 'img/sv045-preview-cards-1-169-es.png'),
(17, 'Un primer vistazo a las cartas de la expansión Escarlata y Púrpura-Destinos de Paldea de JCC Pokémon', 'https://www.pokemon.com/el/noticias-pokemon/un-primer-vistazo-a-las-cartas-de-la-expansion-escarlata-y-purpura-destinos-de-paldea-de-jcc-pokemon', 'img/sv045-preview-cards-1-169-es.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formulario`
--
ALTER TABLE `formulario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
