-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2023 at 11:32 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_investor_seeker_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin-table1`
--

CREATE TABLE `admin-table1` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin-table1`
--

INSERT INTO `admin-table1` (`id`, `photo`, `name`, `role`, `username`, `password`) VALUES
(14, '64639dd3251c6.png', 'safin', 'admin', 'Safin', 'safin1234'),
(15, '64dcf5c886663.png', 'araath hossen santo', 'modarator', 'santo', 'santo1234'),
(17, '64e387a16dc8f.png', 'arafath hossen santo', 'admin', 'ssss', 'ssssssss'),
(21, '64f5b6a51de71.png', 'araath hossen santo', 'modarator', 'santooo', 'dddd1234');

-- --------------------------------------------------------

--
-- Table structure for table `card_information_all`
--

CREATE TABLE `card_information_all` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `entro-photo` varchar(255) NOT NULL,
  `card-photo` varchar(255) NOT NULL DEFAULT 'defaultPhoto.jgp',
  `cover-photo` varchar(255) NOT NULL,
  `company-logo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `entrepreneur-post` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `business-type` varchar(255) NOT NULL,
  `company-name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `product-description` varchar(255) NOT NULL,
  `product-usecase-1` varchar(255) NOT NULL,
  `product-usecase-2` varchar(255) NOT NULL,
  `product-usecase-3` varchar(255) NOT NULL,
  `product-usecase-4` varchar(255) NOT NULL,
  `revenue` int(100) NOT NULL,
  `last-month-sell` int(100) NOT NULL,
  `last-year-sell` int(100) NOT NULL,
  `total-sell` int(100) NOT NULL,
  `investment-amount` int(100) NOT NULL,
  `equity-offer` int(100) NOT NULL,
  `investment-purpose` varchar(255) NOT NULL,
  `goal` varchar(255) NOT NULL,
  `status-of-post` varchar(100) NOT NULL,
  `status-of-request` varchar(100) NOT NULL,
  `accepted_investor_id` int(255) NOT NULL DEFAULT -1,
  `date-of-post` date NOT NULL,
  `like-count` int(255) NOT NULL DEFAULT 0,
  `dislike-count` int(255) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='this table is holding card information..';

--
-- Dumping data for table `card_information_all`
--

