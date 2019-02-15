-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2019 at 09:55 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket_market_place`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int(3) NOT NULL,
  `category_id` int(3) NOT NULL,
  `language_id` int(3) NOT NULL,
  `location_id` int(3) NOT NULL,
  `movie_id` int(3) NOT NULL,
  `name` varchar(25) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `is_active` enum('Active','In Active') NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `category_id`, `language_id`, `location_id`, `movie_id`, `name`, `pic`, `is_active`, `create_at`, `update_at`) VALUES
(1, 1, 1, 1, 1, 'Shahrukh Khan', '---', 'Active', '2019-01-22 06:46:19', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(3) NOT NULL,
  `artist_id` int(3) NOT NULL,
  `movie_id` int(3) NOT NULL,
  `language_id` int(3) NOT NULL,
  `location_id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `artist_id`, `movie_id`, `language_id`, `location_id`, `name`) VALUES
(3, 3, 3, 3, 3, 'Adventure'),
(5, 5, 5, 5, 5, 'Animation'),
(6, 6, 6, 6, 6, 'Comedy'),
(7, 7, 7, 7, 7, 'Romantic'),
(8, 8, 8, 8, 8, 'Biography'),
(9, 1, 1, 1, 1, 'Action');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(3) NOT NULL,
  `artist_id` int(3) NOT NULL,
  `location_id` int(3) NOT NULL,
  `category_id` int(3) NOT NULL,
  `movie_id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `artist_id`, `location_id`, `category_id`, `movie_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 'Hindi', '2019-01-22 10:08:25', '2019-01-22 10:08:25'),
(2, 1, 1, 1, 1, 'English', '2019-01-23 05:04:34', '2019-01-23 05:04:34');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `menuname` varchar(25) NOT NULL,
  `authKey` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menuname`, `authKey`) VALUES
(1, 'Ticket Management', 'sfdsfsdf'),
(2, 'User Management', ''),
(3, 'Dashboard', ''),
(4, 'Movies Management', ''),
(5, 'Artist Management', ''),
(6, 'Category Management', ''),
(7, 'Languages', ''),
(8, 'Venues Management', '');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `mv_pic` longblob NOT NULL,
  `mv_category` enum('Action','Comdedy','Love Story','') NOT NULL,
  `mv_name` varchar(15) NOT NULL,
  `mv_art_name` varchar(15) NOT NULL,
  `mv_ticket` varchar(15) NOT NULL,
  `mv_language` varchar(25) NOT NULL,
  `mv_location` varchar(11) NOT NULL,
  `is_active` enum('Active','Not Active') NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `ticket_id`, `artist_id`, `category_id`, `language_id`, `location_id`, `mv_pic`, `mv_category`, `mv_name`, `mv_art_name`, `mv_ticket`, `mv_language`, `mv_location`, `is_active`, `create_at`, `update_at`) VALUES
(2, 2, 1, 1, 1, 1, 0x6d6d, 'Action', 'milan', 'Shahrukh Khan', '250', 'Hindi', 'Ahmedabad', 'Active', '2019-01-28 05:59:46', '2019-01-19 05:08:02');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `movie_id` int(3) NOT NULL,
  `ticket_id` int(30) NOT NULL,
  `no_ticket` int(3) NOT NULL,
  `payment_id` int(3) NOT NULL,
  `is_active` enum('Active','Not Active') NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `authKey` varchar(10) NOT NULL,
  `movie_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `user_id`, `movie_id`, `ticket_id`, `no_ticket`, `payment_id`, `is_active`, `create_at`, `update_at`, `authKey`, `movie_name`) VALUES
(2, 1, 1, 1, 1, 1, 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '11', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL,
  `zipcode` int(10) NOT NULL,
  `country` varchar(15) NOT NULL,
  `comp_name` varchar(15) NOT NULL,
  `phno` int(10) NOT NULL,
  `comp_email` varchar(25) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `is_active` varchar(15) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `username` varchar(15) NOT NULL,
  `authKey` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `zipcode`, `country`, `comp_name`, `phno`, `comp_email`, `address`, `city`, `state`, `logo`, `is_active`, `create_at`, `update_at`, `username`, `authKey`) VALUES
(3, 'Maya', 'Gajjar', 'mayagajjar@gmail.com', 'maya123', 364290, 'india', 'leo', 2147483647, 'kkk@kkgamil.com', 'mahuva', 'mahuav', 'guajrat', '11', 'Active', '2019-01-28 05:57:50', '0000-00-00 00:00:00', 'maya.gajjar', '123ab'),
(8, 'MILAN', 'Limbasiya', 'gajjarmilan007@gmail.com', '123456', 364290, 'India', 'Leo', 2147483647, 'leoinfosys9@gmail.com', 'block no s/8, setubandh aepartment, nava kumbharvada', 'mahuva', 'gujarat', '-', 'Active', '2019-01-28 05:58:24', '2019-01-18 06:27:25', 'Maya8100', '123');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `user_role_id` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `user_role` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`user_role_id`, `id`, `user_role`, `created_at`, `updated_at`) VALUES
(1, 3, 'admin', '2019-01-15 10:43:54', '2019-01-15 10:43:54');

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE `venues` (
  `id` int(11) NOT NULL,
  `movie_id` int(3) NOT NULL,
  `venues_id` int(3) NOT NULL,
  `location_id` int(3) NOT NULL,
  `name` varchar(25) NOT NULL,
  `location` varchar(25) NOT NULL,
  `is_active` enum('Active','In Active') NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`id`, `movie_id`, `venues_id`, `location_id`, `name`, `location`, `is_active`, `create_at`, `update_at`) VALUES
(1, 1, 1, 1, 'pvr 4d square', 'chandkheda', 'Active', '2019-01-28 05:05:55', '2019-01-28 05:05:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticket_id` (`ticket_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`user_role_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `venues`
--
ALTER TABLE `venues`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `venues`
--
ALTER TABLE `venues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_ibfk_1` FOREIGN KEY (`ticket_id`) REFERENCES `ticket` (`id`);

--
-- Constraints for table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `user_role_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
