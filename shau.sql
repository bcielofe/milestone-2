-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2017 at 11:44 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shau`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `class_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `class_name`) VALUES
(17, ''),
(13, 'English'),
(15, 'Filipino'),
(18, 'German'),
(16, 'history'),
(1, 'Math'),
(14, 'Science');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `schedule` date NOT NULL,
  `lesson` varchar(255) NOT NULL,
  `speaking` varchar(255) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `class_id`, `schedule`, `lesson`, `speaking`) VALUES
(1, 15, '2017-03-30', 'cielo', 'no'),
(2, 15, '2017-03-30', 'cielo', 'no'),
(3, 15, '2017-03-31', 'laro laro', 'no'),
(4, 14, '2017-03-31', 'experiment', 'no'),
(5, 0, '0000-00-00', '', 'no'),
(6, 0, '0000-00-00', '', 'no'),
(7, 13, '2017-03-31', 'o', 'no'),
(8, 0, '2017-03-30', 'p', 'no'),
(9, 0, '2017-03-30', 's', 'no'),
(10, 0, '2017-03-30', 's', 'no'),
(17, 13, '2017-03-30', 'speaking', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `speakingtest`
--

CREATE TABLE `speakingtest` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `student_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `sound` decimal(3,2) NOT NULL,
  `word_stress` decimal(3,2) NOT NULL,
  `intonation` decimal(3,2) NOT NULL,
  `nature` int(11) NOT NULL,
  `content_complete` decimal(3,2) NOT NULL,
  `sentence_complete` decimal(3,2) NOT NULL,
  `proper_response` decimal(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `class_id`, `status_id`) VALUES
(1, 'Cielo', 16, NULL),
(5, 'fe', 1, NULL),
(7, 'cielofe', 13, NULL),
(8, 'cielof', 15, NULL),
(9, 'gerard', 13, NULL),
(10, 'Billy', 13, NULL),
(11, 'PeeJay', 13, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students_old`
--

CREATE TABLE `students_old` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_old`
--

INSERT INTO `students_old` (`id`, `student_id`, `student_name`, `class_id`) VALUES
(1, 1, 'Cielo', 1),
(2, 1, 'Cielo', 1),
(3, 1, 'Cielo', 14),
(4, 1, 'Cielo', 14),
(5, 1, 'Cielo', 16),
(6, 5, 'fe', 13),
(7, 9, 'gerard', 14);

-- --------------------------------------------------------

--
-- Table structure for table `students_teachers`
--

CREATE TABLE `students_teachers` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `disputed?` varchar(255) NOT NULL,
  `report` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_evals`
--

CREATE TABLE `student_evals` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `fluency` decimal(3,2) NOT NULL,
  `grammar` decimal(3,2) NOT NULL,
  `pronunciation` decimal(3,2) NOT NULL,
  `lexical` decimal(3,2) NOT NULL,
  `colloquial` decimal(3,2) NOT NULL,
  `formal` decimal(3,2) NOT NULL,
  `features` decimal(3,2) NOT NULL,
  `vocabulary` decimal(3,2) NOT NULL,
  `participation` decimal(3,2) NOT NULL,
  `sincerity` decimal(3,2) NOT NULL,
  `concentration` decimal(3,2) NOT NULL,
  `comprehension` decimal(3,2) NOT NULL,
  `attendance` decimal(3,2) NOT NULL,
  `compre_speaking` varchar(255) NOT NULL,
  `compre_listening` varchar(255) NOT NULL,
  `actfl_speaking` varchar(255) NOT NULL,
  `actfl_listening` varchar(255) NOT NULL,
  `teacher_comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status_id` int(11) DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'regular',
  `reset` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `teacher_name`, `password`, `status_id`, `role`, `reset`) VALUES
(1, 'cielo', 'b54cfda89820cafb77fd4a8d6749c14f662b2d17', NULL, 'regular', 1),
(3, 'cielo1', 'b827856a6662ca2dc33483e9c8020970a2c20113', NULL, 'regular', 1),
(5, 'cielo2', '4e0b33250b1ee8cc5b211fed060133a948057dc9', NULL, 'regular', 1),
(6, 'cielo3', 'cc141fae80c3a60693478d60ad821a67895f78f7', NULL, 'regular', 1),
(19, 'cielo4', 'c1e01f6dfa392a98b323a78b7551f29d7217bd9f', NULL, 'regular', 1),
(20, 'cielo6', '26632ddbdb217564a18d2d405d5a9462a67b9c8b', NULL, 'regular', 1),
(21, 'cielo7', '9588826db53ee0abf6b9e9e79dc6f363842c1681', NULL, 'regular', 1),
(22, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', NULL, 'admin', 2),
(23, 'c', '84a516841ba77a5b4648de2cd0dfcb30ea46dbb4', NULL, 'regular', 1),
(24, 'a', '7b52009b64fd0a2a49e6d8a939753077792b0554', NULL, 'regular', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`class_name`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `speakingtest`
--
ALTER TABLE `speakingtest`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `students_old`
--
ALTER TABLE `students_old`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_teachers`
--
ALTER TABLE `students_teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `student_evals`
--
ALTER TABLE `student_evals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`teacher_name`),
  ADD KEY `status_id` (`status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `speakingtest`
--
ALTER TABLE `speakingtest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `students_old`
--
ALTER TABLE `students_old`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `students_teachers`
--
ALTER TABLE `students_teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student_evals`
--
ALTER TABLE `student_evals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `speakingtest`
--
ALTER TABLE `speakingtest`
  ADD CONSTRAINT `speakingtest_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `speakingtest_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `speakingtest_ibfk_3` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `students_teachers`
--
ALTER TABLE `students_teachers`
  ADD CONSTRAINT `students_teachers_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `students_teachers_2` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `student_evals`
--
ALTER TABLE `student_evals`
  ADD CONSTRAINT `student_evals_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `student_evals_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `student_evals_ibfk_3` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
