<?php

require 'conexao.php';
require 'systemservice.php';
$conexao=new conexao();
$systemservice=new systemservice($conexao);
$user=$systemservice->carregarusuario($_SESSION['userid']);


?>