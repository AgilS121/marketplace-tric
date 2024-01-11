-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2024 pada 08.33
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

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
-- Struktur dari tabel `barangs`
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
-- Dumping data untuk tabel `barangs`
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
(14, 'eratretrfgf', 6000, 1, 1, 'default.jpg', 'cobaadfad', 'asddsasad', '2024-01-10 18:15:42', '2024-01-10 11:15:42', '2024-01-10 11:15:42'),
(15, 's', 9000, 1, 1, 'default.jpg', 'Mencobada', 'adfa', '2024-01-10 18:16:41', '2024-01-10 11:16:41', '2024-01-10 11:16:41'),
(16, 'eratretr', 60000, 1, 1, 'default.jpg', 'coball', 'l;kjhcnm', '2024-01-10 18:18:06', '2024-01-10 11:18:06', '2024-01-10 11:18:06'),
(17, 'eratretr', 60000, 1, 1, 'default.jpg', 'adfadffa', 'adfadf', '2024-01-10 18:18:33', '2024-01-10 11:18:33', '2024-01-10 11:18:33'),
(18, 'eratretrfgf', 60000, 1, 1, 'default.jpg', 'cobaadfaa', 'dsfadfddsad', '2024-01-10 18:21:04', '2024-01-10 11:21:04', '2024-01-10 11:21:04'),
(19, 'eratretrfgfdsf', 8000, 1, 1, 'default.jpg', 'cobaadfadsaf', 'adfad', '2024-01-10 18:22:12', '2024-01-10 11:22:12', '2024-01-10 11:22:12'),
(20, 'eratretrfgf', 6000, 1, 1, 'default.jpg', 'Mencoballll', 'oiuiugfh', '2024-01-10 18:25:24', '2024-01-10 11:25:24', '2024-01-10 11:25:24'),
(21, 'eratretr', 6000, 1, 1, 'default.jpg', 'Mencobadsa', 'dafad', '2024-01-10 18:30:16', '2024-01-10 11:30:16', '2024-01-10 11:30:16'),
(22, 'eratretr', 6000, 1, 1, 'default.jpg', 'Mencobadsalpkpl;', 'dafad', '2024-01-10 18:32:54', '2024-01-10 11:32:54', '2024-01-10 11:32:54'),
(23, 'eratretr', 6000, 1, 1, 'default.jpg', 'Mencobadsalpkpl;asdAA', 'dafad', '2024-01-10 18:40:47', '2024-01-10 11:40:47', '2024-01-10 11:40:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Umum', 'umum', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
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
(9, '2023_12_07_083637_create_barangs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `posts`
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
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Admin', 'maryadi.ade', 'admin@admin', '2024-01-10 08:47:12', '$2y$12$Cvuu.dGEXoHeZhKUCw11a.7quJRraIvZiJSBv04QQkETDevwXCIb6', '5k0Wa4u66z', '2024-01-10 08:47:13', '2024-01-10 08:47:13', 0),
(2, 'agil', 'agil', 'agil@gmail.com', '2024-01-10 17:40:11', 'agil', 'agil', NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `barangs_slug_unique` (`slug`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
