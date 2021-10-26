-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 25, 2021 at 11:59 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contest`
--

-- --------------------------------------------------------

--
-- Table structure for table `contests`
--

CREATE TABLE `contests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL COMMENT '1="active",0="Inactive"',
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contests`
--

INSERT INTO `contests` (`id`, `code`, `name`, `topic_id`, `image`, `description`, `status`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(10, 'Pro6174fdc3c9be0', 'Web desgin Competition', '22', '1635057091.DSC_0105-scaled-2560x1280.jpg', '<p>This is a competition about programming.</p>', 1, '2021-10-15', '2021-10-14', '2021-10-24 00:31:31', '2021-10-24 00:31:31'),
(11, 'Com6174fedc740dc', 'Competitive Programming', '24', '1635057372.psukTemplate.jpg', '<p>This is a competitive programming Competition</p>', 1, '2021-10-26', '2021-10-07', '2021-10-24 00:36:12', '2021-10-24 00:36:12'),
(12, 'COM874346', 'Essay Writting', '24', '1635058722.rihan.jpg', '<p>In this post, i will give you two example where you can generate 4, 6, 8, 10 digit random number with laravel and you can learn how to generate random unique number in laravel. you can also use this example with laravel 6, laravel 7 and laravel 8 version.</p>', 1, '2021-10-14', '2021-10-29', '2021-10-24 00:58:42', '2021-10-24 00:58:42'),
(13, 'FAS402937', 'C3 Techno Fashion', '25', '1635074785.83-50677-kameez-kurtis-sadakalo-pvt-limited-103091-1-crop-c0-5__0-5-400x500-70.jpg', '<p>Fashion is a&nbsp;<strong>form of self-expression and autonomy at a particular period and place</strong>&nbsp;and in a specific context, of clothing, footwear, lifestyle, accessories, makeup, hairstyle, and body posture. The term implies a look defined by the fashion industry as that which is trending.</p>', 1, '2021-10-24', '2021-11-24', '2021-10-24 05:26:25', '2021-10-24 05:26:25');

-- --------------------------------------------------------

--
-- Table structure for table `contest_results`
--

CREATE TABLE `contest_results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contest_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contest_results`
--

INSERT INTO `contest_results` (`id`, `contest_id`, `user_id`, `file`, `notes`, `created_at`, `updated_at`) VALUES
(1, 4, 2, '1634976759.fff-logo.png', 'dsfsdf', '2021-10-23 02:12:39', '2021-10-23 02:12:39'),
(3, 4, 2, '1634976759.fff-logo.png', 'dsfsdf', '2021-10-23 02:12:39', '2021-10-23 02:12:39'),
(4, 2, 2, '1634983134.atech-shikkha-logo.png', 'cdasd', '2021-10-23 03:58:54', '2021-10-23 03:58:54'),
(5, 6, 2, '1634983150.atech-shikkha-logo.png', 'asdasd', '2021-10-23 03:59:10', '2021-10-23 03:59:10'),
(6, 4, 2, '1634986241.fantasy-sky_90839-278.jpg', 'fds', '2021-10-23 04:50:41', '2021-10-23 04:50:41'),
(7, 12, 2, '1635064166.Wavy_Trv-02_Single-09.jpg', 'Hello I did contest but i was sick and thats why i cannot give my exam properly', '2021-10-24 02:29:26', '2021-10-24 02:29:26'),
(8, 11, 2, '1635071368.fantasy-sky_90839-278.jpg', 'dasd', '2021-10-24 04:29:28', '2021-10-24 04:29:28'),
(9, 13, 3, '1635075096.2014-51517-necklaces-pinks-crafts-104735-1-crop-c0-5__0-5-400x500-70.jpg', 'Helloo I just want to percipated this', '2021-10-24 05:31:36', '2021-10-24 05:31:36');

-- --------------------------------------------------------

--
-- Table structure for table `contest_winners`
--

CREATE TABLE `contest_winners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contest_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `winning_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `winning_position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contest_winners`
--

INSERT INTO `contest_winners` (`id`, `contest_id`, `user_id`, `winning_price`, `winning_position`, `message`, `created_at`, `updated_at`) VALUES
(1, 12, 2, 'asd', '2', NULL, '2021-10-24 03:11:36', '2021-10-24 03:11:36'),
(2, 12, 2, 'sdasdad', '2', 'asdasdasdasd', '2021-10-24 03:56:21', '2021-10-24 03:56:21'),
(3, 13, 3, 'asd', '1', 'sa', '2021-10-24 23:51:55', '2021-10-24 23:51:55');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(6, '2021_10_20_090817_create_topics_table', 2),
(7, '2021_10_20_162403_create_contests_table', 3),
(8, '2021_10_23_070252_create_contest_results_table', 4),
(9, '2021_10_23_173237_create_contest_winners_table', 5);

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL COMMENT '1="active",2="Inactive"',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(22, 'Programming', '<p>Programming Category</p>', 1, '2021-10-24 00:26:23', '2021-10-24 00:26:23'),
(23, 'Electronics', '<p>Electronics Category</p>', 1, '2021-10-24 00:26:57', '2021-10-24 00:26:57'),
(24, 'Competiton', '<p>Competition category</p>', 1, '2021-10-24 00:28:08', '2021-10-24 00:28:08'),
(25, 'Fashion', '<p>This is a fashion Topic category</p>', 1, '2021-10-24 05:24:30', '2021-10-24 05:24:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT '0' COMMENT '0=User 1= Admin',
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '0=Active 1=Inactive',
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_type`, `status`, `phone`, `district`, `address`, `image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', 1, 1, '', '', '', NULL, NULL, '$2y$10$pS53W8/tDRtgTzzInwW28.TB.U6MbhCzrwVbGu5pGfWUCoPDltBOi', NULL, '2021-10-20 23:33:35', '2021-10-20 23:33:35'),
(2, 'Rakib', 'rakib10ms@gmail.com', 0, 1, '', '', '', NULL, NULL, '$2y$10$y4mKcygEgeM8qmjJP2yrY.Q66wz3r4VLF21UtyUDTjG2CxnbKcn82', NULL, '2021-10-21 02:48:05', '2021-10-24 23:35:45'),
(3, 'Ratul', 'ratul@gmail.com', 0, 1, '01312275802', '', 'Dhaka, Dhaka', NULL, NULL, '$2y$10$XBGkkIlS25ZD1iVJsBJ3pe9ZT/zYnOWRL2GKP2emj9ZqumTBLk1Fm', NULL, '2021-10-22 10:08:34', '2021-10-24 22:10:53'),
(4, 'Shisir', 'developer.acquaint@gmail.com', 0, 1, '01787045190', 'Dinazpur', 'Dhaka,Mohammadpur', NULL, NULL, '$2y$10$gq26p0at0/lgMhnDOJFtL.GeiKMCoG.9VSv57YAkYolgc1yCySJ8a', NULL, '2021-10-25 00:37:08', '2021-10-25 00:37:08'),
(5, 'testing', 'test@gmail.com', 0, 1, '0165487577', 'Dhaka', 'Rupa tola,Dhaka', NULL, NULL, '$2y$10$8HByOvzxJiPhIe15MUOy7uWaYZ/dKImuuuRTKC1LmXZSBxPLSAm.m', NULL, '2021-10-25 00:39:58', '2021-10-25 00:39:58'),
(6, 'check3sdsa', 'check1@gmail.com', 0, 1, '11111111111', 'Dhakas', 'Dhakas', NULL, NULL, '$2y$10$Be.x/WacdcXLR369cU7f4epgnkfPvI/EXJEoRpGb8yk5VtCLDXy4m', NULL, '2021-10-25 00:43:04', '2021-10-25 03:33:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contests`
--
ALTER TABLE `contests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contest_results`
--
ALTER TABLE `contest_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contest_winners`
--
ALTER TABLE `contest_winners`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
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
-- AUTO_INCREMENT for table `contests`
--
ALTER TABLE `contests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contest_results`
--
ALTER TABLE `contest_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contest_winners`
--
ALTER TABLE `contest_winners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
