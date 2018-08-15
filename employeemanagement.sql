-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2018 at 04:28 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employeemanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Niaz Mohammad', 'ceo@nexus.co', '$2y$10$8SIXEqD4u9Zq9FzWVxgFrO0LBb8zUpTfXD/rKwoZNPNW0OOi2G9pq', '', '2018-02-22 01:53:29', '2018-02-22 01:53:29');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Android', '2018-02-22 03:10:26', '2018-02-22 03:10:26'),
(3, 'Data Mining', '2018-02-22 03:10:45', '2018-02-22 03:10:45'),
(4, 'Web Development', '2018-02-25 10:49:17', '2018-02-25 10:49:17'),
(5, 'Neural Network', '2018-02-25 10:50:16', '2018-02-25 10:50:16'),
(7, 'AI', '2018-02-27 14:10:29', '2018-02-27 14:10:29');

-- --------------------------------------------------------

--
-- Table structure for table `department_news`
--

DROP TABLE IF EXISTS `department_news`;
CREATE TABLE `department_news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department_news`
--

INSERT INTO `department_news` (`id`, `title`, `department`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Testing News', 'Android', 'i think it\'s work', '2018-02-27 04:06:03', '2018-02-27 04:06:03');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

DROP TABLE IF EXISTS `designations`;
CREATE TABLE `designations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Senior Project Manager', '2018-02-22 03:13:14', '2018-02-22 03:13:14'),
(4, 'Project Leader', '2018-02-22 03:14:31', '2018-02-22 03:14:31'),
(7, 'Team Member', '2018-02-22 03:16:03', '2018-02-22 03:16:03'),
(8, 'System Analyst', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inboxes`
--

DROP TABLE IF EXISTS `inboxes`;
CREATE TABLE `inboxes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `leave_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `headmail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `application` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_leave` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leave_requests`
--

DROP TABLE IF EXISTS `leave_requests`;
CREATE TABLE `leave_requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `headmail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `application` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_requests`
--

