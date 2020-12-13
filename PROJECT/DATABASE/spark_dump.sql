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
(1, 'Man without possession and spiritual than learning.', 'man-without-possession-and-spiritual-than-learning', 'Suddenly and disappointment then have escaped that obstacle, these simple man without stirring, you\'ll again I do know what.', 'surfer.jpg', 'train.mp4', 'wickie'),
(2, 'Senses he watched it says.', 'senses-he-watched-it-says', 'Years simply believed his light shoulders almost none. Next morning distant son my own.', 'surfer.jpg', 'train.mp4', 'stars'),
(3, 'Might perhaps be warned him do so.', 'might-perhaps-be-warned-him-do-so', 'Cared little boy himself in you, near the beautiful woman for twenty-eight days. Sir it sounded new body.', 'palm_tree.jpg', 'bus.mp4', 'stars'),
(4, 'Early in kissing which was.', 'early-in-kissing-which-was', 'Putting me across the time the father, fasting what had the scene of thoughts yes and peace.', 'surfer.jpg', 'train.mp4', 'wickie'),
(5, 'As strong the speaker sensed an infinitely meaningless.', 'as-strong-the-speaker-sensed-an-infinitely-meaningless', 'An immense burst of events was an act is the, silently spoke one many years.', 'surfer.jpg', 'bus.mp4', 'wickie'),
(6, 'Tomorrow he smiled too.', 'tomorrow-he-smiled-too', 'For exalted spoke I know him, kindly spoke with laughter of words.', 'surfer.jpg', 'bus.mp4', 'wickie'),
(7, 'Thinking his slim hips.', 'thinking-his-slim-hips', 'Ah you pilgrims were constant arrivals shouts and accept. Example hadn\'t learned something honourable one another, any teachings require this or mask of these wretched people.', 'beach.jpg', 'train.mp4', 'stars'),
(8, 'Wondrous words exclaimed loudly.', 'wondrous-words-exclaimed-loudly', 'Boat back again submerged and ridiculous aspects were reached them, black snake was defeated and abused by many. Perhaps to get to sleep badly.', 'beach.jpg', 'bus.mp4', 'stars'),
(9, 'Yes several times for him.', 'yes-several-times-for-him', 'Simply thus venerable thus simply believed his eternal itself, yesterday wear a beautiful girl, wavered to bathe in love as wise. Behold with wide water without thirst felt fear.', 'surfer.jpg', 'bus.mp4', 'wickie'),
(10, 'Know many secrets all his work beautiful.', 'know-many-secrets-all-his-work-beautiful', 'Greed from those childlike person, moderate living strongly living by simpler means that time. Has been presented so right. Leapt in him in hut.', 'palm_tree.jpg', 'bus.mp4', 'wickie');

CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Popoff', 'doug.elam@live.com', 'Acqutheva', '2001-09-15 05:48:15'),
(2, 'Smook', 'nina.rodschat@yahoo.com', 'Leatetruhin', '2010-12-10 13:32:58'),
(3, 'Stephens', 'tallou.fanus@outlook.com', 'Ganerijo', '2011-10-10 02:44:38'),
(4, 'Husarewych', 'herbie.rappoport@hotmail.com', 'Jewamo', '2005-12-28 17:12:58'),
(5, 'Brandvold', 'noami.rosch@outlook.com', 'Iwaszopinski', '2005-02-23 21:46:59');

CREATE TABLE `SECTION` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Slug` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `SECTION` (`Id`, `Name`, `Slug`) VALUES
(1, 'Milne', 'milne'),
(2, 'Wickie', 'wickie'),
(3, 'Stars', 'stars');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'ruthiz', 'Tell me an error that long detour from me. Mouth I\'m only requires my benefactor spoke quietly to, distant memory had obeyed her fan of physical forms.'),
(2, 'erndtonsuw', 'Straightened up money had received thanks to give. Bold is breaking apart again his head, accepted the tree your thoughts of thinking the morning.'),
(3, 'iskejbechte', 'Monks and restless thoughts brought upon him except. Enchantment which the irreproachable one place filled dish. Out and straightened up but he felt. Exchanged humorous banter with none of is life, what would understand this though you make love.'),
(4, 'woodidgekem', 'Courtesan and bees wind reaches them all, nodded in which teaches nothing quietly to. Loved eye and prays the curious more question, let him thinking with thinking these reports, fully understanding what a boy did this she him.'),
(5, 'erlieldadi', 'Again you\'re mocking himself something good friends, failed to some moments a lack of physical form. All teachings for your work beautiful pleasure-garden, childlike thus you or else than twenty paces away. Non-eternal things most shameful life told me being.');

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
(3, 'cen.kimoto@outlook.com', 'cenkimoto', 'ar1.riptiUv', 'Hananchemen'),
(4, 'nuri.gareis@live.com', 'nurigareis', 'om5Mal=e', 'Apedib'),
(5, 'vanni.banaei@outlook.com', 'vannibanaei', 'feneFtt6e,', 'Ogirkeyvitod');

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

