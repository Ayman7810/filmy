-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql208.infinityfree.com
-- Generation Time: 01 مايو 2025 الساعة 16:17
-- إصدار الخادم: 10.6.19-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_38880612_filmy`
--

-- --------------------------------------------------------

--
-- بنية الجدول `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(7, 'Inventore est velit', '1740689328-BU320935_11fdc558.jpg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney', 2, '2025-02-27 17:26:34', '2025-03-31 20:50:34'),
(11, 'Placeat earum quia', '1740690129-6673a7a8b0347ac3a6705cc47f79f118969d56f6_med.jpg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney', 21, '2025-02-27 18:02:09', '2025-02-27 19:36:24'),
(15, 'Aut deserunt vero', '1743462176-blog3.png', 'Quo magna similique commodo dolore enim consequatur vel aut saepe dolore est', 23, '2025-03-31 19:42:44', '2025-03-31 20:02:56');

-- --------------------------------------------------------

--
-- بنية الجدول `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'genre', '2025-02-26 13:38:46', '2025-02-26 13:38:46'),
(2, 'action', '2025-02-26 13:38:46', '2025-02-26 13:38:46'),
(3, 'adventure', '2025-02-26 13:38:46', '2025-02-26 13:38:46'),
(4, 'comedy', '2025-02-26 13:38:46', '2025-02-26 13:38:46'),
(5, 'crime', '2025-02-26 13:38:46', '2025-02-26 13:38:46'),
(6, 'detective', '2025-02-26 13:38:46', '2025-02-26 13:38:46');

-- --------------------------------------------------------

--
-- بنية الجدول `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `review` text NOT NULL,
  `rating` varchar(255) NOT NULL,
  `movie_id` bigint(20) UNSIGNED DEFAULT NULL,
  `blog_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `review`, `rating`, `movie_id`, `blog_id`, `created_at`, `updated_at`) VALUES
(1, 'Demetria Ruiz', 'mobaqi@mailinator.com', 'Est veritatis proide', '4', 32, NULL, '2025-02-27 19:21:28', '2025-02-27 19:21:28'),
(2, 'Jesse Calhoun', 'mafuj@mailinator.com', 'Odio accusamus perfe', '1', 32, NULL, '2025-02-27 19:21:51', '2025-02-27 19:21:51'),
(3, 'Deborah Wilson', 'hysyn@mailinator.com', 'Beatae ipsam officia', '2', NULL, 7, '2025-02-27 19:22:37', '2025-02-27 19:22:37'),
(4, 'Jamal Carson', 'bupefyjahi@mailinator.com', 'Dicta quis nostrud d', '10', NULL, 7, '2025-02-27 19:22:54', '2025-02-27 19:22:54'),
(5, 'Aristotle Daniels', 'huhanywovu@mailinator.com', 'Non commodi architec', '6', NULL, 11, '2025-02-27 19:32:07', '2025-02-27 19:32:07'),
(6, 'Ingrid Mclaughlin', 'fywe@mailinator.com', 'Maiores nihil est ut', '1', 31, NULL, '2025-02-27 19:34:45', '2025-02-27 19:34:45'),
(7, 'Kyle Hubbard', 'mybigik@mailinator.com', 'Dolor ea ut ut est', '6', 24, NULL, '2025-02-27 19:54:58', '2025-02-27 19:54:58'),
(8, 'Rana Craig', 'jepaniqin@mailinator.com', 'Labore aut consequatur cumque ea qui vel in', '4', NULL, 15, '2025-03-31 20:08:08', '2025-03-31 20:08:08'),
(9, 'Cameran Stone', 'zimec@mailinator.com', 'Voluptatem Tenetur aut tempor facere aliquam omnis aut suscipit duis aperiam minim ea consectetur u', '2', NULL, 15, '2025-03-31 20:08:38', '2025-03-31 20:08:38'),
(10, 'Colby Owen', 'nyruqag@mailinator.com', 'Ad consequatur Molestiae in ut quis quo similique quo eligendi Nam', '1', NULL, 7, '2025-03-31 20:50:02', '2025-03-31 20:50:02'),
(11, 'Daquan Ewing', 'sojynopyzu@mailinator.com', 'Ut deserunt consequatur sed quia repellendus Vitae dolorum ut sint excepturi dolor ut nihil volupt', '10', NULL, 11, '2025-04-04 00:51:19', '2025-04-04 00:51:19'),
(12, 'Cullen Cortez', 'miga@mailinator.com', 'Harum duis iste qui porro a est nesciunt magnam', '9', NULL, 7, '2025-04-19 10:02:51', '2025-04-19 10:02:51'),
(13, 'Maxine Cleveland', 'vaniry@mailinator.com', 'Laborum Aperiam ut voluptatem est et incididunt natus modi commodo natus sit voluptatibus consequa', '4', 33, NULL, '2025-04-30 05:55:22', '2025-04-30 05:55:22');

-- --------------------------------------------------------

--
-- بنية الجدول `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2025_02_26_162051_add_status_to_users_table', 2),
(7, '2025_02_26_163406_create_categories_table', 3),
(8, '2025_02_26_164918_create_movies_table', 4),
(9, '2025_02_26_234518_create_blogs_table', 5),
(12, '2025_02_27_210831_create_comments_table', 6);

