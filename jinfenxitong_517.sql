-- MySQL dump 10.13  Distrib 5.7.29, for Linux (x86_64)
--
-- Host: localhost    Database: jinfenxitong_com
-- ------------------------------------------------------
-- Server version	5.7.29-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `username` varchar(100) NOT NULL COMMENT '用户名',
  `password` varchar(100) NOT NULL COMMENT '密码',
  `loginonetimeid` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '最后访问记录值---账号只允许单用户登录时使用',
  `state` tinyint(4) NOT NULL DEFAULT '1' COMMENT '状态：1正常；-1冻结',
  `regtime` datetime NOT NULL COMMENT '注册时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='用户表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','7fef6171469e80d32c0559f88b377245','1533401553-17605',1,'2017-09-02 16:36:06');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coupon`
--

DROP TABLE IF EXISTS `coupon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coupon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL COMMENT '受益用户',
  `money` float(10,2) DEFAULT '0.00' COMMENT '优惠券金额',
  `item_id` int(11) DEFAULT NULL COMMENT '项目ID',
  `item_no` int(11) DEFAULT NULL COMMENT '项目单号',
  `status` tinyint(1) DEFAULT '1' COMMENT '优惠券状态1正常  2提现审核中  3已提现  4已过期',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `item_no` (`item_no`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='优惠券表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coupon`
--

