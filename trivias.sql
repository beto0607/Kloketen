-- MySQL dump 10.13  Distrib 5.5.37, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: trivias
-- ------------------------------------------------------
-- Server version	5.5.37-0ubuntu0.12.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `trivia`
--

DROP TABLE IF EXISTS `trivia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trivia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(200) DEFAULT NULL,
  `r1` varchar(100) DEFAULT NULL,
  `r2` varchar(100) DEFAULT NULL,
  `r3` varchar(100) DEFAULT NULL,
  `r4` varchar(100) DEFAULT NULL,
  `rc` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trivia`
--

LOCK TABLES `trivia` WRITE;
/*!40000 ALTER TABLE `trivia` DISABLE KEYS */;
INSERT INTO `trivia` VALUES (3,'¿Cuántos años tiene la Tierra?','4650 millones de años.','2 millones de años.','7890 millones de años.',NULL,1),(4,'¿Cuándo apareció la vida sobre la Tierra primitiva?','Hace 3.500.000.000 de años.','Hace 350.000.000 de años.','Hace 3.500.000 de años.',NULL,1),(5,'El Big Bang es la teoría del origen de universo más aceptada actualmente por la Física. Formalmente recibe el nombre de Teoría del Modelo Estándar o Teoría del Universo Inflacionario. ¿Qué principio s','El universo fue creado por un ser superior.','El universo se creó a partir de moléculas de antimateria.','El universo se creó por la explosión de un bloque de materia de alta densidad.',NULL,3),(6,'¿Cuál es el gas que necesitamos incondicionalmente para vivir?','Oxígeno.','Sulfuro.','Azufre.','Agua.',1),(7,'Los organismos multicelulares evolucionaron a partir de las células eucariotas y aparecieron hace alrededor de 1000 millones de años. ¿En cuál de las eras de la Tierra surgen los primeros organismos? ','Paleozoica.','Precámbica.','Cámbrico.','Silúrgico.',2),(8,'Las células vivas se distinguen de otros sistemas químicos por su capacidad para duplicarse generación tras generación.','Verdadero.','Falso.',NULL,NULL,1);
/*!40000 ALTER TABLE `trivia` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-07-29  9:34:33
