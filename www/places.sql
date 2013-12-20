-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 21 2013 г., 01:45
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
(2, 'KPI', 'The biggest Technical University in Europe!', 50.4496, 30.4608, '../../images/2.jpg'),
(3, 'tower', 'Interesting architecture desision on Strletskaya Street, situated near Norway Embasy, metro station Zoloti Vorota', 50.4519, 30.5108, '../../images/3.jpg'),
(4, 'Church', 'St. Nickola`s Church on the water. Only one church in Ukraine situated on the water. Unusual in its location and beauty of the church buildings, the Ukrainian neo-Baroque style, is a place not only endearing church worship, but also a monument to the dead all for sailors and seamen who faithfully served his homeland.', 50.4644, 30.5258, '../../images/4.jpg'),
(5, 'Little Prince', 'Everyone''s favorite Exupery`s character is located on the Landscape Alley.', 50.4565, 30.5154, '../../images/5.jpg'),
(6, 'Peyzashnaya Alleya', 'Landscape Alley - recreation area in Kiev, built on the site razed defense walls of the Upper City. Originates from osmotrovye site near the National Museum of History of Ukraine and ends between buildings number 36 and 40 on the street Big Zhitomir. Alley was built in the early 1980s by architect Abraham Miletsky.\nThe purpose of the mall buildings - create an opportunity inspection tourists species hem and the Dnieper from the height of the historic Upper Town. In the alley are a lot of unusual sculptures and compositions', 50.4558, 30.51, '../../images/9.jpg'),
(7, 'Castle', 'The building, constructed in 1898 in a medieval castle , caused a lot of debate and controversy among kievovedov . Appeared tenacious legend about a certain graph and tobacco manufacturer Salve ( in Kiev a really long time cigarettes were produced with the same name ) , who supposedly built this imposing tower for his mistress and occasionally dropped in to her incognito. Some researchers thought the house owner Baron Maxim Shteingel known entrepreneur and winemaker . And the name of " the castle of Baron " stuck behind the house in Yaroslav shaft tightly.', 50.4493, 30.5122, '../../images/23.jpg'),
(8, 'Cat Monument', 'Monument Pantyusha Cat - Persian cat Pantyusha monument in Kiev, staged in 1998 in Zolotovorotsky square , opposite the restaurant " Pantagruel " , where lived cat.\nIn the mid-1990s Margarita Sichkar Kiev restaurateur and restaurant director " Pantagruel ", which is located near the Golden Gate , the idea to start a restaurant with a cat, which was to become characteristic of the institution. Thus, in the restaurant appeared gray Persian cat Pantyusha has been rightfully extremely popular among visitors and residents of institutions . The animal died in a fire that occurred at the restaurant. After that, patrons began to transfer the money to repair and restore the restaurant for the same money , it was decided to erect a monument and a cat', 50.4487, 30.5124, '../../images/24.jpg'),
(9, 'Andrews Descent ', 'Andriyivskyy Descent is a historic descent connecting Kiev''s Upper Town neighborhood and the historically commercial Podil neighborhood. The street, often advertised by tour guides and operators as the "Montmartre of Kiev", is a major tourist attraction of the city.', 50.4602, 30.5146, '../../images/10.jpg'),
(10, 'Khreshatick', 'Khreshchatyk is the main street of Kiev, Ukraine. The street has a length of 1.2 km. It stretches from the European Square (northeast) through the Maidan and to Bessarabska Square (southwest) where the Besarabsky Market is located. Along the street are located buildings of the Kiev City Administration which contains both the city''s council and the state administration, the Main Post Office, the Ministry of Agrarian Policy, the State Committee of Television and Radio Broadcasting, the Central Department Store (TsUM), the Besarabka Market, the Ukrainian House, and others.', 50.4486, 30.5225, '../../images/7.jpg'),
(11, 'Vozdvishenskaya Street', 'Vozdviz located between mountains Poskotinka , Castle and Landscape alley parallel to Andrew''s Descent , and goes directly to the Lower Val street , the main thoroughfare of hem . Consists of streets Exaltation , Goncharnaya , and Degtyarnaya Kozhemyatskaya .\nUntil now, there is a perception that the tract located the earliest settlements on the territory of Kiev , which date back to the I century AD. Reasons given for this found on the site of Roman coins . However, despite the numerous excavations there have not found the remains of dwellings . The first structures appeared after 1150 .\nVozdvizhenka lived one of the most popular Ukrainian characters - Cyril ( Nikita ) Kozhumyaka . According to legend , he saved the people of Kiev from death in a duel with the snake - eater ( symbol nomadic enemies in ancient Russia ) .\nHere , on Vozdvizhenka born Mikhail Bulgakov . The future writer was baptized in the Holy Cross church its abbot , in whose house parents Bulgakov rented accommodation before they moved into an apartment on Andreevskiy Descent', 50.4593, 30.5129, '../../images/11.jpg'),
(12, 'Andrews Descent', 'Andriyivskyy Descent is a historic descent connecting Kiev''s Upper Town neighborhood and the historically commercial Podil neighborhood. The street, often advertised by tour guides and operators as the "Montmartre of Kiev", is a major tourist attraction of the city.', 50.4602, 30.5146, '../../images/12.jpg'),
(13, 'Petra Sagaydachnogo Street', 'At the intersection of Sagaydachnogo and Post Office Square is the Church of the Nativity (1810-1814 , architect AI Melensky ) next - metro station " Postal Square " funicular. The building number 4 ( the former hotel "Serbia ", not preserved) in 1894-1896 lived Russian writer AIKuprin , then it was installed a plaque . Preserved many houses XVIII-XIX Art. Among them - the houses of wealthy burghers Balabukh Kiev (№ 27a , 27b , end of XVIII - 30th years of XIX c.) , Building master Zolotar Boxes Fedor (№ 20 , 1830 Stanzani architect ), the building of Kiev merchant Dehtyareva P. (№ 16/5 , 1830 ), № 21, 23, 25/3 , 27, 29 , 31, 35 , 37, 41 (XIX c.) .\nModern street view is not very different from the initial building of XIX century. Streets are lined with mostly two-storey buildings . The front lounge yard monument Sagaydachnogo ', 50.4609, 30.5219, '../../images/13.jpg'),
(14, 'Embankment neae Pochtovaya Sqare', 'New Embankment near the Postal Square - great view of the Dnieper, hem, footbridge', 50.4581, 30.5273, '../../images/14.jpg'),
(15, 'Stairs', 'Cozy descent / ascent and descent connecting Vladimir descent and Embankment . Especially beautiful in autumn', 50.4554, 30.5286, '../../images/15.jpg'),
(16, 'Vladimirskiy Descent', 'Vladimir descent (Ukrainian Volodimirsky uzvіz ) - old street of Kiev . Leads from the European area down to the Post Office Square . Descent emerged in the early XVIII century, when in 1711 began to make way through the Mikhailovsky mountain. Descent was originally untitled , later called Bridge Street , as it was the first city street with a brick finish. In 1869-1919 he was a part of the Alexander ( Alexander Large ) streets leading from the square to the current Arsenal Kontraktowa area and after 1919 street called Revolution. The modern name Uzvis above it a monument to Prince Vladimir . By Vladimir descent adjacent street Sagaydachnogo , and Khreschatyk Street Hrushevsky .\nBy Vladimir descent in 1892, was built first in the Russian Empire tram line 1 km long .', 50.4544, 30.5277, '../../images/16.jpg'),
(17, 'The Tsoy`s Wall', 'On Thursday, August 15, the day of remembrance of the legendary musician Viktor Tsoi in Kiev at street Hrushevskoho opened 4-b wall memory of the founder and leader of the band Kino. This place once coveted many fans of Russian rock.', 50.4512, 30.5274, '../../images/17.jpg'),
(18, 'Victory Square', 'A crossing of several historic streets such as Saksahanskoho street, Taras Shevchenko boulevard, Zhylianska street - it is a beginning of Peremogy prospect - one of the longest and broadest avenues in the city.\nThe most notable building on the square is the Kiev Circus.\n30 m (98 ft)-tall Victory monument and twin houses on the both sides of the Peremohy prospect with "1941" and "1945" markings on their tops are situated on the square to commemorate the victory.', 50.4467, 30.494, '../../images/18.jpg'),
(19, 'Brige', 'Park Bridge - a pedestrian bridge across the Dnieper River, which connects the central part of Kiev parklands and beaches Trukhaniv island. Built in 1956-1957, the project institute "Ukrproektstalkonstruktsiya" with the participation of the Institute of Electric Welding. Paton AN RSR.', 50.457, 30.5345, '../../images/19.jpg'),
(20, 'Kiev Pechersk Lavra', 'The Kiev Pechersk Lavra contains numerous architectural monuments, ranging from bell towers to cathedrals to underground cave systems and to strong stone fortification walls. The main attractions of the Lavra include Great Lavra Belltower, the notable feature of the Kiev skyline, and the Dormition Cathedral, destroyed in World War II, and fully reconstructed in recent years. Other churches and cathedrals of the Lavra include: the Refectory Church, the Church of All Saints, the Church of the Saviour at Berestove, the Church of the Exaltation of Cross, the Church of the Trinity, the Church of the Nativity of the Virgin, the Church of the Conception of St. Anne, and the Church of the Life-Giving Spring. The Lavra also contains many other constructions, including: the St. Nicholas Monastery, the Kiev Theological Academy and Seminary, and the Debosquette Wall.', 50.4349, 30.5556, '../../images/20.jpg'),
(21, 'Magdeburg Column', 'Monument to the Magdeburg Rights is a monument in Podil Raion, Kiev located at foothills of the former Mykhailo Hill right next to the Shore Highway. It is traditionally considered to be the oldest city''s monument. On this place The Christianization of Kievan Rus''[1] took place.', 50.4563, 30.5299, '../../images/6.jpg'),
(22, 'Golden Gate', 'The Golden Gates of Kiev is a major landmark of the Ancient Kiev and historic gateway in the ancient city fortress, located in the capital of Ukraine. Currently it serves as a museum and can be found on the corner of Volodymyr street and Yaroslaviv Val Street (Yaroslav''s Moat). The name Zoloti Vorota is also used for a nearby theatre and a station of the Kiev Metro.', 50.4489, 30.5135, '../../images/22.jpg'),
(23, 'Mychailovskiy Cathedral', 'St. Michael''s Golden-Domed Monastery (Ukrainian: Михайлівський золотоверхий монастир, Mykhaylivs’kyi zolotoverkhyi monastyr) is a functioning monastery in Kiev, the capital of Ukraine. The monastery is located on the right bank of the Dnieper River on the edge of a bluff northeast of the Saint Sophia Cathedral. The site is located in the historic administrative Uppertown and overlooks the city''s historical commercial and merchant quarter, the Podil neighbourhood.', 50.4554, 30.5234, '../../images/8.jpg'),
(24, 'St. Sophiya Cathedral', 'Holy Sophia Cathedral is a cathedral temple of Kiev Metropolis (Ecumenical Patriarchate of Constantinople) in 1037-1299 and second one after the Church of the Tithes. Today, it is an outstanding architectural monument of Kievan Rus'' and a multi-structural complex-museum. The cathedral is one of the city''s best known landmarks and the first patrimony on territory of Ukraine to be inscribed on the World Heritage List along with the Kiev Cave Monastery complex.[2][nb 1] Aside from its main building, the cathedral includes an ensemble of supporting structures such as a bell tower, the House of Metropolitan, and others. In 2011 the historic site was reassigned from the jurisdiction of the Ministry of Regional Development of Ukraine to the Ministry of Culture of Ukraine.[4][5] One of the reasons for that move was the fact that both "Sofia Kyivska" and Kiev Pechersk Lavra are recognized by the UNESCO World Heritage Program as one complex, while in Ukraine the two were governed by different government entities.', 50.453, 30.5152, '../../images/21.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