LOCK TABLES `coupon` WRITE;
/*!40000 ALTER TABLE `coupon` DISABLE KEYS */;
/*!40000 ALTER TABLE `coupon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itemlist`
--

DROP TABLE IF EXISTS `itemlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itemlist` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `isty` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否体验金项目',
  `tymoney` float(10,2) NOT NULL COMMENT '体验金额度',
  `item_name` varchar(255) NOT NULL COMMENT '项目名称',
  `price` float(10,2) NOT NULL DEFAULT '0.00' COMMENT '项目金额',
  `arate` float(10,2) NOT NULL COMMENT '年化率',
  `day_num` int(11) NOT NULL COMMENT '产品天数',
  `desc` text NOT NULL COMMENT '描述',
  `coupon` int(11) DEFAULT '0' COMMENT '优惠券额度',
  `type` int(11) NOT NULL DEFAULT '0' COMMENT '项目类型 0定期 1活期',
  `time` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itemlist`
--

LOCK TABLES `itemlist` WRITE;
/*!40000 ALTER TABLE `itemlist` DISABLE KEYS */;
INSERT INTO `itemlist` VALUES (10,0,0.00,'金分活期',1000.00,10.80,0,'存取便捷',0,1,1589694753),(11,0,0.00,'金分定期',1000.00,10.80,540,'金分定期',0,0,1589375686);
/*!40000 ALTER TABLE `itemlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itemlog`
--

DROP TABLE IF EXISTS `itemlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itemlog` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `isty` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否体验金项目',
  `uid` int(10) NOT NULL COMMENT '用户id',
  `money` decimal(14,2) NOT NULL COMMENT '投资金额',
  `num` int(10) NOT NULL DEFAULT '0' COMMENT '份数',
  `item_id` int(10) NOT NULL COMMENT '项目id',
  `arate` float(10,2) NOT NULL COMMENT '年化率',
  `day_num` int(4) NOT NULL COMMENT '投资天数',
  `time` int(10) NOT NULL COMMENT '时间戳',
  `stime` int(10) NOT NULL COMMENT '收益时间',
  `ltime` int(10) DEFAULT '0' COMMENT '最后一次结算时间',
  `status` tinyint(1) NOT NULL COMMENT '状态',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itemlog`
--

LOCK TABLES `itemlog` WRITE;
/*!40000 ALTER TABLE `itemlog` DISABLE KEYS */;
/*!40000 ALTER TABLE `itemlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itemlogp`
--

DROP TABLE IF EXISTS `itemlogp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itemlogp` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `item_no` int(10) NOT NULL COMMENT '直推投资id',
  `uid` int(10) NOT NULL COMMENT '用户id',
  `fuid` int(10) NOT NULL COMMENT '直推人id',
  `money` decimal(14,2) NOT NULL COMMENT '投资金额',
  `num` int(10) NOT NULL COMMENT '份数',
  `arate` float(10,2) NOT NULL COMMENT '年华率',
  `item_id` int(10) NOT NULL COMMENT '项目id',
  `jlbl` decimal(14,2) DEFAULT '0.00',
  `lown` tinyint(1) NOT NULL COMMENT '会员层级',
  `time` int(10) NOT NULL COMMENT '时间戳',
  `stime` int(10) NOT NULL COMMENT '收益时间',
  `ltime` int(10) DEFAULT '0' COMMENT '最后一次奖励时间',
  `status` tinyint(1) NOT NULL COMMENT '状态',
  PRIMARY KEY (`id`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itemlogp`
--

LOCK TABLES `itemlogp` WRITE;
/*!40000 ALTER TABLE `itemlogp` DISABLE KEYS */;
/*!40000 ALTER TABLE `itemlogp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `moneypath`
--

DROP TABLE IF EXISTS `moneypath`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `moneypath` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT 'user ID',
  `mtype` smallint(4) DEFAULT '1' COMMENT '111：充值；112：提现；113：后台充值；131：余额兑换额度；132：额度兑换余额；151：投资交易；152：投资收益；153：团队返利；',
  `money` decimal(20,2) NOT NULL DEFAULT '0.00' COMMENT '金额',
  `content` varchar(255) NOT NULL COMMENT '描述',
  `additionalid` int(11) NOT NULL COMMENT '额外 ID',
  `additionalproportion` decimal(20,4) NOT NULL DEFAULT '0.0000' COMMENT '返利或收益时的比例',
  `time` datetime NOT NULL COMMENT '时间',
  `isty` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13825 DEFAULT CHARSET=utf8 COMMENT='资金明细表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `moneypath`
--

LOCK TABLES `moneypath` WRITE;
/*!40000 ALTER TABLE `moneypath` DISABLE KEYS */;
/*!40000 ALTER TABLE `moneypath` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recharge`
--

DROP TABLE IF EXISTS `recharge`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recharge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT 'user ID',
  `money` decimal(20,4) NOT NULL DEFAULT '0.0000' COMMENT '金额',
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL DEFAULT '',
  `img1` varchar(255) NOT NULL,
  `state` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1：审核中2：成功-1：失败',
  `time` datetime NOT NULL COMMENT '时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8 COMMENT='资金明细表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recharge`
--

LOCK TABLES `recharge` WRITE;
/*!40000 ALTER TABLE `recharge` DISABLE KEYS */;
/*!40000 ALTER TABLE `recharge` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regpath`
--

DROP TABLE IF EXISTS `regpath`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `regpath` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `uidsubordinate` int(11) NOT NULL,
  `uiduidsubordinatesuperior` int(11) DEFAULT NULL,
  `lown` int(11) DEFAULT NULL,
  `authentication` tinyint(4) DEFAULT '-1',
  `regtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=239 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regpath`
--

LOCK TABLES `regpath` WRITE;
/*!40000 ALTER TABLE `regpath` DISABLE KEYS */;
/*!40000 ALTER TABLE `regpath` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slide`
--

DROP TABLE IF EXISTS `slide`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `name` varchar(128) NOT NULL COMMENT '幻灯片名称',
  `img` varchar(255) NOT NULL COMMENT '图片地址',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1中文2英文',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `time` int(11) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slide`
--

LOCK TABLES `slide` WRITE;
/*!40000 ALTER TABLE `slide` DISABLE KEYS */;
INSERT INTO `slide` VALUES (1,'test','http://u.xiangxin.me/app/views/app_cn_v1/assets/wap/img/banner_1.png',0,1,1588651244);
/*!40000 ALTER TABLE `slide` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tradeorder`
--

DROP TABLE IF EXISTS `tradeorder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tradeorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `money` decimal(20,4) NOT NULL DEFAULT '0.0000' COMMENT '投资金额',
  `surplusmoney` decimal(20,4) NOT NULL DEFAULT '0.0000' COMMENT '剩余返还金额',
  `hand` int(11) NOT NULL DEFAULT '0' COMMENT '分配单数',
  `surplushand` int(11) NOT NULL DEFAULT '0' COMMENT '剩余返还单数数量',
  `buytime` datetime NOT NULL COMMENT '下单时间',
  `state` tinyint(4) NOT NULL COMMENT '订单状态，1投资进行中，2交易结束',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='订单表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tradeorder`
--

LOCK TABLES `tradeorder` WRITE;
/*!40000 ALTER TABLE `tradeorder` DISABLE KEYS */;
/*!40000 ALTER TABLE `tradeorder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `username` varchar(100) NOT NULL COMMENT '用户名',
  `password` varchar(100) NOT NULL COMMENT '密码',
  `passwordtwo` varchar(100) NOT NULL COMMENT '安全密码',
  `authentication` tinyint(4) NOT NULL DEFAULT '0' COMMENT '身份认证：0：未认证；1：审核中；2：已认证；-1认证失败',
  `authenticationinfo` text NOT NULL COMMENT '认证信息',
  `money` decimal(20,2) NOT NULL DEFAULT '0.00' COMMENT '资金',
  `money2` decimal(20,2) NOT NULL DEFAULT '0.00',
  `money3` decimal(20,2) NOT NULL DEFAULT '0.00',
  `name` varchar(12) DEFAULT NULL COMMENT '姓名',
  `coinaddress` varchar(255) NOT NULL,
  `proportion` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '抽成比例',
  `superioruid` int(11) NOT NULL DEFAULT '0' COMMENT '上级ID',
  `regpath` text NOT NULL,
  `remarks` varchar(255) NOT NULL COMMENT '备注',
  `state` tinyint(4) NOT NULL DEFAULT '1' COMMENT '状态：1正常；-1冻结',
  `loginonetimeid` varchar(30) CHARACTER SET latin1 DEFAULT NULL COMMENT '最后访问记录值---账号只允许单用户登录时使用',
  `regtime` datetime NOT NULL COMMENT '注册时间',
  `token` char(32) NOT NULL,
  `language` tinyint(1) NOT NULL DEFAULT '1',
  `authbankinfo` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0未绑定1已绑定',
  `bankname` varchar(128) NOT NULL COMMENT '银行卡姓名',
  `banknumber` varchar(128) NOT NULL COMMENT '银行卡号',
  `bankhome` varchar(128) NOT NULL COMMENT '开户行',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11123 DEFAULT CHARSET=utf8 COMMENT='用户表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (11108,'13111111111','e10adc3949ba59abbe56e057f20f883e','4297f44b13955235245b2497399d7a93',2,'{\"name\":\"123123\",\"idcard\":\"1231231\",\"img1\":\"1589182605_c771bdd480d7ffe13eecfacdf5e6d242.png\",\"img2\":\"1589182605_3b298f6fc48048c0272c06e5113b7c27.png\"}',100000.00,0.00,0.00,NULL,'',0.00,0,'0','',1,NULL,'2020-05-03 12:14:52','31e5a77ec14ad43c45c9bb1dc7d7f559',1,1,'223','123222123','123333111');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `webconfig`
--

DROP TABLE IF EXISTS `webconfig`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `webconfig` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT 'key',
  `val` text NOT NULL COMMENT 'value',
  `content` varchar(255) NOT NULL COMMENT '描述',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `webconfig`
--

LOCK TABLES `webconfig` WRITE;
/*!40000 ALTER TABLE `webconfig` DISABLE KEYS */;
INSERT INTO `webconfig` VALUES (1,'webtitle','U finance','站点名称'),(2,'pagelistnumber','20','分页列表每页条数'),(13,'callus','微信：wzzb9999','联系我们'),(14,'presentationfee','0.1','提现手续费(%)'),(15,'minrechargemoney','100','最小充值金额(元)'),(16,'minwithdrawal','10','最小提现金额(元)'),(17,'yjjl','30','投资1000元整数倍及以上，拿直推人 ? %的收益奖励'),(18,'ejjl','20','投资1000元及以上，拿二级推荐人 ? %的收益奖励'),(19,'rechargeimg','1588598441-445496105.png','网站收款二维码');
/*!40000 ALTER TABLE `webconfig` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `withdrawal`
--

DROP TABLE IF EXISTS `withdrawal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `withdrawal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT 'user ID',
  `money` decimal(20,4) NOT NULL DEFAULT '0.0000' COMMENT '金额',
  `presentationfee` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `img1` varchar(255) NOT NULL DEFAULT '' COMMENT '收款二维码',
  `mtype` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1：余额；2：佣金',
  `content` varchar(255) NOT NULL COMMENT '描述',
  `state` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1：审核中2：成功-1：失败',
  `coupon_id` int(11) DEFAULT '0' COMMENT '优惠券id',
  `bankname` varchar(128) NOT NULL,
  `banknumber` varchar(128) NOT NULL,
  `bankhome` varchar(128) NOT NULL,
  `time` datetime NOT NULL COMMENT '时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8 COMMENT='资金明细表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `withdrawal`
--

LOCK TABLES `withdrawal` WRITE;
/*!40000 ALTER TABLE `withdrawal` DISABLE KEYS */;
/*!40000 ALTER TABLE `withdrawal` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-17 22:44:02
