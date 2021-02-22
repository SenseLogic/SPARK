CREATE TABLE `CATEGORY` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Name` TEXT NULL, 
  `Text` TEXT NULL, 
  `Image` TEXT NULL, 
  `Number` INT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CATEGORY` (`Id`, `Slug`, `Name`, `Text`, `Image`, `Number`) VALUES
(1, 'conroy', 'Conroy', 'Of oneness to scold you. Who were willing to cheat him court for himself.', 'palm_tree.jpg', 949),
(2, 'trottier', 'Trottier', 'Stood for myself from me, venerable thus highly whether this night before seen me, that\'s everything shown me yet.', 'palm_tree.jpg', 434),
(3, 'teed', 'Teed', 'Ferryman who walked wore the teachings, perhaps to hear more time loses its midst was thinking. They\'ve become dead my way with other thing.', 'palm_tree.jpg', 769),
(4, 'stephen', 'Stephen', 'Say to these waters were rigidly focused towards death, me how he in its ten thousand voices of humans.', 'surfer.jpg', 231),
(5, 'tancordo', 'Tancordo', 'Where their paths of offerings, business with hope be true. In teachings you\'ve seen working the name any guard, wheel of having to earthly things.', 'palm_tree.jpg', 927);

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
(1, 'Camblin', 'Ashworth Point', 'jemie.yenor@hotmail.com', '+12 130 493 528', 'Elsansky', 'Ambonstoissy', '2012-12-26 22:03:06'),
(2, 'Maccormack', 'Montuno Foundation', 'cathal.juni@mail.com', '+81 783 754 508', 'Ashuho', 'Askeco', '2004-05-24 22:12:53'),
(3, 'Goldberg', 'Knobeloch Direct', 'maddalena.royle@live.com', '+49 502 628 629', 'Instlehouna', 'Itekeworighu', '2003-02-12 11:33:49'),
(4, 'Sawada', 'Bluethner Company', 'brett.coville@hotmail.com', '+58 371 937 888', 'Waymanolte', 'Oggodfitu', '2007-10-07 11:36:25'),
(5, 'Oconnell', 'Penney Union', 'coretta.sterian@mail.com', '+33 601 148 651', 'Owtestagmu', 'Ernenvi', '2011-12-08 18:50:01');

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
(1, 'popoff', 'Popoff', 'Mute took possession and equanimity his walk, afterwards when now so long. Even better teachings perfected man, shall teach you mistaken in perfumed waters and offerings.', 'beach.jpg', 'train.mp4', 'conroy'),
(2, 'farley', 'Farley', 'I thought and it\'s a my being seen, two hours sat the brown. Quietly as these simple clothes I came walking silently.', 'surfer.jpg', 'bus.mp4', 'trottier'),
(3, 'dallas', 'Dallas', 'Slowly that goal a faith or on once again, enjoyed his forties had noticed that ferry, exposed himself was walking silently went back inside. Me exclaimed loudly clapped her refuge to mock the teachings.', 'surfer.jpg', 'train.mp4', 'tancordo'),
(4, 'anconetani', 'Anconetani', 'Easily perishing things this behind. Herself had decayed was heard a lot. Dreams flickered from living according to finally drown himself with, him if you only one helping you.', 'beach.jpg', 'train.mp4', 'teed'),
(5, 'creasman', 'Creasman', 'Rarely laughed surely I see what are smiling, learned something like leaves others but simultaneously and her eyes. Arriving at my best lover her will.', 'surfer.jpg', 'bus.mp4', 'teed'),
(6, 'skaff', 'Skaff', 'Willingness to wake up with love nobody. Even every touch his shadow. Opposite bank on that loss that all.', 'surfer.jpg', 'train.mp4', 'conroy'),
(7, 'cogwell', 'Cogwell', 'Shouldn\'t I would like and better than on shoulder. Must have transported many worries pleasures of ill-humour of talk, father to beg for we are his knees, death and disgust were of foolishness used to.', 'palm_tree.jpg', 'train.mp4', 'trottier'),
(8, 'giani', 'Giani', 'Tomorrow and riches do three years, his spirit was directed into thousands of you yesterday.', 'beach.jpg', 'train.mp4', 'teed'),
(9, 'commazzi', 'Commazzi', 'Afterwards insight again though she looked through life. Other things can learn from fruit-trees then built my stomach, look every caress every goal towards perfection I listen better.', 'palm_tree.jpg', 'bus.mp4', 'teed'),
(10, 'lamphier', 'Lamphier', 'Us accept his goal lamentingly its dinner. Didn\'t you pilgrims do this, also suffered from drinking a numbing is like him, yes even intended to your disciples without food.', 'beach.jpg', 'bus.mp4', 'trottier');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'urtadida', 'Weren\'t you venerable on stiff legs in everything, tales and on downhill with care very much. Just kissed with her gaze and passion.'),
(2, 'esmeraldaher', 'Gloomy disposition since that no driver of bark, continued walking on one already now only deceive others. Were not his saturated lukewarm dull life, blind pride flared up here on water. Putting me with enticed me my amusement.'),
(3, 'ohaspisoussi', 'Owned locked the maid came without mockery, have left me here how could he hated. Greed from such an owl resounded full of patience, face as poor in her with you.'),
(4, 'onepenid', 'Moderate living for should eat his quietly ashamed, until it before this bird had fallen, tomorrow and let them or if wasn\'t helping you.'),
(5, 'selinoparu', 'We parted I\'m just waking up impetuously hunting, early pre-birth of such hair of rebirths. Never thought from teachers without having his course.');

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
(3, 'trix.pachal@gmail.com', 'trixpachal', '*ag8Kraf', 'Ellertillar'),
(4, 'tally.bowab@live.com', 'tallybowab', 'int9niD;', 'Ultoanehul'),
(5, 'els.mccue@hotmail.com', 'elsmccue', 'vi5Tcit^tau', 'Woonip');

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

