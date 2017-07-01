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
    $sth = $pdo->prepare("REPLACE INTO {$server}_summoners (id, summonerName, profileIconId, summonerLevel) VALUES(:id, :summonerName, :profileIconId, :summonerLevel)");
    $sth->bindValue(":id", $summoner->id);
    $sth->bindValue(":summonerName", $summoner->name);
    $sth->bindValue(":profileIconId", $summoner->profileIconId);
    $sth->bindValue(":summonerLevel", $summoner->summonerLevel);
    $sth->execute();

    #telja hversu oft spilari spilar X role - uppfæra databaseið
    $topGamesPlayed = 0;
    $jungleGamesPlayed = 0;
    $midGamesPlayed = 0;
    $adcGamesPlayed = 0;
    $supportGamesPlayed = 0;
    $matchHistory = $api->matchlist()->matchlist($summoner);
    foreach ($matchHistory as $match) {
      if ($match->lane == "TOP") {
        $topGamesPlayed++;
      }
      elseif ($match->lane == "JUNGLE") {
        $jungleGamesPlayed++;
      }
      elseif ($match->lane == "MID") {
        $midGamesPlayed++;
      }
      elseif ($match->lane == "BOTTOM") {
        if ($match->role == "DUO_CARRY") {
          $adcGamesPlayed++;
        }
        elseif ($match->role == "DUO_SUPPORT") {
          $supportGamesPlayed++;
        }
      }
    }
    $sth = $pdo->prepare("REPLACE INTO {$server}_roles (id, summonerName, totalGamesPlayed, topGamesPlayed, jungleGamesPlayed, midGamesPlayed, adcGamesPlayed, supportGamesPlayed)
    VALUES (:id, :summonerName, :totalGamesPlayed, :topGamesPlayed, :jungleGamesPlayed, :midGamesPlayed, :adcGamesPlayed, :supportGamesPlayed)");
    $sth->execute(array(
      ':id' => $summoner->id,
      ':summonerName' => $summoner->name,
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
      $sth = $pdo->prepare("REPLACE INTO {$server}_$queue (name, tier, queue, playerOrTeamid, playerOrTeamName, division, leaguePoints, wins, losses) VALUES(:name, :tier, :queue, :playerOrTeamId, :playerOrTeamName, :division, :leaguePoints, :wins, :losses)");
      $sth->bindValue(":name", $league->name);
      $sth->bindValue(":tier", $league->tier);
      $sth->bindValue(":queue", $league->queue);
      $sth->bindValue(":playerOrTeamId", $league->entries[0]->playerOrTeamId);
      $sth->bindValue(":playerOrTeamName", $league->entries[0]->playerOrTeamName);
      $sth->bindValue(":division", $league->entries[0]->division);
      $sth->bindValue(":leaguePoints", $league->entries[0]->leaguePoints);
      $sth->bindValue(":wins", $league->entries[0]->wins);
      $sth->bindValue(":losses", $league->entries[0]->losses);
      $sth->execute();
    }

    #Fá champion mastery info - uppfæra databaseið
    $masteryList = $api->championMastery()->topChampions($summoner, 3);
    $champion1 = $championsStaticData->getChampion($masteryList[0]->championId);
    $champion2 = $championsStaticData->getChampion($masteryList[1]->championId);
    $champion3 = $championsStaticData->getChampion($masteryList[2]->championId);

    $sth = $pdo->prepare("REPLACE INTO {$server}_champion_mastery (id, summonerName, championId1, championName1, championPoints1, championId2, championName2, championPoints2, championId3, championName3, championPoints3)
    VALUES(:id, :summonerName, :championId1, :championName1, :championPoints1, :championId2, :championName2, :championPoints2, :championId3, :championName3, :championPoints3)");
    $sth->bindValue(":id", $summoner->id);
    $sth->bindValue(":summonerName", $summoner->name);
    $sth->bindValue(":championId1", $masteryList[0]->championId);
    $sth->bindValue(":championName1", $champion1->key);
    $sth->bindValue(":championPoints1", $masteryList[0]->championPoints);
    $sth->bindValue(":championId2", $masteryList[1]->championId);
    $sth->bindValue(":championName2", $champion2->key);
    $sth->bindValue(":championPoints2", $masteryList[1]->championPoints);
    $sth->bindValue(":championId3", $masteryList[2]->championId);
    $sth->bindValue(":championName3", $champion3->key);
    $sth->bindValue(":championPoints3", $masteryList[2]->championPoints);
    $sth->execute();

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
    $sth->bindValue(":id", $summoner->id);
    $sth->bindValue(":summonerName", $summoner->name);
    $sth->bindValue(":championId1", $stats['champions'][1]['id']);
    $sth->bindValue(":championName1", $champion1->key);
    $sth->bindValue(":championId2", $stats['champions'][2]['id']);
    $sth->bindValue(":championName2", $champion2->key);
    $sth->bindValue(":championId3", $stats['champions'][3]['id']);
    $sth->bindValue(":championName3", $champion3->key);
    $sth->execute();

    $sth = $pdo->prepare("REPLACE INTO {$server}_ranked_stats (id, summonerName, championId, totalSessionsPlayed, totalSessionsLost, totalSessionsWon, totalChampionKills, totalDamageDealt, totalDamageTaken, mostChampionKillsPerSession, totalMinionKills, totalDoubleKills, totalTripleKills, totalQuadraKills, totalPentaKills, totalUnrealKills, totalDeathsPerSession, totalGoldEarned, mostSpellsCast, totalTurretsKilled, totalPhysicalDamageDealt, totalMagicDamageDealt, totalFirstBlood, totalAssists, maxChampionsKilled, maxNumDeaths)
    VALUES(:id, :summonerName, :championId, :totalSessionsPlayed, :totalSessionsLost, :totalSessionsWon, :totalChampionKills, :totalDamageDealt, :totalDamageTaken, :mostChampionKillsPerSession, :totalMinionKills, :totalDoubleKills, :totalTripleKills, :totalQuadraKills, :totalPentaKills, :totalUnrealKills, :totalDeathsPerSession, :totalGoldEarned, :mostSpellsCast, :totalTurretsKilled, :totalPhysicalDamageDealt, :totalMagicDamageDealt, :totalFirstBlood, :totalAssists, :maxChampionsKilled, :maxNumDeaths)");
    $sth->bindValue(":id", $summoner->id);
    $sth->bindValue(":summonerName", $summoner->name);
    $sth->bindValue(":championId", $stats['champions'][0]['id']);
    $sth->bindValue(":totalSessionsPlayed",$stats['champions'][0]['stats']['totalSessionsPlayed']);
    $sth->bindValue(":totalSessionsLost", $stats['champions'][0]['stats']['totalSessionsLost']);
    $sth->bindValue(":totalSessionsWon", $stats['champions'][0]['stats']['totalSessionsWon']);
    $sth->bindValue(":totalChampionKills", $stats['champions'][0]['stats']['totalChampionKills']);
    $sth->bindValue(":totalDamageDealt", $stats['champions'][0]['stats']['totalDamageDealt']);
    $sth->bindValue(":totalDamageTaken", $stats['champions'][0]['stats']['totalDamageTaken']);
    $sth->bindValue(":mostChampionKillsPerSession", $stats['champions'][0]['stats']['mostChampionKillsPerSession']);
    $sth->bindValue(":totalMinionKills", $stats['champions'][0]['stats']['totalMinionKills']);
    $sth->bindValue(":totalDoubleKills", $stats['champions'][0]['stats']['totalDoubleKills']);
    $sth->bindValue(":totalTripleKills", $stats['champions'][0]['stats']['totalTripleKills']);
    $sth->bindValue(":totalQuadraKills", $stats['champions'][0]['stats']['totalQuadraKills']);
    $sth->bindValue(":totalPentaKills", $stats['champions'][0]['stats']['totalPentaKills']);
    $sth->bindValue(":totalUnrealKills", $stats['champions'][0]['stats']['totalUnrealKills']);
    $sth->bindValue(":totalDeathsPerSession", $stats['champions'][0]['stats']['totalDeathsPerSession']);
    $sth->bindValue(":totalGoldEarned", $stats['champions'][0]['stats']['totalGoldEarned']);
    $sth->bindValue(":mostSpellsCast", $stats['champions'][0]['stats']['mostSpellsCast']);
    $sth->bindValue(":totalTurretsKilled", $stats['champions'][0]['stats']['totalTurretsKilled']);
    $sth->bindValue(":totalPhysicalDamageDealt", $stats['champions'][0]['stats']['totalPhysicalDamageDealt']);
    $sth->bindValue(":totalMagicDamageDealt", $stats['champions'][0]['stats']['totalMagicDamageDealt']);
    $sth->bindValue(":totalFirstBlood", $stats['champions'][0]['stats']['totalFirstBlood']);
    $sth->bindValue(":totalAssists", $stats['champions'][0]['stats']['totalAssists']);
    $sth->bindValue(":maxChampionsKilled", $stats['champions'][0]['stats']['maxChampionsKilled']);
    $sth->bindValue(":maxNumDeaths", $stats['champions'][0]['stats']['maxNumDeaths']);
    $sth->execute();

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
