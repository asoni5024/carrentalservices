-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 17, 2021 at 11:54 PM
-- Server version: 5.7.30-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrent`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `seat` varchar(255) NOT NULL,
  `rent` varchar(255) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_by` int(8) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(8) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `model`, `number`, `seat`, `rent`, `status`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(9, 'Activa 5G', 'UP80FJ7790', '2', '100', 1, NULL, '2021-11-17 13:49:02', NULL, NULL),
(11, 'Activa 6G ', 'UP80FS1234', '2', '200', 1, NULL, '2021-11-17 18:02:09', NULL, NULL),
(12, 'Honda City Plus', 'UP80FS6587', '5', '1500', 1, NULL, '2021-11-17 18:04:19', NULL, '2021-11-17 18:17:49');

-- --------------------------------------------------------

--
-- Table structure for table `rentcars`
--

CREATE TABLE `rentcars` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `days` varchar(255) NOT NULL,
  `startdate` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_by` int(8) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(8) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rentcars`
--

INSERT INTO `rentcars` (`id`, `user_id`, `car_id`, `days`, `startdate`, `status`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 11, 9, '5', '2021-11-21', 1, NULL, '2021-11-17 16:21:40', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_by` int(8) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(8) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `password`, `type`, `status`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(11, 'Aman', 'asoni1814@gmail.com', '9808570968', 'a152e841783914146e4bcd4f39100686', 1, 1, NULL, '2021-11-17 13:32:43', NULL, '2021-11-17 16:36:20'),
(12, 'Aman Soni', 'asoni5024@gmail.com', '8273172941', 'a152e841783914146e4bcd4f39100686', 2, 1, NULL, '2021-11-17 13:33:37', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rentcars`
--
ALTER TABLE `rentcars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `rentcars`
--
ALTER TABLE `rentcars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
