-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 28 2018 г., 13:21
-- Версия сервера: 10.1.36-MariaDB
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `variant1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `image_id` varchar(255) NOT NULL,
  `ext` varchar(255) NOT NULL,
  `click` int(11) NOT NULL DEFAULT '0',
  `dir_big` varchar(255) NOT NULL,
  `dir_small` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `image`
--

INSERT INTO `image` (`id`, `image_id`, `ext`, `click`, `dir_big`, `dir_small`) VALUES
(9, '5bfe31ed18692', 'jpg', 10, 'img/big/', 'img/small/'),
(10, '5bfe33f97dcd9', 'jpg', 5, 'img/big/5bfe33f97dcd9.jpg', 'img/small/5bfe33f97dcd9.jpg'),
(11, '5bfe827dbfaaa', 'jpg', 6, 'img/big/', 'img/small/'),
(12, '5bfe8284e290c', 'jpg', 10, 'img/big/', 'img/small/'),
(13, '5bfe828c2fed6', 'png', 10, 'img/big/', 'img/small/'),
(14, '5bfe82945114d', 'jpg', 10, 'img/big/', 'img/small/'),
(15, '5bfe829a753cb', 'jpg', 10, 'img/big/', 'img/small/'),
(16, '5bfe82a993d0d', 'jpg', 10, 'img/big/', 'img/small/'),
(17, '5bfe82adb4ad6', 'jpg', 10, 'img/big/', 'img/small/'),
(18, '5bfe8308e5380', 'jpg', 10, 'img/big/', 'img/small/');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
