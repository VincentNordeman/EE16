-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 22 jan 2019 kl 12:56
-- Serverversion: 10.1.35-MariaDB
-- PHP-version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `vincent`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `personer2`
--

CREATE TABLE `personer2` (
  `id` int(11) NOT NULL,
  `fnamn` varchar(15) COLLATE utf8_swedish_ci NOT NULL,
  `enamn` varchar(15) COLLATE utf8_swedish_ci NOT NULL,
  `gmail` varchar(50) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumpning av Data i tabell `personer2`
--

INSERT INTO `personer2` (`id`, `fnamn`, `enamn`, `gmail`) VALUES
(1, 'Vincent', 'Nordeman', 'vincentnordeman@gmail.com'),
(2, 'Vincent', 'Nordeman', 'vincentnordeman@gmail.com'),
(3, 'Vincent', 'Nordeman', 'vincentnordeman@gmail.com'),
(4, 'Vincent', 'Nordeman', 'vincentnordeman@gmail.com');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `personer2`
--
ALTER TABLE `personer2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `personer2`
--
ALTER TABLE `personer2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
