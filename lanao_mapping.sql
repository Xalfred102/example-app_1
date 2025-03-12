-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2025 at 11:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lanao_mapping`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangays`
--

CREATE TABLE `barangays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `municipality_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `population` int(11) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `culture` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangays`
--

INSERT INTO `barangays` (`id`, `municipality_id`, `name`, `population`, `image`, `culture`, `created_at`, `updated_at`) VALUES
(1, 8, 'Abaga', 4775, 'barangays/default.jpg', NULL, '2025-03-04 22:57:02', '2025-03-09 17:03:39'),
(2, 8, 'Andil', 2056, 'barangays/default.jpg', NULL, '2025-03-04 22:57:02', '2025-03-09 17:03:39'),
(3, 8, 'Cabasagan', 1791, 'barangays/default.jpg', NULL, '2025-03-04 22:57:02', '2025-03-09 17:03:39'),
(4, 8, 'Camalan', 3595, 'barangays/default.jpg', NULL, '2025-03-04 22:57:02', '2025-03-09 17:03:39'),
(5, 8, 'Darumawang Bucana', 2387, 'barangays/default.jpg', NULL, '2025-03-04 22:57:02', '2025-03-09 17:03:39'),
(6, 8, 'Darumawang Ilaya', 4511, 'barangays/default.jpg', NULL, '2025-03-04 22:57:02', '2025-03-09 17:03:39'),
(7, 8, 'El Salvador', 3459, 'barangays/default.jpg', NULL, '2025-03-04 22:57:02', '2025-03-09 17:03:39'),
(8, 8, 'Gumagamot', 3804, 'barangays/default.jpg', NULL, '2025-03-04 22:57:02', '2025-03-09 17:03:39'),
(9, 8, 'Lala Proper', 3814, 'barangays/default.jpg', NULL, '2025-03-04 22:57:02', '2025-03-09 17:03:39'),
(10, 8, 'Lanipao', 1663, 'barangays/default.jpg', NULL, '2025-03-04 22:57:02', '2025-03-09 17:03:39'),
(11, 8, 'Magpatao', 4625, 'barangays/default.jpg', NULL, '2025-03-04 22:57:02', '2025-03-09 17:03:39'),
(12, 8, 'Maranding', 3396, 'barangays/default.jpg', NULL, '2025-03-04 22:57:02', '2025-03-09 17:03:39'),
(13, 8, 'Matampay Bucana', 1087, 'barangays/default.jpg', NULL, '2025-03-04 22:57:02', '2025-03-09 17:03:39'),
(14, 8, 'Matampay Ilaya', 3311, 'barangays/default.jpg', NULL, '2025-03-04 22:57:02', '2025-03-09 17:03:39'),
(15, 8, 'Pacita', 2443, 'barangays/default.jpg', NULL, '2025-03-04 22:57:02', '2025-03-09 17:03:39'),
(16, 8, 'Pendolonan', 4307, 'barangays/default.jpg', NULL, '2025-03-04 22:57:02', '2025-03-09 17:03:39'),
(17, 8, 'Pinoyak', 1483, 'barangays/default.jpg', NULL, '2025-03-04 22:57:02', '2025-03-09 17:03:39'),
(18, 8, 'Raw-an', 3390, 'barangays/default.jpg', NULL, '2025-03-04 22:57:02', '2025-03-09 17:03:39'),
(19, 8, 'Rebe', 3935, 'barangays/default.jpg', NULL, '2025-03-04 22:57:02', '2025-03-09 17:03:39'),
(20, 8, 'San Isidro Lower', 2672, 'barangays/default.jpg', NULL, '2025-03-04 22:57:02', '2025-03-09 17:03:39'),
(21, 8, 'San Isidro Upper', 2510, 'barangays/default.jpg', NULL, '2025-03-04 22:57:02', '2025-03-09 17:03:39'),
(22, 8, 'San Manuel', 4541, 'barangays/default.jpg', NULL, '2025-03-04 22:57:02', '2025-03-09 17:03:39'),
(23, 8, 'Santa Cruz Lower', 4649, 'barangays/default.jpg', NULL, '2025-03-04 22:57:02', '2025-03-09 17:03:40'),
(24, 8, 'Santa Cruz Upper', 1107, 'barangays/default.jpg', NULL, '2025-03-04 22:57:02', '2025-03-09 17:03:40'),
(25, 8, 'Simpak', 1801, 'barangays/default.jpg', NULL, '2025-03-04 22:57:02', '2025-03-09 17:03:40'),
(26, 8, 'Tenazas', 4285, 'barangays/default.jpg', NULL, '2025-03-04 22:57:02', '2025-03-09 17:03:40'),
(27, 8, 'Tuna-an', 1081, 'barangays/default.jpg', NULL, '2025-03-04 22:57:02', '2025-03-09 17:03:40'),
(28, 3, 'Andil', 4994, 'barangays/default.jpg', NULL, '2025-03-09 17:06:56', '2025-03-09 17:06:56'),
(29, 3, 'Bagong Dawis', 3083, 'barangays/default.jpg', NULL, '2025-03-09 17:06:56', '2025-03-09 17:06:56'),
(30, 3, 'Baroy Daku', 1180, 'barangays/default.jpg', NULL, '2025-03-09 17:06:56', '2025-03-09 17:06:56'),
(31, 3, 'Bato', 1503, 'barangays/default.jpg', NULL, '2025-03-09 17:06:56', '2025-03-09 17:06:56'),
(32, 3, 'Cabasagan', 3772, 'barangays/default.jpg', NULL, '2025-03-09 17:06:56', '2025-03-09 17:06:56'),
(33, 3, 'Dalama', 2097, 'barangays/default.jpg', NULL, '2025-03-09 17:06:56', '2025-03-09 17:06:56'),
(34, 3, 'Libertad', 1783, 'barangays/default.jpg', NULL, '2025-03-09 17:06:56', '2025-03-09 17:06:56'),
(35, 3, 'Limwag', 3788, 'barangays/default.jpg', NULL, '2025-03-09 17:06:56', '2025-03-09 17:06:56'),
(36, 3, 'Lindongan', 1027, 'barangays/default.jpg', NULL, '2025-03-09 17:06:56', '2025-03-09 17:06:56'),
(37, 3, 'Maliwanag', 4185, 'barangays/default.jpg', NULL, '2025-03-09 17:06:56', '2025-03-09 17:06:56'),
(38, 3, 'Manan-ao', 2527, 'barangays/default.jpg', NULL, '2025-03-09 17:06:56', '2025-03-09 17:06:56'),
(39, 3, 'Pange', 3493, 'barangays/default.jpg', NULL, '2025-03-09 17:06:56', '2025-03-09 17:06:56'),
(40, 3, 'Pindolonan', 4665, 'barangays/default.jpg', NULL, '2025-03-09 17:06:56', '2025-03-09 17:06:56'),
(41, 3, 'Poblacion', 3430, 'barangays/default.jpg', NULL, '2025-03-09 17:06:57', '2025-03-09 17:06:57'),
(42, 3, 'Princesa', 1642, 'barangays/default.jpg', NULL, '2025-03-09 17:06:57', '2025-03-09 17:06:57'),
(43, 3, 'Rawan Point', 4966, 'barangays/default.jpg', NULL, '2025-03-09 17:06:57', '2025-03-09 17:06:57'),
(44, 3, 'Riverside', 3878, 'barangays/default.jpg', NULL, '2025-03-09 17:06:57', '2025-03-09 17:06:57'),
(45, 3, 'Sagadan (Sagadan Lower)', 1930, 'barangays/default.jpg', NULL, '2025-03-09 17:06:57', '2025-03-09 17:06:57'),
(46, 3, 'Salong', 1643, 'barangays/default.jpg', NULL, '2025-03-09 17:06:57', '2025-03-09 17:06:57'),
(47, 3, 'Tinubdan', 1143, 'barangays/default.jpg', NULL, '2025-03-09 17:06:57', '2025-03-09 17:06:57'),
(48, 3, 'Sagadan Upper', 1181, 'barangays/default.jpg', NULL, '2025-03-09 17:06:57', '2025-03-09 17:06:57'),
(49, 3, 'San Juan', 3563, 'barangays/default.jpg', NULL, '2025-03-09 17:06:57', '2025-03-09 17:06:57'),
(50, 3, 'Village', 3475, 'barangays/default.jpg', NULL, '2025-03-09 17:06:57', '2025-03-09 17:06:57'),
(51, 5, 'Bagong Badian', 2171, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(52, 5, 'Bagong Silang', 2118, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(53, 5, 'Balili', 6278, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(54, 5, 'Bansarvil', 1166, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(55, 5, 'Belis', 1069, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(56, 5, 'Buenavista', 6040, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(57, 5, 'Butadon', 2288, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(58, 5, 'Cathedral Falls', 4925, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(59, 5, 'Concepcion', 1843, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(60, 5, 'Curvada', 4830, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(61, 5, 'De Asis', 4685, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(62, 5, 'Donggoan', 4327, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(63, 5, 'Durano', 1885, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(64, 5, 'Kahayagan', 5037, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(65, 5, 'Kidalos', 2937, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(66, 5, 'La Libertad', 2014, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(67, 5, 'Lapinig', 2133, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(68, 5, 'Mahayahay', 5465, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(69, 5, 'Malinas', 3696, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(70, 5, 'Maranding', 2184, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(71, 5, 'Margos', 6097, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(72, 5, 'Poblacion', 2101, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(73, 5, 'Pulang Yuta', 2699, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(74, 5, 'San Isidro', 4501, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(75, 5, 'San Vicente', 4036, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(76, 5, 'Santa Cruz', 4182, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(77, 5, 'Santo Tomas', 2846, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(78, 5, 'Suso', 3316, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(79, 5, 'Taguitic', 1305, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(80, 5, 'Tiacongan', 3728, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(81, 5, 'Tipolo', 1169, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(82, 5, 'Tulatulahan', 2547, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(83, 5, 'Waterfalls', 2570, 'barangays/default.jpg', NULL, '2025-03-09 17:12:03', '2025-03-09 17:12:03'),
(84, 23, 'Barakanas', 2951, 'barangays/default.jpg', NULL, '2025-03-09 17:14:26', '2025-03-09 17:14:26'),
(85, 23, 'Baris (Lumangculob)', 4870, 'barangays/default.jpg', NULL, '2025-03-09 17:14:26', '2025-03-09 17:14:26'),
(86, 23, 'Bualan', 2063, 'barangays/default.jpg', NULL, '2025-03-09 17:14:26', '2025-03-09 17:14:26'),
(87, 23, 'Bulod', 6838, 'barangays/default.jpg', NULL, '2025-03-09 17:14:26', '2025-03-09 17:14:26'),
(88, 23, 'Camp 5', 3719, 'barangays/default.jpg', NULL, '2025-03-09 17:14:26', '2025-03-09 17:14:26'),
(89, 23, 'Candis', 2538, 'barangays/default.jpg', NULL, '2025-03-09 17:14:26', '2025-03-09 17:14:26'),
(90, 23, 'Caniogan', 1047, 'barangays/default.jpg', NULL, '2025-03-09 17:14:26', '2025-03-09 17:14:26'),
(91, 23, 'Dalama', 3109, 'barangays/default.jpg', NULL, '2025-03-09 17:14:26', '2025-03-09 17:14:26'),
(92, 23, 'Kakai Renabor', 3416, 'barangays/default.jpg', NULL, '2025-03-09 17:14:26', '2025-03-09 17:14:26'),
(93, 23, 'Kalilangan', 5745, 'barangays/default.jpg', NULL, '2025-03-09 17:14:26', '2025-03-09 17:14:26'),
(94, 23, 'Licapao', 3260, 'barangays/default.jpg', NULL, '2025-03-09 17:14:26', '2025-03-09 17:14:26'),
(95, 23, 'Malingao', 6515, 'barangays/default.jpg', NULL, '2025-03-09 17:14:26', '2025-03-09 17:14:26'),
(96, 23, 'Palao', 6631, 'barangays/default.jpg', NULL, '2025-03-09 17:14:26', '2025-03-09 17:14:26'),
(97, 23, 'Patudan', 6873, 'barangays/default.jpg', NULL, '2025-03-09 17:14:26', '2025-03-09 17:14:26'),
(98, 23, 'Pigcarangan', 5044, 'barangays/default.jpg', NULL, '2025-03-09 17:14:26', '2025-03-09 17:14:26'),
(99, 23, 'Pinpin (Tadura)', 2030, 'barangays/default.jpg', NULL, '2025-03-09 17:14:26', '2025-03-09 17:14:26'),
(100, 23, 'Poblacion', 3344, 'barangays/default.jpg', NULL, '2025-03-09 17:14:26', '2025-03-09 17:14:26'),
(101, 23, 'Pualas', 4798, 'barangays/default.jpg', NULL, '2025-03-09 17:14:26', '2025-03-09 17:14:26'),
(102, 23, 'San Antonio', 1393, 'barangays/default.jpg', NULL, '2025-03-09 17:14:26', '2025-03-09 17:14:26'),
(103, 23, 'Santo Niño', 5883, 'barangays/default.jpg', NULL, '2025-03-09 17:14:26', '2025-03-09 17:14:26'),
(104, 23, 'Taden', 4457, 'barangays/default.jpg', NULL, '2025-03-09 17:14:26', '2025-03-09 17:14:26'),
(105, 23, 'Tangueguiron', 4901, 'barangays/default.jpg', NULL, '2025-03-09 17:14:26', '2025-03-09 17:14:26'),
(106, 23, 'Taguranao', 5771, 'barangays/default.jpg', NULL, '2025-03-09 17:14:26', '2025-03-09 17:14:26'),
(107, 23, 'Tubaran', 5759, 'barangays/default.jpg', NULL, '2025-03-09 17:14:26', '2025-03-09 17:14:26'),
(108, 22, 'Bayabao', 2741, 'barangays/default.jpg', NULL, '2025-03-09 17:16:22', '2025-03-09 17:16:22'),
(109, 22, 'Berwar', 1444, 'barangays/default.jpg', NULL, '2025-03-09 17:16:22', '2025-03-09 17:16:22'),
(110, 22, 'Big Banisilon', 4107, 'barangays/default.jpg', NULL, '2025-03-09 17:16:22', '2025-03-09 17:16:22'),
(111, 22, 'Big Meladoc', 4246, 'barangays/default.jpg', NULL, '2025-03-09 17:16:22', '2025-03-09 17:16:22'),
(112, 22, 'Bubong', 2131, 'barangays/default.jpg', NULL, '2025-03-09 17:16:22', '2025-03-09 17:16:22'),
(113, 22, 'Lamaosa', 648, 'barangays/default.jpg', NULL, '2025-03-09 17:16:22', '2025-03-09 17:16:22'),
(114, 22, 'Linao', 1254, 'barangays/default.jpg', NULL, '2025-03-09 17:16:22', '2025-03-09 17:16:22'),
(115, 22, 'Lindongan', 4494, 'barangays/default.jpg', NULL, '2025-03-09 17:16:22', '2025-03-09 17:16:22'),
(116, 22, 'Lingco-an', 1773, 'barangays/default.jpg', NULL, '2025-03-09 17:16:22', '2025-03-09 17:16:22'),
(117, 22, 'Papan', 3401, 'barangays/default.jpg', NULL, '2025-03-09 17:16:22', '2025-03-09 17:16:22'),
(118, 22, 'Pelingkingan', 933, 'barangays/default.jpg', NULL, '2025-03-09 17:16:22', '2025-03-09 17:16:22'),
(119, 22, 'Poblacion', 2887, 'barangays/default.jpg', NULL, '2025-03-09 17:16:22', '2025-03-09 17:16:22'),
(120, 22, 'Poona Kapatagan', 1729, 'barangays/default.jpg', NULL, '2025-03-09 17:16:22', '2025-03-09 17:16:22'),
(121, 22, 'Punod', 2252, 'barangays/default.jpg', NULL, '2025-03-09 17:16:22', '2025-03-09 17:16:22'),
(122, 22, 'Small Banisilon', 3527, 'barangays/default.jpg', NULL, '2025-03-09 17:16:22', '2025-03-09 17:16:22'),
(123, 22, 'Small Meladoc', 3687, 'barangays/default.jpg', NULL, '2025-03-09 17:16:22', '2025-03-09 17:16:22'),
(124, 22, 'Somiorang', 536, 'barangays/default.jpg', NULL, '2025-03-09 17:16:22', '2025-03-09 17:16:22'),
(125, 22, 'Tangcal Proper', 4995, 'barangays/default.jpg', NULL, '2025-03-09 17:16:22', '2025-03-09 17:16:22'),
(126, 21, 'Dalamas', 1744, 'barangays/default.jpg', NULL, '2025-03-09 17:17:34', '2025-03-09 17:17:34'),
(127, 21, 'Darimbang', 3205, 'barangays/default.jpg', NULL, '2025-03-09 17:17:34', '2025-03-09 17:17:34'),
(128, 21, 'Dimayon', 2471, 'barangays/default.jpg', NULL, '2025-03-09 17:17:34', '2025-03-09 17:17:34'),
(129, 21, 'Inagongan', 529, 'barangays/default.jpg', NULL, '2025-03-09 17:17:34', '2025-03-09 17:17:34'),
(130, 21, 'Kiazar (Poblacion)', 1634, 'barangays/default.jpg', NULL, '2025-03-09 17:17:34', '2025-03-09 17:17:34'),
(131, 21, 'Malimbato', 573, 'barangays/default.jpg', NULL, '2025-03-09 17:17:34', '2025-03-09 17:17:34'),
(132, 21, 'Panalawan', 3775, 'barangays/default.jpg', NULL, '2025-03-09 17:17:34', '2025-03-09 17:17:34'),
(133, 20, 'Bangaan', 6177, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(134, 20, 'Bangko', 2064, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(135, 20, 'Bansarvil II', 6905, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(136, 20, 'Bauyan', 5762, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(137, 20, 'Cabongbongan', 4100, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(138, 20, 'Calibao', 2611, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(139, 20, 'Calipapa', 2071, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(140, 20, 'Calube', 4688, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(141, 20, 'Campo Islam', 3294, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(142, 20, 'Capocao', 6447, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(143, 20, 'Dableston', 1568, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(144, 20, 'Dalama', 3967, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(145, 20, 'Dangolaan', 4898, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(146, 20, 'Ditago', 1438, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(147, 20, 'Ilian', 4713, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(148, 20, 'Kauswagan', 3548, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(149, 20, 'Kirapan', 3643, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(150, 20, 'Koreo', 6336, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(151, 20, 'Lantawan', 3758, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(152, 20, 'Mabuhay', 4506, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(153, 20, 'Maguindanao', 3539, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(154, 20, 'Mahayahay', 3542, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(155, 20, 'Mamagum', 4795, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(156, 20, 'Mina', 3623, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(157, 20, 'Pandanan', 6822, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(158, 20, 'Payong', 5029, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(159, 20, 'Piraka', 1232, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(160, 20, 'Pikalawag', 1360, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(161, 20, 'Pikinit', 4490, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(162, 20, 'Poblacion', 2346, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(163, 20, 'Ramain', 4718, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(164, 20, 'Rebucon', 6103, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(165, 20, 'Sigayan', 3276, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(166, 20, 'Sugod', 4432, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(167, 20, 'Tagulo', 6789, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(168, 20, 'Tantaon', 3096, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(169, 20, 'Topocon', 6474, 'barangays/default.jpg', NULL, '2025-03-09 17:19:12', '2025-03-09 17:19:12'),
(170, 19, 'Baning', 2019, 'barangays/default.jpg', NULL, '2025-03-09 17:20:39', '2025-03-09 17:20:39'),
(171, 19, 'Poblacion Sapad (formerly Buriasan)', 3304, 'barangays/default.jpg', NULL, '2025-03-09 17:20:39', '2025-03-09 17:20:39'),
(172, 19, 'Dansalan', 3292, 'barangays/default.jpg', NULL, '2025-03-09 17:20:39', '2025-03-09 17:20:39'),
(173, 19, 'Gamal', 3312, 'barangays/default.jpg', NULL, '2025-03-09 17:20:39', '2025-03-09 17:20:39'),
(174, 19, 'Inudaran I', 4297, 'barangays/default.jpg', NULL, '2025-03-09 17:20:39', '2025-03-09 17:20:39'),
(175, 19, 'Inudaran II', 3440, 'barangays/default.jpg', NULL, '2025-03-09 17:20:39', '2025-03-09 17:20:39'),
(176, 19, 'Karkum', 4294, 'barangays/default.jpg', NULL, '2025-03-09 17:20:39', '2025-03-09 17:20:39'),
(177, 19, 'Katipunan', 1837, 'barangays/default.jpg', NULL, '2025-03-09 17:20:39', '2025-03-09 17:20:39'),
(178, 19, 'Mabugnao', 4473, 'barangays/default.jpg', NULL, '2025-03-09 17:20:39', '2025-03-09 17:20:39'),
(179, 19, 'Maito Salug', 4840, 'barangays/default.jpg', NULL, '2025-03-09 17:20:39', '2025-03-09 17:20:39'),
(180, 19, 'Mala Salug', 1651, 'barangays/default.jpg', NULL, '2025-03-09 17:20:39', '2025-03-09 17:20:39'),
(181, 19, 'Mama-anon', 2387, 'barangays/default.jpg', NULL, '2025-03-09 17:20:39', '2025-03-09 17:20:39'),
(182, 19, 'Mapurog', 1434, 'barangays/default.jpg', NULL, '2025-03-09 17:20:39', '2025-03-09 17:20:39'),
(183, 19, 'Pancilan', 4542, 'barangays/default.jpg', NULL, '2025-03-09 17:20:39', '2025-03-09 17:20:39'),
(184, 19, 'Panoloon', 4139, 'barangays/default.jpg', NULL, '2025-03-09 17:20:39', '2025-03-09 17:20:39'),
(185, 19, 'Pili', 2221, 'barangays/default.jpg', NULL, '2025-03-09 17:20:39', '2025-03-09 17:20:39'),
(186, 19, 'Lower Sapad', 4612, 'barangays/default.jpg', NULL, '2025-03-09 17:20:39', '2025-03-09 17:20:39'),
(187, 18, 'Barandia', 3529, 'barangays/default.jpg', NULL, '2025-03-09 17:23:18', '2025-03-09 17:23:18'),
(188, 18, 'Bulacon', 4856, 'barangays/default.jpg', NULL, '2025-03-09 17:23:18', '2025-03-09 17:23:18'),
(189, 18, 'Buntong', 1814, 'barangays/default.jpg', NULL, '2025-03-09 17:23:18', '2025-03-09 17:23:18'),
(190, 18, 'Calimodan', 4302, 'barangays/default.jpg', NULL, '2025-03-09 17:23:18', '2025-03-09 17:23:18'),
(191, 18, 'Camp Alere', 1172, 'barangays/default.jpg', NULL, '2025-03-09 17:23:18', '2025-03-09 17:23:18'),
(192, 18, 'Camp III', 1959, 'barangays/default.jpg', NULL, '2025-03-09 17:23:18', '2025-03-09 17:23:18'),
(193, 18, 'Curva-Miagao', 1801, 'barangays/default.jpg', NULL, '2025-03-09 17:23:18', '2025-03-09 17:23:18'),
(194, 18, 'Daligdigan', 1055, 'barangays/default.jpg', NULL, '2025-03-09 17:23:18', '2025-03-09 17:23:18'),
(195, 18, 'Inasagan', 3668, 'barangays/default.jpg', NULL, '2025-03-09 17:23:18', '2025-03-09 17:23:18'),
(196, 18, 'Kilala', 2243, 'barangays/default.jpg', NULL, '2025-03-09 17:23:18', '2025-03-09 17:23:18'),
(197, 18, 'Mabatao', 3638, 'barangays/default.jpg', NULL, '2025-03-09 17:23:18', '2025-03-09 17:23:18'),
(198, 18, 'Madaya', 2872, 'barangays/default.jpg', NULL, '2025-03-09 17:23:18', '2025-03-09 17:23:18'),
(199, 18, 'Mamaanon', 3219, 'barangays/default.jpg', NULL, '2025-03-09 17:23:18', '2025-03-09 17:23:18'),
(200, 18, 'Makaupaw', 2232, 'barangays/default.jpg', NULL, '2025-03-09 17:23:18', '2025-03-09 17:23:18'),
(201, 18, 'Mapantao', 4026, 'barangays/default.jpg', NULL, '2025-03-09 17:23:18', '2025-03-09 17:23:18'),
(202, 18, 'Mindalano', 2007, 'barangays/default.jpg', NULL, '2025-03-09 17:23:18', '2025-03-09 17:23:18'),
(203, 18, 'Padianan', 1910, 'barangays/default.jpg', NULL, '2025-03-09 17:23:18', '2025-03-09 17:23:18'),
(204, 18, 'Pagalongan', 1207, 'barangays/default.jpg', NULL, '2025-03-09 17:23:18', '2025-03-09 17:23:18'),
(205, 18, 'Pagayawan', 2108, 'barangays/default.jpg', NULL, '2025-03-09 17:23:18', '2025-03-09 17:23:18'),
(206, 18, 'Panaliwad-on', 3851, 'barangays/default.jpg', NULL, '2025-03-09 17:23:18', '2025-03-09 17:23:18'),
(207, 18, 'Pangantapan', 2066, 'barangays/default.jpg', NULL, '2025-03-09 17:23:18', '2025-03-09 17:23:18'),
(208, 18, 'Pansur', 3565, 'barangays/default.jpg', NULL, '2025-03-09 17:23:18', '2025-03-09 17:23:18'),
(209, 18, 'Patidon', 2462, 'barangays/default.jpg', NULL, '2025-03-09 17:23:18', '2025-03-09 17:23:18'),
(210, 18, 'Pawak', 4954, 'barangays/default.jpg', NULL, '2025-03-09 17:23:18', '2025-03-09 17:23:18'),
(211, 18, 'Poblacion', 3298, 'barangays/default.jpg', NULL, '2025-03-09 17:23:18', '2025-03-09 17:23:18'),
(212, 18, 'Saumay', 2027, 'barangays/default.jpg', NULL, '2025-03-09 17:23:18', '2025-03-09 17:23:18'),
(213, 18, 'Sudlon', 1946, 'barangays/default.jpg', NULL, '2025-03-09 17:23:18', '2025-03-09 17:23:18'),
(214, 17, 'Alowin', 2258, 'barangays/default.jpg', NULL, '2025-03-09 17:24:48', '2025-03-09 17:24:48'),
(215, 17, 'Bubong-Dinaig', 1387, 'barangays/default.jpg', NULL, '2025-03-09 17:24:48', '2025-03-09 17:24:48'),
(216, 17, 'Cormatan', 939, 'barangays/default.jpg', NULL, '2025-03-09 17:24:48', '2025-03-09 17:24:48'),
(217, 17, 'Daramba', 1982, 'barangays/default.jpg', NULL, '2025-03-09 17:24:48', '2025-03-09 17:24:48'),
(218, 17, 'Dinaig', 4509, 'barangays/default.jpg', NULL, '2025-03-09 17:24:48', '2025-03-09 17:24:48'),
(219, 17, 'Cabasaran', 4109, 'barangays/default.jpg', NULL, '2025-03-09 17:24:48', '2025-03-09 17:24:48'),
(220, 17, 'Kablangan', 3460, 'barangays/default.jpg', NULL, '2025-03-09 17:24:49', '2025-03-09 17:24:49'),
(221, 17, 'Cadayonan', 992, 'barangays/default.jpg', NULL, '2025-03-09 17:24:49', '2025-03-09 17:24:49'),
(222, 17, 'Linindingan', 2302, 'barangays/default.jpg', NULL, '2025-03-09 17:24:49', '2025-03-09 17:24:49'),
(223, 17, 'Lumbatan', 2213, 'barangays/default.jpg', NULL, '2025-03-09 17:24:49', '2025-03-09 17:24:49'),
(224, 17, 'Lupitan', 4016, 'barangays/default.jpg', NULL, '2025-03-09 17:24:49', '2025-03-09 17:24:49'),
(225, 17, 'Madamba', 4045, 'barangays/default.jpg', NULL, '2025-03-09 17:24:49', '2025-03-09 17:24:49'),
(226, 17, 'Madaya', 2074, 'barangays/default.jpg', NULL, '2025-03-09 17:24:49', '2025-03-09 17:24:49'),
(227, 17, 'Maliwanag', 4987, 'barangays/default.jpg', NULL, '2025-03-09 17:24:49', '2025-03-09 17:24:49'),
(228, 17, 'Nunang', 2989, 'barangays/default.jpg', NULL, '2025-03-09 17:24:49', '2025-03-09 17:24:49'),
(229, 17, 'Nunungan', 2350, 'barangays/default.jpg', NULL, '2025-03-09 17:24:49', '2025-03-09 17:24:49'),
(230, 17, 'Pantao Raya', 3164, 'barangays/default.jpg', NULL, '2025-03-09 17:24:49', '2025-03-09 17:24:49'),
(231, 17, 'Pantaon', 2562, 'barangays/default.jpg', NULL, '2025-03-09 17:24:49', '2025-03-09 17:24:49'),
(232, 17, 'Pened', 4997, 'barangays/default.jpg', NULL, '2025-03-09 17:24:49', '2025-03-09 17:24:49'),
(233, 17, 'Piangamangaan', 3157, 'barangays/default.jpg', NULL, '2025-03-09 17:24:49', '2025-03-09 17:24:49'),
(234, 17, 'Pendolonan', 1584, 'barangays/default.jpg', NULL, '2025-03-09 17:24:49', '2025-03-09 17:24:49'),
(235, 17, 'Poblacion (Lumbacaingud)', 2339, 'barangays/default.jpg', NULL, '2025-03-09 17:24:49', '2025-03-09 17:24:49'),
(236, 17, 'Sulo', 4391, 'barangays/default.jpg', NULL, '2025-03-09 17:24:49', '2025-03-09 17:24:49'),
(237, 17, 'Tagoranao', 2954, 'barangays/default.jpg', NULL, '2025-03-09 17:24:49', '2025-03-09 17:24:49'),
(238, 17, 'Tangclao', 1691, 'barangays/default.jpg', NULL, '2025-03-09 17:24:49', '2025-03-09 17:24:49'),
(239, 17, 'Timbangalan', 4390, 'barangays/default.jpg', NULL, '2025-03-09 17:24:49', '2025-03-09 17:24:49'),
(240, 16, 'Bangcal', 1969, 'barangays/default.jpg', NULL, '2025-03-09 17:25:47', '2025-03-09 17:25:47'),
(241, 16, 'Bubong Madaya', 2302, 'barangays/default.jpg', NULL, '2025-03-09 17:25:47', '2025-03-09 17:25:47'),
(242, 16, 'Bowi', 2250, 'barangays/default.jpg', NULL, '2025-03-09 17:25:47', '2025-03-09 17:25:47'),
(243, 16, 'Cabasaran', 4951, 'barangays/default.jpg', NULL, '2025-03-09 17:25:47', '2025-03-09 17:25:47'),
(244, 16, 'Cadayonan', 1876, 'barangays/default.jpg', NULL, '2025-03-09 17:25:47', '2025-03-09 17:25:47'),
(245, 16, 'Campong', 2408, 'barangays/default.jpg', NULL, '2025-03-09 17:25:47', '2025-03-09 17:25:47'),
(246, 16, 'Dibarosan', 937, 'barangays/default.jpg', NULL, '2025-03-09 17:25:47', '2025-03-09 17:25:47'),
(247, 16, 'Kalanganan East', 3286, 'barangays/default.jpg', NULL, '2025-03-09 17:25:47', '2025-03-09 17:25:47'),
(248, 16, 'Kalanganan Lower', 2395, 'barangays/default.jpg', NULL, '2025-03-09 17:25:47', '2025-03-09 17:25:47'),
(249, 16, 'Kalilangan', 1521, 'barangays/default.jpg', NULL, '2025-03-09 17:25:47', '2025-03-09 17:25:47'),
(250, 16, 'Lumba-Punod', 1302, 'barangays/default.jpg', NULL, '2025-03-09 17:25:47', '2025-03-09 17:25:47'),
(251, 16, 'Pantao-Marug', 4983, 'barangays/default.jpg', NULL, '2025-03-09 17:25:47', '2025-03-09 17:25:47'),
(252, 16, 'Pantao-Ranao', 2930, 'barangays/default.jpg', NULL, '2025-03-09 17:25:47', '2025-03-09 17:25:47'),
(253, 16, 'Pantar East', 3132, 'barangays/default.jpg', NULL, '2025-03-09 17:25:47', '2025-03-09 17:25:47'),
(254, 16, 'Pitubo', 3699, 'barangays/default.jpg', NULL, '2025-03-09 17:25:47', '2025-03-09 17:25:47'),
(255, 16, 'Poblacion', 3586, 'barangays/default.jpg', NULL, '2025-03-09 17:25:47', '2025-03-09 17:25:47'),
(256, 16, 'Poona-Punod', 2396, 'barangays/default.jpg', NULL, '2025-03-09 17:25:47', '2025-03-09 17:25:47'),
(257, 16, 'Punod', 3832, 'barangays/default.jpg', NULL, '2025-03-09 17:25:47', '2025-03-09 17:25:47'),
(258, 16, 'Sundiga-Punod', 4505, 'barangays/default.jpg', NULL, '2025-03-09 17:25:47', '2025-03-09 17:25:47'),
(259, 16, 'Tawanan', 4254, 'barangays/default.jpg', NULL, '2025-03-09 17:25:47', '2025-03-09 17:25:47'),
(260, 16, 'West Pantar', 975, 'barangays/default.jpg', NULL, '2025-03-09 17:25:47', '2025-03-09 17:25:47'),
(261, 15, 'Aloon', 1787, 'barangays/default.jpg', NULL, '2025-03-09 17:27:02', '2025-03-09 17:27:02'),
(262, 15, 'Banday', 2891, 'barangays/default.jpg', NULL, '2025-03-09 17:27:02', '2025-03-09 17:27:02'),
(263, 15, 'Bubong Pantao Ragat', 936, 'barangays/default.jpg', NULL, '2025-03-09 17:27:02', '2025-03-09 17:27:02'),
(264, 15, 'Bobonga Radapan', 3870, 'barangays/default.jpg', NULL, '2025-03-09 17:27:02', '2025-03-09 17:27:02'),
(265, 15, 'Cabasagan', 2343, 'barangays/default.jpg', NULL, '2025-03-09 17:27:02', '2025-03-09 17:27:02'),
(266, 15, 'Calawe', 4833, 'barangays/default.jpg', NULL, '2025-03-09 17:27:02', '2025-03-09 17:27:02'),
(267, 15, 'Culubun', 4030, 'barangays/default.jpg', NULL, '2025-03-09 17:27:02', '2025-03-09 17:27:02'),
(268, 15, 'Dilimbayan', 2170, 'barangays/default.jpg', NULL, '2025-03-09 17:27:02', '2025-03-09 17:27:02'),
(269, 15, 'Dimayon', 2636, 'barangays/default.jpg', NULL, '2025-03-09 17:27:02', '2025-03-09 17:27:02'),
(270, 15, 'Lomidong', 3376, 'barangays/default.jpg', NULL, '2025-03-09 17:27:02', '2025-03-09 17:27:02'),
(271, 15, 'Madaya', 4662, 'barangays/default.jpg', NULL, '2025-03-09 17:27:02', '2025-03-09 17:27:02'),
(272, 15, 'Maliwanag', 3791, 'barangays/default.jpg', NULL, '2025-03-09 17:27:02', '2025-03-09 17:27:02'),
(273, 15, 'Matampay', 4866, 'barangays/default.jpg', NULL, '2025-03-09 17:27:02', '2025-03-09 17:27:02'),
(274, 15, 'Natangcopan', 1489, 'barangays/default.jpg', NULL, '2025-03-09 17:27:02', '2025-03-09 17:27:02'),
(275, 15, 'Pansor', 1714, 'barangays/default.jpg', NULL, '2025-03-09 17:27:02', '2025-03-09 17:27:02'),
(276, 15, 'Pantao Marug', 2532, 'barangays/default.jpg', NULL, '2025-03-09 17:27:02', '2025-03-09 17:27:02'),
(277, 15, 'Poblacion East', 1377, 'barangays/default.jpg', NULL, '2025-03-09 17:27:02', '2025-03-09 17:27:02'),
(278, 15, 'Poblacion West', 2506, 'barangays/default.jpg', NULL, '2025-03-09 17:27:02', '2025-03-09 17:27:02'),
(279, 15, 'Tangcal', 1525, 'barangays/default.jpg', NULL, '2025-03-09 17:27:02', '2025-03-09 17:27:02'),
(280, 15, 'Tongcopan', 4577, 'barangays/default.jpg', NULL, '2025-03-09 17:27:02', '2025-03-09 17:27:02'),
(281, 14, 'Abaga', 4623, 'barangays/default.jpg', NULL, '2025-03-09 17:28:12', '2025-03-09 17:28:12'),
(282, 14, 'Bangco', 2571, 'barangays/default.jpg', NULL, '2025-03-09 17:28:12', '2025-03-09 17:28:12'),
(283, 14, 'Cabasaran (Laya)', 4008, 'barangays/default.jpg', NULL, '2025-03-09 17:28:12', '2025-03-09 17:28:12'),
(284, 14, 'Canibongan', 4847, 'barangays/default.jpg', NULL, '2025-03-09 17:28:12', '2025-03-09 17:28:12'),
(285, 14, 'Dimayon', 4423, 'barangays/default.jpg', NULL, '2025-03-09 17:28:12', '2025-03-09 17:28:12'),
(286, 14, 'Inayawan', 2658, 'barangays/default.jpg', NULL, '2025-03-09 17:28:12', '2025-03-09 17:28:12'),
(287, 14, 'Kaludan', 1587, 'barangays/default.jpg', NULL, '2025-03-09 17:28:12', '2025-03-09 17:28:12'),
(288, 14, 'Karcum', 3360, 'barangays/default.jpg', NULL, '2025-03-09 17:28:12', '2025-03-09 17:28:12'),
(289, 14, 'Katubuan', 3749, 'barangays/default.jpg', NULL, '2025-03-09 17:28:12', '2025-03-09 17:28:12'),
(290, 14, 'Liangan', 3812, 'barangays/default.jpg', NULL, '2025-03-09 17:28:12', '2025-03-09 17:28:12'),
(291, 14, 'Lupitan', 921, 'barangays/default.jpg', NULL, '2025-03-09 17:28:12', '2025-03-09 17:28:12'),
(292, 14, 'Malaig', 1405, 'barangays/default.jpg', NULL, '2025-03-09 17:28:12', '2025-03-09 17:28:12'),
(293, 14, 'Mangun', 4817, 'barangays/default.jpg', NULL, '2025-03-09 17:28:12', '2025-03-09 17:28:12'),
(294, 14, 'Masibay', 4626, 'barangays/default.jpg', NULL, '2025-03-09 17:28:12', '2025-03-09 17:28:12'),
(295, 14, 'Notongan', 1478, 'barangays/default.jpg', NULL, '2025-03-09 17:28:12', '2025-03-09 17:28:12'),
(296, 14, 'Panganapan', 2656, 'barangays/default.jpg', NULL, '2025-03-09 17:28:12', '2025-03-09 17:28:12'),
(297, 14, 'Pantar', 2471, 'barangays/default.jpg', NULL, '2025-03-09 17:28:12', '2025-03-09 17:28:12'),
(298, 14, 'Paridi', 4117, 'barangays/default.jpg', NULL, '2025-03-09 17:28:12', '2025-03-09 17:28:12'),
(299, 14, 'Petadun', 2690, 'barangays/default.jpg', NULL, '2025-03-09 17:28:12', '2025-03-09 17:28:12'),
(300, 14, 'Poblacion', 4356, 'barangays/default.jpg', NULL, '2025-03-09 17:28:12', '2025-03-09 17:28:12'),
(301, 14, 'Rarab', 3962, 'barangays/default.jpg', NULL, '2025-03-09 17:28:12', '2025-03-09 17:28:12'),
(302, 14, 'Raraban', 2441, 'barangays/default.jpg', NULL, '2025-03-09 17:28:12', '2025-03-09 17:28:12'),
(303, 14, 'Rebucon', 2907, 'barangays/default.jpg', NULL, '2025-03-09 17:28:12', '2025-03-09 17:28:12'),
(304, 14, 'Songgod', 1973, 'barangays/default.jpg', NULL, '2025-03-09 17:28:12', '2025-03-09 17:28:12'),
(305, 14, 'Taraka', 3565, 'barangays/default.jpg', NULL, '2025-03-09 17:28:12', '2025-03-09 17:28:12'),
(306, 13, 'Bacayawan', 922, 'barangays/default.jpg', NULL, '2025-03-09 17:29:44', '2025-03-09 17:29:44'),
(307, 13, 'Balabacun', 1885, 'barangays/default.jpg', NULL, '2025-03-09 17:29:44', '2025-03-09 17:29:44'),
(308, 13, 'Balintad', 1227, 'barangays/default.jpg', NULL, '2025-03-09 17:29:44', '2025-03-09 17:29:44'),
(309, 13, 'Kadayonan', 2854, 'barangays/default.jpg', NULL, '2025-03-09 17:29:44', '2025-03-09 17:29:44'),
(310, 13, 'Dalama', 1005, 'barangays/default.jpg', NULL, '2025-03-09 17:29:44', '2025-03-09 17:29:44'),
(311, 13, 'Lindongan', 3267, 'barangays/default.jpg', NULL, '2025-03-09 17:29:44', '2025-03-09 17:29:44'),
(312, 13, 'Lingco-an', 2167, 'barangays/default.jpg', NULL, '2025-03-09 17:29:44', '2025-03-09 17:29:44'),
(313, 13, 'Lininding', 4818, 'barangays/default.jpg', NULL, '2025-03-09 17:29:44', '2025-03-09 17:29:44'),
(314, 13, 'Lumba-Bayabao', 1088, 'barangays/default.jpg', NULL, '2025-03-09 17:29:44', '2025-03-09 17:29:44'),
(315, 13, 'Madaya', 900, 'barangays/default.jpg', NULL, '2025-03-09 17:29:44', '2025-03-09 17:29:44'),
(316, 13, 'Maganding', 1625, 'barangays/default.jpg', NULL, '2025-03-09 17:29:44', '2025-03-09 17:29:44'),
(317, 13, 'Matampay', 1729, 'barangays/default.jpg', NULL, '2025-03-09 17:29:44', '2025-03-09 17:29:44'),
(318, 13, 'Old Poblacion', 923, 'barangays/default.jpg', NULL, '2025-03-09 17:29:44', '2025-03-09 17:29:44'),
(319, 13, 'North Cadulawan', 809, 'barangays/default.jpg', NULL, '2025-03-09 17:29:44', '2025-03-09 17:29:44'),
(320, 13, 'Panggao', 1867, 'barangays/default.jpg', NULL, '2025-03-09 17:29:44', '2025-03-09 17:29:44'),
(321, 13, 'Pantao', 3537, 'barangays/default.jpg', NULL, '2025-03-09 17:29:44', '2025-03-09 17:29:44'),
(322, 13, 'Pantao-A-Munai', 1258, 'barangays/default.jpg', NULL, '2025-03-09 17:29:44', '2025-03-09 17:29:44'),
(323, 13, 'Pantaon', 1303, 'barangays/default.jpg', NULL, '2025-03-09 17:29:44', '2025-03-09 17:29:44'),
(324, 13, 'Pindolonan', 4593, 'barangays/default.jpg', NULL, '2025-03-09 17:29:44', '2025-03-09 17:29:44'),
(325, 13, 'Punong', 2177, 'barangays/default.jpg', NULL, '2025-03-09 17:29:44', '2025-03-09 17:29:44'),
(326, 13, 'Ramain', 4796, 'barangays/default.jpg', NULL, '2025-03-09 17:29:45', '2025-03-09 17:29:45'),
(327, 13, 'Sundiga-Munai', 4590, 'barangays/default.jpg', NULL, '2025-03-09 17:29:45', '2025-03-09 17:29:45'),
(328, 13, 'Tagoranao', 3999, 'barangays/default.jpg', NULL, '2025-03-09 17:29:45', '2025-03-09 17:29:45'),
(329, 13, 'Tambo (Town Proper)', 4394, 'barangays/default.jpg', NULL, '2025-03-09 17:29:45', '2025-03-09 17:29:45'),
(330, 13, 'Tamparan (Mandaya)', 1051, 'barangays/default.jpg', NULL, '2025-03-09 17:29:45', '2025-03-09 17:29:45'),
(331, 13, 'Taporog', 3785, 'barangays/default.jpg', NULL, '2025-03-09 17:29:45', '2025-03-09 17:29:45'),
(332, 12, 'Bubong Radapan', 1078, 'barangays/default.jpg', NULL, '2025-03-09 17:30:44', '2025-03-09 17:30:44'),
(333, 12, 'Bangco', 1610, 'barangays/default.jpg', NULL, '2025-03-09 17:30:44', '2025-03-09 17:30:44'),
(334, 12, 'Batal', 3649, 'barangays/default.jpg', NULL, '2025-03-09 17:30:44', '2025-03-09 17:30:44'),
(335, 12, 'Batangan', 3464, 'barangays/default.jpg', NULL, '2025-03-09 17:30:44', '2025-03-09 17:30:44'),
(336, 12, 'Cadayonan', 2051, 'barangays/default.jpg', NULL, '2025-03-09 17:30:44', '2025-03-09 17:30:44'),
(337, 12, 'Matampay', 4603, 'barangays/default.jpg', NULL, '2025-03-09 17:30:44', '2025-03-09 17:30:44'),
(338, 12, 'Pangi', 3474, 'barangays/default.jpg', NULL, '2025-03-09 17:30:44', '2025-03-09 17:30:44'),
(339, 12, 'Pasayanon', 2295, 'barangays/default.jpg', NULL, '2025-03-09 17:30:44', '2025-03-09 17:30:44'),
(340, 12, 'Poblacion (Matungao)', 2697, 'barangays/default.jpg', NULL, '2025-03-09 17:30:44', '2025-03-09 17:30:44'),
(341, 12, 'Puntod', 3076, 'barangays/default.jpg', NULL, '2025-03-09 17:30:44', '2025-03-09 17:30:44'),
(342, 12, 'Santa Cruz', 1170, 'barangays/default.jpg', NULL, '2025-03-09 17:30:44', '2025-03-09 17:30:44'),
(343, 12, 'Somiorang', 4322, 'barangays/default.jpg', NULL, '2025-03-09 17:30:44', '2025-03-09 17:30:44'),
(344, 11, 'Balagatasa', 4057, 'barangays/default.jpg', NULL, '2025-03-09 17:35:28', '2025-03-09 17:35:28'),
(345, 11, 'Camp', 3894, 'barangays/default.jpg', NULL, '2025-03-09 17:35:28', '2025-03-09 17:35:28'),
(346, 11, 'Claro M. Recto', 4270, 'barangays/default.jpg', NULL, '2025-03-09 17:35:28', '2025-03-09 17:35:28'),
(347, 11, 'Inoma', 1156, 'barangays/default.jpg', NULL, '2025-03-09 17:35:28', '2025-03-09 17:35:28'),
(348, 11, 'Labuay', 3744, 'barangays/default.jpg', NULL, '2025-03-09 17:35:28', '2025-03-09 17:35:28'),
(349, 11, 'Liangan West', 3239, 'barangays/default.jpg', NULL, '2025-03-09 17:35:28', '2025-03-09 17:35:28'),
(350, 11, 'Mahayahay', 2071, 'barangays/default.jpg', NULL, '2025-03-09 17:35:28', '2025-03-09 17:35:28'),
(351, 11, 'Maliwanag', 1685, 'barangays/default.jpg', NULL, '2025-03-09 17:35:28', '2025-03-09 17:35:28'),
(352, 11, 'Mentring', 3327, 'barangays/default.jpg', NULL, '2025-03-09 17:35:28', '2025-03-09 17:35:28'),
(353, 11, 'Poblacion', 2336, 'barangays/default.jpg', NULL, '2025-03-09 17:35:28', '2025-03-09 17:35:28'),
(354, 11, 'Santa Cruz', 4451, 'barangays/default.jpg', NULL, '2025-03-09 17:35:28', '2025-03-09 17:35:28'),
(355, 11, 'Sigapod', 1366, 'barangays/default.jpg', NULL, '2025-03-09 17:35:28', '2025-03-09 17:35:28'),
(356, 11, 'Kulasihan (Villanueva)', 4893, 'barangays/default.jpg', NULL, '2025-03-09 17:35:28', '2025-03-09 17:35:28'),
(357, 10, 'Babasalon', 1282, 'barangays/default.jpg', NULL, '2025-03-09 17:38:37', '2025-03-09 17:38:37'),
(358, 10, 'Baguiguicon', 1488, 'barangays/default.jpg', NULL, '2025-03-09 17:38:37', '2025-03-09 17:38:37'),
(359, 10, 'Daan Campo', 2511, 'barangays/default.jpg', NULL, '2025-03-09 17:38:37', '2025-03-09 17:38:37'),
(360, 10, 'Durianon', 4887, 'barangays/default.jpg', NULL, '2025-03-09 17:38:37', '2025-03-09 17:38:37'),
(361, 10, 'Ilihan', 4144, 'barangays/default.jpg', NULL, '2025-03-09 17:38:37', '2025-03-09 17:38:37'),
(362, 10, 'Lamigadato', 1767, 'barangays/default.jpg', NULL, '2025-03-09 17:38:37', '2025-03-09 17:38:37'),
(363, 10, 'Lemoncret', 3939, 'barangays/default.jpg', NULL, '2025-03-09 17:38:37', '2025-03-09 17:38:37'),
(364, 10, 'Lubo', 2853, 'barangays/default.jpg', NULL, '2025-03-09 17:38:37', '2025-03-09 17:38:37'),
(365, 10, 'Lumbac', 3452, 'barangays/default.jpg', NULL, '2025-03-09 17:38:37', '2025-03-09 17:38:37'),
(366, 10, 'Malabaogan', 3601, 'barangays/default.jpg', NULL, '2025-03-09 17:38:37', '2025-03-09 17:38:37'),
(367, 10, 'Mapantao', 3322, 'barangays/default.jpg', NULL, '2025-03-09 17:38:37', '2025-03-09 17:38:37'),
(368, 10, 'Olango', 4666, 'barangays/default.jpg', NULL, '2025-03-09 17:38:37', '2025-03-09 17:38:37'),
(369, 10, 'Pangao', 3124, 'barangays/default.jpg', NULL, '2025-03-09 17:38:37', '2025-03-09 17:38:37'),
(370, 10, 'Pelingkingan', 1555, 'barangays/default.jpg', NULL, '2025-03-09 17:38:37', '2025-03-09 17:38:37'),
(371, 10, 'Lower Caningag (Perimbangan)', 3335, 'barangays/default.jpg', NULL, '2025-03-09 17:38:37', '2025-03-09 17:38:37'),
(372, 10, 'Poblacion (Bago-A-Ingud)', 1554, 'barangays/default.jpg', NULL, '2025-03-09 17:38:37', '2025-03-09 17:38:37'),
(373, 10, 'Rarab', 3657, 'barangays/default.jpg', NULL, '2025-03-09 17:38:37', '2025-03-09 17:38:37'),
(374, 10, 'Somiorang', 2178, 'barangays/default.jpg', NULL, '2025-03-09 17:38:37', '2025-03-09 17:38:37'),
(375, 10, 'Upper Caningag (Taguitingan)', 2543, 'barangays/default.jpg', NULL, '2025-03-09 17:38:37', '2025-03-09 17:38:37'),
(376, 10, 'Talambo', 4540, 'barangays/default.jpg', NULL, '2025-03-09 17:38:37', '2025-03-09 17:38:37'),
(377, 10, 'Tambacon', 3073, 'barangays/default.jpg', NULL, '2025-03-09 17:38:37', '2025-03-09 17:38:37'),
(378, 10, 'Tawinian', 1467, 'barangays/default.jpg', NULL, '2025-03-09 17:38:37', '2025-03-09 17:38:37'),
(379, 10, 'Tipaan', 3095, 'barangays/default.jpg', NULL, '2025-03-09 17:38:37', '2025-03-09 17:38:37'),
(380, 10, 'Tombador', 4162, 'barangays/default.jpg', NULL, '2025-03-09 17:38:37', '2025-03-09 17:38:37'),
(381, 9, 'Busque', 4271, 'barangays/default.jpg', NULL, '2025-03-09 17:39:30', '2025-03-09 17:39:30'),
(382, 9, 'Larapan', 845, 'barangays/default.jpg', NULL, '2025-03-09 17:39:30', '2025-03-09 17:39:30'),
(383, 9, 'Magoong', 866, 'barangays/default.jpg', NULL, '2025-03-09 17:39:30', '2025-03-09 17:39:30'),
(384, 9, 'Napo', 4580, 'barangays/default.jpg', NULL, '2025-03-09 17:39:30', '2025-03-09 17:39:30'),
(385, 9, 'Poblacion', 1529, 'barangays/default.jpg', NULL, '2025-03-09 17:39:30', '2025-03-09 17:39:30'),
(386, 9, 'Purakan', 4182, 'barangays/default.jpg', NULL, '2025-03-09 17:39:30', '2025-03-09 17:39:30'),
(387, 9, 'Robocon', 1974, 'barangays/default.jpg', NULL, '2025-03-09 17:39:30', '2025-03-09 17:39:30'),
(388, 9, 'Samburon', 818, 'barangays/default.jpg', NULL, '2025-03-09 17:39:30', '2025-03-09 17:39:30'),
(389, 7, 'Austin Heights', 3702, 'barangays/default.jpg', NULL, '2025-03-09 17:40:55', '2025-03-09 17:40:55'),
(390, 7, 'Baybay', 3496, 'barangays/default.jpg', NULL, '2025-03-09 17:40:55', '2025-03-09 17:40:55'),
(391, 7, 'Bubong', 2235, 'barangays/default.jpg', NULL, '2025-03-09 17:40:55', '2025-03-09 17:40:55'),
(392, 7, 'Caromatan', 3573, 'barangays/default.jpg', NULL, '2025-03-09 17:40:55', '2025-03-09 17:40:55'),
(393, 7, 'Inudaran', 1603, 'barangays/default.jpg', NULL, '2025-03-09 17:40:55', '2025-03-09 17:40:55'),
(394, 7, 'Kulasihan', 2139, 'barangays/default.jpg', NULL, '2025-03-09 17:40:55', '2025-03-09 17:40:55'),
(395, 7, 'Libertad', 4782, 'barangays/default.jpg', NULL, '2025-03-09 17:40:55', '2025-03-09 17:40:55'),
(396, 7, 'Lumbac', 3133, 'barangays/default.jpg', NULL, '2025-03-09 17:40:55', '2025-03-09 17:40:55'),
(397, 7, 'Manga', 1269, 'barangays/default.jpg', NULL, '2025-03-09 17:40:55', '2025-03-09 17:40:55'),
(398, 7, 'Matampay', 1849, 'barangays/default.jpg', NULL, '2025-03-09 17:40:55', '2025-03-09 17:40:55'),
(399, 7, 'Mukas', 3753, 'barangays/default.jpg', NULL, '2025-03-09 17:40:55', '2025-03-09 17:40:55'),
(400, 7, 'Muntay', 2638, 'barangays/default.jpg', NULL, '2025-03-09 17:40:55', '2025-03-09 17:40:55'),
(401, 7, 'Pagalungan', 4770, 'barangays/default.jpg', NULL, '2025-03-09 17:40:55', '2025-03-09 17:40:55'),
(402, 7, 'Palao', 3233, 'barangays/default.jpg', NULL, '2025-03-09 17:40:55', '2025-03-09 17:40:55'),
(403, 7, 'Pantaon', 3523, 'barangays/default.jpg', NULL, '2025-03-09 17:40:55', '2025-03-09 17:40:55'),
(404, 7, 'Pantar', 1637, 'barangays/default.jpg', NULL, '2025-03-09 17:40:55', '2025-03-09 17:40:55'),
(405, 7, 'Poblacion', 3272, 'barangays/default.jpg', NULL, '2025-03-09 17:40:55', '2025-03-09 17:40:55'),
(406, 7, 'Rebucon', 4996, 'barangays/default.jpg', NULL, '2025-03-09 17:40:55', '2025-03-09 17:40:55'),
(407, 7, 'Riverside', 4119, 'barangays/default.jpg', NULL, '2025-03-09 17:40:55', '2025-03-09 17:40:55'),
(408, 7, 'San Roque', 1037, 'barangays/default.jpg', NULL, '2025-03-09 17:40:55', '2025-03-09 17:40:55'),
(409, 7, 'Santo Niño', 4349, 'barangays/default.jpg', NULL, '2025-03-09 17:40:55', '2025-03-09 17:40:55'),
(410, 7, 'Simbuco', 2663, 'barangays/default.jpg', NULL, '2025-03-09 17:40:55', '2025-03-09 17:40:55'),
(411, 7, 'Small Banisilon', 4526, 'barangays/default.jpg', NULL, '2025-03-09 17:40:55', '2025-03-09 17:40:55'),
(412, 7, 'Sucodan', 2683, 'barangays/default.jpg', NULL, '2025-03-09 17:40:55', '2025-03-09 17:40:55'),
(413, 7, 'Tabigue', 2665, 'barangays/default.jpg', NULL, '2025-03-09 17:40:55', '2025-03-09 17:40:55'),
(414, 7, 'Titunod', 3941, 'barangays/default.jpg', NULL, '2025-03-09 17:40:55', '2025-03-09 17:40:55'),
(415, 24, 'Abaga', 3959, 'barangays/default.jpg', NULL, '2025-03-09 17:47:36', '2025-03-09 17:47:36'),
(416, 24, 'Adapun-Ali', 3766, 'barangays/default.jpg', NULL, '2025-03-09 17:47:36', '2025-03-09 17:47:36'),
(417, 24, 'Angandog', 5699, 'barangays/default.jpg', NULL, '2025-03-09 17:47:36', '2025-03-09 17:47:36'),
(418, 24, 'Angayen', 973, 'barangays/default.jpg', NULL, '2025-03-09 17:47:36', '2025-03-09 17:47:36'),
(419, 24, 'Bangko', 983, 'barangays/default.jpg', NULL, '2025-03-09 17:47:36', '2025-03-09 17:47:36'),
(420, 24, 'Batolacongan', 3100, 'barangays/default.jpg', NULL, '2025-03-09 17:47:36', '2025-03-09 17:47:36'),
(421, 24, 'Buenavista', 3071, 'barangays/default.jpg', NULL, '2025-03-09 17:47:36', '2025-03-09 17:47:36'),
(422, 24, 'Cadayonan', 3591, 'barangays/default.jpg', NULL, '2025-03-09 17:47:36', '2025-03-09 17:47:36'),
(423, 24, 'Landa', 3861, 'barangays/default.jpg', NULL, '2025-03-09 17:47:36', '2025-03-09 17:47:36'),
(424, 24, 'Lumbac', 5722, 'barangays/default.jpg', NULL, '2025-03-09 17:47:36', '2025-03-09 17:47:36'),
(425, 24, 'Mamaanun', 4731, 'barangays/default.jpg', NULL, '2025-03-09 17:47:36', '2025-03-09 17:47:36'),
(426, 24, 'Maria-Cristina', 6020, 'barangays/default.jpg', NULL, '2025-03-09 17:47:36', '2025-03-09 17:47:36'),
(427, 24, 'Matampay', 5592, 'barangays/default.jpg', NULL, '2025-03-09 17:47:36', '2025-03-09 17:47:36'),
(428, 24, 'Nangka', 2325, 'barangays/default.jpg', NULL, '2025-03-09 17:47:36', '2025-03-09 17:47:36'),
(429, 24, 'Pacalundo', 6816, 'barangays/default.jpg', NULL, '2025-03-09 17:47:36', '2025-03-09 17:47:36'),
(430, 24, 'Poblacion East', 1896, 'barangays/default.jpg', NULL, '2025-03-09 17:47:36', '2025-03-09 17:47:36'),
(431, 24, 'Poblacion West', 6435, 'barangays/default.jpg', NULL, '2025-03-09 17:47:36', '2025-03-09 17:47:36'),
(432, 24, 'Sandor', 3012, 'barangays/default.jpg', NULL, '2025-03-09 17:47:36', '2025-03-09 17:47:36'),
(433, 24, 'Sangcad', 2911, 'barangays/default.jpg', NULL, '2025-03-09 17:47:36', '2025-03-09 17:47:36'),
(434, 24, 'Sarip-Alawi', 1152, 'barangays/default.jpg', NULL, '2025-03-09 17:47:36', '2025-03-09 17:47:36'),
(435, 24, 'Sigayan', 5458, 'barangays/default.jpg', NULL, '2025-03-09 17:47:36', '2025-03-09 17:47:36'),
(436, 6, 'Bagumbayan', 3562, 'barangays/default.jpg', NULL, '2025-03-09 17:49:33', '2025-03-09 17:49:33'),
(437, 6, 'Bara-ason', 4701, 'barangays/default.jpg', NULL, '2025-03-09 17:49:33', '2025-03-09 17:49:33'),
(438, 6, 'Cayontor', 1021, 'barangays/default.jpg', NULL, '2025-03-09 17:49:33', '2025-03-09 17:49:33'),
(439, 6, 'Delabayan', 4925, 'barangays/default.jpg', NULL, '2025-03-09 17:49:33', '2025-03-09 17:49:33'),
(440, 6, 'Inudaran', 4579, 'barangays/default.jpg', NULL, '2025-03-09 17:49:33', '2025-03-09 17:49:33'),
(441, 6, 'Kawit Occidental', 2638, 'barangays/default.jpg', NULL, '2025-03-09 17:49:33', '2025-03-09 17:49:33'),
(442, 6, 'Kawit Oriental', 2246, 'barangays/default.jpg', NULL, '2025-03-09 17:49:33', '2025-03-09 17:49:33'),
(443, 6, 'Libertad', 2407, 'barangays/default.jpg', NULL, '2025-03-09 17:49:33', '2025-03-09 17:49:33'),
(444, 6, 'Paiton', 1880, 'barangays/default.jpg', NULL, '2025-03-09 17:49:33', '2025-03-09 17:49:33'),
(445, 6, 'Poblacion', 2554, 'barangays/default.jpg', NULL, '2025-03-09 17:49:33', '2025-03-09 17:49:33'),
(446, 6, 'Tacub', 1666, 'barangays/default.jpg', NULL, '2025-03-09 17:49:33', '2025-03-09 17:49:33'),
(447, 6, 'Tingintingin', 1820, 'barangays/default.jpg', NULL, '2025-03-09 17:49:33', '2025-03-09 17:49:33'),
(448, 6, 'Tugar', 3598, 'barangays/default.jpg', NULL, '2025-03-09 17:49:33', '2025-03-09 17:49:33'),
(449, 1, 'Alegria', 4240, 'barangays/default.jpg', NULL, '2025-03-09 17:51:34', '2025-03-09 17:51:34'),
(450, 1, 'Babalaya', 4471, 'barangays/default.jpg', NULL, '2025-03-09 17:51:34', '2025-03-09 17:51:34'),
(451, 1, 'Babalayan Townsite', 2449, 'barangays/default.jpg', NULL, '2025-03-09 17:51:34', '2025-03-09 17:51:34'),
(452, 1, 'Binuni', 3860, 'barangays/default.jpg', NULL, '2025-03-09 17:51:34', '2025-03-09 17:51:34'),
(453, 1, 'Demologan', 3349, 'barangays/default.jpg', NULL, '2025-03-09 17:51:34', '2025-03-09 17:51:34'),
(454, 1, 'Dimarao', 1435, 'barangays/default.jpg', NULL, '2025-03-09 17:51:35', '2025-03-09 17:51:35'),
(455, 1, 'Esperanza', 1582, 'barangays/default.jpg', NULL, '2025-03-09 17:51:35', '2025-03-09 17:51:35'),
(456, 1, 'Kahayag', 2844, 'barangays/default.jpg', NULL, '2025-03-09 17:51:35', '2025-03-09 17:51:35'),
(457, 1, 'Liangan East', 3574, 'barangays/default.jpg', NULL, '2025-03-09 17:51:35', '2025-03-09 17:51:35'),
(458, 1, 'Punod', 2130, 'barangays/default.jpg', NULL, '2025-03-09 17:51:35', '2025-03-09 17:51:35'),
(459, 1, 'Mati', 1289, 'barangays/default.jpg', NULL, '2025-03-09 17:51:35', '2025-03-09 17:51:35'),
(460, 1, 'Minaulon', 1266, 'barangays/default.jpg', NULL, '2025-03-09 17:51:35', '2025-03-09 17:51:35'),
(461, 1, 'Pagayawan', 3189, 'barangays/default.jpg', NULL, '2025-03-09 17:51:35', '2025-03-09 17:51:35'),
(462, 1, 'Poblacion Bacolod', 1000, 'barangays/default.jpg', NULL, '2025-03-09 17:51:35', '2025-03-09 17:51:35'),
(463, 1, 'Rupagan', 1903, 'barangays/default.jpg', NULL, '2025-03-09 17:51:35', '2025-03-09 17:51:35'),
(464, 1, 'Delabayan West', 2363, 'barangays/default.jpg', NULL, '2025-03-09 17:51:35', '2025-03-09 17:51:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2025_03_03_132149_create_municipalities_table', 1),
(3, '2025_03_03_132155_create_barangays_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `municipalities`
--

CREATE TABLE `municipalities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `population` int(11) DEFAULT NULL,
  `barangays` int(11) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `culture_image` varchar(191) DEFAULT NULL,
  `culture` text DEFAULT NULL,
  `general_info` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `municipalities`
