<?php
	session_start();
	include ('baza.php');
	
	if(isset($_SESSION['login'])) {
		unset($_SESSION['login']);
		session_destroy();
		header('Location: index.php');
	}
?>