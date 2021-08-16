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
-- Table structure for table `cita`
--

DROP TABLE IF EXISTS `cita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cita` (
  `id_cita` int(200) NOT NULL AUTO_INCREMENT,
  `id_paciente` int(200) NOT NULL,
  `id_medico` int(200) NOT NULL,
  `fecha` date NOT NULL,
  `estado_cita` varchar(200) NOT NULL,
  `observaciones` varchar(200) NOT NULL,
  `horario` varchar(200) NOT NULL,
  `id_especialidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_cita`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cita`
--

LOCK TABLES `cita` WRITE;
/*!40000 ALTER TABLE `cita` DISABLE KEYS */;
INSERT INTO `cita` VALUES (2,9,12,'2020-08-18','reservado','hora exacrta','9',NULL),(5,16,17,'2021-07-08','reservado','traer docuemntos','38',NULL),(6,21,12,'2021-07-09','reservado','TIENES UNA NUEVA CITA HOY ','38',NULL),(7,14,12,'2021-07-08','reservado','llegar temprano','1',NULL),(8,22,8,'2021-07-08','reservado','Tiene dolor de estomago','37',NULL),(9,22,8,'2021-08-02','reservado','agregando una nueva cita','1',NULL),(10,22,8,'2021-08-03','reservado','esta es la observaciÃ³n ','9',NULL),(11,22,24,'2021-09-27','reservado','Mi primera Cita ','27',5),(13,22,23,'2021-08-13','reservado','cita para notificaciÃ³n','3',NULL),(14,27,12,'2021-09-03','reservado','nada','14',NULL),(15,27,12,'2021-08-19','reservado','Solicito una cita','17',11),(16,22,24,'2021-09-10','reservado','Solicito una cita','38',5),(17,22,24,'2021-08-30','reservado','Solicito una cita','19',1),(18,27,17,'2021-08-17','reservado','Solicito una cita','2',8);
/*!40000 ALTER TABLE `cita` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-08-16  0:04:48
