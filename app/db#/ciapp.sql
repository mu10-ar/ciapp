-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 01:03 PM
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
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointment_id` int(99) NOT NULL,
  `id` int(99) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `appointment_date` datetime NOT NULL,
  `problem` varchar(255) NOT NULL,
  `department_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointment_id`, `id`, `doctor_name`, `appointment_date`, `problem`, `department_name`) VALUES
(3, 49, 'doctor1', '2021-10-13 13:53:00', 'problem', 'Psychiatry.');

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
(10, 'medical', 'this department is related to medical ', '2021-10-21 13:38:22'),
(11, 'Orthopaedics', 'this department is related to Orthopaedics', '2021-10-21 13:39:28'),
(12, 'Psychiatry.', 'this department is related to mental health', '2021-10-21 13:40:04');

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
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicine_id` int(99) NOT NULL,
  `medicine_name` varchar(200) NOT NULL,
  `medicine_category` varchar(200) NOT NULL,
  `medicine_price` int(99) NOT NULL,
  `medicine_stock` int(99) NOT NULL,
  `manufactured_by` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicine_id`, `medicine_name`, `medicine_category`, `medicine_price`, `medicine_stock`, `manufactured_by`, `created_at`) VALUES
(9, 'panadol', '1', 99, 42324, 'md', '2021-10-21 13:51:20');

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
(13, 'mudassar', 'hussain', 'admin@admin.com', 'adminadmin', 'VPO Bohrian Dulyal tehsil Dina distt Jhelum', NULL, 0, '', NULL, NULL, NULL, NULL, '', 1, NULL, '2021-10-18'),
(14, 'sohaib ', 'abdullah', 'so0haib@admin.com', 'adminadmin', 'VPO Bohrian Dulyal tehsil Dina distt Jhelum', NULL, 0, '', NULL, NULL, NULL, NULL, '', 0, NULL, '2021-10-18'),
(16, 'sohaib', 'hussain', 'mudassar.hussain0544@gmail.com', 'adminadmin', '', '', 2147483647, 'female', '', NULL, NULL, '0000-00-00', 'Choose...', 0, NULL, '2021-10-18'),
(45, 'mudassar', 'nurse', 'admin@admin.com23', 'adminadmin', 'VPO Bohrian Dulyal tehsil Dina distt Jhelum', '', 2147483647, 'male', '', 'Choose...', NULL, '0000-00-00', 'ab+', 0, NULL, '2021-10-21'),
(47, 'doctor', '1', 'doctor1@doctor.com', 'doctor12345', 'VPO Bohrian Dulyal tehsil Dina distt Jhelum', 'arthopedist', 2147483647, 'male', 'senior doctor', 'Orthopaedics', NULL, '2021-10-13', 'ab-', 2, NULL, '2021-10-21'),
(48, 'nurse ', '1', 'nurse1@nurse.com', 'nurse12345', 'VPO Bohrian Dulyal tehsil Dina distt Jhelum', NULL, 2147483647, 'female', NULL, 'Psychiatry.', NULL, '2021-10-14', 'ab+', 3, NULL, '2021-10-21'),
(49, 'patient', '1', 'patient1@patient.com', 'patient12345', 'VPO Bohrian Dulyal tehsil Dina distt Jhelum', NULL, 2147483647, 'male', NULL, 'Psychiatry.', NULL, '2021-09-26', 'b-', 4, NULL, '2021-10-21'),
(50, 'acountant', '1', 'accountant@accountant.com', 'accountant12345', 'VPO Bohrian Dulyal tehsil Dina distt Jhelum', 'none', 2147483647, 'male', 'senior doctor', 'Psychiatry.', NULL, '2021-10-13', 'b+', 5, NULL, '2021-10-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `appointments_ibfk_1` (`id`);

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
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medicine_id`);

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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointment_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `docters`
--
ALTER TABLE `docters`
  MODIFY `doctor_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medicine_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `testing`
--
ALTER TABLE `testing`
  MODIFY `id` int(44) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
