-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Июн 22 2019 г., 08:27
-- Версия сервера: 5.6.43
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
-- База данных: `nazarov`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authorization`
--

CREATE TABLE `authorization` (
  `id` int(11) NOT NULL,
  `login` varchar(128) NOT NULL,
  `pass` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `authorization`
--

INSERT INTO `authorization` (`id`, `login`, `pass`) VALUES
(1, 'nazarov', '$2y$12$Pl3yb53nwgPd/DiH6j5LuunsL7f4.cvvouH1ZAIrW2hESaLRXUhBK'),
(2, 'roland', '123678'),
(3, 'geralt', '123456'),
(4, 'fess', '24667869');

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `session_id` varchar(128) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `address` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `author` varchar(128) NOT NULL,
  `name_book` varchar(128) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `address`, `name`, `author`, `name_book`, `price`) VALUES
(1, 'img', 'image1.jpg', 'Ursula Le Guin ', '\"The Wizard of Earthsea\"', 1200),
(2, 'img', 'image2.jpg', 'George R. R. Martin', '\"Song of Ice and Fire\"', 1250),
(3, 'img', 'image3.jpg', 'J.K. Rowling', '\"Harry Potter\"', 1800),
(4, 'img', 'image4.jpg', 'J. R. R. Tolkien', '\"Lord of the Rings\"', 1600),
(5, 'img', 'image5.jpg', 'A. Sapkovsky', '\"Witcher\"', 1500),
(6, 'img', 'image6.jpg', 'M. Semenova', '\"Wolfhound\"', 900),
(9, 'img', 'image7.jpg', 'Stiven King', '\"Dark Tower\"', 1550),
(10, 'img', 'image8.jpg', 'S. Lukyanenko', '\"Watches\"', 1000),
(11, 'img', 'image9.jpg', 'N. Perumov', '\"Break Chronicles\"', 1750);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authorization`
--
ALTER TABLE `authorization`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `authorization`
--
ALTER TABLE `authorization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
