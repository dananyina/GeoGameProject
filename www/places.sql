-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 20 2013 г., 23:26
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `beautiful_places`
--

-- --------------------------------------------------------

--
-- Структура таблицы `places`
--

CREATE TABLE IF NOT EXISTS `places` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `description` text NOT NULL,
  `x` float NOT NULL,
  `y` float NOT NULL,
  `path_img` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Дамп данных таблицы `places`
--

INSERT INTO `places` (`id`, `name`, `description`, `x`, `y`, `path_img`) VALUES
(1, 'Maidan Nezalezhnosti', 'Maidan Nezalezhnosti (literally: Independence Square) is the central square of Kiev, the capital city of Ukraine. One of the city''s main squares, it is located on Khreshchatyk Street in the Shevchenko Raion. The square has been known under many different names, but often it is called simply Maidan.', 50.4502, 30.5234, '../../images/1.jpg'),
(2, 'KPI', 'university', 50.4496, 30.4608, '../../images/2.jpg'),
(3, 'tower', 'Башня на улице Стрелецкой', 50.4519, 30.5108, '../../images/3.jpg'),
(4, 'Church', 'Церковь на воде', 50.4644, 30.5258, '../../images/4.jpg'),
(5, 'Little Prince', 'Маленький Принц на пейзажной аллее', 50.4565, 30.5154, '../../images/5.jpg'),
(6, 'Peyzashnaya Alleya', 'Пейзажная аллея', 50.4558, 30.51, '../../images/9.jpg'),
(7, 'Castle', 'Замок на Ярославовом Валу', 50.4493, 30.5122, '../../images/23.jpg'),
(8, 'Cat Monument', 'Памятник коту Пантюше', 50.4487, 30.5124, '../../images/24.jpg'),
(9, 'Andrews Downhill', 'Андреевский спуск', 50.4602, 30.5146, '../../images/10.jpg'),
(10, 'Khreshatick', 'Крещатик', 50.4486, 30.5225, '../../images/7.jpg'),
(11, 'Vozdvishenskaya Street', 'Улица Воздвиженская', 50.4593, 30.5129, '../../images/11.jpg'),
(12, 'Andrews Downhill', 'Андреевский Узвоз', 50.4602, 30.5146, '../../images/12.jpg'),
(13, 'Petra Sagaydachnogo Street', 'Улица Петра Сагайдачного', 50.4609, 30.5219, '../../images/13.jpg'),
(14, 'Embankment neae Pochtovaya Sqare', 'Набережная ', 50.4581, 30.5273, '../../images/14.jpg'),
(15, 'Stairs', 'Лестница ', 50.4554, 30.5286, '../../images/15.jpg'),
(16, 'Vladimerskiy Downhill', 'Владимирский спуск', 50.4544, 30.5277, '../../images/16.jpg'),
(17, 'The Tsoy`s Wall', 'Стена Цоя', 50.4512, 30.5274, '../../images/17.jpg'),
(18, 'Victory Square', 'Площадь Победы', 50.4467, 30.494, '../../images/18.jpg'),
(19, 'Brige', 'Пешеходный мост на Труханов остров', 50.457, 30.5345, '../../images/19.jpg'),
(20, 'Kiev Pechersk Lavra', 'Киево-Печерская Лавра', 50.4349, 30.5556, '../../images/20.jpg'),
(21, 'Magdeburg Column', 'Коллона Магдебурского права', 50.4563, 30.5299, '../../images/6.jpg'),
(22, 'Golden Gate', 'Золотые ворота', 50.4489, 30.5135, '../../images/22.jpg'),
(23, 'Mychailovskiy Cathedral', 'Михайловский Собор', 50.4554, 30.5234, '../../images/8.jpg'),
(24, 'St. Sophiya Cathedral', 'Софиеевский Собор', 50.453, 30.5152, '../../images/21.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
