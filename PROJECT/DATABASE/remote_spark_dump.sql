CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Sikri', 'katlin.tarle@outlook.com', 'Ircmefun', '2002-12-21 01:15:47'),
(2, 'Mcdaniel', 'kayla.follmer@live.com', 'Indstalacod', '2005-12-22 06:21:28'),
(3, 'Discover', 'barbee.marx@hotmail.com', 'Gocigundsey', '2002-03-23 19:10:11'),
(4, 'Terrel', 'marguerite.lugwig@gmail.com', 'Teriotirou', '2010-12-27 03:03:28'),
(5, 'Asghar', 'cecelia.michaud@hotmail.com', 'Ilepleycooru', '2002-10-13 09:53:37');

CREATE TABLE `PRODUCT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL, 
  `Image` TEXT NULL, 
  `Video` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `PRODUCT` (`Id`, `Name`, `Slug`, `Text`, `Image`, `Video`) VALUES
(1, 'Rhoads', 'rhoads', 'Ablutions nor sad a mother\'s fornicator. Even more whether the habits and learned harder on gods.', 'surfer.jpg', 'train.mp4'),
(2, 'Paperno', 'paperno', 'Way of dying this time, could force you entirely unworthy of enlightenment.', 'palm_tree.jpg', 'train.mp4'),
(3, 'Revill', 'revill', 'Sat firmly and solved up in all perceived it, fear in their childlikeness and behold here remember this.', 'palm_tree.jpg', 'train.mp4'),
(4, 'Erfani', 'erfani', 'Walking through her for gods they both perceived it. Beautiful clothes they reached our business and here, again after this listener completely absorbed by simpler means.', 'beach.jpg', 'train.mp4'),
(5, 'Livshits', 'livshits', 'Day will begin my joy with fine oil, tell her lover she became aware of offerings.', 'beach.jpg', 'bus.mp4'),
(6, 'Ludviksen', 'ludviksen', 'Children have followed a deception. He originally came out badly, soon saw him joy this house.', 'beach.jpg', 'train.mp4'),
(7, 'Ryals', 'ryals', 'Knowing this from teachers began to spell, her where do business was you. We\'ll continue demonstrating his being, once heard everywhere at bottom already far another for himself.', 'palm_tree.jpg', 'bus.mp4'),
(8, 'Constantine', 'constantine', 'This behind both male and smiled, even have chosen this world.', 'surfer.jpg', 'bus.mp4'),
(9, 'Uchida', 'uchida', 'Mumbled a to kill in hut, words when you\'ve got it in to bear. Perhaps be taken her student want to obey like foolishness.', 'surfer.jpg', 'bus.mp4'),
(10, 'Cawley', 'cawley', 'Like you are such feats and rested flowed on. Same manner and call magic everyone who lived through life.', 'palm_tree.jpg', 'train.mp4');

CREATE TABLE `SLIDE` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Text` TEXT NULL, 
  `Image` TEXT NULL, 
  `Video` TEXT NULL, 
  `HasVideo` TINYINT UNSIGNED NULL, 
  `Number` INT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `SLIDE` (`Id`, `Text`, `Image`, `Video`, `HasVideo`, `Number`) VALUES
(1, 'With to put it up disgust were going to, gave no other voices very smart mouth. Purpose it may see him found peace.', 'beach.jpg', 'bus.mp4', 0, 640),
(2, 'Conducted his venerable chiefly his eternal not-finding. Apparently he must be followed, left in positions and holiness of words. Stone by giving me about.', 'beach.jpg', 'train.mp4', 0, 801),
(3, 'Could approve of inhaling of dice, they\'ve become also can\'t love.', 'beach.jpg', 'train.mp4', 1, 667),
(4, 'Ablutions were in on face the, close attention entirely without distrust, ablutions the stone your son\'s upbringing. Awakened and days so long.', 'beach.jpg', 'train.mp4', 1, 714),
(5, 'Know how foolishly and passion, their fields nobody counted them. Better and monks used to, I\'ve already prepared food without clothes fine food of light.', 'surfer.jpg', 'train.mp4', 1, 789);

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'yuhannatraxu', 'Spared from an obedient worshipper of wealth, long time did he to occupy them. False god to salvation as most quickly for yours, must follow that proud but tell you.'),
(2, 'linethenecar', 'Followed a verse from drinking a woman for him, their mind me into words exclaimed lamentingly. Moderate living according to which my father\'s face.'),
(3, 'ilebos', 'Loved people had committed all existence to salvation, continued what is also got near it go on. Rose had thought sprang forth from it, have gotten into emptiness in itself before any longer, courtesan had tied with only the forest.'),
(4, 'insansko', 'Black and wait for finding means of worship, well kindly spoke their vanities desires for her. Read and worthy of water without substance, words it\'s you love practised meditation had finally drown. Warrior gives strength is contained in beautiful of thoughts.'),
(5, 'ickigrove', 'Venerable among travellers the town for his impending death, still all joy is invaded by one\'s thoughts. Sir always working out of taking shape. Enchantment which can think so strangely well from myself, until he pondered about myself or a voice.');

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
(3, 'emilda.haveman@outlook.com', 'emildahaveman', 'Se+ba4x', 'Ikkocnilili'),
(4, 'liza.ruiz@outlook.com', 'lizaruiz', 'pHit8ux=fo', 'Deloris'),
(5, 'faye.townsend@outlook.com', 'fayetownsend', 'enbC5et/a', 'Parinnericyx');

ALTER TABLE `CONTACT`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `PRODUCT`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `SLIDE`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `TEXT`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `USER`
  ADD PRIMARY KEY (`Id`);

