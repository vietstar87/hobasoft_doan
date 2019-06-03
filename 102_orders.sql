-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2019 at 07:58 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `102_orders`
--

CREATE TABLE `102_orders` (
  `id` int(11) NOT NULL,
  `order_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_district` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_ward` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_phone` int(20) NOT NULL,
  `order_product` int(255) NOT NULL,
  `order_quantity` int(255) NOT NULL,
  `order_total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `102_orders`
--

INSERT INTO `102_orders` (`id`, `order_name`, `order_address`, `order_city`, `order_district`, `order_ward`, `order_phone`, `order_product`, `order_quantity`, `order_total`) VALUES
(1, 'Nguyen Xuan Viet', 'Số 1', 'Hà Nội', 'Long Bien', 'Bo De', 946688663, 121, 2, 7),
(2, 'Nguyen Xuan Viet', 'Nguyen Son', 'Hà Nội', 'Long Bien', 'Bo De', 946688636, 121, 2, 7900000),
(3, 'Nguyen Xuan Viet', '41/158/38/29 Nguyen Son', 'Hà Nội', 'HaNoi', 'Bo De', 946688636, 105, 6, 11400000),
(4, 'Trang', 'Số 1 Phố Huế', 'Hà Nội', 'Hai Bà Trưng', 'Ngô Thì Nhậm', 912312431, 121, 10, 39500000),
(5, 'Nguyễn Xuân Việt', '41/158/38/29 Nguyen Son', 'Hà Nội', 'Long Biên', 'Bồ Đề', 946688636, 105, 1, 1900000),
(6, 'Nguyễn Xuân Việt', '41/158/38/29 Nguyen Son', 'Hà Nội', 'Long Biên', 'Bồ Đề', 946688636, 105, 1, 1900000),
(7, 'Nguyễn Xuân Việt', '41/158/38/29 Nguyen Son', 'Hà Nội', 'Long Biên', 'Bồ Đề', 946688636, 105, 1, 1900000),
(8, 'Nguyễn Xuân Việt', '41/158/38/29 Nguyen Son', 'Hà Nội', 'Long Biên', 'Bồ Đề', 946688636, 105, 1, 1900000),
(9, 'Nguyễn Xuân Việt', '41/158/38/29 Nguyen Son', 'Hà Nội', 'Long Biên', 'Bồ Đề', 946688636, 105, 1, 1900000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `102_orders`
--
ALTER TABLE `102_orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `102_orders`
--
ALTER TABLE `102_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
