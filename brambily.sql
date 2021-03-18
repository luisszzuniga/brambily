-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 18 mars 2021 à 22:34
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `brambily`
--

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `menu_category`
--

DROP TABLE IF EXISTS `menu_category`;
CREATE TABLE IF NOT EXISTS `menu_category` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `menu_category`
--

INSERT INTO `menu_category` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Desserts', 'Tous nos desserts\r\n', NULL, '2021-03-16 14:39:23'),
(11, 'Entrées', 'Description', '2021-03-16 14:39:34', '2021-03-16 14:39:34'),
(12, 'Plats', 'Description', '2021-03-16 14:39:43', '2021-03-16 14:39:43'),
(13, 'Bières', 'Description', '2021-03-16 14:40:14', '2021-03-16 14:40:14'),
(14, 'Boissons Chaudes', 'Description', '2021-03-16 14:40:23', '2021-03-16 14:40:23'),
(15, 'Boissons', 'Description', '2021-03-18 07:28:25', '2021-03-18 07:28:25');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_03_15_100555_create_sessions_table', 1),
(7, '2021_03_16_122911_create_menu_category_table', 2),
(8, '2021_03_16_123135_create_plate_table', 3),
(11, '2021_03_16_233221_create_order_table', 4);

-- --------------------------------------------------------

--
-- Structure de la table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `order` text COLLATE utf8_unicode_ci NOT NULL,
  `archive` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `order`
--

INSERT INTO `order` (`id`, `name`, `phone`, `order`, `archive`, `created_at`, `updated_at`) VALUES
(1, 'Luis Zuniga', 664206228, '1 double burger frites coca', 1, '2021-03-17 09:59:03', '2021-03-17 21:02:32'),
(2, 'Gregorie Vexier', 606060606, 'J\'aimerais bien manger un poulet rôti', 1, '2021-03-17 12:38:09', '2021-03-17 12:44:56'),
(14, 'Zuniga Luis', 606060606, 'ma commande', 1, '2021-03-17 21:01:34', '2021-03-18 09:52:12'),
(15, 'Luis Zuniga', 606060606, 'Votre commande ici...', 1, '2021-03-18 08:40:50', '2021-03-18 09:52:00'),
(17, 'test de commande', 606060606, '1 pizza', 0, '2021-03-18 10:05:15', '2021-03-18 10:05:15'),
(18, 'Zuniga Luis', 6, 'Votre commande ici...', 1, '2021-03-18 21:27:38', '2021-03-18 21:27:54');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `plate`
--

DROP TABLE IF EXISTS `plate`;
CREATE TABLE IF NOT EXISTS `plate` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `picture` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `plate`
--

