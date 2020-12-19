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
(1, 'Monk and took his peace and old face.', 'monk-and-took-his-peace-and-old-face', 'Sacrifices give up a conceited father felt hope be committed, propelling themselves and have never talked about in them too. Accustomed to a kiss it must be this time.', 'surfer.jpg', 'train.mp4', 'esteghamat'),
(2, 'Majority of for finding.', 'majority-of-for-finding', 'Entire eternal search able to hell than such feats, pilgrims shall teach them from and dissolved in return.', 'surfer.jpg', 'train.mp4', 'kromer'),
(3, 'Have sought shelter and precocious words.', 'have-sought-shelter-and-precocious-words', 'Do not from soil and teach you, distant high stakes that ferry. Putting himself standing behind him, nothing burned any specific intention regarded as yesterday and smiled.', 'palm_tree.jpg', 'bus.mp4', 'odea'),
(4, 'Taught thoroughly understand yet you yesterday.', 'taught-thoroughly-understand-yet-you-yesterday', 'That\'s not kid me asking, you told to that his work beautiful, means of boars of lust and knows just concealed putrefaction.', 'beach.jpg', 'bus.mp4', 'odea'),
(5, 'They may go as `learning\'.', 'they-may-go-as-learning', 'Like only travelled to the. Were long years as divine lived for staying in hut, tomorrow I couldn\'t recognise the courtesan and disgust were willing.', 'surfer.jpg', 'train.mp4', 'esteghamat'),
(6, 'If I don\'t just slowly he started talking.', 'if-i-don-t-just-slowly-he-started-talking', 'Afterwards when someone asked himself appeared on pilgrimages in return, bid him walking among girls the cistern the universe, them out this he talked about his modesty the splendid. Stone was trembling softly touched shoulder.', 'surfer.jpg', 'train.mp4', 'kromer'),
(7, 'Entire body was near goals the poison.', 'entire-body-was-near-goals-the-poison', 'O he always working out its death, often far ahead of teachings.', 'beach.jpg', 'bus.mp4', 'esteghamat'),
(8, 'Name any around that night here.', 'name-any-around-that-night-here', 'Suddenly as never listened in past and gullibly the gamblers, name neither sleep any person of why these teachings. Somehow happened inside and wishes of coming back.', 'beach.jpg', 'bus.mp4', 'odea'),
(9, 'Too spoke stammeringly a passion of desires.', 'too-spoke-stammeringly-a-passion-of-desires', 'Still and weighed it teaches many other loving agreement with. Fear with those feats to meet with brawny arms, must build a flowing did I know. Thoughts of something else giving me some secret of.', 'surfer.jpg', 'bus.mp4', 'odea'),
(10, 'That\'s everything can learn.', 'that-s-everything-can-learn', 'Yesterday greeting me something for himself, questions he hung over came back.', 'beach.jpg', 'train.mp4', 'kromer');

CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Bossett', 'amando.james@outlook.com', 'Astranfettel', '2009-02-07 04:43:57'),
(2, 'Munn', 'jorey.laprade@outlook.com', 'Efogilu', '2000-10-25 05:26:23'),
(3, 'Padilla', 'quyen.fani@yahoo.com', 'Arhubalisijo', '2015-12-22 09:40:40'),
(4, 'Flach', 'cynthy.parks@gmail.com', 'Elapaa', '2009-07-09 11:13:40'),
(5, 'Fiest', 'lonee.belford@live.com', 'Ahleslaah', '2008-11-05 14:44:25');

CREATE TABLE `SECTION` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Slug` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `SECTION` (`Id`, `Name`, `Slug`) VALUES
(1, 'Odea', 'odea'),
(2, 'Esteghamat', 'esteghamat'),
(3, 'Kromer', 'kromer');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'applephil', 'Sacrifices and contracts on it said quietly, knew many an untouchable peace and spoke. Somehow happened that mouth nor was necessary, dreams empty like holiness to free will fall asleep.'),
(2, 'afflabjabak', 'Two days in learning this he punished by many, have you get it yes several steps. Went troubled into which they may see him.'),
(3, 'vanainlage', 'It\'s true essence did this soft bed, understood that but eternal thirst overcame the sacrificial songs. Boy stronger was getting close to my stomach, stared at her refuge in kissing which they parted.'),
(4, 'novabe', 'Looking up the knowledgeable of good as wise one, carefully he expresses bizarre person who seek knowledge, now on stiff legs greeting his decision in ear. Life wise and even became her or that obstacle.'),
(5, 'heydoni', 'As far off all there looked up impetuously hunting, he\'ll return there among the course to finally said. Accustomed to others tell me honourable one.');

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
(3, 'allsun.leavitt@live.com', 'allsunleavitt', 'p2Q,osa', 'Nererdid'),
(4, 'elmar.simms@gmail.com', 'elmarsimms', ',w3esiRnnes', 'Muffinanti'),
(5, 'aleece.longo@yahoo.com', 'aleecelongo', 'mYaji1^d', 'Ecsniver');

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

