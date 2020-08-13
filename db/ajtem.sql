-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 11, 2020 at 11:34 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajtem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `company`, `email`, `username`, `email_verified_at`, `password`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Doe', NULL, 'admindoe@gmail.com', NULL, NULL, '$2y$10$ysCDv5M5QBWdIbwq3JE4pOujh3lSeJq/SQW0ryU/v1gJcdt2IrUo2', NULL, NULL, '2020-08-05 13:59:02', '2020-08-05 13:59:02');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `abstract` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `upload_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_files` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `admin_id`, `category_id`, `author_id`, `title`, `email`, `year`, `volume`, `author`, `pages`, `abstract`, `tags`, `is_published`, `upload_image`, `upload_files`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, 'African Journal of Technical Education and Management (AJTEM)', 'johndoe@gmail.com', '2017', '1', 'Ho Technical University', '98', 'The study was carried out to investigate the effect of\r\nsunlight on the vitamin C content of watermelons. Nine\r\nwatermelons were selected from a farm in Greater Accra\r\nfor vitamin C analysis at the Food Research Institute in\r\nAccra. The factorial experimental design was used to\r\ndetermine the amount of vitamin C in sliced and unsliced\r\nwatermelons kept at room conditions and those exposed\r\nto sunlight. Among the findings were that the loss of\r\nvitamin C from whole and sliced watermelons under\r\nroom temperature and when exposed to sunlight ranged\r\nbetween 12.2% and 66.2%. The loss was greater when\r\nthe watermelons were sliced and exposed to direct rays\r\nof the sun. It is recommended that watermelons should\r\nbe kept in cool temperatures and should be consumed\r\nimmediately once they are sliced so as to limit vitamin\r\nC losses to some extent. Again, it is recommended\r\nthat traders and consumers should be educated on\r\nthe importance of vitamin C for health, its instability as\r\nwell as factors that cause the losses so as to help avoid\r\nkeeping watermelons in the scorching sun, whether\r\nsliced or whole.', 'Education', 1, '1596650290.jpg', '1596650290.pdf', NULL, '2020-08-05 17:58:10', '2020-08-05 18:00:03'),
(2, 1, 1, NULL, 'Occupational Health and Safety Practices: An Assessment of the Electricity Company of Ghana, Ho Division', 'reborndzre@gmail.com', '2018', NULL, 'Ben Q. Honyenuga and Castro K. Dogbeda', '84', 'Providing a safe place of work has been a common\r\nlaw duty of organisations, especially, the potentially\r\ndangerous work environments. This mandates\r\norganisations to implement Occupational Health and\r\nSafety (OHS) practices which could prevent or control\r\nhazards at the workplace. The study of OHS practices in\r\nan electricity distributing organisation is crucial because\r\nelectricity poses danger such as fatal electrocution\r\nof workers. This study is aimed at identifying the OHS\r\npractices in the Electricity Company of Ghana (ECG),\r\nassessing how OHS practices are implemented, and their\r\nperceived effects on the company. Using a descriptive\r\nsurvey strategy, 120 respondents from the Ho Regional\r\nDivision of ECG were conveniently sampled. The findings\r\nindicated that OHS practices implemented were either\r\ncentralised to the regional safety officer or decentralised\r\nto the supervisors. There was however, no well-designed\r\ninstitutional framework for the implementation of OHS\r\npractices. This led to an average rating of the perceived\r\neffects of OHS practices on the company. The originality\r\nof the study is focused on the empirical investigation of\r\nthe practices in a typical engineering company other than\r\nmining in a developing country context. The implication\r\nof this study is that engineering companies should focus\r\non OHS issues.', 'Electricity, Hazards, Occupational Health, Safety.', 1, '1596725435.jpg', '1596720012.pdf', NULL, '2020-08-06 13:20:12', '2020-08-10 14:30:48'),
(4, NULL, 1, 1, 'The Role of the New Technical Universities in the Improvement and Implementation of Technical Vocational Education and Training (TVET) in Ghana', 'president@radforduc.edu.gh', '2017', NULL, 'Paul Effah', '11', 'This paper addresses the relevance of Technical\r\nVocational Education and Training (TVET) in the new\r\ntechnical education model in higher education being\r\npursued under the policy of converting the polytechnics\r\ninto technical universities in Ghana. It rakes up the critical\r\nchallenges facing the Tertiary Education system in most\r\nAfrican countries, and illustrates how other countries\r\naddress similar challenges vis-à-vis Ghana’s model for\r\ntackling her own challenges. The difficulties encountered\r\nby Polytechnics, which were established to address\r\nsome of the challenges are juxtaposed against the new\r\nparadigm shift which is the conversion of polytechnics\r\ninto technical universities. These are done in view of the\r\nrole that the new technical universities are expected to\r\nplay towards the improvement of implementation of TVET\r\nas a basis for the technological advancement of Ghana’s\r\neconomy. It is suggested in this paper that TVET can be\r\nused as a measure in arresting youth employment in\r\nGhana. The paper concludes by identifying the nature\r\nand kinds of support required from key stakeholders such\r\nas the Government, industry, development partners, the\r\ntechnical universities and other tertiary institutions.', 'Entrepreneurship, technical education, technologies, training, research.', 1, '1597069359.png', '1597069359.pdf', NULL, '2020-08-10 14:22:39', '2020-08-10 14:33:27');

-- --------------------------------------------------------

--
-- Table structure for table `article_tag`
--

CREATE TABLE `article_tag` (
  `tag_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Education', '2020-08-05 14:00:04', '2020-08-05 14:00:04'),
(2, 'Sports', '2020-08-05 14:00:13', '2020-08-05 14:00:13'),
(3, 'Foods & Drugs', '2020-08-05 14:00:23', '2020-08-05 14:00:23'),
(4, 'Health & Safety', '2020-08-06 13:03:52', '2020-08-06 13:03:52');

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
(51, '2014_10_12_000000_create_users_table', 1),
(52, '2014_10_12_100000_create_password_resets_table', 1),
(53, '2019_08_19_000000_create_failed_jobs_table', 1),
(54, '2020_01_26_153014_create_admins_table', 1),
(55, '2020_01_28_141324_create_articles_table', 1),
(56, '2020_01_28_141346_create_categories_table', 1),
(57, '2020_08_04_180554_create_tags_table', 1),
(58, '2020_08_06_160042_create_sliders_table', 2);

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
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_id` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `role`, `image`, `email`, `email_verified_at`, `password`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', NULL, 1, '0', 'johndoe@gmail.com', NULL, '$2y$10$RYCToDc.O1zokmODrKGp4.HX5k5LwHWKbfXQytZgNED3t5zQ/kVRm', NULL, NULL, '2020-08-05 13:59:38', '2020-08-10 14:22:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_tag`
--
ALTER TABLE `article_tag`
  ADD PRIMARY KEY (`article_id`,`tag_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_name_unique` (`name`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
