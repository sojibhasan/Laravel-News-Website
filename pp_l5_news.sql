-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2018 at 07:08 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pp_l5_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `admin`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) UNSIGNED NOT NULL,
  `cat_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `created_at`, `updated_at`) VALUES
(1, 'et', '2018-11-14 07:16:15', '2018-11-14 07:16:15'),
(2, 'modi', '2018-11-14 07:16:15', '2018-11-14 07:16:15'),
(3, 'animi', '2018-11-14 07:16:15', '2018-11-14 07:16:15'),
(4, 'consectetur', '2018-11-14 07:16:15', '2018-11-14 07:16:15'),
(5, 'quos', '2018-11-14 07:16:15', '2018-11-14 07:16:15'),
(6, 'dicta', '2018-11-14 07:16:15', '2018-11-14 07:16:15'),
(7, 'beatae', '2018-11-14 07:16:15', '2018-11-14 07:16:15'),
(8, 'quidem', '2018-11-14 07:16:15', '2018-11-14 07:16:15'),
(9, 'id', '2018-11-14 07:16:15', '2018-11-14 07:16:15'),
(10, 'inventore', '2018-11-14 07:16:15', '2018-11-14 07:16:15'),
(11, 'qui', '2018-11-14 07:16:15', '2018-11-14 07:16:15'),
(12, 'odit', '2018-11-14 07:16:15', '2018-11-14 07:16:15'),
(13, 'non', '2018-11-14 07:16:15', '2018-11-14 07:16:15'),
(14, 'id', '2018-11-14 07:16:15', '2018-11-14 07:16:15'),
(15, 'laudantium', '2018-11-14 07:16:16', '2018-11-14 07:16:16'),
(16, 'voluptates', '2018-11-14 07:16:16', '2018-11-14 07:16:16'),
(17, 'minus', '2018-11-14 07:16:16', '2018-11-14 07:16:16'),
(18, 'non', '2018-11-14 07:16:16', '2018-11-14 07:16:16'),
(19, 'aut', '2018-11-14 07:16:16', '2018-11-14 07:16:16'),
(20, 'corporis', '2018-11-14 07:16:16', '2018-11-14 07:16:16');

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
(3, '2018_11_14_122539_create_news_table', 1),
(4, '2018_11_14_123205_create_categories_table', 2),
(5, '2018_11_17_134219_create_admins_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `news_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `cat_id`, `news_title`, `news_desc`, `news_img`, `created_at`, `updated_at`) VALUES
(1, 6, 'Corporis enim et expedita natus aut nihil repellendus.', 'Quae velit eius amet fugit. Quae et rem nihil repellat. Laboriosam corrupti nisi earum rem nihil. Aut eum et tempora pariatur doloribus amet.', '05c4190646c52935f23d7e81ddaf6f71.jpg', '2018-11-14 07:18:42', '2018-11-14 07:18:42'),
(2, 4, 'Tenetur sit adipisci eum aliquam.', 'Ut illo at repellat est. Vel labore aliquid aspernatur reprehenderit quam quibusdam itaque. Reprehenderit recusandae saepe aut omnis repellendus.', 'faaf097f0f6cf7c233cc55f3795818ca.jpg', '2018-11-14 07:18:42', '2018-11-14 07:18:42'),
(3, 17, 'In voluptatem vero quas et.', 'Rerum libero molestiae cupiditate vel. Tenetur ullam eos consequuntur tempora enim. Qui cupiditate vitae in earum corrupti consectetur.', 'eb9c88ce6d5b6f5cd1df8310a15b590a.jpg', '2018-11-14 07:18:42', '2018-11-14 07:18:42'),
(4, 10, 'Aut ex itaque voluptatem omnis soluta minima rerum.', 'Aut et voluptatem facilis quia non. Ullam reprehenderit consequatur sunt. Reiciendis ipsam occaecati ratione laudantium fuga dolorem. Similique ut in et deleniti atque soluta.', 'c339cd0378487c31b264052747757c3a.jpg', '2018-11-14 07:18:42', '2018-11-14 07:18:42'),
(5, 16, 'Enim sed quia eveniet quisquam similique aut facere.', 'Hic rerum amet vitae veritatis ducimus numquam. Tempore officiis et quidem amet nostrum illo. Aut et excepturi porro est architecto unde aliquam.', '565f7921e2b03996d10ae14d16b94fb9.jpg', '2018-11-14 07:18:42', '2018-11-14 07:18:42'),
(6, 1, 'Sint vitae perferendis eos.', 'Id ab omnis consequatur in voluptatibus qui velit. Voluptatem perferendis sit occaecati similique et quo esse. Natus molestias sapiente autem qui fuga voluptas et.', '281fc60d879ca2d7f74ea26baed8cc75.jpg', '2018-11-14 07:18:42', '2018-11-17 05:03:10'),
(7, 5, 'Non doloremque provident voluptas iusto repellat.', 'Sint quo similique et aspernatur magni maxime omnis. Incidunt maxime sint magni corporis.', 'd0496f31832a4539316c00853bec5904.jpg', '2018-11-14 07:18:43', '2018-11-14 07:18:43'),
(8, 7, 'Voluptas at enim deserunt cum id.', 'Eum quos qui labore qui voluptatem qui. Eum eveniet aliquid ipsam fugiat. Laboriosam ab est quis velit quis culpa et voluptate. Iusto ullam et sapiente ullam.', '741e3c2444fbba3a271f2e56f4a8649c.jpg', '2018-11-14 07:18:43', '2018-11-14 07:18:43'),
(9, 15, 'Sunt ea omnis neque dolores officiis voluptatibus velit.', 'Maiores blanditiis rerum saepe autem quaerat architecto. Esse possimus ut voluptas neque distinctio soluta. Commodi autem consequatur at voluptas perspiciatis.', '890c5e419f3230cf8797e88dca9d2984.jpg', '2018-11-14 07:18:43', '2018-11-14 07:18:43'),
(10, 20, 'Dignissimos aliquid sunt voluptatem dolore nulla occaecati.', 'Temporibus in repellendus id est delectus. Quo voluptatibus ut voluptate ducimus necessitatibus minus. Quidem dolore quaerat similique distinctio laudantium.', '1e2a934c27b243cf9a3cee6f67c270fd.jpg', '2018-11-14 07:18:43', '2018-11-14 07:18:43'),
(11, 5, 'Mollitia voluptas nulla eum iure voluptatem nam quaerat.', 'Et veniam explicabo non reiciendis omnis ea. Dignissimos omnis optio quas id quis ut. Voluptates repudiandae quis aspernatur esse nesciunt autem.', '73b7c23c41e820eeee159018d250deb9.jpg', '2018-11-14 07:18:43', '2018-11-14 07:18:43'),
(12, 12, 'Explicabo non sit qui dolorum nihil.', 'Velit sed eligendi fugit et. In voluptas debitis qui eveniet ut. Sint optio deserunt exercitationem modi tenetur dolor dolorem ut. Dolores est repellendus voluptatum hic vero provident aliquid.', '162c52141aee60be8c624265baf77a4e.jpg', '2018-11-14 07:18:43', '2018-11-14 07:18:43'),
(13, 17, 'Voluptatem modi quis esse ut omnis ducimus.', 'Nobis hic incidunt quia qui quod et saepe. Id nisi reiciendis quis et id. Ea et iusto reprehenderit facere expedita.', '6d8b9cb6540ef1cbc8598a0cc22ae4ee.jpg', '2018-11-14 07:18:43', '2018-11-14 07:18:43'),
(15, 5, 'Blanditiis cupiditate aut iusto.', 'Eum sit magni voluptatibus earum blanditiis. Aspernatur at eveniet eius enim distinctio voluptas.', 'a710d22de668b7c3a887cc76f75e7cb0.jpg', '2018-11-14 07:18:43', '2018-11-14 07:18:43'),
(16, 15, 'Voluptatem est veniam veritatis error nobis.', 'Esse id corrupti et et. Alias corrupti ut id neque amet amet est. Eum vitae dolores perspiciatis.', 'd908fb7ff7863865592bb3b96c28690e.jpg', '2018-11-14 07:18:43', '2018-11-14 07:18:43'),
(17, 6, 'Delectus repudiandae vitae deleniti consequuntur.', 'Atque officiis ipsum necessitatibus ea similique culpa nemo. Qui aspernatur aliquid dolores quod aliquam. Enim quas pariatur placeat debitis.', 'd06fcb3845c9846174ee0a272ee37136.jpg', '2018-11-14 07:18:43', '2018-11-14 07:18:43'),
(18, 14, 'Ut veniam quisquam molestiae tempore qui omnis.', 'Ab ipsa dolores quia non et exercitationem ducimus beatae. Labore non eius et et voluptas. Sed sequi non sint. Ipsum et a aut. Nobis nihil quia distinctio necessitatibus quae quia.', 'e3e0ee37b75e57906352f13eb32d88e3.jpg', '2018-11-14 07:18:43', '2018-11-14 07:18:43'),
(19, 17, 'Eveniet iste placeat laudantium assumenda molestiae ad.', 'Consequatur amet explicabo rerum quia. Qui omnis ab ab sed quis aspernatur. Optio ut voluptates esse. Quas doloremque aut esse illum repellendus rerum.', 'b75f99750c3c8215d0d463515653a778.jpg', '2018-11-14 07:18:43', '2018-11-14 07:18:43'),
(20, 10, 'Iusto ullam ut labore architecto.', 'Ea provident voluptatem est animi. Dolorem sit aut laborum aut quisquam rerum ut. Nesciunt enim necessitatibus inventore pariatur cupiditate.', '2596cc580e890b52f54887674a11cd75.jpg', '2018-11-14 07:18:43', '2018-11-14 07:18:43'),
(22, 1, 'Testing news 1', 'Testing news 1', '1542450984.jpg', '2018-11-17 04:53:40', '2018-11-17 05:06:24'),
(23, 2, 'This is another message', 'This is another description', '1542460900.png', '2018-11-17 07:50:58', '2018-11-17 07:51:40');

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
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
