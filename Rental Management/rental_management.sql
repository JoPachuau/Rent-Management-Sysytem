-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 03:40 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_bike`
--

CREATE TABLE `add_bike` (
  `id` int(100) NOT NULL,
  `bike_name` varchar(100) NOT NULL,
  `bike_type` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `number_plate` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_bike`
--

INSERT INTO `add_bike` (`id`, `bike_name`, `bike_type`, `model`, `price`, `number_plate`) VALUES
(1, 'Yamaha', 'Gear', 'FZ16', 200, 'MZ01 J 1487');

-- --------------------------------------------------------

--
-- Table structure for table `add_car`
--

CREATE TABLE `add_car` (
  `id` int(11) NOT NULL,
  `car_name` varchar(100) NOT NULL,
  `car_type` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `driver_name` varchar(100) NOT NULL,
  `driver_number` int(10) NOT NULL,
  `number_plate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_car`
--

INSERT INTO `add_car` (`id`, `car_name`, `car_type`, `model`, `price`, `capacity`, `driver_name`, `driver_number`, `number_plate`) VALUES
(21, 'Suzuki', 'Alto', 'XUV', 100, 4, 'Imanuel', 2147483647, 'MZ01 J 1487');

-- --------------------------------------------------------

--
-- Table structure for table `add_home`
--

CREATE TABLE `add_home` (
  `id` int(11) NOT NULL,
  `house_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `house_number` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `capacity` int(20) NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `owner_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_home`
--

INSERT INTO `add_home` (`id`, `house_name`, `address`, `house_number`, `price`, `capacity`, `owner_name`, `owner_number`) VALUES
(1, 'Chawngbawla', 'Ramhlun South', 'M-91/1', 50, 1, 'R Lallungawia', '8794527142');

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(50) NOT NULL,
  `cus_email` varchar(100) NOT NULL,
  `cus_phone` text NOT NULL,
  `pickup` varchar(100) NOT NULL,
  `destiny` varchar(100) NOT NULL,
  `check_in_date` varchar(10) NOT NULL,
  `check_out_date` varchar(10) NOT NULL,
  `selected_car` varchar(100) NOT NULL,
  `selected_bike` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`cus_id`, `cus_name`, `cus_email`, `cus_phone`, `pickup`, `destiny`, `check_in_date`, `check_out_date`, `selected_car`, `selected_bike`) VALUES
(16, 'Jonathan Biakdingliana', 'jopachuau29@gmail.com', '8794527142', 'Airport', 'Ramhlun', '29/03/2022', '29/03/2022', '', ''),
(17, 'Jonathan Biakdingliana', 'jopachuau29@gmail.com', '8794527142', 'Airport', 'Ramhlun', '29/03/2022', '29/03/2022', '', 'Yamaha');

-- --------------------------------------------------------

--
-- Table structure for table `house_booked`
--

CREATE TABLE `house_booked` (
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(100) NOT NULL,
  `cus_email` varchar(100) NOT NULL,
  `cus_phone` int(20) NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL,
  `selected_house` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `house_booked`
--

INSERT INTO `house_booked` (`cus_id`, `cus_name`, `cus_email`, `cus_phone`, `check_in_date`, `check_out_date`, `selected_house`) VALUES
(1, 'Jonathan Biakdingliana', 'jopachuau29@gmail.com', 2147483647, '0000-00-00', '0000-00-00', 'Chawngbawla'),
(2, 'Imanuel', 'ima@gmail.com', 2147483647, '2022-11-08', '2022-11-08', 'Chawngbawla');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `confermpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`id`, `admin_name`, `phone_number`, `email`, `pass`, `confermpassword`) VALUES
(13, 'Jonathan', '8794527142', 'jopachuau29@gmail.com', 'Funkytips@123', 'Funkytips@123'),
(14, 'Imanuel', '8794527142', 'jopachuau29@gmail.com', 'Imanuel@123', 'Imanuel@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_bike`
--
ALTER TABLE `add_bike`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_car`
--
ALTER TABLE `add_car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_home`
--
ALTER TABLE `add_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `house_booked`
--
ALTER TABLE `house_booked`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_bike`
--
ALTER TABLE `add_bike`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `add_car`
--
ALTER TABLE `add_car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `add_home`
--
ALTER TABLE `add_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `house_booked`
--
ALTER TABLE `house_booked`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
