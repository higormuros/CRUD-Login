<?php
if(
!empty($_POST['nome']) &&
!empty($_POST['email']) &&
!empty($_POST['senha']) &&
$_POST['senha']==$_POST['senha2'] &&
strlen($_POST['senha'])>=4
){
require 'conexao.php';
require 'systemservice.php';
$conexao=new conexao();
$systemservice=new systemservice($conexao);
$systemservice->novousuario($_POST['nome'],$_POST['email'],$_POST['senha']);
$systemservice=new systemservice($conexao);
$user=$systemservice->recuperarusuario($_POST['email']);
echo "<pre>";
print_r($user);
echo "</pre>";
if(sizeof($user)>0){
	session_start();
	$_SESSION['userid']=$user[0][0];
    $_SESSION['autenticado'] = 'S';
	header('Location: inicio.php');
}else{  
    header('Location: newuser.php?new=erro');
}
}else{  
    header('Location: newuser.php?new=erro');
}
?>