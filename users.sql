-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 19 2014 г., 12:41
-- Версия сервера: 5.6.12-log
-- Версия PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `smla`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `users_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `users_login` varchar(30) NOT NULL,
  `users_password` varchar(32) NOT NULL,
  `users_hash` varchar(32) NOT NULL,
  PRIMARY KEY (`users_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`users_id`, `users_login`, `users_password`, `users_hash`) VALUES
(1, 'macsanta', 'd0fa9ead4ba8f67b80f82334a4beb090', '8512f4b5455a20e763b0ed2d87572501'),
(2, 'test', 'd0fa9ead4ba8f67b80f82334a4beb090', 'c0871b36799a09eeae97c070e5a33104'),
(3, 'orest', 'd0fa9ead4ba8f67b80f82334a4beb090', '6d964523e2597986a83eabcd6232117b');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
