-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2022 at 08:14 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `elib`
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
-- Dumping data for table `elib`
--

INSERT INTO `elib` (`id`, `title`, `author`, `yearB`, `publishing`, `subjects`, `price`, `photo`) VALUES
(1, 'Меняя маски', 'Николай Метельский', 2014, 'Litres', 'Очень интресно', 140, '../img/mask.jpg'),
(2, 'Академия бездарностей', 'Ольга Валентеева', 2022, 'author.today', 'Очень интресно', 110, '../img/aka.jpg'),
(3, 'Медвежонок', 'Василий Маханенко', 2021, 'author.today', 'Супер!', 100, '../img/med.jpg'),
(4, 'Пупсик', 'Федин Андрей Анатольевич', 2020, 'Litres', 'Отлично', 140, '../img/pups.jpg'),
(5, 'Сердце Дракона', 'Кирилл Клеванский', 2018, 'Litres', 'В топ 100 Amazon', 180, '../img/dh.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elib`
--
ALTER TABLE `elib`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elib`
--
ALTER TABLE `elib`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
