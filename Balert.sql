-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 10 2015 г., 17:12
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `Balert`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `age` int(5) NOT NULL,
  `city` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `name`, `last_name`, `age`, `city`, `email`, `password`, `foto`) VALUES
(3, 'Rostik', 'Ростислав', 'Назымко', 19, 'Харьков', 'fire257@mail.ru', '827ccb0eea8a706c4c34a16891f84e7b', 'Re_pXw3blz4.jpg'),
(4, 'Vova', 'Владимир', 'Сидоренко', 37, 'Миргород', 'fid@mail.ru', 'b59c67bf196a4758191e42f76670ceba', 'BFmXu8LEZSM.jpg'),
(5, 'Ros', 'Вася', 'Пупкин', 28, 'Львов', 'fid234@mail.ru', '81dc9bdb52d04dc20036dbd8313ed055', 'BFmXu8LEZSM.jpg'),
(6, 'Ros', 'Вася', 'Пупкин', 28, 'Львов', 'fid234@mail.ru', '6512bd43d9caa6e02c990b0a82652dca', 'BFmXu8LEZSM.jpg'),
(18, 'Vasya', 'Вася', 'Пупкин', 34, 'Полтава', 'fid@mail.ru', '827ccb0eea8a706c4c34a16891f84e7b', 'BFmXu8LEZSM.jpg'),
(19, 'Katya', 'Катя', 'Назаренко', 23, 'Харьков', 'fire257@mail.ru', 'b59c67bf196a4758191e42f76670ceba', '2014-11-16 13.23.27.jpg'),
(20, 'Sasha', 'Саша', 'Зачкевич', 22, 'Харьков', 'fid@mail.ru', '827ccb0eea8a706c4c34a16891f84e7b', 'Re_pXw3blz4.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
