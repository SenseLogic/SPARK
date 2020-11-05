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
(1, 'Leapt in bed of gold for you.', 'leapt-in-bed-of-gold-for-you', 'Bowed to entirely forgotten and smiled, taught thoroughly starting with impatience did as smart said, been valuable and smile with sky-blue ones as the work.', 'palm_tree.jpg', 'train.mp4', 'leima'),
(2, 'Love the nameless the novices.', 'love-the-nameless-the-novices', 'Language would soon saw with defamation, worry in these are like good deed.', 'palm_tree.jpg', 'bus.mp4', 'hagan'),
(3, 'Past I wished to woman again.', 'past-i-wished-to-woman-again', 'Looking for sixty and a few moments a farewell, while bowing for they would teach me.', 'palm_tree.jpg', 'bus.mp4', 'hagan'),
(4, 'Meditation according to shine on to salvation.', 'meditation-according-to-shine-on-to-salvation', 'Proper it appears to understand the chamber, near the story that part this been.', 'surfer.jpg', 'train.mp4', 'skerlak'),
(5, 'Accustomed to watch a thoughts.', 'accustomed-to-watch-a-thoughts', 'Tell the day you\'ll find salvation, ate only be lived of teachings.', 'palm_tree.jpg', 'bus.mp4', 'leima'),
(6, 'Remained silent until they lay beyond on gods.', 'remained-silent-until-they-lay-beyond-on-gods', 'Way and by thoughts to salvation. Others but they followed him dressed in grief.', 'beach.jpg', 'bus.mp4', 'leima'),
(7, 'Proper merchant was kneeling and cramps of light.', 'proper-merchant-was-kneeling-and-cramps-of-light', 'Scolding dear is very morning before more bring about words, may I recognised you yesterday.', 'surfer.jpg', 'bus.mp4', 'hagan'),
(8, 'Gives me asking to spell whenever he hated.', 'gives-me-asking-to-spell-whenever-he-hated', 'Join us monks and cavities in return to fast. Say so full the quiet calm face having passed quickly, monk and that even every joyful desire, courtesan and I\'m repeating it.', 'surfer.jpg', 'bus.mp4', 'hagan'),
(9, 'Watched him go now an old.', 'watched-him-go-now-an-old', 'Interrupted him when so my best fruit of rice-cake, nothing but she controlled him comfort him none of enlightenment. Loudly clapped her and cooked rice.', 'palm_tree.jpg', 'train.mp4', 'skerlak'),
(10, 'It\'s all he searches for her.', 'it-s-all-he-searches-for-her', 'Today it necessary came walking along, since he helped him asleep. Entire world by something good days to call magic spells, got here was followed the first kiss your heart.', 'beach.jpg', 'train.mp4', 'hagan');

CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Badowski', 'lonnie.storey@outlook.com', 'Hasedgavale', '2011-05-25 22:54:57'),
(2, 'Waitman', 'pricing.dagama@mail.com', 'Rotaggalomo', '2004-11-05 01:57:54'),
(3, 'Mcarthur', 'joellyn.vincent@gmail.com', 'Larestuctid', '2002-03-27 07:26:01'),
(4, 'Masty', 'jose.brindamour@mail.com', 'Nealater', '2005-07-01 22:43:10'),
(5, 'Blazek', 'corabelle.abernethy@mail.com', 'Ierwerthy', '2015-08-28 10:09:41');

CREATE TABLE `SECTION` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Slug` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `SECTION` (`Id`, `Name`, `Slug`) VALUES
(1, 'Leima', 'leima'),
(2, 'Skerlak', 'skerlak'),
(3, 'Hagan', 'hagan');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'enetapacqulu', 'Your house locked the dealers house locked, more clearly at every exercise in your hair. Should go now see all teachings from foolishness.'),
(2, 'annacho', 'Tales and voice commanded him at all, moderate living joy and listlessness of disgust. Us once every insult with me excellent one.'),
(3, 'eskiven', 'Name the ultimate thing we refer to destroy himself, another for I\'ll never be liable for knowledge. More how alone in my glance at night, us is nothing to beg in fact which goal.'),
(4, 'ingillachy', 'Wants to if you\'re talking she admitted, came closer to gnaw at that ferry. Previous life fading from old and tell me. Over forest of gold for quite recognised this water.'),
(5, 'atsacqu', 'Wondrous it if the farmer rice there. Was ready like being separated from death, well and willingly be an animal and our business.');

CREATE TABLE `USER` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Email` TEXT NULL, 
  `Pseudonym` TEXT NULL, 
  `Password` TEXT NULL, 
  `IsAdministrator` TINYINT UNSIGNED NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `USER` (`Id`, `Email`, `Pseudonym`, `Password`, `IsAdministrator`) VALUES
(1, 'root@root.com', 'root', 'xyz', 1),
(2, 'aartjan.payton@outlook.com', 'aartjanpayton', '/itzKiu5', 0),
(3, 'devon.marc@outlook.com', 'devonmarc', 'la4#nanehI', 1),
(4, 'freya.ufomadu@outlook.com', 'freyaufomadu', 'rucum2pip/S', 0),
(5, 'fionan.mcdaniels@mail.com', 'fionanmcdaniels', 'triNnh1+e', 0);

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

