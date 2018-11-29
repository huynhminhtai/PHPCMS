-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2018 at 11:13 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(3) NOT NULL,
  `name` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'HTML5'),
(2, 'CSS3'),
(3, 'JavaScrip'),
(4, 'Angular JS'),
(19, 'ReAct'),
(21, 'ReAct');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(4) NOT NULL,
  `categoryId` int(3) NOT NULL,
  `title` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `createDate` date NOT NULL,
  `image` text NOT NULL,
  `content` text NOT NULL,
  `tag` varchar(255) NOT NULL,
  `commentCount` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'draft',
  `viewCount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `categoryId`, `title`, `author`, `createDate`, `image`, `content`, `tag`, `commentCount`, `status`, `viewCount`) VALUES
(1, 1, 'HTML Paragraphs', 'minh', '2018-11-28', 'https://i1.wp.com/thegioiphp.com/wp-content/uploads/2018/03/html-tags.png?fit=730%2C300&ssl=1', 'You cannot be sure how HTML will be displayed.\r\n\r\nLarge or small screens, and resized windows will create different results.\r\n\r\nWith HTML, you cannot change the output by adding extra spaces or extra lines in your HTML code.\r\n\r\nThe browser will remove any extra spaces and extra lines when the page is displayed:', 'HTML', 0, 'draft', 0),
(3, 1, 'HTML Paragraphs', 'minh', '2018-11-28', '', 'You cannot be sure how HTML will be displayed.\r\n\r\nLarge or small screens, and resized windows will create different results.\r\n\r\nWith HTML, you cannot change the output by adding extra spaces or extra lines in your HTML code.\r\n\r\nThe browser will remove any extra spaces and extra lines when the page is displayed:', 'HTML', 0, 'draft', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
