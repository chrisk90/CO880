-- --------------------------------------------------------
-- Host:                         vm-jane.sdgworld.net
-- Server version:               5.5.8 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.0.0.4396
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for mydb
CREATE DATABASE IF NOT EXISTS `mydb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `mydb`;


-- Dumping structure for table mydb.address
CREATE TABLE IF NOT EXISTS `address` (
  `address_id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `address` varchar(127) NOT NULL,
  `flight_code` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`address_id`),
  KEY `booking_id_idx` (`booking_id`),
  CONSTRAINT `a_booking_id` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`booking_id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mydb.address: ~0 rows (approximately)
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
/*!40000 ALTER TABLE `address` ENABLE KEYS */;


-- Dumping structure for table mydb.booking
CREATE TABLE IF NOT EXISTS `booking` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `pickup` datetime NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `payment_method_id` int(11) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `pickup_address` varchar(255) NOT NULL,
  `dropoff_address` varchar(255) NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `cal_event_id` varchar(255) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`booking_id`),
  KEY `customer_id_idx` (`customer_id`),
  KEY `driver_id_idx` (`driver_id`),
  KEY `payment_method_id_idx` (`payment_method_id`),
  KEY `company_id_idx` (`company_id`),
  CONSTRAINT `b_company_id` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `b_customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `b_driver_id` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`driver_id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Dumping data for table mydb.booking: ~5 rows (approximately)
/*!40000 ALTER TABLE `booking` DISABLE KEYS */;
INSERT INTO `booking` (`booking_id`, `pickup`, `customer_id`, `driver_id`, `payment_method_id`, `company_id`, `pickup_address`, `dropoff_address`, `comment`, `cal_event_id`, `type_id`) VALUES
	(3, '2015-05-16 08:10:00', 1, 5, 1, NULL, 'Upper Ground, London', 'University of Kent, Canterbury', '3 people', NULL, NULL),
	(4, '2015-05-12 12:12:12', 2, 1, 1, NULL, 'London Bridge, London', 'Waterloo Bridge, London', 'Return trip also needed', NULL, NULL),
	(6, '2015-03-01 10:01:00', 3, 5, 1, NULL, 'Some Street, London', 'Another Street, London', 'Taxi for friend "Susan"', NULL, NULL),
	(9, '2015-05-12 12:12:12', NULL, 4, 1, NULL, 'Somewhere, London', 'Somewhere else, London', '', NULL, NULL),
	(10, '2015-05-12 12:12:12', 2, 1, 0, NULL, 'Upper Ground, SE1 9PD', 'Canterbury, CT2 7RF', '', NULL, NULL);
/*!40000 ALTER TABLE `booking` ENABLE KEYS */;


-- Dumping structure for table mydb.calendar_share
CREATE TABLE IF NOT EXISTS `calendar_share` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `driver_id` int(11) NOT NULL,
  `email` varchar(325) NOT NULL,
  `access` varchar(127) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `driver_id_idx` (`driver_id`),
  CONSTRAINT `cs_driver_id` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`driver_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mydb.calendar_share: ~0 rows (approximately)
/*!40000 ALTER TABLE `calendar_share` DISABLE KEYS */;
/*!40000 ALTER TABLE `calendar_share` ENABLE KEYS */;


-- Dumping structure for table mydb.company
CREATE TABLE IF NOT EXISTS `company` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(127) NOT NULL,
  `address` varchar(127) DEFAULT NULL,
  `contact_name` varchar(127) DEFAULT NULL,
  `phone_number` varchar(31) DEFAULT NULL,
  `email_address` varchar(320) DEFAULT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table mydb.company: ~1 rows (approximately)
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` (`company_id`, `name`, `address`, `contact_name`, `phone_number`, `email_address`) VALUES
	(1, 'University of Kent', 'University of Kent, Canterbury', 'Rogerio De Lemos', '12345', 'R.DeLemos@me.com');
/*!40000 ALTER TABLE `company` ENABLE KEYS */;


-- Dumping structure for table mydb.cost
CREATE TABLE IF NOT EXISTS `cost` (
  `cost_id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `cost_pence` int(11) NOT NULL,
  `paid` int(11) NOT NULL DEFAULT '0',
  `comment` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cost_id`),
  KEY `booking_id_idx` (`booking_id`),
  CONSTRAINT `cost_booking_id` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`booking_id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mydb.cost: ~0 rows (approximately)
/*!40000 ALTER TABLE `cost` DISABLE KEYS */;
/*!40000 ALTER TABLE `cost` ENABLE KEYS */;


