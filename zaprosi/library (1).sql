-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 13 2022 г., 23:02
-- Версия сервера: 10.4.22-MariaDB
-- Версия PHP: 8.1.2

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
-- Структура таблицы `elib`
--

CREATE TABLE `elib` (
  `id` int(11) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `author` varchar(30) DEFAULT NULL,
  `yearB` int(11) DEFAULT NULL,
  `publishing` varchar(20) DEFAULT NULL,
  `subjects` varchar(70) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `elib`
--

INSERT INTO `elib` (`id`, `title`, `author`, `yearB`, `publishing`, `subjects`, `price`, `photo`) VALUES
(1, 'Меняя маски', 'Николай Метельский', 2014, 'Litres', 'Очень интресно', 140, '../img/mask.jpg'),
(2, 'Академия бездарностей', 'Ольга Валентеева', 2022, 'author.today', 'Очень интресно', 110, '../img/aka.jpg'),
(3, 'Медвежонок', 'Василий Маханенко', 2021, 'author.today', 'Супер!', 100, '../img/med.jpg'),
(4, 'Пупсик', 'Федин Андрей Анатольевич', 2020, 'Litres', 'Отлично', 140, '../img/pups.jpg'),
(5, 'Сердце Дракона', 'Кирилл Клеванский', 2018, 'Litres', 'В топ 100 Amazon', 180, '../img/dh.jpg'),
(6, 'sada', 'asdasd', 12, 'asd', 'asd', 12, 'sss.jpg'),
(7, 'фывафыва', 'OLOLфыва', 2000, 'фыва', 'фыва', 300, 'cib.jpg'),
(8, 'asd', 'asd', 21, 'asd', 'asd', 123, 'pic6.jpg'),
(25, 'asdas', 'ada', 123, 'sad', '1232', 12312, 'Screenshot_1.png'),
(26, 'asdas', 'asd', 12, 'asd', 'asd', 12, 'qwe.jpg'),
(27, 'adasd', 'as', 1212, 'adsadsa', '12e1e12e1', 1231, 'images.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `elib`
--
ALTER TABLE `elib`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `elib`
--
ALTER TABLE `elib`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
