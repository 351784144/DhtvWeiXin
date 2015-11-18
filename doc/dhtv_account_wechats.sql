

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `dhtv_account_wechats`
-- ----------------------------
DROP TABLE IF EXISTS `dhtv_account_wechats`;
CREATE TABLE `dhtv_account_wechats` (
  `id` int(10) unsigned NOT NULL,
  `token` varchar(32) NOT NULL,
  `encodingaeskey` varchar(255) NOT NULL,
  `level` tinyint(4) unsigned NOT NULL,
  `name` varchar(30) NOT NULL,
  `openid` varchar(60) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `appID` varchar(50) NOT NULL,
  `appsecret` varchar(50) NOT NULL,
  `subscribeurl` varchar(120) NOT NULL,
  `access_token` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


