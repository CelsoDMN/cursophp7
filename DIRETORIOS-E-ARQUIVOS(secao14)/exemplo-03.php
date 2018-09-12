<?php

$file = fopen("log.txt", "a+"); // +w substitui tudo do arquivo por um novo conteudo =====  +a adiciona o conteudo novo sem apagar o antigo

fwrite($file, date("Y-m-d H:i:s"). "\r\n");
fclose($file);

echo "Arquivo criado com sucesso";

?>