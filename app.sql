-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: appsquadz_main_db1
-- ------------------------------------------------------
-- Server version	5.7.17-log

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
-- Table structure for table `app_admin`
--

DROP TABLE IF EXISTS `app_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `app_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `app_admin`
--

LOCK TABLES `app_admin` WRITE;
/*!40000 ALTER TABLE `app_admin` DISABLE KEYS */;
INSERT INTO `app_admin` VALUES (1,'appsquadz','appsquadz@gmail.com','9876543210','166419701e2176a04e865643a263486d','2017-11-11');
/*!40000 ALTER TABLE `app_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `app_app_category`
--

DROP TABLE IF EXISTS `app_app_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `app_app_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `app_app_category`
--

LOCK TABLES `app_app_category` WRITE;
/*!40000 ALTER TABLE `app_app_category` DISABLE KEYS */;
INSERT INTO `app_app_category` VALUES (1,'Government IT','2017-11-07 10:33:22'),(2,'Non-Profit Organization','2017-11-07 10:33:22'),(3,'Video Streaming & Conferencing','2017-11-07 10:33:22'),(4,'Taxi Booking & Ride Sharing','2017-11-07 10:33:22'),(5,'Health & Fitness','2017-11-07 10:33:23'),(6,'Transport & Logistics','2017-11-07 10:33:23'),(7,'Food & Beverages','2017-11-07 10:33:23'),(8,'Real Estate & Property','2017-11-07 10:33:23'),(9,'Social Networking','2017-11-07 10:33:23'),(10,'Banking','2017-11-07 10:33:23'),(11,' Finance & Insurance','2017-11-07 10:33:23'),(12,'Education','2017-11-07 10:33:23'),(13,'eLearning & eTraining','2017-11-07 10:33:23'),(14,'mEcommerce','2017-11-07 10:33:23'),(15,' Retail & B2B','2017-11-07 10:33:23'),(16,'Job Portal & Recruitment','2017-11-07 10:33:23'),(17,'Marketing & Classified','2017-11-07 10:33:23'),(18,'Travel & Hospitality','2017-11-07 10:33:23'),(19,'Map & Navigation','2017-11-07 10:33:23'),(20,'News & Magazine','2017-11-07 10:33:23'),(21,'Healthcare & Fitness','2017-11-07 10:33:23'),(22,'Dating','2017-11-07 10:33:23'),(23,'Automotive','2017-11-07 10:33:23'),(24,'Gaming & Leisure','2017-11-07 10:33:23'),(25,'Event & Tickets','2017-11-07 10:33:23'),(26,'Matrimony','2017-11-07 10:33:23'),(27,'RFID & Bluetooth Solution','2017-11-07 10:33:23'),(28,'KIOSK Based Solution','2017-11-07 10:33:23'),(29,'MLM Software','2017-11-07 10:33:23');
/*!40000 ALTER TABLE `app_app_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `app_apps_backends`
--

DROP TABLE IF EXISTS `app_apps_backends`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `app_apps_backends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_app_id` int(11) NOT NULL,
  `fk_backend_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=800 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `app_apps_backends`
--

LOCK TABLES `app_apps_backends` WRITE;
/*!40000 ALTER TABLE `app_apps_backends` DISABLE KEYS */;
INSERT INTO `app_apps_backends` VALUES (1,46,1),(2,48,3),(3,48,4),(4,48,6),(5,49,9),(6,49,10),(7,49,12),(8,49,13),(9,49,15),(10,49,16),(11,49,19),(12,11,1),(13,11,2),(14,11,1),(15,11,2),(16,11,5),(17,11,6),(18,11,8),(19,11,5),(20,11,6),(21,11,8),(22,11,5),(23,11,6),(24,11,8),(25,11,5),(26,11,6),(27,11,8),(28,50,5),(29,50,7),(30,50,9),(31,50,12),(32,51,10),(33,51,11),(34,51,13),(35,51,17),(36,52,1),(37,52,2),(38,52,3),(39,52,1),(40,52,2),(41,52,3),(42,52,11),(43,52,12),(44,52,13),(46,56,12),(47,56,16),(72,58,17),(73,55,8),(122,24,3),(123,24,5),(124,24,8),(125,24,10),(131,60,14),(132,59,3),(133,59,7),(134,59,10),(143,63,6),(144,63,8),(145,63,9),(146,63,10),(153,66,1),(154,66,28),(155,67,3),(156,67,28),(159,69,1),(160,69,28),(161,68,1),(162,68,28),(163,70,1),(164,70,5),(165,70,28),(169,71,1),(170,71,5),(171,71,28),(172,64,3),(173,64,5),(174,64,15),(175,64,26),(176,74,1),(177,74,20),(178,74,21),(179,74,22),(180,74,28),(181,75,1),(182,75,5),(183,75,20),(184,75,21),(185,75,22),(186,75,28),(187,76,1),(188,76,20),(189,76,21),(190,76,22),(191,76,28),(192,77,3),(193,77,28),(194,78,1),(195,78,20),(196,78,21),(197,78,22),(198,78,28),(209,79,1),(210,79,28),(211,80,1),(212,80,4),(213,80,20),(214,80,21),(215,80,28),(220,81,3),(221,81,20),(222,81,21),(223,81,28),(232,82,1),(233,82,20),(234,82,21),(235,82,28),(241,83,1),(242,83,20),(243,83,21),(244,83,22),(245,83,28),(246,84,3),(247,84,20),(248,84,21),(249,84,28),(266,85,1),(267,85,20),(268,85,21),(269,85,28),(278,86,1),(279,86,20),(280,86,21),(281,86,28),(290,87,1),(291,87,20),(292,87,21),(293,87,28),(299,88,1),(300,88,5),(301,88,20),(302,88,21),(303,88,28),(308,89,1),(309,89,20),(310,89,21),(311,89,28),(312,90,1),(313,90,20),(314,90,21),(315,90,28),(316,91,1),(317,91,20),(318,91,21),(322,92,1),(323,92,20),(324,92,21),(325,93,1),(326,93,5),(327,93,20),(328,93,21),(329,93,28),(335,95,1),(336,95,20),(337,95,21),(342,96,1),(343,96,20),(344,96,21),(345,96,28),(361,97,1),(362,97,5),(363,97,20),(364,97,21),(365,97,28),(366,98,1),(367,98,20),(368,98,21),(369,98,28),(370,99,1),(371,99,5),(372,99,20),(373,99,21),(374,100,1),(375,100,20),(376,100,21),(377,100,28),(378,101,1),(379,101,20),(380,101,21),(381,101,28),(390,65,1),(391,65,28),(392,102,1),(393,102,20),(394,102,21),(395,102,28),(396,103,1),(397,103,5),(398,103,20),(399,103,21),(400,103,28),(401,104,1),(402,104,5),(403,104,20),(404,104,21),(405,104,28),(406,105,1),(407,105,5),(408,105,20),(409,105,21),(410,105,28),(411,106,1),(412,106,5),(413,106,20),(414,106,21),(415,106,28),(416,107,1),(417,107,5),(418,107,20),(419,107,21),(420,107,28),(421,108,1),(422,108,20),(423,108,21),(424,108,28),(425,109,1),(426,109,20),(427,109,21),(428,109,28),(429,110,1),(430,110,5),(431,110,20),(432,110,21),(433,110,28),(434,111,1),(435,111,5),(436,111,20),(437,111,21),(438,111,28),(439,112,1),(440,112,5),(441,112,20),(442,112,21),(443,112,28),(444,113,1),(445,113,20),(446,113,21),(447,113,28),(454,114,1),(455,114,5),(456,114,10),(457,114,20),(458,114,21),(459,114,28),(460,115,1),(461,115,5),(462,115,20),(463,115,21),(464,115,28),(470,116,1),(471,116,5),(472,116,20),(473,116,21),(474,116,28),(475,117,1),(476,117,20),(477,117,21),(478,117,28),(485,118,3),(486,118,5),(487,118,6),(488,118,20),(489,118,21),(490,118,28),(491,119,3),(492,119,4),(493,119,20),(494,119,21),(495,119,28),(501,120,1),(502,120,5),(503,120,20),(504,120,21),(505,120,28),(510,121,1),(511,121,20),(512,121,21),(513,121,28),(514,122,1),(515,122,20),(516,122,21),(517,122,28),(518,123,1),(519,123,20),(520,123,21),(521,123,29),(522,124,1),(523,124,20),(524,124,21),(525,124,28),(526,125,1),(527,125,5),(528,125,20),(529,125,21),(530,125,28),(531,126,1),(532,126,20),(533,126,21),(534,126,28),(540,127,3),(541,127,4),(542,127,20),(543,127,21),(544,127,28),(545,128,1),(546,128,20),(547,128,21),(548,128,28),(553,129,1),(554,129,20),(555,129,21),(556,129,28),(569,130,1),(570,130,20),(571,130,21),(572,130,28),(573,131,1),(574,131,20),(575,131,21),(576,131,28),(581,132,1),(582,132,20),(583,132,21),(584,132,28),(585,133,1),(586,133,10),(587,133,11),(588,133,20),(589,133,21),(590,133,28),(591,134,1),(592,134,20),(593,134,21),(594,134,28),(595,134,29),(596,135,3),(597,135,11),(598,135,20),(599,135,21),(600,135,28),(601,136,1),(602,136,5),(603,136,10),(604,136,20),(605,136,21),(606,136,28),(607,137,1),(608,137,5),(609,137,20),(610,137,21),(611,137,28),(618,138,1),(619,138,5),(620,138,6),(621,138,20),(622,138,21),(623,138,28),(632,140,1),(633,140,10),(634,140,20),(635,140,21),(636,140,28),(637,141,1),(638,141,5),(639,141,9),(640,141,20),(641,141,21),(642,141,29),(653,142,1),(654,142,10),(655,142,20),(656,142,21),(657,142,28),(674,143,1),(675,143,20),(676,143,21),(677,143,28),(678,144,1),(679,144,5),(680,144,20),(681,144,21),(682,144,28),(690,146,1),(691,146,15),(692,146,16),(693,146,20),(694,146,21),(695,146,28),(696,146,29),(697,147,1),(698,147,5),(699,147,15),(700,147,16),(701,147,20),(702,147,21),(703,147,28),(709,148,1),(710,148,5),(711,148,20),(712,148,21),(713,148,28),(714,149,1),(715,149,15),(716,149,16),(717,149,28),(718,150,1),(719,150,10),(720,150,20),(721,150,21),(722,150,28),(723,151,1),(724,151,15),(725,151,16),(726,151,20),(727,151,21),(728,151,28),(735,152,1),(736,152,15),(737,152,19),(738,152,20),(739,152,21),(740,152,28),(748,145,1),(749,145,15),(750,145,16),(751,145,20),(752,145,21),(753,145,28),(754,145,29),(755,139,1),(756,139,20),(757,139,21),(758,139,28),(759,94,1),(760,94,5),(761,94,20),(762,94,21),(763,94,28),(774,153,1),(775,153,4),(776,153,20),(777,153,21),(778,153,28),(779,154,1),(780,154,5),(781,154,20),(782,154,21),(783,154,28),(784,155,1),(785,155,5),(786,155,15),(787,155,16),(788,155,20),(789,155,21),(790,155,28),(791,156,1),(792,156,5),(793,156,15),(794,156,16),(795,156,20),(796,156,21),(797,156,28),(798,157,10),(799,157,13);
/*!40000 ALTER TABLE `app_apps_backends` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `app_apps_categories`
--

DROP TABLE IF EXISTS `app_apps_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `app_apps_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_app_id` int(11) NOT NULL,
  `fk_category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=363 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `app_apps_categories`
--

LOCK TABLES `app_apps_categories` WRITE;
/*!40000 ALTER TABLE `app_apps_categories` DISABLE KEYS */;
INSERT INTO `app_apps_categories` VALUES (1,56,6),(2,56,11),(3,56,12),(55,58,10),(56,58,12),(57,55,4),(65,61,12),(66,62,12),(78,24,17),(89,60,5),(90,60,8),(91,60,12),(92,59,2),(93,59,4),(94,59,7),(95,59,10),(100,63,2),(101,63,5),(106,66,11),(107,66,15),(108,67,10),(109,67,11),(110,67,15),(112,69,11),(113,69,15),(114,68,11),(115,70,10),(116,70,11),(117,70,15),(119,71,11),(120,72,10),(121,72,11),(122,72,15),(123,64,11),(124,64,15),(125,73,15),(126,74,15),(127,75,11),(128,75,15),(129,76,10),(130,76,11),(131,76,15),(132,77,10),(133,77,11),(134,77,15),(135,78,10),(136,78,11),(142,79,11),(143,80,10),(144,80,11),(147,81,10),(148,81,11),(155,82,10),(156,82,11),(159,83,10),(160,83,11),(161,84,11),(170,85,19),(171,85,25),(175,86,25),(182,87,9),(183,87,16),(184,87,25),(186,88,25),(189,89,3),(190,89,25),(191,90,25),(192,91,25),(194,92,25),(195,93,25),(199,95,3),(200,95,9),(201,95,22),(204,96,9),(205,96,22),(212,97,9),(213,97,22),(214,98,22),(215,99,22),(216,100,22),(217,101,22),(226,65,11),(227,65,15),(229,102,22),(230,103,22),(233,104,9),(234,104,22),(235,105,22),(236,106,22),(237,107,5),(238,107,27),(239,108,5),(240,108,27),(242,109,5),(243,110,3),(244,110,5),(245,111,3),(246,111,5),(247,112,3),(248,112,5),(249,113,5),(251,114,5),(252,115,5),(254,116,5),(256,117,5),(258,118,5),(259,119,5),(261,120,5),(263,121,5),(264,122,12),(265,123,12),(266,123,13),(267,124,12),(268,124,13),(269,125,12),(270,125,13),(271,126,12),(274,127,12),(275,127,13),(276,128,12),(277,128,13),(280,129,12),(281,129,13),(288,130,12),(289,130,13),(290,131,12),(291,131,13),(294,132,12),(295,132,13),(298,133,12),(299,133,13),(300,134,12),(301,134,13),(302,135,12),(303,135,13),(304,136,12),(305,136,13),(306,137,12),(307,137,13),(310,138,12),(311,138,13),(318,140,7),(319,141,7),(322,142,7),(327,143,7),(328,144,7),(330,146,7),(331,147,7),(335,148,5),(336,148,7),(337,148,15),(339,149,7),(340,150,12),(341,150,13),(343,151,7),(345,152,7),(347,145,7),(348,139,1),(349,139,7),(350,139,27),(351,94,9),(352,94,14),(353,94,22),(356,153,7),(357,154,7),(358,155,7),(359,155,14),(360,156,7),(361,156,14),(362,157,7);
/*!40000 ALTER TABLE `app_apps_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `app_apps_frontends`
--

DROP TABLE IF EXISTS `app_apps_frontends`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `app_apps_frontends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_app_id` int(11) NOT NULL,
  `fk_frontend_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=540 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `app_apps_frontends`
--

LOCK TABLES `app_apps_frontends` WRITE;
/*!40000 ALTER TABLE `app_apps_frontends` DISABLE KEYS */;
INSERT INTO `app_apps_frontends` VALUES (1,45,1),(2,46,1),(3,46,3),(4,48,2),(5,48,5),(6,48,6),(7,48,8),(8,11,5),(9,11,8),(10,49,5),(11,49,6),(12,49,7),(13,49,9),(14,49,10),(15,11,1),(16,11,2),(17,11,1),(18,11,2),(19,11,3),(20,11,6),(21,11,9),(22,11,3),(23,11,6),(24,11,9),(25,11,3),(26,11,6),(27,11,9),(28,11,3),(29,11,6),(30,11,9),(31,50,1),(32,50,2),(33,50,3),(34,50,4),(35,50,10),(36,51,7),(37,51,9),(38,51,10),(39,51,11),(40,52,1),(41,52,2),(42,52,5),(43,52,1),(44,52,2),(45,52,5),(46,52,6),(47,52,6),(48,52,9),(49,52,10),(50,52,11),(53,56,3),(54,56,6),(55,56,9),(111,57,6),(116,58,8),(166,24,1),(167,24,3),(168,24,5),(169,24,7),(176,60,10),(177,59,2),(178,59,3),(179,59,4),(180,59,5),(185,63,1),(186,63,2),(192,66,1),(193,66,2),(194,66,3),(195,67,1),(196,67,2),(197,67,3),(201,69,1),(202,69,2),(203,69,3),(204,68,1),(205,70,1),(206,70,2),(207,70,3),(211,71,1),(212,71,2),(213,71,3),(214,72,1),(215,64,1),(216,64,2),(217,64,3),(218,73,1),(219,73,2),(220,74,1),(221,74,2),(222,74,6),(223,75,1),(224,75,2),(225,75,3),(226,76,1),(227,76,2),(228,76,3),(229,77,1),(230,78,1),(231,78,2),(237,79,1),(238,80,1),(239,80,2),(240,80,3),(244,81,1),(245,81,2),(246,81,3),(253,82,1),(254,82,2),(256,83,1),(257,84,1),(258,84,2),(259,84,3),(264,85,1),(268,86,1),(271,87,1),(273,88,1),(275,89,1),(276,90,1),(277,90,2),(278,90,3),(279,91,1),(283,92,1),(284,92,2),(285,92,3),(286,93,1),(290,95,1),(294,96,1),(295,96,2),(296,96,3),(306,97,1),(307,97,2),(308,97,3),(309,98,1),(310,98,2),(311,98,3),(312,99,1),(313,99,2),(314,99,3),(315,100,1),(316,101,2),(325,65,1),(326,65,2),(328,102,1),(329,103,1),(330,103,2),(331,103,3),(333,104,1),(334,105,1),(335,105,2),(336,105,3),(337,106,1),(338,107,1),(339,107,2),(340,107,3),(341,108,1),(342,108,2),(343,108,3),(347,109,1),(348,109,2),(349,109,3),(350,110,1),(351,110,2),(352,110,3),(353,111,1),(354,111,2),(355,111,3),(356,112,1),(357,112,2),(358,112,3),(359,113,1),(360,113,2),(361,113,3),(365,114,1),(366,114,2),(367,114,3),(368,115,1),(369,115,2),(370,115,3),(374,116,1),(375,116,2),(376,116,3),(380,117,1),(381,117,2),(382,117,3),(386,118,1),(387,118,2),(388,118,3),(389,119,1),(390,119,2),(391,119,3),(395,120,1),(396,120,2),(397,120,3),(401,121,1),(402,121,2),(403,121,3),(404,122,1),(405,123,1),(406,124,1),(407,125,1),(408,125,2),(409,125,3),(410,126,1),(414,127,1),(415,127,2),(416,127,3),(417,128,1),(421,129,1),(422,129,2),(423,129,3),(430,130,1),(431,130,2),(432,131,1),(433,131,2),(435,132,1),(437,133,1),(438,134,1),(439,134,2),(440,134,3),(441,135,1),(442,135,2),(443,135,3),(444,136,1),(445,137,1),(449,138,1),(450,138,2),(451,138,3),(454,140,2),(455,141,1),(456,141,2),(457,141,3),(464,142,1),(465,142,2),(466,142,3),(479,143,1),(480,143,2),(481,143,3),(482,144,1),(483,144,2),(484,144,3),(488,146,1),(489,147,1),(490,147,2),(491,147,3),(495,148,1),(496,148,2),(497,148,3),(501,149,1),(502,149,2),(503,149,3),(504,150,1),(508,151,1),(509,151,2),(510,151,3),(514,152,1),(515,152,2),(516,152,3),(520,145,1),(521,145,2),(522,145,3),(523,139,1),(524,94,1),(525,94,2),(526,94,3),(529,153,1),(530,154,1),(531,154,2),(532,154,3),(533,155,1),(534,155,2),(535,155,3),(536,156,1),(537,156,2),(538,156,3),(539,157,4);
/*!40000 ALTER TABLE `app_apps_frontends` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `app_backend`
--

DROP TABLE IF EXISTS `app_backend`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `app_backend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `app_backend`
--

LOCK TABLES `app_backend` WRITE;
/*!40000 ALTER TABLE `app_backend` DISABLE KEYS */;
INSERT INTO `app_backend` VALUES (1,'PHP','2017-11-07 10:40:29'),(2,'.NET','2017-11-07 10:40:29'),(3,'Java','2017-11-07 10:40:29'),(4,'Angular JS','2017-11-07 10:40:29'),(5,'Node JS','2017-11-07 10:40:29'),(6,'Ruby On Rails','2017-11-07 10:40:29'),(7,'Python','2017-11-07 10:40:29'),(8,'Word Press','2017-11-07 10:40:29'),(9,'Joomla','2017-11-07 10:40:29'),(10,'Drupal','2017-11-07 10:40:29'),(11,'Moodle','2017-11-07 10:40:29'),(12,'Laravel','2017-11-07 10:40:29'),(13,'Zend','2017-11-07 10:40:29'),(14,'Open MRS','2017-11-07 10:40:29'),(15,'Ecommerce & CMS','2017-11-07 10:40:29'),(16,'Magento','2017-11-07 10:40:29'),(17,'WooCommerce','2017-11-07 10:40:30'),(18,'Shopify','2017-11-07 10:40:30'),(19,'PrestaShop','2017-11-07 10:40:30'),(20,'HTML5/CSS','2017-11-07 10:40:30'),(21,'Responsive Web','2017-11-07 10:40:30'),(22,'PSD to HTML5','2017-11-07 10:40:30'),(23,'C#','2017-11-07 10:40:30'),(24,'Sharepoint','2017-11-07 10:40:30'),(25,'DotNetNuke','2017-11-07 10:40:30'),(26,'Sales Force','2017-11-07 10:40:30'),(27,'Parse','2017-11-07 10:40:30'),(28,'MySql','2017-11-07 10:40:30'),(29,'Mango DB','2017-11-07 10:40:30'),(30,'Comming soon','2017-11-07 10:40:30');
/*!40000 ALTER TABLE `app_backend` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `app_frontend`
--

DROP TABLE IF EXISTS `app_frontend`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `app_frontend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `app_frontend`
--

LOCK TABLES `app_frontend` WRITE;
/*!40000 ALTER TABLE `app_frontend` DISABLE KEYS */;
INSERT INTO `app_frontend` VALUES (1,'Android','2017-11-07 10:37:03'),(2,'iOS','2017-11-07 10:37:03'),(3,'iPad','2017-11-07 10:37:03'),(4,'PhoneGap','2017-11-07 10:37:03'),(5,'Xamarin','2017-11-07 10:37:03'),(6,'Ionic','2017-11-07 10:37:03'),(7,'React Native','2017-11-07 10:37:03'),(8,'Unity','2017-11-07 10:37:03'),(9,'Snecha','2017-11-07 10:37:03'),(10,'Adobe Air','2017-11-07 10:37:03'),(11,'Cocos2d','2017-11-07 10:37:03');
/*!40000 ALTER TABLE `app_frontend` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `app_list`
--

DROP TABLE IF EXISTS `app_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `app_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_app_category_id` int(11) NOT NULL,
  `app_name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `app_image` varchar(255) NOT NULL,
  `app_thumb_image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `company_type` enum('1','2','3') NOT NULL COMMENT '1-Startup, 2-Midsize, 3- Enterprise',
  `app_video` varchar(255) NOT NULL,
  `website_url` varchar(255) NOT NULL,
  `android_app` varchar(255) NOT NULL,
  `ios_app` varchar(255) NOT NULL,
  `top_priority` int(11) unsigned NOT NULL,
  `status` int(11) unsigned NOT NULL,
  `create_date` varchar(255) NOT NULL,
  `modify_date` varchar(255) NOT NULL,
  `category_rank` varchar(255) NOT NULL,
  `global_rank` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=158 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `app_list`
--

LOCK TABLES `app_list` WRITE;
/*!40000 ALTER TABLE `app_list` DISABLE KEYS */;
INSERT INTO `app_list` VALUES (0,0,'Demo','no-app.png','','','demo','1','','','','',0,0,'2018-01-12 16:33:31','','1000','1000'),(64,0,'Havells mKonnect','havells.jpg','Dunia-Mobile.png','Mashreq UAE.png','Havells mKonnect is currently having a dealer’s web portal where the dealers can see their various reports and place orders. Now Havells is enable the similar functions of the portal on various mobile devices. Its the enterprise mobility app for havells .','3','','http://www.havells.com','https://play.google.com/store/apps/details?id=com.dotvik.havells.xmw.dealerskonnect.viewDraw','https://itunes.apple.com/in/app/havells-mkonnect/id903019396?mt=8',0,1,'','','',''),(65,0,'Cashco','cashcologo.png','cashcologo.png','cashco_large.png','Cashco is a smart two-way intimation app that keeps track of money you have to give someone or take from someone. It simplifies the accounting system and is helpful for traders, roommates, coaches, students, friends or just anyone else. Save yourself from','1','','http://www.mycashco.com','https://play.google.com/store/apps/details?id=com.vrs.android.cashco','https://itunes.apple.com/in/app/cashco/id1213153349',0,1,'','','',''),(66,0,'Cash Gain','cashgain.png','cash_again.png','','Cash Gain App is the India\'s First Price Comparison & Cash Back Android app which gives you Rewards, Discount Coupons, and Cash Back on Flipkart, Amazon, Jabong, Snapdeal, eBay, Zovi, Shopclues, Archies, Daily Objects, Lenskart, Basics life, Nykaa, Fab Al','1','','http://cashgainapp.com','https://play.google.com/store/apps/details?id=com.cashgain.app','',0,1,'','','',''),(67,0,'ICICI Bank','icicibank.png','icici-bank.png','icici bank.png','iMobile, the most comprehensive and secure Mobile Banking application, getting payments done through Unified Payment Interface (UPI), offers over 170 banking services on your mobile.','3','','https://www.icicibank.com','https://play.google.com/store/apps/details?id=com.csam.icici.bank.imobile','https://itunes.apple.com/in/app/imobile-by-icici-bank/id375276006',0,1,'','','',''),(68,0,'My Finances','myfinances.png','','My finance.png','My Finances is a perfect tool for expense control and manage home budget. Home budget management will become easier from now. Thanks to carefully selected functions not only will you be able to save more money, but also analyze your expenses more precisel','2','','http://7csolutions.com/','https://play.google.com/store/apps/details?id=com.sevencsolutions.myfinances','',0,1,'','','',''),(69,0,'Monefy','Monefy.png','Monefy.png','Monefy.png','How to track your expenses successfully? We know that it’s easy. You only need to add each expense you do… no more than that! And Monefy is going to help you. Just add new transactions when you are buying a coffee or taking a taxi. It’s done in one click,','2','','http://www.monefy.me/','https://play.google.com/store/apps/details?id=com.monefy.app.lite','https://itunes.apple.com/us/app/monefy-money-manager/id1212024409',0,1,'','','',''),(70,0,'Blockfolio Bitcoin / Altcoin App','Blockfolio Bitcoin - Altcoin App.png','Blockfolio-Bitcoin-details.png','Blockfolio bitcoin.png','Blockfolio Bitcoin and Altcoin Portfolio App offers complete cryptocurrency management, with easy to use tools to keep track of all your cryptocurrency investments. Get detailed price and market information for individual currencies and your entire portfo','2','','http://www.blockfolio.com/','https://play.google.com/store/apps/details?id=com.blockfolio.blockfolio','https://itunes.apple.com/us/app/blockfolio-bitcoin-altcoin-app/id1095564685',0,1,'','','',''),(71,0,'StashAway - Wealth Manager','StashAway - Wealth Manager.png','Simah_only_app.png','','We\'ve created an efficient way to build wealth faster, more easily, and more conveniently. With a fully digital interface, incredibly low fees, sophisticated investment strategies, advanced technology, and the security your money needs, you can now invest','2','','https://www.stashaway.sg/','https://play.google.com/store/apps/details?id=com.awp.stashaway','https://itunes.apple.com/in/app/stashaway-wealth-manager/id1229966330',0,1,'','','',''),(72,0,'Mashreq UAE','Mashreq UAE.png','Mashreq-UAE.png','Mashreq UAE.png','Snapp Mashreq Mobile Banking application allows you to check your account balances, pay utility bills, transfer funds and place account servicing requests. Free, simple and highly secure, this service ensures your banking needs are taken care of from any ','2','','http://www.mashreqbank.com/uae/en/personal/digital-banking/mobile-banking-snapp','https://play.google.com/store/apps/details?id=com.vipera.ts.starter.MashreqAE','https://itunes.apple.com/in/app/mashreq-uae/id378549193',0,1,'','','',''),(73,0,'Apllo','','','','Apollo Business Partner Connect program.\r\nUsing this app the Authorized Business Partners can Place Orders, View Account Information, Register Warranty and Claim and Much More!!!\r\nThis digital medium will enhance the ease of business and help in quicker a','3','','','','',0,1,'','','',''),(74,0,'Apollo Sampark','apollo_sampark.png','','','Apollo Business Partner Connect program.\r\nUsing this app the Authorized Business Partners can Place Orders, View Account Information, Register Warranty and Claim and Much More!!!\r\nThis digital medium will enhance the ease of business and help in quicker a','3','','https://www.apollotyres.com','https://play.google.com/store/apps/details?id=com.arteriatech.apollo','https://itunes.apple.com/in/app/apollo-sampark/id1100218628',0,1,'','','',''),(75,0,'Kwikard','kwikard.png','','','Having a problem in managing the business card? Don’t worry we have got a perfect solution to manage your business card. With kwikard you can make a business card in a minute!! The digital business card app made for aspiring entrepreneurs, company owners ','1','https://www.youtube.com/watch?v=YtpcbbxtHbw','https://www.kwikard.com','https://play.google.com/store/apps/details?id=com.kiwkard&hl=en','https://itunes.apple.com/us/app/kwikard-app/id1210341306',0,1,'','','',''),(76,0,'Venmo : Send & Receive Money','venmo.png','','','Venmo is the simple, fun money app for sending cash quickly between friends and shopping at your favorite online stores. Split purchases to avoid awkward IOUs, share your new buys, and catch up on what your friends are doing on the feed.','2','https://www.youtube.com/watch?v=CcnsWAZKS1A','https://venmo.com/','https://play.google.com/store/apps/details?id=com.venmo','https://itunes.apple.com/us/app/venmo/id351727428',0,1,'','','',''),(77,0,'Fundu - Everyone is an ATM!','fundu.jpg','','','Fundu™ is a marketplace for users with electronic money or cash. It is able to match a user who needs cash with another user who can give cash (or vice versa) and seamlessly ensures that there is an electronic flow of funds to counter the physical flow of','2','','http://eko.co.in/','https://play.google.com/store/apps/details?id=in.co.eko.fundu','',0,1,'','','',''),(78,0,'Finomena - EMI without Cards','Finomena.png','','','Looking to buy your dream mobile, laptop, musical instrument, home appliances, DSLR camera, furniture, educational classes online or other items on EMI without credit card? Well, we have something even better for you - FMIs (Flexible Monthly Instalments).','2','','https://www.finomena.com','https://play.google.com/store/apps/details?id=com.finatics.finomena','',0,1,'','','',''),(79,0,'Monas - Expense Manager','Monas.png','Monas_banner.png','Monas_mid.png','Monas is an app to simplify your life starting in financial management. The app will allow you to track income and expenses. However, we are not an expense book! We\'ll also produce a graph and summary on how you spend and manage your finance.','1','','https://mymonas.com/','https://play.google.com/store/apps/details?id=com.huteri.monas','',0,1,'','','',''),(80,0,'MoneyLion','Money Lion.png','','','Track your spending, savings, and credit score for free. Get tailored advice and rewards. NEW: MoneyLion Plus is here with $500, 5.99% APR loans and automated savings.\r\n','1','','https://www.moneylion.com/','https://play.google.com/store/apps/details?id=com.moneylion','https://itunes.apple.com/us/app/moneylion-personal-finance-credit-score-loans/id1064677082',0,1,'','','',''),(81,0,'Penny : Track Spending & Finances','Penny.png','','','Chat with Penny, your personal finance coach, to securely track your spending and plan for a better financial future! We’ve helped hundreds of thousands of people already. Stress less and save more money with Penny','3','','https://www.pennyapp.io/','https://play.google.com/store/apps/details?id=com.pennyapp&hl=en','https://itunes.apple.com/us/app/penny-friendly-finances/id995705434',0,1,'','','',''),(82,0,'Dunia Mobile','DuniaMobile_logo.png','Dunia-Mobile.png','dunia mobile.png','Manage your finances from your pocket! With dunia Mobile, you can monitor your account balance, view statements, transfer funds, pay your bills, stay updated about offers and have ‘Qwik’ access to a host of other services. What’s more? At a click of a but','2','','https://www.dunia.ae/','https://play.google.com/store/apps/details?id=com.dunia.mobile&hl=en','https://itunes.apple.com/in/app/dunia-mobile/id1035261771',0,1,'','','',''),(83,0,'Mashreq UAE','Mashreq UAE Logo.png','Mashreq-UAE.png','Mashreq UAE.png','Snapp Mashreq Mobile Banking application allows you to check your account balances, pay utility bills, transfer funds and place account servicing requests. Free, simple and highly secure, this service ensures your banking needs are taken care of from any ','3','','http://www.mashreqbank.com/uae/en/personal/digital-banking/mobile-banking-snapp','https://play.google.com/store/apps/details?id=com.vipera.ts.starter.MashreqAE&hl=en','',0,1,'','','',''),(84,0,'StashAway - Wealth Manager','StashAway - Wealth Manager.png','','','We\'ve created an efficient way to build wealth faster, more easily, and more conveniently. With a fully digital interface, incredibly low fees, sophisticated investment strategies, advanced technology, and the security your money needs, you can now invest','','','https://www.stashaway.sg/','https://play.google.com/store/apps/details?id=com.awp.stashaway&hl=en','https://itunes.apple.com/in/app/stashaway-wealth-manager/id1229966330',0,1,'','','',''),(85,0,'Beanlost','Beanlost.png','Beanlost_large.png','Beanlost_Banner.png','Create an event can now be done very easily with BeanLost. Invite your friends for this event. With the BeanLost app you can chat with your friends about the event. In different categories, you can now create very simply your own event. Click on an event ','1','','http://www.beanlost.com/','https://play.google.com/store/apps/details?id=com.beanlost&hl=en','',0,1,'','','',''),(86,0,'Pavi','pavi.jpg','Pavi_large.png','pavi_banner.png','For use by colleges students only. \r\nPavi is the easiest way for college students to manage their events. \r\nWith Pavi you are able to create and/or view groups and events and you will see only students and events at your college. ','1','','http://paviapp.com/','https://play.google.com/store/apps/details?id=com.app.pavi.new&hl=en','https://itunes.apple.com/us/app/pavi/id1062310356',0,1,'','','',''),(87,0,'Crossahead : Creative Artists','Crossahead.png','Crossahead_large.png','crossahead_banner.png','Discover Top, Famous, and Modern Artists with Crossahead.\r\nBook artists from any category, follow their profiles and see their portfolio. Discover professional services from best artists in Delhi NCR and send your query to get the best price. ','1','','http://www.crossahead.com/','https://play.google.com/store/apps/details?id=com.ve.croassahead&hl=en','',0,1,'','','',''),(88,0,'Nearify - Discover Events','Nearify.png','nearify_large.png','Nearify_banner.png','Discover all events you love, on topics you like, as never before, happening near you from more than 20 million events worldwide.\r\nOur users can discover awesome, new and amazing things to do, events in every city in India and outside India, such as trend','1','','','https://play.google.com/store/apps/details?id=com.nearify.android&hl=en','https://itunes.apple.com/in/app/nearify-discover-all-fun-events-best-things-to-do-places/id905913930',0,1,'','','',''),(89,0,'InstaLively - Livestreaming','Instalively.png','Instalively_banner.png','Instalively_banner.png','This is a livestreaming application that allows you to do Facebook Live Streaming, Twitter Live Streaming & YouTube Live Streaming from your phone. The Live Streaming can be done in good resolution and can be simultaneously broadcasted on Facebook, Twitte','2','','http://mypulse.co/','https://play.google.com/store/apps/details?id=com.instalively.android&hl=en','',0,1,'','','',''),(90,0,'Peatix','Peatix.png','Peatix_large.png','Peatix_banner.png','Peatix uncovers the best of your city’s unique communities and events and is home to a passionate group of people who do differently. With over 34K groups running events in 26 countries, Peatix enables you to find communities you love, rally at events, an','2','','https://help.peatix.com/','https://play.google.com/store/apps/details?id=com.peatix.android.Azuki&hl=en','https://itunes.apple.com/us/app/peatix/id561632513',0,1,'','','',''),(91,0,'Takipcini','Takipcini.png','Takipcini_large.png','Takipcini_banner.png','Followers Delivery\r\nThumbs Delivery\r\nPosting Comments\r\nunfollow\r\nfollowers of people, tastes of people','1','','http://www.instagramtakipcini.com/','https://play.google.com/store/apps/details?id=com.instatrendyyy','',0,1,'','','',''),(92,0,'SeatGeek – Tickets to Sports, Concerts','SeatGeek.png','SeatGeek_large.png','seatgeek_banner.png','SeatGeek is the easiest way to find great deals on tickets to thousands of sporting events (NFL, NBA, NHL, MLB, MLS), concerts, festivals, and Broadway/theater shows. \r\n','2','','https://seatgeek.com/','https://play.google.com/store/apps/details?id=com.seatgeek.android','https://itunes.apple.com/us/app/seatgeek-tickets-concerts/id582790430',0,1,'','','',''),(93,0,'Fever','fever.png','Fever_large.png','fever_dell_banner.png','Discovering the best events in your city has never been easier!\r\n• Fever creates a curated list of events based on your interests\r\n• Book or buy easily using the app\r\n• Discover which events your friends are going to\r\n• Exclusive access to unique experien','2','','https://feverup.com/','https://play.google.com/store/apps/details?id=com.feverup.fever','https://itunes.apple.com/us/app/fever-plans-nyc-mad-bcn-vlc/id497702817?',0,1,'','','',''),(94,0,'Jiffy','jiffy.png','','','Jiffy is a virtual shopping mall where user can window shop, select a product, show it to friends and finally buy it within the chat browser\r\n','1','','http://www.myjiffy.io/','https://play.google.com/store/apps/details?id=jiffy.com.jiffy','https://itunes.apple.com/us/app/jiffy-virtual-shopping-mall/id1202348696',0,1,'2018-01-05 19:11:37','','1','1'),(95,0,'Flirchi - social discovery','Flirchi.png','Flirchi_large.png','','Flirchi is the most powerful social discovery platform. Flirchi is just made for finding new friends!','2','','https://hitwe.com/','https://play.google.com/store/apps/details?id=ru.flirchi.android','',0,1,'','','',''),(96,0,'Waplog Social Network:','waplog.png','','Waplog_banner.png','Use the best dating app, find new dates, match with people nearby and chat. Match and meet new people nearby; discover and flirt with cool new people. You will thank yourself for dating on Waplog. ','2','','https://waplog.com/','https://play.google.com/store/apps/details?id=com.waplog.social','https://itunes.apple.com/us/app/waplog-chat-free-singles-dating/id557997762',0,1,'','','',''),(97,0,'LOVOO','Lovoo.jpg','','Lovoo_banner.png','LOVOO is the fastest growing network for meeting new people. This app make it easy to meet people with same interests or a similar lifestyle nearby. It’s about more than just nice profile pictures. We are interested in people and their stories.','2','','https://www.lovoo.com/','https://play.google.com/store/apps/details?id=net.lovoo.android','https://itunes.apple.com/in/app/lovoo/id445338486',0,1,'','','',''),(98,0,'Meecha - Meet People Nearby','Meecha.png','Meecha_large.png','Meecha_banner.png','Meecha opens a new era of social media throughout the world for people who have not yet met. With Meecha, life could be more fun and less lonely, possibly, you could even meet \"the one\" if you try. Given Meecha\'s world wide coverage, users could easily fi','1','','http://meecha.me/en/','https://play.google.com/store/apps/details?id=me.meecha','https://itunes.apple.com/app/id1157463038',0,1,'','','',''),(99,0,'Hitwe - meet people and chat','hitwe.png','','hitwe_banner.png','Hitwe is the best free social discovery with more than 100 million registered users.  Hitwe is a social discovery website for meeting new people.Millions of people from all over the world are having fun and making new friends on Hitwe every day.','2','','https://hitwe.com/','https://play.google.com/store/apps/details?id=com.hitwe.android','https://itunes.apple.com/us/app/hitwe-meet-people-and-chat/id1057293306',0,1,'','','',''),(100,0,'DateWay - Chat Meet New People','Dateway.png','Dateway_large.png','dateway_banner.png','DateWay provides messenger like experience for you to chat and date with nearby singles. Discover your new partner with whether swiping through a list of strangers or exploring random guys and girls suggested just for you. Pick your date and start messagi','1','','http://datewayapp.com/','https://play.google.com/store/apps/details?id=chat.meet.date.me','https://itunes.apple.com/us/app/date-way-chat-flirt-dating/id944929943',0,1,'','','',''),(101,0,'Its a Date','itsdate.jpg','','','Scroll through hundreds of date ideas ranging from categories like aquariums and zoos to beer-gardens and wineries...and even free dates. This app will make the boring dinner and a movie a thing of the past!','1','','','','https://itunes.apple.com/us/app/its-a-date/id1253915421?ls=1&mt=8',0,1,'','','',''),(102,0,'JustSayHi - Chat, Meet, Dating','JustSayHi.jpg','Just-Say-Hi_large.png','','Don’t be shy, Just Say Hi! JustSayHi is a FREE online social chat network! With millions of single women and single men, JustSayHi is the best video dating app to meet, chat, and date local singles or meet new people around the world! We think seeing vide','1','','https://jsh.mingle.com/','https://play.google.com/store/apps/details?id=com.mingle.justsayhi','',0,1,'','','',''),(103,0,'Kooup - Date & Meet Your Soulmate','Kooup.png','Kooup_large.png','kooup_banner.png','Kooup is the first and only horoscope dating app.\r\nFor you who are looking for the \'real\' partner in life, believe in soulmate through fortune reading, or just want to search for your dream match, Kooup will help you find your perfect match whom you could','2','','http://www.koo-up.com/','https://play.google.com/store/apps/details?id=com.kooup.kooup','https://itunes.apple.com/us/app/kooup/id1145268615',0,1,'','','',''),(104,0,'Fatch - Find Friends, Chat','Fatch.png','Fatch_large.png','fatch_banner.png','Meet different people from all over the world! Like or Skip!  Browse the photos and profiles of people near you. Like or skip them! Start chatting right away if they also like you!','2','','http://www.fatchapp.com/','https://play.google.com/store/apps/details?id=com.app.fatch','',0,1,'','','',''),(105,0,'Ilikeyou','Ilikeyou.png','','ilikeyou_banner.png','Do you want to meet new people? It’s super simple with the I like you chat app. Find out who you like, and you decide where to take it.','1','','https://ilikeyou.com/','https://play.google.com/store/apps/details?id=com.ilikeyou','https://itunes.apple.com/us/app/ilikeyou-meet-chat-friend/id1004937168',0,1,'','','',''),(106,0,'PebbleCast Video Dating Forum','pebblecast.png','','','Make real money on PebbleCast hosting video chats. That\'s right - you can make real money using PebbleCast! \r\nSome of our pebblers are making hundreds of dollars a week, just by video chatting with people on PebbleCast!','1','','','https://play.google.com/store/apps/details?id=in.pebblecast.Android','',0,1,'','','',''),(107,0,'TupeloLife','Tupelo life.png','Tupelo-life_large.png','','The TupeloLife app connects to your mymo fitness tracker and allows you to track your progress as you walk, run, dance, and bike your way to your goals. You can either set your sights on the pre-determined goals within the Tupelo App or you can set your o','2','','https://tupelolife.com/','https://play.google.com/store/apps/details?id=com.tupelo','https://itunes.apple.com/in/app/tupelolife/id912743450',0,1,'','','',''),(108,0,'HealthQuest by TupeloLife','healthquest.jpg','','','HealthQuest is TupeloLife’s app for corporate wellness program providing many health & wellness benefits - it supports corporates who wish to engage their employees, build teamwork and camaraderie as well as a healthy competition between workmates. The He','2','','https://tupelolife.com/','https://play.google.com/store/apps/details?id=com.tupelo.wellness','https://itunes.apple.com/sg/app/healthquest-by-tupelolife/id1140217368?',0,1,'','','',''),(109,0,'AHA Walking Challenge 2017','walkingchallenge.jpg','','','Join the American Heart Association community for the Walking Challenge at the 2017 AHA Scientific Sessions Conference from November 12th to 14th in Anaheim, California. Step, skip, and jog your way to the top of the leaderboard and to a healthier life in','2','','https://tupelolife.com/','https://play.google.com/store/apps/details?id=com.tupelo.ahawalkingchallenge2017','https://itunes.apple.com/us/app/aha-walking-challenge-2017/id1307166039',0,1,'','','',''),(110,0,'Doctor On Demand','doctorondemand.jpg','Doctor-on-demand.png','Doctor_on_Demand.png','Available when you are and without the hassle of the waiting room. Connect in minutes with board-certified physicians and doctoral-level therapists over live video. Just like an in-person visit, your doctor will take your history and symptoms, then will p','1','https://www.youtube.com/watch?v=VRA5RVGeRC8','https://www.doctorondemand.com/','https://play.google.com/store/apps/details?id=com.doctorondemand.android.patient','https://itunes.apple.com/in/app/doctor-on-demand/id591981144',0,1,'','','',''),(111,0,'Dr Now','Dr now.png','Dr-now.png','Dr_now.png','The revolutionary Dr Now(®) platform connects patients with qualified GPs through remote video consultation, giving them the medical diagnosis they need, when they need it.\r\nDr Now(®) is a world first, offering the delivery of medicines and prescriptions ','1','https://www.youtube.com/watch?v=rHcdD0YKdbs','http://www.drnow.com/','https://play.google.com/store/apps/details?id=nhg.DrNow','https://itunes.apple.com/gb/app/dr-now/id963113681',0,1,'','','',''),(112,0,'Fancred - All Sports, All the Time','Fancred.png','Fancred_large.png','Fancred_banner.png','Fancred is an all-sports-all-the-time social media network, focused on the passion sports fans have for their favorite teams. Fancred connects sports fans to one another with posts, photos, videos, live video, and live On-Air broadcasts, creating relation','2','','http://fancred.com/','https://play.google.com/store/apps/details?id=com.fancred.android','https://itunes.apple.com/in/app/fancred-your-only-sports-app/id614787471',0,1,'','','',''),(113,0,'Max MyHealth','Max Health Care.png','max-hospital.png','Max_Health.png','The fastest and easiest way to book an appointment with your Max Hospital doctor, view your lab reports or get health updates - ‘Max MyHealth’ from Max Healthcare makes managing your health needs simple and convenient!\r\nMax Healthcare is one of the leadin','2','','https://www.maxhealthcare.in/','https://play.google.com/store/apps/details?id=com.maxhealthcare','https://itunes.apple.com/in/app/max-myhealth/id965797580',0,1,'','','',''),(114,0,'CVS Pharmacy','CVS Pharmacy.png','cvc-pharma.png','CVS_Pharmacy.png','Staying healthy. Saving time. Spending less. The official CVS Pharmacy® app makes them all easier. ','3','','','https://play.google.com/store/apps/details?id=com.cvs.launchers.cvs','https://itunes.apple.com/in/app/cvs-pharmacy/id395545555',0,1,'','','',''),(115,0,'Nahdi','Nahdi.png','Nahdi.png','Nahdi.png','Al Nahdi Medical Company opened doors in 1986 with two pharmacy outlets in the city of Jeddah, Saudi Arabia. By adopting its clear set vision strategic approach, the company has become the largest pharmaceutical chain in the Middle East and North Africa, ','2','https://www.youtube.com/watch?v=g6GG6UqXNuk','https://www.nahdi.sa/','https://play.google.com/store/apps/details?id=com.nahdi.main','https://itunes.apple.com/us/app/النهدي-nahdi/id868704084',0,1,'','','',''),(116,0,'Saudi FDA','Saudi FDA.png','Saudi-FDA.png','Saudi_FDA.png','The application of the General Authority for Food and Drug Administration on the system Android one applications and smart solutions provided by the Authority, represented sector planning and technical information for users in all segments comprehensively','2','https://www.youtube.com/watch?v=2BBtRSCsL8w','https://www.sfda.gov.sa/ar/Pages/default.aspx','https://play.google.com/store/apps/details?id=sa.gov.sfda.apps','https://itunes.apple.com/sa/app/الغذاء-والدواء/id517576348',0,1,'','','',''),(117,0,'AlDawaa Pharamcies','Al dawaa Pharmacies.png','Al-dawaa-Pharmacies.png','Al_dawaa_Pharmacies.png','Al-Dawaa Pharmacies  to be able to query and see all that is new in pharmacies and offers products and many of the following services.','2','','http://www.al-dawaa.com/','https://play.google.com/store/apps/details?id=com.kr.aldawaa','https://itunes.apple.com/in/app/صيدليات-الدواء/id681487514',0,1,'','','',''),(118,0,'Runtopia running & fitness coach','Runtopia Running Workout.png','Runtastic-me.png','Runtopia.png','Runtopia running - your perfect running & fitness buddy.\r\nProfessional running tracker with data analysis & sharing functions.\r\nBluetooth connectivity with various intelligent sportswear.\r\nCustomized running workout plan and premium function.\r\nRuntopia co','2','','http://www.runtopia.net/','https://play.google.com/store/apps/details?id=net.blastapp','https://itunes.apple.com/app/id1022748905',0,1,'','','',''),(119,0,'Moves','Moves.png','Moves.png','Moves.png','Moves automatically records any walking, cycling, and running you do. You can view the distance, duration, steps, and calories* burned for each activity. The app is always on, so there’s no need to start and stop it. Just keep your phone in your pocket or','2','','http://moves-app.com/','https://play.google.com/store/apps/details?id=com.protogeo.moves','',0,1,'','','',''),(120,0,'YAZIO Calorie Counter','Yazio.png','Yazio.png','Yazio.png','With the free Calorie Counter app by YAZIO, you can manage your daily food diary, track your activities and lose weight successfully. Counting calories and losing weight has never been so easy!','2','','https://www.yazio.com/','https://play.google.com/store/apps/details?id=com.yazio.android','https://itunes.apple.com/us/app/yazio-calorie-counter-app/id946099227',0,1,'','','',''),(121,0,'Speaking Tree ','Speaking Tree.png','','Speaking_Tree.png','Speakingtree.in is India\'s first spiritual social network, where over 5,00,000 spiritual enthusiasts have embarked on their spiritual journey under the guidance of world-renowned spiritual masters like Sri Sri Ravi Shankar, Deepak Chopra, Sadhguru Jaggi V','2','','https://www.speakingtree.in/','https://play.google.com/store/apps/details?id=in.SpeakingTree','https://itunes.apple.com/in/app/speaking-tree-for-iphone/id604884286',0,1,'','','',''),(122,0,'School PTM','School PTM.png','School-PTM.png','School-PTM.png','School Communication shouldn\'t be so hard. Now you will have the most trusted School parent Interaction App.','1','','http://www.schoolptm.com/','https://play.google.com/store/apps/details?id=com.schoolptm','',0,1,'','','',''),(123,0,'My Medhas','My Medhas.png','My-Medhas.png','Medhas.png','My Medhas is a team formed by the young lecturers of Dakshina Kannada in providing quality education via internet. My MEDHAS will focus on providing education at the P.U. level and later on will aim in disseminating education further for competitive exams','1','','http://www.mymedhas.com','https://play.google.com/store/apps/details?id=com.medhas','',0,1,'','','',''),(124,0,'itzTutor','itztutor.jpg','','itztutor.png','itzTutor is latest and most integrated home tuition mobile app to  Search & Select Tutors, Commence, Manage & Pay for Tuition App.','1','','','https://play.google.com/store/apps/details?id=com.itztutor.parent','',0,1,'','','',''),(125,0,'E-Medicoz','E-Medicoz.png','E-Medicoz.png','E-Medicoz.png','Developed by Doctors, eMedicoz is the place to go for Medical students and Doctors to discuss and share clinical cases, multiple choice questions, and medical images. Join our community and connect with thousands of verified doctors, healthcare profession','2','','http://www.emedicoz.com/','https://play.google.com/store/apps/details?id=com.emedicoz.app','https://itunes.apple.com/us/app/emedicoz/id1263112084',0,1,'','','',''),(126,0,'Al-Madarsa','Al-Madarsa.png','','Al-madarsa.png','Al-Madarsa is a free text messaging app that helps teachers, parents and school communicate quickly and efficiently. By connecting school communities, Al-Madarsa makes it easy for everyone to succeed together. Al-Madarsa is based in Saudi Arabia','1','','','https://play.google.com/store/apps/details?id=com.al_madarsa','',0,1,'','','',''),(127,0,'ChalkLit','Chalklit.png','Chalkit.png','Chalkit.png','Classrooms world-over light up as the teacher moves the chalk on the blackboard. ChalkLit provides resources to teachers to help them create greater impact in their classrooms, also allows them to connect with students and parents even beyond the classroo','2','https://www.youtube.com/watch?v=keuQJOk12DY','http://www.millionsparks.org/','https://play.google.com/store/apps/details?id=com.chalklit.learning','https://itunes.apple.com/us/app/chalklit/id1226951531',0,1,'','','',''),(128,0,'Exam Rocket','Exam Rocket.png','','Exam-Rocket.png','Exam Rocket is a free online learning platform for students. The interactive format makes studying more interesting and allows for better retention of key concepts. Where you receive constructive explanations for mistakes. So much better than just reading','1','','','https://play.google.com/store/apps/details?id=com.examrocket','',0,1,'','','',''),(129,0,'EduPage','EduPage.png','eduPage.png','eduPage.png','EduPage - application for teachers, students and parents. App contains Electronic grade book, Electronic class register, Attendance & absence notes, Homework, Schedule, E-learning etc.','2','','http://mobile.edupage.org/','https://play.google.com/store/apps/details?id=air.org.edupage','https://itunes.apple.com/sk/app/edupage/id569428005',0,1,'','','',''),(130,0,'EdX - Online Courses','Edx.png','Edx.png','edx.png','FREE ONLINE COURSES FROM THE WORLD’S BEST UNIVERSITIES AND INSTITUTIONS.\r\nLearn from the experts at Harvard University, MIT, UC Berkeley, Tsinghua University, Microsoft, Linux, The Smithsonian and more.\r\nFree courses in computer science, engineering, history, psychology, nutrition, big data, statistics and hundreds more. ','2','','https://www.edx.org','https://play.google.com/store/apps/details?id=org.edx.mobile','https://itunes.apple.com/us/app/edx/id945480667',0,1,'','','',''),(131,0,'ItsLearningApp','itslearning.png','ItsLearning.png','ItsLearning.png','Created with a focus on the daily needs of teachers and students, the official itslearning app brings the itslearning experience to the device of your choice:\r\n• Clear and simple overview of bulletins and latest changes from your courses\r\n• Messaging function\r\n• Access to your favorite courses and all their content\r\n• Task list (including follow-up tasks for teachers)\r\n• Easy access to the calendar\r\n• Instant notifications about new assessments and other important actions','2','','https://itslearning.com/us/','https://play.google.com/store/apps/details?id=com.itslearning.itslearningintapp','https://itunes.apple.com/us/app/itslearning/id951619066',0,1,'','','',''),(132,0,'Al Quran App','Al Quran.png','Al-Quran.png','Al-Quran.png','Al Quran app: Read, Quest, Reflect. Embark on a transcendent journey of revelation and contemplation of the Holy Quran. Recite and proclaim the words of Allah. This user-friendly reading experience is bound to make the Holy Quran an indispensible part of your daily life. Delight in peaceful reflections of the words of Allah as you hear them recited by your voice enhanced by augmented sound and captivating scenery. ','2','','http://www.isysway.com/#page_6/','https://play.google.com/store/apps/details?id=com.isysway.free.alquran','',0,1,'','','',''),(133,0,'Nafham - School Curriculum','Nafham - School Curriculum.png','Nafham---School-Curriculum.png','Nafham.png','Nafham is an award-winning educational video platform for school students\r\n- 5-15 min free educational videos.\r\n- Covering the official public school curriculum.\r\n- Videos are categorized by grade, semester, subject and academic schedule.\r\n- Crowd-sourced videos.. yes you can contribute with your videos.\r\n- 23,000 videos covering mainly the Egyptian curriculum and Saudi, Algerian, Kuwaiti and Syrian curricula are partially covered.','2','','https://www.nafham.com/','https://play.google.com/store/apps/details?id=com.nafham.education','https://itunes.apple.com/us/app/nafham-school-curriculum/id918512434',0,1,'','','',''),(134,0,'MyStudygear (S. Chand Action)','MyStudygear.jpg','MyStudygear.png','MyStudygear.png','MyStudyGear is an innovative initiative by the pioneers of Eduation, S.Chand Group. S.Chand group has been serving the education industry in India for over 75 years now. My Study Gear is an application which makes education and guidance available to you at your fingertips. With vivid range of educational content accesses through the QR Codes published in many books from publishers like S.Chand, Madhubun, Vikas Publishing and New Saraswati house it gives digital learning a whole new landscape. From the Book Store you can browse and purchase the hard copies and ebooks of many titles which will help you in your studies. The Digital store front and the Assessment section will help you prepare better for ever rising competition.','3','','http://www.mystudygear.com/','https://play.google.com/store/apps/details?id=com.schand.mystudygear','https://itunes.apple.com/app/id935631227',0,1,'','','',''),(135,0,'Kahoot','Kahoot!.png','Kahoot.png','Kahoot.png','Play fun learning games and cool quizzes anywhere and anytime, on your own or with your friends. Kahoot! makes learning awesome - and homework, too. Hey, masters of curiosity! We are Kahoot!, known for our game-based platform that makes learning awesome. Anyone can create games for any subject or topic - it’s simple and fun. Games of Kahoot! (or simply ‘kahoots’) are played in classrooms and other social settings all over the world.','2','','https://kahoot.com','https://play.google.com/store/apps/details?id=no.mobitroll.kahoot.android','https://itunes.apple.com/app/apple-store/id1131203560',0,1,'','','',''),(136,0,'Testbook','Testbook.png','Testbook.png','Testbook.png','Testbook App provides best and most relevant Online Testseries and exam updates for Bank PO (IBPS PO, SBI PO, IPPB PO, RRB Officer Scale I), Bank SO (IBPS SO, Bank of Baroda SO), Bank Clerk (IBPS Clerk, SBI Clerk, RRB Office Assistant), SSC(SSC CGL, SSC STENOGRAPHER, IB ACIO, SSC MTS, SSC CHSL, SSC CPO, SSC Scientific Assistant IMD, Delhi Police, Rajasthan Police, MP Patwari), Insurance (UIIC Assistant, OICL AO), RBI (RBI Assistant, RBI Grade B), CIL MT (CIL CE, CIL ME), LIC AAO, GATE 2018 (GATE CE, GATE CS, GATE EC, GATE EE, GATE ME), SSC JE (SSC JE CE, SSC JE EE, SSC JE ME), BSNL TTA, Railways RRB NTPC, Aptitude for Campus Placements, General Knowledge & Current Affairs. ','2','','https://testbook.com/gk-and-current-affairs','https://play.google.com/store/apps/details?id=com.testbook.tbapp','',0,1,'','','',''),(137,0,'Udemy Online Courses','Udemy.png','Udemy.png','Udemy.png','Join more than 18 million students who are mastering new skills, advancing their careers, and exploring new hobbies from over 60,000 courses taught by expert instructors. ','2','','https://www.udemy.com/mobile/','https://play.google.com/store/apps/details?id=com.udemy.android','https://itunes.apple.com/us/app/udemy/id562413829',0,1,'','','',''),(138,0,'Simplilearn Courses & Tutorials','Simplilearn.png','','Simplilearn.png','Simplilearn is where you will find high quality online courses and free learning resources such as articles, webinars, ebooks and more — all catered to your career needs. ','2','https://www.youtube.com/watch?v=jYXHaqBMUw8','https://www.simplilearn.com/','https://play.google.com/store/apps/details?id=com.mobile.simplilearn','https://itunes.apple.com/app/simplilearn/id963042747',0,1,'','','',''),(139,0,'Taste Of Bihar','Taste of Bihar.png','TasteofBihar.png','Taste-of-Bihar.png','Taste of Bihar is the POS mobile app with the support of MIFARE Classic RFID Card including NFC reader. This App replaces the POS machine into Mobile POS . ','1','','http://inbsystems.com/','https://play.google.com/store/apps/details?id=com.taste_of_bihar.foodcounter','',0,1,'2018-01-05 11:47:59','','2','2'),(140,0,'BatterShop','Battershop.jpg','Battershop.png','batter_shop.png','Battershop delivers fresh batters at doorstep before 8:00 a.m.Tasty chutneys and additional supplements will add value to our offerings. Our plant is equipped with state of art machinery, R.O.Water plant, ultra hygienic Kitchen.All ingredients used in preparation are of superior quality. Ordering batter is simple with Mobile Apps providing the rich user experience.We solve the hassle of standing in queues in supermarkets, as we make door deliveries. We complement your effort in breakfast preparation by providing you with Fresh Batters.','1','','','','https://itunes.apple.com/us/app/battershop/id1277555225',0,1,'','','',''),(141,0,'EatNow Online Food Ordering','Eatnow.png','eatigo.png','eatnow.png','EatNow allows you to order food delivery or takeaway from over 7,500+ restaurants Australia wide, right from your Android devices!','2','','https://www.eatnow.com.au/','https://play.google.com/store/apps/details?id=au.com.eatnow.android','https://itunes.apple.com/au/app/id571118707',0,1,'','','',''),(142,0,'iFood - Delivery de Comida','iFood.png','iFood.png','iFood.png','Browse menus to order food became a thing of the past. With iFood, you order quickly in any of the registered restaurants that meets your region. In a few clicks, you choose the type of cuisine, the restaurants and the dishes you want and can be carefree while waiting for your food to arrive wherever you are. It\'s fast, it\'s safe and it\'s free. Order food has never been so easy!','2','','https://www.ifood.com.br/','https://play.google.com/store/apps/details?id=br.com.brainweb.ifood','https://itunes.apple.com/app/id483017239',0,1,'','','',''),(143,0,'Lieferando.de: Order Food','Lieferando.de.png','lieferandode_banner.png','Lieferando.png','Quickly order delicious pizza ,  pasta , burgers, salads and sushi using our app at over 11.000 delivery services throughout Germany! With over 1 million restaurant reviews, you can be sure of no surprises. ','2','','https://www.lieferando.de/','https://play.google.com/store/apps/details?id=com.yopeso.lieferando','https://itunes.apple.com/de/app/id419724490',0,1,'','','',''),(144,0,'Talabat: Food Delivery','Talabat.png','Talabat.png','talabat.png','Ordering food online made simple. Download the free Talabat app and get access to over thousands of delivery restaurants straight from your smartphone or tablet. Order food online in Kuwait, United Arab Emirates, Kingdom of Saudi Arabia, Bahrain, Oman, Qatar and Jordan.','3','','https://www.talabat.com/uae','https://play.google.com/store/apps/details?id=com.talabat','https://itunes.apple.com/kw/app/talabat/id451001072',0,1,'','','',''),(145,0,'InnerChef: Fresh Food Online','InnerChef.png','Innercheif.png','Innercheif.png','InnerChef is one of the fastest growing food experience companies in the country. Not only are we obsessed with our customers, but we are also passionate about our food and our technology. InnerChef is bringing good food to the hands of many and creating culinary experiences worth remembering.','2','https://www.youtube.com/watch?v=ECEVdNt8_A8','https://www.innerchef.com/','https://play.google.com/store/apps/details?id=com.innerchef.Activities','https://itunes.apple.com/us/app/innerchef-food-desserts/id1052993793',0,1,'2018-01-05 11:47:13','','1','1'),(146,0,'Atbaki - اطباقي','Atbaki.png','Atbaki.png','Atbaki.png','Atbaki , is your new guide to all the easy-to-use recipes, the free App offers thousands of diverse, delicious, tested and tried recipes in Arabic that cover the most popular cuisines from all over the world, prepared by the hands of the most skilled Arab chefs, such as Chef Manal Al Alem, chef Dima Hijjawi, and many others.','2','','http://atbaki.com/','https://play.google.com/store/apps/details?id=com.medm.atbaki','https://itunes.apple.com/in/app/اطباقي/id995279558',0,1,'2018-01-04 20:25:25','','',''),(147,0,'Otlob - Food Delivery','Otlob.png','Otlob.png','Otlob.png','Over 100K people use the Otlob App in Egypt. Thank you for being part of this growing team. We bring regular updates to the App Store to give you access to the menus of the finest restaurants in your neighborhood. ','2','','https://www.otlob.com/','https://play.google.com/store/apps/details?id=otlob.UI','https://itunes.apple.com/eg/app/iotlob/id394805452',0,1,'2018-01-04 20:28:14','','',''),(148,0,'Dabur Mediclub','dabur.png','','','Dabur India presents Mediclub Mobile App, a one of a kind platform that is designed especially for All Ayurvedic Practitioners. This app allows doctors to connect with other doctors practicing Ayurvedic medicine. This app also allows the doctors to search for all Ayurvedic medicines manufactured under Dabur and also gives them ailment specific product references. Furthermore, this app gives the doctors the flexibility to interact with one another – either one-to-one or in a group. Moreover the doctors can share their recommendations with each other thus empowering the doctor fraternity to bring about an improvement in patient care','3','','http://www.dabur.com/','https://play.google.com/store/apps/details?id=com.ionicframework.daburchat982261','https://itunes.apple.com/in/app/dabur-mediclub/id1116456525',0,1,'2018-01-04 20:32:11','','',''),(149,0,'HelloFresh - Get Cooking','HelloFresh.png','HelloFresh.png','HelloFresh.png','Every week, HelloFresh delivers a box of delicious recipes and the exact amount of fresh ingredients you need to cook them at home. Cooking healthy meals has never been so easy!','2','','https://www.hellofresh.com/app/','https://play.google.com/store/apps/details?id=com.hellofresh.androidapp','https://itunes.apple.com/app/id970107419',0,1,'2018-01-04 20:34:02','','',''),(150,0,'LevelUp','levelup.png','','','Learning and earning has never been easier and more fun! Ace your schoolwork and get rewarded at the same time. \r\nLevelUp is a mobile learning solution that helps South African high school learners like you to level up your academic performance, strengthen your social skills and foster good learning behavior.','2','','http://www.mylevelup.co.za/','https://play.google.com/store/apps/details?id=org.mylevelup','',0,1,'2018-01-04 20:39:02','','',''),(151,0,'Yesway Rewards','Yesway Rewards.jpg','Yesway-Rewards.png','Yesway-Rewards.png','With Yesway Rewards, just for being a loyal customer you can get more of the stuff you love, like free coffee and fountain soda, discounts on gas and new rewards and offers all the time. The best part is with this app you can do it all from your phone.','1','','https://yesway.com/rewards/','https://play.google.com/store/apps/details?id=com.paytronix.client.android.app.yesway','https://itunes.apple.com/us/app/yesway-rewards/id1209012599',0,1,'2018-01-04 20:41:18','','',''),(152,0,'Eatigo – Restaurant Reservations','eatigo.png','eatigo.png','eatgo.png','Eatigo is a restaurant reservation app which offers time-based discounts of up to 50% off, every day at all of its 2000+ restaurants. There are no pre-payments or hidden cost, eatigo is 100% free. It’s simple to use: search, reserve, enjoy! ','2','','https://in.eatigo.com/home/in/en/mumbai/','https://play.google.com/store/apps/details?id=com.eatigo','https://itunes.apple.com/us/app/eatigo-xiththi-ko/id879030389',0,1,'2018-01-04 20:44:48','','',''),(153,0,'My Cocktail Bar','My Cocktail Bar.png','My-Cocktail-Bar.png','My-Cocktail.png','You have alcohol, some beverages and fruits and wonder what cocktails you can make? My Bar is for you. Just choose what ingredients you have and My Bar will show you a list of all cocktails you can enjoy and offer to your friends. ','2','','http://www.mybarapp.com/','https://play.google.com/store/apps/details?id=com.mybarapp.free','',0,1,'2018-01-05 20:14:37','','1','1'),(154,0,'Argo Tea','Argo Tea.png','Argo-Tea.png','argo_tea.png','The Argo Tea app allows you to earn and redeem LoyalTea® rewards, place orders, and scan to pay at participating Argo Tea cafes.','1','','https://www.argotea.com/','https://play.google.com/store/apps/details?id=com.argotea.argotea.android.app','https://itunes.apple.com/us/app/argo-tea-loyaltea-app/id918225439',0,1,'2018-01-05 20:20:18','','1','1'),(155,0,'AaramShop: Online Grocery','aaramshops.png','','','Now shop for your daily groceries from your mobile. AaramShop brings an unique service for the consumers to shop for the daily grocery on the go. Just download this free application, browse hundreds of products from top grocery brands from India, select a nearest local retailer and confirm the order. You get free home delivery of your products at the time intimated by you and pay cash on delivery. Shoppers can even check the real time product lists of any store and avail the exciting offers & discounts available on hundreds of grocery & personal care items.','1','','https://www.aaramshop.com','https://play.google.com/store/apps/details?id=com.aaramshop.mobile','https://itunes.apple.com/in/app/aaramshop/id964132113',0,1,'2018-01-05 20:45:59','','1','1'),(156,0,'Barbeque Nation','Barbeque Nation.jpg','Barbeque-Nation.png','Barbeque-Nation.png','Barbeque Nation’s ‘live-grill’ concept and unmatched ambiance have made it a household name among barbeque enthusiasts across India. After all, where else can you and your friends experience the warmth of a barbeque party right at your table? But that’s not all. Grilling your own starters is followed by a delicious buffet of American, Mediterranean, Oriental and Indian cuisine. As well as a selection of fine alcohol to get you in the right spirits.','2','','http://www.barbequenation.com/','https://play.google.com/store/apps/details?id=com.jamhub.barbeque','https://itunes.apple.com/in/app/barbeque-nation/id1080269411',0,1,'2018-01-05 20:48:13','','1','1');
/*!40000 ALTER TABLE `app_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `app_ravi_user`
--

DROP TABLE IF EXISTS `app_ravi_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `app_ravi_user` (
  `client_name` varchar(255) NOT NULL,
  `app_name` varchar(255) NOT NULL,
  PRIMARY KEY (`client_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `app_ravi_user`
--

LOCK TABLES `app_ravi_user` WRITE;
/*!40000 ALTER TABLE `app_ravi_user` DISABLE KEYS */;
INSERT INTO `app_ravi_user` VALUES ('a','a'),('aavfv','vfxsfd'),('asd','asda'),('asvfv','vfsfdd'),('cwef','cfdswe'),('dswewfsdf','ewesdrt3e'),('earedder','ererswere'),('ereder','erersere'),('ereer','ererere'),('etwew','ewetre'),('ewsdasdxv','cvdf'),('ewsdddasdxv','cvdf'),('ewxv','cvdf'),('fassaa','sfsdfsfd'),('fddfgdf','dfgsdfsdf'),('fdgdf','dfgdf'),('fghfddfdfgdf','dfbvbgsdfsghdf'),('n','n'),('nfe','ewn'),('ns','ns'),('rdsew','fecsw'),('rew','few'),('rsdew','fcfew'),('sdas','asda'),('vdxcfv','vfsdsfd'),('vfv','vffd'),('vfv43qa','4rtevffd'),('vfvef','vfwewfd'),('vfvewrw','vfferfwd'),('vfvs','vffsd'),('vfvsa','vffsd'),('vfvsddsdf','vffefrwd'),('vfvwewe','vfffrwfd'),('vwerwdsdfwefv','vffdewr'),('vwewfv','vffdfws'),('wedsdw','ewsde'),('weeew','eweree'),('weerw','ewefgr'),('wef','cfds'),('wew','ewe'),('wewerfweasbw','ewerefds'),('wewerww','ewerwe'),('weweww','eweere'),('wewwerwr','ewerwrfwe'),('wfdsdsef','cfdsfew'),('xdsv','cvdf'),('xffdasdav','cvdf'),('xffv','cvdf'),('xsdv','cvdf'),('xsv','cvdf'),('xv','cvdf');
/*!40000 ALTER TABLE `app_ravi_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `app_reviews`
--

DROP TABLE IF EXISTS `app_reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `app_reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `app_id` int(11) NOT NULL,
  `app_name` varchar(255) NOT NULL,
  `app_logo` varchar(255) NOT NULL,
  `app_image` varchar(255) NOT NULL,
  `app_description` varchar(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_company_name` varchar(255) NOT NULL,
  `linkedin_link` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `type_of_review` enum('1','2') NOT NULL COMMENT '1-text, 2-video',
  `review_description` varchar(255) NOT NULL,
  `date_of_interview` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `validated_by` int(11) NOT NULL COMMENT '0-not,1-Clutch, 2-Goodfirms, 3-Appfutra',
  `rating` int(11) NOT NULL,
  `overall_rating` int(11) NOT NULL,
  `quality` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `willing_to_offer` int(11) NOT NULL,
  `schedule` int(11) NOT NULL,
  `video_link` varchar(255) NOT NULL,
  `video_thumbnail_link` varchar(255) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `android_link` varchar(250) NOT NULL,
  `ios_link` varchar(250) NOT NULL,
  `website_link` varchar(250) NOT NULL,
  `client_profile` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `app_id` (`app_id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `app_reviews`
--

LOCK TABLES `app_reviews` WRITE;
/*!40000 ALTER TABLE `app_reviews` DISABLE KEYS */;
INSERT INTO `app_reviews` VALUES (12,0,'Amar Ujala','amarujala.jpg','','Amar Ujala - a most popular Hindi news group in India especially in north region since last 70 years is now available as app. This app offers live TV, top news alerts in Hindi, latest Hindi news, trending news, videos, breaking news in Hindi, entertainmen','Himanshu Gautam ','Amar Ujala Group','',' Business Head  ','1','  So far I am very much impressed the kind of work they did on my project. Prompt response to all my mail, what every change suggested to them they did it on time, from my side 5 stars to AppSquadz. ','0000-00-00 00:00:00',1,5,5,5,5,5,5,'   ','   ','2017-11-25 11:17:26','','','',''),(13,0,'Havells mKonnect','havells.jpg','','HAVELLS CONNECT IS CURRENTLY HAVING A DEALER’S WEB PORTAL WHERE THE DEALERS CAN SEE THEIR VARIOUS REPORTS AND PLACE ORDERS. NOW HAVELLS IS ENABLE THE SIMILAR FUNCTIONS OF THE PORTAL ON VARIOUS MOBILE DEVICES. ITS THE ENTERPRISE MOBILITY APP FOR HAVELLS DE','Pradeep','Havells India Pvt. Ltd.','',' ','1',' We\'ve had an amazing experience with AppSquadz. They helped us build our site from scratch and have been able to add unique / custom features along the way. No complaints!','2016-07-07 18:30:00',1,5,5,5,5,5,5,' ',' ','2017-11-25 11:20:17','','','',''),(14,0,'Jet Airways','jetairways.png','','Now travel smart and stay connected with the all new Jet Airways mobile app. With this safe and secure tool you can seamlessly plan your trip, search for the lowest fares, check-in, view your flight status, discover special offers, manage your booking and','Dipesh Karania','Jet Airways (India) Ltd. ','',' Manager','1',' They are stick to their vision i.e. consistently delivering quality solutions. I will thoroughly recommend AppSquadz Technologies for mobile app development services.','2015-03-02 18:30:00',1,5,5,5,5,5,5,' ',' ','2017-11-25 11:47:54','','','',''),(15,0,'Hangman','hangman.jpg','','The Pre Android and IOS era people grew up playing Hangman! We bring to you the digital avatar of everybody’s favorite clue based pen and paper word guessing game! Now you can enjoy Hangman free of cost, with attractive graphics, interactive user interfac','Shiv Kumar','Spice Labs Pvt. Ltd.','',' Product Manager','1',' Great company to work with. They deliver a great product.','2015-08-08 18:30:00',3,5,5,5,5,5,5,' ',' ','2017-11-25 11:50:37','','','',''),(16,0,'Taxi For Sure','tfs.png','','India’s quickest and most convenient way to book and track a taxi cab is here. No more haggling with auto- rickshaws or waiting in a call centre queue! Use the TaxiForSure app to book airport and train transfers, hourly packages, and city travel - be it s','Ravi Yadav','Taxi For Sure','','   India Head - Supply','1',' Been a pleasure working with Chandrakant and the team, prompt response and always delivers quality product, looking forward to working with them in the near future  ','0000-00-00 00:00:00',2,5,5,5,5,5,5,'   ','   ','2017-11-25 11:54:34','','','',''),(17,0,'Apollo Sampark','apollo.png','','This app is for Apollo Business Partner Connect program.\r\nUsing this app the Authorized Business Partners can Place Orders, View Account Information, Register Warranty and Claim and Much More!!!\r\nThis digital medium will enhance the ease of business and h','Sudhakar Pndey','Apollo Tyres Ltd','',' Project Manager','1',' I worked with Appsquadz for almost a year if not longer. They were very communicable, easy to work with and provided a high-quality product that is still working even though we haven\'t updated it in a while (not because they haven\'t, but because I haven\'','2016-02-07 18:30:00',2,5,5,5,5,5,5,' ',' ','2017-11-27 14:53:56','','','',''),(18,0,'Egyanshala','facebook copy.png','','Egyanshala is an Online Examination system. It was designed with a mission to strive for excellence, with an expertise in driving assessments in the educational domain. We prioritize quality customer experience with a goal to conduct test online assuring ','Vishal Singh','Egyanshala Pvt. Ltd.','',' CEO','1',' AppSquadz provided consistent communication and progress updates, all while developing a platform that users are happy with. There has only been 1 bug issue, and overall, the product has increased business. They also exhibited a true talent for integrati','2017-03-03 18:30:00',1,5,5,5,5,5,5,' ',' ','2017-11-27 14:56:49','','','',''),(19,0,'Quakart','quakart.png','','Quakart is an online Hassle free, Time bound water delivery service. You no longer have to worry about making calls and delivery time of your water bottle. \r\nHow it works:\r\n1. Register yourself\r\n2. Choose among variety of water bottle Brands\r\n3. Order thr','Savita Singh','Quakart Pvt. Ltd.','',' Owner','1',' The app is live and in use. It is simplifying lives for the founder and the community. Appsquadz gave a great impression on all levels of their service. Their excellent discovery processes, flexible payments, and effective communications all validated th','2017-12-06 18:30:00',1,5,5,5,5,5,5,' ',' ','2017-11-27 14:59:40','','','',''),(20,0,'GST Buddy','gst.png','','Find GST Rates & HSN Codes for your goods & services and learn about Goods and Services Tax & GST Software easily with Videos, Articles, News & Online Training. Search any sections inside GST Rules & GST Act. Also be updated about  GST Buddy Software late','Karthik Kumar','GST Buddy','',' Founder','1',' AppSquadz delivered a user-friendly product. Although the overall collaboration was good, feedback response times were poor. The team was skilled and provided access to their Basecamp management system, but they can improve their communication in general','2017-02-24 18:30:00',1,5,5,5,5,5,5,' ',' ','2017-11-27 15:06:20','','','',''),(21,0,'Paytmx','','','Using JavaScript, AppSquadz built a web-based app that worked as an internal, direct payment platform for an app developer.','Sonia Sharma','Paytmx Pvt. Ltd.','',' Project Head','1',' The app performed consistently well and greatly streamlined the payment process. Although communication was sometimes deficient, AppSquadz offered technical skill and direct access to developers.','0000-00-00 00:00:00',0,5,5,5,5,5,5,' ',' ','2017-11-27 15:09:11','','','',''),(22,0,'Home Tutor','itztutor.png','','ItzTutor is seeking Male and Female Tutor profiles for Delhi Gurgaon Noida Faridabad Ghaziabad\r\nOur platform is available in Delhi and NCR region. Build you K-12 academic tutoring career with itzTutor and promote yourself to a tutoring entrepreneur. Get t','Mindmates Technologies','Pankaj Panjwani','',' Founder ','1',' The platform already has almost 30,000 mobile users. AppSquadz communicated effectively, produced timely results, and demonstrated a good understanding of the technology. The team provided value-added UI designs and delivered a livestreaming feature desp','0000-00-00 00:00:00',1,5,5,5,5,5,5,'  ','  ','2017-11-27 15:13:36','','','',''),(24,0,'Leo Spa','download.jpg','','Controler App for Embedded Spa Room System','Durgesh Saxena','Bluechips Microhouse Co. Ltd.','',' Senior Engineer, Silcon Manufacturer','1',' ','0000-00-00 00:00:00',0,0,0,0,0,0,0,' ',' ','2017-11-27 15:27:30','','','',''),(25,0,'Selfieria','selfiria.jpg','','The best app to store your beautiful moments with your closed ones. Rejuvenate your old memories into live happenings and share it with your friends and family. See the world through somebody else’s eyes by following not only the people you know, but ever','Kavita Sharma','Selfieria','',' Founder   ','1',' The project was executed without any issues, and the application received positive reviews and feedback. Appsquadz assigned an excellent project manager and delivered everything on time while remaining cost competitive.    ','0000-00-00 00:00:00',1,5,5,5,5,5,5,'    ','    ','2017-11-30 14:17:06','','','',''),(26,0,'News Buzz','newsbuzz.jpg','','Aggregated Headlines for a stream of news, books, magazines & videos.\r\nLetting you stay on top of all areas of news- economic, Bollywood, Hollywood, sports, current event, global news.\r\nUsing this app you have access to the latest local, national and inte','Abhinav Mathur','News Buzz Pvt Ltd','','Founder','1',' AppSquadz Technologies successfully delivered and launched the mobile app on the Google Play Store. The design aspect could improve but, overall, the team exhibited superior personal commitment and attention throughout the project.','2016-04-03 18:30:00',1,5,5,5,5,5,5,' ',' ','2017-11-30 14:21:34','','','',''),(27,0,'Photo Editor','photo_editor.png','','AppSquadz Technologies developed a mobile photo-editing app for Android and iOS. The app included a full range of features which caters to the user’s preferences. They also provided marketing support for free.','Shubham Saxena','Photo Editor','',' Founder ','1',' AppSquadz Technologies delivered the mobile application within the timeframe and exceeded the expected quality requirements. An improvement in the work strategy was needed however, the team demonstrated transparent transactions and guarantee of quality a','0000-00-00 00:00:00',1,5,5,5,5,5,5,'  ','  ','2017-11-30 14:25:37','','','',''),(28,0,'InSwipes','inswipes.png','','The application draws from the teachings of Guruji SriSri RaviShankar & Art of Living Foundation on Lock Screen providing a path to a Stress Free life on the grounds of high morals, yoga, breathing and meditation. Most of the content is guided by Sri Sri’','Jitendra Kumar','InSwipes','',' Founder','1',' Appsquadz delivered the mobile app in high quality and completed on time and within budget. The app is now live in the App Store and is fully functional. The team demonstrated their dedication and stood to their reputation for being a low-cost and agile ','2016-06-27 18:30:00',1,5,5,5,5,5,5,' ',' ','2017-12-04 13:25:37','','','',''),(29,0,'Allrecipes Dinner Spinner','allrecipes.png','','Introducing the most amazing Allrecipes Dinner Spinner app yet! Designed to delight, Allrecipes’ Dinner Spinner has been reinvented as the most popular food-focused social app with a community of more than 30 million home cooks who play a part in helping ','Soma Ghosh','Allrecipes.com Inc','',' Product Manager ','1',' AppSquadz Technologies delivered a successful mobile app and exceeded the expectations. The quality of the app\'s UI was impressive, simple and user-friendly for all ages. The team was composed of well-versed app developers and displayed determination and','0000-00-00 00:00:00',1,5,5,5,5,5,5,'  ','  ','2017-12-04 13:29:17','','','',''),(30,0,'Tm- Travel','tm-travel.jpg','','As a TM Travel employee, you can use this app to access up-to-the-minute company news and announcements, check and make \r\nuse of your company benefits, learn about salary sacrifice, rewards and recognition, health information, employee handbook and more.\r','Joel Kidd','Find My Bus Ltd','',' Founder','1',' AppSquadz Technologies successfully delivered the Android app which resulted in 250 downloads within a month and received positive reviews through Google Play. Despite the minor lapses in the deadline, the team displayed excellent project management and ','2015-06-03 18:30:00',1,5,5,5,5,5,5,' ',' ','2017-12-04 13:32:20','','','',''),(31,0,'Beanlost','beanlost.jpg','','Create an event can now be done very easily with BeanLost. Invite your friends for this event. With the BeanLost app you can chat with your friends about the event. In different categories you can now create very simply your own event. Click on an event a','Richard Hurkmans','Deltacost','',' Founder','1',' The mobile app has struggled commercially but, FourthScreen Labs has responded quickly and precisely to any updates or modifications requested, which earned positive results. The team\'s extensive knowledge was instrumental to the success of the project. ','2015-05-05 18:30:00',1,5,5,5,5,5,5,' ',' ','2017-12-04 13:35:40','','','',''),(32,0,'Daily Expense Manager','dailyexpensemanager.png','','DEM or DAILY EXPENSE MANAGER is one of the best finance app in the smart phone market. Money, it is one of the most essential commodity of the modern world, without it even food the prime need is inaccessible to humans. Mostly people losses tracks of thei','Prashant','Appbulous Software Pvt. Ltd.','',' Product Manager','1',' The app was delivered on time without any deviation from the stated budget. The app has received a satisfactory level of downloads and it has been well rated by users.','2015-02-01 18:30:00',1,5,5,5,5,5,5,' ',' ','2017-12-04 13:37:43','','','',''),(33,0,'App Lot','applock.png','','App locker is smart app locker or app protector which will help you to lock and protect your precious data from unauthorized person.\r\nLock facebook, whatsapp, Gmail, Gallery, Instagram with pin or pattern and avoid apps from being exposed by snooper using','Pradeep Kumar','Dotwik Solution','','Founder','1',' They are good, and not every expensive. They provide continuous support and always available.','2017-10-04 18:30:00',2,5,5,5,5,5,5,' ',' ','2017-12-04 13:48:06','','','',''),(34,0,'Bollywood Fab','favicon.png','','BollywoodFab offers a variety of Bollywood fashion dresses online. Our dresses are available in various styles, designs, and colors. They look exactly like the ones that have been worn by famous divas of Bollywood. Our website gives you a chance to explor','Manesh Gangadharan','Bollywood Fab','',' Founder ','1',' This was our first ever eCommerce project, and after considerable research & discussion, we settled on AppSquadz Technologies. The service was professional and efficient at all times. Even at some stages when WE were a little confused or uncertain about ','0000-00-00 00:00:00',2,5,5,5,5,5,5,'  ','  ','2017-12-04 13:51:02','','','',''),(35,0,'Profacio','profacio.jpg','','Save articles from your web browser or other apps.\r\nHighlight those saved articles quickly.\r\n- double-tap first word, double-tap last word.\r\nShare them to social media, email or Discoverables (to other Profacio users) for credits.\r\nDiscover other\'s highli','Anthony','Profacio','',' Founder ','1',' The client is a mobile application that allows users to save articles from the web or other apps in different folders and categories. They can also highlight and share articles among many other features. AppSquadz Technologies was involved in developing ','0000-00-00 00:00:00',2,5,5,5,5,5,5,'  ','  ','2017-12-04 13:53:25','','','',''),(36,127,'Chalklit','chalklit.png','','Classrooms world-over light up as the teacher moves the chalk on the blackboard. ChalkLit provides resources to teachers to help them create greater impact in their classrooms, also allows them to connect with students and parents even beyond the classroo','Mona Mathur','Million Spark Foundation',' ',' Founder','1',' The client is an educational platform that connects students, teachers and parents allowing them to communicate and to discover, access and share resources needed by the students. AppSquadz Technologies was involved in developing an Android application f','2016-05-13 18:30:00',2,5,5,5,5,5,5,' ',' ','2018-01-12 11:06:04','','','',''),(37,0,'Beach Princess Doll Makeover','doll_makeover.jpg','','Doll Makeover is a free and offline makeup game for everyone. A pretty girl should know makeup tricks as much as she knows about the fashion trends. Luckily you can play the free makeup game offline here and learn the most useful makeup tips. Never forget','Priyanka','First Swip','',' Founder','1',' The client is mobile application development firm that mainly focuses on gaming apps for Android platform. AppSquadz Technologies was involved in the development and designing of an Android app that is basically a word game to improve the pronunciation a','2016-05-29 18:30:00',2,5,5,5,5,5,5,' ',' ','2017-12-04 13:58:31','','','',''),(38,0,'PrintKartIndia','printkartindia.jpg','',' PrintKart is a free and online app which is used to design visiting cards, mugs, certificates and photo prints for your personal use, for your friends and family. Now share your visiting cards with your friends, relatives, clients and business men etc. Y','Amitabh Bhattacharya','PrintKartIndia','https://google.com',' Founder ','1',' The client is an organization that has been into pictorial customization of products, certificates and gifts like mugs, t-shirts etc. AppSquadz Technologies was involved in developing an application that facilitates the user to come across the variety of','2016-05-19 18:30:00',2,5,5,5,5,5,5,'  ','  ','2017-12-20 05:19:33',' https://google.com',' https://google.com',' https://google.com',''),(39,0,'BizCard Share App','logo.png','','Perfect example would be Camcard free on Google Play store....It would be a platform where users can exchange business cards...further features , changes and add ons to be discussed after freezing on a developer','Sambuddha','BizCard','',' Founder  ','1',' I\'m satisfied with AppSquadz Technologies. They\'ve done great development for the mobile app project I mentioned before. They are professional, and it\'s nice working with them – an overall smooth cooperation.During a project, there are many changes that ','0000-00-00 00:00:00',2,5,5,5,5,5,5,'   ','   ','2017-12-04 14:35:35','','','',''),(40,0,'BuzzNigeria.com','buzznigeria.png','','AppSquadz developed a News app for BuzzNigeria.com. The app brings to the smartphone the news shared on the website. The app has different categories for each section of the website.','Chuka Emeka','Alexander Moore Partners Ltd ','',' Founder  ','1',' Highly recommended, excellent communication, great to work with, outstanding experience  ','2016-05-10 18:30:00',2,5,5,5,5,5,5,'   ','   ','2017-12-20 05:18:48','  ','  ','  ',''),(41,0,'Nishthashoppe','nishthashoppe.jpg','','At Nishtha Shoppe, We provide you with a number of products that meets all your worship requirements i.e., from puja thali to poshaks. To ensure to get your puja done with divinal efficiency, we provide you with purohits who have in-depth knowledge of all','Sulekha','Nishthashoppe','',' Founder','1',' I highly recommend AppSquadz and his team! They\'ve done a great job! Easy to communicate, they were very officiant and helpful with suggestions. Thanks :)','2016-05-03 18:30:00',2,5,5,5,5,5,5,' ',' ','2017-12-04 14:30:23','','','',''),(42,0,'Tally On Mobile','tallyonmobile.png','','Tally On Mobile app will provide you the seamless connectivity with your tally. You can view your data & insert your data anytime, anywhere from Tally On Mobile app. Makes it very easy to manage day to day accounting transaction on mobile or tab. ','Shashank','Tally On Mobile','',' Founder','1',' Its being a great experience working with team AppSquadz. The team is exceptionally talented the way they have executed this project and delivered on time.','2017-04-30 18:30:00',0,5,5,5,5,5,5,' ',' ','2017-12-04 14:37:39','','','','');
/*!40000 ALTER TABLE `app_reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `app_survey_answers`
--

DROP TABLE IF EXISTS `app_survey_answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `app_survey_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `testimonial_id` int(11) NOT NULL,
  `ques_id` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `create_date` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `app_survey_answers`
--

LOCK TABLES `app_survey_answers` WRITE;
/*!40000 ALTER TABLE `app_survey_answers` DISABLE KEYS */;
INSERT INTO `app_survey_answers` VALUES (1,18,13,'18 only q1','15132'),(2,18,11,'hh','15132'),(3,19,13,'19 only q1','15132'),(4,19,11,'19 only q2','15132');
/*!40000 ALTER TABLE `app_survey_answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `app_survey_heading`
--

DROP TABLE IF EXISTS `app_survey_heading`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `app_survey_heading` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_validater_id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `app_survey_heading`
--

LOCK TABLES `app_survey_heading` WRITE;
/*!40000 ALTER TABLE `app_survey_heading` DISABLE KEYS */;
INSERT INTO `app_survey_heading` VALUES (1,1,'Background','2017-11-09 11:34:12','0000-00-00 00:00:00'),(2,1,'Opportunity/Challenge','2017-11-09 11:34:12','0000-00-00 00:00:00'),(3,1,'Solution','2017-11-09 11:34:37','0000-00-00 00:00:00'),(4,1,'Results & Feedback','2017-11-09 11:34:37','0000-00-00 00:00:00'),(5,2,'Background','2017-11-09 14:21:25','0000-00-00 00:00:00'),(6,2,'Opportunity/Challenge','2017-11-09 14:21:25','0000-00-00 00:00:00'),(7,2,'Solution','2017-11-09 14:21:25','0000-00-00 00:00:00'),(8,2,'Results & Feedback','2017-11-09 14:21:25','0000-00-00 00:00:00'),(9,2,'Background','2017-11-09 14:21:25','0000-00-00 00:00:00'),(13,8,'heading real','2017-12-04 14:26:53','0000-00-00 00:00:00'),(14,9,'testing','2017-12-12 06:10:05','0000-00-00 00:00:00'),(22,2,'Project Summary','2017-12-12 16:36:53','0000-00-00 00:00:00'),(23,3,'background','2017-12-13 06:33:26','0000-00-00 00:00:00'),(24,4,'Design','2017-12-13 06:51:00','0000-00-00 00:00:00'),(25,2,'background','2017-12-14 07:59:44','0000-00-00 00:00:00'),(28,3,'Design','2017-12-14 09:45:39','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `app_survey_heading` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `app_survey_question`
--

DROP TABLE IF EXISTS `app_survey_question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `app_survey_question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_validater_id` int(11) NOT NULL,
  `fk_survey_heading_id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `app_survey_question`
--

LOCK TABLES `app_survey_question` WRITE;
/*!40000 ALTER TABLE `app_survey_question` DISABLE KEYS */;
INSERT INTO `app_survey_question` VALUES (10,3,10,'Introduce your bu','Introduce your buIntroduce your bu','2017-11-10 07:02:43','0000-00-00 00:00:00'),(11,2,5,'q2','','2017-12-14 08:18:56','0000-00-00 00:00:00'),(12,3,28,'qd2','','2017-12-14 09:46:41','0000-00-00 00:00:00'),(13,2,22,'q1:','','2017-12-14 09:56:59','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `app_survey_question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `app_team`
--

DROP TABLE IF EXISTS `app_team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `app_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `create_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `app_team`
--

LOCK TABLES `app_team` WRITE;
/*!40000 ALTER TABLE `app_team` DISABLE KEYS */;
INSERT INTO `app_team` VALUES (7,'PHP Developer','2017-12-13'),(8,'UI/UX and HTML Designer','2017-12-13'),(9,'Sales','2017-12-13'),(10,'iOS Developer','2017-12-13'),(11,'Android Developer','2017-12-13');
/*!40000 ALTER TABLE `app_team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `app_team_employees`
--

DROP TABLE IF EXISTS `app_team_employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `app_team_employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_id` int(11) NOT NULL,
  `preference` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `create_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `app_team_employees`
--

LOCK TABLES `app_team_employees` WRITE;
/*!40000 ALTER TABLE `app_team_employees` DISABLE KEYS */;
INSERT INTO `app_team_employees` VALUES (16,7,0,'Nitesh Chahar','PHP Developer','Nitesh provides management oversight on technical direction, production development and service offerings. He has fourteen years of IT experience in developing and executing business strategy, ensuring business growth and finding the right solution for every client.','Penny.png','2017-12-13'),(17,8,0,'Ranjeet Singh','Designer','   What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the','cashco.png','2017-12-13');
/*!40000 ALTER TABLE `app_team_employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `app_users`
--

DROP TABLE IF EXISTS `app_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `app_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `app_users`
--

LOCK TABLES `app_users` WRITE;
/*!40000 ALTER TABLE `app_users` DISABLE KEYS */;
INSERT INTO `app_users` VALUES (1,1,'parent','u1','p1','this is a demo user for parent','0000-00-00 00:00:00'),(2,1,'teacher','t1','utyfd','this is a demo user for teacher','0000-00-00 00:00:00'),(3,1,'admin','t1ewfe','utyfderger','this is a demo user for admin','0000-00-00 00:00:00'),(4,2,'driver','ddddddddd','pppppppp','this is a demo user for driver','0000-00-00 00:00:00'),(5,29,'Customer','customer@gmail.com','customer','Demo credentials for a Customer User.','0000-00-00 00:00:00'),(6,29,'Provider','provider1@gmail.com','provider','Demo credentials for a Provider User.','0000-00-00 00:00:00'),(7,29,'Provider','provider2@gmail.com','provider','Demo credentials for a Provider User.','0000-00-00 00:00:00'),(8,20,'User ','9716920509','12345678','same user can offer a lift or Request a lift.','0000-00-00 00:00:00'),(9,36,'Customer ','9716920509','12345678','This is a user who is supposed to visit the counter to purchase some food.','0000-00-00 00:00:00'),(10,36,'Recharge counter','9639036946','12345678','This is the user who will be available at the recharge counter to get cash by user and do a recharge by providing a RFid card.','0000-00-00 00:00:00'),(11,36,'Food counter','9058862572','12345678','This is the user who will be available at the food counter to complete the user order.','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `app_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `app_validaters`
--

DROP TABLE IF EXISTS `app_validaters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `app_validaters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `validater` varchar(255) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `app_validaters`
--

LOCK TABLES `app_validaters` WRITE;
/*!40000 ALTER TABLE `app_validaters` DISABLE KEYS */;
INSERT INTO `app_validaters` VALUES (1,'Goodfirms','2017-12-12 07:14:56','0000-00-00 00:00:00','goodfirm.png'),(2,'Clutch','2017-12-05 13:10:40','0000-00-00 00:00:00','clutch.png'),(3,'Appfutura','2017-12-20 05:18:02','0000-00-00 00:00:00','appfutra.png');
/*!40000 ALTER TABLE `app_validaters` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-12 17:10:28
