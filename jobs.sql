-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3310
-- Generation Time: Oct 01, 2024 at 01:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `birth` date NOT NULL,
  `education` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `skill` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `about` varchar(150) NOT NULL,
  `resume` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`id`, `title`, `company_name`, `fname`, `lname`, `gender`, `birth`, `education`, `email`, `contact`, `experience`, `skill`, `address`, `about`, `resume`, `photo`, `status`) VALUES
(1, 'As. Officer', 'Square LTD', 'Abdullah', 'Rashid', 'Male', '2024-09-24', 'Masters', 'mamun@gmail.com ', '45555665', '2', 'ddd', 'aaaaaaa', 'dddddd', 'resume/jQuery STC version.pdf', 'photo/man2.jpg', 'Approved'),
(2, 'Junior oficer', 'Square LTD', 'Abdullah', 'sani', 'Male', '2024-09-11', 'Masters', 'abuhmdabdullah@gmail.com', '45555665', '2', 'ddd', 'fffff', 'ddddd', 'resume/jQuery STC version.pdf', 'photo/man4 (1).jpg', 'Pending'),
(3, 'Manager', 'Candid Dealings ltd', 'Abdullah', 'Rashid', 'Male', '2024-09-24', 'S.S.C', 'abuhmdabdullah72@gmail.com', '45555', '2', 'qqq', 'bbbg', 'ffff', 'resume/DUTCH BANGLA.pdf', 'photo/man3 (1).jpg', 'Approved'),
(4, 'Junior oficer', 'Square LTD', 'Saif', 'Jahan', 'Male', '2024-09-17', 'Masters', 'saif@gmail.com', '45555665', '2', 'aaaa', 'qqqq', 'rrrr', 'resume/JOBSHUB.pptx', 'photo/g4.gif', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `psition` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `date`, `psition`) VALUES
(1, 'Accountacy', '2024-09-09', '5 Open Position'),
(3, 'Bank', '2024-09-10', '10 position'),
(6, 'Agriculture', '2024-09-10', '5 open position'),
(7, 'Hospitality', '2024-09-11', '2 Open Position'),
(8, 'N.G.O', '2024-09-11', ''),
(9, 'Data entry', '2024-09-16', ''),
(10, 'Management', '2024-09-08', ''),
(23, 'Audit', '2024-09-16', ''),
(24, 'Commercial ', '2024-09-18', ''),
(25, 'Customer service', '2024-09-15', ''),
(28, 'Law', '2024-09-23', '');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(40) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `position` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `address`, `date`, `position`) VALUES
(2, 'Candid Dealings ltd', 'Dhaka,Bangladeshh', '2024-09-05', '6 Open Position'),
(3, 'Basundhara Ltd', 'Dhaka', '2024-09-09', '10 Open Position'),
(5, 'City', 'hhhv', '2024-09-09', '10 Open Position'),
(8, 'Cocacola', 'Cumilla', '2024-09-09', '5 Open Position'),
(12, 'Asha ltd', 'Cumilla', '2024-09-10', '5 Open Position'),
(13, 'Square LTD', 'Dhaka', '2024-09-05', '10 position'),
(14, 'Bargar Color paint ltd', 'Dhaka', '2024-09-16', '5 Open Position'),
(15, 'Nippon Ltd', 'Dhaka', '2024-09-09', ''),
(22, 'Dhanshiri Ltd', 'Dhaka', '2024-09-11', ''),
(32, 'Csl ltd', 'Dhaka', '2024-09-11', ''),
(33, 'Samsung Ltd', 'Dhaka', '2024-09-08', ''),
(66, 'Bsb ltd', 'Dhaka', '2024-09-09', ''),
(67, 'HAMIM GROUPP', 'DHAKA,BANGLADESH', '2024-09-15', ''),
(69, 'Walton Ltd', 'Dhaka', '2024-09-21', ''),
(70, 'Huway Ltd', 'Dhaka', '2024-09-15', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `massage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `number`, `subject`, `massage`) VALUES
(1, 'Amir', 'abdullah@gmail.com', '44444', 'subjec', 'fffffffff'),
(28, 'salam', 'saif@gmail.com', '45623', 'subjec', 'kkkk'),
(32, 'Hasib', 'sm@gmail.com', '55555', 'aaaaaaa', 'aaaaaa'),
(38, 'Nazrul khan', 'abdullah@gmail.com', '5566332', 'subjec', 'ghjj'),
(41, 'Mamun', 'abuhmdabdullah@hhh.com', '45522', 'kkkk', 'lllll'),
(44, 'Mamun', 'mamun@gmail.com', '01256486317', 'Impression', 'Good'),
(45, 'Samir', 'mamun@gmail.com', '444444444', 'gggg', 'aaaaaaaa'),
(46, 'Hamim', 'mamun@gmail.com', '250012', 'subjec', 'aaaa'),
(47, 'Hamim', 'mamun@gmail.com', '250012', 'subjec', 'aaaa');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `title` varchar(40) NOT NULL,
  `details` varchar(200) NOT NULL,
  `link` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `date`, `title`, `details`, `link`) VALUES
(6, '2024-09-19', 'What is the relationship between job sat', 'Job satisfaction and job security have a positive relationship [2]. Higher job security is associated with greater job satisfaction, particularly in terms of promotion and total satisfaction [3]. Inco', 'https://typeset.io/questions/what-is-the');

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`id`, `name`, `date`) VALUES
(1, 'Assistant officer', '2024-09-11'),
(3, 'Sr. Officer', '2024-09-09'),
(4, 'As. Officer', '2024-09-16'),
(6, 'Junior operator', '2024-09-18'),
(7, 'Tellar', '2024-09-03'),
(8, 'Driver', '2024-09-17'),
(9, 'Data operator', '2024-09-11'),
(15, 'Manager', '2024-09-09'),
(16, 'Executive', '2024-09-15'),
(17, 'General Manager', '2024-09-23');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(22, 'asif', 'abdullah', 'abuhmdabdullah@gmail.com', 'c7c85b0c46f1f4182514ad2cf7f05a0a'),
(23, 'Noman', 'abdullah', 'noman@gmail.com', 'b2157e7b2ae716a747597717f1efb7a0'),
(25, 'safin', 'ahmed', 'sdmj@as.com', 'b2157e7b2ae716a747597717f1efb7a0'),
(26, 'gias', 'uddin', 'gas@gm.com', 'b2157e7b2ae716a747597717f1efb7a0'),
(28, 'Abdullah', 'Rashid', 'mamun@gmail.com', 'b2157e7b2ae716a747597717f1efb7a0'),
(30, 'Yousuf', 'Molla', 'yousuf@gmail.com', 'ddd37f736db183b6b4c186b87dd6236c'),
(33, 'md sami', '', 'aabdullah@gmail.com', '040b7cf4a55014e185813e0644502ea9'),
(39, 'Rahid', '', 'rahid@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(40, 'A.S.M Abdullah', '', 'asm@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(41, 'Abdul Rahim', '', 'abdurrahim@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(42, 'Nihan', '', 'nihan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first_name` varchar(20) NOT NULL,
  `user_last_name` varchar(20) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first_name`, `user_last_name`, `user_email`, `user_password`) VALUES
(5, 'A.s.m', 'Abdullah', 'asm@gmail.com', '12345'),
(7, 'Samsul', 'Islam', 'sm@gmail.com', '123456'),
(8, 'Nazrul', 'Khan', 'mdabdullah72@gmail.c', '14785'),
(13, 'Robius', 'Sani', 'sani@gmail.com', '12345'),
(18, 'Sami', 'Abdullah', 'abuhmdabdullah72@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE `vacancy` (
  `id` int(11) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `salary` varchar(30) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `start_date` date NOT NULL DEFAULT current_timestamp(),
  `last_date` date NOT NULL DEFAULT current_timestamp(),
  `email` varchar(30) NOT NULL,
  `website` varchar(30) NOT NULL,
  `job_type` varchar(20) NOT NULL,
  `company_id` int(11) NOT NULL,
  `vacancy_count` int(11) NOT NULL,
  `catagory_id` int(11) NOT NULL,
  `category_count` int(11) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`id`, `job_title`, `salary`, `company_name`, `address`, `category`, `start_date`, `last_date`, `email`, `website`, `job_type`, `company_id`, `vacancy_count`, `catagory_id`, `category_count`, `description`) VALUES
(20, 'Junior oficer', '', 'Square LTD', 'Dhaka', 'Accountacy', '2024-09-04', '2024-09-27', '', 'www.squre.com', '', 13, 0, 1, 0, ''),
(36, 'As. Officer', '', 'Candid Dealings ltd', 'Dhaka', 'Customer service', '2024-09-09', '2024-09-21', '', '', '', 2, 1, 25, 0, ''),
(37, 'Manager', '', 'Candid Dealings ltd', 'Dhaka', 'Agriculture', '2024-09-15', '2024-09-23', '', '', '', 2, 1, 6, 0, ''),
(38, 'As. Officer', '', 'Square LTD', 'Dhaka', 'Accountacy', '2024-09-10', '2024-09-20', '', '', '', 13, 0, 1, 0, ''),
(45, 'Tellar', '', 'Dhanshiri Ltd', 'Dhaka', 'N.G.O', '2024-09-10', '2024-09-28', '', '', '1', 22, 1, 8, 8, ''),
(48, 'Junior operator', '', 'Nippon Ltd', 'Dhaka', 'Data entry', '2024-09-10', '2024-09-21', '', '', 'Full Time', 15, 1, 9, 1, ''),
(49, 'Junior operator', '', 'Csl ltd', 'Dhaka', 'Management', '2024-09-15', '2024-09-21', '', '', 'Full Time', 32, 1, 10, 1, ''),
(50, 'As. Officer', '', 'Csl ltd', 'Dhaka', 'Accountacy', '2024-09-17', '2024-09-28', '', '', 'Full Time', 32, 1, 1, 1, ''),
(51, 'As. Officer', '', 'Candid Dealings ltd', 'Dhaka', 'Accountacy', '2024-09-15', '2024-09-28', '', '', 'Full Time', 2, 1, 1, 1, ''),
(52, 'Tellar', '', 'Candid Dealings ltd', 'Dhaka', 'Accountacy', '2024-09-08', '2024-09-26', '', '', 'Full Time', 2, 1, 1, 1, ''),
(53, 'Assistant officer', '', 'Candid Dealings ltd', 'Dhaka', 'Agriculture', '2024-09-15', '2024-09-10', '', '', 'Full Time', 2, 1, 6, 1, ''),
(54, 'Assistant officer', '', 'Candid Dealings ltd', 'Dhaka', 'Agriculture', '2024-09-15', '2024-09-10', '', '', 'Full Time', 2, 1, 6, 1, ''),
(55, 'As. Officer', '', 'Candid Dealings ltd', 'Dhaka', 'Hospitality', '2024-09-10', '2024-09-28', '', '', 'Full Time', 1, 1, 7, 1, ''),
(56, 'As. Officer', '', 'Candid Dealings ltd', 'Dhaka', 'Accountacy', '2024-09-19', '2024-09-28', '', '', 'Full Time', 2, 1, 1, 1, ''),
(57, 'As. Officer', '', 'City', 'Dhaka', 'Agriculture', '2024-09-16', '2024-09-27', '', '', 'Full Time', 5, 1, 6, 1, ''),
(58, 'Assistant officer', '', 'Candid Dealings ltd', 'Dhaka', 'Management', '2024-09-17', '2024-09-28', '', '', 'Full Time', 2, 1, 10, 1, ''),
(59, 'Assistant officer', '', 'Walton Ltd', 'Dhaka', 'Accountacy', '2024-09-18', '2024-09-27', '', '', 'Full Time', 69, 1, 1, 1, ''),
(67, 'General Manager', '', 'Huway Ltd', 'Dhaka', 'Law', '2024-09-22', '2024-09-30', '', '', 'Full Time', 70, 1, 28, 1, ''),
(68, 'As. Officer', '20000', 'Candid Dealings ltd', 'Dhaka', 'Accountacy', '2024-09-25', '2024-09-28', 'candid@gmail.com', 'www.candid.com', 'Full Time', 2, 1, 1, 1, 'aaaaa'),
(69, 'Executive', '20000', 'Basundhara Ltd', 'Dhaka', 'Accountacy', '2024-09-23', '2024-10-02', 'sm@gmail.com', 'www.squre.com', 'Full Time', 3, 1, 1, 1, 'ccccdd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `title`
--
ALTER TABLE `title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
