<?php

session_start();
require_once 'classes/conexao.class.php';
require_once 'classes/usuario.class.php';

$conexao = new Conexao;
$conn = $conexao->Conectar();

$Classe = new Usuario(); // <-- Alterar o nome da classe
$Classe->conn = $conn;

$user = $_REQUEST['edtlogin'];
$password = $_REQUEST['edtsenha'];

if ($Classe->autenticaSemMensagem($user, $password)) {
//    $Classe->getByLogin($user);
//    $Classe->criaSessao($Classe->codusuario, $Classe->nomecompleto);
    header("Location: conschamado.php");

} else {
    header("Location: login.php?e=1");
}
?>