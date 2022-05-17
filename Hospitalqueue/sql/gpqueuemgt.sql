-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Трв 17 2022 р., 13:53
-- Версія сервера: 10.4.22-MariaDB
-- Версія PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `gpqueuemgt`
--

-- --------------------------------------------------------

--
-- Структура таблиці `patientinfo`
--

CREATE TABLE `patientinfo` (
  `username` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `patientinfo`
--

INSERT INTO `patientinfo` (`username`, `password`) VALUES
('John', '12345');

-- --------------------------------------------------------

--
-- Структура таблиці `patientwait`
--

CREATE TABLE `patientwait` (
  `name` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `surname` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `idno` varchar(13) CHARACTER SET utf8mb4 NOT NULL,
  `qNum` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `patientwait`
--

INSERT INTO `patientwait` (`name`, `surname`, `idno`, `qNum`) VALUES
('Андрій', 'Томпсон', '+380914654411', 1),
('Ірина', 'Кріт', '+380823127243', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
