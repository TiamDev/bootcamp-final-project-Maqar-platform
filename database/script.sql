-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2024 at 08:06 PM
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
-- Database: `maqar`
--

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
        1, 1, 'المكلا', '2024-01-22 16:04:36', '2024-01-22 16:04:36'
    ),
    (
        2, 1, 'الشحر', '2024-01-22 16:04:36', '2024-01-22 16:04:36'
    ),
    (
        3, 1, 'غيل باوزير', '2024-01-22 16:04:36', '2024-01-22 16:04:36'
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
        1, 'حضرموت', '2024-01-22 16:03:59', '2024-01-22 16:03:59'
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
        1, 'access-dashboard', 'الوصول للوحة التحكم', '2024-01-22 16:03:58', '2024-01-22 16:03:58'
    ),
    (
        2, 'edit-own-content', 'تعديل المحتوى', '2024-01-22 16:03:58', '2024-01-22 16:03:58'
    ),
    (
        3, 'add-user', 'اضافة مستخدم', '2024-01-22 16:03:58', '2024-01-22 16:03:58'
    ),
    (
        4, 'delete-user', 'حذف مستخدم', '2024-01-22 16:03:58', '2024-01-22 16:03:58'
    ),
    (
        5, 'add-workspace', 'اضافة مساحة', '2024-01-22 16:03:58', '2024-01-22 16:03:58'
    ),
    (
        6, 'edit-workspace', 'تعديل مساحة', '2024-01-22 16:03:58', '2024-01-22 16:03:58'
    ),
    (
        7, 'block-workspace', ' حظر مساحة ', '2024-01-22 16:03:58', '2024-01-22 16:03:58'
    ),
    (
        8, 'add-recervation', 'اضافة حجز', '2024-01-22 16:03:58', '2024-01-22 16:03:58'
    ),
    (
        9, 'confirm-recervation', 'تاكيد حجز', '2024-01-22 16:03:58', '2024-01-22 16:03:58'
    ),
    (
        10, 'cancel-recervation', 'الغاء حجز', '2024-01-22 16:03:58', '2024-01-22 16:03:58'
    ),
    (
        11, 'edit-recervation', ' تعديل حجز', '2024-01-22 16:03:58', '2024-01-22 16:03:58'
    ),
    (
        12, 'block-provider', 'حظر مزود مساحات', '2024-01-22 16:03:58', '2024-01-22 16:03:58'
    ),
    (
        13, 'accept-request', 'قبول طلبات الانضمام ', '2024-01-22 16:03:58', '2024-01-22 16:03:58'
    ),
    (
        14, 'reqect-request', 'رفض طلبات الانضمام ', '2024-01-22 16:03:58', '2024-01-22 16:03:58'
    ),
    (
        15, 'edit-provider-content', 'تعديل محتوى المزود', '2024-01-22 16:03:58', '2024-01-22 16:03:58'
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

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
    `id` bigint(20) UNSIGNED NOT NULL, `user_id` bigint(20) UNSIGNED NOT NULL, `workspaceoffer_id` bigint(20) UNSIGNED NOT NULL, `state_id` bigint(20) UNSIGNED NOT NULL, `officPrice` double(8, 2) DEFAULT NULL, `voucher` varchar(255) DEFAULT NULL, `start_date` timestamp NULL DEFAULT NULL, `end_date` timestamp NULL DEFAULT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
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
        1, 'super-admin', 'مدير المنصة', '2024-01-22 16:03:59', '2024-01-22 16:03:59'
    ),
    (
        2, 'admin', 'مزود مساحات', '2024-01-22 16:03:59', '2024-01-22 16:03:59'
    ),
    (
        3, 'reception', 'استقبال', '2024-01-22 16:03:59', '2024-01-22 16:03:59'
    ),
    (
        4, 'content-admin', 'مسؤول المحتوى', '2024-01-22 16:03:59', '2024-01-22 16:03:59'
    ),
    (
        5, 'client', 'عميل', '2024-01-22 16:03:59', '2024-01-22 16:03:59'
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
-- Table structure for table `services`
--

CREATE TABLE `services` (
    `id` bigint(20) UNSIGNED NOT NULL, `provider_id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `price` double(8, 2) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

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
        1, 'فاطمة بكر بكران', 'fatimabakar707@gmail.com', NULL, '$2y$12$VZotpe3aaOQCMldf7doQUubHcHvF8/ltut4NfGtHBAc4Dhg9vJ.r6', '735320924', NULL, '2024-01-22 16:03:59', '2024-01-22 16:03:59'
    );

-- --------------------------------------------------------

--
-- Table structure for table `workspaces`
--

CREATE TABLE `workspaces` (
    `id` bigint(20) UNSIGNED NOT NULL, `provider_id` bigint(20) UNSIGNED NOT NULL, `workspaceType_id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `title` varchar(255) NOT NULL, `description` varchar(255) NOT NULL, `maxPeople` int(11) NOT NULL, `area` int(11) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `workspace_durations`
--

CREATE TABLE `workspace_durations` (
    `id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `title` varchar(255) NOT NULL, `description` varchar(255) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `workspace_offers`
--

CREATE TABLE `workspace_offers` (
    `id` bigint(20) UNSIGNED NOT NULL, `workspace_id` bigint(20) UNSIGNED NOT NULL, `workspaceDuration_id` bigint(20) UNSIGNED NOT NULL, `price` double(8, 2) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `workspace_types`
--

CREATE TABLE `workspace_types` (
    `id` bigint(20) UNSIGNED NOT NULL, `name` varchar(255) NOT NULL, `label` varchar(255) NOT NULL, `description` varchar(255) NOT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

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
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 2;

--
-- AUTO_INCREMENT for table `workspaces`
--
ALTER TABLE `workspaces`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `workspace_durations`
--
ALTER TABLE `workspace_durations`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `workspace_offers`
--
ALTER TABLE `workspace_offers`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `workspace_types`
--
ALTER TABLE `workspace_types`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;