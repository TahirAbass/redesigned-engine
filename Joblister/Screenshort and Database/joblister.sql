-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2020 at 03:17 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joblister`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Government'),
(2, 'Private'),
(3, 'Health'),
(4, 'Defense'),
(5, 'Education'),
(6, 'Engineering'),
(7, 'International '),
(8, 'Banking');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `job_url` varchar(255) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `category_id`, `company`, `description`, `job_url`, `post_date`) VALUES
(1, 1, 'Punjab Job Portal', 'In-case if you are a registered user then\r\n\r\nLogin to Job Portal.\r\nGo to Tab of Target Jobs\r\nSet criteria (Job Title, Career Level, Target Monthly Salary, Last Monthly Salary)\r\nYou will start receiving alerts as per criteria set on your email ID\r\nIf you haven\'t registered yourself on Job Portal.\r\n\r\nGo to Job Portal > Jobs.\r\nTarget Jobs can be searched on the basis of following filters.\r\n\r\nDepartment\r\nDistrict\r\nIndustry\r\nType of contract\r\nCareer level', 'https://www.jobs.punjab.gov.pk', '2020-09-12 10:26:33'),
(2, 2, 'Chughtai Labs', 'Chughtai Lab – a best quality laboratory in Pakistan – offers exciting and challenging opportunities for talented and innovative people looking to exploit their full potential and grow with us. We offer excellent working conditions and competitive salary and benefits package including health care programs. Applications are only accepted online.\r\n\r\nChughtai Lab believes in delivering our education and experience to next generation. Our team member gets chance to work with experienced technicians, doctors and internal departments. We promote and encourage people to join us and explore changes and to make new developments in our organization.\r\n\r\nChughtai lab is always enthusiastic and excited have new team members.', 'https://chughtailab.com/current-opening/', '2020-09-12 10:26:33'),
(3, 3, 'Shaukat Khanum Memorial Cancer Hospital and Research Centre (SKMCH&RC)', 'Shaukat Khanum Memorial Cancer Hospital and Research Centre (SKMCH&RC) is a state-of-the-art cancer centre located in Lahore, Pakistan. It is a project of the Shaukat Khanum Memorial Trust, which is a charitable organization established under the Societies Registration Act XXI of 1860 of Pakistan. The institution is the brainchild of Pakistani cricket superstar, Imran Khan.', 'https://shaukatkhanum.org.pk/join-us/current-vacancies/', '2020-09-12 10:26:33'),
(4, 4, 'Pakistan Navy ', 'This is official website for careers in Pakistan Navy.', 'https://www.joinpaknavy.gov.pk', '2020-09-12 10:26:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
