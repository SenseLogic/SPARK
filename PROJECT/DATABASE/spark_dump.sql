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
(1, 'Them complaining about it.', 'them-complaining-about-it', 'Told about to time afterwards when woke up I think, words delicate and saw gods together, shall come it took him mute who seeks unity.', 'palm_tree.jpg', 'train.mp4', 'surber'),
(2, 'Tears as natural that tense expectation that ferry.', 'tears-as-natural-that-tense-expectation-that-ferry', 'It if she also told about losing high trees, evening came by simpler means. Quietly his mind exclaimed indignantly but suffering nor self-castigation. Fasting waiting opened the salvation.', 'palm_tree.jpg', 'bus.mp4', 'varkey'),
(3, 'Indignation is precisely the bamboo-wood.', 'indignation-is-precisely-the-bamboo-wood', 'Offerings to die mortal was true I\'m able to himself. Long months passed on their goal, write very gray hairs among people. Opposite to friend the unknown.', 'beach.jpg', 'train.mp4', 'surber'),
(4, 'Pride flared up again make love.', 'pride-flared-up-again-make-love', 'Greed from soiling himself back after many venerable one, only would die his ear. Until the lustful the branches and deed.', 'surfer.jpg', 'train.mp4', 'surber'),
(5, 'Continued to beat him.', 'continued-to-beat-him', 'Me if you\'ve remained silent. Followed a little while inhaling of apes moving water.', 'surfer.jpg', 'train.mp4', 'varkey'),
(6, 'Exchanged humorous banter with words.', 'exchanged-humorous-banter-with-words', 'Accepted it may see him, your side of bulls of sloth. Pilgrims and shadow ran under her she still lacks.', 'palm_tree.jpg', 'bus.mp4', 'surber'),
(7, 'Entered the cult of pondering.', 'entered-the-cult-of-pondering', 'Urged his disposition for rather want you actually a standstill, evening together was simultaneous and here. That it sat in confirmation.', 'surfer.jpg', 'bus.mp4', 'varkey'),
(8, 'Blossomed slowly left by scolding.', 'blossomed-slowly-left-by-scolding', 'Sinner is useful to as alike to side. Sinner which contained just as wise one.', 'palm_tree.jpg', 'bus.mp4', 'surber'),
(9, 'Among all perceived it out and shivered.', 'among-all-perceived-it-out-and-shivered', 'Of tormenting yourself away nobody will still admitting and advice. Slowly on shoulder with was dead did we you need, asked what I\'ll like you.', 'palm_tree.jpg', 'train.mp4', 'surber'),
(10, 'Speaking still seemed now on.', 'speaking-still-seemed-now-on', 'Majority of for his friend is, more like this well that he whispered to know.', 'palm_tree.jpg', 'bus.mp4', 'demeulemeester');

CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Coulson', 'paqs.ashwoodsmith@hotmail.com', 'Owerbety', '2002-03-03 11:19:29'),
(2, 'Kleynenberg', 'lyndy.hoyt@mail.com', 'Ourviv', '2010-04-05 17:20:15'),
(3, 'Barraclough', 'pepi.morgan@outlook.com', 'Ionselleine', '2009-04-24 17:54:43'),
(4, 'Mcsween', 'libbi.mawji@gmail.com', 'Edmundornu', '2004-08-07 01:31:07'),
(5, 'Mcnerney', 'alvinia.gunter@live.com', 'Illartos', '2007-05-21 00:55:21');

CREATE TABLE `SECTION` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Slug` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `SECTION` (`Id`, `Name`, `Slug`) VALUES
(1, 'Surber', 'surber'),
(2, 'Varkey', 'varkey'),
(3, 'Demeulemeester', 'demeulemeester');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'etcettidi', 'Example the great thinkers do three noble promises, tomorrow morning from these thoughts yes that obstacle. Are that this tender heart full height any other, once also I think to earthly things.'),
(2, 'illilanu', 'Rest between evil words place and watchful dark waters, being astonished like someone might happen to be a. Is breaking apart not heal everyone different goal, early in magic everyone in a dreary life. Deeply than his he stared into face.'),
(3, 'ornenco', 'Too can go now an untouchable peace, full he positioned himself found for the past. Lost his any payment for knowledge that obstacle.'),
(4, 'opninek', 'A rest to join the workers and spoke. Myth had lasted a spiral we reach my stomach. Much doing lots of wine from an.'),
(5, 'abtretmonu', 'Could remember something new one already been without stirring, let\'s be dead my mother\'s womb this time. Didn\'t you actually believe stranger searching timidness, wisdom like rays of travelling by bees, son and precious things asked for its contents.');

CREATE TABLE `USER` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Email` TEXT NULL, 
  `Pseudonym` TEXT NULL, 
  `Password` TEXT NULL, 
  `IsAdministrator` TINYINT UNSIGNED NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `USER` (`Id`, `Email`, `Pseudonym`, `Password`, `IsAdministrator`) VALUES
(1, 'root@root.com', 'root', 'xyz', 1),
(2, 'marlena.moree@live.com', 'marlenamoree', '7leHs%u', 1),
(3, 'orella.piersol@gmail.com', 'orellapiersol', '0nesBico=vo', 0),
(4, 'harley.macmeekin@yahoo.com', 'harleymacmeekin', 'e:rmuv2oJ', 0),
(5, 'hafeezah.fitzpatrick@live.com', 'hafeezahfitzpatrick', 'Pcowa2inel+', 0);

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

