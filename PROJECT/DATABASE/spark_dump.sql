CREATE TABLE `CATEGORY` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Name` TEXT NULL, 
  `Text` TEXT NULL, 
  `Image` TEXT NULL, 
  `Number` INT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CATEGORY` (`Id`, `Slug`, `Name`, `Text`, `Image`, `Number`) VALUES
(1, 'popoff', 'Popoff', 'Business with whom I understand this, his finger of meditation secret of truth, distorted a student her friend.', 'palm_tree.jpg', 472),
(2, 'dewiele', 'Dewiele', 'Gave one blow of our exalted teacher, shimmered through him without teachers warnings his being. Tears he lose himself without thirst felt hope be loved, weren\'t you be made yesterday.', 'beach.jpg', 235),
(3, 'karr', 'Karr', 'Heard these teachings though I don\'t know, there where an oarsman\'s servant you by one\'s body.', 'palm_tree.jpg', 954),
(4, 'rosado', 'Rosado', 'Asked his religious devotion and preserved by which was. Perhaps mocking voice inside that his shoulder, have achieved by her sedan-chair.', 'beach.jpg', 426),
(5, 'ohearn', 'Ohearn', 'Half all except to bury in agreement with. Without envying him this terrible world and waited, truly come to stay thought standing at the gamblers.', 'surfer.jpg', 808);

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
(1, 'Beeton', 'Schram Cooperative', 'courtney.dangubic@yahoo.com', '+81 722 443 798', 'Ililanu', 'Mitollesic', '2006-11-12 02:52:05'),
(2, 'Marshaus', 'Oam Express', 'deepak.cramm@live.com', '+68 186 839 991', 'Iliseliniu', 'Ankeryu', '2001-12-02 23:33:54'),
(3, 'Sarma', 'Lescot Point', 'marek.cucuzzella@gmail.com', '+26 845 534 522', 'Odfreserem', 'Anonik', '2001-09-05 17:14:29'),
(4, 'Trunley', 'Nunold Association', 'elfreda.bouick@hotmail.com', '+64 897 358 485', 'Enteko', 'Accellwosse', '2011-03-17 13:46:09'),
(5, 'Hardyman', 'Correa University', 'cristionna.lally@outlook.com', '+24 107 751 233', 'Avabenusilis', 'Avaskas', '2014-09-27 00:21:03');

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
(1, 'ircstandards', 'Ircstandards', 'Rich I recognised him the sacred offerings, has had fought this yellow in thinking. Others which filled it sucked everything could accept.', 'beach.jpg', 'bus.mp4', 'rosado'),
(2, 'tiner', 'Tiner', 'Hut with plans or for both, might come said nothing let go at by it said. Pleasure and meditation holding one\'s breath to smile.', 'palm_tree.jpg', 'bus.mp4', 'popoff'),
(3, 'cuddihy', 'Cuddihy', 'Once he\'ll become my wife\'s funeral pile on in words. Listened whether it could remember, made money clothes are the consisted in secrets.', 'palm_tree.jpg', 'train.mp4', 'dewiele'),
(4, 'mctaggart', 'Mctaggart', 'Slowly it often I haven\'t slept he replied, yoga-veda shall find when you this hour silently out badly.', 'palm_tree.jpg', 'bus.mp4', 'ohearn'),
(5, 'lugsdin', 'Lugsdin', 'Rich man with dusty feet just to annihilate himself fall, hours he ferried me into your birth magic spells. Out comforting mild full height when seeing images any guard.', 'palm_tree.jpg', 'train.mp4', 'rosado'),
(6, 'mcginn', 'Mcginn', 'Nevertheless broken the brushwood for her, their pilgrimage to make love.', 'palm_tree.jpg', 'train.mp4', 'dewiele'),
(7, 'goodfellow', 'Goodfellow', 'Nevertheless in every urge was happening to do that, times all foolish everyone the stupid sheep following a hunter. Placed him came walking along he share his counterpart, black hair out this vain vacuous speaker.', 'surfer.jpg', 'train.mp4', 'rosado'),
(8, 'chouhan', 'Chouhan', 'Wonderful verses of a man by him given me exclaimed, mumbled a salutation and thought they had then said no. Here from now weary life a garden. You never upset by innumerable generations of joy.', 'palm_tree.jpg', 'bus.mp4', 'karr'),
(9, 'pageau', 'Pageau', 'Different games knew little once told him, more importance on an error that I\'m giving me, willingness to their midst of hundreds of a.', 'beach.jpg', 'bus.mp4', 'rosado'),
(10, 'uchida', 'Uchida', 'What if it presents no future. Few are nothing for hours sat with sadness, senses in nothingness stayed in them.', 'beach.jpg', 'train.mp4', 'popoff');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'lotancingato', 'Exposed himself the new man any longer, way against teachings do nothing quietly it laughed aloud, fear with such thing of good for. Silently his manners pure his wretched people, speak them died had many of disgust.'),
(2, 'elawilakox', 'Blossomed in everything smelled of age just consider, merchant of remote areas of autumn and finally drown, surrounded by letter by myself alone I know.'),
(3, 'depaltacoc', 'Old have oil in contemplation washing his advice, deaf and smiling full he remained silent. Yoga-veda shall be possessed so without stirring. Thus the head his hut this it filled with, in them cheat him nothing could kidnap you.'),
(4, 'iasekivaka', 'Whenever it speaks to keep on an undefeatable feats, aren\'t capable of arrogance he become so good. Himself sink down closely to having seen everything, does nothing else was trembling softly touched shoulder.'),
(5, 'tasonecon', 'Whispered a restlessness and distant to occupy them. Gave a pilgrim stepped in agreement with, who come back again in their dead face. Deaf and face into deception called my dear. Nevertheless in vain vacuous speaker sensed an end.');

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
(3, 'mariejeanne.londhe@hotmail.com', 'mariejeannelondhe', 'estY^eg7o', 'Ciadrapi'),
(4, 'monika.koonce@mail.com', 'monikakoonce', 'marl+Renel3', 'Uremonohetis'),
(5, 'evangeline.palidwor@gmail.com', 'evangelinepalidwor', '6ink?Yo', 'Ingani');

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

