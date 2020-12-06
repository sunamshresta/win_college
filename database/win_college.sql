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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `student_details` */

insert  into `student_details`(`id`,`first_name`,`middle_name`,`last_name`,`dob`,`gender`,`address1`,`address2`,`email`,`mobile`,`created_at`,`updated_at`) values 
(1,'A','','A','2020-12-01','male','abc','abc','a@mail.com','9812345678','2020-12-06 11:40:24','0000-00-00 00:00:00');

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
  `student_detail` int(11) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `student_detail` (`student_detail`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`student_detail`) REFERENCES `student_details` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`email`,`verified`,`token`,`password`,`type`,`student_detail`,`deleted`) values 
(1,'aaa','a@mail.com',0,'e2617045b250120facb17e9957c19dca5f95a77f75918d86ebea92479723bf5241c3498aaaa111acd79641a36a3a51b60347','$2y$10$xRvt2m9PHyS66oZDDCDskuKHDNliiu1WCVh4PA3CCaDjPUqNHa8Ra','student',1,0),
(2,'superadmin','superadmin',1,NULL,'$2y$10$xRvt2m9PHyS66oZDDCDskuKHDNliiu1WCVh4PA3CCaDjPUqNHa8Ra','admin',NULL,0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
