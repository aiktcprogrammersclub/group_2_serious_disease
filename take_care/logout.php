<?php
	session_start();
	unset($_SESSION['uname']);
	unset($_SESSION['admin']);
	unset($_SESSION['name']);
	session_destroy();
	header('location: login.php');
	exit;
?>
	
