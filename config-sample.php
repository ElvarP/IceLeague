<?php

## API Key frá riot games https://developer.riotgames.com/
$key = 'xxxx-xxxx-xxxx-xxxx-xxxx';

## League of legends servers og ranked queues sem að vefsíðan styður í augnablikinu.
## Það er hægt að bæta við fleirum, en þá verður að breyta SQL skjalinu (Bæta við tables fyrir aðra servera)
$supported_league_servers = ['eune', 'euw', 'na'];
$supported_ranked_queues = ['ranked_solo_5x5', 'ranked_flex_sr', 'ranked_flex_tt'];


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
