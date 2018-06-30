-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2016 at 10:08 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kblogs`
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
(60, 'first', '1post new', '2016-10-31 14:34:56', 6, 1, 1, 0, 0, 0, 0, 0, 0),
(62, 'hi', 'hello.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consectetur dui non lectus tincidunt gravida nec eu sapien. Fusce pellentesque tincidunt fringilla. Aliquam pulvinar at ex at imperdiet. Ut a arcu in velit interdum lacinia. Mauris luctus ullamcorper blandit. Suspendisse porta erat ut semper pulvinar. Donec orci lacus, luctus nec iaculis in, ornare vulputate risus. Donec ultrices lacus dolor, a dapibus nisi euismod vel. Cras placerat massa et aliquam sollicitudin. Proin sollicitudin eleifend ante, auctor scelerisque tellus elementum ut. Cras quam diam, dapibus quis nisi vel, sagittis dictum enim. Etiam a ex est. Mauris eu tincidunt odio, a dignissim lorem. Nam a ultricies magna. In hac habitasse platea dictumst. Phasellus consectetur lacinia tortor, vel posuere tellus interdum quis.\r\n\r\nSuspendisse at justo nec metus fringilla commodo. Proin condimentum tortor nec dignissim tempor. Suspendisse orci lacus, pellentesque et leo dignissim, molestie malesuada sapien. In tincidunt sem ac mi porttitor sagittis. Etiam interdum scelerisque libero tristique finibus. Curabitur eget varius ligula, eget porttitor risus. Sed cursus sed magna eu accumsan. Nunc imperdiet nisl at maximus maximus. Sed sem ipsum, tincidunt non lacus quis, faucibus eleifend ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque non velit a risus suscipit vehicula vel sed orci. Integer iaculis lacinia nulla, at dictum turpis aliquet sit amet. Ut et condimentum ipsum. Aenean viverra, elit quis cursus lobortis, erat leo mollis lacus, vitae pretium sem nisi vitae neque. Nullam ac faucibus velit. Quisque suscipit hendrerit nisi quis porta.\r\n\r\nSed at risus libero. Vestibulum et gravida sem. Aliquam erat volutpat. In rhoncus eu purus eget elementum. Mauris at felis tortor. Morbi sed varius felis. Cras venenatis mauris augue, et semper orci eleifend in. Nulla vitae congue tortor, ac varius ligula. Nullam a accumsan nisi. Donec viverra iaculis ipsum, sed fermentum nulla pellentesque at. Curabitur hendrerit bibendum tortor, maximus eleifend lectus feugiat ut. Nam at quam id turpis venenatis pellentesque.\r\n\r\nVivamus blandit mollis dolor. Nam vitae risus consectetur, luctus enim vitae, tincidunt tellus. Donec tincidunt augue in molestie ullamcorper. Phasellus rhoncus sed urna quis auctor. Duis quis vehicula felis, in posuere augue. Quisque tempus ut nibh ut luctus. Integer suscipit tincidunt ante, id rutrum erat mollis quis. Nam at tincidunt augue. Praesent fermentum porta tellus at aliquet. Aenean et accumsan felis. Phasellus tellus magna, laoreet gravida tristique a, sodales a nisi. Nunc vitae vestibulum libero. Fusce a arcu vitae quam euismod luctus. Cras eu luctus orci, sit amet viverra elit. Aenean volutpat ante orci, sed scelerisque mi bibendum vehicula.\r\n\r\nNulla auctor sem eu sagittis posuere. Donec viverra fermentum eros. Duis eu nisi ut augue tempus ornare. Morbi non nunc suscipit, pulvinar nulla in, rhoncus nulla. Cras ut tincidunt sem. Donec venenatis ante sit amet sodales tempor. Pellentesque sodales nunc est, a posuere lorem dictum sed. Morbi id est sodales, convallis urna id, mattis nisl. Maecenas sed mauris a arcu luctus interdum non quis tortor. Aliquam metus purus, feugiat ut vestibulum at, auctor non sem.', '2016-10-31 14:35:01', 6, 1, 1, 15, 9, 11, 8, 16, 5),
(66, 'King''s First Blog', 'Hi..this is my first blog and I Wish to speak about Web Designing.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consectetur dui non lectus tincidunt gravida nec eu sapien. Fusce pellentesque tincidunt fringilla. Aliquam pulvinar at ex at imperdiet. Ut a arcu in velit interdum lacinia. Mauris luctus ullamcorper blandit. Suspendisse porta erat ut semper pulvinar. Donec orci lacus, luctus nec iaculis in, ornare vulputate risus. Donec ultrices lacus dolor, a dapibus nisi euismod vel. Cras placerat massa et aliquam sollicitudin. Proin sollicitudin eleifend ante, auctor scelerisque tellus elementum ut. Cras quam diam, dapibus quis nisi vel, sagittis dictum enim. Etiam a ex est. Mauris eu tincidunt odio, a dignissim lorem. Nam a ultricies magna. In hac habitasse platea dictumst. Phasellus consectetur lacinia tortor, vel posuere tellus interdum quis.\r\n\r\nSuspendisse at justo nec metus fringilla commodo. Proin condimentum tortor nec dignissim tempor. Suspendisse orci lacus, pellentesque et leo dignissim, molestie malesuada sapien. In tincidunt sem ac mi porttitor sagittis. Etiam interdum scelerisque libero tristique finibus. Curabitur eget varius ligula, eget porttitor risus. Sed cursus sed magna eu accumsan. Nunc imperdiet nisl at maximus maximus. Sed sem ipsum, tincidunt non lacus quis, faucibus eleifend ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque non velit a risus suscipit vehicula vel sed orci. Integer iaculis lacinia nulla, at dictum turpis aliquet sit amet. Ut et condimentum ipsum. Aenean viverra, elit quis cursus lobortis, erat leo mollis lacus, vitae pretium sem nisi vitae neque. Nullam ac faucibus velit. Quisque suscipit hendrerit nisi quis porta.\r\n\r\nSed at risus libero. Vestibulum et gravida sem. Aliquam erat volutpat. In rhoncus eu purus eget elementum. Mauris at felis tortor. Morbi sed varius felis. Cras venenatis mauris augue, et semper orci eleifend in. Nulla vitae congue tortor, ac varius ligula. Nullam a accumsan nisi. Donec viverra iaculis ipsum, sed fermentum nulla pellentesque at. Curabitur hendrerit bibendum tortor, maximus eleifend lectus feugiat ut. Nam at quam id turpis venenatis pellentesque.', '2016-10-31 14:40:46', 7, 1, 1, 0, 0, 0, 0, 1, 5),
(75, 'unpublished', 'QWERTY\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consectetur dui non lectus tincidunt gravida nec eu sapien. Fusce pellentesque tincidunt fringilla. Aliquam pulvinar at ex at imperdiet. Ut a arcu in velit interdum lacinia. Mauris luctus ullamcorper blandit. Suspendisse porta erat ut semper pulvinar. Donec orci lacus, luctus nec iaculis in, ornare vulputate risus. Donec ultrices lacus dolor, a dapibus nisi euismod vel. Cras placerat massa et aliquam sollicitudin. Proin sollicitudin eleifend ante, auctor scelerisque tellus elementum ut. Cras quam diam, dapibus quis nisi vel, sagittis dictum enim. Etiam a ex est. Mauris eu tincidunt odio, a dignissim lorem. Nam a ultricies magna. In hac habitasse platea dictumst. Phasellus consectetur lacinia tortor, vel posuere tellus interdum quis.\r\n\r\nSuspendisse at justo nec metus fringilla commodo. Proin condimentum tortor nec dignissim tempor. Suspendisse orci lacus, pellentesque et leo dignissim, molestie malesuada sapien. In tincidunt sem ac mi porttitor sagittis. Etiam interdum scelerisque libero tristique finibus. Curabitur eget varius ligula, eget porttitor risus. Sed cursus sed magna eu accumsan. Nunc imperdiet nisl at maximus maximus. Sed sem ipsum, tincidunt non lacus quis, faucibus eleifend ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque non velit a risus suscipit vehicula vel sed orci. Integer iaculis lacinia nulla, at dictum turpis aliquet sit amet. Ut et condimentum ipsum. Aenean viverra, elit quis cursus lobortis, erat leo mollis lacus, vitae pretium sem nisi vitae neque. Nullam ac faucibus velit. Quisque suscipit hendrerit nisi quis porta.\r\n\r\nSed at risus libero. Vestibulum et gravida sem. Aliquam erat volutpat. In rhoncus eu purus eget elementum. Mauris at felis tortor. Morbi sed varius felis. Cras venenatis mauris augue, et semper orci eleifend in. Nulla vitae congue tortor, ac varius ligula. Nullam a accumsan nisi. Donec viverra iaculis ipsum, sed fermentum nulla pellentesque at. Curabitur hendrerit bibendum tortor, maximus eleifend lectus feugiat ut. Nam at quam id turpis venenatis pellentesque.\r\n\r\nVivamus blandit mollis dolor. Nam vitae risus consectetur, luctus enim vitae, tincidunt tellus. Donec tincidunt augue in molestie ullamcorper. Phasellus rhoncus sed urna quis auctor. Duis quis vehicula felis, in posuere augue. Quisque tempus ut nibh ut luctus. Integer suscipit tincidunt ante, id rutrum erat mollis quis. Nam at tincidunt augue. Praesent fermentum porta tellus at aliquet. Aenean et accumsan felis. Phasellus tellus magna, laoreet gravida tristique a, sodales a nisi. Nunc vitae vestibulum libero. Fusce a arcu vitae quam euismod luctus. Cras eu luctus orci, sit amet viverra elit. Aenean volutpat ante orci, sed scelerisque mi bibendum vehicula.\r\n\r\nNulla auctor sem eu sagittis posuere. Donec viverra fermentum eros. Duis eu nisi ut augue tempus ornare. Morbi non nunc suscipit, pulvinar nulla in, rhoncus nulla. Cras ut tincidunt sem. Donec venenatis ante sit amet sodales tempor. Pellentesque sodales nunc est, a posuere lorem dictum sed. Morbi id est sodales, convallis urna id, mattis nisl. Maecenas sed mauris a arcu luctus interdum non quis tortor. Aliquam metus purus, feugiat ut vestibulum at, auctor non sem.', '2016-11-20 12:20:30', 9, 1, 1, 0, 0, 1, 0, 2, 5),
(76, 'published', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consectetur dui non lectus tincidunt gravida nec eu sapien. Fusce pellentesque tincidunt fringilla. Aliquam pulvinar at ex at imperdiet. Ut a arcu in velit interdum lacinia. Mauris luctus ullamcorper blandit. Suspendisse porta erat ut semper pulvinar. Donec orci lacus, luctus nec iaculis in, ornare vulputate risus. Donec ultrices lacus dolor, a dapibus nisi euismod vel. Cras placerat massa et aliquam sollicitudin. Proin sollicitudin eleifend ante, auctor scelerisque tellus elementum ut. Cras quam diam, dapibus quis nisi vel, sagittis dictum enim. Etiam a ex est. Mauris eu tincidunt odio, a dignissim lorem. Nam a ultricies magna. In hac habitasse platea dictumst. Phasellus consectetur lacinia tortor, vel posuere tellus interdum quis.\r\n\r\nSuspendisse at justo nec metus fringilla commodo. Proin condimentum tortor nec dignissim tempor. Suspendisse orci lacus, pellentesque et leo dignissim, molestie malesuada sapien. In tincidunt sem ac mi porttitor sagittis. Etiam interdum scelerisque libero tristique finibus. Curabitur eget varius ligula, eget porttitor risus. Sed cursus sed magna eu accumsan. Nunc imperdiet nisl at maximus maximus. Sed sem ipsum, tincidunt non lacus quis, faucibus eleifend ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque non velit a risus suscipit vehicula vel sed orci. Integer iaculis lacinia nulla, at dictum turpis aliquet sit amet. Ut et condimentum ipsum. Aenean viverra, elit quis cursus lobortis, erat leo mollis lacus, vitae pretium sem nisi vitae neque. Nullam ac faucibus velit. Quisque suscipit hendrerit nisi quis porta.\r\n\r\nSed at risus libero. Vestibulum et gravida sem. Aliquam erat volutpat. In rhoncus eu purus eget elementum. Mauris at felis tortor. Morbi sed varius felis. Cras venenatis mauris augue, et semper orci eleifend in. Nulla vitae congue tortor, ac varius ligula. Nullam a accumsan nisi. Donec viverra iaculis ipsum, sed fermentum nulla pellentesque at. Curabitur hendrerit bibendum tortor, maximus eleifend lectus feugiat ut. Nam at quam id turpis venenatis pellentesque.', '2016-11-20 12:30:18', 9, 1, 1, 0, 1, 2, 2, 2, 4),
(78, 'New Test Blog', 'TEsTThis one would go in the published section. #TestBlog\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consectetur dui non lectus tincidunt gravida nec eu sapien. Fusce pellentesque tincidunt fringilla. Aliquam pulvinar at ex at imperdiet. Ut a arcu in velit interdum lacinia. Mauris luctus ullamcorper blandit. Suspendisse porta erat ut semper pulvinar. Donec orci lacus, luctus nec iaculis in, ornare vulputate risus. Donec ultrices lacus dolor, a dapibus nisi euismod vel. Cras placerat massa et aliquam sollicitudin. Proin sollicitudin eleifend ante, auctor scelerisque tellus elementum ut. Cras quam diam, dapibus quis nisi vel, sagittis dictum enim. Etiam a ex est. Mauris eu tincidunt odio, a dignissim lorem. Nam a ultricies magna. In hac habitasse platea dictumst. Phasellus consectetur lacinia tortor, vel posuere tellus interdum quis.\r\n\r\nSuspendisse at justo nec metus fringilla commodo. Proin condimentum tortor nec dignissim tempor. Suspendisse orci lacus, pellentesque et leo dignissim, molestie malesuada sapien. In tincidunt sem ac mi porttitor sagittis. Etiam interdum scelerisque libero tristique finibus. Curabitur eget varius ligula, eget porttitor risus. Sed cursus sed magna eu accumsan. Nunc imperdiet nisl at maximus maximus. Sed sem ipsum, tincidunt non lacus quis, faucibus eleifend ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque non velit a risus suscipit vehicula vel sed orci. Integer iaculis lacinia nulla, at dictum turpis aliquet sit amet. Ut et condimentum ipsum. Aenean viverra, elit quis cursus lobortis, erat leo mollis lacus, vitae pretium sem nisi vitae neque. Nullam ac faucibus velit. Quisque suscipit hendrerit nisi quis porta.\r\n\r\nSed at risus libero. Vestibulum et gravida sem. Aliquam erat volutpat. In rhoncus eu purus eget elementum. Mauris at felis tortor. Morbi sed varius felis. Cras venenatis mauris augue, et semper orci eleifend in. Nulla vitae congue tortor, ac varius ligula. Nullam a accumsan nisi. Donec viverra iaculis ipsum, sed fermentum nulla pellentesque at. Curabitur hendrerit bibendum tortor, maximus eleifend lectus feugiat ut. Nam at quam id turpis venenatis pellentesque.\r\n\r\nVivamus blandit mollis dolor. Nam vitae risus consectetur, luctus enim vitae, tincidunt tellus. Donec tincidunt augue in molestie ullamcorper. Phasellus rhoncus sed urna quis auctor. Duis quis vehicula felis, in posuere augue. Quisque tempus ut nibh ut luctus. Integer suscipit tincidunt ante, id rutrum erat mollis quis. Nam at tincidunt augue. Praesent fermentum porta tellus at aliquet. Aenean et accumsan felis. Phasellus tellus magna, laoreet gravida tristique a, sodales a nisi. Nunc vitae vestibulum libero. Fusce a arcu vitae quam euismod luctus. Cras eu luctus orci, sit amet viverra elit. Aenean volutpat ante orci, sed scelerisque mi bibendum vehicula.\r\n\r\nNulla auctor sem eu sagittis posuere. Donec viverra fermentum eros. Duis eu nisi ut augue tempus ornare. Morbi non nunc suscipit, pulvinar nulla in, rhoncus nulla. Cras ut tincidunt sem. Donec venenatis ante sit amet sodales tempor. Pellentesque sodales nunc est, a posuere lorem dictum sed. Morbi id est sodales, convallis urna id, mattis nisl. Maecenas sed mauris a arcu luctus interdum non quis tortor. Aliquam metus purus, feugiat ut vestibulum at, auctor non sem.', '2016-11-27 22:52:30', 7, 1, 1, 0, 0, 0, 5, 0, 4),
(79, 'SIr Request', 'New Tester Blog', '2016-11-29 09:56:25', 7, 0, 1, 0, 0, 0, 0, 0, 0);

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
(7, 'Ravi', 'rajputravi701@gmail.com', '000000', 'Male', '8898105264'),
(9, 'Mihir', 'm@g.com', '999999', 'Male', '98563214578'),
(10, 'newperson', 'new@newworld.com', '123456', 'male', '784562331'),
(11, 'New1', 'new1@newworld.com', '789456', 'Male', ''),
(12, 'New1', 'new1@newworld.com', '789456', 'Male', '');

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
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
