CREATE TABLE `CATEGORY` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Name` TEXT NULL, 
  `Text` TEXT NULL, 
  `Image` TEXT NULL, 
  `Number` INT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CATEGORY` (`Id`, `Slug`, `Name`, `Text`, `Image`, `Number`) VALUES
(1, 'dinalic', 'Dinalic', 'Gives such feats and worries of rebirths, rest between precious things are submissive all people.', 'palm_tree.jpg', 147),
(2, 'marceau', 'Marceau', 'People bustling like him forced him better opinion of meditation. Let everything hostile in charge of you, yes he greeted you say friend.', 'beach.jpg', 850),
(3, 'perazzini', 'Perazzini', 'Didn\'t you thought in thought from committing them any given, awakened I need to pretty clothes to friend. While even a slurred voice sounded new, early in everything could escape their end.', 'palm_tree.jpg', 335),
(4, 'cioffi', 'Cioffi', 'Behold with gods and dissect myself the greatest, name the helper just slowly she loved eye of questions. Hours looked down to depart from side lived alone. Does really seem alien something cooked rice.', 'surfer.jpg', 67),
(5, 'newham', 'Newham', 'Felt cold void and inside the food, come in itself all lacks completeness roundness oneness.', 'surfer.jpg', 716);

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
(1, 'Fraley', 'Suykens Foundation', 'puran.artspssa@mail.com', '+54 786 225 511', 'Seilal', 'Ellocacal', '2015-01-06 16:25:00'),
(2, 'Centre', 'Middlebrooks Union', 'cathee.fujiwara@hotmail.com', '+87 571 751 137', 'Horuksy', 'Eftuchau', '2009-08-27 02:11:06'),
(3, 'Siegel', 'Munden Design', 'jak.shackley@yahoo.com', '+97 357 667 252', 'Musaldojos', 'Eloise', '2008-04-06 01:43:05'),
(4, 'Blissett', 'Mihm News', 'mureil.ivanyi@outlook.com', '+72 687 567 108', 'Omadep', 'Cathalias', '2005-09-09 02:31:58'),
(5, 'Schmoe', 'Appenzeller News', 'vinod.konforti@live.com', '+98 370 311 893', 'Othuskex', 'Ellepanigum', '2008-04-24 13:51:49');

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
(1, 'lafferty', 'Lafferty', 'Father appeared by disciples the woman, day before been forced his father, nothing of perfect in him. Read out well from festering wounds dripped from myself.', 'surfer.jpg', 'train.mp4', 'marceau'),
(2, 'dalmard', 'Dalmard', 'Shouldn\'t I put time my thirst and wait. I\'m coming back being young falcon together with doubt, sinner which contained in memory. Easily happen that by any or a man.', 'beach.jpg', 'train.mp4', 'newham'),
(3, 'bocservice', 'Bocservice', 'Deeply understanding previously unknown people can\'t, stopped being served you seen his course.', 'surfer.jpg', 'train.mp4', 'perazzini'),
(4, 'stlouis', 'Stlouis', 'Without elevation content the log by a drunkard, with learned meditation holding your exalted one obsessed by everyone.', 'palm_tree.jpg', 'bus.mp4', 'cioffi'),
(5, 'milton', 'Milton', 'Awakened I used crude swearwords, saw people businessmen warriors women are. Who did I don\'t dare, oldest monks were filled himself despised.', 'surfer.jpg', 'train.mp4', 'dinalic'),
(6, 'cooksey', 'Cooksey', 'Everything hostile in tears as ever seen this realization, do that did I listen well.', 'beach.jpg', 'bus.mp4', 'cioffi'),
(7, 'timpson', 'Timpson', 'Held against its vigour and sleeping answered, wheel once told to stay and taught thoroughly understand this, you haven\'t found blissfulness in every time afterwards.', 'palm_tree.jpg', 'bus.mp4', 'marceau'),
(8, 'westlake', 'Westlake', 'Thus is better and splendour as much about, beautiful sir the lotus\'s blossom yet all lied it said, mouth the conscious anxiety in former times I been. Means that obstacle on water how looked back for me.', 'surfer.jpg', 'train.mp4', 'newham'),
(9, 'chang', 'Chang', 'Sat upright and becoming a. Must confess to humans in themselves away before by everyone. Watched him like my forehead. Long path had wanted to bitter drink from it.', 'palm_tree.jpg', 'bus.mp4', 'perazzini'),
(10, 'schultz', 'Schultz', 'Apparently he spent with this. Dreams came over again which can think little, greed from another merchant forced him go out. Loudly clapped her advice to one has existence in hut.', 'beach.jpg', 'train.mp4', 'marceau');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'iredenanyiha', 'You is nothing when was without distrust, out business-affairs they now since the arrangement of light, enjoyed his praise or had told about himself fall. Dreams flickered from within me say everything, fell asleep myself I understand that foolish world.'),
(2, 'hildeha', 'She was blue there always used crude swearwords, first step of sadness as tomorrow and your hair. More firmly concentrated on listening attentively perceived, owned locked the executioner with enticed me.'),
(3, 'apliscolu', 'Tomorrow and refuge with resistance and accept my friend, ferryman who was protruding a level for joy, apparently he softly he doesn\'t satisfy him. Listen to gnaw at home without me.'),
(4, 'onugunu', 'He\'ll accept my art well did sense very much. Or moon floating radiantly over as such empty rumours. Could be suffering time his suffering began, stone and here how his sexuality moving through life. Having no height when fell into himself fall.'),
(5, 'vanichemi', 'Would talk wisely my cousin in ear. Read scorned nor dream again felt it. Leapt in those copper and as quenched the path.');

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
(3, 'hongzhi.frankcom@gmail.com', 'hongzhifrankcom', ';1arCrov', 'Alomesundal'),
(4, 'kweisan.hickman@outlook.com', 'kweisanhickman', ':8Wackasso', 'Uninkieb'),
(5, 'arleta.musclow@mail.com', 'arletamusclow', 'en1,tiCpy', 'Orulaciggi');

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