INSERT INTO `plate` (`id`, `name`, `description`, `price`, `category_id`, `picture`, `created_at`, `updated_at`) VALUES
(5, 'Café', 'Café d\'Amérique du Sud', 1, 14, 'https://file1.topsante.com/var/topsante/storage/images/1/3/1/5/1315592/cafe.jpg?alias=exact1024x768_p', '2021-03-16 14:40:48', '2021-03-18 21:10:41'),
(7, 'Thé', 'Thé Irlandais de grande renommée', 4, 14, 'https://i-reg.unimedias.fr/sites/art-de-vivre/files/styles/large/public/r_tasse-the_istock.jpg?auto=compress%2Cformat&crop=faces%2Cedges&cs=srgb&fit=crop', '2021-03-16 14:41:27', '2021-03-18 21:10:53'),
(3, 'Salade', 'salada', 12, 2, NULL, NULL, NULL),
(6, 'Chocolat chaud', 'Chocolat chaud maison à base de cacao brésilien', 4, 14, 'https://www.lavieclaire.com/wp-content/uploads/2019/12/chocolat-chaud-viennois.jpg', '2021-03-16 14:41:06', '2021-03-18 21:11:10'),
(8, 'Les bières du monde', 'Bière surprise parmis 11 bières différentes', 4, 13, 'data:image/jpeg;base64,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', '2021-03-16 14:41:51', '2021-03-18 21:07:37'),
(10, 'Growler', '1 litre de bière artisanale, peut être emporté.', 10, 13, 'https://i2.wp.com/brewnation.fr/wp-content/uploads/2019/08/elevate-w9_XGvzxvxo-unsplash.jpg?fit=2048%2C1366&ssl=1', '2021-03-16 14:42:29', '2021-03-18 21:07:55'),
(11, 'Les softs', 'Une grande partie des sodas connus, en bouteille en verre', 2, 15, 'https://mradio.fr/media/news/thumb/870x489_5d25a2e271928-uyyui.jpg', '2021-03-16 14:42:43', '2021-03-18 21:11:26'),
(12, 'Limonade / Perrier', 'Description', 3, 15, 'https://sporsora.com/media/k2/items/cache/12a4d9cc9595382337674d1c9aeccbec_XL.jpg', '2021-03-16 14:42:59', '2021-03-18 21:11:38'),
(15, 'Fondant au chocolat', 'Faits maisons', 7, 1, 'https://fac.img.pmdstatic.net/fit/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2Ffac.2F2019.2F01.2F09.2F9c7f479d-eb4a-42e3-85d5-b253b67cfd2a.2Ejpeg/850x478/quality/90/crop-from/center/fondant-au-chocolat.jpeg', '2021-03-18 07:48:33', '2021-03-18 21:03:34'),
(16, 'Crumble aux pommes', 'Fait maison avec des pommes bio', 8, 1, 'https://assets.afcdn.com/recipe/20130823/26376_w1024h768c1cx1728cy2424.jpg', '2021-03-18 07:49:22', '2021-03-18 21:04:18'),
(17, 'Crêpe', 'Nutella, confiture, caramel.', 4, 1, 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/39ee5603-5ac4-4420-9563-11ae0ec17b41/Derivates/21ffd62c-8c68-43ac-9593-16c4c09e644d.jpg', '2021-03-18 07:49:55', '2021-03-18 21:04:38'),
(18, 'Café gourmand', 'Le dessert classique ', 6, 1, 'https://www.guydemarle.com/rails/active_storage/representations/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBcEYwIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--e44157e50908fdc2f1e98180d3f5e61fc0e9478b/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCam9VWTI5dFltbHVaVjl2Y0hScGIyNXpld1k2QzNKbGMybDZaVWtpRGpFMU1EQjRNVFV3TUFZNkJrVlUiLCJleHAiOm51bGwsInB1ciI6InZhcmlhdGlvbiJ9fQ==--3fc61d6304cc6214f7d9184e8eb99bd25324c309/cafe-gourmand.jpg', '2021-03-18 07:50:21', '2021-03-18 21:04:54'),
(19, 'Velouté de champignons', 'Accompagné d\'herbes et de crème fraîche', 5, 11, 'https://assets.afcdn.com/recipe/20160404/2282_w1024h768c1cx1500cy1000.jpg', '2021-03-18 07:51:24', '2021-03-18 21:05:14'),
(20, 'Toast d\'avocat', 'La recette healthy pour un dimanche', 10, 11, 'https://assets.afcdn.com/recipe/20160725/31500_w1024h1024c1cx2100cy1226.jpg', '2021-03-18 08:11:42', '2021-03-18 21:05:32'),
(21, 'Terrine de sanglier à l\'ancienne', 'Une recette traditionnelle pour les amateurs de gibier', 8, 11, 'http://www.faire-charcuterie.fr/wp-content/uploads/2011/04/Fotolia_42996842_S.jpg', '2021-03-18 08:12:31', '2021-03-18 21:06:07'),
(22, 'Tomates farcies', 'Tomates fraîches et viande du boucher', 15, 12, 'https://www.lesjoyauxdesherazade.com/wp-content/uploads/2013/04/recette-de-tomate-farcie_thumb2-550x368.jpg', '2021-03-18 08:13:23', '2021-03-18 21:06:25'),
(23, 'Blanc de seiche sur riz rouge de Camargue', 'Poisson frais', 16, 12, 'https://i.f1g.fr/media/madame/1900x1900/sites/default/files/img/2017/11/blanc-de-seiche-sur-riz-rouge-de-camargue.jpg', '2021-03-18 08:14:19', '2021-03-18 21:06:37'),
(24, 'Pizza', 'Margarita, napolitaine, boeuf..', 15, 12, 'https://www.demotivateur.fr/images-buzz/cover/7970863015ec40eae5c9e9_pizza-napolitaine-800x420.jpg', '2021-03-18 08:14:49', '2021-03-18 21:06:48'),
(25, 'Rochefort 10', 'Abbaye de Rochefort', 3, 13, 'https://www.lesbieresbelges.be/modules/catalog/products/photo.ashx?SKU=ROCH1033&width=200&height=300', '2021-03-18 08:57:09', '2021-03-18 21:08:22'),
(26, 'Chouffe', 'Brasserie d\'Achouffe', 4, 13, 'https://cdn.webshopapp.com/shops/65337/files/181108199/box-de-biere-selection-chouffe.jpg', '2021-03-18 08:57:33', '2021-03-18 21:08:36'),
(27, 'Barbar au miel', 'Brasserie Lefevre', 4, 13, 'https://lh3.googleusercontent.com/proxy/kJGkwAkkoYXb0TbUzF5CRhp4nmF-aN3-esdIto1jOu2ambYceLdhboq_Xq5RL8HuYH03P_O3fnGk4nHqN2o8n7br2NBXMfLL5BsO0ihphTh0DoqBNAq5wQMhLGfjYWaCTdFaQg', '2021-03-18 08:58:17', '2021-03-18 21:09:01'),
(28, 'Westmalle triple', 'Abbaye de Westmalle', 4, 13, 'https://lh3.googleusercontent.com/proxy/af8CjLcAIBhTJIpS6wTpQvicAyvXMtKtOmZr371qBDwvNEAZMYYa9Qrz3_Bop1WhfMy2zESiM7GEQY-4AJlnLCGQ0qKeSmWTZJiBmbcuKQx-OCERE3N-erc7_ZtKr1Lkh6TKVAgeM3-2JFhv_ukwPpdinOciaBqhVQN4b3lPRStycO2FBjrUYVjWdt3EHs5-wnUuz6KldiQCPP-flhw', '2021-03-18 08:59:12', '2021-03-18 21:09:22'),
(29, 'Leffe Ruby', 'Abbaye de Leffe', 3, 13, 'https://www.pompe-a-biere.com/media/catalog/product/cache/23/image/9df78eab33525d08d6e5fb8d27136e95/i/m/image_218.jpg', '2021-03-18 08:59:32', '2021-03-18 21:09:40'),
(30, 'La Virgen IPA', 'La Virgen', 4, 13, 'https://comprarwhisky.com/wp-content/uploads/2018/10/La-Virgen-Cerveza-Artesana-IPA-24-Botellas-de-330-ml-Total-7920-ml-0-4.jpg', '2021-03-18 08:59:58', '2021-03-18 21:10:30'),
(31, 'Lasagnes', 'Lasagnes faites maison. Produits frais.', 14, 12, 'https://www.galbani.fr/wp-content/uploads/2017/07/shutterstock_142426168-800x600.jpg', '2021-03-18 18:57:07', '2021-03-18 21:07:00'),
(32, 'Burger', 'Burger fait maison. Produits frais', 12, 12, 'https://www.mycuisine.com/wp-content/uploads/2018/12/burger-rossini.jpg', '2021-03-18 18:58:31', '2021-03-18 21:07:13');

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8_unicode_ci,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('LdsR1fPAInWr3FSwqmqwAd1uFSY5t7YrIy6cy5aa', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiUlpEd2dxMGt1NXk0VVlPQWc4dFFaQWoxVU5MUkRCNHQ1dkdRZGN4SiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkbnVzeDMyS0FLYmdlYlh2RmhHMDF3LjBnUjdUQzluYktLZWxaTWluelZUT1FPeHlPYk05Vy4iO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJG51c3gzMktBS2JnZWJYdkZoRzAxdy4wZ1I3VEM5bmJLS2VsWk1pbnpWVE9RT3h5T2JNOVcuIjt9', 1616106840);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$nusx32KAKbgebXvFhG01w.0gR7TC9nbKKelZMinzVTOQOxyObM9W.', NULL, NULL, 'o5xT2gkf8GcCWmlBKyCX0dmrvzGVoUolTX71MzxW1gSEV6k6moyfGE0MaUhV', NULL, NULL, '2021-03-15 09:11:04', '2021-03-15 09:11:04');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
