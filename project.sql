-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Ápr 08. 14:15
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `haircutstyles`
--

CREATE TABLE `haircutstyles` (
  `HaircutStyleID` int(11) NOT NULL,
  `StyleName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `haircutstyles`
--

INSERT INTO `haircutstyles` (`HaircutStyleID`, `StyleName`) VALUES
(1, 'Hajvágás'),
(2, 'Hajvágás + szakáll igazítás'),
(3, 'Szakáll pengés és gépi igazítás'),
(4, 'Egy hossz hajvágás'),
(5, 'Egy hossz hajvágás + szakáll igazítás'),
(6, 'Szakáll igazítás + szakállfestés'),
(7, 'Hajvágás + szakálligazítás + szakállfestés'),
(8, 'Hajvágás + Szakáll igazítás + Szakállfestés + Hajf');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `idopntfoglalas`
--

CREATE TABLE `idopntfoglalas` (
  `id` int(11) NOT NULL,
  `nev` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefonszam` int(11) NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `prices`
--

CREATE TABLE `prices` (
  `PriceID` int(11) NOT NULL,
  `HaircutStyleID` int(11) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `prices`
--

INSERT INTO `prices` (`PriceID`, `HaircutStyleID`, `Price`) VALUES
(1, 1, 4500.00),
(2, 2, 7500.00),
(3, 3, 3000.00),
(4, 4, 3500.00),
(5, 5, 7000.00),
(6, 6, 8000.00),
(7, 7, 13500.00),
(8, 8, 18000.00);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`) VALUES
(1, 'teszt@teszt.hu', '$2y$10$3Hdodo.JOtwgIGiak1J1NuPjJRvPX9yg8dtinsAQf8Ezp9EJP27GG'),
(2, 'kovi44', '$2y$10$KJcq/uaLgnydnLQSZGhazuXS7n58NCQWVWSRWgCbsKtK5i816FrOm');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `idopntfoglalas`
--
ALTER TABLE `idopntfoglalas`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `idopntfoglalas`
--
ALTER TABLE `idopntfoglalas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
