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
(1, 'Got to call them my pouch.', 'got-to-call-them-my-pouch', 'Any given her mouth nor self-castigation, might perhaps your father for an ascetic. Full he tried to meet the completion. Not one is divine voices.', 'surfer.jpg', 'bus.mp4', 'shiel'),
(2, 'Not care very good.', 'not-care-very-good', 'Anxiety in he exclaimed loudly, sir is harming me then come over her friend\'s face.', 'palm_tree.jpg', 'bus.mp4', 'shiel'),
(3, 'Few words while bent over my friend.', 'few-words-while-bent-over-my-friend', 'Father and woe full height any noise then the merchants\', soul sent for exalted teachings was left.', 'palm_tree.jpg', 'train.mp4', 'ergle'),
(4, 'Evening with was followed him did it importance.', 'evening-with-was-followed-him-did-it-importance', 'Name of remote areas of are our business. Won\'t be polite towards him.', 'palm_tree.jpg', 'bus.mp4', 'abedi'),
(5, 'All peels in the novices.', 'all-peels-in-the-novices', 'May go into deception called name, flesh waned from within you force him solely by bees.', 'palm_tree.jpg', 'bus.mp4', 'shiel'),
(6, 'Exalted one spoke politely.', 'exalted-one-spoke-politely', 'Know in circles we progress, meditation secret out a temple of eternity of pondering, loudly clapped her will leave your river.', 'surfer.jpg', 'train.mp4', 'shiel'),
(7, 'Sacrifices and worldly and cannot be welcome.', 'sacrifices-and-worldly-and-cannot-be-welcome', 'That did this kind childlike people came back. Accustomed to bitter despair I\'ve already learning all this. High caste of ran invisibly had only deceive others.', 'beach.jpg', 'train.mp4', 'ergle'),
(8, 'Glance and longed to reach my thoughts.', 'glance-and-longed-to-reach-my-thoughts', 'Another merchant who has no effort to glance realized, indignant he fasted for we monks on hers. Or sorcerers or joy in pain at night, while stopped on downhill always everything only knew it.', 'beach.jpg', 'bus.mp4', 'abedi'),
(9, 'Does nothing burned any will go on it.', 'does-nothing-burned-any-will-go-on-it', 'Enjoyed his calm in ear his blissfulness between the sky, loudly and words place where are moving water, deaf and bloody shoulders by killing the following day.', 'surfer.jpg', 'train.mp4', 'shiel'),
(10, 'Man I part in error that is said.', 'man-i-part-in-error-that-is-said', 'Life to punish me myself, consciousness returned the spoke taught by something for by letter, close attention with brawny arms. Few and whose face resembled his teachings.', 'palm_tree.jpg', 'train.mp4', 'abedi');

CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Grona', 'kynthia.hien@gmail.com', 'Ardjomon', '2012-05-22 10:04:09'),
(2, 'Rajchwald', 'hot.ergle@outlook.com', 'Olczanskiran', '2009-01-13 08:34:05'),
(3, 'Friedrich', 'fanchette.chee@live.com', 'Jeejallyq', '2010-03-01 06:28:55'),
(4, 'Milanovich', 'ivett.larwill@mail.com', 'Ometteronciw', '2002-12-21 18:31:30'),
(5, 'Fitzpatrick', 'oorschot.shepard@live.com', 'Ingaminnnie', '2001-09-22 05:45:11');

CREATE TABLE `SECTION` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Slug` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `SECTION` (`Id`, `Name`, `Slug`) VALUES
(1, 'Ergle', 'ergle'),
(2, 'Abedi', 'abedi'),
(3, 'Shiel', 'shiel');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'jossinehano', 'Better teachings have wrinkles distorted face flourished more zealous, young in this soft yet my soul had risen. Deaf and rage he presented his tale, else he who had slept alone in himself, silently spoke go now see you mean deceitful priest.'),
(2, 'astanto', 'Been victorious so well this bright robe, monk looked to slip away every obtained by him. Gave no childish idea have served food any longer, ah you see what you\'re friendly patience. Were pretty shoes of tale when you take it.'),
(3, 'leralew', 'Shall spent with out from following him, at and what exists as a farewell to death. Stopped suffering had sighed and precocious words.'),
(4, 'oannakhi', 'Told that foolish and me know what. Young vain vacuous speaker sensed how could you, I\'m no trembling his bowl of existence in secrets. Wanted to my hut with none but eternal itself.'),
(5, 'maieroshi', 'Propelling themselves away nobody may go any other one, but simultaneously which many pilgrims were also do right. Truly searching was sick priests determining the morning.');

CREATE TABLE `USER` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Email` TEXT NULL, 
  `Pseudonym` TEXT NULL, 
  `Password` TEXT NULL, 
  `IsAdministrator` TINYINT UNSIGNED NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `USER` (`Id`, `Email`, `Pseudonym`, `Password`, `IsAdministrator`) VALUES
(1, 'root@root.com', 'root', 'xyz', 1),
(2, 'rachel.foucault@mail.com', 'rachelfoucault', 'ackoTb+i7', 1),
(3, 'bora.kiecksee@yahoo.com', 'borakiecksee', 'Sichisk%o1p', 1),
(4, 'canadian.hawryszko@outlook.com', 'canadianhawryszko', 'uga5ke%nFi', 1),
(5, 'lora.aleong@gmail.com', 'loraaleong', 'ru3!koE', 0);

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

