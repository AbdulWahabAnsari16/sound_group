-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2024 at 03:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sound_group`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `a_email` text NOT NULL,
  `a_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_email`, `a_pass`) VALUES
(1, 'Abdul Wahab', 'abdulwahab@gmail.com', '@Abdul_Wahab@');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `alb_id` int(11) NOT NULL,
  `alb_name` varchar(255) NOT NULL,
  `art_id` int(11) NOT NULL,
  `alb_c_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`alb_id`, `alb_name`, `art_id`, `alb_c_img`) VALUES
(1, 'Aadat', 1, 'Atif_aslam_Album_cover.jpg'),
(2, 'Jhoom', 2, 'Ali_zafar_album_Cover.jpg'),
(3, 'Wajah tum ho', 3, 'Arijit_Singh_Album_cover.jpg'),
(4, 'Open Letter', 4, 'Talha_Anjum_Album_cover.jpg'),
(5, 'After Hours', 5, 'The_weeknd_alb_cover.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `art_id` int(11) NOT NULL,
  `art_name` varchar(100) NOT NULL,
  `art_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`art_id`, `art_name`, `art_img`) VALUES
(1, 'Atif Aslam', 'atif_aslam.jpg'),
(2, 'Ali Zafar', 'ali_zafar.jpg.jpg'),
(3, 'Arijit Singh', 'arijit_singh.jpg.jpg'),
(4, 'Talha Anjum', 'talha_anjum.jpg.jpg'),
(5, 'The Weeknd', 'the_weeknd.jpg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `forgotpass`
--

CREATE TABLE `forgotpass` (
  `u_id` int(11) NOT NULL,
  `u_email` text NOT NULL,
  `u_v_code` int(6) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `forgotpass`
--

INSERT INTO `forgotpass` (`u_id`, `u_email`, `u_v_code`, `created_at`) VALUES
(5, 'abdulwahabb11023@gmail.com', 121060, '2024-09-25 11:43:50'),
(6, 'abdulwahabb11023@gmail.com', 304343, '2024-09-25 11:51:18'),
(7, 'abdulwahabb11023@gmail.com', 479386, '2024-09-25 13:13:23'),
(8, 'abdulwahabb11023@gmail.com', 573984, '2024-09-25 13:20:37');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `gen_id` int(11) NOT NULL,
  `gen_name` varchar(50) NOT NULL,
  `art_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`gen_id`, `gen_name`, `art_id`) VALUES
(1, 'Classical', 1),
(2, 'Rock', 2),
(3, 'Pop', 3),
(4, 'Hip-Hop', 4),
(5, 'R&B', 5);

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `lang_id` int(11) NOT NULL,
  `lang_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`lang_id`, `lang_name`) VALUES
(1, 'Urdu'),
(2, 'English'),
(3, 'Hindi'),
(4, 'Punjabi');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `mus_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `art_id` int(11) NOT NULL,
  `year` varchar(50) NOT NULL,
  `gen_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `alb_id` int(11) DEFAULT NULL,
  `mus_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_email` text NOT NULL,
  `u_password` varchar(100) NOT NULL,
  `u_v_code` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_email`, `u_password`, `u_v_code`, `created_at`) VALUES
(1, 'Abdul Wahab', 'abdulwahabb11023@gmail.com', '$2y$10$ZNstNHMsmnlDRFfc0e9uxeZMJHOlcyRyUaLxOhkoqd.SXvG.ge6ke', '449557', '2024-09-25 11:22:45');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `vid_id` int(11) NOT NULL,
  `vid_title` varchar(255) NOT NULL,
  `art_id` int(11) NOT NULL,
  `year` varchar(50) NOT NULL,
  `gen_id` int(11) NOT NULL,
  `language` int(50) NOT NULL,
  `vid_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`alb_id`),
  ADD KEY `art_id` (`art_id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`art_id`);

--
-- Indexes for table `forgotpass`
--
ALTER TABLE `forgotpass`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`gen_id`),
  ADD KEY `art_id` (`art_id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`lang_id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`mus_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`vid_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `alb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `forgotpass`
--
ALTER TABLE `forgotpass`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `gen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `lang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `mus_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `vid_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`art_id`) REFERENCES `artist` (`art_id`);

--
-- Constraints for table `genre`
--
ALTER TABLE `genre`
  ADD CONSTRAINT `genre_ibfk_1` FOREIGN KEY (`art_id`) REFERENCES `artist` (`art_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
