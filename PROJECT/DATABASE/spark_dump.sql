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
(1, 'Wound was searching timidness.', 'wound-was-searching-timidness', 'He forced him you suffering began, her sedan-chair to collect food even with very own soul. Sun and expectation that always be as animals of rice-cake, only transformed and thin mist tiredness has had disappeared.', 'beach.jpg', 'train.mp4', 'sinkovits'),
(2, 'Stayed there only represented second- or she asked.', 'stayed-there-only-represented-second-or-she-asked', 'Gloomy mind which feel and started after under the perfection, is dead jackal was deeply like this fearful man, o he today as poor as he spoke.', 'palm_tree.jpg', 'bus.mp4', 'losier'),
(3, 'Latter had ripped him out badly.', 'latter-had-ripped-him-out-badly', 'Leapt in vain as true essence of patience. Have admired in hut could accept.', 'palm_tree.jpg', 'train.mp4', 'losier'),
(4, 'Knew himself all perceived the reached the father.', 'knew-himself-all-perceived-the-reached-the-father', 'Wound did not become wiser has stopped thinking had been, monks used to opinions in hut. Haven\'t stopped fighting for fifteen days, wound this love for worshipped river.', 'surfer.jpg', 'bus.mp4', 'sinkovits'),
(5, 'Have slipped out there disappointment and the.', 'have-slipped-out-there-disappointment-and-the', 'Have feared gambler few are perhaps soon I\'ll think little, yes she not care about this myth, tell the shade or bad talk to fast.', 'beach.jpg', 'bus.mp4', 'anstead'),
(6, 'O he belong to.', 'o-he-belong-to', 'Speaking she still that which feel like this, better teachings every time and started to teach them.', 'surfer.jpg', 'bus.mp4', 'sinkovits'),
(7, 'Clean and contracts on it.', 'clean-and-contracts-on-it', 'Gives merchandise the old be so. Half as your path it miracles had replaced my pilgrimage, went to receive thanks to make love for three years, understood that only returned to reduce the teachings to receive.', 'beach.jpg', 'train.mp4', 'losier'),
(8, 'Black ones from a moment.', 'black-ones-from-a-moment', 'Always good or penitents who seek depth, speaking still an untouchable peace. Shouldn\'t I can\'t do so the verse, fear he learned beginning now starting to servants.', 'palm_tree.jpg', 'bus.mp4', 'anstead'),
(9, 'Fully become my heart rejoiced.', 'fully-become-my-heart-rejoiced', 'I\'m starting again regard as I said, non-eternal things can understand many thousands. Then wanted for two days short the one, means of wrinkles distorted from the.', 'surfer.jpg', 'train.mp4', 'anstead'),
(10, 'You\'re friendly and once before read a man.', 'you-re-friendly-and-once-before-read-a-man', 'Monks are none of ill-humour of all friendship, others full the separation from one chatted with you kidding. You\'ve slept in years ago or entirely a starry sky.', 'beach.jpg', 'bus.mp4', 'sinkovits');

CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Gerlinsky', 'van.royals@yahoo.com', 'Ingworrusa', '2014-02-21 11:36:11'),
(2, 'Clarkstewart', 'ranna.harmon@outlook.com', 'Mattixtin', '2015-05-17 01:34:58'),
(3, 'Settles', 'lee.manverse@gmail.com', 'Instohe', '2009-08-23 18:49:36'),
(4, 'Mok', 'eldon.nilsson@mail.com', 'Misalez', '2010-03-09 23:09:14'),
(5, 'Lew', 'jamal.bryant@outlook.com', 'Bettina', '2003-02-14 20:53:05');

CREATE TABLE `SECTION` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Slug` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `SECTION` (`Id`, `Name`, `Slug`) VALUES
(1, 'Anstead', 'anstead'),
(2, 'Sinkovits', 'sinkovits'),
(3, 'Losier', 'losier');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'akavalene', 'Walked through realizations all that path every day, herself had asked many like life and taught. Since his fate for we get him teach you.'),
(2, 'giuseppeko', 'Had eaten for guests to my friend, spoke quietly flowing did and legs and venerable teacher. Passed by it away before any guard. Always becomes morning the alms-dish in thinking, pleasure cannot deny my wife\'s funeral pile.'),
(3, 'arebelloj', 'Learned every urge to squeeze the rumbling with doubt, scolding dear if you\'ll again as an ending, propelling themselves all secrets all seemed near it. Enchantment which so strangely well your heart, you my group and faces many pretty at him.'),
(4, 'ortussu', 'Half all elements of animal in heat, shimmered his question in my father\'s face. Your servant as ever been I know him, travelled for telling me too spoke to smile, entire game of crocodiles of his counterpart.'),
(5, 'akachun', 'Takes everyone can stand and trust I felt. She\'ll die a passion something like happiness to speak, all dying also build an immense burst of it. Bowed with words gets distorted from these foolish world.');

CREATE TABLE `USER` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Email` TEXT NULL, 
  `Pseudonym` TEXT NULL, 
  `Password` TEXT NULL, 
  `IsAdministrator` TINYINT UNSIGNED NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `USER` (`Id`, `Email`, `Pseudonym`, `Password`, `IsAdministrator`) VALUES
(1, 'root@root.com', 'root', 'xyz', 1),
(2, 'donia.ibsen@mail.com', 'doniaibsen', 'Ui=nner7mat', 0),
(3, 'annora.callos@hotmail.com', 'annoracallos', 'oS/sta1fet', 1),
(4, 'alastair.toews@mail.com', 'alastairtoews', 'eNv/ess0er', 1),
(5, 'florine.mustafa@mail.com', 'florinemustafa', 'ou6dhu&lPa', 1);

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

