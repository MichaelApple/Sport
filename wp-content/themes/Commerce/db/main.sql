-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Час створення: Бер 02 2016 р., 16:22
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
-- Структура таблиці `main`
--

CREATE TABLE IF NOT EXISTS `main` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date_of_proposal` date NOT NULL,
  `valid_until` date NOT NULL,
  `type_proposal` varchar(100) NOT NULL,
  `sport` varchar(100) NOT NULL,
  `other_sponsors` text NOT NULL,
  `media_partners` text NOT NULL,
  `notes` text NOT NULL,
  `photo` varchar(200) NOT NULL,
  `adress` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `zip` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` int(11) NOT NULL,
  `website` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `twitter` varchar(200) NOT NULL,
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
  `income6` int(11) NOT NULL,
  `checkbox1` text NOT NULL,
  `checkbox2` tinyint(4) NOT NULL,
  `checkbox3` tinyint(4) NOT NULL,
  `checkbox4` tinyint(4) NOT NULL,
  `checkbox5` tinyint(4) NOT NULL,
  `checkbox6` tinyint(4) NOT NULL,
  `checkbox7` tinyint(4) NOT NULL,
  `checkbox8` tinyint(4) NOT NULL,
  `checkbox9` tinyint(4) NOT NULL,
  `checkbox10` tinyint(4) NOT NULL,
  `checkbox11` tinyint(4) NOT NULL,
  `checkbox12` tinyint(4) NOT NULL,
  `checkbox13` tinyint(4) NOT NULL,
  `checkbox14` tinyint(4) NOT NULL,
  `checkbox15` tinyint(4) NOT NULL,
  `checkbox16` tinyint(4) NOT NULL,
  `checkbox17` tinyint(4) NOT NULL,
  `checkbox18` tinyint(4) NOT NULL,
  `checkbox19` tinyint(4) NOT NULL,
  `checkbox20` tinyint(4) NOT NULL,
  `checkbox21` tinyint(4) NOT NULL,
  `checkbox22` tinyint(4) NOT NULL,
  `checkbox23` tinyint(4) NOT NULL,
  `checkbox24` tinyint(4) NOT NULL,
  `checkbox25` tinyint(4) NOT NULL,
  `checkbox26` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Дамп даних таблиці `main`
--

INSERT INTO `main` (`id`, `status`, `title`, `date_of_proposal`, `valid_until`, `type_proposal`, `sport`, `other_sponsors`, `media_partners`, `notes`, `photo`, `adress`, `city`, `state`, `zip`, `country`, `name`, `phone`, `website`, `email`, `facebook`, `twitter`, `male`, `female`, `age1`, `age2`, `age3`, `age4`, `age5`, `age6`, `age7`, `edu1`, `edu2`, `edu3`, `edu4`, `edu5`, `marital1`, `marital2`, `marital3`, `income1`, `income2`, `income3`, `income4`, `income5`, `income6`, `checkbox1`, `checkbox2`, `checkbox3`, `checkbox4`, `checkbox5`, `checkbox6`, `checkbox7`, `checkbox8`, `checkbox9`, `checkbox10`, `checkbox11`, `checkbox12`, `checkbox13`, `checkbox14`, `checkbox15`, `checkbox16`, `checkbox17`, `checkbox18`, `checkbox19`, `checkbox20`, `checkbox21`, `checkbox22`, `checkbox23`, `checkbox24`, `checkbox25`, `checkbox26`) VALUES
(1, 0, 'Windsport', '0000-00-00', '0000-00-00', 'three', 'hockey', 'Windsport', 'Windsport', 'Windsport', '', 'Windsport', 'Windsport', 'Windsport', '777', 'Windsport', 'Windsport', 777, 'Windsport', 'Windsport', 'Windsport', 'Windsport', 30, 70, 20, 10, 10, 20, 20, 20, 10, 20, 25, 25, 20, 10, 30, 30, 40, 10, 35, 25, 20, 15, 10, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 1, 'Proposal1', '2016-11-14', '2016-11-24', 'one', 'football', 'Proposal1', 'Proposal1', 'Proposal1', '', 'Proposal1', 'Proposal1', 'Proposal1', '777', 'Proposal1', 'Proposal1', 777, 'Proposal1', 'Proposal1', 'Proposal1', 'Proposal1', 40, 60, 30, 10, 10, 20, 10, 20, 10, 10, 20, 10, 20, 40, 40, 30, 50, 40, 30, 10, 10, 20, 20, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 0, 'Proposal2', '2016-11-14', '2016-11-24', 'one', 'football', 'Proposal2', 'Proposal2', 'Proposal2', '', 'Proposal1', 'Proposal1', 'Proposal1', '777', 'Proposal1', 'Proposal1', 777, 'Proposal1', 'Proposal1', 'Proposal1', 'Proposal1', 40, 60, 20, 10, 10, 20, 10, 20, 10, 10, 20, 10, 20, 40, 20, 30, 50, 30, 20, 10, 10, 20, 20, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 0, 'Proposal3', '2016-11-14', '2016-11-24', 'two', 'tenis', 'Proposal3', 'Proposal3', 'Proposal3', '', 'Proposal3', 'Proposal3', 'Proposal3', '888', 'Proposal3', 'Proposal3', 75768, 'Proposal3', 'Proposal3', 'Proposal3', 'Proposal3', 55, 45, 20, 10, 10, 20, 10, 20, 10, 10, 20, 25, 25, 20, 30, 30, 40, 20, 10, 20, 20, 10, 20, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 1, 'Proposal3', '2016-11-14', '2016-11-24', 'two', 'tenis', 'Proposal3', 'Proposal3', 'Proposal3', '', 'Proposal3', 'Proposal3', 'Proposal3', '888', 'Proposal3', 'Proposal3', 75768, 'Proposal3', 'Proposal3', 'Proposal3', 'Proposal3', 55, 45, 20, 10, 10, 20, 10, 20, 10, 10, 20, 25, 25, 20, 30, 30, 40, 20, 10, 20, 20, 10, 20, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 0, 'Proposal4', '2016-11-14', '2016-11-24', 'two', 'tenis', 'Proposal3', 'Proposal3', 'Proposal3', '', 'Proposal3', 'Proposal3', 'Proposal3', '888', 'Proposal3', 'Proposal3', 75768, 'Proposal3', 'Proposal3', 'Proposal3', 'Proposal3', 55, 45, 20, 10, 10, 20, 10, 20, 10, 10, 20, 25, 25, 20, 30, 30, 40, 20, 10, 20, 20, 10, 20, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 1, 'Proposal4', '2016-11-14', '2016-11-24', 'two', 'tenis', 'Proposal3', 'Proposal3', 'Proposal3', '', 'Proposal3', 'Proposal3', 'Proposal3', '888', 'Proposal3', 'Proposal3', 75768, 'Proposal3', 'Proposal3', 'Proposal3', 'Proposal3', 55, 45, 20, 10, 10, 20, 10, 20, 10, 10, 20, 25, 25, 20, 30, 30, 40, 20, 10, 20, 20, 10, 20, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
