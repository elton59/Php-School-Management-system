-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2021 at 11:00 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `odhil`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('nancy@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(11) NOT NULL,
  `primary_1` date NOT NULL,
  `secondary_1` date NOT NULL,
  `primary_2` date NOT NULL,
  `secondary_2` date NOT NULL,
  `primary_3` date NOT NULL,
  `secondary_3` date NOT NULL,
  `reg_date` datetime(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `primary_1`, `secondary_1`, `primary_2`, `secondary_2`, `primary_3`, `secondary_3`, `reg_date`) VALUES
(1, '2020-06-10', '2020-06-11', '2020-06-05', '2020-06-16', '2020-06-18', '2020-06-16', '2020-06-28 11:13:09.122630'),
(2, '2020-07-07', '2020-07-09', '2020-11-09', '2020-11-11', '2021-02-14', '2021-03-02', '2020-07-12 15:16:15.211058'),
(3, '2020-10-08', '2020-10-13', '2020-11-24', '2020-12-01', '2021-01-01', '2021-01-13', '2020-10-08 15:31:57.404424'),
(4, '2020-10-14', '2020-10-15', '2020-10-16', '2020-10-17', '2020-10-19', '2020-10-20', '2020-10-14 16:29:10.057083'),
(5, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '2021-03-12 14:42:05.888580'),
(6, '2021-03-10', '2021-03-09', '2021-03-21', '2021-03-14', '2021-03-22', '2021-03-31', '2021-03-12 15:00:52.110508'),
(7, '2021-03-10', '2021-03-09', '2021-03-21', '2021-03-14', '2021-03-22', '2021-03-31', '2021-03-12 15:04:02.672007');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `id_number` int(11) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `reg_date` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `id_number`, `feedback`, `reg_date`) VALUES
(1, 34776655, '0.', '2020-07-08 23:08:29.186173'),
(2, 34776655, '0', '2020-07-08 23:10:05.157874'),
(3, 123456, '0', '2020-07-13 16:24:44.878377'),
(4, 8, '0', '2020-07-13 16:51:55.870819'),
(5, 23456789, '0', '2020-07-29 18:10:26.757663'),
(6, 23456789, '0', '2020-07-29 18:24:22.132345'),
(7, 35952655, '0', '2020-07-29 21:41:23.901433'),
(8, 23456789, '0', '2020-07-29 21:49:01.764763'),
(9, 42994338, 'glad to know so', '2020-07-29 22:05:27.368744'),
(10, 34776654, 'yo', '2020-08-09 15:27:25.214787'),
(11, 35952655, '', '2020-10-09 10:56:03.599869'),
(12, 0, '', '2020-10-09 11:17:41.361279'),
(13, 1234567890, '', '2020-10-11 15:56:15.336302'),
(14, 35952655, '', '2020-10-11 16:26:42.185818');

-- --------------------------------------------------------

--
-- Table structure for table `finance`
--

CREATE TABLE `finance` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('approved','pending','rejected') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finance`
--

INSERT INTO `finance` (`id`, `FirstName`, `LastName`, `email`, `password`, `status`) VALUES
(1, 'ada', 'lovelace', 'ada@gmail.com', '12345', 'pending'),
(2, 'finace', 'officer', 'financeofficer@gmail.com', '123456', 'approved'),
(4, 'testing', 'testing', 'testing@gmail.com', 'teting', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `fundding`
--

CREATE TABLE `fundding` (
  `id` int(11) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `project_name` varchar(30) NOT NULL,
  `amount` int(6) NOT NULL,
  `description` varchar(255) NOT NULL,
  `project_name1` varchar(30) NOT NULL,
  `amount1` int(6) NOT NULL,
  `description1` varchar(255) NOT NULL,
  `project_name2` varchar(30) NOT NULL,
  `amount2` int(6) NOT NULL,
  `description2` varchar(255) NOT NULL,
  `status` enum('pending','received','approved','rejected','disbursed') NOT NULL DEFAULT 'pending',
  `reg_date` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fundding`
--

