-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2020 at 12:52 PM
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
-- Database: `client`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `art_id` int(11) NOT NULL,
  `art_name` varchar(100) NOT NULL,
  `art_image` varchar(100) NOT NULL,
  `art_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`art_id`, `art_name`, `art_image`, `art_content`) VALUES
(1, 'def rtyh', '', '&lt;p&gt;It&amp;rsquo;s like a trend now a day to &lt;a href=&quot;https://www.jeduka.com/study-in-usa&quot;&gt;study in&amp;nbsp;USA&lt;/a&gt; . Some might be going for fulfilling their dreams, some for their parent&amp;rsquo;s dream&lt;strong&gt;.&lt;/strong&gt; Not just because it is the most powerful nation in the world but The Statue of Liberty, White House, Disneyland are some of the places and things which fascinate people all over the world.&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--
-- Error reading structure for table client.country: #1932 - Table 'client.country' doesn't exist in engine
-- Error reading data for table client.country: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `client`.`country`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--
-- Error reading structure for table client.exam: #1932 - Table 'client.exam' doesn't exist in engine
-- Error reading data for table client.exam: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `client`.`exam`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `examcontent`
--
-- Error reading structure for table client.examcontent: #1932 - Table 'client.examcontent' doesn't exist in engine
-- Error reading data for table client.examcontent: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `client`.`examcontent`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--
-- Error reading structure for table client.forum: #1932 - Table 'client.forum' doesn't exist in engine
-- Error reading data for table client.forum: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `client`.`forum`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `maincontent`
--
-- Error reading structure for table client.maincontent: #1932 - Table 'client.maincontent' doesn't exist in engine
-- Error reading data for table client.maincontent: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `client`.`maincontent`' at line 1

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`art_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
