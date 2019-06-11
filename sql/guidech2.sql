-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 11 juin 2019 à 21:52
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `guidech2`
--

-- --------------------------------------------------------

--
-- Structure de la table `boutiques`
--

CREATE TABLE `boutiques` (
  `id` int(10) UNSIGNED NOT NULL,
  `wilaya_id` int(10) UNSIGNED NOT NULL,
  `Details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Bimages` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `classe` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `boutiques_class`
--

CREATE TABLE `boutiques_class` (
  `id` int(10) UNSIGNED NOT NULL,
  `classe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `restaurant_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name`, `slug`, `created_at`, `updated_at`, `restaurant_id`) VALUES
(1, 0, 'pizza', 'pizza', '2019-05-29 14:54:00', '2019-05-29 14:54:00', 1),
(2, 0, 'tacos', 'tacos', '2019-06-10 13:15:34', '2019-06-10 13:15:34', 1),
(3, 0, 'dessert', 'dessert', '2019-06-10 13:15:50', '2019-06-10 13:15:50', NULL),
(4, 0, 'plats', 'plats', '2019-06-10 13:16:13', '2019-06-10 13:16:13', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `restaurant_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `user_id`, `restaurant_id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(2, NULL, 1, 'wahid', 'wahidmadno@gmail.com', 'bla bla', 'bla bla', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'wahid', 'wahidmadano@gmail.com', 'hhhhh', 'hhhh', '2019-05-29 22:49:50', '2019-05-29 22:49:50'),
(3, 'wahid', 'wahidmadano@gmail.com', 'bla bla', 'bla bla', '2019-05-29 23:08:15', '2019-05-29 23:08:15'),
(4, 'wahid', 'wahidmadano@gmail.com', 'bla bla', 'bla bla', '2019-05-29 23:11:05', '2019-05-29 23:11:05'),
(5, 'wahid', 'wahidmadano@gmail.com', 'bla bla', 'bla bla', '2019-05-29 23:11:54', '2019-05-29 23:11:54'),
(6, 'wahid', 'wahidmadano@gmail.com', 'bla bla', 'bla bla', '2019-05-29 23:12:54', '2019-05-29 23:12:54'),
(7, 'wahid', 'wahidmadano@gmail.com', 'bla bla', 'bla bla', '2019-05-29 23:13:21', '2019-05-29 23:13:21'),
(8, 'wahid', 'wahid@email.com', 'hey', 'hey hey', '2019-05-29 23:40:25', '2019-05-29 23:40:25'),
(9, 'wahid', 'wahid@email.com', 'hey', 'hey', '2019-05-29 23:45:55', '2019-05-29 23:45:55'),
(10, 'wahid', 'wahidmadano@gmail.com', 'by', 'buyby', '2019-05-30 08:17:30', '2019-05-30 08:17:30'),
(11, 'wahid', 'wahidmadano@gmail.com', 'hey', 'hey', '2019-06-11 06:41:49', '2019-06-11 06:41:49'),
(12, 'wahd', 'wahidmadani@email.com', '3', 'hey', '2019-06-11 06:43:16', '2019-06-11 06:43:16'),
(13, 'wahidovich', 'wahid@email.com', '2', 'wow', '2019-06-11 06:44:48', '2019-06-11 06:44:48'),
(14, 'wahid', 'wahidmadano@gmail.com', '3', 'hey', '2019-06-11 06:47:40', '2019-06-11 06:47:40'),
(15, 'wahid', 'wahidmadano@gmail.com', '3', 'slm', '2019-06-11 08:14:47', '2019-06-11 08:14:47');

-- --------------------------------------------------------

--
-- Structure de la table `data_rows`
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
-- Déchargement des données de la table `data_rows`
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
(29, 6, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(30, 6, 'wilaya_id', 'text', 'Wilaya Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(31, 6, 'Details', 'text', 'Details', 1, 1, 1, 1, 1, 1, '{}', 4),
(32, 6, 'Bimages', 'text', 'Bimages', 1, 1, 1, 1, 1, 1, '{}', 5),
(33, 6, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(34, 6, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(35, 6, 'classe', 'text', 'Classe', 1, 1, 1, 1, 1, 1, '{}', 3),
(36, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(37, 7, 'wilaya_id', 'text', 'Wilaya Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(38, 7, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 4),
(39, 7, 'déscription', 'text', 'Déscription', 1, 1, 1, 1, 1, 1, '{}', 5),
(40, 7, 'adresse', 'text', 'Adresse', 1, 1, 1, 1, 1, 1, '{}', 6),
(41, 7, 'owner_id', 'text', 'Owner Id', 1, 1, 1, 1, 1, 1, '{}', 3),
(42, 7, 'averagerating', 'text', 'Averagerating', 1, 1, 1, 1, 1, 1, '{}', 7),
(43, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 8),
(44, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(51, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(52, 10, 'NumTel', 'text', 'NumTel', 1, 1, 1, 1, 1, 1, '{}', 3),
(53, 10, 'Details', 'text', 'Details', 1, 1, 1, 1, 1, 1, '{}', 4),
(54, 10, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(55, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(56, 10, 'wilaya_id', 'text', 'Wilaya Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(63, 13, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(64, 13, 'wilaya_id', 'text', 'Wilaya Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(65, 13, 'Details', 'text', 'Details', 1, 1, 1, 1, 1, 1, '{}', 3),
(66, 13, 'Himages', 'text', 'Himages', 1, 1, 1, 1, 1, 1, '{}', 4),
(67, 13, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(68, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(75, 16, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(76, 16, 'wilaya_id', 'text', 'Wilaya Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(77, 16, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 3),
(78, 16, 'adresse', 'text', 'Adresse', 1, 1, 1, 1, 1, 1, '{}', 4),
(79, 16, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(80, 16, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(81, 21, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(82, 21, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(83, 21, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
(84, 21, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(91, 25, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(92, 25, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 2),
(93, 25, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 3),
(94, 25, 'event_name', 'text', 'Event Name', 1, 1, 1, 1, 1, 1, '{}', 4),
(95, 25, 'start_date', 'text', 'Start Date', 1, 1, 1, 1, 1, 1, '{}', 5),
(96, 25, 'end_date', 'text', 'End Date', 1, 1, 1, 1, 1, 1, '{}', 6);

-- --------------------------------------------------------

--
-- Structure de la table `data_types`
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
-- Déchargement des données de la table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2019-05-29 14:25:51', '2019-05-29 14:25:51'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2019-05-29 14:25:52', '2019-05-29 14:25:52'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, NULL, '2019-05-29 14:25:52', '2019-05-29 14:25:52'),
(6, 'boutiques', 'boutiques', 'Boutique', 'Boutiques', NULL, 'App\\Boutique', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-05-29 14:30:14', '2019-05-29 14:30:14'),
(7, 'restaurants', 'restaurants', 'Restaurant', 'Restaurants', NULL, 'App\\Restaurant', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-05-29 14:33:43', '2019-05-29 14:33:43'),
(10, 'guid_taxis', 'guid-taxis', 'Guid Taxi', 'Guid Taxis', NULL, 'App\\GuidTaxi', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-05-29 14:35:52', '2019-05-29 14:35:52'),
(13, 'hotels', 'hotels', 'Hotel', 'Hotels', NULL, 'App\\Hotel', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-05-29 14:37:52', '2019-05-29 14:37:52'),
(16, 'places', 'places', 'Place', 'Places', NULL, 'App\\Place', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-05-29 14:39:22', '2019-05-29 14:39:22'),
(20, 'guidfoods', 'guidfoods', 'Guidfood', 'Guidfoods', NULL, 'App\\GuidFood', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-05-30 09:22:56', '2019-05-30 09:22:56'),
(21, 'wilayas', 'wilayas', 'Wilaya', 'Wilayas', NULL, 'App\\Wilaya', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-06-09 11:04:59', '2019-06-09 11:04:59'),
(25, 'events', 'events', 'Event', 'Events', NULL, 'App\\Event', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-06-11 06:18:18', '2019-06-11 06:18:18');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `event_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `created_at`, `updated_at`, `event_name`, `start_date`, `end_date`) VALUES
(1, NULL, NULL, 'trash tag', '2019-06-21', '2019-06-22'),
(2, '2019-06-11 06:24:06', '2019-06-11 06:24:06', 'any event', '2019-06-19', '2019-07-18'),
(3, '2019-06-11 06:29:04', '2019-06-11 06:29:04', 'any event2', '2019-06-19', '2019-06-23');

-- --------------------------------------------------------

--
-- Structure de la table `guid_foods`
--

CREATE TABLE `guid_foods` (
  `id` int(10) UNSIGNED NOT NULL,
  `restPic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menuPic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `wilaya_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `guid_taxis`
--

CREATE TABLE `guid_taxis` (
  `id` int(10) UNSIGNED NOT NULL,
  `NumTel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `wilaya_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `guid_taxis`
--

INSERT INTO `guid_taxis` (`id`, `NumTel`, `Details`, `created_at`, `updated_at`, `wilaya_id`) VALUES
(1, '05555555', 'kkkkkkkk', NULL, NULL, 1),
(2, '00', 'kk', '2019-05-30 08:12:12', '2019-05-30 08:12:12', 1);

-- --------------------------------------------------------

--
-- Structure de la table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(10) UNSIGNED NOT NULL,
  `wilaya_id` int(10) UNSIGNED NOT NULL,
  `Details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Himages` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `hotels_rating`
--

CREATE TABLE `hotels_rating` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `restaurant_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `items`
--

INSERT INTO `items` (`id`, `restaurant_id`, `user_id`, `category_id`, `name`, `description`, `price`, `image`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 1, '4fromages', 'ffffffffff', 600, '4fromages-2019-05-29-5ceeb9647dbd5.jpg', '2019-05-29 14:55:00', '2019-05-29 14:55:00'),
(2, NULL, NULL, 1, 'gg', 'jjj', 25, 'gg-2019-06-01-5cf2b6bae7bc1.jpg', '2019-06-01 15:32:42', '2019-06-01 15:32:42'),
(3, NULL, 1, 1, 'orientale', 'bla bla bla', 600, 'orientale-2019-06-10-5cfe75162c416.jpg', '2019-06-10 13:19:50', '2019-06-10 13:19:50'),
(4, NULL, 1, 2, 'mexicain', 'bla bla bla', 500, 'mexicain-2019-06-10-5cfe7558cfd93.jpg', '2019-06-10 13:20:56', '2019-06-10 13:22:10'),
(5, NULL, 1, 3, 'bla bla', 'bla bla', 200, 'bla-bla-2019-06-10-5cfe7597e41ea.jpg', '2019-06-10 13:21:59', '2019-06-10 13:21:59'),
(6, NULL, 1, 4, 'bla bla', 'bla bla', 600, 'bla-bla-2019-06-10-5cfe75d9dc167.jpg', '2019-06-10 13:23:05', '2019-06-10 13:23:05');

-- --------------------------------------------------------

--
-- Structure de la table `kryptonit3_counter_page`
--

CREATE TABLE `kryptonit3_counter_page` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `kryptonit3_counter_page`
--

INSERT INTO `kryptonit3_counter_page` (`id`, `page`) VALUES
(1, '1cb0f260-9fe5-56c3-8743-c4394f4dd9ee');

-- --------------------------------------------------------

--
-- Structure de la table `kryptonit3_counter_page_visitor`
--

CREATE TABLE `kryptonit3_counter_page_visitor` (
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `visitor_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `kryptonit3_counter_page_visitor`
--

INSERT INTO `kryptonit3_counter_page_visitor` (`page_id`, `visitor_id`, `created_at`) VALUES
(1, 1, '2019-05-31 22:57:46'),
(1, 2, '2019-06-02 23:26:00'),
(1, 3, '2019-06-09 08:15:03'),
(1, 4, '2019-06-09 08:34:44'),
(1, 5, '2019-06-02 16:09:59'),
(1, 6, '2019-06-11 17:22:44'),
(1, 7, '2019-06-11 08:36:41');

-- --------------------------------------------------------

--
-- Structure de la table `kryptonit3_counter_visitor`
--

CREATE TABLE `kryptonit3_counter_visitor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visitor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `kryptonit3_counter_visitor`
--

INSERT INTO `kryptonit3_counter_visitor` (`id`, `visitor`) VALUES
(2, '02c10666a2bd365655352dc126d3dfd8508e0b7f8dcad99c2f26a66f7b758954'),
(3, '18e546ce283027016ed72b82ec6a63e84e1c8b68cb429cdde60383f56d9a017b'),
(6, '6c09ce125790fcff929cd0077bf7a1e7ba4cf868459b86d54bd02850ca816e8a'),
(5, '896e07ef866726b779d535275ba040dd4cf48bb964b1f17506baee13d224e62c'),
(7, '956ab266f1d1784806e6dc13f2fbad0d73eb89ba7d60a8b6131bc661b278540c'),
(4, '973b8391e797838ef16433c1e13841e558b0fca507f79046aa170760196453c9'),
(1, '9e128a5e8f5a93be9874d56605a84e97f7719414d87e845fcf8dca43517d16a3');

-- --------------------------------------------------------

--
-- Structure de la table `links`
--

CREATE TABLE `links` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `links`
--

INSERT INTO `links` (`id`, `url`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'http://127.0.0.1:8000', 'dNspxV', '2019-05-29 14:08:16', '2019-05-29 14:08:16'),
(2, 'http://127.0.0.1:8000/home', 'zTE9Hk', '2019-05-29 14:09:07', '2019-05-29 14:09:07'),
(3, 'http://127.0.0.1:8000/admin/dashboard', 'cL9xG0', '2019-05-29 14:53:04', '2019-05-29 14:53:04'),
(4, 'http://localhost:8080', '6TF8GU', '2019-05-30 12:45:30', '2019-05-30 12:45:30'),
(5, 'http://localhost:8080/home', 'AIKTHT', '2019-05-30 12:52:53', '2019-05-30 12:52:53'),
(6, 'http://127.0.0.1:8000/test', 'vM0Zz1', '2019-06-03 04:36:34', '2019-06-03 04:36:34');

-- --------------------------------------------------------

--
-- Structure de la table `link_views`
--

CREATE TABLE `link_views` (
  `id` int(10) UNSIGNED NOT NULL,
  `link_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `browser` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `browser_version` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `os` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `os_version` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `link_views`
--

INSERT INTO `link_views` (`id`, `link_id`, `language`, `browser`, `browser_version`, `os`, `os_version`, `ip`, `created_at`, `updated_at`) VALUES
(1, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-29 14:08:21', '2019-05-29 14:08:21'),
(2, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-29 14:09:10', '2019-05-29 14:09:10'),
(3, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-29 14:37:22', '2019-05-29 14:37:22'),
(4, '1', 'fr', 'Chrome', '74.0.3729.169', 'Windows', '10.0', '127.0.0.1', '2019-05-29 14:47:21', '2019-05-29 14:47:21'),
(5, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-29 14:52:44', '2019-05-29 14:52:44'),
(6, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-29 14:53:05', '2019-05-29 14:53:05'),
(7, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-29 14:54:14', '2019-05-29 14:54:14'),
(8, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-29 15:06:12', '2019-05-29 15:06:12'),
(9, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-29 15:11:58', '2019-05-29 15:11:58'),
(10, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-29 17:44:24', '2019-05-29 17:44:24'),
(11, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-29 17:59:24', '2019-05-29 17:59:24'),
(12, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-29 18:14:00', '2019-05-29 18:14:00'),
(13, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-29 18:15:34', '2019-05-29 18:15:34'),
(14, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-29 18:21:09', '2019-05-29 18:21:09'),
(15, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-29 18:23:57', '2019-05-29 18:23:57'),
(16, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-29 18:24:49', '2019-05-29 18:24:49'),
(17, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-29 18:30:08', '2019-05-29 18:30:08'),
(18, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-29 18:30:59', '2019-05-29 18:30:59'),
(19, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-29 18:35:01', '2019-05-29 18:35:01'),
(20, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-29 18:39:10', '2019-05-29 18:39:10'),
(21, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-29 18:39:55', '2019-05-29 18:39:55'),
(22, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-29 18:52:51', '2019-05-29 18:52:51'),
(23, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-29 18:56:59', '2019-05-29 18:56:59'),
(24, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-29 19:03:14', '2019-05-29 19:03:14'),
(25, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-29 23:39:49', '2019-05-29 23:39:49'),
(26, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-29 23:50:53', '2019-05-29 23:50:53'),
(27, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-30 08:07:41', '2019-05-30 08:07:41'),
(28, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-30 08:13:48', '2019-05-30 08:13:48'),
(29, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-30 08:16:44', '2019-05-30 08:16:44'),
(30, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-30 08:17:35', '2019-05-30 08:17:35'),
(31, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-30 08:33:33', '2019-05-30 08:33:33'),
(32, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-30 08:35:37', '2019-05-30 08:35:37'),
(33, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-30 08:36:37', '2019-05-30 08:36:37'),
(34, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-30 08:37:55', '2019-05-30 08:37:55'),
(35, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-30 08:43:10', '2019-05-30 08:43:10'),
(36, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-30 08:45:17', '2019-05-30 08:45:17'),
(37, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-30 08:46:13', '2019-05-30 08:46:13'),
(38, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-30 08:49:13', '2019-05-30 08:49:13'),
(39, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-30 08:52:26', '2019-05-30 08:52:26'),
(40, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-30 08:54:10', '2019-05-30 08:54:10'),
(41, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-30 08:55:10', '2019-05-30 08:55:10'),
(42, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-30 08:58:06', '2019-05-30 08:58:06'),
(43, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-30 09:00:02', '2019-05-30 09:00:02'),
(44, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-30 09:00:50', '2019-05-30 09:00:50'),
(45, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-30 09:02:02', '2019-05-30 09:02:02'),
(46, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-30 09:03:37', '2019-05-30 09:03:37'),
(47, '1', 'fr', 'Chrome', '74.0.3729.169', 'Windows', '10.0', '127.0.0.1', '2019-05-30 12:29:37', '2019-05-30 12:29:37'),
(48, '4', 'fr', 'Chrome', '73.0.3683.90', 'Android', '7.1.1', '127.0.0.1', '2019-05-30 12:47:40', '2019-05-30 12:47:40'),
(49, '4', 'fr', 'Chrome', '73.0.3683.90', 'Android', '7.1.1', '127.0.0.1', '2019-05-30 12:50:48', '2019-05-30 12:50:48'),
(50, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-30 23:34:17', '2019-05-30 23:34:17'),
(51, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-30 23:34:31', '2019-05-30 23:34:31'),
(52, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 00:48:22', '2019-05-31 00:48:22'),
(53, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 00:48:27', '2019-05-31 00:48:27'),
(54, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 00:48:32', '2019-05-31 00:48:32'),
(55, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 00:51:43', '2019-05-31 00:51:43'),
(56, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 00:51:51', '2019-05-31 00:51:51'),
(57, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 00:52:32', '2019-05-31 00:52:32'),
(58, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 00:53:16', '2019-05-31 00:53:16'),
(59, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 02:31:41', '2019-05-31 02:31:41'),
(60, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 03:39:22', '2019-05-31 03:39:22'),
(61, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 03:39:49', '2019-05-31 03:39:49'),
(62, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 03:43:55', '2019-05-31 03:43:55'),
(63, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 03:44:12', '2019-05-31 03:44:12'),
(64, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 03:45:14', '2019-05-31 03:45:14'),
(65, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 03:45:31', '2019-05-31 03:45:31'),
(66, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 03:46:05', '2019-05-31 03:46:05'),
(67, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 03:51:29', '2019-05-31 03:51:29'),
(68, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 03:51:54', '2019-05-31 03:51:54'),
(69, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 03:52:53', '2019-05-31 03:52:53'),
(70, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 03:52:59', '2019-05-31 03:52:59'),
(71, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 04:11:37', '2019-05-31 04:11:37'),
(72, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 04:25:24', '2019-05-31 04:25:24'),
(73, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 04:27:50', '2019-05-31 04:27:50'),
(74, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 04:27:55', '2019-05-31 04:27:55'),
(75, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 04:28:36', '2019-05-31 04:28:36'),
(76, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 04:28:41', '2019-05-31 04:28:41'),
(77, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 04:28:47', '2019-05-31 04:28:47'),
(78, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 13:27:07', '2019-05-31 13:27:07'),
(79, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 13:27:12', '2019-05-31 13:27:12'),
(80, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 13:33:17', '2019-05-31 13:33:17'),
(81, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 13:34:25', '2019-05-31 13:34:25'),
(82, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 13:35:18', '2019-05-31 13:35:18'),
(83, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 13:36:57', '2019-05-31 13:36:57'),
(84, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 20:59:54', '2019-05-31 20:59:54'),
(85, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 21:30:59', '2019-05-31 21:30:59'),
(86, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 22:54:43', '2019-05-31 22:54:43'),
(87, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-05-31 22:57:45', '2019-05-31 22:57:45'),
(88, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-01 14:01:46', '2019-06-01 14:01:46'),
(89, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-01 15:14:38', '2019-06-01 15:14:38'),
(90, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-01 15:15:50', '2019-06-01 15:15:50'),
(91, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-01 15:18:14', '2019-06-01 15:18:14'),
(92, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-01 15:22:21', '2019-06-01 15:22:21'),
(93, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-01 15:27:19', '2019-06-01 15:27:19'),
(94, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-01 15:28:04', '2019-06-01 15:28:04'),
(95, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-01 15:29:13', '2019-06-01 15:29:13'),
(96, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-01 15:29:28', '2019-06-01 15:29:28'),
(97, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-01 15:29:34', '2019-06-01 15:29:34'),
(98, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-01 15:29:51', '2019-06-01 15:29:51'),
(99, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-01 15:30:13', '2019-06-01 15:30:13'),
(100, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-01 15:31:24', '2019-06-01 15:31:24'),
(101, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-01 15:35:30', '2019-06-01 15:35:30'),
(102, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-01 15:35:49', '2019-06-01 15:35:49'),
(103, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-01 15:35:54', '2019-06-01 15:35:54'),
(104, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-02 16:09:58', '2019-06-02 16:09:58'),
(105, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-02 16:16:06', '2019-06-02 16:16:06'),
(106, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-02 16:26:07', '2019-06-02 16:26:07'),
(107, '1', 'fr', 'Chrome', '74.0.3729.169', 'Windows', '10.0', '127.0.0.1', '2019-06-02 23:25:58', '2019-06-02 23:25:58'),
(108, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-03 02:23:50', '2019-06-03 02:23:50'),
(109, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-03 02:59:16', '2019-06-03 02:59:16'),
(110, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-03 03:00:28', '2019-06-03 03:00:28'),
(111, '6', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-03 04:36:39', '2019-06-03 04:36:39'),
(112, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-03 04:37:10', '2019-06-03 04:37:10'),
(113, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-03 04:37:38', '2019-06-03 04:37:38'),
(114, '6', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-03 04:44:42', '2019-06-03 04:44:42'),
(115, '6', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-03 11:34:12', '2019-06-03 11:34:12'),
(116, '6', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-03 11:39:13', '2019-06-03 11:39:13'),
(117, '6', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-03 11:39:42', '2019-06-03 11:39:42'),
(118, '6', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-03 11:43:08', '2019-06-03 11:43:08'),
(119, '6', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-03 11:44:04', '2019-06-03 11:44:04'),
(120, '6', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-03 11:44:46', '2019-06-03 11:44:46'),
(121, '6', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-03 11:47:48', '2019-06-03 11:47:48'),
(122, '6', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-03 11:48:58', '2019-06-03 11:48:58'),
(123, '6', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-03 11:54:15', '2019-06-03 11:54:15'),
(124, '6', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-03 11:55:25', '2019-06-03 11:55:25'),
(125, '6', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-03 11:56:39', '2019-06-03 11:56:39'),
(126, '6', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-03 11:57:10', '2019-06-03 11:57:10'),
(127, '6', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-03 11:57:53', '2019-06-03 11:57:53'),
(128, '6', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-03 12:04:02', '2019-06-03 12:04:02'),
(129, '6', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-03 12:05:04', '2019-06-03 12:05:04'),
(130, '6', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-03 12:13:32', '2019-06-03 12:13:32'),
(131, '6', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-03 12:15:04', '2019-06-03 12:15:04'),
(132, '6', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-03 12:16:33', '2019-06-03 12:16:33'),
(133, '6', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-03 12:17:18', '2019-06-03 12:17:18'),
(134, '6', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-03 12:20:52', '2019-06-03 12:20:52'),
(135, '6', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-03 12:23:26', '2019-06-03 12:23:26'),
(136, '6', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-03 12:25:50', '2019-06-03 12:25:50'),
(137, '6', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-03 12:26:41', '2019-06-03 12:26:41'),
(138, '6', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-03 12:28:17', '2019-06-03 12:28:17'),
(139, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-04 19:39:34', '2019-06-04 19:39:34'),
(140, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-04 19:39:46', '2019-06-04 19:39:46'),
(141, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-04 19:39:58', '2019-06-04 19:39:58'),
(142, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-04 19:56:29', '2019-06-04 19:56:29'),
(143, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-04 19:57:54', '2019-06-04 19:57:54'),
(144, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-04 19:58:19', '2019-06-04 19:58:19'),
(145, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-04 19:58:55', '2019-06-04 19:58:55'),
(146, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-04 21:09:45', '2019-06-04 21:09:45'),
(147, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-04 21:14:35', '2019-06-04 21:14:35'),
(148, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-05 16:41:43', '2019-06-05 16:41:43'),
(149, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-07 06:11:53', '2019-06-07 06:11:53'),
(150, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-07 07:32:48', '2019-06-07 07:32:48'),
(151, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-09 07:29:39', '2019-06-09 07:29:39'),
(152, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-09 07:29:53', '2019-06-09 07:29:53'),
(153, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-09 07:30:13', '2019-06-09 07:30:13'),
(154, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-09 07:30:24', '2019-06-09 07:30:24'),
(155, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-09 07:30:33', '2019-06-09 07:30:33'),
(156, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-09 07:40:34', '2019-06-09 07:40:34'),
(157, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-09 07:41:48', '2019-06-09 07:41:48'),
(158, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-09 07:51:03', '2019-06-09 07:51:03'),
(159, '1', 'fr', 'Chrome', '74.0.3729.169', 'Windows', '10.0', '127.0.0.1', '2019-06-09 08:15:09', '2019-06-09 08:15:09'),
(160, '1', 'fr', 'Safari', '11.0', 'iOS', '11.0', '127.0.0.1', '2019-06-09 08:24:18', '2019-06-09 08:24:18'),
(161, '4', 'fr', 'Chrome', '73.0.3683.90', 'Android', '7.1.1', '127.0.0.1', '2019-06-09 08:25:15', '2019-06-09 08:25:15'),
(162, '4', 'fr', 'Chrome', '73.0.3683.90', 'Android', '7.1.1', '127.0.0.1', '2019-06-09 08:25:17', '2019-06-09 08:25:17'),
(163, '4', 'fr', 'Chrome', '73.0.3683.90', 'Android', '7.1.1', '127.0.0.1', '2019-06-09 08:25:46', '2019-06-09 08:25:46'),
(164, '4', 'fr', 'Chrome', '73.0.3683.90', 'Android', '7.1.1', '127.0.0.1', '2019-06-09 08:31:11', '2019-06-09 08:31:11'),
(165, '4', 'fr', 'Chrome', '73.0.3683.90', 'Android', '7.1.1', '127.0.0.1', '2019-06-09 08:34:43', '2019-06-09 08:34:43'),
(166, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-09 11:02:44', '2019-06-09 11:02:44'),
(167, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-09 16:40:39', '2019-06-09 16:40:39'),
(168, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-09 16:45:10', '2019-06-09 16:45:10'),
(169, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-09 18:56:08', '2019-06-09 18:56:08'),
(170, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-09 18:56:43', '2019-06-09 18:56:43'),
(171, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 10:49:06', '2019-06-10 10:49:06'),
(172, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 13:00:38', '2019-06-10 13:00:38'),
(173, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 13:14:10', '2019-06-10 13:14:10'),
(174, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 13:15:22', '2019-06-10 13:15:22'),
(175, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 13:15:39', '2019-06-10 13:15:39'),
(176, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 13:15:55', '2019-06-10 13:15:55'),
(177, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 13:16:19', '2019-06-10 13:16:19'),
(178, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 13:20:19', '2019-06-10 13:20:19'),
(179, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 13:21:02', '2019-06-10 13:21:02'),
(180, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 13:22:16', '2019-06-10 13:22:16'),
(181, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 13:23:30', '2019-06-10 13:23:30'),
(182, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 13:25:56', '2019-06-10 13:25:56'),
(183, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 13:26:55', '2019-06-10 13:26:55'),
(184, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 13:27:03', '2019-06-10 13:27:03'),
(185, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 13:28:54', '2019-06-10 13:28:54'),
(186, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 13:32:42', '2019-06-10 13:32:42'),
(187, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 13:41:01', '2019-06-10 13:41:01'),
(188, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 14:02:57', '2019-06-10 14:02:57'),
(189, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 16:04:08', '2019-06-10 16:04:08'),
(190, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 16:06:43', '2019-06-10 16:06:43'),
(191, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 16:08:23', '2019-06-10 16:08:23'),
(192, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 16:10:11', '2019-06-10 16:10:11'),
(193, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 16:12:32', '2019-06-10 16:12:32'),
(194, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 16:15:59', '2019-06-10 16:15:59'),
(195, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 16:17:19', '2019-06-10 16:17:19'),
(196, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 16:19:01', '2019-06-10 16:19:01'),
(197, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 16:22:20', '2019-06-10 16:22:20'),
(198, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 16:36:48', '2019-06-10 16:36:48'),
(199, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 16:43:51', '2019-06-10 16:43:51'),
(200, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 16:44:33', '2019-06-10 16:44:33'),
(201, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 16:48:26', '2019-06-10 16:48:26'),
(202, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 17:04:39', '2019-06-10 17:04:39'),
(203, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 17:08:04', '2019-06-10 17:08:04'),
(204, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 17:10:09', '2019-06-10 17:10:09'),
(205, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 17:13:42', '2019-06-10 17:13:42'),
(206, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 17:13:57', '2019-06-10 17:13:57'),
(207, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 17:15:27', '2019-06-10 17:15:27'),
(208, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 17:26:37', '2019-06-10 17:26:37'),
(209, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 17:45:36', '2019-06-10 17:45:36'),
(210, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 17:46:41', '2019-06-10 17:46:41'),
(211, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-10 17:52:59', '2019-06-10 17:52:59'),
(212, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 05:56:32', '2019-06-11 05:56:32'),
(213, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 05:57:06', '2019-06-11 05:57:06'),
(214, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 05:59:27', '2019-06-11 05:59:27'),
(215, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 06:00:21', '2019-06-11 06:00:21'),
(216, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 06:30:50', '2019-06-11 06:30:50'),
(217, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 06:31:12', '2019-06-11 06:31:12'),
(218, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 06:33:09', '2019-06-11 06:33:09'),
(219, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 06:41:01', '2019-06-11 06:41:01'),
(220, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 06:41:57', '2019-06-11 06:41:57'),
(221, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 06:43:00', '2019-06-11 06:43:00'),
(222, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 06:43:20', '2019-06-11 06:43:20'),
(223, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 06:44:30', '2019-06-11 06:44:30'),
(224, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 06:44:52', '2019-06-11 06:44:52'),
(225, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 06:47:25', '2019-06-11 06:47:25'),
(226, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 06:47:45', '2019-06-11 06:47:45'),
(227, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 07:17:36', '2019-06-11 07:17:36'),
(228, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 07:18:04', '2019-06-11 07:18:04'),
(229, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 07:18:41', '2019-06-11 07:18:41'),
(230, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 07:19:29', '2019-06-11 07:19:29'),
(231, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 07:37:35', '2019-06-11 07:37:35'),
(232, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 07:52:05', '2019-06-11 07:52:05'),
(233, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 07:52:58', '2019-06-11 07:52:58'),
(234, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 07:57:29', '2019-06-11 07:57:29'),
(235, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 08:04:44', '2019-06-11 08:04:44'),
(236, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 08:04:50', '2019-06-11 08:04:50'),
(237, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 08:08:02', '2019-06-11 08:08:02'),
(238, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 08:13:06', '2019-06-11 08:13:06'),
(239, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 08:14:52', '2019-06-11 08:14:52'),
(240, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 08:34:56', '2019-06-11 08:34:56'),
(241, '1', 'fr', 'Chrome', '74.0.3729.169', 'Windows', '10.0', '127.0.0.1', '2019-06-11 08:36:40', '2019-06-11 08:36:40'),
(242, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 11:46:37', '2019-06-11 11:46:37'),
(243, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 11:59:24', '2019-06-11 11:59:24'),
(244, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:08:00', '2019-06-11 12:08:00'),
(245, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:08:39', '2019-06-11 12:08:39'),
(246, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:08:54', '2019-06-11 12:08:54'),
(247, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:09:09', '2019-06-11 12:09:09'),
(248, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:09:27', '2019-06-11 12:09:27'),
(249, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:10:00', '2019-06-11 12:10:00'),
(250, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:10:15', '2019-06-11 12:10:15'),
(251, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:10:55', '2019-06-11 12:10:55'),
(252, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:11:07', '2019-06-11 12:11:07'),
(253, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:11:49', '2019-06-11 12:11:49'),
(254, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:12:05', '2019-06-11 12:12:05'),
(255, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:12:24', '2019-06-11 12:12:24'),
(256, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:12:45', '2019-06-11 12:12:45'),
(257, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:14:02', '2019-06-11 12:14:02'),
(258, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:15:22', '2019-06-11 12:15:22'),
(259, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:15:32', '2019-06-11 12:15:32'),
(260, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:24:14', '2019-06-11 12:24:14'),
(261, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:24:28', '2019-06-11 12:24:28'),
(262, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:32:52', '2019-06-11 12:32:52'),
(263, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:33:34', '2019-06-11 12:33:34'),
(264, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:34:50', '2019-06-11 12:34:50'),
(265, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:35:11', '2019-06-11 12:35:11'),
(266, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:35:48', '2019-06-11 12:35:48'),
(267, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:37:46', '2019-06-11 12:37:46'),
(268, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:38:46', '2019-06-11 12:38:46'),
(269, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:38:57', '2019-06-11 12:38:57'),
(270, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:39:03', '2019-06-11 12:39:03'),
(271, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:39:51', '2019-06-11 12:39:51'),
(272, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:40:03', '2019-06-11 12:40:03'),
(273, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:40:48', '2019-06-11 12:40:48'),
(274, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:41:15', '2019-06-11 12:41:15'),
(275, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:44:56', '2019-06-11 12:44:56'),
(276, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:45:10', '2019-06-11 12:45:10'),
(277, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:45:23', '2019-06-11 12:45:23'),
(278, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:45:47', '2019-06-11 12:45:47'),
(279, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:46:36', '2019-06-11 12:46:36'),
(280, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:47:12', '2019-06-11 12:47:12'),
(281, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:47:20', '2019-06-11 12:47:20'),
(282, '3', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:47:31', '2019-06-11 12:47:31'),
(283, '2', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 12:48:13', '2019-06-11 12:48:13'),
(284, '1', 'fr', 'Firefox', '66.0', 'Windows', '10.0', '127.0.0.1', '2019-06-11 17:22:41', '2019-06-11 17:22:41');

-- --------------------------------------------------------

--
-- Structure de la table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2019-05-29 14:25:54', '2019-05-29 14:25:54');

-- --------------------------------------------------------

--
-- Structure de la table `menu_items`
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
-- Déchargement des données de la table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2019-05-29 14:25:54', '2019-05-29 14:25:54', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2019-05-29 14:25:54', '2019-05-29 14:25:54', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2019-05-29 14:25:54', '2019-05-29 14:25:54', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2019-05-29 14:25:54', '2019-05-29 14:25:54', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2019-05-29 14:25:55', '2019-05-29 14:25:55', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 10, '2019-05-29 14:25:55', '2019-05-29 14:25:55', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 11, '2019-05-29 14:25:55', '2019-05-29 14:25:55', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 12, '2019-05-29 14:25:55', '2019-05-29 14:25:55', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 13, '2019-05-29 14:25:55', '2019-05-29 14:25:55', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 14, '2019-05-29 14:25:55', '2019-05-29 14:25:55', 'voyager.settings.index', NULL),
(11, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 13, '2019-05-29 14:26:01', '2019-05-29 14:26:01', 'voyager.hooks', NULL),
(12, 1, 'Boutiques', '', '_self', 'voyager-tag', '#000000', NULL, 15, '2019-05-29 14:27:47', '2019-05-29 14:40:31', 'voyager.boutiques.index', 'null'),
(13, 1, 'Restaurants', '', '_self', 'voyager-hotdog', '#000000', NULL, 16, '2019-05-29 14:33:44', '2019-05-29 14:42:38', 'voyager.restaurants.index', 'null'),
(14, 1, 'Guid Taxis', '', '_self', 'voyager-rocket', '#000000', NULL, 17, '2019-05-29 14:34:04', '2019-05-29 14:41:19', 'voyager.guid-taxis.index', 'null'),
(15, 1, 'Hotels', '', '_self', 'voyager-logbook', '#000000', NULL, 18, '2019-05-29 14:37:16', '2019-05-29 14:42:52', 'voyager.hotels.index', 'null'),
(16, 1, 'Places', '', '_self', 'voyager-photos', '#000000', NULL, 19, '2019-05-29 14:38:49', '2019-05-29 14:43:20', 'voyager.places.index', 'null'),
(17, 1, 'GuidFoods', '', '_self', 'voyager-pizza', '#000000', NULL, 20, '2019-05-30 09:21:54', '2019-05-30 09:27:48', 'voyager.guidfoods.index', 'null'),
(18, 1, 'Wilayas', '', '_self', 'voyager-bookmark', '#000000', NULL, 21, '2019-06-09 11:04:59', '2019-06-11 06:16:24', 'voyager.wilayas.index', 'null'),
(19, 1, 'Events', '', '_self', 'voyager-calendar', '#000000', NULL, 22, '2019-06-11 06:16:55', '2019-06-11 06:21:56', 'voyager.events.index', 'null');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2015_06_21_181359_create_kryptonit3_counter_page_table', 1),
(4, '2015_06_21_193003_create_kryptonit3_counter_visitor_table', 1),
(5, '2015_06_21_193059_create_kryptonit3_counter_page_visitor_table', 1),
(6, '2016_01_01_000000_add_voyager_user_fields', 1),
(7, '2016_01_01_000000_create_data_types_table', 1),
(8, '2016_05_19_173453_create_menu_table', 1),
(9, '2016_10_21_190000_create_roles_table', 1),
(10, '2016_10_21_190000_create_settings_table', 1),
(11, '2016_10_30_174357_links', 1),
(12, '2016_10_30_174359_link_views', 1),
(13, '2016_11_30_135954_create_permission_table', 1),
(14, '2016_11_30_141208_create_permission_role_table', 1),
(15, '2016_12_26_201236_data_types__add__server_side', 1),
(16, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(17, '2017_01_14_005015_create_translations_table', 1),
(18, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(19, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(20, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(21, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(22, '2017_08_05_000000_add_group_to_settings_table', 1),
(23, '2017_11_26_013050_add_user_role_relationship', 1),
(24, '2017_11_26_015000_create_user_roles_table', 1),
(25, '2018_02_14_154912_create_sliders_table', 1),
(26, '2018_02_18_143201_create_categories_table', 1),
(27, '2018_02_19_144026_create_items_table', 1),
(28, '2018_03_06_113535_create_reservations_table', 1),
(29, '2018_03_06_151601_create_contacts_table', 1),
(30, '2018_03_11_000000_add_user_settings', 1),
(31, '2018_03_14_000000_add_details_to_data_types_table', 1),
(32, '2018_03_16_000000_make_settings_value_nullable', 1),
(33, '2018_06_30_113500_create_comments_table', 1),
(34, '2019_02_26_130514_create_hotels_table', 1),
(35, '2019_03_04_143444_create_restaurants_table', 1),
(36, '2019_03_04_143625_create_boutiques_table', 1),
(37, '2019_03_04_143853_create_places_table', 1),
(38, '2019_03_04_151429_create_wilayas_table', 1),
(39, '2019_03_04_153613_create_hotels_rating_table', 1),
(40, '2019_03_04_153732_create_places_type_table', 1),
(41, '2019_03_04_153838_create_boutiques_class_table', 1),
(42, '2019_03_04_153946_create_restaurants_class_table', 1),
(43, '2019_04_02_190021_add_column_hotel_wilaya_id', 1),
(44, '2019_04_02_202111_add_column_boutique_wilaya', 1),
(45, '2019_04_02_202330_add_column_places_wilaya', 1),
(46, '2019_04_02_202906_add_column_restaurant_wilaya', 1),
(47, '2019_04_02_205918_add_column_boutique_classe', 1),
(48, '2019_04_02_220845_add_column_restau_class', 1),
(49, '2019_04_02_223112_add_column_reservations_id', 1),
(50, '2019_04_07_162406_add_column_sliders_hotel_id', 1),
(51, '2019_04_07_162424_add_column_sliders_restau_id', 1),
(52, '2019_04_07_162509_add_column_sliders_wilaya_id', 1),
(53, '2019_04_07_162524_add_column_sliders_boutique_id', 1),
(54, '2019_04_07_162538_add_column_sliders_place_id', 1),
(55, '2019_05_11_015033_create_guid_taxis_table', 1),
(56, '2019_05_11_020526_add_column_wilaya_id_taxi', 1),
(57, '2019_05_29_143529_ratings', 1),
(58, '2019_05_29_171956_create_contact_us_table', 2),
(59, '2019_05_30_004554_create_contact_us_table', 3),
(60, '2019_03_16_064308_create__guid_foods_table', 4),
(61, '2019_03_16_125406_add_column_wilaya_id_food', 4),
(62, '2019_06_01_021734_create_events_table', 5),
(63, '2019_06_01_164641_add_is_admin_to_users', 6);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2019-05-07 14:34:56', '2019-05-07 14:34:56'),
(2, 'browse_bread', NULL, '2019-05-07 14:34:56', '2019-05-07 14:34:56'),
(3, 'browse_database', NULL, '2019-05-07 14:34:56', '2019-05-07 14:34:56'),
(4, 'browse_media', NULL, '2019-05-07 14:34:56', '2019-05-07 14:34:56'),
(5, 'browse_compass', NULL, '2019-05-07 14:34:57', '2019-05-07 14:34:57'),
(6, 'browse_menus', 'menus', '2019-05-07 14:34:57', '2019-05-07 14:34:57'),
(7, 'read_menus', 'menus', '2019-05-07 14:34:57', '2019-05-07 14:34:57'),
(8, 'edit_menus', 'menus', '2019-05-07 14:34:57', '2019-05-07 14:34:57'),
(9, 'add_menus', 'menus', '2019-05-07 14:34:57', '2019-05-07 14:34:57'),
(10, 'delete_menus', 'menus', '2019-05-07 14:34:57', '2019-05-07 14:34:57'),
(11, 'browse_roles', 'roles', '2019-05-07 14:34:57', '2019-05-07 14:34:57'),
(12, 'read_roles', 'roles', '2019-05-07 14:34:57', '2019-05-07 14:34:57'),
(13, 'edit_roles', 'roles', '2019-05-07 14:34:57', '2019-05-07 14:34:57'),
(14, 'add_roles', 'roles', '2019-05-07 14:34:57', '2019-05-07 14:34:57'),
(15, 'delete_roles', 'roles', '2019-05-07 14:34:57', '2019-05-07 14:34:57'),
(16, 'browse_users', 'users', '2019-05-07 14:34:57', '2019-05-07 14:34:57'),
(17, 'read_users', 'users', '2019-05-07 14:34:57', '2019-05-07 14:34:57'),
(18, 'edit_users', 'users', '2019-05-07 14:34:57', '2019-05-07 14:34:57'),
(19, 'add_users', 'users', '2019-05-07 14:34:57', '2019-05-07 14:34:57'),
(20, 'delete_users', 'users', '2019-05-07 14:34:57', '2019-05-07 14:34:57'),
(21, 'browse_settings', 'settings', '2019-05-07 14:34:57', '2019-05-07 14:34:57'),
(22, 'read_settings', 'settings', '2019-05-07 14:34:57', '2019-05-07 14:34:57'),
(23, 'edit_settings', 'settings', '2019-05-07 14:34:57', '2019-05-07 14:34:57'),
(24, 'add_settings', 'settings', '2019-05-07 14:34:58', '2019-05-07 14:34:58'),
(25, 'delete_settings', 'settings', '2019-05-07 14:34:58', '2019-05-07 14:34:58'),
(26, 'browse_hooks', NULL, '2019-05-08 17:59:36', '2019-05-08 17:59:36'),
(27, 'browse_places', 'places', '2019-05-11 11:17:16', '2019-05-11 11:17:16'),
(28, 'read_places', 'places', '2019-05-11 11:17:16', '2019-05-11 11:17:16'),
(29, 'edit_places', 'places', '2019-05-11 11:17:16', '2019-05-11 11:17:16'),
(30, 'add_places', 'places', '2019-05-11 11:17:16', '2019-05-11 11:17:16'),
(31, 'delete_places', 'places', '2019-05-11 11:17:16', '2019-05-11 11:17:16'),
(32, 'browse_polls', 'polls', '2019-05-11 11:41:45', '2019-05-11 11:41:45'),
(33, 'read_polls', 'polls', '2019-05-11 11:41:45', '2019-05-11 11:41:45'),
(34, 'edit_polls', 'polls', '2019-05-11 11:41:46', '2019-05-11 11:41:46'),
(35, 'add_polls', 'polls', '2019-05-11 11:41:46', '2019-05-11 11:41:46'),
(36, 'delete_polls', 'polls', '2019-05-11 11:41:46', '2019-05-11 11:41:46'),
(57, 'browse_guidtaxi', 'guidtaxi', '2019-05-27 21:44:15', '2019-05-27 21:44:15'),
(58, 'read_guidtaxi', 'guidtaxi', '2019-05-27 21:44:15', '2019-05-27 21:44:15'),
(59, 'edit_guidtaxi', 'guidtaxi', '2019-05-27 21:44:15', '2019-05-27 21:44:15'),
(60, 'add_guidtaxi', 'guidtaxi', '2019-05-27 21:44:15', '2019-05-27 21:44:15'),
(61, 'delete_guidtaxi', 'guidtaxi', '2019-05-27 21:44:15', '2019-05-27 21:44:15'),
(67, 'browse_wilayas', 'wilayas', '2019-05-28 12:30:25', '2019-05-28 12:30:25'),
(68, 'read_wilayas', 'wilayas', '2019-05-28 12:30:25', '2019-05-28 12:30:25'),
(69, 'edit_wilayas', 'wilayas', '2019-05-28 12:30:25', '2019-05-28 12:30:25'),
(70, 'add_wilayas', 'wilayas', '2019-05-28 12:30:25', '2019-05-28 12:30:25'),
(71, 'delete_wilayas', 'wilayas', '2019-05-28 12:30:25', '2019-05-28 12:30:25'),
(72, 'browse_guid_taxis', 'guid_taxis', '2019-05-28 18:14:24', '2019-05-28 18:14:24'),
(73, 'read_guid_taxis', 'guid_taxis', '2019-05-28 18:14:24', '2019-05-28 18:14:24'),
(74, 'edit_guid_taxis', 'guid_taxis', '2019-05-28 18:14:24', '2019-05-28 18:14:24'),
(75, 'add_guid_taxis', 'guid_taxis', '2019-05-28 18:14:24', '2019-05-28 18:14:24'),
(76, 'delete_guid_taxis', 'guid_taxis', '2019-05-28 18:14:24', '2019-05-28 18:14:24'),
(77, 'browse_boutiques', 'boutiques', '2019-05-29 11:48:12', '2019-05-29 11:48:12'),
(78, 'read_boutiques', 'boutiques', '2019-05-29 11:48:12', '2019-05-29 11:48:12'),
(79, 'edit_boutiques', 'boutiques', '2019-05-29 11:48:12', '2019-05-29 11:48:12'),
(80, 'add_boutiques', 'boutiques', '2019-05-29 11:48:12', '2019-05-29 11:48:12'),
(81, 'delete_boutiques', 'boutiques', '2019-05-29 11:48:12', '2019-05-29 11:48:12'),
(82, 'browse_hotels', 'hotels', '2019-05-29 11:50:38', '2019-05-29 11:50:38'),
(83, 'read_hotels', 'hotels', '2019-05-29 11:50:38', '2019-05-29 11:50:38'),
(84, 'edit_hotels', 'hotels', '2019-05-29 11:50:38', '2019-05-29 11:50:38'),
(85, 'add_hotels', 'hotels', '2019-05-29 11:50:38', '2019-05-29 11:50:38'),
(86, 'delete_hotels', 'hotels', '2019-05-29 11:50:38', '2019-05-29 11:50:38'),
(87, 'browse_restaurants', 'restaurants', '2019-05-29 14:33:44', '2019-05-29 14:33:44'),
(88, 'read_restaurants', 'restaurants', '2019-05-29 14:33:44', '2019-05-29 14:33:44'),
(89, 'edit_restaurants', 'restaurants', '2019-05-29 14:33:44', '2019-05-29 14:33:44'),
(90, 'add_restaurants', 'restaurants', '2019-05-29 14:33:44', '2019-05-29 14:33:44'),
(91, 'delete_restaurants', 'restaurants', '2019-05-29 14:33:44', '2019-05-29 14:33:44'),
(92, 'browse_guidfoods', 'guidfoods', '2019-05-30 09:21:54', '2019-05-30 09:21:54'),
(93, 'read_guidfoods', 'guidfoods', '2019-05-30 09:21:54', '2019-05-30 09:21:54'),
(94, 'edit_guidfoods', 'guidfoods', '2019-05-30 09:21:54', '2019-05-30 09:21:54'),
(95, 'add_guidfoods', 'guidfoods', '2019-05-30 09:21:54', '2019-05-30 09:21:54'),
(96, 'delete_guidfoods', 'guidfoods', '2019-05-30 09:21:54', '2019-05-30 09:21:54'),
(97, 'browse_events', 'events', '2019-06-11 06:16:55', '2019-06-11 06:16:55'),
(98, 'read_events', 'events', '2019-06-11 06:16:55', '2019-06-11 06:16:55'),
(99, 'edit_events', 'events', '2019-06-11 06:16:55', '2019-06-11 06:16:55'),
(100, 'add_events', 'events', '2019-06-11 06:16:55', '2019-06-11 06:16:55'),
(101, 'delete_events', 'events', '2019-06-11 06:16:55', '2019-06-11 06:16:55');

-- --------------------------------------------------------

--
-- Structure de la table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(5, 1),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 1),
(11, 2),
(12, 1),
(12, 2),
(13, 1),
(13, 2),
(14, 1),
(14, 2),
(15, 1),
(15, 2),
(16, 1),
(16, 2),
(17, 1),
(17, 2),
(18, 1),
(18, 2),
(19, 1),
(19, 2),
(20, 1),
(20, 2),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(25, 2),
(26, 2),
(27, 1),
(27, 2),
(28, 1),
(28, 2),
(29, 1),
(29, 2),
(30, 1),
(30, 2),
(31, 1),
(31, 2),
(32, 2),
(33, 2),
(34, 2),
(35, 2),
(36, 2),
(57, 1),
(57, 2),
(58, 1),
(58, 2),
(59, 1),
(59, 2),
(60, 1),
(60, 2),
(61, 1),
(61, 2),
(67, 1),
(67, 2),
(68, 1),
(68, 2),
(69, 1),
(69, 2),
(70, 1),
(70, 2),
(71, 1),
(71, 2),
(72, 1),
(72, 2),
(73, 1),
(73, 2),
(74, 1),
(74, 2),
(75, 1),
(75, 2),
(76, 1),
(76, 2),
(77, 1),
(77, 2),
(78, 1),
(78, 2),
(79, 1),
(79, 2),
(80, 1),
(80, 2),
(81, 1),
(81, 2),
(82, 1),
(82, 2),
(83, 1),
(83, 2),
(84, 1),
(84, 2),
(85, 1),
(85, 2),
(86, 1),
(86, 2),
(87, 1),
(87, 2),
(88, 1),
(88, 2),
(89, 1),
(89, 2),
(90, 1),
(90, 2),
(91, 1),
(91, 2),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 1),
(101, 1);

-- --------------------------------------------------------

--
-- Structure de la table `places`
--

CREATE TABLE `places` (
  `id` int(10) UNSIGNED NOT NULL,
  `wilaya_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `places_type`
--

CREATE TABLE `places_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rating` int(11) NOT NULL,
  `rateable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rateable_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ratings`
--

INSERT INTO `ratings` (`id`, `created_at`, `updated_at`, `rating`, `rateable_type`, `rateable_id`, `user_id`) VALUES
(1, '2019-06-04 20:36:35', '2019-06-04 20:36:35', 5, 'App\\Restaurant', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_and_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `restaurant_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `user_id`, `name`, `phone`, `email`, `date_and_time`, `message`, `status`, `created_at`, `updated_at`, `restaurant_id`) VALUES
(1, NULL, 'wahid', '0555555555555', 'wahidmadano@gmail.com', '', 'bla bla ', 1, NULL, '2019-06-11 08:12:13', 1),
(2, NULL, 'wahid', '0555555555555', 'wahidmadano@gmail.com', '', 'bla bla ', 2, NULL, NULL, 1),
(10, 1, 'wahid', '055555555', 'wahidmadano@gmail.com', '04 June 2019 - 10:11 AM', 'hi', 0, '2019-06-10 18:07:08', '2019-06-10 18:07:08', 2);

-- --------------------------------------------------------

--
-- Structure de la table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(10) UNSIGNED NOT NULL,
  `wilaya_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `déscription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_id` int(10) UNSIGNED NOT NULL,
  `averagerating` double(8,2) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `restaurants`
--

INSERT INTO `restaurants` (`id`, `wilaya_id`, `name`, `déscription`, `adresse`, `owner_id`, `averagerating`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 1, 'bla', 'bl a bla', 'bka', 1, 5.00, '2019-06-04 20:35:55', '2019-06-04 20:35:55', 1);

-- --------------------------------------------------------

--
-- Structure de la table `restaurants_class`
--

CREATE TABLE `restaurants_class` (
  `id` int(10) UNSIGNED NOT NULL,
  `calsse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `classe` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'wahid', 'admin', NULL, NULL),
(3, 'user', 'Normal User', '2019-05-29 14:25:55', '2019-05-29 14:25:55');

-- --------------------------------------------------------

--
-- Structure de la table `settings`
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
-- Déchargement des données de la table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', '', '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', '', '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Structure de la table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `restaurant_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sliders`
--

INSERT INTO `sliders` (`id`, `user_id`, `title`, `sub_title`, `image`, `created_at`, `updated_at`, `restaurant_id`) VALUES
(1, 1, 'Ambiance', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 'ambiance-2019-05-31-5cf1b4afd227b.jpg', '2019-05-31 21:11:43', '2019-05-31 21:30:48', NULL),
(2, 1, 'bla bla', 'bla', 'bla-bla-2019-06-10-5cfea9a3a0ff0.jpg', '2019-06-10 17:04:03', '2019-06-10 17:04:03', 1);

-- --------------------------------------------------------

--
-- Structure de la table `translations`
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

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `country`, `city`, `address`, `avatar`, `remember_token`, `settings`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 1, 'wahid', 'wahidmadano@gmail.com', NULL, '$2y$10$NBE05bp6c3tq9HHBxiWc7OuN8mtmlUz4ylVDym943ObXUBgbBZ1rC', '#', 'tlemcen', 'tlemcen', 'users\\June2019\\UaeO2QGD948Wyv7o2Mdu.jpg', 'lSBO8YjRr0efrE3j4ezLDfp7jD9np0KroFuQTNiFmTrIbaudDAsoISWyayQb', '{\"locale\":\"en\"}', '2019-05-29 14:08:59', '2019-06-11 07:54:37', 1),
(2, 3, 'moncef', 'moncef@email.com', NULL, '$2y$10$CSDGo.lyYXwnByOyeoZZSut3uGdKOjSmqiInrvZioZv4zsLt8RnZu', '#', 'tlmcen', 'tlm', 'default.jpg', 'qivszt6WCXsWsx1FDYCRML1eA5F2pmMSfYq8nuYNH13GhxotLgBYiPB1YgWx', NULL, '2019-06-01 15:14:31', '2019-06-01 15:14:31', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `wilayas`
--

CREATE TABLE `wilayas` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wilayas`
--

INSERT INTO `wilayas` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'adrar', NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `boutiques`
--
ALTER TABLE `boutiques`
  ADD PRIMARY KEY (`id`),
  ADD KEY `boutiques_wilaya_id_foreign` (`wilaya_id`),
  ADD KEY `boutiques_classe_foreign` (`classe`);

--
-- Index pour la table `boutiques_class`
--
ALTER TABLE `boutiques_class`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Index pour la table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `guid_foods`
--
ALTER TABLE `guid_foods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guidfoods_wilaya_id_foreign` (`wilaya_id`);

--
-- Index pour la table `guid_taxis`
--
ALTER TABLE `guid_taxis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guidtaxis_wilaya_id_foreign` (`wilaya_id`);

--
-- Index pour la table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotels_wilaya_id_foreign` (`wilaya_id`);

--
-- Index pour la table `hotels_rating`
--
ALTER TABLE `hotels_rating`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_category_id_foreign` (`category_id`);

--
-- Index pour la table `kryptonit3_counter_page`
--
ALTER TABLE `kryptonit3_counter_page`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kryptonit3_counter_page_page_unique` (`page`);

--
-- Index pour la table `kryptonit3_counter_page_visitor`
--
ALTER TABLE `kryptonit3_counter_page_visitor`
  ADD KEY `kryptonit3_counter_page_visitor_page_id_index` (`page_id`),
  ADD KEY `kryptonit3_counter_page_visitor_visitor_id_index` (`visitor_id`);

--
-- Index pour la table `kryptonit3_counter_visitor`
--
ALTER TABLE `kryptonit3_counter_visitor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kryptonit3_counter_visitor_visitor_unique` (`visitor`);

--
-- Index pour la table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `links_slug_unique` (`slug`);

--
-- Index pour la table `link_views`
--
ALTER TABLE `link_views`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Index pour la table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Index pour la table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Index pour la table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`),
  ADD KEY `places_wilaya_id_foreign` (`wilaya_id`);

--
-- Index pour la table `places_type`
--
ALTER TABLE `places_type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_rateable_type_rateable_id_index` (`rateable_type`,`rateable_id`),
  ADD KEY `ratings_rateable_id_index` (`rateable_id`),
  ADD KEY `ratings_rateable_type_index` (`rateable_type`),
  ADD KEY `ratings_user_id_index` (`user_id`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_reservations_id_foreign` (`restaurant_id`);

--
-- Index pour la table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restaurants_owner_id_foreign` (`owner_id`),
  ADD KEY `restaurants_wilaya_id_foreign` (`wilaya_id`);

--
-- Index pour la table `restaurants_class`
--
ALTER TABLE `restaurants_class`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restaurants_class_classe_foreign` (`classe`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Index pour la table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Index pour la table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sliders_restau_foreign` (`restaurant_id`);

--
-- Index pour la table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Index pour la table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- Index pour la table `wilayas`
--
ALTER TABLE `wilayas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `boutiques`
--
ALTER TABLE `boutiques`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `boutiques_class`
--
ALTER TABLE `boutiques_class`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT pour la table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `guid_foods`
--
ALTER TABLE `guid_foods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `guid_taxis`
--
ALTER TABLE `guid_taxis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `hotels_rating`
--
ALTER TABLE `hotels_rating`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `kryptonit3_counter_page`
--
ALTER TABLE `kryptonit3_counter_page`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `kryptonit3_counter_visitor`
--
ALTER TABLE `kryptonit3_counter_visitor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `link_views`
--
ALTER TABLE `link_views`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=285;

--
-- AUTO_INCREMENT pour la table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT pour la table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT pour la table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `places_type`
--
ALTER TABLE `places_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `restaurants_class`
--
ALTER TABLE `restaurants_class`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `wilayas`
--
ALTER TABLE `wilayas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `boutiques`
--
ALTER TABLE `boutiques`
  ADD CONSTRAINT `boutiques_classe_foreign` FOREIGN KEY (`classe`) REFERENCES `boutiques_class` (`id`),
  ADD CONSTRAINT `boutiques_wilaya_id_foreign` FOREIGN KEY (`wilaya_id`) REFERENCES `wilayas` (`id`);

--
-- Contraintes pour la table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `guid_foods`
--
ALTER TABLE `guid_foods`
  ADD CONSTRAINT `guidfoods_wilaya_id_foreign` FOREIGN KEY (`wilaya_id`) REFERENCES `wilayas` (`id`);

--
-- Contraintes pour la table `guid_taxis`
--
ALTER TABLE `guid_taxis`
  ADD CONSTRAINT `guidtaxis_wilaya_id_foreign` FOREIGN KEY (`wilaya_id`) REFERENCES `wilayas` (`id`);

--
-- Contraintes pour la table `hotels`
--
ALTER TABLE `hotels`
  ADD CONSTRAINT `hotels_wilaya_id_foreign` FOREIGN KEY (`wilaya_id`) REFERENCES `wilayas` (`id`);

--
-- Contraintes pour la table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `kryptonit3_counter_page_visitor`
--
ALTER TABLE `kryptonit3_counter_page_visitor`
  ADD CONSTRAINT `kryptonit3_counter_page_visitor_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `kryptonit3_counter_page` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kryptonit3_counter_page_visitor_visitor_id_foreign` FOREIGN KEY (`visitor_id`) REFERENCES `kryptonit3_counter_visitor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `places`
--
ALTER TABLE `places`
  ADD CONSTRAINT `places_wilaya_id_foreign` FOREIGN KEY (`wilaya_id`) REFERENCES `wilayas` (`id`);

--
-- Contraintes pour la table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `restaurants_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `restaurants_wilaya_id_foreign` FOREIGN KEY (`wilaya_id`) REFERENCES `wilayas` (`id`);

--
-- Contraintes pour la table `restaurants_class`
--
ALTER TABLE `restaurants_class`
  ADD CONSTRAINT `restaurants_class_classe_foreign` FOREIGN KEY (`classe`) REFERENCES `restaurants_class` (`id`);

--
-- Contraintes pour la table `sliders`
--
ALTER TABLE `sliders`
  ADD CONSTRAINT `sliders_restau_foreign` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
