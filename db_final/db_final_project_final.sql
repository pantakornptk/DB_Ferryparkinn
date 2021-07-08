-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 09:51 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `b_id` char(4) COLLATE utf8_unicode_ci NOT NULL,
  `b_water` int(5) NOT NULL,
  `b_elec` int(5) NOT NULL,
  `b_room` int(5) NOT NULL,
  `b_other` int(5) NOT NULL,
  `b_date` date NOT NULL,
  `b_due` date NOT NULL,
  `order_id` char(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`b_id`, `b_water`, `b_elec`, `b_room`, `b_other`, `b_date`, `b_due`, `order_id`) VALUES
('B001', 150, 200, 5000, 0, '2019-04-25', '2019-05-05', 'OR001'),
('B002', 150, 150, 1500, 150, '2019-04-25', '2019-05-05', 'OR007'),
('B003', 1515, 1515, 15000, 4151, '2019-06-06', '2019-07-27', 'OR007'),
('B004', 500, 500, 5000, 500, '2019-04-30', '2019-05-01', 'OR008');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `order_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order_email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order_phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `order_room` char(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `p_id` char(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order_payment` int(5) NOT NULL,
  `order_date` datetime DEFAULT NULL,
  `order_expire` datetime NOT NULL,
  `order_doe` date NOT NULL,
  `order_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_name`, `order_email`, `order_phone`, `order_room`, `p_id`, `order_payment`, `order_date`, `order_expire`, `order_doe`, `order_status`) VALUES
