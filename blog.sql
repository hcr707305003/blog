/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-08-29 17:56:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for access_user
-- ----------------------------
DROP TABLE IF EXISTS `access_user`;
CREATE TABLE `access_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `ip` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '访问ip',
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '地区',
  `system` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '获取用户的操作系统',
  `point` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '获取经纬度',
  `kernel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '获取浏览器内核',
  `is_mobile` tinyint(1) DEFAULT NULL COMMENT '判断是否是手机',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


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
INSERT INTO `article` VALUES ('1', '啊啊啊啊', '1,2', '啊啊啊啊啊啊', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1535088237925&di=8447855dd512a18569e168863b240e8f&imgtype=0&src=http%3A%2F%2Fimg3.duitang.com%2Fuploads%2Fitem%2F201508%2F11%2F20150811002310_fLBTR.jpeg', '28', '2018-08-24 10:36:09', '2018-08-29 14:59:59');
INSERT INTO `article` VALUES ('3', 'aaa', '1,2,3', 'sassa啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊反反复复付付付付付付付付付付付付付付付付付付付付付付付付付付付付付付哦哦哦哦哦哦哦偶偶偶偶偶偶偶偶偶以以以以以以以以以以以以以以ii', '', '10', '2018-08-24 15:47:58', '2018-08-29 14:59:51');
INSERT INTO `article` VALUES ('4', 'qqqq', '1', '飒飒飒飒飒飒飒飒凄凄切切群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群QAQ群奥群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群群所所所所所所所所所所所所所所所所群群群群', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1535107203383&di=40e8ff99f9d82cd882ee0e1ac133281f&imgtype=0&src=http%3A%2F%2Fbcs.91.com%2Frbpiczy%2FWallpaper%2F2015%2F3%2F9%2Fcfcc84bcd1184ac1ad5b52cfaa8aadfa-10.jpg', '7', '2018-08-24 13:13:40', '2018-08-28 10:06:41');
INSERT INTO `article` VALUES ('5', 'qqqq', '1', 'asasasa', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1535107203383&di=40e8ff99f9d82cd882ee0e1ac133281f&imgtype=0&src=http%3A%2F%2Fbcs.91.com%2Frbpiczy%2FWallpaper%2F2015%2F3%2F9%2Fcfcc84bcd1184ac1ad5b52cfaa8aadfa-10.jpg', '4', '2018-08-24 13:13:40', '2018-08-27 18:03:30');
INSERT INTO `article` VALUES ('6', 'qqqq', '1', 'asasasa', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1535107203383&di=40e8ff99f9d82cd882ee0e1ac133281f&imgtype=0&src=http%3A%2F%2Fbcs.91.com%2Frbpiczy%2FWallpaper%2F2015%2F3%2F9%2Fcfcc84bcd1184ac1ad5b52cfaa8aadfa-10.jpg', '4', '2018-08-24 13:13:40', '2018-08-27 14:55:56');
INSERT INTO `article` VALUES ('7', 'qqqq', '1', 'asasasa', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1535107203383&di=40e8ff99f9d82cd882ee0e1ac133281f&imgtype=0&src=http%3A%2F%2Fbcs.91.com%2Frbpiczy%2FWallpaper%2F2015%2F3%2F9%2Fcfcc84bcd1184ac1ad5b52cfaa8aadfa-10.jpg', '2', '2018-08-24 13:13:40', '2018-08-24 13:13:40');
INSERT INTO `article` VALUES ('8', 'qqqq', '1', 'asasasa', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1535107203383&di=40e8ff99f9d82cd882ee0e1ac133281f&imgtype=0&src=http%3A%2F%2Fbcs.91.com%2Frbpiczy%2FWallpaper%2F2015%2F3%2F9%2Fcfcc84bcd1184ac1ad5b52cfaa8aadfa-10.jpg', '2', '2018-08-24 13:13:40', '2018-08-24 13:13:40');
INSERT INTO `article` VALUES ('9', 'qqqq', '1', 'asasasa', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1535107203383&di=40e8ff99f9d82cd882ee0e1ac133281f&imgtype=0&src=http%3A%2F%2Fbcs.91.com%2Frbpiczy%2FWallpaper%2F2015%2F3%2F9%2Fcfcc84bcd1184ac1ad5b52cfaa8aadfa-10.jpg', '2', '2018-08-24 13:13:40', '2018-08-24 13:13:40');
INSERT INTO `article` VALUES ('10', 'qqqq', '1', 'asasasa', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1535107203383&di=40e8ff99f9d82cd882ee0e1ac133281f&imgtype=0&src=http%3A%2F%2Fbcs.91.com%2Frbpiczy%2FWallpaper%2F2015%2F3%2F9%2Fcfcc84bcd1184ac1ad5b52cfaa8aadfa-10.jpg', '2', '2018-08-24 13:13:40', '2018-08-24 13:13:40');
INSERT INTO `article` VALUES ('11', 'qqqq', '1', 'asasasa', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1535107203383&di=40e8ff99f9d82cd882ee0e1ac133281f&imgtype=0&src=http%3A%2F%2Fbcs.91.com%2Frbpiczy%2FWallpaper%2F2015%2F3%2F9%2Fcfcc84bcd1184ac1ad5b52cfaa8aadfa-10.jpg', '2', '2018-08-24 13:13:40', '2018-08-24 13:13:40');

-- ----------------------------
-- Table structure for model
-- ----------------------------
DROP TABLE IF EXISTS `model`;
CREATE TABLE `model` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model_name` varchar(20) NOT NULL COMMENT '模块名称',
  `model_controller` varchar(50) NOT NULL COMMENT '模块跳转的地址',
  `is_open` tinyint(1) unsigned DEFAULT NULL COMMENT '判断是否开始 0未开启，1已开启',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COMMENT='模块列表';

-- ----------------------------
-- Records of model
-- ----------------------------
INSERT INTO `model` VALUES ('1', 'homepage', '/', '1', '2018-08-27 15:28:53', '2018-08-27 15:28:56');
INSERT INTO `model` VALUES ('2', 'article', '/article_list', '1', '2018-08-27 15:29:24', '2018-08-27 15:29:26');

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

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '用户名',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '邮箱',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '密码',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '登录的token',
  `is_manager` tinyint(1) NOT NULL DEFAULT '0' COMMENT '判断是否是管理员 1为管理 0为普通用户',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '707305003', '707305003@qq.com', '$2y$10$ZsFtfZwULvuY2x8oSnTaC.5BWsbRBszwMKTv.KviUvdITRVVBJTvm', 'rHhFOMTbbD8vUSjH1LzxfMsXn9bP4BsSeS3shLrcyfhAV4NYijAgP0vaWl8p', '1', '2018-08-29 02:03:09', '2018-08-29 02:03:09');
