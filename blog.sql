/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-08-24 16:04:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL COMMENT '标题',
  `theme_group_id` varchar(100) NOT NULL COMMENT '查询出所有专题id',
  `content` text NOT NULL COMMENT '内容',
  `images` varchar(255) NOT NULL COMMENT '图片',
  `clicks` int(11) DEFAULT '0' COMMENT '点击量',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COMMENT='文章表';

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('1', '啊啊啊啊', '1,2', '啊啊啊啊啊啊', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1535088237925&di=8447855dd512a18569e168863b240e8f&imgtype=0&src=http%3A%2F%2Fimg3.duitang.com%2Fuploads%2Fitem%2F201508%2F11%2F20150811002310_fLBTR.jpeg', '0', '2018-08-24 10:36:09', '2018-08-24 11:36:31');
INSERT INTO `article` VALUES ('2', 'sasasasas', '1,2,3', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '%2F201508%2F11%2F20150811002310_fLBTR.jpeg', '0', '2018-08-24 13:13:40', '2018-08-24 13:59:21');
INSERT INTO `article` VALUES ('3', 'aaa', '1', 'sassa', 'ass', '0', '2018-08-24 15:47:58', '2018-08-24 15:48:02');
INSERT INTO `article` VALUES ('4', 'qqqq', '1', 'asasasa', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1535107203383&di=40e8ff99f9d82cd882ee0e1ac133281f&imgtype=0&src=http%3A%2F%2Fbcs.91.com%2Frbpiczy%2FWallpaper%2F2015%2F3%2F9%2Fcfcc84bcd1184ac1ad5b52cfaa8aadfa-10.jpg', '2', '2018-08-24 13:13:40', '2018-08-24 13:13:40');
INSERT INTO `article` VALUES ('5', 'qqqq', '1', 'asasasa', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1535107203383&di=40e8ff99f9d82cd882ee0e1ac133281f&imgtype=0&src=http%3A%2F%2Fbcs.91.com%2Frbpiczy%2FWallpaper%2F2015%2F3%2F9%2Fcfcc84bcd1184ac1ad5b52cfaa8aadfa-10.jpg', '2', '2018-08-24 13:13:40', '2018-08-24 13:13:40');
INSERT INTO `article` VALUES ('6', 'qqqq', '1', 'asasasa', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1535107203383&di=40e8ff99f9d82cd882ee0e1ac133281f&imgtype=0&src=http%3A%2F%2Fbcs.91.com%2Frbpiczy%2FWallpaper%2F2015%2F3%2F9%2Fcfcc84bcd1184ac1ad5b52cfaa8aadfa-10.jpg', '2', '2018-08-24 13:13:40', '2018-08-24 13:13:40');
INSERT INTO `article` VALUES ('7', 'qqqq', '1', 'asasasa', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1535107203383&di=40e8ff99f9d82cd882ee0e1ac133281f&imgtype=0&src=http%3A%2F%2Fbcs.91.com%2Frbpiczy%2FWallpaper%2F2015%2F3%2F9%2Fcfcc84bcd1184ac1ad5b52cfaa8aadfa-10.jpg', '2', '2018-08-24 13:13:40', '2018-08-24 13:13:40');
INSERT INTO `article` VALUES ('8', 'qqqq', '1', 'asasasa', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1535107203383&di=40e8ff99f9d82cd882ee0e1ac133281f&imgtype=0&src=http%3A%2F%2Fbcs.91.com%2Frbpiczy%2FWallpaper%2F2015%2F3%2F9%2Fcfcc84bcd1184ac1ad5b52cfaa8aadfa-10.jpg', '2', '2018-08-24 13:13:40', '2018-08-24 13:13:40');
INSERT INTO `article` VALUES ('9', 'qqqq', '1', 'asasasa', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1535107203383&di=40e8ff99f9d82cd882ee0e1ac133281f&imgtype=0&src=http%3A%2F%2Fbcs.91.com%2Frbpiczy%2FWallpaper%2F2015%2F3%2F9%2Fcfcc84bcd1184ac1ad5b52cfaa8aadfa-10.jpg', '2', '2018-08-24 13:13:40', '2018-08-24 13:13:40');
INSERT INTO `article` VALUES ('10', 'qqqq', '1', 'asasasa', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1535107203383&di=40e8ff99f9d82cd882ee0e1ac133281f&imgtype=0&src=http%3A%2F%2Fbcs.91.com%2Frbpiczy%2FWallpaper%2F2015%2F3%2F9%2Fcfcc84bcd1184ac1ad5b52cfaa8aadfa-10.jpg', '2', '2018-08-24 13:13:40', '2018-08-24 13:13:40');
INSERT INTO `article` VALUES ('11', 'qqqq', '1', 'asasasa', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1535107203383&di=40e8ff99f9d82cd882ee0e1ac133281f&imgtype=0&src=http%3A%2F%2Fbcs.91.com%2Frbpiczy%2FWallpaper%2F2015%2F3%2F9%2Fcfcc84bcd1184ac1ad5b52cfaa8aadfa-10.jpg', '2', '2018-08-24 13:13:40', '2018-08-24 13:13:40');

-- ----------------------------
-- Table structure for theme
-- ----------------------------
DROP TABLE IF EXISTS `theme`;
CREATE TABLE `theme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `theme_name` varchar(20) NOT NULL COMMENT '专题名称',
  `pid` tinyint(3) unsigned DEFAULT NULL COMMENT '父专题id，里面包含多个专题id',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `theme_name` (`theme_name`,`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COMMENT='专题id';

-- ----------------------------
-- Records of theme
-- ----------------------------
INSERT INTO `theme` VALUES ('1', '栗山未来', '0', null, null);
INSERT INTO `theme` VALUES ('2', '动漫', '0', null, null);
INSERT INTO `theme` VALUES ('3', '海贼', '0', null, null);