INSERT INTO `fundding` (`id`, `school_name`, `project_name`, `amount`, `description`, `project_name1`, `amount1`, `description1`, `project_name2`, `amount2`, `description2`, `status`, `reg_date`) VALUES
(1, '34776655', 'sdfghkjhgfd', 4000, 'remarks', 'dewrgetrhytjkkhgf', 56747, 'eeeeeet', 'wertyuuk', 325, 'sdfdf', 'pending', '2020-06-29 22:41:43.557281'),
(2, '0', 'Hshsh', 56866466, 'Gwhshhe', 'S7gs78aviv', 5648, 'Ahwjusjw', 'Viacisusc', 43843, '7a7cw8wv8v', 'disbursed', '2020-07-08 12:38:10.858987'),
(3, '8', 'simenya water project', 20000, 'to provide clean water for students use', 'sanitary program and girl chil', 50000, 'to provide sanitary towels monthly to girls in school and start a counselling program', '', 0, '', 'rejected', '2020-07-13 14:27:45.800802'),
(4, '12345', 'Agyw', 10000, 'For adolescent girls and young women', 'Agywee', 150000, 'Jshhshsh', 'Dafsvsh', 450000, 'Udhjjd', 'approved', '2020-10-12 17:05:36.809452'),
(5, '0', 'agyw', 10000, 'for adolescent girls and young womwn', 'agyw', 10000, 'young girls and women', 'agyw', 20000, 'adolescrnt young women and girls', 'pending', '2020-10-15 18:00:32.708847'),
(6, '1', 'ghghg', 300000, 'ftyftdhgfht', 'fdgv', 20000, 'ytyrygh', 'ffjhgjkh', 10000, 'tytrytu', 'pending', '2020-10-15 18:01:53.895582'),
(7, '2', 'simba', 1111, 'lower primary sos', 'twiga', 1111, 'upper primary sos', 'punda_milia', 222, 'conclusive', 'pending', '2020-12-06 00:50:38.874409'),
(8, '1', '11', 334, '333', '123', 234, '222', '123', 434, '123', 'pending', '2021-01-21 14:48:19.273297'),
(9, '', 'a', 2, 'a', 'g', 7, 'g', 'g', 8, 'g', 'pending', '2021-03-12 12:58:58.050774'),
(10, '', 'a', 2, 'a', 'g', 7, 'g', 'g', 8, 'g', 'pending', '2021-03-12 13:01:46.991712'),
(11, '', 'a', 2, 'a', 'g', 7, 'g', 'g', 8, 'g', 'pending', '2021-03-12 13:02:00.209233'),
(12, 'a', 'a', 2, 'a', 'g', 7, 'g', 'g', 8, 'g', 'pending', '2021-03-12 13:05:38.522500'),
(13, 'a', 'a', 2, 'a', 'g', 7, 'g', 'g', 8, 'g', 'pending', '2021-03-12 13:05:44.241620'),
(14, '', 'a', 2, 'a', 'g', 7, 'g', 'g', 8, 'g', 'pending', '2021-03-12 13:05:59.480249'),
(15, 'g', 'Madungu Secondary Sch', 0, '2', 'a', 0, '7', 'g', 0, '8', 'pending', '2021-03-12 13:10:59.453840'),
(16, 'Simenya Secondary', '2', 2, 'D', 'SD', 2, 'K', 'J', 7, 'J', 'pending', '2021-03-12 13:17:30.459243'),
(17, 'Ugunja primary school', 'a', 2, 'F', 'W', 4, 'C', 'W', 3, 'F', 'pending', '2021-03-12 13:19:45.690015'),
(18, 'Simenya Secondary', 'a', 2, 'F', 'W', 4, 'C', 'W', 3, 'F', 'pending', '2021-03-12 13:20:10.630507'),
(19, 'St. Francis Rangala Girls Secondary', 'a`', 2, 'h', 'h', 2, 'h', 'f', 2, '3', 'pending', '2021-03-12 13:27:57.652128'),
(20, 'Rangala Boys Secondary', 'a`', 2, 'h', 'h', 2, 'h', 'f', 2, '3', 'pending', '2021-03-12 13:28:06.694768'),
(21, 'Simenya Secondary', 'a`', 2, 'h', 'h', 2, 'h', 'f', 2, '3', 'pending', '2021-03-12 13:28:12.914008'),
(22, 'St. Pauls Sigomre Secondary Sch', 'a`', 2, 'h', 'h', 2, 'h', 'f', 2, '3', 'pending', '2021-03-12 13:28:19.828527'),
(23, 'St. Francis Rangala Girls Secondary', 'q', 4, 'g', 'g', 5, 'g', 'f', 7, 'h', 'pending', '2021-03-12 13:35:45.779630'),
(24, 'Simenya Secondary', 'a', 17, 'KK', 'A', 12, 'KK', 'A', 22, 'dd', 'approved', '2021-03-12 19:55:41.908705');

