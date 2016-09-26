/*
SQLyog Trial v12.01 (64 bit)
MySQL - 5.5.28 : Database - gov_reimburse
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`gov_reimburse` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `gov_reimburse`;

/*Table structure for table `action_log` */

DROP TABLE IF EXISTS `action_log`;

CREATE TABLE `action_log` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `logtime` int(10) DEFAULT NULL COMMENT '登录时间',
  `uid` int(5) DEFAULT NULL COMMENT '用户id',
  `loginfo` varchar(255) DEFAULT NULL COMMENT '操作信息',
  `logip` varchar(20) DEFAULT NULL COMMENT '操作ip',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

/*Data for the table `action_log` */

insert  into `action_log`(`id`,`logtime`,`uid`,`loginfo`,`logip`) values (1,1472630093,1000035,'参与到富顺不动产登记项目',NULL),(2,1472630462,1000025,'参与到大英不动产登记项目',NULL),(3,1472630462,1000026,'参与到大英不动产登记项目',NULL),(4,1472630462,1000027,'参与到大英不动产登记项目',NULL),(5,1472630462,1000028,'参与到大英不动产登记项目',NULL),(6,1472630462,1000036,'参与到大英不动产登记项目',NULL),(7,1472630462,1000037,'参与到大英不动产登记项目',NULL),(8,1472630462,1000038,'参与到大英不动产登记项目',NULL),(9,1472630462,1000039,'参与到大英不动产登记项目',NULL),(10,1472630462,1000040,'参与到大英不动产登记项目',NULL),(11,1472630462,1000041,'参与到大英不动产登记项目',NULL),(12,1472630462,1000042,'参与到大英不动产登记项目',NULL),(13,1472630462,1000043,'参与到大英不动产登记项目',NULL),(14,1472630462,1000044,'参与到大英不动产登记项目',NULL),(15,1472630462,1000045,'参与到大英不动产登记项目',NULL),(16,1472630462,1000046,'参与到大英不动产登记项目',NULL),(17,1472630462,1000047,'参与到大英不动产登记项目',NULL),(18,1472630462,1000048,'参与到大英不动产登记项目',NULL),(19,1472630594,1000027,'参与到仁寿不动产登记项目',NULL),(20,1472630594,1000044,'参与到仁寿不动产登记项目',NULL),(21,1472630594,1000048,'参与到仁寿不动产登记项目',NULL),(22,1472630594,1000049,'参与到仁寿不动产登记项目',NULL),(23,1472630594,1000050,'参与到仁寿不动产登记项目',NULL),(24,1472630733,1000025,'参与到安居不动产登记项目',NULL),(25,1472630733,1000027,'参与到安居不动产登记项目',NULL),(26,1472630733,1000028,'参与到安居不动产登记项目',NULL),(27,1472630733,1000029,'参与到安居不动产登记项目',NULL),(28,1472630733,1000031,'参与到安居不动产登记项目',NULL),(29,1472630733,1000036,'参与到安居不动产登记项目',NULL),(30,1472630733,1000051,'参与到安居不动产登记项目',NULL),(31,1472782443,1000030,'参与到富顺不动产登记项目',NULL),(32,1472782443,1000052,'参与到富顺不动产登记项目',NULL),(33,1474360352,1000029,'参与到富顺不动产登记项目',NULL),(34,1474438645,1000054,'参与到安居不动产登记项目',NULL),(35,1474438645,1000055,'参与到安居不动产登记项目',NULL);

/*Table structure for table `audit` */

DROP TABLE IF EXISTS `audit`;

CREATE TABLE `audit` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `re_id` int(5) DEFAULT NULL COMMENT '报账id',
  `uid` int(5) DEFAULT NULL COMMENT '审核人id',
  `reason` varchar(255) DEFAULT NULL COMMENT '原因',
  `state` int(1) DEFAULT NULL COMMENT '（0未通过，1审核通过）',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `audit` */

/*Table structure for table `dictionary` */

DROP TABLE IF EXISTS `dictionary`;

CREATE TABLE `dictionary` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `table_name` varchar(50) DEFAULT NULL COMMENT '表名',
  `column_name` varchar(50) DEFAULT NULL COMMENT '字段名',
  `key` int(5) DEFAULT NULL COMMENT '键',
  `value` varchar(50) DEFAULT NULL COMMENT '值',
  `state` int(1) DEFAULT NULL COMMENT '(0无效，1有效)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='字典表';

/*Data for the table `dictionary` */

/*Table structure for table `re_list` */

DROP TABLE IF EXISTS `re_list`;

CREATE TABLE `re_list` (
  `re_id` int(5) NOT NULL AUTO_INCREMENT,
  `uid` int(5) DEFAULT NULL COMMENT '用户id',
  `jid` int(5) DEFAULT NULL COMMENT '项目id',
  `typekey` int(5) DEFAULT NULL COMMENT '类型编码',
  `price` decimal(10,0) DEFAULT NULL COMMENT '金额',
  `remark` varchar(255) DEFAULT NULL COMMENT '备注',
  `ctime` int(10) DEFAULT NULL COMMENT '创建时间',
  `mtime` int(10) DEFAULT NULL COMMENT '修改时间',
  `state` int(1) DEFAULT NULL COMMENT '状态(0撤回，1待领导审核，2待财务审核，3审核通过,4现金付讫)',
  PRIMARY KEY (`re_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='报账列表';

/*Data for the table `re_list` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
