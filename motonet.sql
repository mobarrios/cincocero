/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50709
 Source Host           : localhost
 Source Database       : motonet

 Target Server Type    : MySQL
 Target Server Version : 50709
 File Encoding         : utf-8

 Date: 04/25/2016 17:36:27 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `brands`
-- ----------------------------
DROP TABLE IF EXISTS `brands`;
CREATE TABLE `brands` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Records of `brands`
-- ----------------------------
BEGIN;
INSERT INTO `brands` VALUES ('1', null, '2016-03-21 15:48:08', '2016-03-21 15:48:08', 'Yamaha', null), ('2', null, '2016-03-21 15:48:15', '2016-03-21 15:48:15', 'Honda', null);
COMMIT;

-- ----------------------------
--  Table structure for `categories`
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Records of `categories`
-- ----------------------------
BEGIN;
INSERT INTO `categories` VALUES ('1', null, '2016-03-21 16:02:36', '2016-03-21 16:02:36', 'Motos'), ('2', null, '2016-03-21 16:03:54', '2016-03-21 16:03:54', 'Cuatricilos'), ('3', null, '2016-03-21 16:04:25', '2016-03-21 16:04:25', 'Generadores'), ('4', null, '2016-03-21 16:05:06', '2016-03-21 16:05:06', 'Seguridad');
COMMIT;

-- ----------------------------
--  Table structure for `clients`
-- ----------------------------
DROP TABLE IF EXISTS `clients`;
CREATE TABLE `clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dni` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cell_phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `company_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cuit` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `obras_sociales_planes_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Table structure for `company`
-- ----------------------------
DROP TABLE IF EXISTS `company`;
CREATE TABLE `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `code` varchar(45) NOT NULL,
  `database` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `images`
-- ----------------------------
BEGIN;
INSERT INTO `images` VALUES ('4', '2016-04-06 13:09:14', '2016-04-06 13:09:14', null, 'items', 'uploads/items/images/1459948154.jpg', '2'), ('6', '2016-04-20 22:46:46', '2016-04-20 22:46:46', null, 'brands', 'uploads/brands/images/1461192406.jpg', '2'), ('7', '2016-04-20 22:47:32', '2016-04-20 22:47:32', null, 'brands', 'uploads/brands/images/1461192452.jpg', '1'), ('9', '2016-04-21 00:04:20', '2016-04-21 00:04:20', null, 'items', 'uploads/items/images/1461197059.jpg', '10'), ('10', '2016-04-21 21:42:31', '2016-04-21 21:42:31', null, 'publications', 'uploads/motonet/publications/images/1461274951.jpg', '2'), ('11', '2016-04-25 15:00:53', '2016-04-25 15:00:53', null, 'items', 'uploads/items/images/1461596453.jpg', '11');
COMMIT;

