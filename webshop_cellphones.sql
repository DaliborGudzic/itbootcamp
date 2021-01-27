-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2021 at 12:41 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop_cellphones`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salt` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `salt`) VALUES
(1, 'dalibor', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE `phones` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `brand` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dimensions` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `front_camera` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `back_camera` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chipset` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ram` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `battery` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `memory` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operating_system` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hires_pic` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`id`, `group_id`, `brand`, `model`, `dimensions`, `display`, `front_camera`, `back_camera`, `chipset`, `ram`, `battery`, `weight`, `memory`, `operating_system`, `pic`, `hires_pic`, `price`, `discount`) VALUES
(1, 1, 'Samsung', 'Galaxy A51', '158.5 x 73.6 x 7.9 m', '6.5', '32 MP, f/2.2, 26mm (wide), 1/2.8', '48 MP, f/2.0, 26mm (wide), 1/2.0', 'Exynos 9611 (10nm)', '4-8GB RAM', '4000 mAh Li-Po', '172 g', '64GB, 128G', 'Android 10, One UI 2', 'images/samsung-galaxy-a51.jpg', 'images/h-samsung-galaxy-a51.jpg', 250, 0),
(2, 1, 'Samsung', 'Galaxy S21 Ultra', '157.6 x 74.1 x 7.8 mm', '6.8', '40 MP, f/2.2, 26mm (wide), 1/2.8', '108 MP (2nd gen), f/1.8, 26mm (wide), 1/1.33', 'Exynos 2100', '12GB, 16GB', '5000 mAh, Li-Po', '175g', '128GB - 512GB', 'Android 11, One UI 3.0', 'images/samsung-galaxy-s21-ultra-5g-.jpg', 'images/h-samsung-galaxy-s21-ultra-5g-.jpg', 1000, 0),
(3, 1, 'Samsung', 'Galaxy S10', '149.9 x 70.4 x 7.8 mm', '6.1\" 1440x3040 pixels', '12 MP, f/1.5-2.4, 26mm (wide), 1/2.55\", 1.4µm, Dual Pixel PDAF, OIS', '10 MP, f/1.9, 26mm (wide), 1/3\", 1.22µm, Dual Pixel PDAF', 'Exynos 9820 (8 nm) - EMEA/LATAM', '8GB RAM', '3400 mAh, Li-Ion', '157 g', '128GB - 512GB', 'Android 9.0 (Pie), upgradable to Android 10, One U', 'images/samsung-galaxy-s10.jpg', 'images/h-samsung-galaxy-s10.jpg', 500, 0),
(4, 1, 'Samsung', 'Galaxy S10+', '157.6 x 74.1 x 7.8 mm', '6.4\" 1440x3040 pixels', '10 MP, f/1.9, 26mm (wide), 1/3\", 1.22µm, Dual Pixel PDAF', '12 MP, f/1.5-2.4, 26mm (wide), 1/2.55\", 1.4µm, Dual Pixel PDAF, OIS', 'Exynos 9820 (8 nm) - EMEA/LATAM', '8GB - 12GB RAM', '4100 mAh, Li-Ion', '175 g', '128GB - 1TB', 'Android 9.0 (Pie), upgradable to Android 10, One U', 'images/samsung-galaxy-s10-plus.jpg', 'images/h-samsung-galaxy-s10-plus.jpg', 550, 0),
(5, 1, 'Huawei', 'Nova 5T', '154.3 x 74 x 7.8 mm', '6.26\" 1080x2340 pixels', '32 MP, f/2.0, 26mm (wide), 1/2.8\", 0.8µm', '48 MP, f/1.8, 28mm (wide), 1/2.0\", 0.8µm, PDAF', 'Kirin 980 (7 nm)', '6GB - 8GB RAM', '3750 mAh, Li-Po', '174 g', '128GB', 'Android 9.0 (Pie), upgradable to Android 10, EMUI ', 'images/huawei-nova-5t.jpg', 'images/h-huawei-nova-5t.jpg', 250, 0),
(6, 1, 'Huawei', 'P smart 2021', '165.7 x 76.9 x 9.3 mm', '6.67\" 1080x2400 pixels', '8 MP, f/2.0, (wide)', '48 MP, f/1.8, 26mm (wide), 1/2.0\", 0.8µm, PDAF', 'Kirin 710A (14 nm)', '4GB RAM', '5000 mAh, Li-Po', '206 g', '128GB', 'Android 10, EMUI 10.1, no Google Play Services', 'images/huawei-p-smart-2021.jpg', 'images/h-huawei-p-smart-2021.jpg', 180, 0),
(7, 1, 'Motorola', 'Moto G 5G', '166.1 x 76.1 x 9.9 mm', '6.7\" 1080x2400 pixels', '16 MP, f/2.2, (wide), 1.0µm', '48 MP, f/1.7, 26mm (wide), 1/2.0\", 0.8µm, PDAF', 'Qualcomm Snapdragon 750G 5G (8 nm)', '4GB - 6GB RAM', '5000 mAh Li-Po', '212 g', '64GB - 128GB', 'Android 10', 'images/motorola-moto-g-5g.jpg', 'images/h-motorola-moto-g-5g.jpg', 200, 0),
(8, 1, 'Motorola', 'Moto G9 Plus', '170 x 78.1 x 9.7 mm', '6.81\" 1080x2400 pixels', '16 MP, f/2.0, 29mm (standard)', '64 MP, f/1.8, 26mm (wide), 1/1.73\", 0.8µm, PDAF', 'Qualcomm Snapdragon 730G (8 nm)', '4GB - 6GB RAM', '5000 mAh, Li-Po', '223 g', '128GB', 'Android 10', 'images/motorola-moto-g9-plus-new.jpg', 'images/h-motorola-moto-g9-plus-new.jpg', 180, 0),
(9, 1, 'Samsung', 'Galaxy Note 10 Lite', '163.7 x 76.1 x 8.7 mm', '6.7\" 1080x2400 pixels', '32 MP, f/2.2, 25mm (wide), 1/2.8\", 0.8µm', '12 MP, f/1.7, 27mm (wide), 1/2.55\", 1.4µm, Dual Pixel PDAF, OIS', 'Exynos 9810 (10 nm)', '6GB - 8GB RAM', '4500mAh, Li-PO', '199 g', '128GB', 'Android 10, One UI 2.5', 'images/sasmung-galaxy-note10-lite-r.jpg', 'images/h-sasmung-galaxy-note10-lite-r.jpg', 320, 0),
(10, 1, 'Samsung', 'Galaxy Note 10', '151 x 71.8 x 7.9 mm', '6.3\" 1080x2280 pixels', '10 MP, f/2.2, 26mm (wide), 1/3\", 1.22µm, Dual Pixel PDAF', '12 MP, f/1.5-2.4, 27mm (wide), 1/2.55\", 1.4µm', 'Exynos 9825 (7 nm)', '8GB RAM', '3500 mAh, Li-Ion', '168 g', '256GB', 'Android 9.0 (Pie), upgradable to Android 11, One U', 'images/samsung-galaxy-note10-.jpg', 'images/h-samsung-galaxy-note10-.jpg', 450, 0),
(11, 1, 'Motorola', 'Pixel 4a 5G', '153.9 x 74 x 8.2 mm', '6.2\" 1080x2340 pixels', '8 MP, f/2.0, 24mm (wide), 1/4.0\", 1.12µm', '12.2 MP, f/1.7, 27mm (wide), 1/2.55\", 1.4µm, dual pixel PDAF, OIS 16 MP, f/2.2, 107˚ (ultrawide)', 'Qualcomm SM7250 Snapdragon 765G (7 nm)', '6GB RAM', '3885 mAh, Li-Po', '168 g', '128GB', 'Android 11', 'images/google-pixel-4a-5g.jpg', 'images/h-google-pixel-4a-5g.jpg', 480, 0),
(12, 1, 'Motorola', 'Pixel 5', '44.7 x 70.4 x 8 mm', '6.0', '8 MP, f/2.0, 24mm (wide), 1/4.0', '12.2 MP, f/1.7, 27mm (wide), 1/2.55', 'Qualcomm SM7250 Snapdragon 765G (7 nm)', '8GB RAM', '4080 mAh, Li-Po', '151 g', '128GB', 'Android 11', 'images/google-pixel-5-5g.jpg', 'images/h-google-pixel-5-5g.jpg', 700, 0),
(13, 1, 'Huawei', 'Mate 40 Pro', '162.9 x 75.5 x 9.1 mm', '6.76\" 1344x2772 pixels', '13 MP, f/2.4, 18mm (ultrawide)', '50 MP, f/1.9, 23mm (wide), 1/1.28\", 1.22µm, omnidirectional PDAF, Laser AF 12 MP', 'Kirin 9000 5G (5 nm)', '8GB, 12GB RAM', '4400 mAh, Li-Po', '212 g', '126GB, 512GB', 'Android 10, EMUI 11, no Google Play Services', 'images/huawei-mate40-pro.jpg', 'images/h-huawei-mate40-pro.jpg', 1400, 0),
(14, 1, 'Huawei', 'P40 Pro+', '158.2 x 72.6 x 9 mm', '6.58', '32 MP, f/2.2, 26mm (wide), 1/2.8', '50 MP, f/1.9, 23mm (wide), 1/1.28', 'Kirin 990 5G (7 nm+)', '8GB RAM', '4200 mAh, Li-Po', '226 g', '256GB, 512GB', 'Android 10, EMUI 10.1, no Google Play Services', 'images/huawei-p40-pro-plus.jpg', 'images/h-huawei-p40-pro-plus.jpg', 1300, 0),
(15, 1, 'Samsung', 'Galaxy Note20 Ultra', '164.8 x 77.2 x 8.1 mm', '6.9\" 1440x3088 pixels', '10 MP, f/2.2, 26mm (wide), 1/3.2\", 1.22µm', '108 MP, f/1.8, 26mm (wide), 1/1.33\", 0.8µm, PDAF, Laser AF, OIS 12 MP, f/3.0, 120mm', 'Exynos 990 (7 nm+)', '8GB RAM', '4500 mAh, Li-Ion', '208 g', '256GB, 512GB', 'Android 10, upgradable to Android 11, One UI 3.0', 'images/samsung-galaxy-note20-ultra-.jpg', 'images/h-samsung-galaxy-note20-ultra-.jpg', 1400, 0),
(16, 1, 'Xiaomi', 'Mi 10T Lite 5G', '165.4 x 76.8 x 9 mm', '6.67\" 1080x2400 pixels', '16 MP, f/2.5, 25mm (wide), 1/3.06\" 1.0µm', '64 MP, f/1.9, 26mm (wide), 1/1.73\", 0.8µm, PDAF 8 MP, f/2.2, 120˚ (ultrawide), 1/4.0\", 1.12µm', 'Qualcomm SM7225 Snapdragon 750G 5G (8 nm)', '6GB RAM', '4820 mAh, Li-Po', '214.5 g', '64GB, 128GB', 'Android 10, MIUI 12', 'images/xiaomi-mi-10t-lite-.jpg', 'images/h-xiaomi-mi-10t-lite-.jpg', 280, 0),
(17, 1, 'Realme', '7 Pro', '160.9 x 74.3 x 8.7 mm', '6.4\" 1080x2400 pixels', '32 MP, f/2.5, 24mm (wide), 1/2.8\", 0.8µm', '64 MP, f/1.8, 26mm (wide), 1/1.73\", 0.8µm, PDAF 8 MP, f/2.3, 119˚, 16mm (ultrawide), 1/4.0\", 1.12µm', 'Qualcomm SM7125 Snapdragon 720G (8 nm)', '6GB, 8GB RAM', '4500 mAh, Li-Po', '182 g', '128GB', 'Android 10, Realme UI', 'images/realme-7-pro.jpg', 'images/h-realme-7-pro.jpg', 250, 0),
(18, 1, 'Xiaomi', 'Mi 9T Pro', '156.7 x 74.3 x 8.8 mm', '6.39\" 1080x2340 pixels', 'Motorized pop-up 20 MP, f/2.2, (wide), 1/3.4\", 0.8µm', '48 MP, f/1.8, 26mm (wide), 1/2.0\", 0.8µm, PDAF, Laser AF 8 MP, f/2.4, 53mm (telephoto), 1/4.0\", 1.12', 'Qualcomm SM8150 Snapdragon 855 (7 nm)', '6GB, 8GB RAM', '4000 mAh, Li-Po', '191 g', '64GB, 256GB', 'Android 9.0 (Pie), upgradable to Android 10, MIUI ', 'images/xiaomi-mi-9t.jpg', 'images/h-xiaomi-mi-9t.jpg', 250, 0),
(19, 1, 'Xiaomi', 'Mi 10T 5G', '165.1 x 76.4 x 9.3 mm', '6.67\" 1080x2400 pixels', '20 MP, f/2.2, 27mm (wide), 1/3.4\", 0.8µm', '64 MP, f/1.9, 26mm (wide), 1/1.73\", 0.8µm, PDAF 13 MP, f/2.4, 123˚ (ultrawide), 1/3.06\", 1.12µm', 'Qualcomm SM8250 Snapdragon 865 (7 nm+)', '6GB, 8GB RAM', ' 5000 mAh, Li-Po', '216 g', '128GB', 'Android 10, MIUI 12', 'images/xiaomi-mi-10t-5g-.jpg', 'images/h-xiaomi-mi-10t-5g-.jpg', 370, 0),
(20, 1, 'Xiaomi', 'Mi Note 10 Lite', '157.8 x 74.2 x 9.7 mm', '6.47\" 1080x2340 pixels', '16 MP, f/2.5, (wide), 1/3.06\" 1.0µm', '64 MP, f/1.9, 26mm (wide), 1/1.72\", 0.8µm, PDAF, Laser AF 8 MP, f/2.2, (ultrawide), 1/4.0\", 1.12µm', 'Qualcomm SDM730 Snapdragon 730G (8 nm)', '6GB, 8GB RAM', ' 5260 mAh, Li-Po', '204 g', '64GB, 128GB', 'Android 10, MIUI 12', 'images/xiaomi-mi-note-10-lite-.jpg', 'images/h-xiaomi-mi-note-10-lite-.jpg', 270, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_groups`
--

CREATE TABLE `product_groups` (
  `id` int(11) NOT NULL,
  `product_group` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_groups`
--

INSERT INTO `product_groups` (`id`, `product_group`) VALUES
(3, 'accessories'),
(1, 'cellphones'),
(2, 'tablets');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `id` int(11) NOT NULL,
  `dateTime` date NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart_items`
--

CREATE TABLE `shopping_cart_items` (
  `id` int(11) NOT NULL,
  `shopping_cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `product_groups`
--
ALTER TABLE `product_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_group` (`product_group`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopping_cart_items`
--
ALTER TABLE `shopping_cart_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shopping_cart_id` (`shopping_cart_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `phones`
--
ALTER TABLE `phones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_groups`
--
ALTER TABLE `product_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shopping_cart_items`
--
ALTER TABLE `shopping_cart_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `phones`
--
ALTER TABLE `phones`
  ADD CONSTRAINT `phones_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `product_groups` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `shopping_cart_items`
--
ALTER TABLE `shopping_cart_items`
  ADD CONSTRAINT `shopping_cart_items_ibfk_2` FOREIGN KEY (`shopping_cart_id`) REFERENCES `shopping_cart` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `shopping_cart_items_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `phones` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
