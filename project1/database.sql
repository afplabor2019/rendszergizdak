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
	(1, 'Mercedes Grand Sedan', '2015', 'Sedan', 'Mercedes', 25, 'images/car-1.jpg', 'RENT'),
	(2, 'Mercedes Grand Sedan', '2015', 'Sedan', 'Mercedes', 25, 'images/car-2.jpg', 'RENT'),
	(3, 'Mercedes Grand Sedan', '2015', 'Sedan', 'Audi', 25, 'images/car-3.jpg', 'RENT'),
	(4, 'Mercedes Grand Sedan', '2015', 'Sedan', 'Mercedes', 25, 'images/car-4.jpg', 'RENT'),
	(5, 'Mercedes Grand Sedan', '2015', 'Sedan', 'BMW', 25, 'images/car-5.jpg', 'RENT'),
	(6, 'Mercedes Grand Sedan', '2015', 'Sedan', 'Ferrari', 25, 'images/car-6.jpg', 'RENT'),
	(7, 'Mercedes Grand Sedan', '2015', 'Sedan', 'Mercedes', 25, 'images/car-7.jpg', 'RENT'),
	(8, 'Mercedes Grand Sedan', '2015', 'Terepjaro', 'Ford', 25, 'images/car-8.jpg', 'RENT'),
	(9, 'Mercedes Grand Sedan', '2015', 'Sedan', 'Mercedes', 25, 'images/car-9.jpg', 'RENT'),
	(10, 'Mercedes Grand Sedan', '2015', 'Sedan', 'Mercedes', 25, 'images/car-10.jpg', 'RENT'),
	(11, 'Mercedes Grand Sedan', '2015', 'Sedan', 'Mercedes', 25, 'images/car-11.jpg', 'RENT'),
	(12, 'Mercedes Grand Sedan', '2015', 'Sedan', 'Audi', 25, 'images/car-12.jpg', 'RENT')
;