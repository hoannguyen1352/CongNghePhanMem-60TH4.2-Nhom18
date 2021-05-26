-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 01:26 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `level` int(11) NOT NULL,
  `token` varchar(12) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `name` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `level`, `token`, `name`, `phone`) VALUES
(1, 'present', 'vietphuong2k', 1, 'aZufhsydvshd', 'Phuong', '0337646311'),
(2, 'nam', '1', 0, 'asdasdadad', 'Nam', '0919734892');

-- --------------------------------------------------------

--
-- Table structure for table `billdetail`
--

CREATE TABLE `billdetail` (
  `id` int(11) UNSIGNED NOT NULL,
  `bid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `number` int(10) UNSIGNED NOT NULL,
  `total` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `billdetail`
--

INSERT INTO `billdetail` (`id`, `bid`, `did`, `number`, `total`) VALUES
(6, 8, 2, 2, 60000),
(7, 8, 3, 2, 30000),
(8, 9, 1, 3, 75000),
(9, 9, 2, 3, 90000),
(10, 9, 3, 3, 45000),
(11, 10, 2, 2, 60000),
(12, 10, 3, 2, 30000),
(13, 11, 1, 2, 50000),
(14, 11, 2, 3, 90000),
(15, 11, 3, 2, 30000),
(16, 12, 2, 3, 90000),
(17, 12, 3, 2, 30000),
(18, 13, 2, 1, 30000),
(19, 13, 3, 3, 45000),
(20, 13, 4, 3, 90000),
(21, 14, 1, 2, 50000),
(22, 14, 2, 3, 90000),
(23, 14, 3, 1, 15000),
(24, 14, 4, 2, 60000),
(25, 14, 5, 3, 60000),
(26, 15, 1, 18, 450000),
(27, 15, 2, 6, 180000),
(28, 15, 3, 4, 60000),
(29, 15, 4, 2, 60000),
(30, 15, 8, 4, 60000);

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(11) UNSIGNED NOT NULL,
  `cid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `cid`, `tid`, `date`) VALUES
(8, -1, 8, '2021-05-25'),
(9, 2, 9, '2021-05-25'),
(10, -1, 2, '2021-05-25'),
(11, -1, 1, '2021-05-25'),
(12, -1, 8, '2021-05-25'),
(13, -1, 1, '2021-05-26'),
(14, -1, 2, '2021-05-26'),
(15, 1, 1, '2021-05-26');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `total` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `total`) VALUES
(1, 'Nguyễn Hà Phong', '0919734742', 1500000),
(2, 'Lê Thành Long', '0968423121', 500000),
(3, 'Nguyễn Nam', '0349340719', 0),
(4, 'Lê Sơn', '1900561252', 0),
(5, 'Vũ Tài', '0185364223', 0);

-- --------------------------------------------------------

--
-- Table structure for table `drinks`
--

CREATE TABLE `drinks` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `price` int(11) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `note` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `drinks`
--

INSERT INTO `drinks` (`id`, `name`, `price`, `image`, `note`) VALUES
(1, 'bạc xỉu', 25000, '', ''),
(2, 'cà phê đen đá', 30000, '', ''),
(3, 'Nâu đá', 15000, '', ''),
(4, 'Capuchino', 30000, '', ''),
(5, 'Latte', 20000, '', ''),
(6, 'Cà phê đá', 15000, '', ''),
(7, 'cà phê sữa', 20000, '', ''),
(8, 'Cà phê Matcha', 15000, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `infor` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `name`, `status`, `infor`) VALUES
(1, 'Bàn 1', 1, '{\"1\":6,\"2\":0,\"3\":2,\"4\":0,\"5\":0,\"6\":0,\"7\":0,\"8\":0}'),
(2, 'Bàn 2', 1, '{\"1\":0,\"2\":0,\"3\":0,\"4\":0,\"5\":0,\"6\":0,\"7\":0,\"8\":2}'),
(3, 'Bàn 3', 1, '{\"1\":0,\"2\":0,\"3\":0,\"4\":0,\"5\":0,\"6\":0,\"7\":0,\"8\":\"3\"}'),
(4, 'Bàn 4', 1, '{\"1\":0,\"2\":0,\"3\":0,\"4\":0,\"5\":0,\"6\":0,\"7\":0,\"8\":2}'),
(5, 'Bàn 5', 0, '{\"1\":0,\"2\":0,\"3\":0,\"4\":0,\"5\":0,\"6\":0,\"7\":0,\"8\":0}'),
(6, 'Bàn 6', 0, '{\"1\":0,\"2\":0,\"3\":0,\"4\":0,\"5\":0,\"6\":0,\"7\":0}'),
(7, 'Bàn 7', 0, '{\"1\":0,\"2\":0,\"3\":0,\"4\":0,\"5\":0,\"6\":0,\"7\":0}'),
(8, 'Bàn 8', 1, '{\"1\":0,\"2\":0,\"3\":0,\"4\":0,\"5\":3,\"6\":3,\"7\":0}'),
(9, 'Bàn 9', 0, '{\"1\":0,\"2\":0,\"3\":0,\"4\":0,\"5\":0,\"6\":0,\"7\":0}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`) USING HASH;

--
-- Indexes for table `billdetail`
--
ALTER TABLE `billdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `billdetail`
--
ALTER TABLE `billdetail`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `drinks`
--
ALTER TABLE `drinks`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
