/*
SQLyog Professional v13.1.1 (32 bit)
MySQL - 10.4.11-MariaDB : Database - win_college
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`win_college` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `win_college`;

/*Table structure for table `student_details` */

DROP TABLE IF EXISTS `student_details`;

CREATE TABLE `student_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

/*Data for the table `student_details` */

insert  into `student_details`(`id`,`first_name`,`middle_name`,`last_name`,`dob`,`gender`,`address1`,`address2`,`email`,`mobile`,`created_at`,`updated_at`) values 
(6,'one','','two','2020-12-03','male','ktm','ktm','gomaya.shrestha27@gmail.com','9849516171','2020-12-06 00:07:23','0000-00-00 00:00:00'),
(7,'one','','one','2020-12-03','male','ktm','ktm','gomaya.shrestha27@gmail.com','9849516171','2020-12-06 00:08:10','0000-00-00 00:00:00'),
(8,'one','','one','2020-12-03','male','ktm','ktm','test@test.com','9849516171','2020-12-06 00:09:01','0000-00-00 00:00:00'),
(9,'one','','one','2020-12-03','male','ktm','ktm','test1@test.com','9849516171','2020-12-06 00:09:39','0000-00-00 00:00:00'),
(10,'one','','one','2020-12-03','male','ktm','ktm','test11@test.com','9849516171','2020-12-06 00:10:12','0000-00-00 00:00:00'),
(11,'one','','one','2020-12-03','male','ktm','ktm','test111@test.com','9849516171','2020-12-06 00:15:37','0000-00-00 00:00:00'),
(12,'one','','one','2020-12-03','male','ktm','ktm','test1111@test.com','9849516171','2020-12-06 00:16:30','0000-00-00 00:00:00'),
(13,'one','','one','2020-12-03','male','ktm','ktm','test1111@test.com','9849516171','2020-12-06 00:17:00','0000-00-00 00:00:00'),
(14,'one','','one','2020-12-03','male','ktm','ktm','test1111@test.com','9849516171','2020-12-06 00:17:08','0000-00-00 00:00:00'),
(15,'one','','one','2020-12-03','male','ktm','ktm','test11111@test.com','9849516171','2020-12-06 00:20:56','0000-00-00 00:00:00'),
(16,'first','','last','2020-12-06','male','ktm','ktm','sunam.social@gmail.com','9849516171','2020-12-06 07:44:26','0000-00-00 00:00:00');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `token` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `student_detail` int(11) NOT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `student_detail` (`student_detail`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`student_detail`) REFERENCES `student_details` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`email`,`verified`,`token`,`password`,`type`,`student_detail`,`deleted`) values 
(4,'user','gomaya.shrestha27@gmail.com',1,'6d9868efa23b99ff3a807eafefd3eb1756b09f46005de78e0baa99236680a22291ef286a97c1725436a08430c4ac1bced708','$2y$10$y4WqIWNkgUs7Wbk/1uHLK.Isffq0BPWEpjKC66AZpDHqAiLwF2VoW','student',7,0),
(5,'user','test@test.com',0,'5aeb70e1d35ab751d30c554b559f67d06cc0cb388e31842d275db0a477f601e0dfd229d621e0498cc4191d6a5329ff034400','$2y$10$0r/bn9d4f0dcggugjCq08.ckUAT/RcK2If1nZd4kQwq7SjiQdGhzm','student',8,0),
(6,'user','test1@test.com',0,'79d84f72ce266861c613bae6cf081d0b56dac239202af44d6a7ed8128a6bc796d0f4ce45f8db6cdda787eb0f46f4549d26bb','$2y$10$Yn0BuzTNFysoVYdpiDNH0.6LEdY9cL.x13116vxzEUUsD51H77WhG','student',9,0),
(7,'user','test11@test.com',0,'51527a000751409dbc27a95db8b78468f878340d8f86e7f11349433f6f1abd238f46235dae097dca6e458f9165528296739c','$2y$10$2H9InO01nSVHhvxZWtF2UOhcFjiupHF5QY1QPDUCUbL.FtYzGn8Jm','student',10,0),
(8,'user','test111@test.com',0,'0df090db48045006351b90920b5826e324130597298c079fdf6e5c45cf039bea0f54f65a72517fdcfd31800a321b5c8bc75f','$2y$10$onyhNQFrX1AQwhj8AdmyKOUxsh8Oh4m.YF6ChXo9XbYAfC5Mnub0q','student',11,0),
(9,'new user','test1111@test.com',0,'e5d10f16295f8455029c9b115b128b592670ed200e42f035f9591201e8a7e486b75052a5404ed24b24241ad781ca2a311465','$2y$10$ArHoABLaXd77kRX47dz28u8j32zZlbj4hqVFmvZVz.Pv023M7OeRG','student',14,0),
(10,'admin','test11111@test.com',0,'afc1db6ccb1e7ac99c37838c4420dc9caa049d1aa4483f13543e460e12ee8c738a3eae28003eaad0927a79bdf8a46be703b3','$2y$10$pSV9LKEzRqtY0K.PhAMsNeGaa1lDXUaaG.TXeEzTtGPX631oOG.tm','admin',15,0),
(11,'test','sunam.social@gmail.com',1,'3d94225773b11bd5a1f84666671813143dca1bffd5e8edabb9476b031dcd1965045cce6fd2ce93ba7678a7fffab07f0a182e','$2y$10$TOyjbcbVz1.fWRthuPcWv..JQ7o2wDFm8JENPBUHLBi8caf8SdpiW','admin',16,0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
