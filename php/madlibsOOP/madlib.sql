-- MySQL dump 10.13  Distrib 5.5.57, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: madlibDatabase
-- ------------------------------------------------------
-- Server version	5.5.57-0ubuntu0.14.04.1

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
-- Table structure for table `madlib`
--

DROP TABLE IF EXISTS `madlib`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `madlib` (
  `user_verb` varchar(15) DEFAULT NULL,
  `user_adjective` varchar(15) DEFAULT NULL,
  `user_noun` varchar(20) DEFAULT NULL,
  `user_adverb` varchar(15) DEFAULT NULL,
  `full_story` varchar(150) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `madlib`
--

LOCK TABLES `madlib` WRITE;
/*!40000 ALTER TABLE `madlib` DISABLE KEYS */;
INSERT INTO `madlib` VALUES ('walk','blue','dog','quickly','Do they walk with our blue dog quickly? That is hilarious!','2017-09-25 22:11:35'),('walk','blue','dog','quickly','Do you walk with your blue dog quickly? That is great!','2017-09-25 22:11:50'),('run','champion','horse','slowly','Do they run with our champion horse slowly? That is great!','2017-09-25 22:13:41'),('talk','older','sister','seriously','Do we talk with their older sister seriously? That is hilarious!','2017-09-25 22:14:06'),('talk','younger','brother','jokingly','Do they talk with your younger brother jokingly? That is not good!','2017-09-25 22:15:59'),('play','old','pet','nicely','Do we play with our old pet nicely? That is hilarious!','2017-09-25 22:16:33'),('watch','young','rabbit','happily','Do we watch with their young rabbit happily? That is not good!','2017-09-25 22:17:02'),('grumble','horrid','planet','lamely','Do you grumble with our horrid planet lamely? That is not good!','2017-09-26 00:20:25'),('l','lj','lj','lkj','Do you l with your lj lj lkj? That is a problem!','2017-09-27 19:40:17'),('walk','blue','dog','quickly','Do you walk with your blue dog quickly? That is great!','2017-10-30 17:20:38'),('race','old','car','slowly','Do they race with your old car slowly? That is a problem!','2017-10-30 23:35:35'),('run','old','dog','quickly','Do you run with their old dog quickly? That is not good!','2017-10-30 23:41:59'),('run','old','dog','quickly','Do you run with our old dog quickly? That is great!','2017-10-30 23:51:50'),('walk','young','dog','slowly','Do you walk with their young dog slowly? That is great!','2017-10-30 23:54:01'),('walk','young','dog','slowly','Do you walk with our young dog slowly? That is not good!','2017-10-30 23:54:58'),('walk','young','dog','slowly','Do we walk with their young dog slowly? That is great!','2017-10-30 23:55:01');
/*!40000 ALTER TABLE `madlib` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-31  0:00:01
