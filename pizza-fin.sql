-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2016 at 11:44 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizza`
--

-- --------------------------------------------------------

--
-- Table structure for table `custom`
--

CREATE TABLE `custom` (
  `custom_id` int(11) NOT NULL,
  `pizza_id` int(11) NOT NULL,
  `extra_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `custom`
--

INSERT INTO `custom` (`custom_id`, `pizza_id`, `extra_id`) VALUES
(1, 0, 6),
(2, 0, 6),
(3, 0, 9),
(4, 0, 9),
(5, 0, 3),
(6, 0, 3),
(7, 0, 11),
(8, 0, 11),
(9, 0, 5),
(10, 0, 5),
(11, 0, 6),
(12, 0, 6),
(13, 0, 9),
(14, 0, 9),
(15, 0, 3),
(16, 0, 3),
(17, 0, 11),
(18, 0, 11),
(19, 0, 5),
(20, 0, 5),
(21, 1, 6),
(22, 1, 6),
(23, 1, 9),
(24, 1, 9),
(25, 1, 3),
(26, 1, 3),
(27, 1, 11),
(28, 1, 11),
(29, 1, 5),
(30, 1, 5),
(31, 3, 1),
(32, 3, 1),
(33, 3, 3),
(34, 3, 3),
(35, 3, 7),
(36, 3, 7),
(37, 3, 12),
(38, 3, 12),
(39, 3, 4),
(40, 3, 4),
(41, 5, 1),
(42, 5, 1),
(43, 5, 3),
(44, 5, 3),
(45, 5, 7),
(46, 5, 7),
(47, 5, 12),
(48, 5, 12),
(49, 5, 4),
(50, 5, 4),
(51, 6, 1),
(52, 6, 1),
(53, 6, 3),
(54, 6, 3),
(55, 6, 7),
(56, 6, 7),
(57, 6, 12),
(58, 6, 12),
(59, 6, 4),
(60, 6, 4),
(61, 0, 3),
(62, 0, 3),
(63, 0, 10),
(64, 0, 10),
(65, 0, 13),
(66, 0, 13),
(67, 0, 9),
(68, 0, 9),
(69, 0, 4),
(70, 0, 4),
(71, 0, 1),
(72, 0, 1),
(73, 0, 2),
(74, 0, 2),
(75, 0, 5),
(76, 0, 5),
(77, 0, 6),
(78, 0, 6),
(79, 0, 7),
(80, 0, 7),
(81, 0, 8),
(82, 0, 8),
(83, 0, 11),
(84, 0, 11),
(85, 0, 12),
(86, 0, 12),
(87, 0, 7),
(88, 0, 7),
(89, 0, 10),
(90, 0, 10),
(91, 0, 12),
(92, 0, 12),
(93, 0, 7),
(94, 0, 7),
(95, 0, 10),
(96, 0, 10),
(97, 0, 12),
(98, 0, 12),
(99, 0, 7),
(100, 0, 7),
(101, 0, 10),
(102, 0, 10),
(103, 0, 12),
(104, 0, 12),
(105, 0, 8),
(106, 0, 8),
(107, 0, 10),
(108, 0, 10),
(109, 0, 12),
(110, 0, 12),
(111, 0, 7),
(112, 0, 7),
(113, 0, 1),
(114, 0, 1),
(115, 0, 3),
(116, 0, 3),
(117, 0, 12),
(118, 0, 12),
(119, 0, 5),
(120, 0, 5),
(121, 0, 4),
(122, 0, 4),
(123, 0, 5),
(124, 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `extras`
--

CREATE TABLE `extras` (
  `extra_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cost` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `extras`
--

INSERT INTO `extras` (`extra_id`, `name`, `cost`) VALUES
(1, '#Bacon', '0.50'),
(2, '#Ham', '0.50'),
(3, '#Cheese', '0'),
(4, '#Mozzarella', '0.50'),
(5, '#Chery tomatoes', '0.50'),
(6, '#Pepperoni', '0.50'),
(7, '#Cheddar', '0.50'),
(8, '#Parmesan', '0'),
(9, '#Mushrooms', '0.50'),
(10, '#Anchovy', '0.50'),
(11, '#GreenPeppers', '0'),
(12, '#Eggs', '0.50'),
(13, '#ChickenMeat', '0.50');

-- --------------------------------------------------------

--
-- Table structure for table `pizza`
--

CREATE TABLE `pizza` (
  `pizza_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `order_address` text COLLATE utf8_unicode_ci NOT NULL,
  `orderDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pizza`
--

INSERT INTO `pizza` (`pizza_id`, `size_id`, `order_address`, `orderDate`) VALUES
(1, 2, 'asdsadasd', '0000-00-00 00:00:00'),
(2, 2, 'asdsadasd', '0000-00-00 00:00:00'),
(3, 2, 'asd', '0000-00-00 00:00:00'),
(4, 2, 'asd', '0000-00-00 00:00:00'),
(5, 2, 'asd', '0000-00-00 00:00:00'),
(6, 2, 'asd', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `size_id` int(11) NOT NULL,
  `name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `size` int(1) NOT NULL,
  `cost` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`size_id`, `name`, `size`, `cost`) VALUES
(1, '#Small', 300, '2.00'),
(2, '#Medium', 400, '3.00'),
(3, '#Large', 500, '4.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custom`
--
ALTER TABLE `custom`
  ADD PRIMARY KEY (`custom_id`);

--
-- Indexes for table `extras`
--
ALTER TABLE `extras`
  ADD PRIMARY KEY (`extra_id`);

--
-- Indexes for table `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`pizza_id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`size_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `custom`
--
ALTER TABLE `custom`
  MODIFY `custom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
--
-- AUTO_INCREMENT for table `extras`
--
ALTER TABLE `extras`
  MODIFY `extra_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `pizza`
--
ALTER TABLE `pizza`
  MODIFY `pizza_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
