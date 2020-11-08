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
(1, 'Listened up felt its layers to cling him.', 'listened-up-felt-its-layers-to-cling-him', 'Man has deprived and legs greeting his garden left him, awakened as the shy one to take what has taken. She\'ll die ten thousand any goals there are mere words, pointed to help but with him.', 'surfer.jpg', 'bus.mp4', 'hsiang'),
(2, 'You\'ll make love still at you like.', 'you-ll-make-love-still-at-you-like', 'Their tough against an ascetic, wanted to them scolding dear you need. May his worldly and fell shut. Will grow just the shoes pretty shoes of sloth.', 'beach.jpg', 'train.mp4', 'hsiang'),
(3, 'Left me something cooked.', 'left-me-something-cooked', 'Put out of merciless self-denial by great attention, be atoned for once a level.', 'beach.jpg', 'train.mp4', 'hsiang'),
(4, 'Thanked and at night.', 'thanked-and-at-night', 'Exposed himself by fasting is never been willing, greed from you able to perhaps you write poetry.', 'surfer.jpg', 'bus.mp4', 'varkel'),
(5, 'Monk as thought like diving into a whisper.', 'monk-as-thought-like-diving-into-a-whisper', 'Hut of despair I\'ve never one-sided, softly perhaps have rest now, knew that I\'m starting with equanimity. Seeing old eyes when a will tell me.', 'beach.jpg', 'train.mp4', 'varkel'),
(6, 'Attentively to teachings that you.', 'attentively-to-teachings-that-you', 'Salvation was foolish everyone can go any other, sir intent to he had experienced happiness to gather brushwood. To weave baskets saw returning what teaches many venerable teacher.', 'beach.jpg', 'bus.mp4', 'hsiang'),
(7, 'Beckoned him always rivers had experienced.', 'beckoned-him-always-rivers-had-experienced', 'Shall also developed a penitent, can go there sky out badly, tomorrow I recognise you make offerings and the. Spoke disembarking on it all.', 'beach.jpg', 'train.mp4', 'varkel'),
(8, 'Like those things in house with my pleasure-garden.', 'like-those-things-in-house-with-my-pleasure-garden', 'Yes several bows with ropes of dice, late he have this childlike-naive occupations of water said. Scent of causes sloth of life, without being dragged away time were spreading such hair.', 'palm_tree.jpg', 'bus.mp4', 'hsiang'),
(9, 'Simply thus alone without distrust.', 'simply-thus-alone-without-distrust', 'Old ferryman who walked along the sight of him, apparently he possessed so doomed was set him teach. Saw trees they parted from most base of thoughts.', 'surfer.jpg', 'train.mp4', 'varkel'),
(10, 'Sinner is still lacks.', 'sinner-is-still-lacks', 'Father thinking with deep solemnity he dreamed this entire world. Bent over his mistress that but many like him.', 'surfer.jpg', 'train.mp4', 'hsiang');

CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Nix', 'norrie.palasek@yahoo.com', 'Venorisslery', '2005-03-11 14:01:59'),
(2, 'Culverhouse', 'grissel.castell@hotmail.com', 'Orerow', '2014-05-10 15:29:35'),
(3, 'Devarennes', 'karly.huynh@gmail.com', 'Vernicemo', '2012-05-07 00:26:16'),
(4, 'Clost', 'aimil.corse@yahoo.com', 'Inakisu', '2000-10-26 07:20:28'),
(5, 'Loyd', 'indy.grund@outlook.com', 'Lusaduwcetu', '2011-05-05 22:42:26');

CREATE TABLE `SECTION` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Slug` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `SECTION` (`Id`, `Name`, `Slug`) VALUES
(1, 'Hsiang', 'hsiang'),
(2, 'Varkel', 'varkel'),
(3, 'Rosenthal', 'rosenthal');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'lacarcewo', 'Dreams for there thus deeply when you\'ll see, is coming back hour sped swiftly along. Someone is venerable thus this small one the business, haven\'t you have done differently there aren\'t capable of. But rather want to discover its title.'),
(2, 'munarmamay', 'Awakened I hate this reflected back for himself, gave advice but just to your eyes. O he could love the evening with fine clothes.'),
(3, 'olylevy', 'Harmony knowledge in such clothes are what your river. Latter had slowly he recognised this contradiction with this, soul when my beard and kindness looked through life.'),
(4, 'sikohnstau', 'Worry or forty different from drinking a smile, enchantment which guided his final and most people. Reached our kind his senses so irrefutably, sir always good or wetness of humans. Isn\'t every goal there stood still awaiting you.'),
(5, 'annowig', 'High canopy of spoke of sympathy many words, wisdom like an increasing rage and made yesterday. Must do many who ponderingly of life, read for possessions what word it this perfected man, beckoned him when they think spoke to capture it.');

CREATE TABLE `USER` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Email` TEXT NULL, 
  `Pseudonym` TEXT NULL, 
  `Password` TEXT NULL, 
  `IsAdministrator` TINYINT UNSIGNED NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `USER` (`Id`, `Email`, `Pseudonym`, `Password`, `IsAdministrator`) VALUES
(1, 'root@root.com', 'root', 'xyz', 1),
(2, 'terez.conerly@gmail.com', 'terezconerly', 'kamJ%o8p', 1),
(3, 'celisse.takiyanagi@mail.com', 'celissetakiyanagi', 'e8Y#rsi', 1),
(4, 'leroy.dawson@outlook.com', 'leroydawson', 'bucin+6luI', 1),
(5, 'christi.stemmler@live.com', 'christistemmler', '#albos9Lo', 0);

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

