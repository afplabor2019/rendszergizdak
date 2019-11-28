DROP DATABASE IF EXISTS `kaszino`;
CREATE DATABASE `kaszino`;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
    `id` int AUTO_INCREMENT,
    `name` VARCHAR(255),
    `balance` int,
    `password` VARCHAR(255),
    PRIMARY KEY (`id`)
);

INSERT INTO `users` (`name`, `balance`, `password`) VALUES
    ('Dani', 10000, 'asd'),
    ('Alice', 10000, 'alma'),
    ('Bob', 10000, 'korte')
;