-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 09:16 AM
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
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `desertfood_models`
--

CREATE TABLE `desertfood_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `desertfood_models`
--

INSERT INTO `desertfood_models` (`id`, `price`, `name`, `description`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 50, 'Bhapa Doi', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 1, '2023-04-24 02:16:37', NULL),
(2, 80, 'Mohan Bhog (1 Pc)', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 1, '2023-04-24 02:17:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `drinksfood_models`
--

CREATE TABLE `drinksfood_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drinksfood_models`
--

INSERT INTO `drinksfood_models` (`id`, `price`, `name`, `description`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 50, 'Margarita', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 1, '2023-04-24 02:18:38', NULL),
(2, 80, 'Cosmopolitan', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 1, '2023-04-24 02:19:04', NULL);

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
-- Table structure for table `hero_section_models`
--

CREATE TABLE `hero_section_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bannerImg` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `deleted_at` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hero_section_models`
--

INSERT INTO `hero_section_models` (`id`, `bannerImg`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1166291958.jpg', 1, '2023-04-20', '2023-04-11 10:05:02', '2023-04-20 01:15:47'),
(2, '1097170495.jpg', 1, '2023-04-20', '2023-04-12 01:00:28', '2023-04-20 01:11:35'),
(4, '591550482.jpg', 1, '2023-04-20', '2023-04-12 01:01:37', '2023-04-20 01:11:38'),
(5, '283140310.webp', 1, NULL, '2023-04-20 01:15:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mainfood_models`
--

CREATE TABLE `mainfood_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mainfood_models`
--

INSERT INTO `mainfood_models` (`id`, `price`, `name`, `description`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 850, 'Shorshe Ilish (Hilsa Fish with Mustard Curry)', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 1, '2023-04-24 02:11:39', NULL),
(2, 350, 'Kacchi Biriyani (Mutton Biriyani)', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 1, '2023-04-24 02:12:15', NULL),
(3, 250, 'Bhuna Khichuri with Dim Bhaji (Yellow Rice with Omelette)', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 1, '2023-04-24 02:13:10', NULL),
(4, 180, 'Sheek Kebab with Naan (Kebab with Flatbread)', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 1, '2023-04-24 02:13:49', NULL),
(5, 150, 'Dal (Lentil Soup)', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 1, '2023-04-24 02:14:28', NULL),
(6, 80, 'Bhorta (Mashed Vegetables with Spices)', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 1, '2023-04-24 02:15:03', NULL);

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
(6, '2023_04_11_141959_create_hero_section_models_table', 2),
(8, '2023_04_20_073207_create_rooms_models_table', 3),
(9, '2023_04_22_064442_create_reservation_models_table', 4),
(10, '2023_04_24_071821_create_mainfood_models_table', 5),
(11, '2023_04_24_074350_create_desertfood_models_table', 6),
(12, '2023_04_24_074704_create_drinksfood_models_table', 7);

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
-- Table structure for table `reservation_models`
--

CREATE TABLE `reservation_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_phone` int(11) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `adult_number` int(11) NOT NULL,
  `children_number` int(11) NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL,
  `notes` varchar(255) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservation_models`
--

INSERT INTO `reservation_models` (`id`, `room_id`, `customer_name`, `customer_email`, `customer_phone`, `customer_address`, `adult_number`, `children_number`, `check_in_date`, `check_out_date`, `notes`, `status`, `created_at`, `updated_at`) VALUES
(3, 3, 'Pappu Saha', 'sa@gmail.com', 101324576, 'dhaka', 3, 2, '2023-04-23', '2023-04-24', 'Please, Book the room', 'Open', '2023-04-22 06:14:43', '2023-04-22 10:12:58'),
(4, 4, 'Anup saha', 'Anup@gmail.com', 1678987867, 'Khulna', 2, 2, '2023-04-24', '2023-04-26', 'Please, Book the room', 'Booked', '2023-04-22 09:19:00', '2023-04-22 10:22:58');

-- --------------------------------------------------------

--
-- Table structure for table `rooms_models`
--

CREATE TABLE `rooms_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `roomNum` int(11) NOT NULL,
  `roomPrice` int(11) NOT NULL,
  `roomPerson` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `ac_nonac` varchar(255) NOT NULL,
  `booking_date` date DEFAULT NULL,
  `checking_date` date DEFAULT NULL,
  `checkout_date` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `creat_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms_models`
--

INSERT INTO `rooms_models` (`id`, `name`, `roomNum`, `roomPrice`, `roomPerson`, `description`, `ac_nonac`, `booking_date`, `checking_date`, `checkout_date`, `status`, `location`, `picture`, `creat_by`, `created_at`, `updated_at`) VALUES
(1, 'Couple Room', 201, 4000, 2, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'AC', NULL, NULL, NULL, 'Open', 'Second', 'couple-room-1560496.jpeg', 1, '2023-04-20 09:07:47', NULL),
(2, 'Family Room', 301, 6000, 4, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'AC', NULL, NULL, NULL, 'Open', 'Third', 'family-room-389219.jpg', 1, '2023-04-20 09:50:50', NULL),
(3, 'Presidential Room', 501, 25000, 4, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'AC', NULL, NULL, NULL, 'Open', 'Fifth', 'presidential-room-1677766.jpg', 1, '2023-04-20 09:53:56', '2023-04-22 10:12:58'),
(4, 'Couple Room 202', 202, 3000, 2, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'Non_AC', NULL, NULL, NULL, 'Booked', 'Second', 'couple-room-202-1589171.jpg', 1, '2023-04-21 04:48:25', '2023-04-22 10:22:58'),
(6, 'Couple Room 203', 203, 4500, 2, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here,', 'AC', NULL, NULL, NULL, 'Open', 'Second', 'couple-room-203-1133899.jpg', 1, '2023-04-21 05:02:33', NULL),
(7, 'Family Room 302', 302, 6500, 4, 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'AC', NULL, NULL, NULL, 'Open', 'Third', 'family-room-302-858493.webp', 1, '2023-04-21 05:11:06', NULL),
(8, 'Family Room 303', 303, 7000, 4, 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'AC', NULL, NULL, NULL, 'Open', 'Third', 'family-room-303-1073999.jpg', 1, '2023-04-21 05:12:55', NULL);

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pappu saha', 'sahapappu018@gmail.com', NULL, '$2y$10$3gQrs.lvNywT5sbZ1LSoVOefUu4AJGVIHa6CGQn6QUbkinpe3JIDC', NULL, '2023-04-11 07:53:45', '2023-04-11 07:53:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desertfood_models`
--
ALTER TABLE `desertfood_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drinksfood_models`
--
ALTER TABLE `drinksfood_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hero_section_models`
--
ALTER TABLE `hero_section_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mainfood_models`
--
ALTER TABLE `mainfood_models`
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
-- Indexes for table `reservation_models`
--
ALTER TABLE `reservation_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms_models`
--
ALTER TABLE `rooms_models`
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
-- AUTO_INCREMENT for table `desertfood_models`
--
ALTER TABLE `desertfood_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `drinksfood_models`
--
ALTER TABLE `drinksfood_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hero_section_models`
--
ALTER TABLE `hero_section_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mainfood_models`
--
ALTER TABLE `mainfood_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation_models`
--
ALTER TABLE `reservation_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rooms_models`
--
ALTER TABLE `rooms_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
