-- MySQL dump 10.13  Distrib 5.5.37, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: MisionTrivia
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
-- Table structure for table `Cat_has_Tri`
--

DROP TABLE IF EXISTS `Cat_has_Tri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Cat_has_Tri` (
  `idTri` int(11) NOT NULL,
  `nCat` varchar(45) NOT NULL,
  PRIMARY KEY (`idTri`,`nCat`),
  KEY `fk_Categoria_has_Trivia_Trivia1` (`idTri`),
  KEY `fk_Cat_has_Tri_Categoria1` (`nCat`),
  CONSTRAINT `fk_Categoria_has_Trivia_Trivia1` FOREIGN KEY (`idTri`) REFERENCES `Trivia` (`idTrivia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Cat_has_Tri_Categoria1` FOREIGN KEY (`nCat`) REFERENCES `Categoria` (`nombre`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Cat_has_Tri`
--

LOCK TABLES `Cat_has_Tri` WRITE;
/*!40000 ALTER TABLE `Cat_has_Tri` DISABLE KEYS */;
INSERT INTO `Cat_has_Tri` VALUES (1,'Lingüístico Verbal'),(1,'Naturalista');
/*!40000 ALTER TABLE `Cat_has_Tri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Categoria`
--

DROP TABLE IF EXISTS `Categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Categoria` (
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Categoria`
--

LOCK TABLES `Categoria` WRITE;
/*!40000 ALTER TABLE `Categoria` DISABLE KEYS */;
INSERT INTO `Categoria` VALUES ('Lingüístico Verbal'),('Lógico Matemática'),('Naturalista'),('Visual Espacial');
/*!40000 ALTER TABLE `Categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Mision`
--

DROP TABLE IF EXISTS `Mision`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Mision` (
  `idMision` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idMision`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Mision`
--

LOCK TABLES `Mision` WRITE;
/*!40000 ALTER TABLE `Mision` DISABLE KEYS */;
INSERT INTO `Mision` VALUES (1,'Arjé');
/*!40000 ALTER TABLE `Mision` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Respuesta`
--

DROP TABLE IF EXISTS `Respuesta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Respuesta` (
  `idRespuesta` int(11) NOT NULL AUTO_INCREMENT,
  `texto` text NOT NULL,
  `correcta` tinyint(1) NOT NULL DEFAULT '0',
  `Trivia_idTrivia` int(11) NOT NULL,
  PRIMARY KEY (`idRespuesta`),
  KEY `fk_Respuesta_Trivia` (`Trivia_idTrivia`),
  CONSTRAINT `fk_Respuesta_Trivia` FOREIGN KEY (`Trivia_idTrivia`) REFERENCES `Trivia` (`idTrivia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `Trivia_idTrivia` FOREIGN KEY (`Trivia_idTrivia`) REFERENCES `Trivia` (`idTrivia`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Respuesta`
--

LOCK TABLES `Respuesta` WRITE;
/*!40000 ALTER TABLE `Respuesta` DISABLE KEYS */;
INSERT INTO `Respuesta` VALUES (1,'Oxígeno.',1,1),(2,'Sulfuro.',0,1),(3,'Azufre.',0,1),(4,'Agua.',0,1);
/*!40000 ALTER TABLE `Respuesta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Trivia`
--

DROP TABLE IF EXISTS `Trivia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Trivia` (
  `idTrivia` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` text NOT NULL,
  `dificultad` int(11) NOT NULL,
  `Mision_idMision` int(11) NOT NULL,
  PRIMARY KEY (`idTrivia`,`Mision_idMision`),
  KEY `fk_Trivia_Mision1` (`Mision_idMision`),
  CONSTRAINT `fk_Trivia_Mision1` FOREIGN KEY (`Mision_idMision`) REFERENCES `Mision` (`idMision`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Trivia`
--

LOCK TABLES `Trivia` WRITE;
/*!40000 ALTER TABLE `Trivia` DISABLE KEYS */;
INSERT INTO `Trivia` VALUES (1,'¿Cuál es el gas que necesitamos incondicionalmente para vivir?',1,1);
/*!40000 ALTER TABLE `Trivia` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-08-14 15:33:59
