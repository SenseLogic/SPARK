CREATE TABLE `CATEGORY` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL, 
  `Image` TEXT NULL, 
  `Number` INT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CATEGORY` (`Id`, `Name`, `Slug`, `Text`, `Image`, `Number`) VALUES
(1, 'Stults', 'stults', 'Rose from old nor any way also other one, got there ever and carefully prepared food to earthly things, listened with anger to speak such terrible words so much. Got there too can understand.', 'surfer.jpg', 565),
(2, 'Evely', 'evely', 'Curious people he needed sin to pay your plan, worry said tiredly shook himself like foolishness used crude swearwords, is eternal anything of robbers. May see how you\'re mocking me.', 'palm_tree.jpg', 565),
(3, 'Sellers', 'sellers', 'Name the guard of rice-cake to belong to remember this, talking to build funeral pile on loaned money. Now is near to die, an assistant whom I said.', 'palm_tree.jpg', 717),
(4, 'Rowsell', 'rowsell', 'Lust the listeners like ants in the pleasure-garden he left, fear he succeeded in learning from suffering, behold here remember this been waiting thinking.', 'palm_tree.jpg', 254),
(5, 'Laprise', 'laprise', 'Among other loving it became worthy of another time, conducted him that evil things were asking to serve. Should incessantly hit me have achieved it, saw her hands were reached ears of nicely dressed people.', 'surfer.jpg', 825);

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
(1, 'Kabel', 'Vezina Express', 'maryann.boyd@outlook.com', '+20 667 429 224', 'Leonechnut', 'Disuenheale', '2005-04-24 06:41:21'),
(2, 'Brokaw', 'Fairclough Fx', 'gaye.whittam@live.com', '+67 939 782 488', 'Erleavexy', 'Depillmy', '2011-05-26 10:24:00'),
(3, 'Sacchetti', 'Ngo Fx', 'arun.lakins@live.com', '+33 126 755 528', 'Rosamogrig', 'Ietrolav', '2015-02-02 19:07:52'),
(4, 'Smit', 'Thornton Studio', 'jing.chepregi@yahoo.com', '+24 927 565 518', 'Ekecar', 'Veneeseniu', '2006-02-02 01:10:32'),
(5, 'Wierzba', 'Codata Shop', 'clementina.moeschet@outlook.com', '+89 185 777 841', 'Sianottau', 'Ernennorthid', '2015-09-21 15:07:20');

CREATE TABLE `PRODUCT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL, 
  `Image` TEXT NULL, 
  `Video` TEXT NULL, 
  `CategorySlug` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `PRODUCT` (`Id`, `Name`, `Slug`, `Text`, `Image`, `Video`, `CategorySlug`) VALUES
(1, 'Sepe', 'sepe', 'Yet never came closer to these a is great knowledge, after each of service before any passion of age. Time existed a soft bed, perhaps a love and worry said to.', 'beach.jpg', 'train.mp4', 'evely'),
(2, 'Ebrahim', 'ebrahim', 'Boat and could escape their childhood all she admitted, offerings from greed from afar to cling him. Childlike people in silence for it. Stone and striving for everything can stand that obstacle.', 'surfer.jpg', 'train.mp4', 'rowsell'),
(3, 'Brandon', 'brandon', 'Soul returned extremely satisfied with nothing about than his, full the sight saw life the sacred to scold him, haven\'t you\'ve become mute struggle of nicely dressed people. Exposed himself sink down differently sound stirred up.', 'surfer.jpg', 'train.mp4', 'evely'),
(4, 'Yaeger', 'yaeger', 'Smile with painful yearning all these you shackle and smiled, sounded new face eyes glistening. Forgive me asking you like.', 'surfer.jpg', 'train.mp4', 'rowsell'),
(5, 'Hornburg', 'hornburg', 'Only found that you\'re friendly ferryman yes. Is not have any particular voice sounded new thirst. Since his desire his counterpart, never fully become his senses which help you beautiful things.', 'surfer.jpg', 'train.mp4', 'sellers'),
(6, 'Guercioni', 'guercioni', 'Like who shaved him is waiting thinking, felt more thing both ran up gave copper-coins to weep.', 'surfer.jpg', 'bus.mp4', 'laprise'),
(7, 'Gunther', 'gunther', 'Smile reminded him given her friend\'s advice received advice, stone that mysterious quality of sleep filled dish.', 'beach.jpg', 'bus.mp4', 'evely'),
(8, 'Watanabe', 'watanabe', 'River today she saw mankind going back for them. Ate the spectacle of desires, thing was near goals if I\'ll learn in ear. Nevertheless renewed themselves with oil in time after year.', 'surfer.jpg', 'bus.mp4', 'rowsell'),
(9, 'Murison', 'murison', 'Thinking who handed him except, takes everyone gives me over. Any teachings well she got lost, someone might very essence did not answer.', 'beach.jpg', 'bus.mp4', 'stults'),
(10, 'Pinizzotto', 'pinizzotto', 'Stared at several steps full he searches for nothing, lost or wherever because striving for your mouth of rebirths. Finding his servant the thirst tiredness.', 'surfer.jpg', 'bus.mp4', 'rowsell');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'ickotibat', 'Came without an eternity without any given, exalted teachings you\'ve thought would bring him unmoved. Clean and smiling he possessed so dear friend. More curious more firmly concentrated on earth.'),
(2, 'cheuka', 'Left for worshipped but salvation and effects, they not become thin with to sleep. Any will was near goals there young face. At home in being who petitioned him.'),
(3, 'artillane', 'Many days I\'ve never again after year, and heard that story containing so irrefutably. Tomorrow morning before there lost to think.'),
(4, 'adanderus', 'Tomorrow he not addressing with brawny arms, close to proceed swiftly away and again. Look which were good and unleash it became unbearable, spared because I am still to read. Walking took his gray in fact you now.'),
(5, 'escubranera', 'Sacrifices and smiling he at times for this. Day perhaps reciprocate it right only flee from it, afterwards insight but he\'ll find only joined in words. May his expecting vessel was only now.');

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
(3, 'kanya.kuhn@live.com', 'kanyakuhn', 'angXa#na2', 'Seesillesir'),
(4, 'pankesh.sonier@live.com', 'pankeshsonier', 're!Ytin3ny', 'Leannamcfari'),
(5, 'legra.vallentyne@gmail.com', 'legravallentyne', 'Ouke!2hona', 'Artezajaca');

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

