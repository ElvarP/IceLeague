--
-- Database: `iceleague`
--
DROP DATABASE IF EXISTS iceleague;
CREATE DATABASE IF NOT EXISTS iceleague CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE iceleague;

-- Table structure for table `{$server}_summoners`
CREATE TABLE IF NOT EXISTS `na_summoners` (
  `id` int(11) NOT NULL,
  `summonerName` VARCHAR(16) NULL,
  `profileIconId` int(11) NULL,
  `summonerLevel` int(11) NULL,
  PRIMARY KEY (`id`)
);
CREATE TABLE IF NOT EXISTS `euw_summoners` (
  `id` int(11) NOT NULL,
  `summonerName` VARCHAR(16) NULL,
  `profileIconId` int(11) NULL,
  `summonerLevel` int(11) NULL,
  PRIMARY KEY (`id`)
);
CREATE TABLE IF NOT EXISTS `eune_summoners` (
  `id` int(11) NOT NULL,
  `summonerName` VARCHAR(16) NULL,
  `profileIconId` int(11) NULL,
  `summonerLevel` int(11) NULL,
  PRIMARY KEY (`id`)
);

-- Table structure for table `{$server}_roles`
CREATE TABLE IF NOT EXISTS `na_roles` (
  `id` int(11) NOT NULL,
  `summonerName` VARCHAR(16) NULL,
  `mainRole` VARCHAR(16) NULL,
  `totalGamesPlayed` int(11) NULL,
  `topGamesPlayed` int(11) NULL,
  `jungleGamesPlayed` int(11) NULL,
  `midGamesPlayed` int(11) NULL,
  `adcGamesPlayed` int(11) NULL,
  `supportGamesPlayed` int(11) NULL,
  PRIMARY KEY (`id`)
);
CREATE TABLE IF NOT EXISTS `euw_roles` (
  `id` int(11) NOT NULL,
  `summonerName` VARCHAR(16) NULL,
  `mainRole` VARCHAR(16) NULL,
  `totalGamesPlayed` int(11) NULL,
  `topGamesPlayed` int(11) NULL,
  `jungleGamesPlayed` int(11) NULL,
  `midGamesPlayed` int(11) NULL,
  `adcGamesPlayed` int(11) NULL,
  `supportGamesPlayed` int(11) NULL,
  PRIMARY KEY (`id`)
);
CREATE TABLE IF NOT EXISTS `eune_roles` (
  `id` int(11) NOT NULL,
  `summonerName` VARCHAR(16) NULL,
  `mainRole` VARCHAR(16) NULL,
  `totalGamesPlayed` int(11) NULL,
  `topGamesPlayed` int(11) NULL,
  `jungleGamesPlayed` int(11) NULL,
  `midGamesPlayed` int(11) NULL,
  `adcGamesPlayed` int(11) NULL,
  `supportGamesPlayed` int(11) NULL,
  PRIMARY KEY (`id`)
);

-- Table structure for table `{$server}_ranked_solo_5x5`
CREATE TABLE IF NOT EXISTS `na_ranked_solo_5x5` (
  `name` VARCHAR(255) NULL,
  `tier` VARCHAR(255) NULL,
  `queue` VARCHAR(255) NULL,
  `playerOrTeamId` int(11) NOT NULL,
  `playerOrTeamName` VARCHAR(16) NULL,
  `division` VARCHAR(255) NULL,
  `leaguePoints` int(11) NULL,
  `wins` int(11) NULL,
  `losses` int(11) NULL,
  PRIMARY KEY (`playerOrTeamId`)
);
CREATE TABLE IF NOT EXISTS `euw_ranked_solo_5x5` (
  `name` VARCHAR(255) NULL,
  `tier` VARCHAR(255) NULL,
  `queue` VARCHAR(255) NULL,
  `playerOrTeamId` int(11) NOT NULL,
  `playerOrTeamName` VARCHAR(16) NULL,
  `division` VARCHAR(255) NULL,
  `leaguePoints` int(11) NULL,
  `wins` int(11) NULL,
  `losses` int(11) NULL,
  PRIMARY KEY (`playerOrTeamId`)
);
CREATE TABLE IF NOT EXISTS `eune_ranked_solo_5x5` (
  `name` VARCHAR(255) NULL,
  `tier` VARCHAR(255) NULL,
  `queue` VARCHAR(255) NULL,
  `playerOrTeamId` int(11) NOT NULL,
  `playerOrTeamName` VARCHAR(16) NULL,
  `division` VARCHAR(255) NULL,
  `leaguePoints` int(11) NULL,
  `wins` int(11) NULL,
  `losses` int(11) NULL,
  PRIMARY KEY (`playerOrTeamId`)
);

-- Table structure for table `{$server}_ranked_flex_sr`
CREATE TABLE IF NOT EXISTS `na_ranked_flex_sr` (
  `name` VARCHAR(255) NULL,
  `tier` VARCHAR(255) NULL,
  `queue` VARCHAR(255) NULL,
  `playerOrTeamId` int(11) NOT NULL,
  `playerOrTeamName` VARCHAR(16) NULL,
  `division` VARCHAR(255) NULL,
  `leaguePoints` int(11) NULL,
  `wins` int(11) NULL,
  `losses` int(11) NULL,
  PRIMARY KEY (`playerOrTeamId`)
);
CREATE TABLE IF NOT EXISTS `euw_ranked_flex_sr` (
  `name` VARCHAR(255) NULL,
  `tier` VARCHAR(255) NULL,
  `queue` VARCHAR(255) NULL,
  `playerOrTeamId` int(11) NOT NULL,
  `playerOrTeamName` VARCHAR(16) NULL,
  `division` VARCHAR(255) NULL,
  `leaguePoints` int(11) NULL,
  `wins` int(11) NULL,
  `losses` int(11) NULL,
  PRIMARY KEY (`playerOrTeamId`)
);
CREATE TABLE IF NOT EXISTS `eune_ranked_flex_sr` (
  `name` VARCHAR(255) NULL,
  `tier` VARCHAR(255) NULL,
  `queue` VARCHAR(255) NULL,
  `playerOrTeamId` int(11) NOT NULL,
  `playerOrTeamName` VARCHAR(16) NULL,
  `division` VARCHAR(255) NULL,
  `leaguePoints` int(11) NULL,
  `wins` int(11) NULL,
  `losses` int(11) NULL,
  PRIMARY KEY (`playerOrTeamId`)
);

-- Table structure for table `{$server}_ranked_flex_tt`
CREATE TABLE IF NOT EXISTS `na_ranked_flex_tt` (
  `name` VARCHAR(255) NULL,
  `tier` VARCHAR(255) NULL,
  `queue` VARCHAR(255) NULL,
  `playerOrTeamId` int(11) NOT NULL,
  `playerOrTeamName` VARCHAR(16) NULL,
  `division` VARCHAR(255) NULL,
  `leaguePoints` int(11) NULL,
  `wins` int(11) NULL,
  `losses` int(11) NULL,
  PRIMARY KEY (`playerOrTeamId`)
);
CREATE TABLE IF NOT EXISTS `euw_ranked_flex_tt` (
  `name` VARCHAR(255) NULL,
  `tier` VARCHAR(255) NULL,
  `queue` VARCHAR(255) NULL,
  `playerOrTeamId` int(11) NOT NULL,
  `playerOrTeamName` VARCHAR(16) NULL,
  `division` VARCHAR(255) NULL,
  `leaguePoints` int(11) NULL,
  `wins` int(11) NULL,
  `losses` int(11) NULL,
  PRIMARY KEY (`playerOrTeamId`)
);
CREATE TABLE IF NOT EXISTS `eune_ranked_flex_tt` (
  `name` VARCHAR(255) NULL,
  `tier` VARCHAR(255) NULL,
  `queue` VARCHAR(255) NULL,
  `playerOrTeamId` int(11) NOT NULL,
  `playerOrTeamName` VARCHAR(16) NULL,
  `division` VARCHAR(255) NULL,
  `leaguePoints` int(11) NULL,
  `wins` int(11) NULL,
  `losses` int(11) NULL,
  PRIMARY KEY (`playerOrTeamId`)
);

