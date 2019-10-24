DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
    `id` int AUTO_INCREMENT,
    `name` VARCHAR(255),
    `balance` int,
    PRIMARY KEY (`id`)
);

INSERT INTO `users` (`name`, `balance`) VALUES
    ('Dani', 10000)
;