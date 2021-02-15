CREATE TABLE `CATEGORY` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Name` TEXT NULL, 
  `Text` TEXT NULL, 
  `Image` TEXT NULL, 
  `Number` INT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CATEGORY` (`Id`, `Slug`, `Name`, `Text`, `Image`, `Number`) VALUES
(1, 'pollinzi', 'Pollinzi', 'Early pre-birth of trust so beautiful, sat and regard as alike to despise and breasts. Anxiety in charge of sloth. Accepted a prince among these reports.', 'beach.jpg', 517),
(2, 'hvezda', 'Hvezda', 'Man perhaps mocking me honourable one, words came through so beautiful, were made losses when listening with high opinion and penance.', 'palm_tree.jpg', 464),
(3, 'haggarty', 'Haggarty', 'Shouldn\'t I knock at once as and accept my brothers. Stopped he bend slightly fallen victim to know, daily in new man that you\'ve remembered where do yourself. Cared little child had risen.', 'surfer.jpg', 224),
(4, 'shapin', 'Shapin', 'Near it right that teachings most people. High arcs above him be without food. Curious people will take it.', 'palm_tree.jpg', 735),
(5, 'rummans', 'Rummans', 'Both thinking is no use, gloomy mind flowing to ice when so well, scent of touched ear his mouth.', 'beach.jpg', 161);

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
(1, 'Kellett', 'Chomik Solutions', 'colette.nasato@outlook.com', '+14 409 676 204', 'Vuoniardul', 'Illilicy', '2004-09-24 01:42:07'),
(2, 'Sylvester', 'Hudecek Team', 'jori.goodinson@hotmail.com', '+79 730 914 334', 'Erlehlelak', 'Sabalisan', '2004-05-22 07:00:53'),
(3, 'Defacendis', 'Hinson Factory', 'suzane.chauvin@hotmail.com', '+84 264 232 196', 'Javadigi', 'Iskighu', '2004-06-03 11:36:51'),
(4, 'Tynan', 'Kryski Trust', 'yeung.dilley@mail.com', '+93 621 511 675', 'Milevejim', 'Makanobo', '2003-05-20 12:37:51'),
(5, 'Laviolette', 'Duvarci Store', 'roe.maness@outlook.com', '+53 963 246 745', 'Awlarkeblany', 'Bovidmeniz', '2003-03-27 14:39:52');

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
(1, 'fowles', 'Fowles', 'Gloomy mind brought her friend, better opinion and imperceptibly as novices taken away.', 'beach.jpg', 'train.mp4', 'rummans'),
(2, 'marcom', 'Marcom', 'Fully become of blessing to hesitate do this, pleasure and splendour as well. Source spring forth here for its title.', 'palm_tree.jpg', 'bus.mp4', 'shapin'),
(3, 'laporte', 'Laporte', 'Love she got no it himself mocking me their goal. Lovely river never been sitting under control of sloth.', 'beach.jpg', 'bus.mp4', 'hvezda'),
(4, 'callery', 'Callery', 'Rose to utter a farewell from now emptiness, everything out well it now emptiness, you\'re on turning quickly for I\'ll be alive.', 'beach.jpg', 'bus.mp4', 'shapin'),
(5, 'brouthillier', 'Brouthillier', 'Business he helped him very own soul, meditation holding one\'s pure one hour silently his mother\'s funeral.', 'surfer.jpg', 'bus.mp4', 'haggarty'),
(6, 'jubb', 'Jubb', 'Bold is never come from that, wisdom from on him did his time mortal.', 'surfer.jpg', 'train.mp4', 'haggarty'),
(7, 'cencier', 'Cencier', 'Looked into friendly people were reported of this, thought was difficult toilsome and joy without home no difficulties.', 'surfer.jpg', 'train.mp4', 'shapin'),
(8, 'hanford', 'Hanford', 'Boat and only interested in confirmation, he\'s looking for twenty-eight days.', 'beach.jpg', 'train.mp4', 'rummans'),
(9, 'clegg', 'Clegg', 'Straightened up for possession and stranger searching timidness, glance realized when there among all encompassed by many.', 'beach.jpg', 'bus.mp4', 'haggarty'),
(10, 'sarin', 'Sarin', 'There the squares rested strangely awake the morning, years I read a farewell. Past and why these pleasures and with hope and tenacity.', 'palm_tree.jpg', 'train.mp4', 'haggarty');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'garinbo', 'Talking about noon he tried hard it says. Were fixed on listening saw him none of sleep. Pearls he entered a seeming contradiction with perfect respect. Said that\'s not for yourself though without money, speaking she taught me something about words.'),
(2, 'adkommeri', 'Sun shone always thinks of boars of bark, when I\'m only transformed and talked incessantly hit. In himself speaking she gave the fire, loved any kind with barber\'s assistant in confirmation, better opinion of light like life for knowledge.'),
(3, 'omlinter', 'Heard its indestructible one obsessed by fasting is fasting, had performed with those whatever for her. How looked to entirely or she said.'),
(4, 'ramactansor', 'Pearls he continued thinking does not touching him. Occasionally he reported of dying people own, else from all important thing wonderful verses exclaimed lamentingly.'),
(5, 'urlohamomix', 'Herself had pulled the high arcs above him sad. You\'re saying something honourable one admiring the eternal not-finding, worry said to war of among the.');

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
(3, 'remy.dodson@mail.com', 'remydodson', 'ariL*fa1u', 'Danani'),
(4, 'cati.taschereau@live.com', 'catitaschereau', 'ers^amp1Se', 'Nowandone'),
(5, 'do.herner@outlook.com', 'doherner', 'haimonCo/p7', 'Enniki');

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

