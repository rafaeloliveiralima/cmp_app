<?php
require_once('classes/conexao.class.php');

$conexao = new Conexao;
$conn = $conexao->Conectar();

$operacao = $_REQUEST['op'];
$id = $_REQUEST['id'];

$sql = 'select * from fauna.chamado';
$res = pg_exec($conn,$sql);

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
				  <?php while ($row=pg_fetch_array($res))
				  {?>
				  <tr>
					<td><?php echo $row['idchamado'];?></td>
					<td>
					<?php echo $row['animal'];?><br>
					<?php echo $row['local'];?><br>
					<?php echo $row['descricao'];?><br>
					<?php echo $row['data'];?><br>
					</td>
					<td><a onclick='carregaatendimento(<?php echo $row['idchamado'];?>)'><span class="glyphicon glyphicon-search"></span></a>
					</td>
				  </tr>
				  <?php } ?>				  
				</tbody>
			  </table>



