-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 26 Sie 2015, 21:53
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Struktura tabeli dla tabeli `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `title` text,
  `user_id` int(11) NOT NULL,
  `type` text NOT NULL,
  `category` text NOT NULL,
  `date_add` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=182 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `files`
--

INSERT INTO `files` (`id`, `name`, `title`, `user_id`, `type`, `category`, `date_add`) VALUES
(162, 'aofotografija-kirilicejuqwert.jpg', 'aofotografija kirilicejuqwert', 2, 'image/jpeg', 'img', '2015-08-22 00:00:00'),
(163, 'kosti.png', 'kosti', 2, 'image/png', 'img', '2015-08-22 00:00:00'),
(164, 'text-doc.txt', 'text doc', 2, 'text/plain', 'archive', '2015-08-22 00:00:00'),
(165, 'hi.mp3', 'hi', 2, 'audio/mp3', 'music', '2015-08-22 00:00:00'),
(166, 'my.mp4', 'my', 2, 'video/mp4', 'video', '2015-08-22 00:00:00'),
(167, '-at-----.txt', ' at     ', 2, 'text/plain', 'archive', '2015-08-22 00:00:00'),
(168, 'b.jpg', 'b', 2, 'image/jpeg', 'img', '2015-08-22 00:00:00'),
(169, 'aaa.zip', 'aaa', 2, 'application/octet-stream', 'archive', '2015-08-22 00:00:00'),
(170, 'xren.docx', 'xren', 2, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'another', '2015-08-22 00:00:00'),
(171, 'xren.pdf', 'xren', 2, 'application/pdf', 'archive', '2015-08-22 00:00:00'),
(172, 'IMG-20120101-002435.jpg', 'IMG 20120101 002435', 2, 'image/jpeg', 'img', '2015-08-22 00:00:00'),
(173, 'IMG-20140926-162447.jpg', 'IMG 20140926 162447', 2, 'image/jpeg', 'img', '2015-08-22 00:00:00'),
(174, 'IMG-20140927-175330.jpg', 'IMG 20140927 175330', 2, 'image/jpeg', 'img', '2015-08-22 00:00:00'),
(175, 'IMG-20140927-175333.jpg', 'IMG 20140927 175333', 2, 'image/jpeg', 'img', '2015-08-22 00:00:00'),
(176, 'IMG-20140927-175342.jpg', 'IMG 20140927 175342', 2, 'image/jpeg', 'img', '2015-08-22 00:00:00'),
(177, 'IMG-20140927-180156.jpg', 'IMG 20140927 180156', 2, 'image/jpeg', 'img', '2015-08-22 00:00:00'),
(178, 'IMG-20140927-180202.jpg', 'IMG 20140927 180202', 2, 'image/jpeg', 'img', '2015-08-22 00:00:00'),
(179, 'IMG-20140927-190730.jpg', 'IMG 20140927 190730', 2, 'image/jpeg', 'img', '2015-08-22 00:00:00'),
(180, 'IMG-20140927-190739.jpg', 'IMG 20140927 190739', 2, 'image/jpeg', 'img', '2015-08-22 00:00:00'),
(181, 'IMG-20140927-190754.jpg', 'IMG 20140927 190754', 2, 'image/jpeg', 'img', '2015-08-22 00:00:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `notepad`
--

INSERT INTO `notepad` (`id`, `title`, `content`, `show_panel`, `user_id`) VALUES
(143, 'my first test note', '<p>and this should be the content of my own note</p>', 1, 1),
(147, 'fifth note', '', 1, 1),
(148, 'the title of my own note', '', 1, 1),
(149, 'sdds fdsf ds fds sdds fdsf ds fds sdds fdsf ds fds sdds fdsf ds fds sdds fdsf ds fds sdds fdsf ds fds sdds fdsf ds fds sdds fdsf ds fds sdds fdsf ds fds sdds fdsf ds fds ', '', 1, 1),
(150, 'the title of my own note', '', 1, 2);

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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `first_name`, `last_name`, `city`, `email`, `active`, `group_id`, `admin`) VALUES
(1, 'ivan', '327bc4e22b649d47c4546a3ec93f376b', '', '', 'Rzeszów', 'dib-jd@yandex.ru', 1, 1, 1),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '', '', '', 1, 1, 1);

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
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `dictionary`
--
ALTER TABLE `dictionary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=180;
--
-- AUTO_INCREMENT dla tabeli `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=182;
--
-- AUTO_INCREMENT dla tabeli `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT dla tabeli `notepad`
--
ALTER TABLE `notepad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=151;
--
-- AUTO_INCREMENT dla tabeli `privilege`
--
ALTER TABLE `privilege`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
