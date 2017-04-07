/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : whedencms

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-04-07 11:29:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for wd_admin
-- ----------------------------
DROP TABLE IF EXISTS `wd_admin`;
CREATE TABLE `wd_admin` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT COMMENT '管理员表',
  `username` varchar(50) NOT NULL COMMENT '管理员用户名',
  `password` varchar(50) NOT NULL COMMENT '登陆密码',
  `state` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否在线（0，1）',
  `weight` smallint(1) NOT NULL DEFAULT '1' COMMENT '等级1，2，3',
  `mail` varchar(20) NOT NULL DEFAULT '0',
  `numb` varchar(30) NOT NULL DEFAULT '0' COMMENT '手机号码',
  `head` varchar(50) NOT NULL DEFAULT '0' COMMENT '管理员头像',
  `createtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for wd_gps
-- ----------------------------
DROP TABLE IF EXISTS `wd_gps`;
CREATE TABLE `wd_gps` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `img_url` varchar(150) NOT NULL,
  `update_time` datetime NOT NULL,
  `sort` int(2) NOT NULL,
  `state` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for wd_lianxi
-- ----------------------------
DROP TABLE IF EXISTS `wd_lianxi`;
CREATE TABLE `wd_lianxi` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT COMMENT '联系我们表',
  `name` varchar(20) NOT NULL COMMENT '联系方式名',
  `value` varchar(20) NOT NULL COMMENT '属性',
  `img` varchar(50) NOT NULL COMMENT '图片',
  `url` varchar(50) NOT NULL COMMENT '链接',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for wd_link
-- ----------------------------
DROP TABLE IF EXISTS `wd_link`;
CREATE TABLE `wd_link` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '链接唯一标识',
  `url` char(255) NOT NULL DEFAULT '' COMMENT '链接地址',
  `short` char(100) NOT NULL DEFAULT '' COMMENT '短网址',
  `status` tinyint(2) NOT NULL DEFAULT '2' COMMENT '状态',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_url` (`url`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='链接表';

-- ----------------------------
-- Table structure for wd_login_log
-- ----------------------------
DROP TABLE IF EXISTS `wd_login_log`;
CREATE TABLE `wd_login_log` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `loginip` varchar(20) NOT NULL DEFAULT '0',
  `logintime` datetime NOT NULL,
  `outtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for wd_message
-- ----------------------------
DROP TABLE IF EXISTS `wd_message`;
CREATE TABLE `wd_message` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT COMMENT '留言板表',
  `name` varchar(50) NOT NULL COMMENT '留言人名字',
  `numb` varchar(50) NOT NULL COMMENT '手机号',
  `content` varchar(255) NOT NULL COMMENT '留言内容',
  `time` datetime NOT NULL COMMENT '留言时间',
  `open` tinyint(4) NOT NULL COMMENT '是否公开',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for wd_news
-- ----------------------------
DROP TABLE IF EXISTS `wd_news`;
CREATE TABLE `wd_news` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT COMMENT '新闻表',
  `newtitle` varchar(50) NOT NULL COMMENT '新闻标题',
  `text` text NOT NULL COMMENT '文本内容',
  `type` smallint(1) NOT NULL COMMENT '新闻类型（公司，行业）',
  `newtime` datetime NOT NULL COMMENT '新闻发布时间',
  `state` tinyint(1) NOT NULL COMMENT '文章状态（开启关闭）',
  `issuer` varchar(20) NOT NULL COMMENT '发布人',
  `click` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for wd_onetitle
-- ----------------------------
DROP TABLE IF EXISTS `wd_onetitle`;
CREATE TABLE `wd_onetitle` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT COMMENT '一级菜单表',
  `title` varchar(50) NOT NULL COMMENT '标题',
  `sort` smallint(3) NOT NULL COMMENT '排序',
  `type` varchar(10) NOT NULL COMMENT '菜单种类',
  `state` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for wd_password_log
-- ----------------------------
DROP TABLE IF EXISTS `wd_password_log`;
CREATE TABLE `wd_password_log` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT COMMENT '修改密码记录表',
  `userid` smallint(5) NOT NULL COMMENT '用户名',
  `oldpassword` varchar(50) NOT NULL COMMENT '老密码',
  `newpassword` varchar(50) NOT NULL COMMENT '新密码',
  `time` datetime NOT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for wd_product
-- ----------------------------
DROP TABLE IF EXISTS `wd_product`;
CREATE TABLE `wd_product` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT COMMENT '产品信息表',
  `productname` varchar(50) NOT NULL COMMENT '产品名',
  `number` varchar(80) NOT NULL COMMENT '编号',
  `miaoshu` varchar(255) NOT NULL COMMENT '描述',
  `addtime` datetime NOT NULL COMMENT '添加时间',
  `image` varchar(50) NOT NULL COMMENT '产品图片',
  `type` varchar(50) NOT NULL COMMENT '类型',
  `state` varchar(20) NOT NULL COMMENT '状态（是否在售）',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for wd_service
-- ----------------------------
DROP TABLE IF EXISTS `wd_service`;
CREATE TABLE `wd_service` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `img_url` varchar(100) NOT NULL,
  `type` int(2) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for wd_service_classify
-- ----------------------------
DROP TABLE IF EXISTS `wd_service_classify`;
CREATE TABLE `wd_service_classify` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `pid` int(5) NOT NULL,
  `title` varchar(100) NOT NULL,
  `icon_url` varchar(100) NOT NULL,
  `jianjie` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for wd_twotitle
-- ----------------------------
DROP TABLE IF EXISTS `wd_twotitle`;
CREATE TABLE `wd_twotitle` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT COMMENT '二级菜单',
  `title` varchar(50) NOT NULL COMMENT '标题',
  `sort` smallint(3) NOT NULL COMMENT '排序',
  `type` varchar(10) NOT NULL COMMENT '类型',
  `oneid` smallint(5) NOT NULL COMMENT '一级菜单id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for wd_visit_log
-- ----------------------------
DROP TABLE IF EXISTS `wd_visit_log`;
CREATE TABLE `wd_visit_log` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT COMMENT '网页访问表',
  `visitip` varchar(20) NOT NULL COMMENT '访问ip',
  `visittime` datetime NOT NULL COMMENT '访问时间',
  `state` tinyint(1) NOT NULL COMMENT '是否访问中？',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for wd_web
-- ----------------------------
DROP TABLE IF EXISTS `wd_web`;
CREATE TABLE `wd_web` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '网站信息表',
  `web_name` varchar(100) NOT NULL COMMENT '网站名',
  `web_ip` varchar(100) NOT NULL COMMENT '域名地址',
  `web_logo` varchar(255) NOT NULL COMMENT '网站logo',
  `web_author` varchar(50) NOT NULL COMMENT '拥有者',
  `seo` varchar(255) NOT NULL COMMENT 'SEO',
  `web_miaoshu` varchar(255) NOT NULL COMMENT '网站描述',
  `web_banquan` varchar(255) NOT NULL COMMENT '版权信息',
  `web_state` tinyint(1) NOT NULL COMMENT '网站状态（是否开启）',
  `keyword` varchar(255) NOT NULL COMMENT '关键词做推广',
  `ico` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for wd_xingwei_log
-- ----------------------------
DROP TABLE IF EXISTS `wd_xingwei_log`;
CREATE TABLE `wd_xingwei_log` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT '操作名',
  `biao` varchar(20) NOT NULL COMMENT '操作的表名',
  `biaoid` smallint(5) NOT NULL COMMENT '操作属性id',
  ` value` varchar(20) NOT NULL COMMENT '属性',
  `time` datetime NOT NULL COMMENT '操作时间',
  `modifier` varchar(20) NOT NULL COMMENT '操作管理员',
  `type` varchar(10) NOT NULL COMMENT '类型：增删改',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
