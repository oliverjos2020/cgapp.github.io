-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2020 at 06:13 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `church_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_head_admin`
--

CREATE TABLE IF NOT EXISTS `add_head_admin` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `user` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `add_head_admin`
--

INSERT INTO `add_head_admin` (`id`, `user`, `pass`) VALUES
(1, 'head', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `name_of_church` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `country` varchar(150) NOT NULL,
  `state` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `pass2` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `name_of_church`, `email`, `phone`, `country`, `state`, `address`, `pass`, `pass2`, `image`) VALUES
(1, 'Realm of Glory International Church, Vom', 'rogicvom@gmail.com', '987654321', 'Nigeria', 'Lagos State', 'Okota Roundabout Lagos', 'rogicvom', 'rogicvom', 'HEAVENLY DIET.jpg'),
(2, 'Cocin Headquarters, jos', 'cocinjos@gmail.com', '1234567890', 'Nigeria', 'Plateau State', 'Beside Central Bank of Nigeria Jos', 'cocinjos', 'cocinjos', ''),
(5, 'Federal College of Animal Health and Production Technology, Vom', 'fcahptvom@gmail.com', '08022233344', 'Nigeria', 'Plateau State', 'NVRI VOM VET', 'fcahptvom', 'fcahptvom', 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `admin_message`
--

CREATE TABLE IF NOT EXISTS `admin_message` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `type_of_event` varchar(150) NOT NULL,
  `messages` varchar(150) NOT NULL,
  `timex` varchar(150) NOT NULL,
  `mail` varchar(150) NOT NULL,
  `name_of_church` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `admin_message`
--

INSERT INTO `admin_message` (`id`, `type_of_event`, `messages`, `timex`, `mail`, `name_of_church`) VALUES
(1, 'Birthday', 'Hello just trying wether it is working', '03:19pm Wednesday, April 8th 2020', '', 'Realm of Glory International Church, Vom'),
(2, 'Birthday', 'Sorry everyone we just discoveres a bug in our site', '03:23pm Wednesday, April 8th 2020', '', 'Realm of Glory International Church, Vom'),
(3, 'Birthday', 'CORONA VIRUS also known as COVID"19 has entered Nigeria the minister of health says the virus can be controlled', '03:24pm Wednesday, April 8th 2020', '', 'Realm of Glory International Church, Vom'),
(4, 'Birthday', 'CORONA VIRUS also known as COVID"19 has entered Nigeria the minister of health says the virus can be controlled', '03:24pm Wednesday, April 8th 2020', '', 'Realm of Glory International Church, Vom'),
(5, 'Birthday', 'Hello every one my name is Afolabi i am your administrator', '03:26pm Wednesday, April 8th 2020', 'ezekialafolabi11@gmail.com', 'Realm of Glory International Church, Vom');

-- --------------------------------------------------------

--
-- Table structure for table `advert`
--

CREATE TABLE IF NOT EXISTS `advert` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `messages` varchar(200) NOT NULL,
  `state` varchar(150) NOT NULL,
  `timex` varchar(50) NOT NULL,
  `image` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `advert`
--

INSERT INTO `advert` (`id`, `messages`, `state`, `timex`, `image`) VALUES
(8, 'CORONA VIRUS also known as COVID"19 has entered Nigeria the minister of health says the virus can be controlled', '', '04:05pm Tuesday, March 3rd 2020', 'pexels-photo-415825.jpeg'),
(9, 'Dollar has risen from 300 naira to 500', '', '04:15pm Tuesday, March 3rd 2020', 'img2.jpg'),
(10, 'Hurray Mimi weds Obadiah you are all invited', '', '09:25pm Saturday, March 7th 2020', 'FB_IMG_15515209285820452.jpg'),
(11, 'hurray lets celebrate with her because it is her birthday', '', '04:17pm Sunday, March 8th 2020', 'FB_IMG_15482437333106592.jpg'),
(12, '...', '', '09:13am Thursday, April 9th 2020', 'Screenshot_2019-02-05-22-02-53.png'),
(13, '...', '', '09:13am Thursday, April 9th 2020', 'IMG_20181031_081207_549.JPG'),
(14, 'hello', 'Plateau State', '10:16am Thursday, April 9th 2020', 'Screenshot_2018-10-27-11-27-45.png'),
(15, 'There is complete lock down in plateau state starting from 12:00 am tonight', '', '11:54am Thursday, April 9th 2020', 'VCsmlfGCapfC.jpg'),
(16, 'There is complete lock down in plateau state starting from 12:00 am tonight', '', '11:54am Thursday, April 9th 2020', 'VCsmlfGCapfC.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `church_administrator`
--

CREATE TABLE IF NOT EXISTS `church_administrator` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `user` varchar(124) NOT NULL,
  `pass` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `church_administrator`
--

INSERT INTO `church_administrator` (`id`, `user`, `pass`) VALUES
(10, 'Burkutu', 'Goldber'),
(14, 'Peter', 'petersbuirg'),
(15, 'peter', 'petersburg');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE IF NOT EXISTS `complain` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `messages` varchar(200) NOT NULL,
  `timex` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `messages`, `timex`) VALUES
(1, 'Mine is not a problem i just find the site amazing', '09:32pm Saturday, March 7th 2020');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `church` varchar(60) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `timez` varchar(70) NOT NULL,
  `mails` varchar(70) NOT NULL,
  `type_of_event` varchar(70) NOT NULL,
  `image` varchar(70) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `church`, `msg`, `timez`, `mails`, `type_of_event`, `image`) VALUES
