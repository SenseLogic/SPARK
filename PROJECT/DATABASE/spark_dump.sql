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
(1, 'Secretly he where it earned him still all.', 'secretly-he-where-it-earned-him-still-all', 'More quickly and smiled at hers, softly and calm hearts are subject to his hand, exclaimed if every work for them. Look at other he now both perceived it became embarrassed.', 'surfer.jpg', 'bus.mp4', 'pighin'),
(2, 'Pearls he openly turned gray.', 'pearls-he-openly-turned-gray', 'Smart as time of oneness above them towards laughing gods, lacked nothing when his impending death, shimmered through your son\'s upbringing. Followed the traveller after our walk and curious.', 'beach.jpg', 'bus.mp4', 'cheney'),
(3, 'Son that always everything.', 'son-that-always-everything', 'Another way that very grateful was himself than learning, daily at one we won\'t, worry or perhaps reciprocate it laugh about.', 'palm_tree.jpg', 'bus.mp4', 'cheney'),
(4, 'Arrow-fast he seemed to consciousness.', 'arrow-fast-he-seemed-to-consciousness', 'Pleasure all would delight my heart, means that very beautiful women are. Nodded for themselves floated along the rumbling hunger in return.', 'surfer.jpg', 'train.mp4', 'pighin'),
(5, 'Didn\'t you suffering all lacks completeness roundness oneness.', 'didn-t-you-suffering-all-lacks-completeness-roundness-oneness', 'With very satisfied a to fast. Purpose to another for telling you still his search was.', 'beach.jpg', 'bus.mp4', 'cheney'),
(6, 'Shimmered reddishly in he would go then.', 'shimmered-reddishly-in-he-would-go-then', 'Them scolding dear and sea-shells screamed and tender supple hand, father on in again returned in confirmation.', 'beach.jpg', 'train.mp4', 'cheney'),
(7, 'Propelling themselves physicians trying so now looked inside.', 'propelling-themselves-physicians-trying-so-now-looked-inside', 'Will begin my good for. Waiting to forget him plunging a came walking along.', 'surfer.jpg', 'bus.mp4', 'pighin'),
(8, 'Smiling brightly red pillows under my heart.', 'smiling-brightly-red-pillows-under-my-heart', 'Don\'t beat where were willing, late once it now let\'s be at night.', 'surfer.jpg', 'bus.mp4', 'cheney'),
(9, 'Must chose the famous courtesan has told him.', 'must-chose-the-famous-courtesan-has-told-him', 'We learn the beams of pondering. Offerings and teachers warnings his companion his look upon him, thoughts can\'t help his voice the boat for me yet, do therefore good for much money wasted life had been.', 'surfer.jpg', 'bus.mp4', 'cheney'),
(10, 'Pearls he bowed to smile.', 'pearls-he-bowed-to-smile', 'Your river was he hated trick of peacocks feathers. Remained alien and dissolved in silence wearing such feats.', 'beach.jpg', 'train.mp4', 'cheney');

CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Mastronardi', 'judith.eow@live.com', 'Aczmarskaley', '2013-08-01 07:27:52'),
(2, 'Welham', 'crystie.goniotakis@live.com', 'Nancir', '2003-05-13 17:00:15'),
(3, 'Mcfarland', 'daveta.viehweg@gmail.com', 'Owserrux', '2004-04-13 13:19:37'),
(4, 'Nielsen', 'gracomda.mcdavitt@mail.com', 'Orhabokara', '2009-06-05 14:38:54'),
(5, 'Jasny', 'dianemarie.tuxford@outlook.com', 'Elnyko', '2001-10-12 13:49:34');

CREATE TABLE `SECTION` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Slug` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `SECTION` (`Id`, `Name`, `Slug`) VALUES
(1, 'Cheney', 'cheney'),
(2, 'Mcclarren', 'mcclarren'),
(3, 'Pighin', 'pighin');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'riacin', 'Proper merchant any around give his head, I cannot be anything else I would like bees. Putting himself by everyone had started to be so. Close to feed sad about and hard to say, want to pay because we parted from such jokes.'),
(2, 'isohite', 'Wound it today I\'m greeting you take my words, let\'s do silently his gaze sought his landlords business. Good is right here was walking along, carefully prepared food in that pleasure and listened silently.'),
(3, 'arqeadetel', 'Didn\'t you call out and called name. Herself had crouched listening to beautiful clothes and tenacity, opposite of burning skin that both followed him.'),
(4, 'umbliu', 'Them shared their lunch the time had died, bad people own face having seen me. Accustomed to grow just as never come to say.'),
(5, 'udanajerut', 'Listen up here now thought these verses. Early in perfect chain a wine from him, soon afterwards when every joyful and spoke sadly. That\'s not as bathing performing the stone.');

CREATE TABLE `USER` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Email` TEXT NULL, 
  `Pseudonym` TEXT NULL, 
  `Password` TEXT NULL, 
  `IsAdministrator` TINYINT UNSIGNED NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `USER` (`Id`, `Email`, `Pseudonym`, `Password`, `IsAdministrator`) VALUES
(1, 'root@root.com', 'root', 'xyz', 1),
(2, 'sastry.arkesteijn@live.com', 'sastryarkesteijn', 'm0egu#milC', 1),
(3, 'katja.chugha@live.com', 'katjachugha', 'i:l6ekGo', 0),
(4, 'saman.georges@live.com', 'samangeorges', 'aridi9M/l', 1),
(5, 'perrine.wilkins@gmail.com', 'perrinewilkins', 'la8kP&opaxi', 1);

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

