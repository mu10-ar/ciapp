-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2021 at 08:09 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ciapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int(99) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `department_description` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `department_name`, `department_description`, `created_at`) VALUES
(4, 'medical', 'this is a department related to medical', '2021-10-18 10:40:23'),
(6, 'medical', '123', '2021-10-20 11:02:09');

-- --------------------------------------------------------

--
-- Table structure for table `docters`
--

CREATE TABLE `docters` (
  `doctor_id` int(99) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `sex` varchar(200) NOT NULL,
  `bloodgroup` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` int(99) NOT NULL,
  `education` varchar(200) NOT NULL,
  `specialist` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `docters`
--

INSERT INTO `docters` (`doctor_id`, `firstname`, `lastname`, `email`, `password`, `department`, `dob`, `sex`, `bloodgroup`, `address`, `phone`, `education`, `specialist`) VALUES
(1, 'mudassar', 'hussain', 'mudassar.hussain0544@gmail.com', 'mudassarpassword', 'artho', '2014-10-06', 'male', 'b', 'jhelum', 302, 'graduate', 'artho');

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE `testing` (
  `id` int(44) NOT NULL,
  `name` varchar(45) NOT NULL,
  `username` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testing`
--

INSERT INTO `testing` (`id`, `name`, `username`) VALUES
(1, 'mudassar', 'hussain'),
(2, 'abd', 'abd12'),
(3, 'abd', 'abd12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(99) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `specialist` varchar(200) DEFAULT NULL,
  `mobile_no` int(11) NOT NULL,
  `sex` varchar(200) NOT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `department_name` varchar(250) DEFAULT NULL,
  `department_id` varchar(99) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `blood_group` varchar(21) NOT NULL,
  `user_role` int(99) NOT NULL,
  `career_title` varchar(200) DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `address`, `specialist`, `mobile_no`, `sex`, `designation`, `department_name`, `department_id`, `birthday`, `blood_group`, `user_role`, `career_title`, `created_at`) VALUES
(13, 'mudassar', 'hussain', 'admin@admin.com', 'adminadmin', 'VPO Bohrian Dulyal tehsil Dina distt Jhelum', NULL, 0, '', NULL, NULL, NULL, NULL, '', 0, NULL, '2021-10-18'),
(14, 'sohaib ', 'abdullah', 'so0haib@admin.com', 'adminadmin', 'VPO Bohrian Dulyal tehsil Dina distt Jhelum', NULL, 0, '', NULL, NULL, NULL, NULL, '', 0, NULL, '2021-10-18'),
(16, 'sohaib', 'hussain', 'mudassar.hussain0544@gmail.com', 'adminadmin', '', '', 2147483647, 'female', '', NULL, NULL, '0000-00-00', 'Choose...', 0, NULL, '2021-10-18'),
(19, 'mudassar ', 'hussain', 'mudassar.hussain0544@gmail.com', 'adminadmin', 'VPO Bohrian Dulyal tehsil Dina distt Jhelum', 'none', 2147483647, 'male', 'senior doctor', NULL, NULL, '0000-00-00', 'O+', 2, NULL, '2021-10-18'),
(22, 'nurse bv', 'nurse', 'admin@admin.com', 'adminadmin', 'VPO Bohrian Dulyal tehsil Dina distt Jhelum', NULL, 300, 'male', NULL, NULL, NULL, '0000-00-00', 'b', 3, NULL, '2021-10-20'),
(23, 'mudassar', 'hussain', 'admin@admin.com', 'adminadmin', 'VPO Bohrian Dulyal tehsil Dina distt Jhelum', NULL, 300, 'male', NULL, NULL, NULL, '0000-00-00', 'b', 3, NULL, '2021-10-20'),
(24, 'mudassar', 'hussain', 'admin@admin.com', 'adminadmin', 'VPO Bohrian Dulyal tehsil Dina distt Jhelum', NULL, 300, 'male', NULL, NULL, NULL, '0000-00-00', 'a', 3, NULL, '2021-10-20'),
(25, 'mudassaraa ', 'hussain', 'admin@admin.com', 'adminadmin', 'VPO Bohrian Dulyal tehsil Dina distt Jhelum', NULL, 300, 'male', NULL, NULL, NULL, '0000-00-00', 'b', 3, NULL, '2021-10-20'),
(26, 'mudassar nu', 'hussain', 'admin@admin.com', 'adminadmin', 'VPO Bohrian Dulyal tehsil Dina distt Jhelum', NULL, 444, 'male', NULL, NULL, NULL, '0000-00-00', 'b', 3, NULL, '2021-10-20'),
(28, 'nurse12', 'hussain', 'admin@admin.com', 'adminadmin', 'VPO Bohrian Dulyal tehsil Dina distt Jhelum', NULL, 300, 'male', NULL, NULL, NULL, '0000-00-00', 'a', 3, NULL, '2021-10-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `docters`
--
ALTER TABLE `docters`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `testing`
--
ALTER TABLE `testing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `docters`
--
ALTER TABLE `docters`
  MODIFY `doctor_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testing`
--
ALTER TABLE `testing`
  MODIFY `id` int(44) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
