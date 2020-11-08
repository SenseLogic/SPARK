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
(1, 'Other and taught thoroughly understand this.', 'other-and-taught-thoroughly-understand-this', 'As honey collected and penance. Distant spot of standing like bees, where travellers and wisest ones taught him teach.', 'palm_tree.jpg', 'train.mp4', 'dewilton'),
(2, 'Eyes smile the meals on turning the teachers.', 'eyes-smile-the-meals-on-turning-the-teachers', 'World by scolding and made to appeal to salvation, silently begging buying receiving it rarely laughed aloud.', 'beach.jpg', 'bus.mp4', 'steranka'),
(3, 'Blind strength and patience.', 'blind-strength-and-patience', 'Shall not observed the bath for about me over, possessions renounced your keen eyes and if once in confirmation. Have it with only be so long. Nodded for that supple hand his time still lacks.', 'surfer.jpg', 'train.mp4', 'dewilton'),
(4, 'Opened mouth how despicable to miracles in words.', 'opened-mouth-how-despicable-to-miracles-in-words', 'Before yesterday I also by any longer back. Bad voices very nice exclaimed lamentingly its death.', 'palm_tree.jpg', 'bus.mp4', 'pestill'),
(5, 'It\'s true I\'m greeting me.', 'it-s-true-i-m-greeting-me', 'How should the kamaswami-people had held him humiliate himself fall, him again bowed touching his decision in the. Lust covetousness sloth had drowned today.', 'surfer.jpg', 'train.mp4', 'steranka'),
(6, 'Boat had remained within the senses the father.', 'boat-had-remained-within-the-senses-the-father', 'Fell into being annoyed and treated him an advice, though in kissing which there still that she asked amusedly.', 'palm_tree.jpg', 'train.mp4', 'steranka'),
(7, 'Father went on hers.', 'father-went-on-hers', 'People are being able to understand many years. Taught thoroughly understand that foolish but you\'re saying, son which a caste a farewell to think. Though without judgement without possessions of which seems to smile.', 'beach.jpg', 'bus.mp4', 'dewilton'),
(8, 'Read this arrogance into soil and his soul.', 'read-this-arrogance-into-soil-and-his-soul', 'Children with none of complete hopelessness and offerings, no teaching a prayer admonition, gave his bright smile to breathe sparingly learned it.', 'palm_tree.jpg', 'train.mp4', 'dewilton'),
(9, 'His familiarity with awe the book of questions.', 'his-familiarity-with-awe-the-book-of-questions', 'Blossomed slowly it can teach just knowing this incarnation. Will receive me one nothing else could remember, black ones as this you planning to teach you.', 'beach.jpg', 'bus.mp4', 'pestill'),
(10, 'He\'s looking proudly and just listening.', 'he-s-looking-proudly-and-just-listening', 'Willingness delights my dear friend. Fully understanding it said when my hair not belong to.', 'beach.jpg', 'train.mp4', 'dewilton');

CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Leydig', 'maryellen.bahia@outlook.com', 'Atipat', '2011-06-06 11:40:05'),
(2, 'Woodrow', 'christyna.szpakowski@mail.com', 'Ogterse', '2012-09-03 16:06:33'),
(3, 'Maeya', 'oper.hautanen@yahoo.com', 'Illerico', '2002-07-25 06:04:47'),
(4, 'Stephenson', 'bernetta.hansen@mail.com', 'Arsandyavu', '2013-06-23 10:17:16'),
(5, 'Ozmore', 'christabel.smoot@gmail.com', 'Carornaz', '2010-04-12 23:44:53');

CREATE TABLE `SECTION` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Slug` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `SECTION` (`Id`, `Name`, `Slug`) VALUES
(1, 'Steranka', 'steranka'),
(2, 'Dewilton', 'dewilton'),
(3, 'Pestill', 'pestill');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'ojegerano', 'Came forcefully out of monks came who used to, knew and princes would spent his kind as ever, surrounded by begging buying bananas in everything.'),
(2, 'alokip', 'Fasting waiting how do that only requires my stomach. His dream he returned to something real, another hour when I\'m giving me excellent one. Times been just one how she played the business.'),
(3, 'motoile', 'Always picked them this behind from taking shape, for three skinny and smiling from following him, won\'t make it moves in her friend the daemons. Smart face reminded him foamed at hers. Pride of writing important affairs with an untouchable peace.'),
(4, 'beaunet', 'Sir always existed in itself whether this way, accepted it he needed sin to bed. Pearls he ate once and disdainfully back right away, oldest monks as time afterwards when was broken.'),
(5, 'nicoletten', 'Takes everyone had guided me have asked himself. Heard him and wisdom cannot love one spoke, fear and kindness towards himself that I\'ve been fleeting. In deep sadness as foolish acts for riches.');

CREATE TABLE `USER` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Email` TEXT NULL, 
  `Pseudonym` TEXT NULL, 
  `Password` TEXT NULL, 
  `IsAdministrator` TINYINT UNSIGNED NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `USER` (`Id`, `Email`, `Pseudonym`, `Password`, `IsAdministrator`) VALUES
(1, 'root@root.com', 'root', 'xyz', 1),
(2, 'melisa.sookdeo@gmail.com', 'melisasookdeo', 'Vul%l3e', 1),
(3, 'vijya.mand@hotmail.com', 'vijyamand', 'ans4au-R', 0),
(4, 'clestell.arseneau@hotmail.com', 'clestellarseneau', 'ar8Fk?y', 0),
(5, 'concettina.shupe@outlook.com', 'concettinashupe', 'e7lkaru:Tl', 0);

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

