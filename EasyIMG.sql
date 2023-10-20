/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50553
 Source Host           : localhost:3306
 Source Schema         : security

 Target Server Type    : MySQL
 Target Server Version : 50553
 File Encoding         : 65001

 Date: 21/09/2023 15:30:23
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for flag
-- ----------------------------
DROP TABLE IF EXISTS `flag`;
CREATE TABLE `flag`  (
  `flag` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of flag
-- ----------------------------
INSERT INTO `flag` VALUES ('flag{replace_flag_here}');

-- ----------------------------
-- Table structure for img
-- ----------------------------
DROP TABLE IF EXISTS `img`;
CREATE TABLE `img`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `author` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `time` datetime NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 32 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of img
-- ----------------------------
INSERT INTO `img` VALUES (1, 'img/671753761.jpg', '穿越冰原', 'Tomislav Veic', '2023-01-01 15:28:06', '克罗地亚最大的原始森林，这条路贯穿其中，形成令人惊艳的构图。');
INSERT INTO `img` VALUES (2, 'img/595835883.jpg', '贡嘎山', 'Jinjing Lyu', '2023-01-03 15:26:19', '我知道我并不孤单，在寻找贡嘎山最佳景观的途中，亲眼目睹了大自然的美轮美奂，梦幻而神秘。');

SET FOREIGN_KEY_CHECKS = 1;
