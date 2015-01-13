<?php

//replace with relevant params
//name of database
$name ="devtaxicloudv7";
//users email address
$user = 'testerresta@gmail.com';
//calendar_id should already be owned by user
$calendar = 'if7rflqiqu3honr4tstj9db3e4@group.calendar.google.com';



if( $_SERVER['SERVER_ADDR'] == "127.0.0.1" ){
    define('DB_TYPE', 'mysql');
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
} else {
    define('DB_TYPE', 'mysql');
    define('DB_HOST', 'ip-172-31-14-80');
    define('DB_USER', 'root');
    define('DB_PASS', 'password');
}

$database = new PDO(DB_TYPE.':host='.DB_HOST, DB_USER, DB_PASS);

$statement = '
    CREATE DATABASE IF NOT EXISTS `'.$name.'` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `'.$name.'`;';
$tables = '
CREATE TABLE IF NOT EXISTS `driver` (
  `driver_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(63) NOT NULL,
  `address` varchar(127) DEFAULT NULL,
  `phone_number` varchar(31) DEFAULT NULL,
  `email_address` varchar(320) DEFAULT NULL,
  `calendar_id` varchar(255) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`driver_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `payment_method` (
  `payment_method_id` int(11) NOT NULL,
  `description` varchar(31) NOT NULL,
  PRIMARY KEY (`payment_method_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `user_type` (
  `user_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(64) NOT NULL,
  PRIMARY KEY (`user_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(4) NOT NULL AUTO_INCREMENT,
  `password` varchar(89) DEFAULT NULL,
  `fname` varchar(65) DEFAULT NULL,
  `lname` varchar(65) DEFAULT NULL,
  `email` varchar(325) DEFAULT NULL,
  `role` int(11) NOT NULL,
  `driver_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `role` (`role`),
  KEY `driver_id` (`driver_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `company` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(127) NOT NULL,
  `address` varchar(127) DEFAULT NULL,
  `contact_name` varchar(127) DEFAULT NULL,
  `phone_number` varchar(31) DEFAULT NULL,
  `email_address` varchar(320) DEFAULT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `passenger_name` varchar(63) NOT NULL,
  `phone_number` varchar(31) DEFAULT NULL,
  `email_address` varchar(320) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `booking` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `pickup` datetime NOT NULL,
  `customer_id` int(11) NOT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `payment_method_id` int(11) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `cal_event_id` varchar(255) DEFAULT NULL,
  `type_id` int(11) NOT NULL,
  PRIMARY KEY (`booking_id`),
  KEY `customer_id` (`customer_id`),
  KEY `driver_id` (`driver_id`),
  KEY `payment_method_id` (`payment_method_id`),
  KEY `company_id` (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `address` (
  `address_id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `address` varchar(127) NOT NULL,
  `flight_code` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`address_id`),
  KEY `booking_id` (`booking_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `calendar_share` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `driver_id` int(11) NOT NULL,
  `email` varchar(325) NOT NULL,
  `access` varchar(127) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `driver_id` (`driver_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `cost` (
  `cost_id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `cost_pence` int(11) NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cost_id`),
  KEY `booking_id` (`booking_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;



CREATE TABLE IF NOT EXISTS `holiday` (
  `holiday_id` int(11) NOT NULL AUTO_INCREMENT,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `driver_id` int(11) NOT NULL,
  PRIMARY KEY (`holiday_id`),
  KEY `driver_id` (`driver_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`booking_id`) ON UPDATE CASCADE;

ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`driver_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_method` (`payment_method_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_4` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`) ON UPDATE CASCADE;


ALTER TABLE `calendar_share`
  ADD CONSTRAINT `calendar_share_ibfk_1` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`driver_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `cost`
  ADD CONSTRAINT `cost_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`booking_id`) ON UPDATE CASCADE;

ALTER TABLE `holiday`
  ADD CONSTRAINT `holiday_ibfk_1` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`driver_id`) ON UPDATE CASCADE;


ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `user_type` (`user_type_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`driver_id`) ON UPDATE CASCADE;
'.

    "INSERT INTO `payment_method` (`payment_method_id`, `description`) VALUES
(1, 'cash'),
(2, 'debit/credit card'),
(3, 'cheque');

INSERT INTO `driver` (`driver_id`, `name`, `address`, `phone_number`, `email_address`, `calendar_id`, `active`) VALUES
(1, 'Unassignedd', 'No address', '000000000000000000', 'owner@taxicloud.co.uk', '".$calendar."', 1);

INSERT INTO `user_type` (`user_type_id`, `role`) VALUES
(1, 'Owner'),
(2, 'Admin'),
(3, 'Driver');


INSERT INTO `users` ( `password` , `fname` , `lname` , `email` , `role` , `driver_id` )
VALUES (
NULL , '', '', '".$user."', 2, NULL
);

INSERT INTO `calendar_share` ( `driver_id`, `email`, `access`) VALUES
( 1, '".$user."', 'owner');

CREATE TABLE IF NOT EXISTS `version` (
  `version` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `version` (`version`) VALUES
(1);


";
$query = $database->prepare($statement);
$query->execute();
$databas = new PDO(DB_TYPE.':host='.DB_HOST.';dbname='.$name, DB_USER, DB_PASS);

$queryer = $databas->prepare($tables);
$queryer->execute();



?>