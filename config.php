<?php
#Config Fileinn er loadaður í /vendor/autoload.php
$host = 'localhost';
$db   = 'iceleague';
$user = 'root';
$pass = '';
$charset = 'utf8';
$key = ''; #API Key frá riot games https://developer.riotgames.com/
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES   => FALSE,
];
$pdo = new PDO($dsn, $user, $pass, $opt);
