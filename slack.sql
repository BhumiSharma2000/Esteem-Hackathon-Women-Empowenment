-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2019 at 02:58 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slack`
--

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `c_id` int(20) NOT NULL,
  `complain` varchar(500) NOT NULL,
  `name_of_complainer` varchar(50) NOT NULL,
  `name_of_respondent` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `no_of_vote` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`c_id`, `complain`, `name_of_complainer`, `name_of_respondent`, `date`, `no_of_vote`) VALUES
(2, 'Teasing', 'd933996fd7dc03772be6a5fd7a0fb20c', 'xyz', '2019-08-16', 3),
(3, 'MisBehave', 'd933996fd7dc03772be6a5fd7a0fb20c', 'abc', '2019-08-16', 50),
(4, 'Ragging', 'd933996fd7dc03772be6a5fd7a0fb20c', 'xyz', '2019-08-16', 20);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `p_id` int(20) NOT NULL,
  `project_name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `team_number` int(20) NOT NULL,
  `active` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`p_id`, `project_name`, `description`, `start_date`, `end_date`, `team_number`, `active`) VALUES
(1, 'Breaking the Glass Ceiling', 'It is a Special Project Regarding Gender Equlity', '2019-08-29', '2019-08-08', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `t_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `project_name` varchar(50) NOT NULL,
  `name_of_staff` varchar(50) NOT NULL,
  `assigned_on` date NOT NULL,
  `status` int(20) NOT NULL,
  `rating` float DEFAULT NULL,
  `created_on` datetime(6) NOT NULL,
  `updated_on` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`t_id`, `name`, `project_name`, `name_of_staff`, `assigned_on`, `status`, `rating`, `created_on`, `updated_on`) VALUES
(1, 'Front-end', 'Breaking the Glass Ceiling', 'xyz', '2019-08-16', 0, NULL, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(2, 'Back-end', 'Breaking the Glass Ceiling', 'abc', '2019-08-16', 1, NULL, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(3, 'Marketing', 'Breaking the Glass Ceiling', 'abc', '2019-08-16', 1, NULL, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `tb1_otp`
--

CREATE TABLE `tb1_otp` (
  `otp_id` int(10) NOT NULL,
  `login_id` int(10) NOT NULL,
  `otp` int(10) NOT NULL,
  `otp_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb1_otp`
--

INSERT INTO `tb1_otp` (`otp_id`, `login_id`, `otp`, `otp_time`) VALUES
(1, 0, 259988, '2019-07-11 06:05:08'),
(2, 16, 259988, '2019-07-11 06:05:12'),
(3, 16, 154812, '2019-07-11 06:06:15'),
(4, 17, 908664, '2019-07-16 12:58:31'),
(5, 0, 469964, '2019-07-16 13:01:29'),
(6, 17, 469964, '2019-07-16 13:01:32'),
(7, 0, 747534, '2019-07-16 13:02:27'),
(8, 17, 747534, '2019-07-16 13:02:31'),
(9, 0, 518331, '2019-07-16 13:03:46'),
(10, 17, 518331, '2019-07-16 13:03:50'),
(11, 16, 506971, '2019-07-16 16:36:46'),
(12, 2, 706271, '2019-08-15 18:58:20'),
(13, 2, 151828, '2019-08-15 19:00:30'),
(14, 18, 404052, '2019-08-16 06:24:42'),
(15, 21, 756460, '2019-08-16 11:11:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail`
--

CREATE TABLE `tbl_detail` (
  `detail_id` int(20) NOT NULL,
  `login_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `no_of_members_under` int(20) DEFAULT NULL,
  `total_seniors` int(20) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `created_on` datetime(6) NOT NULL,
  `updated_on` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detail`
--

INSERT INTO `tbl_detail` (`detail_id`, `login_id`, `name`, `dob`, `gender`, `address`, `profile_pic`, `designation`, `no_of_members_under`, `total_seniors`, `joining_date`, `created_on`, `updated_on`) VALUES
(16, 17, 'bhumi', '1999-02-10', 'female', 'AbuNagari', '../photos/notification-icon.png', 'Sales Manager', 500, 500, '2019-08-03', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(17, 18, 'Bhumi Sharma', '2019-08-09', 'male', 'shashf', '../photos/img005_20170304_12_54_27.jpg', '', 0, 0, '0000-00-00', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(18, 19, 'zinal', '2019-08-02', 'female', 'Himalya', '../photos/New-Orleans-768x443.jpeg', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(19, 20, 'xyz', '2019-08-06', 'male', 'DevAppartment', '../photos/default.png', 'Digital marketing', 5, 65, '2019-08-15', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(20, 21, 'abc', '2019-08-10', 'male', 'WesternQuerty', '../photos/PHM_06102019_Respirator-Selection_header_WP-1.jpg', 'junior clerk', 10, 50, '2019-08-20', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(20) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `status` int(10) NOT NULL,
  `type` int(10) NOT NULL,
  `active` int(30) NOT NULL,
  `team_leader` int(10) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `team_number` int(20) DEFAULT NULL,
  `created_on` datetime(6) NOT NULL,
  `updated_on` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `email_id`, `phone_no`, `password`, `status`, `type`, `active`, `team_leader`, `department`, `team_number`, `created_on`, `updated_on`) VALUES
(17, 'bhumisharma401@gmail.com', 9898660970, '25d55ad283aa400af464c76d713c07ad', 1, 2, 1, 1, 'Sales', 1, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(18, 'sharmabhumi2000@gmail.com', 9574066883, 'c4ca4238a0b923820dcc509a6f75849b', 1, 1, 1, NULL, NULL, NULL, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(19, 'zinal@gmail.com', 9745632123, '25d55ad283aa400af464c76d713c07ad', 1, 1, 1, NULL, NULL, NULL, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(20, 'honey@gmail.com', 9845212121, '25d55ad283aa400af464c76d713c07ad', 1, 2, 1, NULL, NULL, NULL, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(21, 'muskan@gmail.com', 9874521212, '25d55ad283aa400af464c76d713c07ad', 1, 2, 1, NULL, 'sales', 1, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `tb1_otp`
--
ALTER TABLE `tb1_otp`
  ADD PRIMARY KEY (`otp_id`);

--
-- Indexes for table `tbl_detail`
--
ALTER TABLE `tbl_detail`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `login_id` (`login_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `c_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `p_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `t_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb1_otp`
--
ALTER TABLE `tb1_otp`
  MODIFY `otp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_detail`
--
ALTER TABLE `tbl_detail`
  MODIFY `detail_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_detail`
--
ALTER TABLE `tbl_detail`
  ADD CONSTRAINT `tbl_detail_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `tbl_login` (`login_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
