-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 35.201.170.2
-- 產生時間： 2019 年 08 月 30 日 14:29
-- 伺服器版本： 5.7.14-google-log
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
-- 資料庫： `handmade_admin`
--

-- --------------------------------------------------------

--
-- 資料表結構 `taiwan_area_number`
--

CREATE TABLE `taiwan_area_number` (
  `area_sid` int(11) NOT NULL COMMENT '流水號',
  `taiwan_city` varchar(255) NOT NULL COMMENT '台灣縣市',
  `area_number` int(11) NOT NULL COMMENT '區號'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `taiwan_area_number`
--

INSERT INTO `taiwan_area_number` (`area_sid`, `taiwan_city`, `area_number`) VALUES
(1, '基隆市', 1),
(0, '沒有選取', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
