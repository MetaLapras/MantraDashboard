-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2018 at 09:42 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mantra_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_master`
--

CREATE TABLE `address_master` (
  `id` int(11) NOT NULL,
  `contact1` int(15) NOT NULL,
  `contact2` int(15) NOT NULL,
  `address_line_1` varchar(100) DEFAULT NULL,
  `address_line_2` varchar(100) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `pincode` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT 'india',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `worker_id` int(11) NOT NULL,
  `type` varchar(25) NOT NULL,
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address_master`
--

INSERT INTO `address_master` (`id`, `contact1`, `contact2`, `address_line_1`, `address_line_2`, `city`, `pincode`, `state`, `country`, `created_at`, `updated_at`, `worker_id`, `type`, `employee_id`) VALUES
(1, 2465, 5454, 'gsg', 'fdg', 'tsts', '5454', 'Meghalaya', 'India', '2018-09-03 07:28:44', '2018-09-03 07:28:44', 1, 'both', 1),
(2, 2465, 5454, 'gsg', 'fdg', 'tsts', '5454', 'Meghalaya', 'India', '2018-09-03 07:28:46', '2018-09-03 07:28:46', 1, 'current', 1),
(3, 784, 797, 'gxbx', 'ydvx', 'h nc', '598', 'Chhattisgarh', 'India', '2018-09-03 09:22:09', '2018-09-03 09:22:09', 2, 'both', 1),
(4, 784, 797, 'gxbx', 'ydvx', 'h nc', '598', 'Chhattisgarh', 'India', '2018-09-03 09:22:12', '2018-09-03 09:22:12', 2, 'current', 1),
(7, 5868358, 50586, 'fctvug', 'fcgvY', 'rcyvu', '5068', 'Maharashtra', 'India', '2018-09-03 10:18:55', '2018-09-03 10:18:55', 7, 'both', 1),
(8, 5868358, 50586, 'fctvug', 'fcgvY', 'rcyvu', '5068', 'Maharashtra', 'India', '2018-09-03 10:18:57', '2018-09-03 10:18:57', 7, 'current', 1),
(15, 123456789, 123456789, 'ufja', 'hfjf', 'hcjc', '6898', 'Maharashtra', 'India', '2018-09-04 10:08:24', '2018-09-04 10:08:24', 11, 'both', 1),
(16, 123456789, 123456789, 'ufja', 'hfjf', 'hcjc', '6898', 'Maharashtra', 'India', '2018-09-04 10:08:26', '2018-09-04 10:08:26', 11, 'current', 1),
(17, 67689, 9494, 'bsbs', 'sbsb', 'zbsb', '34646', 'Jammu and Kashmir', 'India', '2018-09-04 10:14:50', '2018-09-04 10:14:50', 12, 'both', 1),
(18, 67689, 9494, 'bsbs', 'sbsb', 'zbsb', '34646', 'Jammu and Kashmir', 'India', '2018-09-04 10:14:51', '2018-09-04 10:14:51', 12, 'current', 1),
(19, 6868, 86868, 'xhxhx', 'hxhxh', 'bxbx', '6868', 'Chhattisgarh', 'India', '2018-09-04 10:16:01', '2018-09-04 10:16:01', 13, 'both', 1),
(20, 6868, 86868, 'xhxhx', 'hxhxh', 'bxbx', '6868', 'Chhattisgarh', 'India', '2018-09-04 10:16:03', '2018-09-04 10:16:03', 13, 'current', 1),
(21, 123, 1231, 'sdfsd', 'dfsd', 'sdfs', '23132', 'sfsdf', 'sdfsf', '2018-09-04 17:24:47', '2018-09-04 18:25:28', 14, 'both', 1),
(22, 68685, 9098989, 'bxbc', 'xbxb', 'dbbdb', '5664', 'Kerala', 'India', '2018-09-04 17:24:49', '2018-09-04 17:24:49', 14, 'current', 1),
(23, 86, 4, 'Chh', 'cghg', 'cghuvi', '447', 'Gujarat', 'India', '2018-09-05 09:56:28', '2018-09-05 09:56:28', 15, 'both', 1),
(24, 86, 4, 'Chh', 'cghg', 'cghuvi', '447', 'Gujarat', 'India', '2018-09-05 09:56:30', '2018-09-05 09:56:30', 15, 'current', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_master`
--

CREATE TABLE `admin_master` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_master`
--

INSERT INTO `admin_master` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '123', '2018-09-03 06:52:11', '2018-09-03 06:52:11');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_master`
--

CREATE TABLE `attendance_master` (
  `id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `worker_assignment_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `check_in_date` varchar(45) DEFAULT NULL,
  `check_in_time` varchar(45) DEFAULT NULL,
  `overtime` varchar(45) DEFAULT NULL,
  `fulltime` varchar(45) DEFAULT NULL,
  `halfday` varchar(45) DEFAULT NULL,
  `check_out_time` varchar(45) DEFAULT NULL,
  `wages` int(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_master`
