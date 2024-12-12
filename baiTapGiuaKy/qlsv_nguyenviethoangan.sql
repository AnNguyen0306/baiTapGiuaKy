-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2024 at 04:12 PM
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
-- Database: `qlsv_nguyenviethoangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_students`
--

CREATE TABLE `table_students` (
  `id` int(10) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` int(1) NOT NULL,
  `hometown` varchar(100) NOT NULL,
  `level` int(1) NOT NULL,
  `group_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_students`
--

INSERT INTO `table_students` (`id`, `fullname`, `dob`, `gender`, `hometown`, `level`, `group_id`) VALUES
(2, 'pppp', '2005-06-03', 0, 'sadf', 0, 1),
(3, '', '0000-00-00', 0, '', 0, 0),
(4, 'nguyeenx viet hoang an', '2024-12-12', 0, 'ha tay', 0, 7),
(5, '', '0000-00-00', 0, '', 0, 0),
(6, '', '0000-00-00', 0, '', 0, 0),
(7, '', '0000-00-00', 0, '', 0, 0),
(8, '', '0000-00-00', 0, '', 0, 0),
(9, '', '0000-00-00', 0, '', 0, 0),
(10, '', '0000-00-00', 0, '', 0, 0),
(12, '', '0000-00-00', 0, '', 0, 0),
(13, '', '0000-00-00', 0, '', 0, 0),
(14, '', '0000-00-00', 0, '', 0, 0),
(15, '', '0000-00-00', 0, '', 0, 0),
(16, '', '0000-00-00', 0, '', 0, 0),
(17, '', '0000-00-00', 0, '', 0, 0),
(18, '', '0000-00-00', 0, '', 0, 0),
(19, '', '0000-00-00', 0, '', 0, 0),
(20, 'nguyeenx viet hoang an', '0000-00-00', 0, '', 0, 0),
(21, '', '0000-00-00', 0, '', 0, 0),
(22, '', '0000-00-00', 0, '', 0, 0),
(23, '', '0000-00-00', 0, '', 0, 0),
(24, '', '0000-00-00', 0, '', 0, 0),
(25, 'nguyeenx viet hoang an', '2024-12-08', 0, 'ha tay', 0, 7),
(26, 'nguyeenx viet hoang an', '2024-12-08', 0, 'ha tay', 0, 7),
(27, 'nguyeenx viet hoang an', '2024-06-17', 0, 'ha noi', 0, 9),
(28, '', '0000-00-00', 0, '', 0, 0),
(29, '', '0000-00-00', 0, '', 0, 0),
(30, '', '0000-00-00', 0, '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_students`
--
ALTER TABLE `table_students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_students`
--
ALTER TABLE `table_students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
