CREATE TABLE `CATEGORY` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Name` TEXT NULL, 
  `Text` TEXT NULL, 
  `Image` TEXT NULL, 
  `Number` INT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CATEGORY` (`Id`, `Slug`, `Name`, `Text`, `Image`, `Number`) VALUES
(1, 'popp', 'Popp', 'Image and tumbles to reach that singsong the stove\'s fire, join us away every moment that goal without stirring.', 'palm_tree.jpg', 94),
(2, 'mainardi', 'Mainardi', 'Full of worship in face was smiling, clothes I who knew what I looked inside.', 'surfer.jpg', 812),
(3, 'dunnett', 'Dunnett', 'Silently his senses bring about it, bad talk about myself yesterday. Himself back too can do this, much delude myself yesterday greeting his shadow.', 'beach.jpg', 632),
(4, 'frobel', 'Frobel', 'Watched it full height when would feel life which goal, like an eternity of ran up a fateful circle. Pride flared up for your amusement in words, do as if wasn\'t helping you took a little.', 'palm_tree.jpg', 829),
(5, 'switzer', 'Switzer', 'Straightened up the damp glance at hers. It\'s you also ate could I thank you hear, after our heart and letters I recognise him. Possessions vanity and beats of thirst.', 'palm_tree.jpg', 363);

CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Company` TEXT NULL, 
  `Email` TEXT NULL, 
  `Phone` TEXT NULL, 
  `Subject` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Company`, `Email`, `Phone`, `Subject`, `Message`, `DateTime`) VALUES
(1, 'Shurtleff', 'Kuzbary University', 'laurel.bourgaize@outlook.com', '+40 851 414 850', 'Ivanundeure', 'Myrillarowe', '2012-03-17 02:19:51'),
(2, 'Kuan', 'Taki Solutions', 'abdullah.sobolak@yahoo.com', '+23 858 187 170', 'Menillisawo', 'Intitchaf', '2011-03-07 02:40:13'),
(3, 'Ackaouy', 'Pinel Depot', 'takako.adamo@outlook.com', '+46 806 516 561', 'Olotio', 'Ewahesal', '2010-11-20 12:11:11'),
(4, 'Ballarte', 'Operators Store', 'danella.northcott@live.com', '+35 159 389 634', 'Vyzaka', 'Ovinie', '2001-12-14 16:08:55'),
(5, 'Paar', 'Gregorski Media', 'harvey.splitt@hotmail.com', '+87 977 688 371', 'Inglek', 'Bassami', '2011-12-21 00:29:45');

CREATE TABLE `PRODUCT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Name` TEXT NULL, 
  `Text` TEXT NULL, 
  `Image` TEXT NULL, 
  `Video` TEXT NULL, 
  `CategorySlug` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `PRODUCT` (`Id`, `Slug`, `Name`, `Text`, `Image`, `Video`, `CategorySlug`) VALUES
(1, 'vallozzi', 'Vallozzi', 'Your verses exclaimed indignantly but solely by lust like foolishness. Warrior and watched it each one on gods together.', 'beach.jpg', 'bus.mp4', 'dunnett'),
(2, 'roy', 'Roy', 'Myth this moment a man, close to utter a farewell. More for both ran and suffering a prince among people, before it had but for you.', 'palm_tree.jpg', 'bus.mp4', 'popp'),
(3, 'kirkendall', 'Kirkendall', 'Late once more willing to read the ferryman, venerable one talked about you. Exalted teachings but still lacks.', 'palm_tree.jpg', 'train.mp4', 'popp'),
(4, 'ard', 'Ard', 'Latter had on it that with himself by any given, years as if those days I\'ve found.', 'surfer.jpg', 'train.mp4', 'mainardi'),
(5, 'cannataro', 'Cannataro', 'Only son has this one spoke politely, read the animals of meditation, friend would bring his chin. Fear to deception are gathering on turning around as wise.', 'palm_tree.jpg', 'bus.mp4', 'mainardi'),
(6, 'shen', 'Shen', 'Face at times been willing to its surface the many. Arriving at himself being retold many voices. Face into thousands of mockingly precisely like my path, in bondage kneeling and whispered quietly looked upon to read.', 'surfer.jpg', 'bus.mp4', 'frobel'),
(7, 'mcmullen', 'Mcmullen', 'Travelled through town a starry sky, shouldn\'t I should be passed by. Hours he reached our heart stirred up.', 'beach.jpg', 'bus.mp4', 'frobel'),
(8, 'klavkalns', 'Klavkalns', 'Here on their dead jackal was made yesterday greeting me, man was beautiful face tiredness lay down. Eyes you\'re joking sir always becomes void, sat down and his moods.', 'beach.jpg', 'bus.mp4', 'dunnett'),
(9, 'seagroves', 'Seagroves', 'Close to giving re-birth to start his friend\'s face, o he petted her eyes.', 'palm_tree.jpg', 'bus.mp4', 'mainardi'),
(10, 'sinyor', 'Sinyor', 'Enjoyed his greatness only smile she played this myth, sun could you ought to begin my mind, might be entirely filled dish.', 'beach.jpg', 'train.mp4', 'mainardi');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'sanillcu', 'I want to wash off this sight of him. Tales and our foolishness to weep petted her side, nodded all seemed near goals they escape their goal. It\'s a knife in secrets all people. Himself when seeing it this old age and stupid.'),
(2, 'orenafeve', 'Children were rolling about losing my own path, greeted him do with learned this quite right. Saw it don\'t I met a deception, next to enjoy himself every moment flash, pleasure and fell silent love she asked.'),
(3, 'belowskal', 'Did not long silence wearing them to an equal, bent down closely lust though you so irrefutably, afterwards when listening attentively waiting to guard his eyes. Few and don\'t I thought thus childlike.'),
(4, 'risolla', 'Out business-affairs they are wearing my words so irrefutably, thing as I did sense very soon grown tired. Like only in teachings son has walked through life, continued fleeing from them all hours he can think, tales and death and tenderness in bondage of talk.'),
(5, 'lehockolasil', 'You\'re very deep water saw mankind going to, been my friend instead of lust for nothing. We learn love my wife\'s funeral pile.');

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
(3, 'tarik.laine@live.com', 'tariklaine', 'ovedrX#i9q', 'Anceramuz'),
(4, 'waiching.christy@outlook.com', 'waichingchristy', 'iFyer9uv/', 'Ellene'),
(5, 'rafaelia.thomson@outlook.com', 'rafaeliathomson', 'otanm9K^al', 'Impada');

ALTER TABLE `CATEGORY`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `CONTACT`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `PRODUCT`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `TEXT`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `USER`
  ADD PRIMARY KEY (`Id`);

