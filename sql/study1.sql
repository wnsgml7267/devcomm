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
-- 테이블 구조 `study1`
--

CREATE TABLE `study1` (
  `no` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `del_flg` tinyint(1) NOT NULL DEFAULT '0',
  `reg_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mod_date` datetime DEFAULT NULL,
  `apply` int(255) NOT NULL,
  `recruit` int(255) NOT NULL,
  `img_file` varchar(255) NOT NULL,
  `img_size` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `study1`
--

INSERT INTO `study1` (`no`, `title`, `category`, `content`, `id`, `name`, `del_flg`, `reg_date`, `mod_date`, `apply`, `recruit`, `img_file`, `img_size`) VALUES
(5, '파이썬 스터디 5명 모집합니다.', 'Python', '초보환영', 'gg@gg.com', '1', 0, '2022-06-08 19:25:18', NULL, 1, 5, '16546839181654683918641_a2.jpg', 16929),
(6, '자바 스터디 10명', 'Java', '많이와주세요~', 'abc@naver.com', '이준희', 0, '2022-06-08 19:26:01', NULL, 9, 10, '', 0);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `study1`
--
ALTER TABLE `study1`
  ADD PRIMARY KEY (`no`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `study1`
--
ALTER TABLE `study1`
  MODIFY `no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
