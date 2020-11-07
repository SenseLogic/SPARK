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
(1, 'They both perceived it.', 'they-both-perceived-it', 'Warrior gives merchandise in contemplation washing his greeting you, nodded for help them after every spot his moods, simply thus similar to their fearfulness. Again you\'re talking to strive for her.', 'palm_tree.jpg', 'train.mp4', 'loza'),
(2, 'Wheel once heard everything.', 'wheel-once-heard-everything', 'Possessions renounced your areas of pain there gray in thinking, left but not heard shuddering with only I came back, for me out with laughter at once transported many voices.', 'palm_tree.jpg', 'bus.mp4', 'loza'),
(3, 'Else giving me are wise.', 'else-giving-me-are-wise', 'Taught him would wish without clothes, possessions renounced all paths in her beautiful trees. I\'m fighting his secret from both neither food and disappointment. Opened the teachings perfected one.', 'surfer.jpg', 'train.mp4', 'goldenberg'),
(4, 'Day a cleansing every moment.', 'day-a-cleansing-every-moment', 'I\'m greeting his spirit in your goal by this, yes even before we progress. Willingness delights my sleep properly again.', 'palm_tree.jpg', 'bus.mp4', 'goldenberg'),
(5, 'Behold with green water every insult with words.', 'behold-with-green-water-every-insult-with-words', 'Having a warning reminder to remember this been his son, once before whom I met even doubted in agreement with. Evening had really found in long months passed by.', 'surfer.jpg', 'bus.mp4', 'goldenberg'),
(6, 'Spoke one respect enriched by letter by this.', 'spoke-one-respect-enriched-by-letter-by-this', 'Black hair not able to devour him, thing wonderful verses all manifestations all things you\'ll see.', 'palm_tree.jpg', 'train.mp4', 'marzullo'),
(7, 'Stood by hyaenas was sleeping said.', 'stood-by-hyaenas-was-sleeping-said', 'Will subdued him for my hut, if you\'ve already half gray in love. You\'ve now was awaiting you, occasionally dreaming at all teachings have you recognise that obstacle.', 'palm_tree.jpg', 'bus.mp4', 'loza'),
(8, 'Want to spring of money and smiled.', 'want-to-spring-of-money-and-smiled', 'Afterwards insight but for it, do nothing left on it. Example hadn\'t learned my self, entire world tasted lust for me an equal.', 'beach.jpg', 'bus.mp4', 'marzullo'),
(9, 'First days I\'ve found.', 'first-days-i-ve-found', 'Fine clothes they have to live. Than \'hard water of self-denial by scolding, has given her gifts as wise she asked. Father for help me asking to another those to teachings.', 'beach.jpg', 'train.mp4', 'loza'),
(10, 'Teachings though in thinking.', 'teachings-though-in-thinking', 'Senses the essence lay down his sympathy many thousands. False god it all friendship be made happy fortune, herself had occupied his walk. Ah you up water quietly flowing from under a great.', 'palm_tree.jpg', 'train.mp4', 'marzullo');

CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Dufloth', 'denna.boddeveld@mail.com', 'Advettinheat', '2005-03-17 03:26:40'),
(2, 'Granata', 'persis.eastick@gmail.com', 'Erstudget', '2012-02-25 12:27:09'),
(3, 'Shearer', 'liduine.adler@gmail.com', 'Otheahyp', '2004-01-05 05:23:41'),
(4, 'Leckie', 'fara.subasinghe@gmail.com', 'Hassan', '2009-10-25 04:37:00'),
(5, 'Tripier', 'amil.nemeth@outlook.com', 'Ithundy', '2004-12-24 04:39:51');

CREATE TABLE `SECTION` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Slug` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `SECTION` (`Id`, `Name`, `Slug`) VALUES
(1, 'Loza', 'loza'),
(2, 'Marzullo', 'marzullo'),
(3, 'Goldenberg', 'goldenberg');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'racerib', 'Rest by thought this his lifetime this my thoughts, how everything is satyam verily he searches for himself. Had watched it please not joking friend.'),
(2, 'ulbingarsho', 'Continued walking through a lot it her side, wisdom that only he turned gray in fine oil. Quietly to someone might have this kind childlike people, proper it right path lead me say friend is.'),
(3, 'alavicousez', 'Blind love a hot scent of standing behind me. Boy became her young bird in me honourable one, know it silently out over her she received advice, merchant passed rose to him running in himself despised. Meditation according to suspect that entire eternal thirst.'),
(4, 'kinackmaqy', 'Thinking and get around as one with doubt, haven\'t slept that did see beloved that of anything. Their goal was more from following him. Greed from where travellers of when fell shut.'),
(5, 'eplitzisis', 'Rose had a as this from all life, wondrous it will he whispered quietly his path. Indeed no enlightenment had for my reward, out from time with desire his impending death. Might have once more question in everyone the process.');

CREATE TABLE `USER` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Email` TEXT NULL, 
  `Pseudonym` TEXT NULL, 
  `Password` TEXT NULL, 
  `IsAdministrator` TINYINT UNSIGNED NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `USER` (`Id`, `Email`, `Pseudonym`, `Password`, `IsAdministrator`) VALUES
(1, 'root@root.com', 'root', 'xyz', 1),
(2, 'sibyl.casanova@yahoo.com', 'sibylcasanova', '5Za=tiboh', 1),
(3, 'tiertza.fawcett@live.com', 'tiertzafawcett', 'acFhn2#y', 0),
(4, 'heleen.gajewski@gmail.com', 'heleengajewski', 'ma0cuUq#', 0),
(5, 'mingming.myrillas@gmail.com', 'mingmingmyrillas', '5i+ttFnyk', 1);

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

