-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2020 at 04:28 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebucodes_vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `username`, `password`, `date`) VALUES
(1, 'Demo Account', 'admin', 'admin', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `candidate_id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `sex` varchar(256) NOT NULL,
  `position` varchar(256) NOT NULL,
  `department` varchar(256) NOT NULL,
  `img` varchar(256) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`candidate_id`, `name`, `sex`, `position`, `department`, `img`, `date`) VALUES
(1, 'President 3', 'Male', 'Director Of Socials', 'Prosthetic and Orthopedics (POT)', 'avatar6.png', '2020-12-10'),
(2, 'Vice President 3', 'Male', 'Vice President', 'Biomedical Technology (BMT)', 'avatar4.png', '2020-12-10'),
(4, 'President 1', 'Gender', 'Position', 'Department', 'avatar10.jpg', '2020-12-10'),
(5, 'President 2', 'Gender', 'Position', 'Department', 'avatar9.png', '2020-12-10'),
(6, 'President 1', 'Gender', 'Position', 'Department', 'avatar9.png', '2020-12-10'),
(7, 'President 1', 'Male', 'President', 'Optometry (OPT)', 'avatar1.png', '0000-00-00'),
(8, 'President 2', 'Female', 'President', 'Public Health (PUH)', 'avatar3.png', '0000-00-00'),
(9, 'Vice President 1', 'Female', 'Vice President', 'Prosthetic and Orthopedics (POT)', 'avatar2.png', '0000-00-00'),
(10, 'Vice President 2', 'Female', 'Vice President', 'Biomedical Technology (BMT)', 'avatar7.jpg', '0000-00-00'),
(11, 'Secretary 1', 'Male', 'Secretary General', 'Environmental Health Science (EHS)', 'avatar5.png', '0000-00-00'),
(12, 'Secretary 2', 'Female', 'Secretary General', 'Dental Technology (DNT)', 'avatar10.jpg', '0000-00-00'),
(13, 'Assistant Secretary 1', 'Female', 'Assistant Secretary General', 'Environmental Health Science (EHS)', 'avatar9.png', '0000-00-00'),
(14, 'Assistant Secretary 2', 'Female', 'Assistant Secretary General', 'Public Health (PUH)', 'avatar7.jpg', '0000-00-00'),
(15, 'Fin Sec 1', 'Male', 'Financial Secretary', 'Optometry (OPT)', 'avatar8.jpg', '0000-00-00'),
(16, 'Fin Sec 2', 'Female', 'Financial Secretary', 'Prosthetic and Orthopedics (POT)', 'avatar4.png', '0000-00-00'),
(17, 'Treasurer 1', 'Male', 'Treasurer', 'Biomedical Technology (BMT)', 'avatar0.png', '0000-00-00'),
(18, 'Treasurer 2', 'Female', 'Treasurer', 'Dental Technology (DNT)', 'avatar3.png', '0000-00-00'),
(19, 'Sports 1', 'Male', 'Director Of Sports', 'Prosthetic and Orthopedics (POT)', 'avatar6.png', '0000-00-00'),
(20, 'Sports 2', 'Male', 'Director Of Sports', 'Environmental Health Science (EHS)', 'avatar4.png', '0000-00-00'),
(21, 'Socials 1', 'Male', 'Director Of Socials', 'Public Health (PUH)', 'avatar0.png', '0000-00-00'),
(22, 'Socials 2', 'Female', 'Director Of Socials', 'Biomedical Technology (BMT)', 'avatar9.png', '0000-00-00'),
(23, 'Health 1', 'Female', 'Director Of Health', 'Dental Technology (DNT)', 'avatar2.png', '0000-00-00'),
(24, 'Health 2', 'Female', 'Director Of Health', 'Optometry (OPT)', 'avatar7.jpg', '0000-00-00'),
(25, 'Research 1', 'Male', 'Director of Research', 'Biomedical Technology (BMT)', 'avatar5.png', '0000-00-00'),
(26, 'Research 2', 'Male', 'Director of Research', 'Environmental Health Science (EHS)', 'avatar1.png', '0000-00-00'),
(27, 'PRO 1', 'Male', 'PRO', 'Public Health (PUH)', 'avatar8.jpg', '0000-00-00'),
(28, 'PRO 2', 'Female', 'PRO', 'Prosthetic and Orthopedics (POT)', 'avatar10.jpg', '0000-00-00'),
(29, 'Provost 1', 'Female', 'Provost', 'Optometry (OPT)', 'avatar3.png', '0000-00-00'),
(30, 'Provost 2', 'Male', 'Provost', 'Dental Technology (DNT)', 'avatar4.png', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `votebank`
--

CREATE TABLE `votebank` (
  `vote_id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `voter_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `votebank`
--

INSERT INTO `votebank` (`vote_id`, `candidate_id`, `voter_id`) VALUES
(1, 0, 0),
(2, 0, 0),
(3, 0, 0),
(4, 0, 0),
(5, 0, 0),
(6, 0, 0),
(7, 0, 0),
(8, 0, 0),
(9, 0, 0),
(10, 0, 0),
(11, 0, 0),
(12, 0, 0),
(13, 0, 0),
(14, 0, 0),
(15, 0, 0),
(16, 0, 0),
(17, 0, 0),
(18, 0, 0),
(19, 0, 0),
(20, 0, 0),
(21, 0, 0),
(22, 0, 0),
(23, 0, 0),
(24, 0, 0),
(25, 0, 2),
(26, 0, 2),
(27, 0, 2),
(28, 0, 2),
(29, 0, 2),
(30, 0, 2),
(31, 0, 2),
(32, 0, 2),
(33, 0, 2),
(34, 0, 2),
(35, 0, 2),
(36, 0, 2),
(37, 0, 1),
(38, 0, 1),
(39, 0, 1),
(40, 0, 1),
(41, 0, 1),
(42, 0, 1),
(43, 0, 1),
(44, 0, 1),
(45, 0, 1),
(46, 0, 1),
(47, 0, 1),
(48, 0, 1),
(49, 0, 1),
(50, 0, 1),
(51, 0, 1),
(52, 0, 1),
(53, 0, 1),
(54, 0, 1),
(55, 0, 1),
(56, 0, 1),
(57, 0, 1),
(58, 0, 1),
(59, 0, 1),
(60, 0, 1),
(61, 0, 2),
(62, 0, 2),
(63, 0, 2),
(64, 0, 2),
(65, 0, 2),
(66, 0, 2),
(67, 0, 2),
(68, 0, 2),
(69, 0, 2),
(70, 0, 2),
(71, 0, 2),
(72, 0, 2),
(73, 0, 0),
(74, 0, 0),
(75, 0, 0),
(76, 0, 0),
(77, 0, 0),
(78, 0, 0),
(79, 0, 0),
(80, 0, 0),
(81, 0, 0),
(82, 0, 0),
(83, 0, 0),
(84, 0, 0),
(85, 0, 2),
(86, 0, 2),
(87, 0, 2),
(88, 0, 2),
(89, 0, 2),
(90, 0, 2),
(91, 0, 2),
(92, 0, 2),
(93, 0, 2),
(94, 0, 2),
(95, 0, 2),
(96, 0, 2),
(97, 0, 2),
(98, 0, 2),
(99, 0, 2),
(100, 0, 2),
(101, 0, 2),
(102, 0, 2),
(103, 0, 2),
(104, 0, 2),
(105, 0, 2),
(106, 0, 2),
(107, 0, 2),
(108, 0, 2),
(109, 0, 2),
(110, 0, 2),
(111, 0, 2),
(112, 0, 2),
(113, 0, 2),
(114, 0, 2),
(115, 0, 2),
(116, 0, 2),
(117, 0, 2),
(118, 0, 2),
(119, 0, 2),
(120, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `voter_id` int(11) NOT NULL,
  `firstname` varchar(256) NOT NULL,
  `lastname` varchar(256) NOT NULL,
  `sex` varchar(256) NOT NULL,
  `email_address` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `department` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`voter_id`, `firstname`, `lastname`, `sex`, `email_address`, `username`, `password`, `department`, `status`, `date`) VALUES
(1, 'Acount', 'EMody', 'Male', 'nuilo@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Public Health (PUH)', 'Not Voted', '2020-12-07 12:20:13'),
(2, 'Demo', 'Account', 'Female', 'demoaccount@mail.com', 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'Optometry (OPT)', 'Voted', '2020-12-07 12:20:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `votebank`
--
ALTER TABLE `votebank`
  ADD PRIMARY KEY (`vote_id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`voter_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `votebank`
--
ALTER TABLE `votebank`
  MODIFY `vote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `voter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
