-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Час створення: Січ 07 2023 р., 10:01
-- Версія сервера: 5.7.34
-- Версія PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `addImg`
--

-- --------------------------------------------------------

--
-- Структура таблиці `addImg`
--

CREATE TABLE `addImg` (
  `id` int(10) NOT NULL,
  `name` varchar(225) NOT NULL,
  `last_name` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `addImg`
--

INSERT INTO `addImg` (`id`, `name`, `last_name`, `image`) VALUES
(27, 'Denus', 'Palasiyk', 'uploadImage/IMG_3073.jpg'),
(28, 'Evgenio', 'Palasiyk', 'uploadImage/IMG_2613.jpg'),
(31, 'dfvdsv', 'vzffd', 'uploadImage/IMG_2688.jpg'),
(34, 'Yurii', 'Palasiyk', 'uploadImage/IMG_2711.jpg'),
(36, 'sdfg', 'ghhjk', 'uploadImage/IMG_2718.jpg'),
(37, 'Palasiuk', 'aevrev', 'uploadImage/IMG_2496.jpg'),
(45, '  zenia  update', '', 'uploadImage/IMG_2899.jpg'),
(46, 'adfvad', 'dvdfv', 'uploadImage/IMG_2963.jpg'),
(47, 'ditu', 'bvvb', 'uploadImage/IMG_2652.jpg'),
(48, 'asdfgghjl', 'vbn', 'uploadImage/IMG_2798.jpg'),
(49, 'dfvdfzv', 'dfvdfvdf', 'uploadImage/IMG_2767.jpg'),
(50, ' hand', '', 'uploadImage/IMG_2943.jpg');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `addImg`
--
ALTER TABLE `addImg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `addImg`
--
ALTER TABLE `addImg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
