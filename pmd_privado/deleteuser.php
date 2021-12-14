<?php
session_start();
if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'S'){
	header('Location: login.php?login=erro2');
} else{
	require 'conexao.php';
	require 'systemservice.php';
	$conexao=new conexao();
	$systemservice=new systemservice($conexao);
	$systemservice->deletarusuario($_SESSION['userid']);
	header('Location: newuser.php?del=y');
}


?>