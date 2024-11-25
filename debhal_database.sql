-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2024 at 06:56 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `debhal`
--

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `ad_posted_by` varchar(50) NOT NULL,
  `total_floor` varchar(250) NOT NULL,
  `situated_floor` varchar(250) NOT NULL,
  `carpet_area` varchar(250) NOT NULL,
  `super_built_area` varchar(250) DEFAULT NULL,
  `furnishing_status` varchar(250) NOT NULL,
  `bedrooms` varchar(250) DEFAULT NULL,
  `bathrooms` varchar(250) DEFAULT NULL,
  `balconies` varchar(250) DEFAULT NULL,
  `bachelors_allowed` varchar(250) DEFAULT NULL,
  `meal_included` varchar(250) DEFAULT NULL,
  `ideal_for` varchar(250) DEFAULT NULL,
  `parking` varchar(250) DEFAULT NULL,
  `monthly_rent` varchar(250) NOT NULL,
  `price` varchar(250) DEFAULT NULL,
  `monthly_maintenance` varchar(250) NOT NULL,
  `deposit_amount` varchar(250) NOT NULL,
  `property_name` varchar(100) NOT NULL,
  `key_features` text DEFAULT NULL,
  `contact_no` varchar(250) NOT NULL,
  `property_photos` varchar(250) DEFAULT NULL,
  `location` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `property_owner_type_filter` varchar(250) NOT NULL,
  `property_type_filter` varchar(250) NOT NULL,
  `property_display_filter` varchar(250) NOT NULL,
  `property_plan_filter` varchar(250) DEFAULT NULL,
  `property_date_filter` varchar(250) NOT NULL,
  `property_name_filter` varchar(250) NOT NULL,
  `property_phone_filter` varchar(250) NOT NULL,
  `property_email_filter` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `ad_posted_by`, `total_floor`, `situated_floor`, `carpet_area`, `super_built_area`, `furnishing_status`, `bedrooms`, `bathrooms`, `balconies`, `bachelors_allowed`, `meal_included`, `ideal_for`, `parking`, `monthly_rent`, `price`, `monthly_maintenance`, `deposit_amount`, `property_name`, `key_features`, `contact_no`, `property_photos`, `location`, `created_at`, `property_owner_type_filter`, `property_type_filter`, `property_display_filter`, `property_plan_filter`, `property_date_filter`, `property_name_filter`, `property_phone_filter`, `property_email_filter`) VALUES