-- ----------------------------
--  Table structure for `items`
-- ----------------------------
DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `cost_price` double(10,2) NOT NULL,
  `sell_price` double(10,2) NOT NULL,
  `discount_price` double(10,2) NOT NULL,
  `rent_price_15_days` double(10,2) NOT NULL,
  `rent_price_45_days` double(10,2) NOT NULL,
  `expiration_date` int(11) DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `stock_rental` int(11) NOT NULL,
  `um` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total_weight` double(10,2) NOT NULL,
  `maximun_weight` double(10,2) NOT NULL,
  `color` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dimensions` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `presentation` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bodega` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `provincia` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `observaciones` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `providers_id` int(10) unsigned DEFAULT NULL,
  `brands_id` int(10) unsigned DEFAULT NULL,
  `provider_code` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `models_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `items_code_unique` (`code`),
  KEY `items_providers_id_foreign` (`providers_id`),
  KEY `items_brands_id_foreign` (`brands_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Records of `items`
-- ----------------------------
BEGIN;
INSERT INTO `items` VALUES ('2', null, '2016-04-06 13:09:14', '2016-04-25 15:54:46', '534534543', 'Yamaha 1234', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '', null, '0.00', '0.00', '', '', '', '', '', '', '', null, '1', '', '1'), ('10', null, '2016-04-21 00:04:19', '2016-04-25 15:54:57', 'CAS1234', 'Casco Just One', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '', null, '0.00', '0.00', '', '', '', '', '', '', '', null, '1', '', '1'), ('11', null, '2016-04-25 15:00:53', '2016-04-25 15:55:05', '1d12', 'TEST', '<p>DASDASDAS&middot;!&middot;!\"&middot;!\"dasdasdpoaskdop1k34po1k3k123123</p>\r\n<p>123</p>\r\n<p>1231231</p>', '200.00', '0.00', '0.00', '0.00', '0.00', null, '0', '0', '', null, '0.00', '0.00', '', '', '', '', '', '', 'dadadadasd-d.a.d.asd.', null, '1', '', '1'), ('16', null, '2016-04-25 15:55:34', '2016-04-25 15:55:34', 'AA', 'AA', '<p>dasds</p>', '300.00', '2000.00', '0.00', '0.00', '0.00', null, '0', '0', '', null, '0.00', '0.00', '', '', '', '', '', '', 'asdas', null, '2', '', '2');
COMMIT;

-- ----------------------------
--  Table structure for `items_categories`
-- ----------------------------
DROP TABLE IF EXISTS `items_categories`;
CREATE TABLE `items_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `items_id` int(10) unsigned DEFAULT NULL,
  `categories_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `items_categories_items_id_foreign` (`items_id`),
  KEY `items_categories_categories_id_foreign` (`categories_id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=FIXED;

-- ----------------------------
--  Records of `items_categories`
-- ----------------------------
BEGIN;
INSERT INTO `items_categories` VALUES ('38', null, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2', '2'), ('39', null, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2', '4'), ('40', null, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '10', '4'), ('41', null, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '11', '1'), ('42', null, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '11', '2'), ('43', null, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '16', '2'), ('44', null, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '16', '4');
COMMIT;

-- ----------------------------
--  Table structure for `items_providers`
-- ----------------------------
DROP TABLE IF EXISTS `items_providers`;
CREATE TABLE `items_providers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `cost_price` double(10,2) NOT NULL,
  `items_id` int(10) unsigned DEFAULT NULL,
  `providers_id` int(10) unsigned DEFAULT NULL,
  `code` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `items_providers_items_id_foreign` (`items_id`),
  KEY `items_providers_providers_id_foreign` (`providers_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `menus`
-- ----------------------------
BEGIN;
INSERT INTO `menus` VALUES ('1', '2016-03-15 14:47:57', '2016-03-15 14:48:59', null, 'Artículos', '', '0'), ('2', '2016-03-15 14:49:24', '2016-03-15 14:49:24', null, 'Lista de Artículos', 'items', '1'), ('3', '2016-03-15 14:49:36', '2016-03-15 14:49:36', null, 'Marcas', 'brands', '1'), ('4', '2016-03-15 14:50:32', '2016-03-15 14:50:32', null, 'Modelos', 'models', '1'), ('5', '2016-03-15 14:50:57', '2016-03-21 16:01:56', null, 'Categorías', 'categories', '1'), ('6', '2016-03-15 14:51:27', '2016-03-15 14:51:27', null, 'Compras', '', '0'), ('9', '2016-03-15 14:58:52', '2016-03-15 14:58:52', null, 'Ventas', '', '0'), ('12', '2016-03-15 15:00:43', '2016-03-15 15:00:43', null, 'Administración', '', '0'), ('13', '2016-04-18 20:22:03', '2016-04-18 20:22:03', null, 'E-Commerce', '', '0'), ('14', '2016-04-18 20:22:20', '2016-04-18 20:22:20', null, 'Publicaciones', 'publications', '13');
COMMIT;

-- ----------------------------
--  Table structure for `models`
-- ----------------------------
DROP TABLE IF EXISTS `models`;
CREATE TABLE `models` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `models`
-- ----------------------------
BEGIN;
INSERT INTO `models` VALUES ('1', '2016-03-21 15:48:50', '2016-03-21 15:48:50', null, 'CG 150 Titan'), ('2', '2016-04-20 23:42:43', '2016-04-20 23:42:43', null, 'Just 1');
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `modules`
-- ----------------------------
BEGIN;
INSERT INTO `modules` VALUES ('1', '2016-03-15 14:35:17', '2016-03-15 14:35:17', null, 'items', null), ('2', '2016-03-15 14:35:33', '2016-03-15 14:35:33', null, 'brands', null), ('3', '2016-03-15 14:35:51', '2016-03-15 14:35:51', null, 'categories', null), ('4', '2016-03-15 14:37:29', '2016-03-15 14:37:29', null, 'models', null), ('5', '2016-03-15 14:39:10', '2016-03-15 14:39:10', null, 'clients', null), ('6', '2016-03-15 14:39:16', '2016-03-15 14:39:16', null, 'providers', null), ('7', '2016-03-15 15:23:35', '2016-03-15 15:23:35', null, 'sales', null), ('8', '2016-03-15 15:23:41', '2016-03-15 15:23:41', null, 'purchases', null), ('9', '2016-03-15 15:24:35', '2016-03-15 15:24:35', null, 'movements', null), ('10', '2016-04-18 20:21:24', '2016-04-18 20:21:24', null, 'publications', null);
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
  CONSTRAINT `permissions_ibfk_1` FOREIGN KEY (`modules_id`) REFERENCES `modules` (`id`),
  CONSTRAINT `permissions_ibfk_2` FOREIGN KEY (`profiles_id`) REFERENCES `profiles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `permissions`
-- ----------------------------
BEGIN;
INSERT INTO `permissions` VALUES ('1', '2016-03-15 14:35:17', '2016-03-15 14:35:17', null, '0', '0', '0', '0', '1', '1'), ('2', '2016-03-15 14:35:33', '2016-03-15 14:35:33', null, '0', '0', '0', '0', '1', '2'), ('3', '2016-03-15 14:35:51', '2016-03-15 14:35:51', null, '0', '0', '0', '0', '1', '3'), ('4', '2016-03-15 14:37:29', '2016-03-15 14:37:29', null, '0', '0', '0', '0', '1', '4'), ('5', '2016-03-15 14:39:10', '2016-03-15 14:39:10', null, '0', '0', '0', '0', '1', '5'), ('6', '2016-03-15 14:39:16', '2016-03-15 14:39:16', null, '0', '0', '0', '0', '1', '6'), ('7', '2016-03-15 14:42:45', '2016-03-15 14:43:15', null, '1', '1', '1', '1', '2', '1'), ('8', '2016-03-15 14:42:45', '2016-03-15 14:43:16', null, '1', '1', '1', '1', '2', '2'), ('9', '2016-03-15 14:42:45', '2016-03-15 14:43:17', null, '1', '1', '1', '1', '2', '3'), ('10', '2016-03-15 14:42:45', '2016-03-15 14:43:17', null, '1', '1', '1', '1', '2', '4'), ('11', '2016-03-15 14:42:45', '2016-03-15 14:43:20', null, '1', '1', '1', '1', '2', '5'), ('12', '2016-03-15 14:42:45', '2016-03-15 14:43:18', null, '1', '1', '1', '1', '2', '6'), ('13', '2016-03-15 14:42:53', '2016-03-15 14:45:35', null, '1', '0', '0', '0', '3', '1'), ('14', '2016-03-15 14:42:53', '2016-03-15 14:42:53', null, '0', '0', '0', '0', '3', '2'), ('15', '2016-03-15 14:42:53', '2016-03-15 14:42:53', null, '0', '0', '0', '0', '3', '3'), ('16', '2016-03-15 14:42:53', '2016-03-15 14:42:53', null, '0', '0', '0', '0', '3', '4'), ('17', '2016-03-15 14:42:53', '2016-03-15 14:42:53', null, '0', '0', '0', '0', '3', '5'), ('18', '2016-03-15 14:42:53', '2016-03-15 14:42:53', null, '0', '0', '0', '0', '3', '6'), ('19', '2016-03-15 15:23:35', '2016-03-15 15:23:35', null, '0', '0', '0', '0', '1', '7'), ('20', '2016-03-15 15:23:35', '2016-03-15 15:23:35', null, '0', '0', '0', '0', '2', '7'), ('21', '2016-03-15 15:23:35', '2016-03-15 15:23:35', null, '0', '0', '0', '0', '3', '7'), ('22', '2016-03-15 15:23:41', '2016-03-15 15:23:41', null, '0', '0', '0', '0', '1', '8'), ('23', '2016-03-15 15:23:41', '2016-03-15 15:23:41', null, '0', '0', '0', '0', '2', '8'), ('24', '2016-03-15 15:23:41', '2016-03-15 15:23:41', null, '0', '0', '0', '0', '3', '8'), ('25', '2016-03-15 15:24:35', '2016-03-15 15:24:35', null, '0', '0', '0', '0', '1', '9'), ('26', '2016-03-15 15:24:35', '2016-03-15 15:24:35', null, '0', '0', '0', '0', '2', '9'), ('27', '2016-03-15 15:24:35', '2016-03-15 15:24:35', null, '0', '0', '0', '0', '3', '9'), ('28', '2016-04-18 20:21:24', '2016-04-18 20:21:24', null, '0', '0', '0', '0', '1', '10'), ('29', '2016-04-18 20:21:24', '2016-04-18 20:21:38', null, '1', '1', '1', '1', '2', '10'), ('30', '2016-04-18 20:21:24', '2016-04-19 12:40:19', null, '1', '0', '0', '0', '3', '10');
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
  `home` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `profiles`
-- ----------------------------
BEGIN;
INSERT INTO `profiles` VALUES ('1', '2016-03-15 14:13:42', '2016-03-15 14:13:42', null, 'administrador', ''), ('2', '2016-03-15 14:42:45', '2016-03-15 14:42:45', null, 'supervisor', 'home'), ('3', '2016-03-15 14:42:53', '2016-03-15 14:42:53', null, 'ventas', 'home');
COMMIT;

-- ----------------------------
--  Table structure for `providers`
-- ----------------------------
DROP TABLE IF EXISTS `providers`;
CREATE TABLE `providers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dni` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cell_phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `company_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cuit` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Table structure for `publications`
-- ----------------------------
DROP TABLE IF EXISTS `publications`;
CREATE TABLE `publications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `publication_date` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `items_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `destacado` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `publications`
-- ----------------------------
BEGIN;
INSERT INTO `publications` VALUES ('7', '2016-04-22 22:55:25', '2016-04-22 22:55:25', null, '2016-04-01', 'Oferta !!', '2000', '2', '', '1');
COMMIT;

-- ----------------------------
--  Table structure for `purchases`
-- ----------------------------
DROP TABLE IF EXISTS `purchases`;
CREATE TABLE `purchases` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `purchases_date` date NOT NULL,
  `amount` double(10,2) NOT NULL,
  `providers_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `purchases_providers_id_foreign` (`providers_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=FIXED;

-- ----------------------------
--  Table structure for `purchases_items`
-- ----------------------------
DROP TABLE IF EXISTS `purchases_items`;
CREATE TABLE `purchases_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `quantity` int(11) NOT NULL,
  `discount` double(10,2) NOT NULL,
  `price_per_unit` double(10,2) NOT NULL,
  `observations` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `purchases_id` int(10) unsigned DEFAULT NULL,
  `purchases_temporal_id` int(10) unsigned DEFAULT NULL,
  `items_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `purchases_items_purchases_id_foreign` (`purchases_id`),
  KEY `purchases_items_purchases_temporal_id_foreign` (`purchases_temporal_id`),
  KEY `purchases_items_items_id_foreign` (`items_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Table structure for `rentals`
-- ----------------------------
DROP TABLE IF EXISTS `rentals`;
CREATE TABLE `rentals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `amount` double(10,2) NOT NULL,
  `rentals_date` date NOT NULL,
  `rentals_to` date NOT NULL,
  `clients_id` int(11) NOT NULL,
  `doctors_id` int(11) NOT NULL,
  `garantee` double(10,2) NOT NULL,
  `garantee_devolution` tinyint(1) NOT NULL,
  `garantee_observation` text NOT NULL,
  `status` int(11) NOT NULL,
  `user_devolution` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Table structure for `rentals_items`
-- ----------------------------
DROP TABLE IF EXISTS `rentals_items`;
CREATE TABLE `rentals_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `quantity` int(11) NOT NULL,
  `discount` double(10,2) NOT NULL,
  `price_per_unit` double(10,2) NOT NULL,
  `observations` varchar(200) NOT NULL,
  `rentals_id` int(11) NOT NULL,
  `items_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Table structure for `sales`
-- ----------------------------
DROP TABLE IF EXISTS `sales`;
CREATE TABLE `sales` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `amount` double(10,2) NOT NULL,
  `sales_date` date NOT NULL,
  `clients_id` int(10) unsigned DEFAULT NULL,
  `doctors_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sales_clients_id_foreign` (`clients_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=FIXED;

-- ----------------------------
--  Table structure for `sales_items`
-- ----------------------------
DROP TABLE IF EXISTS `sales_items`;
CREATE TABLE `sales_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `quantity` int(11) NOT NULL,
  `discount` double(10,2) NOT NULL,
  `price_per_unit` double(10,2) NOT NULL,
  `observations` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sales_id` int(10) unsigned DEFAULT NULL,
  `sales_temporal_id` int(10) unsigned DEFAULT NULL,
  `items_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sales_items_sales_id_foreign` (`sales_id`),
  KEY `sales_items_sales_temporal_id_foreign` (`sales_temporal_id`),
  KEY `sales_items_items_id_foreign` (`items_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

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
INSERT INTO `users` VALUES ('1', null, null, '2016-04-19 12:40:23', 'admin_motonet', 'admin_motonet', 'admin_motonet', '$2y$10$tT9hkF3i69YkTnz8PQ6.m.5cw.WeHSn4W.EQ8V4mRW/rMJ8.eEq.i', 'L6pFAkCeBSDCd85jLWWnQ1pLFOz2j0l3fedbQnCZ0LuV2V6xR0FlOBF3DkBF', '1', 'motonet', null), ('2', null, '2016-03-15 15:31:08', '2016-04-19 12:39:48', 'supervisor', 'supervisor', 'supervisor@motonet.com', '$2y$10$SgtOdSNa05NIFOE5/3zAreVn5ASPA078rTDdd48.oQncaHNIuoEse', 'FDjuXAqx6ZlSgtKNWJaezfg2H08Yqn33f0FzrEG1TA6AkFXdKH2tlv5JN3Ui', '2', 'motonet', null), ('3', null, '2016-04-18 17:38:44', '2016-04-19 12:39:26', 'ventas', 'ventas', 'ventas@motonet.com', '$2y$10$fBydDpAHQExFZC9Xe3AtXefTvkL3CE6SoqC1zmXU3EqRuTbrX8Uey', 'e6svRdSTud45MdHngq9SFPFOU6TSJPKJCcvw3kZaIQrKCh2kC3T9li6C7pGr', '3', 'motonet', null);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
