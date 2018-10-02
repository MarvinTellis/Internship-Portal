-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2018 at 09:04 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT 'admin',
  `password` varchar(255) NOT NULL DEFAULT 'password123'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `f_id` varchar(255) NOT NULL,
  `internship_id` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`f_id`, `internship_id`, `student_id`) VALUES
('F201', 'I101', 'S101'),
('F201', 'I101', 'S103'),
('F201', 'I101', 'S105'),
('F201', 'I102', 'S101'),
('F201', 'I102', 'S103'),
('F201', 'I103', 'S102'),
('F201', 'I103', 'S104');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_signup`
--

CREATE TABLE `faculty_signup` (
  `f_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(15) NOT NULL,
  `password` varchar(255) NOT NULL DEFAULT 'password'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_signup`
--

INSERT INTO `faculty_signup` (`f_id`, `name`, `email`, `mobile`, `password`) VALUES
('F201', 'Marvin', 'marvintellis@yahoo.com', 2147483647, '123456');

-- --------------------------------------------------------

--
-- Table structure for table `gov_company`
--

CREATE TABLE `gov_company` (
  `internship_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `stipend` int(255) NOT NULL,
  `mobile` int(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `topic_sector` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gov_company`
--

INSERT INTO `gov_company` (`internship_id`, `name`, `topic`, `description`, `start_date`, `end_date`, `stipend`, `mobile`, `email`, `topic_sector`) VALUES
('I500', 'xyz', 'AI', 'description', '2018-09-18', '2018-12-22', 5000, 981234344, 'xyz@somaiya.edu', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `inhouse`
--

CREATE TABLE `inhouse` (
  `f_id` varchar(255) NOT NULL,
  `internship_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `mobile` int(15) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inhouse`
--

INSERT INTO `inhouse` (`f_id`, `internship_id`, `name`, `dept`, `topic`, `description`, `start_date`, `end_date`, `mobile`, `email`) VALUES
('F201', 'I101', 'ABC', 'Comps', 'Android', 'This is a sample test to see whether this field works properly or not ', '2018-09-27', '2018-11-30', 981254773, 'abc@somaiya.edu'),
('F201', 'I102', 'pqr', 'IT', 'DBMS', 'explaination', '2018-09-20', '2018-12-07', 975587158, 'pqr@somaiya.edu'),
('F201', 'I103', 'xyz', 'Comps', 'something', 'something', '2018-09-19', '2018-10-31', 981234344, 'abc@gmail.com'),
('F201', 'I104', 'bcd', 'some', 'some', 'some', '2018-09-27', '2018-10-25', 981234344, 'pqr@gmail.com'),
('F201', 'I105', 'ijk', 'some', 'some', 'some', '2018-09-27', '2018-11-09', 981234344, 'dfg@gmail.com'),
('F201', 'I106', 'sdgf', 'comps', 'some', 'some', '2018-09-29', '2018-11-07', 981234344, 'acd@gmail.com'),
('F201', 'I107', 'Marvin', 'Android', 'Comps', 'This is a test', '2018-09-30', '2018-10-20', 2147483647, 'marvintellis@yahoo.com'),
('F201', 'I108', 'Marvin', 'Android', 'Comps', 'some', '2018-09-23', '2018-11-25', 2147483647, 'marvintellis@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`internship_id`,`student_id`);

--
-- Indexes for table `faculty_signup`
--
ALTER TABLE `faculty_signup`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `gov_company`
--
ALTER TABLE `gov_company`
  ADD PRIMARY KEY (`internship_id`);

--
-- Indexes for table `inhouse`
--
ALTER TABLE `inhouse`
  ADD PRIMARY KEY (`internship_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
