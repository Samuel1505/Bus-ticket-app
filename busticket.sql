-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2024 at 01:20 PM
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
-- Database: `busticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `bustickettbl`
--

CREATE TABLE `bustickettbl` (
  `pickup_station` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `dustomer_code` varchar(20) NOT NULL,
  `amount_paid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bustickettbl`
--

INSERT INTO `bustickettbl` (`pickup_station`, `destination`, `dustomer_code`, `amount_paid`) VALUES
('benue station', 'kwara', '3456', '300'),
('benue station', 'kwara', '3456', '300'),
('satation 45', 'kogi', 'cutm', '250078'),
('satation 13', 'ilorin', 'mary', '200'),
('ibadan station', 'samonda', '3456', '450'),
('oyo station3', 'ogbomosho', '2345', '3500'),
('ibadan station34', 'ile-ife', '567', '200'),
('station 11', 'oyo', '6789', '30000'),
('ibadan station45', 'ago-iwoye', '56784', '1000'),
('station679', 'ijebu-igbo', '3780', '230000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
