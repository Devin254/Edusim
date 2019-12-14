-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2019 at 10:51 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(10) NOT NULL,
  `category_type` varchar(50) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `end_date` varchar(50) NOT NULL,
  `grade_level` varchar(50) NOT NULL,
  `category_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_type`, `category_name`, `start_date`, `end_date`, `grade_level`, `category_status`) VALUES
(6, 'MAIN EXAMINATIONS', 'TARGETER SERIES EXAMS', '01-01-2020', '04-01-2020', 'VII', '9'),
(8, 'CATS', 'HIGH FLYER BOOK CATS', '01-01-2020', '04-01-2020', 'VII', '1');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `exam_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `subject_id` int(10) NOT NULL,
  `exam_name` varchar(50) NOT NULL,
  `duration` int(20) NOT NULL,
  `grade_level` varchar(40) NOT NULL,
  `exam_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`exam_id`, `category_id`, `subject_id`, `exam_name`, `duration`, `grade_level`, `exam_status`) VALUES
(2, 6, 1, 'TARGETER SOCIAL STUDIES PAPER', 30, 'VII', 1),
(4, 6, 7, 'TARGETER SERIES EXAMS KISWAHILI PAPER', 60, 'VII', 34),
(5, 6, 6, 'TARGETER MATHEMATICS PAPER', 60, 'VII', 1),
(6, 6, 4, 'TARGETER SERIES SCIENCE PAPER ', 20, 'VII', 1),
(10, 8, 6, 'HIGH FLYER BOOK CATS MATHS PAPER ', 180, 'VII', 1),
(16, 6, 9, 'TARGETER SERIES ENGLISH PAPER', 60, 'VII', 1),
(18, 8, 4, 'HIGH FLYER BOOK CATS SCIENCE PAPER', 60, 'VII', 1);

-- --------------------------------------------------------

--
-- Table structure for table `exam_register`
--

