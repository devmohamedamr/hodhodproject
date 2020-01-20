-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2020 at 12:54 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hodhod`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_content` text COLLATE utf8mb4_unicode_ci,
  `blog_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_title`, `blog_content`, `blog_img`, `created_at`, `updated_at`) VALUES
(3, 'محتوي عربي', '<p>محتوي عربي</p>', 'blogBack\\January2020\\V0o3m8Woc38PgvJDelc1.jpg', '2020-01-18 10:32:55', '2020-01-18 10:32:55'),
(4, 'احمد احمد', '<p>احمد احمد&nbsp; احمد</p>', 'blogBack\\January2020\\ah5uZtWzrDKeFymkQqat.jpg', '2020-01-18 12:11:04', '2020-01-18 12:11:04');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(28, 5, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(29, 5, 'section_name', 'text', 'Section Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(30, 5, 'section_img', 'text', 'Section icon', 0, 1, 1, 1, 1, 1, '{}', 3),
(31, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(32, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(33, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(34, 7, 'section_name', 'text', 'Section Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(35, 7, 'section_img', 'image', 'Section Img', 0, 1, 1, 1, 1, 1, '{}', 3),
(36, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(37, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(47, 7, 'section_id', 'select_dropdown', 'Section Id', 0, 1, 1, 1, 1, 1, '{\"relationship\":{\"key\":\"id\",\"label\":\"section_name\",\"page_slug\":\"app\\/Section\"}}', 7),
(48, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(49, 8, 'slider_img', 'image', 'Slider Img', 0, 1, 1, 1, 1, 1, '{}', 2),
(52, 8, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(53, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(54, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(55, 9, 'blog_title', 'text', 'Blog Title', 0, 1, 1, 1, 1, 1, '{}', 2),
(56, 9, 'blog_content', 'rich_text_box', 'Blog Content', 0, 1, 1, 1, 1, 1, '{}', 3),
(57, 9, 'blog_img', 'image', 'Blog Img', 0, 1, 1, 1, 1, 1, '{}', 4),
(58, 9, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(59, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(62, 11, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(63, 11, 'menu_title', 'text', 'Menu Title', 0, 1, 1, 1, 1, 1, '{}', 2),
(64, 11, 'menu_description', 'rich_text_box', 'Menu Description', 0, 1, 1, 1, 1, 1, '{}', 3),
(65, 11, 'menu_section', 'select_dropdown', 'Menu Section', 0, 1, 1, 1, 1, 1, '{\"relationship\":{\"key\":\"id\",\"label\":\"section_name\"}}', 4),
(67, 11, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 10),
(68, 11, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 11),
(69, 12, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(70, 12, 'section_title', 'text', 'Section Title', 0, 1, 1, 1, 1, 1, '{}', 2),
(71, 12, 'section_description', 'text', 'Section Description', 0, 1, 1, 1, 1, 1, '{}', 3),
(72, 12, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(73, 12, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(75, 11, 'menu_category', 'select_dropdown', 'Menu Category', 0, 1, 1, 1, 1, 1, '{\"relationship\":{\"key\":\"id\",\"label\":\"section_title\"}}', 6),
(76, 11, 'menu_img', 'image', 'Menu Img', 0, 1, 1, 1, 1, 1, '{}', 8),
(77, 11, 'menu_price', 'text', 'Menu Price', 0, 1, 1, 1, 1, 1, '{}', 7),
(78, 11, 'favorite', 'checkbox', 'Favorite', 0, 1, 1, 1, 1, 1, '{\"on\":\"favorite\",\"off\":\"default\",\"checked\":\"true\"}', 9),
(79, 5, 'section_description', 'rich_text_box', 'Section Description', 0, 1, 1, 1, 1, 1, '{}', 6),
(80, 5, 'section_favorite', 'checkbox', 'Section Favorite', 0, 1, 1, 1, 1, 1, '{\"on\":\"favorite\",\"off\":\"default\",\"checked\":\"true\"}', 8),
(81, 13, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(82, 13, 'testimonial_name', 'text', 'Testimonial Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(83, 13, 'testimonial_job', 'text', 'Testimonial Job', 0, 1, 1, 1, 1, 1, '{}', 3),
(84, 13, 'testimonial_details', 'rich_text_box', 'Testimonial Details', 0, 1, 1, 1, 1, 1, '{}', 4),
(85, 13, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(86, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(87, 13, 'testimonial_user_img', 'image', 'Testimonial User Img', 0, 1, 1, 1, 1, 1, '{}', 7),
(88, 14, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(89, 14, 'event_title', 'text', 'Event Title', 0, 1, 1, 1, 1, 1, '{}', 2),
(90, 14, 'event_description', 'rich_text_box', 'Event Description', 0, 1, 1, 1, 1, 1, '{}', 3),
(91, 14, 'event_date', 'date', 'Event Date', 0, 1, 1, 1, 1, 1, '{}', 4),
(92, 14, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(93, 14, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(99, 12, 'menu_img', 'image', 'img', 0, 1, 1, 1, 1, 1, '{}', 7),
(104, 8, 'slider_content', 'rich_text_box', 'slider content', 0, 1, 1, 1, 1, 1, '{}', 3),
(105, 15, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(106, 15, 'description', 'rich_text_box', 'Description', 0, 1, 1, 1, 1, 1, '{}', 3),
(107, 15, 'keywords', 'rich_text_box', 'Keywords', 0, 1, 1, 1, 1, 1, '{}', 4),
(108, 15, 'canonical', 'rich_text_box', 'Canonical', 0, 1, 1, 1, 1, 1, '{}', 5),
(109, 15, 'oglocale', 'rich_text_box', 'Oglocale', 0, 1, 1, 1, 1, 1, '{}', 6),
(110, 15, 'ogtype', 'rich_text_box', 'Ogtype', 0, 1, 1, 1, 1, 1, '{}', 7),
(111, 15, 'ogtitle', 'rich_text_box', 'Ogtitle', 0, 1, 1, 1, 1, 1, '{}', 8),
(112, 15, 'ogdescription', 'rich_text_box', 'Ogdescription', 0, 1, 1, 1, 1, 1, '{}', 9),
(113, 15, 'ogurl', 'rich_text_box', 'Ogurl', 0, 1, 1, 1, 1, 1, '{}', 10),
(114, 15, 'ogsite_name', 'rich_text_box', 'Ogsite Name', 0, 1, 1, 1, 1, 1, '{}', 11),
(115, 15, 'ogimage', 'rich_text_box', 'Ogimage', 0, 1, 1, 1, 1, 1, '{}', 12),
(116, 15, 'twittercard', 'rich_text_box', 'Twittercard', 0, 1, 1, 1, 1, 1, '{}', 13),
(117, 15, 'twitterdescription', 'rich_text_box', 'Twitterdescription', 0, 1, 1, 1, 1, 1, '{}', 14),
(118, 15, 'twittertitle', 'rich_text_box', 'Twittertitle', 0, 1, 1, 1, 1, 1, '{}', 15),
(119, 15, 'twitterimage', 'rich_text_box', 'Twitterimage', 0, 1, 1, 1, 1, 1, '{}', 16),
(120, 15, 'page_id', 'select_dropdown', 'Page Id', 0, 1, 1, 1, 1, 1, '{\"relationship\":{\"key\":\"id\",\"label\":\"page_name\",\"page_slug\":\"app\\/page\"}}', 2),
(121, 15, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 17),
(122, 15, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 18),
(123, 16, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(124, 16, 'page_name', 'text', 'Page Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(125, 16, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
(126, 16, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(127, 16, 'url', 'text', 'url', 0, 1, 1, 1, 1, 1, '{}', 5);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2020-01-14 07:43:43', '2020-01-14 07:43:43'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2020-01-14 07:43:43', '2020-01-14 07:43:43'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, NULL, '2020-01-14 07:43:43', '2020-01-14 07:43:43'),
(5, 'sections', 'sections', 'Section', 'Sections', 'voyager-tag', 'App\\Section', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-01-14 08:14:07', '2020-01-18 10:08:08'),
(7, 'sub_section', 'sub-section', 'Sub Section', 'Sub Sections', 'voyager-list', 'App\\SubSection', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-01-14 08:22:28', '2020-01-18 10:14:45'),
(8, 'slider', 'slider', 'Slider', 'Sliders', '.', 'App\\Slider', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-01-14 09:10:39', '2020-01-19 10:39:12'),
(9, 'blog', 'blogBack', 'Blog', 'Blogs', 'voyager-edit', 'App\\Blog', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-01-14 12:25:25', '2020-01-18 10:15:32'),
(11, 'menu', 'menuBack', 'Menu', 'Menus', NULL, 'App\\Menu', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-01-15 14:49:59', '2020-01-18 09:57:04'),
(12, 'menu_section', 'menu-section', 'Menu Section', 'Menu Sections', 'voyager-pizza', 'App\\MenuSection', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-01-16 06:14:59', '2020-01-18 09:52:02'),
(13, 'testimonials', 'testimonials', 'Testimonial', 'Testimonials', 'voyager-star-two', 'App\\Testimonial', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-01-16 09:23:30', '2020-01-16 09:23:30'),
(14, 'event', 'event', 'Event', 'Events', 'voyager-calendar', 'App\\Event', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-01-16 11:13:14', '2020-01-16 11:13:14'),
(15, 'seo', 'seo', 'Seo', 'Seos', 'voyager-anchor', 'App\\Seo', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-01-19 07:53:27', '2020-01-19 08:57:37'),
(16, 'pages', 'pages', 'Page', 'Pages', 'voyager-bookmark', 'App\\Page', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-01-19 08:17:52', '2020-01-19 08:24:14');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(10) UNSIGNED NOT NULL,
  `event_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_description` text COLLATE utf8mb4_unicode_ci,
  `event_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_description` text COLLATE utf8mb4_unicode_ci,
  `menu_section` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `menu_category` int(11) DEFAULT NULL,
  `menu_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_price` float DEFAULT NULL,
  `favorite` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu_title`, `menu_description`, `menu_section`, `created_at`, `updated_at`, `menu_category`, `menu_img`, `menu_price`, `favorite`) VALUES
(4, 'منيو عربي مميز', '<p>منيو عربي مميزمنيو عربي مميزمنيو عربي مميز</p>', 15, '2020-01-18 14:01:00', '2020-01-18 16:02:31', 4, 'menuBack\\January2020\\JOdw3pSFLd0M1t939alT.jpg', 15, 1),
(5, 'منيو عربي ثاني', '<p>منيو عربي ثاني</p>', 15, '2020-01-18 16:21:00', '2020-01-18 16:21:53', 5, 'menuBack\\January2020\\lgElBCSLFvd0xS4feZOK.jpg', 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-01-14 07:43:43', '2020-01-14 07:43:43'),
(2, 'seo', '2020-01-19 07:47:35', '2020-01-19 07:47:35');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2020-01-14 07:43:44', '2020-01-14 07:43:44', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 11, '2020-01-14 07:43:44', '2020-01-19 07:48:13', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 10, '2020-01-14 07:43:44', '2020-01-19 07:48:13', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 9, '2020-01-14 07:43:44', '2020-01-19 07:48:13', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 12, '2020-01-14 07:43:44', '2020-01-19 07:48:13', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2020-01-14 07:43:44', '2020-01-14 07:51:10', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2020-01-14 07:43:44', '2020-01-14 09:10:54', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2020-01-14 07:43:44', '2020-01-14 09:10:54', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2020-01-14 07:43:44', '2020-01-14 09:10:54', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, 16, 1, '2020-01-14 07:43:44', '2020-01-14 09:15:00', 'voyager.settings.index', NULL),
(11, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2020-01-14 07:43:44', '2020-01-14 09:10:54', 'voyager.hooks', NULL),
(13, 1, 'Sections', '', '_self', 'voyager-tag', NULL, NULL, 3, '2020-01-14 08:14:07', '2020-01-19 07:48:13', 'voyager.sections.index', NULL),
(14, 1, 'Sub Sections', '', '_self', 'voyager-list', '#000000', NULL, 4, '2020-01-14 08:22:28', '2020-01-19 07:48:13', 'voyager.sub-section.index', 'null'),
(15, 1, 'Sliders', '', '_self', 'voyager-camera', '#000000', 16, 2, '2020-01-14 09:10:39', '2020-01-14 09:15:01', 'voyager.slider.index', 'null'),
(16, 1, 'setting', '', '_self', 'voyager-settings', '#000000', NULL, 2, '2020-01-14 09:14:53', '2020-01-19 07:48:13', NULL, ''),
(17, 1, 'Blogs', 'admin/blogBack', '_self', 'voyager-edit', '#000000', NULL, 5, '2020-01-14 12:25:25', '2020-01-19 07:48:13', NULL, ''),
(18, 1, 'Menus', 'admin/menuBack', '_self', 'voyager-bread', '#000000', 20, 2, '2020-01-15 14:49:59', '2020-01-16 12:45:06', NULL, ''),
(19, 1, 'Menu Sections', '', '_self', 'voyager-pizza', NULL, 20, 1, '2020-01-16 06:14:59', '2020-01-16 12:43:38', 'voyager.menu-section.index', NULL),
(20, 1, 'resturant', '', '_self', 'voyager-documentation', '#000000', NULL, 6, '2020-01-16 06:26:38', '2020-01-19 07:48:13', NULL, ''),
(21, 1, 'Testimonials', '', '_self', 'voyager-star-two', NULL, NULL, 7, '2020-01-16 09:23:30', '2020-01-19 07:48:13', 'voyager.testimonials.index', NULL),
(22, 1, 'Events', '', '_self', 'voyager-calendar', NULL, NULL, 8, '2020-01-16 11:13:14', '2020-01-19 07:48:13', 'voyager.event.index', NULL),
(23, 1, 'Seos', '', '_self', 'voyager-anchor', '#000000', NULL, 13, '2020-01-19 07:53:27', '2020-01-19 08:57:54', 'voyager.seo.index', 'null'),
(24, 1, 'Pages', '', '_self', 'voyager-bookmark', NULL, NULL, 14, '2020-01-19 08:17:52', '2020-01-19 08:17:52', 'voyager.pages.index', NULL),
(25, 2, 'seo', '', '_self', 'voyager-anchor', '#000000', NULL, 15, '2020-01-19 09:01:30', '2020-01-19 09:01:38', 'voyager.seo.index', 'null'),
(27, 1, 'orders', 'order/index', '_self', 'voyager-basket', '#000000', NULL, 16, '2020-01-20 07:47:31', '2020-01-20 07:47:31', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `menu_section`
--

CREATE TABLE `menu_section` (
  `id` int(10) UNSIGNED NOT NULL,
  `section_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `menu_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_section`
--

INSERT INTO `menu_section` (`id`, `section_title`, `section_description`, `created_at`, `updated_at`, `menu_img`) VALUES
(4, 'مصري', 'اكل مصري', '2020-01-18 13:05:14', '2020-01-18 13:05:14', 'menu-section\\January2020\\Y4d01NJsbpLxoJFp2nTG.png'),
(5, 'جزائري', 'جزائري', '2020-01-18 13:06:46', '2020-01-18 13:06:46', 'menu-section\\January2020\\CYSG4QZ8U6s6jF9Uh9tz.jpg'),
(6, 'عراقي', 'عراقي', '2020-01-18 15:36:03', '2020-01-18 15:36:03', 'menu-section\\January2020\\4AX7JhZH9RRxnJYbo7rf.png');

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
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `menu` int(11) DEFAULT NULL,
  `order` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_name`, `user_address`, `user_phone`, `user_email`, `service`, `created_at`, `updated_at`, `menu`, `order`) VALUES
(2, 'mohamed amr', '29 sad ibn aby wakas', '2321321321', 'adsr@gmail.com', 4, '2020-01-20 07:35:32', '2020-01-20 08:51:45', NULL, 1),
(3, 'mohamed amr', '29 sad ibn aby wakas', '01065469647', 'dev.mohamedamr@gmail.com', 4, '2020-01-20 07:36:44', '2020-01-20 07:36:44', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_name` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2020-01-14 07:43:44', '2020-01-14 07:43:44'),
(2, 'browse_bread', NULL, '2020-01-14 07:43:44', '2020-01-14 07:43:44'),
(3, 'browse_database', NULL, '2020-01-14 07:43:44', '2020-01-14 07:43:44'),
(4, 'browse_media', NULL, '2020-01-14 07:43:44', '2020-01-14 07:43:44'),
(5, 'browse_compass', NULL, '2020-01-14 07:43:44', '2020-01-14 07:43:44'),
(6, 'browse_menus', 'menus', '2020-01-14 07:43:44', '2020-01-14 07:43:44'),
(7, 'read_menus', 'menus', '2020-01-14 07:43:44', '2020-01-14 07:43:44'),
(8, 'edit_menus', 'menus', '2020-01-14 07:43:44', '2020-01-14 07:43:44'),
(9, 'add_menus', 'menus', '2020-01-14 07:43:44', '2020-01-14 07:43:44'),
(10, 'delete_menus', 'menus', '2020-01-14 07:43:44', '2020-01-14 07:43:44'),
(11, 'browse_roles', 'roles', '2020-01-14 07:43:44', '2020-01-14 07:43:44'),
(12, 'read_roles', 'roles', '2020-01-14 07:43:44', '2020-01-14 07:43:44'),
(13, 'edit_roles', 'roles', '2020-01-14 07:43:44', '2020-01-14 07:43:44'),
(14, 'add_roles', 'roles', '2020-01-14 07:43:44', '2020-01-14 07:43:44'),
(15, 'delete_roles', 'roles', '2020-01-14 07:43:44', '2020-01-14 07:43:44'),
(16, 'browse_users', 'users', '2020-01-14 07:43:44', '2020-01-14 07:43:44'),
(17, 'read_users', 'users', '2020-01-14 07:43:44', '2020-01-14 07:43:44'),
(18, 'edit_users', 'users', '2020-01-14 07:43:44', '2020-01-14 07:43:44'),
(19, 'add_users', 'users', '2020-01-14 07:43:44', '2020-01-14 07:43:44'),
(20, 'delete_users', 'users', '2020-01-14 07:43:44', '2020-01-14 07:43:44'),
(21, 'browse_settings', 'settings', '2020-01-14 07:43:44', '2020-01-14 07:43:44'),
(22, 'read_settings', 'settings', '2020-01-14 07:43:44', '2020-01-14 07:43:44'),
(23, 'edit_settings', 'settings', '2020-01-14 07:43:44', '2020-01-14 07:43:44'),
(24, 'add_settings', 'settings', '2020-01-14 07:43:44', '2020-01-14 07:43:44'),
(25, 'delete_settings', 'settings', '2020-01-14 07:43:44', '2020-01-14 07:43:44'),
(26, 'browse_hooks', NULL, '2020-01-14 07:43:44', '2020-01-14 07:43:44'),
(32, 'browse_sections', 'sections', '2020-01-14 08:14:07', '2020-01-14 08:14:07'),
(33, 'read_sections', 'sections', '2020-01-14 08:14:07', '2020-01-14 08:14:07'),
(34, 'edit_sections', 'sections', '2020-01-14 08:14:07', '2020-01-14 08:14:07'),
(35, 'add_sections', 'sections', '2020-01-14 08:14:07', '2020-01-14 08:14:07'),
(36, 'delete_sections', 'sections', '2020-01-14 08:14:07', '2020-01-14 08:14:07'),
(37, 'browse_sub_section', 'sub_section', '2020-01-14 08:22:28', '2020-01-14 08:22:28'),
(38, 'read_sub_section', 'sub_section', '2020-01-14 08:22:28', '2020-01-14 08:22:28'),
(39, 'edit_sub_section', 'sub_section', '2020-01-14 08:22:28', '2020-01-14 08:22:28'),
(40, 'add_sub_section', 'sub_section', '2020-01-14 08:22:28', '2020-01-14 08:22:28'),
(41, 'delete_sub_section', 'sub_section', '2020-01-14 08:22:28', '2020-01-14 08:22:28'),
(42, 'browse_slider', 'slider', '2020-01-14 09:10:39', '2020-01-14 09:10:39'),
(43, 'read_slider', 'slider', '2020-01-14 09:10:39', '2020-01-14 09:10:39'),
(44, 'edit_slider', 'slider', '2020-01-14 09:10:39', '2020-01-14 09:10:39'),
(45, 'add_slider', 'slider', '2020-01-14 09:10:39', '2020-01-14 09:10:39'),
(46, 'delete_slider', 'slider', '2020-01-14 09:10:39', '2020-01-14 09:10:39'),
(47, 'browse_blog', 'blog', '2020-01-14 12:25:25', '2020-01-14 12:25:25'),
(48, 'read_blog', 'blog', '2020-01-14 12:25:25', '2020-01-14 12:25:25'),
(49, 'edit_blog', 'blog', '2020-01-14 12:25:25', '2020-01-14 12:25:25'),
(50, 'add_blog', 'blog', '2020-01-14 12:25:25', '2020-01-14 12:25:25'),
(51, 'delete_blog', 'blog', '2020-01-14 12:25:25', '2020-01-14 12:25:25'),
(52, 'browse_menu', 'menu', '2020-01-15 14:49:59', '2020-01-15 14:49:59'),
(53, 'read_menu', 'menu', '2020-01-15 14:49:59', '2020-01-15 14:49:59'),
(54, 'edit_menu', 'menu', '2020-01-15 14:49:59', '2020-01-15 14:49:59'),
(55, 'add_menu', 'menu', '2020-01-15 14:49:59', '2020-01-15 14:49:59'),
(56, 'delete_menu', 'menu', '2020-01-15 14:49:59', '2020-01-15 14:49:59'),
(57, 'browse_menu_section', 'menu_section', '2020-01-16 06:14:59', '2020-01-16 06:14:59'),
(58, 'read_menu_section', 'menu_section', '2020-01-16 06:14:59', '2020-01-16 06:14:59'),
(59, 'edit_menu_section', 'menu_section', '2020-01-16 06:14:59', '2020-01-16 06:14:59'),
(60, 'add_menu_section', 'menu_section', '2020-01-16 06:14:59', '2020-01-16 06:14:59'),
(61, 'delete_menu_section', 'menu_section', '2020-01-16 06:14:59', '2020-01-16 06:14:59'),
(62, 'browse_testimonials', 'testimonials', '2020-01-16 09:23:30', '2020-01-16 09:23:30'),
(63, 'read_testimonials', 'testimonials', '2020-01-16 09:23:30', '2020-01-16 09:23:30'),
(64, 'edit_testimonials', 'testimonials', '2020-01-16 09:23:30', '2020-01-16 09:23:30'),
(65, 'add_testimonials', 'testimonials', '2020-01-16 09:23:30', '2020-01-16 09:23:30'),
(66, 'delete_testimonials', 'testimonials', '2020-01-16 09:23:30', '2020-01-16 09:23:30'),
(67, 'browse_event', 'event', '2020-01-16 11:13:14', '2020-01-16 11:13:14'),
(68, 'read_event', 'event', '2020-01-16 11:13:14', '2020-01-16 11:13:14'),
(69, 'edit_event', 'event', '2020-01-16 11:13:14', '2020-01-16 11:13:14'),
(70, 'add_event', 'event', '2020-01-16 11:13:14', '2020-01-16 11:13:14'),
(71, 'delete_event', 'event', '2020-01-16 11:13:14', '2020-01-16 11:13:14'),
(72, 'browse_seo', 'seo', '2020-01-19 07:53:27', '2020-01-19 07:53:27'),
(73, 'read_seo', 'seo', '2020-01-19 07:53:27', '2020-01-19 07:53:27'),
(74, 'edit_seo', 'seo', '2020-01-19 07:53:27', '2020-01-19 07:53:27'),
(75, 'add_seo', 'seo', '2020-01-19 07:53:27', '2020-01-19 07:53:27'),
(76, 'delete_seo', 'seo', '2020-01-19 07:53:27', '2020-01-19 07:53:27'),
(77, 'browse_pages', 'pages', '2020-01-19 08:17:52', '2020-01-19 08:17:52'),
(78, 'read_pages', 'pages', '2020-01-19 08:17:52', '2020-01-19 08:17:52'),
(79, 'edit_pages', 'pages', '2020-01-19 08:17:52', '2020-01-19 08:17:52'),
(80, 'add_pages', 'pages', '2020-01-19 08:17:52', '2020-01-19 08:17:52'),
(81, 'delete_pages', 'pages', '2020-01-19 08:17:52', '2020-01-19 08:17:52');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 3),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(21, 3),
(22, 1),
(22, 3),
(23, 1),
(23, 3),
(24, 1),
(24, 3),
(25, 1),
(25, 3),
(26, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(72, 3),
(73, 1),
(73, 3),
(74, 1),
(74, 3),
(75, 1),
(75, 3),
(76, 1),
(76, 3),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2020-01-14 07:43:44', '2020-01-14 07:43:44'),
(2, 'user', 'Normal User', '2020-01-14 07:43:44', '2020-01-14 07:43:44'),
(3, 'seo', 'seo mange', '2020-01-14 12:32:58', '2020-01-14 12:33:18');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `section_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `section_description` text COLLATE utf8mb4_unicode_ci,
  `section_favorite` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `section_name`, `section_img`, `created_at`, `updated_at`, `section_description`, `section_favorite`) VALUES
(15, 'حفلات', 'icon-restaurant14', '2020-01-18 14:00:10', '2020-01-18 14:00:10', '<p>حفلاتحفلاتحفلاتحفلاتحفلاتحفلاتحفلاتحفلات</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `keywords` text COLLATE utf8mb4_unicode_ci,
  `canonical` text COLLATE utf8mb4_unicode_ci,
  `oglocale` text COLLATE utf8mb4_unicode_ci,
  `ogtype` text COLLATE utf8mb4_unicode_ci,
  `ogtitle` text COLLATE utf8mb4_unicode_ci,
  `ogdescription` text COLLATE utf8mb4_unicode_ci,
  `ogurl` text COLLATE utf8mb4_unicode_ci,
  `ogsite_name` text COLLATE utf8mb4_unicode_ci,
  `ogimage` text COLLATE utf8mb4_unicode_ci,
  `twittercard` text COLLATE utf8mb4_unicode_ci,
  `twitterdescription` text COLLATE utf8mb4_unicode_ci,
  `twittertitle` text COLLATE utf8mb4_unicode_ci,
  `twitterimage` text COLLATE utf8mb4_unicode_ci,
  `page_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'اسفار الهدهد', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'موقع اسفار الهدهد', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', 'settings\\January2020\\VpZ9vCpd9AhiBi1dYsWq.png', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'hodhod', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to hodhod. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', 'settings\\January2020\\CUJOm9aOKSZZsCArrOX6.png', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin'),
(14, 'story.en', 'english', '<p><span style=\"color: #222222; font-family: \'Source Sans Pro\', sans-serif; font-size: 20px; text-align: center;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc. Semper ac dolor vitae accumsan. interdum hendrerit lacinia.</span></p>', NULL, 'rich_text_box', 6, 'story'),
(15, 'story.ar', 'arabic', '<p>هذا اي كلام اي كلامهذا اي كلام اي كلامهذا اي كلام اي كلامهذا اي كلام اي كلامهذا اي كلام اي كلامهذا اي كلام اي كلامهذا اي كلام اي كلامهذا اي كلام اي كلامهذا اي كلام اي كلامهذا اي كلام اي كلامهذا اي كلام اي كلامهذا اي كلام اي كلام</p>', NULL, 'rich_text_box', 7, 'story'),
(17, 'slogan.en', 'slogan', '<h1>&ldquo;<strong>Fresh and healthy master of town</strong>&rdquo;</h1>', NULL, 'rich_text_box', 8, 'slogan'),
(18, 'slogan.ar', 'slogan', '<h1>&rdquo;<strong>سيد جديدة وصحية للمدينة</strong>&ldquo;</h1>', NULL, 'rich_text_box', 9, 'slogan'),
(19, 'mission.en', 'mission', NULL, NULL, 'rich_text_box', 10, 'mission'),
(20, 'mission.ar', 'mission', NULL, NULL, 'rich_text_box', 11, 'mission'),
(22, 'site.dark', 'site dark', 'settings\\January2020\\GnjY4tkz9frn8bbLJKhv.png', NULL, 'image', 12, 'Site'),
(28, 'contact-us.address_ar', 'address ar', '<div class=\"col-md-4\" style=\"margin: 0px; padding: 0px 15px; box-sizing: border-box; position: relative; width: 380px; flex: 0 0 33.3333%; max-width: 33.3333%; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">\r\n<div class=\"open-hours\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; float: left;\">&nbsp;</div>\r\n</div>\r\n<div class=\"col-md-4\" style=\"margin: 0px; padding: 0px 15px; box-sizing: border-box; position: relative; width: 380px; flex: 0 0 33.3333%; max-width: 33.3333%; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">\r\n<div class=\"contact-us\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; float: left;\">\r\n<div class=\"detail\" style=\"margin: 45px 0px 0px; padding: 0px; box-sizing: border-box;\">\r\n<ul style=\"margin: 35px 0px 0px; padding: 0px; box-sizing: border-box;\">\r\n<li class=\"location\" style=\"margin: 0px 0px 20px; padding: 0px; box-sizing: border-box; list-style: none; float: left; width: 350px;\"><span style=\"margin: 0px; padding: 0px; box-sizing: border-box; font-size: 20px; float: right; width: 308px;\">329 عربي عربي عربي&nbsp;</span></li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', NULL, 'rich_text_box', 18, 'contact us'),
(29, 'contact-us.address_en', 'address en', '<div class=\"col-md-4\" style=\"margin: 0px; padding: 0px 15px; box-sizing: border-box; position: relative; width: 380px; flex: 0 0 33.3333%; max-width: 33.3333%; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">\r\n<div class=\"open-hours\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; float: left;\">&nbsp;</div>\r\n</div>\r\n<div class=\"col-md-4\" style=\"margin: 0px; padding: 0px 15px; box-sizing: border-box; position: relative; width: 380px; flex: 0 0 33.3333%; max-width: 33.3333%; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">\r\n<div class=\"contact-us\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; float: left;\">\r\n<div class=\"detail\" style=\"margin: 45px 0px 0px; padding: 0px; box-sizing: border-box;\">\r\n<ul style=\"margin: 35px 0px 0px; padding: 0px; box-sizing: border-box;\">\r\n<li class=\"location\" style=\"margin: 0px 0px 20px; padding: 0px; box-sizing: border-box; list-style: none; float: left; width: 350px;\"><span style=\"margin: 0px; padding: 0px; box-sizing: border-box; font-size: 20px; float: right; width: 308px;\">329 Queensberry Street, North Me bourne, Australia.</span></li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', NULL, 'rich_text_box', 19, 'contact us'),
(30, 'social.facebook', 'facebook', NULL, NULL, 'text', 20, 'social'),
(31, 'social.whatsapp', 'whatsapp', NULL, NULL, 'text', 21, 'social'),
(32, 'social.linkedin', 'linkedin', NULL, NULL, 'text', 22, 'social'),
(33, 'social.instgram', 'instgram', NULL, NULL, 'text', 23, 'social'),
(34, 'contact-us.opening_ar', 'opening ar', '<p>&nbsp;</p>\r\n<div class=\"col-md-4\" style=\"margin: 0px; padding: 0px 15px; box-sizing: border-box; position: relative; width: 380px; flex: 0 0 33.3333%; max-width: 33.3333%; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">\r\n<div class=\"instagram\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; float: left;\">&nbsp;</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<div class=\"col-md-4\" style=\"margin: 0px; padding: 0px 15px; box-sizing: border-box; position: relative; width: 380px; flex: 0 0 33.3333%; max-width: 33.3333%; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">\r\n<div class=\"open-hours\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; float: left;\">\r\n<div class=\"detail\" style=\"margin: 45px 0px 0px; padding: 0px; box-sizing: border-box;\">\r\n<ul style=\"margin: 0px 0px 1rem; padding: 0px; box-sizing: border-box; float: left; width: 322px;\">\r\n<li style=\"margin: 0px 0px 14px; padding: 0px; box-sizing: border-box; list-style: none; width: 322px; float: left;\"><span class=\"day\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; font-weight: 800; font-size: 20px; float: left;\">الاثنين</span><span class=\"time\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; float: right; font-size: 18px; font-weight: 300;\">09 am - 10 pm</span></li>\r\n<li style=\"margin: 0px 0px 14px; padding: 0px; box-sizing: border-box; list-style: none; width: 322px; float: left;\"><span class=\"day\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; font-weight: 800; font-size: 20px; float: left;\">الثلاثاء</span><span class=\"time\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; float: right; font-size: 18px; font-weight: 300;\">09 am - 10 pm</span></li>\r\n<li style=\"margin: 0px 0px 14px; padding: 0px; box-sizing: border-box; list-style: none; width: 322px; float: left;\"><span class=\"day\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; font-weight: 800; font-size: 20px; float: left;\">الاربعاء</span><span class=\"time\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; float: right; font-size: 18px; font-weight: 300;\">09 am - 10 pm</span></li>\r\n<li style=\"margin: 0px 0px 14px; padding: 0px; box-sizing: border-box; list-style: none; width: 322px; float: left;\"><span class=\"day\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; font-weight: 800; font-size: 20px; float: left;\">الخميس</span><span class=\"time\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; float: right; font-size: 18px; font-weight: 300;\">09 am - 10 pm</span></li>\r\n<li style=\"margin: 0px 0px 14px; padding: 0px; box-sizing: border-box; list-style: none; width: 322px; float: left;\"><span class=\"day\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; font-weight: 800; font-size: 20px; float: left;\">الجمعة</span><span class=\"time\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; float: right; font-size: 18px; font-weight: 300;\">11 am - 08 pm</span></li>\r\n<li style=\"margin: 0px 0px 14px; padding: 0px; box-sizing: border-box; list-style: none; width: 322px; float: left;\"><span class=\"day\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; font-weight: 800; font-size: 20px; float: left;\">السبت</span><span class=\"time\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; float: right; font-size: 18px; font-weight: 300;\">10 am - 11 pm</span></li>\r\n<li style=\"margin: 0px 0px 14px; padding: 0px; box-sizing: border-box; list-style: none; width: 322px; float: left;\"><span class=\"day\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; font-weight: 800; font-size: 20px; float: left;\">الاحد</span><span class=\"time\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; float: right; font-size: 18px; font-weight: 300;\">Closed</span></li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', NULL, 'rich_text_box', 24, 'contact us'),
(35, 'contact-us.opening_en', 'opining en', '<div class=\"col-md-4\" style=\"margin: 0px; padding: 0px 15px; box-sizing: border-box; position: relative; width: 380px; flex: 0 0 33.3333%; max-width: 33.3333%; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">\r\n<div class=\"instagram\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; float: left;\">&nbsp;</div>\r\n</div>\r\n<div class=\"col-md-4\" style=\"margin: 0px; padding: 0px 15px; box-sizing: border-box; position: relative; width: 380px; flex: 0 0 33.3333%; max-width: 33.3333%; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">\r\n<div class=\"open-hours\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; float: left;\">\r\n<div class=\"detail\" style=\"margin: 45px 0px 0px; padding: 0px; box-sizing: border-box;\">\r\n<ul style=\"margin: 0px 0px 1rem; padding: 0px; box-sizing: border-box; float: left; width: 322px;\">\r\n<li style=\"margin: 0px 0px 14px; padding: 0px; box-sizing: border-box; list-style: none; width: 322px; float: left;\"><span class=\"day\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; font-weight: 800; font-size: 20px; float: left;\">Monday</span><span class=\"time\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; float: right; font-size: 18px; font-weight: 300;\">09 am - 10 pm</span></li>\r\n<li style=\"margin: 0px 0px 14px; padding: 0px; box-sizing: border-box; list-style: none; width: 322px; float: left;\"><span class=\"day\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; font-weight: 800; font-size: 20px; float: left;\">Tuesday</span><span class=\"time\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; float: right; font-size: 18px; font-weight: 300;\">09 am - 10 pm</span></li>\r\n<li style=\"margin: 0px 0px 14px; padding: 0px; box-sizing: border-box; list-style: none; width: 322px; float: left;\"><span class=\"day\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; font-weight: 800; font-size: 20px; float: left;\">Wednesday</span><span class=\"time\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; float: right; font-size: 18px; font-weight: 300;\">09 am - 10 pm</span></li>\r\n<li style=\"margin: 0px 0px 14px; padding: 0px; box-sizing: border-box; list-style: none; width: 322px; float: left;\"><span class=\"day\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; font-weight: 800; font-size: 20px; float: left;\">Thursday</span><span class=\"time\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; float: right; font-size: 18px; font-weight: 300;\">09 am - 10 pm</span></li>\r\n<li style=\"margin: 0px 0px 14px; padding: 0px; box-sizing: border-box; list-style: none; width: 322px; float: left;\"><span class=\"day\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; font-weight: 800; font-size: 20px; float: left;\">Friday</span><span class=\"time\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; float: right; font-size: 18px; font-weight: 300;\">11 am - 08 pm</span></li>\r\n<li style=\"margin: 0px 0px 14px; padding: 0px; box-sizing: border-box; list-style: none; width: 322px; float: left;\"><span class=\"day\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; font-weight: 800; font-size: 20px; float: left;\">Saturday</span><span class=\"time\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; float: right; font-size: 18px; font-weight: 300;\">10 am - 11 pm</span></li>\r\n<li style=\"margin: 0px 0px 14px; padding: 0px; box-sizing: border-box; list-style: none; width: 322px; float: left;\"><span class=\"day\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; font-weight: 800; font-size: 20px; float: left;\">Sunday</span><span class=\"time\" style=\"margin: 0px; padding: 0px; box-sizing: border-box; float: right; font-size: 18px; font-weight: 300;\">Closed</span></li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', NULL, 'rich_text_box', 25, 'contact us'),
(36, 'contact-us.phone', 'phone', '+123 55 33 444 888', NULL, 'text', 26, 'contact us'),
(37, 'contact-us.email', 'email', 'Help@pearl.com', NULL, 'text', 27, 'contact us');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_img`, `slider_content`, `created_at`, `updated_at`) VALUES
(3, 'slider\\January2020\\vZSeMSG43leaGsWoKBFj.jpg', '<h1><strong>محتوي في محتوي</strong></h1>', '2020-01-18 13:23:00', '2020-01-19 10:39:29');

-- --------------------------------------------------------

--
-- Table structure for table `sub_section`
--

CREATE TABLE `sub_section` (
  `id` int(10) UNSIGNED NOT NULL,
  `section_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_section`
--

INSERT INTO `sub_section` (`id`, `section_name`, `section_img`, `created_at`, `updated_at`, `section_id`) VALUES
(1, 'بوفيهات', NULL, '2020-01-16 12:14:11', '2020-01-16 12:14:11', 3),
(2, 'مشويات', NULL, '2020-01-16 12:14:24', '2020-01-16 12:14:24', 3),
(3, 'طبخ عربي', NULL, '2020-01-16 12:14:37', '2020-01-16 12:14:37', 3),
(4, 'وجبات ساخنة', NULL, '2020-01-16 12:14:58', '2020-01-16 12:14:58', 10),
(5, 'وجبات جافة', NULL, '2020-01-16 12:15:14', '2020-01-16 12:15:14', 10),
(6, 'البعثات', NULL, '2020-01-16 12:15:27', '2020-01-16 12:15:27', 11),
(7, 'القنصليات', NULL, '2020-01-16 12:15:37', '2020-01-16 12:15:37', 11),
(8, 'شركات السياحة', NULL, '2020-01-16 12:15:51', '2020-01-16 12:15:51', 11),
(9, 'الوزارات الحكومية', NULL, '2020-01-16 12:16:11', '2020-01-16 12:16:11', 11),
(10, 'حجاج الداخل', NULL, '2020-01-16 12:16:30', '2020-01-16 12:16:30', 13),
(11, 'مؤسسة الطوافة', NULL, '2020-01-16 12:16:46', '2020-01-16 12:16:46', 13),
(12, 'وجبات الصدقة', NULL, '2020-01-16 12:17:07', '2020-01-16 12:17:07', 12),
(13, 'وجبة الجمعية', NULL, '2020-01-16 12:17:27', '2020-01-16 12:17:27', 12),
(14, 'وجبات افطار صائم', NULL, '2020-01-16 12:17:45', '2020-01-16 12:17:45', 12);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `testimonial_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial_job` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial_details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `testimonial_user_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'testtrans', 'title', 1, 'en', 'wawdawdawd', '2020-01-18 08:17:47', '2020-01-18 08:17:47'),
(2, 'testtrans', 'description', 1, 'en', '<p>awdawdwda</p>', '2020-01-18 08:17:47', '2020-01-18 08:17:47'),
(3, 'testtrans', 'title', 2, 'en', 'awdwadw', '2020-01-18 08:22:07', '2020-01-18 08:22:07'),
(4, 'testtrans', 'description', 2, 'en', '<p>awdawdda</p>', '2020-01-18 08:22:07', '2020-01-18 08:22:07'),
(11, 'data_rows', 'display_name', 69, 'en', 'Id', '2020-01-18 09:29:39', '2020-01-18 09:29:39'),
(12, 'data_rows', 'display_name', 70, 'en', 'Section Title', '2020-01-18 09:29:39', '2020-01-18 09:29:39'),
(13, 'data_rows', 'display_name', 71, 'en', 'Section Description', '2020-01-18 09:29:39', '2020-01-18 09:29:39'),
(14, 'data_rows', 'display_name', 72, 'en', 'Created At', '2020-01-18 09:29:39', '2020-01-18 09:29:39'),
(15, 'data_rows', 'display_name', 73, 'en', 'Updated At', '2020-01-18 09:29:39', '2020-01-18 09:29:39'),
(16, 'data_rows', 'display_name', 74, 'en', 'Language Iso', '2020-01-18 09:29:39', '2020-01-18 09:29:39'),
(17, 'data_types', 'display_name_singular', 12, 'en', 'Menu Section', '2020-01-18 09:29:39', '2020-01-18 09:29:39'),
(18, 'data_types', 'display_name_plural', 12, 'en', 'Menu Sections', '2020-01-18 09:29:39', '2020-01-18 09:29:39'),
(19, 'data_rows', 'display_name', 99, 'en', 'img', '2020-01-18 09:52:02', '2020-01-18 09:52:02'),
(22, 'data_rows', 'display_name', 62, 'en', 'Id', '2020-01-18 09:57:04', '2020-01-18 09:57:04'),
(23, 'data_rows', 'display_name', 63, 'en', 'Menu Title', '2020-01-18 09:57:04', '2020-01-18 09:57:04'),
(24, 'data_rows', 'display_name', 64, 'en', 'Menu Description', '2020-01-18 09:57:04', '2020-01-18 09:57:04'),
(25, 'data_rows', 'display_name', 65, 'en', 'Menu Section', '2020-01-18 09:57:04', '2020-01-18 09:57:04'),
(26, 'data_rows', 'display_name', 67, 'en', 'Created At', '2020-01-18 09:57:04', '2020-01-18 09:57:04'),
(27, 'data_rows', 'display_name', 68, 'en', 'Updated At', '2020-01-18 09:57:04', '2020-01-18 09:57:04'),
(28, 'data_rows', 'display_name', 75, 'en', 'Menu Category', '2020-01-18 09:57:04', '2020-01-18 09:57:04'),
(29, 'data_rows', 'display_name', 76, 'en', 'Menu Img', '2020-01-18 09:57:04', '2020-01-18 09:57:04'),
(30, 'data_rows', 'display_name', 77, 'en', 'Menu Price', '2020-01-18 09:57:04', '2020-01-18 09:57:04'),
(31, 'data_rows', 'display_name', 78, 'en', 'Favorite', '2020-01-18 09:57:04', '2020-01-18 09:57:04'),
(32, 'data_types', 'display_name_singular', 11, 'en', 'Menu', '2020-01-18 09:57:04', '2020-01-18 09:57:04'),
(33, 'data_types', 'display_name_plural', 11, 'en', 'Menus', '2020-01-18 09:57:04', '2020-01-18 09:57:04'),
(34, 'data_rows', 'display_name', 28, 'en', 'Id', '2020-01-18 10:08:08', '2020-01-18 10:08:08'),
(35, 'data_rows', 'display_name', 29, 'en', 'Section Name', '2020-01-18 10:08:08', '2020-01-18 10:08:08'),
(36, 'data_rows', 'display_name', 30, 'en', 'Section icon', '2020-01-18 10:08:08', '2020-01-18 10:08:08'),
(37, 'data_rows', 'display_name', 31, 'en', 'Created At', '2020-01-18 10:08:08', '2020-01-18 10:08:08'),
(38, 'data_rows', 'display_name', 32, 'en', 'Updated At', '2020-01-18 10:08:08', '2020-01-18 10:08:08'),
(39, 'data_rows', 'display_name', 79, 'en', 'Section Description', '2020-01-18 10:08:08', '2020-01-18 10:08:08'),
(40, 'data_rows', 'display_name', 80, 'en', 'Section Favorite', '2020-01-18 10:08:08', '2020-01-18 10:08:08'),
(41, 'data_types', 'display_name_singular', 5, 'en', 'Section', '2020-01-18 10:08:08', '2020-01-18 10:08:08'),
(42, 'data_types', 'display_name_plural', 5, 'en', 'Sections', '2020-01-18 10:08:08', '2020-01-18 10:08:08'),
(43, 'data_rows', 'display_name', 33, 'en', 'Id', '2020-01-18 10:14:45', '2020-01-18 10:14:45'),
(44, 'data_rows', 'display_name', 34, 'en', 'Section Name', '2020-01-18 10:14:45', '2020-01-18 10:14:45'),
(45, 'data_rows', 'display_name', 35, 'en', 'Section Img', '2020-01-18 10:14:45', '2020-01-18 10:14:45'),
(46, 'data_rows', 'display_name', 36, 'en', 'Created At', '2020-01-18 10:14:45', '2020-01-18 10:14:45'),
(47, 'data_rows', 'display_name', 37, 'en', 'Updated At', '2020-01-18 10:14:45', '2020-01-18 10:14:45'),
(48, 'data_rows', 'display_name', 47, 'en', 'Section Id', '2020-01-18 10:14:45', '2020-01-18 10:14:45'),
(49, 'data_types', 'display_name_singular', 7, 'en', 'Sub Section', '2020-01-18 10:14:45', '2020-01-18 10:14:45'),
(50, 'data_types', 'display_name_plural', 7, 'en', 'Sub Sections', '2020-01-18 10:14:45', '2020-01-18 10:14:45'),
(51, 'data_rows', 'display_name', 54, 'en', 'Id', '2020-01-18 10:15:32', '2020-01-18 10:15:32'),
(52, 'data_rows', 'display_name', 55, 'en', 'Blog Title', '2020-01-18 10:15:32', '2020-01-18 10:15:32'),
(53, 'data_rows', 'display_name', 56, 'en', 'Blog Content', '2020-01-18 10:15:32', '2020-01-18 10:15:32'),
(54, 'data_rows', 'display_name', 57, 'en', 'Blog Img', '2020-01-18 10:15:32', '2020-01-18 10:15:32'),
(55, 'data_rows', 'display_name', 58, 'en', 'Created At', '2020-01-18 10:15:32', '2020-01-18 10:15:32'),
(56, 'data_rows', 'display_name', 59, 'en', 'Updated At', '2020-01-18 10:15:32', '2020-01-18 10:15:32'),
(57, 'data_types', 'display_name_singular', 9, 'en', 'Blog', '2020-01-18 10:15:32', '2020-01-18 10:15:32'),
(58, 'data_types', 'display_name_plural', 9, 'en', 'Blogs', '2020-01-18 10:15:32', '2020-01-18 10:15:32'),
(61, 'data_rows', 'display_name', 48, 'en', 'Id', '2020-01-18 10:27:21', '2020-01-18 10:27:21'),
(62, 'data_rows', 'display_name', 49, 'en', 'Slider Img', '2020-01-18 10:27:21', '2020-01-18 10:27:21'),
(63, 'data_rows', 'display_name', 52, 'en', 'Created At', '2020-01-18 10:27:22', '2020-01-18 10:27:22'),
(64, 'data_rows', 'display_name', 53, 'en', 'Updated At', '2020-01-18 10:27:22', '2020-01-18 10:27:22'),
(65, 'data_types', 'display_name_singular', 8, 'en', 'Slider', '2020-01-18 10:27:22', '2020-01-18 10:27:22'),
(66, 'data_types', 'display_name_plural', 8, 'en', 'Sliders', '2020-01-18 10:27:22', '2020-01-18 10:27:22'),
(67, 'blog', 'blog_title', 3, 'en', 'english conetn', '2020-01-18 10:32:55', '2020-01-18 10:32:55'),
(68, 'blog', 'blog_content', 3, 'en', '<p>english conetnenglish conetnenglish conetn</p>', '2020-01-18 10:32:55', '2020-01-18 10:32:55'),
(69, 'blog', 'blog_title', 4, 'en', 'ahmed ', '2020-01-18 12:11:04', '2020-01-18 12:11:04'),
(70, 'blog', 'blog_content', 4, 'en', '<p>ahmed&nbsp;</p>', '2020-01-18 12:11:04', '2020-01-18 12:11:04'),
(71, 'menu_section', 'section_title', 4, 'en', 'egyption', '2020-01-18 13:05:14', '2020-01-18 13:05:14'),
(72, 'menu_section', 'section_description', 4, 'en', 'egypt', '2020-01-18 13:05:14', '2020-01-18 13:05:14'),
(73, 'menu_section', 'section_title', 5, 'en', 'algera', '2020-01-18 13:06:47', '2020-01-18 13:06:47'),
(74, 'menu_section', 'section_description', 5, 'en', 'algera', '2020-01-18 13:06:47', '2020-01-18 13:06:47'),
(75, 'slider', 'slider_content', 3, 'en', 'onetnt en', '2020-01-18 13:23:26', '2020-01-18 13:23:26'),
(76, 'sections', 'section_name', 15, 'en', 'party', '2020-01-18 14:00:10', '2020-01-18 14:00:10'),
(77, 'sections', 'section_description', 15, 'en', '<p>partypartypartypartyparty</p>', '2020-01-18 14:00:10', '2020-01-18 14:00:10'),
(78, 'menu', 'menu_title', 4, 'en', 'Blue Cheese Crackers with Grapes', '2020-01-18 14:01:04', '2020-01-18 14:01:04'),
(79, 'menu', 'menu_description', 4, 'en', '<p>Blue Cheese Crackers with GrapesBlue Cheese Crackers with GrapesBlue Cheese Crackers with Grapes</p>', '2020-01-18 14:01:04', '2020-01-18 14:01:04'),
(80, 'menu_section', 'section_title', 6, 'en', 'eraq', '2020-01-18 15:36:03', '2020-01-18 15:36:03'),
(81, 'menu_section', 'section_description', 6, 'en', 'eraq', '2020-01-18 15:36:03', '2020-01-18 15:36:03'),
(82, 'menu', 'menu_title', 5, 'en', 'green Cheese ', '2020-01-18 16:21:45', '2020-01-18 16:21:45'),
(83, 'menu', 'menu_description', 5, 'en', '<p>green Cheese green Cheese green Cheese green Cheese&nbsp;</p>', '2020-01-18 16:21:45', '2020-01-18 16:21:45'),
(88, 'data_rows', 'display_name', 123, 'en', 'Id', '2020-01-19 08:24:14', '2020-01-19 08:24:14'),
(89, 'data_rows', 'display_name', 124, 'en', 'Page Name', '2020-01-19 08:24:14', '2020-01-19 08:24:14'),
(90, 'data_rows', 'display_name', 125, 'en', 'Created At', '2020-01-19 08:24:14', '2020-01-19 08:24:14'),
(91, 'data_rows', 'display_name', 126, 'en', 'Updated At', '2020-01-19 08:24:14', '2020-01-19 08:24:14'),
(92, 'data_types', 'display_name_singular', 16, 'en', 'Page', '2020-01-19 08:24:14', '2020-01-19 08:24:14'),
(93, 'data_types', 'display_name_plural', 16, 'en', 'Pages', '2020-01-19 08:24:14', '2020-01-19 08:24:14'),
(94, 'data_rows', 'display_name', 105, 'en', 'Id', '2020-01-19 08:56:05', '2020-01-19 08:56:05'),
(95, 'data_rows', 'display_name', 106, 'en', 'Description', '2020-01-19 08:56:05', '2020-01-19 08:56:05'),
(96, 'data_rows', 'display_name', 107, 'en', 'Keywords', '2020-01-19 08:56:05', '2020-01-19 08:56:05'),
(97, 'data_rows', 'display_name', 108, 'en', 'Canonical', '2020-01-19 08:56:05', '2020-01-19 08:56:05'),
(98, 'data_rows', 'display_name', 109, 'en', 'Oglocale', '2020-01-19 08:56:05', '2020-01-19 08:56:05'),
(99, 'data_rows', 'display_name', 110, 'en', 'Ogtype', '2020-01-19 08:56:05', '2020-01-19 08:56:05'),
(100, 'data_rows', 'display_name', 111, 'en', 'Ogtitle', '2020-01-19 08:56:05', '2020-01-19 08:56:05'),
(101, 'data_rows', 'display_name', 112, 'en', 'Ogdescription', '2020-01-19 08:56:05', '2020-01-19 08:56:05'),
(102, 'data_rows', 'display_name', 113, 'en', 'Ogurl', '2020-01-19 08:56:05', '2020-01-19 08:56:05'),
(103, 'data_rows', 'display_name', 114, 'en', 'Ogsite Name', '2020-01-19 08:56:05', '2020-01-19 08:56:05'),
(104, 'data_rows', 'display_name', 115, 'en', 'Ogimage', '2020-01-19 08:56:05', '2020-01-19 08:56:05'),
(105, 'data_rows', 'display_name', 116, 'en', 'Twittercard', '2020-01-19 08:56:05', '2020-01-19 08:56:05'),
(106, 'data_rows', 'display_name', 117, 'en', 'Twitterdescription', '2020-01-19 08:56:05', '2020-01-19 08:56:05'),
(107, 'data_rows', 'display_name', 118, 'en', 'Twittertitle', '2020-01-19 08:56:05', '2020-01-19 08:56:05'),
(108, 'data_rows', 'display_name', 119, 'en', 'Twitterimage', '2020-01-19 08:56:05', '2020-01-19 08:56:05'),
(109, 'data_rows', 'display_name', 120, 'en', 'Page Id', '2020-01-19 08:56:05', '2020-01-19 08:56:05'),
(110, 'data_rows', 'display_name', 121, 'en', 'Created At', '2020-01-19 08:56:05', '2020-01-19 08:56:05'),
(111, 'data_rows', 'display_name', 122, 'en', 'Updated At', '2020-01-19 08:56:05', '2020-01-19 08:56:05'),
(112, 'data_types', 'display_name_singular', 15, 'en', 'Seo', '2020-01-19 08:56:05', '2020-01-19 08:56:05'),
(113, 'data_types', 'display_name_plural', 15, 'en', 'Seos', '2020-01-19 08:56:05', '2020-01-19 08:56:05'),
(114, 'menu_items', 'title', 23, 'en', 'Seos', '2020-01-19 08:57:54', '2020-01-19 08:57:54'),
(115, 'data_rows', 'display_name', 104, 'en', 'slider content', '2020-01-19 10:39:12', '2020-01-19 10:39:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `admin`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'mohamed', 0, 'mohamed@email.com', 'users/default.png', NULL, '$2y$10$8gKPynRgEO4L2LPRIzO.k.MLt14YUgxIn7vlcLWXhz0.hkT8n9ziS', NULL, NULL, '2020-01-14 07:45:26', '2020-01-14 07:45:26'),
(2, 3, 'saad', 0, 'saad@email.com', 'users/default.png', NULL, '$2y$10$AjQoGFDVnvj.qBYARdz0r.oqOeap2UwSA04SynQblJizf6FWCHJcy', NULL, '{\"locale\":\"en\"}', '2020-01-19 08:59:33', '2020-01-19 08:59:33');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `menu_section`
--
ALTER TABLE `menu_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_section`
--
ALTER TABLE `sub_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `menu_section`
--
ALTER TABLE `menu_section`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_section`
--
ALTER TABLE `sub_section`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
