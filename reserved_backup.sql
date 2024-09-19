-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2023 at 05:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reserved`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reserved`
--

CREATE TABLE `tbl_reserved` (
  `id` int(11) NOT NULL,
  `table_id` int(11) DEFAULT NULL,
  `booker_name` varchar(50) DEFAULT NULL,
  `booker_tel` varchar(30) DEFAULT NULL,
  `booker_date` date DEFAULT NULL,
  `booker_time` time DEFAULT NULL,
  `booker_datetime` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT '1=จอง, 2 เคลียร์โต๊ะ, 3 ยกเลิกการจอง',
  `action_by` int(11) DEFAULT NULL,
  `action_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_reserved`
--

INSERT INTO `tbl_reserved` (`id`, `table_id`, `booker_name`, `booker_tel`, `booker_date`, `booker_time`, `booker_datetime`, `created_by`, `created_date`, `status`, `action_by`, `action_date`) VALUES
(9, 1, 'aa', '022-0324125', '2023-02-20', '20:15:00', '2023-02-20 20:15:00', 1, '2023-02-20 20:12:10', 3, 1, '2023-02-20 20:15:25'),
(10, 1, 'bb', 'bb', '2023-02-20', '21:21:00', '2023-02-20 21:21:00', 1, '2023-02-20 20:12:28', 2, 2, '2023-02-20 22:21:44'),
(11, 1, 'cc', 'cc', '2023-02-20', '23:00:00', '2023-02-20 23:00:00', 1, '2023-02-20 20:12:47', 2, 1, '2023-02-20 20:15:21'),
(12, 2, 'bb', 'bb', '2023-02-20', '21:20:00', '2023-02-20 21:20:00', 1, '2023-02-20 21:18:16', 3, 2, '2023-02-20 22:17:28'),
(13, 4, 'rfjm', 'dtgj', '2023-02-21', '09:30:00', '2023-02-21 09:30:00', 2, '2023-02-20 21:23:29', 2, 2, '2023-02-20 22:17:18'),
(14, 1, 'q', '022221215', '2023-02-20', '23:00:00', '2023-02-20 23:00:00', 2, '2023-02-20 22:17:57', 3, 2, '2023-02-20 22:23:24'),
(15, 2, 'asedgwserg', '45545644', '2023-02-20', '23:00:00', '2023-02-20 23:00:00', 2, '2023-02-20 22:19:44', 3, 2, '2023-02-20 22:36:07'),
(16, 1, 'fgjdfgd', 'fgjdfgj', '2023-02-20', '22:19:00', '2023-02-20 22:19:00', 2, '2023-02-20 22:20:53', 3, 2, '2023-02-20 22:23:32'),
(17, 4, 'sdfbcsdfb', '02131', '2023-02-21', '22:22:00', '2023-02-21 22:22:00', 2, '2023-02-20 22:22:15', 1, NULL, NULL),
(18, 4, 'dgjdfrj', '12156441562', '2023-02-20', '22:22:00', '2023-02-20 22:22:00', 2, '2023-02-20 22:22:45', 1, NULL, NULL),
(19, 5, 'wsergfwsrg', '44545', '2023-02-20', '22:48:00', '2023-02-20 22:48:00', 1, '2023-02-20 22:48:18', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_table`
--

CREATE TABLE `tbl_table` (
  `id` int(11) NOT NULL,
  `table` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT 'no-img.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_table`
--

INSERT INTO `tbl_table` (`id`, `table`, `image`) VALUES
(1, 'A1', '16767219522869.png'),
(2, 'A2', 'no-img.png'),
(4, 'A3', 'no-img.png'),
(5, 'B1', '16767219854444.png'),
(6, 'B2', 'no-img.png'),
(7, 'C1', '16767220318330.jpg'),
(8, 'c2', '16767220752783.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tel` varchar(30) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `user_full_name`, `email`, `tel`, `image`, `role`, `status`, `last_login`) VALUES
(1, 'admin', '$2y$10$NoGSQ5fqSFNhCITSkMsgZuyu3x22IGbo1B3DxtygMBSxUzhwDzUge', 'Administrator', 'admin@admin.com', '027070000', 'avatar.png', 'ผู้ดูแล', 'ใช้งาน', '2023-02-20 22:48:12'),
(2, 'milk', '$2y$10$zAw2u3Mex41Kf.KreyKkpOlvWf.CRiVE8M.Dp5D3iSPy2.s7ZQUHO', 'Milk', 'milk@milk.com', '0222222222', '16257837635611.jpg', 'ผู้ใช้งาน', 'ใช้งาน', '2023-02-20 22:35:56');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_reserved`
-- (See below for the actual view)
--
CREATE TABLE `vw_reserved` (
`id` int(11)
,`table_id` int(11)
,`booker_name` varchar(50)
,`booker_tel` varchar(30)
,`booker_date` date
,`booker_time` time
,`booker_datetime` datetime
,`created_by` int(11)
,`created_date` datetime
,`status` tinyint(4)
,`action_by` int(11)
,`action_date` datetime
,`table_name` varchar(50)
,`table_image` varchar(50)
,`created_by_name` varchar(255)
,`action_by_name` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_table`
-- (See below for the actual view)
--
CREATE TABLE `vw_table` (
`id` int(11)
,`table` varchar(50)
,`image` varchar(50)
,`reserved` varchar(7)
);

-- --------------------------------------------------------

--
-- Structure for view `vw_reserved`
--
DROP TABLE IF EXISTS `vw_reserved`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_reserved`  AS SELECT `a`.`id` AS `id`, `a`.`table_id` AS `table_id`, `a`.`booker_name` AS `booker_name`, `a`.`booker_tel` AS `booker_tel`, `a`.`booker_date` AS `booker_date`, `a`.`booker_time` AS `booker_time`, `a`.`booker_datetime` AS `booker_datetime`, `a`.`created_by` AS `created_by`, `a`.`created_date` AS `created_date`, `a`.`status` AS `status`, `a`.`action_by` AS `action_by`, `a`.`action_date` AS `action_date`, `b`.`table` AS `table_name`, `b`.`image` AS `table_image`, `c`.`user_full_name` AS `created_by_name`, `d`.`user_full_name` AS `action_by_name` FROM (((`tbl_reserved` `a` left join `tbl_table` `b` on(`b`.`id` = `a`.`table_id`)) left join `tbl_user` `c` on(`c`.`id` = `a`.`created_by`)) left join `tbl_user` `d` on(`d`.`id` = `a`.`action_by`))  ;

-- --------------------------------------------------------

--
-- Structure for view `vw_table`
--
DROP TABLE IF EXISTS `vw_table`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_table`  AS SELECT `a`.`id` AS `id`, `a`.`table` AS `table`, `a`.`image` AS `image`, CASE WHEN `a`.`id` in (select `vw_reserved`.`table_id` from `vw_reserved` where `vw_reserved`.`status` = 1 AND cast(current_timestamp() as date) = `vw_reserved`.`booker_date` AND cast(current_timestamp() as time) >= `vw_reserved`.`booker_time` group by `vw_reserved`.`table_id` order by `vw_reserved`.`booker_datetime`) THEN 'ไม่ว่าง' ELSE 'ว่าง' END AS `reserved` FROM `tbl_table` AS `a` ORDER BY `a`.`table` ASC  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_reserved`
--
ALTER TABLE `tbl_reserved`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_table`
--
ALTER TABLE `tbl_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_reserved`
--
ALTER TABLE `tbl_reserved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_table`
--
ALTER TABLE `tbl_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
