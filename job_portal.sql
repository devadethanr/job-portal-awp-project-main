-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2023 at 06:19 PM
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
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(2) NOT NULL,
  `job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_title` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `job_description` varchar(255) NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `application_deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_title`, `company_name`, `location`, `job_description`, `job_type`, `application_deadline`) VALUES
('python developer', 'infosys', 'Trivandrum,Kerala', 'wdwa', 'partTime', '2023-08-22'),
('python developer', 'infosys', 'Trivandrum,Kerala', 'dwa', 'partTime', '2023-08-15'),
('python developer', 'infosys', 'Trivandrum,Kerala', 'dwa', 'partTime', '2023-08-15'),
('python developer', 'infosys', 'Trivandrum,Kerala', 'dwa', 'partTime', '2023-08-15'),
('python developer', 'infosys', 'Trivandrum,Kerala', 'dwa', 'partTime', '2023-08-15'),
('python developer', 'infosys', 'Trivandrum,Kerala', 'dwa', 'partTime', '2023-08-15'),
('python developer', 'infosys', 'Trivandrum,Kerala', 'dwa', 'partTime', '2023-08-15'),
('python developer', 'infosys', 'Trivandrum,Kerala', 'dwa', 'partTime', '2023-08-15'),
('python developer', 'infosys', 'Trivandrum,Kerala', 'dwa', 'partTime', '2023-08-15'),
('python developer', 'infosys', 'Trivandrum,Kerala', 'dwa', 'partTime', '2023-08-15'),
('python developer', 'infosys', 'Trivandrum,Kerala', 'dwa', 'partTime', '2023-08-15'),
('python developer', 'infosys', 'Trivandrum,Kerala', 'dwa', 'partTime', '2023-08-15'),
('python developer', 'infosys', 'Trivandrum,Kerala', 'dwa', 'partTime', '2023-08-15'),
('python developer', 'infosys', 'Trivandrum,Kerala', 'dwa', 'partTime', '2023-08-15');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `mail`, `pass`, `role`) VALUES
('nerfed', 'sarin@kerala.org.in', 'admin', 'ADMIN-JOB REGISTER');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
