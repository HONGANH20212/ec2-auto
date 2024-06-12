-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2019 at 10:44 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `[created by customer]`
--

-- --------------------------------------------------------

--
-- Table structure for table `root_ebs`
--

CREATE TABLE `root_ebs` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `root_ebs`
--

INSERT INTO `root_ebs` (`id`, `file_name`, `title`, `uploaded_on`, `status`) VALUES
(1, 'photo1.jpg', 'Image 1', '2019-06-13 13:33:36', 1),
(2, 'photo2.jpg', 'Image 2', '2019-06-13 18:45:45', 1),
(3, 'photo3.jpg', 'Image 3', '2019-06-13 20:45:43', 1),
(4, 'photo4.jpg', 'Image 4', '2019-06-13 22:45:43', 1),
(4, 'photo5.jpg', 'Image 5', '2019-06-13 22:55:43', 1),
(4, 'photo6.jpg', 'Image 6', '2019-06-13 22:58:43', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `root_ebs`
--
ALTER TABLE `root_ebs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `root_ebs`
--
ALTER TABLE `root_ebs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
