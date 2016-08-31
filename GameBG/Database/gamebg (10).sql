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
-- Структура на таблица `forum_categories`
--

CREATE TABLE `forum_categories` (
  `cat_id` int(8) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `forum_categories`
--

INSERT INTO `forum_categories` (`cat_id`, `cat_name`, `cat_description`) VALUES
(17, 'Gaming', 'This is a gaming category'),
(18, 'Misc', 'Random stuff');

-- --------------------------------------------------------

--
-- Структура на таблица `forum_posts`
--

CREATE TABLE `forum_posts` (
  `post_id` int(8) NOT NULL,
  `post_content` text NOT NULL,
  `post_date` datetime NOT NULL,
  `post_topic` int(8) NOT NULL,
  `post_by` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `forum_posts`
--

INSERT INTO `forum_posts` (`post_id`, `post_content`, `post_date`, `post_topic`, `post_by`) VALUES
(12, 'Let''s talk about Diablo 3', '2016-08-31 22:06:59', 8, 17),
(13, 'This is a Battlefield 1 topic', '2016-08-31 22:07:21', 9, 17),
(14, 'I like to play that game', '2016-08-31 22:08:15', 8, 18),
(15, 'Overwatch topic', '2016-08-31 22:09:56', 10, 17);

-- --------------------------------------------------------

--
-- Структура на таблица `forum_topics`
--

CREATE TABLE `forum_topics` (
  `topic_id` int(8) NOT NULL,
  `topic_subject` varchar(255) NOT NULL,
  `topic_date` datetime NOT NULL,
  `topic_cat` int(8) NOT NULL,
  `topic_by` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `forum_topics`
--

INSERT INTO `forum_topics` (`topic_id`, `topic_subject`, `topic_date`, `topic_cat`, `topic_by`) VALUES
(8, 'Diablo 3', '2016-08-31 22:06:59', 17, 17),
(9, 'Battlefield 1', '2016-08-31 22:07:21', 17, 17),
(10, 'Overwatch', '2016-08-31 22:09:56', 17, 17);

-- --------------------------------------------------------

--
-- Структура на таблица `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `game_title` varchar(250) NOT NULL,
  `game_desc` text NOT NULL,
  `game_image` varchar(250) NOT NULL,
  `device` varchar(250) NOT NULL,
  `time_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `games`
--

INSERT INTO `games` (`id`, `game_title`, `game_desc`, `game_image`, `device`, `time_added`) VALUES
(38, 'Call of duty', 'Call of duty е много як FPS', '35bcc8bc08ca30111c6c7b6aa63310d0.jpg', 'all', '2016-08-31 21:40:26'),
(39, 'Battlefield 1', 'Battlefield 1 е FPS', '8f4cee650c609225239be4719cca2e95.png', 'all', '2016-08-31 21:59:06'),
(40, 'Overwatch', 'Overwatch е игра в която се разделяте на два отбора и се цепите', '51e247ac0b34646690f0d8d1b9e46e3b.jpg', 'all', '2016-08-31 21:59:43'),
(41, 'Diablo 3', 'Diablo 3 описание', 'a6e9a7e7b091982855bfac98d6d1313c.png', 'all', '2016-08-31 22:00:17');

-- --------------------------------------------------------

--
-- Структура на таблица `game_users`
--

CREATE TABLE `game_users` (
  `id` int(11) NOT NULL,
  `game` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `game_username` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура на таблица `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `msg` text NOT NULL,
  `color` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `logs`
--

INSERT INTO `logs` (`id`, `username`, `msg`, `color`) VALUES
(3, 'user', 'Ð—Ð´Ñ€Ð°Ð²ÐµÐ¹Ñ‚Ðµ Ð¸Ð¼Ð° Ð»Ð¸ Ð½ÑÐºÐ¾Ð¸ ?', ''),
(4, 'admin', 'Ð”Ð° Ñ‚ÑƒÐºÐ° ÑÐ¼Ðµ', '');

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
(1, 'No Man''s Sky', 'No Man''s Sky is a game about exploration and survival in an infinite procedurally generated universe.', '2016-08-28 00:10:04', 'PC GAMING', 5),
(2, 'Pokémon Go', 'Pokémon Go is a free-to-play, location-based augmented reality game developed by Niantic for iOS and Android devices. It was initially released in selected countries in July 2016. In the game, players use a mobile device''s GPS capability to locate, capture, battle, and train virtual creatures, called Pokémon, who appear on the screen as if they were in the same real-world location as the player. The game supports in-app purchases for additional in-game items.', '2016-08-28 00:10:32', 'MOBILE GAMING', 5),
(3, 'Xbox One Upgrade', 'Microsoft has confirmed "Project Scorpio." The console will deliver 6 teraflops of computing capability, and true 4K resolution. Microsoft is saying it''s the most powerful GPU put into a console to date, and it''s coming in holiday 2017.', '2016-08-28 00:11:06', 'CONSOLE GAMING', 5);

-- --------------------------------------------------------

--
-- Структура на таблица `users`
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
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`user_id`, `email`, `username`, `password`, `date_registered`, `user_level`) VALUES
(17, 'admin@abv.bg', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2016-08-31', 2),
(18, 'user@abv.bg', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '2016-08-31', 0);

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
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `post_topic` (`post_topic`),
  ADD KEY `post_by` (`post_by`);

--
-- Indexes for table `forum_topics`
--
ALTER TABLE `forum_topics`
  ADD PRIMARY KEY (`topic_id`),
  ADD KEY `topic_cat` (`topic_cat`),
  ADD KEY `topic_by` (`topic_by`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game_users`
--
ALTER TABLE `game_users`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `cat_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `forum_posts`
--
ALTER TABLE `forum_posts`
  MODIFY `post_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `forum_topics`
--
ALTER TABLE `forum_topics`
  MODIFY `topic_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `game_users`
--
ALTER TABLE `game_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Ограничения за дъмпнати таблици
--

--
-- Ограничения за таблица `forum_posts`
--
ALTER TABLE `forum_posts`
  ADD CONSTRAINT `forum_posts_ibfk_1` FOREIGN KEY (`post_topic`) REFERENCES `forum_topics` (`topic_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `forum_posts_ibfk_2` FOREIGN KEY (`post_by`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE;

--
-- Ограничения за таблица `forum_topics`
--
ALTER TABLE `forum_topics`
  ADD CONSTRAINT `forum_topics_ibfk_1` FOREIGN KEY (`topic_cat`) REFERENCES `forum_categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `forum_topics_ibfk_2` FOREIGN KEY (`topic_by`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
