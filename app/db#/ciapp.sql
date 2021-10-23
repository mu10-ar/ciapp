-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2021 at 12:02 PM
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
-- Table structure for table `case_study`
--

CREATE TABLE `case_study` (
  `case_study_id` int(99) NOT NULL,
  `patient_id` int(99) NOT NULL,
  `food_allergies` varchar(255) DEFAULT NULL,
  `tendency_bleed` varchar(255) DEFAULT NULL,
  `heart_disease` varchar(255) DEFAULT NULL,
  `high_bp` varchar(255) DEFAULT NULL,
  `diabetic` varchar(255) DEFAULT NULL,
  `surgery` varchar(255) DEFAULT NULL,
  `accident` varchar(255) DEFAULT NULL,
  `others` varchar(255) DEFAULT NULL,
  `family_medical_history` varchar(255) DEFAULT NULL,
  `current_medication` varchar(255) DEFAULT NULL,
  `pragnency` varchar(255) DEFAULT NULL,
  `breast_feeding` varchar(255) DEFAULT NULL,
  `health_insurance` varchar(255) DEFAULT NULL,
  `low_income` varchar(255) DEFAULT NULL,
  `reference` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `case_study`
--

INSERT INTO `case_study` (`case_study_id`, `patient_id`, `food_allergies`, `tendency_bleed`, `heart_disease`, `high_bp`, `diabetic`, `surgery`, `accident`, `others`, `family_medical_history`, `current_medication`, `pragnency`, `breast_feeding`, `health_insurance`, `low_income`, `reference`) VALUES
(15, 49, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', NULL, 'yes', 'yes', 'yes', 'yes');

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
-- Indexes for table `case_study`
--
ALTER TABLE `case_study`
  ADD PRIMARY KEY (`case_study_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medicine_id`);

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
-- AUTO_INCREMENT for table `case_study`
--
ALTER TABLE `case_study`
  MODIFY `case_study_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medicine_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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

--
-- Constraints for table `case_study`
--
ALTER TABLE `case_study`
  ADD CONSTRAINT `case_study_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
