-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2016 at 09:10 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `user_name`, `email`, `password`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bus_stands`
--

CREATE TABLE IF NOT EXISTS `bus_stands` (
  `bus_stand_id` int(11) NOT NULL AUTO_INCREMENT,
  `bus_stand_name` varchar(250) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`bus_stand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `bus_stands`
--

INSERT INTO `bus_stands` (`bus_stand_id`, `bus_stand_name`, `status`) VALUES
(1, 'Sitapura', 0),
(2, 'India Gate', 1),
(3, 'Kumbha Marg', 1),
(4, 'Haldi Ghati', 1),
(5, 'Thana', 1),
(6, 'Malviaya Nagar', 1),
(7, 'Durgapura', 1),
(8, 'Gopal Pura', 1),
(9, 'Khatipura', 1),
(10, 'Ganesh Colony', 1),
(11, 'Chinkara Colony', 0),
(12, 'Krishna Colony', 0),
(13, 'Jharkhand Mod', 0),
(14, 'Veer Vihar', 0),
(15, 'Prem Pura Village', 0),
(16, 'Rathod nagar', 0),
(17, 'Guru jhambeshwar Nagar', 0),
(18, 'Vaishali Nagar', 0),
(19, 'Street Number 9A', 0),
(20, 'Neel kunth Colony', 0),
(21, 'khatipura', 0),
(22, 'sector 8', 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_number` varchar(50) NOT NULL,
  `st_name` varchar(50) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `st_photo` varchar(250) NOT NULL,
  `home_bus_stand_name` varchar(50) NOT NULL,
  `route_number` varchar(50) NOT NULL,
  `st_mobile` varchar(50) NOT NULL,
  `p_mobile` varchar(50) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `reg_number`, `st_name`, `f_name`, `m_name`, `st_photo`, `home_bus_stand_name`, `route_number`, `st_mobile`, `p_mobile`) VALUES
(1, '', 'Satnam singh khowal', 'Rampal', 'Bala Devi', 'upload/4430.jpg', 'Kumbha Marg', '1', '7790847091', '7790847091'),
(2, '', 'Krishna ', 'Jai Ram', 'Rukmani Devi', 'upload/5758.jpg', 'Khatipura', '2', '7790847091', '9610764096'),
(3, '', 'Rahul kumar', 'Ram', 'Sita', 'upload/8168.jpg', 'Ganesh Colony', '2', '7790847091', '9610764096'),
(4, '', 'ss', 'hgh', 'jhhjhu', 'upload/405.jpg', 'Rathod nagar', '7 A', '9894', '487');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_id`, `user_name`, `email`, `password`) VALUES
(1, 'satnma singh', 'satnamkhowal@gmail.com', 'demo');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_route`
--

CREATE TABLE IF NOT EXISTS `vehicle_route` (
  `vehicle_route_id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle_type_name` varchar(50) NOT NULL,
  `vehicle_number` varchar(50) NOT NULL,
  `driver_name` varchar(50) NOT NULL,
  `conductor_name` varchar(50) NOT NULL,
  `driver_mob_number` varchar(11) NOT NULL,
  `conductor_mobile_number` varchar(11) NOT NULL,
  `route_number` varchar(50) NOT NULL,
  `route_map` varchar(50) NOT NULL,
  `g_map_code` text NOT NULL,
  `starting_bus_stand` varchar(50) NOT NULL,
  `via_bus_stand` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`vehicle_route_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `vehicle_route`
--

INSERT INTO `vehicle_route` (`vehicle_route_id`, `vehicle_type_name`, `vehicle_number`, `driver_name`, `conductor_name`, `driver_mob_number`, `conductor_mobile_number`, `route_number`, `route_map`, `g_map_code`, `starting_bus_stand`, `via_bus_stand`, `status`) VALUES
(1, '30 Seater Bus', 'Rj 20 jp 5685', 'Rahul kumar', 'ajay', '7790847091', '', '1', 'upload/1989.png', '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d28463.080704812288!2d75.75686980870003!3d26.907141797450272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x396db37ab98e730f%3A0xdcfa585e086d3e01!2sKhatipura%2C+Jaipur%2C+Rajasthan!3m2!1d26.9277144!2d75.7594529!4m5!1s0x396db69f0103edaf%3A0x8177fa90efbfcead!2sSubodh+Public+School%2C+Bhawani+Singh+Rd%2C+Rambagh%2C+Jaipur%2C+Rajasthan+302005!3m2!1d26.894524!2d75.81001499999999!5e0!3m2!1sen!2sin!4v1455491623396" width="1360" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>', 'Sitapura', '$', 1),
(2, '60 Seater Bus', 'Rj 56 jp 8578', 'Ronak', 'Sunny', '7790847091', '7790847091', '2', 'upload/1899.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d28463.080704812288!2d75.75686980870003!3d26.907141797450272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x396db37ab98e730f%3A0xdcfa585e086d3e01!2sKhatipura%2C+Jaipur%2C+Raj', 'Khatipura', '$', 1),
(3, '60 Seater Bus', 'RJ 89 Jp 8956', 'ssk', 'ppk', '78184814818', '7790847091', '3', '', '', 'Select Starting Bus Stand', '$', 1),
(4, '20 seater', 'Rj 50 jj 9650', 'kjho', 'knjn', '651446', '652848', '7 A', 'upload/5191.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d56920.31339530602!2d75.75355596315374!3d26.918737812392312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x396db3a070518cfd%3A0x63061373ea80da3!2sVijay+Textiles%2C+Khatipura+Road%2C+Shivaji+Godara+Colony%2C+Jaipur%2C+Rajasthan!3m2!1d26.940289999999997!2d75.76098999999999!4m5!1s0x396db69f0103edaf%3A0x8177fa90efbfcead!2sSubodh+Public+School%2C+Bhawani+Singh+Road%2C+Rambagh%2C+Jaipur%2C+Rajasthan+302005!3m2!1d26.894524!2d75.81001499999999!5e0!3m2!1sen!2sin!4v1455607383586" width="1360" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>', 'khatipura', '$', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_type`
--

CREATE TABLE IF NOT EXISTS `vehicle_type` (
  `vehicle_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle_type_name` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`vehicle_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `vehicle_type`
--

INSERT INTO `vehicle_type` (`vehicle_type_id`, `vehicle_type_name`, `status`) VALUES
(1, '30 Seater Bus', 0),
(2, '45 Seater Bus', 0),
(3, '60 Seater Bus', 0),
(4, 'Magic', 0),
(5, 'Auto', 0),
(6, '20 seater', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
