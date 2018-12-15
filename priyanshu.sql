-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2018 at 12:20 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `priyanshu`
--

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `serial_no` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `doe` date NOT NULL,
  `status` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`serial_no`, `name`, `email_id`, `contact_no`, `address`, `doe`, `status`) VALUES
(2, 'Priyanshu Tiwari', 'priyanshutiwari78@gm', 12345678, 'vzddhgjhmmfgfbfghgf', '2027-06-18', 'N'),
(3, 'Vivudh', 'priyanshutiwari78@gm', 12345678, 'vsdvzfbgfhcvbncghjj', '2027-06-18', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_code` varchar(10) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `fees` varchar(8) NOT NULL,
  `modules` varchar(100) NOT NULL,
  `career` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_code`, `course_name`, `duration`, `fees`, `modules`, `career`) VALUES
('IT', 'Information Technology', '4 Years', '50000', 'Same as cse', 'Same as cse'),
('ECE', 'Electronics and communication', '4 Years', '50000', 'Same as cse', 'Radar Scientist, Communication engineer, Software developer,tester,analyst,FADEC developer'),
('MECH', 'Mechanical', '4 Years', '50000', 'GGMP,kosan,MATLAB', 'All possible engineering jobs'),
('Civil', 'Civil Engineering', '4 Years', '50000', 'MATLAB, AUTOCAD ETC', 'Structural engineer');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `sno` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `dof` varchar(15) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`sno`, `name`, `email_id`, `contact_no`, `feedback`, `dof`, `status`) VALUES
(1, 'Parikshit Pandey', 'priyanshutiwari786@gmail.com', '45425467852', 'hahsuiuausjhasb', '13-06-18', 'N'),
(3, 'Vivudh', 'vivudh02@gmail.com', '789456123', 'nkhjbJKFHGKUHBFJWHEUKHbuygufbjkhadbvhua', '23-06-18', 'N'),
(4, 'Shashwat', 'shashwat02@gmail.com', '456789123', 'jscigdsucbhkusdygucuiyahjsvcu', '23-06-18', 'N'),
(5, 'Puneet', 'puneet02@gmail.com', '654987321', 'bvjkhdbvjkuyjkhabckjhv', '23-06-18', 'N'),
(6, 'Mrityunjai', 'mrityu02@gmail.com', '7539514682', 'ncjabjhyuvawchkjdvyuiwevjhhkdvcv', '23-06-18', 'N'),
(7, 'Vivudh', 'vivudh40@gmail.com', '95175345682', 'jhvhvfugjkhfbuygefuhbwvjfvu', '23-06-18', 'N'),
(9, 'vikrant', 'vikrant02@gmail.com', '7598426153', 'hsbxhasuasuvciuyasguy', '23-06-18', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `fee_details`
--

CREATE TABLE `fee_details` (
  `Receipt_no` varchar(12) NOT NULL,
  `Roll_no` varchar(10) NOT NULL,
  `Amount` varchar(10) NOT NULL,
  `Mode_of_payment` varchar(15) NOT NULL,
  `Bank Name` varchar(100) NOT NULL,
  `Cheque no.` varchar(9) NOT NULL,
  `Date of fee` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee_details`
--

INSERT INTO `fee_details` (`Receipt_no`, `Roll_no`, `Amount`, `Mode_of_payment`, `Bank Name`, `Cheque no.`, `Date of fee`) VALUES
('1', '1', '20000000', 'cheque', 'SBI', '123456789', '14/03/2018'),
('2', '2', '20000000', 'cheque', 'SBI', '12345678', '14/03/2018'),
('2', '2', '20000000', 'cheque', 'SBI', '12345678', '14/03/2018'),
('3', '2', '20000000', 'cheque', 'SBI', '753951468', '14/03/2018'),
('3', '2', '20000000', 'cheque', 'SBI', '753951468', '14/03/2018'),
('3', '2', '20000000', 'cheque', 'SBI', '753951468', '14/03/2018'),
('3', '2', '20000000', 'cheque', 'SBI', '753951468', '14/03/2018'),
('3', '2', '20000000', 'cheque', 'SBI', '753951468', '14/03/2018'),
('3', '2', '20000000', 'cheque', 'SBI', '753951468', '14/03/2018'),
('4', '1', '20000000', 'cheque', 'SBI', '456723589', '14/03/2018'),
('5', '2', '20000000', 'cheque', 'SBI', '789523641', '14/03/2018'),
('6', '3', '20000000', 'cheque', 'SBI', '785226941', '14/03/2018'),
('7', '1', '20000000', 'cheque', 'SBI', '951753456', '14/03/2018'),
('8', '2', '20000000', 'cheque', 'SBI', '486215375', '14/03/2018'),
('9', '3', '20000000', 'cheque', 'SBI', '759842615', '14/03/2018');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` varchar(12) NOT NULL,
  `password` varchar(30) NOT NULL,
  `profile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `password`, `profile`) VALUES
('1', '123456789', 'S'),
('admin', 'admin', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `reg_code`
--

CREATE TABLE `reg_code` (
  `rollno` int(7) NOT NULL,
  `code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_code`
--

INSERT INTO `reg_code` (`rollno`, `code`) VALUES
(1, '2602-5405'),
(2, '2602-5405'),
(2, '2602-5405'),
(2, '4368-5922'),
(2, '4368-5922'),
(2, '4368-5922'),
(2, '4368-5922'),
(2, '4368-5922'),
(2, '4368-5922'),
(1, '2438-1846'),
(2, '2438-1846'),
(3, '2438-1846'),
(1, '4047-7176'),
(2, '4047-7176'),
(3, '4047-7176');

-- --------------------------------------------------------

--
-- Table structure for table `student_detail`
--

CREATE TABLE `student_detail` (
  `Roll_no` varchar(15) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Father_Name` varchar(40) NOT NULL,
  `Course_code` varchar(20) NOT NULL,
  `Modules` varchar(500) NOT NULL,
  `Fee` varchar(19) NOT NULL,
  `Date of Admission` varchar(20) NOT NULL,
  `Date of Birth` varchar(20) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Contact_no` varchar(10) NOT NULL,
  `Email_id` varchar(60) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_detail`
--

INSERT INTO `student_detail` (`Roll_no`, `Name`, `Father_Name`, `Course_code`, `Modules`, `Fee`, `Date of Admission`, `Date of Birth`, `Gender`, `Contact_no`, `Email_id`, `Address`, `Image`) VALUES
('1', 'Mrityunjai', 'Vishnu', 'Civil', 'MATLAB, AUTOCAD ETC', '50000', '14/03/2018', '', 'M', '9838462683', 'mrityunjai02@gmail.com', '', '1.png'),
('2', 'Priyanshu', 'Kuldeep Tiwari', 'ECE', 'Same as cse', '50000', '14/03/2018', '', 'M', '', 'priyanshutiwari786@gmail.com', '', '2.png'),
('3', 'Vivudh', 'Subodh', 'MECH', 'GGMP,kosan,MATLAB', '50000', '14/03/2018', '', 'M', '', 'vivudh02@gmail.com', '', '3.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`serial_no`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `student_detail`
--
ALTER TABLE `student_detail`
  ADD PRIMARY KEY (`Roll_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `serial_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `sno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
