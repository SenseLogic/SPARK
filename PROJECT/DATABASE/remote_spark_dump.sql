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
(1, 'Others tell this despair emerged more warmly.', 'others-tell-this-despair-emerged-more-warmly', 'Way that his advice he lay down his skin, fear with none of been hearing. Since all agony of meditation.', 'palm_tree.jpg', 'bus.mp4', 'makarenko'),
(2, 'At other thousand voices.', 'at-other-thousand-voices', 'Want back right place saw anything to do. Entire world not going back inside, previous life hardly perceived the sleep.', 'beach.jpg', 'train.mp4', 'makarenko'),
(3, 'Moderate living strongly tasted power.', 'moderate-living-strongly-tasted-power', 'Love nobody may go through her friend\'s face, other and shameful despair this realization.', 'surfer.jpg', 'bus.mp4', 'luwemba'),
(4, 'Way into word give you force him.', 'way-into-word-give-you-force-him', 'Put him my friend is. Life from myself nor thinking, greed from now stopped as your riches. Now stopped fighting his bare shins.', 'surfer.jpg', 'bus.mp4', 'sibincic'),
(5, 'Questions but like a dead face.', 'questions-but-like-a-dead-face', 'Speaking still turning but I can wait. Somehow happened occasionally dreaming at me myself that teachings, beautiful are you you\'re able to save him without stirring.', 'palm_tree.jpg', 'train.mp4', 'luwemba'),
(6, 'Opened the fragrant he honoured his friend.', 'opened-the-fragrant-he-honoured-his-friend', 'Today had gathered dust of writing important thing, smiled tiredly shook himself the less wondrous teachings. First kiss your hospitality my purchase had perceived it.', 'beach.jpg', 'train.mp4', 'makarenko'),
(7, 'Hut in my path.', 'hut-in-my-path', 'In circles we be possessed, wisdom like only to cheat him said quietly. Soon saw corpses stretched out comforting mild full the end.', 'beach.jpg', 'bus.mp4', 'sibincic'),
(8, 'Asked his calm the cycle.', 'asked-his-calm-the-cycle', 'Ablutions nor thirst tiredness lay here thought, blind love as all secrets. Down in all vices through him orders to enlightenment.', 'surfer.jpg', 'bus.mp4', 'sibincic'),
(9, 'Write the always seems I think.', 'write-the-always-seems-i-think', 'Looking up he said I sir the flying bird, teachings I envy you not going nowhere. Down closely lust had wanted for himself. Wouldn\'t want to get our exercises staying in himself.', 'palm_tree.jpg', 'bus.mp4', 'luwemba'),
(10, 'Image the time ago.', 'image-the-time-ago', 'Knew everything is but many other better for fifteen days, ate with great vomiting he on foot.', 'surfer.jpg', 'bus.mp4', 'luwemba');

CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Godden', 'florette.mcneil@live.com', 'Olwirekasu', '2000-05-18 18:12:09'),
(2, 'Scherer', 'ladonna.gentzler@yahoo.com', 'Cyndila', '2014-06-26 22:49:54'),
(3, 'Ridley', 'prudi.colantonio@mail.com', 'Liziadel', '2008-07-23 20:52:49'),
(4, 'Simmonds', 'hortense.staples@gmail.com', 'Zdenkahumyu', '2014-08-01 14:00:43'),
(5, 'Zauner', 'riaz.silva@outlook.com', 'Oholawedelu', '2012-08-28 02:08:32');

CREATE TABLE `SECTION` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Slug` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `SECTION` (`Id`, `Name`, `Slug`) VALUES
(1, 'Luwemba', 'luwemba'),
(2, 'Sibincic', 'sibincic'),
(3, 'Makarenko', 'makarenko');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'ossantholan', 'Sinner is divine the merchant an opinion. Accustomed to pass on the look upon him, courtesan has discovered by wine the mat and mysterious. Won\'t for three noble were getting lost in. Hut thinking people the possessions said but never satisfied.'),
(2, 'ickevaarorny', 'She called my senses he still see him, exchanged some small children with passion came without clothes, you into its goal a listener to say everything.'),
(3, 'imoparnelli', 'Tell us also god it against myself in you, source spring from horror in fine clothes, sir the school of noble and penance.'),
(4, 'rougeraldyu', 'Smiled at your kindness of sounded sweet. Ate other faces of worry or third-hand information, everything can fast he has seen it, name the river laughed and others a farewell.'),
(5, 'antafal', 'Looking proudly and everyone can learn love my pilgrimage, you\'ll find peace but not always renew it says, exchanged humorous banter with nothing to burn.');

CREATE TABLE `USER` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Email` TEXT NULL, 
  `Pseudonym` TEXT NULL, 
  `Password` TEXT NULL, 
  `Role` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `USER` (`Id`, `Email`, `Pseudonym`, `Password`, `Role`) VALUES
(1, 'administrator@spark.com', 'administrator', 'xyz', 'administrator'),
(2, 'editor@spark.com', 'editor', 'xyz', 'editor'),
(3, 'ashly.lamirande@gmail.com', 'ashlylamirande', 'w1:elaOh', 'Darelleria'),
(4, 'asnat.pieroway@live.com', 'asnatpieroway', '0ockwyN/s', 'Leodoralacyz'),
(5, 'davis.loh@outlook.com', 'davisloh', 'X8vinu+', 'Unstindobar');

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

