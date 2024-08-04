-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-08-04 12:56:11
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `cakestore`
--

-- --------------------------------------------------------

--
-- 資料表結構 `ck_banner`
--

CREATE TABLE `ck_banner` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `text` text NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `ck_banner`
--

INSERT INTO `ck_banner` (`id`, `img`, `text`, `sh`) VALUES
(1, 'banner.png', 'aaa', 1),
(5, 'cake1.png', '2', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `ck_orders`
--

CREATE TABLE `ck_orders` (
  `id` int(11) NOT NULL,
  `order_no` text NOT NULL,
  `cilent` text NOT NULL,
  `carts` text NOT NULL,
  `sum_price` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `ck_orders`
--

INSERT INTO `ck_orders` (`id`, `order_no`, `cilent`, `carts`, `sum_price`, `order_date`, `order_status`) VALUES
(12, '2024-08-04-51887', 'asd50123', 'a:1:{i:0;a:5:{s:7:\"shop_id\";s:1:\"1\";s:8:\"shopname\";s:7:\"蛋糕1\";s:5:\"price\";s:3:\"100\";s:8:\"quantity\";s:1:\"1\";s:11:\"total_price\";i:100;}}', 100, '2024-08-04', 1),
(13, '2024-08-04-90300', 'test1', 'a:2:{i:0;a:5:{s:7:\"shop_id\";s:1:\"1\";s:8:\"shopname\";s:7:\"蛋糕1\";s:5:\"price\";s:3:\"100\";s:8:\"quantity\";s:1:\"3\";s:11:\"total_price\";i:300;}i:1;a:5:{s:7:\"shop_id\";s:1:\"6\";s:8:\"shopname\";s:7:\"蛋糕6\";s:5:\"price\";s:3:\"600\";s:8:\"quantity\";s:1:\"3\";s:11:\"total_price\";i:1800;}}', 2100, '2024-08-04', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `ck_store`
--

CREATE TABLE `ck_store` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `name` text NOT NULL,
  `text` text NOT NULL,
  `price` int(10) NOT NULL,
  `good` int(10) NOT NULL DEFAULT 0,
  `sh` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `ck_store`
--

INSERT INTO `ck_store` (`id`, `img`, `name`, `text`, `price`, `good`, `sh`) VALUES
(1, 'cake1.png', '蛋糕1', '321', 100, 5, 1),
(2, 'cake2.png', '蛋糕2', '2', 200, 2, 1),
(4, 'cake4.png', '蛋糕4', '4', 400, 0, 1),
(6, 'cake6.png', '蛋糕6', '6', 600, 1, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `ck_users`
--

CREATE TABLE `ck_users` (
  `id` int(10) NOT NULL,
  `acc` text NOT NULL,
  `pwd` text NOT NULL,
  `type` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `ck_users`
--

INSERT INTO `ck_users` (`id`, `acc`, `pwd`, `type`) VALUES
(1, 'asd50123', 'asd50321', 0),
(21, 'admin', '1234', 1),
(22, 'test1', 'test2', 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `ck_banner`
--
ALTER TABLE `ck_banner`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `ck_orders`
--
ALTER TABLE `ck_orders`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `ck_store`
--
ALTER TABLE `ck_store`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `ck_users`
--
ALTER TABLE `ck_users`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ck_banner`
--
ALTER TABLE `ck_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ck_orders`
--
ALTER TABLE `ck_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ck_store`
--
ALTER TABLE `ck_store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ck_users`
--
ALTER TABLE `ck_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
