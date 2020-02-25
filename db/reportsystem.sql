-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2020 at 03:12 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reportsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `attendedid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `date`, `attendedid`) VALUES
(1, '2020-02-20', 'ME'),
(2, '2020-02-21', 'DD'),
(3, '2020-02-21', 'AJ'),
(4, '2020-02-21', 'ME');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `c_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stream` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `c_id`, `c_name`, `stream`) VALUES
(1, 'S1A', 'ONE', 'A'),
(2, 'S1B', 'ONE', 'B'),
(3, 'S2A', 'TWO', 'A'),
(4, 'S2B', 'TWO', 'B'),
(5, 'S3A', 'THREE', 'A'),
(6, 'S3B', 'THREE', 'B'),
(7, 'S4', 'FOUR', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `examschedule`
--

CREATE TABLE `examschedule` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_cod` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `examschedule`
--

INSERT INTO `examschedule` (`id`, `date`, `time`, `sub_cod`, `c_name`) VALUES
(2, '25/05/2020', '09:00 - 11:30', 'S02', 'ONE'),
(3, '25/05/2020', '09:00 - 11:30', 'A03', 'TWO');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Reg_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_cod` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mid_term` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_term` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'F 9',
  `initials` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `Reg_no`, `term_id`, `sub_cod`, `mid_term`, `end_term`, `total`, `grade`, `initials`) VALUES
(1, 'PP/19/S1A/01', '1', 'A01', '', '', '', 'F 9', ''),
(2, 'PP/19/S1A/01', '2', 'A01', '', '', '', 'F 9', ''),
(3, 'PP/19/S1A/01', '3', 'A01', '', '', '', 'F 9', ''),
(4, 'PP/19/S1A/01', '1', 'A02', '', '', '', 'F 9', ''),
(5, 'PP/19/S1A/01', '2', 'A02', '', '', '', 'F 9', ''),
(6, 'PP/19/S1A/01', '3', 'A02', '', '', '', 'F 9', ''),
(7, 'PP/19/S1A/01', '1', 'A03', '14', '47', '61', 'C 4', 'ME'),
(8, 'PP/19/S1A/01', '2', 'A03', '', '', '', 'F 9', ''),
(9, 'PP/19/S1A/01', '3', 'A03', '', '', '', 'F 9', ''),
(10, 'PP/19/S1A/01', '1', 'A04', '', '', '', 'F 9', ''),
(11, 'PP/19/S1A/01', '2', 'A04', '', '', '', 'F 9', ''),
(12, 'PP/19/S1A/01', '3', 'A04', '', '', '', 'F 9', ''),
(13, 'PP/19/S1A/01', '1', 'A05', '', '', '', 'F 9', ''),
(14, 'PP/19/S1A/01', '2', 'A05', '', '', '', 'F 9', ''),
(15, 'PP/19/S1A/01', '3', 'A05', '', '', '', 'F 9', ''),
(16, 'PP/19/S1A/01', '1', 'A06', '', '', '', 'F 9', ''),
(17, 'PP/19/S1A/01', '2', 'A06', '', '', '', 'F 9', ''),
(18, 'PP/19/S1A/01', '3', 'A06', '', '', '', 'F 9', ''),
(19, 'PP/19/S1A/01', '1', 'S01', '22', '48', '70', 'D 2', 'DD'),
(20, 'PP/19/S1A/01', '2', 'S01', '', '', '', 'F 9', ''),
(21, 'PP/19/S1A/01', '3', 'S01', '', '', '', 'F 9', ''),
(22, 'PP/19/S1A/01', '1', 'S02', '19', '50', '69', 'C 3', 'DD'),
(23, 'PP/19/S1A/01', '2', 'S02', '', '', '', 'F 9', ''),
(24, 'PP/19/S1A/01', '3', 'S02', '', '', '', 'F 9', ''),
(25, 'PP/19/S1A/01', '1', 'S03', '', '', '', 'F 9', ''),
(26, 'PP/19/S1A/01', '2', 'S03', '', '', '', 'F 9', ''),
(27, 'PP/19/S1A/01', '3', 'S03', '', '', '', 'F 9', ''),
(28, 'PP/19/S1A/01', '1', 'S04', '', '', '', 'F 9', ''),
(29, 'PP/19/S1A/01', '2', 'S04', '', '', '', 'F 9', ''),
(30, 'PP/19/S1A/01', '3', 'S04', '', '', '', 'F 9', ''),
(31, 'PP/19/S1A/01', '1', 'S05', '', '', '', 'F 9', ''),
(32, 'PP/19/S1A/01', '2', 'S05', '', '', '', 'F 9', ''),
(33, 'PP/19/S1A/01', '3', 'S05', '', '', '', 'F 9', ''),
(34, 'PP/19/S1B/01', '1', 'A01', '', '', '', 'F 9', ''),
(35, 'PP/19/S1B/01', '2', 'A01', '', '', '', 'F 9', ''),
(36, 'PP/19/S1B/01', '3', 'A01', '', '', '', 'F 9', ''),
(37, 'PP/19/S1B/01', '1', 'A02', '', '', '', 'F 9', ''),
(38, 'PP/19/S1B/01', '2', 'A02', '', '', '', 'F 9', ''),
(39, 'PP/19/S1B/01', '3', 'A02', '', '', '', 'F 9', ''),
(40, 'PP/19/S1B/01', '1', 'A03', '', '', '', 'F 9', ''),
(41, 'PP/19/S1B/01', '2', 'A03', '', '', '', 'F 9', ''),
(42, 'PP/19/S1B/01', '3', 'A03', '', '', '', 'F 9', ''),
(43, 'PP/19/S1B/01', '1', 'A04', '', '', '', 'F 9', ''),
(44, 'PP/19/S1B/01', '2', 'A04', '', '', '', 'F 9', ''),
(45, 'PP/19/S1B/01', '3', 'A04', '', '', '', 'F 9', ''),
(46, 'PP/19/S1B/01', '1', 'A05', '', '', '', 'F 9', ''),
(47, 'PP/19/S1B/01', '2', 'A05', '', '', '', 'F 9', ''),
(48, 'PP/19/S1B/01', '3', 'A05', '', '', '', 'F 9', ''),
(49, 'PP/19/S1B/01', '1', 'A06', '', '', '', 'F 9', ''),
(50, 'PP/19/S1B/01', '2', 'A06', '', '', '', 'F 9', ''),
(51, 'PP/19/S1B/01', '3', 'A06', '', '', '', 'F 9', ''),
(52, 'PP/19/S1B/01', '1', 'S01', '21', '56', '77', 'D 1', 'DD'),
(53, 'PP/19/S1B/01', '2', 'S01', '', '', '', 'F 9', ''),
(54, 'PP/19/S1B/01', '3', 'S01', '', '', '', 'F 9', ''),
(55, 'PP/19/S1B/01', '1', 'S02', '18', '58', '76', 'D 1', 'DD'),
(56, 'PP/19/S1B/01', '2', 'S02', '', '', '', 'F 9', ''),
(57, 'PP/19/S1B/01', '3', 'S02', '', '', '', 'F 9', ''),
(58, 'PP/19/S1B/01', '1', 'S03', '', '', '', 'F 9', ''),
(59, 'PP/19/S1B/01', '2', 'S03', '', '', '', 'F 9', ''),
(60, 'PP/19/S1B/01', '3', 'S03', '', '', '', 'F 9', ''),
(61, 'PP/19/S1B/01', '1', 'S04', '', '', '', 'F 9', ''),
(62, 'PP/19/S1B/01', '2', 'S04', '', '', '', 'F 9', ''),
(63, 'PP/19/S1B/01', '3', 'S04', '', '', '', 'F 9', ''),
(64, 'PP/19/S1B/01', '1', 'S05', '', '', '', 'F 9', ''),
(65, 'PP/19/S1B/01', '2', 'S05', '', '', '', 'F 9', ''),
(66, 'PP/19/S1B/01', '3', 'S05', '', '', '', 'F 9', ''),
(133, 'PP/20/S2A/001', '1', 'A01', '', '', '', 'F 9', ''),
(134, 'PP/20/S2A/001', '2', 'A01', '', '', '', 'F 9', ''),
(135, 'PP/20/S2A/001', '3', 'A01', '', '', '', 'F 9', ''),
(136, 'PP/20/S2A/001', '1', 'A02', '', '', '', 'F 9', ''),
(137, 'PP/20/S2A/001', '2', 'A02', '', '', '', 'F 9', ''),
(138, 'PP/20/S2A/001', '3', 'A02', '', '', '', 'F 9', ''),
(139, 'PP/20/S2A/001', '1', 'A03', '', '', '', 'F 9', ''),
(140, 'PP/20/S2A/001', '2', 'A03', '20', '53', '73', 'D 2', 'ME'),
(141, 'PP/20/S2A/001', '3', 'A03', '', '', '', 'F 9', ''),
(142, 'PP/20/S2A/001', '1', 'A04', '', '', '', 'F 9', ''),
(143, 'PP/20/S2A/001', '2', 'A04', '', '', '', 'F 9', ''),
(144, 'PP/20/S2A/001', '3', 'A04', '', '', '', 'F 9', ''),
(145, 'PP/20/S2A/001', '1', 'A05', '', '', '', 'F 9', ''),
(146, 'PP/20/S2A/001', '2', 'A05', '', '', '', 'F 9', ''),
(147, 'PP/20/S2A/001', '3', 'A05', '', '', '', 'F 9', ''),
(148, 'PP/20/S2A/001', '1', 'A06', '', '', '', 'F 9', ''),
(149, 'PP/20/S2A/001', '2', 'A06', '', '', '', 'F 9', ''),
(150, 'PP/20/S2A/001', '3', 'A06', '', '', '', 'F 9', ''),
(151, 'PP/20/S2A/001', '1', 'S01', '', '', '', 'F 9', ''),
(152, 'PP/20/S2A/001', '2', 'S01', '', '', '', 'F 9', ''),
(153, 'PP/20/S2A/001', '3', 'S01', '', '', '', 'F 9', ''),
(154, 'PP/20/S2A/001', '1', 'S02', '', '', '', 'F 9', ''),
(155, 'PP/20/S2A/001', '2', 'S02', '', '', '', 'F 9', ''),
(156, 'PP/20/S2A/001', '3', 'S02', '', '', '', 'F 9', ''),
(157, 'PP/20/S2A/001', '1', 'S03', '', '', '', 'F 9', ''),
(158, 'PP/20/S2A/001', '2', 'S03', '', '', '', 'F 9', ''),
(159, 'PP/20/S2A/001', '3', 'S03', '', '', '', 'F 9', ''),
(160, 'PP/20/S2A/001', '1', 'S04', '', '', '', 'F 9', ''),
(161, 'PP/20/S2A/001', '2', 'S04', '', '', '', 'F 9', ''),
(162, 'PP/20/S2A/001', '3', 'S04', '', '', '', 'F 9', ''),
(163, 'PP/20/S2A/001', '1', 'S05', '', '', '', 'F 9', ''),
(164, 'PP/20/S2A/001', '2', 'S05', '', '', '', 'F 9', ''),
(165, 'PP/20/S2A/001', '3', 'S05', '', '', '', 'F 9', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `privillage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `initials` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `privillage`, `initials`, `status`, `remember_token`) VALUES
(1, 'Admin', '0e7517141fb53f21ee439b355b5a1d0a', 'administrator', 'DD', 'active', NULL),
(2, 'Aciga James', '056b2b98c677b9fe057b1d3222e01e37', 'standard', 'AJ', 'active', NULL),
(3, 'Mindra Emmanuel', 'f08f2bc4c2845cc336f1933606846591', 'standard', 'ME', 'active', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `marksheet`
--

CREATE TABLE `marksheet` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Reg_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term_id` int(11) NOT NULL,
  `Physics` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mathematics` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Chemistry` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Biology` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `English` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `History` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Geography` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Commerce` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Agriculture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fine_Art` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marksheet`
--

INSERT INTO `marksheet` (`id`, `Reg_no`, `term_id`, `Physics`, `Mathematics`, `Chemistry`, `Biology`, `English`, `History`, `Geography`, `Commerce`, `Agriculture`, `CRE`, `Fine_Art`, `total`) VALUES
(1, 'PP/19/S1A/01', 1, '70', '69', '', '', '61', '', '', '', '', '', '', 200),
(2, 'PP/19/S1A/01', 2, '', '', '', '', '', '', '', '', '', '', '', 0),
(3, 'PP/19/S1A/01', 3, '', '', '', '', '', '', '', '', '', '', '', 0),
(4, 'PP/19/S1B/01', 1, '77', '76', '', '', '', '', '', '', '', '', '', 153),
(5, 'PP/19/S1B/01', 2, '', '', '', '', '', '', '', '', '', '', '', 0),
(6, 'PP/19/S1B/01', 3, '', '', '', '', '', '', '', '', '', '', '', 0),
(13, 'PP/20/S2A/001', 1, '', '', '', '', '', '', '', '', '', '', '', 0),
(14, 'PP/20/S2A/001', 2, '', '', '', '', '73', '', '', '', '', '', '', 73),
(15, 'PP/20/S2A/001', 3, '', '', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(10) UNSIGNED NOT NULL,
  `Reg_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `month` int(11) NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `Reg_no`, `amount`, `month`, `year`) VALUES
(1, 'PP/19/S1A/01', 50000, 5, '2019');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stud_id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `othername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Reg_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_id`, `firstname`, `othername`, `Reg_no`, `gender`, `picture`, `c_id`, `year`) VALUES
(1, 'Duku', 'David', 'PP/19/S1A/01', 'male', 'image/BIRTH.jpg', 'S1A', 2019),
(2, 'Modi', 'Emmanuel', 'PP/19/S1B/01', 'male', 'image/20171222_070544.jpg', 'S1B', 2019),
(5, 'Ayuru', 'Concy', 'PP/20/S2A/001', 'female', 'image/IMG_20190308_183205.jpg', 'S2A', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_cod` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `name`, `sub_cod`) VALUES
(1, 'History', 'A01'),
(2, 'Geography', 'A02'),
(3, 'English', 'A03'),
(4, 'CRE', 'A04'),
(5, 'Commerce', 'A05'),
(6, 'Fine_Art', 'A06'),
(7, 'Physics', 'S01'),
(8, 'Mathematics', 'S02'),
(9, 'Chemistry', 'S03'),
(10, 'Biology', 'S04'),
(11, 'Agriculture', 'S05');

-- --------------------------------------------------------

--
-- Table structure for table `subjecttakenbyteacher`
--

CREATE TABLE `subjecttakenbyteacher` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_cod` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `initials` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjecttakenbyteacher`
--

INSERT INTO `subjecttakenbyteacher` (`id`, `c_id`, `sub_cod`, `initials`, `year`) VALUES
(1, 'S1A', 'S01', 'DD', 2019),
(2, 'S1B', 'S01', 'DD', 2019),
(3, 'S1B', 'S02', 'DD', 2019),
(4, 'S1A', 'S02', 'DD', 2019),
(5, 'S1A', 'S02', 'DD', 2019),
(6, 'S1A', 'A03', 'ME', 2019),
(7, 'S1B', 'A03', 'ME', 2019),
(8, 'S2A', 'A03', 'ME', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `othername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `initials` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`staff_id`, `firstname`, `othername`, `gender`, `picture`, `initials`, `year`) VALUES
(1, 'Admin', 'Admin', 'male', 'image/2018-01-28-18-37-25-796.jpg', 'DD', 2019),
(2, 'Aciga', 'James', 'male', 'image/20180119_184017.jpg', 'AJ', 2019),
(3, 'Mindra', 'Emmanuel', 'male', 'image/20171225_132829.jpg', 'ME', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`term_id`, `start_date`, `end_date`, `term`) VALUES
(1, '2020-02-21', '', 'I'),
(2, '2020-02-20', '', 'II'),
(3, '', '', 'III');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examschedule`
--
ALTER TABLE `examschedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indexes for table `marksheet`
--
ALTER TABLE `marksheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `subjecttakenbyteacher`
--
ALTER TABLE `subjecttakenbyteacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`term_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `examschedule`
--
ALTER TABLE `examschedule`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `marksheet`
--
ALTER TABLE `marksheet`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stud_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sub_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subjecttakenbyteacher`
--
ALTER TABLE `subjecttakenbyteacher`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `staff_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `term_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
