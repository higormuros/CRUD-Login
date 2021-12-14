<?php

require 'conexao.php';
require 'systemservice.php';
$conexao=new conexao();
$systemservice=new systemservice($conexao);
$usuarios_app=$systemservice->recuperarusuarios();

$usuario_autenticado = false;
for($i = 0; $i < sizeof($usuarios_app); $i++){
    if($usuarios_app[$i][2] == $_POST['email'] && $usuarios_app[$i][3] == $_POST['senha']){
        $usuario_autenticado = true;
		$id=$usuarios_app[$i][0];
    }
}

if($usuario_autenticado){
	session_start();
	$_SESSION['userid']=$id;
    $_SESSION['autenticado'] = 'S';
	header('Location: inicio.php');
}else{  
    header('Location: login.php?login=erro');
}

?>