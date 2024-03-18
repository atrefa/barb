-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Már 18. 13:15
-- Kiszolgáló verziója: 10.4.28-MariaDB
-- PHP verzió: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `barbershoptt`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `appointments`
--

CREATE TABLE `appointments` (
  `AppointmentID` int(11) NOT NULL,
  `CustomerID` int(11) DEFAULT NULL,
  `AppointmentTime` datetime DEFAULT NULL,
  `HaircutStyleID` int(11) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `customers`
--

CREATE TABLE `customers` (
  `CustomerID` int(11) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

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

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`AppointmentID`),
  ADD KEY `CustomerID` (`CustomerID`),
  ADD KEY `HaircutStyleID` (`HaircutStyleID`);

--
-- A tábla indexei `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- A tábla indexei `haircutstyles`
--
ALTER TABLE `haircutstyles`
  ADD PRIMARY KEY (`HaircutStyleID`);

--
-- A tábla indexei `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`PriceID`),
  ADD KEY `HaircutStyleID` (`HaircutStyleID`);

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customers` (`CustomerID`),
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`HaircutStyleID`) REFERENCES `haircutstyles` (`HaircutStyleID`);

--
-- Megkötések a táblához `prices`
--
ALTER TABLE `prices`
  ADD CONSTRAINT `prices_ibfk_1` FOREIGN KEY (`HaircutStyleID`) REFERENCES `haircutstyles` (`HaircutStyleID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
