-- phpMyAdmin SQL Dump
-- version 4.4.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-11-14 16:04:54
-- 服务器版本： 5.6.25-log
-- PHP Version: 5.5.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shenshiji`
--

-- --------------------------------------------------------

--
-- 表的结构 `dhtv_user_phone`
--

CREATE TABLE IF NOT EXISTS `dhtv_user_phone` (
  `id` mediumint(8) NOT NULL,
  `un_id` mediumint(8) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `dhtv_weixin_fans`
--

CREATE TABLE IF NOT EXISTS `dhtv_weixin_fans` (
  `fans_id` mediumint(8) NOT NULL,
  `open_id` varchar(255) NOT NULL,
  `unid` bigint(20) unsigned DEFAULT NULL,
  `subscribe` int(2) DEFAULT NULL,
  `subscribe_time` int(11) NOT NULL,
  `remark` varchar(100) NOT NULL,
  `groupid` int(4) NOT NULL,
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `dhtv_weixin_msg_base`
--

CREATE TABLE IF NOT EXISTS `dhtv_weixin_msg_base` (
  `id` bigint(20) unsigned NOT NULL,
  `ToUserName` varchar(60) NOT NULL,
  `FromUserName` varchar(60) NOT NULL,
  `CreateTime` int(11) unsigned NOT NULL,
  `MsgType` varchar(20) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `dhtv_weixin_msg_event_menu`
--

CREATE TABLE IF NOT EXISTS `dhtv_weixin_msg_event_menu` (
  `id` bigint(20) unsigned NOT NULL,
  `EventKey` varchar(120) NOT NULL,
  `Event` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `dhtv_weixin_msg_image`
--

CREATE TABLE IF NOT EXISTS `dhtv_weixin_msg_image` (
  `id` bigint(20) unsigned NOT NULL,
  `PicUrl` varchar(255) NOT NULL,
  `MediaId` varchar(100) NOT NULL,
  `MsgId` bigint(20) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `dhtv_weixin_msg_text`
--

CREATE TABLE IF NOT EXISTS `dhtv_weixin_msg_text` (
  `id` bigint(20) unsigned NOT NULL,
  `Content` varchar(200) NOT NULL,
  `MsgId` bigint(20) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `dhtv_weixin_union`
--

CREATE TABLE IF NOT EXISTS `dhtv_weixin_union` (
  `un_id` bigint(20) unsigned NOT NULL,
  `unionid` varchar(60) NOT NULL,
  `openid` varchar(255) DEFAULT NULL,
  `nickname` varchar(20) DEFAULT NULL,
  `sex` int(4) DEFAULT NULL,
  `language` varchar(10) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `province` varchar(20) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `headimgurl` varchar(200) DEFAULT NULL,
  `user_id` mediumint(8) unsigned DEFAULT NULL,
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `realname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dhtv_user_phone`
--
ALTER TABLE `dhtv_user_phone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dhtv_weixin_fans`
--
ALTER TABLE `dhtv_weixin_fans`
  ADD PRIMARY KEY (`fans_id`);

--
-- Indexes for table `dhtv_weixin_msg_base`
--
ALTER TABLE `dhtv_weixin_msg_base`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dhtv_weixin_union`
--
ALTER TABLE `dhtv_weixin_union`
  ADD PRIMARY KEY (`un_id`),
  ADD UNIQUE KEY `unionid` (`unionid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dhtv_user_phone`
--
ALTER TABLE `dhtv_user_phone`
  MODIFY `id` mediumint(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dhtv_weixin_fans`
--
ALTER TABLE `dhtv_weixin_fans`
  MODIFY `fans_id` mediumint(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dhtv_weixin_msg_base`
--
ALTER TABLE `dhtv_weixin_msg_base`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dhtv_weixin_union`
--
ALTER TABLE `dhtv_weixin_union`
  MODIFY `un_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
