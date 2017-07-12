<?php
// API KEYS frá riot games https://developer.riotgames.com/
define('ENVIRONMENT', 'PRODUCTION');
if (ENVIRONMENT == 'DEVELOPMENT') {
  $key = 'xxxx'; //DEVELOPMENT API KEY
}
elseif (ENVIRONMENT == 'PRODUCTION') {
  $key = 'xxxx'; //PRODUCTION API KEY
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
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
  #Ég veit ekki nákvæmlega hvað þetta gerir, en þetta virkar fyrir mig. Pls fix.
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES   => FALSE,
];
$pdo = new PDO($dsn, $user, $pass, $opt);


/*
 * PHP function til ad athuga hvort
 * Kennitala se rett (gild) eda ekki
 * http://www.skra.is/thjodskra/um-thjodskra-/um-kennitolur/
 * SOURCE: https://github.com/Teddi96/Kennitala
 */
function kennitala($tala) {
	// ath lengd
	if(strlen($tala) != 10) {
		return "Ogild Kennitala";
	}

	// d = dagur, m = manudur, y = ar (2 tolurstafir)
	$format = 'dmy';

	//Faum fyrstu 6 tolustafina
	$date = mb_substr($tala, 0, 6);

	// Faum dagsetningu
	$d = DateTime::createFromFormat($format, $date);

	// True or False athugun, villa ef ogild
	if($d && $d->format($format) != $date) {
		return "Ogild Kennitala";
	}

	// next two fra og med 20.
	$safe = mb_substr($tala, -4, -2);

	if($safe < 20) {
		return "Ogild Kennitala";
	}


	/* Array fyrir modulus 11 reikning */
	$weight = array( 2, 3, 4, 5, 6, 7,
			 2, 3);

	// First 8 to calculate the 9th number
	$first_8 = mb_substr($tala, 0,8);

	// First 9 that we were given
	$first_9 = mb_substr($tala, 0, 9);

	// Turn it around..
	$reverse = strrev( $first_8 );

	for ( $i = 0, $sum = 0; $i < strlen( $reverse ); $i++ ) {
		$sum += substr( $reverse, $i, 1 ) * $weight[ $i ];
	}

	$reminder = $sum % 11;

	switch( $reminder ) {
		case 0:
			$result = $first_8 . 0;
			break;

		case 1:
			$result = "n/a";
			break;

		default:
			$check_digit = 11 - $reminder;
			$result = $first_8 . $check_digit;
			break;
	}

	if( $result != $first_9 ) {
		return "Ogild Kennitala";
	}


	// The last number is the century
	$century = mb_substr($tala, 9, 10); // The last number
	$year = mb_substr($tala, -6, -4); // Year of birth 2 digit format
	$d = DateTime::createFromFormat('y', $year); // Change 2 digit format to 4 digit format
	$year = $d->format('Y'); // So we can use the 4 digit format

	// 19 century
	if($century == 8) {
		if(preg_match('/18../', $year)) {
			return "Gild Kennitala";
		} else {
			return "Ogild Kennitala";
		}
	}

	// 20 century
	elseif($century == 9) {
		if(preg_match('/19../', $year)) {
			return "Gild Kennitala";
		} else {
			return "Ogild Kennitala";
		}
	}

	// 21 Century
	elseif($century == 0) {
		if(preg_match('/20../', $year)) {
			return "Gild Kennitala";
		} else {
			return "Ogild Kennitala";
		}
	}

}