(14, 'Cocin Headquarters, jos', 'Boss himself i dey hail oo abeg feel this guy small', '08:56am Thursday, February 27th 2020', 'cocinjos@gmail.com', 'Meeting', 'FB_IMG_15416395538162849.jpg'),
(15, 'Cocin Headquarters, jos', 'Boss himself i dey hail oo abeg feel this gee small', '08:58am Thursday, February 27th 2020', 'cocinjos@gmail.com', 'Meeting', 'FB_IMG_15398131060246296.jpg'),
(16, 'Realm of Glory International Church, Vom', 'Mr David weds Miss Tamwakat', '11:41am Thursday, February 27th 2020', 'rogicvom@gmail.com', 'Wedding', 'FB_IMG_15515209285820452.jpg'),
(17, 'Cocin Headquarters, jos', 'Lets celebrate with her', '12:53pm Thursday, February 27th 2020', 'cocinjos@gmail.com', 'Birthday', 'FB_IMG_15482437201701306.jpg'),
(18, 'Realm of Glory International Church, Vom', 'Blessing weds Ezekiel on 2020', '03:06pm Thursday, March 5th 2020', 'rogicvom@gmail.com', 'Wedding', 'IMG_20200209_140011.jpg'),
(19, 'Realm of Glory International Church, Vom', 'Stella weds Oliver', '08:47am Friday, March 6th 2020', 'rogicvom@gmail.com', 'Wedding', 'IMG_20200208_171755.jpg'),
(20, 'Cocin Headquarters, jos', 'The family of the Dajoks and the family of the Afolabis are happy to invite you to the wedding solemnization of their children Stella Dajok and Ezekiel Afolabi', '09:06am Friday, March 6th 2020', 'cocinjos@gmail.com', 'Wedding', 'IMG_20200208_171755.jpg'),
(21, 'Cocin Headquarters, jos', 'The family of the Dajoks and the family of the Afolabis are happy to invite you to the wedding solemnization of their children Stella Dajok and Ezekiel Afolabi', '09:06am Friday, March 6th 2020', 'cocinjos@gmail.com', 'Wedding', 'IMG_20200208_171755.jpg'),
(22, '', 'Hello Everyone theres a concert coming up you are all invited', '04:29pm Sunday, March 8th 2020', '', 'Meeting', 'correct large.jpg'),
(23, 'Federal College of Animal Health and Production Technology, ', 'Hello Everyone theres a concert coming up you are all invited', '04:38pm Sunday, March 8th 2020', 'fcahptvom@gmail.com', 'Meeting', 'correct large.jpg'),
(24, 'Federal College of Animal Health and Production Technology, ', 'Hello Everyone theres a concert coming up you are all invited', '04:38pm Sunday, March 8th 2020', 'fcahptvom@gmail.com', 'Meeting', 'correct large.jpg'),
(25, '', 'Eli weds Chioma of Davido', '02:32pm Wednesday, April 8th 2020', '', 'Wedding', '32253792_791914341000085_8735280447119949824_n.jpg'),
(26, 'Realm of Glory International Church, Vom', 'Eli weds Chioma of Davido', '02:34pm Wednesday, April 8th 2020', 'rogicvom@gmail.com', 'Wedding', '32253792_791914341000085_8735280447119949824_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `head_administrator`
--

CREATE TABLE IF NOT EXISTS `head_administrator` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `head_administrator`
--

INSERT INTO `head_administrator` (`id`, `user`, `pass`) VALUES
(1, 'users', 'pass'),
(4, 'Romeo', ''),
(5, 'Romeo', 'Juliet'),
(6, 'gospel', 'gospel');

-- --------------------------------------------------------

--
-- Table structure for table `latest`
--

CREATE TABLE IF NOT EXISTS `latest` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `messages` varchar(200) NOT NULL,
  `name_of_church` varchar(150) NOT NULL,
  `timex` varchar(100) NOT NULL,
  `image` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `latest`
--

INSERT INTO `latest` (`id`, `messages`, `name_of_church`, `timex`, `image`) VALUES
(7, 'A cure for CORONA Virus also known as COVID"19 has been found and is been processed in large volumes to be shared all over the nation', '', '01:49pm Wednesday, March 4th 2020', ''),
(8, 'All has been tested and its working appropriately', '', '01:53pm Wednesday, March 4th 2020', ''),
(9, 'Hello people we are travelling to Ebonyi tomorrow', '', '04:15pm Sunday, March 8th 2020', ''),
(10, 'Hello everyone all NYSC camp has been shutdown temporarily until further notice', '', '02:41pm Monday, April 6th 2020', ''),
(11, 'There is complete lock down in plateau state starting from 12:00 am tonight', '', '11:56am Thursday, April 9th 2020', 'portrait-female-student-uniform-12987807.jpg'),
(12, 'nature is beautiful', '', '11:56am Thursday, April 9th 2020', 'pexels-photo-1628230.jpeg'),
(13, 'nature is beautiful', '', '11:56am Thursday, April 9th 2020', 'pexels-photo-1628230.jpeg'),
(14, 'baaa baaa black sheep', 'Realm of Glory International Church, Vom', '02:07pm Thursday, April 9th 2020', 'images-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `type_of_event` varchar(120) NOT NULL,
  `messages` varchar(400) NOT NULL,
  `timex` varchar(100) NOT NULL,
  `mail` varchar(70) NOT NULL,
  `name_of_church` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `type_of_event`, `messages`, `timex`, `mail`, `name_of_church`) VALUES
(18, '', 'Sorry everyone we just discoveres a bug in our site', '06:43pm Wednesday, February 26th 2020', 'cocinjos@gmail.com', 'Cocin Headquarters, jos'),
(19, '', 'Hello everyone all bugs have been fixed you can now enjoy our services', '11:40am Thursday, February 27th 2020', 'rogicvom@gmail.com', 'Realm of Glory International Church, Vom'),
(20, '', 'Hello everyone Gospel is here', '12:55pm Thursday, February 27th 2020', 'cocinjos@gmail.com', 'Cocin Headquarters, jos'),
(21, '', 'Hello i am admin of Animal Health', '02:54pm Thursday, March 5th 2020', 'fcahptvom@gmail.com', 'Federal College of Animal Health and Production Technology, Vom'),
(22, '', 'Hello i am admin of Animal Health', '02:54pm Thursday, March 5th 2020', 'fcahptvom@gmail.com', 'Federal College of Animal Health and Production Technology, Vom'),
(23, '', 'We will be hosting our site live on 1st April 2020', '08:53am Friday, March 6th 2020', 'rogicvom@gmail.com', 'Realm of Glory International Church, Vom'),
(24, '', 'Testin Testing I know you are there', '04:27pm Sunday, March 8th 2020', 'fcahptvom@gmail.com', 'Federal College of Animal Health and Production Technology, Vom'),
(25, 'Birthday', 'Hey yesterday was Barr. KK Birthday', '02:39pm Wednesday, April 8th 2020', '', ''),
(26, 'Wedding', 'Hey yesterday was Barr. KK Birthday', '02:41pm Wednesday, April 8th 2020', 'rogicvom@gmail.com', 'Realm of Glory International Church, Vom'),
(27, 'Meeting', 'i perfectly understand', '03:20pm Wednesday, April 8th 2020', '', ''),
(28, 'Meeting', 'i perfectly understand', '03:20pm Wednesday, April 8th 2020', '', ''),
(29, 'Meeting', 'hip hip hip im happy to announce', '03:23pm Wednesday, April 8th 2020', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `my_post`
--

CREATE TABLE IF NOT EXISTS `my_post` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `messages` varchar(200) NOT NULL,
  `timex` varchar(150) NOT NULL,
  `mail` varchar(150) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `my_post`
--

INSERT INTO `my_post` (`id`, `messages`, `timex`, `mail`, `image`) VALUES
(4, 'Hello everyone Gospel is here', '03:13pm Tuesday, March 3rd 2020', 'ezekialafolabi11@gmail.com', 'IMG_20180729_182125.jpg'),
(5, 'Album dedication', '03:41pm Tuesday, March 3rd 2020', 'ezekialafolabi11@gmail.com', 'correct large.jpg'),
(6, 'hello', '10:14am Thursday, April 9th 2020', 'ezekialafolabi11@gmail.com', 'Screenshot_2018-10-27-11-27-45.png');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `messages` varchar(250) NOT NULL,
  `name_of_church` varchar(150) NOT NULL,
  `timex` varchar(150) NOT NULL,
  `image` varchar(112) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `messages`, `name_of_church`, `timex`, `image`) VALUES
(1, 'Two little black bird', 'Realm of Glory International Church, Vom', '02:35pm Thursday, April 9th 2020', 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `part_church`
--

CREATE TABLE IF NOT EXISTS `part_church` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `messages` varchar(150) NOT NULL,
  `name_of_church` varchar(124) NOT NULL,
  `timex` varchar(123) NOT NULL,
  `image` varchar(123) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `part_church`
--

INSERT INTO `part_church` (`id`, `messages`, `name_of_church`, `timex`, `image`) VALUES
(1, '', 'Cocin Headquarters, jos', '09:05am Thursday, April 9th 2020', 'IMG_20190202_083942_681.JPG'),
(2, '', 'Cocin Headquarters, jos', '10:18am Thursday, April 9th 2020', 'Screenshot_2018-10-27-11-27-45.png'),
(3, 'na wa oo ', 'Realm of Glory International Church, Vom', '11:03am Thursday, April 9th 2020', '1094964_599487843436788_1550943821_n.jpg'),
(4, 'Two little black bird', 'Realm of Glory International Church, Vom', '02:34pm Thursday, April 9th 2020', 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `name_of_church` varchar(150) NOT NULL,
  `fullname` varchar(70) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `country` varchar(150) NOT NULL,
  `state` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `pass2` varchar(25) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name_of_church`, `fullname`, `email`, `phone`, `country`, `state`, `address`, `pass`, `pass2`, `image`) VALUES
(6, 'Realm of Glory International Church, Vom', 'Joel Julius ', 'joel@gmail.com', '07033208164', 'Nigeria', 'Plateau State', 'Bukuru Jos South L.G.A', 'joel', 'joel', ''),
(7, 'Cocin Headquarters, jos', 'David Mark ', 'david@gmail.com', '09098765432', 'Nigeria', 'Plateau State', 'GRA VOM', 'david', 'david', ''),
(9, 'Realm of Glory International Church, Vom', 'Happiness Afolabi ', 'happy@gmail.com', '98765432123', '', '', '', 'happy', 'happy', ''),
(12, 'Cocin Headquarters, jos', 'Mary Bawa ', 'mary@gmail.com', '23451234567', '', '', '', 'mary', 'mary', ''),
(15, 'Realm of Glory International Church, Vom', 'Prof. Afolabi Ezekiel Gbenga', 'ezekialafolabi11@gmail.com', '07062902972', '', '', '', 'pass', 'pass', 'edited.jpg'),
(16, 'Realm of Glory International Church, Vom', 'Nerat Michael Dalyop', 'nerat@gmail.com', '09876543234', '', '', '', 'nerat', 'nerat', 'IMG_20190113_125009.jpg'),
(17, 'Cocin Headquarters, jos', 'Stella Markus ', 'stella@gmail.com', '08109041487', '', '', '', 'stella', 'stella', 'IMG_20200208_171833.jpg'),
(18, 'Cocin Headquarters, jos', 'Blessing Elijah ', 'blessing@gmail.com', '09084247322', '', '', '', 'blessing', 'blessing', 'IMG_20200209_140011.jpg'),
(19, 'Federal College of Animal Health and Production Technology, Vom', 'Gospel Emmanuel ', 'gospelemmanuel24@yahoo.com', '08109551511', '', '', '', 'gospel', 'gospel', 'Musa Bagos1.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