INSERT INTO `card_information_all` (`id`, `username`, `entro-photo`, `card-photo`, `cover-photo`, `company-logo`, `name`, `entrepreneur-post`, `education`, `email`, `phone`, `business-type`, `company-name`, `location`, `product-description`, `product-usecase-1`, `product-usecase-2`, `product-usecase-3`, `product-usecase-4`, `revenue`, `last-month-sell`, `last-year-sell`, `total-sell`, `investment-amount`, `equity-offer`, `investment-purpose`, `goal`, `status-of-post`, `status-of-request`, `accepted_investor_id`, `date-of-post`, `like-count`, `dislike-count`) VALUES
(1, 'santo', '64e8fd07a4ae5.png', 'defaultPhoto.jpg', 'cover1.jpeg', '64eb067826879.png', 'santo', 'arafath', 'a', 'a', 1212, 'aaaa', 'aaaa', 'aaa', 'aaaa', 'aaaa', 'aaaa', 'aaaa', 'aaaa', 12102, 14124214, 10414124, 44141414, 1111122, 20, 'xsxszxs', 'sddwdwdwd', 'Verified', 'Accepted', 0, '2023-08-08', 0, 0),
(2, 'amin', '64e8fd07a4ae5.png', '64e71631eca84.png', 'cover3.jpg', '64eb067826879.png', 'arafath hossen santo', 'Student of AIUB', 'BSE In CSE', 'arafathh@gmail.com', 1759621258, 'Tech', 'investorseeker', 'Dhaka 24/1', 'we are launching a software investor seeker. Which will connect the Entrepreneur and investor??.', 'it will help the entro', 'iesssmskms', 'sdsddsd', 'dsdsdsds', 0, 100000, 51515, 500000, 500000, 10, 'business', 'to be unique one', 'Verified', 'Accepted', 7, '2023-08-24', 0, 0),
(4, 'amin', '64e8fd07a4ae5.png', '64e8cb6c001d6.png', 'cover5.jpg', '64eb067826879.png', 'araath hossen santo', 'Student of AIUB', 'BSE In CSE', 'arh@gmail.com', 1759621258, 'it', 'NNT', 'ajsnjansa', 'tloklk', 'kjkjk', 'jkjkjk', 'jkjkjk', 'jkjkuk', 0, 0, 0, 0, 0, 0, 'ukukukj', 'uuuukululluu', 'Verified', 'Accepted', 16, '2023-08-25', 0, 0),
(5, 'amin', '64e8fd07a4ae5.png', '64eb067826890.png', 'cover2.jpg\n', '64eb067826879.png', 'asif ali', 'Student of AIUB', 'BSE In CSE', 'asif@gmail.com', 14567895, 'it', 'nasa', 'dhaka', 'we are launching software for investor', 'hjghgh', 'hghg', 'ghgh', 'ghghghg', 0, 100000, 51515, 5000000, 5515, 12, 'business', 'to be unique one', 'Verified', 'Accepted', 16, '2023-08-27', 0, 0),
(6, 'nihad', '64eb745f6911e.png', '64eb931c43757.png', 'cover1.jpeg\r\n', '64eb931c42ade.png', 'nihad hamid', 'Student of NSU', 'BSE In CSE', 'nihad@gmail.com', 478965412, 'Sell', 'amit', 'narayongonj', 'we are launching software for local people', 'it will help the entro', 'less time required.', 'more reliable', 'more easy to use ', 5000, 100000, 5000000, 50000000, 500000, 12, 'business', 'to be unique one', 'Verified', 'Accepted', 16, '2023-08-27', 0, 0),
(7, 'nihad', '64eb745f6911e.png', '64eb93e61b2b5.png', 'cover5.jpg\r\n', '64eb93e61b2a2.png', 'nihad hamid', 'Student of NSU', 'BSE In CSE', 'nihadd@gmail.com', 478965412, 'Sell', 'amit', 'narayongonj', 'we are launching software for local people', 'it will help the entro', 'less time required.', 'more reliable', 'more easy to use ', 5000, 100000, 5000000, 50000000, 500000, 12, 'business', 'to be unique one', 'Verified', 'Accepted', 16, '2023-08-27', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `chat_history_and_relational_table`
--

CREATE TABLE `chat_history_and_relational_table` (
  `message_id` int(255) NOT NULL,
  `entrepreneur_id` int(255) NOT NULL,
  `investor_id` int(255) NOT NULL,
  `sender_id` int(255) NOT NULL,
  `receiver_id` int(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `send_date` varchar(255) NOT NULL,
  `send_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat_history_and_relational_table`
--

INSERT INTO `chat_history_and_relational_table` (`message_id`, `entrepreneur_id`, `investor_id`, `sender_id`, `receiver_id`, `message`, `send_date`, `send_time`) VALUES
(1, 2, 2, 2, 2, 'ree', 'er', 'rer'),
(2, 14, 7, 14, 7, 'hello', '2023-09-07', '05:43:20pm'),
(3, 14, 7, 14, 7, 'hello', '2023-09-07', '05:45:18pm'),
(40, 14, 7, 14, 7, 'amin', '2023-09-07', '06:05:44pm'),
(41, 14, 7, 14, 7, 'hey', '2023-09-07', '06:07:41pm'),
(42, 0, 0, 0, 0, 'amin', '2023-09-07', '06:31:27pm'),
(43, 14, 16, 14, 16, 'hello', '2023-09-08', '06:35:25pm'),
(44, 14, 16, 16, 14, 'hello', '2023-09-08', '06:35:48pm'),
(45, 14, 16, 14, 16, 'assalamialoakom', '2023-09-08', '07:09:00pm'),
(46, 14, 16, 14, 16, 'hi', '2023-09-08', '07:09:22pm'),
(47, 14, 16, 14, 16, 'hello', '2023-09-08', '08:10:34pm'),
(49, 14, 16, 14, 16, 'hi', '2023-09-08', '08:34:06pm'),
(51, 14, 16, 16, 14, 'assalamoalaikom', '2023-09-08', '10:00:36pm'),
(52, 14, 16, 14, 16, 'oalaikom assalam', '2023-09-08', '10:00:46pm'),
(62, 14, 16, 14, 16, 'hello', '2023-09-09', '02:15:23pm'),
(63, 14, 16, 14, 16, 'hello', '2023-09-09', '09:32:25pm'),
(64, 14, 16, 14, 16, 'hello', '2023-09-09', '09:33:23pm'),
(65, 14, 16, 14, 16, 'assalamoalaikom', '2023-09-09', '09:36:51pm'),
(66, 14, 16, 14, 16, 'amin', '2023-09-09', '09:41:19pm'),
(67, 14, 16, 14, 16, 'hello', '2023-09-09', '09:50:01pm'),
(68, 16, 0, 16, 0, 'hello', '2023-09-09', '10:58:59pm'),
(69, 16, 0, 16, 0, 'hi', '2023-09-09', '10:59:24pm'),
(70, 16, 17, 16, 17, 'hi', '2023-09-09', '11:01:39pm'),
(71, 16, 17, 16, 17, 'hi', '2023-09-09', '11:01:39pm'),
(72, 16, 17, 16, 17, 'hello', '2023-09-09', '11:01:49pm'),
(73, 16, 17, 16, 17, 'hello', '2023-09-09', '11:03:27pm'),
(80, 16, 14, 16, 14, 'i am also fine', '2023-09-09', '11:10:51pm'),
(81, 14, 16, 16, 14, 'hello dear', '2023-09-09', '11:15:47pm'),
(82, 14, 16, 16, 14, 'hello dear', '2023-09-09', '11:15:57pm'),
(83, 14, 16, 16, 14, 'hello', '2023-09-09', '11:16:34pm'),
(84, 17, 16, 16, 17, 'hello', '2023-09-09', '11:20:07pm'),
(85, 17, 16, 16, 17, 'hello', '2023-09-09', '11:20:10pm'),
(86, 17, 16, 16, 17, 'hello', '2023-09-09', '11:20:23pm');

-- --------------------------------------------------------

--
-- Table structure for table `entrepreneur-reg-table1`
--

CREATE TABLE `entrepreneur-reg-table1` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `profile_photo` varchar(255) NOT NULL,
  `first-name` varchar(100) NOT NULL DEFAULT '-',
  `last-name` varchar(100) NOT NULL DEFAULT '-',
  `username` varchar(255) NOT NULL,
  `nid` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL DEFAULT 0,
  `password` varchar(255) NOT NULL,
  `date_sign` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'ent'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `entrepreneur-reg-table1`
--

INSERT INTO `entrepreneur-reg-table1` (`id`, `name`, `profile_photo`, `first-name`, `last-name`, `username`, `nid`, `email`, `phone`, `password`, `date_sign`, `role`) VALUES
(7, '', '', 'arafath', 'santo', 'safin', 1234, 'san@gmail.com', 45652, 'sasa', '23:05:13', 'ent'),
(13, '', '', '-', '-', 'arafath', 56552565, 'arafathh@gmail.com', 0, 'arafath1234', '23:08:21', 'ent'),
(14, 'Md Amin  Hasan', '64e8fd07a4ae5.png', 'Md Amin ', 'Hasan', 'amin', 123, 'arafathh@gmail.com', 1759621258, 'amin', '23:08:22', 'ent'),
(15, '', '64eb698b7a113.png', '-', '-', 'santo2', 4545, 'araffath@gmail.com', 0, 'santo2', '23:08:27', 'ent'),
(16, 'shawonmia', '64eb6fa54657f.png', 'shawon', 'mia', 'shawon', 456978, 'shawon@gmail.com', 1866656205, 'shawon1234', '23:08:27', 'ent'),
(17, 'nihad hamid', '64eb95bc52f9d.png', 'nihal hasan', 'hamid', 'nihad', 789456, 'nihad@gmail.com', 4789654, 'nihad12', '23:08:27', 'ent'),
(18, 'sssssss', '64eb9bf2edd7a.png', 'sss', 'ssss', 'sdsd', 12345, 'arassfathh@gmail.com', 1759621258, 'sdsd', '23:08:27', 'ent'),
(20, 'virat kohlikohli', '64ed00f001a01.png', 'virat kohli', 'kohli', 'virat', 12345, 'virat@gmail.com', 1866656205, 'virat1234', '23:08:28', 'ent'),
(22, 'sasasasa', '64f039bc3fda9.png', 'sasa', 'sasa', 'damin', 45612, 'arafathh@gmail.com', 1759621258, 'damin1234', '23:08:31', 'ent'),
(23, '', '64f46b6499059.png', '-', '-', 'sssss', 0, '', 0, '', '23:09:03', 'ent'),
(24, 'santoooarafath', '64f4dc7fb0acb.png', 'santooo', 'arafath', 'arafathhh', 1234512345, 'arafsafthh@gmail.com', 1759621258, 'ffff1111', '23:09:03', 'ent'),
(25, 'amin mai', '64f4e0ddf255b.png', 'amin ', 'mai', 'saaanto', 12345444, 'arafsathh@gmail.com', 1759621258, 'ssss2222', '23:09:03', 'ent'),
(26, 'sssssssssssssssss', '64f4e1aabf131.png', 'ssssssss', 'sssssssss', 'sssssssssssss', 2147483647, 'arafsathh@gmail.com', 1759621258, 'ssss2222', '23:09:03', 'ent'),
(27, 'aminulhasan', '64f4e84557235.png', 'aminul', 'hasan', 'aminulhasan', 123456, 'arafathh@gmail.com', 1759621258, 'aminul1111', '23:09:03', 'ent'),
(28, 'araathsanto', '64f4ea4899009.png', 'araath', 'santo', 'adminss', 1234567, 'arafathh@gmail.com', 1759621258, 'ssss2222', '23:09:03', 'ent'),
(29, 'araathsanto', '64f4eb4f615ec.png', 'araath', 'santo', 'waaaaaaaaaa', 12345, 'arafathh@gmail.com', 1759621258, 'aaaa2222', '23:09:03', 'ent'),
(30, 'araathsanto', '64f4ebafcb047.png', 'araath', 'santo', 'aaaaaaaaa', 12345, 'arafsathh@gmail.com', 1759621258, 'aaaa1111', '23:09:03', 'ent'),
(31, 'araathsanto', '64f4ebea85d77.png', 'araath', 'santo', 'santoww', 12345, 'arafathh@gmail.com', 1759621258, 'wwww1111', '23:09:03', 'ent'),
(32, 'araathsanto', '64f4ed3f76e20.png', 'araath', 'santo', 'awertg', 12345, 'arafsathh@gmail.com', 1759621258, 'eeee2222', '23:09:03', 'ent'),
(33, 'araathsanto', '64f4ede15e0a5.png', 'araath', 'santo', 'santosss', 12345, 'arafathh@gmail.com', 1759621258, 'ssss1111', '23:09:03', 'ent'),
(34, 'araathsanto', '64f4ef26eb286.png', 'araath', 'santo', 'qwqwqw', 12345, 'arafathh@gmail.com', 1759621258, 'qwqwqw12', '23:09:03', 'ent'),
(35, 'araathsanto', '64f4f0512babd.png', 'araath', 'santo', 'santower', 12345, 'arafathh@gmail.com', 1759621258, 'ererer12', '23:09:03', 'ent'),
(37, 'araathsanto', '64f5ecebc6c08.png', 'araath', 'santo', 'santosasa', 12345, 'arafathh@gmail.com', 1759621258, 'ssssss11', '23:09:04', 'ent');

-- --------------------------------------------------------

--
-- Table structure for table `investor_reg_table1`
--

CREATE TABLE `investor_reg_table1` (
  `id` int(11) NOT NULL,
  `investor_profile` varchar(255) NOT NULL,
  `first-name` varchar(255) NOT NULL,
  `last-name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nid` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `date_sign` varchar(100) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'inv'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `investor_reg_table1`
--

INSERT INTO `investor_reg_table1` (`id`, `investor_profile`, `first-name`, `last-name`, `name`, `username`, `password`, `nid`, `email`, `phone`, `date_sign`, `role`) VALUES
(4, '64eb1c85341bd.png', 'araath', 'santo', 'arafath hossen santo', 'santo', 'santo123', 4555, 'arafathh@gmail.com', 1759621258, '23:08:21', 'inv'),
(5, '64ea54f191a3e.png', 'safin', 'hasan', 'Safina Hasan', 'safin', 'safin12', 12345, 'safin@gmail.com', 454525555, '23:08:26', 'inv'),
(6, '64eb69d2f09c7.png', '', '', 'Sayem', 'sakil', 'sakil', 45845, 'sakk@gmail.com', 0, '23:08:27', 'inv'),
(7, '64ecdd53ac18c.png', 'Nadim', 'Hasan', 'Nadim Hasan', 'nadim', 'nadim1234', 78954, 'nadim@gmail.com', 1759621258, '23:08:27', 'inv'),
(8, '64eb98cde6703.png', 'maruf', 'hasan', 'maruf hasan', 'maruf', 'maruf1234', 12345, 'sakur@gmail.com', 0, '23:08:27', 'inv'),
(9, '64eb99f55a5b7.png', 'arafath', 'santo', 'arafath santo', 'santosa', 'sasasa', 12345, 'arafathh@gmail.com', 0, '23:08:27', 'inv'),
(10, '64eb9ae2ca0cb.png', 'sasa', 'sasa', 'sasa sasa', 'dada', 'dada', 12345, 'arafatdhh@gmail.com', 0, '23:08:27', 'inv'),
(13, '64eb9c817f9eb.png', 'araath', 'santo', 'araath santo', 'ytyt', 'ytyt', 12345, 'arafathh@gmail.com', 1759621258, '23:08:27', 'inv'),
(15, '64f036f87dee8.png', '', '', 'samir', 'samir', 'samir1234', 456123, 'samir@gmail.com', 0, '23:08:31', 'inv'),
(16, '64fb2a20b0e44.png', 'Rakib', 'mia', 'Rakib mia', 'rakib', 'rakib1234', 456987, 'rakib@gmail.com', 1759621258, '23:08:31', 'inv'),
(20, '64f5ee8b1f050.png', 'araath', 'santo', 'araath santo', 'qwqwqw', 'qqqqqq11', 12345, 'arafathh@gmail.com', 1759621258, '23:09:04', 'inv'),
(21, '64f5ef03a9a1b.png', 'araath', 'santo', 'araath santo', 'sesese', 'ssss1111', 12345, 'arafssathh@gmail.com', 1759621258, '23:09:04', 'inv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin-table1`
--
ALTER TABLE `admin-table1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_information_all`
--
ALTER TABLE `card_information_all`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_history_and_relational_table`
--
ALTER TABLE `chat_history_and_relational_table`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `entrepreneur-reg-table1`
--
ALTER TABLE `entrepreneur-reg-table1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investor_reg_table1`
--
ALTER TABLE `investor_reg_table1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin-table1`
--
ALTER TABLE `admin-table1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `card_information_all`
--
ALTER TABLE `card_information_all`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `chat_history_and_relational_table`
--
ALTER TABLE `chat_history_and_relational_table`
  MODIFY `message_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `entrepreneur-reg-table1`
--
ALTER TABLE `entrepreneur-reg-table1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `investor_reg_table1`
--
ALTER TABLE `investor_reg_table1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
