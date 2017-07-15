/*
Navicat MySQL Data Transfer

Source Server         : shakil
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : human_mind

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2016-07-21 10:12:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for future
-- ----------------------------
DROP TABLE IF EXISTS `future`;
CREATE TABLE `future` (
  `pk` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `old` int(255) NOT NULL,
  `marige` varchar(255) NOT NULL,
  PRIMARY KEY (`pk`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=ascii;

-- ----------------------------
-- Records of future
-- ----------------------------
INSERT INTO `future` VALUES ('1', 'tanveer', '24', 'no');
INSERT INTO `future` VALUES ('2', 'robi', '25', 'yes');
INSERT INTO `future` VALUES ('3', 'shakil', '24', 'no');

-- ----------------------------
-- Table structure for registration
-- ----------------------------
DROP TABLE IF EXISTS `registration`;
CREATE TABLE `registration` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `userpassword` varchar(255) NOT NULL,
  `usermo` varchar(255) NOT NULL,
  `old` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=ascii;

-- ----------------------------
-- Records of registration
-- ----------------------------
INSERT INTO `registration` VALUES ('124', '', '', '', '', '', '');
INSERT INTO `registration` VALUES ('125', '', '', '', '', '', '');
INSERT INTO `registration` VALUES ('126', 'tanveer hasan', 'hasan@', '1234', '3333333333', '18++', 'yellow');
SET FOREIGN_KEY_CHECKS=1;
