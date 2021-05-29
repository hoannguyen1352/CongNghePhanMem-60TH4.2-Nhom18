-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 29, 2021 lúc 07:53 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cafe`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accounts`
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
-- Đang đổ dữ liệu cho bảng `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `level`, `token`, `name`, `phone`) VALUES
(1, 'present', '12345', 1, 'aZufhsydvshd', 'Phuong', '0337646311'),
(2, 'nam', '1', 0, 'asdasdadad', 'Nam', '0919734892'),
(5, 'An', '123', 0, 'sjkdkjui', 'An', '0813279843');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `billdetail`
--

CREATE TABLE `billdetail` (
  `bid` int(10) UNSIGNED NOT NULL,
  `did` int(10) UNSIGNED NOT NULL,
  `number` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `billdetail`
--

INSERT INTO `billdetail` (`bid`, `did`, `number`, `total`) VALUES
(1, 3, 2, 30000),
(1, 6, 2, 50000),
(1, 7, 1, 20000),
(2, 2, 2, 60000),
(2, 4, 3, 90000),
(2, 10, 5, 150000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `cid` int(10) UNSIGNED NOT NULL,
  `tid` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`id`, `cid`, `tid`, `date`) VALUES
(1, 1, 1, '2021-05-29'),
(2, 1, 1, '2021-05-30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `books`
--

CREATE TABLE `books` (
  `tbid` int(10) UNSIGNED NOT NULL,
  `did` int(10) UNSIGNED NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `books`
--

INSERT INTO `books` (`tbid`, `did`, `number`) VALUES
(2, 7, 3),
(2, 8, 2),
(3, 2, 3),
(3, 6, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `total`) VALUES
(1, 'Nguyễn Hà Phong', '0337646311', 5368000),
(2, 'Lê Thành Long', '0337646432', 500000),
(3, 'Nguyễn Nam', '0349340719', 0),
(4, 'Lê Sơn', '1900561252', 0),
(5, 'Vũ Tài', '0185364223', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `drinks`
--

CREATE TABLE `drinks` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `price` int(11) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `note` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `drinks`
--

INSERT INTO `drinks` (`id`, `name`, `price`, `image`, `note`) VALUES
(2, 'cà phê đen đá', 30000, './assets/image/2.jpg', ''),
(3, 'Cà phê Mocha', 15000, './assets/image/3.jpg', ''),
(4, 'Capuchino', 30000, './assets/image/4.jpg', ''),
(5, 'Latte', 20000, './assets/image/5.jpg', ''),
(6, 'Cà phê Espresso', 25000, './assets/image/6.jpg', ''),
(7, 'cà phê sữa đá', 20000, './assets/image/7.jpg', ''),
(8, 'Cà phê Matcha', 15000, './assets/image/8.jpg', ''),
(10, 'Cà phê đá xay', 30000, './assets/image/10.jpg', ''),
(11, 'bạc xỉu', 30000, './assets/image/ly-ca-phe-bac-xiu-da.jpg.jpg', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tables`
--

CREATE TABLE `tables` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tables`
--

INSERT INTO `tables` (`id`, `name`, `status`) VALUES
(1, 'Bàn 1', 0),
(2, 'Bàn 2', 1),
(3, 'Bàn 3', 1),
(4, 'Bàn 4', 0),
(5, 'Bàn 5', 0),
(6, 'Bàn 6', 0),
(7, 'Bàn 7', 0),
(8, 'Bàn 8', 0),
(9, 'Bàn 9', 0),
(10, 'Bàn10', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`) USING HASH;

--
-- Chỉ mục cho bảng `billdetail`
--
ALTER TABLE `billdetail`
  ADD PRIMARY KEY (`bid`,`did`),
  ADD KEY `bid` (`bid`),
  ADD KEY `did` (`did`);

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cid` (`cid`),
  ADD KEY `tid` (`tid`);

--
-- Chỉ mục cho bảng `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`tbid`,`did`),
  ADD KEY `tbid` (`tbid`),
  ADD KEY `did` (`did`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `drinks`
--
ALTER TABLE `drinks`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tables`
--
ALTER TABLE `tables`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `billdetail`
--
ALTER TABLE `billdetail`
  ADD CONSTRAINT `billdetail_ibfk_2` FOREIGN KEY (`did`) REFERENCES `drinks` (`id`),
  ADD CONSTRAINT `billdetail_ibfk_3` FOREIGN KEY (`bid`) REFERENCES `bills` (`id`);

--
-- Các ràng buộc cho bảng `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `tables` (`id`),
  ADD CONSTRAINT `bills_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `customers` (`id`);

--
-- Các ràng buộc cho bảng `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`did`) REFERENCES `drinks` (`id`),
  ADD CONSTRAINT `books_ibfk_3` FOREIGN KEY (`tbid`) REFERENCES `tables` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
