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
(1, 'Lovely thought we must do right away.', 'lovely-thought-we-must-do-right-away', 'Go and unleash it already, herself had only deceive others.', 'palm_tree.jpg', 'train.mp4', 'hipp'),
(2, 'Listened curiously and rose from myself.', 'listened-curiously-and-rose-from-myself', 'Words pure one heading for weddings and words, day exalted teacher the dust in you. That you\'ve slept this to endure.', 'palm_tree.jpg', 'bus.mp4', 'handschy'),
(3, 'Just ready and starts to give.', 'just-ready-and-starts-to-give', 'Not died had lived the non-self, aren\'t the spectacle of a.', 'palm_tree.jpg', 'train.mp4', 'handschy'),
(4, 'Weren\'t you follow that.', 'weren-t-you-follow-that', 'Might easily thus sufferingly thus happily was in love. That secret which everyone in perfect everything he thought, walked through the passenger spoke their teachers, well she uttered a highway-robber and evening.', 'surfer.jpg', 'bus.mp4', 'handschy'),
(5, 'Beautiful woman and golden cage.', 'beautiful-woman-and-golden-cage', 'Softly he whispered a good health, us await with them grow for yours you\'ll see.', 'palm_tree.jpg', 'bus.mp4', 'clark'),
(6, 'Than to bits by innumerable who seek depth.', 'than-to-bits-by-innumerable-who-seek-depth', 'Whenever they used crude swearwords, attentively he called timidly for his arm.', 'palm_tree.jpg', 'train.mp4', 'handschy'),
(7, 'Father which goal there was standing at hers.', 'father-which-goal-there-was-standing-at-hers', 'Wants to teachings is starting to myself yesterday greeting you, whispered a mean deceitful priest any truth can wait.', 'palm_tree.jpg', 'train.mp4', 'clark'),
(8, 'Would reside where from that you.', 'would-reside-where-from-that-you', 'Everything was nobody close to beat him, bad talk to continue learning. Exalted teachings was listening to sleep.', 'surfer.jpg', 'train.mp4', 'clark'),
(9, 'Today neither body however small it laughed.', 'today-neither-body-however-small-it-laughed', 'Years simply believed his mind went outside. Heard everything hard my amusement, up with was something he wrestled in perfect respect.', 'surfer.jpg', 'bus.mp4', 'hipp'),
(10, 'You\'re stronger with crystal not to speak.', 'you-re-stronger-with-crystal-not-to-speak', 'Slowly ripened in hearing all vices through a timid voice, myth of enlightenment which many ways leading away his farewell.', 'palm_tree.jpg', 'train.mp4', 'clark');

CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Koohi', 'bernete.escobido@gmail.com', 'Evolyndonu', '2011-03-11 16:56:43'),
(2, 'Henthorne', 'maurijn.brocklebank@live.com', 'Ortandlo', '2003-06-19 19:51:34'),
(3, 'Boppana', 'kamsuen.loro@hotmail.com', 'Indawar', '2008-10-05 14:48:13'),
(4, 'Raila', 'fiona.harker@gmail.com', 'Pataha', '2008-07-02 14:35:09'),
(5, 'Boisseau', 'janeen.brabant@mail.com', 'Karearlen', '2014-12-01 03:03:03');

CREATE TABLE `SECTION` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Slug` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `SECTION` (`Id`, `Name`, `Slug`) VALUES
(1, 'Hipp', 'hipp'),
(2, 'Clark', 'clark'),
(3, 'Handschy', 'handschy');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'ohnsusami', 'Now you\'ve heard all lacks completeness roundness oneness. Man like doing so well rested flowed from it, boy give us on turning but was a pilgrimage. Smart is no gift which might come to servants.'),
(2, 'ergenormyq', 'Bad whether time existed whether living according to friend, it\'s all in one place saw gods together. Weren\'t you still fighting his business and beautifully, broke loose embraced him than a chandogya-upanishad the gamblers.'),
(3, 'ettachestin', 'Many among his any work did see everything. Shimmered through enlightenment he shall not quite right, my willingness to earthly things have aged very day. Sir and bees wind silverishly blew through to burn.'),
(4, 'ispral', 'Heard that has many venerable teachings prayer admonition, knowing it only noticed here he learned among. Always obeyed her will speed on gods, I saw trees and brightly the wine of them.'),
(5, 'maragecheriz', 'Pearls he nodded for some more quiet, told that perfected ones had used to, indignation is leaving with life you practise meditation. Isn\'t he used the stable where would teach me. Friend of small lines of eternity between evil words.');

CREATE TABLE `USER` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Email` TEXT NULL, 
  `Pseudonym` TEXT NULL, 
  `Password` TEXT NULL, 
  `IsAdministrator` TINYINT UNSIGNED NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `USER` (`Id`, `Email`, `Pseudonym`, `Password`, `IsAdministrator`) VALUES
(1, 'root@root.com', 'root', 'xyz', 1),
(2, 'christalle.lashmit@hotmail.com', 'christallelashmit', 'ar!a5baTr', 0),
(3, 'tamera.tims@hotmail.com', 'tameratims', 'n5owiO;sof', 1),
(4, 'maryellen.nunold@hotmail.com', 'maryellennunold', 'mLicro3%', 1),
(5, 'kary.subasinghe@outlook.com', 'karysubasinghe', '2wNo+ru', 0);

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

