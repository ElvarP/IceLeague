<?php

#Config Fileinn er loadaður í /vendor/autoload.php

## MySQL stillingar, change as needed.
## Athugið að það þarf að endurnefna config-sample.php í config.php
$host = 'localhost';
$db   = 'iceleague';
$user = 'root';
$pass = '';
$charset = 'utf8';
$key = ''; #API Key frá riot games https://developer.riotgames.com/
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
  #Ég veit ekki nákvæmlega hvað þetta gerir, ég fann þetta á google, pls fix
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES   => FALSE,
];
$pdo = new PDO($dsn, $user, $pass, $opt);
