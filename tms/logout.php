<?php
require_once('root/config.php');
$email = $_SESSION['email'];
$userid = $_SESSION['userid'];
$dbh->query("UPDATE users SET token = '' WHERE userid = '$userid'  ");
unset($_SESSION['userid']);
session_destroy();
redirect_page(SITE_URL);

?>