-- Dumping structure for table mydb.customer
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `passenger_name` varchar(63) NOT NULL,
  `phone_number` varchar(31) DEFAULT NULL,
  `email_address` varchar(320) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table mydb.customer: ~3 rows (approximately)
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` (`customer_id`, `passenger_name`, `phone_number`, `email_address`) VALUES
	(1, 'Chris', '01234', 'chris@somewhere.net'),
	(2, 'Bob Nugget', '012345', 'bob@nugget.com'),
	(3, 'Bob Hope', '123456789', 'bobhope@me.com');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;


-- Dumping structure for table mydb.driver
CREATE TABLE IF NOT EXISTS `driver` (
  `driver_id` int(11) NOT NULL,
  `name` varchar(63) NOT NULL,
  `address` varchar(127) DEFAULT NULL,
  `phone_number` varchar(31) DEFAULT NULL,
  `email_address` varchar(320) DEFAULT NULL,
  `calendar_id` varchar(255) DEFAULT NULL,
  `holiday_id` varchar(255) NOT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`driver_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mydb.driver: ~4 rows (approximately)
/*!40000 ALTER TABLE `driver` DISABLE KEYS */;
INSERT INTO `driver` (`driver_id`, `name`, `address`, `phone_number`, `email_address`, `calendar_id`, `holiday_id`, `active`) VALUES
	(1, 'Bob', '12345', '1 Bob Street', 'bob@taxi.com', 'if7rflqiqu3honr4tstj9db3e4@group.calendar.google.com', 'something', 1),
	(4, '4', '4', '4', '4@taxi.com', 'if7rflqiqu3honr4tstj9db3e4@group.calendar.google.com', 'something', 1),
	(5, '5', '5', '5', '5@taxi.com', 'if7rflqiqu3honr4tstj9db3e4@group.calendar.google.com', 'something', 1),
	(6, 'Someone', '1 Someone Street, Somewhere, Kent, AA1 1AA', '123456', 'someone@taxi.com', 'if7rflqiqu3honr4tstj9db3e4@group.calendar.google.com', 'something', 1);
/*!40000 ALTER TABLE `driver` ENABLE KEYS */;


-- Dumping structure for table mydb.holiday
CREATE TABLE IF NOT EXISTS `holiday` (
  `holiday_id` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `driver_id` int(11) NOT NULL,
  `comment` varchar(300) DEFAULT NULL,
  `cal_event_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`holiday_id`),
  KEY `driver_id_idx` (`driver_id`),
  CONSTRAINT `h_driver_id` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`driver_id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mydb.holiday: ~0 rows (approximately)
/*!40000 ALTER TABLE `holiday` DISABLE KEYS */;
/*!40000 ALTER TABLE `holiday` ENABLE KEYS */;


-- Dumping structure for table mydb.payment_method
CREATE TABLE IF NOT EXISTS `payment_method` (
  `payment_method_id` int(11) NOT NULL,
  `description` varchar(31) NOT NULL,
  PRIMARY KEY (`payment_method_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mydb.payment_method: ~0 rows (approximately)
/*!40000 ALTER TABLE `payment_method` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment_method` ENABLE KEYS */;


-- Dumping structure for table mydb.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(4) NOT NULL AUTO_INCREMENT,
  `password` varchar(89) DEFAULT NULL,
  `fname` varchar(65) DEFAULT NULL,
  `lname` varchar(65) DEFAULT NULL,
  `email` varchar(325) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `driver_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `role_idx` (`role`),
  KEY `driver_id_idx` (`driver_id`),
  CONSTRAINT `users_driver_id` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`driver_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `users_role` FOREIGN KEY (`role`) REFERENCES `user_type` (`user_type_id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Dumping data for table mydb.users: ~6 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`, `password`, `fname`, `lname`, `email`, `role`, `driver_id`) VALUES
	(4, 'password', 'Chris', 'Kelly', 'chris@me.com', NULL, NULL),
	(5, 'driver', 'Bob', 'Driver', 'bob@taxi.com', NULL, 1),
	(6, 'driver', '4', 'Driver', '4', NULL, 4),
	(7, 'driver', '5', 'Driver', '5', NULL, 5),
	(8, 'driver', 'Someone', 'Driver', 'someone@something.com', NULL, 6);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Dumping structure for table mydb.user_type
CREATE TABLE IF NOT EXISTS `user_type` (
  `user_type_id` int(11) NOT NULL,
  `role` varchar(64) NOT NULL,
  PRIMARY KEY (`user_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mydb.user_type: ~0 rows (approximately)
/*!40000 ALTER TABLE `user_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_type` ENABLE KEYS */;


-- Dumping structure for table mydb.version
CREATE TABLE IF NOT EXISTS `version` (
  `version` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mydb.version: ~0 rows (approximately)
/*!40000 ALTER TABLE `version` DISABLE KEYS */;
/*!40000 ALTER TABLE `version` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
