<?php

require_once "./vendor/autoload.php"; //Adiciona o autoload

$dir = __DIR__.'/Public/paginas/';
$file = 'home.php';

use App\Http\Login;
use App\Http\Home;




// Verifica se o arquivo home existe no caminho /Public/paginas/

if(!file_exists($dir.$file))
{
    echo "Erro ao tentar executar a aplicação";
}

$page = $_GET['page'];

switch($page)
{
    case '':
        $formLogin = new Login;
        $formLogin->index();
        break;
    case 'home':
        $homeDashBorad = new Home;
        $homeDashBorad->home();
        break;
}