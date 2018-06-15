<?php

session_start();
require_once('classes/conexao.class.php');
require_once('classes/chamado.class.php');

/*if (!isset($_SESSION['s_idusuario'])) {
    header("Location: index.php");
}
*/
$conexao = new Conexao;
$conn = $conexao->Conectar();

$Classe = new Chamado(); // <-- Alterar o nome da classe
$Classe->conn = $conn;

$operacao = $_REQUEST['op'];
$id = $_REQUEST['id'];

if (($operacao == 'I') || ($operacao == 'A')) {

    $idchamado = $_REQUEST['id'];
    $solicitante = $_REQUEST['solicitante'];
    $local = $_REQUEST['local'];
    $animal = $_REQUEST['animal'];
    $descricao = $_REQUEST['descricao'];

    $Classe->idchamado = $idchamado;
    $Classe->solicitante = pg_escape_string(utf8_decode(trim($solicitante)));
    $Classe->local = pg_escape_string(trim($local));
    $Classe->animal = pg_escape_string(trim($animal));
    $Classe->descricao = pg_escape_string(trim($descricao));
    
}

if ($operacao == 'I') {
	$result = $Classe->incluir();
	echo $result;
}

if ($operacao == 'A') {

    $result = $Classe->alterar($id);
}

if ($operacao == 'E') {
    if (!empty($id)) {
        $result = $Classe->excluir($id);
    } else {
        $box = $_POST['id_'];
        while (list ($key, $val) = @each($box)) {
            $result = $Classe->excluir($val);
        }
    }
}

?>



