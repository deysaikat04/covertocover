-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 03:16 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_cover`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(250) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `status` int(1) NOT NULL,
  `toc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `name`, `description`, `status`, `toc`) VALUES
(1, ' Paulo Coelho ', '', 1, '2018-11-17 03:08:02'),
(2, 'Herge', '', 1, '2018-11-17 03:09:35'),
(3, 'Ashlee Vance  ', '', 1, '2018-11-17 03:10:28'),
(4, ' Arthur Conan Doyle ', '', 1, '2018-11-17 03:23:52'),
(5, 'Thomas H. Cormen', '', 1, '2018-11-17 03:27:03'),
(6, ' Charles E. Leiserson ', '', 1, '2018-11-17 03:27:03'),
(7, 'Ronald L. Rivest', '', 1, '2018-11-17 03:27:03'),
(8, 'Clifford Stein ', '', 1, '2018-11-17 03:27:03'),
(9, 'Chetan Bhagat', '', 1, '2018-11-17 03:31:12'),
(10, 'Sachin Tendulkar', '', 1, '2018-12-13 09:53:47'),
(11, 'Made Easy Editorial Board', '', 1, '2018-12-18 09:33:50'),
(12, 'Surbhi Mitra', '', 1, '2018-12-18 09:39:05'),
(13, 'R. Nageswara Rao', '', 1, '2018-12-18 09:47:06'),
(14, 'Michael T. Goodrich', '', 1, '2018-12-18 10:16:06'),
(15, 'Roberto Tamassia', '', 1, '2018-12-18 10:16:06'),
(16, 'Michael H. Goldwasser', '', 1, '2018-12-18 10:16:06'),
(17, 'Allen Downey', '', 1, '2018-12-18 10:20:10'),
(18, 'Jeffrey Elkner', '', 1, '2018-12-18 10:20:10'),
(19, 'Chris Meyers', '', 1, '2018-12-18 10:20:10'),
(20, 'Shamika Chaves', '', 1, '2018-12-18 10:32:42'),
(21, 'Sonal Sachdev Patel', '', 1, '2018-12-18 10:39:32'),
(22, 'Jemma Wayne-Kattan', '', 1, '2018-12-18 10:39:32'),
(23, 'Napoleon Hill', '', 1, '2018-12-18 10:43:53'),
(24, 'Walter Isaacson', '', 1, '2018-12-18 10:46:54'),
(25, 'Simon Sinek', '', 1, '2018-12-18 10:49:52'),
(26, 'Jeffrey Archer', '', 1, '2018-12-18 10:53:55'),
(27, 'Vineet Bajpai', '', 1, '2018-12-18 10:57:28'),
(28, 'Ryan Rogers', '', 1, '2018-12-18 11:03:50'),
(29, 'Ian Tuhovsky', '', 1, '2018-12-18 11:30:00'),
(30, 'Yuval Noah Harari', '', 1, '2018-12-18 11:34:28'),
(31, 'Nigel Benson', '', 1, '2018-12-18 11:40:23'),
(32, 'Jamie Cooper', '', 1, '2018-12-18 11:50:35'),
(33, 'VVS Laxman', '', 1, '2018-12-18 11:55:01'),
(34, 'Shashi Tharoor', '', 1, '2018-12-18 12:00:24'),
(35, 'Rachna Chhabria', '', 1, '2018-12-18 12:03:46'),
(36, 'Nalini Sorensen', '', 1, '2018-12-18 12:10:47'),
(37, 'Ruskin Bond', '', 1, '2018-12-18 12:16:10'),
(38, 'Amartya Sen', '', 1, '2018-12-18 12:26:37'),
(39, 'Amish Tripathi', '', 1, '2018-12-18 12:39:05'),
(40, 'J.K. Rowling', '', 1, '2018-12-18 13:56:40'),
(41, 'IES Master Team', '', 1, '2018-12-18 14:05:59');

-- --------------------------------------------------------

--
-- Table structure for table `bookedition`
--

CREATE TABLE `bookedition` (
  `id` int(250) NOT NULL,
  `ename` varchar(300) NOT NULL,
  `pages` int(10) NOT NULL,
  `toc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookedition`
--

INSERT INTO `bookedition` (`id`, `ename`, `pages`, `toc`) VALUES
(1, 'Later Printing edition (17 October 2005)', 172, '2018-11-17 03:08:02'),
(2, 'Graphic novel edition (1 January 2013)', 64, '2018-11-17 03:09:35'),
(3, '2015 edition (14 June 2015)', 352, '2018-11-17 03:10:28'),
(4, ' Publishing (10 January 2017)', 536, '2018-11-17 03:23:52'),
(5, 'Third edition (2 February 2010)', 1312, '2018-11-17 03:27:02'),
(6, 'Paperback edition (9 October 2018)', 312, '2018-11-17 03:31:12'),
(7, 'Reprint edition (16 December 2015)', 496, '2018-12-13 09:53:45'),
(8, 'First edition (1 October 2016)', 280, '2018-12-18 09:16:37'),
(9, 'Movie Tie-in edition (25 April 2017)', 268, '2018-12-18 09:27:10'),
(10, '26 April 2018', 660, '2018-12-18 09:33:50'),
(11, '2013 edition (2013)', 416, '2018-12-18 09:39:05'),
(12, 'Second edition (2018)', 760, '2018-12-18 09:47:06'),
(13, 'Reprint edition (2016)', 768, '2018-12-18 10:16:06'),
(14, '1st edition (2015)', 280, '2018-12-18 10:20:09'),
(15, 'Graphic Novel edition (1 January 2013)', 64, '2018-12-18 10:24:35'),
(16, 'Graphic Novel edition (1 January 2013)', 64, '2018-12-18 10:26:56'),
(17, '1 edition (25 October 2018)', 120, '2018-12-18 10:32:41'),
(18, '1 edition (25 April 2018)', 104, '2018-12-18 10:39:32'),
(19, '2014 Edition (1 January 2014)', 250, '2018-12-18 10:43:53'),
(20, '2015 edition (11 February 2015)', 592, '2018-12-18 10:46:54'),
(21, 'Latest Edition edition (6 October 2011)', 256, '2018-12-18 10:49:52'),
(22, '2018 Edition (1 November 2018)', 480, '2018-12-18 10:53:55'),
(23, '2018 Edition (20 September 2018)', 416, '2018-12-18 10:57:27'),
(24, '2017 Edition (12 November 2017)', 46, '2018-12-18 11:03:50'),
(25, 'First edition (11 July 2015)', 158, '2018-12-18 11:30:00'),
(26, '2015 Edition (11 June 2015)', 512, '2018-12-18 11:34:27'),
(27, '4th ed. edition (6 September 2007)', 176, '2018-12-18 11:40:23'),
(28, 'Kindle Edition', 31, '2018-12-18 11:50:35'),
(29, '2018 Edition (19 November 2018)', 336, '2018-12-18 11:55:01'),
(30, '2018 Edition (26 October 2018)', 512, '2018-12-18 12:00:23'),
(31, 'First edition (5 November 2018)', 246, '2018-12-18 12:03:45'),
(32, '1 edition (30 September 2018)', 62, '2018-12-18 12:10:47'),
(33, 'First edition (23 April 2018)', 80, '2018-12-18 12:16:10'),
(34, 'First edition (19 January 2018)', 320, '2018-12-18 12:22:10'),
(35, 'First Edition edition (29 August 2006)', 256, '2018-12-18 12:26:36'),
(36, 'Reprint edition (27 February 2013)', 604, '2018-12-18 12:39:04'),
(37, '2012 Edition (1 April 2012)', 394, '2018-12-18 13:49:16'),
(38, 'Reprint edition (27 February 2013)', 575, '2018-12-18 13:52:20'),
(39, '2014 Edition (3 September 2014)', 352, '2018-12-18 13:56:39'),
(40, '2015 Edition (20 October 2015)', 384, '2018-12-18 14:00:35'),
(41, '2018 Edition (8 May 2018)', 945, '2018-12-18 14:05:58'),
(42, 'Third edition (1 January 2015)', 628, '2018-12-18 14:09:01');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(250) NOT NULL,
  `name` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `mrp` decimal(5,2) NOT NULL,
  `category` int(250) NOT NULL,
  `status` int(1) NOT NULL,
  `rating` float(2,1) NOT NULL,
  `toc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tou` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `description`, `mrp`, `category`, `status`, `rating`, `toc`, `tou`) VALUES
