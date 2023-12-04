-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 11:25 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masterpeacee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `img` text DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productId` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `userId` bigint(20) UNSIGNED NOT NULL,
  `total` double DEFAULT NULL,
  `sessionId` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `productId`, `quantity`, `userId`, `total`, `sessionId`, `created_at`, `updated_at`) VALUES
(66, 11, 1, 3, 270, NULL, '2023-11-15 20:08:27', '2023-11-15 20:08:27'),
(67, 13, 1, 3, 125, NULL, '2023-11-15 20:29:42', '2023-11-15 20:29:42'),
(127, 4, 4, 4, 200, NULL, '2023-12-04 05:55:00', '2023-12-04 05:55:00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `msg` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `msg`, `created_at`, `updated_at`) VALUES
(4, 'Husam aldeen odat', 'husamaldean.odat@gmail.com', 'hello', '2023-12-02 14:46:09', '2023-12-02 14:46:09'),
(5, 'Husam aldeen odat', 'husamaldean.odat@gmail.com', 'hhhhhillll', '2023-12-02 14:48:32', '2023-12-02 14:48:32'),
(6, 'Husam aldeen odat', 'husamaldean.odat@gmail.com', 'scacascasc', '2023-12-02 14:59:09', '2023-12-02 14:59:09'),
(7, 'Husam aldeen odat', 'husamaldean.odat@gmail.com', 'dvdsvsdv', '2023-12-02 15:00:46', '2023-12-02 15:00:46'),
(8, 'Husam aldeen odat', 'husamaldean.odat@gmail.com', 'bjkhbvjhvgj', '2023-12-02 16:35:20', '2023-12-02 16:35:20'),
(9, 'Husam aldeen odat', 'husamaldean.odat@gmail.com', 'KVBKHBVB', '2023-12-02 16:37:25', '2023-12-02 16:37:25'),
(10, NULL, 'husamaldean.odat@gmail.com', NULL, '2023-12-02 23:02:39', '2023-12-02 23:02:39'),
(11, NULL, 'husamaldean.odat@gmail.com', NULL, '2023-12-02 23:04:40', '2023-12-02 23:04:40'),
(12, NULL, 'husamaldean.odat@gmail.com', NULL, '2023-12-02 23:05:47', '2023-12-02 23:05:47');

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `discountPercent` double(8,2) NOT NULL DEFAULT 1.00,
  `active` int(11) NOT NULL,
  `img` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `end` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `name`, `description`, `discountPercent`, `active`, `img`, `created_at`, `updated_at`, `end`) VALUES
(1, 'Winter', 'Winter Sales', 0.10, 0, '20231025223056.jpg', '2023-10-25 19:30:56', '2023-10-25 19:30:56', NULL);

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
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
(1, '2014_10_12_000000_create_users_table copy', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_19_143625_create_products_table', 1),
(6, '2023_09_19_143625_create_user_addresses_table', 1),
(7, '2023_09_19_143625_create_user_payments_table', 1),
(8, '2023_09_19_143626_create_discounts_table', 1),
(9, '2023_09_19_143626_create_product_categories_table', 1),
(10, '2023_09_19_143626_create_product_inventories_table', 1),
(11, '2023_09_19_143627_create_order_products_table', 1),
(12, '2023_09_19_143627_create_orders_table', 1),
(13, '2023_09_19_143627_create_payments_table', 1),
(14, '2023_09_19_143627_create_reviews_table', 1),
(15, '2023_09_19_143628_create_shipments_table', 1),
(16, '2023_09_19_143628_create_wish_lists_table', 1),
(17, '2023_09_19_174535_create_session_carts_table', 1),
(18, '2023_09_19_174802_create_carts_table', 1),
(19, '2023_09_27_152733_create_admins_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` bigint(20) UNSIGNED NOT NULL,
  `total` double(8,2) NOT NULL,
  `paymentId` bigint(20) UNSIGNED NOT NULL,
  `shipmentId` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userId`, `total`, `paymentId`, `shipmentId`, `created_at`, `updated_at`) VALUES
(97, 12, 275.00, 143, 55, '2023-12-03 16:08:05', '2023-12-03 16:08:05'),
(98, 4, 572.00, 144, 56, '2023-12-04 05:32:45', '2023-12-04 05:32:45');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productId` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `orderId` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `productId`, `quantity`, `price`, `created_at`, `updated_at`, `orderId`) VALUES
(74, 2, 3, 20.00, '2023-11-06 15:50:49', '2023-11-06 15:50:49', 56),
(75, 3, 5, 40.00, '2023-11-06 15:50:49', '2023-11-06 15:50:49', 56),
(76, 2, 3, 20.00, '2023-11-06 16:26:41', '2023-11-06 16:26:41', 57),
(77, 3, 1, 40.00, '2023-11-06 16:26:41', '2023-11-06 16:26:41', 57),
(78, 4, 14, 50.00, '2023-11-29 15:06:07', '2023-11-29 15:06:07', 58),
(79, 10, 14, 250.00, '2023-11-29 15:06:07', '2023-11-29 15:06:07', 58),
(80, 3, 1, 40.00, '2023-11-30 10:55:10', '2023-11-30 10:55:10', 59),
(81, 4, 3, 50.00, '2023-12-01 10:57:57', '2023-12-01 10:57:57', 60),
(82, 12, 3, 310.00, '2023-12-01 10:57:57', '2023-12-01 10:57:57', 60),
(83, 9, 1, 250.00, '2023-12-01 10:57:57', '2023-12-01 10:57:57', 60),
(84, 4, 1, 50.00, '2023-12-01 14:06:44', '2023-12-01 14:06:44', 61),
(85, 8, 1, 210.00, '2023-12-01 14:06:44', '2023-12-01 14:06:44', 61),
(86, 10, 1, 250.00, '2023-12-01 14:06:44', '2023-12-01 14:06:44', 61),
(87, 10, 1, 250.00, '2023-12-01 20:06:45', '2023-12-01 20:06:45', 86),
(88, 12, 1, 310.00, '2023-12-01 20:06:45', '2023-12-01 20:06:45', 86),
(89, 12, 1, 310.00, '2023-12-01 20:08:32', '2023-12-01 20:08:32', 87),
(90, 6, 1, 185.00, '2023-12-01 20:08:32', '2023-12-01 20:08:32', 87),
(91, 6, 1, 185.00, '2023-12-01 20:37:07', '2023-12-01 20:37:07', 94),
(92, 10, 7, 250.00, '2023-12-01 20:37:07', '2023-12-01 20:37:07', 94),
(93, 10, 2, 250.00, '2023-12-02 22:46:39', '2023-12-02 22:46:39', 96),
(94, 12, 4, 310.00, '2023-12-02 22:46:39', '2023-12-02 22:46:39', 96),
(95, 10, 1, 250.00, '2023-12-03 16:08:05', '2023-12-03 16:08:05', 97),
(96, 4, 2, 50.00, '2023-12-04 05:32:45', '2023-12-04 05:32:45', 98),
(97, 8, 2, 210.00, '2023-12-04 05:32:45', '2023-12-04 05:32:45', 98);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`, `updated_at`) VALUES
('husamaldean.odat@gmail.com', '$2y$10$uUHt4IqfqjDweJ/f7cL41.JtmYvRIuqZpTdjcNlXg2bu6iCRftWMC', '2023-12-03 14:46:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `provider` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `userId` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `amount`, `provider`, `status`, `userId`, `created_at`, `updated_at`) VALUES
(2, 120, 'paypal', 'VERIFIED', 1, NULL, NULL),
(3, 120, 'paypal', 'VERIFIED', 1, NULL, NULL),
(4, 120, 'paypal', 'VERIFIED', 1, NULL, NULL),
(5, 120, 'paypal', 'VERIFIED', 1, NULL, NULL),
(6, 80, 'paypal', 'VERIFIED', 1, NULL, NULL),
(7, 120, 'paypal', 'VERIFIED', 1, NULL, NULL),
(8, 120, 'paypal', 'VERIFIED', 1, NULL, NULL),
(9, 120, 'paypal', 'VERIFIED', 1, NULL, NULL),
(10, 120, 'paypal', 'VERIFIED', 1, NULL, NULL),
(11, 120, 'paypal', 'VERIFIED', 1, NULL, NULL),
(12, 120, 'paypal', 'VERIFIED', 1, NULL, NULL),
(13, 120, 'paypal', 'VERIFIED', 1, NULL, NULL),
(14, 120, 'paypal', 'VERIFIED', 1, NULL, NULL),
(15, 120, 'paypal', 'VERIFIED', 1, NULL, NULL),
(16, 120, 'paypal', 'VERIFIED', 1, NULL, NULL),
(17, 20, 'paypal', 'VERIFIED', 1, NULL, NULL),
(18, 20, 'paypal', 'VERIFIED', 1, NULL, NULL),
(19, 20, 'paypal', 'VERIFIED', 1, NULL, NULL),
(20, 20, 'paypal', 'VERIFIED', 1, NULL, NULL),
(21, 20, 'paypal', 'VERIFIED', 1, NULL, NULL),
(25, 20, 'paypal', 'VERIFIED', 1, NULL, NULL),
(27, 30, 'paypal', 'VERIFIED', 2, NULL, NULL),
(28, 1, 'paypal', 'VERIFIED', 2, NULL, NULL),
(29, 1, 'paypal', 'VERIFIED', 1, NULL, NULL),
(30, 1, 'paypal', 'VERIFIED', 1, NULL, NULL),
(31, 1, 'paypal', 'VERIFIED', 1, NULL, NULL),
(32, 1, 'paypal', 'VERIFIED', 1, NULL, NULL),
(33, 1, 'paypal', 'VERIFIED', 1, NULL, NULL),
(34, 1, 'paypal', 'VERIFIED', 1, NULL, NULL),
(35, 1, 'paypal', 'VERIFIED', 1, NULL, NULL),
(36, 1, 'paypal', 'VERIFIED', 1, NULL, NULL),
(37, 1, 'paypal', 'VERIFIED', 1, NULL, NULL),
(38, 1, 'paypal', 'VERIFIED', 1, NULL, NULL),
(39, 1, 'paypal', 'VERIFIED', 1, NULL, NULL),
(40, 1, 'paypal', 'VERIFIED', 1, NULL, NULL),
(41, 1, 'paypal', 'VERIFIED', 1, NULL, NULL),
(42, 1, 'paypal', 'VERIFIED', 1, NULL, NULL),
(43, 1, 'paypal', 'VERIFIED', 1, NULL, NULL),
(44, 1, 'paypal', 'VERIFIED', 1, NULL, NULL),
(45, 1, 'paypal', 'VERIFIED', 1, NULL, NULL),
(46, 1, 'paypal', 'VERIFIED', 1, NULL, NULL),
(47, 80, 'paypal', 'VERIFIED', 1, NULL, NULL),
(48, 80, 'paypal', 'VERIFIED', 1, NULL, NULL),
(49, 80, 'paypal', 'VERIFIED', 1, NULL, NULL),
(50, 80, 'paypal', 'VERIFIED', 1, NULL, NULL),
(51, 80, 'paypal', 'VERIFIED', 1, NULL, NULL),
(52, 1, 'paypal', 'VERIFIED', 1, NULL, NULL),
(53, 80, 'paypal', 'VERIFIED', 1, NULL, NULL),
(54, 100, 'paypal', 'VERIFIED', 1, NULL, NULL),
(55, 1, 'paypal', 'VERIFIED', 1, NULL, NULL),
(56, 3, 'paypal', 'VERIFIED', 1, NULL, NULL),
(57, 3, 'paypal', 'VERIFIED', 1, NULL, NULL),
(58, 3, 'paypal', 'VERIFIED', 1, NULL, NULL),
(59, 3, 'paypal', 'VERIFIED', 1, NULL, NULL),
(60, 3, 'paypal', 'VERIFIED', 1, NULL, NULL),
(62, 23, 'paypal', 'VERIFIED', 1, NULL, NULL),
(63, 23, 'paypal', 'VERIFIED', 1, NULL, NULL),
(64, 23, 'paypal', 'VERIFIED', 1, NULL, NULL),
(65, 23, 'paypal', 'VERIFIED', 1, NULL, NULL),
(66, 23, 'paypal', 'VERIFIED', 1, NULL, NULL),
(67, 23, 'paypal', 'VERIFIED', 1, NULL, NULL),
(68, 23, 'paypal', 'VERIFIED', 1, NULL, NULL),
(69, 23, 'paypal', 'VERIFIED', 1, NULL, NULL),
(70, 23, 'paypal', 'VERIFIED', 1, NULL, NULL),
(71, 23, 'paypal', 'VERIFIED', 1, NULL, NULL),
(72, 23, 'paypal', 'VERIFIED', 1, NULL, NULL),
(73, 23, 'paypal', 'VERIFIED', 1, NULL, NULL),
(74, 23, 'paypal', 'VERIFIED', 1, NULL, NULL),
(75, 23, 'paypal', 'VERIFIED', 1, NULL, NULL),
(76, 23, 'paypal', 'VERIFIED', 1, NULL, NULL),
(77, 132, 'paypal', 'VERIFIED', 1, NULL, NULL),
(78, 132, 'paypal', 'VERIFIED', 1, NULL, NULL),
(79, 132, 'paypall', 'VERIFIED', 1, NULL, NULL),
(80, 132, 'paypall', 'VERIFIED', 1, NULL, NULL),
(81, 132, 'paypall', 'VERIFIED', 1, NULL, NULL),
(82, 132, 'paypall', 'VERIFIED', 1, NULL, NULL),
(83, 132, 'paypall', 'VERIFIED', 1, NULL, NULL),
(84, 132, 'paypall', 'VERIFIED', 1, '2023-11-06 10:03:00', '2023-11-06 10:03:00'),
(85, 132, 'paypall', 'VERIFIED', 1, '2023-11-06 10:04:34', '2023-11-06 10:04:34'),
(86, 110, 'paypall', 'VERIFIED', 1, '2023-11-06 12:57:46', '2023-11-06 12:57:46'),
(87, 110, 'paypall', 'VERIFIED', 1, '2023-11-06 12:58:34', '2023-11-06 12:58:34'),
(88, 110, 'paypall', 'VERIFIED', 1, '2023-11-06 13:00:53', '2023-11-06 13:00:53'),
(89, 110, 'paypall', 'VERIFIED', 1, '2023-11-06 13:05:13', '2023-11-06 13:05:13'),
(90, 110, 'paypall', 'VERIFIED', 1, '2023-11-06 13:06:55', '2023-11-06 13:06:55'),
(91, 110, 'paypall', 'VERIFIED', 1, '2023-11-06 13:11:37', '2023-11-06 13:11:37'),
(92, 110, 'paypall', 'VERIFIED', 1, '2023-11-06 13:18:44', '2023-11-06 13:18:44'),
(93, 110, 'paypall', 'VERIFIED', 1, '2023-11-06 13:21:05', '2023-11-06 13:21:05'),
(94, 110, 'paypall', 'VERIFIED', 1, '2023-11-06 13:22:39', '2023-11-06 13:22:39'),
(95, 110, 'paypall', 'VERIFIED', 1, '2023-11-06 13:27:31', '2023-11-06 13:27:31'),
(96, 110, 'paypall', 'VERIFIED', 1, '2023-11-06 13:28:15', '2023-11-06 13:28:15'),
(97, 110, 'paypall', 'VERIFIED', 1, '2023-11-06 13:43:06', '2023-11-06 13:43:06'),
(98, 110, 'paypall', 'VERIFIED', 1, '2023-11-06 13:55:53', '2023-11-06 13:55:53'),
(99, 110, 'paypall', 'VERIFIED', 1, '2023-11-06 14:00:42', '2023-11-06 14:00:42'),
(100, 110, 'paypall', 'VERIFIED', 1, '2023-11-06 14:12:22', '2023-11-06 14:12:22'),
(101, 110, 'paypall', 'VERIFIED', 1, '2023-11-06 15:50:49', '2023-11-06 15:50:49'),
(102, 110, 'paypall', 'VERIFIED', 1, '2023-11-06 16:26:41', '2023-11-06 16:26:41'),
(103, 4620, 'paypall', 'VERIFIED', 4, '2023-11-29 15:06:07', '2023-11-29 15:06:07'),
(104, 44, 'paypall', 'VERIFIED', 1, '2023-11-30 10:55:10', '2023-11-30 10:55:10'),
(105, 1463, 'paypall', 'VERIFIED', 1, '2023-12-01 10:57:57', '2023-12-01 10:57:57'),
(106, 561, 'paypall', 'VERIFIED', 4, '2023-12-01 14:06:44', '2023-12-01 14:06:44'),
(107, 1000, 'cash on delivery', 'pending', 4, '2023-12-01 16:59:51', '2023-12-01 16:59:51'),
(108, 1000, 'cash on delivery', 'pending', 4, '2023-12-01 17:05:22', '2023-12-01 17:05:22'),
(109, 1000, 'cash on delivery', 'pending', 4, '2023-12-01 17:11:26', '2023-12-01 17:11:26'),
(110, 231, 'cash on delivery', 'pending', 4, '2023-12-01 17:12:55', '2023-12-01 17:12:55'),
(111, 231, 'CASH', 'PENDING', 4, '2023-12-01 17:16:35', '2023-12-01 17:16:35'),
(112, 231, 'CASH', 'PENDING', 4, '2023-12-01 19:33:39', '2023-12-01 19:33:39'),
(113, 231, 'CASH', 'PENDING', 4, '2023-12-01 19:41:21', '2023-12-01 19:41:21'),
(114, 231, 'CASH', 'PENDING', 4, '2023-12-01 19:42:20', '2023-12-01 19:42:20'),
(115, 231, 'CASH', 'PENDING', 4, '2023-12-01 19:42:46', '2023-12-01 19:42:46'),
(116, 231, 'CASH', 'PENDING', 4, '2023-12-01 19:45:39', '2023-12-01 19:45:39'),
(117, 231, 'CASH', 'PENDING', 4, '2023-12-01 19:47:43', '2023-12-01 19:47:43'),
(118, 231, 'CASH', 'PENDING', 4, '2023-12-01 19:50:24', '2023-12-01 19:50:24'),
(119, 231, 'CASH', 'PENDING', 4, '2023-12-01 19:50:49', '2023-12-01 19:50:49'),
(120, 231, 'CASH', 'PENDING', 4, '2023-12-01 19:52:37', '2023-12-01 19:52:37'),
(121, 231, 'CASH', 'PENDING', 4, '2023-12-01 19:53:05', '2023-12-01 19:53:05'),
(122, 231, 'CASH', 'PENDING', 4, '2023-12-01 19:54:15', '2023-12-01 19:54:15'),
(123, 231, 'CASH', 'PENDING', 4, '2023-12-01 19:56:22', '2023-12-01 19:56:22'),
(124, 231, 'CASH', 'PENDING', 4, '2023-12-01 19:58:22', '2023-12-01 19:58:22'),
(125, 231, 'CASH', 'PENDING', 4, '2023-12-01 20:01:07', '2023-12-01 20:01:07'),
(126, 231, 'CASH', 'PENDING', 4, '2023-12-01 20:01:45', '2023-12-01 20:01:45'),
(127, 231, 'CASH', 'PENDING', 4, '2023-12-01 20:02:07', '2023-12-01 20:02:07'),
(128, 616, 'CASH', 'PENDING', 4, '2023-12-01 20:03:17', '2023-12-01 20:03:17'),
(129, 616, 'CASH', 'PENDING', 4, '2023-12-01 20:04:14', '2023-12-01 20:04:14'),
(130, 616, 'CASH', 'PENDING', 4, '2023-12-01 20:04:51', '2023-12-01 20:04:51'),
(131, 616, 'CASH', 'PENDING', 4, '2023-12-01 20:05:51', '2023-12-01 20:05:51'),
(132, 616, 'paypall', 'VERIFIED', 4, '2023-12-01 20:06:45', '2023-12-01 20:06:45'),
(133, 545, 'paypall', 'VERIFIED', 4, '2023-12-01 20:08:32', '2023-12-01 20:08:32'),
(134, 479, 'CASH', 'PENDING', 4, '2023-12-01 20:15:21', '2023-12-01 20:15:21'),
(135, 479, 'CASH', 'PENDING', 4, '2023-12-01 20:16:35', '2023-12-01 20:16:35'),
(136, 479, 'CASH', 'PENDING', 4, '2023-12-01 20:19:46', '2023-12-01 20:19:46'),
(137, 957, 'CASH', 'PENDING', 4, '2023-12-01 20:22:09', '2023-12-01 20:22:09'),
(138, 1232, 'CASH', 'PENDING', 4, '2023-12-01 20:26:11', '2023-12-01 20:26:11'),
(139, 2129, 'CASH', 'PENDING', 4, '2023-12-01 20:34:47', '2023-12-01 20:34:47'),
(140, 2129, 'CASH', 'PENDING', 4, '2023-12-01 20:37:07', '2023-12-01 20:37:07'),
(141, 0, 'CASH', 'PENDING', 4, '2023-12-01 20:39:18', '2023-12-01 20:39:18'),
(142, 1914, 'CASH', 'PENDING', 4, '2023-12-02 22:46:39', '2023-12-02 22:46:39'),
(143, 275, 'CASH', 'PENDING', 12, '2023-12-03 16:08:05', '2023-12-03 16:08:05'),
(144, 572, 'CASH', 'PENDING', 4, '2023-12-04 05:32:45', '2023-12-04 05:32:45');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `SKU` varchar(255) NOT NULL,
  `categoryId` bigint(20) UNSIGNED NOT NULL,
  `inventoryId` bigint(20) UNSIGNED NOT NULL,
  `discountId` bigint(20) UNSIGNED NOT NULL,
  `img` text DEFAULT NULL,
  `shortDescription` varchar(255) DEFAULT NULL,
  `longDescription` text DEFAULT NULL,
  `cartDescription` varchar(255) DEFAULT NULL,
  `weight` double(8,2) DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `img1` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text DEFAULT NULL,
  `img5` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `SKU`, `categoryId`, `inventoryId`, `discountId`, `img`, `shortDescription`, `longDescription`, `cartDescription`, `weight`, `price`, `img1`, `img2`, `img3`, `img4`, `img5`, `created_at`, `updated_at`) VALUES
(1, 'Tree of Life Mandala', 'Discover the enchanting world of our Tree of Life Mandala canvas painting.', 'CA001P003', 3, 1, 1, '20231025223447.jpg', NULL, NULL, NULL, NULL, 30.00, '2023102525223447.jpg', '2023102522223447.jpg', '2023101025223447.jpg', NULL, NULL, '2023-10-25 19:34:47', '2023-10-25 19:34:47'),
(2, 'Tree of Life Mandala', 'Discover the enchanting world of our Tree of Life Mandala canvas painting.', 'CA001P002', 3, 1, 1, '20231025223521.jpg', NULL, NULL, 'Life Mandala canvas painting.', NULL, 20.00, '2023102525223521.jpg', '2023102522223521.jpg', '2023101025223521.jpg', NULL, NULL, '2023-10-25 19:35:21', '2023-10-25 19:35:21'),
(3, 'Lotus Flower Stained', 'The abstract and psychedelic mosaic art, with iridescent touches, creates a mesmerizing display.', 'CA001P001', 3, 1, 1, '20231025223701.jpg', NULL, NULL, NULL, NULL, 40.00, '2023102525223701.jpg', '2023102522223701.jpg', '2023101025223701.jpg', NULL, NULL, '2023-10-25 19:37:01', '2023-10-25 19:37:01'),
(4, 'Astronaut Exploring Space', 'A stunning illustration of an astronaut in a suit exploring the depths of space, surrounded by magnificent breathtaking deep space', 'CA001P001', 1, 1, 1, '20231112232312.png', NULL, NULL, NULL, NULL, 50.00, '2023111212232312.png', '2023111223232312.png', '2023111112232312.png', NULL, NULL, '2023-11-12 20:23:12', '2023-11-12 20:23:12'),
(5, 'Japanese Ghost Samurai', 'Yotsuya Kaidan is a famous Japanese ghost story of betrayal, murder and ghostly revenge', 'CA001P002', 1, 1, 1, '20231112232752.png', NULL, NULL, NULL, NULL, 170.00, '2023111212232752.png', '2023111223232752.png', '2023111112232752.png', NULL, NULL, '2023-11-12 20:27:52', '2023-11-12 20:27:52'),
(6, 'City of Grekonorth', 'Capitol and largest city of Arkadia, located where the two major rivers meet. The palace was located in the center of the city with the temples to Ishtar and Inanna on either side of it. The temple of Ishtar was there before Gilgamesh took the throne but after he saved Inanna from the demon attack, Gilgamesh built a temple to honor her.', 'CA001P003', 1, 1, 1, '20231112233155.png', NULL, NULL, NULL, NULL, 185.00, '2023111212233155.png', '2023111223233155.png', '2023111112233155.png', NULL, NULL, '2023-11-12 20:31:55', '2023-11-12 20:31:55'),
(7, 'Metallic Future Planet', 'A Metallic Future Planet is a concept that envisions a world where advanced technology and industrialization have reshaped the natural environment, giving rise to a futuristic, metallic landscape. This speculative setting combines elements of science fiction and cyberpunk aesthetics to create a unique and visually striking world.', 'CA001P004', 1, 1, 1, '20231112233428.png', NULL, NULL, NULL, NULL, 190.00, '2023111212233428.png', '2023111223233428.png', '2023111112233428.png', NULL, NULL, '2023-11-12 20:34:28', '2023-11-12 20:34:28'),
(8, 'Blue Castle City', 'Blue Castle City is a fictional urban setting that conjures an image of a vibrant and enchanting metropolis with a distinctive blue theme.', 'CA001P005', 1, 1, 1, '20231112233716.png', NULL, NULL, NULL, NULL, 210.00, '2023111212233716.png', '2023111223233716.png', '2023111112233716.png', NULL, NULL, '2023-11-12 20:37:16', '2023-11-12 20:37:16'),
(9, 'A hot air balloon', 'A hot air balloon ride offers a tranquil and enchanting journey, as you gently ascend above the earth. The panoramic views of landscapes, often enjoyed during the golden hours, create a magical atmosphere. The peaceful silence and connection with nature make it an unforgettable adventure. A champagne toast after landing adds to the sense of celebration and joy.', 'CA001P007', 1, 1, 1, '20231204085146.png', NULL, NULL, NULL, NULL, 150.00, '2023120404085146.png', '2023120408085146.png', '2023121204085146.png', NULL, NULL, '2023-11-12 20:54:40', '2023-12-04 05:51:46'),
(10, 'Beyond Earths boundaries', 'Encapsulates the human desire to venture into the cosmos and discover the mysteries of the universe. It represents a journey into the unknown, pushing the limits of human knowledge and technological capabilities.', 'CA001P006', 1, 1, 1, '20231113000206.png', NULL, NULL, NULL, NULL, 250.00, '2023111313000206.png', '2023111300000206.png', '2023111113000206.png', NULL, NULL, '2023-11-12 21:02:06', '2023-11-12 21:02:06'),
(11, 'The Devils Daughter', '\"The Devil\'s Daughter\" is a fictional or symbolic concept, and its interpretation can vary widely depending on the specific story, cultural context, or creative work in which it is featured.', 'CA001P008', 1, 1, 1, '20231113001240.png', NULL, NULL, NULL, NULL, 270.00, '2023111313001240.png', '2023111300001240.png', '2023111113001240.png', NULL, NULL, '2023-11-12 21:12:40', '2023-11-12 21:12:40'),
(12, 'City Of Denothor', 'Denethor, a city of grandeur, boasts majestic architecture, lush green spaces, and a rich cultural tapestry. Its waterfront beauty, welcoming residents, and a commitment to modern technology make it a regal and progressive hub of history and innovation.', 'CA001P009', 1, 1, 1, '20231113001649.png', NULL, NULL, NULL, NULL, 310.00, '2023111313001649.png', '2023111300001649.png', '2023111113001649.png', NULL, NULL, '2023-11-12 21:16:49', '2023-11-12 21:16:49'),
(13, 'Star power', 'gravity increasingly pulled the gas molecules toward each other. This increased their density, making the clouds hotter. Like cosmic lint, they began to gather into balls known as protogalaxies. Inside them, material continued to amass into ever-denser clumps. Some of these developed into stars. Stars are still being born this way, even in our Milky Way galaxy.', 'CA001P011', 1, 1, 1, '20231113211657.png', NULL, NULL, NULL, NULL, 125.00, '2023111313211657.png', '2023111321211657.png', '2023111113211657.png', NULL, NULL, '2023-11-13 18:14:55', '2023-11-13 18:16:57'),
(16, 'Tree Of Life Painting', 'Immerse yourself in the rich tapestry of Norse mythology with the Yggdrasil - Tree of Life Painting Large Canvas Print. This captivating artwork portrays the iconic Yggdrasil, the Tree of Life, in a large canvas print. Whether you choose the framed or unframed option, this ready-to-hang piece becomes a focal point, adding a touch of mythology and symbolism to your space. The framed version provides a polished and finished look, while the unframed option allows for personalized framing choices.', 'CA001P0012', 3, 1, 1, '20231202204001.jpg', NULL, NULL, NULL, NULL, 240.00, '2023120202204001.jpg', '2023120220204001.jpg', '2023121202204001.jpg', NULL, NULL, '2023-12-02 17:40:01', '2023-12-02 17:40:01'),
(17, 'Celtic Tree of Life', 'Elevate your space with this stunning Yggdrasil Painting. Our vibrant canvas print captures the essence of the Celtic Tree of Life, an artful tribute to interconnection. The abstract design adds a touch of mystique to your décor. Embrace the symbolic power of Yggdrasil as a reminder of life\'s intricate beauty.', 'CA001P013', 3, 1, 1, '20231202204323.jpg', NULL, NULL, NULL, NULL, 190.00, '2023120202204323.jpg', '2023120220204323.jpg', '2023121202204323.jpg', NULL, NULL, '2023-12-02 17:43:23', '2023-12-02 17:43:23'),
(18, 'Tree of Life Artwork', 'Elevate your space with our vibrant Yggdrasil Colorful Mosaic Painting. This stunning Tree of Life Artwork, inspired by stained glass, is now available as a high-quality canvas print. Immerse yourself in the rich tapestry of Norse Mythology Art and let the ancient stories come to life on your wall.', 'CA001P014', 3, 1, 1, '20231202204825.jpg', NULL, NULL, NULL, NULL, 230.00, '2023120202204825.jpg', '2023120220204825.jpg', '2023121202204825.jpg', NULL, NULL, '2023-12-02 17:48:25', '2023-12-02 17:48:25'),
(19, 'Epoxy Resin Table', 'We are experienced in crafting home decorations wooden epoxy dining room tables, wooden epoxy kitchen tables, wooden epoxy living room tables wooden epoxy coffee tables, wooden epoxy home furniture, wooden TV sets, wooden dressers, wooden stylish mirrors, and many more accessories in desired raw woods, models, sizes, and epoxy colors for NATURE LOVERS all over the world.', 'CA001P014', 2, 1, 1, '20231202205144.jpg', NULL, NULL, NULL, NULL, 350.00, '2023120202205144.jpg', '2023120220205144.jpg', '2023121202205144.jpg', NULL, NULL, '2023-12-02 17:51:44', '2023-12-02 17:51:44'),
(20, 'Walnut Dining Table', 'We are experienced in crafting home decorations wooden epoxy dining room tables, wooden epoxy kitchen tables, wooden epoxy living room tables wooden epoxy coffee tables, wooden epoxy home furniture, wooden TV sets, wooden dressers, wooden stylish mirrors, and many more accessories in desired raw woods, models, sizes, and epoxy colors for NATURE LOVERS all over the world.', 'CA001P017', 2, 1, 1, '20231202205337.jpg', NULL, NULL, NULL, NULL, 570.00, '2023120202205337.jpg', '2023120220205337.jpg', '2023121202205337.jpg', NULL, NULL, '2023-12-02 17:53:37', '2023-12-02 17:53:37'),
(21, 'Resin Night Light', 'Fire Dragon and Ice Dragon Resin Night Light, Game of Thrones Dragon Resin Lamp, Halloween Lamp Decor, 3D Dragon Table Lamp - Gift for Him, Gift for Her.Each lamp is meticulously handcrafted, ensuring its uniqueness and distinguishing it from the displayed wooden shade arrangement. Please note that slight color variations may occur due to the screen settings of your device (phone, tablet, computer).', 'CA001P016', 2, 1, 1, '20231202205705.jpg', NULL, NULL, NULL, NULL, 190.00, '2023120202205705.jpg', '2023120220205705.jpg', '2023121202205705.jpg', NULL, NULL, '2023-12-02 17:57:05', '2023-12-02 17:57:05'),
(22, 'SCUBA DIVER Epoxy Lamp', 'Resin Night Light is an interesting application of Epoxy Art. Thanks to the transparent, easily diffused light, easy to mix with many different colors, the resin night lights are a perfect decoration for the living room, bedroom or office. We have studied the path of light, experimented with light placements to achieve the most realistic and high refraction effect. Initially, we designed the lamp to be projected from the top (natural light), that way is beautiful and gives high light efficiency, but designing the light in this position will expose the ugly power cord and difficult to put lights in the right position (no one wants their wonderful lamp to show the wires above).', 'CA001P017', 2, 1, 1, '20231202205854.jpg', NULL, NULL, NULL, NULL, 210.00, '2023120202205854.jpg', '2023120220205854.jpg', '2023121202205854.jpg', NULL, NULL, '2023-12-02 17:58:54', '2023-12-02 17:58:54'),
(23, 'Great Shark resin lamp', 'A diver\'s exploration of the ocean, where he/she/you encountered a great white shark. The realistic coral reefs are breathtakingly beautiful. This lamp will bring an extremely vivid ocean corner to your space. It takes a lot of work to create this one lamp. First, I select forest Nu wood and cut it, then mix resin, coloring sea creatures, sanding, spray paint...etc. Normally, it takes me 10-15 days to create a finished work. I just hope you love it as much as I did It is not only a useful lamp, a decorative object, but also is an impressive gift, containing many meanings. It is a gift for him, gift for her, gift for dad or for Halloween, Christmas gift…', 'CA001P020', 2, 1, 1, '20231202210535.jpg', NULL, NULL, NULL, NULL, 110.00, '2023120202210535.jpg', '2023120221210535.jpg', '2023121202210535.jpg', NULL, NULL, '2023-12-02 18:05:35', '2023-12-02 18:05:35'),
(24, 'The ring of the dark lord lamp', 'The ring of the dark lord lamp, Custom Epoxy Resin Lamp, Lighting Home Decor, Resin Night Light, Christmas gifts, gift for him,  Inspired by famous movie.The handcrafted lamp inside is a powerful lord\'s ring, it is placed on a block of volcanic lava that glows extremely vividly. The lamp will always stand out wherever you place it, it is a unique gift for you to give to your loved ones!', 'CA001P023', 2, 1, 1, '20231202211829.jpg', NULL, NULL, NULL, NULL, 195.00, '2023120202211829.jpg', '2023120221211829.jpg', '2023121202211829.jpg', NULL, NULL, '2023-12-02 18:18:29', '2023-12-02 18:18:29'),
(25, 'Interstellar Epoxy Lamp', 'Interstellar Epoxy Lamp,Cosmic space night light,Space Night Lights,Resin and Wood Space Galaxy Lamp,Gift for her,Halloween gift,Winter Gift.  Continuing with the theme of space universe, we would like to introduce the latest design of our team. This will be a great gift for those who love Astronomy, love and want to learn, conquer the universe.Whether you\'re a fan of science fiction, space exploration, or simply appreciate unique and beautiful craftsmanship, this resin galaxy lamp is sure to be a standout piece in your collection.', 'CA001P026', 2, 1, 1, '20231202212025.jpg', NULL, NULL, NULL, NULL, 265.00, '2023120202212025.jpg', '2023120221212025.jpg', '2023121202212025.jpg', NULL, NULL, '2023-12-02 18:20:25', '2023-12-02 18:20:25'),
(26, 'Moroccan brass chandelier', 'the chain is adjustable, you can request a longer chain without paying an additional price, please specify this length in the personalization or in a message accompanying the order.Sustainable features: recycled metal. Items may include additional materials or use methods that aren\'t considered sustainable features on our site. Learn more Gift wrapping available Moroccan handmade brass ceiling light.', 'CA001P030', 6, 1, 1, '20231202220416.jpg', NULL, NULL, NULL, NULL, 205.00, '2023120202220416.jpg', '2023120222220416.jpg', '2023121202220416.jpg', NULL, NULL, '2023-12-02 19:04:16', '2023-12-02 19:04:16'),
(28, 'Mid Century Sputnik Chandelier', 'Beautiful vintage inspired brass chandelier with solid brass spines radiating from each of five stems of light to create a fabulous focal point in any space. This design casts a uniquely gorgeous filtered light creating a wonderful ambience in any room.  Carefully handcrafted in our workshop using quality heavy gauge brass and UL listed components, processing of our raw materials is gentle so as to retain the original feel and artisanal character of the material as far as possible. With a focus on good design and quality, we aim to convey our signature in the final product.', 'CA001P031', 6, 1, 1, '20231202220838.jpg', NULL, NULL, NULL, NULL, 410.00, '2023120202220838.jpg', '2023120222220838.jpg', '2023121202220838.jpg', NULL, NULL, '2023-12-02 19:08:38', '2023-12-02 19:08:38'),
(29, 'Wood Pendant Light', 'wooden Majesty Black art deco lamp with a modern twist! The unique and charming design resembles a majesty, and the Black-colored finish gives it a natural texture appearance. The lampshade comes with a sleek metal ceiling rose in your choice of white or black, adding a touch of modern sophistication to this rustic pendant light fixture.', 'CA001P033', 6, 1, 1, '20231202221011.jpg', NULL, NULL, NULL, NULL, 105.00, '2023120202221011.jpg', '2023120222221011.jpg', '2023121202221011.jpg', NULL, NULL, '2023-12-02 19:10:11', '2023-12-02 19:10:11'),
(30, 'Polished Copper ceiling light', 'Originally created for a customer to tie in with the copper details in their new kitchen. Since then we have had a lot of enquiries relating to a copper finish so thought it was about time we listed it for general sale.  The eye catching polished copper finish looks stunning during the day but at night the finish on this light almost seems to intensify as the light reflects off different parts of the copper base and lamp holders.', 'CA001P033', 6, 1, 1, '20231202221947.jpg', NULL, NULL, NULL, NULL, 295.00, '2023120202221947.jpg', '2023120222221947.jpg', '2023121202221947.jpg', NULL, NULL, '2023-12-02 19:19:47', '2023-12-02 19:19:47'),
(31, 'Clear Glass Pendant Light Plug', 'Materials: Glass, metal Dark Clear Glass Pendant Light Hanging Lighting Fixture Home Decor Lighting Nordic Scandinavian Ceiling Lamp Art Deco Contemporary Modern Plug-In  This glass pendant light will be perfect for the bedroom, living room, or kitchen.Plug-in version goes with one main cord, plug at the end, on/off switch, and hook. The cord length is 2 meters or 78 inches or 6.5 ft - if you need more please message us. If you need the canopy and separately plug-in cord - please message us', 'CA001P035', 6, 1, 1, '20231202222124.jpg', NULL, NULL, NULL, NULL, 95.00, '2023120202222124.jpg', '2023120222222124.jpg', '2023121202222124.jpg', NULL, NULL, '2023-12-02 19:21:24', '2023-12-02 19:21:24');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `description`, `img`, `created_at`, `updated_at`) VALUES
(1, 'AI Paintings', 'artworks created with the assistance of artificial intelligence, particularly machine learning algorithms and neural networks. Here\'s a description of AI paintings', '20231025223037.png', '2023-10-25 19:30:37', '2023-10-25 19:30:37'),
(2, 'Craft Supplies', 'artworks created with the assistance of artificial intelligence, particularly machine learning algorithms and neural networks. Here', '20231025223005.webp', '2023-10-25 19:30:06', '2023-10-25 19:30:06'),
(3, 'Photography', 'artworks created with the assistance of artificial intelligence, particularly machine learning algorithms and neural networks. Here', '20231025222939.png', '2023-10-25 19:29:39', '2023-10-25 19:29:39'),
(6, 'Home Art', 'The decorative arts are arts or crafts whose aim is the design and manufacture of objects that are both beautiful and functional. This includes most of the arts which make objects for the interiors of buildings, as well as interior design, but typically excludes architecture. Ceramic art, metalwork, furniture, jewellery, fashion, various forms of the textile arts and glassware are major groupings.', '20231202214935.jpg', '2023-12-02 18:36:58', '2023-12-02 18:49:35');

-- --------------------------------------------------------

--
-- Table structure for table `product_inventories`
--

CREATE TABLE `product_inventories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `name` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_inventories`
--

INSERT INTO `product_inventories` (`id`, `quantity`, `name`, `created_at`, `updated_at`) VALUES
(1, 500, 'Painter Creator', '2023-10-25 19:31:31', '2023-10-25 19:31:31'),
(2, 22, 'hhhh', '2023-12-02 20:26:03', '2023-12-02 20:26:14');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` bigint(20) UNSIGNED NOT NULL,
  `productId` bigint(20) UNSIGNED NOT NULL,
  `review` int(11) NOT NULL,
  `description` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `userId`, `productId`, `review`, `description`, `date`, `created_at`, `updated_at`) VALUES
