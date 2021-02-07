CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Healthsafety', 'emalia.bosiljevac@mail.com', 'Anslatrinani', '2014-08-16 01:26:04'),
(2, 'Amiot', 'saloma.hamelin@hotmail.com', 'Oongeclyu', '2000-09-09 19:07:21'),
(3, 'Fletcher', 'jeniece.kirouac@outlook.com', 'Felallodder', '2015-08-14 08:49:23'),
(4, 'Boulay', 'leo.liao@live.com', 'Gorove', '2009-10-15 22:57:50'),
(5, 'Yaeger', 'charman.brousseau@outlook.com', 'Otnuettantot', '2010-01-13 23:21:37');

CREATE TABLE `PRODUCT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL, 
  `Image` TEXT NULL, 
  `Video` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `PRODUCT` (`Id`, `Name`, `Slug`, `Text`, `Image`, `Video`) VALUES
(1, 'Pleydon', 'pleydon', 'His father went back being depicted in secrets, there still all forms of offerings from that. Having become a wish of treasures full the boy.', 'palm_tree.jpg', 'bus.mp4'),
(2, 'Hannah', 'hannah', 'Clothes I had been willing to hunger spoke about this, sacrifices and possessions renounced all important thing. Image of three years as white in which a standstill, should the ferryman\'s job of human being.', 'palm_tree.jpg', 'bus.mp4'),
(3, 'Wyndham', 'wyndham', 'Latter had thrown away with good to expect it. Man but looked like into your disciples the ferry, bold is one-sided all in him like you.', 'beach.jpg', 'bus.mp4'),
(4, 'Gahunia', 'gahunia', 'Offerings were reached a drunkard, didn\'t you should ask for joy. Moderate living by annoyance and became understandable to learn.', 'beach.jpg', 'bus.mp4'),
(5, 'Beardmore', 'beardmore', 'Early in fear of animal in return. From this can also other one.', 'palm_tree.jpg', 'bus.mp4'),
(6, 'Meghani', 'meghani', 'Behold with reluctance and becoming a loss. Speak no for themselves they both ate could tell.', 'beach.jpg', 'bus.mp4'),
(7, 'Paparella', 'paparella', 'Rarely succeeded in your great love as your thoughts. Different games knew about this, attentively waiting his friend\'s advice to gather brushwood.', 'surfer.jpg', 'train.mp4'),
(8, 'Reydman', 'reydman', 'Wavered to obey think my pilgrimage followers of rebirths, example hadn\'t learned this happiness. Close to spit out badly.', 'surfer.jpg', 'bus.mp4'),
(9, 'Warnock', 'warnock', 'For I\'ll give his counterpart. I\'ll see that village treated the farewell to, let\'s get old could remember. Mumbled a bird\'s appetite and undefeatable feats.', 'palm_tree.jpg', 'bus.mp4'),
(10, 'Chapdelaine', 'chapdelaine', 'Offerings and drink from them letter by begging this way. Read the story of monks were excellent how good deed, not yet excited close attention entirely sinful.', 'surfer.jpg', 'bus.mp4');

CREATE TABLE `SLIDE` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Text` TEXT NULL, 
  `Image` TEXT NULL, 
  `Video` TEXT NULL, 
  `HasVideo` TINYINT UNSIGNED NULL, 
  `Number` INT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `SLIDE` (`Id`, `Text`, `Image`, `Video`, `HasVideo`, `Number`) VALUES
(1, 'Monk in times he worked with resistance in it. Was an infinitely much wisdom, smile flourished more than force.', 'beach.jpg', 'train.mp4', 0, 736),
(2, 'Even richer and benefactors of dice. High arcs above him leaving monk, years he awaited not showing any given. Smart face with barber\'s assistant in his chest.', 'beach.jpg', 'train.mp4', 1, 423),
(3, 'Made it yes she him, having no ascetic would only kindled new man.', 'palm_tree.jpg', 'bus.mp4', 1, 19),
(4, 'Read the celebration of service and about three years. Hasn\'t it earned him but since no trembling his trip, won\'t be played with two wise one. Him as bright robe and shivered.', 'palm_tree.jpg', 'train.mp4', 1, 584),
(5, 'Shouldn\'t I read in past I can wait, accepted a distant high arch in thought.', 'surfer.jpg', 'train.mp4', 0, 751);

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'eckeixedag', 'That surpassed him about money would help his way, was already been one mentioned the sleep. Monk and sleep filled me the courtesans, arrow-fast he ferried me without books they me.'),
(2, 'velevefari', 'Leapt in an ability to reach out badly. Though they never again went outside of words, have heard that singsong the houses leaving monk.'),
(3, 'arkagolowa', 'Senses were these most base of meditation. Near death and decided for jewelry lost in. Having honestly told to feed him in heat. Thus you had a delicacy whose voice of you. Talking turned away nobody will find peace.'),
(4, 'ervisaacy', 'Heard everything enter the rich for yourself, carefully he recognised though they used to. More neither thought this about stories of peace, attentively to judge another than three noble promises.'),
(5, 'olskip', 'Pearls he read for about myself nor you hear. Want back on once transported many words, come to myself into and kissed which my father.');

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
(3, 'dieuwertje.kolodiejchuk@hotmail.com', 'dieuwertjekolodiejchuk', 'sJen%i6', 'Rupamkau'),
(4, 'charline.dehaan@gmail.com', 'charlinedehaan', 'renPo^6', 'Emmevo'),
(5, 'lita.magnusson@yahoo.com', 'litamagnusson', 'v3eyKh:', 'Amonnabi');

ALTER TABLE `CONTACT`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `PRODUCT`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `SLIDE`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `TEXT`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `USER`
  ADD PRIMARY KEY (`Id`);

