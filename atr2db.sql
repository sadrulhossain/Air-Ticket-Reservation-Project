-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2016 at 08:59 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atr2db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_reg`
--

CREATE TABLE IF NOT EXISTS `admin_reg` (
  `admin_name` varchar(50) NOT NULL,
  `admin_id` int(20) NOT NULL,
  `admin_pass` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_reg`
--

INSERT INTO `admin_reg` (`admin_name`, `admin_id`, `admin_pass`) VALUES
('Rasel Ali', 131152218, 131152218),
('Uzzal Kar', 131152302, 131152302),
('Sadrul Hossain', 131152402, 131152402);

-- --------------------------------------------------------

--
-- Table structure for table `airbus`
--

CREATE TABLE IF NOT EXISTS `airbus` (
  `airbus_id` int(15) NOT NULL,
  `airbus_no` varchar(20) NOT NULL,
  `economy_capacity` int(10) NOT NULL,
  `first_capacity` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airbus`
--

INSERT INTO `airbus` (`airbus_id`, `airbus_no`, `economy_capacity`, `first_capacity`) VALUES
(8, 'Boing737', 200, 50),
(11, 'Boing757', 185, 60),
(15, 'Boing797', 200, 80);

-- --------------------------------------------------------

--
-- Table structure for table `airport`
--

CREATE TABLE IF NOT EXISTS `airport` (
  `airport_id` varchar(20) NOT NULL,
  `city` text NOT NULL,
  `airport_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airport`
--

INSERT INTO `airport` (`airport_id`, `city`, `airport_name`) VALUES
('AP311', 'Beijing', 'Beijing International Airport'),
('AP609', 'New Delhi', 'Delhi International Airport'),
('AP808', 'Dhaka', 'Hazrat ShahJalal International Airport');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
  `bank_id` int(11) NOT NULL,
  `bank_name` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bank_id`, `bank_name`) VALUES
(1, 'DBBL'),
(2, 'BRAC Bank'),
(3, 'City Bank'),
(5, 'Premium Bank'),
(6, 'HSBC Bank'),
(7, 'ICIC Bank');

-- --------------------------------------------------------

--
-- Table structure for table `book_ticket`
--

