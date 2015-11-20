
SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `dhtv_cms_category`
-- ----------------------------
DROP TABLE IF EXISTS `dhtv_cms_category`;
CREATE TABLE `dhtv_cms_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account_id` int(10) unsigned NOT NULL,  --所属微信公众账号
  `name` varchar(50) NOT NULL, --分类名字
  `parentid` int(10) unsigned NOT NULL, --父类id
  `displayorder` tinyint(3) unsigned NOT NULL,-- 优先级
  `enabled` tinyint(1) unsigned NOT NULL, -- 是否可用
  `description` varchar(100) NOT NULL, --描述
  `linkurl` varchar(500) NOT NULL, --外部链接
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;


