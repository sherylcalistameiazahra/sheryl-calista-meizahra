-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 09:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `name`, `message`, `email`, `timestamp`) VALUES
(1, 'virnie', 'fgghfghfh', '', '2023-11-23 05:49:03'),
(6, 'halo', 'anjing', 'halo@gmail.com', '2023-11-23 05:49:03'),
(7, 'halo', 'anjing', 'halo@gmail.com', '2023-11-23 05:55:23'),
(8, 'halo', 'anjing', 'halo@gmail.com', '2023-11-23 05:55:54'),
(9, 'sheryl', 'bagus', 'halo@gmail.com', '2023-11-23 23:55:07'),
(10, 'virnie', 'halo\r\n', 'virnie@gmail.com', '2023-11-23 23:55:58'),
(11, 'halo', 'hsjhdj', 'halo@gmail.com', '2023-11-24 03:49:11'),
(12, 'yiiiiiii', 'hohohohohohhohohoho', 'assasasasasasasasa@gmail.com', '2023-11-24 03:53:16'),
(13, 'yiiiiiii', 'hohohohohohhohohoho', 'assasasasasasasasa@gmail.com', '2023-11-24 03:55:22'),
(14, 'tes', 'hai', 'halo@gmail.com', '2023-11-24 04:59:13'),
(15, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:19:46'),
(16, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:24:30'),
(17, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:28:58'),
(18, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:31:19'),
(19, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:32:11'),
(20, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:33:52'),
(21, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:34:38'),
(22, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:35:23'),
(23, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:35:42'),
(24, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:35:49'),
(25, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:36:10'),
(26, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:36:15'),
(27, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:37:38'),
(28, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:37:50'),
(29, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:38:42'),
(30, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:39:08'),
(31, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:40:25'),
(32, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:40:57'),
(33, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:41:05'),
(34, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:41:35'),
(35, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:41:37'),
(36, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:41:45'),
(37, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:41:47'),
(38, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:41:58'),
(39, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:42:19'),
(40, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:42:29'),
(41, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:42:53'),
(42, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:42:55'),
(43, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:42:57'),
(44, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:43:09'),
(45, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:43:15'),
(46, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:43:33'),
(47, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:44:08'),
(48, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:44:44'),
(49, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:45:01'),
(50, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:45:49'),
(51, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:46:11'),
(52, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:47:46'),
(53, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:50:25'),
(54, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:51:43'),
(55, 'p', 'p', 'halo@gmail.com', '2023-11-24 06:52:08'),
(56, 'a', 'a', 'assasasasasasasasa@gmail.com', '2023-11-24 06:52:34'),
(57, 'a', 'a', 'assasasasasasasasa@gmail.com', '2023-11-24 06:53:37'),
(58, 'a', 'a', 'assasasasasasasasa@gmail.com', '2023-11-24 06:53:44'),
(59, 'a', 'a', 'assasasasasasasasa@gmail.com', '2023-11-24 06:53:52'),
(60, 'a', 'a', 'assasasasasasasasa@gmail.com', '2023-11-24 06:54:27'),
(61, 'a', 'a', 'assasasasasasasasa@gmail.com', '2023-11-24 06:54:37'),
(62, 'a', 'a', 'assasasasasasasasa@gmail.com', '2023-11-24 06:54:38'),
(63, 'a', 'a', 'assasasasasasasasa@gmail.com', '2023-11-24 06:54:55'),
(64, 'a', 'a', 'assasasasasasasasa@gmail.com', '2023-11-24 06:55:13'),
(65, 'a', 'a', 'assasasasasasasasa@gmail.com', '2023-11-24 06:56:15'),
(66, 'a', 'a', 'assasasasasasasasa@gmail.com', '2023-11-24 06:56:18'),
(67, 'a', 'a', 'assasasasasasasasa@gmail.com', '2023-11-24 06:56:52'),
(68, 'a', 'a', 'assasasasasasasasa@gmail.com', '2023-11-24 06:57:35'),
(69, 'a', 'a', 'assasasasasasasasa@gmail.com', '2023-11-24 06:58:05'),
(70, 'a', 'a', 'assasasasasasasasa@gmail.com', '2023-11-24 06:59:07'),
(71, 'a', 'a', 'assasasasasasasasa@gmail.com', '2023-11-24 06:59:22'),
(72, 'a', 'a', 'assasasasasasasasa@gmail.com', '2023-11-24 06:59:59'),
(73, 'a', 'a', 'assasasasasasasasa@gmail.com', '2023-11-24 07:01:16'),
(74, 'a', 'a', 'assasasasasasasasa@gmail.com', '2023-11-24 07:01:50'),
(75, 'a', 'a', 'assasasasasasasasa@gmail.com', '2023-11-24 07:05:29'),
(76, 'a', 'a', 'assasasasasasasasa@gmail.com', '2023-11-24 07:06:25'),
(77, 'a', 'a', 'assasasasasasasasa@gmail.com', '2023-11-24 07:06:40'),
(78, 'a', 'a', 'assasasasasasasasa@gmail.com', '2023-11-24 07:07:08'),
(79, 'a', 'a', 'assasasasasasasasa@gmail.com', '2023-11-24 07:07:44'),
(80, 'a', 'a', 'assasasasasasasasa@gmail.com', '2023-11-24 07:07:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
