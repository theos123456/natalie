-- phpMyAdmin SQL Dump
-- version 2.11.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 13, 2019 at 05:47 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `house`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(9) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `address`
--


-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(9) NOT NULL auto_increment,
  `image` varchar(255) NOT NULL,
  `pub_id` int(9) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `image`
--


-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE `publication` (
  `pub_id` int(9) NOT NULL auto_increment,
  `uid` int(9) NOT NULL,
  `location` varchar(255) NOT NULL,
  `dinning` int(3) NOT NULL,
  `kitchen` int(3) NOT NULL,
  `washing` int(3) NOT NULL,
  `sleeping` int(3) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `house_id` varchar(255) NOT NULL,
  PRIMARY KEY  (`pub_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `publication`
--

INSERT INTO `publication` (`pub_id`, `uid`, `location`, `dinning`, `kitchen`, `washing`, `sleeping`, `category`, `price`, `details`, `image`, `house_id`) VALUES
(3, 3, 'kicukiro,centre', 4, 3, 3, 4, 'for buy', '1000000000', 'it is best house with garden inside,water pool,and  parking  of 3 cars.it is on the paved road', 'uploads/house18.jpg', ''),
(4, 3, 'gasabo,kacyiru,klab', 3, 3, 1, 6, 'for sell', '4560000000', 'it is near hospitals schools,university ,markert and paved road', 'uploads/house14.jpg', ''),
(5, 3, 'gasabo,karuruma,gatsata', 5, 2, 2, 8, 'for buy', '5670000000', 'best house', 'uploads/house22.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(9) NOT NULL auto_increment,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `sector` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL default 'publisher',
  `userid` varchar(255) NOT NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `firstname`, `lastname`, `district`, `sector`, `email`, `phone`, `username`, `password`, `type`, `userid`) VALUES
(4, 'uwimana', 'natalie', 'gasabo', 'kacyirus', 'uwimana@gmail.com', '07891787878', 'natalie1', 'natalie1', 'admin', ''),
(5, 'kwibuka', 'yves', 'gasabo', 'kimironko', 'yves@gmail.com', '0789170894', 'yves', 'yves', 'admin', ''),
(7, 'benimana', 'natalie', 'gasabo', 'kacyiru', 'natalie@gmail.com', '07884848484', 'natalie', 'natalie', 'publisher', ''),
(9, '', '', 'kirehe', 'kirehe', 'latifa@latifa.com', '0789170893', 'latifa', 'latifa', 'publisher', '119991991919'),
(10, '', '', 'gasabo', 'kimironko', 'charlotes@uok.ac.rw', '0789170892', 'charlotes', 'charlote', 'publisher', '11999'),
(11, '', '', 'dhhdhdhd', 'kiyovu', 'jhdhdh@ggdgd.com', '0789170899', 'ahadi', 'ahadi123', 'publisher', '7447484747');
