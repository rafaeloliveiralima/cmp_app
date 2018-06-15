<?php

require_once 'classes/conexao.class.php';
require_once 'classes/usuario.class.php';

$conexao = new Conexao;
$conn = $conexao->Conectar();

$Classe = new Usuario(); // <-- Alterar o nome da classe
$Classe->conn = $conn;

$user = $_REQUEST['edtlogin'];
$password = $_REQUEST['edtsenha'];

if ($Classe->autenticaApp($user, $password)) {
   echo $Classe->codusuario.'|'.$Classe->nomecompleto;   
} else {
   echo "ERRO";   
}
?>