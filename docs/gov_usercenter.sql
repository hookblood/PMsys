/*
SQLyog Trial v12.01 (64 bit)
MySQL - 5.5.28 : Database - gov_usercenter
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`gov_usercenter` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `gov_usercenter`;

/*Table structure for table `action_log` */

DROP TABLE IF EXISTS `action_log`;

CREATE TABLE `action_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logtime` int(11) DEFAULT NULL COMMENT '操作时间',
  `uid` int(11) DEFAULT NULL COMMENT '用户id',
  `loginfo` varchar(100) DEFAULT NULL COMMENT '操作信息',
  `logip` varchar(45) DEFAULT NULL COMMENT '操作ip',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

/*Data for the table `action_log` */

insert  into `action_log`(`id`,`logtime`,`uid`,`loginfo`,`logip`) values (1,1472630093,1000035,'参与到富顺不动产登记项目',NULL),(2,1472630462,1000025,'参与到大英不动产登记项目',NULL),(3,1472630462,1000026,'参与到大英不动产登记项目',NULL),(4,1472630462,1000027,'参与到大英不动产登记项目',NULL),(5,1472630462,1000028,'参与到大英不动产登记项目',NULL),(6,1472630462,1000036,'参与到大英不动产登记项目',NULL),(7,1472630462,1000037,'参与到大英不动产登记项目',NULL),(8,1472630462,1000038,'参与到大英不动产登记项目',NULL),(9,1472630462,1000039,'参与到大英不动产登记项目',NULL),(10,1472630462,1000040,'参与到大英不动产登记项目',NULL),(11,1472630462,1000041,'参与到大英不动产登记项目',NULL),(12,1472630462,1000042,'参与到大英不动产登记项目',NULL),(13,1472630462,1000043,'参与到大英不动产登记项目',NULL),(14,1472630462,1000044,'参与到大英不动产登记项目',NULL),(15,1472630462,1000045,'参与到大英不动产登记项目',NULL),(16,1472630462,1000046,'参与到大英不动产登记项目',NULL),(17,1472630462,1000047,'参与到大英不动产登记项目',NULL),(18,1472630462,1000048,'参与到大英不动产登记项目',NULL),(19,1472630594,1000027,'参与到仁寿不动产登记项目',NULL),(20,1472630594,1000044,'参与到仁寿不动产登记项目',NULL),(21,1472630594,1000048,'参与到仁寿不动产登记项目',NULL),(22,1472630594,1000049,'参与到仁寿不动产登记项目',NULL),(23,1472630594,1000050,'参与到仁寿不动产登记项目',NULL),(24,1472630733,1000025,'参与到安居不动产登记项目',NULL),(25,1472630733,1000027,'参与到安居不动产登记项目',NULL),(26,1472630733,1000028,'参与到安居不动产登记项目',NULL),(27,1472630733,1000029,'参与到安居不动产登记项目',NULL),(28,1472630733,1000031,'参与到安居不动产登记项目',NULL),(29,1472630733,1000036,'参与到安居不动产登记项目',NULL),(30,1472630733,1000051,'参与到安居不动产登记项目',NULL),(31,1472782443,1000030,'参与到富顺不动产登记项目',NULL),(32,1472782443,1000052,'参与到富顺不动产登记项目',NULL),(33,1474360352,1000029,'参与到富顺不动产登记项目',NULL),(34,1474438645,1000054,'参与到安居不动产登记项目',NULL),(35,1474438645,1000055,'参与到安居不动产登记项目',NULL);

/*Table structure for table `admin_user` */

DROP TABLE IF EXISTS `admin_user`;