-- --------------------------------------------------------

--
-- بنية الجدول `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `movies`
--

INSERT INTO `movies` (`id`, `name`, `description`, `image`, `status`, `rating`, `time`, `user_id`, `category_id`, `created_at`, `updated_at`) VALUES
(20, 'Gretchen Farley', 'Lead text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1740611669-mv-item12.jpg', 'Comming soon', 8, '10 min', 2, 2, '2025-02-26 20:14:29', '2025-02-27 19:53:55'),
(21, 'Charlotte Olsen', 'Lead text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1740611685-mv-it5.jpg', 'Showtime', 6, '90 min', 2, 6, '2025-02-26 20:14:45', '2025-02-26 20:14:45'),
(22, 'Colleen Foreman', 'Lead text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1740611700-film3.jpg', 'Showtime', 5, '41 min', 2, 6, '2025-02-26 20:15:00', '2025-02-26 20:15:00'),
(23, 'Deanna Riley', 'Lead text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1740611717-film6.jpg', 'Showtime', 6, '13 min', 2, 1, '2025-02-26 20:15:17', '2025-02-26 20:15:17'),
(24, 'Rina Edwards', 'Lead text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1740611733-mv3.jpg', 'Showtime', 5, '29 min', 2, 2, '2025-02-26 20:15:33', '2025-02-26 20:15:33'),
(25, 'Mari Whitley', 'Lead text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1740611750-mv2.jpg', 'In archive', 3, '30 min', 2, 6, '2025-02-26 20:15:50', '2025-02-26 20:15:50'),
(26, 'Felicia Howard', 'Lead text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1740611767-mv-it10.jpg', 'Comming soon', 10, '53 min', 2, 5, '2025-02-26 20:16:07', '2025-02-26 20:16:07'),
(27, 'Kyle Pitts', 'Lead text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1740611801-mv-item10.jpg', 'In archive', 7, '13 min', 2, 3, '2025-02-26 20:16:41', '2025-02-26 20:16:41'),
(28, 'Kaden Charles', 'Lead text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1740611815-mv-item4.jpg', 'In archive', 5, '20 min', 2, 4, '2025-02-26 20:16:55', '2025-02-26 20:17:29'),
(29, 'Harriet Whitehead', 'Lead text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1740611875-mv-item1.jpg', 'In archive', 5, '50 min', 2, 1, '2025-02-26 20:17:55', '2025-02-26 20:17:55'),
(30, 'Charissa Salinas', 'Lead text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1740611892-mv-item12.jpg', 'In archive', 4, '34 min', 2, 1, '2025-02-26 20:18:12', '2025-02-26 20:18:12'),
(31, 'Mollie White', 'Quia eum eu eveniet', '1740611930-mv-it5.jpg', 'In archive', 5, '89 min', 2, 6, '2025-02-26 20:18:50', '2025-02-26 20:18:50'),
(32, 'Addison Knapp', 'Lead text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1740611946-mv-item6.jpg', 'In archive', 10, '8 min', 2, 4, '2025-02-26 20:19:06', '2025-02-26 20:19:06'),
(33, 'Gillian Montgomery', 'Lead text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1740611961-mv-it12.jpg', 'Showtime', 9, '76 min', 2, 4, '2025-02-26 20:19:21', '2025-02-26 20:19:21');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Rebekah Mccarty', 'jenarysud@mailinator.com', NULL, '$2y$12$oueNOY7ivKY71qqZ98ES9OUkdGWQATsnoLNkDlN9Wjv8bWCamwIhi', NULL, '2025-02-26 11:53:33', '2025-02-26 11:53:33', ''),
(2, 'ايمن الاوزري', 'e@gmail.com', NULL, '123456', NULL, '2025-02-26 11:57:29', '2025-02-26 11:57:29', '1'),
(3, 'Neve House', 'rolumipuh@mailinator.com', NULL, '$2y$12$oVqO8ytp/.2sXJ6zK6ubLudL3CNSxaIvlNPRaM3SY63FSYgi0KgR6', NULL, '2025-02-26 12:08:28', '2025-02-26 12:08:28', ''),
(4, 'Jamal Bush', 'konyjik@mailinator.com', NULL, '$2y$12$kGyAxSA/ytbDGyrZgUVgN.eG4kTc7BGyGphTWK//RUzciH46yKLku', NULL, '2025-02-26 12:19:16', '2025-02-26 12:19:16', ''),
(5, 'Scarlet Lambert', 'bodywynur@mailinator.com', NULL, '$2y$12$LbfnsxFLY1FuHRzETB/KbeR5wtkvq7738cWskvF6OledyLqKbhHsK', NULL, '2025-02-26 12:20:25', '2025-02-26 12:20:25', ''),
(6, 'Charles Garner', 'nehalapefe@mailinator.com', NULL, '$2y$12$w9puP60DdITKAd9v80PbmenGc4bleZtMS4STGpZJm0QrMeRutKYJK', NULL, '2025-02-26 12:21:32', '2025-02-26 12:21:32', ''),
(7, 'Alisa Finley', 'kizo@mailinator.com', NULL, '$2y$12$eZKFt00cqwb1ICrfoY9izOLhaKCs5P9KAAOIeqxVXiL6rpIDV3Rl6', NULL, '2025-02-26 12:22:44', '2025-02-26 12:22:44', ''),
(8, 'Hollee Ballard', 'raxijyjivu@mailinator.com', NULL, '$2y$12$hMq49uQs8k059ro1J1HiFOF5Zd0c2Le2XF7Sf4Bsg64tsK2gc3XR2', NULL, '2025-02-26 13:46:59', '2025-02-26 13:46:59', '0'),
(9, 'Jakeem Gentry', 'mecozedely@mailinator.com', NULL, '$2y$12$UKJLlraHdzvu3.etT0HIneR.EsiYHuacjdi7v1vkKHlrZ/o./O3ha', NULL, '2025-02-26 13:47:13', '2025-02-26 13:47:13', '0'),
(10, 'Tamekah Moran', 'qolixuc@mailinator.com', NULL, '$2y$12$sPGieY2U4T2fppS/eP64PuVmkRE.3hxBoAWrW3adBa6u2gnHFmM2e', NULL, '2025-02-26 17:10:00', '2025-02-26 17:10:00', '0'),
(11, 'Neville Burt', 'sexapupusi@mailinator.com', NULL, '$2y$12$7T5JqVJNWPOMv8SBP8M9rucrQistoZJFw1MnpPKdXfbaAT5hoQQI.', NULL, '2025-02-26 17:28:37', '2025-02-26 17:28:37', '0'),
(12, 'Kelly Sweet', 'cytaze@mailinator.com', NULL, '$2y$12$mgOZE68oXT.l43KhHxtj4uj13RbLEB3aR7YXMTqDr1iED7m1U1pKW', NULL, '2025-02-26 19:03:13', '2025-02-26 19:03:13', '0'),
(13, 'Craig Burgess', 'mefeh@mailinator.com', NULL, '$2y$12$CLXg7zMCgwCweyl.FIviEuhQNVOe1.AjqAc07YjQbPsY2CQ5Dx48q', NULL, '2025-02-26 19:04:15', '2025-02-26 19:04:15', '0'),
(14, 'Hilary Hanson', 'qyzuvufily@mailinator.com', NULL, '$2y$12$U6J/c0weCQck/c34LXok7ORMjiWoIGOS0KSThBxP03vp8y5cSR4p6', NULL, '2025-02-26 20:40:51', '2025-02-26 20:40:51', '0'),
(15, 'Baker Whitley', 'xulyt@mailinator.com', NULL, '$2y$12$2spnD0WgCyovDoEcBJ9ugOtm3ElV8YlQMlQi42liGHhOJ9fwss5OO', NULL, '2025-02-26 21:41:53', '2025-02-26 21:41:53', '0'),
(16, 'Sloane Owens', 'woniqak@mailinator.com', NULL, '$2y$12$ZumtNQMVqDArPQN9i7MnoegTZMSwVokjf1vhChlTwey68a2oWlcEi', NULL, '2025-02-26 21:45:12', '2025-02-26 21:45:12', '0'),
(17, 'Chaney Sweet', 'lojolorynu@mailinator.com', NULL, '$2y$12$4BtyUKKX8OZbPwZTaV/ejuzR5GZ9uxnk/E4Y0oxdxpY8HYukDh9qa', NULL, '2025-02-26 21:45:26', '2025-02-26 21:45:26', '0'),
(18, 'dasdda', 'user@gmail.com', NULL, '$2y$12$K5/qvhRuP9IBrvqgpQpgCOREbJdA0DxHX6571A2ScgWeoRbr2Qh1O', NULL, '2025-02-26 21:48:22', '2025-02-26 21:48:22', '0'),
(19, 'Quyn Bass', 'votunybejy@mailinator.com', NULL, '$2y$12$IGXyxumrAG5gFMaUDp362.n2tk5FvQ2rVj5v.TFGHy50NyyCzHUg.', NULL, '2025-02-27 17:13:42', '2025-02-27 17:13:42', '0'),
(20, 'Connor Heath', 'zahucyk@mailinator.com', NULL, '$2y$12$5z1Z0KSk8zzj8vjHXv0Up.mclKUJUBmurlFKcV5XzHIxip5Qgch.2', NULL, '2025-02-27 17:51:13', '2025-02-27 17:51:13', '0'),
(21, 'Kyla Marquez', 'cuqemy@mailinator.com', NULL, '$2y$12$bfJmB2Rn/GHqlV2EPPwvqOWHhKEPLUyubpCKJUZaiPjSmv5HvpBlG', NULL, '2025-02-27 17:58:20', '2025-02-27 17:58:20', '0'),
(22, 'Mark Goff', 'rovo@mailinator.com', NULL, '$2y$12$h6utZSRK2MyVIGjQK.kuL.Kz1KGtnwJpfLivIrUrBM8Q5C9W1O6Zq', NULL, '2025-02-27 18:04:36', '2025-02-27 18:04:36', '0'),
(23, 'Ryder Summers', 'sexiquw@mailinator.com', NULL, '$2y$12$8IDI6K/3aeGrxajQqDod/uCmGQs3gG45PvzyZQlr2NSeYHo0bzuey', NULL, '2025-03-31 19:34:05', '2025-03-31 19:34:05', '0'),
(24, 'Jarrod Stephenson', 'widukuki@mailinator.com', NULL, '$2y$12$5898/42vnTmZyyzY1aQWuu7eVLHr4PADXtNMEJz.pB8waY7H2AMce', NULL, '2025-04-19 10:02:30', '2025-04-19 10:02:30', '0'),
(25, 'admin', 'admin@gmail.com', NULL, '$2y$12$hjl1kJI1gLIKY0S.bDpVI.joF4T/kCLYVaF20vqATHF4qsdVOP9jO', NULL, '2025-04-30 05:59:02', '2025-04-30 05:59:02', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `comments_email_unique` (`email`),
  ADD KEY `comments_movie_id_foreign` (`movie_id`),
  ADD KEY `comments_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movies_user_id_foreign` (`user_id`),
  ADD KEY `movies_category_id_foreign` (`category_id`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- القيود للجدول `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`),
  ADD CONSTRAINT `comments_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);

--
-- القيود للجدول `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `movies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
