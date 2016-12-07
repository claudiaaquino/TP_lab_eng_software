/*
Navicat MySQL Data Transfer

Source Server         : Triade Local
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : db_abasteceagora

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2016-12-06 23:45:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for fuels
-- ----------------------------
DROP TABLE IF EXISTS `fuels`;
CREATE TABLE `fuels` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL,
  `dt_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dt_modificado` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fuels
-- ----------------------------
INSERT INTO `fuels` VALUES ('1', 'Gasolina', '2016-10-13 01:05:28', '2016-10-13 01:05:28', '1');
INSERT INTO `fuels` VALUES ('2', 'Diesel', '2016-10-13 01:05:38', '2016-10-13 01:05:38', '1');
INSERT INTO `fuels` VALUES ('3', 'Alcool ', '2016-10-13 01:05:48', '2016-10-13 01:05:48', '1');
INSERT INTO `fuels` VALUES ('5', 'qualquer um', '2016-11-30 10:02:13', '2016-11-30 10:02:13', '1');

-- ----------------------------
-- Table structure for historicoabastecimentos
-- ----------------------------
DROP TABLE IF EXISTS `historicoabastecimentos`;
CREATE TABLE `historicoabastecimentos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `veiculo_id` int(10) NOT NULL,
  `historicopreco_id` int(10) NOT NULL,
  `litros` float NOT NULL,
  `valor_total` float NOT NULL,
  `km_atual` int(10) DEFAULT NULL,
  `consumo_ult_abastecimento` float DEFAULT NULL,
  `avaliacao_posto` int(2) DEFAULT NULL,
  `dt_abastecimento` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of historicoabastecimentos
-- ----------------------------
INSERT INTO `historicoabastecimentos` VALUES ('4', '1', '4', '10', '28', '232', null, '4', '2016-10-26 09:36:00', '1');
INSERT INTO `historicoabastecimentos` VALUES ('5', '1', '5', '25', '82.5', null, null, null, '2016-11-08 23:47:00', '1');
INSERT INTO `historicoabastecimentos` VALUES ('3', '1', '2', '25', '81.75', '135435', null, null, '2016-10-26 01:53:00', '1');
INSERT INTO `historicoabastecimentos` VALUES ('6', '1', '5', '16', '52.8', null, null, null, '2016-11-16 09:10:00', '1');
INSERT INTO `historicoabastecimentos` VALUES ('7', '1', '5', '21', '69.3', '50202', null, null, '2016-11-16 09:42:00', '1');
INSERT INTO `historicoabastecimentos` VALUES ('8', '1', '6', '123', '448.95', null, null, '1', '2016-11-21 19:49:00', '1');
INSERT INTO `historicoabastecimentos` VALUES ('9', '1', '6', '13', '47.45', '1025', null, '5', '2016-11-30 10:03:00', '1');
INSERT INTO `historicoabastecimentos` VALUES ('10', '1', '6', '14', '51.1', null, null, '5', '2016-11-30 10:07:00', '1');

-- ----------------------------
-- Table structure for historicoprecos
-- ----------------------------
DROP TABLE IF EXISTS `historicoprecos`;
CREATE TABLE `historicoprecos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `posto_id` int(10) NOT NULL,
  `fuel_id` int(10) NOT NULL,
  `preco_litro` double NOT NULL,
  `dt_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of historicoprecos
-- ----------------------------
INSERT INTO `historicoprecos` VALUES ('1', '1', '1', '3.25', '2016-10-13 01:12:50', '1');
INSERT INTO `historicoprecos` VALUES ('2', '1', '1', '3.27', '2016-10-13 01:13:06', '1');
INSERT INTO `historicoprecos` VALUES ('3', '1', '2', '2.5', '2016-10-13 01:13:16', '1');
INSERT INTO `historicoprecos` VALUES ('4', '1', '3', '2.8', '2016-10-13 01:13:24', '1');
INSERT INTO `historicoprecos` VALUES ('5', '2', '1', '3.3', '2016-10-13 01:13:51', '1');
INSERT INTO `historicoprecos` VALUES ('6', '1', '1', '3.65', '2016-11-08 23:33:00', '1');
INSERT INTO `historicoprecos` VALUES ('7', '3', '3', '3.2', '2016-11-16 09:15:08', '1');

-- ----------------------------
-- Table structure for modelos
-- ----------------------------
DROP TABLE IF EXISTS `modelos`;
CREATE TABLE `modelos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL,
  `dt_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dt_modificado` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelos
-- ----------------------------
INSERT INTO `modelos` VALUES ('1', 'Novo Pálio', '2016-10-13 01:02:14', '2016-10-13 01:02:14', '1');
INSERT INTO `modelos` VALUES ('2', 'Smart', '2016-10-13 01:02:43', '2016-10-13 01:02:43', '1');

-- ----------------------------
-- Table structure for pagamentoformas
-- ----------------------------
DROP TABLE IF EXISTS `pagamentoformas`;
CREATE TABLE `pagamentoformas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL,
  `dt_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dt_modificado` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pagamentoformas
-- ----------------------------
INSERT INTO `pagamentoformas` VALUES ('1', 'Cartão Crédito Visa', '2016-10-26 10:22:00', '2016-10-26 10:22:00', '1');
INSERT INTO `pagamentoformas` VALUES ('2', 'Dinheiro', '2016-10-26 10:22:00', '2016-10-26 10:22:00', '1');
INSERT INTO `pagamentoformas` VALUES ('4', 'Cartão Débito', '2016-10-26 10:22:00', '2016-10-26 10:22:00', '1');

-- ----------------------------
-- Table structure for postofuels
-- ----------------------------
DROP TABLE IF EXISTS `postofuels`;
CREATE TABLE `postofuels` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `posto_id` int(10) NOT NULL,
  `fuel_id` int(10) NOT NULL,
  `dt_cadastro` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of postofuels
-- ----------------------------
INSERT INTO `postofuels` VALUES ('1', '1', '1', null, '1');
INSERT INTO `postofuels` VALUES ('2', '1', '2', null, '1');
INSERT INTO `postofuels` VALUES ('3', '1', '3', null, '1');
INSERT INTO `postofuels` VALUES ('4', '2', '1', null, '1');
INSERT INTO `postofuels` VALUES ('5', '2', '3', null, '1');
INSERT INTO `postofuels` VALUES ('6', '3', '2', null, '1');
INSERT INTO `postofuels` VALUES ('7', '5', '2', null, '1');

-- ----------------------------
-- Table structure for postopagamentoformas
-- ----------------------------
DROP TABLE IF EXISTS `postopagamentoformas`;
CREATE TABLE `postopagamentoformas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `posto_id` int(10) NOT NULL,
  `pagamentoforma_id` int(10) NOT NULL,
  `dt_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of postopagamentoformas
-- ----------------------------
INSERT INTO `postopagamentoformas` VALUES ('1', '1', '2', '2016-11-08 23:45:55', '1');
INSERT INTO `postopagamentoformas` VALUES ('2', '1', '4', '2016-11-08 23:46:02', '1');
INSERT INTO `postopagamentoformas` VALUES ('3', '2', '1', '2016-11-08 23:46:09', '1');
INSERT INTO `postopagamentoformas` VALUES ('4', '2', '2', '2016-11-08 23:46:17', '1');
INSERT INTO `postopagamentoformas` VALUES ('5', '3', '4', '2016-11-16 09:16:00', '1');

-- ----------------------------
-- Table structure for postos
-- ----------------------------
DROP TABLE IF EXISTS `postos`;
CREATE TABLE `postos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `nome` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `dt_cadastro` datetime DEFAULT CURRENT_TIMESTAMP,
  `dt_modificado` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of postos
-- ----------------------------
INSERT INTO `postos` VALUES ('1', '7', 'Posto 1', 'qualquer endereço para cadastrar', '2016-10-13 04:10:48', '2016-11-08 23:13:33', '1');
INSERT INTO `postos` VALUES ('2', '7', 'Posto 2', 'algum endereço qualquer', '2016-10-13 04:11:05', '2016-11-08 23:13:36', '1');
INSERT INTO `postos` VALUES ('3', '8', 'Sei la qual', 'teste 32432', '2016-10-19 12:23:38', '2016-11-08 23:15:05', '1');
INSERT INTO `postos` VALUES ('4', '8', 'Posto Ismael', 'fefdfs234', '2016-10-19 12:24:39', '2016-11-08 23:15:01', '1');
INSERT INTO `postos` VALUES ('5', '7', 'Posto 3', 'cefet II mg ', '2016-11-09 01:17:58', '2016-11-16 09:51:23', '1');
INSERT INTO `postos` VALUES ('8', null, 'Posto 10', 'qqr coisa', '2016-11-30 12:01:28', '2016-11-30 10:01:28', '1');

-- ----------------------------
-- Table structure for tipousuarios
-- ----------------------------
DROP TABLE IF EXISTS `tipousuarios`;
CREATE TABLE `tipousuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tipousuarios
-- ----------------------------
INSERT INTO `tipousuarios` VALUES ('1', 'Administrador');
INSERT INTO `tipousuarios` VALUES ('2', 'Motorista');
INSERT INTO `tipousuarios` VALUES ('3', 'Posto');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipousuario_id` int(11) NOT NULL DEFAULT '2',
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dt_nascimento` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '2', 'claudia', '$2y$10$G2Ln/tmUeU23rG3pgEcr6eoHyixmTLK2CJVIqqJdzgGNLr4e1oT0O', '1992-04-02', 'claudiavieiraaquino@hotmail.com', null, '2016-11-30 10:00:21', '1');
INSERT INTO `users` VALUES ('2', '2', 'larissa', '$2y$10$AJptMLF/Yv2sUEbFuQm8G..OT.CbsJ1vhuiNdXgEF8brUNwQDkj5.', '2016-10-13', 'larissa@teste.com', null, '2016-11-08 21:51:05', '1');
INSERT INTO `users` VALUES ('3', '2', 'liberio', '$2y$10$AJptMLF/Yv2sUEbFuQm8G..OT.CbsJ1vhuiNdXgEF8brUNwQDkj5.', '2016-10-13', 'liberio@teste.com', null, '2016-11-08 21:51:05', '1');
INSERT INTO `users` VALUES ('4', '2', 'ismael', '$2y$10$AJptMLF/Yv2sUEbFuQm8G..OT.CbsJ1vhuiNdXgEF8brUNwQDkj5.', '2016-10-19', 'ismael@teste.com', null, '2016-11-08 21:51:05', '1');
INSERT INTO `users` VALUES ('5', '2', 'teste', '$2y$10$AJptMLF/Yv2sUEbFuQm8G..OT.CbsJ1vhuiNdXgEF8brUNwQDkj5.', '2016-10-19', 'teste@teste.com', null, '2016-11-08 21:51:05', '1');
INSERT INTO `users` VALUES ('6', '1', 'admin', '$2y$10$AJptMLF/Yv2sUEbFuQm8G..OT.CbsJ1vhuiNdXgEF8brUNwQDkj5.', '2016-10-26', 'claudiavieira.aquino@hotmail.com', null, '2016-11-08 21:51:05', '1');
INSERT INTO `users` VALUES ('7', '3', 'posto1', '$2y$10$AJptMLF/Yv2sUEbFuQm8G..OT.CbsJ1vhuiNdXgEF8brUNwQDkj5.', '2016-11-08', 'qualquer@email.com', null, '2016-11-08 21:51:05', '1');
INSERT INTO `users` VALUES ('8', '2', 'fulano', '$2y$10$e.G9yapKuiOnJYShe29wQuuhnawDfB4kk7wAYVnW8eR4KawF9jqEG', '2016-11-30', 'caaquino@hotmail.com', null, '2016-11-30 09:24:03', '1');

-- ----------------------------
-- Table structure for veiculofuels
-- ----------------------------
DROP TABLE IF EXISTS `veiculofuels`;
CREATE TABLE `veiculofuels` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `veiculo_id` int(10) NOT NULL,
  `fuel_id` int(10) NOT NULL,
  `dt_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of veiculofuels
-- ----------------------------
INSERT INTO `veiculofuels` VALUES ('1', '1', '1', '2016-10-13 01:08:02', '1');
INSERT INTO `veiculofuels` VALUES ('7', '1', '2', '2016-10-19 01:44:29', '1');
INSERT INTO `veiculofuels` VALUES ('3', '2', '1', '2016-10-13 01:08:55', '1');
INSERT INTO `veiculofuels` VALUES ('11', '8', '2', '2016-11-16 09:11:26', '1');
INSERT INTO `veiculofuels` VALUES ('8', '2', '2', '2016-10-19 01:58:18', '1');
INSERT INTO `veiculofuels` VALUES ('10', '8', '3', '2016-10-26 00:08:10', '1');

-- ----------------------------
-- Table structure for veiculos
-- ----------------------------
DROP TABLE IF EXISTS `veiculos`;
CREATE TABLE `veiculos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `modelo_id` int(10) NOT NULL,
  `ano` int(4) NOT NULL,
  `placa` varchar(10) NOT NULL,
  `dt_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dt_modificado` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of veiculos
-- ----------------------------
INSERT INTO `veiculos` VALUES ('1', '1', '1', '2013', 'hgf-1354', '2016-10-13 01:03:21', '2016-10-17 01:12:18', '1');
INSERT INTO `veiculos` VALUES ('8', '1', '1', '2012', 'ugg9654', '2016-10-26 00:07:19', '2016-10-26 00:07:19', '1');
INSERT INTO `veiculos` VALUES ('6', '4', '1', '2016', 'tes-1234', '2016-10-19 10:18:56', '2016-10-19 10:18:56', '1');
INSERT INTO `veiculos` VALUES ('9', '1', '1', '2015', 'gyy5246', '2016-11-16 09:49:29', '2016-11-16 09:49:29', '1');
