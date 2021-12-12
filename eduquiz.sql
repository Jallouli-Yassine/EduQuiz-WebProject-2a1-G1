-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 04:59 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coursesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `idcomment` int(255) NOT NULL,
  `iduser` int(255) DEFAULT NULL,
  `nameuser` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `idpost` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`idcomment`, `iduser`, `nameuser`, `content`, `date`, `idpost`) VALUES
(22, 50, 'aefa', 'aefae', '2021-06-23', 21);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courseID` int(20) NOT NULL,
  `profID` int(20) NOT NULL,
  `title` varchar(500) NOT NULL,
  `price` double NOT NULL,
  `Descrip` varchar(3000) NOT NULL,
  `video_url` text NOT NULL,
  `vidExt` text NOT NULL,
  `picture_url` text NOT NULL,
  `categorie` varchar(150) NOT NULL,
  `etat` int(1) NOT NULL,
  `course_fav` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseID`, `profID`, `title`, `price`, `Descrip`, `video_url`, `vidExt`, `picture_url`, `categorie`, `etat`, `course_fav`) VALUES
(95, 2008, 'ds4200', 90, 'phot desc', '95.mp4', 'mp4', '95.jpg', 'photography', 1, 0),
(96, 2008, 'php', 70, 'php disc\r\n', '96.mkv', 'mkv', '96.jpg', 'programation', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `course_fav`
--

CREATE TABLE `course_fav` (
  `course_id` int(100) NOT NULL,
  `user_id` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_fav`
--

INSERT INTO `course_fav` (`course_id`, `user_id`) VALUES
(95, 2017),
(96, 2006),
(95, 2006),
(95, 2016);

-- --------------------------------------------------------

--
-- Table structure for table `formulaire`
--

CREATE TABLE `formulaire` (
  `id` int(10) NOT NULL,
  `idCourse` int(11) NOT NULL,
  `Titre` varchar(50) NOT NULL,
  `score` int(10) NOT NULL,
  `question` varchar(200) NOT NULL,
  `rep1` varchar(200) NOT NULL,
  `rep2` varchar(200) NOT NULL,
  `rep3` varchar(200) NOT NULL,
  `rep4` varchar(200) NOT NULL,
  `numcorrect` int(5) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formulaire`
--

INSERT INTO `formulaire` (`id`, `idCourse`, `Titre`, `score`, `question`, `rep1`, `rep2`, `rep3`, `rep4`, `numcorrect`, `image`) VALUES
(1, 5, 'math', 20, 'akwa mle3by fifa ?', 'big j', 'yassine', 'jallouli', 'jungloul1', 1, '253213593_569393194126467_4577451109815905481_n.jpg'),
(2, 5, 'math', 2, '4*3?', '4', '9', '12', '7', 3, 'ioyugo'),
(3, 9, 'prog', 60, 'html is ?', 'backend', 'front end', 'gaming language', 'mekla', 2, 'aef');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `idpost` int(255) NOT NULL,
  `iduser` int(255) DEFAULT NULL,
  `nameuser` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `imageurl` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`idpost`, `iduser`, `nameuser`, `content`, `title`, `date`, `imageurl`) VALUES
(19, 50, 'salma', 'post description', 'post', '2021-06-23', '19.png'),
(21, 50, 'salma', 'desc', 'htmp', '2021-06-23', '21.png');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `ID` int(100) NOT NULL,
  `first_Name` varchar(100) NOT NULL,
  `last_Name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `Date_Naissance` date NOT NULL,
  `role` varchar(50) NOT NULL,
  `bloqué` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`ID`, `first_Name`, `last_Name`, `email`, `pass`, `Date_Naissance`, `role`, `bloqué`) VALUES
(1, 'doj', 'abdelkefi', 'admin@gmail.com', '123456', '2001-09-26', 'admin', 0),
(2006, 'oumayma', 'jammoussi', 'user1@gmail.com', '123456', '2002-01-26', 'user', 0),
(2008, 'Khadija ', 'abdelkefiiiii', 'prof@gmail.com', '123456', '2021-12-15', 'prof', 0),
(2016, 'yassine', 'jallouli', 'user2@gmail.com', '123456', '2021-12-10', 'user', 0),
(2017, 'ali', 'ben ali', 'user3@gmail.com', '123456', '2021-12-21', 'user', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idcomment`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courseID`);

--
-- Indexes for table `formulaire`
--
ALTER TABLE `formulaire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`idpost`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `idcomment` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `courseID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `formulaire`
--
ALTER TABLE `formulaire`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `idpost` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2018;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
