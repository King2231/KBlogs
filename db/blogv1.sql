-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2016 at 07:30 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogv1`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `datetime` datetime NOT NULL,
  `postby` int(11) NOT NULL,
  `verified` int(11) NOT NULL DEFAULT '0',
  `publish` int(11) NOT NULL DEFAULT '0',
  `r1` int(11) NOT NULL DEFAULT '0',
  `r2` int(11) NOT NULL DEFAULT '0',
  `r3` int(11) NOT NULL DEFAULT '0',
  `r4` int(11) NOT NULL DEFAULT '0',
  `r5` int(11) NOT NULL DEFAULT '0',
  `rating` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `title`, `content`, `datetime`, `postby`, `verified`, `publish`, `r1`, `r2`, `r3`, `r4`, `r5`, `rating`) VALUES
(60, 'first', '1post new', '2016-10-31 14:34:56', 6, 1, 0, 0, 0, 0, 0, 0, 0),
(62, 'hi', 'hello publisheddddd', '2016-10-31 14:35:01', 6, 1, 1, 8, 9, 11, 8, 10, 3),
(66, '2', '2', '2016-10-31 14:40:46', 7, 1, 0, 0, 0, 0, 0, 0, 0),
(67, '2', '2', '2016-10-31 14:40:49', 7, 1, 0, 0, 0, 0, 0, 0, 0),
(75, 'unpublished', 'QWERTY', '2016-11-20 12:20:30', 9, 0, 0, 0, 0, 0, 0, 0, 0),
(76, 'published', '1', '2016-11-20 12:30:18', 9, 1, 1, 0, 1, 2, 2, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_mail` varchar(50) NOT NULL,
  `u_pass` varchar(20) NOT NULL,
  `u_gender` varchar(10) NOT NULL,
  `u_contact` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `u_name`, `u_mail`, `u_pass`, `u_gender`, `u_contact`) VALUES
(6, 'Anshul', 'anshulrajput@hotmail.com', '123456', 'Male', '9999999999'),
(7, 'Ravi', 'rajputravi701@gmail.com', '000000', 'Male', '9865412365'),
(9, 'Mihir', 'm@g.com', '999999', 'Male', '98563214578');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `postby` (`postby`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
