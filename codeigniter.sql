-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2020 at 07:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `recipename` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `recipename`, `description`, `name`, `image`) VALUES
(30, 'Cheese Burst Pizza', 'a unique and popular pizza type which has a thick crust with yummy liquid or molten cheese inside. the topping and the spread used in this recipe is very similar to any other pizza, but is filled with molten cheese in it. in india, the recipe was introduced and popularised by the dominos.', 'Triya', 'pizzafinal.jpg'),
(31, 'Aloo Parathe', 'It\'s usually enjoyed with butter, yogurt or pickle. My aloo paratha is nothing fancy, it\'s a basic simple recipe which is made in every household in India. Just some boiled mashed potatoes, mixed with spices and then stuffed in the dough, which is then rolled and pan-fried.', 'Yash', 'Aloo.jpg'),
(34, 'Burger', ' basically pasta recipe prepared in tomato sauce with penne pasta, italian herbs, chilli flakes and basil leaves. pasta recipes are usually served as a meal for lunch and dinner, but can also served for breakfast.', 'who', 'burger1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
