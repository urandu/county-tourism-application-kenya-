-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2015 at 04:34 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kilifi_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `activity_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `destination_id` bigint(20) NOT NULL,
  `activity_description` longtext NOT NULL,
  `price` decimal(8,8) DEFAULT NULL,
  PRIMARY KEY (`activity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `activity_bookings`
--

CREATE TABLE IF NOT EXISTS `activity_bookings` (
  `booking_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `activity_id` bigint(20) NOT NULL,
  `amount_to_be_paid` decimal(8,8) DEFAULT NULL,
  `amount_paid` decimal(8,8) DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `date_of_trip` varchar(60) DEFAULT NULL,
  `date_of_booking` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE IF NOT EXISTS `destinations` (
  `pin_id` bigint(20) NOT NULL,
  `destination_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `destination_type` varchar(100) NOT NULL,
  `destination_description` longtext NOT NULL,
  `price` decimal(8,8) DEFAULT NULL,
  PRIMARY KEY (`destination_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `destination_bookings`
--

CREATE TABLE IF NOT EXISTS `destination_bookings` (
  `booking_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `destination_id` bigint(20) NOT NULL,
  `amount_to_be_paid` decimal(8,8) DEFAULT NULL,
  `amount_paid` decimal(8,8) DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `date_of_trip` varchar(60) DEFAULT NULL,
  `date_of_booking` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE IF NOT EXISTS `hotels` (
  `pin_id` bigint(20) NOT NULL,
  `hotel_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `hotel_type` varchar(100) NOT NULL,
  `hotel_description` longtext NOT NULL,
  PRIMARY KEY (`hotel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_bookings`
--

CREATE TABLE IF NOT EXISTS `hotel_bookings` (
  `booking_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `hotel_id` bigint(20) NOT NULL,
  `room_id` bigint(20) NOT NULL,
  `amount_to_be_paid` decimal(8,8) DEFAULT NULL,
  `no_of_people` int(20) DEFAULT NULL,
  `amount_paid` decimal(8,8) DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `date_from` varchar(60) DEFAULT NULL,
  `date_to` varchar(60) DEFAULT NULL,
  `date_of_booking` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pins`
--

CREATE TABLE IF NOT EXISTS `pins` (
  `pin_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `longitude` decimal(8,8) DEFAULT NULL,
  `latitude` decimal(8,8) DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  PRIMARY KEY (`pin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE IF NOT EXISTS `ratings` (
  `rating_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pin_id` bigint(20) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `rating` int(10) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`rating_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `hotel_id` bigint(20) NOT NULL,
  `room_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `room_type` varchar(100) NOT NULL,
  `number_of_people` int(10) NOT NULL,
  `price` decimal(8,8) DEFAULT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` bigint(21) NOT NULL AUTO_INCREMENT,
  `names` varchar(60) NOT NULL,
  `role` int(2) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
