-- phpMyAdmin SQL Dump
<<<<<<< HEAD
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 26, 2021 lúc 01:52 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34
=======
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 01:26 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2
>>>>>>> c155cd68cbcf7526775463febab4b8573a0ef67c

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
<<<<<<< HEAD
(1, 'present', '12345', 1, 'aZufhsydvshd', 'Phuong', '0337646311'),
(2, 'nam', '1', 0, 'asdasdadad', 'Nam', '0919734892'),
(5, 'An', '123', 0, 'sjkdkjui', 'An', '0813279843');
=======
(1, 'present', 'vietphuong2k', 1, 'aZufhsydvshd', 'Phuong', '0337646311'),
(2, 'nam', '1', 0, 'asdasdadad', 'Nam', '0919734892');
>>>>>>> c155cd68cbcf7526775463febab4b8573a0ef67c

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
<<<<<<< HEAD
-- Đang đổ dữ liệu cho bảng `billdetail`
=======
-- Dumping data for table `billdetail`
>>>>>>> c155cd68cbcf7526775463febab4b8573a0ef67c
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
<<<<<<< HEAD
(26, 15, 8, 1, 15000),
(27, 16, 5, 3, 60000),
(28, 16, 6, 3, 45000),
(29, 16, 8, 1, 15000),
(30, 16, 9, 1, 30000),
(31, 17, 1, 2, 50000),
(32, 17, 2, 8, 240000),
(33, 17, 3, 2, 30000),
(34, 17, 4, 4, 120000),
(35, 17, 5, 4, 80000),
(36, 17, 6, 5, 75000),
(37, 17, 7, 4, 80000),
(38, 17, 8, 1, 15000),
(39, 17, 9, 2, 60000),
(40, 18, 7, 3, 60000),
(41, 19, 7, 2, 40000);
=======
(26, 15, 1, 18, 450000),
(27, 15, 2, 6, 180000),
(28, 15, 3, 4, 60000),
(29, 15, 4, 2, 60000),
(30, 15, 8, 4, 60000);
>>>>>>> c155cd68cbcf7526775463febab4b8573a0ef67c

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(11) UNSIGNED NOT NULL,
<<<<<<< HEAD
  `cid` int(11) DEFAULT NULL,
=======
  `cid` int(11) NOT NULL,
>>>>>>> c155cd68cbcf7526775463febab4b8573a0ef67c
  `tid` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
<<<<<<< HEAD
-- Đang đổ dữ liệu cho bảng `bills`
=======
-- Dumping data for table `bills`
>>>>>>> c155cd68cbcf7526775463febab4b8573a0ef67c
--

INSERT INTO `bills` (`id`, `cid`, `tid`, `date`) VALUES
(8, -1, 8, '2021-05-25'),
(9, 2, 9, '2021-05-25'),
(10, -1, 2, '2021-05-25'),
(11, -1, 1, '2021-05-25'),
(12, -1, 8, '2021-05-25'),
(13, -1, 1, '2021-05-26'),
(14, -1, 2, '2021-05-26'),
<<<<<<< HEAD
(15, 1, 7, '2021-05-26'),
(16, 0, 8, '2021-05-26'),
(17, 2, 1, '2021-05-26'),
(18, 3, 1, '2021-05-26'),
(19, 0, 1, '2021-05-26');
=======
(15, 1, 1, '2021-05-26');
>>>>>>> c155cd68cbcf7526775463febab4b8573a0ef67c

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
<<<<<<< HEAD
-- Đang đổ dữ liệu cho bảng `customers`
=======
-- Dumping data for table `customers`
>>>>>>> c155cd68cbcf7526775463febab4b8573a0ef67c
--

INSERT INTO `customers` (`id`, `name`, `phone`, `total`) VALUES
(1, 'Nguyễn Hà Phong', '0919734742', 1500000),
<<<<<<< HEAD
(2, 'Lê Thành Long', '0337646432', 500000),
=======
(2, 'Lê Thành Long', '0968423121', 500000),
>>>>>>> c155cd68cbcf7526775463febab4b8573a0ef67c
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
<<<<<<< HEAD
-- Đang đổ dữ liệu cho bảng `drinks`
--

