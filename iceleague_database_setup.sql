--
-- Database: `iceleague`
--

CREATE DATABASE IF NOT EXISTS iceleague_new CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE iceleague_new;


-- --------------------------------------------------------

--
-- Table structure for table `eune_summoners`
--

CREATE TABLE `eune_summoners` (
  `id` int(11) NOT NULL,
  `summonerName` VARCHAR(16) NULL,
  `profileIconId` int(11) NULL,
  `summonerLevel` int(11) NULL,
  PRIMARY KEY (`id`)
);

-- --------------------------------------------------------

--
-- Table structure for table `eune_ranked_stats`
--

CREATE TABLE `eune_ranked_stats` (
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

-- --------------------------------------------------------

--
-- Table structure for table `eune_champion_mastery`
--

CREATE TABLE `eune_champion_mastery` (
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

-- --------------------------------------------------------

--
-- Table structure for table `eune_most_played_champions`
--

CREATE TABLE `eune_most_played_champions` (
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

-- --------------------------------------------------------

--
-- Table structure for table `eune_ranked_solo_5x5`
--

CREATE TABLE `eune_ranked_solo_5x5` (
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


-- --------------------------------------------------------

--
-- Table structure for table `eune_ranked_flex_sr`
--

CREATE TABLE `eune_ranked_flex_sr` (
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

-- --------------------------------------------------------

--
-- Table structure for table `eune_ranked_flex_tt`
--

CREATE TABLE `eune_ranked_flex_tt` (
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

-- --------------------------------------------------------
--
--
--
--
--
--
--
--
--
--
--
--
--
--
--
-- --------------------------------------------------------

--
-- Table structure for table `euw_summoners`
--

CREATE TABLE `euw_summoners` (
  `id` int(11) NOT NULL,
  `summonerName` VARCHAR(16) NULL,
  `profileIconId` int(11) NULL,
  `summonerLevel` int(11) NULL,
  PRIMARY KEY (`id`)
);

-- --------------------------------------------------------

--
-- Table structure for table `euw_ranked_stats`
--

CREATE TABLE `euw_ranked_stats` (
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

-- --------------------------------------------------------

--
-- Table structure for table `euw_champion_mastery`
--

CREATE TABLE `euw_champion_mastery` (
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

-- --------------------------------------------------------

--
-- Table structure for table `euw_most_played_champions`
--

CREATE TABLE `euw_most_played_champions` (
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

-- --------------------------------------------------------

--
-- Table structure for table `euw_ranked_solo_5x5`
--

CREATE TABLE `euw_ranked_solo_5x5` (
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


-- --------------------------------------------------------

--
-- Table structure for table `euw_ranked_flex_sr`
--

CREATE TABLE `euw_ranked_flex_sr` (
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

-- --------------------------------------------------------

--
-- Table structure for table `euw_ranked_flex_tt`
--

CREATE TABLE `euw_ranked_flex_tt` (
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

-- --------------------------------------------------------
--
--
--
--
--
--
--
--
--
--
--
--
--
--
--
-- --------------------------------------------------------

--
-- Table structure for table `na_summoners`
--

CREATE TABLE `na_summoners` (
  `id` int(11) NOT NULL,
  `summonerName` VARCHAR(16) NULL,
  `profileIconId` int(11) NULL,
  `summonerLevel` int(11) NULL,
  PRIMARY KEY (`id`)
);

-- --------------------------------------------------------

--
-- Table structure for table `na_ranked_stats`
--

CREATE TABLE `na_ranked_stats` (
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

-- --------------------------------------------------------

--
-- Table structure for table `na_champion_mastery`
--

CREATE TABLE `na_champion_mastery` (
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

-- --------------------------------------------------------

--
-- Table structure for table `na_most_played_champions`
--

CREATE TABLE `na_most_played_champions` (
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

-- --------------------------------------------------------

--
-- Table structure for table `na_ranked_solo_5x5`
--

CREATE TABLE `na_ranked_solo_5x5` (
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


-- --------------------------------------------------------

--
-- Table structure for table `na_ranked_flex_sr`
--

CREATE TABLE `na_ranked_flex_sr` (
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

-- --------------------------------------------------------

--
-- Table structure for table `na_ranked_flex_tt`
--

CREATE TABLE `na_ranked_flex_tt` (
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
