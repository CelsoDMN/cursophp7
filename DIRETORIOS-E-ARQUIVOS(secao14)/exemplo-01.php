<?php

$name = "images";

if(!is_dir($name)){

	mkdir($name); // cria um diretorio
	//rmdir($name); deleta um diretorio
	echo "diretorio criado";
}
else{
	echo "diretorio já existe";
}

?>