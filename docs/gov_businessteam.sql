/*
SQLyog Trial v12.01 (64 bit)
MySQL - 5.5.28 : Database - gov_businessteam
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`gov_businessteam` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `gov_businessteam`;

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

/*Table structure for table `comment_isread` */

DROP TABLE IF EXISTS `comment_isread`;

CREATE TABLE `comment_isread` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `uid` int(5) DEFAULT NULL COMMENT '用户id',
  `cid` int(5) DEFAULT NULL COMMENT '商务进度id',
  `state` int(1) DEFAULT NULL COMMENT '0未读，1已读',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='进度已读表';

/*Data for the table `comment_isread` */

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

/*Table structure for table `project` */

DROP TABLE IF EXISTS `project`;

CREATE TABLE `project` (
  `jid` int(5) NOT NULL AUTO_INCREMENT COMMENT '项目id',
  `typekey` int(1) DEFAULT NULL COMMENT '类型编码',
  `did` int(6) DEFAULT NULL COMMENT '区域id',
  `uid` int(5) DEFAULT NULL COMMENT '商务经理id',
  `pjd` varchar(255) DEFAULT NULL COMMENT '进度',
  `pdbsw` text COMMENT '待办事务',
  `pjlzj` text COMMENT '结论总结',
  `ctime` int(10) DEFAULT NULL COMMENT '创建时间',
  `mtime` int(10) DEFAULT NULL COMMENT '修改时间',
  `state` int(1) DEFAULT NULL COMMENT '状态（0作废，1进行）',
  PRIMARY KEY (`jid`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COMMENT='商务项目表';

/*Data for the table `project` */

insert  into `project`(`jid`,`typekey`,`did`,`uid`,`pjd`,`pdbsw`,`pjlzj`,`ctime`,`mtime`,`state`) values (1,0,510322,1000024,'顺利完成发证','提取增量数据','',NULL,NULL,1),(2,0,511425,1000025,'即将发证\r\n','试点以外数据补录\r\n',NULL,NULL,NULL,1),(3,0,511423,1000025,'外业调查总共完成4479幢，剩余23991幢\r\n','数据整合\r\n','',NULL,NULL,1),(4,0,510923,1000024,'城区数据已完成，发证中','整个大英县的数据整合','在摸索中前进，总结经验；对整个不动产数据整合做一个梳理，并整理一套数据整合的学习参考资料。\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n',NULL,NULL,1),(5,0,511421,1000023,'前期的数据收集与整合\r\n\r\n\r\n\r\n\r\n','仁寿县的数据整合\r\n\r\n\r\n\r\n\r\n','',NULL,NULL,1),(6,0,510904,1000024,'乡镇空间数据的收集中，增量数据的收集中；城区数据还在修改。\r\n\r\n\r\n\r\n\r\n\r\n\r\n','整个安居区的数据整合，现在优先城区数据整合，在下周把整个城区的空间数据交由超图公司入库。\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n','在整个数据整合的过程中还存在一些问题，对人员的培训还有所欠缺\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n',NULL,NULL,1),(7,0,513400,1000022,NULL,NULL,NULL,1473150170,NULL,1),(8,0,510682,1000022,NULL,NULL,NULL,1473407366,NULL,1),(9,0,542421,1000022,NULL,NULL,NULL,1473410944,NULL,1),(10,0,511324,1000022,NULL,NULL,NULL,1473411186,NULL,1),(11,0,510122,1000022,NULL,NULL,NULL,1473411423,NULL,1),(12,0,510400,1000022,NULL,NULL,NULL,1473411667,NULL,1),(13,0,513424,1000022,NULL,NULL,NULL,1473411927,NULL,1),(14,0,510800,1000003,NULL,NULL,NULL,1473413723,NULL,1),(17,0,511400,1000003,NULL,NULL,NULL,1473414466,NULL,1),(22,0,510700,1000022,NULL,NULL,NULL,1474253443,NULL,1);

/*Table structure for table `project_comment` */

DROP TABLE IF EXISTS `project_comment`;

CREATE TABLE `project_comment` (
  `cid` int(5) NOT NULL AUTO_INCREMENT,
  `jid` int(5) DEFAULT NULL COMMENT '项目id',
  `content` text COMMENT '发布内容',
  `uid` int(5) DEFAULT NULL COMMENT '发布人id',
  `jjfa` text COMMENT '解决方案',
  `ctime` int(10) DEFAULT NULL COMMENT '发布时间',
  `mtime` int(10) DEFAULT NULL COMMENT '修改时间',
  `state` int(1) DEFAULT NULL COMMENT '0无效，1有效',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8 COMMENT='商务团队进度';

/*Data for the table `project_comment` */

insert  into `project_comment`(`cid`,`jid`,`content`,`uid`,`jjfa`,`ctime`,`mtime`,`state`) values (1,2,'补录一些数据\n昨天下午离开青神，到富顺加班',1000025,NULL,1472116573,0,2),(2,1,'多次联系张磊，麻烦他远程协助，他没有回应，目前国土增量数据未完成，正在寻找解决办法，\n这边超图人员对业务不是很熟悉，我们的数据都给安居的高超在进行最终入库处理',1000025,NULL,1472117519,0,2),(3,3,'今天完成自然幢 外调1654宗，达到每人每天200宗的要求，并抽查后没有问题，目前在匹配相应宗地号',1000025,NULL,1472126527,0,2),(4,1,'周一与超图和舒主任一起协商老服务器关闭问题，并在关闭当日提取增量数据，处理完增量数据后交给超图人员，然后对增量数据的图形数据进行 进一步的处理',1000025,NULL,1472203607,0,2),(5,3,'洪雅调情况4479幢，目前还剩余21745，外调工作安排在9月1号全部完成。',1000025,NULL,1472263660,0,2),(6,2,'听说即将招标，目前具体情况不明确',1000025,NULL,1472263747,0,2),(7,2,'处理试点以外的数据',1000025,NULL,1472472683,0,2),(8,3,'整合24,25,26,27日全部数据，并对应自然幢所在宗地的宗地号进行录入，共计7617，剩余20853',1000025,NULL,1472472876,0,2),(9,2,'处理后面民众办证问题',1000025,NULL,1472556170,0,2),(27,2,'补昨天的：处理后期办证图形问题',1000025,NULL,1472696295,0,2),(28,6,'试点区域发证完成，整个安居区中标拿下，现在进行整个安居区的数据整合，优先城区数据整合；其余乡镇场镇的数据整合需要协调数据。',1000023,NULL,1472696614,0,2),(34,6,'城区数据修改，明天拿到乡镇的空间数据，并且去房管局拷贝增量数据一起整合。\n对于这边不动产正式运行的尴尬事项尽早解决。',1000023,NULL,1472734963,0,2),(35,2,'下周一去处理后续事项',1000025,NULL,1472744242,0,2),(36,3,'整合全部数据，筛选问题',1000025,NULL,1472744394,0,2),(39,6,'乡镇的空间数据图形还没有拿到，因为房管和国土之间的 矛盾增量数据也暂时拿不到。',1000023,NULL,1472806592,0,2),(40,1,'抵押注销增量总量7588条已完成5400条',1000024,NULL,1472811512,0,2),(41,3,'数据整理完成，整理出来需要测绘的自然幢等',1000025,NULL,1472819617,0,2),(42,1,'抵押注销完成，发现新问题预售预告楼盘表未迁移',1000024,NULL,1472991899,0,2),(43,1,'数据内容过长传不上来',1000024,NULL,1473080132,0,2),(44,1,'发证顺利，暂无其他问题，主要问题是处理增量以及试点外的数据需要处理。\n已处理抵押注销，在处理查封，待处理预告预售和转移增量。\n',1000024,NULL,1473080176,0,2),(45,6,'空间数据已经基本处理完成，城区修补测需要尽快完成；属性数据还在整改中。',1000023,NULL,1473080287,0,2),(46,3,'完成自然幢外调28470宗，从办证窗口接收新的宗地和自然幢攻击33宗，明天继续去窗口上与余辉商量下一步具体事项',1000025,NULL,1473082375,0,2),(47,7,'<p>与当地马局长进行沟通和交流，结论是已经有人入驻作业了，目前数据整合事宜无法进入。</p>',1000022,NULL,1473150369,0,1),(48,1,'<p><br/></p><br/><p style=\"margin-left:28px\"><span style=\"font-family: 宋体;\">发证顺利，暂无其他问题，主要问题是处理增量以及试点外的数据需要处理。</span></p><p style=\"margin-left:28px\"><span style=\"font-family: 宋体;\">已处理抵押注销，在处理查封，待处理预告预售和转移增量。</span></p><p style=\"margin-left:28px\"><span style=\"font-family: 宋体;\">轮候查封、预查封有几十条需要补录。</span></p><p><br/></p>',1000024,NULL,1473157334,0,2),(49,2,'<p>青神局方，由于收件过多，人员缺少，难以应对，故，需要我们安排人手长期与该地，协助补录工作</p>',1000025,NULL,1473160425,0,2),(50,3,'<p>把小区以外的自然幢进行对比与修改，查询220幢，修改155幢，剩余需要测绘</p>',1000025,NULL,1473162502,0,2),(51,6,'<p><strong><span style=\"font-size:24px;font-family:宋体\">（一）、空间数据</span></strong></p><p><strong><span style=\"font-size:19px;font-family:宋体\">一、行政区</span></strong></p><p style=\"margin-left:24px\"><span style=\";font-family:宋体\">行政区空间图形处理完成。</span></p><p><strong><span style=\"font-size:19px;font-family:宋体\">二、地籍区</span></strong></p><p style=\"margin-left:24px\"><span style=\"font-family:宋体\">地籍区空间图形处理完成。</span></p><p><strong><span style=\"font-size:19px;font-family:宋体\">三、地籍子区</span></strong></p><p style=\"margin-left:24px\"><span style=\"font-family:宋体\">地籍子区图形处理完成。</span></p><p><strong><span style=\"font-size:19px;font-family:宋体\">四、宗地</span></strong></p><p style=\"text-indent:28px\"><font face=\"宋体\">乡镇宗地和自然幢还存在一些问题，正在改图；城区因原始数据有点老，所以存在补测，现目前补测还没正式开始。</font></p><p><strong><span style=\"font-size:19px;font-family:宋体\">五、自然幢</span></strong></p><p style=\"text-indent:28px\"><font face=\"宋体\">城区需要补测部分幢图形，乡镇幢图需要修改部分。</font></p><p><strong><span style=\"font-size:24px;font-family:宋体\">（二）、属性数据</span></strong></p><p><strong><span style=\"font-size:19px;font-family:宋体\">一、国土属性数据</span></strong></p><p style=\"margin-left:28px\"><span style=\";font-family:宋体\">国土属性数据整合完成。</span></p><p><strong><span style=\"font-size:19px;font-family:宋体\">二、房管属性数据</span></strong></p><p style=\"margin-left:28px\"><font face=\"宋体\">现有的属性数据整合完成，增量数据现在拿不到。</font></p><p><strong><span style=\"font-size:24px;font-family:宋体\">（三）、数据关联</span></strong></p><p style=\"margin-left:28px\"><font face=\"宋体\">还有部分问题需要处理。</font></p><p><strong><span style=\"font-size:24px;font-family:宋体\">（四）、待办事项</span></strong></p><p style=\"margin-left:28px\"><font face=\"宋体\">城区图形的补测，林权数据的确认，乡镇图形的完善，乡镇数据的关联</font></p><p><strong><span style=\"font-size:24px;font-family:宋体\">（五）、情况</span></strong></p><p style=\"margin-left:28px\"><font face=\"宋体\">城区的修补测尽快开始，明天人过来之后再看安排；一个丢政务中心窗口的人员尽快到位，这个问题超图那边还是不安排人过来，我这边抽不出手来。</font></p><p><br/></p>',1000023,NULL,1473169498,0,2),(52,6,'<p><strong><span style=\"font-size:24px;font-family:宋体\">（一）、空间数据</span></strong></p><p><strong><span style=\"font-size:19px;font-family:宋体\">一、行政区</span></strong></p><p style=\"margin-left:24px\"><span style=\";font-family:宋体\">行政区空间图形处理完成。</span></p><p><strong><span style=\"font-size:19px;font-family:宋体\">二、地籍区</span></strong></p><p style=\"margin-left:24px\"><span style=\"font-family:宋体\">地籍区空间图形处理完成。</span></p><p><strong><span style=\"font-size:19px;font-family:宋体\">三、地籍子区</span></strong></p><p style=\"margin-left:24px\"><span style=\"font-family:宋体\">地籍子区图形处理完成。</span></p><p><strong><span style=\"font-size:19px;font-family:宋体\">四、宗地</span></strong></p><p style=\"text-indent:28px\"><font face=\"宋体\">乡镇宗地图处理中。</font></p><p><strong><span style=\"font-size:19px;font-family:宋体\">五、自然幢</span></strong></p><p style=\"text-indent:28px\"><font face=\"宋体\">乡镇自然幢图形处理中；城区修补测还未正式进行。</font></p><p><strong><span style=\"font-size:24px;font-family:宋体\">（二）、属性数据</span></strong></p><p><strong><span style=\"font-size:19px;font-family:宋体\">一、国土属性数据</span></strong></p><p style=\"margin-left:28px\"><span style=\";font-family:宋体\">国土属性数据整合完成。</span></p><p><strong><span style=\"font-size:19px;font-family:宋体\">二、房管属性数据</span></strong></p><p style=\"margin-left:28px\"><span style=\";font-family:宋体\">所有数据整合完成。</span></p><p><strong><span style=\"font-size:24px;font-family:宋体\">（三）、数据关联</span></strong></p><p style=\"margin-left:28px\"><font face=\"宋体\">关联问题还在修改。</font></p><p><strong><span style=\"font-size:24px;font-family:宋体\">（四）、待办事项</span></strong></p><p style=\"margin-left:28px\"><font face=\"宋体\">城区修补测；全区空间图形的处理；全区属性数据与空间数据的关联；户型图的解密。</font></p><p><strong><span style=\"font-size:24px;font-family:宋体\">（五）、情况</span></strong></p><p style=\"margin-left:28px\"><font face=\"宋体\">城区修补测这一块还没有安排人过来正式开始测，只是一个打前哨的过来看情况；超图平台问题还在吃了中，正在跟进；户型图的解密需要加快，白局只给了一周的时间。</font></p><p><br/></p>',1000023,NULL,1473247808,0,2),(53,3,'<p>校对自然幢1321，大部分需要测绘，基本上对不上，需要实地考察</p>',1000025,NULL,1473260874,0,2),(54,3,'<p>按照今天安排的步骤继续后面的工作，窗口与这边办公室结合共同完善发证工作</p>',1000025,NULL,1473335184,0,2),(55,6,'<p><strong><span style=\"font-size:24px;font-family:宋体\">（一）、空间数据</span></strong></p><p><strong><span style=\"font-size:19px;font-family:宋体\">一、行政区</span></strong></p><p style=\"margin-left:24px\"><span style=\";font-family:宋体\">行政区空间图形处理完成。</span></p><p><strong><span style=\"font-size:19px;font-family:宋体\">二、地籍区</span></strong></p><p style=\"margin-left:24px\"><span style=\"font-family:宋体\">地籍区空间图形处理完成。</span></p><p><strong><span style=\"font-size:19px;font-family:宋体\">三、地籍子区</span></strong></p><p style=\"margin-left:24px\"><span style=\"font-family:宋体\">地籍子区图形处理完成。</span></p><p><strong><span style=\"font-size:19px;font-family:宋体\">四、宗地</span></strong></p><p style=\"text-indent:28px\"><font face=\"宋体\">乡镇宗地问题统一处理中。</font></p><p><strong><span style=\"font-size:19px;font-family:宋体\">五、自然幢</span></strong></p><p style=\"text-indent:28px\"><font face=\"宋体\">城区补测未开始，乡镇自然幢空间爱你图形处理中。</font></p><p><strong><span style=\"font-size:24px;font-family:宋体\">（二）、属性数据</span></strong></p><p><strong><span style=\"font-size:19px;font-family:宋体\">一、国土属性数据</span></strong></p><p style=\"margin-left:28px\"><span style=\";font-family:宋体\">国土属性数据整合完成。</span></p><p><strong><span style=\"font-size:19px;font-family:宋体\">二、房管属性数据</span></strong></p><p style=\"margin-left:28px\"><span style=\";font-family:宋体\">所有数据整合完成，增量数据没有拿到。</span></p><p><strong><span style=\"font-size:24px;font-family:宋体\">（三）、数据关联</span></strong></p><p style=\"margin-left:28px\"><font face=\"宋体\">关联问题还在处理，与空间数据的关联还需要等空间数据完成了再关联。</font></p><p><strong><span style=\"font-size:24px;font-family:宋体\">（四）、待办事项</span></strong></p><p style=\"margin-left:28px\"><font face=\"宋体\">城区空间图形的补测，乡镇空间图形的修改，属性与空间的关联，林权数据的挖掘。</font></p><p><strong><span style=\"font-size:24px;font-family:宋体\">（五）、情况</span></strong></p><p style=\"margin-left: 28px;\"><font face=\"宋体\">昨天软件平台的问题已经处理，还是需要一个人尽快来把我替换处理，不然真不好进行下步工作。</font></p>',1000023,NULL,1473340066,0,2),(56,8,'跟当局负责不动产项目招投标的蒋主任沟通，蒋主任将什邡的事宜介绍的比较详细和清楚，我方输出了方案书和报价单，近两次沟通过程中，发现蒋主任没有明确对我方进行认可。当局分管副局长 高荣辉 对此事没有明确表态，因此可推断什邡市在不动产数据整合这个事情上并没有明确清晰的意向单位。基于此，我建议下一步先跟蒋主任约时间面谈，对不动产登记局是否已建立、招投标多久开始、方案书是否符合要求三方面进行确认，若不动产登记局确认已建立，并明确高荣辉为局长，立刻约高局对该项目上再一次表明我方的能力和信心<br/>',1000022,NULL,1473410928,0,1),(57,9,'跟当局益西顿珠局长进行了会议探讨，将方案书和报价单进行了提交，并顺利得到了那曲县在该项目上的心理价格(650万)，再次输出报价单后，当局举行了会议，对报价和方案进行了评审，目前已通过，款项已到位。下一步对款项进行核实后，再根据对那曲县的预算进行再一次输出，并确定那曲县我方处理的方式和成本。',1000022,NULL,1473411169,0,1),(58,10,'已将方案书发送给当局苟股长，苟股长认为报价较高，在对款项进行了讨论和剥离后，对最后得出的700W+的方案苟股长也表示了难以接受。目前从超图方得到的信息是，超图已入场开始作业。在联系了中间人，曹总和刘总之后，该事宜并未得到回复，预计该地区该项目已丢失。唯一的方式是与超图方谈合作。',1000022,NULL,1473411325,0,1),(59,11,'目前已拷贝到房管和国土数据，已分析出评估报告，目前已输出给江哥，局方要求输出方案和报价，目前由于必要条件不足，比如测量面积、该标包括项目等，导致无法输出。目前江哥已和局方达成一致，拿到了200W的分包，等待入场通知。',1000022,NULL,1473411578,0,1),(60,12,'和当局余局长沟通过，安排了罗燕罗主任对业务和招标事宜进行了沟通，目前超图公司已提前介入，并且已输出了需求论证。由于吕建平吕局长对该地区的指示为低价中标，但已错过了购买标书的时间，江哥联系上了负责该地区招投标的代理公司，目前只能通过操作已报名公司进行低价中标。',1000022,NULL,1473411843,0,1),(61,13,'目前已通过退休的王书记约见了黄县长和卢局长，目前卢局长已告知当地不动产项目的决定权在州上。现在由于王会长在此事上的不慎，导致无法见到相关领导。下一步计划只能观时待变，通过王会长在上层的沟通建立明确后，再进行业务对接。<p></p>',1000022,NULL,1473412212,0,1),(62,6,'<p style=\"text-align: left;\"><strong><span style=\"font-size:24px;font-family:宋体\">（一）、空间数据</span></strong><br/></p><p><strong><span style=\"font-size:19px;font-family:宋体\">一、行政区</span></strong></p><p style=\"margin-left:24px\"><span style=\";font-family:宋体\">行政区空间图形处理完成。</span></p><p><strong><span style=\"font-size:19px;font-family:宋体\">二、地籍区</span></strong></p><p style=\"margin-left:24px\"><span style=\"font-family:宋体\">地籍区空间图形处理完成。</span></p><p><strong><span style=\"font-size:19px;font-family:宋体\">三、地籍子区</span></strong></p><p style=\"margin-left:24px\"><span style=\"font-family:宋体\">地籍子区图形处理完成。</span></p><p><strong><span style=\"font-size:19px;font-family:宋体\">四、宗地</span></strong></p><p style=\"text-indent:28px\">乡镇宗地信息处理中，城区宗地补测信息完善中。<br/></p><p><strong><span style=\"font-size:19px;font-family:宋体\">五、自然幢</span></strong></p><p style=\"text-indent:28px\">城区自然幢补测还未进行，乡镇自然幢处理中。<br/></p><p><strong><span style=\"font-size:24px;font-family:宋体\">（二）、属性数据</span></strong></p><p><strong><span style=\"font-size:19px;font-family:宋体\">一、国土属性数据</span></strong></p><p style=\"margin-left:28px\"><span style=\";font-family:宋体\">国土属性数据整合完成。</span></p><p><strong><span style=\"font-size:19px;font-family:宋体\">二、房管属性数据</span></strong></p><p style=\"margin-left:28px\"><span style=\"font-family:宋体\">属性数据处理完成，还有部分问题在处理中。</span></p><p><strong><span style=\"font-size:24px;font-family:宋体\">（三）、数据关联</span></strong></p><p style=\"margin-left:28px\"><span style=\"font-family:宋体\">属性与空间的关联还未完成。</span></p><p><strong><span style=\"font-size:24px;font-family:宋体\">（四）、待办事项</span></strong></p><p style=\"margin-left:28px\"><span style=\"font-family:宋体\">城区修补测，乡镇空间数据的处理，属性数据与空间数据的关联。</span></p><p><strong><span style=\"font-size:24px;font-family:宋体\">（五）、情况</span></strong></p><p style=\"margin-left:28px\">城区空间数据还未入库，林权数据暂时还没搞清楚，户型图的解密需要加快。<br/></p><p><br/></p>',1000023,NULL,1473413930,0,2),(63,14,'中间人曹总找的介绍人李亮，带领见@<p></p><a href=\"index.php?c=Showphone&a=detail&id=1249\">樊恩来(党委委员、局党组书记、局长)</a>，意思是我们把介绍信开过去，就马上安排其他其他工作，但是根据和下面人员沟通情况，广元目前平台统一采购然后下放到每个地方，采用苍穹的平台，数据整合目前是苍穹在做，利州区为广元主城区，意思是利州区的工作由市上统一安排，其他区由每个区自己找作业队伍，但是大部分都是苍穹的地方，领导建议我们去旺苍，苍溪等地，据了解，这些地方是鱼鳞图在作业。而且我们在广元的身份应该是二院，但是中间人用信息中心和广元在沟通',1000003,'等待李亮和领导沟通，然后开介绍信过去，但是希望不大。',1473414292,0,1),(64,17,'和刘书记沟通多次，最近一次联系时间是2016年9月8日，二院评分标准已经修改完成，并且发送至刘书记邮箱，已经和刘书记沟通，后面招投标金额上限142万，之前2个合同总金额18万，每个合同9万，已经和刘书记沟通，已经上党组讨论形成决议，必须用超图的名义和那边签约，温西磊在处理。需求论证的意思是刘书记他们来处理，如果有问题我们在安排，招标代理机构由他们交易中心来处理，一共3个专家，刘书记占一个名额，其他2个他们来选择。<br/>',1000003,'等待青神县挂网。',1473415280,0,1),(65,3,'<p>安排苏田在窗口上协助处理发证过程中遇到的事项</p>',1000025,NULL,1473520065,0,2),(66,3,'<p>今日</p><p>检查（3270）</p><p>需要测绘（2641）</p><p>处理完成（329）</p><p>自然幢</p>',1000025,NULL,1473684820,0,2),(67,6,'<p style=\"padding: 0px; margin-top: 0px; margin-bottom: 10px; color: rgb(161, 161, 161); font-family: ',1000023,NULL,1473690013,0,2),(68,1,'<p>目前暂无其他问题，主要问题是在处理增量上，增量已处理60%。同时在处理身份证问题，今天处理了1200条。还有个问题就是关于测量什么时候进场是否确认？<br/></p>',1000024,NULL,1473692707,0,2),(72,8,'跟当局负责不动产项目招投标负责人@<a href=\"index.php?c=Showphone&a=detail&id=823\">蒋明建(地籍管理科)</a>进行面谈，目前已确认什邡市不动产登记局已正式挂牌，@<a href=\"index.php?c=Showphone&a=detail&id=818\">高荣辉(副局长)</a>任不动产登记局局长。在什邡市不动产登记项目上，蒋主任已明确表态成都瑞景公司会介入，目前发证系统正是使用的成都瑞景开发的平台。测绘事宜上面，总价320W左右，测绘面积大约40平方公里，已经委婉告诉我们不要介入，该标段已另有安排。目前数据整合方面，蒋主任目前表示非常希望我们参与，但由于托亲托故的人太多，因此他希望我们从上能解决问题最好。',1000022,'约见高荣辉局长，解决两个事情，1、表示可以通过信息中心发函的方式证明我们的身份，表示我们正规军身份；2、在需求论证上，表示我们能够提供支撑',1473753407,0,1),(73,1,'<p>今日工作内容为修改身份证号码处理了1200条<br/></p>',1000024,NULL,1473767452,0,2),(74,3,'<p>接收前台cad数据40宗，接收前台问题数据94条，处理72条，剩下22条待进一步确认</p>',1000025,NULL,1473769596,0,2),(75,6,'<p style=\"text-align: left;\"><strong><span style=\"font-size:24px;font-family:宋体\">（一）、空间数据</span></strong></p><p><strong><span style=\"font-size:19px;font-family:宋体\">一、行政区</span></strong></p><p style=\"margin-left:24px\"><span style=\";font-family:宋体\">行政区空间图形处理完成。</span></p><p><strong><span style=\"font-size:19px;font-family:宋体\">二、地籍区</span></strong></p><p style=\"margin-left:24px\"><span style=\"font-family:宋体\">地籍区空间图形处理完成。</span></p><p><strong><span style=\"font-size:19px;font-family:宋体\">三、地籍子区</span></strong></p><p style=\"margin-left:24px\"><span style=\"font-family:宋体\">地籍子区图形处理完成。</span></p><p><strong><span style=\"font-size:19px;font-family:宋体\">四、宗地</span></strong></p><p style=\"text-indent:28px\"><font face=\"宋体\">乡镇宗地空间图形处理完成。</font></p><p><strong><span style=\"font-size:19px;font-family:宋体\">五、自然幢</span></strong></p><p style=\"text-indent:28px\"><font face=\"宋体\">乡镇自然幢空间图形处理60%。</font></p><p><strong><span style=\"font-size:24px;font-family:宋体\">（二）、属性数据</span></strong></p><p><strong><span style=\"font-size:19px;font-family:宋体\">一、国土属性数据</span></strong></p><p style=\"margin-left:28px\"><span style=\";font-family:宋体\">国土属性数据整合完成。</span></p><p><strong><span style=\"font-size:19px;font-family:宋体\">二、房管属性数据</span></strong></p><p style=\"margin-left:28px\"><font face=\"宋体\">房管数据修改70%。</font></p><p><strong><span style=\"font-size:24px;font-family:宋体\">（三）、数据关联</span></strong></p><p style=\"margin-left:28px\"><font face=\"宋体\">空间与属性的数据关联暂时还未开始。</font></p><p><strong><span style=\"font-size:24px;font-family:宋体\">（四）、待办事项</span></strong></p><p style=\"margin-left:28px\"><font face=\"宋体\">林权数据整合，城区修补测的完成，乡镇数据的完成，数据关联。</font></p><p><strong><span style=\"font-size:24px;font-family:宋体\">（五）、情况</span></strong></p><p style=\"margin-left:28px\"><font face=\"宋体\">林权的做法已经确认，参照大英的做法；修补测的进度稍微有点慢了。</font></p><p><br/></p>',1000023,NULL,1473775552,0,2),(77,6,'<p><strong><span style=\"font-size:24px;font-family:宋体\">（一）、空间数据</span></strong></p><p><strong><span style=\"font-size:19px;font-family:宋体\">一、行政区</span></strong></p><p style=\"margin-left:24px\"><span style=\";font-family:宋体\">行政区空间图形处理完成。</span></p><p><strong><span style=\"font-size:19px;font-family:宋体\">二、地籍区</span></strong></p><p style=\"margin-left:24px\"><span style=\"font-family:宋体\">地籍区空间图形处理完成。</span></p><p><strong><span style=\"font-size:19px;font-family:宋体\">三、地籍子区</span></strong></p><p style=\"margin-left:24px\"><span style=\"font-family:宋体\">地籍子区图形处理完成。</span></p><p><strong><span style=\"font-size:19px;font-family:宋体\">四、宗地</span></strong></p><p style=\"text-indent:28px\"><font face=\"宋体\">全区宗地空间图形处理完成。</font></p><p><strong><span style=\"font-size:19px;font-family:宋体\">五、自然幢</span></strong></p><p style=\"text-indent:28px\"><font face=\"宋体\">城区自然幢空间图形处理完成，乡镇自然幢空间图形处理70%。</font></p><p><strong><span style=\"font-size:24px;font-family:宋体\">（二）、属性数据</span></strong></p><p><strong><span style=\"font-size:19px;font-family:宋体\">一、国土属性数据</span></strong></p><p style=\"margin-left:28px\"><span style=\";font-family:宋体\">国土属性数据整合完成。</span></p><p><strong><span style=\"font-size:19px;font-family:宋体\">二、房管属性数据</span></strong></p><p style=\"margin-left:28px\"><font face=\"宋体\">现有的房管属性数据处理完成，增量数据还是没有拿到。</font></p><p><strong><span style=\"font-size:24px;font-family:宋体\">（三）、数据关联</span></strong></p><p style=\"margin-left:28px\"><font face=\"宋体\">空间与属性的数据关联还未开始，需要空间数据处理完成才能进行。</font></p><p><strong><span style=\"font-size:24px;font-family:宋体\">（四）、待办事项</span></strong></p><p style=\"margin-left:28px\"><font face=\"宋体\">乡镇空间图形的处理，城区的修补测，数据关联；林权数据的处理。</font></p><p><strong><span style=\"font-size:24px;font-family:宋体\">（五）、情况</span></strong></p><p style=\"margin-left: 28px;\"><font face=\"宋体\">城区空间数据暂时还未入库，城区修补测的速度还是太慢了。</font></p>',1000023,NULL,1473862438,0,2),(78,3,'<p>核对自然幢1452，内业修改233，其余需要测绘<br/></p><p><br/></p>',1000025,NULL,1473865945,0,2),(79,22,'2016年9月18日到绵阳市政府服务中心进行考试，考试内容为数据挖掘、平台流程办理两部分，由于在数据挖掘考试中我方工作人员手机响了，因此取消该项分数，平台流程办理考试由于没有平台，几乎没有得分，最终前三名为：中地六合、超图、地质测绘院。我方没有名次。会后，超图方主动找到我们进行业务合作的谈判。<p></p>',1000022,'本周内约超图商务人员进行合作方面的谈判',1474253670,0,1),(80,1,'<p>主要就是对昨天舒主任拿过来的抵押、查封、名单几类数据进行了处理，今天早上给舒主任进行了工作汇报，并完成相关数据整理。然后就登记中心工作人员提出的问题进行了答复。现目前工作都在正轨上。<br/></p>',1000024,NULL,1474340014,0,2),(81,1,'<p>今天主要完成任务还是围绕增量数据修改。修改条数在1200条。<br/></p>',1000024,NULL,1474363817,0,2),(82,3,'<p style=\"text-align:center\"><strong><span style=\"font-size:29px;font-family:宋体\">洪雅不动产项目进度</span></strong></p><p><strong><span style=\"font-size:24px;font-family:宋体\">（一）、空间数据</span></strong></p><p><strong><span style=\"font-size:19px;font-family:宋体\">一、行政区</span></strong></p><p style=\"margin-left:24px\"><span style=\";font-family:宋体\">行政区空间图形处理完成。</span></p><p><strong><span style=\"font-size:19px;font-family:宋体\">二、地籍区</span></strong></p><p style=\"margin-left:24px\"><span style=\"font-family:宋体\">地籍区空间图形处理完成。</span></p><p><strong><span style=\"font-size:19px;font-family:宋体\">三、地籍子区</span></strong></p><p style=\"margin-left:24px\"><span style=\"font-family:宋体\">地籍子区图形处理完成。</span></p><p><strong><span style=\"font-size:19px;font-family:宋体\">四、宗地</span></strong></p><p style=\"text-indent:28px\">',1000025,NULL,1474373008,0,2),(83,1,'<p>目前已完成27226条的审查，在国庆之前无论如何完成50%，然后撤出人手为西藏项目提供支持。<br/></p>',1000024,NULL,1474452844,0,2);

/*Table structure for table `project_team` */

DROP TABLE IF EXISTS `project_team`;

CREATE TABLE `project_team` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `uid` int(5) DEFAULT NULL COMMENT '用户id',
  `jid` int(5) DEFAULT NULL COMMENT '项目id',
  `day` int(10) DEFAULT NULL COMMENT '日期',
  `ctime` int(10) DEFAULT NULL COMMENT '创建时间',
  `state` int(1) DEFAULT NULL COMMENT '0无效，1有效',
  `content` varchar(255) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商务团队成员表';

/*Data for the table `project_team` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
