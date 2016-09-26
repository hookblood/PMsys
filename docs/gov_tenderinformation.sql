/*
SQLyog Trial v12.01 (64 bit)
MySQL - 5.5.28 : Database - gov_tenderinformation
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`gov_tenderinformation` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `gov_tenderinformation`;

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

/*Table structure for table `gg_baseinfo` */

DROP TABLE IF EXISTS `gg_baseinfo`;

CREATE TABLE `gg_baseinfo` (
  `gg_id` int(5) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `did` int(6) DEFAULT NULL COMMENT '地区编码',
  `gg_type` int(1) DEFAULT NULL COMMENT '类型编码',
  `gg_xmmc` varchar(255) DEFAULT NULL COMMENT '采购项目名称',
  `gg_xmbh` varchar(100) DEFAULT NULL COMMENT '采购项目编号',
  `gg_cgfs` varchar(100) DEFAULT NULL COMMENT '采购方式',
  `gg_gglx` int(1) DEFAULT NULL COMMENT '公告类型编码',
  `gg_ggfbsj` int(10) DEFAULT NULL COMMENT '公告发布时间',
  `gg_cgr` varchar(100) DEFAULT NULL COMMENT '采购人',
  `gg_cgdljgmc` varchar(100) DEFAULT NULL COMMENT '采购代理机构名称',
  `gg_xmbgs` int(5) DEFAULT NULL COMMENT '项目包个数',
  `gg_cgrdz` varchar(255) DEFAULT NULL COMMENT '采购人地址和联系方式',
  `gg_dljgdz` varchar(255) DEFAULT NULL COMMENT '采购代理机构地址和联系方式',
  `gg_xmlxr` varchar(255) DEFAULT NULL COMMENT '采购项目联系人姓名和电话',
  `ctime` int(10) DEFAULT NULL COMMENT '创建时间',
  `mtime` int(10) DEFAULT NULL COMMENT '修改时间',
  `state` int(1) DEFAULT '1' COMMENT ' (0有效,1有效)',
  `table_type` int(2) DEFAULT NULL COMMENT '表类型id',
  PRIMARY KEY (`gg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='公告基本信息';

/*Data for the table `gg_baseinfo` */

/*Table structure for table `gg_cg` */

DROP TABLE IF EXISTS `gg_cg`;

CREATE TABLE `gg_cg` (
  `cg_id` int(5) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `cg_gbms` text COMMENT '各包描述',
  `cg_gbzgtj` text COMMENT '各包供应商资格条件',
  `cg_fsfs` varchar(100) DEFAULT NULL COMMENT '标书发售方式',
  `cg_fsks` int(10) DEFAULT NULL COMMENT '标书发售开始时间',
  `cg_fsjs` int(10) DEFAULT NULL COMMENT '标书发售结束时间',
  `cg_wjsj` varchar(100) DEFAULT NULL COMMENT '标书文件售价',
  `cg_bsfsdd` varchar(255) DEFAULT NULL COMMENT '标书发售地点',
  `cg_tbjz` int(10) DEFAULT NULL COMMENT '投标截止时间',
  `cg_kbsj` int(10) DEFAULT NULL COMMENT '开标时间',
  `cg_tbdd` varchar(255) DEFAULT NULL COMMENT '投标地点',
  `cg_kbdd` varchar(255) DEFAULT NULL COMMENT '开标地点',
  `cg_dysj` int(10) DEFAULT NULL COMMENT '现场考察或标前答疑会时间',
  `cg_dydd` varchar(255) DEFAULT NULL COMMENT '现场考察或标前答疑会地点',
  `cg_bz` text COMMENT '备注',
  `cg_ygglj` varchar(255) DEFAULT NULL COMMENT '采购预公告链接',
  `cg_wygg` varchar(255) DEFAULT '1' COMMENT '无预公告',
  `cg_wylj` varchar(255) DEFAULT NULL COMMENT '网页链接',
  `gg_id` int(5) DEFAULT NULL COMMENT '基本信息编号',
  PRIMARY KEY (`cg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='采购公告';

/*Data for the table `gg_cg` */

/*Table structure for table `gg_cscg` */

DROP TABLE IF EXISTS `gg_cscg`;

CREATE TABLE `gg_cscg` (
  `cg_id` int(5) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `cg_gbms` text COMMENT '各包描述',
  `cg_zmcl` text COMMENT '供应商参加磋商应当具备的资格条件和应当提供的相关证明材料',
  `cg_fsfs` varchar(100) DEFAULT NULL COMMENT '磋商文件发售方式',
  `cg_fsks` int(10) DEFAULT NULL COMMENT '磋商文件发售开始时间',
  `cg_fsjs` int(10) DEFAULT NULL COMMENT '磋商文件发售结束时间',
  `cg_bmks` int(10) DEFAULT NULL COMMENT '供应商报名开始时间',
  `cg_bmjs` int(10) DEFAULT NULL COMMENT '供应商报名结束时间',
  `cg_bz1` text COMMENT '备注1',
  `cg_wjsj` varchar(100) DEFAULT NULL COMMENT '磋商文件售价',
  `cg_bmdd` varchar(255) DEFAULT NULL COMMENT '磋商文件发售及供应商报名地点',
  `cg_bmfs` varchar(255) DEFAULT NULL COMMENT '供应商报名方式',
  `cg_xykssj` int(10) DEFAULT NULL COMMENT '供应商递交响应文件开始时间',
  `cg_xyjssj` int(10) DEFAULT NULL COMMENT '供应商递交响应文件结束时间',
  `cg_djdd` varchar(255) DEFAULT NULL COMMENT '供应商递交响应文件地点',
  `cg_cjxjsj` int(10) DEFAULT NULL COMMENT '供应商接收资格审查及参加谈判时间',
  `cg_cjxjdd` varchar(255) DEFAULT '1' COMMENT '供应商接收资格审查及参加谈判地点',
  `cg_bz2` text COMMENT '备注2',
  `cg_price` varchar(255) DEFAULT NULL COMMENT '供应商交纳询价保证金的金额和缴纳方式',
  `cg_bz3` text COMMENT '备注3',
  `cg_wylj` varchar(255) DEFAULT NULL COMMENT '网页链接',
  `gg_id` int(5) DEFAULT NULL COMMENT '基本信息编号',
  PRIMARY KEY (`cg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='竞争性磋商采购公告';

/*Data for the table `gg_cscg` */

/*Table structure for table `gg_csjg` */

DROP TABLE IF EXISTS `gg_csjg`;

CREATE TABLE `gg_csjg` (
  `cg_id` int(5) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `cg_gzgg` varchar(255) DEFAULT NULL COMMENT '更正公告',
  `cg_price` varchar(255) DEFAULT NULL COMMENT '采购结果总金额',
  `cg_dbrj` int(10) DEFAULT NULL COMMENT '定标日期',
  `cg_gysbj` text COMMENT '各包中标/成交供应商名称、地址及报价',
  `cg_lxrq` int(10) DEFAULT NULL COMMENT '各包合同履行日期',
  `cg_cymd` text COMMENT '评审委员会成员名单',
  `cg_hyrlj` varchar(255) DEFAULT NULL COMMENT '候选人公告连接',
  `cg_psqk` text COMMENT '评审情况',
  `cg_wylj` varchar(255) DEFAULT NULL COMMENT '网页链接',
  `gg_id` int(5) DEFAULT NULL COMMENT '基本信息编号',
  PRIMARY KEY (`cg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='竞争性磋商结果公告';

/*Data for the table `gg_csjg` */

/*Table structure for table `gg_dic` */

DROP TABLE IF EXISTS `gg_dic`;

CREATE TABLE `gg_dic` (
  `id` int(5) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `gg_type` varchar(50) DEFAULT NULL COMMENT '公告类型',
  `gg_table` varchar(20) DEFAULT NULL COMMENT '公告类型表',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='类型字典';

/*Data for the table `gg_dic` */

insert  into `gg_dic`(`id`,`gg_type`,`gg_table`) values (1,'竞争性谈判采购公告','gg_jzxtpcg'),(2,'采购公告','gg_cg'),(3,'询价采购公告','gg_xj'),(4,'竞争性磋商采购公告','gg_cscg'),(5,'征求意见公告','gg_zqyj'),(6,'更正公告','gg_gz'),(7,'竞争性谈判结果公告','gg_tpjg'),(8,'竞争性磋商结果公告','gg_csjg'),(9,'询价结果公告','gg_xjjg'),(10,'结果公告','gg_jg');

/*Table structure for table `gg_gz` */

DROP TABLE IF EXISTS `gg_gz`;

CREATE TABLE `gg_gz` (
  `cg_id` int(5) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `cg_ygglx` int(1) DEFAULT NULL COMMENT '原公告类型',
  `cg_yggfbsj` int(10) DEFAULT NULL COMMENT '原公告发布时间',
  `cg_gznr` text COMMENT '更正文件更正事项和内容',
  `cg_ylj` varchar(255) DEFAULT NULL COMMENT '原公告链接',
  `cg_bz` text COMMENT '备注',
  `cg_wylj` varchar(255) DEFAULT NULL COMMENT '网页链接',
  `gg_id` int(5) DEFAULT NULL COMMENT '基本信息编号',
  PRIMARY KEY (`cg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='更正公告';

/*Data for the table `gg_gz` */

/*Table structure for table `gg_jg` */

DROP TABLE IF EXISTS `gg_jg`;

CREATE TABLE `gg_jg` (
  `cg_id` int(5) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `cg_gzgg` varchar(255) DEFAULT NULL COMMENT '更正公告',
  `cg_price` varchar(255) DEFAULT NULL COMMENT '采购结果总金额',
  `cg_dbrj` int(10) DEFAULT NULL COMMENT '定标日期',
  `cg_gysbj` text COMMENT '各包中标/成交供应商名称、地址及报价',
  `cg_lxrq` int(10) DEFAULT NULL COMMENT '各包合同履行日期',
  `cg_cymd` text COMMENT '评审委员会成员名单',
  `cg_hyrlj` varchar(255) DEFAULT NULL COMMENT '候选人公告连接',
  `cg_psqk` text COMMENT '评审情况',
  `cg_bz` text COMMENT '备注',
  `cg_wylj` varchar(255) DEFAULT NULL COMMENT '网页链接',
  `gg_id` int(5) DEFAULT NULL COMMENT '基本信息编号',
  PRIMARY KEY (`cg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='结果公告';

/*Data for the table `gg_jg` */

/*Table structure for table `gg_jzxtpcg` */

DROP TABLE IF EXISTS `gg_jzxtpcg`;

CREATE TABLE `gg_jzxtpcg` (
  `cg_id` int(5) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `cg_gbms` text COMMENT '各包描述',
  `cg_gbcgnr` text COMMENT '各包采购内容',
  `cg_gbjscszb` text COMMENT '各包技术参数指标',
  `cg_xgcl` text COMMENT '供应商参加谈判应当具备的资格条件和应当提供的相关证明材料',
  `cg_fsfs` varchar(255) DEFAULT NULL COMMENT '谈判文件发售方式',
  `cg_fsks` int(10) DEFAULT NULL COMMENT '谈判文件发售开始时间',
  `cg_fsjs` int(10) DEFAULT NULL COMMENT '谈判文件发售结束时间',
  `cg_bmks` int(10) DEFAULT NULL COMMENT '供应商报名开始时间',
  `cg_bmjs` int(10) DEFAULT NULL COMMENT '供应商报名结束时间',
  `cg_bz1` text COMMENT '备注1',
  `cg_wjsj` varchar(255) DEFAULT NULL COMMENT '谈判文件售价',
  `cg_bmdd` varchar(255) DEFAULT NULL COMMENT '谈判文件发售及供应商报名地点',
  `cg_bmfs` varchar(255) DEFAULT NULL COMMENT '供应商报名方式',
  `cg_xykssj` int(10) DEFAULT NULL COMMENT '供应商递交响应文件开始时间',
  `cg_xyjssj` int(10) DEFAULT NULL COMMENT '供应商递交响应文件结束时间',
  `cg_wjdd` varchar(255) DEFAULT NULL COMMENT '供应商递交响应文件地点',
  `cg_tpsj` int(10) DEFAULT NULL COMMENT '供应商接受资格审查及参加谈判时间',
  `cg_tpdd` varchar(255) DEFAULT NULL COMMENT '供应商接受资格审查及参加谈判地点',
  `cg_bz2` text COMMENT '备注2',
  `cg_price` varchar(255) DEFAULT NULL COMMENT '供应商交纳谈判保证金的金额和缴纳方式',
  `cg_bz3` text COMMENT '备注3',
  `cg_ygglj` varchar(255) DEFAULT NULL COMMENT '采购预公告链接',
  `cg_wylj` varchar(255) DEFAULT NULL COMMENT '网页链接',
  `gg_id` int(5) DEFAULT NULL COMMENT '基本信息编号',
  PRIMARY KEY (`cg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='竞争性谈判采购公告';

/*Data for the table `gg_jzxtpcg` */

/*Table structure for table `gg_tpjg` */

DROP TABLE IF EXISTS `gg_tpjg`;

CREATE TABLE `gg_tpjg` (
  `cg_id` int(5) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `cg_gzgg` varchar(255) DEFAULT NULL COMMENT '更正公告',
  `cg_price` varchar(255) DEFAULT NULL COMMENT '采购结果总金额',
  `cg_dbrj` int(10) DEFAULT NULL COMMENT '定标日期',
  `cg_gysbj` text COMMENT '各包中标/成交供应商名称、地址及报价',
  `cg_lxrq` int(10) DEFAULT NULL COMMENT '各包合同履行日期',
  `cg_cymd` text COMMENT '评审委员会成员名单',
  `cg_hyrlj` varchar(255) DEFAULT NULL COMMENT '候选人公告连接',
  `cg_psqk` text COMMENT '评审情况',
  `cg_bz` text COMMENT '备注',
  `cg_wylj` varchar(255) DEFAULT NULL COMMENT '网页链接',
  `gg_id` int(5) DEFAULT NULL COMMENT '基本信息编号',
  PRIMARY KEY (`cg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='竞争性谈判结果公告';

/*Data for the table `gg_tpjg` */

/*Table structure for table `gg_xj` */

DROP TABLE IF EXISTS `gg_xj`;

CREATE TABLE `gg_xj` (
  `cg_id` int(5) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `cg_gbms` text COMMENT '各包描述',
  `cg_zmcl` text COMMENT '供应商参加询价应当具备的资格条件和应当提供的相关证明材料',
  `cg_fsfs` varchar(255) DEFAULT NULL COMMENT '文件发售方式',
  `cg_fsks` int(10) DEFAULT NULL COMMENT '询价文件发售开始时间',
  `cg_fsjs` int(10) DEFAULT NULL COMMENT '询价文件发售结束时间',
  `cg_bmks` int(10) DEFAULT NULL COMMENT '供应商报名开始时间',
  `cg_bmjs` int(10) DEFAULT NULL COMMENT '供应商报名结束时间',
  `cg_bz1` text COMMENT '备注1',
  `cg_bmdd` varchar(255) DEFAULT NULL COMMENT '询价文件发售及供应商报名地点',
  `cg_wjsj` varchar(255) DEFAULT NULL COMMENT '采购文件售价',
  `cg_fsdd` varchar(255) DEFAULT NULL COMMENT '采购文件发售地点',
  `cg_bmfs` varchar(255) DEFAULT NULL COMMENT '供应商报名方式',
  `cg_xykssj` int(10) DEFAULT NULL COMMENT '供应商递交响应文件开始时间',
  `cg_xyjssj` int(10) DEFAULT NULL COMMENT '供应商递交响应文件结束时间',
  `cg_djdd` varchar(255) DEFAULT NULL COMMENT '供应商递交响应文件地点',
  `cg_cjxjsj` int(10) DEFAULT NULL COMMENT '供应商接收资格审查及参加询价时间',
  `cg_cjxjdd` varchar(255) DEFAULT NULL COMMENT '供应商接收资格审查及参加询价地点',
  `cg_bz2` text COMMENT '备注2',
  `cg_price` varchar(255) DEFAULT NULL COMMENT '供应商交纳询价保证金的金额和缴纳方式',
  `cg_bz3` text COMMENT '备注3',
  `cg_ygglj` varchar(255) DEFAULT NULL COMMENT '采购预公告链接',
  `cg_wylj` varchar(255) DEFAULT NULL COMMENT '网页链接',
  `gg_id` int(5) DEFAULT NULL COMMENT '基本信息编号',
  PRIMARY KEY (`cg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='询价采购公告';

/*Data for the table `gg_xj` */

/*Table structure for table `gg_xjjg` */

DROP TABLE IF EXISTS `gg_xjjg`;

CREATE TABLE `gg_xjjg` (
  `cg_id` int(5) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `cg_gzgg` varchar(255) DEFAULT NULL COMMENT '更正公告',
  `cg_price` varchar(255) DEFAULT NULL COMMENT '采购结果总金额',
  `cg_dbrj` int(10) DEFAULT NULL COMMENT '定标日期',
  `cg_gysbj` text COMMENT '各包中标/成交供应商名称、地址及报价',
  `cg_lxrq` int(10) DEFAULT NULL COMMENT '各包合同履行日期',
  `cg_cymd` text COMMENT '评审委员会成员名单',
  `cg_hyrlj` varchar(255) DEFAULT NULL COMMENT '候选人公告连接',
  `cg_psqk` text COMMENT '评审情况',
  `cg_bz` text COMMENT '备注',
  `cg_wylj` varchar(255) DEFAULT NULL COMMENT '网页链接',
  `gg_id` int(5) DEFAULT NULL COMMENT '基本信息编号',
  PRIMARY KEY (`cg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='询价结果公告';

/*Data for the table `gg_xjjg` */

/*Table structure for table `gg_zqyj` */

DROP TABLE IF EXISTS `gg_zqyj`;

CREATE TABLE `gg_zqyj` (
  `cg_id` int(5) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `cg_ggjssj` int(10) DEFAULT NULL COMMENT '公告截至时间',
  `cg_gbcgnr` text COMMENT '各包采购内容',
  `cg_zgtj` text COMMENT '各包供应商资格条件',
  `cg_gbjscszb` text COMMENT '各包技术参数指标',
  `cg_qtnr` text COMMENT '其它内容',
  `cg_bz` text COMMENT '备注',
  `cg_wylj` varchar(255) DEFAULT NULL COMMENT '网页链接',
  `gg_id` int(5) DEFAULT NULL COMMENT '基本信息编号',
  PRIMARY KEY (`cg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='征求意见公告';

/*Data for the table `gg_zqyj` */

/*Table structure for table `is_read` */

DROP TABLE IF EXISTS `is_read`;

CREATE TABLE `is_read` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `uid` int(5) DEFAULT NULL COMMENT '用户id',
  `gg_id` int(5) DEFAULT NULL COMMENT '基本信息编号',
  `state` int(1) DEFAULT NULL COMMENT '0未读，1已读',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='招标已读表';

/*Data for the table `is_read` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