INSERT INTO `drinks` (`id`, `name`, `price`, `image`, `note`) VALUES
(1, 'bạc xỉu', 25000, './assets/image/1.jpg', ''),
(2, 'cà phê đen đá', 30000, './assets/image/2.jpg', ''),
(3, 'Cà phê Mocha', 15000, './assets/image/3.jpg', ''),
(4, 'Capuchino', 30000, './assets/image/4.jpg', ''),
(5, 'Latte', 20000, './assets/image/5.jpg', ''),
(6, 'Cà phê Espresso', 25000, './assets/image/6.jpg', ''),
(7, 'cà phê sữa đá', 20000, './assets/image/7.jpg', ''),
(8, 'Cà phê Matcha', 15000, './assets/image/8.jpg', ''),
(9, 'Cà phê đá xay', 30000, './assets/image/9.jpg', '');
=======
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
>>>>>>> c155cd68cbcf7526775463febab4b8573a0ef67c

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
<<<<<<< HEAD
(1, 'Bàn 1', 0, '{\"1\":0,\"2\":0,\"3\":0,\"4\":0,\"5\":0,\"6\":0,\"7\":0,\"8\":0,\"9\":0}'),
=======
(1, 'Bàn 1', 1, '{\"1\":6,\"2\":0,\"3\":2,\"4\":0,\"5\":0,\"6\":0,\"7\":0,\"8\":0}'),
>>>>>>> c155cd68cbcf7526775463febab4b8573a0ef67c
(2, 'Bàn 2', 1, '{\"1\":0,\"2\":0,\"3\":0,\"4\":0,\"5\":0,\"6\":0,\"7\":0,\"8\":2}'),
(3, 'Bàn 3', 1, '{\"1\":0,\"2\":0,\"3\":0,\"4\":0,\"5\":0,\"6\":0,\"7\":0,\"8\":\"3\"}'),
(4, 'Bàn 4', 1, '{\"1\":0,\"2\":0,\"3\":0,\"4\":0,\"5\":0,\"6\":0,\"7\":0,\"8\":2}'),
(5, 'Bàn 5', 0, '{\"1\":0,\"2\":0,\"3\":0,\"4\":0,\"5\":0,\"6\":0,\"7\":0,\"8\":0}'),
(6, 'Bàn 6', 0, '{\"1\":0,\"2\":0,\"3\":0,\"4\":0,\"5\":0,\"6\":0,\"7\":0}'),
<<<<<<< HEAD
(7, 'Bàn 7', 0, '{\"1\":0,\"2\":0,\"3\":0,\"4\":0,\"5\":0,\"6\":0,\"7\":0,\"8\":0,\"9\":0}'),
(8, 'Bàn 8', 1, '{\"1\":0,\"2\":0,\"3\":0,\"4\":0,\"5\":0,\"6\":2,\"7\":0,\"8\":0,\"9\":0}'),
(9, 'Bàn 9', 1, '{\"1\":0,\"2\":0,\"3\":0,\"4\":0,\"5\":0,\"6\":0,\"7\":0,\"8\":\"0\",\"9\":\"3\"}');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `accounts`
=======
(7, 'Bàn 7', 0, '{\"1\":0,\"2\":0,\"3\":0,\"4\":0,\"5\":0,\"6\":0,\"7\":0}'),
(8, 'Bàn 8', 1, '{\"1\":0,\"2\":0,\"3\":0,\"4\":0,\"5\":3,\"6\":3,\"7\":0}'),
(9, 'Bàn 9', 0, '{\"1\":0,\"2\":0,\"3\":0,\"4\":0,\"5\":0,\"6\":0,\"7\":0}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
>>>>>>> c155cd68cbcf7526775463febab4b8573a0ef67c
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`) USING HASH;

--
<<<<<<< HEAD
-- Chỉ mục cho bảng `billdetail`
=======
-- Indexes for table `billdetail`
>>>>>>> c155cd68cbcf7526775463febab4b8573a0ef67c
--
ALTER TABLE `billdetail`
  ADD PRIMARY KEY (`id`);

--
<<<<<<< HEAD
-- Chỉ mục cho bảng `bills`
=======
-- Indexes for table `bills`
>>>>>>> c155cd68cbcf7526775463febab4b8573a0ef67c
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
<<<<<<< HEAD
-- Chỉ mục cho bảng `customers`
=======
-- Indexes for table `customers`
>>>>>>> c155cd68cbcf7526775463febab4b8573a0ef67c
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
<<<<<<< HEAD
-- Chỉ mục cho bảng `drinks`
=======
-- Indexes for table `drinks`
>>>>>>> c155cd68cbcf7526775463febab4b8573a0ef67c
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`id`);

--
<<<<<<< HEAD
-- Chỉ mục cho bảng `tables`
=======
-- Indexes for table `tables`
>>>>>>> c155cd68cbcf7526775463febab4b8573a0ef67c
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
<<<<<<< HEAD
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `billdetail`
--
ALTER TABLE `billdetail`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `customers`
=======
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
>>>>>>> c155cd68cbcf7526775463febab4b8573a0ef67c
--
ALTER TABLE `customers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
<<<<<<< HEAD
-- AUTO_INCREMENT cho bảng `drinks`
--
ALTER TABLE `drinks`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tables`
=======
-- AUTO_INCREMENT for table `drinks`
--
ALTER TABLE `drinks`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tables`
>>>>>>> c155cd68cbcf7526775463febab4b8573a0ef67c
--
ALTER TABLE `tables`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
