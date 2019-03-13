-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2017 at 04:15 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shunem`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_hall`
--

CREATE TABLE `book_hall` (
  `id` int(11) NOT NULL,
  `transactionID` varchar(50) NOT NULL,
  `Amount` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `date_booked` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` varchar(100) NOT NULL,
  `product_id` int(20) NOT NULL,
  `product_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_hall`
--

INSERT INTO `book_hall` (`id`, `transactionID`, `Amount`, `name`, `phone`, `email`, `date`, `date_booked`, `Status`, `product_id`, `product_name`) VALUES
(1, '2491', '4000', 'joshua kisee', '0705118708', 'kiseej@gmail.com', '08/02/2017', '2017-08-01 19:55:56', 'APPROVED', 1, 'Hall'),
(2, '8692', '5000', 'joshua kisee', '073456', 'jacklinemwikalimutua@gmail.com', '08/02/2017', '2017-08-01 19:57:36', 'Denay', 1, 'DinningCatering'),
(3, '5486', '300', 'kisee', '0734678', 'k@gmail.com', '08/02/2017', '2017-08-01 19:58:34', 'pending', 1, 'Recreational'),
(4, '5340', '4500', 'joshua', '079086543', 'k@gmail.com', '08/02/2017', '2017-08-01 20:29:52', 'pending', 2, 'Hall'),
(5, '9258', '10000', 'mwanzia', '0712345', 'k@gmail.com', '08/02/2017', '2017-08-01 20:57:57', 'pending', 3, 'Hall'),
(6, '7083', '4500', 'jos', '072345', 'k@gmail.com', '08/02/2017', '2017-08-01 20:59:43', 'pending', 2, 'Hall'),
(7, '9301', '4000', 'joshua', '05123456', 'k@gmail.com', '08/03/2017', '2017-08-01 21:01:11', 'pending', 1, 'Hall'),
(8, '1427', '4000', 'j', '098765', 'kiseej@gmail.com', '08/03/2017', '2017-08-01 21:03:40', 'pending', 1, 'Hall'),
(9, '4465', 'joshua kisee', '', '', '', '', '2017-08-01 21:29:36', 'pending', 2491, 'Approve'),
(10, '1960', '10000', 'josfg', '073456', 'k@gmail.com', '08/03/2017', '2017-08-02 13:49:40', 'pending', 3, 'Hall'),
(11, '3101', '4500', 'popo', '070856232', 'jacklinemwikalimutua@gmail.com', '08/17/2017', '2017-08-02 14:05:52', 'pending', 2, 'Hall');

-- --------------------------------------------------------

--
-- Table structure for table `confrence`
--

CREATE TABLE `confrence` (
  `id` int(11) NOT NULL,
  `hall_name` varchar(100) NOT NULL,
  `capacity` varchar(50) NOT NULL,
  `sound` varchar(50) NOT NULL,
  `light` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `fee` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confrence`
--

INSERT INTO `confrence` (`id`, `hall_name`, `capacity`, `sound`, `light`, `image`, `description`, `fee`, `date`) VALUES
(1, 'hall A', '50', 'Yes', 'Yes', 'confrence.jpg', 'cost is daily any additional services conduct management.', '4000', '2017-03-19 18:38:20'),
(2, 'hall B', '30', 'Yes', 'Yes', 'confrence1.jpg', 'cost is daily any additional services conduct management.cost is daily any additional services conduct management.cost is daily any additional services conduct management.', '4500', '2017-03-19 18:57:15'),
(3, 'hall C', '50', 'Yes', 'Yes', 'hall.jpg', 'video conferencing available', '10000', '2017-03-19 19:25:21');

-- --------------------------------------------------------

--
-- Table structure for table `dinning`
--

CREATE TABLE `dinning` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `numberofpeople` varchar(100) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dinning`
--

INSERT INTO `dinning` (`id`, `category`, `numberofpeople`, `cost`, `description`, `image`, `date`) VALUES
(1, 'Family', '2', '5000', 'only two sites with free drink', 'dinning.jpg', '2017-03-29 16:43:00'),
(2, 'Yes', '6', '10000', 'has upto six sites with free wine glass for each', 'dinning1.jpg', '2017-03-29 16:55:21'),
(3, 'Group', '10', '15000', 'with free delmonte Glass', 'dinning2.jpg', '2017-03-29 16:56:52');

-- --------------------------------------------------------

--
-- Table structure for table `recreational`
--

CREATE TABLE `recreational` (
  `R_id` int(11) NOT NULL,
  `Event_name` varchar(100) NOT NULL,
  `Event_cost` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recreational`
--

INSERT INTO `recreational` (`R_id`, `Event_name`, `Event_cost`, `description`, `image`, `date`) VALUES
(1, 'Bike Ridding', '300', 'ride the whole day', 'rec.jpg', '2017-03-29 19:14:44'),
(2, 'Climbing', '100', 'enjoy the whole day', 'recrational.jpg', '2017-03-29 19:15:56'),
(3, 'indoor games', '100', 'enjoy all games', 'recrational1.jpg', '2017-03-29 19:16:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_hall`
--
ALTER TABLE `book_hall`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confrence`
--
ALTER TABLE `confrence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dinning`
--
ALTER TABLE `dinning`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recreational`
--
ALTER TABLE `recreational`
  ADD PRIMARY KEY (`R_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_hall`
--
ALTER TABLE `book_hall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `confrence`
--
ALTER TABLE `confrence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dinning`
--
ALTER TABLE `dinning`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `recreational`
--
ALTER TABLE `recreational`
  MODIFY `R_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
