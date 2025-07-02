-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 03, 2025 at 01:19 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ai_robot`
--

-- --------------------------------------------------------

--
-- Table structure for table `robot_actions`
--

CREATE TABLE `robot_actions` (
  `id` int(11) NOT NULL,
  `action` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `robot_actions`
--

INSERT INTO `robot_actions` (`id`, `action`, `created_at`) VALUES
(36, 'right', '2025-07-02 22:42:00'),
(37, 'left', '2025-07-02 22:42:01'),
(38, 'right', '2025-07-02 23:14:11'),
(39, 'left', '2025-07-02 23:14:12'),
(40, 'up', '2025-07-02 23:14:13'),
(41, 'down', '2025-07-02 23:14:14'),
(42, 'stop', '2025-07-02 23:14:15'),
(43, 'stop', '2025-07-02 23:14:16'),
(44, 'stop', '2025-07-02 23:14:18'),
(45, 'backward', '2025-07-02 23:14:20'),
(46, 'forward', '2025-07-02 23:14:21'),
(47, 'backward', '2025-07-02 23:14:22'),
(48, 'right', '2025-07-02 23:14:23'),
(49, 'left', '2025-07-02 23:14:24'),
(50, 'down', '2025-07-02 23:14:24'),
(51, 'up', '2025-07-02 23:14:25'),
(52, 'stop', '2025-07-02 23:15:06'),
(53, 'backward', '2025-07-02 23:15:09'),
(54, 'forward', '2025-07-02 23:15:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `robot_actions`
--
ALTER TABLE `robot_actions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `robot_actions`
--
ALTER TABLE `robot_actions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
