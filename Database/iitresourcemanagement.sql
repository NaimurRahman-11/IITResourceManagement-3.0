-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2023 at 03:07 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iitresourcemanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `accepteditemrequest`
--

CREATE TABLE `accepteditemrequest` (
  `id` int(10) UNSIGNED NOT NULL,
  `TeacherName` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `acceptingDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accepteditemrequest`
--

INSERT INTO `accepteditemrequest` (`id`, `TeacherName`, `description`, `amount`, `acceptingDate`) VALUES
(1, 'dipok', NULL, NULL, '2022-09-19 23:29:22');

-- --------------------------------------------------------

--
-- Table structure for table `acceptedrequisition`
--

CREATE TABLE `acceptedrequisition` (
  `id` int(10) UNSIGNED NOT NULL,
  `TeacherName` varchar(255) DEFAULT NULL,
  `ItemName` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `date_of_commencement` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `feedback` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acceptedrequisition`
--

INSERT INTO `acceptedrequisition` (`id`, `TeacherName`, `ItemName`, `Description`, `date_of_commencement`, `feedback`) VALUES
(11, 'Dipok Chandra Das', 'PC', 'My current pc is very slow. For this I need a new pc to conduct my works smoothly.', '2022-09-21 15:13:11', 'not so good'),
(14, 'Dipok Chandra Das', 'Pc', 'fewfewfewf', '2022-09-21 13:54:58', 'not good');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(10) UNSIGNED NOT NULL,
  `FileName` varchar(255) DEFAULT NULL,
  `FileLocation` varchar(255) DEFAULT NULL,
  `FileCategory` varchar(20) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `FileName`, `FileLocation`, `FileCategory`, `Date`) VALUES
(16, 'notice', 'administration', 'administration', '2022-09-21 06:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `itemrequest`
--

CREATE TABLE `itemrequest` (
  `id` int(10) UNSIGNED NOT NULL,
  `teacherName` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `itemRequeststatus` varchar(10) DEFAULT 'pending',
  `dateColumn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemrequest`
--

INSERT INTO `itemrequest` (`id`, `teacherName`, `description`, `amount`, `itemRequeststatus`, `dateColumn`) VALUES
(1, NULL, 'marker, A4 Paper', '2, 3', 'Stock out', '2022-09-20 04:19:01'),
(2, NULL, 'marker', '3', 'Accepted', '2022-09-20 04:44:47'),
(3, NULL, 'pen', '3', 'Accepted', '2022-09-20 04:45:01'),
(4, NULL, 'tissue box', '2', 'Accepted', '2022-09-20 04:45:16'),
(5, NULL, 'pen', '4', 'Accepted', '2022-09-20 04:48:23'),
(6, NULL, 'marker, A4 Paper', '2, 3', 'Accepted', '2022-09-20 04:54:02'),
(7, NULL, 'marker', '2', 'Accepted', '2022-09-20 04:50:47'),
(8, NULL, 'marker', '2', 'Accepted', '2022-09-20 05:05:52'),
(9, NULL, 'marker', '3', 'Accepted', '2022-09-20 13:11:10'),
(10, NULL, 'marker', '3', 'Accepted', '2022-09-20 04:52:46'),
(11, NULL, 'marker', '3', 'Accepted', '2022-09-20 04:51:38'),
(12, NULL, 'marker', '3', 'Accepted', '2022-09-20 13:13:17'),
(13, NULL, 'marker', '3', 'Stock out', '2022-09-20 13:46:05'),
(14, NULL, 'marker', '3', 'Stock out', '2022-09-20 13:49:16'),
(15, NULL, 'marker', '3', 'Accepted', '2022-09-20 16:22:47'),
(16, NULL, 'marker', '3', 'Accepted', '2022-09-20 16:23:11'),
(17, NULL, 'pen, marker, A4 Paper', '1, 1, 1', 'Accepted', '2022-09-21 13:04:42'),
(18, NULL, 'marker', '2', 'pending', '2022-09-20 06:46:56'),
(19, NULL, 'marker', '4', 'Accepted', '2022-09-21 13:06:48'),
(20, 'dipok chandra das', 'marker', '3', 'Stock out', '2022-09-21 13:04:15'),
(21, 'dipok chandra das', 'marker', '3', 'Stock out', '2022-09-21 13:04:11'),
(22, 'dipok chandra das', 'marker', '5', 'Accepted', '2022-09-21 13:04:08'),
(23, 'dipok chandra das', 'marker', '2', 'pending', '2022-09-21 13:07:40'),
(24, 'dipok chandra das', 'marker', '4', 'pending', '2022-09-21 15:12:06');

-- --------------------------------------------------------

--
-- Table structure for table `pc`
--

CREATE TABLE `pc` (
  `id` int(10) UNSIGNED NOT NULL,
  `PC_Id` char(255) NOT NULL,
  `PC_status` varchar(20) DEFAULT NULL,
  `NoOfComplaints` int(10) UNSIGNED DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pc`
--

INSERT INTO `pc` (`id`, `PC_Id`, `PC_status`, `NoOfComplaints`) VALUES
(2, '25002', 'Active', 0),
(3, '25003', 'Active', 0),
(4, '25004', 'Active', 0),
(7, '25005', 'Active', 0),
(10, '25001', 'Under Maintenance', 7);

-- --------------------------------------------------------

--
-- Table structure for table `pcassignedlist`
--

CREATE TABLE `pcassignedlist` (
  `id` int(10) UNSIGNED NOT NULL,
  `PC_Id` char(255) DEFAULT NULL,
  `Assigned_roll` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pcassignedlist`
--

INSERT INTO `pcassignedlist` (`id`, `PC_Id`, `Assigned_roll`) VALUES
(1, '25002', 'bbh191234, bbh201218, bbh211228'),
(2, '25003', 'bbh191256, bbh201221, '),
(3, '25004', 'bbh191221, bbh201225, '),
(4, '25005', 'bbh191267, bbh201212'),
(5, '25001', 'bbh191212');

-- --------------------------------------------------------

--
-- Table structure for table `placecomplaint`
--

CREATE TABLE `placecomplaint` (
  `Complaint_No` int(20) NOT NULL,
  `Student_ID` varchar(20) NOT NULL,
  `PC_ID` varchar(20) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `complaintStatus` varchar(255) DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `placecomplaint`
--

INSERT INTO `placecomplaint` (`Complaint_No`, `Student_ID`, `PC_ID`, `Description`, `Date`, `complaintStatus`) VALUES
(6, 'ASH1925011M', '354', 'Keyboard is missing!', '2022-09-05 10:12:39', 'pending'),
(7, 'ASH1925005M', '444', 'Something is not working.', '2022-09-06 05:06:10', 'pending'),
(13, 'Ash1925012M', '123', 'mouse pblm', '2022-09-08 18:05:55', 'pending'),
(43, 'bbh191212', '25001', 'mouse problems', '2022-09-21 14:23:50', 'rejected'),
(45, 'bbh191212', '25001', 'new', '2022-09-21 14:23:50', 'rejected'),
(46, 'bbh191212', '25001', 'new\r\n', '2022-09-21 14:34:38', 'pending'),
(47, 'bbh191212', '25001', 'new on wsss', '2022-09-21 15:10:53', 'pending'),
(48, 'bbh191212', '25001', '#', '2022-09-21 15:31:32', 'pending'),
(49, 'bbh191212', '25001', '<', '2022-09-21 15:31:43', 'pending'),
(50, 'bbh191212', '25001', '&', '2022-09-21 15:39:31', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `requisition`
--

CREATE TABLE `requisition` (
  `id` int(10) UNSIGNED NOT NULL,
  `TeacherName` varchar(255) DEFAULT NULL,
  `ItemName` varchar(255) DEFAULT NULL,
  `Description` varchar(1000) DEFAULT NULL,
  `RequisitionStatus` varchar(1000) DEFAULT NULL,
  `date_of_commencement` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requisition`
--

INSERT INTO `requisition` (`id`, `TeacherName`, `ItemName`, `Description`, `RequisitionStatus`, `date_of_commencement`) VALUES
(16, 'dipok chandra das', 'Pc', 'new one', 'Rejected', '2022-09-21 13:23:45'),
(18, 'dipok chandra das', 'pc', 'need a new ', 'waiting for approval of The Director', '2022-09-21 15:17:52'),
(19, 'dipok chandra das', 'PC', 'I need a new PC!', 'waiting for approval of The Director', '2022-09-21 17:14:18'),
(20, 'Nazmun Nahar', 'Desk', 'I need a Desk!', 'waiting for approval of The Director', '2022-09-21 17:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `resource`
--

CREATE TABLE `resource` (
  `id` int(10) UNSIGNED NOT NULL,
  `ItemCategory` varchar(255) DEFAULT NULL,
  `ItemName` varchar(255) DEFAULT NULL,
  `amount` int(10) UNSIGNED DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resource`
--

INSERT INTO `resource` (`id`, `ItemCategory`, `ItemName`, `amount`) VALUES
(1, 'stationary', 'Marker', 9),
(2, 'stationary', 'Duster', 5),
(3, 'stationary', 'Pen', 10),
(4, 'stationary', 'A4 Paper', 11),
(5, 'personal', 'Tissue box', 12),
(6, 'personal', 'Water bottle', 2),
(7, 'personal', 'Air Freshner', 2),
(8, 'furniture', 'Classroom Podium', 2),
(9, 'furniture', 'Teacher Desk', 2),
(10, 'furniture', 'Teacher Chair', 2),
(11, 'furniture', 'Classroom desk', 2),
(12, 'furniture', 'lab desks', 2),
(13, 'electricOrElectronic', 'Projector', 2),
(14, 'electricOrElectronic', 'AC', 2),
(15, 'electricOrElectronic', 'Fans', 2),
(16, 'electricOrElectronic', 'Bulbs', 2),
(17, 'lab', 'Monitor', 12),
(18, 'lab', 'Keyboard', 4),
(19, 'lab', 'Mouse', 11),
(20, 'stationary', 'kolom', 0),
(21, 'electric', 'kolom', 0),
(22, 'furnitures', 'lol', 0),
(23, 'personal', 'lol', 0),
(24, 'furniture', 'Pc', 0),
(25, '', 'lol', 0),
(26, 'ElectricOrElectronic', 'lol', 0),
(27, '', 'Pc', 0),
(29, '', '', 0),
(30, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `solvedcomplaints`
--

CREATE TABLE `solvedcomplaints` (
  `id` int(11) NOT NULL,
  `Complaint_No` int(11) NOT NULL,
  `Student_ID` varchar(20) NOT NULL,
  `PC_ID` varchar(20) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solvedcomplaints`
--

INSERT INTO `solvedcomplaints` (`id`, `Complaint_No`, `Student_ID`, `PC_ID`, `Description`, `Date`) VALUES
(1, 6, 'ASH1925011M', '354', 'Keyboard is missing!', '2022-09-05 12:11:09'),
(2, 4, 'ASH1925005M', '988', 'My UPS is not working. UPS Battery is dead.', '2022-09-05 12:12:59'),
(3, 11, 'ASH1925021', '444', 'Broadband line is missing.', '2022-09-06 10:56:35'),
(4, 9, 'ASH1925028M', '999', 'Pc is very slow!', '2022-09-06 10:56:43'),
(5, 24, 'bbh191212', '25004', 'fefqefwef', '2022-09-12 21:22:31'),
(6, 24, 'bbh191212', '25004', 'fefqefwef', '2022-09-12 21:22:58'),
(7, 23, 'bbh191212', '25004', 'wfewfewf', '2022-09-12 21:23:03'),
(8, 22, 'bbh191212', '25004', 'dwdqwdwd', '2022-09-12 21:23:11'),
(9, 25, 'bbh191212', '25004', 'kmlkmkl;m', '2022-09-12 21:25:05'),
(10, 26, 'bbh191212', '25004', 'jnkjnkjnkjn', '2022-09-12 21:29:42'),
(11, 29, 'bbh191212', '25004', 'f4rtf4rf', '2022-09-13 03:30:58');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) UNSIGNED NOT NULL,
  `UserId` varchar(255) NOT NULL,
  `UserPassword` varchar(255) DEFAULT NULL,
  `Academic_Roll` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `UserId`, `UserPassword`, `Academic_Roll`) VALUES
(1, 'mou@mitu.com', 'moumitu', 'bbh191234'),
(2, 'mou@mitu.com', 'moumitu', 'bbh191267'),
(3, 'mou@mitu.com', 'moumitu', 'bbh191256'),
(4, 'mou@mitu.com', 'moumitu', 'bbh191212'),
(5, 'mou@mitu.com', 'moumitu', 'bbh191221'),
(6, 'mou@mita.com', 'moumita', 'bbh201221'),
(7, 'mou@mita.com', 'moumita', 'bbh201212'),
(8, 'mou@mita.com', 'moumita', 'bbh201218'),
(9, 'mou@mita.com', 'moumita', 'bbh201225'),
(10, 'mou@mita.com', 'moumita', 'bbh211228');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Designation` varchar(255) DEFAULT NULL,
  `Academic_Roll` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `userPassword` varchar(255) DEFAULT NULL,
  `userStatus` varchar(255) DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `Name`, `Designation`, `Academic_Roll`, `Email`, `userPassword`, `userStatus`) VALUES
(1, 'dipok chandra das', 'teacher', NULL, 'dipok@example.com', '123456', 'approved'),
(2, 'joy bhowmik', NULL, 'bbh191212', 'joybhowmik67@gmail.com', '123456', 'approved'),
(3, 'Nazmun Nahar', 'Lecturer', NULL, 'Nazmun@gmail.com', '123456', 'approved'),
(8, NULL, 'Director', NULL, 'joybhowmik173@gmail.com', '123456', 'pending'),
(9, NULL, 'Office Assistant', NULL, 'naimur@gmail.com', '123456', 'approved'),
(10, NULL, 'Lab Assistant', NULL, 'redwan@gmail.com', '123456', 'approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accepteditemrequest`
--
ALTER TABLE `accepteditemrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acceptedrequisition`
--
ALTER TABLE `acceptedrequisition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itemrequest`
--
ALTER TABLE `itemrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`id`,`PC_Id`);

--
-- Indexes for table `pcassignedlist`
--
ALTER TABLE `pcassignedlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `placecomplaint`
--
ALTER TABLE `placecomplaint`
  ADD PRIMARY KEY (`Complaint_No`);

--
-- Indexes for table `requisition`
--
ALTER TABLE `requisition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resource`
--
ALTER TABLE `resource`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solvedcomplaints`
--
ALTER TABLE `solvedcomplaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`,`UserId`,`Academic_Roll`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Academic_Roll` (`Academic_Roll`,`Email`),
  ADD UNIQUE KEY `Academic_Roll_2` (`Academic_Roll`,`Email`),
  ADD UNIQUE KEY `Academic_Roll_3` (`Academic_Roll`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accepteditemrequest`
--
ALTER TABLE `accepteditemrequest`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `itemrequest`
--
ALTER TABLE `itemrequest`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pc`
--
ALTER TABLE `pc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pcassignedlist`
--
ALTER TABLE `pcassignedlist`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `placecomplaint`
--
ALTER TABLE `placecomplaint`
  MODIFY `Complaint_No` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `requisition`
--
ALTER TABLE `requisition`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `resource`
--
ALTER TABLE `resource`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `solvedcomplaints`
--
ALTER TABLE `solvedcomplaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
