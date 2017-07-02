<?php
require_once '../config.php';
require_once '../vendor/autoload.php';
use LeagueWrap\Api;
$server = $_POST['server'];
$summonerName = $_POST['summoner'];
if(preg_match('/ ^[0-9\p{L} ]+$ /', $summonerName))
{
  echo "<div class='alert alert-danger'>Þessi summoner fannst ekki: <b>$summonerName</b>, vinsamlegast athugaðu hvort þú valdir réttan server</div>", exit;
}
$api = new Api($key); // Load up the API
$api->setRegion($server); //Setja region sem það sem notandinn valdi (na, euw eða {$server})
try {
  $championsStaticData = $api->staticData()->getChampions();
} catch (LeagueWrap\Response\Http404 $e) {
  echo "<div class='alert alert-danger'>Fyrirgefðu! Það er eitthvað bilað hjá Riot Games, vinsamlegast prufaðu aftur seinna</div>", exit;
} catch (LeagueWrap\Response\UnderlyingServiceRateLimitReached $e) {
  echo "<div class='alert alert-danger'>Fyrirgefðu! það eru of margir að nota síðuna í augnablikinu, vinsamlegast prufaðu aftur seinna</div>", exit;
}
try {
  $summoner = $api->summoner()->info($summonerName);
} catch (LeagueWrap\Response\Http404 $e) {
  echo "<div class='alert alert-danger'>Þessi summoner fannst ekki: <b>$summonerName</b>, vinsamlegast athugaðu hvort þú valdir réttan server</div>", exit;
} catch (LeagueWrap\Response\UnderlyingServiceRateLimitReached $e) {
  echo "<div class='alert alert-danger'>Fyrirgefðu! það eru of margir að nota síðuna í augnablikinu, vinsamlegast prufaðu aftur seinna</div>", exit;
}
try {
  $masteryPages = $api->summoner()->masteryPages($summoner->id);
} catch (LeagueWrap\Response\Http404 $e) {
  echo "<div class='alert alert-danger'>Það fannst ekki mastery pages fyrir þennan summoner: <b>$summoner->name</b></div>", exit;
} catch (LeagueWrap\Response\UnderlyingServiceRateLimitReached $e) {
  echo "<div class='alert alert-danger'>Fyrirgefðu! það eru of margir að nota síðuna í augnablikinu, vinsamlegast prufaðu aftur seinna</div>", exit;
}
#Tjekka hvort notandinn er með mastery Page sem er == "iceleague" til þess að staðfesta að notandinn á summoner aðganginn
$masteryPageFound = False;
foreach ($masteryPages as $masteryPage) {
  $masteryPageName = strtolower($masteryPage->name); #Lágstafa nafnið á mastery page-inu svo það breyti ekki máli ef notandinn notar Lágstafi/Hástafi
  if ($masteryPageName == "iceleague") {
    $masteryPageFound = True;
  }
}
if ($masteryPageFound == False) {
  echo "<div class='alert alert-danger'>Þú verður að endurskíra eitt mastery page í 'iceleague' (án gæsalappa)</div>", exit;
}
elseif ($masteryPageFound == True) {
  #setja notandann í gagnagrunninum
  $sth = $pdo->prepare("REPLACE INTO {$server}_summoners (id, summonerName, profileIconId, summonerLevel) VALUES(:id, :name, :profileIconId, :summonerLevel)");
  $sth->bindValue(":id", $summoner->id);
  $sth->bindValue(":name", $summoner->name);
  $sth->bindValue(":profileIconId", $summoner->profileIconId);
  $sth->bindValue(":summonerLevel", $summoner->summonerLevel);
  $sth->execute();
  #Finna League stats hjá notanda, loopa í gegnum þá og setja í gagnagrunninn - Ef enginn league stats fannst þá fáum við 404 error
  try {
    $leagues = $api->league()->league($summoner, true);
    foreach ($leagues as $league) {
      $queue = strtolower($league->queue); #Lágstafa queue til þess að setja í table með lágstöfum
      $sth = $pdo->prepare("REPLACE INTO {$server}_{$queue} (name, tier, queue, playerOrTeamid, playerOrTeamName, division, leaguePoints, wins, losses) VALUES(:name, :tier, :queue, :playerOrTeamId, :playerOrTeamName, :division, :leaguePoints, :wins, :losses)");
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
  } catch (LeagueWrap\Response\Http404 $e) {
    echo "<div class='alert alert-danger'>Það fannst ekki League stats fyrir þennan summoner: <b>$summoner->name</b></div>", exit;
  } catch (LeagueWrap\Response\UnderlyingServiceRateLimitReached $e) {
    echo "<div class='alert alert-danger'>Fyrirgefðu! það eru of margir að nota síðuna í augnablikinu, vinsamlegast prufaðu aftur seinna</div>", exit;
  }
  #Finna champion mastery stats hjá notanda, setja það í gagnagrunninn - Ef ekkert fannst þá fáum við 404 error
  try {
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
  } catch (LeagueWrap\Response\Http404 $e) {
    echo "<div class='alert alert-danger'>Það fannst ekki Champion Mastery stats fyrir þennan summoner: <b>$summoner->name</b></div>", exit;
  } catch (LeagueWrap\Response\UnderlyingServiceRateLimitReached $e) {
    echo "<div class='alert alert-danger'>Fyrirgefðu! það eru of margir að nota síðuna í augnablikinu, vinsamlegast prufaðu aftur seinna</div>", exit;
  }
  #Finna ranked stats hjá notanda, setja það í gagnagrunninn - Ef enginn ranked stats fannst þá fáum við 404 error
  try {
    $stats = $api->stats()->ranked($summoner)->raw();
    #Raða stats eftir totalSessionsPlayed (descending) - Setja top 3 champana í gagnagrunninn, setja champion id 0 ranked stats í gagnagrunninn (champion id 0 er samanlagða stats af öllum champions)
    usort($stats['champions'], function($a, $b) {
      return $b['stats']['totalSessionsPlayed'] - $a['stats']['totalSessionsPlayed'];
    });
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
  } catch (LeagueWrap\Response\Http404 $e) {
    echo "<div class='alert alert-danger'>Það fannst ekki ranked stats fyrir þennan summoner: <b>$summoner->name</b></div>", exit;
  } catch (LeagueWrap\Response\UnderlyingServiceRateLimitReached $e) {
    echo "<div class='alert alert-danger'>Fyrirgefðu! það eru of margir að nota síðuna í augnablikinu, vinsamlegast prufaðu aftur seinna</div>", exit;
  }
  echo "<div class='alert alert-success'>Takk fyrir að skrá þig <b>$summoner->name</b>!</div>";
}
