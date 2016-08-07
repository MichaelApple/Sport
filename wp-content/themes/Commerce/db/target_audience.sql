-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Час створення: Січ 28 2016 р., 19:54
-- Версія сервера: 5.5.38-log
-- Версія PHP: 5.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База даних: `Commerce`
--

-- --------------------------------------------------------

--
-- Структура таблиці `target_audience`
--

CREATE TABLE IF NOT EXISTS `target_audience` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `age1` int(11) NOT NULL,
  `age2` int(11) NOT NULL,
  `age3` int(11) NOT NULL,
  `age4` int(11) NOT NULL,
  `age5` int(11) NOT NULL,
  `age6` int(11) NOT NULL,
  `age7` int(11) NOT NULL,
  `edu1` int(11) NOT NULL,
  `edu2` int(11) NOT NULL,
  `edu3` int(11) NOT NULL,
  `edu4` int(11) NOT NULL,
  `edu5` int(11) NOT NULL,
  `marital1` int(11) NOT NULL,
  `marital2` int(11) NOT NULL,
  `marital3` int(11) NOT NULL,
  `income1` int(11) NOT NULL,
  `income2` int(11) NOT NULL,
  `income3` int(11) NOT NULL,
  `income4` int(11) NOT NULL,
  `income5` int(11) NOT NULL,
  `title2` int(11) NOT NULL,
  `max_gender` int(11) NOT NULL,
  `max_age` int(11) NOT NULL,
  `max_edu` int(11) NOT NULL,
  `max_marital` int(11) NOT NULL,
  `max_income` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
