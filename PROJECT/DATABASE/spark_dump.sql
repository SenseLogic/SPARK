CREATE TABLE `CATEGORY` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Name` TEXT NULL, 
  `Text` TEXT NULL, 
  `Image` TEXT NULL, 
  `Number` INT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CATEGORY` (`Id`, `Slug`, `Name`, `Text`, `Image`, `Number`) VALUES
(1, 'mulder', 'Mulder', 'Or discard them my senses, hours he the thirst and feeling of oneness. They\'ve become great love her tender supple willingness my destiny, an hour whether there still has not touch and beggar.', 'surfer.jpg', 828),
(2, 'instal', 'Instal', 'Surrounded by yourself by disciples venerable one, they\'ve become of coconut-milk he at other thousand times, don\'t I find rest desired to his life. Won\'t hit me since his fear that exalted one\'s heart.', 'surfer.jpg', 97),
(3, 'dafoe', 'Dafoe', 'Can also being so many like my mind. No images appeared lonely he positioned himself listened silently, questions but for the fisher fish jumped in heat.', 'beach.jpg', 118),
(4, 'konno', 'Konno', 'Felt the shadow rose from horror, offerings for expressing this foolishness to destroy himself. Worry in speaking I thought, I\'m telling me myself any specific intention regarded as true.', 'palm_tree.jpg', 586),
(5, 'bonney', 'Bonney', 'To consciousness thus similar he to friend. Not heed his fears the healing potion, somehow happened occasionally he returned in them too. World I not last day exalted teacher for me.', 'surfer.jpg', 562);

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
(1, 'Tropeano', 'Hollack Insurance', 'katherine.postlethwaite@outlook.com', '+33 276 314 441', 'Ancongel', 'Pietartko', '2005-10-14 03:19:25'),
(2, 'Bernardi', 'Schartmann Factory', 'sluis.betterley@outlook.com', '+97 221 931 550', 'Iongerguc', 'Tianathewawe', '2008-03-10 23:14:12'),
(3, 'Vallee', 'Beaton Shop', 'chung.guthro@gmail.com', '+95 970 636 952', 'Egondboiso', 'Ildetrud', '2008-07-27 09:01:54'),
(4, 'Brosselard', 'Mitchell Team', 'freddi.pezzoli@hotmail.com', '+15 902 617 167', 'Alabeli', 'Ussatarajeu', '2004-11-21 09:11:35'),
(5, 'Viduya', 'Forbrich Media', 'eran.keiser@outlook.com', '+84 705 875 717', 'Woovan', 'Jevanir', '2010-03-15 09:00:57');

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
(1, 'uberig', 'Uberig', 'Remained a world but one spoke, bowed touching him she him.', 'beach.jpg', 'train.mp4', 'konno'),
(2, 'beconovich', 'Beconovich', 'Accepted the eternal in confirmation. Arriving at yourself away every joyful desire, pride flared up for him except to make love.', 'surfer.jpg', 'bus.mp4', 'dafoe'),
(3, 'wurtz', 'Wurtz', 'Sadness and wavers and flourishing was it, fled by which separated him rejected him asleep.', 'beach.jpg', 'train.mp4', 'mulder'),
(4, 'meadows', 'Meadows', 'Walking on by the white just one dwells. Business and fruits offered him.', 'palm_tree.jpg', 'bus.mp4', 'bonney'),
(5, 'jolicoeur', 'Jolicoeur', 'Close attention entirely lost again, any more mockingly laughing gods are presenting his solid staff.', 'palm_tree.jpg', 'bus.mp4', 'dafoe'),
(6, 'balcom', 'Balcom', 'Means that last seen it away nobody counted them, I\'ve found refuge in himself while living according to himself. Hut offered to proceed swiftly smoothly moving through enlightenment.', 'beach.jpg', 'bus.mp4', 'mulder'),
(7, 'seetharaman', 'Seetharaman', 'Clothes with contracted pupils begging buying receiving it voices more, owned a hot scent of an impatient tone.', 'surfer.jpg', 'bus.mp4', 'dafoe'),
(8, 'medlin', 'Medlin', 'Of events was as time you\'ve always sounds like bees, bad talk wisely my forehead to earn thus rejuvenated. Pilgrims do with plans or else was as his mouth.', 'surfer.jpg', 'train.mp4', 'dafoe'),
(9, 'barnhart', 'Barnhart', 'Than rocks the tired desperate had retired from following him, learned meditation there the ascetics, venerable on bed in being able to beautiful woman again.', 'beach.jpg', 'bus.mp4', 'bonney'),
(10, 'geer', 'Geer', 'Fear he understood and beautifully. Indignant he needed the cult of perfection of life, passed rose from them have thought, let\'s get our kind his parched fingers and mysterious.', 'surfer.jpg', 'bus.mp4', 'instal');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'etrandarobi', 'Soul without teachings sake travelling without any given. Senses against hunger to new ones of wealth, different goal attracts him any specific intention. Propelling themselves they exchanged humorous banter with distrust, won\'t make love without fear so well be proven.'),
(2, 'verowsy', 'Fled by what has left in memory, sacrifices breathing forth and put it completely to live. Read it back under this water every day, failed to her or not again facing the boy. Farewell river sang with agonising pain will find peace.'),
(3, 'ersomeb', 'Yesterday of his partner that always rivers had risen, down in persuading him into thinking of, teachings be older I\'d fear to you. Apparently he must do you in grief.'),
(4, 'oadwistandec', 'Eyes glistening dew in years losing nothing else, indeed awakened I think did his way, I\'ll be in no answers which was useless. Distant infinitely much and also will receive thanks.'),
(5, 'disosoj', 'Left with great perfected man I praise you, somehow happened inside and people can\'t love nobody. Scent of dying fish a teaching surrounded by many.');

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
(3, 'anallise.blakemore@live.com', 'analliseblakemore', '5y*ukCwha', 'Rocerrela'),
(4, 'takwai.konomis@yahoo.com', 'takwaikonomis', '/eAchon1e', 'Kueebarukuma'),
(5, 'leanna.seniuk@yahoo.com', 'leannaseniuk', 'it2Ftlel:', 'Hadorelu');

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

