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
(1, 'Didn\'t you follow you in your son.', 'didn-t-you-follow-you-in-your-son', 'You\'ve remembered them suffering nor their pouches, turned against the book of burning woe just consider.', 'beach.jpg', 'train.mp4', 'calva'),
(2, 'Soon he took the quiet smile.', 'soon-he-took-the-quiet-smile', 'Fine clothes to unlearn thinking hours looked inside, past seemed near death is why these reports. Father will still be this I wanted to it.', 'palm_tree.jpg', 'train.mp4', 'salada'),
(3, 'Waiting thinking with it.', 'waiting-thinking-with-it', 'Beckoned him tried to save him doing lots of thirst, learned wisdom cannot be endured these beautiful his farewell to. Slowly he can reach my pouch.', 'palm_tree.jpg', 'train.mp4', 'calva'),
(4, 'Few bowls of thirst.', 'few-bowls-of-thirst', 'Was trembling his path and hastiness. Clothes I intent to listen, also follow his learning to spell on it.', 'surfer.jpg', 'train.mp4', 'salada'),
(5, 'Even as an arrow.', 'even-as-an-arrow', 'Has occurred let his courage and again. Held the green and tell him away another time.', 'palm_tree.jpg', 'train.mp4', 'salada'),
(6, 'Yet of eternity of salvation.', 'yet-of-eternity-of-salvation', 'Old childlike or might my pouch, putting me being infused into thinking these waters.', 'palm_tree.jpg', 'train.mp4', 'salada'),
(7, 'Son merged image also fear.', 'son-merged-image-also-fear', 'Senses in order to learn, didn\'t you he share his slim hips. O he played with much wisdom from your river, he share his innermost and on your work.', 'palm_tree.jpg', 'bus.mp4', 'rundstein'),
(8, 'People with thirst any goals.', 'people-with-thirst-any-goals', 'She taught thoroughly understand this, love once a wish the pilgrim. Few he was worthwhile looking up garments to me.', 'surfer.jpg', 'train.mp4', 'calva'),
(9, 'I\'m opening one suffering.', 'i-m-opening-one-suffering', 'Merchant forced his fear that goal, pleasure with them cheat him conducted him. Gloomy and complete hopelessness and spoke sadly.', 'surfer.jpg', 'train.mp4', 'rundstein'),
(10, 'Silently into eyes glistening.', 'silently-into-eyes-glistening', 'Held against an advice but still thus, cannot be so that was newly awaking and gifts for.', 'surfer.jpg', 'train.mp4', 'rundstein');

CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Peeters', 'siouxie.dehaan@live.com', 'Kilawlagero', '2009-09-10 10:26:58'),
(2, 'Wagle', 'andrejs.mcallister@gmail.com', 'Annabepetal', '2010-02-23 09:47:50'),
(3, 'Rabon', 'hendrik.karhuniemi@yahoo.com', 'Faloehli', '2009-01-03 09:54:48'),
(4, 'Dinnerville', 'evangelin.bydeley@live.com', 'Cuyeri', '2001-10-12 16:40:42'),
(5, 'Chenoweth', 'tod.coop@yahoo.com', 'Dailerenan', '2009-08-20 19:57:31');

CREATE TABLE `SECTION` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Slug` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `SECTION` (`Id`, `Name`, `Slug`) VALUES
(1, 'Calva', 'calva'),
(2, 'Salada', 'salada'),
(3, 'Rundstein', 'rundstein');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'eckaveto', 'Entire world gone on her beautiful pleasure-garden, exalted has no goal which helps you hear. Only joined his shadow ran over him unconscious.'),
(2, 'nicauldinkin', 'Wheel of my faith or rather as they me, walking through it at her cheek turned his self. Smiled at several times only I think.'),
(3, 'batelgrohis', 'Deeply it seems I breathed and lazy, o he ferried many there again now emptiness. That surpassed him humiliate himself listened and now on, it intoxicated him if his impending death. Himself he\'s looking proudly and cheerfulness of words.'),
(4, 'epripeis', 'Won\'t make you shackle him as wise, black ones from afar to destroy himself all suffering, easily happen to weep petted her breast. Also fear he died in not risen several steps, smile she taught me joy of sweetness from mine.'),
(5, 'eldabouro', 'Proper merchant praised him wouldn\'t want to me, after some of men come from you, bold is our capacity for should incessantly hit him. Children a word to duties of talk to speak.');

CREATE TABLE `USER` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Email` TEXT NULL, 
  `Pseudonym` TEXT NULL, 
  `Password` TEXT NULL, 
  `IsAdministrator` TINYINT UNSIGNED NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `USER` (`Id`, `Email`, `Pseudonym`, `Password`, `IsAdministrator`) VALUES
(1, 'root@root.com', 'root', 'xyz', 1),
(2, 'janusz.paialunga@mail.com', 'januszpaialunga', 'reh,e2Dicho', 1),
(3, 'raychel.brosselard@hotmail.com', 'raychelbrosselard', 'amL5;psor', 0),
(4, 'farhad.rimsa@gmail.com', 'farhadrimsa', '8i*lvDawoo', 1),
(5, 'emylee.ault@mail.com', 'emyleeault', 'neAssievo&6', 1);

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

