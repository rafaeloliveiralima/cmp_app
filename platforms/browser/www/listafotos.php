<?php

// variável que define o diretório das imagens
$dir = "./upload"; 

// esse seria o "handler" do diretório
$dh = opendir($dir); 

$id = $_REQUEST['id'];
//$id = '33';
$id=str_pad($id, 4, "0", STR_PAD_LEFT);
// loop que busca todos os arquivos até que não encontre mais nada
while (false !== ($filename = readdir($dh))) { 
// verificando se o arquivo é .jpg
	if (substr($filename,-4) == ".jpg") { 
	// mostra o nome do arquivo e um link para ele - pode ser mudado para mostrar diretamente a imagem :)
		if (substr($filename,0,4) == $id) { 
			echo '<img src="http://jabot.jbrj.gov.br/fauna/upload/'.$filename.'" class="img-thumbnail"><a href="'.$filename.'">'.$filename.'</a><br>'; 
		}
	}
}
?>