CREATE TABLE `exam_register` (
  `register_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_register`
--

INSERT INTO `exam_register` (`register_id`, `category_id`, `user_id`) VALUES
(14, 6, 3),
(12, 6, 7),
(13, 6, 10),
(10, 6, 11),
(15, 6, 12),
(16, 8, 12);

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `person_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `other_names` varchar(50) NOT NULL,
  `identification` varchar(50) NOT NULL,
  `grade_level` varchar(20) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`person_id`, `user_id`, `first_name`, `other_names`, `identification`, `grade_level`, `contact`, `email`) VALUES
(1, 2, 'VINCENT', 'NZOMO MWINZILA', 'EXA/980/2018', 'N/A', '0779990338', 'info@vyconsult.com'),
(2, 3, 'DEVIN', 'KIPROP KIPROTICH', 'PUP/980/2019', 'VII', '0701232269', 'jamiefoxx@gmail.com'),
(6, 7, 'PATRICK', 'CHERUYOT LAGAT', 'PUP/788/2017', 'VI', '0701232269', 'pato@gmail.com'),
(7, 8, 'HILLARY', 'KIPLIMO TALAI', 'PUP/788/2019', 'VI', '0722000000', 'kiplimo@gmail.com'),
(9, 10, 'GRACE', 'KANDIE MUGO', 'PUP/982/2018', 'VIII', '0701232269', 'kandiegracey@gmail.com'),
(10, 11, 'SHADRACK', 'KIPKIRUI', 'PUP/788/2016', 'VII', '0722000000', 'shadi@gmail.com'),
(11, 12, 'SOPIA', 'KILO', 'PUP/788/2017', 'VII', '0701232269', 'sopia@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE `performance` (
  `performance_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `exam_id` int(10) NOT NULL,
  `score` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `performance`
--

INSERT INTO `performance` (`performance_id`, `user_id`, `exam_id`, `score`) VALUES
(22, 3, 6, 100),
(23, 10, 6, 100),
(24, 3, 2, 55),
(25, 3, 5, 0),
(26, 3, 4, 50),
(28, 3, 16, 100),
(29, 12, 18, 100);

-- --------------------------------------------------------

--
-- Table structure for table `provided_answers`
--

CREATE TABLE `provided_answers` (
  `pa_id` int(10) NOT NULL,
  `question_id` int(10) NOT NULL,
  `answers` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_id` int(10) NOT NULL,
  `exam_id` int(10) NOT NULL,
  `question_text` varchar(500) NOT NULL,
  `sort_order` int(50) NOT NULL,
  `choice_a` varchar(100) NOT NULL,
  `choice_b` varchar(100) NOT NULL,
  `choice_c` varchar(100) NOT NULL,
  `choice_d` varchar(100) NOT NULL,
  `answer` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `exam_id`, `question_text`, `sort_order`, `choice_a`, `choice_b`, `choice_c`, `choice_d`, `answer`) VALUES
(1, 0, 'w', 1, 'A', 'A', 'A', 'A', 4),
(8, 0, 'A', 2, 'A', 'A', 'A', 'A', 1),
(12, 0, 'Write in words: One hundred and nine thousand?', 3, '109,000', '190,000', '1090', '190,000', 3),
(16, 0, '1+1=?', 4, '2', 'Two', '11', 'None of the above', 4),
(17, 0, 'What is the total value of 7890?', 5, '7800', '7890', '7900', '7890', 3),
(18, 2, 'What is the name of this paper?', 6, 'Choose A', 'Choose B', 'Choose C', 'Choose D', 1),
(19, 4, 'Jibu methali ifuatayo. Mgoma akisifiwa ___________________', 1, 'Tembo hulitia maji. ', 'Anageuka mgema.', 'Watoto hulia. ', 'Hakuna jibu sahihi. ', 2),
(20, 2, 'Who colonized Kenya?', 1, 'British ', 'Somalia', 'Italy ', 'United States ', 1),
(21, 2, 's', 2, 's', 's', 's', 's', 1),
(22, 2, 's', 3, 's', 's', 's', 's', 1),
(23, 2, 'Which of the following was not among the Kapenguria 6?', 4, 'Jomo Kenyatta ', 'Raila Odinga ', 'Joseph Murumbi ', 'Achieng Oneko ', 2),
(24, 2, 'Who is your course lecturer?', 7, 'Mr. Gibson ', 'Mr. Kiprop', 'Mr. Chemiati ', 'Mr. Rotich', 4),
(25, 2, 'Which of the following is not a season?', 8, 'Autumn ', 'Winter ', 'Sunny ', 'Summer', 3),
(26, 2, 'Which of the following countries was not colonized ?', 9, 'Ethiopia ', 'Kenya ', 'Chad ', 'South Africa ', 1),
(27, 2, 'When did World War II end?', 10, '1967', '1948', '1947', '1848', 2),
(28, 2, 'Who was the King in Lion King?', 5, 'Mufasa ', 'Timon ', 'Pumba ', 'Bambo ', 1),
(29, 6, 'Which of the following is not a season?', 1, 'Winter ', 'Summer ', 'Rainy ', 'Spring ', 3),
(30, 2, 's', 11, 'a', 'a', 'A', 'A', 1),
(31, 4, 'Kati ya lifuatalo ni gani si aina ya kirai?', 2, 'Kishirikishi ', 'Kivumishi', 'Kitande', 'Riwaya', 4),
(32, 11, 'Who betrayed Jesus?', 1, 'Jonah ', 'John ', 'Judas ', 'Joel ', 3),
(33, 11, 'What do you do if you collect a bunch of money on the road andyou do not know the owner? ', 2, 'Be your brothers keeper and keep the money.', 'Report the matter and have the police return the money.', 'Keep the money. It is your lucky day. ', 'Try and find the owner and return the money back to them.', 4),
(34, 11, 'Who was the father of Jesus?', 3, 'God ', 'Joseph ', 'Mary ', 'Jesus does not have a father. ', 2),
(35, 5, 'What is 1+1?', 1, '2', '3', 'Two ', 'None of the above', 2),
(36, 16, 'Which one of the following is not an article?', 1, 'A', 'Of', 'And', 'The', 2),
(37, 18, 'What is a season?', 1, 'Sunny ', 'Rainy ', 'Summer', 'Cloudy ', 3);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` int(10) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `subject_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject_name`, `subject_status`) VALUES
(1, 'SOCIAL STUDIES ', 6),
(4, 'SCIENCE ', 8),
(6, 'MATHS ', 1),
(7, 'KISWAHILI', 1),
(9, 'ENGLISH', 1);

-- --------------------------------------------------------

--
-- Table structure for table `timer`
--

CREATE TABLE `timer` (
  `timer_id` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `end_timer` datetime NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timer`
--

INSERT INTO `timer` (`timer_id`, `status`, `end_timer`, `user_id`) VALUES
(1, 1, '0000-00-00 00:00:00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `type`, `status`) VALUES
(1, 'Admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 1),
(2, 'Vincent', '87e1f221a672a14a323e57bb65eaea19d3ed3804', 'EXAMINER', 90),
(3, 'Devin', 'd33555cfe8c46d7173431c0ab1962a38760c0355', 'PUPIL', 1),
(7, 'Pato', '269cb45d944e48836d6e92d5f74ea339807882af', 'PUPIL', 1),
(8, 'Hillary', 'ffdf0968f1d66ca797d2d90e2f05f4eee64d18e5', 'PUPIL', 14),
(10, 'Grace', 'fd1cf5e271fd7c5ffaefb1c95aaf79964e1b2e65', 'PUPIL', 1),
(11, 'Shadi', 'fdbcf51f2cc58133235a3a57d6c9427708101964', 'PUPIL', 1),
(12, 'Sopia', 'ae627dfe255a783e853190856f6cc6cbe40bc7c3', 'PUPIL', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`exam_id`),
  ADD UNIQUE KEY `category_id` (`category_id`,`subject_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `exam_register`
--
ALTER TABLE `exam_register`
  ADD PRIMARY KEY (`register_id`),
  ADD UNIQUE KEY `category_id` (`category_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`person_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `performance`
--
ALTER TABLE `performance`
  ADD PRIMARY KEY (`performance_id`),
  ADD KEY `exam_id` (`exam_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `provided_answers`
--
ALTER TABLE `provided_answers`
  ADD PRIMARY KEY (`pa_id`),
  ADD UNIQUE KEY `question_id` (`question_id`),
  ADD KEY `question_id_2` (`question_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `timer`
--
ALTER TABLE `timer`
  ADD PRIMARY KEY (`timer_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `exam_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `exam_register`
--
ALTER TABLE `exam_register`
  MODIFY `register_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `person_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `performance`
--
ALTER TABLE `performance`
  MODIFY `performance_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `provided_answers`
--
ALTER TABLE `provided_answers`
  MODIFY `pa_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `timer`
--
ALTER TABLE `timer`
  MODIFY `timer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exams`
--
ALTER TABLE `exams`
  ADD CONSTRAINT `exams_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exams_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`subject_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exam_register`
--
ALTER TABLE `exam_register`
  ADD CONSTRAINT `exam_register_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exam_register_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `people`
--
ALTER TABLE `people`
  ADD CONSTRAINT `people_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `performance`
--
ALTER TABLE `performance`
  ADD CONSTRAINT `performance_ibfk_1` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`exam_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `performance_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `provided_answers`
--
ALTER TABLE `provided_answers`
  ADD CONSTRAINT `provided_answers_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `provided_answers_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