(43, 1, 4, 1, 'fgbfgbfgb', '2023-11-23 15:51:37', '2023-11-23 12:51:37', '2023-11-23 12:51:37'),
(44, 1, 4, 1, 'fvdvfdvfdv', '2023-11-23 15:52:16', '2023-11-23 12:52:16', '2023-11-23 12:52:16'),
(55, 4, 6, 4, 'awsome', '2023-12-02 23:11:07', '2023-12-02 20:11:07', '2023-12-02 20:11:07'),
(56, 4, 4, 5, 'Awsome', '2023-12-04 08:53:32', '2023-12-04 05:53:32', '2023-12-04 05:53:32'),
(57, 4, 4, 5, 'very Good', '2023-12-04 08:53:48', '2023-12-04 05:53:48', '2023-12-04 05:53:48'),
(58, 4, 9, 5, 'awsome', '2023-12-04 09:13:54', '2023-12-04 06:13:54', '2023-12-04 06:13:54');

-- --------------------------------------------------------

--
-- Table structure for table `session_carts`
--

CREATE TABLE `session_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` bigint(20) UNSIGNED NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipments`
--

CREATE TABLE `shipments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `postalCode` varchar(255) NOT NULL,
  `userId` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `note` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipments`
--

INSERT INTO `shipments` (`id`, `date`, `address`, `city`, `state`, `country`, `postalCode`, `userId`, `created_at`, `updated_at`, `firstName`, `lastName`, `phone`, `note`) VALUES
(1, '2023-10-29 12:11:31', 'ewfcewfew', 'ewfewf', 'ewfwef', 'wefwef', 'ewfwef', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '2023-11-06 16:42:56', 'fdvdg', 'Amman, Jordanj', NULL, NULL, '2111', NULL, '2023-11-06 13:42:56', '2023-11-06 13:42:56', 'Husamh', 'odatg', '+9627897765', NULL),
(3, '2023-11-06 16:55:43', 'fdvdg', 'Amman, Jordanj', NULL, NULL, '2111', NULL, '2023-11-06 13:55:43', '2023-11-06 13:55:43', 'Husamh', 'odatg', '+9627897765', NULL),
(4, '2023-11-06 17:00:31', 'fdvdg', 'Amman, Jordanj', NULL, NULL, '2111', NULL, '2023-11-06 14:00:31', '2023-11-06 14:00:31', 'Husamh', 'odatg', '+9627897765', NULL),
(5, '2023-11-06 17:12:11', 'fdvdgf', 'Amman, Jordanjf', NULL, NULL, '21110', NULL, '2023-11-06 14:12:11', '2023-11-06 14:12:11', 'Husamhf', 'odatgf', '+9627897765870', NULL),
(6, '2023-11-06 18:50:31', 'fdvdfv', 'Amman, Jordan', NULL, NULL, '21110', NULL, '2023-11-06 15:50:31', '2023-11-06 15:50:31', 'Husam', 'odat', '+962789776587', 'asxs\\x\\z'),
(7, '2023-11-06 19:26:25', 'fdvdfv', 'Amman, Jordan', NULL, NULL, '21110', NULL, '2023-11-06 16:26:25', '2023-11-06 16:26:25', 'Husam', 'odat', '+962789776587', 'junujnuj'),
(8, '2023-11-15 21:08:02', '875785', '8757', NULL, NULL, '78596', NULL, '2023-11-15 18:08:02', '2023-11-15 18:08:02', '587587', '875785', '587578', '78678'),
(9, '2023-11-29 18:05:47', 'fdvdfv', 'Amman, Jordan', NULL, NULL, '21110', NULL, '2023-11-29 15:05:47', '2023-11-29 15:05:47', 'Husam Aldeen', 'Odat', '+962789776587', 'ascasccsscaacascacs'),
(10, '2023-11-30 13:54:48', 'fdvdfv', 'Amman, Jordan', NULL, NULL, '21110', NULL, '2023-11-30 10:54:48', '2023-11-30 10:54:48', 'Husam Aldeen', 'Odat', '+962789776587', 'acdsvsdvdsvsdvds'),
(11, '2023-12-01 13:57:39', 'fdvdfv', 'Amman, Jordan', NULL, NULL, '21110', NULL, '2023-12-01 10:57:39', '2023-12-01 10:57:39', 'Husam Aldeen', 'Odat', '+962789776587', 'ecferfverfvrefver'),
(12, '2023-12-01 17:06:28', 'fdvdfv', 'Amman, Jordan', NULL, NULL, '21110', NULL, '2023-12-01 14:06:28', '2023-12-01 14:06:28', 'Husam Aldeen', 'Odat', '+962789776587', 'fdvfdvfdvvrfv'),
(13, '2023-12-01 19:54:02', 'fdvdfv', 'Amman, Jordan', 'irbid', 'Jordan', '21110', NULL, '2023-12-01 16:54:02', '2023-12-01 16:54:02', 'Husam Aldeen', 'Odat', '+962789776587', 'ascascsacas'),
(14, '2023-12-01 19:54:25', 'fdvdfv', 'Amman, Jordan', 'irbid', 'Jordan', '21110', NULL, '2023-12-01 16:54:25', '2023-12-01 16:54:25', 'Husam Aldeen', 'Odat', '+962789776587', 'wsdsadasdcsad'),
(15, '2023-12-01 19:55:58', 'fdvdfv', 'Amman, Jordan', 'irbid', 'Jordan', '21110', NULL, '2023-12-01 16:55:58', '2023-12-01 16:55:58', 'Husam Aldeen', 'Odat', '+962789776587', 'wsdsadasdcsad'),
(16, '2023-12-01 19:59:09', 'fdvdfv', 'Amman, Jordan', 'irbid', 'Jordan', '21110', NULL, '2023-12-01 16:59:09', '2023-12-01 16:59:09', 'Husam Aldeen', 'Odat', '+962789776587', 'wsdsadasdcsad'),
(17, '2023-12-01 19:59:51', 'fdvdfv', 'Amman, Jordan', 'irbid', 'Jordan', '21110', NULL, '2023-12-01 16:59:51', '2023-12-01 16:59:51', 'Husam Aldeen', 'Odat', '+962789776587', 'dsvdsvsdvds'),
(18, '2023-12-01 20:05:22', 'fdvdfv', 'Amman, Jordan', 'irbid', 'Jordan', '21110', NULL, '2023-12-01 17:05:22', '2023-12-01 17:05:22', 'Husam Aldeen', 'Odat', '+962789776587', 'wefscdscdsc'),
(19, '2023-12-01 20:11:25', 'fdvdfv', 'Amman, Jordan', 'irbid', 'Jordan', '21110', NULL, '2023-12-01 17:11:25', '2023-12-01 17:11:25', 'Husam Aldeen', 'Odat', '+962789776587', 'bjhvhgcfhc'),
(20, '2023-12-01 20:12:55', 'sweifieh', 'Amman', 'szcsz', 'Jordan', '11185', NULL, '2023-12-01 17:12:55', '2023-12-01 17:12:55', 'Husam', 'odat', '+962789776587', 'saccascas'),
(21, '2023-12-01 20:16:26', 'fdvdfv', 'Amman, Jordan', 'sacsac', 'Jordan', '21110', NULL, '2023-12-01 17:16:26', '2023-12-01 17:16:26', 'Husam Aldeen', 'Odat', '+962789776587', 'ascascasc'),
(22, '2023-12-01 20:16:35', 'fdvdfv', 'Amman, Jordan', 'sacsac', 'Jordan', '21110', NULL, '2023-12-01 17:16:35', '2023-12-01 17:16:35', 'Husam Aldeen', 'Odat', '+962789776587', 'ascascasc'),
(23, '2023-12-01 22:33:39', 'fdvdfv', 'Amman, Jordan', 'irbid', 'Jordan', '21110', NULL, '2023-12-01 19:33:39', '2023-12-01 19:33:39', 'Husam Aldeen', 'Odat', '+962789776587', 'ascascas'),
(24, '2023-12-01 22:33:46', 'fdvdfv', 'Amman, Jordan', 'irbid', 'Jordan', '21110', NULL, '2023-12-01 19:33:46', '2023-12-01 19:33:46', 'Husam Aldeen', 'Odat', '+962789776587', 'ascascas'),
(25, '2023-12-01 22:41:21', 'fdvdfv', 'Amman, Jordan', 'irbid', 'Jordan', '21110', NULL, '2023-12-01 19:41:21', '2023-12-01 19:41:21', 'Husam Aldeen', 'Odat', '+962789776587', 'sczacsacsac'),
(26, '2023-12-01 22:42:20', 'fdvdfv', 'Amman, Jordan', 'irbid', 'Jordan', '21110', NULL, '2023-12-01 19:42:20', '2023-12-01 19:42:20', 'Husam Aldeen', 'Odat', '+962789776587', 'sczacsacsac'),
(27, '2023-12-01 22:42:46', 'fdvdfv', 'Amman, Jordan', 'hhhh', 'Jordan', '21110', NULL, '2023-12-01 19:42:46', '2023-12-01 19:42:46', 'Husam Aldeen', 'Odat', '+962789776587', 'zcscsacsa'),
(28, '2023-12-01 22:45:39', 'fdvdfv', 'Amman, Jordan', 'hhhh', 'Jordan', '21110', NULL, '2023-12-01 19:45:39', '2023-12-01 19:45:39', 'Husam Aldeen', 'Odat', '+962789776587', 's cascsacsacs'),
(29, '2023-12-01 22:47:43', 'fdvdfv', 'Amman, Jordan', 'hhhh', 'Jordan', '21110', NULL, '2023-12-01 19:47:43', '2023-12-01 19:47:43', 'Husam Aldeen', 'Odat', '+962789776587', 'ascsacsac'),
(30, '2023-12-01 22:50:24', 'fdvdfv', 'Amman, Jordan', 'hhhh', 'Jordan', '21110', NULL, '2023-12-01 19:50:24', '2023-12-01 19:50:24', 'Husam Aldeen', 'Odat', '+962789776587', 'sacacsacsacscc'),
(31, '2023-12-01 22:50:49', 'fdvdfv', 'Amman, Jordan', 'hhhh', 'Jordan', '21110', NULL, '2023-12-01 19:50:49', '2023-12-01 19:50:49', 'Husam Aldeen', 'Odat', '+962789776587', 'dvx dxvzdv d'),
(32, '2023-12-01 22:52:37', 'fdvdfv', 'Amman, Jordan', 'szcsz', 'Jordan', '21110', NULL, '2023-12-01 19:52:37', '2023-12-01 19:52:37', 'Husam Aldeen', 'Odat', '+962789776587', 's\\csacsac'),
(33, '2023-12-01 22:53:05', 'fdvdfv', 'Amman, Jordan', 'szcsz', 'Jordan', '21110', NULL, '2023-12-01 19:53:05', '2023-12-01 19:53:05', 'Husam Aldeen', 'Odat', '+962789776587', 'ascsacsacsa'),
(34, '2023-12-01 22:54:15', 'fdvdfv', 'Amman, Jordan', 'szcsz', 'Jordan', '21110', NULL, '2023-12-01 19:54:15', '2023-12-01 19:54:15', 'Husam Aldeen', 'Odat', '+962789776587', 'szxcascsacsa'),
(35, '2023-12-01 22:56:22', 'fdvdfv', 'Amman, Jordan', 'szcsz', 'Jordan', '21110', NULL, '2023-12-01 19:56:22', '2023-12-01 19:56:22', 'Husam Aldeen', 'Odat', '+962789776587', 'scascsacsa'),
(36, '2023-12-01 22:58:22', 'fdvdfv', 'Amman, Jordan', 'szcsz', 'Jordan', '21110', NULL, '2023-12-01 19:58:22', '2023-12-01 19:58:22', 'Husam Aldeen', 'Odat', '+962789776587', 'sacacascasc'),
(37, '2023-12-01 23:01:07', 'fdvdfv', 'Amman, Jordan', 'szcsz', 'Jordan', '21110', NULL, '2023-12-01 20:01:07', '2023-12-01 20:01:07', 'Husam Aldeen', 'Odat', '+962789776587', 'xz zx zcsac'),
(38, '2023-12-01 23:01:45', 'fdvdfv', 'Amman, Jordan', 'szcsz', 'Jordan', '21110', NULL, '2023-12-01 20:01:45', '2023-12-01 20:01:45', 'Husam Aldeen', 'Odat', '+962789776587', 's\\caascsac'),
(39, '2023-12-01 23:02:07', 'fdvdfv', 'Amman, Jordan', 'szcsz', 'Jordan', '21110', NULL, '2023-12-01 20:02:07', '2023-12-01 20:02:07', 'Husam Aldeen', 'Odat', '+962789776587', 'dsvsdvdsvds'),
(40, '2023-12-01 23:03:17', 'fdvdfv', 'Amman, Jordan', 'szcsz', 'Jordan', '21110', NULL, '2023-12-01 20:03:17', '2023-12-01 20:03:17', 'Husam Aldeen', 'Odat', '+962789776587', 'sacascsacascsa'),
(41, '2023-12-01 23:04:14', 'fdvdfv', 'Amman, Jordan', 'szcsz', 'Jordan', '21110', NULL, '2023-12-01 20:04:14', '2023-12-01 20:04:14', 'Husam Aldeen', 'Odat', '+962789776587', 'zdsvdsdsvds'),
(42, '2023-12-01 23:04:51', 'fdvdfv', 'Amman, Jordan', 'szcsz', 'Jordan', '21110', NULL, '2023-12-01 20:04:51', '2023-12-01 20:04:51', 'Husam Aldeen', 'Odat', '+962789776587', 'z zx xz xz zx'),
(43, '2023-12-01 23:05:51', 'fdvdfv', 'Amman, Jordan', 'szcsz', 'Jordan', '21110', NULL, '2023-12-01 20:05:51', '2023-12-01 20:05:51', 'Husam Aldeen', 'Odat', '+962789776587', 'scsacacasc'),
(44, '2023-12-01 23:06:27', 'fdvdfv', 'Amman, Jordan', 'szcsz', 'Jordan', '21110', NULL, '2023-12-01 20:06:27', '2023-12-01 20:06:27', 'Husam Aldeen', 'Odat', '+962789776587', 'c cx x cx cx cx'),
(45, '2023-12-01 23:08:17', 'fdvdfv', 'Amman, Jordan', 'szcsz', 'Jordan', '21110', NULL, '2023-12-01 20:08:17', '2023-12-01 20:08:17', 'Husam Aldeen', 'Odat', '+962789776587', 'x c xc xc xc'),
(46, '2023-12-01 23:15:21', 'fdvdfv', 'Amman, Jordan', 'irbid', 'Jordan', '21110', NULL, '2023-12-01 20:15:21', '2023-12-01 20:15:21', 'Husam Aldeen', 'Odat', '+962789776587', 'sxcsasac'),
(47, '2023-12-01 23:16:35', 'fdvdfv', 'Amman, Jordan', 'irbid', 'Jordan', '21110', NULL, '2023-12-01 20:16:35', '2023-12-01 20:16:35', 'Husam Aldeen', 'Odat', '+962789776587', 'sacassacas'),
(48, '2023-12-01 23:19:46', 'fdvdfv', 'Amman, Jordan', 'irbid', 'Jordan', '21110', NULL, '2023-12-01 20:19:46', '2023-12-01 20:19:46', 'Husam Aldeen', 'Odat', '+962789776587', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(49, '2023-12-01 23:22:09', 'fdvdfv', 'Amman, Jordan', 'irbid', 'Jordan', '21110', NULL, '2023-12-01 20:22:09', '2023-12-01 20:22:09', 'Husam Aldeen', 'Odat', '+962789776587', 'vsdvdsvsv'),
(50, '2023-12-01 23:26:11', 'fdvdfv', 'Amman, Jordan', 'irbid', 'Jordan', '21110', NULL, '2023-12-01 20:26:11', '2023-12-01 20:26:11', 'Husam Aldeen', 'Odat', '+962789776587', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(51, '2023-12-01 23:34:47', 'fdvdfv', 'Amman, Jordan', 'irbid', 'Jordan', '21110', NULL, '2023-12-01 20:34:47', '2023-12-01 20:34:47', 'Husam Aldeen', 'Odat', '+962789776587', 'huuuuuuuuuuuuuuu'),
(52, '2023-12-01 23:37:07', 'fdvdfv', 'Amman, Jordan', 'irbid', 'Jordan', '21110', NULL, '2023-12-01 20:37:07', '2023-12-01 20:37:07', 'Husam Aldeen', 'Odat', '+962789776587', 'x xc cx x cx cx'),
(53, '2023-12-01 23:39:18', 'fdvdfv', 'Amman, Jordan', 'irbid', 'Jordan', '21110', NULL, '2023-12-01 20:39:18', '2023-12-01 20:39:18', 'Husam Aldeen', 'Odat', '+962789776587', 'dvdsvdvds'),
(54, '2023-12-03 01:46:39', 'wasfi al tal street', 'Irbid City', 'Irbid', 'Jordan', '21110', NULL, '2023-12-02 22:46:39', '2023-12-02 22:46:39', 'Husam', 'odat', '789776587', NULL),
(55, '2023-12-03 19:08:05', 'sweifieh', 'Amman', 'dcsdvsdv', 'Jordan', '11185', NULL, '2023-12-03 16:08:05', '2023-12-03 16:08:05', 'Husam', 'odat', '+962789776587', NULL),
(56, '2023-12-04 08:32:45', 'wasfi al tal street', 'Irbid City', 'Irbid', 'Jordan', '21110', NULL, '2023-12-04 05:32:45', '2023-12-04 05:32:45', 'Husam', 'odat', '789776587', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `img` text DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `postalCode` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `lastName`, `phone`, `modified_at`, `email`, `img`, `role`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`, `country`, `state`, `city`, `postalCode`, `address`) VALUES
(1, 'husamodatt', '$2y$10$FHSRR1ZRSbOaKkku80xQB.TGYwgRL3KRHW9gjc.Lz.8bM60HyDP0S', 'Husamm', 'odat', 789776587, NULL, 'husamaldean0.odat@gmail.com', '20231130111347.png', 1, NULL, NULL, '2023-10-25 19:27:12', '2023-11-30 08:33:37', NULL, NULL, NULL, NULL, NULL),
(2, 'husamodat', '$2y$10$f7XLxxvWu6Kea4m4wVREDOp9iAHfP6jTHcnWt3qqLPNukfsNCM2SC', 'husam', 'odat', 789776587, NULL, 'husamaldean00.odat@gmail.com', '1701330445.png', 1, NULL, NULL, '2023-10-29 08:48:15', '2023-11-30 04:47:25', NULL, NULL, NULL, NULL, NULL),
(3, NULL, '$2y$10$Ly4ShvwpjBuTO/RAzTMlg.QS2Rt5fVWkHyVI4N2GrTkmfgUyCPuKO', 'cxvcx', NULL, NULL, NULL, 'husamaldeanjjj.odat@gmail.com', NULL, 0, NULL, NULL, '2023-11-13 19:43:33', '2023-12-01 11:05:13', NULL, NULL, NULL, NULL, NULL),
(4, 'husamodattt', '$2y$10$7o4i.MAFLB0qxGBU82A3bOJytKPLv.o7/TzR9o97qzLc.y98Ml0Qq', 'Husam', 'odat', 789776587, NULL, 'husamaldean.odat@gmail.com', '20231204083459.png', 1, NULL, NULL, '2023-11-29 13:45:16', '2023-12-04 05:34:59', 'Jordan', 'Irbid', 'Irbid City', '21110', 'wasfi al tal street'),
(5, NULL, '$2y$10$hzLcP8WpMQXE6VH5U0hWAu7GGoA0mLTppiOOaEPw3Wafi17UrqhoS', 'Husam aldeen odat', NULL, NULL, NULL, 'husam-odat@outlook.com', NULL, 0, NULL, NULL, '2023-12-03 15:04:44', '2023-12-03 15:04:44', NULL, NULL, NULL, NULL, NULL),
(6, NULL, '$2y$10$xlUUwk5HGP6pf/sRqNxjw.2ex0ZVC0wMzQqZdQso.a0.hQ/sBNStG', 'Husam aldeen odat', NULL, NULL, NULL, 'husam-odatt@outlook.com', NULL, 0, NULL, NULL, '2023-12-03 15:06:11', '2023-12-03 15:06:11', NULL, NULL, NULL, NULL, NULL),
(7, NULL, '$2y$10$O9wms2Vc5DG9KW8vVFuVPubWPTEtinH294FoCHcCmEuC7MJy/kBm.', 'Husam aldeen odat', NULL, NULL, NULL, 'husam-odatkk@outlook.com', NULL, 0, NULL, NULL, '2023-12-03 15:09:01', '2023-12-03 15:09:01', NULL, NULL, NULL, NULL, NULL),
(8, NULL, '$2y$10$tsDxPVJd/e4jdKs1VRmhOe1F563wThjuyjtdWHLggKn3anSHGnJPa', 'Husam aldeen odat', NULL, NULL, NULL, 'husam-odatkk33@outlook.com', NULL, 0, NULL, NULL, '2023-12-03 15:10:33', '2023-12-03 15:10:33', NULL, NULL, NULL, NULL, NULL),
(9, NULL, '$2y$10$jnxrSn8InSKENKDu51CMT.cdkbfHPBhPoXzeX13LYiQFR.j80O2QS', 'Husam aldeen odat', NULL, NULL, NULL, 'husam-odatffffkk@outlook.com', NULL, 0, NULL, NULL, '2023-12-03 15:21:25', '2023-12-03 15:21:25', NULL, NULL, NULL, NULL, NULL),
(10, NULL, '$2y$10$9JHZgeLCY3P8vKDEL0//1OC1zfe0HiAtGrJRatD3p.csNWJTyCJtO', 'Husam aldeen odat', NULL, NULL, NULL, 'husamaldeanaaa00.odat@gmail.com', NULL, 0, NULL, NULL, '2023-12-03 15:45:43', '2023-12-03 15:45:43', NULL, NULL, NULL, NULL, NULL),
(11, NULL, '$2y$10$NFHniuNoAs7gLc4GiQv.V.cMDihjB7ivPQ5pDDqamGlOwksKy7i.S', 'Husam aldeen odat', NULL, NULL, NULL, 'husam-odatkffk@outlook.com', '20231203184846.png', 0, NULL, NULL, '2023-12-03 15:48:14', '2023-12-03 15:48:46', NULL, NULL, NULL, NULL, NULL),
(12, NULL, '$2y$10$PGbaXt1yzT46xZCoiH1LYuopUCB9soiw3fGLYo7flHOQ6Q18jfiTu', 'Husam aldeen odat', NULL, NULL, NULL, 'husam-odatnnnkk@outlook.com', NULL, 0, NULL, NULL, '2023-12-03 16:06:50', '2023-12-03 16:06:50', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_addresses`
--

CREATE TABLE `user_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `addressLine1` varchar(255) DEFAULT NULL,
  `addressLine2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `postalCode` varchar(255) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `userId` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_payments`
--

CREATE TABLE `user_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` bigint(20) UNSIGNED NOT NULL,
  `paymentType` varchar(255) NOT NULL,
  `provider` varchar(255) NOT NULL,
  `accountNo` varchar(255) NOT NULL,
  `expiry` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wish_lists`
--

CREATE TABLE `wish_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` bigint(20) UNSIGNED NOT NULL,
  `productId` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_productid_foreign` (`productId`),
  ADD KEY `carts_userid_foreign` (`userId`),
  ADD KEY `carts_sessionid_foreign` (`sessionId`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_userid_foreign` (`userId`),
  ADD KEY `orders_paymentid_foreign` (`paymentId`),
  ADD KEY `orders_shipmentid_foreign` (`shipmentId`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_products_productid_foreign` (`productId`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_userid_foreign` (`userId`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_categoryid_foreign` (`categoryId`),
  ADD KEY `products_inventoryid_foreign` (`inventoryId`),
  ADD KEY `products_discountid_foreign` (`discountId`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_inventories`
--
ALTER TABLE `product_inventories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_userid_foreign` (`userId`),
  ADD KEY `reviews_productid_foreign` (`productId`);

--
-- Indexes for table `session_carts`
--
ALTER TABLE `session_carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `session_carts_userid_foreign` (`userId`);

--
-- Indexes for table `shipments`
--
ALTER TABLE `shipments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shipments_userid_foreign` (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indexes for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_addresses_userid_foreign` (`userId`);

--
-- Indexes for table `user_payments`
--
ALTER TABLE `user_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_payments_userid_foreign` (`userId`);

--
-- Indexes for table `wish_lists`
--
ALTER TABLE `wish_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wish_lists_userid_foreign` (`userId`),
  ADD KEY `wish_lists_productid_foreign` (`productId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_inventories`
--
ALTER TABLE `product_inventories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `session_carts`
--
ALTER TABLE `session_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipments`
--
ALTER TABLE `shipments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_addresses`
--
ALTER TABLE `user_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_payments`
--
ALTER TABLE `user_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wish_lists`
--
ALTER TABLE `wish_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_productid_foreign` FOREIGN KEY (`productId`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `carts_sessionid_foreign` FOREIGN KEY (`sessionId`) REFERENCES `session_carts` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `carts_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_paymentid_foreign` FOREIGN KEY (`paymentId`) REFERENCES `payments` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_shipmentid_foreign` FOREIGN KEY (`shipmentId`) REFERENCES `shipments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products_productid_foreign` FOREIGN KEY (`productId`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_categoryid_foreign` FOREIGN KEY (`categoryId`) REFERENCES `product_categories` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `products_discountid_foreign` FOREIGN KEY (`discountId`) REFERENCES `discounts` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `products_inventoryid_foreign` FOREIGN KEY (`inventoryId`) REFERENCES `product_inventories` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_productid_foreign` FOREIGN KEY (`productId`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `session_carts`
--
ALTER TABLE `session_carts`
  ADD CONSTRAINT `session_carts_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `shipments`
--
ALTER TABLE `shipments`
  ADD CONSTRAINT `shipments_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD CONSTRAINT `user_addresses_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `user_payments`
--
ALTER TABLE `user_payments`
  ADD CONSTRAINT `user_payments_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `wish_lists`
--
ALTER TABLE `wish_lists`
  ADD CONSTRAINT `wish_lists_productid_foreign` FOREIGN KEY (`productId`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `wish_lists_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
