-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Aug 05, 2017 at 11:55 PM
-- Server version: 10.1.24-MariaDB-cll-lve
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `secnhbap_hunt`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('ajaysrinivas95@gmail.com', '70c394fd2ed4f4ef345af0cb6cca4945'),
('anilprasadyadhav@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759'),
('asda@gm.com', 'f722f82e78ce099f1fc4f60a168f596c'),
('asdasd@gm.cx', 'f722f82e78ce099f1fc4f60a168f596c'),
('asdassadasd@gm.cx', 'f722f82e78ce099f1fc4f60a168f596c'),
('dineshkumar1997v@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f'),
('fearlessjun@gmail.com', 'fa4d6c59309f20987e15421331ab02a9'),
('fenixdrajwin@gmail.com', 'bf444debca84cc25aedf4888a35ee4e9'),
('gbk@lumeria.in', 'c103de3d47e401591f3a69f5ff4b5792'),
('joedavid96@gmail.com', 'c44a471bd78cc6c2fea32b9fe028d30a'),
('rduraisankar2@gmail.com', 'f722f82e78ce099f1fc4f60a168f596c'),
('rduraisankar@gmail.com', 'f722f82e78ce099f1fc4f60a168f596c'),
('rduraisankard2@gmail.com', 'f722f82e78ce099f1fc4f60a168f596c'),
('sadas@dsf.sdf', 'f722f82e78ce099f1fc4f60a168f596c');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `notification` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `date`, `notification`) VALUES
(1, '2017-01-05', 'hello testing !');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `tagline` varchar(255) NOT NULL,
  `round1` varchar(11) DEFAULT NULL,
  `scoreachieved` varchar(11) DEFAULT NULL,
  `college` varchar(255) NOT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `solvedquestions` varchar(300) DEFAULT NULL,
  `current` varchar(3) NOT NULL,
  `tym` int(15) DEFAULT NULL,
  `hint` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `name`, `email`, `mobileno`, `tagline`, `round1`, `scoreachieved`, `college`, `pic`, `solvedquestions`, `current`, `tym`, `hint`) VALUES
(1, 'Durai Sankar', 'rduraisankar@gmail.com', '9710085851', 'asdas', '0', '550', 'saveetha Engineerig college', '4.jpg', '0,1,2,3,4,5,6', '7', 1483714849, 1),
(2, 'Joel David', 'joedavid96@gmail.com', '1234567890', 'Swag', '0', '150', 'Saveetha Engineering college', '2.jpg', '0,1,2,3,4,5,6,7', '8', 1483625193, 1),
(3, 'Anil', 'anilprasadyadhav@gmail.com', '9092709550', 'anil122', '0', '0', 'Saveetha Engineering college', '5.jpg', '0', '1', 1483621994, 1),
(4, 'Durai Sankar R', 'rduraisankar2@gmail.com', '9784561230', 'asda', '0', '0', 'asdasdads', '5.jpg', '0', '1', 1483622873, 1),
(5, 'Durai Sankar Rda', 'rduraisankard2@gmail.com', '9784561230', 'asda', '0', '0', 'asdasdads', '3.jpg', '0', '1', 1483622980, 1),
(6, 'asdasd', 'sadas@dsf.sdf', '7894561230', 'sad', '0', '0', 'asdasd', '8.jpg', '0', '1', 1483623007, 1),
(7, 'fddsf', 'asdasd@gm.cx', '1234567890', 'sad', '0', '0', 'asdasd', '10.jpg', '0', '1', 1483623059, 1),
(8, 'fddsf', 'asdassadasd@gm.cx', '1234567890', 'sad', '0', '0', 'asdasd', '2.jpg', '0', '1', 1483623121, 1),
(9, 'Dinesh kumar', 'dineshkumar1997v@gmail.com', '7299149372', 'Treasure hunter', '0', '100', 'Saveetha engineering college', '5.jpg', '0,1,2,3,4', '5', 1483625445, 1),
(10, 'Fenix D Rajwin', 'fenixdrajwin@gmail.com', '9597808974', 'Test tag', '0', '0', 'Saveetha Engineering college', '7.jpg', '0', '1', 1483631870, 1),
(11, 'bharath', 'gbk@lumeria.in', '8098189107', 'hello', '0', '150', 'saveetha eng colge', '9.jpg', '0,1,2,3,4,5', '6', 1483950208, 1),
(12, 'asd', 'asda@gm.com', '7894561230', 'sad', '0', '0', 'fsdfsd', '8.jpg', '0', '1', 1483952830, 1),
(13, 'Ajay', 'ajaysrinivas95@gmail.com', '7358945575', 'Jingalalalalalalalala', '0', '0', 'Saveetha engineering college.', '7.jpg', '0,1', '2', 1483969493, 1),
(14, 'Junaid Ahmed', 'fearlessjun@gmail.com', '8680019339', 'juni', '0', '0', 'Saveetha Engineering College', '5.jpg', '0,1', '2', 1486298175, 1);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `questionpath` varchar(255) CHARACTER SET latin1 NOT NULL,
  `answer` varchar(255) NOT NULL,
  `hint1` varchar(255) NOT NULL,
  `hint2` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `questionpath`, `answer`, `hint1`, `hint2`) VALUES
(1, 'questionsimages/1.jpg', 'Steve Bucknor', 'He/She is not a player.', 'Steve Bucknor'),
(2, 'questionsimages/4.jpg', 'career golden slam', 'These are tennis players.', 'career golden slam'),
(3, 'questionsimages/9.jpg', 'Kundan Shah', 'Its a bollywood flick released in 80''s.', 'Kundan Shah'),
(4, 'questionsimages/11.jpg', 'reebok', 'One is ex-MD ,another is COO.', 'reebok'),
(5, 'questionsimages/12.jpg', 'once upon a time', 'The character is snow white.', 'once upon a time'),
(6, 'questionsimages/14.jpg', 'Merlion Statue,Sentosa Island Singapore', 'The symbol was designed by the member of souvenir committee.', 'Merlion Statue,Sentosa Island Singapore'),
(7, 'questionsimages/18.jpg', 'Iskcon temple delhi', 'Situated in India', 'Iskcon temple delhi'),
(8, 'questionsimages/19.jpg', 'pasodoble', 'Spanish dance form.', 'pasodoble'),
(9, 'questionsimages/20.jpg', 'Ban ki moon,united nations', 'This is an international organization.', 'Ban ki moon,united nations'),
(10, 'questionsimages/22.jpg', 'romance', 'Its a seven letter word.', 'romance'),
(11, 'questionsimages/24.jpg', '40', 'Answer is not 30.', '40'),
(12, 'questionsimages/26.jpg', 'transistor', 'Is present in our college.', 'transistor'),
(13, 'questionsimages/27.jpg', 'Daniel Day Lewis', 'This is an oscar award.', 'Daniel Day Lewis'),
(14, 'questionsimages/29.jpg', '7', 'This movie was released in 90''s.', '7'),
(15, 'questionsimages/30.jpg', 'the sessions', 'Golden globe award.', 'the sessions'),
(16, 'questionsimages/32.jpg', 'techvibes', 'Use this number. answer Answer lies in this number.', 'techvibes'),
(17, 'questionsimages/33.jpg', 'Spirit and opportunity', 'This planet is mars.', 'Spirit and opportunity'),
(18, 'questionsimages/3.jpg', 'sachin tendulkar,lords cricket ground', 'Related to test series.', 'sachin tendulkar,lords cricket ground');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