CREATE TABLE `admin_user` (
  `uid` int(5) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `alias` varchar(20) DEFAULT NULL COMMENT '登录名',
  `upassword` varchar(20) DEFAULT NULL COMMENT '密码',
  `uname` varchar(50) DEFAULT NULL COMMENT '真实姓名',
  `salt` varchar(2) DEFAULT NULL COMMENT '盐位码',
  `phone` varchar(50) DEFAULT NULL COMMENT '电话',
  `email` varchar(50) DEFAULT NULL COMMENT '邮箱',
  `ctime` int(10) DEFAULT NULL COMMENT '创建时间',
  `mtime` int(10) DEFAULT NULL COMMENT '修改时间',
  `state` int(1) DEFAULT NULL COMMENT '（0离职，1在职）',
  `job` varchar(50) DEFAULT NULL COMMENT '职位',
  `entrydate` int(10) DEFAULT NULL COMMENT '入职时间',
  `departuredate` int(10) DEFAULT NULL COMMENT '离职时间',
  `reason` varchar(255) DEFAULT NULL COMMENT '离职原因',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=1000056 DEFAULT CHARSET=utf8 COMMENT='用户';

/*Data for the table `admin_user` */

insert  into `admin_user`(`uid`,`alias`,`upassword`,`uname`,`salt`,`phone`,`email`,`ctime`,`mtime`,`state`,`job`,`entrydate`,`departuredate`,`reason`) values (1000001,'admin','admin','管理员',NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL),(1000002,'何柳','Heliu123','何柳',NULL,'13550043564','495412803@qq.com',NULL,NULL,1,NULL,NULL,NULL,NULL),(1000003,'董翔文','dxw666666','董翔文',NULL,'','',NULL,NULL,1,NULL,NULL,NULL,NULL),(1000004,'rens','rens666666','任森',NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL),(1000005,'xufei','xufei8260133','徐棐',NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL),(1000006,'jiangch','jiangchao123','江超',NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL),(1000015,'刘俊','liujun',NULL,NULL,'','',NULL,NULL,0,NULL,NULL,NULL,NULL),(1000016,'高仕广','gaoshiguang',NULL,NULL,'','',NULL,NULL,0,NULL,NULL,NULL,NULL),(1000017,'田红','tianhong',NULL,NULL,'','',NULL,NULL,0,NULL,NULL,NULL,NULL),(1000018,'tianhong','tianhong',NULL,NULL,'','',NULL,NULL,1,NULL,NULL,NULL,NULL),(1000019,'liujun','liujun',NULL,NULL,'','',NULL,NULL,1,NULL,NULL,NULL,NULL),(1000020,'gaoshiguang','gaoshiguang',NULL,NULL,'','',NULL,NULL,1,NULL,NULL,NULL,NULL),(1000021,'liyuan','liyuan',NULL,NULL,'15882262387','316563814@qq.com',NULL,NULL,1,NULL,NULL,NULL,NULL),(1000022,'徐棐','123456',NULL,NULL,'18602870531','',NULL,NULL,1,NULL,NULL,NULL,NULL),(1000023,'伍龙','123456',NULL,NULL,'15982467035','',NULL,NULL,1,NULL,NULL,NULL,NULL),(1000024,'张磊','123456',NULL,NULL,'13388356466','',NULL,NULL,3,NULL,NULL,NULL,NULL),(1000025,'王俊武','123456',NULL,NULL,'13982046840','',NULL,NULL,3,NULL,NULL,NULL,NULL),(1000026,'何炯','123456',NULL,NULL,'18190748113','',NULL,NULL,1,NULL,NULL,NULL,NULL),(1000027,'张小菊','123456',NULL,NULL,'18380440232','',NULL,NULL,4,NULL,NULL,NULL,NULL),(1000028,'吴涛','123456',NULL,NULL,'15282877313','',NULL,NULL,4,NULL,NULL,NULL,NULL),(1000029,'杨波','123456',NULL,NULL,'15520764500','',NULL,NULL,4,NULL,NULL,NULL,NULL),(1000030,'王婷','123456',NULL,NULL,'18383137060','',NULL,NULL,4,NULL,NULL,NULL,NULL),(1000031,'牟彪','123456',NULL,NULL,'18380465260','',NULL,NULL,4,NULL,NULL,NULL,NULL),(1000032,'严嘉城','123456',NULL,NULL,'18328362113','',NULL,NULL,4,NULL,NULL,NULL,NULL),(1000033,'杨峰','123456',NULL,NULL,'15281757781','',NULL,NULL,4,NULL,NULL,NULL,NULL),(1000034,'苏田','123456',NULL,NULL,'18108125997','',NULL,NULL,4,NULL,NULL,NULL,NULL),(1000035,'林银宏','123456',NULL,NULL,'15108204250','',NULL,NULL,4,NULL,NULL,NULL,NULL),(1000036,'夏晓辉','123456',NULL,NULL,'15108488011','',NULL,NULL,4,NULL,NULL,NULL,NULL),(1000037,'吴锐林','123456',NULL,NULL,'','',NULL,NULL,4,NULL,NULL,NULL,NULL),(1000038,'龚朝晖','123456',NULL,NULL,'','',NULL,NULL,4,NULL,NULL,NULL,NULL),(1000039,'吕航','123456',NULL,NULL,'','',NULL,NULL,4,NULL,NULL,NULL,NULL),(1000040,'屠超','123456',NULL,NULL,'','',NULL,NULL,4,NULL,NULL,NULL,NULL),(1000041,'李俊平','123456',NULL,NULL,'','',NULL,NULL,4,NULL,NULL,NULL,NULL),(1000042,'王康婷','123456',NULL,NULL,'','',NULL,NULL,4,NULL,NULL,NULL,NULL),(1000043,'李涵','123456',NULL,NULL,'','',NULL,NULL,4,NULL,NULL,NULL,NULL),(1000044,'游星宇','123456',NULL,NULL,'','',NULL,NULL,4,NULL,NULL,NULL,NULL),(1000045,'王麒森','123456',NULL,NULL,'','',NULL,NULL,4,NULL,NULL,NULL,NULL),(1000046,'王治钧','123456',NULL,NULL,'','',NULL,NULL,4,NULL,NULL,NULL,NULL),(1000047,'马德松','123456',NULL,NULL,'','',NULL,NULL,4,NULL,NULL,NULL,NULL),(1000048,'杨东','123456',NULL,NULL,'','',NULL,NULL,4,NULL,NULL,NULL,NULL),(1000049,'付茂','123456',NULL,NULL,'','',NULL,NULL,4,NULL,NULL,NULL,NULL),(1000050,'林万琴','123456',NULL,NULL,'','',NULL,NULL,4,NULL,NULL,NULL,NULL),(1000051,'赵武','123456',NULL,NULL,'13527428672','',NULL,NULL,4,NULL,NULL,NULL,NULL),(1000052,'蒲可','123456',NULL,NULL,'18380594566','',NULL,NULL,4,NULL,NULL,NULL,NULL),(1000054,'任鑫','123456',NULL,NULL,'15528077402','',NULL,NULL,4,NULL,NULL,NULL,NULL),(1000055,'张凡','123456',NULL,NULL,'15982372679','',NULL,NULL,4,NULL,NULL,NULL,NULL);

/*Table structure for table `error_log` */

DROP TABLE IF EXISTS `error_log`;

CREATE TABLE `error_log` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `err_info` varchar(255) DEFAULT NULL COMMENT '错误信息',
  `err_time` int(10) DEFAULT NULL COMMENT '时间',
  `err_uid` int(5) DEFAULT NULL COMMENT '用户id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `error_log` */

/*Table structure for table `role_mod_relation` */

DROP TABLE IF EXISTS `role_mod_relation`;

CREATE TABLE `role_mod_relation` (
  `id` int(5) NOT NULL,
  `role_id` int(5) DEFAULT NULL COMMENT '角色id',
  `mod_id` int(5) DEFAULT NULL COMMENT '模块id',
  `state` int(1) DEFAULT NULL COMMENT '(0禁止，1开放)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='角色模块关系';

/*Data for the table `role_mod_relation` */

/*Table structure for table `session` */

DROP TABLE IF EXISTS `session`;

CREATE TABLE `session` (
  `s_id` int(5) NOT NULL AUTO_INCREMENT,
  `session_id` int(5) DEFAULT NULL,
  `s_uid` int(5) DEFAULT NULL COMMENT '用户id',
  `s_expiry` int(10) DEFAULT NULL COMMENT '过期时间',
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `session` */

/*Table structure for table `user_module` */

DROP TABLE IF EXISTS `user_module`;

CREATE TABLE `user_module` (
  `mod_id` int(5) NOT NULL AUTO_INCREMENT COMMENT '模块id',
  `mod_name` varchar(50) DEFAULT NULL COMMENT '模块名字',
  `mod_token` varchar(50) DEFAULT NULL COMMENT '模块特征码',
  `state` int(1) DEFAULT NULL COMMENT '（0禁止，1开放）',
  PRIMARY KEY (`mod_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户模块表';

/*Data for the table `user_module` */

/*Table structure for table `user_role` */

DROP TABLE IF EXISTS `user_role`;

CREATE TABLE `user_role` (
  `role_id` int(5) NOT NULL AUTO_INCREMENT COMMENT '角色id',
  `role_name` varchar(50) DEFAULT NULL COMMENT '角色名字',
  `is_write` int(1) DEFAULT NULL COMMENT '是否可操作（0不可写，1可写）',
  `state` int(1) DEFAULT NULL COMMENT '(0禁止，1开放)',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户角色表';

/*Data for the table `user_role` */

/*Table structure for table `user_role_relation` */

DROP TABLE IF EXISTS `user_role_relation`;

CREATE TABLE `user_role_relation` (
  `id` int(5) NOT NULL,
  `uid` int(5) DEFAULT NULL COMMENT '用户id',
  `role_id` int(5) DEFAULT NULL COMMENT '角色id',
  `state` int(1) DEFAULT NULL COMMENT '（0禁止，1开放）',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户角色关系';

/*Data for the table `user_role_relation` */

/*Table structure for table `workrecord` */

DROP TABLE IF EXISTS `workrecord`;

CREATE TABLE `workrecord` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `uid` int(5) DEFAULT NULL COMMENT '用户id',
  `hours` int(5) DEFAULT NULL COMMENT '小时',
  `day` int(10) DEFAULT NULL COMMENT '出勤日期',
  `jid` int(5) DEFAULT NULL COMMENT '项目id',
  `ctime` int(10) DEFAULT NULL COMMENT '创建时间',
  `mtime` int(10) DEFAULT NULL COMMENT '修改时间',
  `state` int(1) DEFAULT NULL COMMENT '状态(1正常，2加班)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COMMENT=' 出勤表';

/*Data for the table `workrecord` */

insert  into `workrecord`(`id`,`uid`,`hours`,`day`,`jid`,`ctime`,`mtime`,`state`) values (1,1000032,NULL,NULL,NULL,1472656780,NULL,1),(2,1000030,NULL,NULL,NULL,1472806546,NULL,1),(3,1000027,NULL,NULL,NULL,1473055367,NULL,1),(4,1000023,NULL,NULL,NULL,1473055412,NULL,1),(5,1000024,NULL,NULL,NULL,1473068341,NULL,1),(6,1000025,NULL,NULL,NULL,1473068346,NULL,1),(7,1000026,NULL,NULL,NULL,1473068351,NULL,1),(8,1000028,NULL,NULL,NULL,1473068364,NULL,1),(9,1000029,NULL,NULL,NULL,1473068371,NULL,1),(10,1000032,NULL,NULL,NULL,1473068383,NULL,1),(11,1000033,NULL,NULL,NULL,1473068393,NULL,1),(12,1000034,NULL,NULL,NULL,1473068400,NULL,1),(13,1000035,NULL,NULL,NULL,1473068406,NULL,1),(14,1000023,NULL,NULL,6,1473322561,NULL,1),(15,1000024,NULL,NULL,1,1473322587,NULL,1),(16,1000025,NULL,NULL,3,1473323228,NULL,1),(17,1000027,NULL,NULL,6,1473323252,NULL,1),(18,1000028,NULL,NULL,6,1473323300,NULL,1),(19,1000030,NULL,NULL,1,1473323368,NULL,1),(20,1000032,NULL,NULL,1,1473323395,NULL,1),(21,1000033,NULL,NULL,3,1473323435,NULL,1),(22,1000034,NULL,NULL,3,1473323447,NULL,1),(23,1000035,NULL,NULL,1,1473323633,NULL,1),(24,1000052,NULL,NULL,1,1473323713,NULL,1),(25,1000027,NULL,NULL,1,1474176861,NULL,1),(26,1000029,NULL,NULL,6,1474264525,NULL,1),(27,1000029,NULL,NULL,1,1474439085,NULL,1),(28,1000054,NULL,NULL,6,1474439377,NULL,1),(29,1000055,NULL,NULL,6,1474439386,NULL,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;