<?php

require_once "./vendor/autoload.php"; //Adiciona o autoload

$dir = __DIR__.'/Public/paginas/';
$file = 'home.php';






// Verifica se o arquivo home existe no caminho /Public/paginas/

if(!file_exists($dir.$file))
{
    echo "Erro ao tentar executar a aplicação";
}
