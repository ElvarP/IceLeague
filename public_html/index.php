<?php require_once 'header.php'; ?>

<?php
$page = isset($_GET['page'])
   ? preg_replace("/\W+/", "", $_GET['page'])
   : "home";
 include "$page.php";
?>

<?php require_once 'footer.php'; ?>
