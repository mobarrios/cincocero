/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50709
 Source Host           : localhost
 Source Database       : tfc

 Target Server Type    : MySQL
 Target Server Version : 50709
 File Encoding         : utf-8

 Date: 03/16/2016 09:34:11 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `canchas`
-- ----------------------------
DROP TABLE IF EXISTS `canchas`;
CREATE TABLE `canchas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sedes_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `canchas_sedes_id_foreign` (`sedes_id`),
  CONSTRAINT `canchas_sedes_id_foreign` FOREIGN KEY (`sedes_id`) REFERENCES `sedes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `canchas`
-- ----------------------------
BEGIN;
INSERT INTO `canchas` VALUES ('1', '2016-01-12 15:56:41', '2016-01-14 00:58:43', null, 'Cancha 1', '2'), ('2', '2016-01-12 15:56:50', '2016-01-14 00:58:20', null, 'Cancha 2', '2');
COMMIT;

-- ----------------------------
--  Table structure for `categories`
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color_top` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `color_bottom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `categories`
-- ----------------------------
BEGIN;
INSERT INTO `categories` VALUES ('1', '2016-01-12 15:34:02', '2016-01-12 15:34:02', null, 'Futbol 11', '#d42a7a', '#f01d1d');
COMMIT;

-- ----------------------------
--  Table structure for `destacados`
-- ----------------------------
DROP TABLE IF EXISTS `destacados`;
CREATE TABLE `destacados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `fases_week_id` int(11) NOT NULL,
  `teams_id` int(11) NOT NULL,
  `players_id` int(11) NOT NULL,
  `nota` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `destacados`
-- ----------------------------
BEGIN;
INSERT INTO `destacados` VALUES ('1', '2016-01-21 22:47:04', '2016-01-21 22:47:04', null, '31', '0', '1', '<p>Cra</p>'), ('2', '2016-01-21 23:09:11', '2016-01-21 23:09:11', null, '31', '2', '0', '<p>jbuhvhj</p>'), ('3', '2016-01-21 23:26:38', '2016-01-21 23:26:38', null, '32', '0', '9', '<p>crfaes</p>'), ('4', '2016-01-21 23:28:30', '2016-01-21 23:28:30', null, '32', '3', '0', '<p>qwfqwdq</p>'), ('5', '2016-01-22 16:17:21', '2016-01-22 16:17:21', null, '34', '0', '10', '<p>23r23r23</p>'), ('6', '2016-01-22 16:17:29', '2016-01-22 16:17:29', null, '34', '2', '0', '<p>r2r23r23r23r</p>');
COMMIT;

-- ----------------------------
--  Table structure for `destacados_categories`
-- ----------------------------
DROP TABLE IF EXISTS `destacados_categories`;
CREATE TABLE `destacados_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `seasons_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `players_id` int(11) DEFAULT NULL,
  `teams_id` int(11) DEFAULT NULL,
  `observations` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `destacados_categories`
-- ----------------------------
BEGIN;
INSERT INTO `destacados_categories` VALUES ('1', '2016-03-04 14:49:55', '2016-03-04 16:10:02', null, '1', '1', '1', null, '<p>xxx</p>'), ('3', '2016-03-04 23:04:39', '2016-03-04 23:17:56', null, '1', '2', null, '2', '<p>vw</p>'), ('4', '2016-03-04 23:20:54', '2016-03-04 23:20:54', null, '2', '1', null, '1', '<p>lp``lp`</p>'), ('5', '2016-03-04 23:21:44', '2016-03-04 23:21:44', null, '2', '2', null, '3', '<p>ipjo</p>');
COMMIT;

-- ----------------------------
--  Table structure for `fases`
-- ----------------------------
DROP TABLE IF EXISTS `fases`;
CREATE TABLE `fases` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tournaments_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `fases`
-- ----------------------------
BEGIN;
INSERT INTO `fases` VALUES ('1', '2016-01-20 23:36:45', '2016-01-20 23:36:45', null, 'Serie A', '1'), ('2', '2016-01-21 00:20:27', '2016-01-21 00:20:27', null, 'Serie B', '1'), ('3', '2016-01-21 21:03:49', '2016-01-21 21:03:49', null, 'ddsad', '3'), ('5', '2016-02-16 15:46:36', '2016-02-24 15:32:01', null, 'Faseo', '5'), ('6', '2016-02-16 15:47:04', '2016-02-24 15:31:53', null, 'Fase', '6'), ('12', '2016-02-16 16:32:48', '2016-02-16 16:32:48', null, 'das', '1'), ('13', '2016-03-11 13:29:37', '2016-03-11 13:29:37', null, '312', '2'), ('15', '2016-03-15 13:09:35', '2016-03-15 13:09:35', null, 'dasdasd', '4');
COMMIT;

