-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 18, 2023 at 11:17 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rashionP`
--

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
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `foods_name` varchar(125) NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_01_124715_create_widows_table', 1),
(6, '2023_10_06_193233_create_shopkeepers_table', 1),
(7, '2023_10_10_174710_create_items_table', 1),
(8, '2023_10_28_154153_create_rashans_table', 1);

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
-- Table structure for table `rashans`
--

CREATE TABLE `rashans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `widows_id` bigint(20) UNSIGNED NOT NULL,
  `shopkeepers_id` bigint(20) UNSIGNED NOT NULL,
  `items_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shopkeepers`
--

CREATE TABLE `shopkeepers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `shopkeeper_name` varchar(30) NOT NULL,
  `shop_name` varchar(25) NOT NULL,
  `shopkeeper_contact` int(11) NOT NULL,
  `shopkeeper_email` varchar(30) NOT NULL,
  `shopkeeper_district` varchar(20) NOT NULL,
  `shopkeeper_tehsil` varchar(20) NOT NULL,
  `shopkeeper_village` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shopkeepers`
--

INSERT INTO `shopkeepers` (`id`, `user_id`, `shopkeeper_name`, `shop_name`, `shopkeeper_contact`, `shopkeeper_email`, `shopkeeper_district`, `shopkeeper_tehsil`, `shopkeeper_village`, `created_at`, `updated_at`) VALUES
(4, 19, 'fawad ali', 'sda', 2, '2', 'sda', 'sda', 'das', '2023-11-18 03:42:05', '2023-11-18 03:42:05'),
(5, 22, 'f', 'sda', 2, 'fawad@s', 'sda', 'sda', 'das', '2023-11-18 04:06:39', '2023-11-18 04:06:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'fawad ali', 'widow@gmail.com', NULL, '$2y$10$qDBudk0gZmMGJ4CLcDCWQOEM37i.TeAoBalvwleYfXiCFrvw.m7bm', 'widow', NULL, '2023-11-15 16:52:15', '2023-11-15 16:52:15'),
(2, 'fawad ali', 'shop1@gmail.com', NULL, '$2y$10$cTKxzsHQK.iXcilsUmxPnuWj9wbJEebl7eEFZW5rcyOQNVLjiIv62', 'shop', NULL, '2023-11-15 16:55:55', '2023-11-15 16:55:55'),
(3, 'fawad ali', 'shop1@gmail.coma', NULL, '$2y$10$J3Q6gkJD1QLoDT7Y.Tk0We1BB2WjX/jpYNn6OpcYUmhZtmZkSr32.', 'shop', NULL, '2023-11-15 17:02:41', '2023-11-15 17:02:41'),
(4, 'fawad ali', 'widow@gmail.coms', NULL, '$2y$10$I21I9o6SXu16Ks.tl/qEoOm/5mP8F47B5cDQsVExQgtyCmPOa0sJu', 'widow', NULL, '2023-11-15 17:09:25', '2023-11-15 17:09:25'),
(5, 'fawad ali', 'shop1@gmail.comas', NULL, '$2y$10$ZIQRypZHRBXEBz/2MRdqHey7SQ99jBOcTlZXbDHIm/tfvtw2idFJK', 'shop', NULL, '2023-11-15 17:09:35', '2023-11-15 17:09:35'),
(7, 'as updated', 'widow@gmail.comss', NULL, '$2y$10$PH.LoRY8rLRKLH7XZnq6kOwY.kPzuAHshS5Oa1Yh96VisiJKD/oTK', 'widow', NULL, '2023-11-18 01:27:04', '2023-11-18 01:27:04'),
(8, 'as updated', 'widow@gmail.comssfawad', NULL, '$2y$10$uyv7PLqeTHSUim0zYZxS/.lPFVci8vPgx4h79rMucjdAq8q1h3kIa', 'widow', NULL, '2023-11-18 01:27:28', '2023-11-18 01:27:28'),
(9, 'as updated', 'widow@gmail.comssfawadss', NULL, '$2y$10$pTMql720/7uGDgcDw3PnJO3rMUGXk8aDsgT6nM9FHgFnnk/L4n9F6', 'widow', NULL, '2023-11-18 01:28:38', '2023-11-18 01:28:38'),
(11, 'as updated', 'widow@gmail.comssfawadsss', NULL, '$2y$10$z0OTrzSuK5sR9PNMG/juBeQdDlAaW564wnIa89zL7jidVJNTZMDKq', 'widow', NULL, '2023-11-18 03:25:53', '2023-11-18 03:25:53'),
(12, 'as updated', 'widow@gmail.comssfawadssss', NULL, '$2y$10$EbElQgmQTzC6zmFC82SmBeUx8T4m2hdhPYuggiNZ9GIY/njnNHpGa', 'widow', NULL, '2023-11-18 03:26:24', '2023-11-18 03:26:24'),
(13, 'as updated', 'widow@gmail.comssfawadsssss', NULL, '$2y$10$30EgLaQrSLLXDzqRiUxS..qJRmnPEBMF3oYvey7sjdAsyoNm/qnNq', 'widow', NULL, '2023-11-18 03:27:02', '2023-11-18 03:27:02'),
(14, 'as updated', 'widow@gmail.s', NULL, '$2y$10$JeWz9jyw6VaX0Dm2JmNTR.1NInoyzz2WbUj7.C4zFwKawSZcAI.Fq', 'widow', NULL, '2023-11-18 03:28:18', '2023-11-18 03:28:18'),
(16, 'as updated', 'widow@gmail.ss', NULL, '$2y$10$bkpEdKsO.nref6IgufOtQOLqmHLSwFYT0Ej7eppLCct4i8.U2OBeO', 'widow', NULL, '2023-11-18 03:40:01', '2023-11-18 03:40:01'),
(17, 'fawad ali', 'shop1@gmail.comass', NULL, '$2y$10$LC183Eh6K09zoKrdylSKZ.m0.5XJpdjHVdyNb8rbtuzPI5vgYrGl2', 'shop', NULL, '2023-11-18 03:40:57', '2023-11-18 03:40:57'),
(18, 'fawad ali', 'shop1@gmail.comasss', NULL, '$2y$10$wTEBmcD0YH2wcW0oWBHHZeW.B0bBoNxjlZCtcaUMTmp9WOYakdDP2', 'shop', NULL, '2023-11-18 03:41:22', '2023-11-18 03:41:22'),
(19, 'fawad ali', 'shop1@gmail.comassss', NULL, '$2y$10$c2QlFhNSjP/3ObfoZSBkjeP2VjHgZmUeHDWx5ibogN6v9JLoHBLHe', 'shop', NULL, '2023-11-18 03:42:05', '2023-11-18 03:42:05'),
(20, 'f', 'fawad@', NULL, '$2y$10$sypFVCbQqkhNI1K/gkzJW.iBDDk.r5iEAe1F1qRjAEGkUqK2N4ISa', 'shop', NULL, '2023-11-18 04:06:03', '2023-11-18 04:06:03'),
(22, 'f', 'fawad@s', NULL, '$2y$10$aS8X8/cmwlBP0tnj2nDWluyOR5iR/UsZpsOT7neovbZn1WOJpIhau', 'shop', NULL, '2023-11-18 04:06:39', '2023-11-18 04:06:39');

-- --------------------------------------------------------

--
-- Table structure for table `widows`
--

CREATE TABLE `widows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `widow_name` varchar(30) NOT NULL,
  `husband_name` varchar(30) NOT NULL,
  `widow_contact` int(11) NOT NULL,
  `widow_nic` int(11) NOT NULL,
  `husband_nic` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Certificate` varchar(255) NOT NULL,
  `affidavit` varchar(255) NOT NULL,
  `guardian_name` varchar(30) NOT NULL,
  `relationship` varchar(30) NOT NULL,
  `guardian_contact` int(11) NOT NULL,
  `kids` varchar(255) NOT NULL,
  `form_b` varchar(255) NOT NULL,
  `widow_district` varchar(20) NOT NULL,
  `widow_tehsil` varchar(20) NOT NULL,
  `widow_village` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `widows`
--

INSERT INTO `widows` (`id`, `user_id`, `widow_name`, `husband_name`, `widow_contact`, `widow_nic`, `husband_nic`, `email`, `Certificate`, `affidavit`, `guardian_name`, `relationship`, `guardian_contact`, `kids`, `form_b`, `widow_district`, `widow_tehsil`, `widow_village`, `created_at`, `updated_at`) VALUES
(5, 14, 'as updated', 'ss', 3, 3, 3, 'widow@gmail.s', 'http://127.0.0.1:8000/widows/1700296098_certificate.jpg', 'http://127.0.0.1:8000/widows/1700296098_affidavit.jpg', 's', 's', 3, 's', 'http://127.0.0.1:8000/widows/1700296098_form_b.jpg', 's', 's', 's', '2023-11-18 03:28:18', '2023-11-18 03:28:18'),
(6, 16, 'as updated', 'ss', 3, 3, 3, 'widow@gmail.ss', 'http://127.0.0.1:8000/widows/1700296801_certificate.jpg', 'http://127.0.0.1:8000/widows/1700296801_affidavit.jpg', 's', 's', 3, 's', 'http://127.0.0.1:8000/widows/1700296801_form_b.jpg', 's', 's', 's', '2023-11-18 03:40:01', '2023-11-18 03:40:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rashans`
--
ALTER TABLE `rashans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rashans_widows_id_foreign` (`widows_id`),
  ADD KEY `rashans_shopkeepers_id_foreign` (`shopkeepers_id`),
  ADD KEY `rashans_items_id_foreign` (`items_id`);

--
-- Indexes for table `shopkeepers`
--
ALTER TABLE `shopkeepers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `widows`
--
ALTER TABLE `widows`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rashans`
--
ALTER TABLE `rashans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shopkeepers`
--
ALTER TABLE `shopkeepers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `widows`
--
ALTER TABLE `widows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rashans`
--
ALTER TABLE `rashans`
  ADD CONSTRAINT `rashans_items_id_foreign` FOREIGN KEY (`items_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `rashans_shopkeepers_id_foreign` FOREIGN KEY (`shopkeepers_id`) REFERENCES `shopkeepers` (`id`),
  ADD CONSTRAINT `rashans_widows_id_foreign` FOREIGN KEY (`widows_id`) REFERENCES `widows` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
