-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.3.16-MariaDB
-- PHP 版本： 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `project_hand`
--

-- --------------------------------------------------------

--
-- 資料表結構 `space_list`
--

CREATE TABLE `space_list` (
  `sid` int(11) NOT NULL,
  `space_name` varchar(255) NOT NULL COMMENT '名稱',
  `logo_path` text NOT NULL COMMENT 'LOGO路徑',
  `space_description` text NOT NULL COMMENT '內容描述',
  `image_path` text NOT NULL COMMENT '圖片路徑',
  `space_time` date NOT NULL COMMENT '提供的時間',
  `max_people` varchar(255) NOT NULL COMMENT '容納人數',
  `tel` int(11) NOT NULL COMMENT '電話',
  `service` text NOT NULL COMMENT '提供的設備',
  `area` varchar(255) NOT NULL COMMENT '地區',
  `address` varchar(255) NOT NULL COMMENT '地址',
  `user_id` int(11) DEFAULT NULL COMMENT '會員ID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `space_list`
--

INSERT INTO `space_list` (`sid`, `space_name`, `logo_path`, `space_description`, `image_path`, `space_time`, `max_people`, `tel`, `service`, `area`, `address`, `user_id`) VALUES
(11, '幸福花園55588', 'img', '幸福的花園', 'img', '2019-08-06', '', 976562513, '棒', '台北', '台北市大安區通化街', 0),
(13, 'sdfㄎ', 'fdf', 'dfdf', 'dfdf', '2019-02-19', '30', 953241983, 'sdsd', 'sdsd', 'sdsd', NULL),
(14, 'sd', '螢幕擷取畫面 (2).png', 'dfdfs', '螢幕擷取畫面 (1).png', '2019-02-19', '30', 953241983, 'sdsd', 'sdsd', 'sdsd', NULL),
(15, 'a', '螢幕擷取畫面 (2).png', 'aaa', '螢幕擷取畫面 (1).png', '0000-00-00', '50', 953241983, '有', '台北市', '台北市大安區通化街', NULL),
(16, 'a', '螢幕擷取畫面 (2).png', 'gg', '螢幕擷取畫面 (1).png', '0000-00-00', '50', 953241983, '有', '台北市', 'ss', NULL),
(17, 'sdf', '螢幕擷取畫面 (1).png', 'aaa', '螢幕擷取畫面 (2).png', '2019-02-19', '50', 953241983, '有', '台北市', 'ASDF', NULL),
(18, 'q', '螢幕擷取畫面 (2).png', 'q', '螢幕擷取畫面 (2).png', '2019-02-19', '5', 953241983, '有', '台北市', 'asdfaf', NULL),
(19, 'sdfㄎ', 'dfsf', 'fsf', 'dfsf', '2019-02-19', '50', 953241983, '有', '台北市', 'asdfaf', NULL),
(20, '2', '3', '3', '3', '2019-02-19', '3', 953241983, '有', '3', '3', NULL),
(21, 'sdf', 'fdf', 's', 's', '0000-00-00', '50', 953241983, 'sdsd', '台北市', 'ASDF', NULL),
(22, 'sdf', 'fdf', 'aaa', 'dfdf', '2019-02-19', '50', 953241983, '有', '台北市', '台北市大安區通化街', NULL),
(23, 'sdf', 'fdf', 'aaa', 'dfdf', '2019-02-19', '50', 953241983, '有', '台北市', '台北市大安區通化街', NULL),
(24, '1', '', '', '', '0000-00-00', '', 0, '', '', '', NULL),
(25, 'a555', 'fdf', '55', '5555', '2019-02-19', '50', 953241983, '3', '有', '台北市大安區通化街', 0),
(26, 'a555', 'fdf', '55', '5555', '2019-02-19', '50', 953241983, '3', '有', '台北市大安區通化街', 0),
(27, 'a555', 'fdf', '55', '5555', '2019-02-19', '50', 953241983, '3', '有', '台北市大安區通化街', 0),
(28, 'a555', 'fdf', '55', '5555', '2019-02-19', '50', 953241983, '3', '有', '台北市大安區通化街', 0),
(29, 'a555', 'fdf', '55', '5555', '2019-02-19', '50', 953241983, '3', '有', '台北市大安區通化街', 0),
(30, 'a555', 'fdf', '55', '5555', '2019-02-19', '50', 953241983, '3', '有', '台北市大安區通化街', 0),
(31, 'a555', 'fdf', '55', '5555', '2019-02-19', '50', 953241983, '3', '有', '台北市大安區通化街', NULL),
(32, 'sdf', 'fdf', 's', 'dfdf', '2019-02-19', '50', 0, 's', 's', 's', NULL),
(33, 'sdf44444', 'fdf', 's', 'dfdf', '2019-02-19', '50', 0, 's', 's', 's', NULL),
(34, 'sdf44444', 'fdf', 's', 'dfdf', '2019-02-19', '50', 0, 's', 's', 's', NULL),
(35, 'sdf44444', 'fdf', 's', 'dfdf', '2019-02-19', '50', 0, 's', 's', 's', NULL),
(36, '1', '151', '1', '1', '2019-02-19', '50', 953241983, '台北市', '有', '台北市大安區通化街', NULL),
(37, '555', '151', '1', '1', '2019-02-19', '50', 953241983, '台北市', '有', '台北市大安區通化街', NULL),
(38, '555', '151', '1', '1', '2019-02-19', '50', 953241983, '台北市', '有', '台北市大安區通化街555', NULL),
(39, 'dgdfgd', 'dfsfd', 'dfdfs', 'dfdf', '2019-02-19', '50', 953241983, '台北市', '有', '台北市大安區通化街', NULL),
(40, 'sdf', 'fdf', 'aaa', 'dfdf', '2019-02-19', '50', 953241983, '台北市', 'sdsd', '台北市大安區通化街', NULL),
(41, 'sdf', 'fdf', 'aaa', 'dfdf', '2019-02-19', '50', 953241983, '台北市', 'sdsd', '台北市大安區通化街', NULL),
(42, 'sdf', 'fdf', 'aaa', 'dfdf', '2019-02-19', '50', 953241983, '台北市', 'sdsd', '台北市大安區通化街', NULL),
(43, 'sdf', 'fdf', 'aaa', 'dfdf', '2019-02-19', '50', 953241983, '台北市', 'sdsd', '台北市大安區通化街', NULL),
(44, 'sdf', 'fdf', 'aaa', 'dfdf', '2019-02-19', '50', 953241983, '台北市', 'sdsd', '台北市大安區通化街', NULL),
(45, 'sdf', 'fdf', 'aaa', 'dfdf', '2019-02-19', '50', 953241983, '台北市', 'sdsd', '台北市大安區通化街', NULL),
(46, 'sdf', 'fdf', 'aaa', 'dfdf', '2019-02-19', '50', 953241983, '台北市', 'sdsd', '台北市大安區通化街', NULL),
(47, 'a555', 'fdf', 'aaa', 'dfdf', '2019-02-19', '50', 953241983, '台北市', '有', '台北市大安區通化街', NULL),
(48, 'a555', 'fdf', 'aaa', 'dfdf', '2019-02-19', '50', 953241983, '台北市', '有', '台北市大安區通化街', NULL),
(49, 'a555000', 'fdf', 'aaa', 'dfdf', '2019-02-19', '50', 953241983, '台北市', '有', '台北市大安區通化街', NULL),
(50, 'sdf', 'fdf', 'aaa', 'dfdf', '2019-02-19', '50', 953241983, '台北市', '有', '台北市大安區通化街', NULL),
(51, 'sdf', 'fdf', 's', 'dfdf', '2019-02-19', '50', 953241983, '台北市', '有', '台北市大安區通化街', NULL),
(52, 'sdf', 'fdf', 's', 'dfdf', '2019-02-19', '50', 953241983, '台北市', '有', '台北市大安區通化街', NULL),
(53, 'sdf', 'fdf', 's', 'dfdf', '2019-02-19', '50', 953241983, '台北市', '有', '台北市大安區通化街', NULL),
(54, 'sdf', 'fdf', 's', 'dfdf', '2019-02-19', '50', 953241983, '台北市', '有', '台北市大安區通化街', NULL),
(55, 'sdf', 'fdf', 's', 'dfdf', '2019-02-19', '50', 953241983, '台北市', '有', '台北市大安區通化街', NULL);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `space_list`
--
ALTER TABLE `space_list`
  ADD PRIMARY KEY (`sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `space_list`
--
ALTER TABLE `space_list`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
