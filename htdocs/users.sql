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