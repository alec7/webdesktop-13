-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 12 Lip 2015, 14:17
-- Wersja serwera: 5.6.24
-- Wersja PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `webdesktop`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cookies`
--

CREATE TABLE IF NOT EXISTS `cookies` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `gid` text NOT NULL,
  `user_ip` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_add` date NOT NULL,
  `date_end` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `cookies`
--

INSERT INTO `cookies` (`id`, `name`, `gid`, `user_ip`, `user_id`, `date_add`, `date_end`) VALUES
(77, 'd2xvZ2lu', 'c85d8871-bdad-f3df-f800-d317421c4a1b', '', 1, '2015-07-12', '2015-07-16');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dictionary`
--

CREATE TABLE IF NOT EXISTS `dictionary` (
  `id` int(11) NOT NULL,
  `label` varchar(1024) NOT NULL,
  `pl` varchar(2048) NOT NULL,
  `en` text NOT NULL,
  `ru` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=180 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(256) NOT NULL,
  `privileges` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `groups`
--

INSERT INTO `groups` (`id`, `name`, `privileges`) VALUES
(2, 'users', ''),
(1, 'admins', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `notepad`
--

CREATE TABLE IF NOT EXISTS `notepad` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `show_panel` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=150 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `notepad`
--

INSERT INTO `notepad` (`id`, `title`, `content`, `show_panel`, `user_id`) VALUES
(143, 'my first test note', '<p>and this should be the content of my own note</p>', 1, 1),
(147, 'fifth note', '', 1, 1),
(148, 'the title of my own note', '', 1, 1),
(149, 'sdds fdsf ds fds sdds fdsf ds fds sdds fdsf ds fds sdds fdsf ds fds sdds fdsf ds fds sdds fdsf ds fds sdds fdsf ds fds sdds fdsf ds fds sdds fdsf ds fds sdds fdsf ds fds ', '', 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `privilege`
--

CREATE TABLE IF NOT EXISTS `privilege` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` tinytext NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `group_id` int(11) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `first_name`, `last_name`, `city`, `email`, `active`, `group_id`, `admin`) VALUES
(1, 'ivan', '327bc4e22b649d47c4546a3ec93f376b', '', '', 'Rzeszów', 'dib-jd@yandex.ru', 1, 1, 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `cookies`
--
ALTER TABLE `cookies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dictionary`
--
ALTER TABLE `dictionary`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `notepad`
--
ALTER TABLE `notepad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privilege`
--
ALTER TABLE `privilege`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `cookies`
--
ALTER TABLE `cookies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT dla tabeli `dictionary`
--
ALTER TABLE `dictionary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=180;
--
-- AUTO_INCREMENT dla tabeli `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT dla tabeli `notepad`
--
ALTER TABLE `notepad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=150;
--
-- AUTO_INCREMENT dla tabeli `privilege`
--
ALTER TABLE `privilege`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
