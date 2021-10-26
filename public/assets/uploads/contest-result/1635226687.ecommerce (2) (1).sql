-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2021 at 11:43 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `best_products`
--

CREATE TABLE `best_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `on_sale` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=negative,1=Positive',
  `best_seller` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=negative,1=Positive',
  `top_viewed` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=negative,1=Positive',
  `meta_tittle` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `best_products`
--

INSERT INTO `best_products` (`id`, `name`, `slug`, `small_description`, `description`, `original_price`, `selling_price`, `image`, `qty`, `tax`, `on_sale`, `best_seller`, `top_viewed`, `meta_tittle`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'sdas', 'dsa', 'asdas', 'asdasd', '200', '400', 'dasd.jpg', '20', '5', 1, 0, 0, 'asdas', 'asdasd', '', NULL, NULL),
(2, 'Hashda', 'asdasd', 'asdasd', 'asdasd', '1200', '1000', '1633949535.5135-44913-kabli-set-ethnic-91729-1-crop-c0-5__0-5-400x500-70.jpg', '15', '2', 0, 1, 0, 'sadas', 'asdasd', 'asdasd', '2021-10-11 04:52:15', '2021-10-11 04:52:15'),
(3, 'qweqwe', 'qweqwe', 'qeqweq', 'qweqw', '1650', '800', '1633950361.94-36003-kids-panjabi-kay-kraft-74491-1-crop-c0-5__0-5-400x500-70.jpg', '6', '4', 0, 0, 1, 'sdasd', 'asdas', 'asdasd', '2021-10-11 05:06:01', '2021-10-11 05:06:01'),
(4, 'tyrty', 'yrtyrt', 'rtyrtyr', 'yrtyrt', '2000', '1800', '1633950847.94-36612-shirts-fatua-kay-kraft-75703-1-crop-c0-5__0-5-400x500-70.jpg', '10', '70', 1, 0, 0, 'sdfsd', 'fewfd', 'cfsdfcsd', '2021-10-11 05:14:07', '2021-10-11 05:14:07'),
(6, 'rfsd', 'sdfsd', 'sdfsdf', 'sdfsd', '1400', '1100', '1633950928.6532-17492-casual-shirt-party-wear-multi-color-amyclore-37225-2-crop-c0-5__0-5-400x500-70.jpg', '10', '7', 1, 0, 0, 'hsdf', 'sdfsd', 'fsdfs', '2021-10-11 05:15:28', '2021-10-11 05:15:28'),
(7, 'Ahsaihsdhab', 'asdasdas', 'asdasdasd', 'sadasdasd', '1500', '1200', '1633952045.3577-17336-capes-black-qrius-36874-2-crop-c0-5__0-5-400x500-70.jpg', '15', '10', 1, 0, 0, 'asda', 'asdas', 'asddasdas', '2021-10-11 05:34:05', '2021-10-11 05:34:05'),
(8, 'dgbscb', 'csdcsc', 'csdcsdcs', 'sdcsdcsdcs', '1500', '1200', '1633952108.83-50681-kameez-kurtis-sadakalo-pvt-limited-103088-1-crop-c0-5__0-5-400x500-70.jpg', '10', '5', 0, 1, 1, 'dfsd', 'sdfsdf', 'ertgerte', '2021-10-11 05:35:08', '2021-10-11 05:35:08');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `popular` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `popular`, `image`, `meta_tittle`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(25, 'Pants', 'pants', 'Mens Exclusive pents collection here', 1, 1, '1633696245.photo-1473966968600-fa801b869a1a.jpg', 'Men exclusive pants collection here.', 'Mens Exclusive pents collection here', 'pents,man pents', '2021-10-08 06:30:45', '2021-10-08 06:30:45'),
(26, 'Suit', 'Suit', 'Exclusive suit collection here', 1, 1, '1633696374.photo-1472417583565-62e7bdeda490.jpg', 'Exclusive suit collection here', 'Exclusive suit collection here', 'suit,man\'s,suit,', '2021-10-08 06:32:54', '2021-10-08 06:32:54'),
(27, 'T-shirt', 'tshirt', 'T-shirt exclusive collection here', 1, 1, '1633936772.9352-51798-t-shirt-monadic-105305-1-crop-c0-5__0-5-400x500-70.jpg', 'T-shirt', 'T-shirt exclusive collection here', 'T-shirt,tshirt', '2021-10-11 01:19:32', '2021-10-11 01:19:32'),
(28, 'Panjabi', 'panjabi', 'Panjabi exclusive collection  here', 1, 1, '1633940810.1177-51559-kids-panjabi-kabli-set-anjan-s-104845-1-crop-c0-5__0-5-400x500-70.jpg', 'Panjabi exclusive collection  here', 'Panjabi exclusive collection  here', 'Panjabi ,men\'s panjabi', '2021-10-11 02:26:50', '2021-10-11 02:26:50');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'wqd', 'rakib10ms@gmail.com', '0165487577', 'asda', 'gerrrg', '2021-10-10 22:16:18', '2021-10-10 22:16:18'),
(2, 'wqd', 'rakib10ms@gmail.com', '0165487577', 'asda', 'gerrrg', '2021-10-10 22:19:41', '2021-10-10 22:19:41'),
(3, 'Rakib Hossain', 'rakib10ms@gmail.com', '01312275802', 'Website Build', 'Your corporate message consists of who you are, what you are selling and what differentiates you from your competitors. It is communicated to your target audience, the people who are going to purchase your product or service via many different avenues', '2021-10-10 22:29:49', '2021-10-10 22:29:49'),
(4, 'Rayhan', 'rayhan@gmail.com', '0165487577', 'Testing Purpose', 'Your corporate message consists of who you are, what you are selling and what differentiates you from your competitors. It is communicated to your target audience, the people who are going to purchase your product or service via many different avenues', '2021-10-10 22:30:46', '2021-10-10 22:30:46'),
(5, 'e', 'farhanrakib@gmail.com', '0165487577', 'e', 'we', '2021-10-10 22:56:38', '2021-10-10 22:56:38'),
(6, 'wqdqw', 'asdas@gmail.com', '536785637867', 'sada', '7863786378edfqwe', '2021-10-10 23:02:09', '2021-10-10 23:02:09'),
(7, 'admin', 'ABC@ABC.com', '01222322544', 'asdas', 'asdsadas', '2021-10-11 00:45:23', '2021-10-11 00:45:23');

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
-- Table structure for table `hot_items`
--

CREATE TABLE `hot_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 3 COMMENT '1=hot,2=new,3=not',
  `meta_tittle` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hot_items`
--

INSERT INTO `hot_items` (`id`, `name`, `slug`, `small_description`, `description`, `original_price`, `selling_price`, `image`, `qty`, `tax`, `status`, `meta_tittle`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(2, 'frf', 'werwe', 'werwer', 'werwer', '1200', '1000', '1634032543.1.2_aaFKWKA-crop-c0-5__0-5-400x500-70.jpg', '10', '15', 2, 'werwer', 'werwer', 'werwer', '2021-10-12 03:55:43', '2021-10-12 03:55:43'),
(3, 'gdsasda', 'asdasda', 'asdwdqw', 'asdqwdasd', '1500', '1100', '1634032834.1182-24152-sports-collection-green-red-sports-sportz-design-52080-1-crop-c0-5__0-5-400x500-70.jpg', '10', '5', 2, 'fsdfsd', 'efwer', 'sdfsdf', '2021-10-12 04:00:34', '2021-10-12 04:00:34'),
(4, 'wqdda', 'asdasd', 'asdwewe', 'ewfwefdw', '1400', '1000', '1634032881.3577-53803-panjabi-qrius-109208-1-crop-c0-5__0-5-400x500-70.jpg', '10', '5', 2, 'rtg', 'dfgdf', 'etrt', '2021-10-12 04:01:21', '2021-10-12 04:01:21'),
(5, 'asdasdas', 'asdasdas', 'asdasda', 'asdasdasd', '1050', '900', '1634036437.94-52875-kameez-kurtis-kay-kraft-107463-2-crop-c0-5__0-5-400x500-70.jpg', '10', '5', 3, 'tyrt', 'rtyrtyr', 'yrtyrt', '2021-10-12 05:00:37', '2021-10-12 05:00:37'),
(6, 'rrwerwe', 'dfsdfwe', 'sefwerfwe', 'dsfwefw', '1020', '1000', '1634036475.1161-47719-shirts-fatua-sara-lifestyle-ltd-97955-1-crop-c0-5__0-5-400x500-70.jpg', '4', '5', 1, 'dsfsdfs', 'dsfsdf', 'sdfsefwe', '2021-10-12 05:01:15', '2021-10-12 05:01:15');

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
(5, '2021_10_04_052542_create_categories_table', 2),
(6, '2021_10_06_041012_create_products_table', 3),
(7, '2021_10_10_060514_create_subscribers_table', 4),
(8, '2021_10_11_035415_create_contacts_table', 5),
(9, '2021_10_11_093214_create_best_products_table', 6),
(10, '2021_10_12_085351_create_hot_items_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('rakib10ms@gmail.com', '$2y$10$6gSxeVnaSnJrQbRIrMRaUOXHoyPByXKE0xJy5YSDrIKEv3bb/dZfG', '2021-10-07 09:25:05'),
('rayhan@gmail.com', '$2y$10$XNuXPxQ/WOGAE1UF8oVLTuwTrH7WfOKyT2iL88xEaNrPNxyECVjR2', '2021-10-10 22:59:24');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cate_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `trending` tinyint(4) NOT NULL,
  `meta_tittle` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cate_id`, `name`, `slug`, `small_description`, `description`, `original_price`, `selling_price`, `image`, `qty`, `tax`, `status`, `trending`, `meta_tittle`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(13, 24, 'easy', 'easy', 'exclusive shirt collection here', 'exclusive shirt collection here', '1800', '1500', '1633754708.shop-list8.jpg', '10', '12', 1, 1, 'exclusive shirt collection here', 'exclusive shirt collection here', 'exclusive shirt collection here', '2021-10-08 22:45:08', '2021-10-08 22:45:08'),
