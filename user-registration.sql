-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 03, 2020 at 07:54 PM
-- Server version: 10.1.44-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.3.23-4+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user-registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(5, '2020-11-01-175909', 'App\\Database\\Migrations\\AddUser', 'default', 'App', 1604311481, 1),
(6, '2020-11-01-180037', 'App\\Database\\Migrations\\AddRole', 'default', 'App', 1604311481, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(8, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `new_email` varchar(191) DEFAULT NULL,
  `password_hash` varchar(191) NOT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `address` varchar(191) DEFAULT NULL,
  `activate_hash` varchar(191) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` bigint(20) DEFAULT NULL,
  `updated_at` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `new_email`, `password_hash`, `phone_number`, `address`, `activate_hash`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 2, 'Mohamed Alaa', 'mohamedalaa253694@yahoo.com', 'mohamedalaa253695@yahoo.com', '$2y$10$rkYiPqgXn9WPZnH3valQaerFWtUZNZrnPeO56dHQgXXRWEkdoZ4J6', 1152400056, 'sheraton', 'Zva790JYsywTDCbu8tlKV31S2eWLXINr', 1, 1604311615, 1604422890),
(2, 2, 'foo', 'foo@example.com', NULL, '$2y$10$5.WQyg4H5LWsuTNKUEaRSuRtKMihHXSbgfRILDyp.z.8PR9Tr/iX6', 1152400096, NULL, '', 0, NULL, NULL),
(4, 2, 'ahmed', 'ahmed@example.com', NULL, '$2y$10$5.WQyg4H5LWsuTNKUEaRSuRtKMihHXSbgfRILDyp.z.8PR9Tr/iX6', 1152699956, 'sheraton', NULL, 1, NULL, NULL),
(5, 2, 'memo', 'memo@example.com', '', '$2y$10$5.WQyg4H5LWsuTNKUEaRSuRtKMihHXSbgfRILDyp.z.8PR9Tr/iX6', 1165400080, '1st-settelment', NULL, 1, NULL, NULL),
(6, 0, 'mooo', 'mo@example.com', NULL, '$2y$10$vM3StCIdKu/J/S1gpd/A0O3F6Tmhmqi1r9wQ3dp7nw1GsNL8Sn4Zi', 0, '', 'C5KYEitTo8AebFq2mz7Gk4cBp9j03gNw', 1, 1604398226, 1604418229),
(9, 0, 'mohamed Ahmed', 'mohamed.alaa@mohameddemos.com', NULL, '$2y$10$s3NSwQ71WvvmFQe/yQ5yUOdUJvU/uvo7YsWvagpcRy13hKhNAOO1C', 1152400056, 'sheraton', 'FK4perHsmaU5Gj3IAiRLS0Ykqd6XZPnx', 0, 1604423641, 1604423822);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
