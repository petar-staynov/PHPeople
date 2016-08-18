-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2016 at 10:59 AM
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
(4, 'Ne Znam Kak E', 'Ne Znam Kak ENe Znam Kak ENe Znam Kak ENe Znam Kak ENe Znam Kak ENe Znam Kak ENe Znam Kak ENe Znam Kak ENe Znam Kak ENe Znam Kak ENe Znam Kak ENe Znam Kak ENe Znam Kak ENe Znam Kak ENe Znam Kak ENe Znam Kak ENe Znam Kak ENe Znam Kak ENe Znam Kak E', '2016-08-12 10:01:34', 'MOBILE GAMING', 4),
(5, 'Kakto Shte Da E', 'Kakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da EKakto Shte Da E', '2016-08-12 10:02:27', 'CONSOLE GAMING', 1),
(6, 'Kak E', 'Kak EKak EKak EKak EKak EKak EKak EKak EKak EKak EKak EKak EKak EKak EKak EKak EKak EKak EKak EKak EKak EKak EKak EKak EKak EKak EKak EKak EKak EKak EKak EKak EKak EKak E', '2016-08-12 10:03:10', 'PC GAMING', 1),
(7, 'fsafasfsa', 'fsafasfsafsafasfsafsafasfsafsafasfsafsafasfsafsafasfsafsafasfsafsafasfsafsafasfsafsafasfsafsafasfsafsafasfsa', '2016-08-13 11:42:28', 'PC GAMING', 0),
(8, 'afasfasfsa', 'afasfasfsaafasfasfsaafasfasfsaafasfasfsaafasfasfsaafasfasfsaafasfasfsaafasfasfsa', '2016-08-13 11:42:34', 'PC GAMING', 0),
(9, 'sfafas', 'sfafassfafassfafassfafassfafassfafassfafas', '2016-08-13 11:51:24', 'PC GAMING', 4),
(10, 'LUBAKIS MADAFAKIS', 'LUBAKIS MADAFAKISLUBAKIS MADAFAKISLUBAKIS MADAFAKISLUBAKIS MADAFAKIS', '2016-08-13 11:53:56', 'MOBILE GAMING', 4),
(11, 'LUBAKIS MADAFAKIS', 'LUBAKIS MADAFAKISLUBAKIS MADAFAKISLUBAKIS MADAFAKISLUBAKIS MADAFAKIS<h1>KAK EEE</h1>', '2016-08-13 11:54:40', 'PC GAMING', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_users_id_idx` (`author_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
