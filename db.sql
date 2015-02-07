-- MySQL dump 10.13  Distrib 5.5.41, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: cars
-- ------------------------------------------------------
-- Server version	5.5.41-0ubuntu0.12.04.1

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
-- Table structure for table `car`
--

DROP TABLE IF EXISTS `car`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `car` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car`
--

LOCK TABLES `car` WRITE;
/*!40000 ALTER TABLE `car` DISABLE KEYS */;
INSERT INTO `car` VALUES (2,'Skoda'),(3,'Audi'),(4,'BMW'),(5,'Fiat'),(6,'Subaru');
/*!40000 ALTER TABLE `car` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `car_images`
--

DROP TABLE IF EXISTS `car_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `car_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model_data_id` int(11) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=152 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car_images`
--

LOCK TABLES `car_images` WRITE;
/*!40000 ALTER TABLE `car_images` DISABLE KEYS */;
INSERT INTO `car_images` VALUES (67,52,'3107c122bff819623a89ee13d9fab9e3.jpg'),(68,52,'3b2406aaa3b17fed77891390b653f7bd.jpg'),(69,52,'9460b799f30687881b68bded37bb7ee4.jpg'),(70,52,'de32b4b38f3e62da2c51f4f412242e20.jpg'),(71,53,'8cc2aedfb73de7d1e2dcb3357d6e634e.jpg'),(72,53,'b1b6f9ebe5b357d3edcc6dd697621498.jpg'),(73,53,'383a3fce0712e36216d61c683110098b.jpg'),(74,53,'ba425986c335c07121631d84207addfa.jpg'),(75,54,'a9dbd7aec6f0e94e49be98019fc636af.jpg'),(76,54,'319a72cfd003d4fcc93f2c95941cb6f6.jpg'),(77,54,'0663a471d82058022b5cc7b15b8b8896.jpg'),(78,54,'72c6427d957b882da5d057727486a9d2.jpg'),(79,55,'6f8fab9c31dea02c0cc6c704ebdfa90a.jpg'),(80,55,'535aecf24e4732a6dac38ec84005d7ac.jpg'),(81,55,'5b2ce51458285cda2c48cd44c3da5720.jpg'),(82,55,'e7cd786c3b773a87fffe904b8b7b911b.jpg'),(83,56,'ba851eccdd541e9feae44cceb1bdf93a.jpg'),(84,56,'e9e1469de3aa5c82e05c43076956ee31.jpg'),(85,56,'caf4687fcaadd5f4569c8715768a4a06.jpg'),(86,56,'3d51d190abe8a04513c2411837ee93a9.jpg'),(87,57,'3c8eb20a91274e6e7bbfd299cd195b89.jpg'),(88,57,'91b4f68518ab6de44600f2fe4191cd5f.jpg'),(89,57,'39cac8b25af2a7938baf974cf7a402db.jpg'),(90,57,'7c1651759886d1ebdd7931475d6a706f.jpg'),(91,58,'c628b61efbc1981ece415bf2eed487a3.jpg'),(92,58,'1f5a95e69f0610f53af0258b755587ea.jpg'),(93,58,'7dcbe444ab5ca495358b4cf4ebb382bc.jpg'),(94,58,'ddf61805bde414ff527473ac79de05a0.jpg'),(95,59,'afa170eb54016dcdcc50d5039f527cb1.jpg'),(96,59,'7e21cf100c33cd96aa790f855f4eb6ee.jpg'),(97,59,'d026ecfea93982f67071bb4ad11f22ed.jpg'),(98,59,'5d04740db57dfdb206f3e2a654bb702f.jpg'),(99,61,'c60259fd375cf9eb20683a4950394481.jpg'),(100,61,'90966f4e8bf98a3a7a8d615be074dd3e.jpg'),(101,61,'2970cd93fb3cbe390e4e553b1daf3e69.jpg'),(102,61,'224a62b0dd5b30e89c1fa7b2aecabd27.jpg'),(103,62,'a7a3fa1216029258e9fe7dc46cdcf176.jpg'),(104,62,'74c023a4d7d95f9e6d62b367ff1fdeee.jpg'),(105,62,'b58633cb9434a4caca6ddc9a64f203ec.jpg'),(106,62,'7631a24ffa0ac7b2a20981712ad49f64.jpg'),(107,63,'a21bbbb6aed69a61f54e51544bbd0116.jpg'),(108,63,'b3bb183e1a11d78ce7fa4ad986429e68.jpg'),(109,63,'e586fe98d5f249b3ca7e025afe7147a6.jpg'),(110,63,'ec0d3f276703daed178a94c86fb63b72.jpg'),(111,64,'37a5c6b374355b6e99149efc77df5ab4.jpg'),(112,64,'816702e1911dfd674c73e1e0e98de29a.jpg'),(113,64,'6e16f93a2632179210fffd69edfa7867.jpg'),(114,64,'4468b0099799ecc8b7d3fa464d95e0f5.jpg'),(115,65,'fcf18ddb0ba5295bd5621881de59b76c.jpg'),(116,65,'8bd0992c2ae501fc48e883aecc674b3d.jpg'),(117,65,'b2c7c93017175d02811b17b8505e3090.jpg'),(118,65,'798f6a53a85dc079748bcfb67db8f5fa.jpg'),(119,66,'9e7eba4f010424005d206b5813c890d9.jpg'),(120,66,'78d3460e7d65f91131c35b6cce79a3be.jpg'),(121,66,'babef4e139fec5d4758aea08e1f31225.jpg'),(122,66,'acd2c08cbbbc486e29c51d891364ca7e.jpg'),(123,67,'833a4d3e1d6ed9c8a67fb266e97ecb62.jpg'),(124,67,'9b2d020b1b5f99a5279403382248304d.jpg'),(125,67,'3b4d75c3bb23057c934dd27879f7c04a.jpg'),(126,67,'5af4634c42c4ef8f6a58790b8e0e3dc3.jpg'),(127,68,'ecf3702fb4e0de90f655f2b62c2ab8fd.jpg'),(128,68,'d9d0f52c767a1f6c93aaf83c4d0200a2.jpg'),(129,68,'03dd292684c7b8619a2750389da4fdfe.jpg'),(130,68,'e79a5c75375665689a83bcf16a066351.jpg'),(131,69,'900379fd2a22a24c3defb6936928463d.jpg'),(132,69,'2ded9db6014422e5813ad0ed5f426d53.jpg'),(133,69,'62acdb73fd16e3b2ede823f6ad4c8ef7.jpg'),(134,69,'5daa2e29f391c6a0bc0a0499a21fa2ae.jpg'),(135,70,'f9528a023063f824c8b188ea52cfbe46.jpg'),(136,70,'1b4433baa25967476b01b7b3fbc55a7b.jpg'),(137,70,'7e53892098d8ff3b4ad372ec19b6705d.jpg'),(138,70,'782d1de46a1f351b3d3168fd73104ee1.jpg'),(139,71,'49cf1deb7cce8176dfad96fde74ea714.jpg'),(140,71,'5535ee2016bb1fa2a9aad19ac288363e.jpg'),(141,71,'6f8269642183b8e52454f84c1f006658.jpg'),(142,71,'92c0218e98f529cab87613a9252db7ca.jpg'),(143,0,'f1adb73dc3196ff9e6b7548a7fb0e626.jpg'),(144,72,'ed02df38eecb043ab53c826e2007d8ce.jpg'),(145,73,'29288ad3e72b04afe98acc042ae5416f.jpg'),(146,74,'562b85082c61e7ec29ac05fb72ce23b0.jpg'),(147,74,'07d0c0887a6a0bf3d419eb697580f746.jpg'),(148,74,'f3a9ab12d196c6baed602ffae5e4dec7.jpg'),(149,74,'34f01a241df4bfe986a619a72e958643.jpg'),(150,74,'ec7ff527f511f775a6dd8f0174c80cdd.jpg'),(151,74,'8c3d08b2fba706a4af8c6ddc3f06f00d.jpg');
/*!40000 ALTER TABLE `car_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model`
--

DROP TABLE IF EXISTS `model`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `car_id` int(11) NOT NULL,
  `model_name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model`
--

LOCK TABLES `model` WRITE;
/*!40000 ALTER TABLE `model` DISABLE KEYS */;
INSERT INTO `model` VALUES (1,2,'Fabia'),(2,2,'Octavia'),(3,2,'rapid'),(4,2,'yeti'),(5,3,'a3'),(6,3,'a4'),(7,3,'a6'),(8,3,'q7'),(9,4,'serie3'),(10,4,'serie5'),(11,4,'serie1'),(12,4,'serie7'),(13,5,'punto'),(14,5,'bravo'),(15,5,'500L'),(16,5,'stilo'),(17,6,'impreza'),(18,6,'forester');
/*!40000 ALTER TABLE `model` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_data`
--

