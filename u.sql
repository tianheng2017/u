/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 80016
Source Host           : localhost:3306
Source Database       : u

Target Server Type    : MYSQL
Target Server Version : 80016
File Encoding         : 65001

Date: 2020-05-04 21:52:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `username` varchar(100) NOT NULL COMMENT '用户名',
  `password` varchar(100) NOT NULL COMMENT '密码',
  `loginonetimeid` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL COMMENT '最后访问记录值---账号只允许单用户登录时使用',
  `state` tinyint(4) NOT NULL DEFAULT '1' COMMENT '状态：1正常；-1冻结',
  `regtime` datetime NOT NULL COMMENT '注册时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', '7fef6171469e80d32c0559f88b377245', '1533401553-17605', '1', '2017-09-02 16:36:06');

-- ----------------------------
-- Table structure for coupon
-- ----------------------------
DROP TABLE IF EXISTS `coupon`;
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='优惠券表';

-- ----------------------------
-- Records of coupon
-- ----------------------------

-- ----------------------------
-- Table structure for itemlist
-- ----------------------------
DROP TABLE IF EXISTS `itemlist`;
CREATE TABLE `itemlist` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `isty` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否体验金项目',
  `tymoney` float(10,2) NOT NULL COMMENT '体验金额度',
  `item_name` varchar(255) NOT NULL COMMENT '项目名称',
  `price` float(10,2) NOT NULL DEFAULT '0.00' COMMENT '项目金额',
  `arate` float(10,2) NOT NULL COMMENT '年化率',
  `day_num` int(11) NOT NULL COMMENT '产品天数',
  `desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '描述',
  `coupon` int(11) DEFAULT '0' COMMENT '优惠券额度',
  `time` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of itemlist
-- ----------------------------
INSERT INTO `itemlist` VALUES ('10', '0', '0.00', '测试项目1', '5000.00', '8.00', '30', '没有特色就是最好的特色，emmp，8%你敢不敢来！', '18', '1588592325');

-- ----------------------------
-- Table structure for itemlog
-- ----------------------------
DROP TABLE IF EXISTS `itemlog`;
CREATE TABLE `itemlog` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `isty` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否体验金项目',
  `uid` int(10) NOT NULL COMMENT '用户id',
  `money` decimal(14,4) NOT NULL COMMENT '投资金额',
  `smoney` decimal(14,4) NOT NULL COMMENT '返还金额',
  `item_id` int(10) NOT NULL COMMENT '项目id',
  `arate` tinyint(4) NOT NULL COMMENT '年化率',
  `day_num` int(4) NOT NULL COMMENT '投资天数',
  `time` int(10) NOT NULL COMMENT '时间戳',
  `stime` int(10) NOT NULL COMMENT '收益时间',
  `status` tinyint(1) NOT NULL COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of itemlog
-- ----------------------------

-- ----------------------------
-- Table structure for itemlogp
-- ----------------------------
DROP TABLE IF EXISTS `itemlogp`;
CREATE TABLE `itemlogp` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `item_no` int(10) NOT NULL COMMENT '直推投资id',
  `uid` int(10) NOT NULL COMMENT '用户id',
  `fuid` int(10) NOT NULL COMMENT '直推人id',
  `money` decimal(14,4) NOT NULL COMMENT '投资金额',
  `smoney` decimal(14,4) NOT NULL COMMENT '返还金额',
  `item_id` int(10) NOT NULL COMMENT '项目id',
  `jlbl` decimal(14,2) DEFAULT '0.00',
  `lown` tinyint(1) NOT NULL COMMENT '会员层级',
  `time` int(10) NOT NULL COMMENT '时间戳',
  `stime` int(10) NOT NULL COMMENT '收益时间',
  `status` tinyint(1) NOT NULL COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of itemlogp
-- ----------------------------

-- ----------------------------
-- Table structure for moneypath
-- ----------------------------
DROP TABLE IF EXISTS `moneypath`;
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
) ENGINE=MyISAM AUTO_INCREMENT=13700 DEFAULT CHARSET=utf8 COMMENT='资金明细表';

-- ----------------------------
-- Records of moneypath
-- ----------------------------

-- ----------------------------
-- Table structure for recharge
-- ----------------------------
DROP TABLE IF EXISTS `recharge`;
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
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COMMENT='资金明细表';

-- ----------------------------
-- Records of recharge
-- ----------------------------

-- ----------------------------
-- Table structure for regpath
-- ----------------------------
DROP TABLE IF EXISTS `regpath`;
CREATE TABLE `regpath` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `uidsubordinate` int(11) NOT NULL,
  `uiduidsubordinatesuperior` int(11) DEFAULT NULL,
  `lown` int(11) DEFAULT NULL,
  `authentication` tinyint(4) DEFAULT '-1',
  `regtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=222 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of regpath
