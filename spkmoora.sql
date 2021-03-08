-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2021 at 03:55 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spkmoora`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatives`
--

CREATE TABLE `alternatives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vegetasi_area` double(8,2) DEFAULT NULL,
  `volume_material` double(8,2) DEFAULT NULL,
  `luas_daerah` double(8,2) DEFAULT NULL,
  `volume_tampungan` double(8,2) DEFAULT NULL,
  `lama_operasi` double(8,2) DEFAULT NULL,
  `harga_air` double(8,2) DEFAULT NULL,
  `akses_jalan` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alternatives`
--

INSERT INTO `alternatives` (`id`, `nama`, `kode`, `vegetasi_area`, `volume_material`, `luas_daerah`, `volume_tampungan`, `lama_operasi`, `harga_air`, `akses_jalan`, `created_at`, `updated_at`) VALUES
(1, 'Dadapayam', 'A1', 4.00, 1.00, 2.00, 3.00, 4.00, 4.00, 3.00, '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(2, 'Mluweh', 'A2', 1.00, 5.00, 1.00, 1.00, 1.00, 1.00, 2.00, '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(3, 'Lebak', 'A3', 4.00, 3.00, 1.00, 2.00, 4.00, 1.00, 3.00, '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(4, 'Pakis', 'A4', 4.00, 1.00, 2.00, 2.00, 4.00, 2.00, 3.00, '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(5, 'Jatikurung', 'A5', 1.00, 1.00, 3.00, 5.00, 5.00, 5.00, 3.00, '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(6, 'Gogodalem', 'A6', 1.00, 2.00, 4.00, 4.00, 3.00, 5.00, 3.00, '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(7, 'Kandangan', 'A7', 3.00, 2.00, 1.00, 5.00, 5.00, 5.00, 3.00, '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(8, 'Ngrawan', 'A8', 3.00, 1.00, 2.00, 5.00, 5.00, 5.00, 2.00, '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(9, 'Contoh', 'A9', 2.00, 1.00, 2.00, 1.00, 2.00, 1.00, 2.00, '2021-03-07 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `classifications`
--

CREATE TABLE `classifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `criteria_id` bigint(20) UNSIGNED NOT NULL,
  `value` double(8,2) NOT NULL,
  `classification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classifications`
--

