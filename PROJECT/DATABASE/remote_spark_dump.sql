CREATE TABLE `ARTICLE` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Title` TEXT NULL, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL, 
  `Image` TEXT NULL, 
  `Video` TEXT NULL, 
  `SectionSlug` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `ARTICLE` (`Id`, `Title`, `Slug`, `Text`, `Image`, `Video`, `SectionSlug`) VALUES
(1, 'As clearly and food and passion.', 'as-clearly-and-food-and-passion', 'While even closer to earthly things worth keeping he asked, than the earth-coloured unsown cloak.', 'palm_tree.jpg', 'train.mp4', 'ebrahim'),
(2, 'Deep joy in perfumed waters were hanging down.', 'deep-joy-in-perfumed-waters-were-hanging-down', 'Won\'t make it belongs to accept his tongue no time, knowing this quite understand him happiness to listen. Language would indeed like good he dreamt of questions.', 'palm_tree.jpg', 'bus.mp4', 'ebrahim'),
(3, 'You\'ve once said not love nobody.', 'you-ve-once-said-not-love-nobody', 'Few moments he demanded him unconscious, when he not act upon yourself. Failed to beg for himself. Eternal search because we will your amusement.', 'surfer.jpg', 'train.mp4', 'perkinson'),
(4, 'It\'s true essence of enlightenment had been a.', 'it-s-true-essence-of-enlightenment-had-been-a', 'Better opinion and precocious words, thanked and bodies themselves intended to teach. Exchanged some kind his people as much sin. Times were hurrying the laughter of wealth.', 'surfer.jpg', 'bus.mp4', 'ebrahim'),
(5, 'Broke loose embraced him.', 'broke-loose-embraced-him', 'Ablutions nor you do I thought nor drink wine, fine food of every time but with all people.', 'surfer.jpg', 'train.mp4', 'perkinson'),
(6, 'First saw life by and penance.', 'first-saw-life-by-and-penance', 'Nodded brushed his advice he speak, yes she wanted to live with words.', 'palm_tree.jpg', 'bus.mp4', 'ebrahim'),
(7, 'Pleasure of slight fragrant of patience.', 'pleasure-of-slight-fragrant-of-patience', 'Next to suck him asleep when has discovered by love, wavered to this be spared because it sounded strange. This strange may I know, ran somewhere far off by daemons there are wise.', 'surfer.jpg', 'bus.mp4', 'clements'),
(8, 'Deep painful yearning suffering for nothing.', 'deep-painful-yearning-suffering-for-nothing', 'He once at several of thirst felt it, you\'re on hers and time mortal.', 'beach.jpg', 'bus.mp4', 'ebrahim'),
(9, 'Rose bid his counterpart.', 'rose-bid-his-counterpart', 'Fine oil or rather want back after he hated. All by speaking which people a prince among these reports.', 'beach.jpg', 'train.mp4', 'ebrahim'),
(10, 'Dreams empty of and call climbing a teacher.', 'dreams-empty-of-and-call-climbing-a-teacher', 'Everything hard for dwell on earth, thoughts I hate it laugh for thinking that by speaking, than obey think from me.', 'surfer.jpg', 'train.mp4', 'clements');

CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Kenol', 'lorrie.falkenstrom@outlook.com', 'Ardebi', '2005-09-05 10:04:43'),
(2, 'Mcmillen', 'nedda.fargis@yahoo.com', 'Urwakettie', '2011-07-09 14:42:16'),
(3, 'Pomposelli', 'sharad.mott@live.com', 'Koerickeskid', '2003-02-25 09:59:00'),
(4, 'Stovall', 'devina.wingate@mail.com', 'Erspolenkazy', '2004-12-05 19:29:43'),
(5, 'Druzeta', 'damon.dimaso@outlook.com', 'Arkhohoxter', '2007-04-24 04:57:04');

CREATE TABLE `SECTION` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Slug` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `SECTION` (`Id`, `Name`, `Slug`) VALUES
(1, 'Perkinson', 'perkinson'),
(2, 'Ebrahim', 'ebrahim'),
(3, 'Clements', 'clements');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'tessty', 'Not yet also realized that among hundreds of humans, may his mockery with two of sounded new. Reached ears of excess of differentiation for twenty-eight days.'),
(2, 'angashinany', 'May go through enlightenment he soon I\'ll think so, does nothing he repeat all yearning suffering began. You tiredness mumbling placed two from walking along, reached no going around give and trade to say.'),
(3, 'rekilecas', 'Pride flared up whether living by words exclaimed, too is leaving monk and inhale the future, left his side he entered your kindness and worry.'),
(4, 'riweademo', 'Been threatened by innumerable generations of sleep, listened and poultry spices and angry words. Their pilgrimage three skinny and pale from death, weren\'t you think did we you beautiful trees.'),
(5, 'encisunholuk', 'Should eat his goals they came walking a great. Accepted a poison which help me on it, do so he seemed like the leaving monk stopped.');

CREATE TABLE `USER` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Email` TEXT NULL, 
  `Pseudonym` TEXT NULL, 
  `Password` TEXT NULL, 
  `IsAdministrator` TINYINT UNSIGNED NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `USER` (`Id`, `Email`, `Pseudonym`, `Password`, `IsAdministrator`) VALUES
(1, 'root@root.com', 'root', 'xyz', 1),
(2, 'yvon.pitton@outlook.com', 'yvonpitton', '6eski,lZi', 0),
(3, 'emilie.translations@live.com', 'emilietranslations', 'ada3Ns^eluc', 1),
(4, 'louisphilippe.fuchs@hotmail.com', 'louisphilippefuchs', 'te9^ediSp', 1),
(5, 'gavin.persaud@yahoo.com', 'gavinpersaud', 'rWieg-nero2', 1);

ALTER TABLE `ARTICLE`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `CONTACT`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `SECTION`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `TEXT`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `USER`
  ADD PRIMARY KEY (`Id`);

