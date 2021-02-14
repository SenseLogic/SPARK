CREATE TABLE `CATEGORY` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL, 
  `Image` TEXT NULL, 
  `Number` INT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CATEGORY` (`Id`, `Name`, `Slug`, `Text`, `Image`, `Number`) VALUES
(1, 'Pirkle', 'pirkle', 'Lust like bees had lost again, anxiety in their great thinkers do. Isn\'t afraid time but yet which might we progress.', 'palm_tree.jpg', 79),
(2, 'Rykwalder', 'rykwalder', 'Should live righteously to him, soul slowly that his nor was almost none. Held against teachings but work in these teachings.', 'beach.jpg', 711),
(3, 'Bartush', 'bartush', 'Different than offerings from both heard it my hair, any longer dwelt with distrust. Also died each big loss that singsong the brown.', 'beach.jpg', 15),
(4, 'Rowell', 'rowell', 'Walking a rabbit would remain like bees, distant son had shaped his my words. What\'s the busy as true bliss, read scorned nor overestimated from afar to enjoy being a.', 'beach.jpg', 556),
(5, 'Shiu', 'shiu', 'Failed to watch a distant infinitely meaningless, gives strength and lay hidden.', 'surfer.jpg', 908);

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
(1, 'Hyman', 'Savarimuthu Depot', 'krista.gillstrom@outlook.com', '+86 747 366 801', 'Eckasni', 'Eidejav', '2006-05-17 19:40:34'),
(2, 'Despault', 'Lischynsky Club', 'ru.dajerling@yahoo.com', '+18 981 546 665', 'Ourtan', 'Effege', '2007-01-18 13:21:25'),
(3, 'Paton', 'Hartleb Church', 'vinita.pommainville@gmail.com', '+47 619 101 846', 'Giepierob', 'Ollackeliewy', '2006-05-22 19:43:37'),
(4, 'Gnaedinger', 'Viehweg Market', 'leonard.salladay@gmail.com', '+33 156 434 281', 'Inoraseckid', 'Ceccopooneu', '2001-11-06 05:03:47'),
(5, 'Hann', 'Braaksma Association', 'jai.nemec@outlook.com', '+23 520 515 657', 'Kiamanto', 'Ollmami', '2008-04-02 19:07:41');

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
(1, 'Hoddinott', 'hoddinott', 'Bold is beautiful aren\'t the gloomy mind exclaimed, someone might have it any passion of teachings.', 'surfer.jpg', 'bus.mp4', 'shiu'),
(2, 'Ameen', 'ameen', 'Lacked all forms was joyful desire, early pre-birth of our venerable chiefly his way.', 'surfer.jpg', 'train.mp4', 'rykwalder'),
(3, 'Corbeil', 'corbeil', 'Man had delighted about of any sleep, next person or having a garment. Owned a bull and almost just the hours and rested, gives what exists around a moment.', 'palm_tree.jpg', 'bus.mp4', 'rowell'),
(4, 'Connelly', 'connelly', 'Went troubled into eyes read the wheel of unsatisfiable desire, past not already thought since then. Listened whether time he reported of fish a fateful circle.', 'palm_tree.jpg', 'train.mp4', 'shiu'),
(5, 'Vanderhooft', 'vanderhooft', 'Before had changed character took your eyes, since it likes of love, you\'ll see what else were escaping the happy and rested. With small group of dice.', 'surfer.jpg', 'train.mp4', 'pirkle'),
(6, 'Leblond', 'leblond', 'Thinking does not any further, early pre-birth of passion of writing important thing. Sounded the day\'s journey said to.', 'palm_tree.jpg', 'bus.mp4', 'rykwalder'),
(7, 'Rasmus', 'rasmus', 'The lustful people brought her student her breast. On turning quickly you haven\'t found it, simply thus deeply thinking and say everything.', 'beach.jpg', 'bus.mp4', 'rykwalder'),
(8, 'Kuracina', 'kuracina', 'Else could accept my teacher. Nothing strange may go out to enter his eyes.', 'beach.jpg', 'bus.mp4', 'shiu'),
(9, 'Freeburn', 'freeburn', 'Whispered quietly as mockery and fell asleep, business and bloody shoulders almost reached them.', 'palm_tree.jpg', 'train.mp4', 'pirkle'),
(10, 'Devenyi', 'devenyi', 'Daily he pitied he hardly noticeable gesture, smiling face with unrest filled himself than his. Clothes are rare who seek knowledge. Entire eternal perfection and parted like me.', 'beach.jpg', 'bus.mp4', 'rykwalder');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'andelpheniu', 'Perhaps your birth and salvation from greed from death, won\'t he himself completely different as true. After so much money would use for twenty-eight days.'),
(2, 'leaulivu', 'Ate could approve of inhaling of him. Source a dream warned him because the uncertain, more time and overcoming pain for permission my destiny.'),
(3, 'endocku', 'Both masters of too is beginning proudly and obedience, touched and she was nevertheless he was. Forgive me honourable one part of his tale, deaf and horror in danger in memory.'),
(4, 'beajap', 'Today you\'ve failed to something honourable one, we parted from where would force him. How much vomits it for two accustomed to it, well that was together all have thought, him with desire of sympathy many thousands.'),
(5, 'notamalak', 'Courtesan has to say this grove lost your sleep, wavered to was quick to breathe sparingly learned it, seeing that no gift I did I could you. Who wants to teachings clearer purer more question.');

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
(3, 'ranee.frederico@outlook.com', 'raneefrederico', '0e-ckeF', 'Usiriap'),
(4, 'sammie.fwpco@hotmail.com', 'sammiefwpco', 'Unear2:', 'Inckip'),
(5, 'cris.needham@gmail.com', 'crisneedham', 'e!nA6tip', 'Achidwicu');

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

