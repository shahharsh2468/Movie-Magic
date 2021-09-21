-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 21, 2021 at 07:32 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `movie magic`
--
CREATE DATABASE IF NOT EXISTS `movie magic` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `movie magic`;

-- --------------------------------------------------------

--
-- Table structure for table `featured_movies`
--

CREATE TABLE IF NOT EXISTS `featured_movies` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rdate` varchar(10) NOT NULL,
  `poster` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `featured_movies`
--

INSERT INTO `featured_movies` (`id`, `name`, `rdate`, `poster`) VALUES
(1, 'Total Dhamaal', '2018-07-11', 'poster1.jpeg'),
(2, 'Kalank', '12/6/2019', 'poster2.jpg'),
(3, 'student of the year 2', '15/07/2019', 'student of the year 2.jpg'),
(4, 'super 30', '23/05/2019', 'super 30.jpg'),
(5, 'shamshera', '30/5/2019', 'shamshera.jpg'),
(6, 'thackray', '26/1/2019', 'thackeray.jpg'),
(7, 'batla house', '20/12/2019', 'batla house.jpg'),
(8, 'chhichhore', '30/08/2019', 'chhichhore.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home_page_top_movie`
--

CREATE TABLE IF NOT EXISTS `home_page_top_movie` (
  `name` varchar(255) NOT NULL,
  `id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_page_top_movie`
--

INSERT INTO `home_page_top_movie` (`name`, `id`) VALUES
('Total DHAMAAL', 1),
('KESARI', 2),
('manikarnika', 3);

-- --------------------------------------------------------

--
-- Table structure for table `now_available`
--

CREATE TABLE IF NOT EXISTS `now_available` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `rate` int(2) NOT NULL,
  `rdate` varchar(10) NOT NULL,
  `duration` varchar(5) NOT NULL,
  `language` varchar(50) NOT NULL,
  `category` varchar(255) NOT NULL,
  `category2` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `now_available`
--

INSERT INTO `now_available` (`id`, `name`, `poster`, `rate`, `rdate`, `duration`, `language`, `category`, `category2`) VALUES
(1, 'Total Dhamaal', 'poster1.jpeg', 87, '05/01/2019', '02:50', 'Hindi', 'Comedy', 'Action'),
(2, 'gully boy', 'gully boy.jpg', 67, '22/2/2019', '2:15', 'Hindi', 'drama ', 'romantic '),
(3, 'k.g.f', 'kgf 1.jpeg', 77, '01/01/2019', '02:23', 'Hindi', 'action', 'thriller '),
(4, 'lukka chuppie ', 'lukka chuppi.jpg', 56, '14/2/2019', '2:45', 'Hindi', 'comedy', 'romantic    '),
(5, 'badla ', 'badla.jpg', 60, '21/3/2019', '2:10', 'Hindi', 'mystery ', 'drama ');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE IF NOT EXISTS `offers` (
  `id` int(3) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `img`) VALUES
(1, '3045232-poster-p-1-batman-v-superman.jpg'),
(2, 'Don 3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `cid` int(3) NOT NULL,
  `mid` int(3) NOT NULL,
  `ticket` int(3) NOT NULL,
  `tid` int(3) NOT NULL,
  `total` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `cid`, `mid`, `ticket`, `tid`, `total`) VALUES
(1, 0, 0, 0, 0, 0),
(2, 2, 2, 2, 2, 400),
(3, 2, 3, 3, 4, 900),
(4, 2, 1, 2, 1, 300),
(5, 2, 1, 2, 1, 300),
(6, 3, 1, 2, 1, 300);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `cid` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`cid`, `name`, `email`, `password`, `contact`) VALUES
(1, 'demo', 'demo@gmail.com', 'demo', '9012345678'),
(2, 'TARAK', 'TARAK@GMAIL.COM', '1234', '8128630863'),
(3, 'harsh', 'harsh@gmail.com', '12345', '8160359415'),
(4, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `temp_payment`
--

CREATE TABLE IF NOT EXISTS `temp_payment` (
  `cid` int(3) NOT NULL,
  `mid` int(3) NOT NULL,
  `tid` int(3) NOT NULL,
  `seat` int(3) NOT NULL,
  `price` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_payment`
--

INSERT INTO `temp_payment` (`cid`, `mid`, `tid`, `seat`, `price`) VALUES
(3, 1, 1, 2, 150);

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE IF NOT EXISTS `time_table` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `duration` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`id`, `duration`, `price`) VALUES
(1, '09:00 am - 11:00 am', '150'),
(2, '12-00 pm - 03-00pm', '200'),
(3, '04:00 pm - 7:00 pm', '250'),
(4, '8:00 pm - 11:00 pm', '300'),
(5, '10:00 pm - 01:00 am ', '350');

-- --------------------------------------------------------

--
-- Table structure for table `top_movies`
--

CREATE TABLE IF NOT EXISTS `top_movies` (
  `mid` int(3) NOT NULL AUTO_INCREMENT,
  `movie_name` varchar(255) NOT NULL,
  `rate` int(2) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `top_movies`
--

INSERT INTO `top_movies` (`mid`, `movie_name`, `rate`) VALUES
(1, 'Robot 2.0', 89),
(2, 'Gold', 67),
(3, 'total dhamal ', 78),
(4, 'thackeray', 50),
(5, 'gully boy', 60),
(6, 'k.g.f.', 75),
(8, 'zero', 35),
(9, 'U-R-I the surgical strike', 88);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(3) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `poster`, `video`) VALUES
(1, 'kalank.jpg', 'kalank.mp4'),
(2, 'lukka chuppi.jpg', 'Luka Chuppi Official Trailer - Kartik Aaryan, Kriti Sanon, Dinesh Vijan, Laxman Utekar - Mar 1.mp4'),
(3, 'poster4.jpg', 'kesri.mp4'),
(4, 'RAW.jpg', 'raw.mp4'),
(5, 'poster1.jpeg', 'total dhamal.mp4'),
(6, 'poster3.jpg', 'manikarnika.mp4'),
(7, 'badla.jpg', 'badla.mp4'),
(8, 'gully boy.jpg', 'gully boy.mp4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
