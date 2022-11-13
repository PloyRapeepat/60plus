-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 13, 2022 at 08:24 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wcb`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL COMMENT 'รหัสข้อความ',
  `sender_id` int(11) NOT NULL COMMENT 'รหัสผู้ส่ง',
  `receiver_id` int(11) NOT NULL COMMENT 'รหัสผู้รับ',
  `message` text NOT NULL COMMENT 'ข้อความ',
  `send_time` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'เวลาที่ส่งข้อความ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id` int(11) NOT NULL COMMENT 'รหัสกระทู้',
  `subject` varchar(1000) NOT NULL COMMENT 'หัวข้อ',
  `detail` text NOT NULL COMMENT 'รายละเอียด',
  `owner_id` int(11) NOT NULL COMMENT 'รหัสเจ้าของหัวข้อ',
  `create_time` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'เวลาที่ตั้งกระทู้',
  `visitor` int(11) NOT NULL DEFAULT 0 COMMENT 'จำนวนผู้เยี่ยมชม'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `forum_comment`
--

CREATE TABLE `forum_comment` (
  `id` int(11) NOT NULL COMMENT 'รหัสความเห็น',
  `forum_id` int(11) NOT NULL COMMENT 'รหัสหัวข้อกระทู้',
  `detail` text NOT NULL COMMENT 'รายละเอียดความเห็น',
  `owner_id` int(11) NOT NULL COMMENT 'รหัสผู้แสดงความเห็น',
  `create_time` datetime NOT NULL COMMENT 'เวลาที่แสดงความเห็น'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL COMMENT 'รหัสข่าว',
  `subject` int(11) NOT NULL COMMENT 'หัวข้อข่าว',
  `detail` int(11) NOT NULL COMMENT 'รายละเอียดข่าว',
  `owner_id` int(11) NOT NULL COMMENT 'รหัสผู้สร้างข่าว',
  `visitor` int(11) NOT NULL DEFAULT 0 COMMENT 'จำนวนผู้เยี่ยมชม',
  `time_create` datetime NOT NULL COMMENT 'เวลาที่สร้างข่าว'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL COMMENT 'รหัสแพ็คเกจ',
  `package_name` varchar(1000) NOT NULL COMMENT 'ชื่อแพ็คเกจ',
  `detail` text NOT NULL COMMENT 'รายละเอียด',
  `price` int(11) NOT NULL COMMENT 'ราคา'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `package_buy`
--

CREATE TABLE `package_buy` (
  `id` int(11) NOT NULL COMMENT 'รหัสการซื้อ',
  `package_id` int(11) NOT NULL COMMENT 'รหัสแพ็คเกจที่ซื้อ',
  `buyer_id` int(11) NOT NULL COMMENT 'รหัสผู้ซื้อ',
  `buy_time` time NOT NULL COMMENT 'เวลาที่ซื้อ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `poll`
--

CREATE TABLE `poll` (
  `id` int(11) NOT NULL COMMENT 'รหัสแบบประเมิน',
  `topic` varchar(1000) NOT NULL COMMENT 'หัวข้อประเมิน',
  `time_create` datetime NOT NULL COMMENT 'วันที่สร้างข้อข้อประเมิน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `poll_answer`
--

CREATE TABLE `poll_answer` (
  `id` int(11) NOT NULL COMMENT 'รหัสการทำแบบประเมิน',
  `poll_id` int(11) NOT NULL COMMENT 'รหัสแบบประเมิน',
  `answerer_id` int(11) NOT NULL COMMENT 'รหัสผู้ตอบแบบประเมิน',
  `score` int(11) NOT NULL COMMENT 'คะแนนการประเมิน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL COMMENT 'รหัสผู้ใช้',
  `username` varchar(100) NOT NULL COMMENT 'ชื่อผู้ใช้',
  `password` char(32) NOT NULL COMMENT 'รหัสผ่าน (MD5)',
  `name` varchar(100) NOT NULL COMMENT 'ชื่อ',
  `surname` varchar(100) NOT NULL COMMENT 'นามสกุล',
  `email` varchar(100) NOT NULL COMMENT 'อีเมล',
  `dob` date NOT NULL COMMENT 'วันเกิด',
  `user_type` enum('admin','user') NOT NULL DEFAULT 'user' COMMENT 'ประเภทผู้ใช้',
  `register_time` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'วันที่ลงทะเบียน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_comment`
--
ALTER TABLE `forum_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poll`
--
ALTER TABLE `poll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poll_answer`
--
ALTER TABLE `poll_answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสข้อความ';

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสกระทู้';

--
-- AUTO_INCREMENT for table `forum_comment`
--
ALTER TABLE `forum_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสความเห็น';

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสข่าว';

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสแพ็คเกจ';

--
-- AUTO_INCREMENT for table `poll`
--
ALTER TABLE `poll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสแบบประเมิน';

--
-- AUTO_INCREMENT for table `poll_answer`
--
ALTER TABLE `poll_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสการทำแบบประเมิน';

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสผู้ใช้';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
