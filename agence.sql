-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2020 at 06:44 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agence`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20200829175625', '2020-09-06 21:38:22', 1779),
('DoctrineMigrations\\Version20200829180453', '2020-09-14 18:26:49', 1065),
('DoctrineMigrations\\Version20200830124510', '2020-09-14 18:26:50', 200),
('DoctrineMigrations\\Version20200923105652', '2020-09-23 12:57:09', 7358),
('DoctrineMigrations\\Version20200925102636', '2020-09-25 12:26:45', 5833),
('DoctrineMigrations\\Version20200925103107', '2020-09-25 12:31:13', 2675),
('DoctrineMigrations\\Version20200926155237', '2020-09-26 17:52:41', 5955),
('DoctrineMigrations\\Version20201003124239', '2020-10-03 14:43:01', 2412),
('DoctrineMigrations\\Version20201003172731', '2020-10-03 19:27:39', 2756),
('DoctrineMigrations\\Version20201005092608', '2020-10-05 11:26:19', 1743),
('DoctrineMigrations\\Version20201005110811', '2020-10-05 13:08:19', 138),
('DoctrineMigrations\\Version20201005140235', '2020-10-05 16:02:44', 233),
('DoctrineMigrations\\Version20201006101540', '2020-10-06 12:15:49', 1987),
('DoctrineMigrations\\Version20201006150130', '2020-10-06 17:01:41', 140),
('DoctrineMigrations\\Version20201007090019', '2020-10-07 11:00:39', 2876);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `property_id`) VALUES
(1, 4, 3),
(2, 4, 2),
(3, 4, 5),
(6, 7, 9),
(7, 7, 8),
(11, 6, 8),
(12, 6, 4),
(13, 7, 3),
(15, 7, 6),
(16, 7, 7),
(19, 6, 1),
(20, 7, 4),
(21, 7, 11),
(29, 7, 5),
(30, 6, 5),
(31, 6, 3),
(39, 6, 11),
(40, 6, 14),
(41, 6, 15);

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sold` tinyint(1) NOT NULL DEFAULT 0,
  `surface` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heat` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `floor` int(11) NOT NULL,
  `bedrooms` int(11) NOT NULL,
  `rooms` int(11) NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '(DC2Type:simple_array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `title`, `description`, `sold`, `surface`, `created_at`, `postal_code`, `adress`, `heat`, `price`, `floor`, `bedrooms`, `rooms`, `city`, `user_id`, `image`, `gallery`) VALUES
(1, 'PROPERTY1', '<p2 style=\"padding-bottom:50px;\"><b>What it is</b>: The perfect everyday black mascara</p2><br><br>\r\n<p2><b>Why it\'s special:</b></p2>\r\n<ul>\r\n<li>Curls and sculpts as it lengthens, creating a natural “baby extension” effect without clumping</li>\r\n<li>Teeny-tiny fibers coat lashes from root to tip, while flexible film-forming polymers lift and lock each fiber into place</li>\r\n<li>Water-resistant (not waterproof), so it washes off easily with warm water or Milky Oil at the end of your day</li>\r\n</ul> \r\n<p2 style=\"margin-left:10px;\"><b>Good to know:</b> cruelty free, paraben free, fragrance free, hypoallergenic, allergy tested, dermatologist tested, ophthalmologist tested, suitable for sensitive eyes and contact lens wearers, non-irritating</p2>\r\n<br><br><br>', 0, 18, '2020-09-23 00:00:00', '20579', 'Hay Mohammedi Casablanca', 1, 2877281, 1, 1, 3, 'Casablanca', 6, '/uploads/1.jpg', '/uploads/13901572_10208511588360125_7430774967484069831_n%20%283%29.jpg,/uploads/9%20%282%29.jpg,/uploads/10%20%281%29.jpg,/uploads/2b06da9b-8784-4bec-a63f-8e702cef3832%20%281%29.jpg,/uploads/Oprah%20loves%20these_.jpg'),
(2, 'PROPERTY2', '<p2 style=\"padding-bottom:50px;\"><b>What it is</b>: The perfect everyday black mascara</p2><br><br>\r\n<p2><b>Why it\'s special:</b></p2>\r\n<ul>\r\n<li>Curls and sculpts as it lengthens, creating a natural “baby extension” effect without clumping</li>\r\n<li>Teeny-tiny fibers coat lashes from root to tip, while flexible film-forming polymers lift and lock each fiber into place</li>\r\n<li>Water-resistant (not waterproof), so it washes off easily with warm water or Milky Oil at the end of your day</li>\r\n</ul> \r\n<p2 style=\"margin-left:10px;\"><b>Good to know:</b> cruelty free, paraben free, fragrance free, hypoallergenic, allergy tested, dermatologist tested, ophthalmologist tested, suitable for sensitive eyes and contact lens wearers, non-irritating</p2>\r\n<br><br><br>', 0, 120, '2020-09-23 00:00:00', '20293', 'Hay Mohammedi Casablanca', 1, 6206727, 1, 1, 3, 'Agadir', 4, '/uploads/2.jpg', '/uploads/13901572_10208511588360125_7430774967484069831_n%20%283%29.jpg,/uploads/9%20%282%29.jpg,/uploads/10%20%281%29.jpg,/uploads/2b06da9b-8784-4bec-a63f-8e702cef3832%20%281%29.jpg,/uploads/Oprah%20loves%20these_.jpg'),
(3, 'PROPERTY3', '<p2 style=\"padding-bottom:50px;\"><b>What it is</b>: The perfect everyday black mascara</p2><br><br>\r\n<p2><b>Why it\'s special:</b></p2>\r\n<ul>\r\n<li>Curls and sculpts as it lengthens, creating a natural “baby extension” effect without clumping</li>\r\n<li>Teeny-tiny fibers coat lashes from root to tip, while flexible film-forming polymers lift and lock each fiber into place</li>\r\n<li>Water-resistant (not waterproof), so it washes off easily with warm water or Milky Oil at the end of your day</li>\r\n</ul> \r\n<p2 style=\"margin-left:10px;\"><b>Good to know:</b> cruelty free, paraben free, fragrance free, hypoallergenic, allergy tested, dermatologist tested, ophthalmologist tested, suitable for sensitive eyes and contact lens wearers, non-irritating</p2>\r\n<br><br><br>', 0, 55, '2020-09-23 00:00:00', '20773', 'Hay Mohammedi Casablanca', 1, 6206727, 1, 1, 3, 'Tanger', 4, '/uploads/3.jpg', '/uploads/13901572_10208511588360125_7430774967484069831_n%20%283%29.jpg,/uploads/9%20%282%29.jpg,/uploads/10%20%281%29.jpg,/uploads/2b06da9b-8784-4bec-a63f-8e702cef3832%20%281%29.jpg,/uploads/Oprah%20loves%20these_.jpg'),
(4, 'PROPERTY4', '<p2 style=\"padding-bottom:50px;\"><b>What it is</b>: The perfect everyday black mascara</p2><br><br>\r\n<p2><b>Why it\'s special:</b></p2>\r\n<ul>\r\n<li>Curls and sculpts as it lengthens, creating a natural “baby extension” effect without clumping</li>\r\n<li>Teeny-tiny fibers coat lashes from root to tip, while flexible film-forming polymers lift and lock each fiber into place</li>\r\n<li>Water-resistant (not waterproof), so it washes off easily with warm water or Milky Oil at the end of your day</li>\r\n</ul> \r\n<p2 style=\"margin-left:10px;\"><b>Good to know:</b> cruelty free, paraben free, fragrance free, hypoallergenic, allergy tested, dermatologist tested, ophthalmologist tested, suitable for sensitive eyes and contact lens wearers, non-irritating</p2>\r\n<br><br><br>', 0, 172, '2020-09-23 00:00:00', '20579', 'Hay Mohammedi Casablanca', 1, 6206727, 1, 1, 3, 'Casablanca', 7, '/uploads/4.jpg', '/uploads/13901572_10208511588360125_7430774967484069831_n%20%283%29.jpg,/uploads/9%20%282%29.jpg,/uploads/10%20%281%29.jpg,/uploads/2b06da9b-8784-4bec-a63f-8e702cef3832%20%281%29.jpg,/uploads/Oprah%20loves%20these_.jpg'),
(5, 'PROPERTY5', '<p2 style=\"padding-bottom:50px;\"><b>What it is</b>: The perfect everyday black mascara</p2><br><br>\r\n<p2><b>Why it\'s special:</b></p2>\r\n<ul>\r\n<li>Curls and sculpts as it lengthens, creating a natural “baby extension” effect without clumping</li>\r\n<li>Teeny-tiny fibers coat lashes from root to tip, while flexible film-forming polymers lift and lock each fiber into place</li>\r\n<li>Water-resistant (not waterproof), so it washes off easily with warm water or Milky Oil at the end of your day</li>\r\n</ul> \r\n<p2 style=\"margin-left:10px;\"><b>Good to know:</b> cruelty free, paraben free, fragrance free, hypoallergenic, allergy tested, dermatologist tested, ophthalmologist tested, suitable for sensitive eyes and contact lens wearers, non-irritating</p2>\r\n<br><br><br>', 0, 56, '2020-09-23 00:00:00', '20579', 'Hay Mohammedi Casablanca', 1, 6206727, 1, 1, 3, 'Casablanca', 7, '/uploads/5.jpg', '/uploads/13901572_10208511588360125_7430774967484069831_n%20%283%29.jpg,/uploads/9%20%282%29.jpg,/uploads/10%20%281%29.jpg,/uploads/2b06da9b-8784-4bec-a63f-8e702cef3832%20%281%29.jpg,/uploads/Oprah%20loves%20these_.jpg'),
(6, 'PROPERTY6', '<p2 style=\"padding-bottom:50px;\"><b>What it is</b>: The perfect everyday black mascara</p2><br><br>\r\n<p2><b>Why it\'s special:</b></p2>\r\n<ul>\r\n<li>Curls and sculpts as it lengthens, creating a natural “baby extension” effect without clumping</li>\r\n<li>Teeny-tiny fibers coat lashes from root to tip, while flexible film-forming polymers lift and lock each fiber into place</li>\r\n<li>Water-resistant (not waterproof), so it washes off easily with warm water or Milky Oil at the end of your day</li>\r\n</ul> \r\n<p2 style=\"margin-left:10px;\"><b>Good to know:</b> cruelty free, paraben free, fragrance free, hypoallergenic, allergy tested, dermatologist tested, ophthalmologist tested, suitable for sensitive eyes and contact lens wearers, non-irritating</p2>\r\n<br><br><br>', 0, 2, '2020-09-23 00:00:00', '20579', 'Hay Mohammedi Casablanca', 1, 6206727, 1, 1, 3, 'Casablanca', 6, '/uploads/6.jpg', '/uploads/13901572_10208511588360125_7430774967484069831_n%20%283%29.jpg,/uploads/9%20%282%29.jpg,/uploads/10%20%281%29.jpg,/uploads/2b06da9b-8784-4bec-a63f-8e702cef3832%20%281%29.jpg,/uploads/Oprah%20loves%20these_.jpg'),
(7, 'PROPERTY7', '<p2 style=\"padding-bottom:50px;\"><b>What it is</b>: The perfect everyday black mascara</p2><br><br>\r\n<p2><b>Why it\'s special:</b></p2>\r\n<ul>\r\n<li>Curls and sculpts as it lengthens, creating a natural “baby extension” effect without clumping</li>\r\n<li>Teeny-tiny fibers coat lashes from root to tip, while flexible film-forming polymers lift and lock each fiber into place</li>\r\n<li>Water-resistant (not waterproof), so it washes off easily with warm water or Milky Oil at the end of your day</li>\r\n</ul> \r\n<p2 style=\"margin-left:10px;\"><b>Good to know:</b> cruelty free, paraben free, fragrance free, hypoallergenic, allergy tested, dermatologist tested, ophthalmologist tested, suitable for sensitive eyes and contact lens wearers, non-irritating</p2>\r\n<br><br><br>\r\n', 0, 2, '2020-09-23 00:00:00', '20579', 'Hay Mohammedi Casablanca', 1, 6206727, 1, 1, 3, 'Casablanca', 4, '/uploads/7.jpg', '/uploads/13901572_10208511588360125_7430774967484069831_n%20%283%29.jpg,/uploads/9%20%282%29.jpg,/uploads/10%20%281%29.jpg,/uploads/2b06da9b-8784-4bec-a63f-8e702cef3832%20%281%29.jpg,/uploads/Oprah%20loves%20these_.jpg'),
(8, 'PROPERTY8', '<p2 style=\"padding-bottom:50px;\"><b>What it is</b>: The perfect everyday black mascara</p2><br><br>\r\n<p2><b>Why it\'s special:</b></p2>\r\n<ul>\r\n<li>Curls and sculpts as it lengthens, creating a natural “baby extension” effect without clumping</li>\r\n<li>Teeny-tiny fibers coat lashes from root to tip, while flexible film-forming polymers lift and lock each fiber into place</li>\r\n<li>Water-resistant (not waterproof), so it washes off easily with warm water or Milky Oil at the end of your day</li>\r\n</ul> \r\n<p2 style=\"margin-left:10px;\"><b>Good to know:</b> cruelty free, paraben free, fragrance free, hypoallergenic, allergy tested, dermatologist tested, ophthalmologist tested, suitable for sensitive eyes and contact lens wearers, non-irritating</p2>\r\n<br><br><br>\r\n', 0, 2, '2020-09-23 00:00:00', '20579', 'Hay Mohammedi Casablanca', 1, 6206727, 1, 1, 3, 'Casablanca', 7, '/uploads/8.jpg', '/uploads/13901572_10208511588360125_7430774967484069831_n%20%283%29.jpg,/uploads/9%20%282%29.jpg,/uploads/10%20%281%29.jpg,/uploads/2b06da9b-8784-4bec-a63f-8e702cef3832%20%281%29.jpg,/uploads/Oprah%20loves%20these_.jpg'),
(9, 'PROPERTY9', '<p2 style=\"padding-bottom:50px;\"><b>What it is</b>: The perfect everyday black mascara</p2><br><br>\r\n<p2><b>Why it\'s special:</b></p2>\r\n<ul>\r\n<li>Curls and sculpts as it lengthens, creating a natural “baby extension” effect without clumping</li>\r\n<li>Teeny-tiny fibers coat lashes from root to tip, while flexible film-forming polymers lift and lock each fiber into place</li>\r\n<li>Water-resistant (not waterproof), so it washes off easily with warm water or Milky Oil at the end of your day</li>\r\n</ul> \r\n<p2 style=\"margin-left:10px;\"><b>Good to know:</b> cruelty free, paraben free, fragrance free, hypoallergenic, allergy tested, dermatologist tested, ophthalmologist tested, suitable for sensitive eyes and contact lens wearers, non-irritating</p2>\r\n<br><br><br>', 0, 2, '2020-09-23 00:00:00', '20579', 'Hay Mohammedi Casablanca', 1, 6206727, 1, 1, 3, 'Casablanca', 6, '/uploads/9.jpg', '/uploads/13901572_10208511588360125_7430774967484069831_n%20%283%29.jpg,/uploads/9%20%282%29.jpg,/uploads/10%20%281%29.jpg,/uploads/2b06da9b-8784-4bec-a63f-8e702cef3832%20%281%29.jpg,/uploads/Oprah%20loves%20these_.jpg'),
(10, 'PROPERTY 10', '<p2 style=\"padding-bottom:50px;\"><b>What it is</b>: The perfect everyday black mascara</p2><br><br>\r\n<p2><b>Why it\'s special:</b></p2>\r\n<ul>\r\n<li>Curls and sculpts as it lengthens, creating a natural “baby extension” effect without clumping</li>\r\n<li>Teeny-tiny fibers coat lashes from root to tip, while flexible film-forming polymers lift and lock each fiber into place</li>\r\n<li>Water-resistant (not waterproof), so it washes off easily with warm water or Milky Oil at the end of your day</li>\r\n</ul> \r\n<p2 style=\"margin-left:10px;\"><b>Good to know:</b> cruelty free, paraben free, fragrance free, hypoallergenic, allergy tested, dermatologist tested, ophthalmologist tested, suitable for sensitive eyes and contact lens wearers, non-irritating</p2>\r\n<br><br><br>', 0, 76, '2020-09-26 17:34:54', '20570', 'Hay Mohammedi', 0, 8272327, 2, 3, 3, 'Casablanca', 4, '/uploads/10.jpg', '/uploads/13901572_10208511588360125_7430774967484069831_n%20%283%29.jpg,/uploads/9%20%282%29.jpg,/uploads/10%20%281%29.jpg,/uploads/2b06da9b-8784-4bec-a63f-8e702cef3832%20%281%29.jpg,/uploads/Oprah%20loves%20these_.jpg'),
(11, 'PROPERTY 11', '<p2 style=\"padding-bottom:50px;\"><b>What it is</b>: The perfect everyday black mascara</p2><br><br>\r\n<p2><b>Why it\'s special:</b></p2>\r\n<ul>\r\n<li>Curls and sculpts as it lengthens, creating a natural “baby extension” effect without clumping</li>\r\n<li>Teeny-tiny fibers coat lashes from root to tip, while flexible film-forming polymers lift and lock each fiber into place</li>\r\n<li>Water-resistant (not waterproof), so it washes off easily with warm water or Milky Oil at the end of your day</li>\r\n</ul> \r\n<p2 style=\"margin-left:10px;\"><b>Good to know:</b> cruelty free, paraben free, fragrance free, hypoallergenic, allergy tested, dermatologist tested, ophthalmologist tested, suitable for sensitive eyes and contact lens wearers, non-irritating</p2>\r\n<br><br><br>', 0, 92, '2020-09-26 17:35:39', '20570', 'Hay Mohammedi', 0, 2225267, 3, 2, 3, 'Casablanca', 6, '/uploads/11.jpg', '/uploads/13901572_10208511588360125_7430774967484069831_n%20%283%29.jpg,/uploads/9%20%282%29.jpg,/uploads/10%20%281%29.jpg,/uploads/2b06da9b-8784-4bec-a63f-8e702cef3832%20%281%29.jpg,/uploads/Oprah%20loves%20these_.jpg'),
(12, '', '<p2 style=\"padding-bottom:50px;\"><b>What it is</b>: The perfect everyday black mascara</p2><br><br>\r\n', 0, 88, '2020-10-03 18:52:24', '20570', 'Hay Mohammedi', 0, 2537627, 4, 1, 3, 'IZEGAN', 7, '/uploads/12.jpg', '/uploads/13901572_10208511588360125_7430774967484069831_n%20%283%29.jpg,/uploads/9%20%282%29.jpg,/uploads/10%20%281%29.jpg,/uploads/2b06da9b-8784-4bec-a63f-8e702cef3832%20%281%29.jpg,/uploads/Oprah%20loves%20these_.jpg'),
(13, 'First Roomlss', '<p2 style=\"padding-bottom:50px;\"><b>What it is</b>: The perfect everyday black mascara</p2><br><br>\r\n', 0, 66, '2020-10-06 18:01:54', '20570', 'Hay Mohammedi', 0, 5, 4, 4, 4, 'Casablanca', 6, '/uploads/13901572_10208511588360125_7430774967484069831_n.jpg', '/uploads/13901572_10208511588360125_7430774967484069831_n%20%283%29.jpg,/uploads/9%20%282%29.jpg,/uploads/10%20%281%29.jpg,/uploads/2b06da9b-8784-4bec-a63f-8e702cef3832%20%281%29.jpg,/uploads/Oprah%20loves%20these_.jpg'),
(14, 'First RoomYY', '<p2 style=\"padding-bottom:50px;\"><b>What it is</b>: The perfect everyday black mascara</p2><br><br>\r\n', 0, 62, '2020-10-06 18:27:14', '20570', 'Hay Mohammedi', 0, 8778728, 3, 10, 2, 'Casablanca', 7, '/uploads\\cropped/2b06da9b-8784-4bec-a63f-8e702cef3832_crop_5f7c9adea0b91.jpg', '/uploads/13901572_10208511588360125_7430774967484069831_n%20%283%29.jpg,/uploads/9%20%282%29.jpg,/uploads/10%20%281%29.jpg,/uploads/2b06da9b-8784-4bec-a63f-8e702cef3832%20%281%29.jpg,/uploads/Oprah%20loves%20these_.jpg'),
(15, 'First Room5', '<p2 style=\"padding-bottom:50px;\"><b>What it is</b>: The perfect everyday black mascara</p2><br><br>\r\n<p2 style=\"padding-bottom:50px;\"><b>What it is</b>: The perfect everyday black mascara</p2><br><br>\r\n', 0, 20, '2020-10-07 11:07:52', '20570', 'Hay Mohammedi', 0, 287722862, 4, 3, 2, 'Casablanca', 4, '/uploads/2b06da9b-8784-4bec-a63f-8e702cef3832%20%282%29.jpg', '/uploads/13901572_10208511588360125_7430774967484069831_n%20%283%29.jpg,/uploads/9%20%282%29.jpg,/uploads/10%20%281%29.jpg,/uploads/2b06da9b-8784-4bec-a63f-8e702cef3832%20%281%29.jpg,/uploads/Oprah%20loves%20these_.jpg'),
(16, 'MY FIRST PRO', '<p2 style=\"padding-bottom:50px;\"><b>What it is</b>: The perfect everyday black mascara</p2><br><br>\r\n<p2><b>Why it\'s special:</b></p2>\r\n<ul>\r\n<li>Curls and sculpts as it lengthens, creating a natural “baby extension” effect without clumping</li>\r\n<li>Teeny-tiny fibers coat lashes from root to tip, while flexible film-forming polymers lift and lock each fiber into place</li>\r\n<li>Water-resistant (not waterproof), so it washes off easily with warm water or Milky Oil at the end of your day</li>\r\n</ul> \r\n<p2 style=\"margin-left:10px;\"><b>Good to know:</b> cruelty free, paraben free, fragrance free, hypoallergenic, allergy tested, dermatologist tested, ophthalmologist tested, suitable for sensitive eyes and contact lens wearers, non-irritating</p2>\r\n<br><br><br>', 0, 60, '2020-10-07 12:01:11', '20570', 'Hay Mohammedi', 1, 272829979, 5, 4, 4, 'Casablanca', 6, '/uploads\\cropped/23472724_348394525623454_3925933278411260324_n_crop_5f7d91d1e8df6.jpg', '/uploads/13901572_10208511588360125_7430774967484069831_n%20%283%29.jpg,/uploads/9%20%282%29.jpg,/uploads/10%20%281%29.jpg,/uploads/2b06da9b-8784-4bec-a63f-8e702cef3832%20%281%29.jpg,/uploads/Oprah%20loves%20these_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `property_search`
--

CREATE TABLE `property_search` (
  `id` int(11) NOT NULL,
  `max_price` int(11) NOT NULL,
  `min_surface` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `role`) VALUES
(4, 'hamza', '$2y$13$4fEyy9Wp2mKEJEOmlIHm6u65Jt1XFDipWGHHWcptQU0bWeiPfbotS', 'essolamih@gmail.com', NULL),
(6, 'admin', '$2y$13$PsI3HM.YZRiPlaTq0gJIQueiQPFHt4d.lFvaX9jH8U/tIdokZjqSe', 'admin@gmail.com', 'admin'),
(7, 'loubna', '$2y$13$4fEyy9Wp2mKEJEOmlIHm6u65Jt1XFDipWGHHWcptQU0bWeiPfbotS', 'usr@gmail.com', NULL),
(8, 'admin2', '$2y$13$4fEyy9Wp2mKEJEOmlIHm6u65Jt1XFDipWGHHWcptQU0bWeiPfbotS', 'admin2@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_49CA4E7DA76ED395` (`user_id`),
  ADD KEY `IDX_49CA4E7D549213EC` (`property_id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8BF21CDEA76ED395` (`user_id`);

--
-- Indexes for table `property_search`
--
ALTER TABLE `property_search`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `property_search`
--
ALTER TABLE `property_search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `FK_49CA4E7D549213EC` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`),
  ADD CONSTRAINT `FK_49CA4E7DA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `FK_8BF21CDEA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
