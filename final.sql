-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 建立日期: 2016 年 01 月 23 日 02:20
-- 伺服器版本: 5.5.44-0ubuntu0.14.04.1
-- PHP 版本: 5.5.9-1ubuntu4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `final`
--

-- --------------------------------------------------------

--
-- 資料表結構 `board`
--

CREATE TABLE IF NOT EXISTS `board` (
  `no` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `contenttime` date NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `reply` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `replytime` date NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- 資料表的匯出資料 `board`
--

INSERT INTO `board` (`no`, `contenttime`, `name`, `content`, `reply`, `replytime`) VALUES
(1, '2016-01-11', '雨', '那個...可可口味...真的能吃嗎OAO??', '放心~完勝林鳳營(๑•̀ㅂ•́)و✧', '2016-01-11'),
(2, '2016-01-11', '曾也馨', '咖啡跟可可的差在哪@@?', '每日一英語，牛舌餅送你\r\n咖啡=coffee\r\n可可=coco\r\nヽ(✿ﾟ▽ﾟ)ノ', '2016-01-11'),
(3, '2016-01-13', '秋木蘇', '恩...請問節日有甚麼促銷活動嗎？', '首頁定期更新活動資訊  歡迎熱切關注我們喔!!', '2016-01-13'),
(4, '2016-01-13', '牛奶', '鮮奶牛舌餅跟我的名字有什麼關係嗎OWO!!?', '乖~~回家問你媽媽', '2016-01-13'),
(5, '2016-01-13', '汪汪', '貨到付款會送到天策府嗎?', '電子版牛舌餅  尚在研發當中  請耐心等候', '2016-01-13'),
(6, '2016-01-13', 'MET', '有松野牛舌餅嗎？我要大哥形狀的！！', '產品頁面打開  仔細找一下  你就會發現此商品不存在  哇~我們沒有賣..', '2016-01-13'),
(7, '2016-01-14', '33', '666', '123', '2016-01-14');

-- --------------------------------------------------------

--
-- 資料表結構 `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `no` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `num` int(11) NOT NULL,
  `money` int(10) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `address` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(60) NOT NULL,
  `pay_way` varchar(5) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`no`),
  KEY `name` (`name`),
  KEY `product` (`product`),
  KEY `num` (`num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- 資料表的匯出資料 `book`
--

INSERT INTO `book` (`no`, `product`, `num`, `money`, `name`, `address`, `phone`, `email`, `pay_way`) VALUES
(1, '起司牛舌餅', 8, 960, '漾漾', '黑藤館', '0912345678', 'yinyin03@yahoo.com', '貨到付款'),
(2, '起司牛舌餅', 8, 960, '葉修', '興欣網吧', '0936551221', 'ddd@yahoo.com.tw', 'ATM'),
(3, '可可牛舌餅', 2, 280, '少荻聿', '虞家', '0963215423', 'sa152@yahoo.com.tw', '貨到付款'),
(4, '蜂蜜牛舌餅', 10, 1400, '恩佐', '時雨大樓', '0945678912', 'njo123@yahoo.com.tw', '貨到付款'),
(5, '海苔牛舌餅', 6, 840, '阿薩辛', '荻花宮', '0956321456', 'catty0615@gmail.com', 'ATM'),
(6, '海苔牛舌餅', 8, 1120, '日向夜', '斜陽市', '0978123654', 'yya908@hotmail.com', '貨到付款'),
(7, '芝麻牛舌餅', 9, 1080, '澤田綱吉', '彭歌列總部', '0912345678', 'tsuna@gmail.com', '貨到付款'),
(8, '鮮奶牛舌餅', 9, 1260, '格里西亞', '光明聖殿', '0966214213', 'caa212@gmail.com', '貨到付款'),
(9, '花生牛舌餅', 10, 1200, '扇', '無殿', '0965487923', 'huds1235@yahoo.com.tw', 'ATM'),
(10, '黑糖牛舌餅', 10, 1200, '十四松', '松野家', '0932145656', 'msi375@gmail.com', '貨到付款');

-- --------------------------------------------------------

--
-- 資料表結構 `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `NO` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` char(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` char(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cellphone` int(20) NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `salary` int(20) NOT NULL,
  `depart` char(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`NO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- 資料表的匯出資料 `employee`
--

INSERT INTO `employee` (`NO`, `account`, `password`, `name`, `email`, `cellphone`, `address`, `salary`, `depart`) VALUES
(1, '10244119', '1234', '吳育慈', 'c0c04555123@gmail.com', 975025950, '守世界', 50000, '總經理'),
(2, '10244109', '1234', '曾也馨', 's2t2a2c2y@gmail.com', 983825000, '全家便利商店', 30000, '人事'),
(3, '10244136', '1234', '李欣怡', 'catty0615@gmail.com', 932036682, '外星球', 30000, '銷售'),
(4, '10244145', '1234', '洪立蓉', 'whyperson06@gmail.com', 936545568, '101大樓第99層', 30000, '財務'),
(5, '520999', '999520', '鄭雅云', 'cahshu52@gmail.com', 925364212, '哈士奇的家', 28000, '倉儲'),
(6, '123987', '987123', '巫鈺瑩', 'met222@gmail.com', 955512415, '松野家', 26000, '客服'),
(7, '111111', '222222', '林尚平', 'ppp241@gmail.com', 975441362, '上林苑', 28000, '倉儲'),
(8, '093654', '456390', '陳宜璇', 'aaw122@gmail.com', 988745216, '萬花谷三星望月', 27000, '財務'),
(9, '22323', '32322', '許雅茹', 'dsds12@gmail.com', 965412412, '純陽宮咩咩家', 27000, '銷售'),
(10, '12345', '54321', '王碩頎', 'aqwww23@gmail.com', 985423552, '學生會長室', 26000, '客服');

-- --------------------------------------------------------

--
-- 資料表結構 `expenditure`
--

CREATE TABLE IF NOT EXISTS `expenditure` (
  `class` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  PRIMARY KEY (`detail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `expenditure`
--

INSERT INTO `expenditure` (`class`, `detail`, `price`) VALUES
('進貨', '可可牛舌餅', 2310),
('薪資', '吳育慈', 50000),
('進貨', '咖啡牛舌餅', 1540),
('薪資', '曾也馨', 30000),
('薪資', '李欣怡', 30000),
('薪資', '洪立蓉', 30000),
('進貨', '海苔牛舌餅', 840),
('進貨', '芝麻牛舌餅', 350),
('進貨', '花生牛舌餅', 140),
('進貨', '蜂蜜牛舌餅', 1120),
('進貨', '起士牛舌餅', 3150),
('薪資', '鄭雅云', 28000);

-- --------------------------------------------------------

--
-- 資料表結構 `income`
--

CREATE TABLE IF NOT EXISTS `income` (
  `class` varchar(5) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `detail` varchar(80) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `price` int(11) NOT NULL,
  `no` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- 資料表的匯出資料 `income`
--

INSERT INTO `income` (`class`, `detail`, `price`, `no`) VALUES
('訂單', '起司牛舌餅', 960, 1),
('訂單', '起司牛舌餅', 960, 2),
('訂單', '可可牛舌餅', 280, 3),
('訂單', '蜂蜜牛舌餅', 1400, 4),
('訂單', '海苔牛舌餅', 840, 5),
('訂單', '海苔牛舌餅', 1120, 6),
('訂單', '芝麻牛舌餅', 1080, 7),
('訂單', '鮮奶牛舌餅', 1260, 8),
('訂單', '花生牛舌餅', 1200, 9),
('訂單', '黑糖牛舌餅', 1200, 10),
('訂單', '海苔牛舌餅', 1120, 11);

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cellphone` varchar(20) NOT NULL,
  `birthday` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ID` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`id`, `name`, `password`, `email`, `cellphone`, `birthday`) VALUES
('123', '王先生', '123', 'wanchimen@hotmail.com', '0987596478', '1972-01-13'),
('23', '111', '123', '11111@yahoo.com.tw', '00000', '2016-01-11'),
('candy702', '白映雪', 'candy', 'candy702@yahoo.com.tw', '0935599992', '1995-07-02'),
('cat235', '李欣怡', 'cat0615', 'raincat235@yahoo.com.tw', '0932036682', '1995-06-15'),
('s10244109', '曾也馨', 's10244109', 's2t2a2c2y@yahoo.com.tw', '0983825000', '1995-04-02'),
('s10244145', '洪立蓉', '12345', 'whyperson06@yahoo.com.tw', '0912457896', '1995-02-16'),
('san37', '蘇沐秋', 'yan520', 'san37@gmail.com', '0924154213', '1994-05-29');

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `NO` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `p_picture` varchar(128) CHARACTER SET latin1 NOT NULL,
  `p_name` varchar(20) COLLATE utf8_bin NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_quantity` int(11) NOT NULL,
  `p_intro` text COLLATE utf8_bin NOT NULL,
  `cost` int(10) NOT NULL,
  PRIMARY KEY (`NO`),
  UNIQUE KEY `NO` (`NO`),
  KEY `p_name` (`p_name`),
  KEY `p_quantity` (`p_quantity`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=11 ;

--
-- 資料表的匯出資料 `product`
--

INSERT INTO `product` (`NO`, `p_picture`, `p_name`, `p_price`, `p_quantity`, `p_intro`, `cost`) VALUES
(1, '1', '蜂蜜牛舌餅', 140, 50, '口感厚實，淡淡的花香，再加上濃郁的蜂蜜，甜而不膩', 70),
(2, '2', '海苔牛舌餅', 140, 51, '天然的韓國海苔，甜與鹹交織的特別風味，讓喜歡鹹品的人有更多選擇', 70),
(3, '3', '咖啡牛舌餅', 140, 43, '濃濃的咖啡香，配上酥脆的牛舌餅，是下午茶的最佳選擇', 70),
(4, '4', '鮮奶牛舌餅', 140, 37, '奶香四溢，高鈣且營養豐富，是小孩子的最愛', 70),
(5, '5', '起士牛舌餅', 120, 48, '巧達起士配上扎實的餅皮，讓人一口接一口，愛不釋口', 70),
(6, '6', '芝麻牛舌餅', 120, 41, '精選芝麻，全部原汁原味烘焙而成，配上牛舌餅，營養又健康', 70),
(7, '7', '可可牛舌餅', 140, 50, '來自比利時的可可粉，結合台灣的古早味牛舌餅，迸出新的火花', 70),
(8, '8', '黑糖牛舌餅', 120, 34, '店家特製的黑糖，夾在酥脆的餅皮中，味道濃郁，令人無法忘懷', 70),
(9, '9', '紅麴牛舌餅', 160, 45, '數千年來中國的傳統的食材，具有降低膽固醇等效果，讓人食用牛舌餅時也能兼顧健康', 70),
(10, '10', '花生牛舌餅', 120, 29, '不只有花生的香氣，還能感受到花生咀嚼的口感，讓喜歡有食感的人有不一樣的體驗', 70);

-- --------------------------------------------------------

--
-- 資料表結構 `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
  `NO` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `p_name` varchar(20) COLLATE utf8_bin NOT NULL,
  `pur_quantity` int(255) NOT NULL,
  `cost` int(10) NOT NULL,
  `total` int(20) NOT NULL,
  PRIMARY KEY (`NO`),
  KEY `p_name` (`p_name`),
  KEY `pur_quantity` (`pur_quantity`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=9 ;

--
-- 資料表的匯出資料 `purchase`
--

INSERT INTO `purchase` (`NO`, `p_name`, `pur_quantity`, `cost`, `total`) VALUES
(1, '蜂蜜牛舌餅', 16, 70, 1120),
(2, '起士牛舌餅', 45, 70, 3150),
(3, '可可牛舌餅', 33, 70, 2310),
(4, '咖啡牛舌餅', 22, 70, 1540),
(5, '芝麻牛舌餅', 5, 70, 350),
(6, '花生牛舌餅', 2, 70, 140),
(7, '海苔牛舌餅', 12, 70, 840),
(8, '蜂蜜牛舌餅', 20, 70, 1400);

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `NO` int(6) NOT NULL AUTO_INCREMENT,
  `username` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `level` char(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`NO`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- 資料表的匯出資料 `user`
--

INSERT INTO `user` (`NO`, `username`, `email`, `password`, `level`) VALUES
(6, '10244109', '', '81dc9bdb52d04dc20036dbd8313ed055', 'hr'),
(5, '10244119', '', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(7, '10244136', '', '81dc9bdb52d04dc20036dbd8313ed055', 'sales'),
(8, '10244145', '', '81dc9bdb52d04dc20036dbd8313ed055', 'fm'),
(9, '520999', '', 'deb945141c11e4f8002f13359900a020', 'wh'),
(10, '123987', '', 'a181c2fe7c505919cb269d44365088fc', 'cus'),
(11, '111111', '', 'e3ceb5881a0a1fdaad01296d7554868d', 'wh'),
(12, '093654', '', 'e80255d4598d7d7455a97bfd75f300ea', 'fm'),
(13, '22323', '', '77050e6fc4141c7d1457f36e3fc6f821', 'sales'),
(14, '12345', '', '01cfcd4f6b8770febfb40cb906715822', 'cus');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
