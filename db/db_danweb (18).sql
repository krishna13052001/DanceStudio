-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2021 at 06:02 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_danweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_rewards`
--

CREATE TABLE `add_rewards` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `dance_type` varchar(50) NOT NULL,
  `rewards` int(10) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_rewards`
--

INSERT INTO `add_rewards` (`id`, `username`, `cname`, `dance_type`, `rewards`, `date`) VALUES
(18, 'John', 'Subbu', 'Ballroom Dance', 2, '2020-12-02'),
(19, 'John', 'Subbu', 'Ballroom Dance', 34, '2020-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL,
  `image_name` text NOT NULL,
  `date_uploaded` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`image_id`, `image_name`, `date_uploaded`) VALUES
(32, 'cristina-gottardi-CSpjU6hYo_0-unsplash.jpg', '2021-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `info_tbl`
--

CREATE TABLE `info_tbl` (
  `infoID` int(100) NOT NULL,
  `firstName` varchar(199) DEFAULT NULL,
  `lastName` varchar(199) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_tbl`
--

INSERT INTO `info_tbl` (`infoID`, `firstName`, `lastName`) VALUES
(8, 'sam[le', 'sample1'),
(10, 'gerald', 'narisma'),
(11, 'gerald', 'narisma'),
(12, 'Arya', 'teja');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `username` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `dance_type` varchar(40) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `student_name`, `username`, `gender`, `dance_type`, `status`) VALUES
(96, 'John', 'Subbu', 'Male', 'Ballroom Dance', 'Accepted'),
(98, 'John', 'lisa', 'male', 'Ballet Dance', 'pending'),
(99, 'John', 'lisa', 'male', 'Ballet Dance', 'pending'),
(100, 'John', 'lisa', 'male', 'Ballet Dance', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_login`
--

CREATE TABLE `tbl_admin_login` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fullname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin_login`
--

INSERT INTO `tbl_admin_login` (`id`, `username`, `password`, `fullname`) VALUES
(1, 'arya', 'teja', 'Arya Teja');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chor_login`
--

CREATE TABLE `tbl_chor_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fullname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_chor_login`
--

INSERT INTO `tbl_chor_login` (`id`, `username`, `password`, `fullname`) VALUES
(46, 'Arya', 'efrg', ''),
(47, 'John', 'john', 'John'),
(48, 'Arya Teja', 'b', 'Arya'),
(50, 'b', 'qwerty', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chor_reg`
--

CREATE TABLE `tbl_chor_reg` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `gender` text NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile_no` bigint(10) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dance_type` varchar(30) NOT NULL,
  `any_awards` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_chor_reg`
--

INSERT INTO `tbl_chor_reg` (`id`, `username`, `gender`, `dob`, `address`, `mobile_no`, `email_id`, `password`, `dance_type`, `any_awards`) VALUES
(62, 'Subbu', 'Male', '1991-06-12', 'Nellore', 8451236548, 'subbu@gmail.com', 'subbu', 'Hip-Hop Dance', ''),
(67, 'Vikram', 'Male', '1995-11-25', 'Nellore', 9584651235, 'vikram@gmail.com', 'vikram', 'Ballroom Dance', ''),
(68, 'lockie', 'male', '2020-10-09', 'egr', 9865432178, 'wick@gmail.com', 'lockie', 'Modern Dance', 'bdd'),
(70, 'lisa', 'male', '2020-10-09', 'egr', 9865432178, 'wick@gmail.com', 'ann', 'Ballet Dance', 'bdd'),
(71, 'ttt', 'vdfbg', '2020-02-20', '', 9865432178, 'ttt@gmail.com', 'ttt', 'Jazz Dance', 'efs'),
(72, 'saaketh', 'Male', '2020-02-20', 'wergth', 9865432178, 'wick@gmail.com', '1234', 'Western Dance', '333'),
(76, 'awef', 'Male', '2020-11-05', 'erhtny', 2343652243, 'agrrrre@gmail', 'aergthyn', 'Western Dance', 'srdgfh');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stu_login`
--

CREATE TABLE `tbl_stu_login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stu_reg`
--

CREATE TABLE `tbl_stu_reg` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile_no` bigint(10) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dance_type` varchar(30) NOT NULL,
  `any_awards` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_stu_reg`
--

INSERT INTO `tbl_stu_reg` (`id`, `username`, `gender`, `dob`, `address`, `mobile_no`, `email_id`, `password`, `dance_type`, `any_awards`) VALUES
(1, 'John', 'male', '2020-07-10', 'londo', 45697130, 'john@gmail.com', 'john', 'Ballroom Dance', 'ergthfyjguyt'),
(2, 't', 'male', '2020-09-03', 'efsgdrfhtgjyhkj', 9865432178, 'wick@gmail.com', 't', 'Jazz Dance', 'efs'),
(3, 'asdf', 'female', '2020-08-27', 'efsgdrfhtgjyhkj', 9865432178, 'b@gmail.com', 'asdf', 'Hip-Hop Dance', 'asdf'),
(4, 'arya', 'male', '2020-09-04', 'wfegrdhtnfmghj', 3456786543, 'b@gmail.com', 'wick', 'Western Dance', 'fergdhjmj,nk'),
(5, 'lahari', 'Female', '20-10-2000', 'erthydjufkigjnbv', 7410852963, 'lahari@gmail.com', 'lahari', 'Ballet Dance', 'efrgthyjgkhjhtf'),
(6, 'lok', 'Female', '20-10-2000', 'erthydjufkigjnbv', 7410852963, 'lahari@gmail.com', 'lok', 'Modern Dance', 'efrgthyjgkhjhtf');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `userID` int(5) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`userID`, `username`, `password`) VALUES
(3, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_rewards`
--
ALTER TABLE `add_rewards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `info_tbl`
--
ALTER TABLE `info_tbl`
  ADD PRIMARY KEY (`infoID`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin_login`
--
ALTER TABLE `tbl_admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_chor_login`
--
ALTER TABLE `tbl_chor_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_chor_reg`
--
ALTER TABLE `tbl_chor_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_stu_reg`
--
ALTER TABLE `tbl_stu_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_rewards`
--
ALTER TABLE `add_rewards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `info_tbl`
--
ALTER TABLE `info_tbl`
  MODIFY `infoID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `tbl_admin_login`
--
ALTER TABLE `tbl_admin_login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_chor_login`
--
ALTER TABLE `tbl_chor_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tbl_chor_reg`
--
ALTER TABLE `tbl_chor_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `tbl_stu_reg`
--
ALTER TABLE `tbl_stu_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `userID` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