-- ----------------------------

-- ----------------------------
-- Table structure for slide
-- ----------------------------
DROP TABLE IF EXISTS `slide`;
CREATE TABLE `slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `name` varchar(128) NOT NULL COMMENT '幻灯片名称',
  `img` varchar(255) NOT NULL COMMENT '图片地址',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1中文2英文',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `time` int(11) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of slide
-- ----------------------------
INSERT INTO `slide` VALUES ('1', 'test', 'http://u.xiangxin.me/app/views/app_cn_v1/assets/wap/img/banner_1.png', '1', '1', '1577718769');

-- ----------------------------
-- Table structure for tradeorder
-- ----------------------------
DROP TABLE IF EXISTS `tradeorder`;
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
) ENGINE=MyISAM AUTO_INCREMENT=335 DEFAULT CHARSET=utf8 COMMENT='订单表';

-- ----------------------------
-- Records of tradeorder
-- ----------------------------

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
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
  `loginonetimeid` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL COMMENT '最后访问记录值---账号只允许单用户登录时使用',
  `regtime` datetime NOT NULL COMMENT '注册时间',
  `token` char(32) NOT NULL,
  `language` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11113 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('11108', '13111111111', 'e10adc3949ba59abbe56e057f20f883e', '4297f44b13955235245b2497399d7a93', '0', '', '1000000.00', '0.00', '0.00', null, '', '0.00', '0', '0', '', '1', null, '2020-05-03 12:14:52', 'f322b6829be7151a78a755187dc5d140', '1');

-- ----------------------------
-- Table structure for webconfig
-- ----------------------------
DROP TABLE IF EXISTS `webconfig`;
CREATE TABLE `webconfig` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT 'key',
  `val` text NOT NULL COMMENT 'value',
  `content` varchar(255) NOT NULL COMMENT '描述',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of webconfig
-- ----------------------------
INSERT INTO `webconfig` VALUES ('1', 'webtitle', 'U finance', '站点名称');
INSERT INTO `webconfig` VALUES ('2', 'pagelistnumber', '20', '分页列表每页条数');
INSERT INTO `webconfig` VALUES ('19', 'rechargeimg', '1588598441-445496105.png', '网站收款二维码');
INSERT INTO `webconfig` VALUES ('13', 'callus', '88888888', '联系我们');
INSERT INTO `webconfig` VALUES ('14', 'presentationfee', '1', '提现手续费(%)');
INSERT INTO `webconfig` VALUES ('15', 'minrechargemoney', '100', '最小充值金额(元)');
INSERT INTO `webconfig` VALUES ('17', 'yjjl', '30', '投资1000元整数倍及以上，拿直推人 ? %的收益奖励');
INSERT INTO `webconfig` VALUES ('16', 'minwithdrawal', '100', '最小提现金额(元)');
INSERT INTO `webconfig` VALUES ('18', 'ejjl', '20', '投资1000元及以上，拿二级推荐人 ? %的收益奖励');

-- ----------------------------
-- Table structure for withdrawal
-- ----------------------------
DROP TABLE IF EXISTS `withdrawal`;
CREATE TABLE `withdrawal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT 'user ID',
  `money` decimal(20,4) NOT NULL DEFAULT '0.0000' COMMENT '金额',
  `presentationfee` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `img1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '收款二维码',
  `mtype` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1：余额；2：佣金',
  `content` varchar(255) NOT NULL COMMENT '描述',
  `state` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1：审核中2：成功-1：失败',
  `coupon_id` int(11) DEFAULT '0' COMMENT '优惠券id',
  `time` datetime NOT NULL COMMENT '时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=utf8 COMMENT='资金明细表';

-- ----------------------------
-- Records of withdrawal
-- ----------------------------
