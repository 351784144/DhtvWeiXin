

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `dhtv_rule_keyword`
-- ----------------------------
DROP TABLE IF EXISTS `dhtv_rule_keyword`;
CREATE TABLE `dhtv_rule_keyword` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wechats_id` int(10) unsigned NOT NULL, --所属微信公众号id
  `module` varchar(50) NOT NULL, --模块编号
  `name` varchar(50) NOT NULL, --回复规则名
  `keyword` varchar(255) NOT NULL, --匹配的关键字
  `type` tinyint(1) unsigned NOT NULL, --回复类型id，文字、图文
  `displayorder` tinyint(3) unsigned NOT NULL, -- 优先级
  `status` tinyint(1) unsigned NOT NULL, --状态
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

SET FOREIGN_KEY_CHECKS = 1;
