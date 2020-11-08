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
(1, 'Hours of some food has filled with.', 'hours-of-some-food-has-filled-with', 'He spoke eagerly trying so venerable teacher, everything could do you insist upon. Worry in all other not come from under her eyes, conducted his memory divine part with good deed.', 'surfer.jpg', 'train.mp4', 'demers'),
(2, 'Again disgust came he called name.', 'again-disgust-came-he-called-name', 'Haven\'t expected any guard your riches, indignant he spoke eagerly trying so where his father.', 'surfer.jpg', 'train.mp4', 'brummitt'),
(3, 'Lost colour and he openly turned against them.', 'lost-colour-and-he-openly-turned-against-them', 'Go any danger of what do that, past times real life from horror. Clothes they merged with life which help you for you.', 'palm_tree.jpg', 'bus.mp4', 'demers'),
(4, 'Can after an hour he spoke.', 'can-after-an-hour-he-spoke', 'Travelled back after the goat stood in hearing all vices, thought walking along and find peace, sinner is accustomed to kiss.', 'palm_tree.jpg', 'train.mp4', 'brummitt'),
(5, 'Were his arms folded.', 'were-his-arms-folded', 'Shouldn\'t I sought to it. Held him how do I even closer to ever saw, blind love nobody counted them, clothes and write very grateful.', 'surfer.jpg', 'bus.mp4', 'pandya'),
(6, 'Childlike or a filled it must follow that.', 'childlike-or-a-filled-it-must-follow-that', 'Wheel once every pilgrim just travelling, fell silent in you found something thin without me. Even felt death is a rare singing voice any guard, felt desire to drawn him comfort.', 'surfer.jpg', 'bus.mp4', 'brummitt'),
(7, 'Sinner which a thinking his advice.', 'sinner-which-a-thinking-his-advice', 'Will learn love with passion with words. More thing in those of nicely dressed in you.', 'palm_tree.jpg', 'bus.mp4', 'demers'),
(8, 'Accepted and wise his smile remained a hunter.', 'accepted-and-wise-his-smile-remained-a-hunter', 'Boy when so long while was left, smiled quietly in hearing all those days of patience. Even better teachings perfected man this quite right, nothing could be any way which causes sloth and illusion.', 'palm_tree.jpg', 'bus.mp4', 'brummitt'),
(9, 'Only been possible the hearts of grass.', 'only-been-possible-the-hearts-of-grass', 'Previous incarnation like him leaving, wonderful sleep which set him be followed.', 'beach.jpg', 'bus.mp4', 'pandya'),
(10, 'Knowing any sleep nor thinking.', 'knowing-any-sleep-nor-thinking', 'Understood that art of bast of faces of thoughts, let run along my friend advised the merchants\'. Slowly it or wise his return and there, rest to nurse him linen for three years.', 'beach.jpg', 'train.mp4', 'pandya');

CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Sinclair', 'candra.minyard@hotmail.com', 'Euginevo', '2009-09-10 17:20:40'),
(2, 'Volz', 'ninno.froehlich@gmail.com', 'Allengric', '2001-10-15 07:16:51'),
(3, 'Mcneill', 'jinyun.babyak@live.com', 'Werera', '2004-03-12 01:26:47'),
(4, 'Cherkas', 'nissa.bunn@yahoo.com', 'Hyacinthe', '2012-04-03 13:13:23'),
(5, 'Fu', 'motaz.bateman@live.com', 'Cosaverody', '2015-03-13 10:59:14');

CREATE TABLE `SECTION` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Slug` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `SECTION` (`Id`, `Name`, `Slug`) VALUES
(1, 'Demers', 'demers'),
(2, 'Pandya', 'pandya'),
(3, 'Brummitt', 'brummitt');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'sanchez', 'Talking which is in fine oil in love, willingness my spirit to imagine and happier now on. Urged him was open thus strongly tasted the gamblers, thanked and when every tavern of an opinion.'),
(2, 'wilovahuti', 'Another had realized that perfected ones are looking for, purpose to believe as if every part and inwardly. Everything was wood plucked the evening\'s ablution, boat back into and answers and pain his body.'),
(3, 'labode', 'Easily happen to depart from an opinion of monks, beautiful she realized when a person since that all, words few with astonishment he found no difficulties. Secretly he lets himself all she also not satisfied, pride flared up a who shaved him looked inside.'),
(4, 'berellyforu', 'How still find numbness we can be dead face. Had listened in being loved everything the city, after some way too but looked inside.'),
(5, 'adorenielin', 'Shouldn\'t I sought to something new thirst, that lovers loving it even in beautiful girl. Does who truly I might come said, left but solely by innumerable generations of thoughts. Glance and trust I asked with high calling.');

CREATE TABLE `USER` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Email` TEXT NULL, 
  `Pseudonym` TEXT NULL, 
  `Password` TEXT NULL, 
  `IsAdministrator` TINYINT UNSIGNED NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `USER` (`Id`, `Email`, `Pseudonym`, `Password`, `IsAdministrator`) VALUES
(1, 'root@root.com', 'root', 'xyz', 1),
(2, 'maid.wilks@yahoo.com', 'maidwilks', '^Zadda8latu', 1),
(3, 'nanni.burrus@outlook.com', 'nanniburrus', 'jMe6ysh!ak', 0),
(4, 'rhoda.sieben@outlook.com', 'rhodasieben', ',ippeCq9', 0),
(5, 'seang.astalos@hotmail.com', 'seangastalos', 'Kmenab5o,', 1);

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

