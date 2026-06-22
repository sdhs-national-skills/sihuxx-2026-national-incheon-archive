-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 26-06-22 13:57
-- 서버 버전: 10.4.32-MariaDB
-- PHP 버전: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `incheonarchive`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `comments`
--

CREATE TABLE `comments` (
  `idx` int(11) NOT NULL,
  `user_idx` int(11) NOT NULL,
  `post_idx` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 테이블의 덤프 데이터 `comments`
--

INSERT INTO `comments` (`idx`, `user_idx`, `post_idx`, `date`, `content`) VALUES
(4, 2, 3, '2026-06-22 08:56:21', 'zz');

-- --------------------------------------------------------

--
-- 테이블 구조 `comments_likes`
--

CREATE TABLE `comments_likes` (
  `idx` int(11) NOT NULL,
  `comment_idx` int(11) NOT NULL,
  `user_idx` int(11) NOT NULL,
  `post_idx` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 테이블의 덤프 데이터 `comments_likes`
--

INSERT INTO `comments_likes` (`idx`, `comment_idx`, `user_idx`, `post_idx`, `date`) VALUES
(27, 0, 2, 0, '2026-06-22 09:28:52'),
(30, 4, 2, 3, '2026-06-22 09:33:03');

-- --------------------------------------------------------

--
-- 테이블 구조 `debates`
--

CREATE TABLE `debates` (
  `idx` int(11) NOT NULL,
  `title` varchar(400) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `result` int(11) NOT NULL,
  `user_idx` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 테이블의 덤프 데이터 `debates`
--

INSERT INTO `debates` (`idx`, `title`, `date`, `result`, `user_idx`) VALUES
(1, '엉덩이는 두개인가 하나인가', '2026-06-22 11:49:45', 0, 2);

-- --------------------------------------------------------

--
-- 테이블 구조 `likes`
--

CREATE TABLE `likes` (
  `idx` int(11) NOT NULL,
  `user_idx` int(11) NOT NULL,
  `post_idx` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 테이블의 덤프 데이터 `likes`
--

INSERT INTO `likes` (`idx`, `user_idx`, `post_idx`, `date`) VALUES
(26, 2, 0, '2026-06-22 09:33:00'),
(27, 2, 3, '2026-06-22 09:33:02');

-- --------------------------------------------------------

--
-- 테이블 구조 `posts`
--

CREATE TABLE `posts` (
  `idx` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `category` varchar(200) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `detail` text NOT NULL,
  `photo` varchar(400) NOT NULL,
  `user_idx` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 테이블의 덤프 데이터 `posts`
--

INSERT INTO `posts` (`idx`, `title`, `category`, `date`, `detail`, `photo`, `user_idx`) VALUES
(2, '게시글입니다', '자유', '2026-06-22', '배가 너무 고프다', '', 1),
(3, '이미지 테스트', '자유', '2026-06-22', '이미지', '/asset/posts/꺅두기.png,/asset/posts/두기.jpg', 1);

-- --------------------------------------------------------

--
-- 테이블 구조 `users`
--

CREATE TABLE `users` (
  `idx` int(11) NOT NULL,
  `id` varchar(300) NOT NULL,
  `pw` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL,
  `profile` varchar(400) NOT NULL,
  `is_admin` int(11) NOT NULL,
  `login_token` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 테이블의 덤프 데이터 `users`
--

INSERT INTO `users` (`idx`, `id`, `pw`, `name`, `profile`, `is_admin`, `login_token`) VALUES
(1, 'sihu', '1234', '시후', '/asset/profile/꺅두기.png', 0, NULL),
(2, 'admin', '1234', '관리자', '/asset/profile/귀여운 두기.tmp', 1, '795b79b25bec1684595d5fa86a8f3f3c71ce234281c8de43d2eb585b44510eb5');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `comments_likes`
--
ALTER TABLE `comments_likes`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `debates`
--
ALTER TABLE `debates`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `comments`
--
ALTER TABLE `comments`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 테이블의 AUTO_INCREMENT `comments_likes`
--
ALTER TABLE `comments_likes`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- 테이블의 AUTO_INCREMENT `debates`
--
ALTER TABLE `debates`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 테이블의 AUTO_INCREMENT `likes`
--
ALTER TABLE `likes`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- 테이블의 AUTO_INCREMENT `posts`
--
ALTER TABLE `posts`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 테이블의 AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
