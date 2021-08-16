-- MySQL dump 10.13  Distrib 8.0.25, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: sys-clinica
-- ------------------------------------------------------
-- Server version	5.7.30-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `preescripcion`
--

DROP TABLE IF EXISTS `preescripcion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `preescripcion` (
  `id_preescripcion` int(200) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(200) NOT NULL,
  `id_medico` int(200) NOT NULL,
  `historia` varchar(1000) NOT NULL,
  `id_sesion` int(200) NOT NULL,
  `fecha` date NOT NULL,
  `radiografia` varchar(11) DEFAULT NULL,
  `sangre` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_preescripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preescripcion`
--

LOCK TABLES `preescripcion` WRITE;
/*!40000 ALTER TABLE `preescripcion` DISABLE KEYS */;
INSERT INTO `preescripcion` VALUES (1,20,17,'gripe',17,'2020-08-09','Estomago','DEA 1'),(2,20,8,'gripe',17,'2020-08-09','Patas','DEA 2'),(4,21,12,'moco',5,'2021-07-08','Cabeza','DEA 4'),(5,21,17,'mocox2',5,'2021-07-08','Estomago','DEA 5'),(6,21,8,'mocox4',5,'2021-07-08','Cabeza','DEA 6'),(7,21,17,'mocox5',5,'2021-07-08','cabezax2','DEA 8'),(8,21,12,'muchos mocos',5,'2021-07-08','cabezax3','DEA 7'),(9,21,12,'muchos mocos',5,'2021-07-08','cabezax3','DEA 7'),(10,16,12,'muchos mocos',5,'2021-07-08','cabezax3','DEA 7'),(11,21,8,'asd',5,'2021-07-08','cabezax3','DEA 7'),(12,21,12,'ascacs',5,'2021-07-08','cabezax3','DEA 7'),(14,16,12,'mocosss',5,'2021-07-08','cabezax4','DEA 7'),(15,21,12,'le duele el estomago',5,'2021-07-08','estomago','DEA 4'),(16,13,12,'dolor de estomago',5,'2021-07-08','estomago','DEA 8'),(17,13,12,'dolor',5,'2021-07-08','cabezax4','DEA 1'),(18,9,12,'dolor',5,'2021-07-08','estomago','DEA 3'),(19,9,12,'dolor',5,'2021-07-08','estomago','DEA 3');
/*!40000 ALTER TABLE `preescripcion` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-08-16  0:04:47
