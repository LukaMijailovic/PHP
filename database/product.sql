-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2020 at 09:33 AM
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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
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
(1, 'Arstid', 'De lampenkap van textiel geeft een zacht en decoratief licht.\r\n<br><br>\r\nLichtbron wordt apart verkocht. IKEA adviseert de led-lamp E27 globevorm opaalwit.\r\n<br><b>\r\nGebruik een opalen lichtbron als je een gewone lampenkap of lamp hebt en je een gelijkmatig, gespreid licht wilt.\r\n<br><br>\r\nVoorzien ', 1, 40, 'wit', 1, 300),
(2, 'buitenlamp', '.', 2, 10, 'black', 1, 300),
(3, 'buitenlamp2', '.', 3, 10, 'black', 1, 300),
(4, 'gans', '.', 4, 10, 'black', 1, 300),
(5, 'giraf', '.', 5, 10, 'black', 1, 300),
(6, 'giraf2', '.', 6, 10, 'black', 1, 300),
(7, 'hektar', '.', 7, 10, 'black', 1, 300),
(8, 'jesse', '.', 8, 10, 'black', 1, 300),
(9, 'lampje', '.', 9, 10, 'black', 1, 300),
(10, 'llahra', '.', 10, 10, 'black', 1, 300),
(11, 'struisvogel', '.', 11, 10, 'black', 1, 300);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
