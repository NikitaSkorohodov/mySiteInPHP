-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 08 2023 г., 13:42
-- Версия сервера: 10.4.18-MariaDB
-- Версия PHP: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `library`
--

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `bookname`, `author`, `price`, `description`, `image`) VALUES
(1, 'HTML and CSS', 'Jon Duckett', '17.19', 'Every day, more and more people want to learn some HTML and CSS. Joining the profess', 'HTMLandCSS_Duckett.jpg'),
(2, 'HTML5', 'Matthew MacDonald', '27.65', 'HTML5 is more than a markup language-it\'s a collection of several independent web st', 'HTML5.jpg'),
(3, 'Head First JavaScript Programming', 'Eric Freeman, Elisabeth Robson', '37.60', 'This brain-friendly guide teaches you everything from JavaScript language fundamentals', 'HeadFirstJavaScript.jpg'),
(4, 'Head First HTML5 Programming', 'Eric Freeman, Elisabeth Robson', '35.35', 'HTML has been on a wild ride. Sure, HTML started as a mere markup language, but more', 'HeadFirstHTML5.jpg'),
(5, 'jQuery in Action', 'Bear Bibeault, Yehuda Katz', '32.12', 'A really good web development framework anticipates your needs. Query does more-it', 'JQueryInAction.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
