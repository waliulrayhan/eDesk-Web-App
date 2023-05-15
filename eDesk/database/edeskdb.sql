-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 03:14 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edeskdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminaddoffice`
--

CREATE TABLE `adminaddoffice` (
  `id` int(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminaddoffice`
--

INSERT INTO `adminaddoffice` (`id`, `title`, `description`) VALUES
(5, 'Vice-Chancellor Office', 'This is for vc Office'),
(6, 'Audit Cell', 'This is under in VC Office'),
(7, 'Treasurer Office', 'Treasurer Office'),
(8, 'Dean Office', 'Dean Office'),
(9, 'Registrar Office', 'Registrar Office'),
(10, 'White House Office', 'White House Office'),
(11, 'Nishat', 'jhghyjgrj tg jyt gjr rtu ytuy riut yuiryt ilrytiuyit yiu yuirytuk yuiytuyriire ');

-- --------------------------------------------------------

--
-- Table structure for table `adminmanagement`
--

CREATE TABLE `adminmanagement` (
  `id` int(20) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminmanagement`
--

INSERT INTO `adminmanagement` (`id`, `userid`, `password`, `firstname`, `lastname`, `picture`) VALUES
(1, 'admin', 'admin', 'test', 'test lastr g', ''),
(3, 'test', 'test', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` mediumtext NOT NULL,
  `picture` varchar(255) NOT NULL,
  `office_id` int(20) NOT NULL,
  `author_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `type` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `body`, `picture`, `office_id`, `author_id`, `user_id`, `type`, `post_type`, `date_time`, `status`, `comment`) VALUES
(9, 'ঠিক মতো কাজ হচ্ছে না ডিন অফিসে।', 'gfdgdgxgggggggggggggggggggggggggg dgx hfccccccer fchr r trttertrttjh jreukyh kgukhukghuk uk ytkr ytukery tukeryuk eruktrbu  reioertuoyeruiy feyier tit ri7ewtrie tifsdkfg sdyrtw7i rtew8 ydhkadgc hjadg fuiewyf ioeudoiqwy dhjsbc mhdgh fliewuf oiewu fukegfkecmh c egd fkuad gkdaehe dkuewh fukdbfhk geaku fhew ukgf dmhad gf kuewf ds gdm usdf kue hd cjsd d i e ', '16837814571675267474219.jpg', 5, 1, 0, 'Admin: A-', 'Admin', '2023-05-11 05:04:17', 'ok', 'This is update comment'),
(10, 'B190305034', 'erty re r5t ret reterter tre tre', '1683829661119259549_3441740135891285_5227993086288146132_n.jpg', 6, 0, 6, 'Complain: C-', 'Complain', '2023-05-11 18:27:41', 'ok', 'We have received your complain'),
(11, 'B190305034', 'rt erter tert ret erterterterter', '1683830141201187167_1143761759700989_24436171607090174_n.jpg', 8, 0, 6, 'Suggestion: S-', 'Suggestion', '2023-05-11 18:35:41', 'ok', 'see you soon'),
(12, 'B190305034', 'This is a tetst  meassage.', '16838977112EWl6jE.jpg', 9, 0, 6, 'Complain: C-', 'Complain', '2023-05-12 13:21:51', 'pending', 'We have received your complain'),
(14, 'B190305021', 'Test for Roudra message', '1683898278197864938_1108411222897791_8239537627427090307_n.jpg', 5, 0, 8, 'Complain: C-', 'Complain', '2023-05-12 13:31:18', 'ok', 'We have received your complain'),
(15, 'B190305034', 'WE have a requet for you', '1683958872119259549_3441740135891285_5227993086288146132_n.jpg', 9, 0, 6, 'Request: R-', 'Request', '2023-05-13 06:21:12', 'pending', 'We have received your Request'),
(16, 'B190305034', 'Nishat Fuck Roudra at CSE office room.. Please help me..', '1683996768Rayhan-Pic.jpg', 8, 0, 6, 'Request: R-', 'Request', '2023-05-13 16:52:48', 'pending', 'We have received your request'),
(17, 'B190305034', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.', '16840042552EWl6jE.jpg', 9, 0, 6, 'Request: R-', 'Request', '2023-05-13 18:57:35', 'pending', 'We have received your request'),
(18, 'B190305034', 'dfgrfg  re tyrtyre ert ertert eret er tret ', '1684009535119259549_3441740135891285_5227993086288146132_n.jpg', 10, 0, 6, 'Request: R-', 'Request', '2023-05-13 20:25:35', 'pending', ''),
(21, 'B190305020', 'Tetst test tevsghed hye he hje', '16841254521664597699896.jpg', 9, 0, 9, 'Complain: C-', 'Complain', '2023-05-15 04:37:32', 'ok', ''),
(22, 'B190305020', 'tgfeg ugyuewg uyegwygjygyrg uyg ygyewg yeg ewyge eyg', '16841256491675267474219.jpg', 7, 0, 9, 'Suggestion: S-', 'Suggestion', '2023-05-15 04:40:49', 'ok', ''),
(23, 'B190305020', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '168412805320230209_145053.jpg', 5, 0, 9, 'Suggestion: S-', 'Suggestion', '2023-05-15 04:56:56', 'pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `usermanagement`
--

CREATE TABLE `usermanagement` (
  `id` int(10) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `stat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usermanagement`
--

INSERT INTO `usermanagement` (`id`, `firstname`, `lastname`, `userid`, `email`, `password`, `picture`, `stat`) VALUES
(6, 'Waliul', 'Islam', 'B190305034', 'rayhan@gmail.com', '$2y$10$aHe34KNyWA1NwRHO82zQM.FUclFSu8EeezY9BvEXrUMBJ3ijxHeCO', '1683623421Scan2.jpg', 'active'),
(7, 'Nishat', 'Mahmud', 'B190305003', 'nishat@gmai.com', '$2y$10$u2962fW3XX28RCfuRquANunN2d5bytOOD3r7MGssSW0WUTkYvSU9S', '1683623531Nishat Mahmud.jpg', 'active'),
(8, 'Asir Shahriar', 'Roudra', 'B190305021', 'roudra@gmail.com', '$2y$10$tZGM0CDKTKhqPVD5150P9u.VsFJtiuPjPU//IXNKE/7Dal.7OJBTO', '1683898159Roudra.jpg', 'deactive'),
(9, 'Nahid', 'Hasan', 'B190305020', 'nahid@gmail.com', '$2y$10$MTFljBCDp9wcRpMHcBaYU./QlBvb2g3ftNo1HJb1TiXKVi3PcIs9W', '1684124883Nahid.jpg', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminaddoffice`
--
ALTER TABLE `adminaddoffice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminmanagement`
--
ALTER TABLE `adminmanagement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usermanagement`
--
ALTER TABLE `usermanagement`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminaddoffice`
--
ALTER TABLE `adminaddoffice`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `adminmanagement`
--
ALTER TABLE `adminmanagement`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `usermanagement`
--
ALTER TABLE `usermanagement`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
