

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `dhtv_text_reply`
-- ----------------------------
DROP TABLE IF EXISTS `dhtv_text_reply`;
CREATE TABLE `ims_basic_reply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `keyword_id` int(10) unsigned NOT NULL,
  `content` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

SET FOREIGN_KEY_CHECKS = 1;
