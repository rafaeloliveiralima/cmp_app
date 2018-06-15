<?php 
$apiToken = "585866996:AAGl018A9au_2Qtw05ql4s4p-HTacPODNv4";

$data= array ('chat_id' => '@fauna_jb','text' => 'Hello world!');

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
?>