--

INSERT INTO `municipalities` (`id`, `name`, `latitude`, `longitude`, `population`, `barangays`, `image`, `culture_image`, `culture`, `general_info`, `created_at`, `updated_at`) VALUES
(1, 'Bacolod', 8.1903, 124.0203, 24367, 16, NULL, NULL, NULL, NULL, '2025-03-03 05:36:04', '2025-03-03 05:36:04'),
(2, 'Baloi', 8.1144, 124.2211, 68465, 21, NULL, NULL, NULL, NULL, '2025-03-03 05:36:04', '2025-03-03 05:36:04'),
(3, 'Baroy', 8.0256, 123.7789, 24683, 23, 'municipalities/w1XRnm7IDQoaATZpaR5MUeZTKIelU3tLkzuL63z5.jpg', NULL, NULL, NULL, '2025-03-03 05:36:04', '2025-03-03 05:48:33'),
(4, 'Iligan City', 8.2286, 124.2381, 363115, 44, NULL, NULL, NULL, NULL, '2025-03-03 05:36:04', '2025-03-03 05:36:04'),
(5, 'Kapatagan', 7.8983, 123.7697, 62571, 33, 'municipalities/AaRsZRrAaXKl6tsSTLPD3J9OVHrxsF6Z4moEbXcT.jpg', NULL, NULL, NULL, '2025-03-03 05:36:04', '2025-03-03 05:47:46'),
(6, 'Kauswagan', 8.1914, 124.0881, 24193, 13, NULL, NULL, NULL, NULL, '2025-03-03 05:36:04', '2025-03-03 05:36:04'),
(7, 'Kolambugan', 8.1122, 123.8958, 28265, 26, 'municipalities/Vu1TGdq4iC4o0Xa8oU66XoiFBC7nV0UTt67sVWWm.jpg', NULL, NULL, NULL, '2025-03-03 05:36:04', '2025-03-03 05:36:48'),
(8, 'Lala', 7.9731, 123.7475, 73425, 27, 'municipalities/9n4bEyltDRGorTv5bcaOxxSM4wlHA7cXGMe1xgXc.jpg', NULL, NULL, NULL, '2025-03-03 05:36:04', '2025-03-03 05:48:07'),
(9, 'Linamon', 8.1839, 124.1617, 21269, 8, NULL, NULL, NULL, NULL, '2025-03-03 05:36:04', '2025-03-03 05:36:04'),
(10, 'Magsaysay', 8.0356, 123.9136, 20463, 24, 'municipalities/JlrmOabsImENJuSlTYmVyAWrMUXOcaTFV6wxgJLU.jpg', NULL, NULL, NULL, '2025-03-03 05:36:04', '2025-03-03 05:49:11'),
(11, 'Maigo', 8.1592, 123.9589, 23337, 13, NULL, NULL, NULL, NULL, '2025-03-03 05:36:04', '2025-03-03 05:36:04'),
(12, 'Matungao', 8.1333, 124.1664, 14756, 12, NULL, NULL, NULL, NULL, '2025-03-03 05:36:04', '2025-03-03 05:36:04'),
(13, 'Munai', 7.9858, 124.0522, 35020, 26, NULL, NULL, NULL, NULL, '2025-03-03 05:36:04', '2025-03-03 05:36:04'),
(14, 'Nunungan', 7.8108, 123.9442, 18827, 25, 'municipalities/1KALxGBodlgH8fbWEtCz74Fr0lrFknx3LVWwBZHd.png', NULL, NULL, NULL, '2025-03-03 05:36:04', '2025-03-03 05:47:20'),
(15, 'Pantao Ragat', 8.06, 124.1822, 30247, 20, NULL, NULL, NULL, NULL, '2025-03-03 05:36:04', '2025-03-03 05:36:04'),
(16, 'Pantar', 8.0644, 124.2631, 26599, 21, NULL, NULL, NULL, NULL, '2025-03-03 05:36:04', '2025-03-03 05:36:04'),
(17, 'Poona Piagapo', 8.0828, 124.1408, 29183, 26, NULL, NULL, NULL, NULL, '2025-03-03 05:36:04', '2025-03-03 05:36:04'),
(18, 'Salvador', 7.9028, 123.8411, 32115, 25, 'municipalities/ON2aUgwF3VvXE8XpdhyA1LNhBK8xfpdVfsXz40xs.png', NULL, NULL, 'Salvador, officially the Municipality of Salvador (Maranao: Inged a Salvador; Cebuano: Lungsod sa Salvador; Tagalog: Bayan ng Salvador), is a municipality in the province of Lanao del Norte, Philippines. According to the 2020 census, it has a population of 32,115 people', '2025-03-03 05:36:04', '2025-03-03 05:47:33'),
(19, 'Sapad', 7.8453, 123.837, 22974, 17, 'municipalities/cnjUn78l3m6vp4voNbYI7K1VzCZBQ6YB0MvElz7Y.jpg', NULL, NULL, NULL, '2025-03-03 05:36:04', '2025-03-03 05:45:48'),
(20, 'Sultan Naga Dimaporo', 7.795, 123.7153, 60904, 37, 'municipalities/6qN8NUSXpPW9nX9dwuB4ozu3OsMRrOYotj3nyAPM.png', NULL, NULL, NULL, '2025-03-03 05:36:04', '2025-03-03 05:45:36'),
(21, 'Tagoloan', 8.127, 124.2758, 15091, 7, NULL, NULL, NULL, NULL, '2025-03-03 05:36:04', '2025-03-03 05:36:04'),
(22, 'Tangcal', 7.9964, 123.9972, 16075, 18, NULL, NULL, NULL, NULL, '2025-03-03 05:36:04', '2025-03-03 05:36:04'),
(23, 'Tubod', 8.0533, 123.7917, 50073, 24, 'municipalities/ROodLGSd0lK0s0Ys6BVnbye2VO8yUOzsn5VmI5oi.png', NULL, NULL, NULL, '2025-03-03 05:36:04', '2025-03-03 05:49:01'),
(24, 'Balo-i', 8.1667, 124.1667, 60000, 21, 'municipalities/baloi.jpg', NULL, NULL, 'Balo-i is a municipality in Lanao del Norte known for its cultural heritage and trade activities.', '2025-03-09 17:47:36', '2025-03-09 17:47:36');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangays`
--
ALTER TABLE `barangays`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barangays_municipality_id_foreign` (`municipality_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `municipalities`
--
ALTER TABLE `municipalities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangays`
--
ALTER TABLE `barangays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=465;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `municipalities`
--
ALTER TABLE `municipalities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barangays`
--
ALTER TABLE `barangays`
  ADD CONSTRAINT `barangays_municipality_id_foreign` FOREIGN KEY (`municipality_id`) REFERENCES `municipalities` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
