-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Cze 11, 2023 at 11:22 PM
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
-- Struktura tabeli dla tabeli `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `club_name` text NOT NULL,
  `manager` text NOT NULL,
  `price` text NOT NULL,
  `rental_period` text NOT NULL,
  `submitter` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `club_name`, `manager`, `price`, `rental_period`, `submitter`) VALUES
(1, 'crakowia', 'jan sobielski', '200000000', '190', 'papierz'),
(2, 'crakowia', 'ciula', '30000000', '5986', 'pawel'),
(3, 'crakowia', 'ciula', '30000000', '5986', 'pawel'),
(4, 'crakowia', 'jan sobielski', '200000000', '5986', 'Jan Paweł  II'),
(5, 'crakowia', 'jan sobielski', '200000000', '5986', 'dsadSDSdSAD'),
(6, 'crakowia', 'jan sobielski', '200000000', '190', 'dsadSDSdSAD'),
(7, 'crakowia', 'paweł', '1344555', '190', 'jan');

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
(185, NULL, NULL, NULL, NULL),
(186, NULL, NULL, NULL, NULL),
(187, NULL, NULL, NULL, NULL),
(188, '214', '213', '4124', '124');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'pawel', 'pawelmyjak6@onet.pl', '$2y$10$b3wcGwSIShLbMVRg7MEhduzZ9yLOL8nVWVw1.ZyHJ5ak66tfhFwY6'),
(2, 'Paweł Myjak-Zasadni', 'pawelmyjak5@onet.pl', '$2y$10$j6zlKVYagFeq5kJrLvg0v.C8NXm88yG5GEnKxWvsyPhQsxkJYe4FO'),
(3, 'Irena Myjak-Zasadni', 'szawelle@gmail.com', '$2y$10$l3u0qu/gs4dyrs9Nbxj77uGVI.34IKCS/9kU8QauJW6KQ5wzEegCi');

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
-- Indeksy dla tabeli `offers`
--
ALTER TABLE `offers`
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
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `twojklub`
--
ALTER TABLE `twojklub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
