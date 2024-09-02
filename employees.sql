-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2024 at 11:12 AM
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
-- Database: `coaches`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employeeNumber` varchar(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `department` varchar(100) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `departmentCode` varchar(100) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `position` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `jobTitle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employeeNumber`, `first_name`, `last_name`, `department`, `user_name`, `user_password`, `confirm_password`, `email`, `departmentCode`, `contact_no`, `position`, `salary`, `jobTitle`) VALUES
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('', 'Faith', 'Benard', 'Department of Agriculture', 'arthurngari101@gmail.com', 'PaLe4JyDR@DsAJu', 'PaLe4JyDR@DsAJu', 'faithbernn@gmail.com', '', '88687687', '', '', ''),
('', '', '', '', 'arthurngari101@gmail.com', 'PaLe4JyDR@DsAJu', '', '', '', '', '', '', ''),
('', '', '', '', 'arthurngari101@gmail.com', 'PaLe4JyDR@DsAJu', '', '', '', '', '', '', ''),
('', '', '', '', 'arthurngari101@gmail.com', 'PaLe4JyDR@DsAJu', '', '', '', '', '', '', ''),
('', '', '', '', 'arthurngari101@gmail.com', 'PaLe4JyDR@DsAJu', '', '', '', '', '', '', ''),
('', '', '', '', 'arthurngari101@gmail.com', 'PaLe4JyDR@DsAJu', '', '', '', '', '', '', ''),
('', 'Arthur', 'Ngari', 'MCR', 'arthur', 'PaLe4JyDR@DsAJu', 'PaLe4JyDR@DsAJu', 'sales@belnorthtrading.co.ke', '', '88687687', '', '', ''),
('', 'Arthur', 'Ngari', 'MCR', 'arthur', 'PaLe4JyDR@DsAJu', 'PaLe4JyDR@DsAJu', 'sales@belnorthtrading.co.ke', '', '88687687', '', '', ''),
('', 'Arthur', 'Ngari', 'MCR', 'arthur', 'PaLe4JyDR@DsAJu', 'PaLe4JyDR@DsAJu', 'sales@belnorthtrading.co.ke', '', '88687687', '', '', ''),
('', '', '', '', 'arthurngari101@gmail.com', 'PaLe4JyDR@DsAJu', '', '', '', '', '', '', ''),
('', 'kilo', 'moja', 'MPDC', 'kilomoja', '1234567890', '1234567890', 'kilomoja@kilo.com', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('', 'kilo', 'moja', 'MPDC', 'kilomoja', '1234567890', '1234567890', 'kilomoja@kilo.com', '', '88687687', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', 'arthur', 'PaLe4JyDR@DsAJu', '', '', '', '', '', '', ''),
('', '', '', '', 'arthur', 'PaLe4JyDR@DsAJu', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('', 'kiko', 'ko', 'Tourism Office', 'kiko', '123456789', '123456789', 'kiko@gmail.com', '', '25558888888', '', '', ''),
('', '', '', '', 'arthur', 'PaLe4JyDR@DsAJu', '', '', '', '', '', '', ''),
('', '', '', '', 'arthur', 'PaLe4JyDR@DsAJu', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('', 'wallace', 'juma', 'Tourism Office', 'juma', '1234567890', '1234567890', 'juma@gmail.com', '', '12345678900', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('', 'david', 'ke', 'Department of Engineering', 'david', '12345', '12345', 'david@ke.com', '', '012456987', '', '', ''),
('', 'qwerty', 'ke', 'Department of Engineering', 'qwerty', '12345', '12345', 'qwerty@qwerty.com', '', '012456987', '', '', ''),
('', 'drake', 'welsh', 'Accounting Office', 'hfhf', '0202', '0202', 'welsh@gb.com', '', '12345678900', '', '', ''),
('1002', 'Joe', 'Adams', '', '', '', '', 'jadams@jcoaches.com', '4', '', '', '80000', 'CEO'),
('1056', 'Pamela', 'Peterson', '', '', '', '', 'ppeterson@jcoaches.com', '3', '', '', '45000', 'Head of Marketing'),
('1076', 'Ashton', 'Jacobs', '', '', '', '', 'ajacobs@jcoaches.com', '1', '', '', '46000', 'Software Developer'),
('1088', 'Bloom', 'Jessica', '', '', '', '', 'jbloom@jcoaches.com', '2', '', '', '55000', 'Head of Transport'),
('1002', 'Joe', 'Arriots', '', 'JAdams', '', '', 'jadams@jcoaches.com', '4', '', '', '80000', 'CEO'),
('1056', 'Pamela', 'Peterson', '', 'PamelaAlleiots', '', '', 'ppeterson@jcoaches.com', '3', '', '', '45000', 'Head of Marketing'),
('1076', 'Ashton', 'Jacobs', '', 'JAstons', '', '', 'ajacobs@jcoaches.com', '1', '', '', '46000', 'Software Developer'),
('1088', 'Bloom', 'Jessica', '', 'JessBloom', '', '', 'jbloom@jcoaches.com', '2', '', '', '55000', 'Head of Transport');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
