-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 07, 2019 at 01:53 PM
-- Server version: 8.0.12
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `land_khai`
--

-- --------------------------------------------------------

--
-- Table structure for table `conf_topics`
--

CREATE TABLE `conf_topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conf_topics`
--

INSERT INTO `conf_topics` (`id`, `text`, `created_at`, `updated_at`) VALUES
(1, 'testsettext', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `icon`, `title`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Фигура 8.png', 'Call for paper (.pdf)', 'PHP тестовое .docx', NULL, '2019-04-02 06:13:40'),
(2, 'Фигура 9.png', 'Conference program (.pdf)', '', NULL, NULL),
(3, 'Фигура 10.png', 'Paper Template (.doc)', '', NULL, NULL),
(4, 'Фигура 11.png', 'Springer Formatting (.doc)', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `copy_write` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_head` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `copy_write`, `event_head`, `event_title`, `footer`, `created_at`, `updated_at`) VALUES
(2, '© CSIT\'2019. Computer Science and Information Technologies', 'All-Ukrainian scientific and technical conference', 'Integrated computer technologies in mechanical engineering of ICTM-2019', 'Kharkiv, UKRAINE, 25-27 November 2019', '2019-03-24 22:00:00', '2019-03-24 22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `important_dates`
--

CREATE TABLE `important_dates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_date` date NOT NULL,
  `event_title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `important_dates`
--

INSERT INTO `important_dates` (`id`, `event_date`, `event_title`, `created_at`, `updated_at`) VALUES
(4, '2019-03-14', 'Tets info 1', '2019-03-25 10:37:51', '2019-03-25 10:59:10'),
(7, '2019-03-14', 'Tets info 2', '2019-03-25 10:58:45', '2019-03-25 10:58:55'),
(8, '2019-03-16', 'Tets info 3', '2019-03-25 10:59:40', '2019-03-25 10:59:40');

-- --------------------------------------------------------

--
-- Table structure for table `intro`
--

CREATE TABLE `intro` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `head` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `intro`
--

INSERT INTO `intro` (`id`, `head`, `event`, `place`, `text`, `created_at`, `updated_at`) VALUES
(1, 'All-Ukrainian scientific and technical conference', '\"Integrated computer technologies in mechanical engineering of ICTM-2019\"', 'Kharkiv, UKRAINE, 25-27 November 2019', 'All-Ukrainian scientific and technical conference \"Integrated computer technologies in\r\n                mechanical engineering\r\n                (ICTM-2019)\".<br>\r\n                The basic scientific and technical achievements, implementation and experience of the use\r\n                of\r\n                integrated computer technologies in the field of mechanical engineering will be presented and\r\n                substantiated', NULL, NULL),
(3, 'All-Ukrainian scientific and technical conference', '\"Integrated computer technologies in mechanical engineering of ICTM-2019\"', 'Kharkiv, UKRAINE, 25-27 November 2019', '<p class=\"info__text\">All-Ukrainian scientific and technical conference \"Integrated computer technologies in mechanical engineering (ICTM-2019)\".</p>\r\n          <p class=\"info__text\">The basic scientific and technical achievements, implementation and experience of the use of integrated computer technologies in the field of mechanical engineering will be presented and substantiated.</p>', '2019-03-18 18:10:25', '2019-03-18 18:10:25');

-- --------------------------------------------------------

--
-- Table structure for table `keynotes`
--

CREATE TABLE `keynotes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speaker` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keynotes`
--

INSERT INTO `keynotes` (`id`, `image`, `speaker`, `city`, `created_at`, `updated_at`) VALUES
(2, 'test.png', 'Dr hab.inż. Paweł Czarnul', 'Gdansk, Poland', '2019-04-02 15:12:46', '2019-04-07 07:34:04'),
(3, 'test.png', 'Dmitry Kritsky', 'Kharkiv, Ukraine', '2019-04-07 07:11:49', '2019-04-07 07:33:35');

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
(3, '2019_03_11_210804_create_table_intro', 1),
(4, '2019_03_11_211014_create_table_important_dates', 1),
(5, '2019_03_11_211047_create_table_conf_topics', 1),
(6, '2019_03_11_211111_create_table_footer', 1),
(7, '2019_03_12_130241_create_keynotes_table', 1),
(8, '2019_03_12_130749_create_table_programme', 1),
(9, '2019_03_12_130923_create_table_organizing', 1),
(10, '2019_03_12_143242_create_table_documents', 1),
(11, '2019_03_12_145524_create_table_prices', 1),
(12, '2019_03_12_150451_create_table_paper', 1),
(13, '2019_03_12_150713_create_table_organized_by', 1);

-- --------------------------------------------------------

--
-- Table structure for table `organized_by`
--

CREATE TABLE `organized_by` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organized_by`
--

INSERT INTO `organized_by` (`id`, `title`, `address`, `image`, `google_map`, `created_at`, `updated_at`) VALUES
(1, 'Organized by', 'Adress of Conference Organizing Comimittee', 'orginizing-img.jpg', '<iframe\r\n        src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2562.325578252482!2d36.284726!3d50.042732!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa501bb6d97670b53!2sNational+Aerospace+University+%22Kharkiv+Aviation+Institute%22!5e0!3m2!1sen!2sua!4v1552224315530\"\r\n        width=\"100%\" height=\"850\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', NULL, '2019-04-07 07:34:36');

-- --------------------------------------------------------

--
-- Table structure for table `organizing`
--

CREATE TABLE `organizing` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `degree` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fio` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organizing`
--

INSERT INTO `organizing` (`id`, `degree`, `fio`, `info`, `created_at`, `updated_at`) VALUES
(1, 'Prof.', 'Kritsky D.N.', 'Chairman, Department of Information Technology Design National Aerospace University, Ukraine', NULL, '2019-04-02 04:17:41'),
(3, 'test', 'test T.T', 'tetst tetetset', '2019-04-02 04:22:11', '2019-04-02 04:22:11');

-- --------------------------------------------------------

--
-- Table structure for table `paper`
--

CREATE TABLE `paper` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paper`
--

INSERT INTO `paper` (`id`, `title`, `text`, `button_name`, `created_at`, `updated_at`) VALUES
(1, 'Paper submission', '<p>Authors should only submit formatted original 4 full pages work, including illustrations, in standard IEEE conference format&nbsp;(IEEE Conference Format)&nbsp;that has neither appeared elsewhere for publication nor which is under review for another publication. If a paper does not meet specifications, it may be returned without review.</p>', 'Read more', NULL, '2019-04-01 10:25:44');

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
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_price` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_price` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `title`, `first_price`, `second_price`, `created_at`, `updated_at`) VALUES
(1, 'Foreign participiants', '120 Euro', '150 Euro', NULL, NULL),
(2, 'Ukrainian parcipiants', '500 UAH', '600 UAH', NULL, NULL),
(4, 'test 1213123', '213124 $', '323213 $', '2019-03-25 21:28:06', '2019-03-25 21:28:43');

-- --------------------------------------------------------

--
-- Table structure for table `programme`
--

CREATE TABLE `programme` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programme`
--

INSERT INTO `programme` (`id`, `text`, `created_at`, `updated_at`) VALUES
(1, 'text', NULL, NULL);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@mail.com', NULL, '$2y$10$XFMTM1i5glbPirLbSa3xcudbqLXsBJtjAaGV/XHD60d2sqaSu8UGm', NULL, '2019-03-13 16:58:55', '2019-03-13 16:58:55'),
(2, 'test', 'admin@test.loc', NULL, '$2y$10$YdDnbjJprDfTFMyvCHQ16eI2wRSCN5NoPMJC6hxUz9nwvdOSipIFu', NULL, '2019-03-14 21:02:55', '2019-03-14 21:02:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conf_topics`
--
ALTER TABLE `conf_topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `important_dates`
--
ALTER TABLE `important_dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intro`
--
ALTER TABLE `intro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keynotes`
--
ALTER TABLE `keynotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organized_by`
--
ALTER TABLE `organized_by`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizing`
--
ALTER TABLE `organizing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programme`
--
ALTER TABLE `programme`
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
-- AUTO_INCREMENT for table `conf_topics`
--
ALTER TABLE `conf_topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `important_dates`
--
ALTER TABLE `important_dates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `intro`
--
ALTER TABLE `intro`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `keynotes`
--
ALTER TABLE `keynotes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `organized_by`
--
ALTER TABLE `organized_by`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `organizing`
--
ALTER TABLE `organizing`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `paper`
--
ALTER TABLE `paper`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `programme`
--
ALTER TABLE `programme`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
