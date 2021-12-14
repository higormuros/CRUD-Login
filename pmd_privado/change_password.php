<?php
if(
!empty($_POST['novasenha']) &&
$_POST['novasenha']==$_POST['novasenha2'] &&
strlen($_POST['novasenha'])>=4
){
require 'conexao.php';
require 'systemservice.php';
$conexao=new conexao();
$systemservice=new systemservice($conexao);
$systemservice->mudarsenha($_POST['novasenha'],$_POST['id2']);
header('Location: conta.php?success=y');
}else{  
    header('Location: newuser.php?success=f');
}
?>