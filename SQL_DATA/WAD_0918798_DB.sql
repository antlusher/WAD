-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 14, 2012 at 01:10 PM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `app_dev_sport`
--

-- --------------------------------------------------------

--
-- Table structure for table `adverts`
--

CREATE TABLE `adverts` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `advert_type` int(45) NOT NULL,
  `click_rate` int(45) DEFAULT NULL,
  `link` varchar(45) NOT NULL DEFAULT 'http://www.google.co.uk',
  `image` varchar(45) NOT NULL DEFAULT 'images/adverts/',
  `discription` varchar(255) NOT NULL DEFAULT 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
  PRIMARY KEY (`id`),
  KEY `advert_image` (`advert_type`),
  KEY `advert_type` (`advert_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `adverts`
--

INSERT INTO `adverts` (`id`, `advert_type`, `click_rate`, `link`, `image`, `discription`) VALUES
(1, 1, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(2, 2, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(3, 3, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(4, 4, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(5, 5, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(6, 6, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(7, 7, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(8, 8, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(9, 9, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(10, 10, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(11, 11, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(12, 12, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(13, 13, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(14, 14, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(15, 15, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(16, 16, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(17, 17, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(18, 18, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(19, 19, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(20, 20, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(21, 21, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(22, 22, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(23, 23, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(24, 24, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(25, 25, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(26, 26, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(27, 27, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(28, 28, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(29, 29, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(30, 30, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(31, 31, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(32, 32, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(33, 33, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(34, 34, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(35, 1, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(36, 2, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(37, 3, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(38, 4, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(39, 5, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(40, 6, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(41, 7, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(42, 8, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(43, 9, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(44, 10, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(45, 11, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(46, 12, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(47, 13, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(48, 14, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(49, 15, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(50, 16, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(51, 17, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(52, 18, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(53, 19, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(54, 20, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(55, 21, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(56, 22, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(57, 23, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(58, 24, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(59, 25, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(60, 26, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(61, 27, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(62, 28, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(63, 29, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(64, 30, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(66, 31, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(67, 32, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(68, 33, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(69, 34, NULL, 'http://www.google.co.uk', 'images/adverts/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `time` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`time`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forum_categories`
--

CREATE TABLE `forum_categories` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `category_title` varchar(150) NOT NULL,
  `category_description` varchar(255) NOT NULL,
  `last_post_date` datetime DEFAULT NULL,
  `last_user_posted` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `forum_categories`
--

INSERT INTO `forum_categories` (`id`, `category_title`, `category_description`, `last_post_date`, `last_user_posted`) VALUES
(3, 'Football', 'Football mad people only!', '2012-12-11 15:24:46', 92),
(11, 'Running', 'Post here all you running types', '2012-12-11 15:25:16', 11);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` tinyint(4) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `post_creator` int(11) NOT NULL,
  `post_content` text NOT NULL,
  `post_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=89 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `topic_id`, `post_creator`, `post_content`, `post_date`) VALUES
(80, 11, 14, 39, '', '2012-12-07 12:05:57'),
(81, 11, 15, 39, 'Hey, lets all meet in Greenwich Park!!!', '2012-12-07 12:10:09'),
(82, 3, 18, 52, 'oknfwejdknweklfnwlkenflkn', '2012-12-09 16:22:48'),
(83, 3, 19, 52, 'oknfwejdknweklfnwlkenflkn', '2012-12-09 16:22:54'),
(84, 3, 18, 50, 'very funny', '2012-12-10 14:36:19'),
(85, 11, 14, 90, 'Woooooo it woooooorrrrrkkkkksssss', '2012-12-10 21:46:56'),
(86, 11, 19, 90, 'Hey, is anyone running this year?', '2012-12-10 21:54:15'),
(87, 3, 18, 92, 'isuegtiuewhrfhefherthoi', '2012-12-11 15:24:46'),
(88, 11, 20, 92, 'pwojefpojewriogjeiohrgfiouhewfu', '2012-12-11 15:25:16');

-- --------------------------------------------------------

--
-- Table structure for table `sport_activity`
--

