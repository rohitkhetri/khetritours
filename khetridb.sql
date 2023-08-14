-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2023 at 04:46 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khetridb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `booking_date` date NOT NULL,
  `number_of_people` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_phone` varchar(15) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_country` varchar(255) NOT NULL,
  `customer_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_phone`, `customer_address`, `customer_country`, `customer_password`) VALUES
(0, 'Rohit Khetri', 'Rohit@12', 'rohitkhetri2002', 'Ratnagiri', '7823827959', 'India'),
(0, 'Rohit Khetri', 'Rohit@12', 'rohitkhetri2002', 'Ratnagiri', '7823827959', 'India'),
(0, 'Rohit Khetri', 'Rohit@12', 'rohitkhetri2002', 'Ratnagiri', '7823827959', 'India'),
(0, 'Prem', 'Rohit@12', 'rohitkhetri2002', 'Ratnagiri', '7823827959', 'India '),
(0, 'Rohit Khetri', 'Rohit@12', 'rohitkhetri2002', 'Ratnagiri', '7823827959', 'India'),
(0, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `feedbk` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `feedbk`) VALUES
(0, '', '', ''),
(0, '', '', ''),
(0, '', '', ''),
(0, '', '', ''),
(0, 'Rohit ', 'rohitkhetri2002@gmail.com', 'Great.');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `hotel_id` int(11) NOT NULL,
  `hotel_name` varchar(255) NOT NULL,
  `hotel_address` varchar(255) NOT NULL,
  `hotel_city` varchar(255) NOT NULL,
  `hotel_rating` int(11) NOT NULL,
  `hotel_description` text NOT NULL,
  `hotel_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `date_time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user`, `pass`, `date_time`) VALUES
('admin', 'ad123', '2023-02-03 09:12:06am'),
('admin', 'ad123', '2023-02-03 09:29:15am'),
('Rohit Khet', 'India', '2023-02-03 03:06:26pm'),
('Rohit Khet', 'India', '2023-02-04 05:14:53am'),
('Rohit Khet', 'India', '2023-02-04 05:26:00am'),
('admin', 'ad123', '2023-02-04 05:48:59am'),
('admin', 'ad123', '2023-02-04 06:15:23am'),
('Rohit Khet', 'India', '2023-02-04 08:22:41am'),
('Rohit Khet', 'India', '2023-02-04 10:33:08am'),
('Rohit Khet', 'India', '2023-02-04 12:01:23pm'),
('Rohit Khet', 'India', '2023-02-04 12:33:23pm'),
('Rohit Khet', 'India', '2023-02-05 06:17:54am'),
('Rohit Khet', 'India', '2023-02-05 03:58:34pm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
