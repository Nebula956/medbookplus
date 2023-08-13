-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2023 at 11:27 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medbookplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) UNSIGNED NOT NULL,
  `Patient_Name` varchar(250) NOT NULL,
  `MobileNo` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `AppointmentDate` date NOT NULL,
  `AppointmentTime` time NOT NULL,
  `Specialization` varchar(250) NOT NULL,
  `doctorname` varchar(50) NOT NULL,
  `MessageApt` text NOT NULL,
  `Remark` varchar(250) NOT NULL,
  `Status` varchar(250) NOT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `ApplyDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `Patient_Name`, `MobileNo`, `username`, `email`, `AppointmentDate`, `AppointmentTime`, `Specialization`, `doctorname`, `MessageApt`, `Remark`, `Status`, `UpdationDate`, `ApplyDate`) VALUES
(1, 'Abra', 988978887, 'Abra1234', 'abra123@gmail.com', '2023-08-12', '08:16:00', '', 'Anushka', 'hi cutie\r\n\r\n', '', '', NULL, '2023-08-13 02:01:05'),
(2, 'soumya', 2147483647, 'soumya12', 'thessway@gmail.com', '2023-08-20', '17:15:00', '', 'Anushka', 'hello', '', '', NULL, '2023-08-13 08:43:59');

-- --------------------------------------------------------

--
-- Table structure for table `diseasecategories`
--

CREATE TABLE `diseasecategories` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diseasecategories`
--

INSERT INTO `diseasecategories` (`id`, `title`, `description`) VALUES
(1, 'Uncategorized', 'This is description for uncategorized'),
(2, 'Congenital', 'This is description for congential category');

-- --------------------------------------------------------

--
-- Table structure for table `diseaseposts`
--

CREATE TABLE `diseaseposts` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(250) NOT NULL,
  `body` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `date_time` int(11) NOT NULL DEFAULT current_timestamp(),
  `category_id` int(11) UNSIGNED DEFAULT NULL,
  `author_id` int(11) UNSIGNED NOT NULL,
  `is_featured` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diseaseposts`
--

INSERT INTO `diseaseposts` (`id`, `title`, `body`, `thumbnail`, `date_time`, `category_id`, `author_id`, `is_featured`) VALUES
(1, 'Conjuctivitis', ' This is the conjuctivitis disease', '16918975581_hrxxAHZ6F5FMgsjqhJ9oag.jpg', 2147483647, 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `specialization`
--

CREATE TABLE `specialization` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `specialization`
--

INSERT INTO `specialization` (`id`, `title`, `description`) VALUES
(1, 'Gastric', 'this is gastric description\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `Specialization_title` varchar(50) NOT NULL,
  `specialization_id` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `avatar`, `is_admin`, `Specialization_title`, `specialization_id`) VALUES
(1, 'Sayan', 'Sarkar', 'sayansarkar12', 'sayansarkar12@gmail.com', '$2y$10$fH2/InhTmk6iMlU94cKvqeUkkSO/anF1WofWmzLrviMytSRnKZ9e6', '1691849467247f9c5114cf8209b735369688becfa6.jpg', 1, '', NULL),
(2, 'Anushka', 'Sinha', 'Anushka123', 'Anushka123@gmail.com', '$2y$10$Sap8v0KWM0qhpS20uVxXP.HeO5PitdvxhwiJEIcZoFp.KVid70Mg.', '16918931902a125c7aa0d47538b857291fa0901286.jpg', 1, '', NULL),
(3, 'Devi', 'Shetty', 'devi12', 'devi12@gmail.com', '$2y$10$EyE84n9nAdUqO99KVA8JIewF8bnaZDaOMI9InlEvSOaQBCYLwvD8i', '169189383712f5d93cdfa543ab1ae0357bc78f200b.jpg', 1, '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diseasecategories`
--
ALTER TABLE `diseasecategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diseaseposts`
--
ALTER TABLE `diseaseposts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_blog_category` (`category_id`),
  ADD KEY `fk_blog_author` (`author_id`);

--
-- Indexes for table `specialization`
--
ALTER TABLE `specialization`
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
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `diseasecategories`
--
ALTER TABLE `diseasecategories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `diseaseposts`
--
ALTER TABLE `diseaseposts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `specialization`
--
ALTER TABLE `specialization`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diseaseposts`
--
ALTER TABLE `diseaseposts`
  ADD CONSTRAINT `FK_blog_category` FOREIGN KEY (`category_id`) REFERENCES `diseasecategories` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `fk_blog_author` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