-- Table structure for table `{$server}_champion_mastery`
CREATE TABLE IF NOT EXISTS `na_champion_mastery` (
  `id` int(11) NOT NULL,
  `summonerName` VARCHAR(16) NULL,
  `championId1` int(11) NULL,
  `championPoints1` int(11) NULL,
  `championName1` VARCHAR(255) NULL,
  `championId2` int(11) NULL,
  `championName2` VARCHAR(255) NULL,
  `championPoints2` int(11) NULL,
  `championId3` int(11) NULL,
  `championName3` VARCHAR(255) NULL,
  `championPoints3` int(11) NULL,
  PRIMARY KEY (`id`)
);
CREATE TABLE IF NOT EXISTS `euw_champion_mastery` (
  `id` int(11) NOT NULL,
  `summonerName` VARCHAR(16) NULL,
  `championId1` int(11) NULL,
  `championPoints1` int(11) NULL,
  `championName1` VARCHAR(255) NULL,
  `championId2` int(11) NULL,
  `championName2` VARCHAR(255) NULL,
  `championPoints2` int(11) NULL,
  `championId3` int(11) NULL,
  `championName3` VARCHAR(255) NULL,
  `championPoints3` int(11) NULL,
  PRIMARY KEY (`id`)
);
CREATE TABLE IF NOT EXISTS `eune_champion_mastery` (
  `id` int(11) NOT NULL,
  `summonerName` VARCHAR(16) NULL,
  `championId1` int(11) NULL,
  `championPoints1` int(11) NULL,
  `championName1` VARCHAR(255) NULL,
  `championId2` int(11) NULL,
  `championName2` VARCHAR(255) NULL,
  `championPoints2` int(11) NULL,
  `championId3` int(11) NULL,
  `championName3` VARCHAR(255) NULL,
  `championPoints3` int(11) NULL,
  PRIMARY KEY (`id`)
);

-- Table structure for table `{$server}_most_played_champions`
CREATE TABLE IF NOT EXISTS `na_most_played_champions` (
  `id` int(11) NOT NULL,
  `summonerName` VARCHAR(16) NULL,
  `championId1` int(11) NULL,
  `championName1` VARCHAR(255) NULL,
  `championId2` int(11) NULL,
  `championName2` VARCHAR(255) NULL,
  `championId3` int(11) NULL,
  `championName3` VARCHAR(255) NULL,
  PRIMARY KEY (`id`)
);
CREATE TABLE IF NOT EXISTS `euw_most_played_champions` (
  `id` int(11) NOT NULL,
  `summonerName` VARCHAR(16) NULL,
  `championId1` int(11) NULL,
  `championName1` VARCHAR(255) NULL,
  `championId2` int(11) NULL,
  `championName2` VARCHAR(255) NULL,
  `championId3` int(11) NULL,
  `championName3` VARCHAR(255) NULL,
  PRIMARY KEY (`id`)
);
CREATE TABLE IF NOT EXISTS `eune_most_played_champions` (
  `id` int(11) NOT NULL,
  `summonerName` VARCHAR(16) NULL,
  `championId1` int(11) NULL,
  `championName1` VARCHAR(255) NULL,
  `championId2` int(11) NULL,
  `championName2` VARCHAR(255) NULL,
  `championId3` int(11) NULL,
  `championName3` VARCHAR(255) NULL,
  PRIMARY KEY (`id`)
);

-- Table structure for table `{$server}_ranked_stats`
CREATE TABLE IF NOT EXISTS `na_ranked_stats` (
  `id` int(11) NOT NULL,
  `summonerName` VARCHAR(16) NULL,
  `championId` int(11) NOT NULL,
  `totalSessionsPlayed` int(11) NULL,
  `totalSessionsLost` int(11) NULL,
  `totalSessionsWon` int(11) NULL,
  `totalChampionKills` int(11) NULL,
  `totalDamageDealt` int(11) NULL,
  `totalDamageTaken` int(11) NULL,
  `mostChampionKillsPerSession` int(11) NULL,
  `totalMinionKills` int(11) NULL,
  `totalDoubleKills` int(11) NULL,
  `totalTripleKills` int(11) NULL,
  `totalQuadraKills` int(11) NULL,
  `totalPentaKills` int(11) NULL,
  `totalUnrealKills` int(11) NULL,
  `totalDeathsPerSession` int(11) NULL,
  `totalGoldEarned` int(11) NULL,
  `mostSpellsCast` int(11) NULL,
  `totalTurretsKilled` int(11) NULL,
  `totalPhysicalDamageDealt` int(11) NULL,
  `totalMagicDamageDealt` int(11) NULL,
  `totalFirstBlood` int(11) NULL,
  `totalAssists` int(11) NULL,
  `maxChampionsKilled` int(11) NULL,
  `maxNumDeaths` int(11) NULL,
  PRIMARY KEY (`id`)
);
CREATE TABLE IF NOT EXISTS `euw_ranked_stats` (
  `id` int(11) NOT NULL,
  `summonerName` VARCHAR(16) NULL,
  `championId` int(11) NOT NULL,
  `totalSessionsPlayed` int(11) NULL,
  `totalSessionsLost` int(11) NULL,
  `totalSessionsWon` int(11) NULL,
  `totalChampionKills` int(11) NULL,
  `totalDamageDealt` int(11) NULL,
  `totalDamageTaken` int(11) NULL,
  `mostChampionKillsPerSession` int(11) NULL,
  `totalMinionKills` int(11) NULL,
  `totalDoubleKills` int(11) NULL,
  `totalTripleKills` int(11) NULL,
  `totalQuadraKills` int(11) NULL,
  `totalPentaKills` int(11) NULL,
  `totalUnrealKills` int(11) NULL,
  `totalDeathsPerSession` int(11) NULL,
  `totalGoldEarned` int(11) NULL,
  `mostSpellsCast` int(11) NULL,
  `totalTurretsKilled` int(11) NULL,
  `totalPhysicalDamageDealt` int(11) NULL,
  `totalMagicDamageDealt` int(11) NULL,
  `totalFirstBlood` int(11) NULL,
  `totalAssists` int(11) NULL,
  `maxChampionsKilled` int(11) NULL,
  `maxNumDeaths` int(11) NULL,
  PRIMARY KEY (`id`)
);
CREATE TABLE IF NOT EXISTS `eune_ranked_stats` (
  `id` int(11) NOT NULL,
  `summonerName` VARCHAR(16) NULL,
  `championId` int(11) NOT NULL,
  `totalSessionsPlayed` int(11) NULL,
  `totalSessionsLost` int(11) NULL,
  `totalSessionsWon` int(11) NULL,
  `totalChampionKills` int(11) NULL,
  `totalDamageDealt` int(11) NULL,
  `totalDamageTaken` int(11) NULL,
  `mostChampionKillsPerSession` int(11) NULL,
  `totalMinionKills` int(11) NULL,
  `totalDoubleKills` int(11) NULL,
  `totalTripleKills` int(11) NULL,
  `totalQuadraKills` int(11) NULL,
  `totalPentaKills` int(11) NULL,
  `totalUnrealKills` int(11) NULL,
  `totalDeathsPerSession` int(11) NULL,
  `totalGoldEarned` int(11) NULL,
  `mostSpellsCast` int(11) NULL,
  `totalTurretsKilled` int(11) NULL,
  `totalPhysicalDamageDealt` int(11) NULL,
  `totalMagicDamageDealt` int(11) NULL,
  `totalFirstBlood` int(11) NULL,
  `totalAssists` int(11) NULL,
  `maxChampionsKilled` int(11) NULL,
  `maxNumDeaths` int(11) NULL,
  PRIMARY KEY (`id`)
);




