<?php require_once 'header.php'; ?>

<?php

$page = $_GET['sida'];
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
?>

<?php require_once 'footer.php'; ?>
