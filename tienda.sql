CREATE DATABASE  IF NOT EXISTS `tienda` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `tienda`;
-- MySQL dump 10.13  Distrib 5.7.12, for Win32 (AMD64)
--
-- Host: localhost    Database: tienda
-- ------------------------------------------------------
-- Server version	5.7.14-log

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
-- Table structure for table `ordenes`
--

DROP TABLE IF EXISTS `ordenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ordenes` (
  `orden_id` int(11) NOT NULL AUTO_INCREMENT,
  `producto_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `precio` float(5,2) NOT NULL,
  `cantidad` int(2) NOT NULL,
  `total` float(10,2) NOT NULL,
  `orden_estado` int(1) NOT NULL,
  PRIMARY KEY (`orden_id`),
  KEY `pk_ordenes` (`orden_id`,`producto_id`,`usuario_id`) USING BTREE,
  KEY `fk_producto_id` (`producto_id`) USING BTREE,
  KEY `fk_usuario_id` (`usuario_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ordenes`
--

LOCK TABLES `ordenes` WRITE;
/*!40000 ALTER TABLE `ordenes` DISABLE KEYS */;
INSERT INTO `ordenes` VALUES (9,4,1,9.95,1,9.95,0),(11,1,2,20.50,1,20.50,0),(12,7,2,14.95,1,14.95,0),(15,2,1,4.95,1,4.95,0),(16,2,2,4.95,1,4.95,0),(17,1,2,20.50,5,102.50,0);
/*!40000 ALTER TABLE `ordenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persona`
--

DROP TABLE IF EXISTS `persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persona` (
  `persona_id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `genero` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`persona_id`),
  KEY `pk_persona` (`persona_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persona`
--

LOCK TABLES `persona` WRITE;
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` VALUES (1,'Pierre Stalin','Chavez Pihuave','0931587034','1996-10-25','masculino','pierre.chavezp@ug.edu.ec'),(2,'Pierro','Ignacio','1234567890','2012-08-01','maculino','pierre_chavez@outlook.com'),(3,'Kevin','Lupera Bravo','0951726777','2002-12-11','mujer','kevinlupera1997@outlook.com');
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `producto` (
  `producto_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_nombre` varchar(100) NOT NULL,
  `pro_descripcion` varchar(300) NOT NULL,
  `pro_precio` float(5,2) NOT NULL,
  `pro_img` varchar(50) NOT NULL,
  PRIMARY KEY (`producto_id`),
  UNIQUE KEY `pk_producto` (`producto_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` VALUES (1,'Arduino UNO','versión clásica de Arduino UNO R3',20.50,'arduinoR1.jpg'),(2,'Sensor de Humedad de Suelo','Sensor de Humedad de Suelo es fácil de usar, mide la humedad en el suelo y materiales similares',4.95,'shs.jpg'),(3,'Sensor de Pulso','El Sensor de Pulso Amped es un sensor de frecuencia cardíaca plug-and-play para Arduino.',4.95,'spulso.jpg'),(4,'Sensor de movimiento PIR','Enciéndalo y espere 1-2 segundos para que el sensor obtenga una instantánea de la cámara. Si algo se mueve después de ese período, el pin de \"alarma\" bajará.',9.95,'pir.jpg'),(5,'Sparkfun GPS Logger Escudo','El escudo se basa en un GP3906-TLP Módulo GPS - un receptor GPS de 66 canales que ofrece una arquitectura MT3339 de MediaTek y hasta una velocidad de actualización de 10 Hz.',44.95,'spkgps.jpg'),(6,'LilyPad Vibe Board','LilyPad es una tecnología portátil desarrollado por Leah Buechley y diseñada por Leah y Sparkfun.',7.95,'lilypad.jpg'),(7,'micro:bit Board','El micro BBC: bit es un ordenador de bolsillo que le permite ser creativo con la tecnología digital.',14.95,'microbit.jpg'),(8,'LilyPad Button Board','CLilyPad es una tecnología de e-textiles portátil desarrollado por Leah Buechley y diseñada por Leah y Sparkfun.',1.50,'lilybt.jpg'),(9,'Escudo MyoWare LED','Con este escudo se le proporcionará con una representación visual de las señales proporcionadas por el sensor de Muscle MyoWare.',24.95,'emyoware.jpg');
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) NOT NULL,
  `clave` varchar(20) NOT NULL,
  `persona_id` int(11) NOT NULL,
  PRIMARY KEY (`usuario_id`),
  KEY `pk_usuarioId` (`usuario_id`),
  KEY `fk_usuario_personaId` (`persona_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'admin','12345',1),(2,'pierre','12345',2),(3,'kevin','12345678',3);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'tienda'
--

--
-- Dumping routines for database 'tienda'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-25 22:21:13
