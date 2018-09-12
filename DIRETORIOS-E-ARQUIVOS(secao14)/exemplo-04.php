<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

$headers = array();

foreach ($usuarios[0] as $key => $value) {

	array_push($headers, ucfirst($key)); //ucfirts deixa a primeira letra maiuscula
}

$file = fopen("usuarios.csv", "w+");

fwrite($file, implode(",", $headers)."\r\n"); //implode("o separador", a array())

foreach ($usuarios as $row) {  // nas linhas
	
	$data = array();

	foreach ($row as $key => $value) {  // nos campos (colunas)
		
		array_push($data, $value);
	}

	fwrite($file, implode(",", $data)."\r\n");
}

fclose($file);

?>