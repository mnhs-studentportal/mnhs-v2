/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100425
 Source Host           : localhost:3306
 Source Schema         : mnhs

 Target Server Type    : MySQL
 Target Server Version : 100425
 File Encoding         : 65001

 Date: 17/11/2022 15:30:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for menu_setup
-- ----------------------------
DROP TABLE IF EXISTS `menu_setup`;
CREATE TABLE `menu_setup`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `tittle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of menu_setup
-- ----------------------------
INSERT INTO `menu_setup` VALUES (1, 'HOME', 'home');
INSERT INTO `menu_setup` VALUES (2, 'ABOUT US', 'about_us');
INSERT INTO `menu_setup` VALUES (4, 'CURRICULUM', 'curriculum');
INSERT INTO `menu_setup` VALUES (5, 'ACTIVITIES/EVENTS', 'activities-evetns');
INSERT INTO `menu_setup` VALUES (8, 'REGISTRATION', 'registration');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `tittle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `image_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `logs` datetime NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES (1, 'SAMPLE NEWS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'images/blog-lg.jpg', '2022-10-31 14:45:24');

-- ----------------------------
-- Table structure for registration
-- ----------------------------
DROP TABLE IF EXISTS `registration`;
CREATE TABLE `registration`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `gu_id` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `user_id` int NULL DEFAULT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `middle_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `age` int NULL DEFAULT NULL,
  `bdate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `home_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `zipcode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `province` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `contact_num` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `profession` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `prof_id` int NULL DEFAULT NULL,
  `profilepic_location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `user_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `logs` timestamp NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of registration
-- ----------------------------
INSERT INTO `registration` VALUES (1, '1', 1, 'admin', 'admin', NULL, NULL, 'admin', 'none', 'none', NULL, NULL, NULL, 'none', 'admin@email.com', 'administrator', 1, 'images/default.jpg', NULL, '2022-10-12 03:25:58');
INSERT INTO `registration` VALUES (2, 'rg6346022c6456a', 1, 'sample', 'sample', 24, '12-12.-2022', 'sample', 'male', 'sample address', '1234', 'cebu', 'philippines', '123456789', 'email@email.com', 'Student', NULL, NULL, '3', '2022-10-12 07:54:20');
INSERT INTO `registration` VALUES (3, 'rg6346027f23406', 1, 'sample 2', 'sample', 24, '12-12.-2022', 'sample 2', 'male', 'sample address', '1234', 'cebu', 'philippines', '123456789', 'email@email.com', 'Student', NULL, NULL, '3', '2022-10-12 07:55:43');
INSERT INTO `registration` VALUES (4, 'rg635f470a495a0', 1, 'asdasd', 'asdada', 12, '2022-10-24', 'asdasd', 'male', 'asdasdad', '123123', 'asdadad', 'asdadads', '1231312313', 'asda@email.com', 'Student', NULL, NULL, '3', '2022-10-31 11:54:50');
INSERT INTO `registration` VALUES (5, 'rg635f479d2097b', 1, 'asdads', 'adsasd', 12, '2022-10-24', 'asdasd', 'male', 'asdasdad', '123123', 'sdasdas', 'asdadad', '123123', 'asdas', 'Student', NULL, NULL, '3', '2022-10-31 11:57:17');

-- ----------------------------
-- Table structure for rule_type_setup
-- ----------------------------
DROP TABLE IF EXISTS `rule_type_setup`;
CREATE TABLE `rule_type_setup`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `tittle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of rule_type_setup
-- ----------------------------
INSERT INTO `rule_type_setup` VALUES (1, 'admin');
INSERT INTO `rule_type_setup` VALUES (2, 'guest');
INSERT INTO `rule_type_setup` VALUES (3, 'student');

-- ----------------------------
-- Table structure for updates
-- ----------------------------
DROP TABLE IF EXISTS `updates`;
CREATE TABLE `updates`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `tittle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `type` int NULL DEFAULT NULL,
  `img_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `logs` datetime NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of updates
-- ----------------------------
INSERT INTO `updates` VALUES (1, 'SAMPLE UPDATE ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, 'images/la.jpg', '2022-10-31 14:45:57');

-- ----------------------------
-- Table structure for user_rules
-- ----------------------------
DROP TABLE IF EXISTS `user_rules`;
CREATE TABLE `user_rules`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NULL DEFAULT NULL,
  `user_type` int NULL DEFAULT NULL,
  `user_tittle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `rules` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of user_rules
-- ----------------------------
INSERT INTO `user_rules` VALUES (1, 1, 1, 'admin', 1);
INSERT INTO `user_rules` VALUES (2, 1, 1, 'admin', 2);
INSERT INTO `user_rules` VALUES (3, 1, 1, 'admin', 3);
INSERT INTO `user_rules` VALUES (4, 1, 1, 'admin', 4);
INSERT INTO `user_rules` VALUES (5, 1, 1, 'admin', 5);
INSERT INTO `user_rules` VALUES (6, 1, 1, 'admin', 6);
INSERT INTO `user_rules` VALUES (8, 2, 2, 'guest', 1);
INSERT INTO `user_rules` VALUES (9, 2, 2, 'guest', 2);
INSERT INTO `user_rules` VALUES (10, 2, 2, 'guest', 3);
INSERT INTO `user_rules` VALUES (11, 2, 2, 'guest', 4);
INSERT INTO `user_rules` VALUES (12, 1, 1, 'admin', 8);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `role_type` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', 'admin', 1);
INSERT INTO `users` VALUES (2, 'guest', '1234', 2);

SET FOREIGN_KEY_CHECKS = 1;
