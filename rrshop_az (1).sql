-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2018 at 04:15 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rrshop_az`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `facebook_page_link` varchar(300) DEFAULT NULL,
  `instagram_page_link` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `description`, `address`, `contact_number`, `email`, `facebook_page_link`, `instagram_page_link`) VALUES
(1, 'RRShop mağazası sizə geniş çeşiddə mobil telefon və smartfonlar təqdim edir. Mağazamizda siz müxtəlif markalı telefonlarla və planşetlərlə tanış ola bilərsiniz, burada sizə ucuz qiymətə telefonlar və planşetlər də təqdim olunur. Mobil telefon bazarında artıq oturuşmuş Apple, Samsung, HTC, Fly, Huawei, Zopo, ZTE kimi markaların funksional mobil telefonlarını digər markalara nisbətən daha ucuz qiymətlə əldə etmiş olursunuz. Sizə təqdim etdiyimiz ucuz telefon qiymətləri büdcənizə qənaət etmənizə yardımçı olacaq və əlavə xərclərdən azad edəcək. Kataloqumuzda qiymətə ucuzdan bahaya doğru filter verməklə 2 GB, 3 GB, 4 GB, 6 GB ram, 16GB, 32 GB, 64 GB, 128 GB, 256 GB daxili yaddaş ilə təchiz olunmuş ucuz qiymətli telefonları zövqünüzə görə seçə bilərsiniz.', 'Baku, Azerbaycan.', ' (050) 708 11 11', 'support@rrshop.az', 'https://www.facebook.com/rrshopaz', 'https://www.instagram.com/rrshop.az/');

-- --------------------------------------------------------

--
-- Table structure for table `main_category`
--

CREATE TABLE `main_category` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `main_category`
--

INSERT INTO `main_category` (`id`, `name`, `status`) VALUES
(1, 'Smartfonlar', 1),
(2, 'Planşetlər', 1),
(3, 'Foto və Video', 1),
(4, 'Kompyuter və Notebook', 1),
(5, 'Televizorlar', 1),
(6, 'Mobil aksesuarlar', 1),
(7, 'Oyun konsollari', 1);

-- --------------------------------------------------------

--
-- Table structure for table `main_slider`
--

CREATE TABLE `main_slider` (
  `id` int(11) NOT NULL,
  `img_name` varchar(125) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `main_slider`
--

INSERT INTO `main_slider` (`id`, `img_name`, `status`) VALUES
(1, 'slider1.jpg', 1),
(2, 'slider2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `isCompleted` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `customer_fullname` varchar(50) NOT NULL,
  `customer_number` varchar(50) NOT NULL,
  `customer_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `isCompleted`, `status`, `customer_fullname`, `customer_number`, `customer_address`) VALUES
(1, 4, 1, 1, 'Mirmursal Mursalov', '055 269 15 25', 'Baku Bina'),
(2, 3, 0, 1, 'Bashir Azizov', '050 223 32 32', 'Khizi Dagli'),
(3, 4, 0, 1, 'Samir Karimov', '055 232 33 22', 'Baku Khirdalan'),
(4, 3, 0, 1, 'Yolcu Nasib', '055 323 32 32', 'Baku Akhmadli'),
(6, 4, 0, 1, 'Amrah Huseynov', '055 333 44 55', 'Ordubad Cahri');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `barcode` varchar(20) NOT NULL,
  `active_price` decimal(18,2) NOT NULL,
  `old_price` decimal(18,2) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `barcode`, `active_price`, `old_price`, `sub_cat_id`, `status`) VALUES
