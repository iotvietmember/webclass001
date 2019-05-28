SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT;
SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS;
SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION;
SET NAMES utf8;
SET @OLD_TIME_ZONE=@@TIME_ZONE;
SET TIME_ZONE='+00:00';
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0;


CREATE DATABASE IF NOT EXISTS `lopweb` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE lopweb;

--
-- Table structure for table `mainapp_summarybyday`
--

DROP TABLE IF EXISTS `tblInfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblInfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hoten` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `namsinh` int(11),
  `quequan` varchar(200) COLLATE utf8_unicode_ci,
  `thuongtru` varchar(200) COLLATE utf8_unicode_ci,
  `nghenghiep` varchar(50) COLLATE utf8_unicode_ci,
  `ghichu` varchar(254) COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;