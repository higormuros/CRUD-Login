<?php
	session_start();
	if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'S'){
		header('Location: login.php?login=erro2');
	} else{
		$_SESSION = array();
		header('Location: login.php');
	}

?>