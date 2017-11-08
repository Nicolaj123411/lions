-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 08, 2017 at 09:54 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lions`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `event_date` date NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `public` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_date`, `created`, `public`) VALUES
(1, '2017-11-14', '2017-11-07 20:11:33', 1),
(2, '2017-11-16', '2017-11-07 20:51:40', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event_content`
--

CREATE TABLE `event_content` (
  `event_id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event_content`
--

INSERT INTO `event_content` (`event_id`, `img`, `title`, `content`, `id`) VALUES
(1, 'http://via.placeholder.com/200x200', 'Event fra databasen', 'Her er indhold fra databasen', 2),
(2, 'http://via.placeholder.com/200x200', 'Titel på event 2', 'her er indhold på event 2', 3),
(1, 'http://via.placeholder.com/200x200', 'titel 2 på event 1', 'her er content på titel 2 event 1', 4),
(9, 'null', 'titel', 'content', 5),
(11, 'sadads', 'dasdds', 'adsads', 6);

-- --------------------------------------------------------

--
-- Table structure for table `event_time`
--

CREATE TABLE `event_time` (
  `event_id` int(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event_time`
--

INSERT INTO `event_time` (`event_id`, `time`, `description`) VALUES
(1, '08:22', 'Madboden åbnes'),
(1, '09:55', 'Børnelandet åbnes');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `featured` int(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permission` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `permission`, `created`) VALUES
(1, 'Leif Andersen', 'Kode til Leif', 1, '2017-11-07 19:45:00'),
(2, 'username', 'password', 1, '2017-11-07 19:58:53'),
(3, 'ssssss', 'password', 1, '2017-11-07 20:05:24'),
(4, 'ssssss', 'password', 1, '2017-11-07 20:05:32'),
(5, 'ssssss', 'password', 1, '2017-11-07 20:06:18'),
(6, 'ssssss', 'password', 1, '2017-11-07 20:06:21'),
(7, 'ssssss', 'password', 1, '2017-11-07 20:06:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_content`
--
ALTER TABLE `event_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `event_content`
--
ALTER TABLE `event_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
