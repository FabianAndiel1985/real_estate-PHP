-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 10. Aug 2021 um 10:18
-- Server-Version: 10.4.13-MariaDB
-- PHP-Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `vanillaphp`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(2, 'Fabian3', '$2y$10$eqWTtlw15483Oe6.JFurNe8vvoWyWVBTWNH3i4xNjOru0zQxMge6.', 'fabian.andiel@yahoo.com');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `emailadress` varchar(255) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `feedback`
--

INSERT INTO `feedback` (`id`, `firstname`, `lastname`, `emailadress`, `feedback`) VALUES
(1, 'Fabian', 'Fabian', 'fabian.andiel@yahoo.com', 'vtrbwvwrtb');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `team`
--

CREATE TABLE `team` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephonenumber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `team`
--

INSERT INTO `team` (`id`, `firstname`, `lastname`, `email`, `telephonenumber`) VALUES
(1, 'Benjamin', 'Beach', 'Aenean.eget.metus@cursus.edu', '(036849) 888318'),
(2, 'Octavia', 'Emerson', 'primis.in@orciinconsequat.co.uk', '(071) 80764760'),
(3, 'Neve', 'Rose', 'turpis@disparturientmontes.com', '(030) 31996954'),
(4, 'Ciaran', 'Lane', 'dolor@sapienmolestie.edu', '(04190) 2087136'),
(5, 'Alec', 'Beard', 'a.felis.ullamcorper@elit.ca', '(0861) 36827841'),
(6, 'Clementine', 'Cameron', 'eget@massaSuspendisseeleifend.net', '(0895) 76080390'),
(7, 'Chelsea', 'Webb', 'gravida.Praesent@pedesagittis.org', '(00715) 9079329'),
(8, 'Ivan', 'James', 'non.luctus.sit@mi.com', '(073) 73721370'),
(9, 'Eric', 'Mccormick', 'odio@ornarelectus.net', '(039386) 229927'),
(10, 'Mohammad', 'Foley', 'mollis@commodohendreritDonec.edu', '(037817) 216646');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `team`
--
ALTER TABLE `team`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
