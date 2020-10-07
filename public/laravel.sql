-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2020 at 09:34 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`) VALUES
(1, 'Electronica', '2020-06-18 22:09:42'),
(2, 'Lo mas vendido', '2020-06-18 22:09:42'),
(3, 'Ropa & Calzado', '2020-06-18 22:10:02'),
(5, 'Gadgets', '2020-06-18 22:50:57'),
(6, 'Smarthones', '2020-06-27 17:14:24');

-- --------------------------------------------------------

--
-- Table structure for table `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `direccion` varchar(2000) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `cantidad` varchar(1000) NOT NULL,
  `origen_pago` varchar(100) NOT NULL,
  `envio` varchar(100) NOT NULL DEFAULT 'Guia No Disponible',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compras`
--

INSERT INTO `compras` (`id`, `id_user`, `direccion`, `status`, `cantidad`, `origen_pago`, `envio`, `created_at`) VALUES
(1, 2, 'Turin 2926 ,Lomas Providencia Estado: Jalisco CP: 44630 - Tel: 3316054147', 0, '11400.98', 'DEVELOPER', 'Guia No Disponible', '2020-06-19 23:20:38');

-- --------------------------------------------------------

--
-- Table structure for table `compras_articulos`
--

CREATE TABLE `compras_articulos` (
  `id` int(11) NOT NULL,
  `compra_id` int(11) NOT NULL,
  `articulo_id` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `price` varchar(10) NOT NULL DEFAULT '0',
  `description` varchar(100) NOT NULL DEFAULT 'Sin Descripcion proporcionada',
  `stock` int(11) NOT NULL DEFAULT 0,
  `id_category` int(11) NOT NULL,
  `img` varchar(3000) NOT NULL DEFAULT 'http://lorempixel.com/400/200',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `description`, `stock`, `id_category`, `img`, `created_at`) VALUES
(4, 'Tenis Nike 90 2019', '3400.99', 'testing description abetc dsdd dedede deddddddd', 0, 3, '1592528151.png', '2020-06-19 00:55:51'),
(5, 'Nickon DLS 2020', '9900.00', 'Camara camara lente lente,Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod te', 0, 1, '1592584512.png', '2020-06-19 16:35:12'),
(6, 'Iphone 8 Plus', '12599.99', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 0, 1, '1592584627.png', '2020-06-19 16:37:07'),
(7, 'Samsung Galaxy s11', '14500.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 0, 1, '1592584716.png', '2020-06-19 16:38:36'),
(8, 'Hostpot HUAWEY', '1500.50', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 0, 1, '1592584867.png', '2020-06-19 16:41:07'),
(9, 'MacBook Air 2020', '24599.99', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 0, 1, '1592584916.png', '2020-06-19 16:41:56'),
(10, 'Playstation 4 Slim', '7999.99', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 0, 1, '1592584953.png', '2020-06-19 16:42:33'),
(11, 'Canon CRK 4500', '8999.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 0, 2, '1592584986.png', '2020-06-19 16:43:06'),
(12, 'MacBook Elite 2020', '39566.90', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 0, 2, '1592585016.png', '2020-06-19 16:43:36'),
(13, 'Audifonos SONY play 220', '780.99', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 0, 5, '1592585201.png', '2020-06-19 16:46:41'),
(14, 'Samsung Tablet Galaxy', '14000.90', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 0, 2, '1592585236.png', '2020-06-19 16:47:16'),
(15, 'Vestido Rosa 2019', '3000.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 0, 3, '1592586052.png', '2020-06-19 17:00:52');

-- --------------------------------------------------------

--
-- Table structure for table `promotion_code`
--

CREATE TABLE `promotion_code` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `code` varchar(100) NOT NULL DEFAULT 'default',
  `porcent` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shoping_cart`
--

CREATE TABLE `shoping_cart` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoping_cart`
--

INSERT INTO `shoping_cart` (`id`, `id_product`, `id_user`, `created_at`) VALUES
(11, 4, 3, '2020-06-20 00:18:30'),
(12, 5, 4, '2020-06-27 17:17:52'),
(13, 6, 4, '2020-06-27 17:17:58'),
(14, 5, 5, '2020-07-14 00:04:20'),
(15, 6, 5, '2020-07-14 22:43:20');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isAdmin` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `isAdmin`, `created_at`, `updated_at`) VALUES
(1, 'Super User Admin', 'christian.padilla.muniz@gmail.com', NULL, '$2y$10$aQsaGawWCsOajhmRfLOX0Og75s3EAtQF4t864w8e5tECUU0niTvVS', NULL, 1, '2020-06-16 00:08:58', '2020-06-16 00:08:58'),
(2, 'Tester Test01 TESTIGN', 'testing@goicoin.com', NULL, '$2y$10$RuvWyuoIiYIVo1st53SGTeo4eExzOFPQB.OJiia2HL7Vc2o5gCn4.', NULL, 0, '2020-06-18 21:10:46', '2020-06-18 21:10:46'),
(3, 'Eva Saray Salazar Saldaña', 'sarasa35@gmail.com', NULL, '$2y$10$hrKvVKFQARqjlWfUhHlQU.zIk3hfcC8UmIKvqTqtsVXTaogQ/Xlze', NULL, 0, '2020-06-20 00:18:23', '2020-06-20 00:18:23'),
(4, 'Dior Soleman man', 'dior@gmail.com', NULL, '$2y$10$BUN1PS.Hf7xZZ7r6ATY9JuM/hmJocvaUIycvfiKVFXKt73.D4Igyi', NULL, 0, '2020-06-27 17:17:15', '2020-06-27 17:17:15'),
(5, 'Eduardo Lecortois', 'testermakingtest@gmail.com', NULL, '$2y$10$IyIFsCnyAg1Ee0i2Mf/mjeyOf8FKC1TMJYEsGNiuvIg600Bml1yF6', NULL, 0, '2020-07-14 00:04:14', '2020-07-14 00:04:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compras_articulos`
--
ALTER TABLE `compras_articulos`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotion_code`
--
ALTER TABLE `promotion_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoping_cart`
--
ALTER TABLE `shoping_cart`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `compras_articulos`
--
ALTER TABLE `compras_articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `promotion_code`
--
ALTER TABLE `promotion_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shoping_cart`
--
ALTER TABLE `shoping_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
