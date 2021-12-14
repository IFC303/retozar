-- MySQL dump 10.13  Distrib 8.0.26, for Linux (x86_64)
--
-- Host: localhost    Database: disc
-- ------------------------------------------------------
-- Server version	8.0.26-0ubuntu0.20.04.2

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins` (
  `usuarios_dni` varchar(9) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`usuarios_dni`),
  KEY `fk_admins_usuarios1_idx` (`usuarios_dni`),
  CONSTRAINT `fk_admins_usuarios1` FOREIGN KEY (`usuarios_dni`) REFERENCES `usuarios` (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES ('1111');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alumnos` (
  `usuarios_dni` varchar(9) COLLATE utf8mb4_spanish_ci NOT NULL,
  `equipos_id` int NOT NULL,
  `cursos_codigo` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cursos_centros_nombre` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`usuarios_dni`),
  KEY `fk_alumnos_equipos1_idx` (`equipos_id`),
  KEY `fk_alumnos_cursos1_idx` (`cursos_codigo`,`cursos_centros_nombre`),
  CONSTRAINT `fk_alumnos_cursos1` FOREIGN KEY (`cursos_codigo`, `cursos_centros_nombre`) REFERENCES `cursos` (`codigo`, `centros_nombre`),
  CONSTRAINT `fk_alumnos_equipos1` FOREIGN KEY (`equipos_id`) REFERENCES `equipos` (`id`),
  CONSTRAINT `fk_alumnos_usuarios1` FOREIGN KEY (`usuarios_dni`) REFERENCES `usuarios` (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumnos`
--

LOCK TABLES `alumnos` WRITE;
/*!40000 ALTER TABLE `alumnos` DISABLE KEYS */;
INSERT INTO `alumnos` VALUES ('1',1,'daw2','Q4400415H'),('10',1,'daw2','Q4400415H'),('11',1,'daw2','Q4400415H'),('12',1,'daw2','Q4400415H'),('13',1,'daw2','Q4400415H'),('2',1,'daw2','Q4400415H'),('3',1,'daw2','Q4400415H'),('4',1,'daw2','Q4400415H'),('5',1,'daw2','Q4400415H'),('6',1,'daw2','Q4400415H'),('7',1,'daw2','Q4400415H'),('8',1,'daw2','Q4400415H'),('9',1,'daw2','Q4400415H');
/*!40000 ALTER TABLE `alumnos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alumnos_has_preguntas`
--

DROP TABLE IF EXISTS `alumnos_has_preguntas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alumnos_has_preguntas` (
  `alumno_dni` varchar(9) COLLATE utf8mb4_spanish_ci NOT NULL,
  `pregunta_id` int NOT NULL,
  `respuesta` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`alumno_dni`,`pregunta_id`),
  KEY `fk_alumnos_has_preguntas_pregunta_id` (`pregunta_id`),
  KEY `fk_alumnos_has_preguntas_alumno_dni` (`alumno_dni`),
  CONSTRAINT `fk_alumnos_has_preguntas_pregunta_id` FOREIGN KEY (`pregunta_id`) REFERENCES `preguntas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumnos_has_preguntas`
--

LOCK TABLES `alumnos_has_preguntas` WRITE;
/*!40000 ALTER TABLE `alumnos_has_preguntas` DISABLE KEYS */;
INSERT INTO `alumnos_has_preguntas` VALUES ('1',1,'7'),('1',2,'5'),('1',3,'5'),('1',4,'5'),('1',5,'5'),('1',6,'5'),('1',7,'5'),('1',8,'5'),('1',9,'5'),('1',10,'5'),('1',11,'5'),('1',12,'5'),('1',13,'5'),('1',14,'5'),('1',15,'5'),('1',16,'5'),('1',17,'5'),('1',18,'5'),('1',19,'5'),('1',20,'5'),('1',21,'3'),('1',22,'5'),('1',23,'5'),('1',24,'5'),('1',25,'5'),('1',26,'5'),('1',27,'5'),('1',28,'5'),('1',29,'5'),('1',30,'5'),('1',31,'5'),('1',32,'5'),('1',33,'5'),('1',34,'5'),('1',35,'5'),('1',36,'5'),('1',37,'5'),('1',38,'5'),('1',39,'5'),('1',40,'5'),('1',41,'3'),('1',42,'5'),('1',43,'5'),('1',44,'5'),('1',45,'5'),('1',46,'5'),('1',47,'5'),('1',48,'5'),('1',49,'5'),('1',50,'5'),('1',51,'5'),('1',52,'5'),('1',53,'5'),('1',54,'5'),('1',55,'5'),('1',56,'5'),('1',57,'5'),('1',58,'5'),('1',59,'5'),('1',60,'5'),('1',61,'3'),('1',62,'5'),('1',63,'5'),('1',64,'5'),('1',65,'5'),('1',66,'5'),('1',67,'5'),('1',68,'5'),('1',69,'5'),('1',70,'5'),('1',71,'5'),('1',72,'5'),('1',73,'5'),('1',74,'5'),('1',75,'5'),('1',76,'5'),('1',77,'5'),('1',78,'5'),('1',79,'5'),('1',80,'5'),('10',1,'15'),('10',2,'5'),('10',3,'5'),('10',4,'5'),('10',5,'5'),('10',6,'5'),('10',7,'5'),('10',8,'5'),('10',9,'5'),('10',10,'5'),('10',11,'5'),('10',12,'5'),('10',13,'5'),('10',14,'5'),('10',15,'5'),('10',16,'5'),('10',17,'5'),('10',18,'5'),('10',19,'5'),('10',20,'5'),('10',21,'5'),('10',22,'5'),('10',23,'5'),('10',24,'5'),('10',25,'5'),('10',26,'5'),('10',27,'5'),('10',28,'5'),('10',29,'5'),('10',30,'5'),('10',31,'5'),('10',32,'5'),('10',33,'5'),('10',34,'5'),('10',35,'5'),('10',36,'5'),('10',37,'5'),('10',38,'5'),('10',39,'5'),('10',40,'5'),('10',41,'20'),('10',42,'5'),('10',43,'5'),('10',44,'5'),('10',45,'5'),('10',46,'5'),('10',47,'5'),('10',48,'5'),('10',49,'5'),('10',50,'5'),('10',51,'5'),('10',52,'5'),('10',53,'5'),('10',54,'5'),('10',55,'5'),('10',56,'5'),('10',57,'5'),('10',58,'5'),('10',59,'5'),('10',60,'5'),('10',61,'5'),('10',62,'5'),('10',63,'5'),('10',64,'1'),('10',65,'5'),('10',66,'5'),('10',67,'5'),('10',68,'5'),('10',69,'5'),('10',70,'5'),('10',71,'5'),('10',72,'5'),('10',73,'5'),('10',74,'5'),('10',75,'5'),('10',76,'5'),('10',77,'5'),('10',78,'5'),('10',79,'5'),('10',80,'5'),('11',1,'5'),('11',2,'5'),('11',3,'5'),('11',4,'5'),('11',5,'5'),('11',6,'5'),('11',7,'5'),('11',8,'5'),('11',9,'5'),('11',10,'5'),('11',11,'5'),('11',12,'5'),('11',13,'5'),('11',14,'5'),('11',15,'5'),('11',16,'5'),('11',17,'5'),('11',18,'5'),('11',19,'5'),('11',20,'5'),('11',21,'5'),('11',22,'5'),('11',23,'5'),('11',24,'5'),('11',25,'5'),('11',26,'5'),('11',27,'5'),('11',28,'5'),('11',29,'5'),('11',30,'5'),('11',31,'5'),('11',32,'5'),('11',33,'5'),('11',34,'5'),('11',35,'5'),('11',36,'5'),('11',37,'5'),('11',38,'5'),('11',39,'5'),('11',40,'5'),('11',41,'5'),('11',42,'5'),('11',43,'5'),('11',44,'5'),('11',45,'5'),('11',46,'5'),('11',47,'5'),('11',48,'5'),('11',49,'5'),('11',50,'5'),('11',51,'5'),('11',52,'5'),('11',53,'5'),('11',54,'5'),('11',55,'5'),('11',56,'5'),('11',57,'5'),('11',58,'5'),('11',59,'5'),('11',60,'5'),('11',61,'5'),('11',62,'5'),('11',63,'5'),('11',64,'5'),('11',65,'5'),('11',66,'5'),('11',67,'5'),('11',68,'5'),('11',69,'5'),('11',70,'5'),('11',71,'5'),('11',72,'5'),('11',73,'5'),('11',74,'5'),('11',75,'5'),('11',76,'5'),('11',77,'5'),('11',78,'5'),('11',79,'5'),('11',80,'5'),('12',1,'5'),('12',2,'5'),('12',3,'5'),('12',4,'5'),('12',5,'5'),('12',6,'5'),('12',7,'5'),('12',8,'5'),('12',9,'5'),('12',10,'5'),('12',11,'5'),('12',12,'5'),('12',13,'5'),('12',14,'5'),('12',15,'5'),('12',16,'5'),('12',17,'5'),('12',18,'5'),('12',19,'5'),('12',20,'5'),('12',21,'5'),('12',22,'5'),('12',23,'5'),('12',24,'5'),('12',25,'5'),('12',26,'5'),('12',27,'5'),('12',28,'5'),('12',29,'5'),('12',30,'5'),('12',31,'5'),('12',32,'5'),('12',33,'5'),('12',34,'5'),('12',35,'5'),('12',36,'5'),('12',37,'5'),('12',38,'5'),('12',39,'5'),('12',40,'5'),('12',41,'5'),('12',42,'5'),('12',43,'5'),('12',44,'5'),('12',45,'5'),('12',46,'5'),('12',47,'5'),('12',48,'5'),('12',49,'5'),('12',50,'5'),('12',51,'5'),('12',52,'5'),('12',53,'5'),('12',54,'5'),('12',55,'5'),('12',56,'5'),('12',57,'5'),('12',58,'5'),('12',59,'5'),('12',60,'5'),('12',61,'5'),('12',62,'5'),('12',63,'5'),('12',64,'5'),('12',65,'5'),('12',66,'5'),('12',67,'5'),('12',68,'5'),('12',69,'5'),('12',70,'5'),('12',71,'5'),('12',72,'5'),('12',73,'5'),('12',74,'5'),('12',75,'5'),('12',76,'5'),('12',77,'5'),('12',78,'5'),('12',79,'5'),('12',80,'5'),('13',1,'5'),('13',2,'5'),('13',3,'5'),('13',4,'5'),('13',5,'5'),('13',6,'5'),('13',7,'5'),('13',8,'5'),('13',9,'5'),('13',10,'5'),('13',11,'5'),('13',12,'5'),('13',13,'5'),('13',14,'5'),('13',15,'5'),('13',16,'5'),('13',17,'5'),('13',18,'5'),('13',19,'5'),('13',20,'5'),('13',21,'5'),('13',22,'5'),('13',23,'5'),('13',24,'5'),('13',25,'5'),('13',26,'5'),('13',27,'5'),('13',28,'5'),('13',29,'5'),('13',30,'5'),('13',31,'5'),('13',32,'5'),('13',33,'5'),('13',34,'5'),('13',35,'5'),('13',36,'5'),('13',37,'5'),('13',38,'5'),('13',39,'5'),('13',40,'5'),('13',41,'5'),('13',42,'5'),('13',43,'5'),('13',44,'5'),('13',45,'5'),('13',46,'5'),('13',47,'5'),('13',48,'5'),('13',49,'5'),('13',50,'5'),('13',51,'5'),('13',52,'5'),('13',53,'5'),('13',54,'5'),('13',55,'5'),('13',56,'5'),('13',57,'5'),('13',58,'5'),('13',59,'5'),('13',60,'5'),('13',61,'5'),('13',62,'5'),('13',63,'5'),('13',64,'5'),('13',65,'5'),('13',66,'5'),('13',67,'5'),('13',68,'5'),('13',69,'5'),('13',70,'5'),('13',71,'5'),('13',72,'5'),('13',73,'5'),('13',74,'5'),('13',75,'5'),('13',76,'5'),('13',77,'5'),('13',78,'5'),('13',79,'5'),('13',80,'5'),('2',1,'5'),('2',2,'5'),('2',3,'5'),('2',4,'5'),('2',5,'5'),('2',6,'5'),('2',7,'5'),('2',8,'5'),('2',9,'5'),('2',10,'5'),('2',11,'5'),('2',12,'5'),('2',13,'5'),('2',14,'5'),('2',15,'5'),('2',16,'5'),('2',17,'5'),('2',18,'5'),('2',19,'5'),('2',20,'5'),('2',21,'5'),('2',22,'5'),('2',23,'5'),('2',24,'5'),('2',25,'5'),('2',26,'5'),('2',27,'5'),('2',28,'5'),('2',29,'5'),('2',30,'5'),('2',31,'5'),('2',32,'5'),('2',33,'5'),('2',34,'5'),('2',35,'5'),('2',36,'5'),('2',37,'5'),('2',38,'5'),('2',39,'5'),('2',40,'5'),('2',41,'5'),('2',42,'5'),('2',43,'5'),('2',44,'5'),('2',45,'5'),('2',46,'5'),('2',47,'5'),('2',48,'5'),('2',49,'5'),('2',50,'5'),('2',51,'5'),('2',52,'5'),('2',53,'5'),('2',54,'5'),('2',55,'5'),('2',56,'5'),('2',57,'5'),('2',58,'5'),('2',59,'5'),('2',60,'5'),('2',61,'5'),('2',62,'5'),('2',63,'5'),('2',64,'5'),('2',65,'5'),('2',66,'5'),('2',67,'5'),('2',68,'5'),('2',69,'5'),('2',70,'5'),('2',71,'5'),('2',72,'5'),('2',73,'5'),('2',74,'5'),('2',75,'5'),('2',76,'5'),('2',77,'5'),('2',78,'5'),('2',79,'5'),('2',80,'5'),('3',1,'5'),('3',2,'5'),('3',3,'5'),('3',4,'5'),('3',5,'5'),('3',6,'5'),('3',7,'5'),('3',8,'5'),('3',9,'5'),('3',10,'5'),('3',11,'5'),('3',12,'5'),('3',13,'5'),('3',14,'5'),('3',15,'5'),('3',16,'5'),('3',17,'5'),('3',18,'5'),('3',19,'5'),('3',20,'5'),('3',21,'5'),('3',22,'5'),('3',23,'5'),('3',24,'5'),('3',25,'5'),('3',26,'5'),('3',27,'5'),('3',28,'5'),('3',29,'5'),('3',30,'5'),('3',31,'5'),('3',32,'5'),('3',33,'5'),('3',34,'5'),('3',35,'5'),('3',36,'5'),('3',37,'5'),('3',38,'5'),('3',39,'5'),('3',40,'5'),('3',41,'5'),('3',42,'5'),('3',43,'5'),('3',44,'5'),('3',45,'5'),('3',46,'5'),('3',47,'5'),('3',48,'5'),('3',49,'5'),('3',50,'5'),('3',51,'5'),('3',52,'5'),('3',53,'5'),('3',54,'5'),('3',55,'5'),('3',56,'5'),('3',57,'5'),('3',58,'5'),('3',59,'5'),('3',60,'5'),('3',61,'5'),('3',62,'5'),('3',63,'5'),('3',64,'5'),('3',65,'5'),('3',66,'5'),('3',67,'5'),('3',68,'5'),('3',69,'5'),('3',70,'5'),('3',71,'5'),('3',72,'5'),('3',73,'5'),('3',74,'5'),('3',75,'5'),('3',76,'5'),('3',77,'5'),('3',78,'5'),('3',79,'5'),('3',80,'5'),('4',1,'5'),('4',2,'5'),('4',3,'5'),('4',4,'5'),('4',5,'5'),('4',6,'5'),('4',7,'5'),('4',8,'5'),('4',9,'5'),('4',10,'5'),('4',11,'5'),('4',12,'5'),('4',13,'5'),('4',14,'5'),('4',15,'5'),('4',16,'5'),('4',17,'5'),('4',18,'5'),('4',19,'5'),('4',20,'5'),('4',21,'5'),('4',22,'5'),('4',23,'5'),('4',24,'5'),('4',25,'5'),('4',26,'5'),('4',27,'5'),('4',28,'5'),('4',29,'5'),('4',30,'5'),('4',31,'5'),('4',32,'5'),('4',33,'5'),('4',34,'5'),('4',35,'5'),('4',36,'5'),('4',37,'5'),('4',38,'5'),('4',39,'5'),('4',40,'5'),('4',41,'5'),('4',42,'5'),('4',43,'5'),('4',44,'5'),('4',45,'5'),('4',46,'5'),('4',47,'5'),('4',48,'5'),('4',49,'5'),('4',50,'5'),('4',51,'5'),('4',52,'5'),('4',53,'5'),('4',54,'5'),('4',55,'5'),('4',56,'5'),('4',57,'5'),('4',58,'5'),('4',59,'5'),('4',60,'5'),('4',61,'5'),('4',62,'5'),('4',63,'5'),('4',64,'5'),('4',65,'5'),('4',66,'5'),('4',67,'5'),('4',68,'5'),('4',69,'5'),('4',70,'5'),('4',71,'5'),('4',72,'5'),('4',73,'5'),('4',74,'5'),('4',75,'5'),('4',76,'5'),('4',77,'5'),('4',78,'5'),('4',79,'5'),('4',80,'5'),('5',1,'5'),('5',2,'5'),('5',3,'5'),('5',4,'5'),('5',5,'5'),('5',6,'5'),('5',7,'5'),('5',8,'5'),('5',9,'5'),('5',10,'5'),('5',11,'5'),('5',12,'5'),('5',13,'5'),('5',14,'5'),('5',15,'5'),('5',16,'5'),('5',17,'5'),('5',18,'5'),('5',19,'5'),('5',20,'5'),('5',21,'5'),('5',22,'5'),('5',23,'5'),('5',24,'5'),('5',25,'5'),('5',26,'5'),('5',27,'5'),('5',28,'5'),('5',29,'5'),('5',30,'5'),('5',31,'5'),('5',32,'5'),('5',33,'5'),('5',34,'5'),('5',35,'5'),('5',36,'5'),('5',37,'5'),('5',38,'5'),('5',39,'5'),('5',40,'5'),('5',41,'5'),('5',42,'5'),('5',43,'5'),('5',44,'5'),('5',45,'5'),('5',46,'5'),('5',47,'5'),('5',48,'5'),('5',49,'5'),('5',50,'5'),('5',51,'5'),('5',52,'5'),('5',53,'5'),('5',54,'5'),('5',55,'5'),('5',56,'5'),('5',57,'5'),('5',58,'5'),('5',59,'5'),('5',60,'5'),('5',61,'5'),('5',62,'5'),('5',63,'5'),('5',64,'5'),('5',65,'5'),('5',66,'5'),('5',67,'5'),('5',68,'5'),('5',69,'5'),('5',70,'5'),('5',71,'5'),('5',72,'5'),('5',73,'5'),('5',74,'5'),('5',75,'5'),('5',76,'5'),('5',77,'5'),('5',78,'5'),('5',79,'5'),('5',80,'5'),('6',1,'5'),('6',2,'5'),('6',3,'5'),('6',4,'5'),('6',5,'5'),('6',6,'5'),('6',7,'5'),('6',8,'5'),('6',9,'5'),('6',10,'5'),('6',11,'5'),('6',12,'5'),('6',13,'5'),('6',14,'5'),('6',15,'5'),('6',16,'5'),('6',17,'5'),('6',18,'5'),('6',19,'5'),('6',20,'5'),('6',21,'5'),('6',22,'5'),('6',23,'5'),('6',24,'5'),('6',25,'5'),('6',26,'5'),('6',27,'5'),('6',28,'5'),('6',29,'5'),('6',30,'5'),('6',31,'5'),('6',32,'5'),('6',33,'5'),('6',34,'5'),('6',35,'5'),('6',36,'5'),('6',37,'5'),('6',38,'5'),('6',39,'5'),('6',40,'5'),('6',41,'5'),('6',42,'5'),('6',43,'5'),('6',44,'5'),('6',45,'5'),('6',46,'5'),('6',47,'5'),('6',48,'5'),('6',49,'5'),('6',50,'5'),('6',51,'5'),('6',52,'5'),('6',53,'5'),('6',54,'5'),('6',55,'5'),('6',56,'5'),('6',57,'5'),('6',58,'5'),('6',59,'5'),('6',60,'5'),('6',61,'5'),('6',62,'5'),('6',63,'5'),('6',64,'5'),('6',65,'5'),('6',66,'5'),('6',67,'5'),('6',68,'5'),('6',69,'5'),('6',70,'5'),('6',71,'5'),('6',72,'5'),('6',73,'5'),('6',74,'5'),('6',75,'5'),('6',76,'5'),('6',77,'5'),('6',78,'5'),('6',79,'5'),('6',80,'5'),('7',1,'5'),('7',2,'5'),('7',3,'5'),('7',4,'5'),('7',5,'5'),('7',6,'5'),('7',7,'5'),('7',8,'5'),('7',9,'5'),('7',10,'5'),('7',11,'5'),('7',12,'5'),('7',13,'5'),('7',14,'5'),('7',15,'5'),('7',16,'5'),('7',17,'5'),('7',18,'5'),('7',19,'5'),('7',20,'5'),('7',21,'5'),('7',22,'5'),('7',23,'5'),('7',24,'5'),('7',25,'5'),('7',26,'5'),('7',27,'5'),('7',28,'5'),('7',29,'5'),('7',30,'5'),('7',31,'5'),('7',32,'5'),('7',33,'5'),('7',34,'5'),('7',35,'5'),('7',36,'5'),('7',37,'5'),('7',38,'5'),('7',39,'5'),('7',40,'5'),('7',41,'5'),('7',42,'5'),('7',43,'5'),('7',44,'5'),('7',45,'5'),('7',46,'5'),('7',47,'5'),('7',48,'5'),('7',49,'5'),('7',50,'5'),('7',51,'5'),('7',52,'5'),('7',53,'5'),('7',54,'5'),('7',55,'5'),('7',56,'5'),('7',57,'5'),('7',58,'5'),('7',59,'5'),('7',60,'5'),('7',61,'5'),('7',62,'5'),('7',63,'5'),('7',64,'5'),('7',65,'5'),('7',66,'5'),('7',67,'5'),('7',68,'5'),('7',69,'5'),('7',70,'5'),('7',71,'5'),('7',72,'5'),('7',73,'5'),('7',74,'5'),('7',75,'5'),('7',76,'5'),('7',77,'5'),('7',78,'5'),('7',79,'5'),('7',80,'5'),('8',1,'5'),('8',2,'5'),('8',3,'5'),('8',4,'5'),('8',5,'5'),('8',6,'5'),('8',7,'5'),('8',8,'5'),('8',9,'5'),('8',10,'5'),('8',11,'5'),('8',12,'5'),('8',13,'5'),('8',14,'5'),('8',15,'5'),('8',16,'5'),('8',17,'5'),('8',18,'5'),('8',19,'5'),('8',20,'5'),('8',21,'5'),('8',22,'5'),('8',23,'5'),('8',24,'5'),('8',25,'5'),('8',26,'5'),('8',27,'5'),('8',28,'5'),('8',29,'5'),('8',30,'5'),('8',31,'5'),('8',32,'5'),('8',33,'5'),('8',34,'5'),('8',35,'5'),('8',36,'5'),('8',37,'5'),('8',38,'5'),('8',39,'5'),('8',40,'5'),('8',41,'5'),('8',42,'5'),('8',43,'5'),('8',44,'5'),('8',45,'5'),('8',46,'5'),('8',47,'5'),('8',48,'5'),('8',49,'5'),('8',50,'5'),('8',51,'5'),('8',52,'5'),('8',53,'5'),('8',54,'5'),('8',55,'5'),('8',56,'5'),('8',57,'5'),('8',58,'5'),('8',59,'5'),('8',60,'5'),('8',61,'5'),('8',62,'5'),('8',63,'5'),('8',64,'5'),('8',65,'5'),('8',66,'5'),('8',67,'5'),('8',68,'5'),('8',69,'5'),('8',70,'5'),('8',71,'5'),('8',72,'5'),('8',73,'5'),('8',74,'5'),('8',75,'5'),('8',76,'5'),('8',77,'5'),('8',78,'5'),('8',79,'5'),('8',80,'5'),('9',1,'5'),('9',2,'5'),('9',3,'5'),('9',4,'5'),('9',5,'5'),('9',6,'5'),('9',7,'5'),('9',8,'5'),('9',9,'5'),('9',10,'5'),('9',11,'5'),('9',12,'5'),('9',13,'5'),('9',14,'5'),('9',15,'5'),('9',16,'5'),('9',17,'5'),('9',18,'5'),('9',19,'5'),('9',20,'5'),('9',21,'5'),('9',22,'5'),('9',23,'5'),('9',24,'5'),('9',25,'5'),('9',26,'5'),('9',27,'5'),('9',28,'5'),('9',29,'5'),('9',30,'5'),('9',31,'5'),('9',32,'5'),('9',33,'5'),('9',34,'5'),('9',35,'5'),('9',36,'5'),('9',37,'5'),('9',38,'5'),('9',39,'5'),('9',40,'5'),('9',41,'5'),('9',42,'5'),('9',43,'5'),('9',44,'5'),('9',45,'5'),('9',46,'5'),('9',47,'5'),('9',48,'5'),('9',49,'5'),('9',50,'5'),('9',51,'5'),('9',52,'5'),('9',53,'5'),('9',54,'5'),('9',55,'5'),('9',56,'5'),('9',57,'5'),('9',58,'5'),('9',59,'5'),('9',60,'5'),('9',61,'5'),('9',62,'5'),('9',63,'5'),('9',64,'5'),('9',65,'5'),('9',66,'5'),('9',67,'5'),('9',68,'5'),('9',69,'5'),('9',70,'5'),('9',71,'5'),('9',72,'5'),('9',73,'5'),('9',74,'5'),('9',75,'5'),('9',76,'5'),('9',77,'5'),('9',78,'5'),('9',79,'5'),('9',80,'5');
/*!40000 ALTER TABLE `alumnos_has_preguntas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `centros`
--

DROP TABLE IF EXISTS `centros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `centros` (
  `nombre` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `localidad` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `codigopostal` varchar(5) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `provincia` varchar(20) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `centros`
--

LOCK TABLES `centros` WRITE;
/*!40000 ALTER TABLE `centros` DISABLE KEYS */;
INSERT INTO `centros` VALUES ('Q4400415H',NULL,'Alcañíz','44600',NULL),('zaragoza','zaragoza','zaragoza','50010','zaragoza');
/*!40000 ALTER TABLE `centros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cursos`
--

DROP TABLE IF EXISTS `cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cursos` (
  `codigo` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `departamento` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `centros_nombre` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`codigo`,`centros_nombre`),
  KEY `fk_cursos_centros1_idx` (`centros_nombre`),
  CONSTRAINT `fk_cursos_centros1` FOREIGN KEY (`centros_nombre`) REFERENCES `centros` (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursos`
--

LOCK TABLES `cursos` WRITE;
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` VALUES ('daw2','informatica','Q4400415H'),('mec1','automocion','zaragoza'),('sani2','sanitaria','Q4400415H');
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipos`
--

DROP TABLE IF EXISTS `equipos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `equipos` (
  `id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipos`
--

LOCK TABLES `equipos` WRITE;
/*!40000 ALTER TABLE `equipos` DISABLE KEYS */;
INSERT INTO `equipos` VALUES (1);
/*!40000 ALTER TABLE `equipos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `porcentaje`
--

DROP TABLE IF EXISTS `porcentaje`;
/*!50001 DROP VIEW IF EXISTS `porcentaje`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `porcentaje` AS SELECT 
 1 AS `alumno_dni`,
 1 AS `id`,
 1 AS `color`,
 1 AS `respuesta`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `preguntas`
--

DROP TABLE IF EXISTS `preguntas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `preguntas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `term` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `desc` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `color` varchar(25) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preguntas`
--

LOCK TABLES `preguntas` WRITE;
/*!40000 ALTER TABLE `preguntas` DISABLE KEYS */;
INSERT INTO `preguntas` VALUES (1,'En un buen día … ¿Eres una persona precisa????','Eres una persona concisa, clara, exacta y rigurosa...','Azul'),(2,'En un buen día … ¿Eres una persona sistemática????','Eres una persona que realiza las tareas ordenadame...','Azul'),(3,'En un buen día … ¿Eres una persona curiosa o pregu...','Te prima la tendencia a la investigación y explora...','Azul'),(4,'En un buen día … ¿Eres una persona análitica????','Te gusta llegar al fondo de las cosas, quieres sab...','Azul'),(5,'En un buen día … ¿Eres una persona sensata????','Consideras que tienes buen juicio, prudencia y mad...','Azul'),(6,'En un buen día ... ¿Eres una persona perseverante?','Te sueles mantener constante en un proyecto ya com...','Azul'),(7,'En un buen día … ¿Eres una persona metódica????','Eres una persona disciplinada en el cumplimiento d...','Azul'),(8,'En un buen día … ¿Eres una persona controlada????','Persona controlada: Que tiene control sobre su...','Azul'),(9,'En un buen día … ¿Eres una persona disciplinada???...','Persona disciplinada: es aquella persona ordenada ...','Azul'),(10,'En un buen día … ¿Eres una persona estable????','Persona estable: es la que es capaz de mantenerse ...','Azul'),(11,'En un mal día ….¿Eres una persona aburrida?','No es entretenido, eres monótono y predecible','Azul'),(12,'En un mal día ….¿Eres una persona mezquina?','Persona mezquina: Es aquella que tiene actitud de ...','Azul'),(13,'En un mal día ….¿Eres una persona quisquillosa?','Que se ofende fácilmente por cosas insignificantes...','Azul'),(14,'En un mal día ….¿Eres una persona inamovible?','Te cuesta cambiar las decisiones ya tomadas.','Azul'),(15,'En un mal día ….¿Eres una persona aislada?','Persona que se separa y no se comunica con fluidez...','Azul'),(16,'En un mal día ….¿Eres una persona Fría?','Persona que no muestra sus sentimientos y es dista...','Azul'),(17,'En un mal día ….¿Eres una persona suspicaz?','Tiendes a pensar mal de los demás, creyendo que ti...','Azul'),(18,'En un mal día ….¿Eres una persona criítica?','Analizas la realidad, cuestionas las cosas, no te ...','Azul'),(19,'En un mal día ….¿Eres una persona poco diplomática...','No tienes capacidad de razonar con una persona que...','Azul'),(20,'En un mal día ….¿Eres una persona susceptible?','Que se ofende o toma a mal las cosas con facilidad','Azul'),(21,'En un buen día … ¿Eres una persona Fiable????','Se puede confiar en ti','Verde'),(22,'En un buen día … ¿Eres una persona considerada????','Tienes en cuenta los sentimientos/opiniones de los...','Verde'),(23,'En un buen día … ¿Eres una persona que comparte???...','Compartes tanto cosas materiales como personales, ...','Verde'),(24,'En un buen día … ¿Eres una persona leal????','Que eres incapaz de traicionar o engañar a las per...','Verde'),(25,'En un buen día … ¿Eres una persona atenta????','Pones atención en lo que haces','Verde'),(26,'En un buen día … ¿Eres una persona paciente????','Eres tolerante ante actitudes que podrían molestar...','Verde'),(27,'En un buen día … ¿Eres una persona comprensiva????','Una persona que entiende las circustancias de los ...','Verde'),(28,'En un buen día … ¿Eres una persona tranquila????','Eres una persona calmada, que no pierde los nervio...','Verde'),(29,'En un buen día … ¿Eres una persona considerada????','Tienes en cuenta los sentimientos/opiniones de los...','Verde'),(30,'En un buen día … ¿Eres una persona discreta????','Es una persona que no busca llamar la atención','Verde'),(31,'En un mal día ….¿Eres una persona Obstinada (cabez...','Te mantienes firme en una u opinión, generalmente ...','Verde'),(32,'En un mal día ….¿Eres una persona precavida?','Eres una persona prudente, no tomas riesgos innece...','Verde'),(33,'En un mal día ….¿Eres una persona indecisa?','Te cuesta mucho tomar decisiones','Verde'),(34,'En un mal día ….¿Eres una persona evasiva?','Evitas afrontar las dificultades','Verde'),(35,'En un mal día ….¿Eres una persona no conciliadora?','No ayudas a calmar las tensiones o a poner de acue...','Verde'),(36,'En un mal día ….¿Eres una persona introvertida?','Te cuesta expresar tus sentimientos o estado de án...','Verde'),(37,'En un mal día ….¿Eres una persona reacia?','Muestras resistencia a hacer las cosas','Verde'),(38,'En un mal día ….¿Eres una persona desalentadora?','Quitas las ganas de hacer cosas a los demás','Verde'),(39,'En un mal día ….¿Eres una persona sensible?','\"Tiendes a emocionarte o a dejarte llevar por tus ...','Verde'),(40,'En un mal día ….¿Eres una persona callada?','No hablas mucho, dejas que los demás opinen por ti','Verde'),(41,'En un buen día … ¿Eres una persona emprendedora ??...','Identificas una oportunidad y organizas los recurs...','Rojo'),(42,'En un buen día … ¿Eres una persona Objetiva ???','\"Eres capaz de analizar las cosas sin que dejarte ...','Rojo'),(43,'En un buen día … ¿Eres una persona decidida ???','Actuas con decisión y seguridad','Rojo'),(44,'En un buen día … ¿Eres una persona exigente ???','Eres una persona rigurosa, estricta tiendes a hace...','Rojo'),(45,'En un buen día … ¿Eres una persona tenaz ???','Pones mucho empeño y no desiste en algo que quiere...','Rojo'),(46,'En un buen día … ¿Eres una persona orientada a obj...','Tienes  largo lo que quieres hacer, fijas priorida...','Rojo'),(47,'En un buen día … ¿Eres una persona energética ???','Haces las cosas con vitalidad y de forma animosa ','Rojo'),(48,'En un buen día … ¿Eres una persona organizada ???','Planificas lo que vas a hacer, cumples los horario...','Rojo'),(49,'En un buen día … ¿Eres una persona resolutiva ???','Solucionas los  asuntos o problemas con eficacia, ...','Rojo'),(50,'En un buen día … ¿Eres una persona competitiva ???','Eres capaz de hacer casi todo para ganar, no te ri...','Rojo'),(51,'En un mal dia … ¿Eres una persona dominante ???','Quieres controlar la situación y a la gente, no de...','Rojo'),(52,'En un mal dia … ¿Eres una persona agresiva ???','Te comportas con violencia física o verbal','Rojo'),(53,'En un mal dia … ¿Eres una persona intolerante ???','No te gustan y te fastidian las opiniones distinta...','Rojo'),(54,'En un mal dia … ¿Eres una persona soberbia ???','Te valoras por encima de los demas: te cuesta pedi...','Rojo'),(55,'En un mal dia … ¿Eres una persona impaciente ???','Te falta paciencia. Te cuesta realizar acciones mi...','Rojo'),(56,'En un mal dia … ¿Eres una persona desconsiderada ?...','No tienes en consideración a los demás, ni sus opi...','Rojo'),(57,'En un mal dia … ¿Eres una persona grosera ???','Eres desagradable sin necesidad, ofendes a la gent...','Rojo'),(58,'En un mal dia … ¿Eres una persona sin escrupulos ?...','No tienes ningún problema en hacer lo que haga fal...','Rojo'),(59,'En un mal dia … ¿Eres una persona prepotente ???','Te crees mejor que el resto de la gente,','Rojo'),(60,'En un mal dia … ¿Eres una persona controladora ???','Le dictas a la gente como tiene que actuar y lo qu...','Rojo'),(61,'En un buen día … ¿Eres una persona convincente ???','La gente cree, confía en lo que dices, puedes con...','Amarillo'),(62,'En un buen día … ¿Eres una persona extrovertida ??...','Eres abierto, no te cuesta hablar con la gente y e...','Amarillo'),(63,'En un buen día … ¿Eres una persona entusiasta ???','Muestra energía y entusiasmo en todo lo que haces,...','Amarillo'),(64,'En un buen día … ¿Eres una persona optimista ???','Tiendes a ver el lado bueno de las cosas. Sueles j...','Amarillo'),(65,'En un buen día … ¿Eres una persona sociable ???','Te gusta relacionarse con otras personas y además ...','Amarillo'),(66,'En un buen día … ¿Eres una persona dinámica a obje...','Cuando tienes que hacer una tarea te marcas las me...','Amarillo'),(67,'En un buen día … ¿Eres una persona comunicativa ??...','Tienes propensión a comunicarte de una forma fácil...','Amarillo'),(68,'En un buen día … ¿Eres una persona creativa ???','Eres capaz de producir ideas o comportamientos que...','Amarillo'),(69,'En un buen día … ¿Eres una persona espontanea ???','Tienes la habilidad de ser natural y sincero en la...','Amarillo'),(70,'En un buen día … ¿Eres una persona independiente ?...','Tienes capacidad de decidir por ti mismo, eres aut...','Amarillo'),(71,'En un mal dia … ¿Eres una persona impulsiva ???','Haces las cosas sin pensar, sin apenas reflexionar...','Amarillo'),(72,'En un mal dia … ¿Eres una persona sobreexcitada ??...','Vas a más revoluciones de las normales, nervioso, ...','Amarillo'),(73,'En un mal dia … ¿Eres una persona agitada ???','Eres nervioso y transmites esa sensación a los dem...','Amarillo'),(74,'En un mal dia … ¿Eres una persona exagerada ???','No te ajustas a la realidad de los hechos, tiendes...','Amarillo'),(75,'En un mal dia … ¿Eres una persona indiscreta ???','Tiendes a contar secretos o intimidades de la gent...','Amarillo'),(76,'En un mal dia … ¿Eres una persona extravagante ???','No te ajustas a las normas, haces cosas que a los ...','Amarillo'),(77,'En un mal dia … ¿Eres una persona llamativa, ruido...','Das mucho la nota, te haces de notar pero no para ...','Amarillo'),(78,'En un mal dia … ¿Eres una persona superficial ???','Te impotan mucho las apariencias ','Amarillo'),(79,'En un mal dia … ¿Eres una persona descuidada ???','Tienes falta de interés, atención o cuidado.','Amarillo'),(80,'En un mal dia … ¿Eres una persona desvergonzada ??...','Tiendes a se una persona atrevida, insolente, desc...','Amarillo');
/*!40000 ALTER TABLE `preguntas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profesores`
--

DROP TABLE IF EXISTS `profesores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profesores` (
  `usuarios_dni` varchar(9) COLLATE utf8mb4_spanish_ci NOT NULL,
  `departamento` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `isAdmin` tinyint DEFAULT NULL,
  PRIMARY KEY (`usuarios_dni`),
  KEY `fk_profesores_usuarios1_idx` (`usuarios_dni`),
  CONSTRAINT `fk_profesores_usuarios1` FOREIGN KEY (`usuarios_dni`) REFERENCES `usuarios` (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profesores`
--

LOCK TABLES `profesores` WRITE;
/*!40000 ALTER TABLE `profesores` DISABLE KEYS */;
INSERT INTO `profesores` VALUES ('3333','informatica',1);
/*!40000 ALTER TABLE `profesores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profesores_has_cursos`
--

DROP TABLE IF EXISTS `profesores_has_cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profesores_has_cursos` (
  `profesores_usuarios_dni` varchar(9) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cursos_codigo` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cursos_centros_nombre` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`profesores_usuarios_dni`,`cursos_codigo`,`cursos_centros_nombre`),
  KEY `fk_profesores_has_cursos_cursos1_idx` (`cursos_codigo`,`cursos_centros_nombre`),
  KEY `fk_profesores_has_cursos_profesores1_idx` (`profesores_usuarios_dni`),
  CONSTRAINT `fk_profesores_has_cursos_cursos1` FOREIGN KEY (`cursos_codigo`, `cursos_centros_nombre`) REFERENCES `cursos` (`codigo`, `centros_nombre`),
  CONSTRAINT `fk_profesores_has_cursos_profesores1` FOREIGN KEY (`profesores_usuarios_dni`) REFERENCES `profesores` (`usuarios_dni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profesores_has_cursos`
--

LOCK TABLES `profesores_has_cursos` WRITE;
/*!40000 ALTER TABLE `profesores_has_cursos` DISABLE KEYS */;
/*!40000 ALTER TABLE `profesores_has_cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `total`
--

DROP TABLE IF EXISTS `total`;
/*!50001 DROP VIEW IF EXISTS `total`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `total` AS SELECT 
 1 AS `id`,
 1 AS `color`,
 1 AS `alumno_dni`,
 1 AS `respuesta`,
 1 AS `equipos_id`,
 1 AS `cursos_codigo`,
 1 AS `cursos_centros_nombre`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `total_amarillo`
--

DROP TABLE IF EXISTS `total_amarillo`;
/*!50001 DROP VIEW IF EXISTS `total_amarillo`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `total_amarillo` AS SELECT 
 1 AS `alumno_dni`,
 1 AS `amarillo`,
 1 AS `equipos_id`,
 1 AS `cursos_codigo`,
 1 AS `cursos_centros_nombre`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `total_azul`
--

DROP TABLE IF EXISTS `total_azul`;
/*!50001 DROP VIEW IF EXISTS `total_azul`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `total_azul` AS SELECT 
 1 AS `alumno_dni`,
 1 AS `azul`,
 1 AS `equipos_id`,
 1 AS `cursos_codigo`,
 1 AS `cursos_centros_nombre`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `total_colores`
--

DROP TABLE IF EXISTS `total_colores`;
/*!50001 DROP VIEW IF EXISTS `total_colores`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `total_colores` AS SELECT 
 1 AS `alumno_dni`,
 1 AS `azul`,
 1 AS `rojo`,
 1 AS `amarillo`,
 1 AS `verde`,
 1 AS `equipos_id`,
 1 AS `cursos_codigo`,
 1 AS `cursos_centros_nombre`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `total_rojo`
--

DROP TABLE IF EXISTS `total_rojo`;
/*!50001 DROP VIEW IF EXISTS `total_rojo`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `total_rojo` AS SELECT 
 1 AS `alumno_dni`,
 1 AS `rojo`,
 1 AS `equipos_id`,
 1 AS `cursos_codigo`,
 1 AS `cursos_centros_nombre`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `total_verde`
--

DROP TABLE IF EXISTS `total_verde`;
/*!50001 DROP VIEW IF EXISTS `total_verde`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `total_verde` AS SELECT 
 1 AS `alumno_dni`,
 1 AS `verde`,
 1 AS `equipos_id`,
 1 AS `cursos_codigo`,
 1 AS `cursos_centros_nombre`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `dni` varchar(9) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `apellidos` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `clave` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `centros_nombre` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tipo` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`dni`),
  KEY `fk_usuarios_centros_idx` (`centros_nombre`),
  CONSTRAINT `fk_usuarios_centros` FOREIGN KEY (`centros_nombre`) REFERENCES `centros` (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES ('01','wwww','ttttt','01','zaragoza','admin centro'),('025','alba','parrilla','025','zaragoza','profesor'),('1','aa','aa','aa','Q4400415H','alumno'),('10','jj','jj','10','Q4400415H','alumno'),('11','kk','kk','11','Q4400415H','alumno'),('1111','admin_general','admin general','1111','Q4400415H','admin general'),('12','ll','ll','12','Q4400415H','alumno'),('123','ana','rodriguez','123','zaragoza','profesor'),('13','mm','mm','13','Q4400415H','alumno'),('2','bb','bb','2','Q4400415H','alumno'),('2222','admin_centro','admin centro','2222','Q4400415H','admin centro'),('3','cc','cc','3','Q4400415H','alumno'),('3333','profe','profe','3333','Q4400415H','profesor'),('4','dd','dd','4','Q4400415H','alumno'),('5','ee','ee','5','Q4400415H','alumno'),('6','ff','ff','6','Q4400415H','alumno'),('7','gg','gg','7','Q4400415H','alumno'),('8','hh','hh','8','Q4400415H','alumno'),('9','ii','ii','9','Q4400415H','alumno');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `porcentaje`
--

/*!50001 DROP VIEW IF EXISTS `porcentaje`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_spanish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `porcentaje` AS select `alumnos_has_preguntas`.`alumno_dni` AS `alumno_dni`,`preguntas`.`id` AS `id`,`preguntas`.`color` AS `color`,`alumnos_has_preguntas`.`respuesta` AS `respuesta` from (`alumnos_has_preguntas` join `preguntas`) where (`alumnos_has_preguntas`.`pregunta_id` = `preguntas`.`id`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `total`
--

/*!50001 DROP VIEW IF EXISTS `total`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_spanish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `total` AS select `porcentaje`.`id` AS `id`,`porcentaje`.`color` AS `color`,`porcentaje`.`alumno_dni` AS `alumno_dni`,`porcentaje`.`respuesta` AS `respuesta`,`alumnos`.`equipos_id` AS `equipos_id`,`alumnos`.`cursos_codigo` AS `cursos_codigo`,`alumnos`.`cursos_centros_nombre` AS `cursos_centros_nombre` from (`porcentaje` join `alumnos`) where (`porcentaje`.`alumno_dni` = `alumnos`.`usuarios_dni`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `total_amarillo`
--

/*!50001 DROP VIEW IF EXISTS `total_amarillo`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_spanish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `total_amarillo` AS select `total`.`alumno_dni` AS `alumno_dni`,sum(`total`.`respuesta`) AS `amarillo`,`total`.`equipos_id` AS `equipos_id`,`total`.`cursos_codigo` AS `cursos_codigo`,`total`.`cursos_centros_nombre` AS `cursos_centros_nombre` from `total` where (`total`.`color` = 'amarillo') group by `total`.`alumno_dni` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `total_azul`
--

/*!50001 DROP VIEW IF EXISTS `total_azul`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_spanish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `total_azul` AS select `total`.`alumno_dni` AS `alumno_dni`,sum(`total`.`respuesta`) AS `azul`,`total`.`equipos_id` AS `equipos_id`,`total`.`cursos_codigo` AS `cursos_codigo`,`total`.`cursos_centros_nombre` AS `cursos_centros_nombre` from `total` where (`total`.`color` = 'azul') group by `total`.`alumno_dni` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `total_colores`
--

/*!50001 DROP VIEW IF EXISTS `total_colores`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_spanish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `total_colores` AS select `total_azul`.`alumno_dni` AS `alumno_dni`,`total_azul`.`azul` AS `azul`,`total_rojo`.`rojo` AS `rojo`,`total_amarillo`.`amarillo` AS `amarillo`,`total_verde`.`verde` AS `verde`,`total_azul`.`equipos_id` AS `equipos_id`,`total_azul`.`cursos_codigo` AS `cursos_codigo`,`total_azul`.`cursos_centros_nombre` AS `cursos_centros_nombre` from (((`total_azul` join `total_rojo`) join `total_verde`) join `total_amarillo`) where ((`total_azul`.`alumno_dni` = `total_verde`.`alumno_dni`) and (`total_azul`.`alumno_dni` = `total_rojo`.`alumno_dni`) and (`total_azul`.`alumno_dni` = `total_amarillo`.`alumno_dni`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `total_rojo`
--

/*!50001 DROP VIEW IF EXISTS `total_rojo`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_spanish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `total_rojo` AS select `total`.`alumno_dni` AS `alumno_dni`,sum(`total`.`respuesta`) AS `rojo`,`total`.`equipos_id` AS `equipos_id`,`total`.`cursos_codigo` AS `cursos_codigo`,`total`.`cursos_centros_nombre` AS `cursos_centros_nombre` from `total` where (`total`.`color` = 'rojo') group by `total`.`alumno_dni` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `total_verde`
--

/*!50001 DROP VIEW IF EXISTS `total_verde`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_spanish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `total_verde` AS select `total`.`alumno_dni` AS `alumno_dni`,sum(`total`.`respuesta`) AS `verde`,`total`.`equipos_id` AS `equipos_id`,`total`.`cursos_codigo` AS `cursos_codigo`,`total`.`cursos_centros_nombre` AS `cursos_centros_nombre` from `total` where (`total`.`color` = 'verde') group by `total`.`alumno_dni` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-01 13:09:08
