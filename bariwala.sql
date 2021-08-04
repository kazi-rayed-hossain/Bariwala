-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 05:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bariwala`
--

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE `buildings` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `manager_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`id`, `name`, `address`, `manager_id`, `created_at`, `updated_at`) VALUES
(1, 'Royal Mansion', 'Grand Area', 1, NULL, NULL),
(2, 'Shopno Kutir ', 'Dhanmondi', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `complain_box`
--

CREATE TABLE `complain_box` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `complain` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain_box`
--

INSERT INTO `complain_box` (`id`, `user_id`, `complain`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 'dsadasdad', 'seen', NULL, NULL),
(2, 9, 'dsadasdad', 'seen', NULL, NULL),
(3, 9, 'asasdasd', 'seen', NULL, NULL),
(5, 9, 'dasdasdasda', 'seen', NULL, NULL),
(7, 15, 'bhai pani charen', 'seen', NULL, NULL),
(8, 9, 'pani nai', 'unseen', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ammount` int(11) NOT NULL,
  `manager_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `name`, `ammount`, `manager_id`, `date`) VALUES
(2, 'sadassdad', 300, 2, '2021-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `garage`
--

CREATE TABLE `garage` (
  `id` int(11) NOT NULL,
  `garage_number` text NOT NULL,
  `building_id` int(11) NOT NULL,
  `renter_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `phone_number` text DEFAULT NULL,
  `parmanent_add` text DEFAULT NULL,
  `nid` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `user_id`, `phone_number`, `parmanent_add`, `nid`, `created_at`, `updated_at`) VALUES
(1, 11, '11554653341', 'karachi', '8798418413248', NULL, NULL),
(2, 20, '45667512385', 'aaaaaaasd', '7283725', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `party_room`
--

CREATE TABLE `party_room` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `building_id` int(11) NOT NULL,
  `renter_id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `rent_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `transection_id` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `rent_id`, `unit_id`, `transection_id`, `date`, `status`) VALUES
(1, 1, 1, 'asdasdzxczxcz4as75dad', '2021-01-16', 'Varified'),
(6, 1, 1, 'dasdadasd2313131', '2021-01-19', 'Varified');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `id` int(11) NOT NULL,
  `renter_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `electricity_bill` int(11) NOT NULL,
  `gas_bill` int(11) NOT NULL,
  `water_bill` int(11) NOT NULL,
  `rent` int(11) NOT NULL,
  `utilities` int(11) NOT NULL,
  `extra` int(11) NOT NULL DEFAULT 0,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`id`, `renter_id`, `unit_id`, `electricity_bill`, `gas_bill`, `water_bill`, `rent`, `utilities`, `extra`, `date`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 3000, 1000, 500, 50000, 2000, 10500, '2021-01-01', NULL, NULL),
(3, 6, 7, 5000, 3000, 3000, 100000, 14000, 0, '2021-01-18', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `renter`
--

CREATE TABLE `renter` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `phone_number` text NOT NULL,
  `permanent_add` text NOT NULL,
  `Nid` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `renter`
--

INSERT INTO `renter` (`id`, `user_id`, `phone_number`, `permanent_add`, `Nid`, `created_at`, `updated_at`) VALUES
(1, 9, '000000000000', 'Grand Area', '4656444445', NULL, NULL),
(5, 14, '45667512385', 'sdasdasdasd', '1322222223333333333333', NULL, NULL),
(6, 15, '01711986035', 'bolbona', '516530216412.032165410', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(11) NOT NULL,
  `unit_name` text NOT NULL,
  `building_id` int(11) NOT NULL,
  `renter_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `unit_name`, `building_id`, `renter_id`, `created_at`, `updated_at`) VALUES
