-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 22-06-02 15:45
-- 서버 버전: 10.1.35-MariaDB
-- PHP 버전: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `devcomm`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `bbs1`
--

CREATE TABLE `bbs1` (
  `no` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `img_file` varchar(255) NOT NULL,
  `img_size` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `del_flg` tinyint(1) NOT NULL DEFAULT '0',
  `reg_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `mod_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='게시판';

--
-- 테이블의 덤프 데이터 `bbs1`
--

INSERT INTO `bbs1` (`no`, `title`, `category`, `content`, `id`, `img_file`, `img_size`, `name`, `del_flg`, `reg_date`, `mod_date`) VALUES
(5, '', '', '', 'gg@gg.com', '', 0, '1', 0, '2022-05-30 21:45:15', NULL),
(6, '', '', '', 'gg@gg.com', '', 0, '1', 0, '2022-05-30 21:45:18', NULL),
(7, '', '', '', 'gg@gg.com', '', 0, '1', 0, '2022-05-30 21:45:20', NULL),
(9, 'ㅇㅇ', 'ㄴㄴ', 'ㅁㅁ', 'abc@naver.com', '16541757191654175719560_a2.jpg', 16929, '이준희', 0, '2022-06-02 22:15:19', NULL);

-- --------------------------------------------------------

--
-- 테이블 구조 `user`
--

CREATE TABLE `user` (
  `no` int(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `pw` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `del_flg` tinyint(1) DEFAULT '0',
  `join_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='유저 테이블';

--
-- 테이블의 덤프 데이터 `user`
--

INSERT INTO `user` (`no`, `id`, `pw`, `name`, `address`, `del_flg`, `join_date`) VALUES
(1, 'test1@test.com', 'test1', '테스터1', NULL, 0, '2022-05-26 20:27:02'),
(2, 'gg@gg.com', '1', '1', '1', 0, '2022-05-26 21:37:01'),
(3, 'abc@naver.com', '123', '이준희', '', 0, '2022-05-26 22:11:08');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `bbs1`
--
ALTER TABLE `bbs1`
  ADD PRIMARY KEY (`no`);

--
-- 테이블의 인덱스 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `id` (`id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `bbs1`
--
ALTER TABLE `bbs1`
  MODIFY `no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 테이블의 AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
