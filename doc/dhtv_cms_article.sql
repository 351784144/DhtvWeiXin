

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `ims_site_article`
-- ----------------------------
DROP TABLE IF EXISTS `dhtv_cms_article`;
CREATE TABLE `dhtv_cms_article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account_id` int(10) unsigned NOT NULL,  --公众号id
  `category_id` int(10) unsigned NOT NULL,  --分类id
  `title` varchar(100) NOT NULL, --标题
  `description` varchar(100) NOT NULL, --简介
  `content` mediumtext NOT NULL, --内容
  `thumb` varchar(255) NOT NULL, --图片
  `source` varchar(255) NOT NULL, --来源
  `author` varchar(50) NOT NULL, --作者
  `displayorder` int(10) unsigned NOT NULL, --优先级
  `linkurl` varchar(500) NOT NULL, --链接
  `createtime` int(10) unsigned NOT NULL, --创建时间
  `click` int(10) unsigned NOT NULL, --点击量
  PRIMARY KEY (`id`),
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;



SET FOREIGN_KEY_CHECKS = 1;
