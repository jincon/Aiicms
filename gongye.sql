/*
 Navicat MySQL Data Transfer

 Source Server         : localhost
 Source Server Version : 50542
 Source Host           : localhost
 Source Database       : gongye

 Target Server Version : 50542
 File Encoding         : utf-8

 Date: 10/01/2019 12:58:26 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `cat`
-- ----------------------------
DROP TABLE IF EXISTS `cat`;
CREATE TABLE `cat` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pid` int(10) NOT NULL DEFAULT '0' COMMENT '父级',
  `name` varchar(100) NOT NULL,
  `dateline` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `cat`
-- ----------------------------
BEGIN;
INSERT INTO `cat` VALUES ('6', '0', '机械性能1', '2019-09-29 18:03:01'), ('8', '0', '阿萨德', '2019-09-29 18:05:46'), ('9', '0', '阿萨德2', '2019-09-29 19:38:43'), ('10', '0', '阿萨德3', '2019-09-29 19:38:46'), ('11', '0', '阿萨德4', '2019-09-29 19:38:50'), ('12', '0', '阿萨德5', '2019-09-29 19:38:55'), ('13', '0', '阿萨德6', '2019-09-29 19:38:59'), ('14', '0', '阿萨德7', '2019-09-29 19:39:04'), ('15', '0', '阿萨德8', '2019-09-29 19:39:08'), ('16', '0', '阿萨德9', '2019-09-29 19:39:16'), ('17', '0', '阿萨德10', '2019-09-29 19:39:20');
COMMIT;

-- ----------------------------
--  Table structure for `diaocha`
-- ----------------------------
DROP TABLE IF EXISTS `diaocha`;
CREATE TABLE `diaocha` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `xiangmu` varchar(10) NOT NULL DEFAULT '' COMMENT '类别',
  `biaozhun` varchar(20) NOT NULL DEFAULT '',
  `fangfa` varchar(20) NOT NULL,
  `tiaojian` varchar(250) NOT NULL COMMENT '',
  `lingyu` varchar(200) NOT NULL COMMENT '',
  `fanwei` varchar(250) NOT NULL,
  `yangpin` varchar(250) NOT NULL,
  `shebeiyq` varchar(250) NOT NULL COMMENT '',
  `danwei` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL COMMENT '',
  `jcprice` varchar(200) NOT NULL COMMENT '',
  `dateline` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `diaocha`
-- ----------------------------
BEGIN;
INSERT INTO `diaocha` VALUES ('8', '机关事业单位', '11', '22', '33', '44', '0.0.0.0', '', '', '', '', '', '2019-09-29 14:34:24'), ('9', '企业人员', '阿斯顿发', '阿萨德', '阿萨德', '阿萨德', '0.0.0.0', '', '', '', '', '', '2019-09-29 14:37:02'), ('10', '企业人员', '阿斯顿发', '阿萨德', '阿萨德', '阿萨德', '0.0.0.0', '', '', '', '', '', '2019-09-29 14:37:33'), ('11', '机械性能1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '111', '2019-09-29 18:41:36');
COMMIT;

-- ----------------------------
--  Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,=
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `users`
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES ('1', 'jincon', 'e10adc3949ba59abbe56e057f20f883e');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
