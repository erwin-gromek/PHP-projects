-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Gru 2021, 22:15
-- Wersja serwera: 10.4.17-MariaDB
-- Wersja PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `zaliczenie`
--
CREATE DATABASE IF NOT EXISTS `zaliczenie` DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci;
USE `zaliczenie`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_polish_ci NOT NULL,
  `imgSrc` text COLLATE utf8_polish_ci NOT NULL,
  `title` text COLLATE utf8_polish_ci NOT NULL,
  `level` int(11) NOT NULL,
  `parentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `classes`
--

INSERT INTO `classes` (`id`, `name`, `imgSrc`, `title`, `level`, `parentId`) VALUES
(1, 'Weapon', 'img/weapon.png', 'Bron', 1, 0),
(2, 'Melee', 'img/melee.png', 'W zwarciu', 2, 1),
(3, 'Ranged', 'img/ranged.png', 'Dystansowa', 2, 1),
(4, 'Magic', 'img/magic.png', 'Magia', 2, 1),
(5, 'Sword', 'img/sword.png', 'Miecz', 3, 2),
(6, 'Rapier', 'img/rapier.png', 'Rapier', 3, 2),
(7, 'FireStaff', 'img/firestaff.png', 'Laska ognia', 3, 4),
(8, 'IceGauntlet', 'img/icegauntlet.png', 'Lodowa rekawica', 3, 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `firestaff_objects`
--

CREATE TABLE `firestaff_objects` (
  `id` int(11) NOT NULL,
  `type` text COLLATE utf8_polish_ci DEFAULT NULL,
  `name` text COLLATE utf8_polish_ci DEFAULT NULL,
  `dps` float DEFAULT NULL,
  `aoe_radius` float DEFAULT NULL,
  `element` text COLLATE utf8_polish_ci DEFAULT NULL,
  `firestaffSkill1` text COLLATE utf8_polish_ci DEFAULT NULL,
  `firestaffSkill2` text COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `icegauntlet_objects`
--

CREATE TABLE `icegauntlet_objects` (
  `id` int(11) NOT NULL,
  `type` text COLLATE utf8_polish_ci DEFAULT NULL,
  `name` text COLLATE utf8_polish_ci DEFAULT NULL,
  `dps` float DEFAULT NULL,
  `aoe_radius` float DEFAULT NULL,
  `element` text COLLATE utf8_polish_ci DEFAULT NULL,
  `icegauntletSkill1` text COLLATE utf8_polish_ci DEFAULT NULL,
  `icegauntletSkill2` text COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `magic_objects`
--

CREATE TABLE `magic_objects` (
  `id` int(11) NOT NULL,
  `type` text COLLATE utf8_polish_ci DEFAULT NULL,
  `name` text COLLATE utf8_polish_ci DEFAULT NULL,
  `dps` float DEFAULT NULL,
  `aoe_radius` float DEFAULT NULL,
  `element` text COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `melee_objects`
--

CREATE TABLE `melee_objects` (
  `id` int(11) NOT NULL,
  `type` text COLLATE utf8_polish_ci DEFAULT NULL,
  `name` text COLLATE utf8_polish_ci DEFAULT NULL,
  `dps` float DEFAULT NULL,
  `blade_length` float DEFAULT NULL,
  `hands_required` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ranged_objects`
--

CREATE TABLE `ranged_objects` (
  `id` int(11) NOT NULL,
  `type` text COLLATE utf8_polish_ci DEFAULT NULL,
  `name` text COLLATE utf8_polish_ci DEFAULT NULL,
  `dps` float DEFAULT NULL,
  `ammunition_type` text COLLATE utf8_polish_ci DEFAULT NULL,
  `ammunition_material` text COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rapier_objects`
--

CREATE TABLE `rapier_objects` (
  `id` int(11) NOT NULL,
  `type` text COLLATE utf8_polish_ci DEFAULT NULL,
  `name` text COLLATE utf8_polish_ci DEFAULT NULL,
  `dps` float DEFAULT NULL,
  `blade_length` float DEFAULT NULL,
  `hands_required` int(11) DEFAULT NULL,
  `rapierSkill1` text COLLATE utf8_polish_ci DEFAULT NULL,
  `rapierSkill2` text COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sword_objects`
--

CREATE TABLE `sword_objects` (
  `id` int(11) NOT NULL,
  `type` text COLLATE utf8_polish_ci DEFAULT NULL,
  `name` text COLLATE utf8_polish_ci DEFAULT NULL,
  `dps` float DEFAULT NULL,
  `blade_length` float DEFAULT NULL,
  `hands_required` int(11) DEFAULT NULL,
  `swordSkill1` text COLLATE utf8_polish_ci DEFAULT NULL,
  `swordSkill2` text COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `weapon_objects`
--

CREATE TABLE `weapon_objects` (
  `id` int(11) NOT NULL,
  `type` text COLLATE utf8_polish_ci DEFAULT NULL,
  `name` text COLLATE utf8_polish_ci DEFAULT NULL,
  `dps` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `firestaff_objects`
--
ALTER TABLE `firestaff_objects`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `icegauntlet_objects`
--
ALTER TABLE `icegauntlet_objects`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `magic_objects`
--
ALTER TABLE `magic_objects`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `melee_objects`
--
ALTER TABLE `melee_objects`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `ranged_objects`
--
ALTER TABLE `ranged_objects`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `rapier_objects`
--
ALTER TABLE `rapier_objects`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `sword_objects`
--
ALTER TABLE `sword_objects`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `weapon_objects`
--
ALTER TABLE `weapon_objects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `firestaff_objects`
--
ALTER TABLE `firestaff_objects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `icegauntlet_objects`
--
ALTER TABLE `icegauntlet_objects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `magic_objects`
--
ALTER TABLE `magic_objects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `melee_objects`
--
ALTER TABLE `melee_objects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `ranged_objects`
--
ALTER TABLE `ranged_objects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `rapier_objects`
--
ALTER TABLE `rapier_objects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `sword_objects`
--
ALTER TABLE `sword_objects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `weapon_objects`
--
ALTER TABLE `weapon_objects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