(1, 'A-5', 1, 1, NULL, NULL),
(7, 'A-100', 1, 6, NULL, NULL),
(8, 'b-121', 1, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Rayed Tuhin', 'Tuhin', 'tuhin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', NULL, NULL),
(9, 'soron', 'Asoron', 'soron@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'renter', NULL, NULL),
(11, 'Iahia Khan', 'Ikhan', 'Ikahn@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'manager', NULL, NULL),
(13, 'nai nai nai', 'nainai', 'nai@gamil.com', '81dc9bdb52d04dc20036dbd8313ed055', 'renter', NULL, NULL),
(14, 'sadassdad', 'asd', 'khossain162030@bscse.uiu.ac.bd', '81dc9bdb52d04dc20036dbd8313ed055', 'renter', NULL, NULL),
(15, 'rayed', 'r', 'rayedhossain9@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'renter', NULL, NULL),
(20, 'Aiyub Khan', 'Akhan', 'akhan@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'manager', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buildings`
--
ALTER TABLE `buildings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_1` (`manager_id`);

--
-- Indexes for table `complain_box`
--
ALTER TABLE `complain_box`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`),
  ADD KEY `manager_id` (`manager_id`);

--
-- Indexes for table `garage`
--
ALTER TABLE `garage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_2` (`building_id`),
  ADD KEY `fk_3` (`renter_id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_4` (`user_id`);

--
-- Indexes for table `party_room`
--
ALTER TABLE `party_room`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_5` (`building_id`),
  ADD KEY `fk_6` (`renter_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rent_id` (`rent_id`),
  ADD KEY `unit_id` (`unit_id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `renter_id` (`renter_id`),
  ADD KEY `unit_id` (`unit_id`);

--
-- Indexes for table `renter`
--
ALTER TABLE `renter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_7` (`user_id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_8` (`building_id`),
  ADD KEY `fk_9` (`renter_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buildings`
--
ALTER TABLE `buildings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `complain_box`
--
ALTER TABLE `complain_box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `garage`
--
ALTER TABLE `garage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `party_room`
--
ALTER TABLE `party_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `renter`
--
ALTER TABLE `renter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buildings`
--
ALTER TABLE `buildings`
  ADD CONSTRAINT `fk_1` FOREIGN KEY (`manager_id`) REFERENCES `managers` (`id`);

--
-- Constraints for table `complain_box`
--
ALTER TABLE `complain_box`
  ADD CONSTRAINT `complain_box_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `expense`
--
ALTER TABLE `expense`
  ADD CONSTRAINT `expense_ibfk_1` FOREIGN KEY (`manager_id`) REFERENCES `managers` (`id`);

--
-- Constraints for table `garage`
--
ALTER TABLE `garage`
  ADD CONSTRAINT `fk_2` FOREIGN KEY (`building_id`) REFERENCES `buildings` (`id`),
  ADD CONSTRAINT `fk_3` FOREIGN KEY (`renter_id`) REFERENCES `renter` (`id`);

--
-- Constraints for table `managers`
--
ALTER TABLE `managers`
  ADD CONSTRAINT `fk_4` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `party_room`
--
ALTER TABLE `party_room`
  ADD CONSTRAINT `fk_5` FOREIGN KEY (`building_id`) REFERENCES `buildings` (`id`),
  ADD CONSTRAINT `fk_6` FOREIGN KEY (`renter_id`) REFERENCES `renter` (`id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`rent_id`) REFERENCES `rent` (`id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`);

--
-- Constraints for table `rent`
--
ALTER TABLE `rent`
  ADD CONSTRAINT `rent_ibfk_1` FOREIGN KEY (`renter_id`) REFERENCES `renter` (`id`),
  ADD CONSTRAINT `rent_ibfk_2` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`);

--
-- Constraints for table `renter`
--
ALTER TABLE `renter`
  ADD CONSTRAINT `fk_7` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `renter_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `units`
--
ALTER TABLE `units`
  ADD CONSTRAINT `fk_8` FOREIGN KEY (`building_id`) REFERENCES `buildings` (`id`),
  ADD CONSTRAINT `fk_9` FOREIGN KEY (`renter_id`) REFERENCES `renter` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
