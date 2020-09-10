-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2020 at 09:48 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `honeyworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `PageName` text COLLATE utf8mb4_unicode_ci,
  `HeadingOne` text COLLATE utf8mb4_unicode_ci,
  `HeadingTwo` text COLLATE utf8mb4_unicode_ci,
  `HeadingThree` text COLLATE utf8mb4_unicode_ci,
  `HeadingFour` text COLLATE utf8mb4_unicode_ci,
  `ContentOne` longtext COLLATE utf8mb4_unicode_ci,
  `ContentTwo` longtext COLLATE utf8mb4_unicode_ci,
  `ContentThree` longtext COLLATE utf8mb4_unicode_ci,
  `ContentFour` longtext COLLATE utf8mb4_unicode_ci,
  `PhoneOne` int(11) DEFAULT NULL,
  `PhoneTwo` int(11) DEFAULT NULL,
  `PhoneThree` int(11) DEFAULT NULL,
  `HeaderImageUrl` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `created_at`, `updated_at`, `PageName`, `HeadingOne`, `HeadingTwo`, `HeadingThree`, `HeadingFour`, `ContentOne`, `ContentTwo`, `ContentThree`, `ContentFour`, `PhoneOne`, `PhoneTwo`, `PhoneThree`, `HeaderImageUrl`) VALUES
(1, '2020-09-10 00:02:35', '2020-09-10 00:02:35', 'About Us', 'About Us', NULL, NULL, NULL, 'Established in 2016, Honeyworld Zimbabwe (Private) Limited (HWZ), is a social enterprise whose aim is to support the marginalized rural smallholder farmers of Zimbabwe to venture into beekeeping as an income generating activity and as a way to foster environmental conservation. Our objective is to impact the communities we work with by providing them sustainable livelihoods through providing beekeeping training, equipment and advice on modern beekeeping while also assuring them of a ready market for their honey. We contribute to economic development by increasing rural farming families’ incomes through a sustainable supply chain, producing high quality honey, which we buy at fair market prices. We promote the conservation of the environment by encouraging the combining of beekeeping with other farming activities to reap the benefits of cross pollination by bees. We partner with various organizations, individuals and business owners that are motivated by the opportunity to make a financial contribution and improve the lives of people in the communities where we work through donations or as social impact investors. We therefore enable our funders to fulfill their social and philanthropic goals by partnering with us. We are committed to producing top quality, pure unadulterated honey which is affordable and suitable for both local and foreign markets. Guided by our values, we endeavor to uphold the highest quality standards to provide a carefully processed and professionally packaged product. In addition to our pure natural honey, we also offer beekeeping training and we supply beekeeping equipment to passionate beekeepers and those already in the trade. Our firm belief in teamwork and collaboration enables us to handhold and mentor passionate beekeepers until they become successful and self-sufficient. Please keep watching this space for our project activities, innovative products and services. Feel free to like our posts, leave comments and make inquiries, our dedicated staff will ensure to respond within the shortest possible time. Every Blessing! HWZ Team', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '2020-09-10 00:51:20', '2020-09-10 00:51:20', 'Bee Removal', 'Bee Removals', NULL, NULL, NULL, 'We are expects in all bee removal humanely. We always perform a live bee removal of honey bees. upon request anywhere In Harare,Bulawayo and Mutare .', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '2020-09-10 00:51:47', '2020-09-10 00:51:47', 'Apiary', 'Apiary Setup', NULL, NULL, NULL, 'We help and we have teams to help you setup.', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '2020-09-10 00:52:12', '2020-09-10 00:52:12', 'Training', 'Beekeeping Training', NULL, NULL, NULL, 'Call us for details, we desire to see more people.', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '2020-09-10 00:52:41', '2020-09-10 00:52:41', 'Equipment', 'Bee keeping Equipment', NULL, NULL, NULL, 'We provide hives and hive tools -Honey Processing Equipment .', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '2020-09-10 00:53:48', '2020-09-10 00:53:48', 'Sustainable', 'Sustainable', NULL, NULL, NULL, 'We understand that sustainable economic development means creating financial value. It means improving social conditions in a way that supports and not exploit the environment. We have a commitment to ensure sustainable livelihoods while preserving the environment, with emphasis on the marginalised rural communities of Zimbabwe. Less.', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '2020-09-10 00:54:54', '2020-09-10 00:54:54', 'Contact', 'Need a Quick Query', NULL, NULL, NULL, 'You can ask us anything that is of your choice, our staff work 24/7 and they are available to help you anytime of your choice.', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_09_07_231843_create_contents_table', 1);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Alpha', 'alflanquit@gmail.com', NULL, '$2y$10$GcGh6hav4/C8Op69N6mtueH895EjJKvpZIlyvyPeDugeacfF9mSgK', NULL, '2020-09-09 23:50:16', '2020-09-09 23:50:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
