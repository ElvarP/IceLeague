-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 09, 2017 at 09:43 eh
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iceleague`
--

-- --------------------------------------------------------

--
-- Table structure for table `eune_champion_mastery`
--

CREATE TABLE `eune_champion_mastery` (
  `id` int(11) NOT NULL,
  `summonerName` VARCHAR(16) NOT NULL,
  `championId1` int(11) DEFAULT NULL,
  `championPoints1` int(11) NOT NULL,
  `championName1` text NOT NULL,
  `championId2` int(11) NOT NULL,
  `championName2` text NOT NULL,
  `championPoints2` int(11) NOT NULL,
  `championId3` int(11) NOT NULL,
  `championName3` text NOT NULL,
  `championPoints3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `eune_most_played_champions`
--

CREATE TABLE `eune_most_played_champions` (
  `id` int(11) NOT NULL,
  `summonerName` VARCHAR(16) NOT NULL,
  `championId1` int(11) NOT NULL,
  `championName1` text COLLATE utf8_unicode_ci NOT NULL,
  `championId2` int(11) NOT NULL,
  `championName2` text COLLATE utf8_unicode_ci NOT NULL,
  `championId3` int(11) NOT NULL,
  `championName3` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eune_ranked_flex_sr`
--

CREATE TABLE `eune_ranked_flex_sr` (
  `name` mediumtext NOT NULL,
  `tier` mediumtext NOT NULL,
  `queue` mediumtext NOT NULL,
  `playerOrTeamId` int(11) NOT NULL,
  `playerOrTeamName` VARCHAR(16) NOT NULL,
  `division` mediumtext NOT NULL,
  `leaguePoints` int(11) NOT NULL,
  `wins` int(11) NOT NULL,
  `losses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `eune_ranked_flex_tt`
--

CREATE TABLE `eune_ranked_flex_tt` (
  `name` mediumtext NOT NULL,
  `tier` mediumtext NOT NULL,
  `queue` mediumtext NOT NULL,
  `playerOrTeamId` int(11) NOT NULL,
  `playerOrTeamName` VARCHAR(16) NOT NULL,
  `division` mediumtext NOT NULL,
  `leaguePoints` int(11) NOT NULL,
  `wins` int(11) NOT NULL,
  `losses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `eune_ranked_solo_5x5`
--

CREATE TABLE `eune_ranked_solo_5x5` (
  `name` mediumtext NOT NULL,
  `tier` mediumtext NOT NULL,
  `queue` mediumtext NOT NULL,
  `playerOrTeamId` int(11) NOT NULL,
  `playerOrTeamName` VARCHAR(16) NOT NULL,
  `division` mediumtext NOT NULL,
  `leaguePoints` int(11) NOT NULL,
  `wins` int(11) NOT NULL,
  `losses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `eune_ranked_stats`
--

CREATE TABLE `eune_ranked_stats` (
  `id` int(11) NOT NULL,
  `summonerName` VARCHAR(16) NOT NULL,
  `championId` int(11) NOT NULL,
  `totalSessionsPlayed` int(11) NOT NULL,
  `totalSessionsLost` int(11) NOT NULL,
  `totalSessionsWon` int(11) NOT NULL,
  `totalChampionKills` int(11) NOT NULL,
  `totalDamageDealt` int(11) NOT NULL,
  `totalDamageTaken` int(11) NOT NULL,
  `mostChampionKillsPerSession` int(11) NOT NULL,
  `totalMinionKills` int(11) NOT NULL,
  `totalDoubleKills` int(11) NOT NULL,
  `totalTripleKills` int(11) NOT NULL,
  `totalQuadraKills` int(11) NOT NULL,
  `totalPentaKills` int(11) NOT NULL,
  `totalUnrealKills` int(11) NOT NULL,
  `totalDeathsPerSession` int(11) NOT NULL,
  `totalGoldEarned` int(11) NOT NULL,
  `mostSpellsCast` int(11) NOT NULL,
  `totalTurretsKilled` int(11) NOT NULL,
  `totalPhysicalDamageDealt` int(11) NOT NULL,
  `totalMagicDamageDealt` int(11) NOT NULL,
  `totalFirstBlood` int(11) NOT NULL,
  `totalAssists` int(11) NOT NULL,
  `maxChampionsKilled` int(11) NOT NULL,
  `maxNumDeaths` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `eune_summoners`
--

CREATE TABLE `eune_summoners` (
  `id` int(11) NOT NULL,
  `summonerName` VARCHAR(16) NOT NULL,
  `profileIconId` int(11) NOT NULL,
  `summonerLevel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `euw_champion_mastery`
--

CREATE TABLE `euw_champion_mastery` (
  `id` int(11) NOT NULL,
  `summonerName` VARCHAR(16) NOT NULL,
  `championId1` int(11) DEFAULT NULL,
  `championPoints1` int(11) NOT NULL,
  `championName1` text NOT NULL,
  `championId2` int(11) NOT NULL,
  `championName2` text NOT NULL,
  `championPoints2` int(11) NOT NULL,
  `championId3` int(11) NOT NULL,
  `championName3` text NOT NULL,
  `championPoints3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `euw_most_played_champions`
--

CREATE TABLE `euw_most_played_champions` (
  `id` int(11) NOT NULL,
  `summonerName` VARCHAR(16) NOT NULL,
  `championId1` int(11) NOT NULL,
  `championName1` text COLLATE utf8_unicode_ci NOT NULL,
  `championId2` int(11) NOT NULL,
  `championName2` text COLLATE utf8_unicode_ci NOT NULL,
  `championId3` int(11) NOT NULL,
  `championName3` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `euw_ranked_flex_sr`
--

CREATE TABLE `euw_ranked_flex_sr` (
  `name` mediumtext NOT NULL,
  `tier` mediumtext NOT NULL,
  `queue` mediumtext NOT NULL,
  `playerOrTeamId` int(11) NOT NULL,
  `playerOrTeamName` VARCHAR(16) NOT NULL,
  `division` mediumtext NOT NULL,
  `leaguePoints` int(11) NOT NULL,
  `wins` int(11) NOT NULL,
  `losses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `euw_ranked_flex_tt`
--

CREATE TABLE `euw_ranked_flex_tt` (
  `name` mediumtext NOT NULL,
  `tier` mediumtext NOT NULL,
  `queue` mediumtext NOT NULL,
  `playerOrTeamId` int(11) NOT NULL,
  `playerOrTeamName` VARCHAR(16) NOT NULL,
  `division` mediumtext NOT NULL,
  `leaguePoints` int(11) NOT NULL,
  `wins` int(11) NOT NULL,
  `losses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `euw_ranked_solo_5x5`
--

CREATE TABLE `euw_ranked_solo_5x5` (
  `name` mediumtext NOT NULL,
  `tier` mediumtext NOT NULL,
  `queue` mediumtext NOT NULL,
  `playerOrTeamId` int(11) NOT NULL,
  `playerOrTeamName` VARCHAR(16) NOT NULL,
  `division` mediumtext NOT NULL,
  `leaguePoints` int(11) NOT NULL,
  `wins` int(11) NOT NULL,
  `losses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `euw_ranked_stats`
--

CREATE TABLE `euw_ranked_stats` (
  `id` int(11) NOT NULL,
  `summonerName` VARCHAR(16) NOT NULL,
  `championId` int(11) NOT NULL,
  `totalSessionsPlayed` int(11) NOT NULL,
  `totalSessionsLost` int(11) NOT NULL,
  `totalSessionsWon` int(11) NOT NULL,
  `totalChampionKills` int(11) NOT NULL,
  `totalDamageDealt` int(11) NOT NULL,
  `totalDamageTaken` int(11) NOT NULL,
  `mostChampionKillsPerSession` int(11) NOT NULL,
  `totalMinionKills` int(11) NOT NULL,
  `totalDoubleKills` int(11) NOT NULL,
  `totalTripleKills` int(11) NOT NULL,
  `totalQuadraKills` int(11) NOT NULL,
  `totalPentaKills` int(11) NOT NULL,
  `totalUnrealKills` int(11) NOT NULL,
  `totalDeathsPerSession` int(11) NOT NULL,
  `totalGoldEarned` int(11) NOT NULL,
  `mostSpellsCast` int(11) NOT NULL,
  `totalTurretsKilled` int(11) NOT NULL,
  `totalPhysicalDamageDealt` int(11) NOT NULL,
  `totalMagicDamageDealt` int(11) NOT NULL,
  `totalFirstBlood` int(11) NOT NULL,
  `totalAssists` int(11) NOT NULL,
  `maxChampionsKilled` int(11) NOT NULL,
  `maxNumDeaths` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `euw_summoners`
--

CREATE TABLE `euw_summoners` (
  `id` int(11) NOT NULL,
  `summonerName` VARCHAR(16) NOT NULL,
  `profileIconId` int(11) NOT NULL,
  `summonerLevel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `na_champion_mastery`
--

CREATE TABLE `na_champion_mastery` (
  `id` int(11) NOT NULL,
  `summonerName` VARCHAR(16) NOT NULL,
  `championId1` int(11) DEFAULT NULL,
  `championPoints1` int(11) NOT NULL,
  `championName1` text NOT NULL,
  `championId2` int(11) NOT NULL,
  `championName2` text NOT NULL,
  `championPoints2` int(11) NOT NULL,
  `championId3` int(11) NOT NULL,
  `championName3` text NOT NULL,
  `championPoints3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `na_most_played_champions`
--

CREATE TABLE `na_most_played_champions` (
  `id` int(11) NOT NULL,
  `summonerName` VARCHAR(16) NOT NULL,
  `championId1` int(11) NOT NULL,
  `championName1` text COLLATE utf8_unicode_ci NOT NULL,
  `championId2` int(11) NOT NULL,
  `championName2` text COLLATE utf8_unicode_ci NOT NULL,
  `championId3` int(11) NOT NULL,
  `championName3` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `na_ranked_flex_sr`
--

CREATE TABLE `na_ranked_flex_sr` (
  `name` mediumtext NOT NULL,
  `tier` mediumtext NOT NULL,
  `queue` mediumtext NOT NULL,
  `playerOrTeamId` int(11) NOT NULL,
  `playerOrTeamName` VARCHAR(16) NOT NULL,
  `division` mediumtext NOT NULL,
  `leaguePoints` int(11) NOT NULL,
  `wins` int(11) NOT NULL,
  `losses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `na_ranked_flex_tt`
--

CREATE TABLE `na_ranked_flex_tt` (
  `name` mediumtext NOT NULL,
  `tier` mediumtext NOT NULL,
  `queue` mediumtext NOT NULL,
  `playerOrTeamId` int(11) NOT NULL,
  `playerOrTeamName` VARCHAR(16) NOT NULL,
  `division` mediumtext NOT NULL,
  `leaguePoints` int(11) NOT NULL,
  `wins` int(11) NOT NULL,
  `losses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `na_ranked_solo_5x5`
--

CREATE TABLE `na_ranked_solo_5x5` (
  `name` mediumtext NOT NULL,
  `tier` mediumtext NOT NULL,
  `queue` mediumtext NOT NULL,
  `playerOrTeamId` int(11) NOT NULL,
  `playerOrTeamName` VARCHAR(16) NOT NULL,
  `division` mediumtext NOT NULL,
  `leaguePoints` int(11) NOT NULL,
  `wins` int(11) NOT NULL,
  `losses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `na_ranked_stats`
--

CREATE TABLE `na_ranked_stats` (
  `id` int(11) NOT NULL,
  `summonerName` VARCHAR(16) NOT NULL,
  `championId` int(11) NOT NULL,
  `totalSessionsPlayed` int(11) NOT NULL,
  `totalSessionsLost` int(11) NOT NULL,
  `totalSessionsWon` int(11) NOT NULL,
  `totalChampionKills` int(11) NOT NULL,
  `totalDamageDealt` int(11) NOT NULL,
  `totalDamageTaken` int(11) NOT NULL,
  `mostChampionKillsPerSession` int(11) NOT NULL,
  `totalMinionKills` int(11) NOT NULL,
  `totalDoubleKills` int(11) NOT NULL,
  `totalTripleKills` int(11) NOT NULL,
  `totalQuadraKills` int(11) NOT NULL,
  `totalPentaKills` int(11) NOT NULL,
  `totalUnrealKills` int(11) NOT NULL,
  `totalDeathsPerSession` int(11) NOT NULL,
  `totalGoldEarned` int(11) NOT NULL,
  `mostSpellsCast` int(11) NOT NULL,
  `totalTurretsKilled` int(11) NOT NULL,
  `totalPhysicalDamageDealt` int(11) NOT NULL,
  `totalMagicDamageDealt` int(11) NOT NULL,
  `totalFirstBlood` int(11) NOT NULL,
  `totalAssists` int(11) NOT NULL,
  `maxChampionsKilled` int(11) NOT NULL,
  `maxNumDeaths` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `na_summoners`
--

CREATE TABLE `na_summoners` (
  `id` int(11) NOT NULL,
  `summonerName` VARCHAR(16) NOT NULL,
  `profileIconId` int(11) NOT NULL,
  `summonerLevel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eune_champion_mastery`
--
ALTER TABLE `eune_champion_mastery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eune_most_played_champions`
--
ALTER TABLE `eune_most_played_champions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eune_ranked_flex_sr`
--
ALTER TABLE `eune_ranked_flex_sr`
  ADD PRIMARY KEY (`playerOrTeamId`);

--
-- Indexes for table `eune_ranked_flex_tt`
--
ALTER TABLE `eune_ranked_flex_tt`
  ADD PRIMARY KEY (`playerOrTeamId`);

--
-- Indexes for table `eune_ranked_solo_5x5`
--
ALTER TABLE `eune_ranked_solo_5x5`
  ADD PRIMARY KEY (`playerOrTeamId`);

--
-- Indexes for table `eune_ranked_stats`
--
ALTER TABLE `eune_ranked_stats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eune_summoners`
--
ALTER TABLE `eune_summoners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `euw_champion_mastery`
--
ALTER TABLE `euw_champion_mastery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `euw_most_played_champions`
--
ALTER TABLE `euw_most_played_champions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `euw_ranked_flex_sr`
--
ALTER TABLE `euw_ranked_flex_sr`
  ADD PRIMARY KEY (`playerOrTeamId`);

--
-- Indexes for table `euw_ranked_flex_tt`
--
ALTER TABLE `euw_ranked_flex_tt`
  ADD PRIMARY KEY (`playerOrTeamId`);

--
-- Indexes for table `euw_ranked_solo_5x5`
--
ALTER TABLE `euw_ranked_solo_5x5`
  ADD PRIMARY KEY (`playerOrTeamId`);

--
-- Indexes for table `euw_ranked_stats`
--
ALTER TABLE `euw_ranked_stats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `euw_summoners`
--
ALTER TABLE `euw_summoners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `na_champion_mastery`
--
ALTER TABLE `na_champion_mastery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `na_most_played_champions`
--
ALTER TABLE `na_most_played_champions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `na_ranked_flex_sr`
--
ALTER TABLE `na_ranked_flex_sr`
  ADD PRIMARY KEY (`playerOrTeamId`);

--
-- Indexes for table `na_ranked_flex_tt`
--
ALTER TABLE `na_ranked_flex_tt`
  ADD PRIMARY KEY (`playerOrTeamId`);

--
-- Indexes for table `na_ranked_solo_5x5`
--
ALTER TABLE `na_ranked_solo_5x5`
  ADD PRIMARY KEY (`playerOrTeamId`);

--
-- Indexes for table `na_ranked_stats`
--
ALTER TABLE `na_ranked_stats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `na_summoners`
--
ALTER TABLE `na_summoners`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