(1, 'The Alchemist ', 'Paulo Coelho\'s enchanting novel has inspired a devoted following around the world. ', '350.00', 2, 1, 4.5, '2018-12-15 09:24:17', '2018-11-17 03:08:02'),
(2, 'The Alchemist ', 'Paulo Coelho\'s enchanting novel has inspired a devoted following around the world. ', '350.00', 2, 1, 4.6, '2018-12-15 15:39:51', '2018-11-17 03:08:02'),
(3, 'Cigars of Pharaoh (Tintin) ', 'After promising to assist an archaeologist locate the missing tombs of an ancient pharaoh, Tintin and Snowy make a dangerous discovery.', '499.00', 6, 1, 1.0, '2018-12-17 14:03:11', '2018-12-17 14:03:11'),
(4, 'Elon Musk: How the Billionaire CEO of Spacex and Tesla is Shaping Our Future ', 'The book captures the life and achievements of South African interpreter and innovator, Elon Musk, the brain behind series of successful enterprises s', '699.00', 1, 1, 3.8, '2018-12-15 15:39:51', '2018-11-17 03:10:28'),
(5, 'The Complete Novels of Sherlock Holmes', 'This is where begins a historical partnership between Dr. Watson—the archetypal gentleman from the Victorian era—and the eccentric, legendary sleuth, ', '250.00', 2, 1, 2.7, '2018-12-17 14:03:10', '2018-12-17 14:03:10'),
(6, 'Introduction to Algorithms', 'This internationally acclaimed textbook provides a comprehensive introduction to the modern study of computer algorithms. It covers a broad range of a', '999.99', 7, 1, 4.1, '2018-12-15 15:39:51', '2018-11-17 03:27:02'),
(7, 'The Girl in Room 105', 'Hi, I’m Keshav, and my life is screwed. I hate my job and my girlfriend left me. Ah, the beautiful Zara. Zara is from Kashmir. She is a Muslim. And di', '199.00', 5, 1, 3.6, '2018-12-15 15:39:51', '2018-11-17 03:31:12'),
(8, 'Playing It My Way ', 'This is the autobiography of legend and the renowned personality in cricket, Sachin Tendulkar. Sachin Tendulkar played for good 24 years and retired.', '499.00', 3, 1, 4.1, '2018-12-15 15:39:51', '2018-12-13 09:53:45'),
(9, 'Playing It My Way ', 'This is the autobiography of legend and the renowned personality in cricket, Sachin Tendulkar. Sachin Tendulkar played for good 24 years and retired.', '499.00', 3, 1, 4.1, '2018-12-15 15:39:51', '2018-12-13 09:53:45'),
(10, 'Playing It My Way ', 'This is the autobiography of legend and the renowned personality in cricket, Sachin Tendulkar. Sachin Tendulkar played for good 24 years and retired.', '499.00', 3, 1, 1.0, '2018-12-17 17:03:42', '2018-12-17 17:03:42'),
(11, 'Playing It My Way ', 'This is the autobiography of legend and the renowned personality in cricket, Sachin Tendulkar. Sachin Tendulkar played for good 24 years and retired.', '499.00', 3, 1, 4.1, '2018-12-15 15:39:51', '2018-12-13 09:53:45'),
(12, 'Playing It My Way ', 'This is the autobiography of legend and the renowned personality in cricket, Sachin Tendulkar. Sachin Tendulkar played for good 24 years and retired.', '499.00', 3, 1, 4.0, '2018-12-15 09:14:20', '2018-12-13 09:53:45'),
(13, 'One Indian Girl', 'While Chetan Bhagat is so known for clear and simple articulation, with hilarious analogies, he has taken this up a notch from his standard.', '176.00', 9, 1, 3.0, '2018-12-18 09:16:37', '2018-12-18 09:16:37'),
(14, 'Half Girlfriend', 'Madhav and Riya make a good story and it takes new turns when they go on spaceship and explore new intergalactical planetary systems', '176.00', 9, 1, 3.0, '2018-12-18 09:27:10', '2018-12-18 09:27:10'),
(15, 'GATE 2019: Computer Science and IT Engineering - Previous Solved Papers', 'The new edition of GATE 2019 Solved Papers : Computer Science & IT has been fully revised, updated and edited.', '825.00', 16, 1, 3.0, '2018-12-18 14:10:38', '2018-12-18 09:33:50'),
(16, 'Handbook of Computer Science & IT', 'This handbook has been designed for the aspirants of IES, GATE, PSUs and other competitive examinations.', '200.00', 7, 1, 3.0, '2018-12-18 09:39:05', '2018-12-18 09:39:05'),
(17, 'Core Python Programming', 'it is time for beginners as well as existing programmers to focus their attention on Python.', '649.00', 7, 1, 3.0, '2018-12-18 09:47:06', '2018-12-18 09:47:06'),
(18, 'Data Structures and Algorithms in Python', 'definitive introduction to data structures in Python by authoritative authors.', '539.00', 7, 1, 3.0, '2018-12-18 10:16:06', '2018-12-18 10:16:06'),
(19, 'Learning with Python', 'The book is designed to introduce the important concepts of Python programming language in detail. ', '349.00', 7, 1, 3.0, '2018-12-18 10:20:09', '2018-12-18 10:20:09'),
(20, 'Tintin in America', 'Tintin travels to Chicago to report on the gangsters and comes face to face with dangerous criminals.', '499.00', 6, 1, 3.0, '2018-12-18 10:24:35', '2018-12-18 10:24:35'),
(21, 'Destination Moon (Tintin)', 'After receiving a telegram from Professor Calculus, Tintin and Captain Haddock travel to meet him at the atomic centre in Syldavia.', '499.00', 6, 1, 3.0, '2018-12-18 10:26:56', '2018-12-18 10:26:56'),
(22, 'Your Journal of Memories', 'This is a journal of memories for you to store your memories so that you don\'t forget anything.', '699.00', 9, 1, 3.0, '2018-12-18 10:32:41', '2018-12-18 10:32:41'),
(23, 'Gita: The Battle of the Worlds', 'When eleven-year-old Dev\'s father dies, he can\'t stop lashing out at those he loves.', '250.00', 10, 1, 3.0, '2018-12-18 10:39:32', '2018-12-18 10:39:32'),
(24, 'Think and Grow Rich', 'Think And Grow Rich has earned itself the reputation of being considered a textbook for actionable techniques that can help one get better.', '150.00', 8, 1, 3.0, '2018-12-18 10:43:53', '2018-12-18 10:43:53'),
(25, 'Steve Jobs', 'The book provides unique insights into thoughts and life of Steve Jobs', '550.00', 3, 1, 3.0, '2018-12-18 10:46:54', '2018-12-18 10:46:54'),
(26, 'Start With Why: How Great Leaders Inspire Everyone To Take Action', 'We aim to become successful in businesses, ventures, relationships and ultimately in life. ', '499.00', 8, 1, 3.0, '2018-12-18 10:49:52', '2018-12-18 10:49:52'),
(27, 'Heads You Win', 'Chosen as one of the best books of 2018 by the Mail on Sunday.', '399.00', 5, 1, 3.0, '2018-12-18 10:53:55', '2018-12-18 10:53:55'),
(28, 'Kashi: Secret of the Black Temple (Harappa)', 'It is a fiction novel that blends mythology and history with a modern-day thriller.', '295.00', 5, 1, 3.0, '2018-12-18 10:57:27', '2018-12-18 10:57:27'),
(29, 'Jack Ma: A Biography of the Alibaba Billionaire', 'Jack Ma is a Chinese business magnate who is the founder and executive chairman of Alibaba Group, a conglomerate of Internet-based businesses.', '999.99', 11, 1, 3.0, '2018-12-18 11:03:50', '2018-12-18 11:03:50'),
(30, 'Communication Skills Training: A Practical Guide to Improving Your Social Intelligence, Presentation, Persuasion and Public Speaking', 'Those who want to improve communication skills, this is the best book to have.', '999.99', 7, 1, 3.0, '2018-12-18 11:30:00', '2018-12-18 11:30:00'),
(31, 'Sapiens: A Brief History of Humankind', 'The Sunday Times number 1 bestseller.', '499.00', 12, 1, 3.0, '2018-12-18 11:34:27', '2018-12-18 11:34:27'),
(32, 'Introducing Psychology: A Graphic Guide', 'What is psychology? When did it begin? Where did it come from? How does psychology compare with related subjects such as psychiatry and psychotherapy?', '614.00', 13, 1, 3.0, '2018-12-18 11:40:23', '2018-12-18 11:40:23'),
(33, 'Stephen Hawking: Extraordinary Life Lessons That Will Change Your Life Forever (Inspirational Books)', 'You are about to discover some of the greatest life secrets known to man.', '249.00', 14, 1, 3.0, '2018-12-18 11:50:35', '2018-12-18 11:50:35'),
(34, '281 and Beyond', 'A stylish batsman who could score against any kind of bowling, VVS Laxman played over a hundred Tests to aggregate more than 8,000 runs.', '699.00', 15, 1, 3.0, '2018-12-18 11:55:01', '2018-12-18 11:55:01'),
(35, 'The Paradoxical Prime Minister', 'Never before has there been such a superbly written and devastatingly accurate account of the most controversial prime minister India has ever had.', '799.00', 3, 1, 3.0, '2018-12-18 12:00:23', '2018-12-18 12:00:23'),
(36, 'Festival Stories: Through the Year', 'This book invites you to rejoice in India\'s rich culture through the simple stories of two young twins, Natasha and Nikhil, as they experience.', '250.00', 10, 1, 3.0, '2018-12-18 12:03:45', '2018-12-18 12:03:45'),
(40, 'Lucky Its Diwali', 'Told through a dog\'s eyes, this heartwarming story, set during the Diwali season, is perfect to read all through the year.', '150.00', 10, 1, 3.0, '2018-12-18 13:22:49', '2018-12-18 12:10:47'),
(41, 'These are a Few of My Favourite Things: Ruskin Bond', 'These are a Few of My Favourite Things series, gives you a quick peek into the favourites of one of India\'s most well-known authors, Ruskin Bond.', '399.00', 10, 1, 3.0, '2018-12-18 12:16:10', '2018-12-18 12:16:10'),
(42, 'Why I Am a Hindu', 'A book that will be read and debated now and in the future, Why I Am a Hindu is a revelatory and original masterwork.', '699.00', 11, 1, 3.0, '2018-12-18 12:22:10', '2018-12-18 12:22:10'),
(43, 'The Argumentative Indian: Writings on Indian History, Culture and Identity', 'In four sections the book tries to delineate the importance of perceiving contemporary India easily.', '499.00', 11, 1, 3.0, '2018-12-18 12:26:36', '2018-12-18 12:26:36'),
(44, 'The Immortals of Meluha (Shiva Trilogy)', '\'The Immortals of Meluha\' draws heavily from stories and legends of Hindu mythology that have been passed on from generation to generation.', '399.00', 9, 1, 3.0, '2018-12-18 12:39:04', '2018-12-18 12:39:04'),
(45, 'The Secret Of The Nagas (Shiva Trilogy-2) ', 'The Shiva Trilogy, written by Amish Tripathi, has become a nation-wide bestseller in a short time.', '399.00', 9, 1, 3.0, '2018-12-18 13:49:16', '2018-12-18 13:49:16'),
(46, 'The Oath of The Vayuputras (Shiva Trilogy Book 3)', 'EVIL HAS RISEN. ONLY A GOD CAN STOP IT. Shiva is gathering his forces.', '450.00', 9, 1, 3.0, '2018-12-18 13:52:20', '2018-12-18 13:52:20'),
(48, 'Harry Potter and the Philosophers Stone', 'Harry Potter and the Philosopher’s Stone is the first novel of the much appreciated Harry Potter series. ', '399.00', 2, 1, 3.0, '2018-12-18 13:56:39', '2018-12-18 13:56:39'),
(49, 'Harry Potter and the Chamber of Secrets', 'Harry Potter can\'t wait for his holidays with the dire Dursleys to end. But a small, self-punishing house-elf warns Harry of mortal danger awaiting.', '999.99', 2, 1, 3.0, '2018-12-18 14:00:35', '2018-12-18 14:00:35'),
(50, 'GATE 2019 Civil Engineering (32 Years Solution)', 'The door to GATE exam is through previous year question papers.', '850.00', 16, 1, 3.0, '2018-12-18 14:05:58', '2018-12-18 14:05:58'),
(51, 'A Handbook on Civil Engineering (Illustrated Formulae and Key Theory Concepts)', 'A Handbook for Civil Engineering provide the crux of Civil Engineering in a concise form to the student to brush up the formula and important concepts', '350.00', 16, 1, 3.0, '2018-12-18 14:09:01', '2018-12-18 14:09:01');

