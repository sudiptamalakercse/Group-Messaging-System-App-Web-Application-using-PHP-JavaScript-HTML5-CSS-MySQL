-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb21.awardspace.net
-- Generation Time: Aug 11, 2019 at 09:32 AM
-- Server version: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3103135_mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(255) NOT NULL,
  `sender` varchar(2000) NOT NULL,
  `msg` mediumtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(2000) NOT NULL,
  `password` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `sender`, `msg`, `date`, `email`, `password`) VALUES
(24, 'Sudipta Malaker', 'Hi friends, welcome to my first web based application which is group messaging system not for personal messaging because it is only for group messaging.All people who are already registered can see your messeges by logIn in this system.If you face any problem then you can inform me.I hope that every one will enjoy by browsing this site.Thank you... ', '2019-08-10 18:05:44', 'malakersudipta@gmail.com', 'eeemalaker'),
(26, 'Sudipta Malaker', 'à¦¸à§à¦¶à¦¾à¦¨à§à¦¤ à¦¶à§à¦­ à¦œà¦¨à§à¦®à¦¦à¦¿à¦¨ à¦­à¦¾à¦‡ !***', '2019-08-10 18:14:09', 'malakersudipta@gmail.com', 'eeemalaker'),
(27, 'Sushanta Malaker', 'à¦¤à§‹à¦®à¦¾à¦•à§‡ à¦ªà§à¦°à¦¾à¦£à¦¢à¦¾à¦²à¦¾ à¦§à¦¨à§à¦¯à¦¬à¦¾à¦¦ à¦­à¦¾à¦‡...++++\r\n', '2019-08-10 18:34:19', 'sushantamalaker@gmail.com', '2005malaker'),
(28, 'Sudipta Malaker', 'ðŸ˜ðŸ˜', '2019-08-10 19:54:47', 'malakersudipta@gmail.com', 'eeemalaker'),
(29, 'Sudipta Malaker', 'http://sudipta.atwebpages.com', '2019-08-11 03:54:57', 'malakersudipta@gmail.com', 'eeemalaker'),
(30, 'Sudipta Malaker', 'Welcome Arpon...', '2019-08-11 05:05:08', 'malakersudipta@gmail.com', 'eeemalaker'),
(31, 'Arpon', 'thank u dadaâ™¥â™¥', '2019-08-11 05:10:17', 'arponavi4@gmail.com', 'akm080106'),
(32, 'Sudipta Malaker', 'ðŸ’œðŸ’œðŸ’œ', '2019-08-11 05:14:02', 'malakersudipta@gmail.com', 'eeemalaker'),
(33, 'Aparupa Malaker', 'You are welcom!  ', '2019-08-11 06:20:47', 'Ucotrisal@gmai.com ', '123'),
(35, 'Sudipta Malaker', 'ðŸ˜ðŸ˜ðŸ˜', '2019-08-11 06:29:34', 'malakersudipta@gmail.com', 'eeemalaker'),
(37, 'Arpon', 'à¦¹à§à¦¯à¦¾à¦²à§‹ à¦²à¦¾à¦¬à¦£à§à¦¯ à¦¦à¦¿à¦¦à¦¿ :-) â™¥', '2019-08-11 08:39:15', 'arponavi4@gmail.com', 'akm080106');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
