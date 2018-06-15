<?php
session_start();
require_once('classes/conexao.class.php');

$conexao = new Conexao;
$conn = $conexao->Conectar();

$Classe = new Agenda(); // <-- Alterar o nome da classe
$Classe->conn = $conn;

$operacao = $_REQUEST['op'];
$id = $_REQUEST['id'];
?>
<h3>Chamados</h3>
			  <p></p>
			  <table class="table">
				<thead>
				  <tr>
					<th>ID</th>
					<th>Descrição</th>
					<th> Ação </th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<td>1</td>
					<td>Cobra no lago Frei Leandro</td>
					<td><span class="glyphicon glyphicon-search"></span>
					<span class="glyphicon glyphicon-picture"></span>
					</td>
				  </tr>      
				  <tr class="success">
					<td>2</td>
					<td>Capivara na Presidência</td>
					<td><span class="glyphicon glyphicon-search"></span>
					<span class="glyphicon glyphicon-picture"></span>
					</td>
				</tr>
				  <tr class="danger">
					<td>3</td>
					<td>Garça no Rio dos Macacos</td>
					<td><span class="glyphicon glyphicon-search"></span>
					<span class="glyphicon glyphicon-picture"></span>
					</td>
				  </tr>
				  <tr class="info">
					<td>4</td>
					<td>Abelha no Pau-Brasil</td>
					<td><span class="glyphicon glyphicon-search"></span>
					<a data-toggle="pill" href="#fotos"><span class="glyphicon glyphicon-picture"></span></a>
					</td>
				  </tr>
				  <tr class="warning">
					<td>5</td>
					<td>Tartarugas no lago no centro de visitante</td>
					<td><a data-toggle="pill" href="#conschamado"><span class="glyphicon glyphicon-search"></span></a>
					<span class="glyphicon glyphicon-picture"></span>
					</td>
				  </tr>
				</tbody>
			  </table>



