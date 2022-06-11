-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 22-06-11 17:11
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
-- 테이블 구조 `project`
--

CREATE TABLE `project` (
  `no` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `field` varchar(20) NOT NULL,
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
-- 테이블의 덤프 데이터 `project`
--

INSERT INTO `project` (`no`, `title`, `category`, `field`, `content`, `id`, `img_file`, `img_size`, `name`, `del_flg`, `reg_date`, `mod_date`) VALUES
(13, '메신저 앱 개발 프로젝트', 'kotlin', '안드로이드개발자', '메신저 앱 개발 프로젝트', '123@123.123', '16544947301654494730071_android_message_app_logo.jpg', 14628, '123', 0, '2022-06-06 14:52:10', NULL),
(14, '커뮤니티 사이트 개발 프로젝트', 'Javascript', '웹개발자', '커뮤니티 사이트 개발 프로젝트', '123@123.123', '16544949621654494962474_CM.png', 56663, '123', 0, '2022-06-06 14:56:02', NULL),
(16, '인디게임 개발 프로젝트', 'Python', '서버개발자', '인디게임 개발 프로젝트', 'gg@gg.com', '16549445371654944537996_game.png', 4754, '1', 0, '2022-06-11 19:48:57', '2022-06-11 20:52:24');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`no`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `project`
--
ALTER TABLE `project`
  MODIFY `no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
