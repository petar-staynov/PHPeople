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
-- Table structure for table `forum_categories`
--

CREATE TABLE `forum_categories` (
  `cat_id` int(8) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forum_categories`
--

INSERT INTO `forum_categories` (`cat_id`, `cat_name`, `cat_description`) VALUES
  (2, 'Gaming', 'Gaming topics here'),
  (3, 'Even More Gaming', 'More games here'),
  (4, 'TEST', 'TEST'),
  (5, '34234', '234234'),
  (6, '345345', '3453453534'),
  (7, 'cvbgdgghdfh', '5435345'),
  (8, 'Test Text', 'Even more text'),
  (9, 'TEST FINAL', 'TEST FINAL'),
  (10, '123123dfafsd', 'fsdf23432'),
  (11, '567567', '567567'),
  (13, '5675677', '77777'),
  (14, '77777', '7777'),
  (15, '435345', '345345');

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

--
-- Dumping data for table `forum_posts`
--

INSERT INTO `forum_posts` (`post_id`, `post_content`, `post_date`, `post_topic`, `post_by`) VALUES
  (1, 'I like playing games although they are for kids. My mom says I''m a human manchild but I disagree. ', '2016-08-30 15:47:57', 1, 5),
  (2, 'I''m just testing out stuff.', '2016-08-30 15:53:10', 2, 5),
  (3, '234234234234', '2016-08-30 18:18:12', 3, 5),
  (4, 'fghfgh', '2016-08-30 19:11:31', 4, 5),
  (5, '456456456', '2016-08-30 19:11:41', 5, 5),
  (6, '345345', '2016-08-30 19:16:46', 6, 5);

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

--
-- Dumping data for table `forum_topics`
--

INSERT INTO `forum_topics` (`topic_id`, `topic_subject`, `topic_date`, `topic_cat`, `topic_by`) VALUES
  (1, 'Test Topic', '2016-08-30 15:47:57', 2, 5),
  (2, 'Test Topic 2', '2016-08-30 15:53:10', 2, 5),
  (3, '34324234', '2016-08-30 18:18:12', 5, 5),
  (4, 'fghfgh', '2016-08-30 19:11:31', 2, 5),
  (5, '6456456456', '2016-08-30 19:11:41', 2, 5),
  (6, '435435', '2016-08-30 19:16:46', 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `games`
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
  (34, 'Call of duty', 'Call of duty е мн як FPS', 'df030cf35cff4d9364a94bf3eba2a945.jpg', 'all', '0000-00-00 00:00:00'),
  (33, 'League of legends', 'Не ми се говори', '6d89c7e2d2f242ea81cec2c94f7c6bee.jpeg', 'pc', '0000-00-00 00:00:00'),
  (31, 'Diablo 3', 'Diablo 3 е RPG игра в която си развиваш героя и убиваш чудовища', '26ec11b34dc2045668a5ef70ac7a14b3.png', 'all', '0000-00-00 00:00:00'),
  (32, 'Battlefield 1', 'Battlefield 1 е много як FPS', 'cca0a05b8bf01a50d0f9dd99a152e91d.png', 'all', '0000-00-00 00:00:00'),
  (35, 'Overwatch', 'Много яка', '9abac9265d3786b690d95f7dd89f05dc.jpg', 'all', '2016-08-30 19:36:45');

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
  (1, 'gamebg', 'zdr', '');

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
  (13, 'hfhff', 'gfghfhgk', '2016-08-30 19:04:09', 'PC GAMING', 1),
  (14, 'aaaaa', 'hghjfg', '2016-08-30 19:04:26', 'PC GAMING', 1);

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
(1, 'miladinov_1997@abv.bg', 'TheAngelM', 'bea9ddc1815292ef7cc38780324ad97a', '2016-08-02', 1),
(4, 'ivanchjo@gmail.com', 'ivanchjo', '6579f999f210b76d293789ef5543cb28', '2016-08-11', 0),
(5, 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2016-08-13', 2),
(6, 'marcheto@gmail.com', 'marcheto', '2d2e0f044798c081f53824348e24aef8', '2016-08-14', 0),
(7, 'dimitrinka@gmail.com', 'dimitrinka', 'bdf385f37a0cda430a70d70caef58d08', '2016-08-23', 0),
(8, 'zotak3105@gmail.com', 'zotakk', '22b7dae1d641d756d722dd04a2901000', '2016-08-27', 1),
(9, 'pesho@gmail.com', 'pesho', 'ef32883676f047fe440842fa09b3bf1b', '2016-08-27', 1),
(10, 'icaka@gmail.com', 'icaka', '52fb782c76f00459e6c1a8b4df0dbdb3', '2016-08-27', 1),
(11, 'test@abv.bg', '12345678', '25d55ad283aa400af464c76d713c07ad', '2016-08-30', 0);

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
-- AUTO_INCREMENT for table `forum_categories`
--
ALTER TABLE `forum_categories`
  MODIFY `cat_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `forum_posts`
--
ALTER TABLE `forum_posts`
  MODIFY `post_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `forum_topics`
--
ALTER TABLE `forum_topics`
  MODIFY `topic_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `forum_posts`
--
ALTER TABLE `forum_posts`
  ADD CONSTRAINT `forum_posts_ibfk_1` FOREIGN KEY (`post_topic`) REFERENCES `forum_topics` (`topic_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `forum_posts_ibfk_2` FOREIGN KEY (`post_by`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `forum_topics`
--
ALTER TABLE `forum_topics`
  ADD CONSTRAINT `forum_topics_ibfk_1` FOREIGN KEY (`topic_cat`) REFERENCES `forum_categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `forum_topics_ibfk_2` FOREIGN KEY (`topic_by`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;