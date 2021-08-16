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
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `codigo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (5,'admin','a1Bz20ydqelm8m1wql21232f297a57a5a743894a0e4a801fc3','','administrador','sistemas','en oferta','54345','tusolutionweb@gmail.com',''),(6,'siba','a1Bz20ydqelm8m1wql21232f297a57a5a743894a0e4a801fc3','','recepcionista','siba','siba','2342423','siba@gmail.com',''),(8,'Juana','a1Bz20ydqelm8m1wql1574612a64e746d204acae6e51b7d695','','medico','worrent','yafe','3253453453','worrent@gmail.com',''),(9,'pedroActualizado','a1Bz20ydqelm8m1wqlc6cc8094c2dc07b700ffcc36d64e2138','','paciente','Pedro','Suares','234324234','pedro@gmail.com','Pedro395'),(12,'Augusto','a1Bz20ydqelm8m1wql21232f297a57a5a743894a0e4a801fc3','bb.jpg','medico','willian hart','Walllace','242342432','willian@gmail.com',''),(13,'bills','a1Bz20ydqelm8m1wqlb5237b6a7892a42a4a7a60fdfbe828b9','','paciente','bills','Donal','1312312213','bills@gmail.com','bils626'),(14,'Laika','a1Bz20ydqelm8m1wqle10adc3949ba59abbe56e057f20f883e','','paciente','Aaron','Swarss','2423424','aaron@gmail.com','Aaron156'),(16,'Koko','a1Bz20ydqelm8m1wql1fa4a2211b4e290f2a066de6b84187ec','','paciente','Carla','Diaz','345353','carla@gmail.com','Carla694'),(17,'David','a1Bz20ydqelm8m1wql652044ac6e008761b3e6141748a99880','','medico','diego3','flores','09809809','medico@gmail.com',''),(19,'recep','a1Bz20ydqelm8m1wql746035f8741e922eb5fa31ea766d9ece','','recepcionista','maria','lingo','97979','recep@gmail.com',''),(20,'Choco','a1Bz20ydqelm8m1wqld243800a7d0ba0f87081bcdd832bb05f','','paciente','rodrigo','llanos','98798798','paciente@gmail.com','rodrigo481'),(22,'arge','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','paciente','Argenis','Uceda Malca','944658054','argenis16.aum@gmail.com','Argenis027'),(24,'Romix','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','medico','Romy','Martel Arnao','94481665','romy@correo.com',''),(25,'victor','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','recepcionista','Victor','Martinez Osorio','0123648994','victor@correo.com',''),(26,'mar','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','paciente','Maryuri','Reyes ','989456261','maryuri@correo.com','Maryuri397'),(27,'rafa','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','paciente','Raphael','Uceda Algarate','987423621','raphaeluceda@gmail..com','Raphael108'),(28,'angelo','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','paciente','Angelo','Uceda Malca','944861530','angelo@correo.com','Angelo221'),(29,'koki','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','medico','koki','moreano','962551629','koki@correo.com','koki261'),(30,'mag','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','farmaceutico','magdalena','magdalena','199199','mag@correo.com','magdalena53'),(31,'jesus','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','farmaceutico','jesus ','malca','018426299','jesus@correo.com','jesus 425'),(32,'jesus2','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','farmaceutico','jesus2','malca2','22222222222','jesus2@correo.com','jesus2406'),(33,'jesus3','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','farmaceutico','jesus3','jesus3','33151616','jesus3@correo.com','jesus3825'),(34,'je4','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','farmaceutico','je4','je4','223435','je@correo.com','je4578'),(35,'a5','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','farmaceutico','a5','a5','24235346','a5@correo.com','a5332'),(36,'a6','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','farmaceutico','a6','a6','565734779','a6@correo.com','a6288'),(37,'c1','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','farmaceutico','c1','c1','456568543','asd@correo.com','c1759'),(38,'c2','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','farmaceutico','c2','c2','786457568','corro@correo.com','c2447'),(39,'c3','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','farmaceutico','c3','c3','0879686856','corro@correo.com','c3538'),(40,'af','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','farmaceutico','af','af','9446545646','corro@correo.com','af605'),(41,'confe','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','farmaceutico','confe','confe','9446545646','confe@correo.com','confe114'),(42,'gg','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','farmaceutico','gg','gg','675677','corro@correo.com','gg805'),(43,'axel','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','farmaceutico','axel','Esteban ','95926262','axel@correo.com','axel648'),(44,'yusus','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','farmaceutico','jesus','jesus','864353','corro@correo.com','jesus886'),(45,'hh','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','farmaceutico','hh','hh','916','corro@correo.com','hh52'),(46,'bb','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','farmaceutico','bb','bb','99151866','corro@correo.com','bb592'),(47,'pp2233','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','farmaceutico','pp223','pp2233','453534533','corro@correo.com','pp858'),(51,'alerta','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','paciente','aleta','alerta','4643','correo@correo.com','aleta764'),(55,'xx','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','paciente','xx','xx','575675','correo@correo.com','xx655'),(56,'vv','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','paciente','vvv','vvv','4564','correo@correo.com','vvv245'),(58,'qq','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','paciente','qq','qq','43534543','correo@correo.com','qq226'),(59,'ss','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','paciente','sss','ss','3543543','correo@correo.com','sss570'),(60,'ffffff','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','paciente','ffffff','fff','456456456','correo@correo.com','ffffff543'),(61,'nn','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','paciente','nn','nn','87867','correo@correo.com','nn519'),(62,'hhh','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','paciente','hh','hh','45657568','corro@correo.com','hh25'),(63,'mm','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','paciente','mm','mm','65756785','corro@correo.com','mm293'),(65,'dfgdg','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','paciente','fgfg','dfgd','68678678','asd@correo.com','fgfg364'),(66,'gyytr','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','paciente','gras','sad','7686','correo@correo.com','gras199'),(67,'hg','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','paciente','hg','hg','786743','corro@correo.com','hg477'),(68,'argedvd','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','paciente','hyh','dvdv','868678','correo@correo.com','hyh250'),(69,'fefefe','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','paciente','fefefe','fefefe','435345','correo@correo.com','fefefe670'),(70,'xxxxxxxxx','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','paciente','xxxx','xxxxxxx','345345345','corro@correo.com','xxxx394'),(71,'bbbb','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','paciente','bbbb','bbbb','3423423','corro@correo.com','bbbb682'),(72,'vvcvcvcv','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','paciente','fdfd','fdfs','9877','correo@correo.com','fdfd805'),(73,'vvcvcvcv2','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','paciente','fdfd','fdfs','9877','correo@correo.com','fdfd837'),(74,'23ddcx','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','paciente','sdasd','dfdfdf','4365654','correo@correo.com','sdasd151'),(75,'retre','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','paciente','ergr','rrer','43545345','correo@correo.com','ergr677'),(76,'nnnhh','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','paciente','nhnh','nhnh','345345','corro@correo.com','nhnh152'),(77,'xcxc','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','paciente','xcxc','xcxcx','435345','correo@correo.com','xcxc673'),(78,'vbvbv','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','paciente','vbv','vbvb','8678768','correo@correo.com','vbv566'),(79,'ytytyty','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','paciente','ytryty','tyty','5645787','corro@correo.com','ytryty227'),(80,'lizeth','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','medico','lizet','Vega','97456874','lizert@gmail.com','lizet140'),(81,'bbbvbvb','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','paciente','nhnggn','vbvbvbvbbbbbbb','56456','corro@correo.com','nhnggn626'),(82,'paciente000','a1Bz20ydqelm8m1wql202cb962ac59075b964b07152d234b70','','paciente','paciente00','marta','0515','correo@correo.com','paciente00426');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
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
