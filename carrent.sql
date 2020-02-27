-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3306
-- 產生時間：
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
-- 資料表結構 `car_menu`
--

DROP TABLE IF EXISTS `car_menu`;
CREATE TABLE IF NOT EXISTS `car_menu` (
  `c_id` varchar(255) NOT NULL,
  `c_name` varchar(255) DEFAULT NULL,
  `c_passenger` varchar(255) DEFAULT NULL,
  `c_auto` varchar(255) DEFAULT NULL,
  `c_level` varchar(255) DEFAULT NULL,
  `c_vendor` varchar(255) DEFAULT NULL,
  `c_pic` varchar(255) DEFAULT NULL,
  `c_amount` int(255) NOT NULL,
  `c_displacement`  varchar(255) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `car_menu`
--
INSERT INTO `car_storage`(`c_license`, `c_name`,`rent`) VALUES
('GAS-1654','Luxgen U6 GT','否'),
('FYW-4564','Luxgen U6 GT','否'),
('DAX-8681','Luxgen U6 GT','否'),
('KSQ-7672','Luxgen U6 GT','否'),
('FSD-4874','Luxgen U6 GT','否'),
('RDS-1655','Luxgen U6 GT','否'),
('FCY-2351','Luxgen U6 GT','否'),
('BGN-1587','Luxgen U6 GT','否'),
('DWC-6897','Luxgen U6 GT','否'),
('VCA-6514','Luxgen U6 GT','否'),
('CXT-8955','Ferrari GTC4','否'),
('TGD-4563','Ferrari GTC4','否'),
('LJP-1521','Ferrari GTC4','否'),
('CSV-7187','Ferrari GTC4','否'),
('DHK-2268','Ferrari GTC4','否'),
('WED-1378','Bentley Continental GT','否'),
('','Bentley Continental GT','否'),
('','Bentley Continental GT','否'),
('','Bentley Continental GT','否'),
('','Bentley Continental GT','否'),
('','Porsche 718 Boxster','否'),
('','Porsche 718 Boxster','否'),
('','Porsche 718 Boxster','否'),
('','Porsche 718 Boxster','否'),
('','Porsche 718 Boxster','否'),
('','Volvo XC40','否'),
('','Volvo XC40','否'),
('','Volvo XC40','否'),
('','Volvo XC40','否'),
('','Volvo XC40','否'),
('','Volvo XC40','否'),
('','Volvo XC40','否'),
('','Volvo XC40','否'),
('','Volvo XC40','否'),
('','Volvo XC40','否')


INSERT INTO `car_menu` (`c_id`, `c_name`, `c_passenger`, `c_auto`, `c_level`, `c_vendor`, `c_pic`, `c_amount`,`c_displacement`) VALUES
('1', 'Audi Blue Wagon', '4', '手排', '貴族級', 'Audi', 'assets/img/car/car-1.jpg', 10,'3,000c.c'),
('2', 'Mercedes Benz Silver', '5', '手排', '尊榮級', 'Benz', 'assets/img/car/car-2.jpg', 10,'2,000c.c'),
('3', 'Toyota Vios', '4', '手排', '平民級', 'Toyota', 'assets/img/car/car-3.jpg', 10, '1,500c.c'),
('4', 'Nissan Sentra', '4', '自排', '平民級', 'Nissan', 'assets/img/car/car-4.jpg', 10, '1,798c.c'),
('5', 'Lexus NX', '4', '手排', '尊榮級', 'Lexus', 'assets/img/car/car-7.jpg', 10, '2,500c.c'),
('6', 'Tesla Model X', '4', '手排', '貴族級', 'Tesla', 'assets/img/car/car-8.jpg', 10,'3,994c.c'),
('7', 'Mazda CX-30', '4', '自排', '平民級', 'Mazda', 'assets/img/car/car-9.jpg', 10 , '1,750c.c'),
('8', 'BMW X5', '4', '手排', '尊榮級', 'BMW', 'assets/img/car/car-5.jpg', 10 , '2,995c.c'),
('9', 'BMW 6 Series', '4', '手排', '尊榮級', 'BMW', 'assets/img/car/car-6.jpg', 10 ,'2,980c.c'),
('10', 'Honda CR-V', '5', '手排', '平民級', 'Honda', 'assets/img/car/car-10.jpg', 10 , '1,500c.c'),
('11', 'Luxgen U6 GT', '4', '自排', '平民級', 'Luxgen', 'assets/img/car/car-11.jpg', 10,'1,798c.c'),
('12', 'Ferrari GTC4', '3', '自排', '貴族級', 'Ferrari', 'assets/img/car/car-12.jpg', 5,'3,855c.c'),
('13', 'Bentley Continental GT', '4', '自手排', '貴族級', 'Bentley', 'assets/img/car/car-13.jpg', 5,'5,950c.c'),
('14', 'Porsche 718 Boxster', '2', '自手排', '貴族級', 'Boxster', 'assets/img/car/car-14.jpg', 5,'1,988c.c'),
('15', 'Volvo XC40', '4', '自排', '尊榮級', 'Volvo', 'assets/img/car/car-15.jpg', 10,'2,000c.c');

-- --------------------------------------------------------

--
-- 資料表結構 `changecar`
--

DROP TABLE IF EXISTS `changecar`;
CREATE TABLE IF NOT EXISTS `changecar` (
  `u_id` int(36) NOT NULL,
  `c_id_before` char(36) DEFAULT NULL,
  `c_id_after` char(36) DEFAULT NULL,
  `c_time` datetime NOT NULL,
  PRIMARY KEY (`c_time`),
  KEY `c_id_after` (`c_id_after`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `changecar`
--

INSERT INTO `changecar` (`u_id`, `c_id_before`, `c_id_after`, `c_time`) VALUES
(45, '9', '2', '2019-07-24 04:44:12'),
(48, '6', '8', '2019-07-24 04:43:32'),
(45, '11', '9', '2019-07-24 04:37:29'),
(44, '6', '9', '2019-07-23 02:43:49'),
(44, '9', '6', '2019-07-23 02:45:00'),
(45, '9', '11', '2019-07-24 02:06:18'),
(45, '4', '9', '2019-07-24 02:01:42'),
(44, '6', '2', '2019-07-24 11:44:04'),
(45, '3', '4', '2019-07-24 02:00:56'),
(48, '8', '2', '2019-07-25 11:10:45'),
(48, '2', '9', '2019-07-25 11:14:28'),
(48, '9', '5', '2019-07-25 11:32:19');

-- --------------------------------------------------------

--
-- 資料表結構 `record`
--

DROP TABLE IF EXISTS `record`;
CREATE TABLE IF NOT EXISTS `record` (
  `u_id` int(36) NOT NULL,
  `u_authority` varchar(255) NOT NULL DEFAULT '0',
  `t_id` int(255) NOT NULL,
  `t_startdate` date DEFAULT NULL,
  `t_endate` date NOT NULL,
  `t_remainder` int(36) NOT NULL,
  `c_name_after` char(36) DEFAULT NULL,
  `c_id` varchar(255) NOT NULL,
  `t_pay` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`t_endate`),
  KEY `u_id` (`u_id`,`t_id`),
  KEY `c_id` (`c_id`),
  KEY `t_id` (`t_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE IF NOT EXISTS `transaction` (
  `u_id` int(36) NOT NULL,
  `u_authority` varchar(255) DEFAULT '0',
  `t_id` int(255) NOT NULL AUTO_INCREMENT,
  `t_startdate` date DEFAULT NULL,
  `t_enddate` date DEFAULT NULL,
  `t_remainder` int(36) NOT NULL,
  `c_name_after` char(36) DEFAULT NULL,
  `c_id` varchar(255) NOT NULL,
  `t_pay` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`t_id`),
  KEY `u_id` (`u_id`),
  KEY `c_id` (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `transaction`
--

INSERT INTO `transaction` (`u_id`, `u_authority`, `t_id`, `t_startdate`, `t_enddate`, `t_remainder`, `c_name_after`, `c_id`, `t_pay`) VALUES
(44, '貴族方案', 9, '2019-07-23', '2021-07-23', 5, 'Mercedes Benz Silver', '2', '9.98'),
(45, '平民方案', 12, '2019-07-24', '2020-07-24', 5, 'Mercedes Benz Silver', '2', '3.99'),
(48, '平民方案', 14, '2019-07-24', '2020-07-24', 5, 'Lexus NX', '5', '3.99');

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
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_email`, `u_account`, `u_password`, `u_phone`, `uID`, `u_sex`, `u_address`, `u_birthday`, `e_name`, `e_relationship`, `e_phone`) VALUES
(45, '林耕霈', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '0987878787', 'R878787878', '無性別', '新管4104', '1960-02-22', '林老母', '母子', '0912345678'),
(44, 'Test', 'test@yahoo.com.tw', 'test', '098f6bcd4621d373cade4e832627b4f6', '0911111', 'B054020042', '男', 'dd', '2018-11-30', 'wd', 'fe', 'fef'),
(48, '罩扇鐘', 'architecturechao@gmail.com', 'chao', '26729bae1fc5b60a2973324ef387fe5f', '9999', '213131', '請選擇', 'vkerlkerl', '', '', '父子', '0912345678');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
