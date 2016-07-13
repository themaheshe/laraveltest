/*
SQLyog Trial v12.2.4 (64 bit)
MySQL - 10.1.13-MariaDB : Database - blogtest
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`blogtest` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `blogtest`;

/*Table structure for table `blog` */

DROP TABLE IF EXISTS `blog`;

CREATE TABLE `blog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `published_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blog_user_id_foreign` (`user_id`),
  CONSTRAINT `blog_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `blog` */

insert  into `blog`(`id`,`user_id`,`title`,`body`,`active`,`published_at`,`deleted_at`,`created_at`,`updated_at`) values 
(3,1,'a test tiltle','this is a test bodya dsf as fasdf asdf asdf asdfas fs fd edited khjkjh',1,'2016-07-14 03:55:02',NULL,NULL,'2016-07-13 17:55:02'),
(4,1,'second blog','Lorem ipsum dolor sit amet, eloquentiam consequuntur an vim. Vim te ipsum nullam democritum, est eu impetus efficiantur. Nec an impetus docendi sententiae, no vix officiis periculis, te est suas sensibus. Vidisse minimum sit at, pri no noster recteque expetendis',0,'2016-07-14 01:44:24','2016-07-13 15:44:24',NULL,'2016-07-13 15:44:24'),
(5,1,'third blog','Lorem ipsum dolor sit amet, eloquentiam consequuntur an vim. Vim te ipsum nullam democritum, est eu impetus efficiantur. Nec an impetus docendi sententiae, no vix officiis periculis, te est suas sensibus. Vidisse minimum sit at, pri no noster recteque expetendis',0,'2016-07-14 01:45:09','2016-07-13 15:45:09',NULL,'2016-07-13 15:45:09'),
(7,4,'afear','dfvasd',1,'2016-07-14 03:00:47',NULL,'2016-07-13 17:00:47','2016-07-13 17:00:47'),
(8,4,'fifth','asdf ads fasdf asdf asdf asdf asdf asd fsd sd fasd fasd fasd fasf d fasdf sd fasd fsdfdf',1,'2016-07-14 03:09:06',NULL,'2016-07-13 17:09:06','2016-07-13 17:09:06');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`migration`,`batch`) values 
('2014_10_12_000000_create_users_table',1),
('2014_10_12_100000_create_password_resets_table',1),
('2016_07_13_041058_create_tasks_blog',2);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_resets` */

insert  into `password_resets`(`email`,`token`,`created_at`) values 
('themaheshe1@gmail.com','19e055a5f1b19ba8b146bc32ddaee949960547005c5554982919b45a842810dd','2016-07-13 13:30:11');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'Mahesh Bh','themaheshe1fs@hotmail.com','GNA6QAkaTrl7TK2hJvpYjiV9Wvp9bPDPpYEbT7K9v15QaLgCzuMUqbEZlKXB',NULL,'2016-07-13 14:18:32','2016-07-13 14:18:35',NULL),
(4,'Mahesh','themaheshe1@gmail.com','$2y$10$k37tI4xjvusEgGpscNyk2.7w5PR5PtVV.gVr5G8VvfHdTY0RF994O','lRQWjE5QJ4AKLNUCO5RDYoqpgpF4WkzV4mEH7o0APtoeVMbZIEhIqPOMrTde','2016-07-13 14:11:11','2016-07-13 17:57:16',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
