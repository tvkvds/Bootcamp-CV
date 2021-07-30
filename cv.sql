-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 29, 2021 at 06:55 PM
-- Server version: 8.0.26-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `education` varchar(160) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `institution` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `started` year NOT NULL,
  `finished` year NOT NULL,
  `deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `user_id`, `education`, `institution`, `started`, `finished`, `deleted`) VALUES
(3, 2, 'CS50x', 'Harvard', 2019, 2019, NULL),
(4, 2, 'Web Developer bootcamp 2021', 'Udemy - Colt Steele', 2020, 2020, NULL),
(5, 2, 'Web developer backend bootcamp', 'CodeGorillas', 2021, 2021, NULL),
(6, 4, 'Captain', 'My dad', 2001, 2021, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hobbies`
--

CREATE TABLE `hobbies` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hobbies`
--

INSERT INTO `hobbies` (`id`, `user_id`, `hobby`, `description`, `deleted`) VALUES
(3, 2, 'Cooking', 'I love trying out new recipes from all kinds of \"kitchens\" and like enjoying home made food with friends and family.', NULL),
(4, 4, 'Apples', 'Eating apples', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `function` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `company` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `responsibilities` varchar(500) DEFAULT NULL,
  `started` year NOT NULL,
  `ended` year DEFAULT NULL,
  `deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `user_id`, `function`, `company`, `responsibilities`, `started`, `ended`, `deleted`) VALUES
(1, 2, 'Webmaster - content manager', 'zzp', 'Developing and maintaining a wordpress site and creating digital products and related content.', 2011, 2019, NULL),
(2, 2, 'JS and digital content aid', 'volunteering', 'Advising on and creating a digital content strategy, setting up sites and social media accounts, streamline/fix JS code.', 2017, NULL, NULL),
(3, 4, 'Bloody pirate', 'Not the VOC', 'Being badarrrrse', 1965, 1965, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `name` varchar(160) NOT NULL,
  `source` varchar(160) NOT NULL,
  `role` varchar(500) DEFAULT NULL,
  `live` tinyint(1) NOT NULL,
  `deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `user_id`, `name`, `source`, `role`, `live`, `deleted`) VALUES
(1, 2, 'pentalogical', 'https://lit-atoll-39876.herokuapp.com/', 'fullstack developer', 1, NULL),
(2, 4, 'Besting Jack Sparrow', 'https://www.imdb.com/list/ls023657263/', 'Captain', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `skill` varchar(160) NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `category` text NOT NULL,
  `in_progress` tinyint(1) NOT NULL,
  `deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `user_id`, `skill`, `description`, `category`, `in_progress`, `deleted`) VALUES
(1, 2, 'HTML', '', 'Development', 0, NULL),
(2, 2, 'JS', '', 'Development', 0, NULL),
(3, 2, 'PHP', '', 'Development', 1, NULL),
(4, 2, 'SEO', 'Search engine optimization for small businesses, market research, longwords and a smidge of analyzing.', 'Digital marketing', 1, NULL),
(5, 4, 'Sailing', 'Ye big \'ol floater', 'Being seaworthy', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `tagline` varchar(255) DEFAULT NULL,
  `email` varchar(160) NOT NULL,
  `region` varchar(160) NOT NULL,
  `birthyear` year NOT NULL,
  `github` varchar(160) NOT NULL,
  `linkedin` varchar(160) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `introduction` text NOT NULL,
  `background` text NOT NULL,
  `deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `tagline`, `email`, `region`, `birthyear`, `github`, `linkedin`, `introduction`, `background`, `deleted`) VALUES
(2, 'Tamara', 'van Klinken', ':)', 'tvkvds@gmail.com', 'Drenthe', 1985, 'https://github.com/tvkvds', 'https://www.linkedin.com/in/tamara-van-klinken-8b0a7b18a/', 'ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. ', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.', NULL),
(4, 'Edward', 'Teach', 'a.k.a. Captain Blackbeard', 'rrr@c.nl', 'West Indies', 2021, 'https://en.wikipedia.org/wiki/Blackbeard', 'https://duckduckgo.com/?q=blackbeard+pirate&iax=images&ia=images', 'Edward Teach (alternatively spelled Edward Thatch, c. 1680 – 22 November 1718), better known as Blackbeard, was an English pirate who operated around the West Indies and the eastern coast of Britain\'s North American colonies. Little is known about his early life, but he may have been a sailor on privateer ships during Queen Anne\'s War before he settled on the Bahamian island of New Providence, a base for Captain Benjamin Hornigold, whose crew Teach joined around 1716. Hornigold placed him in command of a sloop that he had captured, and the two engaged in numerous acts of piracy. Their numbers were boosted by the addition to their fleet of two more ships, one of which was commanded by Stede Bonnet; but Hornigold retired from piracy toward the end of 1717, taking two vessels with him.', 'Little is known about Blackbeard\'s early life. It is commonly believed that at the time of his death he was between 35 and 40 years old and thus born in about 1680.[1][2] In contemporary records his name is most often given as Blackbeard, Edward Thatch or Edward Teach; the latter is most often used. Several spellings of his surname exist—Thatch, Thach, Thache, Thack, Tack, Thatche and Theach. One early source claims that his surname was Drummond, but the lack of any supporting documentation makes this unlikely. Pirates habitually used fictitious surnames while engaged in piracy, so as not to tarnish the family name, and this makes it unlikely that Teach\'s real name will ever be known.[3][4]', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hobbies`
--
ALTER TABLE `hobbies`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `educations`
--
ALTER TABLE `educations`
  ADD CONSTRAINT `educations_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hobbies`
--
ALTER TABLE `hobbies`
  ADD CONSTRAINT `hobbies_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