-- MYSQL DUMP FROM ICELEAGUE.IS
INSERT INTO `eune_champion_mastery` VALUES (46451,'krusidulli',254,133796,'Vi',51,'Caitlyn',104164,103,'Ahri',32584),(19168905,'CookPoo',61,30648,'Orianna',99,'Lux',27536,43,'Karma',22940),(19324318,'Vpnko',3,6711,'Galio',103,'Ahri',3267,64,'LeeSin',1228),(19345983,'Supozily',236,147904,'Lucian',67,'Vayne',81920,51,'Caitlyn',81744),(19425490,'Skepni',12,113904,'Alistar',432,'Bard',57066,412,'Thresh',53816),(19536869,'Spee3D',51,66233,'Caitlyn',236,'Lucian',41788,81,'Ezreal',32369),(20574477,'Zarzator',412,44016,'Thresh',12,'Alistar',27684,51,'Caitlyn',16087),(21423168,'x3Nemo',103,197282,'Ahri',51,'Caitlyn',21708,64,'LeeSin',10139),(22019706,'Hafrar',105,160673,'Fizz',6,'Urgot',41679,161,'Velkoz',39672),(22343357,'flodeskum',5,33783,'XinZhao',75,'Nasus',24040,122,'Darius',20220),(23449327,'Avian Creev',50,93458,'Swain',34,'Anivia',55960,89,'Leona',53963),(24582082,'Don Yordle',75,97622,'Nasus',25,'Morgana',71860,85,'Kennen',65424),(24601815,'Boosted 2k17',427,190906,'Ivern',19,'Warwick',118602,203,'Kindred',104008),(25556552,'EUW Nimoe',76,137148,'Nidalee',91,'Talon',92853,81,'Ezreal',81725),(25597661,'Álfasteinn',67,116816,'Vayne',18,'Tristana',82397,222,'Jinx',82259),(25923609,'Prince of Hentai',112,95548,'Viktor',99,'Lux',70422,412,'Thresh',69677),(27467980,'Retro',68,37814,'Rumble',2,'Olaf',15358,104,'Graves',14746),(27957282,'C0veR',236,391436,'Lucian',29,'Twitch',266251,81,'Ezreal',187714),(28182766,'Bruce Jenner',412,369386,'Thresh',76,'Nidalee',222272,55,'Katarina',89237),(28265685,'HáusLaus',76,46476,'Nidalee',245,'Ekko',42565,236,'Lucian',33820),(29436983,'Aim',143,97098,'Zyra',201,'Braum',66999,412,'Thresh',57034),(29794771,'GANGBANGER',81,122495,'Ezreal',67,'Vayne',85872,238,'Zed',57952),(30025307,'pusyfkr69',107,92896,'Rengar',268,'Azir',90898,236,'Lucian',65297),(30748125,'Njálsson',64,84764,'LeeSin',432,'Bard',75283,412,'Thresh',73155),(30942212,'Seifur',92,101437,'Riven',91,'Talon',40059,64,'LeeSin',36420),(31876491,'MrStebb',432,153464,'Bard',161,'Velkoz',115003,497,'Rakan',114273),(32646246,'Gor done Ram see',157,103675,'Yasuo',92,'Riven',82493,62,'MonkeyKing',70056),(32756413,'JOISPOI24',106,192800,'Volibear',222,'Jinx',90207,67,'Vayne',61749),(33439001,'Baddinn Nero',92,44506,'Riven',104,'Graves',18478,4,'TwistedFate',5371),(33562890,'supoooro',412,357503,'Thresh',12,'Alistar',234205,201,'Braum',202049),(34277215,'possius',51,48980,'Caitlyn',222,'Jinx',38944,236,'Lucian',37276),(35826709,'SUPER SAIYAN KYS',119,120118,'Draven',41,'Gangplank',67017,67,'Vayne',36060),(35885489,'ANX HUNTS',412,165571,'Thresh',44,'Taric',93003,43,'Karma',85202),(36839055,'hcneB',412,346641,'Thresh',41,'Gangplank',208544,64,'LeeSin',174900),(36846862,'Eznurr',67,284520,'Vayne',236,'Lucian',126293,429,'Kalista',71571),(37285757,'ElGoldenMushroom',55,85301,'Katarina',157,'Yasuo',59130,412,'Thresh',58314),(37727775,'Smack 56',412,608681,'Thresh',223,'TahmKench',81134,43,'Karma',78553),(37959596,'DiddiDidrix',421,130569,'RekSai',64,'LeeSin',104819,223,'TahmKench',102246),(38284015,'littt',55,68616,'Katarina',35,'Shaco',59556,157,'Yasuo',44658),(39614823,'Kristút',236,226450,'Lucian',202,'Jhin',149343,81,'Ezreal',119998),(39997505,'Indrós',134,217191,'Syndra',112,'Viktor',155703,222,'Jinx',137267),(40360130,'TheVíking',238,211176,'Zed',112,'Viktor',142296,236,'Lucian',140838),(41453750,'Vinur',96,27577,'KogMaw',81,'Ezreal',27380,51,'Caitlyn',24203),(42180799,'KingFlemming',105,206846,'Fizz',238,'Zed',197951,41,'Gangplank',115815),(42605398,'Verzlunarskólinn',67,449024,'Vayne',238,'Zed',255806,236,'Lucian',135551),(44615048,'pepsidoritos',25,96325,'Morgana',53,'Blitzcrank',82779,412,'Thresh',56490),(50608500,'SiirGodHimSelf',122,106347,'Darius',268,'Azir',99082,38,'Kassadin',52781),(52164070,'Debonaire',157,165302,'Yasuo',41,'Gangplank',83629,38,'Kassadin',53936),(52433240,'White Trash',56,82078,'Nocturne',421,'RekSai',40670,40,'Janna',28476),(52641279,'The Great Wall',68,37741,'Rumble',245,'Ekko',23468,57,'Maokai',20517),(52706015,'Thicc Penıs',412,195356,'Thresh',236,'Lucian',139185,53,'Blitzcrank',115358),(53123297,'EysteinnOM',268,187829,'Azir',103,'Ahri',40446,245,'Ekko',32362),(53779180,'ISwearSheWasTen',236,64546,'Lucian',67,'Vayne',43952,51,'Caitlyn',37566),(54365829,'Breko',150,42908,'Gnar',157,'Yasuo',42488,81,'Ezreal',42039),(55644718,'SnorruZ',238,181099,'Zed',64,'LeeSin',106904,157,'Yasuo',101127),(55753201,'Jón 2',412,135138,'Thresh',58,'Renekton',79881,68,'Rumble',58432),(55863721,'ICELAND',28,290830,'Evelynn',133,'Quinn',66426,121,'Khazix',31086),(56037341,'Kiddi v2',202,65224,'Jhin',412,'Thresh',51689,236,'Lucian',45856);
INSERT INTO `eune_most_played_champions` VALUES (46451,'krusidulli',254,'Vi',51,'Caitlyn',104,'Graves'),(19168905,'CookPoo',61,'Orianna',101,'Xerath',59,'JarvanIV'),(19324318,'Vpnko',3,'Galio',103,'Ahri',64,'LeeSin'),(19345983,'Supozily',236,'Lucian',67,'Vayne',498,'Xayah'),(19425490,'Skepni',432,'Bard',497,'Rakan',12,'Alistar'),(19536869,'Spee3D',51,'Caitlyn',81,'Ezreal',236,'Lucian'),(20574477,'Zarzator',432,'Bard',51,'Caitlyn',34,'Anivia'),(21423168,'x3Nemo',103,'Ahri',51,'Caitlyn',64,'LeeSin'),(22019706,'Hafrar',105,'Fizz',7,'Leblanc',38,'Kassadin'),(22343357,'flodeskum',122,'Darius',126,'Jayce',31,'Chogath'),(23449327,'Avian Creev',50,'Swain',19,'Warwick',81,'Ezreal'),(24582082,'Don Yordle',112,'Viktor',238,'Zed',114,'Fiora'),(24601815,'Boosted 2k17',427,'Ivern',19,'Warwick',164,'Camille'),(25556552,'EUW Nimoe',91,'Talon',90,'Malzahar',103,'Ahri'),(25597661,'Álfasteinn',67,'Vayne',51,'Caitlyn',29,'Twitch'),(25923609,'Prince of Hentai',42,'Corki',143,'Zyra',112,'Viktor'),(27467980,'Retro',68,'Rumble',57,'Maokai',1,'Annie'),(27957282,'C0veR',202,'Jhin',81,'Ezreal',236,'Lucian'),(28182766,'Bruce Jenner',412,'Thresh',61,'Orianna',236,'Lucian'),(28265685,'HáusLaus',245,'Ekko',91,'Talon',112,'Viktor'),(29436983,'Aim',201,'Braum',25,'Morgana',43,'Karma'),(29794771,'GANGBANGER',119,'Draven',110,'Varus',64,'LeeSin'),(30025307,'pusyfkr69',67,'Vayne',29,'Twitch',236,'Lucian'),(30748125,'Njálsson',240,'Kled',68,'Rumble',41,'Gangplank'),(30942212,'Seifur',91,'Talon',92,'Riven',126,'Jayce'),(31876491,'MrStebb',497,'Rakan',432,'Bard',161,'Velkoz'),(32646246,'Gor done Ram see',92,'Riven',8,'Vladimir',157,'Yasuo'),(32756413,'JOISPOI24',222,'Jinx',106,'Volibear',102,'Shyvana'),(33439001,'Baddinn Nero',92,'Riven',41,'Gangplank',4,'TwistedFate'),(33562890,'supoooro',412,'Thresh',12,'Alistar',111,'Nautilus'),(34277215,'possius',51,'Caitlyn',222,'Jinx',55,'Katarina'),(35826709,'SUPER SAIYAN KYS',119,'Draven',41,'Gangplank',81,'Ezreal'),(35885489,'ANX HUNTS',43,'Karma',412,'Thresh',201,'Braum'),(36839055,'hcneB',41,'Gangplank',104,'Graves',59,'JarvanIV'),(36846862,'Eznurr',67,'Vayne',119,'Draven',236,'Lucian'),(37285757,'ElGoldenMushroom',134,'Syndra',64,'LeeSin',81,'Ezreal'),(37727775,'Smack 56',412,'Thresh',117,'Lulu',111,'Nautilus'),(37959596,'DiddiDidrix',421,'RekSai',254,'Vi',121,'Khazix'),(38284015,'littt',55,'Katarina',35,'Shaco',157,'Yasuo'),(39614823,'Kristút',236,'Lucian',202,'Jhin',81,'Ezreal'),(39997505,'Indrós',134,'Syndra',112,'Viktor',103,'Ahri'),(40360130,'TheVíking',81,'Ezreal',238,'Zed',236,'Lucian'),(41453750,'Vinur',22,'Ashe',81,'Ezreal',110,'Varus'),(42180799,'KingFlemming',41,'Gangplank',105,'Fizz',157,'Yasuo'),(42605398,'Verzlunarskólinn',67,'Vayne',236,'Lucian',81,'Ezreal'),(44615048,'pepsidoritos',25,'Morgana',412,'Thresh',53,'Blitzcrank'),(50608500,'SiirGodHimSelf',122,'Darius',61,'Orianna',38,'Kassadin'),(52164070,'Debonaire',41,'Gangplank',24,'Jax',13,'Ryze'),(52433240,'White Trash',56,'Nocturne',254,'Vi',412,'Thresh'),(52641279,'The Great Wall',126,'Jayce',164,'Camille',79,'Gragas'),(52706015,'Thicc Penıs',40,'Janna',202,'Jhin',412,'Thresh'),(53123297,'EysteinnOM',3,'Galio',111,'Nautilus',122,'Darius'),(53779180,'ISwearSheWasTen',236,'Lucian',51,'Caitlyn',61,'Orianna'),(54365829,'Breko',236,'Lucian',51,'Caitlyn',81,'Ezreal'),(55644718,'SnorruZ',35,'Shaco',238,'Zed',64,'LeeSin'),(55753201,'Jón 2',58,'Renekton',68,'Rumble',126,'Jayce'),(55863721,'ICELAND',28,'Evelynn',57,'Maokai',78,'Poppy'),(56037341,'Kiddi v2',202,'Jhin',412,'Thresh',43,'Karma');
INSERT INTO `eune_ranked_flex_sr` VALUES ('Ahri\'s Lords','GOLD','RANKED_FLEX_SR',46451,'krusidulli','III',69,77,69),('Diana\'s Fists','GOLD','RANKED_FLEX_SR',19168905,'CookPoo','III',33,58,43),('Akali\'s Shadows','SILVER','RANKED_FLEX_SR',19345983,'Supozily','I',0,14,9),('Cho\'Gath\'s Legion','SILVER','RANKED_FLEX_SR',19425490,'Skepni','II',29,14,20),('Ryze\'s Vigilantes','SILVER','RANKED_FLEX_SR',19536869,'Spee3D','I',100,27,15),('Syndra\'s Duelists','SILVER','RANKED_FLEX_SR',21423168,'x3Nemo','I',100,20,9),('Ashe\'s Judicators','PLATINUM','RANKED_FLEX_SR',22019706,'Hafrar','IV',26,31,32),('Nautilus\'s Weaponmasters','BRONZE','RANKED_FLEX_SR',22343357,'flodeskum','IV',66,8,10),('Twitch\'s Slayers','DIAMOND','RANKED_FLEX_SR',24601815,'Boosted 2k17','V',25,82,63),('Twitch\'s Slayers','DIAMOND','RANKED_FLEX_SR',25556552,'EUW Nimoe','II',40,34,19),('Ashe\'s Judicators','PLATINUM','RANKED_FLEX_SR',25597661,'Álfasteinn','I',0,15,10),('Sejuani\'s Highwaymen','DIAMOND','RANKED_FLEX_SR',25923609,'Prince of Hentai','II',30,90,67),('Volibear\'s Dragons','GOLD','RANKED_FLEX_SR',27957282,'C0veR','IV',6,75,70),('Ashe\'s Judicators','PLATINUM','RANKED_FLEX_SR',28182766,'Bruce Jenner','I',35,72,64),('Volibear\'s Dragons','GOLD','RANKED_FLEX_SR',28265685,'HáusLaus','I',75,11,9),('Volibear\'s Dragons','GOLD','RANKED_FLEX_SR',29436983,'Aim','I',41,12,8),('Kennen\'s Butchers','SILVER','RANKED_FLEX_SR',29794771,'GANGBANGER','III',54,25,14),('Volibear\'s Dragons','GOLD','RANKED_FLEX_SR',30025307,'pusyfkr69','IV',51,6,6),('Volibear\'s Dragons','GOLD','RANKED_FLEX_SR',30748125,'Njálsson','I',0,13,17),('Twitch\'s Slayers','DIAMOND','RANKED_FLEX_SR',30942212,'Seifur','V',58,35,25),('Olaf\'s Heroes','GOLD','RANKED_FLEX_SR',32646246,'Gor done Ram see','I',100,12,8),('Galio\'s Spellslingers','SILVER','RANKED_FLEX_SR',33562890,'supoooro','I',83,63,56),('Kog\'Maw\'s Assassins','SILVER','RANKED_FLEX_SR',34277215,'possius','IV',70,8,6),('Ashe\'s Judicators','PLATINUM','RANKED_FLEX_SR',35826709,'SUPER SAIYAN KYS','IV',0,35,20),('Lee Sin\'s Paragons','GOLD','RANKED_FLEX_SR',35885489,'ANX HUNTS','V',100,112,96),('Graves\'s Dragons','PLATINUM','RANKED_FLEX_SR',36846862,'Eznurr','II',54,10,2),('Brand\'s Destroyers','BRONZE','RANKED_FLEX_SR',37285757,'ElGoldenMushroom','I',16,6,6),('Warwick\'s Runemasters','SILVER','RANKED_FLEX_SR',37727775,'Smack 56','III',49,38,36),('Ashe\'s Judicators','PLATINUM','RANKED_FLEX_SR',37959596,'DiddiDidrix','IV',13,28,22),('Akali\'s Snipers','GOLD','RANKED_FLEX_SR',38284015,'littt','IV',0,26,28),('Ashe\'s Judicators','PLATINUM','RANKED_FLEX_SR',39614823,'Kristút','II',75,36,14),('Ashe\'s Judicators','PLATINUM','RANKED_FLEX_SR',39997505,'Indrós','V',100,75,81),('Xin Zhao\'s Sentinels','SILVER','RANKED_FLEX_SR',40360130,'TheVíking','I',71,22,11),('Diana\'s Fists','GOLD','RANKED_FLEX_SR',41453750,'Vinur','III',6,17,18),('Evelynn\'s Brigands','PLATINUM','RANKED_FLEX_SR',42180799,'KingFlemming','V',14,103,126),('Ashe\'s Judicators','PLATINUM','RANKED_FLEX_SR',42605398,'Verzlunarskólinn','II',5,126,116),('Leona\'s Commandos','SILVER','RANKED_FLEX_SR',44615048,'pepsidoritos','II',100,44,48),('Jayce\'s Heralds','SILVER','RANKED_FLEX_SR',50608500,'SiirGodHimSelf','II',74,35,28),('Singed\'s Army','GOLD','RANKED_FLEX_SR',52433240,'White Trash','I',50,36,24),('Ashe\'s Judicators','PLATINUM','RANKED_FLEX_SR',52706015,'Thicc Penıs','III',0,86,73),('Volibear\'s Dragons','GOLD','RANKED_FLEX_SR',53123297,'EysteinnOM','III',66,43,33),('Ashe\'s Judicators','PLATINUM','RANKED_FLEX_SR',53779180,'ISwearSheWasTen','V',61,23,10),('Dr. Mundo\'s Duelists','GOLD','RANKED_FLEX_SR',54365829,'Breko','II',37,35,35),('Kog\'Maw\'s Assassins','SILVER','RANKED_FLEX_SR',55644718,'SnorruZ','II',8,25,18),('Ashe\'s Judicators','PLATINUM','RANKED_FLEX_SR',56037341,'Kiddi v2','V',5,8,12);
INSERT INTO `eune_ranked_flex_tt` VALUES ('Master Yi\'s Marksmen','PLATINUM','RANKED_FLEX_TT',20574477,'Zarzator','IV',40,9,4),('Varus\'s Enforcers','BRONZE','RANKED_FLEX_TT',27957282,'C0veR','II',57,12,12),('Twisted Fate\'s Shadows','BRONZE','RANKED_FLEX_TT',33562890,'supoooro','IV',77,12,12),('Master Yi\'s Marksmen','PLATINUM','RANKED_FLEX_TT',35826709,'SUPER SAIYAN KYS','IV',40,9,4),('Garen\'s Captains','BRONZE','RANKED_FLEX_TT',52706015,'Thicc Penıs','II',41,6,7),('Anivia\'s Defiants','GOLD','RANKED_FLEX_TT',54365829,'Breko','IV',90,12,8);
INSERT INTO `eune_ranked_solo_5x5` VALUES ('Volibear\'s Sorcerers','GOLD','RANKED_SOLO_5x5',46451,'krusidulli','IV',59,155,161),('Jax\'s Exemplars','PLATINUM','RANKED_SOLO_5x5',19168905,'CookPoo','III',48,140,107),('Veigar\'s Horde','GOLD','RANKED_SOLO_5x5',19324318,'Vpnko','III',75,12,4),('Jax\'s Exemplars','PLATINUM','RANKED_SOLO_5x5',19345983,'Supozily','II',36,281,262),('Viktor\'s Blackguards','GOLD','RANKED_SOLO_5x5',19425490,'Skepni','III',0,5,15),('Kha\'Zix\'s Harbingers','DIAMOND','RANKED_SOLO_5x5',19536869,'Spee3D','III',0,115,65),('Jax\'s Exemplars','PLATINUM','RANKED_SOLO_5x5',20574477,'Zarzator','I',77,19,12),('Teemo\'s Patriots','DIAMOND','RANKED_SOLO_5x5',21423168,'x3Nemo','IV',78,204,138),('Jax\'s Exemplars','PLATINUM','RANKED_SOLO_5x5',22019706,'Hafrar','III',14,118,118),('Hecarim\'s Destroyers','SILVER','RANKED_SOLO_5x5',22343357,'flodeskum','V',0,24,29),('Jax\'s Exemplars','PLATINUM','RANKED_SOLO_5x5',23449327,'Avian Creev','IV',72,182,180),('Viktor\'s Blackguards','GOLD','RANKED_SOLO_5x5',24582082,'Don Yordle','I',71,25,7),('Galio\'s Brutes','DIAMOND','RANKED_SOLO_5x5',24601815,'Boosted 2k17','IV',75,128,111),('Galio\'s Brutes','DIAMOND','RANKED_SOLO_5x5',25556552,'EUW Nimoe','I',85,123,104),('Galio\'s Brutes','DIAMOND','RANKED_SOLO_5x5',25597661,'Álfasteinn','II',43,76,58),('Galio\'s Brutes','DIAMOND','RANKED_SOLO_5x5',25923609,'Prince of Hentai','I',35,73,44),('Viktor\'s Blackguards','GOLD','RANKED_SOLO_5x5',27467980,'Retro','I',87,13,9),('Jax\'s Exemplars','PLATINUM','RANKED_SOLO_5x5',27957282,'C0veR','V',0,242,256),('Galio\'s Brutes','DIAMOND','RANKED_SOLO_5x5',28182766,'Bruce Jenner','III',66,155,132),('Galio\'s Brutes','DIAMOND','RANKED_SOLO_5x5',28265685,'HáusLaus','II',100,111,85),('Viktor\'s Blackguards','GOLD','RANKED_SOLO_5x5',29436983,'Aim','I',95,45,64),('Zed\'s Ninjas','SILVER','RANKED_SOLO_5x5',29794771,'GANGBANGER','IV',5,185,168),('Galio\'s Brutes','DIAMOND','RANKED_SOLO_5x5',30025307,'pusyfkr69','V',17,100,67),('Galio\'s Brutes','DIAMOND','RANKED_SOLO_5x5',30748125,'Njálsson','V',8,162,161),('Galio\'s Brutes','DIAMOND','RANKED_SOLO_5x5',30942212,'Seifur','I',11,172,159),('Malphite\'s Lancers','DIAMOND','RANKED_SOLO_5x5',31876491,'MrStebb','IV',0,215,197),('Jarvan IV\'s Witch Hunters','PLATINUM','RANKED_SOLO_5x5',32646246,'Gor done Ram see','III',100,143,137),('Jax\'s Exemplars','PLATINUM','RANKED_SOLO_5x5',32756413,'JOISPOI24','II',80,142,125),('Riven\'s Rageborn','PLATINUM','RANKED_SOLO_5x5',33439001,'Baddinn Nero','III',0,43,20),('Karma\'s Dawnbringers','GOLD','RANKED_SOLO_5x5',33562890,'supoooro','IV',0,113,129),('Graves\'s Destroyers','GOLD','RANKED_SOLO_5x5',34277215,'possius','III',6,35,38),('Galio\'s Brutes','DIAMOND','RANKED_SOLO_5x5',35826709,'SUPER SAIYAN KYS','IV',5,162,121),('Warwick\'s Ravagers','SILVER','RANKED_SOLO_5x5',35885489,'ANX HUNTS','II',66,28,36),('Zyra\'s Bandits','PLATINUM','RANKED_SOLO_5x5',36839055,'hcneB','II',0,45,46),('Evelynn\'s Urfriders','DIAMOND','RANKED_SOLO_5x5',36846862,'Eznurr','V',28,49,54),('Renekton\'s Ravagers','GOLD','RANKED_SOLO_5x5',37285757,'ElGoldenMushroom','II',0,164,161),('Shen\'s Commandos','GOLD','RANKED_SOLO_5x5',37727775,'Smack 56','II',0,241,220),('Jax\'s Exemplars','PLATINUM','RANKED_SOLO_5x5',37959596,'DiddiDidrix','III',60,262,267),('Volibear\'s Army','GOLD','RANKED_SOLO_5x5',38284015,'littt','III',65,222,234),('Galio\'s Brutes','DIAMOND','RANKED_SOLO_5x5',39614823,'Kristút','II',53,313,289),('Jax\'s Exemplars','PLATINUM','RANKED_SOLO_5x5',39997505,'Indrós','II',83,38,32),('Jax\'s Exemplars','PLATINUM','RANKED_SOLO_5x5',40360130,'TheVíking','IV',40,81,66),('Brand\'s Renegades','PLATINUM','RANKED_SOLO_5x5',41453750,'Vinur','II',26,71,68),('Pantheon\'s Highborn','PLATINUM','RANKED_SOLO_5x5',42180799,'KingFlemming','V',47,172,188),('Jax\'s Exemplars','PLATINUM','RANKED_SOLO_5x5',42605398,'Verzlunarskólinn','I',5,172,165),('Kayle\'s Gladiators','SILVER','RANKED_SOLO_5x5',44615048,'pepsidoritos','V',100,17,28),('Shyvana\'s Captains','GOLD','RANKED_SOLO_5x5',50608500,'SiirGodHimSelf','II',37,307,294),('Hecarim\'s Giants','PLATINUM','RANKED_SOLO_5x5',52164070,'Debonaire','IV',0,76,74),('Jax\'s Exemplars','PLATINUM','RANKED_SOLO_5x5',52433240,'White Trash','V',5,68,61),('Jax\'s Exemplars','PLATINUM','RANKED_SOLO_5x5',52641279,'The Great Wall','III',40,30,34),('Galio\'s Brutes','DIAMOND','RANKED_SOLO_5x5',52706015,'Thicc Penıs','V',0,127,102),('Jax\'s Exemplars','PLATINUM','RANKED_SOLO_5x5',53123297,'EysteinnOM','II',0,39,27),('Jax\'s Exemplars','PLATINUM','RANKED_SOLO_5x5',53779180,'ISwearSheWasTen','II',43,42,19),('Irelia\'s Overlords','GOLD','RANKED_SOLO_5x5',54365829,'Breko','III',6,76,83),('Syndra\'s Rageborn','GOLD','RANKED_SOLO_5x5',55644718,'SnorruZ','IV',1,62,59),('Galio\'s Brutes','DIAMOND','RANKED_SOLO_5x5',55753201,'Jón 2','V',22,38,28),('Galio\'s Brutes','DIAMOND','RANKED_SOLO_5x5',55863721,'ICELAND','IV',90,45,29),('Galio\'s Brutes','DIAMOND','RANKED_SOLO_5x5',56037341,'Kiddi v2','III',82,51,32);
INSERT INTO `eune_ranked_stats` VALUES (46451,'krusidulli',0,461,229,232,3187,67043904,11658308,24,50585,265,30,3,0,0,3135,5834029,0,528,52651172,11045842,0,4491,24,16),(19168905,'CookPoo',0,348,150,198,2593,42698455,8074338,26,47988,233,30,3,0,0,2241,4254377,0,360,16956852,24136665,0,3468,26,17),(19324318,'Vpnko',0,16,4,12,118,2252353,354627,16,2624,11,1,0,0,0,69,195223,0,22,625593,1468398,0,156,16,8),(19345983,'Supozily',0,565,270,295,4026,67278822,11331987,24,92547,540,71,8,2,0,3249,6898930,0,771,58604442,6598879,0,5078,24,15),(19425490,'Skepni',0,54,35,19,205,2201018,1249759,16,1583,12,1,1,0,0,367,602093,0,13,384330,1718834,0,779,16,16),(19536869,'Spee3D',0,230,80,150,1691,33659636,4771863,22,39351,210,27,5,0,0,1265,2999136,0,377,26359886,6115756,0,2183,22,18),(20574477,'Zarzator',0,50,18,32,269,5771629,1100964,17,4193,21,1,0,0,0,299,555377,0,35,2581555,2106118,0,570,17,13),(21423168,'x3Nemo',0,373,147,226,2840,52160875,7704198,29,64195,294,33,4,1,0,1865,4719135,0,444,14940341,26561688,0,3015,29,15),(22019706,'Hafrar',0,299,150,149,2308,41345889,7844894,30,43869,182,22,3,0,0,2114,3743359,0,233,13818074,25201268,0,2443,30,17),(22343357,'flodeskum',0,76,41,35,538,8439443,2110429,17,8763,47,5,0,0,0,552,897376,0,83,4605412,3491179,0,686,17,17),(23449327,'Avian Creev',0,367,182,185,2540,51582127,10208056,25,56664,249,39,6,1,0,2360,4650214,0,384,27804613,21638890,0,2975,25,18),(24582082,'Don Yordle',0,33,7,26,438,4554026,801842,33,5631,64,13,2,0,0,170,459397,0,59,2444235,1987877,0,205,33,13),(24601815,'Boosted 2k17',0,390,175,215,2280,66428850,9910901,22,36411,187,21,3,0,0,2049,4428405,0,311,20262819,16704055,0,3800,22,14),(25556552,'EUW Nimoe',0,280,123,157,2148,32641623,5808389,29,41116,189,31,6,1,0,1426,3337109,0,232,17406275,14048615,0,2017,29,15),(25597661,'Álfasteinn',0,158,67,91,1132,24502475,3132166,24,30941,149,25,4,1,0,858,2025516,0,264,20864016,2656839,0,1192,24,13),(25923609,'Prince of Hentai',0,283,114,169,2061,32762214,5436598,24,40241,215,28,2,0,0,1409,3568081,0,278,6552363,25083404,0,2946,24,12),(27467980,'Retro',0,28,10,18,152,3296080,695805,16,4497,12,0,0,0,0,193,339097,0,20,699487,2569409,0,303,16,12),(27957282,'C0veR',0,668,339,329,5032,96180095,12900213,26,124935,616,94,21,5,0,3369,8663673,0,1030,80577862,12906917,0,5866,26,13),(28182766,'Bruce Jenner',0,420,193,227,2658,39596297,9552696,27,48332,238,49,7,1,0,1878,4811242,0,225,16421442,22067660,0,4516,27,19),(28265685,'HáusLaus',0,216,94,122,1679,29582580,4528790,22,34555,181,21,1,0,0,1086,2702662,0,263,15042107,13711106,0,1835,22,11),(29436983,'Aim',0,128,71,57,208,3720160,2856459,7,3415,10,0,0,0,0,864,1215816,0,37,770150,2381454,0,1885,7,15),(29794771,'GANGBANGER',0,393,181,212,3236,51446457,10952677,32,49795,383,69,11,3,0,3474,4911282,0,549,37992334,11620328,0,2871,32,22),(30025307,'pusyfkr69',0,186,75,111,1260,20836123,4361085,24,23115,152,21,1,0,0,1196,2196488,0,178,14545650,5377917,0,1783,24,18),(30748125,'Njálsson',0,346,171,175,1710,40484300,8482424,20,51384,121,17,4,0,0,1894,3948226,0,278,20987736,18282343,0,3120,20,13),(30942212,'Seifur',0,390,183,207,3093,53861832,10094658,27,62783,270,39,7,1,0,2789,4837379,0,467,35512674,16915816,0,2618,27,19),(31876491,'MrStebb',0,410,195,215,1208,13419868,6433804,18,11827,50,2,0,0,0,1826,3956065,0,143,4631805,7874799,0,5061,18,12),(32646246,'Gor done Ram see',0,296,141,155,1769,39013874,8010435,18,55497,185,32,2,0,0,1903,3677460,0,267,26536219,11693741,0,2063,18,13),(32756413,'JOISPOI24',0,270,128,142,1597,40569544,7021514,19,39108,161,25,5,0,0,1524,3405911,0,429,31213965,7584082,0,2423,19,18),(33439001,'Baddinn Nero',0,65,22,43,647,10808755,1667133,25,11828,87,16,1,0,0,365,882249,0,116,9429182,1128114,0,388,25,11),(33562890,'supoooro',0,386,198,188,703,13196452,8578801,16,18841,38,1,0,0,0,1846,3826020,0,113,3881656,7771788,0,5753,16,13),(34277215,'possius',0,87,44,43,621,11432106,1706928,24,15021,67,14,1,0,0,503,1074258,0,117,8824918,2343411,0,657,24,12),(35826709,'SUPER SAIYAN KYS',0,351,145,206,2909,56739085,7657387,25,62604,371,63,9,0,0,2017,4865178,0,442,49323471,6131911,0,2853,25,14),(35885489,'ANX HUNTS',0,272,132,140,1219,19288476,6217817,20,21590,83,8,1,1,0,1785,2983380,0,161,7310460,10843200,0,3269,20,16),(36839055,'hcneB',0,101,50,51,711,19582031,2574289,20,13104,64,6,3,1,0,497,1397035,0,79,17191364,1564993,0,1054,20,11),(36846862,'Eznurr',0,116,57,59,881,16708746,2278348,20,21220,114,17,4,1,0,676,1492618,0,151,13606497,2503004,0,813,20,17),(37285757,'ElGoldenMushroom',0,337,167,170,2471,46242871,7536611,28,51766,283,36,7,1,0,2150,4248081,0,421,27700354,17027161,0,2773,28,14),(37727775,'Smack 56',0,537,256,281,1750,30665472,13754603,18,37202,96,6,2,1,0,4020,5785835,0,315,13025179,16434484,0,8612,18,18),(37959596,'DiddiDidrix',0,583,291,292,3048,72849553,16788884,22,40318,200,23,6,1,0,4046,6607021,0,403,39985363,20230243,0,5967,22,17),(38284015,'littt',0,508,259,249,4516,75661048,14203859,33,69891,446,70,13,2,0,4111,6749501,0,416,47087061,25760861,0,3730,33,19),(39614823,'Kristút',0,650,300,350,3887,99359017,14822333,23,108030,417,56,14,2,0,3528,7953679,0,829,71832449,21772504,0,4903,23,18),(39997505,'Indrós',0,224,111,113,2015,33895477,5042202,27,39142,257,47,7,2,0,1663,2933061,0,215,10520170,22219488,0,1693,27,23),(40360130,'TheVíking',0,182,78,104,1173,22966170,3885953,19,30052,123,9,1,1,0,875,2203118,0,238,14741172,7902168,0,1746,19,13),(41453750,'Vinur',0,174,86,88,1030,24204711,3890612,18,31107,103,15,3,1,0,1102,2152774,0,287,18119030,5639516,0,1535,18,13),(42180799,'KingFlemming',0,587,312,275,4499,98487452,15767519,30,92856,406,50,11,0,0,3883,7828959,0,605,64462482,30443294,0,4634,30,16),(42605398,'Verzlunarskólinn',0,584,282,302,4161,82315261,13327220,25,88746,480,70,10,1,0,4176,7281093,0,656,56241255,22973152,0,4495,25,18),(44615048,'pepsidoritos',0,139,76,63,496,10998892,3153946,13,11442,28,2,1,0,0,921,1615067,0,80,5044413,5448921,0,1582,13,15),(50608500,'SiirGodHimSelf',0,658,316,342,4317,78930364,16311457,28,96132,430,72,10,2,0,4115,7962024,0,777,38145206,38148944,0,5440,28,18),(52164070,'Debonaire',0,152,74,78,1046,23823538,3014617,19,28969,98,13,3,0,0,665,1939210,0,212,14374891,8922013,0,905,19,10),(52433240,'White Trash',0,189,85,104,1186,21240109,5283510,22,10329,120,14,4,1,0,1026,2225099,0,119,14183419,4625009,0,2053,22,15),(52641279,'The Great Wall',0,70,35,35,464,8556734,1547686,17,10977,37,4,1,0,0,348,810249,0,76,4372467,3875551,0,481,17,10),(52706015,'Thicc Penıs',0,400,181,219,2023,40361247,8802812,27,42715,222,35,6,2,0,2362,4587297,0,384,25743599,11680655,0,4457,27,17),(53123297,'EysteinnOM',0,141,59,82,852,19521226,3378617,20,23026,73,5,0,0,0,697,1740949,0,140,8172402,10139117,0,1301,20,17),(53779180,'ISwearSheWasTen',0,94,29,65,675,13550073,1727376,22,17103,84,9,2,1,0,460,1195917,0,174,10522580,2699055,0,809,22,13),(54365829,'Breko',0,249,126,123,1628,33441801,5989580,23,41651,163,25,2,0,0,1711,3027269,0,265,22619303,9946357,0,1984,23,18),(55644718,'SnorruZ',0,167,78,89,1280,21457047,4510035,24,16376,103,11,3,0,0,1155,2047108,0,125,11902422,6791213,0,1391,24,18),(55753201,'Jón 2',0,71,30,41,393,8109783,1799007,17,8960,36,5,2,0,0,365,838298,0,62,4870979,3035721,0,734,17,11),(55863721,'ICELAND',0,77,31,46,540,9153423,1886940,16,5545,42,7,1,0,0,344,899047,0,64,3835301,4886656,0,704,16,12),(56037341,'Kiddi v2',0,103,44,59,471,8768049,1926178,21,10965,46,5,0,0,0,475,1141059,0,85,6257549,2290005,0,1292,21,13);
INSERT INTO `eune_summoners` VALUES (46451,'krusidulli',589,30),(19168905,'CookPoo',522,30),(19324318,'Vpnko',28,30),(19345983,'Supozily',1666,30),(19425490,'Skepni',512,30),(19536869,'Spee3D',1665,30),(20574477,'Zarzator',523,30),(21423168,'x3Nemo',1665,30),(22019706,'Hafrar',1666,30),(22343357,'flodeskum',1665,30),(23449327,'Avian Creev',10,30),(24582082,'Don Yordle',17,30),(24601815,'Boosted 2k17',1601,30),(25556552,'EUW Nimoe',1666,30),(25597661,'Álfasteinn',971,30),(25923609,'Prince of Hentai',26,30),(27467980,'Retro',916,30),(27957282,'C0veR',1479,30),(28182766,'Bruce Jenner',733,30),(28265685,'HáusLaus',1665,30),(29436983,'Aim',1301,30),(29794771,'GANGBANGER',1644,30),(30025307,'pusyfkr69',782,30),(30748125,'Njálsson',978,30),(30942212,'Seifur',508,30),(31876491,'MrStebb',1665,30),(32646246,'Gor done Ram see',2074,30),(32756413,'JOISPOI24',7,30),(33439001,'Baddinn Nero',1665,30),(33562890,'supoooro',1469,30),(34277215,'possius',1666,30),(35826709,'SUPER SAIYAN KYS',7,30),(35885489,'ANX HUNTS',1627,30),(36839055,'hcneB',2082,30),(36846862,'Eznurr',606,30),(37285757,'ElGoldenMushroom',1666,30),(37727775,'Smack 56',1341,30),(37959596,'DiddiDidrix',1670,30),(38284015,'littt',1429,30),(39614823,'Kristút',1666,30),(39997505,'Indrós',2076,30),(40360130,'TheVíking',1614,30),(41453750,'Vinur',691,30),(42180799,'KingFlemming',773,30),(42605398,'Verzlunarskólinn',1601,30),(44615048,'pepsidoritos',907,30),(50608500,'SiirGodHimSelf',1670,30),(52164070,'Debonaire',1108,30),(52433240,'White Trash',1666,30),(52641279,'The Great Wall',1407,30),(52706015,'Thicc Penıs',2083,30),(53123297,'EysteinnOM',538,30),(53779180,'ISwearSheWasTen',1665,30),(54365829,'Breko',1666,30),(55644718,'SnorruZ',1670,30),(55753201,'Jón 2',627,30),(55863721,'ICELAND',4,30),(56037341,'Kiddi v2',1102,30);
INSERT INTO `euw_champion_mastery` VALUES (19309837,'Nimoe',76,178372,'Nidalee',91,'Talon',122688,103,'Ahri',90611),(21226309,'IS1e91df35e73220',236,78598,'Lucian',18,'Tristana',69289,81,'Ezreal',63621),(21713202,'Skepni EUNE',432,48851,'Bard',412,'Thresh',29561,12,'Alistar',26610),(31047927,'Kainzors',115,157801,'Ziggs',67,'Vayne',79368,61,'Orianna',67796),(32000955,'The illustrator ',157,136664,'Yasuo',202,'Jhin',55534,81,'Ezreal',41565),(34947343,'smartnamehere',67,66582,'Vayne',18,'Tristana',61278,429,'Kalista',59324),(37964746,'Marri',55,40581,'Katarina',412,'Thresh',39009,64,'LeeSin',36883),(43937764,'Veggurinn',57,95821,'Maokai',150,'Gnar',69180,79,'Gragas',53657),(44664854,'Icelandic Legend',92,87151,'Riven',64,'LeeSin',31355,91,'Talon',21994),(77727098,'Tagl',236,32104,'Lucian',222,'Jinx',21804,51,'Caitlyn',19229),(86619103,'ZoGNtar',268,51496,'Azir',61,'Orianna',35543,134,'Syndra',35249),(89987210,'Mathemagician',51,289553,'Caitlyn',236,'Lucian',200170,222,'Jinx',184774),(89987236,'Ban Gragas',254,173706,'Vi',72,'Skarner',129563,110,'Varus',119758),(89987241,'Pick Gragas',238,291698,'Zed',61,'Orianna',160323,99,'Lux',131850),(96787134,'El Blitzcranko',53,240985,'Blitzcrank',35,'Shaco',172415,79,'Gragas',108582),(98567138,'Tortimandi',126,48070,'Jayce',51,'Caitlyn',44796,61,'Orianna',31541),(99177497,'2514149',238,218170,'Zed',236,'Lucian',147881,112,'Viktor',147168);
INSERT INTO `euw_most_played_champions` VALUES (19309837,'Nimoe',91,'Talon',103,'Ahri',76,'Nidalee'),(21226309,'IS1e91df35e73220',51,'Caitlyn',67,'Vayne',29,'Twitch'),(21713202,'Skepni EUNE',432,'Bard',412,'Thresh',53,'Blitzcrank'),(31047927,'Kainzors',115,'Ziggs',202,'Jhin',51,'Caitlyn'),(32000955,'The illustrator ',29,'Twitch',222,'Jinx',81,'Ezreal'),(34947343,'smartnamehere',51,'Caitlyn',67,'Vayne',29,'Twitch'),(37964746,'Marri',4,'TwistedFate',102,'Shyvana',412,'Thresh'),(43937764,'Veggurinn',68,'Rumble',3,'Galio',79,'Gragas'),(44664854,'Icelandic Legend',92,'Riven',91,'Talon',126,'Jayce'),(77727098,'Tagl',222,'Jinx',236,'Lucian',51,'Caitlyn'),(86619103,'ZoGNtar',61,'Orianna',412,'Thresh',134,'Syndra'),(89987210,'Mathemagician',51,'Caitlyn',236,'Lucian',22,'Ashe'),(89987236,'Ban Gragas',254,'Vi',19,'Warwick',18,'Tristana'),(89987241,'Pick Gragas',99,'Lux',61,'Orianna',238,'Zed'),(96787134,'El Blitzcranko',53,'Blitzcrank',79,'Gragas',427,'Ivern'),(98567138,'Tortimandi',51,'Caitlyn',126,'Jayce',61,'Orianna'),(99177497,'2514149',81,'Ezreal',238,'Zed',236,'Lucian');
INSERT INTO `euw_ranked_flex_sr` VALUES ('Riven\'s Commanders','PLATINUM','RANKED_FLEX_SR',19309837,'Nimoe','I',44,23,19),('Singed\'s Blades','GOLD','RANKED_FLEX_SR',21226309,'IS1e91df35e73220','I',75,8,8),('Zyra\'s Berserkers','GOLD','RANKED_FLEX_SR',31047927,'Kainzors','V',46,8,6),('Yorick\'s Outlaws','SILVER','RANKED_FLEX_SR',32000955,'The illustrator ','III',0,2,8),('Riven\'s Commanders','PLATINUM','RANKED_FLEX_SR',34947343,'smartnamehere','III',40,14,12),('Riven\'s Commanders','PLATINUM','RANKED_FLEX_SR',43937764,'Veggurinn','IV',40,14,10),('Riven\'s Commanders','PLATINUM','RANKED_FLEX_SR',44664854,'Icelandic Legend','II',49,19,13),('Graves\'s Rogues','GOLD','RANKED_FLEX_SR',77727098,'Tagl','I',100,48,31),('Sona\'s Sentries','DIAMOND','RANKED_FLEX_SR',89987210,'Mathemagician','V',86,42,40),('Syndra\'s Bandits','DIAMOND','RANKED_FLEX_SR',89987236,'Ban Gragas','III',61,73,67),('Sona\'s Sentries','DIAMOND','RANKED_FLEX_SR',89987241,'Pick Gragas','IV',0,57,57),('Nidalee\'s Swarm','SILVER','RANKED_FLEX_SR',99177497,'2514149','I',0,22,12);
INSERT INTO `euw_ranked_flex_tt` VALUES ('Teemo\'s Exemplars','GOLD','RANKED_FLEX_TT',89987210,'Mathemagician','I',0,7,4),('Teemo\'s Exemplars','GOLD','RANKED_FLEX_TT',89987236,'Ban Gragas','I',0,7,4);
INSERT INTO `euw_ranked_solo_5x5` VALUES ('Graves\'s Inquisitors','DIAMOND','RANKED_SOLO_5x5',19309837,'Nimoe','II',0,118,93),('Xin Zhao\'s Battlemasters','PLATINUM','RANKED_SOLO_5x5',21226309,'IS1e91df35e73220','II',5,4,9),('Leona\'s Swashbucklers','SILVER','RANKED_SOLO_5x5',21713202,'Skepni EUNE','IV',46,13,15),('Morgana\'s Shadows','GOLD','RANKED_SOLO_5x5',31047927,'Kainzors','I',100,212,187),('Nidalee\'s Outriders','DIAMOND','RANKED_SOLO_5x5',32000955,'The illustrator ','IV',0,61,57),('Xin Zhao\'s Battlemasters','PLATINUM','RANKED_SOLO_5x5',34947343,'smartnamehere','I',24,35,36),('Soraka\'s Giants','PLATINUM','RANKED_SOLO_5x5',37964746,'Marri','III',7,6,8),('Leona\'s Scouts','DIAMOND','RANKED_SOLO_5x5',43937764,'Veggurinn','V',21,45,38),('Leona\'s Scouts','DIAMOND','RANKED_SOLO_5x5',44664854,'Icelandic Legend','III',25,154,138),('Leona\'s Scouts','DIAMOND','RANKED_SOLO_5x5',86619103,'ZoGNtar','IV',58,170,162),('Kha\'Zix\'s Rogues','PLATINUM','RANKED_SOLO_5x5',89987210,'Mathemagician','II',35,125,136),('Lee Sin\'s Soldiers','DIAMOND','RANKED_SOLO_5x5',89987236,'Ban Gragas','V',100,184,173),('Garen\'s Archons','DIAMOND','RANKED_SOLO_5x5',89987241,'Pick Gragas','IV',13,177,170),('Fizz\'s Enforcers','PLATINUM','RANKED_SOLO_5x5',96787134,'El Blitzcranko','II',27,238,244),('Twitch\'s Swashbucklers','PLATINUM','RANKED_SOLO_5x5',98567138,'Tortimandi','II',3,193,173),('Jax\'s Berserkers','PLATINUM','RANKED_SOLO_5x5',99177497,'2514149','V',100,86,71);
INSERT INTO `euw_ranked_stats` VALUES (19309837,'Nimoe',0,253,112,141,1865,28087877,5385609,24,34941,159,16,1,0,0,1292,2954817,0,183,15673533,11276295,0,1855,24,16),(21226309,'IS1e91df35e73220',0,29,17,12,190,4303576,603205,21,4784,28,5,1,1,0,171,344982,0,40,3114446,467377,0,242,21,12),(21713202,'Skepni EUNE',0,31,16,15,142,1247766,586922,16,816,8,1,0,0,0,172,342189,0,11,233135,976620,0,404,16,13),(31047927,'Kainzors',0,413,193,220,2758,59693845,6648971,21,73723,279,37,2,0,0,1925,5151859,0,755,30565320,26439913,0,3221,21,14),(32000955,'The illustrator ',0,128,65,63,735,16626126,2417849,17,20421,80,17,2,0,0,599,1469198,0,148,11582396,3928680,0,801,17,13),(34947343,'smartnamehere',0,97,48,49,743,13797084,1960090,28,18211,107,20,1,0,0,556,1233291,0,156,12399340,985373,0,784,28,12),(37964746,'Marri',0,29,14,15,173,2861507,601305,14,3126,10,2,1,0,0,156,309068,0,21,968089,1819414,0,180,14,12),(43937764,'Veggurinn',0,108,48,60,640,14136202,2485721,15,18155,60,9,2,1,0,483,1260826,0,100,5580205,8007204,0,796,15,11),(44664854,'Icelandic Legend',0,323,150,173,2202,44686860,8038676,22,50562,177,13,4,0,0,2442,3875718,0,349,29821272,13864241,0,2134,22,18),(77727098,'Tagl',0,85,35,50,827,15141792,1828363,27,18141,115,23,4,0,0,529,1251872,0,158,12408122,2398480,0,810,27,12),(86619103,'ZoGNtar',0,334,163,171,1210,31632386,6381275,17,42927,84,7,0,0,0,1623,3534276,0,224,7067691,23983778,0,3173,17,14),(89987210,'Mathemagician',0,354,180,174,2126,50330037,6500660,21,68329,239,29,1,0,0,1831,4394525,0,538,43577293,5783933,0,2837,21,14),(89987236,'Ban Gragas',0,508,244,264,2402,64618789,13396392,18,34481,182,14,3,0,0,2288,5651986,0,459,45609545,15325594,0,3943,18,13),(89987241,'Pick Gragas',0,470,230,240,3215,59555366,7857792,20,85914,288,34,3,0,0,2330,5671923,0,491,22998574,35484914,0,3735,20,14),(96787134,'El Blitzcranko',0,485,246,239,1945,42955548,11220516,18,43770,102,10,1,1,0,2415,5217129,0,242,14374888,20707334,0,5202,18,19),(98567138,'Tortimandi',0,367,173,194,2289,59465206,8201513,20,73140,257,40,5,0,0,2054,4744265,0,521,39279028,18900442,0,2898,20,14),(99177497,'2514149',0,193,84,109,1222,24388281,4120975,19,31844,129,10,1,1,0,947,2332766,0,249,15715708,8333048,0,1871,19,13);
INSERT INTO `euw_summoners` VALUES (19309837,'Nimoe',1666,30),(21226309,'IS1e91df35e73220',21,30),(21713202,'Skepni EUNE',1601,30),(31047927,'Kainzors',664,30),(32000955,'The illustrator ',1374,30),(34947343,'smartnamehere',21,30),(37964746,'Marri',1665,30),(43937764,'Veggurinn',579,30),(44664854,'Icelandic Legend',654,30),(77727098,'Tagl',774,30),(86619103,'ZoGNtar',1666,30),(89987210,'Mathemagician',1666,30),(89987236,'Ban Gragas',579,30),(89987241,'Pick Gragas',508,30),(96787134,'El Blitzcranko',1666,30),(98567138,'Tortimandi',1665,30),(99177497,'2514149',1425,30);
INSERT INTO `na_champion_mastery` VALUES (22928703,'Riot Hjarta',40,515898,'Janna',412,'Thresh',274122,432,'Bard',167627);
INSERT INTO `na_most_played_champions` VALUES (22928703,'Riot Hjarta',267,'Nami',43,'Karma',432,'Bard');
INSERT INTO `na_ranked_flex_sr` VALUES ('Ahri\'s Soldiers','PLATINUM','RANKED_FLEX_SR',22928703,'Riot Hjarta','III',57,7,7);
INSERT INTO `na_ranked_solo_5x5` VALUES ('Fizz\'s Captains','DIAMOND','RANKED_SOLO_5x5',22928703,'Riot Hjarta','V',55,67,80);
INSERT INTO `na_ranked_stats` VALUES (22928703,'Riot Hjarta',0,164,88,76,443,7478211,3335502,19,5693,28,5,1,0,0,839,1573118,0,50,3580012,3385779,0,2077,19,15);
INSERT INTO `na_summoners` VALUES (22928703,'Riot Hjarta',1670,30);
