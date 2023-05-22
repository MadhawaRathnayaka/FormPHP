-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 22, 2023 at 02:10 AM
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
-- Database: `fasdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `title` varchar(5) DEFAULT NULL,
  `firstname` varchar(40) DEFAULT NULL,
  `lastname` varchar(40) DEFAULT NULL,
  `reg_no` varchar(20) DEFAULT NULL,
  `index_no` int(11) NOT NULL AUTO_INCREMENT,
  `date_of_birth` timestamp NULL DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `course` varchar(20) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`title`, `firstname`, `lastname`, `reg_no`, `index_no`, `date_of_birth`, `email`, `course`, `address`) VALUES
('Mr', 'Dilshan', 'Karunarathne', '2019COM24', 1, '1999-12-24 18:30:00', 'maleeshasparrow@gmail.com', 'Computer Science', 'Nawalapitiya'),
('Mr', 'Kasun', 'Gunathilake', '2019PS50', 2, '1999-12-24 18:30:00', 'kasun@gmail.com', 'Physical Science', 'Batticola'),
('Mr', 'Sandun', 'Rathnayake', '2019SM20', 3, '1999-05-08 18:30:00', 'sandun@gmail.com', 'Siddha Medicine', 'Galle'),
('Mr', 'Achini', 'Rajapakshe', '2019PS96', 4, '1999-07-15 18:30:00', 'achi@gmail.com', 'Physical Science', 'Kandy'),
('Mr', 'Menuka', 'Senarathne', '2019COM47', 5, '1999-07-15 18:30:00', 'menu@gmail.com', 'Computer Science', 'Colombo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
