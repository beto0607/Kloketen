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
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Respuesta`
--

LOCK TABLES `Respuesta` WRITE;
/*!40000 ALTER TABLE `Respuesta` DISABLE KEYS */;
INSERT INTO `Respuesta` VALUES (5,'  El modelo de CopÃ©rnico pertenece al siglo XVI. ',1,2),(6,'  El modelo de CopÃ©rnico pertenece al siglo XV.',0,2),(7,'  El modelo de CopÃ©rnico pertenece al siglo XIV',0,2),(11,'  3800 aÃ±os',0,3),(12,'  3800 millones de aÃ±os ',1,3),(13,'  40000 millones de aÃ±os',0,3),(14,'  El universo fue creado por un ser superior.',0,4),(15,'  El universo se creÃ³ a partir de molÃ©culas de antimateria.',0,4),(16,'  El universo se creÃ³ por la explosiÃ³n de un bloque de materia de alta densidad.',1,4),(17,'  Hace 3.500.000.000 de aÃ±os.',1,5),(18,'  Hace 350.000.000 de aÃ±os.',0,5),(19,'  Hace 3.500.000 de aÃ±os.',0,5),(20,'  SÃ­.   ',0,6),(21,'  No.',1,6),(22,'  Paleozoica.',0,7),(23,'  PrecÃ¡mbica.',1,7),(24,'  CÃ¡mbrico.',0,7),(25,'  SilÃºrgico.',0,7),(26,'  Paleozoica. ',1,8),(27,'  PrecÃ¡mbrica.',0,8),(28,'  Cenozoica.',0,8),(29,'  Peces con aletas.',1,9),(30,'  Reptiles.',0,9),(31,'  MamÃ­feros.',0,9),(32,'  En la era Paleozoica.',0,10),(33,'  En la era Mesozoica.  ',1,10),(34,'  En la era Cenozoica.',0,10),(35,'  AnaerÃ³bico.',1,11),(36,'  AerÃ³bico.  ',0,11),(37,'  BÃ­pedo.',0,11),(38,'  4650 millones  de aÃ±os.  ',1,12),(39,'  2 millones de aÃ±os.  ',0,12),(40,'  7890 millones de aÃ±os.',0,12),(41,'  DiÃ³xido de carbono. (CO2) ',0,13),(42,'  OxÃ­geno. ',1,13),(43,'  Vapor de agua',0,13),(44,'  Hidrogeno',0,13),(45,'  Monoxido de carbono',0,13),(46,'  Nitrogeno',0,13);
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
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`idTrivia`,`Mision_idMision`),
  KEY `fk_Trivia_Mision1` (`Mision_idMision`),
  CONSTRAINT `fk_Trivia_Mision1` FOREIGN KEY (`Mision_idMision`) REFERENCES `Mision` (`idMision`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Trivia`
--

LOCK TABLES `Trivia` WRITE;
/*!40000 ALTER TABLE `Trivia` DISABLE KEYS */;
INSERT INTO `Trivia` VALUES (2,'El modelo geocÃ©ntrico del universo propuesto por Tolomeo en el siglo II D.C. fue aceptado como dogma cientÃ­fico hasta que CopÃ©rnico propuso el modelo heliocÃ©ntrico, en 1543.  Â¿CuÃ¡l es la opciÃ³n correcta?',1,1,0),(3,'Las primeras molÃ©culas orgÃ¡nicas a partir de las cuales se originÃ³ la vida se crearon por interacciÃ³n de materiales inertes y energÃ­a. Â¿Hace cuÃ¡nto tiempo que se originaron las primeras molÃ©culas?',1,1,0),(4,'El Big Bang es la teorÃ­a del origen de universo mÃ¡s aceptada actualmente por la FÃ­sica. Formalmente recibe el nombre de TeorÃ­a del Modelo EstÃ¡ndar o TeorÃ­a del Universo Inflacionario. Â¿QuÃ© principio sostiene?',2,1,0),(5,'Â¿CuÃ¡ndo apareciÃ³ la vida sobre la Tierra primitiva?',2,1,0),(6,'\"En sus orÃ­genes la Tierra era muy blanda. Se cree que una lluvia de meteoritos originÃ³ una intensa actividad volcÃ¡nica que provocÃ³ la eliminaciÃ³n de gases y la acumulaciÃ³n de hidrÃ³geno, diÃ³xido de carbono, metano, amonÃ­aco y vapor de agua, formando la atmÃ³sfera primitiva.   El diÃ³xido de carbono nos protege de las grandes amplitudes tÃ©rmicas.A medida que la temperatura de la Tierra comenzÃ³ a bajar, el agua empezÃ³ a condensarse y las copiosas lluvias originaron los mares y ocÃ©anos. Â¿QuÃ© proceso se desarrollÃ³ entonces? \"',2,1,0),(7,'\"Los organismos multicelulares evolucionaron a partir de las cÃ©lulas eucariotas y aparecieron hace alrededor de 1000 millones de aÃ±os. Â¿En cuÃ¡l de las eras de la Tierra surgen los primeros organismos?   \"',2,1,0),(8,'\"Los primeros organismos terrestres fueron probablemente algas. Las primeras plantas multicelulares terrestres surgieron alrededor de 670 millones de aÃ±os. Â¿En quÃ© era geolÃ³gica sucediÃ³ esto?   \"',2,1,0),(9,'\"A medida que avanzaban los aÃ±os, la vida terrestre exigÃ­a adaptaciones en relaciÃ³n con la reproducciÃ³n, adquisiciÃ³n, distribuciÃ³n y retenciÃ³n de agua. La Tierra ofrecÃ­a luz en abundancia y protecciÃ³n a los herbÃ­voros acuÃ¡ticos. La proliferaciÃ³n de vegetaciÃ³n servÃ­a de alimento a las especies terrestres. Â¿CuÃ¡les fueron, en la evoluciÃ³n, los primeros vertebrados terrestres? \"',2,1,0),(10,'\"En las tierras emergentes dominaban los reptiles, principalmente los dinosaurios. Estos grandes animales dominaban todos los ambientes. Â¿En quÃ© era geolÃ³gica sucediÃ³ esto?  \"',2,1,0),(11,'En la Tierra primitiva, hace aproximadamente 3800 millones de aÃ±os, no habÃ­a oxÃ­geno libre en la atmÃ³sfera. Â¿CÃ³mo fue entonces el metabolismo energÃ©tico?',3,1,0),(12,'Â¿CuÃ¡ntos aÃ±os tiene la Tierra?',3,1,0),(13,'\"Durante el perÃ­odo en el que surgiÃ³ la Vida en la Tierra se produjeron numerosos cambios en el planeta, de los cuales los mÃ¡s importantes fueron la consolidaciÃ³n de los materiales de la litosfera y la apariciÃ³n de la atmÃ³sfera. La atmÃ³sfera primitiva de la Tierra era muy diferente de la actual. Â¿QuÃ© componente se encontraba en menor proporciÃ³n en la Tierra primitiva?  \"',3,1,0);
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

-- Dump completed on 2014-08-21 17:20:54
