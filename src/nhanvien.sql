-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 02:30 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1951060822_employees`
--

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `maNV` int(10) UNSIGNED NOT NULL,
  `hovaten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chucvu` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phongban` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luong` float DEFAULT NULL,
  `ngayvaolam` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`maNV`, `hovaten`, `chucvu`, `phongban`, `luong`, `ngayvaolam`) VALUES
(1, 'Eleanora', 'Actuary', 'Product Management', 3399190, '0000-00-00'),
(2, 'Vallie', 'Computer Systems Analyst I', 'Training', 3697680, '0000-00-00'),
(3, 'Pam', 'Chief Design Engineer', 'Support', 12978500, '0000-00-00'),
(4, 'Katina', 'Automation Specialist III', 'Business Development', 5253340, '0000-00-00'),
(5, 'Jacinthe', 'Research Nurse', 'Marketing', 12643700, '0000-00-00'),
(6, 'Kingston', 'Marketing Manager', 'Product Management', 9636990, '0000-00-00'),
(7, 'Juditha', 'Librarian', 'Sales', 7736820, '0000-00-00'),
(8, 'Jillana', 'Information Systems Manager', 'Training', 11848800, '0000-00-00'),
(9, 'Ashlie', 'Environmental Tech', 'Engineering', 12912300, '0000-00-00'),
(10, 'Kerrin', 'Marketing Assistant', 'Services', 7378650, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`maNV`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `maNV` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