CREATE TABLE IF NOT EXISTS `book_ticket` (
  `book_ticket_id` int(11) NOT NULL,
  `book_flight_no` varchar(20) NOT NULL,
  `book_depart_from` text NOT NULL,
  `book_depart_to` text NOT NULL,
  `book_flight_date` date NOT NULL,
  `book_flight_time` time NOT NULL,
  `book_journey_hour` int(3) NOT NULL,
  `book_seat_number` varchar(11) NOT NULL,
  `book_fare` text NOT NULL,
  `book_pas_name` text NOT NULL,
  `book_pas_gender` text NOT NULL,
  `book_pas_passport` varchar(100) NOT NULL,
  `book_pas_city` text NOT NULL,
  `book_pas_mobile` varchar(20) NOT NULL,
  `book_email` varchar(50) NOT NULL,
  `purchase_bank` text NOT NULL,
  `purchase_ac` varchar(100) NOT NULL,
  `purchase_pass` int(4) NOT NULL,
  `purchase_money` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_ticket`
--

INSERT INTO `book_ticket` (`book_ticket_id`, `book_flight_no`, `book_depart_from`, `book_depart_to`, `book_flight_date`, `book_flight_time`, `book_journey_hour`, `book_seat_number`, `book_fare`, `book_pas_name`, `book_pas_gender`, `book_pas_passport`, `book_pas_city`, `book_pas_mobile`, `book_email`, `purchase_bank`, `purchase_ac`, `purchase_pass`, `purchase_money`) VALUES
(62, 'F2702', 'Dhaka', 'Beijing', '2016-04-08', '18:30:00', 2, 'A1', 'Economy', 'S. Sadrul Hossain', '0', '1994300319', 'Dhaka', '+8801797557541', 'hossainsadrul@gmail.com', 'DBBL', '1101053327', 1994, 11500);

-- --------------------------------------------------------

--
-- Table structure for table `flight_schedule`
--

CREATE TABLE IF NOT EXISTS `flight_schedule` (
  `flight_schedule_id` int(15) NOT NULL,
  `flight_no` varchar(15) NOT NULL,
  `airbus_noo` varchar(20) NOT NULL,
  `depart_from` text NOT NULL,
  `depart_to` text NOT NULL,
  `flight_date` date NOT NULL,
  `flight_time` time NOT NULL,
  `journey_hour` int(10) NOT NULL,
  `fare_first` text NOT NULL,
  `fare_economy` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight_schedule`
--

INSERT INTO `flight_schedule` (`flight_schedule_id`, `flight_no`, `airbus_noo`, `depart_from`, `depart_to`, `flight_date`, `flight_time`, `journey_hour`, `fare_first`, `fare_economy`) VALUES
(7, 'F2700', 'Boing737', 'Dhaka', 'Beijing', '2016-04-08', '18:00:00', 2, '27000', '12000'),
(8, 'F2702', 'Boing757', 'Dhaka', 'Beijing', '2016-04-08', '18:30:00', 2, '24000', '11500'),
(9, 'F2703', 'Boing797', 'Dhaka', 'Beijing', '2016-04-08', '16:45:00', 2, '30500', '16000'),
(10, 'F2707', 'Boing797', 'Beijing', 'Dhaka', '2016-04-10', '14:15:00', 2, '30500', '16000'),
(11, 'F2708', 'Boing737', 'Beijing', 'Dhaka', '2016-04-10', '12:00:00', 2, '27000', '12000'),
(12, 'F2710', 'Boing757', 'Beijing', 'Dhaka', '2016-04-10', '19:15:00', 2, '24000', '11500');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE IF NOT EXISTS `passenger` (
  `pas_id` int(50) NOT NULL,
  `pas_name` varchar(100) NOT NULL,
  `pas_gender` text NOT NULL,
  `pas_passport` int(200) NOT NULL,
  `pas_city` text NOT NULL,
  `pas_mobile` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pas_registation`
--

CREATE TABLE IF NOT EXISTS `pas_registation` (
  `pas_id` int(11) NOT NULL,
  `pas_fname` text NOT NULL,
  `pas_lname` text NOT NULL,
  `pas_username` text NOT NULL,
  `pas_birth` date NOT NULL,
  `pas_nationality` text NOT NULL,
  `pas_passport` varchar(100) NOT NULL,
  `pas_mobile` varchar(40) NOT NULL,
  `pas_email` varchar(100) NOT NULL,
  `pas_password` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pas_registation`
--

INSERT INTO `pas_registation` (`pas_id`, `pas_fname`, `pas_lname`, `pas_username`, `pas_birth`, `pas_nationality`, `pas_passport`, `pas_mobile`, `pas_email`, `pas_password`) VALUES
(3, 'Uzzal', 'Kar', 'uzzalkar12', '1994-01-08', 'Bangladeshi', '131152302', '01754493563', 'uzzalkar12@gmail.com', '1234'),
(4, 'Sadrul ', 'Hossain', 'sadrulhossain', '1994-01-04', 'Bangladeshi', '131152402', '01754493563', 'uzzalkar12@gmail.com', '12345'),
(5, 'Soikat', 'Hasan', 'SoikatHasan', '2001-03-03', 'Bangladeshi', '151155165', '01754493563', 'uzzalkar12@gmail.com', '2244'),
(6, 'Sabya', 'Saha', 'sabyasaha', '2003-04-05', 'Bangladeshi', '13152213', '01754493563', 'uzzalkar12@gmail.com', '1234'),
(8, 'S. Sadrul', 'Hossain', 'sadrul_hossain', '1994-09-04', 'Bangladeshi', '1994300319', '+8801797557541', 'hossainsadrul@gmail.com', '6208'),
(9, 'Sahanaj', 'Akter', 'sahanajakter', '2016-08-25', 'Bangladeshi', '1993399253', '+8801946555926', 'sahanaj1994@gmail.com', '123456'),
(10, 'Mustakim', 'Al Helal', 'mustakim_sunny', '1988-04-11', 'Bangladeshi', '1988320191', '+8801971907963', 'mustakimsunny@diu.edu.bd', '2424'),
(11, 'Mustakim', 'Al Helal', 'mustakim_sunny', '1988-04-11', 'Bangladeshi', '1988320191', '+8801971907963', 'mustakimsunny@diu.edu.bd', '242424'),
(12, 'Mustakim', 'Al Helal', 'mustakim_sunny', '2016-04-11', 'Bangladeshi', '1988320191', '+8801971907963', 'mustakimsunny@diu.edu.bd', '242424'),
(13, 'Mustakim', 'Al Helal', 'mustakim_sunny', '2016-04-11', 'Bangladeshi', '1988320191', '+8801971907963', 'mustakimsunny@diu.edu.bd', '2424'),
(14, 'S. Sadrul', 'Hossain', 'sadrul_hossain', '1994-09-04', 'Bangladeshi', '1994300319', '+8801797557541', 'hossainsadrul@gmail.com', '6208'),
(15, 'Mustakim', 'Al Helal', 'mustakim_sunny', '1988-03-23', 'Bangladeshi', '1988320191', '+8801971907963', 'mustakimsunny@diu.edu.bd', '2424'),
(16, 'S. Sadrul', 'Hossain', 'sadrul_hossain', '1994-09-04', 'Bangladeshi', '1994300319', '+8801797557541', 'hossainsadrul@gmail.com', '6208');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_tbl`
--

CREATE TABLE IF NOT EXISTS `purchase_tbl` (
  `purchase_id` int(16) NOT NULL,
  `purchase_bank` text NOT NULL,
  `purchase_ac` varchar(100) NOT NULL,
  `purchase_pass` varchar(255) NOT NULL,
  `purchase_money` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_tbl`
--

INSERT INTO `purchase_tbl` (`purchase_id`, `purchase_bank`, `purchase_ac`, `purchase_pass`, `purchase_money`) VALUES
(1, 'BRAC Bank', '123456789', '1234', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `seat_tbl`
--

CREATE TABLE IF NOT EXISTS `seat_tbl` (
  `seat_id` int(11) NOT NULL,
  `airbus_no` varchar(20) NOT NULL,
  `seat_no` varchar(20) NOT NULL,
  `seat_status` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat_tbl`
--

INSERT INTO `seat_tbl` (`seat_id`, `airbus_no`, `seat_no`, `seat_status`) VALUES
(9, 'Boing737', 'A1', 0),
(10, 'Boing737', 'A2', 0),
(11, 'Boing737', 'B1', 0),
(12, 'Boing737', 'B2', 0),
(13, 'Boing737', 'C1', 0),
(14, 'Boing737', 'C2', 0),
(15, 'Boing737', 'D1', 0),
(16, 'Boing737', 'D2', 0),
(17, 'Boing797', 'A1', 0),
(18, 'Boing797', 'A2', 0),
(19, 'Boing797', 'B1', 0),
(20, 'Boing797', 'B2', 0),
(21, 'Boing797', 'C1', 0),
(22, 'Boing797', 'D1', 0),
(23, 'Boing797', 'D2', 0),
(25, 'Boing757', 'A1', 1),
(26, 'Boing757', 'A2', 0),
(27, 'Boing757', 'B1', 0),
(28, 'Boing757', 'B2', 0),
(29, 'Boing757', 'C1', 0),
(30, 'Boing757', 'C2', 0),
(31, 'Boing757', 'D1', 0),
(32, 'Boing757', 'D2', 0),
(43, 'Boing797', 'C2', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_reg`
--
ALTER TABLE `admin_reg`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `airbus`
--
ALTER TABLE `airbus`
  ADD PRIMARY KEY (`airbus_id`);

--
-- Indexes for table `airport`
--
ALTER TABLE `airport`
  ADD PRIMARY KEY (`airport_id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `book_ticket`
--
ALTER TABLE `book_ticket`
  ADD PRIMARY KEY (`book_ticket_id`);

--
-- Indexes for table `flight_schedule`
--
ALTER TABLE `flight_schedule`
  ADD PRIMARY KEY (`flight_schedule_id`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`pas_id`);

--
-- Indexes for table `pas_registation`
--
ALTER TABLE `pas_registation`
  ADD PRIMARY KEY (`pas_id`);

--
-- Indexes for table `purchase_tbl`
--
ALTER TABLE `purchase_tbl`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `seat_tbl`
--
ALTER TABLE `seat_tbl`
  ADD PRIMARY KEY (`seat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airbus`
--
ALTER TABLE `airbus`
  MODIFY `airbus_id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `book_ticket`
--
ALTER TABLE `book_ticket`
  MODIFY `book_ticket_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `flight_schedule`
--
ALTER TABLE `flight_schedule`
  MODIFY `flight_schedule_id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `pas_registation`
--
ALTER TABLE `pas_registation`
  MODIFY `pas_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `purchase_tbl`
--
ALTER TABLE `purchase_tbl`
  MODIFY `purchase_id` int(16) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `seat_tbl`
--
ALTER TABLE `seat_tbl`
  MODIFY `seat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