(1, '', '5', '2', '7852', '', 'furnished', '5', '4', '7', 'yes', '', '', 'four-wheeler', '75000', '', '15000', '200000', 'Oberoi Villa', '', '9878654532', 'a:4:{i:0;s:46:\"./uploads/dd39583abe09c4ed0bfd4f3c8cd57e72.jpg\";i:1;s:46:\"./uploads/25c35ca19ab51e3f91acbca6de5d0bec.jpg\";i:2;s:46:\"./uploads/8a4b519bcd5806c6bca7ef789bfed725.jpg\";i:3;s:46:\"./uploads/da5e0376d908ba33842530eb4b99fb8e.jpg\";}', 'Dwarka Mor Metro Station, Dwarka, New Delhi, Delhi 110059, India', '2024-09-23 07:33:24', 'rent', 'Apartments / Houses & Villas', 'visible', 'free', '23-09-2024', 'Deepanshu Rawat', '9810984770', 'deepanshupoddar1913051015@gmail.com'),
(2, '', '8', '3', '', '', 'semi-furnished', '', '', '', '', 'yes', 'both', 'two-wheeler', '4500', '', '500', '5000', 'Poorans PG', '', '9330224754', 'a:4:{i:0;s:46:\"./uploads/5b50f6ac2d5bb633e05fde1880868f96.jpg\";i:1;s:46:\"./uploads/599f6aff33a34d921dd17c0b34a13e07.jpg\";i:2;s:46:\"./uploads/f261dffcc77f7d7763da0df070a5fdab.jpg\";i:3;s:47:\"./uploads/9ea190e2c1fd36b0300d991528d8ba4f.webp\";}', 'Kakrola, Dwarka, South West Delhi, Delhi, India', '2024-09-23 09:45:47', 'rent', 'pg  roommate', 'visible', 'free', '23-09-2024', 'Deepanshu Rawat', '9810984770', 'deepanshupoddar1913051015@gmail.com'),
(3, '', '1', '1', '5400', '', 'semi-furnished', '', '', '', '', '', '', 'Agent', '12000', '', '5000', '25000', 'Pluralscope', '', '9330224754', 'a:4:{i:0;s:46:\"./uploads/c49889cde324f4233a80061b19848d32.jpg\";i:1;s:47:\"./uploads/e0b51505a74e485a8e9765055f48ef7e.webp\";i:2;s:46:\"./uploads/4069011a07eb912d6ccc182735ff910b.jpg\";i:3;s:47:\"./uploads/ad11b5ad97e8049d8d7dbc63ab6ad55f.webp\";}', 'Moti Nagar, New Delhi, West Delhi, Delhi, India', '2024-09-23 09:47:43', 'rent', 'shop office godown', 'visible', 'free', '23-09-2024', 'Deepanshu Rawat', '9810984770', 'deepanshupoddar1913051015@gmail.com'),
(4, '', '8', '2', '24565', '75655', 'furnished', '6', '4', '2', '', '', '', 'two-wheeler', '', '78000', '5000', '', 'Poddar Appartments', '', '9330224754', 'a:4:{i:0;s:46:\"./uploads/10decb407701d74c7285fdab5bb1e07d.jpg\";i:1;s:46:\"./uploads/05e9b87da2b79537aa26103a6d3256d0.jpg\";i:2;s:47:\"./uploads/30b3582f71c85f923b572c7abd9b6317.avif\";i:3;s:46:\"./uploads/b5493e5d816ec84bae6a9e2eb45c018c.jpg\";}', 'Rajiv Chowk  राजीव चौक Metro Station, Rajiv Chowk, Inner Circle, Connaught Place, New Delhi, Delhi 110001, India', '2024-09-23 09:49:37', 'sale', 'Apartments / Houses & Villas', 'visible', 'free', '23-09-2024', 'Deepanshu Rawat', '9810984770', 'deepanshupoddar1913051015@gmail.com'),
(5, '', '2', '2', '', '', 'semi-furnished', '', '', '', '', 'yes', 'both', 'four-wheeler', '', '85000', '4500', '', '5 Star PG Rooms', '', '9330224754', 'a:3:{i:0;s:46:\"./uploads/b71dc23fb021e603cfa2ff9af7f46a9a.jpg\";i:1;s:46:\"./uploads/13b1b0fc8760cb652f1b9b81952e58ba.jpg\";i:2;s:47:\"./uploads/1789119a8a601fe15e7eca03d2b64992.webp\";}', 'Patel Nagar, New Delhi, West Delhi, Delhi, India', '2024-09-23 09:51:14', 'sale', 'pg roommate', 'visible', 'free', '23-09-2024', 'Deepanshu Rawat', '9810984770', 'deepanshupoddar1913051015@gmail.com'),
(6, '', '8', '', '78966', '', 'semi-furnished', '', '', '', '', '', '', 'Agent', '', '150000', '', '', 'Clearpier Tower', '', '9330224754', 'a:3:{i:0;s:46:\"./uploads/0bf0673f443f997f6007922e0e17612d.jpg\";i:1;s:47:\"./uploads/09f086c06124c48192816dc49c182284.webp\";i:2;s:47:\"./uploads/cbdc7ba2e0cacd6ba55a8bf2a52e8d8c.webp\";}', 'Saket, New Delhi, South Delhi, Delhi, India', '2024-09-23 09:52:37', 'sale', 'Shop Office Godown', 'visible', 'free', '23-09-2024', 'Deepanshu Rawat', '9810984770', 'deepanshupoddar1913051015@gmail.com'),
(7, '', '8', '6', '45862', '', 'semi-furnished', '5', '2', '3', 'Yes', '', '', 'two-wheeler', '8500', '', '4500', '5000', 'Poddars Villa', '', '9330224754', 'a:4:{i:0;s:46:\"./uploads/a30a9aa3340208c1c0e58eda1db4fc3e.jpg\";i:1;s:46:\"./uploads/8fdea8723d3904e5d8623a942b85ed55.jpg\";i:2;s:46:\"./uploads/bafa101e4e0828e154d7974a377db707.jpg\";i:3;s:46:\"./uploads/df8703c26eb20d332608cf01c36fb2c7.jpg\";}', 'Greater Kailash, New Delhi, South Delhi, Delhi, India', '2024-09-23 09:56:24', 'rent', 'Apartments / Houses & Villas', 'visible', 'free', '23-09-2024', 'Deepanshu Rawat', '9810984770', 'deepanshupoddar1913051015@gmail.com'),
(8, '', '8', '5', '', '', 'unfurnished', '', '', '', '', 'No', 'Male', 'two-wheeler', '2000', '', '200', '150', 'Boys PG', '', '9330224754', 'a:2:{i:0;s:46:\"./uploads/053b4ef4af692f300994a8b92f805a2b.jpg\";i:1;s:47:\"./uploads/efab913cd223cc7112a1cccd90c61004.webp\";}', 'Kirti Nagar Furniture Market, Kirti Nagar, New Delhi, Delhi 110015, India', '2024-09-23 09:57:57', 'rent', 'pg  roommate', 'visible', 'free', '23-09-2024', 'Deepanshu Rawat', '9810984770', 'deepanshupoddar1913051015@gmail.com'),
(9, '', '5', '2', '4854', '759598', 'furnished', '4', '2', '1', '', '', '', 'four-wheeler', '', '9000000', '50000', '', 'Debhal Building', '', '9330224754', 'a:4:{i:0;s:46:\"./uploads/8a100ad49bc3d747cd9874f0d83802e6.jpg\";i:1;s:46:\"./uploads/ebff105c6e8e53ba6adf25a3741da590.jpg\";i:2;s:47:\"./uploads/c460be5e1604705faa4f0e8c3c662901.avif\";i:3;s:46:\"./uploads/46c890191c78cf5b9a13e5134cc03e79.jpg\";}', 'Karol Bagh, New Delhi, Central Delhi, Delhi, India', '2024-09-23 10:01:27', 'sale', 'Apartments / Houses & Villas', 'visible', 'free', '23-09-2024', 'Deepanshu Rawat', '9810984770', 'deepanshupoddar1913051015@gmail.com'),
(10, '', '1', '', '45656', '', 'unfurnished', '', '', '', '', '', '', 'Builder', '', '500000', '', '', 'Modern Werehouse', '', '9330224754', 'a:1:{i:0;s:46:\"./uploads/03fea31abac7d1accd35738b44822a93.jpg\";}', 'Gurugram, Haryana, India', '2024-09-23 10:02:36', 'sale', 'Shop Office Godown', 'visible', 'free', '23-09-2024', 'Deepanshu Rawat', '9810984770', 'deepanshupoddar1913051015@gmail.com'),
(11, '', '2', '1', '78956', '78565', 'furnished', '6', '4', '2', '', '', '', 'four-wheeler', '', '7800000', '50000', '', 'Pent House', '', '9330224754', 'a:1:{i:0;s:46:\"./uploads/6fd1f672e8a6264bda44be942d0a8059.jpg\";}', 'Chhattarpur  छतरपुर Metro Station, Chhattarpur, New Delhi, Delhi 110030, India', '2024-09-23 10:04:35', 'sale', 'Apartments / Houses & Villas', 'visible', 'free', '23-09-2024', 'Deepanshu Rawat', '9810984770', 'deepanshupoddar1913051015@gmail.com'),
(12, 'Agent', '7', '3', '', '', 'semi-furnished', '', '', '', '', 'No', 'both', 'four-wheeler', '8500', '', '500', '5000', 'Pal special PG', '', '9330224754', 'a:3:{i:0;s:46:\"./uploads/2db9565aebf3b4fe314ad2d7b369359c.jpg\";i:1;s:47:\"./uploads/5f1e9d3d1fbf24538e71da3cf588bc6e.webp\";i:2;s:46:\"./uploads/577388fe22a6eeae6ae9c95cab1be1bc.jpg\";}', 'Nangli Sakrawati, Dwarka, South West Delhi, Delhi, India', '2024-09-23 10:18:10', 'rent', 'pg  roommate', 'visible', 'free', '23-09-2024', 'DevDutt Pal', '9818782565', 'deepanshu.adaxx@gmail.com'),
(13, 'Agent', '1', '1', '4582', '', 'furnished', '', '', '', '', '', '', '', '4500', '', '8500', '5000', 'Deep Godaown', 'Stockiest Godown', '9330224754', 'a:2:{i:0;s:47:\"./uploads/c361b4bc008e689f43d218940a761add.webp\";i:1;s:47:\"./uploads/94cdf06376c4dd29b8d98b38427e39f5.webp\";}', 'Chandni Chowk, Chandni Chowk, New Delhi, Delhi 110006, India', '2024-09-23 10:21:15', 'rent', 'shop office godown', 'visible', 'free', '23-09-2024', 'DevDutt Pal', '9818782565', 'deepanshu.adaxx@gmail.com'),
(14, 'Agent', '4', '', '4582', '', 'semi-furnished', '', '', '', '', '', '', '', '', '78000', '', '', 'Sharma Tower', '', '981098470', 'a:1:{i:0;s:46:\"./uploads/3c3ac0cddac63ab2ef72cf3abb33d8de.jpg\";}', 'Janakpuri, New Delhi, West Delhi, Delhi, India', '2024-09-23 10:22:30', 'sale', 'Shop Office Godown', 'visible', 'free', '23-09-2024', 'DevDutt Pal', '9818782565', 'deepanshu.adaxx@gmail.com'),
(15, 'Owner', '8', '5', '', '', 'semi-furnished', '', '', '', '', 'No', 'both', 'four-wheeler', '', '80000', '500', '', 'property name', '', '9330224754', 'a:2:{i:0;s:46:\"./uploads/7bc6b0ff5e5dd70a4cd753303d6bbfea.jpg\";i:1;s:46:\"./uploads/59ceb313c6d0878e90a4b67872567cb6.jpg\";}', 'Tilak Nagar, New Delhi, West Delhi, Delhi, India', '2024-09-23 10:23:41', 'sale', 'pg roommate', 'visible', 'free', '23-09-2024', 'DevDutt Pal', '9818782565', 'deepanshu.adaxx@gmail.com'),
(16, 'Agent', '5', '', '4845', '', 'semi-furnished', '', '', '', '', '', '', '', '', '4500', '', '', 'property name', '', '98109884770', 'a:1:{i:0;s:47:\"./uploads/20896735fc919899edeefbb315fe05d2.webp\";}', 'Kashmiri Gate, New Delhi, Delhi 110006, India', '2024-09-23 10:58:09', 'sale', 'Shop Office Godown', 'visible', 'free', '23-09-2024', 'DevDutt Pal', '9818782565', 'deepanshu.adaxx@gmail.com'),
(18, 'Agent', '5', '7', '4568', '', 'semi-furnished', '', '', '', '', '', '', '', '25565', '', '452', '5465', 'random home', '', '9810984770', 'a:1:{i:0;s:47:\"./uploads/f7aef6a693e33247735b28237ca9fe57.webp\";}', 'Kolkata, West Bengal, India', '2024-09-25 16:53:03', 'rent', 'shop office godown', 'visible', 'free', '25-09-2024', 'pintu halder', '9330224754', 'pintuowner@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `display_pic` varchar(250) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `plan` varchar(250) NOT NULL,
  `available_limits` varchar(100) NOT NULL DEFAULT '1',
  `limit_update_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `gender`, `email`, `phone`, `display_pic`, `user_password`, `created_at`, `plan`, `available_limits`, `limit_update_time`) VALUES
(1, 'Deepanshu Rawat', 'Male', 'deepanshupoddar1913051015@gmail.com', '9810984777', '', '$2y$10$ik7MD6D0j6vE7BxRWVH1uujObW/0aFRRLgRXDpoXwfRNoOpFgyFRW', '2024-09-23 07:18:08', 'free', '0', '2024-09-23 07:18:08'),
(2, 'DevDutt Poddar', 'Male', 'deepanshu.adaxx@gmail.com', '9818782565', '0f026cc26fd9c9eee091e867ecd455b4.webp', '$2y$10$XYB0piCkOPkDhWuqRGVysuqP1scfnA.Wa3ewEuesNteUh0ZwInuE2', '2024-09-23 10:14:18', 'free', '0', '2024-09-22 10:14:18'),
(3, 'Deepanshu Poddar', 'male', 'deepanshupoddar0895@gmail.com', '9847565856', '', '$2y$10$so/eFGjP8i8NVgeyOWfsFeR28bpqOboLI3lN/9W767.F5KAEKgHCu', '2024-09-24 05:29:44', 'free', '1', '2024-09-24 05:29:44'),
(4, 'Deepanshu Poddar', 'male', 'test@gmail.com', '9810984770', '', '$2y$10$b/DDSze9jPqTW5JzPA8DfOC5ee4hmrJV9ANeXbGE7zYnP1pMf0T1S', '2024-09-25 06:48:53', 'free', '1', '2024-09-25 06:48:53'),
(5, 'Saurav Das', 'male', 'saurav@gmail.com', '7366008780', '', '$2y$10$SEcoyo3YFyg4vJZn2rD87eQi29WqKBhT.asSp8OmrCh8tt5hnJx/q', '2024-09-25 08:38:28', 'free', '1', '2024-09-25 08:38:28'),
(6, 'pintu halder', 'Male', 'pintuowner@gmail.com', '9330224754', 'd164358f8bbd8f6689933d49bcdd9bcd.webp', '$2y$10$q8HR3Hn7AEXbiR47GJFYt.8jBsB5KQiYqnAaZXBA98KVu88DIroJm', '2024-09-25 15:17:20', 'free', '0', '2024-09-25 15:17:20');

-- --------------------------------------------------------

--
-- Table structure for table `user_payments`
--

CREATE TABLE `user_payments` (
  `sno` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `no_of_ads` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `payment_time` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `user_payments`
--
ALTER TABLE `user_payments`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_payments`
--
ALTER TABLE `user_payments`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
