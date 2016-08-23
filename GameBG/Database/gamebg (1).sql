-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamebg`
--

-- --------------------------------------------------------

--
-- Структура на таблица `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `game_title` varchar(250) NOT NULL,
  `game_desc` text NOT NULL,
  `game_image` varchar(250) NOT NULL,
  `device` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `games`
--

INSERT INTO `games` (`id`, `game_title`, `game_desc`, `game_image`, `device`) VALUES
(1, 'gfrgggg', 'rfgraggae', '27d266576d435f9c32f295c48c9873c7.jpg', ''),
(2, 'fgrgaggre', 'rgrggrggr', '548f366a41900484d2af531b8226bc30.jpg', 'PC'),
(3, 'ragrgar', 'rgagraa', '57d69e8e13eac51896ab80c879deca69.png', 'PC'),
(4, 'gaggae', 'rgragrggaee', '3c47ea47ab0f33e59b77ac6efa908001.jpg', 'PC'),
(5, 'rgeagegaere', 'rgagrgreagare', '3580bd0887e1cc9062428d2967b6d2f2.jpg', 'PC'),
(6, 'rgrgragraegareg', 'ragrgrgra', 'f9e764338ff0dace85df6e0941ab7f96.jpg', 'PC'),
(7, 'rgrgrag', 'rgragrgrae', 'feee352e5bf1c1d47ca2e1b8c1cbd1b1.png', 'PC'),
(8, 'rgagraeg', 'rgragraegr', 'a0f4cc1595e8fdd5eac5434f7432e035.jpg', 'PC'),
(9, 'rgragre', 'gaegregr', '74ef16d1989cf7c2005864c22217717a.png', 'PC'),
(10, 'rgghha', 'rgagragh', 'c833107c90ebb1ed91705d9f805c56cd.jpg', 'PC'),
(11, 'rgraraharh', 'rgragrgra', 'fec888f8c35c957d1d7112ce5d03a2fd.jpg', 'PC'),
(12, 'rghhhe', 'rghragrahrhtae', '0954d8f4bc430e5dc9f3254f8dc29e9a.jpg', 'PC'),
(13, 'trahteahtehaeh', 'rthgarghrhgae', '282236e970d7d11447ce38c0e74ad2a5.jpg', 'PC'),
(17, 'тхххвх', 'тхтсхтхстхт', 'a5d68aecac018c20475f799ed7616d6c.jpg', 'PC'),
(21, 'League of legends', 'Не ми се говори', '19fa094e0160c8c66e4b1d04055f99be.png', 'PC');

-- --------------------------------------------------------

