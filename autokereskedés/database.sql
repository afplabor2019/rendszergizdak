CREATE TABLE `car` (
	`id` int(10) AUTO_INCREMENT,
	`name` varchar(255),
	`year` int(4),
	`model` varchar(255),
	`brand` varchar(255),
	`price` int(10),
	`img` varchar(255),
	`type` varchar(255) COMMENT 'SELL OR RENT',
    PRIMARY KEY (`id`)
);

INSERT INTO `car` VALUES
	/*rentable cars */
	(1, 'Mercedes', '2015', 'Sedan', 'Mercedes', 25, 'images/car-1.jpg', 'RENT'),
	(2, 'Range Rover', '2015', 'Sedan', 'Mercedes', 25, 'images/car-2.jpg', 'RENT'),
	(3, 'Audi', '2015', 'Sedan', 'Audi', 25, 'images/car-3.jpg', 'RENT'),
	(4, 'Ford Mustang', '2015', 'Sedan', 'Ford', 25, 'images/car-4.jpg', 'RENT'),
	(5, 'BMW', '2015', 'Sedan', 'BMW', 25, 'images/car-5.jpg', 'RENT'),
	(6, 'Alfa Romeo 4C', '2015', 'Sedan', 'Alfa Romeo', 25, 'images/car-6.jpg', 'RENT'),
	(7, 'Mercedes', '2015', 'Sedan', 'Mercedes', 25, 'images/car-7.jpg', 'RENT'),
	(8, 'Jeep Wrangler Unlimited', '2015', 'Offroad', 'Jeep', 25, 'images/car-8.jpg', 'RENT'),
	(9, 'Mercedes ', '2015', 'Sedan', 'Mercedes', 25, 'images/car-9.jpg', 'RENT'),
	(10, 'Mercedes ', '2015', 'Sedan', 'Mercedes', 25, 'images/car-10.jpg', 'RENT'),
	(11, 'Mercedes ', '2015', 'Sedan', 'Mercedes', 25, 'images/car-11.jpg', 'RENT'),
	(12, 'Audi', '2015', 'Sedan', 'Audi', 25, 'images/car-12.jpg', 'RENT'),
	(13, 'Volkswagen Arteon', '2015', 'Sedan', 'Volkswagen', 25, 'images/car-13.jpg', 'RENT'),
	(14, 'Volkswagen Passat', '2015', 'Sedan', 'Volkswagen', 25, 'images/car-14.jpg', 'RENT'),
	(15, 'Ford Mondeo', '2015', 'Sedan', 'Ford', 25, 'images/car-15.jpg', 'RENT'),
	(16, 'Skoda SuperB', '2015', 'Sedan', 'Skoda', 25, 'images/car-16.jpg', 'RENT'),
	(17, 'Skoda Octavia', '2015', 'Sedan', 'Skoda', 25, 'images/car-17.jpg', 'RENT'),
	(18, 'Lexus ES300h', '2015', 'Sedan', 'Lexus', 25, 'images/car-18.jpg', 'RENT'),
	(19, 'Lexus RX', '2015', 'SUV', 'Lexus', 25, 'images/car-19.jpg', 'RENT'),
	/*sellable cars*/
	(20, 'Jeep Wrangler Unlimited', '2015', 'Offroad', 'Jeep', 30000, 'images/car-8.jpg', 'SELL'),
	(21, 'Volkswagen Arteon', '2015', 'Sedan', 'Volkswagen', 25000, 'images/car-13.jpg', 'SELL'),
	(22, 'Volkswagen Passat', '2015', 'Sedan', 'Volkswagen', 20000, 'images/car-14.jpg', 'SELL'),
	(23, 'Ford Mondeo', '2015', 'Sedan', 'Ford', 20000, 'images/car-15.jpg', 'SELL'),
	(24, 'Skoda SuperB', '2015', 'Sedan', 'Skoda', 25000, 'images/car-16.jpg', 'SELL')
;