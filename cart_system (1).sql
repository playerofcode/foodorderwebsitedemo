-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2020 at 04:14 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(55) NOT NULL,
  `pass` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(10) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(55) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `mob` varchar(55) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `mob`, `password`) VALUES
(1, 'Customer', 'customer@gmail.com', '7896541236', '123'),
(2, 'User', 'user@gmail.com', '1234567890', '123'),
(3, 'Client', 'client@gmail.com', '0123456789', '123'),
(4, 'Vivek Gupta', 'vkgupta02255@gmail.com', '7054874357', '123'),
(5, 'test', 'test@gmail.com', '78596859685', '123'),
(6, 'fdcghvjb', 'dfghjhk@tyfg.txchj', '4848489', 'gvgvg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(155) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`, `status`) VALUES
(23, 'hnui', 'hbhuu@uhui.jhguy', 'jhvgvghk', 'hgvhgvghv', 'COD', 'Product 2(1)', '300', 'delivered'),
(24, 'Vivek Gupta', 'vkgupta02255@gmail.com', '7054874357', 'Naugarh\r\nChandauli', 'COD', 'Product 5(2)', '2400', 'delivered'),
(25, 'gyyk', 'gbugyvyu@hgyuy.hbjh', 'yguyg', 'jugyu', 'COD', 'product 4(2), Product 3(2), Product 2(1)', '3120', 'delivered'),
(26, 'Vivek Gupta', 'vkgupta02255@gmail.com', '7054874357', 'Naugarh\r\nChandauli', 'COD', 'product 4(2)', '1710', 'delivered'),
(27, 'Vivek Gupta', 'vkgupta02255@gmail.com', '7054874357', 'Naugarh\r\nChandauli', 'COD', 'product 4(1)', '855', 'delivered'),
(28, 'Customer', 'customer@gmail.com', '8596426351', 'LKO', 'COD', 'product 4(1), Product 2(1)', '1155', 'delivered'),
(29, 'Customer', 'customer@gmail.com', '8596426351', 'Indira Nagar, Lucknow', 'COD', 'Product 1(1)', '250', 'delivered'),
(30, 'Customer', 'customer@gmail.com', '8596426351', 'Lucknow', 'COD', 'product 4(2), Product 2(2)', '2310', 'delivered'),
(31, 'User', 'user@gmail.com', '1234567890', 'Lucknow', 'COD', 'product 4(2), Product 3(3)', '3375', 'delivered'),
(32, 'Client', 'client@gmail.com', '0123456789', 'Indira nagar, Lucknow 226016', 'COD', 'Realme 6 Pro(1)', '15999', 'delivered'),
(33, 'Customer', 'customer@gmail.com', '7896541236', 'b gh', 'COD', 'Realme 6 Pro(1)', '15999', 'delivered'),
(34, 'Customer', 'customer@gmail.com', '7896541236', 'allahabad, up, 223569', 'COD', 'Product 5(1), product 4(1)', '2055', 'delivered'),
(35, 'Customer', 'customer@gmail.com', '7896541236', 'testing', 'COD', 'Product 5(1)', '1200', 'delivered'),
(36, 'Customer', 'rajagupta206@gmail.com', '7905448304', 'Naugarh\r\nChandauli', 'COD', 'product 4(1), Product 2(1)', '1155', 'delivered'),
(37, 'Customer', 'rajagupta206@gmail.com', '7905448304', 'Naugarh\r\nChandauli', 'COD', 'product 4(1), Product 2(1)', '1155', 'delivered'),
(38, 'Customer', 'customer@gmail.com', '7896541236', 'uugyu', 'COD', 'Product 5(1)', '1200', 'delivered'),
(39, 'Customer', 'rajagupta206@gmail.com', '7905448304', 'Naugarh\r\nChandauli', 'COD', 'Realme 6 Pro(1)', '15999', 'delivered'),
(40, 'Customer', 'customer@gmail.com', '7896541236', 'Indira Nagar Sec 11, Lucknow', 'COD', 'product 4(2)', '1710', 'delivered'),
(41, 'Vivek Gupta', 'vkgupta02255@gmail.com', '7054874357', 'Naugarh\r\nChandauli', 'COD', 'Product 2(4)', '1200', 'delivered'),
(42, 'Customer', 'customer@gmail.com', '7896541236', 'mhggyuylgu mhbvygkadf vb kgyh cn,lyu', 'COD', 'Birayani(2), Chicken Curry(1)', '347', 'delivered'),
(43, 'test', 'test@gmail.com', '78596859685', 'Faizabad , Ayodhya , UP', 'COD', 'Birayani(4), Burger(1)', '445', 'delivered');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_image`, `product_code`) VALUES
(11, 'Pizza', '150', 'pizza.jpg', 'P1004'),
(12, 'Burger', '49', 'burger.jpg', 'P1005'),
(13, 'Birayani', '99', 'birayani.jpg', 'P1006'),
(15, 'Chicken Curry', '149', 'chickencurry.jpg', 'P1007');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
