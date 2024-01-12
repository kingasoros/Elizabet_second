-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Jan 08. 10:38
-- Kiszolgáló verziója: 10.4.28-MariaDB
-- PHP verzió: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `it`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `login`
--

INSERT INTO `login` (`id`, `name`, `contact`, `email`, `address`) VALUES
(1, 'Kinga', '0659200318', 'kingasoros@gmail.com', 'effewrg'),
(2, 'Kinga', '0659200318', 'kingasoros@gmail.com', 'htmeuy'),
(3, 'Kinga', '0659200318', 'kingasoros@gmail.com', 'teyhjey5tjhe5y'),
(4, 'Kinga', '0659200318', 'kingasoros@gmail.com', 'y7uu57u4'),
(5, 'Kinga', '0659200318', 'kingasoros@gmail.com', 'kiir67yuik6t'),
(6, 'Kinga', '0659200318', 'kingasoros@gmail.com', 'kiir67yuik6t'),
(7, 'Kinga', '0659200318', 'kingasoros@gmail.com', 'ot5o89io58'),
(8, 'Kinga', '0659200318', 'kingasoros@gmail.com', 'gtui8o;.gi'),
(9, 'Kinga', '0659200318', 'kingasoros@gmail.com', 'gtui8o;.gi'),
(10, 'Kinga', '0659200318', 'kingasoros@gmail.com', 'tgrjurs5tju6'),
(11, 'Kinga', '0659200318', 'kingasoros@gmail.com', 'tgrjurs5tju6'),
(12, 'Kinga', '0659200318', 'kingasoros@gmail.com', 'ykmyuhktder');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
