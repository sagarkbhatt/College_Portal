-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 25, 2014 at 05:39 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `college`
--
CREATE DATABASE IF NOT EXISTS `college` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `college`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appliedsciencestaff`
--

CREATE TABLE IF NOT EXISTS `appliedsciencestaff` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `post` varchar(20) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `automobile`
--

CREATE TABLE IF NOT EXISTS `automobile` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `post` varchar(20) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `civil`
--

CREATE TABLE IF NOT EXISTS `civil` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `post` varchar(20) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `electrical`
--

CREATE TABLE IF NOT EXISTS `electrical` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `post` varchar(20) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electrical`
--

INSERT INTO `electrical` (`id`, `name`, `gender`, `qualification`, `experience`, `post`, `emailid`) VALUES
(2, 'nishad', 'Male', 'kjdkjbk', '10', 'jkdbjkb', 'jbkbkjk@gmail');

-- --------------------------------------------------------

--
-- Table structure for table `general`
--

CREATE TABLE IF NOT EXISTS `general` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `post` varchar(20) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `it`
--

CREATE TABLE IF NOT EXISTS `it` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `post` varchar(20) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it`
--

INSERT INTO `it` (`id`, `name`, `gender`, `qualification`, `experience`, `post`, `emailid`) VALUES
(0, 'njnjkkjb', 'Male', '', 'kbkb', 'bkb', 'bbjbjb@jbjb.knn'),
(12, 'sagar', 'Male', 'abc', 'dsds', 'dsd', 'sagarbhattt@gmail.co');

-- --------------------------------------------------------

--
-- Table structure for table `mechanical`
--

CREATE TABLE IF NOT EXISTS `mechanical` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `post` varchar(20) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `metallurgy`
--

CREATE TABLE IF NOT EXISTS `metallurgy` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `post` varchar(20) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `msgfromprinci`
--

CREATE TABLE IF NOT EXISTS `msgfromprinci` (
  `id` int(11) NOT NULL,
  `shortmsg` varchar(70) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msgfromprinci`
--

INSERT INTO `msgfromprinci` (`id`, `shortmsg`, `message`) VALUES
(1, 'This is the best college for diploma and we want to keep it best...', 'In the new environment of liberalization, the field of technical education have been facing the challanges not only from inside but also from the outside world. It has changed the role of teachers, administrators, and planners involed in the field of technical education. The barrier between a classroom and an industry, anywhere in the world, is now very transparent with respect to technology. The large number of national & international technical institutes, who are wrestling to employee their students, are in search of innovative teaching methods. Our institute, which is the oldest in South Gujarat region, is committed to provide quality education, to produce young entrepreneurs, and to involve themselves for the benefits of all stake holders.');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `text` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `color` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `text`, `link`, `color`) VALUES
(1, ' Dr S & SS Ghandhy College of Engineering & Technology is Accredited.', 'z', 'blue');

-- --------------------------------------------------------

--
-- Table structure for table `officestaff`
--

CREATE TABLE IF NOT EXISTS `officestaff` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `post` varchar(20) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `placement`
--

CREATE TABLE IF NOT EXISTS `placement` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `designation` varchar(40) NOT NULL,
  `eduqualificat` varchar(20) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `powerelectronics`
--

CREATE TABLE IF NOT EXISTS `powerelectronics` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `post` varchar(20) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pwd`
--

CREATE TABLE IF NOT EXISTS `pwd` (
  `id` int(11) NOT NULL,
  `nameoftrade` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tender`
--

CREATE TABLE IF NOT EXISTS `tender` (
  `ID` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(40) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `textilemanufacturing`
--

CREATE TABLE IF NOT EXISTS `textilemanufacturing` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `post` varchar(20) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `textileprocessing`
--

CREATE TABLE IF NOT EXISTS `textileprocessing` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `post` varchar(20) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
