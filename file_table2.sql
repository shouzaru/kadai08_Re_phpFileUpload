-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2022 年 6 月 08 日 14:29
-- サーバのバージョン： 5.7.34
-- PHP のバージョン: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `file_db3`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `file_table2`
--

CREATE TABLE `file_table2` (
  `id` int(11) NOT NULL,
  `dateInput` date NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `caption` varchar(140) DEFAULT NULL,
  `insert_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `file_table2`
--

INSERT INTO `file_table2` (`id`, `dateInput`, `file_name`, `file_path`, `caption`, `insert_time`, `update_time`) VALUES
(9, '2022-05-29', '20220529-133757-1.JPG', 'images/2022060207552520220529-133757-1.JPG', 'Run！', '2022-06-02 16:55:25', '2022-06-08 22:11:05'),
(11, '2022-06-02', '_DSC0947.JPG', 'images/20220608133032_DSC0947.JPG', '駅伝大会３位入賞おめでとう！', '2022-06-08 22:30:32', '2022-06-08 22:30:32');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `file_table2`
--
ALTER TABLE `file_table2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `file_path` (`file_path`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `file_table2`
--
ALTER TABLE `file_table2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
