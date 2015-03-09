-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2015 at 11:07 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `take_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `name` char(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `uname` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `country` char(15) DEFAULT NULL,
  `mob` int(10) NOT NULL,
  `dob` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`name`, `email`, `uname`, `password`, `country`, `mob`, `dob`) VALUES
('Fatima Mulla', 'fatima.mulla766@gmail.com', 'F03', 'F03F03F03', 'INDIA', 766600515, '1995-01-12');

-- --------------------------------------------------------

--
-- Table structure for table `blog_data`
--

CREATE TABLE IF NOT EXISTS `blog_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) NOT NULL,
  `title` varchar(30) NOT NULL,
  `image` varchar(300) DEFAULT NULL,
  `data` varchar(4000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `blog_data`
--

INSERT INTO `blog_data` (`id`, `uname`, `title`, `image`, `data`) VALUES
(16, 'F03', '7 Tips to Make Your Workplace ', '1918426073_7616ce54e1.jpg', 'Itâ€™s true â€“ job stress can lead to a series of health issues like high blood pressure, chronic migraines, and weight gain. When you sit in your cubicle or office for the bulk of the day, it gets hard to incorporate activity. Also, many people are too tired to go to the gym after a long day of work. So, here are a few tips for keeping your blood flowing during the work day. Not only do these activities help me physically, but they also may keep me motivated and refreshed at work.\r\n\r\n1. Take the stairs rather than the elevator\r\n2. Use a pedometer\r\n3. Give your eyes a break from the computer screen\r\n4. Keep ankle weights underneath your desk\r\n5. Use an exercise ball instead of a desk chair\r\n6. Have a stress ball handy\r\n7. Stay flexible'),
(19, 'F03', 'Treating children with cancer:', 'Braincancerpic-Cropped-500x3321.jpg', '- Look how far weâ€™ve come!\r\n\r\nCancer deaths in children and young people have fallen by almost 60% in the past 40 years, according to figures released by Cancer Research UK yesterday. What fantastic news! Progress in cancer treatments have cut\r\ncancer deaths in the under 24s from around 1,300 a year in the mid-1970s to around 550 today.\r\n\r\n- But..\r\n\r\nLetâ€™s not forget that cancer is still the leading cause of death in children and of death by disease in teenagers and young adults in the UK, and that\r\ncancer and its treatment has a huge impact on these young ones, many of\r\nwhom will have to live with side effects (such as infertility and hearing loss)throughout their lives. Along with releasing these figures, the charity has launched Cancer Research UK Kids & Teens â€“ an ongoing campaign to FUND more research to find better, kinder treatments and cures to beat cancer in younger people sooner.\r\n\r\n- Itâ€™s not just about survival\r\n\r\nFor any child or young person with cancer,and their family, â€œam I going to get better?â€ may be the first and most important question. But cancer treatments can wreak their own havoc on the body and itâ€™s important to know how we can reduce the risk of side effects and permanent damage. Some recent Cochrane reviews have looked at the effectiveness and harms of childhood cancer treatments. Cochrane reviews are independent, reliable evidence summaries which show us what is known about the benefits and harms of treatments and where there is a need for high quality research. \r\n\r\n- Anthracyclines and heart damage \r\n\r\nAnthracyclines are used for treating a number of childhood cancers but can damage the heart. This can show up during treatment but also years later. So a decision to use anthracyclines should take into account evidence about its anti-tumour effects and the risk of heart damage. A Cochrane review comparing treatment with and without anthracyclines for childhood cancers found no high quality evidence that treatment for acute lymphoblastic leukaemia (ALL) which includes anthracyclines is more effective. Individual studies suggest this might be the case but this needs investigating in more trials. There were some trials with children with other types of cancers but too few to be able to draw conclusions. The reviewers found five ongoing or unpublished randomised studies evaluating the use of anthracyclines in children with hepatoblastoma, ALL (two studies), rhabdomyosarcoma, and Wilmsâ€™ tumour.\r\n\r\n- We also need to talk\r\n\r\n Itâ€™s my friend Sylviaâ€™s birthday on Wednesday. She shared her birthday with her son Matthew. But Matthew died a few weeks short of his 18th birthday, 24 years ago. I was a staff nurse on the childrenâ€™s cancer ward where Matthew was a patient and over the months I was privileged to look after this young man became close to his family. Communication was, of course, key through this time. But, all these years on, Iâ€™m wondering how Sylvia views that time in terms of how we all talked about, and with, Matthew and what he was going through. How have things changed in terms of talking about cancer with children and young people, and their families? Do we have any evidence to help us know how to communicate well? Iâ€™ll be returning to this important topic, and Sylvia will be sharing some thoughts, in a future blog');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `content` int(11) DEFAULT '0',
  `ease` int(11) DEFAULT '0',
  `visual` int(11) DEFAULT '0',
  `recommend` int(11) NOT NULL DEFAULT '0',
  `rate` int(11) NOT NULL DEFAULT '0',
  `best` varchar(30) NOT NULL,
  `suggestion` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `content`, `ease`, `visual`, `recommend`, `rate`, `best`, `suggestion`) VALUES
(5, 'FATIMA MULLA', 'fatima.mulla766@gmai', 2, 1, 2, 1, 2, 'navigation', 'visuals'),
(6, 'Aqsa Parmar', 'akshaparmar7@gmail.c', 2, 1, 2, 1, 2, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `test_image`
--

CREATE TABLE IF NOT EXISTS `test_image` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL DEFAULT '',
  `img` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `test_image`
--

INSERT INTO `test_image` (`id`, `name`, `img`) VALUES
(1, 'hii', 'Diabetes-is-killing-one-patien'),
(2, 'hii', 'Diabetes-is-killing-one-patien'),
(3, 'hii', 'Diabetes-is-killing-one-patien'),
(4, 'hii', 'Diabetes-is-killing-one-patien'),
(5, 'hii', 'Diabetes-is-killing-one-patient-every-six-seconds.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` char(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `uname` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `country` char(15) DEFAULT NULL,
  `mob` int(10) NOT NULL,
  `dob` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `uname`, `password`, `country`, `mob`, `dob`) VALUES
('Aqsa Parmar', 'akshaparmar7@gmail.com', 'aqsa', '12345678', 'INDIA', 2147483647, '1994-01-01'),
('sarah', 'sarah@gmail.com', 'sarah', '12345678', 'INDIA', 2147483647, '1995-02-02'),
('savitha nair', 'nsavithanair@gmaill.com', 'savi', '12345678', 'INDIA', 2147483647, '1994-10-03');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
