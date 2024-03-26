-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2022 at 03:13 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shinetouch`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `email`, `mobile`, `image`, `address`, `city`, `state`, `zip`, `country`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '01791205443', '62d3d198545951658048920.png', 'Dhaka,Bangladesh', 'Dhaka', 'Uttara', '1230', 'Bangladesh', 0, NULL, '$2y$10$lqrk3G9Cj5LaZWr.Ytw0C.QVmr4SxG9iz5AsIsKay9FYrOvymrrRG', NULL, '2022-07-14 01:08:47', '2022-07-17 09:08:40');

-- --------------------------------------------------------

--
-- Table structure for table `admin_notifications`
--

CREATE TABLE `admin_notifications` (
  `id` int(100) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `read_status` tinyint(1) NOT NULL DEFAULT 0,
  `click_url` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_notifications`
--

INSERT INTO `admin_notifications` (`id`, `user_id`, `title`, `read_status`, `click_url`, `created_at`, `updated_at`) VALUES
(1, 3, 'New member registered', 0, '/admin/user/detail/3', '2022-07-19 09:21:57', '2022-07-19 09:21:57'),
(2, 4, 'New member registered', 0, '/admin/user/detail/4', '2022-07-19 09:24:40', '2022-07-19 09:24:40');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `city_id`, `name`, `slug`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(2, 4, 'Appliance Repair', 'appliance-repair', 'icon-tablet', 1, '2022-07-30 15:19:41', '2022-07-31 12:04:18'),
(3, 3, 'Electronics & Gadget', 'electronics-gadget', 'icon-desktop', 1, '2022-07-30 15:20:04', '2022-07-31 12:04:13'),
(4, 1, 'Beauty & Salon', 'beauty-salon', 'icon-comments-smiley', 1, '2022-07-30 15:20:24', '2022-07-31 12:04:09'),
(5, 6, 'Shifting', 'shifting', 'icon-direction-alt', 1, '2022-07-30 15:20:48', '2022-07-31 12:04:03'),
(6, 8, 'Men\'s Care', 'mens-care', 'icon-cut', 1, '2022-07-30 15:21:06', '2022-07-31 12:03:59'),
(7, 9, 'Cleaning', 'cleaning', 'icon-brush', 1, '2022-07-30 15:21:29', '2022-07-31 12:03:54'),
(8, 3, 'Home', 'home', 'icon-home', 1, '2022-07-31 06:07:39', '2022-07-31 12:03:49'),
(9, 3, 'Car', 'car', 'icon-car', 1, '2022-07-31 06:08:02', '2022-07-31 12:03:28');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `country_id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Map of Belgium', 'map-of-belgium', 1, '2022-07-30 10:58:07', '2022-07-30 11:16:27'),
(3, 1, 'Antwerp', 'antwerp', 1, '2022-07-30 11:15:30', '2022-07-30 11:15:30'),
(4, 1, 'Ghent', 'ghent', 1, '2022-07-30 11:16:08', '2022-07-30 11:16:08'),
(5, 1, 'Charleroi', 'charleroi', 1, '2022-07-30 11:16:39', '2022-07-30 11:16:39'),
(6, 1, 'Liège', 'liege', 1, '2022-07-30 11:16:53', '2022-07-30 11:16:53'),
(7, 1, 'Brussels, Capital of Belgium', 'brussels-capital-of-belgium', 0, '2022-07-30 11:17:10', '2022-07-31 14:59:37'),
(8, 1, 'Bruges', 'bruges', 1, '2022-07-30 11:17:34', '2022-07-30 11:17:34'),
(9, 1, 'Namur', 'namur', 1, '2022-07-30 11:17:46', '2022-07-30 11:17:46');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Belgium', 'belgium', 0, '2022-07-30 10:18:36', '2022-07-31 14:54:52'),
(4, 'Canada', 'canada', 1, '2022-07-31 14:49:09', '2022-07-31 14:49:09'),
(5, 'Mexico', 'mexico', 1, '2022-07-31 14:49:19', '2022-07-31 14:49:19'),
(6, 'Austria', 'austria', 1, '2022-07-31 14:49:28', '2022-07-31 14:49:28'),
(7, 'Brazil', 'brazil', 1, '2022-07-31 14:49:35', '2022-07-31 14:49:35'),
(8, 'Turkey', 'turkey', 1, '2022-07-31 14:49:44', '2022-07-31 14:49:44'),
(9, 'Arab Emirates', 'arab-emirates', 1, '2022-07-31 14:49:53', '2022-07-31 14:49:53'),
(10, 'United States', 'united-states', 1, '2022-07-31 14:50:02', '2022-07-31 14:50:02'),
(11, 'United Kingdom', 'united-kingdom', 1, '2022-07-31 14:50:11', '2022-07-31 14:50:11');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_hours`
--

CREATE TABLE `delivery_hours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_time` time DEFAULT NULL,
  `to_time` time DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_hours`
--

INSERT INTO `delivery_hours` (`id`, `title`, `from_time`, `to_time`, `status`, `created_at`, `updated_at`) VALUES
(2, 'First Delivery', '23:00:00', '14:00:00', 1, '2022-07-20 11:53:22', '2022-07-20 12:59:03'),
(3, 'Second Delivery', '16:00:00', '18:00:00', 1, '2022-07-20 11:55:38', '2022-07-20 12:28:28');

-- --------------------------------------------------------

--
-- Table structure for table `email_logs`
--

CREATE TABLE `email_logs` (
  `id` int(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `mail_sender` varchar(255) DEFAULT NULL,
  `email_from` varchar(255) DEFAULT NULL,
  `email_to` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_logs`
--

