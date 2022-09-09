-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Wrz 2021, 00:44
-- Wersja serwera: 10.4.18-MariaDB
-- Wersja PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `forum`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `posts`
--

CREATE TABLE `posts` (
  `ID` int(11) NOT NULL,
  `Autor` text COLLATE utf8mb4_polish_ci NOT NULL,
  `Data_utworzenia` date NOT NULL,
  `Godzina` text COLLATE utf8mb4_polish_ci NOT NULL,
  `Tytul` text COLLATE utf8mb4_polish_ci NOT NULL,
  `Tresc` text COLLATE utf8mb4_polish_ci NOT NULL,
  `Popularnosc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `posts`
--

INSERT INTO `posts` (`ID`, `Autor`, `Data_utworzenia`, `Godzina`, `Tytul`, `Tresc`, `Popularnosc`) VALUES
(4, 'ROOT', '2021-09-05', '17:41', 'OGŁOSZENIE', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque luctus id lacus id hendrerit. Etiam pulvinar nibh nec neque blandit pretium. Integer vitae orci interdum, blandit est ac, tincidunt nulla. Nullam interdum sapien at ante posuere, at interdum dolor hendrerit. Pellentesque accumsan maximus eros, non posuere turpis consequat nec. Maecenas at urna tristique, auctor ex porta, condimentum metus. Cras efficitur felis quis enim tincidunt euismod.', 1001),
(5, 'Wojciech', '2021-09-06', '17:42', 'Elektronika', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque luctus id lacus id hendrerit. Etiam pulvinar nibh nec neque blandit pretium. Integer vitae orci interdum, blandit est ac, tincidunt nulla. Nullam interdum sapien at ante posuere, at interdum dolor hendrerit. Pellentesque accumsan maximus eros, non posuere turpis consequat nec. Maecenas at urna tristique, auctor ex porta, condimentum metus. Cras efficitur felis quis enim tincidunt euismod.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque luctus id lacus id hendrerit. Etiam pulvinar nibh nec neque blandit pretium. Integer vitae orci interdum, blandit est ac, tincidunt nulla. Nullam interdum sapien at ante posuere, at interdum dolor hendrerit. Pellentesque accumsan maximus eros, non posuere turpis consequat nec. Maecenas at urna tristique, auctor ex porta, condimentum metus. Cras efficitur felis quis enim tincidunt euismod.', 1),
(6, 'USER3', '2021-09-07', '17:43', 'Motorsport', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque luctus id lacus id hendrerit. Etiam pulvinar nibh nec neque blandit pretium. Integer vitae orci interdum, blandit est ac, tincidunt nulla. Nullam interdum sapien at ante posuere, at interdum dolor hendrerit. Pellentesque accumsan maximus eros, non posuere turpis consequat nec. Maecenas at urna tristique, auctor ex porta, condimentum metus. Cras efficitur felis quis enim tincidunt euismod.', 1),
(7, 'USER3', '2021-09-08', '17:43', 'Fotografia', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque luctus id lacus id hendrerit. Etiam pulvinar nibh nec neque blandit pretium. Integer vitae orci interdum, blandit est ac, tincidunt nulla.', 1),
(8, 'Kasprzakowy Tłuczek', '2021-09-09', '19:15', 'Na nowo o fotografii', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque luctus id lacus id hendrerit. Etiam pulvinar nibh nec neque blandit pretium. Integer vitae orci interdum, blandit est ac, tincidunt nulla. Nullam interdum sapien at ante posuere, at interdum dolor hendrerit. Pellentesque accumsan maximus eros, non posuere turpis consequat nec.', 2),
(9, 'Kasprzakowy Tłuczek', '2021-09-10', '23:22', 'Jakiś kolejny', 'Następny wpis dla zrobienia jakiejkolwiek skali tegoż forum romanum.', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Login` text COLLATE utf8mb4_polish_ci NOT NULL,
  `Haslo` text COLLATE utf8mb4_polish_ci NOT NULL,
  `Nick` text COLLATE utf8mb4_polish_ci NOT NULL,
  `Mail` text COLLATE utf8mb4_polish_ci NOT NULL,
  `Data_urodzenia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`ID`, `Login`, `Haslo`, `Nick`, `Mail`, `Data_urodzenia`) VALUES
(9, 'root', 'root1', 'ROOT', 'r@wp.pl', '2000-05-14'),
(12, 'user3', 'user3', 'USER3', 'u@wp.pl', '1412-02-21'),
(13, 'wojtek', 'wojtek1', 'Wojciech', 'w@wp.pl', '2002-10-30'),
(14, 'uczen', 'kasprzak', 'Kasprzakowy Tłuczek', 'uczen@wp.pl', '2004-01-15'),
(15, '', '', '', '', '0000-00-00'),
(16, '', '', '', '', '0000-00-00'),
(17, 'dsfds', 'fdsfds', 'fdsfds', 'fds@w.pl', '2021-08-31');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `posts`
--
ALTER TABLE `posts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
