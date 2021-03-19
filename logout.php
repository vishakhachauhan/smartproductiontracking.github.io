<?php
	session_start();
	session_unset($_SESSION["ukey"]);
	session_destroy($_SESSION["ukey"]);
	header('location:login.php');
?>
