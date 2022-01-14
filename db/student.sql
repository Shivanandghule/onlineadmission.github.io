-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 30, 2021 at 01:06 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'shiva', 'shiva');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `URN` int(11) DEFAULT NULL,
  `appl_id` int(11) DEFAULT NULL,
  `fees` varchar(5) DEFAULT NULL,
  `paid_amount` float DEFAULT NULL,
  `remaining_fee` float DEFAULT NULL,
  `fee_status` varchar(10) DEFAULT NULL,
  `receipt_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`URN`, `appl_id`, `fees`, `paid_amount`, `remaining_fee`, `fee_status`, `receipt_no`) VALUES
(57316, 191899, '42000', 15000, 27000, 'PENDING', 6107);

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `app_id` bigint(20) UNSIGNED NOT NULL,
  `s_id` int(11) DEFAULT NULL,
  `pe_id` int(11) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `r_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email_id` varchar(40) DEFAULT NULL,
  `mobile_no` bigint(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `name`, `email_id`, `mobile_no`, `username`, `password`) VALUES
(1, 'sandeep ghule', 'sandeep@gmail.com', 9764655555, 'sandeep', 'sandeep');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `appl_id` int(11) DEFAULT NULL,
  `Sname` varchar(50) DEFAULT NULL,
  `father_name` varchar(50) DEFAULT NULL,
  `mother_name` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `aadhar_no` bigint(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `B_place` varchar(30) DEFAULT NULL,
  `B_taluka` varchar(20) DEFAULT NULL,
  `B_district` varchar(20) DEFAULT NULL,
  `B_state` varchar(20) DEFAULT NULL,
  `religion` varchar(20) DEFAULT NULL,
  `category` varchar(10) DEFAULT NULL,
  `caste` varchar(15) DEFAULT NULL,
  `bloodgroup` varchar(5) DEFAULT NULL,
  `handicap` varchar(5) DEFAULT NULL,
  `minority` varchar(5) DEFAULT NULL,
  `mobile_no` bigint(20) DEFAULT NULL,
  `telephone_no` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `res_addr` text DEFAULT NULL,
  `per_addr` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `sign` text DEFAULT NULL,
  `board_university` varchar(30) DEFAULT NULL,
  `college_school` varchar(30) DEFAULT NULL,
  `course` varchar(30) DEFAULT NULL,
  `class` varchar(20) DEFAULT NULL,
  `seat_no` varchar(20) DEFAULT NULL,
  `passing_year` varchar(10) DEFAULT NULL,
  `t_marks` int(11) DEFAULT NULL,
  `m_obtained` int(11) DEFAULT NULL,
  `percentage` float DEFAULT NULL,
  `marksheet` text DEFAULT NULL,
  `faculty` varchar(30) DEFAULT NULL,
  `c_class` varchar(10) DEFAULT NULL,
  `subject` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`appl_id`, `Sname`, `father_name`, `mother_name`, `gender`, `aadhar_no`, `dob`, `B_place`, `B_taluka`, `B_district`, `B_state`, `religion`, `category`, `caste`, `bloodgroup`, `handicap`, `minority`, `mobile_no`, `telephone_no`, `email`, `res_addr`, `per_addr`, `photo`, `sign`, `board_university`, `college_school`, `course`, `class`, `seat_no`, `passing_year`, `t_marks`, `m_obtained`, `percentage`, `marksheet`, `faculty`, `c_class`, `subject`) VALUES
(191899, 'GHULE SANDEEP', 'GHULE PRALHAD', 'GHULE SANGITA', 'male', 654964941544, '2000-05-24', 'nashik', 'nashik', 'nashik', 'maharashtra', 'hindu', 'VJNT', 'hindu', 'AB+', 'NO', 'no', 5454651465, '46545465465', 'sandy@gmail.com', 'shivpuri chowk uttam nagar cidco nashik-422009', 'shivpuri chowk uttam nagar cidco nashik-422009  ', 'login.jpeg', 'b2.jpg', 'pune', 'First Year', 'computer', 'tybsc', '14220', '2020', 600, 421, 70.1667, 'power of selling.png', 'Computer Science', 'First Year', 'PPL\r\nDAA\r\nDT\r\nCC\r\nCC PRCTICAL\r\nDT AND PPL PRACTICAL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `app_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `r_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
