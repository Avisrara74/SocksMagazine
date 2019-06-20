-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 20, 2019 at 08:21 AM
-- Server version: 5.5.62
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `socksmagazine`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `way` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `id_product`, `way`) VALUES
(1, 1, 'images/shop/items/6-1.jpg'),
(2, 1, 'images/shop/items/6-2.jpg'),
(3, 2, 'images/shop/items/7-1.jpg'),
(4, 2, 'images/shop/items/7-2.jpg'),
(5, 3, 'images/shop/items/3-1.jpg'),
(6, 3, 'images/shop/items/3-2.jpg'),
(7, 3, 'images/shop/items/3-3.jpg'),
(8, 3, 'images/shop/items/3-4.jpg'),
(9, 4, 'images/shop/items/4-1.jpg'),
(10, 4, 'images/shop/items/4-2.jpg'),
(11, 4, 'images/shop/items/4-3.png'),
(12, 4, 'images/shop/items/4-4.png'),
(13, 5, 'images/shop/items/5-1.jpg'),
(14, 5, 'images/shop/items/5-2.jpg'),
(15, 5, 'images/shop/items/5-3.jpg'),
(16, 5, 'images/shop/items/5-4.jpg'),
(17, 6, 'images/shop/items/2-1.jpg'),
(18, 6, 'images/shop/items/2-2.jpg'),
(19, 6, 'images/shop/items/2-3.jpg'),
(20, 6, 'images/shop/items/2-4.jpg'),
(21, 7, 'images/shop/items/8-1.jpg'),
(22, 7, 'images/shop/items/8-2.jpg'),
(23, 7, 'images/shop/items/8-3.jpg'),
(24, 7, 'images/shop/items/8-4.jpg'),
(25, 7, 'images/shop/items/8-5.jpg'),
(26, 8, 'images/shop/items/9-1.jpg'),
(27, 8, 'images/shop/items/9-2.jpg'),
(28, 8, 'images/shop/items/9-3.jpg'),
(29, 9, 'images/shop/items/10-1.jpg'),
(30, 9, 'images/shop/items/10-2.jpg'),
(31, 9, 'images/shop/items/10-3.jpg'),
(32, 10, 'images/shop/items/11-1.jpg'),
(33, 10, 'images/shop/items/11-2.jpg'),
(34, 10, 'images/shop/items/11-3.jpg'),
(35, 10, 'images/shop/items/11-4.jpg'),
(36, 10, 'images/shop/items/11-5.jpg'),
(37, 11, 'images/shop/items/12-1.jpg'),
(38, 11, 'images/shop/items/12-2.jpg'),
(39, 11, 'images/shop/items/12-3.jpg'),
(40, 11, 'images/shop/items/12-4.jpg'),
(41, 11, 'images/shop/items/12-5.jpg'),
(42, 12, 'images/shop/items/13-1.jpg'),
(43, 12, 'images/shop/items/13-2.jpg'),
(44, 12, 'images/shop/items/13-3.jpg'),
(45, 12, 'images/shop/items/13-4.jpg'),
(46, 13, 'images/shop/items/14-1.jpg'),
(47, 13, 'images/shop/items/14-2.jpg'),
(48, 13, 'images/shop/items/14-3.jpg'),
(49, 13, 'images/shop/items/14-4.jpg'),
(50, 13, 'images/shop/items/14-4.jpg'),
(51, 14, 'images/shop/items/15-1.jpg'),
(52, 14, 'images/shop/items/15-2.jpg'),
(53, 14, 'images/shop/items/15-3.jpg'),
(54, 14, 'images/shop/items/15-4.jpg'),
(55, 15, 'images/shop/items/16-1.jpg'),
(56, 15, 'images/shop/items/16-2.jpg'),
(57, 15, 'images/shop/items/16-3.jpg'),
(58, 15, 'images/shop/items/16-4.jpg'),
(59, 16, 'images/shop/items/17-1.jpg'),
(60, 16, 'images/shop/items/17-2.jpg'),
(61, 16, 'images/shop/items/17-3.jpg'),
(62, 16, 'images/shop/items/17-4.jpg'),
(63, 17, 'images/shop/items/18-1.jpg'),
(64, 17, 'images/shop/items/18-2.png'),
(65, 17, 'images/shop/items/18-3.jpg'),
(66, 18, 'images/shop/items/19-1.jpg'),
(67, 18, 'images/shop/items/19-2.png'),
(68, 18, 'images/shop/items/19-3.jpg'),
(69, 19, 'images/shop/items/20-1.jpg'),
(70, 19, 'images/shop/items/20-2.png'),
(71, 19, 'images/shop/items/20-3.jpg'),
(72, 20, 'images/shop/items/21-1.jpg'),
(73, 21, 'images/shop/items/22-1.jpg'),
(74, 22, 'images/shop/items/23-1.png'),
(75, 22, 'images/shop/items/23-2.png'),
(76, 22, 'images/shop/items/23-3.png'),
(77, 22, 'images/shop/items/23-4.png'),
(78, 0, 'images/shop/items/24-1.jpg'),
(79, 23, 'images/shop/items/24-1.jpg'),
(80, 23, 'images/shop/items/24-2.jpg'),
(81, 23, 'images/shop/items/24-3.jpg'),
(82, 23, 'images/shop/items/24-4.jpg'),
(83, 23, 'images/shop/items/24-5.jpg'),
(84, 23, 'images/shop/items/24-6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `nav`
--

CREATE TABLE `nav` (
  `id` int(11) NOT NULL,
  `navName` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nav`
--

INSERT INTO `nav` (`id`, `navName`) VALUES
(1, 'Наборы носков'),
(2, 'Носки стандартной длинны'),
(3, 'Укороченные носки'),
(4, 'Утепленные носки'),
(5, 'Спортивные носки'),
(6, 'Подарочные коробки');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `id_nav` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `price_rub` int(11) NOT NULL,
  `items` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `id_nav`, `title`, `price_rub`, `items`) VALUES
(1, 2, 'Носки малина в шоколаде, стандартная длинна, 2 пары', 598, 12),
(2, 2, 'Носки цвет настроения - синий, стандартная длинна', 299, 5),
(3, 2, 'Носки с енотами, стандартная длинна', 280, 5),
(4, 2, 'Носки малахитовый песок, стандартная длинна', 286, 1),
(5, 2, 'Носки с китами, стандартная длинна', 260, 7),
(6, 3, 'Носки с пандами, укороченные', 300, 5),
(7, 3, 'Носки с китами, укороченные', 289, 5),
(8, 3, 'Носки с мухами, укороченные', 277, 6),
(9, 3, 'Носки с лисами, укороченные', 289, 2),
(10, 3, 'Носки с улитками, укороченные', 259, 7),
(11, 3, 'Носки с пингвинами, укороченные', 226, 7),
(12, 4, 'Носки с пандами, махровые', 370, 7),
(13, 4, 'Носки с енотами, махровые', 350, 17),
(14, 4, 'Носки с китами, махровые', 390, 3),
(15, 4, 'Носки с мухами, махровые', 375, 12),
(16, 4, 'Носки с лисами, махровые', 379, 17),
(17, 5, 'Носки karma, стандартная длинна', 299, 7),
(18, 5, 'Носки stop wars, стандартная длинна', 299, 4),
(19, 5, 'Носки revolution, стандартная длинна', 299, 0),
(20, 6, 'Коробка-кубик', 70, 4),
(21, 6, 'Коробка-параллелепипед', 70, 3),
(22, 6, 'Коробка-шестигранник', 100, 0),
(23, 1, 'Человечество, стандартная длина, 5 пар', 1920, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nav`
--
ALTER TABLE `nav`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `nav`
--
ALTER TABLE `nav`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