--

INSERT INTO `attendance_master` (`id`, `worker_id`, `worker_assignment_id`, `project_id`, `check_in_date`, `check_in_time`, `overtime`, `fulltime`, `halfday`, `check_out_time`, `wages`, `created_at`, `updated_at`) VALUES
(1, 11, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 50000, '2018-09-04 19:38:42', '2018-09-04 19:38:42'),
(2, 12, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 6767, '2018-09-04 19:38:42', '2018-09-04 19:38:42'),
(3, 13, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 6868, '2018-09-04 19:38:42', '2018-09-04 19:38:42'),
(4, 11, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 50000, '2018-09-04 19:40:06', '2018-09-04 19:40:06'),
(5, 12, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 6767, '2018-09-04 19:40:06', '2018-09-04 19:40:06'),
(6, 13, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 6868, '2018-09-04 19:40:06', '2018-09-04 19:40:06'),
(7, 11, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 50000, '2018-09-04 19:43:04', '2018-09-04 19:43:04'),
(8, 12, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 6767, '2018-09-04 19:43:05', '2018-09-04 19:43:05'),
(9, 13, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 6868, '2018-09-04 19:43:05', '2018-09-04 19:43:05'),
(10, 11, 1, 1, '2018-09-08', NULL, NULL, NULL, NULL, NULL, 50000, '2018-09-04 19:44:53', '2018-09-04 19:44:53'),
(11, 12, 1, 1, '2018-09-08', NULL, NULL, NULL, NULL, NULL, 6767, '2018-09-04 19:44:53', '2018-09-04 19:44:53'),
(12, 13, 1, 1, '2018-09-08', NULL, NULL, NULL, NULL, NULL, 6868, '2018-09-04 19:44:53', '2018-09-04 19:44:53'),
(13, 11, 1, 1, '2018-09-08', NULL, NULL, NULL, NULL, NULL, 50000, '2018-09-04 19:45:06', '2018-09-04 19:45:06'),
(14, 12, 1, 1, '2018-09-08', NULL, NULL, NULL, NULL, NULL, 6767, '2018-09-04 19:45:07', '2018-09-04 19:45:07'),
(15, 13, 1, 1, '2018-09-08', NULL, NULL, NULL, NULL, NULL, 6868, '2018-09-04 19:45:07', '2018-09-04 19:45:07'),
(16, 11, 1, 1, '2018-09-08', NULL, NULL, NULL, NULL, NULL, 50000, '2018-09-04 19:45:19', '2018-09-04 19:45:19'),
(17, 12, 1, 1, '2018-09-08', NULL, NULL, NULL, NULL, NULL, 6767, '2018-09-04 19:45:19', '2018-09-04 19:45:19'),
(18, 13, 1, 1, '2018-09-08', NULL, NULL, NULL, NULL, NULL, 6868, '2018-09-04 19:45:19', '2018-09-04 19:45:19'),
(19, 11, 1, 1, '2018-09-08', '18:32:47', 'null', NULL, 'null', 'null', 50000, '2018-09-04 19:48:32', '2018-09-04 19:48:32'),
(20, 12, 1, 1, '2018-09-08', '18:32:56', 'null', NULL, 'null', 'null', 6767, '2018-09-04 19:48:32', '2018-09-04 19:48:32'),
(21, 13, 1, 1, '2018-09-08', '18:33:14', 'null', NULL, 'null', 'null', 6868, '2018-09-04 19:48:32', '2018-09-04 19:48:32'),
(22, 11, 1, 1, '2018-09-08', '18:32:47', 'null', NULL, 'null', 'null', 50000, '2018-09-04 19:48:37', '2018-09-04 19:48:37'),
(23, 12, 1, 1, '2018-09-08', '18:32:56', 'null', NULL, 'null', 'null', 6767, '2018-09-04 19:48:37', '2018-09-04 19:48:37'),
(24, 13, 1, 1, '2018-09-08', '18:33:14', 'null', NULL, 'null', 'null', 6868, '2018-09-04 19:48:37', '2018-09-04 19:48:37'),
(25, 11, 1, 1, '2018-09-08', '18:32:47', 'null', NULL, 'null', 'null', 50000, '2018-09-04 19:51:01', '2018-09-04 19:51:01'),
(26, 12, 1, 1, '2018-09-08', '18:32:56', 'null', NULL, 'null', 'null', 6767, '2018-09-04 19:51:02', '2018-09-04 19:51:02'),
(27, 13, 1, 1, '2018-09-08', '18:33:14', 'null', NULL, 'null', 'null', 6868, '2018-09-04 19:51:02', '2018-09-04 19:51:02'),
(28, 11, 1, 1, '2018-09-08', '18:32:47', 'null', NULL, 'null', 'null', 50000, '2018-09-04 19:53:19', '2018-09-04 19:53:19'),
(29, 12, 1, 1, '2018-09-08', '18:32:56', 'null', NULL, 'null', 'null', 6767, '2018-09-04 19:53:19', '2018-09-04 19:53:19'),
(30, 13, 1, 1, '2018-09-08', '18:33:14', 'null', NULL, 'null', 'null', 6868, '2018-09-04 19:53:19', '2018-09-04 19:53:19'),
(31, 11, 1, 1, '2018-09-08', '18:32:47', 'null', NULL, 'null', 'null', 50000, '2018-09-04 19:57:20', '2018-09-04 19:57:20'),
(32, 12, 1, 1, '2018-09-08', '18:32:56', 'null', NULL, 'null', 'null', 6767, '2018-09-04 19:57:21', '2018-09-04 19:57:21'),
(33, 13, 1, 1, '2018-09-08', '18:33:14', 'null', NULL, 'null', 'null', 6868, '2018-09-04 19:57:21', '2018-09-04 19:57:21'),
(34, 11, 1, 1, '2018-09-08', '18:32:47', 'null', NULL, 'null', 'null', 50000, '2018-09-04 20:02:50', '2018-09-04 20:02:50'),
(35, 12, 1, 1, '2018-09-08', '18:32:56', 'null', NULL, 'null', 'null', 6767, '2018-09-04 20:02:50', '2018-09-04 20:02:50'),
(36, 13, 1, 1, '2018-09-08', '18:33:14', 'null', NULL, 'null', 'null', 6868, '2018-09-04 20:02:50', '2018-09-04 20:02:50'),
(37, 0, 0, 0, '[', '[', '[', NULL, '[', '[', 0, '2018-09-05 07:11:41', '2018-09-05 07:11:41'),
(38, 0, 0, 0, '[', '[', '[', NULL, '[', '[', 0, '2018-09-05 07:13:29', '2018-09-05 07:13:29'),
(39, 0, 0, 0, '[', '[', '[', NULL, '[', '[', 0, '2018-09-05 07:14:45', '2018-09-05 07:14:45'),
(40, 0, 0, 0, '[', '[', '[', NULL, '[', '[', 0, '2018-09-05 07:14:51', '2018-09-05 07:14:51'),
(41, 0, 0, 0, '[', '[', '[', NULL, '[', '[', 0, '2018-09-05 07:16:59', '2018-09-05 07:16:59'),
(42, 0, 0, 0, '[', '[', '[', NULL, '[', '[', 0, '2018-09-05 07:17:42', '2018-09-05 07:17:42'),
(43, 11, 1, 1, '2018-09-05', '12:40:12', 'null', NULL, 'null', 'null', 50000, '2018-09-05 07:33:35', '2018-09-05 07:33:35'),
(44, 12, 1, 1, '2018-09-05', '12:41:18', 'null', NULL, 'null', 'null', 6767, '2018-09-05 07:33:35', '2018-09-05 07:33:35'),
(45, 13, 1, 1, '2018-09-05', '12:41:30', 'null', NULL, 'null', 'null', 6868, '2018-09-05 07:33:35', '2018-09-05 07:33:35'),
(46, 11, 1, 1, '2018-09-05', '12:40:12', 'null', NULL, 'null', 'null', 50000, '2018-09-05 07:36:10', '2018-09-05 07:36:10'),
(47, 12, 1, 1, '2018-09-05', '12:41:18', 'null', NULL, 'null', 'null', 6767, '2018-09-05 07:36:10', '2018-09-05 07:36:10'),
(48, 13, 1, 1, '2018-09-05', '12:41:30', 'null', NULL, 'null', 'null', 6868, '2018-09-05 07:36:10', '2018-09-05 07:36:10'),
(49, 11, 1, 1, '2018-09-05', '12:40:12', 'null', NULL, 'null', 'null', 50000, '2018-09-05 07:36:32', '2018-09-05 07:36:32'),
(50, 12, 1, 1, '2018-09-05', '12:41:18', 'null', NULL, 'null', 'null', 6767, '2018-09-05 07:36:32', '2018-09-05 07:36:32'),
(51, 13, 1, 1, '2018-09-05', '12:41:30', 'null', NULL, 'null', 'null', 6868, '2018-09-05 07:36:32', '2018-09-05 07:36:32'),
(52, 11, 1, 1, '2018-09-05', '12:40:12', 'null', NULL, 'null', 'null', 50000, '2018-09-05 07:48:52', '2018-09-05 07:48:52'),
(53, 12, 1, 1, '2018-09-05', '12:41:18', 'null', NULL, 'null', 'null', 6767, '2018-09-05 07:48:52', '2018-09-05 07:48:52'),
(54, 13, 1, 1, '2018-09-05', '12:41:30', 'null', NULL, 'null', 'null', 6868, '2018-09-05 07:48:52', '2018-09-05 07:48:52'),
(55, 11, 1, 1, '2018-09-05', '12:40:12', 'null', NULL, 'null', 'null', 50000, '2018-09-05 07:49:03', '2018-09-05 07:49:03'),
(56, 12, 1, 1, '2018-09-05', '12:41:18', 'null', NULL, 'null', 'null', 6767, '2018-09-05 07:49:03', '2018-09-05 07:49:03'),
(57, 13, 1, 1, '2018-09-05', '12:41:30', 'null', NULL, 'null', 'null', 6868, '2018-09-05 07:49:03', '2018-09-05 07:49:03'),
(58, 11, 1, 1, '2018-09-05', '12:40:12', 'null', NULL, 'null', 'null', 50000, '2018-09-05 07:50:38', '2018-09-05 07:50:38'),
(59, 12, 1, 1, '2018-09-05', '12:41:18', 'null', NULL, 'null', 'null', 6767, '2018-09-05 07:50:39', '2018-09-05 07:50:39'),
(60, 13, 1, 1, '2018-09-05', '12:41:30', 'null', NULL, 'null', 'null', 6868, '2018-09-05 07:50:39', '2018-09-05 07:50:39'),
(61, 11, 1, 1, '2018-09-05', '12:40:12', 'null', NULL, 'null', 'null', 50000, '2018-09-05 08:06:43', '2018-09-05 08:06:43'),
(62, 12, 1, 1, '2018-09-05', '12:41:18', 'null', NULL, 'null', 'null', 6767, '2018-09-05 08:06:43', '2018-09-05 08:06:43'),
(63, 13, 1, 1, '2018-09-05', '12:41:30', 'null', NULL, 'null', 'null', 6868, '2018-09-05 08:06:43', '2018-09-05 08:06:43'),
(64, 11, 1, 1, '2018-09-05', '12:40:12', 'null', NULL, 'null', 'null', 50000, '2018-09-05 08:25:44', '2018-09-05 08:25:44'),
(65, 12, 1, 1, '2018-09-05', '12:41:18', 'null', NULL, 'null', 'null', 6767, '2018-09-05 08:25:44', '2018-09-05 08:25:44'),
(66, 13, 1, 1, '2018-09-05', '12:41:30', 'null', NULL, 'null', 'null', 6868, '2018-09-05 08:25:44', '2018-09-05 08:25:44'),
(67, 11, 1, 1, '2018-09-05', '12:40:12', 'null', NULL, 'null', 'null', 50000, '2018-09-05 08:27:25', '2018-09-05 08:27:25'),
(68, 12, 1, 1, '2018-09-05', '12:41:18', 'null', NULL, 'null', 'null', 6767, '2018-09-05 08:27:25', '2018-09-05 08:27:25'),
(69, 13, 1, 1, '2018-09-05', '12:41:30', 'null', NULL, 'null', 'null', 6868, '2018-09-05 08:27:25', '2018-09-05 08:27:25'),
(70, 11, 1, 1, '2018-09-05', '12:40:12', 'null', NULL, 'null', 'null', 50000, '2018-09-05 08:29:25', '2018-09-05 08:29:25'),
(71, 12, 1, 1, '2018-09-05', '12:41:18', 'null', NULL, 'null', 'null', 6767, '2018-09-05 08:29:25', '2018-09-05 08:29:25'),
(72, 13, 1, 1, '2018-09-05', '12:41:30', 'null', NULL, 'null', 'null', 6868, '2018-09-05 08:29:25', '2018-09-05 08:29:25'),
(73, 11, 1, 1, '2018-09-05', '12:40:12', 'null', NULL, 'null', 'null', 50000, '2018-09-05 08:31:53', '2018-09-05 08:31:53'),
(74, 12, 1, 1, '2018-09-05', '12:41:18', 'null', NULL, 'null', 'null', 6767, '2018-09-05 08:31:53', '2018-09-05 08:31:53'),
(75, 13, 1, 1, '2018-09-05', '12:41:30', 'null', NULL, 'null', 'null', 6868, '2018-09-05 08:31:53', '2018-09-05 08:31:53'),
(76, 11, 1, 1, '2018-09-05', '12:40:12', 'null', NULL, 'null', 'null', 50000, '2018-09-05 09:15:35', '2018-09-05 09:15:35'),
(77, 12, 1, 1, '2018-09-05', '12:41:18', 'null', NULL, 'null', 'null', 6767, '2018-09-05 09:15:35', '2018-09-05 09:15:35'),
(78, 13, 1, 1, '2018-09-05', '12:41:30', 'null', NULL, 'null', 'null', 6868, '2018-09-05 09:15:35', '2018-09-05 09:15:35'),
(79, 11, 1, 1, '2018-09-05', '12:40:12', 'null', NULL, 'null', 'null', 50000, '2018-09-05 09:23:10', '2018-09-05 09:23:10'),
(80, 12, 1, 1, '2018-09-05', '12:41:18', 'null', NULL, 'null', 'null', 6767, '2018-09-05 09:23:10', '2018-09-05 09:23:10'),
(81, 13, 1, 1, '2018-09-05', '12:41:30', 'null', NULL, 'null', 'null', 6868, '2018-09-05 09:23:10', '2018-09-05 09:23:10'),
(82, 11, 1, 1, '2018-09-05', '15:10:52', 'null', NULL, 'null', 'null', 50000, '2018-09-05 09:41:41', '2018-09-05 09:41:41'),
(83, 12, 1, 1, '2018-09-05', '15:11:00', 'null', NULL, 'null', 'null', 6767, '2018-09-05 09:41:41', '2018-09-05 09:41:41'),
(84, 13, 1, 1, '2018-09-05', '15:11:25', 'null', NULL, 'null', 'null', 6868, '2018-09-05 09:41:41', '2018-09-05 09:41:41'),
(85, 11, 1, 1, '2018-09-05', '15:10:52', 'null', NULL, 'null', 'null', 50000, '2018-09-05 09:45:25', '2018-09-05 09:45:25'),
(86, 12, 1, 1, '2018-09-05', '15:11:00', 'null', NULL, 'null', 'null', 6767, '2018-09-05 09:45:25', '2018-09-05 09:45:25'),
(87, 13, 1, 1, '2018-09-05', '15:11:25', 'null', NULL, 'null', 'null', 6868, '2018-09-05 09:45:25', '2018-09-05 09:45:25');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_type_master`
--

CREATE TABLE `attendance_type_master` (
  `id` int(11) NOT NULL,
  `type` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bank_master`
