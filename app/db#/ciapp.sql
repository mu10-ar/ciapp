-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2021 at 05:59 AM
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
  `patient_id` int(99) NOT NULL,
  `appointment_date` datetime NOT NULL,
  `problem` varchar(255) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `doctor_id` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointment_id`, `patient_id`, `appointment_date`, `problem`, `department_name`, `status`, `doctor_id`) VALUES
(15, 49, '2021-10-18 02:19:00', 'problem', 'Psychiatry.', 1, 47),
(17, 49, '2021-10-13 02:20:00', 'mudassar', 'Orthopaedics', 1, 52),
(18, 49, '2021-10-18 22:58:00', 'mudassar', 'medical', 1, 47),
(19, 49, '2021-10-25 23:58:00', 'doctor 1', 'Psychiatry.', 1, 47),
(20, 49, '2021-09-27 01:57:00', 'doctor 1', 'Psychiatry.', 0, 52),
(21, 49, '2021-10-01 12:03:00', 'doctor 1', 'Orthopaedics', 1, 47),
(22, 49, '2021-10-01 12:03:00', 'doctor 1', 'Orthopaedics', 1, 47),
(24, 49, '2021-10-14 12:10:00', 'doctor 1', 'Psychiatry.', 1, 47),
(25, 49, '2021-09-28 12:08:00', 'new problem', 'Orthopaedics', 0, 52);

-- --------------------------------------------------------

--
-- Table structure for table `assigned_bed`
--

CREATE TABLE `assigned_bed` (
  `assigned_bed` int(99) NOT NULL,
  `patient_id` int(99) NOT NULL,
  `assigned_at` datetime NOT NULL DEFAULT current_timestamp(),
  `assigned_id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `beds`
--

