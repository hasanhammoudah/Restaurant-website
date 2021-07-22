-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 12, 2021 at 12:00 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orders`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` double DEFAULT NULL,
  `category` varchar(10) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `category`, `photo`) VALUES
(3, 'Margarita Pizza', 3.75, 'Pizza', 'Margarita2_big.jpg'),
(4, 'Chicken Alfredo Pizza', 5.99, 'Pizza', 'Chicken Alfredo2_big.jpg'),
(5, 'Pepperoni Lovers Pizza', 4.74, 'Pizza', 'Pepperoni lovers2_big.jpg'),
(7, 'Philly Steak Sandwich', 2.54, 'Sandwich', 'Philly steak sandwich2_big.jpg'),
(8, 'Chicken Sandwich', 2.37, 'Sandwich', 'Chicken sandwich2_big.jpg'),
(9, 'Hotdog Sandwich', 2.15, 'Sandwich', 'hotdog sandwich2_big.jpg'),
(10, 'Turkey Sandwich', 2.37, 'Sandwich', 'turkey sandwich2_big.jpg'),
(11, 'Caesar Salad', 3.01, 'Salad', 'Caesar salad2_big.jpg'),
(12, 'Greek Salad', 2.37, 'Salad', 'Greek salad2_big.jpg'),
(13, 'Arabic Salad', 1.94, 'Salad', 'Arabic salad2_big.jpg'),
(14, 'Tuna Salad', 2.59, 'Salad', 'Tuna salad2_big.jpg'),
(15, 'Pepsi', 0.52, 'Beverages', 'Pepsi-min_636021950800177962.jpg'),
(16, 'Diet Pepsi', 0.52, 'Beverages', 'Diet_Pepsi_big.jpg'),
(17, 'Mountain Dew', 0.52, 'Beverages', 'mtnDew_big.jpg'),
(18, 'Mineral Water (Small)', 0.26, 'Beverages', 'Water-min_636021951390013962.jpg'),
(19, 'Boneless Wings', 3.02, 'Extra', 'bonless wing_big.jpg'),
(20, 'French Fries', 0.86, 'Extra', 'french fries2_big.jpg'),
(21, 'Potato Wedges', 1.29, 'Extra', 'wedges2_big.jpg'),
(22, 'Sauces', 0.43, 'Extra', 'Dip_big.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