CREATE TABLE `sport_activity` (
  `sport_id` int(11) NOT NULL,
  `sport_name` varchar(45) DEFAULT NULL,
  `sport_catergory_catergory_id` int(11) NOT NULL,
  PRIMARY KEY (`sport_id`,`sport_catergory_catergory_id`),
  KEY `fk_sport_activity_sport_catergory1_idx` (`sport_catergory_catergory_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sport_activity`
--

INSERT INTO `sport_activity` (`sport_id`, `sport_name`, `sport_catergory_catergory_id`) VALUES
(1, 'Archery', 1),
(2, 'Athletics', 1),
(3, 'Badminton', 1),
(4, 'Beach Volleyball', 2),
(5, 'Boxing', 7),
(6, 'Basketball', 2),
(7, 'Canoe Slalom', 9),
(8, 'Canoe Sprint', 9),
(9, 'BMX', 5),
(10, 'Mountain Biking', 5),
(11, 'Road', 5),
(12, 'Track', 5),
(13, 'Diving', 8),
(14, 'Equestrian', 1),
(15, 'Fencing', 7),
(16, 'Football', 2),
(17, 'Artistic', 6),
(18, 'Rhythmic', 6),
(19, 'Handball', 2),
(20, 'Hockey', 1),
(21, 'Judo', 7),
(22, 'Modern Pentathion', 1),
(23, 'Rowing', 9),
(24, 'Sailing', 9),
(25, 'Shooting', 1),
(26, 'Swimming', 8),
(27, 'Synchronised Swimming', 8),
(28, 'Table Tennis', 1),
(29, 'Taekwondo', 7),
(30, 'Tennis', 1),
(31, 'Trampoline', 6),
(32, 'Triathlon', 1),
(33, 'Volleyball', 2),
(34, 'Water Polo', 9);

-- --------------------------------------------------------

--
-- Table structure for table `sport_catergory`
--

CREATE TABLE `sport_catergory` (
  `catergory_id` int(11) NOT NULL AUTO_INCREMENT,
  `sport_type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`catergory_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `sport_catergory`
--

INSERT INTO `sport_catergory` (`catergory_id`, `sport_type`) VALUES
(1, 'Racquet'),
(2, 'Ball'),
(5, 'Cycling'),
(6, 'Gymnastics'),
(7, 'Martial Art'),
(8, 'Swimming'),
(9, 'Water');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` tinyint(4) NOT NULL,
  `topic_title` varchar(150) NOT NULL,
  `topic_creator` int(11) NOT NULL,
  `topic_last_user` int(11) DEFAULT NULL,
  `topic_date` datetime NOT NULL,
  `topic_reply_date` datetime NOT NULL,
  `topic_views` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `category_id`, `topic_title`, `topic_creator`, `topic_last_user`, `topic_date`, `topic_reply_date`, `topic_views`) VALUES
(14, 11, 'Lets go running - Norfolk', 39, 90, '2012-12-07 12:05:57', '2012-12-10 21:46:56', 5),
(15, 11, 'Lets go running - London', 39, NULL, '2012-12-07 12:10:09', '2012-12-07 12:10:09', 4),
(18, 3, 'owjrfoijfoin', 52, 92, '2012-12-09 16:22:48', '2012-12-11 15:24:46', 14),
(19, 11, 'London Marathon', 90, NULL, '2012-12-10 21:54:15', '2012-12-10 21:54:15', 1),
(20, 11, 'Hey', 92, NULL, '2012-12-11 15:25:16', '2012-12-11 15:25:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(45) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `password_recovered` int(11) NOT NULL DEFAULT '0',
  `active` int(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `email_code` varchar(32) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `city` varchar(30) DEFAULT NULL,
  `profile` varchar(52) NOT NULL DEFAULT 'images/profiles/f3c61e5a3f.png',
  `user_description` varchar(255) NOT NULL DEFAULT 'User has not yet added a description....',
  `forum_notification` enum('0','1') NOT NULL DEFAULT '1',
  `sport_activity_sport_id` int(11) DEFAULT '0',
  `advert_id` int(45) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  KEY `password` (`password`),
  KEY `password_2` (`password`),
  KEY `password_3` (`password`),
  KEY `user_id` (`user_id`),
  KEY `sport_activity_sport_catergory_2` (`sport_activity_sport_id`),
  KEY `sport_activity_sport_id` (`sport_activity_sport_id`),
  KEY `advert_id` (`advert_id`),
  KEY `advert_id_2` (`advert_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=94 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password`, `password_recovered`, `active`, `email`, `email_code`, `last_name`, `first_name`, `city`, `profile`, `user_description`, `forum_notification`, `sport_activity_sport_id`, `advert_id`) VALUES
(39, 'ant123', 'f332166105029e86f8dfb00ce1798765', 1, 1, 'bob@123.com', '', 'Lusher', 'Anthony', 'London', 'images/profiles/5d666f436b.jpg', 'iorhjgoihjeroighjoewhfgoiheoighj', '1', 1, 1),
(40, 'bob123', '73b9ad8c02059b230b4fd1382d17eca5', 1, 1, 'bobby@hotmail.com', '', 'Paul', 'Bob', 'Norwich', 'images/profiles/9288bec84c.jpg', 'User has not yet added a description....', '1', 2, 2),
(50, 'antlusher', 'd1e17328d7c4349015a02173b65bb27f', 1, 1, 'antlusher@me.com', '', 'Lusher', 'Anthony', 'Norwich', 'images/profiles/451b5e8311.jpg', 'Hello everyone. I like Boxing......', '1', 5, 5),
(52, 'antlusher123', '73b9ad8c02059b230b4fd1382d17eca5', 0, 1, 'lusher@me.com', '', 'Lusher', 'Anthony', 'Poole', 'images/profiles/8c1a42e046.jpg', 'wprjgkjergkjiorgj', '1', 6, 6),
(53, 'jeff123', '73b9ad8c02059b230b4fd1382d17eca5', 0, 1, 'jeff@me.com', '', 'smith', 'jeff', 'Manchester', 'images/profiles/48524381fb.jpg', 'User has not yet added a description....', '1', 8, 8),
(54, 'claire123', '73b9ad8c02059b230b4fd1382d17eca5', 0, 1, 'nasha@gmail.com', '', 'Nash', 'Claire', 'London', 'images/profiles/a75eaca324.jpg', 'User has not yet added a description....', '1', 12, 12),
(55, 'cole123', '73b9ad8c02059b230b4fd1382d17eca5', 0, 1, 'cole@gmail.com', '', 'Nash', 'cole', 'London', 'images/profiles/359878bd20.jpg', 'User has not yet added a description....', '1', 10, 10),
(56, 'billy123', '73b9ad8c02059b230b4fd1382d17eca5', 0, 1, 'billy@me.com', '', 'Bob', 'Billy', 'Norwich', 'images/profiles/261987f67b.jpg', 'User has not yet added a description....', '1', 4, 4),
(57, 'paul123', '73b9ad8c02059b230b4fd1382d17eca5', 0, 1, 'paul123@me.com', '', 'Lusher', 'Paul', 'Greenford', 'images/profiles/0c2c9efb29.jpg', 'hello world', '1', 8, 8),
(58, 'bessy123', '73b9ad8c02059b230b4fd1382d17eca5', 0, 1, 'bessy123@me.com', '', 'Bob', 'Bessy', 'York', 'images/profiles/403376280d.jpg', 'User has not yet added a description....', '1', 3, 3),
(59, 'elf123', '73b9ad8c02059b230b4fd1382d17eca5', 0, 1, 'holly@gmail.com', '', 'Holly', 'Elf', 'Bath', 'images/profiles/f3c61e5a3f.png', 'User has not yet added a description....', '1', 18, 18),
(61, 'vic123', '73b9ad8c02059b230b4fd1382d17eca5', 0, 1, 'vic123@me.com', '', 'Smith', 'Victor', 'Kings Lynn', 'images/profiles/f3c61e5a3f.png', 'User has not yet added a description....', '1', 29, 29),
(62, 'dave123', '73b9ad8c02059b230b4fd1382d17eca5', 0, 1, 'dave@me.com', '', 'Smith', 'Dave', 'Kings Lynn', 'images/profiles/f3c61e5a3f.png', 'User has not yet added a description....', '1', 16, 16),
(63, 'carol123', '73b9ad8c02059b230b4fd1382d17eca5', 0, 1, 'cag@me.com', '', 'Lusher', 'Carol', 'Kings Lynn', 'images/profiles/f3c61e5a3f.png', 'User has not yet added a description....', '1', 15, 15),
(64, 'elly123', '73b9ad8c02059b230b4fd1382d17eca5', 0, 1, 'el123@me.com', '', 'Smith', 'El', 'Kings Lynn', 'images/profiles/f3c61e5a3f.png', 'User has not yet added a description....', '1', 20, 20),
(65, 'elvis', '73b9ad8c02059b230b4fd1382d17eca5', 0, 1, 'elvis@me.com', '', 'Costello', 'Elvis', 'London', 'images/profiles/f3c61e5a3f.png', 'User has not yet added a description....', '1', 4, 4),
(71, 'harry1234', '73b9ad8c02059b230b4fd1382d17eca5', 0, 1, 'h123@me.com', '', 'Smith', 'Harry', 'London', 'images/profiles/f3c61e5a3f.png', 'User has not yet added a description....', '1', 9, 9),
(72, 'sam123', '73b9ad8c02059b230b4fd1382d17eca5', 0, 1, 'sam@me.com', '', 'Smith', 'Sam', 'Chelmsford', 'images/profiles/f3c61e5a3f.png', 'User has not yet added a description....', '1', 18, 18),
(73, 'gavin123', '73b9ad8c02059b230b4fd1382d17eca5', 0, 1, 'gav@me.com', '', 'Smith', 'Gavin', 'London', 'images/profiles/f3c61e5a3f.png', 'User has not yet added a description....', '1', 10, 10),
(74, 'John123', '73b9ad8c02059b230b4fd1382d17eca5', 0, 1, 'jon@me.com', '', 'Smith', 'John', 'Leeds', 'images/profiles/f3c61e5a3f.png', 'User has not yet added a description....', '1', 26, 26),
(75, 'fred123', '73b9ad8c02059b230b4fd1382d17eca5', 0, 1, 'fred123@me.com', '', 'Smith', 'Fred', 'Norwich', 'images/profiles/f3c61e5a3f.png', 'User has not yet added a description....', '1', 9, 9),
(78, 'bessy567', '73b9ad8c02059b230b4fd1382d17eca5', 0, 1, 'bed@mail.com', '', 'Bessy', 'Bessy', 'Kings Lynn', 'images/profiles/f3c61e5a3f.png', 'User has not yet added a description....', '1', 8, 8),
(79, 'hello123', '73b9ad8c02059b230b4fd1382d17eca5', 0, 1, 'hello@mail.com', '', 'World', 'Hello', 'London', 'images/profiles/f3c61e5a3f.png', 'User has not yet added a description....', '1', 12, 12),
(80, 'orange123', '73b9ad8c02059b230b4fd1382d17eca5', 0, 1, 'mail@mail.com', '', 'Orange', 'Color', 'London', 'images/profiles/f3c61e5a3f.png', 'User has not yet added a description....', '1', 9, 9),
(85, 'Keith89', '73b9ad8c02059b230b4fd1382d17eca5', 0, 1, 'kkk@me.com', '', 'Smith', 'Keith', 'Kings Lynn', 'images/profiles/f3c61e5a3f.png', 'wooooo heeeeeee', '1', 5, 5),
(86, 'king123', '73b9ad8c02059b230b4fd1382d17eca5', 0, 0, 'king@gmail.com', '2f55f0940e87bfd7b77d36943facb33f', 'Lynn', 'King', 'Brighton', 'images/profiles/f3c61e5a3f.png', 'User has not yet added a description....', '1', 29, 29),
(87, 'noob123', '73b9ad8c02059b230b4fd1382d17eca5', 0, 1, 'noob@gmail.com', '5c92cfea87ba77fb47acedb8af3c7e66', 'Nob', 'Nooby', 'Hull', 'images/profiles/f3c61e5a3f.png', 'User has not yet added a description....', '1', 1, 1),
(88, 'nick', '73b9ad8c02059b230b4fd1382d17eca5', 0, 1, 'thegrotto@lapland.com', '3a9803237965c7a578e45b2a7625295f', 'Nicholas', 'Saint', 'Lapland', 'images/profiles/f3c61e5a3f.png', 'User has not yet added a description....', '1', 3, 3),
(89, 'june123', '73b9ad8c02059b230b4fd1382d17eca5', 0, 1, 'june@123.com', '4bfbb738db74e71d6df0317be9b90614', 'Lusher', 'June', 'Luworth', 'images/profiles/f3c61e5a3f.png', 'User has not yet added a description....', '1', 14, 14),
(90, 'winkle123', '73b9ad8c02059b230b4fd1382d17eca5', 0, 1, 'wink@mail.com', '9e535551930780e9a1944c8b534b5fec', 'Whoops', 'Winkle', 'Chelmsford', 'images/profiles/f3c61e5a3f.png', 'User has not yet added a description....', '1', 15, 15),
(91, 'Sandboy', 'c79ceae2d360f600910e7de5e1b1007a', 0, 1, 'paul@sandboybawsey.co.uk', 'b31874226b956cbcafad616b98df2a71', 'Lusher', 'Paul', 'Kings Lynn', 'images/profiles/f3c61e5a3f.png', 'User has not yet added a description....', '1', 16, 16),
(92, 'lucy123', '73b9ad8c02059b230b4fd1382d17eca5', 0, 1, 'lucy123@hotmail.com', '123a3c0467a3709d282ba92e00aab2e3', 'smith', 'Lucy', 'Bath', 'images/profiles/f3c61e5a3f.png', 'Hey there!', '1', 18, 18),
(93, 'jess123', '73b9ad8c02059b230b4fd1382d17eca5', 0, 1, 'jess@gmail.com', '2431d182835576b0e6798936609128e1', 'Jessop', 'Jess', 'Lonon', 'images/profiles/f3c61e5a3f.png', 'User has not yet added a description....', '1', 1, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adverts`
--
ALTER TABLE `adverts`
  ADD CONSTRAINT `adverts_ibfk_1` FOREIGN KEY (`advert_type`) REFERENCES `sport_activity` (`sport_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sport_activity`
--
ALTER TABLE `sport_activity`
  ADD CONSTRAINT `fk_sport_activity_sport_catergory1` FOREIGN KEY (`sport_catergory_catergory_id`) REFERENCES `sport_catergory` (`catergory_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_8` FOREIGN KEY (`advert_id`) REFERENCES `adverts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_9` FOREIGN KEY (`sport_activity_sport_id`) REFERENCES `sport_activity` (`sport_id`) ON DELETE SET NULL ON UPDATE SET NULL;