-- --------------------------------------------------------

--
-- Table structure for table `funds`
--

CREATE TABLE `funds` (
  `id` int(11) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `code` int(11) NOT NULL,
  `student` int(6) NOT NULL,
  `amount` int(6) NOT NULL,
  `reg_date` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `status` enum('approved','pending','received','disbursed') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `funds`
--

INSERT INTO `funds` (`id`, `school_name`, `code`, `student`, `amount`, `reg_date`, `status`) VALUES
(1, '', 1234, 1234, 2345, '2021-03-11 17:59:09.090471', 'approved'),
(2, '39515', 123, 3456, 0, '2021-03-11 18:01:31.201384', 'received'),
(3, '39515', 123, 3456, 0, '2021-03-11 18:02:34.568306', 'received'),
(4, '', 39515, 123, 3456, '2021-03-11 18:04:11.511218', 'approved'),
(5, 'Dendyo primary school', 39515, 123, 3456, '2021-03-11 18:04:54.870750', 'approved'),
(6, 'Ambira primary school', 39515, 111, 111, '2021-03-12 19:50:50.494921', 'received');

-- --------------------------------------------------------

--
-- Table structure for table `head`
--

CREATE TABLE `head` (
  `Ca_Id` int(6) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email_address` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `A_Id` int(11) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `head`
--

INSERT INTO `head` (`Ca_Id`, `first_name`, `last_name`, `email_address`, `reg_date`, `A_Id`, `username`, `password`, `status`) VALUES
(1, 'John', 'Maina', 'mainajohn@gmail.com', '2020-05-04 09:32:56', NULL, 'Maina', 'Johnmaina', 'approved'),
(2, 'Fidhelis ', 'Masinzi', 'masinzifidhelis@gmail.com', '2020-05-04 11:41:46', NULL, 'Fide', 'Fidefidefide ', 'approved'),
(3, 'cosmos', 'Obora', 'oboracosmos@gmail.com', '2020-10-08 11:52:01', NULL, 'cosmos', '234567890', 'approved'),
(4, 'Nancy ', 'Anyango', 'nancyanyango98@gmail.com', '2020-10-08 11:51:32', NULL, 'Odhilanyango', '0759899031', 'approved'),
(5, 'Jackline', 'Akinyi', 'akinyi98@gmail.com', '2020-10-08 11:53:15', NULL, 'Odhiambo', '0725859870', 'approved'),
(6, 'jesicah', 'maxmilan', 'maxi@gmail.com', '2020-10-08 12:22:12', NULL, 'maximil', '0726275360', 'approved'),
(7, 'felix', 'oduor', 'oduor90@gmail.com', '2020-10-08 12:22:35', NULL, 'felixoduor', '0726275360', 'approved'),
(8, 'Fides', 'anyango', 'anyango@gmail.com', '2020-10-08 11:52:25', NULL, 'anyango', '0726275360', 'approved'),
(9, 'kendrik', 'lamar', 'lamar@gmail.com', '2020-08-03 19:24:31', NULL, 'evansio', 'evansio12345', 'approved'),
(10, 'cosmos', 'obora', 'oboracosmos@gmail.com', '2020-09-09 13:11:00', NULL, 'cossy', '123456789', 'approved'),
(11, 'Nancy', 'Anyango', 'nancyanyango@gmail.com', '2020-10-09 17:54:31', NULL, 'Nancy', '12345', 'approved'),
(12, 'Girl', 'Girl', 'nancyanyango@gmail.com', '2020-10-11 12:59:20', NULL, 'Girl', '12345', 'approved'),
(14, 'nancy', 'odhiambo', 'nancyodhiambo@gmail.com', '2020-10-15 15:21:04', NULL, 'nancy', '0726275360', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `headteacher`
--

CREATE TABLE `headteacher` (
  `id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `SchoolName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('approved','rejected','pending','') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `headteacher`
--

INSERT INTO `headteacher` (`id`, `email`, `FirstName`, `LastName`, `SchoolName`, `password`, `status`) VALUES
(1, 'test@gmail.com', 'test', 'test', 'rangala boys', '12345', 'pending'),
(2, 'test2@gmail.com', 'test2', 'test2', 'test2', '45678', 'approved'),
(3, 'testing@gmail', 'testing', 'testing', 'testing', 'testing', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `id_number` int(11) NOT NULL,
  `notice` varchar(255) NOT NULL,
  `reg_date` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `id_number`, `notice`, `reg_date`) VALUES
(1, 34776655, '', '2020-07-08 22:53:43.419517'),
(2, 34776655, '', '2020-07-08 22:54:26.507661'),
(3, 34776655, 'hey', '2020-07-08 22:54:35.246222'),
(4, 34776655, '', '2020-07-08 23:06:16.422492'),
(5, 1234567890, 'we need to meet', '2020-07-29 17:59:57.502523'),
(6, 35952655, 'hey i need to talk to you', '2020-07-29 21:28:07.060670'),
(7, 42994338, 'the school is well', '2020-07-29 22:03:03.561458'),
(8, 98765, 'i wish to know the services available', '2020-09-09 16:24:00.233028'),
(9, 35952655, 'good morning', '2020-10-11 16:24:26.095224'),
(10, 12345, 'When are we meeting', '2020-10-12 16:38:11.414993'),
(11, 12345, 'Hello results are available ', '2020-10-12 16:43:22.969291');

-- --------------------------------------------------------

--
-- Table structure for table `qrofficer`
--

CREATE TABLE `qrofficer` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('approved','pending','rejected') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qrofficer`
--

INSERT INTO `qrofficer` (`id`, `FirstName`, `LastName`, `email`, `password`, `status`) VALUES
(3, 'garfield', 'cat', 'cat@gmail.com', '12345', 'pending'),
(1, 'John', 'Jenu', 'JenuJohn@gmail.com', '123456', 'approved'),
(2, 'mozart', 'mozart', 'mozart@gmail.com', '12345', 'pending'),
(4, 'testing', 'testing', 'testing@gmail.com', 'testing', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `quality`
--

CREATE TABLE `quality` (
  `id` int(11) NOT NULL,
  `school_name` varchar(50) NOT NULL DEFAULT 'abc',
  `accounts` varchar(6) NOT NULL,
  `Accounts_reason` varchar(50) NOT NULL,
  `welfare` varchar(6) NOT NULL,
  `welfare_reason` varchar(50) NOT NULL,
  `value` varchar(6) NOT NULL,
  `value_reason` varchar(50) NOT NULL,
  `special` varchar(6) NOT NULL,
  `special_reason` varchar(50) NOT NULL,
  `adopted` varchar(6) NOT NULL,
  `adopted_reason` varchar(50) NOT NULL,
  `standards` varchar(6) NOT NULL,
  `standard_reason` varchar(50) NOT NULL,
  `professionality` varchar(6) NOT NULL,
  `professionality_reason` varchar(50) NOT NULL,
  `resources` varchar(6) NOT NULL,
  `resources_reason` varchar(50) NOT NULL,
  `management` varchar(6) NOT NULL,
  `management_reason` varchar(50) NOT NULL,
  `competence` varchar(6) NOT NULL,
  `competence_reason` varchar(50) NOT NULL,
  `training` varchar(6) NOT NULL,
  `training_reason` varchar(50) NOT NULL,
  `reg_date` date NOT NULL,
  `status` enum('pending','rejected','received') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quality`
--

INSERT INTO `quality` (`id`, `school_name`, `accounts`, `Accounts_reason`, `welfare`, `welfare_reason`, `value`, `value_reason`, `special`, `special_reason`, `adopted`, `adopted_reason`, `standards`, `standard_reason`, `professionality`, `professionality_reason`, `resources`, `resources_reason`, `management`, `management_reason`, `competence`, `competence_reason`, `training`, `training_reason`, `reg_date`, `status`) VALUES
(2, '', 'Good', '', 'Poor', '', 'Better', '', 'Good', '', 'Poor', '', 'Good', '', 'Better', '', 'Good', '', 'Better', '', 'Good', '', 'Good', '', '0000-00-00', 'received'),
(3, '', 'Better', '', 'Good', '', 'Poor', '', 'Good', '', 'Good', '', 'Better', '', 'Good', '', 'Better', '', 'Better', '', 'Better', '', 'Better', '', '0000-00-00', 'received'),
(4, '', 'Better', '', 'Good', '', 'Poor', '', 'Good', '', 'Good', '', 'Better', '', 'Good', '', 'Better', '', 'Better', '', 'Better', '', 'Better', '', '0000-00-00', 'received'),
(6, '', 'Better', '', 'Good', '', 'Better', '', 'Good', '', 'Better', '', 'Better', '', 'Good', '', 'Good', '', 'Better', '', 'Better', '', 'Better', '', '0000-00-00', 'received'),
(7, '', 'Better', 'maintain', 'Better', 'welfare', 'Better', 'value', 'Better', 'special', 'Better', 'adpotcirrc', 'Better', 'standard', 'Better', 'professionality', 'Better', 'facility resource', 'Better', 'admin cir man', 'Better', 'man and comp', 'Better', 'professional reainif', '2020-12-28', 'received'),
(8, 'abc', 'Better', 'abcd', 'Better', 'efc', 'Better', 'qer', 'Good', 'qwe', 'Better', 'oop', 'Better', 'yhj', 'Better', 'jio', 'Better', 'jyi', 'Better', 'ouu', 'Better', 'hyu', 'Better', 'gghh', '2020-12-30', 'received'),
(9, 'abc', 'Better', 'a', 'Good', 'b', 'Good', 'v', 'Better', 'b', 'Better', 'l', 'Better', 'o', 'Better', 'd', 'Better', 'y', 'Better', 'mk', 'Better', 'k', 'Better', 'o', '2021-01-19', 'received'),
(10, 'abc', 'Better', 'j', 'Better', 'j', 'Better', 'j', 'Better', 'l', 'Better', 'k', 'Better', 'w', 'Better', 'k', 'Better', 'k', 'Better', 'k', 'Better', 'k', 'Better', 'k', '2021-03-03', 'received'),
(11, 'abc', 'Better', 'j', 'Better', 'j', 'Better', 'j', 'Better', 'l', 'Better', 'k', 'Better', 'w', 'Better', 'k', 'Better', 'k', 'Better', 'k', 'Better', 'k', 'Better', 'k', '2021-03-03', 'pending'),
(12, 'abc', 'Better', 'j', 'Better', 'j', 'Better', 'j', 'Better', 'l', 'Better', 'k', 'Better', 'w', 'Better', 'k', 'Better', 'k', 'Better', 'k', 'Better', 'k', 'Better', 'k', '2021-03-03', 'pending'),
(13, 'abc', 'Better', 'i', 'Better', 'i', 'Better', 'j', 'Better', 'j', 'Better', 'j', 'Better', 'j', 'Better', 'j', 'Better', 'j', 'Better', 'j', 'Better', 'j', 'Better', 'j', '2021-03-16', 'pending'),
(14, '', 'Better', 'i', 'Better', 'i', 'Better', 'j', 'Better', 'j', 'Better', 'j', 'Better', 'j', 'Better', 'j', 'Better', 'j', 'Better', 'j', 'Better', 'j', 'Better', 'j', '2021-03-16', 'pending'),
(15, 'St. Francis Rangala Girls Secondary', 'Better', 'k', 'Better', 'o', 'Better', 'o', 'Better', 'l', 'Better', 'i', 'Better', 'i', 'Better', 'j', 'Better', 'j', 'Better', 'k', 'Better', 'k', 'Better', 'k', '2021-03-16', 'received'),
(16, '', 'Better', 'j', 'Better', 'g', 'Better', 'q', 'Better', 'q', 'Better', '1', 'Better', 'e', 'Better', 'e', 'Better', 'e', 'Better', 'r', 'Better', 'f', 'Better', 'd', '2021-03-31', 'pending'),
(17, '', 'Better', 'j', 'Better', 'g', 'Better', 'q', 'Better', 'q', 'Better', '1', 'Better', 'e', 'Better', 'e', 'Better', 'e', 'Better', 'r', 'Better', 'f', 'Better', 'd', '2021-03-31', 'pending'),
(18, '', 'Better', 'j', 'Better', 'g', 'Better', 'q', 'Better', 'q', 'Better', '1', 'Better', 'e', 'Better', 'e', 'Better', 'e', 'Better', 'r', 'Better', 'f', 'Better', 'd', '2021-03-31', 'pending'),
(19, '', 'Better', 'j', 'Better', 'g', 'Better', 'q', 'Better', 'q', 'Better', '1', 'Better', 'e', 'Better', 'e', 'Better', 'e', 'Better', 'r', 'Better', 'f', 'Better', 'd', '2021-03-31', 'pending'),
(20, '', 'Better', 'j', 'Better', 'g', 'Better', 'q', 'Better', 'q', 'Better', '1', 'Better', 'e', 'Better', 'e', 'Better', 'e', 'Better', 'r', 'Better', 'f', 'Better', 'd', '2021-03-31', 'pending'),
(21, '', 'Better', 'j', 'Better', 'g', 'Better', 'q', 'Better', 'q', 'Better', '1', 'Better', 'e', 'Better', 'e', 'Better', 'e', 'Better', 'r', 'Better', 'f', 'Better', 'd', '2021-03-31', 'pending'),
(22, '', 'Better', 'j', 'Better', 'g', 'Better', 'q', 'Better', 'q', 'Better', '1', 'Better', 'e', 'Better', 'e', 'Better', 'e', 'Better', 'r', 'Better', 'f', 'Better', 'd', '2021-03-31', 'pending'),
(23, '', 'Better', 'j', 'Better', 'g', 'Better', 'q', 'Better', 'q', 'Better', '1', 'Better', 'e', 'Better', 'e', 'Better', 'e', 'Better', 'r', 'Better', 'f', 'Better', 'd', '2021-03-31', 'pending'),
(24, '', 'Better', 'j', 'Better', 'g', 'Better', 'q', 'Better', 'q', 'Better', '1', 'Better', 'e', 'Better', 'e', 'Better', 'e', 'Better', 'r', 'Better', 'f', 'Better', 'd', '2021-03-31', 'pending'),
(25, '', 'Better', 'j', 'Better', 'g', 'Better', 'q', 'Better', 'q', 'Better', '1', 'Better', 'e', 'Better', 'e', 'Better', 'e', 'Better', 'r', 'Better', 'f', 'Better', 'd', '2021-03-31', 'pending'),
(26, '', 'Better', 'j', 'Better', 'g', 'Better', 'q', 'Better', 'q', 'Better', '1', 'Better', 'e', 'Better', 'e', 'Better', 'e', 'Better', 'r', 'Better', 'f', 'Better', 'd', '2021-03-31', 'pending'),
(27, '', 'Better', 'a', 'Better', 'd', 'Better', 'h', 'Better', 'e', 'Better', 'w', 'Better', 'e', 'Better', 'e', 'Better', 'i', 'Better', 'i', 'Better', 'i', 'Better', 'j', '2021-03-15', 'pending'),
(28, '', 'Better', 'a', 'Better', 'd', 'Better', 'h', 'Better', 'e', 'Better', 'w', 'Better', 'e', 'Better', 'e', 'Better', 'i', 'Better', 'i', 'Better', 'i', 'Better', 'j', '2021-03-15', 'pending'),
(29, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 'pending'),
(30, 'St. Francis Rangala Girls Secondary', 'Better', 'h', 'Better', 'g', 'Better', 't', 'Better', 'g', 'Better', 'n', 'Better', 'n', 'Better', 'n', 'Better', 'n', 'Better', 'j', 'Better', 'j', 'Better', 'j', '2021-03-02', 'received');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `students` int(30) NOT NULL,
  `special` int(6) NOT NULL,
  `books` int(6) NOT NULL,
  `AOB` varchar(255) NOT NULL,
  `reg_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `status` enum('pending','approved','received','rejected','disbursed') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `school_name`, `students`, `special`, `books`, `AOB`, `reg_date`, `status`) VALUES
(1, '2147483647', 0, 0, 0, '', '2020-06-29 20:01:16.457546', 'pending'),
(2, '34776655', 35, 66, 66, 'AOB6fg', '2021-03-12 13:25:22.207015', 'disbursed'),
(3, '8', 491, 4, 8, 'AOB braille', '2020-07-13 10:53:24.781954', 'pending'),
(4, '123', 400, 5, 10, 'special academic talk for the special students', '2021-02-02 16:07:20.343441', 'approved'),
(5, '123', 400, 5, 10, 'special academic talk for the special students', '2021-02-09 11:59:46.152414', 'approved'),
(6, '2', 2883, 3, 4, 'AOBTHTJYIKL', '2020-10-16 14:52:07.820168', 'pending'),
(7, '1', 2, 3, 3, 'AOB', '2021-02-01 20:58:03.861406', 'pending'),
(8, '1', 2, 3, 3, 'AOB', '2021-02-01 20:58:11.559909', 'pending'),
(9, '0', 333, 777, 777, 'ss', '2021-03-12 11:06:50.397064', 'pending'),
(10, '', 333, 777, 777, 'ss', '2021-03-12 11:09:33.910151', 'pending'),
(11, '', 333, 777, 777, 'ss', '2021-03-12 11:10:13.592006', 'pending'),
(12, '', 333, 777, 777, 'ss', '2021-03-12 11:12:25.020234', 'pending'),
(13, '', 333, 777, 777, 'ss', '2021-03-12 11:12:29.293840', 'pending'),
(14, '', 333, 777, 777, 'ss', '2021-03-12 11:13:06.899038', 'pending'),
(15, '', 333, 777, 777, 'ss', '2021-03-12 11:14:11.607765', 'pending'),
(16, '', 0, 0, 0, '', '2021-03-12 11:14:31.454311', 'pending'),
(17, '', 0, 0, 0, '', '2021-03-12 11:16:20.825162', 'pending'),
(18, 'St. Francis Rangala Girls Secondary', 88, 88, 88, 'd', '2021-03-12 11:16:33.567786', 'pending'),
(19, '', 0, 0, 0, '', '2021-03-12 11:16:37.165899', 'pending'),
(20, '', 0, 0, 0, '', '2021-03-12 11:16:48.168870', 'pending'),
(21, '', 0, 0, 0, '', '2021-03-12 11:27:07.487290', 'pending'),
(22, '', 0, 0, 0, '', '2021-03-12 11:27:35.333560', 'pending'),
(23, '', 0, 0, 0, '', '2021-03-12 11:28:18.119634', 'pending'),
(24, '', 0, 0, 0, '', '2021-03-12 11:28:32.287475', 'pending'),
(25, 'Rangala Boys Secondary', 7, 7, 7, 's', '2021-03-12 11:32:46.243909', 'pending'),
(26, 'Rangala Boys Secondary', 7, 7, 7, 's', '2021-03-12 11:33:28.703826', 'pending'),
(27, 'Rangala Boys Secondary', 11, 11, 11, 'ghfd', '2021-03-12 16:59:33.423487', 'received');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` int(11) NOT NULL,
  `exercise` int(30) NOT NULL,
  `textu` int(30) NOT NULL,
  `pens` int(30) NOT NULL,
  `pencil` int(30) NOT NULL,
  `calculators` int(6) NOT NULL,
  `level` enum('primary','secondary') NOT NULL,
  `reg_date` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `status` enum('pending','approved','received','rejected') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `exercise`, `textu`, `pens`, `pencil`, `calculators`, `level`, `reg_date`, `status`) VALUES
(1, 0, 0, 0, 0, 55, 'primary', '2020-06-28 17:28:26.586832', 'pending'),
(2, 0, 0, 0, 0, 55, 'primary', '2020-06-28 17:31:20.050718', 'approved'),
(3, 0, 0, 0, 0, 3, 'primary', '2020-10-12 16:48:37.270744', 'rejected'),
(4, 0, 0, 0, 0, 3, 'primary', '2020-10-12 16:49:05.270630', 'pending'),
(5, 0, 0, 0, 0, 2, 'primary', '2020-10-16 17:49:10.008522', 'pending'),
(6, 0, 0, 0, 0, 2, 'primary', '2020-10-16 17:49:21.158206', 'pending'),
(7, 1, 1, 1, 1, 1, 'primary', '2020-12-05 22:24:35.562711', 'pending'),
(8, 11, 1, 1, 1, 1, 'primary', '2020-12-06 21:35:32.081447', 'pending'),
(9, 11, 1, 1, 1, 1, 'primary', '2020-12-06 21:47:28.499959', 'pending'),
(10, 1, 11, 1, 1, 1, 'primary', '2021-01-15 20:45:35.333570', 'pending'),
(11, 1, 1, 1, 1, 1, 'primary', '2021-03-11 17:22:45.675331', 'pending'),
(12, 33, 34, 345, 345, 345, '', '2021-03-11 18:16:54.969692', 'pending'),
(13, 33, 34, 345, 345, 345, 'secondary', '2021-03-11 18:17:44.792123', 'pending'),
(14, 22, 2222, 22, 22, 2, 'secondary', '2021-03-12 19:47:06.684998', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `date_1` date NOT NULL,
  `date_2` date NOT NULL,
  `venue_1` varchar(30) NOT NULL,
  `date_2_1` date NOT NULL,
  `date_2_2` date NOT NULL,
  `venue_2` varchar(30) NOT NULL,
  `date_3_1` date NOT NULL,
  `date_3_2` date NOT NULL,
  `venue_3` varchar(30) NOT NULL,
  `reg_date` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `level` enum('primaryschoolgames','secondaryschoolgames') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `date_1`, `date_2`, `venue_1`, `date_2_1`, `date_2_2`, `venue_2`, `date_3_1`, `date_3_2`, `venue_3`, `reg_date`, `level`) VALUES
(26, '2021-03-09', '2021-03-23', 'r', '2021-03-15', '2021-03-18', 'r', '2021-03-02', '2021-03-16', 'r', '2021-03-12 19:39:50.279528', 'primaryschoolgames'),
(27, '2021-03-06', '2021-03-11', 'kasa', '2021-03-10', '2021-03-19', 'kasa', '2021-03-09', '2021-03-19', 'kasac', '2021-03-15 00:15:39.625711', 'primaryschoolgames');

-- --------------------------------------------------------

--
-- Table structure for table `schools info`
--

CREATE TABLE `schools info` (
  `school_id` int(50) DEFAULT NULL,
  `School_name` varchar(50) NOT NULL,
  `number_of_students` int(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `number_of_teachers` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Ca_Id` int(6) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email_address` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `A_Id` int(11) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Ca_Id`, `first_name`, `last_name`, `email_address`, `reg_date`, `A_Id`, `username`, `password`, `status`) VALUES
(1, 'John', 'Maina', 'mainajohn@gmail.com', '2020-05-04 09:32:56', NULL, 'Maina', 'Johnmaina', 'approved'),
(2, 'Fidhelis ', 'Masinzi', 'masinzifidhelis@gmail.com', '2020-05-04 11:41:46', NULL, 'Fide', 'Fidefidefide ', 'approved'),
(3, 'john', 'tsuma', 'oboracosmos@gmail.com', '2020-10-11 19:00:24', NULL, 'kimbo', '2345ertd', 'approved'),
(4, 'Tonny', 'Nyadyndo', 'nyadundotony@gmail.com', '2020-10-11 19:00:11', NULL, 'Tonynya', 'teyeywuuw', 'approved'),
(5, 'nancy', 'anyango', 'nancy@gmail.com', '2020-10-11 19:00:30', NULL, 'nancy', '0726275360', 'approved'),
(6, 'rahab', 'rahab', 'oboracosmos@gmail.com', '2020-10-11 19:00:50', NULL, 'rahab1', '12345', 'approved'),
(7, 'nancy', 'nancy', 'nancyanyango@gmail.com', '2020-10-11 19:01:23', NULL, 'nancy', '12345', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `file` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `file`) VALUES
(1, 0x72656163746a735f7475746f7269616c2e706466),
(2, 0x72656163746a735f7475746f7269616c2e706466),
(11, 0x72656163746a735f7475746f7269616c2e706466),
(456, 0x666c61672d6b656e79615f313430312d3134352e6a7067),
(1111, 0x72656163746a735f7475746f7269616c2e706466);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finance`
--
ALTER TABLE `finance`
  ADD PRIMARY KEY (`FirstName`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `fundding`
--
ALTER TABLE `fundding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funds`
--
ALTER TABLE `funds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `head`
--
ALTER TABLE `head`
  ADD PRIMARY KEY (`Ca_Id`),
  ADD KEY `A_Id` (`A_Id`);

--
-- Indexes for table `headteacher`
--
ALTER TABLE `headteacher`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qrofficer`
--
ALTER TABLE `qrofficer`
  ADD PRIMARY KEY (`FirstName`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `quality`
--
ALTER TABLE `quality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Ca_Id`),
  ADD KEY `A_Id` (`A_Id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `finance`
--
ALTER TABLE `finance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fundding`
--
ALTER TABLE `fundding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `funds`
--
ALTER TABLE `funds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `head`
--
ALTER TABLE `head`
  MODIFY `Ca_Id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `headteacher`
--
ALTER TABLE `headteacher`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `qrofficer`
--
ALTER TABLE `qrofficer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `quality`
--
ALTER TABLE `quality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `Ca_Id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