-- ----------------------------
--  Table structure for `fases_teams`
-- ----------------------------
DROP TABLE IF EXISTS `fases_teams`;
CREATE TABLE `fases_teams` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `fases_id` int(10) unsigned NOT NULL,
  `teams_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fases_teams_fases_id_foreign` (`fases_id`),
  KEY `fases_teams_teams_id_foreign` (`teams_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `fases_teams`
-- ----------------------------
BEGIN;
INSERT INTO `fases_teams` VALUES ('1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', null, '1', '1'), ('2', '0000-00-00 00:00:00', '0000-00-00 00:00:00', null, '1', '2'), ('3', '0000-00-00 00:00:00', '0000-00-00 00:00:00', null, '1', '3'), ('4', '0000-00-00 00:00:00', '0000-00-00 00:00:00', null, '2', '2'), ('5', '0000-00-00 00:00:00', '0000-00-00 00:00:00', null, '2', '3'), ('9', '0000-00-00 00:00:00', '0000-00-00 00:00:00', null, '13', '1'), ('10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', null, '13', '2'), ('11', '0000-00-00 00:00:00', '0000-00-00 00:00:00', null, '13', '3'), ('14', '0000-00-00 00:00:00', '0000-00-00 00:00:00', null, '15', '1'), ('15', '0000-00-00 00:00:00', '0000-00-00 00:00:00', null, '15', '2'), ('16', '0000-00-00 00:00:00', '0000-00-00 00:00:00', null, '15', '3');
COMMIT;

-- ----------------------------
--  Table structure for `fases_week`
-- ----------------------------
DROP TABLE IF EXISTS `fases_week`;
CREATE TABLE `fases_week` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fases_id` int(10) unsigned NOT NULL,
  `active` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `fases_week`
-- ----------------------------
BEGIN;
INSERT INTO `fases_week` VALUES ('31', '2016-01-20 23:36:45', '2016-01-22 17:33:05', null, '1', '1', '1'), ('32', '2016-01-20 23:36:45', '2016-01-22 17:33:05', null, '2', '1', '0'), ('33', '2016-01-20 23:36:45', '2016-01-22 17:28:01', null, '3', '1', '0'), ('34', '2016-01-21 00:20:27', '2016-01-22 16:16:48', null, '1', '2', '1'), ('40', '2016-01-25 14:19:19', '2016-01-25 14:19:19', null, '3', '4', '0'), ('47', '2016-02-16 16:32:48', '2016-02-16 17:09:31', null, '2', '12', '1'), ('48', '2016-02-16 16:32:48', '2016-02-16 16:32:48', null, '3', '12', null), ('49', '2016-03-11 13:29:37', '2016-03-11 14:46:01', null, '1', '13', '1'), ('50', '2016-03-11 13:29:37', '2016-03-11 13:29:37', null, '2', '13', null), ('51', '2016-03-11 13:29:37', '2016-03-11 13:29:37', null, '3', '13', null), ('53', '2016-03-15 13:09:35', '2016-03-15 13:09:35', null, '1', '15', null), ('54', '2016-03-15 13:09:35', '2016-03-15 13:09:35', null, '2', '15', null), ('55', '2016-03-15 13:09:35', '2016-03-15 13:09:35', null, '3', '15', null);
COMMIT;

-- ----------------------------
--  Table structure for `galleries`
-- ----------------------------
DROP TABLE IF EXISTS `galleries`;
CREATE TABLE `galleries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Records of `galleries`
-- ----------------------------
BEGIN;
INSERT INTO `galleries` VALUES ('8', '2016-03-06 14:21:55', '2016-03-06 14:21:55', '0000-00-00 00:00:00', 'opkpopo'), ('9', '2016-03-06 14:22:13', '2016-03-06 14:22:13', '0000-00-00 00:00:00', 'nop');
COMMIT;

-- ----------------------------
--  Table structure for `horarios`
-- ----------------------------
DROP TABLE IF EXISTS `horarios`;
CREATE TABLE `horarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `horarios`
-- ----------------------------
BEGIN;
INSERT INTO `horarios` VALUES ('1', '2016-02-26 15:52:53', '2016-02-26 15:53:05', null, '10:00'), ('2', '2016-02-26 15:53:10', '2016-02-26 15:53:10', null, '13:00'), ('3', '2016-02-26 15:53:15', '2016-02-26 15:53:15', null, '15:00');
COMMIT;

-- ----------------------------
--  Table structure for `images`
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `entity` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `entity_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `images`
-- ----------------------------
BEGIN;
INSERT INTO `images` VALUES ('3', '2016-01-12 20:28:17', '2016-01-12 20:28:17', null, 'news', 'uploads/tfc/news/images/1452630497.png', '1'), ('4', '2016-01-13 13:59:18', '2016-01-13 13:59:18', null, 'categories', 'uploads/tfc/categories/images/1452693558.jpg', '1'), ('5', '2016-01-13 17:36:14', '2016-01-13 17:36:14', null, 'news', 'uploads/tfc/news/images/1452706574.jpg', '2'), ('6', '2016-01-14 00:18:31', '2016-01-14 00:18:31', null, 'players', 'uploads/tfc/players/images/1452730711.jpg', '4'), ('7', '2016-01-14 11:52:37', '2016-01-14 11:52:37', null, 'sedes', 'uploads/tfc/sedes/images/1452772357.jpg', '2'), ('8', '2016-01-15 12:37:57', '2016-01-15 12:37:57', null, 'players', 'uploads/tfc/players/images/1452861476.jpg', '1'), ('9', '2016-01-15 12:41:49', '2016-01-15 12:41:49', null, 'players', 'uploads/tfc/players/images/1452861709.jpg', '2'), ('11', '2016-01-21 23:13:47', '2016-01-21 23:13:47', null, 'teams', 'uploads/tfc/teams/images/1453418027.jpg', '2'), ('12', '2016-03-04 15:12:49', '2016-03-04 15:12:49', null, 'players', 'uploads/tfc/players/images/1457104369.jpg', '11'), ('13', '2016-03-06 14:21:55', '2016-03-06 14:21:55', null, 'galleries', 'uploads/tfc/galleries/images/1457274115.jpg', '8');
COMMIT;

-- ----------------------------
--  Table structure for `matches`
-- ----------------------------
DROP TABLE IF EXISTS `matches`;
CREATE TABLE `matches` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hour` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fases_week_id` int(10) unsigned NOT NULL,
  `home_teams_id` int(10) unsigned DEFAULT NULL,
  `away_teams_id` int(10) unsigned DEFAULT NULL,
  `canchas_id` int(11) DEFAULT NULL,
  `home_goals` int(11) DEFAULT NULL,
  `away_goals` int(11) DEFAULT NULL,
  `walk_over` tinyint(1) DEFAULT NULL,
  `walk_over_motivo` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `matches_fases_week_id_foreign` (`fases_week_id`),
  KEY `matches_home_teams_id_foreign` (`home_teams_id`),
  KEY `matches_away_teams_id_foreign` (`away_teams_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `matches`
-- ----------------------------
BEGIN;
INSERT INTO `matches` VALUES ('1', '2016-01-20 23:36:45', '2016-01-20 23:36:45', null, '1', null, null, null, '31', '1', null, null, '0', '0', '0', ''), ('2', '2016-01-20 23:36:45', '2016-02-26 17:01:38', null, '2', '15:00', '2016-01-25', '1', '31', '2', '3', '2', '1', '0', '0', ''), ('3', '2016-01-20 23:36:45', '2016-01-20 23:36:45', null, '1', null, null, null, '32', '3', null, null, '0', '0', '0', ''), ('4', '2016-01-20 23:36:45', '2016-02-26 17:01:59', null, '2', '15:00', '2016-01-25', '1', '32', '1', '2', '1', '3', '1', '1', 'lo'), ('5', '2016-01-20 23:36:45', '2016-01-20 23:36:45', null, '1', null, null, null, '33', '2', null, null, '0', '0', '0', ''), ('6', '2016-01-20 23:36:45', '2016-02-03 14:21:49', null, '2', '0', '1970-01-01', '2', '33', '3', '1', '0', '0', '0', '1', ''), ('7', '2016-01-21 00:20:27', '2016-02-24 15:39:34', null, '1', '10:00', '1970-01-01', '1', '34', '2', '3', '0', '0', '0', '0', ''), ('18', '2016-01-25 14:19:19', '2016-01-25 14:19:19', null, '1', null, null, null, '40', '2', null, null, null, null, '0', ''), ('19', '2016-01-25 14:19:19', '2016-02-03 15:53:33', null, '2', '15:15', '2016-02-19', '2', '40', '3', '1', '2', '3', '1', '0', ''), ('24', '2016-02-16 16:32:48', '2016-02-16 16:32:48', null, '1', null, null, null, '47', '3', null, null, null, null, null, null), ('25', '2016-02-16 16:32:48', '2016-02-16 16:58:55', null, '2', '11:45', '2016-02-13', '2', '47', '1', '2', '2', '3', '0', '1', ''), ('26', '2016-02-16 16:32:48', '2016-02-16 16:32:48', null, '1', null, null, null, '48', '2', null, null, null, null, null, null), ('27', '2016-02-16 16:32:48', '2016-02-16 17:00:15', null, '2', '11:45', '2016-02-28', '2', '48', '3', '1', '2', null, null, '1', null), ('28', '2016-03-11 13:29:37', '2016-03-11 13:29:37', null, '1', null, null, '1', '49', '1', null, null, null, null, null, null), ('29', '2016-03-11 13:29:37', '2016-03-11 14:47:38', null, '2', '10:00', '2016-03-11', '2', '49', '2', '3', '0', '1', '0', null, ''), ('30', '2016-03-11 13:29:37', '2016-03-11 13:29:37', null, '1', null, null, '1', '50', '3', null, null, null, null, null, null), ('31', '2016-03-11 13:29:37', '2016-03-11 13:29:37', null, '2', null, null, '1', '50', '1', '2', null, null, null, null, null), ('32', '2016-03-11 13:29:37', '2016-03-11 13:29:37', null, '1', null, null, '1', '51', '2', null, null, null, null, null, null), ('33', '2016-03-11 13:29:37', '2016-03-11 13:29:37', null, '2', null, null, '1', '51', '3', '1', null, null, null, null, null), ('35', '2016-03-15 13:09:35', '2016-03-15 13:09:35', null, '1', null, null, '1', '53', '1', null, null, null, null, null, null), ('36', '2016-03-15 13:09:35', '2016-03-15 13:09:35', null, '2', null, null, '1', '53', '2', '3', null, null, null, null, null), ('37', '2016-03-15 13:09:35', '2016-03-15 13:09:35', null, '1', null, null, '1', '54', '3', null, null, null, null, null, null), ('38', '2016-03-15 13:09:35', '2016-03-15 13:09:35', null, '2', null, null, '1', '54', '1', '2', null, null, null, null, null), ('39', '2016-03-15 13:09:35', '2016-03-15 13:09:35', null, '1', null, null, '1', '55', '2', null, null, null, null, null, null), ('40', '2016-03-15 13:09:35', '2016-03-15 13:09:35', null, '2', null, null, '1', '55', '3', '1', null, null, null, null, null);
COMMIT;

-- ----------------------------
--  Table structure for `matches_details`
-- ----------------------------
DROP TABLE IF EXISTS `matches_details`;
CREATE TABLE `matches_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `matches_id` int(11) NOT NULL,
  `players_id` int(11) NOT NULL,
  `yellow` int(11) DEFAULT NULL,
  `red` tinyint(1) DEFAULT NULL,
  `goals` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `matches_details`
-- ----------------------------
BEGIN;
INSERT INTO `matches_details` VALUES ('1', '2016-01-21 00:07:40', '2016-01-26 13:50:42', '0000-00-00 00:00:00', '2', '2', '0', '0', '2'), ('2', '2016-01-21 00:07:40', '2016-01-26 13:50:42', '0000-00-00 00:00:00', '2', '4', '2', '0', '2'), ('3', '2016-01-21 00:08:03', '2016-01-21 00:08:03', '0000-00-00 00:00:00', '4', '1', '0', '0', '2'), ('4', '2016-01-21 00:08:03', '2016-01-21 00:08:03', '0000-00-00 00:00:00', '4', '2', '0', '0', '0'), ('5', '2016-01-21 00:08:03', '2016-01-21 00:08:03', '0000-00-00 00:00:00', '4', '4', '0', '0', '1'), ('6', '2016-01-21 21:31:18', '2016-01-21 21:31:18', '0000-00-00 00:00:00', '2', '10', '0', '0', '0'), ('7', '2016-01-21 21:41:50', '2016-01-21 21:41:50', '0000-00-00 00:00:00', '9', '2', '0', '0', '1'), ('8', '2016-01-21 21:41:50', '2016-01-21 21:41:50', '0000-00-00 00:00:00', '9', '4', '0', '0', '0'), ('9', '2016-01-21 21:41:50', '2016-01-21 21:41:50', '0000-00-00 00:00:00', '9', '10', '0', '0', '0'), ('10', '2016-01-21 21:42:27', '2016-01-21 21:42:27', '0000-00-00 00:00:00', '11', '1', '0', '0', '1'), ('11', '2016-01-21 21:42:27', '2016-01-21 21:42:27', '0000-00-00 00:00:00', '11', '9', '0', '0', '0'), ('12', '2016-01-21 21:42:27', '2016-01-21 21:42:27', '0000-00-00 00:00:00', '11', '2', '0', '0', '0'), ('13', '2016-01-21 21:42:27', '2016-01-21 21:42:27', '0000-00-00 00:00:00', '11', '4', '0', '0', '1'), ('14', '2016-01-21 21:42:56', '2016-01-21 21:42:56', '0000-00-00 00:00:00', '13', '10', '0', '0', '3'), ('15', '2016-01-21 21:42:56', '2016-01-21 21:42:56', '0000-00-00 00:00:00', '13', '1', '0', '0', '1'), ('16', '2016-01-21 21:42:56', '2016-01-21 21:42:56', '0000-00-00 00:00:00', '13', '9', '0', '0', '1'), ('17', '2016-01-21 21:49:31', '2016-01-21 21:49:31', '0000-00-00 00:00:00', '7', '2', '0', '0', '0'), ('18', '2016-01-21 21:49:31', '2016-01-21 21:49:31', '0000-00-00 00:00:00', '7', '4', '0', '0', '0'), ('19', '2016-01-21 21:49:31', '2016-01-21 21:49:31', '0000-00-00 00:00:00', '7', '10', '0', '0', '0'), ('20', '2016-02-03 14:46:04', '2016-02-03 14:46:04', '0000-00-00 00:00:00', '17', '1', '0', '0', '0'), ('21', '2016-02-03 14:46:04', '2016-02-03 14:46:04', '0000-00-00 00:00:00', '17', '9', '0', '0', '0'), ('22', '2016-02-03 14:46:04', '2016-02-03 14:46:04', '0000-00-00 00:00:00', '17', '11', '0', '0', '0'), ('23', '2016-02-03 14:46:04', '2016-02-03 14:46:04', '0000-00-00 00:00:00', '17', '2', '0', '0', '0'), ('24', '2016-02-03 14:46:04', '2016-02-03 14:46:04', '0000-00-00 00:00:00', '17', '4', '0', '0', '0'), ('25', '2016-02-03 15:53:33', '2016-02-03 15:53:33', '0000-00-00 00:00:00', '19', '10', '1', '0', '3'), ('26', '2016-02-03 15:53:33', '2016-02-03 15:53:33', '0000-00-00 00:00:00', '19', '1', '0', '1', '0'), ('27', '2016-02-03 15:53:33', '2016-02-03 15:53:33', '0000-00-00 00:00:00', '19', '9', '0', '0', '1'), ('28', '2016-02-03 15:53:33', '2016-02-03 15:53:33', '0000-00-00 00:00:00', '19', '11', '2', '0', '0'), ('29', '2016-02-16 16:58:55', '2016-02-16 16:58:55', '2016-02-16 13:58:55', '25', '1', '0', '0', '0'), ('30', '2016-02-16 16:58:55', '2016-02-16 16:58:55', '2016-02-16 13:58:55', '25', '9', '0', '0', '0'), ('31', '2016-02-16 16:58:55', '2016-02-16 16:58:55', '2016-02-16 13:58:55', '25', '11', '0', '0', '0'), ('32', '2016-02-16 16:58:55', '2016-02-16 16:58:55', '2016-02-16 13:58:55', '25', '12', '0', '0', '0'), ('33', '2016-02-16 16:58:55', '2016-02-16 16:58:55', '2016-02-16 13:58:55', '25', '2', '0', '0', '0'), ('34', '2016-02-16 16:58:55', '2016-02-16 16:58:55', '2016-02-16 13:58:55', '25', '4', '0', '0', '0'), ('35', '2016-03-11 14:00:51', '2016-03-11 14:00:51', '2016-03-11 11:00:51', '29', '2', '0', '0', '1'), ('36', '2016-03-11 14:00:51', '2016-03-11 14:00:51', '2016-03-11 11:00:51', '29', '4', '0', '0', '0'), ('37', '2016-03-11 14:00:51', '2016-03-11 14:00:51', '2016-03-11 11:00:51', '29', '10', '0', '0', '0');
COMMIT;

-- ----------------------------
--  Table structure for `menus`
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `routes` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `main` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `menus`
-- ----------------------------
BEGIN;
INSERT INTO `menus` VALUES ('1', '2015-11-12 23:21:32', '2015-11-12 23:21:32', null, 'Sedes', 'sedes', '0'), ('2', '2015-11-12 23:21:43', '2015-11-12 23:21:43', null, 'Equipos', 'teams', '0'), ('3', '2015-11-12 23:21:57', '2015-11-12 23:21:57', null, 'Jugadores', 'players', '0'), ('4', '2015-11-12 23:22:25', '2015-11-12 23:22:25', null, 'Canchas', 'canchas', '0'), ('5', '2015-11-12 23:22:37', '2015-11-12 23:22:37', null, 'Categorias', 'categories', '0'), ('6', '2015-11-17 18:51:20', '2015-11-17 18:51:20', null, 'Competencia', '', '0'), ('7', '2015-11-17 18:51:30', '2015-11-17 18:51:30', null, 'Temporadas', 'seasons', '6'), ('8', '2016-01-12 20:24:34', '2016-01-12 20:24:34', null, 'Noticias', 'news', '0'), ('9', '2016-02-26 15:52:07', '2016-02-26 15:52:07', null, 'Configuración', '', '0'), ('10', '2016-02-26 15:52:25', '2016-02-26 15:52:25', null, 'Horarios de Partidos', 'horarios', '9'), ('11', '2016-02-26 16:08:22', '2016-02-26 16:08:22', null, 'Sanciones Detalles', 'sancionesDetails', '9'), ('12', '2016-03-06 14:16:18', '2016-03-06 14:16:18', null, 'Galeria', 'galleries', '0');
COMMIT;

-- ----------------------------
--  Table structure for `modules`
-- ----------------------------
DROP TABLE IF EXISTS `modules`;
CREATE TABLE `modules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `available` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `modules`
-- ----------------------------
BEGIN;
INSERT INTO `modules` VALUES ('3', '2015-11-12 23:20:02', '2015-11-12 23:20:02', null, 'sedes', null), ('4', '2015-11-12 23:20:07', '2015-11-12 23:20:07', null, 'canchas', null), ('5', '2015-11-12 23:20:13', '2015-11-12 23:20:13', null, 'players', null), ('6', '2015-11-12 23:20:18', '2015-11-12 23:20:18', null, 'teams', null), ('7', '2015-11-12 23:20:25', '2015-11-12 23:20:25', null, 'categories', null), ('8', '2015-11-17 18:23:52', '2015-11-17 18:23:52', null, 'seasons', null), ('9', '2015-11-17 21:38:17', '2015-11-24 13:58:24', null, 'fases', null), ('10', '2015-11-17 22:20:25', '2015-11-17 22:20:25', null, 'tournaments', null), ('11', '2015-11-26 15:10:04', '2015-11-26 15:10:04', null, 'matches', null), ('12', '2016-01-12 20:23:51', '2016-01-12 20:23:51', null, 'news', null), ('13', '2016-01-19 15:41:52', '2016-01-19 15:41:52', null, 'sanciones', null), ('14', '2016-01-21 22:26:37', '2016-01-21 22:26:37', null, 'destacados', null), ('15', '2016-02-26 15:50:01', '2016-02-26 15:50:01', null, 'horarios', null), ('16', '2016-02-26 16:07:52', '2016-02-26 16:07:52', null, 'sancionesDetails', null), ('17', '2016-03-06 14:16:49', '2016-03-06 14:16:49', null, 'galleries', null);
COMMIT;

-- ----------------------------
--  Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date` date NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `news`
-- ----------------------------
BEGIN;
INSERT INTO `news` VALUES ('1', '2016-01-12 20:28:17', '2016-01-12 20:28:17', '0000-00-00 00:00:00', '2016-01-12', 'Torneo de Verano', 'Comienza el torneo de verano 2016.', '<p><strong>Abierta la inscripcion Online para el torneo de verano 2016.</strong><br />La misma comienza el dia 1 de feb. </p>'), ('2', '2016-01-13 17:36:14', '2016-01-13 17:36:14', '0000-00-00 00:00:00', '2016-01-14', 'tasd', 'dasdasd', '<p><strong>asddasdsadas</strong></p>'), ('3', '2016-03-03 14:49:38', '2016-03-03 14:49:38', '0000-00-00 00:00:00', '2016-03-18', 'i', '', '');
COMMIT;

-- ----------------------------
--  Table structure for `permissions`
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `list` tinyint(1) DEFAULT NULL,
  `edit` tinyint(1) DEFAULT NULL,
  `delete` tinyint(1) DEFAULT NULL,
  `store` tinyint(1) DEFAULT NULL,
  `profiles_id` int(10) unsigned NOT NULL,
  `modules_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_profiles_id_foreign` (`profiles_id`),
  KEY `permissions_modules_id_foreign` (`modules_id`),
  CONSTRAINT `permissions_modules_id_foreign` FOREIGN KEY (`modules_id`) REFERENCES `modules` (`id`),
  CONSTRAINT `permissions_profiles_id_foreign` FOREIGN KEY (`profiles_id`) REFERENCES `profiles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `permissions`
-- ----------------------------
BEGIN;
INSERT INTO `permissions` VALUES ('1', '2015-11-12 23:20:02', '2015-11-12 23:20:02', null, '0', '0', '0', '0', '1', '3'), ('2', '2015-11-12 23:20:02', '2015-11-12 23:23:11', null, '1', '1', '1', '1', '2', '3'), ('3', '2015-11-12 23:20:07', '2015-11-12 23:20:07', null, '0', '0', '0', '0', '1', '4'), ('4', '2015-11-12 23:20:07', '2015-11-12 23:23:09', null, '1', '1', '1', '1', '2', '4'), ('5', '2015-11-12 23:20:13', '2015-11-12 23:20:13', null, '0', '0', '0', '0', '1', '5'), ('6', '2015-11-12 23:20:13', '2015-11-12 23:23:08', null, '1', '1', '1', '1', '2', '5'), ('7', '2015-11-12 23:20:18', '2015-11-12 23:20:18', null, '0', '0', '0', '0', '1', '6'), ('8', '2015-11-12 23:20:18', '2015-11-12 23:23:08', null, '1', '1', '1', '1', '2', '6'), ('9', '2015-11-12 23:20:25', '2015-11-12 23:20:25', null, '0', '0', '0', '0', '1', '7'), ('10', '2015-11-12 23:20:25', '2015-11-12 23:23:07', null, '1', '1', '1', '1', '2', '7'), ('11', '2015-11-17 18:23:52', '2015-11-17 18:23:52', null, '0', '0', '0', '0', '1', '8'), ('12', '2015-11-17 18:23:52', '2015-11-17 18:50:23', null, '1', '1', '1', '1', '2', '8'), ('13', '2015-11-17 21:38:17', '2015-11-17 21:38:17', null, '0', '0', '0', '0', '1', '9'), ('14', '2015-11-17 21:38:17', '2015-11-17 21:38:28', null, '1', '1', '1', '1', '2', '9'), ('15', '2015-11-17 22:20:25', '2015-11-17 22:20:25', null, '0', '0', '0', '0', '1', '10'), ('16', '2015-11-17 22:20:25', '2015-11-17 22:31:11', null, '1', '1', '1', '1', '2', '10'), ('17', '2015-11-26 15:10:04', '2015-11-26 15:10:04', null, '0', '0', '0', '0', '1', '11'), ('18', '2015-11-26 15:10:04', '2015-11-26 15:10:17', null, '1', '1', '1', '1', '2', '11'), ('19', '2016-01-12 20:23:51', '2016-01-12 20:23:51', null, '0', '0', '0', '0', '1', '12'), ('20', '2016-01-12 20:23:51', '2016-01-12 20:24:04', null, '1', '1', '1', '1', '2', '12'), ('21', '2016-01-19 15:41:52', '2016-01-19 15:41:52', null, '0', '0', '0', '0', '1', '13'), ('22', '2016-01-19 15:41:52', '2016-01-19 15:42:04', null, '1', '1', '1', '1', '2', '13'), ('23', '2016-01-21 22:26:37', '2016-01-21 22:26:37', null, '0', '0', '0', '0', '1', '14'), ('24', '2016-01-21 22:26:37', '2016-01-21 22:26:46', null, '1', '1', '1', '1', '2', '14'), ('25', '2016-02-26 15:50:01', '2016-02-26 15:50:01', null, '0', '0', '0', '0', '1', '15'), ('26', '2016-02-26 15:50:01', '2016-02-26 15:50:12', null, '1', '1', '1', '1', '2', '15'), ('27', '2016-02-26 16:07:52', '2016-02-26 16:07:52', null, '0', '0', '0', '0', '1', '16'), ('28', '2016-02-26 16:07:52', '2016-02-26 16:14:30', null, '1', '1', '1', '1', '2', '16'), ('29', '2016-03-06 14:16:49', '2016-03-06 14:16:49', null, '0', '0', '0', '0', '1', '17'), ('30', '2016-03-06 14:16:49', '2016-03-06 14:17:02', null, '1', '1', '1', '1', '2', '17');
COMMIT;

-- ----------------------------
--  Table structure for `players`
-- ----------------------------
DROP TABLE IF EXISTS `players`;
CREATE TABLE `players` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `dni` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mail` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cel` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `teams_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `motivo` text COLLATE utf8_unicode_ci,
  `admin` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `dni` (`dni`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `players`
-- ----------------------------
BEGIN;
INSERT INTO `players` VALUES ('1', '2016-01-12 15:29:40', '2016-01-21 17:28:06', null, '2', 'Jugador Nombre', 'Jugador Apellido', 'a@a.com', '', '', '1', '1', '', '0'), ('2', '2016-01-12 15:31:35', '2016-02-02 16:31:54', null, '1', 'Jugador 2', 'Nombre 2', 'a@a.com', '', '', '2', '1', '', '1'), ('4', '2016-01-13 16:21:10', '2016-02-02 16:31:54', null, '27902367', 'manuel', 'Barrios', 'root', '', '', '2', '2', '<p><span style=\"color: #99cc00;\"><strong>ddsadadad</strong></span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"color: #000000;\"><strong>dasdasdasdadasdasdADASDASDASDASDASD</strong></span></p>', '0'), ('9', '2016-01-21 16:29:24', '2016-03-03 14:34:30', null, '33123', '0dasd', 'eqw', 'eqweqœw@dsacom.das', '555 543121', '132', '1', '1', '', '1'), ('10', '2016-01-21 17:33:00', '2016-01-21 17:33:30', null, 'rr2r23r23', 'r23r23', 'r23r23', '', '', '', '3', '1', '', '1'), ('11', '2016-01-25 21:10:19', '2016-02-16 14:55:37', null, 'eqw', 'dsadas', 'das', 'dsa@das.com', '12312312', 'root', '1', '2', '', '0'), ('12', '2016-02-16 15:19:49', '2016-02-16 15:19:49', null, '3123123', 'ddasdsad', 'dsadasd', 'das@dsa.com', '', '', '1', '1', '', '0'), ('13', '2016-03-14 14:32:43', '2016-03-14 14:38:32', null, '039012309129031902', 'roman', 'MArtinez', 'dasdas@dasdsa.com', '19/03/2016', 'sadlkasdlkas', '1', '2', '', '0');
COMMIT;

-- ----------------------------
--  Table structure for `profiles`
-- ----------------------------
DROP TABLE IF EXISTS `profiles`;
CREATE TABLE `profiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `profile` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `home` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `profiles`
-- ----------------------------
BEGIN;
INSERT INTO `profiles` VALUES ('1', '2015-11-12 16:01:20', '2015-11-12 16:01:20', null, 'admin', ''), ('2', '2015-11-12 16:01:36', '2015-12-28 16:13:56', null, 'usuario', 'home');
COMMIT;

-- ----------------------------
--  Table structure for `sanciones`
-- ----------------------------
DROP TABLE IF EXISTS `sanciones`;
CREATE TABLE `sanciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `players_id` int(11) NOT NULL,
  `sancion` text NOT NULL,
  `end_fases_week_id` int(11) NOT NULL,
  `fases_week_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `sanciones`
-- ----------------------------
BEGIN;
INSERT INTO `sanciones` VALUES ('1', '2016-01-20 23:47:16', '2016-01-20 23:47:16', null, '1', '<p>PETE</p>', '32', '31'), ('2', '2016-01-21 00:06:45', '2016-01-21 00:06:45', null, '1', '<p>dasdads</p>', '32', '31'), ('3', '2016-01-21 00:07:09', '2016-01-21 00:07:09', null, '4', '<p>klkklkl</p>', '33', '31'), ('4', '2016-01-21 12:05:55', '2016-01-21 12:05:55', null, '4', '<p>dkpoaskpoaskp</p>', '32', '32'), ('5', '2016-02-26 17:05:45', '2016-02-26 17:05:45', null, '11', 'Doble Amarilla', '32', '31');
COMMIT;

-- ----------------------------
--  Table structure for `sanciones_details`
-- ----------------------------
DROP TABLE IF EXISTS `sanciones_details`;
CREATE TABLE `sanciones_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `sanciones_details`
-- ----------------------------
BEGIN;
INSERT INTO `sanciones_details` VALUES ('1', '2016-02-26 16:15:17', '2016-02-26 16:15:17', null, 'Agresión al Arbitro'), ('2', '2016-02-26 16:15:26', '2016-02-26 16:15:36', null, 'Doble Amarilla');
COMMIT;

-- ----------------------------
--  Table structure for `seasons`
-- ----------------------------
DROP TABLE IF EXISTS `seasons`;
CREATE TABLE `seasons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `from` date DEFAULT NULL,
  `to` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `seasons`
-- ----------------------------
BEGIN;
INSERT INTO `seasons` VALUES ('1', '2016-01-20 20:58:12', '2016-01-20 20:58:12', null, '2016', '2016-01-01', '2016-01-31'), ('2', '2016-01-21 21:02:26', '2016-01-21 21:02:26', null, 'tempora eqw', null, null);
COMMIT;

-- ----------------------------
--  Table structure for `sedes`
-- ----------------------------
DROP TABLE IF EXISTS `sedes`;
CREATE TABLE `sedes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pela` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `sedes`
-- ----------------------------
BEGIN;
INSERT INTO `sedes` VALUES ('2', '2016-01-12 15:28:23', '2016-03-09 23:52:19', null, 'Sede 1', '-34.5969729,-58.64089739999997', '', null), ('4', '2016-03-09 18:28:27', '2016-03-09 18:28:27', null, 'pin', 'r23', '', null);
COMMIT;

-- ----------------------------
--  Table structure for `tablas`
-- ----------------------------
DROP TABLE IF EXISTS `tablas`;
CREATE TABLE `tablas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `teams_id` int(11) DEFAULT NULL,
  `pts` int(11) DEFAULT NULL,
  `pj` int(11) DEFAULT NULL,
  `pg` int(11) DEFAULT NULL,
  `pe` int(11) DEFAULT NULL,
  `pp` int(11) DEFAULT NULL,
  `gf` int(11) DEFAULT NULL,
  `gc` int(11) DEFAULT NULL,
  `dg` int(11) DEFAULT NULL,
  `fases_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tablas_fases_idx` (`fases_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `tablas`
-- ----------------------------
BEGIN;
INSERT INTO `tablas` VALUES ('1', '2016-01-21 00:09:04', '2016-01-26 13:50:42', null, '2', '15', '7', '5', '0', '2', '7', '6', '1', '1'), ('2', '2016-01-21 00:09:04', '2016-01-26 13:50:42', null, '3', '0', '5', '0', '0', '5', '0', '5', '-5', '1'), ('3', '2016-01-21 00:09:08', '2016-01-21 15:49:13', null, '1', '15', '2', '2', '0', '0', '6', '2', '4', '1'), ('4', '2016-01-21 21:41:50', '2016-01-21 21:42:27', null, '2', '15', '2', '1', '1', '0', '2', '1', '1', '3'), ('5', '2016-01-21 21:41:50', '2016-01-21 21:42:56', null, '3', '3', '2', '1', '0', '1', '3', '3', '0', '3'), ('6', '2016-01-21 21:42:27', '2016-01-21 21:42:56', null, '1', '1', '2', '0', '1', '1', '3', '4', '-1', '3'), ('7', '2016-01-21 21:49:31', '2016-01-21 21:49:31', null, '2', '1', '1', '0', '1', '0', '0', '0', '0', '2'), ('8', '2016-01-21 21:49:31', '2016-01-21 21:49:31', null, '3', '1', '1', '0', '1', '0', '0', '0', '0', '2'), ('9', '2016-02-03 14:46:04', '2016-02-03 15:53:33', null, '1', '3', '2', '1', '0', '1', '7', '3', '4', '4'), ('10', '2016-02-03 14:46:04', '2016-02-03 14:46:04', null, '2', '0', '1', '0', '0', '1', '0', '6', '-6', '4'), ('11', '2016-02-03 15:53:33', '2016-02-03 15:53:33', null, '3', '3', '1', '1', '0', '0', '3', '1', '2', '4'), ('12', '2016-02-16 16:33:31', '2016-02-16 16:58:55', null, '2', '1', '2', '0', '1', '1', '0', '3', '-3', '12'), ('13', '2016-02-16 16:33:31', '2016-02-16 16:33:31', null, '3', '1', '1', '0', '1', '0', '0', '0', '0', '12'), ('14', '2016-02-16 16:58:55', '2016-02-16 16:58:55', null, '1', '3', '1', '1', '0', '0', '3', '0', '3', '12'), ('15', '2016-03-11 14:00:51', '2016-03-11 14:00:51', null, '2', '3', '1', '1', '0', '0', '1', '0', '1', '13'), ('16', '2016-03-11 14:00:51', '2016-03-11 14:00:51', null, '3', '0', '1', '0', '0', '1', '0', '1', '-1', '13');
COMMIT;

-- ----------------------------
--  Table structure for `teams`
-- ----------------------------
DROP TABLE IF EXISTS `teams`;
CREATE TABLE `teams` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `teams`
-- ----------------------------
BEGIN;
INSERT INTO `teams` VALUES ('1', '2016-01-12 15:28:52', '2016-01-12 15:28:52', null, 'Equipo 1', '2244o35', '1'), ('2', '2016-01-12 15:29:03', '2016-03-10 13:45:00', null, 'Equipo 2', '164q5p', '1'), ('3', '2016-01-17 20:06:06', '2016-03-03 14:49:04', null, 'Equipo 3', 'o6i1166', '1'), ('4', '2016-03-10 13:53:36', '2016-03-11 16:28:36', null, 'Equipo 22', 'u504407', '2');
COMMIT;

-- ----------------------------
--  Table structure for `tournaments`
-- ----------------------------
DROP TABLE IF EXISTS `tournaments`;
CREATE TABLE `tournaments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `from` date DEFAULT NULL,
  `to` date DEFAULT NULL,
  `seasons_id` int(10) unsigned NOT NULL,
  `categories_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tournaments_seasons_id_foreign` (`seasons_id`),
  KEY `tournaments_categories_id_foreign` (`categories_id`),
  CONSTRAINT `tournaments_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `tournaments_seasons_id_foreign` FOREIGN KEY (`seasons_id`) REFERENCES `seasons` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `tournaments`
-- ----------------------------
BEGIN;
INSERT INTO `tournaments` VALUES ('1', '2016-01-20 23:36:32', '2016-02-24 12:49:46', null, 'BundesLiga - Verano 2016', '2016-01-02', '2016-01-23', '1', '1'), ('2', '2016-01-21 21:03:27', '2016-02-24 12:50:20', null, 'Primavera 2016', null, null, '1', '1'), ('3', '2016-01-21 21:03:39', '2016-01-21 21:03:39', null, 'dasd', null, null, '2', '1'), ('4', '2016-01-25 14:18:34', '2016-03-15 13:09:25', null, 'serie BXX', null, null, '1', '1'), ('5', '2016-02-16 15:46:26', '2016-02-24 15:32:10', null, 'Fasep', null, null, '2', '1'), ('6', '2016-02-16 15:46:51', '2016-02-16 15:46:51', null, 'zz', null, null, '2', '1');
COMMIT;

-- ----------------------------
--  Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profiles_id` int(10) unsigned DEFAULT NULL,
  `db` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `token` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `users`
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES ('1', null, null, '2016-03-09 18:25:51', 'admin_tfc', 'admin_tdc', 'admin_tfc', '$2y$10$tT9hkF3i69YkTnz8PQ6.m.5cw.WeHSn4W.EQ8V4mRW/rMJ8.eEq.i', 'cbH2j60jdm75ZMvdnHV1Q3I8LHC3BpoW0j7ZHKoo6uCVyUcYozoRL1fnCHeY', '1', 'tfc', null), ('2', null, null, '2016-03-09 18:25:25', 'oeoe', 'eoede', 'user@base.com', '$2y$10$v8y8YwtBHbOsaUZDzrDZ7ukaJ.4yxblmYwb4iYOQxur21PDMEPJ4i', 'bnZjmYkb2ymdhMvzCjj3Fv1mcojSj1FGZAOCo1LO3vjwPLfQyCqwLq9AfERj', '2', 'tfc', null), ('3', null, '2016-03-09 18:25:47', '2016-03-09 18:25:47', 'Manuel', 'Barrios', 'mobarrios@hotmail.com', '$2y$10$p0gy8bJU88MxCrGvw7KtEuh2n1q781OYRBmKU.D7EZCH6.0J0dtPK', null, '2', 'tfc', null);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
