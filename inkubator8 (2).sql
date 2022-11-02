-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2022 at 04:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inkubator8`
--

-- --------------------------------------------------------

--
-- Table structure for table `bambus`
--

CREATE TABLE `bambus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deskripsi` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bambus`
--

INSERT INTO `bambus` (`id`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'bambu batu', NULL, NULL),
(2, 'bambu petung', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kontrols`
--

CREATE TABLE `kontrols` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bambu_id` bigint(20) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_berat` int(11) DEFAULT NULL,
  `nilai_suhu` int(11) NOT NULL,
  `blower` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kontrols`
--

INSERT INTO `kontrols` (`id`, `bambu_id`, `nama`, `nilai_berat`, `nilai_suhu`, `blower`, `created_at`, `updated_at`) VALUES
(13, 1, 'admin', 2000, 40, 1, '2022-08-22 06:39:32', NULL),
(14, 1, 'admin', 0, 0, 0, '2022-08-22 06:39:45', NULL),
(15, 1, 'admin', 200, 54, 1, '2022-08-23 11:30:43', NULL),
(16, 1, 'admin', 1000, 30, 1, '2022-08-24 08:53:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_03_080835_create_monitorings_table', 2),
(6, '2022_08_02_080116_create_kontrols_table', 3),
(7, '2022_08_02_171928_create_roles_table', 4),
(8, '2022_08_02_173359_create_bambus_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `monitorings`
--

CREATE TABLE `monitorings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `suhu` double(8,2) NOT NULL,
  `kelembapan` int(11) NOT NULL,
  `berat` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monitorings`
--

INSERT INTO `monitorings` (`id`, `suhu`, `kelembapan`, `berat`, `created_at`, `updated_at`) VALUES
(8, 60.00, 70, 700.00, '2022-07-02 18:36:08', NULL),
(9, 30.00, 80, 900.00, '2022-08-22 05:42:18', NULL),
(10, 30.00, 79, 300.00, '2022-08-22 06:44:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'pegrajin ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `nama`, `email`, `password`, `created_at`, `updated_at`) VALUES
(3, 0, 'Bima', 'bima@gmail.com', '$2y$10$2t1Snx5au7eLI3N6SuirHOUmiVbx2zCLmjIQ.gps.IzidCkaNyr3K', '2022-06-09 08:33:43', '2022-06-09 08:33:43'),
(6, 1, 'admin', 'admin@gmail.com', '$2y$10$eBgg42y5RVZ3B/HfzeXGvOn7SaiR/UDMGe1zOo0Vyb2eNstssMHgS', '2022-08-02 12:31:25', '2022-08-02 12:31:25'),
(8, 2, 'taufik', 'taufik@gmail.com', '$2y$10$e9jNdZHxziQX98J/Zn2Lb.6pbAclOEUQvxNmx.ahDzR4Y1y4dcjhi', '2022-08-03 02:37:41', '2022-08-03 02:37:41'),
(9, 1, 'adin', 'adin@gmail.com', '$2y$10$40ZBxLGs37GfSUWOwc2vguwcgXCWIpxkwGco1x4gXDCNBNs5R3umi', '2022-08-05 11:56:21', '2022-08-05 11:56:21'),
(10, 1, 'Adin', 'diin@gmail.com', '$2y$10$zL0P3SpqeSDu7dBbU9VMfu6VQUGPJYhCq2Fh0aX50BmqhSfqgaM9G', '2022-08-15 07:39:04', '2022-08-15 07:39:04'),
(11, 1, 'Alvaro Bima Saputra', 'admina@gmail.com', '$2y$10$c6XraIaipQyQQUdMRepMU.lvsiSjFq56NNJ0xv1OYpzQeRwsMrqR.', '2022-08-15 11:26:47', '2022-08-15 11:26:47'),
(12, 2, 'ada', 'ada@mail.com', '$2y$10$0fFvnU7y2B5kgBFNiznHOeREovu/Bd4wo7cC0k1yRbIoQRfCjQZQy', '2022-08-15 13:25:50', '2022-08-15 13:25:50'),
(13, 2, 'kepo', 'kepo@gmail.com', '$2y$10$8qUdUm1mvN8Z4FGXRRWeB.l2bveaJerb05zqa56gelW2dUfn5ynO.', '2022-08-22 06:37:27', '2022-08-22 06:37:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bambus`
--
ALTER TABLE `bambus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kontrols`
--
ALTER TABLE `kontrols`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monitorings`
--
ALTER TABLE `monitorings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bambus`
--
ALTER TABLE `bambus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kontrols`
--
ALTER TABLE `kontrols`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `monitorings`
--
ALTER TABLE `monitorings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
