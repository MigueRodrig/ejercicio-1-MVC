/*
SQLyog Ultimate v8.82 
MySQL - 5.5.16 : Database - examen
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`examen` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `examen`;

/*Table structure for table `preguntas` */

DROP TABLE IF EXISTS `preguntas`;

CREATE TABLE `preguntas` (
  `id` int(11) NOT NULL,
  `pregunta` varchar(100) DEFAULT NULL,
  `res1` varchar(50) DEFAULT NULL,
  `res2` varchar(50) DEFAULT NULL,
  `res3` varchar(50) DEFAULT NULL,
  `correcto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `preguntas` */

insert  into `preguntas`(`id`,`pregunta`,`res1`,`res2`,`res3`,`correcto`) values (1,'uno','a','b','c','a'),(2,'dos','A','b','c','b'),(3,'tres','a','B','c','c'),(4,'cuatro','a','b','C','b'),(5,'cinco','a','b','c','a');

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `calificacion` double DEFAULT NULL,
  `estatus` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

insert  into `usuario`(`id_usuario`,`usuario`,`password`,`calificacion`,`estatus`) values (1,'miguel','123',1,'SI'),(2,'rodrigo','123',9,'SI');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
