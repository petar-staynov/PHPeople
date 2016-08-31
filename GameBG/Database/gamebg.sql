--
-- Database: `gamebg`
--

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `msg` text NOT NULL,
  `color` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `username`, `msg`, `color`) VALUES
(3, 'user', 'Ð—Ð´Ñ€Ð°Ð²ÐµÐ¹Ñ‚Ðµ Ð¸Ð¼Ð° Ð»Ð¸ Ð½ÑÐºÐ¾Ð¸ ?', ''),
(4, 'admin', 'Ð”Ð° Ñ‚ÑƒÐºÐ° ÑÐ¼Ðµ', ''),
(5, 'Guest_User161', 'Hello there mates!', ''),
(6, 'Guest_User161', 'I am from Russia!', ''),
(7, 'Guest_User161', 'And this is my country', ''),
(8, 'Guest_User313', '', ''),
(9, 'Guest_User531', '"here i am"', ''),
(10, 'Guest_User531', '''', ''),
(11, 'admin', 'It''s meee MARIO', ''),
(12, 'admin', 'MIAMOREE''porfavoreee''korleonee', ''),
(13, 'admin', 'hahahah', ''),
(14, 'admin', 'ok', ''),
(15, 'admin', 'this is it!', ''),
(16, 'admin', 'oh my goddd', ''),
(17, 'admin', 'it''s fucking working', ''),
(18, 'admin', 'yep', ''),
(19, 'admin', 'now i know', ''),
(20, 'admin', 'i''m going for a beer!', ''),
(21, 'Guest_User332', 'Smell ya later!', ''),
(22, 'Guest_User332', 'BOss', ''),
(23, 'Guest_User332', 'wow', ''),
(24, 'Guest_User332', 'this chat really is fucking cool''', ''),
(25, 'admin', 'told ya', ''),
(26, 'admin', 'it''s the best!', ''),
(27, 'admin', 'it really is !', ''),
(28, 'admin', 'yup', ''),
(29, 'admin', 'cool af', ''),
(30, 'admin', 'Hello mate@.com', ''),
(31, 'admin', 'YOu are the BOMB', ''),
(32, 'Guest_User188', 'Hello there', ''),
(33, 'Guest_User188', 'hi', '');

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
(17, 'admin@abv.bg', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2016-08-31', 2),
(18, 'user@abv.bg', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '2016-08-31', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