('OR001', 'JIRAPHAT YUENYING', 'jiraphattar31@gmail.com', '0935297357', '1102', 'P01', 4000, '2019-04-29 21:13:20', '2019-04-30 21:13:20', '2019-05-01', 'success'),
('OR002', 'JIRAPHAT YUENYING', 'jiraphattar31@gmail.com', '0935297357', '2104', 'P02', 4000, '2019-04-29 21:44:58', '2019-04-30 21:44:58', '2019-05-01', 'success'),
('OR003', 'JIRAPHAT YUENYING', 'jiraphattar31@gmail.com', '0935297357', '2302', 'P02', 3800, '2019-04-29 22:18:26', '2019-04-30 22:18:26', '2019-05-22', 'success'),
('OR004', 'JIRAPHAT YUENYING', 'jiraphattar31@gmail.com', '0935297357', '1205', 'P01', 4200, '2019-04-29 22:20:03', '2019-04-30 22:20:03', '2019-05-12', 'waiting'),
('OR005', 'JIRAPHAT YUENYING', 'jiraphattar331@gmail.com', '0935297357', '3108', 'P03', 4000, '2019-04-29 22:22:30', '2019-04-30 22:22:30', '2019-05-04', 'waiting'),
('OR006', 'JIRAPHAT YUENYING', 'jiraphattar31@gmail.com', '0935297357', '3205', 'P03', 4000, '2019-04-29 23:59:41', '2019-04-30 23:59:41', '2019-05-29', 'waiting'),
('OR007', 'พันธกร วังทะพันธ์', 'pantakornptk@kkumail.com', '0999999999', '3101', 'P03', 4000, '2019-04-30 01:59:06', '2019-05-01 01:59:06', '2019-05-01', 'success'),
('OR008', 'พันธกร วังทะพันธ์', 'pantakornptk@kkumail.com', '0999999999', '2205', 'P02', 4200, '2019-04-30 02:17:33', '2019-05-01 02:17:33', '2019-05-04', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `order_id` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(5) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `order_id`, `amount`, `img`) VALUES
(12, 'OR008', 5000, 'upload/52966895_372463686817784_5651727536158146560_n5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `phase`
--

CREATE TABLE `phase` (
  `p_id` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `p_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `p_room_qty` int(2) DEFAULT NULL,
  `p_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phase`
--

INSERT INTO `phase` (`p_id`, `p_name`, `p_room_qty`, `p_img`) VALUES
('P01', 'เฟส 1', 40, '/asset/img/ferry_f1_1.png'),
('P02', 'เฟส 2', 45, '/asset/img/ferry_f2.png'),
('P03', 'เฟส 3', 45, '/asset/img/ferry_f3.png');

-- --------------------------------------------------------

--
-- Table structure for table `phase_img_src`
--

CREATE TABLE `phase_img_src` (
  `p_id` char(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `p_type` char(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `p_img_src` varchar(3000) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phase_img_src`
--

INSERT INTO `phase_img_src` (`p_id`, `p_type`, `p_img_src`) VALUES
('P01', 'SM', '/asset/img/info/p01-sm-1.jpg,/asset/img/info/p01-sm-2.jpg'),
('P01', 'NR', '/asset/img/info/p01-nr-1.jpg,/asset/img/info/p01-nr-2.jpg,/asset/img/info/p01-nr-3.jpg,/asset/img/info/p01-nr-4.jpg,/asset/img/info/p01-nr-5.jpg,/asset/img/info/p01-nr-6.jpg,/asset/img/info/p01-nr-7.jpg,/asset/img/info/p01-nr-8.jpg,/asset/img/info/p01-nr-9.jpg'),
('P02', 'SM', '/asset/img/info/p02-sm-1.jpg'),
('P02', 'LG', '/asset/img/info/p02-lg-1.jpg'),
('P03', 'SM', '/asset/img/info/p03-sm-1.jpg,/asset/img/info/p03-sm-2.jpg,/asset/img/info/p03-sm-3.jpg'),
('P03', 'LG', '/asset/img/info/p03-lg-1.jpg,/asset/img/info/p03-lg-2.jpg,/asset/img/info/p03-lg-3.jpg,/asset/img/info/p03-lg-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `phase_info`
--

CREATE TABLE `phase_info` (
  `id` int(10) NOT NULL,
  `p_id` char(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `p_floor` char(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `p_type` char(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f_qty` int(5) NOT NULL,
  `p_price` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phase_info`
--

INSERT INTO `phase_info` (`id`, `p_id`, `p_floor`, `p_type`, `f_qty`, `p_price`) VALUES
(1, 'P01', 'FL1', 'SM', 5, 4000),
(2, 'P01', 'FL2', 'SM', 5, 4000),
(3, 'P01', 'FL3', 'SM', 5, 3800),
(4, 'P01', 'FL4', 'SM', 5, 3600),
(5, 'P01', 'FL1', 'NR', 5, 4200),
(6, 'P01', 'FL2', 'NR', 5, 4200),
(7, 'P01', 'FL3', 'NR', 5, 4000),
(8, 'P01', 'FL4', 'NR', 5, 3800),
(9, 'P02', 'FL1', 'SM', 5, 4000),
(10, 'P02', 'FL2', 'SM', 5, 4000),
(11, 'P02', 'FL3', 'SM', 5, 3800),
(12, 'P02', 'FL4', 'SM', 5, 3600),
(13, 'P02', 'FL1', 'LG', 6, 4200),
(14, 'P02', 'FL2', 'LG', 6, 4200),
(15, 'P02', 'FL3', 'LG', 6, 4000),
(16, 'P02', 'FL4', 'LG', 7, 4000),
(17, 'P03', 'FL1', 'SM', 9, 4000),
(18, 'P03', 'FL2', 'SM', 9, 4000),
(19, 'P03', 'FL3', 'SM', 9, 3800),
(20, 'P03', 'FL4', 'SM', 9, 3600),
(21, 'P03', 'FL2', 'LG', 3, 4500),
(22, 'P03', 'FL3', 'LG', 3, 4300),
(23, 'P03', 'FL5', 'LG', 3, 4000);

-- --------------------------------------------------------

--
-- Table structure for table `repair`
--

CREATE TABLE `repair` (
  `rid` char(4) COLLATE utf8_unicode_ci NOT NULL,
  `rdate` date NOT NULL,
  `rdoe` date NOT NULL,
  `rdetail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_id` char(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `repair`
--

INSERT INTO `repair` (`rid`, `rdate`, `rdoe`, `rdetail`, `order_id`) VALUES
('R001', '2019-04-29', '2019-05-04', 'ัเหก่าืดืเ่รส ิทกดมี้กอด้ืิ ทมหกาื ้', 'OR001'),
('R002', '2019-04-29', '2019-04-19', 'ดดดดดดดดดด', 'OR001'),
('R003', '2019-04-30', '2019-05-01', 'หลอดไฟเสีย 3000 หลอด', 'OR007');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `is_admin` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `phone`, `is_admin`) VALUES
(1, 'jiraphaty', '$2y$10$BO/ndT4LD.9SXamf5a5EXeyeOZxtgDjuMbzaYbeUxNF5lBTQ64yc6', '', '', 1),
(14, 'jiraphattar31@gmail.com', '$2y$10$lHMVdG1AhBnXo01kWAwTguO.SinQBOEfa.zg1myGTTEv9O87vg2fG', 'JIRAPHAT YUENYING', '0935297357', 0),
(15, 'paasnfja@hotmail.com', '$2y$10$AssBbXLwcAbzUSXPSjHbtuQxNB8caDCwwX35SngNZRhHzf/HD5wey', 'กาย', '0999999999', 0),
(16, 'paasnfja2@hotmail.com', '$2y$10$CsGOf4jo8Fr.cnxXm3uYGevfvkpOnDLkKzfo.j262xQVgx0tf3IaK', 'กาย', '0999999999', 0),
(17, 'pantakornptk@kkumail.com', '$2y$10$UJBAZnhjkZ55VAzM.Xj9UuMKsfxk5b62Zp6PIWWeQDwmCaMq1EH8e', 'พันธกร วังทะพันธ์', '0999999999', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `bitoor` (`order_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_fk_phase` (`p_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paytoorder` (`order_id`);

--
-- Indexes for table `phase`
--
ALTER TABLE `phase`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `phase_img_src`
--
ALTER TABLE `phase_img_src`
  ADD KEY `phase_img_fk_phase` (`p_id`);

--
-- Indexes for table `phase_info`
--
ALTER TABLE `phase_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phase_info_fk_phase` (`p_id`);

--
-- Indexes for table `repair`
--
ALTER TABLE `repair`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `retoor` (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `phase_info`
--
ALTER TABLE `phase_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bitoor` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `paytoorder` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

--
-- Constraints for table `repair`
--
ALTER TABLE `repair`
  ADD CONSTRAINT `retoor` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
