-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 13, 2022 at 03:21 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ltweb4`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `adminID` int(11) NOT NULL AUTO_INCREMENT,
  `adminEmail` varchar(100) DEFAULT NULL,
  `adminpass` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminEmail`, `adminpass`) VALUES
(1, 'trungngoc123@gmail.com', '12345'),
(2, 'trungngoc124@gmail.com', '12345'),
(3, 'hongquocbinh@gmail.com', '123456'),
(6, 'binh.dh51803029@gmail.com', '123456'),
(7, 'binh.dh51803029@gmail.com', '123456'),
(8, 'boiNghi@gmail.com', '123456'),
(9, 'dh51803029@student.stu.edu.vn', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `contactID` int(11) NOT NULL AUTO_INCREMENT,
  `tenContacts` varchar(100) DEFAULT NULL,
  `noidungContacts` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`contactID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `FilmID` int(11) NOT NULL AUTO_INCREMENT,
  `tenchitietFilm` varchar(100) DEFAULT NULL,
  `mieuTaFilm` varchar(100) DEFAULT NULL,
  `anhFilm` varchar(300) DEFAULT NULL,
  `urlFilm` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`FilmID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`FilmID`, `tenchitietFilm`, `mieuTaFilm`, `anhFilm`, `urlFilm`) VALUES
(1, 'The Seven Deadly Sins Wrath of the Gods', 'not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan', 'The_Seven_Deadly_Sins-_Wrath_of_the_Gods.jpg', 'https://youtu.be/Sbnkz-F-UIc'),
(2, 'Gintama Movie 2: Kanketsu-hen - Yorozuya yo Eien', 'not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan', 'Gintama movie 2.jpg', 'https://youtu.be/o8tOPZOpmqA'),
(3, 'Shingeki no Kyojin Season 3 Part 2', 'ply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', 'Shingeki no Kyojin Season 3 Part 2.jpg', 'https://youtu.be/-ExEdhQpEtA'),
(4, 'Fullmetal Alchemist: Brotherhood', 'It is a long established fact that a reader will be distracted by the readable content of a page whe', 'futa.jpg', 'https://www.youtube.com/embed/8Pz5Rhq69NQ'),
(5, 'Shiratorizawa Gakuen Koukou', 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model tex', 'Shiratorizawa Gakuen Koukou.jpg', 'https://www.youtube.com/embed/tshIXol-9TA'),
(6, 'Code Geass: Hangyaku no Lelouch R2', 'ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classic', 'Code Geass.jpg', 'https://www.youtube.com/embed/KhOf6ANoxOU'),
(7, 'Kizumonogatari III: Reiket su-hen', 'Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from', 'Kizumonogatari III.jpg', 'https://www.youtube.com/embed/p0UwHB1e3nQ'),
(8, 'Shirogane Tamashii hen Kouhan sen', 'of type and scrambled it to make a type specimen book. It has survived not only five centuries, but ', 'Shirogane Tamashii.jpg', 'https://www.youtube.com/embed/Hcf5gqh3HPA'),
(14, 'Bá»‘ giÃ ', 'phim dien anh Viet ', 'bogia.jpg', 'https://www.youtube.com/embed/oA-BhGNK7qw');

-- --------------------------------------------------------

--
-- Table structure for table `qluser`
--

DROP TABLE IF EXISTS `qluser`;
CREATE TABLE IF NOT EXISTS `qluser` (
  `qluserID` int(11) NOT NULL AUTO_INCREMENT,
  `tenqluer` varchar(100) DEFAULT NULL,
  `emaiqluer` varchar(100) DEFAULT NULL,
  `passqluer` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`qluserID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qluser`
--

INSERT INTO `qluser` (`qluserID`, `tenqluer`, `emaiqluer`, `passqluer`) VALUES
(1, 'tâm trang', 'tamtrang123@gmail.com', '12345'),
(2, 'thích trang', 'thichtrang123@gmail.com', '12345'),
(3, 'ngọc tâm', 'ngoctram@gmail.com', '12345'),
(4, 'ngoc trung ', 'ngoctrung123@gmail.com', '12345'),
(5, 'ngoc trung', 'ngoctrung111@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userloginID` int(11) NOT NULL AUTO_INCREMENT,
  `usernamelogin` varchar(100) DEFAULT NULL,
  `userpasslogin` varchar(100) DEFAULT NULL,
  `usermail` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`userloginID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userloginID`, `usernamelogin`, `userpasslogin`, `usermail`) VALUES
(1, 'tranTrung', '123456', 'trung@gmail.com'),
(13, 'alulululul', 'e10adc3949ba59abbe56e057f20f883e', 'quoc3@gmail.com'),
(14, 'Quocbao', 'e10adc3949ba59abbe56e057f20f883e', 'quoc3@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
