-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2020 at 01:55 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251', '2017-05-13 11:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `tblclasses`
--

CREATE TABLE `tblclasses` (
  `id` int(11) NOT NULL,
  `ClassName` varchar(80) DEFAULT NULL,
  `ClassNameNumeric` int(4) DEFAULT NULL,
  `Section` varchar(5) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblclasses`
--

INSERT INTO `tblclasses` (`id`, `ClassName`, `ClassNameNumeric`, `Section`, `CreationDate`, `UpdationDate`) VALUES
(1, 'Nursery', 13, 'A', '2020-04-06 07:31:33', NULL),
(2, 'Hkg', 14, 'A', '2020-04-06 07:31:55', NULL),
(3, 'Lkg', 15, 'A', '2020-04-06 07:32:11', NULL),
(4, 'First', 1, 'A', '2020-04-06 07:32:27', NULL),
(5, 'Second', 2, 'A', '2020-04-06 07:32:43', NULL),
(6, 'Third', 3, 'A', '2020-04-06 07:32:56', NULL),
(7, 'Fourth', 4, 'A', '2020-04-06 07:33:07', NULL),
(8, 'Fifth', 5, 'A', '2020-04-06 07:33:19', NULL),
(9, 'Sixth', 6, 'A', '2020-04-06 07:33:31', NULL),
(10, 'Seventh', 7, 'A', '2020-04-06 07:33:59', NULL),
(11, 'Eight', 8, 'A', '2020-04-06 07:34:23', NULL),
(12, 'Nine', 9, 'A', '2020-04-06 07:34:37', NULL),
(13, 'Ten', 10, 'A', '2020-04-06 07:34:54', NULL),
(14, 'Eleven', 11, 'A', '2020-04-06 07:35:08', NULL),
(15, 'Eleven', 11, 'B', '2020-04-06 07:35:24', NULL),
(16, 'Eleven', 11, 'C', '2020-04-06 07:35:39', NULL),
(17, 'Twelve', 12, 'A', '2020-04-06 07:36:07', NULL),
(18, 'Twelve', 12, 'B', '2020-04-06 07:36:23', NULL),
(19, 'Twelve', 12, 'C', '2020-04-06 07:36:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblmessage`
--

CREATE TABLE `tblmessage` (
  `id` int(6) UNSIGNED NOT NULL,
  `Person` varchar(30) NOT NULL,
  `Sub` varchar(30) NOT NULL,
  `Message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmessage`
--

INSERT INTO `tblmessage` (`id`, `Person`, `Sub`, `Message`) VALUES
(1, 'Principal', 'njsdbv', 'bnbvndsf\r\nbdfmbnd\r\nnmdbvfd vfndvbf \r\ngmfnf '),
(4, 'Principal', 'njsdbv', 'bnbvndsf\r\nbdfmbnd\r\nnmdbvfd vfndvbf \r\ngmfnf '),
(5, 'Staff', 'REGARDING CORONA', ' STAY HOME , STAY SAFE !\r\nMAINTAIN SOCIAL DISTANCING . \r\n\r\nPRINCIPAL \r\nR.K. SHARMA'),
(6, 'Staff', 'REGARDING CORONA', ' STAY HOME , STAY SAFE !\r\nMAINTAIN SOCIAL DISTANCING . \r\n\r\nPRINCIPAL \r\nR.K. SHARMA'),
(7, 'Staff', 'REGARDING CORONA', ' STAY HOME , STAY SAFE !\r\nMAINTAIN SOCIAL DISTANCING . \r\n\r\nPRINCIPAL \r\nR.K. SHARMA'),
(8, 'Staff', 'REGARDING CORONA', ' STAY HOME , STAY SAFE !\r\nMAINTAIN SOCIAL DISTANCING . \r\n\r\nPRINCIPAL \r\nR.K. SHARMA'),
(9, 'Staff', 'REGARDING CORONA', ' STAY HOME , STAY SAFE !\r\nMAINTAIN SOCIAL DISTANCING . \r\n\r\nPRINCIPAL \r\nR.K. SHARMA'),
(10, 'Staff', 'REGARDING CORONA', ' STAY HOME , STAY SAFE !\r\nMAINTAIN SOCIAL DISTANCING . \r\n\r\nPRINCIPAL \r\nR.K. SHARMA'),
(11, 'Director', 'bfgndgb', 'mv,dfb\r\nfmd,bfmnd '),
(12, 'Director', 'bdhfdas', 'jndfj\r\nbdmf,mdfd '),
(13, 'Director', 'frfjfyhj', ' hfjhgj\r\nyutyyut\r\niligh'),
(14, 'Principal', 'yrttyrty', 'gkjhth\r\nggkrfhklfg\r\nlghktg '),
(15, 'Principal', 'njffgfg', 'klkdflb\r\nKMDFBMDKkl.,cvlvs\r\nNMVCV '),
(16, 'Staff', 'uiuiiuo', ' u0oi90\r\nghfjgh\r\n'),
(17, 'Principal', 'ranjvnsnvm', ' nbjdbjgf\r\nlfgblfgm\r\nmf,dbmdbdf'),
(18, 'Principal', 'ranjvnsnvm', ' nbjdbjgf\r\nlfgblfgm\r\nmf,dbmdbdf'),
(19, 'Staff', 'gfhkjhfkj', 'nmnbv\r\nnmvbnf\r\nnfkbnfgnb ');

-- --------------------------------------------------------

--
-- Table structure for table `tblnotification`
--

CREATE TABLE `tblnotification` (
  `NoticeId` int(10) NOT NULL,
  `NoticeSubject` int(50) NOT NULL,
  `Description` int(100) NOT NULL,
  `NoticeTime` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblnotification`
--

INSERT INTO `tblnotification` (`NoticeId`, `NoticeSubject`, `Description`, `NoticeTime`) VALUES
(1, 0, 0, '2020-04-08 05:19:29.061244'),
(2, 0, 0, '2020-04-08 05:29:59.380993'),
(3, 0, 0, '2020-04-08 05:35:18.534911');

-- --------------------------------------------------------

--
-- Table structure for table `tblresult`
--

CREATE TABLE `tblresult` (
  `id` int(11) NOT NULL,
  `StudentId` int(11) DEFAULT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `SubjectId` int(11) DEFAULT NULL,
  `marks` int(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblresult`
--

INSERT INTO `tblresult` (`id`, `StudentId`, `ClassId`, `SubjectId`, `marks`, `PostingDate`, `UpdationDate`) VALUES
(2, 1, 1, 2, 100, '2017-08-24 17:54:09', '2017-08-28 18:34:32'),
(3, 1, 1, 1, 80, '2017-08-24 17:54:09', '2017-08-28 18:34:25'),
(4, 1, 1, 5, 78, '2017-08-24 17:54:09', '2017-08-28 18:34:26'),
(5, 1, 1, 4, 60, '2017-08-24 17:54:09', '2017-08-28 18:34:26'),
(6, 2, 4, 2, 90, '2017-08-28 18:38:18', NULL),
(7, 2, 4, 1, 75, '2017-08-28 18:38:18', NULL),
(8, 2, 4, 5, 56, '2017-08-28 18:38:18', '2017-08-28 19:26:42'),
(9, 2, 4, 4, 80, '2017-08-28 18:38:18', '2017-08-28 19:26:42'),
(10, 4, 7, 2, 54, '2017-08-28 18:56:21', '2017-08-28 19:03:10'),
(11, 4, 7, 1, 85, '2017-08-28 18:56:21', NULL),
(12, 4, 7, 5, 55, '2017-08-28 18:56:21', '2017-08-28 19:03:10'),
(13, 4, 7, 7, 65, '2017-08-28 18:56:21', '2017-08-28 19:03:10'),
(14, 5, 8, 2, 75, '2017-08-28 19:25:07', NULL),
(15, 5, 8, 1, 56, '2017-08-28 19:25:07', NULL),
(16, 5, 8, 5, 52, '2017-08-28 19:25:07', NULL),
(17, 5, 8, 4, 80, '2017-08-28 19:25:07', NULL),
(18, 3, 6, 2, 80, '2020-04-07 12:11:43', NULL),
(19, 3, 6, 1, 75, '2020-04-07 12:11:43', NULL),
(20, 3, 6, 4, 89, '2020-04-07 12:11:43', NULL),
(21, 3, 6, 6, 89, '2020-04-07 12:11:43', NULL),
(22, 9, 19, 6, 76, '2020-04-07 14:51:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `StudentId` int(11) NOT NULL,
  `StudentName` varchar(100) DEFAULT NULL,
  `FatherName` varchar(100) DEFAULT NULL,
  `RollId` varchar(100) DEFAULT NULL,
  `Mobile` varchar(10) DEFAULT NULL,
  `StudentEmail` varchar(100) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `DOB` varchar(100) DEFAULT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `Session` int(10) DEFAULT NULL,
  `Address` varchar(500) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL,
  `Status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`StudentId`, `StudentName`, `FatherName`, `RollId`, `Mobile`, `StudentEmail`, `Gender`, `DOB`, `ClassId`, `Session`, `Address`, `RegDate`, `UpdationDate`, `Status`) VALUES
(1, 'Sarita  Kumari', 'Rajesh Kumar', '1001', '8745825698', 'sarita@gmail.com', 'Female', '1995-03-10', 1, 2021, 'Jhalawar  District-KOTA', '2017-06-12 10:30:57', '2017-08-26 04:36:37', 1),
(2, 'Anuj kumar', NULL, '1002', NULL, 'anuj@gmail.co', 'Male', '1995-02-02', 4, 2021, NULL, '2017-08-19 19:18:28', '2017-08-26 04:59:17', 0),
(3, 'amit kumar', NULL, '1003', NULL, 'amit@gmail.com', 'Male', '2014-08-06', 6, 2021, NULL, '2017-08-28 18:45:31', '2017-08-28 18:46:02', 1),
(4, 'rahul kumar', NULL, '1004', NULL, 'rahul01@gmail.com', 'Male', '2001-02-03', 7, 2021, NULL, '2017-08-28 18:54:58', '2017-08-28 18:55:20', 1),
(5, 'sanjeev singh', NULL, '1005', NULL, 'sanjeev01@gmail.com', 'Male', '2002-02-03', 8, 2021, NULL, '2017-08-28 19:23:53', '2017-08-28 19:24:15', 1),
(6, 'Kuldeep Gupta', NULL, '1006', NULL, 'kuldeep@gmail.com', 'Male', '2001-11-11', 8, 2021, NULL, '2020-04-04 16:54:02', NULL, 1),
(7, 'Kuldeep Gupta', 'mahesh babu', '1007', '7727078990', 'kuldeep@hotmail.com', 'Male', '2008-03-02', 7, 2021, 'Housing Board Colony', '2020-04-04 18:14:21', NULL, 1),
(8, 'rajesh', 'rajiv', '8954', '6585697485', 'rajesh@gmail.com', 'Male', '2015-12-06', 4, 2021, 'Jhalawar', '2020-04-06 15:48:27', NULL, 1),
(9, 'hgrt', 'hgty', '7485', '8745874589', 'kjh@gmail.com', 'Male', '2001-02-02', 19, 2021, 'Ramganjmandi', '2020-04-06 18:04:46', NULL, 1),
(10, 'ghtty', 'hkhy', '8745', '9874589654', 'asd@gmail.com', 'Male', '2003-02-02', 13, 2021, 'jhalawar', '2020-04-06 18:40:26', NULL, 1),
(11, 'Sandhya ', 'Rajesh Kumar', '105', '6765432456', 'sandhya@gmail.com', 'Female', '2003-11-22', 17, 2122, 'Rajasthan', '2020-05-21 23:50:46', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjectcombination`
--

CREATE TABLE `tblsubjectcombination` (
  `id` int(11) NOT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `SubjectId` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Updationdate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubjectcombination`
--

INSERT INTO `tblsubjectcombination` (`id`, `ClassId`, `SubjectId`, `status`, `CreationDate`, `Updationdate`) VALUES
(1, 1, 1, 1, '2020-04-07 15:29:08', NULL),
(2, 1, 2, 1, '2020-04-07 15:29:19', NULL),
(3, 1, 4, 1, '2020-04-07 15:29:30', NULL),
(4, 1, 5, 1, '2020-04-07 15:29:41', NULL),
(5, 14, 7, 1, '2020-04-07 15:30:05', NULL),
(6, 17, 8, 1, '2020-04-07 15:30:17', NULL),
(7, 17, 1, 1, '2020-04-07 15:30:26', NULL),
(8, 17, 2, 1, '2020-04-07 15:30:37', NULL),
(9, 17, 9, 1, '2020-04-07 15:30:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjects`
--

CREATE TABLE `tblsubjects` (
  `id` int(11) NOT NULL,
  `SubjectName` varchar(100) NOT NULL,
  `SubjectCode` varchar(100) DEFAULT NULL,
  `Creationdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubjects`
--

INSERT INTO `tblsubjects` (`id`, `SubjectName`, `SubjectCode`, `Creationdate`, `UpdationDate`) VALUES
(1, 'Maths', 'MTH01', '2017-06-07 09:23:57', '2017-06-07 09:46:54'),
(2, 'English', 'ENG11', '2017-06-07 09:24:25', '0000-00-00 00:00:00'),
(4, 'Science', 'SC1', '2017-06-07 09:36:15', '0000-00-00 00:00:00'),
(5, 'Music', 'MS', '2017-06-07 09:36:23', '0000-00-00 00:00:00'),
(6, 'Social Studies', 'SS08', '2017-08-28 18:43:29', '2017-08-28 18:43:45'),
(7, 'Physics', 'PH03', '2017-08-28 18:52:41', '2017-08-28 18:52:55'),
(8, 'Chemistry', 'CH65', '2017-08-28 19:21:46', '2017-08-28 19:22:14'),
(9, 'Computer', 'COMP', '2020-04-07 05:02:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblteachers`
--

CREATE TABLE `tblteachers` (
  `TeacherId` int(11) NOT NULL,
  `TeacherName` varchar(50) NOT NULL,
  `Mobile` varchar(10) NOT NULL,
  `TeacherEmail` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Dob` date NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `Designation` varchar(50) NOT NULL,
  `Experience` varchar(10) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `RegisterDate` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblteachers`
--

INSERT INTO `tblteachers` (`TeacherId`, `TeacherName`, `Mobile`, `TeacherEmail`, `Gender`, `Dob`, `Subject`, `Designation`, `Experience`, `Address`, `RegisterDate`) VALUES
(1, 'Kuldeep Gupta', '7727078990', 'kuldeepgupta923@gmail.com', 'Male', '1994-11-18', '9', '3', '2', 'Housing Board Colony , Ramganjmandi ', '2020-04-07 05:04:32.790872');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photos`
--

CREATE TABLE `tbl_photos` (
  `img_id` int(11) NOT NULL,
  `img_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `img_path` varchar(255) CHARACTER SET latin1 NOT NULL,
  `img_type` varchar(255) CHARACTER SET latin1 NOT NULL,
  `img_title` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_swedish_ci;

--
-- Dumping data for table `tbl_photos`
--

INSERT INTO `tbl_photos` (`img_id`, `img_name`, `img_path`, `img_type`, `img_title`) VALUES
(19, 'a2.jpg', 'img/a2.jpg', 'image/jpeg', 'Captain America'),
(20, 'ironSpiderPopHeadArtwork.jpg', 'img/ironSpiderPopHeadArtwork.jpg', 'image/jpeg', 'Iron Spider-Man'),
(21, 'venom.jpg', 'img/venom.jpg', 'image/jpeg', 'Venom'),
(22, 'thanosnew.jpg', 'img/thanosnew.jpg', 'image/jpeg', 'Thanos'),
(24, 'thomyorkkk.jpg', 'img/thomyorkkk.jpg', 'image/jpeg', 'Thom Yorke'),
(26, 'thorgroot.jpg', 'img/thorgroot.jpg', 'image/jpeg', 'Thor, Groot & Rocket - Wakanda Scene'),
(27, 'drstrange.jpg', 'img/drstrange.jpg', 'image/jpeg', 'Doctor Strange'),
(28, 'bp-2.jpg', 'img/bp-2.jpg', 'image/jpeg', 'Black Panther'),
(29, '2.png', 'img/2.png', 'image/png', 'hello'),
(30, '1.png', 'img/1.png', 'image/png', 'One');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblclasses`
--
ALTER TABLE `tblclasses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblmessage`
--
ALTER TABLE `tblmessage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblnotification`
--
ALTER TABLE `tblnotification`
  ADD PRIMARY KEY (`NoticeId`);

--
-- Indexes for table `tblresult`
--
ALTER TABLE `tblresult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`StudentId`),
  ADD UNIQUE KEY `RollId` (`RollId`);

--
-- Indexes for table `tblsubjectcombination`
--
ALTER TABLE `tblsubjectcombination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblteachers`
--
ALTER TABLE `tblteachers`
  ADD PRIMARY KEY (`TeacherId`);

--
-- Indexes for table `tbl_photos`
--
ALTER TABLE `tbl_photos`
  ADD PRIMARY KEY (`img_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblclasses`
--
ALTER TABLE `tblclasses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tblmessage`
--
ALTER TABLE `tblmessage`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tblnotification`
--
ALTER TABLE `tblnotification`
  MODIFY `NoticeId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblresult`
--
ALTER TABLE `tblresult`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `StudentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblsubjectcombination`
--
ALTER TABLE `tblsubjectcombination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblteachers`
--
ALTER TABLE `tblteachers`
  MODIFY `TeacherId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_photos`
--
ALTER TABLE `tbl_photos`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