INSERT INTO `leave_requests` (`id`, `user_id`, `name`, `department`, `designation`, `headmail`, `title`, `application`, `start_date`, `end_date`, `view`) VALUES
(1, 3, 'Niaz Mohammad', 'Android', 'Senior Project manager', 'sakib@gmail.com', 'Testing Text Editor', 'I need a leave, and it\'s badly needed.', '02/26/2018', '02/27/2018', '0');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 2),
(6, '2014_10_12_100000_create_password_resets_table', 2),
(7, '2018_02_20_041010_create_admins_table', 1),
(8, '2018_02_21_044547_create_departments_table', 2),
(9, '2018_02_21_054946_add_columns_to_users', 2),
(10, '2018_02_22_022007_create_designations_table', 2),
(11, '2018_02_25_085256_create_attendances_table', 3),
(16, '2018_02_25_100401_create_leave_requests_table', 4),
(17, '2018_02_26_170204_create_inboxes_table', 4),
(18, '2018_02_27_070059_create_salaries_table', 5),
(19, '2018_02_27_084649_create_department_news_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

DROP TABLE IF EXISTS `salaries`;
CREATE TABLE `salaries` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salaries`
--

INSERT INTO `salaries` (`id`, `user_id`, `name`, `department`, `designation`, `amount`, `created_at`, `updated_at`) VALUES
(1, 3, 'Niaz Mohammad', 'Android', 'Senior Project Manager', '55,000', '2018-02-27 02:09:05', '2018-02-27 02:09:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `national_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `degree` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institution` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` int(10) UNSIGNED DEFAULT NULL,
  `designation_id` int(10) UNSIGNED DEFAULT NULL,
  `join_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `onLeave` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `existLeave` int(10) UNSIGNED NOT NULL DEFAULT '28',
  `useLeave` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `birthdate`, `image`, `phone`, `national_id`, `current_address`, `city`, `country`, `degree`, `subject`, `institution`, `email`, `password`, `department_id`, `designation_id`, `join_date`, `onLeave`, `existLeave`, `useLeave`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Niaz Mohammad', 'male', '10/10/1991', '1519307985.jpg', '01723630231', '19921210257000244', 'Akhaura, Brahmanbaria', 'Chittagong', 'Bangladesh', 'BSc', 'Information and Communication Technology', 'Comilla University', 'ceo@nexus.co', '$2y$10$TbO9hug7F7R4ouc9Q2CT1OZoFQXfJ50kZgV2MT.Q/fgUZCejjgQVK', 2, 2, '02/23/2018', 'yes', 21, 7, 'UvNTRkFheCHz0evxjjCcTJdCdXfuKTj08AnN3vMMmrtczQbYnPZkmui0HdU6', '2018-02-22 07:59:45', '2018-02-28 02:54:26'),
(4, 'Niaz Mohammad Bhuiyan', 'male', '10/10/1991', '1519542722.jpg', '01674930445', '199112893900333', 'Akhaura, Brahmanbaria', 'Brahmanbaria', 'Bangladesh', 'BSc', 'Information and Communication Technology', 'Comilla University', 'niaz@gmail.com', '$2y$10$Xt8A2hJEd4jSgWXTYRmWLep8ddSpvQNCqTjxLfMDu0P5Xc/SBgLZm', 2, 8, '02/25/2018', 'yes', 28, 0, 'vhUKAhiF8AWHDm9k9lKKa73YEbOy6jWP0uhnpYoUL20O7pL9Nipf7MzcwKT8', '2018-02-25 07:12:02', '2018-02-25 12:58:01'),
(5, 'Nazmus Sakib', 'male', '02/02/1990', '1519557080.jpg', '01777451703', '199112893900333', 'MuradNagar, Comilla', 'Comilla', 'Bangladesh', 'BSc', 'Information and Communication Technology', 'Comilla University', 'sakib@gmail.com', '$2y$10$Bxr5qp3WShrjTLpUfNo5TOngT2YvZ0zUH4AREM9iOeNkGa.JFxg4u', 3, 8, '02/25/2018', 'no', 28, 0, 'ubKMSoT6T7gzablJRgH15I0DSv5fmNSY2Ynq7TiHvqKOAPPHxAqMzkUZIjSG', '2018-02-25 11:11:21', '2018-02-25 12:56:53'),
(6, 'Dixon Halder', 'male', '21/01/1991', '1519557220.jpg', '01674930445', '199112893900333', 'Kawarchor, Barisal', 'Barisal', 'Bangladesh', 'BSc', 'Computer Science and Engineering', 'Comilla University', 'dixon@gmail.com', '$2y$10$QFV2VSDikHbJFoUR3M9PvOpdnQIC6z2RKhsnUb5LiL6aNnTkG0RxG', 4, 8, '02/25/2018', 'no', 28, 0, NULL, '2018-02-25 11:13:40', '2018-02-25 12:57:18'),
(7, 'Asif Kibria', 'male', '10/10/1991', '1519625222.jpg', '01723630231', '199112893900333', 'Mohakhali, Dhaka', 'Dhaka', 'Bangladesh', 'BSc', 'Computer Science and Engineering', 'Comilla University', 'asif@gmail.com', '$2y$10$0ceOy/XbJLfb623Bhf8Ds.uQLc5EXyFKiGQBdsYkvQCWNXzz9xovy', 2, 2, NULL, 'no', 28, 0, NULL, '2018-02-26 06:07:03', '2018-02-26 06:07:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_news`
--
ALTER TABLE `department_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inboxes`
--
ALTER TABLE `inboxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_requests`
--
ALTER TABLE `leave_requests`
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
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_department_id_foreign` (`department_id`),
  ADD KEY `users_designation_id_foreign` (`designation_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `department_news`
--
ALTER TABLE `department_news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `inboxes`
--
ALTER TABLE `inboxes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leave_requests`
--
ALTER TABLE `leave_requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_designation_id_foreign` FOREIGN KEY (`designation_id`) REFERENCES `designations` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
