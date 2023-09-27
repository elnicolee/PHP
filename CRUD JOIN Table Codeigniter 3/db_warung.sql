-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2023 at 05:04 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_warung`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_buyer`
--

CREATE TABLE `tabel_buyer` (
  `id` int(11) NOT NULL,
  `name_buyer` varchar(200) NOT NULL,
  `phone` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_buyer`
--

INSERT INTO `tabel_buyer` (`id`, `name_buyer`, `phone`) VALUES
(1, 'Jonathan Matthew', '085257615331'),
(2, 'Michelle Alexandra', '085257615334');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_category`
--

CREATE TABLE `tabel_category` (
  `id` int(11) NOT NULL,
  `name_category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_category`
--

INSERT INTO `tabel_category` (`id`, `name_category`) VALUES
(1, 'Electronik'),
(2, 'Electronik');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_payment`
--

CREATE TABLE `tabel_payment` (
  `id` int(11) NOT NULL,
  `name_payment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_payment`
--

INSERT INTO `tabel_payment` (`id`, `name_payment`) VALUES
(1, 'M-Banking'),
(2, 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_product`
--

CREATE TABLE `tabel_product` (
  `id` int(11) NOT NULL,
  `name_product` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_product`
--

INSERT INTO `tabel_product` (`id`, `name_product`, `price`, `category_id`) VALUES
(1, 'Iphone 14 Pro', 20000000, 1),
(2, 'Iphone 13 Mini', 12000000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_transaction`
--

CREATE TABLE `tabel_transaction` (
  `id` varchar(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_transaction`
--

INSERT INTO `tabel_transaction` (`id`, `product_id`, `payment_id`, `buyer_id`, `created_at`) VALUES
('650ea7c44ed', 1, 2, 1, '2023-09-23 09:22:22'),
('6510fbca280', 1, 2, 1, '2023-09-25 03:17:30'),
('651104c94f8', 2, 1, 2, '2023-09-25 03:55:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_buyer`
--
ALTER TABLE `tabel_buyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_category`
--
ALTER TABLE `tabel_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_payment`
--
ALTER TABLE `tabel_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_product`
--
ALTER TABLE `tabel_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `tabel_transaction`
--
ALTER TABLE `tabel_transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `payment_id` (`payment_id`),
  ADD KEY `buyer_id` (`buyer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_buyer`
--
ALTER TABLE `tabel_buyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tabel_category`
--
ALTER TABLE `tabel_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tabel_payment`
--
ALTER TABLE `tabel_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tabel_product`
--
ALTER TABLE `tabel_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_transaction`
--
ALTER TABLE `tabel_transaction`
  ADD CONSTRAINT `tabel_transaction_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tabel_product` (`id`),
  ADD CONSTRAINT `tabel_transaction_ibfk_2` FOREIGN KEY (`payment_id`) REFERENCES `tabel_payment` (`id`),
  ADD CONSTRAINT `tabel_transaction_ibfk_3` FOREIGN KEY (`buyer_id`) REFERENCES `tabel_buyer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
