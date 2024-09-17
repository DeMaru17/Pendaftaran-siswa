-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2024 at 08:34 AM
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
-- Database: `web_dennis_pendaftaran_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gelombang`
--

CREATE TABLE `gelombang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_gelombang` varchar(255) NOT NULL,
  `aktif` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gelombang`
--

INSERT INTO `gelombang` (`id`, `nama_gelombang`, `aktif`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Gelombang 1', 0, '2024-09-11 07:30:23', '2024-09-12 00:31:38', NULL),
(3, 'Gelombang 2', 1, '2024-09-11 07:31:28', '2024-09-11 23:03:57', NULL),
(4, 'Gelombang 3', 0, '2024-09-11 07:31:34', '2024-09-11 07:31:34', NULL),
(5, 'Gelombang 12', 0, '2024-09-11 07:43:36', '2024-09-11 07:43:48', '2024-09-11 07:43:48');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jurusan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama_jurusan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Operator Komputer', '2024-09-11 07:02:22', '2024-09-11 07:11:29', NULL),
(2, 'Bahasa Inggris', '2024-09-11 07:03:41', '2024-09-11 07:03:41', NULL),
(3, 'Desain Grafis', '2024-09-11 07:03:50', '2024-09-11 07:03:50', NULL),
(4, 'Tata Boga', '2024-09-11 07:04:19', '2024-09-11 07:04:19', NULL),
(5, 'Tata Busana', '2024-09-11 07:04:26', '2024-09-11 07:04:26', NULL),
(6, 'Tata Graha', '2024-09-11 07:04:33', '2024-09-11 07:04:33', NULL),
(7, 'Teknik Pendingin', '2024-09-11 07:04:42', '2024-09-11 07:04:42', NULL),
(8, 'Teknik Komputer', '2024-09-11 07:04:51', '2024-09-11 07:04:51', NULL),
(9, 'Otomotif Sepeda Motor', '2024-09-11 07:05:04', '2024-09-11 07:05:04', NULL),
(10, 'Jaringan Komputer', '2024-09-11 07:05:10', '2024-09-11 07:05:10', NULL),
(11, 'Barista', '2024-09-11 07:05:20', '2024-09-11 07:05:20', NULL),
(12, 'Bahasa Korea', '2024-09-11 07:05:29', '2024-09-11 07:05:29', NULL),
(13, 'Makeup Artist', '2024-09-11 07:05:41', '2024-09-11 07:05:41', NULL),
(14, 'Video Editor', '2024-09-11 07:06:04', '2024-09-11 07:06:04', NULL),
(15, 'Content Creator', '2024-09-11 07:06:16', '2024-09-11 07:06:16', NULL),
(16, 'Web Programming', '2024-09-11 07:06:24', '2024-09-11 07:06:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_level` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `nama_level`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'Administrator', '2024-09-11 06:22:29', '2024-09-11 06:32:04', NULL),
(6, 'Admin', '2024-09-11 06:22:35', '2024-09-11 06:22:35', NULL),
(7, 'PIC', '2024-09-11 06:22:44', '2024-09-11 06:22:44', NULL),
(8, 'Instruktur', '2024-09-11 06:22:51', '2024-09-11 06:22:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_09_11_021206_create_levels_table', 1),
(5, '2024_09_11_021545_update_users_table', 1),
(6, '2024_09_11_135223_create_jurusan_table', 2),
(7, '2024_09_11_141428_create_gelombang_table', 3),
(8, '2024_09_11_142206_update_gelombang_table', 4),
(9, '2024_09_11_144737_create_peserta_pelatihan_table', 5),
(10, '2024_09_12_060555_update_peserta_pelatihan_table', 6),
(11, '2024_09_13_054707_create_user_jurusan_table', 7),
(12, '2024_09_14_054442_add_id_user_to_user_jurusan_table', 8),
(13, '2024_09_17_042318_add_keterangan_to_peserta_pelatihan_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peserta_pelatihan`
--

CREATE TABLE `peserta_pelatihan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_jurusan` bigint(20) UNSIGNED NOT NULL,
  `id_gelombang` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `kartu_keluarga` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pendidikan_terakhir` varchar(255) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `kejuruan` varchar(255) NOT NULL,
  `nomor_hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `aktivitas_saat_ini` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT 0,
  `keterangan` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peserta_pelatihan`
--

INSERT INTO `peserta_pelatihan` (`id`, `id_jurusan`, `id_gelombang`, `nama_lengkap`, `nik`, `kartu_keluarga`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `pendidikan_terakhir`, `nama_sekolah`, `kejuruan`, `nomor_hp`, `email`, `aktivitas_saat_ini`, `status`, `keterangan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 16, 3, 'Dennis bhayu bramastha', '3175021706000002', 'public/kartu_keluarga/KARTU KELUARGA.pdf', 'Laki-Laki', 'Jakarta', '2000-06-17', 'SMA', 'SMAN 31 JAKARTA', 'IPA', '085888722935', 'dennisbayu99@gmail.com', 'Kuliah', 3, 0, '2024-09-12 02:32:25', '2024-09-16 20:14:50', NULL),
(3, 16, 3, 'Bhayu', '2331313143143', 'public/kartu_keluarga/NPWP-ELEKTRONIK.pdf', 'Laki-Laki', 'Jakarta', '2024-09-03', 'Sarjana', 'Universitas Bina Sarana Informatika', 'Ilmu Komputer', '085888722935', 'bhayu@gmail.com', 'Bekerja', 1, 0, '2024-09-12 03:59:57', '2024-09-12 03:59:57', NULL),
(4, 16, 3, 'Bramastha', '213465846', 'public/kartu_keluarga/z3EAvglyYSByOOyhYUegZ9TUaKXbF6KDLJXbZ2Ei.jpg', 'Laki-Laki', 'Jakarta', '2024-09-02', 'Sarjana', 'Universitas Bina Sarana Informatika', 'Ilmu Komputer', '082146548646', 'bramastha@gmail.com', 'Bekerja', 2, 1, '2024-09-12 18:45:53', '2024-09-16 23:17:37', NULL),
(5, 5, 3, 'tes', '314544863132165', 'public/kartu_keluarga/KARTU KELUARGA.pdf', 'Laki-Laki', 'Jakarta', '2024-09-17', 'Sarjana', 'Universitas Bina Sarana Informatika', 'Ilmu Komputer', '085888722935', 'tes@gmail.com', 'Kuliah', 0, 0, '2024-09-16 23:29:06', '2024-09-16 23:29:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('rzjqNpDTvQMtGUkIZNEJNWu7lPcF8LJcORCEMBnt', 5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiMU5HUk1ZUVJ3UGVpWG1BOVJLdnpCSEl0YWdqM2VUbVJ3a1VMdGZjdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9kYXRhLXBlc2VydGEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjU6ImFsZXJ0IjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo1O30=', 1726554564);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_level` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_level`, `nama_lengkap`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 7, 'Dennis Bhayu', 'dennisbayu99@gmail.com', NULL, '$2y$12$G3ibrJ7Ws2q.1Nu2gLJ4RO8nqW6RpfHFC7kB9Lq7oLHbhnFE162e2', NULL, '2024-09-11 06:23:26', '2024-09-13 00:15:11', NULL),
(5, 5, 'Administrator', 'administrator@gmail.com', NULL, '$2y$12$zkr0DhPetCfbNleTbkyfXOIBw4PnejdsWOteH2Cjz9ZfVtOAnuwQe', NULL, '2024-09-13 00:18:52', '2024-09-16 22:27:58', NULL),
(6, 8, 'Bramastha', 'bramastha@gmail.com', NULL, '$2y$12$d4fcESWK0TixQxJhHQsbVOyNEBZ28sb96wApQiKTIN5alxrZcb0Pq', NULL, '2024-09-16 18:21:15', '2024-09-16 18:21:15', NULL),
(7, 6, 'Admin', 'admin@gmail.com', NULL, '$2y$12$RfL0PuEIUXPCURRr.f6dD.MGSfUtTAXRCjlEYnAzlLc1z6uA4Y1ke', NULL, '2024-09-16 19:03:32', '2024-09-16 19:03:32', NULL),
(8, 7, 'PIC Web', 'picweb@gmail.com', NULL, '$2y$12$hnw1xWD.YWsWmiN5PnAOEujYlfAqkSUEknyxXOOzXoX9ao.mnvP/S', NULL, '2024-09-16 19:32:22', '2024-09-16 19:32:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_jurusan`
--

CREATE TABLE `user_jurusan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_jurusan` bigint(20) UNSIGNED NOT NULL,
  `id_level` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_jurusan`
--

INSERT INTO `user_jurusan` (`id`, `id_user`, `id_jurusan`, `id_level`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 4, 16, 7, '2024-09-13 00:32:47', '2024-09-13 00:32:47', NULL),
(2, 4, 1, 7, '2024-09-16 18:21:42', '2024-09-16 18:21:42', NULL),
(3, 6, 8, 8, '2024-09-16 18:21:52', '2024-09-16 18:21:52', NULL),
(4, 6, 15, 8, '2024-09-16 18:22:01', '2024-09-16 18:22:01', NULL),
(5, 8, 16, 7, '2024-09-16 19:33:09', '2024-09-16 19:33:09', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gelombang`
--
ALTER TABLE `gelombang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `peserta_pelatihan`
--
ALTER TABLE `peserta_pelatihan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peserta_pelatihan_id_jurusan_foreign` (`id_jurusan`),
  ADD KEY `peserta_pelatihan_id_gelombang_foreign` (`id_gelombang`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_id_level_foreign` (`id_level`);

--
-- Indexes for table `user_jurusan`
--
ALTER TABLE `user_jurusan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_jurusan_id_jurusan_foreign` (`id_jurusan`),
  ADD KEY `user_jurusan_id_level_foreign` (`id_level`),
  ADD KEY `user_jurusan_id_user_foreign` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gelombang`
--
ALTER TABLE `gelombang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `peserta_pelatihan`
--
ALTER TABLE `peserta_pelatihan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_jurusan`
--
ALTER TABLE `user_jurusan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peserta_pelatihan`
--
ALTER TABLE `peserta_pelatihan`
  ADD CONSTRAINT `peserta_pelatihan_id_gelombang_foreign` FOREIGN KEY (`id_gelombang`) REFERENCES `gelombang` (`id`),
  ADD CONSTRAINT `peserta_pelatihan_id_jurusan_foreign` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_level_foreign` FOREIGN KEY (`id_level`) REFERENCES `levels` (`id`);

--
-- Constraints for table `user_jurusan`
--
ALTER TABLE `user_jurusan`
  ADD CONSTRAINT `user_jurusan_id_jurusan_foreign` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id`),
  ADD CONSTRAINT `user_jurusan_id_level_foreign` FOREIGN KEY (`id_level`) REFERENCES `levels` (`id`),
  ADD CONSTRAINT `user_jurusan_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
