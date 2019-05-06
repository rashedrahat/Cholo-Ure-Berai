-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2018 at 05:02 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `choloureberai`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_08_163741_create_posts_table', 1),
(4, '2018_12_10_060954_add_user_id_to_posts', 2),
(5, '2018_12_10_173533_add_cover_image_to_posts', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `cover_image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created_at`, `updated_at`, `user_id`, `cover_image`) VALUES
(11, 'Hello world in Python', '<p>print(&quot;Hello world&quot;)</p>', '2018-12-11 05:26:48', '2018-12-11 05:26:48', 2, 'helloworld_1544527608.jpg'),
(13, 'Hello world in JS', '<pre>\r\n<code><code>&lt;!DOCTYPE HTML&gt;</code>\r\n<code><code><code>&lt;</code>html</code><code>&gt;</code></code>\r\n\r\n<code><code><code>&lt;</code>body</code><code>&gt;</code></code>\r\n\r\n  <code><code><code>&lt;</code>p</code><code>&gt;</code></code>Before the script...<code><code><code>&lt;/</code>p</code><code>&gt;</code></code>\r\n\r\n  <code><code><code>&lt;</code>script</code><code>&gt;</code></code><code>\r\n    <code>alert</code><code>(</code> <code>&#39;Hello, world!&#39;</code> <code>)</code><code>;</code>\r\n  </code><code><code><code>&lt;/</code>script</code><code>&gt;</code></code>\r\n\r\n  <code><code><code>&lt;</code>p</code><code>&gt;</code></code>...After the script.<code><code><code>&lt;/</code>p</code><code>&gt;</code></code>\r\n\r\n<code><code><code>&lt;/</code>body</code><code>&gt;</code></code>\r\n\r\n<code><code><code>&lt;/</code>html</code><code>&gt;</code></code></code></pre>', '2018-12-11 05:31:29', '2018-12-11 05:31:29', 2, 'js_1544527889.jpg'),
(15, 'How to make Chicken Biryani', '<p>Biryani rice is mixed rice dish. It is made with spices, rice, vegetables, or meat. This flavorful rice dish is easy to cook, and is great for vegetarian or non-vegetarian meals.</p>\r\n\r\n<ul>\r\n	<li><em>Prep time: 60-150 minutes</em></li>\r\n	<li><em>Cook time: 30 minutes</em></li>\r\n	<li><em>Total time: 90-180 minutes</em></li>\r\n</ul>\r\n\r\n<p><strong>Vegetarian Biryani</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>4 cups basmati rice</p>\r\n	</li>\r\n	<li>\r\n	<p>3 tablespoons&nbsp;<a href=\"https://www.wikihow.com/Make-Ginger-Garlic-Paste\">Ginger &amp; garlic paste</a></p>\r\n	</li>\r\n	<li>\r\n	<p>5 green chilies (or less, depending on taste)</p>\r\n	</li>\r\n	<li>\r\n	<p>1 onion finely chopped</p>\r\n	</li>\r\n	<li>\r\n	<p>2 tomato finely chopped</p>\r\n	</li>\r\n	<li>\r\n	<p>2 teaspoons ea. cinnamon, cloves, cardamom</p>\r\n	</li>\r\n	<li>\r\n	<p>Cashew nuts</p>\r\n	</li>\r\n	<li>\r\n	<p>4 tablespoons oil or ghee</p>\r\n	</li>\r\n	<li>\r\n	<p>2 cups carrot, peas, &amp; finely cut beans</p>\r\n	</li>\r\n	<li>\r\n	<p>2 teaspoons&nbsp;<a href=\"https://www.wikihow.com/Make-Garam-Masala\">Garam Masala powder</a></p>\r\n	</li>\r\n	<li>\r\n	<p>3 teaspoons chili powder (or less, depending on taste)</p>\r\n	</li>\r\n	<li>\r\n	<p>Mint leaves &amp; coriander leaves (handful)</p>\r\n	</li>\r\n	<li>\r\n	<p>Juice of &frac12; lemon</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', '2018-12-17 09:54:29', '2018-12-17 09:54:29', 3, 'chicken-biryani_1545062069.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Rashed Ahmed Rahat', 'rashedrahat@outlook.com', NULL, '$2y$10$sjfY8Gze7dFFsuYldODnQeH5NFbBR2wb1RzS60yGlO4uUf9d/6Qm2', 'xUhaPGzPF1T8YEfxRCHlcJIWmN31uVnJ0yzsch3eRaqRgGEQbPA4fDaRSChS', '2018-12-10 01:28:57', '2018-12-10 01:28:57'),
(3, 'Ayesha Tamanna', 'ayeshatamanna@gmail.com', NULL, '$2y$10$OhT6JOtlymOCbNd3RwVmkecdIl6MZ1F84xkmg00j4QnwIdNxOtQEu', 'vfmW4F7l2jWr14olMiuujWdYqSvgp6JZLl4iEaaRV07H0H3pkO4iNvPevYmV', '2018-12-17 09:47:44', '2018-12-17 09:47:44');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
