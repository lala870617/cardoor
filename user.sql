-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3306
-- 產生時間： 2019 年 07 月 16 日 08:44
-- 伺服器版本： 5.7.26
-- PHP 版本： 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `carrent`
--

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(36) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(255) DEFAULT NULL,
  `u_email` varchar(255) DEFAULT NULL,
  `u_account` varchar(255) DEFAULT NULL,
  `u_password` varchar(255) DEFAULT NULL,
  `u_phone` varchar(255) DEFAULT NULL,
  `uID` varchar(255) DEFAULT NULL,
  `u_sex` varchar(255) DEFAULT NULL,
  `u_address` varchar(255) DEFAULT NULL,
  `u_birthday` char(10) DEFAULT NULL,
  `e_name` varchar(255) DEFAULT NULL,
  `e_relationship` varchar(255) DEFAULT NULL,
  `e_phone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_email`, `u_account`, `u_password`, `u_phone`, `uID`, `u_sex`, `u_address`, `u_birthday`, `e_name`, `e_relationship`, `e_phone`) VALUES
(45, '林耕霈', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '0987878787', 'R878787878', '無性別', '新管4104', '1960-02-22', '林老母', '母子', '0912345678'),
(44, 'Test', 'test@yahoo.com.tw', 'test', '098f6bcd4621d373cade4e832627b4f6', '0911111', 'B054020042', '男', 'dd', '2018-11-30', 'wd', 'fe', 'fef'),
(43, 'fjfkwl', 'jfekl@gmail.com', 'FEJLK', 'd41d8cd98f00b204e9800998ecf8427e', 'fjelfk', 'fjefkfljl', '女', 'fefjk', '2017-11-30', 'efkle', 'fj', 'jvkl'),
(42, 'fjfkwl', 'jfekl@gmail.com', 'FEJLK', 'c264760d3a993bd7abd82cd159f27e33', 'fjelfk', 'fjefkfljl', '女', 'fefjk', '2017-11-30', 'efkle', 'fj', 'jvkl'),
(41, '2222', 'fejfkle@gmail.com', 'fefkl', '4eb89c3d872c666edb6b850d14f5482f', 'jflkfjl', 'jklfj', '男', 'feflml', '2017-11-30', 'jgkrlgj', 'jefk', 'fnjefk'),
(40, 'ass', 'df@gmail.com', 'fkelfj', 'd41d8cd98f00b204e9800998ecf8427e', 'jklvjelkj', 'jgrklj', '男', 'fjekl', '2017-11-30', 'jgkl', 'feklf', 'vkld');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
