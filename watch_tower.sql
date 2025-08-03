-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2025 at 04:34 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `watch_tower`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `domain_id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `reference` varchar(25) NOT NULL,
  `post_title` varchar(150) NOT NULL,
  `post_description` text NOT NULL,
  `post_content` text NOT NULL,
  `post_unique` varchar(150) NOT NULL,
  `post_image` text NOT NULL,
  `post_type` enum('user','admin') NOT NULL DEFAULT 'user',
  `post_views` int(11) NOT NULL DEFAULT 0,
  `post_status` enum('pending','approved','disapproved','published','removed') NOT NULL DEFAULT 'approved',
  `is_seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `cate_id` int(11) NOT NULL,
  `reference` varchar(10) NOT NULL,
  `cate_name` varchar(100) NOT NULL,
  `cate_slug` varchar(100) NOT NULL,
  `cate_cost` double NOT NULL DEFAULT 35,
  `cate_free` double NOT NULL,
  `is_active` enum('true','false') NOT NULL DEFAULT 'true',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_category`
--

INSERT INTO `post_category` (`cate_id`, `reference`, `cate_name`, `cate_slug`, `cate_cost`, `cate_free`, `is_active`, `created_at`, `updated_at`) VALUES
(1, '436FE9J3AZ', 'AI', 'ai', 45, 15, 'true', '2024-11-07 21:29:55', '2025-07-14 20:39:22'),
(2, 'EU9YRAKK1U', 'Nature', 'nature', 15, 5, 'true', '2024-11-07 22:22:49', '2025-07-14 20:39:26'),
(3, 'MZ5HHKY22J', 'Plant', 'plant', 10, 3, 'true', '2024-11-07 22:22:49', '2025-07-14 20:39:30'),
(4, 'EYOZVWVYB7', 'Interior', 'interior', 25, 5, 'true', '2024-11-07 22:22:49', '2025-07-14 20:39:35'),
(5, 'F69TH0JAQ7', 'Portrait', 'portrait', 35, 3, 'true', '2024-11-07 22:22:49', '2025-07-14 20:39:38'),
(6, 'I5YV6AVWKS', 'Space', 'space', 35, 2, 'true', '2024-11-07 22:22:49', '2025-07-14 20:39:41'),
(7, 'DM326BAW4Z', 'Texture', 'texture', 15, 4, 'true', '2024-11-07 22:22:49', '2025-07-14 20:39:47'),
(14, '71O2Z6GDLE', 'gggg', 'sfgdfg', 24, 111, 'true', '2025-07-31 00:15:52', '2025-07-30 21:19:34');

-- --------------------------------------------------------

--
-- Table structure for table `post_links`
--

CREATE TABLE `post_links` (
  `link_id` int(11) NOT NULL,
  `reference` varchar(20) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `link_index` int(11) NOT NULL,
  `link_cost` double NOT NULL,
  `link_url` varchar(255) NOT NULL,
  `link_anchor` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_meta`
--

CREATE TABLE `post_meta` (
  `meta_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `meta_title` varchar(120) NOT NULL,
  `meta_description` varchar(200) NOT NULL,
  `meta_keywords` varchar(150) NOT NULL,
  `meta_canonical` varchar(200) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_payment`
--

CREATE TABLE `post_payment` (
  `pay_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reference` varchar(20) NOT NULL,
  `pay_total` double NOT NULL,
  `pay_type` enum('post','insertion') NOT NULL DEFAULT 'post',
  `pay_links` text NOT NULL,
  `pay_status` enum('unpaid','paid','cancelled') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `reference` varchar(15) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `avatar` text NOT NULL,
  `join_via` enum('google','facebook') NOT NULL,
  `is_active` enum('true','false') NOT NULL DEFAULT 'true',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `reference`, `first_name`, `last_name`, `email`, `avatar`, `join_via`, `is_active`, `created_at`, `updated_at`) VALUES
(1, '111304177786895', 'Oderinwale', 'Femi', 'oderinwalefemi150@gmail.com', 'https://lh3.googleusercontent.com/a/ACg8ocKdJ6LHyaY4uf125hqFVs6D_GLWBh-U7CQq5etdtIibIybmaT5u=s96-c', 'google', 'true', '2025-08-02 16:35:51', '2025-08-02 16:35:51'),
(2, '108756012026965', 'Oderinwale', 'Oluwafemi', 'oderinwalefm@gmail.com', 'https://lh3.googleusercontent.com/a/ACg8ocLdck-aS5wZh3rItY83t4IkYXTBX_5P4mBn0vyyy0NycAddMQ=s96-c', 'google', 'true', '2025-08-02 21:32:10', '2025-08-02 21:32:10');

-- --------------------------------------------------------

--
-- Table structure for table `users_author`
--

CREATE TABLE `users_author` (
  `author_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `idx_post_unique` (`post_unique`) USING BTREE,
  ADD KEY `idx_user_cate` (`user_id`,`cate_id`),
  ADD KEY `idx_reference` (`reference`),
  ADD KEY `idx_post_title` (`post_title`),
  ADD KEY `idx_post_status` (`post_status`),
  ADD KEY `idx_created_at` (`created_at`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`cate_id`),
  ADD UNIQUE KEY `uniq_reference` (`reference`),
  ADD KEY `idx_cate_name` (`cate_name`),
  ADD KEY `idx_cate_slug` (`cate_slug`),
  ADD KEY `idx_is_active` (`is_active`),
  ADD KEY `idx_created_at` (`created_at`);

--
-- Indexes for table `post_links`
--
ALTER TABLE `post_links`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `idx_user_post` (`post_id`),
  ADD KEY `idx_reference` (`reference`),
  ADD KEY `idx_link_url` (`link_url`),
  ADD KEY `idx_created_at` (`created_at`);

--
-- Indexes for table `post_meta`
--
ALTER TABLE `post_meta`
  ADD PRIMARY KEY (`meta_id`);

--
-- Indexes for table `post_payment`
--
ALTER TABLE `post_payment`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `idx_user_post` (`post_id`),
  ADD KEY `idx_reference` (`reference`),
  ADD KEY `idx_pay_status` (`pay_status`),
  ADD KEY `idx_pay_type` (`pay_type`),
  ADD KEY `idx_created_at` (`created_at`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_author`
--
ALTER TABLE `users_author`
  ADD PRIMARY KEY (`author_id`),
  ADD KEY `idx_user_id` (`user_id`),
  ADD KEY `idx_name` (`name`),
  ADD KEY `idx_created_at` (`created_at`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `post_links`
--
ALTER TABLE `post_links`
  MODIFY `link_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_meta`
--
ALTER TABLE `post_meta`
  MODIFY `meta_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_payment`
--
ALTER TABLE `post_payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_author`
--
ALTER TABLE `users_author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
