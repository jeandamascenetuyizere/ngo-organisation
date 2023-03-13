-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 13, 2023 at 09:28 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngos`
--

-- --------------------------------------------------------

--
-- Table structure for table `beneficians`
--

CREATE TABLE `beneficians` (
  `benef_id` int(11) NOT NULL,
  `names` varchar(20) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `ngo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `beneficians`
--

INSERT INTO `beneficians` (`benef_id`, `names`, `phone`, `email`, `dob`, `ngo_id`) VALUES
(1, 'jean tuyi', 781035751, 'jean@gmail.com', '2023-03-23', 1),
(2, 'jean', 781035751, 'jean@gmail.com', '2000-12-18', 1),
(3, 'tuy jean', 78888, 'tuy@gmail.com', '2023-03-08', 1),
(4, 'banamwana 112', 2334, 'bana@gmail.com', '2023-03-08', 1),
(5, 'tuyizere', 78888, 'tuy@gmail.com', '2023-03-22', 1),
(6, 'bayidu 1', 788835, 'bayidu@gmail.com', '2023-03-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `benefician_fund`
--

CREATE TABLE `benefician_fund` (
  `benef_fund_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date_given` date NOT NULL,
  `fund_id` int(11) NOT NULL,
  `benef_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donars`
--

CREATE TABLE `donars` (
  `don_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(20) NOT NULL,
  `url` varchar(30) NOT NULL,
  `ngo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donars`
--

INSERT INTO `donars` (`don_id`, `name`, `phone`, `email`, `address`, `url`, `ngo_id`) VALUES
(1, 'redcross', 8666, 'redcross@gmail.com', 'gisozi-kigali', 'www.redcross.com', 2),
(4, 'save children life 1', 89977, 'savechildren@gmail.com', 'kacyiru-kigali', 'www.savechildren.rw', 2),
(5, 'unhcl', 65454344, 'unhcl@gmail.com', 'kacyiru-kigali', 'www.unhcl.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `application_date` date NOT NULL,
  `dob` date NOT NULL,
  `username` varchar(20) NOT NULL,
  `ngo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `name`, `phone`, `email`, `application_date`, `dob`, `username`, `ngo_id`) VALUES
(5, 'jean Damascene', 8999, 'jean@gmail.com', '2023-03-08', '2023-03-21', 'jean', 1),
(8, 'mbanza tuyi', 78897656, 'mbanza@gmail.com', '2023-03-05', '2023-03-25', 'mbanza', 1),
(11, 'mbanza tuyis', 84874, 'mbanza@gmail.com', '2023-03-14', '2023-03-08', 'mbanza', 1),
(12, 'ganza jean', 7888888, 'ganza@gmail.com', '2023-03-14', '2023-03-14', 'ganza kelvuin', 1),
(14, 'bosc', 978333, 'bayidu@gmail.com', '2023-03-21', '2023-03-15', 'bosco', 1);

-- --------------------------------------------------------

--
-- Table structure for table `funds`
--

CREATE TABLE `funds` (
  `fund_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `received_at` date NOT NULL,
  `created_by` varchar(20) NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` varchar(20) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `don_id` int(11) NOT NULL,
  `fund_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `funds`
--

INSERT INTO `funds` (`fund_id`, `amount`, `received_at`, `created_by`, `created_at`, `updated_by`, `updated_at`, `don_id`, `fund_type_id`) VALUES
(1, 120, '2023-03-08', 'john', '2023-03-08', NULL, NULL, 1, 1),
(3, 5678, '2023-03-08', 'david', '2023-03-07', 'vigo', '2023-03-23', 1, 2),
(7, 120000, '2023-03-08', 'john w', '2023-03-17', 'awilo', '2023-03-15', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fund_type`
--

CREATE TABLE `fund_type` (
  `fund_type_id` int(11) NOT NULL,
  `fund_type_name` varchar(20) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fund_type`
--

INSERT INTO `fund_type` (`fund_type_id`, `fund_type_name`, `created_at`) VALUES
(1, 'sugar', '2023-03-06'),
(2, 'sugar', '2023-03-06');

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `ngo_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `url` varchar(30) NOT NULL,
  `created_by` varchar(20) NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` varchar(30) DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`ngo_id`, `name`, `address`, `phone`, `email`, `url`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'Rwanda red cross', 'gisozi-kigali', 788888888, 'red@gmail.com', 'www.redcross.rw', 'ganza kelvin', '2023-02-08', 'admin', '2023-02-08'),
(2, 'un migration', 'kacyiru-kigali', 78887433, 'unrwanda@un.co.rw', 'www.unrwanda.com', 'jean', '2022-12-18', 'tuy', '2023-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_of_emp` varchar(30) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_of_emp`, `created_at`) VALUES
(1, 'cleaning services', '2023-03-01'),
(2, 'cleaning services', '2023-03-01'),
(3, 'cleaning services', '2023-03-01'),
(8, 'manager', '2023-03-02'),
(9, 'waiter', '2023-03-08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(1, 'jean', 'jean123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beneficians`
--
ALTER TABLE `beneficians`
  ADD PRIMARY KEY (`benef_id`),
  ADD KEY `ngo_id` (`ngo_id`);

--
-- Indexes for table `benefician_fund`
--
ALTER TABLE `benefician_fund`
  ADD PRIMARY KEY (`benef_fund_id`),
  ADD KEY `fund_id` (`fund_id`),
  ADD KEY `benef_id` (`benef_id`);

--
-- Indexes for table `donars`
--
ALTER TABLE `donars`
  ADD PRIMARY KEY (`don_id`),
  ADD KEY `ngo_id` (`ngo_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `ngo_id` (`ngo_id`);

--
-- Indexes for table `funds`
--
ALTER TABLE `funds`
  ADD PRIMARY KEY (`fund_id`),
  ADD KEY `don_id` (`don_id`),
  ADD KEY `fund_type_id` (`fund_type_id`);

--
-- Indexes for table `fund_type`
--
ALTER TABLE `fund_type`
  ADD PRIMARY KEY (`fund_type_id`);

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
  ADD PRIMARY KEY (`ngo_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beneficians`
--
ALTER TABLE `beneficians`
  MODIFY `benef_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `benefician_fund`
--
ALTER TABLE `benefician_fund`
  MODIFY `benef_fund_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donars`
--
ALTER TABLE `donars`
  MODIFY `don_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `funds`
--
ALTER TABLE `funds`
  MODIFY `fund_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fund_type`
--
ALTER TABLE `fund_type`
  MODIFY `fund_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ngo`
--
ALTER TABLE `ngo`
  MODIFY `ngo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beneficians`
--
ALTER TABLE `beneficians`
  ADD CONSTRAINT `beneficians_ibfk_1` FOREIGN KEY (`ngo_id`) REFERENCES `ngo` (`ngo_id`);

--
-- Constraints for table `benefician_fund`
--
ALTER TABLE `benefician_fund`
  ADD CONSTRAINT `benefician_fund_ibfk_1` FOREIGN KEY (`fund_id`) REFERENCES `funds` (`fund_id`),
  ADD CONSTRAINT `benefician_fund_ibfk_2` FOREIGN KEY (`benef_id`) REFERENCES `beneficians` (`benef_id`);

--
-- Constraints for table `donars`
--
ALTER TABLE `donars`
  ADD CONSTRAINT `donars_ibfk_1` FOREIGN KEY (`ngo_id`) REFERENCES `ngo` (`ngo_id`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`ngo_id`) REFERENCES `ngo` (`ngo_id`);

--
-- Constraints for table `funds`
--
ALTER TABLE `funds`
  ADD CONSTRAINT `funds_ibfk_1` FOREIGN KEY (`don_id`) REFERENCES `donars` (`don_id`),
  ADD CONSTRAINT `funds_ibfk_2` FOREIGN KEY (`fund_type_id`) REFERENCES `fund_type` (`fund_type_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
