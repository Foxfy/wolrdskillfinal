-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 04:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `football3`
--

-- --------------------------------------------------------

--
-- Table structure for table `allowed_provinces`
--

CREATE TABLE `allowed_provinces` (
  `id` int(11) NOT NULL,
  `competitions_id` int(11) NOT NULL,
  `provinces_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allowed_provinces`
--

INSERT INTO `allowed_provinces` (`id`, `competitions_id`, `provinces_id`) VALUES
(1, 1, 2),
(2, 1, 3),
(3, 1, 4),
(4, 1, 5),
(5, 1, 6),
(6, 2, 1),
(7, 2, 2),
(8, 2, 3),
(9, 3, 1),
(10, 3, 2),
(11, 5, 1),
(12, 5, 2),
(13, 5, 3),
(14, 5, 4),
(15, 5, 5),
(16, 5, 6),
(17, 5, 7),
(18, 5, 8),
(19, 5, 9),
(20, 5, 10),
(21, 5, 11),
(22, 6, 1),
(23, 6, 2),
(24, 6, 3),
(25, 6, 4),
(26, 6, 5),
(27, 6, 6),
(28, 6, 7),
(29, 7, 1),
(30, 7, 2),
(31, 7, 3),
(32, 7, 4),
(33, 7, 5),
(34, 7, 6),
(35, 7, 7),
(36, 7, 8),
(37, 7, 9),
(38, 7, 10),
(39, 7, 11),
(40, 7, 12),
(41, 7, 13),
(42, 7, 14),
(43, 7, 15),
(44, 7, 16),
(45, 7, 17),
(46, 7, 18),
(47, 7, 19),
(48, 7, 20),
(49, 7, 21),
(50, 7, 22),
(51, 7, 23),
(52, 7, 24),
(53, 7, 25),
(54, 8, 3),
(55, 8, 4),
(56, 8, 5),
(57, 8, 6),
(58, 8, 7),
(59, 8, 8),
(60, 8, 9),
(61, 8, 10),
(62, 8, 11),
(63, 8, 12),
(64, 8, 13),
(65, 8, 14),
(66, 8, 15),
(67, 8, 16),
(68, 8, 17),
(69, 8, 18),
(70, 8, 19),
(71, 8, 20),
(72, 10, 1),
(73, 10, 2),
(74, 10, 3),
(75, 10, 4),
(76, 10, 5),
(77, 10, 6),
(78, 10, 7),
(79, 10, 8),
(80, 10, 9),
(81, 10, 10),
(82, 10, 11),
(83, 10, 12),
(84, 10, 13),
(85, 10, 14),
(86, 10, 15);

-- --------------------------------------------------------

--
-- Table structure for table `competitions`
--

CREATE TABLE `competitions` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `slug` varchar(60) NOT NULL,
  `max_teams` int(11) NOT NULL,
  `banner` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `competitions`
--

INSERT INTO `competitions` (`id`, `name`, `slug`, `max_teams`, `banner`) VALUES
(1, 'Bangkok Cup', 'bangkok cup', 16, 'bangkok.png'),
(2, 'Khon Kaen Cup', 'khon kaen cup', 4, 'khonkaen.png'),
(3, 'Buriram Cup', 'buriram cup', 6, 'buriram.png'),
(4, '1', '1', 2, NULL),
(5, 'test2', 'test2', 5, 'Clot08.gif'),
(6, 'test3', 'test3', 7, 'Clot11.gif'),
(7, 'test5', 'test5', 55, 'Clot17.gif'),
(8, 'test212', 'test212', 222, 'Clot18.gif'),
(9, 'test211', 'test211', 22, 'Clot58.jpg'),
(10, 'test213', 'test213', 22, 'Clot52.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name`) VALUES
(1, 'กรุงเทพมหานคร'),
(2, 'กระบี่'),
(3, 'กาญจนบุรี'),
(4, 'กาฬสินธุ์'),
(5, 'กำแพงเพชร'),
(6, 'ขอนแก่น'),
(7, 'จันทบุรี'),
(8, 'ฉะเชิงเทรา'),
(9, 'ชลบุรี'),
(10, 'ชัยนาท'),
(11, 'ชัยภูมิ'),
(12, 'ชุมพร'),
(13, 'ตรัง'),
(14, 'ตราด'),
(15, 'ตาก'),
(16, 'นครนายก'),
(17, 'นครปฐม'),
(18, 'นครพนม'),
(19, 'นครราชสีมา'),
(20, 'นครศรีธรรมราช'),
(21, 'นครสวรรค์'),
(22, 'นนทบุรี'),
(23, 'นราธิวาส'),
(24, 'น่าน'),
(25, 'บึงกาฬ'),
(26, 'บุรีรัมย์'),
(27, 'ปทุมธานี'),
(28, 'ประจวบคีรีขันธ์'),
(29, 'ปราจีนบุรี'),
(30, 'ปัตตานี'),
(31, 'พระนครศรีอยุธยา'),
(32, 'พะเยา'),
(33, 'พังงา'),
(34, 'พัทลุง'),
(35, 'พิจิตร'),
(36, 'พิษณุโลก'),
(37, 'ภูเก็ต'),
(38, 'มหาสารคาม'),
(39, 'มุกดาหาร'),
(40, 'ยะลา'),
(41, 'ยโสธร'),
(42, 'ระนอง'),
(43, 'ระยอง'),
(44, 'ราชบุรี'),
(45, 'ร้อยเอ็ด'),
(46, 'ลพบุรี'),
(47, 'ลำปาง'),
(48, 'ลำพูน'),
(49, 'ศรีสะเกษ'),
(50, 'สกลนคร'),
(51, 'สงขลา'),
(52, 'สตูล'),
(53, 'สมุทรปราการ'),
(54, 'สมุทรสงคราม'),
(55, 'สมุทรสาคร'),
(56, 'สระบุรี'),
(57, 'สระแก้ว'),
(58, 'สิงห์บุรี'),
(59, 'สุพรรณบุรี'),
(60, 'สุราษฎร์ธานี'),
(61, 'สุรินทร์'),
(62, 'สุโขทัย'),
(63, 'หนองคาย'),
(64, 'หนองบัวลำภู'),
(65, 'อำนาจเจริญ'),
(66, 'อุดรธานี'),
(67, 'อุตรดิตถ์'),
(68, 'อุทัยธานี'),
(69, 'อุบลราชธานี'),
(70, 'อ่างทอง'),
(71, 'เชียงราย'),
(72, 'เชียงใหม่'),
(73, 'เพชรบุรี'),
(74, 'เพชรบูรณ์'),
(75, 'เลย'),
(76, 'แพร่'),
(77, 'แม่ฮ่องสอน');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'test1', '1234'),
(2, 'test2', '1234'),
(3, 'test2', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allowed_provinces`
--
ALTER TABLE `allowed_provinces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `competitions_id` (`competitions_id`),
  ADD KEY `provinces_id` (`provinces_id`);

--
-- Indexes for table `competitions`
--
ALTER TABLE `competitions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allowed_provinces`
--
ALTER TABLE `allowed_provinces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `competitions`
--
ALTER TABLE `competitions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `allowed_provinces`
--
ALTER TABLE `allowed_provinces`
  ADD CONSTRAINT `allowed_provinces_ibfk_1` FOREIGN KEY (`provinces_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `allowed_provinces_ibfk_2` FOREIGN KEY (`competitions_id`) REFERENCES `competitions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
