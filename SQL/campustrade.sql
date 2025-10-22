-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2025 at 07:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campustrade`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(190) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(80) NOT NULL,
  `last_name` varchar(80) NOT NULL,
  `school_name` varchar(160) NOT NULL,
  `major` varchar(120) NOT NULL,
  `acad_role` enum('Student','Alumni') NOT NULL,
  `market_role` enum('Buyer','Seller') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `email`, `password`, `first_name`, `last_name`, `school_name`, `major`, `acad_role`, `market_role`, `created_at`) VALUES
(5, 'joabonyabuto@gmail.com', '$2y$10$5DDsL/K2IS.ZqWb5AsCvWO8DnreKg0nPoJtZhvXcibAhIJgx4ILna', 'Joab', 'Nyabuto', 'Metropolitan State University', 'Computer Science', 'Student', 'Buyer', '2025-10-19 19:58:25'),
(10, 'hk8756oo@go.minnstate.edu', '$2y$10$.03nq3EV1nzdTcy0meBBBuN89XRiNJnpT5a3TQr32v0O08FoS8loW', 'Joab', 'Nyabuto', 'Metropolitan State University', 'Computer Science', 'Student', 'Buyer', '2025-10-20 04:34:36');

-- --------------------------------------------------------

--
-- Table structure for table `booklistings`
--

CREATE TABLE `booklistings` (
  `id` int(10) UNSIGNED NOT NULL,
  `seller_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `author` varchar(200) DEFAULT NULL,
  `isbn` varchar(32) DEFAULT NULL,
  `image_path` varchar(500) DEFAULT NULL,
  `price` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `book_state` enum('New','like New','Good','Fair') NOT NULL DEFAULT 'Good',
  `status` enum('Active','Sold','Archived') NOT NULL DEFAULT 'Active',
  `course_id` varchar(40) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `booklistings`
--
ALTER TABLE `booklistings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seller_id` (`seller_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `booklistings`
--
ALTER TABLE `booklistings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booklistings`
--
ALTER TABLE `booklistings`
  ADD CONSTRAINT `booklistings_ibfk_1` FOREIGN KEY (`seller_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
