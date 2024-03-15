-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2024-03-02 14:05:40
-- 服务器版本： 8.0.12
-- PHP 版本： 5.6.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `studentgrade`
--

-- --------------------------------------------------------

--
-- 表的结构 `course`
--

CREATE TABLE `course` (
  `cid` int(11) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `ccredit` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `course`
--

INSERT INTO `course` (`cid`, `cname`, `ccredit`) VALUES
(2024001, 'php', '10');

-- --------------------------------------------------------

--
-- 表的结构 `grade`
--

CREATE TABLE `grade` (
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `sgrade` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `grade`
--

INSERT INTO `grade` (`sid`, `cid`, `sgrade`) VALUES
(202401, 20240001, 80);

-- --------------------------------------------------------

--
-- 表的结构 `sinfo`
--

CREATE TABLE `sinfo` (
  `sid` int(11) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `sage` int(11) NOT NULL,
  `ssex` char(5) NOT NULL,
  `sdept` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `sinfo`
--

INSERT INTO `sinfo` (`sid`, `sname`, `sage`, `ssex`, `sdept`) VALUES
(202401, 'student1', 20, 'm', 'jsj');

-- --------------------------------------------------------

--
-- 替换视图以便查看 `viewgrade`
-- （参见下面的实际视图）
--
CREATE TABLE `viewgrade` (
`cid` int(11)
,`cname` varchar(20)
,`sgrade` int(11)
,`sid` int(11)
,`sname` varchar(20)
);

-- --------------------------------------------------------

--
-- 视图结构 `viewgrade`
--
DROP TABLE IF EXISTS `viewgrade`;

CREATE ALGORITHM=UNDEFINED DEFINER=`cslgphp`@`%` SQL SECURITY DEFINER VIEW `viewgrade`  AS  select `sinfo`.`sid` AS `sid`,`sinfo`.`sname` AS `sname`,`course`.`cid` AS `cid`,`course`.`cname` AS `cname`,`grade`.`sgrade` AS `sgrade` from ((`sinfo` join `course`) join `grade`) ;

--
-- 转储表的索引
--

--
-- 表的索引 `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cid`);

--
-- 表的索引 `grade`
--
ALTER TABLE `grade`
  ADD KEY `grade_sinfo_sid_fk` (`sid`),
  ADD KEY `grade_course_cid_fk` (`cid`);

--
-- 表的索引 `sinfo`
--
ALTER TABLE `sinfo`
  ADD PRIMARY KEY (`sid`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `course`
--
ALTER TABLE `course`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2024002;

--
-- 使用表AUTO_INCREMENT `sinfo`
--
ALTER TABLE `sinfo`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202402;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
