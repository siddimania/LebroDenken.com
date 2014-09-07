-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 04, 2013 at 01:08 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(11) NOT NULL,
  `ans` varchar(10000) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `crawllink`
--

CREATE TABLE IF NOT EXISTS `crawllink` (
  `id` int(11) NOT NULL,
  `link` varchar(1000) DEFAULT NULL,
  `type` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crawllink`
--

INSERT INTO `crawllink` (`id`, `link`, `type`) VALUES
(1, 'http://www.tutorialspoint.com/java/java_object_classes.htm', 'TUTORIALS'),
(2, 'http://www.tutorialspoint.com/java/java_inheritance.htm', 'tutorials'),
(3, 'http://www.tutorialspoint.com/java/java_decision_making.htm', 'tutorials'),
(6, 'http://www.cprogramming.com/tutorial/lesson15.html', 'CPROGRAMMING');

-- --------------------------------------------------------

--
-- Table structure for table `crawl_content`
--

CREATE TABLE IF NOT EXISTS `crawl_content` (
  `id` int(11) NOT NULL,
  `content` varchar(10000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crawl_content`
--

INSERT INTO `crawl_content` (`id`, `content`) VALUES
(1, '\n<div style="margin-left:300px;"> public class Dog{    String breed;    int age;    String color;     void barking(){    }        void hungry(){    }        void sleeping(){    } } </div>\n'),
(2, '\n<div style="margin-left:300px;"> public class Animal{ }  public class Mammal extends Animal{ }  public class Reptile extends Animal{ }  public class Dog extends Mammal{ } </div>\n'),
(3, '\n<div style="margin-left:300px;"> if(Boolean_expression) {    //Statements will execute if the Boolean expression is true } </div>\n'),
(6, '\n<div style="margin-left:300px;"> ----------        ---------- - Data   -        - Data   -     ----------        ----------    - Pointer- - - -&gt; - Pointer-   ----------        ---------- </div>\n');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `login` varchar(42) NOT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `sec_q` varchar(1000) DEFAULT NULL,
  `sec_a` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pdf`
--

CREATE TABLE IF NOT EXISTS `pdf` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) DEFAULT NULL,
  `url` varchar(1000) DEFAULT NULL,
  `shots` varchar(1000) DEFAULT NULL,
  `tags` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdf`
--

INSERT INTO `pdf` (`id`, `name`, `url`, `shots`, `tags`) VALUES
(1, 'abc1', 'abc1.pdf', 'shot1.png', 'THE DEFINITIVE GUIDE TO HTML5'),
(2, 'abc2', 'abc2.pdf', 'shot2.png', ' GEORGE ORWELL 1984'),
(3, 'abc3', 'abc3.pdf', 'shot3.png', 'HTML5COMPLETE REFERENCE'),
(4, 'abc4', 'abc4.pdf', 'shot4.png', 'PHP FOR ABSOLUTE BEGINNERS'),
(5, 'abc5', 'abc5.pdf', 'shot5.png', 'PHP.COOKBOOK'),
(6, 'abc6', 'abc6.pdf', 'shot6.png', 'PHP.DYNAMIC.WEB.DESIGN');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(10000) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL,
  `snap_src` varchar(100) DEFAULT NULL,
  `url` varchar(1000) DEFAULT NULL,
  `NAME` varchar(10000) NOT NULL DEFAULT 'LIBERODENKEN VIDEO LECTURES',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `snap_src`, `url`, `NAME`) VALUES
(1, 'src/PHP Tutorials  Uploading Storing an Image inside a MySQL Database (Part 2) (Low).mp4.png', 'video/PHP Tutorials  Uploading Storing an Image inside a MySQL Database (Part 2) (Low).mp4', 'LIBERODENKEN VIDEO LECTURES');

-- --------------------------------------------------------

--
-- Table structure for table `video_tags`
--

CREATE TABLE IF NOT EXISTS `video_tags` (
  `id` int(11) DEFAULT NULL,
  `tags` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_tags`
--

INSERT INTO `video_tags` (`id`, `tags`) VALUES
(1, 'PHP'),
(1, 'Tutorials'),
(1, 'Storing'),
(1, 'image'),
(1, 'MYSQL'),
(1, 'Storing'),
(1, 'image'),
(1, 'MYSQL'),
(1, 'Database'),
(1, 'php lectures');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
