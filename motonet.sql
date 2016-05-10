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

 Date: 05/10/2016 19:00:10 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `branches`
-- ----------------------------
DROP TABLE IF EXISTS `branches`;
CREATE TABLE `branches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `maps` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `branches`
-- ----------------------------
BEGIN;
INSERT INTO `branches` VALUES ('1', '2016-05-05 22:36:28', '2016-05-05 22:36:28', null, 'Pilar', null, null, null, null), ('2', '2016-05-05 22:36:46', '2016-05-05 22:36:55', null, 'Yamasan', null, null, null, null), ('3', '2016-05-05 22:37:09', '2016-05-05 22:37:09', null, 'Planet Honda San Miguel', null, null, null, null), ('4', '2016-05-05 22:37:34', '2016-05-05 22:37:34', null, 'Motoplanet Don Torcuato', null, null, null, null), ('5', '2016-05-05 22:54:49', '2016-05-05 22:54:49', null, 'Logistica', null, null, null, null);
COMMIT;

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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Records of `categories`
-- ----------------------------
BEGIN;
INSERT INTO `categories` VALUES ('1', null, '2016-03-21 16:02:36', '2016-03-21 16:02:36', 'Motos'), ('2', null, '2016-03-21 16:03:54', '2016-03-21 16:03:54', 'Cuatricilos'), ('3', null, '2016-03-21 16:04:25', '2016-03-21 16:04:25', 'Generadores'), ('4', null, '2016-03-21 16:05:06', '2016-03-21 16:05:06', 'Seguridad'), ('5', null, '2016-05-06 22:16:32', '2016-05-06 22:16:32', 'Calle');
COMMIT;

-- ----------------------------
--  Table structure for `clients`
-- ----------------------------
DROP TABLE IF EXISTS `clients`;
CREATE TABLE `clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dni` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cell_phone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Records of `clients`
-- ----------------------------
BEGIN;
INSERT INTO `clients` VALUES ('23', null, '2016-05-06 22:14:19', '2016-05-06 22:14:19', 'Juan', 'Detitta', '123545', 'j@zayade.com', null, null, null), ('24', null, '2016-05-10 13:19:10', '2016-05-10 13:19:10', 'Manuel', 'Barrios', null, 'dasd@masd.com', '1231312', null, null), ('25', null, '2016-05-10 13:26:05', '2016-05-10 13:26:05', 'Manuel', 'Barrios', null, 'dasd@masd.com', '1231312', null, null), ('26', null, '2016-05-10 13:51:07', '2016-05-10 13:51:07', 'Manuel', 'Barrios', null, 'dasd@masd.com', '1231312', null, null), ('27', null, '2016-05-10 13:56:28', '2016-05-10 13:56:28', 'Manuel', 'Barrios', null, 'dsd@ad.com', '1321', null, null), ('28', null, '2016-05-10 14:01:03', '2016-05-10 14:01:03', 'Manuel', 'Barrios', null, 'dsd@ad.com', '1321', null, null), ('29', null, '2016-05-10 14:02:44', '2016-05-10 14:02:44', 'Manuel', 'Barrios', null, 'dsd@ad.com', '1321', null, null), ('30', null, '2016-05-10 14:05:55', '2016-05-10 14:05:55', 'Manuel', 'Barrios', null, 'dsd@ad.com', '1321', null, null), ('31', null, '2016-05-10 14:12:19', '2016-05-10 14:12:19', 'dqwdw', 'qdwqd', null, 'adasd@dasd.com', '123123', null, null), ('32', null, '2016-05-10 14:18:50', '2016-05-10 14:18:50', 'dqwdw', 'qdwqd', null, 'adasd@dasd.com', '123123', null, null), ('33', null, '2016-05-10 14:43:55', '2016-05-10 14:43:55', 'dqwdw', 'qdwqd', null, 'adasd@dasd.com', '123123', null, null), ('34', null, '2016-05-10 15:06:20', '2016-05-10 15:06:20', 'Manuel', 'Barrios', null, 'dasda@dasocm.com', '12312', null, null), ('35', null, '2016-05-10 15:10:27', '2016-05-10 15:10:27', 'Perez', 'Juan', null, 'das@das.com', '1231312', null, null);
COMMIT;

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `images`
-- ----------------------------
BEGIN;
INSERT INTO `images` VALUES ('6', '2016-04-20 22:46:46', '2016-04-20 22:46:46', null, 'brands', 'uploads/brands/images/1461192406.jpg', '2'), ('7', '2016-04-20 22:47:32', '2016-04-20 22:47:32', null, 'brands', 'uploads/brands/images/1461192452.jpg', '1'), ('10', '2016-04-21 21:42:31', '2016-04-21 21:42:31', null, 'publications', 'uploads/motonet/publications/images/1461274951.jpg', '2'), ('11', '2016-04-25 15:00:53', '2016-04-25 15:00:53', null, 'items', 'uploads/items/images/1461596453.jpg', '11'), ('12', '2016-05-05 14:17:36', '2016-05-05 14:17:36', null, 'models', 'uploads/motonet/models/images/1462457856.jpg', '1'), ('13', '2016-05-05 14:18:09', '2016-05-05 14:18:09', null, 'models', 'uploads/motonet/models/images/1462457889.jpg', '3'), ('14', '2016-05-05 16:07:22', '2016-05-05 16:07:22', null, 'publications', 'uploads/motonet/publications/images/1462464442.jpg', '9'), ('15', '2016-05-06 00:14:57', '2016-05-06 00:14:57', null, 'publications', 'uploads/motonet/publications/images/1462493697.jpg', '10'), ('16', '2016-05-06 21:18:54', '2016-05-06 21:18:54', null, 'branches', 'uploads/motonet/branches/images/1462569534.jpg', '1');
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
  `code` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `cost_price` double(10,2) DEFAULT NULL,
  `sell_price` double(10,2) DEFAULT NULL,
  `discount_price` double(10,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `um` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `observaciones` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `models_id` int(11) DEFAULT NULL,
  `n_motor` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `n_chasis` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `branches_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `items_code_unique` (`code`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Records of `items`
-- ----------------------------
BEGIN;
INSERT INTO `items` VALUES ('1', null, '2016-05-05 21:43:21', '2016-05-05 23:27:16', 'mo1', 'Moto1', '', '100.00', '200.00', null, null, null, null, '', '3', '', '', '1'), ('2', null, '2016-05-05 23:11:58', '2016-05-05 23:11:58', 'mo11', null, null, '1000.00', '2000.00', null, null, null, null, '', '3', '', '', '1');
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `menus`
-- ----------------------------
BEGIN;
INSERT INTO `menus` VALUES ('1', '2016-03-15 14:47:57', '2016-03-15 14:48:59', null, 'Artículos', '', '0'), ('2', '2016-03-15 14:49:24', '2016-05-05 21:21:50', null, 'Artículos', 'items', '1'), ('3', '2016-03-15 14:49:36', '2016-03-15 14:49:36', null, 'Marcas', 'brands', '1'), ('4', '2016-03-15 14:50:32', '2016-03-15 14:50:32', null, 'Modelos', 'models', '1'), ('5', '2016-03-15 14:50:57', '2016-03-21 16:01:56', null, 'Categorías', 'categories', '1'), ('6', '2016-03-15 14:51:27', '2016-03-15 14:51:27', null, 'Compras', '', '0'), ('9', '2016-03-15 14:58:52', '2016-03-15 14:58:52', null, 'Ventas', '', '0'), ('12', '2016-03-15 15:00:43', '2016-03-15 15:00:43', null, 'Administración', '', '0'), ('13', '2016-04-18 20:22:03', '2016-04-18 20:22:03', null, 'E-Commerce', '', '0'), ('14', '2016-04-18 20:22:20', '2016-04-18 20:22:20', null, 'Publicaciones', 'publications', '13'), ('15', '2016-05-03 13:51:12', '2016-05-03 13:51:12', null, 'Clientes', 'clients', '9'), ('16', '2016-05-03 16:34:30', '2016-05-03 16:34:30', null, 'Operaciones', 'operations', '9'), ('17', '2016-05-05 22:30:08', '2016-05-05 22:30:08', null, 'Configuración', '', '0'), ('18', '2016-05-05 22:30:24', '2016-05-05 22:30:24', null, 'Sucursales', 'branches', '17');
COMMIT;

-- ----------------------------
--  Table structure for `ml_categories`
-- ----------------------------
DROP TABLE IF EXISTS `ml_categories`;
CREATE TABLE `ml_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `ml_id` varchar(200) NOT NULL,
  `ml_main` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ml_id` (`ml_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=442 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `ml_categories`
-- ----------------------------
BEGIN;
INSERT INTO `ml_categories` VALUES ('1', '2016-04-26 14:16:17', '2016-04-26 14:16:17', null, 'MLA5725', '', 'Accesorios para Vehículos'), ('2', '2016-04-26 14:16:17', '2016-04-26 14:16:17', null, 'MLA1071', '', 'Animales y Mascotas'), ('3', '2016-04-26 14:16:17', '2016-04-26 14:16:17', null, 'MLA1367', '', 'Antigüedades'), ('4', '2016-04-26 14:16:17', '2016-04-26 14:16:17', null, 'MLA1368', '', 'Arte y Artesanías'), ('5', '2016-04-26 14:16:17', '2016-04-26 14:16:17', null, 'MLA1743', '', 'Autos, Motos y Otros'), ('6', '2016-04-26 14:16:17', '2016-04-26 14:16:17', null, 'MLA1384', '', 'Bebés'), ('7', '2016-04-26 14:16:17', '2016-04-26 14:16:17', null, 'MLA1051', '', 'Celulares y Teléfonos'), ('8', '2016-04-26 14:16:17', '2016-04-26 14:16:17', null, 'MLA1798', '', 'Coleccionables y Hobbies'), ('9', '2016-04-26 14:16:17', '2016-04-26 14:16:17', null, 'MLA1648', '', 'Computación'), ('10', '2016-04-26 14:16:17', '2016-04-26 14:16:17', null, 'MLA1144', '', 'Consolas y Videojuegos'), ('11', '2016-04-26 14:16:17', '2016-04-26 14:16:17', null, 'MLA1039', '', 'Cámaras y Accesorios'), ('12', '2016-04-26 14:16:17', '2016-04-26 14:16:17', null, 'MLA1403', '', 'Delicatessen y Vinos'), ('13', '2016-04-26 14:16:17', '2016-04-26 14:16:17', null, 'MLA1276', '', 'Deportes y Fitness'), ('14', '2016-04-26 14:16:17', '2016-04-26 14:16:17', null, 'MLA5726', '', 'Electrodomésticos y Aires Ac.'), ('15', '2016-04-26 14:16:17', '2016-04-26 14:16:17', null, 'MLA1000', '', 'Electrónica, Audio y Video'), ('16', '2016-04-26 14:16:17', '2016-04-26 14:16:17', null, 'MLA2547', '', 'Entradas para Eventos'), ('17', '2016-04-26 14:16:17', '2016-04-26 14:16:17', null, 'MLA1574', '', 'Hogar, Muebles y Jardín'), ('18', '2016-04-26 14:16:17', '2016-04-26 14:16:17', null, 'MLA1499', '', 'Industrias y Oficinas'), ('19', '2016-04-26 14:16:17', '2016-04-26 14:16:17', null, 'MLA1459', '', 'Inmuebles'), ('20', '2016-04-26 14:16:17', '2016-04-26 14:16:17', null, 'MLA1182', '', 'Instrumentos Musicales'), ('21', '2016-04-26 14:16:17', '2016-04-26 14:16:17', null, 'MLA3937', '', 'Joyas y Relojes'), ('22', '2016-04-26 14:16:17', '2016-04-26 14:16:17', null, 'MLA1132', '', 'Juegos y Juguetes'), ('23', '2016-04-26 14:16:17', '2016-04-26 14:16:17', null, 'MLA3025', '', 'Libros, Revistas y Comics'), ('24', '2016-04-26 14:16:17', '2016-04-26 14:16:17', null, 'MLA1168', '', 'Música, Películas y Series'), ('25', '2016-04-26 14:16:17', '2016-04-26 14:16:17', null, 'MLA1953', '', 'Otras categorías'), ('26', '2016-04-26 14:16:17', '2016-04-26 14:16:17', null, 'MLA1430', '', 'Ropa y Accesorios'), ('27', '2016-04-26 14:16:17', '2016-04-26 14:16:17', null, 'MLA1246', '', 'Salud y Belleza'), ('28', '2016-04-26 14:16:17', '2016-04-26 14:16:17', null, 'MLA1540', '', 'Servicios'), ('29', '2016-04-26 14:16:28', '2016-04-26 14:16:28', null, 'MLA4711', 'MLA5725', 'Acc. para Motos y Cuatriciclos'), ('30', '2016-04-26 14:16:28', '2016-04-26 14:16:28', null, 'MLA6070', 'MLA5725', 'Accesorios Náuticos'), ('31', '2016-04-26 14:16:28', '2016-04-26 14:16:28', null, 'MLA6520', 'MLA5725', 'Accesorios de Auto y Camioneta'), ('32', '2016-04-26 14:16:28', '2016-04-26 14:16:28', null, 'MLA86360', 'MLA5725', 'Accesorios para Camiones'), ('33', '2016-04-26 14:16:28', '2016-04-26 14:16:28', null, 'MLA3381', 'MLA5725', 'Audio'), ('34', '2016-04-26 14:16:28', '2016-04-26 14:16:28', null, 'MLA4610', 'MLA5725', 'GNC'), ('35', '2016-04-26 14:16:28', '2016-04-26 14:16:28', null, 'MLA2227', 'MLA5725', 'Herramientas'), ('36', '2016-04-26 14:16:28', '2016-04-26 14:16:28', null, 'MLA86838', 'MLA5725', 'Limpieza de Vehículos'), ('37', '2016-04-26 14:16:28', '2016-04-26 14:16:28', null, 'MLA8531', 'MLA5725', 'Navegadores GPS para Vehículos'), ('38', '2016-04-26 14:16:28', '2016-04-26 14:16:28', null, 'MLA6537', 'MLA5725', 'Neumáticos, Llantas y Tazas'), ('39', '2016-04-26 14:16:28', '2016-04-26 14:16:28', null, 'MLA6177', 'MLA5725', 'Otros'), ('40', '2016-04-26 14:16:28', '2016-04-26 14:16:28', null, 'MLA1747', 'MLA5725', 'Repuestos Autos y Camionetas'), ('41', '2016-04-26 14:16:28', '2016-04-26 14:16:28', null, 'MLA86080', 'MLA5725', 'Seguridad Vehícular'), ('42', '2016-04-26 14:16:28', '2016-04-26 14:16:28', null, 'MLA377674', 'MLA5725', 'Service Programado'), ('43', '2016-04-26 14:16:28', '2016-04-26 14:16:28', null, 'MLA4589', 'MLA5725', 'Tuning'), ('44', '2016-04-26 14:16:30', '2016-04-26 14:16:30', null, 'MLA1100', 'MLA1071', 'Aves'), ('45', '2016-04-26 14:16:30', '2016-04-26 14:16:30', null, 'MLA1117', 'MLA1071', 'Caballos'), ('46', '2016-04-26 14:16:30', '2016-04-26 14:16:30', null, 'MLA6573', 'MLA1071', 'Conejos'), ('47', '2016-04-26 14:16:30', '2016-04-26 14:16:30', null, 'MLA1081', 'MLA1071', 'Gatos'), ('48', '2016-04-26 14:16:30', '2016-04-26 14:16:30', null, 'MLA3615', 'MLA1071', 'Libros de Animales'), ('49', '2016-04-26 14:16:30', '2016-04-26 14:16:30', null, 'MLA1126', 'MLA1071', 'Otros'), ('50', '2016-04-26 14:16:30', '2016-04-26 14:16:30', null, 'MLA1091', 'MLA1071', 'Peces'), ('51', '2016-04-26 14:16:30', '2016-04-26 14:16:30', null, 'MLA1072', 'MLA1071', 'Perros'), ('52', '2016-04-26 14:16:30', '2016-04-26 14:16:30', null, 'MLA1111', 'MLA1071', 'Reptiles y Anfibios'), ('53', '2016-04-26 14:16:30', '2016-04-26 14:16:30', null, 'MLA1105', 'MLA1071', 'Roedores'), ('54', '2016-04-26 14:16:32', '2016-04-26 14:16:32', null, 'MLA1373', 'MLA1367', 'Artículos Marítimos Antiguos'), ('55', '2016-04-26 14:16:32', '2016-04-26 14:16:32', null, 'MLA6652', 'MLA1367', 'Audio Antiguo'), ('56', '2016-04-26 14:16:32', '2016-04-26 14:16:32', null, 'MLA10081', 'MLA1367', 'Balanzas Antiguas'), ('57', '2016-04-26 14:16:32', '2016-04-26 14:16:32', null, 'MLA6650', 'MLA1367', 'Carteles Antiguos'), ('58', '2016-04-26 14:16:32', '2016-04-26 14:16:32', null, 'MLA4630', 'MLA1367', 'Cristalería Antigua'), ('59', '2016-04-26 14:16:32', '2016-04-26 14:16:32', null, 'MLA1378', 'MLA1367', 'Cámaras Fotográficas Antiguas'), ('60', '2016-04-26 14:16:32', '2016-04-26 14:16:32', null, 'MLA5467', 'MLA1367', 'Decoración Antigua'), ('61', '2016-04-26 14:16:32', '2016-04-26 14:16:32', null, 'MLA6661', 'MLA1367', 'Electrodomésticos Antiguos'), ('62', '2016-04-26 14:16:32', '2016-04-26 14:16:32', null, 'MLA1377', 'MLA1367', 'Equipos Científicos Antiguos'), ('63', '2016-04-26 14:16:32', '2016-04-26 14:16:32', null, 'MLA11224', 'MLA1367', 'Herramientas Antiguas'), ('64', '2016-04-26 14:16:32', '2016-04-26 14:16:32', null, 'MLA4688', 'MLA1367', 'Iluminación Antigua'), ('65', '2016-04-26 14:16:32', '2016-04-26 14:16:32', null, 'MLA1381', 'MLA1367', 'Indumentaria Antigua'), ('66', '2016-04-26 14:16:32', '2016-04-26 14:16:32', null, 'MLA1376', 'MLA1367', 'Instrumentos Musicales Antig.'), ('67', '2016-04-26 14:16:32', '2016-04-26 14:16:32', null, 'MLA1375', 'MLA1367', 'Joyas y Relojes Antiguos'), ('68', '2016-04-26 14:16:32', '2016-04-26 14:16:32', null, 'MLA7184', 'MLA1367', 'Juguetes Antiguos'), ('69', '2016-04-26 14:16:32', '2016-04-26 14:16:32', null, 'MLA3635', 'MLA1367', 'Libros Antiguos'), ('70', '2016-04-26 14:16:32', '2016-04-26 14:16:32', null, 'MLA10249', 'MLA1367', 'Llaves y Candados Antiguos'), ('71', '2016-04-26 14:16:32', '2016-04-26 14:16:32', null, 'MLA3257', 'MLA1367', 'Muebles Antiguos'), ('72', '2016-04-26 14:16:32', '2016-04-26 14:16:32', null, 'MLA388312', 'MLA1367', 'Máquinas de Coser'), ('73', '2016-04-26 14:16:32', '2016-04-26 14:16:32', null, 'MLA10232', 'MLA1367', 'Máquinas de Escribir Antiguas'), ('74', '2016-04-26 14:16:32', '2016-04-26 14:16:32', null, 'MLA1383', 'MLA1367', 'Otras Antigüedades'), ('75', '2016-04-26 14:16:32', '2016-04-26 14:16:32', null, 'MLA1379', 'MLA1367', 'Platería Antigua'), ('76', '2016-04-26 14:16:32', '2016-04-26 14:16:32', null, 'MLA10272', 'MLA1367', 'Registradoras Antiguas'), ('77', '2016-04-26 14:16:32', '2016-04-26 14:16:32', null, 'MLA34367', 'MLA1367', 'Rejas y Portones Antiguos'), ('78', '2016-04-26 14:16:32', '2016-04-26 14:16:32', null, 'MLA34203', 'MLA1367', 'Ropa de Cama Antigua'), ('79', '2016-04-26 14:16:32', '2016-04-26 14:16:32', null, 'MLA10236', 'MLA1367', 'Sifones Antiguos'), ('80', '2016-04-26 14:16:32', '2016-04-26 14:16:32', null, 'MLA34242', 'MLA1367', 'Sulkys y Carros Antiguos'), ('81', '2016-04-26 14:16:32', '2016-04-26 14:16:32', null, 'MLA6662', 'MLA1367', 'Teléfonos Antiguos'), ('82', '2016-04-26 14:16:32', '2016-04-26 14:16:32', null, 'MLA4631', 'MLA1367', 'Vajilla Antigua'), ('83', '2016-04-26 14:16:32', '2016-04-26 14:16:32', null, 'MLA10250', 'MLA1367', 'Valijas Antiguas'), ('84', '2016-04-26 14:16:33', '2016-04-26 14:16:33', null, 'MLA34263', 'MLA1368', 'Arte'), ('85', '2016-04-26 14:16:33', '2016-04-26 14:16:33', null, 'MLA1945', 'MLA1368', 'Artesanías'), ('86', '2016-04-26 14:16:33', '2016-04-26 14:16:33', null, 'MLA2662', 'MLA1368', 'Esculturas'), ('87', '2016-04-26 14:16:33', '2016-04-26 14:16:33', null, 'MLA3633', 'MLA1368', 'Libros'), ('88', '2016-04-26 14:16:33', '2016-04-26 14:16:33', null, 'MLA73672', 'MLA1368', 'Materiales para Tatuajes'), ('89', '2016-04-26 14:16:33', '2016-04-26 14:16:33', null, 'MLA34294', 'MLA1368', 'Otros'), ('90', '2016-04-26 14:16:33', '2016-04-26 14:16:33', null, 'MLA10056', 'MLA1368', 'Souvenirs'), ('91', '2016-04-26 14:16:34', '2016-04-26 14:16:34', null, 'MLA1745', 'MLA1743', 'Autos de Colección'), ('92', '2016-04-26 14:16:34', '2016-04-26 14:16:34', null, 'MLA1744', 'MLA1743', 'Autos y Camionetas'), ('93', '2016-04-26 14:16:34', '2016-04-26 14:16:34', null, 'MLA58254', 'MLA1743', 'Camiones'), ('94', '2016-04-26 14:16:34', '2016-04-26 14:16:34', null, 'MLA51547', 'MLA1743', 'Colectivos'), ('95', '2016-04-26 14:16:34', '2016-04-26 14:16:34', null, 'MLA80579', 'MLA1743', 'Motorhomes'), ('96', '2016-04-26 14:16:34', '2016-04-26 14:16:34', null, 'MLA1763', 'MLA1743', 'Motos'), ('97', '2016-04-26 14:16:34', '2016-04-26 14:16:34', null, 'MLA1785', 'MLA1743', 'Náutica'), ('98', '2016-04-26 14:16:34', '2016-04-26 14:16:34', null, 'MLA1907', 'MLA1743', 'Otros Vehículos'), ('99', '2016-04-26 14:16:34', '2016-04-26 14:16:34', null, 'MLA1784', 'MLA1743', 'Planes de Ahorro'), ('100', '2016-04-26 14:16:34', '2016-04-26 14:16:34', null, 'MLA93430', 'MLA1743', 'Semirremolques'), ('101', '2016-04-26 14:16:35', '2016-04-26 14:16:35', null, 'MLA5360', 'MLA1384', 'Alimentación para Bebés'), ('102', '2016-04-26 14:16:35', '2016-04-26 14:16:35', null, 'MLA8814', 'MLA1384', 'Andadores y Caminadores'), ('103', '2016-04-26 14:16:35', '2016-04-26 14:16:35', null, 'MLA72251', 'MLA1384', 'Arneses para Autos'), ('104', '2016-04-26 14:16:35', '2016-04-26 14:16:35', null, 'MLA5702', 'MLA1384', 'Artículos de Bebés para Baño'), ('105', '2016-04-26 14:16:35', '2016-04-26 14:16:35', null, 'MLA1402', 'MLA1384', 'Artículos para Embarazadas'), ('106', '2016-04-26 14:16:35', '2016-04-26 14:16:35', null, 'MLA71779', 'MLA1384', 'Artículos para la Salud'), ('107', '2016-04-26 14:16:35', '2016-04-26 14:16:35', null, 'MLA1386', 'MLA1384', 'Cochecitos para Bebés'), ('108', '2016-04-26 14:16:35', '2016-04-26 14:16:35', null, 'MLA8322', 'MLA1384', 'Corralitos'), ('109', '2016-04-26 14:16:35', '2016-04-26 14:16:35', null, 'MLA5362', 'MLA1384', 'Cuarto de Bebé'), ('110', '2016-04-26 14:16:35', '2016-04-26 14:16:35', null, 'MLA1387', 'MLA1384', 'Huevitos y Sillitas para Autos'), ('111', '2016-04-26 14:16:35', '2016-04-26 14:16:35', null, 'MLA1392', 'MLA1384', 'Juguetes para Bebés'), ('112', '2016-04-26 14:16:35', '2016-04-26 14:16:35', null, 'MLA1889', 'MLA1384', 'Otros'), ('113', '2016-04-26 14:16:35', '2016-04-26 14:16:35', null, 'MLA72218', 'MLA1384', 'Pañales y Pañaleras'), ('114', '2016-04-26 14:16:35', '2016-04-26 14:16:35', null, 'MLA8591', 'MLA1384', 'Recuerdos'), ('115', '2016-04-26 14:16:35', '2016-04-26 14:16:35', null, 'MLA1396', 'MLA1384', 'Ropa para Bebés'), ('116', '2016-04-26 14:16:35', '2016-04-26 14:16:35', null, 'MLA1390', 'MLA1384', 'Seguridad para Bebés'), ('117', '2016-04-26 14:16:35', '2016-04-26 14:16:35', null, 'MLA1391', 'MLA1384', 'Sillas de Comer'), ('118', '2016-04-26 14:16:35', '2016-04-26 14:16:35', null, 'MLA6575', 'MLA1384', 'Triciclos y Kartings'), ('119', '2016-04-26 14:16:37', '2016-04-26 14:16:37', null, 'MLA3502', 'MLA1051', 'Accesorios para Celulares'), ('120', '2016-04-26 14:16:37', '2016-04-26 14:16:37', null, 'MLA1055', 'MLA1051', 'Celulares y Smartphones'), ('121', '2016-04-26 14:16:37', '2016-04-26 14:16:37', null, 'MLA1052', 'MLA1051', 'Centrales Telefónicas'), ('122', '2016-04-26 14:16:37', '2016-04-26 14:16:37', null, 'MLA1054', 'MLA1051', 'Fax'), ('123', '2016-04-26 14:16:37', '2016-04-26 14:16:37', null, 'MLA2908', 'MLA1051', 'Handies'), ('124', '2016-04-26 14:16:37', '2016-04-26 14:16:37', null, 'MLA5427', 'MLA1051', 'Nextel'), ('125', '2016-04-26 14:16:37', '2016-04-26 14:16:37', null, 'MLA1915', 'MLA1051', 'Otros'), ('126', '2016-04-26 14:16:37', '2016-04-26 14:16:37', null, 'MLA1058', 'MLA1051', 'Radiofrecuencia'), ('127', '2016-04-26 14:16:37', '2016-04-26 14:16:37', null, 'MLA3813', 'MLA1051', 'Repuestos de Celulares'), ('128', '2016-04-26 14:16:37', '2016-04-26 14:16:37', null, 'MLA10616', 'MLA1051', 'Tarifadores y Cabinas'), ('129', '2016-04-26 14:16:37', '2016-04-26 14:16:37', null, 'MLA1053', 'MLA1051', 'Telefonía Fija e Inalámbrica'), ('130', '2016-04-26 14:16:37', '2016-04-26 14:16:37', null, 'MLA5237', 'MLA1051', 'Telefonía IP'), ('131', '2016-04-26 14:16:38', '2016-04-26 14:16:38', null, 'MLA3390', 'MLA1798', 'Cartas - R.P.G.'), ('132', '2016-04-26 14:16:38', '2016-04-26 14:16:38', null, 'MLA2335', 'MLA1798', 'Cigarrillos y Afines'), ('133', '2016-04-26 14:16:38', '2016-04-26 14:16:38', null, 'MLA6102', 'MLA1798', 'Coleccionables de Coca-Cola'), ('134', '2016-04-26 14:16:38', '2016-04-26 14:16:38', null, 'MLA2355', 'MLA1798', 'Colecciones Diversas'), ('135', '2016-04-26 14:16:38', '2016-04-26 14:16:38', null, 'MLA3435', 'MLA1798', 'Comics'), ('136', '2016-04-26 14:16:38', '2016-04-26 14:16:38', null, 'MLA3422', 'MLA1798', 'Figuras de Acción'), ('137', '2016-04-26 14:16:38', '2016-04-26 14:16:38', null, 'MLA1831', 'MLA1798', 'Figuritas, Álbumes y Cromos'), ('138', '2016-04-26 14:16:38', '2016-04-26 14:16:38', null, 'MLA1861', 'MLA1798', 'Filatelia'), ('139', '2016-04-26 14:16:38', '2016-04-26 14:16:38', null, 'MLA2098', 'MLA1798', 'Lapiceras, Plumas y Bolígrafos'), ('140', '2016-04-26 14:16:38', '2016-04-26 14:16:38', null, 'MLA2314', 'MLA1798', 'Latas, Botellas y Afines'), ('141', '2016-04-26 14:16:38', '2016-04-26 14:16:38', null, 'MLA1805', 'MLA1798', 'Militaría y Afines'), ('142', '2016-04-26 14:16:38', '2016-04-26 14:16:38', null, 'MLA3407', 'MLA1798', 'Modelismo'), ('143', '2016-04-26 14:16:38', '2016-04-26 14:16:38', null, 'MLA1806', 'MLA1798', 'Monedas y Billetes'), ('144', '2016-04-26 14:16:38', '2016-04-26 14:16:38', null, 'MLA31912', 'MLA1798', 'Muñecos'), ('145', '2016-04-26 14:16:38', '2016-04-26 14:16:38', null, 'MLA2458', 'MLA1798', 'Otros'), ('146', '2016-04-26 14:16:38', '2016-04-26 14:16:38', null, 'MLA1834', 'MLA1798', 'Posters, Carteles y Fotos'), ('147', '2016-04-26 14:16:38', '2016-04-26 14:16:38', null, 'MLA4272', 'MLA1798', 'Tarjetas Coleccionables'), ('148', '2016-04-26 14:16:38', '2016-04-26 14:16:38', null, 'MLA3398', 'MLA1798', 'Vehículos en Miniatura'), ('149', '2016-04-26 14:16:39', '2016-04-26 14:16:39', null, 'MLA126843', 'MLA1648', 'All In One'), ('150', '2016-04-26 14:16:39', '2016-04-26 14:16:39', null, 'MLA1870', 'MLA1648', 'Apple'), ('151', '2016-04-26 14:16:39', '2016-04-26 14:16:39', null, 'MLA6055', 'MLA1648', 'CDs y DVDs Vírgenes'), ('152', '2016-04-26 14:16:39', '2016-04-26 14:16:39', null, 'MLA3794', 'MLA1648', 'Componentes de PC'), ('153', '2016-04-26 14:16:39', '2016-04-26 14:16:39', null, 'MLA1718', 'MLA1648', 'Fuentes, UPS y Estabilizadores'), ('154', '2016-04-26 14:16:39', '2016-04-26 14:16:39', null, 'MLA2141', 'MLA1648', 'Impresoras y Accesorios'), ('155', '2016-04-26 14:16:39', '2016-04-26 14:16:39', null, 'MLA1660', 'MLA1648', 'Lectores y Scanners'), ('156', '2016-04-26 14:16:39', '2016-04-26 14:16:39', null, 'MLA1694', 'MLA1648', 'Memorias RAM'), ('157', '2016-04-26 14:16:39', '2016-04-26 14:16:39', null, 'MLA1656', 'MLA1648', 'Monitores'), ('158', '2016-04-26 14:16:39', '2016-04-26 14:16:39', null, 'MLA5892', 'MLA1648', 'Netbooks y Accesorios'), ('159', '2016-04-26 14:16:39', '2016-04-26 14:16:39', null, 'MLA4072', 'MLA1648', 'Notebooks y Accesorios'), ('160', '2016-04-26 14:16:39', '2016-04-26 14:16:39', null, 'MLA1912', 'MLA1648', 'Otros'), ('161', '2016-04-26 14:16:39', '2016-04-26 14:16:39', null, 'MLA1649', 'MLA1648', 'PC'), ('162', '2016-04-26 14:16:39', '2016-04-26 14:16:39', null, 'MLA1651', 'MLA1648', 'Palms y Handhelds'), ('163', '2016-04-26 14:16:39', '2016-04-26 14:16:39', null, 'MLA4980', 'MLA1648', 'Pen Drives'), ('164', '2016-04-26 14:16:39', '2016-04-26 14:16:39', null, 'MLA1712', 'MLA1648', 'Periféricos de PC'), ('165', '2016-04-26 14:16:39', '2016-04-26 14:16:39', null, 'MLA1693', 'MLA1648', 'Procesadores'), ('166', '2016-04-26 14:16:39', '2016-04-26 14:16:39', null, 'MLA5017', 'MLA1648', 'Proyectores y Pantallas'), ('167', '2016-04-26 14:16:39', '2016-04-26 14:16:39', null, 'MLA1700', 'MLA1648', 'Redes'), ('168', '2016-04-26 14:16:39', '2016-04-26 14:16:39', null, 'MLA1723', 'MLA1648', 'Software'), ('169', '2016-04-26 14:16:39', '2016-04-26 14:16:39', null, 'MLA126689', 'MLA1648', 'Ultrabooks'), ('170', '2016-04-26 14:16:39', '2016-04-26 14:16:39', null, 'MLA82085', 'MLA1648', 'iPad y Tablets'), ('171', '2016-04-26 14:16:40', '2016-04-26 14:16:40', null, 'MLA352197', 'MLA1144', 'Disney Infinity'), ('172', '2016-04-26 14:16:40', '2016-04-26 14:16:40', null, 'MLA8232', 'MLA1144', 'Flippers y Arcade'), ('173', '2016-04-26 14:16:40', '2016-04-26 14:16:40', null, 'MLA373768', 'MLA1144', 'Nintendo'), ('174', '2016-04-26 14:16:40', '2016-04-26 14:16:40', null, 'MLA6001', 'MLA1144', 'Otras Marcas'), ('175', '2016-04-26 14:16:40', '2016-04-26 14:16:40', null, 'MLA373769', 'MLA1144', 'PlayStation'), ('176', '2016-04-26 14:16:40', '2016-04-26 14:16:40', null, 'MLA373018', 'MLA1144', 'SEGA'), ('177', '2016-04-26 14:16:40', '2016-04-26 14:16:40', null, 'MLA373840', 'MLA1144', 'Videojuegos'), ('178', '2016-04-26 14:16:40', '2016-04-26 14:16:40', null, 'MLA373767', 'MLA1144', 'Xbox'), ('179', '2016-04-26 14:16:41', '2016-04-26 14:16:41', null, 'MLA1049', 'MLA1039', 'Accesorios para Cámaras'), ('180', '2016-04-26 14:16:41', '2016-04-26 14:16:41', null, 'MLA4239', 'MLA1039', 'Baterías, Pilas y Cargadores'), ('181', '2016-04-26 14:16:41', '2016-04-26 14:16:41', null, 'MLA3830', 'MLA1039', 'Cámaras Analógicas y Polaroid'), ('182', '2016-04-26 14:16:41', '2016-04-26 14:16:41', null, 'MLA1042', 'MLA1039', 'Cámaras Digitales'), ('183', '2016-04-26 14:16:41', '2016-04-26 14:16:41', null, 'MLA392132', 'MLA1039', 'Filmadoras'), ('184', '2016-04-26 14:16:41', '2016-04-26 14:16:41', null, 'MLA10372', 'MLA1039', 'Laboratorios y Mini Labs'), ('185', '2016-04-26 14:16:41', '2016-04-26 14:16:41', null, 'MLA3553', 'MLA1039', 'Memorias'), ('186', '2016-04-26 14:16:41', '2016-04-26 14:16:41', null, 'MLA1914', 'MLA1039', 'Otros'), ('187', '2016-04-26 14:16:41', '2016-04-26 14:16:41', null, 'MLA9808', 'MLA1039', 'Portarretratos y Álbumes'), ('188', '2016-04-26 14:16:41', '2016-04-26 14:16:41', null, 'MLA95495', 'MLA1039', 'Réflex y Lentes'), ('189', '2016-04-26 14:16:41', '2016-04-26 14:16:41', null, 'MLA4708', 'MLA1039', 'Telescopios y Binoculares'), ('190', '2016-04-26 14:16:42', '2016-04-26 14:16:42', null, 'MLA1410', 'MLA1403', 'Accesorios'), ('191', '2016-04-26 14:16:42', '2016-04-26 14:16:42', null, 'MLA41010', 'MLA1403', 'Bebidas Blancas'), ('192', '2016-04-26 14:16:42', '2016-04-26 14:16:42', null, 'MLA73714', 'MLA1403', 'Bebidas Energizantes'), ('193', '2016-04-26 14:16:42', '2016-04-26 14:16:42', null, 'MLA1411', 'MLA1403', 'Champagnes'), ('194', '2016-04-26 14:16:42', '2016-04-26 14:16:42', null, 'MLA1418', 'MLA1403', 'Cigarros y Pipas'), ('195', '2016-04-26 14:16:42', '2016-04-26 14:16:42', null, 'MLA1423', 'MLA1403', 'Comestibles'), ('196', '2016-04-26 14:16:42', '2016-04-26 14:16:42', null, 'MLA73713', 'MLA1403', 'Fernets'), ('197', '2016-04-26 14:16:42', '2016-04-26 14:16:42', null, 'MLA3649', 'MLA1403', 'Libros de Cocina'), ('198', '2016-04-26 14:16:42', '2016-04-26 14:16:42', null, 'MLA1416', 'MLA1403', 'Licores'), ('199', '2016-04-26 14:16:42', '2016-04-26 14:16:42', null, 'MLA1417', 'MLA1403', 'Otros'), ('200', '2016-04-26 14:16:42', '2016-04-26 14:16:42', null, 'MLA1404', 'MLA1403', 'Vinos'), ('201', '2016-04-26 14:16:42', '2016-04-26 14:16:42', null, 'MLA10511', 'MLA1403', 'Whiskies'), ('202', '2016-04-26 14:16:44', '2016-04-26 14:16:44', null, 'MLA1338', 'MLA1276', 'Aerobics y Fitness'), ('203', '2016-04-26 14:16:44', '2016-04-26 14:16:44', null, 'MLA2480', 'MLA1276', 'Artes Marciales y Boxeo'), ('204', '2016-04-26 14:16:44', '2016-04-26 14:16:44', null, 'MLA1292', 'MLA1276', 'Bicicletas y Ciclismo'), ('205', '2016-04-26 14:16:44', '2016-04-26 14:16:44', null, 'MLA1309', 'MLA1276', 'Básquet'), ('206', '2016-04-26 14:16:44', '2016-04-26 14:16:44', null, 'MLA1362', 'MLA1276', 'Camping'), ('207', '2016-04-26 14:16:44', '2016-04-26 14:16:44', null, 'MLA1277', 'MLA1276', 'Deportes Acuáticos'), ('208', '2016-04-26 14:16:44', '2016-04-26 14:16:44', null, 'MLA1355', 'MLA1276', 'Deportes Extremos'), ('209', '2016-04-26 14:16:44', '2016-04-26 14:16:44', null, 'MLA8939', 'MLA1276', 'Entradas a Eventos Deportivos'), ('210', '2016-04-26 14:16:44', '2016-04-26 14:16:44', null, 'MLA1349', 'MLA1276', 'Equitación y Polo'), ('211', '2016-04-26 14:16:44', '2016-04-26 14:16:44', null, 'MLA1285', 'MLA1276', 'Fútbol'), ('212', '2016-04-26 14:16:44', '2016-04-26 14:16:44', null, 'MLA1302', 'MLA1276', 'Fútbol Americano'), ('213', '2016-04-26 14:16:44', '2016-04-26 14:16:44', null, 'MLA1342', 'MLA1276', 'Golf'), ('214', '2016-04-26 14:16:44', '2016-04-26 14:16:44', null, 'MLA37856', 'MLA1276', 'Handball'), ('215', '2016-04-26 14:16:44', '2016-04-26 14:16:44', null, 'MLA3732', 'MLA1276', 'Hockey'), ('216', '2016-04-26 14:16:44', '2016-04-26 14:16:44', null, 'MLA4697', 'MLA1276', 'Juegos de Salón'), ('217', '2016-04-26 14:16:44', '2016-04-26 14:16:44', null, 'MLA3660', 'MLA1276', 'Libros y Revistas de Deportes'), ('218', '2016-04-26 14:16:44', '2016-04-26 14:16:44', null, 'MLA47786', 'MLA1276', 'Montañismo y Trekking'), ('219', '2016-04-26 14:16:44', '2016-04-26 14:16:44', null, 'MLA1278', 'MLA1276', 'Natación'), ('220', '2016-04-26 14:16:44', '2016-04-26 14:16:44', null, 'MLA1358', 'MLA1276', 'Otros'), ('221', '2016-04-26 14:16:44', '2016-04-26 14:16:44', null, 'MLA1293', 'MLA1276', 'Patín, Gimnasia y Danza'), ('222', '2016-04-26 14:16:44', '2016-04-26 14:16:44', null, 'MLA1979', 'MLA1276', 'Pesca'), ('223', '2016-04-26 14:16:44', '2016-04-26 14:16:44', null, 'MLA8959', 'MLA1276', 'Pilates y Yoga'), ('224', '2016-04-26 14:16:44', '2016-04-26 14:16:44', null, 'MLA3723', 'MLA1276', 'Pulsómetros y Cronómetros'), ('225', '2016-04-26 14:16:44', '2016-04-26 14:16:44', null, 'MLA3731', 'MLA1276', 'Rugby'), ('226', '2016-04-26 14:16:44', '2016-04-26 14:16:44', null, 'MLA1297', 'MLA1276', 'Ski y Snowboard'), ('227', '2016-04-26 14:16:44', '2016-04-26 14:16:44', null, 'MLA18369', 'MLA1276', 'Softball y Beisbol'), ('228', '2016-04-26 14:16:44', '2016-04-26 14:16:44', null, 'MLA3551', 'MLA1276', 'Suplementos Alimenticios'), ('229', '2016-04-26 14:16:44', '2016-04-26 14:16:44', null, 'MLA1322', 'MLA1276', 'Tenis, Padel y Squash '), ('230', '2016-04-26 14:16:44', '2016-04-26 14:16:44', null, 'MLA1333', 'MLA1276', 'Voley'), ('231', '2016-04-26 14:16:44', '2016-04-26 14:16:44', null, 'MLA3724', 'MLA1276', 'Zapatillas'), ('232', '2016-04-26 14:16:45', '2016-04-26 14:16:45', null, 'MLA6355', 'MLA5726', 'Artefactos de Cuidado Personal'), ('233', '2016-04-26 14:16:45', '2016-04-26 14:16:45', null, 'MLA1575', 'MLA5726', 'Artefactos para el Hogar'), ('234', '2016-04-26 14:16:45', '2016-04-26 14:16:45', null, 'MLA385177', 'MLA5726', 'Climatización'), ('235', '2016-04-26 14:16:45', '2016-04-26 14:16:45', null, 'MLA1618', 'MLA5726', 'Cocción'), ('236', '2016-04-26 14:16:45', '2016-04-26 14:16:45', null, 'MLA117258', 'MLA5726', 'Dispensadores y Purificadores'), ('237', '2016-04-26 14:16:45', '2016-04-26 14:16:45', null, 'MLA10225', 'MLA5726', 'Electrodomésticos de Cocina'), ('238', '2016-04-26 14:16:45', '2016-04-26 14:16:45', null, 'MLA30112', 'MLA5726', 'Heladeras y Freezers'), ('239', '2016-04-26 14:16:45', '2016-04-26 14:16:45', null, 'MLA18353', 'MLA5726', 'Lavarropas y Secarropas'), ('240', '2016-04-26 14:16:45', '2016-04-26 14:16:45', null, 'MLA5977', 'MLA5726', 'Otros'), ('241', '2016-04-26 14:16:45', '2016-04-26 14:16:45', null, 'MLA385176', 'MLA5726', 'Termotanques y Calefones'), ('242', '2016-04-26 14:16:46', '2016-04-26 14:16:46', null, 'MLA3690', 'MLA1000', 'Accesorios para Audio y Video'), ('243', '2016-04-26 14:16:46', '2016-04-26 14:16:46', null, 'MLA1024', 'MLA1000', 'Audio / Video Profesional y DJ'), ('244', '2016-04-26 14:16:46', '2016-04-26 14:16:46', null, 'MLA1012', 'MLA1000', 'Audio Portátil  y Radios'), ('245', '2016-04-26 14:16:46', '2016-04-26 14:16:46', null, 'MLA1010', 'MLA1000', 'Audio para el Hogar'), ('246', '2016-04-26 14:16:46', '2016-04-26 14:16:46', null, 'MLA1060', 'MLA1000', 'Calculadoras y Agendas'), ('247', '2016-04-26 14:16:46', '2016-04-26 14:16:46', null, 'MLA11830', 'MLA1000', 'Componentes Electrónicos'), ('248', '2016-04-26 14:16:46', '2016-04-26 14:16:46', null, 'MLA352294', 'MLA1000', 'Drones'), ('249', '2016-04-26 14:16:46', '2016-04-26 14:16:46', null, 'MLA1941', 'MLA1000', 'Fotocopiadoras y Accesorios'), ('250', '2016-04-26 14:16:46', '2016-04-26 14:16:46', null, 'MLA3571', 'MLA1000', 'GPS'), ('251', '2016-04-26 14:16:46', '2016-04-26 14:16:46', null, 'MLA4639', 'MLA1000', 'Home Theaters'), ('252', '2016-04-26 14:16:46', '2016-04-26 14:16:46', null, 'MLA1019', 'MLA1000', 'MP3, MP4 y MP5 Players'), ('253', '2016-04-26 14:16:46', '2016-04-26 14:16:46', null, 'MLA1070', 'MLA1000', 'Otros'), ('254', '2016-04-26 14:16:46', '2016-04-26 14:16:46', null, 'MLA4641', 'MLA1000', 'Pilas, Cargadores y Baterías'), ('255', '2016-04-26 14:16:46', '2016-04-26 14:16:46', null, 'MLA32234', 'MLA1000', 'Portarretratos Digitales'), ('256', '2016-04-26 14:16:46', '2016-04-26 14:16:46', null, 'MLA4800', 'MLA1000', 'Proyectores y Pantallas'), ('257', '2016-04-26 14:16:46', '2016-04-26 14:16:46', null, 'MLA1015', 'MLA1000', 'Reproductores de DVD y Video'), ('258', '2016-04-26 14:16:46', '2016-04-26 14:16:46', null, 'MLA2912', 'MLA1000', 'Seguridad y Vigilancia - Hogar'), ('259', '2016-04-26 14:16:46', '2016-04-26 14:16:46', null, 'MLA5847', 'MLA1000', 'Soportes'), ('260', '2016-04-26 14:16:46', '2016-04-26 14:16:46', null, 'MLA1002', 'MLA1000', 'Televisores'), ('261', '2016-04-26 14:16:46', '2016-04-26 14:16:46', null, 'MLA82086', 'MLA1000', 'iPad y Tablets'), ('262', '2016-04-26 14:16:46', '2016-04-26 14:16:46', null, 'MLA6205', 'MLA1000', 'iPod'), ('263', '2016-04-26 14:16:47', '2016-04-26 14:16:47', null, 'MLA10512', 'MLA2547', 'Entradas de Colección'), ('264', '2016-04-26 14:16:47', '2016-04-26 14:16:47', null, 'MLA10434', 'MLA2547', 'Eventos Deportivos'), ('265', '2016-04-26 14:16:47', '2016-04-26 14:16:47', null, 'MLA122605', 'MLA2547', 'Eventos en Estados Unidos'), ('266', '2016-04-26 14:16:47', '2016-04-26 14:16:47', null, 'MLA122606', 'MLA2547', 'Eventos en Francia'), ('267', '2016-04-26 14:16:47', '2016-04-26 14:16:47', null, 'MLA10513', 'MLA2547', 'Otras Entradas'), ('268', '2016-04-26 14:16:47', '2016-04-26 14:16:47', null, 'MLA10405', 'MLA2547', 'Recitales'), ('269', '2016-04-26 14:16:47', '2016-04-26 14:16:47', null, 'MLA10451', 'MLA2547', 'Teatro'), ('270', '2016-04-26 14:16:48', '2016-04-26 14:16:48', null, 'MLA1613', 'MLA1574', 'Baño'), ('271', '2016-04-26 14:16:48', '2016-04-26 14:16:48', null, 'MLA1592', 'MLA1574', 'Cocina'), ('272', '2016-04-26 14:16:48', '2016-04-26 14:16:48', null, 'MLA1631', 'MLA1574', 'Decoración para el Hogar'), ('273', '2016-04-26 14:16:48', '2016-04-26 14:16:48', null, 'MLA1625', 'MLA1574', 'Dormitorio'), ('274', '2016-04-26 14:16:48', '2016-04-26 14:16:48', null, 'MLA1582', 'MLA1574', 'Iluminación para el Hogar'), ('275', '2016-04-26 14:16:48', '2016-04-26 14:16:48', null, 'MLA1621', 'MLA1574', 'Jardines y Exteriores'), ('276', '2016-04-26 14:16:48', '2016-04-26 14:16:48', null, 'MLA119682', 'MLA1574', 'Lavadero y Limpieza'), ('277', '2016-04-26 14:16:48', '2016-04-26 14:16:48', null, 'MLA6658', 'MLA1574', 'Muebles para Oficinas'), ('278', '2016-04-26 14:16:48', '2016-04-26 14:16:48', null, 'MLA1902', 'MLA1574', 'Otros'), ('279', '2016-04-26 14:16:48', '2016-04-26 14:16:48', null, 'MLA14548', 'MLA1574', 'Pisos, Paredes y Aberturas'), ('280', '2016-04-26 14:16:48', '2016-04-26 14:16:48', null, 'MLA1623', 'MLA1574', 'Sala de Estar y Comedor'), ('281', '2016-04-26 14:16:48', '2016-04-26 14:16:48', null, 'MLA4624', 'MLA1574', 'Seguridad para el Hogar'), ('282', '2016-04-26 14:16:50', '2016-04-26 14:16:50', null, 'MLA1512', 'MLA1499', 'Agro'), ('283', '2016-04-26 14:16:50', '2016-04-26 14:16:50', null, 'MLA5284', 'MLA1499', 'Arquitectura y Diseño'), ('284', '2016-04-26 14:16:50', '2016-04-26 14:16:50', null, 'MLA5173', 'MLA1499', 'Balanzas'), ('285', '2016-04-26 14:16:50', '2016-04-26 14:16:50', null, 'MLA2467', 'MLA1499', 'Componentes Eléctricos'), ('286', '2016-04-26 14:16:50', '2016-04-26 14:16:50', null, 'MLA1500', 'MLA1499', 'Construcción'), ('287', '2016-04-26 14:16:50', '2016-04-26 14:16:50', null, 'MLA48904', 'MLA1499', 'Embalajes'), ('288', '2016-04-26 14:16:50', '2016-04-26 14:16:50', null, 'MLA5343', 'MLA1499', 'Equipamiento Comercial'), ('289', '2016-04-26 14:16:50', '2016-04-26 14:16:50', null, 'MLA5179', 'MLA1499', 'Equipamiento Médico'), ('290', '2016-04-26 14:16:50', '2016-04-26 14:16:50', null, 'MLA2102', 'MLA1499', 'Equipamiento para Oficinas'), ('291', '2016-04-26 14:16:50', '2016-04-26 14:16:50', null, 'MLA5226', 'MLA1499', 'Herramientas'), ('292', '2016-04-26 14:16:50', '2016-04-26 14:16:50', null, 'MLA5182', 'MLA1499', 'Industria Gastronómica'), ('293', '2016-04-26 14:16:50', '2016-04-26 14:16:50', null, 'MLA5160', 'MLA1499', 'Industria Textil'), ('294', '2016-04-26 14:16:50', '2016-04-26 14:16:50', null, 'MLA5982', 'MLA1499', 'Librería'), ('295', '2016-04-26 14:16:50', '2016-04-26 14:16:50', null, 'MLA5174', 'MLA1499', 'Material de Promoción'), ('296', '2016-04-26 14:16:50', '2016-04-26 14:16:50', null, 'MLA1893', 'MLA1499', 'Otros'), ('297', '2016-04-26 14:16:50', '2016-04-26 14:16:50', null, 'MLA5169', 'MLA1499', 'Seguridad Industrial'), ('298', '2016-04-26 14:16:50', '2016-04-26 14:16:50', null, 'MLA12555', 'MLA1499', 'Uniformes'), ('299', '2016-04-26 14:16:51', '2016-04-26 14:16:51', null, 'MLA374730', 'MLA1459', 'Camas Náuticas'), ('300', '2016-04-26 14:16:51', '2016-04-26 14:16:51', null, 'MLA1496', 'MLA1459', 'Campos'), ('301', '2016-04-26 14:16:51', '2016-04-26 14:16:51', null, 'MLA1466', 'MLA1459', 'Casas'), ('302', '2016-04-26 14:16:51', '2016-04-26 14:16:51', null, 'MLA50541', 'MLA1459', 'Cocheras'), ('303', '2016-04-26 14:16:51', '2016-04-26 14:16:51', null, 'MLA392265', 'MLA1459', 'Consultorios'), ('304', '2016-04-26 14:16:51', '2016-04-26 14:16:51', null, 'MLA1472', 'MLA1459', 'Departamentos'), ('305', '2016-04-26 14:16:51', '2016-04-26 14:16:51', null, 'MLA1475', 'MLA1459', 'Depósitos y Galpones'), ('306', '2016-04-26 14:16:51', '2016-04-26 14:16:51', null, 'MLA50545', 'MLA1459', 'Fondo de Comercio'), ('307', '2016-04-26 14:16:51', '2016-04-26 14:16:51', null, 'MLA79242', 'MLA1459', 'Locales'), ('308', '2016-04-26 14:16:51', '2016-04-26 14:16:51', null, 'MLA50538', 'MLA1459', 'Oficinas'), ('309', '2016-04-26 14:16:51', '2016-04-26 14:16:51', null, 'MLA1892', 'MLA1459', 'Otros Inmuebles'), ('310', '2016-04-26 14:16:51', '2016-04-26 14:16:51', null, 'MLA105179', 'MLA1459', 'PH'), ('311', '2016-04-26 14:16:51', '2016-04-26 14:16:51', null, 'MLA50544', 'MLA1459', 'Parcelas, Nichos y Bóvedas'), ('312', '2016-04-26 14:16:51', '2016-04-26 14:16:51', null, 'MLA50547', 'MLA1459', 'Quintas'), ('313', '2016-04-26 14:16:51', '2016-04-26 14:16:51', null, 'MLA1493', 'MLA1459', 'Terrenos y Lotes'), ('314', '2016-04-26 14:16:51', '2016-04-26 14:16:51', null, 'MLA50536', 'MLA1459', 'Tiempo Compartido'), ('315', '2016-04-26 14:16:52', '2016-04-26 14:16:52', null, 'MLA3011', 'MLA1182', 'Amplificadores'), ('316', '2016-04-26 14:16:52', '2016-04-26 14:16:52', null, 'MLA3018', 'MLA1182', 'Bajos'), ('317', '2016-04-26 14:16:52', '2016-04-26 14:16:52', null, 'MLA3024', 'MLA1182', 'Baterías y Percusión'), ('318', '2016-04-26 14:16:52', '2016-04-26 14:16:52', null, 'MLA3013', 'MLA1182', 'Consolas de Sonido'), ('319', '2016-04-26 14:16:52', '2016-04-26 14:16:52', null, 'MLA3012', 'MLA1182', 'Efectos de Sonido'), ('320', '2016-04-26 14:16:52', '2016-04-26 14:16:52', null, 'MLA2987', 'MLA1182', 'Guitarras'), ('321', '2016-04-26 14:16:52', '2016-04-26 14:16:52', null, 'MLA4611', 'MLA1182', 'Instrumentos de Cuerdas'), ('322', '2016-04-26 14:16:52', '2016-04-26 14:16:52', null, 'MLA3005', 'MLA1182', 'Instrumentos de Viento'), ('323', '2016-04-26 14:16:52', '2016-04-26 14:16:52', null, 'MLA11094', 'MLA1182', 'Micrófonos, Pies y Preamp.'), ('324', '2016-04-26 14:16:52', '2016-04-26 14:16:52', null, 'MLA3014', 'MLA1182', 'Otros'), ('325', '2016-04-26 14:16:52', '2016-04-26 14:16:52', null, 'MLA26982', 'MLA1182', 'Parlantes'), ('326', '2016-04-26 14:16:52', '2016-04-26 14:16:52', null, 'MLA3360', 'MLA1182', 'Partituras y Letras'), ('327', '2016-04-26 14:16:52', '2016-04-26 14:16:52', null, 'MLA2100', 'MLA1182', 'Teclados y Pianos'), ('328', '2016-04-26 14:16:53', '2016-04-26 14:16:53', null, 'MLA3939', 'MLA3937', 'Bijouterie de Fantasía'), ('329', '2016-04-26 14:16:53', '2016-04-26 14:16:53', null, 'MLA1431', 'MLA3937', 'Joyas'), ('330', '2016-04-26 14:16:53', '2016-04-26 14:16:53', null, 'MLA6443', 'MLA3937', 'Joyas Antiguas'), ('331', '2016-04-26 14:16:53', '2016-04-26 14:16:53', null, 'MLA7715', 'MLA3937', 'Materiales para Joyería'), ('332', '2016-04-26 14:16:53', '2016-04-26 14:16:53', null, 'MLA3938', 'MLA3937', 'Otros'), ('333', '2016-04-26 14:16:53', '2016-04-26 14:16:53', null, 'MLA6750', 'MLA3937', 'Pulsómetros y Cronómetros'), ('334', '2016-04-26 14:16:53', '2016-04-26 14:16:53', null, 'MLA1448', 'MLA3937', 'Relojes Antiguos'), ('335', '2016-04-26 14:16:53', '2016-04-26 14:16:53', null, 'MLA1442', 'MLA3937', 'Relojes Pulsera'), ('336', '2016-04-26 14:16:53', '2016-04-26 14:16:53', null, 'MLA6441', 'MLA3937', 'Relojes para el Hogar'), ('337', '2016-04-26 14:16:54', '2016-04-26 14:16:54', null, 'MLA352344', 'MLA1132', 'Armas de Juguete'), ('338', '2016-04-26 14:16:54', '2016-04-26 14:16:54', null, 'MLA2963', 'MLA1132', 'Autos de Juguete'), ('339', '2016-04-26 14:16:54', '2016-04-26 14:16:54', null, 'MLA1824', 'MLA1132', 'Cartas y Naipes'), ('340', '2016-04-26 14:16:54', '2016-04-26 14:16:54', null, 'MLA9304', 'MLA1132', 'Disfraces y Cotillón'), ('341', '2016-04-26 14:16:54', '2016-04-26 14:16:54', null, 'MLA388022', 'MLA1132', 'Figuras de Acción'), ('342', '2016-04-26 14:16:54', '2016-04-26 14:16:54', null, 'MLA2960', 'MLA1132', 'Juegos'), ('343', '2016-04-26 14:16:54', '2016-04-26 14:16:54', null, 'MLA1167', 'MLA1132', 'Juegos de Aire Libre y Agua'), ('344', '2016-04-26 14:16:54', '2016-04-26 14:16:54', null, 'MLA2533', 'MLA1132', 'Juguetes'), ('345', '2016-04-26 14:16:54', '2016-04-26 14:16:54', null, 'MLA1841', 'MLA1132', 'Modelismo'), ('346', '2016-04-26 14:16:54', '2016-04-26 14:16:54', null, 'MLA2968', 'MLA1132', 'Muñecas'), ('347', '2016-04-26 14:16:54', '2016-04-26 14:16:54', null, 'MLA2978', 'MLA1132', 'Muñecos y Accesorios'), ('348', '2016-04-26 14:16:54', '2016-04-26 14:16:54', null, 'MLA1910', 'MLA1132', 'Otros'), ('349', '2016-04-26 14:16:54', '2016-04-26 14:16:54', null, 'MLA6558', 'MLA1132', 'Peloteros y Castillos'), ('350', '2016-04-26 14:16:54', '2016-04-26 14:16:54', null, 'MLA3667', 'MLA1132', 'Películas Infantiles'), ('351', '2016-04-26 14:16:54', '2016-04-26 14:16:54', null, 'MLA1818', 'MLA1132', 'Soldados de Plomo'), ('352', '2016-04-26 14:16:54', '2016-04-26 14:16:54', null, 'MLA2097', 'MLA1132', 'Vehículos en Miniatura'), ('353', '2016-04-26 14:16:54', '2016-04-26 14:16:54', null, 'MLA6151', 'MLA1132', 'Vehículos para Niños'), ('354', '2016-04-26 14:16:56', '2016-04-26 14:16:56', null, 'MLA2043', 'MLA3025', 'Biografías'), ('355', '2016-04-26 14:16:56', '2016-04-26 14:16:56', null, 'MLA3043', 'MLA3025', 'Comics e Historietas'), ('356', '2016-04-26 14:16:56', '2016-04-26 14:16:56', null, 'MLA1221', 'MLA3025', 'Diccionarios y Enciclopedias'), ('357', '2016-04-26 14:16:56', '2016-04-26 14:16:56', null, 'MLA1200', 'MLA3025', 'Ensayos'), ('358', '2016-04-26 14:16:56', '2016-04-26 14:16:56', null, 'MLA1196', 'MLA3025', 'Libros Antiguos'), ('359', '2016-04-26 14:16:56', '2016-04-26 14:16:56', null, 'MLA1201', 'MLA3025', 'Libros Esotéricos/Paranormales'), ('360', '2016-04-26 14:16:56', '2016-04-26 14:16:56', null, 'MLA7529', 'MLA3025', 'Libros Técnicos'), ('361', '2016-04-26 14:16:56', '2016-04-26 14:16:56', null, 'MLA47398', 'MLA3025', 'Libros de Aquitectura y Diseño'), ('362', '2016-04-26 14:16:56', '2016-04-26 14:16:56', null, 'MLA5484', 'MLA3025', 'Libros de Arte'), ('363', '2016-04-26 14:16:56', '2016-04-26 14:16:56', null, 'MLA1202', 'MLA3025', 'Libros de Autoayuda'), ('364', '2016-04-26 14:16:56', '2016-04-26 14:16:56', null, 'MLA5485', 'MLA3025', 'Libros de Ciencias Económicas'), ('365', '2016-04-26 14:16:56', '2016-04-26 14:16:56', null, 'MLA5497', 'MLA3025', 'Libros de Ciencias Exactas'), ('366', '2016-04-26 14:16:56', '2016-04-26 14:16:56', null, 'MLA6010', 'MLA3025', 'Libros de Ciencias Sociales'), ('367', '2016-04-26 14:16:56', '2016-04-26 14:16:56', null, 'MLA1204', 'MLA3025', 'Libros de Computación/Internet'), ('368', '2016-04-26 14:16:56', '2016-04-26 14:16:56', null, 'MLA5489', 'MLA3025', 'Libros de Cs Humanísticas'), ('369', '2016-04-26 14:16:56', '2016-04-26 14:16:56', null, 'MLA5493', 'MLA3025', 'Libros de Cs Médicas/Naturales'), ('370', '2016-04-26 14:16:56', '2016-04-26 14:16:56', null, 'MLA2074', 'MLA3025', 'Libros de Derecho'), ('371', '2016-04-26 14:16:56', '2016-04-26 14:16:56', null, 'MLA4795', 'MLA3025', 'Libros de Ficción'), ('372', '2016-04-26 14:16:56', '2016-04-26 14:16:56', null, 'MLA4786', 'MLA3025', 'Libros de Idiomas'), ('373', '2016-04-26 14:16:56', '2016-04-26 14:16:56', null, 'MLA3032', 'MLA3025', 'Libros de Ingeniería'), ('374', '2016-04-26 14:16:56', '2016-04-26 14:16:56', null, 'MLA5494', 'MLA3025', 'Libros de Recreación y Hobbies'), ('375', '2016-04-26 14:16:56', '2016-04-26 14:16:56', null, 'MLA5502', 'MLA3025', 'Libros de Religión'), ('376', '2016-04-26 14:16:56', '2016-04-26 14:16:56', null, 'MLA5486', 'MLA3025', 'Libros de Texto y Escolares'), ('377', '2016-04-26 14:16:56', '2016-04-26 14:16:56', null, 'MLA1227', 'MLA3025', 'Otros'), ('378', '2016-04-26 14:16:56', '2016-04-26 14:16:56', null, 'MLA1955', 'MLA3025', 'Revistas'), ('379', '2016-04-26 14:16:57', '2016-04-26 14:16:57', null, 'MLA8803', 'MLA1168', 'Merchandising'), ('380', '2016-04-26 14:16:57', '2016-04-26 14:16:57', null, 'MLA1174', 'MLA1168', 'Música'), ('381', '2016-04-26 14:16:57', '2016-04-26 14:16:57', null, 'MLA1228', 'MLA1168', 'Otros'), ('382', '2016-04-26 14:16:57', '2016-04-26 14:16:57', null, 'MLA13508', 'MLA1168', 'Películas'), ('383', '2016-04-26 14:16:57', '2016-04-26 14:16:57', null, 'MLA7841', 'MLA1168', 'Series de TV'), ('384', '2016-04-26 14:16:58', '2016-04-26 14:16:58', null, 'MLA2818', 'MLA1953', 'Adultos'), ('385', '2016-04-26 14:16:58', '2016-04-26 14:16:58', null, 'MLA363815', 'MLA1953', 'Alineación y Balanceo'), ('386', '2016-04-26 14:16:58', '2016-04-26 14:16:58', null, 'MLA10934', 'MLA1953', 'Artículos de Mercería'), ('387', '2016-04-26 14:16:58', '2016-04-26 14:16:58', null, 'MLA1740', 'MLA1953', 'Esoterismo'), ('388', '2016-04-26 14:16:58', '2016-04-26 14:16:58', null, 'MLA3530', 'MLA1953', 'Otros'), ('389', '2016-04-26 14:16:59', '2016-04-26 14:16:59', null, 'MLA3114', 'MLA1430', 'Accesorios de Moda'), ('390', '2016-04-26 14:16:59', '2016-04-26 14:16:59', null, 'MLA109276', 'MLA1430', 'Bermudas y Shorts'), ('391', '2016-04-26 14:16:59', '2016-04-26 14:16:59', null, 'MLA109085', 'MLA1430', 'Buzos y Hoodies'), ('392', '2016-04-26 14:16:59', '2016-04-26 14:16:59', null, 'MLA109049', 'MLA1430', 'Camisas, Chombas y Blusas'), ('393', '2016-04-26 14:16:59', '2016-04-26 14:16:59', null, 'MLA109096', 'MLA1430', 'Camperas, Tapados y Trenchs'), ('394', '2016-04-26 14:16:59', '2016-04-26 14:16:59', null, 'MLA110761', 'MLA1430', 'Carteras, Bolsos y Billeteras'), ('395', '2016-04-26 14:16:59', '2016-04-26 14:16:59', null, 'MLA109254', 'MLA1430', 'Enteritos'), ('396', '2016-04-26 14:16:59', '2016-04-26 14:16:59', null, 'MLA3959', 'MLA1430', 'Lentes'), ('397', '2016-04-26 14:16:59', '2016-04-26 14:16:59', null, 'MLA1911', 'MLA1430', 'Otros'), ('398', '2016-04-26 14:16:59', '2016-04-26 14:16:59', null, 'MLA109282', 'MLA1430', 'Pantalones, Jeans y Calzas'), ('399', '2016-04-26 14:16:59', '2016-04-26 14:16:59', null, 'MLA373771', 'MLA1430', 'Polleras'), ('400', '2016-04-26 14:16:59', '2016-04-26 14:16:59', null, 'MLA109042', 'MLA1430', 'Remeras y Musculosas'), ('401', '2016-04-26 14:16:59', '2016-04-26 14:16:59', null, 'MLA6839', 'MLA1430', 'Ropa Deportiva'), ('402', '2016-04-26 14:16:59', '2016-04-26 14:16:59', null, 'MLA109278', 'MLA1430', 'Ropa Interior y de Dormir'), ('403', '2016-04-26 14:16:59', '2016-04-26 14:16:59', null, 'MLA1455', 'MLA1430', 'Ropa de Bebés'), ('404', '2016-04-26 14:16:59', '2016-04-26 14:16:59', null, 'MLA109081', 'MLA1430', 'Saquitos, Sweaters y Chalecos'), ('405', '2016-04-26 14:16:59', '2016-04-26 14:16:59', null, 'MLA109089', 'MLA1430', 'Trajes'), ('406', '2016-04-26 14:16:59', '2016-04-26 14:16:59', null, 'MLA109270', 'MLA1430', 'Trajes de Baño'), ('407', '2016-04-26 14:16:59', '2016-04-26 14:16:59', null, 'MLA12554', 'MLA1430', 'Uniformes'), ('408', '2016-04-26 14:16:59', '2016-04-26 14:16:59', null, 'MLA373770', 'MLA1430', 'Vestidos'), ('409', '2016-04-26 14:16:59', '2016-04-26 14:16:59', null, 'MLA109027', 'MLA1430', 'Zapatillas'), ('410', '2016-04-26 14:16:59', '2016-04-26 14:16:59', null, 'MLA109026', 'MLA1430', 'Zapatos'), ('411', '2016-04-26 14:17:00', '2016-04-26 14:17:00', null, 'MLA6182', 'MLA1246', 'Cuidado Bucal'), ('412', '2016-04-26 14:17:00', '2016-04-26 14:17:00', null, 'MLA1253', 'MLA1246', 'Cuidado de la Piel'), ('413', '2016-04-26 14:17:00', '2016-04-26 14:17:00', null, 'MLA5395', 'MLA1246', 'Cuidado de la Salud'), ('414', '2016-04-26 14:17:00', '2016-04-26 14:17:00', null, 'MLA1263', 'MLA1246', 'Cuidado del Cabello'), ('415', '2016-04-26 14:17:00', '2016-04-26 14:17:00', null, 'MLA1260', 'MLA1246', 'Cuidado del Cuerpo'), ('416', '2016-04-26 14:17:00', '2016-04-26 14:17:00', null, 'MLA29884', 'MLA1246', 'Cuidado para Manos'), ('417', '2016-04-26 14:17:00', '2016-04-26 14:17:00', null, 'MLA6556', 'MLA1246', 'Equipamiento Médico'), ('418', '2016-04-26 14:17:00', '2016-04-26 14:17:00', null, 'MLA1248', 'MLA1246', 'Maquillaje'), ('419', '2016-04-26 14:17:00', '2016-04-26 14:17:00', null, 'MLA1275', 'MLA1246', 'Otros'), ('420', '2016-04-26 14:17:00', '2016-04-26 14:17:00', null, 'MLA1271', 'MLA1246', 'Perfumes'), ('421', '2016-04-26 14:17:00', '2016-04-26 14:17:00', null, 'MLA8830', 'MLA1246', 'Suplementos Alimenticios'), ('422', '2016-04-26 14:17:00', '2016-04-26 14:17:00', null, 'MLA43719', 'MLA1246', 'Terapias Naturales'), ('423', '2016-04-26 14:17:00', '2016-04-26 14:17:00', null, 'MLA1247', 'MLA1246', 'Vitaminas y Complementos'), ('424', '2016-04-26 14:17:02', '2016-04-26 14:17:02', null, 'MLA122264', 'MLA1540', 'Arte, Música y Cine'), ('425', '2016-04-26 14:17:02', '2016-04-26 14:17:02', null, 'MLA10514', 'MLA1540', 'Belleza y Cuidado Personal'), ('426', '2016-04-26 14:17:02', '2016-04-26 14:17:02', null, 'MLA43986', 'MLA1540', 'Cursos y Clases'), ('427', '2016-04-26 14:17:02', '2016-04-26 14:17:02', null, 'MLA91058', 'MLA1540', 'Delivery'), ('428', '2016-04-26 14:17:02', '2016-04-26 14:17:02', null, 'MLA1550', 'MLA1540', 'Fiestas y Eventos'), ('429', '2016-04-26 14:17:02', '2016-04-26 14:17:02', null, 'MLA122258', 'MLA1540', 'Hogar'), ('430', '2016-04-26 14:17:02', '2016-04-26 14:17:02', null, 'MLA56666', 'MLA1540', 'Imprenta'), ('431', '2016-04-26 14:17:02', '2016-04-26 14:17:02', null, 'MLA9007', 'MLA1540', 'Mantenimiento de Vehículos'), ('432', '2016-04-26 14:17:02', '2016-04-26 14:17:02', null, 'MLA111029', 'MLA1540', 'Medicina y Salud'), ('433', '2016-04-26 14:17:02', '2016-04-26 14:17:02', null, 'MLA113657', 'MLA1540', 'Oficios'), ('434', '2016-04-26 14:17:02', '2016-04-26 14:17:02', null, 'MLA1898', 'MLA1540', 'Otros Servicios'), ('435', '2016-04-26 14:17:02', '2016-04-26 14:17:02', null, 'MLA1541', 'MLA1540', 'Profesionales'), ('436', '2016-04-26 14:17:02', '2016-04-26 14:17:02', null, 'MLA91088', 'MLA1540', 'Ropa y Moda'), ('437', '2016-04-26 14:17:02', '2016-04-26 14:17:02', null, 'MLA11813', 'MLA1540', 'Servicio Técnico'), ('438', '2016-04-26 14:17:02', '2016-04-26 14:17:02', null, 'MLA11798', 'MLA1540', 'Servicios para Mascotas'), ('439', '2016-04-26 14:17:02', '2016-04-26 14:17:02', null, 'MLA91083', 'MLA1540', 'Servicios para Oficinas'), ('440', '2016-04-26 14:17:02', '2016-04-26 14:17:02', null, 'MLA9038', 'MLA1540', 'Transporte'), ('441', '2016-04-26 14:17:02', '2016-04-26 14:17:02', null, 'MLA1229', 'MLA1540', 'Viajes y Turismo');
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
  `brands_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `models`
-- ----------------------------
BEGIN;
INSERT INTO `models` VALUES ('1', '2016-03-21 15:48:50', '2016-05-05 14:34:30', null, 'CG 150 Titan', '2'), ('3', '2016-05-05 14:18:09', '2016-05-05 14:35:09', null, 'Biz', '1');
COMMIT;

-- ----------------------------
--  Table structure for `models_categories`
-- ----------------------------
DROP TABLE IF EXISTS `models_categories`;
CREATE TABLE `models_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `models_id` int(10) unsigned DEFAULT NULL,
  `categories_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `items_categories_items_id_foreign` (`models_id`),
  KEY `items_categories_categories_id_foreign` (`categories_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=FIXED;

-- ----------------------------
--  Records of `models_categories`
-- ----------------------------
BEGIN;
INSERT INTO `models_categories` VALUES ('4', null, null, null, '1', '4'), ('2', null, null, null, '3', '2'), ('3', null, null, null, '3', '1');
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `modules`
-- ----------------------------
BEGIN;
INSERT INTO `modules` VALUES ('1', '2016-03-15 14:35:17', '2016-03-15 14:35:17', null, 'items', null), ('2', '2016-03-15 14:35:33', '2016-03-15 14:35:33', null, 'brands', null), ('3', '2016-03-15 14:35:51', '2016-03-15 14:35:51', null, 'categories', null), ('4', '2016-03-15 14:37:29', '2016-03-15 14:37:29', null, 'models', null), ('5', '2016-03-15 14:39:10', '2016-03-15 14:39:10', null, 'clients', null), ('6', '2016-03-15 14:39:16', '2016-03-15 14:39:16', null, 'providers', null), ('7', '2016-03-15 15:23:35', '2016-03-15 15:23:35', null, 'sales', null), ('8', '2016-03-15 15:23:41', '2016-03-15 15:23:41', null, 'purchases', null), ('9', '2016-03-15 15:24:35', '2016-03-15 15:24:35', null, 'movements', null), ('10', '2016-04-18 20:21:24', '2016-04-18 20:21:24', null, 'publications', null), ('11', '2016-05-03 16:33:55', '2016-05-03 16:33:55', null, 'operations', null), ('12', '2016-05-05 22:29:42', '2016-05-05 22:29:42', null, 'branches', null);
COMMIT;

-- ----------------------------
--  Table structure for `operations`
-- ----------------------------
DROP TABLE IF EXISTS `operations`;
CREATE TABLE `operations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `clients_id` int(11) NOT NULL,
  `authorization_code` varchar(200) DEFAULT NULL,
  `medio_de_pago` int(11) NOT NULL,
  `pay_date` datetime DEFAULT NULL,
  `amount` double(10,2) NOT NULL,
  `authorization_key` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `operations`
-- ----------------------------
BEGIN;
INSERT INTO `operations` VALUES ('1', '2016-05-10 15:29:24', '2016-05-10 15:29:24', null, '35', '654402', '1', null, '22500.00', '934164fc-db6c-5cdd-ae8c-dc396408c5df', null);
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
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `permissions`
-- ----------------------------
BEGIN;
INSERT INTO `permissions` VALUES ('1', '2016-03-15 14:35:17', '2016-03-15 14:35:17', null, '0', '0', '0', '0', '1', '1'), ('2', '2016-03-15 14:35:33', '2016-03-15 14:35:33', null, '0', '0', '0', '0', '1', '2'), ('3', '2016-03-15 14:35:51', '2016-03-15 14:35:51', null, '0', '0', '0', '0', '1', '3'), ('4', '2016-03-15 14:37:29', '2016-03-15 14:37:29', null, '0', '0', '0', '0', '1', '4'), ('5', '2016-03-15 14:39:10', '2016-03-15 14:39:10', null, '0', '0', '0', '0', '1', '5'), ('6', '2016-03-15 14:39:16', '2016-03-15 14:39:16', null, '0', '0', '0', '0', '1', '6'), ('7', '2016-03-15 14:42:45', '2016-03-15 14:43:15', null, '1', '1', '1', '1', '2', '1'), ('8', '2016-03-15 14:42:45', '2016-03-15 14:43:16', null, '1', '1', '1', '1', '2', '2'), ('9', '2016-03-15 14:42:45', '2016-03-15 14:43:17', null, '1', '1', '1', '1', '2', '3'), ('10', '2016-03-15 14:42:45', '2016-03-15 14:43:17', null, '1', '1', '1', '1', '2', '4'), ('11', '2016-03-15 14:42:45', '2016-03-15 14:43:20', null, '1', '1', '1', '1', '2', '5'), ('12', '2016-03-15 14:42:45', '2016-03-15 14:43:18', null, '1', '1', '1', '1', '2', '6'), ('13', '2016-03-15 14:42:53', '2016-04-28 14:57:15', null, '0', '0', '0', '0', '3', '1'), ('14', '2016-03-15 14:42:53', '2016-03-15 14:42:53', null, '0', '0', '0', '0', '3', '2'), ('15', '2016-03-15 14:42:53', '2016-03-15 14:42:53', null, '0', '0', '0', '0', '3', '3'), ('16', '2016-03-15 14:42:53', '2016-03-15 14:42:53', null, '0', '0', '0', '0', '3', '4'), ('17', '2016-03-15 14:42:53', '2016-03-15 14:42:53', null, '0', '0', '0', '0', '3', '5'), ('18', '2016-03-15 14:42:53', '2016-03-15 14:42:53', null, '0', '0', '0', '0', '3', '6'), ('19', '2016-03-15 15:23:35', '2016-03-15 15:23:35', null, '0', '0', '0', '0', '1', '7'), ('20', '2016-03-15 15:23:35', '2016-03-15 15:23:35', null, '0', '0', '0', '0', '2', '7'), ('21', '2016-03-15 15:23:35', '2016-03-15 15:23:35', null, '0', '0', '0', '0', '3', '7'), ('22', '2016-03-15 15:23:41', '2016-03-15 15:23:41', null, '0', '0', '0', '0', '1', '8'), ('23', '2016-03-15 15:23:41', '2016-03-15 15:23:41', null, '0', '0', '0', '0', '2', '8'), ('24', '2016-03-15 15:23:41', '2016-03-15 15:23:41', null, '0', '0', '0', '0', '3', '8'), ('25', '2016-03-15 15:24:35', '2016-03-15 15:24:35', null, '0', '0', '0', '0', '1', '9'), ('26', '2016-03-15 15:24:35', '2016-03-15 15:24:35', null, '0', '0', '0', '0', '2', '9'), ('27', '2016-03-15 15:24:35', '2016-03-15 15:24:35', null, '0', '0', '0', '0', '3', '9'), ('28', '2016-04-18 20:21:24', '2016-04-18 20:21:24', null, '0', '0', '0', '0', '1', '10'), ('29', '2016-04-18 20:21:24', '2016-04-18 20:21:38', null, '1', '1', '1', '1', '2', '10'), ('30', '2016-04-18 20:21:24', '2016-04-19 12:40:19', null, '1', '0', '0', '0', '3', '10'), ('31', '2016-05-03 16:33:55', '2016-05-03 16:33:55', null, '0', '0', '0', '0', '1', '11'), ('32', '2016-05-03 16:33:55', '2016-05-03 16:34:12', null, '1', '1', '1', '1', '2', '11'), ('33', '2016-05-03 16:33:55', '2016-05-03 16:33:55', null, '0', '0', '0', '0', '3', '11'), ('34', '2016-05-05 22:29:42', '2016-05-05 22:29:42', null, '0', '0', '0', '0', '1', '12'), ('35', '2016-05-05 22:29:42', '2016-05-05 22:29:54', null, '1', '1', '1', '1', '2', '12'), ('36', '2016-05-05 22:29:42', '2016-05-05 22:29:42', null, '0', '0', '0', '0', '3', '12');
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
  `models_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `destacado` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `publications`
-- ----------------------------
BEGIN;
INSERT INTO `publications` VALUES ('9', '2016-05-05 16:07:22', '2016-05-05 23:14:37', null, '2016-05-19', 'HERMOSA !!', '450000', '3', '<p><span style=\"color: #99cc00;\">dadasdlas,dlal,&ntilde;da+dadas</span></p>\r\n<p>da</p>\r\n<p><strong>&nbsp;</strong></p>', '1'), ('10', '2016-05-05 23:39:50', '2016-05-06 00:14:57', null, '2016-05-18', 'CG 150', '25000', '3', '<p>acacacaca</p>\r\n<p>cas</p>\r\n<p>c</p>\r\n<p>asc</p>\r\n<p>asc</p>\r\n<p>as</p>', '0');
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
INSERT INTO `users` VALUES ('1', null, null, '2016-05-05 22:30:30', 'admin_motonet', 'admin_motonet', 'admin_motonet', '$2y$10$tT9hkF3i69YkTnz8PQ6.m.5cw.WeHSn4W.EQ8V4mRW/rMJ8.eEq.i', 'to3WcT836vqP5v3Pebv8f5vdYw0qlRfi3sAtx6rAWo7DWh7goq5HMFgZHW80', '1', 'motonet', null), ('2', null, '2016-03-15 15:31:08', '2016-05-05 22:27:42', 'supervisor', 'supervisor', 'supervisor@motonet.com', '$2y$10$SgtOdSNa05NIFOE5/3zAreVn5ASPA078rTDdd48.oQncaHNIuoEse', '8vHjPGLjVmARESEuSf0T2zGhbyqkvYQvb6NeUiCMoFenYCQBByIwSlbB5UEA', '2', 'motonet', null), ('3', null, '2016-04-18 17:38:44', '2016-04-19 12:39:26', 'ventas', 'ventas', 'ventas@motonet.com', '$2y$10$fBydDpAHQExFZC9Xe3AtXefTvkL3CE6SoqC1zmXU3EqRuTbrX8Uey', 'e6svRdSTud45MdHngq9SFPFOU6TSJPKJCcvw3kZaIQrKCh2kC3T9li6C7pGr', '3', 'motonet', null);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
