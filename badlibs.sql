-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2023 at 07:41 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `badlibs`
--

-- --------------------------------------------------------

--
-- Table structure for table `libs`
--

CREATE TABLE `libs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` longtext NOT NULL,
  `vars` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `libs`
--

INSERT INTO `libs` (`id`, `title`, `text`, `vars`) VALUES
(1, 'Christmas Dinner', 'Everyone likes to have a/an adj1 dinner on Christmas Day. Most people have a huge roast noun1 stuffed with food1 dressing and served with mashed plurNoun1 and plenty of hot brown liquid1. However, if you would rather have a/an adj2 turkey, here is how you should verb1 it. First, make the dressing of old, dried noun2 crumbs. Then, put the dressing in the turkey\'s body1. Put it in a big noun3 and brush it with adj3 butter. Next, heat your noun4 to numb1 degrees. Put the turkey in and cook it very 1adverb for five hours. When you put it on the table, the adj4 aroma will make everyone smack their plurNoun2 and say, \"exclamation1!\"', 'Adjective/adj1/Noun/noun1/Type of Food/food1/Plural Noun/plurNoun1/Type of Liquid/liquid1/Adjective/adj2/Verb/verb1/Noun/noun2/Part of the Body/body1/ Noun/noun3/Adjective/adj3/Noun/noun4/Number/numb1/Adverb/1adverb/Adjective/adj4/Plural Noun/plurNoun2/Exclamation/exclamation1'),
(2, 'How to Wrap a Present', 'Before you start to wrap your Christmas present, make sure you have plenty of adj1 paper and lots of little nounPlur1 to stick on the package. If you are wrapping something adj2, such as a/an noun1, it is best to tape nounPlur2 around any parts that might verb1. Then take brown wrapping noun2 and wrap it very 1adverb. Take care that there is not a/an noun3 poking out anywhere. Now take the expensive color1 paper that you bought at the noun4 store and make a/an adj3 package. Finally, put stickers on that say \"Do not verb2 until Christmas\" and put it under the tree with all the other adj4 nounPlur3. Then on Christmas morning, when you see all your adj5 relatives opening their packages and saying \"exclamation1!\" you will feel positively adj5.', 'Adjective/adj1/Plural Noun/nounPlur1/Adjective/adj2/Noun/noun1/Plural Noun/nounPlur2/Verb/verb1/Noun/noun2/Adverb/1adverb/Noun/noun3/Color/color1/Noun/noun4/Adjective/adj3/Verb/verb2/Adjective/adj4/Plural Noun/nounPlur3/Adjective/adj5/Exclamation/exclamation1/Adjective/adj5'),
(3, 'Toys for the Kids', 'Today\'s parents buy very adj1 toys for their little nounPlur1. Fifty years ago, children got adj2 electric trains or baby dolls that said \'silly1,\' when you squeezed them. Now children only want electronic nounPlur2. even num1-year-olds know how to verb1 a computer. Or a/an alpha1-Phone. Kids want remote-controlled nounPlur3. Or tiny robot monsters that can blow up your noun1 or take your animal1 prisoner. Everything has to have a silicon noun2 in it and be operated by a nine-volt noun3. By the year 2030, all American children will probabaly want to have their own adj3 space shuttle and adj4 robot playmate manufactured by General Motors. In fact, by that time maybe children will be manufactured by a/an adj5 assembly line and will be operated by nine-volt nounPlur4.', 'Adjective/adj1/Plural Noun/nounPlur1/Adjective/adj2/Silly Word/silly1/Plural Noun/nounPlur2/Number/num1/Verb/verb1/Letter of the Alphabet/alpha1/Plural Noun/nounPlur3/Noun/noun1/Animal/animal1/Noun/noun2/Noun/noun3/Adjective/adj3/Adjective/adj4/Adjective/adj5/Plural Noun/nounPlur4'),
(4, 'A Transylvanian New Year\'s', 'New Year\'s Day in Transylvania is the most adj1 holiday of the year. All the noun1 shops and noun2 factories are shut down, and the nounPlur1 dance in the streets. The locals, who are called nounPlur2, spend all day dancing 1adverb. And some Transylvanians, who are called nounPlur3, prepare a/an adj2 feast. New Year\'s dinner always features a wild roast animal1. It is skinned, put in an oven, and covered with food1. Then it is cooked for num1 hours. After dinner, a contest is held to see which Transylvanian can verb1 the loudest. The winner is given the title of \"silly1\". Then famous Count Dracula himself raffles off num2 nounPlur4 to help pay the noun3 who has to come in the next day and clean up the whole adj3 country.', 'Adjective/adj1/Noun/noun1/Noun/noun2/Plural Noun/nounPlur1/Plural Noun/nounPlur2/Adverb/1adverb/Plural Noun/nounPlur3/Adjective/adj2/Animal/animal1/Type of Food/food1/Number/num1/Verb/verb1/Silly Word/silly1/Number/num2/Plural Noun/nounPlur4/Noun/noun3/Adjective/adj3'),
(5, 'New Year\'s Resolution', 'I resolve that in the next year I will eat all my nounPlur1, just like my mother says. I promise to help bathe my pet noun1 and help verb1 the dishes after dinner. I will not eat any food1 that contains cholesterol or nounPlur2. I will be polite and thoughtful and will clear the nounPlur3 after meals. I will do a/an adj1 deed every day. I will also be polite to any nounPlur4 who are older than I am. And I will never, never verb2 my dog\'s tail or pour liquid1 on my cat. I will also try to brush my body1 and shine my clothing1 every day. I promise to be really adj2 so I can live 1adverb for the next twelve months. Then I\'ll be a truly happy, adj3 person.', 'Plural Noun/nounPlur1/Noun/noun1/Verb/verb1/Type of Food/food1/Plural Noun/nounPlur2/Plural Noun/nounPlur3/Adjective/adj1/Plural Noun/nounPlur4/Verb/verb2/Type of Liquid/liquid1/Part of the Body/body1/Article of Clothing/clothing1/Adjective/adj2/Adverb/1adverb/Adjective/adj3'),
(6, 'Thank-You Letters', '&emsp;Dear Auntie firstName1,<br>I want to thank you for sending me the adj1 gift. I never had a/an noun1 before. I can use it to fix all my nounPlur1. It will also keep my body1 warm if we have any adj2 weather.<br>&emsp;Your adj3 nephew,<br>firstName2<br><br>&emsp;Dear Grandpa and Grandma,<br>I really like the noun2 you sent me. It must have cost a lot of nounPlur2. All the kids around here have adj4 computers. But mine is the only one that has six different nounPlur3. It will help me do my adj5 homework, and I know I will get higher nounPlur4 this year. Mom says I can come to your noun3 for a visit next summer.<br>&emsp;Signed, celeb1', 'First Name/firstName1/Adjective/adj1/Noun/noun1/Plural Noun/nounPlur1/Part of the Body/body1/Adjective/adj2/Adjective/adj3/First Name/firstName2/Noun/noun2/Plural Noun/nounPlur2/Adjective/adj4/Plural Noun/nounPlur3/Adjective/adj5/Plural Noun/nounPlur4/Noun/noun3/Celebrity/celeb1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `libs`
--
ALTER TABLE `libs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `libs`
--
ALTER TABLE `libs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
