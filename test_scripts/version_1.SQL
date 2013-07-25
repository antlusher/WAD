-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 04, 2012 at 10:39 PM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `app_dev_sport`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_has_sport_catergory`
--

CREATE TABLE `user_has_sport_catergory` (
  `user_user_id` int(11) NOT NULL,
  `sport_catergory_catergory_id` int(11) NOT NULL,
  PRIMARY KEY (`user_user_id`,`sport_catergory_catergory_id`),
  UNIQUE KEY `user_user_id` (`user_user_id`),
  KEY `fk_user_has_sport_catergory_sport_catergory1_idx` (`sport_catergory_catergory_id`),
  KEY `fk_user_has_sport_catergory_user1_idx` (`user_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_has_sport_catergory`
--

INSERT INTO `user_has_sport_catergory` (`user_user_id`, `sport_catergory_catergory_id`) VALUES
(11, 1),
(12, 2),
(13, 3),
(14, 4),
(15, 5),
(16, 6),
(17, 7),
(18, 8),
(19, 9),
(20, 10),
(21, 11),
(22, 12),
(23, 13),
(24, 14),
(25, 15),
(26, 16),
(27, 17),
(28, 18),
(29, 19),
(30, 20);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_has_sport_catergory`
--
ALTER TABLE `user_has_sport_catergory`
  ADD CONSTRAINT `fk_user_has_sport_catergory_user1` FOREIGN KEY (`user_user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_has_sport_catergory_ibfk_1` FOREIGN KEY (`sport_catergory_catergory_id`) REFERENCES `sport_activity` (`sport_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
