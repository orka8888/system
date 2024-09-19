/*
 Navicat MySQL Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100424 (10.4.24-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : reserved

 Target Server Type    : MySQL
 Target Server Version : 100424 (10.4.24-MariaDB)
 File Encoding         : 65001

 Date: 20/02/2023 23:46:29
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_reserved
-- ----------------------------
DROP TABLE IF EXISTS `tbl_reserved`;
CREATE TABLE `tbl_reserved`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `table_id` int NULL DEFAULT NULL,
  `booker_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `booker_tel` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `booker_date` date NULL DEFAULT NULL,
  `booker_time` time NULL DEFAULT NULL,
  `booker_datetime` datetime NULL DEFAULT NULL,
  `created_by` int NULL DEFAULT NULL,
  `created_date` datetime NULL DEFAULT NULL,
  `status` tinyint NULL DEFAULT NULL COMMENT '1=จอง, 2 เคลียร์โต๊ะ, 3 ยกเลิกการจอง',
  `action_by` int NULL DEFAULT NULL,
  `action_date` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_reserved
-- ----------------------------
INSERT INTO `tbl_reserved` VALUES (9, 1, 'aa', '022-0324125', '2023-02-20', '20:15:00', '2023-02-20 20:15:00', 1, '2023-02-20 20:12:10', 3, 1, '2023-02-20 20:15:25');
INSERT INTO `tbl_reserved` VALUES (10, 1, 'bb', 'bb', '2023-02-20', '21:21:00', '2023-02-20 21:21:00', 1, '2023-02-20 20:12:28', 2, 2, '2023-02-20 22:21:44');
INSERT INTO `tbl_reserved` VALUES (11, 1, 'cc', 'cc', '2023-02-20', '23:00:00', '2023-02-20 23:00:00', 1, '2023-02-20 20:12:47', 2, 1, '2023-02-20 20:15:21');
INSERT INTO `tbl_reserved` VALUES (12, 2, 'bb', 'bb', '2023-02-20', '21:20:00', '2023-02-20 21:20:00', 1, '2023-02-20 21:18:16', 3, 2, '2023-02-20 22:17:28');
INSERT INTO `tbl_reserved` VALUES (13, 4, 'rfjm', 'dtgj', '2023-02-21', '09:30:00', '2023-02-21 09:30:00', 2, '2023-02-20 21:23:29', 2, 2, '2023-02-20 22:17:18');
INSERT INTO `tbl_reserved` VALUES (14, 1, 'q', '022221215', '2023-02-20', '23:00:00', '2023-02-20 23:00:00', 2, '2023-02-20 22:17:57', 3, 2, '2023-02-20 22:23:24');
INSERT INTO `tbl_reserved` VALUES (15, 2, 'asedgwserg', '45545644', '2023-02-20', '23:00:00', '2023-02-20 23:00:00', 2, '2023-02-20 22:19:44', 3, 2, '2023-02-20 22:36:07');
INSERT INTO `tbl_reserved` VALUES (16, 1, 'fgjdfgd', 'fgjdfgj', '2023-02-20', '22:19:00', '2023-02-20 22:19:00', 2, '2023-02-20 22:20:53', 3, 2, '2023-02-20 22:23:32');
INSERT INTO `tbl_reserved` VALUES (17, 4, 'sdfbcsdfb', '02131', '2023-02-21', '22:22:00', '2023-02-21 22:22:00', 2, '2023-02-20 22:22:15', 1, NULL, NULL);
INSERT INTO `tbl_reserved` VALUES (18, 4, 'dgjdfrj', '12156441562', '2023-02-20', '22:22:00', '2023-02-20 22:22:00', 2, '2023-02-20 22:22:45', 1, NULL, NULL);
INSERT INTO `tbl_reserved` VALUES (19, 5, 'wsergfwsrg', '44545', '2023-02-20', '22:48:00', '2023-02-20 22:48:00', 1, '2023-02-20 22:48:18', 1, NULL, NULL);

-- ----------------------------
-- Table structure for tbl_table
-- ----------------------------
DROP TABLE IF EXISTS `tbl_table`;
CREATE TABLE `tbl_table`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `table` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `image` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'no-img.png',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_table
-- ----------------------------
INSERT INTO `tbl_table` VALUES (1, 'A1', '16767219522869.png');
INSERT INTO `tbl_table` VALUES (2, 'A2', 'no-img.png');
INSERT INTO `tbl_table` VALUES (4, 'A3', 'no-img.png');
INSERT INTO `tbl_table` VALUES (5, 'B1', '16767219854444.png');
INSERT INTO `tbl_table` VALUES (6, 'B2', 'no-img.png');
INSERT INTO `tbl_table` VALUES (7, 'C1', '16767220318330.jpg');
INSERT INTO `tbl_table` VALUES (8, 'c2', '16767220752783.jpg');

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `user_full_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tel` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `role` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `last_login` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES (1, 'admin', '$2y$10$NoGSQ5fqSFNhCITSkMsgZuyu3x22IGbo1B3DxtygMBSxUzhwDzUge', 'Administrator', 'admin@admin.com', '027070000', 'avatar.png', 'ผู้ดูแล', 'ใช้งาน', '2023-02-20 22:48:12');
INSERT INTO `tbl_user` VALUES (2, 'milk', '$2y$10$zAw2u3Mex41Kf.KreyKkpOlvWf.CRiVE8M.Dp5D3iSPy2.s7ZQUHO', 'Milk', 'milk@milk.com', '0222222222', '16257837635611.jpg', 'ผู้ใช้งาน', 'ใช้งาน', '2023-02-20 22:35:56');

-- ----------------------------
-- View structure for vw_reserved
-- ----------------------------
DROP VIEW IF EXISTS `vw_reserved`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vw_reserved` AS SELECT a.*, b.`table` AS `table_name`, b.image AS table_image, c.user_full_name AS created_by_name, d.user_full_name AS action_by_name
FROM tbl_reserved a
LEFT JOIN tbl_table b ON b.id = a.table_id
LEFT JOIN tbl_user c ON c.id = a.created_by
LEFT JOIN tbl_user d ON d.id = a.action_by ;

-- ----------------------------
-- View structure for vw_table
-- ----------------------------
DROP VIEW IF EXISTS `vw_table`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vw_table` AS SELECT a.*, CASE 
WHEN a.id IN(SELECT table_id
FROM vw_reserved
WHERE `status` = 1 AND DATE(NOW()) = booker_date AND TIME(NOW()) >= booker_time
GROUP BY table_id
ORDER BY booker_datetime ASC) THEN 'ไม่ว่าง'
ELSE 'ว่าง'
END AS reserved
FROM tbl_table a 
ORDER BY a.table ;

SET FOREIGN_KEY_CHECKS = 1;
