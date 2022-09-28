-- phpMyAdmin SQL Dump
-- version 5.1.1deb3+bionic1
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2022-09-28 11:41:59
-- 服务器版本： 8.0.29
-- PHP 版本： 7.2.24-0ubuntu0.18.04.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `nutriologypie`
--

-- --------------------------------------------------------

--
-- 表的结构 `articles`
--

CREATE TABLE `articles` (
  `article_id` int NOT NULL,
  `article_title` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `article_category` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `article_link` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- 转存表中的数据 `articles`
--

INSERT INTO `articles` (`article_id`, `article_title`, `article_category`, `article_link`) VALUES
(1, 'aa', 'body health', 'https://www.baidu.com/');

-- --------------------------------------------------------

--
-- 表的结构 `article_comment`
--

CREATE TABLE `article_comment` (
  `id` int NOT NULL,
  `username` varchar(200) NOT NULL,
  `article_id` int NOT NULL,
  `rating` int NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `comment_time` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- 表的结构 `email`
--

CREATE TABLE `email` (
  `id` int NOT NULL,
  `email_address` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `email_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- 转存表中的数据 `email`
--

INSERT INTO `email` (`id`, `email_address`, `email_token`) VALUES
(1, '2672205252@qq.com', '576875'),
(2, 'ddl1208@icloud.com', '787384'),
(3, 'p.zeng@uqconnect.edu.au', '626762');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `username` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `email_status` int NOT NULL DEFAULT '0',
  `membership` varchar(15) NOT NULL DEFAULT 'Free',
  `profile_photo` varchar(255) NOT NULL,
  `is_expert` int NOT NULL DEFAULT '0',
  `account_number` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `BSB` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `bank` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`username`, `password`, `first_name`, `last_name`, `birthday`, `phone`, `email`, `email_status`, `membership`, `profile_photo`, `is_expert`, `account_number`, `BSB`, `bank`) VALUES
('deco3801', 'numpy', 'Henry', 'Xie', '14/03/2020', '1111', 'a@a.com', 0, 'Free', 'aaaa', 0, '', '', ''),
('HeyMiaaa', '123', 'Mia', 'Peng', '01/01/2001', '12345667', 'mia@email.com', 0, 'Free', '', 1, '', '', ''),
('inghaoZhang', '$2y$10$X9A1RA.qsG2.RscYGHQAQu4tTvsUoP609q0X1jIQw3SQREq.V9PJi', '', '', '', '', '2672205252@qq.com', 0, 'Free', '', 0, '', '', ''),
('jing', '$2y$10$BtZbTwShFbYRh3RzSRhuoO6WmlMcj4ScqyCXkxX8wb1vVc0iiz//C', '', '', '', '', 'jing@email.com', 0, 'Free', '', 0, NULL, NULL, NULL),
('raytest1', '$2y$10$BAfYK/hpj8Ad68zrkDyiu.e62Wh24NVT61ntJhKVePDJNAX3AFca.', '', '', '', '', 'ddl1208@icloud.com', 0, 'Free', '', 0, '', '', ''),
('raytest11', '$2y$10$3Mo/qnCMdgbsiTuTJlin2.G2QG6TxvfV.hkVFzi9/h9XfcEXRSFbu', '', '', '', '', 'p.zeng@uqconnect.edu.au', 0, 'Free', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `wish_list`
--

CREATE TABLE `wish_list` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `article_id` int NOT NULL,
  `article_title` varchar(1000) NOT NULL,
  `article_link` varchar(255) NOT NULL,
  `status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- 转储表的索引
--

--
-- 表的索引 `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- 表的索引 `article_comment`
--
ALTER TABLE `article_comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_id` (`article_id`),
  ADD KEY `fk_username` (`username`);

--
-- 表的索引 `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`) USING BTREE;

--
-- 表的索引 `wish_list`
--
ALTER TABLE `wish_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_username_wishlist` (`username`),
  ADD KEY `fk_artile_id` (`article_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `article_comment`
--
ALTER TABLE `article_comment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `email`
--
ALTER TABLE `email`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `wish_list`
--
ALTER TABLE `wish_list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- 限制导出的表
--

--
-- 限制表 `article_comment`
--
ALTER TABLE `article_comment`
  ADD CONSTRAINT `article_comment_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`article_id`),
  ADD CONSTRAINT `article_comment_ibfk_2` FOREIGN KEY (`article_id`) REFERENCES `articles` (`article_id`),
  ADD CONSTRAINT `fk_username` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- 限制表 `wish_list`
--
ALTER TABLE `wish_list`
  ADD CONSTRAINT `fk_artile_id` FOREIGN KEY (`article_id`) REFERENCES `articles` (`article_id`),
  ADD CONSTRAINT `fk_username_wishlist` FOREIGN KEY (`username`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
