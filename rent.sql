-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 18 2023 г., 08:36
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `rent`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ban_types`
--

CREATE TABLE `ban_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `ban_types`
--

INSERT INTO `ban_types` (`id`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(2, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(3, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(4, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(5, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(6, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(7, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(8, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(9, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(10, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(11, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(12, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(13, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(14, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(15, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(16, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(17, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(18, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(19, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(20, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(21, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44');

-- --------------------------------------------------------

--
-- Структура таблицы `ban_types_translations`
--

CREATE TABLE `ban_types_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ban_types_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `ban_types_translations`
--

INSERT INTO `ban_types_translations` (`id`, `ban_types_id`, `locale`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'az', 'Avtobus', 'avtobus', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(2, 2, 'az', 'Dartqı', 'dartqi', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(3, 3, 'az', 'Furqon', 'furqon', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(4, 4, 'az', 'Hetçbek', 'hetcbek', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(5, 5, 'az', 'Kabriolet', 'kabriolet', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(6, 6, 'az', 'Karvan', 'karvan', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(7, 7, 'az', 'Kupe', 'kupe', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(8, 8, 'az', 'Kvadrosikl', 'kvadrosikl', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(9, 9, 'az', 'Liftbek', 'liftbek', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(10, 10, 'az', 'Mikroavtobus', 'mikroavtobus', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(11, 11, 'az', 'Minivan', 'minivan', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(12, 12, 'az', 'Moped', 'moped', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(13, 13, 'az', 'Motosiklet', 'motosiklet', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(14, 14, 'az', 'Offroader / SUV', 'offroader-suv', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(15, 15, 'az', 'Pikap', 'pikap', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(16, 16, 'az', 'Qolfkar', 'qolfkar', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(17, 17, 'az', 'Rodster', 'rodster', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(18, 18, 'az', 'Sedan', 'sedan', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(19, 19, 'az', 'Universal', 'universal', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(20, 20, 'az', 'Van', 'van', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(21, 21, 'az', 'Yük maşını', 'yuk-masini', '2023-10-18 02:35:44', '2023-10-18 02:35:44');

-- --------------------------------------------------------

--
-- Структура таблицы `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `viewed` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `blogs_translations`
--

CREATE TABLE `blogs_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blogs_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `brands`
--

INSERT INTO `brands` (`id`, `icon`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'images/brands/bmw_1120-icon.jpg', 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43');

-- --------------------------------------------------------

--
-- Структура таблицы `brands_translations`
--

CREATE TABLE `brands_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brands_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `brands_translations`
--

INSERT INTO `brands_translations` (`id`, `brands_id`, `locale`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'az', 'BMW', 'bmw', '2023-10-18 02:35:43', '2023-10-18 02:35:43');

-- --------------------------------------------------------

--
-- Структура таблицы `brons`
--

CREATE TABLE `brons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bron_number` varchar(255) NOT NULL,
  `brands_id` bigint(20) UNSIGNED NOT NULL,
  `models_id` bigint(20) UNSIGNED NOT NULL,
  `cars_id` bigint(20) UNSIGNED NOT NULL,
  `pick_up` date NOT NULL,
  `drop_off` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `special_request` text DEFAULT NULL,
  `price` double NOT NULL,
  `discount` double NOT NULL,
  `discount_type` int(11) DEFAULT NULL,
  `discounted_price` double NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `call_requests`
--

CREATE TABLE `call_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_surname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brands_id` bigint(20) UNSIGNED NOT NULL,
  `models_id` bigint(20) UNSIGNED NOT NULL,
  `ban_types_id` bigint(20) UNSIGNED NOT NULL,
  `fuels_id` bigint(20) UNSIGNED NOT NULL,
  `gears_id` bigint(20) UNSIGNED NOT NULL,
  `transmissions_id` bigint(20) UNSIGNED NOT NULL,
  `engines_id` bigint(20) UNSIGNED NOT NULL,
  `colors_id` bigint(20) UNSIGNED NOT NULL,
  `licence_plate` varchar(255) NOT NULL,
  `manufacturing_year` varchar(255) NOT NULL,
  `day_price` double NOT NULL,
  `week_price` double DEFAULT NULL,
  `month_price` double DEFAULT NULL,
  `main_image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `cars_cars_faqs`
--

CREATE TABLE `cars_cars_faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cars_id` bigint(20) UNSIGNED NOT NULL,
  `cars_faqs_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `cars_faqs`
--

CREATE TABLE `cars_faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cars_faqs`
--

INSERT INTO `cars_faqs` (`id`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(2, 1, NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(3, 1, NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(4, 1, NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(5, 1, NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(6, 1, NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(7, 1, NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(8, 1, NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(9, 1, NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(10, 1, NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46');

-- --------------------------------------------------------

--
-- Структура таблицы `cars_faqs_translations`
--

CREATE TABLE `cars_faqs_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cars_faqs_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cars_faqs_translations`
--

INSERT INTO `cars_faqs_translations` (`id`, `cars_faqs_id`, `locale`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 1, 'az', 'Ut omnis debitis vel ipsam quas esse saepe.', 'Dolores ea rem harum consequatur et totam non ipsum. Architecto ipsum consequuntur nam molestias quas saepe nihil iure. Reiciendis quas cum nemo voluptas voluptatem.', '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(2, 2, 'az', 'Laudantium veniam sint non est sed saepe ut.', 'Id ratione recusandae sequi a. Consectetur ut molestiae quaerat in sunt non. Et dolores harum voluptas expedita illo tempora.', '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(3, 3, 'az', 'Quo vel error recusandae eos.', 'Delectus ullam tempore optio commodi qui iusto. Molestiae non itaque mollitia reiciendis nulla aut. Ipsa in commodi ut ullam.', '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(4, 4, 'az', 'Temporibus corrupti excepturi quia aut dolor iste maiores dignissimos.', 'Sapiente debitis iste similique repudiandae harum sint. Ratione porro officiis alias sed. Voluptatibus ipsam corporis quas dolore earum exercitationem sed.', '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(5, 5, 'az', 'Perferendis mollitia aut cumque.', 'Impedit voluptatem dolor sunt aut. Maiores voluptatem distinctio doloremque vel perspiciatis. Nisi quasi voluptatum blanditiis dolor error modi ex. Sit dolores explicabo earum praesentium.', '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(6, 6, 'az', 'Laudantium nihil temporibus velit aspernatur laudantium est.', 'Velit nihil id quidem aut alias provident. Sapiente officiis dolor explicabo qui sed facilis hic. Quis omnis nemo odit fuga provident tempore tempora. Expedita sequi cupiditate autem odit totam harum voluptas dolorum.', '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(7, 7, 'az', 'Expedita et quod a illum et.', 'Veniam eligendi at quaerat dolor aliquid. Quidem laborum facere optio voluptas ducimus.', '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(8, 8, 'az', 'Qui magnam nesciunt assumenda et iste repellat est.', 'Sequi dolores veritatis explicabo quibusdam. Adipisci voluptatibus necessitatibus aperiam. Ipsa corrupti non quae aliquam non voluptatem. Qui deserunt dolore assumenda recusandae.', '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(9, 9, 'az', 'Illo id fugiat commodi qui vel eligendi.', 'Ut voluptatem nihil exercitationem maiores. Possimus aut veniam saepe quia perferendis porro. Dolore officiis quam harum. Magni voluptatem commodi sapiente odit at repellendus quibusdam suscipit.', '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(10, 10, 'az', 'Est consequatur quas velit rem et.', 'Fuga unde vel quidem qui ea et accusantium nostrum. Dignissimos quasi minima eum sed dolores accusamus omnis aliquam. Sed non sint magnam culpa.', '2023-10-18 02:35:46', '2023-10-18 02:35:46');

-- --------------------------------------------------------

--
-- Структура таблицы `cars_galleries`
--

CREATE TABLE `cars_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cars_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `position` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `cars_properties`
--

CREATE TABLE `cars_properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cars_id` bigint(20) UNSIGNED NOT NULL,
  `properties_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `cars_translations`
--

CREATE TABLE `cars_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cars_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `car_comments`
--

CREATE TABLE `car_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cars_id` bigint(20) UNSIGNED NOT NULL,
  `who_shared` int(11) NOT NULL,
  `name_surname` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `status` int(11) NOT NULL,
  `comment_date` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `colors`
--

INSERT INTO `colors` (`id`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(2, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(3, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(4, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(5, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(6, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(7, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(8, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(9, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(10, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(11, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(12, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(13, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(14, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(15, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(16, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(17, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(18, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(19, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(20, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(21, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(22, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(23, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(24, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(25, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(26, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(27, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(28, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(29, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(30, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45');

-- --------------------------------------------------------

--
-- Структура таблицы `colors_translations`
--

CREATE TABLE `colors_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `colors_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `colors_translations`
--

INSERT INTO `colors_translations` (`id`, `colors_id`, `locale`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'az', 'Açıq bənövşəyi', 'aciq-benovseyi', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(2, 2, 'az', 'Açıq yaşıl', 'aciq-yasil', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(3, 3, 'az', 'Ağ', 'ag', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(4, 4, 'az', 'Al-qırmızı', 'al-qirmizi', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(5, 5, 'az', 'Ala', 'ala', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(6, 6, 'az', 'Badımcan', 'badimcan', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(7, 7, 'az', 'Bənövşəyi', 'benovseyi', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(8, 8, 'az', 'Boz', 'boz', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(9, 9, 'az', 'Çəhrayı', 'cehrayi', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(10, 10, 'az', 'Dəniz mavisi', 'deniz-mavisi', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(11, 11, 'az', 'Firuzə', 'firuze', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(12, 12, 'az', 'Göy', 'goy', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(13, 13, 'az', 'Gümüş', 'gumus', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(14, 14, 'az', 'İndiqo', 'indiqo', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(15, 15, 'az', 'Kardinal', 'kardinal', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(16, 16, 'az', 'Krem', 'krem', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(17, 17, 'az', 'Madjenta', 'madjenta', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(18, 18, 'az', 'Mavi', 'mavi', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(19, 19, 'az', 'Narıncı', 'narinci', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(20, 20, 'az', 'Qara', 'qara', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(21, 21, 'az', 'Qəhvəyi', 'qehveyi', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(22, 22, 'az', 'Qırmızı', 'qirmizi', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(23, 23, 'az', 'Qızılgül', 'qizilgul', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(24, 24, 'az', 'Sarı', 'sari', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(25, 25, 'az', 'Şokolad', 'sokolad', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(26, 26, 'az', 'Tünd göy', 'tund-goy', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(27, 27, 'az', 'Tünd qırmızı', 'tund-qirmizi', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(28, 28, 'az', 'Yasəmən', 'yasemen', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(29, 29, 'az', 'Yaşıl', 'yasil', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(30, 30, 'az', 'Zeytun', 'zeytun', '2023-10-18 02:35:45', '2023-10-18 02:35:45');

-- --------------------------------------------------------

--
-- Структура таблицы `discounts`
--

CREATE TABLE `discounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brands_id` bigint(20) UNSIGNED NOT NULL,
  `models_id` bigint(20) UNSIGNED NOT NULL,
  `cars_id` bigint(20) UNSIGNED NOT NULL,
  `type` int(11) NOT NULL,
  `discount` double(10,2) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `engines`
--

CREATE TABLE `engines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `engines`
--

INSERT INTO `engines` (`id`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(2, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(3, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(4, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(5, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(6, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(7, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(8, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(9, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(10, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(11, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(12, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(13, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(14, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(15, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(16, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(17, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(18, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(19, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(20, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(21, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(22, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(23, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(24, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(25, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(26, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(27, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(28, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(29, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44');

-- --------------------------------------------------------

--
-- Структура таблицы `engines_translations`
--

CREATE TABLE `engines_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `engines_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `engines_translations`
--

INSERT INTO `engines_translations` (`id`, `engines_id`, `locale`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'az', '0.2 L', '02-l', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(2, 2, 'az', '0.4 L', '04-l', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(3, 3, 'az', '0.6 L', '06-l', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(4, 4, 'az', '0.8 L', '08-l', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(5, 5, 'az', '1.0 L', '10-l', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(6, 6, 'az', '1.2 L', '12-l', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(7, 7, 'az', '1.4 L', '14-l', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(8, 8, 'az', '1.6 L', '16-l', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(9, 9, 'az', '1.8 L', '18-l', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(10, 10, 'az', '2.0 L', '20-l', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(11, 11, 'az', '2.2 L', '22-l', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(12, 12, 'az', '2.4 L', '24-l', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(13, 13, 'az', '2.6 L', '26-l', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(14, 14, 'az', '2.8 L', '28-l', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(15, 15, 'az', '3.0 L', '30-l', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(16, 16, 'az', '3.5 L', '35-l', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(17, 17, 'az', '4.0 L', '40-l', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(18, 18, 'az', '4.5 L', '45-l', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(19, 19, 'az', '5.0 L', '50-l', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(20, 20, 'az', '5.5 L', '55-l', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(21, 21, 'az', '6.0 L', '60-l', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(22, 22, 'az', '6.5 L', '65-l', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(23, 23, 'az', '7.0 L', '70-l', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(24, 24, 'az', '7.5 L', '75-l', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(25, 25, 'az', '8.0 L', '80-l', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(26, 26, 'az', '8.5 L', '85-l', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(27, 27, 'az', '9.0 L', '90-l', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(28, 28, 'az', '9.5 L', '95-l', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(29, 29, 'az', '10.0 L', '100-l', '2023-10-18 02:35:44', '2023-10-18 02:35:44');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `fuels`
--

CREATE TABLE `fuels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `fuels`
--

INSERT INTO `fuels` (`id`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(2, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(3, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(4, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(5, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(6, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44');

-- --------------------------------------------------------

--
-- Структура таблицы `fuels_translations`
--

CREATE TABLE `fuels_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fuels_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `fuels_translations`
--

INSERT INTO `fuels_translations` (`id`, `fuels_id`, `locale`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'az', 'Benzin', 'benzin', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(2, 2, 'az', 'Dizel', 'dizel', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(3, 3, 'az', 'Qaz', 'qaz', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(4, 4, 'az', 'Elektro', 'elektro', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(5, 5, 'az', 'Hibrid', 'hibrid', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(6, 6, 'az', 'Plug-in Hibrid', 'plug-in-hibrid', '2023-10-18 02:35:44', '2023-10-18 02:35:44');

-- --------------------------------------------------------

--
-- Структура таблицы `gears`
--

CREATE TABLE `gears` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `gears`
--

INSERT INTO `gears` (`id`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(2, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(3, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45');

-- --------------------------------------------------------

--
-- Структура таблицы `gears_translations`
--

CREATE TABLE `gears_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gears_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `gears_translations`
--

INSERT INTO `gears_translations` (`id`, `gears_id`, `locale`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'az', 'Arxa', 'arxa', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(2, 2, 'az', 'Ön', 'on', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(3, 3, 'az', 'Tam', 'tam', '2023-10-18 02:35:45', '2023-10-18 02:35:45');

-- --------------------------------------------------------

--
-- Структура таблицы `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `numbers` text DEFAULT NULL,
  `emails` text DEFAULT NULL,
  `social_networks` text DEFAULT NULL,
  `repair_mode` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `general_settings`
--

INSERT INTO `general_settings` (`id`, `logo`, `numbers`, `emails`, `social_networks`, `repair_mode`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'logo.png', '[\"0508221300\"]', '[\"chaparoglucavid@gmail.com\"]', '[\"facebook.com\\/rentalservices\",\"instagram.com\\/rentalservices\"]', 0, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45');

-- --------------------------------------------------------

--
-- Структура таблицы `general_settings_translations`
--

CREATE TABLE `general_settings_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `general_settings_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `about_text` text DEFAULT NULL,
  `privacy_policy` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `general_settings_translations`
--

INSERT INTO `general_settings_translations` (`id`, `general_settings_id`, `locale`, `address`, `meta_title`, `meta_keywords`, `about_text`, `privacy_policy`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'az', 'Bakı, Xətai rayonu Gəncə prospekti 56a', NULL, '[\"rent a car\",\"baku rental cars\"]', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', NULL, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45');

-- --------------------------------------------------------

--
-- Структура таблицы `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `shortened` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `languages`
--

INSERT INTO `languages` (`id`, `name`, `shortened`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Azərbaycan dili', 'az', 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender` varchar(255) NOT NULL,
  `repicient` varchar(255) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `read` int(11) NOT NULL DEFAULT 0,
  `starred` int(11) NOT NULL DEFAULT 0,
  `draft` int(11) NOT NULL DEFAULT 0,
  `sent` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_03_144608_create_brands_table', 1),
(6, '2023_09_04_090724_create_models_table', 1),
(7, '2023_09_05_224208_create_ban_types_table', 1),
(8, '2023_09_06_102320_create_fuels_table', 1),
(9, '2023_09_08_115004_create_gears_table', 1),
(10, '2023_09_08_122304_create_transmissions_table', 1),
(11, '2023_09_08_125142_create_engines_table', 1),
(12, '2023_09_09_052400_create_brands_translations_table', 1),
(13, '2023_09_09_061242_create_languages_table', 1),
(14, '2023_09_09_090742_create_translations_table', 1),
(15, '2023_09_09_143938_create_models_translations_table', 1),
(16, '2023_09_09_150049_create_ban_types_translations_table', 1),
(17, '2023_09_09_150657_create_fuels_translations_table', 1),
(18, '2023_09_09_151157_create_gears_translations_table', 1),
(19, '2023_09_09_151409_create_transmissions_translations_table', 1),
(20, '2023_09_09_151647_create_engines_translations_table', 1),
(21, '2023_09_09_151924_create_properties_table', 1),
(22, '2023_09_09_151937_create_properties_translations_table', 1),
(23, '2023_09_10_062131_create_colors_table', 1),
(24, '2023_09_10_062132_create_colors_translations_table', 1),
(25, '2023_09_10_062133_create_cars_table', 1),
(26, '2023_09_10_062201_create_cars_translations_table', 1),
(27, '2023_09_10_082744_create_cars_properties_table', 1),
(28, '2023_09_12_053053_create_discounts_table', 1),
(29, '2023_09_14_164558_create_blogs_table', 1),
(30, '2023_09_14_164702_create_blogs_translations_table', 1),
(31, '2023_09_15_185951_create_brons_table', 1),
(32, '2023_09_17_192513_create_general_settings_table', 1),
(33, '2023_09_19_181655_create_general_settings_translations_table', 1),
(34, '2023_09_19_191738_create_site_faqs_table', 1),
(35, '2023_09_19_191754_create_site_faqs_translations_table', 1),
(36, '2023_09_20_192911_create_cars_faqs_table', 1),
(37, '2023_09_20_194424_create_cars_faqs_translations_table', 1),
(38, '2023_09_21_115615_create_cars_cars_faqs_table', 1),
(39, '2023_09_21_185828_create_site_comments_table', 1),
(40, '2023_09_22_145905_create_car_comments_table', 1),
(41, '2023_09_22_183845_create_messages_table', 1),
(42, '2023_09_24_070614_create_permission_tables', 1),
(43, '2023_09_28_034051_create_cars_galleries_table', 1),
(44, '2023_10_05_035004_create_slides_table', 1),
(45, '2023_10_05_035341_create_slides_translations_table', 1),
(46, '2023_10_06_130632_create_page_designs_table', 1),
(47, '2023_10_07_150524_create_services_table', 1),
(48, '2023_10_07_150545_create_services_translations_table', 1),
(49, '2023_10_17_061209_create_call_requests_table', 1),
(50, '2023_10_17_100544_create_partners_table', 1),
(51, '2023_10_17_133923_create_teams_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `models`
--

CREATE TABLE `models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brands_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `models`
--

INSERT INTO `models` (`id`, `brands_id`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(2, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(3, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(4, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(5, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(6, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(7, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(8, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(9, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(10, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(11, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(12, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(13, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(14, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(15, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(16, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(17, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(18, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(19, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(20, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(21, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(22, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(23, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(24, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(25, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(26, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(27, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(28, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(29, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(30, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(31, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(32, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(33, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(34, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(35, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(36, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(37, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(38, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(39, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(40, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(41, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(42, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(43, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(44, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(45, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(46, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(47, 1, 1, NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(48, 1, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(49, 1, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(50, 1, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(51, 1, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(52, 1, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(53, 1, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(54, 1, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(55, 1, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(56, 1, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(57, 1, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(58, 1, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(59, 1, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(60, 1, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44');

-- --------------------------------------------------------

--
-- Структура таблицы `models_translations`
--

CREATE TABLE `models_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `models_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `models_translations`
--

INSERT INTO `models_translations` (`id`, `models_id`, `locale`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'az', '1 series', '1-series', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(2, 2, 'az', '2 series', '2-series', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(3, 3, 'az', '3 series', '3-series', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(4, 4, 'az', '4 series', '4-series', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(5, 5, 'az', '5 series', '5-series', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(6, 6, 'az', '6 series', '6-series', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(7, 7, 'az', '7 series', '7-series', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(8, 8, 'az', 'M3', 'm3', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(9, 9, 'az', 'M4', 'm4', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(10, 10, 'az', 'M5', 'm5', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(11, 11, 'az', 'X1', 'x1', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(12, 12, 'az', 'X3', 'x3', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(13, 13, 'az', 'X5', 'x5', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(14, 14, 'az', 'X5 M', 'x5-m', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(15, 15, 'az', 'X6', 'x6', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(16, 16, 'az', 'X6 M', 'x6-m', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(17, 17, 'az', 'X7', 'x7', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(18, 18, 'az', 'Z3', 'z3', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(19, 19, 'az', 'Z4', 'z4', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(20, 20, 'az', '02 (E10)', '02-e10', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(21, 21, 'az', '1M', '1m', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(22, 22, 'az', '2000 C/CS', '2000-ccs', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(23, 23, 'az', '315', '315', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(24, 24, 'az', '3/15', '3-15', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(25, 25, 'az', '3200', '3200', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(26, 26, 'az', '321', '321', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(27, 27, 'az', '326', '326', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(28, 28, 'az', '327', '327', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(29, 29, 'az', '340', '340', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(30, 30, 'az', '501', '501', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(31, 31, 'az', '502', '502', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(32, 32, 'az', '503', '503', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(33, 33, 'az', '507', '507', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(34, 34, 'az', '600', '600', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(35, 35, 'az', '700', '700', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(36, 36, 'az', '8 series', '8-series', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(37, 37, 'az', 'E3', 'e3', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(38, 38, 'az', 'E9', 'e9', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(39, 39, 'az', 'i3', 'i3', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(40, 40, 'az', 'i4', 'i4', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(41, 41, 'az', 'I5', 'i5', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(42, 42, 'az', 'i7', 'i7', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(43, 43, 'az', 'i8', 'i8', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(44, 44, 'az', 'iX', 'ix', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(45, 45, 'az', 'M1', 'm1', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(46, 46, 'az', 'M2', 'm2', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(47, 47, 'az', 'M6', 'm6', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(48, 48, 'az', 'M8', 'm8', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(49, 49, 'az', 'Nazca', 'nazca', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(50, 50, 'az', 'New Class', 'new-class', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(51, 51, 'az', 'X2', 'x2', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(52, 52, 'az', 'X2 M', 'x2-m', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(53, 53, 'az', 'X3 M', 'x3-m', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(54, 54, 'az', 'X4', 'x4', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(55, 55, 'az', 'X4 M', 'x4-m', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(56, 56, 'az', 'XM', 'xm', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(57, 57, 'az', 'Z1', 'z1', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(58, 58, 'az', 'Z3 M', 'z3-m', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(59, 59, 'az', 'Z4 M', 'z4-m', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(60, 60, 'az', 'Z8', 'z8', '2023-10-18 02:35:44', '2023-10-18 02:35:44');

-- --------------------------------------------------------

--
-- Структура таблицы `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `page_designs`
--

CREATE TABLE `page_designs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topbar` int(11) NOT NULL DEFAULT 0,
  `header` int(11) NOT NULL DEFAULT 0,
  `menu` int(11) NOT NULL DEFAULT 0,
  `slide` int(11) NOT NULL DEFAULT 0,
  `search` int(11) NOT NULL DEFAULT 0,
  `about_us_section` int(11) NOT NULL DEFAULT 0,
  `banner1` int(11) NOT NULL DEFAULT 0,
  `banner2` int(11) NOT NULL DEFAULT 0,
  `blogs` int(11) NOT NULL DEFAULT 0,
  `comments_for_site` int(11) NOT NULL DEFAULT 0,
  `members` int(11) NOT NULL DEFAULT 0,
  `offers` int(11) NOT NULL DEFAULT 0,
  `services` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `page_designs`
--

INSERT INTO `page_designs` (`id`, `topbar`, `header`, `menu`, `slide`, `search`, `about_us_section`, `banner1`, `banner2`, `blogs`, `comments_for_site`, `members`, `offers`, `services`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2023-10-18 02:35:46', '2023-10-18 02:35:46');

-- --------------------------------------------------------

--
-- Структура таблицы `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `voen` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `relevant_person` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'brands', 'web', '2023-10-18 02:35:38', '2023-10-18 02:35:38'),
(2, 'create brands', 'web', '2023-10-18 02:35:38', '2023-10-18 02:35:38'),
(3, 'edit brands', 'web', '2023-10-18 02:35:38', '2023-10-18 02:35:38'),
(4, 'show brands', 'web', '2023-10-18 02:35:38', '2023-10-18 02:35:38'),
(5, 'delete brands', 'web', '2023-10-18 02:35:38', '2023-10-18 02:35:38'),
(6, 'models', 'web', '2023-10-18 02:35:38', '2023-10-18 02:35:38'),
(7, 'create models', 'web', '2023-10-18 02:35:38', '2023-10-18 02:35:38'),
(8, 'edit models', 'web', '2023-10-18 02:35:38', '2023-10-18 02:35:38'),
(9, 'show models', 'web', '2023-10-18 02:35:38', '2023-10-18 02:35:38'),
(10, 'delete models', 'web', '2023-10-18 02:35:38', '2023-10-18 02:35:38'),
(11, 'ban types', 'web', '2023-10-18 02:35:38', '2023-10-18 02:35:38'),
(12, 'create ban types', 'web', '2023-10-18 02:35:38', '2023-10-18 02:35:38'),
(13, 'edit ban types', 'web', '2023-10-18 02:35:38', '2023-10-18 02:35:38'),
(14, 'show ban types', 'web', '2023-10-18 02:35:39', '2023-10-18 02:35:39'),
(15, 'delete ban types', 'web', '2023-10-18 02:35:39', '2023-10-18 02:35:39'),
(16, 'fuels', 'web', '2023-10-18 02:35:39', '2023-10-18 02:35:39'),
(17, 'create fuels', 'web', '2023-10-18 02:35:39', '2023-10-18 02:35:39'),
(18, 'edit fuels', 'web', '2023-10-18 02:35:39', '2023-10-18 02:35:39'),
(19, 'show fuels', 'web', '2023-10-18 02:35:39', '2023-10-18 02:35:39'),
(20, 'delete fuels', 'web', '2023-10-18 02:35:39', '2023-10-18 02:35:39'),
(21, 'gears', 'web', '2023-10-18 02:35:39', '2023-10-18 02:35:39'),
(22, 'create gears', 'web', '2023-10-18 02:35:39', '2023-10-18 02:35:39'),
(23, 'edit gears', 'web', '2023-10-18 02:35:39', '2023-10-18 02:35:39'),
(24, 'show gears', 'web', '2023-10-18 02:35:39', '2023-10-18 02:35:39'),
(25, 'delete gears', 'web', '2023-10-18 02:35:39', '2023-10-18 02:35:39'),
(26, 'transmissions', 'web', '2023-10-18 02:35:39', '2023-10-18 02:35:39'),
(27, 'create transmissions', 'web', '2023-10-18 02:35:39', '2023-10-18 02:35:39'),
(28, 'edit transmissions', 'web', '2023-10-18 02:35:39', '2023-10-18 02:35:39'),
(29, 'show transmissions', 'web', '2023-10-18 02:35:39', '2023-10-18 02:35:39'),
(30, 'delete transmissions', 'web', '2023-10-18 02:35:39', '2023-10-18 02:35:39'),
(31, 'engines', 'web', '2023-10-18 02:35:39', '2023-10-18 02:35:39'),
(32, 'create engines', 'web', '2023-10-18 02:35:39', '2023-10-18 02:35:39'),
(33, 'edit engines', 'web', '2023-10-18 02:35:39', '2023-10-18 02:35:39'),
(34, 'show engines', 'web', '2023-10-18 02:35:39', '2023-10-18 02:35:39'),
(35, 'delete engines', 'web', '2023-10-18 02:35:39', '2023-10-18 02:35:39'),
(36, 'colors', 'web', '2023-10-18 02:35:39', '2023-10-18 02:35:39'),
(37, 'create colors', 'web', '2023-10-18 02:35:39', '2023-10-18 02:35:39'),
(38, 'edit colors', 'web', '2023-10-18 02:35:39', '2023-10-18 02:35:39'),
(39, 'show colors', 'web', '2023-10-18 02:35:40', '2023-10-18 02:35:40'),
(40, 'delete colors', 'web', '2023-10-18 02:35:40', '2023-10-18 02:35:40'),
(41, 'properties', 'web', '2023-10-18 02:35:40', '2023-10-18 02:35:40'),
(42, 'create properties', 'web', '2023-10-18 02:35:40', '2023-10-18 02:35:40'),
(43, 'edit properties', 'web', '2023-10-18 02:35:40', '2023-10-18 02:35:40'),
(44, 'show properties', 'web', '2023-10-18 02:35:40', '2023-10-18 02:35:40'),
(45, 'delete properties', 'web', '2023-10-18 02:35:40', '2023-10-18 02:35:40'),
(46, 'discounts', 'web', '2023-10-18 02:35:40', '2023-10-18 02:35:40'),
(47, 'create discounts', 'web', '2023-10-18 02:35:40', '2023-10-18 02:35:40'),
(48, 'edit discounts', 'web', '2023-10-18 02:35:40', '2023-10-18 02:35:40'),
(49, 'show discounts', 'web', '2023-10-18 02:35:40', '2023-10-18 02:35:40'),
(50, 'delete discounts', 'web', '2023-10-18 02:35:40', '2023-10-18 02:35:40'),
(51, 'cars', 'web', '2023-10-18 02:35:40', '2023-10-18 02:35:40'),
(52, 'create cars', 'web', '2023-10-18 02:35:40', '2023-10-18 02:35:40'),
(53, 'edit cars', 'web', '2023-10-18 02:35:40', '2023-10-18 02:35:40'),
(54, 'show cars', 'web', '2023-10-18 02:35:40', '2023-10-18 02:35:40'),
(55, 'delete cars', 'web', '2023-10-18 02:35:40', '2023-10-18 02:35:40'),
(56, 'brons', 'web', '2023-10-18 02:35:40', '2023-10-18 02:35:40'),
(57, 'create brons', 'web', '2023-10-18 02:35:40', '2023-10-18 02:35:40'),
(58, 'edit brons', 'web', '2023-10-18 02:35:40', '2023-10-18 02:35:40'),
(59, 'show brons', 'web', '2023-10-18 02:35:40', '2023-10-18 02:35:40'),
(60, 'delete brons', 'web', '2023-10-18 02:35:40', '2023-10-18 02:35:40'),
(61, 'blogs', 'web', '2023-10-18 02:35:40', '2023-10-18 02:35:40'),
(62, 'create blogs', 'web', '2023-10-18 02:35:41', '2023-10-18 02:35:41'),
(63, 'edit blogs', 'web', '2023-10-18 02:35:41', '2023-10-18 02:35:41'),
(64, 'show blogs', 'web', '2023-10-18 02:35:41', '2023-10-18 02:35:41'),
(65, 'delete blogs', 'web', '2023-10-18 02:35:41', '2023-10-18 02:35:41'),
(66, 'site comments', 'web', '2023-10-18 02:35:41', '2023-10-18 02:35:41'),
(67, 'create site comments', 'web', '2023-10-18 02:35:41', '2023-10-18 02:35:41'),
(68, 'edit site comments', 'web', '2023-10-18 02:35:41', '2023-10-18 02:35:41'),
(69, 'show site comments', 'web', '2023-10-18 02:35:41', '2023-10-18 02:35:41'),
(70, 'delete site comments', 'web', '2023-10-18 02:35:41', '2023-10-18 02:35:41'),
(71, 'car comments', 'web', '2023-10-18 02:35:41', '2023-10-18 02:35:41'),
(72, 'create car comments', 'web', '2023-10-18 02:35:41', '2023-10-18 02:35:41'),
(73, 'edit car comments', 'web', '2023-10-18 02:35:41', '2023-10-18 02:35:41'),
(74, 'show car comments', 'web', '2023-10-18 02:35:41', '2023-10-18 02:35:41'),
(75, 'delete car comments', 'web', '2023-10-18 02:35:41', '2023-10-18 02:35:41'),
(76, 'site faqs', 'web', '2023-10-18 02:35:41', '2023-10-18 02:35:41'),
(77, 'create site faqs', 'web', '2023-10-18 02:35:41', '2023-10-18 02:35:41'),
(78, 'edit site faqs', 'web', '2023-10-18 02:35:41', '2023-10-18 02:35:41'),
(79, 'show site faqs', 'web', '2023-10-18 02:35:41', '2023-10-18 02:35:41'),
(80, 'delete site faqs', 'web', '2023-10-18 02:35:41', '2023-10-18 02:35:41'),
(81, 'car faqs', 'web', '2023-10-18 02:35:41', '2023-10-18 02:35:41'),
(82, 'create car faqs', 'web', '2023-10-18 02:35:41', '2023-10-18 02:35:41'),
(83, 'edit car faqs', 'web', '2023-10-18 02:35:41', '2023-10-18 02:35:41'),
(84, 'show car faqs', 'web', '2023-10-18 02:35:42', '2023-10-18 02:35:42'),
(85, 'delete car faqs', 'web', '2023-10-18 02:35:42', '2023-10-18 02:35:42'),
(86, 'partners', 'web', '2023-10-18 02:35:42', '2023-10-18 02:35:42'),
(87, 'create partners', 'web', '2023-10-18 02:35:42', '2023-10-18 02:35:42'),
(88, 'edit partners', 'web', '2023-10-18 02:35:42', '2023-10-18 02:35:42'),
(89, 'show partners', 'web', '2023-10-18 02:35:42', '2023-10-18 02:35:42'),
(90, 'delete partners', 'web', '2023-10-18 02:35:42', '2023-10-18 02:35:42'),
(91, 'messages', 'web', '2023-10-18 02:35:42', '2023-10-18 02:35:42'),
(92, 'create messages', 'web', '2023-10-18 02:35:42', '2023-10-18 02:35:42'),
(93, 'edit messages', 'web', '2023-10-18 02:35:42', '2023-10-18 02:35:42'),
(94, 'show messages', 'web', '2023-10-18 02:35:42', '2023-10-18 02:35:42'),
(95, 'delete messages', 'web', '2023-10-18 02:35:42', '2023-10-18 02:35:42'),
(96, 'languages', 'web', '2023-10-18 02:35:42', '2023-10-18 02:35:42'),
(97, 'create languages', 'web', '2023-10-18 02:35:42', '2023-10-18 02:35:42'),
(98, 'edit languages', 'web', '2023-10-18 02:35:42', '2023-10-18 02:35:42'),
(99, 'show languages', 'web', '2023-10-18 02:35:42', '2023-10-18 02:35:42'),
(100, 'delete languages', 'web', '2023-10-18 02:35:42', '2023-10-18 02:35:42'),
(101, 'admins', 'web', '2023-10-18 02:35:42', '2023-10-18 02:35:42'),
(102, 'create admins', 'web', '2023-10-18 02:35:42', '2023-10-18 02:35:42'),
(103, 'edit admins', 'web', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(104, 'show admins', 'web', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(105, 'delete admins', 'web', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(106, 'permissions', 'web', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(107, 'set permissions', 'web', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(108, 'general settings', 'web', '2023-10-18 02:35:43', '2023-10-18 02:35:43'),
(109, 'edit general settings', 'web', '2023-10-18 02:35:43', '2023-10-18 02:35:43');

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `properties`
--

INSERT INTO `properties` (`id`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(2, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(3, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(4, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(5, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(6, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(7, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(8, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(9, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(10, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(11, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(12, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(13, 1, NULL, '2023-10-18 02:35:45', '2023-10-18 02:35:45');

-- --------------------------------------------------------

--
-- Структура таблицы `properties_translations`
--

CREATE TABLE `properties_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `properties_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `properties_translations`
--

INSERT INTO `properties_translations` (`id`, `properties_id`, `locale`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'az', 'Kondisioner', 'kondisioner', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(2, 2, 'az', 'GPS sistemi', 'gps-sistemi', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(3, 3, 'az', 'Hava yastıqları', 'hava-yastiqlari', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(4, 4, 'az', 'Uşaq oturacağı', 'usaq-oturacagi', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(5, 5, 'az', 'Multimedia', 'multimedia', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(6, 6, 'az', 'Bluetooth', 'bluetooth', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(7, 7, 'az', 'Touch Screen', 'touch-screen', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(8, 8, 'az', 'Naviqasiya', 'naviqasiya', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(9, 9, 'az', '1 baqaj', '1-baqaj', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(10, 10, 'az', '2 baqaj', '2-baqaj', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(11, 11, 'az', '3 baqaj', '3-baqaj', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(12, 12, 'az', 'Avtopilot', 'avtopilot', '2023-10-18 02:35:45', '2023-10-18 02:35:45'),
(13, 13, 'az', 'Qış təkərləri', 'qis-tekerleri', '2023-10-18 02:35:45', '2023-10-18 02:35:45');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'web', '2023-10-18 02:35:38', '2023-10-18 02:35:38');

-- --------------------------------------------------------

--
-- Структура таблицы `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
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
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
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
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 1),
(101, 1),
(102, 1),
(103, 1),
(104, 1),
(105, 1),
(106, 1),
(107, 1),
(108, 1),
(109, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `services_translations`
--

CREATE TABLE `services_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `services_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `site_comments`
--

CREATE TABLE `site_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `who_shared` int(11) NOT NULL,
  `name_surname` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `status` int(11) NOT NULL,
  `comment_date` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `site_faqs`
--

CREATE TABLE `site_faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `site_faqs_translations`
--

CREATE TABLE `site_faqs_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_faqs_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `slides_translations`
--

CREATE TABLE `slides_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slides_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_surname` varchar(255) NOT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `translations`
--

CREATE TABLE `translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `translations`
--

INSERT INTO `translations` (`id`, `key`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'categories', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(2, 'welcome', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(3, 'brands', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(4, 'models', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(5, 'model', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(6, 'ban_type', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(7, 'fuel_type', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(8, 'enter_fuel_type', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(9, 'gear', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(10, 'enter_gear', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(11, 'transmission', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(12, 'enter_transmission', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(13, 'engine', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(14, 'color', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(15, 'car_property', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(16, 'enter_property', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(17, 'car_properties', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(18, 'discounts', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(19, 'discount', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(20, 'cars', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(21, 'car', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(22, 'brons', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(23, 'blogs', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(24, 'services', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(25, 'name_surname', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(26, 'for_site', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(27, 'shared', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(28, 'comment', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(29, 'comments', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(30, 'comment_informations', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(31, 'comments_for_site', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(32, 'comments_for_cars', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(33, 'faqs', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(34, 'faq_for_site', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(35, 'faq_for_cars', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(36, 'partners', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(37, 'messages', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(38, 'get_in_touch', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(39, 'site_configuration', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(40, 'slide', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(41, 'new_slide', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(42, 'language', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(43, 'languages', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(44, 'user', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(45, 'users', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(46, 'admin', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(47, 'admins', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(48, 'roles', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(49, 'general_settings', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(50, 'main_page_view', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(51, 'new', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(52, 'brand_name', NULL, '2023-10-18 02:35:46', '2023-10-18 02:35:46'),
(53, 'status', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(54, 'operations', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(55, 'edit', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(56, 'show', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(57, 'delete', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(58, 'invoice', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(59, 'active', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(60, 'deactive', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(61, 'type', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(62, 'amount/percentage', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(63, 'start_date', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(64, 'end_date', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(65, 'bron_number', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(66, 'phone', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(67, 'price', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(68, 'discounted_price', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(69, 'date', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(70, 'download', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(71, 'print', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(72, 'send', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(73, 'save', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(74, 'update', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(75, 'seo_link', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(76, 'icon', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(77, 'image', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(78, 'blogs', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(79, 'title', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(80, 'description', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(81, 'content', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(82, 'question', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(83, 'enter_question', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(84, 'answer', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(85, 'inbox', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(86, 'sent', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(87, 'important_messages', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(88, 'unread_messages', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(89, 'search_email', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(90, 'draft', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(91, 'draft_message', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(92, 'deleted', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(93, 'apply_to_selected', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(94, 'mark_as_read', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(95, 'mark_as_unread', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(96, 'restore', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(97, 'destroy', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(98, 'account', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(99, 'logout', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(100, 'topbar', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(101, 'header', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(102, 'menu', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(103, 'search', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(104, 'search_bar', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(105, 'about_section', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(106, 'banner1', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(107, 'banner2', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(108, 'users', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(109, 'offers', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(110, 'logo', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(111, 'numbers', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(112, 'emails', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(113, 'social_networks', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(114, 'address', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(115, 'enter_address', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(116, 'about', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(117, 'meta_title', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(118, 'enter_meta_title', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(119, 'meta_keywords', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(120, 'enter_meta_keywords', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(121, 'meta_description', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(122, 'repair_mode', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(123, 'role', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(124, 'role_permissions', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(125, 'give_permissions', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(126, 'short_name', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(127, 'translations', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(128, 'constant', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(129, 'value', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(130, 'visit_site', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(131, 'need_help?', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(132, 'search_your_best_cars_here', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(133, 'select_brands', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(134, 'select_models', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(135, 'pick_up_date', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(136, 'drop_off_date', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(137, 'pick_up_time', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(138, 'drop_off_time', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(139, 'search', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(140, 'find_car', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(141, 'about_us', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(142, 'latest_services', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(143, 'all_services', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(144, 'all_brands', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(145, 'testimonials', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(146, 'our_members', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(147, 'our_blogs', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(148, 'quick_links', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(149, 'newsletter', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(150, 'recent_posts', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(151, 'home', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(152, 'car_listing', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(153, 'gallery', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(154, 'contact', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(155, 'get_in_touch', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(156, 'your_name', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(157, 'email_address', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(158, 'subject', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(159, 'to', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(160, 'cancel', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(161, 'save_to_draft', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(162, 'mail_service', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(163, 'number', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(164, 'write_here_your_message', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(165, 'send_message', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(166, 'contact_information', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(167, 'contact_us', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(168, 'email_us', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(169, 'call_us', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(170, 'follow_us', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(171, 'privacy_policy', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(172, 'subscribe', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(173, 'be_a_partner', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(174, 'request_a_call', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(175, 'enter_ban_type', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(176, 'enter_seo_link', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(177, 'select', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(178, 'enter_title', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(179, 'enter_brand_name', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(180, 'pending', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(181, 'accepted', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(182, 'rejected', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(183, 'licence_plate', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(184, 'for_one_day', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(185, 'day', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(186, 'price_sum', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(187, 'total_amount', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(188, 'discount_percentage', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(189, 'discount_amount', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(190, 'tax', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(191, 'amount_to_be_paid', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(192, 'manufacturing_year', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(193, 'enter_licence_plate', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(194, 'enter_manufacturing_year', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(195, 'daily_price', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(196, 'enter_daily_price', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(197, 'weekly_price', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(198, 'enter_weekly_price', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(199, 'monthly_price', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(200, 'enter_monthly_price', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(201, 'monthly_brons', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(202, 'weekly_brons', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(203, 'weekly_price_not_specified', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(204, 'monthly_price_not_specified', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(205, 'discount_not_specified', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(206, 'enter_color', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(207, 'all_brons', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(208, 'last_month', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(209, 'last_week', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(210, 'remainder', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(211, 'dear', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(212, 'keep_your_password_secret_for_system_security!', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(213, 'notifications', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(214, 'not_applied', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(215, 'flat', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(216, 'enter_discount', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(217, 'discount_informations', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(218, 'enter_engine', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(219, 'enter_name_surname', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(220, 'enter_email', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(221, 'set_password', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(222, 'role_not_included', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(223, 'contact_numbers', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(224, 'enter_contact_numbers', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(225, 'add_new_contact_number', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(226, 'new_contact_number', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(227, 'enter_email_address', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(228, 'add_new_email_address', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(229, 'enter_social_network', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(230, 'add_new_social_network', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(231, 'new_social_network', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(232, 'enter_language', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(233, 'enter_shortened', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(234, 'enter_role', NULL, '2023-10-18 02:35:47', '2023-10-18 02:35:47'),
(235, 'apply', NULL, '2023-10-18 02:35:48', '2023-10-18 02:35:48'),
(236, 'head_office', NULL, '2023-10-18 02:35:48', '2023-10-18 02:35:48'),
(237, 'quick_links', NULL, '2023-10-18 02:35:48', '2023-10-18 02:35:48'),
(238, 'reserve_now', NULL, '2023-10-18 02:35:48', '2023-10-18 02:35:48'),
(239, 'personal_informations', NULL, '2023-10-18 02:35:48', '2023-10-18 02:35:48'),
(240, 'reserve', NULL, '2023-10-18 02:35:48', '2023-10-18 02:35:48'),
(241, 'reserve_now', NULL, '2023-10-18 02:35:48', '2023-10-18 02:35:48'),
(242, 'price_not_calculated', NULL, '2023-10-18 02:35:48', '2023-10-18 02:35:48'),
(243, 'special_request', NULL, '2023-10-18 02:35:48', '2023-10-18 02:35:48'),
(244, 'keywords', NULL, '2023-10-18 02:35:48', '2023-10-18 02:35:48'),
(245, 'call_requests', NULL, '2023-10-18 02:35:48', '2023-10-18 02:35:48'),
(246, 'answered', NULL, '2023-10-18 02:35:48', '2023-10-18 02:35:48'),
(247, 'unanswered', NULL, '2023-10-18 02:35:48', '2023-10-18 02:35:48'),
(248, 'company_name', NULL, '2023-10-18 02:35:48', '2023-10-18 02:35:48'),
(249, 'voen', NULL, '2023-10-18 02:35:48', '2023-10-18 02:35:48'),
(250, 'relevant_person', NULL, '2023-10-18 02:35:48', '2023-10-18 02:35:48'),
(251, 'experience', NULL, '2023-10-18 02:35:48', '2023-10-18 02:35:48'),
(252, 'job', NULL, '2023-10-18 02:35:48', '2023-10-18 02:35:48'),
(253, 'team', NULL, '2023-10-18 02:35:48', '2023-10-18 02:35:48'),
(254, 'experts', NULL, '2023-10-18 02:35:48', '2023-10-18 02:35:48');

-- --------------------------------------------------------

--
-- Структура таблицы `transmissions`
--

CREATE TABLE `transmissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `transmissions`
--

INSERT INTO `transmissions` (`id`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(2, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(3, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(4, 1, NULL, '2023-10-18 02:35:44', '2023-10-18 02:35:44');

-- --------------------------------------------------------

--
-- Структура таблицы `transmissions_translations`
--

CREATE TABLE `transmissions_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transmissions_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `transmissions_translations`
--

INSERT INTO `transmissions_translations` (`id`, `transmissions_id`, `locale`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'az', 'Mexaniki', 'mexaniki', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(2, 2, 'az', 'Avtomat', 'avtomat', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(3, 3, 'az', 'Robotlaşdırılmış', 'robotlasdirilmis', '2023-10-18 02:35:44', '2023-10-18 02:35:44'),
(4, 4, 'az', 'Variator', 'variator', '2023-10-18 02:35:44', '2023-10-18 02:35:44');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `user_role` int(11) NOT NULL DEFAULT 10,
  `role` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `avatar`, `user_role`, `role`, `bio`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Cavid Şıxıyev', 'chaparoglucavid@gmail.com', NULL, '$2y$10$60m8tFgWUm9hu0U39NGpOe/W06XELaauOFJIasIB5sOcHCd4YlI/.', NULL, 10, NULL, '', NULL, '2023-10-18 02:35:43', '2023-10-18 02:35:43');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ban_types`
--
ALTER TABLE `ban_types`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ban_types_translations`
--
ALTER TABLE `ban_types_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ban_types_translations_ban_types_id_locale_unique` (`ban_types_id`,`locale`),
  ADD KEY `ban_types_translations_locale_index` (`locale`);

--
-- Индексы таблицы `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `blogs_translations`
--
ALTER TABLE `blogs_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_translations_blogs_id_locale_unique` (`blogs_id`,`locale`),
  ADD KEY `blogs_translations_locale_index` (`locale`);

--
-- Индексы таблицы `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `brands_translations`
--
ALTER TABLE `brands_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_translations_brands_id_locale_unique` (`brands_id`,`locale`),
  ADD KEY `brands_translations_locale_index` (`locale`);

--
-- Индексы таблицы `brons`
--
ALTER TABLE `brons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brons_bron_number_unique` (`bron_number`),
  ADD KEY `brons_brands_id_foreign` (`brands_id`),
  ADD KEY `brons_models_id_foreign` (`models_id`),
  ADD KEY `brons_cars_id_foreign` (`cars_id`);

--
-- Индексы таблицы `call_requests`
--
ALTER TABLE `call_requests`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cars_brands_id_foreign` (`brands_id`),
  ADD KEY `cars_models_id_foreign` (`models_id`),
  ADD KEY `cars_ban_types_id_foreign` (`ban_types_id`),
  ADD KEY `cars_fuels_id_foreign` (`fuels_id`),
  ADD KEY `cars_gears_id_foreign` (`gears_id`),
  ADD KEY `cars_transmissions_id_foreign` (`transmissions_id`),
  ADD KEY `cars_engines_id_foreign` (`engines_id`),
  ADD KEY `cars_colors_id_foreign` (`colors_id`);

--
-- Индексы таблицы `cars_cars_faqs`
--
ALTER TABLE `cars_cars_faqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cars_cars_faqs_cars_id_foreign` (`cars_id`),
  ADD KEY `cars_cars_faqs_cars_faqs_id_foreign` (`cars_faqs_id`);

--
-- Индексы таблицы `cars_faqs`
--
ALTER TABLE `cars_faqs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cars_faqs_translations`
--
ALTER TABLE `cars_faqs_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cars_faqs_translations_cars_faqs_id_locale_unique` (`cars_faqs_id`,`locale`),
  ADD KEY `cars_faqs_translations_locale_index` (`locale`);

--
-- Индексы таблицы `cars_galleries`
--
ALTER TABLE `cars_galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cars_galleries_cars_id_foreign` (`cars_id`);

--
-- Индексы таблицы `cars_properties`
--
ALTER TABLE `cars_properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cars_properties_cars_id_foreign` (`cars_id`),
  ADD KEY `cars_properties_properties_id_foreign` (`properties_id`);

--
-- Индексы таблицы `cars_translations`
--
ALTER TABLE `cars_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cars_translations_cars_id_locale_unique` (`cars_id`,`locale`),
  ADD KEY `cars_translations_locale_index` (`locale`);

--
-- Индексы таблицы `car_comments`
--
ALTER TABLE `car_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `car_comments_cars_id_foreign` (`cars_id`);

--
-- Индексы таблицы `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `colors_translations`
--
ALTER TABLE `colors_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `colors_translations_colors_id_locale_unique` (`colors_id`,`locale`),
  ADD KEY `colors_translations_locale_index` (`locale`);

--
-- Индексы таблицы `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `discounts_brands_id_foreign` (`brands_id`),
  ADD KEY `discounts_models_id_foreign` (`models_id`),
  ADD KEY `discounts_cars_id_foreign` (`cars_id`);

--
-- Индексы таблицы `engines`
--
ALTER TABLE `engines`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `engines_translations`
--
ALTER TABLE `engines_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `engines_translations_engines_id_locale_unique` (`engines_id`,`locale`),
  ADD KEY `engines_translations_locale_index` (`locale`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `fuels`
--
ALTER TABLE `fuels`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `fuels_translations`
--
ALTER TABLE `fuels_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fuels_translations_fuels_id_locale_unique` (`fuels_id`,`locale`),
  ADD KEY `fuels_translations_locale_index` (`locale`);

--
-- Индексы таблицы `gears`
--
ALTER TABLE `gears`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gears_translations`
--
ALTER TABLE `gears_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gears_translations_gears_id_locale_unique` (`gears_id`,`locale`),
  ADD KEY `gears_translations_locale_index` (`locale`);

--
-- Индексы таблицы `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `general_settings_translations`
--
ALTER TABLE `general_settings_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `general_settings_translations_general_settings_id_locale_unique` (`general_settings_id`,`locale`),
  ADD KEY `general_settings_translations_locale_index` (`locale`);

--
-- Индексы таблицы `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `languages_shortened_unique` (`shortened`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id`),
  ADD KEY `models_brands_id_foreign` (`brands_id`);

--
-- Индексы таблицы `models_translations`
--
ALTER TABLE `models_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `models_translations_models_id_locale_unique` (`models_id`,`locale`),
  ADD KEY `models_translations_locale_index` (`locale`);

--
-- Индексы таблицы `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Индексы таблицы `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Индексы таблицы `page_designs`
--
ALTER TABLE `page_designs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `properties_translations`
--
ALTER TABLE `properties_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `properties_translations_properties_id_locale_unique` (`properties_id`,`locale`),
  ADD KEY `properties_translations_locale_index` (`locale`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Индексы таблицы `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services_translations`
--
ALTER TABLE `services_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_translations_services_id_locale_unique` (`services_id`,`locale`),
  ADD KEY `services_translations_locale_index` (`locale`);

--
-- Индексы таблицы `site_comments`
--
ALTER TABLE `site_comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `site_faqs`
--
ALTER TABLE `site_faqs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `site_faqs_translations`
--
ALTER TABLE `site_faqs_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `site_faqs_translations_site_faqs_id_locale_unique` (`site_faqs_id`,`locale`),
  ADD KEY `site_faqs_translations_locale_index` (`locale`);

--
-- Индексы таблицы `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slides_translations`
--
ALTER TABLE `slides_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slides_translations_slides_id_locale_unique` (`slides_id`,`locale`),
  ADD KEY `slides_translations_locale_index` (`locale`);

--
-- Индексы таблицы `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `transmissions`
--
ALTER TABLE `transmissions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `transmissions_translations`
--
ALTER TABLE `transmissions_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transmissions_translations_transmissions_id_locale_unique` (`transmissions_id`,`locale`),
  ADD KEY `transmissions_translations_locale_index` (`locale`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `ban_types`
--
ALTER TABLE `ban_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `ban_types_translations`
--
ALTER TABLE `ban_types_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `blogs_translations`
--
ALTER TABLE `blogs_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `brands_translations`
--
ALTER TABLE `brands_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `brons`
--
ALTER TABLE `brons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `call_requests`
--
ALTER TABLE `call_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `cars_cars_faqs`
--
ALTER TABLE `cars_cars_faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `cars_faqs`
--
ALTER TABLE `cars_faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `cars_faqs_translations`
--
ALTER TABLE `cars_faqs_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `cars_galleries`
--
ALTER TABLE `cars_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `cars_properties`
--
ALTER TABLE `cars_properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `cars_translations`
--
ALTER TABLE `cars_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `car_comments`
--
ALTER TABLE `car_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `colors_translations`
--
ALTER TABLE `colors_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `engines`
--
ALTER TABLE `engines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `engines_translations`
--
ALTER TABLE `engines_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `fuels`
--
ALTER TABLE `fuels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `fuels_translations`
--
ALTER TABLE `fuels_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `gears`
--
ALTER TABLE `gears`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `gears_translations`
--
ALTER TABLE `gears_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `general_settings_translations`
--
ALTER TABLE `general_settings_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT для таблицы `models`
--
ALTER TABLE `models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT для таблицы `models_translations`
--
ALTER TABLE `models_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT для таблицы `page_designs`
--
ALTER TABLE `page_designs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `properties_translations`
--
ALTER TABLE `properties_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `services_translations`
--
ALTER TABLE `services_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `site_comments`
--
ALTER TABLE `site_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `site_faqs`
--
ALTER TABLE `site_faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `site_faqs_translations`
--
ALTER TABLE `site_faqs_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `slides_translations`
--
ALTER TABLE `slides_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `translations`
--
ALTER TABLE `translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;

--
-- AUTO_INCREMENT для таблицы `transmissions`
--
ALTER TABLE `transmissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `transmissions_translations`
--
ALTER TABLE `transmissions_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `ban_types_translations`
--
ALTER TABLE `ban_types_translations`
  ADD CONSTRAINT `ban_types_translations_ban_types_id_foreign` FOREIGN KEY (`ban_types_id`) REFERENCES `ban_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `blogs_translations`
--
ALTER TABLE `blogs_translations`
  ADD CONSTRAINT `blogs_translations_blogs_id_foreign` FOREIGN KEY (`blogs_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `brands_translations`
--
ALTER TABLE `brands_translations`
  ADD CONSTRAINT `brands_translations_brands_id_foreign` FOREIGN KEY (`brands_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `brons`
--
ALTER TABLE `brons`
  ADD CONSTRAINT `brons_brands_id_foreign` FOREIGN KEY (`brands_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `brons_cars_id_foreign` FOREIGN KEY (`cars_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `brons_models_id_foreign` FOREIGN KEY (`models_id`) REFERENCES `models` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_ban_types_id_foreign` FOREIGN KEY (`ban_types_id`) REFERENCES `ban_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cars_brands_id_foreign` FOREIGN KEY (`brands_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cars_colors_id_foreign` FOREIGN KEY (`colors_id`) REFERENCES `colors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cars_engines_id_foreign` FOREIGN KEY (`engines_id`) REFERENCES `engines` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cars_fuels_id_foreign` FOREIGN KEY (`fuels_id`) REFERENCES `fuels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cars_gears_id_foreign` FOREIGN KEY (`gears_id`) REFERENCES `gears` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cars_models_id_foreign` FOREIGN KEY (`models_id`) REFERENCES `models` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cars_transmissions_id_foreign` FOREIGN KEY (`transmissions_id`) REFERENCES `transmissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `cars_cars_faqs`
--
ALTER TABLE `cars_cars_faqs`
  ADD CONSTRAINT `cars_cars_faqs_cars_faqs_id_foreign` FOREIGN KEY (`cars_faqs_id`) REFERENCES `cars_faqs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cars_cars_faqs_cars_id_foreign` FOREIGN KEY (`cars_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `cars_faqs_translations`
--
ALTER TABLE `cars_faqs_translations`
  ADD CONSTRAINT `cars_faqs_translations_cars_faqs_id_foreign` FOREIGN KEY (`cars_faqs_id`) REFERENCES `cars_faqs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `cars_galleries`
--
ALTER TABLE `cars_galleries`
  ADD CONSTRAINT `cars_galleries_cars_id_foreign` FOREIGN KEY (`cars_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `cars_properties`
--
ALTER TABLE `cars_properties`
  ADD CONSTRAINT `cars_properties_cars_id_foreign` FOREIGN KEY (`cars_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cars_properties_properties_id_foreign` FOREIGN KEY (`properties_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `cars_translations`
--
ALTER TABLE `cars_translations`
  ADD CONSTRAINT `cars_translations_cars_id_foreign` FOREIGN KEY (`cars_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `car_comments`
--
ALTER TABLE `car_comments`
  ADD CONSTRAINT `car_comments_cars_id_foreign` FOREIGN KEY (`cars_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `colors_translations`
--
ALTER TABLE `colors_translations`
  ADD CONSTRAINT `colors_translations_colors_id_foreign` FOREIGN KEY (`colors_id`) REFERENCES `colors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `discounts`
--
ALTER TABLE `discounts`
  ADD CONSTRAINT `discounts_brands_id_foreign` FOREIGN KEY (`brands_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `discounts_cars_id_foreign` FOREIGN KEY (`cars_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `discounts_models_id_foreign` FOREIGN KEY (`models_id`) REFERENCES `models` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `engines_translations`
--
ALTER TABLE `engines_translations`
  ADD CONSTRAINT `engines_translations_engines_id_foreign` FOREIGN KEY (`engines_id`) REFERENCES `engines` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `fuels_translations`
--
ALTER TABLE `fuels_translations`
  ADD CONSTRAINT `fuels_translations_fuels_id_foreign` FOREIGN KEY (`fuels_id`) REFERENCES `fuels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `gears_translations`
--
ALTER TABLE `gears_translations`
  ADD CONSTRAINT `gears_translations_gears_id_foreign` FOREIGN KEY (`gears_id`) REFERENCES `gears` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `general_settings_translations`
--
ALTER TABLE `general_settings_translations`
  ADD CONSTRAINT `general_settings_translations_general_settings_id_foreign` FOREIGN KEY (`general_settings_id`) REFERENCES `general_settings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `models`
--
ALTER TABLE `models`
  ADD CONSTRAINT `models_brands_id_foreign` FOREIGN KEY (`brands_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `models_translations`
--
ALTER TABLE `models_translations`
  ADD CONSTRAINT `models_translations_models_id_foreign` FOREIGN KEY (`models_id`) REFERENCES `models` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `properties_translations`
--
ALTER TABLE `properties_translations`
  ADD CONSTRAINT `properties_translations_properties_id_foreign` FOREIGN KEY (`properties_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `services_translations`
--
ALTER TABLE `services_translations`
  ADD CONSTRAINT `services_translations_services_id_foreign` FOREIGN KEY (`services_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `site_faqs_translations`
--
ALTER TABLE `site_faqs_translations`
  ADD CONSTRAINT `site_faqs_translations_site_faqs_id_foreign` FOREIGN KEY (`site_faqs_id`) REFERENCES `site_faqs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `slides_translations`
--
ALTER TABLE `slides_translations`
  ADD CONSTRAINT `slides_translations_slides_id_foreign` FOREIGN KEY (`slides_id`) REFERENCES `slides` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `transmissions_translations`
--
ALTER TABLE `transmissions_translations`
  ADD CONSTRAINT `transmissions_translations_transmissions_id_foreign` FOREIGN KEY (`transmissions_id`) REFERENCES `transmissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
