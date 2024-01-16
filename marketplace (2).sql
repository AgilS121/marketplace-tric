-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2024 at 10:04 AM
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
-- Database: `marketplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT 'default.jpg',
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `nama_barang`, `price`, `category_id`, `user_id`, `image`, `slug`, `body`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Anjay Bang', 70000, 1, 1, 'default.jpg', 'fgsdgsfgs', 'afdfaff', '2024-01-10 17:40:34', '2024-01-10 10:40:34', '2024-01-10 22:21:53'),
(5, 'ah yg bner', 8000, 1, 1, 'default.jpg', 'coba', 'coba', '2024-01-10 17:53:33', '2024-01-10 10:53:33', '2024-01-10 10:53:33'),
(6, 'eratretr', 9000, 1, 1, 'default.jpg', 'cobaadf', 'adfad', '2024-01-10 17:57:17', '2024-01-10 10:57:17', '2024-01-10 10:57:17'),
(8, 'eratretr', 60000, 1, 1, 'default.jpg', 'Mencobakkii', 'jhnb', '2024-01-10 18:06:25', '2024-01-10 11:06:25', '2024-01-10 11:06:25'),
(9, 'eratretrfgf', 60000, 1, 1, 'default.jpg', 'ffddsaqw', 'qddfdfdas', '2024-01-10 18:07:58', '2024-01-10 11:07:58', '2024-01-10 11:07:58'),
(10, 'eratretrfgf', 60000, 1, 1, 'default.jpg', 'ffddsaqwevsd', 'qddfdfdas', '2024-01-10 18:08:36', '2024-01-10 11:08:36', '2024-01-10 11:08:36'),
(11, 'eratretrfgf', 6000, 1, 1, 'default.jpg', 'ffddsaewqer', 'asdscxdf', '2024-01-10 18:09:24', '2024-01-10 11:09:24', '2024-01-10 11:09:24'),
(12, 'eratretrfgf', 600000, 1, 1, 'default.jpg', 'fgsdgsfgsqqqe', 'qwedf', '2024-01-10 18:10:11', '2024-01-10 11:10:11', '2024-01-10 11:10:11'),
(13, 'eratretr', 6000, 1, 1, 'default.jpg', 'ffddsall', 'lkjhgf', '2024-01-10 18:14:02', '2024-01-10 11:14:02', '2024-01-10 11:14:02'),
(15, 's', 9000, 1, 1, 'default.jpg', 'Mencobada', 'adfa', '2024-01-10 18:16:41', '2024-01-10 11:16:41', '2024-01-10 11:16:41'),
(16, 'eratretr', 60000, 1, 1, 'default.jpg', 'coball', 'l;kjhcnm', '2024-01-10 18:18:06', '2024-01-10 11:18:06', '2024-01-10 11:18:06'),
(17, 'eratretr', 60000, 1, 1, 'default.jpg', 'adfadffa', 'adfadf', '2024-01-10 18:18:33', '2024-01-10 11:18:33', '2024-01-10 11:18:33'),
(18, 'eratretrfgf', 60000, 1, 1, 'default.jpg', 'cobaadfaa', 'dsfadfddsad', '2024-01-10 18:21:04', '2024-01-10 11:21:04', '2024-01-10 11:21:04'),
(19, 'eratretrfgfdsf', 8000, 1, 1, 'default.jpg', 'cobaadfadsaf', 'adfad', '2024-01-10 18:22:12', '2024-01-10 11:22:12', '2024-01-10 11:22:12'),
(20, 'eratretrfgf', 6000, 1, 1, 'default.jpg', 'Mencoballll', 'oiuiugfh', '2024-01-10 18:25:24', '2024-01-10 11:25:24', '2024-01-10 11:25:24'),
(21, 'eratretr', 6000, 1, 1, 'default.jpg', 'Mencobadsa', 'dafad', '2024-01-10 18:30:16', '2024-01-10 11:30:16', '2024-01-10 11:30:16'),
(22, 'eratretr', 6000, 1, 1, 'default.jpg', 'Mencobadsalpkpl;', 'dafad', '2024-01-10 18:32:54', '2024-01-10 11:32:54', '2024-01-10 11:32:54'),
(23, 'eratretr', 6000, 1, 1, 'default.jpg', 'Mencobadsalpkpl;asdAA', 'dafad', '2024-01-10 18:40:47', '2024-01-10 11:40:47', '2024-01-10 11:40:47'),
(24, 'a', 123, 1, 1, 'default.jpg', 'aa', 'aa', '2024-01-11 10:57:40', '2024-01-11 03:57:40', '2024-01-11 03:57:40'),
(25, 'test', 12, 1, 5, '1705224503.png', 'test', 'aaa', '2024-01-14 09:28:23', '2024-01-14 02:28:23', '2024-01-14 02:28:23'),
(26, 'test', 12, 1, 5, '1705224718.png', '1', 'aa', '2024-01-14 09:31:58', '2024-01-14 02:31:58', '2024-01-14 02:31:58');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_penjual` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Umum', 'umum', NULL, NULL, NULL),
(2, 'Chairs', 'chairs', 'c1.webp', '2024-01-15 08:46:44', '2024-01-15 08:46:44'),
(3, 'Bedstead', 'bedstead', 'c2.webp', '2024-01-15 08:46:44', '2024-01-15 08:46:44'),
(4, 'Sofa', 'sofa', 'c3.webp', '2024-01-15 08:46:44', '2024-01-15 08:46:44'),
(5, 'TV Cabinet', 'tv cabinet', 'c4.webp', '2024-01-15 08:46:44', '2024-01-15 08:46:44'),
(6, 'Smart Fit', 'smart fit', 'c5.webp', '2024-01-15 08:46:44', '2024-01-15 08:46:44'),
(7, 'Table', 'table', 'c6.webp', '2024-01-15 08:46:44', '2024-01-15 08:46:44'),
(8, 'Wardrobe', 'wardrobe', 'c7.webp', '2024-01-15 08:46:44', '2024-01-15 08:46:44'),
(9, 'Office Chair', 'office chair', 'c8.webp', '2024-01-15 08:46:44', '2024-01-15 08:46:44'),
(10, 'Dressing Table', 'dressing table', 'c9.webp', '2024-01-15 08:46:44', '2024-01-15 08:46:44'),
(11, 'Miscellaneous', 'miscellaneous', 'c10.webp', '2024-01-15 08:46:44', '2024-01-15 08:46:44'),
(12, 'Kitchen', 'Kitchen', 'c11.webp', '2024-01-15 08:46:44', '2024-01-15 08:46:44'),
(13, 'Door', 'door', 'c12.webp', '2024-01-15 08:46:44', '2024-01-15 08:46:44');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_11_21_154428_create_posts_table', 1),
(7, '2023_11_21_161623_create_categories_table', 1),
(8, '2023_11_22_163139_add_is_admin_to_users_table', 1),
(9, '2023_12_07_083637_create_barangs_table', 1),
(10, '2024_01_11_155815_create_profile_table', 2),
(11, '2024_01_11_155828_create_profile_penjual_table', 2),
(12, '2024_01_11_155844_create_profile_admin_table', 3),
(13, '2024_01_13_072058_create_carousel_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `excerpt` text NOT NULL,
  `body` text NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile_admin`
--

CREATE TABLE `profile_admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile_penjual`
--

CREATE TABLE `profile_penjual` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `store_name` varchar(255) NOT NULL,
  `store_description` text NOT NULL,
  `store_logo` text DEFAULT NULL,
  `store_icon` text DEFAULT NULL,
  `store_address` varchar(255) DEFAULT NULL,
  `store_phone_number` varchar(25) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile_penjual`
--

INSERT INTO `profile_penjual` (`id`, `user_id`, `store_name`, `store_description`, `store_logo`, `store_icon`, `store_address`, `store_phone_number`, `created_at`, `updated_at`) VALUES
(1, 5, 'test', 'test', '1705284809.jpg', '1705284923.png', 'test', '1234', '2024-01-14 01:57:22', '2024-01-14 19:15:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `role`, `image`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Admin', 'maryadi.ade', 'admin@admin', '2024-01-10 08:47:12', '$2y$12$Cvuu.dGEXoHeZhKUCw11a.7quJRraIvZiJSBv04QQkETDevwXCIb6', NULL, NULL, '5k0Wa4u66z', '2024-01-10 08:47:13', '2024-01-10 08:47:13', 0),
(5, 'Agil Pamungkas', 'asap', 'kiravelnote@gmail.com', NULL, '$2y$12$8vxY2Ap6RiBKd1zbpNwjVuJih51vmRnYXzMTdKDaAVYYS2azGnLn2', 'penjual', NULL, NULL, '2024-01-13 05:10:11', '2024-01-13 05:10:11', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `barangs_slug_unique` (`slug`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carousel_id_penjual_foreign` (`id_penjual`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_id_users_foreign` (`id_users`);

--
-- Indexes for table `profile_admin`
--
ALTER TABLE `profile_admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_admin_id_users_foreign` (`id_users`);

--
-- Indexes for table `profile_penjual`
--
ALTER TABLE `profile_penjual`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_penjual_id_users_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile_admin`
--
ALTER TABLE `profile_admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile_penjual`
--
ALTER TABLE `profile_penjual`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carousel`
--
ALTER TABLE `carousel`
  ADD CONSTRAINT `carousel_id_penjual_foreign` FOREIGN KEY (`id_penjual`) REFERENCES `profile_penjual` (`id`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);

--
-- Constraints for table `profile_admin`
--
ALTER TABLE `profile_admin`
  ADD CONSTRAINT `profile_admin_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);

--
-- Constraints for table `profile_penjual`
--
ALTER TABLE `profile_penjual`
  ADD CONSTRAINT `profile_penjual_id_users_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
