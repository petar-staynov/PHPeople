-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2016 at 10:15 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

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
-- Table structure for table `forum_categories`
--

CREATE TABLE `forum_categories` (
  `cat_id` int(8) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `forum_posts`
--

CREATE TABLE `forum_posts` (
  `post_id` int(8) NOT NULL,
  `post_content` text NOT NULL,
  `post_date` datetime NOT NULL,
  `post_topic` int(8) NOT NULL,
  `post_by` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `forum_topics`
--

CREATE TABLE `forum_topics` (
  `topic_id` int(8) NOT NULL,
  `topic_subject` varchar(255) NOT NULL,
  `topic_date` datetime NOT NULL,
  `topic_cat` int(8) NOT NULL,
  `topic_by` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `game_title` varchar(250) NOT NULL,
  `game_desc` text NOT NULL,
  `game_image` varchar(250) NOT NULL,
  `device` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `games`
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
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `color` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
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
(176, 'k', 'ok', ''),
(177, 'LUBCHO ', 'kiaokaoafafasfafsa', ''),
(178, 'VLADIKATA', 'afasfsafsafasfasf', '');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
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
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `date`, `tag`, `author_id`) VALUES
(34, 'ICC 25', 'ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25', '2016-08-15 11:49:13', 'PC GAMING', 5),
(39, 'ICC 25', 'ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25', '2016-08-15 11:59:53', 'PC GAMING', 5),
(40, 'ICC 25', 'ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25', '2016-08-15 11:59:58', 'CONSOLE GAMING', 5),
(41, 'ICC 25', 'ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25', '2016-08-15 12:00:02', 'MOBILE GAMING', 5),
(42, 'ICC 25', 'ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25', '2016-08-15 12:00:07', 'CONSOLE GAMING', 5),
(43, 'ICC 25', 'ICC 25ICC 25ICC 25ICC 25', '2016-08-15 12:04:34', 'PC GAMING', 5),
(44, 'LUBAKIS MADAFAKIS', 'LUBAKIS MADAFAKISLUBAKIS MADAFAKISLUBAKIS MADAFAKISLUBAKIS MADAFAKISLUBAKIS MADAFAKISLUBAKIS MADAFAKISLUBAKIS MADAFAKISLUBAKIS MADAFAKISLUBAKIS MADAFAKISLUBAKIS MADAFAKISLUBAKIS MADAFAKISLUBAKIS MADAFAKISLUBAKIS MADAFAKISLUBAKIS MADAFAKISLUBAKIS MADAFAKISLUBAKIS MADAFAKIS', '2016-08-16 08:27:56', 'MOBILE GAMING', 5),
(46, 'Dota 2', '8.8k mmr ranked plz', '2016-08-23 09:33:33', 'PC GAMING', 6),
(47, 'League of Legends', 'Az sum challenger tursq nqkoi za ranked :D :D ', '2016-08-23 10:29:33', 'PC GAMING', 7),
(48, 'Ð“ÐµÑ€Ð¸-ÐÐ¸ÐºÐ¾Ð»', 'ÐÐ¹Ð¼ Ð´ÑŠ ÐºÑƒÐ¸Ð¹Ð½ Ð´Ð° Ð´Ð° Ð´Ð° Ð´Ð°', '2016-08-23 10:32:47', 'MOBILE GAMING', 7),
(49, 'ICC 25', 'ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25ICC 25', '2016-08-27 23:11:28', 'CONSOLE GAMING', 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(250) NOT NULL,
  `date_registered` date NOT NULL,
  `user_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `username`, `password`, `date_registered`, `user_level`) VALUES
(1, 'miladinov_1997@abv.bg', 'TheAngelM', 'bea9ddc1815292ef7cc38780324ad97a', '2016-08-02', 1),
(4, 'ivanchjo@gmail.com', 'ivanchjo', '6579f999f210b76d293789ef5543cb28', '2016-08-11', 0),
(5, 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2016-08-13', 2),
(6, 'marcheto@gmail.com', 'marcheto', '2d2e0f044798c081f53824348e24aef8', '2016-08-14', 0),
(7, 'dimitrinka@gmail.com', 'dimitrinka', 'bdf385f37a0cda430a70d70caef58d08', '2016-08-23', 0),
(8, 'zotak3105@gmail.com', 'zotakk', '22b7dae1d641d756d722dd04a2901000', '2016-08-27', 1),
(9, 'pesho@gmail.com', 'pesho', 'ef32883676f047fe440842fa09b3bf1b', '2016-08-27', 1),
(10, 'icaka@gmail.com', 'icaka', '52fb782c76f00459e6c1a8b4df0dbdb3', '2016-08-27', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forum_categories`
--
ALTER TABLE `forum_categories`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `cat_name_unique` (`cat_name`);

--
-- Indexes for table `forum_posts`
--
ALTER TABLE `forum_posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `forum_topics`
--
ALTER TABLE `forum_topics`
  ADD PRIMARY KEY (`topic_id`),
  ADD KEY `topic_cat` (`topic_cat`),
  ADD KEY `topic_by` (`topic_by`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
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
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forum_categories`
--
ALTER TABLE `forum_categories`
  MODIFY `cat_id` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forum_posts`
--
ALTER TABLE `forum_posts`
  MODIFY `post_id` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forum_topics`
--
ALTER TABLE `forum_topics`
  MODIFY `topic_id` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `forum_topics`
--
ALTER TABLE `forum_topics`
  ADD CONSTRAINT `forum_topics` FOREIGN KEY (`topic_cat`) REFERENCES `forum_categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
