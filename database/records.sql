-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 04:17 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `records`
--

-- --------------------------------------------------------

--
-- Table structure for table `addrec`
--

CREATE TABLE `addrec` (
  `id` int(11) NOT NULL,
  `fname` varchar(250) DEFAULT NULL,
  `lname` varchar(250) DEFAULT NULL,
  `company` varchar(250) DEFAULT NULL,
  `position` varchar(250) DEFAULT NULL,
  `service_lenght` varchar(250) DEFAULT NULL,
  `avsec_dates` date DEFAULT NULL,
  `avsec_grades` varchar(250) DEFAULT NULL,
  `medical_doc` varchar(255) DEFAULT NULL,
  `medical_doc_path` varchar(255) DEFAULT NULL,
  `medical_doc_expire` date DEFAULT NULL,
  `psra_doc` blob DEFAULT NULL,
  `psra_doc_path` varchar(255) DEFAULT NULL,
  `psra_doc_expire` date DEFAULT NULL,
  `police_rec_doc` blob DEFAULT NULL,
  `police_rec_doc_path` varchar(255) DEFAULT NULL,
  `police_rec_doc_expire` date DEFAULT NULL,
  `recommenedBy` varchar(250) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addrec`
--

INSERT INTO `addrec` (`id`, `fname`, `lname`, `company`, `position`, `service_lenght`, `avsec_dates`, `avsec_grades`, `medical_doc`, `medical_doc_path`, `medical_doc_expire`, `psra_doc`, `psra_doc_path`, `psra_doc_expire`, `police_rec_doc`, `police_rec_doc_path`, `police_rec_doc_expire`, `recommenedBy`, `createdAt`) VALUES
(8, 'Akiel', 'Walsh', 'tazzuda', 'ceo', '737', '2021-11-23', '1', 'info2180-lecture-7.pdf', 'upload/info2180-lecture-7.pdf', '2021-11-17', 0x696e666f323138302d6c6563747572652d352e706466, 'upload/info2180-lecture-6.pdf', '2021-11-19', 0x696e666f323138302d6c6563747572652d362e706466, 'upload/info2180-lecture-5.pdf', '2021-11-15', '2021-11-27', '2021-11-24 21:29:47'),
(9, 'tahjay', 'thompson', 'tazzuda', 'ceo', '737', '2021-11-23', '1', 'info2180-lecture-7.pdf', 'upload/info2180-lecture-7.pdf', '2021-11-17', 0x696e666f323138302d6c6563747572652d352e706466, 'upload/info2180-lecture-6.pdf', '2021-11-19', 0x696e666f323138302d6c6563747572652d362e706466, 'upload/info2180-lecture-5.pdf', '2021-11-15', '2021-11-27', '2021-11-24 21:29:58'),
(10, 'Jada', 'Calvin', 'tazzuda', 'ceo', '737', '2021-11-23', '1', 'info2180-lecture-7.pdf', 'upload/info2180-lecture-7.pdf', '2021-11-17', 0x696e666f323138302d6c6563747572652d352e706466, 'upload/info2180-lecture-6.pdf', '2021-11-19', 0x696e666f323138302d6c6563747572652d362e706466, 'upload/info2180-lecture-5.pdf', '2021-11-15', '2021-11-27', '2021-11-24 21:30:04'),
(11, 'Donique', 'Forbes', 'tazzuda', 'ceo', '737', '2021-11-23', '1', 'info2180-lecture-7.pdf', 'upload/info2180-lecture-7.pdf', '2021-11-17', 0x696e666f323138302d6c6563747572652d352e706466, 'upload/info2180-lecture-6.pdf', '2021-11-19', 0x696e666f323138302d6c6563747572652d362e706466, 'upload/info2180-lecture-5.pdf', '2021-11-15', '2021-11-27', '2021-11-24 21:31:16'),
(12, 'Jelani', 'Smith', 'tazzuda', 'ceo', '737', '2021-11-23', '1', 'info2180-lecture-7.pdf', 'upload/info2180-lecture-7.pdf', '2021-11-17', 0x696e666f323138302d6c6563747572652d352e706466, 'upload/info2180-lecture-6.pdf', '2021-11-19', 0x696e666f323138302d6c6563747572652d362e706466, 'upload/info2180-lecture-5.pdf', '2021-11-15', '2021-11-27', '2021-11-24 21:36:46');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id` int(11) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `reason` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'awalsh', 'awalsh@test.com', '482c811da5d5b4bc6d497ffa98491e38'),
(2, 'tthompson', 'tthompson@test.com', '482c811da5d5b4bc6d497ffa98491e38'),
(3, 'jsmith', 'jsmith@test.com', '482c811da5d5b4bc6d497ffa98491e38'),
(4, 'dforbes', 'dforbes@test.com', '482c811da5d5b4bc6d497ffa98491e38'),
(5, 'jcalvin', 'jcalvin@test.com', '482c811da5d5b4bc6d497ffa98491e38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addrec`
--
ALTER TABLE `addrec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addrec`
--
ALTER TABLE `addrec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
