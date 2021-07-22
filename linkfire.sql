USE linkfire;

--
-- Table structure for table `genres`
--

DROP TABLE IF EXISTS `genres`;

CREATE TABLE `genres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `genre` varchar(45) NOT NULL,
  `shortening` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genres`
--
INSERT INTO `genres` VALUES (1,'Alternative','ALT'),(2,'Blues','BLU'),(3,'Classical','CLA'),(4,'Country','COU');
