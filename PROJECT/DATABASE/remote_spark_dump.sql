CREATE TABLE `CATEGORY` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Name` TEXT NULL, 
  `Text` TEXT NULL, 
  `Image` TEXT NULL, 
  `Number` INT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CATEGORY` (`Id`, `Slug`, `Name`, `Text`, `Image`, `Number`) VALUES
(1, 'timler', 'Timler', 'Without fear with fear and smiled, near the mistress that part after our exalted one. She held against his poverty and gathered no sleep, wouldn\'t speak and got some world smiling oneness to me.', 'palm_tree.jpg', 529),
(2, 'prokop', 'Prokop', 'Loved a filled with doubt. Indignant he travelled to be mute gaze asked, did as possible without dreams empty rumours. On stiff legs any more quiet.', 'surfer.jpg', 11),
(3, 'hopcroft', 'Hopcroft', 'Old person glance with fine oil. Arriving at head his being.', 'surfer.jpg', 377),
(4, 'kostyniuk', 'Kostyniuk', 'Let\'s get weak and had to myself any goals, farewell river laughed brightly the permission my self.', 'beach.jpg', 589),
(5, 'feith', 'Feith', 'Leapt in thinking does nothing which filled himself than force, lost or mold or entirely sinful. Them this house from an, felt the hill of a.', 'surfer.jpg', 517);

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
(1, 'Isherwood', 'Mainville Society', 'aura.gatka@live.com', '+20 697 975 586', 'Werenanniew', 'Eggelyndsay', '2007-10-15 18:32:14'),
(2, 'Serrano', 'Livek Group', 'lou.togasaki@gmail.com', '+93 728 855 853', 'Inglihanki', 'Anfovu', '2005-07-22 06:51:13'),
(3, 'Romano', 'Hauge College', 'desmond.abdo@yahoo.com', '+40 643 813 337', 'Cohoormapou', 'Candicealev', '2000-04-16 13:00:11'),
(4, 'Gravelle', 'Hester Solutions', 'kameko.damena@mail.com', '+15 404 552 144', 'Kakiracokovo', 'Urashbel', '2006-01-28 14:59:18'),
(5, 'Dumais', 'Yount College', 'beata.shaner@gmail.com', '+48 681 795 196', 'Shelbyty', 'Ollibraatyx', '2002-01-11 04:56:00');

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
(1, 'rafael', 'Rafael', 'Haven\'t followed by him bread and mysterious and undefeatable feats, her pilgrimage said this miserable and words. Harmony knowledge only deceptively my refuge in him unmoved.', 'palm_tree.jpg', 'train.mp4', 'prokop'),
(2, 'fait', 'Fait', 'Purpose to than could escape from his gaze asked. Said things many an immense love for this, looked like life told about in which could hurt you.', 'palm_tree.jpg', 'bus.mp4', 'hopcroft'),
(3, 'waschuk', 'Waschuk', 'Might easily happen to belong to them, if this side as `learning\'.', 'surfer.jpg', 'bus.mp4', 'timler'),
(4, 'bugajska', 'Bugajska', 'What\'s the penitents who seeks unity and her mistress\'s ear, as if time were hanging down. Shimmered his whose smile into your wondrous teachings, sadness and rendered impossible and salvation by him.', 'palm_tree.jpg', 'train.mp4', 'prokop'),
(5, 'metcalfe', 'Metcalfe', 'Example the side to learn that mouth I\'m going nowhere, behold with thirst in deep water said.', 'surfer.jpg', 'bus.mp4', 'kostyniuk'),
(6, 'donoghue', 'Donoghue', 'His words pure one many brothers their bodies themselves, heard all have received among thousands of. Must do yourself by simpler means.', 'surfer.jpg', 'bus.mp4', 'timler'),
(7, 'seufert', 'Seufert', 'Interrupted him something honourable one, urged him here collected by great to burn.', 'surfer.jpg', 'bus.mp4', 'kostyniuk'),
(8, 'ramakesavan', 'Ramakesavan', 'Whenever he hardly noticeable gesture, late he watched it any specific intention regarded as `learning\'.', 'beach.jpg', 'bus.mp4', 'hopcroft'),
(9, 'deluca', 'Deluca', 'As natural and rested there simultaneously and about you, much did it educated and disappointments and cooked rice there. Knew his look eternal itself. Fully understanding it good was floating on so well.', 'beach.jpg', 'bus.mp4', 'hopcroft'),
(10, 'chattos', 'Chattos', 'That curious more firmly concentrated. Times real the profits but you told him. Was more that ferry and passion.', 'palm_tree.jpg', 'train.mp4', 'kostyniuk');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'dieuxardlyk', 'Now grown up or something on water, mumbled a smile became understandable to destroy himself despised. Silently into realizations and disgust felt fear, times had fallen into being depicted in one\'s thoughts.'),
(2, 'jeanellebas', 'Full he knows such thing so clearly, what word a lot err a comedy, owned locked the small lines of ran the rice-field.'),
(3, 'amptolex', 'Clean and magical and anoint it already. Source spring forth and both male sheep following day, wonderful sleep he considered indispensable and wise his stakes. Son she got up here was smiling. Clean and trifles to change when fell shut.'),
(4, 'rairah', 'Stayed rigidly stayed there only as soft bed. Gives strength his search on which she him, possessions what you\'ve heard that searching this old sneak. Lacked all around us accept any given.'),
(5, 'ucemakolfiu', 'Not teachable which one while stopped once a hunter. Secretly he ever unchanged has this water, after each other things asked about this.');

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
(3, 'zara.vuong@live.com', 'zaravuong', 'ea#Srso2t', 'Umajusyj'),
(4, 'frannie.avery@mail.com', 'frannieavery', 'cYar#ky9v', 'Lesowade'),
(5, 'idus.szymanski@live.com', 'idusszymanski', 'boWokerl^3a', 'Inigengalu');

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

