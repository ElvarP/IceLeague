<?php
echo "<pre>";
set_time_limit(0); // Ekkert time limit svo það er hægt að uppfæra alla summoners
require_once 'config.php';
require_once 'vendor/autoload.php';
use LeagueWrap\Api;
$api      = new Api($key);
$championsStaticData = $api->staticData()->getChampions();

foreach ($supported_league_servers as $server) {
$api->setRegion($server);
$sth = $pdo->prepare("SELECT id FROM {$server}_summoners");
$sth->execute();
$summoners_ids = $sth->fetchAll(PDO::FETCH_ASSOC);
foreach ($summoners_ids as $the_summoner_id) {
  try {
    #Fá summoner info til þess að setja í databaseið
    $summoner = $api->summoner()->info($the_summoner_id);
    $sth = $pdo->prepare("REPLACE INTO {$server}_summoners (id, summonerName, profileIconId, summonerLevel)
    VALUES(:id, :summonerName, :profileIconId, :summonerLevel)");
    $sth->execute(array(
      ':id' => $summoner->id,
      ':summonerName' => $summoner->name,
      ':profileIconId' => $summoner->profileIconId,
      ':summonerLevel' => $summoner->summonerLevel,
    ));

    #telja hversu oft spilari spilar X role - uppfæra databaseið
    $numberOfMatchesLoopedOver = 0;
    $topGamesPlayed = 0;
    $jungleGamesPlayed = 0;
    $midGamesPlayed = 0;
    $adcGamesPlayed = 0;
    $supportGamesPlayed = 0;
    $matchHistory = $api->matchlist()->matchlist($summoner);
    foreach ($matchHistory as $match) {
      $numberOfMatchesLoopedOver++;
      if($numberOfMatchesLoopedOver == 20) break;
      switch ($match->lane) {
          case "TOP":
              $topGamesPlayed++;
              break;
          case "JUNGLE":
              $jungleGamesPlayed++;
              break;
          case "MID":
              $midGamesPlayed++;
              break;
          case "BOTTOM":
              $match->role == "DUO_CARRY" ? $adcGamesPlayed++ : $supportGamesPlayed++;
              break;
        }
    }

    $roles = array("top" => $topGamesPlayed, "jungle" => $jungleGamesPlayed, "mid" => $midGamesPlayed, "adc" => $adcGamesPlayed, "support" => $supportGamesPlayed);
    $mainRole = array_search(max($roles),$roles);
    $sth = $pdo->prepare("REPLACE INTO {$server}_roles (id, summonerName, mainRole, totalGamesPlayed, topGamesPlayed, jungleGamesPlayed, midGamesPlayed, adcGamesPlayed, supportGamesPlayed)
    VALUES (:id, :summonerName, :mainRole,:totalGamesPlayed, :topGamesPlayed, :jungleGamesPlayed, :midGamesPlayed, :adcGamesPlayed, :supportGamesPlayed)");
    $sth->execute(array(
      ':id' => $summoner->id,
      ':summonerName' => $summoner->name,
      ':mainRole' => $mainRole,
      ':totalGamesPlayed' => $matchHistory->totalGames,
      ':topGamesPlayed' => $topGamesPlayed,
      ':jungleGamesPlayed' => $jungleGamesPlayed,
      ':midGamesPlayed' => $midGamesPlayed,
      ':adcGamesPlayed' => $adcGamesPlayed,
      ':supportGamesPlayed' => $supportGamesPlayed,
    ));

    #Fá League info hjá summoner - uppfæra databaseið
    $leagues = $api->league()->league($summoner, true);
    foreach ($leagues as $league) {
      $queue = strtolower($league->queue); #lágstafa queue til þess að setja í table með lágstöfum
      $sth = $pdo->prepare("REPLACE INTO {$server}_$queue (name, tier, queue, playerOrTeamid, playerOrTeamName, division, leaguePoints, wins, losses)
      VALUES(:name, :tier, :queue, :playerOrTeamId, :playerOrTeamName, :division, :leaguePoints, :wins, :losses)");
      $sth->execute(array(
        ':name' => $league->name,
        ':tier' => $league->tier,
        ':queue' => $league->queue,
        ':playerOrTeamId' => $league->entries[0]->playerOrTeamId,
        ':playerOrTeamName' => $league->entries[0]->playerOrTeamName,
        ':division' => $league->entries[0]->division,
        ':leaguePoints' => $league->entries[0]->leaguePoints,
        ':wins' => $league->entries[0]->wins,
        ':losses' => $league->entries[0]->losses,
      ));
    }

    #Fá champion mastery info - uppfæra databaseið
    $masteryList = $api->championMastery()->topChampions($summoner, 3);
    $champion1 = $championsStaticData->getChampion($masteryList[0]->championId);
    $champion2 = $championsStaticData->getChampion($masteryList[1]->championId);
    $champion3 = $championsStaticData->getChampion($masteryList[2]->championId);
    $sth = $pdo->prepare("REPLACE INTO {$server}_champion_mastery (id, summonerName, championId1, championName1, championPoints1, championId2, championName2, championPoints2, championId3, championName3, championPoints3)
    VALUES(:id, :summonerName, :championId1, :championName1, :championPoints1, :championId2, :championName2, :championPoints2, :championId3, :championName3, :championPoints3)");
    $sth->execute(array(
      ':id' => $summoner->id,
      ':summonerName' => $summoner->name,
      ':championId1' => $masteryList[0]->championId,
      ':championName1' => $champion1->key,
      ':championPoints1' => $masteryList[0]->championPoints,
      ':championId2' => $masteryList[1]->championId,
      ':championName2' => $champion2->key,
      ':championPoints2' => $masteryList[1]->championPoints,
      ':championId3' => $masteryList[2]->championId,
      ':championName3' => $champion3->key,
      ':championPoints3' => $masteryList[2]->championPoints,
    ));

    #Fá ranked stats info, raða stats eftir hæsta totalSessionsPlayed - uppfæra databaseið
    $stats = $api->stats()->ranked($summoner)->raw();
    usort($stats['champions'], function($a, $b) {
      return $b['stats']['totalSessionsPlayed'] - $a['stats']['totalSessionsPlayed'];
    });
    #Fá info um fyrstu þrjá champana til þess að setja nafnið þeirra (key) í databaseið
    $champion1 = $championsStaticData->getChampion($stats['champions'][1]['id']);
    $champion2 = $championsStaticData->getChampion($stats['champions'][2]['id']);
    $champion3 = $championsStaticData->getChampion($stats['champions'][3]['id']);

    $sth = $pdo->prepare("REPLACE INTO {$server}_most_played_champions (id, summonerName, championId1, championName1, championId2, championName2, championId3, championName3)
    VALUES(:id, :summonerName, :championId1, :championName1, :championId2, :championName2, :championId3, :championName3)");
    $sth->execute(array(
      ':id' => $summoner->id,
      ':summonerName' => $summoner->name,
      ':championId1' => $stats['champions'][1]['id'],
      ':championName1' => $champion1->key,
      ':championId2' => $stats['champions'][2]['id'],
      ':championName2' => $champion2->key,
      ':championId3' => $stats['champions'][3]['id'],
      ':championName3' => $champion3->key,
    ));
    $sth = $pdo->prepare("REPLACE INTO {$server}_ranked_stats (id, summonerName, championId, totalSessionsPlayed, totalSessionsLost, totalSessionsWon, totalChampionKills, totalDamageDealt, totalDamageTaken, mostChampionKillsPerSession, totalMinionKills, totalDoubleKills, totalTripleKills, totalQuadraKills, totalPentaKills, totalUnrealKills, totalDeathsPerSession, totalGoldEarned, mostSpellsCast, totalTurretsKilled, totalPhysicalDamageDealt, totalMagicDamageDealt, totalFirstBlood, totalAssists, maxChampionsKilled, maxNumDeaths)
    VALUES(:id, :summonerName, :championId, :totalSessionsPlayed, :totalSessionsLost, :totalSessionsWon, :totalChampionKills, :totalDamageDealt, :totalDamageTaken, :mostChampionKillsPerSession, :totalMinionKills, :totalDoubleKills, :totalTripleKills, :totalQuadraKills, :totalPentaKills, :totalUnrealKills, :totalDeathsPerSession, :totalGoldEarned, :mostSpellsCast, :totalTurretsKilled, :totalPhysicalDamageDealt, :totalMagicDamageDealt, :totalFirstBlood, :totalAssists, :maxChampionsKilled, :maxNumDeaths)");
    $sth->execute(array(
      ':id' => $summoner->id,
      ':summonerName' => $summoner->name,
      ':championId' => $stats['champions'][0]['id'],
      ':totalSessionsPlayed' =>$stats['champions'][0]['stats']['totalSessionsPlayed'],
      ':totalSessionsLost' => $stats['champions'][0]['stats']['totalSessionsLost'],
      ':totalSessionsWon' => $stats['champions'][0]['stats']['totalSessionsWon'],
      ':totalChampionKills' => $stats['champions'][0]['stats']['totalChampionKills'],
      ':totalDamageDealt' => $stats['champions'][0]['stats']['totalDamageDealt'],
      ':totalDamageTaken' => $stats['champions'][0]['stats']['totalDamageTaken'],
      ':mostChampionKillsPerSession' => $stats['champions'][0]['stats']['mostChampionKillsPerSession'],
      ':totalMinionKills' => $stats['champions'][0]['stats']['totalMinionKills'],
      ':totalDoubleKills' => $stats['champions'][0]['stats']['totalDoubleKills'],
      ':totalTripleKills' => $stats['champions'][0]['stats']['totalTripleKills'],
      ':totalQuadraKills' => $stats['champions'][0]['stats']['totalQuadraKills'],
      ':totalPentaKills' => $stats['champions'][0]['stats']['totalPentaKills'],
      ':totalUnrealKills' => $stats['champions'][0]['stats']['totalUnrealKills'],
      ':totalDeathsPerSession' => $stats['champions'][0]['stats']['totalDeathsPerSession'],
      ':totalGoldEarned' => $stats['champions'][0]['stats']['totalGoldEarned'],
      ':mostSpellsCast' => $stats['champions'][0]['stats']['mostSpellsCast'],
      ':totalTurretsKilled' => $stats['champions'][0]['stats']['totalTurretsKilled'],
      ':totalPhysicalDamageDealt' => $stats['champions'][0]['stats']['totalPhysicalDamageDealt'],
      ':totalMagicDamageDealt' => $stats['champions'][0]['stats']['totalMagicDamageDealt'],
      ':totalFirstBlood' => $stats['champions'][0]['stats']['totalFirstBlood'],
      ':totalAssists' => $stats['champions'][0]['stats']['totalAssists'],
      ':maxChampionsKilled' => $stats['champions'][0]['stats']['maxChampionsKilled'],
      ':maxNumDeaths' => $stats['champions'][0]['stats']['maxNumDeaths'],
    ));

    echo "<br>Uppfært: $server - $summoner->name - $summoner->id";
    usleep(100000); #Sofa í 0.1 sekundu til þess að fara ekki yfir API limitið
  } catch (LeagueWrap\Response\Http404 $e) {
    #Eyða þessum notanda úr frontend gagnagrunninum þar sem það var ekki fundið upplýsingar um hann (Líklegast unranked)
    echo "<br>404 error: $server - $summoner->name - $summoner->id";
    $sth = $pdo->prepare("DELETE FROM {$server}_ranked_stats WHERE id=$summoner->id");
    $sth->execute();
    $sth = $pdo->prepare("DELETE FROM {$server}_champion_mastery WHERE id=$summoner->id");
    $sth->execute();
    $sth = $pdo->prepare("DELETE FROM {$server}_ranked_solo_5x5 WHERE playerOrTeamId=$summoner->id");
    $sth->execute();
    $sth = $pdo->prepare("DELETE FROM {$server}_ranked_flex_sr WHERE playerOrTeamId=$summoner->id");
    $sth->execute();
    $sth = $pdo->prepare("DELETE FROM {$server}_ranked_flex_tt WHERE playerOrTeamId=$summoner->id");
    $sth->execute();
  } catch (LeagueWrap\Response\ResponseException $e) {
    #Þetta er catch all (bæði 4xx og 5xx http errors)
    echo "<br>ResponseException error: $server - $summoner->name - $summoner->id";
    $e->hasResponse(); #Checks if response was attached
    $response = $e->getResponse(); #Instance of LeagueWrap\Response
    echo $response;  #Logga responsið
  } catch (LeagueWrap\Response\UnderlyingServiceRateLimitReached $e) {
    #API Rate limitið var reached - sofa þangað til við megum reyna aftur
    sleep($e->getRetryAfter());
  }
}
}
