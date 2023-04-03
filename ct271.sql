-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 01:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ct271`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_ad` int(20) NOT NULL,
  `name_ad` varchar(100) NOT NULL,
  `email_ad` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_ad`, `name_ad`, `email_ad`, `password`) VALUES
(1, 'nhu', 'kimnhu13.10@gmail.com', '7815696ecbf1c96e6894b779456d330e'),
(2, 'Lê Thị Kim Như', 'kimnhu14.10@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'admin', 'admin@gmaill.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(50) NOT NULL,
  `brand_name` varchar(200) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `status`) VALUES
(1, 'Áo', 1),
(2, 'Váy', 1),
(3, 'Quần', 1),
(4, 'Jumpsuit', 1),
(5, 'Túi xách', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(10) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `note` text NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `total` float NOT NULL,
  `status` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `id_user`, `note`, `address`, `phone`, `total`, `status`, `date`) VALUES
(110, '1', ' 2', 'NK CT', 795484345, 288000, 0, '2022-12-05 17:25:36'),
(111, '1', ' ', 'NK CT', 795484345, 196000, 2, '2022-12-05 17:27:13'),
(112, '1', ' ', 'NK CT', 795484345, 288000, 3, '2022-12-05 17:31:01'),
(113, '3', ' CH', 'Ninh Kiều - CT', 123456789, 352000, 1, '2022-12-05 18:37:00');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(10) NOT NULL,
  `id_or` int(10) NOT NULL,
  `id_pro` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `id_or`, `id_pro`, `quantity`, `price`) VALUES
(17, 110, 3, 1, 288000),
(18, 111, 8, 1, 196000),
(19, 112, 3, 1, 288000),
(20, 113, 6, 1, 522500),
(21, 113, 4, 2, 297000),
(22, 113, 32, 1, 352000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pr_id` int(50) NOT NULL,
  `pr_name` varchar(50) NOT NULL,
  `image` longblob NOT NULL,
  `price` int(100) NOT NULL,
  `percent` int(20) NOT NULL,
  `sale_price` int(20) NOT NULL,
  `quantity` int(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `brand_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pr_id`, `pr_name`, `image`, `price`, `percent`, `sale_price`, `quantity`, `description`, `brand_id`) VALUES
(1, 'VÁY QUẦN KIỂU ĐẮP PHỐI VIỀN', 0x6368616e7661796d696e692e706e67, 390000, 3, 378300, 6, 'Thanh lịch - Hiện đại - Năng động', 2),
(2, 'ÁO BLAZER CROP NGẮN TAY', 0x616f2062617a65722e706e67, 500000, 1, 495000, 5, 'Thanh lịch hiện đại', 1),
(3, 'ÁO SƠ MI LỆCH TÀ', 0x616f20736f206d692e706e67, 300000, 4, 288000, 3, 'Trẻ trung - Năng động', 1),
(4, 'QUẦN SUÔNG PHỐI LAI NẸP TRỤ', 0x7175616e2073756e672070686f69206c61692e706e67, 300000, 1, 297000, 30, 'Thoải mái - Trẻ trung', 1),
(5, 'JUMPSUIT TAY LIỀN', 0x6a756d707375697420746179206c69656e2e706e67, 300000, 0, 300000, 5, 'Hiện đại - Trẻ trung', 1),
(6, 'VÁY LỬNG DÁNG A', 0x766179206c756e672064616e6720612e706e67, 550000, 5, 522500, 3, 'Cá tính - Năng động - Trẻ trung.', 2),
(7, 'QUẦN JEAN ỐNG ĐỨNG LƯNG CÀI XÉO', 0x7175616e206a65616e206f6e672064756e672e706e67, 300000, 0, 300000, 5, 'Thanh lịch - Hiện đại - Năng động', 1),
(8, 'ÁO CỔ ĐỨNG BUỘC NƠ SAU LƯNG', 0x616f20636f2064756e672e706e67, 200000, 2, 196000, 4, 'Cá tính - Năng động - Trẻ trung.', 1),
(9, 'QUẦN DÀI ỐNG RỘNG NẮP TÚI GIẢ', 0x7175616e20646169206f6e6720726f6e672e706e67, 489000, 2, 479220, 2, ' Trang phục dạo phố, công sở, tiệc nhẹ.', 3),
(10, 'CHÂN VÁY MIDI XẾP', 0x6368616e20766179206d696469207865702e706e67, 500000, 2, 490000, 2, 'CHÂN VÁY MIDI XẾP', 2),
(11, 'CHÂN VÁY KIỂU ĐẮP CÀI NÚT', 0x6368616e20766179206b69657520646170206361692e77656270, 300000, 20, 240000, 2, 'Trang phục công sở.', 2),
(12, 'ÁO KIỂU CỔ BÈO TAY DÀI', 0x616f206b69657520636f207461792062656f2e77656270, 300000, 2, 294000, 8, 'Trang phục dạo phố', 1),
(13, 'QUẦN JEANS FORM STRAIGHT', 0x78616e682d6e6861745f686e7164613032305f315f32303232303930353136323332355f61353939313638663062313434303431626163653137303565383033386465365f6d61737465722e77656270, 500000, 2, 490000, 3, 'Thanh lịch - Hiện đại - Năng động', 3),
(32, 'CHÂN VÁY CHIFFON PHỐI CHÂN REN', 0x6368616e20766179206368696666726f6e2e706e67, 440000, 20, 352000, 12, 'Trang phục dạo phố, công sở.', 2),
(33, 'JUMPSUIT TAY LIỀN', 0x6a756d707375697420746179206c69656e2064656e2e706e67, 489000, 0, 489000, 10, 'Hiện đại - Trẻ trung - Năng động - Phóng khoáng.', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `email`, `password`) VALUES
(1, 'kimnhu13', 'Lê Thị Kim Như', 'kimnhu13.10@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'giahuy1307', 'Nguyễn Gia Huy', 'giahuy1307@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'camhan12', 'Dương Thị Cẩm Hân', 'han@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_ad`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pr_id`),
  ADD KEY `brand_id` (`brand_id`);

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
  MODIFY `id_ad` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pr_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
