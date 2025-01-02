DROP DATABASE IF EXISTS `boodschappen`;
CREATE DATABASE IF NOT EXISTS `boodschappen`;
USE `boodschappen`;

DROP TABLE IF EXISTS `boodschappen`;
CREATE TABLE IF NOT EXISTS `boodschappen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(150) NOT NULL,
  `amount` int(11) UNSIGNED NOT NULL,
  `price` decimal(6,2) DEFAULT NULL,
  KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

REPLACE INTO `boodschappen` (`id`, `product`, `amount`, `price`) VALUES
	(1, 'Brood', 3, 1.00),
	(2, 'Broccoli', 4, 0.99),
	(3, 'Krentenbollen', 2, 1.20),
	(4, 'Noten', 5, 2.99),
	(5, 'Kaas', 1, 2.49),
	(6, 'Soep', 2, 2.99),
	(7, 'Ietslangerehelelangeproductnaamzonderspaties', 3, 0.25),
	(8, 'Soortgelijke helelangeproductnaamzonderspatiesmetwat extra woorden', 1, 1.49),
	(9, 'Oma\'s soep met "ballen"', 5, 2.29),
	(10, 'Half-om-half gehakt', 2, 3.49),
	(11, 'Chips', 4, 2.29),
	(12, 'Pizza', 2, 3.99),
	(13, 'some', 1, 3.00),
	(14, 'additional', 3, 14.15),
	(15, 'entries', 4, 3.21),
	(16, 'to', 1, 1.11),
	(17, 'bulk out', 100, 0.15),
	(18, 'the list', 1, 99.99),
	(19, 'Cake', 1, 7.99),
	(20, 'Sprinkles', 2, 0.99),
	(21, 'Whipped Cream', 1, 1.79);