--
-- Структура на таблица `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `color` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `logs`
--

INSERT INTO `logs` (`id`, `username`, `msg`, `color`) VALUES
(129, 'Opera', 'I think this works!', ''),
(130, 'Chrome', 'I think so too!!', ''),
(131, 'Chrome', 'What about you firefox?', ''),
(132, 'Firefox', 'Ugh, yeah seems to be in order :)', ''),
(133, 'Firefox', 'And InternetExplorer?', ''),
(134, 'Chrome', 'How are you down there?', ''),
(135, 'Firefox', 'Hey hey Internet Explorer? Are you there mate?', ''),
(136, 'Chrome', 'Come on say something IE..', ''),
(139, 'Int', '01001011', ''),
(140, 'er', '001110110', ''),
(141, 'net', '0104040110', ''),
(142, 'Ex', '01101', ''),
(143, 'plo', '..', ''),
(144, 'rer', '...', ''),
(145, 'Chrome', 'What did he say?', ''),
(146, 'Firefox', 'I think he is loading...', ''),
(147, 'Internet Explorer', 'Im here guys, with the power of the internet!', ''),
(148, 'Firefox', 'What the hell happened to you?!?', ''),
(149, 'Internet Explorer', 'Oh that? huh, i got updated and now im supposed to be SUPER HOT ugh i mean FAST..', ''),
(150, 'Internet Explorer', '...', ''),
(151, 'Internet Explorer', '..', ''),
(152, 'Internet Explorer', 'With the new patch im like a Gazelle running through the safari ^^', ''),
(153, 'Safari Browser', 'Did someone say ma name?', ''),
(155, 'Chrome', 'Oh my, i didnt even know you still existed!', ''),
(156, 'Safari Browser', 'Theres alot of things you dont know about me young child $_$', ''),
(157, 'Chrome', 'Yeah yeah, whatever im bored...cya guys!', ''),
(158, 'Firefox', 'Cya brother!', ''),
(159, 'Safari Browser', 'Bye mate!', ''),
(160, 'Opera', 'Goodbye fella!!', ''),
(170, 'Internet Explorer', '..', ''),
(171, 'Internet Explorer', '...', ''),
(172, 'Internet Explorer', '..', ''),
(173, 'Internet Explorer', '...', ''),
(174, 'Internet Explorer', 'Bye pal!', ''),
(175, 'Internet Explorer', 'Hello!', ''),
(0, 'likope', 'eeeeee pederasiiiiiiiiiiiiii', ''),
(0, 'hyhyje', 'hthjtart', '');

-- --------------------------------------------------------

--
-- Структура на таблица `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` text,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `tag` varchar(50) NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `date`, `tag`, `author_id`) VALUES
(4, 'Ne Znam Kak E', 'Ne Znam Kak ENe Znam Kak ENe Znam Kak ENe Znam Kak ENe Znam Kak ENe Znam Kak ENe Znam Kak ENe Znam Kak ENe Znam Kak ENe Znam Kak ENe Znam Kak ENe Znam Kak ENe Znam Kak ENe Znam Kak ENe Znam Kak ENe Znam Kak ENe Znam Kak ENe Znam Kak ENe Znam Kak E', '2016-08-12 10:01:34', 'MOBILE GAMING', 4),
(5, 'Kakto Shte Da E', 'Kakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da E', '2016-08-12 10:02:27', 'CONSOLE GAMING', 1),
(7, 'fsafasfsa', 'fsafasfsafsafasfsafsafasfsafsafasfsafsafasfsafsafasfsafsafasfsafsafasfsafsafasfsafsafasfsafsafasfsafsafasfsa', '2016-08-13 11:42:28', 'PC GAMING', 0),
(8, 'afasfasfsa', 'afasfasfsaafasfasfsaafasfasfsaafasfasfsaafasfasfsaafasfasfsaafasfasfsaafasfasfsa', '2016-08-13 11:42:34', 'PC GAMING', 0),
(9, 'sfafas', 'sfafassfafassfafassfafassfafassfafassfafas', '2016-08-13 11:51:24', 'PC GAMING', 4),
(10, 'LUBAKIS MADAFAKIS', 'LUBAKIS MADAFAKISLUBAKIS MADAFAKISLUBAKIS MADAFAKISLUBAKIS MADAFAKIS', '2016-08-13 11:53:56', 'MOBILE GAMING', 4),
(11, 'LUBAKIS MADAFAKIS', 'LUBAKIS MADAFAKISLUBAKIS MADAFAKISLUBAKIS MADAFAKISLUBAKIS MADAFAKIS<h1>KAK EEE</h1>', '2016-08-13 11:54:40', 'PC GAMING', 4);

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(250) NOT NULL,
  `date_registered` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`user_id`, `email`, `username`, `password`, `date_registered`) VALUES
(1, 'miladinov_1997@abv.bg', 'TheAngelM', 'bea9ddc1815292ef7cc38780324ad97a', '2016-08-02'),
(5, 'grga@abv.bg', 'tagtag', '78e55a9524a191f7628f82a20bcaa167', '2016-08-07'),
(4, 'alabala@abv.bg', 'ani', 'djimi', '2016-08-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_users_id_idx` (`author_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
