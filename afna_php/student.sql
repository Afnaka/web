-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 13, 2024 at 08:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_cookie`
--

CREATE TABLE `student_cookie` (
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phno` int(20) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `course` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_cookie`
--

INSERT INTO `student_cookie` (`name`, `email`, `phno`, `gender`, `address`, `course`, `password`) VALUES
('afna ', 'afna@gmail.com', 789012390, 'female', 'kidengeath house', 'mca', 'afna'),
('ashik', 'ashik@gmail.com', 123456789, 'male', 'kollamparabil', 'mca', 'ashik');

-- --------------------------------------------------------

--
-- Table structure for table `student_det`
--

CREATE TABLE `student_det` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `adm_no` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_det`
--

INSERT INTO `student_det` (`name`, `email`, `adm_no`, `branch`, `password`) VALUES
('afertyu', 'a@gmail.com', '123456', 'bnm,.', 'afna'),
('afna k.a', 'afna@gmail.com', '24mp2287', 'MCA', ''),
('aliya', 'aliya@gmail.com', '24mp2244', 'MCA', 'aliya'),
('Ashik muhammed k.n', 'ashik@gmail.com', '24mp2288', 'MCA', ''),
('Aswathy', 'aswathy@gmail.com', '24mp333', 'MCA', ''),
('Nandana ramachandran', 'namdana@gmail.com', '24mp2234', 'MCA', ''),
('Swarnapadini', 'swarna@gmail.com', '24mp2239', 'MCA', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phno` int(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `address` varchar(40) NOT NULL,
  `course` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`name`, `email`, `phno`, `gender`, `address`, `course`, `password`) VALUES
('test', '112aliya@gmail.com', 1234, 'test', 'test', 'test', 'aliya'),
('test', '12aliya@gmail.com', 1234, 'test', 'test', 'test', 'aliya'),
('Afna k.a', 'afna1@gmail.com', 1234567890, 'female', 'kidengeatg', 'mca', 'afna'),
('ashna', 'ashna@gmail.com', 679076512, 'female', 'kidengeath house', 'mca', 'ashna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_cookie`
--
ALTER TABLE `student_cookie`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `student_det`
--
ALTER TABLE `student_det`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
