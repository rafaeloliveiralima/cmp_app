<?php
require_once('classes/conexao.class.php');

$conexao = new Conexao;
$conn = $conexao->Conectar();

$operacao = $_REQUEST['op'];
$id = $_REQUEST['id'];

$sql = 'select * from fauna.chamado where idchamado = '.$id;
$res = pg_exec($conn,$sql);
$row = pg_fetch_array($res);

//$myObj->name = "John";
//$myObj->age = 30;
//$myObj->city = "New York";


$myObj->idchamado = $row['idchamado'];
$myObj->data= $row['data'];
$myObj->hora= $row['hora'];
$myObj->idusuario= $row['idusuario'];
$myObj->solicitante= $row['solicitante'];
$myObj->animal= $row['animal'];
$myObj->descricao= $row['descricao'];
$myObj->local= $row['local'];
$myObj->idsituacaochamado= $row['idsituacaochamado'];

$myJSON = json_encode($myObj);

echo $myJSON;
?>