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
(1, 'Don\'t forget him committed your direction.', 'don-t-forget-him-committed-your-direction', 'What\'s the gesture every fruit to destroy himself, sleep filled it at him. First news of an undefeatable feats, or five the pleasures of lustre saw mankind going nowhere.', 'palm_tree.jpg', 'bus.mp4', 'spinks'),
(2, 'Passed on wherever to side.', 'passed-on-wherever-to-side', 'Image the beautiful things are coming back inside, nothing will read in hut with all secrets.', 'palm_tree.jpg', 'train.mp4', 'spinks'),
(3, 'Wondrous teachings sound stirred up.', 'wondrous-teachings-sound-stirred-up', 'Next person loving agreement with, nevertheless broken out motionless face he slept on foot, cared little child so will meditate. Exchanged humorous banter with you shall find him teach me.', 'surfer.jpg', 'bus.mp4', 'sanche'),
(4, 'They shall all stay thought of despair.', 'they-shall-all-stay-thought-of-despair', 'Thinking precisely the laughter of sleep, cannot deny my longing to receive. Son laughed just travelling on and bad people can\'t.', 'palm_tree.jpg', 'bus.mp4', 'spinks'),
(5, 'Their relative positions \'ere the body of wealth.', 'their-relative-positions-ere-the-body-of-wealth', 'The end my knees let him safe, walked over as yesterday of all, shouldn\'t I couldn\'t you yesterday. Ran somewhere behind its flow of strength his students.', 'surfer.jpg', 'bus.mp4', 'byrgesen'),
(6, 'Without judgement without making a charming omen.', 'without-judgement-without-making-a-charming-omen', 'Deaf and spoke quietly to them died a river, non-eternal things can do it. Cared little to any further, well this we lived for it.', 'beach.jpg', 'train.mp4', 'byrgesen'),
(7, 'That\'s not reach their pouches.', 'that-s-not-reach-their-pouches', 'Listen up but so where was absorbing his skin, aren\'t you followers of it already. Thinking people look upon it fly, walking took a monk in bed which all life.', 'beach.jpg', 'bus.mp4', 'byrgesen'),
(8, 'Gloomy disposition since I read this house.', 'gloomy-disposition-since-i-read-this-house', 'Both of humans in this bird is settled. Heard the dust had dreamt of worship.', 'surfer.jpg', 'bus.mp4', 'sanche'),
(9, 'Arriving at every goal is like this.', 'arriving-at-every-goal-is-like-this', 'Also to show his arms were on hers. Broke loose embraced him went to lose him, broke loose embraced the fire burnt the brown.', 'palm_tree.jpg', 'train.mp4', 'byrgesen'),
(10, 'Failed to meet on one also fear.', 'failed-to-meet-on-one-also-fear', 'Stood up water they accepted invitation, entered for their wisdom that had split the unknown. Me go it away every month a child. Truly I recognise me myself.', 'beach.jpg', 'train.mp4', 'byrgesen');

CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Winnington', 'gunfer.kenik@outlook.com', 'Elmsorgeshir', '2014-07-28 14:42:23'),
(2, 'Trachsel', 'franklyn.pendergraft@yahoo.com', 'Almetaj', '2013-09-11 05:42:51'),
(3, 'Lorint', 'ursa.redshaw@outlook.com', 'Gelensorkel', '2013-09-22 15:14:39'),
(4, 'Fritz', 'suki.cochrane@hotmail.com', 'Ergodewen', '2015-02-12 03:02:41'),
(5, 'Broadhead', 'dido.beresnikow@hotmail.com', 'Oonenguarei', '2006-02-05 14:03:32');

CREATE TABLE `SECTION` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Slug` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `SECTION` (`Id`, `Name`, `Slug`) VALUES
(1, 'Byrgesen', 'byrgesen'),
(2, 'Sanche', 'sanche'),
(3, 'Spinks', 'spinks');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'estferdotera', 'Close to worship in memory he saw, image and know yet did you say, many forms without mockery with fine oil. Followed a skeleton turned out with this.'),
(2, 'jakura', 'Most and became calm hearts of wise one, was shimmering in themselves floated along pondered. You\'ll again have thought that other one, propelling themselves floated along your mother of pondering. Stared at he liked a of sloth.'),
(3, 'ettibi', 'Got there before any goals all voices more, secretly he cowered in living joy at home, today only because I have marked your father. An end my eyes beheld a river.'),
(4, 'eenbuvi', 'Laughed brightly and beautifully her situation remembered them, daily he worked with wide golden cage. Monk looked upon himself without suffering began, cannot be that loss his gestures of all. Sadness has no enlightenment had gotten into face.'),
(5, 'erjilali', 'This once said from foolishness of physical forms, questions but one already filled his chin. We\'ll hear much were now nothing more question. Times were getting lost money wasted life isn\'t it.');

CREATE TABLE `USER` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Email` TEXT NULL, 
  `Pseudonym` TEXT NULL, 
  `Password` TEXT NULL, 
  `IsAdministrator` TINYINT UNSIGNED NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `USER` (`Id`, `Email`, `Pseudonym`, `Password`, `IsAdministrator`) VALUES
(1, 'root@root.com', 'root', 'xyz', 1),
(2, 'charene.moreland@hotmail.com', 'charenemoreland', '+ubb1leAlde', 0),
(3, 'cheeyin.altherr@outlook.com', 'cheeyinaltherr', 'sak=eJ1de', 1),
(4, 'merci.uhlig@hotmail.com', 'merciuhlig', 'et4%tFi', 0),
(5, 'zouheir.efland@mail.com', 'zouheirefland', '7carDich.te', 0);

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

