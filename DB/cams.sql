-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 30, 2023 at 05:29 PM
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
-- Database: `cams`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `classteacher_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `student_id`, `class_id`, `classteacher_id`, `date`) VALUES
(1, 1, 2, 1, '2023-05-26'),
(2, 4, 2, 1, '2023-05-26'),
(3, 2, 2, 1, '2023-05-25'),
(4, 1, 2, 1, '2023-05-27'),
(5, 2, 2, 1, '2023-05-27'),
(6, 4, 2, 1, '2023-05-27'),
(7, 3, 2, 1, '2023-05-27'),
(8, 1, 2, 1, '2023-05-28'),
(9, 11, 3, 4, '2023-05-29'),
(10, 8, 2, 1, '2023-05-29'),
(11, 1, 2, 1, '2023-05-29'),
(12, 2, 2, 1, '2023-05-29'),
(13, 3, 2, 1, '2023-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `name`) VALUES
(1, 'Darasa la 1'),
(2, 'Darasa la 2'),
(3, 'Darasa la 3'),
(4, 'Darasa la 4'),
(5, 'Darasa la 6'),
(6, 'Darasa la 7');

-- --------------------------------------------------------

--
-- Table structure for table `classteacher`
--

CREATE TABLE `classteacher` (
  `classteacher_id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `middle_name` text NOT NULL,
  `last_name` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classteacher`
--

INSERT INTO `classteacher` (`classteacher_id`, `first_name`, `middle_name`, `last_name`, `password`, `class_id`) VALUES
(1, 'Juma', 'Mwamuzi', 'Ekole', '1234567890', 2),
(2, 'Anjela', 'Isimbwe', 'John', '1234567890', 1),
(3, 'kamabmbe', 'Mwarabuuu', 'kerooo', '1234567890', 3),
(4, 'Chuga', 'nganja', 'weed', '1234567890', 3);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `secondname` text NOT NULL,
  `lastname` text NOT NULL,
  `gender` text NOT NULL,
  `class_id` int(11) NOT NULL,
  `classteacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `firstname`, `secondname`, `lastname`, `gender`, `class_id`, `classteacher_id`) VALUES
(1, 'Mawe ', 'Makubwa', 'Jiwe', 'M', 2, 1),
(2, 'Monica', 'Julius', 'Mtakuja', 'F', 2, 1),
(3, 'Domo', 'Kubwa', 'Manenomengi', 'M', 2, 1),
(6, 'John', 'Mwarabu', 'Mayele', 'M', 2, 1),
(7, 'kamabmbe', 'kambaem', 'kerooo', 'M', 2, 1),
(9, 'John', 'Mwarabuuu', 'kerooo', 'M', 3, 3),
(11, 'anna', 'nanauka', 'mawezi', 'F', 3, 4),
(12, 'Chuga', 'Mwarabu', 'Mayele', 'M', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` int(11) NOT NULL,
  `subject_name` text NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject_name`, `class_id`) VALUES
(1, 'English std 2', 2),
(2, 'KIswahili std 2', 2),
(3, 'Haiba Na Michezo std 2', 2),
(4, 'Sayansi std 2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `timetable_id` int(11) NOT NULL,
  `day` text NOT NULL,
  `subject_id` int(11) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `classteacher_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`timetable_id`, `day`, `subject_id`, `start_time`, `end_time`, `classteacher_id`, `class_id`) VALUES
(2, 'Jumatatu', 2, '10:00', '02:00', 1, 2),
(4, 'Jumanne', 4, '17:29', '16:32', 1, 2),
(8, 'Ijumaa', 3, '15:06', '18:08', 1, 2),
(9, 'Ijumaa', 3, '07:48', '19:47', 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`),
  ADD KEY `student_id` (`student_id`,`class_id`,`classteacher_id`),
  ADD KEY `classteacher_id` (`classteacher_id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `classteacher`
--
ALTER TABLE `classteacher`
  ADD PRIMARY KEY (`classteacher_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `class_id` (`class_id`,`classteacher_id`),
  ADD KEY `classteacher_id` (`classteacher_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`timetable_id`),
  ADD KEY `subject_id` (`subject_id`,`classteacher_id`,`class_id`),
  ADD KEY `class_id` (`class_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `classteacher`
--
ALTER TABLE `classteacher`
  MODIFY `classteacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `timetable_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`classteacher_id`) REFERENCES `classteacher` (`classteacher_id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`classteacher_id`) REFERENCES `classteacher` (`classteacher_id`);

--
-- Constraints for table `timetable`
--
ALTER TABLE `timetable`
  ADD CONSTRAINT `timetable_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `classes` (`class_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
