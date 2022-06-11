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
(12, '파이썬 질문있습니다', 'Python', '파이썬이 왜 좋은가요?', '123@123.123', '16547793251654779325123_Python.png', 28586, '123', 0, '2022-06-09 21:55:25', NULL),
(13, '자바스크립트의 장점', 'Javascript', '자바스크립트의 장점은 무엇인가요?', '123@123.123', '16547793571654779357314_javascript.png', 10880, '123', 0, '2022-06-09 21:55:57', NULL),
(14, 'java - springboot 응답속도 질문드립니다.', 'Java', '안녕하세요.\r\n로컬로 개발할 때는 이상이 없었는데\r\naws 이용하여 개발서버 올렸는데 응답속도가 느려서 사용할 수 가 없네요ㅜ\r\n정확한 문제 : api 호출 시 3초에 한번 씩  3초이상 딜레이 있음.\r\n혹시 비슷한 경험이나 해결방안 알고 계신분 답변부탁드립니다ㅜ', 'gg@gg.com', '16547795081654779508799_java.png', 37071, '1', 0, '2022-06-09 21:58:28', NULL),
(15, '자바스크립트 코드 봐주세요!', 'Javascript', '이렇게 하면 되나요?', 'gg@gg.com', '16547795621654779562572_javascriptcode.png', 22949, '1', 0, '2022-06-09 21:59:22', NULL);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `bbs1`
--
ALTER TABLE `bbs1`
  ADD PRIMARY KEY (`no`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `bbs1`
--
ALTER TABLE `bbs1`
  MODIFY `no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
