/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50141
 Source Host           : localhost:3306
 Source Schema         : dashboard

 Target Server Type    : MySQL
 Target Server Version : 50141
 File Encoding         : 65001

 Date: 21/02/2022 07:09:25
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for dt_dashboard
-- ----------------------------
DROP TABLE IF EXISTS `dt_dashboard`;
CREATE TABLE `dt_dashboard`  (
  `id_dt_dashboard` int(255) NOT NULL AUTO_INCREMENT,
  `id_mt_units` int(255) NOT NULL,
  `tanggal` datetime NOT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `deleted_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id_dt_dashboard`) USING BTREE,
  INDEX `fk_unit`(`id_mt_units`) USING BTREE,
  INDEX `id_dash`(`id_dt_dashboard`) USING BTREE,
  CONSTRAINT `fk_unit` FOREIGN KEY (`id_mt_units`) REFERENCES `mt_unit` (`id_mt_unit`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of dt_dashboard
-- ----------------------------

-- ----------------------------
-- Table structure for dt_dashboard_det
-- ----------------------------
DROP TABLE IF EXISTS `dt_dashboard_det`;
CREATE TABLE `dt_dashboard_det`  (
  `id_dt_dashboard_det` int(255) NOT NULL AUTO_INCREMENT,
  `id_dt_dashboard` int(255) NOT NULL,
  `id_penjamin` int(255) NOT NULL,
  `id_type` int(255) NOT NULL,
  `jumlah` float NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `deleted_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id_dt_dashboard_det`) USING BTREE,
  INDEX `fk_penjamin`(`id_penjamin`) USING BTREE,
  INDEX `fk_dashboard`(`id_dt_dashboard`) USING BTREE,
  INDEX `fk_type`(`id_type`) USING BTREE,
  CONSTRAINT `fk_dashboard` FOREIGN KEY (`id_dt_dashboard`) REFERENCES `dt_dashboard` (`id_dt_dashboard`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_penjamin` FOREIGN KEY (`id_penjamin`) REFERENCES `mt_penjamin` (`id_mt_penjamin`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_type` FOREIGN KEY (`id_type`) REFERENCES `mt_type_dashboard` (`id_mt_type_dashboard`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of dt_dashboard_det
-- ----------------------------

-- ----------------------------
-- Table structure for mt_penjamin
-- ----------------------------
DROP TABLE IF EXISTS `mt_penjamin`;
CREATE TABLE `mt_penjamin`  (
  `id_mt_penjamin` int(255) NOT NULL AUTO_INCREMENT,
  `penjamin` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` int(255) NOT NULL DEFAULT 1,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `deleted_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id_mt_penjamin`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of mt_penjamin
-- ----------------------------
INSERT INTO `mt_penjamin` VALUES (1, 'SWASTA', 1, NULL, NULL, NULL);
INSERT INTO `mt_penjamin` VALUES (2, 'ASURANSI', 1, NULL, NULL, NULL);
INSERT INTO `mt_penjamin` VALUES (3, 'BPJS', 1, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for mt_type_dashboard
-- ----------------------------
DROP TABLE IF EXISTS `mt_type_dashboard`;
CREATE TABLE `mt_type_dashboard`  (
  `id_mt_type_dashboard` int(255) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` int(255) NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `deleted_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id_mt_type_dashboard`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of mt_type_dashboard
-- ----------------------------
INSERT INTO `mt_type_dashboard` VALUES (1, 'Kunjungan Pasien', 1, NULL, NULL, NULL);
INSERT INTO `mt_type_dashboard` VALUES (2, 'Pendapatan', 1, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for mt_unit
-- ----------------------------
DROP TABLE IF EXISTS `mt_unit`;
CREATE TABLE `mt_unit`  (
  `id_mt_unit` int(255) NOT NULL AUTO_INCREMENT,
  `unit` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` int(255) NOT NULL DEFAULT 1,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `deleted_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id_mt_unit`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of mt_unit
-- ----------------------------
INSERT INTO `mt_unit` VALUES (1, 'RUMAH SAKIT LAVALETTE MALANG', 1, NULL, NULL, NULL);
INSERT INTO `mt_unit` VALUES (2, 'RUMAH SAKIT WONOLANGAN PROBOLINGGO', 1, NULL, NULL, NULL);
INSERT INTO `mt_unit` VALUES (3, 'RUMAH SAKIT DJATIROTO LUMAJANG', 1, NULL, NULL, NULL);
INSERT INTO `mt_unit` VALUES (4, 'RUMAH SAKIT ELIZABETH SITUBONDO', 1, NULL, NULL, NULL);

-- ----------------------------
-- View structure for v_console
-- ----------------------------
DROP VIEW IF EXISTS `v_console`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_console` AS SELECT
	dt_dashboard.tanggal, 
	mt_unit.id_mt_unit, 
	mt_unit.unit, 
	SUM(CASE WHEN dt_dashboard_det.id_penjamin=1 AND dt_dashboard_det.id_type=1 THEN 1 ELSE 0 END) AS swasta_1,
	SUM(CASE WHEN dt_dashboard_det.id_penjamin=2 AND dt_dashboard_det.id_type=1 THEN 1 ELSE 0 END) AS asuransi_1,
	SUM(CASE WHEN dt_dashboard_det.id_penjamin=3 AND dt_dashboard_det.id_type=1 THEN 1 ELSE 0 END) AS bpjs_1,
	SUM(CASE WHEN dt_dashboard_det.id_penjamin=1 AND dt_dashboard_det.id_type=2 THEN 1 ELSE 0 END) AS swasta_2,
	SUM(CASE WHEN dt_dashboard_det.id_penjamin=2 AND dt_dashboard_det.id_type=2 THEN 1 ELSE 0 END) AS asuransi_2,
	SUM(CASE WHEN dt_dashboard_det.id_penjamin=3 AND dt_dashboard_det.id_type=2 THEN 1 ELSE 0 END) AS bpjs_2

FROM
	dt_dashboard
	INNER JOIN
	dt_dashboard_det
	ON 
		dt_dashboard.id_dt_dashboard = dt_dashboard_det.id_dt_dashboard
	INNER JOIN
	mt_unit
	ON 
		dt_dashboard.id_mt_units = mt_unit.id_mt_unit
	INNER JOIN
	mt_penjamin
	ON 
		dt_dashboard_det.id_penjamin = mt_penjamin.id_mt_penjamin
	INNER JOIN
	mt_type_dashboard
	ON 
		dt_dashboard_det.id_type = mt_type_dashboard.id_mt_type_dashboard
WHERE
	mt_unit.deleted_at = 1 AND
	mt_penjamin.`status` = 1 AND
	mt_type_dashboard.`status` = 1 
GROUP BY
	dt_dashboard.tanggal, 
	dt_dashboard.id_mt_units, 
	mt_unit.unit ;

SET FOREIGN_KEY_CHECKS = 1;
