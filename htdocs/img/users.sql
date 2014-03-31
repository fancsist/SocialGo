-- phpMyAdmin SQL Dump
-- version 3.4.5
--http://www.phpmyadmin.net
--
--Host: localhost
--Generation Time: March 18, 2014 at 10:11pm
--server version: 5,5,16
--PHP Version: 5,3,8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone="00:00";

-- ---------------------------------------

--
-- Table structure for table 'users'
--

CREATE TABLE IF NOT EXISTS `users` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`username` varchar(255) NOT NULL,
	`first_name` varchar(255) NOT NULL,
	`last_name` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	`passowrd` varchar(32) NOT NULL, 
	`sign_up_date` date NOT NULL,
	`activated` enum('0', '1') NOT NULL,
	PRIMARY KEY (`id`)
	) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;