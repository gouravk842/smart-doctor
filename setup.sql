-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2020 at 12:24 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartdoctor`
-- use `smartdoctor`

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--
CREATE DATABASE smartdoctor;
use smartdoctor;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--



-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `day` enum('Mon','Tues','Wed','Thi','Fri','Sat','') NOT NULL,
  `time` enum('am','pm','','') NOT NULL,
  `doctorName` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--



-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `fullName` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `specialist` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `fullName`, `email`, `password`, `specialist`, `address`) VALUES
(5, 'Dr. Amonkar Krupa', 'amonkar123@gmail.com', '12345', 'Dermatologists', 'Trisha Polyclinic , Shri Sai Krishna Niwas , Shop no. 1, Agarbazar , S.K.Bole Road, Dadar (W), Dadar (West), Mumbai, Maharashtra – 400028'),
(6, 'Dr. Abhishek De', 'abhishekde23@gmail.com', '12345', 'Dermatologist', 'Mani Square Mall, IT Building, 7th floor , Maniktala Main Road  ,Kakurgachi,Kolkata – 700054'),
(7, 'Dr. Aarti Sarda', 'aartisarda@gmail.com', '12345', 'Dermatologist', 'Mani Square Mall, IT Building, 7th floor , Maniktala Main Road  ,Kakurgachi, Kolkata – 700054'),
(8, 'Dr. Sachin Verma', 'sachinverma@gmail.com', '12345', 'Dermatologist', '1, Apollo Gleneagles Hospital , Opposite Hyatt Residency,Salt Lake City – Bidhannagar . Kolkata-700064'),
(9, 'Dr. Dhepes', 'dhepespune@gmail.com', '12345', 'Dermatologist', 'Runwal Regency Sadhu Vaswani Chowk, Above Gold Mart jewellers, Camp.Pune-411001'),
(10, 'Dr. Batras Positive Health Clinic', 'batrasclinic@gmail.com', '12345', 'Dermatologist', 'Plot no. 2, 2nd floor, Akshay Complex, Pushpak Park, Opposite Sulzar India, Above   FAB India, ITI Road, Aundh,Pune- 411007'),
(11, 'Dr. Tarabai Limaye Hospital', 'tarabailimaye@gmail.com', '12345', 'Dermatologist', '366, Narayan Peth, Opposite Gokhale Hall,Laxmi Road, Narayan Peth, Pune – 411030'),
(12, 'Dr. Shireen Y Poonwalla', 'shireenpoonwalla@gmail.com', '12345', 'Dermatologist', 'Shibani Poly Clinic 580, Opposite Bank of Mahashtra, Sachaipir Street,Camp, Pune – 411001'),
(13, 'Dr. Aarohit Batra', 'aarohitbatra@gmail.com', '12345', 'Dermatologist', 'Derma World Skin Clinic,Q-4, Rajgouri Garden, near Janta Market Main EntryRajgouri Garden, West Delhi (Delhi),-110027'),
(14, 'Dr. Amit Dutta', 'amitdutta@gmail.com', '12345', 'Dermatologist', 'Dr. Dutta’s skin and Ayurvedic Treatment Centre,Jandiala-Jalandhar,Jalandhar (Punjab)-144003'),
(15, 'Dr. Amit Gupta', 'amitguptapunjab@gmail.com', '12345', 'Dermatologist', 'Modern Hospital, Sutehri Road,Hosiarpur (Punjab)-146001\r\n'),
(16, 'Dr. Sooneita Wagh Markan', 'sooneitawaghdelhi@gmail.com', '12345', 'Dermatologist', 'Jail Rd, Pocket AL, Hari Nagar, New Delhi, Delhi 110064');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `help`
--



-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `fullName` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL DEFAULT '12345',
  `sex` enum('M','F','O','') NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

