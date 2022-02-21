-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2022 at 05:16 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `otw_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cbc`
--

CREATE TABLE `cbc` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(32) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` enum('Male','Female','','') DEFAULT NULL,
  `pb_district` varchar(32) DEFAULT NULL,
  `pb_county` varchar(32) DEFAULT NULL,
  `pb_subcounty` varchar(32) DEFAULT NULL,
  `pb_parish` varchar(32) DEFAULT NULL,
  `pb_village` varchar(32) DEFAULT NULL,
  `cr_district` varchar(32) DEFAULT NULL,
  `cr_county` varchar(32) DEFAULT NULL,
  `cr_subcounty` varchar(32) DEFAULT NULL,
  `cr_parish` varchar(32) DEFAULT NULL,
  `cr_village` varchar(32) DEFAULT NULL,
  `nationality` varchar(32) DEFAULT NULL,
  `tribe` varchar(32) DEFAULT NULL,
  `clan` varchar(32) DEFAULT NULL,
  `religion` varchar(32) DEFAULT NULL,
  `school_name` varchar(32) DEFAULT NULL,
  `year_of_attendance` date DEFAULT NULL,
  `last_grade_completed` varchar(32) DEFAULT NULL,
  `guardian_name` varchar(32) DEFAULT NULL,
  `guardian_relationship` varchar(32) DEFAULT NULL,
  `guardian_residence` varchar(32) DEFAULT NULL,
  `guardian_marital_status` varchar(32) DEFAULT NULL,
  `guardian_no_of_dependants` int(10) DEFAULT NULL,
  `guardian_occupation` varchar(32) DEFAULT NULL,
  `guardian_contact_no` int(10) DEFAULT NULL,
  `guardian_vulnerabilities` varchar(255) DEFAULT NULL,
  `dependants_at_home` varchar(32) DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `reason_for_admission` varchar(255) DEFAULT NULL,
  `paternal_name` varchar(255) DEFAULT NULL,
  `paternal_residence` varchar(255) DEFAULT NULL,
  `paternal_relationship` varchar(32) DEFAULT NULL,
  `paternal_marital_status` varchar(32) DEFAULT NULL,
  `paternal_no_of_dependants` varchar(32) DEFAULT NULL,
  `paternal_occupation` varchar(32) DEFAULT NULL,
  `paternal_contact_no` varchar(32) DEFAULT NULL,
  `maternal_name` varchar(255) DEFAULT NULL,
  `maternal_residence` varchar(255) DEFAULT NULL,
  `maternal_relationship` varchar(32) DEFAULT NULL,
  `maternal_marital_status` varchar(32) DEFAULT NULL,
  `maternal_no_of_dependants` varchar(32) DEFAULT NULL,
  `maternal_occupation` varchar(32) DEFAULT NULL,
  `maternal_contact_no` varchar(32) DEFAULT NULL,
  `fathers_name` varchar(32) DEFAULT NULL,
  `fathers_date_of_death` date DEFAULT NULL,
  `fathers_cause_of_death` varchar(255) DEFAULT NULL,
  `fathers_occupation` varchar(32) DEFAULT NULL,
  `mothers_name` varchar(32) DEFAULT NULL,
  `mothers_date_of_death` date DEFAULT NULL,
  `mothers_cause_of_death` varchar(255) DEFAULT NULL,
  `mothers_occupation` varchar(32) DEFAULT NULL,
  `more_about_child` varchar(255) DEFAULT NULL,
  `childs_fav_game` varchar(255) DEFAULT NULL,
  `childs_fav_subject` varchar(255) DEFAULT NULL,
  `childs_career_goals` varchar(255) DEFAULT NULL,
  `siblings_at_path` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `residential`
--

CREATE TABLE `residential` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(32) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` enum('Male','Female','','') DEFAULT NULL,
  `pb_district` varchar(32) DEFAULT NULL,
  `pb_county` varchar(32) DEFAULT NULL,
  `pb_subcounty` varchar(32) DEFAULT NULL,
  `pb_parish` varchar(32) DEFAULT NULL,
  `pb_village` varchar(32) DEFAULT NULL,
  `cr_district` varchar(32) DEFAULT NULL,
  `cr_county` varchar(32) DEFAULT NULL,
  `cr_subcounty` varchar(32) DEFAULT NULL,
  `cr_parish` varchar(32) DEFAULT NULL,
  `cr_village` varchar(32) DEFAULT NULL,
  `nationality` varchar(32) DEFAULT NULL,
  `tribe` varchar(32) DEFAULT NULL,
  `clan` varchar(32) DEFAULT NULL,
  `religion` varchar(32) DEFAULT NULL,
  `school_name` varchar(32) DEFAULT NULL,
  `year_of_attendance` date DEFAULT NULL,
  `last_grade_completed` varchar(32) DEFAULT NULL,
  `guardian_name` varchar(32) DEFAULT NULL,
  `guardian_relationship` varchar(32) DEFAULT NULL,
  `guardian_residence` varchar(32) DEFAULT NULL,
  `guardian_marital_status` varchar(32) DEFAULT NULL,
  `guardian_no_of_dependants` int(10) DEFAULT NULL,
  `guardian_occupation` varchar(32) DEFAULT NULL,
  `guardian_contact_no` int(10) DEFAULT NULL,
  `guardian_vulnerabilities` varchar(255) DEFAULT NULL,
  `dependants_at_home` varchar(32) DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `reason_for_admission` varchar(255) DEFAULT NULL,
  `paternal_name` varchar(255) DEFAULT NULL,
  `paternal_residence` varchar(255) DEFAULT NULL,
  `paternal_relationship` varchar(32) DEFAULT NULL,
  `paternal_marital_status` varchar(32) DEFAULT NULL,
  `paternal_no_of_dependants` varchar(32) DEFAULT NULL,
  `paternal_occupation` varchar(32) DEFAULT NULL,
  `paternal_contact_no` varchar(32) DEFAULT NULL,
  `maternal_name` varchar(255) DEFAULT NULL,
  `maternal_residence` varchar(255) DEFAULT NULL,
  `maternal_relationship` varchar(32) DEFAULT NULL,
  `maternal_marital_status` varchar(32) DEFAULT NULL,
  `maternal_no_of_dependants` varchar(32) DEFAULT NULL,
  `maternal_occupation` varchar(32) DEFAULT NULL,
  `maternal_contact_no` varchar(32) DEFAULT NULL,
  `fathers_name` varchar(32) DEFAULT NULL,
  `fathers_date_of_death` date DEFAULT NULL,
  `fathers_cause_of_death` varchar(255) DEFAULT NULL,
  `fathers_occupation` varchar(32) DEFAULT NULL,
  `mothers_name` varchar(32) DEFAULT NULL,
  `mothers_date_of_death` date DEFAULT NULL,
  `mothers_cause_of_death` varchar(255) DEFAULT NULL,
  `mothers_occupation` varchar(32) DEFAULT NULL,
  `more_about_child` varchar(255) DEFAULT NULL,
  `childs_fav_game` varchar(255) DEFAULT NULL,
  `childs_fav_subject` varchar(255) DEFAULT NULL,
  `childs_career_goals` varchar(255) DEFAULT NULL,
  `siblings_at_path` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `contact_no` int(45) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(45) NOT NULL,
  `designation` varchar(45) NOT NULL,
  `user_type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cbc`
--
ALTER TABLE `cbc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residential`
--
ALTER TABLE `residential`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cbc`
--
ALTER TABLE `cbc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `residential`
--
ALTER TABLE `residential`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