-- --------------------------------------------------------

--
-- Table structure for table `bookstoedition`
--

CREATE TABLE `bookstoedition` (
  `id` int(250) NOT NULL,
  `editionid` int(250) NOT NULL,
  `bookid` int(250) NOT NULL,
  `toc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookstoedition`
--

INSERT INTO `bookstoedition` (`id`, `editionid`, `bookid`, `toc`) VALUES
(1, 1, 1, '2018-11-17 03:08:02'),
(2, 1, 2, '2018-11-17 03:08:02'),
(3, 2, 3, '2018-11-17 03:09:35'),
(4, 3, 4, '2018-11-17 03:10:28'),
(5, 4, 5, '2018-11-17 03:23:52'),
(6, 5, 6, '2018-11-17 03:27:03'),
(7, 6, 7, '2018-11-17 03:31:12'),
(8, 7, 8, '2018-12-13 09:53:46'),
(9, 7, 9, '2018-12-13 09:53:46'),
(10, 7, 10, '2018-12-13 09:53:46'),
(11, 7, 11, '2018-12-13 09:53:46'),
(12, 7, 12, '2018-12-13 09:53:46'),
(13, 8, 13, '2018-12-18 09:16:38'),
(14, 9, 14, '2018-12-18 09:27:10'),
(15, 10, 15, '2018-12-18 09:33:50'),
(16, 11, 16, '2018-12-18 09:39:05'),
(17, 12, 17, '2018-12-18 09:47:06'),
(18, 13, 18, '2018-12-18 10:16:06'),
(19, 14, 19, '2018-12-18 10:20:09'),
(20, 15, 20, '2018-12-18 10:24:35'),
(21, 16, 21, '2018-12-18 10:26:56'),
(22, 17, 22, '2018-12-18 10:32:42'),
(23, 18, 23, '2018-12-18 10:39:32'),
(24, 19, 24, '2018-12-18 10:43:53'),
(25, 20, 25, '2018-12-18 10:46:54'),
(26, 21, 26, '2018-12-18 10:49:52'),
(27, 22, 27, '2018-12-18 10:53:55'),
(28, 23, 28, '2018-12-18 10:57:28'),
(29, 24, 29, '2018-12-18 11:03:50'),
(30, 25, 30, '2018-12-18 11:30:00'),
(31, 26, 31, '2018-12-18 11:34:28'),
(32, 27, 32, '2018-12-18 11:40:23'),
(33, 28, 33, '2018-12-18 11:50:35'),
(34, 29, 34, '2018-12-18 11:55:01'),
(35, 30, 35, '2018-12-18 12:00:24'),
(36, 31, 36, '2018-12-18 12:03:46'),
(37, 32, 40, '2018-12-18 12:10:47'),
(38, 33, 41, '2018-12-18 12:16:10'),
(39, 34, 42, '2018-12-18 12:22:10'),
(40, 35, 43, '2018-12-18 12:26:37'),
(41, 36, 44, '2018-12-18 12:39:05'),
(42, 37, 45, '2018-12-18 13:49:16'),
(43, 38, 46, '2018-12-18 13:52:20'),
(44, 39, 48, '2018-12-18 13:56:40'),
(45, 40, 49, '2018-12-18 14:00:35'),
(46, 41, 50, '2018-12-18 14:05:59'),
(47, 42, 51, '2018-12-18 14:09:02');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(250) NOT NULL,
  `bookid` int(250) NOT NULL,
  `customerid` int(250) NOT NULL,
  `toc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `bookid`, `customerid`, `toc`, `status`) VALUES
(1, 5, 4, '2018-12-18 11:20:03', 0),
(2, 5, 3, '2018-12-18 11:19:04', 1),
(3, 1, 3, '2018-12-18 11:19:04', 1),
(4, 3, 3, '2018-12-18 11:19:04', 1),
(5, 10, 4, '2018-12-18 11:20:03', 0),
(6, 5, 1, '2018-12-18 11:19:04', 1),
(7, 8, 1, '2018-12-18 13:46:24', 0),
(8, 7, 1, '2018-12-18 13:46:22', 0),
(9, 6, 1, '2018-12-18 13:46:18', 0),
(10, 10, 3, '2018-12-18 11:19:04', 1),
(11, 18, 1, '2018-12-18 13:46:12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(250) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Science Fiction'),
(2, 'Adventure'),
(3, 'Biography'),
(4, 'Cookbooks'),
(5, 'Thriller'),
(6, 'Comics'),
(7, 'Educational'),
(8, 'Business'),
(9, 'Literature'),
(10, 'Children\'s & Young Adult'),
(11, 'History'),
(12, 'Society'),
(13, 'Health'),
(14, 'Science'),
(15, 'Sports'),
(16, 'Exam');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(250) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zip` int(6) NOT NULL,
  `country` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `emailVerified` tinyint(4) NOT NULL,
  `coupon` varchar(10) NOT NULL,
  `toc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `password`, `phone`, `city`, `state`, `zip`, `country`, `address`, `emailVerified`, `coupon`, `toc`, `status`) VALUES
(1, 'Saikat Dey', 'dsaikat378@gmail.com', '$2y$10$63ao0u/kJGHvN5l3mmV8PusDLJ8g/eibHJ8VpeI5B23JOPuazE8ue', 8981380649, 'Howrah', 'West Bengal', 711101, 'IND', '146/4, M.S.P.C Lane.', 0, '', '2018-12-14 03:36:12', 1),
(2, 'Sudhir Barik', 'sudhir.barik981@gmail.com', '$2y$10$933h6FCi4iHvRCRFHS3Gn.lpXzsMJpztg25Al3exbnBoWmHagmWIi', 7596964073, '', '', 0, '', '', 0, '', '2018-12-11 21:14:55', 1),
(3, 'John', 'abc@abc.com', '$2y$10$/OXJM/2w4debuTCUZupkG.MAZXkQXkal9kDcgdFdQKX6iDjJmvQIm', 9876543210, '', '', 0, '', '', 0, '', '2018-12-14 11:52:11', 1),
(4, 'Luke Hobbs', 'luke@hobbs.com', '$2y$10$T7WwYjYEq3uFvpssMk8Reu66Tqxa0l4OvdmqrYPsVP6ugSNCLYzxe', 4556789103, '', '', 0, '', '', 0, '', '2018-12-15 07:25:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `id` int(250) NOT NULL,
  `sellerid` int(250) NOT NULL,
  `bookid` int(250) NOT NULL,
  `discount` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`id`, `sellerid`, `bookid`, `discount`) VALUES
(1, 5, 1, '46.00'),
(2, 5, 2, '46.00'),
(3, 5, 3, '17.00'),
(4, 5, 4, '46.00'),
(5, 5, 5, '28.00'),
(6, 5, 6, '43.00'),
(7, 5, 7, '39.00'),
(8, 6, 8, '48.00'),
(9, 6, 9, '48.00'),
(10, 6, 10, '48.00'),
(11, 6, 11, '48.00'),
(12, 6, 12, '48.00'),
(13, 6, 13, '36.00'),
(14, 6, 14, '41.00'),
(15, 6, 15, '48.00'),
(16, 6, 16, '50.00'),
(17, 6, 17, '15.00'),
(18, 6, 18, '6.00'),
(19, 6, 19, '38.00'),
(20, 6, 20, '13.00'),
(21, 6, 21, '6.00'),
(22, 6, 22, '23.00'),
(23, 6, 23, '48.00'),
(24, 6, 24, '53.00'),
(25, 6, 25, '35.00'),
(26, 6, 26, '45.00'),
(27, 6, 27, '38.00'),
(28, 6, 28, '34.00'),
(29, 6, 29, '0.00'),
(30, 6, 30, '0.00'),
(31, 6, 31, '43.00'),
(32, 6, 32, '0.00'),
(33, 6, 33, '1.00'),
(34, 6, 34, '37.00'),
(35, 6, 35, '38.00'),
(36, 6, 36, '38.00'),
(40, 6, 40, '10.00'),
(41, 6, 41, '48.00'),
(42, 6, 42, '46.00'),
(43, 6, 43, '43.00'),
(44, 6, 44, '51.00'),
(45, 6, 45, '51.00'),
(46, 6, 46, '42.00'),
(48, 6, 48, '51.00'),
(49, 6, 49, '16.00'),
(50, 6, 50, '32.00'),
(51, 6, 51, '37.00');

-- --------------------------------------------------------

--
-- Table structure for table `editiontoauthor`
--

CREATE TABLE `editiontoauthor` (
  `id` int(250) NOT NULL,
  `editionid` int(250) NOT NULL,
  `authorid` int(250) NOT NULL,
  `pid` int(250) NOT NULL,
  `toc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `editiontoauthor`
--

INSERT INTO `editiontoauthor` (`id`, `editionid`, `authorid`, `pid`, `toc`) VALUES
(1, 1, 1, 1, '2018-11-17 03:08:02'),
(2, 2, 2, 2, '2018-11-17 03:09:35'),
(3, 3, 3, 3, '2018-11-17 03:10:28'),
(4, 4, 4, 4, '2018-11-17 03:23:52'),
(5, 5, 5, 5, '2018-11-17 03:27:03'),
(6, 5, 6, 5, '2018-11-17 03:27:03'),
(7, 5, 7, 5, '2018-11-17 03:27:03'),
(8, 5, 8, 5, '2018-11-17 03:27:03'),
(9, 6, 9, 6, '2018-11-17 03:31:12'),
(10, 7, 10, 7, '2018-12-13 09:53:47'),
(11, 8, 9, 8, '2018-12-18 09:16:38'),
(12, 9, 9, 8, '2018-12-18 09:27:10'),
(13, 10, 11, 9, '2018-12-18 09:33:50'),
(14, 11, 12, 10, '2018-12-18 09:39:05'),
(15, 12, 13, 11, '2018-12-18 09:47:06'),
(16, 13, 14, 12, '2018-12-18 10:16:06'),
(17, 13, 15, 12, '2018-12-18 10:16:06'),
(18, 13, 16, 12, '2018-12-18 10:16:06'),
(19, 14, 17, 11, '2018-12-18 10:20:10'),
(20, 14, 18, 11, '2018-12-18 10:20:10'),
(21, 14, 19, 11, '2018-12-18 10:20:10'),
(22, 15, 2, 2, '2018-12-18 10:24:35'),
(23, 16, 2, 2, '2018-12-18 10:26:56'),
(24, 17, 20, 13, '2018-12-18 10:32:42'),
(25, 18, 21, 13, '2018-12-18 10:39:32'),
(26, 18, 22, 13, '2018-12-18 10:39:32'),
(27, 19, 23, 14, '2018-12-18 10:43:53'),
(28, 20, 24, 15, '2018-12-18 10:46:54'),
(29, 21, 25, 16, '2018-12-18 10:49:52'),
(30, 22, 26, 17, '2018-12-18 10:53:55'),
(31, 23, 27, 18, '2018-12-18 10:57:28'),
(32, 24, 28, 19, '2018-12-18 11:03:50'),
(33, 25, 29, 20, '2018-12-18 11:30:00'),
(34, 26, 30, 21, '2018-12-18 11:34:28'),
(35, 27, 31, 22, '2018-12-18 11:40:23'),
(36, 28, 32, 23, '2018-12-18 11:50:35'),
(37, 29, 33, 24, '2018-12-18 11:55:01'),
(38, 30, 34, 25, '2018-12-18 12:00:24'),
(39, 31, 35, 13, '2018-12-18 12:03:46'),
(40, 32, 36, 13, '2018-12-18 12:10:47'),
(41, 33, 37, 13, '2018-12-18 12:16:10'),
(42, 34, 34, 25, '2018-12-18 12:22:10'),
(43, 35, 38, 16, '2018-12-18 12:26:37'),
(44, 36, 39, 6, '2018-12-18 12:39:05'),
(45, 37, 39, 26, '2018-12-18 13:49:16'),
(46, 38, 39, 6, '2018-12-18 13:52:20'),
(47, 39, 40, 27, '2018-12-18 13:56:40'),
(48, 40, 40, 27, '2018-12-18 14:00:35'),
(49, 41, 41, 28, '2018-12-18 14:05:59'),
(50, 42, 11, 9, '2018-12-18 14:09:02');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `image_tb`
--

CREATE TABLE `image_tb` (
  `id` int(250) NOT NULL,
  `bookid` int(250) NOT NULL,
  `file_name` varchar(300) NOT NULL,
  `is_cover` int(1) NOT NULL,
  `path` varchar(100) NOT NULL,
  `toc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tou` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_tb`
--

INSERT INTO `image_tb` (`id`, `bookid`, `file_name`, `is_cover`, `path`, `toc`, `tou`) VALUES
(1, 1, 'cdaab7c173d2e231aa5dd92f6a9775b2.jpg', 1, 'assets/images/album/1/cdaab7c173d2e231aa5dd92f6a9775b2.jpg', '2018-11-17 03:08:02', '2018-11-17 03:08:02'),
(2, 2, '5b3989b50648dcb525851478a3762b65.jpg', 1, 'assets/images/album/2/5b3989b50648dcb525851478a3762b65.jpg', '2018-11-17 03:08:02', '2018-11-17 03:08:02'),
(3, 3, '732d53246c42c807632e8ce2b7de36b5.jpg', 1, 'assets/images/album/3/732d53246c42c807632e8ce2b7de36b5.jpg', '2018-11-17 03:09:36', '2018-11-17 03:09:36'),
(4, 4, '83252d8d5158fd0070e69505e010acb7.jpg', 1, 'assets/images/album/4/83252d8d5158fd0070e69505e010acb7.jpg', '2018-11-17 03:10:28', '2018-11-17 03:10:28'),
(5, 5, 'd57e13369a195f657c7eb3eec491f848.jpg', 1, 'assets/images/album/5/d57e13369a195f657c7eb3eec491f848.jpg', '2018-11-17 03:23:52', '2018-11-17 03:23:52'),
(6, 6, '582ebe639c5210179670d9e7658c4848.jpg', 1, 'assets/images/album/6/582ebe639c5210179670d9e7658c4848.jpg', '2018-11-17 03:27:03', '2018-11-17 03:27:03'),
(7, 7, '59fc8e51aab37247c804ddf7316b8e0c.jpg', 1, 'assets/images/album/7/59fc8e51aab37247c804ddf7316b8e0c.jpg', '2018-11-17 03:31:12', '2018-11-17 03:31:12'),
(8, 8, '6e37135b9c6763e183554c4af53fa20d.jpg', 1, 'assets/images/album/8/6e37135b9c6763e183554c4af53fa20d.jpg', '2018-12-13 09:53:47', '2018-12-13 09:53:47'),
(9, 9, 'cfc595261edcf6e5db6be5d2466cfba4.jpg', 1, 'assets/images/album/9/cfc595261edcf6e5db6be5d2466cfba4.jpg', '2018-12-13 09:53:47', '2018-12-13 09:53:47'),
(10, 10, 'dcf666a85eeeaacc029f956de9c7cd7c.jpg', 1, 'assets/images/album/10/dcf666a85eeeaacc029f956de9c7cd7c.jpg', '2018-12-13 09:53:47', '2018-12-13 09:53:47'),
(11, 11, '932b537cf4f597af7fdc02910f44deef.jpg', 1, 'assets/images/album/11/932b537cf4f597af7fdc02910f44deef.jpg', '2018-12-13 09:53:47', '2018-12-13 09:53:47'),
(12, 12, '5bec4dc3854a2697ccbe8f466aee4ae4.jpg', 1, 'assets/images/album/12/5bec4dc3854a2697ccbe8f466aee4ae4.jpg', '2018-12-13 09:53:47', '2018-12-13 09:53:47'),
(13, 13, '9658735b9a8b4a97e1927703f5af2859.jpg', 1, 'assets/images/album/13/9658735b9a8b4a97e1927703f5af2859.jpg', '2018-12-18 09:16:38', '2018-12-18 09:16:38'),
(14, 14, '3389fd9eb018f92adfbc4eef2cdd45ba.jpg', 1, 'assets/images/album/14/3389fd9eb018f92adfbc4eef2cdd45ba.jpg', '2018-12-18 09:27:10', '2018-12-18 09:27:10'),
(15, 15, 'b4813805c5cc66f1ad5106087fd8280c.jpg', 1, 'assets/images/album/15/b4813805c5cc66f1ad5106087fd8280c.jpg', '2018-12-18 09:33:50', '2018-12-18 09:33:50'),
(16, 16, 'e9615caf862e1c7ed80cddf7fd2066e0.jpg', 1, 'assets/images/album/16/e9615caf862e1c7ed80cddf7fd2066e0.jpg', '2018-12-18 09:39:05', '2018-12-18 09:39:05'),
(17, 17, 'bf16cab60885062db2fafeeb7ed86bf9.jpg', 1, 'assets/images/album/17/bf16cab60885062db2fafeeb7ed86bf9.jpg', '2018-12-18 09:47:06', '2018-12-18 09:47:06'),
(18, 18, '74517caa64585deabcece78690ebf415.jpg', 1, 'assets/images/album/18/74517caa64585deabcece78690ebf415.jpg', '2018-12-18 10:16:06', '2018-12-18 10:16:06'),
(19, 19, '2c058b951c09ca850f74ff2d154d8f6f.jpg', 1, 'assets/images/album/19/2c058b951c09ca850f74ff2d154d8f6f.jpg', '2018-12-18 10:20:10', '2018-12-18 10:20:10'),
(20, 20, '92c85690dba56d7aae700c9a2ab36648.jpg', 1, 'assets/images/album/20/92c85690dba56d7aae700c9a2ab36648.jpg', '2018-12-18 10:24:35', '2018-12-18 10:24:35'),
(21, 21, '1c3208c20f2489066d328fdf015cbf00.jpg', 1, 'assets/images/album/21/1c3208c20f2489066d328fdf015cbf00.jpg', '2018-12-18 10:26:56', '2018-12-18 10:26:56'),
(22, 22, '1bb2298fb6a904263fbc2baad68feee8.jpg', 1, 'assets/images/album/22/1bb2298fb6a904263fbc2baad68feee8.jpg', '2018-12-18 10:32:42', '2018-12-18 10:32:42'),
(23, 23, '60c301a81491ade3fc16866bae2412a2.jpg', 1, 'assets/images/album/23/60c301a81491ade3fc16866bae2412a2.jpg', '2018-12-18 10:39:32', '2018-12-18 10:39:32'),
(24, 24, '2d11eab2ca7550568a0ca1fd1cbcb257.jpg', 1, 'assets/images/album/24/2d11eab2ca7550568a0ca1fd1cbcb257.jpg', '2018-12-18 10:43:53', '2018-12-18 10:43:53'),
(25, 25, '7b99bad3544b4ae191673b1c356e6efd.jpg', 1, 'assets/images/album/25/7b99bad3544b4ae191673b1c356e6efd.jpg', '2018-12-18 10:46:55', '2018-12-18 10:46:55'),
(26, 26, '9a195d0de2ec05de5c1cef4b61920d99.jpg', 1, 'assets/images/album/26/9a195d0de2ec05de5c1cef4b61920d99.jpg', '2018-12-18 10:49:52', '2018-12-18 10:49:52'),
(27, 27, 'd0bf9d454c5c3d402b6f639e20af3441.jpg', 1, 'assets/images/album/27/d0bf9d454c5c3d402b6f639e20af3441.jpg', '2018-12-18 10:53:55', '2018-12-18 10:53:55'),
(28, 28, 'c02aa4b5599f4a9bf7a83bb4e796926f.jpg', 1, 'assets/images/album/28/c02aa4b5599f4a9bf7a83bb4e796926f.jpg', '2018-12-18 10:57:28', '2018-12-18 10:57:28'),
(29, 29, 'a287390f6cb1f9f93996e976f119617f.jpg', 1, 'assets/images/album/29/a287390f6cb1f9f93996e976f119617f.jpg', '2018-12-18 11:03:50', '2018-12-18 11:03:50'),
(30, 30, '340715c1e378896228cf9393e76433e0.jpg', 1, 'assets/images/album/30/340715c1e378896228cf9393e76433e0.jpg', '2018-12-18 11:30:00', '2018-12-18 11:30:00'),
(31, 31, 'a5c718eea87f8b8a6e726196754b293b.jpg', 1, 'assets/images/album/31/a5c718eea87f8b8a6e726196754b293b.jpg', '2018-12-18 11:34:28', '2018-12-18 11:34:28'),
(32, 32, '14199dec532b11a659c856543140be31.jpg', 1, 'assets/images/album/32/14199dec532b11a659c856543140be31.jpg', '2018-12-18 11:40:23', '2018-12-18 11:40:23'),
(33, 33, 'd75185120a45bcf320dbfd644c73f630.jpg', 1, 'assets/images/album/33/d75185120a45bcf320dbfd644c73f630.jpg', '2018-12-18 11:50:35', '2018-12-18 11:50:35'),
(34, 34, '288379bd1e985c4a5275473cc61fc7e7.jpg', 1, 'assets/images/album/34/288379bd1e985c4a5275473cc61fc7e7.jpg', '2018-12-18 11:55:01', '2018-12-18 11:55:01'),
(35, 35, 'd8fb2edc33009515239beeb4d53a8ee2.jpg', 1, 'assets/images/album/35/d8fb2edc33009515239beeb4d53a8ee2.jpg', '2018-12-18 12:00:24', '2018-12-18 12:00:24'),
(36, 36, 'f7933a3451f47ce909a350fb301f633b.jpg', 1, 'assets/images/album/36/f7933a3451f47ce909a350fb301f633b.jpg', '2018-12-18 12:03:46', '2018-12-18 12:03:46'),
(37, 40, 'b3ceb3cdd44b22899940c45675a6fc56.jpg', 1, 'assets/images/album/40/b3ceb3cdd44b22899940c45675a6fc56.jpg', '2018-12-18 12:10:48', '2018-12-18 12:10:48'),
(38, 41, 'f99a33553da348ce4038d2699af6c245.jpg', 1, 'assets/images/album/41/f99a33553da348ce4038d2699af6c245.jpg', '2018-12-18 12:16:10', '2018-12-18 12:16:10'),
(39, 42, '9be1b91fa609d1606380d9bc3c3ba002.jpg', 1, 'assets/images/album/42/9be1b91fa609d1606380d9bc3c3ba002.jpg', '2018-12-18 12:22:11', '2018-12-18 12:22:11'),
(40, 43, '73fa7913feb71e69dae5063faa9819e7.jpg', 1, 'assets/images/album/43/73fa7913feb71e69dae5063faa9819e7.jpg', '2018-12-18 12:26:37', '2018-12-18 12:26:37'),
(41, 44, 'c6ae8e1c1e71174dacede0a1f6fa0681.jpg', 1, 'assets/images/album/44/c6ae8e1c1e71174dacede0a1f6fa0681.jpg', '2018-12-18 12:39:05', '2018-12-18 12:39:05'),
(42, 45, '6c464b91cef89a4150c058e74edc4f63.jpg', 1, 'assets/images/album/45/6c464b91cef89a4150c058e74edc4f63.jpg', '2018-12-18 13:49:17', '2018-12-18 13:49:17'),
(43, 46, '0afec7c7f434660f4eadea21de152302.jpg', 1, 'assets/images/album/46/0afec7c7f434660f4eadea21de152302.jpg', '2018-12-18 13:52:20', '2018-12-18 13:52:20'),
(44, 48, '05f6dd47aaf8398dab09dfdc716f24d0.jpg', 1, 'assets/images/album/48/05f6dd47aaf8398dab09dfdc716f24d0.jpg', '2018-12-18 13:56:40', '2018-12-18 13:56:40'),
(45, 49, '4971c44bf4c64870a74482accff322a6.jpg', 1, 'assets/images/album/49/4971c44bf4c64870a74482accff322a6.jpg', '2018-12-18 14:00:35', '2018-12-18 14:00:35'),
(46, 50, 'f954097d63098ecc365df35f6700e123.jpg', 1, 'assets/images/album/50/f954097d63098ecc365df35f6700e123.jpg', '2018-12-18 14:05:59', '2018-12-18 14:05:59'),
(47, 51, '627676518d561ace773b57c76869d277.jpg', 1, 'assets/images/album/51/627676518d561ace773b57c76869d277.jpg', '2018-12-18 14:09:02', '2018-12-18 14:09:02');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(3, '127.0.0.1', 'luke@hobbs.com', 1545053740);

-- --------------------------------------------------------

--
-- Table structure for table `order_tb`
--

CREATE TABLE `order_tb` (
  `id` int(250) NOT NULL,
  `bookid` int(250) NOT NULL,
  `customerid` int(250) NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `qty` int(10) NOT NULL,
  `status` int(1) NOT NULL,
  `toc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `paymentStatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `id` int(250) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `toc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`id`, `pname`, `toc`) VALUES
(1, 'Harper', '2018-11-17 03:08:02'),
(2, 'Egmont', '2018-11-17 03:09:35'),
(3, 'Virgin Books', '2018-11-17 03:10:28'),
(4, 'Fingerprint', '2018-11-17 03:23:52'),
(5, 'PHI Learning Pvt. Ltd. (Originally MIT Press)', '2018-11-17 03:27:03'),
(6, 'Westland', '2018-11-17 03:31:12'),
(7, 'Hodder & Stoughton', '2018-12-13 09:53:47'),
(8, 'Rupa Publications India', '2018-12-18 09:16:38'),
(9, 'Made Easy Publications', '2018-12-18 09:33:50'),
(10, 'Arihant', '2018-12-18 09:39:05'),
(11, 'Dreamtech Press', '2018-12-18 09:47:06'),
(12, 'Wiley', '2018-12-18 10:16:06'),
(13, 'Harpercollins', '2018-12-18 10:32:42'),
(14, 'Amazing Reads', '2018-12-18 10:43:53'),
(15, 'Little, Brown Book Group', '2018-12-18 10:46:54'),
(16, 'Penguin UK', '2018-12-18 10:49:52'),
(17, 'Pan', '2018-12-18 10:53:55'),
(18, 'TreeShade Books', '2018-12-18 10:57:28'),
(19, 'Createspace Independent Pub', '2018-12-18 11:03:50'),
(20, 'Createspace Independent Pub;', '2018-12-18 11:30:00'),
(21, 'Penguin Random House', '2018-12-18 11:34:28'),
(22, 'Icon', '2018-12-18 11:40:23'),
(23, 'Amazon Asia-Pacific Holdings Private Limited', '2018-12-18 11:50:35'),
(24, 'Westland Sport', '2018-12-18 11:55:01'),
(25, 'Aleph Book Company', '2018-12-18 12:00:24'),
(26, 'Westland Books Pvt. Ltd.', '2018-12-18 13:49:16'),
(27, 'Bloomsbury Press', '2018-12-18 13:56:40'),
(28, 'IES Master Publication', '2018-12-18 14:05:59');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(250) NOT NULL,
  `cid` int(250) NOT NULL,
  `bookid` int(250) NOT NULL,
  `rating` int(1) NOT NULL,
  `toc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `cid`, `bookid`, `rating`, `toc`) VALUES
(1, 4, 5, 3, '2018-12-15 09:19:01'),
(2, 3, 5, 4, '2018-12-15 09:20:39'),
(3, 3, 1, 5, '2018-12-15 09:22:35'),
(4, 3, 1, 4, '2018-12-15 09:24:17'),
(5, 3, 5, 1, '2018-12-17 14:03:10'),
(6, 3, 3, 1, '2018-12-17 14:03:10'),
(7, 3, 10, 1, '2018-12-17 17:03:42');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(250) NOT NULL,
  `ionid` int(200) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zip` int(6) NOT NULL,
  `country` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `emailVerified` tinyint(4) NOT NULL,
  `toc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `ionid`, `name`, `email`, `password`, `phone`, `city`, `state`, `zip`, `country`, `address`, `emailVerified`, `toc`, `status`) VALUES
(4, 9, 'Arrow Queen', 'xyz@abc.com', '$2y$08$e8Qq2pu5rP8YhtNHtL5/7ePsjxNrLRZm33X6TyOZLAlUJby7r6rey', 9876543210, 'Kolkata', 'West Bengal', 711002, 'India', '79D, M. G. Road.', 0, '2018-10-23 15:08:12', 1),
(5, 10, 'Seller2 S', 'abc@abc.com', '$2y$08$3tXFEaTzPIaTq/7sMgnuMOyX2r.XdatG/7CqlEsdbEFAFKldyaWu6', 9000009870, 'Howrah', 'West Bengal', 710110, 'India', 'Ichapur Howrah', 0, '2018-10-23 15:52:43', 1),
(6, 11, 'Seller3 S', 'seller3@abc.com', '$2y$08$dH6X8pIfVmK50vmOhQSRxuNzHO5Jw7fPNMlxaziwq7SJJO5rYDtsW', 9100009870, 'Howrah', 'West Bengal', 711002, 'India', '79D, M. G. Road.', 0, '2018-10-28 16:29:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `topten`
--

CREATE TABLE `topten` (
  `id` int(250) NOT NULL,
  `bookname` varchar(250) NOT NULL,
  `discountid` int(250) NOT NULL,
  `toc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topten`
--

INSERT INTO `topten` (`id`, `bookname`, `discountid`, `toc`) VALUES
(32, 'Lucky Its Diwali', 40, '2018-12-18 12:10:47'),
(33, 'These are a Few of My Favourite Things: Ruskin Bond', 41, '2018-12-18 12:16:10'),
(34, 'Why I Am a Hindu', 42, '2018-12-18 12:22:10'),
(35, 'The Argumentative Indian: Writings on Indian History, Culture and Identity', 43, '2018-12-18 12:26:37'),
(36, 'The Immortals of Meluha (Shiva Trilogy)', 44, '2018-12-18 12:39:05'),
(37, 'The Secret Of The Nagas (Shiva Trilogy-2)', 45, '2018-12-18 13:49:16'),
(38, 'The Oath of The Vayuputras (Shiva Trilogy Book 3)', 46, '2018-12-18 13:52:20'),
(39, 'Harry Potter and the Philosophers Stone', 48, '2018-12-18 13:56:39'),
(40, 'Harry Potter and the Chamber of Secrets', 49, '2018-12-18 14:00:35'),
(41, 'GATE 2019 Civil Engineering (32 Years Solution)', 50, '2018-12-18 14:05:58'),
(42, 'A Handbook on Civil Engineering (Illustrated Formulae and Key Theory Concepts)', 51, '2018-12-18 14:09:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(200) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1540219394, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(9, '127.0.0.1', 'xyz@abc.com', '$2y$08$e8Qq2pu5rP8YhtNHtL5/7ePsjxNrLRZm33X6TyOZLAlUJby7r6rey', NULL, 'xyz@abc.com', NULL, NULL, NULL, NULL, 1540225040, 1544627662, 1, 'Arrow', 'Queen', 'Merlin', '9876543210'),
(10, '127.0.0.1', 'abc@abc.com', '$2y$08$3tXFEaTzPIaTq/7sMgnuMOyX2r.XdatG/7CqlEsdbEFAFKldyaWu6', NULL, 'abc@abc.com', NULL, NULL, NULL, NULL, 1540309803, 1545118636, 1, 'Seller2', 'S', 'ABC Pvt Ltd', '9000009870'),
(11, '127.0.0.1', 'seller3@abc.com', '$2y$08$dH6X8pIfVmK50vmOhQSRxuNzHO5Jw7fPNMlxaziwq7SJJO5rYDtsW', NULL, 'seller3@abc.com', NULL, NULL, NULL, NULL, 1540724314, 1545132274, 1, 'Seller 3', 'S', 'Merlin', '9100009870');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(12, 9, 2),
(13, 10, 2),
(14, 11, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookedition`
--
ALTER TABLE `bookedition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookstoedition`
--
ALTER TABLE `bookstoedition`
  ADD PRIMARY KEY (`id`),
  ADD KEY `editionid` (`editionid`),
  ADD KEY `bookid` (`bookid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_book2_cart` (`bookid`),
  ADD KEY `fk_customer2_cart` (`customerid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`phone`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sell_to_book` (`sellerid`),
  ADD KEY `fk_book_to_sell` (`bookid`);

--
-- Indexes for table `editiontoauthor`
--
ALTER TABLE `editiontoauthor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `editionid` (`editionid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `authorid` (`authorid`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_tb`
--
ALTER TABLE `image_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookid` (`bookid`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_tb`
--
ALTER TABLE `order_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_book2_order` (`bookid`),
  ADD KEY `fk_customer2_order` (`customerid`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cid` (`cid`),
  ADD KEY `bookid` (`bookid`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`phone`,`address`),
  ADD KEY `ionid` (`ionid`);

--
-- Indexes for table `topten`
--
ALTER TABLE `topten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `bookedition`
--
ALTER TABLE `bookedition`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `bookstoedition`
--
ALTER TABLE `bookstoedition`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `editiontoauthor`
--
ALTER TABLE `editiontoauthor`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `image_tb`
--
ALTER TABLE `image_tb`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_tb`
--
ALTER TABLE `order_tb`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `topten`
--
ALTER TABLE `topten`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(200) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookstoedition`
--
ALTER TABLE `bookstoedition`
  ADD CONSTRAINT `bookstoedition_ibfk_1` FOREIGN KEY (`editionid`) REFERENCES `bookedition` (`id`),
  ADD CONSTRAINT `bookstoedition_ibfk_2` FOREIGN KEY (`bookid`) REFERENCES `books` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_book2_cart` FOREIGN KEY (`bookid`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `fk_customer2_cart` FOREIGN KEY (`customerid`) REFERENCES `customer` (`id`);

--
-- Constraints for table `discount`
--
ALTER TABLE `discount`
  ADD CONSTRAINT `fk_book_to_sell` FOREIGN KEY (`bookid`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `fk_sell_to_book` FOREIGN KEY (`sellerid`) REFERENCES `seller` (`id`);

--
-- Constraints for table `editiontoauthor`
--
ALTER TABLE `editiontoauthor`
  ADD CONSTRAINT `editiontoauthor_ibfk_1` FOREIGN KEY (`editionid`) REFERENCES `bookedition` (`id`),
  ADD CONSTRAINT `editiontoauthor_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `publisher` (`id`),
  ADD CONSTRAINT `editiontoauthor_ibfk_3` FOREIGN KEY (`authorid`) REFERENCES `author` (`id`);

--
-- Constraints for table `image_tb`
--
ALTER TABLE `image_tb`
  ADD CONSTRAINT `image_tb_ibfk_1` FOREIGN KEY (`bookid`) REFERENCES `books` (`id`);

--
-- Constraints for table `order_tb`
--
ALTER TABLE `order_tb`
  ADD CONSTRAINT `fk_book2_order` FOREIGN KEY (`bookid`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `fk_customer2_order` FOREIGN KEY (`customerid`) REFERENCES `customer` (`id`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`bookid`) REFERENCES `books` (`id`);

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