INSERT INTO `email_logs` (`id`, `user_id`, `mail_sender`, `email_from`, `email_to`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 1, 'smtp', 'Appdevs noreply@kitocard.com', 'md.mehedihasaniubat@gmail.com', 'Reply Support Ticket', '<br><div><table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" bgcolor=\"#414a51\" align=\"center\" style=\"width: 991px; color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;\"><tbody><tr><td height=\"50\"><br></td></tr><tr><td align=\"center\" style=\"text-align: center; vertical-align: top; font-size: 0px;\"><table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td width=\"600\" align=\"center\" style=\"text-align: left;\"><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#0087ff\" align=\"center\" style=\"text-align: center; border-top-left-radius: 6px; border-top-right-radius: 6px; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(255, 255, 255); font-size: 16px; font-weight: bold;\">This is a System Generated Email</td></tr><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr></tbody></table></td></tr></tbody></table><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#FFFFFF\" align=\"center\" style=\"text-align: center; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"35\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; vertical-align: top;\"><img src=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" white-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" dark-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/whiteLogo.png\" alt=\"logo\"><br></td></tr><tr><td height=\"40\" style=\"text-align: left;\"><br><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 22px; color: rgb(65, 74, 81); font-weight: bold;\"><span style=\"margin-bottom: 0px;\">Hello&nbsp;<span style=\"display: inline !important;\">Test User</span>,</span><br></td></tr><tr><td align=\"center\" style=\"vertical-align: top;\"><table width=\"40\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"border-bottom-width: 3px; border-bottom-color: rgb(0, 135, 255);\"><br></td></tr></tbody></table></td></tr><tr><td align=\"left\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(127, 140, 141); font-size: 16px; line-height: 28px;\"><div><p><span style=\"font-size: 11pt;\" data-mce-style=\"font-size: 11pt;\"><strong>A member from our support team has replied to the following ticket:</strong></span></p><p><b><span style=\"font-size: 11pt;\" data-mce-style=\"font-size: 11pt;\"><strong><br></strong></span></b></p><p><b>[Ticket#237211] Help Me<br><br>Click here to reply:&nbsp; http://localhost/appdevs-admin/admin/tickets/view/237211</b></p><p>----------------------------------------------</p><p>Here is the reply : <br></p><p> fghfg<br></p></div><div><br></div></td></tr></tbody></table></td></tr><tr><td height=\"45\" bgcolor=\"#f4f4f4\" align=\"center\" style=\"border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"10\"><br></td></tr><tr><td class=\"preference-link\" align=\"center\" style=\"font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(149, 165, 166); font-size: 14px;\">© 2022 Site. All Rights Reserved by Appdevs</td></tr><tr><td height=\"10\"><br></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr><td height=\"60\"><br></td></tr></tbody></table></div>', '2022-07-18 07:18:38', '2022-07-18 07:18:38'),
(2, 1, 'smtp', 'Appdevs noreply@kitocard.com', 'md.mehedihasaniubat@gmail.com', 'Reply Support Ticket', '<br><div><table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" bgcolor=\"#414a51\" align=\"center\" style=\"width: 991px; color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;\"><tbody><tr><td height=\"50\"><br></td></tr><tr><td align=\"center\" style=\"text-align: center; vertical-align: top; font-size: 0px;\"><table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td width=\"600\" align=\"center\" style=\"text-align: left;\"><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#0087ff\" align=\"center\" style=\"text-align: center; border-top-left-radius: 6px; border-top-right-radius: 6px; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(255, 255, 255); font-size: 16px; font-weight: bold;\">This is a System Generated Email</td></tr><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr></tbody></table></td></tr></tbody></table><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#FFFFFF\" align=\"center\" style=\"text-align: center; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"35\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; vertical-align: top;\"><img src=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" white-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" dark-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/whiteLogo.png\" alt=\"logo\"><br></td></tr><tr><td height=\"40\" style=\"text-align: left;\"><br><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 22px; color: rgb(65, 74, 81); font-weight: bold;\"><span style=\"margin-bottom: 0px;\">Hello&nbsp;<span style=\"display: inline !important;\">Test User</span>,</span><br></td></tr><tr><td align=\"center\" style=\"vertical-align: top;\"><table width=\"40\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"border-bottom-width: 3px; border-bottom-color: rgb(0, 135, 255);\"><br></td></tr></tbody></table></td></tr><tr><td align=\"left\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(127, 140, 141); font-size: 16px; line-height: 28px;\"><div><p><span style=\"font-size: 11pt;\" data-mce-style=\"font-size: 11pt;\"><strong>A member from our support team has replied to the following ticket:</strong></span></p><p><b><span style=\"font-size: 11pt;\" data-mce-style=\"font-size: 11pt;\"><strong><br></strong></span></b></p><p><b>[Ticket#237211] Help Me<br><br>Click here to reply:&nbsp; http://localhost/appdevs-admin/admin/tickets/view/237211</b></p><p>----------------------------------------------</p><p>Here is the reply : <br></p><p> vv<br></p></div><div><br></div></td></tr></tbody></table></td></tr><tr><td height=\"45\" bgcolor=\"#f4f4f4\" align=\"center\" style=\"border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"10\"><br></td></tr><tr><td class=\"preference-link\" align=\"center\" style=\"font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(149, 165, 166); font-size: 14px;\">© 2022 Site. All Rights Reserved by Appdevs</td></tr><tr><td height=\"10\"><br></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr><td height=\"60\"><br></td></tr></tbody></table></div>', '2022-07-18 07:58:53', '2022-07-18 07:58:53'),
(3, 1, 'smtp', 'Shinetouch noreply@kitocard.com', 'testuser@gmail.com', 'Please verify your email address', '<br><div><table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" bgcolor=\"#414a51\" align=\"center\" style=\"width: 991px; color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;\"><tbody><tr><td height=\"50\"><br></td></tr><tr><td align=\"center\" style=\"text-align: center; vertical-align: top; font-size: 0px;\"><table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td width=\"600\" align=\"center\" style=\"text-align: left;\"><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#0087ff\" align=\"center\" style=\"text-align: center; border-top-left-radius: 6px; border-top-right-radius: 6px; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(255, 255, 255); font-size: 16px; font-weight: bold;\">This is a System Generated Email</td></tr><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr></tbody></table></td></tr></tbody></table><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#FFFFFF\" align=\"center\" style=\"text-align: center; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"35\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; vertical-align: top;\"><img src=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" white-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" dark-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/whiteLogo.png\" alt=\"logo\"><br></td></tr><tr><td height=\"40\" style=\"text-align: left;\"><br><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 22px; color: rgb(65, 74, 81); font-weight: bold;\"><span style=\"margin-bottom: 0px;\">Hello&nbsp;<span style=\"display: inline !important;\">Test User</span>,</span><br></td></tr><tr><td align=\"center\" style=\"vertical-align: top;\"><table width=\"40\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"border-bottom-width: 3px; border-bottom-color: rgb(0, 135, 255);\"><br></td></tr></tbody></table></td></tr><tr><td align=\"left\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(127, 140, 141); font-size: 16px; line-height: 28px;\"><div><br></div><div>Thanks For join with us. <br></div><div>Please use below code to verify your email address.<br></div><div><br></div><div>Your email verification code is:<font size=\"6\"><b> 123970</b></font></div></td></tr></tbody></table></td></tr><tr><td height=\"45\" bgcolor=\"#f4f4f4\" align=\"center\" style=\"border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"10\"><br></td></tr><tr><td class=\"preference-link\" align=\"center\" style=\"font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(149, 165, 166); font-size: 14px;\">© 2022 Site. All Rights Reserved by Appdevs</td></tr><tr><td height=\"10\"><br></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr><td height=\"60\"><br></td></tr></tbody></table></div>', '2022-07-19 05:00:59', '2022-07-19 05:00:59'),
(4, 1, 'smtp', 'Shinetouch noreply@kitocard.com', 'testuser@gmail.com', 'Please verify your email address', '<br><div><table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" bgcolor=\"#414a51\" align=\"center\" style=\"width: 991px; color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;\"><tbody><tr><td height=\"50\"><br></td></tr><tr><td align=\"center\" style=\"text-align: center; vertical-align: top; font-size: 0px;\"><table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td width=\"600\" align=\"center\" style=\"text-align: left;\"><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#0087ff\" align=\"center\" style=\"text-align: center; border-top-left-radius: 6px; border-top-right-radius: 6px; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(255, 255, 255); font-size: 16px; font-weight: bold;\">This is a System Generated Email</td></tr><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr></tbody></table></td></tr></tbody></table><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#FFFFFF\" align=\"center\" style=\"text-align: center; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"35\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; vertical-align: top;\"><img src=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" white-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" dark-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/whiteLogo.png\" alt=\"logo\"><br></td></tr><tr><td height=\"40\" style=\"text-align: left;\"><br><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 22px; color: rgb(65, 74, 81); font-weight: bold;\"><span style=\"margin-bottom: 0px;\">Hello&nbsp;<span style=\"display: inline !important;\">Test User</span>,</span><br></td></tr><tr><td align=\"center\" style=\"vertical-align: top;\"><table width=\"40\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"border-bottom-width: 3px; border-bottom-color: rgb(0, 135, 255);\"><br></td></tr></tbody></table></td></tr><tr><td align=\"left\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(127, 140, 141); font-size: 16px; line-height: 28px;\"><div><br></div><div>Thanks For join with us. <br></div><div>Please use below code to verify your email address.<br></div><div><br></div><div>Your email verification code is:<font size=\"6\"><b> 123970</b></font></div></td></tr></tbody></table></td></tr><tr><td height=\"45\" bgcolor=\"#f4f4f4\" align=\"center\" style=\"border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"10\"><br></td></tr><tr><td class=\"preference-link\" align=\"center\" style=\"font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(149, 165, 166); font-size: 14px;\">© 2022 Site. All Rights Reserved by Appdevs</td></tr><tr><td height=\"10\"><br></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr><td height=\"60\"><br></td></tr></tbody></table></div>', '2022-07-19 05:11:54', '2022-07-19 05:11:54'),
(5, 1, 'smtp', 'Shinetouch noreply@kitocard.com', 'md.mehedihasaniubat@gmail.com', 'Please verify your email address', '<br><div><table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" bgcolor=\"#414a51\" align=\"center\" style=\"width: 991px; color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;\"><tbody><tr><td height=\"50\"><br></td></tr><tr><td align=\"center\" style=\"text-align: center; vertical-align: top; font-size: 0px;\"><table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td width=\"600\" align=\"center\" style=\"text-align: left;\"><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#0087ff\" align=\"center\" style=\"text-align: center; border-top-left-radius: 6px; border-top-right-radius: 6px; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(255, 255, 255); font-size: 16px; font-weight: bold;\">This is a System Generated Email</td></tr><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr></tbody></table></td></tr></tbody></table><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#FFFFFF\" align=\"center\" style=\"text-align: center; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"35\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; vertical-align: top;\"><img src=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" white-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" dark-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/whiteLogo.png\" alt=\"logo\"><br></td></tr><tr><td height=\"40\" style=\"text-align: left;\"><br><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 22px; color: rgb(65, 74, 81); font-weight: bold;\"><span style=\"margin-bottom: 0px;\">Hello&nbsp;<span style=\"display: inline !important;\">Test User</span>,</span><br></td></tr><tr><td align=\"center\" style=\"vertical-align: top;\"><table width=\"40\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"border-bottom-width: 3px; border-bottom-color: rgb(0, 135, 255);\"><br></td></tr></tbody></table></td></tr><tr><td align=\"left\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(127, 140, 141); font-size: 16px; line-height: 28px;\"><div><br></div><div>Thanks For join with us. <br></div><div>Please use below code to verify your email address.<br></div><div><br></div><div>Your email verification code is:<font size=\"6\"><b> 259683</b></font></div></td></tr></tbody></table></td></tr><tr><td height=\"45\" bgcolor=\"#f4f4f4\" align=\"center\" style=\"border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"10\"><br></td></tr><tr><td class=\"preference-link\" align=\"center\" style=\"font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(149, 165, 166); font-size: 14px;\">© 2022 Site. All Rights Reserved by Appdevs</td></tr><tr><td height=\"10\"><br></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr><td height=\"60\"><br></td></tr></tbody></table></div>', '2022-07-19 05:23:44', '2022-07-19 05:23:44'),
(6, 1, 'smtp', 'Shinetouch noreply@kitocard.com', 'md.mehedihasaniubat@gmail.com', 'Please verify your email address', '<br><div><table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" bgcolor=\"#414a51\" align=\"center\" style=\"width: 991px; color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;\"><tbody><tr><td height=\"50\"><br></td></tr><tr><td align=\"center\" style=\"text-align: center; vertical-align: top; font-size: 0px;\"><table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td width=\"600\" align=\"center\" style=\"text-align: left;\"><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#0087ff\" align=\"center\" style=\"text-align: center; border-top-left-radius: 6px; border-top-right-radius: 6px; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(255, 255, 255); font-size: 16px; font-weight: bold;\">This is a System Generated Email</td></tr><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr></tbody></table></td></tr></tbody></table><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#FFFFFF\" align=\"center\" style=\"text-align: center; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"35\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; vertical-align: top;\"><img src=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" white-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" dark-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/whiteLogo.png\" alt=\"logo\"><br></td></tr><tr><td height=\"40\" style=\"text-align: left;\"><br><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 22px; color: rgb(65, 74, 81); font-weight: bold;\"><span style=\"margin-bottom: 0px;\">Hello&nbsp;<span style=\"display: inline !important;\">Test User</span>,</span><br></td></tr><tr><td align=\"center\" style=\"vertical-align: top;\"><table width=\"40\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"border-bottom-width: 3px; border-bottom-color: rgb(0, 135, 255);\"><br></td></tr></tbody></table></td></tr><tr><td align=\"left\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(127, 140, 141); font-size: 16px; line-height: 28px;\"><div><br></div><div>Thanks For join with us. <br></div><div>Please use below code to verify your email address.<br></div><div><br></div><div>Your email verification code is:<font size=\"6\"><b> 259683</b></font></div></td></tr></tbody></table></td></tr><tr><td height=\"45\" bgcolor=\"#f4f4f4\" align=\"center\" style=\"border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"10\"><br></td></tr><tr><td class=\"preference-link\" align=\"center\" style=\"font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(149, 165, 166); font-size: 14px;\">© 2022 Site. All Rights Reserved by Appdevs</td></tr><tr><td height=\"10\"><br></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr><td height=\"60\"><br></td></tr></tbody></table></div>', '2022-07-19 05:26:09', '2022-07-19 05:26:09'),
(7, 1, 'smtp', 'Shinetouch noreply@kitocard.com', 'md.mehedihasaniubat@gmail.com', 'Password Reset', '<br><div><table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" bgcolor=\"#414a51\" align=\"center\" style=\"width: 991px; color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;\"><tbody><tr><td height=\"50\"><br></td></tr><tr><td align=\"center\" style=\"text-align: center; vertical-align: top; font-size: 0px;\"><table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td width=\"600\" align=\"center\" style=\"text-align: left;\"><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#0087ff\" align=\"center\" style=\"text-align: center; border-top-left-radius: 6px; border-top-right-radius: 6px; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(255, 255, 255); font-size: 16px; font-weight: bold;\">This is a System Generated Email</td></tr><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr></tbody></table></td></tr></tbody></table><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#FFFFFF\" align=\"center\" style=\"text-align: center; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"35\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; vertical-align: top;\"><img src=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" white-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" dark-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/whiteLogo.png\" alt=\"logo\"><br></td></tr><tr><td height=\"40\" style=\"text-align: left;\"><br><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 22px; color: rgb(65, 74, 81); font-weight: bold;\"><span style=\"margin-bottom: 0px;\">Hello&nbsp;<span style=\"display: inline !important;\">Test User</span>,</span><br></td></tr><tr><td align=\"center\" style=\"vertical-align: top;\"><table width=\"40\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"border-bottom-width: 3px; border-bottom-color: rgb(0, 135, 255);\"><br></td></tr></tbody></table></td></tr><tr><td align=\"left\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(127, 140, 141); font-size: 16px; line-height: 28px;\"><div>We have received a request to reset the password for your account on <b>19-07-2022 12:44:09 PM .<br></b></div><div>Requested From IP: <b>::1</b> using <b>Chrome</b> on <b>Windows 10 </b>.</div><div><br></div><br><div><div><div>Your account recovery code is:&nbsp;&nbsp; <font size=\"6\"><b>632260</b></font></div><div><br></div></div></div><div><br></div><div><font size=\"4\" color=\"#CC0000\">If you do not wish to reset your password, please disregard this message.&nbsp;</font><br></div><br></td></tr></tbody></table></td></tr><tr><td height=\"45\" bgcolor=\"#f4f4f4\" align=\"center\" style=\"border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"10\"><br></td></tr><tr><td class=\"preference-link\" align=\"center\" style=\"font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(149, 165, 166); font-size: 14px;\">© 2022 Site. All Rights Reserved by Appdevs</td></tr><tr><td height=\"10\"><br></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr><td height=\"60\"><br></td></tr></tbody></table></div>', '2022-07-19 06:44:09', '2022-07-19 06:44:09'),
(8, 1, 'smtp', 'Shinetouch noreply@kitocard.com', 'md.mehedihasaniubat@gmail.com', 'Password Reset', '<br><div><table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" bgcolor=\"#414a51\" align=\"center\" style=\"width: 991px; color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;\"><tbody><tr><td height=\"50\"><br></td></tr><tr><td align=\"center\" style=\"text-align: center; vertical-align: top; font-size: 0px;\"><table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td width=\"600\" align=\"center\" style=\"text-align: left;\"><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#0087ff\" align=\"center\" style=\"text-align: center; border-top-left-radius: 6px; border-top-right-radius: 6px; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(255, 255, 255); font-size: 16px; font-weight: bold;\">This is a System Generated Email</td></tr><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr></tbody></table></td></tr></tbody></table><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#FFFFFF\" align=\"center\" style=\"text-align: center; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"35\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; vertical-align: top;\"><img src=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" white-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" dark-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/whiteLogo.png\" alt=\"logo\"><br></td></tr><tr><td height=\"40\" style=\"text-align: left;\"><br><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 22px; color: rgb(65, 74, 81); font-weight: bold;\"><span style=\"margin-bottom: 0px;\">Hello&nbsp;<span style=\"display: inline !important;\">Test User</span>,</span><br></td></tr><tr><td align=\"center\" style=\"vertical-align: top;\"><table width=\"40\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"border-bottom-width: 3px; border-bottom-color: rgb(0, 135, 255);\"><br></td></tr></tbody></table></td></tr><tr><td align=\"left\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(127, 140, 141); font-size: 16px; line-height: 28px;\"><div>We have received a request to reset the password for your account on <b>19-07-2022 01:07:47 PM .<br></b></div><div>Requested From IP: <b>::1</b> using <b>Chrome</b> on <b>Windows 10 </b>.</div><div><br></div><br><div><div><div>Your account recovery code is:&nbsp;&nbsp; <font size=\"6\"><b>828640</b></font></div><div><br></div></div></div><div><br></div><div><font size=\"4\" color=\"#CC0000\">If you do not wish to reset your password, please disregard this message.&nbsp;</font><br></div><br></td></tr></tbody></table></td></tr><tr><td height=\"45\" bgcolor=\"#f4f4f4\" align=\"center\" style=\"border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"10\"><br></td></tr><tr><td class=\"preference-link\" align=\"center\" style=\"font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(149, 165, 166); font-size: 14px;\">© 2022 Site. All Rights Reserved by Appdevs</td></tr><tr><td height=\"10\"><br></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr><td height=\"60\"><br></td></tr></tbody></table></div>', '2022-07-19 07:07:47', '2022-07-19 07:07:47'),
(9, 1, 'smtp', 'Shinetouch noreply@kitocard.com', 'md.mehedihasaniubat@gmail.com', 'Password Reset', '<br><div><table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" bgcolor=\"#414a51\" align=\"center\" style=\"width: 991px; color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;\"><tbody><tr><td height=\"50\"><br></td></tr><tr><td align=\"center\" style=\"text-align: center; vertical-align: top; font-size: 0px;\"><table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td width=\"600\" align=\"center\" style=\"text-align: left;\"><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#0087ff\" align=\"center\" style=\"text-align: center; border-top-left-radius: 6px; border-top-right-radius: 6px; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(255, 255, 255); font-size: 16px; font-weight: bold;\">This is a System Generated Email</td></tr><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr></tbody></table></td></tr></tbody></table><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#FFFFFF\" align=\"center\" style=\"text-align: center; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"35\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; vertical-align: top;\"><img src=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" white-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" dark-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/whiteLogo.png\" alt=\"logo\"><br></td></tr><tr><td height=\"40\" style=\"text-align: left;\"><br><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 22px; color: rgb(65, 74, 81); font-weight: bold;\"><span style=\"margin-bottom: 0px;\">Hello&nbsp;<span style=\"display: inline !important;\">Test User</span>,</span><br></td></tr><tr><td align=\"center\" style=\"vertical-align: top;\"><table width=\"40\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"border-bottom-width: 3px; border-bottom-color: rgb(0, 135, 255);\"><br></td></tr></tbody></table></td></tr><tr><td align=\"left\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(127, 140, 141); font-size: 16px; line-height: 28px;\"><div>We have received a request to reset the password for your account on <b>19-07-2022 01:19:27 PM .<br></b></div><div>Requested From IP: <b>::1</b> using <b>Chrome</b> on <b>Windows 10 </b>.</div><div><br></div><br><div><div><div>Your account recovery code is:&nbsp;&nbsp; <font size=\"6\"><b>169342</b></font></div><div><br></div></div></div><div><br></div><div><font size=\"4\" color=\"#CC0000\">If you do not wish to reset your password, please disregard this message.&nbsp;</font><br></div><br></td></tr></tbody></table></td></tr><tr><td height=\"45\" bgcolor=\"#f4f4f4\" align=\"center\" style=\"border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"10\"><br></td></tr><tr><td class=\"preference-link\" align=\"center\" style=\"font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(149, 165, 166); font-size: 14px;\">© 2022 Site. All Rights Reserved by Appdevs</td></tr><tr><td height=\"10\"><br></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr><td height=\"60\"><br></td></tr></tbody></table></div>', '2022-07-19 07:19:27', '2022-07-19 07:19:27'),
(10, 1, 'smtp', 'Shinetouch noreply@kitocard.com', 'md.mehedihasaniubat@gmail.com', 'You have Reset your password', '<br><div><table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" bgcolor=\"#414a51\" align=\"center\" style=\"width: 991px; color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;\"><tbody><tr><td height=\"50\"><br></td></tr><tr><td align=\"center\" style=\"text-align: center; vertical-align: top; font-size: 0px;\"><table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td width=\"600\" align=\"center\" style=\"text-align: left;\"><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#0087ff\" align=\"center\" style=\"text-align: center; border-top-left-radius: 6px; border-top-right-radius: 6px; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(255, 255, 255); font-size: 16px; font-weight: bold;\">This is a System Generated Email</td></tr><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr></tbody></table></td></tr></tbody></table><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#FFFFFF\" align=\"center\" style=\"text-align: center; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"35\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; vertical-align: top;\"><img src=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" white-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" dark-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/whiteLogo.png\" alt=\"logo\"><br></td></tr><tr><td height=\"40\" style=\"text-align: left;\"><br><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 22px; color: rgb(65, 74, 81); font-weight: bold;\"><span style=\"margin-bottom: 0px;\">Hello&nbsp;<span style=\"display: inline !important;\">Test User</span>,</span><br></td></tr><tr><td align=\"center\" style=\"vertical-align: top;\"><table width=\"40\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"border-bottom-width: 3px; border-bottom-color: rgb(0, 135, 255);\"><br></td></tr></tbody></table></td></tr><tr><td align=\"left\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(127, 140, 141); font-size: 16px; line-height: 28px;\"><div><p>\r\n    You have successfully reset your password.</p><p>You changed from&nbsp; IP: <b>::1</b> using <b>Chrome</b> on <b>Windows 10&nbsp;</b> on <b>19-07-2022 01:20:10 PM</b></p><p><b><br></b></p><p><font color=\"#FF0000\"><b>If you did not changed that, Please contact with us as soon as possible.</b></font><br></p></div></td></tr></tbody></table></td></tr><tr><td height=\"45\" bgcolor=\"#f4f4f4\" align=\"center\" style=\"border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"10\"><br></td></tr><tr><td class=\"preference-link\" align=\"center\" style=\"font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(149, 165, 166); font-size: 14px;\">© 2022 Site. All Rights Reserved by Appdevs</td></tr><tr><td height=\"10\"><br></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr><td height=\"60\"><br></td></tr></tbody></table></div>', '2022-07-19 07:20:10', '2022-07-19 07:20:10'),
(11, 1, 'smtp', 'Shinetouch noreply@kitocard.com', 'md.mehedihasaniubat@gmail.com', 'Password Reset', '<br><div><table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" bgcolor=\"#414a51\" align=\"center\" style=\"width: 991px; color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;\"><tbody><tr><td height=\"50\"><br></td></tr><tr><td align=\"center\" style=\"text-align: center; vertical-align: top; font-size: 0px;\"><table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td width=\"600\" align=\"center\" style=\"text-align: left;\"><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#0087ff\" align=\"center\" style=\"text-align: center; border-top-left-radius: 6px; border-top-right-radius: 6px; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(255, 255, 255); font-size: 16px; font-weight: bold;\">This is a System Generated Email</td></tr><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr></tbody></table></td></tr></tbody></table><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#FFFFFF\" align=\"center\" style=\"text-align: center; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"35\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; vertical-align: top;\"><img src=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" white-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" dark-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/whiteLogo.png\" alt=\"logo\"><br></td></tr><tr><td height=\"40\" style=\"text-align: left;\"><br><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 22px; color: rgb(65, 74, 81); font-weight: bold;\"><span style=\"margin-bottom: 0px;\">Hello&nbsp;<span style=\"display: inline !important;\">Test User</span>,</span><br></td></tr><tr><td align=\"center\" style=\"vertical-align: top;\"><table width=\"40\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"border-bottom-width: 3px; border-bottom-color: rgb(0, 135, 255);\"><br></td></tr></tbody></table></td></tr><tr><td align=\"left\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(127, 140, 141); font-size: 16px; line-height: 28px;\"><div>We have received a request to reset the password for your account on <b>19-07-2022 01:21:49 PM .<br></b></div><div>Requested From IP: <b>::1</b> using <b>Chrome</b> on <b>Windows 10 </b>.</div><div><br></div><br><div><div><div>Your account recovery code is:&nbsp;&nbsp; <font size=\"6\"><b>492280</b></font></div><div><br></div></div></div><div><br></div><div><font size=\"4\" color=\"#CC0000\">If you do not wish to reset your password, please disregard this message.&nbsp;</font><br></div><br></td></tr></tbody></table></td></tr><tr><td height=\"45\" bgcolor=\"#f4f4f4\" align=\"center\" style=\"border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"10\"><br></td></tr><tr><td class=\"preference-link\" align=\"center\" style=\"font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(149, 165, 166); font-size: 14px;\">© 2022 Site. All Rights Reserved by Appdevs</td></tr><tr><td height=\"10\"><br></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr><td height=\"60\"><br></td></tr></tbody></table></div>', '2022-07-19 07:21:49', '2022-07-19 07:21:49'),
(12, 1, 'smtp', 'Shinetouch noreply@kitocard.com', 'md.mehedihasaniubat@gmail.com', 'You have Reset your password', '<br><div><table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" bgcolor=\"#414a51\" align=\"center\" style=\"width: 991px; color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;\"><tbody><tr><td height=\"50\"><br></td></tr><tr><td align=\"center\" style=\"text-align: center; vertical-align: top; font-size: 0px;\"><table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td width=\"600\" align=\"center\" style=\"text-align: left;\"><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#0087ff\" align=\"center\" style=\"text-align: center; border-top-left-radius: 6px; border-top-right-radius: 6px; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(255, 255, 255); font-size: 16px; font-weight: bold;\">This is a System Generated Email</td></tr><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr></tbody></table></td></tr></tbody></table><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#FFFFFF\" align=\"center\" style=\"text-align: center; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"35\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; vertical-align: top;\"><img src=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" white-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" dark-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/whiteLogo.png\" alt=\"logo\"><br></td></tr><tr><td height=\"40\" style=\"text-align: left;\"><br><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 22px; color: rgb(65, 74, 81); font-weight: bold;\"><span style=\"margin-bottom: 0px;\">Hello&nbsp;<span style=\"display: inline !important;\">Test User</span>,</span><br></td></tr><tr><td align=\"center\" style=\"vertical-align: top;\"><table width=\"40\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"border-bottom-width: 3px; border-bottom-color: rgb(0, 135, 255);\"><br></td></tr></tbody></table></td></tr><tr><td align=\"left\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(127, 140, 141); font-size: 16px; line-height: 28px;\"><div><p>\r\n    You have successfully reset your password.</p><p>You changed from&nbsp; IP: <b>::1</b> using <b>Chrome</b> on <b>Windows 10&nbsp;</b> on <b>19-07-2022 01:22:41 PM</b></p><p><b><br></b></p><p><font color=\"#FF0000\"><b>If you did not changed that, Please contact with us as soon as possible.</b></font><br></p></div></td></tr></tbody></table></td></tr><tr><td height=\"45\" bgcolor=\"#f4f4f4\" align=\"center\" style=\"border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"10\"><br></td></tr><tr><td class=\"preference-link\" align=\"center\" style=\"font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(149, 165, 166); font-size: 14px;\">© 2022 Site. All Rights Reserved by Appdevs</td></tr><tr><td height=\"10\"><br></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr><td height=\"60\"><br></td></tr></tbody></table></div>', '2022-07-19 07:22:41', '2022-07-19 07:22:41');
INSERT INTO `email_logs` (`id`, `user_id`, `mail_sender`, `email_from`, `email_to`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(13, 1, 'smtp', 'Shinetouch noreply@kitocard.com', 'md.mehedihasaniubat@gmail.com', 'Password Reset', '<br><div><table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" bgcolor=\"#414a51\" align=\"center\" style=\"width: 991px; color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;\"><tbody><tr><td height=\"50\"><br></td></tr><tr><td align=\"center\" style=\"text-align: center; vertical-align: top; font-size: 0px;\"><table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td width=\"600\" align=\"center\" style=\"text-align: left;\"><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#0087ff\" align=\"center\" style=\"text-align: center; border-top-left-radius: 6px; border-top-right-radius: 6px; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(255, 255, 255); font-size: 16px; font-weight: bold;\">This is a System Generated Email</td></tr><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr></tbody></table></td></tr></tbody></table><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#FFFFFF\" align=\"center\" style=\"text-align: center; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"35\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; vertical-align: top;\"><img src=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" white-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" dark-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/whiteLogo.png\" alt=\"logo\"><br></td></tr><tr><td height=\"40\" style=\"text-align: left;\"><br><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 22px; color: rgb(65, 74, 81); font-weight: bold;\"><span style=\"margin-bottom: 0px;\">Hello&nbsp;<span style=\"display: inline !important;\">Test User</span>,</span><br></td></tr><tr><td align=\"center\" style=\"vertical-align: top;\"><table width=\"40\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"border-bottom-width: 3px; border-bottom-color: rgb(0, 135, 255);\"><br></td></tr></tbody></table></td></tr><tr><td align=\"left\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(127, 140, 141); font-size: 16px; line-height: 28px;\"><div>We have received a request to reset the password for your account on <b>19-07-2022 01:27:05 PM .<br></b></div><div>Requested From IP: <b>::1</b> using <b>Chrome</b> on <b>Windows 10 </b>.</div><div><br></div><br><div><div><div>Your account recovery code is:&nbsp;&nbsp; <font size=\"6\"><b>878496</b></font></div><div><br></div></div></div><div><br></div><div><font size=\"4\" color=\"#CC0000\">If you do not wish to reset your password, please disregard this message.&nbsp;</font><br></div><br></td></tr></tbody></table></td></tr><tr><td height=\"45\" bgcolor=\"#f4f4f4\" align=\"center\" style=\"border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"10\"><br></td></tr><tr><td class=\"preference-link\" align=\"center\" style=\"font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(149, 165, 166); font-size: 14px;\">© 2022 Site. All Rights Reserved by Appdevs</td></tr><tr><td height=\"10\"><br></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr><td height=\"60\"><br></td></tr></tbody></table></div>', '2022-07-19 07:27:05', '2022-07-19 07:27:05'),
(14, 1, 'smtp', 'Shinetouch noreply@kitocard.com', 'md.mehedihasaniubat@gmail.com', 'You have Reset your password', '<br><div><table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" bgcolor=\"#414a51\" align=\"center\" style=\"width: 991px; color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;\"><tbody><tr><td height=\"50\"><br></td></tr><tr><td align=\"center\" style=\"text-align: center; vertical-align: top; font-size: 0px;\"><table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td width=\"600\" align=\"center\" style=\"text-align: left;\"><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#0087ff\" align=\"center\" style=\"text-align: center; border-top-left-radius: 6px; border-top-right-radius: 6px; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(255, 255, 255); font-size: 16px; font-weight: bold;\">This is a System Generated Email</td></tr><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr></tbody></table></td></tr></tbody></table><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#FFFFFF\" align=\"center\" style=\"text-align: center; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"35\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; vertical-align: top;\"><img src=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" white-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" dark-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/whiteLogo.png\" alt=\"logo\"><br></td></tr><tr><td height=\"40\" style=\"text-align: left;\"><br><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 22px; color: rgb(65, 74, 81); font-weight: bold;\"><span style=\"margin-bottom: 0px;\">Hello&nbsp;<span style=\"display: inline !important;\">Test User</span>,</span><br></td></tr><tr><td align=\"center\" style=\"vertical-align: top;\"><table width=\"40\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"border-bottom-width: 3px; border-bottom-color: rgb(0, 135, 255);\"><br></td></tr></tbody></table></td></tr><tr><td align=\"left\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(127, 140, 141); font-size: 16px; line-height: 28px;\"><div><p>\r\n    You have successfully reset your password.</p><p>You changed from&nbsp; IP: <b>::1</b> using <b>Chrome</b> on <b>Windows 10&nbsp;</b> on <b>19-07-2022 01:28:03 PM</b></p><p><b><br></b></p><p><font color=\"#FF0000\"><b>If you did not changed that, Please contact with us as soon as possible.</b></font><br></p></div></td></tr></tbody></table></td></tr><tr><td height=\"45\" bgcolor=\"#f4f4f4\" align=\"center\" style=\"border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"10\"><br></td></tr><tr><td class=\"preference-link\" align=\"center\" style=\"font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(149, 165, 166); font-size: 14px;\">© 2022 Site. All Rights Reserved by Appdevs</td></tr><tr><td height=\"10\"><br></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr><td height=\"60\"><br></td></tr></tbody></table></div>', '2022-07-19 07:28:03', '2022-07-19 07:28:03'),
(15, 3, 'smtp', 'Shinetouch noreply@kitocard.com', 'mh.ayon222@gmail.com', 'Please verify your email address', '<br><div><table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" bgcolor=\"#414a51\" align=\"center\" style=\"width: 991px; color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;\"><tbody><tr><td height=\"50\"><br></td></tr><tr><td align=\"center\" style=\"text-align: center; vertical-align: top; font-size: 0px;\"><table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td width=\"600\" align=\"center\" style=\"text-align: left;\"><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#0087ff\" align=\"center\" style=\"text-align: center; border-top-left-radius: 6px; border-top-right-radius: 6px; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(255, 255, 255); font-size: 16px; font-weight: bold;\">This is a System Generated Email</td></tr><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr></tbody></table></td></tr></tbody></table><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#FFFFFF\" align=\"center\" style=\"text-align: center; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"35\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; vertical-align: top;\"><img src=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" white-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" dark-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/whiteLogo.png\" alt=\"logo\"><br></td></tr><tr><td height=\"40\" style=\"text-align: left;\"><br><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 22px; color: rgb(65, 74, 81); font-weight: bold;\"><span style=\"margin-bottom: 0px;\">Hello&nbsp;<span style=\"display: inline !important;\"> Hasan</span>,</span><br></td></tr><tr><td align=\"center\" style=\"vertical-align: top;\"><table width=\"40\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"border-bottom-width: 3px; border-bottom-color: rgb(0, 135, 255);\"><br></td></tr></tbody></table></td></tr><tr><td align=\"left\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(127, 140, 141); font-size: 16px; line-height: 28px;\"><div><br></div><div>Thanks For join with us. <br></div><div>Please use below code to verify your email address.<br></div><div><br></div><div>Your email verification code is:<font size=\"6\"><b> 576510</b></font></div></td></tr></tbody></table></td></tr><tr><td height=\"45\" bgcolor=\"#f4f4f4\" align=\"center\" style=\"border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"10\"><br></td></tr><tr><td class=\"preference-link\" align=\"center\" style=\"font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(149, 165, 166); font-size: 14px;\">© 2022 Site. All Rights Reserved by Appdevs</td></tr><tr><td height=\"10\"><br></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr><td height=\"60\"><br></td></tr></tbody></table></div>', '2022-07-19 09:21:58', '2022-07-19 09:21:58'),
(16, 4, 'smtp', 'Shinetouch noreply@kitocard.com', 'mh.ayon222@gmail.com', 'Please verify your email address', '<br><div><table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" bgcolor=\"#414a51\" align=\"center\" style=\"width: 991px; color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;\"><tbody><tr><td height=\"50\"><br></td></tr><tr><td align=\"center\" style=\"text-align: center; vertical-align: top; font-size: 0px;\"><table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td width=\"600\" align=\"center\" style=\"text-align: left;\"><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#0087ff\" align=\"center\" style=\"text-align: center; border-top-left-radius: 6px; border-top-right-radius: 6px; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(255, 255, 255); font-size: 16px; font-weight: bold;\">This is a System Generated Email</td></tr><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr></tbody></table></td></tr></tbody></table><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#FFFFFF\" align=\"center\" style=\"text-align: center; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"35\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; vertical-align: top;\"><img src=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" white-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" dark-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/whiteLogo.png\" alt=\"logo\"><br></td></tr><tr><td height=\"40\" style=\"text-align: left;\"><br><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 22px; color: rgb(65, 74, 81); font-weight: bold;\"><span style=\"margin-bottom: 0px;\">Hello&nbsp;<span style=\"display: inline !important;\">Mehedi Hasan</span>,</span><br></td></tr><tr><td align=\"center\" style=\"vertical-align: top;\"><table width=\"40\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"border-bottom-width: 3px; border-bottom-color: rgb(0, 135, 255);\"><br></td></tr></tbody></table></td></tr><tr><td align=\"left\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(127, 140, 141); font-size: 16px; line-height: 28px;\"><div><br></div><div>Thanks For join with us. <br></div><div>Please use below code to verify your email address.<br></div><div><br></div><div>Your email verification code is:<font size=\"6\"><b> 894502</b></font></div></td></tr></tbody></table></td></tr><tr><td height=\"45\" bgcolor=\"#f4f4f4\" align=\"center\" style=\"border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"10\"><br></td></tr><tr><td class=\"preference-link\" align=\"center\" style=\"font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(149, 165, 166); font-size: 14px;\">© 2022 Site. All Rights Reserved by Appdevs</td></tr><tr><td height=\"10\"><br></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr><td height=\"60\"><br></td></tr></tbody></table></div>', '2022-07-19 09:24:41', '2022-07-19 09:24:41');

-- --------------------------------------------------------

--
-- Table structure for table `email_sms_templates`
--

CREATE TABLE `email_sms_templates` (
  `id` int(100) NOT NULL,
  `act` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subj` varchar(255) NOT NULL,
  `email_body` text DEFAULT NULL,
  `sms_body` text DEFAULT NULL,
  `shortcodes` text NOT NULL,
  `email_status` tinyint(1) NOT NULL DEFAULT 1,
  `sms_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_sms_templates`
--

INSERT INTO `email_sms_templates` (`id`, `act`, `name`, `subj`, `email_body`, `sms_body`, `shortcodes`, `email_status`, `sms_status`, `created_at`, `updated_at`) VALUES
(1, 'PASS_RESET_CODE', 'Password Reset', 'Password Reset', '<div>We have received a request to reset the password for your account on <b>{{time}} .<br></b></div><div>Requested From IP: <b>{{ip}}</b> using <b>{{browser}}</b> on <b>{{operating_system}} </b>.</div><div><br></div><br><div><div><div>Your account recovery code is:&nbsp;&nbsp; <font size=\"6\"><b>{{code}}</b></font></div><div><br></div></div></div><div><br></div><div><font size=\"4\" color=\"#CC0000\">If you do not wish to reset your password, please disregard this message.&nbsp;</font><br></div><br>', 'Your account recovery code is: {{code}}', ' {\"code\":\"Password Reset Code\",\"ip\":\"IP of User\",\"browser\":\"Browser of User\",\"operating_system\":\"Operating System of User\",\"time\":\"Request Time\"}', 1, 1, '2022-07-17 06:18:15', '2022-07-17 07:17:34'),
(2, 'PASS_RESET_DONE', 'Password Reset Confirmation', 'You have Reset your password', '<div><p>\r\n    You have successfully reset your password.</p><p>You changed from&nbsp; IP: <b>{{ip}}</b> using <b>{{browser}}</b> on <b>{{operating_system}}&nbsp;</b> on <b>{{time}}</b></p><p><b><br></b></p><p><font color=\"#FF0000\"><b>If you did not changed that, Please contact with us as soon as possible.</b></font><br></p></div>', 'Your password has been changed successfully', '{\"ip\":\"IP of User\",\"browser\":\"Browser of User\",\"operating_system\":\"Operating System of User\",\"time\":\"Request Time\"}', 1, 1, '2022-07-17 06:19:28', '2022-07-17 06:19:28'),
(3, 'EVER_CODE', 'Email Verification', 'Please verify your email address', '<div><br></div><div>Thanks For join with us. <br></div><div>Please use below code to verify your email address.<br></div><div><br></div><div>Your email verification code is:<font size=\"6\"><b> {{code}}</b></font></div>', 'Your email verification code is: {{code}}', '{\"code\":\"Verification code\"}', 1, 1, '2022-07-17 06:21:20', '2022-07-17 06:21:20'),
(4, 'SVER_CODE', 'SMS Verification ', 'Please verify your phone', 'Your phone verification code is: {{code}}', 'Your phone verification code is: {{code}}', '{\"code\":\"Verification code\"}', 1, 1, '2022-07-17 06:22:13', '2022-07-17 06:22:13'),
(5, '2FA_ENABLE', 'Google Two Factor - Enable', 'Google Two Factor Authentication is now  Enabled for Your Account', '<div>You just enabled Google Two Factor Authentication for Your Account.</div><div><br></div><div>Enabled at <b>{{time}} </b>From IP: <b>{{ip}}</b> using <b>{{browser}}</b> on <b>{{operating_system}} </b>.</div>', 'Your verification code is: {{code}}', '{\"ip\":\"IP of User\",\"browser\":\"Browser of User\",\"operating_system\":\"Operating System of User\",\"time\":\"Request Time\"}', 1, 1, '2022-07-17 06:23:02', '2022-07-17 06:23:02'),
(6, '2FA_DISABLE', 'Google Two Factor Disable', 'Google Two Factor Authentication is now  Disabled for Your Account', '<div>You just Disabled Google Two Factor Authentication for Your Account.</div><div><br></div><div>Disabled at <b>{{time}} </b>From IP: <b>{{ip}}</b> using <b>{{browser}}</b> on <b>{{operating_system}} </b>.</div>', 'Google two factor verification is disabled', '{\"ip\":\"IP of User\",\"browser\":\"Browser of User\",\"operating_system\":\"Operating System of User\",\"time\":\"Request Time\"}', 1, 1, '2022-07-17 06:23:45', '2022-07-17 06:23:45'),
(7, 'ADMIN_SUPPORT_REPLY', 'Support Ticket Reply ', 'Reply Support Ticket', '<div><p><span style=\"font-size: 11pt;\" data-mce-style=\"font-size: 11pt;\"><strong>A member from our support team has replied to the following ticket:</strong></span></p><p><b><span style=\"font-size: 11pt;\" data-mce-style=\"font-size: 11pt;\"><strong><br></strong></span></b></p><p><b>[Ticket#{{ticket_id}}] {{ticket_subject}}<br><br>Click here to reply:&nbsp; {{link}}</b></p><p>----------------------------------------------</p><p>Here is the reply : <br></p><p> {{reply}}<br></p></div><div><br></div>', '{{subject}}\r\n\r\n{{reply}}\r\n\r\n\r\nClick here to reply:  {{link}}', '{\"ticket_id\":\"Support Ticket ID\", \"ticket_subject\":\"Subject Of Support Ticket\", \"reply\":\"Reply from Staff/Admin\",\"link\":\"Ticket URL For relpy\"}', 1, 1, '2022-07-17 06:24:31', '2022-07-17 06:24:31'),
(8, 'DEPOSIT_COMPLETE', 'Automated Deposit - Successful', 'Deposit Completed Successfully', '<div>Your deposit of <b>{{amount}} {{currency}}</b> is via&nbsp; <b>{{method_name}} </b>has been completed Successfully.<b><br></b></div><div><b><br></b></div><div><b>Details of your Deposit :<br></b></div><div><br></div><div>Amount : {{amount}} {{currency}}</div><div>Charge: <font color=\"#000000\">{{charge}} {{currency}}</font></div><div><br></div><div>Conversion Rate : 1 {{currency}} = {{rate}} {{method_currency}}</div><div>Payable : {{method_amount}} {{method_currency}} <br></div><div>Paid via :&nbsp; {{method_name}}</div><div><br></div><div>Transaction Number : {{trx}}</div><div><font size=\"5\"><b><br></b></font></div><div><font size=\"5\">Your current Balance is <b>{{post_balance}} {{currency}}</b></font></div><div><br></div><div><br><br><br></div>', '{{amount}} {{currrency}} Deposit successfully by {{gateway_name}}', '{\"trx\":\"Transaction Number\",\"amount\":\"Request Amount By user\",\"charge\":\"Gateway Charge\",\"currency\":\"Site Currency\",\"rate\":\"Conversion Rate\",\"method_name\":\"Deposit Method Name\",\"method_currency\":\"Deposit Method Currency\",\"method_amount\":\"Deposit Method Amount After Conversion\", \"post_balance\":\"Users Balance After this operation\"}', 1, 1, '2022-07-17 06:25:34', '2022-07-17 06:25:34'),
(9, 'DEPOSIT_REQUEST', 'Manual Deposit - User Requested', 'Deposit Request Submitted Successfully', '<div>Your deposit request of <b>{{amount}} {{currency}}</b> is via&nbsp; <b>{{method_name}} </b>submitted successfully<b> .<br></b></div><div><b><br></b></div><div><b>Details of your Deposit :<br></b></div><div><br></div><div>Amount : {{amount}} {{currency}}</div><div>Charge: <font color=\"#FF0000\">{{charge}} {{currency}}</font></div><div><br></div><div>Conversion Rate : 1 {{currency}} = {{rate}} {{method_currency}}</div><div>Payable : {{method_amount}} {{method_currency}} <br></div><div>Pay via :&nbsp; {{method_name}}</div><div><br></div><div>Transaction Number : {{trx}}</div><div><br></div><div><br></div>', '{{amount}} Deposit requested by {{method}}. Charge: {{charge}} . Trx: {{trx}}\r\n', '{\"trx\":\"Transaction Number\",\"amount\":\"Request Amount By user\",\"charge\":\"Gateway Charge\",\"currency\":\"Site Currency\",\"rate\":\"Conversion Rate\",\"method_name\":\"Deposit Method Name\",\"method_currency\":\"Deposit Method Currency\",\"method_amount\":\"Deposit Method Amount After Conversion\"}', 1, 1, '2022-07-17 06:26:27', '2022-07-17 06:26:27'),
(10, 'DEPOSIT_APPROVE', 'Manual Deposit - Admin Approved', 'Your Deposit is Approved', '<div>Your deposit request of <b>{{amount}} {{currency}}</b> is via&nbsp; <b>{{method_name}} </b>is Approved .<b><br></b></div><div><b><br></b></div><div><b>Details of your Deposit :<br></b></div><div><br></div><div>Amount : {{amount}} {{currency}}</div><div>Charge: <font color=\"#FF0000\">{{charge}} {{currency}}</font></div><div><br></div><div>Conversion Rate : 1 {{currency}} = {{rate}} {{method_currency}}</div><div>Payable : {{method_amount}} {{method_currency}} <br></div><div>Paid via :&nbsp; {{method_name}}</div><div><br></div><div>Transaction Number : {{trx}}</div><div><font size=\"5\"><b><br></b></font></div><div><font size=\"5\">Your current Balance is </font><b style=\"\"><font size=\"4\">{{post_balance}} {{currency}}</font></b></div><div><br></div><div><br><br></div>', 'Admin Approve Your {{amount}} {{gateway_currency}} payment request by {{gateway_name}} transaction : {{transaction}}', '{\"trx\":\"Transaction Number\",\"amount\":\"Request Amount By user\",\"charge\":\"Gateway Charge\",\"currency\":\"Site Currency\",\"rate\":\"Conversion Rate\",\"method_name\":\"Deposit Method Name\",\"method_currency\":\"Deposit Method Currency\",\"method_amount\":\"Deposit Method Amount After Conversion\", \"post_balance\":\"Users Balance After this operation\"}', 1, 1, '2022-07-17 06:27:12', '2022-07-17 07:18:32'),
(11, 'DEPOSIT_REJECT', 'Manual Deposit - Admin Rejected', 'Your Deposit Request is Rejected', '<div>Your deposit request of <b>{{amount}} {{currency}}</b> is via&nbsp; <b>{{method_name}} has been rejected</b>.<b><br></b></div><br><div>Transaction Number was : {{trx}}</div><div><br></div><div>if you have any query, feel free to contact us.<br></div><br><div><br><br></div>\r\n\r\n\r\n\r\n{{rejection_message}}', 'Admin Rejected Your {{amount}} {{gateway_currency}} payment request by {{gateway_name}}\r\n\r\n{{rejection_message}}', '{\"trx\":\"Transaction Number\",\"amount\":\"Request Amount By user\",\"charge\":\"Gateway Charge\",\"currency\":\"Site Currency\",\"rate\":\"Conversion Rate\",\"method_name\":\"Deposit Method Name\",\"method_currency\":\"Deposit Method Currency\",\"method_amount\":\"Deposit Method Amount After Conversion\",\"rejection_message\":\"Rejection message\"}', 1, 1, '2022-07-17 06:27:52', '2022-07-17 06:27:52'),
(12, 'BAL_ADD', 'Balance Add by Admin', 'Your Account has been Credited', '<div>{{amount}} {{currency}} has been added to your account .</div><div><br></div><div>Transaction Number : {{trx}}</div><div><br></div>Your Current Balance is : <font size=\"3\"><b>{{post_balance}}&nbsp; {{currency}}&nbsp;</b></font>', '{{amount}} {{currency}} credited in your account. Your Current Balance {{remaining_balance}} {{currency}} . Transaction: #{{trx}}', '{\"trx\":\"Transaction Number\",\"amount\":\"Request Amount By Admin\",\"currency\":\"Site Currency\", \"post_balance\":\"Users Balance After this operation\"}', 1, 1, '2022-07-17 06:28:35', '2022-07-17 06:28:35'),
(13, 'BAL_SUB', 'Balance Subtracted by Admin', 'Your Account has been Debited', '<div style=\"color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;\">{{amount}} {{currency}} has been subtracted from your account .</div><div style=\"color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;\"><br></div><div style=\"color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;\">Transaction Number : {{trx}}</div><div style=\"color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;\"><br></div><span style=\"color: rgb(33, 37, 41); font-family: Montserrat, sans-serif; display: inline !important;\">Your Current Balance is :&nbsp;</span><font style=\"color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;\"><span style=\"font-weight: bolder;\">{{post_balance}}&nbsp; {{currency}}</span></font>', '&nbsp; &nbsp; &nbsp;<div>&nbsp; &nbsp; {{amount}} {{currency}} debited from your account.&nbsp;<div>&nbsp; &nbsp; &nbsp;Your Current Balance {{remaining_balance}} {{currency}} .&nbsp;</div><div>&nbsp; &nbsp; &nbsp;Transaction: #{{trx}}</div></div>', '{\"trx\":\"Transaction Number\",\"amount\":\"Request Amount By Admin\",\"currency\":\"Site Currency\", \"post_balance\":\"Users Balance After this operation\"}', 1, 1, '2022-07-17 06:29:21', '2022-07-17 11:02:09');

-- --------------------------------------------------------

--
-- Table structure for table `extensions`
--

CREATE TABLE `extensions` (
  `id` int(100) NOT NULL,
  `act` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `script` text DEFAULT NULL,
  `shortcode` text DEFAULT NULL,
  `support` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=>enable, 2=>disable	',
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `extensions`
--

INSERT INTO `extensions` (`id`, `act`, `name`, `description`, `image`, `script`, `shortcode`, `support`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'tawk-chat', 'Tawk.to', 'Key location is shown bellow', 'tawky_big.png', '<script>\r\n                        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();\r\n                        (function(){\r\n                        var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];\r\n                        s1.async=true;\r\n                        s1.src=\"https://embed.tawk.to/{{app_key}}\";\r\n                        s1.charset=\"UTF-8\";\r\n                        s1.setAttribute(\"crossorigin\",\"*\");\r\n                        s0.parentNode.insertBefore(s1,s0);\r\n                        })();\r\n                    </script>', '{\"app_key\":{\"title\":\"App Key\",\"value\":\"6263cb787b967b11798c1faf\\/1g1at5k98\"}}', 'twak.png', 0, NULL, '2022-07-17 12:51:14', '2022-07-17 13:27:06');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fees_and_charges`
--

CREATE TABLE `fees_and_charges` (
  `id` int(100) UNSIGNED NOT NULL,
  `service_charge` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `delivery_charge` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `per_km` int(100) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fees_and_charges`
--

INSERT INTO `fees_and_charges` (`id`, `service_charge`, `delivery_charge`, `per_km`, `created_at`, `updated_at`) VALUES
(1, '10.00000000', '2.00000000', 2, '2022-07-21 05:42:23', '2022-07-30 06:04:59');

-- --------------------------------------------------------

--
-- Table structure for table `frontends`
--

CREATE TABLE `frontends` (
  `id` int(100) UNSIGNED NOT NULL,
  `data_keys` varchar(255) DEFAULT NULL,
  `data_values` text DEFAULT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `frontends`
--

INSERT INTO `frontends` (`id`, `data_keys`, `data_values`, `view`, `created_at`, `updated_at`) VALUES
(1, 'banner.content', '{\"has_image\":\"1\",\"heading\":\"test\",\"sub_heading\":\"test\",\"image\":\"62d55ea536c641658150565.png\"}', 0, '2022-07-16 05:09:37', '2022-07-18 13:22:46'),
(2, 'social_icon.element', '{\"social_icon\":\"<i class=\\\"lab la-facebook-f\\\"><\\/i>\",\"url\":\"https:\\/\\/www.whatsapp.com\\/\"}', 0, '2022-07-16 05:31:33', '2022-07-18 11:46:40'),
(3, 'authentication.content', '{\"title\":\"Well Come To ShineTouch\",\"subtitle\":\"Nonummy Massa Quam Nonummy Fermentum In Ipsum Sit Libero Ac Nisl Vivamus Porttitor\"}', 0, '2022-07-16 05:37:03', '2022-08-03 12:39:09'),
(4, 'about.content', '{\"has_image\":\"1\",\"title\":\"Test\",\"heading\":\"Test\",\"button_text\":\"Test\",\"button_link\":\"Test\",\"description\":\"Test\",\"image\":\"62d55e97dfe431658150551.png\"}', 0, '2022-07-16 05:51:43', '2022-07-18 13:22:33'),
(5, 'seo.data', '{\"seo_image\":\"1\",\"social_title\":\"Appdevs Company\",\"social_description\":\"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit\",\"keywords\":[\"admin\",\"blog\",\"test\"],\"description\":\"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit\",\"image\":\"62d39e686b53b1658035816.png\"}', 0, '2022-07-16 07:47:41', '2022-07-17 06:10:16'),
(6, 'seo.', '{\"social_title\":\"WEBSITENAME\",\"social_description\":\"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit\",\"keywords\":[\"admin\",\"blog\",\"cvc\"],\"description\":\"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit\"}', 0, '2022-07-17 05:22:51', '2022-07-17 05:23:18'),
(7, 'cookie.data', '{\"link\":\"#\",\"description\":\"<span style=\\\"color: rgb(91, 110, 136); font-family: Exo, sans-serif; font-size: 18px; display: inline !important;\\\">We may use cookies or any other tracking technologies when you visit our website, including any other media form, mobile website, or mobile application related or connected to help customize the Site and improve your experience.<\\/span>\",\"status\":1}', 0, '2022-07-17 11:45:43', '2022-07-17 11:51:08'),
(10, 'sponsors.element', '{\"has_image\":[\"1\"],\"name\":\"Scvencs\",\"image\":\"62ea2b2dee7e41659513645.png\"}', 0, '2022-08-03 07:51:25', '2022-08-03 08:00:46'),
(11, 'sponsors.content', '{\"title\":\"Our Sponsors\"}', 0, '2022-08-03 07:59:54', '2022-08-03 08:08:10'),
(12, 'sponsors.element', '{\"has_image\":[\"1\"],\"name\":\"Zares\",\"image\":\"62ea2c116e7421659513873.png\"}', 0, '2022-08-03 08:04:33', '2022-08-03 08:04:33'),
(13, 'sponsors.element', '{\"has_image\":[\"1\"],\"name\":\"Vagoda\",\"image\":\"62ea2c228c2331659513890.png\"}', 0, '2022-08-03 08:04:50', '2022-08-03 08:04:50'),
(14, 'sponsors.element', '{\"has_image\":[\"1\"],\"name\":\"Robusta\",\"image\":\"62ea2c2e00dba1659513902.png\"}', 0, '2022-08-03 08:05:01', '2022-08-03 08:05:02'),
(15, 'sponsors.element', '{\"has_image\":[\"1\"],\"name\":\"Breally\",\"image\":\"62ea2c4fa029e1659513935.png\"}', 0, '2022-08-03 08:05:35', '2022-08-03 08:05:35'),
(16, 'team_members.element', '{\"has_image\":[\"1\"],\"name\":\"Steve Johnson\",\"designation\":\"Mechanic\",\"image\":\"62ea3b86d4c1b1659517830.jpg\"}', 0, '2022-08-03 09:10:30', '2022-08-03 09:19:08'),
(17, 'team_members.element', '{\"has_image\":[\"1\"],\"name\":\"David James\",\"designation\":\"Electrician\",\"image\":\"62ea3bb2a47191659517874.jpg\"}', 0, '2022-08-03 09:11:14', '2022-08-03 09:11:14'),
(18, 'team_members.element', '{\"has_image\":[\"1\"],\"name\":\"Jake Paul Bewn\",\"designation\":\"Electrician\",\"image\":\"62ea3bc4459d01659517892.jpg\"}', 0, '2022-08-03 09:11:32', '2022-08-03 09:11:32'),
(19, 'team_members.element', '{\"has_image\":[\"1\"],\"name\":\"Shane Watson\",\"designation\":\"Electrician\",\"image\":\"62ea3bd51d3c71659517909.jpg\"}', 0, '2022-08-03 09:11:49', '2022-08-03 09:11:49'),
(20, 'our_client.element', '{\"has_image\":[\"1\"],\"name\":\"Ruddra Khan\",\"designation\":\"SEO , Company\",\"details\":\"<span style=\\\"font-family:\'Times New Roman\', serif;font-size:18.6667px;\\\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam blanditiis repreh enderit tempore iure laborum volup tatum, obc aecati impedit minima commodi consequatur hic quod voluptate!\\u00a0<\\/span><br \\/>\",\"image\":\"62ea40596e04d1659519065.jpg\"}', 0, '2022-08-03 09:31:05', '2022-08-03 09:46:40'),
(21, 'our_client.element', '{\"has_image\":[\"1\"],\"name\":\"Shane Watson\",\"designation\":\"SEO , Company\",\"details\":\"<p class=\\\"MsoNormal\\\"><span style=\\\"font-family:\'Times New Roman\', serif;font-size:18.6667px;\\\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam blanditiis repreh enderit tempore iure laborum volup tatum, obc aecati impedit minima commodi consequatur hic quod voluptate!\\u00a0<\\/span><br \\/><\\/p><p><\\/p>\",\"image\":\"62ea4095f0d371659519125.jpg\"}', 0, '2022-08-03 09:32:05', '2022-08-03 09:46:02'),
(22, 'our_client.element', '{\"has_image\":[\"1\"],\"name\":\"Amelia\",\"designation\":\"SEO , Company\",\"details\":\"<p class=\\\"MsoNormal\\\"><span style=\\\"font-family:\'Times New Roman\', serif;font-size:18.6667px;\\\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam blanditiis repreh enderit tempore iure laborum volup tatum, obc aecati impedit minima commodi consequatur hic quod voluptate!\\u00a0<\\/span><br \\/><\\/p><p><\\/p>\",\"image\":\"62ea40c4694311659519172.jpg\"}', 0, '2022-08-03 09:32:52', '2022-08-03 09:46:12'),
(23, 'get_service.content', '{\"services_provide\":\"2220\",\"happy_client\":\"570\",\"total_services\":\"4200\",\"video_link\":\"https:\\/\\/www.youtube.com\\/watch?v=kbH6SecgfO0\",\"experience_title\":\"30 Years Of Experience\",\"details\":\"<span style=\\\"color:rgb(41,41,41);font-size:14px;font-style:italic;text-transform:capitalize;\\\">Suscipit Ipsa Soluta Vel Commodi. Quasi, Maiores Velit Maxime Dolor Deleniti Eius Culpa Quam Id Blanditiis Voluptatum Debitis, Optio Sed, Eum Rerum!<\\/span>\"}', 0, '2022-08-03 10:00:17', '2022-08-03 11:51:36'),
(24, 'get_service.element', '{\"title\":\"Select The Service\",\"sub_title\":\"Eius Obcaecati Ut Cupiditate Quia Aliquid Necessitatibus Aperiam! Adipisci, Autem!\"}', 0, '2022-08-03 10:06:10', '2022-08-03 10:06:40'),
(25, 'get_service.element', '{\"title\":\"Pick Your Schedule\",\"sub_title\":\"Eius Obcaecati Ut Cupiditate Quia Aliquid Necessitatibus Aperiam! Adipisci, Autem!\"}', 0, '2022-08-03 10:07:01', '2022-08-03 10:07:01'),
(26, 'get_service.element', '{\"title\":\"Insuring Your Attendance\",\"sub_title\":\"Eius Obcaecati Ut Cupiditate Quia Aliquid Necessitatibus Aperiam! Adipisci, Autem!\"}', 0, '2022-08-03 10:07:15', '2022-08-03 10:07:15'),
(27, 'get_service.element', '{\"title\":\"Place Your Order &amp; Relax\",\"sub_title\":\"Eius Obcaecati Ut Cupiditate Quia Aliquid Necessitatibus Aperiam! Adipisci, Autem!\"}', 0, '2022-08-03 10:07:38', '2022-08-03 10:07:38'),
(28, 'why_choose_us.content', '{\"heading\":\"Get Your Quality Service With Unmatched Value\",\"sub_heading\":\"Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat.\",\"details\":\"<span style=\\\"color:rgb(41,41,41);font-size:14px;text-transform:capitalize;background-color:rgb(250,251,252);\\\">Ducimus Nulla Obcaecati Veritatis Inventore Amet Dignissimos, Eaque Molestias Id Eos Tempore Fuga Explicabo Distinctio, Animi Repellat Atque Reiciendis Fugit Alias Suscipit Voluptate Nam? Deleniti Aliquid Accusantium Voluptas Provident.<\\/span><br \\/>\"}', 0, '2022-08-03 12:00:02', '2022-08-03 12:00:02'),
(30, 'why_choose_us.element', '{\"title\":\"Ensuring Masks\",\"icon_name\":\"icon-brush-alt\"}', 0, '2022-08-03 12:04:47', '2022-08-03 12:04:47'),
(31, 'why_choose_us.element', '{\"title\":\"24\\/7 Support\",\"icon_name\":\"icon-rocket\"}', 0, '2022-08-03 12:05:02', '2022-08-03 12:05:02'),
(32, 'why_choose_us.element', '{\"title\":\"Sanitising Hands\",\"icon_name\":\"icon-hand-stop\"}', 0, '2022-08-03 12:05:26', '2022-08-03 12:05:26'),
(33, 'why_choose_us.element', '{\"title\":\"Ensuring Gloves\",\"icon_name\":\"icon-eye\"}', 0, '2022-08-03 12:05:40', '2022-08-03 12:05:40'),
(34, 'contact_us.content', '{\"form_title\":\"Let Us To Know About Your Contact\",\"phone_one\":\"(332) 621-4070\",\"phone_two\":\"(664) 397-2003\",\"phone_three\":\"(564) 397-2003\",\"email_one\":\"Albertha.Runte@Hotmail.Com\",\"email_two\":\"Schroeder.Ulices@Yahoo.Com\",\"address_one\":\"6803 Dickens Islands Apt. 567\",\"address_two\":\"Port Malikaview, TX 14942\"}', 0, '2022-08-03 12:25:54', '2022-08-03 12:32:10');

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sitename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_sub_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dark` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=> Dark Template Enable, 2=> Dark Template Disable',
  `cur_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'currency text',
  `cur_sym` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'currency symbol',
  `email_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_template` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_api` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `base_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `component_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_config` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_config` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ev` tinyint(1) NOT NULL DEFAULT 0,
  `en` tinyint(1) NOT NULL DEFAULT 0,
  `sv` tinyint(1) NOT NULL DEFAULT 0,
  `sn` tinyint(1) NOT NULL DEFAULT 0,
  `otp_expiration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timezone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `force_ssl` tinyint(1) NOT NULL DEFAULT 0,
  `secure_password` tinyint(1) NOT NULL DEFAULT 0,
  `agree` tinyint(1) NOT NULL DEFAULT 0,
  `registration` tinyint(1) NOT NULL DEFAULT 0,
  `active_template` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sys_version` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `withdraw_status` tinyint(1) NOT NULL DEFAULT 0,
  `deposit_status` tinyint(1) DEFAULT 0,
  `kyc_verification` tinyint(1) NOT NULL DEFAULT 0,
  `devlopment_mode` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `sitename`, `site_sub_title`, `dark`, `cur_text`, `cur_sym`, `email_from`, `email_template`, `sms_api`, `base_color`, `secondary_color`, `component_color`, `mail_config`, `sms_config`, `ev`, `en`, `sv`, `sn`, `otp_expiration`, `timezone`, `force_ssl`, `secure_password`, `agree`, `registration`, `active_template`, `sys_version`, `withdraw_status`, `deposit_status`, `kyc_verification`, `devlopment_mode`, `created_at`, `updated_at`) VALUES
(1, 'Shinetouch', '-virtual payment method', 0, 'euro', '€', 'noreply@appdevs.net', '<br><div><table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" bgcolor=\"#414a51\" align=\"center\" style=\"width: 991px; color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;\"><tbody><tr><td height=\"50\"><br></td></tr><tr><td align=\"center\" style=\"text-align: center; vertical-align: top; font-size: 0px;\"><table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td width=\"600\" align=\"center\" style=\"text-align: left;\"><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#0087ff\" align=\"center\" style=\"text-align: center; border-top-left-radius: 6px; border-top-right-radius: 6px; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(255, 255, 255); font-size: 16px; font-weight: bold;\">This is a System Generated Email</td></tr><tr><td height=\"20\" style=\"text-align: left;\"><br></td></tr></tbody></table></td></tr></tbody></table><table class=\"table-inner\" width=\"95%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width: 991px;\"><tbody><tr><td bgcolor=\"#FFFFFF\" align=\"center\" style=\"text-align: center; vertical-align: top;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"35\" style=\"text-align: left;\"><br></td></tr><tr><td align=\"center\" style=\"text-align: left; vertical-align: top;\"><img src=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" white-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/logo.png\" dark-img=\"http://localhost/appdevs-admin/assets/images/logoIcon/whiteLogo.png\" alt=\"logo\"><br></td></tr><tr><td height=\"40\" style=\"text-align: left;\"><br><br></td></tr><tr><td align=\"center\" style=\"text-align: left; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 22px; color: rgb(65, 74, 81); font-weight: bold;\"><span style=\"margin-bottom: 0px;\">Hello&nbsp;<span style=\"display: inline !important;\">{{fullname}}</span>,</span><br></td></tr><tr><td align=\"center\" style=\"vertical-align: top;\"><table width=\"40\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"20\" style=\"border-bottom-width: 3px; border-bottom-color: rgb(0, 135, 255);\"><br></td></tr></tbody></table></td></tr><tr><td align=\"left\" style=\"text-align: left; font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(127, 140, 141); font-size: 16px; line-height: 28px;\">{{message}}</td></tr></tbody></table></td></tr><tr><td height=\"45\" bgcolor=\"#f4f4f4\" align=\"center\" style=\"border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;\"><table width=\"90%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" style=\"width: 991px;\"><tbody><tr><td height=\"10\"><br></td></tr><tr><td class=\"preference-link\" align=\"center\" style=\"font-family: &quot;Open sans&quot;, Arial, sans-serif; color: rgb(149, 165, 166); font-size: 14px;\">© 2022 Site. All Rights Reserved by Appdevs</td></tr><tr><td height=\"10\"><br></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr><td height=\"60\"><br></td></tr></tbody></table></div>', 'hi {{name}}, {{message}}', 'FF6A00', 'FF6A00', 'FF6A00', '{\"name\":\"smtp\",\"host\":\"appdevs.net\",\"port\":\"465\",\"enc\":\"ssl\",\"username\":\"noreply@appdevs.net\",\"password\":\"QP2fsLk?80Ac\"}', '{\"account_sid\":\"AC29a3c53f3e0cdb7fc2fad45d83186764\",\"auth_token\":\"1fc0b4cc8dd300e76a526f7d47d43b39\",\"from\":\"+19403603282\",\"name\":\"twilio\"}', 1, 1, 0, 0, '60', NULL, 0, 0, 1, 1, 'basic', NULL, 1, 1, 1, 1, NULL, '2022-07-31 15:05:18');

-- --------------------------------------------------------

--
-- Table structure for table `kyc_forms`
--

CREATE TABLE `kyc_forms` (
  `id` int(100) UNSIGNED NOT NULL,
  `user_type` varchar(40) DEFAULT NULL,
  `form_data` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kyc_forms`
--

INSERT INTO `kyc_forms` (`id`, `user_type`, `form_data`, `status`, `created_at`, `updated_at`) VALUES
(1, 'USER', '{\"id_upload\":{\"field_name\":\"id_upload\",\"field_level\":\"ID Upload\",\"type\":\"file\",\"validation\":\"required\"},\"id_number\":{\"field_name\":\"id_number\",\"field_level\":\"ID Number\",\"type\":\"text\",\"validation\":\"required\"}}', 1, '2022-07-18 10:06:47', '2022-07-24 11:17:02');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(100) NOT NULL,
  `name` varchar(40) NOT NULL,
  `code` varchar(40) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `text_align` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0: left to right text align, 1: right to left text align',
  `is_default` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0: not default language, 1: default language',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `code`, `icon`, `text_align`, `is_default`, `created_at`, `updated_at`) VALUES
(1, 'English', 'en', '5f15968db08911595250317.png', 0, 1, '2022-07-17 13:44:16', '2022-07-17 13:44:16'),
(3, 'Bangla', 'bn', NULL, 0, 0, '2022-07-17 13:45:04', '2022-07-17 13:45:04');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_14_054951_create_admins_table', 1),
(6, '2022_07_14_071541_create_general_settings_table', 2),
(8, '2022_07_20_154508_create_order_types_table', 4),
(9, '2022_07_20_173145_create_delivery_hours_table', 5),
(10, '2022_07_29_121744_create_countries_table', 6),
(11, '2022_07_30_121408_create_cities_table', 6),
(12, '2022_07_30_202526_create_categories_table', 7),
(13, '2022_07_31_114544_create_services_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `items` text DEFAULT NULL,
  `note` text DEFAULT NULL,
  `voucher_id` int(100) UNSIGNED DEFAULT NULL,
  `voucher_code` varchar(255) DEFAULT NULL,
  `voucher_amount` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_id`, `items`, `note`, `voucher_id`, `voucher_code`, `voucher_amount`, `status`, `created_at`, `updated_at`) VALUES
(92, 1, '1KN8DBVC1MY3', '[{\"items\":\"Item1\",\"brand\":\"Brand\",\"amount\":\"130\",\"preferred_shop\":\"Shop\"}]', NULL, NULL, NULL, '0.00000000', 1, '2022-08-01 15:24:18', '2022-08-01 15:24:32'),
(93, 1, 'YKGMO79PSKHQ', '[{\"items\":\"Item1\",\"brand\":\"Brand\",\"amount\":\"120\",\"preferred_shop\":\"Shop\"}]', 'vhfghbfg', NULL, NULL, '0.00000000', 1, '2022-08-02 04:44:30', '2022-08-02 04:44:30'),
(94, 1, 'XER7QS549AS3', '[{\"items\":\"item1\",\"brand\":\"fg\",\"amount\":\"13\",\"preferred_shop\":\"dg\"}]', NULL, NULL, NULL, '0.00000000', 1, '2022-08-02 11:02:25', '2022-08-02 11:12:40'),
(95, 1, '54ECEAH7PVZP', '[{\"items\":\"item1\",\"brand\":\"fg\",\"amount\":\"12\",\"preferred_shop\":\"dg\"}]', NULL, NULL, NULL, '0.00000000', 1, '2022-08-03 07:45:24', '2022-08-03 07:45:24'),
(96, 1, 'GTZKMCQD9RYP', '[{\"items\":\"item1\",\"brand\":\"fg\",\"amount\":\"12\",\"preferred_shop\":\"dg\"}]', NULL, NULL, NULL, '0.00000000', 1, '2022-08-03 08:34:29', '2022-08-03 08:34:29');

-- --------------------------------------------------------

--
-- Table structure for table `order_types`
--

CREATE TABLE `order_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `limit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_types`
--

INSERT INTO `order_types` (`id`, `name`, `limit`, `status`, `created_at`, `updated_at`) VALUES
(1, 'small', '[\"1\",\"15\"]', 1, NULL, '2022-07-20 11:08:47'),
(2, 'medium', '[\"16\",\"25\"]', 1, NULL, '2022-07-20 11:09:15');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(100) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `tempname` varchar(255) DEFAULT NULL COMMENT 'template name',
  `secs` text DEFAULT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `slug`, `tempname`, `secs`, `is_default`, `created_at`, `updated_at`) VALUES
(1, 'HOME', 'home', 'templates.basic.', NULL, 1, '2022-07-18 14:50:46', '2022-07-18 14:50:46');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('md.mehedihasaniubat@gmail.com', '878496', '2022-07-19 07:27:04');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pickup_orders`
--

CREATE TABLE `pickup_orders` (
  `id` int(100) UNSIGNED NOT NULL,
  `order_number` varchar(255) DEFAULT NULL,
  `user_contact_id` varchar(255) DEFAULT NULL,
  `user_id` int(100) DEFAULT NULL,
  `products` text DEFAULT NULL,
  `total_products` varchar(255) DEFAULT NULL,
  `copon_code` varchar(255) DEFAULT NULL,
  `copon_amount` varchar(255) DEFAULT NULL,
  `amount` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `service_charge` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `delivery_charge` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `discount` varchar(255) DEFAULT NULL,
  `delivery_type` varchar(255) DEFAULT NULL,
  `distance` int(100) NOT NULL DEFAULT 1,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '	0 = pending, 1= completed, 2=Canceed',
  `reject_info` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pickup_orders`
--

INSERT INTO `pickup_orders` (`id`, `order_number`, `user_contact_id`, `user_id`, `products`, `total_products`, `copon_code`, `copon_amount`, `amount`, `service_charge`, `delivery_charge`, `discount`, `delivery_type`, `distance`, `status`, `reject_info`, `created_at`, `updated_at`) VALUES
(3, '35887447', '', 1, '[{\"name\":\"Laptop\",\"quantity\":\"2\",\"weight\":\"1\"},{\"name\":\"Mobile\",\"quantity\":\"12\",\"weight\":\"1\"}]', '2', NULL, NULL, '12.00000000', '10.00000000', '2.00000000', NULL, 'Cash On Delivery', 2, 0, NULL, '2022-07-28 20:44:17', '2022-07-28 20:44:50'),
(4, '62251648', '15', 1, '[{\"name\":\"Laptop\",\"quantity\":\"12\",\"weight\":\"1\"}]', '1', NULL, NULL, '12.00000000', '10.00000000', '2.00000000', NULL, 'Cash On Delivery', 1, 0, NULL, '2022-08-02 11:20:47', '2022-08-02 11:20:47');

-- --------------------------------------------------------

--
-- Table structure for table `pick_actions`
--

CREATE TABLE `pick_actions` (
  `id` int(100) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `trx` varchar(255) DEFAULT NULL,
  `products` text DEFAULT NULL,
  `note` text DEFAULT NULL,
  `voucher_id` int(10) DEFAULT NULL,
  `voucher_code` varchar(100) DEFAULT NULL,
  `voucher_amount` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pick_actions`
--

INSERT INTO `pick_actions` (`id`, `user_id`, `trx`, `products`, `note`, `voucher_id`, `voucher_code`, `voucher_amount`, `status`, `created_at`, `updated_at`) VALUES
(21, 1, 'XBDNDN5PTUV1', '[{\"name\":\"Laptop\",\"quantity\":\"1\",\"weight\":\"1\"}]', NULL, NULL, NULL, '0.00000000', 1, '2022-08-01 15:25:39', '2022-08-01 15:25:39'),
(22, 1, 'JMSCT1Z56WW1', '[{\"name\":\"Laptop\",\"quantity\":\"12\",\"weight\":\"1\"}]', NULL, NULL, NULL, '0.00000000', 1, '2022-08-02 11:16:54', '2022-08-02 11:16:54'),
(23, 1, 'PKCE6JZOVYFZ', '[{\"name\":\"Laptop\",\"quantity\":\"12\",\"weight\":\"1\"}]', NULL, NULL, NULL, '0.00000000', 1, '2022-08-02 11:37:54', '2022-08-02 11:37:54'),
(24, 1, 'DPMTUVODW3GS', '[{\"name\":\"Laptop\",\"quantity\":\"12\",\"weight\":\"1\"}]', NULL, NULL, NULL, '0.00000000', 1, '2022-08-03 07:45:42', '2022-08-03 07:45:42');

-- --------------------------------------------------------

--
-- Table structure for table `send_me_order_places`
--

CREATE TABLE `send_me_order_places` (
  `id` int(100) UNSIGNED NOT NULL,
  `trx` varchar(100) DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `user_contact_id` varchar(255) DEFAULT NULL,
  `items` text DEFAULT NULL,
  `total_items` varchar(255) DEFAULT NULL,
  `before_charge` varchar(255) DEFAULT NULL,
  `user_id` int(100) DEFAULT NULL,
  `copon` varchar(255) DEFAULT NULL,
  `service_charge` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `delivery_charge` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `discount` varchar(255) DEFAULT NULL,
  `delivery_type` varchar(255) NOT NULL,
  `delivery_hours` varchar(255) DEFAULT NULL,
  `final_amount` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `distance` int(100) NOT NULL DEFAULT 1,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 = pending, 1= completed, 2=Canceed',
  `reject_info` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `send_me_order_places`
--

INSERT INTO `send_me_order_places` (`id`, `trx`, `order_id`, `user_contact_id`, `items`, `total_items`, `before_charge`, `user_id`, `copon`, `service_charge`, `delivery_charge`, `discount`, `delivery_type`, `delivery_hours`, `final_amount`, `distance`, `status`, `reject_info`, `created_at`, `updated_at`) VALUES
(20, 'F2ZKQYM8EGB6', '85', '', '[{\"items\":\"Pro Max\",\"brand\":\"Apple\",\"amount\":\"100\",\"preferred_shop\":\"Apple Store\"},{\"items\":\"T-Shirt\",\"brand\":\"Easy\",\"amount\":\"120\",\"preferred_shop\":\"Garments\"}]', '2', '220', 1, NULL, '10.00000000', '2.00000000', NULL, 'cash on delivery', NULL, '232.00000000', 2, 0, NULL, '2022-07-28 20:33:04', '2022-07-28 20:36:59'),
(21, 'CWSJJN3BY21C', '87', '', '[{\"items\":\"Item1\",\"brand\":\"Brand\",\"amount\":\"120\",\"preferred_shop\":\"Shop\"}]', '1', '120', 1, NULL, '10.00000000', '2.00000000', NULL, 'cash on delivery', NULL, '132.00000000', 1, 0, NULL, '2022-07-31 13:51:52', '2022-07-31 13:51:52'),
(22, 'O3GAVN6H1RUO', '91', '', '[{\"items\":\"Item1\",\"brand\":\"Brand\",\"amount\":\"120\",\"preferred_shop\":\"Shop\"}]', '1', '120', 1, NULL, '10.00000000', '2.00000000', NULL, 'cash on delivery', 'Second Delivery', '132.00000000', 1, 0, NULL, '2022-07-31 16:07:52', '2022-07-31 16:07:52'),
(23, 'TU5NQS8793QA', '94', '15', '[{\"items\":\"item1\",\"brand\":\"fg\",\"amount\":\"13\",\"preferred_shop\":\"dg\"}]', '1', '13', 1, NULL, '10.00000000', '2.00000000', NULL, 'cash on delivery', 'First Delivery', '25.00000000', 1, 0, NULL, '2022-08-02 11:16:03', '2022-08-02 11:16:03');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `service_overview` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faq` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_details` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recommended` tinyint(1) NOT NULL DEFAULT 0,
  `trending` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = not trending;\r\n1 = trending',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `category_id`, `name`, `slug`, `image`, `price`, `service_overview`, `faq`, `service_details`, `recommended`, `trending`, `status`, `created_at`, `updated_at`) VALUES
(3, 8, 'House Cleaning', 'house-cleaning', '62e669d954bdf1659267545.jpg', '1000.00000000', NULL, '[{\"question\":\"Duis Eleifend Molestie Leo At Mollis ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Inibus Bonorum \\\"Extremes Of Good\\u201d ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Repetition, Injected Humour Or Non ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Duis Eleifend Molestie Leo At Mollis ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Repetition, Injected Humour Or Non ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"}]', '<h3 class=\"main-title\" style=\"margin-bottom: 20px; font-weight: 700; font-size: 22px; color: rgb(41, 41, 41); text-transform: capitalize;\">Overview Of House Cleaning</h3><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 30px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">What\'s Included?</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Only Service Charge</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">7 Days Service Warranty</li></ul></div><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 30px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">What\'s Excluded?</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Price Of Materials Or Parts</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Transportation Cost For Carrying New Materials/Parts</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Warranty Given By Manufacturer</li></ul></div><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 0px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">Available Services</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Basic Servicing</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Master Service</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Water Drop Solution</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Jet Wash</li></ul></div>', 0, 0, 1, '2022-07-31 11:39:05', '2022-07-31 13:07:09'),
(4, 8, 'Interior Design', 'interior-design', '62e66a68c91831659267688.jpg', '2000.00000000', NULL, '[{\"question\":\"Duis Eleifend Molestie Leo At Mollis ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Inibus Bonorum \\\"Extremes Of Good\\u201d ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Repetition, Injected Humour Or Non ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Duis Eleifend Molestie Leo At Mollis ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Repetition, Injected Humour Or Non ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"}]', '<h3 class=\"main-title\" style=\"margin-bottom: 20px; font-weight: 700; font-size: 22px; color: rgb(41, 41, 41); text-transform: capitalize;\">Overview Of&nbsp;Interior Design</h3><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 30px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">What\'s Included?</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Only Service Charge</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">7 Days Service Warranty</li></ul></div><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 30px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">What\'s Excluded?</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Price Of Materials Or Parts</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Transportation Cost For Carrying New Materials/Parts</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Warranty Given By Manufacturer</li></ul></div><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 0px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">Available Services</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Basic Servicing</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Master Service</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Water Drop Solution</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Jet Wash</li></ul></div>', 0, 0, 1, '2022-07-31 11:41:28', '2022-07-31 13:09:17'),
(5, 8, 'Cooking Service', 'cooking-service', '62e66ab0960a41659267760.jpg', '1000.00000000', NULL, '[{\"question\":\"Duis Eleifend Molestie Leo At Mollis ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Inibus Bonorum \\\"Extremes Of Good\\u201d ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Repetition, Injected Humour Or Non ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Duis Eleifend Molestie Leo At Mollis ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Repetition, Injected Humour Or Non ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"}]', '<h3 class=\"main-title\" style=\"margin-bottom: 20px; font-weight: 700; font-size: 22px; color: rgb(41, 41, 41); text-transform: capitalize;\">Overview Of Cooking Service</h3><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 30px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">What\'s Included?</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Only Service Charge</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">7 Days Service Warranty</li></ul></div><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 30px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">What\'s Excluded?</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Price Of Materials Or Parts</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Transportation Cost For Carrying New Materials/Parts</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Warranty Given By Manufacturer</li></ul></div><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 0px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">Available Services</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Basic Servicing</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Master Service</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Water Drop Solution</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Jet Wash</li></ul></div>', 0, 0, 1, '2022-07-31 11:42:40', '2022-07-31 13:31:40'),
(6, 8, 'Laundry Service', 'laundry-service', '62e66ae8e2fc51659267816.jpg', '1000.00000000', NULL, '[{\"question\":\"Duis Eleifend Molestie Leo At Mollis ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Inibus Bonorum \\\"Extremes Of Good\\u201d ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Repetition, Injected Humour Or Non ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Duis Eleifend Molestie Leo At Mollis ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Repetition, Injected Humour Or Non ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"}]', '<h3 class=\"main-title\" style=\"margin-bottom: 20px; font-weight: 700; font-size: 22px; color: rgb(41, 41, 41); text-transform: capitalize;\">Overview Of Laundry Service</h3><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 30px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">What\'s Included?</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Only Service Charge</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">7 Days Service Warranty</li></ul></div><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 30px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">What\'s Excluded?</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Price Of Materials Or Parts</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Transportation Cost For Carrying New Materials/Parts</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Warranty Given By Manufacturer</li></ul></div><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 0px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">Available Services</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Basic Servicing</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Master Service</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Water Drop Solution</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Jet Wash</li></ul></div>', 0, 0, 1, '2022-07-31 11:43:36', '2022-07-31 13:32:22'),
(7, 9, 'Car Wash', 'car-wash', '62e66b4ab0f571659267914.jpg', '500.00000000', NULL, '[{\"question\":\"Duis Eleifend Molestie Leo At Mollis ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Inibus Bonorum \\\"Extremes Of Good\\u201d ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Repetition, Injected Humour Or Non ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Duis Eleifend Molestie Leo At Mollis ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Repetition, Injected Humour Or Non ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"}]', '<h3 class=\"main-title\" style=\"margin-bottom: 20px; font-weight: 700; font-size: 22px; color: rgb(41, 41, 41); text-transform: capitalize;\">Overview Of Car Wash</h3><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 30px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">What\'s Included?</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Only Service Charge</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">7 Days Service Warranty</li></ul></div><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 30px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">What\'s Excluded?</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Price Of Materials Or Parts</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Transportation Cost For Carrying New Materials/Parts</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Warranty Given By Manufacturer</li></ul></div><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 0px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">Available Services</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Basic Servicing</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Master Service</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Water Drop Solution</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Jet Wash</li></ul></div>', 0, 0, 1, '2022-07-31 11:44:37', '2022-07-31 13:08:36'),
(8, 9, 'Car Interior Design', 'car-interior-design', '62e66bd0201d61659268048.jpg', '2000.00000000', NULL, '[{\"question\":\"Duis Eleifend Molestie Leo At Mollis ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Inibus Bonorum \\\"Extremes Of Good\\u201d ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Repetition, Injected Humour Or Non ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Duis Eleifend Molestie Leo At Mollis ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Repetition, Injected Humour Or Non ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"}]', '<h3 class=\"main-title\" style=\"margin-bottom: 20px; font-weight: 700; font-size: 22px; color: rgb(41, 41, 41); text-transform: capitalize;\">Overview Of Car Interior Design</h3><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 30px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">What\'s Included?</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Only Service Charge</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">7 Days Service Warranty</li></ul></div><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 30px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">What\'s Excluded?</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Price Of Materials Or Parts</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Transportation Cost For Carrying New Materials/Parts</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Warranty Given By Manufacturer</li></ul></div><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 0px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">Available Services</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Basic Servicing</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Master Service</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Water Drop Solution</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Jet Wash</li></ul></div>', 0, 0, 1, '2022-07-31 11:47:28', '2022-07-31 13:08:24'),
(9, 9, 'Car Servicing', 'car-servicing', '62e66c1f6e4cc1659268127.jpg', '2000.00000000', NULL, '[{\"question\":\"Duis Eleifend Molestie Leo At Mollis ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Inibus Bonorum \\\"Extremes Of Good\\u201d ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Repetition, Injected Humour Or Non ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Duis Eleifend Molestie Leo At Mollis ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Repetition, Injected Humour Or Non ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"}]', '<h3 class=\"main-title\" style=\"margin-bottom: 20px; font-weight: 700; font-size: 22px; color: rgb(41, 41, 41); text-transform: capitalize;\">Overview Of Car Servicing</h3><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 30px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">What\'s Included?</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Only Service Charge</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">7 Days Service Warranty</li></ul></div><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 30px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">What\'s Excluded?</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Price Of Materials Or Parts</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Transportation Cost For Carrying New Materials/Parts</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Warranty Given By Manufacturer</li></ul></div><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 0px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">Available Services</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Basic Servicing</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Master Service</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Water Drop Solution</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Jet Wash</li></ul></div>', 0, 0, 1, '2022-07-31 11:48:47', '2022-07-31 13:08:11'),
(10, 9, 'Car Dent & Paint Fix', 'car-dent-paint-fix', '62e66c631d7831659268195.jpg', '2000.00000000', NULL, '[{\"question\":\"Duis Eleifend Molestie Leo At Mollis ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Inibus Bonorum \\\"Extremes Of Good\\u201d ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Repetition, Injected Humour Or Non ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Duis Eleifend Molestie Leo At Mollis ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Repetition, Injected Humour Or Non ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"}]', '<h3 class=\"main-title\" style=\"margin-bottom: 20px; font-weight: 700; font-size: 22px; color: rgb(41, 41, 41); text-transform: capitalize;\">Overview Of Car Dent &amp; Paint Fix</h3><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 30px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">What\'s Included?</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Only Service Charge</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">7 Days Service Warranty</li></ul></div><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 30px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">What\'s Excluded?</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Price Of Materials Or Parts</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Transportation Cost For Carrying New Materials/Parts</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Warranty Given By Manufacturer</li></ul></div><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 0px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">Available Services</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Basic Servicing</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Master Service</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Water Drop Solution</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Jet Wash</li></ul></div>', 0, 0, 1, '2022-07-31 11:49:55', '2022-08-02 09:39:35'),
(11, 2, 'AC Servicing', 'ac-servicing', '62e8dff34680e1659428851.jpg', '2000.00000000', NULL, '[{\"question\":\"Duis Eleifend Molestie Leo At Mollis ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Inibus Bonorum \\\"Extremes Of Good\\u201d ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Repetition, Injected Humour Or Non ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Duis Eleifend Molestie Leo At Mollis ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Repetition, Injected Humour Or Non ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"}]', '<h3 class=\"main-title\" style=\"margin-bottom: 20px; font-weight: 700; font-size: 22px; color: rgb(41, 41, 41); text-transform: capitalize;\">Overview Of AC Servicing</h3><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 30px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">What\'s Included?</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Only Service Charge</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">7 Days Service Warranty</li></ul></div><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 30px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">What\'s Excluded?</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Price Of Materials Or Parts</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Transportation Cost For Carrying New Materials/Parts</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Warranty Given By Manufacturer</li></ul></div><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 0px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">Available Services</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Basic Servicing</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Master Service</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Water Drop Solution</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Jet Wash</li></ul></div>', 1, 1, 1, '2022-08-02 08:27:32', '2022-08-02 09:33:08'),
(12, 3, 'Laptop Servicing', 'laptop-servicing', '62e8e032821e41659428914.jpg', '1000.00000000', NULL, '[{\"question\":\"Duis Eleifend Molestie Leo At Mollis ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Inibus Bonorum \\\"Extremes Of Good\\u201d ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Repetition, Injected Humour Or Non ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Duis Eleifend Molestie Leo At Mollis ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Repetition, Injected Humour Or Non ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"}]', '<h3 class=\"main-title\" style=\"margin-bottom: 20px; font-weight: 700; font-size: 22px; color: rgb(41, 41, 41); text-transform: capitalize;\">Overview Of Laptop&nbsp;Servicing</h3><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 30px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">What\'s Included?</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Only Service Charge</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">7 Days Service Warranty</li></ul></div><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 30px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">What\'s Excluded?</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Price Of Materials Or Parts</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Transportation Cost For Carrying New Materials/Parts</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Warranty Given By Manufacturer</li></ul></div><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 0px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">Available Services</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Basic Servicing</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Master Service</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Water Drop Solution</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Jet Wash</li></ul></div>', 1, 1, 1, '2022-08-02 08:28:19', '2022-08-02 09:33:04'),
(13, 2, 'Freeze Servicing', 'freeze-servicing', '62e8e053dc1161659428947.jpg', '2000.00000000', NULL, '[{\"question\":\"Duis Eleifend Molestie Leo At Mollis ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Inibus Bonorum \\\"Extremes Of Good\\u201d ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Repetition, Injected Humour Or Non ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Duis Eleifend Molestie Leo At Mollis ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Repetition, Injected Humour Or Non ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"}]', '<h3 class=\"main-title\" style=\"margin-bottom: 20px; font-weight: 700; font-size: 22px; color: rgb(41, 41, 41); text-transform: capitalize;\">Overview Of Freeze&nbsp;Servicing</h3><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 30px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">What\'s Included?</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Only Service Charge</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">7 Days Service Warranty</li></ul></div><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 30px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">What\'s Excluded?</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Price Of Materials Or Parts</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Transportation Cost For Carrying New Materials/Parts</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Warranty Given By Manufacturer</li></ul></div><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 0px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">Available Services</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Basic Servicing</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Master Service</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Water Drop Solution</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Jet Wash</li></ul></div>', 1, 1, 1, '2022-08-02 08:29:07', '2022-08-02 09:32:59');
INSERT INTO `services` (`id`, `category_id`, `name`, `slug`, `image`, `price`, `service_overview`, `faq`, `service_details`, `recommended`, `trending`, `status`, `created_at`, `updated_at`) VALUES
(14, 3, 'Electronic Servicing', 'electronic-servicing', '62e8e08104b1f1659428993.jpg', '1000.00000000', NULL, '[{\"question\":\"Duis Eleifend Molestie Leo At Mollis ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Inibus Bonorum \\\"Extremes Of Good\\u201d ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Repetition, Injected Humour Or Non ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Duis Eleifend Molestie Leo At Mollis ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"},{\"question\":\"Repetition, Injected Humour Or Non ?\",\"answer\":\"The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested. Sections 1.10.32 And 1.10.33 From \\\"De Finibus Bonorum Et Malorum\\\" By Cicero Are Also\"}]', '<h3 class=\"main-title\" style=\"margin-bottom: 20px; font-weight: 700; font-size: 22px; color: rgb(41, 41, 41); text-transform: capitalize;\">Overview Of Electronic&nbsp;Servicing</h3><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 30px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">What\'s Included?</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Only Service Charge</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">7 Days Service Warranty</li></ul></div><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 30px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">What\'s Excluded?</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Price Of Materials Or Parts</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Transportation Cost For Carrying New Materials/Parts</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">Warranty Given By Manufacturer</li></ul></div><div class=\"overview-list-area\" style=\"-webkit-font-smoothing: antialiased; padding-bottom: 0px; color: rgb(41, 41, 41);\"><h3 class=\"title\" style=\"font-weight: 600; font-size: 20px; color: rgb(41, 41, 41); text-transform: capitalize;\">Available Services</h3><ul class=\"overview-list\" style=\"-webkit-font-smoothing: antialiased;\"><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Basic Servicing</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Master Service</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Water Drop Solution</li><li style=\"-webkit-font-smoothing: antialiased; text-transform: capitalize; font-size: 14px; padding-top: 10px; padding-left: 15px; position: relative;\">AC Jet Wash</li></ul></div>', 1, 1, 1, '2022-08-02 08:29:53', '2022-08-02 09:32:55');

-- --------------------------------------------------------

--
-- Table structure for table `support_attachments`
--

CREATE TABLE `support_attachments` (
  `id` int(100) UNSIGNED NOT NULL,
  `support_message_id` int(100) UNSIGNED NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `support_attachments`
--

INSERT INTO `support_attachments` (`id`, `support_message_id`, `attachment`, `created_at`, `updated_at`) VALUES
(4, 4, '62d512bd858bd1658131133.jpg', '2022-07-18 07:58:53', '2022-07-18 07:58:53');

-- --------------------------------------------------------

--
-- Table structure for table `support_messages`
--

CREATE TABLE `support_messages` (
  `id` int(100) NOT NULL,
  `supportticket_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `admin_id` int(10) NOT NULL DEFAULT 0,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `support_messages`
--

INSERT INTO `support_messages` (`id`, `supportticket_id`, `admin_id`, `message`, `created_at`, `updated_at`) VALUES
(4, 1, 1, 'vv', '2022-07-18 07:58:53', '2022-07-18 07:58:53');

-- --------------------------------------------------------

--
-- Table structure for table `support_tickets`
--

CREATE TABLE `support_tickets` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL DEFAULT 0,
  `name` varchar(40) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ticket` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL COMMENT '0: Open, 1: Answered, 2: Replied, 3: Closed',
  `priority` tinyint(4) NOT NULL DEFAULT 0 COMMENT '	1 = Low, 2 = medium, 3 = heigh',
  `last_reply` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `support_tickets`
--

INSERT INTO `support_tickets` (`id`, `user_id`, `name`, `email`, `ticket`, `subject`, `status`, `priority`, `last_reply`, `created_at`, `updated_at`) VALUES
(1, 1, 'Test User', 'md.mehedihasaniubat@gmail.com', '237211', 'Help Me', 3, 1, '2022-07-18 13:58:53', '2022-07-18 06:48:41', '2022-07-18 09:48:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_by` int(100) DEFAULT 0,
  `balance` decimal(28,8) DEFAULT 0.00000000,
  `voucher_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'contains full address',
  `delivery_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'delivery full address',
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '	0: banned, 1: active',
  `kyc_status` tinyint(10) NOT NULL DEFAULT 0,
  `kyc_info` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kyc_reject_reasons` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ev` tinyint(1) NOT NULL DEFAULT 0 COMMENT '	0: email unverified, 1: email verified',
  `sv` tinyint(1) NOT NULL DEFAULT 0 COMMENT '	0: sms unverified, 1: sms verified',
  `ver_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '	stores verification code',
  `ver_code_send_at` datetime DEFAULT NULL COMMENT '	verification send time',
  `ts` tinyint(1) NOT NULL DEFAULT 0 COMMENT '	0: 2fa off, 1: 2fa on',
  `tv` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0: 2fa unverified, 1: 2fa verified',
  `tsc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `company_name`, `firstname`, `lastname`, `username`, `email`, `country_code`, `mobile`, `date_of_birth`, `gender`, `ref_by`, `balance`, `voucher_id`, `voucher_code`, `image`, `address`, `delivery_address`, `status`, `kyc_status`, `kyc_info`, `kyc_reject_reasons`, `ev`, `sv`, `ver_code`, `ver_code_send_at`, `ts`, `tv`, `tsc`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Test', 'User', 'testuser', 'testuser@gmail.com', 'BD', '01791205437', '2022-08-01', 'Male', 0, '0.00000000', '', NULL, '62e927dd8597a1659447261.jpg', '{\"address\":\"Dkaka,Uttara\",\"state\":\"\",\"zip\":\"\",\"country\":\"Bangladesh\",\"city\":\"Dhaka\"}', '{\"receiver_name\":\"Sania Sany\",\"contact\":\"01791205437\",\"address\":\"Uttara, Dhaka 1230\"}', 1, 1, '{\"id_upload\":{\"field_value\":\"62dd8832a9ef21658685490.png\",\"type\":\"file\"},\"id_number\":{\"field_value\":\"12345678\",\"type\":\"text\"}}', '', 1, 1, '481697', '2022-07-19 12:15:17', 0, 1, NULL, NULL, '$2y$10$4/6rF49zYMsx2eXV7RsMWuX2q60zhTYOcMgf7abbf5nJOoXQs0oL2', NULL, '2022-07-16 06:24:44', '2022-08-02 14:21:16'),
(2, NULL, 'dfd', 'fgfg', 'fgvf', 'mehedihasaniubat@gmail.com', NULL, NULL, NULL, NULL, 0, '0.00000000', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, 0, 0, NULL, NULL, 0, 1, NULL, NULL, '', NULL, NULL, NULL),
(4, NULL, 'Mehedi', 'Hasan', 'mehediayon', 'mh.ayon222@gmail.com', NULL, '+8801646789381', NULL, NULL, 0, '0.00000000', NULL, NULL, NULL, '{\"address\":\"\",\"state\":\"\",\"zip\":\"\",\"country\":null,\"city\":\"\"}', NULL, 1, 0, NULL, NULL, 1, 1, NULL, NULL, 0, 1, NULL, NULL, '$2y$10$eECtO3EZAEm56FhW59ONBe.aXr4Tg/MXxUSG1GD.DGT.qGMLzIJ3K', NULL, '2022-07-19 09:24:40', '2022-07-19 09:26:18');

-- --------------------------------------------------------

--
-- Table structure for table `user_addresses`
--

CREATE TABLE `user_addresses` (
  `id` int(100) NOT NULL,
  `user_id` int(10) NOT NULL,
  `address_type` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_addresses`
--

INSERT INTO `user_addresses` (`id`, `user_id`, `address_type`, `contact_no`, `address`, `created_at`, `updated_at`) VALUES
(20, 1, 'home', '01791205437', 'Uttara, Dhaka, Bangladesh', '2022-08-02 12:12:22', '2022-08-02 12:12:22'),
(23, 1, 'office', '0177364533', 'Uttara, Dhaka, Bangladesh', '2022-08-02 12:17:51', '2022-08-02 12:18:44');

-- --------------------------------------------------------

--
-- Table structure for table `user_logins`
--

CREATE TABLE `user_logins` (
  `id` int(100) UNSIGNED NOT NULL,
  `user_id` int(10) NOT NULL DEFAULT 0,
  `user_ip` varchar(255) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `country` varchar(40) DEFAULT NULL,
  `country_code` varchar(40) DEFAULT NULL,
  `longitude` varchar(40) DEFAULT NULL,
  `latitude` varchar(40) DEFAULT NULL,
  `browser` varchar(40) NOT NULL DEFAULT '',
  `os` varchar(40) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_logins`
--

INSERT INTO `user_logins` (`id`, `user_id`, `user_ip`, `city`, `country`, `country_code`, `longitude`, `latitude`, `browser`, `os`, `created_at`, `updated_at`) VALUES
(1, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-07-18 16:33:27', '2022-07-18 16:33:27'),
(2, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-07-18 16:45:47', '2022-07-18 16:45:47'),
(3, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-07-18 16:49:00', '2022-07-18 16:49:00'),
(4, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-07-18 17:29:52', '2022-07-18 17:29:52'),
(5, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-07-19 05:00:59', '2022-07-19 05:00:59'),
(6, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-07-19 07:20:31', '2022-07-19 07:20:31'),
(7, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-07-19 07:22:57', '2022-07-19 07:22:57'),
(8, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-07-19 07:29:31', '2022-07-19 07:29:31'),
(9, 3, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-07-19 09:21:57', '2022-07-19 09:21:57'),
(10, 4, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-07-19 09:24:40', '2022-07-19 09:24:40'),
(11, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-07-19 09:59:45', '2022-07-19 09:59:45'),
(12, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-07-20 05:43:51', '2022-07-20 05:43:51'),
(13, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-07-20 10:46:33', '2022-07-20 10:46:33'),
(14, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-07-21 04:04:50', '2022-07-21 04:04:50'),
(15, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-07-21 05:04:55', '2022-07-21 05:04:55'),
(16, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-07-21 05:05:37', '2022-07-21 05:05:37'),
(17, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-07-21 05:07:03', '2022-07-21 05:07:03'),
(18, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-07-21 05:10:25', '2022-07-21 05:10:25'),
(19, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-07-21 06:40:50', '2022-07-21 06:40:50'),
(20, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-07-24 05:03:49', '2022-07-24 05:03:49'),
(21, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-07-24 09:38:51', '2022-07-24 09:38:51'),
(22, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-07-24 15:26:21', '2022-07-24 15:26:21'),
(23, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-07-24 17:26:12', '2022-07-24 17:26:12'),
(24, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-07-25 05:21:02', '2022-07-25 05:21:02'),
(25, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-07-25 11:25:46', '2022-07-25 11:25:46'),
(26, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-07-26 05:35:27', '2022-07-26 05:35:27'),
(27, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-07-26 13:20:45', '2022-07-26 13:20:45'),
(28, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-07-27 05:32:23', '2022-07-27 05:32:23'),
(29, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-07-27 16:24:13', '2022-07-27 16:24:13'),
(30, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-07-28 08:46:10', '2022-07-28 08:46:10'),
(31, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-07-28 14:40:38', '2022-07-28 14:40:38'),
(32, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-07-31 09:24:31', '2022-07-31 09:24:31'),
(33, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-08-01 15:23:51', '2022-08-01 15:23:51'),
(34, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-08-02 04:40:03', '2022-08-02 04:40:03'),
(35, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-08-02 09:55:44', '2022-08-02 09:55:44'),
(36, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-08-03 07:39:21', '2022-08-03 07:39:21'),
(37, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-08-03 08:34:08', '2022-08-03 08:34:08'),
(38, 1, '::1', '', '', '', '', '', 'Chrome', 'Windows 10', '2022-08-03 12:53:20', '2022-08-03 12:53:20');

-- --------------------------------------------------------

--
-- Table structure for table `vouchers`
--

CREATE TABLE `vouchers` (
  `id` int(100) UNSIGNED NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `amount` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vouchers`
--

INSERT INTO `vouchers` (`id`, `code`, `amount`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'mehedi10', '10.00000000', NULL, 1, '2022-07-21 10:54:30', '2022-07-30 06:13:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `admin_notifications`
--
ALTER TABLE `admin_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_hours`
--
ALTER TABLE `delivery_hours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_logs`
--
ALTER TABLE `email_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_sms_templates`
--
ALTER TABLE `email_sms_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extensions`
--
ALTER TABLE `extensions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fees_and_charges`
--
ALTER TABLE `fees_and_charges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontends`
--
ALTER TABLE `frontends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kyc_forms`
--
ALTER TABLE `kyc_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_types`
--
ALTER TABLE `order_types`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pickup_orders`
--
ALTER TABLE `pickup_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pick_actions`
--
ALTER TABLE `pick_actions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send_me_order_places`
--
ALTER TABLE `send_me_order_places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_attachments`
--
ALTER TABLE `support_attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_messages`
--
ALTER TABLE `support_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_tickets`
--
ALTER TABLE `support_tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_logins`
--
ALTER TABLE `user_logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vouchers`
--
ALTER TABLE `vouchers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_notifications`
--
ALTER TABLE `admin_notifications`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `delivery_hours`
--
ALTER TABLE `delivery_hours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `email_logs`
--
ALTER TABLE `email_logs`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `email_sms_templates`
--
ALTER TABLE `email_sms_templates`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `extensions`
--
ALTER TABLE `extensions`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fees_and_charges`
--
ALTER TABLE `fees_and_charges`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `frontends`
--
ALTER TABLE `frontends`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kyc_forms`
--
ALTER TABLE `kyc_forms`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `order_types`
--
ALTER TABLE `order_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pickup_orders`
--
ALTER TABLE `pickup_orders`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pick_actions`
--
ALTER TABLE `pick_actions`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `send_me_order_places`
--
ALTER TABLE `send_me_order_places`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `support_attachments`
--
ALTER TABLE `support_attachments`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `support_messages`
--
ALTER TABLE `support_messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `support_tickets`
--
ALTER TABLE `support_tickets`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_addresses`
--
ALTER TABLE `user_addresses`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_logins`
--
ALTER TABLE `user_logins`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
