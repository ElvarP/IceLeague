<?php
require_once '../config.php';
require_once '../vendor/autoload.php';
require_once 'header.php';



$page = isset($_GET['sida']) ? $_GET['sida'] : null;
$allowed_pages = array('champion_mastery', 'leagues', 'ranked_stats', 'faq');

if (!empty($page)) {

	if(in_array($page, $allowed_pages)) {
		$page .= '.php';
		include $page;
	}
	else {
		include '404.php';
	}

}
else {
	include('home.php');
}


require_once 'footer.php';