INSERT INTO `classifications` (`id`, `criteria_id`, `value`, `classification`, `created_at`, `updated_at`) VALUES
(1, 1, 1.00, 'Hutan', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(2, 1, 2.00, 'Semak Belukar', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(3, 1, 3.00, 'Ladang/tegalan', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(4, 1, 4.00, 'Sawah tadah hujan', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(5, 1, 5.00, 'Perkampungan', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(6, 2, 1.00, '< 4000 m3', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(7, 2, 2.00, '40000 m3 ≤ X < 80000 m3', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(8, 2, 3.00, '80000 m3 ≤ X < 120000 m3', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(9, 2, 4.00, '120000 m3 ≤ X < 160000 m3', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(10, 2, 5.00, '160000 m3 ≤ X < 200000 m3', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(11, 3, 1.00, '1.5 Ha ≤ X < 3 Ha', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(12, 3, 2.00, '3 Ha ≤ X < 4.5 Ha', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(13, 3, 3.00, '4.5 Ha ≤ X < 6 Ha', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(14, 3, 4.00, '6 Ha ≤ X < 7.5 Ha', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(15, 3, 5.00, '≥ 7.5 Ha', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(16, 4, 1.00, '≥ 1500000 m3', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(17, 4, 2.00, '750000 m3 ≤ X < 1500000 m3', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(18, 4, 3.00, '500000 m3 ≤ X < 750000 m3', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(19, 4, 4.00, '250000 m3 ≤ X < 500000 m3', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(20, 4, 5.00, '< 250000 m3', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(21, 5, 1.00, '≥100 hr', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(22, 5, 2.00, '80 hr ≤ X < 100 hr', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(23, 5, 3.00, '60 hr ≤ X < 80 hr', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(24, 5, 4.00, '40 hr ≤ X < 60 hr', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(25, 5, 5.00, '< 40 hr', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(26, 6, 1.00, '< Rp10.000,00', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(27, 6, 2.00, 'Rp10.000,00 ≤ X < Rp20.000,00', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(28, 6, 3.00, 'Rp20.000,00 ≤ X < Rp30.000,00', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(29, 6, 4.00, 'Rp30.000,00 ≤ X < Rp40.000,00', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(30, 6, 5.00, '≥ Rp40.0000,00', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(31, 7, 1.00, 'tersedia jalan aspal sampai site', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(32, 7, 2.00, 'jalan makadam/tanah sampai site', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(33, 7, 3.00, 'jalan setapak', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(34, 7, 4.00, 'tidak tersedia jalan', '2021-03-08 01:51:30', '2021-03-08 01:51:30');

-- --------------------------------------------------------

--
-- Table structure for table `criterias`
--

CREATE TABLE `criterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` set('benefit','cost') COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `criterias`
--

INSERT INTO `criterias` (`id`, `nama`, `tipe`, `bobot`, `created_at`, `updated_at`) VALUES
(1, 'Vegetasi area genangan embung', 'benefit', 0.94, '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(2, 'Volume material timbunan', 'cost', 0.70, '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(3, 'Luas daerah yang akan dibebaskan', 'cost', 1.85, '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(4, 'Volume tampungan efektif', 'benefit', 0.98, '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(5, 'Lama operasi', 'benefit', 1.17, '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(6, 'Harga air/m3', 'cost', 0.95, '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(7, 'Akses jalan menuju site bendungan', 'cost', 0.75, '2021-03-08 01:51:30', '2021-03-08 01:51:30');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_02_031955_create_alternatives_table', 1),
(5, '2021_03_02_033125_create_criterias_table', 1),
(6, '2021_03_02_041218_create_values_table', 1),
(7, '2021_03_02_043542_create_classifications_table', 1),
(8, '2021_03_08_043513_add_criteria_to_alternatives_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Farrell Denando', 'farrellp43@gmail.com', NULL, '$2y$10$kEc2Jtp6M.zJOGCiQbXNW.eC40SMVy3HGuTBaOBIqZZJgTmS7aSmO', 'lCXYu2j28M1tUQJITSzMZay8qCd4DYe4se0yZJqIZsixt4s29qmrBZPi30Ay', '2021-03-08 01:51:30', '2021-03-08 01:51:30'),
(2, 'Kyoma', 'kyoma69@gmail.com', NULL, '$2y$10$s8x6nu9iHUiYUd4WPlCtx.VuOY54DvJZDnK9dYdQf4YJ3lnrWPrhu', NULL, '2021-03-08 01:51:30', '2021-03-08 01:51:30');

-- --------------------------------------------------------

--
-- Table structure for table `values`
--

CREATE TABLE `values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alternative_id` bigint(20) UNSIGNED NOT NULL,
  `criteria_id` bigint(20) UNSIGNED NOT NULL,
  `value` double(8,2) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `values`
--

INSERT INTO `values` (`id`, `alternative_id`, `criteria_id`, `value`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 4.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(2, 1, 2, 1.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(3, 1, 3, 2.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(4, 1, 4, 3.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(5, 1, 5, 4.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(6, 1, 6, 4.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(7, 1, 7, 3.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(8, 2, 1, 1.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(9, 2, 2, 5.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(10, 2, 3, 1.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(11, 2, 4, 1.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(12, 2, 5, 1.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(13, 2, 6, 1.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(14, 2, 7, 2.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(15, 3, 1, 4.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(16, 3, 2, 3.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(17, 3, 3, 1.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(18, 3, 4, 2.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(19, 3, 5, 4.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(20, 3, 6, 1.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(21, 3, 7, 3.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(22, 4, 1, 4.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(23, 4, 2, 1.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(24, 4, 3, 2.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(25, 4, 4, 2.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(26, 4, 5, 4.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(27, 4, 6, 2.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(28, 4, 7, 3.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(29, 5, 1, 1.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(30, 5, 2, 1.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(31, 5, 3, 3.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(32, 5, 4, 5.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(33, 5, 5, 5.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(34, 5, 6, 5.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(35, 5, 7, 3.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(36, 6, 1, 1.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(37, 6, 2, 2.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(38, 6, 3, 4.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(39, 6, 4, 4.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(40, 6, 5, 3.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(41, 6, 6, 5.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(42, 6, 7, 3.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(43, 7, 1, 3.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(44, 7, 2, 2.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(45, 7, 3, 1.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(46, 7, 4, 5.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(47, 7, 5, 5.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(48, 7, 6, 5.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(49, 7, 7, 3.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(50, 8, 1, 3.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(51, 8, 2, 1.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(52, 8, 3, 2.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(53, 8, 4, 5.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(54, 8, 5, 5.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(55, 8, 6, 5.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(56, 8, 7, 2.00, 1, '2021-03-08 01:51:31', '2021-03-08 01:51:31'),
(57, 9, 1, 2.00, 1, NULL, NULL),
(58, 9, 2, 1.00, 1, NULL, NULL),
(59, 9, 3, 2.00, 1, NULL, NULL),
(60, 9, 4, 1.00, 1, NULL, NULL),
(61, 9, 5, 2.00, 1, NULL, NULL),
(62, 9, 6, 1.00, 1, NULL, NULL),
(63, 9, 7, 2.00, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatives`
--
ALTER TABLE `alternatives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classifications`
--
ALTER TABLE `classifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `criterias`
--
ALTER TABLE `criterias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `values`
--
ALTER TABLE `values`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatives`
--
ALTER TABLE `alternatives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `classifications`
--
ALTER TABLE `classifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `criterias`
--
ALTER TABLE `criterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `values`
--
ALTER TABLE `values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
