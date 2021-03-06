-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 21, 2022 at 11:25 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogposts`
--
CREATE DATABASE IF NOT EXISTS `blogposts` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `blogposts`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `commentID` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `postId` int(11) NOT NULL,
  `comment` text NOT NULL,
  `published` int(11) DEFAULT NULL,
  `createdOn` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentID`, `userId`, `username`, `postId`, `comment`, `published`, `createdOn`) VALUES
(14, 6, 'nuwantha', 24, 'not bad', 1, '2022-03-10 22:29:35'),
(15, 7, 'sarah', 21, 'test comment', 1, '2022-03-10 22:30:06'),
(18, 12, 'wijitha', 21, 'vfdgfhtfghyghtrfhtderh', 1, '2022-03-11 11:51:43'),
(20, 4, 'mindi', 24, 'test', 1, '2022-03-11 15:54:12'),
(21, 13, 'shina', 21, 'test comment', 1, '2022-03-11 15:56:48'),
(22, 13, 'shina', 23, 'comment ', 1, '2022-03-11 16:18:43'),
(30, 4, 'mindi', 22, 'comment to 22', 1, '2022-03-15 15:34:11'),
(31, 4, 'mindi', 24, 'test \r\n', 1, '2022-03-15 15:35:18'),
(34, 4, 'mindi', 22, 'test after edit', 1, '2022-03-17 09:23:17'),
(39, 4, 'mindi', 38, 'dfsgvfsd', NULL, '2022-03-18 22:10:59');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `postId` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `postTitle` varchar(500) NOT NULL,
  `postChapo` varchar(500) NOT NULL,
  `postContent` text NOT NULL,
  `postImage` varchar(250) DEFAULT NULL,
  `published` tinyint(1) DEFAULT NULL,
  `postCreatedOn` datetime DEFAULT current_timestamp(),
  `lastUpdatedOn` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postId`, `userId`, `postTitle`, `postChapo`, `postContent`, `postImage`, `published`, `postCreatedOn`, `lastUpdatedOn`) VALUES
(21, 4, 'Macron promet de supprimer la redevance audiovisuelle, la majorit?? pr??sidentielle se veut rassurante', 'Plusieurs membres de la majorit?? sont revenus sur l???annonce du chef de l???Etat, en promettant la sauvegarde de l???audiovisuel public. ', 'Le pr??sident candidat l???a propos?? au d??tour d???une phrase et c???est au tour de son entourage de pr??ciser son id??e. Emmanuel Macron s???est engag??, lundi 7 mars, s???il est r????lu, ?? supprimer la redevance audiovisuelle.\r\n\r\n?? On supprimera les imp??ts qui restent, la redevance en fait partie ??, a-t-il d??clar?? lors d???un ??change avec 200 habitants de Poissy (Yvelines), pour sa premi??re sortie publique en tant que candidat ?? la pr??sidentielle. Selon le chef de l???Etat, cette suppression est ?? coh??rente avec la suppression de la taxe d???habitation ??, l???une des mesures-phares de sa campagne en 2017.', 'image5.jpg', 1, '2022-03-07 21:19:31', NULL),
(22, 4, 'A Hostomel, dans la banlieue de Kiev : ?? Nous sommes bombard??s vingt-quatre heures sur vingt-quatre ??', 'La Russie a annonc?? un cessez-le-feu pour permettre l?????vacuation de civils depuis les villes de Kiev, Kharkiv, Soumy, Tchernihiv et Marioupol, avant l???arriv??e de l???arm??e russe. ', 'Au treizi??me jour de l???invasion de l???Ukraine d??clench??e par Vladimir Poutine, Kiev ainsi que les villes de Soumy, Kharkiv, Tchernihiv et Marioupol ??taient cens??es b??n??ficier, ?? partir de 8 heures, de cessez-le-feu locaux afin d???organiser l?????vacuation de civils fuyant les bombardements.\r\n\r\n', 'image2.jpg', 1, '2022-03-08 14:25:27', NULL),
(23, 4, 'Cure Rare Disease Collaborates With SickKids on Three-Year CRISPR Research Project', 'About Cure Rare Disease  Cure Rare Disease, a 501(c)(3) nonprofit based in Boston, is transforming possibilities for people with rare diseases .', '', 'image3.jpg', 1, '2022-03-08 14:39:14', NULL),
(24, 4, 'Election pr??sidentielle 2022 : comparez les programmes des douze candidats officiels', 'De Nathalie Arthaud ?? Anne Hidalgo, en passant par Yannick Jadot ou Val??rie P??cresse, retrouvez les promesses des candidats et candidates ?? l?????lection.', 'Comment am??liorer notre syst??me de sant??, pr??server le pouvoir d???achat de la population, lutter contre le changement climatique, assurer la s??curit?? de tous ? Quelle r??ponse ?? la guerre en Ukraine ? Quelle politique migratoire souhaitons-nous ? Quelle dette publique laisserons-nous ?? nos enfants apr??s la crise du Covid-19 ? Ces enjeux, et bien d???autres, sont au c??ur des d??bats de la campagne pr??sidentielle et devraient guider la d??cision des ??lecteurs pour le scrutin des 10 et 24 avril.\r\n\r\nLes douze candidats qui ont recueilli les cinq cents parrainages n??cessaires pour se pr??senter ?? l?????lection pr??sidentielle sont d??sormais connus : Nathalie Arthaud, Nicolas Dupont-Aignan, Anne Hidalgo, Yannick Jadot, Jean Lassalle, Jean-Luc M??lenchon, Marine Le Pen, Emmanuel Macron, Val??rie P??cresse, Philippe Poutou, Fabien Roussel et Eric Zemmour.\r\n\r\nNotre comparateur de programmes synth??tise pr??s de mille propositions de ces personnalit??s politiques, qui repr??sentent un large spectre id??ologique allant de l???extr??me gauche ?? l???extr??me droite, et ce qui les diff??rencie sur une centaine de th??matiques. Le pr??sident sortant, Emmanuel Macron, a d??voil?? sa candidature tardivement, le 3 mars, et n???a pas encore pr??cis?? son programme pour un second quinquennat. Nous ajouterons ces informations d??s que possible.', 'elction.jpg', 1, '2022-03-08 15:57:40', NULL),
(38, 4, 'second post test image', 'fedfdef edited', 'fedfez', 'macron.jpg', 1, '2022-03-18 10:54:50', '2022-03-18 11:10:51'),
(41, 4, 'dzsdq', 'dzqd', 'dzqd', 'image5.jpg', 1, '2022-03-18 22:11:57', '2022-03-18 21:14:19'),
(42, 4, 'sqS', 'SsxQ', 'SXQS', 'image4.jpg', NULL, '2022-03-18 22:13:40', '2022-03-18 21:13:40'),
(43, 4, 'sqS', 'SsxQ', 'SXQS', 'image4.jpg', NULL, '2022-03-18 22:14:01', '2022-03-18 21:14:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `passwords` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `isAdmin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `passwords`, `email`, `isAdmin`) VALUES
(4, 'mindi', '$2y$10$2ChsJusxe0t4U9aBfNrbkO1ydLZnyGMlDURCzllbDdvTvzEYZeIym', 'mindi@gmail.com', 1),
(5, 'dinul', '$2y$10$Vk2eG5iiLKa5yGwNnCPNFuQorC/VAcuGbBM5sOmrZjCuXeHAN15D2', 'dinul@gmail.com', NULL),
(6, 'nuwantha', '$2y$10$spGSuPF.wyXi0Ap8pWS8PuKfYjMcKShID.k0KawdcVQYD7e9i3ijq', 'nuwantha@free.fr', NULL),
(7, 'sarah', '$2y$10$BIll.kQbWfBtzNHsWdw9DeeaAK.gpK.pbgjTpWPdTnt4m0rb8UvTy', 'sarah@gmail.com', NULL),
(8, 'chathur', '$2y$10$ZyUwjlaHHv.VpV9R5nkXT.HuBFgwXAk214bwX.lkPTBocjOAAndh2', 'chathura@gmail.com', NULL),
(11, 'sadu', '$2y$10$jsmz.K66f.jMQEdengVQBO4CHIgzBdYONhCtppOzQC.MPz7IR2v46', 'sadu@gmail.com', NULL),
(12, 'wijitha', '$2y$10$F5uMkf4nY4DRM5L/7YMBW.O4aQzvLMvWDEe84kx0UgId9dxHO82zO', 'wiji@yahoo.com', NULL),
(13, 'shina', '$2y$10$PPNgH78O4Rm4PB9IPSRgCukLVlpbqlzoOPSt9dC2LAIbhjcCvRAy.', 'shina@gmail.com', NULL),
(14, 'sacha', '$2y$10$jB61x50LunAhy2HKaF1XceKKUnk..KiipfiEOJx/hYlYClrRr7CUe', 'sacha@gmail.com', NULL),
(15, 'deneth', '$2y$10$/yFgFywAwPU5Y2SNZtZf2OIWfn//7Vpbvss.Fnk4SBJ/2KnbtqpTW', 'deneth@gmail.fr', NULL),
(16, 'wish', '$2y$10$bCJbUtNMrBFIdguXL8zEK.0cmksYx.Fuhg2m9AdnZKv.DgDsQsMw.', 'wish@gmail.com', NULL),
(17, 'test', '$2y$10$bi6xR83thXLRP/M40lPJvuh4xkaorrpK78PNzBo27xe0G0KzmPHDG', 'test@gmail.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