--

CREATE TABLE `bank_master` (
  `id` int(11) NOT NULL,
  `account_holder_name` varchar(150) DEFAULT NULL,
  `ifsc_code` varchar(50) DEFAULT NULL,
  `account_no` varchar(45) DEFAULT NULL,
  `bank_name` varchar(100) DEFAULT NULL,
  `worker_id` int(11) DEFAULT NULL,
  `activation` varchar(25) NOT NULL DEFAULT 'active',
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_master`
--

INSERT INTO `bank_master` (`id`, `account_holder_name`, `ifsc_code`, `account_no`, `bank_name`, `worker_id`, `activation`, `employee_id`) VALUES
(1, 'tdut', '6eur', 'yeur', 'teye', 1, 'activate', 1),
(2, 'jgj h', 'uc hhfw', 'hfhz fb', 'hfvbs', 2, 'activate', 1),
(4, 'rcuvyug', 'fchvuvug', 'tfyfugyg', 'tcycyc', 7, 'activate', 1),
(8, 'hchc', 'gdhd', 'gdgs', 'gxg', 11, 'activate', 1),
(9, 'hshs', 'yaya', 'hsha', 'hsha', 12, 'activate', 1),
(10, 'hxdh', 'gdhs', 'yxyx', 'xhhz', 13, 'activate', 1),
(11, 'yxhd', 'hshs', 'dhhdh', 'dhdh', 14, 'activate', 1),
(12, 'xgfgu', 'chuv', 'dyug', 'vhvjh', 15, 'activate', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee_master`
--

CREATE TABLE `employee_master` (
  `id` int(11) NOT NULL,
  `emp_unique_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `adharcard_id` bigint(20) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `permanent_address_id` int(11) DEFAULT NULL,
  `current_address_id` int(11) DEFAULT NULL,
  `contact1` varchar(15) DEFAULT NULL,
  `contact2` varchar(15) DEFAULT NULL,
  `salary` varchar(10) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_master`
--

INSERT INTO `employee_master` (`id`, `emp_unique_id`, `name`, `email`, `adharcard_id`, `gender`, `dob`, `permanent_address_id`, `current_address_id`, `contact1`, `contact2`, `salary`, `password`, `created_at`, `updated_at`) VALUES
(1, 1, 'sagar', 'sagar@gmail.com', 12345678910, 'male', '2018-09-04', NULL, NULL, '9211420420', NULL, '51000', '123', '2018-09-03 06:58:31', '2018-09-03 06:58:31');

-- --------------------------------------------------------

--
-- Table structure for table `project_employee_assignment`
--

CREATE TABLE `project_employee_assignment` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `activation` varchar(45) DEFAULT 'active',
  `password` varchar(45) DEFAULT NULL,
  `admin_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_employee_assignment`
--

INSERT INTO `project_employee_assignment` (`id`, `employee_id`, `project_id`, `project_name`, `activation`, `password`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'mantra1', 'active', '123', 1, '2018-09-03 06:59:25', '2018-09-03 06:59:25');

-- --------------------------------------------------------

--
-- Table structure for table `project_master`
--

CREATE TABLE `project_master` (
  `id` int(11) NOT NULL,
  `project_name` varchar(100) DEFAULT NULL,
  `location` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `activation` varchar(45) DEFAULT 'active',
  `admin_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_master`
--

INSERT INTO `project_master` (`id`, `project_name`, `location`, `password`, `created_at`, `updated_at`, `activation`, `admin_id`, `employee_id`) VALUES
(1, 'mantra1', 'pune', '123', '2018-09-03 06:56:45', '2018-09-03 06:56:45', 'active', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `worker_employee_assignment`
--

CREATE TABLE `worker_employee_assignment` (
  `id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `employee_project_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `activation` varchar(20) NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `worker_master`
--

CREATE TABLE `worker_master` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `adharcard_id` varchar(30) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `fingerprint1` varchar(1000) DEFAULT NULL,
  `fingerprint2` varchar(1000) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `permanent_address_id` int(11) DEFAULT NULL,
  `current_address_id` int(11) DEFAULT NULL,
  `salary` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `bank_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `activation` varchar(50) DEFAULT 'active',
  `image_url` varchar(255) DEFAULT NULL,
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worker_master`
--

INSERT INTO `worker_master` (`id`, `name`, `adharcard_id`, `gender`, `dob`, `fingerprint1`, `fingerprint2`, `email`, `permanent_address_id`, `current_address_id`, `salary`, `created_at`, `updated_at`, `bank_id`, `project_id`, `activation`, `image_url`, `employee_id`) VALUES
(11, 'sagar', '123456', 'Male', '0000-00-00', 'Rk1SACAyMAAAAAFoAAABPAFiAMUAxQEAAAAoN4B8AOl4AEBmALXBAECaAO1sAIBtAQL9AICKAQR7\nAIA5ANwlAEBDAJ+sAIC7AQV0AEDRANBYAECLAS0CAEBvAGngAIBPAG37AEBoAFmDAEDvAP5YAEBx\nAVJ6AEAsAFoVAEBDAVjzAEAiAVE3AIDAABzdAIBnAOAAAIBXAOAsAECkANheAIBJAMClAIBCAOMi\nAICCARh5AEB3AIbUAIDHAOlmAEAiAMofAIBSAHfRAEC9AR99AECoAG/SAECwATz9AEBwAFHiAIDX\nASxoAICCAVzsAEDIAErXAEDbAEFcAIBcAM2pAIBZALeuAICqAL9TAIB4AJrOAEBIAPUSAICiAJFQ\nAEBeAIXHAEBBAREEAEBiAHrQAEBkAG98AEDYAPtyAEBZAF37AEAkASn+AEDAATSHAEAuAUO1AICR\nAV/oAIA7AVwjAECnABpgAAAA\n', 'Rk1SACAyMAAAAAEaAAABPAFiAMUAxQEAAAAoKoCZAMxlAEC8ANdpAEByALv6AIDXAK5RAIDTAJnV\nAEDrANBtAECUAGm8AEBQAJSnAEBAAKonAEDPASneAEDBASx9AIC4AE64AECJAUPQAEDAAVBeAECH\nAL9sAECCAOF/AIDAAONyAECdAIXIAECdAH48AIB5AH+2AED1AKVWAECfAGW8AIBbARCIAEBmASD2\nAEB0ASiJAEDOAE/iAIDQAEShAIDHADSRAICfAJ1IAECqAPB5AIDQANBnAIBiALogAEBXANEJAEBH\nAMwZAIDtAJPWAEC/AR/zAEDxAQ7bAECrATL2AECOATX6AECzAULcAECKADawAIBoACqvAAAA\n', 'gzhzvsbv', 15, 16, '50000', '2018-09-04 10:08:00', '2018-09-04 10:12:05', 8, 1, 'active', 'images/workers/cropped1916200019.jpg', 1),
(12, 'hinata hyuga', '0875', 'Female', '0000-00-00', 'Rk1SACAyMAAAAAECAAABPAFiAMUAxQEAAAAoJkCRALy3AIBbANSvAIBQANClAIC+AP5MAIDbAKO/\nAICbARlaAEA6AMImAEC/AHSgAICEAFwgAEC0AF0QAEBNASyHAEB8AUt6AIBfADIkAICNANQ3AIC6\nAPPNAIB7AQRJAEBZAPPOAICzAH0gAIDpALXPAIBcARFhAICIASZnAEDOAR1gAIB6AFioAIEIAIJw\nAIEAAG94AIDtADqKAEB3ALuyAEBiAJmqAEBOALsqAIBNAKynAIDUAJi0AEBJAJUmAIDnAJzjAEB3\nASRvAEBCAH4nAEC3ATNpAEDWATtxAEB4AVrvAAAA\n', 'Rk1SACAyMAAAAAEyAAABPAFiAMUAxQEAAAAoLoDLAKC5AICyAISzAICYAMI2AIChANU0AICPAGkp\nAIDfAF6SAEEUALJGAEBiAIGsAICgAQKWAEDZAD2KAIEcANlUAECbACYWAIB+ACYqAIDLABaEAICs\nABGYAECgAU3+AEC4AIQuAIDeAKy+AICSAL62AECJAHo0AECHAG+4AIDOAFGVAIEDANk/AICLAPqQ\nAIDNAQRAAICUAQcfAIDNAC6OAID0ASCsAIC6AS87AIDYAS48AICGABOvAIDKAL3HAECoAMa2AIDt\nAKjBAICZANqtAICpAO03AICKAOssAICUAEoeAIEDAGLdAEBUAJgsAECsADScAIDaADGDAEEdAP9A\nAIDsASMsAIC6ABKKAIDSATeKAAAA\n', 'bzbzzh', 17, 18, '6767', '2018-09-04 10:14:40', '2018-09-04 10:15:06', 9, 1, 'active', 'images/workers/cropped1054797474.jpg', 1),
(13, 'uchiha itachi', '973257', 'Male', '0000-00-00', 'Rk1SACAyMAAAAAEUAAABPAFiAMUAxQEAAAAoKUDuANexAEDZAPUGAECxAPYYAIENAL3BAIEMAPdN\nAECPAKYkAIDoASYHAICEAQ8JAIEHAG6SAIEmAHSuAICZAT78AICWAFiiAEBvAUj1AEB4AVvuAEDI\nAOwhAEDJAPcPAID2AKeoAIDPARP6AEChAQMSAIEXAO9JAICmARwEAIEWAH8FAIEEAGEQAEECAFmT\nAIDdAE0TAIEkAFyJAID9ADWTAIBiAU7RAID1ANXOAID6AK+xAIDMAJEhAEEVAOREAEDtARR4AICN\nAPkYAIDEAG2iAED3ATcHAEBcAKshAIEeAGuWAEDkAU15AEC9AVR5AECNADidAAAA\n', 'Rk1SACAyMAAAAAE4AAABPAFiAMUAxQEAAAAoL0CVAIezAIBpAIUoAICUAGOnAICJAPQdAEBtAPIe\nAIDRAOUxAEDuALnDAIC/AP4dAIDwANvHAECVADILAIBQAQMSAIEGAIVMAICcASsGAECsABb/AIC9\nATEIAEDUAUnuAICRAH2xAIDJAJO5AEBkANgmAICmAFeXAIDhAH/FAECWAEsEAIDqAHvJAIBCAGUo\nAIC4AD7gAIB+ADMbAEApANwjAIAnAGsrAIAkAFcuAIBoABkgAIBfAT0EAEBCAUx3AIB3AISsAECc\nAF8IAEDaAMmxAEBrAFkmAIChAP4bAIDeANmsAEA1AIcoAEBPAPMeAEBgAQcPAIB8ARgIAEDZAEPU\nAEB5ACanAEDzAD9dAEDcACbeAIBCATkGAAAA\n', 'dyvjv', 19, 20, '6868', '2018-09-04 10:15:52', '2018-09-04 10:16:18', 10, 1, 'active', 'images/workers/cropped610453893.jpg', 1),
(14, 'ygfg', 'gxhxh', 'Female', '2018-09-03', '', '', 'hdhd', 21, 22, '68686', '2018-09-04 17:24:33', '2018-09-04 17:25:05', 11, 1, 'active', 'images/workers/cropped1587459497.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_master`
--
ALTER TABLE `address_master`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `admin_master`
--
ALTER TABLE `admin_master`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `attendance_master`
--
ALTER TABLE `attendance_master`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `attendance_type_master`
--
ALTER TABLE `attendance_type_master`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `bank_master`
--
ALTER TABLE `bank_master`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `employee_master`
--
ALTER TABLE `employee_master`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `adharcard_id_UNIQUE` (`adharcard_id`);

--
-- Indexes for table `project_employee_assignment`
--
ALTER TABLE `project_employee_assignment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `project_master`
--
ALTER TABLE `project_master`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `worker_employee_assignment`
--
ALTER TABLE `worker_employee_assignment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `worker_master`
--
ALTER TABLE `worker_master`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `adharcard_id_UNIQUE` (`adharcard_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address_master`
--
ALTER TABLE `address_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `admin_master`
--
ALTER TABLE `admin_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance_master`
--
ALTER TABLE `attendance_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `attendance_type_master`
--
ALTER TABLE `attendance_type_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bank_master`
--
ALTER TABLE `bank_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employee_master`
--
ALTER TABLE `employee_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_employee_assignment`
--
ALTER TABLE `project_employee_assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_master`
--
ALTER TABLE `project_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `worker_employee_assignment`
--
ALTER TABLE `worker_employee_assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `worker_master`
--
ALTER TABLE `worker_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project_employee_assignment`
--
ALTER TABLE `project_employee_assignment`
  ADD CONSTRAINT `employee_id` FOREIGN KEY (`employee_id`) REFERENCES `employee_master` (`id`),
  ADD CONSTRAINT `project_id` FOREIGN KEY (`project_id`) REFERENCES `project_master` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
