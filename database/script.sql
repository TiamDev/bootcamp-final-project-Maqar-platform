-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2024 at 11:50 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;

--
-- Database: `auth_breeze`
--
CREATE DATABASE IF NOT EXISTS `auth_breeze` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE `auth_breeze`;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
    `id` bigint(20) UNSIGNED NOT NULL, `uuid` varchar(255) NOT NULL, `connection` text NOT NULL, `queue` text NOT NULL, `payload` longtext NOT NULL, `exception` longtext NOT NULL, `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
    `id` int(10) UNSIGNED NOT NULL, `migration` varchar(255) NOT NULL, `batch` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO
    `migrations` (`id`, `migration`, `batch`)
VALUES (
        1, '2014_10_12_000000_create_users_table', 1
    ),
    (
        2, '2014_10_12_100000_create_password_reset_tokens_table', 1
    ),
    (
        3, '2019_08_19_000000_create_failed_jobs_table', 1
    ),
    (
        4, '2019_12_14_000001_create_personal_access_tokens_table', 1
    );

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
    `email` varchar(255) NOT NULL, `token` varchar(255) NOT NULL, `created_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO
    `password_reset_tokens` (
        `email`, `token`, `created_at`
    )
VALUES (
        'fatimabakar707@gmail.com', '$2y$12$GgPfNGsA5RcgQ2eLLOSqPOsGu0scXH1ihIs9bLH55yuY67pO9eXKW', '2023-12-17 00:28:18'
    );

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
    `id` bigint(20) UNSIGNED NOT NULL, `tokenable_type` varchar(255) NOT NULL, `tokenable_id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `token` varchar(64) NOT NULL, `abilities` text DEFAULT NULL, `last_used_at` timestamp NULL DEFAULT NULL, `expires_at` timestamp NULL DEFAULT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
    `id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `email` varchar(255) NOT NULL, `status` int(11) NOT NULL DEFAULT 1, `email_verified_at` timestamp NULL DEFAULT NULL, `password` varchar(255) NOT NULL, `remember_token` varchar(100) DEFAULT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO
    `users` (
        `id`, `name`, `email`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`
    )
VALUES (
        1, 'fatima', 'fatimab@gmail.com', 0, NULL, '$2y$12$J8H2eGave2p4KiRejRx8ee9ord8xglJqwGTBwXROR1mU1ObqCOD6m', NULL, '2023-12-15 13:54:50', '2023-12-15 13:54:50'
    ),
    (
        2, 'fofo', 'fatimabakar707@gmail.com', 1, NULL, '$2y$12$cJaNh2G6ii1Saaz.H6EvU.EVg7Cb2vE/bRlYY7VjcN6S68DRzHGxq', NULL, '2023-12-17 00:09:48', '2023-12-17 00:09:48'
    );

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens` ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (
    `tokenable_type`, `tokenable_id`
);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 3;
--
-- Database: `auth_ui`
--
CREATE DATABASE IF NOT EXISTS `auth_ui` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE `auth_ui`;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
    `id` bigint(20) UNSIGNED NOT NULL, `uuid` varchar(255) NOT NULL, `connection` text NOT NULL, `queue` text NOT NULL, `payload` longtext NOT NULL, `exception` longtext NOT NULL, `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
    `id` int(10) UNSIGNED NOT NULL, `migration` varchar(255) NOT NULL, `batch` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO
    `migrations` (`id`, `migration`, `batch`)
VALUES (
        1, '2014_10_12_000000_create_users_table', 1
    ),
    (
        2, '2014_10_12_100000_create_password_reset_tokens_table', 1
    ),
    (
        3, '2014_10_12_100000_create_password_resets_table', 1
    ),
    (
        4, '2019_08_19_000000_create_failed_jobs_table', 1
    ),
    (
        5, '2019_12_14_000001_create_personal_access_tokens_table', 1
    );

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
    `email` varchar(255) NOT NULL, `token` varchar(255) NOT NULL, `created_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
    `email` varchar(255) NOT NULL, `token` varchar(255) NOT NULL, `created_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO
    `password_reset_tokens` (
        `email`, `token`, `created_at`
    )
VALUES (
        'fat@gmailcom', '$2y$12$y.qiFtJZDvGsC8VmNeInf.PEpkfgen8CBIE9ZCiv/cirH7Qzdruny', '2023-12-15 07:57:06'
    );

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
    `id` bigint(20) UNSIGNED NOT NULL, `tokenable_type` varchar(255) NOT NULL, `tokenable_id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `token` varchar(64) NOT NULL, `abilities` text DEFAULT NULL, `last_used_at` timestamp NULL DEFAULT NULL, `expires_at` timestamp NULL DEFAULT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
    `id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `email` varchar(255) NOT NULL, `email_verified_at` timestamp NULL DEFAULT NULL, `password` varchar(255) NOT NULL, `remember_token` varchar(100) DEFAULT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO
    `users` (
        `id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`
    )
VALUES (
        1, 'fatima', 'fff@gmail.com', NULL, '123456', NULL, NULL, NULL
    ),
    (
        2, 'fof', 'fat@gmailcom', NULL, '$2y$12$6jckwCe6dk8r.ZzQBKRbFuyYuMBbfmA5EfY.aI1eld47T59uD/iCa', 'nlEdkttfnHbON6R7sGe5xSXWYIOvNVJNtvq1aHPPeTd1aNy1bEPHHGon1ZNx', '2023-12-15 07:49:23', '2023-12-15 07:49:23'
    );

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens` ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (
    `tokenable_type`, `tokenable_id`
);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 3;
--
-- Database: `blog`
--
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE `blog`;

-- --------------------------------------------------------

--
-- Table structure for table `auther`
--

CREATE TABLE `auther` (
    `id` int(11) DEFAULT NULL, `first_name` varchar(255) DEFAULT NULL, `last_name` varchar(255) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
    `id` int(11) NOT NULL, `title` varchar(255) DEFAULT NULL, `body` text DEFAULT NULL, `publish` varchar(255) DEFAULT NULL, `auther` varchar(250) DEFAULT NULL, `subtitle` varchar(100) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO
    `posts` (
        `id`, `title`, `body`, `publish`, `auther`, `subtitle`
    )
VALUES (
        1, 'I believe every human has a finite number of heartbeats. I don\\\'t intend to waste any of mine.', '<h2>Reaching for the Stars</h2>\r\n<p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>', '17-09-2023', NULL, ''
    ),
    (
        2, 'I believe every human has a finite number of heartbeats. I don\\\'t intend to waste any of mine.', '<h2>Reaching for the Stars</h2>\r\n<p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>', '18-09-2023', NULL, ''
    ),
    (
        12, 'footbol', 'ddddddddddddd', '2023-12-21', NULL, ''
    ),
    (
        13, 'google', 'ddddddddddddd', '2023-12-21', NULL, ''
    ),
    (
        20, 'try', 'test', '2023-12-22', '', ''
    );

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts` ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 21;
--
-- Database: `db_laravel`
--
CREATE DATABASE IF NOT EXISTS `db_laravel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE `db_laravel`;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--
-- Error reading structure for table db_laravel.failed_jobs: #1932 - Table &#039;db_laravel.failed_jobs&#039; doesn&#039;t exist in engine
-- Error reading data for table db_laravel.failed_jobs: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `db_laravel`.`failed_jobs`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--
-- Error reading structure for table db_laravel.migrations: #1932 - Table &#039;db_laravel.migrations&#039; doesn&#039;t exist in engine
-- Error reading data for table db_laravel.migrations: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `db_laravel`.`migrations`&#039; at line 1
--
-- Database: `eloquent`
--
CREATE DATABASE IF NOT EXISTS `eloquent` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE `eloquent`;
--
-- Database: `eloquent2`
--
CREATE DATABASE IF NOT EXISTS `eloquent2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE `eloquent2`;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
    `id` bigint(20) UNSIGNED NOT NULL, `uuid` varchar(255) NOT NULL, `connection` text NOT NULL, `queue` text NOT NULL, `payload` longtext NOT NULL, `exception` longtext NOT NULL, `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
    `id` int(10) UNSIGNED NOT NULL, `migration` varchar(255) NOT NULL, `batch` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO
    `migrations` (`id`, `migration`, `batch`)
VALUES (
        6, '2014_10_12_000000_create_users_table', 1
    ),
    (
        7, '2014_10_12_100000_create_password_reset_tokens_table', 1
    ),
    (
        8, '2019_08_19_000000_create_failed_jobs_table', 1
    ),
    (
        9, '2019_12_14_000001_create_personal_access_tokens_table', 1
    ),
    (
        10, '2023_12_10_211040_create_posts_table', 1
    );

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
    `email` varchar(255) NOT NULL, `token` varchar(255) NOT NULL, `created_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
    `id` bigint(20) UNSIGNED NOT NULL, `tokenable_type` varchar(255) NOT NULL, `tokenable_id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `token` varchar(64) NOT NULL, `abilities` text DEFAULT NULL, `last_used_at` timestamp NULL DEFAULT NULL, `expires_at` timestamp NULL DEFAULT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
    `id` bigint(20) UNSIGNED NOT NULL, `title` varchar(50) NOT NULL, `body` text NOT NULL, `deleted_at` timestamp NULL DEFAULT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO
    `posts` (
        `id`, `title`, `body`, `deleted_at`, `created_at`, `updated_at`
    )
VALUES (
        1, 'fatiam', 'welcom to laravel 10', NULL, '2023-12-11 12:21:09', '2023-12-11 13:15:11'
    ),
    (
        2, 'fatiam', 'welcom', NULL, '2023-12-11 12:22:35', '2023-12-11 13:16:57'
    ),
    (
        3, 'rawaa', 'baesaa', '2023-12-11 12:40:52', '2023-12-11 12:22:56', '2023-12-11 12:40:52'
    ),
    (
        4, 'jjjjj', 'j', NULL, '2023-12-11 12:51:41', '2023-12-11 12:51:41'
    );

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
    `id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `email` varchar(255) NOT NULL, `email_verified_at` timestamp NULL DEFAULT NULL, `password` varchar(255) NOT NULL, `remember_token` varchar(100) DEFAULT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens` ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (
    `tokenable_type`, `tokenable_id`
);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts` ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `four_seasons`
--
CREATE DATABASE IF NOT EXISTS `four_seasons` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE `four_seasons`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--
-- Error reading structure for table four_seasons.admin: #1932 - Table &#039;four_seasons.admin&#039; doesn&#039;t exist in engine
-- Error reading data for table four_seasons.admin: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `four_seasons`.`admin`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `category`
--
-- Error reading structure for table four_seasons.category: #1932 - Table &#039;four_seasons.category&#039; doesn&#039;t exist in engine
-- Error reading data for table four_seasons.category: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `four_seasons`.`category`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--
-- Error reading structure for table four_seasons.menu: #1932 - Table &#039;four_seasons.menu&#039; doesn&#039;t exist in engine
-- Error reading data for table four_seasons.menu: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `four_seasons`.`menu`&#039; at line 1
--
-- Database: `larablog`
--
CREATE DATABASE IF NOT EXISTS `larablog` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE `larablog`;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
    `id` bigint(20) UNSIGNED NOT NULL, `uuid` varchar(255) NOT NULL, `connection` text NOT NULL, `queue` text NOT NULL, `payload` longtext NOT NULL, `exception` longtext NOT NULL, `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
    `id` int(10) UNSIGNED NOT NULL, `migration` varchar(255) NOT NULL, `batch` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO
    `migrations` (`id`, `migration`, `batch`)
VALUES (
        1, '2014_10_12_000000_create_users_table', 1
    ),
    (
        2, '2014_10_12_100000_create_password_reset_tokens_table', 1
    ),
    (
        3, '2019_08_19_000000_create_failed_jobs_table', 1
    ),
    (
        4, '2019_12_14_000001_create_personal_access_tokens_table', 1
    ),
    (
        5, '2023_12_16_035739_create_permissions_table', 1
    ),
    (
        6, '2023_12_16_035833_create_roles_table', 1
    ),
    (
        7, '2023_12_16_070548_create_permission_role_table', 1
    ),
    (
        8, '2023_12_16_070742_create_role_user_table', 1
    ),
    (
        9, '2023_12_20_053225_create_tenants_table', 1
    ),
    (
        10, '2023_12_26_053145_create_rates_table', 1
    ),
    (
        11, '2024_01_01_092600_create_pages_table', 1
    ),
    (
        12, '2024_01_05_073501_create_settings_table', 1
    );

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
    `id` bigint(20) UNSIGNED NOT NULL, `slug` varchar(255) NOT NULL, `title` varchar(255) NOT NULL, `content` varchar(255) NOT NULL, `user_id` bigint(20) UNSIGNED NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
    `email` varchar(255) NOT NULL, `token` varchar(255) NOT NULL, `created_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
    `id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `label` varchar(255) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO
    `permissions` (
        `id`, `name`, `label`, `created_at`, `updated_at`
    )
VALUES (
        1, 'access-dashboard', 'الوصول للوحة التحكم', '2024-01-06 06:24:54', '2024-01-06 06:24:54'
    ),
    (
        2, 'edit-own-content', 'تعديل المحتوى الخاص به', '2024-01-06 06:24:54', '2024-01-06 06:24:54'
    ),
    (
        3, 'edit-any-content', 'تعديل أي محتوى', '2024-01-06 06:24:54', '2024-01-06 06:24:54'
    );

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
    `role_id` bigint(20) UNSIGNED NOT NULL, `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO
    `permission_role` (`role_id`, `permission_id`)
VALUES (1, 1),
    (1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
    `id` bigint(20) UNSIGNED NOT NULL, `tokenable_type` varchar(255) NOT NULL, `tokenable_id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `token` varchar(64) NOT NULL, `abilities` text DEFAULT NULL, `last_used_at` timestamp NULL DEFAULT NULL, `expires_at` timestamp NULL DEFAULT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
    `id` bigint(20) UNSIGNED NOT NULL, `target_name` varchar(255) NOT NULL, `target_id` bigint(20) UNSIGNED NOT NULL, `user_id` bigint(20) UNSIGNED NOT NULL, `rating` int(11) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
    `id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `label` varchar(255) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO
    `roles` (
        `id`, `name`, `label`, `created_at`, `updated_at`
    )
VALUES (
        1, 'admin', 'مدير', '2024-01-06 06:24:55', '2024-01-06 06:24:55'
    ),
    (
        2, 'user', 'مستخدم', '2024-01-06 06:24:55', '2024-01-06 06:24:55'
    ),
    (
        3, 'teacher', 'معلم', '2024-01-06 06:26:11', '2024-01-06 06:26:11'
    );

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
    `role_id` bigint(20) UNSIGNED NOT NULL, `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES (1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
    `id` bigint(20) UNSIGNED NOT NULL, `setting_type` varchar(255) NOT NULL, `setting_name` varchar(255) NOT NULL, `setting_label` varchar(255) NOT NULL, `setting_value` varchar(255) DEFAULT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE `tenants` (
    `id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `label` varchar(255) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
    `id` bigint(20) UNSIGNED NOT NULL, `username` varchar(255) NOT NULL, `email` varchar(255) NOT NULL, `email_verified_at` timestamp NULL DEFAULT NULL, `password` varchar(255) NOT NULL, `remember_token` varchar(100) DEFAULT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO
    `users` (
        `id`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`
    )
VALUES (
        1, 'superadmin', 'superadmin@example.com', NULL, '$2y$12$qMskLsyCecMl.R6V6AZePeBgX9xkIiWQAgZsQ/VOnMgQwbvC.Y4W6', NULL, '2024-01-06 06:24:54', '2024-01-06 06:24:54'
    ),
    (
        2, 'admin', 'admin@example.com', NULL, '$2y$12$idQkfWqD1mZU4qbbD/1emuLBJ4DjssgQrJXJxFEuzPUBI48YmV5AG', NULL, '2024-01-06 06:24:55', '2024-01-06 06:24:55'
    );

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens` ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
ADD PRIMARY KEY (`role_id`, `permission_id`),
ADD KEY `permission_role_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (
    `tokenable_type`, `tokenable_id`
);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
ADD PRIMARY KEY (`role_id`, `user_id`),
ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `settings_setting_name_unique` (`setting_name`);

--
-- Indexes for table `tenants`
--
ALTER TABLE `tenants`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `tenants_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `users_username_unique` (`username`),
ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 13;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tenants`
--
ALTER TABLE `tenants`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
--
-- Database: `laravel`
--
CREATE DATABASE IF NOT EXISTS `laravel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE `laravel`;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
    `id` bigint(20) UNSIGNED NOT NULL, `title` varchar(255) NOT NULL, `start` date NOT NULL, `end` date NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
    `id` bigint(20) UNSIGNED NOT NULL, `uuid` varchar(255) NOT NULL, `connection` text NOT NULL, `queue` text NOT NULL, `payload` longtext NOT NULL, `exception` longtext NOT NULL, `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
    `id` int(10) UNSIGNED NOT NULL, `migration` varchar(255) NOT NULL, `batch` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO
    `migrations` (`id`, `migration`, `batch`)
VALUES (
        1, '2014_10_12_000000_create_users_table', 1
    ),
    (
        2, '2014_10_12_100000_create_password_reset_tokens_table', 1
    ),
    (
        3, '2019_08_19_000000_create_failed_jobs_table', 1
    ),
    (
        4, '2019_12_14_000001_create_personal_access_tokens_table', 1
    ),
    (
        5, '2023_12_21_071350_create_events_table', 2
    );

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
    `email` varchar(255) NOT NULL, `token` varchar(255) NOT NULL, `created_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
    `id` bigint(20) UNSIGNED NOT NULL, `tokenable_type` varchar(255) NOT NULL, `tokenable_id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `token` varchar(64) NOT NULL, `abilities` text DEFAULT NULL, `last_used_at` timestamp NULL DEFAULT NULL, `expires_at` timestamp NULL DEFAULT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
    `id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `email` varchar(255) NOT NULL, `email_verified_at` timestamp NULL DEFAULT NULL, `password` varchar(255) NOT NULL, `remember_token` varchar(100) DEFAULT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens` ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (
    `tokenable_type`, `tokenable_id`
);

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
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `laravel2`
--
CREATE DATABASE IF NOT EXISTS `laravel2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE `laravel2`;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--
-- Error reading structure for table laravel2.failed_jobs: #1932 - Table &#039;laravel2.failed_jobs&#039; doesn&#039;t exist in engine
-- Error reading data for table laravel2.failed_jobs: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `laravel2`.`failed_jobs`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--
-- Error reading structure for table laravel2.flights: #1932 - Table &#039;laravel2.flights&#039; doesn&#039;t exist in engine
-- Error reading data for table laravel2.flights: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `laravel2`.`flights`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--
-- Error reading structure for table laravel2.migrations: #1932 - Table &#039;laravel2.migrations&#039; doesn&#039;t exist in engine
-- Error reading data for table laravel2.migrations: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `laravel2`.`migrations`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--
-- Error reading structure for table laravel2.password_reset_tokens: #1932 - Table &#039;laravel2.password_reset_tokens&#039; doesn&#039;t exist in engine
-- Error reading data for table laravel2.password_reset_tokens: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `laravel2`.`password_reset_tokens`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--
-- Error reading structure for table laravel2.personal_access_tokens: #1932 - Table &#039;laravel2.personal_access_tokens&#039; doesn&#039;t exist in engine
-- Error reading data for table laravel2.personal_access_tokens: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `laravel2`.`personal_access_tokens`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Error reading structure for table laravel2.users: #1932 - Table &#039;laravel2.users&#039; doesn&#039;t exist in engine
-- Error reading data for table laravel2.users: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `laravel2`.`users`&#039; at line 1
--
-- Database: `maqar`
--
CREATE DATABASE IF NOT EXISTS `maqar` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE `maqar`;

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
    `id` bigint(20) UNSIGNED NOT NULL, `provider_id` bigint(20) UNSIGNED NOT NULL, `title` varchar(255) NOT NULL, `description` text NOT NULL, `type` varchar(255) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `directorates`
--

CREATE TABLE `directorates` (
    `id` bigint(20) UNSIGNED NOT NULL, `governorate_id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `directorates`
--

INSERT INTO
    `directorates` (
        `id`, `governorate_id`, `name`, `created_at`, `updated_at`
    )
VALUES (
        1, 1, 'المكلا', '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        2, 1, 'الشحر', '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        3, 1, 'غيل باوزير', '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    );

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
    `id` bigint(20) UNSIGNED NOT NULL, `uuid` varchar(255) NOT NULL, `connection` text NOT NULL, `queue` text NOT NULL, `payload` longtext NOT NULL, `exception` longtext NOT NULL, `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
    `id` bigint(20) UNSIGNED NOT NULL, `provider_id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
    `id` bigint(20) UNSIGNED NOT NULL, `path` varchar(255) NOT NULL, `fileType_id` bigint(20) UNSIGNED NOT NULL, `Target_id` bigint(20) UNSIGNED NOT NULL, `type` enum(
        'platform', 'provider', 'workspace', 'reservation'
    ) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO
    `files` (
        `id`, `path`, `fileType_id`, `Target_id`, `type`, `created_at`, `updated_at`
    )
VALUES (
        1, '20240118_062834_37.jpg', 1, 18, 'workspace', '2024-01-18 03:28:34', '2024-01-18 03:28:34'
    ),
    (
        2, '20240118_062834_pexels-max-rahubovskiy-7534177.jpg', 1, 18, 'workspace', '2024-01-18 03:28:34', '2024-01-18 03:28:34'
    ),
    (
        3, '20240118_062834_pexels-max-rahubovskiy-7534210.jpg', 1, 18, 'workspace', '2024-01-18 03:28:34', '2024-01-18 03:28:34'
    ),
    (
        4, '20240118_062834_pexels-max-rahubovskiy-7534211.jpg', 1, 18, 'workspace', '2024-01-18 03:28:34', '2024-01-18 03:28:34'
    ),
    (
        5, '20240118_062834_pexels-max-rahubovskiy-7534224.jpg', 1, 18, 'workspace', '2024-01-18 03:28:34', '2024-01-18 03:28:34'
    ),
    (
        6, '20240118_062834_37.jpg', 1, 1, 'workspace', NULL, NULL
    ),
    (
        7, '20240118_062834_37.jpg', 1, 2, 'workspace', NULL, NULL
    );

-- --------------------------------------------------------

--
-- Table structure for table `file_types`
--

CREATE TABLE `file_types` (
    `id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `governorates`
--

CREATE TABLE `governorates` (
    `id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `governorates`
--

INSERT INTO
    `governorates` (
        `id`, `name`, `created_at`, `updated_at`
    )
VALUES (
        1, 'حضرموت', '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    );

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
    `id` bigint(20) UNSIGNED NOT NULL, `user_id` bigint(20) UNSIGNED NOT NULL, `email` varchar(255) NOT NULL, `name` varchar(255) NOT NULL, `subject` varchar(255) NOT NULL, `message` varchar(255) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
    `id` int(10) UNSIGNED NOT NULL, `migration` varchar(255) NOT NULL, `batch` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO
    `migrations` (`id`, `migration`, `batch`)
VALUES (
        1, '2014_10_12_000000_create_users_table', 1
    ),
    (
        2, '2014_10_12_100000_create_password_reset_tokens_table', 1
    ),
    (
        3, '2019_08_19_000000_create_failed_jobs_table', 1
    ),
    (
        4, '2019_12_14_000001_create_personal_access_tokens_table', 1
    ),
    (
        5, '2024_01_03_174712_create-roles-table', 1
    ),
    (
        6, '2024_01_03_174906_create-role-user-table', 1
    ),
    (
        7, '2024_01_03_175046_create-permissions-table', 1
    ),
    (
        8, '2024_01_03_175322_create-permission-role-table', 1
    ),
    (
        9, '2024_01_04_083515_create_messages_table', 1
    ),
    (
        10, '2024_01_04_165211_create_providers_table', 1
    ),
    (
        11, '2024_01_04_165642_create_workspace_durations_table', 1
    ),
    (
        12, '2024_01_04_165709_create_workspace_types_table', 1
    ),
    (
        13, '2024_01_04_165833_create_workspaces_table', 1
    ),
    (
        14, '2024_01_04_165848_create_workspace_offers_table', 1
    ),
    (
        15, '2024_01_04_165949_create_services_table', 1
    ),
    (
        16, '2024_01_04_170048_create_features_table', 1
    ),
    (
        17, '2024_01_04_170313_create_reservations_table', 1
    ),
    (
        18, '2024_01_04_170326_create_orders_table', 1
    ),
    (
        19, '2024_01_04_170510_create_governorates_table', 1
    ),
    (
        20, '2024_01_04_170536_create_directorates_table', 1
    ),
    (
        21, '2024_01_04_170751_create_contents_table', 1
    ),
    (
        22, '2024_01_04_170815_create_files_table', 1
    ),
    (
        23, '2024_01_04_170823_create_file_types_table', 1
    ),
    (
        24, '2024_01_04_171707_create_payments_table', 1
    ),
    (
        25, '2024_01_04_183809_create_states_table', 1
    ),
    (
        26, '2024_01_04_191543_create_social_media_table', 1
    );

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
    `id` bigint(20) UNSIGNED NOT NULL, `reservation_id` bigint(20) UNSIGNED NOT NULL, `service_id` bigint(20) UNSIGNED NOT NULL, `quantity` double(8, 2) DEFAULT NULL, `price` double(8, 2) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO
    `orders` (
        `id`, `reservation_id`, `service_id`, `quantity`, `price`, `created_at`, `updated_at`
    )
VALUES (
        1, 2, 1, NULL, 18.21, '2024-01-18 06:59:57', '2024-01-18 06:59:57'
    ),
    (
        2, 2, 2, NULL, 5.00, '2024-01-18 06:59:57', '2024-01-18 06:59:57'
    ),
    (
        3, 2, 3, NULL, 14.50, '2024-01-18 06:59:57', '2024-01-18 06:59:57'
    ),
    (
        4, 4, 1, NULL, 18.21, '2024-01-18 07:04:32', '2024-01-18 07:04:32'
    ),
    (
        5, 4, 2, NULL, 5.00, '2024-01-18 07:04:32', '2024-01-18 07:04:32'
    ),
    (
        6, 4, 3, NULL, 14.50, '2024-01-18 07:04:32', '2024-01-18 07:04:32'
    ),
    (
        7, 5, 1, NULL, 18.21, '2024-01-18 07:37:22', '2024-01-18 07:37:22'
    ),
    (
        8, 5, 2, NULL, 5.00, '2024-01-18 07:37:22', '2024-01-18 07:37:22'
    ),
    (
        9, 5, 3, NULL, 14.50, '2024-01-18 07:37:22', '2024-01-18 07:37:22'
    ),
    (
        10, 6, 1, NULL, 18.21, '2024-01-18 07:50:23', '2024-01-18 07:50:23'
    ),
    (
        11, 6, 3, NULL, 14.50, '2024-01-18 07:50:23', '2024-01-18 07:50:23'
    ),
    (
        12, 8, 3, NULL, 14.50, '2024-01-18 07:58:33', '2024-01-18 07:58:33'
    ),
    (
        13, 9, 3, NULL, 14.50, '2024-01-18 08:00:56', '2024-01-18 08:00:56'
    ),
    (
        14, 10, 3, NULL, 14.50, '2024-01-18 08:02:19', '2024-01-18 08:02:19'
    ),
    (
        15, 11, 6, NULL, 25.00, '2024-01-18 08:09:07', '2024-01-18 08:09:07'
    ),
    (
        16, 12, 6, NULL, 25.00, '2024-01-18 08:11:48', '2024-01-18 08:11:48'
    ),
    (
        17, 13, 6, NULL, 25.00, '2024-01-18 08:13:08', '2024-01-18 08:13:08'
    ),
    (
        18, 13, 7, NULL, 2.00, '2024-01-18 08:13:08', '2024-01-18 08:13:08'
    ),
    (
        19, 14, 6, NULL, 25.00, '2024-01-18 08:18:37', '2024-01-18 08:18:37'
    ),
    (
        20, 14, 7, NULL, 2.00, '2024-01-18 08:18:37', '2024-01-18 08:18:37'
    ),
    (
        21, 15, 6, NULL, 25.00, '2024-01-18 08:19:37', '2024-01-18 08:19:37'
    ),
    (
        22, 16, 1, NULL, 18.21, '2024-01-18 08:21:20', '2024-01-18 08:21:20'
    ),
    (
        23, 16, 3, NULL, 14.50, '2024-01-18 08:21:20', '2024-01-18 08:21:20'
    ),
    (
        24, 17, 1, NULL, 18.21, '2024-01-18 08:22:46', '2024-01-18 08:22:46'
    ),
    (
        25, 17, 3, NULL, 14.50, '2024-01-18 08:22:46', '2024-01-18 08:22:46'
    ),
    (
        26, 18, 1, NULL, 18.21, '2024-01-18 08:23:28', '2024-01-18 08:23:28'
    ),
    (
        27, 18, 3, NULL, 14.50, '2024-01-18 08:23:28', '2024-01-18 08:23:28'
    ),
    (
        28, 19, 1, NULL, 18.21, '2024-01-18 08:26:39', '2024-01-18 08:26:39'
    ),
    (
        29, 19, 3, NULL, 14.50, '2024-01-18 08:26:39', '2024-01-18 08:26:39'
    ),
    (
        30, 20, 1, NULL, 18.21, '2024-01-18 08:29:30', '2024-01-18 08:29:30'
    ),
    (
        31, 21, 1, NULL, 18.21, '2024-01-18 08:30:55', '2024-01-18 08:30:55'
    ),
    (
        32, 22, 3, NULL, 14.50, '2024-01-18 08:31:19', '2024-01-18 08:31:19'
    ),
    (
        33, 23, 3, NULL, 14.50, '2024-01-18 08:37:01', '2024-01-18 08:37:01'
    ),
    (
        34, 24, 1, NULL, 18.21, '2024-01-18 08:37:22', '2024-01-18 08:37:22'
    ),
    (
        35, 24, 3, NULL, 14.50, '2024-01-18 08:37:22', '2024-01-18 08:37:22'
    ),
    (
        36, 25, 1, NULL, 18.21, '2024-01-18 08:37:54', '2024-01-18 08:37:54'
    ),
    (
        37, 25, 3, NULL, 14.50, '2024-01-18 08:37:54', '2024-01-18 08:37:54'
    ),
    (
        38, 26, 3, NULL, 14.50, '2024-01-18 08:38:38', '2024-01-18 08:38:38'
    ),
    (
        39, 27, 3, NULL, 14.50, '2024-01-18 08:39:26', '2024-01-18 08:39:26'
    ),
    (
        40, 28, 3, NULL, 14.50, '2024-01-18 08:39:43', '2024-01-18 08:39:43'
    ),
    (
        41, 29, 3, NULL, 14.50, '2024-01-18 08:40:29', '2024-01-18 08:40:29'
    ),
    (
        42, 30, 1, NULL, 18.21, '2024-01-18 08:45:29', '2024-01-18 08:45:29'
    ),
    (
        43, 30, 3, NULL, 14.50, '2024-01-18 08:45:29', '2024-01-18 08:45:29'
    ),
    (
        44, 31, 3, NULL, 14.50, '2024-01-18 08:46:06', '2024-01-18 08:46:06'
    ),
    (
        45, 32, 1, NULL, 18.21, '2024-01-18 08:48:08', '2024-01-18 08:48:08'
    ),
    (
        46, 33, 3, NULL, 14.50, '2024-01-18 08:52:42', '2024-01-18 08:52:42'
    ),
    (
        47, 34, 3, NULL, 14.50, '2024-01-18 09:00:41', '2024-01-18 09:00:41'
    ),
    (
        48, 35, 1, NULL, 18.21, '2024-01-18 10:03:26', '2024-01-18 10:03:26'
    ),
    (
        49, 36, 2, NULL, 5.00, '2024-01-18 10:03:56', '2024-01-18 10:03:56'
    ),
    (
        50, 37, 2, NULL, 5.00, '2024-01-18 11:44:27', '2024-01-18 11:44:27'
    ),
    (
        51, 37, 3, NULL, 14.50, '2024-01-18 11:44:27', '2024-01-18 11:44:27'
    ),
    (
        52, 38, 1, NULL, 18.21, '2024-01-18 11:46:11', '2024-01-18 11:46:11'
    ),
    (
        53, 38, 2, NULL, 5.00, '2024-01-18 11:46:11', '2024-01-18 11:46:11'
    ),
    (
        54, 38, 3, NULL, 14.50, '2024-01-18 11:46:11', '2024-01-18 11:46:11'
    ),
    (
        55, 39, 1, NULL, 18.21, '2024-01-18 11:49:01', '2024-01-18 11:49:01'
    ),
    (
        56, 39, 2, NULL, 5.00, '2024-01-18 11:49:01', '2024-01-18 11:49:01'
    ),
    (
        57, 39, 3, NULL, 14.50, '2024-01-18 11:49:01', '2024-01-18 11:49:01'
    ),
    (
        58, 40, 1, NULL, 18.21, '2024-01-18 12:39:07', '2024-01-18 12:39:07'
    ),
    (
        59, 40, 2, NULL, 5.00, '2024-01-18 12:39:07', '2024-01-18 12:39:07'
    ),
    (
        60, 40, 3, NULL, 14.50, '2024-01-18 12:39:07', '2024-01-18 12:39:07'
    ),
    (
        61, 41, 1, NULL, 18.21, '2024-01-18 14:19:49', '2024-01-18 14:19:49'
    ),
    (
        62, 41, 2, NULL, 5.00, '2024-01-18 14:19:49', '2024-01-18 14:19:49'
    ),
    (
        63, 41, 3, NULL, 14.50, '2024-01-18 14:19:49', '2024-01-18 14:19:49'
    ),
    (
        64, 42, 1, NULL, 18.21, '2024-01-18 15:21:24', '2024-01-18 15:21:24'
    ),
    (
        65, 42, 2, NULL, 5.00, '2024-01-18 15:21:24', '2024-01-18 15:21:24'
    ),
    (
        66, 43, 1, NULL, 18.21, '2024-01-18 15:22:00', '2024-01-18 15:22:00'
    ),
    (
        67, 43, 2, NULL, 5.00, '2024-01-18 15:22:00', '2024-01-18 15:22:00'
    ),
    (
        68, 44, 1, NULL, 18.21, '2024-01-18 15:33:59', '2024-01-18 15:33:59'
    ),
    (
        69, 44, 2, NULL, 5.00, '2024-01-18 15:33:59', '2024-01-18 15:33:59'
    ),
    (
        70, 45, 1, NULL, 18.21, '2024-01-18 15:40:15', '2024-01-18 15:40:15'
    ),
    (
        71, 45, 2, NULL, 5.00, '2024-01-18 15:40:15', '2024-01-18 15:40:15'
    ),
    (
        72, 45, 3, NULL, 14.50, '2024-01-18 15:40:15', '2024-01-18 15:40:15'
    ),
    (
        73, 46, 1, NULL, 18.21, '2024-01-18 16:19:04', '2024-01-18 16:19:04'
    ),
    (
        74, 46, 3, NULL, 14.50, '2024-01-18 16:19:04', '2024-01-18 16:19:04'
    ),
    (
        75, 47, 6, NULL, 25.00, '2024-01-18 16:37:09', '2024-01-18 16:37:09'
    ),
    (
        76, 47, 7, NULL, 2.00, '2024-01-18 16:37:09', '2024-01-18 16:37:09'
    ),
    (
        77, 48, 6, NULL, 25.00, '2024-01-18 16:39:19', '2024-01-18 16:39:19'
    ),
    (
        78, 49, 1, NULL, 18.21, '2024-01-18 17:20:26', '2024-01-18 17:20:26'
    ),
    (
        79, 49, 2, NULL, 5.00, '2024-01-18 17:20:26', '2024-01-18 17:20:26'
    ),
    (
        80, 49, 3, NULL, 14.50, '2024-01-18 17:20:26', '2024-01-18 17:20:26'
    ),
    (
        81, 50, 1, NULL, 18.21, '2024-01-18 17:21:03', '2024-01-18 17:21:03'
    ),
    (
        82, 50, 2, NULL, 5.00, '2024-01-18 17:21:03', '2024-01-18 17:21:03'
    ),
    (
        83, 50, 3, NULL, 14.50, '2024-01-18 17:21:03', '2024-01-18 17:21:03'
    );

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
    `email` varchar(255) NOT NULL, `token` varchar(255) NOT NULL, `created_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
    `id` bigint(20) UNSIGNED NOT NULL, `provider_id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `number` bigint(20) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
    `id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `label` varchar(255) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO
    `permissions` (
        `id`, `name`, `label`, `created_at`, `updated_at`
    )
VALUES (
        1, 'access-dashboard', 'الوصول للوحة التحكم', '2024-01-17 19:54:51', '2024-01-17 19:54:51'
    ),
    (
        2, 'edit-own-content', 'تعديل المحتوى', '2024-01-17 19:54:51', '2024-01-17 19:54:51'
    ),
    (
        3, 'add-user', 'اضافة مستخدم', '2024-01-17 19:54:51', '2024-01-17 19:54:51'
    ),
    (
        4, 'delete-user', 'حذف مستخدم', '2024-01-17 19:54:51', '2024-01-17 19:54:51'
    ),
    (
        5, 'add-workspace', 'اضافة مساحة', '2024-01-17 19:54:51', '2024-01-17 19:54:51'
    ),
    (
        6, 'edit-workspace', 'تعديل مساحة', '2024-01-17 19:54:51', '2024-01-17 19:54:51'
    ),
    (
        7, 'block-workspace', ' حظر مساحة ', '2024-01-17 19:54:51', '2024-01-17 19:54:51'
    ),
    (
        8, 'add-recervation', 'اضافة حجز', '2024-01-17 19:54:51', '2024-01-17 19:54:51'
    ),
    (
        9, 'confirm-recervation', 'تاكيد حجز', '2024-01-17 19:54:51', '2024-01-17 19:54:51'
    ),
    (
        10, 'cancel-recervation', 'الغاء حجز', '2024-01-17 19:54:51', '2024-01-17 19:54:51'
    ),
    (
        11, 'edit-recervation', ' تعديل حجز', '2024-01-17 19:54:51', '2024-01-17 19:54:51'
    ),
    (
        12, 'block-provider', 'حظر مزود مساحات', '2024-01-17 19:54:51', '2024-01-17 19:54:51'
    ),
    (
        13, 'accept-request', 'قبول طلبات الانضمام ', '2024-01-17 19:54:51', '2024-01-17 19:54:51'
    ),
    (
        14, 'reqect-request', 'رفض طلبات الانضمام ', '2024-01-17 19:54:51', '2024-01-17 19:54:51'
    ),
    (
        15, 'edit-provider-content', 'تعديل محتوى المزود', '2024-01-17 19:54:51', '2024-01-17 19:54:51'
    );

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
    `role_id` bigint(20) UNSIGNED NOT NULL, `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO
    `permission_role` (`role_id`, `permission_id`)
VALUES (1, 1),
    (1, 2),
    (1, 3),
    (1, 4),
    (1, 12),
    (1, 13),
    (1, 14),
    (2, 1),
    (2, 2),
    (2, 3),
    (2, 4),
    (2, 5),
    (2, 6),
    (2, 7),
    (3, 1),
    (3, 2),
    (3, 8),
    (3, 9),
    (3, 10),
    (3, 11),
    (4, 1),
    (4, 2),
    (4, 15),
    (5, 1),
    (5, 2),
    (5, 8),
    (5, 10);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
    `id` bigint(20) UNSIGNED NOT NULL, `tokenable_type` varchar(255) NOT NULL, `tokenable_id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `token` varchar(64) NOT NULL, `abilities` text DEFAULT NULL, `last_used_at` timestamp NULL DEFAULT NULL, `expires_at` timestamp NULL DEFAULT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `providers`
--

CREATE TABLE `providers` (
    `id` bigint(20) UNSIGNED NOT NULL, `user_id` bigint(20) UNSIGNED NOT NULL, `directorate_id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `title` varchar(255) NOT NULL, `email` varchar(255) NOT NULL, `address` varchar(255) NOT NULL, `currency` varchar(255) DEFAULT NULL, `phone` varchar(255) NOT NULL, `tradeDocument` varchar(255) NOT NULL, `logo` varchar(255) NOT NULL, `identity_NO` varchar(255) NOT NULL, `state` enum(
        'step1', 'approved', 'complete', 'reject'
    ) NOT NULL, `startWorkHour` int(11) DEFAULT NULL, `endWorkHour` int(11) DEFAULT NULL, `startWorkDay` enum(
        'السبت', 'الاحد', 'الاثنين', 'الثلاثاء', 'الاربعاء', 'الخميس', 'الجمعة'
    ) NOT NULL, `endWorkDay` enum(
        'السبت', 'الاحد', 'الاثنين', 'الثلاثاء', 'الاربعاء', 'الخميس', 'الجمعة'
    ) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `providers`
--

INSERT INTO
    `providers` (
        `id`, `user_id`, `directorate_id`, `name`, `title`, `email`, `address`, `currency`, `phone`, `tradeDocument`, `logo`, `identity_NO`, `state`, `startWorkHour`, `endWorkHour`, `startWorkDay`, `endWorkDay`, `created_at`, `updated_at`
    )
VALUES (
        1, 2, 1, 'Sanad', 'سند', 'provider@example.com', 'منطقة بلقيس', 'دولار', '1234567890', 'Trade Document', '/logo/pp.png', '1234500067890', 'complete', 7, 20, 'السبت', 'الخميس', '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        2, 4, 1, 'Abrage', 'ابراج السلام ', 'provider2@example.com', 'اربعين شقه ', 'رس', '1234567890', 'Trade Document', '/logo/pp.png', '1234500067890', 'complete', 8, 22, 'الاحد', 'الخميس', '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        3, 5, 2, 'Algelany', 'الجيلاني', 'provide3r@example.com', 'منطقة بلقيس', 'رس', '1234567890', 'Trade Document', '/logo/pp.png', '1234500067890', 'step1', 9, 22, 'الاحد', 'الخميس', '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    );

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
    `id` bigint(20) UNSIGNED NOT NULL, `user_id` bigint(20) UNSIGNED NOT NULL, `workspaceoffer_id` bigint(20) UNSIGNED NOT NULL, `state_id` bigint(20) UNSIGNED NOT NULL, `officPrice` double(8, 2) DEFAULT NULL, `voucher` varchar(255) DEFAULT NULL, `start_date` timestamp NULL DEFAULT NULL, `end_date` timestamp NULL DEFAULT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO
    `reservations` (
        `id`, `user_id`, `workspaceoffer_id`, `state_id`, `officPrice`, `voucher`, `start_date`, `end_date`, `created_at`, `updated_at`
    )
VALUES (
        1, 3, 2, 1, NULL, NULL, '2024-01-18 04:00:00', '2024-01-26 04:00:00', '2024-01-17 20:55:01', '2024-01-17 20:55:01'
    ),
    (
        2, 3, 5, 1, NULL, NULL, '2024-01-19 10:00:00', '2024-01-19 11:00:00', '2024-01-18 06:59:57', '2024-01-18 06:59:57'
    ),
    (
        3, 3, 5, 1, NULL, NULL, '2024-01-19 04:00:00', '2024-01-19 05:00:00', '2024-01-18 07:01:11', '2024-01-18 07:01:11'
    ),
    (
        4, 3, 5, 1, NULL, NULL, '2024-01-25 04:00:00', '2024-01-25 05:00:00', '2024-01-18 07:04:32', '2024-01-18 07:04:32'
    ),
    (
        5, 3, 5, 1, NULL, NULL, '2024-02-03 05:00:00', '2024-02-03 10:00:00', '2024-01-18 07:37:22', '2024-01-18 07:37:22'
    ),
    (
        6, 3, 5, 1, NULL, NULL, '2024-01-30 04:00:00', '2024-01-30 05:00:00', '2024-01-18 07:50:23', '2024-01-18 07:50:23'
    ),
    (
        7, 3, 5, 1, NULL, NULL, '2024-02-03 13:00:00', '2024-02-03 14:00:00', '2024-01-18 07:54:01', '2024-01-18 07:54:01'
    ),
    (
        8, 3, 5, 1, NULL, NULL, '2024-02-07 14:00:00', '2024-02-07 15:00:00', '2024-01-18 07:58:33', '2024-01-18 07:58:33'
    ),
    (
        9, 3, 5, 1, NULL, NULL, '2024-02-07 16:00:00', '2024-02-07 17:00:00', '2024-01-18 08:00:56', '2024-01-18 08:00:56'
    ),
    (
        10, 3, 5, 1, NULL, NULL, '2024-01-18 04:00:00', '2024-01-18 05:00:00', '2024-01-18 08:02:19', '2024-01-18 08:02:19'
    ),
    (
        11, 3, 52, 1, NULL, NULL, '2024-01-17 06:00:00', '2024-01-24 06:00:00', '2024-01-18 08:09:07', '2024-01-18 08:09:07'
    ),
    (
        12, 3, 52, 1, NULL, NULL, '2024-01-31 06:00:00', '2024-02-07 06:00:00', '2024-01-18 08:11:48', '2024-01-18 08:11:48'
    ),
    (
        13, 3, 52, 1, NULL, NULL, '2024-02-21 06:00:00', '2024-02-28 06:00:00', '2024-01-18 08:13:08', '2024-01-18 08:13:08'
    ),
    (
        14, 3, 52, 1, NULL, NULL, '2024-06-26 06:00:00', '2024-07-03 06:00:00', '2024-01-18 08:18:37', '2024-01-18 08:18:37'
    ),
    (
        15, 3, 52, 4, NULL, NULL, '2024-03-07 06:00:00', '2024-03-14 06:00:00', '2024-01-18 08:19:37', '2024-01-18 19:38:37'
    ),
    (
        16, 3, 21, 1, NULL, NULL, '2024-01-23 04:00:00', '2024-01-24 04:00:00', '2024-01-18 08:21:20', '2024-01-18 08:21:20'
    ),
    (
        17, 3, 21, 1, NULL, NULL, '2024-02-08 04:00:00', '2024-02-13 04:00:00', '2024-01-18 08:22:46', '2024-01-18 08:22:46'
    ),
    (
        18, 3, 21, 1, NULL, NULL, '2024-03-07 04:00:00', '2024-03-12 04:00:00', '2024-01-18 08:23:28', '2024-01-18 08:23:28'
    ),
    (
        19, 3, 21, 1, NULL, NULL, '2024-04-01 04:00:00', '2024-04-06 04:00:00', '2024-01-18 08:26:39', '2024-01-18 08:26:39'
    ),
    (
        20, 3, 21, 2, NULL, '37.jpg', '2024-01-25 04:00:00', '2024-01-26 04:00:00', '2024-01-18 08:29:30', '2024-01-18 19:26:40'
    ),
    (
        21, 3, 21, 1, NULL, NULL, '2024-01-18 04:00:00', '2024-01-19 04:00:00', '2024-01-18 08:30:55', '2024-01-18 08:30:55'
    ),
    (
        22, 3, 21, 1, NULL, NULL, '2024-01-09 04:00:00', '2024-01-10 04:00:00', '2024-01-18 08:31:19', '2024-01-18 08:31:19'
    ),
    (
        23, 3, 5, 1, NULL, NULL, '2024-05-01 04:00:00', '2024-05-01 05:00:00', '2024-01-18 08:37:01', '2024-01-18 08:37:01'
    ),
    (
        24, 3, 5, 1, NULL, NULL, '2025-03-14 04:00:00', '2025-03-14 05:00:00', '2024-01-18 08:37:22', '2024-01-18 08:37:22'
    ),
    (
        25, 3, 5, 1, NULL, NULL, '2024-01-31 04:00:00', '2024-01-31 05:00:00', '2024-01-18 08:37:54', '2024-01-18 08:37:54'
    ),
    (
        26, 3, 5, 1, NULL, NULL, '2024-03-27 04:00:00', '2024-03-27 05:00:00', '2024-01-18 08:38:38', '2024-01-18 08:38:38'
    ),
    (
        27, 3, 5, 4, NULL, NULL, '2024-01-04 04:00:00', '2024-01-04 05:00:00', '2024-01-18 08:39:26', '2024-01-18 19:38:18'
    ),
    (
        28, 3, 5, 1, NULL, NULL, '2024-01-09 04:00:00', '2024-01-09 05:00:00', '2024-01-18 08:39:43', '2024-01-18 08:39:43'
    ),
    (
        29, 3, 5, 1, NULL, NULL, '2024-01-01 04:00:00', '2024-01-01 05:00:00', '2024-01-18 08:40:29', '2024-01-18 08:40:29'
    ),
    (
        30, 3, 5, 1, NULL, NULL, '2024-04-04 04:00:00', '2024-04-04 05:00:00', '2024-01-18 08:45:29', '2024-01-18 08:45:29'
    ),
    (
        31, 3, 5, 1, NULL, NULL, '2024-04-18 04:00:00', '2024-04-18 05:00:00', '2024-01-18 08:46:06', '2024-01-18 08:46:06'
    ),
    (
        32, 3, 23, 1, NULL, NULL, '2024-02-08 04:00:00', '2024-03-08 04:00:00', '2024-01-18 08:48:08', '2024-01-18 08:48:08'
    ),
    (
        33, 3, 23, 2, NULL, 'pexels-max-rahubovskiy-7534224.jpg', '2025-03-20 04:00:00', '2025-04-20 04:00:00', '2024-01-18 08:52:41', '2024-01-18 19:19:28'
    ),
    (
        34, 3, 23, 1, NULL, NULL, '2025-05-20 04:00:00', '2025-06-20 04:00:00', '2024-01-18 09:00:41', '2024-01-18 09:00:41'
    ),
    (
        35, 3, 23, 1, NULL, NULL, '2023-04-08 04:00:00', '2023-09-08 04:00:00', '2024-01-18 10:03:26', '2024-01-18 10:03:26'
    ),
    (
        36, 3, 23, 1, 14.95, NULL, '2023-01-18 04:00:00', '2023-02-18 04:00:00', '2024-01-18 10:03:56', '2024-01-18 10:03:56'
    ),
    (
        37, 3, 1, 1, 5.99, NULL, '2024-02-08 04:00:00', '2024-02-08 05:00:00', '2024-01-18 11:44:27', '2024-01-18 11:44:27'
    ),
    (
        38, 3, 5, 1, 2.99, NULL, '2024-02-08 04:00:00', '2024-02-08 05:00:00', '2024-01-18 11:46:11', '2024-01-18 11:46:11'
    ),
    (
        39, 3, 5, 4, 14.95, '1_XrauPxswbcuwpo2rqxHJfQ.jpg', '2024-05-08 07:00:00', '2024-05-08 12:00:00', '2024-01-18 11:49:01', '2024-01-18 16:33:37'
    ),
    (
        40, 3, 23, 2, 120.00, '35.jpg', '2023-12-18 04:00:00', '2024-01-18 04:00:00', '2024-01-18 12:39:07', '2024-01-18 14:13:56'
    ),
    (
        41, 3, 23, 2, 120.00, NULL, '2023-09-18 04:00:00', '2023-10-18 04:00:00', '2024-01-18 14:19:49', '2024-01-18 14:19:58'
    ),
    (
        42, 3, 58, 2, 24.00, '35.jpg', '2024-01-19 04:00:00', '2024-01-22 04:00:00', '2024-01-18 15:21:24', '2024-01-18 19:23:23'
    ),
    (
        43, 3, 58, 4, 24.00, NULL, '2024-01-26 04:00:00', '2024-01-29 04:00:00', '2024-01-18 15:22:00', '2024-01-18 15:32:16'
    ),
    (
        44, 3, 2, 4, 32.97, NULL, '2025-05-28 04:00:00', '2025-05-31 04:00:00', '2024-01-18 15:33:59', '2024-01-18 15:34:42'
    ),
    (
        45, 3, 2, 2, 32.97, NULL, '2025-06-06 04:00:00', '2025-06-09 04:00:00', '2024-01-18 15:40:15', '2024-01-18 15:43:23'
    ),
    (
        46, 3, 2, 2, 21.98, NULL, '2025-06-25 04:00:00', '2025-06-27 04:00:00', '2024-01-18 16:19:04', '2024-01-18 16:20:35'
    ),
    (
        47, 3, 50, 4, 11.98, NULL, '2024-01-25 06:00:00', '2024-01-25 08:00:00', '2024-01-18 16:37:09', '2024-01-18 16:38:33'
    ),
    (
        48, 3, 50, 2, 29.95, '35.jpg', '2024-02-08 06:00:00', '2024-02-08 11:00:00', '2024-01-18 16:39:19', '2024-01-18 16:41:03'
    ),
    (
        49, 3, 57, 4, 10.00, NULL, '2024-01-01 04:00:00', '2024-01-01 06:00:00', '2024-01-18 17:20:26', '2024-01-18 17:20:53'
    ),
    (
        50, 3, 57, 2, 10.00, '35.jpg', '2024-01-01 04:00:00', '2024-01-01 06:00:00', '2024-01-18 17:21:03', '2024-01-18 17:21:49'
    );

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
    `id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `label` varchar(255) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO
    `roles` (
        `id`, `name`, `label`, `created_at`, `updated_at`
    )
VALUES (
        1, 'super-admin', 'مدير المنصة', '2024-01-17 19:54:53', '2024-01-17 19:54:53'
    ),
    (
        2, 'admin', 'مزود مساحات', '2024-01-17 19:54:53', '2024-01-17 19:54:53'
    ),
    (
        3, 'reception', 'استقبال', '2024-01-17 19:54:53', '2024-01-17 19:54:53'
    ),
    (
        4, 'content-admin', 'مسؤول المحتوى', '2024-01-17 19:54:53', '2024-01-17 19:54:53'
    ),
    (
        5, 'client', 'عميل', '2024-01-17 19:54:53', '2024-01-17 19:54:53'
    );

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
    `role_id` bigint(20) UNSIGNED NOT NULL, `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO
    `role_user` (`role_id`, `user_id`)
VALUES (1, 1),
    (2, 2),
    (2, 4),
    (2, 5),
    (5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
    `id` bigint(20) UNSIGNED NOT NULL, `provider_id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `price` double(8, 2) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO
    `services` (
        `id`, `provider_id`, `name`, `price`, `created_at`, `updated_at`
    )
VALUES (
        1, 1, 'مشروبات', 18.21, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        2, 1, 'موقف سيارة', 5.00, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        3, 1, ' بروجيكتر', 14.50, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        4, 2, 'بروجيكتر', 12.00, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        5, 2, 'مشروبات', 4.00, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        6, 3, 'وجبة', 25.00, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        7, 3, 'مواقف سيارة', 2.00, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    );

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
    `id` bigint(20) UNSIGNED NOT NULL, `user_id` bigint(20) UNSIGNED NOT NULL, `link` varchar(255) NOT NULL, `type` enum(
        'Facebook', 'Instagram', 'Twitter', 'Linkedin'
    ) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
    `id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `title` varchar(255) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO
    `states` (
        `id`, `name`, `title`, `created_at`, `updated_at`
    )
VALUES (
        1, 'unconfirmed', 'غير مؤكد', '2024-01-18 13:33:28', '2024-01-18 13:33:28'
    ),
    (
        2, 'under_review', 'قيد المراجعة', '2024-01-18 13:33:28', '2024-01-18 13:33:28'
    ),
    (
        3, 'confirmed', 'مؤكد', '2024-01-18 13:33:28', '2024-01-18 13:33:28'
    ),
    (
        4, 'canceled', 'ملغي', '2024-01-18 13:33:28', '2024-01-18 13:33:28'
    ),
    (
        5, 'rejected', 'مرفوض', '2024-01-18 13:33:28', '2024-01-18 13:33:28'
    );

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
    `id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `email` varchar(255) NOT NULL, `email_verified_at` timestamp NULL DEFAULT NULL, `password` varchar(255) NOT NULL, `phone` varchar(255) NOT NULL, `remember_token` varchar(100) DEFAULT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO
    `users` (
        `id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `remember_token`, `created_at`, `updated_at`
    )
VALUES (
        1, 'فاطمة بكر بكران', 'fatima@example.com', NULL, '$2y$12$LeoMu8qgXqU1tV5V3Bgc8.wIj9Yw2otoZN8oilVVzuNfB49EhPpC2', '789456123', NULL, '2024-01-17 19:54:52', '2024-01-17 19:54:52'
    ),
    (
        2, 'روعة محمد باعيسى', 'rawaa@example.com', NULL, '$2y$12$C2HRRzXAGzehleVIpONWZu2qGv3busNvdBDQiZG1X7LGp/FAyxppu', '789456789', NULL, '2024-01-17 19:54:52', '2024-01-17 19:54:52'
    ),
    (
        3, 'رغد محمد العطاس', 'ragad@example.com', NULL, '$2y$12$tiOs8PvtfFI2HPST2HuGlu7Y6FjzQQIPz2CGgGMybAYzfBE.9JGry', '789788123', NULL, '2024-01-17 19:54:52', '2024-01-17 19:54:52'
    ),
    (
        4, 'فاطمة محمد بن عبد العزيز', 'fofo1@example.com', NULL, '$2y$12$bjYtRdKnxtj2Vax0hNTyPuLtZa1hPM5fih5DWOM4.7gse3nxY5WoS', '787856123', NULL, '2024-01-17 19:54:53', '2024-01-17 19:54:53'
    ),
    (
        5, 'سامية محمد بن الشبيبي', 'soso1@example.com', NULL, '$2y$12$1hSL.3sCxrc0XlPigUpom.eFflk0ngh83MpDbITV22MrNVIzkGflu', '789776123', NULL, '2024-01-17 19:54:53', '2024-01-17 19:54:53'
    );

-- --------------------------------------------------------

--
-- Table structure for table `workspaces`
--

CREATE TABLE `workspaces` (
    `id` bigint(20) UNSIGNED NOT NULL, `provider_id` bigint(20) UNSIGNED NOT NULL, `workspaceType_id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `title` varchar(255) NOT NULL, `description` varchar(255) NOT NULL, `maxPeople` int(11) NOT NULL, `area` int(11) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `workspaces`
--

INSERT INTO
    `workspaces` (
        `id`, `provider_id`, `workspaceType_id`, `name`, `title`, `description`, `maxPeople`, `area`, `created_at`, `updated_at`
    )
VALUES (
        1, 1, 1, 'Workspace-1x', 'مكتب 1', 'Workspace Description', 2, 100, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        2, 1, 1, 'Workspace-2x', ' مكتب 2 ', 'Workspace Description', 5, 100, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        3, 1, 2, 'Workspace-3x', 'مكتب 3', 'Workspace Description', 18, 100, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        4, 1, 3, 'room-1x', 'غرفة اجتماعات', 'Workspace Description', 20, 100, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        5, 1, 2, 'Workspace-4x', 'مكتب 4', 'Workspace Description', 10, 100, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        6, 1, 1, 'Workspace-5x', 'مكتب 5', 'Workspace Description', 10, 100, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        7, 1, 3, 'Workspace-6x', 'غرفة اجتماعات', 'Workspace Description', 10, 100, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        8, 2, 1, 'Workspace-y1', 'مكتب 1', 'Workspace Description', 2, 100, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        9, 2, 1, 'Workspace-y2', ' مكتب 2 ', 'Workspace Description', 5, 100, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        10, 2, 2, 'Workspace-y3', 'مكتب 3', 'Workspace Description', 18, 100, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        11, 2, 3, 'room-y1', 'غرفة اجتماعات', 'Workspace Description', 20, 100, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        12, 2, 2, 'Workspace-y4', 'مكتب 4', 'Workspace Description', 10, 100, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        13, 2, 1, 'Workspace-y5', 'مكتب 5', 'Workspace Description', 10, 100, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        14, 2, 3, 'room-y2', 'غرفة اجتماعات الكبرى', 'Workspace Description', 10, 100, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        15, 3, 1, 'Workspace-z1', 'مكتب 4', 'Workspace Description', 3, 100, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        16, 3, 2, 'Workspace-z2', 'مكتب 5', 'Workspace Description', 5, 100, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        17, 3, 3, 'room-z1', 'غرفة اجتماعات', 'Workspace Description', 10, 100, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        18, 1, 1, 'Alyahya_Workspace', 'مكتب اليحيى', 'مكتب مطل على البحر في الدور الرابع', 4, 50, '2024-01-18 03:28:34', '2024-01-18 03:28:34'
    );

-- --------------------------------------------------------

--
-- Table structure for table `workspace_durations`
--

CREATE TABLE `workspace_durations` (
    `id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `title` varchar(255) NOT NULL, `description` varchar(255) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `workspace_durations`
--

INSERT INTO
    `workspace_durations` (
        `id`, `name`, `title`, `description`, `created_at`, `updated_at`
    )
VALUES (
        1, 'hour', 'ساعة', 'Duration Description', '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        2, 'day', 'يوم', 'Duration Description', '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        3, 'week', 'اسبوع', 'Duration Description', '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        4, 'month', 'شهر', 'Duration Description', '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    );

-- --------------------------------------------------------

--
-- Table structure for table `workspace_offers`
--

CREATE TABLE `workspace_offers` (
    `id` bigint(20) UNSIGNED NOT NULL, `workspace_id` bigint(20) UNSIGNED NOT NULL, `workspaceDuration_id` bigint(20) UNSIGNED NOT NULL, `price` double(8, 2) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `workspace_offers`
--

INSERT INTO
    `workspace_offers` (
        `id`, `workspace_id`, `workspaceDuration_id`, `price`, `created_at`, `updated_at`
    )
VALUES (
        1, 1, 1, 5.99, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        2, 1, 2, 10.99, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        3, 1, 3, 12.00, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        4, 1, 4, 120.00, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        5, 2, 1, 2.99, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        6, 2, 2, 13.99, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        7, 2, 3, 13.00, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        8, 2, 4, 123.00, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        9, 3, 1, 5.99, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        10, 3, 2, 10.99, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        11, 3, 3, 12.00, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        12, 3, 4, 120.00, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        13, 4, 1, 5.99, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        14, 4, 2, 10.99, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        15, 4, 3, 12.00, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        16, 5, 1, 5.99, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        17, 5, 2, 10.99, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        18, 5, 3, 12.00, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        19, 5, 4, 120.00, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        20, 6, 1, 7.99, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        21, 6, 2, 17.99, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        22, 6, 3, 15.00, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        23, 6, 4, 120.00, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        24, 7, 1, 5.99, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        25, 7, 2, 10.99, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        26, 7, 4, 120.00, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        27, 8, 1, 5.99, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        28, 8, 3, 12.00, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        29, 8, 4, 120.00, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        30, 9, 1, 5.99, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        31, 9, 2, 10.99, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        32, 9, 3, 12.00, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        33, 9, 4, 120.00, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        34, 10, 1, 5.99, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        35, 10, 2, 10.99, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        36, 10, 3, 12.00, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        37, 10, 4, 120.00, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        38, 11, 1, 5.99, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        39, 11, 2, 10.99, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        40, 12, 3, 12.00, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        41, 12, 4, 120.00, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        42, 13, 1, 2.99, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        43, 13, 2, 13.99, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        44, 13, 3, 13.00, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        45, 14, 4, 123.00, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        46, 14, 1, 5.99, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        47, 14, 2, 10.99, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        48, 15, 3, 12.00, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        49, 15, 4, 120.00, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        50, 15, 1, 5.99, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        51, 16, 2, 10.99, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        52, 16, 3, 12.00, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        53, 16, 1, 5.99, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        54, 16, 2, 10.99, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        55, 17, 3, 12.00, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        56, 17, 4, 120.00, '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        57, 18, 1, 5.00, '2024-01-18 03:28:34', '2024-01-18 03:28:34'
    ),
    (
        58, 18, 2, 8.00, '2024-01-18 03:28:34', '2024-01-18 03:28:34'
    ),
    (
        59, 18, 3, 15.00, '2024-01-18 03:28:34', '2024-01-18 03:28:34'
    );

-- --------------------------------------------------------

--
-- Table structure for table `workspace_types`
--

CREATE TABLE `workspace_types` (
    `id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `label` varchar(255) NOT NULL, `description` varchar(255) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `workspace_types`
--

INSERT INTO
    `workspace_types` (
        `id`, `name`, `label`, `description`, `created_at`, `updated_at`
    )
VALUES (
        1, 'private_office', 'مكتب خاص', ' مساحة مخصصة  لتلبية احتياجات ومتطلبات الفرد يمكنك من اداء أغراض العمل أو الدراسة أو الهوايات أو أي نشاط يتطلب مكان هادئ ومريح للتركيز والإنتاجية.', '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        2, 'shared_office', 'مكتب مشترك', ' مساحة تعمل على مشاركتها بين عدة أفراد أو فرق في بيئة عمل مشتركة. يقدم مكتب المشاركة فرصة للأشخاص المختلفين للعمل معًا في نفس المكان والتواصل وتبادل الأفكار والموارد.', '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    ),
    (
        3, 'Meetings_room', 'غرفة إجتماعات', 'مساحة مخصصة تستخدم لعقد الاجتماعات والمناقشات بين الأشخاص في بيئة عمل أو مكان آخر. تهدف غرفة الاجتماعات إلى توفير بيئة ملائمة ومجهزة للتواصل واتخاذ القرارات وتبادل الأفكار والمعلومات.', '2024-01-17 19:54:54', '2024-01-17 19:54:54'
    );

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
ADD PRIMARY KEY (`id`),
ADD KEY `contents_provider_id_foreign` (`provider_id`);

--
-- Indexes for table `directorates`
--
ALTER TABLE `directorates`
ADD PRIMARY KEY (`id`),
ADD KEY `directorates_governorate_id_foreign` (`governorate_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
ADD PRIMARY KEY (`id`),
ADD KEY `features_provider_id_foreign` (`provider_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_types`
--
ALTER TABLE `file_types` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `governorates`
--
ALTER TABLE `governorates` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
ADD PRIMARY KEY (`id`),
ADD KEY `messages_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
ADD PRIMARY KEY (`id`),
ADD KEY `orders_service_id_foreign` (`service_id`),
ADD KEY `orders_reservation_id_foreign` (`reservation_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens` ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
ADD PRIMARY KEY (`id`),
ADD KEY `payments_provider_id_foreign` (`provider_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
ADD UNIQUE KEY `permission_role_role_id_permission_id_unique` (`role_id`, `permission_id`),
ADD KEY `permission_role_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (
    `tokenable_type`, `tokenable_id`
);

--
-- Indexes for table `providers`
--
ALTER TABLE `providers`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `providers_user_id_unique` (`user_id`),
ADD UNIQUE KEY `providers_name_unique` (`name`),
ADD UNIQUE KEY `providers_title_unique` (`title`),
ADD UNIQUE KEY `providers_email_unique` (`email`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
ADD PRIMARY KEY (`id`),
ADD KEY `reservations_user_id_foreign` (`user_id`),
ADD KEY `reservations_workspaceoffer_id_foreign` (`workspaceoffer_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
ADD PRIMARY KEY (`role_id`, `user_id`),
ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
ADD PRIMARY KEY (`id`),
ADD KEY `services_provider_id_foreign` (`provider_id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
ADD PRIMARY KEY (`id`),
ADD KEY `social_media_user_id_foreign` (`user_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `workspaces`
--
ALTER TABLE `workspaces`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `workspaces_name_unique` (`name`),
ADD KEY `workspaces_provider_id_foreign` (`provider_id`),
ADD KEY `workspaces_workspacetype_id_foreign` (`workspaceType_id`);

--
-- Indexes for table `workspace_durations`
--
ALTER TABLE `workspace_durations` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workspace_offers`
--
ALTER TABLE `workspace_offers`
ADD PRIMARY KEY (`id`),
ADD KEY `workspace_offers_workspace_id_foreign` (`workspace_id`),
ADD KEY `workspace_offers_workspaceduration_id_foreign` (`workspaceDuration_id`);

--
-- Indexes for table `workspace_types`
--
ALTER TABLE `workspace_types` ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `directorates`
--
ALTER TABLE `directorates`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 8;

--
-- AUTO_INCREMENT for table `file_types`
--
ALTER TABLE `file_types`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `governorates`
--
ALTER TABLE `governorates`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 27;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 84;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `providers`
--
ALTER TABLE `providers`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 4;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 51;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 8;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 6;

--
-- AUTO_INCREMENT for table `workspaces`
--
ALTER TABLE `workspaces`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 19;

--
-- AUTO_INCREMENT for table `workspace_durations`
--
ALTER TABLE `workspace_durations`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 5;

--
-- AUTO_INCREMENT for table `workspace_offers`
--
ALTER TABLE `workspace_offers`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 60;

--
-- AUTO_INCREMENT for table `workspace_types`
--
ALTER TABLE `workspace_types`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contents`
--
ALTER TABLE `contents`
ADD CONSTRAINT `contents_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `directorates`
--
ALTER TABLE `directorates`
ADD CONSTRAINT `directorates_governorate_id_foreign` FOREIGN KEY (`governorate_id`) REFERENCES `governorates` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `features`
--
ALTER TABLE `features`
ADD CONSTRAINT `features_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
ADD CONSTRAINT `messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
ADD CONSTRAINT `orders_reservation_id_foreign` FOREIGN KEY (`reservation_id`) REFERENCES `reservations` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `orders_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
ADD CONSTRAINT `payments_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `providers`
--
ALTER TABLE `providers`
ADD CONSTRAINT `providers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
ADD CONSTRAINT `reservations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `reservations_workspaceoffer_id_foreign` FOREIGN KEY (`workspaceoffer_id`) REFERENCES `workspace_offers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
ADD CONSTRAINT `services_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `social_media`
--
ALTER TABLE `social_media`
ADD CONSTRAINT `social_media_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `workspaces`
--
ALTER TABLE `workspaces`
ADD CONSTRAINT `workspaces_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `workspaces_workspacetype_id_foreign` FOREIGN KEY (`workspaceType_id`) REFERENCES `workspace_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `workspace_offers`
--
ALTER TABLE `workspace_offers`
ADD CONSTRAINT `workspace_offers_workspace_id_foreign` FOREIGN KEY (`workspace_id`) REFERENCES `workspaces` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `workspace_offers_workspaceduration_id_foreign` FOREIGN KEY (`workspaceDuration_id`) REFERENCES `workspace_durations` (`id`) ON DELETE CASCADE;
--
-- Database: `miniblog`
--
CREATE DATABASE IF NOT EXISTS `miniblog` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE `miniblog`;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
    `id` bigint(20) UNSIGNED NOT NULL, `uuid` varchar(255) NOT NULL, `connection` text NOT NULL, `queue` text NOT NULL, `payload` longtext NOT NULL, `exception` longtext NOT NULL, `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
    `id` int(10) UNSIGNED NOT NULL, `migration` varchar(255) NOT NULL, `batch` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO
    `migrations` (`id`, `migration`, `batch`)
VALUES (
        1, '2014_10_12_000000_create_users_table', 1
    ),
    (
        2, '2014_10_12_100000_create_password_reset_tokens_table', 1
    ),
    (
        3, '2019_08_19_000000_create_failed_jobs_table', 1
    ),
    (
        4, '2019_12_14_000001_create_personal_access_tokens_table', 1
    ),
    (
        5, '2023_12_16_035739_create_permissions_table', 1
    ),
    (
        6, '2023_12_16_035833_create_roles_table', 1
    ),
    (
        7, '2023_12_16_070548_create_permission_role_table', 1
    ),
    (
        8, '2023_12_16_070742_create_role_user_table', 1
    );

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
    `email` varchar(255) NOT NULL, `token` varchar(255) NOT NULL, `created_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
    `id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `label` varchar(255) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO
    `permissions` (
        `id`, `name`, `label`, `created_at`, `updated_at`
    )
VALUES (
        1, 'access-dashboard', 'Access Dashboard', '2023-12-18 07:18:36', '2023-12-18 07:18:36'
    ),
    (
        2, 'edit-own-content', 'Edit Own Content', '2023-12-18 07:18:36', '2023-12-18 07:18:36'
    ),
    (
        3, 'edit-any-content', 'Edit Any Content', '2023-12-18 07:18:36', '2023-12-18 07:18:36'
    );

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
    `role_id` bigint(20) UNSIGNED NOT NULL, `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO
    `permission_role` (`role_id`, `permission_id`)
VALUES (1, 1),
    (1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
    `id` bigint(20) UNSIGNED NOT NULL, `tokenable_type` varchar(255) NOT NULL, `tokenable_id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `token` varchar(64) NOT NULL, `abilities` text DEFAULT NULL, `last_used_at` timestamp NULL DEFAULT NULL, `expires_at` timestamp NULL DEFAULT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
    `id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `label` varchar(255) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO
    `roles` (
        `id`, `name`, `label`, `created_at`, `updated_at`
    )
VALUES (
        1, 'admin', 'Administrator', '2023-12-18 07:18:36', '2023-12-18 07:18:36'
    ),
    (
        2, 'user', 'Regular User', '2023-12-18 07:18:36', '2023-12-18 07:18:36'
    );

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
    `role_id` bigint(20) UNSIGNED NOT NULL, `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES (1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
    `id` bigint(20) UNSIGNED NOT NULL, `username` varchar(255) NOT NULL, `email` varchar(255) NOT NULL, `email_verified_at` timestamp NULL DEFAULT NULL, `password` varchar(255) NOT NULL, `remember_token` varchar(100) DEFAULT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO
    `users` (
        `id`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`
    )
VALUES (
        1, 'superadmin', 'superadmin@example.com', NULL, '$2y$12$NRoXYxcJZEBHk0lvce054ebJv8VaW/PkgTcwAFrLd2cZglmRRUmuW', NULL, '2023-12-18 07:18:36', '2023-12-18 07:18:36'
    );

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens` ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
ADD PRIMARY KEY (`role_id`, `permission_id`),
ADD KEY `permission_role_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (
    `tokenable_type`, `tokenable_id`
);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
ADD PRIMARY KEY (`role_id`, `user_id`),
ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `users_username_unique` (`username`),
ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
--
-- Database: `northwind`
--
CREATE DATABASE IF NOT EXISTS `northwind` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE `northwind`;

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
    `PersonID` int(11) DEFAULT NULL, `LastName` varchar(255) DEFAULT NULL, `FirstName` varchar(255) DEFAULT NULL, `Address` varchar(255) DEFAULT NULL, `City` varchar(255) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data for table `persons`
--

INSERT INTO
    `persons` (
        `PersonID`, `LastName`, `FirstName`, `Address`, `City`
    )
VALUES (
        1, 'bakran', 'fatima', 'mukkala', 'yemen'
    );

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
    `username` varchar(50) DEFAULT NULL, `password` varchar(50) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;

USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
    `id` int(10) UNSIGNED NOT NULL, `dbase` varchar(255) NOT NULL DEFAULT '', `user` varchar(255) NOT NULL DEFAULT '', `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '', `query` text NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_bin COMMENT = 'Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
    `db_name` varchar(64) NOT NULL, `col_name` varchar(64) NOT NULL, `col_type` varchar(64) NOT NULL, `col_length` text DEFAULT NULL, `col_collation` varchar(64) NOT NULL, `col_isNull` tinyint(1) NOT NULL, `col_extra` varchar(255) DEFAULT '', `col_default` text DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_bin COMMENT = 'Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
    `id` int(5) UNSIGNED NOT NULL, `db_name` varchar(64) NOT NULL DEFAULT '', `table_name` varchar(64) NOT NULL DEFAULT '', `column_name` varchar(64) NOT NULL DEFAULT '', `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '', `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '', `transformation` varchar(255) NOT NULL DEFAULT '', `transformation_options` varchar(255) NOT NULL DEFAULT '', `input_transformation` varchar(255) NOT NULL DEFAULT '', `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_bin COMMENT = 'Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
    `username` varchar(64) NOT NULL, `settings_data` text NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_bin COMMENT = 'Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
    `id` int(5) UNSIGNED NOT NULL, `username` varchar(64) NOT NULL, `export_type` varchar(10) NOT NULL, `template_name` varchar(64) NOT NULL, `template_data` text NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_bin COMMENT = 'Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
    `username` varchar(64) NOT NULL, `tables` text NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_bin COMMENT = 'Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
    `id` bigint(20) UNSIGNED NOT NULL, `username` varchar(64) NOT NULL DEFAULT '', `db` varchar(64) NOT NULL DEFAULT '', `table` varchar(64) NOT NULL DEFAULT '', `timevalue` timestamp NOT NULL DEFAULT current_timestamp(), `sqlquery` text NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_bin COMMENT = 'SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
    `username` varchar(64) NOT NULL, `item_name` varchar(64) NOT NULL, `item_type` varchar(64) NOT NULL, `db_name` varchar(64) NOT NULL, `table_name` varchar(64) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_bin COMMENT = 'Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
    `db_name` varchar(64) NOT NULL DEFAULT '', `page_nr` int(10) UNSIGNED NOT NULL, `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_bin COMMENT = 'PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
    `username` varchar(64) NOT NULL, `tables` text NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_bin COMMENT = 'Recently accessed tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
    `master_db` varchar(64) NOT NULL DEFAULT '', `master_table` varchar(64) NOT NULL DEFAULT '', `master_field` varchar(64) NOT NULL DEFAULT '', `foreign_db` varchar(64) NOT NULL DEFAULT '', `foreign_table` varchar(64) NOT NULL DEFAULT '', `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_bin COMMENT = 'Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
    `id` int(5) UNSIGNED NOT NULL, `username` varchar(64) NOT NULL DEFAULT '', `db_name` varchar(64) NOT NULL DEFAULT '', `search_name` varchar(64) NOT NULL DEFAULT '', `search_data` text NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_bin COMMENT = 'Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
    `db_name` varchar(64) NOT NULL DEFAULT '', `table_name` varchar(64) NOT NULL DEFAULT '', `pdf_page_number` int(11) NOT NULL DEFAULT 0, `x` float UNSIGNED NOT NULL DEFAULT 0, `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_bin COMMENT = 'Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
    `db_name` varchar(64) NOT NULL DEFAULT '', `table_name` varchar(64) NOT NULL DEFAULT '', `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_bin COMMENT = 'Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
    `username` varchar(64) NOT NULL, `db_name` varchar(64) NOT NULL, `table_name` varchar(64) NOT NULL, `prefs` text NOT NULL, `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_bin COMMENT = 'Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
    `db_name` varchar(64) NOT NULL, `table_name` varchar(64) NOT NULL, `version` int(10) UNSIGNED NOT NULL, `date_created` datetime NOT NULL, `date_updated` datetime NOT NULL, `schema_snapshot` text NOT NULL, `schema_sql` text DEFAULT NULL, `data_sql` longtext DEFAULT NULL, `tracking` set(
        'UPDATE', 'REPLACE', 'INSERT', 'DELETE', 'TRUNCATE', 'CREATE DATABASE', 'ALTER DATABASE', 'DROP DATABASE', 'CREATE TABLE', 'ALTER TABLE', 'RENAME TABLE', 'DROP TABLE', 'CREATE INDEX', 'DROP INDEX', 'CREATE VIEW', 'ALTER VIEW', 'DROP VIEW'
    ) DEFAULT NULL, `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_bin COMMENT = 'Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
    `username` varchar(64) NOT NULL, `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(), `config_data` text NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_bin COMMENT = 'User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO
    `pma__userconfig` (
        `username`, `timevalue`, `config_data`
    )
VALUES (
        'root', '2019-10-21 13:37:09', '{\"Console\\/Mode\":\"collapse\"}'
    );

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
    `usergroup` varchar(64) NOT NULL, `tab` varchar(64) NOT NULL, `allowed` enum('Y', 'N') NOT NULL DEFAULT 'N'
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_bin COMMENT = 'User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
    `username` varchar(64) NOT NULL, `usergroup` varchar(64) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_bin COMMENT = 'Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
ADD PRIMARY KEY (`db_name`, `col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `db_name` (
    `db_name`, `table_name`, `column_name`
);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings` ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `u_user_type_template` (
    `username`, `export_type`, `template_name`
);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite` ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
ADD PRIMARY KEY (`id`),
ADD KEY `username` (
    `username`, `db`, `table`, `timevalue`
);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
ADD PRIMARY KEY (
    `username`, `item_name`, `item_type`, `db_name`, `table_name`
);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
ADD PRIMARY KEY (`page_nr`),
ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent` ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
ADD PRIMARY KEY (
    `master_db`, `master_table`, `master_field`
),
ADD KEY `foreign_field` (`foreign_db`, `foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `u_savedsearches_username_dbname` (
    `username`, `db_name`, `search_name`
);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
ADD PRIMARY KEY (
    `db_name`, `table_name`, `pdf_page_number`
);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
ADD PRIMARY KEY (`db_name`, `table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
ADD PRIMARY KEY (
    `username`, `db_name`, `table_name`
);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
ADD PRIMARY KEY (
    `db_name`, `table_name`, `version`
);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig` ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
ADD PRIMARY KEY (`usergroup`, `tab`, `allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users` ADD PRIMARY KEY (`username`, `usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `query_builder`
--
CREATE DATABASE IF NOT EXISTS `query_builder` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE `query_builder`;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--
-- Error reading structure for table query_builder.failed_jobs: #1932 - Table &#039;query_builder.failed_jobs&#039; doesn&#039;t exist in engine
-- Error reading data for table query_builder.failed_jobs: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `query_builder`.`failed_jobs`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--
-- Error reading structure for table query_builder.migrations: #1932 - Table &#039;query_builder.migrations&#039; doesn&#039;t exist in engine
-- Error reading data for table query_builder.migrations: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `query_builder`.`migrations`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--
-- Error reading structure for table query_builder.password_reset_tokens: #1932 - Table &#039;query_builder.password_reset_tokens&#039; doesn&#039;t exist in engine
-- Error reading data for table query_builder.password_reset_tokens: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `query_builder`.`password_reset_tokens`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--
-- Error reading structure for table query_builder.personal_access_tokens: #1932 - Table &#039;query_builder.personal_access_tokens&#039; doesn&#039;t exist in engine
-- Error reading data for table query_builder.personal_access_tokens: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `query_builder`.`personal_access_tokens`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--
-- Error reading structure for table query_builder.posts: #1932 - Table &#039;query_builder.posts&#039; doesn&#039;t exist in engine
-- Error reading data for table query_builder.posts: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `query_builder`.`posts`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Error reading structure for table query_builder.users: #1932 - Table &#039;query_builder.users&#039; doesn&#039;t exist in engine
-- Error reading data for table query_builder.users: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `query_builder`.`users`&#039; at line 1
--
-- Database: `relationship`
--
CREATE DATABASE IF NOT EXISTS `relationship` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE `relationship`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
    `id` bigint(20) UNSIGNED NOT NULL, `body` varchar(255) NOT NULL, `post_id` bigint(20) UNSIGNED NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO
    `comments` (
        `id`, `body`, `post_id`, `created_at`, `updated_at`
    )
VALUES (
        1, 'it is program languash for website .', 1, NULL, NULL
    ),
    (
        2, 'use to back_end .', 1, NULL, NULL
    ),
    (
        3, 'it is a fremwork for php languash ;', 2, NULL, NULL
    ),
    (
        4, 'esay to use .', 2, NULL, NULL
    );

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
    `id` bigint(20) UNSIGNED NOT NULL, `uuid` varchar(255) NOT NULL, `connection` text NOT NULL, `queue` text NOT NULL, `payload` longtext NOT NULL, `exception` longtext NOT NULL, `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
    `id` int(10) UNSIGNED NOT NULL, `migration` varchar(255) NOT NULL, `batch` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO
    `migrations` (`id`, `migration`, `batch`)
VALUES (
        1, '2014_10_12_000000_create_users_table', 1
    ),
    (
        2, '2014_10_12_100000_create_password_reset_tokens_table', 1
    ),
    (
        3, '2019_08_19_000000_create_failed_jobs_table', 1
    ),
    (
        4, '2019_12_14_000001_create_personal_access_tokens_table', 1
    ),
    (
        5, '2023_12_12_204122_create_phones_table', 1
    ),
    (
        6, '2023_12_12_213020_create_posts_table', 1
    ),
    (
        7, '2023_12_12_213052_create_comments_table', 1
    ),
    (
        8, '2023_12_12_221243_create_roles_table', 2
    ),
    (
        9, '2023_12_12_221514_create_role_user_pivot_table', 2
    );

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
    `email` varchar(255) NOT NULL, `token` varchar(255) NOT NULL, `created_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
    `id` bigint(20) UNSIGNED NOT NULL, `tokenable_type` varchar(255) NOT NULL, `tokenable_id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `token` varchar(64) NOT NULL, `abilities` text DEFAULT NULL, `last_used_at` timestamp NULL DEFAULT NULL, `expires_at` timestamp NULL DEFAULT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE `phones` (
    `id` bigint(20) UNSIGNED NOT NULL, `number` varchar(10) NOT NULL, `user_id` bigint(20) UNSIGNED NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
    `id` bigint(20) UNSIGNED NOT NULL, `title` varchar(255) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO
    `posts` (
        `id`, `title`, `created_at`, `updated_at`
    )
VALUES (
        1, 'whate is php languash?', NULL, NULL
    ),
    (
        2, 'what is laravel framwork ??', NULL, NULL
    );

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
    `id` bigint(20) UNSIGNED NOT NULL, `role_name` varchar(255) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO
    `roles` (
        `id`, `role_name`, `created_at`, `updated_at`
    )
VALUES (1, 'Admin', NULL, NULL),
    (2, 'User', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user_pivot`
--

CREATE TABLE `role_user_pivot` (
    `id` bigint(20) UNSIGNED NOT NULL, `user_id` int(11) NOT NULL, `role_id` int(11) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user_pivot`
--

INSERT INTO
    `role_user_pivot` (
        `id`, `user_id`, `role_id`, `created_at`, `updated_at`
    )
VALUES (1, 1, 1, NULL, NULL),
    (2, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
    `id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `email` varchar(255) NOT NULL, `email_verified_at` timestamp NULL DEFAULT NULL, `password` varchar(255) NOT NULL, `remember_token` varchar(100) DEFAULT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO
    `users` (
        `id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`
    )
VALUES (
        1, 'fatima bakran', 'fati@gmail.com', NULL, '123456', NULL, NULL, NULL
    ),
    (
        2, 'Rawaa baesaa', 'roro@gmail.com', NULL, '123456', NULL, NULL, NULL
    );

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
ADD PRIMARY KEY (`id`),
ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens` ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (
    `tokenable_type`, `tokenable_id`
);

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
ADD PRIMARY KEY (`id`),
ADD KEY `phones_user_id_foreign` (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user_pivot`
--
ALTER TABLE `role_user_pivot` ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phones`
--
ALTER TABLE `phones`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 3;

--
-- AUTO_INCREMENT for table `role_user_pivot`
--
ALTER TABLE `role_user_pivot`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

--
-- Constraints for table `phones`
--
ALTER TABLE `phones`
ADD CONSTRAINT `phones_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
--
-- Database: `seeder`
--
CREATE DATABASE IF NOT EXISTS `seeder` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE `seeder`;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
    `id` bigint(20) UNSIGNED NOT NULL, `uuid` varchar(255) NOT NULL, `connection` text NOT NULL, `queue` text NOT NULL, `payload` longtext NOT NULL, `exception` longtext NOT NULL, `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
    `id` int(10) UNSIGNED NOT NULL, `migration` varchar(255) NOT NULL, `batch` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO
    `migrations` (`id`, `migration`, `batch`)
VALUES (
        1, '2014_10_12_000000_create_users_table', 1
    ),
    (
        2, '2014_10_12_100000_create_password_reset_tokens_table', 1
    ),
    (
        3, '2019_08_19_000000_create_failed_jobs_table', 1
    ),
    (
        4, '2019_12_14_000001_create_personal_access_tokens_table', 1
    ),
    (
        5, '2023_12_15_200803_create_posts_table', 2
    );

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
    `email` varchar(255) NOT NULL, `token` varchar(255) NOT NULL, `created_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
    `id` bigint(20) UNSIGNED NOT NULL, `tokenable_type` varchar(255) NOT NULL, `tokenable_id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `token` varchar(64) NOT NULL, `abilities` text DEFAULT NULL, `last_used_at` timestamp NULL DEFAULT NULL, `expires_at` timestamp NULL DEFAULT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
    `id` bigint(20) UNSIGNED NOT NULL, `title` varchar(255) NOT NULL, `body` text NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO
    `posts` (
        `id`, `title`, `body`, `created_at`, `updated_at`
    )
VALUES (
        1, 'Mr.', 'Facilis enim exercitationem fugiat repudiandae incidunt placeat quia consequuntur. Repellendus excepturi sed aut totam et quibusdam ut. Aperiam ut distinctio aspernatur ipsum.', '2023-12-15 17:25:35', '2023-12-15 17:25:35'
    ),
    (
        2, 'Ms.', 'Error totam molestias perspiciatis repudiandae. Deserunt quia sunt accusantium consectetur. Veritatis omnis earum et eum accusantium.', '2023-12-15 17:25:35', '2023-12-15 17:25:35'
    ),
    (
        3, 'Prof.', 'Consequatur ratione sed et. Nulla inventore mollitia asperiores id. Mollitia exercitationem consequuntur rerum ratione libero unde.', '2023-12-15 17:25:35', '2023-12-15 17:25:35'
    ),
    (
        4, 'Dr.', 'Cum debitis asperiores ducimus vero dolorem. Velit eaque laboriosam rem animi error officiis est molestias. Quisquam recusandae maiores ullam quis consequatur excepturi dolor nam.', '2023-12-15 17:25:35', '2023-12-15 17:25:35'
    ),
    (
        5, 'Prof.', 'Accusantium maxime atque expedita impedit quasi et sequi. Accusantium rerum atque ullam omnis atque qui. Impedit aut aperiam cum ipsum. Nihil sed rerum iusto nam et.', '2023-12-15 17:25:35', '2023-12-15 17:25:35'
    ),
    (
        6, 'Dr.', 'Aut non laborum commodi tempora et voluptatem. Eveniet quo rem quia. Accusantium repellat laborum quaerat quo.', '2023-12-15 17:25:35', '2023-12-15 17:25:35'
    ),
    (
        7, 'Prof.', 'Commodi sed omnis distinctio cupiditate. Ipsam voluptatem quos est ullam eos autem id odio. Id autem omnis et voluptas fugit aut laudantium.', '2023-12-15 17:25:35', '2023-12-15 17:25:35'
    ),
    (
        8, 'Ms.', 'Eius adipisci aut deleniti dolorum. Provident natus et doloribus sit ratione. Excepturi voluptas distinctio et eum dolorum. Aut sunt occaecati aut id modi.', '2023-12-15 17:25:35', '2023-12-15 17:25:35'
    ),
    (
        9, 'Mr.', 'Rerum quibusdam excepturi illo exercitationem voluptas ab. Omnis magni quo et ut iusto atque. Qui ipsam harum facilis non alias nobis veritatis. Fugit quo eveniet itaque mollitia qui.', '2023-12-15 17:25:35', '2023-12-15 17:25:35'
    ),
    (
        10, 'Prof.', 'Porro aspernatur quia ut qui quo non nobis. Ad cumque tenetur quasi quaerat ullam hic. Ullam omnis laboriosam veniam.', '2023-12-15 17:25:35', '2023-12-15 17:25:35'
    );

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
    `id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `email` varchar(255) NOT NULL, `email_verified_at` timestamp NULL DEFAULT NULL, `password` varchar(255) NOT NULL, `remember_token` varchar(100) DEFAULT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO
    `users` (
        `id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`
    )
VALUES (
        4, 'Jacinthe Kautzer I', 'zprosacco@example.net', '2023-12-15 17:04:50', '$2y$12$IQzME0yL1Aatumd5f5P9geJE77HWoxxQK8x1IeWfJ3oP4VBjZxkVu', 'SxPDKwfjjg', '2023-12-15 17:04:50', '2023-12-15 17:04:50'
    ),
    (
        5, 'Kayla Johnston', 'rbaumbach@example.com', '2023-12-15 17:04:50', '$2y$12$IQzME0yL1Aatumd5f5P9geJE77HWoxxQK8x1IeWfJ3oP4VBjZxkVu', 'Xgm3MPNRqw', '2023-12-15 17:04:50', '2023-12-15 17:04:50'
    ),
    (
        6, 'Allan Wehner', 'xmedhurst@example.com', '2023-12-15 17:04:50', '$2y$12$IQzME0yL1Aatumd5f5P9geJE77HWoxxQK8x1IeWfJ3oP4VBjZxkVu', 'Hg2f4JCgEt', '2023-12-15 17:04:50', '2023-12-15 17:04:50'
    ),
    (
        7, 'Ms. Meghan Dach', 'ava.jaskolski@example.com', '2023-12-15 17:04:50', '$2y$12$IQzME0yL1Aatumd5f5P9geJE77HWoxxQK8x1IeWfJ3oP4VBjZxkVu', 'xseJ3PXLz7', '2023-12-15 17:04:50', '2023-12-15 17:04:50'
    ),
    (
        8, 'Mr. Gaetano Mertz MD', 'dickinson.august@example.com', '2023-12-15 17:04:50', '$2y$12$IQzME0yL1Aatumd5f5P9geJE77HWoxxQK8x1IeWfJ3oP4VBjZxkVu', 'Y0lPzWuHzY', '2023-12-15 17:04:50', '2023-12-15 17:04:50'
    ),
    (
        9, 'Edythe Luettgen', 'eldridge.schmitt@example.org', '2023-12-15 17:04:50', '$2y$12$IQzME0yL1Aatumd5f5P9geJE77HWoxxQK8x1IeWfJ3oP4VBjZxkVu', '1M8JuiajaD', '2023-12-15 17:04:50', '2023-12-15 17:04:50'
    ),
    (
        10, 'Mara Luettgen', 'zokeefe@example.org', '2023-12-15 17:04:50', '$2y$12$IQzME0yL1Aatumd5f5P9geJE77HWoxxQK8x1IeWfJ3oP4VBjZxkVu', 'DIMASlZrMs', '2023-12-15 17:04:50', '2023-12-15 17:04:50'
    ),
    (
        11, 'Dr. Carmelo Sipes DVM', 'tiara47@example.net', '2023-12-15 17:04:50', '$2y$12$IQzME0yL1Aatumd5f5P9geJE77HWoxxQK8x1IeWfJ3oP4VBjZxkVu', 'MBxfqfVvwq', '2023-12-15 17:04:50', '2023-12-15 17:04:50'
    ),
    (
        12, 'Zella Torp', 'ethelyn.hansen@example.org', '2023-12-15 17:04:50', '$2y$12$IQzME0yL1Aatumd5f5P9geJE77HWoxxQK8x1IeWfJ3oP4VBjZxkVu', 'fv6W8XQKD6', '2023-12-15 17:04:50', '2023-12-15 17:04:50'
    ),
    (
        13, 'Alessandro Von', 'angus.lang@example.org', '2023-12-15 17:04:50', '$2y$12$IQzME0yL1Aatumd5f5P9geJE77HWoxxQK8x1IeWfJ3oP4VBjZxkVu', 'dscEGAeNtv', '2023-12-15 17:04:50', '2023-12-15 17:04:50'
    ),
    (
        14, 'Estel Osinski DDS', 'freeda25@example.com', '2023-12-15 17:04:50', '$2y$12$IQzME0yL1Aatumd5f5P9geJE77HWoxxQK8x1IeWfJ3oP4VBjZxkVu', '0CWHtSD0ei', '2023-12-15 17:04:50', '2023-12-15 17:04:50'
    ),
    (
        15, 'Jody Gleason', 'emmy59@example.com', '2023-12-15 17:04:50', '$2y$12$IQzME0yL1Aatumd5f5P9geJE77HWoxxQK8x1IeWfJ3oP4VBjZxkVu', 'hpfvSJ0UFu', '2023-12-15 17:04:50', '2023-12-15 17:04:50'
    ),
    (
        16, 'Mackenzie Leannon', 'hschneider@example.com', '2023-12-15 17:04:50', '$2y$12$IQzME0yL1Aatumd5f5P9geJE77HWoxxQK8x1IeWfJ3oP4VBjZxkVu', 'Jevrw0zOpb', '2023-12-15 17:04:50', '2023-12-15 17:04:50'
    ),
    (
        17, 'Ms. Cleora Wuckert Jr.', 'tressie.gorczany@example.com', '2023-12-15 17:04:50', '$2y$12$IQzME0yL1Aatumd5f5P9geJE77HWoxxQK8x1IeWfJ3oP4VBjZxkVu', 'nTlSL8QZYC', '2023-12-15 17:04:50', '2023-12-15 17:04:50'
    ),
    (
        18, 'Ms. Augustine Breitenberg Jr.', 'aliza05@example.net', '2023-12-15 17:04:50', '$2y$12$IQzME0yL1Aatumd5f5P9geJE77HWoxxQK8x1IeWfJ3oP4VBjZxkVu', 'WRntZe2E2F', '2023-12-15 17:04:50', '2023-12-15 17:04:50'
    ),
    (
        19, 'Fabiola Padberg', 'gleichner.sigrid@example.org', '2023-12-15 17:04:50', '$2y$12$IQzME0yL1Aatumd5f5P9geJE77HWoxxQK8x1IeWfJ3oP4VBjZxkVu', 'V9N50g7tvC', '2023-12-15 17:04:50', '2023-12-15 17:04:50'
    ),
    (
        20, 'Marielle Keebler', 'fay.patricia@example.org', '2023-12-15 17:04:50', '$2y$12$IQzME0yL1Aatumd5f5P9geJE77HWoxxQK8x1IeWfJ3oP4VBjZxkVu', 'VOjVOhJUi0', '2023-12-15 17:04:50', '2023-12-15 17:04:50'
    ),
    (
        21, 'Prof. Jett Schmitt MD', 'chase61@example.com', '2023-12-15 17:04:50', '$2y$12$IQzME0yL1Aatumd5f5P9geJE77HWoxxQK8x1IeWfJ3oP4VBjZxkVu', 'G86melBrDL', '2023-12-15 17:04:50', '2023-12-15 17:04:50'
    ),
    (
        22, 'Jessy Skiles', 'phahn@example.net', '2023-12-15 17:04:50', '$2y$12$IQzME0yL1Aatumd5f5P9geJE77HWoxxQK8x1IeWfJ3oP4VBjZxkVu', 'msQl4pg3d9', '2023-12-15 17:04:50', '2023-12-15 17:04:50'
    ),
    (
        23, 'Ayden Johnston I', 'schaden.crawford@example.net', '2023-12-15 17:04:50', '$2y$12$IQzME0yL1Aatumd5f5P9geJE77HWoxxQK8x1IeWfJ3oP4VBjZxkVu', 'qqWBRisVI7', '2023-12-15 17:04:50', '2023-12-15 17:04:50'
    ),
    (
        24, 'Laura Satterfield', 'friesen.jarrett@example.com', '2023-12-15 17:24:51', '$2y$12$m2g2BGyKUYPp39NbgsTCguJcfyVC/aqRlxSeamZQM8uaSCpae4CYi', 'wPQMByenAB', '2023-12-15 17:24:51', '2023-12-15 17:24:51'
    ),
    (
        25, 'Ora Kirlin', 'maude96@example.com', '2023-12-15 17:24:51', '$2y$12$m2g2BGyKUYPp39NbgsTCguJcfyVC/aqRlxSeamZQM8uaSCpae4CYi', 'w5HidfhVxS', '2023-12-15 17:24:51', '2023-12-15 17:24:51'
    ),
    (
        26, 'Chad Robel III', 'judson33@example.com', '2023-12-15 17:24:51', '$2y$12$m2g2BGyKUYPp39NbgsTCguJcfyVC/aqRlxSeamZQM8uaSCpae4CYi', '3HJbnzG8kI', '2023-12-15 17:24:51', '2023-12-15 17:24:51'
    ),
    (
        27, 'Rae Breitenberg', 'jettie87@example.com', '2023-12-15 17:24:51', '$2y$12$m2g2BGyKUYPp39NbgsTCguJcfyVC/aqRlxSeamZQM8uaSCpae4CYi', 'bXAKHv82Ei', '2023-12-15 17:24:51', '2023-12-15 17:24:51'
    ),
    (
        28, 'Nella Dibbert', 'heaney.alivia@example.net', '2023-12-15 17:24:51', '$2y$12$m2g2BGyKUYPp39NbgsTCguJcfyVC/aqRlxSeamZQM8uaSCpae4CYi', 'NHjCLdCS6n', '2023-12-15 17:24:51', '2023-12-15 17:24:51'
    ),
    (
        29, 'Kaya Cole', 'mdooley@example.com', '2023-12-15 17:24:51', '$2y$12$m2g2BGyKUYPp39NbgsTCguJcfyVC/aqRlxSeamZQM8uaSCpae4CYi', 'Trp54iiJ0S', '2023-12-15 17:24:51', '2023-12-15 17:24:51'
    ),
    (
        30, 'Tyrel Hodkiewicz DVM', 'ltromp@example.org', '2023-12-15 17:24:51', '$2y$12$m2g2BGyKUYPp39NbgsTCguJcfyVC/aqRlxSeamZQM8uaSCpae4CYi', 'Ua15dKU9wU', '2023-12-15 17:24:51', '2023-12-15 17:24:51'
    ),
    (
        31, 'Mrs. Crystal Prosacco', 'wisoky.lenore@example.org', '2023-12-15 17:24:51', '$2y$12$m2g2BGyKUYPp39NbgsTCguJcfyVC/aqRlxSeamZQM8uaSCpae4CYi', 'fHehLrAEAl', '2023-12-15 17:24:51', '2023-12-15 17:24:51'
    ),
    (
        32, 'Mrs. Dulce Bins MD', 'dennis.hahn@example.com', '2023-12-15 17:24:51', '$2y$12$m2g2BGyKUYPp39NbgsTCguJcfyVC/aqRlxSeamZQM8uaSCpae4CYi', 'fyKAH3N6ly', '2023-12-15 17:24:51', '2023-12-15 17:24:51'
    ),
    (
        33, 'Delia Gutmann', 'rolando.grady@example.org', '2023-12-15 17:24:51', '$2y$12$m2g2BGyKUYPp39NbgsTCguJcfyVC/aqRlxSeamZQM8uaSCpae4CYi', 'DQBSKoDfTl', '2023-12-15 17:24:51', '2023-12-15 17:24:51'
    ),
    (
        34, 'Timmy Kuvalis', 'christy.glover@example.net', '2023-12-15 17:24:51', '$2y$12$m2g2BGyKUYPp39NbgsTCguJcfyVC/aqRlxSeamZQM8uaSCpae4CYi', 'W8Xf1nzedi', '2023-12-15 17:24:51', '2023-12-15 17:24:51'
    ),
    (
        35, 'Dr. Ashtyn Cremin', 'dmurray@example.org', '2023-12-15 17:24:51', '$2y$12$m2g2BGyKUYPp39NbgsTCguJcfyVC/aqRlxSeamZQM8uaSCpae4CYi', 'Ik5MLQtbLq', '2023-12-15 17:24:51', '2023-12-15 17:24:51'
    ),
    (
        36, 'Eli Casper', 'brown.hermann@example.com', '2023-12-15 17:24:51', '$2y$12$m2g2BGyKUYPp39NbgsTCguJcfyVC/aqRlxSeamZQM8uaSCpae4CYi', 'UPsKITXCMf', '2023-12-15 17:24:51', '2023-12-15 17:24:51'
    ),
    (
        37, 'Marian Will', 'vwhite@example.org', '2023-12-15 17:24:51', '$2y$12$m2g2BGyKUYPp39NbgsTCguJcfyVC/aqRlxSeamZQM8uaSCpae4CYi', 'csUeNQBGb4', '2023-12-15 17:24:51', '2023-12-15 17:24:51'
    ),
    (
        38, 'Eulah Harris', 'maurine.kub@example.net', '2023-12-15 17:24:51', '$2y$12$m2g2BGyKUYPp39NbgsTCguJcfyVC/aqRlxSeamZQM8uaSCpae4CYi', 'YVNvMJEufA', '2023-12-15 17:24:51', '2023-12-15 17:24:51'
    ),
    (
        39, 'Prof. Woodrow Johnson', 'susana.schoen@example.org', '2023-12-15 17:24:51', '$2y$12$m2g2BGyKUYPp39NbgsTCguJcfyVC/aqRlxSeamZQM8uaSCpae4CYi', '5qDJBdRuXD', '2023-12-15 17:24:51', '2023-12-15 17:24:51'
    ),
    (
        40, 'Alycia Ruecker', 'jlesch@example.com', '2023-12-15 17:24:51', '$2y$12$m2g2BGyKUYPp39NbgsTCguJcfyVC/aqRlxSeamZQM8uaSCpae4CYi', 'eIgf2dpBsT', '2023-12-15 17:24:51', '2023-12-15 17:24:51'
    ),
    (
        41, 'Dr. Louisa Rice V', 'enos.abbott@example.com', '2023-12-15 17:24:51', '$2y$12$m2g2BGyKUYPp39NbgsTCguJcfyVC/aqRlxSeamZQM8uaSCpae4CYi', 'ajBC8lKzjX', '2023-12-15 17:24:51', '2023-12-15 17:24:51'
    ),
    (
        42, 'Ambrose Sanford PhD', 'ljaskolski@example.org', '2023-12-15 17:24:51', '$2y$12$m2g2BGyKUYPp39NbgsTCguJcfyVC/aqRlxSeamZQM8uaSCpae4CYi', 'Eqq0q0inOP', '2023-12-15 17:24:51', '2023-12-15 17:24:51'
    ),
    (
        43, 'Lizzie Streich', 'qkuhic@example.org', '2023-12-15 17:24:51', '$2y$12$m2g2BGyKUYPp39NbgsTCguJcfyVC/aqRlxSeamZQM8uaSCpae4CYi', '4IRC4p9fst', '2023-12-15 17:24:51', '2023-12-15 17:24:51'
    ),
    (
        44, 'Laurence Kuphal', 'kylee80@example.org', '2023-12-15 17:25:34', '$2y$12$wt.nYnku5hJx5xiknjfjkeq3u69Gt6J0hOpdaQI/V0TOet3Ry8BGS', 'DVantYcsdG', '2023-12-15 17:25:35', '2023-12-15 17:25:35'
    );

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens` ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (
    `tokenable_type`, `tokenable_id`
);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts` ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 45;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;

USE `test`;
--
-- Database: `validation`
--
CREATE DATABASE IF NOT EXISTS `validation` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE `validation`;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
    `id` bigint(20) UNSIGNED NOT NULL, `uuid` varchar(255) NOT NULL, `connection` text NOT NULL, `queue` text NOT NULL, `payload` longtext NOT NULL, `exception` longtext NOT NULL, `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
    `id` int(10) UNSIGNED NOT NULL, `migration` varchar(255) NOT NULL, `batch` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO
    `migrations` (`id`, `migration`, `batch`)
VALUES (
        6, '2014_10_12_000000_create_users_table', 1
    ),
    (
        7, '2014_10_12_100000_create_password_reset_tokens_table', 1
    ),
    (
        8, '2019_08_19_000000_create_failed_jobs_table', 1
    ),
    (
        9, '2019_12_14_000001_create_personal_access_tokens_table', 1
    ),
    (
        10, '2023_12_11_183847_create_posts_table', 1
    );

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
    `email` varchar(255) NOT NULL, `token` varchar(255) NOT NULL, `created_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
    `id` bigint(20) UNSIGNED NOT NULL, `tokenable_type` varchar(255) NOT NULL, `tokenable_id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `token` varchar(64) NOT NULL, `abilities` text DEFAULT NULL, `last_used_at` timestamp NULL DEFAULT NULL, `expires_at` timestamp NULL DEFAULT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
    `id` bigint(20) UNSIGNED NOT NULL, `title` varchar(255) NOT NULL, `body` text NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
    `id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `email` varchar(255) NOT NULL, `email_verified_at` timestamp NULL DEFAULT NULL, `password` varchar(255) NOT NULL, `remember_token` varchar(100) DEFAULT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO
    `users` (
        `id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`
    )
VALUES (
        1, 'fatima', 'fof@gmail.com', NULL, '123', NULL, NULL, NULL
    ),
    (
        2, 'samir', 'soso@gmail.com', NULL, '456', NULL, NULL, NULL
    ),
    (
        3, 'ali', 'ali@yaho.com', NULL, '$2y$12$p19XrUYz2nVFg7nfWDQYPeV55bNEYCUKVMPQFyCLIZUv.WfLwGWTu', NULL, '2023-12-15 05:22:35', '2023-12-15 05:22:35'
    ),
    (
        7, 'SASA', 'ali2@yaho.com', NULL, '$2y$12$xHiC0Da81w9h2QtPZzwAoeD15LcPCd5Tfmpy4t/EyS1F9NzrJfb6q', NULL, '2023-12-15 05:28:49', '2023-12-15 05:28:49'
    ),
    (
        8, 'SASA', 'ali23@yaho.com', NULL, '$2y$12$Y363ZjiGr2sXV4VGrxfUyewXBlves07rKBfPCw02yvGojebaAWRZ2', NULL, '2023-12-15 05:31:21', '2023-12-15 05:31:21'
    );

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens` ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (
    `tokenable_type`, `tokenable_id`
);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts` ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 9;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;