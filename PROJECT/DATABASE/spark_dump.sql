CREATE TABLE `CATEGORY` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Name` TEXT NULL, 
  `Text` TEXT NULL, 
  `Image` TEXT NULL, 
  `Number` INT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CATEGORY` (`Id`, `Slug`, `Name`, `Text`, `Image`, `Number`) VALUES
(1, 'zitzmann', 'Zitzmann', 'Your words sound reached it each other turned his stakes, wouldn\'t force him whenever they heard words so much sin. He\'ll become aware that loss.', 'palm_tree.jpg', 871),
(2, 'rajala', 'Rajala', 'Or advice he sensed an untouchable peace perhaps mocking voice, carefully he would bow the perfection and hidden so long.', 'palm_tree.jpg', 623),
(3, 'talbott', 'Talbott', 'Deep I couldn\'t recognise the straw hut my brothers, us is just one himself. Owned a has taken away.', 'beach.jpg', 779),
(4, 'stjames', 'Stjames', 'Words of suddenly as himself by anything from that. Afterwards when losses he replied.', 'beach.jpg', 323),
(5, 'strock', 'Strock', 'Glance at and good as ever, weren\'t you with for riches. Wondrous words delicate impenetrable perhaps your father, tell her little to both of apes moving through life.', 'beach.jpg', 656);

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
(1, 'Gillard', 'Subsara University', 'celestia.reavis@live.com', '+55 120 899 793', 'Aichossabare', 'Elkashwaroha', '2014-10-11 03:36:20'),
(2, 'Thurston', 'Nadler Shop', 'phuoc.goring@hotmail.com', '+88 752 993 922', 'Itanicuchac', 'Inoturo', '2002-07-16 11:13:50'),
(3, 'Kingan', 'Kotyk Dynamics', 'dau.marson@mail.com', '+87 973 132 562', 'Goldiegalyd', 'Almirexu', '2008-08-03 01:29:26'),
(4, 'Mckenzie', 'Ritzmann Team', 'jai.commons@hotmail.com', '+80 253 200 851', 'Ummibbidi', 'Ernesnangobi', '2013-01-19 08:35:46'),
(5, 'Maslen', 'Klasky Agency', 'jacquelynn.phalpher@mail.com', '+40 911 690 788', 'Chabanegu', 'Alkallmitiyu', '2006-07-02 00:50:24');

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
(1, 'bolgos', 'Bolgos', 'Came towards despair that goal, pilgrims do know him sad. Walked one needs to devour him leaving.', 'palm_tree.jpg', 'train.mp4', 'talbott'),
(2, 'hopkins', 'Hopkins', 'Leapt in hearing all vices. Nevertheless broken out comforting mild full height any given, left the quietness of day for yours.', 'palm_tree.jpg', 'bus.mp4', 'rajala'),
(3, 'mccloskey', 'Mccloskey', 'Most foolish acts for abode had drowned today, the houses leaving one\'s own son the style of humans. Occasionally he already taken away.', 'palm_tree.jpg', 'bus.mp4', 'zitzmann'),
(4, 'planche', 'Planche', 'Wouldn\'t force you thought a healing potion, your amusement in their goat and purpose of grass.', 'beach.jpg', 'bus.mp4', 'zitzmann'),
(5, 'kutac', 'Kutac', 'Flesh and virtue as bathing performing the wrong path, evening together the foolishness everything in secrets.', 'surfer.jpg', 'bus.mp4', 'zitzmann'),
(6, 'rainey', 'Rainey', 'Said and meditation of peace. Stone the thinking that line, son who are none but become dead.', 'surfer.jpg', 'bus.mp4', 'talbott'),
(7, 'cau', 'Cau', 'Evening had succeeded in himself completely a sob and a, next person thus free will not feel.', 'surfer.jpg', 'bus.mp4', 'zitzmann'),
(8, 'furst', 'Furst', 'Read for should start on the present time a, distant target the thoughts and illusion.', 'surfer.jpg', 'train.mp4', 'stjames'),
(9, 'leonhardt', 'Leonhardt', 'Who truly I always everything. Rest to protect him don\'t mind to obtain possessions.', 'palm_tree.jpg', 'train.mp4', 'rajala'),
(10, 'straub', 'Straub', 'Talking and drunk much stupidity through a wrong manner. Warrior and dissolved in times stayed in silence at all, secretly he lived for much with mockery. Easily happen to me know has lived for worshipped river.', 'palm_tree.jpg', 'bus.mp4', 'stjames');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'ildongu', 'That I\'ve never he ever have achieved it, my place and that the many days in grief. More whether the gesture every naughtiness with distrust, sir from he killed his mother\'s funeral. Still unable to miracles had thoughts this water.'),
(2, 'ronnie', 'Also still much injustice burden themselves all life, soon also the teeth he encountered women are. Today you\'ve failed to perhaps be passed rose, had always working the money to endure. False god had noticed that pleasure of you.'),
(3, 'basializadut', 'Finding it flowed generated themselves they me over, learned more similar to lower my dear, stopped searching was chewing a lot err a farewell. Felt this arrogance he posed to destroy himself.'),
(4, 'uinehamal', 'Moderate living for money clothes on my glance. Wisdom not already for instance a human being. We would stay with himself by a lot.'),
(5, 'amawelilligo', 'How long path he informed the exalted, much vices through long dreams came towards a pilgrim. But his kind childlike person someone was sleeping answered, remained in days after our exalted one\'s body.');

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
(3, 'joyous.loker@gmail.com', 'joyousloker', '5-angorL', 'Tiosyz'),
(4, 'enis.adcock@gmail.com', 'enisadcock', 'otTteh;5', 'Ancadoner'),
(5, 'vivi.pulcine@gmail.com', 'vivipulcine', 'ai&r7maU', 'Loewoisehol');

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

