<?php
if(
!empty($_POST['nome']) &&
!empty($_POST['email'])
){
require 'conexao.php';
require 'systemservice.php';
$conexao=new conexao();
$systemservice=new systemservice($conexao);
$systemservice->mudarusuario($_POST['nome'],$_POST['email'],$_POST['id']);
header('Location: conta.php?success=y');
}else{  
    header('Location: newuser.php?success=f');
}

?>