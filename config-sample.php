<?php

// API KEYS frá riot games https://developer.riotgames.com/
if ($_SERVER['HTTP_HOST'] == 'localhost')
{
  // DEVELOPMENT API Key
  $key = 'xxxx-xxxx-xxxx-xxxx';
}
else
{
  // PRODUCTION API Key
  $key = 'xxxx-xxxx-xxxx-xxxx';
}


## League of legends servers og ranked queues sem að vefsíðan styður í augnablikinu.
## Það er hægt að bæta við fleirum, en þá verður að breyta SQL skjalinu (Bæta við tables fyrir aðra servera)
$supported_league_servers = ['eune', 'euw', 'na'];
$supported_ranked_queues = ['ranked_solo_5x5', 'ranked_flex_sr', 'ranked_flex_tt'];



## Þetta er version-ið af data dragon
## Ég nota data dragon til að sýna myndir af hetjum í champion_mastery.php flipanum
##    Example: http://ddragon.leagueoflegends.com/cdn/7.10.1/img/champion/Ahri.png
## Þetta er placeholder fix þangað til að annað kerfi verður notað til þess að sýna myndir af hetjum (nota static data API fyrir version numer t.d.)
## Í augnblikinu þarf að uppfæra þessa tölu í ef það kemur League of Legends patch með nýrri hetju
$data_dragon_version = '7.13.1';



## MySQL stillingar, change as needed.
## Athugið að það þarf að endurnefna config-sample.php í config.php
$host = 'localhost';
$db   = 'iceleague';
$user = 'root';
$pass = '';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
  #Ég veit ekki nákvæmlega hvað þetta gerir, en þetta virkar fyrir mig. Pls fix.
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES   => FALSE,
];
$pdo = new PDO($dsn, $user, $pass, $opt);
?>
