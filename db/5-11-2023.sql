-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 08:55 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `luzviminda`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `post_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`post_id`, `user_id`, `title`, `content`) VALUES
(4, 0, 'ELLISOTY', '\"At LuzViMinda, our goal is to let this platform be a space for showcasing the creations \r\nof each Filipino. Flourishing the local Filipino industry. Through this website, \r\nwe hope to be able to contribute how supporting \r\nlocal products can have a greater impact in promoting cultural growth in our country.\"\r\n\r\n\r\n'),
(5, 0, 'MINDA', '\"At LuzViMinda, our goal is to let this platform be a space for showcasing the creations \r\nof each Filipino. Flourishing the local Filipino industry. Through this website, \r\nwe hope to be able to contribute how supporting \r\nlocal products can have a greater impact in promoting cultural growth in our country.\"\r\n\r\n\r\n'),
(6, 0, 'LUZ', '\"At LuzViMinda, our goal is to let this platform be a space for showcasing the creations \r\nof each Filipino. Flourishing the local Filipino industry. Through this website, \r\nwe hope to be able to contribute how supporting \r\nlocal products can have a greater impact in promoting cultural growth in our country.\"\r\n\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `user_id` int(30) NOT NULL,
  `contact_no` int(12) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `category` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(50) NOT NULL,
  `product_img` int(255) NOT NULL,
  `product_desc` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(30) NOT NULL,
  `business_name` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(80) NOT NULL,
  `address` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `profile_img` varchar(255) NOT NULL,
  `valid_id_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `business_name`, `username`, `email`, `password`, `address`, `website`, `profile_img`, `valid_id_img`) VALUES
(1, 'juan', 'juan', 'juan@gmail.com', '12345678', 'quezon city', 'www.juan.com', 'none', 'none'),
(2, 'try', 'test', 'test@yahoo.com', '1234abc', 'makati city', '', '', ''),
(24, 'test', 'test', 'test@yahoo.com', 'test', 'test', '', '1682767506_8244.png', '1682767506_6430.gif'),
(25, 'test', 'test', 'test@yahoo.com', '12345', 'test', '', '1682767640_7054.png', '1682767640_6047.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `post_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
