/*
SQLyog Ultimate v11.24 (32 bit)
MySQL - 5.5.49-log : Database - baidunews
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`baidunews` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `baidunews`;

/*Table structure for table `news` */

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `newType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `newImge` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `newTitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `newPubDate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `newMark` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `newurl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `news` */

insert  into `news`(`id`,`newType`,`newImge`,`newTitle`,`newPubDate`,`newMark`,`newurl`) values (2,'baijia','http://t10.baidu.com/it/u=375031491,2739365060&fm=170&s=562100E637328FC8125CEDBD03009005&w=218&h=146&img.JPEG','圈子联合文化牵手百花园传媒 打造新媒体品牌战略','6分钟前','','www.baidu.com'),(3,'women','http://t12.baidu.com/it/u=1949135042,1696194290&fm=170&s=F0BB31D4639B1FD64C77318B0300708C&w=218&h=146&img.JPEG','富士康郭台铭：马云的演讲，让我惊慌','2秒前','热点','www.163.com'),(4,'jingxuan','http://t11.baidu.com/it/u=3497520232,1519798953&fm=170&s=DFA23B6172622513CC19D48A0100E081&w=218&h=146&img.JPEG','春雨医生张锐之后，创业是否该换种姿势？','3分钟前','','www.baidu.com'),(5,'jingxuan','http://t12.baidu.com/it/u=1949135042,1696194290&fm=170&s=F0BB31D4639B1FD64C77318B0300708C&w=218&h=146&img.JPEG','富士康郭台铭：马云的演讲，让我惊慌','11分钟前','热点','www.baidu.com'),(6,'jingxuan','http://t12.baidu.com/it/u=1949135042,1696194290&fm=170&s=F0BB31D4639B1FD64C77318B0300708C&w=218&h=146&img.JPEG','富士康郭台铭：马云的演讲，让我惊慌','10分钟前','热点','www.baidu.com'),(7,'jingxuan','http://t12.baidu.com/it/u=1949135042,1696194290&fm=170&s=F0BB31D4639B1FD64C77318B0300708C&w=218&h=146&img.JPEG','富士康郭台铭：马云的演讲，让我惊慌','9分钟前','热点','www.baidu.com'),(8,'local','http://t12.baidu.com/it/u=1949135042,1696194290&fm=170&s=F0BB31D4639B1FD64C77318B0300708C&w=218&h=146&img.JPEG','富士康郭台铭：马云的演讲，让我惊慌','8分钟','热点','www.baidu.com'),(9,'baijia','http://t12.baidu.com/it/u=1949135042,1696194290&fm=170&s=F0BB31D4639B1FD64C77318B0300708C&w=218&h=146&img.JPEG','富士康郭台铭：马云的演讲，让我惊慌','7分钟前','热点','www.baidu.com'),(10,'women','http://t12.baidu.com/it/u=1949135042,1696194290&fm=170&s=F0BB31D4639B1FD64C77318B0300708C&w=218&h=146&img.JPEG','富士康郭台铭：马云的演讲，让我惊慌','6分钟前','热点','www.baidu.com'),(11,'local','http://t12.baidu.com/it/u=1949135042,1696194290&fm=170&s=F0BB31D4639B1FD64C77318B0300708C&w=218&h=146&img.JPEG','这是什么','5分钟前','热点','www.baidu.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
