-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2024 at 01:30 PM
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
(5, 'After Hours', 5, 'The_weeknd_alb_cover.jpg'),
(6, 'No Album', 6, '');

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
(5, 'The Weeknd', 'the_weeknd.jpg.jpg'),
(6, 'No Artist', 'abc');

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

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`mus_id`, `title`, `art_id`, `year`, `gen_id`, `lang_id`, `alb_id`, `mus_file`) VALUES
(1, 'Tere Bin', 1, '2010', 1, 1, 6, 'Atif Aslam 1_Tere Bin(MP3_160K).mp3'),
(2, 'Khair mangda', 1, '2011', 1, 4, 6, 'Atif Aslam 2_Khair mangda(MP3_160K).mp3'),
(3, 'Hona tha pyar', 1, '2008', 1, 1, 6, 'Atif Aslam 3_Hona tha pyar(MP3_160K).mp3'),
(4, 'Tajdar e haram\r\n', 1, '2015', 1, 1, 6, 'Atif Aslam 4_Tajdar e haram(MP3_160K).mp3'),
(5, 'Agey Dekh', 1, '2022', 1, 1, 6, 'Atif Aslam 5_Agey dekh(MP3_160K).mp3'),
(6, 'Larsha Pekhawar', 2, '2020', 2, 1, 6, 'Ali Zafar 1_Larsha pekhawar(MP3_160K).mp3'),
(7, 'Dil Se Jan Laga De', 2, '2015', 2, 1, 6, 'Ali Zafar 2_Dil SE Jan laga de(MP3_160K).mp3'),
(8, 'Main Nahi Hoon', 2, '2019', 2, 1, 6, 'Ali Zafar 3_main nahi hoon(MP3_160K).mp3'),
(9, 'Husn', 2, '2018', 2, 1, 6, 'Ali Zafar 4_Husn(MP3_160K).mp3'),
(10, 'Jhoom', 2, '2017', 2, 1, 6, 'Ali Zafar 5_Jhoom(MP3_160K).mp3'),
(11, 'Ve Kamleya', 3, '2023', 3, 3, 6, 'Arijit Singh 1_Ve kamleya(MP3_160K).mp3'),
(12, 'Tenu Khabar Nahi', 3, '2021', 3, 4, 6, 'Arijit Singh 2_Tenu Khabar nhi(MP3_160K).mp3'),
(13, 'Khariyat', 3, '2020', 3, 3, 6, 'Arijit Singh 3_Khariyat(MP3_160K).mp3'),
(14, 'Dil Sambhal Ja Zara', 3, '2017', 3, 3, 6, 'Arijit Singh 4_Dil sambhal ja zara(MP3_160K).mp3'),
(15, 'Hamdard', 3, '2016', 3, 3, 6, 'Arijit Singh 5_Hamdard(MP3_160K).mp3'),
(16, 'Agency', 4, '2022', 4, 1, 6, 'Agency_Talha_Anjum.mp3'),
(17, 'Downers At Dusk', 4, '2023', 4, 1, 6, 'Downers At Dusk - Talha Anjum.mp3'),
(18, 'Happy Hour', 4, '2023', 4, 1, 6, 'happy_hour_talha_anjum.mp3'),
(19, 'Kattar Karachi', 4, '2024', 4, 1, 6, 'Kattar_Karachi_Talha_Anjum.mp3'),
(20, 'Karachi Mera', 4, '2019', 4, 1, 6, 'Talha_Anjum_Karachi_Mera.mp3'),
(21, 'Starboy', 5, '2018', 5, 2, 6, 'The weekend 1_Starboy(MP3_160K).mp3'),
(22, 'Save Your Tears', 5, '2015', 5, 2, 6, 'The weekend 2 _Save your tears(MP3_160K).mp3'),
(23, 'Blinding Lights', 5, '2020', 5, 2, 6, 'The weekend 3_Blinding lights (MP3_160K).mp3'),
(24, 'Cant Feel My Face', 5, '2021', 5, 2, 6, 'The weekend 4_Can_t feel my face (MP3_160K).mp3'),
(25, 'Reminder', 5, '2023', 5, 2, 6, 'The weekend 5_Reminder(MP3_160K).mp3');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `rew_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `u_desc` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(1, 'Abdul Wahab', 'abdulwahabb11023@gmail.com', '$2y$10$EC4FW0xpVIZLL0zAb3FvWeo2KBjJJFtC2oltHhgb4aT87NWUuK/Nm', '096689', '2024-09-26 07:06:23');

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
  `lang_id` int(11) NOT NULL,
  `alb_id` int(11) DEFAULT NULL,
  `vid_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`vid_id`, `vid_title`, `art_id`, `year`, `gen_id`, `lang_id`, `alb_id`, `vid_file`) VALUES
(1, 'Tere Bin', 1, '2010', 1, 1, 6, 'Tere Bin_Atif Aslam.mp4\r\n'),
(2, 'Jhoom', 2, '2015', 2, 4, 2, 'Jhoom_Ali Zafar.mp4'),
(3, 'Ve Kamleya', 3, '2012', 3, 3, 3, 'Ve Kamleya_Arijit Singh.mp4'),
(4, 'Happy Hour', 4, '2018', 4, 1, 6, 'happy_hour_talha_anjum.mp4\r\n'),
(7, 'Starboy', 5, '2020', 5, 2, 6, 'Starboy_The Weeknd.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wish_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `mus_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
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
  ADD PRIMARY KEY (`mus_id`),
  ADD KEY `art_id` (`art_id`),
  ADD KEY `gen_id` (`gen_id`),
  ADD KEY `lang_id` (`lang_id`),
  ADD KEY `alb_id` (`alb_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`rew_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`vid_id`),
  ADD KEY `art_id` (`art_id`),
  ADD KEY `gen_id` (`gen_id`),
  ADD KEY `lang_id` (`lang_id`),
  ADD KEY `alb_id` (`alb_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wish_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `mus_id` (`mus_id`);

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
  MODIFY `alb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `forgotpass`
--
ALTER TABLE `forgotpass`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `mus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `rew_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `vid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wish_id` int(11) NOT NULL AUTO_INCREMENT;

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

--
-- Constraints for table `music`
--
ALTER TABLE `music`
  ADD CONSTRAINT `music_ibfk_1` FOREIGN KEY (`art_id`) REFERENCES `artist` (`art_id`),
  ADD CONSTRAINT `music_ibfk_2` FOREIGN KEY (`gen_id`) REFERENCES `genre` (`gen_id`),
  ADD CONSTRAINT `music_ibfk_3` FOREIGN KEY (`lang_id`) REFERENCES `language` (`lang_id`),
  ADD CONSTRAINT `music_ibfk_4` FOREIGN KEY (`alb_id`) REFERENCES `album` (`alb_id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`);

--
-- Constraints for table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`art_id`) REFERENCES `artist` (`art_id`),
  ADD CONSTRAINT `video_ibfk_2` FOREIGN KEY (`gen_id`) REFERENCES `genre` (`gen_id`),
  ADD CONSTRAINT `video_ibfk_3` FOREIGN KEY (`lang_id`) REFERENCES `language` (`lang_id`),
  ADD CONSTRAINT `video_ibfk_4` FOREIGN KEY (`alb_id`) REFERENCES `album` (`alb_id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`mus_id`) REFERENCES `music` (`mus_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