(15, 24, 'Grammen Uniqlo', 'Grammen Uniqlo', 'Grammen Uniqlo exclusive here', 'Grammen Uniqlo exclusive here', '2100', '1400', '1633758903.shop-list9.jpg', '20', '2', 1, 1, 'Grammen Uniqlo', 'Grammen Uniqlo,shirts', 'Grammen Uniqlo exclusive here', '2021-10-08 23:55:03', '2021-10-08 23:55:03'),
(17, 27, 'B1', 'B1', 'B1 exclusive t-shirt here', 'B1 exclusive t-shirt here', '1200', '1000', '1633937639.74-30602-t-shirt-kef-63447-1-crop-c0-5__0-5-400x500-70.jpg', '5', '2', 1, 1, 'B1 exclusive t-shirt here', 'B1 exclusive t-shirt here', 'B1 exclusive t-shirt here', '2021-10-11 01:33:59', '2021-10-11 01:33:59'),
(18, 28, 'C3 Panjabi', 'C3 Panjabi', 'C3 Panjabi exclusive collection here', 'C3 Panjabi exclusive collection here', '2200', '1700', '1633940918.3669-35717-panjabi-enlive-73857-1-crop-c0-5__0-5-400x500-70.jpg', '30', '10', 1, 1, 'C3 Panjabi', 'C3 Panjabi ,panjabi , men\'s panjabi', 'C3 Panjabi exclusive collection here', '2021-10-11 02:28:38', '2021-10-11 02:28:38'),
(19, 27, 'sdf', 'sdfds', 'sdfsdfsd', 'sdfsfsd', '1500', '1200', '1633941192.20899-35333-t-shirt-tekkaa-73087-1-crop-c0-5__0-5-400x500-70.jpg', '15', '2', 1, 1, 'dsfsd', 'sdfsdfs', 'sdfsdfsdf', '2021-10-11 02:33:12', '2021-10-11 02:33:12'),
(20, 25, 'dsefsd', 'ewrwe', NULL, 'werwerwe', '1400', '1000', '1633941240.2924-46537-trousers-joggers-swagger-urban-wear-store-95627-1-crop-c0-5__0-5-400x500-70.jpg', '15', '10', 1, 1, 'werwerwe', 'werwerwe', 'werwerweew', '2021-10-11 02:34:00', '2021-10-11 02:34:00'),
(21, 25, 'dfsd', 'dsfdsf', 'fedfsewe', 'efwef', '1500', '1200', '1633941333.21094-48560-jeans-chinos-deen-99618-1-crop-c0-5__0-5-400x500-70.jpg', '15', '5', 1, 1, 'asd', 'dfsdf', 'sdfsd', '2021-10-11 02:35:33', '2021-10-11 02:35:33'),
(22, 27, 'ewqw', 'ewrweew', 'asda', 'sdasdqwdqew', '1200', '1000', '1633941429.RTMSSPP_1001-Maroon.2-crop-c0-5__0-5-400x500-70.jpg', '10', '5', 1, 1, 'ewds', 'sadasd', 'asdasd', '2021-10-11 02:37:09', '2021-10-11 02:37:09');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'rakib10ms@gmail.com', '2021-10-10 00:18:23', '2021-10-10 00:18:23'),
(2, 'rayhan@gmail.com', '2021-10-10 00:19:42', '2021-10-10 00:19:42'),
(4, 'ratul@gmail.com', '2021-10-10 01:12:11', '2021-10-10 01:12:11'),
(5, 'ss@gmail.com', '2021-10-10 01:15:25', '2021-10-10 01:15:25'),
(6, 'asa@gmail.com', '2021-10-10 01:16:42', '2021-10-10 01:16:42'),
(7, 'wedqwe@gmail.com', '2021-10-10 02:21:51', '2021-10-10 02:21:51'),
(9, 'rakib10wms@gmail.com', '2021-10-10 02:27:41', '2021-10-10 02:27:41'),
(10, 'r@gmail.com', '2021-10-10 02:28:14', '2021-10-10 02:28:14'),
(11, 'tsss@gmail.com', '2021-10-10 02:34:08', '2021-10-10 02:34:08'),
(12, 'sads@gmail.com', '2021-10-10 02:35:01', '2021-10-10 02:35:01'),
(13, 'asdasd23@gmail.com', '2021-10-10 02:35:29', '2021-10-10 02:35:29'),
(14, 'sasa@gmail.com', '2021-10-10 02:36:11', '2021-10-10 02:36:11'),
(15, 'tryh@gmail.com', '2021-10-11 01:00:03', '2021-10-11 01:00:03'),
(16, 'asdas@gmail.com', '2021-10-11 01:02:26', '2021-10-11 01:02:26'),
(17, 'sdawsd@gmail.com', '2021-10-11 01:04:27', '2021-10-11 01:04:27'),
(18, 'wsqweq@gmail.com', '2021-10-11 01:04:44', '2021-10-11 01:04:44'),
(19, 'rashedraj94@gmail.com', '2021-10-12 05:31:39', '2021-10-12 05:31:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_as`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rakib Hossain', 'rakib10ms@gmail.com', NULL, '$2y$10$uuKLAJtRMZBtXzJw0biJzejrfbRaiqMlWC8AiH1xZYC0rDC2cGo0i', 1, 'vZHp8mcSAEK152yM7zCXFi3YYZ0cQNK6BqDUfjxuouv9ZCnD2Aa9FyX7azLx', '2021-10-03 00:56:57', '2021-10-03 00:56:57'),
(2, 'Rayhan H', 'rayhan@gmail.com', NULL, '$2y$10$J/vMGkLHnM13yybGGcRP2OXsurdwMSCge5Bu/Ue6n1GWFwOick5DG', 0, NULL, '2021-10-03 03:36:47', '2021-10-03 03:36:47'),
(3, 'asd', 'asd@asd.com', NULL, '$2y$10$bjDtnjtsMPqeBm/kqGVcGuF.69IBVvWHkqNc7pe7NcM3sn/wjNw/2', 0, NULL, '2021-10-09 00:52:00', '2021-10-09 00:52:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `best_products`
--
ALTER TABLE `best_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hot_items`
--
ALTER TABLE `hot_items`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribers_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `best_products`
--
ALTER TABLE `best_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hot_items`
--
ALTER TABLE `hot_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
