-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3308
-- Время создания: Окт 18 2020 г., 11:20
-- Версия сервера: 8.0.18
-- Версия PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yourbank`
--

-- --------------------------------------------------------

--
-- Структура таблицы `clientpersone`
--

DROP TABLE IF EXISTS `clientpersone`;
CREATE TABLE IF NOT EXISTS `clientpersone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fio` varchar(100),
  `account` int(11),
  `createdate` date,
  `summ` int(11),
  `phone` varchar(12),
  PRIMARY KEY (`id`)
);

--
-- Дамп данных таблицы `clientpersone`
--

INSERT INTO `clientpersone` (`id`, `fio`, `account`, `createdate`, `summ`, `phone`) VALUES
(2, 'Ошуркова Татьяна Александровна', 2032435, '2020-10-12', 0, '9193170533'),
(9, 'Дибривный Тимофей Константинович', 3452674, '2020-10-18', 0, '9195630533');

-- --------------------------------------------------------

--
-- Структура таблицы `entry`
--

DROP TABLE IF EXISTS `entry`;
CREATE TABLE IF NOT EXISTS `entry` (
  `date` date NOT NULL,
  `debit` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `type` int(11) NOT NULL
);

--
-- Дамп данных таблицы `entry`
--

INSERT INTO `entry` (`date`, `debit`, `credit`, `value`, `type`) VALUES
('2020-10-12', 2032435, 2032436, 1300, 1),
('2020-10-12', 2032435, 2032437, 1300, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(10),
  `password` varchar(10),
  `type` int(11),
  PRIMARY KEY (`id`)
);

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `type`) VALUES
(1, '1', '1', 1),
(2, '2', '2', 2),
(9, '3', '3', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
