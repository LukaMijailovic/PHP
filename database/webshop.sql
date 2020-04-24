-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2020 at 01:16 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(1) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'docent', 'docent123');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `description` varchar(300) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `active`) VALUES
(1, 'tafellamp', 'Tafellampen zijn binnenlampen voor op tafel.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `firstName` varchar(15) NOT NULL,
  `middleName` varchar(10) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `street` varchar(80) NOT NULL,
  `houseNumber` int(4) NOT NULL,
  `houseNumber_addon` varchar(4) NOT NULL,
  `zipCode` varchar(8) NOT NULL,
  `city` varchar(35) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `newsletter_subscription` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `gender`, `firstName`, `middleName`, `lastName`, `street`, `houseNumber`, `houseNumber_addon`, `zipCode`, `city`, `phone`, `email`, `password`, `newsletter_subscription`) VALUES
(4, 'other', 'Luka', '', 'Mijailovic', 'Heer Arendstraat', 20, '', '3401 ZP', 'IJsselstein', '0681404300', 'lukabazuka10@gmail.com', '123test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` int(10) NOT NULL,
  `color` varchar(10) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `weight` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `category_id`, `price`, `color`, `active`, `weight`) VALUES
(7, 'Nike SB Dunk Low x Travis Scott', 'A collab between Travis Scott and Nike SB', 0, 999, 'Bandana', 0, 0),
(8, 'Air Jordan 1 x Union ', 'A collab between Union and Jordan', 0, 1299, 'Red', 0, 0),
(10, 'Nike SB Dunk Low Concepts Purple Lobster', 'purple lobster', 0, 599, 'Purple', 0, 0),
(12, 'Nike Air Max 1 \"Parra\"', 'A collab between Parra and Nike', 0, 299, 'Grey', 0, 0),
(14, 'Nike Air Max 1 x Atmos \"Animal Pack\"', 'A collab between Atmos and Nike', 0, 349, 'Panthered', 0, 0),
(15, 'Jordan 1 Retro High Court Purple White', 'Jordan 1', 0, 219, 'Purple', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `product_id`, `image`, `active`) VALUES
(2, 2, 'uploads/travissss.jpg', 0),
(3, 3, 'uploads/Nike-Air-Max-1-Atmos-Animal-Pack-2-2018-Black-Box-Product.jpg', 0),
(4, 4, 'uploads/img.jpg', 0),
(5, 5, 'uploads/img01 (2).jpg', 0),
(6, 6, 'uploads/img05.jpg', 0),
(7, 7, 'uploads/img01.jpg', 0),
(8, 8, 'uploads/img0.jpg', 0),
(9, 9, 'uploads/YEEZY_BOOST_350_V2_TAIL_LIGHT_Right_PR300_4000x2976-681x507.jpg', 0),
(10, 10, 'uploads/purple.jpg', 0),
(11, 11, 'uploads/parra.jpg', 0),
(12, 12, 'uploads/parra.jpg', 0),
(13, 13, 'uploads/prsto.jpg', 0),
(14, 14, 'uploads/Nike-Air-Max-1-Atmos-Animal-Pack-2-2018-Black-Box-Product.jpg', 0),
(15, 15, 'uploads/court.jpg', 0),
(16, 16, 'uploads/781042.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `middleName` varchar(10) NOT NULL,
  `lastName` varchar(40) NOT NULL,
  `birthDate` date NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `middleName`, `lastName`, `birthDate`, `email`, `password`) VALUES
(1, 'Luka', '', 'Mijailovic', '2003-03-10', 'lukabazuka10@gmail.com', 'jnsn'),
(2, 'Luka', '', 'Mijailovic', '2003-03-10', 'lukabazuka10@gmail.com', 'Luka'),
(8, 'Luka', '', 'Mijailovic', '2003-03-10', 'lukabazuka10@gmail.com', 'hihi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