(1, 'Samsung J5 (2018) ', '025', '532.00', '650.00', 3, 1),
(2, 'Samsung Grand Prime 2018', '011', '450.00', '523.00', 3, 1),
(3, 'Samsung Galaxu S8+', '234', '1345.00', '1678.00', 3, 1),
(4, 'Iphone 7S+ 32GB', '122', '799.00', '850.00', 2, 1),
(5, 'Xiomi Mi-8', '133', '465.00', '655.00', 1, 1),
(6, 'Xiaomi MI A1 4GB/64GB Dual SIM Gold', '543', '555.00', '676.00', 1, 1),
(7, 'Samsung Galaxy J2 (2018)', '112', '222.00', '333.00', 3, 1),
(8, 'LG S900 64GB ', '313', '678.00', '876.00', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_img`
--

CREATE TABLE `product_img` (
  `id` int(11) NOT NULL,
  `img_name` varchar(50) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_img`
--

INSERT INTO `product_img` (`id`, `img_name`, `product_id`, `status`) VALUES
(1, 'product1.jpg', 1, 1),
(2, 'product2.jpg', 2, 1),
(3, 'product3.jpg', 3, 1),
(4, 'product4.jpg', 4, 1),
(5, 'product5.jpg', 5, 1),
(6, 'product2.jpg', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_properties`
--

CREATE TABLE `product_properties` (
  `id` int(11) NOT NULL,
  `prop_key` varchar(50) NOT NULL,
  `prop_val` varchar(50) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_properties`
--

INSERT INTO `product_properties` (`id`, `prop_key`, `prop_val`, `product_id`, `status`) VALUES
(1, 'Ekran ölçüsü(düym)', '700', 5, 1),
(2, 'Ekran imkanları', '1080 x 2160', 5, 1),
(4, 'Operativ yaddaş', '6 GB', 5, 1),
(5, 'camera', '12 MP (f/2.0, 1/2.9\", 1.25 µm), avtofokus, 4-axis ', 5, 1),
(7, 'Batareya tutumu ', '(mAh) Li-Ion 3400', 5, 1),
(8, 'SIM-kart sayı', '2', 5, 1),
(9, 'Ekran ölçüsü(düym)', '5.99', 1, 1),
(10, 'Operativ yaddaş', '6 GB', 1, 1),
(11, 'Əsas kamera ', '12 MP (f/2.0, 1/2.9\", 1.25 µm), avtofokus, 4-axis ', 1, 1),
(12, 'Batareya tutumu ', '(mAh) Li-Ion 3400', 1, 1),
(13, 'SIM-kart sayı', '2', 1, 1),
(14, 'Ekran ölçüsü(düym)', '5.99', 2, 1),
(15, 'Ekran imkanları', '1080 x 2160', 2, 1),
(16, 'Operativ yaddaş', '6 GB', 2, 1),
(17, 'Əsas kamera ', '12 MP (f/2.0, 1/2.9\", 1.25 µm), avtofokus, 4-axis ', 2, 1),
(18, 'Batareya tutumu ', '(mAh) Li-Ion 3400', 2, 1),
(19, 'SIM-kart sayı', '2', 2, 1),
(20, 'Ekran ölçüsü(düym) ', '5.99', 3, 1),
(21, 'Operativ yaddaş', '6 GB', 3, 1),
(22, 'Əsas kamera ', '12 MP (f/2.0, 1/2.9\", 1.25 µm), avtofokus, 4-axis ', 3, 1),
(23, 'Batareya tutumu ', '(mAh) Li-Ion 3400', 3, 1),
(24, 'SIM-kart sayı', '2', 3, 1),
(25, 'Ekran ölçüsü(düym)', '7.77', 4, 1),
(26, 'Ekran imkanları', '1080 x 2160', 4, 1),
(27, 'Operativ yaddaş', '6 GB', 4, 1),
(28, 'Əsas kamera ', '12 MP (f/2.0, 1/2.9\", 1.25 µm), avtofokus, 4-axis ', 4, 1),
(29, 'Batareya tutumu ', '(mAh) Li-Ion 3400', 4, 1),
(30, 'SIM-kart sayı', '2', 4, 1),
(31, 'Ekran ölçüsü(düym)', '5.99', 6, 1),
(32, 'Ekran imkanları ', '1080 x 2160', 6, 1),
(33, 'Operativ yaddaş', '12 GB', 6, 1),
(34, 'Əsas kamera ', '12 MP (f/2.0, 1/2.9\", 1.25 µm), avtofokus, 4-axis ', 6, 1),
(35, 'Batareya tutumu ', '(mAh) Li-Ion 3400', 6, 1),
(36, 'SIM-kart sayı', '2', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `main_cat_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `name`, `main_cat_id`, `status`) VALUES
(1, 'Xiomi', 1, 1),
(2, 'Apple', 1, 1),
(3, 'Samsung', 1, 1),
(4, 'Apple', 2, 1),
(5, 'Samsung', 2, 1),
(6, 'Fotoaparatlar', 3, 1),
(7, 'Videokameralar', 3, 1),
(8, 'Video qeydiyyatçi', 3, 1),
(9, 'Apple', 4, 1),
(10, 'Acer', 4, 1),
(11, 'Toshiba', 4, 1),
(12, 'Asus', 4, 1),
(13, 'HP', 4, 1),
(14, 'Dell', 4, 1),
(15, 'Ev kinoteatrlari', 5, 1),
(16, 'LCD Televizorlar', 5, 1),
(17, 'Dvd Playerler', 5, 1),
(18, 'Qulaqliqlar', 6, 1),
(19, 'Adapterlər', 6, 1),
(20, 'Power Bank', 6, 1),
(21, 'Batareyalar', 6, 1),
(22, 'Playstation', 7, 1),
(23, 'XBox', 7, 1),
(24, 'Aksesuarlar', 7, 1),
(25, 'Disklər', 7, 1),
(26, 'Iphone', 1, 1),
(27, 'Sistem Bloku', 4, 1),
(28, 'Lenovo', 2, 1),
(29, 'Lg-Flatron', 5, 1),
(30, 'Blackberry', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_category`
--
ALTER TABLE `main_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_slider`
--
ALTER TABLE `main_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_cat_id` (`sub_cat_id`);

--
-- Indexes for table `product_img`
--
ALTER TABLE `product_img`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product_properties`
--
ALTER TABLE `product_properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `main_cat_id` (`main_cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `main_category`
--
ALTER TABLE `main_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `main_slider`
--
ALTER TABLE `main_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_img`
--
ALTER TABLE `product_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_properties`
--
ALTER TABLE `product_properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`sub_cat_id`) REFERENCES `sub_category` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_img`
--
ALTER TABLE `product_img`
  ADD CONSTRAINT `product_img_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_properties`
--
ALTER TABLE `product_properties`
  ADD CONSTRAINT `product_properties_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`main_cat_id`) REFERENCES `main_category` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
