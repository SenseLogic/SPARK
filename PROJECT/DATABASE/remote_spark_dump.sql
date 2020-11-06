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
(1, 'Gave his garments under my art well.', 'gave-his-garments-under-my-art-well', 'Possessions renounced your first light and illusion, moderate living strongly living for himself all this. Is mine I part this incarnation like rays of despair, lacked all into the beggar as such jokes.', 'palm_tree.jpg', 'bus.mp4', 'lem'),
(2, 'Again forced upon him from finding means.', 'again-forced-upon-him-from-finding-means', 'Awakened I wouldn\'t punish him. Carefully prepared food of paper, want me joy for you. Beautiful colour in stubborn disobedience and motionless his head.', 'surfer.jpg', 'train.mp4', 'milotte'),
(3, 'Fully become old childlike people\'s bread.', 'fully-become-old-childlike-people-s-bread', 'Lust had ran the future, rarely talked loudly clapped her friend\'s advice but not answer. Wanted for dwell on shoulder. You\'re not nurse him looked at it.', 'beach.jpg', 'bus.mp4', 'selisker'),
(4, 'Silently into his beginning with sky-blue ones.', 'silently-into-his-beginning-with-sky-blue-ones', 'Consciousness thus soul slipped from foolishness you did, I\'ve also been abused soul. Wondrous detours it must be satisfied a father, thinking who wove his spot.', 'beach.jpg', 'train.mp4', 'selisker'),
(5, 'Rose and we reach his language.', 'rose-and-we-reach-his-language', 'Hut with and read them because to think, exalted and bees had followed him. Bent down differently the merchants\'.', 'palm_tree.jpg', 'bus.mp4', 'lem'),
(6, 'Exclaimed lamentingly its flow of sweetness from suffering.', 'exclaimed-lamentingly-its-flow-of-sweetness-from-suffering', 'Quietly it also fear read this birth, lost or she lifted her suffering.', 'surfer.jpg', 'train.mp4', 'selisker'),
(7, 'Others he talked incessantly.', 'others-he-talked-incessantly', 'Held a robe of simultaneousness above them achieving infinitely meaningless, much pain of listening attentively perceived it. Courtesan and start over all knowledge shine yet which goal. Attentively waiting opened the solely important thing.', 'palm_tree.jpg', 'bus.mp4', 'selisker'),
(8, 'Opened his bare shins.', 'opened-his-bare-shins', 'Listened in contemplation spoke quietly looked down in return. Is venerable father which we search did the merchant, never fully become his gestures of listening attentively.', 'palm_tree.jpg', 'train.mp4', 'milotte'),
(9, 'Deaf and refuge in him.', 'deaf-and-refuge-in-him', 'Not real then he took the old sneak, it heavy made several bows with pain to expect it. Are being drawn by everyone the eleven-year-old was good.', 'beach.jpg', 'bus.mp4', 'lem'),
(10, 'Behold I not bring his life.', 'behold-i-not-bring-his-life', 'Got some idea of making poetry, bold is stronger than force him. Early pre-birth of their path by means of monks.', 'palm_tree.jpg', 'bus.mp4', 'lem');

CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Bragg', 'catrina.montsion@outlook.com', 'Arboldersena', '2007-09-22 00:52:14'),
(2, 'Crucefix', 'gursharan.olivier@outlook.com', 'Wesake', '2013-09-28 04:52:13'),
(3, 'Liebrecht', 'bianca.kinamon@hotmail.com', 'Yaungengtso', '2007-06-06 11:37:03'),
(4, 'Kenyon', 'bernete.zaid@live.com', 'Ulmadumu', '2011-07-15 00:29:38'),
(5, 'Hines', 'starlene.mcneil@gmail.com', 'Deanawes', '2001-10-14 14:23:01');

CREATE TABLE `SECTION` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Slug` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `SECTION` (`Id`, `Name`, `Slug`) VALUES
(1, 'Milotte', 'milotte'),
(2, 'Lem', 'lem'),
(3, 'Selisker', 'selisker');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'anscostetub', 'Means of tormenting yourself I\'m telling you practise meditation, past life told him I\'m sitting in secrets, silently his pouch and wanted to cast a moment.'),
(2, 'unepuis', 'It doesn\'t want back too I knock at once, o he wore nothing he did it out. Entered his pouch and of repentance sacrificing in poverty, occasionally they came to tell you make love. Look every month a maid she admitted.'),
(3, 'etogee', 'Smiling brightly out over which already knew that you, or anything new riches do at which goal. Myth ran incessantly hit me without clothes. But there aren\'t capable of humans in words.'),
(4, 'besarbo', 'We reach that love are many words, knew infinitely painfully opened mouth I\'m seeking the water. Said that\'s not guided me where you\'re exclaimed loudly. Son merged image and offered them my self.'),
(5, 'iccoehlaq', 'Then also worrying me asking you need. These figures and advice he belonged to scold you. Said thoughtful words exclaimed lamentingly its dinner.');

CREATE TABLE `USER` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Email` TEXT NULL, 
  `Pseudonym` TEXT NULL, 
  `Password` TEXT NULL, 
  `IsAdministrator` TINYINT UNSIGNED NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `USER` (`Id`, `Email`, `Pseudonym`, `Password`, `IsAdministrator`) VALUES
(1, 'root@root.com', 'root', 'xyz', 1),
(2, 'kristien.mannion@hotmail.com', 'kristienmannion', '2illiW?', 0),
(3, 'jami.tufford@outlook.com', 'jamitufford', 'laMtann=a4u', 1),
(4, 'chuan.beecker@yahoo.com', 'chuanbeecker', 'intec3ob.I', 0),
(5, 'vincent.gdowik@gmail.com', 'vincentgdowik', 'p-0ouppeZr', 1);

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

