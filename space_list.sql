-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2019 年 08 月 29 日 13:30
-- 伺服器版本： 5.5.65-MariaDB
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
-- 資料庫： `my_db`
--

-- --------------------------------------------------------

--
-- 資料表結構 `space_list`
--

CREATE TABLE `space_list` (
  `space_sid` int(11) NOT NULL,
  `space_name` varchar(255) NOT NULL COMMENT '名稱',
  `space_logo_path` text NOT NULL COMMENT 'LOGO路徑',
  `space_description` text NOT NULL COMMENT '內容描述',
  `space_image_path` text NOT NULL COMMENT '圖片路徑',
  `space_time` date NOT NULL COMMENT '提供的時間',
  `space_max_people` varchar(255) NOT NULL COMMENT '容納人數',
  `space_tel` int(11) NOT NULL COMMENT '電話',
  `space_service` text NOT NULL COMMENT '環境',
  `space_area` varchar(255) NOT NULL COMMENT '地區',
  `space_address` varchar(255) NOT NULL COMMENT '地址',
  `space_status` tinyint(1) NOT NULL COMMENT '上架狀態',
  `space_price` varchar(255) NOT NULL COMMENT '價格',
  `space_title_description` text NOT NULL COMMENT '內容標題',
  `space_creat_time` datetime NOT NULL COMMENT '新增時間',
  `space_ordered` tinyint(1) DEFAULT NULL COMMENT '售完',
  `space_sale` tinyint(1) DEFAULT NULL COMMENT '折扣',
  `user_id` int(11) DEFAULT NULL COMMENT '會員ID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `space_list`
--
ALTER TABLE `space_list`
  ADD PRIMARY KEY (`space_sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `space_list`
--
ALTER TABLE `space_list`
  MODIFY `space_sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1297;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
