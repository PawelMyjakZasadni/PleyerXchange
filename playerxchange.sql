-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Maj 24, 2023 at 12:22 AM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `playerxchange`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `innyklub`
--

CREATE TABLE `innyklub` (
  `id` int(11) NOT NULL,
  `nazwa_klubu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `innyklub`
--

INSERT INTO `innyklub` (`id`, `nazwa_klubu`) VALUES
(1, 'górnik_zabrze'),
(2, 'cracowa'),
(3, 'lech_poznan'),
(4, 'wisła kraków'),
(5, 'ruch_chorzów');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-04-24-195647', 'App\\Database\\Migrations\\CreateUser', 'default', 'App', 1684872711, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `twojklub`
--

CREATE TABLE `twojklub` (
  `id` int(11) NOT NULL,
  `rok_zalozenia` varchar(11) DEFAULT NULL,
  `menedzer` varchar(255) DEFAULT NULL,
  `pracownicy` varchar(255) DEFAULT NULL,
  `pilkarze` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `twojklub`
--

INSERT INTO `twojklub` (`id`, `rok_zalozenia`, `menedzer`, `pracownicy`, `pilkarze`) VALUES
(84, '23453', NULL, NULL, NULL),
(85, '23453', 'cos', 'placek', 'tak'),
(86, '2003', 'cos', 'placek', 'tak'),
(87, '2003', 'cos', 'placek', 'tak'),
(88, '1999', 'marcel', 'jan', 'kacper');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'admin', '1234');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `innyklub`
--
ALTER TABLE `innyklub`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `twojklub`
--
ALTER TABLE `twojklub`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `innyklub`
--
ALTER TABLE `innyklub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `twojklub`
--
ALTER TABLE `twojklub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
