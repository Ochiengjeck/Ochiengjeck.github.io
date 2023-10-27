-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2023 at 02:21 PM
-- Server version: 8.0.32
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `grad`
--

CREATE TABLE `grad` (
  `F_Name` varchar(50) NOT NULL,
  `M_Name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `L_Name` varchar(50) NOT NULL,
  `S_ID` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `major` varchar(50) NOT NULL,
  `sem1` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sem2` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sem3` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `adress` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `p_address` varchar(50) DEFAULT NULL,
  `p_phone` varchar(15) DEFAULT NULL,
  `p_mobile` varchar(15) DEFAULT NULL,
  `p_email` varchar(50) DEFAULT NULL,
  `p_fax` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `grad`
--

INSERT INTO `grad` (`F_Name`, `M_Name`, `L_Name`, `S_ID`, `major`, `sem1`, `sem2`, `sem3`, `adress`, `phone`, `mobile`, `email`, `fax`, `p_address`, `p_phone`, `p_mobile`, `p_email`, `p_fax`, `status`) VALUES
('BONFACE', 'Amondi', 'MUTUMA', 'SBONMU', 'BSc. Software Engineering', 'boolean algebra\r\nmicroeconomics\r\n', 'health principles\r\nwriting skills', 'marketing\r\n', '96', '0768061759', '', 'sbonu2211@ueab.ac.ke', '', '', '', '', '', '', 'approved'),
('BRANON', 'Amondi', 'OCHIENG', 'SBRANDI2211', 'BBIT', 'comp org', 'boolena algebra', 'na', '96', '0768061759', '', 'erimaigwan@gmail.com', '', '', '', '', '', '', 'pending'),
('Gorety', 'Amondi', 'Achar', 'SGORET2211', 'BSc. Software Engineering', 'N/A', 'N/A', 'N/A', '96', '0768061759', 'n/a', 'goretyaamondi@gmail.com', 'n/a', '96', 'null', 'n/a', 'n/a', 'n/a', 'approved'),
('Gorety', 'Amondi', 'Achar', 'SGORR2211', 'software', 'n', 'n', 'n', '96', '0768061759', 'n/a', 'SJECOP2211@ueab.ac.ke', 'fax', '', '', '', '', '', 'pending'),
('Jeckonia', 'Ochieng', 'Opiyo', 'SJECOP2211', 'BSc. Software Engineering', 'n/a', 'n/a', 'n/a', '96', '0768061759', '', 'ochiengjeck@gmail.com', '', '', '', '', '', '', 'approved'),
('Brandon', 'Onganyo', 'Ochieng', 'SONGOC2111', 'BSC. Software Engineering', 'twwttwtwtw', 'ttetete', 'ydhdhddh', '', '0768061759', '', 'ochiengjeck@gmail.com', '', '', '', '', '', '', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `sup`
--

CREATE TABLE `sup` (
  `f_name` varchar(50) NOT NULL,
  `m_name` varchar(50) DEFAULT NULL,
  `l_name` varchar(50) NOT NULL,
  `s_id` varchar(15) NOT NULL,
  `sup_date` varchar(15) NOT NULL,
  `major` varchar(50) DEFAULT NULL,
  `code` varchar(10) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `credit` int DEFAULT NULL,
  `sem` varchar(15) DEFAULT NULL,
  `cat` varchar(5) DEFAULT NULL,
  `final` varchar(5) DEFAULT NULL,
  `grade` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `lec` varchar(50) DEFAULT NULL,
  `date` varchar(15) DEFAULT NULL,
  `status` varchar(10) DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sup`
--

INSERT INTO `sup` (`f_name`, `m_name`, `l_name`, `s_id`, `sup_date`, `major`, `code`, `title`, `credit`, `sem`, `cat`, `final`, `grade`, `lec`, `date`, `status`) VALUES
('Jeckonia', 'Opiyo', 'Ochieng', 'sjecop2211', '12/07/2027', 'BSc. Software Engineering', 'AUTO222 ', 'Autocare', 3, 'Sem 1', '12', '60', 'C', 'Mwatati', '13-10-23', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user` varchar(20) NOT NULL,
  `L_Name` varchar(20) NOT NULL,
  `M_Name` varchar(20) NOT NULL,
  `S_ID` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user`, `L_Name`, `M_Name`, `S_ID`, `email`, `password`) VALUES
('Gorety', 'Achar', 'Amondi', 'SGORET2211', 'sgoret2211@ueab.ac.ke', '$2y$10$NnpeHQs9rYefdM.wzwSyYukCFtJVur3ONFn.JZf9BTKAK28WLwNRW'),
('Jeckonia', 'Ochieng', 'Opiyo', 'SJECOP2211', 'sjecop2211@ueab.ac.ke', '$2y$10$924kouD0ZADvOgodX80cb.O736KCEjUPy5vHQYqUfGHrMWav/8k9u'),
('Brandon', 'Ochieng', 'Onganyo', 'SONGOC2111', 'songoc2111@ueb.ac.ke', '$2y$10$tbbdtmwcbYKhR81rRLpnlOef7Uua4gR/ydbpZGamBxHeakJVlt45K');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grad`
--
ALTER TABLE `grad`
  ADD PRIMARY KEY (`S_ID`);

--
-- Indexes for table `sup`
--
ALTER TABLE `sup`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`S_ID`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
