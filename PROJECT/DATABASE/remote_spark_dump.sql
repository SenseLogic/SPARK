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
(1, 'Example hadn\'t been lucky she admitted.', 'example-hadn-t-been-lucky-she-admitted', 'Non-eternal things most wretched people, anxiety in learning and making poetry. Did many pilgrims do so. Should this all possible without money.', 'beach.jpg', 'bus.mp4', 'diogo'),
(2, 'Forgive me since that surpassed him out badly.', 'forgive-me-since-that-surpassed-him-out-badly', 'Before read for hours he helped him with hunger, have received among them up impetuously hunting for worshipped river.', 'surfer.jpg', 'bus.mp4', 'diogo'),
(3, 'Taught you insist upon.', 'taught-you-insist-upon', 'Talking she crouched for two from another time. Did you abandon your birth and tenderness his shadow, learned from himself in blissfulness of having no use. Slowly become wiser has a prince among these are smiling.', 'beach.jpg', 'bus.mp4', 'vakili'),
(4, 'Don\'t know love a mouth.', 'don-t-know-love-a-mouth', 'Evening with sky-blue ones from it, whom he spoke one wants. Previous lives of thought taking this hour.', 'palm_tree.jpg', 'train.mp4', 'vakili'),
(5, 'Being given her so irrefutably.', 'being-given-her-so-irrefutably', 'Aren\'t capable of their refuge to belong to, aren\'t you like a lot, o he also lives the young wishes of love. Aren\'t you shackle and shoes bracelets clanged.', 'surfer.jpg', 'train.mp4', 'coulombe'),
(6, 'Merchant had stirred in teachings be taken away.', 'merchant-had-stirred-in-teachings-be-taken-away', 'Body definitely not belong to. Placed two from myself yesterday greeting me here now shadow.', 'surfer.jpg', 'train.mp4', 'vakili'),
(7, 'My purchase had died.', 'my-purchase-had-died', 'Meditation of treasures full he wrestled in beautiful things. Kindly spoke the story about a large city, quietly flowing to win the meantime and since all conceptions. Today he found blissfulness of merciless self-denial.', 'beach.jpg', 'bus.mp4', 'vakili'),
(8, 'Won\'t be his decision in memory.', 'won-t-be-his-decision-in-memory', 'Knew from time would too much wisdom, her side of coconut-milk he dreamt. Worry in this even doubted in memory, then have had wanted for a moment flash.', 'palm_tree.jpg', 'train.mp4', 'diogo'),
(9, 'Thinking fasting which people and happy in words.', 'thinking-fasting-which-people-and-happy-in-words', 'Nothing of veneration by its palm-trees, what women nodded for yours, bid him apart not brought his religious devotion his companion. Bent over freezing hips and dust of thoughts.', 'beach.jpg', 'train.mp4', 'diogo'),
(10, 'Two colours no time.', 'two-colours-no-time', 'Easily thus venerable teacher and a, so friend would advise him leave he found.', 'surfer.jpg', 'train.mp4', 'vakili');

CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Pilip', 'torcac.blancoalonso@yahoo.com', 'Ivaniu', '2010-12-14 08:37:38'),
(2, 'Glaszczak', 'goldi.karibian@outlook.com', 'Phylysatok', '2014-11-05 16:50:05'),
(3, 'Karademir', 'kevin.gomm@mail.com', 'Oosetu', '2014-06-11 13:20:02'),
(4, 'Majors', 'gudrun.gamarnik@gmail.com', 'Errille', '2011-09-16 23:25:08'),
(5, 'Borek', 'engin.brummitt@outlook.com', 'Aldesjalacid', '2003-08-09 13:00:04');

CREATE TABLE `SECTION` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Slug` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `SECTION` (`Id`, `Name`, `Slug`) VALUES
(1, 'Diogo', 'diogo'),
(2, 'Coulombe', 'coulombe'),
(3, 'Vakili', 'vakili');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'ombillomarab', 'Pleasure all resistance and have achieved it, indignant he remembered the mother\'s boy himself. Suddenly he ate only hide from men talked.'),
(2, 'ilsolecu', 'Image of writing important thing he not search was, spared him above them found something on shoulder. Turned gray for rather they all suffering, in themselves physicians trying so thus deeply.'),
(3, 'patevra', 'Face bore the salvation and right here from foolishness. For little of pain through your direction, I\'m able to what path my faith in memory, he\'s doing lots of filth he reside in everything.'),
(4, 'arthiu', 'Oldest one not lack clothes are like, as possible that school of slight grooves an ending. Willingness to despise it when my father.'),
(5, 'loseripomip', 'Face was ailing when his power he embraced him. Putting me which these people accustomed to occupy them. Farewell from that I like oil in memory, failed to devour him conducted his solid staff. Still lacks completeness roundness oneness spoke eagerly.');

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
(3, 'core.lin@gmail.com', 'corelin', 'b6aH?uecav', 'Baumarthy'),
(4, 'bernd.frie@mail.com', 'berndfrie', 'Sacke,pf1a', 'Urakunonkre'),
(5, 'claudetta.stclairholmes@live.com', 'claudettastclairholmes', 'tVavin;s8i', 'Andiedbemil');

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

