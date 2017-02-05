-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Jun 24, 2015, 09:22 AM
-- 伺服器版本: 5.7.7
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 資料庫: `csdb`
-- 

-- --------------------------------------------------------

-- 
-- 資料表格式： `course`
-- 

CREATE TABLE `course` (
  `cid` int(11) NOT NULL COMMENT '課程編號',
  `cName` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT '課程名稱',
  `term` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT '學期'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- 列出以下資料庫的數據： `course`
-- 

INSERT INTO `course` VALUES (1, '創新與創業', '1031');
INSERT INTO `course` VALUES (2, '管理資訊系統', '1031');
INSERT INTO `course` VALUES (3, '網際網路程式設計', '1031');
INSERT INTO `course` VALUES (4, '資料庫管理系統', '1031');
INSERT INTO `course` VALUES (5, '統計學', '1031');
INSERT INTO `course` VALUES (6, '系統分析與設計', '1031');
INSERT INTO `course` VALUES (7, '生產與作業管理', '1031');
INSERT INTO `course` VALUES (8, '延伸標記語言網頁設計', '1031');
INSERT INTO `course` VALUES (9, '資料庫系統概論', '1031');
INSERT INTO `course` VALUES (10, '管理學', '1031');
INSERT INTO `course` VALUES (11, '資料結構', '1031');
INSERT INTO `course` VALUES (12, '網路規劃與管理', '1032');
INSERT INTO `course` VALUES (13, '商用微積分(一)', '1032');
INSERT INTO `course` VALUES (14, '經濟學原理與實務', '1032');
INSERT INTO `course` VALUES (15, '計算機概論', '1032');
INSERT INTO `course` VALUES (16, '程式設計', '1032');
INSERT INTO `course` VALUES (17, '程式設計實習', '1032');
INSERT INTO `course` VALUES (18, '專案管理', '1032');
INSERT INTO `course` VALUES (19, '職涯分析與規劃', '1032');
INSERT INTO `course` VALUES (20, '創意思考', '1032');
INSERT INTO `course` VALUES (21, '商用微積分(二)', '1032');
INSERT INTO `course` VALUES (22, '物件導向程式設計', '1032');
INSERT INTO `course` VALUES (23, '網路概論', '1032');

-- --------------------------------------------------------

-- 
-- 資料表格式： `course_list`
-- 

CREATE TABLE `course_list` (
  `clistId` int(100) NOT NULL AUTO_INCREMENT COMMENT '選課單編號',
  `uid` int(100) DEFAULT NULL COMMENT 'userid',
  `cid` int(100) DEFAULT NULL COMMENT '課程編號',
  `dName` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `yName` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cName` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '學期',
  PRIMARY KEY (`clistId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=72 ;

-- 
-- 列出以下資料庫的數據： `course_list`
-- 

INSERT INTO `course_list` VALUES (5, 6, 9, '企業管理系', '1', '經濟學');
INSERT INTO `course_list` VALUES (3, 3, 3, '資訊管理系', '2', '微積分');
INSERT INTO `course_list` VALUES (4, 4, 4, '電機工程系', '4', '統計學');
INSERT INTO `course_list` VALUES (2, 5, 2, '電機工程系', '3', '積體電路');
INSERT INTO `course_list` VALUES (6, 2, 3, '企業管理系', '2', '微積分');

-- --------------------------------------------------------

-- 
-- 資料表格式： `department`
-- 

CREATE TABLE `department` (
  `did` int(11) NOT NULL COMMENT '系所編號',
  `dName` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT '系所名稱'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- 列出以下資料庫的數據： `department`
-- 

INSERT INTO `department` VALUES (1, '機械工程系');
INSERT INTO `department` VALUES (2, '化工與材料工程系');
INSERT INTO `department` VALUES (3, '電機工程系');
INSERT INTO `department` VALUES (4, '電子工程系');
INSERT INTO `department` VALUES (5, '資訊網路工程系');
INSERT INTO `department` VALUES (6, '國際企業系');
INSERT INTO `department` VALUES (7, '財務金融系');
INSERT INTO `department` VALUES (8, '企業管理系');
INSERT INTO `department` VALUES (9, '資訊管理系');
INSERT INTO `department` VALUES (10, '工業管理系');
INSERT INTO `department` VALUES (11, '應用外語系');
INSERT INTO `department` VALUES (12, '多媒體與遊戲發展科學系');
INSERT INTO `department` VALUES (13, '文化創意與數位媒體設計系');
INSERT INTO `department` VALUES (14, '觀光休閒系');

-- --------------------------------------------------------

-- 
-- 資料表格式： `user`
-- 

CREATE TABLE `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'userid',
  `passwd` int(11) DEFAULT NULL COMMENT 'userid',
  `uName` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'uname',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

-- 
-- 列出以下資料庫的數據： `user`
-- 

INSERT INTO `user` VALUES (1, 0, '洪振傑');
INSERT INTO `user` VALUES (2, 0, '陳慧馨');
INSERT INTO `user` VALUES (3, 0, '吳岱融');
INSERT INTO `user` VALUES (4, 0, '陳珮婕');
INSERT INTO `user` VALUES (5, 0, '梁晏銓');
INSERT INTO `user` VALUES (6, 0, '張凱傑');
INSERT INTO `user` VALUES (7, 0, '葉姿吟');
INSERT INTO `user` VALUES (8, 0, '蔡聖緯');
INSERT INTO `user` VALUES (9, 0, '林建翔');
INSERT INTO `user` VALUES (10, 0, '謝柏儀');
INSERT INTO `user` VALUES (11, 0, '蔡欣曄');
INSERT INTO `user` VALUES (12, 0, '邱怡閑');
INSERT INTO `user` VALUES (13, 0, '洪瑋伶');
INSERT INTO `user` VALUES (14, 0, '黃奕綺');
INSERT INTO `user` VALUES (15, 0, '張瑞岩');

-- --------------------------------------------------------

-- 
-- 資料表格式： `yid`
-- 

CREATE TABLE `yid` (
  `yid` int(11) NOT NULL AUTO_INCREMENT,
  `yName` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`yid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

-- 
-- 列出以下資料庫的數據： `yid`
-- 

INSERT INTO `yid` VALUES (1, '1');
INSERT INTO `yid` VALUES (2, '2');
INSERT INTO `yid` VALUES (3, '3');
INSERT INTO `yid` VALUES (5, '4');
