-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2022-11-19 13:17:34
-- 服务器版本： 5.7.26
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `wife`
--

-- --------------------------------------------------------

--
-- 表的结构 `moredata`
--

CREATE TABLE `moredata` (
  `id` int(11) NOT NULL,
  `姓名` int(11) NOT NULL,
  `详情` int(11) NOT NULL,
  `照片` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `wifedata`
--

CREATE TABLE `wifedata` (
  `id` int(11) NOT NULL,
  `姓名` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `性别` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `出自` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `wifedata`
--

INSERT INTO `wifedata` (`id`, `姓名`, `性别`, `出自`) VALUES
(114514, '李田所', '男', '《野兽》'),
(1, '樱岛麻衣', '女', '《青春猪头少年系列》'),
(520, '杨易宸', '男', '地球online'),
(2, '蕾米莉亚', '女', '《东方project》'),
(3, '蕾姆', '女', '《re：0》'),
(4, '拉姆', '女', '《re：0》'),
(7, '娜美', '女', '《海贼王》'),
(6, '妮可·罗宾', '女', '《海贼王》'),
(5, '影山茂夫', '男', '《路人超能百分百》'),
(8, '涅茧利', '男', '《死神》'),
(10, '山田凉', '女', '《孤独摇滚》'),
(1919810, '田浩二', '未知', '《野兽》');

--
-- 转储表的索引
--

--
-- 表的索引 `moredata`
--
ALTER TABLE `moredata`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `wifedata`
--
ALTER TABLE `wifedata`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