CREATE TABLE `beds` (
  `bed_id` int(99) NOT NULL,
  `department_id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` int(99) NOT NULL DEFAULT 1,
  `patient_id` int(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beds`
--

INSERT INTO `beds` (`bed_id`, `department_id`, `description`, `status`, `patient_id`) VALUES
(1, 12, NULL, 1, NULL),
(2, 11, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(99) NOT NULL,
  `patient_id` int(99) NOT NULL,
  `services` varchar(255) DEFAULT NULL,
  `services_description` varchar(255) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` int(2) NOT NULL,
  `paid` int(99) NOT NULL,
  `price` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `patient_id`, `services`, `services_description`, `date`, `status`, `paid`, `price`) VALUES
(12, 49, 'nn', 'gg', '2021-10-12', 1, 45, 54),
(13, 49, 'nn', 'gg', '2021-10-09', 1, 17, 87),
(14, 49, 'nn', 'gg', '2021-10-08', 1, 45, 54),
(15, 49, 'nn', 'gg', '2021-10-20', 1, 21, 34),
(16, 52, 'nn', 'gg', '2021-10-14', 1, 45, 80000),
(17, 49, 'nn', 'gg', '2021-10-06', 1, 45, 54),
(18, 52, 'nn', 'gg', '2021-10-21', 1, 45, 54),
(19, 52, 'nn', 'gg', '2021-10-14', 1, 45, 54),
(20, 52, 'nn', 'gg', '2021-10-13', 1, 45, 54),
(21, 52, 'nn', 'gg', '2021-10-03', 1, 45, 54),
(22, 52, 'nn', 'gg', '2021-10-12', 1, 45, 80),
(23, 52, 'nn', 'gg', '2021-10-14', 1, 35, 0);

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
(16, 49, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', NULL, 'yes', 'yes', 'yes', 'yes');

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
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(99) NOT NULL,
  `sender_id` int(99) NOT NULL,
  `reciever_id` int(99) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `sent_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `sender_id`, `reciever_id`, `subject`, `message`, `sent_at`) VALUES
(5, 13, 52, 'ff', 'mudassar', '2021-10-25 15:44:40'),
(8, 13, 52, 'Admission date query', 'message', '2021-10-25 16:12:50'),
(12, 49, 52, 'Admission date query', 'message', '2021-10-26 11:57:04');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `notification_id` int(99) NOT NULL,
  `user_id` int(99) NOT NULL,
  `message` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notification_id`, `user_id`, `message`) VALUES
(1, 47, 'you have an appointment to approve <a class=\"text-primary\" href=\"appointments\"> click to view</a>'),
(2, 52, 'you have an appointment to approve <a class=\"text-primary\" href=\"appointments\"> click to view</a>'),
(8, 49, 'A case study has Benn Addes to your Profile <a class=\"text-primary\" href=\"mycasestudy/49\"> click to view</a>'),
(9, 49, 'bed No has been assigned to you'),
(14, 49, 'bed No1 has been assigned to you');

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `prescription_id` int(99) NOT NULL,
  `patient_id` int(99) NOT NULL,
  `blood_pressure` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `medicine` varchar(255) NOT NULL,
  `medicine_days` varchar(255) NOT NULL,
  `diagnosis` varchar(255) NOT NULL,
  `diagnosis_instruction` varchar(255) NOT NULL,
  `visiting_fee` int(99) NOT NULL,
  `patient_notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`prescription_id`, `patient_id`, `blood_pressure`, `weight`, `date`, `medicine`, `medicine_days`, `diagnosis`, `diagnosis_instruction`, `visiting_fee`, `patient_notes`) VALUES
(2, 49, '122', '2', '2021-09-29', 'meds', '', 'meds', '32', 987, '8');

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
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `bill` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `address`, `specialist`, `mobile_no`, `sex`, `designation`, `department_name`, `department_id`, `birthday`, `blood_group`, `user_role`, `career_title`, `created_at`, `bill`) VALUES
(13, 'mudassar', 'hussain', 'admin@admin.com', 'adminadmin', 'VPO Bohrian Dulyal tehsil Dina distt Jhelum', NULL, 0, '', NULL, NULL, NULL, NULL, '', 1, NULL, '2021-10-18', 0),
(47, 'doctor', '1', 'doctor1@doctor.com', 'doctor12345', 'VPO Bohrian Dulyal tehsil Dina distt Jhelum', 'arthopedist', 2147483647, 'male', 'senior doctor', 'Orthopaedics', NULL, '2021-10-13', 'ab-', 2, NULL, '2021-10-21', 0),
(48, 'nurse ', '1', 'nurse1@nurse.com', 'nurse12345', 'VPO Bohrian Dulyal tehsil Dina distt Jhelum', NULL, 2147483647, 'female', NULL, 'Psychiatry.', NULL, '2021-10-14', 'ab+', 3, NULL, '2021-10-21', 0),
(49, 'patient', '1', 'patient1@patient.com', 'patient12345', 'VPO Bohrian Dulyal tehsil Dina distt Jhelum', NULL, 2147483647, 'male', NULL, 'Psychiatry.', NULL, '2021-09-26', 'b-', 4, NULL, '2021-10-21', 0),
(50, 'acountant', '1', 'accountant@accountant.com', 'accountant12345', 'VPO Bohrian Dulyal tehsil Dina distt Jhelum', 'none', 2147483647, 'male', 'senior doctor', 'Psychiatry.', NULL, '2021-10-13', 'b+', 5, NULL, '2021-10-21', 0),
(52, 'mudassar', 'hussain', 'adil@adil.com', 'ad987iladil', 'VPO Bohrian Dulyal tehsil Dina distt Jhelum', '', 2147483647, 'male', '', 'Psychiatry.', NULL, '2021-10-22', 'b+', 4, NULL, '2021-10-23', 2),
(54, 'dsg', 'dfsdgf', 'admin@admin.comssss', 'adminadminsssssss', 'VPO Bohrian Dulyal tehsil Dina distt Jhelum', 'none', 312, 'male', 'senior doctor', 'Psychiatry.', NULL, '2021-10-13', 'ab+', 2, NULL, '2021-10-25', 0),
(55, 'dsg', 'dfsdgf', 'admsain@admsain.com', 'adminadmin', 'VPO Bohrian Dulyal tehsil Dina distt Jhelum', 'sasa', 312, 'male', 'senior doctor', 'Psychiatry.', NULL, '2021-10-13', 'ab+', 7, NULL, '2021-10-25', 0),
(56, 'dsg', 'dfsdgf', 'aadmin@admin.com', 'adminadmin', 'VPO Bohrian Dulyal tehsil Dina distt Jhelum', 'dsd', 312, 'male', 'senior doctor', 'Psychiatry.', NULL, '2021-10-21', 'ab+', 7, NULL, '2021-10-25', 0),
(57, 'dsg', 'dfsdgf', 'adaamin@admin.com', 'adminadminaaa', 'VPO Bohrian Dulyal tehsil Dina distt Jhelum', 'dsd', 312, 'male', 'senior doctor', 'Orthopaedics', NULL, '2021-10-08', 'ab+', 6, NULL, '2021-10-25', 0),
(58, 'dsg', 'dfsdgf', 'admin@qadmin.com', 'adminadminqq', 'VPO Bohrian Dulyal tehsil Dina distt Jhelum', 'none', 312, 'male', 'senior doctor', 'Orthopaedics', NULL, '2021-10-22', 'ab+', 5, NULL, '2021-10-25', 0),
(59, 'mudassar', 'hussain', 'do@admin.com', 'adminadminrer', 'VPO Bohrian Dulyal tehsil Dina distt Jhererelum', 'err', 2147483647, 'female', 'er', 'Psychiatry.', NULL, '2021-10-12', 'ab-', 2, NULL, '2021-10-27', 0),
(60, 'mudassar', 'hussain', 'adm3in@admin.com', 'adminadmin', 'VPO Bohrian Dulyal tehsil Dina distt Jhelum', NULL, 2147483647, 'male', NULL, 'Psychiatry.', NULL, '2021-10-03', 'b+', 4, NULL, '2021-10-27', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `appointments_ibfk_1` (`patient_id`),
  ADD KEY `appointments_ibfk_2` (`doctor_id`);

--
-- Indexes for table `assigned_bed`
--
ALTER TABLE `assigned_bed`
  ADD PRIMARY KEY (`assigned_id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `assigned_bed` (`assigned_bed`);

--
-- Indexes for table `beds`
--
ALTER TABLE `beds`
  ADD PRIMARY KEY (`bed_id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `patient_id` (`patient_id`);

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
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `reciever_id` (`reciever_id`),
  ADD KEY `sender_id` (`sender_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notification_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`prescription_id`),
  ADD KEY `patient_id` (`patient_id`);

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
  MODIFY `appointment_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `assigned_bed`
--
ALTER TABLE `assigned_bed`
  MODIFY `assigned_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `beds`
--
ALTER TABLE `beds`
  MODIFY `bed_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `case_study`
--
ALTER TABLE `case_study`
  MODIFY `case_study_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notification_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `prescription_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `assigned_bed`
--
ALTER TABLE `assigned_bed`
  ADD CONSTRAINT `assigned_bed_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `assigned_bed_ibfk_2` FOREIGN KEY (`assigned_bed`) REFERENCES `beds` (`bed_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `beds`
--
ALTER TABLE `beds`
  ADD CONSTRAINT `beds_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `beds_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `case_study`
--
ALTER TABLE `case_study`
  ADD CONSTRAINT `case_study_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`reciever_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD CONSTRAINT `prescriptions_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