DROP TABLE IF EXISTS `model_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model_id` int(11) NOT NULL,
  `year` int(4) NOT NULL,
  `km` int(11) NOT NULL,
  `config` varchar(15) NOT NULL,
  `fuel` varchar(10) NOT NULL,
  `fixed` varchar(10) NOT NULL,
  `replace` varchar(20) NOT NULL,
  `engine_volume` int(5) NOT NULL,
  `horsepower` int(4) NOT NULL,
  `motor` varchar(20) NOT NULL,
  `drive` varchar(20) NOT NULL,
  `transmission` varchar(20) NOT NULL,
  `doors` int(1) NOT NULL,
  `seats` int(1) NOT NULL,
  `wheel` varchar(8) NOT NULL,
  `ac` varchar(15) NOT NULL,
  `color` varchar(20) NOT NULL,
  `intmat` varchar(20) NOT NULL,
  `intcol` varchar(20) NOT NULL,
  `regdate` date NOT NULL,
  `origin` varchar(20) NOT NULL,
  `damage` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `description` text NOT NULL,
  `price` int(7) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_data`
--

LOCK TABLES `model_data` WRITE;
/*!40000 ALTER TABLE `model_data` DISABLE KEYS */;
INSERT INTO `model_data` VALUES (52,1,2013,50000,'Hatchback','Diesel','Fixed pric','Replace',1500,70,'Euro 3','Front','Manual',5,4,'Left','Yes','Red','Leather','Black','2015-04-15','Bosnia','No',595959,'bla bla',3000),(53,1,2011,154362,'Coupe','Gasoline','Not fixed ','No replace',1250,80,'Euro 4','Front','Automatic',5,4,'Left','No','Silver-grey','Sky','Grey','2015-06-10','France','No',5231231,'bla bla',3500),(54,2,2014,214000,'Van/Minivan','Diesel','Not fixed ','No replace',2985,145,'Euro 5','4x4','Manual',5,5,'Left','Yes','Black','Leather','Black','2015-04-21','Germany','No',52312313,'bla bla',6980),(55,3,2015,50000,'Hatchback','Diesel','Not fixed ','No replace',1800,70,'Euro 4','Front','Manual',5,4,'Left','Yes','Black','Leather','Black','2015-05-06','Netherlands','No',523123156,'bla bla',5400),(56,4,2011,120000,'Hatchback','Diesel','Not fixed ','No replace',1900,110,'Euro 3','Front','Manual',5,4,'Left','Yes','Red','Leather','Grey','2015-06-14','Serbia','No',67555,'bla bla',4900),(57,5,2012,145000,'Hatchback','Gasoline','Not fixed ','Replace',1995,135,'Euro 4','Front','Manual',5,4,'Left','Yes','Black','Leather','Black','2015-07-23','Germany','No',523123166,'bla bla',6000),(58,6,2012,95000,'Sedan','Diesel','Not fixed ','Replace',1780,95,'Euro 3','Front','Manual',5,4,'Left','Yes','Blue','Leather','Black','2015-07-29','France','No',52312316,'bla bla',7000),(59,7,2012,90000,'Hatchback','Diesel','Not fixed ','No replace',1999,155,'Euro 5','Front','Manual',5,4,'Left','Yes','Silver-grey','Leather','Black','2015-03-13','Serbia','no',36231,'bla bla',8400),(61,8,2011,175000,'Luxury','Gasoline','Not fixed ','No replace',3800,170,'Euro 5','4x4','Manual',5,5,'Left','Yes','Black','Leather','Black','2015-04-15','Germany','No',595959332,'bla bla',34000),(62,9,2012,85000,'Hatchback','Diesel','Not fixed ','No replace',1800,120,'Euro 4','Front','Manual',5,4,'Left','Yes','Black','Leather','Grey','2015-04-08','Serbia','No',123185,'bla bla',4000),(63,10,2012,67000,'Van/Minivan','Gasoline','Not fixed ','No replace',1997,114,'Euro 3','Front','Manual',5,5,'Left','Yes','Black','Leather','Black','2015-04-12','Serbia','No',2648,'bla bla',9100),(64,11,2011,140000,'Hatchback','Diesel','Not fixed ','No replace',1480,95,'Euro 3','Front','Manual',5,4,'Left','Yes','Blue','Leather','Black','2015-04-06','Germany','No',95123,'bla bla',2500),(65,12,2011,75000,'Luxury','Gasoline','Not fixed ','No replace',2999,250,'Euro 5','4x4','Automatic',5,5,'Left','Yes','Black','Leather','Yellow','2015-05-26','Netherlands','No',26484545,'bla bla',55000),(66,13,2013,55000,'Hatchback','Gasoline','Not fixed ','No replace',1900,110,'Euro 4','Front','Manual',5,4,'Left','Yes','Black','Leather','Black','2015-03-06','Germany','No',12318599,'bla bla',5550),(67,14,2012,156000,'Hatchback','Diesel','Not fixed ','No replace',1992,130,'Euro 4','Front','Automatic',5,4,'Left','No','Blue','Leather','Black','2015-03-05','France','No',3251666,'bla bla',3100),(68,15,2012,125000,'Sedan','Diesel','Not fixed ','No replace',1985,100,'Euro 4','Front','Manual',5,4,'Left','Yes','Blue','Leather','Grey','2015-04-05','Serbia','No',362222,'bla bla',4500),(69,16,2001,245000,'Hatchback','Diesel','Not fixed ','Replace',1975,106,'Euro 4','Front','Automatic',5,4,'Left','Yes','Blue','Sky','Grey','2015-03-29','Netherlands','No',2332655,'bla bla',2400),(70,17,2006,195000,'Hatchback','Gasoline','Not fixed ','No replace',2999,195,'Euro 4','4x4','Automatic',5,4,'Left','Yes','Grey','Sky','Grey','2015-04-20','Serbia','No',1552322,'bla bla',6500),(71,18,2008,265000,'Luxury','Gasoline','Not fixed ','No replace',2800,165,'Euro 4','4x4','Manual',5,4,'Left','Yes','Blue','Leather','Black','2015-04-12','Netherlands','No',23222222,'bla bla',7900),(72,8,2015,1,'Hatchback','Gasoline','Fixed pric','Replace',0,0,'','','',0,0,'','','','','','0000-00-00','','',0,'',0),(73,8,2015,1,'Hatchback','Gasoline','Fixed pric','Replace',0,0,'','','',0,0,'','','','','','0000-00-00','','',0,'',0),(74,1,2015,50000,'Hatchback','Diesel','Not fixed ','No replace',0,0,'','','',0,0,'','','','','','0000-00-00','','',0,'',4900);
/*!40000 ALTER TABLE `model_data` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-02-07 17:45:55
