<?php

$images = scandir("images"); // scandir escaneia um diretorio

$data = array();

foreach ($images as $img) {

	if(!in_array($img, array(".",".."))){  // in_arrayin_array($vardebusca, array("o que ignorar na busca")) faz uma busca dentro do array

		$filename = "images".DIRECTORY_SEPARATOR.$img;

		$info = pathinfo($filename);
		$info["size"] = filesize($filename);
		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
		$info["url"] = "http://localhost/curso-php7/DIR(secao14)/".str_replace("\\", "/", $filename); //.str_replace("\\", "/", $filename); esta mudando a barra para funcionar no windows

		array_push($data, $info);
	}
}

echo json_encode($data);

?>